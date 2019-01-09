<?php
/**
 * Copyright 2019 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace Google\Ads\GoogleAds\Examples\BasicOperations;

require __DIR__ . '/../../vendor/autoload.php';

use GetOpt\GetOpt;
use Google\Ads\GoogleAds\Examples\Utils\ArgumentNames;
use Google\Ads\GoogleAds\Examples\Utils\ArgumentParser;
use Google\Ads\GoogleAds\Lib\GoogleAdsClient;
use Google\Ads\GoogleAds\Lib\GoogleAdsClientBuilder;
use Google\Ads\GoogleAds\Lib\GoogleAdsException;
use Google\Ads\GoogleAds\Lib\OAuth2TokenBuilder;
use Google\Ads\GoogleAds\V0\Errors\GoogleAdsError;
use Google\Ads\GoogleAds\V0\Services\GoogleAdsRow;
use Google\ApiCore\ApiException;

/**
 * This example gets Hotel-ads performance statistics for the 50 Hotel ad groups with the most
 * impressions over the last 7 days.
 */
class GetHotelAdsPerformance
{
    const CUSTOMER_ID = 'INSERT_CUSTOMER_ID_HERE';
    const PAGE_SIZE = 50;

    public static function main()
    {
        // Either pass the required parameters for this example on the command line, or insert them
        // into the constants above.
        $options = (new ArgumentParser())->parseCommandArguments([
            ArgumentNames::CUSTOMER_ID => GetOpt::REQUIRED_ARGUMENT
        ]);

        // Generate a refreshable OAuth2 credential for authentication.
        $oAuth2Credential = (new OAuth2TokenBuilder())->fromFile()->build();

        // Construct a Google Ads client configured from a properties file and the
        // OAuth2 credentials above.
        $googleAdsClient = (new GoogleAdsClientBuilder())->fromFile()
            ->withOAuth2Credential($oAuth2Credential)
            ->build();

        try {
            self::runExample(
                $googleAdsClient,
                $options[ArgumentNames::CUSTOMER_ID] ?: self::CUSTOMER_ID
            );
        } catch (GoogleAdsException $googleAdsException) {
            printf(
                "Request with ID '%s' has failed.%sGoogle Ads failure details:%s",
                $googleAdsException->getRequestId(),
                PHP_EOL,
                PHP_EOL
            );
            foreach ($googleAdsException->getGoogleAdsFailure()->getErrors() as $error) {
                /** @var GoogleAdsError $error */
                printf(
                    "\t%s: %s%s",
                    $error->getErrorCode()->getErrorCode(),
                    $error->getMessage(),
                    PHP_EOL
                );
            }
        } catch (ApiException $apiException) {
            printf(
                "ApiException was thrown with message '%s'.%s",
                $apiException->getMessage(),
                PHP_EOL
            );
        }
    }

    /**
     * Runs the example.
     *
     * @param GoogleAdsClient $googleAdsClient the Google Ads API client
     * @param int $customerId the client customer ID without hyphens
     */
    public static function runExample(GoogleAdsClient $googleAdsClient, $customerId)
    {
        $googleAdsServiceClient = $googleAdsClient->getGoogleAdsServiceClient();
        // Creates a query that retrieves hotel-ads statistics for each campaign and ad group.
        // Returned statistics will be segmented by the check-in day of week and length of stay.
        $query =
            "SELECT campaign.id, "
                . "campaign.advertising_channel_type, "
                . "ad_group.id, "
                . "ad_group.status, "
                . "metrics.impressions, "
                . "metrics.clicks, "
                . "metrics.hotel_average_lead_value_micros, "
                . "hotel_check_in_day_of_week, "
                . "hotel_length_of_stay "
            . "FROM hotel_performance_view "
            . "WHERE date DURING LAST_7_DAYS "
                . "AND campaign.advertising_channel_type = 'HOTEL' "
                . "AND ad_group.status = 'ENABLED' "
            . "ORDER BY metrics.impressions DESC "
            . "LIMIT 50";

        // Issues a search request by specifying page size.
        $response =
            $googleAdsServiceClient->search($customerId, $query, ['pageSize' => self::PAGE_SIZE]);

        // Iterates over all rows in all pages and prints the requested field values for each row.
        foreach ($response->iterateAllElements() as $googleAdsRow) {
            /** @var GoogleAdsRow $googleAdsRow */
            // Note: A mapping of enum names to values for days of week can be found at
            // DayOfWeek.php.
            printf(
                "Ad group with ID %d in campaign with ID %d "
                . "with hotel check-in day of week as %d and %d day(s) of stay "
                . "had %d impression(s) and %d average lead value (in micros) "
                . "during the last 7 days.%s",
                $googleAdsRow->getAdGroup()->getId()->getValue(),
                $googleAdsRow->getCampaign()->getId()->getValue(),
                $googleAdsRow->getHotelCheckInDayOfWeek(),
                $googleAdsRow->getHotelLengthOfStay()->getValue(),
                $googleAdsRow->getMetrics()->getImpressions()->getValue(),
                $googleAdsRow->getMetrics()->getHotelAverageLeadValueMicros()->getValue(),
                PHP_EOL
            );
        }
    }
}

GetHotelAdsPerformance::main();