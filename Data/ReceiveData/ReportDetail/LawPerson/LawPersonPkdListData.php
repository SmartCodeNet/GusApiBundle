<?php

namespace SmartCodeNet\GusApiBundle\Data\ReceiveData\ReportDetail\LawPerson;

use SmartCodeNet\GusApiBundle\Constants\GusConstant;
use SmartCodeNet\GusApiBundle\Data\ReceiveData\ReportDetail\ReceiveDataAbstract;

class LawPersonPkdListData extends ReceiveDataAbstract
{
    public static function getMethodName(): string
    {
        return GusConstant::LAW_PERSON_COMPANY_BRANCH_PKD_DATA;
    }

    public static function getPrefix(): string
    {
        return GusConstant::LEGAL_PREFIX;
    }
}
