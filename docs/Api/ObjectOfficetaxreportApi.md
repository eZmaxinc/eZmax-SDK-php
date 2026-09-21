# eZmaxAPI\ObjectOfficetaxreportApi



All URIs are relative to https://prod.api.appcluster01.ca-central-1.ezmax.com/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**officetaxreportBatchDownloadV1()**](ObjectOfficetaxreportApi.md#officetaxreportBatchDownloadV1) | **POST** /1/object/officetaxreport/{pkiOfficetaxreportID}/batchDownload | Download multiples attachments from an Officetaxreport |
| [**officetaxreportGetAttachmentsV1()**](ObjectOfficetaxreportApi.md#officetaxreportGetAttachmentsV1) | **GET** /1/object/officetaxreport/{pkiOfficetaxreportID}/getAttachments | Retrieve Officetaxreport&#39;s attachments |
| [**officetaxreportGetCommunicationCountV1()**](ObjectOfficetaxreportApi.md#officetaxreportGetCommunicationCountV1) | **GET** /1/object/officetaxreport/{pkiOfficetaxreportID}/getCommunicationCount | Retrieve Communication count |
| [**officetaxreportGetCommunicationListV1()**](ObjectOfficetaxreportApi.md#officetaxreportGetCommunicationListV1) | **GET** /1/object/officetaxreport/{pkiOfficetaxreportID}/getCommunicationList | Retrieve Communication list |
| [**officetaxreportGetCommunicationrecipientsV1()**](ObjectOfficetaxreportApi.md#officetaxreportGetCommunicationrecipientsV1) | **GET** /1/object/officetaxreport/{pkiOfficetaxreportID}/getCommunicationrecipients | Retrieve Communication recipients |
| [**officetaxreportGetCommunicationsendersV1()**](ObjectOfficetaxreportApi.md#officetaxreportGetCommunicationsendersV1) | **GET** /1/object/officetaxreport/{pkiOfficetaxreportID}/getCommunicationsenders | Retrieve Communication senders |
| [**officetaxreportGetListV1()**](ObjectOfficetaxreportApi.md#officetaxreportGetListV1) | **GET** /1/object/officetaxreport/getList | Retrieve Officetaxreport list |
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

## `officetaxreportGetCommunicationCountV1()`

```php
officetaxreportGetCommunicationCountV1($pkiOfficetaxreportID): \eZmaxAPI\Model\OfficetaxreportGetCommunicationCountV1Response
```

Retrieve Communication count

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
    $result = $apiInstance->officetaxreportGetCommunicationCountV1($pkiOfficetaxreportID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectOfficetaxreportApi->officetaxreportGetCommunicationCountV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiOfficetaxreportID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\OfficetaxreportGetCommunicationCountV1Response**](../Model/OfficetaxreportGetCommunicationCountV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `officetaxreportGetCommunicationListV1()`

```php
officetaxreportGetCommunicationListV1($pkiOfficetaxreportID): \eZmaxAPI\Model\OfficetaxreportGetCommunicationListV1Response
```

Retrieve Communication list

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
    $result = $apiInstance->officetaxreportGetCommunicationListV1($pkiOfficetaxreportID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectOfficetaxreportApi->officetaxreportGetCommunicationListV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiOfficetaxreportID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\OfficetaxreportGetCommunicationListV1Response**](../Model/OfficetaxreportGetCommunicationListV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `officetaxreportGetCommunicationrecipientsV1()`

```php
officetaxreportGetCommunicationrecipientsV1($pkiOfficetaxreportID): \eZmaxAPI\Model\OfficetaxreportGetCommunicationrecipientsV1Response
```

Retrieve Communication recipients

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
    $result = $apiInstance->officetaxreportGetCommunicationrecipientsV1($pkiOfficetaxreportID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectOfficetaxreportApi->officetaxreportGetCommunicationrecipientsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiOfficetaxreportID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\OfficetaxreportGetCommunicationrecipientsV1Response**](../Model/OfficetaxreportGetCommunicationrecipientsV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `officetaxreportGetCommunicationsendersV1()`

```php
officetaxreportGetCommunicationsendersV1($pkiOfficetaxreportID): \eZmaxAPI\Model\OfficetaxreportGetCommunicationsendersV1Response
```

Retrieve Communication senders

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
    $result = $apiInstance->officetaxreportGetCommunicationsendersV1($pkiOfficetaxreportID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectOfficetaxreportApi->officetaxreportGetCommunicationsendersV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiOfficetaxreportID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\OfficetaxreportGetCommunicationsendersV1Response**](../Model/OfficetaxreportGetCommunicationsendersV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `officetaxreportGetListV1()`

```php
officetaxreportGetListV1($eOrderBy, $iRowMax, $iRowOffset, $acceptLanguage, $sFilter): \eZmaxAPI\Model\OfficetaxreportGetListV1Response
```

Retrieve Officetaxreport list



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
$eOrderBy = 'eOrderBy_example'; // string | Specify how you want the results to be sorted
$iRowMax = 56; // int
$iRowOffset = 0; // int
$acceptLanguage = new \eZmaxAPI\Model\\eZmaxAPI\Model\HeaderAcceptLanguage(); // \eZmaxAPI\Model\HeaderAcceptLanguage
$sFilter = 'sFilter_example'; // string

try {
    $result = $apiInstance->officetaxreportGetListV1($eOrderBy, $iRowMax, $iRowOffset, $acceptLanguage, $sFilter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectOfficetaxreportApi->officetaxreportGetListV1: ', $e->getMessage(), PHP_EOL;
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

[**\eZmaxAPI\Model\OfficetaxreportGetListV1Response**](../Model/OfficetaxreportGetListV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/vnd.openxmlformats-officedocument.spreadsheetml.sheet`

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
