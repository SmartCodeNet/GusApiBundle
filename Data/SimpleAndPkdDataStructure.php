<?php

namespace SmartCodeNet\GusApiBundle\Data;

use SmartCodeNet\GusApiBundle\Data\ReceiveData\BusinessEntityType\BusinessEntityInterface;
use SmartCodeNet\GusApiBundle\Data\SendData\SimpleAndPkdData;
use SmartCodeNet\GusApiBundle\ValueObject\ValueXmlHandler;

class SimpleAndPkdDataStructure extends DataStructureAbstract
{
    public function prepareDataStructure(?BusinessEntityInterface $businessEntity): DataStructureInterface
    {
        if ($businessEntity !== null) {
            $this->data = new SimpleAndPkdData($businessEntity->receiveDataByDataStructure($this));
        } else {
            $this->data = new SimpleAndPkdData(new ValueXmlHandler([]));
        }
        return $this;
    }

    public function getValues(): SimpleAndPkdData
    {
        return $this->data;
    }
}
