<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/feedback.proto

namespace Clarifai\Internal;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>clarifai.api.FeedbackInfo</code>
 */
class _FeedbackInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string end_user_id = 1;</code>
     */
    private $end_user_id = '';
    /**
     * Generated from protobuf field <code>string session_id = 2;</code>
     */
    private $session_id = '';
    /**
     * Generated from protobuf field <code>.clarifai.api.EventType event_type = 3;</code>
     */
    private $event_type = 0;
    /**
     * Generated from protobuf field <code>string output_id = 4;</code>
     */
    private $output_id = '';
    /**
     * Generated from protobuf field <code>string search_id = 5;</code>
     */
    private $search_id = '';

    public function __construct() {
        \GPBMetadata\Proto\Clarifai\Api\Feedback::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>string end_user_id = 1;</code>
     * @return string
     */
    public function getEndUserId()
    {
        return $this->end_user_id;
    }

    /**
     * Generated from protobuf field <code>string end_user_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setEndUserId($var)
    {
        GPBUtil::checkString($var, True);
        $this->end_user_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string session_id = 2;</code>
     * @return string
     */
    public function getSessionId()
    {
        return $this->session_id;
    }

    /**
     * Generated from protobuf field <code>string session_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setSessionId($var)
    {
        GPBUtil::checkString($var, True);
        $this->session_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.clarifai.api.EventType event_type = 3;</code>
     * @return int
     */
    public function getEventType()
    {
        return $this->event_type;
    }

    /**
     * Generated from protobuf field <code>.clarifai.api.EventType event_type = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setEventType($var)
    {
        GPBUtil::checkEnum($var, \Clarifai\Internal\_EventType::class);
        $this->event_type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string output_id = 4;</code>
     * @return string
     */
    public function getOutputId()
    {
        return $this->output_id;
    }

    /**
     * Generated from protobuf field <code>string output_id = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setOutputId($var)
    {
        GPBUtil::checkString($var, True);
        $this->output_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string search_id = 5;</code>
     * @return string
     */
    public function getSearchId()
    {
        return $this->search_id;
    }

    /**
     * Generated from protobuf field <code>string search_id = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setSearchId($var)
    {
        GPBUtil::checkString($var, True);
        $this->search_id = $var;

        return $this;
    }

}

