<?php

namespace Javelin\Domain; 

use Javelin\Domain\AggregateInterface; 
use Javelin\Entity\Entity; 

/**--------------------------------------------------------------------------
|
|	AggregateRootInterace
|
-----------------------------------------------------------------------------
|
|	An Aggregate is a cluster of associated objects 
|
-----------------------------------------------------------------------------
*/


class Aggregate implements AggregateInterface
{
	
	/*
	* @var Entity
	*/

	private $root; 


	// constructor

	public function __construct(EntityInterface $root)
	{
		$this->root = $root;
	}

	/**
	* equals() determines if two aggregates are equal. 
	* @param mixed
	* @return bool
	*/

	public function equals($target): bool
	{
		$status = false;

		if ($target instanceof self)
		{
			$status = $target->value() == $this->value;
		}
		else
		{
			$status = ($this->value == $target);
		}

		return $status;
	}


	// root function

	public funcion root(): EntityInterface
	{
		return $this->root; 
	}
}

?>