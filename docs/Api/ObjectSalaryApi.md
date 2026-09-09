# eZmaxAPI\ObjectSalaryApi



All URIs are relative to https://prod.api.appcluster01.ca-central-1.ezmax.com/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**salaryBatchDownloadV1()**](ObjectSalaryApi.md#salaryBatchDownloadV1) | **POST** /1/object/salary/{pkiSalaryID}/batchDownload | Download multiples attachments from a Reconciliation |
| [**salaryGetAttachmentsV1()**](ObjectSalaryApi.md#salaryGetAttachmentsV1) | **GET** /1/object/salary/{pkiSalaryID}/getAttachments | Retrieve Salary&#39;s attachments |
| [**salaryImportIntoEDMV1()**](ObjectSalaryApi.md#salaryImportIntoEDMV1) | **POST** /1/object/salary/{pkiSalaryID}/importIntoEDM | Import attachments into the Salary |


## `salaryBatchDownloadV1()`

```php
salaryBatchDownloadV1($pkiSalaryID, $salaryBatchDownloadV1Request): \SplFileObject
```

Download multiples attachments from a Reconciliation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectSalaryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiSalaryID = 56; // int
$salaryBatchDownloadV1Request = new \eZmaxAPI\Model\SalaryBatchDownloadV1Request(); // \eZmaxAPI\Model\SalaryBatchDownloadV1Request

try {
    $result = $apiInstance->salaryBatchDownloadV1($pkiSalaryID, $salaryBatchDownloadV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectSalaryApi->salaryBatchDownloadV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiSalaryID** | **int**|  | |
| **salaryBatchDownloadV1Request** | [**\eZmaxAPI\Model\SalaryBatchDownloadV1Request**](../Model/SalaryBatchDownloadV1Request.md)|  | |

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

## `salaryGetAttachmentsV1()`

```php
salaryGetAttachmentsV1($pkiSalaryID): \eZmaxAPI\Model\SalaryGetAttachmentsV1Response
```

Retrieve Salary's attachments

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectSalaryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiSalaryID = 56; // int

try {
    $result = $apiInstance->salaryGetAttachmentsV1($pkiSalaryID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectSalaryApi->salaryGetAttachmentsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiSalaryID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\SalaryGetAttachmentsV1Response**](../Model/SalaryGetAttachmentsV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `salaryImportIntoEDMV1()`

```php
salaryImportIntoEDMV1($pkiSalaryID, $salaryImportIntoEDMV1Request): \eZmaxAPI\Model\SalaryImportIntoEDMV1Response
```

Import attachments into the Salary

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectSalaryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiSalaryID = 56; // int
$salaryImportIntoEDMV1Request = new \eZmaxAPI\Model\SalaryImportIntoEDMV1Request(); // \eZmaxAPI\Model\SalaryImportIntoEDMV1Request

try {
    $result = $apiInstance->salaryImportIntoEDMV1($pkiSalaryID, $salaryImportIntoEDMV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectSalaryApi->salaryImportIntoEDMV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiSalaryID** | **int**|  | |
| **salaryImportIntoEDMV1Request** | [**\eZmaxAPI\Model\SalaryImportIntoEDMV1Request**](../Model/SalaryImportIntoEDMV1Request.md)|  | |

### Return type

[**\eZmaxAPI\Model\SalaryImportIntoEDMV1Response**](../Model/SalaryImportIntoEDMV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
