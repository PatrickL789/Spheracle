<?php

namespace Domain;

use Javelin\Value\ValueInterface
use Javelin\Exceptions\IllegalConversionException;

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


abstract class Value implements ValueInterface
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



	// Static methods

	/**
	* encode converts the value into a string representation. 
	*/

	public static function encode(ValueInterface $value): string
	{
		return "";
	}

	/**
	* decode() converts the string representation to an object. 
	* @var string
	* @return Domain\Value
	*/

	public static function decode(string $value): ValueInterface
	{
		throw new IllegalConversionException(); 
	}


	// Magic Methods

	/**
	* __toString()
	*/

	public function __toString()
	{
		return self::encode($this);
	}


}

?>