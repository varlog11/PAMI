PAMI\Message\Event\ChanSpyStartEvent
===============

ChanSpyStart Event

Note: Auto Generated using xsltproc

PHP Version 5


* Class name: ChanSpyStartEvent
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


### getSpyerChannel

    string PAMI\Message\Event\ChanSpyStartEvent::getSpyerChannel()

get SpyerChannel

Returns key: 'SpyerChannel'

* Visibility: **public**




### getSpyerChannelState

    string PAMI\Message\Event\ChanSpyStartEvent::getSpyerChannelState()

get SpyerChannelState

Returns:A numeric code for the channel's current state, related to SpyerChannelStateDesc

* Visibility: **public**




### getSpyerChannelStateDesc

    string PAMI\Message\Event\ChanSpyStartEvent::getSpyerChannelStateDesc()

get SpyerChannelStateDesc

Returns key: 'SpyerChannelStateDesc'

* Visibility: **public**




### getSpyerCallerIDNum

    string PAMI\Message\Event\ChanSpyStartEvent::getSpyerCallerIDNum()

get SpyerCallerIDNum

Returns key: 'SpyerCallerIDNum'

* Visibility: **public**




### getSpyerCallerIDName

    string PAMI\Message\Event\ChanSpyStartEvent::getSpyerCallerIDName()

get SpyerCallerIDName

Returns key: 'SpyerCallerIDName'

* Visibility: **public**




### getSpyerConnectedLineNum

    string PAMI\Message\Event\ChanSpyStartEvent::getSpyerConnectedLineNum()

get SpyerConnectedLineNum

Returns key: 'SpyerConnectedLineNum'

* Visibility: **public**




### getSpyerConnectedLineName

    string PAMI\Message\Event\ChanSpyStartEvent::getSpyerConnectedLineName()

get SpyerConnectedLineName

Returns key: 'SpyerConnectedLineName'

* Visibility: **public**




### getSpyerLanguage

    string PAMI\Message\Event\ChanSpyStartEvent::getSpyerLanguage()

get SpyerLanguage

Returns key: 'SpyerLanguage'

* Visibility: **public**




### getSpyerAccountCode

    string PAMI\Message\Event\ChanSpyStartEvent::getSpyerAccountCode()

get SpyerAccountCode

Returns key: 'SpyerAccountCode'

* Visibility: **public**




### getSpyerContext

    string PAMI\Message\Event\ChanSpyStartEvent::getSpyerContext()

get SpyerContext

Returns key: 'SpyerContext'

* Visibility: **public**




### getSpyerExten

    string PAMI\Message\Event\ChanSpyStartEvent::getSpyerExten()

get SpyerExten

Returns key: 'SpyerExten'

* Visibility: **public**




### getSpyerPriority

    string PAMI\Message\Event\ChanSpyStartEvent::getSpyerPriority()

get SpyerPriority

Returns key: 'SpyerPriority'

* Visibility: **public**




### getSpyerUniqueid

    string PAMI\Message\Event\ChanSpyStartEvent::getSpyerUniqueid()

get SpyerUniqueid

Returns key: 'SpyerUniqueid'

* Visibility: **public**




### getSpyerLinkedid

    string PAMI\Message\Event\ChanSpyStartEvent::getSpyerLinkedid()

get SpyerLinkedid

Returns:Uniqueid of the oldest channel associated with this channel.

* Visibility: **public**




### getSpyeeChannel

    string PAMI\Message\Event\ChanSpyStartEvent::getSpyeeChannel()

get SpyeeChannel

Returns key: 'SpyeeChannel'

* Visibility: **public**




### getSpyeeChannelState

    string PAMI\Message\Event\ChanSpyStartEvent::getSpyeeChannelState()

get SpyeeChannelState

Returns:A numeric code for the channel's current state, related to SpyeeChannelStateDesc

* Visibility: **public**




### getSpyeeChannelStateDesc

    string PAMI\Message\Event\ChanSpyStartEvent::getSpyeeChannelStateDesc()

get SpyeeChannelStateDesc

Returns key: 'SpyeeChannelStateDesc'

* Visibility: **public**




### getSpyeeCallerIDNum

    string PAMI\Message\Event\ChanSpyStartEvent::getSpyeeCallerIDNum()

get SpyeeCallerIDNum

Returns key: 'SpyeeCallerIDNum'

* Visibility: **public**




### getSpyeeCallerIDName

    string PAMI\Message\Event\ChanSpyStartEvent::getSpyeeCallerIDName()

get SpyeeCallerIDName

Returns key: 'SpyeeCallerIDName'

* Visibility: **public**




### getSpyeeConnectedLineNum

    string PAMI\Message\Event\ChanSpyStartEvent::getSpyeeConnectedLineNum()

get SpyeeConnectedLineNum

Returns key: 'SpyeeConnectedLineNum'

* Visibility: **public**




### getSpyeeConnectedLineName

    string PAMI\Message\Event\ChanSpyStartEvent::getSpyeeConnectedLineName()

get SpyeeConnectedLineName

Returns key: 'SpyeeConnectedLineName'

* Visibility: **public**




### getSpyeeLanguage

    string PAMI\Message\Event\ChanSpyStartEvent::getSpyeeLanguage()

get SpyeeLanguage

Returns key: 'SpyeeLanguage'

* Visibility: **public**




### getSpyeeAccountCode

    string PAMI\Message\Event\ChanSpyStartEvent::getSpyeeAccountCode()

get SpyeeAccountCode

Returns key: 'SpyeeAccountCode'

* Visibility: **public**




### getSpyeeContext

    string PAMI\Message\Event\ChanSpyStartEvent::getSpyeeContext()

get SpyeeContext

Returns key: 'SpyeeContext'

* Visibility: **public**




### getSpyeeExten

    string PAMI\Message\Event\ChanSpyStartEvent::getSpyeeExten()

get SpyeeExten

Returns key: 'SpyeeExten'

* Visibility: **public**




### getSpyeePriority

    string PAMI\Message\Event\ChanSpyStartEvent::getSpyeePriority()

get SpyeePriority

Returns key: 'SpyeePriority'

* Visibility: **public**




### getSpyeeUniqueid

    string PAMI\Message\Event\ChanSpyStartEvent::getSpyeeUniqueid()

get SpyeeUniqueid

Returns key: 'SpyeeUniqueid'

* Visibility: **public**




### getSpyeeLinkedid

    string PAMI\Message\Event\ChanSpyStartEvent::getSpyeeLinkedid()

get SpyeeLinkedid

Returns:Uniqueid of the oldest channel associated with this channel.

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



