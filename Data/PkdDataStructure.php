<?php

namespace SmartCodeNet\GusApiBundle\Data;

use SmartCodeNet\GusApiBundle\Data\ReceiveData\BusinessEntityType\BusinessEntityInterface;
use SmartCodeNet\GusApiBundle\Data\SendData\PkdCollectionData;
use SmartCodeNet\GusApiBundle\ValueObject\ValueXmlHandler;

class PkdDataStructure extends DataStructureAbstract
{
    public function prepareDataStructure(?BusinessEntityInterface $businessEntity): DataStructureInterface
    {
        if ($businessEntity !== null) {
            $this->data = new PkdCollectionData($businessEntity->receiveDataByDataStructure($this));
        } else {
            $this->data = new PkdCollectionData(new ValueXmlHandler([]));
        }
        return $this;
    }

    public function getValues(): PkdCollectionData
    {
        return $this->data;
    }
}
