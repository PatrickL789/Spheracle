<?php
	
namespace Utils;

use Utils\Specification; 

/**--------------------------------------------------------------------------
|
|	OrNotSpecification
|
-----------------------------------------------------------------------------
|
|	A generic Specification pattern
|
-----------------------------------------------------------------------------
*/

class OrNotSpecification extends Specification
{
	
	/**
	* @var SpecificationInterface
	*/

	private $left;


	/**
	* @var SpecificationInterface
	*/

	private $right;


	/**
	* constructor
	*/

	public function __construct(SpecificationInterface $left, SpecificationInterface $right)
	{
		$this->left = $left; 
		$this->right = $right; 
	}

	/**
	* isSatisfiedBy()
	*/

	public function isSatisfiedBy($target): bool
	{
		return $this->left->isSatisfiedBy($target) || !$this->right->isSatisfiedBy($target);
	}
}

?>