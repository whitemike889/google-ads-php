<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v3/resources/language_constant.proto

namespace Google\Ads\GoogleAds\V3\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A language.
 *
 * Generated from protobuf message <code>google.ads.googleads.v3.resources.LanguageConstant</code>
 */
class LanguageConstant extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The resource name of the language constant.
     * Language constant resource names have the form:
     * `languageConstants/{criterion_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     */
    protected $resource_name = '';
    /**
     * Output only. The ID of the language constant.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $id = null;
    /**
     * Output only. The language code, e.g. "en_US", "en_AU", "es", "fr", etc.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue code = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $code = null;
    /**
     * Output only. The full name of the language in English, e.g., "English (US)", "Spanish",
     * etc.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue name = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $name = null;
    /**
     * Output only. Whether the language is targetable.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue targetable = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $targetable = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           Output only. The resource name of the language constant.
     *           Language constant resource names have the form:
     *           `languageConstants/{criterion_id}`
     *     @type \Google\Protobuf\Int64Value $id
     *           Output only. The ID of the language constant.
     *     @type \Google\Protobuf\StringValue $code
     *           Output only. The language code, e.g. "en_US", "en_AU", "es", "fr", etc.
     *     @type \Google\Protobuf\StringValue $name
     *           Output only. The full name of the language in English, e.g., "English (US)", "Spanish",
     *           etc.
     *     @type \Google\Protobuf\BoolValue $targetable
     *           Output only. Whether the language is targetable.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V3\Resources\LanguageConstant::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The resource name of the language constant.
     * Language constant resource names have the form:
     * `languageConstants/{criterion_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * Output only. The resource name of the language constant.
     * Language constant resource names have the form:
     * `languageConstants/{criterion_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setResourceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource_name = $var;

        return $this;
    }

    /**
     * Output only. The ID of the language constant.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Int64Value
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Returns the unboxed value from <code>getId()</code>

     * Output only. The ID of the language constant.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string|null
     */
    public function getIdUnwrapped()
    {
        return $this->readWrapperValue("id");
    }

    /**
     * Output only. The ID of the language constant.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->id = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int64Value object.

     * Output only. The ID of the language constant.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string|null $var
     * @return $this
     */
    public function setIdUnwrapped($var)
    {
        $this->writeWrapperValue("id", $var);
        return $this;}

    /**
     * Output only. The language code, e.g. "en_US", "en_AU", "es", "fr", etc.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue code = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Returns the unboxed value from <code>getCode()</code>

     * Output only. The language code, e.g. "en_US", "en_AU", "es", "fr", etc.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue code = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string|null
     */
    public function getCodeUnwrapped()
    {
        return $this->readWrapperValue("code");
    }

    /**
     * Output only. The language code, e.g. "en_US", "en_AU", "es", "fr", etc.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue code = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setCode($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->code = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Output only. The language code, e.g. "en_US", "en_AU", "es", "fr", etc.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue code = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string|null $var
     * @return $this
     */
    public function setCodeUnwrapped($var)
    {
        $this->writeWrapperValue("code", $var);
        return $this;}

    /**
     * Output only. The full name of the language in English, e.g., "English (US)", "Spanish",
     * etc.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue name = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Returns the unboxed value from <code>getName()</code>

     * Output only. The full name of the language in English, e.g., "English (US)", "Spanish",
     * etc.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue name = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string|null
     */
    public function getNameUnwrapped()
    {
        return $this->readWrapperValue("name");
    }

    /**
     * Output only. The full name of the language in English, e.g., "English (US)", "Spanish",
     * etc.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue name = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->name = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Output only. The full name of the language in English, e.g., "English (US)", "Spanish",
     * etc.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue name = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string|null $var
     * @return $this
     */
    public function setNameUnwrapped($var)
    {
        $this->writeWrapperValue("name", $var);
        return $this;}

    /**
     * Output only. Whether the language is targetable.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue targetable = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\BoolValue
     */
    public function getTargetable()
    {
        return $this->targetable;
    }

    /**
     * Returns the unboxed value from <code>getTargetable()</code>

     * Output only. Whether the language is targetable.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue targetable = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return bool|null
     */
    public function getTargetableUnwrapped()
    {
        return $this->readWrapperValue("targetable");
    }

    /**
     * Output only. Whether the language is targetable.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue targetable = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\BoolValue $var
     * @return $this
     */
    public function setTargetable($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\BoolValue::class);
        $this->targetable = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\BoolValue object.

     * Output only. Whether the language is targetable.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue targetable = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param bool|null $var
     * @return $this
     */
    public function setTargetableUnwrapped($var)
    {
        $this->writeWrapperValue("targetable", $var);
        return $this;}

}

