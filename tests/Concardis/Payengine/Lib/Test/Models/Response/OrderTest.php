<?php

namespace Concardis\Payengine\Lib\Test\Models\Response;

require_once __DIR__ . "/../../../../../../../autoload.php";

use Concardis\Payengine\Lib\Models\Response\Order;
use PHPUnit\Framework\TestCase;
use Concardis\Payengine\Lib\Test\Fixture\Model\OrderFixture;

/**
 * Class OrderTest
 * @package Concardis\Payengine\Lib\Test\Models\Response
 */
class OrderTest extends TestCase
{

    /**
     * @var Order
     */
    private $testedClass;

    public function setUp()
    {
        $this->testedClass = OrderFixture::getResponse();
        parent::setUp();
    }

    /**
     * @test
     */
    public function toArrayTest(){
        $modelToArray = $this->testedClass->__toArray();

        $this->assertTrue(is_array($modelToArray));
        $this->assertArrayHasKey('createdAt', $modelToArray);
        $this->assertArrayHasKey('modifiedAt', $modelToArray);
        $this->assertArrayHasKey('terms', $modelToArray);
        $this->assertArrayHasKey('privacy', $modelToArray);
        $this->assertArrayHasKey('orderId', $modelToArray);
        $this->assertArrayHasKey('merchantOrderId', $modelToArray);
        $this->assertArrayHasKey('paymentProviderTransactionId', $modelToArray);
        $this->assertArrayHasKey('description', $modelToArray);
        $this->assertArrayHasKey('statementDescription', $modelToArray);
        $this->assertArrayHasKey('initialAmount', $modelToArray);
        $this->assertArrayHasKey('preauthorizedAmount', $modelToArray);
        $this->assertArrayHasKey('capturedAmount', $modelToArray);
        $this->assertArrayHasKey('refundedAmount', $modelToArray);
        $this->assertArrayHasKey('canceledAmount', $modelToArray);
        $this->assertArrayHasKey('currency', $modelToArray);
        $this->assertArrayHasKey('basket', $modelToArray);
        $this->assertArrayHasKey('customer', $modelToArray);
        $this->assertArrayHasKey('persona', $modelToArray);
        $this->assertArrayHasKey('billingAddress', $modelToArray);
        $this->assertArrayHasKey('shippingAddress', $modelToArray);
        $this->assertArrayHasKey('ipAddress', $modelToArray);
        $this->assertArrayHasKey('paymentInstrument', $modelToArray);
        $this->assertArrayHasKey('transactions', $modelToArray);
        $this->assertArrayHasKey('status', $modelToArray);
        $this->assertArrayHasKey('redirectUrl', $modelToArray);
        $this->assertArrayHasKey('channel', $modelToArray);
        $this->assertArrayHasKey('source', $modelToArray);
        $this->assertArrayHasKey('product', $modelToArray);
        $this->assertArrayHasKey('allowedProducts', $modelToArray);
        $this->assertArrayHasKey('settled', $modelToArray);
        $this->assertArrayHasKey('settlementDate', $modelToArray);
        $this->assertArrayHasKey('transactionType', $modelToArray);
        $this->assertArrayHasKey('meta', $modelToArray);

        $this->assertEquals($this->testedClass->getCreatedAt(), $modelToArray['createdAt']);
        $this->assertEquals($this->testedClass->getModifiedAt(), $modelToArray['modifiedAt']);
        $this->assertEquals($this->testedClass->getTerms(), $modelToArray['terms']);
        $this->assertEquals($this->testedClass->getPrivacy(), $modelToArray['privacy']);
        $this->assertEquals($this->testedClass->getOrderId(), $modelToArray['orderId']);
        $this->assertEquals($this->testedClass->getMerchantOrderId(), $modelToArray['merchantOrderId']);
        $this->assertEquals($this->testedClass->getPaymentProviderTransactionId(), $modelToArray['paymentProviderTransactionId']);
        $this->assertEquals($this->testedClass->getDescription(), $modelToArray['description']);
        $this->assertEquals($this->testedClass->getStatementDescription(), $modelToArray['statementDescription']);
        $this->assertEquals($this->testedClass->getInitialAmount(), $modelToArray['initialAmount']);
        $this->assertEquals($this->testedClass->getPreauthorizedAmount(), $modelToArray['preauthorizedAmount']);
        $this->assertEquals($this->testedClass->getCapturedAmount(), $modelToArray['capturedAmount']);
        $this->assertEquals($this->testedClass->getRefundedAmount(), $modelToArray['refundedAmount']);
        $this->assertEquals($this->testedClass->getCanceledAmount(), $modelToArray['canceledAmount']);
        $this->assertEquals($this->testedClass->getCurrency(), $modelToArray['currency']);
        $this->assertEquals($this->testedClass->getIpAddress(), $modelToArray['ipAddress']);
        $this->assertEquals($this->testedClass->getStatus(), $modelToArray['status']);
        $this->assertEquals($this->testedClass->getRedirectUrl(), $modelToArray['redirectUrl']);
        $this->assertEquals($this->testedClass->getChannel(), $modelToArray['channel']);
        $this->assertEquals($this->testedClass->getSource(), $modelToArray['source']);
        $this->assertEquals($this->testedClass->getProduct(), $modelToArray['product']);
        $this->assertEquals($this->testedClass->getAllowedProducts(), $modelToArray['allowedProducts']);
        $this->assertEquals($this->testedClass->isSettled(), $modelToArray['settled']);
        $this->assertEquals($this->testedClass->getSettlementDate(), $modelToArray['settlementDate']);
        $this->assertEquals($this->testedClass->getTransactionType(), $modelToArray['transactionType']);

        $this->assertTrue(is_array($modelToArray['basket']));
        $this->assertBasket($modelToArray['basket']);
        $this->assertTrue(is_array($modelToArray['transactions']));
        $this->assertTransactions($modelToArray['transactions']);

        $this->assertTrue(is_array($modelToArray['meta']));
        $this->assertEquals($this->testedClass->getMeta()->getDescriptor(), $modelToArray['meta']['descriptor']);
        $this->assertEquals($this->testedClass->getMeta()->getInterestRate(), $modelToArray['meta']['interestRate']);
        $this->assertEquals($this->testedClass->getMeta()->getLastRate(), $modelToArray['meta']['lastRate']);
        $this->assertEquals($this->testedClass->getMeta()->getNumberOfRates(), $modelToArray['meta']['numberOfRates']);
        $this->assertEquals($this->testedClass->getMeta()->getPaymentFirstDay(), $modelToArray['meta']['paymentFirstDay']);
        $this->assertEquals($this->testedClass->getMeta()->getRate(), $modelToArray['meta']['rate']);
        $this->assertEquals($this->testedClass->getMeta()->getRiskIdentId(), $modelToArray['meta']['riskIdentId']);
        $this->assertEquals($this->testedClass->getMeta()->getTotalAmount(), $modelToArray['meta']['totalAmount']);

        $this->assertTrue(is_array($modelToArray['customer'])); // already tested within CustomerTest
        $this->assertTrue(is_array($modelToArray['persona'])); // already tested within CustomerTest
        $this->assertTrue(is_array($modelToArray['billingAddress'])); // already tested within CustomerTest
        $this->assertTrue(is_array($modelToArray['shippingAddress'])); // already tested within CustomerTest
        $this->assertTrue(is_array($modelToArray['paymentInstrument'])); // already tested within CustomerTest
    }

    private function assertBasket(array $basket){
        foreach ($basket as $item){
            $this->assertTrue(is_array($item));
            $this->assertArrayHasKey('name', $item);
            $this->assertArrayHasKey('articleNumber', $item);
            $this->assertArrayHasKey('tax', $item);
            $this->assertArrayHasKey('totalPrice', $item);
            $this->assertArrayHasKey('totalPriceWithTax', $item);
            $this->assertArrayHasKey('unitPrice', $item);
            $this->assertArrayHasKey('unitPriceWithTax', $item);
            $this->assertArrayHasKey('quantity', $item);
        }
    }

    private function assertTransactions(array $transactions){
        foreach ($transactions as $transaction){
            $this->assertTrue(is_array($transaction));
            $this->assertArrayHasKey('createdAt', $transaction);
            $this->assertArrayHasKey('modifiedAt', $transaction);
            $this->assertArrayHasKey('description', $transaction);
            $this->assertArrayHasKey('type', $transaction);
            $this->assertArrayHasKey('basket', $transaction);
            $this->assertArrayHasKey('transactionId', $transaction);
            $this->assertArrayHasKey('currency', $transaction);
            $this->assertArrayHasKey('status', $transaction);
            $this->assertArrayHasKey('order', $transaction);
            $this->assertArrayHasKey('transactions', $transaction);
            $this->assertArrayHasKey('refundedAmount', $transaction);
            $this->assertArrayHasKey('capturedAmount', $transaction);
            $this->assertArrayHasKey('initialAmount', $transaction);
            $this->assertArrayHasKey('providerCode', $transaction);
        }
    }

    /**
     * @test
     */
    public function toJsonTest(){
        $modelToArray = $this->testedClass->__toArray();
        $modelToJson = $this->testedClass->__toJson();

        $this->assertEquals(json_encode($modelToArray), $modelToJson);
    }

    /**
     * @test
     */
    public function fromArrayTest(){
        $expectedModel = $this->testedClass;

        $jsonString = $this->testedClass->__toJson();
        $modelArray = json_decode($jsonString, true);

        $actualModel = new Order();
        $actualModel->__fromArray($modelArray);

        $this->assertEquals($expectedModel, $actualModel);
    }

    /**
     * @test
     */
    public function fromJsonTest(){
        $expectedModel = $this->testedClass;

        $jsonString = $this->testedClass->__toJson();

        $actualModel = new Order();
        $actualModel->__fromJson($jsonString);

        $this->assertEquals($expectedModel, $actualModel);
    }

    /**
     * @test
     */
    public function CustomerId_Instead_of_CustomerObjectTest(){
        $this->testedClass->setCustomer("SomeFancyCustomerId");

        $modelToArray = $this->testedClass->__toArray();
        $this->assertTrue(is_array($modelToArray));
        $this->assertArrayHasKey('createdAt', $modelToArray);
        $this->assertArrayHasKey('modifiedAt', $modelToArray);
        $this->assertArrayHasKey('terms', $modelToArray);
        $this->assertArrayHasKey('privacy', $modelToArray);
        $this->assertArrayHasKey('orderId', $modelToArray);
        $this->assertArrayHasKey('merchantOrderId', $modelToArray);
        $this->assertArrayHasKey('paymentProviderTransactionId', $modelToArray);
        $this->assertArrayHasKey('description', $modelToArray);
        $this->assertArrayHasKey('statementDescription', $modelToArray);
        $this->assertArrayHasKey('initialAmount', $modelToArray);
        $this->assertArrayHasKey('preauthorizedAmount', $modelToArray);
        $this->assertArrayHasKey('capturedAmount', $modelToArray);
        $this->assertArrayHasKey('refundedAmount', $modelToArray);
        $this->assertArrayHasKey('canceledAmount', $modelToArray);
        $this->assertArrayHasKey('currency', $modelToArray);
        $this->assertArrayHasKey('basket', $modelToArray);
        $this->assertArrayHasKey('customer', $modelToArray);
        $this->assertArrayHasKey('persona', $modelToArray);
        $this->assertArrayHasKey('billingAddress', $modelToArray);
        $this->assertArrayHasKey('shippingAddress', $modelToArray);
        $this->assertArrayHasKey('ipAddress', $modelToArray);
        $this->assertArrayHasKey('paymentInstrument', $modelToArray);
        $this->assertArrayHasKey('transactions', $modelToArray);
        $this->assertArrayHasKey('status', $modelToArray);
        $this->assertArrayHasKey('redirectUrl', $modelToArray);
        $this->assertArrayHasKey('channel', $modelToArray);
        $this->assertArrayHasKey('source', $modelToArray);
        $this->assertArrayHasKey('product', $modelToArray);
        $this->assertArrayHasKey('allowedProducts', $modelToArray);
        $this->assertArrayHasKey('settled', $modelToArray);
        $this->assertArrayHasKey('settlementDate', $modelToArray);
        $this->assertArrayHasKey('transactionType', $modelToArray);

        $this->assertFalse(is_array($modelToArray['customer']));
        $this->assertEquals("SomeFancyCustomerId", $modelToArray['customer']);
    }

}
