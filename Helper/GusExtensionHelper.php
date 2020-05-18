<?php

namespace SmartCodeNet\GusApiBundle\Helper;

class GusExtensionHelper
{
    public static function removePrefix(array $dataArray, string $prefix): array
    {
        $array = [];
        foreach ($dataArray as $key => &$data) {
            if (is_array($data)) {
                $data = self::removePrefix($data, $prefix);
            }
            $key = str_replace([$prefix, '_'], '', $key);
            $array[$key] = $data;
        }
        return $array;
    }
}
