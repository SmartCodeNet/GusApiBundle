<?php

namespace SmartCodeNet\GusApiBundle\Data\ReceiveData\BusinessEntityType;

use SmartCodeNet\GusApiBundle\Data\DataStructureInterface;
use SmartCodeNet\GusApiBundle\Data\FullAndPkdDataStructure;
use SmartCodeNet\GusApiBundle\Data\FullDataStructure;
use SmartCodeNet\GusApiBundle\Data\PkdDataStructure;
use SmartCodeNet\GusApiBundle\Data\ReceiveData\TypeManager\LegalPersonTypeManager;
use SmartCodeNet\GusApiBundle\Data\SimpleAndPkdDataStructure;
use SmartCodeNet\GusApiBundle\Factory\LegalPersonReportDetailFactory;
use SmartCodeNet\GusApiBundle\ValueObject\ValueXmlHandler;

class LegalPerson extends BusinessEntityAbstract
{

    public function receiveDataByDataStructure(DataStructureInterface $dataStructure): ValueXmlHandler
    {
        $reportInformation = $this->setReceiveData(
            LegalPersonReportDetailFactory::createLegalPersonGeneralData()
        )
            ->getSpecificData();
        $report = $this->setReceiveData(LegalPersonTypeManager::decide($reportInformation))->getSpecificData();
        $report = array_merge($report, $reportInformation);

        // add PKD collection
        if ($dataStructure instanceof SimpleAndPkdDataStructure ||
            $dataStructure instanceof FullAndPkdDataStructure
        ) {
            $report1 = $this->setReceiveData(LegalPersonReportDetailFactory::createLegalPersonPkdData())
                ->getSpecificData();
            $report['pkdList'] = array_merge($report['pkdList'] = [], $report1);
        }

        // add branch list data
        if ($dataStructure instanceof FullDataStructure ||
            $dataStructure instanceof FullAndPkdDataStructure
        ) {
            $report1 = $this->setReceiveData(LegalPersonReportDetailFactory::createLegalPersonCompanyBranchListData())
                ->getSpecificData();
            $report['branchList'] = array_merge($report['branchList'] = [], $report1);
        }

        if ($dataStructure instanceof PkdDataStructure) {
            $report = $this->setReceiveData(LegalPersonReportDetailFactory::createLegalPersonPkdData())
                ->getSpecificData();
        }

        return ValueXmlHandler::createFromArray($report);
    }
}
