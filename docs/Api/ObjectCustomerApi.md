# eZmaxAPI\ObjectCustomerApi

All URIs are relative to https://prod.api.appcluster01.ca-central-1.ezmax.com/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**customerCreateObjectV1()**](ObjectCustomerApi.md#customerCreateObjectV1) | **POST** /1/object/customer | Create a new Customer |
| [**customerGetObjectV2()**](ObjectCustomerApi.md#customerGetObjectV2) | **GET** /2/object/customer/{pkiCustomerID} | Retrieve an existing Customer |


## `customerCreateObjectV1()`

```php
customerCreateObjectV1($customerCreateObjectV1Request): \eZmaxAPI\Model\CustomerCreateObjectV1Response
```

Create a new Customer

The endpoint allows to create one or many elements at once.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectCustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customerCreateObjectV1Request = new \eZmaxAPI\Model\CustomerCreateObjectV1Request(); // \eZmaxAPI\Model\CustomerCreateObjectV1Request

try {
    $result = $apiInstance->customerCreateObjectV1($customerCreateObjectV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectCustomerApi->customerCreateObjectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customerCreateObjectV1Request** | [**\eZmaxAPI\Model\CustomerCreateObjectV1Request**](../Model/CustomerCreateObjectV1Request.md)|  | |

### Return type

[**\eZmaxAPI\Model\CustomerCreateObjectV1Response**](../Model/CustomerCreateObjectV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `customerGetObjectV2()`

```php
customerGetObjectV2($pkiCustomerID): \eZmaxAPI\Model\CustomerGetObjectV2Response
```

Retrieve an existing Customer



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectCustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiCustomerID = 56; // int | The unique ID of the Customer

try {
    $result = $apiInstance->customerGetObjectV2($pkiCustomerID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectCustomerApi->customerGetObjectV2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiCustomerID** | **int**| The unique ID of the Customer | |

### Return type

[**\eZmaxAPI\Model\CustomerGetObjectV2Response**](../Model/CustomerGetObjectV2Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
