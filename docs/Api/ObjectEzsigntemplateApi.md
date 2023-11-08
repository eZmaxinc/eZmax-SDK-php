# eZmaxAPI\ObjectEzsigntemplateApi

All URIs are relative to https://prod.api.appcluster01.ca-central-1.ezmax.com/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**ezsigntemplateCopyV1()**](ObjectEzsigntemplateApi.md#ezsigntemplateCopyV1) | **POST** /1/object/ezsigntemplate/{pkiEzsigntemplateID}/copy | Copy the Ezsigntemplate |
| [**ezsigntemplateCreateObjectV1()**](ObjectEzsigntemplateApi.md#ezsigntemplateCreateObjectV1) | **POST** /1/object/ezsigntemplate | Create a new Ezsigntemplate |
| [**ezsigntemplateDeleteObjectV1()**](ObjectEzsigntemplateApi.md#ezsigntemplateDeleteObjectV1) | **DELETE** /1/object/ezsigntemplate/{pkiEzsigntemplateID} | Delete an existing Ezsigntemplate |
| [**ezsigntemplateEditObjectV1()**](ObjectEzsigntemplateApi.md#ezsigntemplateEditObjectV1) | **PUT** /1/object/ezsigntemplate/{pkiEzsigntemplateID} | Edit an existing Ezsigntemplate |
| [**ezsigntemplateGetAutocompleteV2()**](ObjectEzsigntemplateApi.md#ezsigntemplateGetAutocompleteV2) | **GET** /2/object/ezsigntemplate/getAutocomplete/{sSelector} | Retrieve Ezsigntemplates and IDs |
| [**ezsigntemplateGetListV1()**](ObjectEzsigntemplateApi.md#ezsigntemplateGetListV1) | **GET** /1/object/ezsigntemplate/getList | Retrieve Ezsigntemplate list |
| [**ezsigntemplateGetObjectV1()**](ObjectEzsigntemplateApi.md#ezsigntemplateGetObjectV1) | **GET** /1/object/ezsigntemplate/{pkiEzsigntemplateID} | Retrieve an existing Ezsigntemplate |
| [**ezsigntemplateGetObjectV2()**](ObjectEzsigntemplateApi.md#ezsigntemplateGetObjectV2) | **GET** /2/object/ezsigntemplate/{pkiEzsigntemplateID} | Retrieve an existing Ezsigntemplate |


## `ezsigntemplateCopyV1()`

```php
ezsigntemplateCopyV1($pkiEzsigntemplateID, $ezsigntemplateCopyV1Request): \eZmaxAPI\Model\EzsigntemplateCopyV1Response
```

Copy the Ezsigntemplate



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsigntemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzsigntemplateID = 56; // int
$ezsigntemplateCopyV1Request = new \eZmaxAPI\Model\EzsigntemplateCopyV1Request(); // \eZmaxAPI\Model\EzsigntemplateCopyV1Request

try {
    $result = $apiInstance->ezsigntemplateCopyV1($pkiEzsigntemplateID, $ezsigntemplateCopyV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsigntemplateApi->ezsigntemplateCopyV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiEzsigntemplateID** | **int**|  | |
| **ezsigntemplateCopyV1Request** | [**\eZmaxAPI\Model\EzsigntemplateCopyV1Request**](../Model/EzsigntemplateCopyV1Request.md)|  | |

### Return type

[**\eZmaxAPI\Model\EzsigntemplateCopyV1Response**](../Model/EzsigntemplateCopyV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezsigntemplateCreateObjectV1()`

```php
ezsigntemplateCreateObjectV1($ezsigntemplateCreateObjectV1Request): \eZmaxAPI\Model\EzsigntemplateCreateObjectV1Response
```

Create a new Ezsigntemplate

The endpoint allows to create one or many elements at once.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsigntemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ezsigntemplateCreateObjectV1Request = new \eZmaxAPI\Model\EzsigntemplateCreateObjectV1Request(); // \eZmaxAPI\Model\EzsigntemplateCreateObjectV1Request

try {
    $result = $apiInstance->ezsigntemplateCreateObjectV1($ezsigntemplateCreateObjectV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsigntemplateApi->ezsigntemplateCreateObjectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ezsigntemplateCreateObjectV1Request** | [**\eZmaxAPI\Model\EzsigntemplateCreateObjectV1Request**](../Model/EzsigntemplateCreateObjectV1Request.md)|  | |

### Return type

[**\eZmaxAPI\Model\EzsigntemplateCreateObjectV1Response**](../Model/EzsigntemplateCreateObjectV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezsigntemplateDeleteObjectV1()`

```php
ezsigntemplateDeleteObjectV1($pkiEzsigntemplateID): \eZmaxAPI\Model\EzsigntemplateDeleteObjectV1Response
```

Delete an existing Ezsigntemplate



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsigntemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzsigntemplateID = 56; // int

try {
    $result = $apiInstance->ezsigntemplateDeleteObjectV1($pkiEzsigntemplateID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsigntemplateApi->ezsigntemplateDeleteObjectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiEzsigntemplateID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\EzsigntemplateDeleteObjectV1Response**](../Model/EzsigntemplateDeleteObjectV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezsigntemplateEditObjectV1()`

```php
ezsigntemplateEditObjectV1($pkiEzsigntemplateID, $ezsigntemplateEditObjectV1Request): \eZmaxAPI\Model\EzsigntemplateEditObjectV1Response
```

Edit an existing Ezsigntemplate



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsigntemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzsigntemplateID = 56; // int
$ezsigntemplateEditObjectV1Request = new \eZmaxAPI\Model\EzsigntemplateEditObjectV1Request(); // \eZmaxAPI\Model\EzsigntemplateEditObjectV1Request

try {
    $result = $apiInstance->ezsigntemplateEditObjectV1($pkiEzsigntemplateID, $ezsigntemplateEditObjectV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsigntemplateApi->ezsigntemplateEditObjectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiEzsigntemplateID** | **int**|  | |
| **ezsigntemplateEditObjectV1Request** | [**\eZmaxAPI\Model\EzsigntemplateEditObjectV1Request**](../Model/EzsigntemplateEditObjectV1Request.md)|  | |

### Return type

[**\eZmaxAPI\Model\EzsigntemplateEditObjectV1Response**](../Model/EzsigntemplateEditObjectV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezsigntemplateGetAutocompleteV2()`

```php
ezsigntemplateGetAutocompleteV2($sSelector, $eFilterActive, $sQuery, $acceptLanguage): \eZmaxAPI\Model\EzsigntemplateGetAutocompleteV2Response
```

Retrieve Ezsigntemplates and IDs

Get the list of Ezsigntemplate to be used in a dropdown or autocomplete control.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsigntemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sSelector = 'sSelector_example'; // string | The type of Ezsigntemplates to return
$eFilterActive = 'Active'; // string | Specify which results we want to display.
$sQuery = 'sQuery_example'; // string | Allow to filter the returned results
$acceptLanguage = new \eZmaxAPI\Model\HeaderAcceptLanguage(); // HeaderAcceptLanguage

try {
    $result = $apiInstance->ezsigntemplateGetAutocompleteV2($sSelector, $eFilterActive, $sQuery, $acceptLanguage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsigntemplateApi->ezsigntemplateGetAutocompleteV2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sSelector** | **string**| The type of Ezsigntemplates to return | |
| **eFilterActive** | **string**| Specify which results we want to display. | [optional] [default to &#39;Active&#39;] |
| **sQuery** | **string**| Allow to filter the returned results | [optional] |
| **acceptLanguage** | [**HeaderAcceptLanguage**](../Model/.md)|  | [optional] |

### Return type

[**\eZmaxAPI\Model\EzsigntemplateGetAutocompleteV2Response**](../Model/EzsigntemplateGetAutocompleteV2Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezsigntemplateGetListV1()`

```php
ezsigntemplateGetListV1($eOrderBy, $iRowMax, $iRowOffset, $acceptLanguage, $sFilter): \eZmaxAPI\Model\EzsigntemplateGetListV1Response
```

Retrieve Ezsigntemplate list

Enum values that can be filtered in query parameter *sFilter*:  | Variable | Valid values | |---|---| | eEzsigntemplateType | Company<br>Team<br>User<br>Usergroup |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsigntemplateApi(
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
    $result = $apiInstance->ezsigntemplateGetListV1($eOrderBy, $iRowMax, $iRowOffset, $acceptLanguage, $sFilter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsigntemplateApi->ezsigntemplateGetListV1: ', $e->getMessage(), PHP_EOL;
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

[**\eZmaxAPI\Model\EzsigntemplateGetListV1Response**](../Model/EzsigntemplateGetListV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/vnd.openxmlformats-officedocument.spreadsheetml.sheet`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezsigntemplateGetObjectV1()`

```php
ezsigntemplateGetObjectV1($pkiEzsigntemplateID): \eZmaxAPI\Model\EzsigntemplateGetObjectV1Response
```

Retrieve an existing Ezsigntemplate



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsigntemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzsigntemplateID = 56; // int

try {
    $result = $apiInstance->ezsigntemplateGetObjectV1($pkiEzsigntemplateID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsigntemplateApi->ezsigntemplateGetObjectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiEzsigntemplateID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\EzsigntemplateGetObjectV1Response**](../Model/EzsigntemplateGetObjectV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezsigntemplateGetObjectV2()`

```php
ezsigntemplateGetObjectV2($pkiEzsigntemplateID): \eZmaxAPI\Model\EzsigntemplateGetObjectV2Response
```

Retrieve an existing Ezsigntemplate



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsigntemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzsigntemplateID = 56; // int

try {
    $result = $apiInstance->ezsigntemplateGetObjectV2($pkiEzsigntemplateID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsigntemplateApi->ezsigntemplateGetObjectV2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiEzsigntemplateID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\EzsigntemplateGetObjectV2Response**](../Model/EzsigntemplateGetObjectV2Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
