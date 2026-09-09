# eZmaxAPI\ObjectDeposittransitchequeApi



All URIs are relative to https://prod.api.appcluster01.ca-central-1.ezmax.com/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deposittransitchequeBatchDownloadV1()**](ObjectDeposittransitchequeApi.md#deposittransitchequeBatchDownloadV1) | **POST** /1/object/deposittransitcheque/{pkiDeposittransitchequeID}/batchDownload | Download multiples attachments from a Deposittransitcheque |
| [**deposittransitchequeGetAttachmentsV1()**](ObjectDeposittransitchequeApi.md#deposittransitchequeGetAttachmentsV1) | **GET** /1/object/deposittransitcheque/{pkiDeposittransitchequeID}/getAttachments | Retrieve Deposittransitcheque&#39;s attachments |
| [**deposittransitchequeImportIntoEDMV1()**](ObjectDeposittransitchequeApi.md#deposittransitchequeImportIntoEDMV1) | **POST** /1/object/deposittransitcheque/{pkiDeposittransitchequeID}/importIntoEDM | Import attachments into the Deposittransitcheque |


## `deposittransitchequeBatchDownloadV1()`

```php
deposittransitchequeBatchDownloadV1($pkiDeposittransitchequeID, $deposittransitchequeBatchDownloadV1Request): \SplFileObject
```

Download multiples attachments from a Deposittransitcheque

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectDeposittransitchequeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiDeposittransitchequeID = 56; // int
$deposittransitchequeBatchDownloadV1Request = new \eZmaxAPI\Model\DeposittransitchequeBatchDownloadV1Request(); // \eZmaxAPI\Model\DeposittransitchequeBatchDownloadV1Request

try {
    $result = $apiInstance->deposittransitchequeBatchDownloadV1($pkiDeposittransitchequeID, $deposittransitchequeBatchDownloadV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectDeposittransitchequeApi->deposittransitchequeBatchDownloadV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiDeposittransitchequeID** | **int**|  | |
| **deposittransitchequeBatchDownloadV1Request** | [**\eZmaxAPI\Model\DeposittransitchequeBatchDownloadV1Request**](../Model/DeposittransitchequeBatchDownloadV1Request.md)|  | |

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

## `deposittransitchequeGetAttachmentsV1()`

```php
deposittransitchequeGetAttachmentsV1($pkiDeposittransitchequeID): \eZmaxAPI\Model\DeposittransitchequeGetAttachmentsV1Response
```

Retrieve Deposittransitcheque's attachments

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectDeposittransitchequeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiDeposittransitchequeID = 56; // int

try {
    $result = $apiInstance->deposittransitchequeGetAttachmentsV1($pkiDeposittransitchequeID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectDeposittransitchequeApi->deposittransitchequeGetAttachmentsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiDeposittransitchequeID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\DeposittransitchequeGetAttachmentsV1Response**](../Model/DeposittransitchequeGetAttachmentsV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deposittransitchequeImportIntoEDMV1()`

```php
deposittransitchequeImportIntoEDMV1($pkiDeposittransitchequeID, $deposittransitchequeImportIntoEDMV1Request): \eZmaxAPI\Model\DeposittransitchequeImportIntoEDMV1Response
```

Import attachments into the Deposittransitcheque

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectDeposittransitchequeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiDeposittransitchequeID = 56; // int
$deposittransitchequeImportIntoEDMV1Request = new \eZmaxAPI\Model\DeposittransitchequeImportIntoEDMV1Request(); // \eZmaxAPI\Model\DeposittransitchequeImportIntoEDMV1Request

try {
    $result = $apiInstance->deposittransitchequeImportIntoEDMV1($pkiDeposittransitchequeID, $deposittransitchequeImportIntoEDMV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectDeposittransitchequeApi->deposittransitchequeImportIntoEDMV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiDeposittransitchequeID** | **int**|  | |
| **deposittransitchequeImportIntoEDMV1Request** | [**\eZmaxAPI\Model\DeposittransitchequeImportIntoEDMV1Request**](../Model/DeposittransitchequeImportIntoEDMV1Request.md)|  | |

### Return type

[**\eZmaxAPI\Model\DeposittransitchequeImportIntoEDMV1Response**](../Model/DeposittransitchequeImportIntoEDMV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
