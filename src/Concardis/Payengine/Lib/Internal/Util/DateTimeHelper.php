<?php


namespace Concardis\Payengine\Lib\Internal\Util;


class DateTimeHelper
{

    /**
     * @param $numeric
     *
     * @return \DateTime
     * @throws \Exception
     */
    public static function convertNumericToDateTime($numeric){
        $isDateTime = false;
        $isValidTimeStamp = false;
        if($numeric instanceof \DateTime){
            $isDateTime = true;
        }elseif (self::isValidTimeStamp($numeric)){
            $isValidTimeStamp = true;
        }else{
            throw new \Exception("Must be a valid numeric value or DateTime");
        }

        $dateTime = null;
        if($isValidTimeStamp){
            $dateTime = new \DateTime("@$numeric");
        }elseif($isDateTime){
            $dateTime = $numeric;
        }

        return $dateTime;
    }

    /**
     * @param $timestamp
     *
     * @return bool
     */
    public static function isValidTimeStamp($timestamp){
        $check = (is_int($timestamp) || is_float($timestamp))? $timestamp : (string) (int) $timestamp;
        return  ($check === $timestamp) && ( (int) $timestamp <=  PHP_INT_MAX) && ( (int) $timestamp >= ~PHP_INT_MAX);
    }

    /**
     * @param \DateTime $dateTime
     *
     * @return int
     */
    public static function getMillisecondFromDateTime(\DateTime $dateTime){
        $timestampInSec = $dateTime->getTimestamp();
        return (int) round($timestampInSec * 1000 );
    }


}