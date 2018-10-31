<?php

use Spheracle\ApplicationService\DTO;

require_once(__DIR__ . "/../Customer/Customer.php");

class CustomerDTO extends DTO
{
	private $firstName;
	private $lastName;
	private $age;

	/**
	* constructor
	*/

	public function __construct(string $firstName, string $lastName, int $age)
	{
		$this->firstName = $firstName;
		$this->lastName = $lastName;
		$this->age = $age;
	}

	public function firstName()
	{
		return $this->firstName;
	}

	public function lastName()
	{
		return $this->lastName;
	}

	public function age()
	{
		return $this->age;
	}
}

?>