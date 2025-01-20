# # CustomCommunicationsenderResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**fkiAgentID** | **int** | The unique ID of the Agent. | [optional]
**fkiBrokerID** | **int** | The unique ID of the Broker. | [optional]
**fkiUserID** | **int** | The unique ID of the User | [optional]
**fkiMailboxsharedID** | **int** | The unique ID of the Mailboxshared | [optional]
**fkiPhonelinesharedID** | **int** | The unique ID of the Phonelineshared | [optional]
**eCommunicationsenderObjecttype** | **string** |  |
**objContactName** | [**\eZmaxAPI\Model\CustomContactNameResponse**](CustomContactNameResponse.md) |  |
**objEmail** | [**\eZmaxAPI\Model\EmailResponse**](EmailResponse.md) | An Email Object and children to create a complete structure | [optional]
**objPhoneFax** | [**\eZmaxAPI\Model\PhoneResponseCompound**](PhoneResponseCompound.md) |  | [optional]
**objPhoneSMS** | [**\eZmaxAPI\Model\PhoneResponseCompound**](PhoneResponseCompound.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
