#Design Patterns for PHP

[![Build Status](https://travis-ci.org/rpodwika/designpatterns.svg)](https://travis-ci.org/rpodwika/designpatterns)
[![Coverage Status](https://coveralls.io/repos/rpodwika/designpatterns/badge.svg?branch=master&service=github)](https://coveralls.io/github/rpodwika/designpatterns?branch=master)
[![Dependency Status](https://www.versioneye.com/user/projects/559efd53663635001c000015/badge.svg?style=flat)](https://www.versioneye.com/user/projects/559efd53663635001c000015)
[![Latest Stable Version](https://poser.pugx.org/rpodwika/designpatterns/v/stable)](https://packagist.org/packages/rpodwika/designpatterns) [![Total Downloads](https://poser.pugx.org/rpodwika/designpatterns/downloads)](https://packagist.org/packages/rpodwika/designpatterns) [![Latest Unstable Version](https://poser.pugx.org/rpodwika/designpatterns/v/unstable)](https://packagist.org/packages/rpodwika/designpatterns) [![License](https://poser.pugx.org/rpodwika/designpatterns/license)](https://packagist.org/packages/rpodwika/designpatterns)

For my own pratice and to help other programmers I decided to implement several Design Patterns in PHP I hope 
you like it and you will find it helpful. If you have any suggestions how can I write something better please create
pull request or message me

##Implemented patterns

1. Antipatterns
    * [Singleton](src/Antipatterns/) - One global instance of a class
2. Behavioral
    * [Memento](src/Behavioral/Memento) - Without violating encapsulation, capture and externalize an object's internal
    state
    * [Observer](src/Behavioral/Observer) - Define one to many dependency between objects so that when one changes state,
    all its dependents are notified and updated automatically
    * [Strategy](src/Behavioral/Strategy) - Define a family of algorithms and make them interchangable. 
3. Creational
    * [Factory](src/Creational/Factory) - Define an interface for creating an object but let the subclasses decide
    which class to instantiate
4. Structural
    * [Decorator](src/Structural/Decorator) - Attach additional object features dynamically without subclassing
    or modifying source class.
    
##To be implemented
    
* Abstract factory
* Builder
* Prototype
* Bridge
* Composite
* Facade
* Flyweight
* Proxy
* Chain of responsibility
* Command
* Interpreter
* Iterator
* Mediator
* State
* Visitor

