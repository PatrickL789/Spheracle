<?php

namespace Test;

use Javelin\Domain\Value; 

class Price extends Value
{	
	private $value; 


	// constructor

	public function __construct(float $value)
	{
		$this->value = $value;
	}

	public function value()
	{
		return $this->value; 
	}

	public function equals(self $target)
	{
		return $this->value == $target->value(); 
	}

	public function isGreaterThan(self $target)
	{
		$this->value > $target->value();
	}

	public function isLessThan(self $target)
	{
		$this->value < $target->value();
	}



}

?>