<?php

namespace Javelin\Utils;

use Javelin\Utils\IDInterface;
use Javelin\Domain\Value;
use Javelin\Exceptions\IllegalArgumentException;

/**--------------------------------------------------------------------------
|
|	ID
|
-----------------------------------------------------------------------------
|
|	An ID represents an identifier
|
-----------------------------------------------------------------------------
*/

class ID extends Value implements IDInterface
{
	/**
	* @var mixed
	*/

	private $value;

	/**
	* Constructor
	*/

	public function __construct($value)
	{
		$this->value = $value;
	}

	/**
	* equals() determines if the ID is equal to the target
	*/

	public function equals($target): bool
	{
		$status = false;

		if ($target instanceof self)
		{
			$status = $target->value() == $this->value;
		}
		else
		{
			$status = ($this->value == $target);
		}

		return $status;
	}

	/**
	* value() returns the ID's value
	* @return mixed
	*/

	public function value()
	{
		return $this->value;
	}


	// static functions

	/**
	* fromValue() generates a unique ID given a certain value
	* @param string
	* @return Util\ID
	*/

	public static function fromValue(string $value)
	{
		$id = strval($this->timeInMiliseconds());
		$id .= "-" . $this->getServerIP();
		$id .= "-" . $value;
		$id .= "-" . rand(0,100000);
		return self::__construct($id);

	}

	/**
	* returns current time in miliseconds
	*/

	private function timeInMiliseconds()
	{
		list($usec, $sec) = explode(" ", microtime());
		return round((float) $usec + (float) $sec * 1000);
	}

	/**
	* get IP address of server
	*/

	private function getServerIP()
	{
		$os = php_uname('s');
		$ip = "";

		if ($os == "Windows")
		{
			// WINDOWS
			$ip = $_SERVER['LOCAL_ADDR'];
		}
		else
		{
			// LINUX
			$ip = $_SERVER['SERVER_ADDR'];
		}

		return $ip;

		return $ip;
	}
}

?>