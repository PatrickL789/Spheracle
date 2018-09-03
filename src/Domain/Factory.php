<?php

namespace Javelin\Domain;

use Javelin\Domain\FactoryInterface;


/**--------------------------------------------------------------------------
|
|	Factory
|
-----------------------------------------------------------------------------
|
|	A Domain Factory s an object responsible for the creation of other objects
|
-----------------------------------------------------------------------------
*/


abstract class Factory implements FactoryInterface
{
	//

	public function __construct()
	{
		//
	}
}

?>