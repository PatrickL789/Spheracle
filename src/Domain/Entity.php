<?php

namespace Javelini\Domain;

use Javelin\Domain\EntityInterface;
use Javelin\Exceptions\IllegalStateChangeException; 
use Javelin\Exceptions\IllegalArgunentException;
use Javelin\Exceptions\IDInterface; 
use Javelin\Utils\ID\ID;

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

	public function id(): IDInterface
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
		return $this->id()->equals($target);
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