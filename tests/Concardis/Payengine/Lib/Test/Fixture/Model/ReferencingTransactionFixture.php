<?php
namespace Concardis\Payengine\Lib\Test\Fixture\Model;

use Concardis\Payengine\Lib\Models\Request\Orders\ReferencingTransaction as RequestModel;

class ReferencingTransactionFixture
{

    /**
     * @return RequestModel
     */
    public static function getRequest() {
        $referencingTransaction = new RequestModel();
        $referencingTransaction->setInitialAmount(100);
        $referencingTransaction->setCurrency('EUR');
        $referencingTransaction->setDescription('integration test');
        $referencingTransaction->setBasket(array(
            ItemFixture::getFixture()
        ));

        return $referencingTransaction;
    }
}