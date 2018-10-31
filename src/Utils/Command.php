<?php

namespace Spheracle\Utils; 

use Spheracle\Utils\CommandInterface;

/*-----------------------------------
| Command Intrface
------------------------------------
|
|	Command is a base class for a 
|	Command Pattern
|
------------------------------------
*/

abstract class Command implements CommandInterface
{
	
	/**
	* constructor
	*/

	public function __construct(){};

	/**
	* execute() 
	*/

	public abstract function execute(); 
}

?>