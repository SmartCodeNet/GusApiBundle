<?php

namespace SmartCodeNet\GusApiBundle\Data\SendData;

use SmartCodeNet\GusApiBundle\Constants\GusDataGetConstant;
use SmartCodeNet\GusApiBundle\ValueObject\ValueXmlHandler;

class SimpleData implements SendDataInterface
{
    /** @var string|null  */
    private $regon;

    /** @var string|null  */
    private $nip;

    /** @var string|null  */
    private $name;

    /** @var string|null  */
    private $shortName;

    /** @var string|null  */
    private $phoneNumber;

    /** @var string|null  */
    private $phoneExtension;

    /** @var string|null  */
    private $fax;

    /** @var string|null  */
    private $emailAddress;

    /** @var string|null  */
    private $formBase;

    /** @var string|null  */
    private $formDetail;

    /** @var string|null  */
    private $financialForm;

    /** @var string|null  */
    private $propertyForm;

    /** @var SimpleOfficeData|null  */
    private $officeData;

    public function __construct(ValueXmlHandler $valueXmlHandler)
    {
        $this->regon = $valueXmlHandler->getValue(GusDataGetConstant::REGON9);
        $this->nip = $valueXmlHandler->getValue(GusDataGetConstant::NIP);
        $this->name = $valueXmlHandler->getValue(GusDataGetConstant::NAME);
        $this->shortName = $valueXmlHandler->getValue(GusDataGetConstant::SHORT_NAME);
        $this->phoneNumber = $valueXmlHandler->getValue(GusDataGetConstant::PHONE);
        $this->phoneExtension = $valueXmlHandler->getValue(GusDataGetConstant::PHONE_EXTENSION);
        $this->fax = $valueXmlHandler->getValue(GusDataGetConstant::FAX);
        $this->emailAddress = $valueXmlHandler->getValue(GusDataGetConstant::EMAIL);
        $this->officeData = new SimpleOfficeData($valueXmlHandler);
    }

    public function getRegon(): ?string
    {
        return $this->regon;
    }

    public function getNip(): ?string
    {
        return $this->nip;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function getShortName(): ?string
    {
        return $this->shortName;
    }

    public function getPhoneNumber(): ?string
    {
        return $this->phoneNumber;
    }

    public function getPhoneExtension(): ?string
    {
        return $this->phoneExtension;
    }

    public function getFax(): ?string
    {
        return $this->fax;
    }

    public function getEmailAddress(): ?string
    {
        return $this->emailAddress;
    }

    public function getFormBase(): ?string
    {
        return $this->formBase;
    }

    public function getFormDetail(): ?string
    {
        return $this->formDetail;
    }

    public function getFinancialForm(): ?string
    {
        return $this->financialForm;
    }

    public function getPropertyForm(): ?string
    {
        return $this->propertyForm;
    }

    public function getOfficeData(): ?SimpleOfficeData
    {
        return $this->officeData;
    }
}
