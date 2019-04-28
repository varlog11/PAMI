PAMI\Message\Event\AgentCompleteEvent
===============

AgentComplete Event

Note: Auto Generated using xsltproc

PHP Version 5


* Class name: AgentCompleteEvent
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


### getChannel

    string PAMI\Message\Event\AgentCompleteEvent::getChannel()

get Channel

Returns key: 'Channel'

* Visibility: **public**




### getChannelState

    string PAMI\Message\Event\AgentCompleteEvent::getChannelState()

get ChannelState

Returns:A numeric code for the channel's current state, related to ChannelStateDesc

* Visibility: **public**




### getChannelStateDesc

    string PAMI\Message\Event\AgentCompleteEvent::getChannelStateDesc()

get ChannelStateDesc

Returns key: 'ChannelStateDesc'

* Visibility: **public**




### getCallerIDNum

    string PAMI\Message\Event\AgentCompleteEvent::getCallerIDNum()

get CallerIDNum

Returns key: 'CallerIDNum'

* Visibility: **public**




### getCallerIDName

    string PAMI\Message\Event\AgentCompleteEvent::getCallerIDName()

get CallerIDName

Returns key: 'CallerIDName'

* Visibility: **public**




### getConnectedLineNum

    string PAMI\Message\Event\AgentCompleteEvent::getConnectedLineNum()

get ConnectedLineNum

Returns key: 'ConnectedLineNum'

* Visibility: **public**




### getConnectedLineName

    string PAMI\Message\Event\AgentCompleteEvent::getConnectedLineName()

get ConnectedLineName

Returns key: 'ConnectedLineName'

* Visibility: **public**




### getLanguage

    string PAMI\Message\Event\AgentCompleteEvent::getLanguage()

get Language

Returns key: 'Language'

* Visibility: **public**




### getAccountCode

    string PAMI\Message\Event\AgentCompleteEvent::getAccountCode()

get AccountCode

Returns key: 'AccountCode'

* Visibility: **public**




### getContext

    string PAMI\Message\Event\AgentCompleteEvent::getContext()

get Context

Returns key: 'Context'

* Visibility: **public**




### getExten

    string PAMI\Message\Event\AgentCompleteEvent::getExten()

get Exten

Returns key: 'Exten'

* Visibility: **public**




### getPriority

    string PAMI\Message\Event\AgentCompleteEvent::getPriority()

get Priority

Returns key: 'Priority'

* Visibility: **public**




### getUniqueid

    string PAMI\Message\Event\AgentCompleteEvent::getUniqueid()

get Uniqueid

Returns key: 'Uniqueid'

* Visibility: **public**




### getLinkedid

    string PAMI\Message\Event\AgentCompleteEvent::getLinkedid()

get Linkedid

Returns:Uniqueid of the oldest channel associated with this channel.

* Visibility: **public**




### getDestChannel

    string PAMI\Message\Event\AgentCompleteEvent::getDestChannel()

get DestChannel

Returns key: 'DestChannel'

* Visibility: **public**




### getDestChannelState

    string PAMI\Message\Event\AgentCompleteEvent::getDestChannelState()

get DestChannelState

Returns:A numeric code for the channel's current state, related to DestChannelStateDesc

* Visibility: **public**




### getDestChannelStateDesc

    string PAMI\Message\Event\AgentCompleteEvent::getDestChannelStateDesc()

get DestChannelStateDesc

Returns key: 'DestChannelStateDesc'

* Visibility: **public**




### getDestCallerIDNum

    string PAMI\Message\Event\AgentCompleteEvent::getDestCallerIDNum()

get DestCallerIDNum

Returns key: 'DestCallerIDNum'

* Visibility: **public**




### getDestCallerIDName

    string PAMI\Message\Event\AgentCompleteEvent::getDestCallerIDName()

get DestCallerIDName

Returns key: 'DestCallerIDName'

* Visibility: **public**




### getDestConnectedLineNum

    string PAMI\Message\Event\AgentCompleteEvent::getDestConnectedLineNum()

get DestConnectedLineNum

Returns key: 'DestConnectedLineNum'

* Visibility: **public**




### getDestConnectedLineName

    string PAMI\Message\Event\AgentCompleteEvent::getDestConnectedLineName()

get DestConnectedLineName

Returns key: 'DestConnectedLineName'

* Visibility: **public**




### getDestLanguage

    string PAMI\Message\Event\AgentCompleteEvent::getDestLanguage()

get DestLanguage

Returns key: 'DestLanguage'

* Visibility: **public**




### getDestAccountCode

    string PAMI\Message\Event\AgentCompleteEvent::getDestAccountCode()

get DestAccountCode

Returns key: 'DestAccountCode'

* Visibility: **public**




### getDestContext

    string PAMI\Message\Event\AgentCompleteEvent::getDestContext()

get DestContext

Returns key: 'DestContext'

* Visibility: **public**




### getDestExten

    string PAMI\Message\Event\AgentCompleteEvent::getDestExten()

get DestExten

Returns key: 'DestExten'

* Visibility: **public**




### getDestPriority

    string PAMI\Message\Event\AgentCompleteEvent::getDestPriority()

get DestPriority

Returns key: 'DestPriority'

* Visibility: **public**




### getDestUniqueid

    string PAMI\Message\Event\AgentCompleteEvent::getDestUniqueid()

get DestUniqueid

Returns key: 'DestUniqueid'

* Visibility: **public**




### getDestLinkedid

    string PAMI\Message\Event\AgentCompleteEvent::getDestLinkedid()

get DestLinkedid

Returns:Uniqueid of the oldest channel associated with this channel.

* Visibility: **public**




### getQueue

    string PAMI\Message\Event\AgentCompleteEvent::getQueue()

get Queue

Returns:The name of the queue.

* Visibility: **public**




### getMemberName

    string PAMI\Message\Event\AgentCompleteEvent::getMemberName()

get MemberName

Returns:The name of the queue member.

* Visibility: **public**




### getInterface

    string PAMI\Message\Event\AgentCompleteEvent::getInterface()

get Interface

Returns:The queue member's channel technology or location.

* Visibility: **public**




### getHoldTime

    string PAMI\Message\Event\AgentCompleteEvent::getHoldTime()

get HoldTime

Returns:The time the channel was in the queue, expressed in seconds since 00:00, Jan 1, 1970 UTC.

* Visibility: **public**




### getTalkTime

    string PAMI\Message\Event\AgentCompleteEvent::getTalkTime()

get TalkTime

Returns:The time the queue member talked with the caller in the queue, expressed in seconds since 00:00, Jan 1, 1970 UTC.

* Visibility: **public**




### getReason

    string PAMI\Message\Event\AgentCompleteEvent::getReason()

get Reason

Returns key: 'Reason'

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



