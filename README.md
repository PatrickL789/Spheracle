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

`
<?php

use Javelin\Domain\Value;

class Name extends Value
{
  //
}

?>
`

# Contribution Guidelines
To be updated
