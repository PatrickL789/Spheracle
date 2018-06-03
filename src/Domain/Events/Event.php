<?php

namespace Domain\Events;

use Domain\Event\EventInterface; 


/**--------------------------------------------------------------------------
|
|	Event
|
-----------------------------------------------------------------------------
|
|	A Domain Event represents some event that has occured within a domain. 
|
-----------------------------------------------------------------------------
*/

abstract class Event implements EventInterface
{

	/**
	* @var string
	*/

	private $name; 



	/**
	* @var bool
	*/

	private $propogate; 



	// Constructor

	public function __construct()
	{
		$this->name = "event";
		$this->propogate = true; 
	}

	/**
	* getName() returns the name of the event
	*
	* @return string
	*/

	public function getName()
	{
		return $this->name; 
	}

	/**
	* stopPropogating() stops the propogation of the event to other listeners
	*/

	public function stopPropogating()
	{
		$this->propogate = false; 
	}


	/**
	* isPropogating() returns whether or not the event is propogating
	* @return bool
	*/

	public function isPropogating(): bool
	{
		return $this->propogate; 
	}
}

?>