<?php

namespace Concardis\Payengine\Lib\Test\Models\Response\Orders;

require_once __DIR__ . "/../../../../../../../../autoload.php";

use Concardis\Payengine\Lib\Models\Response\Orders\Transaction;
use Concardis\Payengine\Lib\Test\Fixture\Model\OrderFixture;
use Concardis\Payengine\Lib\Test\Fixture\Model\TransactionFixture;
use PHPUnit\Framework\TestCase;

class TransactionTest extends TestCase
{

    /**
     * @var Transaction
     */
    private $testedClass;

    public function setUp()
    {
        $this->testedClass = TransactionFixture::getResponseChild();
        parent::setUp();
    }

    /**
     * @test
     */
    public function toArrayTest_WithOrderAsId(){
        $modelToArray = $this->testedClass->__toArray();
        $this->assertArrayHasKey('description', $modelToArray);
        $this->assertArrayHasKey('type', $modelToArray);
        $this->assertArrayHasKey('canceledAmount', $modelToArray);
        $this->assertArrayHasKey('transactionId', $modelToArray);
        $this->assertArrayHasKey('currency', $modelToArray);
        $this->assertArrayHasKey('status', $modelToArray);
        $this->assertArrayHasKey('order', $modelToArray);
        $this->assertArrayHasKey('basket', $modelToArray);
        $this->assertArrayHasKey('refundedAmount', $modelToArray);
        $this->assertArrayHasKey('capturedAmount', $modelToArray);
        $this->assertArrayHasKey('initialAmount', $modelToArray);

    }

    /**
     * @test
     */
    public function fromArrayTest_WithOrderAsArray(){
        $transaction = $this->testedClass;
        $orderAsArray = OrderFixture::getResponse()->__toArray();
        $transaction->setOrder($orderAsArray);
        $responseFromMiddleware = $transaction->__toArray();

        $this->assertArrayHasKey('description', $responseFromMiddleware);
        $this->assertArrayHasKey('type', $responseFromMiddleware);
        $this->assertArrayHasKey('canceledAmount', $responseFromMiddleware);
        $this->assertArrayHasKey('transactionId', $responseFromMiddleware);
        $this->assertArrayHasKey('currency', $responseFromMiddleware);
        $this->assertArrayHasKey('status', $responseFromMiddleware);
        $this->assertArrayHasKey('order', $responseFromMiddleware);
        $this->assertArrayHasKey('basket', $responseFromMiddleware);
        $this->assertArrayHasKey('refundedAmount', $responseFromMiddleware);
        $this->assertArrayHasKey('capturedAmount', $responseFromMiddleware);
        $this->assertArrayHasKey('initialAmount', $responseFromMiddleware);
        $this->assertInternalType('array', $responseFromMiddleware['order']);

        $transactionFromResponse = new Transaction();
        $transactionFromResponse->__fromArray($responseFromMiddleware);

        $this->assertInstanceOf('Concardis\Payengine\Lib\Models\Response\Order', $transactionFromResponse->getOrder());
    }

    /**
     * @test
     */
    public function fromArrayTest_WithOrderAsArray_TransactionAsId(){
        $transaction = $this->testedClass;
        $order = OrderFixture::getResponse();
        $order->setTransactions(array('transaction_1234567890'));
        $orderAsArray = OrderFixture::getResponse()->__toArray();
        $transaction->setOrder($orderAsArray);
        $responseFromMiddleware = $transaction->__toArray();

        $this->assertArrayHasKey('description', $responseFromMiddleware);
        $this->assertArrayHasKey('type', $responseFromMiddleware);
        $this->assertArrayHasKey('canceledAmount', $responseFromMiddleware);
        $this->assertArrayHasKey('transactionId', $responseFromMiddleware);
        $this->assertArrayHasKey('currency', $responseFromMiddleware);
        $this->assertArrayHasKey('status', $responseFromMiddleware);
        $this->assertArrayHasKey('order', $responseFromMiddleware);
        $this->assertArrayHasKey('basket', $responseFromMiddleware);
        $this->assertArrayHasKey('refundedAmount', $responseFromMiddleware);
        $this->assertArrayHasKey('capturedAmount', $responseFromMiddleware);
        $this->assertArrayHasKey('initialAmount', $responseFromMiddleware);
        $this->assertInternalType('array', $responseFromMiddleware['order']);

        $transactionFromResponse = new Transaction();
        $transactionFromResponse->__fromArray($responseFromMiddleware);

        $this->assertInstanceOf('Concardis\Payengine\Lib\Models\Response\Order', $transactionFromResponse->getOrder());
    }


}