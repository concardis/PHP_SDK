<?php
namespace Concardis\Payengine\Lib\Models\Request\Orders;

use Concardis\Payengine\Lib\Internal\AbstractClass\AbstractModel;

class Mandate extends AbstractModel
{
    /**
     * Mandate ID
     *
     * @var string
     */
    private $mandateId;

    /**
     * Date/Time of mandate creation
     *
     * @var string
     */
    private $createdDateTime;

    /**
     * Mandate text
     *
     * @var string
     */
    private $mandateText;

    /**
     * Get mandate id
     *
     * @return string
     */
    public function getMandateId() {
        return $this->mandateId;
    }

    /**
     * Set mandate id
     *
     * @param string $mandateId
     * @return void
     */
    public function setMandateId($mandateId) {
        $this->mandateId = $mandateId;
    }

    /**
     * Get date/time of mandate creation
     *
     * @return string
     */
    public function getCreatedDateTime() {
        return $this->createdDateTime;
    }

    /**
     * Set date/time of mandate creation
     *
     * @param string $createdDateTime
     * @return void
     */
    public function setCreatedDateTime($createdDateTime) {
        $this->createdDateTime = $createdDateTime;
    }

    /**
     * Get mandate text
     *
     * @return string
     */
    public function getMandateText() {
        return $this->mandateText;
    }

    /**
     * Set mandate text
     *
     * @param string $mandateText
     * @return void
     */
    public function setMandateText($mandateText) {
        $this->mandateText = $mandateText;
    }
}