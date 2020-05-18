<?php

namespace SmartCodeNet\GusApiBundle\Data;

use SmartCodeNet\GusApiBundle\Data\ReceiveData\BusinessEntityType\BusinessEntityInterface;
use SmartCodeNet\GusApiBundle\Data\SendData\SimpleAndPkdData;

class SimpleAndPkdDataStructure extends DataStructureAbstract
{
    public function prepareDataStructure(BusinessEntityInterface $businessEntity): DataStructureInterface
    {
        $this->data = new SimpleAndPkdData($businessEntity->receiveDataByDataStructure($this));
        return $this;
    }

    public function getValues(): SimpleAndPkdData
    {
        return $this->data;
    }
}
