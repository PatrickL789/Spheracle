<?php

namespace Domain;

use Domain\ValueInterface

/**--------------------------------------------------------------------------
|
|	Value
|
-----------------------------------------------------------------------------
|
|	A Value represents a Value Object. A Value Object is an object that 
|	represents a descriptive aspect of a domain with no conceptual 
|	identity. Value Objects are instanciated to implement design elements
|	in which we only care about what they are. 
|
-----------------------------------------------------------------------------
*/


abstract class Value implements ValueInterface
{
	// constructor

	public function __construct()
	{
		//
	}
}

?>