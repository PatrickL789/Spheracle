<?php

namespace Spheracle\Domain; 


/**--------------------------------------------------------------------------
|
|	Entity
|
-----------------------------------------------------------------------------
|
|	An entity is any object defined primarily by it's identity. Entities have
|	life cycles that can drastically change their form or content. Therefore, 
|	a thread of continuity must be maintained. An entity has a unique 
|	predefined identity in which it's definition, responsibilities, and 
|	attributes revolve around. 
|
-----------------------------------------------------------------------------
*/

interface EntityInterface
{
	/**
	* 
	* id() returns the entity's unique identifying characteristic. 
	* This characteristic must be unique to the particular instnce of the entity. 
	*
	* @return mixed
	*
	*/

	public function id(); 

	/**
	* equals() determines if the entity is equal to $target
	* @param mixed 
	* @return bool
	*/

	public function equals($target): bool; 
}

?>