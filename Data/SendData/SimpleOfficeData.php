<?php

namespace SmartCodeNet\GusApiBundle\Data\SendData;

use SmartCodeNet\GusApiBundle\Constants\GusDataGetConstant;
use SmartCodeNet\GusApiBundle\ValueObject\ValueXmlHandler;

class SimpleOfficeData implements SendDataInterface
{
    /**
     * @var string|null
     */
    private $houseNumber;

    /**
     * @var string|null
     */
    private $apartmentNumber;

    /**
     * @var string|null
     */
    private $country;

    /**
     * @var string|null
     */
    private $province;

    /**
     * @var string|null
     */
    private $county;

    /**
     * @var string|null
     */
    private $community;

    /**
     * @var string|null
     */
    private $city;

    /**
     * @var string|null
     */
    private $postOfficeCity;

    /**
     * @var string|null
     */
    private $street;

    /**
     * @var string|null
     */
    private $zipCode;

    public function __construct(ValueXmlHandler $valueXmlHandler)
    {
        $this->country = $valueXmlHandler->getValue(GusDataGetConstant::COUNTRY);
        $this->province = $valueXmlHandler->getValue(GusDataGetConstant::PROVINCE);
        $this->county = $valueXmlHandler->getValue(GusDataGetConstant::COUNTY);
        $this->community = $valueXmlHandler->getValue(GusDataGetConstant::COMMUNITY);
        $this->city = $valueXmlHandler->getValue(GusDataGetConstant::PLACE);
        $this->postOfficeCity = $valueXmlHandler->getValue(GusDataGetConstant::PLACE_POST_OFFICE);
        $this->street = $valueXmlHandler->getValue(GusDataGetConstant::STREET);
        $this->houseNumber = $valueXmlHandler->getValue(GusDataGetConstant::ADDRESS_BUILDING_NUMBER);
        $this->apartmentNumber = $valueXmlHandler->getValue(GusDataGetConstant::ADDRESS_APARTMENT_NUMBER);
        $this->zipCode = $valueXmlHandler->getValue(GusDataGetConstant::ADDRESS_ZIPCODE);
    }

    public function getHouseNumber(): ?string
    {
        return $this->houseNumber;
    }

    public function getApartmentNumber(): ?string
    {
        return $this->apartmentNumber;
    }

    public function getCountry(): ?string
    {
        return $this->country;
    }

    public function getProvince(): ?string
    {
        return $this->province;
    }

    public function getCounty(): ?string
    {
        return $this->county;
    }

    public function getCommunity(): ?string
    {
        return $this->community;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function getPostOfficeCity(): ?string
    {
        return $this->postOfficeCity;
    }

    public function getStreet(): ?string
    {
        return $this->street;
    }

    public function getZipCode(): ?string
    {
        return $this->zipCode;
    }
}
