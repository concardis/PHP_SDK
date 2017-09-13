<?php

namespace Concardis\Payengine\Lib\Internal\Util;


class TypeHelper
{

    /**
     * convert boolean to string values to avoid booleans to be send as integers within the queryString.
     *
     * @param $filter
     */
    public static function convertBooleanValues(array &$filter){
        foreach ($filter as $parameterName => $value){
            //convert boolean to string values to avoid booleans to be send as integers within the queryString.
            if($value === true){
                $filter[$parameterName] = 'true';
            }elseif ($value === false){
                $filter[$parameterName] = 'false';
            }
        }
    }

}