<?php

namespace Concardis\Payengine\Lib\Models\Response\Orders;

use Concardis\Payengine\Lib\Internal\AbstractClass\AbstractModel;

class CredentialOnFile extends AbstractModel {

	/**
	 * Unique identifier for the COF contract of the payment instrument
	 * @var string
	 */
	private $id;

	/**
	 * @var string Enum:"ONECLICK" "UNSCHEDULED" "SCHEDULED"
	 */
	private $type;

	/**
	 * The channel (entry mode) via which the COF initial storage transaction is processed
	 * @var string  Enum:"ECOM" "MOTO"
	 */
	private $channel;

	/**
	 * Date after which no further authorizations shall be performed
	 * @var string <date>
	 */
	private $recurringExpiry;

	/**
	 * Indicates the minimum number of days between authorizations [ 1 .. 9999 ]
	 * @var int
	 */
	private $recurringFrequency;

	/**
	 * CredentialOnFile constructor.
	 *
	 * @param string $id
	 * @param string $type
	 * @param string $recurringExpiry
	 * @param int    $recurringFrequency
	 * @param string $channel
	 */
	public function __construct($id = null, $type = null, $recurringExpiry = null, $recurringFrequency = null, $channel = null) {
		$this->id                 = $id;
		$this->type               = $type;
		$this->channel            = $channel;
		$this->recurringExpiry    = $recurringExpiry;
		$this->recurringFrequency = $recurringFrequency;
	}

	/**
	 * @return string
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * @param string $id
	 */
	public function setId($id) {
		$this->id = $id;
	}

	/**
	 * @return string
	 */
	public function getType() {
		return $this->type;
	}

	/**
	 * @param string $type
	 */
	public function setType($type) {
		$this->type = $type;
	}

	/**
	 * @return string
	 */
	public function getRecurringExpiry() {
		return $this->recurringExpiry;
	}

	/**
	 * @param string $recurringExpiry
	 */
	public function setRecurringExpiry($recurringExpiry) {
		$this->recurringExpiry = $recurringExpiry;
	}

	/**
	 * @return int
	 */
	public function getRecurringFrequency() {
		return $this->recurringFrequency;
	}

	/**
	 * @param int $recurringFrequency
	 */
	public function setRecurringFrequency($recurringFrequency) {
		$this->recurringFrequency = $recurringFrequency;
	}

	/**
	 * @return string
	 */
	public function getChannel() {
		return $this->channel;
	}

	/**
	 * @param string $channel
	 */
	public function setChannel($channel) {
		$this->channel = $channel;
	}

}
