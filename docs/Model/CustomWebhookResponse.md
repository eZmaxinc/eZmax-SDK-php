# # CustomWebhookResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**pkiWebhookID** | **int** | The unique ID of the Webhook |
**sWebhookDescription** | **string** | The description of the Webhook |
**fkiEzsignfoldertypeID** | **int** | The unique ID of the Ezsignfoldertype. | [optional]
**sEzsignfoldertypeNameX** | **string** | The name of the Ezsignfoldertype in the language of the requester | [optional]
**eWebhookModule** | [**\eZmaxAPI\Model\FieldEWebhookModule**](FieldEWebhookModule.md) |  |
**eWebhookEzsignevent** | [**\eZmaxAPI\Model\FieldEWebhookEzsignevent**](FieldEWebhookEzsignevent.md) |  | [optional]
**eWebhookManagementevent** | [**\eZmaxAPI\Model\FieldEWebhookManagementevent**](FieldEWebhookManagementevent.md) |  | [optional]
**sWebhookUrl** | **string** | The URL of the Webhook callback |
**sWebhookEmailfailed** | **string** | The email that will receive the Webhook in case all attempts fail |
**sWebhookApikey** | **string** | The Apikey for the Webhook.  This will be hidden if we are not creating or regenerating the Apikey. | [optional]
**sWebhookSecret** | **string** | The Secret for the Webhook.  This will be hidden if we are not creating or regenerating the Apikey. | [optional]
**bWebhookIsactive** | **bool** | Whether the Webhook is active or not |
**bWebhookIssigned** | **bool** | Whether the requests will be signed or not |
**bWebhookSkipsslvalidation** | **bool** | Wheter the server&#39;s SSL certificate should be validated or not. Not recommended to skip for production use |
**objAudit** | [**\eZmaxAPI\Model\CommonAudit**](CommonAudit.md) |  |
**pksCustomerCode** | **string** | The customer code assigned to your account |
**bWebhookTest** | **bool** | Wheter the webhook received is a manual test or a real event |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
