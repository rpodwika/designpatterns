#Memento

Memento is behavioral pattern used to save state of object and easily revert it. Memento can be achived in several ways
in PHP the easiest way is Serialisation with magic methods *__wakeup()* and *__sleep()*

##When to use

You should use memento if you want revert state of object. It can be used in transactional operations. Memento protects
object encapsulation.

##How to use

See [tests/SimpleBasketTest](/tests/Behavioral/Memento/SimpleBasketTest.php)

##Notice

There are plenty of ways to implement memento but the purpose is to save object state to revert it without breaking
object's encapsulation