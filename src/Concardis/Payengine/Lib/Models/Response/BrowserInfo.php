<?php
namespace Concardis\Payengine\Lib\Models\Response;

use Concardis\Payengine\Lib\Internal\AbstractClass\AbstractResponseModel;

class BrowserInfo extends AbstractResponseModel
{
    /**
     * @var string
     */
    private $browserInfoId;

    /**
     * @param string $browserInfoId
     */
    public function setBrowserInfoId($browserInfoId)
    {
        $this->browserInfoId = $browserInfoId;
    }

    /**
     * @return string
     */
    public function getBrowserInfoId()
    {
        return $this->browserInfoId;
    }
   
    
    

}