# eZmaxAPI\ObjectUsergroupexternalApi

All URIs are relative to https://prod.api.appcluster01.ca-central-1.ezmax.com/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**usergroupexternalCreateObjectV1()**](ObjectUsergroupexternalApi.md#usergroupexternalCreateObjectV1) | **POST** /1/object/usergroupexternal | Create a new Usergroupexternal |
| [**usergroupexternalDeleteObjectV1()**](ObjectUsergroupexternalApi.md#usergroupexternalDeleteObjectV1) | **DELETE** /1/object/usergroupexternal/{pkiUsergroupexternalID} | Delete an existing Usergroupexternal |
| [**usergroupexternalEditObjectV1()**](ObjectUsergroupexternalApi.md#usergroupexternalEditObjectV1) | **PUT** /1/object/usergroupexternal/{pkiUsergroupexternalID} | Edit an existing Usergroupexternal |
| [**usergroupexternalGetAutocompleteV2()**](ObjectUsergroupexternalApi.md#usergroupexternalGetAutocompleteV2) | **GET** /2/object/usergroupexternal/getAutocomplete/{sSelector} | Retrieve Usergroupexternals and IDs |
| [**usergroupexternalGetListV1()**](ObjectUsergroupexternalApi.md#usergroupexternalGetListV1) | **GET** /1/object/usergroupexternal/getList | Retrieve Usergroupexternal list |
| [**usergroupexternalGetObjectV2()**](ObjectUsergroupexternalApi.md#usergroupexternalGetObjectV2) | **GET** /2/object/usergroupexternal/{pkiUsergroupexternalID} | Retrieve an existing Usergroupexternal |
| [**usergroupexternalGetUsergroupexternalmembershipsV1()**](ObjectUsergroupexternalApi.md#usergroupexternalGetUsergroupexternalmembershipsV1) | **GET** /1/object/usergroupexternal/{pkiUsergroupexternalID}/getUsergroupexternalmemberships | Retrieve an existing Usergroupexternal&#39;s Usergroupexternalmemberships |
| [**usergroupexternalGetUsergroupsV1()**](ObjectUsergroupexternalApi.md#usergroupexternalGetUsergroupsV1) | **GET** /1/object/usergroupexternal/{pkiUsergroupexternalID}/getUsergroups | Get Usergroupexternal&#39;s Usergroups |


## `usergroupexternalCreateObjectV1()`

```php
usergroupexternalCreateObjectV1($usergroupexternalCreateObjectV1Request): \eZmaxAPI\Model\UsergroupexternalCreateObjectV1Response
```

Create a new Usergroupexternal

The endpoint allows to create one or many elements at once.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectUsergroupexternalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$usergroupexternalCreateObjectV1Request = new \eZmaxAPI\Model\UsergroupexternalCreateObjectV1Request(); // \eZmaxAPI\Model\UsergroupexternalCreateObjectV1Request

try {
    $result = $apiInstance->usergroupexternalCreateObjectV1($usergroupexternalCreateObjectV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectUsergroupexternalApi->usergroupexternalCreateObjectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **usergroupexternalCreateObjectV1Request** | [**\eZmaxAPI\Model\UsergroupexternalCreateObjectV1Request**](../Model/UsergroupexternalCreateObjectV1Request.md)|  | |

### Return type

[**\eZmaxAPI\Model\UsergroupexternalCreateObjectV1Response**](../Model/UsergroupexternalCreateObjectV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usergroupexternalDeleteObjectV1()`

```php
usergroupexternalDeleteObjectV1($pkiUsergroupexternalID): \eZmaxAPI\Model\CommonResponse
```

Delete an existing Usergroupexternal



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectUsergroupexternalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiUsergroupexternalID = 56; // int | The unique ID of the Usergroupexternal

try {
    $result = $apiInstance->usergroupexternalDeleteObjectV1($pkiUsergroupexternalID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectUsergroupexternalApi->usergroupexternalDeleteObjectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiUsergroupexternalID** | **int**| The unique ID of the Usergroupexternal | |

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

## `usergroupexternalEditObjectV1()`

```php
usergroupexternalEditObjectV1($pkiUsergroupexternalID, $usergroupexternalEditObjectV1Request): \eZmaxAPI\Model\CommonResponse
```

Edit an existing Usergroupexternal



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectUsergroupexternalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiUsergroupexternalID = 56; // int | The unique ID of the Usergroupexternal
$usergroupexternalEditObjectV1Request = new \eZmaxAPI\Model\UsergroupexternalEditObjectV1Request(); // \eZmaxAPI\Model\UsergroupexternalEditObjectV1Request

try {
    $result = $apiInstance->usergroupexternalEditObjectV1($pkiUsergroupexternalID, $usergroupexternalEditObjectV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectUsergroupexternalApi->usergroupexternalEditObjectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiUsergroupexternalID** | **int**| The unique ID of the Usergroupexternal | |
| **usergroupexternalEditObjectV1Request** | [**\eZmaxAPI\Model\UsergroupexternalEditObjectV1Request**](../Model/UsergroupexternalEditObjectV1Request.md)|  | |

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

## `usergroupexternalGetAutocompleteV2()`

```php
usergroupexternalGetAutocompleteV2($sSelector, $eFilterActive, $sQuery, $acceptLanguage): \eZmaxAPI\Model\UsergroupexternalGetAutocompleteV2Response
```

Retrieve Usergroupexternals and IDs

Get the list of Usergroupexternal to be used in a dropdown or autocomplete control.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectUsergroupexternalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sSelector = 'sSelector_example'; // string | The type of Usergroupexternals to return
$eFilterActive = 'Active'; // string | Specify which results we want to display.
$sQuery = 'sQuery_example'; // string | Allow to filter the returned results
$acceptLanguage = new \eZmaxAPI\Model\\eZmaxAPI\Model\HeaderAcceptLanguage(); // \eZmaxAPI\Model\HeaderAcceptLanguage

try {
    $result = $apiInstance->usergroupexternalGetAutocompleteV2($sSelector, $eFilterActive, $sQuery, $acceptLanguage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectUsergroupexternalApi->usergroupexternalGetAutocompleteV2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sSelector** | **string**| The type of Usergroupexternals to return | |
| **eFilterActive** | **string**| Specify which results we want to display. | [optional] [default to &#39;Active&#39;] |
| **sQuery** | **string**| Allow to filter the returned results | [optional] |
| **acceptLanguage** | [**\eZmaxAPI\Model\HeaderAcceptLanguage**](../Model/.md)|  | [optional] |

### Return type

[**\eZmaxAPI\Model\UsergroupexternalGetAutocompleteV2Response**](../Model/UsergroupexternalGetAutocompleteV2Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usergroupexternalGetListV1()`

```php
usergroupexternalGetListV1($eOrderBy, $iRowMax, $iRowOffset, $acceptLanguage, $sFilter): \eZmaxAPI\Model\UsergroupexternalGetListV1Response
```

Retrieve Usergroupexternal list



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectUsergroupexternalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$eOrderBy = 'eOrderBy_example'; // string | Specify how you want the results to be sorted
$iRowMax = 56; // int
$iRowOffset = 0; // int
$acceptLanguage = new \eZmaxAPI\Model\\eZmaxAPI\Model\HeaderAcceptLanguage(); // \eZmaxAPI\Model\HeaderAcceptLanguage
$sFilter = 'sFilter_example'; // string

try {
    $result = $apiInstance->usergroupexternalGetListV1($eOrderBy, $iRowMax, $iRowOffset, $acceptLanguage, $sFilter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectUsergroupexternalApi->usergroupexternalGetListV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **eOrderBy** | **string**| Specify how you want the results to be sorted | [optional] |
| **iRowMax** | **int**|  | [optional] |
| **iRowOffset** | **int**|  | [optional] [default to 0] |
| **acceptLanguage** | [**\eZmaxAPI\Model\HeaderAcceptLanguage**](../Model/.md)|  | [optional] |
| **sFilter** | **string**|  | [optional] |

### Return type

[**\eZmaxAPI\Model\UsergroupexternalGetListV1Response**](../Model/UsergroupexternalGetListV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/vnd.openxmlformats-officedocument.spreadsheetml.sheet`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usergroupexternalGetObjectV2()`

```php
usergroupexternalGetObjectV2($pkiUsergroupexternalID): \eZmaxAPI\Model\UsergroupexternalGetObjectV2Response
```

Retrieve an existing Usergroupexternal



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectUsergroupexternalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiUsergroupexternalID = 56; // int | The unique ID of the Usergroupexternal

try {
    $result = $apiInstance->usergroupexternalGetObjectV2($pkiUsergroupexternalID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectUsergroupexternalApi->usergroupexternalGetObjectV2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiUsergroupexternalID** | **int**| The unique ID of the Usergroupexternal | |

### Return type

[**\eZmaxAPI\Model\UsergroupexternalGetObjectV2Response**](../Model/UsergroupexternalGetObjectV2Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usergroupexternalGetUsergroupexternalmembershipsV1()`

```php
usergroupexternalGetUsergroupexternalmembershipsV1($pkiUsergroupexternalID): \eZmaxAPI\Model\UsergroupexternalGetUsergroupexternalmembershipsV1Response
```

Retrieve an existing Usergroupexternal's Usergroupexternalmemberships

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectUsergroupexternalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiUsergroupexternalID = 56; // int

try {
    $result = $apiInstance->usergroupexternalGetUsergroupexternalmembershipsV1($pkiUsergroupexternalID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectUsergroupexternalApi->usergroupexternalGetUsergroupexternalmembershipsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiUsergroupexternalID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\UsergroupexternalGetUsergroupexternalmembershipsV1Response**](../Model/UsergroupexternalGetUsergroupexternalmembershipsV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usergroupexternalGetUsergroupsV1()`

```php
usergroupexternalGetUsergroupsV1($pkiUsergroupexternalID): \eZmaxAPI\Model\UsergroupexternalGetUsergroupsV1Response
```

Get Usergroupexternal's Usergroups

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectUsergroupexternalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiUsergroupexternalID = 56; // int

try {
    $result = $apiInstance->usergroupexternalGetUsergroupsV1($pkiUsergroupexternalID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectUsergroupexternalApi->usergroupexternalGetUsergroupsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiUsergroupexternalID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\UsergroupexternalGetUsergroupsV1Response**](../Model/UsergroupexternalGetUsergroupsV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
