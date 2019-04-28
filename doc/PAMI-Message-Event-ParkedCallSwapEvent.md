PAMI\Message\Event\ParkedCallSwapEvent
===============

ParkedCallSwap Event

Note: Auto Generated using xsltproc

PHP Version 5


* Class name: ParkedCallSwapEvent
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


### getParkeeChannel

    string PAMI\Message\Event\ParkedCallSwapEvent::getParkeeChannel()

get ParkeeChannel

Returns key: 'ParkeeChannel'

* Visibility: **public**




### getParkeeChannelState

    string PAMI\Message\Event\ParkedCallSwapEvent::getParkeeChannelState()

get ParkeeChannelState

Returns:A numeric code for the channel's current state, related to ParkeeChannelStateDesc

* Visibility: **public**




### getParkeeChannelStateDesc

    string PAMI\Message\Event\ParkedCallSwapEvent::getParkeeChannelStateDesc()

get ParkeeChannelStateDesc

Returns key: 'ParkeeChannelStateDesc'

* Visibility: **public**




### getParkeeCallerIDNum

    string PAMI\Message\Event\ParkedCallSwapEvent::getParkeeCallerIDNum()

get ParkeeCallerIDNum

Returns key: 'ParkeeCallerIDNum'

* Visibility: **public**




### getParkeeCallerIDName

    string PAMI\Message\Event\ParkedCallSwapEvent::getParkeeCallerIDName()

get ParkeeCallerIDName

Returns key: 'ParkeeCallerIDName'

* Visibility: **public**




### getParkeeConnectedLineNum

    string PAMI\Message\Event\ParkedCallSwapEvent::getParkeeConnectedLineNum()

get ParkeeConnectedLineNum

Returns key: 'ParkeeConnectedLineNum'

* Visibility: **public**




### getParkeeConnectedLineName

    string PAMI\Message\Event\ParkedCallSwapEvent::getParkeeConnectedLineName()

get ParkeeConnectedLineName

Returns key: 'ParkeeConnectedLineName'

* Visibility: **public**




### getParkeeLanguage

    string PAMI\Message\Event\ParkedCallSwapEvent::getParkeeLanguage()

get ParkeeLanguage

Returns key: 'ParkeeLanguage'

* Visibility: **public**




### getParkeeAccountCode

    string PAMI\Message\Event\ParkedCallSwapEvent::getParkeeAccountCode()

get ParkeeAccountCode

Returns key: 'ParkeeAccountCode'

* Visibility: **public**




### getParkeeContext

    string PAMI\Message\Event\ParkedCallSwapEvent::getParkeeContext()

get ParkeeContext

Returns key: 'ParkeeContext'

* Visibility: **public**




### getParkeeExten

    string PAMI\Message\Event\ParkedCallSwapEvent::getParkeeExten()

get ParkeeExten

Returns key: 'ParkeeExten'

* Visibility: **public**




### getParkeePriority

    string PAMI\Message\Event\ParkedCallSwapEvent::getParkeePriority()

get ParkeePriority

Returns key: 'ParkeePriority'

* Visibility: **public**




### getParkeeUniqueid

    string PAMI\Message\Event\ParkedCallSwapEvent::getParkeeUniqueid()

get ParkeeUniqueid

Returns key: 'ParkeeUniqueid'

* Visibility: **public**




### getParkeeLinkedid

    string PAMI\Message\Event\ParkedCallSwapEvent::getParkeeLinkedid()

get ParkeeLinkedid

Returns:Uniqueid of the oldest channel associated with this channel.

* Visibility: **public**




### getParkerChannel

    string PAMI\Message\Event\ParkedCallSwapEvent::getParkerChannel()

get ParkerChannel

Returns key: 'ParkerChannel'

* Visibility: **public**




### getParkerChannelState

    string PAMI\Message\Event\ParkedCallSwapEvent::getParkerChannelState()

get ParkerChannelState

Returns:A numeric code for the channel's current state, related to ParkerChannelStateDesc

* Visibility: **public**




### getParkerChannelStateDesc

    string PAMI\Message\Event\ParkedCallSwapEvent::getParkerChannelStateDesc()

get ParkerChannelStateDesc

Returns key: 'ParkerChannelStateDesc'

* Visibility: **public**




### getParkerCallerIDNum

    string PAMI\Message\Event\ParkedCallSwapEvent::getParkerCallerIDNum()

get ParkerCallerIDNum

Returns key: 'ParkerCallerIDNum'

* Visibility: **public**




### getParkerCallerIDName

    string PAMI\Message\Event\ParkedCallSwapEvent::getParkerCallerIDName()

get ParkerCallerIDName

Returns key: 'ParkerCallerIDName'

* Visibility: **public**




### getParkerConnectedLineNum

    string PAMI\Message\Event\ParkedCallSwapEvent::getParkerConnectedLineNum()

get ParkerConnectedLineNum

Returns key: 'ParkerConnectedLineNum'

* Visibility: **public**




### getParkerConnectedLineName

    string PAMI\Message\Event\ParkedCallSwapEvent::getParkerConnectedLineName()

get ParkerConnectedLineName

Returns key: 'ParkerConnectedLineName'

* Visibility: **public**




### getParkerLanguage

    string PAMI\Message\Event\ParkedCallSwapEvent::getParkerLanguage()

get ParkerLanguage

Returns key: 'ParkerLanguage'

* Visibility: **public**




### getParkerAccountCode

    string PAMI\Message\Event\ParkedCallSwapEvent::getParkerAccountCode()

get ParkerAccountCode

Returns key: 'ParkerAccountCode'

* Visibility: **public**




### getParkerContext

    string PAMI\Message\Event\ParkedCallSwapEvent::getParkerContext()

get ParkerContext

Returns key: 'ParkerContext'

* Visibility: **public**




### getParkerExten

    string PAMI\Message\Event\ParkedCallSwapEvent::getParkerExten()

get ParkerExten

Returns key: 'ParkerExten'

* Visibility: **public**




### getParkerPriority

    string PAMI\Message\Event\ParkedCallSwapEvent::getParkerPriority()

get ParkerPriority

Returns key: 'ParkerPriority'

* Visibility: **public**




### getParkerUniqueid

    string PAMI\Message\Event\ParkedCallSwapEvent::getParkerUniqueid()

get ParkerUniqueid

Returns key: 'ParkerUniqueid'

* Visibility: **public**




### getParkerLinkedid

    string PAMI\Message\Event\ParkedCallSwapEvent::getParkerLinkedid()

get ParkerLinkedid

Returns:Uniqueid of the oldest channel associated with this channel.

* Visibility: **public**




### getParkerDialString

    string PAMI\Message\Event\ParkedCallSwapEvent::getParkerDialString()

get ParkerDialString

Returns:Dial String that can be used to call back the parker on ParkingTimeout.

* Visibility: **public**




### getParkinglot

    string PAMI\Message\Event\ParkedCallSwapEvent::getParkinglot()

get Parkinglot

Returns:Name of the parking lot that the parkee is parked in

* Visibility: **public**




### getParkingSpace

    string PAMI\Message\Event\ParkedCallSwapEvent::getParkingSpace()

get ParkingSpace

Returns:Parking Space that the parkee is parked in

* Visibility: **public**




### getParkingTimeout

    string PAMI\Message\Event\ParkedCallSwapEvent::getParkingTimeout()

get ParkingTimeout

Returns:Time remaining until the parkee is forcefully removed from parking in seconds

* Visibility: **public**




### getParkingDuration

    string PAMI\Message\Event\ParkedCallSwapEvent::getParkingDuration()

get ParkingDuration

Returns:Time the parkee has been in the parking bridge (in seconds)

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



