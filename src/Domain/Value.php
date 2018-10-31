<?php
namespace Spheracle\Domain;


use Spheracle\Domain\ValueInterface;
use Spheracle\Exceptions\IllegalStateChangeException;

/**--------------------------------------------------------------------------
|
|	Value
|
-----------------------------------------------------------------------------
|
|	A Value represents a Value Object. A Value Object is an object that 
|	represents a descriptive aspect of a domain with no conceptual 
|	identity. Value Objects are instanciated to implement design elements
|	in which we only care about what they are. 
|
-----------------------------------------------------------------------------
*/

class Value implements ValueInterface
{
	// constructor

	public function __construct()
	{
		$this->isValid();
	}

	/**
	* equals() determines if the object is equal to the target
	* @param mixed
	* @return bool
	*/

	public function equals($target): bool
	{
		return false;
	}



	// Magic Methods

	/**
	* __toString()
	*/

	public function __toString()
	{
		//
	}


}

?>