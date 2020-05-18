<?php

namespace SmartCodeNet\GusApiBundle\Data\SendData;

use SmartCodeNet\GusApiBundle\Constants\GusDataGetConstant;
use SmartCodeNet\GusApiBundle\ValueObject\ValueXmlHandler;

class ExtendData extends SimpleData
{
    /** @var string|null  */
    private $nipStatus;

    /** @var string|null  */
    private $numberRegisterRecord;

    /** @var string|null  */
    private $dateRegisterRecord;

    /** @var string|null  */
    private $dateCreated;

    /** @var string|null  */
    private $dateCompanyStarted;

    /** @var string|null  */
    private $dateRegonRegistration;

    /** @var string|null  */
    private $dateSuspension;

    /** @var string|null  */
    private $dateResume;

    /** @var string|null  */
    private $dateEnd;

    /** @var string|null  */
    private $dateChanged;

    /** @var string|null  */
    private $dateRegonRemoved;

    /** @var string|null  */
    private $dateBankruptcyStart;

    /** @var string|null  */
    private $dateBankruptcyEnd;

    /** @var string|null  */
    private $legalFormBaseSymbol;

    /** @var string|null  */
    private $legalFormDetailSymbol;

    /** @var string|null  */
    private $financialFormSymbol;

    /** @var string|null  */
    private $propertyFormSymbol;

    /** @var string|null  */
    private $foundationBodySymbol;

    /** @var string|null  */
    private $registrationBodySymbol;

    /** @var string|null  */
    private $typeRegisterRegistrySymbol;

    /** @var string|null  */
    private $legalFormBase;

    /** @var string|null  */
    private $legalFormDetail;

    /** @var string|null  */
    private $financialForm;

    /** @var string|null  */
    private $propertyForm;

    /** @var string|null  */
    private $foundationBody;

    /** @var string|null  */
    private $registrationBody;

    /** @var string|null  */
    private $typeRegisterRegistry;

    /** @var string|null  */
    private $branchAmount;

    /** @var array */
    private $branchList;

    public function __construct(ValueXmlHandler $valueXmlHandler)
    {
        parent::__construct($valueXmlHandler);
        $this->nipStatus = $valueXmlHandler->getValue(GusDataGetConstant::NIP_STATUS);
        $this->numberRegisterRecord = $valueXmlHandler->getValue(GusDataGetConstant::NUMBER_REGISTRATION);
        $this->dateRegisterRecord = $valueXmlHandler->getValue(GusDataGetConstant::DATE_REGISTRATION);
        $this->dateCompanyStarted = $valueXmlHandler->getValue(GusDataGetConstant::DATE_STARTED);

        $this->dateRegonRegistration = $valueXmlHandler->getValue(GusDataGetConstant::DATE_REGON_REGISTRATION);
        $this->dateSuspension = $valueXmlHandler->getValue(GusDataGetConstant::DATE_SUSPENSION);
        $this->dateResume = $valueXmlHandler->getValue(GusDataGetConstant::DATE_RESUME);
        $this->dateChanged = $valueXmlHandler->getValue(GusDataGetConstant::DATE_DATA_CHANGED);
        $this->dateCreated =  $valueXmlHandler->getValue(GusDataGetConstant::DATE_CREATED);
        $this->dateEnd = $valueXmlHandler->getValue(GusDataGetConstant::DATE_END);
        $this->dateRegonRemoved = $valueXmlHandler->getValue(GusDataGetConstant::DATE_REGON_REMOVED);
        $this->dateBankruptcyStart = $valueXmlHandler->getValue(GusDataGetConstant::DATE_BANKRUPTCY_START);
        $this->dateBankruptcyEnd = $valueXmlHandler->getValue(GusDataGetConstant::DATE_BANKRUPTCY_END);
        $this->dateEnd = $valueXmlHandler->getValue(GusDataGetConstant::DATE_END);

        $this->legalFormBaseSymbol = $valueXmlHandler->getValue(GusDataGetConstant::LEGAL_FORM_BASE_SYMBOL);
        $this->legalFormDetailSymbol = $valueXmlHandler->getValue(GusDataGetConstant::LEGAL_FORM_DETAIL_SYMBOL);
        $this->financialFormSymbol = $valueXmlHandler->getValue(GusDataGetConstant::FINANCIAL_FORM_SYMBOL);
        $this->propertyFormSymbol = $valueXmlHandler->getValue(GusDataGetConstant::PROPERTY_FORM_SYMBOL);
        $this->foundationBodySymbol = $valueXmlHandler->getValue(GusDataGetConstant::FOUNDATION_BODY_SYMBOL);
        $this->registrationBodySymbol = $valueXmlHandler->getValue(GusDataGetConstant::REGISTRATION_BODY_SYMBOL);
        $this->typeRegisterRegistrySymbol = $valueXmlHandler->getValue(GusDataGetConstant::TYPE_REGISTER_REGISTRY_SYMBOL);
        $this->legalFormBase = $valueXmlHandler->getValue(GusDataGetConstant::LEGAL_FORM_BASE);
        $this->legalFormDetail = $valueXmlHandler->getValue(GusDataGetConstant::LEGAL_FORM_DETAIL);
        $this->financialForm = $valueXmlHandler->getValue(GusDataGetConstant::FINANCIAL_FORM);
        $this->propertyForm = $valueXmlHandler->getValue(GusDataGetConstant::PROPERTY_FORM);
        $this->foundationBody = $valueXmlHandler->getValue(GusDataGetConstant::FOUNDATION_BODY);
        $this->registrationBody = $valueXmlHandler->getValue(GusDataGetConstant::TYPE_REGISTER_REGISTRY);
        $this->typeRegisterRegistry = $valueXmlHandler->getValue(GusDataGetConstant::FINANCIAL_FORM_SYMBOL);
        $this->branchAmount = $valueXmlHandler->getValue(GusDataGetConstant::BRANCH_AMOUNT);
        $this->branchList = [];
        if ($valueXmlHandler->getValue('branchList') !== null) {
            foreach ($valueXmlHandler->getValue('branchList')->getValues() as $branchValue) {
                $this->branchList[] = new CompanyBranchData($branchValue);
            }
        }
    }

    public function getNipStatus(): ?string
    {
        return $this->nipStatus;
    }

    public function getNumberRegisterRecord(): ?string
    {
        return $this->numberRegisterRecord;
    }

    public function getDateRegisterRecord(): ?string
    {
        return $this->dateRegisterRecord;
    }

    public function getDateCreated(): ?string
    {
        return $this->dateCreated;
    }

    public function getDateCompanyStarted(): ?string
    {
        return $this->dateCompanyStarted;
    }

    public function getDateRegonRegistration(): ?string
    {
        return $this->dateRegonRegistration;
    }

    public function getDateSuspension(): ?string
    {
        return $this->dateSuspension;
    }

    public function getDateResume(): ?string
    {
        return $this->dateResume;
    }

    public function getDateEnd(): ?string
    {
        return $this->dateEnd;
    }

    public function getDateChanged(): ?string
    {
        return $this->dateChanged;
    }

    public function getDateRegonRemoved(): ?string
    {
        return $this->dateRegonRemoved;
    }

    public function getDateBankruptcyStart(): ?string
    {
        return $this->dateBankruptcyStart;
    }

    public function getDateBankruptcyEnd(): ?string
    {
        return $this->dateBankruptcyEnd;
    }

    public function getLegalFormBaseSymbol(): ?string
    {
        return $this->legalFormBaseSymbol;
    }

    public function getLegalFormDetailSymbol(): ?string
    {
        return $this->legalFormDetailSymbol;
    }

    public function getFinancialFormSymbol(): ?string
    {
        return $this->financialFormSymbol;
    }

    public function getPropertyFormSymbol(): ?string
    {
        return $this->propertyFormSymbol;
    }

    public function getFoundationBodySymbol(): ?string
    {
        return $this->foundationBodySymbol;
    }

    public function getRegistrationBodySymbol(): ?string
    {
        return $this->registrationBodySymbol;
    }

    public function getTypeRegisterRegistrySymbol(): ?string
    {
        return $this->typeRegisterRegistrySymbol;
    }

    public function getLegalFormBase(): ?string
    {
        return $this->legalFormBase;
    }

    public function getLegalFormDetail(): ?string
    {
        return $this->legalFormDetail;
    }

    public function getFinancialForm(): ?string
    {
        return $this->financialForm;
    }

    public function getPropertyForm(): ?string
    {
        return $this->propertyForm;
    }

    public function getFoundationBody(): ?string
    {
        return $this->foundationBody;
    }

    public function getRegistrationBody(): ?string
    {
        return $this->registrationBody;
    }

    public function getTypeRegisterRegistry(): ?string
    {
        return $this->typeRegisterRegistry;
    }

    public function getBranchAmount(): ?string
    {
        return $this->branchAmount;
    }

    public function getBranchList(): array
    {
        return $this->branchList;
    }
}
