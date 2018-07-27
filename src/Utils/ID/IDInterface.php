<?php

namespace Util;

use Domain\ValueInterface;

/**--------------------------------------------------------------------------
|
|	IDInterface
|
-----------------------------------------------------------------------------
|
|	IDInterface is an interface for an ID
|
-----------------------------------------------------------------------------
*/

interface IDInterface extends ValueInterface
{
	/**
	* value() returns the ID's value
	* @return mixed
	*/

	public function value();
}

?>