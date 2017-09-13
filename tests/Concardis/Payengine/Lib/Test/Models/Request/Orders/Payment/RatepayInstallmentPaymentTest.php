<?php

namespace Concardis\Payengine\Lib\Test\Models\Request\Orders\Payment;

require_once __DIR__ . "/../../../../../../../../../autoload.php";

use \Concardis\Payengine\Lib\Models\Request\Orders\Payment\Payment;
use \PHPUnit\Framework\TestCase;

class RatepayInstallmentPaymentTest extends TestCase
{
    /**
     * @test
     */
    public function toArray() {
        $ratepayInstallmentPayment = new Payment();
        $ratepayInstallmentPayment->setRiskIdentId('riskidentid');
        $ratepayInstallmentPayment->setNumberOfRates('numberOfRates');
        $ratepayInstallmentPayment->setRate('rate');
        $ratepayInstallmentPayment->setLastRate('lastRate');
        $ratepayInstallmentPayment->setInterestRate('interestRate');
        $ratepayInstallmentPayment->setTotalAmount('totalAmount');

        $ratepayInstallmentPaymentSetter = new Payment();
        $ratepayInstallmentPaymentSetter->setRatepayInstallment(
            'riskidentid', 'rate', 'interestRate', 'numberOfRates',
            'totalAmount', 'lastRate'
        );

        $actual = $ratepayInstallmentPayment->__toArray();
        $actualSetter = $ratepayInstallmentPaymentSetter->__toArray();
        $expected = array(
            'riskIdentId' => "riskidentid",
            'numberOfRates' => "numberOfRates",
            'rate' => "rate",
            'lastRate' => "lastRate",
            'interestRate' => "interestRate",
            'totalAmount' => "totalAmount"
        );
        
        $this->assertEquals($expected, $actual);
        $this->assertEquals($expected, $actualSetter);
    }

    /**
     * @test
     */
    public function toArrayWithBankData() {
        $ratepayInstallmentPayment = new Payment();
        $ratepayInstallmentPayment->setRiskIdentId('riskidentid');
        $ratepayInstallmentPayment->setNumberOfRates('numberOfRates');
        $ratepayInstallmentPayment->setRate('rate');
        $ratepayInstallmentPayment->setLastRate('lastRate');
        $ratepayInstallmentPayment->setInterestRate('interestRate');
        $ratepayInstallmentPayment->setTotalAmount('totalAmount');
        $ratepayInstallmentPayment->setAccountHolder('accountholder');
        $ratepayInstallmentPayment->setBankName('bankname');
        $ratepayInstallmentPayment->setBic('bic');
        $ratepayInstallmentPayment->setIban('iban');

        $ratepayInstallmentPaymentSetter = new Payment();
        $ratepayInstallmentPaymentSetter->setRatepayInstallmentWithBankData(
            'riskidentid', 'iban', 'bic', 'accountholder', 'bankname',
            'rate', 'interestRate', 'numberOfRates',
            'totalAmount', 'lastRate'
        );

        $actual = $ratepayInstallmentPayment->__toArray();
        $actualSetter = $ratepayInstallmentPaymentSetter->__toArray();
        $expected = array(
            'riskIdentId' => "riskidentid",
            'numberOfRates' => "numberOfRates",
            'rate' => "rate",
            'lastRate' => "lastRate",
            'interestRate' => "interestRate",
            'totalAmount' => "totalAmount",
            'accountHolder' => "accountholder",
            'bankName' => "bankname",
            'bic' => "bic",
            'iban' => "iban"
        );

        $this->assertEquals($expected, $actual);
        $this->assertEquals($expected, $actualSetter);
    }

    /**
     * @test
     */
    public function toArrayWithPaymentInstrument() {
        $ratepayInstallmentPayment = new Payment();
        $ratepayInstallmentPayment->setRiskIdentId('riskidentid');
        $ratepayInstallmentPayment->setNumberOfRates('numberOfRates');
        $ratepayInstallmentPayment->setRate('rate');
        $ratepayInstallmentPayment->setLastRate('lastRate');
        $ratepayInstallmentPayment->setInterestRate('interestRate');
        $ratepayInstallmentPayment->setTotalAmount('totalAmount');
        $ratepayInstallmentPayment->setPaymentInstrumentId('paymentinstrumentid');

        $ratepayInstallmentPaymentSetter = new Payment();
        $ratepayInstallmentPaymentSetter->setRatepayInstallmentWithPaymentInstrument(
            'riskidentid', 'paymentinstrumentid',
            'rate', 'interestRate', 'numberOfRates',
            'totalAmount', 'lastRate'
        );

        $actual = $ratepayInstallmentPayment->__toArray();
        $actualSetter = $ratepayInstallmentPaymentSetter->__toArray();
        $expected = array(
            'riskIdentId' => "riskidentid",
            'numberOfRates' => "numberOfRates",
            'rate' => "rate",
            'lastRate' => "lastRate",
            'interestRate' => "interestRate",
            'totalAmount' => "totalAmount",
            'paymentInstrumentId' => "paymentinstrumentid"
        );

        $this->assertEquals($expected, $actual);
        $this->assertEquals($expected, $actualSetter);
    }

}
