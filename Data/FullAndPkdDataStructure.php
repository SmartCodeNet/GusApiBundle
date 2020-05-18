<?php

namespace SmartCodeNet\GusApiBundle\Data;

use SmartCodeNet\GusApiBundle\Data\ReceiveData\BusinessEntityType\BusinessEntityInterface;
use SmartCodeNet\GusApiBundle\Data\SendData\ExtendAndPkdData;
use SmartCodeNet\GusApiBundle\Data\SendData\ExtendData;

class FullAndPkdDataStructure extends DataStructureAbstract
{
    public function prepareDataStructure(BusinessEntityInterface $businessEntity): DataStructureInterface
    {
        $this->data = new ExtendAndPkdData($businessEntity->receiveDataByDataStructure($this));
        return $this;
    }

    public function getValues(): ExtendData
    {
        return $this->data;
    }
}
