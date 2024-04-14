# eZmaxAPI\ObjectEzsignfoldertypeApi

All URIs are relative to https://prod.api.appcluster01.ca-central-1.ezmax.com/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**ezsignfoldertypeCreateObjectV2()**](ObjectEzsignfoldertypeApi.md#ezsignfoldertypeCreateObjectV2) | **POST** /2/object/ezsignfoldertype | Create a new Ezsignfoldertype |
| [**ezsignfoldertypeEditObjectV1()**](ObjectEzsignfoldertypeApi.md#ezsignfoldertypeEditObjectV1) | **PUT** /1/object/ezsignfoldertype/{pkiEzsignfoldertypeID} | Edit an existing Ezsignfoldertype |
| [**ezsignfoldertypeEditObjectV2()**](ObjectEzsignfoldertypeApi.md#ezsignfoldertypeEditObjectV2) | **PUT** /2/object/ezsignfoldertype/{pkiEzsignfoldertypeID} | Edit an existing Ezsignfoldertype |
| [**ezsignfoldertypeGetAutocompleteV2()**](ObjectEzsignfoldertypeApi.md#ezsignfoldertypeGetAutocompleteV2) | **GET** /2/object/ezsignfoldertype/getAutocomplete/{sSelector} | Retrieve Ezsignfoldertypes and IDs |
| [**ezsignfoldertypeGetListV1()**](ObjectEzsignfoldertypeApi.md#ezsignfoldertypeGetListV1) | **GET** /1/object/ezsignfoldertype/getList | Retrieve Ezsignfoldertype list |
| [**ezsignfoldertypeGetObjectV2()**](ObjectEzsignfoldertypeApi.md#ezsignfoldertypeGetObjectV2) | **GET** /2/object/ezsignfoldertype/{pkiEzsignfoldertypeID} | Retrieve an existing Ezsignfoldertype |
| [**ezsignfoldertypeGetObjectV3()**](ObjectEzsignfoldertypeApi.md#ezsignfoldertypeGetObjectV3) | **GET** /3/object/ezsignfoldertype/{pkiEzsignfoldertypeID} | Retrieve an existing Ezsignfoldertype |


## `ezsignfoldertypeCreateObjectV2()`

```php
ezsignfoldertypeCreateObjectV2($ezsignfoldertypeCreateObjectV2Request): \eZmaxAPI\Model\EzsignfoldertypeCreateObjectV2Response
```

Create a new Ezsignfoldertype

The endpoint allows to create one or many elements at once.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsignfoldertypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ezsignfoldertypeCreateObjectV2Request = new \eZmaxAPI\Model\EzsignfoldertypeCreateObjectV2Request(); // \eZmaxAPI\Model\EzsignfoldertypeCreateObjectV2Request

try {
    $result = $apiInstance->ezsignfoldertypeCreateObjectV2($ezsignfoldertypeCreateObjectV2Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsignfoldertypeApi->ezsignfoldertypeCreateObjectV2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ezsignfoldertypeCreateObjectV2Request** | [**\eZmaxAPI\Model\EzsignfoldertypeCreateObjectV2Request**](../Model/EzsignfoldertypeCreateObjectV2Request.md)|  | |

### Return type

[**\eZmaxAPI\Model\EzsignfoldertypeCreateObjectV2Response**](../Model/EzsignfoldertypeCreateObjectV2Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezsignfoldertypeEditObjectV1()`

```php
ezsignfoldertypeEditObjectV1($pkiEzsignfoldertypeID, $ezsignfoldertypeEditObjectV1Request): \eZmaxAPI\Model\EzsignfoldertypeEditObjectV1Response
```

Edit an existing Ezsignfoldertype



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsignfoldertypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzsignfoldertypeID = 56; // int
$ezsignfoldertypeEditObjectV1Request = new \eZmaxAPI\Model\EzsignfoldertypeEditObjectV1Request(); // \eZmaxAPI\Model\EzsignfoldertypeEditObjectV1Request

try {
    $result = $apiInstance->ezsignfoldertypeEditObjectV1($pkiEzsignfoldertypeID, $ezsignfoldertypeEditObjectV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsignfoldertypeApi->ezsignfoldertypeEditObjectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiEzsignfoldertypeID** | **int**|  | |
| **ezsignfoldertypeEditObjectV1Request** | [**\eZmaxAPI\Model\EzsignfoldertypeEditObjectV1Request**](../Model/EzsignfoldertypeEditObjectV1Request.md)|  | |

### Return type

[**\eZmaxAPI\Model\EzsignfoldertypeEditObjectV1Response**](../Model/EzsignfoldertypeEditObjectV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezsignfoldertypeEditObjectV2()`

```php
ezsignfoldertypeEditObjectV2($pkiEzsignfoldertypeID, $ezsignfoldertypeEditObjectV2Request): \eZmaxAPI\Model\EzsignfoldertypeEditObjectV2Response
```

Edit an existing Ezsignfoldertype



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsignfoldertypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzsignfoldertypeID = 56; // int
$ezsignfoldertypeEditObjectV2Request = new \eZmaxAPI\Model\EzsignfoldertypeEditObjectV2Request(); // \eZmaxAPI\Model\EzsignfoldertypeEditObjectV2Request

try {
    $result = $apiInstance->ezsignfoldertypeEditObjectV2($pkiEzsignfoldertypeID, $ezsignfoldertypeEditObjectV2Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsignfoldertypeApi->ezsignfoldertypeEditObjectV2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiEzsignfoldertypeID** | **int**|  | |
| **ezsignfoldertypeEditObjectV2Request** | [**\eZmaxAPI\Model\EzsignfoldertypeEditObjectV2Request**](../Model/EzsignfoldertypeEditObjectV2Request.md)|  | |

### Return type

[**\eZmaxAPI\Model\EzsignfoldertypeEditObjectV2Response**](../Model/EzsignfoldertypeEditObjectV2Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezsignfoldertypeGetAutocompleteV2()`

```php
ezsignfoldertypeGetAutocompleteV2($sSelector, $eFilterActive, $sQuery, $acceptLanguage): \eZmaxAPI\Model\EzsignfoldertypeGetAutocompleteV2Response
```

Retrieve Ezsignfoldertypes and IDs

Get the list of Ezsignfoldertype to be used in a dropdown or autocomplete control.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsignfoldertypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sSelector = 'sSelector_example'; // string | The type of Ezsignfoldertypes to return
$eFilterActive = 'Active'; // string | Specify which results we want to display.
$sQuery = 'sQuery_example'; // string | Allow to filter the returned results
$acceptLanguage = new \eZmaxAPI\Model\HeaderAcceptLanguage(); // HeaderAcceptLanguage

try {
    $result = $apiInstance->ezsignfoldertypeGetAutocompleteV2($sSelector, $eFilterActive, $sQuery, $acceptLanguage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsignfoldertypeApi->ezsignfoldertypeGetAutocompleteV2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sSelector** | **string**| The type of Ezsignfoldertypes to return | |
| **eFilterActive** | **string**| Specify which results we want to display. | [optional] [default to &#39;Active&#39;] |
| **sQuery** | **string**| Allow to filter the returned results | [optional] |
| **acceptLanguage** | [**HeaderAcceptLanguage**](../Model/.md)|  | [optional] |

### Return type

[**\eZmaxAPI\Model\EzsignfoldertypeGetAutocompleteV2Response**](../Model/EzsignfoldertypeGetAutocompleteV2Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezsignfoldertypeGetListV1()`

```php
ezsignfoldertypeGetListV1($eOrderBy, $iRowMax, $iRowOffset, $acceptLanguage, $sFilter): \eZmaxAPI\Model\EzsignfoldertypeGetListV1Response
```

Retrieve Ezsignfoldertype list

Enum values that can be filtered in query parameter *sFilter*:  | Variable | Valid values | |---|---| | eEzsignfoldertypePrivacylevel | User<br>Usergroup |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsignfoldertypeApi(
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
    $result = $apiInstance->ezsignfoldertypeGetListV1($eOrderBy, $iRowMax, $iRowOffset, $acceptLanguage, $sFilter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsignfoldertypeApi->ezsignfoldertypeGetListV1: ', $e->getMessage(), PHP_EOL;
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

[**\eZmaxAPI\Model\EzsignfoldertypeGetListV1Response**](../Model/EzsignfoldertypeGetListV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/vnd.openxmlformats-officedocument.spreadsheetml.sheet`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezsignfoldertypeGetObjectV2()`

```php
ezsignfoldertypeGetObjectV2($pkiEzsignfoldertypeID): \eZmaxAPI\Model\EzsignfoldertypeGetObjectV2Response
```

Retrieve an existing Ezsignfoldertype



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsignfoldertypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzsignfoldertypeID = 56; // int

try {
    $result = $apiInstance->ezsignfoldertypeGetObjectV2($pkiEzsignfoldertypeID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsignfoldertypeApi->ezsignfoldertypeGetObjectV2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiEzsignfoldertypeID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\EzsignfoldertypeGetObjectV2Response**](../Model/EzsignfoldertypeGetObjectV2Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezsignfoldertypeGetObjectV3()`

```php
ezsignfoldertypeGetObjectV3($pkiEzsignfoldertypeID): \eZmaxAPI\Model\EzsignfoldertypeGetObjectV3Response
```

Retrieve an existing Ezsignfoldertype



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsignfoldertypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzsignfoldertypeID = 56; // int

try {
    $result = $apiInstance->ezsignfoldertypeGetObjectV3($pkiEzsignfoldertypeID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsignfoldertypeApi->ezsignfoldertypeGetObjectV3: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiEzsignfoldertypeID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\EzsignfoldertypeGetObjectV3Response**](../Model/EzsignfoldertypeGetObjectV3Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
