# eZmaxAPI\ObjectAttachmentApi

All URIs are relative to https://prod.api.appcluster01.ca-central-1.ezmax.com/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**attachmentDownloadV1()**](ObjectAttachmentApi.md#attachmentDownloadV1) | **GET** /1/object/attachment/{pkiAttachmentID}/download | Retrieve the content |


## `attachmentDownloadV1()`

```php
attachmentDownloadV1($pkiAttachmentID): \eZmaxAPI\Model\AttachmentDownloadV1Response
```

Retrieve the content

Using this endpoint, you can retrieve the content of an attachment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectAttachmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiAttachmentID = 56; // int

try {
    $result = $apiInstance->attachmentDownloadV1($pkiAttachmentID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectAttachmentApi->attachmentDownloadV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiAttachmentID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\AttachmentDownloadV1Response**](../Model/AttachmentDownloadV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
