<?php

namespace SmartCodeNet\GusApiBundle\Data;

use SmartCodeNet\GusApiBundle\Data\ReceiveData\BusinessEntityType\BusinessEntityInterface;
use SmartCodeNet\GusApiBundle\Data\SendData\PkdCollectionData;

class PkdDataStructure extends DataStructureAbstract
{
    public function prepareDataStructure(BusinessEntityInterface $businessEntity): DataStructureInterface
    {
        $this->data = new PkdCollectionData($businessEntity->receiveDataByDataStructure($this));
        return $this;
    }

    public function getValues(): PkdCollectionData
    {
        return $this->data;
    }
}
