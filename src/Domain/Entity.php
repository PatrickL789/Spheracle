<?php

namespace Spheracle\Domain;

use Spheracle\Domain\EntityInterface;
use Spheracle\Exceptions\IllegalStateChangeException; 
use Spheracle\Exceptions\IllegalArgunentException;

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

abstract class Entity implements EntityInterface
{

	/**
	* @var Javelin\Utils\ID
	*/

	private $id;

	/**
	* Constructor
	*/

	public function __construct($id = null)
	{
		$this->id = $id;
	}


	/**
	* 
	* id(() returns the entity's unique identifying characteristic. 
	* This characteristic must be unique to the particular instnce of the entity. 
	*
	* @return Javelin\Utils\IDInterface
	*
	*/

	public function id()
	{
		return $this->id;
	}


	/**
	* equals() determines if the entity is equal to $target
	* @param mixed 
	* @return bool
	*/

	public abstract function equals($target): bool;
}

?>