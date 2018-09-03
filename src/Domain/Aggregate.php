<?php

namespace Javelin\Domain; 

use Javelin\Domain\AggregateInterface; 
use Javelin\Domain\Entity; 

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