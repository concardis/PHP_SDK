<?php
namespace Concardis\Payengine\Lib\Internal\Resource;

use Concardis\Payengine\Lib\Internal\AbstractClass\AbstractResource;
use Concardis\Payengine\Lib\Internal\Constants\Api;
use Concardis\Payengine\Lib\Internal\Interfaces\Postable;

class BrowserInfos extends AbstractResource implements Postable
{
    protected $resourcePath = Api::RESOURCE_BROWSER_INFO;

    /**
     * @param $data \Concardis\Payengine\Lib\Models\Request\BrowserInfo
     * @return \Concardis\Payengine\Lib\Models\Response\BrowserInfo
     */
    public function post(\Concardis\Payengine\Lib\Models\Request\BrowserInfo $data)
    {
        $result = parent::post($data);
        return $result;
    }

    /**
     * @return \Concardis\Payengine\Lib\Models\Response\BrowserInfo
     */
    protected function getResponseModel()
    {
        return new \Concardis\Payengine\Lib\Models\Response\BrowserInfo();
    }
}
