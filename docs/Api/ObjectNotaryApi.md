# eZmaxAPI\ObjectNotaryApi



All URIs are relative to https://prod.api.appcluster01.ca-central-1.ezmax.com/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**notaryBatchDownloadV1()**](ObjectNotaryApi.md#notaryBatchDownloadV1) | **POST** /1/object/notary/{pkiNotaryID}/batchDownload | Download multiples attachments from a Notary |
| [**notaryGetAttachmentsV1()**](ObjectNotaryApi.md#notaryGetAttachmentsV1) | **GET** /1/object/notary/{pkiNotaryID}/getAttachments | Retrieve Notary&#39;s attachments |
| [**notaryGetCommunicationCountV1()**](ObjectNotaryApi.md#notaryGetCommunicationCountV1) | **GET** /1/object/notary/{pkiNotaryID}/getCommunicationCount | Retrieve Communication count |
| [**notaryGetCommunicationListV1()**](ObjectNotaryApi.md#notaryGetCommunicationListV1) | **GET** /1/object/notary/{pkiNotaryID}/getCommunicationList | Retrieve Communication list |
| [**notaryGetCommunicationrecipientsV1()**](ObjectNotaryApi.md#notaryGetCommunicationrecipientsV1) | **GET** /1/object/notary/{pkiNotaryID}/getCommunicationrecipients | Retrieve Communication recipients |
| [**notaryGetCommunicationsendersV1()**](ObjectNotaryApi.md#notaryGetCommunicationsendersV1) | **GET** /1/object/notary/{pkiNotaryID}/getCommunicationsenders | Retrieve Communication senders |
| [**notaryGetListV1()**](ObjectNotaryApi.md#notaryGetListV1) | **GET** /1/object/notary/getList | Retrieve Notary list |
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

## `notaryGetCommunicationCountV1()`

```php
notaryGetCommunicationCountV1($pkiNotaryID): \eZmaxAPI\Model\NotaryGetCommunicationCountV1Response
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


$apiInstance = new eZmaxAPI\Api\ObjectNotaryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiNotaryID = 56; // int

try {
    $result = $apiInstance->notaryGetCommunicationCountV1($pkiNotaryID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectNotaryApi->notaryGetCommunicationCountV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiNotaryID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\NotaryGetCommunicationCountV1Response**](../Model/NotaryGetCommunicationCountV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `notaryGetCommunicationListV1()`

```php
notaryGetCommunicationListV1($pkiNotaryID): \eZmaxAPI\Model\NotaryGetCommunicationListV1Response
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


$apiInstance = new eZmaxAPI\Api\ObjectNotaryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiNotaryID = 56; // int

try {
    $result = $apiInstance->notaryGetCommunicationListV1($pkiNotaryID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectNotaryApi->notaryGetCommunicationListV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiNotaryID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\NotaryGetCommunicationListV1Response**](../Model/NotaryGetCommunicationListV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `notaryGetCommunicationrecipientsV1()`

```php
notaryGetCommunicationrecipientsV1($pkiNotaryID): \eZmaxAPI\Model\NotaryGetCommunicationrecipientsV1Response
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


$apiInstance = new eZmaxAPI\Api\ObjectNotaryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiNotaryID = 56; // int

try {
    $result = $apiInstance->notaryGetCommunicationrecipientsV1($pkiNotaryID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectNotaryApi->notaryGetCommunicationrecipientsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiNotaryID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\NotaryGetCommunicationrecipientsV1Response**](../Model/NotaryGetCommunicationrecipientsV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `notaryGetCommunicationsendersV1()`

```php
notaryGetCommunicationsendersV1($pkiNotaryID): \eZmaxAPI\Model\NotaryGetCommunicationsendersV1Response
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


$apiInstance = new eZmaxAPI\Api\ObjectNotaryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiNotaryID = 56; // int

try {
    $result = $apiInstance->notaryGetCommunicationsendersV1($pkiNotaryID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectNotaryApi->notaryGetCommunicationsendersV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiNotaryID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\NotaryGetCommunicationsendersV1Response**](../Model/NotaryGetCommunicationsendersV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `notaryGetListV1()`

```php
notaryGetListV1($eOrderBy, $iRowMax, $iRowOffset, $acceptLanguage, $sFilter): \eZmaxAPI\Model\NotaryGetListV1Response
```

Retrieve Notary list



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
$eOrderBy = 'eOrderBy_example'; // string | Specify how you want the results to be sorted
$iRowMax = 56; // int
$iRowOffset = 0; // int
$acceptLanguage = new \eZmaxAPI\Model\\eZmaxAPI\Model\HeaderAcceptLanguage(); // \eZmaxAPI\Model\HeaderAcceptLanguage
$sFilter = 'sFilter_example'; // string

try {
    $result = $apiInstance->notaryGetListV1($eOrderBy, $iRowMax, $iRowOffset, $acceptLanguage, $sFilter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectNotaryApi->notaryGetListV1: ', $e->getMessage(), PHP_EOL;
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

[**\eZmaxAPI\Model\NotaryGetListV1Response**](../Model/NotaryGetListV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/vnd.openxmlformats-officedocument.spreadsheetml.sheet`

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
