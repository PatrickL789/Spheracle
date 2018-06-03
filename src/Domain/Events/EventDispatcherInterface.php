<?php

namespace Domain\Events; 

use Domain\Events\EventInterface; 
use Domain\Events\EventSubscriberInterface; 

/*-----------------------------------
| EventDispatcherInterface
------------------------------------
|
|	EventDispatcherInterface contains 
|	functionalities intended for Event
|	Dispatcher
|
------------------------------------
*/

interface EventDispatcherInterface
{
	/**
	* dispatch() dispatches events to the event listeners
	*
	* @param Javelin\Interface\EventInterface $event is the event to be passed to the event listeners. 
	*/

	public function dispatch(EventInterface $event): EventInterface;


	/**
	* addListener() adds an event listener that listens to the specified events
	*
	* @param priority int is the priority of the listener. The higher the number, 
	* the earlier it will receive the event
	* @param callable is the listener to be added. 
	* #return void
	*/

	public function addListener(callable $listener, , int $priority = 0); 


	/**
	* addSubscriber() adds an event subscriber
	* @ param EventSubscriberInterface
	*/

	public function addSubscriber(SubscriberInterface $subscriber); 


	/**
	* remoes an event listener
	*
	* @param string
	* @param callable
	*/

	public function removeListener(stirng $eventName, callable $listener); 


	/**
	* removes a subscriber
	* @param EventSubscriberInterface
	*/

	public function removeSubscriber(EventSubscriberInterface $subscriber); 


	/*
	* getListeners() returns an array or the listeners registered
	* @return array
	*/

	public function getListeners(): array; 


	/*
	* getListeners() returns an array or the listeners registered
	* @param string
	* @return bool
	*/


	public function hasListeners(string $eventName = null): bool; 

}

?>