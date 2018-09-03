<?php

use PHPUnit\Framework\TestCase;
require_once(__DIR__ . "/Account/Account.php");


class AggregateTest extends TestCase
{
	public function testRoot()
	{
		$custName = new Name("Joe", "Joe");
		$custAge = new Age(22);
		$customer = new customer($custName, $custAge);
		$account = new Account($customer);

		$resCust = $account->root();
		$this->assertSame(true, $customer->equals($resCust));
	}
}
?>