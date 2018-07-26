<?php

namespace Domain;

use Domain\EntityInterface; 

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


interface ValueInterface
{
	/**
	* getRoot() returns the root of the aggregate
	* 
	* @return Entity
	*/

	public function getRoot(): EntityInterface;
}

?>