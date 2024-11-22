<?php

class Validator {
    public static function required($value) {
        $value = trim($value);
        return strlen($value) === 0;
    }

    public static function maxLength($value, $max) {
        return strlen($value) > $max;
    }

    public static function email($value) {
        return filter_input($value, FILTER_VALIDATE_EMAIL);
    }
}