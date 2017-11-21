<?php

namespace Concardis\Payengine\Lib\Test\Models\Request\Orders;

require_once __DIR__ . "/../../../../../../../../autoload.php";

use Concardis\Payengine\Lib\Models\Request\Orders\Item;
use PHPUnit\Framework\TestCase;

class ItemTest extends TestCase
{

    /**
     * @test
     */
    public function toArray_filterEmptyStrings() {
        $expected = array(
            'name' => 'test',
            'tax' => '19'
        );

        $item = new Item();
        $item->setArticleNumber('');
        $item->setName('test');
        $item->setTax(19);

        $actual = $item->__toArray();

        $this->assertEquals($expected, $actual);
    }

    /**
     * @test
     */
    public function toArray() {
        $expected = array(
            'articleNumber' => 'PE12345',
            'name' => 'test',
            'quantity' => 4,
            'tax' => 19,
            'totalPrice' => 400,
            'totalPriceWithTax' => 476,
            'unitPrice' => 100,
            'unitPriceWithTax' => 119
        );

        $item = new Item();
        $item->setArticleNumber('PE12345');
        $item->setName('test');
        $item->setQuantity(4);
        $item->setTax(19);
        $item->setTotalPrice(400);
        $item->setTotalPriceWithTax(476);
        $item->setUnitPrice(100);
        $item->setUnitPriceWithTax(119);

        $actual = $item->__toArray();

        $this->assertEquals($expected, $actual);
    }

}