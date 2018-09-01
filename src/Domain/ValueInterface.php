<?php

namespace Domain;

/**--------------------------------------------------------------------------
|
|	ValueInterface
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


interface ValueInterface
{
	/**
	* equals() determines if the object is equal to the target
	* @param mixed
	* @return bool
	*/

	public function equals($target): bool;
}

?>