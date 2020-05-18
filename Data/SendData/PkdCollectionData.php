<?php

namespace SmartCodeNet\GusApiBundle\Data\SendData;

use SmartCodeNet\GusApiBundle\ValueObject\ValueXmlHandler;

class PkdCollectionData
{
    /** @var array */
    private $pkdCollection;

    public function __construct(ValueXmlHandler $valueXmlHandler = null)
    {
        $this->pkdCollection = [];
        if ($valueXmlHandler !== null) {
            foreach ($valueXmlHandler->getValues() as $pkd) {
                $this->pkdCollection[] = new PkdData($pkd);
            }
        }
    }

    public function getPkdCollection(): array
    {
        return $this->pkdCollection;
    }
}
