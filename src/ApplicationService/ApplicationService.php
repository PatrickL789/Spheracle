<?php

namespace Spheracle\ApplicationService;

use Spheracle\ApplicationService\ApplicationServiceInterface; 

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