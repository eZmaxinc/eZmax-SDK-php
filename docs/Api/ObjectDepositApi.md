# eZmaxAPI\ObjectDepositApi



All URIs are relative to https://prod.api.appcluster01.ca-central-1.ezmax.com/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**depositBatchDownloadV1()**](ObjectDepositApi.md#depositBatchDownloadV1) | **POST** /1/object/deposit/{pkiDepositID}/batchDownload | Download multiples attachments from a Deposit |
| [**depositGetAttachmentsV1()**](ObjectDepositApi.md#depositGetAttachmentsV1) | **GET** /1/object/deposit/{pkiDepositID}/getAttachments | Retrieve Deposit&#39;s attachments |
| [**depositGetCommunicationCountV1()**](ObjectDepositApi.md#depositGetCommunicationCountV1) | **GET** /1/object/deposit/{pkiDepositID}/getCommunicationCount | Retrieve Communication count |
| [**depositGetCommunicationListV1()**](ObjectDepositApi.md#depositGetCommunicationListV1) | **GET** /1/object/deposit/{pkiDepositID}/getCommunicationList | Retrieve Communication list |
| [**depositGetCommunicationrecipientsV1()**](ObjectDepositApi.md#depositGetCommunicationrecipientsV1) | **GET** /1/object/deposit/{pkiDepositID}/getCommunicationrecipients | Retrieve Communication recipients |
| [**depositGetCommunicationsendersV1()**](ObjectDepositApi.md#depositGetCommunicationsendersV1) | **GET** /1/object/deposit/{pkiDepositID}/getCommunicationsenders | Retrieve Communication senders |
| [**depositImportIntoEDMV1()**](ObjectDepositApi.md#depositImportIntoEDMV1) | **POST** /1/object/deposit/{pkiDepositID}/importIntoEDM | Import attachments into the Deposit |


## `depositBatchDownloadV1()`

```php
depositBatchDownloadV1($pkiDepositID, $depositBatchDownloadV1Request): \SplFileObject
```

Download multiples attachments from a Deposit

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectDepositApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiDepositID = 56; // int
$depositBatchDownloadV1Request = new \eZmaxAPI\Model\DepositBatchDownloadV1Request(); // \eZmaxAPI\Model\DepositBatchDownloadV1Request

try {
    $result = $apiInstance->depositBatchDownloadV1($pkiDepositID, $depositBatchDownloadV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectDepositApi->depositBatchDownloadV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiDepositID** | **int**|  | |
| **depositBatchDownloadV1Request** | [**\eZmaxAPI\Model\DepositBatchDownloadV1Request**](../Model/DepositBatchDownloadV1Request.md)|  | |

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

## `depositGetAttachmentsV1()`

```php
depositGetAttachmentsV1($pkiDepositID): \eZmaxAPI\Model\DepositGetAttachmentsV1Response
```

Retrieve Deposit's attachments

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectDepositApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiDepositID = 56; // int

try {
    $result = $apiInstance->depositGetAttachmentsV1($pkiDepositID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectDepositApi->depositGetAttachmentsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiDepositID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\DepositGetAttachmentsV1Response**](../Model/DepositGetAttachmentsV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `depositGetCommunicationCountV1()`

```php
depositGetCommunicationCountV1($pkiDepositID): \eZmaxAPI\Model\DepositGetCommunicationCountV1Response
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


$apiInstance = new eZmaxAPI\Api\ObjectDepositApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiDepositID = 56; // int

try {
    $result = $apiInstance->depositGetCommunicationCountV1($pkiDepositID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectDepositApi->depositGetCommunicationCountV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiDepositID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\DepositGetCommunicationCountV1Response**](../Model/DepositGetCommunicationCountV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `depositGetCommunicationListV1()`

```php
depositGetCommunicationListV1($pkiDepositID): \eZmaxAPI\Model\DepositGetCommunicationListV1Response
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


$apiInstance = new eZmaxAPI\Api\ObjectDepositApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiDepositID = 56; // int

try {
    $result = $apiInstance->depositGetCommunicationListV1($pkiDepositID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectDepositApi->depositGetCommunicationListV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiDepositID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\DepositGetCommunicationListV1Response**](../Model/DepositGetCommunicationListV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `depositGetCommunicationrecipientsV1()`

```php
depositGetCommunicationrecipientsV1($pkiDepositID): \eZmaxAPI\Model\DepositGetCommunicationrecipientsV1Response
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


$apiInstance = new eZmaxAPI\Api\ObjectDepositApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiDepositID = 56; // int

try {
    $result = $apiInstance->depositGetCommunicationrecipientsV1($pkiDepositID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectDepositApi->depositGetCommunicationrecipientsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiDepositID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\DepositGetCommunicationrecipientsV1Response**](../Model/DepositGetCommunicationrecipientsV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `depositGetCommunicationsendersV1()`

```php
depositGetCommunicationsendersV1($pkiDepositID): \eZmaxAPI\Model\DepositGetCommunicationsendersV1Response
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


$apiInstance = new eZmaxAPI\Api\ObjectDepositApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiDepositID = 56; // int

try {
    $result = $apiInstance->depositGetCommunicationsendersV1($pkiDepositID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectDepositApi->depositGetCommunicationsendersV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiDepositID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\DepositGetCommunicationsendersV1Response**](../Model/DepositGetCommunicationsendersV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `depositImportIntoEDMV1()`

```php
depositImportIntoEDMV1($pkiDepositID, $depositImportIntoEDMV1Request): \eZmaxAPI\Model\DepositImportIntoEDMV1Response
```

Import attachments into the Deposit

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectDepositApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiDepositID = 56; // int
$depositImportIntoEDMV1Request = new \eZmaxAPI\Model\DepositImportIntoEDMV1Request(); // \eZmaxAPI\Model\DepositImportIntoEDMV1Request

try {
    $result = $apiInstance->depositImportIntoEDMV1($pkiDepositID, $depositImportIntoEDMV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectDepositApi->depositImportIntoEDMV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiDepositID** | **int**|  | |
| **depositImportIntoEDMV1Request** | [**\eZmaxAPI\Model\DepositImportIntoEDMV1Request**](../Model/DepositImportIntoEDMV1Request.md)|  | |

### Return type

[**\eZmaxAPI\Model\DepositImportIntoEDMV1Response**](../Model/DepositImportIntoEDMV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
