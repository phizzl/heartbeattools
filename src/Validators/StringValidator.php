<?php


namespace Phizzl\UptimeTools\Validators;


class StringValidator implements TypeValidatorInterface
{
    /**
     * @param mixed $value
     * @return bool
     */
    public function isValid($value){
        return is_string($value);
    }
}