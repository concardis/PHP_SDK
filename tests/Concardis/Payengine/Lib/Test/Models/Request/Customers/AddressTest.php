<?php

namespace Concardis\Payengine\Lib\Test\Models\Request\Customers;

require_once __DIR__ . "/../../../../../../../../autoload.php";

use \Concardis\Payengine\Lib\Models\Request\Customers\Address;
use \PHPUnit\Framework\TestCase;

class AddressTest extends TestCase
{

    /**
     * @test
     */
    public function toArray_filterEmptyStrings() {
        $expected = array(
            'firstName' => 'Max',
            'lastName' => 'Mustermann',
            'phone' => '0123456789'
        );

        $address = new Address();
        $address->setTitle(''); // should be filtered
        $address->setFirstName('Max');
        $address->setLastName('Mustermann');
        $address->setPhone('0123456789');

        $actual = $address->__toArray();

        $this->assertEquals($expected, $actual);
    }

    /**
     * @test
     */
    public function toArray() {
        $expected = array(
            'title' => 'Dr.',
            'firstName' => 'Max',
            'lastName' => 'Mustermann',
            'phone' => '0123456789',
            'fax' => '0123456789',
            'mobile' => '0123456789',
            'city' => 'Köln',
            'country' => 'DE',
            'zip' => '12345',
            'state' => 'NRW',
            'street' => 'Musterstraße',
            'houseNumber' => '10a',
            'additionalDetails' => 'details'
        );

        $address = new Address();
        $address->setTitle('Dr.');
        $address->setFirstName('Max');
        $address->setLastName('Mustermann');
        $address->setPhone('0123456789');
        $address->setFax('0123456789');
        $address->setMobile('0123456789');
        $address->setCity('Köln');
        $address->setCountry('DE');
        $address->setZip('12345');
        $address->setState('NRW');
        $address->setStreet('Musterstraße');
        $address->setHouseNumber('10a');
        $address->setAdditionalDetails('details');

        $actual = $address->__toArray();

        $this->assertEquals($expected, $actual);
    }

}