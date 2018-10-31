<?php

use Spheracle\Domain\Aggregate;

require_once(__DIR__ . "/../Customer/Customer.php");

class Account extends Aggregate
{

	/**
	* Constructor
	*/

	public function __construct(Customer $customer)
	{
		parent::__construct($customer);
	}
}

?>