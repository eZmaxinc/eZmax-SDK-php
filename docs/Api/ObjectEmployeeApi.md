# eZmaxAPI\ObjectEmployeeApi



All URIs are relative to https://prod.api.appcluster01.ca-central-1.ezmax.com/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**employeeBatchDownloadV1()**](ObjectEmployeeApi.md#employeeBatchDownloadV1) | **POST** /1/object/employee/{pkiEmployeeID}/batchDownload | Download multiples attachments from a Employee |
| [**employeeGetAttachmentsV1()**](ObjectEmployeeApi.md#employeeGetAttachmentsV1) | **GET** /1/object/employee/{pkiEmployeeID}/getAttachments | Retrieve Employee&#39;s attachments |
| [**employeeGetListV1()**](ObjectEmployeeApi.md#employeeGetListV1) | **GET** /1/object/employee/getList | Retrieve Employee list |
| [**employeeImportIntoEDMV1()**](ObjectEmployeeApi.md#employeeImportIntoEDMV1) | **POST** /1/object/employee/{pkiEmployeeID}/importIntoEDM | Import attachments into the Employee |


## `employeeBatchDownloadV1()`

```php
employeeBatchDownloadV1($pkiEmployeeID, $employeeBatchDownloadV1Request): \SplFileObject
```

Download multiples attachments from a Employee

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEmployeeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEmployeeID = 56; // int
$employeeBatchDownloadV1Request = new \eZmaxAPI\Model\EmployeeBatchDownloadV1Request(); // \eZmaxAPI\Model\EmployeeBatchDownloadV1Request

try {
    $result = $apiInstance->employeeBatchDownloadV1($pkiEmployeeID, $employeeBatchDownloadV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEmployeeApi->employeeBatchDownloadV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiEmployeeID** | **int**|  | |
| **employeeBatchDownloadV1Request** | [**\eZmaxAPI\Model\EmployeeBatchDownloadV1Request**](../Model/EmployeeBatchDownloadV1Request.md)|  | |

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

## `employeeGetAttachmentsV1()`

```php
employeeGetAttachmentsV1($pkiEmployeeID): \eZmaxAPI\Model\EmployeeGetAttachmentsV1Response
```

Retrieve Employee's attachments

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEmployeeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEmployeeID = 56; // int

try {
    $result = $apiInstance->employeeGetAttachmentsV1($pkiEmployeeID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEmployeeApi->employeeGetAttachmentsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiEmployeeID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\EmployeeGetAttachmentsV1Response**](../Model/EmployeeGetAttachmentsV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `employeeGetListV1()`

```php
employeeGetListV1($eOrderBy, $iRowMax, $iRowOffset, $acceptLanguage, $sFilter): \eZmaxAPI\Model\EmployeeGetListV1Response
```

Retrieve Employee list



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEmployeeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$eOrderBy = 'eOrderBy_example'; // string | Specify how you want the results to be sorted
$iRowMax = 56; // int
$iRowOffset = 0; // int
$acceptLanguage = new \eZmaxAPI\Model\\eZmaxAPI\Model\HeaderAcceptLanguage(); // \eZmaxAPI\Model\HeaderAcceptLanguage
$sFilter = 'sFilter_example'; // string

try {
    $result = $apiInstance->employeeGetListV1($eOrderBy, $iRowMax, $iRowOffset, $acceptLanguage, $sFilter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEmployeeApi->employeeGetListV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **eOrderBy** | **string**| Specify how you want the results to be sorted | [optional] |
| **iRowMax** | **int**|  | [optional] |
| **iRowOffset** | **int**|  | [optional] [default to 0] |
| **acceptLanguage** | [**\eZmaxAPI\Model\HeaderAcceptLanguage**](../Model/.md)|  | [optional] |
| **sFilter** | **string**|  | [optional] |

### Return type

[**\eZmaxAPI\Model\EmployeeGetListV1Response**](../Model/EmployeeGetListV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/vnd.openxmlformats-officedocument.spreadsheetml.sheet`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `employeeImportIntoEDMV1()`

```php
employeeImportIntoEDMV1($pkiEmployeeID, $employeeImportIntoEDMV1Request): \eZmaxAPI\Model\EmployeeImportIntoEDMV1Response
```

Import attachments into the Employee



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEmployeeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEmployeeID = 56; // int
$employeeImportIntoEDMV1Request = new \eZmaxAPI\Model\EmployeeImportIntoEDMV1Request(); // \eZmaxAPI\Model\EmployeeImportIntoEDMV1Request

try {
    $result = $apiInstance->employeeImportIntoEDMV1($pkiEmployeeID, $employeeImportIntoEDMV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEmployeeApi->employeeImportIntoEDMV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiEmployeeID** | **int**|  | |
| **employeeImportIntoEDMV1Request** | [**\eZmaxAPI\Model\EmployeeImportIntoEDMV1Request**](../Model/EmployeeImportIntoEDMV1Request.md)|  | |

### Return type

[**\eZmaxAPI\Model\EmployeeImportIntoEDMV1Response**](../Model/EmployeeImportIntoEDMV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
