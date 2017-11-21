<?php

namespace Concardis\Payengine\Lib\Test\Models\Request\Orders;

require_once __DIR__ . "/../../../../../../../../autoload.php";

use Concardis\Payengine\Lib\Models\Request\Orders\ReferencingTransaction;
use PHPUnit\Framework\TestCase;

class ReferencingTransactionTest extends TestCase
{

    /**
     * @test
     */
    public function toArray_filterEmptyStrings() {
        $expected = array(
            'description' => 'test',
            'initialAmount' => 100
        );

        $referencingTransaction = new ReferencingTransaction();
        $referencingTransaction->setCurrency('');
        $referencingTransaction->setDescription('test');
        $referencingTransaction->setInitialAmount(100);

        $actual = $referencingTransaction->__toArray();

        $this->assertEquals($expected, $actual);
    }

    /**
     * @test
     */
    public function toArray() {
        $item = array(
            'articleNumber' => 'PE12345',
            'name' => 'test',
            'quantity' => 4,
            'tax' => 19,
            'totalPrice' => 400,
            'totalPriceWithTax' => 476,
            'unitPrice' => 100,
            'unitPriceWithTax' => 119
        );

        $expected = array(
            'description' => 'testString',
            'initialAmount' => 100,
            'currency' => 'EUR',
            'basket' => array($item)
        );

        $referencingTransaction = new ReferencingTransaction();
        $referencingTransaction->setDescription('testString');
        $referencingTransaction->setInitialAmount(100);
        $referencingTransaction->setCurrency('EUR');
        $referencingTransaction->setBasket(array($item));

        $actual = $referencingTransaction->__toArray();

        $this->assertEquals($expected, $actual);
    }

}