<?php

use Javelin\Utils\Specification;

class AgeSpecification extends Specification
{
	public function isSatisfiedBy($target): bool
	{
		return $target >= 0;
	}
}

?>