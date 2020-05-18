<?php

namespace SmartCodeNet\GusApiBundle\Data\ReceiveData\ReportDetail\Partnership;

use SmartCodeNet\GusApiBundle\Constants\GusConstant;
use SmartCodeNet\GusApiBundle\Data\ReceiveData\ReportDetail\ReceiveDataAbstract;

class CivilLawPartnershipPartnerData extends ReceiveDataAbstract
{
    public static function getMethodName(): string
    {
        return GusConstant::CIVIL_LAW_PARTNERSHIP_PARTNERS_DATA;
    }

    public static function getPrefix(): string
    {
        return GusConstant::PARTNERSHIP_PREFIX;
    }
}
