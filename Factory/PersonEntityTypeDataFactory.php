<?php

namespace SmartCodeNet\GusApiBundle\Factory;

use SmartCodeNet\GusApiBundle\Constants\GusConstant;
use SmartCodeNet\GusApiBundle\Data\ReceiveData\BusinessEntityType\BusinessEntityInterface;
use SmartCodeNet\GusApiBundle\Data\ReceiveData\BusinessEntityType\LawPerson;
use SmartCodeNet\GusApiBundle\Data\ReceiveData\BusinessEntityType\LegalPerson;
use SmartCodeNet\GusApiBundle\Data\ReceiveData\BusinessEntityType\LocalUnitLawPerson;
use SmartCodeNet\GusApiBundle\Data\ReceiveData\BusinessEntityType\LocalUnitLegalPerson;
use SmartCodeNet\GusApiBundle\DTO\SearchReportDTO;
use SmartCodeNet\GusApiBundle\Extension\Gus\GusExtension;

final class PersonEntityTypeDataFactory
{
    public static function create(
        SearchReportDTO $searchReportDTO,
        GusExtension $gusExtension
    ): ?BusinessEntityInterface {
        $entity = null;
        switch (strtoupper($searchReportDTO->getType())) {
            case GusConstant::LEGAL_PERSON_SYMBOL:
                $entity = (new LegalPerson($gusExtension))->setSearchReport($searchReportDTO);
                break;
            case GusConstant::LAW_PERSON_SYMBOL:
                $entity = (new LawPerson($gusExtension))->setSearchReport($searchReportDTO);
                break;
            case GusConstant::LOCAL_UNIT_LAW_PERSON_SYMBOL:
                $entity = (new LocalUnitLawPerson($gusExtension))->setSearchReport($searchReportDTO);
                break;
            case GusConstant::LOCAL_UNIT_LEGAL_PERSON_SYMBOL:
                $entity = (new LocalUnitLegalPerson($gusExtension))->setSearchReport($searchReportDTO);
                break;
            default:
                $entity = null;
                break;

        }
        return $entity;
    }
}
