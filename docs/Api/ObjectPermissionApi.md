# eZmaxAPI\ObjectPermissionApi

All URIs are relative to https://prod.api.appcluster01.ca-central-1.ezmax.com/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**permissionCreateObjectV1()**](ObjectPermissionApi.md#permissionCreateObjectV1) | **POST** /1/object/permission | Create a new Permission |
| [**permissionDeleteObjectV1()**](ObjectPermissionApi.md#permissionDeleteObjectV1) | **DELETE** /1/object/permission/{pkiPermissionID} | Delete an existing Permission |
| [**permissionEditObjectV1()**](ObjectPermissionApi.md#permissionEditObjectV1) | **PUT** /1/object/permission/{pkiPermissionID} | Edit an existing Permission |
| [**permissionGetObjectV2()**](ObjectPermissionApi.md#permissionGetObjectV2) | **GET** /2/object/permission/{pkiPermissionID} | Retrieve an existing Permission |


## `permissionCreateObjectV1()`

```php
permissionCreateObjectV1($permissionCreateObjectV1Request): \eZmaxAPI\Model\PermissionCreateObjectV1Response
```

Create a new Permission

The endpoint allows to create one or many elements at once.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectPermissionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$permissionCreateObjectV1Request = new \eZmaxAPI\Model\PermissionCreateObjectV1Request(); // \eZmaxAPI\Model\PermissionCreateObjectV1Request

try {
    $result = $apiInstance->permissionCreateObjectV1($permissionCreateObjectV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectPermissionApi->permissionCreateObjectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **permissionCreateObjectV1Request** | [**\eZmaxAPI\Model\PermissionCreateObjectV1Request**](../Model/PermissionCreateObjectV1Request.md)|  | |

### Return type

[**\eZmaxAPI\Model\PermissionCreateObjectV1Response**](../Model/PermissionCreateObjectV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `permissionDeleteObjectV1()`

```php
permissionDeleteObjectV1($pkiPermissionID): \eZmaxAPI\Model\PermissionDeleteObjectV1Response
```

Delete an existing Permission



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectPermissionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiPermissionID = 56; // int | The unique ID of the Permission

try {
    $result = $apiInstance->permissionDeleteObjectV1($pkiPermissionID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectPermissionApi->permissionDeleteObjectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiPermissionID** | **int**| The unique ID of the Permission | |

### Return type

[**\eZmaxAPI\Model\PermissionDeleteObjectV1Response**](../Model/PermissionDeleteObjectV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `permissionEditObjectV1()`

```php
permissionEditObjectV1($pkiPermissionID, $permissionEditObjectV1Request): \eZmaxAPI\Model\PermissionEditObjectV1Response
```

Edit an existing Permission



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectPermissionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiPermissionID = 56; // int | The unique ID of the Permission
$permissionEditObjectV1Request = new \eZmaxAPI\Model\PermissionEditObjectV1Request(); // \eZmaxAPI\Model\PermissionEditObjectV1Request

try {
    $result = $apiInstance->permissionEditObjectV1($pkiPermissionID, $permissionEditObjectV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectPermissionApi->permissionEditObjectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiPermissionID** | **int**| The unique ID of the Permission | |
| **permissionEditObjectV1Request** | [**\eZmaxAPI\Model\PermissionEditObjectV1Request**](../Model/PermissionEditObjectV1Request.md)|  | |

### Return type

[**\eZmaxAPI\Model\PermissionEditObjectV1Response**](../Model/PermissionEditObjectV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `permissionGetObjectV2()`

```php
permissionGetObjectV2($pkiPermissionID): \eZmaxAPI\Model\PermissionGetObjectV2Response
```

Retrieve an existing Permission



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectPermissionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiPermissionID = 56; // int | The unique ID of the Permission

try {
    $result = $apiInstance->permissionGetObjectV2($pkiPermissionID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectPermissionApi->permissionGetObjectV2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiPermissionID** | **int**| The unique ID of the Permission | |

### Return type

[**\eZmaxAPI\Model\PermissionGetObjectV2Response**](../Model/PermissionGetObjectV2Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
