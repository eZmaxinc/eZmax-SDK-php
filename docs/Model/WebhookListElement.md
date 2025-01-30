# # WebhookListElement

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**pkiWebhookID** | **int** | The unique ID of the Webhook |
**sWebhookDescription** | **string** | The description of the Webhook |
**sWebhookUrl** | **string** | The URL of the Webhook callback |
**sWebhookEvent** | **string** | The concatenated string to describe the Webhook event |
**sWebhookEmailfailed** | **string** | The email that will receive the Webhook in case all attempts fail |
**eWebhookModule** | [**\eZmaxAPI\Model\FieldEWebhookModule**](FieldEWebhookModule.md) |  |
**eWebhookEzsignevent** | [**\eZmaxAPI\Model\FieldEWebhookEzsignevent**](FieldEWebhookEzsignevent.md) |  | [optional]
**eWebhookManagementevent** | [**\eZmaxAPI\Model\FieldEWebhookManagementevent**](FieldEWebhookManagementevent.md) |  | [optional]
**bWebhookIsactive** | **bool** | Whether the Webhook is active or not |
**bWebhookIssigned** | **bool** | Whether the requests will be signed or not |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
