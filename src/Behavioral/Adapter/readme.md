#Adapter pattern

Adapter pattern allows the interface of existing class to be used from another interface. It is often used to adapt
other classes to work with other without modifying original class source. Adapter lets classes work together despite to
incompatible interfaces.

You can compare it to real world situation. You have device A and B that sends same data but in different format for example
one sends audio in MP3 and the other in wav so you need adapter that converts audio from one device to be readable by
the other one. 

##When to use

1. When you want to adapt class behavior to new conditions without modifying source of original class
2. When you want to secure some methods from original class not to be visible for example because they use large
amount of resources.
3. When you want to use existing class but its interface does not match the one you need
4. 

##How to use

See [tests/DecoratorTest](/tests/DecoratorTest.php)