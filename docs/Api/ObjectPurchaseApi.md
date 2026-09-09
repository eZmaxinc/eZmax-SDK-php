# eZmaxAPI\ObjectPurchaseApi



All URIs are relative to https://prod.api.appcluster01.ca-central-1.ezmax.com/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**purchaseBatchDownloadV1()**](ObjectPurchaseApi.md#purchaseBatchDownloadV1) | **POST** /1/object/purchase/{pkiPurchaseID}/batchDownload | Download multiples attachments from a Purchase |
| [**purchaseGetAttachmentsV1()**](ObjectPurchaseApi.md#purchaseGetAttachmentsV1) | **GET** /1/object/purchase/{pkiPurchaseID}/getAttachments | Retrieve Purchase&#39;s attachments |
| [**purchaseImportIntoEDMV1()**](ObjectPurchaseApi.md#purchaseImportIntoEDMV1) | **POST** /1/object/purchase/{pkiPurchaseID}/importIntoEDM | Import attachments into the Purchase |


## `purchaseBatchDownloadV1()`

```php
purchaseBatchDownloadV1($pkiPurchaseID, $purchaseBatchDownloadV1Request): \SplFileObject
```

Download multiples attachments from a Purchase

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectPurchaseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiPurchaseID = 56; // int
$purchaseBatchDownloadV1Request = new \eZmaxAPI\Model\PurchaseBatchDownloadV1Request(); // \eZmaxAPI\Model\PurchaseBatchDownloadV1Request

try {
    $result = $apiInstance->purchaseBatchDownloadV1($pkiPurchaseID, $purchaseBatchDownloadV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectPurchaseApi->purchaseBatchDownloadV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiPurchaseID** | **int**|  | |
| **purchaseBatchDownloadV1Request** | [**\eZmaxAPI\Model\PurchaseBatchDownloadV1Request**](../Model/PurchaseBatchDownloadV1Request.md)|  | |

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

## `purchaseGetAttachmentsV1()`

```php
purchaseGetAttachmentsV1($pkiPurchaseID): \eZmaxAPI\Model\PurchaseGetAttachmentsV1Response
```

Retrieve Purchase's attachments

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectPurchaseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiPurchaseID = 56; // int

try {
    $result = $apiInstance->purchaseGetAttachmentsV1($pkiPurchaseID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectPurchaseApi->purchaseGetAttachmentsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiPurchaseID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\PurchaseGetAttachmentsV1Response**](../Model/PurchaseGetAttachmentsV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `purchaseImportIntoEDMV1()`

```php
purchaseImportIntoEDMV1($pkiPurchaseID, $purchaseImportIntoEDMV1Request): \eZmaxAPI\Model\PurchaseImportIntoEDMV1Response
```

Import attachments into the Purchase

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectPurchaseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiPurchaseID = 56; // int
$purchaseImportIntoEDMV1Request = new \eZmaxAPI\Model\PurchaseImportIntoEDMV1Request(); // \eZmaxAPI\Model\PurchaseImportIntoEDMV1Request

try {
    $result = $apiInstance->purchaseImportIntoEDMV1($pkiPurchaseID, $purchaseImportIntoEDMV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectPurchaseApi->purchaseImportIntoEDMV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiPurchaseID** | **int**|  | |
| **purchaseImportIntoEDMV1Request** | [**\eZmaxAPI\Model\PurchaseImportIntoEDMV1Request**](../Model/PurchaseImportIntoEDMV1Request.md)|  | |

### Return type

[**\eZmaxAPI\Model\PurchaseImportIntoEDMV1Response**](../Model/PurchaseImportIntoEDMV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
