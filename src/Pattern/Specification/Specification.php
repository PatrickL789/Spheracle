<?php

namespace Pattern\Specification; 

use Pattern\Specification\SpecificationInterface; 
use Pattern\Specification\AndSpecification; 
use Pattern\Specification\AndNotSpecification; 
use Pattern\Specification\OrSpecification; 
use Pattern\Specification\OrNotSpecification; 



/**--------------------------------------------------------------------------
|
|	Specification
|
-----------------------------------------------------------------------------
|
|	A generic Specification pattern
|
-----------------------------------------------------------------------------
*/

class Specification implements SpecificationInterface
{
	
	/**
	* construct
	*/

	public function __construct()
	{
		//
	}

	/**
	* isSatisfiedBy() determines whether or not target satisfies the specification
	* @param mixed
	* @return bool
	*/

	public function isSatisfiedBy($target): bool
	{
		return false; 
	}


	/**
	* and() 
	* @param SpecificationInterface
	* @return AndSpecification
	*/

	public function and(SpecificationInterface $other): SpecificationInterface
	{
		return new AndSpecification($this, $other);
	}


	/**
	* andNot()
	* @param SpecificationInterface
	* @return SpecificationInterface
	*/

	public function andNot(SpecificationInterface $other): SpecificationInerface
	{
		return new AndNotSpecification($this, $other);
	}


	/**
	* or() 
	* @param SpecificationInterface
	* @return SpecificationInterface
	*/

	public function or(SpecificationInterface $other): SpecificationInterface
	{
		return new OrSpecification($this, $other);
	}


	/**
	* orNot() 
	* @param SpecificationInterface
	* @return SpecificationInterface
	*/

	public function orNot(SpecificationInterface $other): SpecificationInterface
	{
		return new OrNotSpecification($this, $other);
	}
}

?>