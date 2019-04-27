PAMI\Message\Response\SCCPShowDeviceResponse
===============

An sccp showdevice response message from ami.

PHP Version 5


* Class name: SCCPShowDeviceResponse
* Namespace: PAMI\Message\Response
* Parent class: [PAMI\Message\Response\ComplexResponse](PAMI-Message-Response-ComplexResponse.md)



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


### $temptable

    private Array $temptable

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




### getEventKey

    mixed PAMI\Message\Response\SCCPShowDeviceResponse::getEventKey($keyname)





* Visibility: **private**


#### Arguments
* $keyname **mixed**



### getEventBoolKey

    mixed PAMI\Message\Response\SCCPShowDeviceResponse::getEventBoolKey($keyname)





* Visibility: **private**


#### Arguments
* $keyname **mixed**



### getMACAddress

    string PAMI\Message\Response\SCCPShowDeviceResponse::getMACAddress()

Returns key: 'MACAddress'.



* Visibility: **public**




### getDeviceName

    string PAMI\Message\Response\SCCPShowDeviceResponse::getDeviceName()

Returns key: 'DeviceName'.



* Visibility: **public**




### getProtocolVersion

    string PAMI\Message\Response\SCCPShowDeviceResponse::getProtocolVersion()

Returns key: 'ProtocolVersion'.



* Visibility: **public**




### getProtocolInUse

    string PAMI\Message\Response\SCCPShowDeviceResponse::getProtocolInUse()

Returns key: 'ProtocolInUse'.



* Visibility: **public**




### getDeviceFeatures

    string PAMI\Message\Response\SCCPShowDeviceResponse::getDeviceFeatures()

Returns key: 'DeviceFeatures'.



* Visibility: **public**




### getTokenstate

    string PAMI\Message\Response\SCCPShowDeviceResponse::getTokenstate()

Returns key: 'Tokenstate'.



* Visibility: **public**




### getKeepalive

    integer PAMI\Message\Response\SCCPShowDeviceResponse::getKeepalive()

Returns key: 'Keepalive'.



* Visibility: **public**




### getRegistrationState

    string PAMI\Message\Response\SCCPShowDeviceResponse::getRegistrationState()

Returns key: 'RegistrationState'.



* Visibility: **public**




### getState

    string PAMI\Message\Response\SCCPShowDeviceResponse::getState()

Returns key: 'State'.



* Visibility: **public**




### getMWILight

    string PAMI\Message\Response\SCCPShowDeviceResponse::getMWILight()

Returns key: 'MWILight'.



* Visibility: **public**




### getMWIHandsetLight

    boolean PAMI\Message\Response\SCCPShowDeviceResponse::getMWIHandsetLight()

Returns key: 'MWIHandsetLight'.



* Visibility: **public**




### getDescription

    string PAMI\Message\Response\SCCPShowDeviceResponse::getDescription()

Returns key: 'Description'.



* Visibility: **public**




### getConfigPhoneType

    string PAMI\Message\Response\SCCPShowDeviceResponse::getConfigPhoneType()

Returns key: 'ConfigPhoneType'.



* Visibility: **public**




### getSkinnyPhoneType

    string PAMI\Message\Response\SCCPShowDeviceResponse::getSkinnyPhoneType()

Returns key: 'SkinnyPhoneType'.



* Visibility: **public**




### getSoftkeySupport

    boolean PAMI\Message\Response\SCCPShowDeviceResponse::getSoftkeySupport()

Returns key: 'SoftkeySupport'.



* Visibility: **public**




### getSoftkeyset

    string PAMI\Message\Response\SCCPShowDeviceResponse::getSoftkeyset()

Returns key: 'Softkeyset'.



* Visibility: **public**




### getBTemplateSupport

    boolean PAMI\Message\Response\SCCPShowDeviceResponse::getBTemplateSupport()

Returns key: 'BTemplateSupport'.



* Visibility: **public**




### getLinesRegistered

    boolean PAMI\Message\Response\SCCPShowDeviceResponse::getLinesRegistered()

Returns key: 'linesRegistered'.



* Visibility: **public**




### getImageVersion

    string PAMI\Message\Response\SCCPShowDeviceResponse::getImageVersion()

Returns key: 'ImageVersion'.



* Visibility: **public**




### getTimezoneOffset

    integer PAMI\Message\Response\SCCPShowDeviceResponse::getTimezoneOffset()

Returns key: 'TimezoneOffset'.



* Visibility: **public**




### getCapabilities

    \PAMI\Message\Response\(string|array<mixed,\PAMI\Message\Response\int)> PAMI\Message\Response\SCCPShowDeviceResponse::getCapabilities()

Returns key: 'Capabilities'.



* Visibility: **public**




### getCodecsPreference

    \PAMI\Message\Response\(string|array<mixed,\PAMI\Message\Response\int)> PAMI\Message\Response\SCCPShowDeviceResponse::getCodecsPreference()

Returns key: 'CodecsPreference'.



* Visibility: **public**




### getAudioTOS

    integer PAMI\Message\Response\SCCPShowDeviceResponse::getAudioTOS()

Returns key: 'AudioTOS'.



* Visibility: **public**




### getAudioCOS

    integer PAMI\Message\Response\SCCPShowDeviceResponse::getAudioCOS()

Returns key: 'AudioCOS'.



* Visibility: **public**




### getVideoTOS

    integer PAMI\Message\Response\SCCPShowDeviceResponse::getVideoTOS()

Returns key: 'VideoTOS'.



* Visibility: **public**




### getVideoCOS

    integer PAMI\Message\Response\SCCPShowDeviceResponse::getVideoCOS()

Returns key: 'VideoCOS'.



* Visibility: **public**




### getDNDFeatureEnabled

    boolean PAMI\Message\Response\SCCPShowDeviceResponse::getDNDFeatureEnabled()

Returns key: 'DNDFeatureEnabled'.



* Visibility: **public**




### getDNDStatus

    string PAMI\Message\Response\SCCPShowDeviceResponse::getDNDStatus()

Returns key: 'DNDStatus'.



* Visibility: **public**




### getDNDAction

    string PAMI\Message\Response\SCCPShowDeviceResponse::getDNDAction()

Returns key: 'DNDAction'.



* Visibility: **public**




### getCanTransfer

    boolean PAMI\Message\Response\SCCPShowDeviceResponse::getCanTransfer()

Returns key: 'CanTransfer'.



* Visibility: **public**




### getCanPark

    boolean PAMI\Message\Response\SCCPShowDeviceResponse::getCanPark()

Returns key: 'CanPark'.



* Visibility: **public**




### getCanCFWDALL

    boolean PAMI\Message\Response\SCCPShowDeviceResponse::getCanCFWDALL()

Returns key: 'CanCFWDALL'.



* Visibility: **public**




### getCanCFWBUSY

    boolean PAMI\Message\Response\SCCPShowDeviceResponse::getCanCFWBUSY()

Returns key: 'CanCFWBUSY'.



* Visibility: **public**




### getCanCFWNOANSWER

    boolean PAMI\Message\Response\SCCPShowDeviceResponse::getCanCFWNOANSWER()

Returns key: 'CanCFWNOANSWER'.



* Visibility: **public**




### getAllowRinginNotification

    boolean PAMI\Message\Response\SCCPShowDeviceResponse::getAllowRinginNotification()

Returns key: 'AllowRinginNotification'.



* Visibility: **public**




### getPrivateSoftkey

    boolean PAMI\Message\Response\SCCPShowDeviceResponse::getPrivateSoftkey()

Returns key: 'PrivateSoftkey'.



* Visibility: **public**




### getDtmfMode

    string PAMI\Message\Response\SCCPShowDeviceResponse::getDtmfMode()

Returns key: 'DtmfMode'.



* Visibility: **public**




### getNat

    string PAMI\Message\Response\SCCPShowDeviceResponse::getNat()

Returns key: 'Nat'.



* Visibility: **public**




### getVideosupport

    boolean PAMI\Message\Response\SCCPShowDeviceResponse::getVideosupport()

Returns key: 'Videosupport'.



* Visibility: **public**




### getDirectRTP

    boolean PAMI\Message\Response\SCCPShowDeviceResponse::getDirectRTP()

Returns key: 'DirectRTP'.



* Visibility: **public**




### getBindAddress

    string PAMI\Message\Response\SCCPShowDeviceResponse::getBindAddress()

Returns key: 'BindAddress'.



* Visibility: **public**




### getServerAddress

    string PAMI\Message\Response\SCCPShowDeviceResponse::getServerAddress()

Returns key: 'ServerAddress'.



* Visibility: **public**




### getDenyPermit

    string PAMI\Message\Response\SCCPShowDeviceResponse::getDenyPermit()

Returns key: 'DenyPermit'.



* Visibility: **public**




### getPermitHosts

    string PAMI\Message\Response\SCCPShowDeviceResponse::getPermitHosts()

Returns key: 'PermitHosts'.



* Visibility: **public**




### getEarlyRTP

    string PAMI\Message\Response\SCCPShowDeviceResponse::getEarlyRTP()

Returns key: 'EarlyRTP'.



* Visibility: **public**




### getDeviceStateAcc

    string PAMI\Message\Response\SCCPShowDeviceResponse::getDeviceStateAcc()

Returns key: 'DeviceStateAcc'.



* Visibility: **public**




### getLastUsedAccessory

    string PAMI\Message\Response\SCCPShowDeviceResponse::getLastUsedAccessory()

Returns key: 'LastUsedAccessory'.



* Visibility: **public**




### getLastDialedNumber

    string PAMI\Message\Response\SCCPShowDeviceResponse::getLastDialedNumber()

Returns key: 'LastDialedNumber'.



* Visibility: **public**




### getDefaultLineInstance

    integer PAMI\Message\Response\SCCPShowDeviceResponse::getDefaultLineInstance()

Returns key: 'DefaultLineInstance'.



* Visibility: **public**




### getCustomBackgroundImage

    string PAMI\Message\Response\SCCPShowDeviceResponse::getCustomBackgroundImage()

Returns key: 'CustomBackgroundImage'.



* Visibility: **public**




### getCustomRingTone

    string PAMI\Message\Response\SCCPShowDeviceResponse::getCustomRingTone()

Returns key: 'CustomRingTone'.



* Visibility: **public**




### getUsePlacedCalls

    boolean PAMI\Message\Response\SCCPShowDeviceResponse::getUsePlacedCalls()

Returns key: 'UsePlacedCalls'.



* Visibility: **public**




### getPendingUpdate

    boolean PAMI\Message\Response\SCCPShowDeviceResponse::getPendingUpdate()

Returns key: 'PendingUpdate'.



* Visibility: **public**




### getPendingDelete

    boolean PAMI\Message\Response\SCCPShowDeviceResponse::getPendingDelete()

Returns key: 'PendingDelete'.



* Visibility: **public**




### getDirectedPickup

    boolean PAMI\Message\Response\SCCPShowDeviceResponse::getDirectedPickup()

Returns key: 'DirectedPickup'.



* Visibility: **public**




### getPickupContext

    string PAMI\Message\Response\SCCPShowDeviceResponse::getPickupContext()

Returns key: 'PickupContext'.



* Visibility: **public**




### getPickupModeAnswer

    boolean PAMI\Message\Response\SCCPShowDeviceResponse::getPickupModeAnswer()

Returns key: 'PickupModeAnswer'.



* Visibility: **public**




### getallowConference

    boolean PAMI\Message\Response\SCCPShowDeviceResponse::getallowConference()

Returns key: 'allowConference'.



* Visibility: **public**




### getconfPlayGeneralAnnounce

    boolean PAMI\Message\Response\SCCPShowDeviceResponse::getconfPlayGeneralAnnounce()

Returns key: 'confPlayGeneralAnnounce'.



* Visibility: **public**




### getconfPlayPartAnnounce

    boolean PAMI\Message\Response\SCCPShowDeviceResponse::getconfPlayPartAnnounce()

Returns key: 'confPlayPartAnnounce'.



* Visibility: **public**




### getconfMuteOnEntry

    boolean PAMI\Message\Response\SCCPShowDeviceResponse::getconfMuteOnEntry()

Returns key: 'confMuteOnEntry'.



* Visibility: **public**




### getconfMusicOnHoldClass

    string PAMI\Message\Response\SCCPShowDeviceResponse::getconfMusicOnHoldClass()

Returns key: 'confMusicOnHoldClass'.



* Visibility: **public**




### getconfShowConflist

    boolean PAMI\Message\Response\SCCPShowDeviceResponse::getconfShowConflist()

Returns key: 'confShowConflist'.



* Visibility: **public**




### getconflistActive

    boolean PAMI\Message\Response\SCCPShowDeviceResponse::getconflistActive()

Returns key: 'conflistActive'.



* Visibility: **public**




### getButtons

    \PAMI\Message\Response\PAMI\Message\Event\SCCPDeviceButtonEntryEvent[]) PAMI\Message\Response\SCCPShowDeviceResponse::getButtons()

Returns events[] related to ButtonEntries from the tables['Buttons']['Entries']



* Visibility: **public**




### getLineButtons

    array<mixed,\PAMI\Message\Response\PAMI\Message\Event\SCCPDeviceLineButtonEntryEvent> PAMI\Message\Response\SCCPShowDeviceResponse::getLineButtons()

Returns events[] related to LineButtons from the tables['LineButtons']['Entries']



* Visibility: **public**




### getSpeeddialButtons

    array<mixed,\PAMI\Message\Response\PAMI\Message\Event\SCCPDeviceSpeeddialButtonEntryEvent> PAMI\Message\Response\SCCPShowDeviceResponse::getSpeeddialButtons()

Returns events[] related to SpeeddialButtons from the tables['SpeeddialButtons']['Entries']



* Visibility: **public**




### getServiceURLButtons

    array<mixed,\PAMI\Message\Response\PAMI\Message\Event\SCCPDeviceServiceURLButtonEntryEvent> PAMI\Message\Response\SCCPShowDeviceResponse::getServiceURLButtons()

Returns events[] related to ServiceURLButtons from the tables['ServiceURLs']['Entries']



* Visibility: **public**




### getFeatureButtons

    array<mixed,\PAMI\Message\Response\PAMI\Message\Event\SCCPDeviceFeatureButtonEntryEvent> PAMI\Message\Response\SCCPShowDeviceResponse::getFeatureButtons()

Returns events[] related to FeatureButtons from the tables['FeatureButtons']['Entries']



* Visibility: **public**




### getVariables

    array<mixed,string> PAMI\Message\Message::getVariables()

Returns all variabels for this message.



* Visibility: **public**
* This method is defined by [PAMI\Message\Message](PAMI-Message-Message.md)




### getCallStatistics

    array<mixed,\PAMI\Message\Response\PAMI\Message\Event\SCCPDeviceStatisticsEntryEvent> PAMI\Message\Response\SCCPShowDeviceResponse::getCallStatistics()

Returns events[] related to DeviceCallStatistics from the tables['CallStatistics']['Entries']



* Visibility: **public**




### addEvent

    void PAMI\Message\Response\Response::addEvent(\PAMI\Message\Event\EventMessage $event)

Adds an event to this response.



* Visibility: **public**
* This method is defined by [PAMI\Message\Response\Response](PAMI-Message-Response-Response.md)


#### Arguments
* $event **[PAMI\Message\Event\EventMessage](PAMI-Message-Event-EventMessage.md)** - &lt;p&gt;Child event to add.&lt;/p&gt;



### hasTable

    boolean PAMI\Message\Response\ComplexResponse::hasTable()

Returns true if this Response Message contains an events tables (TableStart/TableEnd)



* Visibility: **public**
* This method is defined by [PAMI\Message\Response\ComplexResponse](PAMI-Message-Response-ComplexResponse.md)




### getTableNames

    array<mixed,\PAMI\Message\Event\EventMessage> PAMI\Message\Response\ComplexResponse::getTableNames()

Returns all eventtabless for this response.



* Visibility: **public**
* This method is defined by [PAMI\Message\Response\ComplexResponse](PAMI-Message-Response-ComplexResponse.md)




### getTable

    array<mixed,\PAMI\Message\Event\EventMessage> PAMI\Message\Response\ComplexResponse::getTable($tablename)

Returns all associated events for this response->tablename.



* Visibility: **public**
* This method is defined by [PAMI\Message\Response\ComplexResponse](PAMI-Message-Response-ComplexResponse.md)


#### Arguments
* $tablename **mixed**



### getJSON

    array PAMI\Message\Response\ComplexResponse::getJSON()

Returns decoded version of the 'JSON' key if present.



* Visibility: **public**
* This method is defined by [PAMI\Message\Response\ComplexResponse](PAMI-Message-Response-ComplexResponse.md)




### __sleep

    array<mixed,string> PAMI\Message\Message::__sleep()

Serialize function.



* Visibility: **public**
* This method is defined by [PAMI\Message\Message](PAMI-Message-Message.md)




### isComplete

    boolean PAMI\Message\Response\Response::isComplete()

True if this response is complete. A response is considered complete
if it's not a list OR it's a list with its last child event containing
an EventList = Complete.



* Visibility: **public**
* This method is defined by [PAMI\Message\Response\Response](PAMI-Message-Response-Response.md)




### getEvents

    array<mixed,\PAMI\Message\Event\EventMessage> PAMI\Message\Response\Response::getEvents()

Returns all associated events for this response.



* Visibility: **public**
* This method is defined by [PAMI\Message\Response\Response](PAMI-Message-Response-Response.md)




### isSuccess

    boolean PAMI\Message\Response\Response::isSuccess()

Checks if the Response field has the word Error in it.



* Visibility: **public**
* This method is defined by [PAMI\Message\Response\Response](PAMI-Message-Response-Response.md)




### isList

    boolean PAMI\Message\Response\Response::isList()

Returns true if this response contains the key EventList with the
word 'start' in it. Another way is to have a Message key, like:
Message: Result will follow



* Visibility: **public**
* This method is defined by [PAMI\Message\Response\Response](PAMI-Message-Response-Response.md)




### getMessage

    string PAMI\Message\Response\Response::getMessage()

Returns key: 'Privilege'.



* Visibility: **public**
* This method is defined by [PAMI\Message\Response\Response](PAMI-Message-Response-Response.md)




### setActionId

    void PAMI\Message\Response\Response::setActionId(string $actionId)

Sets an action id. This should not be necessary, but asterisk sometimes
decides to not send the Response: or Event: headers.



* Visibility: **public**
* This method is defined by [PAMI\Message\Response\Response](PAMI-Message-Response-Response.md)


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



