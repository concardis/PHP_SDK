<?php
namespace Concardis\Payengine\Lib\Models\Request\Orders\Meta;

use Concardis\Payengine\Lib\Internal\AbstractClass\AbstractModel;

class Meta extends AbstractModel
{

    /**
     * @var string
     */
    private $invoiceId;

    /**
     * @var int
     */
    private $invoiceDate;

	/**
	 * @var int
	 */
	private $deliveryDate;

	/**
	 * @var int
	 */
	private $dueDate;

	/**
	 * @return string
	 */
	public function getInvoiceId() {
		return $this->invoiceId;
	}

	/**
	 * @param string $invoiceId
	 */
	public function setInvoiceId($invoiceId) {
		$this->invoiceId = $invoiceId;
	}

	/**
	 * @return int
	 */
	public function getInvoiceDate() {
		return $this->invoiceDate;
	}

	/**
	 * @param int $invoiceDate
	 */
	public function setInvoiceDate($invoiceDate) {
		$this->invoiceDate = $invoiceDate;
	}

	/**
	 * @return int
	 */
	public function getDeliveryDate() {
		return $this->deliveryDate;
	}

	/**
	 * @param int $deliveryDate
	 */
	public function setDeliveryDate($deliveryDate) {
		$this->deliveryDate = $deliveryDate;
	}

	/**
	 * @return int
	 */
	public function getDueDate() {
		return $this->dueDate;
	}

	/**
	 * @param int $dueDate
	 */
	public function setDueDate($dueDate) {
		$this->dueDate = $dueDate;
	}
	
}
