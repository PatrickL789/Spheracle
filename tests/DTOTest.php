<?php

use PHPUnit\Framework\TestCase;
require_once(__DIR__ . "/DTO/CustomerDTO.php");


class DTOTest extends TestCase
{
	public function testDTO()
	{
		$customer = new CustomerDTO("Joe", "Boe", 34);
		$this->assertSame("Joe", $customer->firstName());
		$this->assertSame("Boe", $customer->lastName());
		$this->assertSame(34, $customer->age());
	}
}
?>