#PHP SDK

## Prerequisites
### PHP
Get and install PHP for your system. <http://php.net/manual/en/install.php>
### Composer
Get and install composer for your system. <https://getcomposer.org>
### Get the PHP SDK
#### By cloning
~~~sh
git@github.com:concardis/PHP_SDK.git
~~~

#### As release zip
https://github.com/concardis/PHP_SDK/releases

## Installation
Uncompress the PHP SDK folder, change into the newly created folder and run
~~~sh
composer install
~~~
Move the PHP SDK folder into the vendor folder of your PHP project. Now you can create a php file to use the SDK with.

## Initialize SDK
~~~php
    include_once "./vendor/payengine/autoload.php";

    use \Concardis\Payengine\Lib\Payengine;
    use \Concardis\Payengine\Lib\Internal\Config\MerchantConfiguration;
    use \Concardis\Payengine\Lib\Models\Request\Customer as CustomerRequest;
    use \Concardis\Payengine\Lib\Models\Request\Customers\Persona as PersonaRequest;
    use \Concardis\Payengine\Lib\Models\Request\Customers\Address as AddressRequest;
    use \Concardis\Payengine\Lib\Models\Request\Orders\Payment\Payment;

    $config = new MerchantConfiguration();
    //TODO: Enter your API-Key
    $config->setApiKey('YOUR_API_KEY');
    // TODO: Enter your merchantId
    $config->setMerchantId('YOUR_MERCHANT_ID');
    $config->setIsLiveMode(false);

    $lib = new Payengine($config);
~~~

## Basic Usage
### Create a customer
~~~php
    $customerRequest = new CustomerRequest();
    $customerRequest->setEmail('somebody@' . time() .'.org');

    $customerResponse = $lib->customer()->post($customerRequest);
~~~

### Create a persona
~~~php
    $personaRequest = new PersonaRequest();
    $personaRequest->setTitle("Dr.");
    $personaRequest->setGender(
        \Concardis\Payengine\Lib\Internal\Constants\Gender::MALE
    );
    $personaRequest->setFirstName("Max");
    $personaRequest->setLastName("Mustermann");
    $personaRequest->setBirthday(time());
    $personaRequest->setFax("0123456789");
    $personaRequest->setMobile("0123456789");
    $personaRequest->setPhone("0123456789");
~~~

### Create an address
~~~php
    $addressRequest = new AddressRequest();
    $addressRequest->setFirstName("Maxim");
    $addressRequest->setLastName("Mustermann");
    $addressRequest->setZip("12345");
    $addressRequest->setStreet("Musterstrasse");
    $addressRequest->setHouseNumber("1a");
    $addressRequest->setCountry("DE");
    $addressRequest->setCity("Musterstadt");
    $addressRequest->setPhone("0123456789");
    $addressRequest->setMobile("0123456789");
    $addressRequest->setFax("0123456789");
    $addressRequest->setState("nrw");
    $addressRequest->setTitle("dr.");

    $addressResponse = $lib->customer(
    $customerResponse->getCustomerId())->addresses()->post($addressRequest);
~~~

### Create a preauthorization
~~~php
    $payment = new Payment();
    //TODO Enter PaymentInstrumentId
    $payment->setPaymentInstrumentId('IDFromYourFrontend');

    $item = new \Concardis\Payengine\Lib\Models\Request\Orders\Item();
    $item->setQuantity(2);
    $item->setUnitPrice(5);
    $item->setUnitPriceWithTax(6);
    $item->setTotalPrice(10);
    $item->setTotalPriceWithTax(12);
    $item->setArticleNumber("test");
    $item->setName("testName");
    $item->setTax(19);

    $async = new \Concardis\Payengine\Lib\Models\Request\Orders\Async();
    $async->setSuccessUrl("http://google.de?q=success");
    $async->setCancelUrl("http://google.de?q=cancel");
    $async->setFailureUrl("http://google.de?q=failure");

    $authorizingTransaction = new \Concardis\Payengine\Lib\Models\Request\Orders\AuthorizingTransaction();
    $authorizingTransaction->setCustomer($customerResponse->getCustomerId());
    $authorizingTransaction->setPersona($personaResponse->getPersonaId());
    $authorizingTransaction->setBillingAddress(
        $addressResponse->getAddressId()
    );
    $authorizingTransaction->setShippingAddress(
        $addressResponse->getAddressId()
    );
    $authorizingTransaction->setCurrency("EUR");
    $authorizingTransaction->setPayment($payment);
    $authorizingTransaction->setBasket(array(
        $item
    ));
    $authorizingTransaction->setInitialAmount(12);
    $authorizingTransaction->setChannel('ECOM');
    $authorizingTransaction->setSource("basicUsage script");
    $authorizingTransaction->setTerms(time());
    $authorizingTransaction->setPrivacy(time());
    $authorizingTransaction->setAsync($async);
    $authorizingTransaction->setProduct(
        \Concardis\Payengine\Lib\Internal\Constants\Products::CREDITCARD
    );

    $transactionResponse = $lib->orders()->preauth()->post(
        $authorizingTransaction
    );
~~~

### Capture a preauthorization
~~~php
    $referencingTransaction = new \Concardis\Payengine\Lib\Models\Request\Orders\ReferencingTransaction();
    $referencingTransaction->setInitialAmount(12);
    $referencingTransaction->setCurrency("EUR");
    $referencingTransaction->setDescription("Capture everything");
    $referencingTransaction->setBasket(array(
        $item
    ));

    /* @var $preAuthTransaction \Concardis\Payengine\Lib\Models\Response\Orders\Transaction */
    $preAuthTransaction = $transactionResponse->getTransactions()[0];
    $preAuthId = $preAuthTransaction->getTransactionId();

    $captureResponse = $lib->orders(
        $transactionResponse->getOrderId()
    )->transactions($preAuthId)->capture()->post($referencingTransaction);
~~~

### Cancel a preauthorization
~~~php
    $referencingTransaction = new \Concardis\Payengine\Lib\Models\Request\Orders\ReferencingTransaction();
    $referencingTransaction->setInitialAmount(12);
    $referencingTransaction->setCurrency("EUR");
    $referencingTransaction->setDescription("Capture everything");
    $referencingTransaction->setBasket(array(
        $item
    ));

    /* @var $preAuthTransaction \Concardis\Payengine\Lib\Models\Response\Orders\Transaction */
    $preAuthTransaction = $transactionResponse->getTransactions()[0];
    $preAuthId = $preAuthTransaction->getTransactionId();

    $cancelResponse = $lib->orders(
        $transactionResponse->getOrderId()
    )->transactions($preAuthId)->cancel()->post($referencingTransaction);
~~~

### Refund a capture or debit transaction
~~~php
    $referencingTransaction = new \Concardis\Payengine\Lib\Models\Request\Orders\ReferencingTransaction();
    $referencingTransaction->setInitialAmount(12);
    $referencingTransaction->setCurrency("EUR");
    $referencingTransaction->setDescription("Refund everything");
    $referencingTransaction->setBasket(array(
        $item
    ));

    $refundResponse = $lib->orders(
        $transactionResponse->getOrderId()
    )->transactions(
        $captureResponse->getTransactionId()
    )->refund()->post($referencingTransaction);
~~~

### GET transaction status
~~~php
    $transactionGetResponse = $lib->orders(
        $transactionResponse->getOrderId()
    )->transactions($captureResponse->getTransactionId())->get();
~~~

### GET order
~~~php
    $orderGetResponse = $lib->orders(
        $transactionResponse->getOrderId()
    )->get();
~~~

## Tests
To run the tests without the integration tests call phpunit with the exclude group option.

~~~sh
phpunit tests --exclude-group integrationtests
~~~

## Documentation
For further information, please refer to the Payengine documentation: <https://docs.payengine.de>

## Licence
[MIT](../master/LICENSE)