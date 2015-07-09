#Singleton

Singleton is easy way to be sure that you get one instance of object but you should not use it because it comes with cost.

##Why not to use Singleton?

* If *SOLID* is something that sounds familar for you then you know what *Single reponsiblity principle* is. Singleton
breaks it.

* Classes that use Singleton are hard to be tested and mocked. The environment is hard to be isolated while testing.

* Singleton causes class to have global state. With Singleton you hide object's dependencies instead of exposing them
by interfaces.

* Singleton can be and will be abused as global variable

##What to do, how to live?

You should redesign your application not to use this pattern. There are several other patterns that can give you
similar result without all the cons. You can for example check *Dependency Injection*
