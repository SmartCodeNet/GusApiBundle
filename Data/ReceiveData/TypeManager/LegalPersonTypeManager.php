<?php

namespace SmartCodeNet\GusApiBundle\Data\ReceiveData\TypeManager;

use SmartCodeNet\GusApiBundle\Constants\GusDataGetConstant;
use SmartCodeNet\GusApiBundle\Data\ReceiveData\ReportDetail\ReceiveDataInterface;
use SmartCodeNet\GusApiBundle\Factory\LegalPersonReportDetailFactory;

class LegalPersonTypeManager implements TypeManagerInterface
{
    public static function decide(array $generalData): ReceiveDataInterface
    {
        $receiveData = LegalPersonReportDetailFactory::createLegalPersonCeidgActivityData();
        if ($generalData[GusDataGetConstant::CEIDG_ACTIVITY]) {
            $receiveData = LegalPersonReportDetailFactory::createLegalPersonCeidgActivityData();
        }

        if ($generalData[GusDataGetConstant::AGRICULTURAL_ACTIVITY]) {
            $receiveData = LegalPersonReportDetailFactory::createLegalPersonAgriculturalActivityData();
        }

        if ($generalData[GusDataGetConstant::OTHER_ACTIVITY]) {
            $receiveData = LegalPersonReportDetailFactory::createLegalPersonOtherActivityData();
        }

        if ($generalData[GusDataGetConstant::REMOVED_ACTIVITY_2014]) {
            $receiveData = LegalPersonReportDetailFactory::createLegalPersonRemoveActivityData();
        }

        return $receiveData;
    }
}
