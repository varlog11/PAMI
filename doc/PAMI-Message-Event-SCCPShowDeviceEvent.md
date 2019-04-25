PAMI\Message\Event\SCCPShowDeviceEvent
===============

Event triggered by SCCPShowDevice.

PHP Version 5


* Class name: SCCPShowDeviceEvent
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


### getMACAddress

    string PAMI\Message\Event\SCCPShowDeviceEvent::getMACAddress()

Returns key: 'MACAddress'.



* Visibility: **public**




### getDeviceName

    string PAMI\Message\Event\SCCPShowDeviceEvent::getDeviceName()

Returns key: 'DeviceName'.



* Visibility: **public**




### getProtocolVersion

    string PAMI\Message\Event\SCCPShowDeviceEvent::getProtocolVersion()

Returns key: 'ProtocolVersion'.



* Visibility: **public**




### getProtocolInUse

    string PAMI\Message\Event\SCCPShowDeviceEvent::getProtocolInUse()

Returns key: 'ProtocolInUse'.



* Visibility: **public**




### getDeviceFeatures

    string PAMI\Message\Event\SCCPShowDeviceEvent::getDeviceFeatures()

Returns key: 'DeviceFeatures'.



* Visibility: **public**




### getTokenstate

    string PAMI\Message\Event\SCCPShowDeviceEvent::getTokenstate()

Returns key: 'Tokenstate'.



* Visibility: **public**




### getKeepalive

    integer PAMI\Message\Event\SCCPShowDeviceEvent::getKeepalive()

Returns key: 'Keepalive'.



* Visibility: **public**




### getRegistrationState

    string PAMI\Message\Event\SCCPShowDeviceEvent::getRegistrationState()

Returns key: 'RegistrationState'.



* Visibility: **public**




### getState

    string PAMI\Message\Event\SCCPShowDeviceEvent::getState()

Returns key: 'State'.



* Visibility: **public**




### getMWILight

    string PAMI\Message\Event\SCCPShowDeviceEvent::getMWILight()

Returns key: 'MWILight'.



* Visibility: **public**




### getMWIHandsetLight

    boolean PAMI\Message\Event\SCCPShowDeviceEvent::getMWIHandsetLight()

Returns key: 'MWIHandsetLight'.



* Visibility: **public**




### getDescription

    string PAMI\Message\Event\SCCPShowDeviceEvent::getDescription()

Returns key: 'Description'.



* Visibility: **public**




### getConfigPhoneType

    string PAMI\Message\Event\SCCPShowDeviceEvent::getConfigPhoneType()

Returns key: 'ConfigPhoneType'.



* Visibility: **public**




### getSkinnyPhoneType

    string PAMI\Message\Event\SCCPShowDeviceEvent::getSkinnyPhoneType()

Returns key: 'SkinnyPhoneType'.



* Visibility: **public**




### getSoftkeySupport

    boolean PAMI\Message\Event\SCCPShowDeviceEvent::getSoftkeySupport()

Returns key: 'SoftkeySupport'.



* Visibility: **public**




### getSoftkeyset

    string PAMI\Message\Event\SCCPShowDeviceEvent::getSoftkeyset()

Returns key: 'Softkeyset'.



* Visibility: **public**




### getBTemplateSupport

    boolean PAMI\Message\Event\SCCPShowDeviceEvent::getBTemplateSupport()

Returns key: 'BTemplateSupport'.



* Visibility: **public**




### getLinesRegistered

    boolean PAMI\Message\Event\SCCPShowDeviceEvent::getLinesRegistered()

Returns key: 'linesRegistered'.



* Visibility: **public**




### getImageVersion

    string PAMI\Message\Event\SCCPShowDeviceEvent::getImageVersion()

Returns key: 'ImageVersion'.



* Visibility: **public**




### getTimezoneOffset

    integer PAMI\Message\Event\SCCPShowDeviceEvent::getTimezoneOffset()

Returns key: 'TimezoneOffset'.



* Visibility: **public**




### getCapabilities

    \PAMI\Message\Event\(string|array<mixed,\PAMI\Message\Event\int)> PAMI\Message\Event\SCCPShowDeviceEvent::getCapabilities()

Returns key: 'Capabilities'.



* Visibility: **public**




### getCodecsPreference

    \PAMI\Message\Event\(string|array<mixed,\PAMI\Message\Event\int)> PAMI\Message\Event\SCCPShowDeviceEvent::getCodecsPreference()

Returns key: 'CodecsPreference'.



* Visibility: **public**




### getAudioTOS

    integer PAMI\Message\Event\SCCPShowDeviceEvent::getAudioTOS()

Returns key: 'AudioTOS'.



* Visibility: **public**




### getAudioCOS

    integer PAMI\Message\Event\SCCPShowDeviceEvent::getAudioCOS()

Returns key: 'AudioCOS'.



* Visibility: **public**




### getVideoTOS

    integer PAMI\Message\Event\SCCPShowDeviceEvent::getVideoTOS()

Returns key: 'VideoTOS'.



* Visibility: **public**




### getVideoCOS

    integer PAMI\Message\Event\SCCPShowDeviceEvent::getVideoCOS()

Returns key: 'VideoCOS'.



* Visibility: **public**




### getDNDFeatureEnabled

    boolean PAMI\Message\Event\SCCPShowDeviceEvent::getDNDFeatureEnabled()

Returns key: 'DNDFeatureEnabled'.



* Visibility: **public**




### getDNDStatus

    string PAMI\Message\Event\SCCPShowDeviceEvent::getDNDStatus()

Returns key: 'DNDStatus'.



* Visibility: **public**




### getDNDAction

    string PAMI\Message\Event\SCCPShowDeviceEvent::getDNDAction()

Returns key: 'DNDAction'.



* Visibility: **public**




### getCanTransfer

    boolean PAMI\Message\Event\SCCPShowDeviceEvent::getCanTransfer()

Returns key: 'CanTransfer'.



* Visibility: **public**




### getCanPark

    boolean PAMI\Message\Event\SCCPShowDeviceEvent::getCanPark()

Returns key: 'CanPark'.



* Visibility: **public**




### getCanCFWDALL

    boolean PAMI\Message\Event\SCCPShowDeviceEvent::getCanCFWDALL()

Returns key: 'CanCFWDALL'.



* Visibility: **public**




### getCanCFWBUSY

    boolean PAMI\Message\Event\SCCPShowDeviceEvent::getCanCFWBUSY()

Returns key: 'CanCFWBUSY'.



* Visibility: **public**




### getCanCFWNOANSWER

    boolean PAMI\Message\Event\SCCPShowDeviceEvent::getCanCFWNOANSWER()

Returns key: 'CanCFWNOANSWER'.



* Visibility: **public**




### getAllowRinginNotification

    boolean PAMI\Message\Event\SCCPShowDeviceEvent::getAllowRinginNotification()

Returns key: 'AllowRinginNotification'.



* Visibility: **public**




### getPrivateSoftkey

    boolean PAMI\Message\Event\SCCPShowDeviceEvent::getPrivateSoftkey()

Returns key: 'PrivateSoftkey'.



* Visibility: **public**




### getDtmfMode

    string PAMI\Message\Event\SCCPShowDeviceEvent::getDtmfMode()

Returns key: 'DtmfMode'.



* Visibility: **public**




### getNat

    string PAMI\Message\Event\SCCPShowDeviceEvent::getNat()

Returns key: 'Nat'.



* Visibility: **public**




### getVideosupport

    boolean PAMI\Message\Event\SCCPShowDeviceEvent::getVideosupport()

Returns key: 'Videosupport'.



* Visibility: **public**




### getDirectRTP

    boolean PAMI\Message\Event\SCCPShowDeviceEvent::getDirectRTP()

Returns key: 'DirectRTP'.



* Visibility: **public**




### getBindAddress

    string PAMI\Message\Event\SCCPShowDeviceEvent::getBindAddress()

Returns key: 'BindAddress'.



* Visibility: **public**




### getServerAddress

    string PAMI\Message\Event\SCCPShowDeviceEvent::getServerAddress()

Returns key: 'ServerAddress'.



* Visibility: **public**




### getDenyPermit

    string PAMI\Message\Event\SCCPShowDeviceEvent::getDenyPermit()

Returns key: 'DenyPermit'.



* Visibility: **public**




### getPermitHosts

    string PAMI\Message\Event\SCCPShowDeviceEvent::getPermitHosts()

Returns key: 'PermitHosts'.



* Visibility: **public**




### getEarlyRTP

    string PAMI\Message\Event\SCCPShowDeviceEvent::getEarlyRTP()

Returns key: 'EarlyRTP'.



* Visibility: **public**




### getDeviceStateAcc

    string PAMI\Message\Event\SCCPShowDeviceEvent::getDeviceStateAcc()

Returns key: 'DeviceStateAcc'.



* Visibility: **public**




### getLastUsedAccessory

    string PAMI\Message\Event\SCCPShowDeviceEvent::getLastUsedAccessory()

Returns key: 'LastUsedAccessory'.



* Visibility: **public**




### getLastDialedNumber

    string PAMI\Message\Event\SCCPShowDeviceEvent::getLastDialedNumber()

Returns key: 'LastDialedNumber'.



* Visibility: **public**




### getDefaultLineInstance

    integer PAMI\Message\Event\SCCPShowDeviceEvent::getDefaultLineInstance()

Returns key: 'DefaultLineInstance'.



* Visibility: **public**




### getCustomBackgroundImage

    string PAMI\Message\Event\SCCPShowDeviceEvent::getCustomBackgroundImage()

Returns key: 'CustomBackgroundImage'.



* Visibility: **public**




### getCustomRingTone

    string PAMI\Message\Event\SCCPShowDeviceEvent::getCustomRingTone()

Returns key: 'CustomRingTone'.



* Visibility: **public**




### getUsePlacedCalls

    boolean PAMI\Message\Event\SCCPShowDeviceEvent::getUsePlacedCalls()

Returns key: 'UsePlacedCalls'.



* Visibility: **public**




### getPendingUpdate

    boolean PAMI\Message\Event\SCCPShowDeviceEvent::getPendingUpdate()

Returns key: 'PendingUpdate'.



* Visibility: **public**




### getPendingDelete

    boolean PAMI\Message\Event\SCCPShowDeviceEvent::getPendingDelete()

Returns key: 'PendingDelete'.



* Visibility: **public**




### getDirectedPickup

    boolean PAMI\Message\Event\SCCPShowDeviceEvent::getDirectedPickup()

Returns key: 'DirectedPickup'.



* Visibility: **public**




### getPickupContext

    string PAMI\Message\Event\SCCPShowDeviceEvent::getPickupContext()

Returns key: 'PickupContext'.



* Visibility: **public**




### getPickupModeAnswer

    boolean PAMI\Message\Event\SCCPShowDeviceEvent::getPickupModeAnswer()

Returns key: 'PickupModeAnswer'.



* Visibility: **public**




### getallowConference

    boolean PAMI\Message\Event\SCCPShowDeviceEvent::getallowConference()

Returns key: 'allowConference'.



* Visibility: **public**




### getconfPlayGeneralAnnounce

    boolean PAMI\Message\Event\SCCPShowDeviceEvent::getconfPlayGeneralAnnounce()

Returns key: 'confPlayGeneralAnnounce'.



* Visibility: **public**




### getconfPlayPartAnnounce

    boolean PAMI\Message\Event\SCCPShowDeviceEvent::getconfPlayPartAnnounce()

Returns key: 'confPlayPartAnnounce'.



* Visibility: **public**




### getconfMuteOnEntry

    boolean PAMI\Message\Event\SCCPShowDeviceEvent::getconfMuteOnEntry()

Returns key: 'confMuteOnEntry'.



* Visibility: **public**




### getconfMusicOnHoldClass

    string PAMI\Message\Event\SCCPShowDeviceEvent::getconfMusicOnHoldClass()

Returns key: 'confMusicOnHoldClass'.



* Visibility: **public**




### getconfShowConflist

    boolean PAMI\Message\Event\SCCPShowDeviceEvent::getconfShowConflist()

Returns key: 'confShowConflist'.



* Visibility: **public**




### getconflistActive

    boolean PAMI\Message\Event\SCCPShowDeviceEvent::getconflistActive()

Returns key: 'conflistActive'.



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



