PAMI\Message\Event\EndpointDetailEvent
===============

Event from PJSIPShowEndpoint

PHP Version 5


* Class name: EndpointDetailEvent
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

    string PAMI\Message\Event\EndpointDetailEvent::getObjectType()

Returns key: 'ObjectType'. The object's type. This will always be 'endpoint'.



* Visibility: **public**




### getObjectName

    string PAMI\Message\Event\EndpointDetailEvent::getObjectName()

Returns key: 'ObjectName'. The name of this object.



* Visibility: **public**




### getContext

    string PAMI\Message\Event\EndpointDetailEvent::getContext()

Returns key: 'Context'. Dialplan context for inbound sessions



* Visibility: **public**




### getDisallow

    string PAMI\Message\Event\EndpointDetailEvent::getDisallow()

Returns key: 'Disallow'. Media Codec(s) to disallow



* Visibility: **public**




### getAllow

    string PAMI\Message\Event\EndpointDetailEvent::getAllow()

Returns key: 'Allow'. Media Codec(s) to allow



* Visibility: **public**




### getDtmfMode

    string PAMI\Message\Event\EndpointDetailEvent::getDtmfMode()

Returns key: 'DtmfMode'. DTMF mode



* Visibility: **public**




### getRtpIpv6

    string PAMI\Message\Event\EndpointDetailEvent::getRtpIpv6()

Returns key: 'RtpIpv6'. Allow use of IPv6 for RTP traffic



* Visibility: **public**




### getRtpSymmetric

    string PAMI\Message\Event\EndpointDetailEvent::getRtpSymmetric()

Returns key: 'RtpSymmetric'. Enforce that RTP must be symmetric



* Visibility: **public**




### getIceSupport

    string PAMI\Message\Event\EndpointDetailEvent::getIceSupport()

Returns key: 'IceSupport'. Enable the ICE mechanism to help traverse NAT



* Visibility: **public**




### getUsePtime

    string PAMI\Message\Event\EndpointDetailEvent::getUsePtime()

Returns key: 'UsePtime'. Use Endpoint's requested packetisation interval



* Visibility: **public**




### getForceRport

    string PAMI\Message\Event\EndpointDetailEvent::getForceRport()

Returns key: 'ForceRport'. Force use of return port



* Visibility: **public**




### getRewriteContact

    string PAMI\Message\Event\EndpointDetailEvent::getRewriteContact()

Returns key: 'RewriteContact'. Allow Contact header to be rewritten with the source IP address-port



* Visibility: **public**




### getTransport

    string PAMI\Message\Event\EndpointDetailEvent::getTransport()

Returns key: 'Transport'. Desired transport configuration



* Visibility: **public**




### getOutboundProxy

    string PAMI\Message\Event\EndpointDetailEvent::getOutboundProxy()

Returns key: 'OutboundProxy'. Proxy through which to send requests, a full SIP URI must be provided



* Visibility: **public**




### getMohSuggest

    string PAMI\Message\Event\EndpointDetailEvent::getMohSuggest()

Returns key: 'MohSuggest'. Default Music On Hold class



* Visibility: **public**




### get100rel

    string PAMI\Message\Event\EndpointDetailEvent::get100rel()

Returns key: '100rel'. Allow support for RFC3262 provisional ACK tags



* Visibility: **public**




### getTimers

    string PAMI\Message\Event\EndpointDetailEvent::getTimers()

Returns key: 'Timers'. Session timers for SIP packets



* Visibility: **public**




### getTimersMinSe

    string PAMI\Message\Event\EndpointDetailEvent::getTimersMinSe()

Returns key: 'TimersMinSe'. Minimum session timers expiration period



* Visibility: **public**




### getTimersSessExpires

    string PAMI\Message\Event\EndpointDetailEvent::getTimersSessExpires()

Returns key: 'TimersSessExpires'. Maximum session timer expiration period



* Visibility: **public**




### getAuth

    string PAMI\Message\Event\EndpointDetailEvent::getAuth()

Returns key: 'Auth'. Authentication Object(s) associated with the endpoint



* Visibility: **public**




### getOutboundAuth

    string PAMI\Message\Event\EndpointDetailEvent::getOutboundAuth()

Returns key: 'OutboundAuth'. Authentication object used for outbound requests



* Visibility: **public**




### getAors

    string PAMI\Message\Event\EndpointDetailEvent::getAors()

Returns key: 'Aors'. AoR(s) to be used with the endpoint



* Visibility: **public**




### getMediaAddress

    string PAMI\Message\Event\EndpointDetailEvent::getMediaAddress()

Returns key: 'MediaAddress'. IP address used in SDP for media handling



* Visibility: **public**




### getIdentifyBy

    string PAMI\Message\Event\EndpointDetailEvent::getIdentifyBy()

Returns key: 'IdentifyBy'. Way(s) for Endpoint to be identified



* Visibility: **public**




### getDirectMedia

    string PAMI\Message\Event\EndpointDetailEvent::getDirectMedia()

Returns key: 'DirectMedia'. Determines whether media may flow directly between endpoints.



* Visibility: **public**




### getDirectMediaMethod

    string PAMI\Message\Event\EndpointDetailEvent::getDirectMediaMethod()

Returns key: 'DirectMediaMethod'. Direct Media method type



* Visibility: **public**




### getConnectedLineMethod

    string PAMI\Message\Event\EndpointDetailEvent::getConnectedLineMethod()

Returns key: 'ConnectedLineMethod'. Connected line method type



* Visibility: **public**




### getDirectMediaGlareMitigation

    string PAMI\Message\Event\EndpointDetailEvent::getDirectMediaGlareMitigation()

Returns key: 'DirectMediaGlareMitigation'. Mitigation of direct media (re)INVITE glare



* Visibility: **public**




### getDisableDirectMediaOnNat

    string PAMI\Message\Event\EndpointDetailEvent::getDisableDirectMediaOnNat()

Returns key: 'DisableDirectMediaOnNat'. Disable direct media session refreshes when NAT obstructs the media session



* Visibility: **public**




### getCallerid

    string PAMI\Message\Event\EndpointDetailEvent::getCallerid()

Returns key: 'Callerid'. CallerID information for the endpoint



* Visibility: **public**




### getCalleridPrivacy

    string PAMI\Message\Event\EndpointDetailEvent::getCalleridPrivacy()

Returns key: 'CalleridPrivacy'. Default privacy level



* Visibility: **public**




### getCalleridTag

    string PAMI\Message\Event\EndpointDetailEvent::getCalleridTag()

Returns key: 'CalleridTag'. Internal id_tag for the endpoint



* Visibility: **public**




### getTrustIdInbound

    string PAMI\Message\Event\EndpointDetailEvent::getTrustIdInbound()

Returns key: 'TrustIdInbound'. Accept identification information received from this endpoint



* Visibility: **public**




### getTrustIdOutbound

    string PAMI\Message\Event\EndpointDetailEvent::getTrustIdOutbound()

Returns key: 'TrustIdOutbound'. Send private identification details to the endpoint.



* Visibility: **public**




### getSendPai

    string PAMI\Message\Event\EndpointDetailEvent::getSendPai()

Returns key: 'SendPai'. Send the P-Asserted-Identity header



* Visibility: **public**




### getSendRpid

    string PAMI\Message\Event\EndpointDetailEvent::getSendRpid()

Returns key: 'SendRpid'. Send the Remote-Party-ID header



* Visibility: **public**




### getSendDiversion

    string PAMI\Message\Event\EndpointDetailEvent::getSendDiversion()

Returns key: 'SendDiversion'. Send the Diversion header, conveying the diversion information to the called user agent



* Visibility: **public**




### getMailboxes

    string PAMI\Message\Event\EndpointDetailEvent::getMailboxes()

Returns key: 'Mailboxes'. NOTIFY the endpoint when state changes for any of the specified mailboxes



* Visibility: **public**




### getAggregateMwi

    string PAMI\Message\Event\EndpointDetailEvent::getAggregateMwi()

Returns key: 'AggregateMwi'. Condense MWI notifications into a single NOTIFY.



* Visibility: **public**




### getMediaEncryption

    string PAMI\Message\Event\EndpointDetailEvent::getMediaEncryption()

Returns key: 'MediaEncryption'. Determines whether res_pjsip will use and enforce usage of media encryption for this endpoint.



* Visibility: **public**




### getMediaEncryptionOptimistic

    string PAMI\Message\Event\EndpointDetailEvent::getMediaEncryptionOptimistic()

Returns key: 'MediaEncryptionOptimistic'. Determines whether encryption should be used if possible but does not terminate the session if not achieved.



* Visibility: **public**




### getUseAvpf

    string PAMI\Message\Event\EndpointDetailEvent::getUseAvpf()

Returns key: 'UseAvpf'. Determines whether res_pjsip will use and enforce usage of AVPF for this endpoint.



* Visibility: **public**




### getForceAvp

    string PAMI\Message\Event\EndpointDetailEvent::getForceAvp()

Returns key: 'ForceAvp'. Determines whether res_pjsip will use and enforce usage of AVP, regardless of the RTP profile in use for this endpoint.



* Visibility: **public**




### getMediaUseReceivedTransport

    string PAMI\Message\Event\EndpointDetailEvent::getMediaUseReceivedTransport()

Returns key: 'MediaUseReceivedTransport'. Determines whether res_pjsip will use the media transport received in the offer SDP in the corresponding answer SDP.



* Visibility: **public**




### getOneTouchRecording

    string PAMI\Message\Event\EndpointDetailEvent::getOneTouchRecording()

Returns key: 'OneTouchRecording'. Determines whether one-touch recording is allowed for this endpoint.



* Visibility: **public**




### getInbandProgress

    string PAMI\Message\Event\EndpointDetailEvent::getInbandProgress()

Returns key: 'InbandProgress'. Determines whether chan_pjsip will indicate ringing using inband progress.



* Visibility: **public**




### getCallGroup

    string PAMI\Message\Event\EndpointDetailEvent::getCallGroup()

Returns key: 'CallGroup'. The numeric pickup groups for a channel.



* Visibility: **public**




### getPickupGroup

    string PAMI\Message\Event\EndpointDetailEvent::getPickupGroup()

Returns key: 'PickupGroup'. The numeric pickup groups that a channel can pickup.



* Visibility: **public**




### getNamedCallGroup

    string PAMI\Message\Event\EndpointDetailEvent::getNamedCallGroup()

Returns key: 'NamedCallGroup'. The named pickup groups for a channel.



* Visibility: **public**




### getNamedPickupGroup

    string PAMI\Message\Event\EndpointDetailEvent::getNamedPickupGroup()

Returns key: 'NamedPickupGroup'. The named pickup groups that a channel can pickup.



* Visibility: **public**




### getDeviceStateBusyAt

    string PAMI\Message\Event\EndpointDetailEvent::getDeviceStateBusyAt()

Returns key: 'DeviceStateBusyAt'. The number of in-use channels which will cause busy to be returned as device state



* Visibility: **public**




### getT38Udptl

    string PAMI\Message\Event\EndpointDetailEvent::getT38Udptl()

Returns key: 'T38Udptl'. Whether T.38 UDPTL support is enabled or not



* Visibility: **public**




### getT38UdptlEc

    string PAMI\Message\Event\EndpointDetailEvent::getT38UdptlEc()

Returns key: 'T38UdptlEc'. T.38 UDPTL error correction method



* Visibility: **public**




### getT38UdptlMaxdatagram

    string PAMI\Message\Event\EndpointDetailEvent::getT38UdptlMaxdatagram()

Returns key: 'T38UdptlMaxdatagram'. T.38 UDPTL maximum datagram size



* Visibility: **public**




### getFaxDetect

    string PAMI\Message\Event\EndpointDetailEvent::getFaxDetect()

Returns key: 'FaxDetect'. Whether CNG tone detection is enabled



* Visibility: **public**




### getT38UdptlNat

    string PAMI\Message\Event\EndpointDetailEvent::getT38UdptlNat()

Returns key: 'T38UdptlNat'. Whether NAT support is enabled on UDPTL sessions



* Visibility: **public**




### getT38UdptlIpv6

    string PAMI\Message\Event\EndpointDetailEvent::getT38UdptlIpv6()

Returns key: 'T38UdptlIpv6'. Whether IPv6 is used for UDPTL Sessions



* Visibility: **public**




### getToneZone

    string PAMI\Message\Event\EndpointDetailEvent::getToneZone()

Returns key: 'ToneZone'. Set which country's indications to use for channels created for this endpoint.



* Visibility: **public**




### getLanguage

    string PAMI\Message\Event\EndpointDetailEvent::getLanguage()

Returns key: 'Language'. Set the default language to use for channels created for this endpoint.



* Visibility: **public**




### getRecordOnFeature

    string PAMI\Message\Event\EndpointDetailEvent::getRecordOnFeature()

Returns key: 'RecordOnFeature'. The feature to enact when one-touch recording is turned on.



* Visibility: **public**




### getRecordOffFeature

    string PAMI\Message\Event\EndpointDetailEvent::getRecordOffFeature()

Returns key: 'RecordOffFeature'. The feature to enact when one-touch recording is turned off.



* Visibility: **public**




### getAllowTransfer

    string PAMI\Message\Event\EndpointDetailEvent::getAllowTransfer()

Returns key: 'AllowTransfer'. Determines whether SIP REFER transfers are allowed for this endpoint



* Visibility: **public**




### getUserEqPhone

    string PAMI\Message\Event\EndpointDetailEvent::getUserEqPhone()

Returns key: 'UserEqPhone'. Determines whether a user=phone parameter is placed into the request URI if the user is determined to be a phone number



* Visibility: **public**




### getSdpOwner

    string PAMI\Message\Event\EndpointDetailEvent::getSdpOwner()

Returns key: 'SdpOwner'. String placed as the username portion of an SDP origin (o=) line.



* Visibility: **public**




### getSdpSession

    string PAMI\Message\Event\EndpointDetailEvent::getSdpSession()

Returns key: 'SdpSession'. String used for the SDP session (s=) line.



* Visibility: **public**




### getTosAudio

    string PAMI\Message\Event\EndpointDetailEvent::getTosAudio()

Returns key: 'TosAudio'. DSCP TOS bits for audio streams



* Visibility: **public**




### getTosVideo

    string PAMI\Message\Event\EndpointDetailEvent::getTosVideo()

Returns key: 'TosVideo'. DSCP TOS bits for video streams



* Visibility: **public**




### getCosAudio

    string PAMI\Message\Event\EndpointDetailEvent::getCosAudio()

Returns key: 'CosAudio'. Priority for audio streams



* Visibility: **public**




### getCosVideo

    string PAMI\Message\Event\EndpointDetailEvent::getCosVideo()

Returns key: 'CosVideo'. Priority for video streams



* Visibility: **public**




### getAllowSubscribe

    string PAMI\Message\Event\EndpointDetailEvent::getAllowSubscribe()

Returns key: 'AllowSubscribe'. Determines if endpoint is allowed to initiate subscriptions with Asterisk.



* Visibility: **public**




### getSubMinExpiry

    string PAMI\Message\Event\EndpointDetailEvent::getSubMinExpiry()

Returns key: 'SubMinExpiry'. The minimum allowed expiry time for subscriptions initiated by the endpoint.



* Visibility: **public**




### getFromUser

    string PAMI\Message\Event\EndpointDetailEvent::getFromUser()

Returns key: 'FromUser'. Username to use in From header for requests to this endpoint.



* Visibility: **public**




### getFromDomain

    string PAMI\Message\Event\EndpointDetailEvent::getFromDomain()

Returns key: 'FromDomain'. Domain to user in From header for requests to this endpoint.



* Visibility: **public**




### getMwiFromUser

    string PAMI\Message\Event\EndpointDetailEvent::getMwiFromUser()

Returns key: 'MwiFromUser'. Username to use in From header for unsolicited MWI NOTIFYs to this endpoint.



* Visibility: **public**




### getRtpEngine

    string PAMI\Message\Event\EndpointDetailEvent::getRtpEngine()

Returns key: 'RtpEngine'. Name of the RTP engine to use for channels created for this endpoint



* Visibility: **public**




### getDtlsVerify

    string PAMI\Message\Event\EndpointDetailEvent::getDtlsVerify()

Returns key: 'DtlsVerify'. Verify that the provided peer certificate is valid



* Visibility: **public**




### getDtlsRekey

    string PAMI\Message\Event\EndpointDetailEvent::getDtlsRekey()

Returns key: 'DtlsRekey'. Interval at which to renegotiate the TLS session and rekey the SRTP session



* Visibility: **public**




### getDtlsCertFile

    string PAMI\Message\Event\EndpointDetailEvent::getDtlsCertFile()

Returns key: 'DtlsCertFile'. Path to certificate file to present to peer



* Visibility: **public**




### getDtlsPrivateKey

    string PAMI\Message\Event\EndpointDetailEvent::getDtlsPrivateKey()

Returns key: 'DtlsPrivateKey'. Path to private key for certificate file



* Visibility: **public**




### getDtlsCipher

    string PAMI\Message\Event\EndpointDetailEvent::getDtlsCipher()

Returns key: 'DtlsCipher'. Cipher to use for DTLS negotiation



* Visibility: **public**




### getDtlsCaFile

    string PAMI\Message\Event\EndpointDetailEvent::getDtlsCaFile()

Returns key: 'DtlsCaFile'. Path to certificate authority certificate



* Visibility: **public**




### getDtlsCaPath

    string PAMI\Message\Event\EndpointDetailEvent::getDtlsCaPath()

Returns key: 'DtlsCaPath'. Path to a directory containing certificate authority certificates



* Visibility: **public**




### getDtlsSetup

    string PAMI\Message\Event\EndpointDetailEvent::getDtlsSetup()

Returns key: 'DtlsSetup'. Whether we are willing to accept connections, connect to the other party, or both.



* Visibility: **public**




### getSrtpTag32

    string PAMI\Message\Event\EndpointDetailEvent::getSrtpTag32()

Returns key: 'SrtpTag32'. Determines whether 32 byte tags should be used instead of 80 byte tags.



* Visibility: **public**




### getRedirectMethod

    string PAMI\Message\Event\EndpointDetailEvent::getRedirectMethod()

Returns key: 'RedirectMethod'. How redirects received from an endpoint are handled



* Visibility: **public**




### getSetVar

    string PAMI\Message\Event\EndpointDetailEvent::getSetVar()

Returns key: 'SetVar'. Variable set on a channel involving the endpoint.



* Visibility: **public**




### getMessageContext

    string PAMI\Message\Event\EndpointDetailEvent::getMessageContext()

Returns key: 'MessageContext'. Context to route incoming MESSAGE requests to.



* Visibility: **public**




### getAccountcode

    string PAMI\Message\Event\EndpointDetailEvent::getAccountcode()

Returns key: 'Accountcode'. An accountcode to set automatically on any channels created for this endpoint.



* Visibility: **public**




### getDeviceState

    string PAMI\Message\Event\EndpointDetailEvent::getDeviceState()

Returns key: 'DeviceState'. The aggregate device state for this endpoint.



* Visibility: **public**




### getActiveChannels

    string PAMI\Message\Event\EndpointDetailEvent::getActiveChannels()

Returns key: 'ActiveChannels'. The number of active channels associated with this endpoint.



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



