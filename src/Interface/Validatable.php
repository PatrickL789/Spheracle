<?php

namespace Interface; 


/**--------------------------------------------------------------------------
|
|	Validatable Inteerface
|
-----------------------------------------------------------------------------
|
|	Validatable is an interface 
|
-----------------------------------------------------------------------------
*/

interface Validatable
{
	/**
	* isValid() determines whether or not the object is valid.
	* @return bool 
	*/

	public function isValid(): bool;
}

?>