# eZmaxAPI\ObjectOtherincomeApi

All URIs are relative to https://prod.api.appcluster01.ca-central-1.ezmax.com/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**otherincomeGetCommunicationCountV1()**](ObjectOtherincomeApi.md#otherincomeGetCommunicationCountV1) | **GET** /1/object/otherincome/{pkiOtherincomeID}/getCommunicationCount | Retrieve Communication count |
| [**otherincomeGetCommunicationListV1()**](ObjectOtherincomeApi.md#otherincomeGetCommunicationListV1) | **GET** /1/object/otherincome/{pkiOtherincomeID}/getCommunicationList | Retrieve Communication list |
| [**otherincomeGetCommunicationrecipientsV1()**](ObjectOtherincomeApi.md#otherincomeGetCommunicationrecipientsV1) | **GET** /1/object/otherincome/{pkiOtherincomeID}/getCommunicationrecipients | Retrieve Otherincome&#39;s Communicationrecipient |
| [**otherincomeGetCommunicationsendersV1()**](ObjectOtherincomeApi.md#otherincomeGetCommunicationsendersV1) | **GET** /1/object/otherincome/{pkiOtherincomeID}/getCommunicationsenders | Retrieve Otherincome&#39;s Communicationsender |


## `otherincomeGetCommunicationCountV1()`

```php
otherincomeGetCommunicationCountV1($pkiOtherincomeID): \eZmaxAPI\Model\OtherincomeGetCommunicationCountV1Response
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


$apiInstance = new eZmaxAPI\Api\ObjectOtherincomeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiOtherincomeID = 56; // int

try {
    $result = $apiInstance->otherincomeGetCommunicationCountV1($pkiOtherincomeID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectOtherincomeApi->otherincomeGetCommunicationCountV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiOtherincomeID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\OtherincomeGetCommunicationCountV1Response**](../Model/OtherincomeGetCommunicationCountV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `otherincomeGetCommunicationListV1()`

```php
otherincomeGetCommunicationListV1($pkiOtherincomeID): \eZmaxAPI\Model\OtherincomeGetCommunicationListV1Response
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


$apiInstance = new eZmaxAPI\Api\ObjectOtherincomeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiOtherincomeID = 56; // int

try {
    $result = $apiInstance->otherincomeGetCommunicationListV1($pkiOtherincomeID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectOtherincomeApi->otherincomeGetCommunicationListV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiOtherincomeID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\OtherincomeGetCommunicationListV1Response**](../Model/OtherincomeGetCommunicationListV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `otherincomeGetCommunicationrecipientsV1()`

```php
otherincomeGetCommunicationrecipientsV1($pkiOtherincomeID): \eZmaxAPI\Model\OtherincomeGetCommunicationrecipientsV1Response
```

Retrieve Otherincome's Communicationrecipient



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectOtherincomeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiOtherincomeID = 56; // int

try {
    $result = $apiInstance->otherincomeGetCommunicationrecipientsV1($pkiOtherincomeID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectOtherincomeApi->otherincomeGetCommunicationrecipientsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiOtherincomeID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\OtherincomeGetCommunicationrecipientsV1Response**](../Model/OtherincomeGetCommunicationrecipientsV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `otherincomeGetCommunicationsendersV1()`

```php
otherincomeGetCommunicationsendersV1($pkiOtherincomeID): \eZmaxAPI\Model\OtherincomeGetCommunicationsendersV1Response
```

Retrieve Otherincome's Communicationsender



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectOtherincomeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiOtherincomeID = 56; // int

try {
    $result = $apiInstance->otherincomeGetCommunicationsendersV1($pkiOtherincomeID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectOtherincomeApi->otherincomeGetCommunicationsendersV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiOtherincomeID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\OtherincomeGetCommunicationsendersV1Response**](../Model/OtherincomeGetCommunicationsendersV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
