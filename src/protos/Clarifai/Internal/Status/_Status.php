<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/status/status.proto

namespace Clarifai\Internal\Status;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>clarifai.api.status.Status</code>
 */
class _Status extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.clarifai.api.status.StatusCode code = 1;</code>
     */
    private $code = 0;
    /**
     * Generated from protobuf field <code>string description = 2;</code>
     */
    private $description = '';
    /**
     * Generated from protobuf field <code>string details = 3;</code>
     */
    private $details = '';
    /**
     * Generated from protobuf field <code>repeated string stack_trace = 4;</code>
     */
    private $stack_trace;
    /**
     * Generated from protobuf field <code>uint32 percent_completed = 5;</code>
     */
    private $percent_completed = 0;
    /**
     * Generated from protobuf field <code>uint32 time_remaining = 6;</code>
     */
    private $time_remaining = 0;
    /**
     * Generated from protobuf field <code>string req_id = 7;</code>
     */
    private $req_id = '';
    /**
     * Generated from protobuf field <code>string internal_details = 8;</code>
     */
    private $internal_details = '';

    public function __construct() {
        \GPBMetadata\Proto\Clarifai\Api\Status\Status::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>.clarifai.api.status.StatusCode code = 1;</code>
     * @return int
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Generated from protobuf field <code>.clarifai.api.status.StatusCode code = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setCode($var)
    {
        GPBUtil::checkEnum($var, \Clarifai\Internal\Status\_StatusCode::class);
        $this->code = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string description = 2;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Generated from protobuf field <code>string description = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string details = 3;</code>
     * @return string
     */
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * Generated from protobuf field <code>string details = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setDetails($var)
    {
        GPBUtil::checkString($var, True);
        $this->details = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated string stack_trace = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getStackTrace()
    {
        return $this->stack_trace;
    }

    /**
     * Generated from protobuf field <code>repeated string stack_trace = 4;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setStackTrace($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->stack_trace = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 percent_completed = 5;</code>
     * @return int
     */
    public function getPercentCompleted()
    {
        return $this->percent_completed;
    }

    /**
     * Generated from protobuf field <code>uint32 percent_completed = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setPercentCompleted($var)
    {
        GPBUtil::checkUint32($var);
        $this->percent_completed = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 time_remaining = 6;</code>
     * @return int
     */
    public function getTimeRemaining()
    {
        return $this->time_remaining;
    }

    /**
     * Generated from protobuf field <code>uint32 time_remaining = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setTimeRemaining($var)
    {
        GPBUtil::checkUint32($var);
        $this->time_remaining = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string req_id = 7;</code>
     * @return string
     */
    public function getReqId()
    {
        return $this->req_id;
    }

    /**
     * Generated from protobuf field <code>string req_id = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setReqId($var)
    {
        GPBUtil::checkString($var, True);
        $this->req_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string internal_details = 8;</code>
     * @return string
     */
    public function getInternalDetails()
    {
        return $this->internal_details;
    }

    /**
     * Generated from protobuf field <code>string internal_details = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setInternalDetails($var)
    {
        GPBUtil::checkString($var, True);
        $this->internal_details = $var;

        return $this;
    }

}

