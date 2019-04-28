PAMI\Message\Event\LocalBridgeEvent
===============

LocalBridge Event

Note: Auto Generated using xsltproc

PHP Version 5


* Class name: LocalBridgeEvent
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


### getLocalOneChannel

    string PAMI\Message\Event\LocalBridgeEvent::getLocalOneChannel()

get LocalOneChannel

Returns key: 'LocalOneChannel'

* Visibility: **public**




### getLocalOneChannelState

    string PAMI\Message\Event\LocalBridgeEvent::getLocalOneChannelState()

get LocalOneChannelState

Returns:A numeric code for the channel's current state, related to LocalOneChannelStateDesc

* Visibility: **public**




### getLocalOneChannelStateDesc

    string PAMI\Message\Event\LocalBridgeEvent::getLocalOneChannelStateDesc()

get LocalOneChannelStateDesc

Returns key: 'LocalOneChannelStateDesc'

* Visibility: **public**




### getLocalOneCallerIDNum

    string PAMI\Message\Event\LocalBridgeEvent::getLocalOneCallerIDNum()

get LocalOneCallerIDNum

Returns key: 'LocalOneCallerIDNum'

* Visibility: **public**




### getLocalOneCallerIDName

    string PAMI\Message\Event\LocalBridgeEvent::getLocalOneCallerIDName()

get LocalOneCallerIDName

Returns key: 'LocalOneCallerIDName'

* Visibility: **public**




### getLocalOneConnectedLineNum

    string PAMI\Message\Event\LocalBridgeEvent::getLocalOneConnectedLineNum()

get LocalOneConnectedLineNum

Returns key: 'LocalOneConnectedLineNum'

* Visibility: **public**




### getLocalOneConnectedLineName

    string PAMI\Message\Event\LocalBridgeEvent::getLocalOneConnectedLineName()

get LocalOneConnectedLineName

Returns key: 'LocalOneConnectedLineName'

* Visibility: **public**




### getLocalOneLanguage

    string PAMI\Message\Event\LocalBridgeEvent::getLocalOneLanguage()

get LocalOneLanguage

Returns key: 'LocalOneLanguage'

* Visibility: **public**




### getLocalOneAccountCode

    string PAMI\Message\Event\LocalBridgeEvent::getLocalOneAccountCode()

get LocalOneAccountCode

Returns key: 'LocalOneAccountCode'

* Visibility: **public**




### getLocalOneContext

    string PAMI\Message\Event\LocalBridgeEvent::getLocalOneContext()

get LocalOneContext

Returns key: 'LocalOneContext'

* Visibility: **public**




### getLocalOneExten

    string PAMI\Message\Event\LocalBridgeEvent::getLocalOneExten()

get LocalOneExten

Returns key: 'LocalOneExten'

* Visibility: **public**




### getLocalOnePriority

    string PAMI\Message\Event\LocalBridgeEvent::getLocalOnePriority()

get LocalOnePriority

Returns key: 'LocalOnePriority'

* Visibility: **public**




### getLocalOneUniqueid

    string PAMI\Message\Event\LocalBridgeEvent::getLocalOneUniqueid()

get LocalOneUniqueid

Returns key: 'LocalOneUniqueid'

* Visibility: **public**




### getLocalOneLinkedid

    string PAMI\Message\Event\LocalBridgeEvent::getLocalOneLinkedid()

get LocalOneLinkedid

Returns:Uniqueid of the oldest channel associated with this channel.

* Visibility: **public**




### getLocalTwoChannel

    string PAMI\Message\Event\LocalBridgeEvent::getLocalTwoChannel()

get LocalTwoChannel

Returns key: 'LocalTwoChannel'

* Visibility: **public**




### getLocalTwoChannelState

    string PAMI\Message\Event\LocalBridgeEvent::getLocalTwoChannelState()

get LocalTwoChannelState

Returns:A numeric code for the channel's current state, related to LocalTwoChannelStateDesc

* Visibility: **public**




### getLocalTwoChannelStateDesc

    string PAMI\Message\Event\LocalBridgeEvent::getLocalTwoChannelStateDesc()

get LocalTwoChannelStateDesc

Returns key: 'LocalTwoChannelStateDesc'

* Visibility: **public**




### getLocalTwoCallerIDNum

    string PAMI\Message\Event\LocalBridgeEvent::getLocalTwoCallerIDNum()

get LocalTwoCallerIDNum

Returns key: 'LocalTwoCallerIDNum'

* Visibility: **public**




### getLocalTwoCallerIDName

    string PAMI\Message\Event\LocalBridgeEvent::getLocalTwoCallerIDName()

get LocalTwoCallerIDName

Returns key: 'LocalTwoCallerIDName'

* Visibility: **public**




### getLocalTwoConnectedLineNum

    string PAMI\Message\Event\LocalBridgeEvent::getLocalTwoConnectedLineNum()

get LocalTwoConnectedLineNum

Returns key: 'LocalTwoConnectedLineNum'

* Visibility: **public**




### getLocalTwoConnectedLineName

    string PAMI\Message\Event\LocalBridgeEvent::getLocalTwoConnectedLineName()

get LocalTwoConnectedLineName

Returns key: 'LocalTwoConnectedLineName'

* Visibility: **public**




### getLocalTwoLanguage

    string PAMI\Message\Event\LocalBridgeEvent::getLocalTwoLanguage()

get LocalTwoLanguage

Returns key: 'LocalTwoLanguage'

* Visibility: **public**




### getLocalTwoAccountCode

    string PAMI\Message\Event\LocalBridgeEvent::getLocalTwoAccountCode()

get LocalTwoAccountCode

Returns key: 'LocalTwoAccountCode'

* Visibility: **public**




### getLocalTwoContext

    string PAMI\Message\Event\LocalBridgeEvent::getLocalTwoContext()

get LocalTwoContext

Returns key: 'LocalTwoContext'

* Visibility: **public**




### getLocalTwoExten

    string PAMI\Message\Event\LocalBridgeEvent::getLocalTwoExten()

get LocalTwoExten

Returns key: 'LocalTwoExten'

* Visibility: **public**




### getLocalTwoPriority

    string PAMI\Message\Event\LocalBridgeEvent::getLocalTwoPriority()

get LocalTwoPriority

Returns key: 'LocalTwoPriority'

* Visibility: **public**




### getLocalTwoUniqueid

    string PAMI\Message\Event\LocalBridgeEvent::getLocalTwoUniqueid()

get LocalTwoUniqueid

Returns key: 'LocalTwoUniqueid'

* Visibility: **public**




### getLocalTwoLinkedid

    string PAMI\Message\Event\LocalBridgeEvent::getLocalTwoLinkedid()

get LocalTwoLinkedid

Returns:Uniqueid of the oldest channel associated with this channel.

* Visibility: **public**




### getContext

    string PAMI\Message\Event\LocalBridgeEvent::getContext()

get Context

Returns:The context in the dialplan that Channel2 starts in.

* Visibility: **public**




### getExten

    string PAMI\Message\Event\LocalBridgeEvent::getExten()

get Exten

Returns:The extension in the dialplan that Channel2 starts in.

* Visibility: **public**




### getLocalOptimization

    string PAMI\Message\Event\LocalBridgeEvent::getLocalOptimization()

get LocalOptimization

Returns key: 'LocalOptimization'

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



