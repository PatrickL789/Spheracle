<?php

namespace Tests\Customer;

use Javelin\Utils\Specification;

class AgeSpecification extends Specification
{
	public function isSatisfiedBy(int $target)
	{
		return $target >= 0;
	}
}

?>