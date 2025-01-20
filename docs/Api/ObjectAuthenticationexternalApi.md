# eZmaxAPI\ObjectAuthenticationexternalApi

All URIs are relative to https://prod.api.appcluster01.ca-central-1.ezmax.com/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**authenticationexternalCreateObjectV1()**](ObjectAuthenticationexternalApi.md#authenticationexternalCreateObjectV1) | **POST** /1/object/authenticationexternal | Create a new Authenticationexternal |
| [**authenticationexternalDeleteObjectV1()**](ObjectAuthenticationexternalApi.md#authenticationexternalDeleteObjectV1) | **DELETE** /1/object/authenticationexternal/{pkiAuthenticationexternalID} | Delete an existing Authenticationexternal |
| [**authenticationexternalEditObjectV1()**](ObjectAuthenticationexternalApi.md#authenticationexternalEditObjectV1) | **PUT** /1/object/authenticationexternal/{pkiAuthenticationexternalID} | Edit an existing Authenticationexternal |
| [**authenticationexternalGetAutocompleteV2()**](ObjectAuthenticationexternalApi.md#authenticationexternalGetAutocompleteV2) | **GET** /2/object/authenticationexternal/getAutocomplete/{sSelector} | Retrieve Authenticationexternals and IDs |
| [**authenticationexternalGetListV1()**](ObjectAuthenticationexternalApi.md#authenticationexternalGetListV1) | **GET** /1/object/authenticationexternal/getList | Retrieve Authenticationexternal list |
| [**authenticationexternalGetObjectV2()**](ObjectAuthenticationexternalApi.md#authenticationexternalGetObjectV2) | **GET** /2/object/authenticationexternal/{pkiAuthenticationexternalID} | Retrieve an existing Authenticationexternal |
| [**authenticationexternalResetAuthorizationV1()**](ObjectAuthenticationexternalApi.md#authenticationexternalResetAuthorizationV1) | **POST** /1/object/authenticationexternal/{pkiAuthenticationexternalID}/resetAuthorization | Reset the Authenticationexternal authorization |


## `authenticationexternalCreateObjectV1()`

```php
authenticationexternalCreateObjectV1($authenticationexternalCreateObjectV1Request): \eZmaxAPI\Model\AuthenticationexternalCreateObjectV1Response
```

Create a new Authenticationexternal

The endpoint allows to create one or many elements at once.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectAuthenticationexternalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authenticationexternalCreateObjectV1Request = new \eZmaxAPI\Model\AuthenticationexternalCreateObjectV1Request(); // \eZmaxAPI\Model\AuthenticationexternalCreateObjectV1Request

try {
    $result = $apiInstance->authenticationexternalCreateObjectV1($authenticationexternalCreateObjectV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectAuthenticationexternalApi->authenticationexternalCreateObjectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authenticationexternalCreateObjectV1Request** | [**\eZmaxAPI\Model\AuthenticationexternalCreateObjectV1Request**](../Model/AuthenticationexternalCreateObjectV1Request.md)|  | |

### Return type

[**\eZmaxAPI\Model\AuthenticationexternalCreateObjectV1Response**](../Model/AuthenticationexternalCreateObjectV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `authenticationexternalDeleteObjectV1()`

```php
authenticationexternalDeleteObjectV1($pkiAuthenticationexternalID): \eZmaxAPI\Model\CommonResponse
```

Delete an existing Authenticationexternal



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectAuthenticationexternalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiAuthenticationexternalID = 56; // int | The unique ID of the Authenticationexternal

try {
    $result = $apiInstance->authenticationexternalDeleteObjectV1($pkiAuthenticationexternalID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectAuthenticationexternalApi->authenticationexternalDeleteObjectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiAuthenticationexternalID** | **int**| The unique ID of the Authenticationexternal | |

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

## `authenticationexternalEditObjectV1()`

```php
authenticationexternalEditObjectV1($pkiAuthenticationexternalID, $authenticationexternalEditObjectV1Request): \eZmaxAPI\Model\CommonResponse
```

Edit an existing Authenticationexternal



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectAuthenticationexternalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiAuthenticationexternalID = 56; // int | The unique ID of the Authenticationexternal
$authenticationexternalEditObjectV1Request = new \eZmaxAPI\Model\AuthenticationexternalEditObjectV1Request(); // \eZmaxAPI\Model\AuthenticationexternalEditObjectV1Request

try {
    $result = $apiInstance->authenticationexternalEditObjectV1($pkiAuthenticationexternalID, $authenticationexternalEditObjectV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectAuthenticationexternalApi->authenticationexternalEditObjectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiAuthenticationexternalID** | **int**| The unique ID of the Authenticationexternal | |
| **authenticationexternalEditObjectV1Request** | [**\eZmaxAPI\Model\AuthenticationexternalEditObjectV1Request**](../Model/AuthenticationexternalEditObjectV1Request.md)|  | |

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

## `authenticationexternalGetAutocompleteV2()`

```php
authenticationexternalGetAutocompleteV2($sSelector, $eFilterActive, $sQuery, $acceptLanguage): \eZmaxAPI\Model\AuthenticationexternalGetAutocompleteV2Response
```

Retrieve Authenticationexternals and IDs

Get the list of Authenticationexternal to be used in a dropdown or autocomplete control.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectAuthenticationexternalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sSelector = 'sSelector_example'; // string | The type of Authenticationexternals to return
$eFilterActive = 'Active'; // string | Specify which results we want to display.
$sQuery = 'sQuery_example'; // string | Allow to filter the returned results
$acceptLanguage = new \eZmaxAPI\Model\\eZmaxAPI\Model\HeaderAcceptLanguage(); // \eZmaxAPI\Model\HeaderAcceptLanguage

try {
    $result = $apiInstance->authenticationexternalGetAutocompleteV2($sSelector, $eFilterActive, $sQuery, $acceptLanguage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectAuthenticationexternalApi->authenticationexternalGetAutocompleteV2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sSelector** | **string**| The type of Authenticationexternals to return | |
| **eFilterActive** | **string**| Specify which results we want to display. | [optional] [default to &#39;Active&#39;] |
| **sQuery** | **string**| Allow to filter the returned results | [optional] |
| **acceptLanguage** | [**\eZmaxAPI\Model\HeaderAcceptLanguage**](../Model/.md)|  | [optional] |

### Return type

[**\eZmaxAPI\Model\AuthenticationexternalGetAutocompleteV2Response**](../Model/AuthenticationexternalGetAutocompleteV2Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `authenticationexternalGetListV1()`

```php
authenticationexternalGetListV1($eOrderBy, $iRowMax, $iRowOffset, $acceptLanguage, $sFilter): \eZmaxAPI\Model\AuthenticationexternalGetListV1Response
```

Retrieve Authenticationexternal list

Enum values that can be filtered in query parameter *sFilter*:  | Variable | Valid values | |---|---| | eAuthenticationexternalType | Salesforce<br>SalesforceSandbox |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectAuthenticationexternalApi(
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
    $result = $apiInstance->authenticationexternalGetListV1($eOrderBy, $iRowMax, $iRowOffset, $acceptLanguage, $sFilter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectAuthenticationexternalApi->authenticationexternalGetListV1: ', $e->getMessage(), PHP_EOL;
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

[**\eZmaxAPI\Model\AuthenticationexternalGetListV1Response**](../Model/AuthenticationexternalGetListV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/vnd.openxmlformats-officedocument.spreadsheetml.sheet`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `authenticationexternalGetObjectV2()`

```php
authenticationexternalGetObjectV2($pkiAuthenticationexternalID): \eZmaxAPI\Model\AuthenticationexternalGetObjectV2Response
```

Retrieve an existing Authenticationexternal



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectAuthenticationexternalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiAuthenticationexternalID = 56; // int | The unique ID of the Authenticationexternal

try {
    $result = $apiInstance->authenticationexternalGetObjectV2($pkiAuthenticationexternalID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectAuthenticationexternalApi->authenticationexternalGetObjectV2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiAuthenticationexternalID** | **int**| The unique ID of the Authenticationexternal | |

### Return type

[**\eZmaxAPI\Model\AuthenticationexternalGetObjectV2Response**](../Model/AuthenticationexternalGetObjectV2Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `authenticationexternalResetAuthorizationV1()`

```php
authenticationexternalResetAuthorizationV1($pkiAuthenticationexternalID, $body): \eZmaxAPI\Model\CommonResponse
```

Reset the Authenticationexternal authorization



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectAuthenticationexternalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiAuthenticationexternalID = 56; // int
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->authenticationexternalResetAuthorizationV1($pkiAuthenticationexternalID, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectAuthenticationexternalApi->authenticationexternalResetAuthorizationV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiAuthenticationexternalID** | **int**|  | |
| **body** | **object**|  | |

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
