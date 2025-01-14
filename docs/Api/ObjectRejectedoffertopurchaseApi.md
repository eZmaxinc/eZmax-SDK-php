# eZmaxAPI\ObjectRejectedoffertopurchaseApi

All URIs are relative to https://prod.api.appcluster01.ca-central-1.ezmax.com/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**rejectedoffertopurchaseGetCommunicationCountV1()**](ObjectRejectedoffertopurchaseApi.md#rejectedoffertopurchaseGetCommunicationCountV1) | **GET** /1/object/rejectedoffertopurchase/{pkiRejectedoffertopurchaseID}/getCommunicationCount | Retrieve Communication count |
| [**rejectedoffertopurchaseGetCommunicationListV1()**](ObjectRejectedoffertopurchaseApi.md#rejectedoffertopurchaseGetCommunicationListV1) | **GET** /1/object/rejectedoffertopurchase/{pkiRejectedoffertopurchaseID}/getCommunicationList | Retrieve Communication list |
| [**rejectedoffertopurchaseGetCommunicationrecipientsV1()**](ObjectRejectedoffertopurchaseApi.md#rejectedoffertopurchaseGetCommunicationrecipientsV1) | **GET** /1/object/rejectedoffertopurchase/{pkiRejectedoffertopurchaseID}/getCommunicationrecipients | Retrieve Rejectedoffertopurchase&#39;s Communicationrecipient |
| [**rejectedoffertopurchaseGetCommunicationsendersV1()**](ObjectRejectedoffertopurchaseApi.md#rejectedoffertopurchaseGetCommunicationsendersV1) | **GET** /1/object/rejectedoffertopurchase/{pkiRejectedoffertopurchaseID}/getCommunicationsenders | Retrieve Rejectedoffertopurchase&#39;s Communicationsender |


## `rejectedoffertopurchaseGetCommunicationCountV1()`

```php
rejectedoffertopurchaseGetCommunicationCountV1($pkiRejectedoffertopurchaseID): \eZmaxAPI\Model\RejectedoffertopurchaseGetCommunicationCountV1Response
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


$apiInstance = new eZmaxAPI\Api\ObjectRejectedoffertopurchaseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiRejectedoffertopurchaseID = 56; // int

try {
    $result = $apiInstance->rejectedoffertopurchaseGetCommunicationCountV1($pkiRejectedoffertopurchaseID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectRejectedoffertopurchaseApi->rejectedoffertopurchaseGetCommunicationCountV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiRejectedoffertopurchaseID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\RejectedoffertopurchaseGetCommunicationCountV1Response**](../Model/RejectedoffertopurchaseGetCommunicationCountV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rejectedoffertopurchaseGetCommunicationListV1()`

```php
rejectedoffertopurchaseGetCommunicationListV1($pkiRejectedoffertopurchaseID): \eZmaxAPI\Model\RejectedoffertopurchaseGetCommunicationListV1Response
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


$apiInstance = new eZmaxAPI\Api\ObjectRejectedoffertopurchaseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiRejectedoffertopurchaseID = 56; // int

try {
    $result = $apiInstance->rejectedoffertopurchaseGetCommunicationListV1($pkiRejectedoffertopurchaseID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectRejectedoffertopurchaseApi->rejectedoffertopurchaseGetCommunicationListV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiRejectedoffertopurchaseID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\RejectedoffertopurchaseGetCommunicationListV1Response**](../Model/RejectedoffertopurchaseGetCommunicationListV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rejectedoffertopurchaseGetCommunicationrecipientsV1()`

```php
rejectedoffertopurchaseGetCommunicationrecipientsV1($pkiRejectedoffertopurchaseID): \eZmaxAPI\Model\RejectedoffertopurchaseGetCommunicationrecipientsV1Response
```

Retrieve Rejectedoffertopurchase's Communicationrecipient



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectRejectedoffertopurchaseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiRejectedoffertopurchaseID = 56; // int

try {
    $result = $apiInstance->rejectedoffertopurchaseGetCommunicationrecipientsV1($pkiRejectedoffertopurchaseID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectRejectedoffertopurchaseApi->rejectedoffertopurchaseGetCommunicationrecipientsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiRejectedoffertopurchaseID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\RejectedoffertopurchaseGetCommunicationrecipientsV1Response**](../Model/RejectedoffertopurchaseGetCommunicationrecipientsV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rejectedoffertopurchaseGetCommunicationsendersV1()`

```php
rejectedoffertopurchaseGetCommunicationsendersV1($pkiRejectedoffertopurchaseID): \eZmaxAPI\Model\RejectedoffertopurchaseGetCommunicationsendersV1Response
```

Retrieve Rejectedoffertopurchase's Communicationsender



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectRejectedoffertopurchaseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiRejectedoffertopurchaseID = 56; // int

try {
    $result = $apiInstance->rejectedoffertopurchaseGetCommunicationsendersV1($pkiRejectedoffertopurchaseID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectRejectedoffertopurchaseApi->rejectedoffertopurchaseGetCommunicationsendersV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiRejectedoffertopurchaseID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\RejectedoffertopurchaseGetCommunicationsendersV1Response**](../Model/RejectedoffertopurchaseGetCommunicationsendersV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
