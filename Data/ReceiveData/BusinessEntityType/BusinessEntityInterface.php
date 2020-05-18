<?php

namespace SmartCodeNet\GusApiBundle\Data\ReceiveData\BusinessEntityType;

use SmartCodeNet\GusApiBundle\Data\DataStructureInterface;
use SmartCodeNet\GusApiBundle\Data\ReceiveData\ReportDetail\ReceiveDataInterface;
use SmartCodeNet\GusApiBundle\DTO\SearchReportDTO;
use SmartCodeNet\GusApiBundle\ValueObject\ValueXmlHandler;

interface BusinessEntityInterface
{
    public function receiveDataByDataStructure(DataStructureInterface $dataStructure): ValueXmlHandler;

    public function setReceiveData(ReceiveDataInterface $receiveData): BusinessEntityInterface;

    public function getSpecificData();

    public function setSearchReport(SearchReportDTO $searchReportDTO):BusinessEntityInterface;

    public function getSearchReport(): SearchReportDTO;
}
