<?php

namespace Utils;

/*-----------------------------------
|Command Intrface
------------------------------------
|
|	CommandInterface implements 
|	a Command Pattern
|
------------------------------------
*/

interface CommandInterface
{
	/**
	* execute() executes the command
	* @return void
	*/

	public function execute();
}

?>