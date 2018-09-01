<?php

namespace Domain;

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
}

?>