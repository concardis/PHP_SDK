<?php

namespace Concardis\Payengine\Lib\Test\Models\Request\Customers;

require_once __DIR__ . "/../../../../../../../../autoload.php";

use Concardis\Payengine\Lib\Internal\Constants\Gender;
use \Concardis\Payengine\Lib\Models\Request\Customers\Persona;
use \PHPUnit\Framework\TestCase;

class PersonaTest extends TestCase
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

        $persona = new Persona();
        $persona->setTitle(''); // should be filtered
        $persona->setFirstName('Max');
        $persona->setLastName('Mustermann');
        $persona->setPhone('0123456789');

        $actual = $persona->__toArray();

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
            'gender' => Gender::MALE,
            'birthday' => 12345600
        );

        $persona = new Persona();
        $persona->setTitle('Dr.');
        $persona->setFirstName('Max');
        $persona->setLastName('Mustermann');
        $persona->setPhone('0123456789');
        $persona->setFax('0123456789');
        $persona->setMobile('0123456789');
        $persona->setGender(Gender::MALE);
        $persona->setBirthday(12345600);

        $actual = $persona->__toArray();

        $this->assertEquals($expected, $actual);
    }

}