<?php


use Javelin\Domain\Repository;

require_once(__DIR__ . "/Customer.php");

class CustomerRepository extends Repository
{
	public function findById($id)
	{
		return new Customer(new Name("Bob", "Johnson"), new Age(25));
	}

	public function add($customer): bool
	{
		return true;
	}
}

?>