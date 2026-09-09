# eZmaxAPI\ObjectLeadApi



All URIs are relative to https://prod.api.appcluster01.ca-central-1.ezmax.com/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**leadBatchDownloadV1()**](ObjectLeadApi.md#leadBatchDownloadV1) | **POST** /1/object/lead/{pkiLeadID}/batchDownload | Download multiples attachments from a Lead |
| [**leadGetAttachmentsV1()**](ObjectLeadApi.md#leadGetAttachmentsV1) | **GET** /1/object/lead/{pkiLeadID}/getAttachments | Retrieve Lead&#39;s attachments |
| [**leadGetListV1()**](ObjectLeadApi.md#leadGetListV1) | **GET** /1/object/lead/getList | Retrieve Lead list |
| [**leadImportIntoEDMV1()**](ObjectLeadApi.md#leadImportIntoEDMV1) | **POST** /1/object/lead/{pkiLeadID}/importIntoEDM | Import attachments into the Lead |


## `leadBatchDownloadV1()`

```php
leadBatchDownloadV1($pkiLeadID, $leadBatchDownloadV1Request): \SplFileObject
```

Download multiples attachments from a Lead

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectLeadApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiLeadID = 56; // int
$leadBatchDownloadV1Request = new \eZmaxAPI\Model\LeadBatchDownloadV1Request(); // \eZmaxAPI\Model\LeadBatchDownloadV1Request

try {
    $result = $apiInstance->leadBatchDownloadV1($pkiLeadID, $leadBatchDownloadV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectLeadApi->leadBatchDownloadV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiLeadID** | **int**|  | |
| **leadBatchDownloadV1Request** | [**\eZmaxAPI\Model\LeadBatchDownloadV1Request**](../Model/LeadBatchDownloadV1Request.md)|  | |

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

## `leadGetAttachmentsV1()`

```php
leadGetAttachmentsV1($pkiLeadID): \eZmaxAPI\Model\LeadGetAttachmentsV1Response
```

Retrieve Lead's attachments

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectLeadApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiLeadID = 56; // int

try {
    $result = $apiInstance->leadGetAttachmentsV1($pkiLeadID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectLeadApi->leadGetAttachmentsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiLeadID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\LeadGetAttachmentsV1Response**](../Model/LeadGetAttachmentsV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `leadGetListV1()`

```php
leadGetListV1($eOrderBy, $iRowMax, $iRowOffset, $acceptLanguage, $sFilter): \eZmaxAPI\Model\LeadGetListV1Response
```

Retrieve Lead list

Enum values that can be filtered in query parameter *sFilter*:  | Variable | Valid values | |---|---| | eLeadStatus | New<br>Dispatching<br>Assigned<br>Lost<br>Won |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectLeadApi(
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
    $result = $apiInstance->leadGetListV1($eOrderBy, $iRowMax, $iRowOffset, $acceptLanguage, $sFilter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectLeadApi->leadGetListV1: ', $e->getMessage(), PHP_EOL;
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

[**\eZmaxAPI\Model\LeadGetListV1Response**](../Model/LeadGetListV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/vnd.openxmlformats-officedocument.spreadsheetml.sheet`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `leadImportIntoEDMV1()`

```php
leadImportIntoEDMV1($pkiLeadID, $leadImportIntoEDMV1Request): \eZmaxAPI\Model\LeadImportIntoEDMV1Response
```

Import attachments into the Lead



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectLeadApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiLeadID = 56; // int
$leadImportIntoEDMV1Request = new \eZmaxAPI\Model\LeadImportIntoEDMV1Request(); // \eZmaxAPI\Model\LeadImportIntoEDMV1Request

try {
    $result = $apiInstance->leadImportIntoEDMV1($pkiLeadID, $leadImportIntoEDMV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectLeadApi->leadImportIntoEDMV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiLeadID** | **int**|  | |
| **leadImportIntoEDMV1Request** | [**\eZmaxAPI\Model\LeadImportIntoEDMV1Request**](../Model/LeadImportIntoEDMV1Request.md)|  | |

### Return type

[**\eZmaxAPI\Model\LeadImportIntoEDMV1Response**](../Model/LeadImportIntoEDMV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
