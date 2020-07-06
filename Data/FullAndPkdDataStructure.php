<?php

namespace SmartCodeNet\GusApiBundle\Data;

use SmartCodeNet\GusApiBundle\Data\ReceiveData\BusinessEntityType\BusinessEntityInterface;
use SmartCodeNet\GusApiBundle\Data\SendData\ExtendAndPkdData;
use SmartCodeNet\GusApiBundle\Data\SendData\ExtendData;
use SmartCodeNet\GusApiBundle\ValueObject\ValueXmlHandler;

class FullAndPkdDataStructure extends DataStructureAbstract
{
    public function prepareDataStructure(?BusinessEntityInterface $businessEntity): DataStructureInterface
    {
        if ($businessEntity !== null) {
            $this->data = new ExtendAndPkdData($businessEntity->receiveDataByDataStructure($this));
        } else {
            $this->data = new ExtendAndPkdData(new ValueXmlHandler([]));
        }
        return $this;
    }

    public function getValues(): ExtendData
    {
        return $this->data;
    }
}
