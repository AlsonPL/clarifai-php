<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/model_version.proto

namespace Clarifai\Internal;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>clarifai.api.PrecisionRecallCurve</code>
 */
class _PrecisionRecallCurve extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated float recall = 1;</code>
     */
    private $recall;
    /**
     * Generated from protobuf field <code>repeated float precision = 2;</code>
     */
    private $precision;
    /**
     * Generated from protobuf field <code>repeated float thresholds = 3;</code>
     */
    private $thresholds;

    public function __construct() {
        \GPBMetadata\Proto\Clarifai\Api\ModelVersion::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>repeated float recall = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRecall()
    {
        return $this->recall;
    }

    /**
     * Generated from protobuf field <code>repeated float recall = 1;</code>
     * @param float[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRecall($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::FLOAT);
        $this->recall = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated float precision = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPrecision()
    {
        return $this->precision;
    }

    /**
     * Generated from protobuf field <code>repeated float precision = 2;</code>
     * @param float[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPrecision($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::FLOAT);
        $this->precision = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated float thresholds = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getThresholds()
    {
        return $this->thresholds;
    }

    /**
     * Generated from protobuf field <code>repeated float thresholds = 3;</code>
     * @param float[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setThresholds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::FLOAT);
        $this->thresholds = $arr;

        return $this;
    }

}

