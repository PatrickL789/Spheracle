<?php

namespace Spheracle\ApplicationService;

use Spheracle\ApplicationService\DTOInterface; 

/**--------------------------------------------------------------------------
|
|	Data Transport Object (DTO)
|
-----------------------------------------------------------------------------
|
|	A Data Transport Object, or DTO, is a container that is designed to hold
|.  entire attributes. 
|
-----------------------------------------------------------------------------
*/

abstract class DTO implements DTOInterface
{
	public function __construct()
	{
		//
	}
}

?>