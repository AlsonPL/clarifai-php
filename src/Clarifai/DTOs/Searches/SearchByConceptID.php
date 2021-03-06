<?php

namespace Clarifai\DTOs\Searches;

use Clarifai\Internal\_And;
use Clarifai\Internal\_Concept;
use Clarifai\Internal\_Data;
use Clarifai\Internal\_Input;
use Clarifai\Internal\_Output;

class SearchByConceptID extends SearchBy
{

    private $ownerObjectKey;
    private $conceptID;

    /**
     * Ctor.
     * @param string $ownerObjectKey
     * @param string $conceptID
     */
    public function __construct($ownerObjectKey, $conceptID)
    {
        $this->ownerObjectKey = $ownerObjectKey;
        $this->conceptID = $conceptID;
    }

    public function serialize()
    {
        $data = (new _Data())
            ->setConcepts([(new _Concept())->setId($this->conceptID)]);
        if ($this->ownerObjectKey == 'input') {
            return ((new _And())
                ->setInput((new _Input())
                    ->setData($data)));
        } else if ($this->ownerObjectKey == 'output') {
            return ((new _And())
                ->setOutput((new _Output())
                    ->setData($data)));
        } else {
            throw new \Exception('Unknown $ownerObjectKey: ' . $this->ownerObjectKey);
        }
    }
}
