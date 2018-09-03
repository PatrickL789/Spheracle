<?php

use Javelin\Domain\Entity;

require_once(__DIR__ . "/Name.php");
require_once(__DIR__ . "/Age.php");
use Javelin\Utils\ID;

class Customer extends Entity
{
	private $name;
	private $age;

	public function __construct(Name $name, Age $age)
	{
		$this->name = $name; 
		$this->age = $age;
		parent::__construct(new ID($this->name->firstName() . "-" . $this->name->lastName() . "-" . $this->age->value()));
	}

	public function isLegalAge()
	{
		return $this->age->value() >= 18;
	}

	public function name(): Name
	{
		return $this->name;
	}

	public function age(): Age
	{
		return $this->age; 
	}

	public function equals($target): bool
	{
		$status = false;

		if ($target instanceof self)
		{
			$sttatus = (($this->name() === $target->name()) && ($this->age() === $target->age()));
		}

		return $status;
	}


}

?>