# eZmaxAPI\ScimUsersApi

All URIs are relative to https://prod.api.appcluster01.ca-central-1.ezmax.com/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**usersCreateObjectScimV2()**](ScimUsersApi.md#usersCreateObjectScimV2) | **POST** /2/scim/Users | Create a new User |
| [**usersDeleteObjectScimV2()**](ScimUsersApi.md#usersDeleteObjectScimV2) | **DELETE** /2/scim/Users/{userId} | Delete an existing User |
| [**usersEditObjectScimV2()**](ScimUsersApi.md#usersEditObjectScimV2) | **PUT** /2/scim/Users/{userId} | Edit an existing User |
| [**usersGetListScimV2()**](ScimUsersApi.md#usersGetListScimV2) | **GET** /2/scim/Users | Retrieve User list |
| [**usersGetObjectScimV2()**](ScimUsersApi.md#usersGetObjectScimV2) | **GET** /2/scim/Users/{userId} | Retrieve an existing User |


## `usersCreateObjectScimV2()`

```php
usersCreateObjectScimV2($scimUser): \eZmaxAPI\Model\ScimUser
```

Create a new User

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new eZmaxAPI\Api\ScimUsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$scimUser = new \eZmaxAPI\Model\ScimUser(); // \eZmaxAPI\Model\ScimUser

try {
    $result = $apiInstance->usersCreateObjectScimV2($scimUser);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScimUsersApi->usersCreateObjectScimV2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **scimUser** | [**\eZmaxAPI\Model\ScimUser**](../Model/ScimUser.md)|  | |

### Return type

[**\eZmaxAPI\Model\ScimUser**](../Model/ScimUser.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usersDeleteObjectScimV2()`

```php
usersDeleteObjectScimV2($userId)
```

Delete an existing User

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new eZmaxAPI\Api\ScimUsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$userId = 'userId_example'; // string

try {
    $apiInstance->usersDeleteObjectScimV2($userId);
} catch (Exception $e) {
    echo 'Exception when calling ScimUsersApi->usersDeleteObjectScimV2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **userId** | **string**|  | |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usersEditObjectScimV2()`

```php
usersEditObjectScimV2($userId, $scimUser): \eZmaxAPI\Model\ScimUser
```

Edit an existing User

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new eZmaxAPI\Api\ScimUsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$userId = 'userId_example'; // string
$scimUser = new \eZmaxAPI\Model\ScimUser(); // \eZmaxAPI\Model\ScimUser

try {
    $result = $apiInstance->usersEditObjectScimV2($userId, $scimUser);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScimUsersApi->usersEditObjectScimV2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **userId** | **string**|  | |
| **scimUser** | [**\eZmaxAPI\Model\ScimUser**](../Model/ScimUser.md)|  | |

### Return type

[**\eZmaxAPI\Model\ScimUser**](../Model/ScimUser.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usersGetListScimV2()`

```php
usersGetListScimV2($filter): \eZmaxAPI\Model\ScimUserList
```

Retrieve User list

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new eZmaxAPI\Api\ScimUsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = 'filter_example'; // string | Filter expression for searching users

try {
    $result = $apiInstance->usersGetListScimV2($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScimUsersApi->usersGetListScimV2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **filter** | **string**| Filter expression for searching users | [optional] |

### Return type

[**\eZmaxAPI\Model\ScimUserList**](../Model/ScimUserList.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usersGetObjectScimV2()`

```php
usersGetObjectScimV2($userId): \eZmaxAPI\Model\ScimUser
```

Retrieve an existing User

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new eZmaxAPI\Api\ScimUsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$userId = 'userId_example'; // string

try {
    $result = $apiInstance->usersGetObjectScimV2($userId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScimUsersApi->usersGetObjectScimV2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **userId** | **string**|  | |

### Return type

[**\eZmaxAPI\Model\ScimUser**](../Model/ScimUser.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
