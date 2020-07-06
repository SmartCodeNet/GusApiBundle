<?php

namespace SmartCodeNet\GusApiBundle\Data;

use SmartCodeNet\GusApiBundle\Data\ReceiveData\BusinessEntityType\BusinessEntityInterface;

interface DataStructureInterface
{
    public function prepareDataStructure(?BusinessEntityInterface $businessEntity): DataStructureInterface;
}
