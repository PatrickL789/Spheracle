<?php

namespace Domain; 

use Domain\AggregateInterface; 

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
	


	// constructor

	public function __construct()
	{
		//
	}
}

?>