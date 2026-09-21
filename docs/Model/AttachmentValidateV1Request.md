# AttachmentValidateV1Request

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**fkiAttachmentrejectreasonID** | **int** | The unique ID of the Attachmentrejectreason | [optional]
**eAttachmentVerified** | [**\eZmaxAPI\Model\FieldEAttachmentVerified**](FieldEAttachmentVerified.md) |  |
**tAttachmentRejectioncomment** | **string** | The rejectioncomment of the Attachment | [optional]
**aSNotificationEmailAddress** | **string[]** | A list of email addresses to send a rejection notification to. | [optional]
**tNotificationMessage** | **string** | The email body to send to the notification recipients. | [optional]
**bNotificationIncludeAttachment** | **bool** | Should a copy of the attachment be included in the email. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
