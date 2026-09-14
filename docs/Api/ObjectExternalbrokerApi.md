# eZmaxAPI\ObjectExternalbrokerApi



All URIs are relative to https://prod.api.appcluster01.ca-central-1.ezmax.com/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**externalbrokerBatchDownloadV1()**](ObjectExternalbrokerApi.md#externalbrokerBatchDownloadV1) | **POST** /1/object/externalbroker/{pkiExternalbrokerID}/batchDownload | Download multiples attachments from an Externalbroker |
| [**externalbrokerGetAttachmentsV1()**](ObjectExternalbrokerApi.md#externalbrokerGetAttachmentsV1) | **GET** /1/object/externalbroker/{pkiExternalbrokerID}/getAttachments | Retrieve Externalbroker&#39;s attachments |
| [**externalbrokerGetCommunicationCountV1()**](ObjectExternalbrokerApi.md#externalbrokerGetCommunicationCountV1) | **GET** /1/object/externalbroker/{pkiExternalbrokerID}/getCommunicationCount | Retrieve Communication count |
| [**externalbrokerGetCommunicationListV1()**](ObjectExternalbrokerApi.md#externalbrokerGetCommunicationListV1) | **GET** /1/object/externalbroker/{pkiExternalbrokerID}/getCommunicationList | Retrieve Communication list |
| [**externalbrokerGetCommunicationrecipientsV1()**](ObjectExternalbrokerApi.md#externalbrokerGetCommunicationrecipientsV1) | **GET** /1/object/externalbroker/{pkiExternalbrokerID}/getCommunicationrecipients | Retrieve Communication recipients |
| [**externalbrokerGetCommunicationsendersV1()**](ObjectExternalbrokerApi.md#externalbrokerGetCommunicationsendersV1) | **GET** /1/object/externalbroker/{pkiExternalbrokerID}/getCommunicationsenders | Retrieve Communication senders |
| [**externalbrokerImportIntoEDMV1()**](ObjectExternalbrokerApi.md#externalbrokerImportIntoEDMV1) | **POST** /1/object/externalbroker/{pkiExternalbrokerID}/importIntoEDM | Import attachments into the Externalbroker |


## `externalbrokerBatchDownloadV1()`

```php
externalbrokerBatchDownloadV1($pkiExternalbrokerID, $externalbrokerBatchDownloadV1Request): \SplFileObject
```

Download multiples attachments from an Externalbroker

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectExternalbrokerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiExternalbrokerID = 56; // int
$externalbrokerBatchDownloadV1Request = new \eZmaxAPI\Model\ExternalbrokerBatchDownloadV1Request(); // \eZmaxAPI\Model\ExternalbrokerBatchDownloadV1Request

try {
    $result = $apiInstance->externalbrokerBatchDownloadV1($pkiExternalbrokerID, $externalbrokerBatchDownloadV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectExternalbrokerApi->externalbrokerBatchDownloadV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiExternalbrokerID** | **int**|  | |
| **externalbrokerBatchDownloadV1Request** | [**\eZmaxAPI\Model\ExternalbrokerBatchDownloadV1Request**](../Model/ExternalbrokerBatchDownloadV1Request.md)|  | |

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

## `externalbrokerGetAttachmentsV1()`

```php
externalbrokerGetAttachmentsV1($pkiExternalbrokerID): \eZmaxAPI\Model\ExternalbrokerGetAttachmentsV1Response
```

Retrieve Externalbroker's attachments

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectExternalbrokerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiExternalbrokerID = 56; // int

try {
    $result = $apiInstance->externalbrokerGetAttachmentsV1($pkiExternalbrokerID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectExternalbrokerApi->externalbrokerGetAttachmentsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiExternalbrokerID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\ExternalbrokerGetAttachmentsV1Response**](../Model/ExternalbrokerGetAttachmentsV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `externalbrokerGetCommunicationCountV1()`

```php
externalbrokerGetCommunicationCountV1($pkiExternalbrokerID): \eZmaxAPI\Model\ExternalbrokerGetCommunicationCountV1Response
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


$apiInstance = new eZmaxAPI\Api\ObjectExternalbrokerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiExternalbrokerID = 56; // int

try {
    $result = $apiInstance->externalbrokerGetCommunicationCountV1($pkiExternalbrokerID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectExternalbrokerApi->externalbrokerGetCommunicationCountV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiExternalbrokerID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\ExternalbrokerGetCommunicationCountV1Response**](../Model/ExternalbrokerGetCommunicationCountV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `externalbrokerGetCommunicationListV1()`

```php
externalbrokerGetCommunicationListV1($pkiExternalbrokerID): \eZmaxAPI\Model\ExternalbrokerGetCommunicationListV1Response
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


$apiInstance = new eZmaxAPI\Api\ObjectExternalbrokerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiExternalbrokerID = 56; // int

try {
    $result = $apiInstance->externalbrokerGetCommunicationListV1($pkiExternalbrokerID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectExternalbrokerApi->externalbrokerGetCommunicationListV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiExternalbrokerID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\ExternalbrokerGetCommunicationListV1Response**](../Model/ExternalbrokerGetCommunicationListV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `externalbrokerGetCommunicationrecipientsV1()`

```php
externalbrokerGetCommunicationrecipientsV1($pkiExternalbrokerID): \eZmaxAPI\Model\ExternalbrokerGetCommunicationrecipientsV1Response
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


$apiInstance = new eZmaxAPI\Api\ObjectExternalbrokerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiExternalbrokerID = 56; // int

try {
    $result = $apiInstance->externalbrokerGetCommunicationrecipientsV1($pkiExternalbrokerID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectExternalbrokerApi->externalbrokerGetCommunicationrecipientsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiExternalbrokerID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\ExternalbrokerGetCommunicationrecipientsV1Response**](../Model/ExternalbrokerGetCommunicationrecipientsV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `externalbrokerGetCommunicationsendersV1()`

```php
externalbrokerGetCommunicationsendersV1($pkiExternalbrokerID): \eZmaxAPI\Model\ExternalbrokerGetCommunicationsendersV1Response
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


$apiInstance = new eZmaxAPI\Api\ObjectExternalbrokerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiExternalbrokerID = 56; // int

try {
    $result = $apiInstance->externalbrokerGetCommunicationsendersV1($pkiExternalbrokerID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectExternalbrokerApi->externalbrokerGetCommunicationsendersV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiExternalbrokerID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\ExternalbrokerGetCommunicationsendersV1Response**](../Model/ExternalbrokerGetCommunicationsendersV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `externalbrokerImportIntoEDMV1()`

```php
externalbrokerImportIntoEDMV1($pkiExternalbrokerID, $externalbrokerImportIntoEDMV1Request): \eZmaxAPI\Model\ExternalbrokerImportIntoEDMV1Response
```

Import attachments into the Externalbroker



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectExternalbrokerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiExternalbrokerID = 56; // int
$externalbrokerImportIntoEDMV1Request = new \eZmaxAPI\Model\ExternalbrokerImportIntoEDMV1Request(); // \eZmaxAPI\Model\ExternalbrokerImportIntoEDMV1Request

try {
    $result = $apiInstance->externalbrokerImportIntoEDMV1($pkiExternalbrokerID, $externalbrokerImportIntoEDMV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectExternalbrokerApi->externalbrokerImportIntoEDMV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiExternalbrokerID** | **int**|  | |
| **externalbrokerImportIntoEDMV1Request** | [**\eZmaxAPI\Model\ExternalbrokerImportIntoEDMV1Request**](../Model/ExternalbrokerImportIntoEDMV1Request.md)|  | |

### Return type

[**\eZmaxAPI\Model\ExternalbrokerImportIntoEDMV1Response**](../Model/ExternalbrokerImportIntoEDMV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
