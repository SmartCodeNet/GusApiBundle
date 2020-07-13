<?php

namespace SmartCodeNet\GusApiBundle\Service;

use SmartCodeNet\GusApiBundle\Data\DataStructureInterface;
use SmartCodeNet\GusApiBundle\DataType\InputDataTypeInterface;
use SmartCodeNet\GusApiBundle\Exception\BusinessEntityNotFoundException;
use SmartCodeNet\GusApiBundle\Extension\Gus\GusExtension;
use SmartCodeNet\GusApiBundle\Factory\PersonEntityTypeDataFactory;

final class GusService
{
    private $gusExtension;

    public function __construct(GusExtension $gusExtension)
    {
        $this->gusExtension = $gusExtension;
    }

    /**
     * @param DataStructureInterface $dataStructure
     * @param InputDataTypeInterface $inputDataType
     * @return DataStructureInterface
     * @throws BusinessEntityNotFoundException
     */
    public function loadData(
        DataStructureInterface $dataStructure,
        InputDataTypeInterface $inputDataType
    ): DataStructureInterface {
        $report = $inputDataType->getGeneralData($this->gusExtension);

        $businessEntity = PersonEntityTypeDataFactory::create($report, $this->gusExtension);

        return $dataStructure->prepareDataStructure($businessEntity);
    }
}
