# eZmaxAPI\ObjectOfficetaxreportApi



All URIs are relative to https://prod.api.appcluster01.ca-central-1.ezmax.com/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**officetaxreportBatchDownloadV1()**](ObjectOfficetaxreportApi.md#officetaxreportBatchDownloadV1) | **POST** /1/object/officetaxreport/{pkiOfficetaxreportID}/batchDownload | Download multiples attachments from an Officetaxreport |
| [**officetaxreportGetAttachmentsV1()**](ObjectOfficetaxreportApi.md#officetaxreportGetAttachmentsV1) | **GET** /1/object/officetaxreport/{pkiOfficetaxreportID}/getAttachments | Retrieve Officetaxreport&#39;s attachments |
| [**officetaxreportImportIntoEDMV1()**](ObjectOfficetaxreportApi.md#officetaxreportImportIntoEDMV1) | **POST** /1/object/officetaxreport/{pkiOfficetaxreportID}/importIntoEDM | Import attachments into the Officetaxreport |


## `officetaxreportBatchDownloadV1()`

```php
officetaxreportBatchDownloadV1($pkiOfficetaxreportID, $officetaxreportBatchDownloadV1Request): \SplFileObject
```

Download multiples attachments from an Officetaxreport

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectOfficetaxreportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiOfficetaxreportID = 56; // int
$officetaxreportBatchDownloadV1Request = new \eZmaxAPI\Model\OfficetaxreportBatchDownloadV1Request(); // \eZmaxAPI\Model\OfficetaxreportBatchDownloadV1Request

try {
    $result = $apiInstance->officetaxreportBatchDownloadV1($pkiOfficetaxreportID, $officetaxreportBatchDownloadV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectOfficetaxreportApi->officetaxreportBatchDownloadV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiOfficetaxreportID** | **int**|  | |
| **officetaxreportBatchDownloadV1Request** | [**\eZmaxAPI\Model\OfficetaxreportBatchDownloadV1Request**](../Model/OfficetaxreportBatchDownloadV1Request.md)|  | |

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

## `officetaxreportGetAttachmentsV1()`

```php
officetaxreportGetAttachmentsV1($pkiOfficetaxreportID): \eZmaxAPI\Model\OfficetaxreportGetAttachmentsV1Response
```

Retrieve Officetaxreport's attachments

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectOfficetaxreportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiOfficetaxreportID = 56; // int

try {
    $result = $apiInstance->officetaxreportGetAttachmentsV1($pkiOfficetaxreportID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectOfficetaxreportApi->officetaxreportGetAttachmentsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiOfficetaxreportID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\OfficetaxreportGetAttachmentsV1Response**](../Model/OfficetaxreportGetAttachmentsV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `officetaxreportImportIntoEDMV1()`

```php
officetaxreportImportIntoEDMV1($pkiOfficetaxreportID, $officetaxreportImportIntoEDMV1Request): \eZmaxAPI\Model\OfficetaxreportImportIntoEDMV1Response
```

Import attachments into the Officetaxreport

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectOfficetaxreportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiOfficetaxreportID = 56; // int
$officetaxreportImportIntoEDMV1Request = new \eZmaxAPI\Model\OfficetaxreportImportIntoEDMV1Request(); // \eZmaxAPI\Model\OfficetaxreportImportIntoEDMV1Request

try {
    $result = $apiInstance->officetaxreportImportIntoEDMV1($pkiOfficetaxreportID, $officetaxreportImportIntoEDMV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectOfficetaxreportApi->officetaxreportImportIntoEDMV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiOfficetaxreportID** | **int**|  | |
| **officetaxreportImportIntoEDMV1Request** | [**\eZmaxAPI\Model\OfficetaxreportImportIntoEDMV1Request**](../Model/OfficetaxreportImportIntoEDMV1Request.md)|  | |

### Return type

[**\eZmaxAPI\Model\OfficetaxreportImportIntoEDMV1Response**](../Model/OfficetaxreportImportIntoEDMV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
