#Decorator pattern

Decorator is used to add/remove functionality to object without modifying it. Decorator is very useful for adhering
Single Responsibility Principle in SOLID because it allows functionality to be divided  amoung classes with uniques areas
of concern.

Decorator can be used to add behavior to class statically or dynamically. 

##When to use

1. When you want to add/remove class behavior without modifying it.
2. When you want to wrap some object with additional functionality.

##How to use

See [tests/DecoratorTest](/tests/Structural/Decorator/DecoratorTest.php)