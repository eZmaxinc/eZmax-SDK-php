# eZmaxAPI\ScimGroupsApi

All URIs are relative to https://prod.api.appcluster01.ca-central-1.ezmax.com/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**groupsCreateObjectScimV2()**](ScimGroupsApi.md#groupsCreateObjectScimV2) | **POST** /2/scim/Groups | Create a new Usergroup |
| [**groupsDeleteObjectScimV2()**](ScimGroupsApi.md#groupsDeleteObjectScimV2) | **DELETE** /2/scim/Groups/{groupId} | Delete an existing Usergroup |
| [**groupsEditObjectScimV2()**](ScimGroupsApi.md#groupsEditObjectScimV2) | **PUT** /2/scim/Groups/{groupId} | Edit an existing Usergroup |
| [**groupsGetListScimV2()**](ScimGroupsApi.md#groupsGetListScimV2) | **GET** /2/scim/Groups | Retrieve Usergroup list |
| [**groupsGetObjectScimV2()**](ScimGroupsApi.md#groupsGetObjectScimV2) | **GET** /2/scim/Groups/{groupId} | Retrieve an existing Usergroup |


## `groupsCreateObjectScimV2()`

```php
groupsCreateObjectScimV2($scimGroup): \eZmaxAPI\Model\ScimGroup
```

Create a new Usergroup

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new eZmaxAPI\Api\ScimGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$scimGroup = new \eZmaxAPI\Model\ScimGroup(); // \eZmaxAPI\Model\ScimGroup

try {
    $result = $apiInstance->groupsCreateObjectScimV2($scimGroup);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScimGroupsApi->groupsCreateObjectScimV2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **scimGroup** | [**\eZmaxAPI\Model\ScimGroup**](../Model/ScimGroup.md)|  | |

### Return type

[**\eZmaxAPI\Model\ScimGroup**](../Model/ScimGroup.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `groupsDeleteObjectScimV2()`

```php
groupsDeleteObjectScimV2($groupId)
```

Delete an existing Usergroup

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new eZmaxAPI\Api\ScimGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$groupId = 'groupId_example'; // string

try {
    $apiInstance->groupsDeleteObjectScimV2($groupId);
} catch (Exception $e) {
    echo 'Exception when calling ScimGroupsApi->groupsDeleteObjectScimV2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **groupId** | **string**|  | |

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

## `groupsEditObjectScimV2()`

```php
groupsEditObjectScimV2($groupId, $scimGroup): \eZmaxAPI\Model\ScimGroup
```

Edit an existing Usergroup

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new eZmaxAPI\Api\ScimGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$groupId = 'groupId_example'; // string
$scimGroup = new \eZmaxAPI\Model\ScimGroup(); // \eZmaxAPI\Model\ScimGroup

try {
    $result = $apiInstance->groupsEditObjectScimV2($groupId, $scimGroup);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScimGroupsApi->groupsEditObjectScimV2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **groupId** | **string**|  | |
| **scimGroup** | [**\eZmaxAPI\Model\ScimGroup**](../Model/ScimGroup.md)|  | |

### Return type

[**\eZmaxAPI\Model\ScimGroup**](../Model/ScimGroup.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `groupsGetListScimV2()`

```php
groupsGetListScimV2($filter): \eZmaxAPI\Model\ScimGroup
```

Retrieve Usergroup list

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new eZmaxAPI\Api\ScimGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = 'filter_example'; // string | Filter expression for searching groups

try {
    $result = $apiInstance->groupsGetListScimV2($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScimGroupsApi->groupsGetListScimV2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **filter** | **string**| Filter expression for searching groups | [optional] |

### Return type

[**\eZmaxAPI\Model\ScimGroup**](../Model/ScimGroup.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `groupsGetObjectScimV2()`

```php
groupsGetObjectScimV2($groupId): \eZmaxAPI\Model\ScimGroup
```

Retrieve an existing Usergroup

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new eZmaxAPI\Api\ScimGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$groupId = 'groupId_example'; // string

try {
    $result = $apiInstance->groupsGetObjectScimV2($groupId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScimGroupsApi->groupsGetObjectScimV2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **groupId** | **string**|  | |

### Return type

[**\eZmaxAPI\Model\ScimGroup**](../Model/ScimGroup.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
