#Proxy

Proxy is used to give access to origin object however before that some logic may be applied. In my case before giving access to drive method of car object I check if a driver is sober and actually can drive a car.
For client using proxy is the same as origin object because they implement the same interface.

#When to use

* When you want to hide information about origin object
* When you want to provide more logic before accessing the object
* When you want to do some optimisation before givng access to object