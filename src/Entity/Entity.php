<?php

namespace Domain;

use Domain\EntityInterface;
use Util\IllegalStateChangeException; 
use Util\IllegalArgunentException;

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

class Entity implements EntityInterface
{

	/**
	* @var Utils\ID
	*/

	private $id;

	/**
	* Constructor
	*/

	public function __construct(IDInterface $id = null)
	{
		$this->id = $id;
	}


	/**
	* 
	* id(() returns the entity's unique identifying characteristic. 
	* This characteristic must be unique to the particular instnce of the entity. 
	*
	* @return mixed 
	*
	*/

	public function id(): ID
	{
		return $this->id;
	}


	/**
	* equals() determines if the entity is equal to $target
	* @param mixed 
	* @return bool
	*/

	public function equals($target)
	{
		$result = false; 

		if ($target instanceof self)
		{
			$result = $target->identifiedBy() == $this->identifiedBy(); 
		}
		else
		{
			$result = $target == $this->identifiedBy(); 
		}

		return $result; 
	}

	/**
	* setId() sets the entity's identifier to $id
	* @param Util\IDInterface
	@return void
	*/

	public function setId(IDInterface $id)
	(
		if ($this->id != null)
		{
			throw new IllegalStateChangeException("Entity is immutable");
		}

		if ($id == null)
		{
			throw new IllegalArgunentException("Id cannot be NULL"); 
		}

		$this->id = $id;
	)

}

?>