# Javelin
Javelin is PHP library for writing your application's domain logic in a framework-independent way. Javelin uses the concepts of [Domain-Driven Design](https://en.wikipedia.org/wiki/Domain-driven_design) to create modular and readable domain logic code. Out of the box, Javelin provides classes and interfaces for both your application's Domain layer and Application Service layer. For your Domain layer, Javelin provides classes and interfaces for: 
- Entities
- Value Objects
- Domain Services
- Factories
- Repositories

For your Application Service layer, Javelin provides base classes for:
- Application Services
- Data Transport Objects (DTOs). 

# Installation
Before using Javlin, you must first install the package.

# Usage
Once installed, you are free to use the interfaces and classes provided by Javelin to your need. 

## Value Objects
A Value Object is an object that represents a descriptive aspect of a domain with no conceptual identity. Value Objects are instanciated to implement design elements in which we only care about what they are. 

To define your own Value objects, extend the Javelin\Domain\Value class like so.

```php
<?php

use Javelin\Domain\Value;

class Name extends Value
{
  // Code goes here
}

?>
```

The Value class only requires you to define the `equals()` method. The equals method returns a boolean value indicating whether or not the parameter $target is equal to the value object. You cn define this method in any way that is appropriate for your project. In our example, we'll keep things simple.

```php
<?php

use Javelin\Domain\Value;

class Name extends Value
{
  public function equals($target)
  {
    $status = false;
    
    if ($target instanceof self)
    {
      $status = $this->value === $target->value(); 
    }
    
    return $status;
  }
}

?>
```

After this, you can customize your value object as much as you'd like.

```php
<?php

use Javelin\Domain\Value;

class Name extends Value
{
  private $value;
  
  public function __construct(string $v)
  {
    $this->value = $v;
  }
  
  // define a getter for the value parameter. Value objects are immutable. so, setters are not needed. 
  
  public function value()
  {
    return $this->value;
  }
  
  public function equals($target)
  {
    $status = false;
    
    if ($target instanceof self)
    {
      $status = $this->value === $target->value(); 
    }
    
    return $status;
  }
}

?>
```



# Contribution Guidelines
To be updated
