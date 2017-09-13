<?php
namespace Concardis\Payengine\Lib;

use Concardis\Payengine\Lib\Internal\Config\MerchantConfiguration;
use Concardis\Payengine\Lib\Internal\Connection\Connection;
use Concardis\Payengine\Lib\Internal\Connection\ConnectionInterface;
use Concardis\Payengine\Lib\Internal\Resource\Customers;
use Concardis\Payengine\Lib\Internal\Resource\PaymentInstruments;
use Concardis\Payengine\Lib\Internal\Resource\Orders;

/**
 * Class PayEngine
 *
 * @package Lib\PayEngine
 */
class Payengine
{
    /**
     * @var Connection
     */
    private $connection;

    /**
     * @var MerchantConfiguration
     */
    private $configuration;

    /**
     * @param MerchantConfiguration $configuration
     */
    function __construct(MerchantConfiguration $configuration)
    {
        $client = new Connection();
        $client->setMerchantConfig($configuration);
        $this->connection = $client;
    }

    /**
     * @param ConnectionInterface $connection
     */
    public function setConnection(ConnectionInterface $connection)
    {
        $this->connection = $connection;
    }

    /**
     * @param MerchantConfiguration $configuration
     */
    public function setConfiguration(MerchantConfiguration $configuration)
    {
        $this->configuration = $configuration;
    }

    /**
     * @param $customerId
     *
     * @return Customers
     */
    public function customer($customerId = null){
        return new Customers($this->connection, $customerId, null);
    }

    /**
     * @param $paymentInstrumentId
     *
     * @return PaymentInstruments
     */
    public function paymentinstruments($paymentInstrumentId = null){
        return new PaymentInstruments($this->connection, $paymentInstrumentId, null);
    }

    /**
     * @param $orderId
     *
     * @return Orders
     */
    public function orders($orderId = null){
        return new Orders($this->connection, $orderId, null);
    }
}