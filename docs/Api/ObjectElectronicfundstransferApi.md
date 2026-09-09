# eZmaxAPI\ObjectElectronicfundstransferApi



All URIs are relative to https://prod.api.appcluster01.ca-central-1.ezmax.com/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**electronicfundstransferBatchDownloadV1()**](ObjectElectronicfundstransferApi.md#electronicfundstransferBatchDownloadV1) | **POST** /1/object/electronicfundstransfer/{pkiElectronicfundstransferID}/batchDownload | Download multiples attachments from an Electronicfundstransfer |
| [**electronicfundstransferGetAttachmentsV1()**](ObjectElectronicfundstransferApi.md#electronicfundstransferGetAttachmentsV1) | **GET** /1/object/electronicfundstransfer/{pkiElectronicfundstransferID}/getAttachments | Retrieve Electronicfundstransfer&#39;s attachments |
| [**electronicfundstransferGetCommunicationCountV1()**](ObjectElectronicfundstransferApi.md#electronicfundstransferGetCommunicationCountV1) | **GET** /1/object/electronicfundstransfer/{pkiElectronicfundstransferID}/getCommunicationCount | Retrieve Communication count |
| [**electronicfundstransferGetCommunicationListV1()**](ObjectElectronicfundstransferApi.md#electronicfundstransferGetCommunicationListV1) | **GET** /1/object/electronicfundstransfer/{pkiElectronicfundstransferID}/getCommunicationList | Retrieve Communication list |
| [**electronicfundstransferGetCommunicationrecipientsV1()**](ObjectElectronicfundstransferApi.md#electronicfundstransferGetCommunicationrecipientsV1) | **GET** /1/object/electronicfundstransfer/{pkiElectronicfundstransferID}/getCommunicationrecipients | Retrieve Electronicfundstransfer&#39;s Communicationrecipient |
| [**electronicfundstransferGetCommunicationsendersV1()**](ObjectElectronicfundstransferApi.md#electronicfundstransferGetCommunicationsendersV1) | **GET** /1/object/electronicfundstransfer/{pkiElectronicfundstransferID}/getCommunicationsenders | Retrieve Electronicfundstransfer&#39;s Communicationsender |
| [**electronicfundstransferImportIntoEDMV1()**](ObjectElectronicfundstransferApi.md#electronicfundstransferImportIntoEDMV1) | **POST** /1/object/electronicfundstransfer/{pkiElectronicfundstransferID}/importIntoEDM | Import attachments into the Electronicfundstransfer |


## `electronicfundstransferBatchDownloadV1()`

```php
electronicfundstransferBatchDownloadV1($pkiElectronicfundstransferID, $electronicfundstransferBatchDownloadV1Request): \SplFileObject
```

Download multiples attachments from an Electronicfundstransfer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectElectronicfundstransferApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiElectronicfundstransferID = 56; // int
$electronicfundstransferBatchDownloadV1Request = new \eZmaxAPI\Model\ElectronicfundstransferBatchDownloadV1Request(); // \eZmaxAPI\Model\ElectronicfundstransferBatchDownloadV1Request

try {
    $result = $apiInstance->electronicfundstransferBatchDownloadV1($pkiElectronicfundstransferID, $electronicfundstransferBatchDownloadV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectElectronicfundstransferApi->electronicfundstransferBatchDownloadV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiElectronicfundstransferID** | **int**|  | |
| **electronicfundstransferBatchDownloadV1Request** | [**\eZmaxAPI\Model\ElectronicfundstransferBatchDownloadV1Request**](../Model/ElectronicfundstransferBatchDownloadV1Request.md)|  | |

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

## `electronicfundstransferGetAttachmentsV1()`

```php
electronicfundstransferGetAttachmentsV1($pkiElectronicfundstransferID): \eZmaxAPI\Model\ElectronicfundstransferGetAttachmentsV1Response
```

Retrieve Electronicfundstransfer's attachments

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectElectronicfundstransferApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiElectronicfundstransferID = 56; // int

try {
    $result = $apiInstance->electronicfundstransferGetAttachmentsV1($pkiElectronicfundstransferID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectElectronicfundstransferApi->electronicfundstransferGetAttachmentsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiElectronicfundstransferID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\ElectronicfundstransferGetAttachmentsV1Response**](../Model/ElectronicfundstransferGetAttachmentsV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `electronicfundstransferGetCommunicationCountV1()`

```php
electronicfundstransferGetCommunicationCountV1($pkiElectronicfundstransferID): \eZmaxAPI\Model\ElectronicfundstransferGetCommunicationCountV1Response
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


$apiInstance = new eZmaxAPI\Api\ObjectElectronicfundstransferApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiElectronicfundstransferID = 56; // int

try {
    $result = $apiInstance->electronicfundstransferGetCommunicationCountV1($pkiElectronicfundstransferID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectElectronicfundstransferApi->electronicfundstransferGetCommunicationCountV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiElectronicfundstransferID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\ElectronicfundstransferGetCommunicationCountV1Response**](../Model/ElectronicfundstransferGetCommunicationCountV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `electronicfundstransferGetCommunicationListV1()`

```php
electronicfundstransferGetCommunicationListV1($pkiElectronicfundstransferID): \eZmaxAPI\Model\ElectronicfundstransferGetCommunicationListV1Response
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


$apiInstance = new eZmaxAPI\Api\ObjectElectronicfundstransferApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiElectronicfundstransferID = 56; // int

try {
    $result = $apiInstance->electronicfundstransferGetCommunicationListV1($pkiElectronicfundstransferID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectElectronicfundstransferApi->electronicfundstransferGetCommunicationListV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiElectronicfundstransferID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\ElectronicfundstransferGetCommunicationListV1Response**](../Model/ElectronicfundstransferGetCommunicationListV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `electronicfundstransferGetCommunicationrecipientsV1()`

```php
electronicfundstransferGetCommunicationrecipientsV1($pkiElectronicfundstransferID): \eZmaxAPI\Model\ElectronicfundstransferGetCommunicationrecipientsV1Response
```

Retrieve Electronicfundstransfer's Communicationrecipient



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectElectronicfundstransferApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiElectronicfundstransferID = 56; // int

try {
    $result = $apiInstance->electronicfundstransferGetCommunicationrecipientsV1($pkiElectronicfundstransferID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectElectronicfundstransferApi->electronicfundstransferGetCommunicationrecipientsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiElectronicfundstransferID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\ElectronicfundstransferGetCommunicationrecipientsV1Response**](../Model/ElectronicfundstransferGetCommunicationrecipientsV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `electronicfundstransferGetCommunicationsendersV1()`

```php
electronicfundstransferGetCommunicationsendersV1($pkiElectronicfundstransferID): \eZmaxAPI\Model\ElectronicfundstransferGetCommunicationsendersV1Response
```

Retrieve Electronicfundstransfer's Communicationsender



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectElectronicfundstransferApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiElectronicfundstransferID = 56; // int

try {
    $result = $apiInstance->electronicfundstransferGetCommunicationsendersV1($pkiElectronicfundstransferID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectElectronicfundstransferApi->electronicfundstransferGetCommunicationsendersV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiElectronicfundstransferID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\ElectronicfundstransferGetCommunicationsendersV1Response**](../Model/ElectronicfundstransferGetCommunicationsendersV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `electronicfundstransferImportIntoEDMV1()`

```php
electronicfundstransferImportIntoEDMV1($pkiElectronicfundstransferID, $electronicfundstransferImportIntoEDMV1Request): \eZmaxAPI\Model\ElectronicfundstransferImportIntoEDMV1Response
```

Import attachments into the Electronicfundstransfer



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectElectronicfundstransferApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiElectronicfundstransferID = 56; // int
$electronicfundstransferImportIntoEDMV1Request = new \eZmaxAPI\Model\ElectronicfundstransferImportIntoEDMV1Request(); // \eZmaxAPI\Model\ElectronicfundstransferImportIntoEDMV1Request

try {
    $result = $apiInstance->electronicfundstransferImportIntoEDMV1($pkiElectronicfundstransferID, $electronicfundstransferImportIntoEDMV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectElectronicfundstransferApi->electronicfundstransferImportIntoEDMV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiElectronicfundstransferID** | **int**|  | |
| **electronicfundstransferImportIntoEDMV1Request** | [**\eZmaxAPI\Model\ElectronicfundstransferImportIntoEDMV1Request**](../Model/ElectronicfundstransferImportIntoEDMV1Request.md)|  | |

### Return type

[**\eZmaxAPI\Model\ElectronicfundstransferImportIntoEDMV1Response**](../Model/ElectronicfundstransferImportIntoEDMV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
