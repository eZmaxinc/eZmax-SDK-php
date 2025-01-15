# eZmaxAPI\ObjectUsergroupmembershipApi

All URIs are relative to https://prod.api.appcluster01.ca-central-1.ezmax.com/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**usergroupmembershipCreateObjectV1()**](ObjectUsergroupmembershipApi.md#usergroupmembershipCreateObjectV1) | **POST** /1/object/usergroupmembership | Create a new Usergroupmembership |
| [**usergroupmembershipDeleteObjectV1()**](ObjectUsergroupmembershipApi.md#usergroupmembershipDeleteObjectV1) | **DELETE** /1/object/usergroupmembership/{pkiUsergroupmembershipID} | Delete an existing Usergroupmembership |
| [**usergroupmembershipEditObjectV1()**](ObjectUsergroupmembershipApi.md#usergroupmembershipEditObjectV1) | **PUT** /1/object/usergroupmembership/{pkiUsergroupmembershipID} | Edit an existing Usergroupmembership |
| [**usergroupmembershipGetObjectV2()**](ObjectUsergroupmembershipApi.md#usergroupmembershipGetObjectV2) | **GET** /2/object/usergroupmembership/{pkiUsergroupmembershipID} | Retrieve an existing Usergroupmembership |


## `usergroupmembershipCreateObjectV1()`

```php
usergroupmembershipCreateObjectV1($usergroupmembershipCreateObjectV1Request): \eZmaxAPI\Model\UsergroupmembershipCreateObjectV1Response
```

Create a new Usergroupmembership

The endpoint allows to create one or many elements at once.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectUsergroupmembershipApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$usergroupmembershipCreateObjectV1Request = new \eZmaxAPI\Model\UsergroupmembershipCreateObjectV1Request(); // \eZmaxAPI\Model\UsergroupmembershipCreateObjectV1Request

try {
    $result = $apiInstance->usergroupmembershipCreateObjectV1($usergroupmembershipCreateObjectV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectUsergroupmembershipApi->usergroupmembershipCreateObjectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **usergroupmembershipCreateObjectV1Request** | [**\eZmaxAPI\Model\UsergroupmembershipCreateObjectV1Request**](../Model/UsergroupmembershipCreateObjectV1Request.md)|  | |

### Return type

[**\eZmaxAPI\Model\UsergroupmembershipCreateObjectV1Response**](../Model/UsergroupmembershipCreateObjectV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usergroupmembershipDeleteObjectV1()`

```php
usergroupmembershipDeleteObjectV1($pkiUsergroupmembershipID): \eZmaxAPI\Model\CommonResponse
```

Delete an existing Usergroupmembership



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectUsergroupmembershipApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiUsergroupmembershipID = 56; // int

try {
    $result = $apiInstance->usergroupmembershipDeleteObjectV1($pkiUsergroupmembershipID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectUsergroupmembershipApi->usergroupmembershipDeleteObjectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiUsergroupmembershipID** | **int**|  | |

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

## `usergroupmembershipEditObjectV1()`

```php
usergroupmembershipEditObjectV1($pkiUsergroupmembershipID, $usergroupmembershipEditObjectV1Request): \eZmaxAPI\Model\CommonResponse
```

Edit an existing Usergroupmembership



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectUsergroupmembershipApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiUsergroupmembershipID = 56; // int
$usergroupmembershipEditObjectV1Request = new \eZmaxAPI\Model\UsergroupmembershipEditObjectV1Request(); // \eZmaxAPI\Model\UsergroupmembershipEditObjectV1Request

try {
    $result = $apiInstance->usergroupmembershipEditObjectV1($pkiUsergroupmembershipID, $usergroupmembershipEditObjectV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectUsergroupmembershipApi->usergroupmembershipEditObjectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiUsergroupmembershipID** | **int**|  | |
| **usergroupmembershipEditObjectV1Request** | [**\eZmaxAPI\Model\UsergroupmembershipEditObjectV1Request**](../Model/UsergroupmembershipEditObjectV1Request.md)|  | |

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

## `usergroupmembershipGetObjectV2()`

```php
usergroupmembershipGetObjectV2($pkiUsergroupmembershipID): \eZmaxAPI\Model\UsergroupmembershipGetObjectV2Response
```

Retrieve an existing Usergroupmembership



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectUsergroupmembershipApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiUsergroupmembershipID = 56; // int

try {
    $result = $apiInstance->usergroupmembershipGetObjectV2($pkiUsergroupmembershipID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectUsergroupmembershipApi->usergroupmembershipGetObjectV2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiUsergroupmembershipID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\UsergroupmembershipGetObjectV2Response**](../Model/UsergroupmembershipGetObjectV2Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
