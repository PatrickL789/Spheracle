<?php

namespace Domain\Events; 

/*-----------------------------------
| EventInterface
------------------------------------
|
|	EventInterface 
|
------------------------------------
*/

interface EventInterface
{
	/**
	* isPropogating() returns whether or not the event is propogating
	* @return bool
	*/

	public function isPropogating(): bool; 


	/**
	* stopPropogating() stops the propogation of the event to other listeners
	*/

	public function stopPropogating(); 


	/*
	* getName() returns the name of the evnet. 
	* @returns string
	*/

	public function getName(): string; 
}

?>