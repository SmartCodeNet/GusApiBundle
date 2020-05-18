<?php

namespace SmartCodeNet\GusApiBundle\Data;

use SmartCodeNet\GusApiBundle\Data\ReceiveData\BusinessEntityType\BusinessEntityInterface;
use SmartCodeNet\GusApiBundle\Data\SendData\SimpleData;

class SimpleDataStructure extends DataStructureAbstract
{
    public function prepareDataStructure(BusinessEntityInterface $businessEntity): DataStructureInterface
    {
        $this->data = new SimpleData($businessEntity->receiveDataByDataStructure($this));

        return $this;
    }

    public function getValues(): SimpleData
    {
        return $this->data;
    }
}
