# eZmaxAPI\ObjectUsergroupApi

All URIs are relative to https://prod.api.appcluster01.ca-central-1.ezmax.com/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**usergroupCreateObjectV1()**](ObjectUsergroupApi.md#usergroupCreateObjectV1) | **POST** /1/object/usergroup | Create a new Usergroup |
| [**usergroupEditObjectV1()**](ObjectUsergroupApi.md#usergroupEditObjectV1) | **PUT** /1/object/usergroup/{pkiUsergroupID} | Edit an existing Usergroup |
| [**usergroupGetAutocompleteV2()**](ObjectUsergroupApi.md#usergroupGetAutocompleteV2) | **GET** /2/object/usergroup/getAutocomplete/{sSelector} | Retrieve Usergroups and IDs |
| [**usergroupGetListV1()**](ObjectUsergroupApi.md#usergroupGetListV1) | **GET** /1/object/usergroup/getList | Retrieve Usergroup list |
| [**usergroupGetObjectV2()**](ObjectUsergroupApi.md#usergroupGetObjectV2) | **GET** /2/object/usergroup/{pkiUsergroupID} | Retrieve an existing Usergroup |


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
$pkiUsergroupID = 56; // int | The unique ID of the Usergroup
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
| **pkiUsergroupID** | **int**| The unique ID of the Usergroup | |
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
$iRowOffset = 56; // int
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
| **iRowOffset** | **int**|  | [optional] |
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
$pkiUsergroupID = 56; // int | The unique ID of the Usergroup

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
| **pkiUsergroupID** | **int**| The unique ID of the Usergroup | |

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
