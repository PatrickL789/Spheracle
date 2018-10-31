<?php

namespace Spheracle\Domain;

use Spheracle\Domain\FactoryInterface;


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