<?php

namespace SmartCodeNet\GusApiBundle\Helper;

class DTOHelper
{
    public const CAN_OVERRIDE = true;

    /**
     * Function to override fields in DTO classes
     *
     * @param string|null $fliedValue
     * @param string|null $value
     * @return string|null
     */
    public static function overrideField(
        ?string $fliedValue,
        ?string $value
    ): ?string {
        if ($value !== null && !empty($value)) {
            if (($fliedValue !== null && self::CAN_OVERRIDE) || $fliedValue === null) {
                $fliedValue = $value;
            }
        }
        return $fliedValue;
    }
}
