# eZmaxAPI\ObjectPaymentpreparationApi



All URIs are relative to https://prod.api.appcluster01.ca-central-1.ezmax.com/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**paymentpreparationBatchDownloadV1()**](ObjectPaymentpreparationApi.md#paymentpreparationBatchDownloadV1) | **POST** /1/object/paymentpreparation/{pkiPaymentpreparationID}/batchDownload | Download multiples attachments from an Paymentpreparation |
| [**paymentpreparationGetAttachmentsV1()**](ObjectPaymentpreparationApi.md#paymentpreparationGetAttachmentsV1) | **GET** /1/object/paymentpreparation/{pkiPaymentpreparationID}/getAttachments | Retrieve Paymentpreparation&#39;s attachments |
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
