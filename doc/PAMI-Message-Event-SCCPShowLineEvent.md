PAMI\Message\Event\SCCPShowLineEvent
===============

Event triggered by SCCPShowLine.

PHP Version 5


* Class name: SCCPShowLineEvent
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


### getName

    string PAMI\Message\Event\EventMessage::getName()

Returns key 'Event'.



* Visibility: **public**
* This method is defined by [PAMI\Message\Event\EventMessage](PAMI-Message-Event-EventMessage.md)




### getDescription

    string PAMI\Message\Event\SCCPShowLineEvent::getDescription()

Returns key: 'Description'.



* Visibility: **public**




### getLabel

    string PAMI\Message\Event\SCCPShowLineEvent::getLabel()

Returns key: 'Label'.



* Visibility: **public**




### getID

    integer PAMI\Message\Event\SCCPShowLineEvent::getID()

Returns key: 'ID'.



* Visibility: **public**




### getPin

    integer PAMI\Message\Event\SCCPShowLineEvent::getPin()

Returns key: 'Pin'.



* Visibility: **public**




### getVoiceMailNumber

    string PAMI\Message\Event\SCCPShowLineEvent::getVoiceMailNumber()

Returns key: 'VoiceMailNumber'.



* Visibility: **public**




### getTransferToVoicemail

    string PAMI\Message\Event\SCCPShowLineEvent::getTransferToVoicemail()

Returns key: 'TransferToVoicemail'.



* Visibility: **public**




### getMeetMeEnabled

    boolean PAMI\Message\Event\SCCPShowLineEvent::getMeetMeEnabled()

Returns key: 'MeetMeEnabled'.



* Visibility: **public**




### getMeetMeNumber

    string PAMI\Message\Event\SCCPShowLineEvent::getMeetMeNumber()

Returns key: 'MeetMeNumber'.



* Visibility: **public**




### getMeetMeOptions

    string PAMI\Message\Event\SCCPShowLineEvent::getMeetMeOptions()

Returns key: 'MeetMeOptions'.



* Visibility: **public**




### getContext

    string PAMI\Message\Event\SCCPShowLineEvent::getContext()

Returns key: 'Context'.



* Visibility: **public**




### getLanguage

    string PAMI\Message\Event\SCCPShowLineEvent::getLanguage()

Returns key: 'Language'.



* Visibility: **public**




### getAccountCode

    string PAMI\Message\Event\SCCPShowLineEvent::getAccountCode()

Returns key: 'AccountCode'.



* Visibility: **public**




### getMusicclass

    string PAMI\Message\Event\SCCPShowLineEvent::getMusicclass()

Returns key: 'Musicclass'.



* Visibility: **public**




### getAmaFlags

    integer PAMI\Message\Event\SCCPShowLineEvent::getAmaFlags()

Returns key: 'AmaFlags'.



* Visibility: **public**




### getCallGroup

    array<mixed,integer> PAMI\Message\Event\SCCPShowLineEvent::getCallGroup()

Returns key: 'CallGroup'.



* Visibility: **public**




### getPickupGroup

    array<mixed,integer> PAMI\Message\Event\SCCPShowLineEvent::getPickupGroup()

Returns key: 'PickupGroup'.



* Visibility: **public**




### getNamedCallGroup

    array<mixed,string> PAMI\Message\Event\SCCPShowLineEvent::getNamedCallGroup()

Returns key: 'NamedCallGroup'.



* Visibility: **public**




### getNamedPickupGroup

    array<mixed,string> PAMI\Message\Event\SCCPShowLineEvent::getNamedPickupGroup()

Returns key: 'NamedPickupGroup'.



* Visibility: **public**




### getParkingLot

    string PAMI\Message\Event\SCCPShowLineEvent::getParkingLot()

Returns key: 'ParkingLot'.



* Visibility: **public**




### getCallerIDName

    string PAMI\Message\Event\SCCPShowLineEvent::getCallerIDName()

Returns key: 'CallerIDName'.



* Visibility: **public**




### getCallerIDNumber

    string PAMI\Message\Event\SCCPShowLineEvent::getCallerIDNumber()

Returns key: 'CallerIDNumber'.



* Visibility: **public**




### getIncomingCallsLimit

    integer PAMI\Message\Event\SCCPShowLineEvent::getIncomingCallsLimit()

Returns key: 'IncomingCallsLimit'.



* Visibility: **public**




### getActiveChannelCount

    integer PAMI\Message\Event\SCCPShowLineEvent::getActiveChannelCount()

Returns key: 'ActiveChannelCount'.



* Visibility: **public**




### getSecDialtoneDigits

    integer PAMI\Message\Event\SCCPShowLineEvent::getSecDialtoneDigits()

Returns key: 'SecDialtoneDigits'.



* Visibility: **public**




### getSecDialtone

    integer PAMI\Message\Event\SCCPShowLineEvent::getSecDialtone()

Returns key: 'SecDialtone'.



* Visibility: **public**




### getEchoCancellation

    boolean PAMI\Message\Event\SCCPShowLineEvent::getEchoCancellation()

Returns key: 'EchoCancellation'.



* Visibility: **public**




### getSilenceSuppression

    boolean PAMI\Message\Event\SCCPShowLineEvent::getSilenceSuppression()

Returns key: 'SilenceSuppression'.



* Visibility: **public**




### getCanTransfer

    boolean PAMI\Message\Event\SCCPShowLineEvent::getCanTransfer()

Returns key: 'CanTransfer'.



* Visibility: **public**




### getDNDAction

    string PAMI\Message\Event\SCCPShowLineEvent::getDNDAction()

Returns key: 'DNDAction'.



* Visibility: **public**




### getIsRealtimeLine

    boolean PAMI\Message\Event\SCCPShowLineEvent::getIsRealtimeLine()

Returns key: 'IsRealtimeLine'.



* Visibility: **public**




### getPendingDelete

    boolean PAMI\Message\Event\SCCPShowLineEvent::getPendingDelete()

Returns key: 'PendingDelete'.



* Visibility: **public**




### getPendingUpdate

    boolean PAMI\Message\Event\SCCPShowLineEvent::getPendingUpdate()

Returns key: 'PendingUpdate'.



* Visibility: **public**




### getRegistrationExtension

    string PAMI\Message\Event\SCCPShowLineEvent::getRegistrationExtension()

Returns key: 'RegistrationExtension'.



* Visibility: **public**




### getRegistrationContext

    string PAMI\Message\Event\SCCPShowLineEvent::getRegistrationContext()

Returns key: 'RegistrationContext'.



* Visibility: **public**




### getAdhocNumberAssigned

    boolean PAMI\Message\Event\SCCPShowLineEvent::getAdhocNumberAssigned()

Returns key: 'AdhocNumberAssigned'.



* Visibility: **public**




### getMessageWaitingNew

    integer PAMI\Message\Event\SCCPShowLineEvent::getMessageWaitingNew()

Returns key: 'MessageWaitingNew'.



* Visibility: **public**




### getMessageWaitingOld

    integer PAMI\Message\Event\SCCPShowLineEvent::getMessageWaitingOld()

Returns key: 'MessageWaitingOld'.



* Visibility: **public**




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



