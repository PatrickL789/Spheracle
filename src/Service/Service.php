<?php

namespace Domain;

use Domain\ServiceInterface;

/**--------------------------------------------------------------------------
|
|	Domain Service
|
-----------------------------------------------------------------------------
|
|	A Domain Service represents a domain service is an operation offered as an
|	interface that stands alone in a model, without encapsulating state as 
|	entities or value objects. A Domain Service is defined in terms of what it can 
|	do for a client
|
-----------------------------------------------------------------------------
*/


abstract class Service implements ServiceInterface
{
	// constructor

	public function __construct()
	{
		//
	}
}

?>