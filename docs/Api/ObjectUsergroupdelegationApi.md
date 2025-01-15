# eZmaxAPI\ObjectUsergroupdelegationApi

All URIs are relative to https://prod.api.appcluster01.ca-central-1.ezmax.com/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**usergroupdelegationCreateObjectV1()**](ObjectUsergroupdelegationApi.md#usergroupdelegationCreateObjectV1) | **POST** /1/object/usergroupdelegation | Create a new Usergroupdelegation |
| [**usergroupdelegationDeleteObjectV1()**](ObjectUsergroupdelegationApi.md#usergroupdelegationDeleteObjectV1) | **DELETE** /1/object/usergroupdelegation/{pkiUsergroupdelegationID} | Delete an existing Usergroupdelegation |
| [**usergroupdelegationEditObjectV1()**](ObjectUsergroupdelegationApi.md#usergroupdelegationEditObjectV1) | **PUT** /1/object/usergroupdelegation/{pkiUsergroupdelegationID} | Edit an existing Usergroupdelegation |
| [**usergroupdelegationGetObjectV2()**](ObjectUsergroupdelegationApi.md#usergroupdelegationGetObjectV2) | **GET** /2/object/usergroupdelegation/{pkiUsergroupdelegationID} | Retrieve an existing Usergroupdelegation |


## `usergroupdelegationCreateObjectV1()`

```php
usergroupdelegationCreateObjectV1($usergroupdelegationCreateObjectV1Request): \eZmaxAPI\Model\UsergroupdelegationCreateObjectV1Response
```

Create a new Usergroupdelegation

The endpoint allows to create one or many elements at once.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectUsergroupdelegationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$usergroupdelegationCreateObjectV1Request = new \eZmaxAPI\Model\UsergroupdelegationCreateObjectV1Request(); // \eZmaxAPI\Model\UsergroupdelegationCreateObjectV1Request

try {
    $result = $apiInstance->usergroupdelegationCreateObjectV1($usergroupdelegationCreateObjectV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectUsergroupdelegationApi->usergroupdelegationCreateObjectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **usergroupdelegationCreateObjectV1Request** | [**\eZmaxAPI\Model\UsergroupdelegationCreateObjectV1Request**](../Model/UsergroupdelegationCreateObjectV1Request.md)|  | |

### Return type

[**\eZmaxAPI\Model\UsergroupdelegationCreateObjectV1Response**](../Model/UsergroupdelegationCreateObjectV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usergroupdelegationDeleteObjectV1()`

```php
usergroupdelegationDeleteObjectV1($pkiUsergroupdelegationID): \eZmaxAPI\Model\CommonResponse
```

Delete an existing Usergroupdelegation



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectUsergroupdelegationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiUsergroupdelegationID = 56; // int | The unique ID of the Usergroupdelegation

try {
    $result = $apiInstance->usergroupdelegationDeleteObjectV1($pkiUsergroupdelegationID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectUsergroupdelegationApi->usergroupdelegationDeleteObjectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiUsergroupdelegationID** | **int**| The unique ID of the Usergroupdelegation | |

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

## `usergroupdelegationEditObjectV1()`

```php
usergroupdelegationEditObjectV1($pkiUsergroupdelegationID, $usergroupdelegationEditObjectV1Request): \eZmaxAPI\Model\CommonResponse
```

Edit an existing Usergroupdelegation



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectUsergroupdelegationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiUsergroupdelegationID = 56; // int | The unique ID of the Usergroupdelegation
$usergroupdelegationEditObjectV1Request = new \eZmaxAPI\Model\UsergroupdelegationEditObjectV1Request(); // \eZmaxAPI\Model\UsergroupdelegationEditObjectV1Request

try {
    $result = $apiInstance->usergroupdelegationEditObjectV1($pkiUsergroupdelegationID, $usergroupdelegationEditObjectV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectUsergroupdelegationApi->usergroupdelegationEditObjectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiUsergroupdelegationID** | **int**| The unique ID of the Usergroupdelegation | |
| **usergroupdelegationEditObjectV1Request** | [**\eZmaxAPI\Model\UsergroupdelegationEditObjectV1Request**](../Model/UsergroupdelegationEditObjectV1Request.md)|  | |

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

## `usergroupdelegationGetObjectV2()`

```php
usergroupdelegationGetObjectV2($pkiUsergroupdelegationID): \eZmaxAPI\Model\UsergroupdelegationGetObjectV2Response
```

Retrieve an existing Usergroupdelegation



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectUsergroupdelegationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiUsergroupdelegationID = 56; // int | The unique ID of the Usergroupdelegation

try {
    $result = $apiInstance->usergroupdelegationGetObjectV2($pkiUsergroupdelegationID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectUsergroupdelegationApi->usergroupdelegationGetObjectV2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiUsergroupdelegationID** | **int**| The unique ID of the Usergroupdelegation | |

### Return type

[**\eZmaxAPI\Model\UsergroupdelegationGetObjectV2Response**](../Model/UsergroupdelegationGetObjectV2Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
