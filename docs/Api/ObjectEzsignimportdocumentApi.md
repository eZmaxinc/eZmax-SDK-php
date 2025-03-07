# eZmaxAPI\ObjectEzsignimportdocumentApi

All URIs are relative to https://prod.api.appcluster01.ca-central-1.ezmax.com/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**ezsignimportdocumentDownloadV1()**](ObjectEzsignimportdocumentApi.md#ezsignimportdocumentDownloadV1) | **GET** /1/object/ezsignimportdocument/{pkiEzsignimportdocumentID}/download | Retrieve the content |


## `ezsignimportdocumentDownloadV1()`

```php
ezsignimportdocumentDownloadV1($pkiEzsignimportdocumentID): \eZmaxAPI\Model\EzsignimportdocumentDownloadV1Response
```

Retrieve the content

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsignimportdocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzsignimportdocumentID = 56; // int

try {
    $result = $apiInstance->ezsignimportdocumentDownloadV1($pkiEzsignimportdocumentID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsignimportdocumentApi->ezsignimportdocumentDownloadV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiEzsignimportdocumentID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\EzsignimportdocumentDownloadV1Response**](../Model/EzsignimportdocumentDownloadV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
