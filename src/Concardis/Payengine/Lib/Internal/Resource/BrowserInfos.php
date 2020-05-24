<?php
namespace Concardis\Payengine\Lib\Internal\Resource;

use Concardis\Payengine\Lib\Internal\AbstractClass\AbstractResource;
use Concardis\Payengine\Lib\Internal\Constants\Api;
use Concardis\Payengine\Lib\Internal\Constants\ErrorCodes;
use Concardis\Payengine\Lib\Internal\Interfaces\Getable;
use Concardis\Payengine\Lib\Internal\Interfaces\Patchable;
use Concardis\Payengine\Lib\Internal\Interfaces\Postable;
use Concardis\Payengine\Lib\Models\Response\BrowserInfo;

class BrowserInfos extends AbstractResource implements Postable
{
    protected $resourcePath = Api::RESOURCE_BROWSERINFO;

    /**
     * @param $data
     *
     * @return BrowserInfo
     */
    public function post($data)
    {
        /**
         * @var $result BrowserInfo
         */
        $result = parent::post($data);

        return $result;
    }

    /**
     * @return BrowserInfos
     */
    protected function getResponseModel()
    {
        return new BrowserInfo();
    }
}