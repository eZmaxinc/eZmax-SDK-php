# eZmaxAPI\ObjectPaymentpreparationApi



All URIs are relative to https://prod.api.appcluster01.ca-central-1.ezmax.com/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**paymentpreparationBatchDownloadV1()**](ObjectPaymentpreparationApi.md#paymentpreparationBatchDownloadV1) | **POST** /1/object/paymentpreparation/{pkiPaymentpreparationID}/batchDownload | Download multiples attachments from an Paymentpreparation |
| [**paymentpreparationGetAttachmentsV1()**](ObjectPaymentpreparationApi.md#paymentpreparationGetAttachmentsV1) | **GET** /1/object/paymentpreparation/{pkiPaymentpreparationID}/getAttachments | Retrieve Paymentpreparation&#39;s attachments |
| [**paymentpreparationGetCommunicationCountV1()**](ObjectPaymentpreparationApi.md#paymentpreparationGetCommunicationCountV1) | **GET** /1/object/paymentpreparation/{pkiPaymentpreparationID}/getCommunicationCount | Retrieve Communication count |
| [**paymentpreparationGetCommunicationListV1()**](ObjectPaymentpreparationApi.md#paymentpreparationGetCommunicationListV1) | **GET** /1/object/paymentpreparation/{pkiPaymentpreparationID}/getCommunicationList | Retrieve Communication list |
| [**paymentpreparationGetCommunicationrecipientsV1()**](ObjectPaymentpreparationApi.md#paymentpreparationGetCommunicationrecipientsV1) | **GET** /1/object/paymentpreparation/{pkiPaymentpreparationID}/getCommunicationrecipients | Retrieve Communication recipients |
| [**paymentpreparationGetCommunicationsendersV1()**](ObjectPaymentpreparationApi.md#paymentpreparationGetCommunicationsendersV1) | **GET** /1/object/paymentpreparation/{pkiPaymentpreparationID}/getCommunicationsenders | Retrieve Communication senders |
| [**paymentpreparationImportIntoEDMV1()**](ObjectPaymentpreparationApi.md#paymentpreparationImportIntoEDMV1) | **POST** /1/object/paymentpreparation/{pkiPaymentpreparationID}/importIntoEDM | Import attachments into the Paymentpreparation |


## `paymentpreparationBatchDownloadV1()`

```php
paymentpreparationBatchDownloadV1($pkiPaymentpreparationID, $paymentpreparationBatchDownloadV1Request): \SplFileObject
```

Download multiples attachments from an Paymentpreparation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectPaymentpreparationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiPaymentpreparationID = 56; // int
$paymentpreparationBatchDownloadV1Request = new \eZmaxAPI\Model\PaymentpreparationBatchDownloadV1Request(); // \eZmaxAPI\Model\PaymentpreparationBatchDownloadV1Request

try {
    $result = $apiInstance->paymentpreparationBatchDownloadV1($pkiPaymentpreparationID, $paymentpreparationBatchDownloadV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectPaymentpreparationApi->paymentpreparationBatchDownloadV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiPaymentpreparationID** | **int**|  | |
| **paymentpreparationBatchDownloadV1Request** | [**\eZmaxAPI\Model\PaymentpreparationBatchDownloadV1Request**](../Model/PaymentpreparationBatchDownloadV1Request.md)|  | |

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

## `paymentpreparationGetAttachmentsV1()`

```php
paymentpreparationGetAttachmentsV1($pkiPaymentpreparationID): \eZmaxAPI\Model\PaymentpreparationGetAttachmentsV1Response
```

Retrieve Paymentpreparation's attachments

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectPaymentpreparationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiPaymentpreparationID = 56; // int

try {
    $result = $apiInstance->paymentpreparationGetAttachmentsV1($pkiPaymentpreparationID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectPaymentpreparationApi->paymentpreparationGetAttachmentsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiPaymentpreparationID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\PaymentpreparationGetAttachmentsV1Response**](../Model/PaymentpreparationGetAttachmentsV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `paymentpreparationGetCommunicationCountV1()`

```php
paymentpreparationGetCommunicationCountV1($pkiPaymentpreparationID): \eZmaxAPI\Model\PaymentpreparationGetCommunicationCountV1Response
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


$apiInstance = new eZmaxAPI\Api\ObjectPaymentpreparationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiPaymentpreparationID = 56; // int

try {
    $result = $apiInstance->paymentpreparationGetCommunicationCountV1($pkiPaymentpreparationID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectPaymentpreparationApi->paymentpreparationGetCommunicationCountV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiPaymentpreparationID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\PaymentpreparationGetCommunicationCountV1Response**](../Model/PaymentpreparationGetCommunicationCountV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `paymentpreparationGetCommunicationListV1()`

```php
paymentpreparationGetCommunicationListV1($pkiPaymentpreparationID): \eZmaxAPI\Model\PaymentpreparationGetCommunicationListV1Response
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


$apiInstance = new eZmaxAPI\Api\ObjectPaymentpreparationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiPaymentpreparationID = 56; // int

try {
    $result = $apiInstance->paymentpreparationGetCommunicationListV1($pkiPaymentpreparationID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectPaymentpreparationApi->paymentpreparationGetCommunicationListV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiPaymentpreparationID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\PaymentpreparationGetCommunicationListV1Response**](../Model/PaymentpreparationGetCommunicationListV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `paymentpreparationGetCommunicationrecipientsV1()`

```php
paymentpreparationGetCommunicationrecipientsV1($pkiPaymentpreparationID): \eZmaxAPI\Model\PaymentpreparationGetCommunicationrecipientsV1Response
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


$apiInstance = new eZmaxAPI\Api\ObjectPaymentpreparationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiPaymentpreparationID = 56; // int

try {
    $result = $apiInstance->paymentpreparationGetCommunicationrecipientsV1($pkiPaymentpreparationID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectPaymentpreparationApi->paymentpreparationGetCommunicationrecipientsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiPaymentpreparationID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\PaymentpreparationGetCommunicationrecipientsV1Response**](../Model/PaymentpreparationGetCommunicationrecipientsV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `paymentpreparationGetCommunicationsendersV1()`

```php
paymentpreparationGetCommunicationsendersV1($pkiPaymentpreparationID): \eZmaxAPI\Model\PaymentpreparationGetCommunicationsendersV1Response
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


$apiInstance = new eZmaxAPI\Api\ObjectPaymentpreparationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiPaymentpreparationID = 56; // int

try {
    $result = $apiInstance->paymentpreparationGetCommunicationsendersV1($pkiPaymentpreparationID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectPaymentpreparationApi->paymentpreparationGetCommunicationsendersV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiPaymentpreparationID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\PaymentpreparationGetCommunicationsendersV1Response**](../Model/PaymentpreparationGetCommunicationsendersV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `paymentpreparationImportIntoEDMV1()`

```php
paymentpreparationImportIntoEDMV1($pkiPaymentpreparationID, $paymentpreparationImportIntoEDMV1Request): \eZmaxAPI\Model\PaymentpreparationImportIntoEDMV1Response
```

Import attachments into the Paymentpreparation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectPaymentpreparationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiPaymentpreparationID = 56; // int
$paymentpreparationImportIntoEDMV1Request = new \eZmaxAPI\Model\PaymentpreparationImportIntoEDMV1Request(); // \eZmaxAPI\Model\PaymentpreparationImportIntoEDMV1Request

try {
    $result = $apiInstance->paymentpreparationImportIntoEDMV1($pkiPaymentpreparationID, $paymentpreparationImportIntoEDMV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectPaymentpreparationApi->paymentpreparationImportIntoEDMV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiPaymentpreparationID** | **int**|  | |
| **paymentpreparationImportIntoEDMV1Request** | [**\eZmaxAPI\Model\PaymentpreparationImportIntoEDMV1Request**](../Model/PaymentpreparationImportIntoEDMV1Request.md)|  | |

### Return type

[**\eZmaxAPI\Model\PaymentpreparationImportIntoEDMV1Response**](../Model/PaymentpreparationImportIntoEDMV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
