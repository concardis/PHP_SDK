<?php

namespace Concardis\Payengine\Lib\Test\Fixture\Model;


use Concardis\Payengine\Lib\Internal\Constants\Gender;
use Concardis\Payengine\Lib\Models\Response\Customers\Persona as ResponseModel;
use Concardis\Payengine\Lib\Models\Request\Customers\Persona as RequestModel;

class PersonaFixture
{

    /**
     * @return ResponseModel
     */
    public static function getResponse(){
        $persona = new ResponseModel();
        $persona->setCreatedAt(123456789);
        $persona->setModifiedAt(123456789);
        $persona->setPersonaId("persona_12345");
        $persona->setTitle("Dr.");
        $persona->setPhone("0221/123456789");
        $persona->setMobile("0221/123456789");
        $persona->setLastName("Tester");
        $persona->setFirstName("Test");
        $persona->setFax("0221/123456789");
        $persona->setBirthday(123456789);
        $persona->setGender(Gender::MALE);
        return $persona;
    }

    /**
     * @return RequestModel
     */
    public static function getRequest(){
        $persona = new RequestModel();
        $persona->setTitle("Dr.");
        $persona->setPhone("0221/123456789");
        $persona->setMobile("0221/123456789");
        $persona->setLastName("Tester");
        $persona->setFirstName("Test");
        $persona->setFax("0221/123456789");
        $persona->setBirthday(123456789);
        $persona->setGender(Gender::MALE);
        return $persona;
    }

}