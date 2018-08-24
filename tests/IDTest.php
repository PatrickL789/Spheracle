<?php

use PHPUnit\Framework\TestCase;
use Javelin\Utils\ID\ID;

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
}

?>