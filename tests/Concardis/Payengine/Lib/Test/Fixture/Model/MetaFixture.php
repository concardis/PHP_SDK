<?php

namespace Concardis\Payengine\Lib\Test\Fixture\Model;


use Concardis\Payengine\Lib\Models\Response\Orders\Meta;

class MetaFixture
{

    /**
     * @return Meta
     */
    public static function getResponse(){
        $model = new Meta();
        $model->setDescriptor("someDescription");
        $model->setPaymentFirstDay(1);
        $model->setRiskIdentId("SomeRatePAYID");
        $model->setInterestRate(1.5);
        $model->setTotalAmount(1200);
        $model->setNumberOfRates(7);
        $model->setRate(150);
        $model->setLastRate(300);
        return $model;
    }
}