<?php
namespace Concardis\Payengine\Lib\Internal\AbstractClass;

use Concardis\Payengine\Lib\Internal\Connection\Connection;
use Concardis\Payengine\Lib\Internal\Constants\ErrorCodes;
use Concardis\Payengine\Lib\Internal\Util\ArrayHelper;
use Concardis\Payengine\Lib\Internal\Util\TypeHelper;
use Concardis\Payengine\Lib\Models\Response\ListWrapper;

abstract class AbstractResource
{
    /**
     * @var string
     */
    protected $resourcePath;

    /**
     * @var string
     */
    protected $resourcePathWithId;

    /**
     * @var string
     */
    protected $resourceId;

    /**
     * @var Connection
     */
    protected $connection;

    function __construct(Connection $connection, $resourceId = null, $parentResourcePath = null)
    {
        if($resourceId != null && !is_string($resourceId)) {
            throw new \Exception(ErrorCodes::SDK_RESOURCEID_INVALID);
        }

        if($parentResourcePath != null) {
            $this->resourcePath = $parentResourcePath . $this->resourcePath;
        }

        if($resourceId != null) {
            $this->resourceId = $resourceId;
            $this->resourcePathWithId = $this->resourcePath . "/" . $this->resourceId;
        }

        $this->connection = $connection;
    }

    /**
     * @param $data
     *
     * @return AbstractResponseModel
     */
    protected function post($data)
    {
        if($data instanceof AbstractModel) {
            $data = $data->__toArray();
        }

        $result = $this->connection->post($this->resourcePath, $data);
        return $this->responseDataToModel($result);
    }

    /**
     * @param $data
     *
     * @return AbstractResponseModel
     */
    protected function patch($data)
    {
        if($data instanceof AbstractModel) {
            $data = $data->__toArray();
        }

        $result = $this->connection->patch($this->resourcePathWithId, $data);
        return $this->responseDataToModel($result);
    }

    /**
     * @return void
     */
    protected function delete()
    {
        $this->connection->delete($this->resourcePathWithId);
    }

    /**
     * Returns an array of the Resource.
     * If a resourceId is set only one result will be returned also $filter will 
     * be ignored.
     *
     * @param $filter
     * @throws \Exception
     * @return ListWrapper|AbstractResponseModel
     */
    protected function get($filter = null)
    {
        if($filter != null && !ArrayHelper::isAssocArray($filter)) {
            throw new \Exception("Filter parameter is wrong");
        }

        if($this->resourceId == null) {
            if(is_array($filter)){
                TypeHelper::convertBooleanValues($filter);
            }
            $result = $this->getAll($filter);
        } else {
            $result = $this->getOne();
        }
        return $result;
    }

    /**
     * @param array $filter
     *
     * @return ListWrapper
     * @throws \Exception
     */
    private function getAll($filter = null){
        $result = $this->connection->get($this->resourcePath, $filter);
        $listWrapper = new ListWrapper();

        $elementsAsModels = array();
        if(is_array($result['elements']) && count($result['elements']) > 0 ) {
            foreach($result['elements'] as $element) {
                $elementsAsModels[] = $this->responseDataToModel($element);
            }
        }

        $listWrapper->setTotalPages($result['totalPages']);
        $listWrapper->setElements($elementsAsModels);
        return $listWrapper;
    }

    /**
     * @return AbstractResponseModel
     */
    private function getOne() {
        $result = $this->connection->get($this->resourcePathWithId, null);
        return $this->responseDataToModel($result);
    }

    /**
     * @param $response
     *
     * @return AbstractResponseModel
     */
    private function responseDataToModel(array $response) {
        $model = $this->getResponseModel();
        $model->__fromArray($response);
        return $model;
    }

    /**
     * @return AbstractResponseModel
     */
    abstract protected function getResponseModel();
}
