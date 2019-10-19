## Table of contents

- [\PAMI\AsyncAgi\AsyncClientImpl](#class-pamiasyncagiasyncclientimpl)
- [\PAMI\AsyncAgi\IAsyncClient (interface)](#interface-pamiasyncagiiasyncclient)
- [\PAMI\AsyncAgi\Application\PAGIAsyncApplication (abstract)](#class-pamiasyncagiapplicationpagiasyncapplication-abstract)
- [\PAMI\AsyncAgi\Event\IAsyncAgiExecEvent (interface)](#interface-pamiasyncagieventiasyncagiexecevent)
- [\PAMI\AsyncAgi\Event\IAsyncAgiStartEvent (interface)](#interface-pamiasyncagieventiasyncagistartevent)
- [\PAMI\Client\IClient (interface)](#interface-pamiclienticlient)
- [\PAMI\Client\Exception\ClientException](#class-pamiclientexceptionclientexception)
- [\PAMI\Client\Impl\ClientImpl](#class-pamiclientimplclientimpl)
- [\PAMI\Client\Impl\ClientImpl](#class-pamiclientimplclientimpl)
- [\PAMI\Client\Impl\ClientImpl](#class-pamiclientimplclientimpl)
- [\PAMI\Exception\PAMIException](#class-pamiexceptionpamiexception)
- [\PAMI\Listener\IEventListener (interface)](#interface-pamilistenerieventlistener)
- [\PAMI\Message\IncomingMessage (abstract)](#class-pamimessageincomingmessage-abstract)
- [\PAMI\Message\OutgoingMessage (abstract)](#class-pamimessageoutgoingmessage-abstract)
- [\PAMI\Message\OutgoingMessage (abstract)](#class-pamimessageoutgoingmessage-abstract)
- [\PAMI\Message\Message (abstract)](#class-pamimessagemessage-abstract)
- [\PAMI\Message\Message (abstract)](#class-pamimessagemessage-abstract)
- [\PAMI\Message\Action\ActionMessage (abstract)](#class-pamimessageactionactionmessage-abstract)
- [\PAMI\Message\Action\AttendedTransferAction](#class-pamimessageactionattendedtransferaction)
- [\PAMI\Message\Action\DongleReloadAction](#class-pamimessageactiondonglereloadaction)
- [\PAMI\Message\Action\DongleResetAction](#class-pamimessageactiondongleresetaction)
- [\PAMI\Message\Action\DongleRestartAction](#class-pamimessageactiondonglerestartaction)
- [\PAMI\Message\Action\DongleSendPDUAction](#class-pamimessageactiondonglesendpduaction)
- [\PAMI\Message\Action\DongleSendSMSAction](#class-pamimessageactiondonglesendsmsaction)
- [\PAMI\Message\Action\DongleSendUSSDAction](#class-pamimessageactiondonglesendussdaction)
- [\PAMI\Message\Action\DongleShowDevicesAction](#class-pamimessageactiondongleshowdevicesaction)
- [\PAMI\Message\Action\DongleStartAction](#class-pamimessageactiondonglestartaction)
- [\PAMI\Message\Action\DongleStopAction](#class-pamimessageactiondonglestopaction)
- [\PAMI\Message\Action\GetVarAction](#class-pamimessageactiongetvaraction)
- [\PAMI\Message\Action\ModuleReloadAction](#class-pamimessageactionmodulereloadaction)
- [\PAMI\Message\Action\ModuleUnloadAction](#class-pamimessageactionmoduleunloadaction)
- [\PAMI\Message\Action\QueueMemberRingInUse](#class-pamimessageactionqueuememberringinuse)
- [\PAMI\Message\Action\QueueUnpauseAction](#class-pamimessageactionqueueunpauseaction)
- [\PAMI\Message\Action\QueuesAction](#class-pamimessageactionqueuesaction)
- [\PAMI\Message\Action\SCCPAnswerCallAction](#class-pamimessageactionsccpanswercallaction)
- [\PAMI\Message\Action\SCCPConferenceAction](#class-pamimessageactionsccpconferenceaction)
- [\PAMI\Message\Action\SCCPConfigMetaDataAction](#class-pamimessageactionsccpconfigmetadataaction)
- [\PAMI\Message\Action\SCCPDeviceAddLineAction](#class-pamimessageactionsccpdeviceaddlineaction)
- [\PAMI\Message\Action\SCCPDeviceRestartAction](#class-pamimessageactionsccpdevicerestartaction)
- [\PAMI\Message\Action\SCCPDeviceSetDNDAction](#class-pamimessageactionsccpdevicesetdndaction)
- [\PAMI\Message\Action\SCCPDeviceUpdateAction](#class-pamimessageactionsccpdeviceupdateaction)
- [\PAMI\Message\Action\SCCPDndDeviceAction](#class-pamimessageactionsccpdnddeviceaction)
- [\PAMI\Message\Action\SCCPHangupCallAction](#class-pamimessageactionsccphangupcallaction)
- [\PAMI\Message\Action\SCCPLineForwardUpdateAction](#class-pamimessageactionsccplineforwardupdateaction)
- [\PAMI\Message\Action\SCCPMessageDeviceAction](#class-pamimessageactionsccpmessagedeviceaction)
- [\PAMI\Message\Action\SCCPMessageDevicesAction](#class-pamimessageactionsccpmessagedevicesaction)
- [\PAMI\Message\Action\SCCPShowChannelsAction](#class-pamimessageactionsccpshowchannelsaction)
- [\PAMI\Message\Action\SCCPShowConferenceAction](#class-pamimessageactionsccpshowconferenceaction)
- [\PAMI\Message\Action\SCCPShowConferencesAction](#class-pamimessageactionsccpshowconferencesaction)
- [\PAMI\Message\Action\SCCPShowDeviceAction](#class-pamimessageactionsccpshowdeviceaction)
- [\PAMI\Message\Action\SCCPShowDevicesAction](#class-pamimessageactionsccpshowdevicesaction)
- [\PAMI\Message\Action\SCCPShowGlobalsAction](#class-pamimessageactionsccpshowglobalsaction)
- [\PAMI\Message\Action\SCCPShowHintLineStatesAction](#class-pamimessageactionsccpshowhintlinestatesaction)
- [\PAMI\Message\Action\SCCPShowHintSubscriptionsAction](#class-pamimessageactionsccpshowhintsubscriptionsaction)
- [\PAMI\Message\Action\SCCPShowLineAction](#class-pamimessageactionsccpshowlineaction)
- [\PAMI\Message\Action\SCCPShowLinesAction](#class-pamimessageactionsccpshowlinesaction)
- [\PAMI\Message\Action\SCCPShowMWISubscriptionsAction](#class-pamimessageactionsccpshowmwisubscriptionsaction)
- [\PAMI\Message\Action\SCCPShowSessionsAction](#class-pamimessageactionsccpshowsessionsaction)
- [\PAMI\Message\Action\SCCPShowSoftkeySetsAction](#class-pamimessageactionsccpshowsoftkeysetsaction)
- [\PAMI\Message\Action\SCCPSystemMessageAction](#class-pamimessageactionsccpsystemmessageaction)
- [\PAMI\Message\Action\SCCPTokenAckAction](#class-pamimessageactionsccptokenackaction)
- [\PAMI\Message\Action\SIPNotifyAction](#class-pamimessageactionsipnotifyaction)
- [\PAMI\Message\Action\SIPQualifyPeerAction](#class-pamimessageactionsipqualifypeeraction)
- [\PAMI\Message\Action\SIPShowPeerAction](#class-pamimessageactionsipshowpeeraction)
- [\PAMI\Message\Action\SIPShowRegistryAction](#class-pamimessageactionsipshowregistryaction)
- [\PAMI\Message\Action\SetVarAction](#class-pamimessageactionsetvaraction)
- [\PAMI\Message\Action\VGSMSMSTxAction](#class-pamimessageactionvgsmsmstxaction)
- [\PAMI\Message\Action\DialplanExtensionAddAction](#class-pamimessageactiondialplanextensionaddaction)
- [\PAMI\Message\Action\BridgeDestroyAction](#class-pamimessageactionbridgedestroyaction)
- [\PAMI\Message\Action\BridgeKickAction](#class-pamimessageactionbridgekickaction)
- [\PAMI\Message\Action\BridgeTechnologyListAction](#class-pamimessageactionbridgetechnologylistaction)
- [\PAMI\Message\Action\BridgeTechnologySuspendAction](#class-pamimessageactionbridgetechnologysuspendaction)
- [\PAMI\Message\Action\BridgeTechnologyUnsuspendAction](#class-pamimessageactionbridgetechnologyunsuspendaction)
- [\PAMI\Message\Action\CancelAtxferAction](#class-pamimessageactioncancelatxferaction)
- [\PAMI\Message\Action\ConfbridgeSetSingleVideoSrcAction](#class-pamimessageactionconfbridgesetsinglevideosrcaction)
- [\PAMI\Message\Action\ControlPlaybackAction](#class-pamimessageactioncontrolplaybackaction)
- [\PAMI\Message\Action\DeviceStateListAction](#class-pamimessageactiondevicestatelistaction)
- [\PAMI\Message\Action\ExtensionStateListAction](#class-pamimessageactionextensionstatelistaction)
- [\PAMI\Message\Action\FAXSessionAction](#class-pamimessageactionfaxsessionaction)
- [\PAMI\Message\Action\FAXSessionsAction](#class-pamimessageactionfaxsessionsaction)
- [\PAMI\Message\Action\FAXStatsAction](#class-pamimessageactionfaxstatsaction)
- [\PAMI\Message\Action\FilterAction](#class-pamimessageactionfilteraction)
- [\PAMI\Message\Action\IAXnetstatsAction](#class-pamimessageactioniaxnetstatsaction)
- [\PAMI\Message\Action\IAXpeerlistAction](#class-pamimessageactioniaxpeerlistaction)
- [\PAMI\Message\Action\IAXpeersAction](#class-pamimessageactioniaxpeersaction)
- [\PAMI\Message\Action\IAXregistryAction](#class-pamimessageactioniaxregistryaction)
- [\PAMI\Message\Action\LoggerRotateAction](#class-pamimessageactionloggerrotateaction)
- [\PAMI\Message\Action\MWIDeleteAction](#class-pamimessageactionmwideleteaction)
- [\PAMI\Message\Action\MWIGetAction](#class-pamimessageactionmwigetaction)
- [\PAMI\Message\Action\MWIUpdateAction](#class-pamimessageactionmwiupdateaction)
- [\PAMI\Message\Action\MeetmeListRoomsAction](#class-pamimessageactionmeetmelistroomsaction)
- [\PAMI\Message\Action\MuteAudioAction](#class-pamimessageactionmuteaudioaction)
- [\PAMI\Message\Action\PJSIPNotifyAction](#class-pamimessageactionpjsipnotifyaction)
- [\PAMI\Message\Action\PJSIPShowAorsAction](#class-pamimessageactionpjsipshowaorsaction)
- [\PAMI\Message\Action\PJSIPShowAuthsAction](#class-pamimessageactionpjsipshowauthsaction)
- [\PAMI\Message\Action\PJSIPShowContactsAction](#class-pamimessageactionpjsipshowcontactsaction)
- [\PAMI\Message\Action\PJSIPShowRegistrationInboundContactStatusesAction](#class-pamimessageactionpjsipshowregistrationinboundcontactstatusesaction)
- [\PAMI\Message\Action\PRIDebugFileSetAction](#class-pamimessageactionpridebugfilesetaction)
- [\PAMI\Message\Action\PRIDebugFileUnsetAction](#class-pamimessageactionpridebugfileunsetaction)
- [\PAMI\Message\Action\PRIDebugSetAction](#class-pamimessageactionpridebugsetaction)
- [\PAMI\Message\Action\PRIShowSpansAction](#class-pamimessageactionprishowspansaction)
- [\PAMI\Message\Action\ParkinglotsAction](#class-pamimessageactionparkinglotsaction)
- [\PAMI\Message\Action\PresenceStateAction](#class-pamimessageactionpresencestateaction)
- [\PAMI\Message\Action\PresenceStateListAction](#class-pamimessageactionpresencestatelistaction)
- [\PAMI\Message\Action\QueueChangePriorityCallerAction](#class-pamimessageactionqueuechangeprioritycalleraction)
- [\PAMI\Message\Action\QueueMemberRingInUseAction](#class-pamimessageactionqueuememberringinuseaction)
- [\PAMI\Message\Action\SIPpeerstatusAction](#class-pamimessageactionsippeerstatusaction)
- [\PAMI\Message\Action\SKINNYdevicesAction](#class-pamimessageactionskinnydevicesaction)
- [\PAMI\Message\Action\SKINNYlinesAction](#class-pamimessageactionskinnylinesaction)
- [\PAMI\Message\Action\SKINNYshowdeviceAction](#class-pamimessageactionskinnyshowdeviceaction)
- [\PAMI\Message\Action\SKINNYshowlineAction](#class-pamimessageactionskinnyshowlineaction)
- [\PAMI\Message\Action\SorceryMemoryCacheExpireAction](#class-pamimessageactionsorcerymemorycacheexpireaction)
- [\PAMI\Message\Action\SorceryMemoryCacheExpireObjectAction](#class-pamimessageactionsorcerymemorycacheexpireobjectaction)
- [\PAMI\Message\Action\SorceryMemoryCachePopulateAction](#class-pamimessageactionsorcerymemorycachepopulateaction)
- [\PAMI\Message\Action\SorceryMemoryCacheStaleAction](#class-pamimessageactionsorcerymemorycachestaleaction)
- [\PAMI\Message\Action\SorceryMemoryCacheStaleObjectAction](#class-pamimessageactionsorcerymemorycachestaleobjectaction)
- [\PAMI\Message\Action\VoicemailRefreshAction](#class-pamimessageactionvoicemailrefreshaction)
- [\PAMI\Message\Action\VoicemailUserStatusAction](#class-pamimessageactionvoicemailuserstatusaction)
- [\PAMI\Message\Action\AttendedTransferAction](#class-pamimessageactionattendedtransferaction)
- [\PAMI\Message\Action\DAHDIDialOffhookAction](#class-pamimessageactiondahdidialoffhookaction)
- [\PAMI\Message\Action\DAHDIDNDoffAction](#class-pamimessageactiondahdidndoffaction)
- [\PAMI\Message\Action\DAHDIDNDonAction](#class-pamimessageactiondahdidndonaction)
- [\PAMI\Message\Action\SIPPeersAction](#class-pamimessageactionsippeersaction)
- [\PAMI\Message\Action\SIPPeersAction](#class-pamimessageactionsippeersaction)
- [\PAMI\Message\Action\ConfbridgeStartRecordAction](#class-pamimessageactionconfbridgestartrecordaction)
- [\PAMI\Message\Action\MixMonitorAction](#class-pamimessageactionmixmonitoraction)
- [\PAMI\Message\Action\AGIAction](#class-pamimessageactionagiaction)
- [\PAMI\Message\Action\AbsoluteTimeoutAction](#class-pamimessageactionabsolutetimeoutaction)
- [\PAMI\Message\Action\AgentLogoffAction](#class-pamimessageactionagentlogoffaction)
- [\PAMI\Message\Action\AgentsAction](#class-pamimessageactionagentsaction)
- [\PAMI\Message\Action\BlindTransferAction](#class-pamimessageactionblindtransferaction)
- [\PAMI\Message\Action\BridgeAction](#class-pamimessageactionbridgeaction)
- [\PAMI\Message\Action\BridgeInfoAction](#class-pamimessageactionbridgeinfoaction)
- [\PAMI\Message\Action\BridgeListAction](#class-pamimessageactionbridgelistaction)
- [\PAMI\Message\Action\ChallengeAction](#class-pamimessageactionchallengeaction)
- [\PAMI\Message\Action\ChangeMonitorAction](#class-pamimessageactionchangemonitoraction)
- [\PAMI\Message\Action\CommandAction](#class-pamimessageactioncommandaction)
- [\PAMI\Message\Action\ConfbridgeKickAction](#class-pamimessageactionconfbridgekickaction)
- [\PAMI\Message\Action\ConfBridgeListAction](#class-pamimessageactionconfbridgelistaction)
- [\PAMI\Message\Action\ConfbridgeListRoomsAction](#class-pamimessageactionconfbridgelistroomsaction)
- [\PAMI\Message\Action\ConfbridgeLockAction](#class-pamimessageactionconfbridgelockaction)
- [\PAMI\Message\Action\ConfbridgeMuteAction](#class-pamimessageactionconfbridgemuteaction)
- [\PAMI\Message\Action\ConfbridgeStartRecordAction](#class-pamimessageactionconfbridgestartrecordaction)
- [\PAMI\Message\Action\ConfbridgeStopRecordAction](#class-pamimessageactionconfbridgestoprecordaction)
- [\PAMI\Message\Action\ConfbridgeUnlockAction](#class-pamimessageactionconfbridgeunlockaction)
- [\PAMI\Message\Action\ConfbridgeUnmuteAction](#class-pamimessageactionconfbridgeunmuteaction)
- [\PAMI\Message\Action\CoreSettingsAction](#class-pamimessageactioncoresettingsaction)
- [\PAMI\Message\Action\CoreShowChannelsAction](#class-pamimessageactioncoreshowchannelsaction)
- [\PAMI\Message\Action\CoreStatusAction](#class-pamimessageactioncorestatusaction)
- [\PAMI\Message\Action\CreateConfigAction](#class-pamimessageactioncreateconfigaction)
- [\PAMI\Message\Action\DAHDIHangupAction](#class-pamimessageactiondahdihangupaction)
- [\PAMI\Message\Action\DAHDIRestartAction](#class-pamimessageactiondahdirestartaction)
- [\PAMI\Message\Action\DAHDIShowChannelsAction](#class-pamimessageactiondahdishowchannelsaction)
- [\PAMI\Message\Action\DAHDITransferAction](#class-pamimessageactiondahditransferaction)
- [\PAMI\Message\Action\DBDelAction](#class-pamimessageactiondbdelaction)
- [\PAMI\Message\Action\DBDelTreeAction](#class-pamimessageactiondbdeltreeaction)
- [\PAMI\Message\Action\DBGetAction](#class-pamimessageactiondbgetaction)
- [\PAMI\Message\Action\DBPutAction](#class-pamimessageactiondbputaction)
- [\PAMI\Message\Action\DialplanExtensionAddAction](#class-pamimessageactiondialplanextensionaddaction)
- [\PAMI\Message\Action\DialplanExtensionRemoveAction](#class-pamimessageactiondialplanextensionremoveaction)
- [\PAMI\Message\Action\EventsAction](#class-pamimessageactioneventsaction)
- [\PAMI\Message\Action\ExtensionStateAction](#class-pamimessageactionextensionstateaction)
- [\PAMI\Message\Action\GetConfigAction](#class-pamimessageactiongetconfigaction)
- [\PAMI\Message\Action\GetConfigJSONAction](#class-pamimessageactiongetconfigjsonaction)
- [\PAMI\Message\Action\HangupAction](#class-pamimessageactionhangupaction)
- [\PAMI\Message\Action\JabberSendAction](#class-pamimessageactionjabbersendaction)
- [\PAMI\Message\Action\ListCategoriesAction](#class-pamimessageactionlistcategoriesaction)
- [\PAMI\Message\Action\ListCommandsAction](#class-pamimessageactionlistcommandsaction)
- [\PAMI\Message\Action\LocalOptimizeAwayAction](#class-pamimessageactionlocaloptimizeawayaction)
- [\PAMI\Message\Action\LoginAction](#class-pamimessageactionloginaction)
- [\PAMI\Message\Action\LogoffAction](#class-pamimessageactionlogoffaction)
- [\PAMI\Message\Action\MailboxCountAction](#class-pamimessageactionmailboxcountaction)
- [\PAMI\Message\Action\MailboxStatusAction](#class-pamimessageactionmailboxstatusaction)
- [\PAMI\Message\Action\MeetmeListAction](#class-pamimessageactionmeetmelistaction)
- [\PAMI\Message\Action\MeetmeMuteAction](#class-pamimessageactionmeetmemuteaction)
- [\PAMI\Message\Action\MeetmeUnmuteAction](#class-pamimessageactionmeetmeunmuteaction)
- [\PAMI\Message\Action\MixMonitorAction](#class-pamimessageactionmixmonitoraction)
- [\PAMI\Message\Action\MixMonitorMuteAction](#class-pamimessageactionmixmonitormuteaction)
- [\PAMI\Message\Action\ModuleCheckAction](#class-pamimessageactionmodulecheckaction)
- [\PAMI\Message\Action\ModuleLoadAction](#class-pamimessageactionmoduleloadaction)
- [\PAMI\Message\Action\MonitorAction](#class-pamimessageactionmonitoraction)
- [\PAMI\Message\Action\OriginateAction](#class-pamimessageactionoriginateaction)
- [\PAMI\Message\Action\PJSIPQualifyAction](#class-pamimessageactionpjsipqualifyaction)
- [\PAMI\Message\Action\PJSIPRegisterAction](#class-pamimessageactionpjsipregisteraction)
- [\PAMI\Message\Action\PJSIPShowEndpointAction](#class-pamimessageactionpjsipshowendpointaction)
- [\PAMI\Message\Action\PJSIPShowEndpointsAction](#class-pamimessageactionpjsipshowendpointsaction)
- [\PAMI\Message\Action\PJSIPShowRegistrationsInboundAction](#class-pamimessageactionpjsipshowregistrationsinboundaction)
- [\PAMI\Message\Action\PJSIPShowRegistrationsOutboundAction](#class-pamimessageactionpjsipshowregistrationsoutboundaction)
- [\PAMI\Message\Action\PJSIPShowResourceListsAction](#class-pamimessageactionpjsipshowresourcelistsaction)
- [\PAMI\Message\Action\PJSIPShowSubscriptionsInboundAction](#class-pamimessageactionpjsipshowsubscriptionsinboundaction)
- [\PAMI\Message\Action\PJSIPShowSubscriptionsOutboundAction](#class-pamimessageactionpjsipshowsubscriptionsoutboundaction)
- [\PAMI\Message\Action\PJSIPUnregisterAction](#class-pamimessageactionpjsipunregisteraction)
- [\PAMI\Message\Action\ParkAction](#class-pamimessageactionparkaction)
- [\PAMI\Message\Action\ParkedCallsAction](#class-pamimessageactionparkedcallsaction)
- [\PAMI\Message\Action\PauseMonitorAction](#class-pamimessageactionpausemonitoraction)
- [\PAMI\Message\Action\PingAction](#class-pamimessageactionpingaction)
- [\PAMI\Message\Action\PlayDTMFAction](#class-pamimessageactionplaydtmfaction)
- [\PAMI\Message\Action\QueueAddAction](#class-pamimessageactionqueueaddaction)
- [\PAMI\Message\Action\QueueLogAction](#class-pamimessageactionqueuelogaction)
- [\PAMI\Message\Action\QueuePauseAction](#class-pamimessageactionqueuepauseaction)
- [\PAMI\Message\Action\QueuePenaltyAction](#class-pamimessageactionqueuepenaltyaction)
- [\PAMI\Message\Action\QueueReloadAction](#class-pamimessageactionqueuereloadaction)
- [\PAMI\Message\Action\QueueRemoveAction](#class-pamimessageactionqueueremoveaction)
- [\PAMI\Message\Action\QueueResetAction](#class-pamimessageactionqueueresetaction)
- [\PAMI\Message\Action\QueueRuleAction](#class-pamimessageactionqueueruleaction)
- [\PAMI\Message\Action\QueueStatusAction](#class-pamimessageactionqueuestatusaction)
- [\PAMI\Message\Action\QueueSummaryAction](#class-pamimessageactionqueuesummaryaction)
- [\PAMI\Message\Action\RedirectAction](#class-pamimessageactionredirectaction)
- [\PAMI\Message\Action\ReloadAction](#class-pamimessageactionreloadaction)
- [\PAMI\Message\Action\SendTextAction](#class-pamimessageactionsendtextaction)
- [\PAMI\Message\Action\ShowDialPlanAction](#class-pamimessageactionshowdialplanaction)
- [\PAMI\Message\Action\StatusAction](#class-pamimessageactionstatusaction)
- [\PAMI\Message\Action\StopMixMonitorAction](#class-pamimessageactionstopmixmonitoraction)
- [\PAMI\Message\Action\StopMonitorAction](#class-pamimessageactionstopmonitoraction)
- [\PAMI\Message\Action\UnpauseMonitorAction](#class-pamimessageactionunpausemonitoraction)
- [\PAMI\Message\Action\UpdateConfigAction](#class-pamimessageactionupdateconfigaction)
- [\PAMI\Message\Action\UserEventAction](#class-pamimessageactionusereventaction)
- [\PAMI\Message\Action\VoicemailUsersListAction](#class-pamimessageactionvoicemailuserslistaction)
- [\PAMI\Message\Action\WaitEventAction](#class-pamimessageactionwaiteventaction)
- [\PAMI\Message\Action\DAHDIShowChannelsAction](#class-pamimessageactiondahdishowchannelsaction)
- [\PAMI\Message\Action\StatusAction](#class-pamimessageactionstatusaction)
- [\PAMI\Message\Action\SCCPHoldCallAction](#class-pamimessageactionsccpholdcallaction)
- [\PAMI\Message\Action\SCCPStartCallAction](#class-pamimessageactionsccpstartcallaction)
- [\PAMI\Message\Action\SCCPStartCallAction](#class-pamimessageactionsccpstartcallaction)
- [\PAMI\Message\Event\AGIExecEvent](#class-pamimessageeventagiexecevent)
- [\PAMI\Message\Event\AsyncAGIEvent](#class-pamimessageeventasyncagievent)
- [\PAMI\Message\Event\BridgeEvent](#class-pamimessageeventbridgeevent)
- [\PAMI\Message\Event\BridgeListItemEvent](#class-pamimessageeventbridgelistitemevent)
- [\PAMI\Message\Event\CallAnsweredEvent](#class-pamimessageeventcallansweredevent)
- [\PAMI\Message\Event\CallForwardEvent](#class-pamimessageeventcallforwardevent)
- [\PAMI\Message\Event\ChannelUpdateEvent](#class-pamimessageeventchannelupdateevent)
- [\PAMI\Message\Event\ConfbridgeListCompleteEvent](#class-pamimessageeventconfbridgelistcompleteevent)
- [\PAMI\Message\Event\ConfbridgeListRoomsCompleteEvent](#class-pamimessageeventconfbridgelistroomscompleteevent)
- [\PAMI\Message\Event\ConfbridgeListRoomsEvent](#class-pamimessageeventconfbridgelistroomsevent)
- [\PAMI\Message\Event\DAHDIShowChannelsCompleteEvent](#class-pamimessageeventdahdishowchannelscompleteevent)
- [\PAMI\Message\Event\DAHDIShowChannelsEvent](#class-pamimessageeventdahdishowchannelsevent)
- [\PAMI\Message\Event\DBGetResponseEvent](#class-pamimessageeventdbgetresponseevent)
- [\PAMI\Message\Event\DNDEvent](#class-pamimessageeventdndevent)
- [\PAMI\Message\Event\DTMFBeginEvent](#class-pamimessageeventdtmfbeginevent)
- [\PAMI\Message\Event\DTMFEndEvent](#class-pamimessageeventdtmfendevent)
- [\PAMI\Message\Event\DTMFEvent](#class-pamimessageeventdtmfevent)
- [\PAMI\Message\Event\DeviceStateChangeEvent](#class-pamimessageeventdevicestatechangeevent)
- [\PAMI\Message\Event\DeviceStatusEvent](#class-pamimessageeventdevicestatusevent)
- [\PAMI\Message\Event\DialEvent](#class-pamimessageeventdialevent)
- [\PAMI\Message\Event\DongleDeviceEntryEvent](#class-pamimessageeventdongledeviceentryevent)
- [\PAMI\Message\Event\DongleNewCUSDEvent](#class-pamimessageeventdonglenewcusdevent)
- [\PAMI\Message\Event\DongleNewUSSDBase64Event](#class-pamimessageeventdonglenewussdbase64event)
- [\PAMI\Message\Event\DongleNewUSSDEvent](#class-pamimessageeventdonglenewussdevent)
- [\PAMI\Message\Event\DongleSMSStatusEvent](#class-pamimessageeventdonglesmsstatusevent)
- [\PAMI\Message\Event\DongleShowDevicesCompleteEvent](#class-pamimessageeventdongleshowdevicescompleteevent)
- [\PAMI\Message\Event\DongleStatusEvent](#class-pamimessageeventdonglestatusevent)
- [\PAMI\Message\Event\DongleUSSDStatusEvent](#class-pamimessageeventdongleussdstatusevent)
- [\PAMI\Message\Event\EventMessage (abstract)](#class-pamimessageeventeventmessage-abstract)
- [\PAMI\Message\Event\IdentifyDetailEvent](#class-pamimessageeventidentifydetailevent)
- [\PAMI\Message\Event\InboundRegistrationDetailEvent](#class-pamimessageeventinboundregistrationdetailevent)
- [\PAMI\Message\Event\JabberEventEvent](#class-pamimessageeventjabbereventevent)
- [\PAMI\Message\Event\JoinEvent](#class-pamimessageeventjoinevent)
- [\PAMI\Message\Event\LeaveEvent](#class-pamimessageeventleaveevent)
- [\PAMI\Message\Event\LinkEvent](#class-pamimessageeventlinkevent)
- [\PAMI\Message\Event\ListDialPlanEvent](#class-pamimessageeventlistdialplanevent)
- [\PAMI\Message\Event\MasqueradeEvent](#class-pamimessageeventmasqueradeevent)
- [\PAMI\Message\Event\MessageWaitingEvent](#class-pamimessageeventmessagewaitingevent)
- [\PAMI\Message\Event\MusicOnHoldEvent](#class-pamimessageeventmusiconholdevent)
- [\PAMI\Message\Event\OutboundRegistrationDetailEvent](#class-pamimessageeventoutboundregistrationdetailevent)
- [\PAMI\Message\Event\OutboundSubscriptionDetailEvent](#class-pamimessageeventoutboundsubscriptiondetailevent)
- [\PAMI\Message\Event\ParkedCallsCompleteEvent](#class-pamimessageeventparkedcallscompleteevent)
- [\PAMI\Message\Event\PeerEntryEvent](#class-pamimessageeventpeerentryevent)
- [\PAMI\Message\Event\PeerlistCompleteEvent](#class-pamimessageeventpeerlistcompleteevent)
- [\PAMI\Message\Event\QueueEntryEvent](#class-pamimessageeventqueueentryevent)
- [\PAMI\Message\Event\QueueMemberEvent](#class-pamimessageeventqueuememberevent)
- [\PAMI\Message\Event\QueueMemberPausedEvent](#class-pamimessageeventqueuememberpausedevent)
- [\PAMI\Message\Event\QueueParamsEvent](#class-pamimessageeventqueueparamsevent)
- [\PAMI\Message\Event\QueueStatusCompleteEvent](#class-pamimessageeventqueuestatuscompleteevent)
- [\PAMI\Message\Event\QueueSummaryCompleteEvent](#class-pamimessageeventqueuesummarycompleteevent)
- [\PAMI\Message\Event\QueueSummaryEvent](#class-pamimessageeventqueuesummaryevent)
- [\PAMI\Message\Event\RTCPReceiverStatEvent](#class-pamimessageeventrtcpreceiverstatevent)
- [\PAMI\Message\Event\RTPReceiverStatEvent](#class-pamimessageeventrtpreceiverstatevent)
- [\PAMI\Message\Event\RTPSenderStatEvent](#class-pamimessageeventrtpsenderstatevent)
- [\PAMI\Message\Event\RegistrationsCompleteEvent](#class-pamimessageeventregistrationscompleteevent)
- [\PAMI\Message\Event\RenameEvent](#class-pamimessageeventrenameevent)
- [\PAMI\Message\Event\ResourceListDetailEvent](#class-pamimessageeventresourcelistdetailevent)
- [\PAMI\Message\Event\SCCPAttachedDeviceEntryEvent](#class-pamimessageeventsccpattacheddeviceentryevent)
- [\PAMI\Message\Event\SCCPChannelEntryEvent](#class-pamimessageeventsccpchannelentryevent)
- [\PAMI\Message\Event\SCCPConfEndEvent](#class-pamimessageeventsccpconfendevent)
- [\PAMI\Message\Event\SCCPConfEnteredEvent](#class-pamimessageeventsccpconfenteredevent)
- [\PAMI\Message\Event\SCCPConfLeaveEvent](#class-pamimessageeventsccpconfleaveevent)
- [\PAMI\Message\Event\SCCPConfLeftEvent](#class-pamimessageeventsccpconfleftevent)
- [\PAMI\Message\Event\SCCPConfLockEvent](#class-pamimessageeventsccpconflockevent)
- [\PAMI\Message\Event\SCCPConfParticipantKickedEvent](#class-pamimessageeventsccpconfparticipantkickedevent)
- [\PAMI\Message\Event\SCCPConfParticipantMuteEvent](#class-pamimessageeventsccpconfparticipantmuteevent)
- [\PAMI\Message\Event\SCCPConfParticipantPromotionEvent](#class-pamimessageeventsccpconfparticipantpromotionevent)
- [\PAMI\Message\Event\SCCPConfStartEvent](#class-pamimessageeventsccpconfstartevent)
- [\PAMI\Message\Event\SCCPConfStartedEvent](#class-pamimessageeventsccpconfstartedevent)
- [\PAMI\Message\Event\SCCPConferenceEntryEvent](#class-pamimessageeventsccpconferenceentryevent)
- [\PAMI\Message\Event\SCCPDeviceButtonEntryEvent](#class-pamimessageeventsccpdevicebuttonentryevent)
- [\PAMI\Message\Event\SCCPDeviceEntryEvent](#class-pamimessageeventsccpdeviceentryevent)
- [\PAMI\Message\Event\SCCPDeviceFeatureEntryEvent](#class-pamimessageeventsccpdevicefeatureentryevent)
- [\PAMI\Message\Event\SCCPDeviceLineEntryEvent](#class-pamimessageeventsccpdevicelineentryevent)
- [\PAMI\Message\Event\SCCPDeviceServiceURLEntryEvent](#class-pamimessageeventsccpdeviceserviceurlentryevent)
- [\PAMI\Message\Event\SCCPDeviceSpeeddialEntryEvent](#class-pamimessageeventsccpdevicespeeddialentryevent)
- [\PAMI\Message\Event\SCCPDeviceStatisticsEntryEvent](#class-pamimessageeventsccpdevicestatisticsentryevent)
- [\PAMI\Message\Event\SCCPHintLineStateEntryEvent](#class-pamimessageeventsccphintlinestateentryevent)
- [\PAMI\Message\Event\SCCPHintSubscriptionEntryEvent](#class-pamimessageeventsccphintsubscriptionentryevent)
- [\PAMI\Message\Event\SCCPLineEntryEvent](#class-pamimessageeventsccplineentryevent)
- [\PAMI\Message\Event\SCCPMailboxEntryEvent](#class-pamimessageeventsccpmailboxentryevent)
- [\PAMI\Message\Event\SCCPMailboxSubscriberEntryEvent](#class-pamimessageeventsccpmailboxsubscriberentryevent)
- [\PAMI\Message\Event\SCCPSessionEntryEvent](#class-pamimessageeventsccpsessionentryevent)
- [\PAMI\Message\Event\SCCPShowChannelsCompleteEvent](#class-pamimessageeventsccpshowchannelscompleteevent)
- [\PAMI\Message\Event\SCCPShowConferencesCompleteEvent](#class-pamimessageeventsccpshowconferencescompleteevent)
- [\PAMI\Message\Event\SCCPShowDeviceCompleteEvent](#class-pamimessageeventsccpshowdevicecompleteevent)
- [\PAMI\Message\Event\SCCPShowDeviceEvent](#class-pamimessageeventsccpshowdeviceevent)
- [\PAMI\Message\Event\SCCPShowDevicesCompleteEvent](#class-pamimessageeventsccpshowdevicescompleteevent)
- [\PAMI\Message\Event\SCCPShowHintLineStatesCompleteEvent](#class-pamimessageeventsccpshowhintlinestatescompleteevent)
- [\PAMI\Message\Event\SCCPShowHintSubscriptionsCompleteEvent](#class-pamimessageeventsccpshowhintsubscriptionscompleteevent)
- [\PAMI\Message\Event\SCCPShowLineCompleteEvent](#class-pamimessageeventsccpshowlinecompleteevent)
- [\PAMI\Message\Event\SCCPShowLineEvent](#class-pamimessageeventsccpshowlineevent)
- [\PAMI\Message\Event\SCCPShowLinesCompleteEvent](#class-pamimessageeventsccpshowlinescompleteevent)
- [\PAMI\Message\Event\SCCPShowMWISubscriptionsCompleteEvent](#class-pamimessageeventsccpshowmwisubscriptionscompleteevent)
- [\PAMI\Message\Event\SCCPShowSessionsCompleteEvent](#class-pamimessageeventsccpshowsessionscompleteevent)
- [\PAMI\Message\Event\SCCPShowSoftKeySetsCompleteEvent](#class-pamimessageeventsccpshowsoftkeysetscompleteevent)
- [\PAMI\Message\Event\SCCPSoftKeySetEntryEvent](#class-pamimessageeventsccpsoftkeysetentryevent)
- [\PAMI\Message\Event\ShowDialPlanCompleteEvent](#class-pamimessageeventshowdialplancompleteevent)
- [\PAMI\Message\Event\SuccessEvent](#class-pamimessageeventsuccessevent)
- [\PAMI\Message\Event\TableEndEvent](#class-pamimessageeventtableendevent)
- [\PAMI\Message\Event\TableStartEvent](#class-pamimessageeventtablestartevent)
- [\PAMI\Message\Event\TransferEvent](#class-pamimessageeventtransferevent)
- [\PAMI\Message\Event\UnknownEvent](#class-pamimessageeventunknownevent)
- [\PAMI\Message\Event\UnlinkEvent](#class-pamimessageeventunlinkevent)
- [\PAMI\Message\Event\VgsmMeStateEvent](#class-pamimessageeventvgsmmestateevent)
- [\PAMI\Message\Event\VgsmNetStateEvent](#class-pamimessageeventvgsmnetstateevent)
- [\PAMI\Message\Event\VgsmSmsRxEvent](#class-pamimessageeventvgsmsmsrxevent)
- [\PAMI\Message\Event\VoicemailUserEntryCompleteEvent](#class-pamimessageeventvoicemailuserentrycompleteevent)
- [\PAMI\Message\Event\VoicemailUserEntryEvent](#class-pamimessageeventvoicemailuserentryevent)
- [\PAMI\Message\Event\SCCPVariableEntryEvent](#class-pamimessageeventsccpvariableentryevent)
- [\PAMI\Message\Event\MCIDEvent](#class-pamimessageeventmcidevent)
- [\PAMI\Message\Event\AgentCalledEvent](#class-pamimessageeventagentcalledevent)
- [\PAMI\Message\Event\AgentCompleteEvent](#class-pamimessageeventagentcompleteevent)
- [\PAMI\Message\Event\AgentDumpEvent](#class-pamimessageeventagentdumpevent)
- [\PAMI\Message\Event\AgentRingNoAnswerEvent](#class-pamimessageeventagentringnoanswerevent)
- [\PAMI\Message\Event\AlarmClearEvent](#class-pamimessageeventalarmclearevent)
- [\PAMI\Message\Event\AlarmEvent](#class-pamimessageeventalarmevent)
- [\PAMI\Message\Event\AorListCompleteEvent](#class-pamimessageeventaorlistcompleteevent)
- [\PAMI\Message\Event\AorListEvent](#class-pamimessageeventaorlistevent)
- [\PAMI\Message\Event\AuthListCompleteEvent](#class-pamimessageeventauthlistcompleteevent)
- [\PAMI\Message\Event\AuthListEvent](#class-pamimessageeventauthlistevent)
- [\PAMI\Message\Event\AuthMethodNotAllowedEvent](#class-pamimessageeventauthmethodnotallowedevent)
- [\PAMI\Message\Event\BridgeVideoSourceUpdateEvent](#class-pamimessageeventbridgevideosourceupdateevent)
- [\PAMI\Message\Event\ChallengeResponseFailedEvent](#class-pamimessageeventchallengeresponsefailedevent)
- [\PAMI\Message\Event\ChallengeSentEvent](#class-pamimessageeventchallengesentevent)
- [\PAMI\Message\Event\ChannelTalkingStartEvent](#class-pamimessageeventchanneltalkingstartevent)
- [\PAMI\Message\Event\ChannelTalkingStopEvent](#class-pamimessageeventchanneltalkingstopevent)
- [\PAMI\Message\Event\ChanSpyStartEvent](#class-pamimessageeventchanspystartevent)
- [\PAMI\Message\Event\ChanSpyStopEvent](#class-pamimessageeventchanspystopevent)
- [\PAMI\Message\Event\ConfbridgeRecordEvent](#class-pamimessageeventconfbridgerecordevent)
- [\PAMI\Message\Event\ConfbridgeStopRecordEvent](#class-pamimessageeventconfbridgestoprecordevent)
- [\PAMI\Message\Event\ContactListCompleteEvent](#class-pamimessageeventcontactlistcompleteevent)
- [\PAMI\Message\Event\ContactListEvent](#class-pamimessageeventcontactlistevent)
- [\PAMI\Message\Event\ContactStatusEvent](#class-pamimessageeventcontactstatusevent)
- [\PAMI\Message\Event\DeviceStateListCompleteEvent](#class-pamimessageeventdevicestatelistcompleteevent)
- [\PAMI\Message\Event\DialStateEvent](#class-pamimessageeventdialstateevent)
- [\PAMI\Message\Event\EndpointDetailCompleteEvent](#class-pamimessageeventendpointdetailcompleteevent)
- [\PAMI\Message\Event\ExtensionStateListCompleteEvent](#class-pamimessageeventextensionstatelistcompleteevent)
- [\PAMI\Message\Event\FailedACLEvent](#class-pamimessageeventfailedaclevent)
- [\PAMI\Message\Event\FAXSessionEvent](#class-pamimessageeventfaxsessionevent)
- [\PAMI\Message\Event\FAXSessionsCompleteEvent](#class-pamimessageeventfaxsessionscompleteevent)
- [\PAMI\Message\Event\FAXSessionsEntryEvent](#class-pamimessageeventfaxsessionsentryevent)
- [\PAMI\Message\Event\FAXStatsEvent](#class-pamimessageeventfaxstatsevent)
- [\PAMI\Message\Event\FAXStatusEvent](#class-pamimessageeventfaxstatusevent)
- [\PAMI\Message\Event\HangupHandlerPopEvent](#class-pamimessageeventhanguphandlerpopevent)
- [\PAMI\Message\Event\HangupHandlerPushEvent](#class-pamimessageeventhanguphandlerpushevent)
- [\PAMI\Message\Event\HangupHandlerRunEvent](#class-pamimessageeventhanguphandlerrunevent)
- [\PAMI\Message\Event\HangupRequestEvent](#class-pamimessageeventhanguprequestevent)
- [\PAMI\Message\Event\InvalidAccountIDEvent](#class-pamimessageeventinvalidaccountidevent)
- [\PAMI\Message\Event\InvalidPasswordEvent](#class-pamimessageeventinvalidpasswordevent)
- [\PAMI\Message\Event\InvalidTransportEvent](#class-pamimessageeventinvalidtransportevent)
- [\PAMI\Message\Event\LoadAverageLimitEvent](#class-pamimessageeventloadaveragelimitevent)
- [\PAMI\Message\Event\LoadEvent](#class-pamimessageeventloadevent)
- [\PAMI\Message\Event\LocalBridgeEvent](#class-pamimessageeventlocalbridgeevent)
- [\PAMI\Message\Event\LocalOptimizationBeginEvent](#class-pamimessageeventlocaloptimizationbeginevent)
- [\PAMI\Message\Event\LocalOptimizationEndEvent](#class-pamimessageeventlocaloptimizationendevent)
- [\PAMI\Message\Event\MeetmeEndEvent](#class-pamimessageeventmeetmeendevent)
- [\PAMI\Message\Event\MeetmeJoinEvent](#class-pamimessageeventmeetmejoinevent)
- [\PAMI\Message\Event\MeetmeLeaveEvent](#class-pamimessageeventmeetmeleaveevent)
- [\PAMI\Message\Event\MeetmeMuteEvent](#class-pamimessageeventmeetmemuteevent)
- [\PAMI\Message\Event\MeetmeTalkingEvent](#class-pamimessageeventmeetmetalkingevent)
- [\PAMI\Message\Event\MeetmeTalkRequestEvent](#class-pamimessageeventmeetmetalkrequestevent)
- [\PAMI\Message\Event\MemoryLimitEvent](#class-pamimessageeventmemorylimitevent)
- [\PAMI\Message\Event\MiniVoiceMailEvent](#class-pamimessageeventminivoicemailevent)
- [\PAMI\Message\Event\MonitorStartEvent](#class-pamimessageeventmonitorstartevent)
- [\PAMI\Message\Event\MonitorStopEvent](#class-pamimessageeventmonitorstopevent)
- [\PAMI\Message\Event\MWIGetCompleteEvent](#class-pamimessageeventmwigetcompleteevent)
- [\PAMI\Message\Event\MWIGetEvent](#class-pamimessageeventmwigetevent)
- [\PAMI\Message\Event\NewConnectedLineEvent](#class-pamimessageeventnewconnectedlineevent)
- [\PAMI\Message\Event\ParkedCallSwapEvent](#class-pamimessageeventparkedcallswapevent)
- [\PAMI\Message\Event\PickupEvent](#class-pamimessageeventpickupevent)
- [\PAMI\Message\Event\PresenceStateChangeEvent](#class-pamimessageeventpresencestatechangeevent)
- [\PAMI\Message\Event\PresenceStateListCompleteEvent](#class-pamimessageeventpresencestatelistcompleteevent)
- [\PAMI\Message\Event\PresenceStatusEvent](#class-pamimessageeventpresencestatusevent)
- [\PAMI\Message\Event\QueueMemberPauseEvent](#class-pamimessageeventqueuememberpauseevent)
- [\PAMI\Message\Event\QueueMemberPenaltyEvent](#class-pamimessageeventqueuememberpenaltyevent)
- [\PAMI\Message\Event\QueueMemberRinginuseEvent](#class-pamimessageeventqueuememberringinuseevent)
- [\PAMI\Message\Event\ReceiveFAXEvent](#class-pamimessageeventreceivefaxevent)
- [\PAMI\Message\Event\RequestNotAllowedEvent](#class-pamimessageeventrequestnotallowedevent)
- [\PAMI\Message\Event\RequestNotSupportedEvent](#class-pamimessageeventrequestnotsupportedevent)
- [\PAMI\Message\Event\SendFAXEvent](#class-pamimessageeventsendfaxevent)
- [\PAMI\Message\Event\SessionLimitEvent](#class-pamimessageeventsessionlimitevent)
- [\PAMI\Message\Event\SessionTimeoutEvent](#class-pamimessageeventsessiontimeoutevent)
- [\PAMI\Message\Event\ShutdownEvent](#class-pamimessageeventshutdownevent)
- [\PAMI\Message\Event\SIPQualifyPeerDoneEvent](#class-pamimessageeventsipqualifypeerdoneevent)
- [\PAMI\Message\Event\SoftHangupRequestEvent](#class-pamimessageeventsofthanguprequestevent)
- [\PAMI\Message\Event\SpanAlarmClearEvent](#class-pamimessageeventspanalarmclearevent)
- [\PAMI\Message\Event\SpanAlarmEvent](#class-pamimessageeventspanalarmevent)
- [\PAMI\Message\Event\UnexpectedAddressEvent](#class-pamimessageeventunexpectedaddressevent)
- [\PAMI\Message\Event\UnholdEvent](#class-pamimessageeventunholdevent)
- [\PAMI\Message\Event\UnloadEvent](#class-pamimessageeventunloadevent)
- [\PAMI\Message\Event\AgentLoginEvent](#class-pamimessageeventagentloginevent)
- [\PAMI\Message\Event\AgentLogoffEvent](#class-pamimessageeventagentlogoffevent)
- [\PAMI\Message\Event\AGIExecEndEvent](#class-pamimessageeventagiexecendevent)
- [\PAMI\Message\Event\AGIExecStartEvent](#class-pamimessageeventagiexecstartevent)
- [\PAMI\Message\Event\AgentConnectEvent](#class-pamimessageeventagentconnectevent)
- [\PAMI\Message\Event\AgentsCompleteEvent](#class-pamimessageeventagentscompleteevent)
- [\PAMI\Message\Event\AgentsEvent](#class-pamimessageeventagentsevent)
- [\PAMI\Message\Event\AorDetailEvent](#class-pamimessageeventaordetailevent)
- [\PAMI\Message\Event\AsyncAGIEndEvent](#class-pamimessageeventasyncagiendevent)
- [\PAMI\Message\Event\AsyncAGIExecEvent](#class-pamimessageeventasyncagiexecevent)
- [\PAMI\Message\Event\AsyncAGIStartEvent](#class-pamimessageeventasyncagistartevent)
- [\PAMI\Message\Event\AttendedTransferEvent](#class-pamimessageeventattendedtransferevent)
- [\PAMI\Message\Event\AuthDetailEvent](#class-pamimessageeventauthdetailevent)
- [\PAMI\Message\Event\BlindTransferEvent](#class-pamimessageeventblindtransferevent)
- [\PAMI\Message\Event\BridgeCreateEvent](#class-pamimessageeventbridgecreateevent)
- [\PAMI\Message\Event\BridgeDestroyEvent](#class-pamimessageeventbridgedestroyevent)
- [\PAMI\Message\Event\BridgeEnterEvent](#class-pamimessageeventbridgeenterevent)
- [\PAMI\Message\Event\BridgeInfoChannelEvent](#class-pamimessageeventbridgeinfochannelevent)
- [\PAMI\Message\Event\BridgeInfoCompleteEvent](#class-pamimessageeventbridgeinfocompleteevent)
- [\PAMI\Message\Event\BridgeLeaveEvent](#class-pamimessageeventbridgeleaveevent)
- [\PAMI\Message\Event\CELEvent](#class-pamimessageeventcelevent)
- [\PAMI\Message\Event\CdrEvent](#class-pamimessageeventcdrevent)
- [\PAMI\Message\Event\ConfbridgeEndEvent](#class-pamimessageeventconfbridgeendevent)
- [\PAMI\Message\Event\ConfbridgeJoinEvent](#class-pamimessageeventconfbridgejoinevent)
- [\PAMI\Message\Event\ConfbridgeLeaveEvent](#class-pamimessageeventconfbridgeleaveevent)
- [\PAMI\Message\Event\ConfbridgeListEvent](#class-pamimessageeventconfbridgelistevent)
- [\PAMI\Message\Event\ConfbridgeMuteEvent](#class-pamimessageeventconfbridgemuteevent)
- [\PAMI\Message\Event\ConfbridgeStartEvent](#class-pamimessageeventconfbridgestartevent)
- [\PAMI\Message\Event\ConfbridgeTalkingEvent](#class-pamimessageeventconfbridgetalkingevent)
- [\PAMI\Message\Event\ConfbridgeUnmuteEvent](#class-pamimessageeventconfbridgeunmuteevent)
- [\PAMI\Message\Event\ContactStatusDetailEvent](#class-pamimessageeventcontactstatusdetailevent)
- [\PAMI\Message\Event\CoreShowChannelEvent](#class-pamimessageeventcoreshowchannelevent)
- [\PAMI\Message\Event\CoreShowChannelsCompleteEvent](#class-pamimessageeventcoreshowchannelscompleteevent)
- [\PAMI\Message\Event\DAHDIChannelEvent](#class-pamimessageeventdahdichannelevent)
- [\PAMI\Message\Event\DNDStateEvent](#class-pamimessageeventdndstateevent)
- [\PAMI\Message\Event\DialBeginEvent](#class-pamimessageeventdialbeginevent)
- [\PAMI\Message\Event\DialEndEvent](#class-pamimessageeventdialendevent)
- [\PAMI\Message\Event\EndpointDetailEvent](#class-pamimessageeventendpointdetailevent)
- [\PAMI\Message\Event\EndpointListCompleteEvent](#class-pamimessageeventendpointlistcompleteevent)
- [\PAMI\Message\Event\EndpointListEvent](#class-pamimessageeventendpointlistevent)
- [\PAMI\Message\Event\ExtensionStatusEvent](#class-pamimessageeventextensionstatusevent)
- [\PAMI\Message\Event\FullyBootedEvent](#class-pamimessageeventfullybootedevent)
- [\PAMI\Message\Event\HangupEvent](#class-pamimessageeventhangupevent)
- [\PAMI\Message\Event\HoldEvent](#class-pamimessageeventholdevent)
- [\PAMI\Message\Event\MusicOnHoldStartEvent](#class-pamimessageeventmusiconholdstartevent)
- [\PAMI\Message\Event\MusicOnHoldStopEvent](#class-pamimessageeventmusiconholdstopevent)
- [\PAMI\Message\Event\NewAccountCodeEvent](#class-pamimessageeventnewaccountcodeevent)
- [\PAMI\Message\Event\NewCalleridEvent](#class-pamimessageeventnewcalleridevent)
- [\PAMI\Message\Event\OriginateResponseEvent](#class-pamimessageeventoriginateresponseevent)
- [\PAMI\Message\Event\ParkedCallEvent](#class-pamimessageeventparkedcallevent)
- [\PAMI\Message\Event\ParkedCallGiveUpEvent](#class-pamimessageeventparkedcallgiveupevent)
- [\PAMI\Message\Event\ParkedCallTimeOutEvent](#class-pamimessageeventparkedcalltimeoutevent)
- [\PAMI\Message\Event\PeerStatusEvent](#class-pamimessageeventpeerstatusevent)
- [\PAMI\Message\Event\QueueCallerAbandonEvent](#class-pamimessageeventqueuecallerabandonevent)
- [\PAMI\Message\Event\QueueCallerJoinEvent](#class-pamimessageeventqueuecallerjoinevent)
- [\PAMI\Message\Event\QueueCallerLeaveEvent](#class-pamimessageeventqueuecallerleaveevent)
- [\PAMI\Message\Event\QueueMemberAddedEvent](#class-pamimessageeventqueuememberaddedevent)
- [\PAMI\Message\Event\QueueMemberRemovedEvent](#class-pamimessageeventqueuememberremovedevent)
- [\PAMI\Message\Event\QueueMemberStatusEvent](#class-pamimessageeventqueuememberstatusevent)
- [\PAMI\Message\Event\RTCPReceivedEvent](#class-pamimessageeventrtcpreceivedevent)
- [\PAMI\Message\Event\RTCPSentEvent](#class-pamimessageeventrtcpsentevent)
- [\PAMI\Message\Event\RegistryEvent](#class-pamimessageeventregistryevent)
- [\PAMI\Message\Event\ReloadEvent](#class-pamimessageeventreloadevent)
- [\PAMI\Message\Event\RequestBadFormatEvent](#class-pamimessageeventrequestbadformatevent)
- [\PAMI\Message\Event\StatusCompleteEvent](#class-pamimessageeventstatuscompleteevent)
- [\PAMI\Message\Event\StatusEvent](#class-pamimessageeventstatusevent)
- [\PAMI\Message\Event\SuccessfulAuthEvent](#class-pamimessageeventsuccessfulauthevent)
- [\PAMI\Message\Event\TransportDetailEvent](#class-pamimessageeventtransportdetailevent)
- [\PAMI\Message\Event\UnParkedCallEvent](#class-pamimessageeventunparkedcallevent)
- [\PAMI\Message\Event\UserEventEvent](#class-pamimessageeventusereventevent)
- [\PAMI\Message\Event\VarSetEvent](#class-pamimessageeventvarsetevent)
- [\PAMI\Message\Event\NewextenEvent](#class-pamimessageeventnewextenevent)
- [\PAMI\Message\Event\SCCPDeviceLineEntryEvent](#class-pamimessageeventsccpdevicelineentryevent)
- [\PAMI\Message\Event\NewchannelEvent](#class-pamimessageeventnewchannelevent)
- [\PAMI\Message\Event\NewstateEvent](#class-pamimessageeventnewstateevent)
- [\PAMI\Message\Event\NewchannelEvent](#class-pamimessageeventnewchannelevent)
- [\PAMI\Message\Event\NewstateEvent](#class-pamimessageeventnewstateevent)
- [\PAMI\Message\Event\Factory\Impl\EventFactoryImpl](#class-pamimessageeventfactoryimpleventfactoryimpl)
- [\PAMI\Message\Response\CommandResponse](#class-pamimessageresponsecommandresponse)
- [\PAMI\Message\Response\ComplexResponse](#class-pamimessageresponsecomplexresponse)
- [\PAMI\Message\Response\GenericResponse](#class-pamimessageresponsegenericresponse)
- [\PAMI\Message\Response\Response (abstract)](#class-pamimessageresponseresponse-abstract)
- [\PAMI\Message\Response\SCCPShowDeviceResponse](#class-pamimessageresponsesccpshowdeviceresponse)
- [\PAMI\Message\Response\SCCPShowGlobalsResponse](#class-pamimessageresponsesccpshowglobalsresponse)
- [\PAMI\Message\Response\SCCPShowLineResponse](#class-pamimessageresponsesccpshowlineresponse)
- [\PAMI\Message\Response\Factory\IResponseFactory (interface)](#interface-pamimessageresponsefactoryiresponsefactory)
- [\PAMI\Message\Response\Factory\Impl\ResponseFactoryImpl](#class-pamimessageresponsefactoryimplresponsefactoryimpl)

<hr />

### Class: \PAMI\AsyncAgi\AsyncClientImpl

> An AGI client implementation. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>array</em> <strong>$options=array()</strong>)</strong> : <em>void</em><br /><em>Constructor. Note: The client accepts an array with options. The available options are pamiClient => The PAMI client that will be used to run this async client. environment => Environment as received by the AsyncAGI Event.</em> |
| public | <strong>asyncBreak()</strong> : <em>void</em><br /><em>(non-PHPdoc)</em> |
| public | <strong>handle(</strong><em>[\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)</em> <strong>$event</strong>)</strong> : <em>void</em><br /><em>Handles pami events.</em> |
| protected | <strong>close()</strong> : <em>void</em><br /><em>(non-PHPdoc)</em> |
| protected | <strong>open()</strong> : <em>void</em><br /><em>(non-PHPdoc)</em> |
| protected | <strong>send(</strong><em>mixed</em> <strong>$text</strong>)</strong> : <em>\PAMI\AsyncAgi\Result</em><br /><em>(non-PHPdoc)</em> |

*This class extends \PAGI\Client\AbstractClient*

*This class implements \PAGI\Client\IClient, [\PAMI\Listener\IEventListener](#interface-pamilistenerieventlistener), [\PAMI\AsyncAgi\IAsyncClient](#interface-pamiasyncagiiasyncclient)*

<hr />

### Interface: \PAMI\AsyncAgi\IAsyncClient

> Async AGI Client interface.

| Visibility | Function |
|:-----------|:---------|
| public | <strong>asyncBreak()</strong> : <em>void</em><br /><em>Interrupts expected flow of Async AGI commands and returns control to previous source (typically, the PBX dialplan).</em> |

*This class implements \PAGI\Client\IClient*

<hr />

### Class: \PAMI\AsyncAgi\Application\PAGIAsyncApplication (abstract)

> Parent class for all async PAGIApplications.

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getAgi()</strong> : <em>[\PAMI\AsyncAgi\IAsyncClient](#interface-pamiasyncagiiasyncclient)</em><br /><em>Returns AGI Client.</em> |

*This class extends \PAGI\Application\PAGIApplication*

<hr />

### Interface: \PAMI\AsyncAgi\Event\IAsyncAgiExecEvent

> Async AGI Event interface.

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getChannel()</strong> : <em>string</em><br /><em>Returns key: 'Channel'.</em> |
| public | <strong>getCommandID()</strong> : <em>string</em><br /><em>Returns key: 'CommandID'.</em> |
| public | <strong>getPrivilege()</strong> : <em>string</em><br /><em>Returns key: 'Privilege'.</em> |
| public | <strong>getResult()</strong> : <em>string</em><br /><em>Returns key: 'Result'.</em> |

<hr />

### Interface: \PAMI\AsyncAgi\Event\IAsyncAgiStartEvent

> Async AGI Event interface.

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getChannel()</strong> : <em>string</em><br /><em>Returns key: 'Channel'.</em> |
| public | <strong>getEnvironment()</strong> : <em>string</em><br /><em>Returns the original environment received with this event.</em> |
| public | <strong>getPrivilege()</strong> : <em>string</em><br /><em>Returns key: 'Privilege'.</em> |

<hr />

### Interface: \PAMI\Client\IClient

> Interface for an ami client. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>close()</strong> : <em>void</em><br /><em>Closes the connection to ami.</em> |
| public | <strong>open()</strong> : <em>void</em><br /><em>Opens a tcp connection to ami.</em> |
| public | <strong>process()</strong> : <em>void</em><br /><em>Main processing loop. Also called from send(), you should call this in your own application in order to continue reading events and responses from ami.</em> |
| public | <strong>registerEventListener(</strong><em>mixed</em> <strong>$listener</strong>, <em>\PAMI\Client\Closure/null</em> <strong>$predicate=null</strong>)</strong> : <em>string</em><br /><em>Registers the given listener so it can receive events. Returns the generated id for this new listener. You can pass in a an IEventListener, a Closure, and an array containing the object and name of the method to invoke. Can specify an optional predicate to invoke before calling the callback.</em> |
| public | <strong>send(</strong><em>[\PAMI\Message\OutgoingMessage](#class-pamimessageoutgoingmessage-abstract)</em> <strong>$message</strong>)</strong> : <em>[\PAMI\Message\Response\Response](#class-pamimessageresponseresponse-abstract)</em><br /><em>Sends a message to ami.</em> |
| public | <strong>setLogger(</strong><em>\Psr\Log\LoggerInterface</em> <strong>$logger</strong>)</strong> : <em>void</em><br /><em>Sets the logger implementation.</em> |
| public | <strong>unregisterEventListener(</strong><em>string</em> <strong>$listenerId</strong>)</strong> : <em>void</em><br /><em>Unregisters an event listener.</em> |

<hr />

### Class: \PAMI\Client\Exception\ClientException

> Connection/Protocol exception. PHP Version 5

| Visibility | Function |
|:-----------|:---------|

*This class extends [\PAMI\Exception\PAMIException](#class-pamiexceptionpamiexception)*

*This class implements \Throwable*

<hr />

### Class: \PAMI\Client\Impl\ClientImpl

> TCP Client implementation for AMI. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>string[]</em> <strong>$options</strong>)</strong> : <em>void</em><br /><em>Constructor.</em> |
| public | <strong>close()</strong> : <em>void</em><br /><em>Closes the connection to ami.</em> |
| public | <strong>getLogger()</strong> : <em>@object The current PSR3-Logger instance</em><br /><em>Get the logger implementation.</em> |
| public | <strong>getSocket()</strong> : <em>\PAMI\Client\Impl\resource</em><br /><em>Returns stream socket.</em> |
| public | <strong>open()</strong> : <em>void</em><br /><em>Opens a tcp connection to ami.</em> |
| public | <strong>process()</strong> : <em>void</em><br /><em>Main processing loop. Also called from send(), you should call this in your own application in order to continue reading events and responses from ami.</em> |
| public | <strong>registerEventListener(</strong><em>mixed</em> <strong>$listener</strong>, <em>[\Closure](http://php.net/manual/en/class.closure.php)/null</em> <strong>$predicate=null</strong>)</strong> : <em>string</em><br /><em>Registers the given listener so it can receive events. Returns the generated id for this new listener. You can pass in a an IEventListener, a Closure, and an array containing the object and name of the method to invoke. Can specify an optional predicate to invoke before calling the callback.</em> |
| public | <strong>send(</strong><em>[\PAMI\Message\OutgoingMessage](#class-pamimessageoutgoingmessage-abstract)</em> <strong>$message</strong>)</strong> : <em>[\PAMI\Message\Response\Response](#class-pamimessageresponseresponse-abstract)Message</em><br /><em>Sends a message to ami.</em> |
| public | <strong>setLogger(</strong><em>\Psr\Log\LoggerInterface</em> <strong>$logger</strong>)</strong> : <em>void</em><br /><em>Sets the logger implementation.</em> |
| public | <strong>unregisterEventListener(</strong><em>string</em> <strong>$listenerId</strong>)</strong> : <em>void</em><br /><em>Unregisters an event listener.</em> |
| protected | <strong>connect()</strong> : <em>void</em><br /><em>Connects a tcp connection to ami.</em> |
| protected | <strong>dispatch(</strong><em>[\PAMI\Message\IncomingMessage](#class-pamimessageincomingmessage-abstract)</em> <strong>$message</strong>)</strong> : <em>void</em><br /><em>Dispatchs the incoming message to a handler.</em> |
| protected | <strong>evaluatePredicate(</strong><em>mixed</em> <strong>$predicate</strong>, <em>[\PAMI\Message\IncomingMessage](#class-pamimessageincomingmessage-abstract)</em> <strong>$message</strong>)</strong> : <em>bool</em><br /><em>Evaluate a predicate for a message.</em> |
| protected | <strong>findResponse(</strong><em>[\PAMI\Message\IncomingMessage](#class-pamimessageincomingmessage-abstract)</em> <strong>$message</strong>)</strong> : <em>[\PAMI\Message\Response\Response](#class-pamimessageresponseresponse-abstract)Message</em><br /><em>Tries to find an associated response for the given message.</em> |
| protected | <strong>getMessages()</strong> : <em>\string[]</em><br /><em>Reads a complete message over the stream until EOM.</em> |
| protected | <strong>getRelated(</strong><em>[\PAMI\Message\OutgoingMessage](#class-pamimessageoutgoingmessage-abstract)</em> <strong>$message</strong>)</strong> : <em>[\PAMI\Message\Response\Response](#class-pamimessageresponseresponse-abstract)Message</em><br /><em>Returns a message (response) related to the given message. This uses the ActionID tag (key).</em> |

*This class implements [\PAMI\Client\IClient](#interface-pamiclienticlient)*

<hr />

### Class: \PAMI\Client\Impl\ClientImpl

> TCP Client implementation for AMI. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>string[]</em> <strong>$options</strong>)</strong> : <em>void</em><br /><em>Constructor.</em> |
| public | <strong>close()</strong> : <em>void</em><br /><em>Closes the connection to ami.</em> |
| public | <strong>getLogger()</strong> : <em>@object The current PSR3-Logger instance</em><br /><em>Get the logger implementation.</em> |
| public | <strong>getSocket()</strong> : <em>\PAMI\Client\Impl\resource</em><br /><em>Returns stream socket.</em> |
| public | <strong>open()</strong> : <em>void</em><br /><em>Opens a tcp connection to ami.</em> |
| public | <strong>process()</strong> : <em>void</em><br /><em>Main processing loop. Also called from send(), you should call this in your own application in order to continue reading events and responses from ami.</em> |
| public | <strong>registerEventListener(</strong><em>mixed</em> <strong>$listener</strong>, <em>[\Closure](http://php.net/manual/en/class.closure.php)/null</em> <strong>$predicate=null</strong>)</strong> : <em>string</em><br /><em>Registers the given listener so it can receive events. Returns the generated id for this new listener. You can pass in a an IEventListener, a Closure, and an array containing the object and name of the method to invoke. Can specify an optional predicate to invoke before calling the callback.</em> |
| public | <strong>send(</strong><em>[\PAMI\Message\OutgoingMessage](#class-pamimessageoutgoingmessage-abstract)</em> <strong>$message</strong>)</strong> : <em>[\PAMI\Message\Response\Response](#class-pamimessageresponseresponse-abstract)Message</em><br /><em>Sends a message to ami.</em> |
| public | <strong>setLogger(</strong><em>\Psr\Log\LoggerInterface</em> <strong>$logger</strong>)</strong> : <em>void</em><br /><em>Sets the logger implementation.</em> |
| public | <strong>unregisterEventListener(</strong><em>string</em> <strong>$listenerId</strong>)</strong> : <em>void</em><br /><em>Unregisters an event listener.</em> |
| protected | <strong>connect()</strong> : <em>void</em><br /><em>Connects a tcp connection to ami.</em> |
| protected | <strong>dispatch(</strong><em>[\PAMI\Message\IncomingMessage](#class-pamimessageincomingmessage-abstract)</em> <strong>$message</strong>)</strong> : <em>void</em><br /><em>Dispatchs the incoming message to a handler.</em> |
| protected | <strong>evaluatePredicate(</strong><em>mixed</em> <strong>$predicate</strong>, <em>[\PAMI\Message\IncomingMessage](#class-pamimessageincomingmessage-abstract)</em> <strong>$message</strong>)</strong> : <em>bool</em><br /><em>Evaluate a predicate for a message.</em> |
| protected | <strong>findResponse(</strong><em>[\PAMI\Message\IncomingMessage](#class-pamimessageincomingmessage-abstract)</em> <strong>$message</strong>)</strong> : <em>[\PAMI\Message\Response\Response](#class-pamimessageresponseresponse-abstract)Message</em><br /><em>Tries to find an associated response for the given message.</em> |
| protected | <strong>getMessages()</strong> : <em>\string[]</em><br /><em>Reads a complete message over the stream until EOM.</em> |
| protected | <strong>getRelated(</strong><em>[\PAMI\Message\OutgoingMessage](#class-pamimessageoutgoingmessage-abstract)</em> <strong>$message</strong>)</strong> : <em>[\PAMI\Message\Response\Response](#class-pamimessageresponseresponse-abstract)Message</em><br /><em>Returns a message (response) related to the given message. This uses the ActionID tag (key).</em> |

*This class implements [\PAMI\Client\IClient](#interface-pamiclienticlient)*

<hr />

### Class: \PAMI\Client\Impl\ClientImpl

> TCP Client implementation for AMI. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>string[]</em> <strong>$options</strong>)</strong> : <em>void</em><br /><em>Constructor.</em> |
| public | <strong>close()</strong> : <em>void</em><br /><em>Closes the connection to ami.</em> |
| public | <strong>getLogger()</strong> : <em>@object The current PSR3-Logger instance</em><br /><em>Get the logger implementation.</em> |
| public | <strong>getSocket()</strong> : <em>\PAMI\Client\Impl\resource</em><br /><em>Returns stream socket.</em> |
| public | <strong>open()</strong> : <em>void</em><br /><em>Opens a tcp connection to ami.</em> |
| public | <strong>process()</strong> : <em>void</em><br /><em>Main processing loop. Also called from send(), you should call this in your own application in order to continue reading events and responses from ami.</em> |
| public | <strong>registerEventListener(</strong><em>mixed</em> <strong>$listener</strong>, <em>[\Closure](http://php.net/manual/en/class.closure.php)/null</em> <strong>$predicate=null</strong>)</strong> : <em>string</em><br /><em>Registers the given listener so it can receive events. Returns the generated id for this new listener. You can pass in a an IEventListener, a Closure, and an array containing the object and name of the method to invoke. Can specify an optional predicate to invoke before calling the callback.</em> |
| public | <strong>send(</strong><em>[\PAMI\Message\OutgoingMessage](#class-pamimessageoutgoingmessage-abstract)</em> <strong>$message</strong>)</strong> : <em>[\PAMI\Message\Response\Response](#class-pamimessageresponseresponse-abstract)Message</em><br /><em>Sends a message to ami.</em> |
| public | <strong>setLogger(</strong><em>\Psr\Log\LoggerInterface</em> <strong>$logger</strong>)</strong> : <em>void</em><br /><em>Sets the logger implementation.</em> |
| public | <strong>unregisterEventListener(</strong><em>string</em> <strong>$listenerId</strong>)</strong> : <em>void</em><br /><em>Unregisters an event listener.</em> |
| protected | <strong>connect()</strong> : <em>void</em><br /><em>Connects a tcp connection to ami.</em> |
| protected | <strong>dispatch(</strong><em>[\PAMI\Message\IncomingMessage](#class-pamimessageincomingmessage-abstract)</em> <strong>$message</strong>)</strong> : <em>void</em><br /><em>Dispatchs the incoming message to a handler.</em> |
| protected | <strong>evaluatePredicate(</strong><em>mixed</em> <strong>$predicate</strong>, <em>[\PAMI\Message\IncomingMessage](#class-pamimessageincomingmessage-abstract)</em> <strong>$message</strong>)</strong> : <em>bool</em><br /><em>Evaluate a predicate for a message.</em> |
| protected | <strong>findResponse(</strong><em>[\PAMI\Message\IncomingMessage](#class-pamimessageincomingmessage-abstract)</em> <strong>$message</strong>)</strong> : <em>[\PAMI\Message\Response\Response](#class-pamimessageresponseresponse-abstract)Message</em><br /><em>Tries to find an associated response for the given message.</em> |
| protected | <strong>getMessages()</strong> : <em>\string[]</em><br /><em>Reads a complete message over the stream until EOM.</em> |
| protected | <strong>getRelated(</strong><em>[\PAMI\Message\OutgoingMessage](#class-pamimessageoutgoingmessage-abstract)</em> <strong>$message</strong>)</strong> : <em>[\PAMI\Message\Response\Response](#class-pamimessageresponseresponse-abstract)Message</em><br /><em>Returns a message (response) related to the given message. This uses the ActionID tag (key).</em> |

*This class implements [\PAMI\Client\IClient](#interface-pamiclienticlient)*

<hr />

### Class: \PAMI\Exception\PAMIException

> PAMI family of exceptions. PHP Version 5

| Visibility | Function |
|:-----------|:---------|

*This class extends \Exception*

*This class implements \Throwable*

<hr />

### Interface: \PAMI\Listener\IEventListener

> Implement this interface in your own classes to make them event listeners. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>handle(</strong><em>[\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)</em> <strong>$event</strong>)</strong> : <em>void</em><br /><em>Event handler.</em> |

<hr />

### Class: \PAMI\Message\IncomingMessage (abstract)

> A generic incoming message. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>string</em> <strong>$rawContent</strong>)</strong> : <em>void</em><br /><em>Constructor.</em> |
| public | <strong>__sleep()</strong> : <em>string[]</em><br /><em>Serialize function.</em> |
| public | <strong>getAllChannelVariables()</strong> : <em>array</em><br /><em>Returns the channel variables for all reported channels. https://github.com/marcelog/PAMI/issues/85 The channel names will be lowercased.</em> |
| public | <strong>getAllStatusVariables()</strong> : <em>array</em><br /><em>Returns the channel variables for all reported channels. https://github.com/marcelog/PAMI/issues/85 The channel names will be lowercased.</em> |
| public | <strong>getChannelVariables(</strong><em>string</em> <strong>$channel=null</strong>)</strong> : <em>array</em><br /><em>Returns the channel variables for the given channel. https://github.com/marcelog/PAMI/issues/85 for the "current" channel.</em> |
| public | <strong>getEventList()</strong> : <em>string</em><br /><em>Returns key 'EventList'. In respones, this will surely be a "start". In events, should be a "complete".</em> |
| public | <strong>getRawContent()</strong> : <em>string</em><br /><em>Returns the original message content without parsing.</em> |
| public | <strong>getStatusVariables(</strong><em>string</em> <strong>$channel=null</strong>)</strong> : <em>array</em><br /><em>Returns the channel variables for the given channel. https://github.com/marcelog/PAMI/issues/85 for the "current" channel.</em> |

*This class extends [\PAMI\Message\Message](#class-pamimessagemessage-abstract)*

<hr />

### Class: \PAMI\Message\OutgoingMessage (abstract)

> A generic outgoing message. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getResponseHandler()</strong> : <em>string/null</em><br /><em>Returns the class name of the response handler.</em> |
| public | <strong>setResponseHandler(</strong><em>mixed</em> <strong>$newResponseHandler</strong>)</strong> : <em>void</em><br /><em>Set the response handler.</em> |

*This class extends [\PAMI\Message\Message](#class-pamimessagemessage-abstract)*

<hr />

### Class: \PAMI\Message\OutgoingMessage (abstract)

> A generic outgoing message. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getResponseHandler()</strong> : <em>string/null</em><br /><em>Returns the class name of the response handler.</em> |
| public | <strong>setResponseHandler(</strong><em>mixed</em> <strong>$newResponseHandler</strong>)</strong> : <em>void</em><br /><em>Set the response handler.</em> |

*This class extends [\PAMI\Message\Message](#class-pamimessagemessage-abstract)*

<hr />

### Class: \PAMI\Message\Message (abstract)

> A generic ami message, in-or-outbound. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct()</strong> : <em>void</em><br /><em>Constructor.</em> |
| public | <strong>__sleep()</strong> : <em>string[]</em><br /><em>Serialize function.</em> |
| public | <strong>getActionID()</strong> : <em>string</em><br /><em>Returns key: 'ActionID'.</em> |
| public | <strong>getBoolKey(</strong><em>string</em> <strong>$key</strong>)</strong> : <em>string</em><br /><em>Returns a key by name.</em> |
| public | <strong>getCreatedDate()</strong> : <em>integer</em><br /><em>Returns created date.</em> |
| public | <strong>getKey(</strong><em>string</em> <strong>$key</strong>)</strong> : <em>string</em><br /><em>Returns a key by name.</em> |
| public | <strong>getKeys()</strong> : <em>string[]</em><br /><em>Returns all keys for this message.</em> |
| public | <strong>getVariable(</strong><em>string</em> <strong>$key</strong>)</strong> : <em>string</em><br /><em>Returns a variable by name.</em> |
| public | <strong>getVariables()</strong> : <em>string[]</em><br /><em>Returns all variabels for this message.</em> |
| public | <strong>serialize()</strong> : <em>string</em><br /><em>Gives a string representation for this message, ready to be sent to ami.</em> |
| public | <strong>setVariable(</strong><em>string</em> <strong>$key</strong>, <em>string</em> <strong>$value</strong>)</strong> : <em>void</em><br /><em>Adds a variable to this message.</em> |
| protected | <strong>finishMessage(</strong><em>mixed</em> <strong>$message</strong>)</strong> : <em>string</em><br /><em>Returns the end of message token appended to the end of a given message.</em> |
| protected | <strong>sanitizeInput(</strong><em>string</em> <strong>$value</strong>)</strong> : <em>typed and sanitized value</em><br /><em>Sanitize incoming value</em> |
| protected | <strong>setKey(</strong><em>string</em> <strong>$key</strong>, <em>string</em> <strong>$value</strong>)</strong> : <em>void</em><br /><em>Adds a variable to this message.</em> |
| protected | <strong>setSanitizedKey(</strong><em>string</em> <strong>$key</strong>, <em>string</em> <strong>$value</strong>)</strong> : <em>void</em><br /><em>Adds a variable to this message after sanitizing it first.</em> |

<hr />

### Class: \PAMI\Message\Message (abstract)

> A generic ami message, in-or-outbound. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct()</strong> : <em>void</em><br /><em>Constructor.</em> |
| public | <strong>__sleep()</strong> : <em>string[]</em><br /><em>Serialize function.</em> |
| public | <strong>getActionID()</strong> : <em>string</em><br /><em>Returns key: 'ActionID'.</em> |
| public | <strong>getBoolKey(</strong><em>string</em> <strong>$key</strong>)</strong> : <em>string</em><br /><em>Returns a key by name.</em> |
| public | <strong>getCreatedDate()</strong> : <em>integer</em><br /><em>Returns created date.</em> |
| public | <strong>getKey(</strong><em>string</em> <strong>$key</strong>)</strong> : <em>string</em><br /><em>Returns a key by name.</em> |
| public | <strong>getKeys()</strong> : <em>string[]</em><br /><em>Returns all keys for this message.</em> |
| public | <strong>getVariable(</strong><em>string</em> <strong>$key</strong>)</strong> : <em>string</em><br /><em>Returns a variable by name.</em> |
| public | <strong>getVariables()</strong> : <em>string[]</em><br /><em>Returns all variabels for this message.</em> |
| public | <strong>serialize()</strong> : <em>string</em><br /><em>Gives a string representation for this message, ready to be sent to ami.</em> |
| public | <strong>setVariable(</strong><em>string</em> <strong>$key</strong>, <em>string</em> <strong>$value</strong>)</strong> : <em>void</em><br /><em>Adds a variable to this message.</em> |
| protected | <strong>finishMessage(</strong><em>mixed</em> <strong>$message</strong>)</strong> : <em>string</em><br /><em>Returns the end of message token appended to the end of a given message.</em> |
| protected | <strong>sanitizeInput(</strong><em>string</em> <strong>$value</strong>)</strong> : <em>typed and sanitized value</em><br /><em>Sanitize incoming value</em> |
| protected | <strong>setKey(</strong><em>string</em> <strong>$key</strong>, <em>string</em> <strong>$value</strong>)</strong> : <em>void</em><br /><em>Adds a variable to this message.</em> |
| protected | <strong>setSanitizedKey(</strong><em>string</em> <strong>$key</strong>, <em>string</em> <strong>$value</strong>)</strong> : <em>void</em><br /><em>Adds a variable to this message after sanitizing it first.</em> |

<hr />

### Class: \PAMI\Message\Action\ActionMessage (abstract)

> A generic action ami message. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>string</em> <strong>$what</strong>)</strong> : <em>void</em><br /><em>Constructor.</em> |
| public | <strong>setActionID(</strong><em>mixed</em> <strong>$actionID</strong>)</strong> : <em>void</em><br /><em>Sets Action ID. The ActionID can be at most 69 characters long, according to</em> |

*This class extends [\PAMI\Message\OutgoingMessage](#class-pamimessageoutgoingmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\AttendedTransferAction

> AttendedTransfer action message. using 'Atxfer'

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>string</em> <strong>$channel</strong>, <em>string</em> <strong>$exten</strong>)</strong> : <em>void</em><br /><em>Constructor. Transferer's channel. Extension to transfer to.</em> |
| public | <strong>setContext(</strong><em>string</em> <strong>$context</strong>)</strong> : <em>void</em><br /><em>set Context Context to transfer to.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\DongleReloadAction

> Reload a dongle. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>string</em> <strong>$when</strong>)</strong> : <em>void</em><br /><em>Constructor.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\DongleResetAction

> Resets a dongle. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>string</em> <strong>$device</strong>)</strong> : <em>void</em><br /><em>Constructor.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\DongleRestartAction

> Restarts a dongle. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>string</em> <strong>$when</strong>, <em>string</em> <strong>$device</strong>)</strong> : <em>void</em><br /><em>Constructor.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\DongleSendPDUAction

> Send a PDU through dongle. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>string</em> <strong>$device</strong>, <em>string</em> <strong>$pdu</strong>)</strong> : <em>void</em><br /><em>Constructor.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\DongleSendSMSAction

> Send a SMS through Dongle. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>string</em> <strong>$device</strong>, <em>string</em> <strong>$number</strong>, <em>string</em> <strong>$message</strong>)</strong> : <em>void</em><br /><em>Constructor.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\DongleSendUSSDAction

> Send a USSD through dongle. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>string</em> <strong>$device</strong>, <em>string</em> <strong>$ussd</strong>)</strong> : <em>void</em><br /><em>Constructor.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\DongleShowDevicesAction

> Show all dongle devices. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct()</strong> : <em>void</em><br /><em>Constructor.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\DongleStartAction

> Starts a dongle. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>string</em> <strong>$device</strong>)</strong> : <em>void</em><br /><em>Constructor.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\DongleStopAction

> Stops a dongle. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>string</em> <strong>$when</strong>, <em>string</em> <strong>$device</strong>)</strong> : <em>void</em><br /><em>Constructor.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\GetVarAction

> GetVar action message. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>string</em> <strong>$name</strong>, <em>bool/string</em> <strong>$channel=false</strong>)</strong> : <em>void</em><br /><em>Constructor.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\ModuleReloadAction

> ModuleReload action message. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>string</em> <strong>$module</strong>)</strong> : <em>void</em><br /><em>Constructor. subsystem identifier: cdr enum dnsmgr extconfig manager rtp http Module name.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\ModuleUnloadAction

> ModuleUnload action message. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>string</em> <strong>$module</strong>)</strong> : <em>void</em><br /><em>Constructor. subsystem identifier: cdr enum dnsmgr extconfig manager rtp http Module name.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\QueueMemberRingInUse

> QueueReset action message. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>string</em> <strong>$interface</strong>, <em>mixed</em> <strong>$ringinuse</strong>)</strong> : <em>void</em><br /><em>Constructor.</em> |
| public | <strong>setQueue(</strong><em>mixed</em> <strong>$queue</strong>)</strong> : <em>void</em><br /><em>Set Queue.</em> |
| public | <strong>setRingInUse(</strong><em>boolean</em> <strong>$ringinuse</strong>)</strong> : <em>void</em><br /><em>Set RingInuse.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\QueueUnpauseAction

> Queue unpause action. This does not exist in the ami. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>mixed</em> <strong>$interface</strong>, <em>bool</em> <strong>$queue=false</strong>, <em>bool</em> <strong>$reason=false</strong>)</strong> : <em>void</em><br /><em>Constructor.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\QueuesAction

> Queues action. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct()</strong> : <em>void</em><br /><em>Constructor.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\SCCPAnswerCallAction

> SCCP Answer Call action message. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>string</em> <strong>$ChannelId</strong>, <em>string</em> <strong>$DeviceId</strong>)</strong> : <em>void</em><br /><em>Constructor.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\SCCPConferenceAction

> SCCP Conference Control Action PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>string</em> <strong>$ConferenceId</strong>, <em>string</em> <strong>$ParticipantId</strong>, <em>string</em> <strong>$Command</strong>)</strong> : <em>void</em><br /><em>Constructor.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\SCCPConfigMetaDataAction

> Get SCCPConfigMetaData action message. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>bool</em> <strong>$segment=false</strong>)</strong> : <em>void</em><br /><em>Constructor.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\SCCPDeviceAddLineAction

> SCCP Add new line to a device action message. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>string</em> <strong>$DeviceName</strong>, <em>string</em> <strong>$LineName</strong>)</strong> : <em>void</em><br /><em>Constructor.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\SCCPDeviceRestartAction

> Restart SCCP Device Action Message. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>string</em> <strong>$DeviceName</strong>, <em>string</em> <strong>$Type=`'restart'`</strong>)</strong> : <em>void</em><br /><em>Constructor.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\SCCPDeviceSetDNDAction

> Set Do Not Disturb on SCCP Device Action Message. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>string</em> <strong>$DeviceName</strong>, <em>string</em> <strong>$DNDState</strong>)</strong> : <em>void</em><br /><em>Constructor.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\SCCPDeviceUpdateAction

> SCCP Update Device action message. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>string</em> <strong>$DeviceName</strong>)</strong> : <em>void</em><br /><em>Constructor.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\SCCPDndDeviceAction

> SCCP Set Do not Disturb action message. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>mixed</em> <strong>$DeviceName</strong>, <em>string</em> <strong>$State</strong>)</strong> : <em>void</em><br /><em>Constructor.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\SCCPHangupCallAction

> SCCP Hangup Call action message. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>string</em> <strong>$ChannelId</strong>)</strong> : <em>void</em><br /><em>Constructor.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\SCCPLineForwardUpdateAction

> SCCP Forward Line action message. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>string</em> <strong>$DeviceName</strong>, <em>string</em> <strong>$LineName</strong>, <em>string</em> <strong>$ForwardType</strong>, <em>bool/boolean</em> <strong>$Disable=false</strong>, <em>bool/boolean</em> <strong>$Number=false</strong>)</strong> : <em>void</em><br /><em>Constructor.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\SCCPMessageDeviceAction

> SCCP Message Device action message. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>string</em> <strong>$DeviceName</strong>, <em>string</em> <strong>$MessageText</strong>, <em>bool/boolean</em> <strong>$Beep=false</strong>, <em>bool</em> <strong>$Timeout=false</strong>)</strong> : <em>void</em><br /><em>Constructor.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\SCCPMessageDevicesAction

> SCCP Message multiple devices action message. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>string</em> <strong>$MessageText</strong>, <em>bool/boolean</em> <strong>$Beep=false</strong>, <em>bool</em> <strong>$Timeout=false</strong>)</strong> : <em>void</em><br /><em>Constructor.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\SCCPShowChannelsAction

> SCCP Show CHannels action message. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct()</strong> : <em>void</em><br /><em>Constructor.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\SCCPShowConferenceAction

> SCCP Show Conference action message. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>string</em> <strong>$ConferenceId</strong>)</strong> : <em>void</em><br /><em>Constructor.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\SCCPShowConferencesAction

> SCCP Show Conferences action message. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct()</strong> : <em>void</em><br /><em>Constructor.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\SCCPShowDeviceAction

> SCCP Show Device action message. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>mixed</em> <strong>$devicename</strong>)</strong> : <em>void</em><br /><em>Constructor.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\SCCPShowDevicesAction

> SCCP Show Devices action message. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct()</strong> : <em>void</em><br /><em>Constructor.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\SCCPShowGlobalsAction

> SCCP Show Globals / Settings action message. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct()</strong> : <em>void</em><br /><em>Constructor.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\SCCPShowHintLineStatesAction

> SCCP Show Hint Line action message. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct()</strong> : <em>void</em><br /><em>Constructor.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\SCCPShowHintSubscriptionsAction

> SCCP Show Hint Subscription action message. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct()</strong> : <em>void</em><br /><em>Constructor.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\SCCPShowLineAction

> SCCP Show Line action message. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>mixed</em> <strong>$linename</strong>)</strong> : <em>void</em><br /><em>Constructor.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\SCCPShowLinesAction

> SCCP Show Lines action message. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct()</strong> : <em>void</em><br /><em>Constructor.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\SCCPShowMWISubscriptionsAction

> SCCP Show MWI Subscriptions action message. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct()</strong> : <em>void</em><br /><em>Constructor.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\SCCPShowSessionsAction

> SCCP Show Sessions action message. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct()</strong> : <em>void</em><br /><em>Constructor.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\SCCPShowSoftkeySetsAction

> SCCP Show SoftkeySets action message. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct()</strong> : <em>void</em><br /><em>Constructor.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\SCCPSystemMessageAction

> SCCP Set System Message action message. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>string</em> <strong>$MessageText</strong>, <em>bool/boolean</em> <strong>$Beep=false</strong>, <em>bool</em> <strong>$Timeout=false</strong>)</strong> : <em>void</em><br /><em>Constructor.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\SCCPTokenAckAction

> SCCP Send TokenAck action message. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>mixed</em> <strong>$DeviceName</strong>)</strong> : <em>void</em><br /><em>Constructor.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\SIPNotifyAction

> SIPNotify action message. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>string</em> <strong>$channel</strong>)</strong> : <em>void</em><br /><em>Constructor.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\SIPQualifyPeerAction

> SipQualifyPeer action message. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>string</em> <strong>$peer</strong>)</strong> : <em>void</em><br /><em>Constructor.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\SIPShowPeerAction

> Sipshowpeer action message. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>string</em> <strong>$peer</strong>)</strong> : <em>void</em><br /><em>Constructor.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\SIPShowRegistryAction

> Sipshowregistry action message. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct()</strong> : <em>void</em><br /><em>Constructor.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\SetVarAction

> SetVar action message. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>string</em> <strong>$name</strong>, <em>string</em> <strong>$value</strong>, <em>bool/string</em> <strong>$channel=false</strong>)</strong> : <em>void</em><br /><em>Constructor.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\VGSMSMSTxAction

> Not all methods were implemented. For reference please check http://open.voismart.it/index.php/VGSM_Manager_Interface PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct()</strong> : <em>void</em><br /><em>Constructor.</em> |
| public | <strong>setAccount(</strong><em>mixed</em> <strong>$account</strong>)</strong> : <em>void</em><br /><em>Sets Account key.</em> |
| public | <strong>setConcatRefId(</strong><em>mixed</em> <strong>$refid</strong>)</strong> : <em>void</em><br /><em>Sets X-SMS-Concatenate-RefID . Optional. Should be set with setConcatSeqNum and setConcatSeqNum</em> |
| public | <strong>setConcatSeqNum(</strong><em>mixed</em> <strong>$seqNum</strong>)</strong> : <em>void</em><br /><em>Sets X-SMS-Concatenate-Sequence-Number. Optional. Should be set with setConcatSeqNum: setConcatTotalMsg</em> |
| public | <strong>setConcatTotalMsg(</strong><em>mixed</em> <strong>$totalmsg</strong>)</strong> : <em>void</em><br /><em>Sets X-SMS-Concatenate-Total-Messages. Optional. Should be set with setConcatRefId and setConcatSeqNum</em> |
| public | <strong>setContent(</strong><em>string</em> <strong>$content</strong>)</strong> : <em>void</em><br /><em>Sets $content  - Message to send. Mandatory</em> |
| public | <strong>setContentEncoding(</strong><em>string</em> <strong>$encoding</strong>)</strong> : <em>void</em><br /><em>Sets Content  Type Encoding.Optional</em> |
| public | <strong>setContentType(</strong><em>string</em> <strong>$contentType</strong>)</strong> : <em>void</em><br /><em>Sets Content  Type. Optional</em> |
| public | <strong>setMe(</strong><em>string</em> <strong>$chipId</strong>)</strong> : <em>void</em><br /><em>Sets Chip Id - It will use the chip_id provided.Optional</em> |
| public | <strong>setSmsClass(</strong><em>string</em> <strong>$smsClass</strong>)</strong> : <em>void</em><br /><em>Sets X-SMS-Class  key. Optional</em> |
| public | <strong>setTo(</strong><em>string</em> <strong>$target</strong>)</strong> : <em>void</em><br /><em>Sets CellPhone Number . Mandatory</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\DialplanExtensionAddAction

> GetConfig action message. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>mixed</em> <strong>$context</strong>, <em>mixed</em> <strong>$extension</strong>, <em>mixed</em> <strong>$priority</strong>, <em>mixed</em> <strong>$application</strong>, <em>bool</em> <strong>$replace=false</strong>)</strong> : <em>void</em><br /><em>Constructor.</em> |
| public | <strong>setApplicationData(</strong><em>mixed</em> <strong>$input</strong>)</strong> : <em>void</em><br /><em>set Optional ApplicationData.</em> |
| public | <strong>setReplace(</strong><em>mixed</em> <strong>$input</strong>)</strong> : <em>void</em><br /><em>set Replace previous entry at this priority.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\BridgeDestroyAction

> BridgeDestroy Action Related To: - @see PAMI\Message\Action\BridgeAction - @see PAMI\Message\Action\BridgeInfoAction - @see PAMI\Message\Action\BridgeKickAction - @see PAMI\Message\Action\BridgeListAction - @see PAMI\Message\Event\BridgeDestroyEvent Note: Auto Generated using xsltproc

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>string</em> <strong>$bridgeuniqueid</strong>)</strong> : <em>void</em><br /><em>Constructor. The unique ID of the bridge to destroy.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\BridgeKickAction

> BridgeKick Action Related To: - @see PAMI\Message\Action\BridgeAction - @see PAMI\Message\Action\BridgeDestroyAction - @see PAMI\Message\Action\BridgeInfoAction - @see PAMI\Message\Action\BridgeListAction - @see PAMI\Message\Event\BridgeLeaveEvent Note: Auto Generated using xsltproc

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>string</em> <strong>$channel</strong>)</strong> : <em>void</em><br /><em>Constructor. The channel to kick out of a bridge.</em> |
| public | <strong>setBridgeUniqueid(</strong><em>string</em> <strong>$bridgeuniqueid</strong>)</strong> : <em>void</em><br /><em>set BridgeUniqueid The unique ID of the bridge containing the channel to destroy. This parameter can be omitted, or supplied to insure that the channel is not removed from the wrong bridge.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\BridgeTechnologyListAction

> BridgeTechnologyList Action Related To: - @see PAMI\Message\Action\BridgeTechnologySuspendAction - @see PAMI\Message\Action\BridgeTechnologyUnsuspendAction Note: Auto Generated using xsltproc

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct()</strong> : <em>void</em><br /><em>Constructor.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\BridgeTechnologySuspendAction

> BridgeTechnologySuspend Action Related To: - @see PAMI\Message\Action\BridgeTechnologySuspendAction - @see PAMI\Message\Action\BridgeTechnologyUnsuspendAction Note: Auto Generated using xsltproc

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>string</em> <strong>$bridgetechnology</strong>)</strong> : <em>void</em><br /><em>Constructor. The name of the bridging technology to suspend.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\BridgeTechnologyUnsuspendAction

> BridgeTechnologyUnsuspend Action Related To: - @see PAMI\Message\Action\BridgeTechnologyListAction - @see PAMI\Message\Action\BridgeTechnologySuspendAction Note: Auto Generated using xsltproc

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>string</em> <strong>$bridgetechnology</strong>)</strong> : <em>void</em><br /><em>Constructor. The name of the bridging technology to unsuspend.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\CancelAtxferAction

> CancelAtxfer Action Related To: - @see PAMI\Message\Event\AttendedTransferEvent Note: Auto Generated using xsltproc

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>string</em> <strong>$channel</strong>)</strong> : <em>void</em><br /><em>Constructor. The transferer channel.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\ConfbridgeSetSingleVideoSrcAction

> ConfbridgeSetSingleVideoSrc Action Note: Auto Generated using xsltproc

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>string</em> <strong>$conference</strong>, <em>string</em> <strong>$channel</strong>)</strong> : <em>void</em><br /><em>Constructor. If this parameter is not a complete channel name, the first channel with this prefix will be used.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\ControlPlaybackAction

> ControlPlayback Action Related To: Note: Auto Generated using xsltproc

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>string</em> <strong>$channel</strong>, <em>string</em> <strong>$control</strong>)</strong> : <em>void</em><br /><em>Constructor. The name of the channel that currently has a file being played back to it.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\DeviceStateListAction

> DeviceStateList Action Will produce PAMI\Message\Reponse\ComplexResponse object upon completion Related To: - @see PAMI\Message\Event\DeviceStateChangeEvent Note: Auto Generated using xsltproc

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct()</strong> : <em>void</em><br /><em>Constructor.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\ExtensionStateListAction

> ExtensionStateList Action Will produce PAMI\Message\Reponse\ComplexResponse object upon completion Related To: - @see PAMI\Message\Action\ExtensionStateAction Note: Auto Generated using xsltproc

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct()</strong> : <em>void</em><br /><em>Constructor.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\FAXSessionAction

> FAXSession Action Note: Auto Generated using xsltproc

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>string</em> <strong>$sessionnumber</strong>)</strong> : <em>void</em><br /><em>Constructor. The session ID of the fax the user is interested in.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\FAXSessionsAction

> FAXSessions Action Note: Auto Generated using xsltproc

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct()</strong> : <em>void</em><br /><em>Constructor.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\FAXStatsAction

> FAXStats Action Note: Auto Generated using xsltproc

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct()</strong> : <em>void</em><br /><em>Constructor.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\FilterAction

> Filter Action Related To: - @see PAMI\Message\Action\FilterListAction Note: Auto Generated using xsltproc

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct()</strong> : <em>void</em><br /><em>Constructor.</em> |
| public | <strong>setFilter(</strong><em>string</em> <strong>$filter</strong>)</strong> : <em>void</em><br /><em>set Filter Filters can be whitelist or blacklist</em> |
| public | <strong>setOperation(</strong><em>string</em> <strong>$operation</strong>)</strong> : <em>void</em><br /><em>set Operation</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\IAXnetstatsAction

> IAXnetstats Action Note: Auto Generated using xsltproc

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct()</strong> : <em>void</em><br /><em>Constructor.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\IAXpeerlistAction

> IAXpeerlist Action Note: Auto Generated using xsltproc

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct()</strong> : <em>void</em><br /><em>Constructor.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\IAXpeersAction

> IAXpeers Action Note: Auto Generated using xsltproc

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct()</strong> : <em>void</em><br /><em>Constructor.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\IAXregistryAction

> IAXregistry Action Note: Auto Generated using xsltproc

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct()</strong> : <em>void</em><br /><em>Constructor.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\LoggerRotateAction

> LoggerRotate Action Note: Auto Generated using xsltproc

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct()</strong> : <em>void</em><br /><em>Constructor.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\MWIDeleteAction

> MWIDelete Action Note: Auto Generated using xsltproc

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>string</em> <strong>$mailbox</strong>)</strong> : <em>void</em><br /><em>Constructor. Mailbox ID in the form of /regex/ for all mailboxes matching the regular expression. Otherwise it is for a specific mailbox.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\MWIGetAction

> MWIGet Action Note: Auto Generated using xsltproc

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>string</em> <strong>$mailbox</strong>)</strong> : <em>void</em><br /><em>Constructor. Mailbox ID in the form of /regex/ for all mailboxes matching the regular expression. Otherwise it is for a specific mailbox.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\MWIUpdateAction

> MWIUpdate Action Note: Auto Generated using xsltproc

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>string</em> <strong>$mailbox</strong>)</strong> : <em>void</em><br /><em>Constructor. Specific mailbox ID.</em> |
| public | <strong>setNewMessages(</strong><em>string</em> <strong>$newmessages</strong>)</strong> : <em>void</em><br /><em>set NewMessages The number of new messages in the mailbox. Defaults to zero if missing.</em> |
| public | <strong>setOldMessages(</strong><em>string</em> <strong>$oldmessages</strong>)</strong> : <em>void</em><br /><em>set OldMessages The number of old messages in the mailbox. Defaults to zero if missing.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\MeetmeListRoomsAction

> MeetmeListRooms Action Note: Auto Generated using xsltproc

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct()</strong> : <em>void</em><br /><em>Constructor.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\MuteAudioAction

> MuteAudio Action Note: Auto Generated using xsltproc

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>string</em> <strong>$channel</strong>, <em>string</em> <strong>$direction</strong>, <em>string</em> <strong>$state</strong>)</strong> : <em>void</em><br /><em>Constructor. The channel you want to mute.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\PJSIPNotifyAction

> PJSIPNotify Action Note: Auto Generated using xsltproc

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>string</em> <strong>$variable</strong>)</strong> : <em>void</em><br /><em>Constructor. Appends variables as headers/content to the NOTIFY. If the variable is named Content, then the value will compose the body of the message if another variable sets Content-Type. name=value</em> |
| public | <strong>setEndpoint(</strong><em>string</em> <strong>$endpoint</strong>)</strong> : <em>void</em><br /><em>set Endpoint The endpoint to which to send the NOTIFY.</em> |
| public | <strong>setURI(</strong><em>string</em> <strong>$uri</strong>)</strong> : <em>void</em><br /><em>set URI Abritrary URI to which to send the NOTIFY.</em> |
| public | <strong>setchannel(</strong><em>string</em> <strong>$channel</strong>)</strong> : <em>void</em><br /><em>set channel Channel name to send the NOTIFY. Must be a PJSIP channel.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\PJSIPShowAorsAction

> PJSIPShowAors Action Will produce PAMI\Message\Reponse\ComplexResponse object upon completion Note: Auto Generated using xsltproc

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct()</strong> : <em>void</em><br /><em>Constructor.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\PJSIPShowAuthsAction

> PJSIPShowAuths Action Will produce PAMI\Message\Reponse\ComplexResponse object upon completion Note: Auto Generated using xsltproc

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct()</strong> : <em>void</em><br /><em>Constructor.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\PJSIPShowContactsAction

> PJSIPShowContacts Action Will produce PAMI\Message\Reponse\ComplexResponse object upon completion Note: Auto Generated using xsltproc

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct()</strong> : <em>void</em><br /><em>Constructor.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\PJSIPShowRegistrationInboundContactStatusesAction

> PJSIPShowRegistrationInboundContactStatuses Action Note: Auto Generated using xsltproc

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct()</strong> : <em>void</em><br /><em>Constructor.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\PRIDebugFileSetAction

> PRIDebugFileSet Action Note: Auto Generated using xsltproc

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>string</em> <strong>$file</strong>)</strong> : <em>void</em><br /><em>Constructor. Path of file to write debug output.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\PRIDebugFileUnsetAction

> PRIDebugFileUnset Action Note: Auto Generated using xsltproc

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct()</strong> : <em>void</em><br /><em>Constructor.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\PRIDebugSetAction

> PRIDebugSet Action Note: Auto Generated using xsltproc

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>string</em> <strong>$span</strong>, <em>string</em> <strong>$level</strong>)</strong> : <em>void</em><br /><em>Constructor. Which span to affect. What debug level to set. May be a numerical value or a text value from the list below</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\PRIShowSpansAction

> PRIShowSpans Action Note: Auto Generated using xsltproc

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct()</strong> : <em>void</em><br /><em>Constructor.</em> |
| public | <strong>setSpan(</strong><em>string</em> <strong>$span</strong>)</strong> : <em>void</em><br /><em>set Span Specify the specific span to show. Show all spans if zero or not present.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\ParkinglotsAction

> Parkinglots Action Note: Auto Generated using xsltproc

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct()</strong> : <em>void</em><br /><em>Constructor.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\PresenceStateAction

> PresenceState Action Related To: - @see PAMI\Message\Event\PresenceStatusEvent Note: Auto Generated using xsltproc

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>string</em> <strong>$provider</strong>)</strong> : <em>void</em><br /><em>Constructor. Presence Provider to check the state of</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\PresenceStateListAction

> PresenceStateList Action Will produce PAMI\Message\Reponse\ComplexResponse object upon completion Related To: - @see PAMI\Message\Action\PresenceStateAction - @see PAMI\Message\Event\PresenceStatusEvent Note: Auto Generated using xsltproc

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct()</strong> : <em>void</em><br /><em>Constructor.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\QueueChangePriorityCallerAction

> QueueChangePriorityCaller Action Note: Auto Generated using xsltproc

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>string</em> <strong>$queue</strong>, <em>string</em> <strong>$caller</strong>, <em>string</em> <strong>$priority</strong>)</strong> : <em>void</em><br /><em>Constructor. The name of the queue to take action on. The caller (channel) to change priority on queue. Priority value for change for caller on queue.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\QueueMemberRingInUseAction

> QueueMemberRingInUse Action Note: Auto Generated using xsltproc

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>string</em> <strong>$interface</strong>, <em>string</em> <strong>$ringinuse</strong>)</strong> : <em>void</em><br /><em>Constructor.</em> |
| public | <strong>setQueue(</strong><em>string</em> <strong>$queue</strong>)</strong> : <em>void</em><br /><em>set Queue</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\SIPpeerstatusAction

> SIPpeerstatus Action Note: Auto Generated using xsltproc

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct()</strong> : <em>void</em><br /><em>Constructor.</em> |
| public | <strong>setPeer(</strong><em>string</em> <strong>$peer</strong>)</strong> : <em>void</em><br /><em>set Peer The peer name you want to check.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\SKINNYdevicesAction

> SKINNYdevices Action Note: Auto Generated using xsltproc

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct()</strong> : <em>void</em><br /><em>Constructor.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\SKINNYlinesAction

> SKINNYlines Action Note: Auto Generated using xsltproc

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct()</strong> : <em>void</em><br /><em>Constructor.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\SKINNYshowdeviceAction

> SKINNYshowdevice Action Note: Auto Generated using xsltproc

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>string</em> <strong>$device</strong>)</strong> : <em>void</em><br /><em>Constructor. The device name you want to check.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\SKINNYshowlineAction

> SKINNYshowline Action Note: Auto Generated using xsltproc

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>string</em> <strong>$line</strong>)</strong> : <em>void</em><br /><em>Constructor. The line name you want to check.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\SorceryMemoryCacheExpireAction

> SorceryMemoryCacheExpire Action Note: Auto Generated using xsltproc

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>string</em> <strong>$cache</strong>)</strong> : <em>void</em><br /><em>Constructor. The name of the cache to expire all objects from.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\SorceryMemoryCacheExpireObjectAction

> SorceryMemoryCacheExpireObject Action Note: Auto Generated using xsltproc

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>string</em> <strong>$cache</strong>, <em>string</em> <strong>$object</strong>)</strong> : <em>void</em><br /><em>Constructor. The name of the cache to expire the object from. The name of the object to expire.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\SorceryMemoryCachePopulateAction

> SorceryMemoryCachePopulate Action Note: Auto Generated using xsltproc

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>string</em> <strong>$cache</strong>)</strong> : <em>void</em><br /><em>Constructor. The name of the cache to populate.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\SorceryMemoryCacheStaleAction

> SorceryMemoryCacheStale Action Note: Auto Generated using xsltproc

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>string</em> <strong>$cache</strong>)</strong> : <em>void</em><br /><em>Constructor. The name of the cache to mark all object as stale in.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\SorceryMemoryCacheStaleObjectAction

> SorceryMemoryCacheStaleObject Action Note: Auto Generated using xsltproc

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>string</em> <strong>$cache</strong>, <em>string</em> <strong>$object</strong>)</strong> : <em>void</em><br /><em>Constructor. The name of the cache to mark the object as stale in. The name of the object to mark as stale.</em> |
| public | <strong>setReload(</strong><em>string</em> <strong>$reload</strong>)</strong> : <em>void</em><br /><em>set Reload If true, then immediately reload the object from the backend cache instead of waiting for the next retrieval</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\VoicemailRefreshAction

> VoicemailRefresh Action Note: Auto Generated using xsltproc

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct()</strong> : <em>void</em><br /><em>Constructor.</em> |
| public | <strong>setContext(</strong><em>string</em> <strong>$context</strong>)</strong> : <em>void</em><br /><em>set Context</em> |
| public | <strong>setMailbox(</strong><em>string</em> <strong>$mailbox</strong>)</strong> : <em>void</em><br /><em>set Mailbox</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\VoicemailUserStatusAction

> VoicemailUserStatus Action Note: Auto Generated using xsltproc

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>string</em> <strong>$context</strong>, <em>string</em> <strong>$mailbox</strong>)</strong> : <em>void</em><br /><em>Constructor. The context you want to check. The mailbox you want to check.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\AttendedTransferAction

> AttendedTransfer action message. using 'Atxfer'

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>string</em> <strong>$channel</strong>, <em>string</em> <strong>$exten</strong>)</strong> : <em>void</em><br /><em>Constructor. Transferer's channel. Extension to transfer to.</em> |
| public | <strong>setContext(</strong><em>string</em> <strong>$context</strong>)</strong> : <em>void</em><br /><em>set Context Context to transfer to.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\DAHDIDialOffhookAction

> DAHDIDialOffhook Action Note: Auto Generated using xsltproc

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>string</em> <strong>$dahdichannel</strong>, <em>string</em> <strong>$number</strong>)</strong> : <em>void</em><br /><em>Constructor. DAHDI channel number to dial digits. Digits to dial.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\DAHDIDNDoffAction

> DAHDIDNDoff Action Note: Auto Generated using xsltproc

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>string</em> <strong>$dahdichannel</strong>)</strong> : <em>void</em><br /><em>Constructor. DAHDI channel number to set DND off.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\DAHDIDNDonAction

> DAHDIDNDon Action Note: Auto Generated using xsltproc

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>string</em> <strong>$dahdichannel</strong>)</strong> : <em>void</em><br /><em>Constructor. DAHDI channel number to set DND on.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\SIPPeersAction

> Show sip peers. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct()</strong> : <em>void</em><br /><em>Constructor.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\SIPPeersAction

> Show sip peers. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct()</strong> : <em>void</em><br /><em>Constructor.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\ConfbridgeStartRecordAction

> ConfbridgeStartRecord action message. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>string</em> <strong>$conference</strong>)</strong> : <em>void</em><br /><em>Constructor.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\MixMonitorAction

> MixMonitor action message. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>string</em> <strong>$channel</strong>)</strong> : <em>void</em><br /><em>Constructor.</em> |
| public | <strong>setFile(</strong><em>string</em> <strong>$file</strong>)</strong> : <em>void</em><br /><em>Sets File key.</em> |
| public | <strong>setOptions(</strong><em>string[]</em> <strong>$options</strong>)</strong> : <em>void</em><br /><em>Sets Options key.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\AGIAction

> AGI action message. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>mixed</em> <strong>$channel</strong>, <em>mixed</em> <strong>$command</strong>, <em>string</em> <strong>$commandId=null</strong>)</strong> : <em>void</em><br /><em>Constructor.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\AbsoluteTimeoutAction

> AbsoluteTimeout action message. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>string</em> <strong>$channel</strong>, <em>integer</em> <strong>$timeout</strong>)</strong> : <em>void</em><br /><em>Constructor.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\AgentLogoffAction

> AgentLogoff action message. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>string</em> <strong>$agent</strong>, <em>bool/string</em> <strong>$soft=false</strong>)</strong> : <em>void</em><br /><em>Constructor.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\AgentsAction

> Agents action message. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct()</strong> : <em>void</em><br /><em>Constructor.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\BlindTransferAction

> BlindTransfer action message. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>string</em> <strong>$channel</strong>, <em>string</em> <strong>$extension</strong>, <em>string</em> <strong>$context</strong>)</strong> : <em>void</em><br /><em>Constructor.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\BridgeAction

> Bridge action message. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>string</em> <strong>$channel1</strong>, <em>string</em> <strong>$channel2</strong>, <em>bool/boolean</em> <strong>$tone=false</strong>)</strong> : <em>void</em><br /><em>Constructor.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\BridgeInfoAction

> Returns detailed information about a bridge and the channels in it. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>string</em> <strong>$bridgeUniqueid</strong>)</strong> : <em>void</em><br /><em>Constructor.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\BridgeListAction

> BridgeList action message. Get a list of bridges in the system. Returns a list of bridges, optionally filtering on a bridge type.

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>bool/string/bool</em> <strong>$bridgeType=false</strong>, <em>string</em> <strong>$actionId=`''`</strong>)</strong> : <em>void</em><br /><em>Constructor.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\ChallengeAction

> Challenge action message. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>string</em> <strong>$authType=`'MD5'`</strong>)</strong> : <em>void</em><br /><em>Constructor.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\ChangeMonitorAction

> Changes the monitor filename. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>string</em> <strong>$channel</strong>, <em>string</em> <strong>$filename</strong>)</strong> : <em>void</em><br /><em>Constructor.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\CommandAction

> Command action message. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>string</em> <strong>$command</strong>)</strong> : <em>void</em><br /><em>Constructor.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\ConfbridgeKickAction

> ConfbridgeKick action message. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>string</em> <strong>$conference</strong>, <em>string</em> <strong>$channel</strong>)</strong> : <em>void</em><br /><em>Constructor.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\ConfBridgeListAction

> Show sip peers. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>mixed</em> <strong>$conference</strong>)</strong> : <em>void</em><br /><em>Constructor.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\ConfbridgeListRoomsAction

> ConfbridgeListRooms action message. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct()</strong> : <em>void</em><br /><em>Constructor.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\ConfbridgeLockAction

> ConfbridgeLock action message. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>string</em> <strong>$conference</strong>)</strong> : <em>void</em><br /><em>Constructor.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\ConfbridgeMuteAction

> ConfbridgeMute action message. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>string</em> <strong>$channel</strong>, <em>string</em> <strong>$conference</strong>)</strong> : <em>void</em><br /><em>Constructor.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\ConfbridgeStartRecordAction

> ConfbridgeStartRecord action message. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>string</em> <strong>$conference</strong>)</strong> : <em>void</em><br /><em>Constructor.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\ConfbridgeStopRecordAction

> ConfbridgeStopRecord action message. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>string</em> <strong>$conference</strong>)</strong> : <em>void</em><br /><em>Constructor.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\ConfbridgeUnlockAction

> ConfbridgeUnlock action message. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>string</em> <strong>$conference</strong>)</strong> : <em>void</em><br /><em>Constructor.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\ConfbridgeUnmuteAction

> ConfbridgeUnmute action message. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>string</em> <strong>$channel</strong>, <em>string</em> <strong>$conference</strong>)</strong> : <em>void</em><br /><em>Constructor.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\CoreSettingsAction

> CoreSettings action message. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct()</strong> : <em>void</em><br /><em>Constructor.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\CoreShowChannelsAction

> Show channels. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct()</strong> : <em>void</em><br /><em>Constructor.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\CoreStatusAction

> CoreStatus action message. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct()</strong> : <em>void</em><br /><em>Constructor.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\CreateConfigAction

> CreateConfig action message. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>string</em> <strong>$filename</strong>)</strong> : <em>void</em><br /><em>Constructor.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\DAHDIHangupAction

> DAHDIHangup action message. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>string</em> <strong>$channel</strong>)</strong> : <em>void</em><br /><em>Constructor.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\DAHDIRestartAction

> DAHDIRestart action message. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct()</strong> : <em>void</em><br /><em>Constructor.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\DAHDIShowChannelsAction

> DAHDIShowChannels Action Note: Auto Generated using xsltproc

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct()</strong> : <em>void</em><br /><em>Constructor.</em> |
| public | <strong>setDAHDIChannel(</strong><em>string</em> <strong>$dahdichannel</strong>)</strong> : <em>void</em><br /><em>set DAHDIChannel Specify the specific channel number to show. Show all channels if zero or not present.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\DAHDITransferAction

> DAHDITransfer action message. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>string</em> <strong>$channel</strong>)</strong> : <em>void</em><br /><em>Constructor.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\DBDelAction

> DBDel action message. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>string</em> <strong>$family</strong>, <em>string</em> <strong>$key</strong>)</strong> : <em>void</em><br /><em>Constructor.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\DBDelTreeAction

> DBDelTree action message. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>string</em> <strong>$family</strong>, <em>bool/string</em> <strong>$key=false</strong>)</strong> : <em>void</em><br /><em>Constructor.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\DBGetAction

> DBGet action message. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>string</em> <strong>$family</strong>, <em>string</em> <strong>$key</strong>)</strong> : <em>void</em><br /><em>Constructor.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\DBPutAction

> DBPut action message. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>string</em> <strong>$family</strong>, <em>string</em> <strong>$key</strong>, <em>string</em> <strong>$value</strong>)</strong> : <em>void</em><br /><em>Constructor.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\DialplanExtensionAddAction

> GetConfig action message. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>mixed</em> <strong>$context</strong>, <em>mixed</em> <strong>$extension</strong>, <em>mixed</em> <strong>$priority</strong>, <em>mixed</em> <strong>$application</strong>, <em>bool</em> <strong>$replace=false</strong>)</strong> : <em>void</em><br /><em>Constructor.</em> |
| public | <strong>setApplicationData(</strong><em>mixed</em> <strong>$input</strong>)</strong> : <em>void</em><br /><em>set Optional ApplicationData.</em> |
| public | <strong>setReplace(</strong><em>mixed</em> <strong>$input</strong>)</strong> : <em>void</em><br /><em>set Replace previous entry at this priority.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\DialplanExtensionRemoveAction

> DialplanExtensionRemove Action Note: Auto Generated using xsltproc PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>string</em> <strong>$context</strong>, <em>string</em> <strong>$extension</strong>)</strong> : <em>void</em><br /><em>Constructor. Context of the extension being removed Name of the extension being removed (may include callerid match by separating with '/')</em> |
| public | <strong>setPriority(</strong><em>string</em> <strong>$priority</strong>)</strong> : <em>void</em><br /><em>set Priority If provided, only remove this priority from the extension instead of all priorities in the extension.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\EventsAction

> Events action message. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>array/string[]</em> <strong>$mask=array()</strong>)</strong> : <em>void</em><br /><em>Constructor.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\ExtensionStateAction

> ExtensionState action message. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>string</em> <strong>$exten</strong>, <em>string</em> <strong>$context</strong>)</strong> : <em>void</em><br /><em>Constructor.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\GetConfigAction

> GetConfig action message. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>string</em> <strong>$filename</strong>, <em>bool/boolean</em> <strong>$category=false</strong>)</strong> : <em>void</em><br /><em>Constructor.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\GetConfigJSONAction

> GetConfigJSON action message. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>string</em> <strong>$filename</strong>)</strong> : <em>void</em><br /><em>Constructor.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\HangupAction

> Hangup action message. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>string</em> <strong>$channel</strong>, <em>int</em> <strong>$cause=null</strong>)</strong> : <em>void</em><br /><em>Constructor.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\JabberSendAction

> JabberSend action message. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>string</em> <strong>$jabber</strong>, <em>string</em> <strong>$jid</strong>, <em>string</em> <strong>$message</strong>)</strong> : <em>void</em><br /><em>Constructor.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\ListCategoriesAction

> ListCategories action message. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>string</em> <strong>$file</strong>)</strong> : <em>void</em><br /><em>Constructor.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\ListCommandsAction

> Lists avaiable manager actions. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct()</strong> : <em>void</em><br /><em>Constructor.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\LocalOptimizeAwayAction

> LocalOptimizeAway action message. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>string</em> <strong>$channel</strong>)</strong> : <em>void</em><br /><em>Constructor.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\LoginAction

> Login action message. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>string</em> <strong>$user</strong>, <em>string</em> <strong>$password</strong>, <em>string/null</em> <strong>$eventMask=null</strong>)</strong> : <em>void</em><br /><em>Constructor.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\LogoffAction

> Logoff action message. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct()</strong> : <em>void</em><br /><em>Constructor.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\MailboxCountAction

> MailboxCount action message. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>string</em> <strong>$mailbox</strong>)</strong> : <em>void</em><br /><em>Constructor.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\MailboxStatusAction

> MailboxStatus action message. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>string</em> <strong>$mailbox</strong>)</strong> : <em>void</em><br /><em>Constructor.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\MeetmeListAction

> MeetmeList action message. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>string</em> <strong>$conference</strong>)</strong> : <em>void</em><br /><em>Constructor.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\MeetmeMuteAction

> MeetmeMute action message. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>string</em> <strong>$conference</strong>, <em>string</em> <strong>$user</strong>)</strong> : <em>void</em><br /><em>Constructor.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\MeetmeUnmuteAction

> MeetmeUnmute action message. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>string</em> <strong>$conference</strong>, <em>string</em> <strong>$user</strong>)</strong> : <em>void</em><br /><em>Constructor.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\MixMonitorAction

> MixMonitor action message. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>string</em> <strong>$channel</strong>)</strong> : <em>void</em><br /><em>Constructor.</em> |
| public | <strong>setFile(</strong><em>string</em> <strong>$file</strong>)</strong> : <em>void</em><br /><em>Sets File key.</em> |
| public | <strong>setOptions(</strong><em>string[]</em> <strong>$options</strong>)</strong> : <em>void</em><br /><em>Sets Options key.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\MixMonitorMuteAction

> MixMonitorMute action message. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>string</em> <strong>$channel</strong>, <em>bool</em> <strong>$state=true</strong>, <em>string</em> <strong>$direction=`'both'`</strong>)</strong> : <em>void</em><br /><em>Constructor. read, write or both (from channel, to channel or both channels).</em> |
| public | <strong>setDirection(</strong><em>string</em> <strong>$direction</strong>)</strong> : <em>void</em><br /><em>Sets state key. read, write or both (from channel, to channel or both channels).</em> |
| public | <strong>setState(</strong><em>bool</em> <strong>$state</strong>)</strong> : <em>void</em><br /><em>Sets state key.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\ModuleCheckAction

> ModuleCheck action message. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>string</em> <strong>$module</strong>)</strong> : <em>void</em><br /><em>Constructor.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\ModuleLoadAction

> ModuleLoad action message. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>string</em> <strong>$module</strong>)</strong> : <em>void</em><br /><em>Constructor. subsystem identifier: cdr enum dnsmgr extconfig manager rtp http Module name.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\MonitorAction

> Monitor action message. Will always record with .wav format and mixing the input and output channels. Also, the filename is mandatory: Mix: true Format: wav PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>string</em> <strong>$channel</strong>, <em>string</em> <strong>$filename</strong>)</strong> : <em>void</em><br /><em>Constructor.</em> |
| public | <strong>setFormat(</strong><em>string</em> <strong>$format</strong>)</strong> : <em>void</em><br /><em>Sets Format</em> |
| public | <strong>setMix(</strong><em>mixed</em> <strong>$mix</strong>)</strong> : <em>void</em><br /><em>Sets mixing true/false</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\OriginateAction

> Originate action message. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>string</em> <strong>$channel</strong>)</strong> : <em>void</em><br /><em>Constructor.</em> |
| public | <strong>setAccount(</strong><em>mixed</em> <strong>$account</strong>)</strong> : <em>void</em><br /><em>Sets Account key.</em> |
| public | <strong>setApplication(</strong><em>string</em> <strong>$application</strong>)</strong> : <em>void</em><br /><em>Sets Application key.</em> |
| public | <strong>setAsync(</strong><em>boolean</em> <strong>$async</strong>)</strong> : <em>void</em><br /><em>Sets Async key.</em> |
| public | <strong>setCallerId(</strong><em>string</em> <strong>$clid</strong>)</strong> : <em>void</em><br /><em>Sets CallerID key.</em> |
| public | <strong>setCodecs(</strong><em>string[]</em> <strong>$codecs</strong>)</strong> : <em>void</em><br /><em>Sets Codecs key.</em> |
| public | <strong>setContext(</strong><em>string</em> <strong>$context</strong>)</strong> : <em>void</em><br /><em>Sets Context key.</em> |
| public | <strong>setData(</strong><em>string</em> <strong>$data</strong>)</strong> : <em>void</em><br /><em>Sets Data key.</em> |
| public | <strong>setExtension(</strong><em>string</em> <strong>$extension</strong>)</strong> : <em>void</em><br /><em>Sets Exten key.</em> |
| public | <strong>setPriority(</strong><em>string</em> <strong>$priority</strong>)</strong> : <em>void</em><br /><em>Sets Priority key.</em> |
| public | <strong>setTimeout(</strong><em>integer</em> <strong>$timeout</strong>)</strong> : <em>void</em><br /><em>Sets Timeout key.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\PJSIPQualifyAction

> PJSIPQualify action message. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>mixed</em> <strong>$endpointName</strong>)</strong> : <em>void</em><br /><em>Constructor.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\PJSIPRegisterAction

> PJSIPRegister action message. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>string</em> <strong>$registration</strong>)</strong> : <em>void</em><br /><em>Constructor.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\PJSIPShowEndpointAction

> PJSIPSipshowendpoint action message. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>mixed</em> <strong>$endpointName</strong>)</strong> : <em>void</em><br /><em>Constructor.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\PJSIPShowEndpointsAction

> PJSIPShowEndpoints action message. Lists PJSIP endpoints. Provides a listing of all endpoints.  For each endpoint an 'EndpointList' event is raised that contains relevant attributes and status information. Once all endpoints have been listed an 'EndpointListComplete' event is issued. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct()</strong> : <em>void</em><br /><em>Constructor.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\PJSIPShowRegistrationsInboundAction

> PJSIPShowRegistrationsInbound action message. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct()</strong> : <em>void</em><br /><em>Constructor.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\PJSIPShowRegistrationsOutboundAction

> PJSIPShowRegistrationsOutbound action message. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct()</strong> : <em>void</em><br /><em>Constructor.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\PJSIPShowResourceListsAction

> PJSIPShowResourceLists action message. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct()</strong> : <em>void</em><br /><em>Constructor.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\PJSIPShowSubscriptionsInboundAction

> PJSIPShowSubscriptionsInbound action message. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct()</strong> : <em>void</em><br /><em>Constructor.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\PJSIPShowSubscriptionsOutboundAction

> PJSIPShowSubscriptionsOutbound action message. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct()</strong> : <em>void</em><br /><em>Constructor.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\PJSIPUnregisterAction

> PJSIPUnregister action message. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>string</em> <strong>$registration</strong>)</strong> : <em>void</em><br /><em>Constructor.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\ParkAction

> Park action message. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>string</em> <strong>$channel1</strong>, <em>string</em> <strong>$channel2</strong>, <em>bool/integer</em> <strong>$timeout=false</strong>, <em>bool/string</em> <strong>$lot=false</strong>)</strong> : <em>void</em><br /><em>Constructor.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\ParkedCallsAction

> ParkedCalls action message. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct()</strong> : <em>void</em><br /><em>Constructor.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\PauseMonitorAction

> Pauses the Monitor for a given channel. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>string</em> <strong>$channel</strong>)</strong> : <em>void</em><br /><em>Constructor.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\PingAction

> Ping action message. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct()</strong> : <em>void</em><br /><em>Constructor.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\PlayDTMFAction

> PlayDTMF action message. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>mixed</em> <strong>$channel</strong>, <em>mixed</em> <strong>$digit</strong>)</strong> : <em>void</em><br /><em>Constructor.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\QueueAddAction

> QueueAdd action message. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>string</em> <strong>$queue</strong>, <em>string</em> <strong>$interface</strong>)</strong> : <em>void</em><br /><em>Constructor.</em> |
| public | <strong>setMemberName(</strong><em>string</em> <strong>$memberName</strong>)</strong> : <em>void</em><br /><em>Sets member name. Key: 'MemberName'.</em> |
| public | <strong>setPaused(</strong><em>string</em> <strong>$paused</strong>)</strong> : <em>void</em><br /><em>Sets paused. Key: 'Paused'.</em> |
| public | <strong>setPenalty(</strong><em>string</em> <strong>$penalty</strong>)</strong> : <em>void</em><br /><em>Sets penalty. Key: 'Penalty'.</em> |
| public | <strong>setStateInterface(</strong><em>string</em> <strong>$stateInterface</strong>)</strong> : <em>void</em><br /><em>Sets state interface ... ? Key: 'StateInterface'.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\QueueLogAction

> QueueLog action message. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>string</em> <strong>$queue</strong>, <em>string</em> <strong>$event</strong>)</strong> : <em>void</em><br /><em>Constructor.</em> |
| public | <strong>setMemberName(</strong><em>string</em> <strong>$interface</strong>)</strong> : <em>void</em><br /><em>Sets member name. Key: 'Interface'.</em> |
| public | <strong>setMessage(</strong><em>string</em> <strong>$message</strong>)</strong> : <em>void</em><br /><em>Sets paused. Key: 'Message'.</em> |
| public | <strong>setUniqueId(</strong><em>string</em> <strong>$uniqueId</strong>)</strong> : <em>void</em><br /><em>Sets penalty. Key: 'UniqueId'.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\QueuePauseAction

> Queue pause action. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>mixed</em> <strong>$interface</strong>, <em>string</em> <strong>$queue=null</strong>, <em>string</em> <strong>$reason=null</strong>)</strong> : <em>void</em><br /><em>Constructor.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\QueuePenaltyAction

> QueuePenalty action message. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>mixed</em> <strong>$interface</strong>, <em>mixed</em> <strong>$penalty</strong>, <em>string</em> <strong>$queue=null</strong>)</strong> : <em>void</em><br /><em>Constructor.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\QueueReloadAction

> QueueReload action message. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>bool/string</em> <strong>$queue=false</strong>, <em>bool/boolean</em> <strong>$members=false</strong>, <em>bool/boolean</em> <strong>$rules=false</strong>, <em>bool/boolean</em> <strong>$parameters=false</strong>)</strong> : <em>void</em><br /><em>Constructor.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\QueueRemoveAction

> QueueRemove action message. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>string</em> <strong>$queue</strong>, <em>string</em> <strong>$interface</strong>)</strong> : <em>void</em><br /><em>Constructor.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\QueueResetAction

> QueueReset action message. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>bool/string</em> <strong>$queue=false</strong>)</strong> : <em>void</em><br /><em>Constructor.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\QueueRuleAction

> QueueRule action message. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>bool/string</em> <strong>$rule=false</strong>)</strong> : <em>void</em><br /><em>Constructor.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\QueueStatusAction

> QueueStatus action message. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>string</em> <strong>$queue=null</strong>, <em>string</em> <strong>$member=null</strong>)</strong> : <em>void</em><br /><em>Constructor.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\QueueSummaryAction

> QueueSummary action message. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>bool/string</em> <strong>$queue=false</strong>)</strong> : <em>void</em><br /><em>Constructor.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\RedirectAction

> Redirect action message. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>string</em> <strong>$channel</strong>, <em>string</em> <strong>$extension</strong>, <em>string</em> <strong>$context</strong>, <em>string</em> <strong>$priority</strong>)</strong> : <em>void</em><br /><em>Constructor.</em> |
| public | <strong>setExtraChannel(</strong><em>string</em> <strong>$channel</strong>)</strong> : <em>void</em><br /><em>Sets key ExtraChannel.</em> |
| public | <strong>setExtraContext(</strong><em>string</em> <strong>$context</strong>)</strong> : <em>void</em><br /><em>Sets key ExtraContext.</em> |
| public | <strong>setExtraExtension(</strong><em>string</em> <strong>$extension</strong>)</strong> : <em>void</em><br /><em>Sets key ExtraExten.</em> |
| public | <strong>setExtraPriority(</strong><em>string</em> <strong>$priority</strong>)</strong> : <em>void</em><br /><em>Sets key ExtraPriority.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\ReloadAction

> Reload action message. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>bool/string</em> <strong>$module=false</strong>)</strong> : <em>void</em><br /><em>Constructor.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\SendTextAction

> SendText action message. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>string</em> <strong>$channel</strong>, <em>string</em> <strong>$message</strong>)</strong> : <em>void</em><br /><em>Constructor.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\ShowDialPlanAction

> ShowDialPlan action message. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>bool/string</em> <strong>$context=false</strong>, <em>bool/string</em> <strong>$extension=false</strong>)</strong> : <em>void</em><br /><em>Constructor.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\StatusAction

> Queries for the status of a channel or all channels if none specified. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>bool/string</em> <strong>$channel=false</strong>)</strong> : <em>void</em><br /><em>Constructor.</em> |
| public | <strong>setVariables(</strong><em>array</em> <strong>$variables=array()</strong>)</strong> : <em>void</em><br /><em>Sets Variables key.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\StopMixMonitorAction

> StopMixMonitor action message. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>string</em> <strong>$channel</strong>)</strong> : <em>void</em><br /><em>Constructor.</em> |
| public | <strong>setMixMonitorId(</strong><em>string</em> <strong>$mixMonitorId</strong>)</strong> : <em>void</em><br /><em>Sets MixMonitorID key.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\StopMonitorAction

> Stops the Monitor for a given channel. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>string</em> <strong>$channel</strong>)</strong> : <em>void</em><br /><em>Constructor.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\UnpauseMonitorAction

> Unpauses the Monitor for a given channel. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>string</em> <strong>$channel</strong>)</strong> : <em>void</em><br /><em>Constructor.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\UpdateConfigAction

> UpdateConfig action message. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct()</strong> : <em>void</em><br /><em>Constructor.</em> |
| public | <strong>setAction(</strong><em>mixed</em> <strong>$input</strong>)</strong> : <em>void</em><br /><em>Sets Action-XXXXXX key.</em> |
| public | <strong>setCat(</strong><em>mixed</em> <strong>$input</strong>)</strong> : <em>void</em><br /><em>Sets Cat-XXXXXX key.</em> |
| public | <strong>setDstFilename(</strong><em>mixed</em> <strong>$filename</strong>)</strong> : <em>void</em><br /><em>Sets Dst Filename key.</em> |
| public | <strong>setLine(</strong><em>mixed</em> <strong>$input</strong>)</strong> : <em>void</em><br /><em>Sets Line-XXXXXX key.</em> |
| public | <strong>setMatch(</strong><em>mixed</em> <strong>$input</strong>)</strong> : <em>void</em><br /><em>Sets Match-XXXXXX key.</em> |
| public | <strong>setOptions(</strong><em>mixed</em> <strong>$input</strong>)</strong> : <em>void</em><br /><em>Sets Options-XXXXXX key.</em> |
| public | <strong>setReload(</strong><em>mixed</em> <strong>$reload</strong>)</strong> : <em>void</em><br /><em>Sets Reload key.</em> |
| public | <strong>setSrcFilename(</strong><em>mixed</em> <strong>$filename</strong>)</strong> : <em>void</em><br /><em>Sets Src filename key.</em> |
| public | <strong>setValue(</strong><em>mixed</em> <strong>$input</strong>)</strong> : <em>void</em><br /><em>Sets Value-XXXXXX key.</em> |
| public | <strong>setVar(</strong><em>mixed</em> <strong>$input</strong>)</strong> : <em>void</em><br /><em>Sets Var-XXXXXX key.</em> |
| protected | <strong>getPaddedCounter()</strong> : <em>string</em><br /><em>Returns the string representation for counter with leading zeroes in UpdateConfig action format.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\UserEventAction

> UserEventAction action message. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>mixed</em> <strong>$userevent</strong>, <em>mixed</em> <strong>$valuesArr=null</strong>)</strong> : <em>void</em><br /><em>Constructor.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\VoicemailUsersListAction

> VoicemailUsersList action message. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct()</strong> : <em>void</em><br /><em>Constructor.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\WaitEventAction

> WaitEvent action message. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>int</em> <strong>$timeout</strong>)</strong> : <em>void</em><br /><em>Constructor.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\DAHDIShowChannelsAction

> DAHDIShowChannels Action Note: Auto Generated using xsltproc

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct()</strong> : <em>void</em><br /><em>Constructor.</em> |
| public | <strong>setDAHDIChannel(</strong><em>string</em> <strong>$dahdichannel</strong>)</strong> : <em>void</em><br /><em>set DAHDIChannel Specify the specific channel number to show. Show all channels if zero or not present.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\StatusAction

> Queries for the status of a channel or all channels if none specified. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>bool/string</em> <strong>$channel=false</strong>)</strong> : <em>void</em><br /><em>Constructor.</em> |
| public | <strong>setVariables(</strong><em>array</em> <strong>$variables=array()</strong>)</strong> : <em>void</em><br /><em>Sets Variables key.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\SCCPHoldCallAction

> Hold/Resume SCCP Sevice action message. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>string</em> <strong>$ChannelId</strong>, <em>string</em> <strong>$DeviceName</strong>, <em>bool/boolean</em> <strong>$Hold=true</strong>, <em>bool/boolean</em> <strong>$SwapChannels=false</strong>)</strong> : <em>void</em><br /><em>Constructor.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\SCCPStartCallAction

> SCCP Start Call action message. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>string</em> <strong>$DeviceName</strong>, <em>string</em> <strong>$LineName</strong>, <em>string</em> <strong>$Number</strong>)</strong> : <em>void</em><br /><em>Constructor.</em> |
| public | <strike><strong>setChannelId(</strong><em>mixed</em> <strong>$ChannelId</strong>)</strong> : <em>string</em></strike><br /><em>DEPRECATED - Please use {@see getLinkeId()}.</em> |
| public | <strong>setLinkedId(</strong><em>mixed</em> <strong>$LinkedId</strong>)</strong> : <em>string</em><br /><em>Returns key: 'LinkedId'.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Action\SCCPStartCallAction

> SCCP Start Call action message. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>string</em> <strong>$DeviceName</strong>, <em>string</em> <strong>$LineName</strong>, <em>string</em> <strong>$Number</strong>)</strong> : <em>void</em><br /><em>Constructor.</em> |
| public | <strike><strong>setChannelId(</strong><em>mixed</em> <strong>$ChannelId</strong>)</strong> : <em>string</em></strike><br /><em>DEPRECATED - Please use {@see getLinkeId()}.</em> |
| public | <strong>setLinkedId(</strong><em>mixed</em> <strong>$LinkedId</strong>)</strong> : <em>string</em><br /><em>Returns key: 'LinkedId'.</em> |

*This class extends [\PAMI\Message\Action\ActionMessage](#class-pamimessageactionactionmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\AGIExecEvent

> Event triggered when an agi executes an application. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getChannel()</strong> : <em>string</em><br /><em>Returns key: 'Channel'.</em> |
| public | <strong>getCommand()</strong> : <em>string</em><br /><em>Returns key: 'Command'.</em> |
| public | <strong>getCommandId()</strong> : <em>string</em><br /><em>Returns key: 'CommandId'.</em> |
| public | <strong>getPrivilege()</strong> : <em>string</em><br /><em>Returns key: 'Privilege'.</em> |
| public | <strong>getResult()</strong> : <em>string</em><br /><em>Returns key: 'Result'.</em> |
| public | <strong>getResultCode()</strong> : <em>string</em><br /><em>Returns key: 'ResultCode'.</em> |
| public | <strong>getSubEvent()</strong> : <em>string</em><br /><em>Returns key: 'SubEvent'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\AsyncAGIEvent

> Event triggered when an async agi is executed. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>string</em> <strong>$rawContent</strong>)</strong> : <em>void</em><br /><em>Constructor.</em> |
| public | <strong>getChannel()</strong> : <em>string</em><br /><em>Returns key: 'Channel'.</em> |
| public | <strong>getCommandId()</strong> : <em>string</em><br /><em>Returns the command id associated with this event.</em> |
| public | <strong>getEnvironment()</strong> : <em>string</em><br /><em>Returns the original environment received with this event.</em> |
| public | <strong>getPrivilege()</strong> : <em>string</em><br /><em>Returns key: 'Privilege'.</em> |
| public | <strong>getResult()</strong> : <em>string</em><br /><em>Returns the agi result for the command issued.</em> |
| public | <strong>getSubEvent()</strong> : <em>string</em><br /><em>Returns key: 'SubEvent'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

*This class implements [\PAMI\AsyncAgi\Event\IAsyncAgiExecEvent](#interface-pamiasyncagieventiasyncagiexecevent), [\PAMI\AsyncAgi\Event\IAsyncAgiStartEvent](#interface-pamiasyncagieventiasyncagistartevent)*

<hr />

### Class: \PAMI\Message\Event\BridgeEvent

> Event triggered when bridging (connecting) two channels. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getBridgeState()</strong> : <em>string</em><br /><em>Returns key: 'Bridgestate'.</em> |
| public | <strong>getBridgeType()</strong> : <em>string</em><br /><em>Returns key: 'Bridgetype'.</em> |
| public | <strong>getCallerID1()</strong> : <em>string</em><br /><em>Returns key: 'CallerID1'.</em> |
| public | <strong>getCallerID2()</strong> : <em>string</em><br /><em>Returns key: 'CallerID2'.</em> |
| public | <strong>getChannel1()</strong> : <em>string</em><br /><em>Returns key: 'Channel1'.</em> |
| public | <strong>getChannel2()</strong> : <em>string</em><br /><em>Returns key: 'Channel2'.</em> |
| public | <strong>getPrivilege()</strong> : <em>string</em><br /><em>Returns key: 'Privilege'.</em> |
| public | <strong>getUniqueID1()</strong> : <em>string</em><br /><em>Returns key: 'UniqueID1'.</em> |
| public | <strong>getUniqueID2()</strong> : <em>string</em><br /><em>Returns key: 'UniqueID2'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\BridgeListItemEvent

> Event triggered when an action BridgeList was issued. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getBridgeCreator()</strong> : <em>string</em><br /><em>Returns key: 'BridgeCreator'.</em> |
| public | <strong>getBridgeName()</strong> : <em>string</em><br /><em>Returns key: 'BridgeName'.</em> |
| public | <strong>getBridgeNumChannels()</strong> : <em>string</em><br /><em>Returns key: 'BridgeNumChannels'.</em> |
| public | <strong>getBridgeTechnology()</strong> : <em>string</em><br /><em>Returns key: 'BridgeTechnology'.</em> |
| public | <strong>getBridgeType()</strong> : <em>string</em><br /><em>Returns key: 'BridgeType'.</em> |
| public | <strong>getBridgeUniqueid()</strong> : <em>string</em><br /><em>Returns key: 'BridgeUniqueid'.</em> |
| public | <strong>getBridgeVideoSourceMode()</strong> : <em>string</em><br /><em>Returns key: 'BridgeNumChannels'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\CallAnsweredEvent

> Event triggered when the 'SCCP Call Answered' Event arrives. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getCallingPartyName()</strong> : <em>string</em><br /><em>Returns key: 'CallingPartyName'.</em> |
| public | <strong>getCallingPartyNumber()</strong> : <em>string</em><br /><em>Returns key: 'CallingPartyNumber'.</em> |
| public | <strong>getChannel()</strong> : <em>string</em><br /><em>Returns key: 'Channel'.</em> |
| public | <strong>getSCCPDevice()</strong> : <em>string</em><br /><em>Returns key: 'SCCPDevice'.</em> |
| public | <strong>getSCCPLine()</strong> : <em>string</em><br /><em>Returns key: 'SCCPLine'.</em> |
| public | <strong>getUniqueid()</strong> : <em>string</em><br /><em>Returns key: 'Uniqueid'.</em> |
| public | <strong>getlastRedirectingParty()</strong> : <em>string</em><br /><em>Returns key: 'lastRedirectingParty'.</em> |
| public | <strong>getoriginalCallingParty()</strong> : <em>string</em><br /><em>Returns key: 'originalCallingParty'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\CallForwardEvent

> Event triggered when the 'SCCPCallForward' Event arrives. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getChannelObjectType()</strong> : <em>string</em><br /><em>Returns key: 'ChannelObjectType'.</em> |
| public | <strong>getChannelType()</strong> : <em>string</em><br /><em>Returns key: 'ChannelType'.</em> |
| public | <strong>getExtension()</strong> : <em>string</em><br /><em>Returns key: 'Extension'.</em> |
| public | <strong>getFeature()</strong> : <em>string</em><br /><em>Returns key: 'Feature'.</em> |
| public | <strong>getSCCPDevice()</strong> : <em>string</em><br /><em>Returns key: 'SCCPDevice'.</em> |
| public | <strong>getSCCPLine()</strong> : <em>string</em><br /><em>Returns key: 'SCCPLine'.</em> |
| public | <strong>getStatus()</strong> : <em>boolean</em><br /><em>Returns key: 'Status'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\ChannelUpdateEvent

> Event triggered when a channel updated its status. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getChannel()</strong> : <em>string</em><br /><em>Returns key: 'Channel'.</em> |
| public | <strong>getChannelType()</strong> : <em>string</em><br /><em>Returns key: 'ChannelType'.</em> |
| public | <strong>getPrivilege()</strong> : <em>string</em><br /><em>Returns key: 'Privilege'.</em> |
| public | <strong>getSIPCallID()</strong> : <em>string</em><br /><em>Returns key: 'SIPcallid'.</em> |
| public | <strong>getSIPFullContact()</strong> : <em>string</em><br /><em>Returns key: 'SIPfullcontact'.</em> |
| public | <strong>getUniqueID()</strong> : <em>string</em><br /><em>Returns key: 'UniqueID'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\ConfbridgeListCompleteEvent

> Event triggered when .. ? PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getListItems()</strong> : <em>key: 'ListItems'.</em><br /><em>Shows count of returned items.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\ConfbridgeListRoomsCompleteEvent

> Event triggered for the end of the list when an action ConfbridgeListRooms is issued. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getListItems()</strong> : <em>string</em><br /><em>Returns key: 'ListItems'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\ConfbridgeListRoomsEvent

> Event triggered for each conference when an action ConfbridgeListRooms is issued. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getConference()</strong> : <em>string</em><br /><em>Returns key: 'Conference'.</em> |
| public | <strong>getLocked()</strong> : <em>string</em><br /><em>Returns key: 'Locked'.</em> |
| public | <strong>getMarked()</strong> : <em>string</em><br /><em>Returns key: 'Marked'.</em> |
| public | <strong>getParties()</strong> : <em>string</em><br /><em>Returns key: 'Parties'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\DAHDIShowChannelsCompleteEvent

> Event triggered for the end of the list when an action DAHDIShowChannels is issued. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getListItems()</strong> : <em>string</em><br /><em>Returns key: 'Items'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\DAHDIShowChannelsEvent

> Event triggered when an action DAHDIShowChannel is issued. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getAlarm()</strong> : <em>string</em><br /><em>Returns key: 'Alarm'.</em> |
| public | <strong>getChannel()</strong> : <em>string</em><br /><em>Returns key: 'DAHDIChannel'.</em> |
| public | <strong>getContext()</strong> : <em>string</em><br /><em>Returns key: 'Context'.</em> |
| public | <strong>getDND()</strong> : <em>string</em><br /><em>Returns key: 'DND'.</em> |
| public | <strong>getSignalling()</strong> : <em>string</em><br /><em>Returns key: 'Signalling'.</em> |
| public | <strong>getSignallingCode()</strong> : <em>string</em><br /><em>Returns key: 'SignallingCode'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\DBGetResponseEvent

> Event triggered when a database key is asked for. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getFamily()</strong> : <em>string</em><br /><em>Returns key: 'Family'.</em> |
| public | <strong>getKeyName()</strong> : <em>string</em><br /><em>Returns key: 'Key'.</em> |
| public | <strong>getValue()</strong> : <em>string</em><br /><em>Returns key: 'Val'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\DNDEvent

> Event triggered when the 'SCCP Do Not Disturb' Event arrives. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getChannelObjectType()</strong> : <em>string</em><br /><em>Returns key: 'ChannelObjectType'.</em> |
| public | <strong>getChannelType()</strong> : <em>string</em><br /><em>Returns key: 'ChannelType'.</em> |
| public | <strong>getFeature()</strong> : <em>string</em><br /><em>Returns key: 'Feature'.</em> |
| public | <strong>getSCCPDevice()</strong> : <em>string</em><br /><em>Returns key: 'SCCPDevice'.</em> |
| public | <strong>getStatus()</strong> : <em>string</em><br /><em>Returns key: 'Status'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\DTMFBeginEvent

> Event triggered when a DTMF digit has started on a channel. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getAccountCode()</strong> : <em>string</em><br /><em>Returns key: 'AccountCode'.</em> |
| public | <strong>getCallerIDName()</strong> : <em>string</em><br /><em>Returns key: 'CallerIDName'.</em> |
| public | <strong>getCallerIDNum()</strong> : <em>string</em><br /><em>Returns key: 'CallerIDNum'.</em> |
| public | <strong>getChannel()</strong> : <em>string</em><br /><em>Returns key: 'Channel'.</em> |
| public | <strong>getChannelState()</strong> : <em>string</em><br /><em>Returns key: 'ChannelState'.</em> |
| public | <strong>getChannelStateDesc()</strong> : <em>string</em><br /><em>Returns key: 'ChannelStateDesc'.</em> |
| public | <strong>getConnectedLineName()</strong> : <em>string</em><br /><em>Returns key: 'ConnectedLineName'.</em> |
| public | <strong>getConnectedLineNum()</strong> : <em>string</em><br /><em>Returns key: 'ConnectedLineNum'.</em> |
| public | <strong>getContext()</strong> : <em>string</em><br /><em>Returns key: 'Context'.</em> |
| public | <strong>getDigit()</strong> : <em>string</em><br /><em>Returns key: 'Digit'.</em> |
| public | <strong>getDirection()</strong> : <em>string</em><br /><em>Returns key: 'Direction'. Received Sent</em> |
| public | <strong>getExten()</strong> : <em>string</em><br /><em>Returns key: 'Exten'.</em> |
| public | <strong>getPriority()</strong> : <em>string</em><br /><em>Returns key: 'Priority'.</em> |
| public | <strong>getPrivilege()</strong> : <em>string</em><br /><em>Returns key: 'Privilege'.</em> |
| public | <strong>getUniqueid()</strong> : <em>string</em><br /><em>Returns key: 'Uniqueid'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\DTMFEndEvent

> Event triggered when a DTMF digit has ended on a channel. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getAccountCode()</strong> : <em>string</em><br /><em>Returns key: 'AccountCode'.</em> |
| public | <strong>getCallerIDName()</strong> : <em>string</em><br /><em>Returns key: 'CallerIDName'.</em> |
| public | <strong>getCallerIDNum()</strong> : <em>string</em><br /><em>Returns key: 'CallerIDNum'.</em> |
| public | <strong>getChannel()</strong> : <em>string</em><br /><em>Returns key: 'Channel'.</em> |
| public | <strong>getChannelState()</strong> : <em>string</em><br /><em>Returns key: 'ChannelState'.</em> |
| public | <strong>getChannelStateDesc()</strong> : <em>string</em><br /><em>Returns key: 'ChannelStateDesc'.</em> |
| public | <strong>getConnectedLineName()</strong> : <em>string</em><br /><em>Returns key: 'ConnectedLineName'.</em> |
| public | <strong>getConnectedLineNum()</strong> : <em>string</em><br /><em>Returns key: 'ConnectedLineNum'.</em> |
| public | <strong>getContext()</strong> : <em>string</em><br /><em>Returns key: 'Context'.</em> |
| public | <strong>getDigit()</strong> : <em>string</em><br /><em>Returns key: 'Digit'.</em> |
| public | <strong>getDirection()</strong> : <em>string</em><br /><em>Returns key: 'Direction'. Received Sent</em> |
| public | <strong>getDurationMs()</strong> : <em>string</em><br /><em>Returns key: 'DurationMs'.</em> |
| public | <strong>getExten()</strong> : <em>string</em><br /><em>Returns key: 'Exten'.</em> |
| public | <strong>getPriority()</strong> : <em>string</em><br /><em>Returns key: 'Priority'.</em> |
| public | <strong>getPrivilege()</strong> : <em>string</em><br /><em>Returns key: 'Privilege'.</em> |
| public | <strong>getUniqueid()</strong> : <em>string</em><br /><em>Returns key: 'Uniqueid'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\DTMFEvent

> Event triggered when a dtmf is detected in a call. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getBegin()</strong> : <em>string</em><br /><em>Returns key: 'Begin'.</em> |
| public | <strong>getChannel()</strong> : <em>string</em><br /><em>Returns key: 'Channel'.</em> |
| public | <strong>getDigit()</strong> : <em>string</em><br /><em>Returns key: 'Digit'.</em> |
| public | <strong>getDirection()</strong> : <em>string</em><br /><em>Returns key: 'Direction'.</em> |
| public | <strong>getEnd()</strong> : <em>string</em><br /><em>Returns key: 'End'.</em> |
| public | <strong>getPrivilege()</strong> : <em>string</em><br /><em>Returns key: 'Privilege'.</em> |
| public | <strong>getUniqueID()</strong> : <em>string</em><br /><em>Returns key: 'UniqueID'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\DeviceStateChangeEvent

> DeviceStateChange Event isListEntry and Part Action: DeviceStateList Note: Auto Generated using xsltproc PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getDevice()</strong> : <em>string</em><br /><em>get Device Returns:The device whose state has changed</em> |
| public | <strong>getState()</strong> : <em>string</em><br /><em>get State Returns:The new state of the device</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\DeviceStatusEvent

> Event triggered when the 'SCCP Device Status' Event arrives. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getChannelObjectType()</strong> : <em>string</em><br /><em>Returns key: 'ChannelObjectType'.</em> |
| public | <strong>getChannelType()</strong> : <em>string</em><br /><em>Returns key: 'ChannelType'.</em> |
| public | <strong>getDeviceStatus()</strong> : <em>string</em><br /><em>Returns key: 'DeviceStatus'.</em> |
| public | <strong>getSCCPDevice()</strong> : <em>string</em><br /><em>Returns key: 'SCCPDevice'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\DialEvent

> Event triggered when a dial is executed. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getCallerIDName()</strong> : <em>string</em><br /><em>Returns key: 'CallerIDName'.</em> |
| public | <strong>getCallerIDNum()</strong> : <em>string</em><br /><em>Returns key: 'CallerIDNum'.</em> |
| public | <strong>getChannel()</strong> : <em>string</em><br /><em>Returns key: 'Channel'.</em> |
| public | <strong>getDestUniqueID()</strong> : <em>string</em><br /><em>Returns key: 'DestUniqueID'.</em> |
| public | <strong>getDestination()</strong> : <em>string</em><br /><em>Returns key: 'Destination'.</em> |
| public | <strong>getDialStatus()</strong> : <em>string</em><br /><em>Returns key: 'DialStatus'.</em> |
| public | <strong>getDialString()</strong> : <em>string</em><br /><em>Returns key: 'DialString'.</em> |
| public | <strong>getPrivilege()</strong> : <em>string</em><br /><em>Returns key: 'Privilege'.</em> |
| public | <strong>getSubEvent()</strong> : <em>string</em><br /><em>Returns key: 'SubEvent'.</em> |
| public | <strong>getUniqueID()</strong> : <em>string</em><br /><em>Returns key: 'UniqueID'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\DongleDeviceEntryEvent

> Event triggered when getting a dongle device. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getActive()</strong> : <em>string</em><br /><em>Returns key: 'Active'.</em> |
| public | <strong>getAlerting()</strong> : <em>string</em><br /><em>Returns key: 'Alerting'.</em> |
| public | <strong>getAudioSetting()</strong> : <em>string</em><br /><em>Returns key: 'AudioSetting'.</em> |
| public | <strong>getAudioState()</strong> : <em>string</em><br /><em>Returns key: 'AudioState'.</em> |
| public | <strong>getAutoDeleteSMS()</strong> : <em>string</em><br /><em>Returns key: 'AutoDeleteSMS'.</em> |
| public | <strong>getCallWaitingSetting()</strong> : <em>string</em><br /><em>Returns key: 'CallWaitingSetting'.</em> |
| public | <strong>getCallWaitingState()</strong> : <em>string</em><br /><em>Returns key: 'CallWaitingState'.</em> |
| public | <strong>getCallsChannels()</strong> : <em>string</em><br /><em>Returns key: 'CallsChannels'.</em> |
| public | <strong>getCellID()</strong> : <em>string</em><br /><em>Returns key: 'CellID'.</em> |
| public | <strong>getChannelLanguage()</strong> : <em>string</em><br /><em>Returns key: 'ChannelLanguage'.</em> |
| public | <strong>getCommandsInQueue()</strong> : <em>string</em><br /><em>Returns key: 'CommandsInQueue'.</em> |
| public | <strong>getContext()</strong> : <em>string</em><br /><em>Returns key: 'Context'.</em> |
| public | <strong>getCurrentDeviceState()</strong> : <em>string</em><br /><em>Returns key: 'CurrentDeviceState'.</em> |
| public | <strong>getDTMF()</strong> : <em>string</em><br /><em>Returns key: 'DTMF'.</em> |
| public | <strong>getDataSetting()</strong> : <em>string</em><br /><em>Returns key: 'DataSetting'.</em> |
| public | <strong>getDataState()</strong> : <em>string</em><br /><em>Returns key: 'DataState'.</em> |
| public | <strong>getDefaultCallingPres()</strong> : <em>string</em><br /><em>Returns key: 'DefaultCallingPres'.</em> |
| public | <strong>getDesiredDeviceState()</strong> : <em>string</em><br /><em>Returns key: 'DesiredDeviceState'.</em> |
| public | <strong>getDevice()</strong> : <em>string</em><br /><em>Returns key: 'Device'.</em> |
| public | <strong>getDialing()</strong> : <em>string</em><br /><em>Returns key: 'Dialing'.</em> |
| public | <strong>getDisableSMS()</strong> : <em>string</em><br /><em>Returns key: 'DisableSMS'.</em> |
| public | <strong>getExten()</strong> : <em>string</em><br /><em>Returns key: 'Exten'.</em> |
| public | <strong>getFirmware()</strong> : <em>string</em><br /><em>Returns key: 'Firmware'.</em> |
| public | <strong>getGSMRegistrationStatus()</strong> : <em>string</em><br /><em>Returns key: 'GSMRegistrationStatus'.</em> |
| public | <strong>getGroup()</strong> : <em>string</em><br /><em>Returns key: 'Group'.</em> |
| public | <strong>getHeld()</strong> : <em>string</em><br /><em>Returns key: 'Held'.</em> |
| public | <strong>getIMEISetting()</strong> : <em>string</em><br /><em>Returns key: 'IMEISetting'.</em> |
| public | <strong>getIMEIState()</strong> : <em>string</em><br /><em>Returns key: 'IMEIState'.</em> |
| public | <strong>getIMSISetting()</strong> : <em>string</em><br /><em>Returns key: 'IMSISetting'.</em> |
| public | <strong>getIMSIState()</strong> : <em>string</em><br /><em>Returns key: 'IMSIState'.</em> |
| public | <strong>getIncoming()</strong> : <em>string</em><br /><em>Returns key: 'Incoming'.</em> |
| public | <strong>getInitializing()</strong> : <em>string</em><br /><em>Returns key: 'Initializing'.</em> |
| public | <strong>getLocationAreaCode()</strong> : <em>string</em><br /><em>Returns key: 'LocationAreaCode'.</em> |
| public | <strong>getManufacturer()</strong> : <em>string</em><br /><em>Returns key: 'Manufacturer'.</em> |
| public | <strong>getMinimalDTMFDuration()</strong> : <em>string</em><br /><em>Returns key: 'MinimalDTMFDuration'.</em> |
| public | <strong>getMinimalDTMFGap()</strong> : <em>string</em><br /><em>Returns key: 'MinimalDTMFGap'.</em> |
| public | <strong>getMinimalDTMFInterval()</strong> : <em>string</em><br /><em>Returns key: 'MinimalDTMFInterval'.</em> |
| public | <strong>getMode()</strong> : <em>string</em><br /><em>Returns key: 'Mode'.</em> |
| public | <strong>getModel()</strong> : <em>string</em><br /><em>Returns key: 'Model'.</em> |
| public | <strong>getProviderName()</strong> : <em>string</em><br /><em>Returns key: 'ProviderName'.</em> |
| public | <strong>getRSSI()</strong> : <em>string</em><br /><em>Returns key: 'RSSI'.</em> |
| public | <strong>getRXGain()</strong> : <em>string</em><br /><em>Returns key: 'RXGain'.</em> |
| public | <strong>getReleasing()</strong> : <em>string</em><br /><em>Returns key: 'Releasing'.</em> |
| public | <strong>getResetDongle()</strong> : <em>string</em><br /><em>Returns key: 'ResetDongle'.</em> |
| public | <strong>getSMS()</strong> : <em>string</em><br /><em>Returns key: 'SMS'.</em> |
| public | <strong>getSMSPDU()</strong> : <em>string</em><br /><em>Returns key: 'SMSPDU'.</em> |
| public | <strong>getSMSServiceCenter()</strong> : <em>string</em><br /><em>Returns key: 'SMSServiceCenter'.</em> |
| public | <strong>getState()</strong> : <em>string</em><br /><em>Returns key: 'State'.</em> |
| public | <strong>getSubmode()</strong> : <em>string</em><br /><em>Returns key: 'Submode'.</em> |
| public | <strong>getSubscriberNumber()</strong> : <em>string</em><br /><em>Returns key: 'SubscriberNumber'.</em> |
| public | <strong>getTXGain()</strong> : <em>string</em><br /><em>Returns key: 'TXGain'.</em> |
| public | <strong>getTasksInQueue()</strong> : <em>string</em><br /><em>Returns key: 'TasksInQueue'.</em> |
| public | <strong>getU2DIAG()</strong> : <em>string</em><br /><em>Returns key: 'U2DIAG'.</em> |
| public | <strong>getUSSDUse7BitEncoding()</strong> : <em>string</em><br /><em>Returns key: 'USSDUse7BitEncoding'.</em> |
| public | <strong>getUSSDUseUCS2Decoding()</strong> : <em>string</em><br /><em>Returns key: 'USSDUseUCS2Decoding'.</em> |
| public | <strong>getUseCallingPres()</strong> : <em>string</em><br /><em>Returns key: 'UseCallingPres'.</em> |
| public | <strong>getUseUCS2Encoding()</strong> : <em>string</em><br /><em>Returns key: 'UseUCS2Encoding'.</em> |
| public | <strong>getVoice()</strong> : <em>string</em><br /><em>Returns key: 'Voice'.</em> |
| public | <strong>getWaiting()</strong> : <em>string</em><br /><em>Returns key: 'Waiting'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\DongleNewCUSDEvent

> Event triggered when a ussd was queued for sent by dongle. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getDevice()</strong> : <em>string</em><br /><em>Returns key: 'Device'.</em> |
| public | <strong>getMessage()</strong> : <em>string</em><br /><em>Returns key: 'Message'.</em> |
| public | <strong>getPrivilege()</strong> : <em>string</em><br /><em>Returns key: 'Privilege'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\DongleNewUSSDBase64Event

> Event triggered when a ussd was queued for sent by dongle. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getDevice()</strong> : <em>string</em><br /><em>Returns key: 'Device'.</em> |
| public | <strong>getMessage()</strong> : <em>string</em><br /><em>Returns key: 'Message'.</em> |
| public | <strong>getPrivilege()</strong> : <em>string</em><br /><em>Returns key: 'Privilege'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\DongleNewUSSDEvent

> Event triggered when a ussd was queued for sent by dongle. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getDevice()</strong> : <em>string</em><br /><em>Returns key: 'Device'.</em> |
| public | <strong>getLineCount()</strong> : <em>string</em><br /><em>Returns key: 'LineCount'.</em> |
| public | <strong>getPrivilege()</strong> : <em>string</em><br /><em>Returns key: 'Privilege'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\DongleSMSStatusEvent

> Event triggered when a sms was queued for sent by dongle. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getDevice()</strong> : <em>string</em><br /><em>Returns key: 'Device'.</em> |
| public | <strong>getId()</strong> : <em>string</em><br /><em>Returns key: 'Id'.</em> |
| public | <strong>getPrivilege()</strong> : <em>string</em><br /><em>Returns key: 'Privilege'.</em> |
| public | <strong>getStatus()</strong> : <em>string</em><br /><em>Returns key: 'Status'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\DongleShowDevicesCompleteEvent

> Event triggered for the end of the list of dongle channels. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getListItems()</strong> : <em>string</em><br /><em>Returns key: 'ListItems'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\DongleStatusEvent

> Event triggered starting/stopping a dongle. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getDevice()</strong> : <em>string</em><br /><em>Returns key: 'Device'.</em> |
| public | <strong>getPrivilege()</strong> : <em>string</em><br /><em>Returns key: 'Privilege'.</em> |
| public | <strong>getStatus()</strong> : <em>string</em><br /><em>Returns key: 'Status'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\DongleUSSDStatusEvent

> Event triggered when a ussd was queued for sent by dongle. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getDevice()</strong> : <em>string</em><br /><em>Returns key: 'Device'.</em> |
| public | <strong>getId()</strong> : <em>string</em><br /><em>Returns key: 'Id'.</em> |
| public | <strong>getPrivilege()</strong> : <em>string</em><br /><em>Returns key: 'Privilege'.</em> |
| public | <strong>getStatus()</strong> : <em>string</em><br /><em>Returns key: 'Status'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\EventMessage (abstract)

> This is a generic event received from ami. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getName()</strong> : <em>string</em><br /><em>Returns key 'Event'.</em> |

*This class extends [\PAMI\Message\IncomingMessage](#class-pamimessageincomingmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\IdentifyDetailEvent

> IdentifyDetail Event isListEntry and Part Action: PJSIPShowEndpoint Note: Auto Generated using xsltproc PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getEndpoint()</strong> : <em>string</em><br /><em>get Endpoint Returns:Name of endpoint identified</em> |
| public | <strong>getEndpointName()</strong> : <em>string</em><br /><em>get EndpointName Returns:The name of the endpoint associated with this information.</em> |
| public | <strong>getMatch()</strong> : <em>string</em><br /><em>get Match Returns:IP addresses or networks to match against.</em> |
| public | <strong>getMatchHeader()</strong> : <em>string</em><br /><em>get MatchHeader Returns:Header/value pair to match against.</em> |
| public | <strong>getObjectName()</strong> : <em>string</em><br /><em>get ObjectName Returns:The name of this object.</em> |
| public | <strong>getObjectType()</strong> : <em>string</em><br /><em>get ObjectType Returns:The object's type. This will always be 'identify'.</em> |
| public | <strong>getSrvLookups()</strong> : <em>string</em><br /><em>get SrvLookups Returns:Perform SRV lookups for provided hostnames.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\InboundRegistrationDetailEvent

> Event from PJSIPShowRegistrationsInbound PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getAuthenticateQualify()</strong> : <em>string</em><br /><em>Returns key: 'AuthenticateQualify'. Authenticates a qualify request if needed</em> |
| public | <strong>getContact()</strong> : <em>string</em><br /><em>Returns key: 'Contact'.</em> |
| public | <strong>getContacts()</strong> : <em>string</em><br /><em>Returns key: 'Contacts'.</em> |
| public | <strong>getContactsRegistered()</strong> : <em>string</em><br /><em>Returns key: 'ContactsRegistered'. The number of non-permanent contacts associated with this AoR.</em> |
| public | <strong>getDefaultExpiration()</strong> : <em>string</em><br /><em>Returns key: 'DefaultExpiration'. Default expiration time in seconds for contacts that are dynamicallybound to an AoR.</em> |
| public | <strong>getEndpointName()</strong> : <em>string</em><br /><em>Returns key: 'EndpointName'. The name of the endpoint associated with this information.</em> |
| public | <strong>getMailboxes()</strong> : <em>string</em><br /><em>Returns key: 'Mailboxes'. Allow subscriptions for the specified mailbox(es)</em> |
| public | <strong>getMaxContacts()</strong> : <em>string</em><br /><em>Returns key: 'MaxContacts'. Maximum number of contacts that can bind to an AoR</em> |
| public | <strong>getMaximumExpiration()</strong> : <em>string</em><br /><em>Returns key: 'MaximumExpiration'. Maximum time to keep an AoR</em> |
| public | <strong>getMinimumExpiration()</strong> : <em>string</em><br /><em>Returns key: 'MinimumExpiration'. Minimum keep alive time for an AoR</em> |
| public | <strong>getObjectName()</strong> : <em>string</em><br /><em>Returns key: 'ObjectName'. The name of this object.</em> |
| public | <strong>getObjectType()</strong> : <em>string</em><br /><em>Returns key: 'ObjectType'. The object's type. This will always be 'aor'.</em> |
| public | <strong>getOutboundProxy()</strong> : <em>string</em><br /><em>Returns key: 'OutboundProxy'. Outbound proxy used when sending OPTIONS request</em> |
| public | <strong>getQualifyFrequency()</strong> : <em>string</em><br /><em>Returns key: 'QualifyFrequency'. Interval at which to qualify an AoR</em> |
| public | <strong>getRemoveExisting()</strong> : <em>string</em><br /><em>Returns key: 'RemoveExisting'. Determines whether new contacts replace existing ones.</em> |
| public | <strong>getSupportPath()</strong> : <em>string</em><br /><em>Returns key: 'SupportPath'. Enables Path support for REGISTER requests and Route support forother requests.</em> |
| public | <strong>getTotalContacts()</strong> : <em>string</em><br /><em>Returns key: 'TotalContacts'. The total number of contacts associated with this AoR.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\JabberEventEvent

> Event Jabber PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getAccount()</strong> : <em>string</em><br /><em>Returns key: 'Account'.</em> |
| public | <strong>getPacket()</strong> : <em>string</em><br /><em>Returns key: 'Packet'.</em> |
| public | <strong>getPrivilege()</strong> : <em>string</em><br /><em>Returns key: 'Privilege'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\JoinEvent

> Event triggered when .. ? PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getCallerIdName()</strong> : <em>string</em><br /><em>Returns key: 'CallerIdName'.</em> |
| public | <strong>getCallerIdNum()</strong> : <em>string</em><br /><em>Returns key: 'CallerIdNum'.</em> |
| public | <strong>getChannel()</strong> : <em>string</em><br /><em>Returns key: 'Channel'.</em> |
| public | <strong>getCount()</strong> : <em>string</em><br /><em>Returns key: 'Count'.</em> |
| public | <strong>getPosition()</strong> : <em>string</em><br /><em>Returns key: 'Position'.</em> |
| public | <strong>getPrivilege()</strong> : <em>string</em><br /><em>Returns key: 'Privilege'.</em> |
| public | <strong>getQueue()</strong> : <em>string</em><br /><em>Returns key: 'Queue'.</em> |
| public | <strong>getUniqueID()</strong> : <em>string</em><br /><em>Returns key: 'UniqueID'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\LeaveEvent

> Event triggered when .. ? PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getChannel()</strong> : <em>string</em><br /><em>Returns key: 'Channel'.</em> |
| public | <strong>getCount()</strong> : <em>string</em><br /><em>Returns key: 'Count'.</em> |
| public | <strong>getPrivilege()</strong> : <em>string</em><br /><em>Returns key: 'Privilege'.</em> |
| public | <strong>getQueue()</strong> : <em>string</em><br /><em>Returns key: 'Queue'.</em> |
| public | <strong>getUniqueID()</strong> : <em>string</em><br /><em>Returns key: 'UniqueID'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\LinkEvent

> Event triggered when linking (connecting) two channels. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getCallerID1()</strong> : <em>string</em><br /><em>Returns key: 'CallerID1'.</em> |
| public | <strong>getCallerID2()</strong> : <em>string</em><br /><em>Returns key: 'CallerID2'.</em> |
| public | <strong>getChannel1()</strong> : <em>string</em><br /><em>Returns key: 'Channel1'.</em> |
| public | <strong>getChannel2()</strong> : <em>string</em><br /><em>Returns key: 'Channel2'.</em> |
| public | <strong>getPrivilege()</strong> : <em>string</em><br /><em>Returns key: 'Privilege'.</em> |
| public | <strong>getUniqueID1()</strong> : <em>string</em><br /><em>Returns key: 'UniqueID1'.</em> |
| public | <strong>getUniqueID2()</strong> : <em>string</em><br /><em>Returns key: 'UniqueID2'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\ListDialPlanEvent

> Event triggered when an action ShowDialPlan is issued. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getApplication()</strong> : <em>string</em><br /><em>Returns key: 'Application'.</em> |
| public | <strong>getApplicationData()</strong> : <em>string</em><br /><em>Returns key: 'AppData'.</em> |
| public | <strong>getContext()</strong> : <em>string</em><br /><em>Returns key: 'Context'.</em> |
| public | <strong>getExtension()</strong> : <em>string</em><br /><em>Returns key: 'Extension'.</em> |
| public | <strong>getIncludeContext()</strong> : <em>string</em><br /><em>Returns key: 'IncludeContext'.</em> |
| public | <strong>getPriority()</strong> : <em>string</em><br /><em>Returns key: 'Priority'.</em> |
| public | <strong>getRegistrar()</strong> : <em>string</em><br /><em>Returns key: 'Registrar'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\MasqueradeEvent

> Event triggered when an extension is masqued?? PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getClone()</strong> : <em>string</em><br /><em>Returns key: 'Clone'.</em> |
| public | <strong>getCloneState()</strong> : <em>string</em><br /><em>Returns key: 'CloneState'.</em> |
| public | <strong>getOriginal()</strong> : <em>string</em><br /><em>Returns key: 'Original'.</em> |
| public | <strong>getOriginalState()</strong> : <em>string</em><br /><em>Returns key: 'OriginalState'.</em> |
| public | <strong>getPrivilege()</strong> : <em>string</em><br /><em>Returns key: 'Privilege'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\MessageWaitingEvent

> Event triggered when ..? PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getMailbox()</strong> : <em>string</em><br /><em>Returns key: 'Mailbox'.</em> |
| public | <strong>getPrivilege()</strong> : <em>string</em><br /><em>Returns key: 'Privilege'.</em> |
| public | <strong>getWaiting()</strong> : <em>string</em><br /><em>Returns key: 'Waiting'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\MusicOnHoldEvent

> Event triggered when .. ? PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getChannel()</strong> : <em>string</em><br /><em>Returns key: 'Channel'.</em> |
| public | <strong>getPrivilege()</strong> : <em>string</em><br /><em>Returns key: 'Privilege'.</em> |
| public | <strong>getState()</strong> : <em>string</em><br /><em>Returns key: 'State'.</em> |
| public | <strong>getUniqueID()</strong> : <em>string</em><br /><em>Returns key: 'UniqueID'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\OutboundRegistrationDetailEvent

> Event from PJSIPShowRegistrationsOutbound PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getAuthRejectionPermanent()</strong> : <em>string</em><br /><em>Returns key: 'AuthRejectionPermanent'.</em> |
| public | <strong>getClientUri()</strong> : <em>string</em><br /><em>Returns key: 'ClientUri'.</em> |
| public | <strong>getContactUser()</strong> : <em>string</em><br /><em>Returns key: 'ContactUser'.</em> |
| public | <strong>getExpiration()</strong> : <em>string</em><br /><em>Returns key: 'Expiration'.</em> |
| public | <strong>getForbiddenRetryInterval()</strong> : <em>string</em><br /><em>Returns key: 'ForbiddenRetryInterval'.</em> |
| public | <strong>getMaxRetries()</strong> : <em>string</em><br /><em>Returns key: 'MaxRetries'.</em> |
| public | <strong>getNextReg()</strong> : <em>string</em><br /><em>Returns key: 'NextReg'.</em> |
| public | <strong>getObjectName()</strong> : <em>string</em><br /><em>Returns key: 'ObjectName'.</em> |
| public | <strong>getObjectType()</strong> : <em>string</em><br /><em>Returns key: 'ObjectType'.</em> |
| public | <strong>getOutboundAuth()</strong> : <em>string</em><br /><em>Returns key: 'OutboundAuth'.</em> |
| public | <strong>getOutboundProxy()</strong> : <em>string</em><br /><em>Returns key: 'OutboundProxy'.</em> |
| public | <strong>getRetryInterval()</strong> : <em>string</em><br /><em>Returns key: 'RetryInterval'.</em> |
| public | <strong>getServerUri()</strong> : <em>string</em><br /><em>Returns key: 'ServerUri'.</em> |
| public | <strong>getStatus()</strong> : <em>string</em><br /><em>Returns key: 'Status'.</em> |
| public | <strong>getSupportPath()</strong> : <em>string</em><br /><em>Returns key: 'SupportPath'.</em> |
| public | <strong>getTransport()</strong> : <em>string</em><br /><em>Returns key: 'Transport'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\OutboundSubscriptionDetailEvent

> Event from PJSIPShowSubscriptionsOutbound PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getObjectName()</strong> : <em>string</em><br /><em>Returns key: 'ObjectName'. The name of this object.</em> |
| public | <strong>getObjectType()</strong> : <em>string</em><br /><em>Returns key: 'ObjectType'. The object's type. This will always be 'aor'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\ParkedCallsCompleteEvent

> Event triggered for the end of the list when an action ParkedCalls is issued. PHP Version 5

| Visibility | Function |
|:-----------|:---------|

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\PeerEntryEvent

> Event triggered for each peer when an action Sippeers is issued. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getACL()</strong> : <em>string</em><br /><em>Returns key: 'ACL'.</em> |
| public | <strong>getChannelObjectType()</strong> : <em>string</em><br /><em>Returns key: 'ChanObjectType'.</em> |
| public | <strong>getChannelType()</strong> : <em>string</em><br /><em>Returns key: 'ChannelType'.</em> |
| public | <strong>getDynamic()</strong> : <em>string</em><br /><em>Returns key: 'Dynamic'.</em> |
| public | <strong>getIPAddress()</strong> : <em>string</em><br /><em>Returns key: 'IPAddress'.</em> |
| public | <strong>getIPPort()</strong> : <em>string</em><br /><em>Returns key: 'IPPort'.</em> |
| public | <strong>getNatSupport()</strong> : <em>string</em><br /><em>Returns key: 'NatSupport'.</em> |
| public | <strong>getObjectName()</strong> : <em>string</em><br /><em>Returns key: 'ObjectName'.</em> |
| public | <strong>getRealtimeDevice()</strong> : <em>string</em><br /><em>Returns key: 'RealtimeDevice'.</em> |
| public | <strong>getStatus()</strong> : <em>string</em><br /><em>Returns key: 'Status'.</em> |
| public | <strong>getTextSupport()</strong> : <em>string</em><br /><em>Returns key: 'TextSupport'.</em> |
| public | <strong>getVideoSupport()</strong> : <em>string</em><br /><em>Returns key: 'VideoSupport'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\PeerlistCompleteEvent

> Event triggered for the end of the list when an action Sippeers is issued. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getListItems()</strong> : <em>string</em><br /><em>Returns key: 'ListItems'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\QueueEntryEvent

> Event triggered for a QueueStatus action. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getCallerIDName()</strong> : <em>integer</em><br /><em>Returns key: 'CallerIDName'.</em> |
| public | <strong>getCallerIDNum()</strong> : <em>integer</em><br /><em>Returns key: 'CallerIDNum'.</em> |
| public | <strong>getChannel()</strong> : <em>string</em><br /><em>Returns key: 'Channel'.</em> |
| public | <strong>getConnectedLineName()</strong> : <em>integer</em><br /><em>Returns key: 'ConnectedLineName'.</em> |
| public | <strong>getConnectedLineNum()</strong> : <em>integer</em><br /><em>Returns key: 'ConnectedLineNum'.</em> |
| public | <strong>getPosition()</strong> : <em>integer</em><br /><em>Returns key: 'Position'.</em> |
| public | <strong>getQueue()</strong> : <em>string</em><br /><em>Returns key: 'Queue'.</em> |
| public | <strong>getUniqueid()</strong> : <em>integer</em><br /><em>Returns key: 'Uniqueid'.</em> |
| public | <strong>getWait()</strong> : <em>float</em><br /><em>Returns key: 'Wait'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\QueueMemberEvent

> Event triggered for a QueueStatus action. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getCallsTaken()</strong> : <em>integer</em><br /><em>Returns key: 'CallsTaken'.</em> |
| public | <strong>getIsInCall()</strong> : <em>int</em><br /><em>Returns key: 'IsInCall'.</em> |
| public | <strong>getLastCall()</strong> : <em>int</em><br /><em>Returns key: 'LastCall'.</em> |
| public | <strong>getLocation()</strong> : <em>string</em><br /><em>Returns key: 'Location'.</em> |
| public | <strong>getMemberName()</strong> : <em>string</em><br /><em>Returns key: 'MemberName'.</em> |
| public | <strong>getMembership()</strong> : <em>string</em><br /><em>Returns key: 'Membership'.</em> |
| public | <strong>getPaused()</strong> : <em>boolean</em><br /><em>Returns key: 'Pause'.</em> |
| public | <strong>getPenalty()</strong> : <em>integer</em><br /><em>Returns key: 'Penalty'.</em> |
| public | <strong>getQueue()</strong> : <em>string</em><br /><em>Returns key: 'Queue'.</em> |
| public | <strong>getStateInterface()</strong> : <em>string</em><br /><em>Returns key: 'StateInterface'.</em> |
| public | <strong>getStatus()</strong> : <em>integer</em><br /><em>Returns key: 'Status'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\QueueMemberPausedEvent

> Event triggered for a change in a queue member (pause/unpause). PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getLocation()</strong> : <em>string</em><br /><em>Returns key: 'Location'.</em> |
| public | <strong>getMemberName()</strong> : <em>string</em><br /><em>Returns key: 'MemberName'.</em> |
| public | <strong>getPaused()</strong> : <em>boolean</em><br /><em>Returns key: 'Paused'.</em> |
| public | <strong>getPrivilege()</strong> : <em>string</em><br /><em>Returns key: 'Privilege'.</em> |
| public | <strong>getQueue()</strong> : <em>string</em><br /><em>Returns key: 'Queue'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\QueueParamsEvent

> Event triggered for a QueueStatus action. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getAbandoned()</strong> : <em>integer</em><br /><em>Returns key: 'Abandoned'.</em> |
| public | <strong>getCalls()</strong> : <em>integer</em><br /><em>Returns key: 'Calls'.</em> |
| public | <strong>getCompleted()</strong> : <em>integer</em><br /><em>Returns key: 'Completed'.</em> |
| public | <strong>getHoldTime()</strong> : <em>integer</em><br /><em>Returns key: 'HoldTime'.</em> |
| public | <strong>getMax()</strong> : <em>integer</em><br /><em>Returns key: 'Max'.</em> |
| public | <strong>getQueue()</strong> : <em>string</em><br /><em>Returns key: 'Queue'.</em> |
| public | <strong>getServiceLevel()</strong> : <em>integer</em><br /><em>Returns key: 'ServiceLevel'.</em> |
| public | <strong>getServiceLevelPerf()</strong> : <em>float</em><br /><em>Returns key: 'ServiceLevelPerf'.</em> |
| public | <strong>getStrategy()</strong> : <em>string</em><br /><em>Returns key: 'Strategy'.</em> |
| public | <strong>getTalkTime()</strong> : <em>integer</em><br /><em>Returns key: 'TalkTime'.</em> |
| public | <strong>getWeight()</strong> : <em>integer</em><br /><em>Returns key: 'Weight'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\QueueStatusCompleteEvent

> Event triggered for the end of the list when an action QueueStatus is issued. PHP Version 5

| Visibility | Function |
|:-----------|:---------|

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\QueueSummaryCompleteEvent

> Event triggered for the end of the list when an action QueueSummary is issued. PHP Version 5

| Visibility | Function |
|:-----------|:---------|

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\QueueSummaryEvent

> Event triggered for a QueueSummary action. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getAvailable()</strong> : <em>string</em><br /><em>Returns key: 'Available'.</em> |
| public | <strong>getCallers()</strong> : <em>string</em><br /><em>Returns key: 'Callers'.</em> |
| public | <strong>getHoldTime()</strong> : <em>integer</em><br /><em>Returns key: 'HoldTime'.</em> |
| public | <strong>getLoggedIn()</strong> : <em>string</em><br /><em>Returns key: 'LoggedIn'.</em> |
| public | <strong>getLongestHoldTime()</strong> : <em>integer</em><br /><em>Returns key: 'LongestHoldTime'.</em> |
| public | <strong>getQueue()</strong> : <em>string</em><br /><em>Returns key: 'Queue'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\RTCPReceiverStatEvent

> Event triggered when exchanging rtp stats. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getJitter()</strong> : <em>string</em><br /><em>Returns key: 'Jitter'.</em> |
| public | <strong>getLostPackets()</strong> : <em>string</em><br /><em>Returns key: 'LostPackets'.</em> |
| public | <strong>getPrivilege()</strong> : <em>string</em><br /><em>Returns key: 'Privilege'.</em> |
| public | <strong>getRRCount()</strong> : <em>string</em><br /><em>Returns key: 'RRCount'.</em> |
| public | <strong>getReceivedPackets()</strong> : <em>string</em><br /><em>Returns key: 'ReceivedPackets'.</em> |
| public | <strong>getSSRC()</strong> : <em>string</em><br /><em>Returns key: 'SSRC'.</em> |
| public | <strong>getTransit()</strong> : <em>string</em><br /><em>Returns key: 'Transit'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\RTPReceiverStatEvent

> Event triggered when exchanging rtp stats. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getJitter()</strong> : <em>string</em><br /><em>Returns key: 'Jitter'.</em> |
| public | <strong>getLostPackets()</strong> : <em>string</em><br /><em>Returns key: 'LostPackets'.</em> |
| public | <strong>getPrivilege()</strong> : <em>string</em><br /><em>Returns key: 'Privilege'.</em> |
| public | <strong>getRRCount()</strong> : <em>string</em><br /><em>Returns key: 'RRCount'.</em> |
| public | <strong>getReceivedPackets()</strong> : <em>string</em><br /><em>Returns key: 'ReceivedPackets'.</em> |
| public | <strong>getSSRC()</strong> : <em>string</em><br /><em>Returns key: 'SSRC'.</em> |
| public | <strong>getTransit()</strong> : <em>string</em><br /><em>Returns key: 'Transit'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\RTPSenderStatEvent

> Event triggered when exchanging rtp stats. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getJitter()</strong> : <em>string</em><br /><em>Returns key: 'Jitter'.</em> |
| public | <strong>getLostPackets()</strong> : <em>string</em><br /><em>Returns key: 'LostPackets'.</em> |
| public | <strong>getPrivilege()</strong> : <em>string</em><br /><em>Returns key: 'Privilege'.</em> |
| public | <strong>getRTT()</strong> : <em>string</em><br /><em>Returns key: 'RTT'.</em> |
| public | <strong>getSRCount()</strong> : <em>string</em><br /><em>Returns key: 'SRCount'.</em> |
| public | <strong>getSSRC()</strong> : <em>string</em><br /><em>Returns key: 'SSRC'.</em> |
| public | <strong>getSentPackets()</strong> : <em>string</em><br /><em>Returns key: 'SentPackets'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\RegistrationsCompleteEvent

> Event triggered for the end of the list when an action Sipshowregistry is issued. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getListItems()</strong> : <em>string</em><br /><em>Returns key: 'ListItems'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\RenameEvent

> Event triggered when renaming a channel. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getChannel()</strong> : <em>string</em><br /><em>Returns key: 'Channel'.</em> |
| public | <strong>getNewname()</strong> : <em>string</em><br /><em>Returns key: 'Newname'.</em> |
| public | <strong>getOldname()</strong> : <em>string</em><br /><em>Returns key: 'Oldname'.</em> |
| public | <strong>getPrivilege()</strong> : <em>string</em><br /><em>Returns key: 'Privilege'.</em> |
| public | <strong>getUniqueID()</strong> : <em>string</em><br /><em>Returns key: 'UniqueID'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\ResourceListDetailEvent

> Event from PJSIPShowResourceLists PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getObjectName()</strong> : <em>string</em><br /><em>Returns key: 'ObjectName'. The name of this object.</em> |
| public | <strong>getObjectType()</strong> : <em>string</em><br /><em>Returns key: 'ObjectType'. The object's type. This will always be 'aor'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\SCCPAttachedDeviceEntryEvent

> Event triggered when an SCCP Line Gets attached to an SCCP Device in. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getCfwdNumber()</strong> : <em>string</em><br /><em>Returns key: 'Forwaring to Number'.</em> |
| public | <strong>getCfwdType()</strong> : <em>string</em><br /><em>Returns key: 'Type of CallForward'.</em> |
| public | <strong>getChannelObjectType()</strong> : <em>string</em><br /><em>Returns key: 'ChannelObjectType'.</em> |
| public | <strong>getChannelType()</strong> : <em>string</em><br /><em>Returns key: 'ChannelType'.</em> |
| public | <strong>getDeviceName()</strong> : <em>string</em><br /><em>Returns key: 'Device Name'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\SCCPChannelEntryEvent

> Event triggered by SCCPShowLine in. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getChannelObjectType()</strong> : <em>string</em><br /><em>Returns key: 'ChannelObjectType'.</em> |
| public | <strong>getChannelType()</strong> : <em>string</em><br /><em>Returns key: 'ChannelType'.</em> |
| public | <strong>getDTMFmode()</strong> : <em>string</em><br /><em>Returns key: 'DTMFmode'.</em> |
| public | <strong>getDeviceName()</strong> : <em>string</em><br /><em>Returns key: 'DeviceName'.</em> |
| public | <strong>getDirectMedia()</strong> : <em>boolean</em><br /><em>Returns key: 'Direct Media (Direct RTP)'.</em> |
| public | <strong>getID()</strong> : <em>integer</em><br /><em>Returns key: 'ID'.</em> |
| public | <strong>getLineName()</strong> : <em>string</em><br /><em>Returns key: 'LineName'.</em> |
| public | <strong>getName()</strong> : <em>string</em><br /><em>Returns key: 'Name'.</em> |
| public | <strong>getNumCalled()</strong> : <em>string</em><br /><em>Returns key: 'NumCalled'.</em> |
| public | <strong>getPBXState()</strong> : <em>string</em><br /><em>Returns key: 'PBX State'.</em> |
| public | <strong>getRTPPeer()</strong> : <em>string</em><br /><em>Returns key: 'RTPPeer'.</em> |
| public | <strong>getReadCodec()</strong> : <em>string</em><br /><em>Returns key: 'ReadCodec'.</em> |
| public | <strong>getSCCPState()</strong> : <em>string</em><br /><em>Returns key: 'SCCP State'.</em> |
| public | <strong>getWriteCodec()</strong> : <em>string</em><br /><em>Returns key: 'WriteCodec'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\SCCPConfEndEvent

> Event triggered when the 'SCCP Conference End' Event arrives. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getConfId()</strong> : <em>integer</em><br /><em>Returns key: 'ConfId'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\SCCPConfEnteredEvent

> Event triggered when the 'SCCP Conference Entered' Event arrives. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getChannel()</strong> : <em>string</em><br /><em>Returns key: 'Channel'.</em> |
| public | <strong>getConfId()</strong> : <em>integer</em><br /><em>Returns key: 'ConfId'.</em> |
| public | <strong>getPartId()</strong> : <em>integer</em><br /><em>Returns key: 'PartId'.</em> |
| public | <strong>getUniqueid()</strong> : <em>string</em><br /><em>Returns key: 'Uniqueid'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\SCCPConfLeaveEvent

> Event triggered when the 'SCCP Conference Leave' Event arrives. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getChannel()</strong> : <em>string</em><br /><em>Returns key: 'Channel'.</em> |
| public | <strong>getConfId()</strong> : <em>integer</em><br /><em>Returns key: 'ConfId'.</em> |
| public | <strong>getPartId()</strong> : <em>integer</em><br /><em>Returns key: 'PartId'.</em> |
| public | <strong>getUniqueid()</strong> : <em>string</em><br /><em>Returns key: 'Uniqueid'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\SCCPConfLeftEvent

> Event triggered when the 'SCCP Conference Left' Event arrives. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getChannel()</strong> : <em>string</em><br /><em>Returns key: 'Channel'.</em> |
| public | <strong>getConfId()</strong> : <em>integer</em><br /><em>Returns key: 'ConfId'.</em> |
| public | <strong>getPartId()</strong> : <em>integer</em><br /><em>Returns key: 'PartId'.</em> |
| public | <strong>getUniqueid()</strong> : <em>string</em><br /><em>Returns key: 'Uniqueid'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\SCCPConfLockEvent

> Event triggered when the 'SCCP Conference Lock' Event arrives. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getConfId()</strong> : <em>integer</em><br /><em>Returns key: 'ConfId'.</em> |
| public | <strong>getEnabled()</strong> : <em>integer</em><br /><em>Returns key: 'Enabled'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\SCCPConfParticipantKickedEvent

> Event triggered when the 'SCCP Conference Participant Kicked' Event arrives. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getConfId()</strong> : <em>integer</em><br /><em>Returns key: 'ConfId'.</em> |
| public | <strong>getPartId()</strong> : <em>integer</em><br /><em>Returns key: 'PartId'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\SCCPConfParticipantMuteEvent

> Event triggered when the 'SCCP Conference Participant Mute' Event arrives. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getConfId()</strong> : <em>integer</em><br /><em>Returns key: 'ConfId'.</em> |
| public | <strong>getMute()</strong> : <em>boolean</em><br /><em>Returns key: 'Mute'.</em> |
| public | <strong>getPartId()</strong> : <em>integer</em><br /><em>Returns key: 'PartId'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\SCCPConfParticipantPromotionEvent

> Event triggered when the 'SCCP Conference Participant Promotion' Event arrives. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getConfId()</strong> : <em>integer</em><br /><em>Returns key: 'ConfId'.</em> |
| public | <strong>getModerator()</strong> : <em>boolean</em><br /><em>Returns key: 'Moderator'.</em> |
| public | <strong>getPartId()</strong> : <em>integer</em><br /><em>Returns key: 'PartId'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\SCCPConfStartEvent

> Event triggered when the 'SCCP Conference Start' Event arrives. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getConfId()</strong> : <em>integer</em><br /><em>Returns key: 'ConfId'.</em> |
| public | <strong>getSCCPDevice()</strong> : <em>string</em><br /><em>Returns key: 'SCCPDevice'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\SCCPConfStartedEvent

> Event triggered when the 'SCCP Conference Started' Event arrives. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getConfId()</strong> : <em>integer</em><br /><em>Returns key: 'ConfId'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\SCCPConferenceEntryEvent

> Event triggered when SCCPConferenceEntry arrives. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getAnnounce()</strong> : <em>boolean</em><br /><em>Returns key: 'Announce'.</em> |
| public | <strong>getChannelObjectType()</strong> : <em>string</em><br /><em>Returns key: 'ChannelObjectType'.</em> |
| public | <strong>getChannelType()</strong> : <em>string</em><br /><em>Returns key: 'ChannelType'.</em> |
| public | <strong>getId()</strong> : <em>integer</em><br /><em>Returns key: 'Id'.</em> |
| public | <strong>getModerators()</strong> : <em>integer</em><br /><em>Returns key: 'Moderators'.</em> |
| public | <strong>getMuteOnEntry()</strong> : <em>boolean</em><br /><em>Returns key: 'MuteOnEntry'.</em> |
| public | <strong>getParticipants()</strong> : <em>integer</em><br /><em>Returns key: 'Participants'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\SCCPDeviceButtonEntryEvent

> Event triggered by SCCPShowDevice. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getChannelObjectType()</strong> : <em>string</em><br /><em>Returns key: 'ChannelObjectType'.</em> |
| public | <strong>getChannelType()</strong> : <em>string</em><br /><em>Returns key: 'ChannelType'.</em> |
| public | <strong>getDefault()</strong> : <em>boolean</em><br /><em>Returns key: 'Default'.</em> |
| public | <strong>getId()</strong> : <em>integer</em><br /><em>Returns key: 'Id'.</em> |
| public | <strong>getInst()</strong> : <em>integer</em><br /><em>Returns key: 'Inst'.</em> |
| public | <strong>getPendingDelete()</strong> : <em>boolean</em><br /><em>Returns key: 'PendingDelete'.</em> |
| public | <strong>getPendingUpdate()</strong> : <em>boolean</em><br /><em>Returns key: 'PendingUpdate'.</em> |
| public | <strong>getType()</strong> : <em>integer</em><br /><em>Returns key: 'Type'.</em> |
| public | <strong>getTypeStr()</strong> : <em>string</em><br /><em>Returns key: 'TypeStr'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\SCCPDeviceEntryEvent

> Event triggered by SCCPShowDevice. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getActive()</strong> : <em>boolean</em><br /><em>Returns key: 'Active'.</em> |
| public | <strong>getAddress()</strong> : <em>string</em><br /><em>Returns key: 'Address'.</em> |
| public | <strong>getChannelObjectType()</strong> : <em>string</em><br /><em>Returns key: 'ChannelObjectType'.</em> |
| public | <strong>getChannelType()</strong> : <em>string</em><br /><em>Returns key: 'ChannelType'.</em> |
| public | <strong>getDescription()</strong> : <em>string</em><br /><em>Returns key: 'Name'.</em> |
| public | <strong>getLines()</strong> : <em>int</em><br /><em>Returns key: 'Lines'.</em> |
| public | <strong>getMac()</strong> : <em>string</em><br /><em>Returns key: 'Mac'.</em> |
| public | <strong>getNat()</strong> : <em>string</em><br /><em>Returns key: 'Nat'.</em> |
| public | <strong>getRegState()</strong> : <em>string</em><br /><em>Returns key: 'RegState'.</em> |
| public | <strong>getRegTime()</strong> : <em>string</em><br /><em>Returns key: 'RegistrationTime'.</em> |
| public | <strong>getToken()</strong> : <em>string</em><br /><em>Returns key: 'Token'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\SCCPDeviceFeatureEntryEvent

> Event triggered by SCCPShowDevice Feature Entries. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getChannelObjectType()</strong> : <em>string</em><br /><em>Returns key: 'ChannelObjectType'.</em> |
| public | <strong>getChannelType()</strong> : <em>string</em><br /><em>Returns key: 'ChannelType'.</em> |
| public | <strong>getId()</strong> : <em>integer</em><br /><em>Returns key: 'Id'.</em> |
| public | <strong>getName()</strong> : <em>string</em><br /><em>Returns key: 'Name'.</em> |
| public | <strong>getOptions()</strong> : <em>string</em><br /><em>Returns key: 'Options'.</em> |
| public | <strong>getStatus()</strong> : <em>integer</em><br /><em>Returns key: 'Status'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\SCCPDeviceLineEntryEvent

> Event triggered by SCCPShowDevice Line Entries. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getCfwdNumber()</strong> : <em>string</em><br /><em>Returns key: 'CfwdNumber'.</em> |
| public | <strong>getCfwdType()</strong> : <em>string</em><br /><em>Returns key: 'CfwdType'.</em> |
| public | <strong>getChannelObjectType()</strong> : <em>string</em><br /><em>Returns key: 'ChannelObjectType'.</em> |
| public | <strong>getChannelType()</strong> : <em>string</em><br /><em>Returns key: 'ChannelType'.</em> |
| public | <strong>getId()</strong> : <em>integer</em><br /><em>Returns key: 'Id'.</em> |
| public | <strong>getLabel()</strong> : <em>string</em><br /><em>Returns key: 'Label'.</em> |
| public | <strong>getName()</strong> : <em>string</em><br /><em>Returns key: 'Name'.</em> |
| public | <strong>getSubscriptionId()</strong> : <em>integer</em><br /><em>Returns key: 'SubscriptionId'.</em> |
| public | <strike><strong>getSuffix()</strong> : <em>integer</em></strike><br /><em>DEPRECATED - Please use getSubscriptionId() instead</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\SCCPDeviceServiceURLEntryEvent

> Event triggered by SCCPShowDevice ServiceURL Entries. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getChannelObjectType()</strong> : <em>string</em><br /><em>Returns key: 'ChannelObjectType'.</em> |
| public | <strong>getChannelType()</strong> : <em>string</em><br /><em>Returns key: 'ChannelType'.</em> |
| public | <strong>getId()</strong> : <em>integer</em><br /><em>Returns key: 'Id'.</em> |
| public | <strong>getName()</strong> : <em>string</em><br /><em>Returns key: 'Name'.</em> |
| public | <strong>getURL()</strong> : <em>string</em><br /><em>Returns key: 'URL'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\SCCPDeviceSpeeddialEntryEvent

> Event triggered by SCCPShowDevice SpeedDial Entries. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getChannelObjectType()</strong> : <em>string</em><br /><em>Returns key: 'ChannelObjectType'.</em> |
| public | <strong>getChannelType()</strong> : <em>string</em><br /><em>Returns key: 'ChannelType'.</em> |
| public | <strong>getHint()</strong> : <em>string</em><br /><em>Returns key: 'Hint'.</em> |
| public | <strong>getId()</strong> : <em>integer</em><br /><em>Returns key: 'Id'.</em> |
| public | <strong>getName()</strong> : <em>string</em><br /><em>Returns key: 'Name'.</em> |
| public | <strong>getNumber()</strong> : <em>string</em><br /><em>Returns key: 'Number'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\SCCPDeviceStatisticsEntryEvent

> Event triggered by SCCPShowDevice Call Statistics Entries. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getAverageQuality()</strong> : <em>float</em><br /><em>Returns key: 'Average Quality'.</em> |
| public | <strong>getCalls()</strong> : <em>integer</em><br /><em>Returns key: 'Calls'.</em> |
| public | <strong>getChannelObjectType()</strong> : <em>string</em><br /><em>Returns key: 'ChannelObjectType'.</em> |
| public | <strong>getChannelType()</strong> : <em>string</em><br /><em>Returns key: 'ChannelType'.</em> |
| public | <strong>getJitter()</strong> : <em>integer</em><br /><em>Returns key: 'Jitter'.</em> |
| public | <strong>getLatency()</strong> : <em>integer</em><br /><em>Returns key: 'Latency'.</em> |
| public | <strong>getMaxQuality()</strong> : <em>float</em><br /><em>Returns key: 'Maximum Quality'.</em> |
| public | <strong>getMeanQuality()</strong> : <em>float</em><br /><em>Returns key: 'Mean Quality'.</em> |
| public | <strong>getPacketsLost()</strong> : <em>integer</em><br /><em>Returns key: 'Packets Lost'.</em> |
| public | <strong>getPacketsReceived()</strong> : <em>integer</em><br /><em>Returns key: 'Packets Received'.</em> |
| public | <strong>getPacketsSent()</strong> : <em>integer</em><br /><em>Returns key: 'Packets Sent'.</em> |
| public | <strong>getQuality()</strong> : <em>float</em><br /><em>Returns key: 'Quality'.</em> |
| public | <strong>getReceivedConcealed()</strong> : <em>float</em><br /><em>Returns key: 'ReceivedConcealed'.</em> |
| public | <strong>getSentConcealed()</strong> : <em>integer</em><br /><em>Returns key: 'sConceal'.</em> |
| public | <strong>getType()</strong> : <em>string</em><br /><em>Returns key: 'Type'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\SCCPHintLineStateEntryEvent

> Event triggered when SCCPHintLineStateEntry arrives. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getCallInfoName()</strong> : <em>string</em><br /><em>Returns key: 'CallInfoName:'.</em> |
| public | <strong>getCallInfoNumber()</strong> : <em>string</em><br /><em>Returns key: 'CallInfoNumber:'.</em> |
| public | <strong>getChannelObjectType()</strong> : <em>string</em><br /><em>Returns key: 'ChannelObjectType'.</em> |
| public | <strong>getChannelType()</strong> : <em>string</em><br /><em>Returns key: 'ChannelType'.</em> |
| public | <strong>getDirection()</strong> : <em>string</em><br /><em>Returns key: 'Direction'.</em> |
| public | <strong>getLineName()</strong> : <em>string</em><br /><em>Returns key: 'LineName'.</em> |
| public | <strong>getState()</strong> : <em>string</em><br /><em>Returns key: 'State'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\SCCPHintSubscriptionEntryEvent

> Event triggered when SCCPHintSubscriptionEntry arrives. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getCallInfoName()</strong> : <em>string</em><br /><em>Returns key: 'CallInfoName:'.</em> |
| public | <strong>getCallInfoNumber()</strong> : <em>string</em><br /><em>Returns key: 'CallInfoNumber:'.</em> |
| public | <strong>getChannelObjectType()</strong> : <em>string</em><br /><em>Returns key: 'ChannelObjectType'.</em> |
| public | <strong>getChannelType()</strong> : <em>string</em><br /><em>Returns key: 'ChannelType'.</em> |
| public | <strong>getContext()</strong> : <em>string</em><br /><em>Returns key: 'Context'.</em> |
| public | <strong>getDirection()</strong> : <em>string</em><br /><em>Returns key: 'Direction:'.</em> |
| public | <strong>getExten()</strong> : <em>string</em><br /><em>Returns key: 'Exten'.</em> |
| public | <strong>getHint()</strong> : <em>string</em><br /><em>Returns key: 'Hint'.</em> |
| public | <strong>getState()</strong> : <em>string</em><br /><em>Returns key: 'State'.</em> |
| public | <strong>getSubs()</strong> : <em>integer</em><br /><em>Returns key: 'Subs'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\SCCPLineEntryEvent

> Event triggered by SCCPShowLines Entries. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getActiveChannels()</strong> : <em>string</em><br /><em>Returns key: 'ActiveChannels'.</em> |
| public | <strong>getCallType()</strong> : <em>string</em><br /><em>Returns key: 'CallType'.</em> |
| public | <strong>getCapabilities()</strong> : <em>string</em><br /><em>Returns key: 'Capabilities'.</em> |
| public | <strong>getChannelObjectType()</strong> : <em>string</em><br /><em>Returns key: 'ChannelObjectType'.</em> |
| public | <strong>getChannelState()</strong> : <em>string</em><br /><em>Returns key: 'ChannelState'.</em> |
| public | <strong>getChannelType()</strong> : <em>string</em><br /><em>Returns key: 'ChannelType'.</em> |
| public | <strong>getDevice()</strong> : <em>string</em><br /><em>Returns key: 'Device'.</em> |
| public | <strong>getExten()</strong> : <em>string</em><br /><em>Returns key: 'Exten'.</em> |
| public | <strong>getLabel()</strong> : <em>string</em><br /><em>Returns key: 'Label'.</em> |
| public | <strong>getMWI()</strong> : <em>string</em><br /><em>Returns key: 'MWI'.</em> |
| public | <strong>getPartyName()</strong> : <em>string</em><br /><em>Returns key: 'PartyName'.</em> |
| public | <strong>getSubscriptionNumber()</strong> : <em>string</em><br /><em>Returns key: 'SubscriptionNumber'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\SCCPMailboxEntryEvent

> Event triggered by SCCPShowLine Mailbox Entries. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getChannelObjectType()</strong> : <em>string</em><br /><em>Returns key: 'ChannelObjectType'.</em> |
| public | <strong>getChannelType()</strong> : <em>string</em><br /><em>Returns key: 'ChannelType'.</em> |
| public | <strong>getContext()</strong> : <em>string</em><br /><em>Returns key: 'Mailbox Context'.</em> |
| public | <strong>getMailbox()</strong> : <em>string</em><br /><em>Returns key: 'Mailbox Name'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\SCCPMailboxSubscriberEntryEvent

> Event triggered when SCCPMailboxSubscriberEntry arrives. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getChannelObjectType()</strong> : <em>string</em><br /><em>Returns key: 'ChannelObjectType'.</em> |
| public | <strong>getChannelType()</strong> : <em>string</em><br /><em>Returns key: 'ChannelType'.</em> |
| public | <strong>getContext()</strong> : <em>string</em><br /><em>Returns key: 'Context'.</em> |
| public | <strong>getLineName()</strong> : <em>string</em><br /><em>Returns key: 'LineName'.</em> |
| public | <strong>getMailbox()</strong> : <em>string</em><br /><em>Returns key: 'Mailbox'.</em> |
| public | <strong>getNew()</strong> : <em>integer</em><br /><em>Returns key: 'New'.</em> |
| public | <strong>getOld()</strong> : <em>integer</em><br /><em>Returns key: 'Old'.</em> |
| public | <strong>getSub()</strong> : <em>boolean</em><br /><em>Returns key: 'Sub'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\SCCPSessionEntryEvent

> Event triggered by SCCPShowSessions Entries. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getChannelObjectType()</strong> : <em>string</em><br /><em>Returns key: 'ChannelObjectType'.</em> |
| public | <strong>getChannelType()</strong> : <em>string</em><br /><em>Returns key: 'ChannelType'.</em> |
| public | <strong>getDeviceName()</strong> : <em>string</em><br /><em>Returns key: 'DeviceName'.</em> |
| public | <strong>getIP()</strong> : <em>string</em><br /><em>Returns key: 'IP'.</em> |
| public | <strong>getKeepAlive()</strong> : <em>integer</em><br /><em>Returns key: 'Current KeepAlive Value'.</em> |
| public | <strong>getKeepAliveInterval()</strong> : <em>integer</em><br /><em>Returns key: 'KeepAlive Interval'.</em> |
| public | <strong>getPort()</strong> : <em>string</em><br /><em>Returns key: 'Port'.</em> |
| public | <strong>getRegState()</strong> : <em>string</em><br /><em>Returns key: 'RegState'.</em> |
| public | <strong>getSocket()</strong> : <em>integer</em><br /><em>Returns key: 'Socket'.</em> |
| public | <strong>getState()</strong> : <em>string</em><br /><em>Returns key: 'State'.</em> |
| public | <strong>getToken()</strong> : <em>string</em><br /><em>Returns key: 'Token'.</em> |
| public | <strong>getType()</strong> : <em>string</em><br /><em>Returns key: 'Type'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\SCCPShowChannelsCompleteEvent

> Event triggered by SCCPShowChannels Entries. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getListItems()</strong> : <em>int</em><br /><em>Returns key: 'ListItems'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\SCCPShowConferencesCompleteEvent

> Event triggered when SCCPShowConferences Completes. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getListItems()</strong> : <em>int</em><br /><em>Returns key: 'ListItems'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\SCCPShowDeviceCompleteEvent

> Event triggered by SCCPShowDevice to signal end of response. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getListItems()</strong> : <em>int</em><br /><em>Returns key: 'ListItems'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\SCCPShowDeviceEvent

> Event triggered by SCCPShowDevice. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getAllowRinginNotification()</strong> : <em>boolean</em><br /><em>Returns key: 'AllowRinginNotification'.</em> |
| public | <strong>getAudioCOS()</strong> : <em>integer</em><br /><em>Returns key: 'AudioCOS'.</em> |
| public | <strong>getAudioTOS()</strong> : <em>integer</em><br /><em>Returns key: 'AudioTOS'.</em> |
| public | <strong>getBTemplateSupport()</strong> : <em>boolean</em><br /><em>Returns key: 'BTemplateSupport'.</em> |
| public | <strong>getBindAddress()</strong> : <em>string</em><br /><em>Returns key: 'BindAddress'.</em> |
| public | <strong>getCanCFWBUSY()</strong> : <em>boolean</em><br /><em>Returns key: 'CanCFWBUSY'.</em> |
| public | <strong>getCanCFWDALL()</strong> : <em>boolean</em><br /><em>Returns key: 'CanCFWDALL'.</em> |
| public | <strong>getCanCFWNOANSWER()</strong> : <em>boolean</em><br /><em>Returns key: 'CanCFWNOANSWER'.</em> |
| public | <strong>getCanPark()</strong> : <em>boolean</em><br /><em>Returns key: 'CanPark'.</em> |
| public | <strong>getCanTransfer()</strong> : <em>boolean</em><br /><em>Returns key: 'CanTransfer'.</em> |
| public | <strong>getCapabilities()</strong> : <em>\PAMI\Message\Event\(string/\PAMI\Message\Event\int)[]</em><br /><em>Returns key: 'Capabilities'.</em> |
| public | <strong>getCodecsPreference()</strong> : <em>\PAMI\Message\Event\(string/\PAMI\Message\Event\int)[]</em><br /><em>Returns key: 'CodecsPreference'.</em> |
| public | <strong>getConfigPhoneType()</strong> : <em>string</em><br /><em>Returns key: 'ConfigPhoneType'.</em> |
| public | <strong>getCustomBackgroundImage()</strong> : <em>string</em><br /><em>Returns key: 'CustomBackgroundImage'.</em> |
| public | <strong>getCustomRingTone()</strong> : <em>string</em><br /><em>Returns key: 'CustomRingTone'.</em> |
| public | <strong>getDNDAction()</strong> : <em>string</em><br /><em>Returns key: 'DNDAction'.</em> |
| public | <strong>getDNDFeatureEnabled()</strong> : <em>boolean</em><br /><em>Returns key: 'DNDFeatureEnabled'.</em> |
| public | <strong>getDNDStatus()</strong> : <em>string</em><br /><em>Returns key: 'DNDStatus'.</em> |
| public | <strong>getDefaultLineInstance()</strong> : <em>integer</em><br /><em>Returns key: 'DefaultLineInstance'.</em> |
| public | <strong>getDenyPermit()</strong> : <em>string</em><br /><em>Returns key: 'DenyPermit'.</em> |
| public | <strong>getDescription()</strong> : <em>string</em><br /><em>Returns key: 'Description'.</em> |
| public | <strong>getDeviceFeatures()</strong> : <em>string</em><br /><em>Returns key: 'DeviceFeatures'.</em> |
| public | <strong>getDeviceName()</strong> : <em>string</em><br /><em>Returns key: 'DeviceName'.</em> |
| public | <strong>getDeviceStateAcc()</strong> : <em>string</em><br /><em>Returns key: 'DeviceStateAcc'.</em> |
| public | <strong>getDirectRTP()</strong> : <em>boolean</em><br /><em>Returns key: 'DirectRTP'.</em> |
| public | <strong>getDirectedPickup()</strong> : <em>boolean</em><br /><em>Returns key: 'DirectedPickup'.</em> |
| public | <strong>getDtmfMode()</strong> : <em>string</em><br /><em>Returns key: 'DtmfMode'.</em> |
| public | <strong>getEarlyRTP()</strong> : <em>string</em><br /><em>Returns key: 'EarlyRTP'.</em> |
| public | <strong>getImageVersion()</strong> : <em>string</em><br /><em>Returns key: 'ImageVersion'.</em> |
| public | <strong>getKeepalive()</strong> : <em>integer</em><br /><em>Returns key: 'Keepalive'.</em> |
| public | <strong>getLastDialedNumber()</strong> : <em>string</em><br /><em>Returns key: 'LastDialedNumber'.</em> |
| public | <strong>getLastUsedAccessory()</strong> : <em>string</em><br /><em>Returns key: 'LastUsedAccessory'.</em> |
| public | <strong>getLinesRegistered()</strong> : <em>boolean</em><br /><em>Returns key: 'linesRegistered'.</em> |
| public | <strong>getMACAddress()</strong> : <em>string</em><br /><em>Returns key: 'MACAddress'.</em> |
| public | <strong>getMWIHandsetLight()</strong> : <em>boolean</em><br /><em>Returns key: 'MWIHandsetLight'.</em> |
| public | <strong>getMWILight()</strong> : <em>string</em><br /><em>Returns key: 'MWILight'.</em> |
| public | <strong>getNat()</strong> : <em>string</em><br /><em>Returns key: 'Nat'.</em> |
| public | <strong>getPendingDelete()</strong> : <em>boolean</em><br /><em>Returns key: 'PendingDelete'.</em> |
| public | <strong>getPendingUpdate()</strong> : <em>boolean</em><br /><em>Returns key: 'PendingUpdate'.</em> |
| public | <strong>getPermitHosts()</strong> : <em>string</em><br /><em>Returns key: 'PermitHosts'.</em> |
| public | <strong>getPickupContext()</strong> : <em>string</em><br /><em>Returns key: 'PickupContext'.</em> |
| public | <strong>getPickupModeAnswer()</strong> : <em>boolean</em><br /><em>Returns key: 'PickupModeAnswer'.</em> |
| public | <strong>getPrivateSoftkey()</strong> : <em>boolean</em><br /><em>Returns key: 'PrivateSoftkey'.</em> |
| public | <strong>getProtocolInUse()</strong> : <em>string</em><br /><em>Returns key: 'ProtocolInUse'.</em> |
| public | <strong>getProtocolVersion()</strong> : <em>string</em><br /><em>Returns key: 'ProtocolVersion'.</em> |
| public | <strong>getRegistrationState()</strong> : <em>string</em><br /><em>Returns key: 'RegistrationState'.</em> |
| public | <strong>getServerAddress()</strong> : <em>string</em><br /><em>Returns key: 'ServerAddress'.</em> |
| public | <strong>getSkinnyPhoneType()</strong> : <em>string</em><br /><em>Returns key: 'SkinnyPhoneType'.</em> |
| public | <strong>getSoftkeySupport()</strong> : <em>boolean</em><br /><em>Returns key: 'SoftkeySupport'.</em> |
| public | <strong>getSoftkeyset()</strong> : <em>string</em><br /><em>Returns key: 'Softkeyset'.</em> |
| public | <strong>getState()</strong> : <em>string</em><br /><em>Returns key: 'State'.</em> |
| public | <strong>getTimezoneOffset()</strong> : <em>integer</em><br /><em>Returns key: 'TimezoneOffset'.</em> |
| public | <strong>getTokenstate()</strong> : <em>string</em><br /><em>Returns key: 'Tokenstate'.</em> |
| public | <strong>getUsePlacedCalls()</strong> : <em>boolean</em><br /><em>Returns key: 'UsePlacedCalls'.</em> |
| public | <strong>getVideoCOS()</strong> : <em>integer</em><br /><em>Returns key: 'VideoCOS'.</em> |
| public | <strong>getVideoTOS()</strong> : <em>integer</em><br /><em>Returns key: 'VideoTOS'.</em> |
| public | <strong>getVideosupport()</strong> : <em>boolean</em><br /><em>Returns key: 'Videosupport'.</em> |
| public | <strong>getallowConference()</strong> : <em>boolean</em><br /><em>Returns key: 'allowConference'.</em> |
| public | <strong>getconfMusicOnHoldClass()</strong> : <em>string</em><br /><em>Returns key: 'confMusicOnHoldClass'.</em> |
| public | <strong>getconfMuteOnEntry()</strong> : <em>boolean</em><br /><em>Returns key: 'confMuteOnEntry'.</em> |
| public | <strong>getconfPlayGeneralAnnounce()</strong> : <em>boolean</em><br /><em>Returns key: 'confPlayGeneralAnnounce'.</em> |
| public | <strong>getconfPlayPartAnnounce()</strong> : <em>boolean</em><br /><em>Returns key: 'confPlayPartAnnounce'.</em> |
| public | <strong>getconfShowConflist()</strong> : <em>boolean</em><br /><em>Returns key: 'confShowConflist'.</em> |
| public | <strong>getconflistActive()</strong> : <em>boolean</em><br /><em>Returns key: 'conflistActive'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\SCCPShowDevicesCompleteEvent

> Event triggered by SCCPShowDevices to signal end of response. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getListItems()</strong> : <em>int</em><br /><em>Returns key: 'ListItems'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\SCCPShowHintLineStatesCompleteEvent

> Event triggered when SCCPShowHintLineStates Completes. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getListItems()</strong> : <em>int</em><br /><em>Returns key: 'ListItems'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\SCCPShowHintSubscriptionsCompleteEvent

> Event triggered when SCCPShowHintSubscriptions Completes. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getListItems()</strong> : <em>int</em><br /><em>Returns key: 'ListItems'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\SCCPShowLineCompleteEvent

> Event triggered by SCCPShowLine to signal end of response. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getListItems()</strong> : <em>int</em><br /><em>Returns key: 'ListItems'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\SCCPShowLineEvent

> Event triggered by SCCPShowLine. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getAccountCode()</strong> : <em>string</em><br /><em>Returns key: 'AccountCode'.</em> |
| public | <strong>getActiveChannelCount()</strong> : <em>integer</em><br /><em>Returns key: 'ActiveChannelCount'.</em> |
| public | <strong>getAdhocNumberAssigned()</strong> : <em>boolean</em><br /><em>Returns key: 'AdhocNumberAssigned'.</em> |
| public | <strong>getAmaFlags()</strong> : <em>integer</em><br /><em>Returns key: 'AmaFlags'.</em> |
| public | <strong>getCallGroup()</strong> : <em>int[]</em><br /><em>Returns key: 'CallGroup'.</em> |
| public | <strong>getCallerIDName()</strong> : <em>string</em><br /><em>Returns key: 'CallerIDName'.</em> |
| public | <strong>getCallerIDNumber()</strong> : <em>string</em><br /><em>Returns key: 'CallerIDNumber'.</em> |
| public | <strong>getCanTransfer()</strong> : <em>boolean</em><br /><em>Returns key: 'CanTransfer'.</em> |
| public | <strong>getContext()</strong> : <em>string</em><br /><em>Returns key: 'Context'.</em> |
| public | <strong>getDNDAction()</strong> : <em>string</em><br /><em>Returns key: 'DNDAction'.</em> |
| public | <strong>getDescription()</strong> : <em>string</em><br /><em>Returns key: 'Description'.</em> |
| public | <strong>getEchoCancellation()</strong> : <em>boolean</em><br /><em>Returns key: 'EchoCancellation'.</em> |
| public | <strong>getID()</strong> : <em>integer</em><br /><em>Returns key: 'ID'.</em> |
| public | <strong>getIncomingCallsLimit()</strong> : <em>integer</em><br /><em>Returns key: 'IncomingCallsLimit'.</em> |
| public | <strong>getIsRealtimeLine()</strong> : <em>boolean</em><br /><em>Returns key: 'IsRealtimeLine'.</em> |
| public | <strong>getLabel()</strong> : <em>string</em><br /><em>Returns key: 'Label'.</em> |
| public | <strong>getLanguage()</strong> : <em>string</em><br /><em>Returns key: 'Language'.</em> |
| public | <strong>getMeetMeEnabled()</strong> : <em>boolean</em><br /><em>Returns key: 'MeetMeEnabled'.</em> |
| public | <strong>getMeetMeNumber()</strong> : <em>string</em><br /><em>Returns key: 'MeetMeNumber'.</em> |
| public | <strong>getMeetMeOptions()</strong> : <em>string</em><br /><em>Returns key: 'MeetMeOptions'.</em> |
| public | <strong>getMessageWaitingNew()</strong> : <em>integer</em><br /><em>Returns key: 'MessageWaitingNew'.</em> |
| public | <strong>getMessageWaitingOld()</strong> : <em>integer</em><br /><em>Returns key: 'MessageWaitingOld'.</em> |
| public | <strong>getMusicclass()</strong> : <em>string</em><br /><em>Returns key: 'Musicclass'.</em> |
| public | <strong>getName()</strong> : <em>string</em><br /><em>Returns key: 'Name'.</em> |
| public | <strong>getNamedCallGroup()</strong> : <em>string[]</em><br /><em>Returns key: 'NamedCallGroup'.</em> |
| public | <strong>getNamedPickupGroup()</strong> : <em>string[]</em><br /><em>Returns key: 'NamedPickupGroup'.</em> |
| public | <strong>getParkingLot()</strong> : <em>string</em><br /><em>Returns key: 'ParkingLot'.</em> |
| public | <strong>getPendingDelete()</strong> : <em>boolean</em><br /><em>Returns key: 'PendingDelete'.</em> |
| public | <strong>getPendingUpdate()</strong> : <em>boolean</em><br /><em>Returns key: 'PendingUpdate'.</em> |
| public | <strong>getPickupGroup()</strong> : <em>int[]</em><br /><em>Returns key: 'PickupGroup'.</em> |
| public | <strong>getPin()</strong> : <em>integer</em><br /><em>Returns key: 'Pin'.</em> |
| public | <strong>getRegistrationContext()</strong> : <em>string</em><br /><em>Returns key: 'RegistrationContext'.</em> |
| public | <strong>getRegistrationExtension()</strong> : <em>string</em><br /><em>Returns key: 'RegistrationExtension'.</em> |
| public | <strong>getSecDialtone()</strong> : <em>integer</em><br /><em>Returns key: 'SecDialtone'.</em> |
| public | <strong>getSecDialtoneDigits()</strong> : <em>integer</em><br /><em>Returns key: 'SecDialtoneDigits'.</em> |
| public | <strong>getSilenceSuppression()</strong> : <em>boolean</em><br /><em>Returns key: 'SilenceSuppression'.</em> |
| public | <strong>getTransferToVoicemail()</strong> : <em>string</em><br /><em>Returns key: 'TransferToVoicemail'.</em> |
| public | <strong>getVoiceMailNumber()</strong> : <em>string</em><br /><em>Returns key: 'VoiceMailNumber'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\SCCPShowLinesCompleteEvent

> Event triggered by SCCPShowLines to signal end of response. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getListItems()</strong> : <em>int</em><br /><em>Returns key: 'ListItems'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\SCCPShowMWISubscriptionsCompleteEvent

> Event triggered when SCCPShowMWISubscriptions Completes. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getListItems()</strong> : <em>int</em><br /><em>Returns key: 'ListItems'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\SCCPShowSessionsCompleteEvent

> Event triggered by SCCPShowSessions to signal end of response. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getListItems()</strong> : <em>int</em><br /><em>Returns key: 'ListItems'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\SCCPShowSoftKeySetsCompleteEvent

> Event triggered when SCCPShowSoftkeySets Completes. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getListItems()</strong> : <em>int</em><br /><em>Returns key: 'ListItems'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\SCCPSoftKeySetEntryEvent

> Event triggered when SCCPSoftKeySetEntry arrives. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getChannelObjectType()</strong> : <em>string</em><br /><em>Returns key: 'ChannelObjectType'.</em> |
| public | <strong>getChannelType()</strong> : <em>string</em><br /><em>Returns key: 'ChannelType'.</em> |
| public | <strong>getDescription()</strong> : <em>string</em><br /><em>Returns key: 'Description'.</em> |
| public | <strong>getLabel()</strong> : <em>string</em><br /><em>Returns key: 'Label'.</em> |
| public | <strong>getLblID()</strong> : <em>integer</em><br /><em>Returns key: 'LblID'.</em> |
| public | <strong>getMode()</strong> : <em>string</em><br /><em>Returns key: 'Mode'.</em> |
| public | <strong>getSet()</strong> : <em>string</em><br /><em>Returns key: 'Set'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\ShowDialPlanCompleteEvent

> Event triggered for the end of the list when an action ShowDialPlan is issued. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getListContexts()</strong> : <em>string</em><br /><em>Returns key: 'ListContexts'.</em> |
| public | <strong>getListExtensions()</strong> : <em>string</em><br /><em>Returns key: 'ListExtensions'.</em> |
| public | <strong>getListItems()</strong> : <em>string</em><br /><em>Returns key: 'ListItems'.</em> |
| public | <strong>getListPriorities()</strong> : <em>string</em><br /><em>Returns key: 'ListPriorities'.</em> |
| public | <strong>getPrivilege()</strong> : <em>string</em><br /><em>Returns key: 'Privilege'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\SuccessEvent

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getRawContent()</strong> : <em>string</em><br /><em>Returns key: 'RawContent'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\TableEndEvent

> Event triggered when an 'TableEnd' Event comes in. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getTableName()</strong> : <em>string</em><br /><em>Returns key: 'TableName'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\TableStartEvent

> Event triggered when an 'TableStart' Event comes in. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getTableName()</strong> : <em>string</em><br /><em>Returns key: 'TableName'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\TransferEvent

> Event triggered when a call is transfered. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getChannel()</strong> : <em>string</em><br /><em>Returns key: 'Channel'.</em> |
| public | <strong>getPrivilege()</strong> : <em>string</em><br /><em>Returns key: 'Privilege'.</em> |
| public | <strong>getSipCallID()</strong> : <em>string</em><br /><em>Returns key: 'SIP-Callid'.</em> |
| public | <strong>getTargetChannel()</strong> : <em>string</em><br /><em>Returns key: 'TargetChannel'.</em> |
| public | <strong>getTargetUniqueID()</strong> : <em>string</em><br /><em>Returns key: 'TargetUniqueID'.</em> |
| public | <strong>getTransferContext()</strong> : <em>string</em><br /><em>Returns key: 'TransferContext'.</em> |
| public | <strong>getTransferExten()</strong> : <em>string</em><br /><em>Returns key: 'TransferExten'.</em> |
| public | <strong>getTransferMethod()</strong> : <em>string</em><br /><em>Returns key: 'TransferMethod'.</em> |
| public | <strong>getTransferType()</strong> : <em>string</em><br /><em>Returns key: 'TransferType'.</em> |
| public | <strong>getUniqueID()</strong> : <em>string</em><br /><em>Returns key: 'UniqueID'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\UnknownEvent

> This is an unknown (not implemented yet) event received from ami. PHP Version 5

| Visibility | Function |
|:-----------|:---------|

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\UnlinkEvent

> Event triggered when a bridged channel is unlinked. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getCallerID1()</strong> : <em>string</em><br /><em>Returns key: 'CallerID1'.</em> |
| public | <strong>getCallerID2()</strong> : <em>string</em><br /><em>Returns key: 'CallerID2'.</em> |
| public | <strong>getChannel1()</strong> : <em>string</em><br /><em>Returns key: 'Channel1'.</em> |
| public | <strong>getChannel2()</strong> : <em>string</em><br /><em>Returns key: 'Channel2'.</em> |
| public | <strong>getPrivilege()</strong> : <em>string</em><br /><em>Returns key: 'Privilege'.</em> |
| public | <strong>getUniqueID1()</strong> : <em>string</em><br /><em>Returns key: 'UniqueID1'.</em> |
| public | <strong>getUniqueID2()</strong> : <em>string</em><br /><em>Returns key: 'UniqueID2'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\VgsmMeStateEvent

> Whenever a ME (GSM module) changes working state, an event is generated. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getOldState()</strong> : <em>string</em><br /><em>Returns key: 'X-vGSM-ME-Old-State'.</em> |
| public | <strong>getPrivilege()</strong> : <em>string</em><br /><em>Returns key: 'Privilege'.</em> |
| public | <strong>getReason()</strong> : <em>string</em><br /><em>Returns key: 'X-vGSM-ME-State-Change-Reason'.</em> |
| public | <strong>getState()</strong> : <em>string</em><br /><em>Returns key: 'X-vGSM-ME-State'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\VgsmNetStateEvent

> Whenever the registration status of a GSM module changes, a vgsm_net_state event is generated. This event is available starting from 0.21.0. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getPrivilege()</strong> : <em>string</em><br /><em>Returns key: 'Privilege'.</em> |
| public | <strong>getState()</strong> : <em>string</em><br /><em>Returns key: 'X-vGSM-GSM-Registration'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\VgsmSmsRxEvent

> On reception of an inbound SMS (SMS-DELIVERY) the message will also be reported as a manager event, however, acknowledgment still relies on SMS spooler to handle the message. This event is generated starting from 0.21.0 PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getContent()</strong> : <em>string</em><br /><em>Returns key: 'Content'.</em> |
| public | <strong>getContentEncoding()</strong> : <em>string</em><br /><em>Returns key: 'Content-Transfer-Encoding'.</em> |
| public | <strong>getContentType()</strong> : <em>string</em><br /><em>Returns key: 'Content-Type'.</em> |
| public | <strong>getDataHeaderIndicator()</strong> : <em>string</em><br /><em>Returns key: 'XX-SMS-User-Data-Header-Indicator'.</em> |
| public | <strong>getDate()</strong> : <em>string</em><br /><em>Returns key: 'Date'.</em> |
| public | <strong>getFrom()</strong> : <em>string</em><br /><em>Returns key: 'From'.</em> |
| public | <strong>getMessageType()</strong> : <em>string</em><br /><em>Returns key: 'X-SMS-Message-Type:'.</em> |
| public | <strong>getMimeVersion()</strong> : <em>string</em><br /><em>Returns key: 'MIME-Version'.</em> |
| public | <strong>getMoreMessagesToSend()</strong> : <em>string</em><br /><em>Returns key: 'X-SMS-More-Messages-To-Send'.</em> |
| public | <strong>getPrivilege()</strong> : <em>string</em><br /><em>Returns key: 'Privilege'.</em> |
| public | <strong>getReceived()</strong> : <em>string</em><br /><em>Returns key: 'Received'.</em> |
| public | <strong>getReplyPath()</strong> : <em>string</em><br /><em>Returns key: 'X-SMS-Reply-Path'.</em> |
| public | <strong>getSMCCNP()</strong> : <em>string</em><br /><em>Returns key: 'X-SMS-SMCC-NP'.</em> |
| public | <strong>getSMCCNumber()</strong> : <em>string</em><br /><em>Returns key: 'X-SMS-SMCC-Number'.</em> |
| public | <strong>getSMCCTON()</strong> : <em>string</em><br /><em>Returns key: 'X-SMS-SMCC-TON'.</em> |
| public | <strong>getSenderNP()</strong> : <em>string</em><br /><em>Returns key: 'X-SMS-Sender-NP'.</em> |
| public | <strong>getSenderNumber()</strong> : <em>string</em><br /><em>Returns key: 'X-SMS-Sender-Number'.</em> |
| public | <strong>getSenderTON()</strong> : <em>string</em><br /><em>Returns key: 'X-SMS-Sender-TON'.</em> |
| public | <strong>getStatusReportIndication()</strong> : <em>string</em><br /><em>Returns key: 'X-SMS-Status-Report-Indication'.</em> |
| public | <strong>getSubject()</strong> : <em>string</em><br /><em>Returns key: 'Subject'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\VoicemailUserEntryCompleteEvent

> Event triggered for the end of the list when an action VoicemailUsersList is issued. PHP Version 5

| Visibility | Function |
|:-----------|:---------|

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\VoicemailUserEntryEvent

> Event triggered when issuing a VoicemailUsersList action. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getAttachMessage()</strong> : <em>string</em><br /><em>Returns key: 'AttachMessage'.</em> |
| public | <strong>getAttachmentFormat()</strong> : <em>string</em><br /><em>Returns key: 'AttachmentFormat'.</em> |
| public | <strong>getCallOperator()</strong> : <em>string</em><br /><em>Returns key: 'CallOperator'.</em> |
| public | <strong>getCallback()</strong> : <em>string</em><br /><em>Returns key: 'Callback'.</em> |
| public | <strong>getCanReview()</strong> : <em>string</em><br /><em>Returns key: 'CanReview'.</em> |
| public | <strong>getDeleteMessage()</strong> : <em>string</em><br /><em>Returns key: 'DeleteMessage'.</em> |
| public | <strong>getDialOut()</strong> : <em>string</em><br /><em>Returns key: 'DialOut'.</em> |
| public | <strong>getEmail()</strong> : <em>string</em><br /><em>Returns key: 'Email'.</em> |
| public | <strong>getExitContext()</strong> : <em>string</em><br /><em>Returns key: 'ExitContext'.</em> |
| public | <strong>getFullname()</strong> : <em>string</em><br /><em>Returns key: 'Fullname'.</em> |
| public | <strong>getLanguage()</strong> : <em>string</em><br /><em>Returns key: 'Language'.</em> |
| public | <strong>getMailCommand()</strong> : <em>string</em><br /><em>Returns key: 'MailCommand'.</em> |
| public | <strong>getMaxMessageCount()</strong> : <em>string</em><br /><em>Returns key: 'MaxMessageCount'.</em> |
| public | <strong>getMaxMessageLength()</strong> : <em>string</em><br /><em>Returns key: 'MaxMessageLength'.</em> |
| public | <strong>getNewMessageCount()</strong> : <em>string</em><br /><em>Returns key: 'NewMessageCount'.</em> |
| public | <strong>getPager()</strong> : <em>string</em><br /><em>Returns key: 'Pager'.</em> |
| public | <strong>getSayCID()</strong> : <em>string</em><br /><em>Returns key: 'SayCID'.</em> |
| public | <strong>getSayDurationMin()</strong> : <em>string</em><br /><em>Returns key: 'SayDurationMin'.</em> |
| public | <strong>getSayEnvelope()</strong> : <em>string</em><br /><em>Returns key: 'SayEnvelope'.</em> |
| public | <strong>getServerEmail()</strong> : <em>string</em><br /><em>Returns key: 'ServerEmail'.</em> |
| public | <strong>getTimezone()</strong> : <em>string</em><br /><em>Returns key: 'Timezone'.</em> |
| public | <strong>getUniqueID()</strong> : <em>string</em><br /><em>Returns key: 'UniqueID'.</em> |
| public | <strong>getVoicemailBox()</strong> : <em>string</em><br /><em>Returns key: 'VoicemailBox'.</em> |
| public | <strong>getVoicemailContext()</strong> : <em>string</em><br /><em>Returns key: 'VmContext'.</em> |
| public | <strong>getVolumeGain()</strong> : <em>string</em><br /><em>Returns key: 'VolumeGain'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\SCCPVariableEntryEvent

> Event triggered by SCCPShowDevice/SCCPShowLine for Variable Entries. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getChannelObjectType()</strong> : <em>string</em><br /><em>Returns key: 'ChannelObjectType'.</em> |
| public | <strong>getChannelType()</strong> : <em>string</em><br /><em>Returns key: 'ChannelType'.</em> |
| public | <strong>getName()</strong> : <em>string</em><br /><em>Returns key: 'Name'.</em> |
| public | <strong>getValue()</strong> : <em>string</em><br /><em>Returns key: 'Value'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\MCIDEvent

> MCID Event Note: Auto Generated using xsltproc PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getAccountCode()</strong> : <em>string</em><br /><em>get AccountCode Returns key: 'AccountCode'</em> |
| public | <strong>getCallerIDName()</strong> : <em>string</em><br /><em>get CallerIDName Returns key: 'CallerIDName'</em> |
| public | <strong>getCallerIDNum()</strong> : <em>string</em><br /><em>get CallerIDNum Returns key: 'CallerIDNum'</em> |
| public | <strong>getChannel()</strong> : <em>string</em><br /><em>get Channel Returns key: 'Channel'</em> |
| public | <strong>getChannelState()</strong> : <em>string</em><br /><em>get ChannelState Returns:A numeric code for the channel's current state, related to ChannelStateDesc</em> |
| public | <strong>getChannelStateDesc()</strong> : <em>string</em><br /><em>get ChannelStateDesc Returns key: 'ChannelStateDesc'</em> |
| public | <strong>getConnectedLineName()</strong> : <em>string</em><br /><em>get ConnectedLineName Returns key: 'ConnectedLineName'</em> |
| public | <strong>getConnectedLineNum()</strong> : <em>string</em><br /><em>get ConnectedLineNum Returns key: 'ConnectedLineNum'</em> |
| public | <strong>getContext()</strong> : <em>string</em><br /><em>get Context Returns key: 'Context'</em> |
| public | <strong>getExten()</strong> : <em>string</em><br /><em>get Exten Returns key: 'Exten'</em> |
| public | <strong>getLanguage()</strong> : <em>string</em><br /><em>get Language Returns key: 'Language'</em> |
| public | <strong>getLinkedid()</strong> : <em>string</em><br /><em>get Linkedid Returns:Uniqueid of the oldest channel associated with this channel.</em> |
| public | <strong>getMCallerIDName()</strong> : <em>string</em><br /><em>get MCallerIDName Returns key: 'MCallerIDName'</em> |
| public | <strong>getMCallerIDNameCharSet()</strong> : <em>string</em><br /><em>get MCallerIDNameCharSet Returns key: 'MCallerIDNameCharSet'</em> |
| public | <strong>getMCallerIDNamePres()</strong> : <em>string</em><br /><em>get MCallerIDNamePres Returns key: 'MCallerIDNamePres'</em> |
| public | <strong>getMCallerIDNameValid()</strong> : <em>string</em><br /><em>get MCallerIDNameValid Returns key: 'MCallerIDNameValid'</em> |
| public | <strong>getMCallerIDNum()</strong> : <em>string</em><br /><em>get MCallerIDNum Returns key: 'MCallerIDNum'</em> |
| public | <strong>getMCallerIDNumPlan()</strong> : <em>string</em><br /><em>get MCallerIDNumPlan Returns key: 'MCallerIDNumPlan'</em> |
| public | <strong>getMCallerIDNumPres()</strong> : <em>string</em><br /><em>get MCallerIDNumPres Returns key: 'MCallerIDNumPres'</em> |
| public | <strong>getMCallerIDNumValid()</strong> : <em>string</em><br /><em>get MCallerIDNumValid Returns key: 'MCallerIDNumValid'</em> |
| public | <strong>getMCallerIDPres()</strong> : <em>string</em><br /><em>get MCallerIDPres Returns key: 'MCallerIDPres'</em> |
| public | <strong>getMCallerIDSubaddr()</strong> : <em>string</em><br /><em>get MCallerIDSubaddr Returns key: 'MCallerIDSubaddr'</em> |
| public | <strong>getMCallerIDSubaddrOdd()</strong> : <em>string</em><br /><em>get MCallerIDSubaddrOdd Returns key: 'MCallerIDSubaddrOdd'</em> |
| public | <strong>getMCallerIDSubaddrType()</strong> : <em>string</em><br /><em>get MCallerIDSubaddrType Returns key: 'MCallerIDSubaddrType'</em> |
| public | <strong>getMCallerIDton()</strong> : <em>string</em><br /><em>get MCallerIDton Returns key: 'MCallerIDton'</em> |
| public | <strong>getMConnectedIDName()</strong> : <em>string</em><br /><em>get MConnectedIDName Returns key: 'MConnectedIDName'</em> |
| public | <strong>getMConnectedIDNameCharSet()</strong> : <em>string</em><br /><em>get MConnectedIDNameCharSet Returns key: 'MConnectedIDNameCharSet'</em> |
| public | <strong>getMConnectedIDNamePres()</strong> : <em>string</em><br /><em>get MConnectedIDNamePres Returns key: 'MConnectedIDNamePres'</em> |
| public | <strong>getMConnectedIDNameValid()</strong> : <em>string</em><br /><em>get MConnectedIDNameValid Returns key: 'MConnectedIDNameValid'</em> |
| public | <strong>getMConnectedIDNum()</strong> : <em>string</em><br /><em>get MConnectedIDNum Returns key: 'MConnectedIDNum'</em> |
| public | <strong>getMConnectedIDNumPlan()</strong> : <em>string</em><br /><em>get MConnectedIDNumPlan Returns key: 'MConnectedIDNumPlan'</em> |
| public | <strong>getMConnectedIDNumPres()</strong> : <em>string</em><br /><em>get MConnectedIDNumPres Returns key: 'MConnectedIDNumPres'</em> |
| public | <strong>getMConnectedIDNumValid()</strong> : <em>string</em><br /><em>get MConnectedIDNumValid Returns key: 'MConnectedIDNumValid'</em> |
| public | <strong>getMConnectedIDPres()</strong> : <em>string</em><br /><em>get MConnectedIDPres Returns key: 'MConnectedIDPres'</em> |
| public | <strong>getMConnectedIDSubaddr()</strong> : <em>string</em><br /><em>get MConnectedIDSubaddr Returns key: 'MConnectedIDSubaddr'</em> |
| public | <strong>getMConnectedIDSubaddrOdd()</strong> : <em>string</em><br /><em>get MConnectedIDSubaddrOdd Returns key: 'MConnectedIDSubaddrOdd'</em> |
| public | <strong>getMConnectedIDSubaddrType()</strong> : <em>string</em><br /><em>get MConnectedIDSubaddrType Returns key: 'MConnectedIDSubaddrType'</em> |
| public | <strong>getMConnectedIDton()</strong> : <em>string</em><br /><em>get MConnectedIDton Returns key: 'MConnectedIDton'</em> |
| public | <strong>getPriority()</strong> : <em>string</em><br /><em>get Priority Returns key: 'Priority'</em> |
| public | <strong>getUniqueid()</strong> : <em>string</em><br /><em>get Uniqueid Returns key: 'Uniqueid'</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\AgentCalledEvent

> AgentCalled Event Note: Auto Generated using xsltproc PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getAccountCode()</strong> : <em>string</em><br /><em>get AccountCode Returns key: 'AccountCode'</em> |
| public | <strong>getCallerIDName()</strong> : <em>string</em><br /><em>get CallerIDName Returns key: 'CallerIDName'</em> |
| public | <strong>getCallerIDNum()</strong> : <em>string</em><br /><em>get CallerIDNum Returns key: 'CallerIDNum'</em> |
| public | <strong>getChannel()</strong> : <em>string</em><br /><em>get Channel Returns key: 'Channel'</em> |
| public | <strong>getChannelState()</strong> : <em>string</em><br /><em>get ChannelState Returns:A numeric code for the channel's current state, related to ChannelStateDesc</em> |
| public | <strong>getChannelStateDesc()</strong> : <em>string</em><br /><em>get ChannelStateDesc Returns key: 'ChannelStateDesc'</em> |
| public | <strong>getConnectedLineName()</strong> : <em>string</em><br /><em>get ConnectedLineName Returns key: 'ConnectedLineName'</em> |
| public | <strong>getConnectedLineNum()</strong> : <em>string</em><br /><em>get ConnectedLineNum Returns key: 'ConnectedLineNum'</em> |
| public | <strong>getContext()</strong> : <em>string</em><br /><em>get Context Returns key: 'Context'</em> |
| public | <strong>getDestAccountCode()</strong> : <em>string</em><br /><em>get DestAccountCode Returns key: 'DestAccountCode'</em> |
| public | <strong>getDestCallerIDName()</strong> : <em>string</em><br /><em>get DestCallerIDName Returns key: 'DestCallerIDName'</em> |
| public | <strong>getDestCallerIDNum()</strong> : <em>string</em><br /><em>get DestCallerIDNum Returns key: 'DestCallerIDNum'</em> |
| public | <strong>getDestChannel()</strong> : <em>string</em><br /><em>get DestChannel Returns key: 'DestChannel'</em> |
| public | <strong>getDestChannelState()</strong> : <em>string</em><br /><em>get DestChannelState Returns:A numeric code for the channel's current state, related to DestChannelStateDesc</em> |
| public | <strong>getDestChannelStateDesc()</strong> : <em>string</em><br /><em>get DestChannelStateDesc Returns key: 'DestChannelStateDesc'</em> |
| public | <strong>getDestConnectedLineName()</strong> : <em>string</em><br /><em>get DestConnectedLineName Returns key: 'DestConnectedLineName'</em> |
| public | <strong>getDestConnectedLineNum()</strong> : <em>string</em><br /><em>get DestConnectedLineNum Returns key: 'DestConnectedLineNum'</em> |
| public | <strong>getDestContext()</strong> : <em>string</em><br /><em>get DestContext Returns key: 'DestContext'</em> |
| public | <strong>getDestExten()</strong> : <em>string</em><br /><em>get DestExten Returns key: 'DestExten'</em> |
| public | <strong>getDestLanguage()</strong> : <em>string</em><br /><em>get DestLanguage Returns key: 'DestLanguage'</em> |
| public | <strong>getDestLinkedid()</strong> : <em>string</em><br /><em>get DestLinkedid Returns:Uniqueid of the oldest channel associated with this channel.</em> |
| public | <strong>getDestPriority()</strong> : <em>string</em><br /><em>get DestPriority Returns key: 'DestPriority'</em> |
| public | <strong>getDestUniqueid()</strong> : <em>string</em><br /><em>get DestUniqueid Returns key: 'DestUniqueid'</em> |
| public | <strong>getExten()</strong> : <em>string</em><br /><em>get Exten Returns key: 'Exten'</em> |
| public | <strong>getInterface()</strong> : <em>string</em><br /><em>get Interface Returns:The queue member's channel technology or location.</em> |
| public | <strong>getLanguage()</strong> : <em>string</em><br /><em>get Language Returns key: 'Language'</em> |
| public | <strong>getLinkedid()</strong> : <em>string</em><br /><em>get Linkedid Returns:Uniqueid of the oldest channel associated with this channel.</em> |
| public | <strong>getMemberName()</strong> : <em>string</em><br /><em>get MemberName Returns:The name of the queue member.</em> |
| public | <strong>getPriority()</strong> : <em>string</em><br /><em>get Priority Returns key: 'Priority'</em> |
| public | <strong>getQueue()</strong> : <em>string</em><br /><em>get Queue Returns:The name of the queue.</em> |
| public | <strong>getUniqueid()</strong> : <em>string</em><br /><em>get Uniqueid Returns key: 'Uniqueid'</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\AgentCompleteEvent

> AgentComplete Event Note: Auto Generated using xsltproc PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getAccountCode()</strong> : <em>string</em><br /><em>get AccountCode Returns key: 'AccountCode'</em> |
| public | <strong>getCallerIDName()</strong> : <em>string</em><br /><em>get CallerIDName Returns key: 'CallerIDName'</em> |
| public | <strong>getCallerIDNum()</strong> : <em>string</em><br /><em>get CallerIDNum Returns key: 'CallerIDNum'</em> |
| public | <strong>getChannel()</strong> : <em>string</em><br /><em>get Channel Returns key: 'Channel'</em> |
| public | <strong>getChannelState()</strong> : <em>string</em><br /><em>get ChannelState Returns:A numeric code for the channel's current state, related to ChannelStateDesc</em> |
| public | <strong>getChannelStateDesc()</strong> : <em>string</em><br /><em>get ChannelStateDesc Returns key: 'ChannelStateDesc'</em> |
| public | <strong>getConnectedLineName()</strong> : <em>string</em><br /><em>get ConnectedLineName Returns key: 'ConnectedLineName'</em> |
| public | <strong>getConnectedLineNum()</strong> : <em>string</em><br /><em>get ConnectedLineNum Returns key: 'ConnectedLineNum'</em> |
| public | <strong>getContext()</strong> : <em>string</em><br /><em>get Context Returns key: 'Context'</em> |
| public | <strong>getDestAccountCode()</strong> : <em>string</em><br /><em>get DestAccountCode Returns key: 'DestAccountCode'</em> |
| public | <strong>getDestCallerIDName()</strong> : <em>string</em><br /><em>get DestCallerIDName Returns key: 'DestCallerIDName'</em> |
| public | <strong>getDestCallerIDNum()</strong> : <em>string</em><br /><em>get DestCallerIDNum Returns key: 'DestCallerIDNum'</em> |
| public | <strong>getDestChannel()</strong> : <em>string</em><br /><em>get DestChannel Returns key: 'DestChannel'</em> |
| public | <strong>getDestChannelState()</strong> : <em>string</em><br /><em>get DestChannelState Returns:A numeric code for the channel's current state, related to DestChannelStateDesc</em> |
| public | <strong>getDestChannelStateDesc()</strong> : <em>string</em><br /><em>get DestChannelStateDesc Returns key: 'DestChannelStateDesc'</em> |
| public | <strong>getDestConnectedLineName()</strong> : <em>string</em><br /><em>get DestConnectedLineName Returns key: 'DestConnectedLineName'</em> |
| public | <strong>getDestConnectedLineNum()</strong> : <em>string</em><br /><em>get DestConnectedLineNum Returns key: 'DestConnectedLineNum'</em> |
| public | <strong>getDestContext()</strong> : <em>string</em><br /><em>get DestContext Returns key: 'DestContext'</em> |
| public | <strong>getDestExten()</strong> : <em>string</em><br /><em>get DestExten Returns key: 'DestExten'</em> |
| public | <strong>getDestLanguage()</strong> : <em>string</em><br /><em>get DestLanguage Returns key: 'DestLanguage'</em> |
| public | <strong>getDestLinkedid()</strong> : <em>string</em><br /><em>get DestLinkedid Returns:Uniqueid of the oldest channel associated with this channel.</em> |
| public | <strong>getDestPriority()</strong> : <em>string</em><br /><em>get DestPriority Returns key: 'DestPriority'</em> |
| public | <strong>getDestUniqueid()</strong> : <em>string</em><br /><em>get DestUniqueid Returns key: 'DestUniqueid'</em> |
| public | <strong>getExten()</strong> : <em>string</em><br /><em>get Exten Returns key: 'Exten'</em> |
| public | <strong>getHoldTime()</strong> : <em>string</em><br /><em>get HoldTime Returns:The time the channel was in the queue, expressed in seconds since 00:00, Jan 1, 1970 UTC.</em> |
| public | <strong>getInterface()</strong> : <em>string</em><br /><em>get Interface Returns:The queue member's channel technology or location.</em> |
| public | <strong>getLanguage()</strong> : <em>string</em><br /><em>get Language Returns key: 'Language'</em> |
| public | <strong>getLinkedid()</strong> : <em>string</em><br /><em>get Linkedid Returns:Uniqueid of the oldest channel associated with this channel.</em> |
| public | <strong>getMemberName()</strong> : <em>string</em><br /><em>get MemberName Returns:The name of the queue member.</em> |
| public | <strong>getPriority()</strong> : <em>string</em><br /><em>get Priority Returns key: 'Priority'</em> |
| public | <strong>getQueue()</strong> : <em>string</em><br /><em>get Queue Returns:The name of the queue.</em> |
| public | <strong>getReason()</strong> : <em>string</em><br /><em>get Reason Returns key: 'Reason'</em> |
| public | <strong>getTalkTime()</strong> : <em>string</em><br /><em>get TalkTime Returns:The time the queue member talked with the caller in the queue, expressed in seconds since 00:00, Jan 1, 1970 UTC.</em> |
| public | <strong>getUniqueid()</strong> : <em>string</em><br /><em>get Uniqueid Returns key: 'Uniqueid'</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\AgentDumpEvent

> AgentDump Event Note: Auto Generated using xsltproc PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getAccountCode()</strong> : <em>string</em><br /><em>get AccountCode Returns key: 'AccountCode'</em> |
| public | <strong>getCallerIDName()</strong> : <em>string</em><br /><em>get CallerIDName Returns key: 'CallerIDName'</em> |
| public | <strong>getCallerIDNum()</strong> : <em>string</em><br /><em>get CallerIDNum Returns key: 'CallerIDNum'</em> |
| public | <strong>getChannel()</strong> : <em>string</em><br /><em>get Channel Returns key: 'Channel'</em> |
| public | <strong>getChannelState()</strong> : <em>string</em><br /><em>get ChannelState Returns:A numeric code for the channel's current state, related to ChannelStateDesc</em> |
| public | <strong>getChannelStateDesc()</strong> : <em>string</em><br /><em>get ChannelStateDesc Returns key: 'ChannelStateDesc'</em> |
| public | <strong>getConnectedLineName()</strong> : <em>string</em><br /><em>get ConnectedLineName Returns key: 'ConnectedLineName'</em> |
| public | <strong>getConnectedLineNum()</strong> : <em>string</em><br /><em>get ConnectedLineNum Returns key: 'ConnectedLineNum'</em> |
| public | <strong>getContext()</strong> : <em>string</em><br /><em>get Context Returns key: 'Context'</em> |
| public | <strong>getDestAccountCode()</strong> : <em>string</em><br /><em>get DestAccountCode Returns key: 'DestAccountCode'</em> |
| public | <strong>getDestCallerIDName()</strong> : <em>string</em><br /><em>get DestCallerIDName Returns key: 'DestCallerIDName'</em> |
| public | <strong>getDestCallerIDNum()</strong> : <em>string</em><br /><em>get DestCallerIDNum Returns key: 'DestCallerIDNum'</em> |
| public | <strong>getDestChannel()</strong> : <em>string</em><br /><em>get DestChannel Returns key: 'DestChannel'</em> |
| public | <strong>getDestChannelState()</strong> : <em>string</em><br /><em>get DestChannelState Returns:A numeric code for the channel's current state, related to DestChannelStateDesc</em> |
| public | <strong>getDestChannelStateDesc()</strong> : <em>string</em><br /><em>get DestChannelStateDesc Returns key: 'DestChannelStateDesc'</em> |
| public | <strong>getDestConnectedLineName()</strong> : <em>string</em><br /><em>get DestConnectedLineName Returns key: 'DestConnectedLineName'</em> |
| public | <strong>getDestConnectedLineNum()</strong> : <em>string</em><br /><em>get DestConnectedLineNum Returns key: 'DestConnectedLineNum'</em> |
| public | <strong>getDestContext()</strong> : <em>string</em><br /><em>get DestContext Returns key: 'DestContext'</em> |
| public | <strong>getDestExten()</strong> : <em>string</em><br /><em>get DestExten Returns key: 'DestExten'</em> |
| public | <strong>getDestLanguage()</strong> : <em>string</em><br /><em>get DestLanguage Returns key: 'DestLanguage'</em> |
| public | <strong>getDestLinkedid()</strong> : <em>string</em><br /><em>get DestLinkedid Returns:Uniqueid of the oldest channel associated with this channel.</em> |
| public | <strong>getDestPriority()</strong> : <em>string</em><br /><em>get DestPriority Returns key: 'DestPriority'</em> |
| public | <strong>getDestUniqueid()</strong> : <em>string</em><br /><em>get DestUniqueid Returns key: 'DestUniqueid'</em> |
| public | <strong>getExten()</strong> : <em>string</em><br /><em>get Exten Returns key: 'Exten'</em> |
| public | <strong>getInterface()</strong> : <em>string</em><br /><em>get Interface Returns:The queue member's channel technology or location.</em> |
| public | <strong>getLanguage()</strong> : <em>string</em><br /><em>get Language Returns key: 'Language'</em> |
| public | <strong>getLinkedid()</strong> : <em>string</em><br /><em>get Linkedid Returns:Uniqueid of the oldest channel associated with this channel.</em> |
| public | <strong>getMemberName()</strong> : <em>string</em><br /><em>get MemberName Returns:The name of the queue member.</em> |
| public | <strong>getPriority()</strong> : <em>string</em><br /><em>get Priority Returns key: 'Priority'</em> |
| public | <strong>getQueue()</strong> : <em>string</em><br /><em>get Queue Returns:The name of the queue.</em> |
| public | <strong>getUniqueid()</strong> : <em>string</em><br /><em>get Uniqueid Returns key: 'Uniqueid'</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\AgentRingNoAnswerEvent

> AgentRingNoAnswer Event Note: Auto Generated using xsltproc PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getAccountCode()</strong> : <em>string</em><br /><em>get AccountCode Returns key: 'AccountCode'</em> |
| public | <strong>getCallerIDName()</strong> : <em>string</em><br /><em>get CallerIDName Returns key: 'CallerIDName'</em> |
| public | <strong>getCallerIDNum()</strong> : <em>string</em><br /><em>get CallerIDNum Returns key: 'CallerIDNum'</em> |
| public | <strong>getChannel()</strong> : <em>string</em><br /><em>get Channel Returns key: 'Channel'</em> |
| public | <strong>getChannelState()</strong> : <em>string</em><br /><em>get ChannelState Returns:A numeric code for the channel's current state, related to ChannelStateDesc</em> |
| public | <strong>getChannelStateDesc()</strong> : <em>string</em><br /><em>get ChannelStateDesc Returns key: 'ChannelStateDesc'</em> |
| public | <strong>getConnectedLineName()</strong> : <em>string</em><br /><em>get ConnectedLineName Returns key: 'ConnectedLineName'</em> |
| public | <strong>getConnectedLineNum()</strong> : <em>string</em><br /><em>get ConnectedLineNum Returns key: 'ConnectedLineNum'</em> |
| public | <strong>getContext()</strong> : <em>string</em><br /><em>get Context Returns key: 'Context'</em> |
| public | <strong>getDestAccountCode()</strong> : <em>string</em><br /><em>get DestAccountCode Returns key: 'DestAccountCode'</em> |
| public | <strong>getDestCallerIDName()</strong> : <em>string</em><br /><em>get DestCallerIDName Returns key: 'DestCallerIDName'</em> |
| public | <strong>getDestCallerIDNum()</strong> : <em>string</em><br /><em>get DestCallerIDNum Returns key: 'DestCallerIDNum'</em> |
| public | <strong>getDestChannel()</strong> : <em>string</em><br /><em>get DestChannel Returns key: 'DestChannel'</em> |
| public | <strong>getDestChannelState()</strong> : <em>string</em><br /><em>get DestChannelState Returns:A numeric code for the channel's current state, related to DestChannelStateDesc</em> |
| public | <strong>getDestChannelStateDesc()</strong> : <em>string</em><br /><em>get DestChannelStateDesc Returns key: 'DestChannelStateDesc'</em> |
| public | <strong>getDestConnectedLineName()</strong> : <em>string</em><br /><em>get DestConnectedLineName Returns key: 'DestConnectedLineName'</em> |
| public | <strong>getDestConnectedLineNum()</strong> : <em>string</em><br /><em>get DestConnectedLineNum Returns key: 'DestConnectedLineNum'</em> |
| public | <strong>getDestContext()</strong> : <em>string</em><br /><em>get DestContext Returns key: 'DestContext'</em> |
| public | <strong>getDestExten()</strong> : <em>string</em><br /><em>get DestExten Returns key: 'DestExten'</em> |
| public | <strong>getDestLanguage()</strong> : <em>string</em><br /><em>get DestLanguage Returns key: 'DestLanguage'</em> |
| public | <strong>getDestLinkedid()</strong> : <em>string</em><br /><em>get DestLinkedid Returns:Uniqueid of the oldest channel associated with this channel.</em> |
| public | <strong>getDestPriority()</strong> : <em>string</em><br /><em>get DestPriority Returns key: 'DestPriority'</em> |
| public | <strong>getDestUniqueid()</strong> : <em>string</em><br /><em>get DestUniqueid Returns key: 'DestUniqueid'</em> |
| public | <strong>getExten()</strong> : <em>string</em><br /><em>get Exten Returns key: 'Exten'</em> |
| public | <strong>getInterface()</strong> : <em>string</em><br /><em>get Interface Returns:The queue member's channel technology or location.</em> |
| public | <strong>getLanguage()</strong> : <em>string</em><br /><em>get Language Returns key: 'Language'</em> |
| public | <strong>getLinkedid()</strong> : <em>string</em><br /><em>get Linkedid Returns:Uniqueid of the oldest channel associated with this channel.</em> |
| public | <strong>getMemberName()</strong> : <em>string</em><br /><em>get MemberName Returns:The name of the queue member.</em> |
| public | <strong>getPriority()</strong> : <em>string</em><br /><em>get Priority Returns key: 'Priority'</em> |
| public | <strong>getQueue()</strong> : <em>string</em><br /><em>get Queue Returns:The name of the queue.</em> |
| public | <strong>getRingTime()</strong> : <em>string</em><br /><em>get RingTime Returns:The time the queue member was rung, expressed in seconds since 00:00, Jan 1, 1970 UTC.</em> |
| public | <strong>getUniqueid()</strong> : <em>string</em><br /><em>get Uniqueid Returns key: 'Uniqueid'</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\AlarmClearEvent

> AlarmClear Event Note: Auto Generated using xsltproc PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getDAHDIChannel()</strong> : <em>string</em><br /><em>get DAHDIChannel Returns:The DAHDI channel on which the alarm was cleared.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\AlarmEvent

> Alarm Event Note: Auto Generated using xsltproc PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getAlarm()</strong> : <em>string</em><br /><em>get Alarm Returns:A textual description of the alarm that occurred.</em> |
| public | <strong>getDAHDIChannel()</strong> : <em>string</em><br /><em>get DAHDIChannel Returns:The channel on which the alarm occurred.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\AorListCompleteEvent

> AorListComplete Event Part Of Action: PJSIPShowAors Note: Auto Generated using xsltproc PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getEventList()</strong> : <em>string</em><br /><em>get EventList Returns key: 'EventList'</em> |
| public | <strong>getListItems()</strong> : <em>string</em><br /><em>get ListItems Returns key: 'ListItems'</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\AorListEvent

> AorList Event isListEntry and Part Action: PJSIPShowAors Note: Auto Generated using xsltproc PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getAuthenticateQualify()</strong> : <em>string</em><br /><em>get AuthenticateQualify Returns:Authenticates a qualify challenge response if needed</em> |
| public | <strong>getDefaultExpiration()</strong> : <em>string</em><br /><em>get DefaultExpiration Returns:Default expiration time in seconds for contacts that are dynamically bound to an AoR.</em> |
| public | <strong>getMailboxes()</strong> : <em>string</em><br /><em>get Mailboxes Returns:Allow subscriptions for the specified mailbox(es)</em> |
| public | <strong>getMaxContacts()</strong> : <em>string</em><br /><em>get MaxContacts Returns:Maximum number of contacts that can bind to an AoR</em> |
| public | <strong>getMaximumExpiration()</strong> : <em>string</em><br /><em>get MaximumExpiration Returns:Maximum time to keep an AoR</em> |
| public | <strong>getMinimumExpiration()</strong> : <em>string</em><br /><em>get MinimumExpiration Returns:Minimum keep alive time for an AoR</em> |
| public | <strong>getObjectName()</strong> : <em>string</em><br /><em>get ObjectName Returns:The name of this object.</em> |
| public | <strong>getObjectType()</strong> : <em>string</em><br /><em>get ObjectType Returns:The object's type. This will always be 'aor'.</em> |
| public | <strong>getOutboundProxy()</strong> : <em>string</em><br /><em>get OutboundProxy Returns:Outbound proxy used when sending OPTIONS request</em> |
| public | <strong>getQualifyFrequency()</strong> : <em>string</em><br /><em>get QualifyFrequency Returns:Interval at which to qualify an AoR</em> |
| public | <strong>getRemoveExisting()</strong> : <em>string</em><br /><em>get RemoveExisting Returns:Determines whether new contacts replace existing ones.</em> |
| public | <strong>getSupportPath()</strong> : <em>string</em><br /><em>get SupportPath Returns:Enables Path support for REGISTER requests and Route support for other requests.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\AuthListCompleteEvent

> AuthListComplete Event Part Of Action: PJSIPShowAuths Note: Auto Generated using xsltproc PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getEventList()</strong> : <em>string</em><br /><em>get EventList Returns key: 'EventList'</em> |
| public | <strong>getListItems()</strong> : <em>string</em><br /><em>get ListItems Returns key: 'ListItems'</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\AuthListEvent

> AuthList Event isListEntry and Part Action: PJSIPShowAuths Note: Auto Generated using xsltproc PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getAuthType()</strong> : <em>string</em><br /><em>get AuthType Returns:Authentication type</em> |
| public | <strong>getMd5Cred()</strong> : <em>string</em><br /><em>get Md5Cred Returns:MD5 Hash used for authentication.</em> |
| public | <strong>getNonceLifetime()</strong> : <em>string</em><br /><em>get NonceLifetime Returns:Lifetime of a nonce associated with this authentication config.</em> |
| public | <strong>getObjectName()</strong> : <em>string</em><br /><em>get ObjectName Returns:The name of this object.</em> |
| public | <strong>getObjectType()</strong> : <em>string</em><br /><em>get ObjectType Returns:The object's type. This will always be 'auth'.</em> |
| public | <strong>getPassword()</strong> : <em>string</em><br /><em>get Password Returns:Plain text password used for authentication.</em> |
| public | <strong>getRealm()</strong> : <em>string</em><br /><em>get Realm Returns:SIP realm for endpoint</em> |
| public | <strong>getUsername()</strong> : <em>string</em><br /><em>get Username Returns:Username to use for account</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\AuthMethodNotAllowedEvent

> AuthMethodNotAllowed Event Note: Auto Generated using xsltproc PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getAccountID()</strong> : <em>string</em><br /><em>get AccountID Returns:The Service account associated with the security event notification.</em> |
| public | <strong>getAuthMethod()</strong> : <em>string</em><br /><em>get AuthMethod Returns:The authentication method attempted.</em> |
| public | <strong>getEventTV()</strong> : <em>string</em><br /><em>get EventTV Returns:The time the event was detected.</em> |
| public | <strong>getEventVersion()</strong> : <em>string</em><br /><em>get EventVersion Returns:The version of this event.</em> |
| public | <strong>getLocalAddress()</strong> : <em>string</em><br /><em>get LocalAddress Returns:The address of the Asterisk service that raised the security event.</em> |
| public | <strong>getModule()</strong> : <em>string</em><br /><em>get Module Returns:If available, the name of the module that raised the event.</em> |
| public | <strong>getRemoteAddress()</strong> : <em>string</em><br /><em>get RemoteAddress Returns:The remote address of the entity that caused the security event to be raised.</em> |
| public | <strong>getService()</strong> : <em>string</em><br /><em>get Service Returns:The Asterisk service that raised the security event.</em> |
| public | <strong>getSessionID()</strong> : <em>string</em><br /><em>get SessionID Returns:A unique identifier for the session in the service that raised the event.</em> |
| public | <strong>getSessionTV()</strong> : <em>string</em><br /><em>get SessionTV Returns:The timestamp reported by the session.</em> |
| public | <strong>getSeverity()</strong> : <em>string</em><br /><em>get Severity Returns:A relative severity of the security event.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\BridgeVideoSourceUpdateEvent

> BridgeVideoSourceUpdate Event Note: Auto Generated using xsltproc PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getBridgeCreator()</strong> : <em>string</em><br /><em>get BridgeCreator Returns:Entity that created the bridge if applicable</em> |
| public | <strong>getBridgeName()</strong> : <em>string</em><br /><em>get BridgeName Returns:Name used to refer to the bridge by its BridgeCreator if applicable</em> |
| public | <strong>getBridgeNumChannels()</strong> : <em>string</em><br /><em>get BridgeNumChannels Returns:Number of channels in the bridge</em> |
| public | <strong>getBridgePreviousVideoSource()</strong> : <em>string</em><br /><em>get BridgePreviousVideoSource Returns:The unique ID of the channel that was the video source.</em> |
| public | <strong>getBridgeTechnology()</strong> : <em>string</em><br /><em>get BridgeTechnology Returns:Technology in use by the bridge</em> |
| public | <strong>getBridgeType()</strong> : <em>string</em><br /><em>get BridgeType Returns:The type of bridge</em> |
| public | <strong>getBridgeUniqueid()</strong> : <em>string</em><br /><em>get BridgeUniqueid Returns key: 'BridgeUniqueid'</em> |
| public | <strong>getBridgeVideoSource()</strong> : <em>string</em><br /><em>get BridgeVideoSource Returns:If there is a video source for the bridge, the unique ID of the channel that is the video source.</em> |
| public | <strong>getBridgeVideoSourceMode()</strong> : <em>string</em><br /><em>get BridgeVideoSourceMode Returns:The video source mode for the bridge.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\ChallengeResponseFailedEvent

> ChallengeResponseFailed Event Note: Auto Generated using xsltproc PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getAccountID()</strong> : <em>string</em><br /><em>get AccountID Returns:The Service account associated with the security event notification.</em> |
| public | <strong>getChallenge()</strong> : <em>string</em><br /><em>get Challenge Returns:The challenge that was sent.</em> |
| public | <strong>getEventTV()</strong> : <em>string</em><br /><em>get EventTV Returns:The time the event was detected.</em> |
| public | <strong>getEventVersion()</strong> : <em>string</em><br /><em>get EventVersion Returns:The version of this event.</em> |
| public | <strong>getExpectedResponse()</strong> : <em>string</em><br /><em>get ExpectedResponse Returns:The expected response to the challenge.</em> |
| public | <strong>getLocalAddress()</strong> : <em>string</em><br /><em>get LocalAddress Returns:The address of the Asterisk service that raised the security event.</em> |
| public | <strong>getModule()</strong> : <em>string</em><br /><em>get Module Returns:If available, the name of the module that raised the event.</em> |
| public | <strong>getRemoteAddress()</strong> : <em>string</em><br /><em>get RemoteAddress Returns:The remote address of the entity that caused the security event to be raised.</em> |
| public | <strong>getResponse()</strong> : <em>string</em><br /><em>get Response Returns:The response that was received.</em> |
| public | <strong>getService()</strong> : <em>string</em><br /><em>get Service Returns:The Asterisk service that raised the security event.</em> |
| public | <strong>getSessionID()</strong> : <em>string</em><br /><em>get SessionID Returns:A unique identifier for the session in the service that raised the event.</em> |
| public | <strong>getSessionTV()</strong> : <em>string</em><br /><em>get SessionTV Returns:The timestamp reported by the session.</em> |
| public | <strong>getSeverity()</strong> : <em>string</em><br /><em>get Severity Returns:A relative severity of the security event.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\ChallengeSentEvent

> ChallengeSent Event Note: Auto Generated using xsltproc PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getAccountID()</strong> : <em>string</em><br /><em>get AccountID Returns:The Service account associated with the security event notification.</em> |
| public | <strong>getChallenge()</strong> : <em>string</em><br /><em>get Challenge Returns:The challenge that was sent.</em> |
| public | <strong>getEventTV()</strong> : <em>string</em><br /><em>get EventTV Returns:The time the event was detected.</em> |
| public | <strong>getEventVersion()</strong> : <em>string</em><br /><em>get EventVersion Returns:The version of this event.</em> |
| public | <strong>getLocalAddress()</strong> : <em>string</em><br /><em>get LocalAddress Returns:The address of the Asterisk service that raised the security event.</em> |
| public | <strong>getModule()</strong> : <em>string</em><br /><em>get Module Returns:If available, the name of the module that raised the event.</em> |
| public | <strong>getRemoteAddress()</strong> : <em>string</em><br /><em>get RemoteAddress Returns:The remote address of the entity that caused the security event to be raised.</em> |
| public | <strong>getService()</strong> : <em>string</em><br /><em>get Service Returns:The Asterisk service that raised the security event.</em> |
| public | <strong>getSessionID()</strong> : <em>string</em><br /><em>get SessionID Returns:A unique identifier for the session in the service that raised the event.</em> |
| public | <strong>getSessionTV()</strong> : <em>string</em><br /><em>get SessionTV Returns:The timestamp reported by the session.</em> |
| public | <strong>getSeverity()</strong> : <em>string</em><br /><em>get Severity Returns:A relative severity of the security event.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\ChannelTalkingStartEvent

> ChannelTalkingStart Event Note: Auto Generated using xsltproc PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getAccountCode()</strong> : <em>string</em><br /><em>get AccountCode Returns key: 'AccountCode'</em> |
| public | <strong>getCallerIDName()</strong> : <em>string</em><br /><em>get CallerIDName Returns key: 'CallerIDName'</em> |
| public | <strong>getCallerIDNum()</strong> : <em>string</em><br /><em>get CallerIDNum Returns key: 'CallerIDNum'</em> |
| public | <strong>getChannel()</strong> : <em>string</em><br /><em>get Channel Returns key: 'Channel'</em> |
| public | <strong>getChannelState()</strong> : <em>string</em><br /><em>get ChannelState Returns:A numeric code for the channel's current state, related to ChannelStateDesc</em> |
| public | <strong>getChannelStateDesc()</strong> : <em>string</em><br /><em>get ChannelStateDesc Returns key: 'ChannelStateDesc'</em> |
| public | <strong>getConnectedLineName()</strong> : <em>string</em><br /><em>get ConnectedLineName Returns key: 'ConnectedLineName'</em> |
| public | <strong>getConnectedLineNum()</strong> : <em>string</em><br /><em>get ConnectedLineNum Returns key: 'ConnectedLineNum'</em> |
| public | <strong>getContext()</strong> : <em>string</em><br /><em>get Context Returns key: 'Context'</em> |
| public | <strong>getExten()</strong> : <em>string</em><br /><em>get Exten Returns key: 'Exten'</em> |
| public | <strong>getLanguage()</strong> : <em>string</em><br /><em>get Language Returns key: 'Language'</em> |
| public | <strong>getLinkedid()</strong> : <em>string</em><br /><em>get Linkedid Returns:Uniqueid of the oldest channel associated with this channel.</em> |
| public | <strong>getPriority()</strong> : <em>string</em><br /><em>get Priority Returns key: 'Priority'</em> |
| public | <strong>getUniqueid()</strong> : <em>string</em><br /><em>get Uniqueid Returns key: 'Uniqueid'</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\ChannelTalkingStopEvent

> ChannelTalkingStop Event Note: Auto Generated using xsltproc PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getAccountCode()</strong> : <em>string</em><br /><em>get AccountCode Returns key: 'AccountCode'</em> |
| public | <strong>getCallerIDName()</strong> : <em>string</em><br /><em>get CallerIDName Returns key: 'CallerIDName'</em> |
| public | <strong>getCallerIDNum()</strong> : <em>string</em><br /><em>get CallerIDNum Returns key: 'CallerIDNum'</em> |
| public | <strong>getChannel()</strong> : <em>string</em><br /><em>get Channel Returns key: 'Channel'</em> |
| public | <strong>getChannelState()</strong> : <em>string</em><br /><em>get ChannelState Returns:A numeric code for the channel's current state, related to ChannelStateDesc</em> |
| public | <strong>getChannelStateDesc()</strong> : <em>string</em><br /><em>get ChannelStateDesc Returns key: 'ChannelStateDesc'</em> |
| public | <strong>getConnectedLineName()</strong> : <em>string</em><br /><em>get ConnectedLineName Returns key: 'ConnectedLineName'</em> |
| public | <strong>getConnectedLineNum()</strong> : <em>string</em><br /><em>get ConnectedLineNum Returns key: 'ConnectedLineNum'</em> |
| public | <strong>getContext()</strong> : <em>string</em><br /><em>get Context Returns key: 'Context'</em> |
| public | <strong>getDuration()</strong> : <em>string</em><br /><em>get Duration Returns:The length in time, in milliseconds, that talking was detected on the channel.</em> |
| public | <strong>getExten()</strong> : <em>string</em><br /><em>get Exten Returns key: 'Exten'</em> |
| public | <strong>getLanguage()</strong> : <em>string</em><br /><em>get Language Returns key: 'Language'</em> |
| public | <strong>getLinkedid()</strong> : <em>string</em><br /><em>get Linkedid Returns:Uniqueid of the oldest channel associated with this channel.</em> |
| public | <strong>getPriority()</strong> : <em>string</em><br /><em>get Priority Returns key: 'Priority'</em> |
| public | <strong>getUniqueid()</strong> : <em>string</em><br /><em>get Uniqueid Returns key: 'Uniqueid'</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\ChanSpyStartEvent

> ChanSpyStart Event Note: Auto Generated using xsltproc PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getSpyeeAccountCode()</strong> : <em>string</em><br /><em>get SpyeeAccountCode Returns key: 'SpyeeAccountCode'</em> |
| public | <strong>getSpyeeCallerIDName()</strong> : <em>string</em><br /><em>get SpyeeCallerIDName Returns key: 'SpyeeCallerIDName'</em> |
| public | <strong>getSpyeeCallerIDNum()</strong> : <em>string</em><br /><em>get SpyeeCallerIDNum Returns key: 'SpyeeCallerIDNum'</em> |
| public | <strong>getSpyeeChannel()</strong> : <em>string</em><br /><em>get SpyeeChannel Returns key: 'SpyeeChannel'</em> |
| public | <strong>getSpyeeChannelState()</strong> : <em>string</em><br /><em>get SpyeeChannelState Returns:A numeric code for the channel's current state, related to SpyeeChannelStateDesc</em> |
| public | <strong>getSpyeeChannelStateDesc()</strong> : <em>string</em><br /><em>get SpyeeChannelStateDesc Returns key: 'SpyeeChannelStateDesc'</em> |
| public | <strong>getSpyeeConnectedLineName()</strong> : <em>string</em><br /><em>get SpyeeConnectedLineName Returns key: 'SpyeeConnectedLineName'</em> |
| public | <strong>getSpyeeConnectedLineNum()</strong> : <em>string</em><br /><em>get SpyeeConnectedLineNum Returns key: 'SpyeeConnectedLineNum'</em> |
| public | <strong>getSpyeeContext()</strong> : <em>string</em><br /><em>get SpyeeContext Returns key: 'SpyeeContext'</em> |
| public | <strong>getSpyeeExten()</strong> : <em>string</em><br /><em>get SpyeeExten Returns key: 'SpyeeExten'</em> |
| public | <strong>getSpyeeLanguage()</strong> : <em>string</em><br /><em>get SpyeeLanguage Returns key: 'SpyeeLanguage'</em> |
| public | <strong>getSpyeeLinkedid()</strong> : <em>string</em><br /><em>get SpyeeLinkedid Returns:Uniqueid of the oldest channel associated with this channel.</em> |
| public | <strong>getSpyeePriority()</strong> : <em>string</em><br /><em>get SpyeePriority Returns key: 'SpyeePriority'</em> |
| public | <strong>getSpyeeUniqueid()</strong> : <em>string</em><br /><em>get SpyeeUniqueid Returns key: 'SpyeeUniqueid'</em> |
| public | <strong>getSpyerAccountCode()</strong> : <em>string</em><br /><em>get SpyerAccountCode Returns key: 'SpyerAccountCode'</em> |
| public | <strong>getSpyerCallerIDName()</strong> : <em>string</em><br /><em>get SpyerCallerIDName Returns key: 'SpyerCallerIDName'</em> |
| public | <strong>getSpyerCallerIDNum()</strong> : <em>string</em><br /><em>get SpyerCallerIDNum Returns key: 'SpyerCallerIDNum'</em> |
| public | <strong>getSpyerChannel()</strong> : <em>string</em><br /><em>get SpyerChannel Returns key: 'SpyerChannel'</em> |
| public | <strong>getSpyerChannelState()</strong> : <em>string</em><br /><em>get SpyerChannelState Returns:A numeric code for the channel's current state, related to SpyerChannelStateDesc</em> |
| public | <strong>getSpyerChannelStateDesc()</strong> : <em>string</em><br /><em>get SpyerChannelStateDesc Returns key: 'SpyerChannelStateDesc'</em> |
| public | <strong>getSpyerConnectedLineName()</strong> : <em>string</em><br /><em>get SpyerConnectedLineName Returns key: 'SpyerConnectedLineName'</em> |
| public | <strong>getSpyerConnectedLineNum()</strong> : <em>string</em><br /><em>get SpyerConnectedLineNum Returns key: 'SpyerConnectedLineNum'</em> |
| public | <strong>getSpyerContext()</strong> : <em>string</em><br /><em>get SpyerContext Returns key: 'SpyerContext'</em> |
| public | <strong>getSpyerExten()</strong> : <em>string</em><br /><em>get SpyerExten Returns key: 'SpyerExten'</em> |
| public | <strong>getSpyerLanguage()</strong> : <em>string</em><br /><em>get SpyerLanguage Returns key: 'SpyerLanguage'</em> |
| public | <strong>getSpyerLinkedid()</strong> : <em>string</em><br /><em>get SpyerLinkedid Returns:Uniqueid of the oldest channel associated with this channel.</em> |
| public | <strong>getSpyerPriority()</strong> : <em>string</em><br /><em>get SpyerPriority Returns key: 'SpyerPriority'</em> |
| public | <strong>getSpyerUniqueid()</strong> : <em>string</em><br /><em>get SpyerUniqueid Returns key: 'SpyerUniqueid'</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\ChanSpyStopEvent

> ChanSpyStop Event Note: Auto Generated using xsltproc PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getSpyeeAccountCode()</strong> : <em>string</em><br /><em>get SpyeeAccountCode Returns key: 'SpyeeAccountCode'</em> |
| public | <strong>getSpyeeCallerIDName()</strong> : <em>string</em><br /><em>get SpyeeCallerIDName Returns key: 'SpyeeCallerIDName'</em> |
| public | <strong>getSpyeeCallerIDNum()</strong> : <em>string</em><br /><em>get SpyeeCallerIDNum Returns key: 'SpyeeCallerIDNum'</em> |
| public | <strong>getSpyeeChannel()</strong> : <em>string</em><br /><em>get SpyeeChannel Returns key: 'SpyeeChannel'</em> |
| public | <strong>getSpyeeChannelState()</strong> : <em>string</em><br /><em>get SpyeeChannelState Returns:A numeric code for the channel's current state, related to SpyeeChannelStateDesc</em> |
| public | <strong>getSpyeeChannelStateDesc()</strong> : <em>string</em><br /><em>get SpyeeChannelStateDesc Returns key: 'SpyeeChannelStateDesc'</em> |
| public | <strong>getSpyeeConnectedLineName()</strong> : <em>string</em><br /><em>get SpyeeConnectedLineName Returns key: 'SpyeeConnectedLineName'</em> |
| public | <strong>getSpyeeConnectedLineNum()</strong> : <em>string</em><br /><em>get SpyeeConnectedLineNum Returns key: 'SpyeeConnectedLineNum'</em> |
| public | <strong>getSpyeeContext()</strong> : <em>string</em><br /><em>get SpyeeContext Returns key: 'SpyeeContext'</em> |
| public | <strong>getSpyeeExten()</strong> : <em>string</em><br /><em>get SpyeeExten Returns key: 'SpyeeExten'</em> |
| public | <strong>getSpyeeLanguage()</strong> : <em>string</em><br /><em>get SpyeeLanguage Returns key: 'SpyeeLanguage'</em> |
| public | <strong>getSpyeeLinkedid()</strong> : <em>string</em><br /><em>get SpyeeLinkedid Returns:Uniqueid of the oldest channel associated with this channel.</em> |
| public | <strong>getSpyeePriority()</strong> : <em>string</em><br /><em>get SpyeePriority Returns key: 'SpyeePriority'</em> |
| public | <strong>getSpyeeUniqueid()</strong> : <em>string</em><br /><em>get SpyeeUniqueid Returns key: 'SpyeeUniqueid'</em> |
| public | <strong>getSpyerAccountCode()</strong> : <em>string</em><br /><em>get SpyerAccountCode Returns key: 'SpyerAccountCode'</em> |
| public | <strong>getSpyerCallerIDName()</strong> : <em>string</em><br /><em>get SpyerCallerIDName Returns key: 'SpyerCallerIDName'</em> |
| public | <strong>getSpyerCallerIDNum()</strong> : <em>string</em><br /><em>get SpyerCallerIDNum Returns key: 'SpyerCallerIDNum'</em> |
| public | <strong>getSpyerChannel()</strong> : <em>string</em><br /><em>get SpyerChannel Returns key: 'SpyerChannel'</em> |
| public | <strong>getSpyerChannelState()</strong> : <em>string</em><br /><em>get SpyerChannelState Returns:A numeric code for the channel's current state, related to SpyerChannelStateDesc</em> |
| public | <strong>getSpyerChannelStateDesc()</strong> : <em>string</em><br /><em>get SpyerChannelStateDesc Returns key: 'SpyerChannelStateDesc'</em> |
| public | <strong>getSpyerConnectedLineName()</strong> : <em>string</em><br /><em>get SpyerConnectedLineName Returns key: 'SpyerConnectedLineName'</em> |
| public | <strong>getSpyerConnectedLineNum()</strong> : <em>string</em><br /><em>get SpyerConnectedLineNum Returns key: 'SpyerConnectedLineNum'</em> |
| public | <strong>getSpyerContext()</strong> : <em>string</em><br /><em>get SpyerContext Returns key: 'SpyerContext'</em> |
| public | <strong>getSpyerExten()</strong> : <em>string</em><br /><em>get SpyerExten Returns key: 'SpyerExten'</em> |
| public | <strong>getSpyerLanguage()</strong> : <em>string</em><br /><em>get SpyerLanguage Returns key: 'SpyerLanguage'</em> |
| public | <strong>getSpyerLinkedid()</strong> : <em>string</em><br /><em>get SpyerLinkedid Returns:Uniqueid of the oldest channel associated with this channel.</em> |
| public | <strong>getSpyerPriority()</strong> : <em>string</em><br /><em>get SpyerPriority Returns key: 'SpyerPriority'</em> |
| public | <strong>getSpyerUniqueid()</strong> : <em>string</em><br /><em>get SpyerUniqueid Returns key: 'SpyerUniqueid'</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\ConfbridgeRecordEvent

> ConfbridgeRecord Event Note: Auto Generated using xsltproc PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getBridgeCreator()</strong> : <em>string</em><br /><em>get BridgeCreator Returns:Entity that created the bridge if applicable</em> |
| public | <strong>getBridgeName()</strong> : <em>string</em><br /><em>get BridgeName Returns:Name used to refer to the bridge by its BridgeCreator if applicable</em> |
| public | <strong>getBridgeNumChannels()</strong> : <em>string</em><br /><em>get BridgeNumChannels Returns:Number of channels in the bridge</em> |
| public | <strong>getBridgeTechnology()</strong> : <em>string</em><br /><em>get BridgeTechnology Returns:Technology in use by the bridge</em> |
| public | <strong>getBridgeType()</strong> : <em>string</em><br /><em>get BridgeType Returns:The type of bridge</em> |
| public | <strong>getBridgeUniqueid()</strong> : <em>string</em><br /><em>get BridgeUniqueid Returns key: 'BridgeUniqueid'</em> |
| public | <strong>getBridgeVideoSource()</strong> : <em>string</em><br /><em>get BridgeVideoSource Returns:If there is a video source for the bridge, the unique ID of the channel that is the video source.</em> |
| public | <strong>getBridgeVideoSourceMode()</strong> : <em>string</em><br /><em>get BridgeVideoSourceMode Returns:The video source mode for the bridge.</em> |
| public | <strong>getConference()</strong> : <em>string</em><br /><em>get Conference Returns:The name of the Confbridge conference.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\ConfbridgeStopRecordEvent

> ConfbridgeStopRecord Event Note: Auto Generated using xsltproc PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getBridgeCreator()</strong> : <em>string</em><br /><em>get BridgeCreator Returns:Entity that created the bridge if applicable</em> |
| public | <strong>getBridgeName()</strong> : <em>string</em><br /><em>get BridgeName Returns:Name used to refer to the bridge by its BridgeCreator if applicable</em> |
| public | <strong>getBridgeNumChannels()</strong> : <em>string</em><br /><em>get BridgeNumChannels Returns:Number of channels in the bridge</em> |
| public | <strong>getBridgeTechnology()</strong> : <em>string</em><br /><em>get BridgeTechnology Returns:Technology in use by the bridge</em> |
| public | <strong>getBridgeType()</strong> : <em>string</em><br /><em>get BridgeType Returns:The type of bridge</em> |
| public | <strong>getBridgeUniqueid()</strong> : <em>string</em><br /><em>get BridgeUniqueid Returns key: 'BridgeUniqueid'</em> |
| public | <strong>getBridgeVideoSource()</strong> : <em>string</em><br /><em>get BridgeVideoSource Returns:If there is a video source for the bridge, the unique ID of the channel that is the video source.</em> |
| public | <strong>getBridgeVideoSourceMode()</strong> : <em>string</em><br /><em>get BridgeVideoSourceMode Returns:The video source mode for the bridge.</em> |
| public | <strong>getConference()</strong> : <em>string</em><br /><em>get Conference Returns:The name of the Confbridge conference.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\ContactListCompleteEvent

> ContactListComplete Event Part Of Action: PJSIPShowContacts Note: Auto Generated using xsltproc PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getEventList()</strong> : <em>string</em><br /><em>get EventList Returns key: 'EventList'</em> |
| public | <strong>getListItems()</strong> : <em>string</em><br /><em>get ListItems Returns key: 'ListItems'</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\ContactListEvent

> ContactList Event isListEntry and Part Action: PJSIPShowContacts Note: Auto Generated using xsltproc PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getAuthenticateQualify()</strong> : <em>string</em><br /><em>get AuthenticateQualify Returns:A boolean indicating whether a qualify should be authenticated.</em> |
| public | <strong>getCallId()</strong> : <em>string</em><br /><em>get CallId Returns:Content of the Call-ID header in REGISTER request. Will only appear in the event if available.</em> |
| public | <strong>getEndpoint()</strong> : <em>string</em><br /><em>get Endpoint Returns:The name of the endpoint associated with this information.</em> |
| public | <strong>getExpirationTime()</strong> : <em>string</em><br /><em>get ExpirationTime Returns:Absolute time that this contact is no longer valid after</em> |
| public | <strong>getObjectName()</strong> : <em>string</em><br /><em>get ObjectName Returns:The name of this object.</em> |
| public | <strong>getObjectType()</strong> : <em>string</em><br /><em>get ObjectType Returns:The object's type. This will always be 'contact'.</em> |
| public | <strong>getOutboundProxy()</strong> : <em>string</em><br /><em>get OutboundProxy Returns:The contact's outbound proxy.</em> |
| public | <strong>getPath()</strong> : <em>string</em><br /><em>get Path Returns:The Path header received on the REGISTER.</em> |
| public | <strong>getPruneOnBoot()</strong> : <em>string</em><br /><em>get PruneOnBoot Returns:If true delete the contact on Asterisk restart/boot.</em> |
| public | <strong>getQualifyFrequency()</strong> : <em>string</em><br /><em>get QualifyFrequency Returns:The interval in seconds at which the contact will be qualified.</em> |
| public | <strong>getQualifyTimeout()</strong> : <em>string</em><br /><em>get QualifyTimeout Returns:The elapsed time in decimal seconds after which an OPTIONS message is sent before the contact is considered unavailable.</em> |
| public | <strong>getRegServer()</strong> : <em>string</em><br /><em>get RegServer Returns:Asterisk Server name.</em> |
| public | <strong>getRoundtripUsec()</strong> : <em>string</em><br /><em>get RoundtripUsec Returns:The round trip time in microseconds.</em> |
| public | <strong>getStatus()</strong> : <em>string</em><br /><em>get Status Returns:This contact's status.</em> |
| public | <strong>getUri()</strong> : <em>string</em><br /><em>get Uri Returns:This contact's URI.</em> |
| public | <strong>getUserAgent()</strong> : <em>string</em><br /><em>get UserAgent Returns:Content of the User-Agent header in REGISTER request</em> |
| public | <strong>getViaAddr()</strong> : <em>string</em><br /><em>get ViaAddr Returns:IP address of the last Via header in REGISTER request. Will only appear in the event if available.</em> |
| public | <strong>getViaPort()</strong> : <em>string</em><br /><em>get ViaPort Returns:Port number of the last Via header in REGISTER request. Will only appear in the event if available.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\ContactStatusEvent

> ContactStatus Event Note: Auto Generated using xsltproc PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getAOR()</strong> : <em>string</em><br /><em>get AOR Returns:The name of the associated aor.</em> |
| public | <strong>getContactStatus()</strong> : <em>string</em><br /><em>get ContactStatus Returns:New status of the contact.</em> |
| public | <strong>getEndpointName()</strong> : <em>string</em><br /><em>get EndpointName Returns:The name of the associated endpoint.</em> |
| public | <strong>getRoundtripUsec()</strong> : <em>string</em><br /><em>get RoundtripUsec Returns:The RTT measured during the last qualify.</em> |
| public | <strong>getURI()</strong> : <em>string</em><br /><em>get URI Returns:This contact's URI.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\DeviceStateListCompleteEvent

> DeviceStateListComplete Event Part Of Action: DeviceStateList Note: Auto Generated using xsltproc PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getEventList()</strong> : <em>string</em><br /><em>get EventList Returns:Conveys the status of the event list.</em> |
| public | <strong>getListItems()</strong> : <em>string</em><br /><em>get ListItems Returns:Conveys the number of statuses reported.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\DialStateEvent

> DialState Event Note: Auto Generated using xsltproc PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getAccountCode()</strong> : <em>string</em><br /><em>get AccountCode Returns key: 'AccountCode'</em> |
| public | <strong>getCallerIDName()</strong> : <em>string</em><br /><em>get CallerIDName Returns key: 'CallerIDName'</em> |
| public | <strong>getCallerIDNum()</strong> : <em>string</em><br /><em>get CallerIDNum Returns key: 'CallerIDNum'</em> |
| public | <strong>getChannel()</strong> : <em>string</em><br /><em>get Channel Returns key: 'Channel'</em> |
| public | <strong>getChannelState()</strong> : <em>string</em><br /><em>get ChannelState Returns:A numeric code for the channel's current state, related to ChannelStateDesc</em> |
| public | <strong>getChannelStateDesc()</strong> : <em>string</em><br /><em>get ChannelStateDesc Returns key: 'ChannelStateDesc'</em> |
| public | <strong>getConnectedLineName()</strong> : <em>string</em><br /><em>get ConnectedLineName Returns key: 'ConnectedLineName'</em> |
| public | <strong>getConnectedLineNum()</strong> : <em>string</em><br /><em>get ConnectedLineNum Returns key: 'ConnectedLineNum'</em> |
| public | <strong>getContext()</strong> : <em>string</em><br /><em>get Context Returns key: 'Context'</em> |
| public | <strong>getDestAccountCode()</strong> : <em>string</em><br /><em>get DestAccountCode Returns key: 'DestAccountCode'</em> |
| public | <strong>getDestCallerIDName()</strong> : <em>string</em><br /><em>get DestCallerIDName Returns key: 'DestCallerIDName'</em> |
| public | <strong>getDestCallerIDNum()</strong> : <em>string</em><br /><em>get DestCallerIDNum Returns key: 'DestCallerIDNum'</em> |
| public | <strong>getDestChannel()</strong> : <em>string</em><br /><em>get DestChannel Returns key: 'DestChannel'</em> |
| public | <strong>getDestChannelState()</strong> : <em>string</em><br /><em>get DestChannelState Returns:A numeric code for the channel's current state, related to DestChannelStateDesc</em> |
| public | <strong>getDestChannelStateDesc()</strong> : <em>string</em><br /><em>get DestChannelStateDesc Returns key: 'DestChannelStateDesc'</em> |
| public | <strong>getDestConnectedLineName()</strong> : <em>string</em><br /><em>get DestConnectedLineName Returns key: 'DestConnectedLineName'</em> |
| public | <strong>getDestConnectedLineNum()</strong> : <em>string</em><br /><em>get DestConnectedLineNum Returns key: 'DestConnectedLineNum'</em> |
| public | <strong>getDestContext()</strong> : <em>string</em><br /><em>get DestContext Returns key: 'DestContext'</em> |
| public | <strong>getDestExten()</strong> : <em>string</em><br /><em>get DestExten Returns key: 'DestExten'</em> |
| public | <strong>getDestLanguage()</strong> : <em>string</em><br /><em>get DestLanguage Returns key: 'DestLanguage'</em> |
| public | <strong>getDestLinkedid()</strong> : <em>string</em><br /><em>get DestLinkedid Returns:Uniqueid of the oldest channel associated with this channel.</em> |
| public | <strong>getDestPriority()</strong> : <em>string</em><br /><em>get DestPriority Returns key: 'DestPriority'</em> |
| public | <strong>getDestUniqueid()</strong> : <em>string</em><br /><em>get DestUniqueid Returns key: 'DestUniqueid'</em> |
| public | <strong>getDialStatus()</strong> : <em>string</em><br /><em>get DialStatus Returns:The new state of the outbound dial attempt.</em> |
| public | <strong>getExten()</strong> : <em>string</em><br /><em>get Exten Returns key: 'Exten'</em> |
| public | <strong>getForward()</strong> : <em>string</em><br /><em>get Forward Returns:If the call was forwarded, where the call was forwarded to.</em> |
| public | <strong>getLanguage()</strong> : <em>string</em><br /><em>get Language Returns key: 'Language'</em> |
| public | <strong>getLinkedid()</strong> : <em>string</em><br /><em>get Linkedid Returns:Uniqueid of the oldest channel associated with this channel.</em> |
| public | <strong>getPriority()</strong> : <em>string</em><br /><em>get Priority Returns key: 'Priority'</em> |
| public | <strong>getUniqueid()</strong> : <em>string</em><br /><em>get Uniqueid Returns key: 'Uniqueid'</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\EndpointDetailCompleteEvent

> EndpointDetailComplete Event Part Of Action: PJSIPShowEndpoint Note: Auto Generated using xsltproc PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getEventList()</strong> : <em>string</em><br /><em>get EventList Returns key: 'EventList'</em> |
| public | <strong>getListItems()</strong> : <em>string</em><br /><em>get ListItems Returns key: 'ListItems'</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\ExtensionStateListCompleteEvent

> ExtensionStateListComplete Event Part Of Action: ExtensionStateList Note: Auto Generated using xsltproc PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getEventList()</strong> : <em>string</em><br /><em>get EventList Returns:Conveys the status of the event list.</em> |
| public | <strong>getListItems()</strong> : <em>string</em><br /><em>get ListItems Returns:Conveys the number of statuses reported.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\FailedACLEvent

> FailedACL Event Note: Auto Generated using xsltproc PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getACLName()</strong> : <em>string</em><br /><em>get ACLName Returns:If available, the name of the ACL that failed.</em> |
| public | <strong>getAccountID()</strong> : <em>string</em><br /><em>get AccountID Returns:The Service account associated with the security event notification.</em> |
| public | <strong>getEventTV()</strong> : <em>string</em><br /><em>get EventTV Returns:The time the event was detected.</em> |
| public | <strong>getEventVersion()</strong> : <em>string</em><br /><em>get EventVersion Returns:The version of this event.</em> |
| public | <strong>getLocalAddress()</strong> : <em>string</em><br /><em>get LocalAddress Returns:The address of the Asterisk service that raised the security event.</em> |
| public | <strong>getModule()</strong> : <em>string</em><br /><em>get Module Returns:If available, the name of the module that raised the event.</em> |
| public | <strong>getRemoteAddress()</strong> : <em>string</em><br /><em>get RemoteAddress Returns:The remote address of the entity that caused the security event to be raised.</em> |
| public | <strong>getService()</strong> : <em>string</em><br /><em>get Service Returns:The Asterisk service that raised the security event.</em> |
| public | <strong>getSessionID()</strong> : <em>string</em><br /><em>get SessionID Returns:A unique identifier for the session in the service that raised the event.</em> |
| public | <strong>getSessionTV()</strong> : <em>string</em><br /><em>get SessionTV Returns:The timestamp reported by the session.</em> |
| public | <strong>getSeverity()</strong> : <em>string</em><br /><em>get Severity Returns:A relative severity of the security event.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\FAXSessionEvent

> FAXSession Event Note: Auto Generated using xsltproc PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getDataRate()</strong> : <em>string</em><br /><em>get DataRate Returns:Bit rate of the FAX. This field is not included when operation is 'V.21 Detect' or if operation is 'gateway' and state is 'Uninitialized'.</em> |
| public | <strong>getErrorCorrectionMode()</strong> : <em>string</em><br /><em>get ErrorCorrectionMode Returns:Whether error correcting mode is enabled for the FAX session. This field is not included when operation is 'V.21 Detect' or if operation is 'gateway' and state is 'Uninitialized'</em> |
| public | <strong>getFileName()</strong> : <em>string</em><br /><em>get FileName Returns:Filename of the image being sent/received for this FAX session. This field is not included if Operation isn't 'send' or 'receive'.</em> |
| public | <strong>getImageResolution()</strong> : <em>string</em><br /><em>get ImageResolution Returns:Resolution of each page of the FAX. Will be in the format of X_RESxY_RES. This field is not included if the operation is anything other than Receive/Transmit.</em> |
| public | <strong>getOperation()</strong> : <em>string</em><br /><em>get Operation Returns:FAX session operation type</em> |
| public | <strong>getPageNumber()</strong> : <em>string</em><br /><em>get PageNumber Returns:Current number of pages transferred during this FAX session. May change as the FAX progresses. This field is not included when operation is 'V.21 Detect' or if operation is 'gateway' and state is 'Uninitialized'.</em> |
| public | <strong>getPagesReceived()</strong> : <em>string</em><br /><em>get PagesReceived Returns:Total number of pages received during this session. This field is not included if Operation is not 'send' or 'receive'. Will be 0 for 'send'.</em> |
| public | <strong>getPagesTransmitted()</strong> : <em>string</em><br /><em>get PagesTransmitted Returns:Total number of pages sent during this session. This field is not included if Operation isn't 'send' or 'receive'. Will always be 0 for 'receive'.</em> |
| public | <strong>getSessionNumber()</strong> : <em>string</em><br /><em>get SessionNumber Returns:The numerical identifier for this particular session</em> |
| public | <strong>getState()</strong> : <em>string</em><br /><em>get State Returns:Current state of the FAX session</em> |
| public | <strong>getTotalBadLines()</strong> : <em>string</em><br /><em>get TotalBadLines Returns:Total number of bad lines sent/received during this session. This field is not included if Operation is not 'send' or 'received'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\FAXSessionsCompleteEvent

> FAXSessionsComplete Event Note: Auto Generated using xsltproc PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getTotal()</strong> : <em>string</em><br /><em>get Total Returns:Count of FAXSession events sent in response to FAXSessions action</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\FAXSessionsEntryEvent

> FAXSessionsEntry Event Note: Auto Generated using xsltproc PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getChannel()</strong> : <em>string</em><br /><em>get Channel Returns:Name of the channel responsible for the FAX session</em> |
| public | <strong>getFiles()</strong> : <em>string</em><br /><em>get Files Returns:File or list of files associated with this FAX session</em> |
| public | <strong>getOperation()</strong> : <em>string</em><br /><em>get Operation Returns:FAX session operation type</em> |
| public | <strong>getSessionNumber()</strong> : <em>string</em><br /><em>get SessionNumber Returns:The numerical identifier for this particular session</em> |
| public | <strong>getSessionType()</strong> : <em>string</em><br /><em>get SessionType Returns:FAX session passthru/relay type</em> |
| public | <strong>getState()</strong> : <em>string</em><br /><em>get State Returns:Current state of the FAX session</em> |
| public | <strong>getTechnology()</strong> : <em>string</em><br /><em>get Technology Returns:The FAX technology that the FAX session is using</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\FAXStatsEvent

> FAXStats Event Note: Auto Generated using xsltproc PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getCompletedFAXes()</strong> : <em>string</em><br /><em>get CompletedFAXes Returns:Total FAX sessions which have been completed successfully</em> |
| public | <strong>getCurrentSessions()</strong> : <em>string</em><br /><em>get CurrentSessions Returns:Number of active FAX sessions</em> |
| public | <strong>getFailedFAXes()</strong> : <em>string</em><br /><em>get FailedFAXes Returns:Total FAX sessions which failed to complete successfully</em> |
| public | <strong>getReceiveAttempts()</strong> : <em>string</em><br /><em>get ReceiveAttempts Returns:Total FAX sessions for which Asterisk is/was the recipient</em> |
| public | <strong>getReservedSessions()</strong> : <em>string</em><br /><em>get ReservedSessions Returns:Number of reserved FAX sessions</em> |
| public | <strong>getTransmitAttempts()</strong> : <em>string</em><br /><em>get TransmitAttempts Returns:Total FAX sessions for which Asterisk is/was the transmitter</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\FAXStatusEvent

> FAXStatus Event Note: Auto Generated using xsltproc PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getAccountCode()</strong> : <em>string</em><br /><em>get AccountCode Returns key: 'AccountCode'</em> |
| public | <strong>getCallerIDName()</strong> : <em>string</em><br /><em>get CallerIDName Returns key: 'CallerIDName'</em> |
| public | <strong>getCallerIDNum()</strong> : <em>string</em><br /><em>get CallerIDNum Returns key: 'CallerIDNum'</em> |
| public | <strong>getChannel()</strong> : <em>string</em><br /><em>get Channel Returns key: 'Channel'</em> |
| public | <strong>getChannelState()</strong> : <em>string</em><br /><em>get ChannelState Returns:A numeric code for the channel's current state, related to ChannelStateDesc</em> |
| public | <strong>getChannelStateDesc()</strong> : <em>string</em><br /><em>get ChannelStateDesc Returns key: 'ChannelStateDesc'</em> |
| public | <strong>getConnectedLineName()</strong> : <em>string</em><br /><em>get ConnectedLineName Returns key: 'ConnectedLineName'</em> |
| public | <strong>getConnectedLineNum()</strong> : <em>string</em><br /><em>get ConnectedLineNum Returns key: 'ConnectedLineNum'</em> |
| public | <strong>getContext()</strong> : <em>string</em><br /><em>get Context Returns key: 'Context'</em> |
| public | <strong>getExten()</strong> : <em>string</em><br /><em>get Exten Returns key: 'Exten'</em> |
| public | <strong>getFileName()</strong> : <em>string</em><br /><em>get FileName Returns:The files being affected by the fax operation</em> |
| public | <strong>getLanguage()</strong> : <em>string</em><br /><em>get Language Returns key: 'Language'</em> |
| public | <strong>getLinkedid()</strong> : <em>string</em><br /><em>get Linkedid Returns:Uniqueid of the oldest channel associated with this channel.</em> |
| public | <strong>getLocalStationID()</strong> : <em>string</em><br /><em>get LocalStationID Returns:The value of the LOCALSTATIONID channel variable</em> |
| public | <strong>getOperation()</strong> : <em>string</em><br /><em>get Operation Returns key: 'Operation'</em> |
| public | <strong>getPriority()</strong> : <em>string</em><br /><em>get Priority Returns key: 'Priority'</em> |
| public | <strong>getStatus()</strong> : <em>string</em><br /><em>get Status Returns:A text message describing the current status of the fax</em> |
| public | <strong>getUniqueid()</strong> : <em>string</em><br /><em>get Uniqueid Returns key: 'Uniqueid'</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\HangupHandlerPopEvent

> HangupHandlerPop Event Note: Auto Generated using xsltproc PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getAccountCode()</strong> : <em>string</em><br /><em>get AccountCode Returns key: 'AccountCode'</em> |
| public | <strong>getCallerIDName()</strong> : <em>string</em><br /><em>get CallerIDName Returns key: 'CallerIDName'</em> |
| public | <strong>getCallerIDNum()</strong> : <em>string</em><br /><em>get CallerIDNum Returns key: 'CallerIDNum'</em> |
| public | <strong>getChannel()</strong> : <em>string</em><br /><em>get Channel Returns key: 'Channel'</em> |
| public | <strong>getChannelState()</strong> : <em>string</em><br /><em>get ChannelState Returns:A numeric code for the channel's current state, related to ChannelStateDesc</em> |
| public | <strong>getChannelStateDesc()</strong> : <em>string</em><br /><em>get ChannelStateDesc Returns key: 'ChannelStateDesc'</em> |
| public | <strong>getConnectedLineName()</strong> : <em>string</em><br /><em>get ConnectedLineName Returns key: 'ConnectedLineName'</em> |
| public | <strong>getConnectedLineNum()</strong> : <em>string</em><br /><em>get ConnectedLineNum Returns key: 'ConnectedLineNum'</em> |
| public | <strong>getContext()</strong> : <em>string</em><br /><em>get Context Returns key: 'Context'</em> |
| public | <strong>getExten()</strong> : <em>string</em><br /><em>get Exten Returns key: 'Exten'</em> |
| public | <strong>getHandler()</strong> : <em>string</em><br /><em>get Handler Returns:Hangup handler parameter string passed to the Gosub application.</em> |
| public | <strong>getLanguage()</strong> : <em>string</em><br /><em>get Language Returns key: 'Language'</em> |
| public | <strong>getLinkedid()</strong> : <em>string</em><br /><em>get Linkedid Returns:Uniqueid of the oldest channel associated with this channel.</em> |
| public | <strong>getPriority()</strong> : <em>string</em><br /><em>get Priority Returns key: 'Priority'</em> |
| public | <strong>getUniqueid()</strong> : <em>string</em><br /><em>get Uniqueid Returns key: 'Uniqueid'</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\HangupHandlerPushEvent

> HangupHandlerPush Event Note: Auto Generated using xsltproc PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getAccountCode()</strong> : <em>string</em><br /><em>get AccountCode Returns key: 'AccountCode'</em> |
| public | <strong>getCallerIDName()</strong> : <em>string</em><br /><em>get CallerIDName Returns key: 'CallerIDName'</em> |
| public | <strong>getCallerIDNum()</strong> : <em>string</em><br /><em>get CallerIDNum Returns key: 'CallerIDNum'</em> |
| public | <strong>getChannel()</strong> : <em>string</em><br /><em>get Channel Returns key: 'Channel'</em> |
| public | <strong>getChannelState()</strong> : <em>string</em><br /><em>get ChannelState Returns:A numeric code for the channel's current state, related to ChannelStateDesc</em> |
| public | <strong>getChannelStateDesc()</strong> : <em>string</em><br /><em>get ChannelStateDesc Returns key: 'ChannelStateDesc'</em> |
| public | <strong>getConnectedLineName()</strong> : <em>string</em><br /><em>get ConnectedLineName Returns key: 'ConnectedLineName'</em> |
| public | <strong>getConnectedLineNum()</strong> : <em>string</em><br /><em>get ConnectedLineNum Returns key: 'ConnectedLineNum'</em> |
| public | <strong>getContext()</strong> : <em>string</em><br /><em>get Context Returns key: 'Context'</em> |
| public | <strong>getExten()</strong> : <em>string</em><br /><em>get Exten Returns key: 'Exten'</em> |
| public | <strong>getHandler()</strong> : <em>string</em><br /><em>get Handler Returns:Hangup handler parameter string passed to the Gosub application.</em> |
| public | <strong>getLanguage()</strong> : <em>string</em><br /><em>get Language Returns key: 'Language'</em> |
| public | <strong>getLinkedid()</strong> : <em>string</em><br /><em>get Linkedid Returns:Uniqueid of the oldest channel associated with this channel.</em> |
| public | <strong>getPriority()</strong> : <em>string</em><br /><em>get Priority Returns key: 'Priority'</em> |
| public | <strong>getUniqueid()</strong> : <em>string</em><br /><em>get Uniqueid Returns key: 'Uniqueid'</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\HangupHandlerRunEvent

> HangupHandlerRun Event Note: Auto Generated using xsltproc PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getAccountCode()</strong> : <em>string</em><br /><em>get AccountCode Returns key: 'AccountCode'</em> |
| public | <strong>getCallerIDName()</strong> : <em>string</em><br /><em>get CallerIDName Returns key: 'CallerIDName'</em> |
| public | <strong>getCallerIDNum()</strong> : <em>string</em><br /><em>get CallerIDNum Returns key: 'CallerIDNum'</em> |
| public | <strong>getChannel()</strong> : <em>string</em><br /><em>get Channel Returns key: 'Channel'</em> |
| public | <strong>getChannelState()</strong> : <em>string</em><br /><em>get ChannelState Returns:A numeric code for the channel's current state, related to ChannelStateDesc</em> |
| public | <strong>getChannelStateDesc()</strong> : <em>string</em><br /><em>get ChannelStateDesc Returns key: 'ChannelStateDesc'</em> |
| public | <strong>getConnectedLineName()</strong> : <em>string</em><br /><em>get ConnectedLineName Returns key: 'ConnectedLineName'</em> |
| public | <strong>getConnectedLineNum()</strong> : <em>string</em><br /><em>get ConnectedLineNum Returns key: 'ConnectedLineNum'</em> |
| public | <strong>getContext()</strong> : <em>string</em><br /><em>get Context Returns key: 'Context'</em> |
| public | <strong>getExten()</strong> : <em>string</em><br /><em>get Exten Returns key: 'Exten'</em> |
| public | <strong>getHandler()</strong> : <em>string</em><br /><em>get Handler Returns:Hangup handler parameter string passed to the Gosub application.</em> |
| public | <strong>getLanguage()</strong> : <em>string</em><br /><em>get Language Returns key: 'Language'</em> |
| public | <strong>getLinkedid()</strong> : <em>string</em><br /><em>get Linkedid Returns:Uniqueid of the oldest channel associated with this channel.</em> |
| public | <strong>getPriority()</strong> : <em>string</em><br /><em>get Priority Returns key: 'Priority'</em> |
| public | <strong>getUniqueid()</strong> : <em>string</em><br /><em>get Uniqueid Returns key: 'Uniqueid'</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\HangupRequestEvent

> HangupRequest Event Note: Auto Generated using xsltproc PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getAccountCode()</strong> : <em>string</em><br /><em>get AccountCode Returns key: 'AccountCode'</em> |
| public | <strong>getCallerIDName()</strong> : <em>string</em><br /><em>get CallerIDName Returns key: 'CallerIDName'</em> |
| public | <strong>getCallerIDNum()</strong> : <em>string</em><br /><em>get CallerIDNum Returns key: 'CallerIDNum'</em> |
| public | <strong>getCause()</strong> : <em>string</em><br /><em>get Cause Returns:A numeric cause code for why the channel was hung up.</em> |
| public | <strong>getChannel()</strong> : <em>string</em><br /><em>get Channel Returns key: 'Channel'</em> |
| public | <strong>getChannelState()</strong> : <em>string</em><br /><em>get ChannelState Returns:A numeric code for the channel's current state, related to ChannelStateDesc</em> |
| public | <strong>getChannelStateDesc()</strong> : <em>string</em><br /><em>get ChannelStateDesc Returns key: 'ChannelStateDesc'</em> |
| public | <strong>getConnectedLineName()</strong> : <em>string</em><br /><em>get ConnectedLineName Returns key: 'ConnectedLineName'</em> |
| public | <strong>getConnectedLineNum()</strong> : <em>string</em><br /><em>get ConnectedLineNum Returns key: 'ConnectedLineNum'</em> |
| public | <strong>getContext()</strong> : <em>string</em><br /><em>get Context Returns key: 'Context'</em> |
| public | <strong>getExten()</strong> : <em>string</em><br /><em>get Exten Returns key: 'Exten'</em> |
| public | <strong>getLanguage()</strong> : <em>string</em><br /><em>get Language Returns key: 'Language'</em> |
| public | <strong>getLinkedid()</strong> : <em>string</em><br /><em>get Linkedid Returns:Uniqueid of the oldest channel associated with this channel.</em> |
| public | <strong>getPriority()</strong> : <em>string</em><br /><em>get Priority Returns key: 'Priority'</em> |
| public | <strong>getUniqueid()</strong> : <em>string</em><br /><em>get Uniqueid Returns key: 'Uniqueid'</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\InvalidAccountIDEvent

> InvalidAccountID Event Note: Auto Generated using xsltproc PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getAccountID()</strong> : <em>string</em><br /><em>get AccountID Returns:The Service account associated with the security event notification.</em> |
| public | <strong>getEventTV()</strong> : <em>string</em><br /><em>get EventTV Returns:The time the event was detected.</em> |
| public | <strong>getEventVersion()</strong> : <em>string</em><br /><em>get EventVersion Returns:The version of this event.</em> |
| public | <strong>getLocalAddress()</strong> : <em>string</em><br /><em>get LocalAddress Returns:The address of the Asterisk service that raised the security event.</em> |
| public | <strong>getModule()</strong> : <em>string</em><br /><em>get Module Returns:If available, the name of the module that raised the event.</em> |
| public | <strong>getRemoteAddress()</strong> : <em>string</em><br /><em>get RemoteAddress Returns:The remote address of the entity that caused the security event to be raised.</em> |
| public | <strong>getService()</strong> : <em>string</em><br /><em>get Service Returns:The Asterisk service that raised the security event.</em> |
| public | <strong>getSessionID()</strong> : <em>string</em><br /><em>get SessionID Returns:A unique identifier for the session in the service that raised the event.</em> |
| public | <strong>getSessionTV()</strong> : <em>string</em><br /><em>get SessionTV Returns:The timestamp reported by the session.</em> |
| public | <strong>getSeverity()</strong> : <em>string</em><br /><em>get Severity Returns:A relative severity of the security event.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\InvalidPasswordEvent

> InvalidPassword Event Note: Auto Generated using xsltproc PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getAccountID()</strong> : <em>string</em><br /><em>get AccountID Returns:The Service account associated with the security event notification.</em> |
| public | <strong>getChallenge()</strong> : <em>string</em><br /><em>get Challenge Returns:The challenge that was sent.</em> |
| public | <strong>getEventTV()</strong> : <em>string</em><br /><em>get EventTV Returns:The time the event was detected.</em> |
| public | <strong>getEventVersion()</strong> : <em>string</em><br /><em>get EventVersion Returns:The version of this event.</em> |
| public | <strong>getLocalAddress()</strong> : <em>string</em><br /><em>get LocalAddress Returns:The address of the Asterisk service that raised the security event.</em> |
| public | <strong>getModule()</strong> : <em>string</em><br /><em>get Module Returns:If available, the name of the module that raised the event.</em> |
| public | <strong>getReceivedChallenge()</strong> : <em>string</em><br /><em>get ReceivedChallenge Returns:The challenge that was received.</em> |
| public | <strong>getReceivedHash()</strong> : <em>string</em><br /><em>get ReceivedHash Returns:The hash that was received.</em> |
| public | <strong>getRemoteAddress()</strong> : <em>string</em><br /><em>get RemoteAddress Returns:The remote address of the entity that caused the security event to be raised.</em> |
| public | <strong>getService()</strong> : <em>string</em><br /><em>get Service Returns:The Asterisk service that raised the security event.</em> |
| public | <strong>getSessionID()</strong> : <em>string</em><br /><em>get SessionID Returns:A unique identifier for the session in the service that raised the event.</em> |
| public | <strong>getSessionTV()</strong> : <em>string</em><br /><em>get SessionTV Returns:The timestamp reported by the session.</em> |
| public | <strong>getSeverity()</strong> : <em>string</em><br /><em>get Severity Returns:A relative severity of the security event.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\InvalidTransportEvent

> InvalidTransport Event Note: Auto Generated using xsltproc PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getAccountID()</strong> : <em>string</em><br /><em>get AccountID Returns:The Service account associated with the security event notification.</em> |
| public | <strong>getAttemptedTransport()</strong> : <em>string</em><br /><em>get AttemptedTransport Returns:The transport type that the request attempted to use.</em> |
| public | <strong>getEventTV()</strong> : <em>string</em><br /><em>get EventTV Returns:The time the event was detected.</em> |
| public | <strong>getEventVersion()</strong> : <em>string</em><br /><em>get EventVersion Returns:The version of this event.</em> |
| public | <strong>getLocalAddress()</strong> : <em>string</em><br /><em>get LocalAddress Returns:The address of the Asterisk service that raised the security event.</em> |
| public | <strong>getModule()</strong> : <em>string</em><br /><em>get Module Returns:If available, the name of the module that raised the event.</em> |
| public | <strong>getRemoteAddress()</strong> : <em>string</em><br /><em>get RemoteAddress Returns:The remote address of the entity that caused the security event to be raised.</em> |
| public | <strong>getService()</strong> : <em>string</em><br /><em>get Service Returns:The Asterisk service that raised the security event.</em> |
| public | <strong>getSessionID()</strong> : <em>string</em><br /><em>get SessionID Returns:A unique identifier for the session in the service that raised the event.</em> |
| public | <strong>getSessionTV()</strong> : <em>string</em><br /><em>get SessionTV Returns:The timestamp reported by the session.</em> |
| public | <strong>getSeverity()</strong> : <em>string</em><br /><em>get Severity Returns:A relative severity of the security event.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\LoadAverageLimitEvent

> LoadAverageLimit Event Note: Auto Generated using xsltproc PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getAccountID()</strong> : <em>string</em><br /><em>get AccountID Returns:The Service account associated with the security event notification.</em> |
| public | <strong>getEventTV()</strong> : <em>string</em><br /><em>get EventTV Returns:The time the event was detected.</em> |
| public | <strong>getEventVersion()</strong> : <em>string</em><br /><em>get EventVersion Returns:The version of this event.</em> |
| public | <strong>getLocalAddress()</strong> : <em>string</em><br /><em>get LocalAddress Returns:The address of the Asterisk service that raised the security event.</em> |
| public | <strong>getModule()</strong> : <em>string</em><br /><em>get Module Returns:If available, the name of the module that raised the event.</em> |
| public | <strong>getRemoteAddress()</strong> : <em>string</em><br /><em>get RemoteAddress Returns:The remote address of the entity that caused the security event to be raised.</em> |
| public | <strong>getService()</strong> : <em>string</em><br /><em>get Service Returns:The Asterisk service that raised the security event.</em> |
| public | <strong>getSessionID()</strong> : <em>string</em><br /><em>get SessionID Returns:A unique identifier for the session in the service that raised the event.</em> |
| public | <strong>getSessionTV()</strong> : <em>string</em><br /><em>get SessionTV Returns:The timestamp reported by the session.</em> |
| public | <strong>getSeverity()</strong> : <em>string</em><br /><em>get Severity Returns:A relative severity of the security event.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\LoadEvent

> Load Event Note: Auto Generated using xsltproc PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getModule()</strong> : <em>string</em><br /><em>get Module Returns:The name of the module that was loaded</em> |
| public | <strong>getStatus()</strong> : <em>string</em><br /><em>get Status Returns:The result of the load request.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\LocalBridgeEvent

> LocalBridge Event Note: Auto Generated using xsltproc PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getContext()</strong> : <em>string</em><br /><em>get Context Returns:The context in the dialplan that Channel2 starts in.</em> |
| public | <strong>getExten()</strong> : <em>string</em><br /><em>get Exten Returns:The extension in the dialplan that Channel2 starts in.</em> |
| public | <strong>getLocalOneAccountCode()</strong> : <em>string</em><br /><em>get LocalOneAccountCode Returns key: 'LocalOneAccountCode'</em> |
| public | <strong>getLocalOneCallerIDName()</strong> : <em>string</em><br /><em>get LocalOneCallerIDName Returns key: 'LocalOneCallerIDName'</em> |
| public | <strong>getLocalOneCallerIDNum()</strong> : <em>string</em><br /><em>get LocalOneCallerIDNum Returns key: 'LocalOneCallerIDNum'</em> |
| public | <strong>getLocalOneChannel()</strong> : <em>string</em><br /><em>get LocalOneChannel Returns key: 'LocalOneChannel'</em> |
| public | <strong>getLocalOneChannelState()</strong> : <em>string</em><br /><em>get LocalOneChannelState Returns:A numeric code for the channel's current state, related to LocalOneChannelStateDesc</em> |
| public | <strong>getLocalOneChannelStateDesc()</strong> : <em>string</em><br /><em>get LocalOneChannelStateDesc Returns key: 'LocalOneChannelStateDesc'</em> |
| public | <strong>getLocalOneConnectedLineName()</strong> : <em>string</em><br /><em>get LocalOneConnectedLineName Returns key: 'LocalOneConnectedLineName'</em> |
| public | <strong>getLocalOneConnectedLineNum()</strong> : <em>string</em><br /><em>get LocalOneConnectedLineNum Returns key: 'LocalOneConnectedLineNum'</em> |
| public | <strong>getLocalOneContext()</strong> : <em>string</em><br /><em>get LocalOneContext Returns key: 'LocalOneContext'</em> |
| public | <strong>getLocalOneExten()</strong> : <em>string</em><br /><em>get LocalOneExten Returns key: 'LocalOneExten'</em> |
| public | <strong>getLocalOneLanguage()</strong> : <em>string</em><br /><em>get LocalOneLanguage Returns key: 'LocalOneLanguage'</em> |
| public | <strong>getLocalOneLinkedid()</strong> : <em>string</em><br /><em>get LocalOneLinkedid Returns:Uniqueid of the oldest channel associated with this channel.</em> |
| public | <strong>getLocalOnePriority()</strong> : <em>string</em><br /><em>get LocalOnePriority Returns key: 'LocalOnePriority'</em> |
| public | <strong>getLocalOneUniqueid()</strong> : <em>string</em><br /><em>get LocalOneUniqueid Returns key: 'LocalOneUniqueid'</em> |
| public | <strong>getLocalOptimization()</strong> : <em>string</em><br /><em>get LocalOptimization Returns key: 'LocalOptimization'</em> |
| public | <strong>getLocalTwoAccountCode()</strong> : <em>string</em><br /><em>get LocalTwoAccountCode Returns key: 'LocalTwoAccountCode'</em> |
| public | <strong>getLocalTwoCallerIDName()</strong> : <em>string</em><br /><em>get LocalTwoCallerIDName Returns key: 'LocalTwoCallerIDName'</em> |
| public | <strong>getLocalTwoCallerIDNum()</strong> : <em>string</em><br /><em>get LocalTwoCallerIDNum Returns key: 'LocalTwoCallerIDNum'</em> |
| public | <strong>getLocalTwoChannel()</strong> : <em>string</em><br /><em>get LocalTwoChannel Returns key: 'LocalTwoChannel'</em> |
| public | <strong>getLocalTwoChannelState()</strong> : <em>string</em><br /><em>get LocalTwoChannelState Returns:A numeric code for the channel's current state, related to LocalTwoChannelStateDesc</em> |
| public | <strong>getLocalTwoChannelStateDesc()</strong> : <em>string</em><br /><em>get LocalTwoChannelStateDesc Returns key: 'LocalTwoChannelStateDesc'</em> |
| public | <strong>getLocalTwoConnectedLineName()</strong> : <em>string</em><br /><em>get LocalTwoConnectedLineName Returns key: 'LocalTwoConnectedLineName'</em> |
| public | <strong>getLocalTwoConnectedLineNum()</strong> : <em>string</em><br /><em>get LocalTwoConnectedLineNum Returns key: 'LocalTwoConnectedLineNum'</em> |
| public | <strong>getLocalTwoContext()</strong> : <em>string</em><br /><em>get LocalTwoContext Returns key: 'LocalTwoContext'</em> |
| public | <strong>getLocalTwoExten()</strong> : <em>string</em><br /><em>get LocalTwoExten Returns key: 'LocalTwoExten'</em> |
| public | <strong>getLocalTwoLanguage()</strong> : <em>string</em><br /><em>get LocalTwoLanguage Returns key: 'LocalTwoLanguage'</em> |
| public | <strong>getLocalTwoLinkedid()</strong> : <em>string</em><br /><em>get LocalTwoLinkedid Returns:Uniqueid of the oldest channel associated with this channel.</em> |
| public | <strong>getLocalTwoPriority()</strong> : <em>string</em><br /><em>get LocalTwoPriority Returns key: 'LocalTwoPriority'</em> |
| public | <strong>getLocalTwoUniqueid()</strong> : <em>string</em><br /><em>get LocalTwoUniqueid Returns key: 'LocalTwoUniqueid'</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\LocalOptimizationBeginEvent

> LocalOptimizationBegin Event Note: Auto Generated using xsltproc PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getDestUniqueId()</strong> : <em>string</em><br /><em>get DestUniqueId Returns:The unique ID of the bridge into which the local channel is optimizing.</em> |
| public | <strong>getId()</strong> : <em>string</em><br /><em>get Id Returns:Identification for the optimization operation.</em> |
| public | <strong>getLocalOneAccountCode()</strong> : <em>string</em><br /><em>get LocalOneAccountCode Returns key: 'LocalOneAccountCode'</em> |
| public | <strong>getLocalOneCallerIDName()</strong> : <em>string</em><br /><em>get LocalOneCallerIDName Returns key: 'LocalOneCallerIDName'</em> |
| public | <strong>getLocalOneCallerIDNum()</strong> : <em>string</em><br /><em>get LocalOneCallerIDNum Returns key: 'LocalOneCallerIDNum'</em> |
| public | <strong>getLocalOneChannel()</strong> : <em>string</em><br /><em>get LocalOneChannel Returns key: 'LocalOneChannel'</em> |
| public | <strong>getLocalOneChannelState()</strong> : <em>string</em><br /><em>get LocalOneChannelState Returns:A numeric code for the channel's current state, related to LocalOneChannelStateDesc</em> |
| public | <strong>getLocalOneChannelStateDesc()</strong> : <em>string</em><br /><em>get LocalOneChannelStateDesc Returns key: 'LocalOneChannelStateDesc'</em> |
| public | <strong>getLocalOneConnectedLineName()</strong> : <em>string</em><br /><em>get LocalOneConnectedLineName Returns key: 'LocalOneConnectedLineName'</em> |
| public | <strong>getLocalOneConnectedLineNum()</strong> : <em>string</em><br /><em>get LocalOneConnectedLineNum Returns key: 'LocalOneConnectedLineNum'</em> |
| public | <strong>getLocalOneContext()</strong> : <em>string</em><br /><em>get LocalOneContext Returns key: 'LocalOneContext'</em> |
| public | <strong>getLocalOneExten()</strong> : <em>string</em><br /><em>get LocalOneExten Returns key: 'LocalOneExten'</em> |
| public | <strong>getLocalOneLanguage()</strong> : <em>string</em><br /><em>get LocalOneLanguage Returns key: 'LocalOneLanguage'</em> |
| public | <strong>getLocalOneLinkedid()</strong> : <em>string</em><br /><em>get LocalOneLinkedid Returns:Uniqueid of the oldest channel associated with this channel.</em> |
| public | <strong>getLocalOnePriority()</strong> : <em>string</em><br /><em>get LocalOnePriority Returns key: 'LocalOnePriority'</em> |
| public | <strong>getLocalOneUniqueid()</strong> : <em>string</em><br /><em>get LocalOneUniqueid Returns key: 'LocalOneUniqueid'</em> |
| public | <strong>getLocalTwoAccountCode()</strong> : <em>string</em><br /><em>get LocalTwoAccountCode Returns key: 'LocalTwoAccountCode'</em> |
| public | <strong>getLocalTwoCallerIDName()</strong> : <em>string</em><br /><em>get LocalTwoCallerIDName Returns key: 'LocalTwoCallerIDName'</em> |
| public | <strong>getLocalTwoCallerIDNum()</strong> : <em>string</em><br /><em>get LocalTwoCallerIDNum Returns key: 'LocalTwoCallerIDNum'</em> |
| public | <strong>getLocalTwoChannel()</strong> : <em>string</em><br /><em>get LocalTwoChannel Returns key: 'LocalTwoChannel'</em> |
| public | <strong>getLocalTwoChannelState()</strong> : <em>string</em><br /><em>get LocalTwoChannelState Returns:A numeric code for the channel's current state, related to LocalTwoChannelStateDesc</em> |
| public | <strong>getLocalTwoChannelStateDesc()</strong> : <em>string</em><br /><em>get LocalTwoChannelStateDesc Returns key: 'LocalTwoChannelStateDesc'</em> |
| public | <strong>getLocalTwoConnectedLineName()</strong> : <em>string</em><br /><em>get LocalTwoConnectedLineName Returns key: 'LocalTwoConnectedLineName'</em> |
| public | <strong>getLocalTwoConnectedLineNum()</strong> : <em>string</em><br /><em>get LocalTwoConnectedLineNum Returns key: 'LocalTwoConnectedLineNum'</em> |
| public | <strong>getLocalTwoContext()</strong> : <em>string</em><br /><em>get LocalTwoContext Returns key: 'LocalTwoContext'</em> |
| public | <strong>getLocalTwoExten()</strong> : <em>string</em><br /><em>get LocalTwoExten Returns key: 'LocalTwoExten'</em> |
| public | <strong>getLocalTwoLanguage()</strong> : <em>string</em><br /><em>get LocalTwoLanguage Returns key: 'LocalTwoLanguage'</em> |
| public | <strong>getLocalTwoLinkedid()</strong> : <em>string</em><br /><em>get LocalTwoLinkedid Returns:Uniqueid of the oldest channel associated with this channel.</em> |
| public | <strong>getLocalTwoPriority()</strong> : <em>string</em><br /><em>get LocalTwoPriority Returns key: 'LocalTwoPriority'</em> |
| public | <strong>getLocalTwoUniqueid()</strong> : <em>string</em><br /><em>get LocalTwoUniqueid Returns key: 'LocalTwoUniqueid'</em> |
| public | <strong>getSourceAccountCode()</strong> : <em>string</em><br /><em>get SourceAccountCode Returns key: 'SourceAccountCode'</em> |
| public | <strong>getSourceCallerIDName()</strong> : <em>string</em><br /><em>get SourceCallerIDName Returns key: 'SourceCallerIDName'</em> |
| public | <strong>getSourceCallerIDNum()</strong> : <em>string</em><br /><em>get SourceCallerIDNum Returns key: 'SourceCallerIDNum'</em> |
| public | <strong>getSourceChannel()</strong> : <em>string</em><br /><em>get SourceChannel Returns key: 'SourceChannel'</em> |
| public | <strong>getSourceChannelState()</strong> : <em>string</em><br /><em>get SourceChannelState Returns:A numeric code for the channel's current state, related to SourceChannelStateDesc</em> |
| public | <strong>getSourceChannelStateDesc()</strong> : <em>string</em><br /><em>get SourceChannelStateDesc Returns key: 'SourceChannelStateDesc'</em> |
| public | <strong>getSourceConnectedLineName()</strong> : <em>string</em><br /><em>get SourceConnectedLineName Returns key: 'SourceConnectedLineName'</em> |
| public | <strong>getSourceConnectedLineNum()</strong> : <em>string</em><br /><em>get SourceConnectedLineNum Returns key: 'SourceConnectedLineNum'</em> |
| public | <strong>getSourceContext()</strong> : <em>string</em><br /><em>get SourceContext Returns key: 'SourceContext'</em> |
| public | <strong>getSourceExten()</strong> : <em>string</em><br /><em>get SourceExten Returns key: 'SourceExten'</em> |
| public | <strong>getSourceLanguage()</strong> : <em>string</em><br /><em>get SourceLanguage Returns key: 'SourceLanguage'</em> |
| public | <strong>getSourceLinkedid()</strong> : <em>string</em><br /><em>get SourceLinkedid Returns:Uniqueid of the oldest channel associated with this channel.</em> |
| public | <strong>getSourcePriority()</strong> : <em>string</em><br /><em>get SourcePriority Returns key: 'SourcePriority'</em> |
| public | <strong>getSourceUniqueid()</strong> : <em>string</em><br /><em>get SourceUniqueid Returns key: 'SourceUniqueid'</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\LocalOptimizationEndEvent

> LocalOptimizationEnd Event Note: Auto Generated using xsltproc PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getId()</strong> : <em>string</em><br /><em>get Id Returns:Identification for the optimization operation. Matches the Id from a previous LocalOptimizationBegin</em> |
| public | <strong>getLocalOneAccountCode()</strong> : <em>string</em><br /><em>get LocalOneAccountCode Returns key: 'LocalOneAccountCode'</em> |
| public | <strong>getLocalOneCallerIDName()</strong> : <em>string</em><br /><em>get LocalOneCallerIDName Returns key: 'LocalOneCallerIDName'</em> |
| public | <strong>getLocalOneCallerIDNum()</strong> : <em>string</em><br /><em>get LocalOneCallerIDNum Returns key: 'LocalOneCallerIDNum'</em> |
| public | <strong>getLocalOneChannel()</strong> : <em>string</em><br /><em>get LocalOneChannel Returns key: 'LocalOneChannel'</em> |
| public | <strong>getLocalOneChannelState()</strong> : <em>string</em><br /><em>get LocalOneChannelState Returns:A numeric code for the channel's current state, related to LocalOneChannelStateDesc</em> |
| public | <strong>getLocalOneChannelStateDesc()</strong> : <em>string</em><br /><em>get LocalOneChannelStateDesc Returns key: 'LocalOneChannelStateDesc'</em> |
| public | <strong>getLocalOneConnectedLineName()</strong> : <em>string</em><br /><em>get LocalOneConnectedLineName Returns key: 'LocalOneConnectedLineName'</em> |
| public | <strong>getLocalOneConnectedLineNum()</strong> : <em>string</em><br /><em>get LocalOneConnectedLineNum Returns key: 'LocalOneConnectedLineNum'</em> |
| public | <strong>getLocalOneContext()</strong> : <em>string</em><br /><em>get LocalOneContext Returns key: 'LocalOneContext'</em> |
| public | <strong>getLocalOneExten()</strong> : <em>string</em><br /><em>get LocalOneExten Returns key: 'LocalOneExten'</em> |
| public | <strong>getLocalOneLanguage()</strong> : <em>string</em><br /><em>get LocalOneLanguage Returns key: 'LocalOneLanguage'</em> |
| public | <strong>getLocalOneLinkedid()</strong> : <em>string</em><br /><em>get LocalOneLinkedid Returns:Uniqueid of the oldest channel associated with this channel.</em> |
| public | <strong>getLocalOnePriority()</strong> : <em>string</em><br /><em>get LocalOnePriority Returns key: 'LocalOnePriority'</em> |
| public | <strong>getLocalOneUniqueid()</strong> : <em>string</em><br /><em>get LocalOneUniqueid Returns key: 'LocalOneUniqueid'</em> |
| public | <strong>getLocalTwoAccountCode()</strong> : <em>string</em><br /><em>get LocalTwoAccountCode Returns key: 'LocalTwoAccountCode'</em> |
| public | <strong>getLocalTwoCallerIDName()</strong> : <em>string</em><br /><em>get LocalTwoCallerIDName Returns key: 'LocalTwoCallerIDName'</em> |
| public | <strong>getLocalTwoCallerIDNum()</strong> : <em>string</em><br /><em>get LocalTwoCallerIDNum Returns key: 'LocalTwoCallerIDNum'</em> |
| public | <strong>getLocalTwoChannel()</strong> : <em>string</em><br /><em>get LocalTwoChannel Returns key: 'LocalTwoChannel'</em> |
| public | <strong>getLocalTwoChannelState()</strong> : <em>string</em><br /><em>get LocalTwoChannelState Returns:A numeric code for the channel's current state, related to LocalTwoChannelStateDesc</em> |
| public | <strong>getLocalTwoChannelStateDesc()</strong> : <em>string</em><br /><em>get LocalTwoChannelStateDesc Returns key: 'LocalTwoChannelStateDesc'</em> |
| public | <strong>getLocalTwoConnectedLineName()</strong> : <em>string</em><br /><em>get LocalTwoConnectedLineName Returns key: 'LocalTwoConnectedLineName'</em> |
| public | <strong>getLocalTwoConnectedLineNum()</strong> : <em>string</em><br /><em>get LocalTwoConnectedLineNum Returns key: 'LocalTwoConnectedLineNum'</em> |
| public | <strong>getLocalTwoContext()</strong> : <em>string</em><br /><em>get LocalTwoContext Returns key: 'LocalTwoContext'</em> |
| public | <strong>getLocalTwoExten()</strong> : <em>string</em><br /><em>get LocalTwoExten Returns key: 'LocalTwoExten'</em> |
| public | <strong>getLocalTwoLanguage()</strong> : <em>string</em><br /><em>get LocalTwoLanguage Returns key: 'LocalTwoLanguage'</em> |
| public | <strong>getLocalTwoLinkedid()</strong> : <em>string</em><br /><em>get LocalTwoLinkedid Returns:Uniqueid of the oldest channel associated with this channel.</em> |
| public | <strong>getLocalTwoPriority()</strong> : <em>string</em><br /><em>get LocalTwoPriority Returns key: 'LocalTwoPriority'</em> |
| public | <strong>getLocalTwoUniqueid()</strong> : <em>string</em><br /><em>get LocalTwoUniqueid Returns key: 'LocalTwoUniqueid'</em> |
| public | <strong>getSuccess()</strong> : <em>string</em><br /><em>get Success Returns:Indicates whether the local optimization succeeded.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\MeetmeEndEvent

> MeetmeEnd Event Note: Auto Generated using xsltproc PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getMeetme()</strong> : <em>string</em><br /><em>get Meetme Returns:The identifier for the MeetMe conference.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\MeetmeJoinEvent

> MeetmeJoin Event Note: Auto Generated using xsltproc PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getAccountCode()</strong> : <em>string</em><br /><em>get AccountCode Returns key: 'AccountCode'</em> |
| public | <strong>getCallerIDName()</strong> : <em>string</em><br /><em>get CallerIDName Returns key: 'CallerIDName'</em> |
| public | <strong>getCallerIDNum()</strong> : <em>string</em><br /><em>get CallerIDNum Returns key: 'CallerIDNum'</em> |
| public | <strong>getChannel()</strong> : <em>string</em><br /><em>get Channel Returns key: 'Channel'</em> |
| public | <strong>getChannelState()</strong> : <em>string</em><br /><em>get ChannelState Returns:A numeric code for the channel's current state, related to ChannelStateDesc</em> |
| public | <strong>getChannelStateDesc()</strong> : <em>string</em><br /><em>get ChannelStateDesc Returns key: 'ChannelStateDesc'</em> |
| public | <strong>getConnectedLineName()</strong> : <em>string</em><br /><em>get ConnectedLineName Returns key: 'ConnectedLineName'</em> |
| public | <strong>getConnectedLineNum()</strong> : <em>string</em><br /><em>get ConnectedLineNum Returns key: 'ConnectedLineNum'</em> |
| public | <strong>getContext()</strong> : <em>string</em><br /><em>get Context Returns key: 'Context'</em> |
| public | <strong>getExten()</strong> : <em>string</em><br /><em>get Exten Returns key: 'Exten'</em> |
| public | <strong>getLanguage()</strong> : <em>string</em><br /><em>get Language Returns key: 'Language'</em> |
| public | <strong>getLinkedid()</strong> : <em>string</em><br /><em>get Linkedid Returns:Uniqueid of the oldest channel associated with this channel.</em> |
| public | <strong>getMeetme()</strong> : <em>string</em><br /><em>get Meetme Returns:The identifier for the MeetMe conference.</em> |
| public | <strong>getPriority()</strong> : <em>string</em><br /><em>get Priority Returns key: 'Priority'</em> |
| public | <strong>getUniqueid()</strong> : <em>string</em><br /><em>get Uniqueid Returns key: 'Uniqueid'</em> |
| public | <strong>getUser()</strong> : <em>string</em><br /><em>get User Returns:The identifier of the MeetMe user who joined.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\MeetmeLeaveEvent

> MeetmeLeave Event Note: Auto Generated using xsltproc PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getAccountCode()</strong> : <em>string</em><br /><em>get AccountCode Returns key: 'AccountCode'</em> |
| public | <strong>getCallerIDName()</strong> : <em>string</em><br /><em>get CallerIDName Returns key: 'CallerIDName'</em> |
| public | <strong>getCallerIDNum()</strong> : <em>string</em><br /><em>get CallerIDNum Returns key: 'CallerIDNum'</em> |
| public | <strong>getChannel()</strong> : <em>string</em><br /><em>get Channel Returns key: 'Channel'</em> |
| public | <strong>getChannelState()</strong> : <em>string</em><br /><em>get ChannelState Returns:A numeric code for the channel's current state, related to ChannelStateDesc</em> |
| public | <strong>getChannelStateDesc()</strong> : <em>string</em><br /><em>get ChannelStateDesc Returns key: 'ChannelStateDesc'</em> |
| public | <strong>getConnectedLineName()</strong> : <em>string</em><br /><em>get ConnectedLineName Returns key: 'ConnectedLineName'</em> |
| public | <strong>getConnectedLineNum()</strong> : <em>string</em><br /><em>get ConnectedLineNum Returns key: 'ConnectedLineNum'</em> |
| public | <strong>getContext()</strong> : <em>string</em><br /><em>get Context Returns key: 'Context'</em> |
| public | <strong>getDuration()</strong> : <em>string</em><br /><em>get Duration Returns:The length of time in seconds that the Meetme user was in the conference.</em> |
| public | <strong>getExten()</strong> : <em>string</em><br /><em>get Exten Returns key: 'Exten'</em> |
| public | <strong>getLanguage()</strong> : <em>string</em><br /><em>get Language Returns key: 'Language'</em> |
| public | <strong>getLinkedid()</strong> : <em>string</em><br /><em>get Linkedid Returns:Uniqueid of the oldest channel associated with this channel.</em> |
| public | <strong>getMeetme()</strong> : <em>string</em><br /><em>get Meetme Returns:The identifier for the MeetMe conference.</em> |
| public | <strong>getPriority()</strong> : <em>string</em><br /><em>get Priority Returns key: 'Priority'</em> |
| public | <strong>getUniqueid()</strong> : <em>string</em><br /><em>get Uniqueid Returns key: 'Uniqueid'</em> |
| public | <strong>getUser()</strong> : <em>string</em><br /><em>get User Returns:The identifier of the MeetMe user who joined.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\MeetmeMuteEvent

> MeetmeMute Event Note: Auto Generated using xsltproc PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getAccountCode()</strong> : <em>string</em><br /><em>get AccountCode Returns key: 'AccountCode'</em> |
| public | <strong>getCallerIDName()</strong> : <em>string</em><br /><em>get CallerIDName Returns key: 'CallerIDName'</em> |
| public | <strong>getCallerIDNum()</strong> : <em>string</em><br /><em>get CallerIDNum Returns key: 'CallerIDNum'</em> |
| public | <strong>getChannel()</strong> : <em>string</em><br /><em>get Channel Returns key: 'Channel'</em> |
| public | <strong>getChannelState()</strong> : <em>string</em><br /><em>get ChannelState Returns:A numeric code for the channel's current state, related to ChannelStateDesc</em> |
| public | <strong>getChannelStateDesc()</strong> : <em>string</em><br /><em>get ChannelStateDesc Returns key: 'ChannelStateDesc'</em> |
| public | <strong>getConnectedLineName()</strong> : <em>string</em><br /><em>get ConnectedLineName Returns key: 'ConnectedLineName'</em> |
| public | <strong>getConnectedLineNum()</strong> : <em>string</em><br /><em>get ConnectedLineNum Returns key: 'ConnectedLineNum'</em> |
| public | <strong>getContext()</strong> : <em>string</em><br /><em>get Context Returns key: 'Context'</em> |
| public | <strong>getDuration()</strong> : <em>string</em><br /><em>get Duration Returns:The length of time in seconds that the Meetme user has been in the conference at the time of this event.</em> |
| public | <strong>getExten()</strong> : <em>string</em><br /><em>get Exten Returns key: 'Exten'</em> |
| public | <strong>getLanguage()</strong> : <em>string</em><br /><em>get Language Returns key: 'Language'</em> |
| public | <strong>getLinkedid()</strong> : <em>string</em><br /><em>get Linkedid Returns:Uniqueid of the oldest channel associated with this channel.</em> |
| public | <strong>getMeetme()</strong> : <em>string</em><br /><em>get Meetme Returns:The identifier for the MeetMe conference.</em> |
| public | <strong>getPriority()</strong> : <em>string</em><br /><em>get Priority Returns key: 'Priority'</em> |
| public | <strong>getStatus()</strong> : <em>string</em><br /><em>get Status Returns key: 'Status'</em> |
| public | <strong>getUniqueid()</strong> : <em>string</em><br /><em>get Uniqueid Returns key: 'Uniqueid'</em> |
| public | <strong>getUser()</strong> : <em>string</em><br /><em>get User Returns:The identifier of the MeetMe user who joined.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\MeetmeTalkingEvent

> MeetmeTalking Event Note: Auto Generated using xsltproc PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getAccountCode()</strong> : <em>string</em><br /><em>get AccountCode Returns key: 'AccountCode'</em> |
| public | <strong>getCallerIDName()</strong> : <em>string</em><br /><em>get CallerIDName Returns key: 'CallerIDName'</em> |
| public | <strong>getCallerIDNum()</strong> : <em>string</em><br /><em>get CallerIDNum Returns key: 'CallerIDNum'</em> |
| public | <strong>getChannel()</strong> : <em>string</em><br /><em>get Channel Returns key: 'Channel'</em> |
| public | <strong>getChannelState()</strong> : <em>string</em><br /><em>get ChannelState Returns:A numeric code for the channel's current state, related to ChannelStateDesc</em> |
| public | <strong>getChannelStateDesc()</strong> : <em>string</em><br /><em>get ChannelStateDesc Returns key: 'ChannelStateDesc'</em> |
| public | <strong>getConnectedLineName()</strong> : <em>string</em><br /><em>get ConnectedLineName Returns key: 'ConnectedLineName'</em> |
| public | <strong>getConnectedLineNum()</strong> : <em>string</em><br /><em>get ConnectedLineNum Returns key: 'ConnectedLineNum'</em> |
| public | <strong>getContext()</strong> : <em>string</em><br /><em>get Context Returns key: 'Context'</em> |
| public | <strong>getDuration()</strong> : <em>string</em><br /><em>get Duration Returns:The length of time in seconds that the Meetme user has been in the conference at the time of this event.</em> |
| public | <strong>getExten()</strong> : <em>string</em><br /><em>get Exten Returns key: 'Exten'</em> |
| public | <strong>getLanguage()</strong> : <em>string</em><br /><em>get Language Returns key: 'Language'</em> |
| public | <strong>getLinkedid()</strong> : <em>string</em><br /><em>get Linkedid Returns:Uniqueid of the oldest channel associated with this channel.</em> |
| public | <strong>getMeetme()</strong> : <em>string</em><br /><em>get Meetme Returns:The identifier for the MeetMe conference.</em> |
| public | <strong>getPriority()</strong> : <em>string</em><br /><em>get Priority Returns key: 'Priority'</em> |
| public | <strong>getStatus()</strong> : <em>string</em><br /><em>get Status Returns key: 'Status'</em> |
| public | <strong>getUniqueid()</strong> : <em>string</em><br /><em>get Uniqueid Returns key: 'Uniqueid'</em> |
| public | <strong>getUser()</strong> : <em>string</em><br /><em>get User Returns:The identifier of the MeetMe user who joined.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\MeetmeTalkRequestEvent

> MeetmeTalkRequest Event Note: Auto Generated using xsltproc PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getAccountCode()</strong> : <em>string</em><br /><em>get AccountCode Returns key: 'AccountCode'</em> |
| public | <strong>getCallerIDName()</strong> : <em>string</em><br /><em>get CallerIDName Returns key: 'CallerIDName'</em> |
| public | <strong>getCallerIDNum()</strong> : <em>string</em><br /><em>get CallerIDNum Returns key: 'CallerIDNum'</em> |
| public | <strong>getChannel()</strong> : <em>string</em><br /><em>get Channel Returns key: 'Channel'</em> |
| public | <strong>getChannelState()</strong> : <em>string</em><br /><em>get ChannelState Returns:A numeric code for the channel's current state, related to ChannelStateDesc</em> |
| public | <strong>getChannelStateDesc()</strong> : <em>string</em><br /><em>get ChannelStateDesc Returns key: 'ChannelStateDesc'</em> |
| public | <strong>getConnectedLineName()</strong> : <em>string</em><br /><em>get ConnectedLineName Returns key: 'ConnectedLineName'</em> |
| public | <strong>getConnectedLineNum()</strong> : <em>string</em><br /><em>get ConnectedLineNum Returns key: 'ConnectedLineNum'</em> |
| public | <strong>getContext()</strong> : <em>string</em><br /><em>get Context Returns key: 'Context'</em> |
| public | <strong>getDuration()</strong> : <em>string</em><br /><em>get Duration Returns:The length of time in seconds that the Meetme user has been in the conference at the time of this event.</em> |
| public | <strong>getExten()</strong> : <em>string</em><br /><em>get Exten Returns key: 'Exten'</em> |
| public | <strong>getLanguage()</strong> : <em>string</em><br /><em>get Language Returns key: 'Language'</em> |
| public | <strong>getLinkedid()</strong> : <em>string</em><br /><em>get Linkedid Returns:Uniqueid of the oldest channel associated with this channel.</em> |
| public | <strong>getMeetme()</strong> : <em>string</em><br /><em>get Meetme Returns:The identifier for the MeetMe conference.</em> |
| public | <strong>getPriority()</strong> : <em>string</em><br /><em>get Priority Returns key: 'Priority'</em> |
| public | <strong>getStatus()</strong> : <em>string</em><br /><em>get Status Returns key: 'Status'</em> |
| public | <strong>getUniqueid()</strong> : <em>string</em><br /><em>get Uniqueid Returns key: 'Uniqueid'</em> |
| public | <strong>getUser()</strong> : <em>string</em><br /><em>get User Returns:The identifier of the MeetMe user who joined.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\MemoryLimitEvent

> MemoryLimit Event Note: Auto Generated using xsltproc PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getAccountID()</strong> : <em>string</em><br /><em>get AccountID Returns:The Service account associated with the security event notification.</em> |
| public | <strong>getEventTV()</strong> : <em>string</em><br /><em>get EventTV Returns:The time the event was detected.</em> |
| public | <strong>getEventVersion()</strong> : <em>string</em><br /><em>get EventVersion Returns:The version of this event.</em> |
| public | <strong>getLocalAddress()</strong> : <em>string</em><br /><em>get LocalAddress Returns:The address of the Asterisk service that raised the security event.</em> |
| public | <strong>getModule()</strong> : <em>string</em><br /><em>get Module Returns:If available, the name of the module that raised the event.</em> |
| public | <strong>getRemoteAddress()</strong> : <em>string</em><br /><em>get RemoteAddress Returns:The remote address of the entity that caused the security event to be raised.</em> |
| public | <strong>getService()</strong> : <em>string</em><br /><em>get Service Returns:The Asterisk service that raised the security event.</em> |
| public | <strong>getSessionID()</strong> : <em>string</em><br /><em>get SessionID Returns:A unique identifier for the session in the service that raised the event.</em> |
| public | <strong>getSessionTV()</strong> : <em>string</em><br /><em>get SessionTV Returns:The timestamp reported by the session.</em> |
| public | <strong>getSeverity()</strong> : <em>string</em><br /><em>get Severity Returns:A relative severity of the security event.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\MiniVoiceMailEvent

> MiniVoiceMail Event Note: Auto Generated using xsltproc PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getAccountCode()</strong> : <em>string</em><br /><em>get AccountCode Returns key: 'AccountCode'</em> |
| public | <strong>getAction()</strong> : <em>string</em><br /><em>get Action Returns:What action was taken. Currently, this will always be SentNotification</em> |
| public | <strong>getCallerIDName()</strong> : <em>string</em><br /><em>get CallerIDName Returns key: 'CallerIDName'</em> |
| public | <strong>getCallerIDNum()</strong> : <em>string</em><br /><em>get CallerIDNum Returns key: 'CallerIDNum'</em> |
| public | <strong>getChannel()</strong> : <em>string</em><br /><em>get Channel Returns key: 'Channel'</em> |
| public | <strong>getChannelState()</strong> : <em>string</em><br /><em>get ChannelState Returns:A numeric code for the channel's current state, related to ChannelStateDesc</em> |
| public | <strong>getChannelStateDesc()</strong> : <em>string</em><br /><em>get ChannelStateDesc Returns key: 'ChannelStateDesc'</em> |
| public | <strong>getConnectedLineName()</strong> : <em>string</em><br /><em>get ConnectedLineName Returns key: 'ConnectedLineName'</em> |
| public | <strong>getConnectedLineNum()</strong> : <em>string</em><br /><em>get ConnectedLineNum Returns key: 'ConnectedLineNum'</em> |
| public | <strong>getContext()</strong> : <em>string</em><br /><em>get Context Returns key: 'Context'</em> |
| public | <strong>getCounter()</strong> : <em>string</em><br /><em>get Counter Returns:A message counter derived from the MVM_COUNTER channel variable.</em> |
| public | <strong>getExten()</strong> : <em>string</em><br /><em>get Exten Returns key: 'Exten'</em> |
| public | <strong>getLanguage()</strong> : <em>string</em><br /><em>get Language Returns key: 'Language'</em> |
| public | <strong>getLinkedid()</strong> : <em>string</em><br /><em>get Linkedid Returns:Uniqueid of the oldest channel associated with this channel.</em> |
| public | <strong>getMailbox()</strong> : <em>string</em><br /><em>get Mailbox Returns:The mailbox that the notification was about, specified as mailbox@context</em> |
| public | <strong>getPriority()</strong> : <em>string</em><br /><em>get Priority Returns key: 'Priority'</em> |
| public | <strong>getUniqueid()</strong> : <em>string</em><br /><em>get Uniqueid Returns key: 'Uniqueid'</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\MonitorStartEvent

> MonitorStart Event Note: Auto Generated using xsltproc PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getAccountCode()</strong> : <em>string</em><br /><em>get AccountCode Returns key: 'AccountCode'</em> |
| public | <strong>getCallerIDName()</strong> : <em>string</em><br /><em>get CallerIDName Returns key: 'CallerIDName'</em> |
| public | <strong>getCallerIDNum()</strong> : <em>string</em><br /><em>get CallerIDNum Returns key: 'CallerIDNum'</em> |
| public | <strong>getChannel()</strong> : <em>string</em><br /><em>get Channel Returns key: 'Channel'</em> |
| public | <strong>getChannelState()</strong> : <em>string</em><br /><em>get ChannelState Returns:A numeric code for the channel's current state, related to ChannelStateDesc</em> |
| public | <strong>getChannelStateDesc()</strong> : <em>string</em><br /><em>get ChannelStateDesc Returns key: 'ChannelStateDesc'</em> |
| public | <strong>getConnectedLineName()</strong> : <em>string</em><br /><em>get ConnectedLineName Returns key: 'ConnectedLineName'</em> |
| public | <strong>getConnectedLineNum()</strong> : <em>string</em><br /><em>get ConnectedLineNum Returns key: 'ConnectedLineNum'</em> |
| public | <strong>getContext()</strong> : <em>string</em><br /><em>get Context Returns key: 'Context'</em> |
| public | <strong>getExten()</strong> : <em>string</em><br /><em>get Exten Returns key: 'Exten'</em> |
| public | <strong>getLanguage()</strong> : <em>string</em><br /><em>get Language Returns key: 'Language'</em> |
| public | <strong>getLinkedid()</strong> : <em>string</em><br /><em>get Linkedid Returns:Uniqueid of the oldest channel associated with this channel.</em> |
| public | <strong>getPriority()</strong> : <em>string</em><br /><em>get Priority Returns key: 'Priority'</em> |
| public | <strong>getUniqueid()</strong> : <em>string</em><br /><em>get Uniqueid Returns key: 'Uniqueid'</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\MonitorStopEvent

> MonitorStop Event Note: Auto Generated using xsltproc PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getAccountCode()</strong> : <em>string</em><br /><em>get AccountCode Returns key: 'AccountCode'</em> |
| public | <strong>getCallerIDName()</strong> : <em>string</em><br /><em>get CallerIDName Returns key: 'CallerIDName'</em> |
| public | <strong>getCallerIDNum()</strong> : <em>string</em><br /><em>get CallerIDNum Returns key: 'CallerIDNum'</em> |
| public | <strong>getChannel()</strong> : <em>string</em><br /><em>get Channel Returns key: 'Channel'</em> |
| public | <strong>getChannelState()</strong> : <em>string</em><br /><em>get ChannelState Returns:A numeric code for the channel's current state, related to ChannelStateDesc</em> |
| public | <strong>getChannelStateDesc()</strong> : <em>string</em><br /><em>get ChannelStateDesc Returns key: 'ChannelStateDesc'</em> |
| public | <strong>getConnectedLineName()</strong> : <em>string</em><br /><em>get ConnectedLineName Returns key: 'ConnectedLineName'</em> |
| public | <strong>getConnectedLineNum()</strong> : <em>string</em><br /><em>get ConnectedLineNum Returns key: 'ConnectedLineNum'</em> |
| public | <strong>getContext()</strong> : <em>string</em><br /><em>get Context Returns key: 'Context'</em> |
| public | <strong>getExten()</strong> : <em>string</em><br /><em>get Exten Returns key: 'Exten'</em> |
| public | <strong>getLanguage()</strong> : <em>string</em><br /><em>get Language Returns key: 'Language'</em> |
| public | <strong>getLinkedid()</strong> : <em>string</em><br /><em>get Linkedid Returns:Uniqueid of the oldest channel associated with this channel.</em> |
| public | <strong>getPriority()</strong> : <em>string</em><br /><em>get Priority Returns key: 'Priority'</em> |
| public | <strong>getUniqueid()</strong> : <em>string</em><br /><em>get Uniqueid Returns key: 'Uniqueid'</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\MWIGetCompleteEvent

> MWIGetComplete Event Note: Auto Generated using xsltproc PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getEventList()</strong> : <em>string</em><br /><em>get EventList Returns key: 'EventList'</em> |
| public | <strong>getListItems()</strong> : <em>string</em><br /><em>get ListItems Returns:The number of mailboxes reported.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\MWIGetEvent

> MWIGet Event Note: Auto Generated using xsltproc PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getMailbox()</strong> : <em>string</em><br /><em>get Mailbox Returns:Specific mailbox ID.</em> |
| public | <strong>getNewMessages()</strong> : <em>string</em><br /><em>get NewMessages Returns:The number of new messages in the mailbox.</em> |
| public | <strong>getOldMessages()</strong> : <em>string</em><br /><em>get OldMessages Returns:The number of old messages in the mailbox.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\NewConnectedLineEvent

> NewConnectedLine Event Note: Auto Generated using xsltproc PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getAccountCode()</strong> : <em>string</em><br /><em>get AccountCode Returns key: 'AccountCode'</em> |
| public | <strong>getCallerIDName()</strong> : <em>string</em><br /><em>get CallerIDName Returns key: 'CallerIDName'</em> |
| public | <strong>getCallerIDNum()</strong> : <em>string</em><br /><em>get CallerIDNum Returns key: 'CallerIDNum'</em> |
| public | <strong>getChannel()</strong> : <em>string</em><br /><em>get Channel Returns key: 'Channel'</em> |
| public | <strong>getChannelState()</strong> : <em>string</em><br /><em>get ChannelState Returns:A numeric code for the channel's current state, related to ChannelStateDesc</em> |
| public | <strong>getChannelStateDesc()</strong> : <em>string</em><br /><em>get ChannelStateDesc Returns key: 'ChannelStateDesc'</em> |
| public | <strong>getConnectedLineName()</strong> : <em>string</em><br /><em>get ConnectedLineName Returns key: 'ConnectedLineName'</em> |
| public | <strong>getConnectedLineNum()</strong> : <em>string</em><br /><em>get ConnectedLineNum Returns key: 'ConnectedLineNum'</em> |
| public | <strong>getContext()</strong> : <em>string</em><br /><em>get Context Returns key: 'Context'</em> |
| public | <strong>getExten()</strong> : <em>string</em><br /><em>get Exten Returns key: 'Exten'</em> |
| public | <strong>getLanguage()</strong> : <em>string</em><br /><em>get Language Returns key: 'Language'</em> |
| public | <strong>getLinkedid()</strong> : <em>string</em><br /><em>get Linkedid Returns:Uniqueid of the oldest channel associated with this channel.</em> |
| public | <strong>getPriority()</strong> : <em>string</em><br /><em>get Priority Returns key: 'Priority'</em> |
| public | <strong>getUniqueid()</strong> : <em>string</em><br /><em>get Uniqueid Returns key: 'Uniqueid'</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\ParkedCallSwapEvent

> ParkedCallSwap Event Note: Auto Generated using xsltproc PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getParkeeAccountCode()</strong> : <em>string</em><br /><em>get ParkeeAccountCode Returns key: 'ParkeeAccountCode'</em> |
| public | <strong>getParkeeCallerIDName()</strong> : <em>string</em><br /><em>get ParkeeCallerIDName Returns key: 'ParkeeCallerIDName'</em> |
| public | <strong>getParkeeCallerIDNum()</strong> : <em>string</em><br /><em>get ParkeeCallerIDNum Returns key: 'ParkeeCallerIDNum'</em> |
| public | <strong>getParkeeChannel()</strong> : <em>string</em><br /><em>get ParkeeChannel Returns key: 'ParkeeChannel'</em> |
| public | <strong>getParkeeChannelState()</strong> : <em>string</em><br /><em>get ParkeeChannelState Returns:A numeric code for the channel's current state, related to ParkeeChannelStateDesc</em> |
| public | <strong>getParkeeChannelStateDesc()</strong> : <em>string</em><br /><em>get ParkeeChannelStateDesc Returns key: 'ParkeeChannelStateDesc'</em> |
| public | <strong>getParkeeConnectedLineName()</strong> : <em>string</em><br /><em>get ParkeeConnectedLineName Returns key: 'ParkeeConnectedLineName'</em> |
| public | <strong>getParkeeConnectedLineNum()</strong> : <em>string</em><br /><em>get ParkeeConnectedLineNum Returns key: 'ParkeeConnectedLineNum'</em> |
| public | <strong>getParkeeContext()</strong> : <em>string</em><br /><em>get ParkeeContext Returns key: 'ParkeeContext'</em> |
| public | <strong>getParkeeExten()</strong> : <em>string</em><br /><em>get ParkeeExten Returns key: 'ParkeeExten'</em> |
| public | <strong>getParkeeLanguage()</strong> : <em>string</em><br /><em>get ParkeeLanguage Returns key: 'ParkeeLanguage'</em> |
| public | <strong>getParkeeLinkedid()</strong> : <em>string</em><br /><em>get ParkeeLinkedid Returns:Uniqueid of the oldest channel associated with this channel.</em> |
| public | <strong>getParkeePriority()</strong> : <em>string</em><br /><em>get ParkeePriority Returns key: 'ParkeePriority'</em> |
| public | <strong>getParkeeUniqueid()</strong> : <em>string</em><br /><em>get ParkeeUniqueid Returns key: 'ParkeeUniqueid'</em> |
| public | <strong>getParkerAccountCode()</strong> : <em>string</em><br /><em>get ParkerAccountCode Returns key: 'ParkerAccountCode'</em> |
| public | <strong>getParkerCallerIDName()</strong> : <em>string</em><br /><em>get ParkerCallerIDName Returns key: 'ParkerCallerIDName'</em> |
| public | <strong>getParkerCallerIDNum()</strong> : <em>string</em><br /><em>get ParkerCallerIDNum Returns key: 'ParkerCallerIDNum'</em> |
| public | <strong>getParkerChannel()</strong> : <em>string</em><br /><em>get ParkerChannel Returns key: 'ParkerChannel'</em> |
| public | <strong>getParkerChannelState()</strong> : <em>string</em><br /><em>get ParkerChannelState Returns:A numeric code for the channel's current state, related to ParkerChannelStateDesc</em> |
| public | <strong>getParkerChannelStateDesc()</strong> : <em>string</em><br /><em>get ParkerChannelStateDesc Returns key: 'ParkerChannelStateDesc'</em> |
| public | <strong>getParkerConnectedLineName()</strong> : <em>string</em><br /><em>get ParkerConnectedLineName Returns key: 'ParkerConnectedLineName'</em> |
| public | <strong>getParkerConnectedLineNum()</strong> : <em>string</em><br /><em>get ParkerConnectedLineNum Returns key: 'ParkerConnectedLineNum'</em> |
| public | <strong>getParkerContext()</strong> : <em>string</em><br /><em>get ParkerContext Returns key: 'ParkerContext'</em> |
| public | <strong>getParkerDialString()</strong> : <em>string</em><br /><em>get ParkerDialString Returns:Dial String that can be used to call back the parker on ParkingTimeout.</em> |
| public | <strong>getParkerExten()</strong> : <em>string</em><br /><em>get ParkerExten Returns key: 'ParkerExten'</em> |
| public | <strong>getParkerLanguage()</strong> : <em>string</em><br /><em>get ParkerLanguage Returns key: 'ParkerLanguage'</em> |
| public | <strong>getParkerLinkedid()</strong> : <em>string</em><br /><em>get ParkerLinkedid Returns:Uniqueid of the oldest channel associated with this channel.</em> |
| public | <strong>getParkerPriority()</strong> : <em>string</em><br /><em>get ParkerPriority Returns key: 'ParkerPriority'</em> |
| public | <strong>getParkerUniqueid()</strong> : <em>string</em><br /><em>get ParkerUniqueid Returns key: 'ParkerUniqueid'</em> |
| public | <strong>getParkingDuration()</strong> : <em>string</em><br /><em>get ParkingDuration Returns:Time the parkee has been in the parking bridge (in seconds)</em> |
| public | <strong>getParkingSpace()</strong> : <em>string</em><br /><em>get ParkingSpace Returns:Parking Space that the parkee is parked in</em> |
| public | <strong>getParkingTimeout()</strong> : <em>string</em><br /><em>get ParkingTimeout Returns:Time remaining until the parkee is forcefully removed from parking in seconds</em> |
| public | <strong>getParkinglot()</strong> : <em>string</em><br /><em>get Parkinglot Returns:Name of the parking lot that the parkee is parked in</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\PickupEvent

> Pickup Event Note: Auto Generated using xsltproc PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getAccountCode()</strong> : <em>string</em><br /><em>get AccountCode Returns key: 'AccountCode'</em> |
| public | <strong>getCallerIDName()</strong> : <em>string</em><br /><em>get CallerIDName Returns key: 'CallerIDName'</em> |
| public | <strong>getCallerIDNum()</strong> : <em>string</em><br /><em>get CallerIDNum Returns key: 'CallerIDNum'</em> |
| public | <strong>getChannel()</strong> : <em>string</em><br /><em>get Channel Returns key: 'Channel'</em> |
| public | <strong>getChannelState()</strong> : <em>string</em><br /><em>get ChannelState Returns:A numeric code for the channel's current state, related to ChannelStateDesc</em> |
| public | <strong>getChannelStateDesc()</strong> : <em>string</em><br /><em>get ChannelStateDesc Returns key: 'ChannelStateDesc'</em> |
| public | <strong>getConnectedLineName()</strong> : <em>string</em><br /><em>get ConnectedLineName Returns key: 'ConnectedLineName'</em> |
| public | <strong>getConnectedLineNum()</strong> : <em>string</em><br /><em>get ConnectedLineNum Returns key: 'ConnectedLineNum'</em> |
| public | <strong>getContext()</strong> : <em>string</em><br /><em>get Context Returns key: 'Context'</em> |
| public | <strong>getExten()</strong> : <em>string</em><br /><em>get Exten Returns key: 'Exten'</em> |
| public | <strong>getLanguage()</strong> : <em>string</em><br /><em>get Language Returns key: 'Language'</em> |
| public | <strong>getLinkedid()</strong> : <em>string</em><br /><em>get Linkedid Returns:Uniqueid of the oldest channel associated with this channel.</em> |
| public | <strong>getPriority()</strong> : <em>string</em><br /><em>get Priority Returns key: 'Priority'</em> |
| public | <strong>getTargetAccountCode()</strong> : <em>string</em><br /><em>get TargetAccountCode Returns key: 'TargetAccountCode'</em> |
| public | <strong>getTargetCallerIDName()</strong> : <em>string</em><br /><em>get TargetCallerIDName Returns key: 'TargetCallerIDName'</em> |
| public | <strong>getTargetCallerIDNum()</strong> : <em>string</em><br /><em>get TargetCallerIDNum Returns key: 'TargetCallerIDNum'</em> |
| public | <strong>getTargetChannel()</strong> : <em>string</em><br /><em>get TargetChannel Returns key: 'TargetChannel'</em> |
| public | <strong>getTargetChannelState()</strong> : <em>string</em><br /><em>get TargetChannelState Returns:A numeric code for the channel's current state, related to TargetChannelStateDesc</em> |
| public | <strong>getTargetChannelStateDesc()</strong> : <em>string</em><br /><em>get TargetChannelStateDesc Returns key: 'TargetChannelStateDesc'</em> |
| public | <strong>getTargetConnectedLineName()</strong> : <em>string</em><br /><em>get TargetConnectedLineName Returns key: 'TargetConnectedLineName'</em> |
| public | <strong>getTargetConnectedLineNum()</strong> : <em>string</em><br /><em>get TargetConnectedLineNum Returns key: 'TargetConnectedLineNum'</em> |
| public | <strong>getTargetContext()</strong> : <em>string</em><br /><em>get TargetContext Returns key: 'TargetContext'</em> |
| public | <strong>getTargetExten()</strong> : <em>string</em><br /><em>get TargetExten Returns key: 'TargetExten'</em> |
| public | <strong>getTargetLanguage()</strong> : <em>string</em><br /><em>get TargetLanguage Returns key: 'TargetLanguage'</em> |
| public | <strong>getTargetLinkedid()</strong> : <em>string</em><br /><em>get TargetLinkedid Returns:Uniqueid of the oldest channel associated with this channel.</em> |
| public | <strong>getTargetPriority()</strong> : <em>string</em><br /><em>get TargetPriority Returns key: 'TargetPriority'</em> |
| public | <strong>getTargetUniqueid()</strong> : <em>string</em><br /><em>get TargetUniqueid Returns key: 'TargetUniqueid'</em> |
| public | <strong>getUniqueid()</strong> : <em>string</em><br /><em>get Uniqueid Returns key: 'Uniqueid'</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\PresenceStateChangeEvent

> PresenceStateChange Event isListEntry and Part Action: PresenceStateList Note: Auto Generated using xsltproc PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getMessage()</strong> : <em>string</em><br /><em>get Message Returns:The new message of the presentity</em> |
| public | <strong>getPresentity()</strong> : <em>string</em><br /><em>get Presentity Returns:The entity whose presence state has changed</em> |
| public | <strong>getStatus()</strong> : <em>string</em><br /><em>get Status Returns:The new status of the presentity</em> |
| public | <strong>getSubtype()</strong> : <em>string</em><br /><em>get Subtype Returns:The new subtype of the presentity</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\PresenceStateListCompleteEvent

> PresenceStateListComplete Event Part Of Action: PresenceStateList Note: Auto Generated using xsltproc PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getEventList()</strong> : <em>string</em><br /><em>get EventList Returns:Conveys the status of the event list.</em> |
| public | <strong>getListItems()</strong> : <em>string</em><br /><em>get ListItems Returns:Conveys the number of statuses reported.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\PresenceStatusEvent

> PresenceStatus Event Note: Auto Generated using xsltproc PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getContext()</strong> : <em>string</em><br /><em>get Context Returns key: 'Context'</em> |
| public | <strong>getExten()</strong> : <em>string</em><br /><em>get Exten Returns key: 'Exten'</em> |
| public | <strong>getHint()</strong> : <em>string</em><br /><em>get Hint Returns key: 'Hint'</em> |
| public | <strong>getMessage()</strong> : <em>string</em><br /><em>get Message Returns key: 'Message'</em> |
| public | <strong>getStatus()</strong> : <em>string</em><br /><em>get Status Returns key: 'Status'</em> |
| public | <strong>getSubtype()</strong> : <em>string</em><br /><em>get Subtype Returns key: 'Subtype'</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\QueueMemberPauseEvent

> QueueMemberPause Event Note: Auto Generated using xsltproc PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getCallsTaken()</strong> : <em>string</em><br /><em>get CallsTaken Returns:The number of calls this queue member has serviced.</em> |
| public | <strong>getInCall()</strong> : <em>string</em><br /><em>get InCall Returns:Set to 1 if member is in call. Set to 0 after LastCall time is updated.</em> |
| public | <strong>getInterface()</strong> : <em>string</em><br /><em>get Interface Returns:The queue member's channel technology or location.</em> |
| public | <strong>getLastCall()</strong> : <em>string</em><br /><em>get LastCall Returns:The time this member last took a call, expressed in seconds since 00:00, Jan 1, 1970 UTC.</em> |
| public | <strong>getLastPause()</strong> : <em>string</em><br /><em>get LastPause Returns:The time when started last paused the queue member.</em> |
| public | <strong>getMemberName()</strong> : <em>string</em><br /><em>get MemberName Returns:The name of the queue member.</em> |
| public | <strong>getMembership()</strong> : <em>string</em><br /><em>get Membership Returns key: 'Membership'</em> |
| public | <strong>getPaused()</strong> : <em>string</em><br /><em>get Paused Returns key: 'Paused'</em> |
| public | <strong>getPausedReason()</strong> : <em>string</em><br /><em>get PausedReason Returns:If set when paused, the reason the queue member was paused.</em> |
| public | <strong>getPenalty()</strong> : <em>string</em><br /><em>get Penalty Returns:The penalty associated with the queue member.</em> |
| public | <strong>getQueue()</strong> : <em>string</em><br /><em>get Queue Returns:The name of the queue.</em> |
| public | <strong>getReason()</strong> : <em>string</em><br /><em>get Reason Returns:The reason a member was paused.</em> |
| public | <strong>getRinginuse()</strong> : <em>string</em><br /><em>get Ringinuse Returns key: 'Ringinuse'</em> |
| public | <strong>getStateInterface()</strong> : <em>string</em><br /><em>get StateInterface Returns:Channel technology or location from which to read device state changes.</em> |
| public | <strong>getStatus()</strong> : <em>string</em><br /><em>get Status Returns:The numeric device state status of the queue member.</em> |
| public | <strong>getWrapuptime()</strong> : <em>string</em><br /><em>get Wrapuptime Returns:The Wrapup Time of the queue member. If this value is set will override the wrapup time of queue.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\QueueMemberPenaltyEvent

> QueueMemberPenalty Event Note: Auto Generated using xsltproc PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getCallsTaken()</strong> : <em>string</em><br /><em>get CallsTaken Returns:The number of calls this queue member has serviced.</em> |
| public | <strong>getInCall()</strong> : <em>string</em><br /><em>get InCall Returns:Set to 1 if member is in call. Set to 0 after LastCall time is updated.</em> |
| public | <strong>getInterface()</strong> : <em>string</em><br /><em>get Interface Returns:The queue member's channel technology or location.</em> |
| public | <strong>getLastCall()</strong> : <em>string</em><br /><em>get LastCall Returns:The time this member last took a call, expressed in seconds since 00:00, Jan 1, 1970 UTC.</em> |
| public | <strong>getLastPause()</strong> : <em>string</em><br /><em>get LastPause Returns:The time when started last paused the queue member.</em> |
| public | <strong>getMemberName()</strong> : <em>string</em><br /><em>get MemberName Returns:The name of the queue member.</em> |
| public | <strong>getMembership()</strong> : <em>string</em><br /><em>get Membership Returns key: 'Membership'</em> |
| public | <strong>getPaused()</strong> : <em>string</em><br /><em>get Paused Returns key: 'Paused'</em> |
| public | <strong>getPausedReason()</strong> : <em>string</em><br /><em>get PausedReason Returns:If set when paused, the reason the queue member was paused.</em> |
| public | <strong>getPenalty()</strong> : <em>string</em><br /><em>get Penalty Returns:The penalty associated with the queue member.</em> |
| public | <strong>getQueue()</strong> : <em>string</em><br /><em>get Queue Returns:The name of the queue.</em> |
| public | <strong>getRinginuse()</strong> : <em>string</em><br /><em>get Ringinuse Returns key: 'Ringinuse'</em> |
| public | <strong>getStateInterface()</strong> : <em>string</em><br /><em>get StateInterface Returns:Channel technology or location from which to read device state changes.</em> |
| public | <strong>getStatus()</strong> : <em>string</em><br /><em>get Status Returns:The numeric device state status of the queue member.</em> |
| public | <strong>getWrapuptime()</strong> : <em>string</em><br /><em>get Wrapuptime Returns:The Wrapup Time of the queue member. If this value is set will override the wrapup time of queue.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\QueueMemberRinginuseEvent

> QueueMemberRinginuse Event Note: Auto Generated using xsltproc PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getCallsTaken()</strong> : <em>string</em><br /><em>get CallsTaken Returns:The number of calls this queue member has serviced.</em> |
| public | <strong>getInCall()</strong> : <em>string</em><br /><em>get InCall Returns:Set to 1 if member is in call. Set to 0 after LastCall time is updated.</em> |
| public | <strong>getInterface()</strong> : <em>string</em><br /><em>get Interface Returns:The queue member's channel technology or location.</em> |
| public | <strong>getLastCall()</strong> : <em>string</em><br /><em>get LastCall Returns:The time this member last took a call, expressed in seconds since 00:00, Jan 1, 1970 UTC.</em> |
| public | <strong>getLastPause()</strong> : <em>string</em><br /><em>get LastPause Returns:The time when started last paused the queue member.</em> |
| public | <strong>getMemberName()</strong> : <em>string</em><br /><em>get MemberName Returns:The name of the queue member.</em> |
| public | <strong>getMembership()</strong> : <em>string</em><br /><em>get Membership Returns key: 'Membership'</em> |
| public | <strong>getPaused()</strong> : <em>string</em><br /><em>get Paused Returns key: 'Paused'</em> |
| public | <strong>getPausedReason()</strong> : <em>string</em><br /><em>get PausedReason Returns:If set when paused, the reason the queue member was paused.</em> |
| public | <strong>getPenalty()</strong> : <em>string</em><br /><em>get Penalty Returns:The penalty associated with the queue member.</em> |
| public | <strong>getQueue()</strong> : <em>string</em><br /><em>get Queue Returns:The name of the queue.</em> |
| public | <strong>getRinginuse()</strong> : <em>string</em><br /><em>get Ringinuse Returns key: 'Ringinuse'</em> |
| public | <strong>getStateInterface()</strong> : <em>string</em><br /><em>get StateInterface Returns:Channel technology or location from which to read device state changes.</em> |
| public | <strong>getStatus()</strong> : <em>string</em><br /><em>get Status Returns:The numeric device state status of the queue member.</em> |
| public | <strong>getWrapuptime()</strong> : <em>string</em><br /><em>get Wrapuptime Returns:The Wrapup Time of the queue member. If this value is set will override the wrapup time of queue.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\ReceiveFAXEvent

> ReceiveFAX Event Note: Auto Generated using xsltproc PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getAccountCode()</strong> : <em>string</em><br /><em>get AccountCode Returns key: 'AccountCode'</em> |
| public | <strong>getCallerIDName()</strong> : <em>string</em><br /><em>get CallerIDName Returns key: 'CallerIDName'</em> |
| public | <strong>getCallerIDNum()</strong> : <em>string</em><br /><em>get CallerIDNum Returns key: 'CallerIDNum'</em> |
| public | <strong>getChannel()</strong> : <em>string</em><br /><em>get Channel Returns key: 'Channel'</em> |
| public | <strong>getChannelState()</strong> : <em>string</em><br /><em>get ChannelState Returns:A numeric code for the channel's current state, related to ChannelStateDesc</em> |
| public | <strong>getChannelStateDesc()</strong> : <em>string</em><br /><em>get ChannelStateDesc Returns key: 'ChannelStateDesc'</em> |
| public | <strong>getConnectedLineName()</strong> : <em>string</em><br /><em>get ConnectedLineName Returns key: 'ConnectedLineName'</em> |
| public | <strong>getConnectedLineNum()</strong> : <em>string</em><br /><em>get ConnectedLineNum Returns key: 'ConnectedLineNum'</em> |
| public | <strong>getContext()</strong> : <em>string</em><br /><em>get Context Returns key: 'Context'</em> |
| public | <strong>getExten()</strong> : <em>string</em><br /><em>get Exten Returns key: 'Exten'</em> |
| public | <strong>getFileName()</strong> : <em>string</em><br /><em>get FileName Returns:The files being affected by the fax operation</em> |
| public | <strong>getLanguage()</strong> : <em>string</em><br /><em>get Language Returns key: 'Language'</em> |
| public | <strong>getLinkedid()</strong> : <em>string</em><br /><em>get Linkedid Returns:Uniqueid of the oldest channel associated with this channel.</em> |
| public | <strong>getLocalStationID()</strong> : <em>string</em><br /><em>get LocalStationID Returns:The value of the LOCALSTATIONID channel variable</em> |
| public | <strong>getPagesTransferred()</strong> : <em>string</em><br /><em>get PagesTransferred Returns:The number of pages that have been transferred</em> |
| public | <strong>getPriority()</strong> : <em>string</em><br /><em>get Priority Returns key: 'Priority'</em> |
| public | <strong>getRemoteStationID()</strong> : <em>string</em><br /><em>get RemoteStationID Returns:The value of the REMOTESTATIONID channel variable</em> |
| public | <strong>getResolution()</strong> : <em>string</em><br /><em>get Resolution Returns:The negotiated resolution</em> |
| public | <strong>getTransferRate()</strong> : <em>string</em><br /><em>get TransferRate Returns:The negotiated transfer rate</em> |
| public | <strong>getUniqueid()</strong> : <em>string</em><br /><em>get Uniqueid Returns key: 'Uniqueid'</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\RequestNotAllowedEvent

> RequestNotAllowed Event Note: Auto Generated using xsltproc PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getAccountID()</strong> : <em>string</em><br /><em>get AccountID Returns:The Service account associated with the security event notification.</em> |
| public | <strong>getEventTV()</strong> : <em>string</em><br /><em>get EventTV Returns:The time the event was detected.</em> |
| public | <strong>getEventVersion()</strong> : <em>string</em><br /><em>get EventVersion Returns:The version of this event.</em> |
| public | <strong>getLocalAddress()</strong> : <em>string</em><br /><em>get LocalAddress Returns:The address of the Asterisk service that raised the security event.</em> |
| public | <strong>getModule()</strong> : <em>string</em><br /><em>get Module Returns:If available, the name of the module that raised the event.</em> |
| public | <strong>getRemoteAddress()</strong> : <em>string</em><br /><em>get RemoteAddress Returns:The remote address of the entity that caused the security event to be raised.</em> |
| public | <strong>getRequestParams()</strong> : <em>string</em><br /><em>get RequestParams Returns:Parameters provided to the rejected request.</em> |
| public | <strong>getRequestType()</strong> : <em>string</em><br /><em>get RequestType Returns:The type of request attempted.</em> |
| public | <strong>getService()</strong> : <em>string</em><br /><em>get Service Returns:The Asterisk service that raised the security event.</em> |
| public | <strong>getSessionID()</strong> : <em>string</em><br /><em>get SessionID Returns:A unique identifier for the session in the service that raised the event.</em> |
| public | <strong>getSessionTV()</strong> : <em>string</em><br /><em>get SessionTV Returns:The timestamp reported by the session.</em> |
| public | <strong>getSeverity()</strong> : <em>string</em><br /><em>get Severity Returns:A relative severity of the security event.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\RequestNotSupportedEvent

> RequestNotSupported Event Note: Auto Generated using xsltproc PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getAccountID()</strong> : <em>string</em><br /><em>get AccountID Returns:The Service account associated with the security event notification.</em> |
| public | <strong>getEventTV()</strong> : <em>string</em><br /><em>get EventTV Returns:The time the event was detected.</em> |
| public | <strong>getEventVersion()</strong> : <em>string</em><br /><em>get EventVersion Returns:The version of this event.</em> |
| public | <strong>getLocalAddress()</strong> : <em>string</em><br /><em>get LocalAddress Returns:The address of the Asterisk service that raised the security event.</em> |
| public | <strong>getModule()</strong> : <em>string</em><br /><em>get Module Returns:If available, the name of the module that raised the event.</em> |
| public | <strong>getRemoteAddress()</strong> : <em>string</em><br /><em>get RemoteAddress Returns:The remote address of the entity that caused the security event to be raised.</em> |
| public | <strong>getRequestType()</strong> : <em>string</em><br /><em>get RequestType Returns:The type of request attempted.</em> |
| public | <strong>getService()</strong> : <em>string</em><br /><em>get Service Returns:The Asterisk service that raised the security event.</em> |
| public | <strong>getSessionID()</strong> : <em>string</em><br /><em>get SessionID Returns:A unique identifier for the session in the service that raised the event.</em> |
| public | <strong>getSessionTV()</strong> : <em>string</em><br /><em>get SessionTV Returns:The timestamp reported by the session.</em> |
| public | <strong>getSeverity()</strong> : <em>string</em><br /><em>get Severity Returns:A relative severity of the security event.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\SendFAXEvent

> SendFAX Event Note: Auto Generated using xsltproc PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getAccountCode()</strong> : <em>string</em><br /><em>get AccountCode Returns key: 'AccountCode'</em> |
| public | <strong>getCallerIDName()</strong> : <em>string</em><br /><em>get CallerIDName Returns key: 'CallerIDName'</em> |
| public | <strong>getCallerIDNum()</strong> : <em>string</em><br /><em>get CallerIDNum Returns key: 'CallerIDNum'</em> |
| public | <strong>getChannel()</strong> : <em>string</em><br /><em>get Channel Returns key: 'Channel'</em> |
| public | <strong>getChannelState()</strong> : <em>string</em><br /><em>get ChannelState Returns:A numeric code for the channel's current state, related to ChannelStateDesc</em> |
| public | <strong>getChannelStateDesc()</strong> : <em>string</em><br /><em>get ChannelStateDesc Returns key: 'ChannelStateDesc'</em> |
| public | <strong>getConnectedLineName()</strong> : <em>string</em><br /><em>get ConnectedLineName Returns key: 'ConnectedLineName'</em> |
| public | <strong>getConnectedLineNum()</strong> : <em>string</em><br /><em>get ConnectedLineNum Returns key: 'ConnectedLineNum'</em> |
| public | <strong>getContext()</strong> : <em>string</em><br /><em>get Context Returns key: 'Context'</em> |
| public | <strong>getExten()</strong> : <em>string</em><br /><em>get Exten Returns key: 'Exten'</em> |
| public | <strong>getFileName()</strong> : <em>string</em><br /><em>get FileName Returns:The files being affected by the fax operation</em> |
| public | <strong>getLanguage()</strong> : <em>string</em><br /><em>get Language Returns key: 'Language'</em> |
| public | <strong>getLinkedid()</strong> : <em>string</em><br /><em>get Linkedid Returns:Uniqueid of the oldest channel associated with this channel.</em> |
| public | <strong>getLocalStationID()</strong> : <em>string</em><br /><em>get LocalStationID Returns:The value of the LOCALSTATIONID channel variable</em> |
| public | <strong>getPagesTransferred()</strong> : <em>string</em><br /><em>get PagesTransferred Returns:The number of pages that have been transferred</em> |
| public | <strong>getPriority()</strong> : <em>string</em><br /><em>get Priority Returns key: 'Priority'</em> |
| public | <strong>getRemoteStationID()</strong> : <em>string</em><br /><em>get RemoteStationID Returns:The value of the REMOTESTATIONID channel variable</em> |
| public | <strong>getResolution()</strong> : <em>string</em><br /><em>get Resolution Returns:The negotiated resolution</em> |
| public | <strong>getTransferRate()</strong> : <em>string</em><br /><em>get TransferRate Returns:The negotiated transfer rate</em> |
| public | <strong>getUniqueid()</strong> : <em>string</em><br /><em>get Uniqueid Returns key: 'Uniqueid'</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\SessionLimitEvent

> SessionLimit Event Note: Auto Generated using xsltproc PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getAccountID()</strong> : <em>string</em><br /><em>get AccountID Returns:The Service account associated with the security event notification.</em> |
| public | <strong>getEventTV()</strong> : <em>string</em><br /><em>get EventTV Returns:The time the event was detected.</em> |
| public | <strong>getEventVersion()</strong> : <em>string</em><br /><em>get EventVersion Returns:The version of this event.</em> |
| public | <strong>getLocalAddress()</strong> : <em>string</em><br /><em>get LocalAddress Returns:The address of the Asterisk service that raised the security event.</em> |
| public | <strong>getModule()</strong> : <em>string</em><br /><em>get Module Returns:If available, the name of the module that raised the event.</em> |
| public | <strong>getRemoteAddress()</strong> : <em>string</em><br /><em>get RemoteAddress Returns:The remote address of the entity that caused the security event to be raised.</em> |
| public | <strong>getService()</strong> : <em>string</em><br /><em>get Service Returns:The Asterisk service that raised the security event.</em> |
| public | <strong>getSessionID()</strong> : <em>string</em><br /><em>get SessionID Returns:A unique identifier for the session in the service that raised the event.</em> |
| public | <strong>getSessionTV()</strong> : <em>string</em><br /><em>get SessionTV Returns:The timestamp reported by the session.</em> |
| public | <strong>getSeverity()</strong> : <em>string</em><br /><em>get Severity Returns:A relative severity of the security event.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\SessionTimeoutEvent

> SessionTimeout Event Note: Auto Generated using xsltproc PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getAccountCode()</strong> : <em>string</em><br /><em>get AccountCode Returns key: 'AccountCode'</em> |
| public | <strong>getCallerIDName()</strong> : <em>string</em><br /><em>get CallerIDName Returns key: 'CallerIDName'</em> |
| public | <strong>getCallerIDNum()</strong> : <em>string</em><br /><em>get CallerIDNum Returns key: 'CallerIDNum'</em> |
| public | <strong>getChannel()</strong> : <em>string</em><br /><em>get Channel Returns key: 'Channel'</em> |
| public | <strong>getChannelState()</strong> : <em>string</em><br /><em>get ChannelState Returns:A numeric code for the channel's current state, related to ChannelStateDesc</em> |
| public | <strong>getChannelStateDesc()</strong> : <em>string</em><br /><em>get ChannelStateDesc Returns key: 'ChannelStateDesc'</em> |
| public | <strong>getConnectedLineName()</strong> : <em>string</em><br /><em>get ConnectedLineName Returns key: 'ConnectedLineName'</em> |
| public | <strong>getConnectedLineNum()</strong> : <em>string</em><br /><em>get ConnectedLineNum Returns key: 'ConnectedLineNum'</em> |
| public | <strong>getContext()</strong> : <em>string</em><br /><em>get Context Returns key: 'Context'</em> |
| public | <strong>getExten()</strong> : <em>string</em><br /><em>get Exten Returns key: 'Exten'</em> |
| public | <strong>getLanguage()</strong> : <em>string</em><br /><em>get Language Returns key: 'Language'</em> |
| public | <strong>getLinkedid()</strong> : <em>string</em><br /><em>get Linkedid Returns:Uniqueid of the oldest channel associated with this channel.</em> |
| public | <strong>getPriority()</strong> : <em>string</em><br /><em>get Priority Returns key: 'Priority'</em> |
| public | <strong>getSource()</strong> : <em>string</em><br /><em>get Source Returns:The source of the session timeout.</em> |
| public | <strong>getUniqueid()</strong> : <em>string</em><br /><em>get Uniqueid Returns key: 'Uniqueid'</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\ShutdownEvent

> Shutdown Event Note: Auto Generated using xsltproc PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getRestart()</strong> : <em>string</em><br /><em>get Restart Returns:Whether or not a restart will occur.</em> |
| public | <strong>getShutdown()</strong> : <em>string</em><br /><em>get Shutdown Returns:Whether the shutdown is proceeding cleanly (all channels were hungup successfully) or uncleanly (channels will be terminated)</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\SIPQualifyPeerDoneEvent

> SIPQualifyPeerDone Event Note: Auto Generated using xsltproc PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getPeer()</strong> : <em>string</em><br /><em>get Peer Returns:The name of the peer.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\SoftHangupRequestEvent

> SoftHangupRequest Event Note: Auto Generated using xsltproc PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getAccountCode()</strong> : <em>string</em><br /><em>get AccountCode Returns key: 'AccountCode'</em> |
| public | <strong>getCallerIDName()</strong> : <em>string</em><br /><em>get CallerIDName Returns key: 'CallerIDName'</em> |
| public | <strong>getCallerIDNum()</strong> : <em>string</em><br /><em>get CallerIDNum Returns key: 'CallerIDNum'</em> |
| public | <strong>getCause()</strong> : <em>string</em><br /><em>get Cause Returns:A numeric cause code for why the channel was hung up.</em> |
| public | <strong>getChannel()</strong> : <em>string</em><br /><em>get Channel Returns key: 'Channel'</em> |
| public | <strong>getChannelState()</strong> : <em>string</em><br /><em>get ChannelState Returns:A numeric code for the channel's current state, related to ChannelStateDesc</em> |
| public | <strong>getChannelStateDesc()</strong> : <em>string</em><br /><em>get ChannelStateDesc Returns key: 'ChannelStateDesc'</em> |
| public | <strong>getConnectedLineName()</strong> : <em>string</em><br /><em>get ConnectedLineName Returns key: 'ConnectedLineName'</em> |
| public | <strong>getConnectedLineNum()</strong> : <em>string</em><br /><em>get ConnectedLineNum Returns key: 'ConnectedLineNum'</em> |
| public | <strong>getContext()</strong> : <em>string</em><br /><em>get Context Returns key: 'Context'</em> |
| public | <strong>getExten()</strong> : <em>string</em><br /><em>get Exten Returns key: 'Exten'</em> |
| public | <strong>getLanguage()</strong> : <em>string</em><br /><em>get Language Returns key: 'Language'</em> |
| public | <strong>getLinkedid()</strong> : <em>string</em><br /><em>get Linkedid Returns:Uniqueid of the oldest channel associated with this channel.</em> |
| public | <strong>getPriority()</strong> : <em>string</em><br /><em>get Priority Returns key: 'Priority'</em> |
| public | <strong>getUniqueid()</strong> : <em>string</em><br /><em>get Uniqueid Returns key: 'Uniqueid'</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\SpanAlarmClearEvent

> SpanAlarmClear Event Note: Auto Generated using xsltproc PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getSpan()</strong> : <em>string</em><br /><em>get Span Returns:The span on which the alarm was cleared.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\SpanAlarmEvent

> SpanAlarm Event Note: Auto Generated using xsltproc PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getAlarm()</strong> : <em>string</em><br /><em>get Alarm Returns:A textual description of the alarm that occurred.</em> |
| public | <strong>getSpan()</strong> : <em>string</em><br /><em>get Span Returns:The span on which the alarm occurred.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\UnexpectedAddressEvent

> UnexpectedAddress Event Note: Auto Generated using xsltproc PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getAccountID()</strong> : <em>string</em><br /><em>get AccountID Returns:The Service account associated with the security event notification.</em> |
| public | <strong>getEventTV()</strong> : <em>string</em><br /><em>get EventTV Returns:The time the event was detected.</em> |
| public | <strong>getEventVersion()</strong> : <em>string</em><br /><em>get EventVersion Returns:The version of this event.</em> |
| public | <strong>getExpectedAddress()</strong> : <em>string</em><br /><em>get ExpectedAddress Returns:The address that the request was expected to use.</em> |
| public | <strong>getLocalAddress()</strong> : <em>string</em><br /><em>get LocalAddress Returns:The address of the Asterisk service that raised the security event.</em> |
| public | <strong>getModule()</strong> : <em>string</em><br /><em>get Module Returns:If available, the name of the module that raised the event.</em> |
| public | <strong>getRemoteAddress()</strong> : <em>string</em><br /><em>get RemoteAddress Returns:The remote address of the entity that caused the security event to be raised.</em> |
| public | <strong>getService()</strong> : <em>string</em><br /><em>get Service Returns:The Asterisk service that raised the security event.</em> |
| public | <strong>getSessionID()</strong> : <em>string</em><br /><em>get SessionID Returns:A unique identifier for the session in the service that raised the event.</em> |
| public | <strong>getSessionTV()</strong> : <em>string</em><br /><em>get SessionTV Returns:The timestamp reported by the session.</em> |
| public | <strong>getSeverity()</strong> : <em>string</em><br /><em>get Severity Returns:A relative severity of the security event.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\UnholdEvent

> Unhold Event Note: Auto Generated using xsltproc PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getAccountCode()</strong> : <em>string</em><br /><em>get AccountCode Returns key: 'AccountCode'</em> |
| public | <strong>getCallerIDName()</strong> : <em>string</em><br /><em>get CallerIDName Returns key: 'CallerIDName'</em> |
| public | <strong>getCallerIDNum()</strong> : <em>string</em><br /><em>get CallerIDNum Returns key: 'CallerIDNum'</em> |
| public | <strong>getChannel()</strong> : <em>string</em><br /><em>get Channel Returns key: 'Channel'</em> |
| public | <strong>getChannelState()</strong> : <em>string</em><br /><em>get ChannelState Returns:A numeric code for the channel's current state, related to ChannelStateDesc</em> |
| public | <strong>getChannelStateDesc()</strong> : <em>string</em><br /><em>get ChannelStateDesc Returns key: 'ChannelStateDesc'</em> |
| public | <strong>getConnectedLineName()</strong> : <em>string</em><br /><em>get ConnectedLineName Returns key: 'ConnectedLineName'</em> |
| public | <strong>getConnectedLineNum()</strong> : <em>string</em><br /><em>get ConnectedLineNum Returns key: 'ConnectedLineNum'</em> |
| public | <strong>getContext()</strong> : <em>string</em><br /><em>get Context Returns key: 'Context'</em> |
| public | <strong>getExten()</strong> : <em>string</em><br /><em>get Exten Returns key: 'Exten'</em> |
| public | <strong>getLanguage()</strong> : <em>string</em><br /><em>get Language Returns key: 'Language'</em> |
| public | <strong>getLinkedid()</strong> : <em>string</em><br /><em>get Linkedid Returns:Uniqueid of the oldest channel associated with this channel.</em> |
| public | <strong>getPriority()</strong> : <em>string</em><br /><em>get Priority Returns key: 'Priority'</em> |
| public | <strong>getUniqueid()</strong> : <em>string</em><br /><em>get Uniqueid Returns key: 'Uniqueid'</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\UnloadEvent

> Unload Event Note: Auto Generated using xsltproc PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getModule()</strong> : <em>string</em><br /><em>get Module Returns:The name of the module that was unloaded</em> |
| public | <strong>getStatus()</strong> : <em>string</em><br /><em>get Status Returns:The result of the unload request.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\AgentLoginEvent

> AgentLogin Event Note: Auto Generated using xsltproc PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getAccountCode()</strong> : <em>string</em><br /><em>get AccountCode Returns key: 'AccountCode'</em> |
| public | <strong>getAgent()</strong> : <em>string</em><br /><em>get Agent Returns:Agent ID of the agent.</em> |
| public | <strong>getCallerIDName()</strong> : <em>string</em><br /><em>get CallerIDName Returns key: 'CallerIDName'</em> |
| public | <strong>getCallerIDNum()</strong> : <em>string</em><br /><em>get CallerIDNum Returns key: 'CallerIDNum'</em> |
| public | <strong>getChannel()</strong> : <em>string</em><br /><em>get Channel Returns key: 'Channel'</em> |
| public | <strong>getChannelState()</strong> : <em>string</em><br /><em>get ChannelState Returns:A numeric code for the channel's current state, related to ChannelStateDesc</em> |
| public | <strong>getChannelStateDesc()</strong> : <em>string</em><br /><em>get ChannelStateDesc Returns key: 'ChannelStateDesc'</em> |
| public | <strong>getConnectedLineName()</strong> : <em>string</em><br /><em>get ConnectedLineName Returns key: 'ConnectedLineName'</em> |
| public | <strong>getConnectedLineNum()</strong> : <em>string</em><br /><em>get ConnectedLineNum Returns key: 'ConnectedLineNum'</em> |
| public | <strong>getContext()</strong> : <em>string</em><br /><em>get Context Returns key: 'Context'</em> |
| public | <strong>getExten()</strong> : <em>string</em><br /><em>get Exten Returns key: 'Exten'</em> |
| public | <strong>getLanguage()</strong> : <em>string</em><br /><em>get Language Returns key: 'Language'</em> |
| public | <strong>getLinkedid()</strong> : <em>string</em><br /><em>get Linkedid Returns:Uniqueid of the oldest channel associated with this channel.</em> |
| public | <strong>getPriority()</strong> : <em>string</em><br /><em>get Priority Returns key: 'Priority'</em> |
| public | <strong>getPrivilege()</strong> : <em>string</em><br /><em>get Agent Privilege</em> |
| public | <strong>getUniqueid()</strong> : <em>string</em><br /><em>get Uniqueid Returns key: 'Uniqueid'</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\AgentLogoffEvent

> AgentLogoff Event Note: Auto Generated using xsltproc PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getAgent()</strong> : <em>string</em><br /><em>get Agent Returns:Agent ID of the agent.</em> |
| public | <strong>getLogintime()</strong> : <em>string</em><br /><em>get Logintime Returns:The number of seconds the agent was logged in.</em> |
| public | <strong>getPrivilege()</strong> : <em>string</em><br /><em>get Agent Privilege</em> |
| public | <strong>getUniqueid()</strong> : <em>string</em><br /><em>get Uniqueid Returns key: 'Uniqueid'</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\AGIExecEndEvent

> Event triggered when a received AGI command completes processing. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getAccountCode()</strong> : <em>string</em><br /><em>Returns key: 'AccountCode'.</em> |
| public | <strong>getCallerIDName()</strong> : <em>string</em><br /><em>Returns key: 'CallerIDName'.</em> |
| public | <strong>getCallerIDNum()</strong> : <em>string</em><br /><em>Returns key: 'CallerIDNum'.</em> |
| public | <strong>getChannel()</strong> : <em>string</em><br /><em>Returns key: 'Channel'.</em> |
| public | <strong>getChannelState()</strong> : <em>string</em><br /><em>Returns key: 'ChannelState'.</em> |
| public | <strong>getChannelStateDesc()</strong> : <em>string</em><br /><em>Returns key: 'ChannelStateDesc'.</em> |
| public | <strong>getCommand()</strong> : <em>string</em><br /><em>Returns key: 'Command'.</em> |
| public | <strong>getCommandId()</strong> : <em>string</em><br /><em>Returns key: 'CommandId'.</em> |
| public | <strong>getConnectedLineName()</strong> : <em>string</em><br /><em>Returns key: 'ConnectedLineName'.</em> |
| public | <strong>getConnectedLineNum()</strong> : <em>string</em><br /><em>Returns key: 'ConnectedLineNum'.</em> |
| public | <strong>getContext()</strong> : <em>string</em><br /><em>Returns key: 'Context'.</em> |
| public | <strong>getExten()</strong> : <em>string</em><br /><em>Returns key: 'Exten'.</em> |
| public | <strong>getPriority()</strong> : <em>string</em><br /><em>Returns key: 'Priority'.</em> |
| public | <strong>getPrivilege()</strong> : <em>string</em><br /><em>Returns key: 'Privilege'.</em> |
| public | <strong>getResult()</strong> : <em>string</em><br /><em>Returns key: 'Result'.</em> |
| public | <strong>getResultCode()</strong> : <em>string</em><br /><em>Returns key: 'ResultCode'.</em> |
| public | <strong>getUniqueid()</strong> : <em>string</em><br /><em>Returns key: 'Uniqueid'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\AGIExecStartEvent

> Event triggered when a received AGI command starts processing. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getAccountCode()</strong> : <em>string</em><br /><em>Returns key: 'AccountCode'.</em> |
| public | <strong>getCallerIDName()</strong> : <em>string</em><br /><em>Returns key: 'CallerIDName'.</em> |
| public | <strong>getCallerIDNum()</strong> : <em>string</em><br /><em>Returns key: 'CallerIDNum'.</em> |
| public | <strong>getChannel()</strong> : <em>string</em><br /><em>Returns key: 'Channel'.</em> |
| public | <strong>getChannelState()</strong> : <em>string</em><br /><em>Returns key: 'ChannelState'.</em> |
| public | <strong>getChannelStateDesc()</strong> : <em>string</em><br /><em>Returns key: 'ChannelStateDesc'.</em> |
| public | <strong>getCommand()</strong> : <em>string</em><br /><em>Returns key: 'Command'.</em> |
| public | <strong>getCommandId()</strong> : <em>string</em><br /><em>Returns key: 'CommandId'.</em> |
| public | <strong>getConnectedLineName()</strong> : <em>string</em><br /><em>Returns key: 'ConnectedLineName'.</em> |
| public | <strong>getConnectedLineNum()</strong> : <em>string</em><br /><em>Returns key: 'ConnectedLineNum'.</em> |
| public | <strong>getContext()</strong> : <em>string</em><br /><em>Returns key: 'Context'.</em> |
| public | <strong>getExten()</strong> : <em>string</em><br /><em>Returns key: 'Exten'.</em> |
| public | <strong>getPriority()</strong> : <em>string</em><br /><em>Returns key: 'Priority'.</em> |
| public | <strong>getPrivilege()</strong> : <em>string</em><br /><em>Returns key: 'Privilege'.</em> |
| public | <strong>getUniqueid()</strong> : <em>string</em><br /><em>Returns key: 'Uniqueid'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\AgentConnectEvent

> Event triggered when an agent connects. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getBridgedChannel()</strong> : <em>string</em><br /><em>Returns key: 'BridgedChannel'.</em> |
| public | <strong>getChannel()</strong> : <em>string</em><br /><em>Returns key: 'Channel'.</em> |
| public | <strong>getHoldTime()</strong> : <em>string</em><br /><em>Returns key: 'HoldTime'.</em> |
| public | <strong>getMember()</strong> : <em>string</em><br /><em>Returns key: 'Member'.</em> |
| public | <strong>getMemberName()</strong> : <em>string</em><br /><em>Returns key: 'MemberName'.</em> |
| public | <strong>getPrivilege()</strong> : <em>string</em><br /><em>Returns key: 'Privilege'.</em> |
| public | <strong>getQueue()</strong> : <em>string</em><br /><em>Returns key: 'Queue'.</em> |
| public | <strong>getRingTime()</strong> : <em>string</em><br /><em>Returns key: 'RingTime'.</em> |
| public | <strong>getUniqueID()</strong> : <em>string</em><br /><em>Returns key: 'UniqueID'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\AgentsCompleteEvent

> Event triggered for the end of the list when an action Agents is issued. PHP Version 5

| Visibility | Function |
|:-----------|:---------|

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\AgentsEvent

> Event triggered for agents. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getAgent()</strong> : <em>string</em><br /><em>Returns key: 'Agent'.</em> |
| public | <strong>getChannel()</strong> : <em>string</em><br /><em>Returns key: 'LoggedInChan'.</em> |
| public | <strong>getLoggedInTime()</strong> : <em>integer</em><br /><em>Returns key: 'LoggedInTime'.</em> |
| public | <strong>getName()</strong> : <em>string</em><br /><em>Returns key: 'Name'.</em> |
| public | <strong>getStatus()</strong> : <em>string</em><br /><em>Returns key: 'Status'.</em> |
| public | <strong>getTalkingTo()</strong> : <em>integer</em><br /><em>Returns key: 'TalkingTo'.</em> |
| public | <strong>getTalkingToChannel()</strong> : <em>integer</em><br /><em>Returns key: 'TalkingToChannel'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\AorDetailEvent

> Event from PJSIPShowEndpoint PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getAuthenticateQualify()</strong> : <em>string</em><br /><em>Returns key: 'AuthenticateQualify'. Authenticates a qualify request if needed</em> |
| public | <strong>getContact()</strong> : <em>string</em><br /><em>Returns key: 'Contact'.</em> |
| public | <strong>getContacts()</strong> : <em>string</em><br /><em>Returns key: 'Contacts'.</em> |
| public | <strong>getContactsRegistered()</strong> : <em>string</em><br /><em>Returns key: 'ContactsRegistered'. The number of non-permanent contacts associated with this AoR.</em> |
| public | <strong>getDefaultExpiration()</strong> : <em>string</em><br /><em>Returns key: 'DefaultExpiration'. Default expiration time in seconds for contacts that are dynamicallybound to an AoR.</em> |
| public | <strong>getEndpointName()</strong> : <em>string</em><br /><em>Returns key: 'EndpointName'. The name of the endpoint associated with this information.</em> |
| public | <strong>getMailboxes()</strong> : <em>string</em><br /><em>Returns key: 'Mailboxes'. Allow subscriptions for the specified mailbox(es)</em> |
| public | <strong>getMaxContacts()</strong> : <em>string</em><br /><em>Returns key: 'MaxContacts'. Maximum number of contacts that can bind to an AoR</em> |
| public | <strong>getMaximumExpiration()</strong> : <em>string</em><br /><em>Returns key: 'MaximumExpiration'. Maximum time to keep an AoR</em> |
| public | <strong>getMinimumExpiration()</strong> : <em>string</em><br /><em>Returns key: 'MinimumExpiration'. Minimum keep alive time for an AoR</em> |
| public | <strong>getObjectName()</strong> : <em>string</em><br /><em>Returns key: 'ObjectName'. The name of this object.</em> |
| public | <strong>getObjectType()</strong> : <em>string</em><br /><em>Returns key: 'ObjectType'. The object's type. This will always be 'aor'.</em> |
| public | <strong>getOutboundProxy()</strong> : <em>string</em><br /><em>Returns key: 'OutboundProxy'. Outbound proxy used when sending OPTIONS request</em> |
| public | <strong>getQualifyFrequency()</strong> : <em>string</em><br /><em>Returns key: 'QualifyFrequency'. Interval at which to qualify an AoR</em> |
| public | <strong>getRemoveExisting()</strong> : <em>string</em><br /><em>Returns key: 'RemoveExisting'. Determines whether new contacts replace existing ones.</em> |
| public | <strong>getSupportPath()</strong> : <em>string</em><br /><em>Returns key: 'SupportPath'. Enables Path support for REGISTER requests and Route support forother requests.</em> |
| public | <strong>getTotalContacts()</strong> : <em>string</em><br /><em>Returns key: 'TotalContacts'. The total number of contacts associated with this AoR.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\AsyncAGIEndEvent

> Event triggered when a channel stops AsyncAGI command processing. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getAccountCode()</strong> : <em>string</em><br /><em>Returns key: 'AccountCode'.</em> |
| public | <strong>getCallerIDName()</strong> : <em>string</em><br /><em>Returns key: 'CallerIDName'.</em> |
| public | <strong>getCallerIDNum()</strong> : <em>string</em><br /><em>Returns key: 'CallerIDNum'.</em> |
| public | <strong>getChannel()</strong> : <em>string</em><br /><em>Returns key: 'Channel'.</em> |
| public | <strong>getChannelState()</strong> : <em>string</em><br /><em>Returns key: 'ChannelState'.</em> |
| public | <strong>getChannelStateDesc()</strong> : <em>string</em><br /><em>Returns key: 'ChannelStateDesc'.</em> |
| public | <strong>getConnectedLineName()</strong> : <em>string</em><br /><em>Returns key: 'ConnectedLineName'.</em> |
| public | <strong>getConnectedLineNum()</strong> : <em>string</em><br /><em>Returns key: 'ConnectedLineNum'.</em> |
| public | <strong>getContext()</strong> : <em>string</em><br /><em>Returns key: 'Context'.</em> |
| public | <strong>getExten()</strong> : <em>string</em><br /><em>Returns key: 'Exten'.</em> |
| public | <strong>getPriority()</strong> : <em>string</em><br /><em>Returns key: 'Priority'.</em> |
| public | <strong>getPrivilege()</strong> : <em>string</em><br /><em>Returns key: 'Privilege'.</em> |
| public | <strong>getUniqueid()</strong> : <em>string</em><br /><em>Returns key: 'Uniqueid'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\AsyncAGIExecEvent

> Event triggered when AsyncAGI completes an AGI command. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>string</em> <strong>$rawContent</strong>)</strong> : <em>void</em><br /><em>Constructor.</em> |
| public | <strong>getAccountCode()</strong> : <em>string</em><br /><em>Returns key: 'AccountCode'.</em> |
| public | <strong>getCallerIDName()</strong> : <em>string</em><br /><em>Returns key: 'CallerIDName'.</em> |
| public | <strong>getCallerIDNum()</strong> : <em>string</em><br /><em>Returns key: 'CallerIDNum'.</em> |
| public | <strong>getChannel()</strong> : <em>string</em><br /><em>Returns key: 'Channel'.</em> |
| public | <strong>getChannelState()</strong> : <em>string</em><br /><em>Returns key: 'ChannelState'.</em> |
| public | <strong>getChannelStateDesc()</strong> : <em>string</em><br /><em>Returns key: 'ChannelStateDesc'.</em> |
| public | <strong>getCommandID()</strong> : <em>string</em><br /><em>Returns key: 'CommandID'.</em> |
| public | <strong>getConnectedLineName()</strong> : <em>string</em><br /><em>Returns key: 'ConnectedLineName'.</em> |
| public | <strong>getConnectedLineNum()</strong> : <em>string</em><br /><em>Returns key: 'ConnectedLineNum'.</em> |
| public | <strong>getContext()</strong> : <em>string</em><br /><em>Returns key: 'Context'.</em> |
| public | <strong>getExten()</strong> : <em>string</em><br /><em>Returns key: 'Exten'.</em> |
| public | <strong>getPriority()</strong> : <em>string</em><br /><em>Returns key: 'Priority'.</em> |
| public | <strong>getPrivilege()</strong> : <em>string</em><br /><em>Returns key: 'Privilege'.</em> |
| public | <strong>getResult()</strong> : <em>string</em><br /><em>Returns key: 'Result'.</em> |
| public | <strong>getUniqueid()</strong> : <em>string</em><br /><em>Returns key: 'Uniqueid'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

*This class implements [\PAMI\AsyncAgi\Event\IAsyncAgiExecEvent](#interface-pamiasyncagieventiasyncagiexecevent)*

<hr />

### Class: \PAMI\Message\Event\AsyncAGIStartEvent

> Event triggered when a channel starts AsyncAGI command processing. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>string</em> <strong>$rawContent</strong>)</strong> : <em>void</em><br /><em>Constructor.</em> |
| public | <strong>getAccountCode()</strong> : <em>string</em><br /><em>Returns key: 'AccountCode'.</em> |
| public | <strong>getCallerIDName()</strong> : <em>string</em><br /><em>Returns key: 'CallerIDName'.</em> |
| public | <strong>getCallerIDNum()</strong> : <em>string</em><br /><em>Returns key: 'CallerIDNum'.</em> |
| public | <strong>getChannel()</strong> : <em>string</em><br /><em>Returns key: 'Channel'.</em> |
| public | <strong>getChannelState()</strong> : <em>string</em><br /><em>Returns key: 'ChannelState'.</em> |
| public | <strong>getChannelStateDesc()</strong> : <em>string</em><br /><em>Returns key: 'ChannelStateDesc'.</em> |
| public | <strong>getConnectedLineName()</strong> : <em>string</em><br /><em>Returns key: 'ConnectedLineName'.</em> |
| public | <strong>getConnectedLineNum()</strong> : <em>string</em><br /><em>Returns key: 'ConnectedLineNum'.</em> |
| public | <strong>getContext()</strong> : <em>string</em><br /><em>Returns key: 'Context'.</em> |
| public | <strong>getEnv()</strong> : <em>string</em> |
| public | <strong>getEnvironment()</strong> : <em>string</em><br /><em>Returns key: 'Env'.</em> |
| public | <strong>getExten()</strong> : <em>string</em><br /><em>Returns key: 'Exten'.</em> |
| public | <strong>getPriority()</strong> : <em>string</em><br /><em>Returns key: 'Priority'.</em> |
| public | <strong>getPrivilege()</strong> : <em>string</em><br /><em>Returns key: 'Privilege'.</em> |
| public | <strong>getUniqueid()</strong> : <em>string</em><br /><em>Returns key: 'Uniqueid'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

*This class implements [\PAMI\AsyncAgi\Event\IAsyncAgiStartEvent](#interface-pamiasyncagieventiasyncagistartevent)*

<hr />

### Class: \PAMI\Message\Event\AttendedTransferEvent

> Event triggered when an attended transfer is complete. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getDestApp()</strong> : <em>string</em><br /><em>Returns key: 'DestApp'.</em> |
| public | <strong>getDestBridgeUniqueid()</strong> : <em>string</em><br /><em>Returns key: 'DestBridgeUniqueid'.</em> |
| public | <strong>getDestTransfererChannel()</strong> : <em>string</em><br /><em>Returns key: 'DestTransfererChannel'.</em> |
| public | <strong>getDestType()</strong> : <em>string</em><br /><em>Returns key: 'DestType'. DestType - Indicates the method by which the attended transfer completed. Bridge - The transfer was accomplished by merging two bridges into one. App - The transfer was accomplished by having a channel or bridge run a dialplan application. Link - The transfer was accomplished by linking two bridges together using a local channel pair. Threeway - The transfer was accomplished by placing all parties into a threeway call. Fail - The transfer failed.</em> |
| public | <strong>getLocalOneAccountCode()</strong> : <em>string</em><br /><em>Returns key: 'LocalOneAccountCode'.</em> |
| public | <strong>getLocalOneCallerIDName()</strong> : <em>string</em><br /><em>Returns key: 'LocalOneCallerIDName'.</em> |
| public | <strong>getLocalOneCallerIDNum()</strong> : <em>string</em><br /><em>Returns key: 'LocalOneCallerIDNum'.</em> |
| public | <strong>getLocalOneChannel()</strong> : <em>string</em><br /><em>Returns key: 'LocalOneChannel'.</em> |
| public | <strong>getLocalOneChannelState()</strong> : <em>string</em><br /><em>Returns key: 'LocalOneChannelState'.</em> |
| public | <strong>getLocalOneChannelStateDesc()</strong> : <em>string</em><br /><em>Returns key: 'LocalOneChannelStateDesc'.</em> |
| public | <strong>getLocalOneConnectedLineName()</strong> : <em>string</em><br /><em>Returns key: 'LocalOneConnectedLineName'.</em> |
| public | <strong>getLocalOneConnectedLineNum()</strong> : <em>string</em><br /><em>Returns key: 'LocalOneConnectedLineNum'.</em> |
| public | <strong>getLocalOneContext()</strong> : <em>string</em><br /><em>Returns key: 'LocalOneContext'.</em> |
| public | <strong>getLocalOneExten()</strong> : <em>string</em><br /><em>Returns key: 'LocalOneExten'.</em> |
| public | <strong>getLocalOnePriority()</strong> : <em>string</em><br /><em>Returns key: 'LocalOnePriority'.</em> |
| public | <strong>getLocalOneUniqueid()</strong> : <em>string</em><br /><em>Returns key: 'LocalOneUniqueid'.</em> |
| public | <strong>getLocalTwoAccountCode()</strong> : <em>string</em><br /><em>Returns key: 'LocalTwoAccountCode'.</em> |
| public | <strong>getLocalTwoCallerIDName()</strong> : <em>string</em><br /><em>Returns key: 'LocalTwoCallerIDName'.</em> |
| public | <strong>getLocalTwoCallerIDNum()</strong> : <em>string</em><br /><em>Returns key: 'LocalTwoCallerIDNum'.</em> |
| public | <strong>getLocalTwoChannel()</strong> : <em>string</em><br /><em>Returns key: 'LocalTwoChannel'.</em> |
| public | <strong>getLocalTwoChannelState()</strong> : <em>string</em><br /><em>Returns key: 'LocalTwoChannelState'.</em> |
| public | <strong>getLocalTwoChannelStateDesc()</strong> : <em>string</em><br /><em>Returns key: 'LocalTwoChannelStateDesc'.</em> |
| public | <strong>getLocalTwoConnectedLineName()</strong> : <em>string</em><br /><em>Returns key: 'LocalTwoConnectedLineName'.</em> |
| public | <strong>getLocalTwoConnectedLineNum()</strong> : <em>string</em><br /><em>Returns key: 'LocalTwoConnectedLineNum'.</em> |
| public | <strong>getLocalTwoContext()</strong> : <em>string</em><br /><em>Returns key: 'LocalTwoContext'.</em> |
| public | <strong>getLocalTwoExten()</strong> : <em>string</em><br /><em>Returns key: 'LocalTwoExten'.</em> |
| public | <strong>getLocalTwoPriority()</strong> : <em>string</em><br /><em>Returns key: 'LocalTwoPriority'.</em> |
| public | <strong>getLocalTwoUniqueid()</strong> : <em>string</em><br /><em>Returns key: 'LocalTwoUniqueid'.</em> |
| public | <strong>getOrigBridgeCreator()</strong> : <em>string</em><br /><em>Returns key: 'OrigBridgeCreator'.</em> |
| public | <strong>getOrigBridgeName()</strong> : <em>string</em><br /><em>Returns key: 'OrigBridgeName'.</em> |
| public | <strong>getOrigBridgeNumChannels()</strong> : <em>string</em><br /><em>Returns key: 'OrigBridgeNumChannels'.</em> |
| public | <strong>getOrigBridgeTechnology()</strong> : <em>string</em><br /><em>Returns key: 'OrigBridgeTechnology'.</em> |
| public | <strong>getOrigBridgeType()</strong> : <em>string</em><br /><em>Returns key: 'OrigBridgeType'.</em> |
| public | <strong>getOrigBridgeUniqueid()</strong> : <em>string</em><br /><em>Returns key: 'OrigBridgeUniqueid'.</em> |
| public | <strong>getOrigTransfererAccountCode()</strong> : <em>string</em><br /><em>Returns key: 'OrigTransfererAccountCode'.</em> |
| public | <strong>getOrigTransfererCallerIDName()</strong> : <em>string</em><br /><em>Returns key: 'OrigTransfererCallerIDName'.</em> |
| public | <strong>getOrigTransfererCallerIDNum()</strong> : <em>string</em><br /><em>Returns key: 'OrigTransfererCallerIDNum'.</em> |
| public | <strong>getOrigTransfererChannel()</strong> : <em>string</em><br /><em>Returns key: 'OrigTransfererChannel'.</em> |
| public | <strong>getOrigTransfererChannelState()</strong> : <em>string</em><br /><em>Returns key: 'OrigTransfererChannelState'.</em> |
| public | <strong>getOrigTransfererChannelStateDesc()</strong> : <em>string</em><br /><em>Returns key: 'OrigTransfererChannelStateDesc'. Down Rsrvd OffHook Dialing Ring Ringing Up Busy Dialing Offhook Pre-ring Unknown</em> |
| public | <strong>getOrigTransfererConnectedLineName()</strong> : <em>string</em><br /><em>Returns key: 'OrigTransfererConnectedLineName'.</em> |
| public | <strong>getOrigTransfererConnectedLineNum()</strong> : <em>string</em><br /><em>Returns key: 'OrigTransfererConnectedLineNum'.</em> |
| public | <strong>getOrigTransfererContext()</strong> : <em>string</em><br /><em>Returns key: 'OrigTransfererContext'.</em> |
| public | <strong>getOrigTransfererExten()</strong> : <em>string</em><br /><em>Returns key: 'OrigTransfererExten'.</em> |
| public | <strong>getOrigTransfererPriority()</strong> : <em>string</em><br /><em>Returns key: 'OrigTransfererPriority'.</em> |
| public | <strong>getOrigTransfererUniqueid()</strong> : <em>string</em><br /><em>Returns key: 'OrigTransfererUniqueid'.</em> |
| public | <strong>getResult()</strong> : <em>string</em><br /><em>Returns key: 'Result'. Result - Indicates if the transfer was successful or if it failed. - Fail - An internal error occurred. - Invalid - Invalid configuration for transfer (e.g. Not bridged) - Not Permitted - Bridge does not permit transfers - Success - Transfer completed successfully</em> |
| public | <strong>getSecondBridgeCreator()</strong> : <em>string</em><br /><em>Returns key: 'SecondBridgeCreator'.</em> |
| public | <strong>getSecondBridgeName()</strong> : <em>string</em><br /><em>Returns key: 'SecondBridgeName'.</em> |
| public | <strong>getSecondBridgeNumChannels()</strong> : <em>string</em><br /><em>Returns key: 'SecondBridgeNumChannels'.</em> |
| public | <strong>getSecondBridgeTechnology()</strong> : <em>string</em><br /><em>Returns key: 'SecondBridgeTechnology'.</em> |
| public | <strong>getSecondBridgeType()</strong> : <em>string</em><br /><em>Returns key: 'SecondBridgeType'.</em> |
| public | <strong>getSecondBridgeUniqueid()</strong> : <em>string</em><br /><em>Returns key: 'SecondBridgeUniqueid'.</em> |
| public | <strong>getSecondTransfererAccountCode()</strong> : <em>string</em><br /><em>Returns key: 'SecondTransfererAccountCode'.</em> |
| public | <strong>getSecondTransfererCallerIDName()</strong> : <em>string</em><br /><em>Returns key: 'SecondTransfererCallerIDName'.</em> |
| public | <strong>getSecondTransfererCallerIDNum()</strong> : <em>string</em><br /><em>Returns key: 'SecondTransfererCallerIDNum'.</em> |
| public | <strong>getSecondTransfererChannel()</strong> : <em>string</em><br /><em>Returns key: 'SecondTransfererChannel'.</em> |
| public | <strong>getSecondTransfererChannelState()</strong> : <em>string</em><br /><em>Returns key: 'SecondTransfererChannelState'.</em> |
| public | <strong>getSecondTransfererChannelStateDesc()</strong> : <em>string</em><br /><em>Returns key: 'SecondTransfererChannelStateDesc'. Down Rsrvd OffHook Dialing Ring Ringing Up Busy Dialing Offhook Pre-ring Unknown</em> |
| public | <strong>getSecondTransfererConnectedLineName()</strong> : <em>string</em><br /><em>Returns key: 'SecondTransfererConnectedLineName'.</em> |
| public | <strong>getSecondTransfererConnectedLineNum()</strong> : <em>string</em><br /><em>Returns key: 'SecondTransfererConnectedLineNum'.</em> |
| public | <strong>getSecondTransfererContext()</strong> : <em>string</em><br /><em>Returns key: 'SecondTransfererContext'.</em> |
| public | <strong>getSecondTransfererExten()</strong> : <em>string</em><br /><em>Returns key: 'SecondTransfererExten'.</em> |
| public | <strong>getSecondTransfererPriority()</strong> : <em>string</em><br /><em>Returns key: 'SecondTransfererPriority'.</em> |
| public | <strong>getSecondTransfererUniqueid()</strong> : <em>string</em><br /><em>Returns key: 'SecondTransfererUniqueid'.</em> |
| public | <strong>getTransfereeAccountCode()</strong> : <em>string</em><br /><em>Returns key: 'TransfereeAccountCode'.</em> |
| public | <strong>getTransfereeCallerIDName()</strong> : <em>string</em><br /><em>Returns key: 'TransfereeCallerIDName'.</em> |
| public | <strong>getTransfereeCallerIDNum()</strong> : <em>string</em><br /><em>Returns key: 'TransfereeCallerIDNum'.</em> |
| public | <strong>getTransfereeChannel()</strong> : <em>string</em><br /><em>Returns key: 'TransfereeChannel'.</em> |
| public | <strong>getTransfereeChannelState()</strong> : <em>string</em><br /><em>Returns key: 'TransfereeChannelState'.</em> |
| public | <strong>getTransfereeChannelStateDesc()</strong> : <em>string</em><br /><em>Returns key: 'TransfereeChannelStateDesc'.</em> |
| public | <strong>getTransfereeConnectedLineName()</strong> : <em>string</em><br /><em>Returns key: 'TransfereeConnectedLineName'.</em> |
| public | <strong>getTransfereeConnectedLineNum()</strong> : <em>string</em><br /><em>Returns key: 'TransfereeConnectedLineNum'.</em> |
| public | <strong>getTransfereeContext()</strong> : <em>string</em><br /><em>Returns key: 'TransfereeContext'.</em> |
| public | <strong>getTransfereeExten()</strong> : <em>string</em><br /><em>Returns key: 'TransfereeExten'.</em> |
| public | <strong>getTransfereePriority()</strong> : <em>string</em><br /><em>Returns key: 'TransfereePriority'.</em> |
| public | <strong>getTransfereeUniqueid()</strong> : <em>string</em><br /><em>Returns key: 'TransfereeUniqueid'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\AuthDetailEvent

> Event from PJSIPShowEndpoint PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getAuthType()</strong> : <em>string</em><br /><em>Returns key: 'AuthType'. Authentication type</em> |
| public | <strong>getEndpointName()</strong> : <em>string</em><br /><em>Returns key: 'EndpointName'. The name of the endpoint associated with this information.</em> |
| public | <strong>getMd5Cred()</strong> : <em>string</em><br /><em>Returns key: 'Md5Cred'. MD5 Hash used for authentication.</em> |
| public | <strong>getNonceLifetime()</strong> : <em>string</em><br /><em>Returns key: 'NonceLifetime'. Lifetime of a nonce associated with this authentication config.</em> |
| public | <strong>getObjectName()</strong> : <em>string</em><br /><em>Returns key: 'ObjectName'. The name of this object.</em> |
| public | <strong>getObjectType()</strong> : <em>string</em><br /><em>Returns key: 'ObjectType'. The object's type. This will always be 'auth'.</em> |
| public | <strong>getPassword()</strong> : <em>string</em><br /><em>Returns key: 'Password'. Username to use for account</em> |
| public | <strong>getRealm()</strong> : <em>string</em><br /><em>Returns key: 'Realm'. SIP realm for endpoint</em> |
| public | <strong>getUsername()</strong> : <em>string</em><br /><em>Returns key: 'Username'. Username to use for account</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\BlindTransferEvent

> Event triggered when a blind transfer is complete. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getBridgeCreator()</strong> : <em>string</em><br /><em>Returns key: 'BridgeCreator'. BridgeCreator - Entity that created the bridge if applicable</em> |
| public | <strong>getBridgeName()</strong> : <em>string</em><br /><em>Returns key: 'BridgeName'. BridgeName - Name used to refer to the bridge by its BridgeCreator if applicable</em> |
| public | <strong>getBridgeNumChannels()</strong> : <em>string</em><br /><em>Returns key: 'BridgeNumChannels'. BridgeNumChannels - Number of channels in the bridge</em> |
| public | <strong>getBridgeTechnology()</strong> : <em>string</em><br /><em>Returns key: 'BridgeTechnology'. BridgeTechnology - Technology in use by the bridge</em> |
| public | <strong>getBridgeType()</strong> : <em>string</em><br /><em>Returns key: 'BridgeType'. BridgeType - The type of bridge</em> |
| public | <strong>getBridgeUniqueid()</strong> : <em>string</em><br /><em>Returns key: 'BridgeUniqueid'.</em> |
| public | <strong>getContext()</strong> : <em>string</em><br /><em>Returns key: 'Context'. Context - Destination context for the blind transfer.</em> |
| public | <strong>getExtension()</strong> : <em>string</em><br /><em>Returns key: 'Extension'. Extension - Destination extension for the blind transfer.</em> |
| public | <strong>getIsExternal()</strong> : <em>string</em><br /><em>Returns key: 'IsExternal'. IsExternal - Indicates if the transfer was performed outside of Asterisk. For instance, a channel protocol native transfer is external. A DTMF transfer is internal. Yes No</em> |
| public | <strong>getPrivilege()</strong> : <em>string</em><br /><em>Returns key: 'Privilege'.</em> |
| public | <strong>getResult()</strong> : <em>string</em><br /><em>Returns key: 'Result'. Result - Indicates if the transfer was successful or if it failed. - Fail - An internal error occurred. - Invalid - Invalid configuration for transfer (e.g. Not bridged) - Not Permitted - Bridge does not permit transfers - Success - Transfer completed successfully</em> |
| public | <strong>getTransfereeAccountCode()</strong> : <em>string</em><br /><em>Returns key: 'TransfereeAccountCode'.</em> |
| public | <strong>getTransfereeCallerIDName()</strong> : <em>string</em><br /><em>Returns key: 'TransfereeCallerIDName'.</em> |
| public | <strong>getTransfereeCallerIDNum()</strong> : <em>string</em><br /><em>Returns key: 'TransfereeCallerIDNum'.</em> |
| public | <strong>getTransfereeChannel()</strong> : <em>string</em><br /><em>Returns key: 'TransfereeChannel'.</em> |
| public | <strong>getTransfereeChannelState()</strong> : <em>string</em><br /><em>Returns key: 'TransfereeChannelState'. TransfereeChannelState - A numeric code for the channel's current state, related to TransfereeChannelStateDesc</em> |
| public | <strong>getTransfereeChannelStateDesc()</strong> : <em>string</em><br /><em>Returns key: 'TransfereeChannelStateDesc'. Down Rsrvd OffHook Dialing Ring Ringing Up Busy Dialing Offhook Pre-ring Unknown</em> |
| public | <strong>getTransfereeConnectedLineName()</strong> : <em>string</em><br /><em>Returns key: 'TransfereeConnectedLineName'.</em> |
| public | <strong>getTransfereeConnectedLineNum()</strong> : <em>string</em><br /><em>Returns key: 'TransfereeConnectedLineNum'.</em> |
| public | <strong>getTransfereeContext()</strong> : <em>string</em><br /><em>Returns key: 'TransfereeContext'.</em> |
| public | <strong>getTransfereeExten()</strong> : <em>string</em><br /><em>Returns key: 'TransfereeExten'.</em> |
| public | <strong>getTransfereePriority()</strong> : <em>string</em><br /><em>Returns key: 'TransfereePriority'.</em> |
| public | <strong>getTransfereeUniqueid()</strong> : <em>string</em><br /><em>Returns key: 'TransfereeUniqueid'.</em> |
| public | <strong>getTransfererAccountCode()</strong> : <em>string</em><br /><em>Returns key: 'TransfererAccountCode'.</em> |
| public | <strong>getTransfererCallerIDName()</strong> : <em>string</em><br /><em>Returns key: 'TransfererCallerIDName'.</em> |
| public | <strong>getTransfererCallerIDNum()</strong> : <em>string</em><br /><em>Returns key: 'TransfererCallerIDNum'.</em> |
| public | <strong>getTransfererChannel()</strong> : <em>string</em><br /><em>Returns key: 'TransfererChannel'.</em> |
| public | <strong>getTransfererChannelState()</strong> : <em>string</em><br /><em>Returns key: 'TransfererChannelState'. TransfererChannelState - A numeric code for the channel's current state, related to TransfererChannelStateDesc</em> |
| public | <strong>getTransfererChannelStateDesc()</strong> : <em>string</em><br /><em>Returns key: 'TransfererChannelStateDesc'. Down Rsrvd OffHook Dialing Ring Ringing Up Busy Dialing Offhook Pre-ring Unknown</em> |
| public | <strong>getTransfererConnectedLineName()</strong> : <em>string</em><br /><em>Returns key: 'TransfererConnectedLineName'.</em> |
| public | <strong>getTransfererConnectedLineNum()</strong> : <em>string</em><br /><em>Returns key: 'TransfererConnectedLineNum'.</em> |
| public | <strong>getTransfererContext()</strong> : <em>string</em><br /><em>Returns key: 'TransfererContext'.</em> |
| public | <strong>getTransfererExten()</strong> : <em>string</em><br /><em>Returns key: 'TransfererExten'.</em> |
| public | <strong>getTransfererPriority()</strong> : <em>string</em><br /><em>Returns key: 'TransfererPriority'.</em> |
| public | <strong>getTransfererUniqueid()</strong> : <em>string</em><br /><em>Returns key: 'TransfererUniqueid'.</em> |
| public | <strong>isExternal()</strong> : <em>bool</em><br /><em>Indicates if the transfer was performed outside of Asterisk. For instance, a channel protocol native transfer is external. A DTMF transfer is internal.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\BridgeCreateEvent

> Event triggered when a bridge is created. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getBridgeCreator()</strong> : <em>string</em><br /><em>Returns key: 'BridgeCreator'.</em> |
| public | <strong>getBridgeName()</strong> : <em>string</em><br /><em>Returns key: 'BridgeName'.</em> |
| public | <strong>getBridgeNumChannels()</strong> : <em>string</em><br /><em>Returns key: 'BridgeNumChannels'.</em> |
| public | <strong>getBridgeTechnology()</strong> : <em>string</em><br /><em>Returns key: 'BridgeTechnology'.</em> |
| public | <strong>getBridgeType()</strong> : <em>string</em><br /><em>Returns key: 'BridgeType'.</em> |
| public | <strong>getBridgeUniqueid()</strong> : <em>string</em><br /><em>Returns key: 'BridgeUniqueid'.</em> |
| public | <strong>getPrivilege()</strong> : <em>string</em><br /><em>Returns key: 'Privilege'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\BridgeDestroyEvent

> Event triggered when a bridge is destroyed. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getBridgeCreator()</strong> : <em>string</em><br /><em>Returns key: 'BridgeCreator'.</em> |
| public | <strong>getBridgeName()</strong> : <em>string</em><br /><em>Returns key: 'BridgeName'.</em> |
| public | <strong>getBridgeNumChannels()</strong> : <em>string</em><br /><em>Returns key: 'BridgeNumChannels'.</em> |
| public | <strong>getBridgeTechnology()</strong> : <em>string</em><br /><em>Returns key: 'BridgeTechnology'.</em> |
| public | <strong>getBridgeType()</strong> : <em>string</em><br /><em>Returns key: 'BridgeType'.</em> |
| public | <strong>getBridgeUniqueid()</strong> : <em>string</em><br /><em>Returns key: 'BridgeUniqueid'.</em> |
| public | <strong>getPrivilege()</strong> : <em>string</em><br /><em>Returns key: 'Privilege'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\BridgeEnterEvent

> Event triggered when a channel enters a bridge. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getAccountCode()</strong> : <em>string</em><br /><em>Returns key: 'AccountCode'.</em> |
| public | <strong>getBridgeCreator()</strong> : <em>string</em><br /><em>Returns key: 'BridgeCreator'.</em> |
| public | <strong>getBridgeName()</strong> : <em>string</em><br /><em>Returns key: 'BridgeName'.</em> |
| public | <strong>getBridgeNumChannels()</strong> : <em>string</em><br /><em>Returns key: 'BridgeNumChannels'.</em> |
| public | <strong>getBridgeTechnology()</strong> : <em>string</em><br /><em>Returns key: 'BridgeTechnology'.</em> |
| public | <strong>getBridgeType()</strong> : <em>string</em><br /><em>Returns key: 'BridgeType'.</em> |
| public | <strong>getBridgeUniqueid()</strong> : <em>string</em><br /><em>Returns key: 'BridgeUniqueid'.</em> |
| public | <strong>getCallerIDName()</strong> : <em>string</em><br /><em>Returns key: 'CallerIDName'.</em> |
| public | <strong>getCallerIDNum()</strong> : <em>string</em><br /><em>Returns key: 'CallerIDNum'.</em> |
| public | <strong>getChannel()</strong> : <em>string</em><br /><em>Returns key: 'Channel'.</em> |
| public | <strong>getChannelState()</strong> : <em>string</em><br /><em>Returns key: 'ChannelState'.</em> |
| public | <strong>getChannelStateDesc()</strong> : <em>string</em><br /><em>Returns key: 'ChannelStateDesc'.</em> |
| public | <strong>getConnectedLineName()</strong> : <em>string</em><br /><em>Returns key: 'ConnectedLineName'.</em> |
| public | <strong>getConnectedLineNum()</strong> : <em>string</em><br /><em>Returns key: 'ConnectedLineNum'.</em> |
| public | <strong>getContext()</strong> : <em>string</em><br /><em>Returns key: 'Context'.</em> |
| public | <strong>getExten()</strong> : <em>string</em><br /><em>Returns key: 'Exten'.</em> |
| public | <strong>getPriority()</strong> : <em>string</em><br /><em>Returns key: 'Priority'.</em> |
| public | <strong>getPrivilege()</strong> : <em>string</em><br /><em>Returns key: 'Privilege'.</em> |
| public | <strong>getSwapUniqueid()</strong> : <em>string</em><br /><em>Returns key: 'SwapUniqueid'.</em> |
| public | <strong>getUniqueid()</strong> : <em>string</em><br /><em>Returns key: 'Uniqueid'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\BridgeInfoChannelEvent

> Event triggered when an action BridgeInfo is issued. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getAccountCode()</strong> : <em>string</em><br /><em>Returns key: 'AccountCode'.</em> |
| public | <strong>getCallerIDName()</strong> : <em>string</em><br /><em>Returns key: 'CallerIDName'.</em> |
| public | <strong>getCallerIDNum()</strong> : <em>string</em><br /><em>Returns key: 'CallerIDNum'.</em> |
| public | <strong>getChannel()</strong> : <em>string</em><br /><em>Returns key: 'Channel'.</em> |
| public | <strong>getChannelState()</strong> : <em>string</em><br /><em>Returns key: 'ChannelState'.</em> |
| public | <strong>getChannelStateDesc()</strong> : <em>string</em><br /><em>Returns key: 'ChannelStateDesc'.</em> |
| public | <strong>getConnectedLineName()</strong> : <em>string</em><br /><em>Returns key: 'ConnectedLineName'.</em> |
| public | <strong>getConnectedLineNum()</strong> : <em>string</em><br /><em>Returns key: 'ConnectedLineNum'.</em> |
| public | <strong>getContext()</strong> : <em>string</em><br /><em>Returns key: 'Context'.</em> |
| public | <strong>getExten()</strong> : <em>string</em><br /><em>Returns key: 'Exten'.</em> |
| public | <strong>getLinkedid()</strong> : <em>string</em><br /><em>Returns key: 'Linkedid'.</em> |
| public | <strong>getPriority()</strong> : <em>string</em><br /><em>Returns key: 'Priority'.</em> |
| public | <strong>getUniqueid()</strong> : <em>string</em><br /><em>Returns key: 'Uniqueid'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\BridgeInfoCompleteEvent

> Event triggered for the end of the list when an action BridgeInfo is issued. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getBridgeCreator()</strong> : <em>string</em><br /><em>Returns key: 'BridgeCreator'.</em> |
| public | <strong>getBridgeName()</strong> : <em>string</em><br /><em>Returns key: 'BridgeName'.</em> |
| public | <strong>getBridgeNumChannels()</strong> : <em>string</em><br /><em>Returns key: 'BridgeNumChannels'.</em> |
| public | <strong>getBridgeTechnology()</strong> : <em>string</em><br /><em>Returns key: 'BridgeTechnology'.</em> |
| public | <strong>getBridgeType()</strong> : <em>string</em><br /><em>Returns key: 'BridgeType'.</em> |
| public | <strong>getBridgeUniqueid()</strong> : <em>string</em><br /><em>Returns key: 'BridgeUniqueid'.</em> |
| public | <strong>getBridgeVideoSource()</strong> : <em>string</em><br /><em>Returns key: 'BridgeVideoSource'.</em> |
| public | <strong>getBridgeVideoSourceMode()</strong> : <em>string</em><br /><em>Returns key: 'BridgeVideoSourceMode'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\BridgeLeaveEvent

> Event triggered when a channel leaves a bridge. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getAccountCode()</strong> : <em>string</em><br /><em>Returns key: 'AccountCode'.</em> |
| public | <strong>getBridgeCreator()</strong> : <em>string</em><br /><em>Returns key: 'BridgeCreator'.</em> |
| public | <strong>getBridgeName()</strong> : <em>string</em><br /><em>Returns key: 'BridgeName'.</em> |
| public | <strong>getBridgeNumChannels()</strong> : <em>string</em><br /><em>Returns key: 'BridgeNumChannels'.</em> |
| public | <strong>getBridgeTechnology()</strong> : <em>string</em><br /><em>Returns key: 'BridgeTechnology'.</em> |
| public | <strong>getBridgeType()</strong> : <em>string</em><br /><em>Returns key: 'BridgeType'.</em> |
| public | <strong>getBridgeUniqueid()</strong> : <em>string</em><br /><em>Returns key: 'BridgeUniqueid'.</em> |
| public | <strong>getCallerIDName()</strong> : <em>string</em><br /><em>Returns key: 'CallerIDName'.</em> |
| public | <strong>getCallerIDNum()</strong> : <em>string</em><br /><em>Returns key: 'CallerIDNum'.</em> |
| public | <strong>getChannel()</strong> : <em>string</em><br /><em>Returns key: 'Channel'.</em> |
| public | <strong>getChannelState()</strong> : <em>string</em><br /><em>Returns key: 'ChannelState'.</em> |
| public | <strong>getChannelStateDesc()</strong> : <em>string</em><br /><em>Returns key: 'ChannelStateDesc'.</em> |
| public | <strong>getConnectedLineName()</strong> : <em>string</em><br /><em>Returns key: 'ConnectedLineName'.</em> |
| public | <strong>getConnectedLineNum()</strong> : <em>string</em><br /><em>Returns key: 'ConnectedLineNum'.</em> |
| public | <strong>getContext()</strong> : <em>string</em><br /><em>Returns key: 'Context'.</em> |
| public | <strong>getExten()</strong> : <em>string</em><br /><em>Returns key: 'Exten'.</em> |
| public | <strong>getPriority()</strong> : <em>string</em><br /><em>Returns key: 'Priority'.</em> |
| public | <strong>getPrivilege()</strong> : <em>string</em><br /><em>Returns key: 'Privilege'.</em> |
| public | <strong>getUniqueid()</strong> : <em>string</em><br /><em>Returns key: 'Uniqueid'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\CELEvent

> Event triggered when a CEL log message is generated PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getAMAFlags()</strong> : <em>string</em><br /><em>Returns key: 'AMAFlags'.</em> |
| public | <strong>getAccountCode()</strong> : <em>string</em><br /><em>Returns key: 'AccountCode'.</em> |
| public | <strong>getAppData()</strong> : <em>string</em><br /><em>Returns key: 'AppData'.</em> |
| public | <strong>getApplication()</strong> : <em>string</em><br /><em>Returns key: 'Application'.</em> |
| public | <strong>getCallerIDani()</strong> : <em>string</em><br /><em>Returns key: 'CallerIDani'.</em> |
| public | <strong>getCallerIDdnid()</strong> : <em>string</em><br /><em>Returns key: 'CallerIDdnid'.</em> |
| public | <strong>getCallerIDname()</strong> : <em>string</em><br /><em>Returns key: 'CallerIDname'.</em> |
| public | <strong>getCallerIDnum()</strong> : <em>string</em><br /><em>Returns key: 'CallerIDnum'.</em> |
| public | <strong>getCallerIDrdnis()</strong> : <em>string</em><br /><em>Returns key: 'CallerIDrdnis'.</em> |
| public | <strong>getChannel()</strong> : <em>string</em><br /><em>Returns key: 'Channel'.</em> |
| public | <strong>getContext()</strong> : <em>string</em><br /><em>Returns key: 'Context'.</em> |
| public | <strong>getEvent()</strong> : <em>string</em><br /><em>Returns key: 'Event'.</em> |
| public | <strong>getEventName()</strong> : <em>string</em><br /><em>Returns key: 'EventName'.</em> |
| public | <strong>getEventTime()</strong> : <em>string</em><br /><em>Returns key: 'EventTime'.</em> |
| public | <strong>getExten()</strong> : <em>string</em><br /><em>Returns key: 'Exten'.</em> |
| public | <strong>getExtra()</strong> : <em>string</em><br /><em>Returns key: 'Extra'.</em> |
| public | <strong>getLinkedID()</strong> : <em>string</em><br /><em>Returns key: 'LinkedID'.</em> |
| public | <strong>getPeer()</strong> : <em>string</em><br /><em>Returns key: 'Peer'.</em> |
| public | <strong>getPeerAccount()</strong> : <em>string</em><br /><em>Returns key: 'PeerAccount'.</em> |
| public | <strong>getPrivilege()</strong> : <em>string</em><br /><em>Returns key: 'Privilege'.</em> |
| public | <strong>getTimestamp()</strong> : <em>string</em><br /><em>Returns key: 'Timestamp'.</em> |
| public | <strong>getUniqueID()</strong> : <em>string</em><br /><em>Returns key: 'UniqueID'.</em> |
| public | <strong>getUserfield()</strong> : <em>string</em><br /><em>Returns key: 'Userfield'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\CdrEvent

> Event triggered when a channel changes its status. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getAMAFlags()</strong> : <em>string</em><br /><em>Returns key: 'AMAFlags'.</em> |
| public | <strong>getAccountCode()</strong> : <em>string</em><br /><em>Returns key: 'AccountCode'.</em> |
| public | <strong>getAnswerTime()</strong> : <em>string</em><br /><em>Returns key: 'AnswerTime'.</em> |
| public | <strong>getBillableSeconds()</strong> : <em>string</em><br /><em>Returns key: 'BillableSeconds'.</em> |
| public | <strong>getCallerID()</strong> : <em>string</em><br /><em>Returns key: 'CallerID'.</em> |
| public | <strong>getChannel()</strong> : <em>string</em><br /><em>Returns key: 'Channel'.</em> |
| public | <strong>getDestination()</strong> : <em>string</em><br /><em>Returns key: 'Destination'.</em> |
| public | <strong>getDestinationChannel()</strong> : <em>string</em><br /><em>Returns key: 'DestinationChannel'.</em> |
| public | <strong>getDestinationContext()</strong> : <em>string</em><br /><em>Returns key: 'DestinationContext'.</em> |
| public | <strong>getDisposition()</strong> : <em>string</em><br /><em>Returns key: 'Disposition'.</em> |
| public | <strong>getDuration()</strong> : <em>string</em><br /><em>Returns key: 'Duration'.</em> |
| public | <strong>getEndTime()</strong> : <em>string</em><br /><em>Returns key: 'EndTime'.</em> |
| public | <strong>getLastApplication()</strong> : <em>string</em><br /><em>Returns key: 'LastApplication'.</em> |
| public | <strong>getLastData()</strong> : <em>string</em><br /><em>Returns key: 'LastData'.</em> |
| public | <strong>getPrivilege()</strong> : <em>string</em><br /><em>Returns key: 'Privilege'.</em> |
| public | <strong>getSource()</strong> : <em>string</em><br /><em>Returns key: 'Source'.</em> |
| public | <strong>getStartTime()</strong> : <em>string</em><br /><em>Returns key: 'StartTime'.</em> |
| public | <strong>getUniqueID()</strong> : <em>string</em><br /><em>Returns key: 'UniqueID'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\ConfbridgeEndEvent

> Event triggered when .. ? PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getBridgeCreator()</strong> : <em>string</em><br /><em>Returns key: 'BridgeCreator'.</em> |
| public | <strong>getBridgeName()</strong> : <em>string</em><br /><em>Returns key: 'BridgeName'.</em> |
| public | <strong>getBridgeNumChannels()</strong> : <em>string</em><br /><em>Returns key: 'BridgeNumChannels'.</em> |
| public | <strong>getBridgeTechnology()</strong> : <em>string</em><br /><em>Returns key: 'BridgeTechnology'.</em> |
| public | <strong>getBridgeType()</strong> : <em>string</em><br /><em>Returns key: 'BridgeType'.</em> |
| public | <strong>getBridgeUniqueid()</strong> : <em>string</em><br /><em>Returns key: 'BridgeUniqueid'.</em> |
| public | <strong>getConference()</strong> : <em>string</em><br /><em>Returns key: 'Conference'.</em> |
| public | <strong>getPrivilege()</strong> : <em>string</em><br /><em>Returns key: 'Privilege'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\ConfbridgeJoinEvent

> Event triggered when .. ? PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getAccountCode()</strong> : <em>string</em><br /><em>Returns key: 'AccountCode'.</em> |
| public | <strong>getAdmin()</strong> : <em>string</em><br /><em>Returns key: 'Admin'.</em> |
| public | <strong>getBridgeCreator()</strong> : <em>string</em><br /><em>Returns key: 'BridgeCreator'.</em> |
| public | <strong>getBridgeName()</strong> : <em>string</em><br /><em>Returns key: 'BridgeName'.</em> |
| public | <strong>getBridgeNumChannels()</strong> : <em>string</em><br /><em>Returns key: 'BridgeNumChannels'.</em> |
| public | <strong>getBridgeTechnology()</strong> : <em>string</em><br /><em>Returns key: 'BridgeTechnology'.</em> |
| public | <strong>getBridgeType()</strong> : <em>string</em><br /><em>Returns key: 'BridgeType'.</em> |
| public | <strong>getBridgeUniqueid()</strong> : <em>string</em><br /><em>Returns key: 'BridgeUniqueid'.</em> |
| public | <strong>getCallerIDname()</strong> : <em>string</em><br /><em>Returns key: 'CallerIDname'.</em> |
| public | <strong>getCallerIDnum()</strong> : <em>string</em><br /><em>Returns key: 'CallerIDnum'.</em> |
| public | <strong>getChannel()</strong> : <em>string</em><br /><em>Returns key: 'Channel'.</em> |
| public | <strong>getChannelState()</strong> : <em>string</em><br /><em>Returns key: 'ChannelState'.</em> |
| public | <strong>getChannelStateDesc()</strong> : <em>string</em><br /><em>Returns key: 'ChannelStateDesc'.</em> |
| public | <strong>getConference()</strong> : <em>string</em><br /><em>Returns key: 'Conference'.</em> |
| public | <strong>getConnectedLineName()</strong> : <em>string</em><br /><em>Returns key: 'ConnectedLineName'.</em> |
| public | <strong>getConnectedLineNum()</strong> : <em>string</em><br /><em>Returns key: 'ConnectedLineNum'.</em> |
| public | <strong>getContext()</strong> : <em>string</em><br /><em>Returns key: 'Context'.</em> |
| public | <strong>getExten()</strong> : <em>string</em><br /><em>Returns key: 'Exten'.</em> |
| public | <strong>getLinkedid()</strong> : <em>string</em><br /><em>Returns key: 'Linkedid'.</em> |
| public | <strong>getPriority()</strong> : <em>string</em><br /><em>Returns key: 'Priority'.</em> |
| public | <strong>getPrivilege()</strong> : <em>string</em><br /><em>Returns key: 'Privilege'.</em> |
| public | <strong>getUniqueid()</strong> : <em>string</em><br /><em>Returns key: 'Uniqueid'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\ConfbridgeLeaveEvent

> Event triggered when .. ? PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getAccountCode()</strong> : <em>string</em><br /><em>Returns key: 'AccountCode'.</em> |
| public | <strong>getAdmin()</strong> : <em>string</em><br /><em>Returns key: 'Admin'.</em> |
| public | <strong>getBridgeCreator()</strong> : <em>string</em><br /><em>Returns key: 'BridgeCreator'.</em> |
| public | <strong>getBridgeName()</strong> : <em>string</em><br /><em>Returns key: 'BridgeName'.</em> |
| public | <strong>getBridgeNumChannels()</strong> : <em>string</em><br /><em>Returns key: 'BridgeNumChannels'.</em> |
| public | <strong>getBridgeTechnology()</strong> : <em>string</em><br /><em>Returns key: 'BridgeTechnology'.</em> |
| public | <strong>getBridgeType()</strong> : <em>string</em><br /><em>Returns key: 'BridgeType'.</em> |
| public | <strong>getBridgeUniqueid()</strong> : <em>string</em><br /><em>Returns key: 'BridgeUniqueid'.</em> |
| public | <strong>getCallerIDname()</strong> : <em>string</em><br /><em>Returns key: 'CallerIDname'.</em> |
| public | <strong>getCallerIDnum()</strong> : <em>string</em><br /><em>Returns key: 'CallerIDnum'.</em> |
| public | <strong>getChannel()</strong> : <em>string</em><br /><em>Returns key: 'Channel'.</em> |
| public | <strong>getChannelState()</strong> : <em>string</em><br /><em>Returns key: 'ChannelState'.</em> |
| public | <strong>getChannelStateDesc()</strong> : <em>string</em><br /><em>Returns key: 'ChannelStateDesc'.</em> |
| public | <strong>getConference()</strong> : <em>string</em><br /><em>Returns key: 'Conference'.</em> |
| public | <strong>getConnectedLineName()</strong> : <em>string</em><br /><em>Returns key: 'ConnectedLineName'.</em> |
| public | <strong>getConnectedLineNum()</strong> : <em>string</em><br /><em>Returns key: 'ConnectedLineNum'.</em> |
| public | <strong>getContext()</strong> : <em>string</em><br /><em>Returns key: 'Context'.</em> |
| public | <strong>getExten()</strong> : <em>string</em><br /><em>Returns key: 'Exten'.</em> |
| public | <strong>getLinkedid()</strong> : <em>string</em><br /><em>Returns key: 'Linkedid'.</em> |
| public | <strong>getPriority()</strong> : <em>string</em><br /><em>Returns key: 'Priority'.</em> |
| public | <strong>getPrivilege()</strong> : <em>string</em><br /><em>Returns key: 'Privilege'.</em> |
| public | <strong>getUniqueid()</strong> : <em>string</em><br /><em>Returns key: 'Uniqueid'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\ConfbridgeListEvent

> Event triggered when .. ? PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getAdmin()</strong> : <em>string</em><br /><em>Returns key: 'Admin'.</em> |
| public | <strong>getAnsweredTime()</strong> : <em>string</em><br /><em>Returns key: 'AnsweredTime'.</em> |
| public | <strong>getCallerIDName()</strong> : <em>string</em><br /><em>Returns key: 'CallerIDName'.</em> |
| public | <strong>getCallerIDNum()</strong> : <em>string</em><br /><em>Returns key: 'CallerIDNum'.</em> |
| public | <strong>getChannel()</strong> : <em>string</em><br /><em>Returns key: 'Channel'.</em> |
| public | <strong>getConference()</strong> : <em>string</em><br /><em>Returns key: 'Conference'.</em> |
| public | <strong>getEndMarked()</strong> : <em>string</em><br /><em>Returns key: 'EndMarked'.</em> |
| public | <strong>getMarkedUser()</strong> : <em>string</em><br /><em>Returns key: 'MarkedUser'.</em> |
| public | <strong>getMuted()</strong> : <em>string</em><br /><em>Returns key: 'Muted'.</em> |
| public | <strong>getWaitMarked()</strong> : <em>string</em><br /><em>Returns key: 'WaitMarked'.</em> |
| public | <strong>getWaiting()</strong> : <em>string</em><br /><em>Returns key: 'Waiting'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\ConfbridgeMuteEvent

> Event triggered when .. ? PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getAccountCode()</strong> : <em>string</em><br /><em>Returns key: 'AccountCode'.</em> |
| public | <strong>getAdmin()</strong> : <em>string</em><br /><em>Returns key: 'Admin'.</em> |
| public | <strong>getBridgeCreator()</strong> : <em>string</em><br /><em>Returns key: 'BridgeCreator'.</em> |
| public | <strong>getBridgeName()</strong> : <em>string</em><br /><em>Returns key: 'BridgeName'.</em> |
| public | <strong>getBridgeNumChannels()</strong> : <em>string</em><br /><em>Returns key: 'BridgeNumChannels'.</em> |
| public | <strong>getBridgeTechnology()</strong> : <em>string</em><br /><em>Returns key: 'BridgeTechnology'.</em> |
| public | <strong>getBridgeType()</strong> : <em>string</em><br /><em>Returns key: 'BridgeType'.</em> |
| public | <strong>getBridgeUniqueid()</strong> : <em>string</em><br /><em>Returns key: 'BridgeUniqueid'.</em> |
| public | <strong>getCallerIDname()</strong> : <em>string</em><br /><em>Returns key: 'CallerIDname'.</em> |
| public | <strong>getCallerIDnum()</strong> : <em>string</em><br /><em>Returns key: 'CallerIDnum'.</em> |
| public | <strong>getChannel()</strong> : <em>string</em><br /><em>Returns key: 'Channel'.</em> |
| public | <strong>getChannelState()</strong> : <em>string</em><br /><em>Returns key: 'ChannelState'.</em> |
| public | <strong>getChannelStateDesc()</strong> : <em>string</em><br /><em>Returns key: 'ChannelStateDesc'.</em> |
| public | <strong>getConference()</strong> : <em>string</em><br /><em>Returns key: 'Conference'.</em> |
| public | <strong>getConnectedLineName()</strong> : <em>string</em><br /><em>Returns key: 'ConnectedLineName'.</em> |
| public | <strong>getConnectedLineNum()</strong> : <em>string</em><br /><em>Returns key: 'ConnectedLineNum'.</em> |
| public | <strong>getContext()</strong> : <em>string</em><br /><em>Returns key: 'Context'.</em> |
| public | <strong>getExten()</strong> : <em>string</em><br /><em>Returns key: 'Exten'.</em> |
| public | <strong>getLinkedid()</strong> : <em>string</em><br /><em>Returns key: 'Linkedid'.</em> |
| public | <strong>getPriority()</strong> : <em>string</em><br /><em>Returns key: 'Priority'.</em> |
| public | <strong>getPrivilege()</strong> : <em>string</em><br /><em>Returns key: 'Privilege'.</em> |
| public | <strong>getUniqueid()</strong> : <em>string</em><br /><em>Returns key: 'Uniqueid'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\ConfbridgeStartEvent

> Event triggered when .. ? PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getBridgeCreator()</strong> : <em>string</em><br /><em>Returns key: 'BridgeCreator'.</em> |
| public | <strong>getBridgeName()</strong> : <em>string</em><br /><em>Returns key: 'BridgeName'.</em> |
| public | <strong>getBridgeNumChannels()</strong> : <em>string</em><br /><em>Returns key: 'BridgeNumChannels'.</em> |
| public | <strong>getBridgeTechnology()</strong> : <em>string</em><br /><em>Returns key: 'BridgeTechnology'.</em> |
| public | <strong>getBridgeType()</strong> : <em>string</em><br /><em>Returns key: 'BridgeType'.</em> |
| public | <strong>getBridgeUniqueid()</strong> : <em>string</em><br /><em>Returns key: 'BridgeUniqueid'.</em> |
| public | <strong>getConference()</strong> : <em>string</em><br /><em>Returns key: 'Conference'.</em> |
| public | <strong>getPrivilege()</strong> : <em>string</em><br /><em>Returns key: 'Privilege'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\ConfbridgeTalkingEvent

> Event triggered when .. ? PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getAccountCode()</strong> : <em>string</em><br /><em>Returns key: 'AccountCode'.</em> |
| public | <strong>getAdmin()</strong> : <em>string</em><br /><em>Returns key: 'Admin'.</em> |
| public | <strong>getBridgeCreator()</strong> : <em>string</em><br /><em>Returns key: 'BridgeCreator'.</em> |
| public | <strong>getBridgeName()</strong> : <em>string</em><br /><em>Returns key: 'BridgeName'.</em> |
| public | <strong>getBridgeNumChannels()</strong> : <em>string</em><br /><em>Returns key: 'BridgeNumChannels'.</em> |
| public | <strong>getBridgeTechnology()</strong> : <em>string</em><br /><em>Returns key: 'BridgeTechnology'.</em> |
| public | <strong>getBridgeType()</strong> : <em>string</em><br /><em>Returns key: 'BridgeType'.</em> |
| public | <strong>getBridgeUniqueid()</strong> : <em>string</em><br /><em>Returns key: 'BridgeUniqueid'.</em> |
| public | <strong>getCallerIDName()</strong> : <em>string</em><br /><em>Returns key: 'CallerIDName'.</em> |
| public | <strong>getCallerIDNum()</strong> : <em>string</em><br /><em>Returns key: 'CallerIDNum'.</em> |
| public | <strong>getChannel()</strong> : <em>string</em><br /><em>Returns key: 'Channel'.</em> |
| public | <strong>getChannelState()</strong> : <em>string</em><br /><em>Returns key: 'ChannelState'.</em> |
| public | <strong>getChannelStateDesc()</strong> : <em>string</em><br /><em>Returns key: 'ChannelStateDesc'.</em> |
| public | <strong>getConference()</strong> : <em>string</em><br /><em>Returns key: 'Conference'.</em> |
| public | <strong>getConnectedLineName()</strong> : <em>string</em><br /><em>Returns key: 'ConnectedLineName'.</em> |
| public | <strong>getConnectedLineNum()</strong> : <em>string</em><br /><em>Returns key: 'ConnectedLineNum'.</em> |
| public | <strong>getContext()</strong> : <em>string</em><br /><em>Returns key: 'Context'.</em> |
| public | <strong>getExten()</strong> : <em>string</em><br /><em>Returns key: 'Exten'.</em> |
| public | <strong>getLinkedid()</strong> : <em>string</em><br /><em>Returns key: 'Linkedid'.</em> |
| public | <strong>getPriority()</strong> : <em>string</em><br /><em>Returns key: 'Priority'.</em> |
| public | <strong>getPrivilege()</strong> : <em>string</em><br /><em>Returns key: 'Privilege'.</em> |
| public | <strong>getTalkingStatus()</strong> : <em>string</em><br /><em>Returns key: 'TalkingStatus'.</em> |
| public | <strong>getUniqueid()</strong> : <em>string</em><br /><em>Returns key: 'Uniqueid'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\ConfbridgeUnmuteEvent

> Event triggered when .. ? PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getAccountCode()</strong> : <em>string</em><br /><em>Returns key: 'AccountCode'.</em> |
| public | <strong>getAdmin()</strong> : <em>string</em><br /><em>Returns key: 'Admin'.</em> |
| public | <strong>getBridgeCreator()</strong> : <em>string</em><br /><em>Returns key: 'BridgeCreator'.</em> |
| public | <strong>getBridgeName()</strong> : <em>string</em><br /><em>Returns key: 'BridgeName'.</em> |
| public | <strong>getBridgeNumChannels()</strong> : <em>string</em><br /><em>Returns key: 'BridgeNumChannels'.</em> |
| public | <strong>getBridgeTechnology()</strong> : <em>string</em><br /><em>Returns key: 'BridgeTechnology'.</em> |
| public | <strong>getBridgeType()</strong> : <em>string</em><br /><em>Returns key: 'BridgeType'.</em> |
| public | <strong>getBridgeUniqueid()</strong> : <em>string</em><br /><em>Returns key: 'BridgeUniqueid'.</em> |
| public | <strong>getCallerIDname()</strong> : <em>string</em><br /><em>Returns key: 'CallerIDname'.</em> |
| public | <strong>getCallerIDnum()</strong> : <em>string</em><br /><em>Returns key: 'CallerIDnum'.</em> |
| public | <strong>getChannel()</strong> : <em>string</em><br /><em>Returns key: 'Channel'.</em> |
| public | <strong>getChannelState()</strong> : <em>string</em><br /><em>Returns key: 'ChannelState'.</em> |
| public | <strong>getChannelStateDesc()</strong> : <em>string</em><br /><em>Returns key: 'ChannelStateDesc'.</em> |
| public | <strong>getConference()</strong> : <em>string</em><br /><em>Returns key: 'Conference'.</em> |
| public | <strong>getConnectedLineName()</strong> : <em>string</em><br /><em>Returns key: 'ConnectedLineName'.</em> |
| public | <strong>getConnectedLineNum()</strong> : <em>string</em><br /><em>Returns key: 'ConnectedLineNum'.</em> |
| public | <strong>getContext()</strong> : <em>string</em><br /><em>Returns key: 'Context'.</em> |
| public | <strong>getExten()</strong> : <em>string</em><br /><em>Returns key: 'Exten'.</em> |
| public | <strong>getLinkedid()</strong> : <em>string</em><br /><em>Returns key: 'Linkedid'.</em> |
| public | <strong>getPriority()</strong> : <em>string</em><br /><em>Returns key: 'Priority'.</em> |
| public | <strong>getPrivilege()</strong> : <em>string</em><br /><em>Returns key: 'Privilege'.</em> |
| public | <strong>getUniqueid()</strong> : <em>string</em><br /><em>Returns key: 'Uniqueid'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\ContactStatusDetailEvent

> Event from PJSIPShowEndpoint PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getAOR()</strong> : <em>string</em><br /><em>Returns key: 'AOR'. The AoR that owns this contact.</em> |
| public | <strong>getEndpointName()</strong> : <em>string</em><br /><em>Returns key: 'EndpointName'. The name of the endpoint associated with this information.</em> |
| public | <strong>getObjectType()</strong> : <em>string</em><br /><em>Returns key: 'ObjectType'.</em> |
| public | <strong>getRoundtripUsec()</strong> : <em>string</em><br /><em>Returns key: 'RoundtripUsec'. The round trip time in microseconds.</em> |
| public | <strong>getStatus()</strong> : <em>string</em><br /><em>Returns key: 'Status'. This contact's status. Reachable Unreachable</em> |
| public | <strong>getURI()</strong> : <em>string</em><br /><em>Returns key: 'URI'. This contact's URI.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\CoreShowChannelEvent

> Event triggered when an action CoreShowChannel is issued. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getAccountCode()</strong> : <em>string</em><br /><em>Returns key: 'AccountCode'.</em> |
| public | <strong>getApplication()</strong> : <em>string</em><br /><em>Returns key: 'Application'.</em> |
| public | <strong>getApplicationData()</strong> : <em>string</em><br /><em>Returns key: 'ApplicationData'.</em> |
| public | <strong>getBridgedChannel()</strong> : <em>string</em><br /><em>Returns key: 'BridgedChannel'.</em> |
| public | <strong>getBridgedUniqueID()</strong> : <em>string</em><br /><em>Returns key: 'BridgedUniqueID'.</em> |
| public | <strong>getCallerIDNum()</strong> : <em>string</em><br /><em>Returns key: 'CallerIDNum'.</em> |
| public | <strong>getChannel()</strong> : <em>string</em><br /><em>Returns key: 'Channel'.</em> |
| public | <strong>getChannelState()</strong> : <em>string</em><br /><em>Returns key: 'ChannelState'.</em> |
| public | <strong>getChannelStateDesc()</strong> : <em>string</em><br /><em>Returns key: 'ChannelStateDesc'.</em> |
| public | <strong>getContext()</strong> : <em>string</em><br /><em>Returns key: 'Context'.</em> |
| public | <strong>getDuration()</strong> : <em>string</em><br /><em>Returns key: 'Duration'.</em> |
| public | <strong>getExtension()</strong> : <em>string</em><br /><em>Returns key: 'Extension'.</em> |
| public | <strong>getPriority()</strong> : <em>string</em><br /><em>Returns key: 'Priority'.</em> |
| public | <strong>getPrivilege()</strong> : <em>string</em><br /><em>Returns key: 'Privilege'.</em> |
| public | <strong>getUniqueID()</strong> : <em>string</em><br /><em>Returns key: 'UniqueID'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\CoreShowChannelsCompleteEvent

> Event triggered for the end of the list when an action CoreShowChannels is issued. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getListItems()</strong> : <em>string</em><br /><em>Returns key: 'ListItems'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\DAHDIChannelEvent

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getChannel()</strong> : <em>string</em><br /><em>Returns key: 'Channel'.</em> |
| public | <strong>getDAHDIChannel()</strong> : <em>string</em><br /><em>Returns key: 'DAHDIChannel'.</em> |
| public | <strong>getDAHDISpan()</strong> : <em>string</em><br /><em>Returns key: 'DAHDISpan'.</em> |
| public | <strong>getPrivilege()</strong> : <em>string</em><br /><em>Returns key: 'Privilege'.</em> |
| public | <strong>getUniqueID()</strong> : <em>string</em><br /><em>Returns key: 'UniqueID'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\DNDStateEvent

> Event triggered when the Do Not Disturb state is changed on a DAHDI channel. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strike><strong>getChannel()</strong> : <em>string</em></strike><br /><em>DEPRECATED - Please use {@see getDAHDIChannel()}.</em> |
| public | <strong>getDAHDIChannel()</strong> : <em>string</em><br /><em>Returns key: 'DAHDIChannel'.</em> |
| public | <strong>getPrivilege()</strong> : <em>string</em><br /><em>Returns key: 'Privilege'.</em> |
| public | <strong>getStatus()</strong> : <em>string</em><br /><em>Returns key: 'Status'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\DialBeginEvent

> Event triggered when a dial action has started. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getAccountCode()</strong> : <em>string</em><br /><em>Returns key: 'AccountCode'.</em> |
| public | <strong>getCallerIDName()</strong> : <em>string</em><br /><em>Returns key: 'CallerIDName'.</em> |
| public | <strong>getCallerIDNum()</strong> : <em>string</em><br /><em>Returns key: 'CallerIDNum'.</em> |
| public | <strong>getChannel()</strong> : <em>string</em><br /><em>Returns key: 'Channel'.</em> |
| public | <strong>getChannelState()</strong> : <em>string</em><br /><em>Returns key: 'ChannelState'.</em> |
| public | <strong>getChannelStateDesc()</strong> : <em>string</em><br /><em>Returns key: 'ChannelStateDesc'.</em> |
| public | <strong>getConnectedLineName()</strong> : <em>string</em><br /><em>Returns key: 'ConnectedLineName'.</em> |
| public | <strong>getConnectedLineNum()</strong> : <em>string</em><br /><em>Returns key: 'ConnectedLineNum'.</em> |
| public | <strong>getContext()</strong> : <em>string</em><br /><em>Returns key: 'Context'.</em> |
| public | <strong>getDestAccountCode()</strong> : <em>string</em><br /><em>Returns key: 'DestAccountCode'.</em> |
| public | <strong>getDestCallerIDName()</strong> : <em>string</em><br /><em>Returns key: 'DestCallerIDName'.</em> |
| public | <strong>getDestCallerIDNum()</strong> : <em>string</em><br /><em>Returns key: 'DestCallerIDNum'.</em> |
| public | <strong>getDestChannel()</strong> : <em>string</em><br /><em>Returns key: 'DestChannel'.</em> |
| public | <strong>getDestChannelState()</strong> : <em>string</em><br /><em>Returns key: 'DestChannelState'.</em> |
| public | <strong>getDestChannelStateDesc()</strong> : <em>string</em><br /><em>Returns key: 'DestChannelStateDesc'.</em> |
| public | <strong>getDestConnectedLineName()</strong> : <em>string</em><br /><em>Returns key: 'DestConnectedLineName'.</em> |
| public | <strong>getDestConnectedLineNum()</strong> : <em>string</em><br /><em>Returns key: 'DestConnectedLineNum'.</em> |
| public | <strong>getDestContext()</strong> : <em>string</em><br /><em>Returns key: 'DestContext'.</em> |
| public | <strong>getDestExten()</strong> : <em>string</em><br /><em>Returns key: 'DestExten'.</em> |
| public | <strong>getDestPriority()</strong> : <em>string</em><br /><em>Returns key: 'DestPriority'.</em> |
| public | <strong>getDestUniqueid()</strong> : <em>string</em><br /><em>Returns key: 'DestUniqueid'.</em> |
| public | <strong>getDialStatus()</strong> : <em>string</em><br /><em>Returns key: 'DialStatus'.</em> |
| public | <strong>getDialString()</strong> : <em>string</em><br /><em>Returns key: 'DialString'.</em> |
| public | <strong>getExten()</strong> : <em>string</em><br /><em>Returns key: 'Exten'.</em> |
| public | <strong>getPriority()</strong> : <em>string</em><br /><em>Returns key: 'Priority'.</em> |
| public | <strong>getPrivilege()</strong> : <em>string</em><br /><em>Returns key: 'Privilege'.</em> |
| public | <strong>getUniqueid()</strong> : <em>string</em><br /><em>Returns key: 'Uniqueid'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\DialEndEvent

> Event triggered when a dial action has completed. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getAccountCode()</strong> : <em>string</em><br /><em>Returns key: 'AccountCode'.</em> |
| public | <strong>getCallerIDName()</strong> : <em>string</em><br /><em>Returns key: 'CallerIDName'.</em> |
| public | <strong>getCallerIDNum()</strong> : <em>string</em><br /><em>Returns key: 'CallerIDNum'.</em> |
| public | <strong>getChannel()</strong> : <em>string</em><br /><em>Returns key: 'Channel'.</em> |
| public | <strong>getChannelState()</strong> : <em>string</em><br /><em>Returns key: 'ChannelState'.</em> |
| public | <strong>getChannelStateDesc()</strong> : <em>string</em><br /><em>Returns key: 'ChannelStateDesc'.</em> |
| public | <strong>getConnectedLineName()</strong> : <em>string</em><br /><em>Returns key: 'ConnectedLineName'.</em> |
| public | <strong>getConnectedLineNum()</strong> : <em>string</em><br /><em>Returns key: 'ConnectedLineNum'.</em> |
| public | <strong>getContext()</strong> : <em>string</em><br /><em>Returns key: 'Context'.</em> |
| public | <strong>getDestAccountCode()</strong> : <em>string</em><br /><em>Returns key: 'DestAccountCode'.</em> |
| public | <strong>getDestCallerIDName()</strong> : <em>string</em><br /><em>Returns key: 'DestCallerIDName'.</em> |
| public | <strong>getDestCallerIDNum()</strong> : <em>string</em><br /><em>Returns key: 'DestCallerIDNum'.</em> |
| public | <strong>getDestChannel()</strong> : <em>string</em><br /><em>Returns key: 'DestChannel'.</em> |
| public | <strong>getDestChannelState()</strong> : <em>string</em><br /><em>Returns key: 'DestChannelState'.</em> |
| public | <strong>getDestChannelStateDesc()</strong> : <em>string</em><br /><em>Returns key: 'DestChannelStateDesc'.</em> |
| public | <strong>getDestConnectedLineName()</strong> : <em>string</em><br /><em>Returns key: 'DestConnectedLineName'.</em> |
| public | <strong>getDestConnectedLineNum()</strong> : <em>string</em><br /><em>Returns key: 'DestConnectedLineNum'.</em> |
| public | <strong>getDestContext()</strong> : <em>string</em><br /><em>Returns key: 'DestContext'.</em> |
| public | <strong>getDestExten()</strong> : <em>string</em><br /><em>Returns key: 'DestExten'.</em> |
| public | <strong>getDestPriority()</strong> : <em>string</em><br /><em>Returns key: 'DestPriority'.</em> |
| public | <strong>getDestUniqueid()</strong> : <em>string</em><br /><em>Returns key: 'DestUniqueid'.</em> |
| public | <strong>getDialStatus()</strong> : <em>string</em><br /><em>Returns key: 'DialStatus'.</em> |
| public | <strong>getExten()</strong> : <em>string</em><br /><em>Returns key: 'Exten'.</em> |
| public | <strong>getPriority()</strong> : <em>string</em><br /><em>Returns key: 'Priority'.</em> |
| public | <strong>getPrivilege()</strong> : <em>string</em><br /><em>Returns key: 'Privilege'.</em> |
| public | <strong>getUniqueid()</strong> : <em>string</em><br /><em>Returns key: 'Uniqueid'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\EndpointDetailEvent

> Event from PJSIPShowEndpoint PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>get100rel()</strong> : <em>string</em><br /><em>Returns key: '100rel'. Allow support for RFC3262 provisional ACK tags</em> |
| public | <strong>getAccountcode()</strong> : <em>string</em><br /><em>Returns key: 'Accountcode'. An accountcode to set automatically on any channels created for this endpoint.</em> |
| public | <strong>getActiveChannels()</strong> : <em>string</em><br /><em>Returns key: 'ActiveChannels'. The number of active channels associated with this endpoint.</em> |
| public | <strong>getAggregateMwi()</strong> : <em>string</em><br /><em>Returns key: 'AggregateMwi'. Condense MWI notifications into a single NOTIFY.</em> |
| public | <strong>getAllow()</strong> : <em>string</em><br /><em>Returns key: 'Allow'. Media Codec(s) to allow</em> |
| public | <strong>getAllowSubscribe()</strong> : <em>string</em><br /><em>Returns key: 'AllowSubscribe'. Determines if endpoint is allowed to initiate subscriptions with Asterisk.</em> |
| public | <strong>getAllowTransfer()</strong> : <em>string</em><br /><em>Returns key: 'AllowTransfer'. Determines whether SIP REFER transfers are allowed for this endpoint</em> |
| public | <strong>getAors()</strong> : <em>string</em><br /><em>Returns key: 'Aors'. AoR(s) to be used with the endpoint</em> |
| public | <strong>getAuth()</strong> : <em>string</em><br /><em>Returns key: 'Auth'. Authentication Object(s) associated with the endpoint</em> |
| public | <strong>getCallGroup()</strong> : <em>string</em><br /><em>Returns key: 'CallGroup'. The numeric pickup groups for a channel.</em> |
| public | <strong>getCallerid()</strong> : <em>string</em><br /><em>Returns key: 'Callerid'. CallerID information for the endpoint</em> |
| public | <strong>getCalleridPrivacy()</strong> : <em>string</em><br /><em>Returns key: 'CalleridPrivacy'. Default privacy level</em> |
| public | <strong>getCalleridTag()</strong> : <em>string</em><br /><em>Returns key: 'CalleridTag'. Internal id_tag for the endpoint</em> |
| public | <strong>getConnectedLineMethod()</strong> : <em>string</em><br /><em>Returns key: 'ConnectedLineMethod'. Connected line method type</em> |
| public | <strong>getContext()</strong> : <em>string</em><br /><em>Returns key: 'Context'. Dialplan context for inbound sessions</em> |
| public | <strong>getCosAudio()</strong> : <em>string</em><br /><em>Returns key: 'CosAudio'. Priority for audio streams</em> |
| public | <strong>getCosVideo()</strong> : <em>string</em><br /><em>Returns key: 'CosVideo'. Priority for video streams</em> |
| public | <strong>getDeviceState()</strong> : <em>string</em><br /><em>Returns key: 'DeviceState'. The aggregate device state for this endpoint.</em> |
| public | <strong>getDeviceStateBusyAt()</strong> : <em>string</em><br /><em>Returns key: 'DeviceStateBusyAt'. The number of in-use channels which will cause busy to be returned as device state</em> |
| public | <strong>getDirectMedia()</strong> : <em>string</em><br /><em>Returns key: 'DirectMedia'. Determines whether media may flow directly between endpoints.</em> |
| public | <strong>getDirectMediaGlareMitigation()</strong> : <em>string</em><br /><em>Returns key: 'DirectMediaGlareMitigation'. Mitigation of direct media (re)INVITE glare</em> |
| public | <strong>getDirectMediaMethod()</strong> : <em>string</em><br /><em>Returns key: 'DirectMediaMethod'. Direct Media method type</em> |
| public | <strong>getDisableDirectMediaOnNat()</strong> : <em>string</em><br /><em>Returns key: 'DisableDirectMediaOnNat'. Disable direct media session refreshes when NAT obstructs the media session</em> |
| public | <strong>getDisallow()</strong> : <em>string</em><br /><em>Returns key: 'Disallow'. Media Codec(s) to disallow</em> |
| public | <strong>getDtlsCaFile()</strong> : <em>string</em><br /><em>Returns key: 'DtlsCaFile'. Path to certificate authority certificate</em> |
| public | <strong>getDtlsCaPath()</strong> : <em>string</em><br /><em>Returns key: 'DtlsCaPath'. Path to a directory containing certificate authority certificates</em> |
| public | <strong>getDtlsCertFile()</strong> : <em>string</em><br /><em>Returns key: 'DtlsCertFile'. Path to certificate file to present to peer</em> |
| public | <strong>getDtlsCipher()</strong> : <em>string</em><br /><em>Returns key: 'DtlsCipher'. Cipher to use for DTLS negotiation</em> |
| public | <strong>getDtlsPrivateKey()</strong> : <em>string</em><br /><em>Returns key: 'DtlsPrivateKey'. Path to private key for certificate file</em> |
| public | <strong>getDtlsRekey()</strong> : <em>string</em><br /><em>Returns key: 'DtlsRekey'. Interval at which to renegotiate the TLS session and rekey the SRTP session</em> |
| public | <strong>getDtlsSetup()</strong> : <em>string</em><br /><em>Returns key: 'DtlsSetup'. Whether we are willing to accept connections, connect to the other party, or both.</em> |
| public | <strong>getDtlsVerify()</strong> : <em>string</em><br /><em>Returns key: 'DtlsVerify'. Verify that the provided peer certificate is valid</em> |
| public | <strong>getDtmfMode()</strong> : <em>string</em><br /><em>Returns key: 'DtmfMode'. DTMF mode</em> |
| public | <strong>getFaxDetect()</strong> : <em>string</em><br /><em>Returns key: 'FaxDetect'. Whether CNG tone detection is enabled</em> |
| public | <strong>getForceAvp()</strong> : <em>string</em><br /><em>Returns key: 'ForceAvp'. Determines whether res_pjsip will use and enforce usage of AVP, regardless of the RTP profile in use for this endpoint.</em> |
| public | <strong>getForceRport()</strong> : <em>string</em><br /><em>Returns key: 'ForceRport'. Force use of return port</em> |
| public | <strong>getFromDomain()</strong> : <em>string</em><br /><em>Returns key: 'FromDomain'. Domain to user in From header for requests to this endpoint.</em> |
| public | <strong>getFromUser()</strong> : <em>string</em><br /><em>Returns key: 'FromUser'. Username to use in From header for requests to this endpoint.</em> |
| public | <strong>getIceSupport()</strong> : <em>string</em><br /><em>Returns key: 'IceSupport'. Enable the ICE mechanism to help traverse NAT</em> |
| public | <strong>getIdentifyBy()</strong> : <em>string</em><br /><em>Returns key: 'IdentifyBy'. Way(s) for Endpoint to be identified</em> |
| public | <strong>getInbandProgress()</strong> : <em>string</em><br /><em>Returns key: 'InbandProgress'. Determines whether chan_pjsip will indicate ringing using inband progress.</em> |
| public | <strong>getLanguage()</strong> : <em>string</em><br /><em>Returns key: 'Language'. Set the default language to use for channels created for this endpoint.</em> |
| public | <strong>getMailboxes()</strong> : <em>string</em><br /><em>Returns key: 'Mailboxes'. NOTIFY the endpoint when state changes for any of the specified mailboxes</em> |
| public | <strong>getMediaAddress()</strong> : <em>string</em><br /><em>Returns key: 'MediaAddress'. IP address used in SDP for media handling</em> |
| public | <strong>getMediaEncryption()</strong> : <em>string</em><br /><em>Returns key: 'MediaEncryption'. Determines whether res_pjsip will use and enforce usage of media encryption for this endpoint.</em> |
| public | <strong>getMediaEncryptionOptimistic()</strong> : <em>string</em><br /><em>Returns key: 'MediaEncryptionOptimistic'. Determines whether encryption should be used if possible but does not terminate the session if not achieved.</em> |
| public | <strong>getMediaUseReceivedTransport()</strong> : <em>string</em><br /><em>Returns key: 'MediaUseReceivedTransport'. Determines whether res_pjsip will use the media transport received in the offer SDP in the corresponding answer SDP.</em> |
| public | <strong>getMessageContext()</strong> : <em>string</em><br /><em>Returns key: 'MessageContext'. Context to route incoming MESSAGE requests to.</em> |
| public | <strong>getMohSuggest()</strong> : <em>string</em><br /><em>Returns key: 'MohSuggest'. Default Music On Hold class</em> |
| public | <strong>getMwiFromUser()</strong> : <em>string</em><br /><em>Returns key: 'MwiFromUser'. Username to use in From header for unsolicited MWI NOTIFYs to this endpoint.</em> |
| public | <strong>getNamedCallGroup()</strong> : <em>string</em><br /><em>Returns key: 'NamedCallGroup'. The named pickup groups for a channel.</em> |
| public | <strong>getNamedPickupGroup()</strong> : <em>string</em><br /><em>Returns key: 'NamedPickupGroup'. The named pickup groups that a channel can pickup.</em> |
| public | <strong>getObjectName()</strong> : <em>string</em><br /><em>Returns key: 'ObjectName'. The name of this object.</em> |
| public | <strong>getObjectType()</strong> : <em>string</em><br /><em>Returns key: 'ObjectType'. The object's type. This will always be 'endpoint'.</em> |
| public | <strong>getOneTouchRecording()</strong> : <em>string</em><br /><em>Returns key: 'OneTouchRecording'. Determines whether one-touch recording is allowed for this endpoint.</em> |
| public | <strong>getOutboundAuth()</strong> : <em>string</em><br /><em>Returns key: 'OutboundAuth'. Authentication object used for outbound requests</em> |
| public | <strong>getOutboundProxy()</strong> : <em>string</em><br /><em>Returns key: 'OutboundProxy'. Proxy through which to send requests, a full SIP URI must be provided</em> |
| public | <strong>getPickupGroup()</strong> : <em>string</em><br /><em>Returns key: 'PickupGroup'. The numeric pickup groups that a channel can pickup.</em> |
| public | <strong>getRecordOffFeature()</strong> : <em>string</em><br /><em>Returns key: 'RecordOffFeature'. The feature to enact when one-touch recording is turned off.</em> |
| public | <strong>getRecordOnFeature()</strong> : <em>string</em><br /><em>Returns key: 'RecordOnFeature'. The feature to enact when one-touch recording is turned on.</em> |
| public | <strong>getRedirectMethod()</strong> : <em>string</em><br /><em>Returns key: 'RedirectMethod'. How redirects received from an endpoint are handled</em> |
| public | <strong>getRewriteContact()</strong> : <em>string</em><br /><em>Returns key: 'RewriteContact'. Allow Contact header to be rewritten with the source IP address-port</em> |
| public | <strong>getRtpEngine()</strong> : <em>string</em><br /><em>Returns key: 'RtpEngine'. Name of the RTP engine to use for channels created for this endpoint</em> |
| public | <strong>getRtpIpv6()</strong> : <em>string</em><br /><em>Returns key: 'RtpIpv6'. Allow use of IPv6 for RTP traffic</em> |
| public | <strong>getRtpSymmetric()</strong> : <em>string</em><br /><em>Returns key: 'RtpSymmetric'. Enforce that RTP must be symmetric</em> |
| public | <strong>getSdpOwner()</strong> : <em>string</em><br /><em>Returns key: 'SdpOwner'. String placed as the username portion of an SDP origin (o=) line.</em> |
| public | <strong>getSdpSession()</strong> : <em>string</em><br /><em>Returns key: 'SdpSession'. String used for the SDP session (s=) line.</em> |
| public | <strong>getSendDiversion()</strong> : <em>string</em><br /><em>Returns key: 'SendDiversion'. Send the Diversion header, conveying the diversion information to the called user agent</em> |
| public | <strong>getSendPai()</strong> : <em>string</em><br /><em>Returns key: 'SendPai'. Send the P-Asserted-Identity header</em> |
| public | <strong>getSendRpid()</strong> : <em>string</em><br /><em>Returns key: 'SendRpid'. Send the Remote-Party-ID header</em> |
| public | <strong>getSetVar()</strong> : <em>string</em><br /><em>Returns key: 'SetVar'. Variable set on a channel involving the endpoint.</em> |
| public | <strong>getSrtpTag32()</strong> : <em>string</em><br /><em>Returns key: 'SrtpTag32'. Determines whether 32 byte tags should be used instead of 80 byte tags.</em> |
| public | <strong>getSubMinExpiry()</strong> : <em>string</em><br /><em>Returns key: 'SubMinExpiry'. The minimum allowed expiry time for subscriptions initiated by the endpoint.</em> |
| public | <strong>getT38Udptl()</strong> : <em>string</em><br /><em>Returns key: 'T38Udptl'. Whether T.38 UDPTL support is enabled or not</em> |
| public | <strong>getT38UdptlEc()</strong> : <em>string</em><br /><em>Returns key: 'T38UdptlEc'. T.38 UDPTL error correction method</em> |
| public | <strong>getT38UdptlIpv6()</strong> : <em>string</em><br /><em>Returns key: 'T38UdptlIpv6'. Whether IPv6 is used for UDPTL Sessions</em> |
| public | <strong>getT38UdptlMaxdatagram()</strong> : <em>string</em><br /><em>Returns key: 'T38UdptlMaxdatagram'. T.38 UDPTL maximum datagram size</em> |
| public | <strong>getT38UdptlNat()</strong> : <em>string</em><br /><em>Returns key: 'T38UdptlNat'. Whether NAT support is enabled on UDPTL sessions</em> |
| public | <strong>getTimers()</strong> : <em>string</em><br /><em>Returns key: 'Timers'. Session timers for SIP packets</em> |
| public | <strong>getTimersMinSe()</strong> : <em>string</em><br /><em>Returns key: 'TimersMinSe'. Minimum session timers expiration period</em> |
| public | <strong>getTimersSessExpires()</strong> : <em>string</em><br /><em>Returns key: 'TimersSessExpires'. Maximum session timer expiration period</em> |
| public | <strong>getToneZone()</strong> : <em>string</em><br /><em>Returns key: 'ToneZone'. Set which country's indications to use for channels created for this endpoint.</em> |
| public | <strong>getTosAudio()</strong> : <em>string</em><br /><em>Returns key: 'TosAudio'. DSCP TOS bits for audio streams</em> |
| public | <strong>getTosVideo()</strong> : <em>string</em><br /><em>Returns key: 'TosVideo'. DSCP TOS bits for video streams</em> |
| public | <strong>getTransport()</strong> : <em>string</em><br /><em>Returns key: 'Transport'. Desired transport configuration</em> |
| public | <strong>getTrustIdInbound()</strong> : <em>string</em><br /><em>Returns key: 'TrustIdInbound'. Accept identification information received from this endpoint</em> |
| public | <strong>getTrustIdOutbound()</strong> : <em>string</em><br /><em>Returns key: 'TrustIdOutbound'. Send private identification details to the endpoint.</em> |
| public | <strong>getUseAvpf()</strong> : <em>string</em><br /><em>Returns key: 'UseAvpf'. Determines whether res_pjsip will use and enforce usage of AVPF for this endpoint.</em> |
| public | <strong>getUsePtime()</strong> : <em>string</em><br /><em>Returns key: 'UsePtime'. Use Endpoint's requested packetisation interval</em> |
| public | <strong>getUserEqPhone()</strong> : <em>string</em><br /><em>Returns key: 'UserEqPhone'. Determines whether a user=phone parameter is placed into the request URI if the user is determined to be a phone number</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\EndpointListCompleteEvent

> Provide final information about an endpoint list. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getListItems()</strong> : <em>key: 'ListItems'.</em><br /><em>Shows count of returned items.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\EndpointListEvent

> Event from PJSIPShowEndpoints PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getActiveChannels()</strong> : <em>integer for key: 'ActiveChannels'.</em><br /><em>The number of active channels associated with this endpoint.</em> |
| public | <strong>getAor()</strong> : <em>string key: 'Aor'.</em><br /><em>The aor configurations associated with this endpoint.</em> |
| public | <strong>getAuths()</strong> : <em>string key: 'Auths'.</em><br /><em>The inbound authentication configurations associated with this endpoint.</em> |
| public | <strong>getContacts()</strong> : <em>string</em><br /><em>Returns key: 'Contacts'.</em> |
| public | <strong>getDeviceState()</strong> : <em>string key: 'DeviceState'.</em><br /><em>The aggregate device state for this endpoint.</em> |
| public | <strong>getObjectName()</strong> : <em>string key: 'ObjectName'.</em><br /><em>The name of this object.</em> |
| public | <strong>getObjectType()</strong> : <em>string key: 'ObjectType'</em><br /><em>The object's type. This will always be 'endpoint'.</em> |
| public | <strong>getOutboundAuths()</strong> : <em>string key: 'OutboundAuths'.</em><br /><em>The outbound authentication configurations associated with this endpoint.</em> |
| public | <strong>getTransport()</strong> : <em>string key: 'Transport'.</em><br /><em>The transport configurations associated with this endpoint.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\ExtensionStatusEvent

> Triggered when an extension changes its status. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getContext()</strong> : <em>string</em><br /><em>Returns key: 'Context'.</em> |
| public | <strong>getExtension()</strong> : <em>string</em><br /><em>Returns key: 'Exten'.</em> |
| public | <strong>getHint()</strong> : <em>string</em><br /><em>Returns key: 'Hint'.</em> |
| public | <strong>getPrivilege()</strong> : <em>string</em><br /><em>Returns key: 'Privilege'.</em> |
| public | <strong>getStatus()</strong> : <em>string</em><br /><em>Returns key: 'Status'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\FullyBootedEvent

> Event triggered when ? PHP Version 5

| Visibility | Function |
|:-----------|:---------|

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\HangupEvent

> Triggered when a hangup is detected. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getCallerIDName()</strong> : <em>string</em><br /><em>Returns key: 'CallerIDName'.</em> |
| public | <strong>getCallerIDNum()</strong> : <em>string</em><br /><em>Returns key: 'CallerIDNum'.</em> |
| public | <strong>getCause()</strong> : <em>string</em><br /><em>Returns key: 'Cause'.</em> |
| public | <strong>getCauseText()</strong> : <em>string</em><br /><em>Returns key: 'Cause-txt'.</em> |
| public | <strong>getChannel()</strong> : <em>string</em><br /><em>Returns key: 'Channel'.</em> |
| public | <strong>getPrivilege()</strong> : <em>string</em><br /><em>Returns key: 'Privilege'.</em> |
| public | <strong>getUniqueID()</strong> : <em>string</em><br /><em>Returns key: 'UniqueID'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\HoldEvent

> Event triggered when an extension is put on hold. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getChannel()</strong> : <em>string</em><br /><em>Returns key: 'Channel'.</em> |
| public | <strong>getPrivilege()</strong> : <em>string</em><br /><em>Returns key: 'Privilege'.</em> |
| public | <strong>getStatus()</strong> : <em>string</em><br /><em>Returns key: 'Status'.</em> |
| public | <strong>getUniqueID()</strong> : <em>string</em><br /><em>Returns key: 'UniqueID'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\MusicOnHoldStartEvent

> Event triggered when music on hold has started on a channel. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getAccountCode()</strong> : <em>string</em><br /><em>Returns key: 'AccountCode'.</em> |
| public | <strong>getCallerIDName()</strong> : <em>string</em><br /><em>Returns key: 'CallerIDName'.</em> |
| public | <strong>getCallerIDNum()</strong> : <em>string</em><br /><em>Returns key: 'CallerIDNum'.</em> |
| public | <strong>getChannel()</strong> : <em>string</em><br /><em>Returns key: 'Channel'.</em> |
| public | <strong>getChannelState()</strong> : <em>string</em><br /><em>Returns key: 'ChannelState'.</em> |
| public | <strong>getChannelStateDesc()</strong> : <em>string</em><br /><em>Returns key: 'ChannelStateDesc'.</em> |
| public | <strong>getClass()</strong> : <em>string</em><br /><em>Returns key: 'Class'.</em> |
| public | <strong>getConnectedLineName()</strong> : <em>string</em><br /><em>Returns key: 'ConnectedLineName'.</em> |
| public | <strong>getConnectedLineNum()</strong> : <em>string</em><br /><em>Returns key: 'ConnectedLineNum'.</em> |
| public | <strong>getContext()</strong> : <em>string</em><br /><em>Returns key: 'Context'.</em> |
| public | <strong>getExten()</strong> : <em>string</em><br /><em>Returns key: 'Exten'.</em> |
| public | <strong>getPriority()</strong> : <em>string</em><br /><em>Returns key: 'Priority'.</em> |
| public | <strong>getPrivilege()</strong> : <em>string</em><br /><em>Returns key: 'Privilege'.</em> |
| public | <strong>getUniqueid()</strong> : <em>string</em><br /><em>Returns key: 'Uniqueid'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\MusicOnHoldStopEvent

> Event triggered when music on hold has stopped on a channel. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getAccountCode()</strong> : <em>string</em><br /><em>Returns key: 'AccountCode'.</em> |
| public | <strong>getCallerIDName()</strong> : <em>string</em><br /><em>Returns key: 'CallerIDName'.</em> |
| public | <strong>getCallerIDNum()</strong> : <em>string</em><br /><em>Returns key: 'CallerIDNum'.</em> |
| public | <strong>getChannel()</strong> : <em>string</em><br /><em>Returns key: 'Channel'.</em> |
| public | <strong>getChannelState()</strong> : <em>string</em><br /><em>Returns key: 'ChannelState'.</em> |
| public | <strong>getChannelStateDesc()</strong> : <em>string</em><br /><em>Returns key: 'ChannelStateDesc'.</em> |
| public | <strong>getConnectedLineName()</strong> : <em>string</em><br /><em>Returns key: 'ConnectedLineName'.</em> |
| public | <strong>getConnectedLineNum()</strong> : <em>string</em><br /><em>Returns key: 'ConnectedLineNum'.</em> |
| public | <strong>getContext()</strong> : <em>string</em><br /><em>Returns key: 'Context'.</em> |
| public | <strong>getExten()</strong> : <em>string</em><br /><em>Returns key: 'Exten'.</em> |
| public | <strong>getPriority()</strong> : <em>string</em><br /><em>Returns key: 'Priority'.</em> |
| public | <strong>getPrivilege()</strong> : <em>string</em><br /><em>Returns key: 'Privilege'.</em> |
| public | <strong>getUniqueid()</strong> : <em>string</em><br /><em>Returns key: 'Uniqueid'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\NewAccountCodeEvent

> Triggered when? PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getAccountCode()</strong> : <em>string</em><br /><em>Returns key: 'AccountCode'.</em> |
| public | <strong>getChannel()</strong> : <em>string</em><br /><em>Returns key: 'Channel'.</em> |
| public | <strong>getOldAccountCode()</strong> : <em>string</em><br /><em>Returns key: 'OldAccountCode'.</em> |
| public | <strong>getPrivilege()</strong> : <em>string</em><br /><em>Returns key: 'Privilege'.</em> |
| public | <strong>getUniqueID()</strong> : <em>string</em><br /><em>Returns key: 'UniqueID'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\NewCalleridEvent

> Event triggered when a caller id is used. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getCallerIDName()</strong> : <em>string</em><br /><em>Returns key: 'CallerIDName'.</em> |
| public | <strong>getCallerIDNum()</strong> : <em>string</em><br /><em>Returns key: 'CallerIDNum'.</em> |
| public | <strong>getCallerIdPres()</strong> : <em>string</em><br /><em>Returns key: 'CID-CallingPres'.</em> |
| public | <strong>getChannel()</strong> : <em>string</em><br /><em>Returns key: 'Channel'.</em> |
| public | <strong>getPrivilege()</strong> : <em>string</em><br /><em>Returns key: 'Privilege'.</em> |
| public | <strong>getUniqueID()</strong> : <em>string</em><br /><em>Returns key: 'UniqueID'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\OriginateResponseEvent

> Response from an async originate. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getActionID()</strong> : <em>string</em><br /><em>Returns key: 'ActionID'.</em> |
| public | <strong>getCallerIdName()</strong> : <em>string</em><br /><em>Returns key: 'CallerIdName'.</em> |
| public | <strong>getCallerIdNum()</strong> : <em>string</em><br /><em>Returns key: 'CallerIdNum'.</em> |
| public | <strong>getChannel()</strong> : <em>string</em><br /><em>Returns key: 'Channel'.</em> |
| public | <strong>getContext()</strong> : <em>string</em><br /><em>Returns key: 'Context'.</em> |
| public | <strong>getExten()</strong> : <em>string</em><br /><em>Returns key: 'Exten'.</em> |
| public | <strong>getPrivilege()</strong> : <em>string</em><br /><em>Returns key: 'Privilege'.</em> |
| public | <strong>getReason()</strong> : <em>string</em><br /><em>Returns key: 'Reason'.</em> |
| public | <strong>getResponse()</strong> : <em>string</em><br /><em>Returns key: 'Response'.</em> |
| public | <strong>getUniqueID()</strong> : <em>string</em><br /><em>Returns key: 'UniqueID'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\ParkedCallEvent

> Event triggered when a call is parked. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strike><strong>getCallerIDName()</strong> : <em>string</em></strike><br /><em>DEPRECATED - Deprecated since Asterisk 12. {@use getParkeeCallerIDName()}.</em> |
| public | <strike><strong>getCallerIDNum()</strong> : <em>string</em></strike><br /><em>DEPRECATED - Deprecated since Asterisk 12. {@use getParkeeCallerIDNum()}.</em> |
| public | <strike><strong>getChannel()</strong> : <em>string</em></strike><br /><em>DEPRECATED - Deprecated since Asterisk 12. {@use getParkeeChannel()}.</em> |
| public | <strike><strong>getConnectedLineName()</strong> : <em>string</em></strike><br /><em>DEPRECATED - Deprecated since Asterisk 12. {@use getParkeeConnectedLineName()}.</em> |
| public | <strike><strong>getConnectedLineNum()</strong> : <em>string</em></strike><br /><em>DEPRECATED - Deprecated since Asterisk 12. {@use getParkeeConnectedLineNum()}.</em> |
| public | <strike><strong>getExtension()</strong> : <em>string</em></strike><br /><em>DEPRECATED - Deprecated since Asterisk 12. {@use getParkingSpace()}.</em> |
| public | <strong>getFrom()</strong> : <em>string</em><br /><em>Returns key: 'From'.</em> |
| public | <strong>getParkeeAccountCode()</strong> : <em>string</em><br /><em>Returns key: 'ParkeeAccountCode'.</em> |
| public | <strong>getParkeeCallerIDName()</strong> : <em>string</em><br /><em>Returns key: 'ParkeeCallerIDName'.</em> |
| public | <strong>getParkeeCallerIDNum()</strong> : <em>string</em><br /><em>Returns key: 'ParkeeCallerIDNum'.</em> |
| public | <strong>getParkeeChannel()</strong> : <em>string</em><br /><em>Returns key: 'ParkeeChannel'.</em> |
| public | <strong>getParkeeChannelState()</strong> : <em>string</em><br /><em>Returns key: 'ParkeeChannelState'.</em> |
| public | <strong>getParkeeChannelStateDesc()</strong> : <em>string</em><br /><em>Returns key: 'ParkeeChannelStateDesc'.</em> |
| public | <strong>getParkeeConnectedLineName()</strong> : <em>string</em><br /><em>Returns key: 'ParkeeConnectedLineName'.</em> |
| public | <strong>getParkeeConnectedLineNum()</strong> : <em>string</em><br /><em>Returns key: 'ParkeeConnectedLineNum'.</em> |
| public | <strong>getParkeeContext()</strong> : <em>string</em><br /><em>Returns key: 'ParkeeContext'.</em> |
| public | <strong>getParkeeExten()</strong> : <em>string</em><br /><em>Returns key: 'ParkeeExten'.</em> |
| public | <strong>getParkeePriority()</strong> : <em>string</em><br /><em>Returns key: 'ParkeePriority'.</em> |
| public | <strong>getParkeeUniqueid()</strong> : <em>string</em><br /><em>Returns key: 'ParkeeUniqueid'.</em> |
| public | <strong>getParkerDialString()</strong> : <em>string</em><br /><em>Returns key: 'ParkerDialString'.</em> |
| public | <strong>getParkingDuration()</strong> : <em>string</em><br /><em>Returns key: 'ParkingDuration'.</em> |
| public | <strong>getParkingSpace()</strong> : <em>string</em><br /><em>Returns key: 'ParkingSpace'.</em> |
| public | <strong>getParkingTimeout()</strong> : <em>string</em><br /><em>Returns key: 'ParkingTimeout'.</em> |
| public | <strong>getParkinglot()</strong> : <em>string</em><br /><em>Returns key: 'Parkinglot'.</em> |
| public | <strong>getPrivilege()</strong> : <em>string</em><br /><em>Returns key: 'Privilege'.</em> |
| public | <strike><strong>getTimeout()</strong> : <em>string</em></strike><br /><em>DEPRECATED - Deprecated since Asterisk 12. {@use ParkingTimeout()}.</em> |
| public | <strike><strong>getUniqueID()</strong> : <em>string</em></strike><br /><em>DEPRECATED - Deprecated since Asterisk 12. {@use getParkeeUniqueid()}.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\ParkedCallGiveUpEvent

> Event triggered when a channel leaves a parking lot because it hung up without being answered. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getParkeeAccountCode()</strong> : <em>string</em><br /><em>Returns key: 'ParkeeAccountCode'.</em> |
| public | <strong>getParkeeCallerIDName()</strong> : <em>string</em><br /><em>Returns key: 'ParkeeCallerIDName'.</em> |
| public | <strong>getParkeeCallerIDNum()</strong> : <em>string</em><br /><em>Returns key: 'ParkeeCallerIDNum'.</em> |
| public | <strong>getParkeeChannel()</strong> : <em>string</em><br /><em>Returns key: 'ParkeeChannel'.</em> |
| public | <strong>getParkeeChannelState()</strong> : <em>string</em><br /><em>Returns key: 'ParkeeChannelState'.</em> |
| public | <strong>getParkeeChannelStateDesc()</strong> : <em>string</em><br /><em>Returns key: 'ParkeeChannelStateDesc'.</em> |
| public | <strong>getParkeeConnectedLineName()</strong> : <em>string</em><br /><em>Returns key: 'ParkeeConnectedLineName'.</em> |
| public | <strong>getParkeeConnectedLineNum()</strong> : <em>string</em><br /><em>Returns key: 'ParkeeConnectedLineNum'.</em> |
| public | <strong>getParkeeContext()</strong> : <em>string</em><br /><em>Returns key: 'ParkeeContext'.</em> |
| public | <strong>getParkeeExten()</strong> : <em>string</em><br /><em>Returns key: 'ParkeeExten'.</em> |
| public | <strong>getParkeePriority()</strong> : <em>string</em><br /><em>Returns key: 'ParkeePriority'.</em> |
| public | <strong>getParkeeUniqueid()</strong> : <em>string</em><br /><em>Returns key: 'ParkeeUniqueid'.</em> |
| public | <strong>getParkerAccountCode()</strong> : <em>string</em><br /><em>Returns key: 'ParkerAccountCode'.</em> |
| public | <strong>getParkerCallerIDName()</strong> : <em>string</em><br /><em>Returns key: 'ParkerCallerIDName'.</em> |
| public | <strong>getParkerCallerIDNum()</strong> : <em>string</em><br /><em>Returns key: 'ParkerCallerIDNum'.</em> |
| public | <strong>getParkerChannel()</strong> : <em>string</em><br /><em>Returns key: 'ParkerChannel'.</em> |
| public | <strong>getParkerChannelState()</strong> : <em>string</em><br /><em>Returns key: 'ParkerChannelState'.</em> |
| public | <strong>getParkerChannelStateDesc()</strong> : <em>string</em><br /><em>Returns key: 'ParkerChannelStateDesc'.</em> |
| public | <strong>getParkerConnectedLineName()</strong> : <em>string</em><br /><em>Returns key: 'ParkerConnectedLineName'.</em> |
| public | <strong>getParkerConnectedLineNum()</strong> : <em>string</em><br /><em>Returns key: 'ParkerConnectedLineNum'.</em> |
| public | <strong>getParkerContext()</strong> : <em>string</em><br /><em>Returns key: 'ParkerContext'.</em> |
| public | <strong>getParkerDialString()</strong> : <em>string</em><br /><em>Returns key: 'ParkerDialString'.</em> |
| public | <strong>getParkerExten()</strong> : <em>string</em><br /><em>Returns key: 'ParkerExten'.</em> |
| public | <strong>getParkerPriority()</strong> : <em>string</em><br /><em>Returns key: 'ParkerPriority'.</em> |
| public | <strong>getParkerUniqueid()</strong> : <em>string</em><br /><em>Returns key: 'ParkerUniqueid'.</em> |
| public | <strong>getParkingDuration()</strong> : <em>string</em><br /><em>Returns key: 'ParkingDuration'.</em> |
| public | <strong>getParkingSpace()</strong> : <em>string</em><br /><em>Returns key: 'ParkingSpace'.</em> |
| public | <strong>getParkingTimeout()</strong> : <em>string</em><br /><em>Returns key: 'ParkingTimeout'.</em> |
| public | <strong>getParkinglot()</strong> : <em>string</em><br /><em>Returns key: 'Parkinglot'.</em> |
| public | <strong>getPrivilege()</strong> : <em>string</em><br /><em>Returns key: 'Privilege'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\ParkedCallTimeOutEvent

> Event triggered when a channel leaves a parking lot due to reaching the time limit of being parked. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getParkeeAccountCode()</strong> : <em>string</em><br /><em>Returns key: 'ParkeeAccountCode'.</em> |
| public | <strong>getParkeeCallerIDName()</strong> : <em>string</em><br /><em>Returns key: 'ParkeeCallerIDName'.</em> |
| public | <strong>getParkeeCallerIDNum()</strong> : <em>string</em><br /><em>Returns key: 'ParkeeCallerIDNum'.</em> |
| public | <strong>getParkeeChannel()</strong> : <em>string</em><br /><em>Returns key: 'ParkeeChannel'.</em> |
| public | <strong>getParkeeChannelState()</strong> : <em>string</em><br /><em>Returns key: 'ParkeeChannelState'.</em> |
| public | <strong>getParkeeChannelStateDesc()</strong> : <em>string</em><br /><em>Returns key: 'ParkeeChannelStateDesc'.</em> |
| public | <strong>getParkeeConnectedLineName()</strong> : <em>string</em><br /><em>Returns key: 'ParkeeConnectedLineName'.</em> |
| public | <strong>getParkeeConnectedLineNum()</strong> : <em>string</em><br /><em>Returns key: 'ParkeeConnectedLineNum'.</em> |
| public | <strong>getParkeeContext()</strong> : <em>string</em><br /><em>Returns key: 'ParkeeContext'.</em> |
| public | <strong>getParkeeExten()</strong> : <em>string</em><br /><em>Returns key: 'ParkeeExten'.</em> |
| public | <strong>getParkeePriority()</strong> : <em>string</em><br /><em>Returns key: 'ParkeePriority'.</em> |
| public | <strong>getParkeeUniqueid()</strong> : <em>string</em><br /><em>Returns key: 'ParkeeUniqueid'.</em> |
| public | <strong>getParkerAccountCode()</strong> : <em>string</em><br /><em>Returns key: 'ParkerAccountCode'.</em> |
| public | <strong>getParkerCallerIDName()</strong> : <em>string</em><br /><em>Returns key: 'ParkerCallerIDName'.</em> |
| public | <strong>getParkerCallerIDNum()</strong> : <em>string</em><br /><em>Returns key: 'ParkerCallerIDNum'.</em> |
| public | <strong>getParkerChannel()</strong> : <em>string</em><br /><em>Returns key: 'ParkerChannel'.</em> |
| public | <strong>getParkerChannelState()</strong> : <em>string</em><br /><em>Returns key: 'ParkerChannelState'.</em> |
| public | <strong>getParkerChannelStateDesc()</strong> : <em>string</em><br /><em>Returns key: 'ParkerChannelStateDesc'.</em> |
| public | <strong>getParkerConnectedLineName()</strong> : <em>string</em><br /><em>Returns key: 'ParkerConnectedLineName'.</em> |
| public | <strong>getParkerConnectedLineNum()</strong> : <em>string</em><br /><em>Returns key: 'ParkerConnectedLineNum'.</em> |
| public | <strong>getParkerContext()</strong> : <em>string</em><br /><em>Returns key: 'ParkerContext'.</em> |
| public | <strong>getParkerDialString()</strong> : <em>string</em><br /><em>Returns key: 'ParkerDialString'.</em> |
| public | <strong>getParkerExten()</strong> : <em>string</em><br /><em>Returns key: 'ParkerExten'.</em> |
| public | <strong>getParkerPriority()</strong> : <em>string</em><br /><em>Returns key: 'ParkerPriority'.</em> |
| public | <strong>getParkerUniqueid()</strong> : <em>string</em><br /><em>Returns key: 'ParkerUniqueid'.</em> |
| public | <strong>getParkingDuration()</strong> : <em>string</em><br /><em>Returns key: 'ParkingDuration'.</em> |
| public | <strong>getParkingSpace()</strong> : <em>string</em><br /><em>Returns key: 'ParkingSpace'.</em> |
| public | <strong>getParkingTimeout()</strong> : <em>string</em><br /><em>Returns key: 'ParkingTimeout'.</em> |
| public | <strong>getParkinglot()</strong> : <em>string</em><br /><em>Returns key: 'Parkinglot'.</em> |
| public | <strong>getPrivilege()</strong> : <em>string</em><br /><em>Returns key: 'Privilege'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\PeerStatusEvent

> Event triggered when a peer changes its status. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getChannelType()</strong> : <em>string</em><br /><em>Returns key: 'ChannelType'.</em> |
| public | <strong>getPeer()</strong> : <em>string</em><br /><em>Returns key: 'Peer'.</em> |
| public | <strong>getPeerStatus()</strong> : <em>string</em><br /><em>Returns key: 'PeerStatus'.</em> |
| public | <strong>getPrivilege()</strong> : <em>string</em><br /><em>Returns key: 'Privilege'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\QueueCallerAbandonEvent

> Event triggered when a caller abandons the queue. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getAccountCode()</strong> : <em>string</em><br /><em>Returns key: 'AccountCode'.</em> |
| public | <strong>getCallerIDName()</strong> : <em>string</em><br /><em>Returns key: 'CallerIDName'.</em> |
| public | <strong>getCallerIDNum()</strong> : <em>string</em><br /><em>Returns key: 'CallerIDNum'.</em> |
| public | <strong>getChannel()</strong> : <em>string</em><br /><em>Returns key: 'Channel'.</em> |
| public | <strong>getChannelState()</strong> : <em>string</em><br /><em>Returns key: 'ChannelState'.</em> |
| public | <strong>getChannelStateDesc()</strong> : <em>string</em><br /><em>Returns key: 'ChannelStateDesc'.</em> |
| public | <strong>getConnectedLineName()</strong> : <em>string</em><br /><em>Returns key: 'ConnectedLineName'.</em> |
| public | <strong>getConnectedLineNum()</strong> : <em>string</em><br /><em>Returns key: 'ConnectedLineNum'.</em> |
| public | <strong>getContext()</strong> : <em>string</em><br /><em>Returns key: 'Context'.</em> |
| public | <strong>getExten()</strong> : <em>string</em><br /><em>Returns key: 'Exten'.</em> |
| public | <strong>getHoldTime()</strong> : <em>string</em><br /><em>Returns key: 'HoldTime'.</em> |
| public | <strong>getOriginalPosition()</strong> : <em>string</em><br /><em>Returns key: 'OriginalPosition'.</em> |
| public | <strong>getPosition()</strong> : <em>string</em><br /><em>Returns key: 'Position'.</em> |
| public | <strong>getPriority()</strong> : <em>string</em><br /><em>Returns key: 'Priority'.</em> |
| public | <strong>getPrivilege()</strong> : <em>string</em><br /><em>Returns key: 'Privilege'.</em> |
| public | <strong>getQueue()</strong> : <em>string</em><br /><em>Returns key: 'Queue'.</em> |
| public | <strong>getUniqueID()</strong> : <em>string</em><br /><em>Returns key: 'UniqueID'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\QueueCallerJoinEvent

> Event triggered when a caller joins a Queue. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getAccountCode()</strong> : <em>string</em><br /><em>Returns key: 'AccountCode'.</em> |
| public | <strong>getCallerIdName()</strong> : <em>string</em><br /><em>Returns key: 'CallerIdName'.</em> |
| public | <strong>getCallerIdNum()</strong> : <em>string</em><br /><em>Returns key: 'CallerIdNum'.</em> |
| public | <strong>getChannel()</strong> : <em>string</em><br /><em>Returns key: 'Channel'.</em> |
| public | <strong>getChannelState()</strong> : <em>string</em><br /><em>Returns key: 'ChannelState'.</em> |
| public | <strong>getChannelStateDesc()</strong> : <em>string</em><br /><em>Returns key: 'ChannelStateDesc'.</em> |
| public | <strong>getConnectedLineName()</strong> : <em>string</em><br /><em>Returns key: 'ConnectedLineName'.</em> |
| public | <strong>getConnectedLineNum()</strong> : <em>string</em><br /><em>Returns key: 'ConnectedLineNum'.</em> |
| public | <strong>getContext()</strong> : <em>string</em><br /><em>Returns key: 'Context'.</em> |
| public | <strong>getCount()</strong> : <em>string</em><br /><em>Returns key: 'Count'.</em> |
| public | <strong>getExten()</strong> : <em>string</em><br /><em>Returns key: 'Exten'.</em> |
| public | <strong>getPosition()</strong> : <em>string</em><br /><em>Returns key: 'Position'.</em> |
| public | <strong>getPriority()</strong> : <em>string</em><br /><em>Returns key: 'Priority'.</em> |
| public | <strong>getPrivilege()</strong> : <em>string</em><br /><em>Returns key: 'Privilege'.</em> |
| public | <strong>getQueue()</strong> : <em>string</em><br /><em>Returns key: 'Queue'.</em> |
| public | <strong>getUniqueID()</strong> : <em>string</em><br /><em>Returns key: 'UniqueID'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\QueueCallerLeaveEvent

> Event triggered when a caller leaves a Queue. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getAccountCode()</strong> : <em>string</em><br /><em>Returns key: 'AccountCode'.</em> |
| public | <strong>getCallerIdName()</strong> : <em>string</em><br /><em>Returns key: 'CallerIdName'.</em> |
| public | <strong>getCallerIdNum()</strong> : <em>string</em><br /><em>Returns key: 'CallerIdNum'.</em> |
| public | <strong>getChannel()</strong> : <em>string</em><br /><em>Returns key: 'Channel'.</em> |
| public | <strong>getChannelState()</strong> : <em>string</em><br /><em>Returns key: 'ChannelState'.</em> |
| public | <strong>getChannelStateDesc()</strong> : <em>string</em><br /><em>Returns key: 'ChannelStateDesc'.</em> |
| public | <strong>getConnectedLineName()</strong> : <em>string</em><br /><em>Returns key: 'ConnectedLineName'.</em> |
| public | <strong>getConnectedLineNum()</strong> : <em>string</em><br /><em>Returns key: 'ConnectedLineNum'.</em> |
| public | <strong>getContext()</strong> : <em>string</em><br /><em>Returns key: 'Context'.</em> |
| public | <strong>getCount()</strong> : <em>string</em><br /><em>Returns key: 'Count'.</em> |
| public | <strong>getExten()</strong> : <em>string</em><br /><em>Returns key: 'Exten'.</em> |
| public | <strong>getPosition()</strong> : <em>string</em><br /><em>Returns key: 'Position'.</em> |
| public | <strong>getPriority()</strong> : <em>string</em><br /><em>Returns key: 'Priority'.</em> |
| public | <strong>getPrivilege()</strong> : <em>string</em><br /><em>Returns key: 'Privilege'.</em> |
| public | <strong>getQueue()</strong> : <em>string</em><br /><em>Returns key: 'Queue'.</em> |
| public | <strong>getUniqueID()</strong> : <em>string</em><br /><em>Returns key: 'UniqueID'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\QueueMemberAddedEvent

> Event triggered for a QueueMemberAdd action. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getCallsTaken()</strong> : <em>integer</em><br /><em>Returns key: 'CallsTaken'.</em> |
| public | <strong>getLastCall()</strong> : <em>integer</em><br /><em>Returns key: 'LastCall'.</em> |
| public | <strong>getLocation()</strong> : <em>string</em><br /><em>Returns key: 'Location'.</em> |
| public | <strong>getMemberName()</strong> : <em>string</em><br /><em>Returns key: 'MemberName'.</em> |
| public | <strong>getMembership()</strong> : <em>string</em><br /><em>Returns key: 'Membership'.</em> |
| public | <strong>getPaused()</strong> : <em>boolean</em><br /><em>Returns key: 'Pause'.</em> |
| public | <strong>getPenalty()</strong> : <em>integer</em><br /><em>Returns key: 'Penalty'.</em> |
| public | <strong>getPrivilege()</strong> : <em>string</em><br /><em>Returns key: 'Privilege'.</em> |
| public | <strong>getQueue()</strong> : <em>string</em><br /><em>Returns key: 'Queue'.</em> |
| public | <strong>getStatus()</strong> : <em>integer</em><br /><em>Returns key: 'Status'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\QueueMemberRemovedEvent

> Event triggered for a QueueMemberRemove action. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getLocation()</strong> : <em>string</em><br /><em>Returns key: 'Location'.</em> |
| public | <strong>getMemberName()</strong> : <em>string</em><br /><em>Returns key: 'MemberName'.</em> |
| public | <strong>getPrivilege()</strong> : <em>string</em><br /><em>Returns key: 'Privilege'.</em> |
| public | <strong>getQueue()</strong> : <em>string</em><br /><em>Returns key: 'Queue'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\QueueMemberStatusEvent

> Event triggered for a status change in a queue. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getCallsTaken()</strong> : <em>integer</em><br /><em>Returns key: 'CallsTaken'.</em> |
| public | <strong>getLocation()</strong> : <em>string</em><br /><em>Returns key: 'Location'.</em> |
| public | <strong>getMemberName()</strong> : <em>string</em><br /><em>Returns key: 'MemberName'.</em> |
| public | <strong>getMembership()</strong> : <em>string</em><br /><em>Returns key: 'Membership'.</em> |
| public | <strong>getPause()</strong> : <em>boolean</em><br /><em>Returns key: 'Paused'.</em> |
| public | <strong>getPenalty()</strong> : <em>integer</em><br /><em>Returns key: 'Penalty'.</em> |
| public | <strong>getPrivilege()</strong> : <em>string</em><br /><em>Returns key: 'Privilege'.</em> |
| public | <strong>getQueue()</strong> : <em>string</em><br /><em>Returns key: 'Queue'.</em> |
| public | <strong>getStatus()</strong> : <em>integer</em><br /><em>Returns key: 'Status'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\RTCPReceivedEvent

> Event triggered when exchanging rtp stats. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getDLSR()</strong> : <em>string</em><br /><em>Returns key: 'DLSR'.</em> |
| public | <strong>getFractionLost()</strong> : <em>string</em><br /><em>Returns key: 'FractionLost'.</em> |
| public | <strong>getFrom()</strong> : <em>string</em><br /><em>Returns key: 'From'.</em> |
| public | <strong>getHighestSequence()</strong> : <em>string</em><br /><em>Returns key: 'HighestSequence'.</em> |
| public | <strong>getIAJitter()</strong> : <em>string</em><br /><em>Returns key: 'IAJitter'.</em> |
| public | <strong>getLastSR()</strong> : <em>string</em><br /><em>Returns key: 'LastSR'.</em> |
| public | <strong>getPT()</strong> : <em>string</em><br /><em>Returns key: 'PT'.</em> |
| public | <strong>getPacketsLost()</strong> : <em>string</em><br /><em>Returns key: 'PacketsLost'.</em> |
| public | <strong>getPrivilege()</strong> : <em>string</em><br /><em>Returns key: 'Privilege'.</em> |
| public | <strong>getRTT()</strong> : <em>string</em><br /><em>Returns key: 'RTT'.</em> |
| public | <strong>getReceptionReports()</strong> : <em>string</em><br /><em>Returns key: 'ReceptionReports'.</em> |
| public | <strong>getSenderSSRC()</strong> : <em>string</em><br /><em>Returns key: 'SenderSSRC'.</em> |
| public | <strong>getSequenceNumberCycles()</strong> : <em>string</em><br /><em>Returns key: 'SequenceNumberCycles'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\RTCPSentEvent

> Event triggered when exchanging rtp stats. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getCumulativeLoss()</strong> : <em>string</em><br /><em>Returns key: 'CumulativeLoss'.</em> |
| public | <strong>getDLSR()</strong> : <em>string</em><br /><em>Returns key: 'DLSR'.</em> |
| public | <strong>getFractionLost()</strong> : <em>string</em><br /><em>Returns key: 'FractionLost'.</em> |
| public | <strong>getIAJitter()</strong> : <em>string</em><br /><em>Returns key: 'IAJitter'.</em> |
| public | <strong>getOurSSRC()</strong> : <em>string</em><br /><em>Returns key: 'OurSSRC'.</em> |
| public | <strong>getPrivilege()</strong> : <em>string</em><br /><em>Returns key: 'Privilege'.</em> |
| public | <strong>getReportBlock()</strong> : <em>string</em><br /><em>Returns key: 'ReportBlock'.</em> |
| public | <strong>getSentNTP()</strong> : <em>string</em><br /><em>Returns key: 'SentNTP'.</em> |
| public | <strong>getSentOctets()</strong> : <em>string</em><br /><em>Returns key: 'SentOctets'.</em> |
| public | <strong>getSentPackets()</strong> : <em>string</em><br /><em>Returns key: 'SentPackets'.</em> |
| public | <strong>getSentRTP()</strong> : <em>string</em><br /><em>Returns key: 'SentRTP'.</em> |
| public | <strong>getTheirLastSR()</strong> : <em>string</em><br /><em>Returns key: 'TheirLastSR'.</em> |
| public | <strong>getTo()</strong> : <em>string</em><br /><em>Returns key: 'To'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\RegistryEvent

> Registry event. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getChannel()</strong> : <em>string</em><br /><em>Returns key: 'Channel'.</em> |
| public | <strong>getDomain()</strong> : <em>string</em><br /><em>Returns key: 'Domain'.</em> |
| public | <strong>getStatus()</strong> : <em>string</em><br /><em>Returns key: 'Status'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\ReloadEvent

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getRawContent()</strong> : <em>string</em><br /><em>Returns key: 'RawContent'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\RequestBadFormatEvent

> Event triggered when an agent logs in. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getAccountID()</strong> : <em>string</em><br /><em>Returns key: 'AccountID'.</em> |
| public | <strong>getEventTV()</strong> : <em>string</em><br /><em>Returns key: 'EventTV'.</em> |
| public | <strong>getEventVersion()</strong> : <em>int</em><br /><em>Returns key: 'EventVersion'.</em> |
| public | <strong>getFile()</strong> : <em>string</em><br /><em>Returns key: 'File'.</em> |
| public | <strong>getFunc()</strong> : <em>string</em><br /><em>Returns key: 'Func'.</em> |
| public | <strong>getLine()</strong> : <em>int</em><br /><em>Returns key: 'Line'.</em> |
| public | <strong>getLocalAddress()</strong> : <em>string</em><br /><em>Returns key: 'LocalAddress'.</em> |
| public | <strong>getPrivilege()</strong> : <em>string</em><br /><em>Returns key: 'Privilege'.</em> |
| public | <strong>getRemoteAddress()</strong> : <em>string</em><br /><em>Returns key: 'RemoteAddress'.</em> |
| public | <strong>getSequenceNumber()</strong> : <em>int</em><br /><em>Returns key: 'SequenceNumber'.</em> |
| public | <strong>getService()</strong> : <em>string</em><br /><em>Returns key: 'Service'.</em> |
| public | <strong>getSessionID()</strong> : <em>string</em><br /><em>Returns key: 'SessionID'.</em> |
| public | <strong>getSessionTV()</strong> : <em>string</em><br /><em>Returns key: 'SessionTV'.</em> |
| public | <strong>getSeverity()</strong> : <em>string</em><br /><em>Returns key: 'Severity'.</em> |
| public | <strong>getUsingPassword()</strong> : <em>boolean</em><br /><em>Returns key: 'UsingPassword'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\StatusCompleteEvent

> Event triggered for the end of the list when an action Status is issued. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getListItems()</strong> : <em>string</em><br /><em>Returns key: 'Items'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\StatusEvent

> Event triggered when an action Status is issued. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getAccountCode()</strong> : <em>string</em><br /><em>Returns key: 'AccountCode'.</em> |
| public | <strong>getApplication()</strong> : <em>string</em><br /><em>Returns key: 'Application'.</em> |
| public | <strong>getApplicationData()</strong> : <em>string</em><br /><em>Returns key: 'ApplicationData'.</em> |
| public | <strong>getBridgedChannel()</strong> : <em>string</em><br /><em>Returns key: 'BridgedChannel'.</em> |
| public | <strong>getBridgedUniqueID()</strong> : <em>string</em><br /><em>Returns key: 'BridgedUniqueID'.</em> |
| public | <strong>getCallerIDNum()</strong> : <em>string</em><br /><em>Returns key: 'CallerIDNum'.</em> |
| public | <strong>getChannel()</strong> : <em>string</em><br /><em>Returns key: 'Channel'.</em> |
| public | <strong>getChannelState()</strong> : <em>string</em><br /><em>Returns key: 'ChannelState'.</em> |
| public | <strong>getChannelStateDesc()</strong> : <em>string</em><br /><em>Returns key: 'ChannelStateDesc'.</em> |
| public | <strong>getContext()</strong> : <em>string</em><br /><em>Returns key: 'Context'.</em> |
| public | <strong>getDuration()</strong> : <em>string</em><br /><em>Returns key: 'Duration'.</em> |
| public | <strong>getExtension()</strong> : <em>string</em><br /><em>Returns key: 'Extension'.</em> |
| public | <strong>getPriority()</strong> : <em>string</em><br /><em>Returns key: 'Priority'.</em> |
| public | <strong>getPrivilege()</strong> : <em>string</em><br /><em>Returns key: 'Privilege'.</em> |
| public | <strong>getSeconds()</strong> : <em>string</em><br /><em>Returns key: 'Seconds'.</em> |
| public | <strong>getUniqueID()</strong> : <em>string</em><br /><em>Returns key: 'UniqueID'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\SuccessfulAuthEvent

> Event triggered when an agent logs in. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getAccountID()</strong> : <em>string</em><br /><em>Returns key: 'AccountID'.</em> |
| public | <strong>getEventTV()</strong> : <em>string</em><br /><em>Returns key: 'EventTV'.</em> |
| public | <strong>getEventVersion()</strong> : <em>int</em><br /><em>Returns key: 'EventVersion'.</em> |
| public | <strong>getFile()</strong> : <em>string</em><br /><em>Returns key: 'File'.</em> |
| public | <strong>getFunc()</strong> : <em>string</em><br /><em>Returns key: 'Func'.</em> |
| public | <strong>getLine()</strong> : <em>int</em><br /><em>Returns key: 'Line'.</em> |
| public | <strong>getLocalAddress()</strong> : <em>string</em><br /><em>Returns key: 'LocalAddress'.</em> |
| public | <strong>getPrivilege()</strong> : <em>string</em><br /><em>Returns key: 'Privilege'.</em> |
| public | <strong>getRemoteAddress()</strong> : <em>string</em><br /><em>Returns key: 'RemoteAddress'.</em> |
| public | <strong>getSequenceNumber()</strong> : <em>int</em><br /><em>Returns key: 'SequenceNumber'.</em> |
| public | <strong>getService()</strong> : <em>string</em><br /><em>Returns key: 'Service'.</em> |
| public | <strong>getSessionID()</strong> : <em>string</em><br /><em>Returns key: 'SessionID'.</em> |
| public | <strong>getSessionTV()</strong> : <em>string</em><br /><em>Returns key: 'SessionTV'.</em> |
| public | <strong>getSeverity()</strong> : <em>string</em><br /><em>Returns key: 'Severity'.</em> |
| public | <strong>getUsingPassword()</strong> : <em>boolean</em><br /><em>Returns key: 'UsingPassword'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\TransportDetailEvent

> Event triggered when an agent logs in. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getAsycOperations()</strong> : <em>string</em><br /><em>Returns key: 'AsycOperations'. Number of simultaneous Asynchronous Operations</em> |
| public | <strong>getBind()</strong> : <em>string</em><br /><em>Returns key: 'Bind'. IP Address and optional port to bind to for this transport</em> |
| public | <strong>getCaListFile()</strong> : <em>string</em><br /><em>Returns key: 'CaListFile'. File containing a list of certificates to read (TLS ONLY)</em> |
| public | <strong>getCaListPath()</strong> : <em>string</em><br /><em>Returns key: 'CaListPath'. Path to directory containing a list of certificates to read (TLSONLY)</em> |
| public | <strong>getCertFile()</strong> : <em>string</em><br /><em>Returns key: 'CertFile'. Certificate file for endpoint (TLS ONLY)</em> |
| public | <strong>getCipher()</strong> : <em>string</em><br /><em>Returns key: 'Cipher'. Preferred cryptography cipher names (TLS ONLY)</em> |
| public | <strong>getCos()</strong> : <em>string</em><br /><em>Returns key: 'Cos'. Enable COS for the signalling sent over this transport</em> |
| public | <strong>getDomain()</strong> : <em>string</em><br /><em>Returns key: 'Domain'. Domain the transport comes from</em> |
| public | <strong>getEndpointName()</strong> : <em>string</em><br /><em>Returns key: 'EndpointName'. The name of the endpoint associated with this information.</em> |
| public | <strong>getExternalMediaAddress()</strong> : <em>string</em><br /><em>Returns key: 'ExternalMediaAddress'. External IP address to use in RTP handling</em> |
| public | <strong>getExternalSignalingAddress()</strong> : <em>string</em><br /><em>Returns key: 'ExternalSignalingAddress'. External address for SIP signalling</em> |
| public | <strong>getExternalSignalingPort()</strong> : <em>string</em><br /><em>Returns key: 'ExternalSignalingPort'. External port for SIP signalling</em> |
| public | <strong>getLocalNet()</strong> : <em>string</em><br /><em>Returns key: 'LocalNet'. Network to consider local (used for NAT purposes).</em> |
| public | <strong>getMethod()</strong> : <em>string</em><br /><em>Returns key: 'Method'. Method of SSL transport (TLS ONLY)</em> |
| public | <strong>getObjectName()</strong> : <em>string</em><br /><em>Returns key: 'ObjectName'. The name of this object.</em> |
| public | <strong>getObjectType()</strong> : <em>string</em><br /><em>Returns key: 'ObjectType'. The object's type. This will always be 'transport'.</em> |
| public | <strong>getPassword()</strong> : <em>string</em><br /><em>Returns key: 'Password'. Password required for transport</em> |
| public | <strong>getPrivKeyFile()</strong> : <em>string</em><br /><em>Returns key: 'PrivKeyFile'. Private key file (TLS ONLY)</em> |
| public | <strong>getProtocol()</strong> : <em>string</em><br /><em>Returns key: 'Protocol'. Protocol to use for SIP traffic</em> |
| public | <strong>getRequireClientCert()</strong> : <em>string</em><br /><em>Returns key: 'RequireClientCert'. Require client certificate (TLS ONLY)</em> |
| public | <strong>getTos()</strong> : <em>string</em><br /><em>Returns key: 'Tos'. Enable TOS for the signalling sent over this transport</em> |
| public | <strong>getVerifyClient()</strong> : <em>string</em><br /><em>Returns key: 'VerifyClient'. Require verification of client certificate (TLS ONLY)</em> |
| public | <strong>getVerifyServer()</strong> : <em>string</em><br /><em>Returns key: 'VerifyServer'. Require verification of server certificate (TLS ONLY)</em> |
| public | <strong>getWebsocketWriteTimeout()</strong> : <em>string</em><br /><em>Returns key: 'WebsocketWriteTimeout'. The timeout (in milliseconds) to set on WebSocket connections.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\UnParkedCallEvent

> Event triggered when a call is unparked. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strike><strong>getCallerIDName()</strong> : <em>string</em></strike><br /><em>DEPRECATED - Deprecated since Asterisk 12. {@use getParkeeCallerIDName()}.</em> |
| public | <strike><strong>getCallerIDNum()</strong> : <em>string</em></strike><br /><em>DEPRECATED - Deprecated since Asterisk 12. {@use getParkeeCallerIDNum()}.</em> |
| public | <strike><strong>getChannel()</strong> : <em>string</em></strike><br /><em>DEPRECATED - Deprecated since Asterisk 12. {@use getParkeeChannel()}.</em> |
| public | <strike><strong>getConnectedLineName()</strong> : <em>string</em></strike><br /><em>DEPRECATED - Deprecated since Asterisk 12. {@use getParkeeConnectedLineName()}.</em> |
| public | <strike><strong>getConnectedLineNum()</strong> : <em>string</em></strike><br /><em>DEPRECATED - Deprecated since Asterisk 12. {@use getParkeeConnectedLineNum()}.</em> |
| public | <strike><strong>getExtension()</strong> : <em>string</em></strike><br /><em>DEPRECATED - Deprecated since Asterisk 12. {@use getParkingSpace()}.</em> |
| public | <strike><strong>getFrom()</strong> : <em>string</em></strike><br /><em>DEPRECATED - Deprecated since Asterisk 12. {@use getRetrieverChannel()}.</em> |
| public | <strong>getParkeeAccountCode()</strong> : <em>string</em><br /><em>Returns key: 'ParkeeAccountCode'.</em> |
| public | <strong>getParkeeCallerIDName()</strong> : <em>string</em><br /><em>Returns key: 'ParkeeCallerIDName'.</em> |
| public | <strong>getParkeeCallerIDNum()</strong> : <em>string</em><br /><em>Returns key: 'ParkeeCallerIDNum'.</em> |
| public | <strong>getParkeeChannel()</strong> : <em>string</em><br /><em>Returns key: 'ParkeeChannel'.</em> |
| public | <strong>getParkeeChannelState()</strong> : <em>string</em><br /><em>Returns key: 'ParkeeChannelState'.</em> |
| public | <strong>getParkeeChannelStateDesc()</strong> : <em>string</em><br /><em>Returns key: 'ParkeeChannelStateDesc'.</em> |
| public | <strong>getParkeeConnectedLineName()</strong> : <em>string</em><br /><em>Returns key: 'ParkeeConnectedLineName'.</em> |
| public | <strong>getParkeeConnectedLineNum()</strong> : <em>string</em><br /><em>Returns key: 'ParkeeConnectedLineNum'.</em> |
| public | <strong>getParkeeContext()</strong> : <em>string</em><br /><em>Returns key: 'ParkeeContext'.</em> |
| public | <strong>getParkeeExten()</strong> : <em>string</em><br /><em>Returns key: 'ParkeeExten'.</em> |
| public | <strong>getParkeePriority()</strong> : <em>string</em><br /><em>Returns key: 'ParkeePriority'.</em> |
| public | <strong>getParkeeUniqueid()</strong> : <em>string</em><br /><em>Returns key: 'ParkeeUniqueid'.</em> |
| public | <strong>getParkerAccountCode()</strong> : <em>string</em><br /><em>Returns key: 'ParkerAccountCode'.</em> |
| public | <strong>getParkerCallerIDName()</strong> : <em>string</em><br /><em>Returns key: 'ParkerCallerIDName'.</em> |
| public | <strong>getParkerCallerIDNum()</strong> : <em>string</em><br /><em>Returns key: 'ParkerCallerIDNum'.</em> |
| public | <strong>getParkerChannel()</strong> : <em>string</em><br /><em>Returns key: 'ParkerChannel'.</em> |
| public | <strong>getParkerChannelState()</strong> : <em>string</em><br /><em>Returns key: 'ParkerChannelState'.</em> |
| public | <strong>getParkerChannelStateDesc()</strong> : <em>string</em><br /><em>Returns key: 'ParkerChannelStateDesc'.</em> |
| public | <strong>getParkerConnectedLineName()</strong> : <em>string</em><br /><em>Returns key: 'ParkerConnectedLineName'.</em> |
| public | <strong>getParkerConnectedLineNum()</strong> : <em>string</em><br /><em>Returns key: 'ParkerConnectedLineNum'.</em> |
| public | <strong>getParkerContext()</strong> : <em>string</em><br /><em>Returns key: 'ParkerContext'.</em> |
| public | <strong>getParkerDialString()</strong> : <em>string</em><br /><em>Returns key: 'ParkerDialString'.</em> |
| public | <strong>getParkerExten()</strong> : <em>string</em><br /><em>Returns key: 'ParkerExten'.</em> |
| public | <strong>getParkerPriority()</strong> : <em>string</em><br /><em>Returns key: 'ParkerPriority'.</em> |
| public | <strong>getParkerUniqueid()</strong> : <em>string</em><br /><em>Returns key: 'ParkerUniqueid'.</em> |
| public | <strong>getParkingDuration()</strong> : <em>string</em><br /><em>Returns key: 'ParkingDuration'.</em> |
| public | <strong>getParkingSpace()</strong> : <em>string</em><br /><em>Returns key: 'ParkingSpace'.</em> |
| public | <strong>getParkingTimeout()</strong> : <em>string</em><br /><em>Returns key: 'ParkingTimeout'.</em> |
| public | <strong>getParkinglot()</strong> : <em>string</em><br /><em>Returns key: 'Parkinglot'.</em> |
| public | <strong>getPrivilege()</strong> : <em>string</em><br /><em>Returns key: 'Privilege'.</em> |
| public | <strong>getRetrieverAccountCode()</strong> : <em>string</em><br /><em>Returns key: 'RetrieverAccountCode'.</em> |
| public | <strong>getRetrieverCallerIDName()</strong> : <em>string</em><br /><em>Returns key: 'RetrieverCallerIDName'.</em> |
| public | <strong>getRetrieverCallerIDNum()</strong> : <em>string</em><br /><em>Returns key: 'RetrieverCallerIDNum'.</em> |
| public | <strong>getRetrieverChannel()</strong> : <em>string</em><br /><em>Returns key: 'RetrieverChannel'.</em> |
| public | <strong>getRetrieverChannelState()</strong> : <em>string</em><br /><em>Returns key: 'RetrieverChannelState'.</em> |
| public | <strong>getRetrieverChannelStateDesc()</strong> : <em>string</em><br /><em>Returns key: 'RetrieverChannelStateDesc'.</em> |
| public | <strong>getRetrieverConnectedLineName()</strong> : <em>string</em><br /><em>Returns key: 'RetrieverConnectedLineName'.</em> |
| public | <strong>getRetrieverConnectedLineNum()</strong> : <em>string</em><br /><em>Returns key: 'RetrieverConnectedLineNum'.</em> |
| public | <strong>getRetrieverContext()</strong> : <em>string</em><br /><em>Returns key: 'RetrieverContext'.</em> |
| public | <strong>getRetrieverExten()</strong> : <em>string</em><br /><em>Returns key: 'RetrieverExten'.</em> |
| public | <strong>getRetrieverPriority()</strong> : <em>string</em><br /><em>Returns key: 'RetrieverPriority'.</em> |
| public | <strong>getRetrieverUniqueid()</strong> : <em>string</em><br /><em>Returns key: 'RetrieverUniqueid'.</em> |
| public | <strike><strong>getTimeout()</strong> : <em>string</em></strike><br /><em>DEPRECATED - Deprecated since Asterisk 12. {@use ParkingTimeout()}.</em> |
| public | <strike><strong>getUniqueID()</strong> : <em>string</em></strike><br /><em>DEPRECATED - Deprecated since Asterisk 12. {@use getParkeeUniqueid()}.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\UserEventEvent

> Custom user events. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getPrivilege()</strong> : <em>string</em><br /><em>Returns key: 'Privilege'.</em> |
| public | <strong>getUniqueID()</strong> : <em>string</em><br /><em>Returns key: 'UniqueID'.</em> |
| public | <strong>getUserEventName()</strong> : <em>string</em><br /><em>Returns key: 'UserEvent'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\VarSetEvent

> Event triggered when a variable is set via agi or dialplan. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getCallerIDName()</strong> : <em>string</em><br /><em>Returns key: 'CallerIDName'.</em> |
| public | <strong>getCallerIDNum()</strong> : <em>string</em><br /><em>Returns key: 'CallerIDNum'.</em> |
| public | <strong>getChannel()</strong> : <em>string</em><br /><em>Returns key: 'Channel'.</em> |
| public | <strong>getChannelState()</strong> : <em>string</em><br /><em>Returns key: 'ChannelState'.</em> |
| public | <strong>getChannelStateDesc()</strong> : <em>string</em><br /><em>Returns key: 'ChannelStateDesc'.</em> |
| public | <strong>getConnectedLineName()</strong> : <em>string</em><br /><em>Returns key: 'ConnectedLineName'.</em> |
| public | <strong>getConnectedLineNum()</strong> : <em>string</em><br /><em>Returns key: 'ConnectedLineNum'.</em> |
| public | <strong>getPrivilege()</strong> : <em>string</em><br /><em>Returns key: 'Privilege'.</em> |
| public | <strong>getUniqueID()</strong> : <em>string</em><br /><em>Returns key: 'UniqueID'.</em> |
| public | <strong>getValue()</strong> : <em>string</em><br /><em>Returns key: 'Value'.</em> |
| public | <strong>getVariableName()</strong> : <em>string</em><br /><em>Returns key: 'Variable'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\NewextenEvent

> Event triggered when a new extension is accessed. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getApplication()</strong> : <em>string</em><br /><em>Returns key: 'Application'.</em> |
| public | <strong>getApplicationData()</strong> : <em>string</em><br /><em>Returns key: 'AppData'.</em> |
| public | <strong>getChannel()</strong> : <em>string</em><br /><em>Returns key: 'Channel'.</em> |
| public | <strong>getContext()</strong> : <em>string</em><br /><em>Returns key: 'Context'.</em> |
| public | <strong>getExten()</strong> : <em>string</em><br /><em>Returns key: 'Exten'.</em> |
| public | <strike><strong>getExtension()</strong> : <em>string</em></strike><br /><em>DEPRECATED - Please use {@see getExten()}.</em> |
| public | <strong>getPriority()</strong> : <em>string</em><br /><em>Returns key: 'Priority'.</em> |
| public | <strong>getPrivilege()</strong> : <em>string</em><br /><em>Returns key: 'Privilege'.</em> |
| public | <strong>getUniqueID()</strong> : <em>string</em><br /><em>Returns key: 'UniqueID'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\SCCPDeviceLineEntryEvent

> Event triggered by SCCPShowDevice Line Entries. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getCfwdNumber()</strong> : <em>string</em><br /><em>Returns key: 'CfwdNumber'.</em> |
| public | <strong>getCfwdType()</strong> : <em>string</em><br /><em>Returns key: 'CfwdType'.</em> |
| public | <strong>getChannelObjectType()</strong> : <em>string</em><br /><em>Returns key: 'ChannelObjectType'.</em> |
| public | <strong>getChannelType()</strong> : <em>string</em><br /><em>Returns key: 'ChannelType'.</em> |
| public | <strong>getId()</strong> : <em>integer</em><br /><em>Returns key: 'Id'.</em> |
| public | <strong>getLabel()</strong> : <em>string</em><br /><em>Returns key: 'Label'.</em> |
| public | <strong>getName()</strong> : <em>string</em><br /><em>Returns key: 'Name'.</em> |
| public | <strong>getSubscriptionId()</strong> : <em>integer</em><br /><em>Returns key: 'SubscriptionId'.</em> |
| public | <strike><strong>getSuffix()</strong> : <em>integer</em></strike><br /><em>DEPRECATED - Please use getSubscriptionId() instead</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\NewchannelEvent

> Event triggered when a new channel is created. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getAccountCode()</strong> : <em>string</em><br /><em>Returns key: 'AccountCode'.</em> |
| public | <strong>getCallerIDName()</strong> : <em>string</em><br /><em>Returns key: 'CallerIDName'.</em> |
| public | <strong>getCallerIDNum()</strong> : <em>string</em><br /><em>Returns key: 'CallerIDNum'.</em> |
| public | <strong>getChannel()</strong> : <em>string</em><br /><em>Returns key: 'Channel'.</em> |
| public | <strong>getChannelState()</strong> : <em>string</em><br /><em>Returns key: 'ChannelState'.</em> |
| public | <strong>getChannelStateDesc()</strong> : <em>string</em><br /><em>Returns key: 'ChannelStateDesc'.</em> |
| public | <strong>getContext()</strong> : <em>string</em><br /><em>Returns key: 'Context'.</em> |
| public | <strong>getExtension()</strong> : <em>string</em><br /><em>Returns key: 'Exten'.</em> |
| public | <strong>getLinkedId()</strong> : <em>string</em><br /><em>Returns key: 'LinkedId'.</em> |
| public | <strong>getPrivilege()</strong> : <em>string</em><br /><em>Returns key: 'Privilege'.</em> |
| public | <strong>getUniqueID()</strong> : <em>string</em><br /><em>Returns key: 'UniqueID'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\NewstateEvent

> Event triggered when a channel changes its status. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getCallerIDName()</strong> : <em>string</em><br /><em>Returns key: 'CallerIDName'. Asterisk < 1.8.</em> |
| public | <strong>getCallerIDNum()</strong> : <em>string</em><br /><em>Returns key: 'CallerIDNum'. Asterisk < 1.8.</em> |
| public | <strong>getChannel()</strong> : <em>string</em><br /><em>Returns key: 'Channel'.</em> |
| public | <strong>getChannelState()</strong> : <em>string</em><br /><em>Returns key: 'ChannelState'.</em> |
| public | <strong>getChannelStateDesc()</strong> : <em>string</em><br /><em>Returns key: 'ChannelStateDesc'.</em> |
| public | <strong>getConnectedLineName()</strong> : <em>string</em><br /><em>Returns key: 'ConnectedLineName'. Asterisk >= 1.8.</em> |
| public | <strong>getConnectedLineNum()</strong> : <em>string</em><br /><em>Returns key: 'ConnectedLineNum'. Asterisk >= 1.8.</em> |
| public | <strong>getExten()</strong> : <em>string</em><br /><em>Returns key: 'Exten'.</em> |
| public | <strong>getLinkedId()</strong> : <em>string</em><br /><em>Returns key: 'LinkedId'.</em> |
| public | <strong>getPrivilege()</strong> : <em>string</em><br /><em>Returns key: 'Privilege'.</em> |
| public | <strong>getUniqueID()</strong> : <em>string</em><br /><em>Returns key: 'UniqueID'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\NewchannelEvent

> Event triggered when a new channel is created. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getAccountCode()</strong> : <em>string</em><br /><em>Returns key: 'AccountCode'.</em> |
| public | <strong>getCallerIDName()</strong> : <em>string</em><br /><em>Returns key: 'CallerIDName'.</em> |
| public | <strong>getCallerIDNum()</strong> : <em>string</em><br /><em>Returns key: 'CallerIDNum'.</em> |
| public | <strong>getChannel()</strong> : <em>string</em><br /><em>Returns key: 'Channel'.</em> |
| public | <strong>getChannelState()</strong> : <em>string</em><br /><em>Returns key: 'ChannelState'.</em> |
| public | <strong>getChannelStateDesc()</strong> : <em>string</em><br /><em>Returns key: 'ChannelStateDesc'.</em> |
| public | <strong>getContext()</strong> : <em>string</em><br /><em>Returns key: 'Context'.</em> |
| public | <strong>getExtension()</strong> : <em>string</em><br /><em>Returns key: 'Exten'.</em> |
| public | <strong>getLinkedId()</strong> : <em>string</em><br /><em>Returns key: 'LinkedId'.</em> |
| public | <strong>getPrivilege()</strong> : <em>string</em><br /><em>Returns key: 'Privilege'.</em> |
| public | <strong>getUniqueID()</strong> : <em>string</em><br /><em>Returns key: 'UniqueID'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\NewstateEvent

> Event triggered when a channel changes its status. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getCallerIDName()</strong> : <em>string</em><br /><em>Returns key: 'CallerIDName'. Asterisk < 1.8.</em> |
| public | <strong>getCallerIDNum()</strong> : <em>string</em><br /><em>Returns key: 'CallerIDNum'. Asterisk < 1.8.</em> |
| public | <strong>getChannel()</strong> : <em>string</em><br /><em>Returns key: 'Channel'.</em> |
| public | <strong>getChannelState()</strong> : <em>string</em><br /><em>Returns key: 'ChannelState'.</em> |
| public | <strong>getChannelStateDesc()</strong> : <em>string</em><br /><em>Returns key: 'ChannelStateDesc'.</em> |
| public | <strong>getConnectedLineName()</strong> : <em>string</em><br /><em>Returns key: 'ConnectedLineName'. Asterisk >= 1.8.</em> |
| public | <strong>getConnectedLineNum()</strong> : <em>string</em><br /><em>Returns key: 'ConnectedLineNum'. Asterisk >= 1.8.</em> |
| public | <strong>getExten()</strong> : <em>string</em><br /><em>Returns key: 'Exten'.</em> |
| public | <strong>getLinkedId()</strong> : <em>string</em><br /><em>Returns key: 'LinkedId'.</em> |
| public | <strong>getPrivilege()</strong> : <em>string</em><br /><em>Returns key: 'Privilege'.</em> |
| public | <strong>getUniqueID()</strong> : <em>string</em><br /><em>Returns key: 'UniqueID'.</em> |

*This class extends [\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)*

<hr />

### Class: \PAMI\Message\Event\Factory\Impl\EventFactoryImpl

> This factory knows which event to return according to a given raw message from ami. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct()</strong> : <em>void</em><br /><em>Constructor. Nothing to see here, move along.</em> |
| public | <strong>createFromRaw(</strong><em>string</em> <strong>$message</strong>)</strong> : <em>[\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)</em><br /><em>This is our factory method.</em> |

<hr />

### Class: \PAMI\Message\Response\CommandResponse

> A generic SCCP response message from ami. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>string</em> <strong>$rawContent</strong>)</strong> : <em>void</em><br /><em>Constructor.</em> |
| public | <strong>getCommandOutput()</strong> : <em>string</em><br /><em>Returns Command output result</em> |
| public | <strong>isCommandFinished()</strong> : <em>boolean</em><br /><em>Returns true if this response contains the Message: command output follow</em> |

*This class extends [\PAMI\Message\Response\Response](#class-pamimessageresponseresponse-abstract)*

<hr />

### Class: \PAMI\Message\Response\ComplexResponse

> A generic SCCP response message from ami. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>string</em> <strong>$rawContent</strong>)</strong> : <em>void</em><br /><em>Constructor.</em> |
| public | <strong>addEvent(</strong><em>[\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)</em> <strong>$event</strong>)</strong> : <em>void</em><br /><em>Adds an event to this response. If we encounter StartTable/EndTable Events we will move the events into the tables['TableName'] array</em> |
| public | <strong>getJSON()</strong> : <em>array</em><br /><em>Returns decoded version of the 'JSON' key if present.</em> |
| public | <strong>getTable(</strong><em>mixed</em> <strong>$tablename</strong>)</strong> : <em>[\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)[]</em><br /><em>Returns all associated events for this response->tablename.</em> |
| public | <strong>getTableNames()</strong> : <em>[\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)[]</em><br /><em>Returns all eventtabless for this response.</em> |
| public | <strong>hasTable()</strong> : <em>boolean</em><br /><em>Returns true if this Response Message contains an events tables (TableStart/TableEnd)</em> |

*This class extends [\PAMI\Message\Response\Response](#class-pamimessageresponseresponse-abstract)*

<hr />

### Class: \PAMI\Message\Response\GenericResponse

> A generic response message from ami. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>string</em> <strong>$rawContent</strong>)</strong> : <em>void</em><br /><em>Constructor.</em> |

*This class extends [\PAMI\Message\Response\Response](#class-pamimessageresponseresponse-abstract)*

<hr />

### Class: \PAMI\Message\Response\Response (abstract)

> A generic response message from ami. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>string</em> <strong>$rawContent</strong>)</strong> : <em>void</em><br /><em>Constructor.</em> |
| public | <strong>__sleep()</strong> : <em>string[]</em><br /><em>Serialize function.</em> |
| public | <strong>addEvent(</strong><em>[\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)</em> <strong>$event</strong>)</strong> : <em>void</em><br /><em>Adds an event to this response.</em> |
| public | <strong>getEvents()</strong> : <em>[\PAMI\Message\Event\EventMessage](#class-pamimessageeventeventmessage-abstract)[]</em><br /><em>Returns all associated events for this response.</em> |
| public | <strong>getMessage()</strong> : <em>string</em><br /><em>Returns key: 'Privilege'.</em> |
| public | <strong>isComplete()</strong> : <em>boolean</em><br /><em>True if this response is complete. A response is considered complete if it's not a list OR it's a list with its last child event containing an EventList = Complete.</em> |
| public | <strong>isList()</strong> : <em>boolean</em><br /><em>Returns true if this response contains the key EventList with the word 'start' in it. Another way is to have a Message key, like: Message: Result will follow</em> |
| public | <strong>isSuccess()</strong> : <em>boolean</em><br /><em>Checks if the Response field has the word Error in it.</em> |
| public | <strong>setActionId(</strong><em>string</em> <strong>$actionId</strong>)</strong> : <em>void</em><br /><em>Sets an action id. This should not be necessary, but asterisk sometimes decides to not send the Response: or Event: headers.</em> |

*This class extends [\PAMI\Message\IncomingMessage](#class-pamimessageincomingmessage-abstract)*

<hr />

### Class: \PAMI\Message\Response\SCCPShowDeviceResponse

> An sccp showdevice response message from ami. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>string</em> <strong>$rawContent</strong>)</strong> : <em>void</em><br /><em>Constructor.</em> |
| public | <strong>getAllowRinginNotification()</strong> : <em>boolean</em><br /><em>Returns key: 'AllowRinginNotification'.</em> |
| public | <strong>getAudioCOS()</strong> : <em>integer</em><br /><em>Returns key: 'AudioCOS'.</em> |
| public | <strong>getAudioTOS()</strong> : <em>integer</em><br /><em>Returns key: 'AudioTOS'.</em> |
| public | <strong>getBTemplateSupport()</strong> : <em>boolean</em><br /><em>Returns key: 'BTemplateSupport'.</em> |
| public | <strong>getBindAddress()</strong> : <em>string</em><br /><em>Returns key: 'BindAddress'.</em> |
| public | <strong>getButtons()</strong> : <em>\PAMI\Message\Response\PAMI\Message\Event\SCCPDeviceButtonEntryEvent[])</em><br /><em>Returns an array of SCCPDeviceButtonEntryEvent's The returned array contains PAMI\Message\Event\SCCPDeviceButtonEntryEvent objects</em> |
| public | <strong>getCallStatistics()</strong> : <em>\PAMI\Message\Response\PAMI\Message\Event\SCCPDeviceStatisticsEntryEvent[]</em><br /><em>Returns an array of SCCPDeviceCalStatisticEntryEvent's The returned array contains PAMI\Message\Event\SCCPDeviceStatisticsEntryEvent objects</em> |
| public | <strong>getCanCFWBUSY()</strong> : <em>boolean</em><br /><em>Returns key: 'CanCFWBUSY'.</em> |
| public | <strong>getCanCFWDALL()</strong> : <em>boolean</em><br /><em>Returns key: 'CanCFWDALL'.</em> |
| public | <strong>getCanCFWNOANSWER()</strong> : <em>boolean</em><br /><em>Returns key: 'CanCFWNOANSWER'.</em> |
| public | <strong>getCanPark()</strong> : <em>boolean</em><br /><em>Returns key: 'CanPark'.</em> |
| public | <strong>getCanTransfer()</strong> : <em>boolean</em><br /><em>Returns key: 'CanTransfer'.</em> |
| public | <strong>getCapabilities()</strong> : <em>\PAMI\Message\Response\(string/\PAMI\Message\Response\int)[]</em><br /><em>Returns key: 'Capabilities'.</em> |
| public | <strong>getCodecsPreference()</strong> : <em>\PAMI\Message\Response\(string/\PAMI\Message\Response\int)[]</em><br /><em>Returns key: 'CodecsPreference'.</em> |
| public | <strong>getConfigPhoneType()</strong> : <em>string</em><br /><em>Returns key: 'ConfigPhoneType'.</em> |
| public | <strong>getCustomBackgroundImage()</strong> : <em>string</em><br /><em>Returns key: 'CustomBackgroundImage'.</em> |
| public | <strong>getCustomRingTone()</strong> : <em>string</em><br /><em>Returns key: 'CustomRingTone'.</em> |
| public | <strong>getDNDAction()</strong> : <em>string</em><br /><em>Returns key: 'DNDAction'.</em> |
| public | <strong>getDNDFeatureEnabled()</strong> : <em>boolean</em><br /><em>Returns key: 'DNDFeatureEnabled'.</em> |
| public | <strong>getDNDStatus()</strong> : <em>string</em><br /><em>Returns key: 'DNDStatus'.</em> |
| public | <strong>getDefaultLineInstance()</strong> : <em>integer</em><br /><em>Returns key: 'DefaultLineInstance'.</em> |
| public | <strong>getDenyPermit()</strong> : <em>string</em><br /><em>Returns key: 'DenyPermit'.</em> |
| public | <strong>getDescription()</strong> : <em>string</em><br /><em>Returns key: 'Description'.</em> |
| public | <strong>getDeviceFeatures()</strong> : <em>string</em><br /><em>Returns key: 'DeviceFeatures'.</em> |
| public | <strong>getDeviceName()</strong> : <em>string</em><br /><em>Returns key: 'DeviceName'.</em> |
| public | <strong>getDeviceStateAcc()</strong> : <em>string</em><br /><em>Returns key: 'DeviceStateAcc'.</em> |
| public | <strong>getDirectRTP()</strong> : <em>boolean</em><br /><em>Returns key: 'DirectRTP'.</em> |
| public | <strong>getDirectedPickup()</strong> : <em>boolean</em><br /><em>Returns key: 'DirectedPickup'.</em> |
| public | <strong>getDtmfMode()</strong> : <em>string</em><br /><em>Returns key: 'DtmfMode'.</em> |
| public | <strong>getEarlyRTP()</strong> : <em>string</em><br /><em>Returns key: 'EarlyRTP'.</em> |
| public | <strong>getFeatureButtons()</strong> : <em>\PAMI\Message\Event\SCCPDeviceFeatureButtonEntryEvent[]</em><br /><em>Returns an array of SCCPDeviceFeatureButtonEntryEvent's *The returned array contains PAMI\Message\Event\SCCPDeviceFeatureButtonEntryEvent objects</em> |
| public | <strong>getImageVersion()</strong> : <em>string</em><br /><em>Returns key: 'ImageVersion'.</em> |
| public | <strong>getKeepalive()</strong> : <em>integer</em><br /><em>Returns key: 'Keepalive'.</em> |
| public | <strong>getLastDialedNumber()</strong> : <em>string</em><br /><em>Returns key: 'LastDialedNumber'.</em> |
| public | <strong>getLastUsedAccessory()</strong> : <em>string</em><br /><em>Returns key: 'LastUsedAccessory'.</em> |
| public | <strong>getLineButtons()</strong> : <em>\PAMI\Message\Event\SCCPDeviceLineButtonEntryEvent[]</em><br /><em>Returns an array of SCCPDeviceLineButtonEntryEvent's *The returned array contains PAMI\Message\Event\SCCPDeviceLineButtonEntryEvent objects</em> |
| public | <strong>getLinesRegistered()</strong> : <em>boolean</em><br /><em>Returns key: 'linesRegistered'.</em> |
| public | <strong>getMACAddress()</strong> : <em>string</em><br /><em>Returns key: 'MACAddress'.</em> |
| public | <strong>getMWIHandsetLight()</strong> : <em>boolean</em><br /><em>Returns key: 'MWIHandsetLight'.</em> |
| public | <strong>getMWILight()</strong> : <em>string</em><br /><em>Returns key: 'MWILight'.</em> |
| public | <strong>getNat()</strong> : <em>string</em><br /><em>Returns key: 'Nat'.</em> |
| public | <strong>getPendingDelete()</strong> : <em>boolean</em><br /><em>Returns key: 'PendingDelete'.</em> |
| public | <strong>getPendingUpdate()</strong> : <em>boolean</em><br /><em>Returns key: 'PendingUpdate'.</em> |
| public | <strong>getPermitHosts()</strong> : <em>string</em><br /><em>Returns key: 'PermitHosts'.</em> |
| public | <strong>getPickupContext()</strong> : <em>string</em><br /><em>Returns key: 'PickupContext'.</em> |
| public | <strong>getPickupModeAnswer()</strong> : <em>boolean</em><br /><em>Returns key: 'PickupModeAnswer'.</em> |
| public | <strong>getPrivateSoftkey()</strong> : <em>boolean</em><br /><em>Returns key: 'PrivateSoftkey'.</em> |
| public | <strong>getProtocolInUse()</strong> : <em>string</em><br /><em>Returns key: 'ProtocolInUse'.</em> |
| public | <strong>getProtocolVersion()</strong> : <em>string</em><br /><em>Returns key: 'ProtocolVersion'.</em> |
| public | <strong>getRegistrationState()</strong> : <em>string</em><br /><em>Returns key: 'RegistrationState'.</em> |
| public | <strong>getServerAddress()</strong> : <em>string</em><br /><em>Returns key: 'ServerAddress'.</em> |
| public | <strong>getServiceURLButtons()</strong> : <em>\PAMI\Message\Event\SCCPDeviceServiceURLButtonEntryEvent[]</em><br /><em>Returns an array of SCCPDeviceServiceURLButtonEntryEvent's *The returned array contains PAMI\Message\Event\SCCPDeviceServiceURLButtonEntryEvent objects</em> |
| public | <strong>getSkinnyPhoneType()</strong> : <em>string</em><br /><em>Returns key: 'SkinnyPhoneType'.</em> |
| public | <strong>getSoftkeySupport()</strong> : <em>boolean</em><br /><em>Returns key: 'SoftkeySupport'.</em> |
| public | <strong>getSoftkeyset()</strong> : <em>string</em><br /><em>Returns key: 'Softkeyset'.</em> |
| public | <strong>getSpeeddialButtons()</strong> : <em>\PAMI\Message\Event\SCCPDeviceSpeeddialButtonEntryEvent[]</em><br /><em>Returns an array of SCCPDeviceSpeeddialButtonEntryEvent's *The returned array contains PAMI\Message\Event\SCCPDeviceSpeeddialButtonEntryEvent objects</em> |
| public | <strong>getState()</strong> : <em>string</em><br /><em>Returns key: 'State'.</em> |
| public | <strong>getTimezoneOffset()</strong> : <em>integer</em><br /><em>Returns key: 'TimezoneOffset'.</em> |
| public | <strong>getTokenstate()</strong> : <em>string</em><br /><em>Returns key: 'Tokenstate'.</em> |
| public | <strong>getUsePlacedCalls()</strong> : <em>boolean</em><br /><em>Returns key: 'UsePlacedCalls'.</em> |
| public | <strong>getVariables()</strong> : <em>\PAMI\Message\Response\PAMI\Message\Event\SCCPVariableEntryEvent[]</em><br /><em>Returns an array of SCCPVariableEntryEvent's The returned array contains PAMI\Message\Event\SCCPVariableEntryEvent objects</em> |
| public | <strong>getVideoCOS()</strong> : <em>integer</em><br /><em>Returns key: 'VideoCOS'.</em> |
| public | <strong>getVideoTOS()</strong> : <em>integer</em><br /><em>Returns key: 'VideoTOS'.</em> |
| public | <strong>getVideosupport()</strong> : <em>boolean</em><br /><em>Returns key: 'Videosupport'.</em> |
| public | <strong>getallowConference()</strong> : <em>boolean</em><br /><em>Returns key: 'allowConference'.</em> |
| public | <strong>getconfMusicOnHoldClass()</strong> : <em>string</em><br /><em>Returns key: 'confMusicOnHoldClass'.</em> |
| public | <strong>getconfMuteOnEntry()</strong> : <em>boolean</em><br /><em>Returns key: 'confMuteOnEntry'.</em> |
| public | <strong>getconfPlayGeneralAnnounce()</strong> : <em>boolean</em><br /><em>Returns key: 'confPlayGeneralAnnounce'.</em> |
| public | <strong>getconfPlayPartAnnounce()</strong> : <em>boolean</em><br /><em>Returns key: 'confPlayPartAnnounce'.</em> |
| public | <strong>getconfShowConflist()</strong> : <em>boolean</em><br /><em>Returns key: 'confShowConflist'.</em> |
| public | <strong>getconflistActive()</strong> : <em>boolean</em><br /><em>Returns key: 'conflistActive'.</em> |

*This class extends [\PAMI\Message\Response\ComplexResponse](#class-pamimessageresponsecomplexresponse)*

<hr />

### Class: \PAMI\Message\Response\SCCPShowGlobalsResponse

> A sccp show globals response message from ami. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>string</em> <strong>$rawContent</strong>)</strong> : <em>void</em><br /><em>Constructor.</em> |
| public | <strong>getAMAFlags()</strong> : <em>string</em><br /><em>Returns key: 'AMAFlags'.</em> |
| public | <strong>getAUDIOCosRtp()</strong> : <em>integer</em><br /><em>Returns key: 'AUDIOCosRtp'.</em> |
| public | <strong>getAUDIOTosRtp()</strong> : <em>integer</em><br /><em>Returns key: 'AUDIOTosRtp'.</em> |
| public | <strong>getAccountcode()</strong> : <em>string</em><br /><em>Returns key: 'Accountcode'.</em> |
| public | <strong>getAutoAnswerRingtime()</strong> : <em>string</em><br /><em>Returns key: 'AutoAnswerRingtime'.</em> |
| public | <strong>getAutoAnswerTone()</strong> : <em>string</em><br /><em>Returns key: 'AutoAnswerTone'.</em> |
| public | <strong>getBindAddress()</strong> : <em>string</em><br /><em>Returns key: 'BindAddress'.</em> |
| public | <strong>getCFWDALL()</strong> : <em>boolean</em><br /><em>Returns key: 'CFWDALL'.</em> |
| public | <strong>getCFWDBUSY()</strong> : <em>boolean</em><br /><em>Returns key: 'CFWBUSY'.</em> |
| public | <strong>getCFWDNOANSWER()</strong> : <em>boolean</em><br /><em>Returns key: 'CFWNOANSWER'.</em> |
| public | <strong>getCallEvents()</strong> : <em>boolean</em><br /><em>Returns key: 'CallEvents'.</em> |
| public | <strong>getCallgroup()</strong> : <em>integer[]</em><br /><em>Returns key: 'Callgroup'.</em> |
| public | <strong>getCallwaitingInterval()</strong> : <em>integer</em><br /><em>Returns key: 'CallwaitingInterval'.</em> |
| public | <strong>getCallwaitingTone()</strong> : <em>integer</em><br /><em>Returns key: 'CallwaitingTone'.</em> |
| public | <strong>getCodecsPreference()</strong> : <em>\PAMI\Message\Response\(string/\PAMI\Message\Response\int)[]</em><br /><em>Returns key: 'CodecsPreference'.</em> |
| public | <strong>getConfigFile()</strong> : <em>string</em><br /><em>Returns key: 'ConfigFile'.</em> |
| public | <strong>getContext()</strong> : <em>string</em><br /><em>Returns key: 'Context'.</em> |
| public | <strong>getDNDFeatureEnabled()</strong> : <em>boolean</em><br /><em>Returns key: 'DNDFeatureEnabled'.</em> |
| public | <strong>getDateFormat()</strong> : <em>string</em><br /><em>Returns key: 'DateFormat'.</em> |
| public | <strong>getDebug()</strong> : <em>string</em><br /><em>Returns key: 'Debug'.</em> |
| public | <strong>getDenyPermit()</strong> : <em>string</em><br /><em>Returns key: 'DenyPermit'.</em> |
| public | <strong>getDigitTimeout()</strong> : <em>integer</em><br /><em>Returns key: 'DigitTimeout'.</em> |
| public | <strong>getDigitTimeoutChar()</strong> : <em>string</em><br /><em>Returns key: 'DigitTimeoutChar'.</em> |
| public | <strong>getDirectRTP()</strong> : <em>string</em><br /><em>Returns key: 'DirectRTP'.</em> |
| public | <strong>getEarlyRTP()</strong> : <em>string</em><br /><em>Returns key: 'EarlyRTP'.</em> |
| public | <strong>getEchoCancel()</strong> : <em>boolean</em><br /><em>Returns key: 'EchoCancel'.</em> |
| public | <strong>getExternIP()</strong> : <em>string</em><br /><em>Returns key: 'ExternIP'.</em> |
| public | <strong>getFirstDigitTimeout()</strong> : <em>integer</em><br /><em>Returns key: 'FirstDigitTimeout'.</em> |
| public | <strong>getHotlineContext()</strong> : <em>string</em><br /><em>Returns key: 'HotlineContext'.</em> |
| public | <strong>getHotlineEnabled()</strong> : <em>boolean</em><br /><em>Returns key: 'HotlineEnabled'.</em> |
| public | <strong>getHotlineExten()</strong> : <em>string</em><br /><em>Returns key: 'HotlineExten'.</em> |
| public | <strong>getJitterbufferEnabled()</strong> : <em>boolean</em><br /><em>Returns key: 'JitterbufferEnabled'.</em> |
| public | <strong>getJitterbufferForced()</strong> : <em>boolean</em><br /><em>Returns key: 'JitterbufferForced'.</em> |
| public | <strong>getJitterbufferImpl()</strong> : <em>string</em><br /><em>Returns key: 'JitterbufferImpl'.</em> |
| public | <strong>getJitterbufferLog()</strong> : <em>boolean</em><br /><em>Returns key: 'JitterbufferLog'.</em> |
| public | <strong>getJitterbufferMaxSize()</strong> : <em>integer</em><br /><em>Returns key: 'JitterbufferMaxSize'.</em> |
| public | <strong>getJitterbufferResync()</strong> : <em>integer</em><br /><em>Returns key: 'JitterbufferResync'.</em> |
| public | <strong>getKeepalive()</strong> : <em>integer</em><br /><em>Returns key: 'Keepalive'.</em> |
| public | <strong>getLanguage()</strong> : <em>string</em><br /><em>Returns key: 'Language'.</em> |
| public | <strong>getLocalnet()</strong> : <em>string</em><br /><em>Returns key: 'Localnet'.</em> |
| public | <strong>getMusicclass()</strong> : <em>string</em><br /><em>Returns key: 'Musicclass'.</em> |
| public | <strong>getNat()</strong> : <em>string</em><br /><em>Returns key: 'Nat'.</em> |
| public | <strong>getPark()</strong> : <em>boolean</em><br /><em>Returns key: 'Park'.</em> |
| public | <strong>getPickupModeAnswer()</strong> : <em>boolean</em><br /><em>Returns key: 'PickupModeAnswer'.</em> |
| public | <strong>getPickupgroup()</strong> : <em>integer[]</em><br /><em>Returns key: 'Pickupgroup'.</em> |
| public | <strong>getPlatformByteOrder()</strong> : <em>string</em><br /><em>Returns key: 'PlatformByteOrder'.</em> |
| public | <strong>getPrivateSoftkey()</strong> : <em>boolean</em><br /><em>Returns key: 'PrivateSoftkey'.</em> |
| public | <strong>getRegistrationContext()</strong> : <em>string</em><br /><em>Returns key: 'RegistrationContext'.</em> |
| public | <strong>getRemoteHangupTone()</strong> : <em>integer</em><br /><em>Returns key: 'RemoteHangupTone'.</em> |
| public | <strong>getSCCPCosSignaling()</strong> : <em>integer</em><br /><em>Returns key: 'SCCPCosSignaling'.</em> |
| public | <strong>getSCCPTosSignaling()</strong> : <em>integer</em><br /><em>Returns key: 'SCCPTosSignaling'.</em> |
| public | <strong>getServerName()</strong> : <em>string</em><br /><em>Returns key: 'ServerName'.</em> |
| public | <strong>getSilenceSuppression()</strong> : <em>boolean</em><br /><em>Returns key: 'SilenceSuppression'.</em> |
| public | <strong>getThreadpoolSize()</strong> : <em>string</em><br /><em>Returns key: 'ThreadpoolSize'.</em> |
| public | <strong>getTokenBackoffTime()</strong> : <em>integer</em><br /><em>Returns key: 'TokenBackoffTime'.</em> |
| public | <strong>getTokenFallBack()</strong> : <em>string</em><br /><em>Returns key: 'TokenFallBack'.</em> |
| public | <strong>getTransferOnHangup()</strong> : <em>boolean</em><br /><em>Returns key: 'TransferOnHangup'.</em> |
| public | <strong>getTransferTone()</strong> : <em>string</em><br /><em>Returns key: 'TransferTone'.</em> |
| public | <strong>getVIDEOCosVrtp()</strong> : <em>integer</em><br /><em>Returns key: 'VIDEOCosVrtp'.</em> |
| public | <strong>getVIDEOTosVrtp()</strong> : <em>string</em><br /><em>Returns key: 'VIDEOTosVrtp'.</em> |

*This class extends [\PAMI\Message\Response\ComplexResponse](#class-pamimessageresponsecomplexresponse)*

<hr />

### Class: \PAMI\Message\Response\SCCPShowLineResponse

> A sccp show line response message from ami. PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>string</em> <strong>$rawContent</strong>)</strong> : <em>void</em><br /><em>Constructor.</em> |
| public | <strong>getAccountCode()</strong> : <em>string</em><br /><em>Returns key: 'AccountCode'.</em> |
| public | <strong>getActiveChannelCount()</strong> : <em>integer</em><br /><em>Returns key: 'ActiveChannelCount'.</em> |
| public | <strong>getAdhocNumberAssigned()</strong> : <em>boolean</em><br /><em>Returns key: 'AdhocNumberAssigned'.</em> |
| public | <strong>getAmaFlags()</strong> : <em>integer</em><br /><em>Returns key: 'AmaFlags'.</em> |
| public | <strong>getAttachedDevices()</strong> : <em>\PAMI\Message\Response\events[]PAMI\Message\Event\SCCPAttachedDeviceEntryEvent[]</em><br /><em>Returns events[] related to AttachedDevices from the tables['AttachedDevices']</em> |
| public | <strong>getCallGroup()</strong> : <em>int[]</em><br /><em>Returns key: 'CallGroup'.</em> |
| public | <strong>getCallerIDName()</strong> : <em>string</em><br /><em>Returns key: 'CallerIDName'.</em> |
| public | <strong>getCallerIDNumber()</strong> : <em>string</em><br /><em>Returns key: 'CallerIDNumber'.</em> |
| public | <strong>getCanTransfer()</strong> : <em>boolean</em><br /><em>Returns key: 'CanTransfer'.</em> |
| public | <strong>getContext()</strong> : <em>string</em><br /><em>Returns key: 'Context'.</em> |
| public | <strong>getDNDAction()</strong> : <em>string</em><br /><em>Returns key: 'DNDAction'.</em> |
| public | <strong>getDescription()</strong> : <em>string</em><br /><em>Returns key: 'Description'.</em> |
| public | <strong>getEchoCancellation()</strong> : <em>boolean</em><br /><em>Returns key: 'EchoCancellation'.</em> |
| public | <strong>getID()</strong> : <em>integer</em><br /><em>Returns key: 'ID'.</em> |
| public | <strong>getIncomingCallsLimit()</strong> : <em>integer</em><br /><em>Returns key: 'IncomingCallsLimit'.</em> |
| public | <strong>getIsRealtimeLine()</strong> : <em>boolean</em><br /><em>Returns key: 'IsRealtimeLine'.</em> |
| public | <strong>getLabel()</strong> : <em>string</em><br /><em>Returns key: 'Label'.</em> |
| public | <strong>getLanguage()</strong> : <em>string</em><br /><em>Returns key: 'Language'.</em> |
| public | <strong>getMailboxes()</strong> : <em>\PAMI\Message\Response\PAMI\Message\Event\SCCPMailboxEntryEvent[]</em><br /><em>Returns an array of SCCPSCCPMailboxEntryEvent's The returned array contains PAMI\Message\Event\SCCPMailboxEntryEvent objects</em> |
| public | <strong>getMeetMeEnabled()</strong> : <em>boolean</em><br /><em>Returns key: 'MeetMeEnabled'.</em> |
| public | <strong>getMeetMeNumber()</strong> : <em>string</em><br /><em>Returns key: 'MeetMeNumber'.</em> |
| public | <strong>getMeetMeOptions()</strong> : <em>string</em><br /><em>Returns key: 'MeetMeOptions'.</em> |
| public | <strong>getMessageWaitingNew()</strong> : <em>integer</em><br /><em>Returns key: 'MessageWaitingNew'.</em> |
| public | <strong>getMessageWaitingOld()</strong> : <em>integer</em><br /><em>Returns key: 'MessageWaitingOld'.</em> |
| public | <strong>getMusicclass()</strong> : <em>string</em><br /><em>Returns key: 'Musicclass'.</em> |
| public | <strong>getName()</strong> : <em>string</em><br /><em>Returns key: 'Name'.</em> |
| public | <strong>getNamedCallGroup()</strong> : <em>string[]</em><br /><em>Returns key: 'NamedCallGroup'.</em> |
| public | <strong>getNamedPickupGroup()</strong> : <em>string[]</em><br /><em>Returns key: 'NamedPickupGroup'.</em> |
| public | <strong>getParkingLot()</strong> : <em>string</em><br /><em>Returns key: 'ParkingLot'.</em> |
| public | <strong>getPendingDelete()</strong> : <em>boolean</em><br /><em>Returns key: 'PendingDelete'.</em> |
| public | <strong>getPendingUpdate()</strong> : <em>boolean</em><br /><em>Returns key: 'PendingUpdate'.</em> |
| public | <strong>getPickupGroup()</strong> : <em>int[]</em><br /><em>Returns key: 'PickupGroup'.</em> |
| public | <strong>getPin()</strong> : <em>integer</em><br /><em>Returns key: 'Pin'.</em> |
| public | <strong>getRegistrationContext()</strong> : <em>string</em><br /><em>Returns key: 'RegistrationContext'.</em> |
| public | <strong>getRegistrationExtension()</strong> : <em>string</em><br /><em>Returns key: 'RegistrationExtension'.</em> |
| public | <strong>getSecDialtone()</strong> : <em>integer</em><br /><em>Returns key: 'SecDialtone'.</em> |
| public | <strong>getSecDialtoneDigits()</strong> : <em>integer</em><br /><em>Returns key: 'SecDialtoneDigits'.</em> |
| public | <strong>getSilenceSuppression()</strong> : <em>boolean</em><br /><em>Returns key: 'SilenceSuppression'.</em> |
| public | <strong>getTransferToVoicemail()</strong> : <em>string</em><br /><em>Returns key: 'TransferToVoicemail'.</em> |
| public | <strong>getVariables()</strong> : <em>\PAMI\Message\Response\PAMI\Message\Event\SCCPVariableEntryEvent[]</em><br /><em>Returns an array of SCCPVariableEntryEvent's The returned array contains PAMI\Message\Event\SCCPVariableEntryEvent objects</em> |
| public | <strong>getVoiceMailNumber()</strong> : <em>string</em><br /><em>Returns key: 'VoiceMailNumber'.</em> |

*This class extends [\PAMI\Message\Response\ComplexResponse](#class-pamimessageresponsecomplexresponse)*

<hr />

### Interface: \PAMI\Message\Response\Factory\IResponseFactory

| Visibility | Function |
|:-----------|:---------|
| public | <strong>createFromRaw(</strong><em>string</em> <strong>$responseMessage</strong>, <em>string</em> <strong>$requestMessage=null</strong>)</strong> : <em>[\PAMI\Message\Response\Response](#class-pamimessageresponseresponse-abstract)</em><br /><em>This is our factory method.</em> |

<hr />

### Class: \PAMI\Message\Response\Factory\Impl\ResponseFactoryImpl

> This factory knows which reponse handler to return according to a given raw message from ami, the outgoingMessageClass and responseHandler requested by the Action PHP Version 5

| Visibility | Function |
|:-----------|:---------|
| public | <strong>createFromRaw(</strong><em>string</em> <strong>$message</strong>, <em>\PAMI\Message\Response\Factory\Impl\OutgoingMessage</em> <strong>$requestingAction=null</strong>)</strong> : <em>\PAMI\Message\Response\Factory\Impl\ResponseMessage</em><br /><em>This is our factory method.</em> |

*This class implements [\PAMI\Message\Response\Factory\IResponseFactory](#interface-pamimessageresponsefactoryiresponsefactory)*

