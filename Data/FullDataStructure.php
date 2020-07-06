<?php

namespace SmartCodeNet\GusApiBundle\Data;

use SmartCodeNet\GusApiBundle\Data\ReceiveData\BusinessEntityType\BusinessEntityInterface;
use SmartCodeNet\GusApiBundle\Data\SendData\ExtendData;
use SmartCodeNet\GusApiBundle\ValueObject\ValueXmlHandler;

class FullDataStructure extends DataStructureAbstract
{
    public function prepareDataStructure(?BusinessEntityInterface $businessEntity): DataStructureInterface
    {
        if ($businessEntity !== null) {
            $this->data = new ExtendData($businessEntity->receiveDataByDataStructure($this));
        } else {
            $this->data = new ExtendData(new ValueXmlHandler([]));
        }
        return $this;
    }

    public function getValues(): ExtendData
    {
        return $this->data;
    }
}
