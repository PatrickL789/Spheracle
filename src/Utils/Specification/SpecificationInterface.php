<?php

namespace Utils; 

/*-----------------------------------
| SpecificationInterface
------------------------------------
|
|	SpecificationInterface 
|
------------------------------------
*/

interface SpecificationInterface
{
	/**
	* isSatisfiedBy() determines whether or not target satisfies the specification
	* @param mixed
	* @return bool
	*/

	public function isSatisfiedBy($target): bool; 


	/**
	* and() 
	* @param SpecificationInterface
	* @return SpecificationInterface
	*/

	public function and(SpecificationInterface $other): SpecificationInterface; 


	/**
	* andNot()
	* @param SpecificationInterface
	* @return SpecificationInterface
	*/

	public function andNot(SpecificationInterface $other): SpecificationInerface; 



	/**
	* or() 
	* @param SpecificationInterface
	* @return SpecificationInterface
	*/

	public function or(SpecificationInterface $other): SpecificationInterface; 


	/**
	* orNot() 
	* @param SpecificationInterface
	* @return SpecificationInterface
	*/

	public function orNot(SpecificationInterface $other): SpecificationInterface;  
}

?>