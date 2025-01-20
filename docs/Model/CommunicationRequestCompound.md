# # CommunicationRequestCompound

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**pkiCommunicationID** | **int** | The unique ID of the Communication. | [optional]
**eCommunicationImportance** | [**\eZmaxAPI\Model\FieldECommunicationImportance**](FieldECommunicationImportance.md) |  | [optional]
**eCommunicationType** | [**\eZmaxAPI\Model\FieldECommunicationType**](FieldECommunicationType.md) |  |
**objCommunicationsender** | [**\eZmaxAPI\Model\CustomCommunicationsenderRequest**](CustomCommunicationsenderRequest.md) |  | [optional]
**sCommunicationSubject** | **string** | The subject of the Communication | [optional]
**tCommunicationBody** | **string** | The Body of the Communication |
**bCommunicationPrivate** | **bool** | Whether the Communication is private or not |
**eCommunicationAttachmenttype** | **string** | How the attachment should be included in the email.   Only used if eCommunicationType is **Email** | [optional]
**iCommunicationAttachmentlinkexpiration** | **int** | The number of days before the attachment link expired.   Only used if eCommunicationType is **Email** and eCommunicationattachmentType is **Link** | [optional]
**bCommunicationReadreceipt** | **bool** | Whether we ask for a read receipt or not. | [optional]
**aObjCommunicationattachment** | [**\eZmaxAPI\Model\CustomCommunicationattachmentRequest[]**](CustomCommunicationattachmentRequest.md) |  |
**aObjCommunicationrecipient** | [**\eZmaxAPI\Model\CommunicationrecipientRequestCompound[]**](CommunicationrecipientRequestCompound.md) |  |
**aObjCommunicationreference** | [**\eZmaxAPI\Model\CommunicationreferenceRequestCompound[]**](CommunicationreferenceRequestCompound.md) |  |
**aObjCommunicationexternalrecipient** | [**\eZmaxAPI\Model\CommunicationexternalrecipientRequestCompound[]**](CommunicationexternalrecipientRequestCompound.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
