<?php

namespace Domain;

use Domain\Events\EventInterface;

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
	* @var array
	*/

	private $events; 

	public function __construct()
	{
		$this->events = array(); 
	}


	/**
	* 
	* identifiedBy(() returns the entity's unique identifying characteristic. 
	* This characteristic must be unique to the particular instnce of the entity. 
	*
	* @return mixed 
	*
	*/

	public function identifiedBy()
	{
		return null; 
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
	* raiseEvent() raises a domain event 
	* 
	* @param Javelin\Domain\Event
	*
	* @return void
	*/

	protected raiseEvent(EventInterface $e, int $priority = 0)
	{
		$this->events[] = $e;
	}


	/**
	* getEvents() retreives all the events raised by the domain
	*
	* @return array 
	*/

	public function getEvents(): array
	{
		return $this->events; 
	}
}

?>