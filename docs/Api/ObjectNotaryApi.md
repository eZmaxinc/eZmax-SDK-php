# eZmaxAPI\ObjectNotaryApi



All URIs are relative to https://prod.api.appcluster01.ca-central-1.ezmax.com/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**notaryBatchDownloadV1()**](ObjectNotaryApi.md#notaryBatchDownloadV1) | **POST** /1/object/notary/{pkiNotaryID}/batchDownload | Download multiples attachments from a Notary |
| [**notaryGetAttachmentsV1()**](ObjectNotaryApi.md#notaryGetAttachmentsV1) | **GET** /1/object/notary/{pkiNotaryID}/getAttachments | Retrieve Notary&#39;s attachments |
| [**notaryImportIntoEDMV1()**](ObjectNotaryApi.md#notaryImportIntoEDMV1) | **POST** /1/object/notary/{pkiNotaryID}/importIntoEDM | Import attachments into the Notary |


## `notaryBatchDownloadV1()`

```php
notaryBatchDownloadV1($pkiNotaryID, $notaryBatchDownloadV1Request): \SplFileObject
```

Download multiples attachments from a Notary

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectNotaryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiNotaryID = 56; // int
$notaryBatchDownloadV1Request = new \eZmaxAPI\Model\NotaryBatchDownloadV1Request(); // \eZmaxAPI\Model\NotaryBatchDownloadV1Request

try {
    $result = $apiInstance->notaryBatchDownloadV1($pkiNotaryID, $notaryBatchDownloadV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectNotaryApi->notaryBatchDownloadV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiNotaryID** | **int**|  | |
| **notaryBatchDownloadV1Request** | [**\eZmaxAPI\Model\NotaryBatchDownloadV1Request**](../Model/NotaryBatchDownloadV1Request.md)|  | |

### Return type

**\SplFileObject**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/zip`, `text/xml`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `notaryGetAttachmentsV1()`

```php
notaryGetAttachmentsV1($pkiNotaryID): \eZmaxAPI\Model\NotaryGetAttachmentsV1Response
```

Retrieve Notary's attachments

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectNotaryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiNotaryID = 56; // int

try {
    $result = $apiInstance->notaryGetAttachmentsV1($pkiNotaryID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectNotaryApi->notaryGetAttachmentsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiNotaryID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\NotaryGetAttachmentsV1Response**](../Model/NotaryGetAttachmentsV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `notaryImportIntoEDMV1()`

```php
notaryImportIntoEDMV1($pkiNotaryID, $notaryImportIntoEDMV1Request): \eZmaxAPI\Model\NotaryImportIntoEDMV1Response
```

Import attachments into the Notary

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectNotaryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiNotaryID = 56; // int
$notaryImportIntoEDMV1Request = new \eZmaxAPI\Model\NotaryImportIntoEDMV1Request(); // \eZmaxAPI\Model\NotaryImportIntoEDMV1Request

try {
    $result = $apiInstance->notaryImportIntoEDMV1($pkiNotaryID, $notaryImportIntoEDMV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectNotaryApi->notaryImportIntoEDMV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiNotaryID** | **int**|  | |
| **notaryImportIntoEDMV1Request** | [**\eZmaxAPI\Model\NotaryImportIntoEDMV1Request**](../Model/NotaryImportIntoEDMV1Request.md)|  | |

### Return type

[**\eZmaxAPI\Model\NotaryImportIntoEDMV1Response**](../Model/NotaryImportIntoEDMV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
