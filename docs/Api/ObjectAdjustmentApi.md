# eZmaxAPI\ObjectAdjustmentApi



All URIs are relative to https://prod.api.appcluster01.ca-central-1.ezmax.com/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**adjustmentBatchDownloadV1()**](ObjectAdjustmentApi.md#adjustmentBatchDownloadV1) | **POST** /1/object/adjustment/{pkiAdjustmentID}/batchDownload | Download multiples attachments from an Adjustment |
| [**adjustmentGetAttachmentsV1()**](ObjectAdjustmentApi.md#adjustmentGetAttachmentsV1) | **GET** /1/object/adjustment/{pkiAdjustmentID}/getAttachments | Retrieve Adjustment&#39;s attachments |
| [**adjustmentGetCommunicationCountV1()**](ObjectAdjustmentApi.md#adjustmentGetCommunicationCountV1) | **GET** /1/object/adjustment/{pkiAdjustmentID}/getCommunicationCount | Retrieve Communication count |
| [**adjustmentGetCommunicationListV1()**](ObjectAdjustmentApi.md#adjustmentGetCommunicationListV1) | **GET** /1/object/adjustment/{pkiAdjustmentID}/getCommunicationList | Retrieve Communication list |
| [**adjustmentGetCommunicationrecipientsV1()**](ObjectAdjustmentApi.md#adjustmentGetCommunicationrecipientsV1) | **GET** /1/object/adjustment/{pkiAdjustmentID}/getCommunicationrecipients | Retrieve Communication recipients |
| [**adjustmentGetCommunicationsendersV1()**](ObjectAdjustmentApi.md#adjustmentGetCommunicationsendersV1) | **GET** /1/object/adjustment/{pkiAdjustmentID}/getCommunicationsenders | Retrieve Communication senders |
| [**adjustmentImportIntoEDMV1()**](ObjectAdjustmentApi.md#adjustmentImportIntoEDMV1) | **POST** /1/object/adjustment/{pkiAdjustmentID}/importIntoEDM | Import attachments into the Adjustment |


## `adjustmentBatchDownloadV1()`

```php
adjustmentBatchDownloadV1($pkiAdjustmentID, $adjustmentBatchDownloadV1Request): \SplFileObject
```

Download multiples attachments from an Adjustment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectAdjustmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiAdjustmentID = 56; // int
$adjustmentBatchDownloadV1Request = new \eZmaxAPI\Model\AdjustmentBatchDownloadV1Request(); // \eZmaxAPI\Model\AdjustmentBatchDownloadV1Request

try {
    $result = $apiInstance->adjustmentBatchDownloadV1($pkiAdjustmentID, $adjustmentBatchDownloadV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectAdjustmentApi->adjustmentBatchDownloadV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiAdjustmentID** | **int**|  | |
| **adjustmentBatchDownloadV1Request** | [**\eZmaxAPI\Model\AdjustmentBatchDownloadV1Request**](../Model/AdjustmentBatchDownloadV1Request.md)|  | |

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

## `adjustmentGetAttachmentsV1()`

```php
adjustmentGetAttachmentsV1($pkiAdjustmentID): \eZmaxAPI\Model\AdjustmentGetAttachmentsV1Response
```

Retrieve Adjustment's attachments

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectAdjustmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiAdjustmentID = 56; // int

try {
    $result = $apiInstance->adjustmentGetAttachmentsV1($pkiAdjustmentID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectAdjustmentApi->adjustmentGetAttachmentsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiAdjustmentID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\AdjustmentGetAttachmentsV1Response**](../Model/AdjustmentGetAttachmentsV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adjustmentGetCommunicationCountV1()`

```php
adjustmentGetCommunicationCountV1($pkiAdjustmentID): \eZmaxAPI\Model\AdjustmentGetCommunicationCountV1Response
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


$apiInstance = new eZmaxAPI\Api\ObjectAdjustmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiAdjustmentID = 56; // int

try {
    $result = $apiInstance->adjustmentGetCommunicationCountV1($pkiAdjustmentID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectAdjustmentApi->adjustmentGetCommunicationCountV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiAdjustmentID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\AdjustmentGetCommunicationCountV1Response**](../Model/AdjustmentGetCommunicationCountV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adjustmentGetCommunicationListV1()`

```php
adjustmentGetCommunicationListV1($pkiAdjustmentID): \eZmaxAPI\Model\AdjustmentGetCommunicationListV1Response
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


$apiInstance = new eZmaxAPI\Api\ObjectAdjustmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiAdjustmentID = 56; // int

try {
    $result = $apiInstance->adjustmentGetCommunicationListV1($pkiAdjustmentID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectAdjustmentApi->adjustmentGetCommunicationListV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiAdjustmentID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\AdjustmentGetCommunicationListV1Response**](../Model/AdjustmentGetCommunicationListV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adjustmentGetCommunicationrecipientsV1()`

```php
adjustmentGetCommunicationrecipientsV1($pkiAdjustmentID): \eZmaxAPI\Model\AdjustmentGetCommunicationrecipientsV1Response
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


$apiInstance = new eZmaxAPI\Api\ObjectAdjustmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiAdjustmentID = 56; // int

try {
    $result = $apiInstance->adjustmentGetCommunicationrecipientsV1($pkiAdjustmentID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectAdjustmentApi->adjustmentGetCommunicationrecipientsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiAdjustmentID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\AdjustmentGetCommunicationrecipientsV1Response**](../Model/AdjustmentGetCommunicationrecipientsV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adjustmentGetCommunicationsendersV1()`

```php
adjustmentGetCommunicationsendersV1($pkiAdjustmentID): \eZmaxAPI\Model\AdjustmentGetCommunicationsendersV1Response
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


$apiInstance = new eZmaxAPI\Api\ObjectAdjustmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiAdjustmentID = 56; // int

try {
    $result = $apiInstance->adjustmentGetCommunicationsendersV1($pkiAdjustmentID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectAdjustmentApi->adjustmentGetCommunicationsendersV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiAdjustmentID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\AdjustmentGetCommunicationsendersV1Response**](../Model/AdjustmentGetCommunicationsendersV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adjustmentImportIntoEDMV1()`

```php
adjustmentImportIntoEDMV1($pkiAdjustmentID, $adjustmentImportIntoEDMV1Request): \eZmaxAPI\Model\AdjustmentImportIntoEDMV1Response
```

Import attachments into the Adjustment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectAdjustmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiAdjustmentID = 56; // int
$adjustmentImportIntoEDMV1Request = new \eZmaxAPI\Model\AdjustmentImportIntoEDMV1Request(); // \eZmaxAPI\Model\AdjustmentImportIntoEDMV1Request

try {
    $result = $apiInstance->adjustmentImportIntoEDMV1($pkiAdjustmentID, $adjustmentImportIntoEDMV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectAdjustmentApi->adjustmentImportIntoEDMV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiAdjustmentID** | **int**|  | |
| **adjustmentImportIntoEDMV1Request** | [**\eZmaxAPI\Model\AdjustmentImportIntoEDMV1Request**](../Model/AdjustmentImportIntoEDMV1Request.md)|  | |

### Return type

[**\eZmaxAPI\Model\AdjustmentImportIntoEDMV1Response**](../Model/AdjustmentImportIntoEDMV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
