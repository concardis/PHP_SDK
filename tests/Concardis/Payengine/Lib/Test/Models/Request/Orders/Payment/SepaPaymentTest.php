<?php

namespace Concardis\Payengine\Lib\Test\Models\Request\Orders\Payment;

require_once __DIR__ . "/../../../../../../../../../autoload.php";

use \Concardis\Payengine\Lib\Models\Request\Orders\Payment\Payment;
use \Concardis\Payengine\Lib\Models\Request\Orders\Mandate;
use \PHPUnit\Framework\TestCase;

class SepaPaymentTest extends TestCase
{
    /**
     * @test
     */
    public function toArray() {
        $sepaPayment = new Payment();
        $sepaPayment->setAccountHolder('accountholder');
        $sepaPayment->setBankName('bankname');
        $sepaPayment->setBic('bic');
        $sepaPayment->setIban('iban');

        $mandate = new Mandate();
        $mandate->setMandateId('mandateid');
        $mandate->setCreatedDateTime('createddatetime');
        $mandate->setMandateText('mandatetext');
        $sepaPayment->setMandate($mandate);

        $sepaPaymentSetter = new Payment();
        $sepaPaymentSetter->setSepa($mandate, 'iban', 'bic', 'accountholder', 'bankname');

        $actual = $sepaPayment->__toArray();
        $actualSetter = $sepaPaymentSetter->__toArray();
        $expected = array(
            'accountHolder' => "accountholder",
            'bankName' => "bankname",
            'bic' => "bic",
            'iban' => "iban",
            'mandate' => array(
                'mandateId' => "mandateid",
                'createdDateTime' => "createddatetime",
                'mandateText' => "mandatetext"
            )
        );
        
        $this->assertEquals($expected, $actual);
        $this->assertEquals($expected, $actualSetter);
    }

    /**
     * @test
     */
    public function toArrayWithPaymentInstrument() {
        $sepaPayment = new Payment();
        $sepaPayment->setPaymentInstrumentId('paymentinstrumentid');

        $mandate = new Mandate();
        $mandate->setMandateId('mandateid');
        $mandate->setCreatedDateTime('createddatetime');
        $mandate->setMandateText('mandatetext');
        $sepaPayment->setMandate($mandate);

        $sepaPaymentSetter = new Payment();
        $sepaPaymentSetter->setSepaWithPaymentInstrument($mandate, 'paymentinstrumentid');

        $actual = $sepaPayment->__toArray();
        $actualSetter = $sepaPaymentSetter->__toArray();
        $expected = array(
            'paymentInstrumentId' => 'paymentinstrumentid',
            'mandate' => array(
                'mandateId' => "mandateid",
                'createdDateTime' => "createddatetime",
                'mandateText' => "mandatetext"
            )
        );

        $this->assertEquals($expected, $actual);
        $this->assertEquals($expected, $actualSetter);
    }

}