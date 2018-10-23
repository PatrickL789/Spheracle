<?php

namespace Javelin\Utils;

use Javelin\Domain\ServiceInterface;

/**-----------------------------------------------------------
|				LogServiceInterface
--------------------------------------------------------------
| LogServiceInterface provides an interface for the applications's
| logging capabilities.
--------------------------------------------------------------
*/


interface LogServiceInterface extends ServiceInterface
{
	/**
	* emergency() logs an emergency, indicating that the system
	* may be unusable. 
	* 
	* @param string $message
	* @param array $context
	*/

	public function emergency(string $message, array $context);

	/**
	* alert() logs an alert, indicating that action must be 
	* taken immediately. 
	* 
	* @param string $message
	* @param array $context
	*/

	public function alert(string $message, array $context);

	/**
	* critical() logs a critical condition.
	* 
	* @param string $message
	* @param array $context
	*/

	public function critical(string $message, array $context);


	/**
	* error() logs a runtime error, that needs no immediate action.
	* 
	* @param string $message
	* @param array $context
	*/

	public function error(string $message, array $context);

	/**
	* warning() logs a warning, indicating that exceptional 
	* occurences that not exceptions
	* 
	* @param string $message
	* @param array $context
	*/

	public function warning(string $message, array $context);

	/**
	* notice() logs a normal but significant event.
	* 
	* @param string $message
	* @param array $context
	*/

	public function notice(string $message, array $context);

	/**
	* info() logs interesting events.
	* 
	* @param string $message
	* @param array $context
	*/

	public function info(string $message, array $context);
}

?>