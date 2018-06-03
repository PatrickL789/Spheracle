<?php

namespace Test;

use Javelin\Pattern\Specification\Specification; 


class Product extends Specification
{	
	public function isSatisfiedBy($value)
	{
		return 0.0 < $value; 
	}
}

?>