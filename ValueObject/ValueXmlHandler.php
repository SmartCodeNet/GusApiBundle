<?php

namespace SmartCodeNet\GusApiBundle\ValueObject;

class ValueXmlHandler
{
    /** @var array  */
    private $arrayValues;

    public function __construct(array $arrayValues)
    {
        $this->arrayValues = $arrayValues;
    }

    public static function createFromXml(array $data): ValueXmlHandler
    {
        $array = [];
        foreach ($data as $key => $val) {
            $array[(string)$key] = (string)$val;
        }

        return new ValueXmlHandler($array);
    }

    public static function createFromArray(array $data): ValueXmlHandler
    {
        $array = [];
        foreach ($data as $key => $val) {
            if (is_array($val)) {
                $array[$key] = self::createFromArray($val);
            } else {
                $array[(string)$key] = (string)$val;
            }
        }

        return new ValueXmlHandler($array);
    }

    public function getValues(): array
    {
        return $this->arrayValues;
    }

    /**
     * @param string $key
     * @return mixed|null
     */
    public function getValue(string $key)
    {
        $val = $this->arrayValues[$key]??null;
        return (!empty($val))? $val :null;
    }
}
