<?php

namespace Concardis\Payengine\Lib\Internal\Util;


class ArrayHelper
{

    public static function isAssocArray($array){
        if (array() === $array){
            return false;
        }
        return array_keys($array) !== range(0, count($array) - 1);
    }

}