<?php

namespace Domain\Events; 

use Domain\Events\EventInterface; 
use Domain\Events\EventSubscriberInterface; 

/*-----------------------------------
| EventDispatcherInterface
------------------------------------
|
|	EventDispatcherInterface 
|	contains functionalities intended
|	for Event Dispatcher
|
------------------------------------
*/

interface EventSubscriberInterface
{

	/**
	* returns an array of all the events it is subscribed to. 
	*/

	public function getSubscribedEvents(): array; 
}

?>