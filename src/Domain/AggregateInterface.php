<?php

namespace Spheracle\Domain;

use Spheracle\Domain\EntityInterface; 

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

	
}

?>