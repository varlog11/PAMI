PAMI\Message\Event\TransportDetailEvent
===============

Event triggered when an agent logs in.

PHP Version 5


* Class name: TransportDetailEvent
* Namespace: PAMI\Message\Event
* Parent class: [PAMI\Message\Event\EventMessage](PAMI-Message-Event-EventMessage.md)



Constants
----------


### EOL

    const EOL = "\r\n"





### EOM

    const EOM = "\r\n\r\n"





Properties
----------


### $rawContent

    protected string $rawContent

Holds original message.



* Visibility: **protected**


### $channelVariables

    protected array<mixed,string> $channelVariables

Metadata. Specific channel variables.



* Visibility: **protected**


### $statusVariables

    protected array<mixed,string> $statusVariables

Metadata. Specific channel variables.



* Visibility: **protected**


### $lines

    protected array<mixed,string> $lines

Message content, line by line. This is what it gets sent
or received literally.



* Visibility: **protected**


### $variables

    protected array<mixed,string> $variables

Metadata. Message variables (key/value).



* Visibility: **protected**


### $keys

    protected array<mixed,string> $keys

Metadata. Message "keys" i.e: Action: login



* Visibility: **protected**


### $createdDate

    protected integer $createdDate

Created date (unix timestamp).



* Visibility: **protected**


Methods
-------


### getObjectType

    string PAMI\Message\Event\TransportDetailEvent::getObjectType()

Returns key: 'ObjectType'. The object's type. This will always be 'transport'.



* Visibility: **public**




### getObjectName

    string PAMI\Message\Event\TransportDetailEvent::getObjectName()

Returns key: 'ObjectName'. The name of this object.



* Visibility: **public**




### getProtocol

    string PAMI\Message\Event\TransportDetailEvent::getProtocol()

Returns key: 'Protocol'. Protocol to use for SIP traffic



* Visibility: **public**




### getBind

    string PAMI\Message\Event\TransportDetailEvent::getBind()

Returns key: 'Bind'. IP Address and optional port to bind to for this transport



* Visibility: **public**




### getAsycOperations

    string PAMI\Message\Event\TransportDetailEvent::getAsycOperations()

Returns key: 'AsycOperations'. Number of simultaneous Asynchronous Operations



* Visibility: **public**




### getCaListFile

    string PAMI\Message\Event\TransportDetailEvent::getCaListFile()

Returns key: 'CaListFile'. File containing a list of certificates to read (TLS ONLY)



* Visibility: **public**




### getCaListPath

    string PAMI\Message\Event\TransportDetailEvent::getCaListPath()

Returns key: 'CaListPath'. Path to directory containing a list of certificates to read (TLSONLY)



* Visibility: **public**




### getCertFile

    string PAMI\Message\Event\TransportDetailEvent::getCertFile()

Returns key: 'CertFile'. Certificate file for endpoint (TLS ONLY)



* Visibility: **public**




### getPrivKeyFile

    string PAMI\Message\Event\TransportDetailEvent::getPrivKeyFile()

Returns key: 'PrivKeyFile'. Private key file (TLS ONLY)



* Visibility: **public**




### getPassword

    string PAMI\Message\Event\TransportDetailEvent::getPassword()

Returns key: 'Password'. Password required for transport



* Visibility: **public**




### getExternalSignalingAddress

    string PAMI\Message\Event\TransportDetailEvent::getExternalSignalingAddress()

Returns key: 'ExternalSignalingAddress'. External address for SIP signalling



* Visibility: **public**




### getExternalSignalingPort

    string PAMI\Message\Event\TransportDetailEvent::getExternalSignalingPort()

Returns key: 'ExternalSignalingPort'. External port for SIP signalling



* Visibility: **public**




### getExternalMediaAddress

    string PAMI\Message\Event\TransportDetailEvent::getExternalMediaAddress()

Returns key: 'ExternalMediaAddress'. External IP address to use in RTP handling



* Visibility: **public**




### getDomain

    string PAMI\Message\Event\TransportDetailEvent::getDomain()

Returns key: 'Domain'. Domain the transport comes from



* Visibility: **public**




### getVerifyServer

    string PAMI\Message\Event\TransportDetailEvent::getVerifyServer()

Returns key: 'VerifyServer'. Require verification of server certificate (TLS ONLY)



* Visibility: **public**




### getVerifyClient

    string PAMI\Message\Event\TransportDetailEvent::getVerifyClient()

Returns key: 'VerifyClient'. Require verification of client certificate (TLS ONLY)



* Visibility: **public**




### getRequireClientCert

    string PAMI\Message\Event\TransportDetailEvent::getRequireClientCert()

Returns key: 'RequireClientCert'. Require client certificate (TLS ONLY)



* Visibility: **public**




### getMethod

    string PAMI\Message\Event\TransportDetailEvent::getMethod()

Returns key: 'Method'. Method of SSL transport (TLS ONLY)



* Visibility: **public**




### getCipher

    string PAMI\Message\Event\TransportDetailEvent::getCipher()

Returns key: 'Cipher'. Preferred cryptography cipher names (TLS ONLY)



* Visibility: **public**




### getLocalNet

    string PAMI\Message\Event\TransportDetailEvent::getLocalNet()

Returns key: 'LocalNet'. Network to consider local (used for NAT purposes).



* Visibility: **public**




### getTos

    string PAMI\Message\Event\TransportDetailEvent::getTos()

Returns key: 'Tos'. Enable TOS for the signalling sent over this transport



* Visibility: **public**




### getCos

    string PAMI\Message\Event\TransportDetailEvent::getCos()

Returns key: 'Cos'. Enable COS for the signalling sent over this transport



* Visibility: **public**




### getWebsocketWriteTimeout

    string PAMI\Message\Event\TransportDetailEvent::getWebsocketWriteTimeout()

Returns key: 'WebsocketWriteTimeout'. The timeout (in milliseconds) to set on WebSocket connections.



* Visibility: **public**




### getEndpointName

    string PAMI\Message\Event\TransportDetailEvent::getEndpointName()

Returns key: 'EndpointName'. The name of the endpoint associated with this information.



* Visibility: **public**




### getName

    string PAMI\Message\Event\EventMessage::getName()

Returns key 'Event'.



* Visibility: **public**
* This method is defined by [PAMI\Message\Event\EventMessage](PAMI-Message-Event-EventMessage.md)




### __sleep

    array<mixed,string> PAMI\Message\Message::__sleep()

Serialize function.



* Visibility: **public**
* This method is defined by [PAMI\Message\Message](PAMI-Message-Message.md)




### getEventList

    string PAMI\Message\IncomingMessage::getEventList()

Returns key 'EventList'. In respones, this will surely be a "start". In
events, should be a "complete".



* Visibility: **public**
* This method is defined by [PAMI\Message\IncomingMessage](PAMI-Message-IncomingMessage.md)




### getRawContent

    string PAMI\Message\IncomingMessage::getRawContent()

Returns the original message content without parsing.



* Visibility: **public**
* This method is defined by [PAMI\Message\IncomingMessage](PAMI-Message-IncomingMessage.md)




### getAllChannelVariables

    array PAMI\Message\IncomingMessage::getAllChannelVariables()

Returns the channel variables for all reported channels.

https://github.com/marcelog/PAMI/issues/85

The channel names will be lowercased.

* Visibility: **public**
* This method is defined by [PAMI\Message\IncomingMessage](PAMI-Message-IncomingMessage.md)




### getChannelVariables

    array PAMI\Message\IncomingMessage::getChannelVariables(string $channel)

Returns the channel variables for the given channel.

https://github.com/marcelog/PAMI/issues/85

* Visibility: **public**
* This method is defined by [PAMI\Message\IncomingMessage](PAMI-Message-IncomingMessage.md)


#### Arguments
* $channel **string** - &lt;p&gt;Channel name. If not given, will return variables
for the &quot;current&quot; channel.&lt;/p&gt;



### getAllStatusVariables

    array PAMI\Message\IncomingMessage::getAllStatusVariables()

Returns the channel variables for all reported channels.

https://github.com/marcelog/PAMI/issues/85

The channel names will be lowercased.

* Visibility: **public**
* This method is defined by [PAMI\Message\IncomingMessage](PAMI-Message-IncomingMessage.md)




### getStatusVariables

    array PAMI\Message\IncomingMessage::getStatusVariables(string $channel)

Returns the channel variables for the given channel.

https://github.com/marcelog/PAMI/issues/85

* Visibility: **public**
* This method is defined by [PAMI\Message\IncomingMessage](PAMI-Message-IncomingMessage.md)


#### Arguments
* $channel **string** - &lt;p&gt;Channel name. If not given, will return variables
for the &quot;current&quot; channel.&lt;/p&gt;



### __construct

    void PAMI\Message\Message::__construct()

Constructor.



* Visibility: **public**
* This method is defined by [PAMI\Message\Message](PAMI-Message-Message.md)




### getCreatedDate

    integer PAMI\Message\Message::getCreatedDate()

Returns created date.



* Visibility: **public**
* This method is defined by [PAMI\Message\Message](PAMI-Message-Message.md)




### setVariable

    void PAMI\Message\Message::setVariable(string $key, string $value)

Adds a variable to this message.



* Visibility: **public**
* This method is defined by [PAMI\Message\Message](PAMI-Message-Message.md)


#### Arguments
* $key **string** - &lt;p&gt;Variable name.&lt;/p&gt;
* $value **string** - &lt;p&gt;Variable value.&lt;/p&gt;



### getVariable

    string PAMI\Message\Message::getVariable(string $key)

Returns a variable by name.



* Visibility: **public**
* This method is defined by [PAMI\Message\Message](PAMI-Message-Message.md)


#### Arguments
* $key **string** - &lt;p&gt;Variable name.&lt;/p&gt;



### sanitizeInput

    \PAMI\Message\typed PAMI\Message\Message::sanitizeInput(string $value)

Sanitize incoming value



* Visibility: **protected**
* This method is defined by [PAMI\Message\Message](PAMI-Message-Message.md)


#### Arguments
* $value **string** - &lt;p&gt;Key value.&lt;/p&gt;



### setKey

    void PAMI\Message\Message::setKey(string $key, string $value)

Adds a variable to this message.



* Visibility: **protected**
* This method is defined by [PAMI\Message\Message](PAMI-Message-Message.md)


#### Arguments
* $key **string** - &lt;p&gt;Key name (i.e: Action).&lt;/p&gt;
* $value **string** - &lt;p&gt;Key value.&lt;/p&gt;



### setSanitizedKey

    void PAMI\Message\Message::setSanitizedKey(string $key, string $value)

Adds a variable to this message after sanitizing it first.



* Visibility: **protected**
* This method is defined by [PAMI\Message\Message](PAMI-Message-Message.md)


#### Arguments
* $key **string** - &lt;p&gt;Key name (i.e: Action).&lt;/p&gt;
* $value **string** - &lt;p&gt;Key value.&lt;/p&gt;



### getKey

    string PAMI\Message\Message::getKey(string $key)

Returns a key by name.



* Visibility: **public**
* This method is defined by [PAMI\Message\Message](PAMI-Message-Message.md)


#### Arguments
* $key **string** - &lt;p&gt;Key name (i.e: Action).&lt;/p&gt;



### getBoolKey

    string PAMI\Message\Message::getBoolKey(string $key)

Returns a key by name.



* Visibility: **public**
* This method is defined by [PAMI\Message\Message](PAMI-Message-Message.md)


#### Arguments
* $key **string** - &lt;p&gt;Key name (i.e: Action).&lt;/p&gt;



### getKeys

    array<mixed,string> PAMI\Message\Message::getKeys()

Returns all keys for this message.



* Visibility: **public**
* This method is defined by [PAMI\Message\Message](PAMI-Message-Message.md)




### getVariables

    array<mixed,string> PAMI\Message\Message::getVariables()

Returns all variabels for this message.



* Visibility: **public**
* This method is defined by [PAMI\Message\Message](PAMI-Message-Message.md)




### finishMessage

    string PAMI\Message\Message::finishMessage($message)

Returns the end of message token appended to the end of a given message.



* Visibility: **protected**
* This method is defined by [PAMI\Message\Message](PAMI-Message-Message.md)


#### Arguments
* $message **mixed**



### serializeVariable

    string PAMI\Message\Message::serializeVariable(string $key, string $value)

Returns the string representation for an ami action variable.



* Visibility: **private**
* This method is defined by [PAMI\Message\Message](PAMI-Message-Message.md)


#### Arguments
* $key **string**
* $value **string**



### serialize

    string PAMI\Message\Message::serialize()

Gives a string representation for this message, ready to be sent to
ami.



* Visibility: **public**
* This method is defined by [PAMI\Message\Message](PAMI-Message-Message.md)




### getActionID

    string PAMI\Message\Message::getActionID()

Returns key: 'ActionID'.



* Visibility: **public**
* This method is defined by [PAMI\Message\Message](PAMI-Message-Message.md)



