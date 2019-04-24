PAMI\Message\Response\Factory\Impl\ResponseFactoryImpl
===============

This factory knows which reponse handler to return according to a given raw message from ami,
the outgoingMessageClass and responseHandler requested by the Action

PHP Version 5


* Class name: ResponseFactoryImpl
* Namespace: PAMI\Message\Response\Factory\Impl
* This class implements: [PAMI\Message\Response\Factory\IResponseFactory](PAMI-Message-Response-Factory-IResponseFactory.md)




Properties
----------


### $logger

    private mixed $logger





* Visibility: **private**


### $responseClassMapping

    private mixed $responseClassMapping = array()





* Visibility: **private**


Methods
-------


### registerResponseClass

    mixed PAMI\Message\Response\Factory\IResponseFactory::registerResponseClass(string $actionClass, string $responseClass)

Registers the response class that should be used for the given action class.



* Visibility: **public**
* This method is defined by [PAMI\Message\Response\Factory\IResponseFactory](PAMI-Message-Response-Factory-IResponseFactory.md)


#### Arguments
* $actionClass **string**
* $responseClass **string**



### createFromRaw

    \PAMI\Message\Response\Response PAMI\Message\Response\Factory\IResponseFactory::createFromRaw(string $responseMessage, string $requestMessage)

This is our factory method.



* Visibility: **public**
* This method is defined by [PAMI\Message\Response\Factory\IResponseFactory](PAMI-Message-Response-Factory-IResponseFactory.md)


#### Arguments
* $responseMessage **string** - &lt;p&gt;Literal message as received from ami.&lt;/p&gt;
* $requestMessage **string**



### __construct

    mixed PAMI\Message\Response\Factory\Impl\ResponseFactoryImpl::__construct()

Constructor. Nothing to see here, move along.



* Visibility: **public**




### createResponseHandler

    mixed PAMI\Message\Response\Factory\Impl\ResponseFactoryImpl::createResponseHandler($class, $message)





* Visibility: **public**


#### Arguments
* $class **mixed**
* $message **mixed**


