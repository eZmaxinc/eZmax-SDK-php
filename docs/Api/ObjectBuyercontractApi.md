# eZmaxAPI\ObjectBuyercontractApi

All URIs are relative to https://prod.api.appcluster01.ca-central-1.ezmax.com/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**buyercontractGetCommunicationCountV1()**](ObjectBuyercontractApi.md#buyercontractGetCommunicationCountV1) | **GET** /1/object/buyercontract/{pkiBuyercontractID}/getCommunicationCount | Retrieve Communication count |
| [**buyercontractGetCommunicationListV1()**](ObjectBuyercontractApi.md#buyercontractGetCommunicationListV1) | **GET** /1/object/buyercontract/{pkiBuyercontractID}/getCommunicationList | Retrieve Communication list |
| [**buyercontractGetCommunicationrecipientsV1()**](ObjectBuyercontractApi.md#buyercontractGetCommunicationrecipientsV1) | **GET** /1/object/buyercontract/{pkiBuyercontractID}/getCommunicationrecipients | Retrieve Buyercontract&#39;s Communicationrecipient |
| [**buyercontractGetCommunicationsendersV1()**](ObjectBuyercontractApi.md#buyercontractGetCommunicationsendersV1) | **GET** /1/object/buyercontract/{pkiBuyercontractID}/getCommunicationsenders | Retrieve Buyercontract&#39;s Communicationsender |


## `buyercontractGetCommunicationCountV1()`

```php
buyercontractGetCommunicationCountV1($pkiBuyercontractID): \eZmaxAPI\Model\BuyercontractGetCommunicationCountV1Response
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


$apiInstance = new eZmaxAPI\Api\ObjectBuyercontractApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiBuyercontractID = 56; // int

try {
    $result = $apiInstance->buyercontractGetCommunicationCountV1($pkiBuyercontractID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectBuyercontractApi->buyercontractGetCommunicationCountV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiBuyercontractID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\BuyercontractGetCommunicationCountV1Response**](../Model/BuyercontractGetCommunicationCountV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `buyercontractGetCommunicationListV1()`

```php
buyercontractGetCommunicationListV1($pkiBuyercontractID): \eZmaxAPI\Model\BuyercontractGetCommunicationListV1Response
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


$apiInstance = new eZmaxAPI\Api\ObjectBuyercontractApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiBuyercontractID = 56; // int

try {
    $result = $apiInstance->buyercontractGetCommunicationListV1($pkiBuyercontractID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectBuyercontractApi->buyercontractGetCommunicationListV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiBuyercontractID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\BuyercontractGetCommunicationListV1Response**](../Model/BuyercontractGetCommunicationListV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `buyercontractGetCommunicationrecipientsV1()`

```php
buyercontractGetCommunicationrecipientsV1($pkiBuyercontractID): \eZmaxAPI\Model\BuyercontractGetCommunicationrecipientsV1Response
```

Retrieve Buyercontract's Communicationrecipient



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectBuyercontractApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiBuyercontractID = 56; // int

try {
    $result = $apiInstance->buyercontractGetCommunicationrecipientsV1($pkiBuyercontractID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectBuyercontractApi->buyercontractGetCommunicationrecipientsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiBuyercontractID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\BuyercontractGetCommunicationrecipientsV1Response**](../Model/BuyercontractGetCommunicationrecipientsV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `buyercontractGetCommunicationsendersV1()`

```php
buyercontractGetCommunicationsendersV1($pkiBuyercontractID): \eZmaxAPI\Model\BuyercontractGetCommunicationsendersV1Response
```

Retrieve Buyercontract's Communicationsender



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectBuyercontractApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiBuyercontractID = 56; // int

try {
    $result = $apiInstance->buyercontractGetCommunicationsendersV1($pkiBuyercontractID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectBuyercontractApi->buyercontractGetCommunicationsendersV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiBuyercontractID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\BuyercontractGetCommunicationsendersV1Response**](../Model/BuyercontractGetCommunicationsendersV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
