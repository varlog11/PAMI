PAMI\Message\Response\SCCPShowGlobalsResponse
===============

A sccp show globals response message from ami.

PHP Version 5


* Class name: SCCPShowGlobalsResponse
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




### getConfigFile

    string PAMI\Message\Response\SCCPShowGlobalsResponse::getConfigFile()

Returns key: 'ConfigFile'.



* Visibility: **public**




### getPlatformByteOrder

    string PAMI\Message\Response\SCCPShowGlobalsResponse::getPlatformByteOrder()

Returns key: 'PlatformByteOrder'.



* Visibility: **public**




### getServerName

    string PAMI\Message\Response\SCCPShowGlobalsResponse::getServerName()

Returns key: 'ServerName'.



* Visibility: **public**




### getBindAddress

    string PAMI\Message\Response\SCCPShowGlobalsResponse::getBindAddress()

Returns key: 'BindAddress'.



* Visibility: **public**




### getExternIP

    string PAMI\Message\Response\SCCPShowGlobalsResponse::getExternIP()

Returns key: 'ExternIP'.



* Visibility: **public**




### getLocalnet

    string PAMI\Message\Response\SCCPShowGlobalsResponse::getLocalnet()

Returns key: 'Localnet'.



* Visibility: **public**




### getDenyPermit

    string PAMI\Message\Response\SCCPShowGlobalsResponse::getDenyPermit()

Returns key: 'DenyPermit'.



* Visibility: **public**




### getDirectRTP

    string PAMI\Message\Response\SCCPShowGlobalsResponse::getDirectRTP()

Returns key: 'DirectRTP'.



* Visibility: **public**




### getNat

    string PAMI\Message\Response\SCCPShowGlobalsResponse::getNat()

Returns key: 'Nat'.



* Visibility: **public**




### getKeepalive

    integer PAMI\Message\Response\SCCPShowGlobalsResponse::getKeepalive()

Returns key: 'Keepalive'.



* Visibility: **public**




### getDebug

    string PAMI\Message\Response\SCCPShowGlobalsResponse::getDebug()

Returns key: 'Debug'.



* Visibility: **public**




### getDateFormat

    string PAMI\Message\Response\SCCPShowGlobalsResponse::getDateFormat()

Returns key: 'DateFormat'.



* Visibility: **public**




### getFirstDigitTimeout

    integer PAMI\Message\Response\SCCPShowGlobalsResponse::getFirstDigitTimeout()

Returns key: 'FirstDigitTimeout'.



* Visibility: **public**




### getDigitTimeout

    integer PAMI\Message\Response\SCCPShowGlobalsResponse::getDigitTimeout()

Returns key: 'DigitTimeout'.



* Visibility: **public**




### getDigitTimeoutChar

    string PAMI\Message\Response\SCCPShowGlobalsResponse::getDigitTimeoutChar()

Returns key: 'DigitTimeoutChar'.



* Visibility: **public**




### getSCCPTosSignaling

    integer PAMI\Message\Response\SCCPShowGlobalsResponse::getSCCPTosSignaling()

Returns key: 'SCCPTosSignaling'.



* Visibility: **public**




### getSCCPCosSignaling

    integer PAMI\Message\Response\SCCPShowGlobalsResponse::getSCCPCosSignaling()

Returns key: 'SCCPCosSignaling'.



* Visibility: **public**




### getAUDIOTosRtp

    integer PAMI\Message\Response\SCCPShowGlobalsResponse::getAUDIOTosRtp()

Returns key: 'AUDIOTosRtp'.



* Visibility: **public**




### getAUDIOCosRtp

    integer PAMI\Message\Response\SCCPShowGlobalsResponse::getAUDIOCosRtp()

Returns key: 'AUDIOCosRtp'.



* Visibility: **public**




### getVIDEOTosVrtp

    string PAMI\Message\Response\SCCPShowGlobalsResponse::getVIDEOTosVrtp()

Returns key: 'VIDEOTosVrtp'.



* Visibility: **public**




### getVIDEOCosVrtp

    integer PAMI\Message\Response\SCCPShowGlobalsResponse::getVIDEOCosVrtp()

Returns key: 'VIDEOCosVrtp'.



* Visibility: **public**




### getContext

    string PAMI\Message\Response\SCCPShowGlobalsResponse::getContext()

Returns key: 'Context'.



* Visibility: **public**




### getLanguage

    string PAMI\Message\Response\SCCPShowGlobalsResponse::getLanguage()

Returns key: 'Language'.



* Visibility: **public**




### getAccountcode

    string PAMI\Message\Response\SCCPShowGlobalsResponse::getAccountcode()

Returns key: 'Accountcode'.



* Visibility: **public**




### getMusicclass

    string PAMI\Message\Response\SCCPShowGlobalsResponse::getMusicclass()

Returns key: 'Musicclass'.



* Visibility: **public**




### getAMAFlags

    string PAMI\Message\Response\SCCPShowGlobalsResponse::getAMAFlags()

Returns key: 'AMAFlags'.



* Visibility: **public**




### getCallgroup

    array<mixed,integer> PAMI\Message\Response\SCCPShowGlobalsResponse::getCallgroup()

Returns key: 'Callgroup'.



* Visibility: **public**




### getPickupgroup

    array<mixed,integer> PAMI\Message\Response\SCCPShowGlobalsResponse::getPickupgroup()

Returns key: 'Pickupgroup'.



* Visibility: **public**




### getPickupModeAnswer

    boolean PAMI\Message\Response\SCCPShowGlobalsResponse::getPickupModeAnswer()

Returns key: 'PickupModeAnswer'.



* Visibility: **public**




### getCodecsPreference

    \PAMI\Message\Response\(string|array<mixed,\PAMI\Message\Response\int)> PAMI\Message\Response\SCCPShowGlobalsResponse::getCodecsPreference()

Returns key: 'CodecsPreference'.



* Visibility: **public**




### getCFWDALL

    boolean PAMI\Message\Response\SCCPShowGlobalsResponse::getCFWDALL()

Returns key: 'CFWDALL'.



* Visibility: **public**




### getCFWDBUSY

    boolean PAMI\Message\Response\SCCPShowGlobalsResponse::getCFWDBUSY()

Returns key: 'CFWBUSY'.



* Visibility: **public**




### getCFWDNOANSWER

    boolean PAMI\Message\Response\SCCPShowGlobalsResponse::getCFWDNOANSWER()

Returns key: 'CFWNOANSWER'.



* Visibility: **public**




### getCallEvents

    boolean PAMI\Message\Response\SCCPShowGlobalsResponse::getCallEvents()

Returns key: 'CallEvents'.



* Visibility: **public**




### getDNDFeatureEnabled

    boolean PAMI\Message\Response\SCCPShowGlobalsResponse::getDNDFeatureEnabled()

Returns key: 'DNDFeatureEnabled'.



* Visibility: **public**




### getPark

    boolean PAMI\Message\Response\SCCPShowGlobalsResponse::getPark()

Returns key: 'Park'.



* Visibility: **public**




### getPrivateSoftkey

    boolean PAMI\Message\Response\SCCPShowGlobalsResponse::getPrivateSoftkey()

Returns key: 'PrivateSoftkey'.



* Visibility: **public**




### getEchoCancel

    boolean PAMI\Message\Response\SCCPShowGlobalsResponse::getEchoCancel()

Returns key: 'EchoCancel'.



* Visibility: **public**




### getSilenceSuppression

    boolean PAMI\Message\Response\SCCPShowGlobalsResponse::getSilenceSuppression()

Returns key: 'SilenceSuppression'.



* Visibility: **public**




### getEarlyRTP

    string PAMI\Message\Response\SCCPShowGlobalsResponse::getEarlyRTP()

Returns key: 'EarlyRTP'.



* Visibility: **public**




### getAutoAnswerRingtime

    string PAMI\Message\Response\SCCPShowGlobalsResponse::getAutoAnswerRingtime()

Returns key: 'AutoAnswerRingtime'.



* Visibility: **public**




### getAutoAnswerTone

    string PAMI\Message\Response\SCCPShowGlobalsResponse::getAutoAnswerTone()

Returns key: 'AutoAnswerTone'.



* Visibility: **public**




### getRemoteHangupTone

    integer PAMI\Message\Response\SCCPShowGlobalsResponse::getRemoteHangupTone()

Returns key: 'RemoteHangupTone'.



* Visibility: **public**




### getTransferTone

    string PAMI\Message\Response\SCCPShowGlobalsResponse::getTransferTone()

Returns key: 'TransferTone'.



* Visibility: **public**




### getTransferOnHangup

    boolean PAMI\Message\Response\SCCPShowGlobalsResponse::getTransferOnHangup()

Returns key: 'TransferOnHangup'.



* Visibility: **public**




### getCallwaitingTone

    integer PAMI\Message\Response\SCCPShowGlobalsResponse::getCallwaitingTone()

Returns key: 'CallwaitingTone'.



* Visibility: **public**




### getCallwaitingInterval

    integer PAMI\Message\Response\SCCPShowGlobalsResponse::getCallwaitingInterval()

Returns key: 'CallwaitingInterval'.



* Visibility: **public**




### getRegistrationContext

    string PAMI\Message\Response\SCCPShowGlobalsResponse::getRegistrationContext()

Returns key: 'RegistrationContext'.



* Visibility: **public**




### getJitterbufferEnabled

    boolean PAMI\Message\Response\SCCPShowGlobalsResponse::getJitterbufferEnabled()

Returns key: 'JitterbufferEnabled'.



* Visibility: **public**




### getJitterbufferForced

    boolean PAMI\Message\Response\SCCPShowGlobalsResponse::getJitterbufferForced()

Returns key: 'JitterbufferForced'.



* Visibility: **public**




### getJitterbufferMaxSize

    integer PAMI\Message\Response\SCCPShowGlobalsResponse::getJitterbufferMaxSize()

Returns key: 'JitterbufferMaxSize'.



* Visibility: **public**




### getJitterbufferResync

    integer PAMI\Message\Response\SCCPShowGlobalsResponse::getJitterbufferResync()

Returns key: 'JitterbufferResync'.



* Visibility: **public**




### getJitterbufferImpl

    string PAMI\Message\Response\SCCPShowGlobalsResponse::getJitterbufferImpl()

Returns key: 'JitterbufferImpl'.



* Visibility: **public**




### getJitterbufferLog

    boolean PAMI\Message\Response\SCCPShowGlobalsResponse::getJitterbufferLog()

Returns key: 'JitterbufferLog'.



* Visibility: **public**




### getTokenFallBack

    string PAMI\Message\Response\SCCPShowGlobalsResponse::getTokenFallBack()

Returns key: 'TokenFallBack'.



* Visibility: **public**




### getTokenBackoffTime

    integer PAMI\Message\Response\SCCPShowGlobalsResponse::getTokenBackoffTime()

Returns key: 'TokenBackoffTime'.



* Visibility: **public**




### getHotlineEnabled

    boolean PAMI\Message\Response\SCCPShowGlobalsResponse::getHotlineEnabled()

Returns key: 'HotlineEnabled'.



* Visibility: **public**




### getHotlineContext

    string PAMI\Message\Response\SCCPShowGlobalsResponse::getHotlineContext()

Returns key: 'HotlineContext'.



* Visibility: **public**




### getHotlineExten

    string PAMI\Message\Response\SCCPShowGlobalsResponse::getHotlineExten()

Returns key: 'HotlineExten'.



* Visibility: **public**




### getThreadpoolSize

    string PAMI\Message\Response\SCCPShowGlobalsResponse::getThreadpoolSize()

Returns key: 'ThreadpoolSize'.



* Visibility: **public**




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



