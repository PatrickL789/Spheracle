<?php

namespace Test;

use Javelin\Domain\Value; 
use Test\Domain\Price\ValidPriceSpecification; 

class Price extends Value
{	
	private $value; 


	// constructor

	public function __construct(float $value)
	{
		$spec = new ValidPriceSpecification(); 

		if ($spec->isSatisfiedBy($value))
		{
			$this->value = $value; 
		}
		else
		{
			$this->value = 0.0;
		}
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