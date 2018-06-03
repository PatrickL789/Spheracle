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

interface EntityInterface
{
	/**
	* 
	* identifiedBy(() returns the entity's unique identifying characteristic. 
	* This characteristic must be unique to the particular instnce of the entity. 
	*
	* @return mixed 
	*
	*/

	public abstract function identifiedBy(); 

	/**
	* equals() determines if the entity is equal to $target
	* @param mixed 
	* @return bool
	*/

	public function equals($target): bool; 


	/**
	* raiseEvent() raises a domain event 
	* 
	* @param Javelin\Domain\Event
	*
	* @return void
	*/

	protected raiseEvent(EventInterface $e, int $priority);


	/**
	* getEvents() retreives all the events raised by the domain
	*
	* @return array 
	*/

	public function getEvents(): array; 
}

?>