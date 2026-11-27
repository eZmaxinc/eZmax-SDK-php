# eZmaxAPI\ObjectSupplierApi



All URIs are relative to https://prod.api.appcluster01.ca-central-1.ezmax.com/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**supplierBatchDownloadV1()**](ObjectSupplierApi.md#supplierBatchDownloadV1) | **POST** /1/object/supplier/{pkiSupplierID}/batchDownload | Download multiples attachments from a Supplier |
| [**supplierGetAttachmentsV1()**](ObjectSupplierApi.md#supplierGetAttachmentsV1) | **GET** /1/object/supplier/{pkiSupplierID}/getAttachments | Retrieve Supplier&#39;s attachments |
| [**supplierGetCommunicationCountV1()**](ObjectSupplierApi.md#supplierGetCommunicationCountV1) | **GET** /1/object/supplier/{pkiSupplierID}/getCommunicationCount | Retrieve Communication count |
| [**supplierGetCommunicationListV1()**](ObjectSupplierApi.md#supplierGetCommunicationListV1) | **GET** /1/object/supplier/{pkiSupplierID}/getCommunicationList | Retrieve Communication list |
| [**supplierGetCommunicationrecipientsV1()**](ObjectSupplierApi.md#supplierGetCommunicationrecipientsV1) | **GET** /1/object/supplier/{pkiSupplierID}/getCommunicationrecipients | Retrieve Communication recipients |
| [**supplierGetCommunicationsendersV1()**](ObjectSupplierApi.md#supplierGetCommunicationsendersV1) | **GET** /1/object/supplier/{pkiSupplierID}/getCommunicationsenders | Retrieve Communication senders |
| [**supplierGetListV1()**](ObjectSupplierApi.md#supplierGetListV1) | **GET** /1/object/supplier/getList | Retrieve Supplier list |
| [**supplierImportIntoEDMV1()**](ObjectSupplierApi.md#supplierImportIntoEDMV1) | **POST** /1/object/supplier/{pkiSupplierID}/importIntoEDM | Import attachments into the Supplier |


## `supplierBatchDownloadV1()`

```php
supplierBatchDownloadV1($pkiSupplierID, $supplierBatchDownloadV1Request): \SplFileObject
```

Download multiples attachments from a Supplier

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectSupplierApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiSupplierID = 56; // int
$supplierBatchDownloadV1Request = new \eZmaxAPI\Model\SupplierBatchDownloadV1Request(); // \eZmaxAPI\Model\SupplierBatchDownloadV1Request

try {
    $result = $apiInstance->supplierBatchDownloadV1($pkiSupplierID, $supplierBatchDownloadV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectSupplierApi->supplierBatchDownloadV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiSupplierID** | **int**|  | |
| **supplierBatchDownloadV1Request** | [**\eZmaxAPI\Model\SupplierBatchDownloadV1Request**](../Model/SupplierBatchDownloadV1Request.md)|  | |

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

## `supplierGetAttachmentsV1()`

```php
supplierGetAttachmentsV1($pkiSupplierID): \eZmaxAPI\Model\SupplierGetAttachmentsV1Response
```

Retrieve Supplier's attachments

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectSupplierApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiSupplierID = 56; // int

try {
    $result = $apiInstance->supplierGetAttachmentsV1($pkiSupplierID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectSupplierApi->supplierGetAttachmentsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiSupplierID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\SupplierGetAttachmentsV1Response**](../Model/SupplierGetAttachmentsV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `supplierGetCommunicationCountV1()`

```php
supplierGetCommunicationCountV1($pkiSupplierID): \eZmaxAPI\Model\SupplierGetCommunicationCountV1Response
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


$apiInstance = new eZmaxAPI\Api\ObjectSupplierApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiSupplierID = 56; // int

try {
    $result = $apiInstance->supplierGetCommunicationCountV1($pkiSupplierID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectSupplierApi->supplierGetCommunicationCountV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiSupplierID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\SupplierGetCommunicationCountV1Response**](../Model/SupplierGetCommunicationCountV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `supplierGetCommunicationListV1()`

```php
supplierGetCommunicationListV1($pkiSupplierID): \eZmaxAPI\Model\SupplierGetCommunicationListV1Response
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


$apiInstance = new eZmaxAPI\Api\ObjectSupplierApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiSupplierID = 56; // int

try {
    $result = $apiInstance->supplierGetCommunicationListV1($pkiSupplierID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectSupplierApi->supplierGetCommunicationListV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiSupplierID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\SupplierGetCommunicationListV1Response**](../Model/SupplierGetCommunicationListV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `supplierGetCommunicationrecipientsV1()`

```php
supplierGetCommunicationrecipientsV1($pkiSupplierID): \eZmaxAPI\Model\SupplierGetCommunicationrecipientsV1Response
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


$apiInstance = new eZmaxAPI\Api\ObjectSupplierApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiSupplierID = 56; // int

try {
    $result = $apiInstance->supplierGetCommunicationrecipientsV1($pkiSupplierID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectSupplierApi->supplierGetCommunicationrecipientsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiSupplierID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\SupplierGetCommunicationrecipientsV1Response**](../Model/SupplierGetCommunicationrecipientsV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `supplierGetCommunicationsendersV1()`

```php
supplierGetCommunicationsendersV1($pkiSupplierID): \eZmaxAPI\Model\SupplierGetCommunicationsendersV1Response
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


$apiInstance = new eZmaxAPI\Api\ObjectSupplierApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiSupplierID = 56; // int

try {
    $result = $apiInstance->supplierGetCommunicationsendersV1($pkiSupplierID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectSupplierApi->supplierGetCommunicationsendersV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiSupplierID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\SupplierGetCommunicationsendersV1Response**](../Model/SupplierGetCommunicationsendersV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `supplierGetListV1()`

```php
supplierGetListV1($eOrderBy, $iRowMax, $iRowOffset, $acceptLanguage, $sFilter): \eZmaxAPI\Model\SupplierGetListV1Response
```

Retrieve Supplier list



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectSupplierApi(
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
    $result = $apiInstance->supplierGetListV1($eOrderBy, $iRowMax, $iRowOffset, $acceptLanguage, $sFilter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectSupplierApi->supplierGetListV1: ', $e->getMessage(), PHP_EOL;
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

[**\eZmaxAPI\Model\SupplierGetListV1Response**](../Model/SupplierGetListV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/vnd.openxmlformats-officedocument.spreadsheetml.sheet`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `supplierImportIntoEDMV1()`

```php
supplierImportIntoEDMV1($pkiSupplierID, $supplierImportIntoEDMV1Request): \eZmaxAPI\Model\SupplierImportIntoEDMV1Response
```

Import attachments into the Supplier



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectSupplierApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiSupplierID = 56; // int
$supplierImportIntoEDMV1Request = new \eZmaxAPI\Model\SupplierImportIntoEDMV1Request(); // \eZmaxAPI\Model\SupplierImportIntoEDMV1Request

try {
    $result = $apiInstance->supplierImportIntoEDMV1($pkiSupplierID, $supplierImportIntoEDMV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectSupplierApi->supplierImportIntoEDMV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiSupplierID** | **int**|  | |
| **supplierImportIntoEDMV1Request** | [**\eZmaxAPI\Model\SupplierImportIntoEDMV1Request**](../Model/SupplierImportIntoEDMV1Request.md)|  | |

### Return type

[**\eZmaxAPI\Model\SupplierImportIntoEDMV1Response**](../Model/SupplierImportIntoEDMV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
