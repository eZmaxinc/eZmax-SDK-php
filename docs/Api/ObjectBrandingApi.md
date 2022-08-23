# eZmaxAPI\ObjectBrandingApi

All URIs are relative to https://prod.api.appcluster01.ca-central-1.ezmax.com/rest.

Method | HTTP request | Description
------------- | ------------- | -------------
[**brandingCreateObjectV1()**](ObjectBrandingApi.md#brandingCreateObjectV1) | **POST** /1/object/branding | Create a new Branding
[**brandingEditObjectV1()**](ObjectBrandingApi.md#brandingEditObjectV1) | **PUT** /1/object/branding/{pkiBrandingID} | Edit an existing Branding
[**brandingGetAutocompleteV1()**](ObjectBrandingApi.md#brandingGetAutocompleteV1) | **GET** /1/object/branding/getAutocomplete/{sSelector} | Retrieve Brandings and IDs
[**brandingGetListV1()**](ObjectBrandingApi.md#brandingGetListV1) | **GET** /1/object/branding/getList | Retrieve Branding list
[**brandingGetObjectV1()**](ObjectBrandingApi.md#brandingGetObjectV1) | **GET** /1/object/branding/{pkiBrandingID} | Retrieve an existing Branding


## `brandingCreateObjectV1()`

```php
brandingCreateObjectV1($brandingCreateObjectV1Request): \eZmaxAPI\Model\BrandingCreateObjectV1Response
```

Create a new Branding

The endpoint allows to create one or many elements at once.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectBrandingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$brandingCreateObjectV1Request = new \eZmaxAPI\Model\BrandingCreateObjectV1Request(); // \eZmaxAPI\Model\BrandingCreateObjectV1Request

try {
    $result = $apiInstance->brandingCreateObjectV1($brandingCreateObjectV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectBrandingApi->brandingCreateObjectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **brandingCreateObjectV1Request** | [**\eZmaxAPI\Model\BrandingCreateObjectV1Request**](../Model/BrandingCreateObjectV1Request.md)|  |

### Return type

[**\eZmaxAPI\Model\BrandingCreateObjectV1Response**](../Model/BrandingCreateObjectV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `brandingEditObjectV1()`

```php
brandingEditObjectV1($pkiBrandingID, $brandingEditObjectV1Request): \eZmaxAPI\Model\BrandingEditObjectV1Response
```

Edit an existing Branding



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectBrandingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiBrandingID = 56; // int
$brandingEditObjectV1Request = new \eZmaxAPI\Model\BrandingEditObjectV1Request(); // \eZmaxAPI\Model\BrandingEditObjectV1Request

try {
    $result = $apiInstance->brandingEditObjectV1($pkiBrandingID, $brandingEditObjectV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectBrandingApi->brandingEditObjectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pkiBrandingID** | **int**|  |
 **brandingEditObjectV1Request** | [**\eZmaxAPI\Model\BrandingEditObjectV1Request**](../Model/BrandingEditObjectV1Request.md)|  |

### Return type

[**\eZmaxAPI\Model\BrandingEditObjectV1Response**](../Model/BrandingEditObjectV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `brandingGetAutocompleteV1()`

```php
brandingGetAutocompleteV1($sSelector, $eFilterActive, $sQuery, $acceptLanguage): \eZmaxAPI\Model\CommonGetAutocompleteV1Response
```

Retrieve Brandings and IDs

Get the list of Branding to be used in a dropdown or autocomplete control.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectBrandingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sSelector = 'sSelector_example'; // string | The type of Brandings to return
$eFilterActive = 'Active'; // string | Specify which results we want to display.
$sQuery = 'sQuery_example'; // string | Allow to filter the returned results
$acceptLanguage = new \eZmaxAPI\Model\HeaderAcceptLanguage(); // HeaderAcceptLanguage

try {
    $result = $apiInstance->brandingGetAutocompleteV1($sSelector, $eFilterActive, $sQuery, $acceptLanguage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectBrandingApi->brandingGetAutocompleteV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sSelector** | **string**| The type of Brandings to return |
 **eFilterActive** | **string**| Specify which results we want to display. | [optional] [default to &#39;Active&#39;]
 **sQuery** | **string**| Allow to filter the returned results | [optional]
 **acceptLanguage** | [**HeaderAcceptLanguage**](../Model/.md)|  | [optional]

### Return type

[**\eZmaxAPI\Model\CommonGetAutocompleteV1Response**](../Model/CommonGetAutocompleteV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `brandingGetListV1()`

```php
brandingGetListV1($eOrderBy, $iRowMax, $iRowOffset, $acceptLanguage, $sFilter): \eZmaxAPI\Model\BrandingGetListV1Response
```

Retrieve Branding list

Enum values that can be filtered in query parameter *sFilter*:  | Variable | Valid values | |---|---| | eBrandingLogo | Default<br>JPEG<br>PNG |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectBrandingApi(
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
    $result = $apiInstance->brandingGetListV1($eOrderBy, $iRowMax, $iRowOffset, $acceptLanguage, $sFilter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectBrandingApi->brandingGetListV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **eOrderBy** | **string**| Specify how you want the results to be sorted | [optional]
 **iRowMax** | **int**|  | [optional]
 **iRowOffset** | **int**|  | [optional]
 **acceptLanguage** | [**HeaderAcceptLanguage**](../Model/.md)|  | [optional]
 **sFilter** | **string**|  | [optional]

### Return type

[**\eZmaxAPI\Model\BrandingGetListV1Response**](../Model/BrandingGetListV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/vnd.openxmlformats-officedocument.spreadsheetml.sheet`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `brandingGetObjectV1()`

```php
brandingGetObjectV1($pkiBrandingID): \eZmaxAPI\Model\BrandingGetObjectV1Response
```

Retrieve an existing Branding



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectBrandingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiBrandingID = 56; // int

try {
    $result = $apiInstance->brandingGetObjectV1($pkiBrandingID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectBrandingApi->brandingGetObjectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pkiBrandingID** | **int**|  |

### Return type

[**\eZmaxAPI\Model\BrandingGetObjectV1Response**](../Model/BrandingGetObjectV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
