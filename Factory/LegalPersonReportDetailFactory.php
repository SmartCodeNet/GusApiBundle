<?php

namespace SmartCodeNet\GusApiBundle\Factory;

use SmartCodeNet\GusApiBundle\Data\ReceiveData\ReportDetail\LegalPerson\LegalPersonAgriculturalActivityData;
use SmartCodeNet\GusApiBundle\Data\ReceiveData\ReportDetail\LegalPerson\LegalPersonCeidgActivityData;
use SmartCodeNet\GusApiBundle\Data\ReceiveData\ReportDetail\LegalPerson\LegalPersonCompanyBranchData;
use SmartCodeNet\GusApiBundle\Data\ReceiveData\ReportDetail\LegalPerson\LegalPersonCompanyBranchListData;
use SmartCodeNet\GusApiBundle\Data\ReceiveData\ReportDetail\LegalPerson\LegalPersonOtherActivityData;
use SmartCodeNet\GusApiBundle\Data\ReceiveData\ReportDetail\LegalPerson\LegalPersonPkdCompanyBranchData;
use SmartCodeNet\GusApiBundle\Data\ReceiveData\ReportDetail\LegalPerson\LegalPersonPkdData;
use SmartCodeNet\GusApiBundle\Data\ReceiveData\ReportDetail\LegalPerson\LegalPersonRemoveActivityData;
use SmartCodeNet\GusApiBundle\Data\ReceiveData\ReportDetail\LegalPersonGeneralData;

final class LegalPersonReportDetailFactory
{
    public static function createLegalPersonGeneralData(): LegalPersonGeneralData
    {
        return new LegalPersonGeneralData();
    }

    public static function createLegalPersonPkdData(): LegalPersonPkdData
    {
        return new LegalPersonPkdData();
    }

    public static function createLegalPersonRemoveActivityData(): LegalPersonRemoveActivityData
    {
        return new LegalPersonRemoveActivityData();
    }

    public static function createLegalPersonPkdCompanyBranchData(): LegalPersonPkdCompanyBranchData
    {
        return new LegalPersonPkdCompanyBranchData();
    }

    public static function createLegalPersonOtherActivityData(): LegalPersonOtherActivityData
    {
        return new LegalPersonOtherActivityData();
    }

    public static function createLegalPersonCompanyBranchListData(): LegalPersonCompanyBranchListData
    {
        return new LegalPersonCompanyBranchListData();
    }

    public static function createLegalPersonCompanyBranchData(): LegalPersonCompanyBranchData
    {
        return new LegalPersonCompanyBranchData();
    }

    public static function createLegalPersonCeidgActivityData(): LegalPersonCeidgActivityData
    {
        return new LegalPersonCeidgActivityData();
    }

    public static function createLegalPersonAgriculturalActivityData(): LegalPersonAgriculturalActivityData
    {
        return new LegalPersonAgriculturalActivityData();
    }
}
