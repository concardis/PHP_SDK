<?php

namespace Concardis\Payengine\Lib\Test\Fixture\Model;


use Concardis\Payengine\Lib\Internal\Constants\TransactionStatus;
use Concardis\Payengine\Lib\Models\Response\Orders\Transaction;
use Concardis\Payengine\Lib\Internal\Constants\TransactionType;

class TransactionFixture
{

    public static function getResponseParent($children = 1){
        $transactionChildren = array();
        for($i = 0 ;$i < $children; $i++){
            $transactionChildren[] = self::getResponseChild("transaction_parent_123");
        }
        $transaction = new Transaction();
        $transaction->setTransactions($transactionChildren);
        $transaction->setCreatedAt(123456789);
        $transaction->setModifiedAt(123456789);
        $transaction->setOrder("order_12345");
        $transaction->setBasket(array(
            ItemFixture::getFixture(),
            ItemFixture::getFixture()
        ));
        $transaction->setTransactionId("transaction_123");
        $transaction->setType(TransactionType::PREAUTH);
        $transaction->setParentTransaction(null);
        $transaction->setStatus(TransactionStatus::IN_PROGRESS);
        $transaction->setInitialAmount(12345);
        $transaction->setRefundedAmount(12345);
        $transaction->setDescription("TestTransaction");
        $transaction->setCurrency("EUR");
        $transaction->setCapturedAmount(12345);
        $transaction->setCanceledAmount(12345);
        return $transaction;

    }

    public static function getResponseChild($parentId = null){
        $transaction = new Transaction();
        $transaction->setParentTransaction($parentId);
        $transaction->setCreatedAt(123456789);
        $transaction->setModifiedAt(123456789);
        $transaction->setOrder("order_12345");
        $transaction->setBasket(array(
            ItemFixture::getFixture()
        ));
        $transaction->setTransactionId("transaction_123");
        $transaction->setType(TransactionType::CAPTURE);
        $transaction->setStatus(TransactionStatus::IN_PROGRESS);
        $transaction->setInitialAmount(12345);
        $transaction->setRefundedAmount(12345);
        $transaction->setDescription("TestTransaction");
        $transaction->setCurrency("EUR");
        $transaction->setCapturedAmount(12345);
        $transaction->setCanceledAmount(12345);
        return $transaction;
    }

}