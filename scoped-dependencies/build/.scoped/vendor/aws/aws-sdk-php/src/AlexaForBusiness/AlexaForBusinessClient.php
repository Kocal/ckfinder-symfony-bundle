<?php

namespace _CKFinder_Vendor_Prefix\Aws\AlexaForBusiness;

use _CKFinder_Vendor_Prefix\Aws\AwsClient;
/**
 * This client is used to interact with the **Alexa For Business** service.
 * @method \Aws\Result approveSkill(array $args = [])
 * @method \GuzzleHttp\Promise\Promise approveSkillAsync(array $args = [])
 * @method \Aws\Result associateContactWithAddressBook(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateContactWithAddressBookAsync(array $args = [])
 * @method \Aws\Result associateDeviceWithNetworkProfile(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateDeviceWithNetworkProfileAsync(array $args = [])
 * @method \Aws\Result associateDeviceWithRoom(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateDeviceWithRoomAsync(array $args = [])
 * @method \Aws\Result associateSkillGroupWithRoom(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateSkillGroupWithRoomAsync(array $args = [])
 * @method \Aws\Result associateSkillWithSkillGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateSkillWithSkillGroupAsync(array $args = [])
 * @method \Aws\Result associateSkillWithUsers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateSkillWithUsersAsync(array $args = [])
 * @method \Aws\Result createAddressBook(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createAddressBookAsync(array $args = [])
 * @method \Aws\Result createBusinessReportSchedule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createBusinessReportScheduleAsync(array $args = [])
 * @method \Aws\Result createConferenceProvider(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createConferenceProviderAsync(array $args = [])
 * @method \Aws\Result createContact(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createContactAsync(array $args = [])
 * @method \Aws\Result createGatewayGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createGatewayGroupAsync(array $args = [])
 * @method \Aws\Result createNetworkProfile(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createNetworkProfileAsync(array $args = [])
 * @method \Aws\Result createProfile(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createProfileAsync(array $args = [])
 * @method \Aws\Result createRoom(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createRoomAsync(array $args = [])
 * @method \Aws\Result createSkillGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createSkillGroupAsync(array $args = [])
 * @method \Aws\Result createUser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createUserAsync(array $args = [])
 * @method \Aws\Result deleteAddressBook(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteAddressBookAsync(array $args = [])
 * @method \Aws\Result deleteBusinessReportSchedule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteBusinessReportScheduleAsync(array $args = [])
 * @method \Aws\Result deleteConferenceProvider(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteConferenceProviderAsync(array $args = [])
 * @method \Aws\Result deleteContact(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteContactAsync(array $args = [])
 * @method \Aws\Result deleteDevice(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDeviceAsync(array $args = [])
 * @method \Aws\Result deleteDeviceUsageData(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDeviceUsageDataAsync(array $args = [])
 * @method \Aws\Result deleteGatewayGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteGatewayGroupAsync(array $args = [])
 * @method \Aws\Result deleteNetworkProfile(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteNetworkProfileAsync(array $args = [])
 * @method \Aws\Result deleteProfile(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteProfileAsync(array $args = [])
 * @method \Aws\Result deleteRoom(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteRoomAsync(array $args = [])
 * @method \Aws\Result deleteRoomSkillParameter(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteRoomSkillParameterAsync(array $args = [])
 * @method \Aws\Result deleteSkillAuthorization(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteSkillAuthorizationAsync(array $args = [])
 * @method \Aws\Result deleteSkillGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteSkillGroupAsync(array $args = [])
 * @method \Aws\Result deleteUser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteUserAsync(array $args = [])
 * @method \Aws\Result disassociateContactFromAddressBook(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateContactFromAddressBookAsync(array $args = [])
 * @method \Aws\Result disassociateDeviceFromRoom(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateDeviceFromRoomAsync(array $args = [])
 * @method \Aws\Result disassociateSkillFromSkillGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateSkillFromSkillGroupAsync(array $args = [])
 * @method \Aws\Result disassociateSkillFromUsers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateSkillFromUsersAsync(array $args = [])
 * @method \Aws\Result disassociateSkillGroupFromRoom(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateSkillGroupFromRoomAsync(array $args = [])
 * @method \Aws\Result forgetSmartHomeAppliances(array $args = [])
 * @method \GuzzleHttp\Promise\Promise forgetSmartHomeAppliancesAsync(array $args = [])
 * @method \Aws\Result getAddressBook(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getAddressBookAsync(array $args = [])
 * @method \Aws\Result getConferencePreference(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getConferencePreferenceAsync(array $args = [])
 * @method \Aws\Result getConferenceProvider(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getConferenceProviderAsync(array $args = [])
 * @method \Aws\Result getContact(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getContactAsync(array $args = [])
 * @method \Aws\Result getDevice(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDeviceAsync(array $args = [])
 * @method \Aws\Result getGateway(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getGatewayAsync(array $args = [])
 * @method \Aws\Result getGatewayGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getGatewayGroupAsync(array $args = [])
 * @method \Aws\Result getInvitationConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getInvitationConfigurationAsync(array $args = [])
 * @method \Aws\Result getNetworkProfile(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getNetworkProfileAsync(array $args = [])
 * @method \Aws\Result getProfile(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getProfileAsync(array $args = [])
 * @method \Aws\Result getRoom(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRoomAsync(array $args = [])
 * @method \Aws\Result getRoomSkillParameter(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRoomSkillParameterAsync(array $args = [])
 * @method \Aws\Result getSkillGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSkillGroupAsync(array $args = [])
 * @method \Aws\Result listBusinessReportSchedules(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listBusinessReportSchedulesAsync(array $args = [])
 * @method \Aws\Result listConferenceProviders(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listConferenceProvidersAsync(array $args = [])
 * @method \Aws\Result listDeviceEvents(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDeviceEventsAsync(array $args = [])
 * @method \Aws\Result listGatewayGroups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listGatewayGroupsAsync(array $args = [])
 * @method \Aws\Result listGateways(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listGatewaysAsync(array $args = [])
 * @method \Aws\Result listSkills(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listSkillsAsync(array $args = [])
 * @method \Aws\Result listSkillsStoreCategories(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listSkillsStoreCategoriesAsync(array $args = [])
 * @method \Aws\Result listSkillsStoreSkillsByCategory(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listSkillsStoreSkillsByCategoryAsync(array $args = [])
 * @method \Aws\Result listSmartHomeAppliances(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listSmartHomeAppliancesAsync(array $args = [])
 * @method \Aws\Result listTags(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsAsync(array $args = [])
 * @method \Aws\Result putConferencePreference(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putConferencePreferenceAsync(array $args = [])
 * @method \Aws\Result putInvitationConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putInvitationConfigurationAsync(array $args = [])
 * @method \Aws\Result putRoomSkillParameter(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putRoomSkillParameterAsync(array $args = [])
 * @method \Aws\Result putSkillAuthorization(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putSkillAuthorizationAsync(array $args = [])
 * @method \Aws\Result registerAVSDevice(array $args = [])
 * @method \GuzzleHttp\Promise\Promise registerAVSDeviceAsync(array $args = [])
 * @method \Aws\Result rejectSkill(array $args = [])
 * @method \GuzzleHttp\Promise\Promise rejectSkillAsync(array $args = [])
 * @method \Aws\Result resolveRoom(array $args = [])
 * @method \GuzzleHttp\Promise\Promise resolveRoomAsync(array $args = [])
 * @method \Aws\Result revokeInvitation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise revokeInvitationAsync(array $args = [])
 * @method \Aws\Result searchAddressBooks(array $args = [])
 * @method \GuzzleHttp\Promise\Promise searchAddressBooksAsync(array $args = [])
 * @method \Aws\Result searchContacts(array $args = [])
 * @method \GuzzleHttp\Promise\Promise searchContactsAsync(array $args = [])
 * @method \Aws\Result searchDevices(array $args = [])
 * @method \GuzzleHttp\Promise\Promise searchDevicesAsync(array $args = [])
 * @method \Aws\Result searchNetworkProfiles(array $args = [])
 * @method \GuzzleHttp\Promise\Promise searchNetworkProfilesAsync(array $args = [])
 * @method \Aws\Result searchProfiles(array $args = [])
 * @method \GuzzleHttp\Promise\Promise searchProfilesAsync(array $args = [])
 * @method \Aws\Result searchRooms(array $args = [])
 * @method \GuzzleHttp\Promise\Promise searchRoomsAsync(array $args = [])
 * @method \Aws\Result searchSkillGroups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise searchSkillGroupsAsync(array $args = [])
 * @method \Aws\Result searchUsers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise searchUsersAsync(array $args = [])
 * @method \Aws\Result sendAnnouncement(array $args = [])
 * @method \GuzzleHttp\Promise\Promise sendAnnouncementAsync(array $args = [])
 * @method \Aws\Result sendInvitation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise sendInvitationAsync(array $args = [])
 * @method \Aws\Result startDeviceSync(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startDeviceSyncAsync(array $args = [])
 * @method \Aws\Result startSmartHomeApplianceDiscovery(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startSmartHomeApplianceDiscoveryAsync(array $args = [])
 * @method \Aws\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \Aws\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \Aws\Result updateAddressBook(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateAddressBookAsync(array $args = [])
 * @method \Aws\Result updateBusinessReportSchedule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateBusinessReportScheduleAsync(array $args = [])
 * @method \Aws\Result updateConferenceProvider(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateConferenceProviderAsync(array $args = [])
 * @method \Aws\Result updateContact(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateContactAsync(array $args = [])
 * @method \Aws\Result updateDevice(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateDeviceAsync(array $args = [])
 * @method \Aws\Result updateGateway(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateGatewayAsync(array $args = [])
 * @method \Aws\Result updateGatewayGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateGatewayGroupAsync(array $args = [])
 * @method \Aws\Result updateNetworkProfile(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateNetworkProfileAsync(array $args = [])
 * @method \Aws\Result updateProfile(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateProfileAsync(array $args = [])
 * @method \Aws\Result updateRoom(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateRoomAsync(array $args = [])
 * @method \Aws\Result updateSkillGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateSkillGroupAsync(array $args = [])
 */
class AlexaForBusinessClient extends AwsClient
{
}
