<?php

namespace SmartCodeNet\GusApiBundle\Data;

use SmartCodeNet\GusApiBundle\Data\ReceiveData\BusinessEntityType\BusinessEntityInterface;
use SmartCodeNet\GusApiBundle\Data\SendData\SimpleData;
use SmartCodeNet\GusApiBundle\ValueObject\ValueXmlHandler;

class SimpleDataStructure extends DataStructureAbstract
{
    public function prepareDataStructure(?BusinessEntityInterface $businessEntity): DataStructureInterface
    {
        if ($businessEntity !== null) {
            $this->data = new SimpleData($businessEntity->receiveDataByDataStructure($this));
        } else {
            $this->data = new SimpleData(new ValueXmlHandler([]));
        }

        return $this;
    }

    public function getValues(): SimpleData
    {
        return $this->data;
    }
}
