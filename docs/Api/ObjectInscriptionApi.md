# eZmaxAPI\ObjectInscriptionApi

All URIs are relative to https://prod.api.appcluster01.ca-central-1.ezmax.com/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**inscriptionGetAttachmentsV1()**](ObjectInscriptionApi.md#inscriptionGetAttachmentsV1) | **GET** /1/object/inscription/{pkiInscriptionID}/getAttachments | Retrieve Inscription&#39;s Attachments |
| [**inscriptionGetCommunicationCountV1()**](ObjectInscriptionApi.md#inscriptionGetCommunicationCountV1) | **GET** /1/object/inscription/{pkiInscriptionID}/getCommunicationCount | Retrieve Communication count |
| [**inscriptionGetCommunicationListV1()**](ObjectInscriptionApi.md#inscriptionGetCommunicationListV1) | **GET** /1/object/inscription/{pkiInscriptionID}/getCommunicationList | Retrieve Communication list |
| [**inscriptionGetCommunicationrecipientsV1()**](ObjectInscriptionApi.md#inscriptionGetCommunicationrecipientsV1) | **GET** /1/object/inscription/{pkiInscriptionID}/getCommunicationrecipients | Retrieve Inscription&#39;s Communicationrecipient |
| [**inscriptionGetCommunicationsendersV1()**](ObjectInscriptionApi.md#inscriptionGetCommunicationsendersV1) | **GET** /1/object/inscription/{pkiInscriptionID}/getCommunicationsenders | Retrieve Inscription&#39;s Communicationsender |


## `inscriptionGetAttachmentsV1()`

```php
inscriptionGetAttachmentsV1($pkiInscriptionID): \eZmaxAPI\Model\InscriptionGetAttachmentsV1Response
```

Retrieve Inscription's Attachments



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectInscriptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiInscriptionID = 56; // int

try {
    $result = $apiInstance->inscriptionGetAttachmentsV1($pkiInscriptionID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectInscriptionApi->inscriptionGetAttachmentsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiInscriptionID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\InscriptionGetAttachmentsV1Response**](../Model/InscriptionGetAttachmentsV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `inscriptionGetCommunicationCountV1()`

```php
inscriptionGetCommunicationCountV1($pkiInscriptionID): \eZmaxAPI\Model\InscriptionGetCommunicationCountV1Response
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


$apiInstance = new eZmaxAPI\Api\ObjectInscriptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiInscriptionID = 56; // int

try {
    $result = $apiInstance->inscriptionGetCommunicationCountV1($pkiInscriptionID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectInscriptionApi->inscriptionGetCommunicationCountV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiInscriptionID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\InscriptionGetCommunicationCountV1Response**](../Model/InscriptionGetCommunicationCountV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `inscriptionGetCommunicationListV1()`

```php
inscriptionGetCommunicationListV1($pkiInscriptionID): \eZmaxAPI\Model\InscriptionGetCommunicationListV1Response
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


$apiInstance = new eZmaxAPI\Api\ObjectInscriptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiInscriptionID = 56; // int

try {
    $result = $apiInstance->inscriptionGetCommunicationListV1($pkiInscriptionID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectInscriptionApi->inscriptionGetCommunicationListV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiInscriptionID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\InscriptionGetCommunicationListV1Response**](../Model/InscriptionGetCommunicationListV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `inscriptionGetCommunicationrecipientsV1()`

```php
inscriptionGetCommunicationrecipientsV1($pkiInscriptionID): \eZmaxAPI\Model\InscriptionGetCommunicationrecipientsV1Response
```

Retrieve Inscription's Communicationrecipient



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectInscriptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiInscriptionID = 56; // int

try {
    $result = $apiInstance->inscriptionGetCommunicationrecipientsV1($pkiInscriptionID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectInscriptionApi->inscriptionGetCommunicationrecipientsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiInscriptionID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\InscriptionGetCommunicationrecipientsV1Response**](../Model/InscriptionGetCommunicationrecipientsV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `inscriptionGetCommunicationsendersV1()`

```php
inscriptionGetCommunicationsendersV1($pkiInscriptionID): \eZmaxAPI\Model\InscriptionGetCommunicationsendersV1Response
```

Retrieve Inscription's Communicationsender



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectInscriptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiInscriptionID = 56; // int

try {
    $result = $apiInstance->inscriptionGetCommunicationsendersV1($pkiInscriptionID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectInscriptionApi->inscriptionGetCommunicationsendersV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiInscriptionID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\InscriptionGetCommunicationsendersV1Response**](../Model/InscriptionGetCommunicationsendersV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
