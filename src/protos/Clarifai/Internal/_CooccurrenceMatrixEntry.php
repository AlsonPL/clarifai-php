<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/model_version.proto

namespace Clarifai\Internal;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>clarifai.api.CooccurrenceMatrixEntry</code>
 */
class _CooccurrenceMatrixEntry extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string row = 1;</code>
     */
    private $row = '';
    /**
     * Generated from protobuf field <code>string col = 2;</code>
     */
    private $col = '';
    /**
     * Generated from protobuf field <code>uint32 count = 3;</code>
     */
    private $count = 0;

    public function __construct() {
        \GPBMetadata\Proto\Clarifai\Api\ModelVersion::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>string row = 1;</code>
     * @return string
     */
    public function getRow()
    {
        return $this->row;
    }

    /**
     * Generated from protobuf field <code>string row = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setRow($var)
    {
        GPBUtil::checkString($var, True);
        $this->row = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string col = 2;</code>
     * @return string
     */
    public function getCol()
    {
        return $this->col;
    }

    /**
     * Generated from protobuf field <code>string col = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setCol($var)
    {
        GPBUtil::checkString($var, True);
        $this->col = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 count = 3;</code>
     * @return int
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * Generated from protobuf field <code>uint32 count = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setCount($var)
    {
        GPBUtil::checkUint32($var);
        $this->count = $var;

        return $this;
    }

}

