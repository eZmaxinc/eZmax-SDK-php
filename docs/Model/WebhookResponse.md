# # WebhookResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**pksCustomerCode** | **string** | The customer code assigned to your account |
**pkiWebhookID** | **int** | The Webhook ID. This value is visible in the admin interface. |
**eWebhookModule** | **string** | The Module generating the Event. |
**eWebhookEzsignevent** | **string** | This Ezsign Event. This property will be set only if the Module is \&quot;Ezsign\&quot;. | [optional]
**eWebhookManagementevent** | **string** | This Management Event. This property will be set only if the Module is \&quot;Management\&quot;. | [optional]
**sWebhookUrl** | **string** | The url being called |
**bWebhookTest** | **bool** | Wheter the webhook received is a manual test or a real event |
**bWebhookSkipsslvalidation** | **bool** | Wheter the server&#39;s SSL certificate should be validated or not. Not recommended for production use. |
**sWebhookEmailfailed** | **string** | The email that will receive the webhook in case all attempts fail. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
