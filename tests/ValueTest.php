<?php

use PHPUnit\Framework\TestCase;
use Tests\Customer\Name;

class ValueTest extends TestCase
{
	public function testEquals()
	{
		$name1 = new Name("John", "Doe");
		$sameName = clone $name1;
		$diffName = new Name("Joe", "Appleseed"); 

		$this->assertSame(true, $name1->quals($sameName));
		$this->assertSame(false, $name1->equals($diffName));
	}
}
?>