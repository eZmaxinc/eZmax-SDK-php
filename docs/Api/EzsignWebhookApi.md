# eZmaxAPI\EzsignWebhookApi

All URIs are relative to *https://prod.api.appcluster01.ca-central-1.ezmax.com/rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**webhookEzsignDocumentCompleted**](EzsignWebhookApi.md#webhookEzsignDocumentCompleted) | **POST** /{WebhookPathEzsignDocumentCompleted} | DocumentCompleted
[**webhookEzsignFolderCompleted**](EzsignWebhookApi.md#webhookEzsignFolderCompleted) | **POST** /{WebhookPathEzsignFolderCompleted} | FolderCompleted



## webhookEzsignDocumentCompleted

> webhookEzsignDocumentCompleted($webhookPathEzsignDocumentCompleted, $webhookEzsignDocumentCompleted)

DocumentCompleted

This Webhook will be called when the last signature on an Ezsigndocument is made.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\EzsignWebhookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhookPathEzsignDocumentCompleted = 'webhookPathEzsignDocumentCompleted_example'; // string | The path on your server where your webhook listener resides
$webhookEzsignDocumentCompleted = new \eZmaxAPI\Model\WebhookEzsignDocumentCompleted(); // \eZmaxAPI\Model\WebhookEzsignDocumentCompleted | 

try {
    $apiInstance->webhookEzsignDocumentCompleted($webhookPathEzsignDocumentCompleted, $webhookEzsignDocumentCompleted);
} catch (Exception $e) {
    echo 'Exception when calling EzsignWebhookApi->webhookEzsignDocumentCompleted: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webhookPathEzsignDocumentCompleted** | **string**| The path on your server where your webhook listener resides |
 **webhookEzsignDocumentCompleted** | [**\eZmaxAPI\Model\WebhookEzsignDocumentCompleted**](../Model/WebhookEzsignDocumentCompleted.md)|  |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## webhookEzsignFolderCompleted

> webhookEzsignFolderCompleted($webhookPathEzsignFolderCompleted, $webhookEzsignFolderCompleted)

FolderCompleted

This Webhook will be called when the last signature on the last Ezsigndocument from the folder is made.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\EzsignWebhookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhookPathEzsignFolderCompleted = 'webhookPathEzsignFolderCompleted_example'; // string | The path on your server where your webhook listener resides
$webhookEzsignFolderCompleted = new \eZmaxAPI\Model\WebhookEzsignFolderCompleted(); // \eZmaxAPI\Model\WebhookEzsignFolderCompleted | 

try {
    $apiInstance->webhookEzsignFolderCompleted($webhookPathEzsignFolderCompleted, $webhookEzsignFolderCompleted);
} catch (Exception $e) {
    echo 'Exception when calling EzsignWebhookApi->webhookEzsignFolderCompleted: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webhookPathEzsignFolderCompleted** | **string**| The path on your server where your webhook listener resides |
 **webhookEzsignFolderCompleted** | [**\eZmaxAPI\Model\WebhookEzsignFolderCompleted**](../Model/WebhookEzsignFolderCompleted.md)|  |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

