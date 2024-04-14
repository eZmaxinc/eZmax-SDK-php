# # WebhookRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**pkiWebhookID** | **int** | The unique ID of the Webhook | [optional]
**fkiEzsignfoldertypeID** | **int** | The unique ID of the Ezsignfoldertype. | [optional]
**sWebhookDescription** | **string** | The description of the Webhook |
**eWebhookModule** | [**\eZmaxAPI\Model\FieldEWebhookModule**](FieldEWebhookModule.md) |  |
**eWebhookEzsignevent** | [**\eZmaxAPI\Model\FieldEWebhookEzsignevent**](FieldEWebhookEzsignevent.md) |  | [optional]
**eWebhookManagementevent** | [**\eZmaxAPI\Model\FieldEWebhookManagementevent**](FieldEWebhookManagementevent.md) |  | [optional]
**sWebhookUrl** | **string** | The URL of the Webhook callback |
**sWebhookEmailfailed** | **string** | The email that will receive the Webhook in case all attempts fail |
**bWebhookIsactive** | **bool** | Whether the Webhook is active or not |
**bWebhookIssigned** | **bool** | Whether the requests will be signed or not | [optional]
**bWebhookSkipsslvalidation** | **bool** | Wheter the server&#39;s SSL certificate should be validated or not. Not recommended to skip for production use |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
