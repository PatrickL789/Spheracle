<?php

use PHPUnit\Framework\TestCase;
require_once(__DIR__ . "/Customer/CustomerRepository.php");


class RepositoryTest extends TestCase
{
	public function testEquals()
	{
		$customerRepo = new CustomerRepository();
		$name = new Name("Bob", "Bull");
		$age = new Age(25);
		$newCust = new Customer($name, $age);

		// test add()
		$this->assertSame(true, $customerRepo->add($newCust));

		$cust = $customerRepo->findById(25);
		$this->assertSame(25, $cust->age()->value());
	}
}
?>