#Observer pattern

Observer pattern is responsible for notifying objects called _Observer_ of any state changes in object called _subject_.
Observer is mostly implemented to create event handling systems. You can create events like in my example and notify
objects that event has been trigered. 

#File structure

- Observer: class that creates Observer object. It has two methods. 
    - Constructor which is takes _Subject_ and invokes attach methon on _Subject_ passing 
itself as argument
    - update - method responsible for activity(event handling) it is abstract to be implemented in 
observers
- Subject: class has list of _Observers_ and can notify _Observers_ that _Subject_ has change its state


#Example

[Auth.php](Auth.php) is a class that performs some authentication operations and extends _Subject_

[AuthLogging.php](AuthLogging.php) - is observer which is event listener and listens for 'logged in' and 
'logged out' state change. It also logs this events.

[AuthMailer.php](AuthMailer.php) - another observer listens for 'logged in' and 
'logged out' state change. It pretends to send emails after user logged in and out.

If you want to know how it exactly works check [ObserverTest.php](/tests/ObserverTest.php)

#Example of usage

$auth = new Auth(); //obserable subject
$authLogging = new AuthLogging($auth); //observes Auth class and logs events
$authMailer  = new AuthMailer($auth); //observers Auth class and mail about events

$auth->login();
$auth->logout();

##Output

logging event user has logged in
sending mail to administrator user has logged in
logging event user has logged out
sending mail to administrator user has logged out