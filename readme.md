#Design Patterns for PHP

[![Build Status](https://travis-ci.org/rpodwika/designpatterns.svg)](https://travis-ci.org/rpodwika/designpatterns)
[![Coverage Status](https://coveralls.io/repos/rpodwika/designpatterns/badge.svg?branch=master&service=github)](https://coveralls.io/github/rpodwika/designpatterns?branch=master)
[![Dependency Status](https://www.versioneye.com/user/projects/559efd53663635001c000015/badge.svg?style=flat)](https://www.versioneye.com/user/projects/559efd53663635001c000015)
[![Latest Stable Version](https://poser.pugx.org/rpodwika/designpatterns/v/stable)](https://packagist.org/packages/rpodwika/designpatterns) [![Total Downloads](https://poser.pugx.org/rpodwika/designpatterns/downloads)](https://packagist.org/packages/rpodwika/designpatterns) [![Latest Unstable Version](https://poser.pugx.org/rpodwika/designpatterns/v/unstable)](https://packagist.org/packages/rpodwika/designpatterns) [![License](https://poser.pugx.org/rpodwika/designpatterns/license)](https://packagist.org/packages/rpodwika/designpatterns)

##Why 

For my own pratice and to help other programmers I decided to implement several Design Patterns in PHP. I hope 
you like it and you will find it helpful. If you have any suggestions how can I write something better please create
pull request or message me

##What are design patterns

Design problems are proven to work solutions for problems that often occur while writing applications.


##Why to use them

Because they solve problems. You do not need to invent solution that is already working. How many times 
during your programmer career you had this feeling that you already solved problem that you are facing now? 
Same goes with patterns you have problem that could be solved using specific pattern. Keep in mind that you 
should not force your code to fit in patterns. It should come out naturally. Firstly K.I.S.S.


##Implemented patterns

1. Antipatterns
    * [Singleton](src/Antipatterns/) - One global instance of a class
2. Behavioral
    * [Adapter](src/Behavioral/Adapter) - adapt class behavior to new conditions without modifying source of original class
    * [Chain of responsibility](src/Behavioral/ChainOfResponsibility) - Avoid coupling the sender of a request to its receiver 
    by giving more than one object a chance to handle the request
    * [Memento](src/Behavioral/Memento) - Without violating encapsulation, capture and externalize an object's internal
    state
    * [Observer](src/Behavioral/Observer) - Define one to many dependency between objects so that when one changes state,
    all its dependents are notified and updated automatically
    * [State](src/Behavioral/State) - allow object to alter its behavior depending on current internal state change.
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
* Proxygit ad
* Command
* Interpreter
* Iterator
* Mediator
* Visitor

