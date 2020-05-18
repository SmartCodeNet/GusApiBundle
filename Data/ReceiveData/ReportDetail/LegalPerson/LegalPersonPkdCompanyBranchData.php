<?php

namespace SmartCodeNet\GusApiBundle\Data\ReceiveData\ReportDetail\LegalPerson;

use SmartCodeNet\GusApiBundle\Constants\GusConstant;
use SmartCodeNet\GusApiBundle\Data\ReceiveData\ReportDetail\ReceiveDataAbstract;

class LegalPersonPkdCompanyBranchData extends ReceiveDataAbstract
{
    public static function getMethodName(): string
    {
        return GusConstant::LEGAL_PERSON_COMPANY_BRANCH_PKD_DATA;
    }

    public static function getPrefix(): string
    {
        return GusConstant::LEGAL_BRANCH_PREFIX;
    }
}
