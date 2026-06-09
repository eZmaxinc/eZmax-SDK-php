# CustomAttachmentImportIntoEDMRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**eAttachmentSource** | **string** | The source of the Attachment |
**fkiAttachmentID** | **int** | The unique ID of the Attachment. | [optional]
**fkiInscriptionchecklistID** | **int** | The unique ID of the Inscriptionchecklist | [optional]
**sAttachmentUrl** | **string** | The url of the file to import | [optional]
**sAttachmentBase64** | **string** | The Base64 encoded binary content of the attachment. | [optional]
**sAttachmentName** | **string** | The name of the Attachment |
**sAttachmentCategory** | **string** | The attachment category |
**eAttachmentPrivacy** | [**\eZmaxAPI\Model\FieldEAttachmentPrivacy**](FieldEAttachmentPrivacy.md) |  |
**fkiUserIDSpecific** | **int** | The unique ID of the User | [optional]
**sAttachmentMD5** | **string** | The MD5 of the Attachment | [optional]
**bAttachmentForceoverwrite** | **bool** | Whether we force an overwrite of an existing file | [optional]
**bAttachmentForcerestore** | **bool** | Whether we force a restore of a deleted file | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
