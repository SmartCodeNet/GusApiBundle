<?php

namespace SmartCodeNet\GusApiBundle\Helper;

use SmartCodeNet\GusApiBundle\Constants\GusDataGetConstant;

class GusResponseHelper
{
    public static function errorExists(array $array): bool
    {
        return array_key_exists(GusDataGetConstant::ERROR_KEY, $array) &&
            $array[GusDataGetConstant::ERROR_KEY] === '4';
    }
}
