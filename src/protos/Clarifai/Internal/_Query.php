<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/search.proto

namespace Clarifai\Internal;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>clarifai.api.Query</code>
 */
class _Query extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .clarifai.api.And ands = 1;</code>
     */
    private $ands;
    /**
     * Generated from protobuf field <code>string language = 2;</code>
     */
    private $language = '';

    public function __construct() {
        \GPBMetadata\Proto\Clarifai\Api\Search::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>repeated .clarifai.api.And ands = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAnds()
    {
        return $this->ands;
    }

    /**
     * Generated from protobuf field <code>repeated .clarifai.api.And ands = 1;</code>
     * @param \Clarifai\Internal\_And[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAnds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Clarifai\Internal\_And::class);
        $this->ands = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string language = 2;</code>
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Generated from protobuf field <code>string language = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setLanguage($var)
    {
        GPBUtil::checkString($var, True);
        $this->language = $var;

        return $this;
    }

}
