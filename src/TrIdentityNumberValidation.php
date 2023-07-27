<?php

namespace NetkodBilisim;

class TrIdentityNumberValidation
{
    protected static array $cache = [];

    /**
     * @param int $identity_number
     *
     * @return bool
     */
    public static function validate(int $identity_number): bool
    {
        if (isset(static::$cache[$identity_number])) {
            return static::$cache[$identity_number];
        }

        if (!preg_match('/^[1-9]{1}[0-9]{9}[0,2,4,6,8]{1}$/', $identity_number)) {
            return static::$cache[$identity_number] = false;
        }

        $array = array_map(function ($value) {
            return intval($value);
        }, str_split($identity_number));

        $oddIndexNumber = $array[0] + $array[2] + $array[4] + $array[6] + $array[8];
        $evenIndexNumber = $array[1] + $array[3] + $array[5] + $array[7];
        $digit10 = ($oddIndexNumber * 7 - $evenIndexNumber) % 10;
        $total = ($oddIndexNumber + $evenIndexNumber + $array[9]) % 10;

        if ($digit10 !== $array[9] || $total !== $array[10]) {
            return static::$cache[$identity_number] = false;
        }

        return static::$cache[$identity_number] = true;
    }
}
