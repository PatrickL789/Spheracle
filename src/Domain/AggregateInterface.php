<?php

namespace Javelin\Domain;

use Javelin\Domain\EntityInterface; 

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


interface AggregateInterface
{
	/* 
	* root() returns the root of the aggregate
	*/

	public function root(): EntityInterface; 

	/**
	* equals() determines if two aggregates are equal. 
	* @param mixed
	* @return bool
	*/

	public function equals($target): bool;
}

?>