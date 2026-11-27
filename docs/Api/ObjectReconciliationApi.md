# eZmaxAPI\ObjectReconciliationApi



All URIs are relative to https://prod.api.appcluster01.ca-central-1.ezmax.com/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**reconciliationBatchDownloadV1()**](ObjectReconciliationApi.md#reconciliationBatchDownloadV1) | **POST** /1/object/reconciliation/{pkiReconciliationID}/batchDownload | Download multiples attachments from a Reconciliation |
| [**reconciliationGetAttachmentsV1()**](ObjectReconciliationApi.md#reconciliationGetAttachmentsV1) | **GET** /1/object/reconciliation/{pkiReconciliationID}/getAttachments | Retrieve Reconciliation&#39;s attachments |
| [**reconciliationGetCommunicationCountV1()**](ObjectReconciliationApi.md#reconciliationGetCommunicationCountV1) | **GET** /1/object/reconciliation/{pkiReconciliationID}/getCommunicationCount | Retrieve Communication count |
| [**reconciliationGetCommunicationListV1()**](ObjectReconciliationApi.md#reconciliationGetCommunicationListV1) | **GET** /1/object/reconciliation/{pkiReconciliationID}/getCommunicationList | Retrieve Communication list |
| [**reconciliationGetCommunicationrecipientsV1()**](ObjectReconciliationApi.md#reconciliationGetCommunicationrecipientsV1) | **GET** /1/object/reconciliation/{pkiReconciliationID}/getCommunicationrecipients | Retrieve Communication recipients |
| [**reconciliationGetCommunicationsendersV1()**](ObjectReconciliationApi.md#reconciliationGetCommunicationsendersV1) | **GET** /1/object/reconciliation/{pkiReconciliationID}/getCommunicationsenders | Retrieve Communication senders |
| [**reconciliationImportIntoEDMV1()**](ObjectReconciliationApi.md#reconciliationImportIntoEDMV1) | **POST** /1/object/reconciliation/{pkiReconciliationID}/importIntoEDM | Import attachments into the Reconciliation |


## `reconciliationBatchDownloadV1()`

```php
reconciliationBatchDownloadV1($pkiReconciliationID, $reconciliationBatchDownloadV1Request): \SplFileObject
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


$apiInstance = new eZmaxAPI\Api\ObjectReconciliationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiReconciliationID = 56; // int
$reconciliationBatchDownloadV1Request = new \eZmaxAPI\Model\ReconciliationBatchDownloadV1Request(); // \eZmaxAPI\Model\ReconciliationBatchDownloadV1Request

try {
    $result = $apiInstance->reconciliationBatchDownloadV1($pkiReconciliationID, $reconciliationBatchDownloadV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectReconciliationApi->reconciliationBatchDownloadV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiReconciliationID** | **int**|  | |
| **reconciliationBatchDownloadV1Request** | [**\eZmaxAPI\Model\ReconciliationBatchDownloadV1Request**](../Model/ReconciliationBatchDownloadV1Request.md)|  | |

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

## `reconciliationGetAttachmentsV1()`

```php
reconciliationGetAttachmentsV1($pkiReconciliationID): \eZmaxAPI\Model\ReconciliationGetAttachmentsV1Response
```

Retrieve Reconciliation's attachments

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectReconciliationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiReconciliationID = 56; // int

try {
    $result = $apiInstance->reconciliationGetAttachmentsV1($pkiReconciliationID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectReconciliationApi->reconciliationGetAttachmentsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiReconciliationID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\ReconciliationGetAttachmentsV1Response**](../Model/ReconciliationGetAttachmentsV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reconciliationGetCommunicationCountV1()`

```php
reconciliationGetCommunicationCountV1($pkiReconciliationID): \eZmaxAPI\Model\ReconciliationGetCommunicationCountV1Response
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


$apiInstance = new eZmaxAPI\Api\ObjectReconciliationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiReconciliationID = 56; // int

try {
    $result = $apiInstance->reconciliationGetCommunicationCountV1($pkiReconciliationID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectReconciliationApi->reconciliationGetCommunicationCountV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiReconciliationID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\ReconciliationGetCommunicationCountV1Response**](../Model/ReconciliationGetCommunicationCountV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reconciliationGetCommunicationListV1()`

```php
reconciliationGetCommunicationListV1($pkiReconciliationID): \eZmaxAPI\Model\ReconciliationGetCommunicationListV1Response
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


$apiInstance = new eZmaxAPI\Api\ObjectReconciliationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiReconciliationID = 56; // int

try {
    $result = $apiInstance->reconciliationGetCommunicationListV1($pkiReconciliationID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectReconciliationApi->reconciliationGetCommunicationListV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiReconciliationID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\ReconciliationGetCommunicationListV1Response**](../Model/ReconciliationGetCommunicationListV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reconciliationGetCommunicationrecipientsV1()`

```php
reconciliationGetCommunicationrecipientsV1($pkiReconciliationID): \eZmaxAPI\Model\ReconciliationGetCommunicationrecipientsV1Response
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


$apiInstance = new eZmaxAPI\Api\ObjectReconciliationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiReconciliationID = 56; // int

try {
    $result = $apiInstance->reconciliationGetCommunicationrecipientsV1($pkiReconciliationID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectReconciliationApi->reconciliationGetCommunicationrecipientsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiReconciliationID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\ReconciliationGetCommunicationrecipientsV1Response**](../Model/ReconciliationGetCommunicationrecipientsV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reconciliationGetCommunicationsendersV1()`

```php
reconciliationGetCommunicationsendersV1($pkiReconciliationID): \eZmaxAPI\Model\ReconciliationGetCommunicationsendersV1Response
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


$apiInstance = new eZmaxAPI\Api\ObjectReconciliationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiReconciliationID = 56; // int

try {
    $result = $apiInstance->reconciliationGetCommunicationsendersV1($pkiReconciliationID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectReconciliationApi->reconciliationGetCommunicationsendersV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiReconciliationID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\ReconciliationGetCommunicationsendersV1Response**](../Model/ReconciliationGetCommunicationsendersV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reconciliationImportIntoEDMV1()`

```php
reconciliationImportIntoEDMV1($pkiReconciliationID, $reconciliationImportIntoEDMV1Request): \eZmaxAPI\Model\ReconciliationImportIntoEDMV1Response
```

Import attachments into the Reconciliation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectReconciliationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiReconciliationID = 56; // int
$reconciliationImportIntoEDMV1Request = new \eZmaxAPI\Model\ReconciliationImportIntoEDMV1Request(); // \eZmaxAPI\Model\ReconciliationImportIntoEDMV1Request

try {
    $result = $apiInstance->reconciliationImportIntoEDMV1($pkiReconciliationID, $reconciliationImportIntoEDMV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectReconciliationApi->reconciliationImportIntoEDMV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiReconciliationID** | **int**|  | |
| **reconciliationImportIntoEDMV1Request** | [**\eZmaxAPI\Model\ReconciliationImportIntoEDMV1Request**](../Model/ReconciliationImportIntoEDMV1Request.md)|  | |

### Return type

[**\eZmaxAPI\Model\ReconciliationImportIntoEDMV1Response**](../Model/ReconciliationImportIntoEDMV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
