# eZmaxAPI\ObjectUserstagedApi

All URIs are relative to https://prod.api.appcluster01.ca-central-1.ezmax.com/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**userstagedCreateUserV1()**](ObjectUserstagedApi.md#userstagedCreateUserV1) | **POST** /1/object/userstaged/{pkiUserstagedID}/createUser | Create a User from a Userstaged and then map it |
| [**userstagedDeleteObjectV1()**](ObjectUserstagedApi.md#userstagedDeleteObjectV1) | **DELETE** /1/object/userstaged/{pkiUserstagedID} | Delete an existing Userstaged |
| [**userstagedGetListV1()**](ObjectUserstagedApi.md#userstagedGetListV1) | **GET** /1/object/userstaged/getList | Retrieve Userstaged list |
| [**userstagedGetObjectV2()**](ObjectUserstagedApi.md#userstagedGetObjectV2) | **GET** /2/object/userstaged/{pkiUserstagedID} | Retrieve an existing Userstaged |
| [**userstagedMapV1()**](ObjectUserstagedApi.md#userstagedMapV1) | **POST** /1/object/userstaged/{pkiUserstagedID}/map | Map the Userstaged to an existing user |


## `userstagedCreateUserV1()`

```php
userstagedCreateUserV1($pkiUserstagedID, $body): \eZmaxAPI\Model\UserstagedCreateUserV1Response
```

Create a User from a Userstaged and then map it

Default values will be used while creating the User. If you need to change those values, you should use the route to edit a User.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectUserstagedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiUserstagedID = 56; // int
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->userstagedCreateUserV1($pkiUserstagedID, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectUserstagedApi->userstagedCreateUserV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiUserstagedID** | **int**|  | |
| **body** | **object**|  | |

### Return type

[**\eZmaxAPI\Model\UserstagedCreateUserV1Response**](../Model/UserstagedCreateUserV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userstagedDeleteObjectV1()`

```php
userstagedDeleteObjectV1($pkiUserstagedID): \eZmaxAPI\Model\UserstagedDeleteObjectV1Response
```

Delete an existing Userstaged



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectUserstagedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiUserstagedID = 56; // int

try {
    $result = $apiInstance->userstagedDeleteObjectV1($pkiUserstagedID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectUserstagedApi->userstagedDeleteObjectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiUserstagedID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\UserstagedDeleteObjectV1Response**](../Model/UserstagedDeleteObjectV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userstagedGetListV1()`

```php
userstagedGetListV1($eOrderBy, $iRowMax, $iRowOffset, $acceptLanguage, $sFilter): \eZmaxAPI\Model\UserstagedGetListV1Response
```

Retrieve Userstaged list



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectUserstagedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$eOrderBy = 'eOrderBy_example'; // string | Specify how you want the results to be sorted
$iRowMax = 56; // int
$iRowOffset = 0; // int
$acceptLanguage = new \eZmaxAPI\Model\HeaderAcceptLanguage(); // HeaderAcceptLanguage
$sFilter = 'sFilter_example'; // string

try {
    $result = $apiInstance->userstagedGetListV1($eOrderBy, $iRowMax, $iRowOffset, $acceptLanguage, $sFilter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectUserstagedApi->userstagedGetListV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **eOrderBy** | **string**| Specify how you want the results to be sorted | [optional] |
| **iRowMax** | **int**|  | [optional] |
| **iRowOffset** | **int**|  | [optional] [default to 0] |
| **acceptLanguage** | [**HeaderAcceptLanguage**](../Model/.md)|  | [optional] |
| **sFilter** | **string**|  | [optional] |

### Return type

[**\eZmaxAPI\Model\UserstagedGetListV1Response**](../Model/UserstagedGetListV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/vnd.openxmlformats-officedocument.spreadsheetml.sheet`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userstagedGetObjectV2()`

```php
userstagedGetObjectV2($pkiUserstagedID): \eZmaxAPI\Model\UserstagedGetObjectV2Response
```

Retrieve an existing Userstaged



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectUserstagedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiUserstagedID = 56; // int

try {
    $result = $apiInstance->userstagedGetObjectV2($pkiUserstagedID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectUserstagedApi->userstagedGetObjectV2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiUserstagedID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\UserstagedGetObjectV2Response**](../Model/UserstagedGetObjectV2Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userstagedMapV1()`

```php
userstagedMapV1($pkiUserstagedID, $userstagedMapV1Request): \eZmaxAPI\Model\UserstagedMapV1Response
```

Map the Userstaged to an existing user



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectUserstagedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiUserstagedID = 56; // int
$userstagedMapV1Request = new \eZmaxAPI\Model\UserstagedMapV1Request(); // \eZmaxAPI\Model\UserstagedMapV1Request

try {
    $result = $apiInstance->userstagedMapV1($pkiUserstagedID, $userstagedMapV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectUserstagedApi->userstagedMapV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiUserstagedID** | **int**|  | |
| **userstagedMapV1Request** | [**\eZmaxAPI\Model\UserstagedMapV1Request**](../Model/UserstagedMapV1Request.md)|  | |

### Return type

[**\eZmaxAPI\Model\UserstagedMapV1Response**](../Model/UserstagedMapV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
