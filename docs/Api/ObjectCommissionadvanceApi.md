# eZmaxAPI\ObjectCommissionadvanceApi



All URIs are relative to https://prod.api.appcluster01.ca-central-1.ezmax.com/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**commissionadvanceBatchDownloadV1()**](ObjectCommissionadvanceApi.md#commissionadvanceBatchDownloadV1) | **POST** /1/object/commissionadvance/{pkiCommissionadvanceID}/batchDownload | Download multiples attachments from a Commission advance |
| [**commissionadvanceGetAttachmentsV1()**](ObjectCommissionadvanceApi.md#commissionadvanceGetAttachmentsV1) | **GET** /1/object/commissionadvance/{pkiCommissionadvanceID}/getAttachments | Retrieve Commissionadvance&#39;s attachments |
| [**commissionadvanceImportIntoEDMV1()**](ObjectCommissionadvanceApi.md#commissionadvanceImportIntoEDMV1) | **POST** /1/object/commissionadvance/{pkiCommissionadvanceID}/importIntoEDM | Import attachments into the Commissionadvance |


## `commissionadvanceBatchDownloadV1()`

```php
commissionadvanceBatchDownloadV1($pkiCommissionadvanceID, $commissionadvanceBatchDownloadV1Request): \SplFileObject
```

Download multiples attachments from a Commission advance

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectCommissionadvanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiCommissionadvanceID = 56; // int
$commissionadvanceBatchDownloadV1Request = new \eZmaxAPI\Model\CommissionadvanceBatchDownloadV1Request(); // \eZmaxAPI\Model\CommissionadvanceBatchDownloadV1Request

try {
    $result = $apiInstance->commissionadvanceBatchDownloadV1($pkiCommissionadvanceID, $commissionadvanceBatchDownloadV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectCommissionadvanceApi->commissionadvanceBatchDownloadV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiCommissionadvanceID** | **int**|  | |
| **commissionadvanceBatchDownloadV1Request** | [**\eZmaxAPI\Model\CommissionadvanceBatchDownloadV1Request**](../Model/CommissionadvanceBatchDownloadV1Request.md)|  | |

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

## `commissionadvanceGetAttachmentsV1()`

```php
commissionadvanceGetAttachmentsV1($pkiCommissionadvanceID): \eZmaxAPI\Model\CommissionadvanceGetAttachmentsV1Response
```

Retrieve Commissionadvance's attachments

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectCommissionadvanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiCommissionadvanceID = 56; // int

try {
    $result = $apiInstance->commissionadvanceGetAttachmentsV1($pkiCommissionadvanceID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectCommissionadvanceApi->commissionadvanceGetAttachmentsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiCommissionadvanceID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\CommissionadvanceGetAttachmentsV1Response**](../Model/CommissionadvanceGetAttachmentsV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `commissionadvanceImportIntoEDMV1()`

```php
commissionadvanceImportIntoEDMV1($pkiCommissionadvanceID, $commissionadvanceImportIntoEDMV1Request): \eZmaxAPI\Model\CommissionadvanceImportIntoEDMV1Response
```

Import attachments into the Commissionadvance

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectCommissionadvanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiCommissionadvanceID = 56; // int
$commissionadvanceImportIntoEDMV1Request = new \eZmaxAPI\Model\CommissionadvanceImportIntoEDMV1Request(); // \eZmaxAPI\Model\CommissionadvanceImportIntoEDMV1Request

try {
    $result = $apiInstance->commissionadvanceImportIntoEDMV1($pkiCommissionadvanceID, $commissionadvanceImportIntoEDMV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectCommissionadvanceApi->commissionadvanceImportIntoEDMV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiCommissionadvanceID** | **int**|  | |
| **commissionadvanceImportIntoEDMV1Request** | [**\eZmaxAPI\Model\CommissionadvanceImportIntoEDMV1Request**](../Model/CommissionadvanceImportIntoEDMV1Request.md)|  | |

### Return type

[**\eZmaxAPI\Model\CommissionadvanceImportIntoEDMV1Response**](../Model/CommissionadvanceImportIntoEDMV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
