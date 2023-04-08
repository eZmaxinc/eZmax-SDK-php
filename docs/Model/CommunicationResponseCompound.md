# # CommunicationResponseCompound

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**pkiCommunicationID** | **int** | The unique ID of the Communication. |
**eCommunicationImportance** | [**\eZmaxAPI\Model\FieldECommunicationImportance**](FieldECommunicationImportance.md) |  |
**eCommunicationType** | [**\eZmaxAPI\Model\FieldECommunicationType**](FieldECommunicationType.md) |  |
**sCommunicationSubject** | **string** | The subject of the Communication |
**sCommunicationBodyurl** | **string** | The url of the body used as body in the Communication | [optional]
**eCommunicationDirection** | [**\eZmaxAPI\Model\ComputedECommunicationDirection**](ComputedECommunicationDirection.md) |  |
**iCommunicationrecipientCount** | **int** | The count of Communicationrecipient |
**objDescriptionstaticSender** | [**\eZmaxAPI\Model\DescriptionstaticResponse**](DescriptionstaticResponse.md) |  | [optional]
**objEmailstaticSender** | [**\eZmaxAPI\Model\EmailstaticResponse**](EmailstaticResponse.md) |  | [optional]
**objPhonestaticSender** | [**\eZmaxAPI\Model\PhonestaticResponse**](PhonestaticResponse.md) |  | [optional]
**objAudit** | [**\eZmaxAPI\Model\CommonAudit**](CommonAudit.md) |  |
**aObjCommunicationattachment** | [**\eZmaxAPI\Model\CommunicationattachmentResponseCompound[]**](CommunicationattachmentResponseCompound.md) |  |
**aObjCommunicationrecipient** | [**\eZmaxAPI\Model\CommunicationrecipientResponseCompound[]**](CommunicationrecipientResponseCompound.md) |  |
**aObjCommunicationexternalrecipient** | [**\eZmaxAPI\Model\CommunicationexternalrecipientResponseCompound[]**](CommunicationexternalrecipientResponseCompound.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
