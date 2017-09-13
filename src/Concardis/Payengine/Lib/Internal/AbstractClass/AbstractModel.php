<?php

namespace Concardis\Payengine\Lib\Internal\AbstractClass;


use Concardis\Payengine\Lib\Internal\Util\ArrayHelper;

/**
 * Class AbstractModel
 *
 * @package Concardis\Payengine\Lib\Internal\AbstractClass
 */
abstract class AbstractModel
{

    protected $subModels = array();

    private function getSubmodel($propertyName, array $propertyValue){
        $className = $this->subModels[$propertyName];

        /**
         * @var $subModel AbstractModel
         */
        $subModel = new $className();
        $subModel->__fromArray($propertyValue);
        return $subModel;
    }

    /**
     * @return array
     */
    public function __toArray(){
        $result = array();
        $reflection = new \ReflectionClass($this);
        $properties = $reflection->getDefaultProperties();
        foreach($properties as $propertyName => $propertyValue){
            if($propertyName == 'subModels'){
                continue;
            }

            $data = null;
            $method = 'get' . ucfirst($propertyName);
            if(!$reflection->hasMethod($method)){
                //when getting a boolean the method name differs
                $method = 'is' . ucfirst($propertyName);
            }

            if($reflection->hasMethod($method)){
                $data = $this->{$method}();
            }

            if (is_null($data)) {
                continue;
            }

            if(is_array($data)){
                $convertedData = array();
                foreach($data as $key => $value){
                    if($value instanceof AbstractModel ){
                        /**
                         * @var $model AbstractModel
                         */
                        $model = $value;

                        $convertedEntry = $model->__toArray();
                    }else{
                        $convertedEntry = $value;
                    }
                    $convertedData[$key] = $convertedEntry;
                }
                $data = $convertedData;
            }elseif($data instanceof AbstractModel ){
                /**
                 * @var $model AbstractModel
                 */
                $model = $data;

                $data = $model->__toArray();
            }

            $result[$propertyName] = $data;
        }
        return $result;
    }

    /**
     * @param array $propertyArray
     */
    public function __fromArray(array $propertyArray){
        $methods = get_class_methods(get_class($this));
        foreach($propertyArray as $propertyName => $propertyValue){
            $data = $propertyValue;

            // check if property is a submodel
            if(in_array($propertyName, array_keys($this->subModels)) && is_array($propertyValue)) {
                // if property value is an array and not assoc, its a list of submodel
                if(is_array($propertyValue)){
                    if (!ArrayHelper::isAssocArray($propertyValue)) {
                        $convertedData = array();
                        foreach ($propertyValue as $key => $value) {
                            $convertedData[$key] = $this->getSubmodel($propertyName,
                                $value);
                        }
                        $data = $convertedData;
                    } else {
                        // when propertyValue is an array and assoc its an single submodel
                        $data = $this->getSubmodel($propertyName, $propertyValue);

                    }
                }
            }

            $method = 'set' . ucfirst($propertyName);
            if(in_array($method, $methods)){
                $this->{$method}($data);
            }
        }
    }

    /**
     * @return string
     */
    public function __toJson(){
        return json_encode($this->__toArray());
    }

    /**
     * @param string $jsonString
     */
    public function __fromJson($jsonString){
        $this->__fromArray(json_decode($jsonString, true));
    }

}