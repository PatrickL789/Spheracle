<?php

namespace Test;

use Javelin\Domain\Entity; 
use Test\Domain\Product\ProductName;
use Test\Domain\Product\Quantity; 
use Test\Domain\Product\Price; 

class Product extends Entity
{	
	private $name;
	private $price;
	private $quantity;


	// constructor

	public function __construct($id, ProductName $name, Price $price, Quantity $quantity)
	{
		$this->id = $id;
		$this->name = $name; 
		$this->quantity = $quantity;
		$this->price = $price;
	}

	public function identifiedBy()
	{
		return $this->name;
	}

	public function increaseQuantityBy(ProductQuantity $quantity)
	{
		$newQuant = $this->quantity->value() + quantity->value(); 
		$this->quantity = new Quantity($newQuant);
	}


	public function decreaseQuantityBy(ProductQuantity $quantity)
	{
		$newQuant = $this->quantity->value() - quantity->value(); 
		$this->quantity = new Quantity($newQuant);
	}


	public function isSoldOut()
	{
		return $this->quantity->isZero();
	}

	public function name()
	{
		return $this->name;
	}

	public function price()
	{
		return $this->price; 
	}

	public function quantity()
	{
		return $this->quantity;
	}


}

?>