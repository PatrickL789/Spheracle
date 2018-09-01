<?php

use PHPUnit\Framework\TestCase;
use Javelin\Entity\Entity;
use Javelin\Utils\ID\ID;

/**===========================
||			IDTest
==============================
*/

class IDTest extends TestCase
{
	public function testConstructFromString()
	{
		$id = new ID("Foo");
		$entity = new Entity($id);
		$this->assertSame('Foo', $entity->id()->value());

	}
}

?>