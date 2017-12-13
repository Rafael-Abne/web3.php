<?php

namespace Web3\Validators;

use Web3\Validators\IValidator;

class TagValidator
{
    /**
     * validate
     *
     * @param string $value
     * @return bool
     */
    public static function validate($value)
    {
        $tags = [
            'latest', 'earliest', 'pending'
        ];

        // maybe change in_int and preg_match future
        return (is_int($value) || preg_match('/^0x[a-fA-f0-9]+/', $value) >= 1 || in_array($value, $tags));
    }
}