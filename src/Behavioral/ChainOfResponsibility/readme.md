#Chain of responsibility

The pattern is used when you want to launch request to be processed by pipeline by handlers. Handlers may decide
if they want to process request or send it to next handler. Sender does not know which handler will process request.

#When to use

* When you want request to be handled in pipeline and every handler can break chain or handle request
* When you want to give chance to more than one object to handle request
