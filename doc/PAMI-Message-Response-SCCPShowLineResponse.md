PAMI\Message\Response\SCCPShowLineResponse
===============

A sccp show line response message from ami.

PHP Version 5


* Class name: SCCPShowLineResponse
* Namespace: PAMI\Message\Response
* Parent class: [PAMI\Message\Response\SCCPGenericResponse](PAMI-Message-Response-SCCPGenericResponse.md)



Constants
----------


### EOL

    const EOL = "\r\n"





### EOM

    const EOM = "\r\n\r\n"





Properties
----------


### $tables

    protected array<mixed,\PAMI\Message\Event\EventMessage> $tables

Child Tables



* Visibility: **protected**


### $_temptable

    private Array $_temptable

Catch All incoming Events into current Table.



* Visibility: **private**


### $events

    protected array<mixed,\PAMI\Message\Event\EventMessage> $events

Child events.



* Visibility: **protected**


### $completed

    protected boolean $completed

Is this response completed? (with all its events).



* Visibility: **protected**


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


### __construct

    void PAMI\Message\Message::__construct()

Constructor.



* Visibility: **public**
* This method is defined by [PAMI\Message\Message](PAMI-Message-Message.md)




### _getEventKey

    mixed PAMI\Message\Response\SCCPShowLineResponse::_getEventKey($keyname)





* Visibility: **private**


#### Arguments
* $keyname **mixed**



### _getEventBoolKey

    mixed PAMI\Message\Response\SCCPShowLineResponse::_getEventBoolKey($keyname)





* Visibility: **private**


#### Arguments
* $keyname **mixed**



### getName

    string PAMI\Message\Response\SCCPShowLineResponse::getName()

Returns key: 'Name'.



* Visibility: **public**




### getDescription

    string PAMI\Message\Response\SCCPShowLineResponse::getDescription()

Returns key: 'Description'.



* Visibility: **public**




### getLabel

    string PAMI\Message\Response\SCCPShowLineResponse::getLabel()

Returns key: 'Label'.



* Visibility: **public**




### getID

    integer PAMI\Message\Response\SCCPShowLineResponse::getID()

Returns key: 'ID'.



* Visibility: **public**




### getPin

    integer PAMI\Message\Response\SCCPShowLineResponse::getPin()

Returns key: 'Pin'.



* Visibility: **public**




### getVoiceMailNumber

    string PAMI\Message\Response\SCCPShowLineResponse::getVoiceMailNumber()

Returns key: 'VoiceMailNumber'.



* Visibility: **public**




### getTransferToVoicemail

    string PAMI\Message\Response\SCCPShowLineResponse::getTransferToVoicemail()

Returns key: 'TransferToVoicemail'.



* Visibility: **public**




### getMeetMeEnabled

    boolean PAMI\Message\Response\SCCPShowLineResponse::getMeetMeEnabled()

Returns key: 'MeetMeEnabled'.



* Visibility: **public**




### getMeetMeNumber

    string PAMI\Message\Response\SCCPShowLineResponse::getMeetMeNumber()

Returns key: 'MeetMeNumber'.



* Visibility: **public**




### getMeetMeOptions

    string PAMI\Message\Response\SCCPShowLineResponse::getMeetMeOptions()

Returns key: 'MeetMeOptions'.



* Visibility: **public**




### getContext

    string PAMI\Message\Response\SCCPShowLineResponse::getContext()

Returns key: 'Context'.



* Visibility: **public**




### getLanguage

    string PAMI\Message\Response\SCCPShowLineResponse::getLanguage()

Returns key: 'Language'.



* Visibility: **public**




### getAccountCode

    string PAMI\Message\Response\SCCPShowLineResponse::getAccountCode()

Returns key: 'AccountCode'.



* Visibility: **public**




### getMusicclass

    string PAMI\Message\Response\SCCPShowLineResponse::getMusicclass()

Returns key: 'Musicclass'.



* Visibility: **public**




### getAmaFlags

    integer PAMI\Message\Response\SCCPShowLineResponse::getAmaFlags()

Returns key: 'AmaFlags'.



* Visibility: **public**




### getCallGroup

    array<mixed,integer> PAMI\Message\Response\SCCPShowLineResponse::getCallGroup()

Returns key: 'CallGroup'.



* Visibility: **public**




### getPickupGroup

    array<mixed,integer> PAMI\Message\Response\SCCPShowLineResponse::getPickupGroup()

Returns key: 'PickupGroup'.



* Visibility: **public**




### getNamedCallGroup

    array<mixed,string> PAMI\Message\Response\SCCPShowLineResponse::getNamedCallGroup()

Returns key: 'NamedCallGroup'.



* Visibility: **public**




### getNamedPickupGroup

    array<mixed,string> PAMI\Message\Response\SCCPShowLineResponse::getNamedPickupGroup()

Returns key: 'NamedPickupGroup'.



* Visibility: **public**




### getParkingLot

    string PAMI\Message\Response\SCCPShowLineResponse::getParkingLot()

Returns key: 'ParkingLot'.



* Visibility: **public**




### getCallerIDName

    string PAMI\Message\Response\SCCPShowLineResponse::getCallerIDName()

Returns key: 'CallerIDName'.



* Visibility: **public**




### getCallerIDNumber

    string PAMI\Message\Response\SCCPShowLineResponse::getCallerIDNumber()

Returns key: 'CallerIDNumber'.



* Visibility: **public**




### getIncomingCallsLimit

    integer PAMI\Message\Response\SCCPShowLineResponse::getIncomingCallsLimit()

Returns key: 'IncomingCallsLimit'.



* Visibility: **public**




### getActiveChannelCount

    integer PAMI\Message\Response\SCCPShowLineResponse::getActiveChannelCount()

Returns key: 'ActiveChannelCount'.



* Visibility: **public**




### getSecDialtoneDigits

    integer PAMI\Message\Response\SCCPShowLineResponse::getSecDialtoneDigits()

Returns key: 'SecDialtoneDigits'.



* Visibility: **public**




### getSecDialtone

    integer PAMI\Message\Response\SCCPShowLineResponse::getSecDialtone()

Returns key: 'SecDialtone'.



* Visibility: **public**




### getEchoCancellation

    boolean PAMI\Message\Response\SCCPShowLineResponse::getEchoCancellation()

Returns key: 'EchoCancellation'.



* Visibility: **public**




### getSilenceSuppression

    boolean PAMI\Message\Response\SCCPShowLineResponse::getSilenceSuppression()

Returns key: 'SilenceSuppression'.



* Visibility: **public**




### getCanTransfer

    boolean PAMI\Message\Response\SCCPShowLineResponse::getCanTransfer()

Returns key: 'CanTransfer'.



* Visibility: **public**




### getDNDAction

    string PAMI\Message\Response\SCCPShowLineResponse::getDNDAction()

Returns key: 'DNDAction'.



* Visibility: **public**




### getIsRealtimeLine

    boolean PAMI\Message\Response\SCCPShowLineResponse::getIsRealtimeLine()

Returns key: 'IsRealtimeLine'.



* Visibility: **public**




### getPendingDelete

    boolean PAMI\Message\Response\SCCPShowLineResponse::getPendingDelete()

Returns key: 'PendingDelete'.



* Visibility: **public**




### getPendingUpdate

    boolean PAMI\Message\Response\SCCPShowLineResponse::getPendingUpdate()

Returns key: 'PendingUpdate'.



* Visibility: **public**




### getRegistrationExtension

    string PAMI\Message\Response\SCCPShowLineResponse::getRegistrationExtension()

Returns key: 'RegistrationExtension'.



* Visibility: **public**




### getRegistrationContext

    string PAMI\Message\Response\SCCPShowLineResponse::getRegistrationContext()

Returns key: 'RegistrationContext'.



* Visibility: **public**




### getAdhocNumberAssigned

    boolean PAMI\Message\Response\SCCPShowLineResponse::getAdhocNumberAssigned()

Returns key: 'AdhocNumberAssigned'.



* Visibility: **public**




### getMessageWaitingNew

    integer PAMI\Message\Response\SCCPShowLineResponse::getMessageWaitingNew()

Returns key: 'MessageWaitingNew'.



* Visibility: **public**




### getMessageWaitingOld

    integer PAMI\Message\Response\SCCPShowLineResponse::getMessageWaitingOld()

Returns key: 'MessageWaitingOld'.



* Visibility: **public**




### getAttachedDevices

    array<mixed,\PAMI\Message\Response\events> PAMI\Message\Response\SCCPShowLineResponse::getAttachedDevices()

Returns events[] related to AttachedDevices from the tables['AttachedDevices']



* Visibility: **public**




### getMailboxes

    array<mixed,\PAMI\Message\Response\events> PAMI\Message\Response\SCCPShowLineResponse::getMailboxes()

Returns events[] related to Mailboxes from the tables['Mailboxes']



* Visibility: **public**




### getVariables

    array<mixed,string> PAMI\Message\Message::getVariables()

Returns all variabels for this message.



* Visibility: **public**
* This method is defined by [PAMI\Message\Message](PAMI-Message-Message.md)




### addEvent

    void PAMI\Message\Response\ResponseMessage::addEvent(\PAMI\Message\Event\EventMessage $event)

Adds an event to this response.



* Visibility: **public**
* This method is defined by [PAMI\Message\Response\ResponseMessage](PAMI-Message-Response-ResponseMessage.md)


#### Arguments
* $event **[PAMI\Message\Event\EventMessage](PAMI-Message-Event-EventMessage.md)** - &lt;p&gt;Child event to add.&lt;/p&gt;



### hasTable

    boolean PAMI\Message\Response\AdvancedResponseMessage::hasTable()

Returns true if this Response Message contains an events tables (TableStart/TableEnd)



* Visibility: **public**
* This method is defined by [PAMI\Message\Response\AdvancedResponseMessage](PAMI-Message-Response-AdvancedResponseMessage.md)




### getTableNames

    array<mixed,\PAMI\Message\Event\EventMessage> PAMI\Message\Response\AdvancedResponseMessage::getTableNames()

Returns all eventtabless for this response.



* Visibility: **public**
* This method is defined by [PAMI\Message\Response\AdvancedResponseMessage](PAMI-Message-Response-AdvancedResponseMessage.md)




### getTable

    array<mixed,\PAMI\Message\Event\EventMessage> PAMI\Message\Response\AdvancedResponseMessage::getTable($tablename)

Returns all associated events for this response->tablename.



* Visibility: **public**
* This method is defined by [PAMI\Message\Response\AdvancedResponseMessage](PAMI-Message-Response-AdvancedResponseMessage.md)


#### Arguments
* $tablename **mixed**



### getJSON

    array PAMI\Message\Response\AdvancedResponseMessage::getJSON()

Returns decoded version of the 'JSON' key if present.



* Visibility: **public**
* This method is defined by [PAMI\Message\Response\AdvancedResponseMessage](PAMI-Message-Response-AdvancedResponseMessage.md)




### __sleep

    array<mixed,string> PAMI\Message\Message::__sleep()

Serialize function.



* Visibility: **public**
* This method is defined by [PAMI\Message\Message](PAMI-Message-Message.md)




### isComplete

    boolean PAMI\Message\Response\ResponseMessage::isComplete()

True if this response is complete. A response is considered complete
if it's not a list OR it's a list with its last child event containing
an EventList = Complete.



* Visibility: **public**
* This method is defined by [PAMI\Message\Response\ResponseMessage](PAMI-Message-Response-ResponseMessage.md)




### getEvents

    array<mixed,\PAMI\Message\Event\EventMessage> PAMI\Message\Response\ResponseMessage::getEvents()

Returns all associated events for this response.



* Visibility: **public**
* This method is defined by [PAMI\Message\Response\ResponseMessage](PAMI-Message-Response-ResponseMessage.md)




### isSuccess

    boolean PAMI\Message\Response\ResponseMessage::isSuccess()

Checks if the Response field has the word Error in it.



* Visibility: **public**
* This method is defined by [PAMI\Message\Response\ResponseMessage](PAMI-Message-Response-ResponseMessage.md)




### isList

    boolean PAMI\Message\Response\ResponseMessage::isList()

Returns true if this response contains the key EventList with the
word 'start' in it. Another way is to have a Message key, like:
Message: Result will follow



* Visibility: **public**
* This method is defined by [PAMI\Message\Response\ResponseMessage](PAMI-Message-Response-ResponseMessage.md)




### getMessage

    string PAMI\Message\Response\ResponseMessage::getMessage()

Returns key: 'Privilege'.



* Visibility: **public**
* This method is defined by [PAMI\Message\Response\ResponseMessage](PAMI-Message-Response-ResponseMessage.md)




### setActionId

    void PAMI\Message\Response\ResponseMessage::setActionId(string $actionId)

Sets an action id. This should not be necessary, but asterisk sometimes
decides to not send the Response: or Event: headers.



* Visibility: **public**
* This method is defined by [PAMI\Message\Response\ResponseMessage](PAMI-Message-Response-ResponseMessage.md)


#### Arguments
* $actionId **string** - &lt;p&gt;New ActionId.&lt;/p&gt;



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



