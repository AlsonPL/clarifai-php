<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/model_version.proto

namespace Clarifai\Internal;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>clarifai.api.ModelVersion</code>
 */
class _ModelVersion extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string id = 1;</code>
     */
    private $id = '';
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp created_at = 2;</code>
     */
    private $created_at = null;
    /**
     * Generated from protobuf field <code>.clarifai.api.status.Status status = 3;</code>
     */
    private $status = null;
    /**
     * Generated from protobuf field <code>uint32 active_concept_count = 4;</code>
     */
    private $active_concept_count = 0;
    /**
     * Generated from protobuf field <code>.clarifai.api.EvalMetrics metrics = 5;</code>
     */
    private $metrics = null;
    /**
     * Generated from protobuf field <code>uint32 total_input_count = 6;</code>
     */
    private $total_input_count = 0;
    /**
     * Generated from protobuf field <code>.clarifai.api.PretrainedModelConfig pretrained_model_config = 7;</code>
     */
    private $pretrained_model_config = null;

    public function __construct() {
        \GPBMetadata\Proto\Clarifai\Api\ModelVersion::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Generated from protobuf field <code>string id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp created_at = 2;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp created_at = 2;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreatedAt($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->created_at = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.clarifai.api.status.Status status = 3;</code>
     * @return \Clarifai\Internal\Status\_Status
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Generated from protobuf field <code>.clarifai.api.status.Status status = 3;</code>
     * @param \Clarifai\Internal\Status\_Status $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Internal\Status\_Status::class);
        $this->status = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 active_concept_count = 4;</code>
     * @return int
     */
    public function getActiveConceptCount()
    {
        return $this->active_concept_count;
    }

    /**
     * Generated from protobuf field <code>uint32 active_concept_count = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setActiveConceptCount($var)
    {
        GPBUtil::checkUint32($var);
        $this->active_concept_count = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.clarifai.api.EvalMetrics metrics = 5;</code>
     * @return \Clarifai\Internal\_EvalMetrics
     */
    public function getMetrics()
    {
        return $this->metrics;
    }

    /**
     * Generated from protobuf field <code>.clarifai.api.EvalMetrics metrics = 5;</code>
     * @param \Clarifai\Internal\_EvalMetrics $var
     * @return $this
     */
    public function setMetrics($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Internal\_EvalMetrics::class);
        $this->metrics = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 total_input_count = 6;</code>
     * @return int
     */
    public function getTotalInputCount()
    {
        return $this->total_input_count;
    }

    /**
     * Generated from protobuf field <code>uint32 total_input_count = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setTotalInputCount($var)
    {
        GPBUtil::checkUint32($var);
        $this->total_input_count = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.clarifai.api.PretrainedModelConfig pretrained_model_config = 7;</code>
     * @return \Clarifai\Internal\_PretrainedModelConfig
     */
    public function getPretrainedModelConfig()
    {
        return $this->pretrained_model_config;
    }

    /**
     * Generated from protobuf field <code>.clarifai.api.PretrainedModelConfig pretrained_model_config = 7;</code>
     * @param \Clarifai\Internal\_PretrainedModelConfig $var
     * @return $this
     */
    public function setPretrainedModelConfig($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Internal\_PretrainedModelConfig::class);
        $this->pretrained_model_config = $var;

        return $this;
    }

}

