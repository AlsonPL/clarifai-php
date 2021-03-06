<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/concept.proto

namespace Clarifai\Internal;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>clarifai.api.PostConceptsSearchesRequest</code>
 */
class _PostConceptsSearchesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.clarifai.api.UserAppIDSet user_app_id = 1;</code>
     */
    private $user_app_id = null;
    /**
     * Generated from protobuf field <code>.clarifai.api.ConceptQuery concept_query = 2;</code>
     */
    private $concept_query = null;
    /**
     * Generated from protobuf field <code>.Pagination pagination = 3;</code>
     */
    private $pagination = null;

    public function __construct() {
        \GPBMetadata\Proto\Clarifai\Api\Concept::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>.clarifai.api.UserAppIDSet user_app_id = 1;</code>
     * @return \Clarifai\Internal\_UserAppIDSet
     */
    public function getUserAppId()
    {
        return $this->user_app_id;
    }

    /**
     * Generated from protobuf field <code>.clarifai.api.UserAppIDSet user_app_id = 1;</code>
     * @param \Clarifai\Internal\_UserAppIDSet $var
     * @return $this
     */
    public function setUserAppId($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Internal\_UserAppIDSet::class);
        $this->user_app_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.clarifai.api.ConceptQuery concept_query = 2;</code>
     * @return \Clarifai\Internal\_ConceptQuery
     */
    public function getConceptQuery()
    {
        return $this->concept_query;
    }

    /**
     * Generated from protobuf field <code>.clarifai.api.ConceptQuery concept_query = 2;</code>
     * @param \Clarifai\Internal\_ConceptQuery $var
     * @return $this
     */
    public function setConceptQuery($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Internal\_ConceptQuery::class);
        $this->concept_query = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.Pagination pagination = 3;</code>
     * @return \Pagination
     */
    public function getPagination()
    {
        return $this->pagination;
    }

    /**
     * Generated from protobuf field <code>.Pagination pagination = 3;</code>
     * @param \Pagination $var
     * @return $this
     */
    public function setPagination($var)
    {
        GPBUtil::checkMessage($var, \Pagination::class);
        $this->pagination = $var;

        return $this;
    }

}

