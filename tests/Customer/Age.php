<?php

namespace Tests\Customer;

use Tests\Customer\AgeSpecification;
use Javelin\Domain\Value;
use Javelin\Exceptions\IllegalArgumentException;

class Age extends Value
{
	private $value;

	public function __construct(int $v)
	{
		$ageSpec = new AgeSpecification();

		if ($ageSpec->isSatisfiedBy($v))
		{
			$this->value = $v;
		}
		else
		{
			throw new IllegalArgumentException("Age Invalid");
		}
	}

	public function value()
	{
		return $value;
	}

	public function equals($target): bool
	{
		$status = false;
		if ($target instanceof self::class)
		{
			$status = $this->value == $target->value(); 
		}
		else
		{
			$status = $this->value == $target;
		}

		return $status;
	}
}

?>