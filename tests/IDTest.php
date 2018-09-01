<?php

use PHPUnit\Framework\TestCase;
use Javelin\Utils\ID;

/**===========================
||			IDTest
==============================
*/

class IDTest extends TestCase
{
	public function testConstructFromString()
	{
		$id = new ID("foo");
		$this->assertSame("foo", $id->value());
	}

	public function testEquals()
	{
		$firstId = new ID(1);
		$secondId = new ID(2);
		$thirdId = new ID(1);

		//test equals
		$this->assertSame(true, $firstId->equals($thirdId));
		$this->assertSame(false, $firstId->equals($secondId));
	}
}

?>