<?php

namespace Concardis\Payengine\Lib\Internal\Resource\Customers;


use Concardis\Payengine\Lib\Internal\AbstractClass\AbstractResource;
use Concardis\Payengine\Lib\Internal\Constants\Api;
use Concardis\Payengine\Lib\Internal\Interfaces\Getable;
use Concardis\Payengine\Lib\Internal\Interfaces\Postable;
use Concardis\Payengine\Lib\Models\Response\Customers\Persona;

class Personas extends AbstractResource implements Postable, Getable
{

    protected $resourcePath = Api::RESOURCE_CUSTOMERS_PERSONAS;

    /**
     * @param $data
     *
     * @return Persona
     */
    public function post($data)
    {
        /**
         * @var $result Persona
         */
        $result = parent::post($data);

        return $result;
    }

    /**
     * @param array $queryParams
     *
     * @return \Concardis\Payengine\Lib\Models\Response\ListWrapper|Persona 
     * A list of Personas if $queryParams provided or one Persona 
     * if called with ID set, if personaId is set $queryParams will be ignored.
     */
    public function get($queryParams = null)
    {
        return parent::get($queryParams);
    }

    /**
     * @return Persona
     */
    protected function getResponseModel()
    {
        return new Persona();
    }


}