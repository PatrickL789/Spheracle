<?php

namespace ApplicationService;

use ApplicatioinService\ApplicationServiceInterface; 

/**--------------------------------------------------------------------------
|
|	ApplicationService
|
-----------------------------------------------------------------------------
|
|	Application Services define how your domain communicates with the outside 
|	world. Application Services are your system's API. 
|
-----------------------------------------------------------------------------
*/

abstract class ApplicationService implements ApplicationServiceInterface
{


	public function __construct()
	{
		//
	}
}

?>