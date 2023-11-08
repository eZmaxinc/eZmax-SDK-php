# eZmaxAPI\ObjectUsergroupApi

All URIs are relative to https://prod.api.appcluster01.ca-central-1.ezmax.com/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**usergroupCreateObjectV1()**](ObjectUsergroupApi.md#usergroupCreateObjectV1) | **POST** /1/object/usergroup | Create a new Usergroup |
| [**usergroupEditObjectV1()**](ObjectUsergroupApi.md#usergroupEditObjectV1) | **PUT** /1/object/usergroup/{pkiUsergroupID} | Edit an existing Usergroup |
| [**usergroupEditPermissionsV1()**](ObjectUsergroupApi.md#usergroupEditPermissionsV1) | **PUT** /1/object/usergroup/{pkiUsergroupID}/editPermissions | Edit multiple Permissions |
| [**usergroupEditUsergroupdelegationsV1()**](ObjectUsergroupApi.md#usergroupEditUsergroupdelegationsV1) | **PUT** /1/object/usergroup/{pkiUsergroupID}/editUsergroupdelegations | Edit multiple Usergroupdelegations |
| [**usergroupEditUsergroupmembershipsV1()**](ObjectUsergroupApi.md#usergroupEditUsergroupmembershipsV1) | **PUT** /1/object/usergroup/{pkiUsergroupID}/editUsergroupmemberships | Edit multiple Usergroupmemberships |
| [**usergroupGetAutocompleteV2()**](ObjectUsergroupApi.md#usergroupGetAutocompleteV2) | **GET** /2/object/usergroup/getAutocomplete/{sSelector} | Retrieve Usergroups and IDs |
| [**usergroupGetListV1()**](ObjectUsergroupApi.md#usergroupGetListV1) | **GET** /1/object/usergroup/getList | Retrieve Usergroup list |
| [**usergroupGetObjectV2()**](ObjectUsergroupApi.md#usergroupGetObjectV2) | **GET** /2/object/usergroup/{pkiUsergroupID} | Retrieve an existing Usergroup |
| [**usergroupGetPermissionsV1()**](ObjectUsergroupApi.md#usergroupGetPermissionsV1) | **GET** /1/object/usergroup/{pkiUsergroupID}/getPermissions | Retrieve an existing Usergroup&#39;s Permissions |
| [**usergroupGetUsergroupdelegationsV1()**](ObjectUsergroupApi.md#usergroupGetUsergroupdelegationsV1) | **GET** /1/object/usergroup/{pkiUsergroupID}/getUsergroupdelegations | Retrieve an existing Usergroup&#39;s Usergroupdelegations |
| [**usergroupGetUsergroupmembershipsV1()**](ObjectUsergroupApi.md#usergroupGetUsergroupmembershipsV1) | **GET** /1/object/usergroup/{pkiUsergroupID}/getUsergroupmemberships | Retrieve an existing Usergroup&#39;s Usergroupmemberships |


## `usergroupCreateObjectV1()`

```php
usergroupCreateObjectV1($usergroupCreateObjectV1Request): \eZmaxAPI\Model\UsergroupCreateObjectV1Response
```

Create a new Usergroup

The endpoint allows to create one or many elements at once.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectUsergroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$usergroupCreateObjectV1Request = new \eZmaxAPI\Model\UsergroupCreateObjectV1Request(); // \eZmaxAPI\Model\UsergroupCreateObjectV1Request

try {
    $result = $apiInstance->usergroupCreateObjectV1($usergroupCreateObjectV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectUsergroupApi->usergroupCreateObjectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **usergroupCreateObjectV1Request** | [**\eZmaxAPI\Model\UsergroupCreateObjectV1Request**](../Model/UsergroupCreateObjectV1Request.md)|  | |

### Return type

[**\eZmaxAPI\Model\UsergroupCreateObjectV1Response**](../Model/UsergroupCreateObjectV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usergroupEditObjectV1()`

```php
usergroupEditObjectV1($pkiUsergroupID, $usergroupEditObjectV1Request): \eZmaxAPI\Model\UsergroupEditObjectV1Response
```

Edit an existing Usergroup



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectUsergroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiUsergroupID = 56; // int
$usergroupEditObjectV1Request = new \eZmaxAPI\Model\UsergroupEditObjectV1Request(); // \eZmaxAPI\Model\UsergroupEditObjectV1Request

try {
    $result = $apiInstance->usergroupEditObjectV1($pkiUsergroupID, $usergroupEditObjectV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectUsergroupApi->usergroupEditObjectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiUsergroupID** | **int**|  | |
| **usergroupEditObjectV1Request** | [**\eZmaxAPI\Model\UsergroupEditObjectV1Request**](../Model/UsergroupEditObjectV1Request.md)|  | |

### Return type

[**\eZmaxAPI\Model\UsergroupEditObjectV1Response**](../Model/UsergroupEditObjectV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usergroupEditPermissionsV1()`

```php
usergroupEditPermissionsV1($pkiUsergroupID, $usergroupEditPermissionsV1Request): \eZmaxAPI\Model\UsergroupEditPermissionsV1Response
```

Edit multiple Permissions

Using this endpoint, you can edit multiple Permissions at the same time.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectUsergroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiUsergroupID = 56; // int
$usergroupEditPermissionsV1Request = new \eZmaxAPI\Model\UsergroupEditPermissionsV1Request(); // \eZmaxAPI\Model\UsergroupEditPermissionsV1Request

try {
    $result = $apiInstance->usergroupEditPermissionsV1($pkiUsergroupID, $usergroupEditPermissionsV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectUsergroupApi->usergroupEditPermissionsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiUsergroupID** | **int**|  | |
| **usergroupEditPermissionsV1Request** | [**\eZmaxAPI\Model\UsergroupEditPermissionsV1Request**](../Model/UsergroupEditPermissionsV1Request.md)|  | |

### Return type

[**\eZmaxAPI\Model\UsergroupEditPermissionsV1Response**](../Model/UsergroupEditPermissionsV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usergroupEditUsergroupdelegationsV1()`

```php
usergroupEditUsergroupdelegationsV1($pkiUsergroupID, $usergroupEditUsergroupdelegationsV1Request): \eZmaxAPI\Model\UsergroupEditUsergroupdelegationsV1Response
```

Edit multiple Usergroupdelegations

Edit multiple Usergroupdelegations

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectUsergroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiUsergroupID = 56; // int
$usergroupEditUsergroupdelegationsV1Request = new \eZmaxAPI\Model\UsergroupEditUsergroupdelegationsV1Request(); // \eZmaxAPI\Model\UsergroupEditUsergroupdelegationsV1Request

try {
    $result = $apiInstance->usergroupEditUsergroupdelegationsV1($pkiUsergroupID, $usergroupEditUsergroupdelegationsV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectUsergroupApi->usergroupEditUsergroupdelegationsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiUsergroupID** | **int**|  | |
| **usergroupEditUsergroupdelegationsV1Request** | [**\eZmaxAPI\Model\UsergroupEditUsergroupdelegationsV1Request**](../Model/UsergroupEditUsergroupdelegationsV1Request.md)|  | |

### Return type

[**\eZmaxAPI\Model\UsergroupEditUsergroupdelegationsV1Response**](../Model/UsergroupEditUsergroupdelegationsV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usergroupEditUsergroupmembershipsV1()`

```php
usergroupEditUsergroupmembershipsV1($pkiUsergroupID, $usergroupEditUsergroupmembershipsV1Request): \eZmaxAPI\Model\UsergroupEditUsergroupmembershipsV1Response
```

Edit multiple Usergroupmemberships

Using this endpoint, you can edit multiple Usergroupmemberships at the same time.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectUsergroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiUsergroupID = 56; // int
$usergroupEditUsergroupmembershipsV1Request = new \eZmaxAPI\Model\UsergroupEditUsergroupmembershipsV1Request(); // \eZmaxAPI\Model\UsergroupEditUsergroupmembershipsV1Request

try {
    $result = $apiInstance->usergroupEditUsergroupmembershipsV1($pkiUsergroupID, $usergroupEditUsergroupmembershipsV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectUsergroupApi->usergroupEditUsergroupmembershipsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiUsergroupID** | **int**|  | |
| **usergroupEditUsergroupmembershipsV1Request** | [**\eZmaxAPI\Model\UsergroupEditUsergroupmembershipsV1Request**](../Model/UsergroupEditUsergroupmembershipsV1Request.md)|  | |

### Return type

[**\eZmaxAPI\Model\UsergroupEditUsergroupmembershipsV1Response**](../Model/UsergroupEditUsergroupmembershipsV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usergroupGetAutocompleteV2()`

```php
usergroupGetAutocompleteV2($sSelector, $eFilterActive, $sQuery, $acceptLanguage): \eZmaxAPI\Model\UsergroupGetAutocompleteV2Response
```

Retrieve Usergroups and IDs

Get the list of Usergroup to be used in a dropdown or autocomplete control.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectUsergroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sSelector = 'sSelector_example'; // string | The type of Usergroups to return
$eFilterActive = 'Active'; // string | Specify which results we want to display.
$sQuery = 'sQuery_example'; // string | Allow to filter the returned results
$acceptLanguage = new \eZmaxAPI\Model\HeaderAcceptLanguage(); // HeaderAcceptLanguage

try {
    $result = $apiInstance->usergroupGetAutocompleteV2($sSelector, $eFilterActive, $sQuery, $acceptLanguage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectUsergroupApi->usergroupGetAutocompleteV2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sSelector** | **string**| The type of Usergroups to return | |
| **eFilterActive** | **string**| Specify which results we want to display. | [optional] [default to &#39;Active&#39;] |
| **sQuery** | **string**| Allow to filter the returned results | [optional] |
| **acceptLanguage** | [**HeaderAcceptLanguage**](../Model/.md)|  | [optional] |

### Return type

[**\eZmaxAPI\Model\UsergroupGetAutocompleteV2Response**](../Model/UsergroupGetAutocompleteV2Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usergroupGetListV1()`

```php
usergroupGetListV1($eOrderBy, $iRowMax, $iRowOffset, $acceptLanguage, $sFilter): \eZmaxAPI\Model\UsergroupGetListV1Response
```

Retrieve Usergroup list



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectUsergroupApi(
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
    $result = $apiInstance->usergroupGetListV1($eOrderBy, $iRowMax, $iRowOffset, $acceptLanguage, $sFilter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectUsergroupApi->usergroupGetListV1: ', $e->getMessage(), PHP_EOL;
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

[**\eZmaxAPI\Model\UsergroupGetListV1Response**](../Model/UsergroupGetListV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/vnd.openxmlformats-officedocument.spreadsheetml.sheet`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usergroupGetObjectV2()`

```php
usergroupGetObjectV2($pkiUsergroupID): \eZmaxAPI\Model\UsergroupGetObjectV2Response
```

Retrieve an existing Usergroup



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectUsergroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiUsergroupID = 56; // int

try {
    $result = $apiInstance->usergroupGetObjectV2($pkiUsergroupID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectUsergroupApi->usergroupGetObjectV2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiUsergroupID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\UsergroupGetObjectV2Response**](../Model/UsergroupGetObjectV2Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usergroupGetPermissionsV1()`

```php
usergroupGetPermissionsV1($pkiUsergroupID): \eZmaxAPI\Model\UsergroupGetPermissionsV1Response
```

Retrieve an existing Usergroup's Permissions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectUsergroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiUsergroupID = 56; // int

try {
    $result = $apiInstance->usergroupGetPermissionsV1($pkiUsergroupID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectUsergroupApi->usergroupGetPermissionsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiUsergroupID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\UsergroupGetPermissionsV1Response**](../Model/UsergroupGetPermissionsV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usergroupGetUsergroupdelegationsV1()`

```php
usergroupGetUsergroupdelegationsV1($pkiUsergroupID): \eZmaxAPI\Model\UsergroupGetUsergroupdelegationsV1Response
```

Retrieve an existing Usergroup's Usergroupdelegations

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectUsergroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiUsergroupID = 56; // int

try {
    $result = $apiInstance->usergroupGetUsergroupdelegationsV1($pkiUsergroupID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectUsergroupApi->usergroupGetUsergroupdelegationsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiUsergroupID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\UsergroupGetUsergroupdelegationsV1Response**](../Model/UsergroupGetUsergroupdelegationsV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usergroupGetUsergroupmembershipsV1()`

```php
usergroupGetUsergroupmembershipsV1($pkiUsergroupID): \eZmaxAPI\Model\UsergroupGetUsergroupmembershipsV1Response
```

Retrieve an existing Usergroup's Usergroupmemberships

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectUsergroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiUsergroupID = 56; // int

try {
    $result = $apiInstance->usergroupGetUsergroupmembershipsV1($pkiUsergroupID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectUsergroupApi->usergroupGetUsergroupmembershipsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiUsergroupID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\UsergroupGetUsergroupmembershipsV1Response**](../Model/UsergroupGetUsergroupmembershipsV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
