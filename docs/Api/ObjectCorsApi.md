# eZmaxAPI\ObjectCorsApi

All URIs are relative to https://prod.api.appcluster01.ca-central-1.ezmax.com/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**corsCreateObjectV1()**](ObjectCorsApi.md#corsCreateObjectV1) | **POST** /1/object/cors | Create a new Cors |
| [**corsDeleteObjectV1()**](ObjectCorsApi.md#corsDeleteObjectV1) | **DELETE** /1/object/cors/{pkiCorsID} | Delete an existing Cors |
| [**corsEditObjectV1()**](ObjectCorsApi.md#corsEditObjectV1) | **PUT** /1/object/cors/{pkiCorsID} | Edit an existing Cors |
| [**corsGetObjectV2()**](ObjectCorsApi.md#corsGetObjectV2) | **GET** /2/object/cors/{pkiCorsID} | Retrieve an existing Cors |


## `corsCreateObjectV1()`

```php
corsCreateObjectV1($corsCreateObjectV1Request): \eZmaxAPI\Model\CorsCreateObjectV1Response
```

Create a new Cors

The endpoint allows to create one or many elements at once.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectCorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$corsCreateObjectV1Request = new \eZmaxAPI\Model\CorsCreateObjectV1Request(); // \eZmaxAPI\Model\CorsCreateObjectV1Request

try {
    $result = $apiInstance->corsCreateObjectV1($corsCreateObjectV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectCorsApi->corsCreateObjectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **corsCreateObjectV1Request** | [**\eZmaxAPI\Model\CorsCreateObjectV1Request**](../Model/CorsCreateObjectV1Request.md)|  | |

### Return type

[**\eZmaxAPI\Model\CorsCreateObjectV1Response**](../Model/CorsCreateObjectV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `corsDeleteObjectV1()`

```php
corsDeleteObjectV1($pkiCorsID): \eZmaxAPI\Model\CommonResponse
```

Delete an existing Cors



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectCorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiCorsID = 56; // int | The unique ID of the Cors

try {
    $result = $apiInstance->corsDeleteObjectV1($pkiCorsID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectCorsApi->corsDeleteObjectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiCorsID** | **int**| The unique ID of the Cors | |

### Return type

[**\eZmaxAPI\Model\CommonResponse**](../Model/CommonResponse.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `corsEditObjectV1()`

```php
corsEditObjectV1($pkiCorsID, $corsEditObjectV1Request): \eZmaxAPI\Model\CommonResponse
```

Edit an existing Cors



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectCorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiCorsID = 56; // int | The unique ID of the Cors
$corsEditObjectV1Request = new \eZmaxAPI\Model\CorsEditObjectV1Request(); // \eZmaxAPI\Model\CorsEditObjectV1Request

try {
    $result = $apiInstance->corsEditObjectV1($pkiCorsID, $corsEditObjectV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectCorsApi->corsEditObjectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiCorsID** | **int**| The unique ID of the Cors | |
| **corsEditObjectV1Request** | [**\eZmaxAPI\Model\CorsEditObjectV1Request**](../Model/CorsEditObjectV1Request.md)|  | |

### Return type

[**\eZmaxAPI\Model\CommonResponse**](../Model/CommonResponse.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `corsGetObjectV2()`

```php
corsGetObjectV2($pkiCorsID): \eZmaxAPI\Model\CorsGetObjectV2Response
```

Retrieve an existing Cors



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectCorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiCorsID = 56; // int | The unique ID of the Cors

try {
    $result = $apiInstance->corsGetObjectV2($pkiCorsID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectCorsApi->corsGetObjectV2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiCorsID** | **int**| The unique ID of the Cors | |

### Return type

[**\eZmaxAPI\Model\CorsGetObjectV2Response**](../Model/CorsGetObjectV2Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
