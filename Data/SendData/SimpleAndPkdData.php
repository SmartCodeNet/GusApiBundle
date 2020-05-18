<?php

namespace SmartCodeNet\GusApiBundle\Data\SendData;

use SmartCodeNet\GusApiBundle\ValueObject\ValueXmlHandler;

class SimpleAndPkdData extends SimpleData
{
    /**
     * @var array|null
     */
    private $pkdList;

    public function __construct(ValueXmlHandler $valueXmlHandler)
    {
        parent::__construct($valueXmlHandler);
        $this->pkdList = [];
        if ($valueXmlHandler->getValue('pkdList') !== null) {
            foreach ($valueXmlHandler->getValue('pkdList')->getValues() as $pkdValue) {
                $this->pkdList[] = new PkdData($pkdValue);
            }
        }
    }

    public function getPkdList(): ?array
    {
        return $this->pkdList;
    }
}
