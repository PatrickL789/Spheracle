<?php

namespace Tests\Customer;

use Tests\Customer\Age;
use Tests\Customer\Name;
use Javelin\Domain\Entity;

class Customer extends Entity
{
	private $name;
	private $age;

	public function __construct(Name $name, Age $age)
	{
		$this->name = $name; 
		$this->age = $age;
		parent::__construct(new ID($this->name->first() . "-" . $this->name->last() . "-" . $this->age->value()));
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


}

?>