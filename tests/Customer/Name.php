<?php


use Javelin\Domain\Value;

class Name extends Value
{
	/**
	* first name
	* @var stirng
	*/

	private $firstName;


	/**
	* last name
	* @var string
	*/

	private $lastName;


	// constructor

	public function __construct(string $first, string $last)
	{
		$this->firstName = $first;
		$this->lastName = $last; 
	}

	public function firstName()
	{
		return $this->firstName;
	}

	public function lastName()
	{
		return $this->lastName; 
	}

	public function equals($target):bool
	{
		$status = false;

		if ($target instanceof self)
		{
			if (($this->firstName == $target->firstName()) && ($this->lastName == $target->lastName()))
			{
				$status = true;
			}
		}

		return $status;
	}
}

?>