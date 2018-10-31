<?php

namespace Spheracle\Domain; 

use Spheracle\Domain\AggregateInterface; 
use Spheracle\Domain\Entity; 

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


abstract class Aggregate implements AggregateInterface
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


	// root function

	public function root(): EntityInterface
	{
		return $this->root; 
	}
}

?>