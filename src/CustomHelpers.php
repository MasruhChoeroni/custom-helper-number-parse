<?php

namespace Mchoe\ParseNumber;

class CustomHelpers {
    public static function parseNumber($number, $dec_point=null)
    {
        if (empty($dec_point)) {
            $locale = localeconv();
            $dec_point = $locale['decimal_point'];
        }
        if (substr($number,0,1)=='-') {
            return (floatval(str_replace($dec_point, '.', preg_replace('/[^\d'.preg_quote($dec_point).']/', '', $number))) * -1);
        } else {
            return floatval(str_replace($dec_point, '.', preg_replace('/[^\d'.preg_quote($dec_point).']/', '', $number)));
        }
    }
}
