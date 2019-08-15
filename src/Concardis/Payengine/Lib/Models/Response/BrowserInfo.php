<?php

namespace Concardis\Payengine\Lib\Models\Response;

use Concardis\Payengine\Lib\Internal\AbstractClass\AbstractResponseModel;

class BrowserInfo extends AbstractResponseModel
{
	const CLASSNAME = __CLASS__;

    /**
     * @var string
     */
    private $browserInfoId;

	/**
	 * @return string
	 */
	public function getBrowserInfoId() {
		return $this->browserInfoId;
	}

	/**
	 * @param string $browserInfoId
	 */
	public function setBrowserInfoId($browserInfoId) {
		$this->browserInfoId = $browserInfoId;
	}

}
