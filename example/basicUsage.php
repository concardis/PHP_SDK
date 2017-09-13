<?php

/**
 * This is an example file for the basic usage of the SDK.
 * In the examples below we are using the requestModels, but you can also put an assoc array as postData instead.
 */

include_once "../autoload.php";

use \Concardis\Payengine\Lib\Payengine;
use \Concardis\Payengine\Lib\Internal\Config\MerchantConfiguration;
use \Concardis\Payengine\Lib\Models\Request\Customer as CustomerRequest;
use \Concardis\Payengine\Lib\Models\Request\Customers\Persona as PersonaRequest;
use \Concardis\Payengine\Lib\Models\Request\Customers\Address as AddressRequest;
use \Concardis\Payengine\Lib\Models\Request\Orders\Payment\Payment;


// Create the configuration needed to process any requests
$config = new MerchantConfiguration();
$config->setApiKey('YOUR_API_KEY'); //TODO: Enter your API-Key
$config->setMerchantId('YOUR_MERCHANT_ID'); // TODO: Enter your merchantId
$config->setIsLiveMode(false);


$lib = new Payengine($config);
############################
##### Create customer ######
############################
$customerRequest = new CustomerRequest();
$customerRequest->setEmail('somebody@' . time() .'.org');

$customerResponse = $lib->customer()->post($customerRequest);

###########################
##### Create Persona ######
###########################
$personaRequest = new PersonaRequest();
$personaRequest->setTitle("Dr.");
$personaRequest->setGender(\Concardis\Payengine\Lib\Internal\Constants\Gender::MALE);
$personaRequest->setFirstName("Max");
$personaRequest->setLastName("Mustermann");
$personaRequest->setBirthday(time());
$personaRequest->setFax("0123456789");
$personaRequest->setMobile("0123456789");
$personaRequest->setPhone("0123456789");

// Since the Persona refers to a customer, you have to set the customerId.
$personaResponse = $lib->customer($customerResponse->getCustomerId())->personas()->post($personaRequest);

##########################
##### Create Address #####
##########################
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

$addressResponse = $lib->customer($customerResponse->getCustomerId())->addresses()->post($addressRequest);

########################################################
##### Create Transaction with CC PaymentInstrument #####
########################################################
$payment = new Payment();
$payment->setPaymentInstrumentId('IDFromYourFrontend'); //TODO Enter PaymentInstrumentId

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
$authorizingTransaction->setBillingAddress($addressResponse->getAddressId());
$authorizingTransaction->setShippingAddress($addressResponse->getAddressId());
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
$authorizingTransaction->setProduct(\Concardis\Payengine\Lib\Internal\Constants\Products::CREDITCARD);

$transactionResponse = $lib->orders()->preauth()->post($authorizingTransaction);

##########################
##### Create Capture #####
##########################
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

$captureResponse = $lib->orders($transactionResponse->getOrderId())->transactions($preAuthId)->capture()->post($referencingTransaction);

#########################
##### Create Refund #####
#########################
$referencingTransaction = new \Concardis\Payengine\Lib\Models\Request\Orders\ReferencingTransaction();
$referencingTransaction->setInitialAmount(12);
$referencingTransaction->setCurrency("EUR");
$referencingTransaction->setDescription("Refund everything");
$referencingTransaction->setBasket(array(
    $item
));

$refundResponse = $lib->orders($transactionResponse->getOrderId())->transactions($captureResponse->getTransactionId())->refund()->post($referencingTransaction);

###################################
##### GET Order / Transaction #####
###################################
//You can get a list of transactions from the order.
$orderGetResponse = $lib->orders($transactionResponse->getOrderId())->transactions()->get();

// to get a specific transaction you can get the transaction like this
$transactionGetResponse = $lib->orders($transactionResponse->getOrderId())->transactions($captureResponse->getTransactionId())->get();

