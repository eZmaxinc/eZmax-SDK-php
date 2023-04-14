# eZmaxAPI\ObjectPaymenttermApi

All URIs are relative to https://prod.api.appcluster01.ca-central-1.ezmax.com/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**paymenttermCreateObjectV1()**](ObjectPaymenttermApi.md#paymenttermCreateObjectV1) | **POST** /1/object/paymentterm | Create a new Paymentterm |
| [**paymenttermEditObjectV1()**](ObjectPaymenttermApi.md#paymenttermEditObjectV1) | **PUT** /1/object/paymentterm/{pkiPaymenttermID} | Edit an existing Paymentterm |
| [**paymenttermGetAutocompleteV2()**](ObjectPaymenttermApi.md#paymenttermGetAutocompleteV2) | **GET** /2/object/paymentterm/getAutocomplete/{sSelector} | Retrieve Paymentterms and IDs |
| [**paymenttermGetListV1()**](ObjectPaymenttermApi.md#paymenttermGetListV1) | **GET** /1/object/paymentterm/getList | Retrieve Paymentterm list |
| [**paymenttermGetObjectV2()**](ObjectPaymenttermApi.md#paymenttermGetObjectV2) | **GET** /2/object/paymentterm/{pkiPaymenttermID} | Retrieve an existing Paymentterm |


## `paymenttermCreateObjectV1()`

```php
paymenttermCreateObjectV1($paymenttermCreateObjectV1Request): \eZmaxAPI\Model\PaymenttermCreateObjectV1Response
```

Create a new Paymentterm

The endpoint allows to create one or many elements at once.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectPaymenttermApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$paymenttermCreateObjectV1Request = new \eZmaxAPI\Model\PaymenttermCreateObjectV1Request(); // \eZmaxAPI\Model\PaymenttermCreateObjectV1Request

try {
    $result = $apiInstance->paymenttermCreateObjectV1($paymenttermCreateObjectV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectPaymenttermApi->paymenttermCreateObjectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **paymenttermCreateObjectV1Request** | [**\eZmaxAPI\Model\PaymenttermCreateObjectV1Request**](../Model/PaymenttermCreateObjectV1Request.md)|  | |

### Return type

[**\eZmaxAPI\Model\PaymenttermCreateObjectV1Response**](../Model/PaymenttermCreateObjectV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `paymenttermEditObjectV1()`

```php
paymenttermEditObjectV1($pkiPaymenttermID, $paymenttermEditObjectV1Request): \eZmaxAPI\Model\PaymenttermEditObjectV1Response
```

Edit an existing Paymentterm



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectPaymenttermApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiPaymenttermID = 56; // int
$paymenttermEditObjectV1Request = new \eZmaxAPI\Model\PaymenttermEditObjectV1Request(); // \eZmaxAPI\Model\PaymenttermEditObjectV1Request

try {
    $result = $apiInstance->paymenttermEditObjectV1($pkiPaymenttermID, $paymenttermEditObjectV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectPaymenttermApi->paymenttermEditObjectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiPaymenttermID** | **int**|  | |
| **paymenttermEditObjectV1Request** | [**\eZmaxAPI\Model\PaymenttermEditObjectV1Request**](../Model/PaymenttermEditObjectV1Request.md)|  | |

### Return type

[**\eZmaxAPI\Model\PaymenttermEditObjectV1Response**](../Model/PaymenttermEditObjectV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `paymenttermGetAutocompleteV2()`

```php
paymenttermGetAutocompleteV2($sSelector, $eFilterActive, $sQuery, $acceptLanguage): \eZmaxAPI\Model\PaymenttermGetAutocompleteV2Response
```

Retrieve Paymentterms and IDs

Get the list of Paymentterm to be used in a dropdown or autocomplete control.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectPaymenttermApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sSelector = 'sSelector_example'; // string | The type of Paymentterms to return
$eFilterActive = 'Active'; // string | Specify which results we want to display.
$sQuery = 'sQuery_example'; // string | Allow to filter the returned results
$acceptLanguage = new \eZmaxAPI\Model\HeaderAcceptLanguage(); // HeaderAcceptLanguage

try {
    $result = $apiInstance->paymenttermGetAutocompleteV2($sSelector, $eFilterActive, $sQuery, $acceptLanguage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectPaymenttermApi->paymenttermGetAutocompleteV2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sSelector** | **string**| The type of Paymentterms to return | |
| **eFilterActive** | **string**| Specify which results we want to display. | [optional] [default to &#39;Active&#39;] |
| **sQuery** | **string**| Allow to filter the returned results | [optional] |
| **acceptLanguage** | [**HeaderAcceptLanguage**](../Model/.md)|  | [optional] |

### Return type

[**\eZmaxAPI\Model\PaymenttermGetAutocompleteV2Response**](../Model/PaymenttermGetAutocompleteV2Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `paymenttermGetListV1()`

```php
paymenttermGetListV1($eOrderBy, $iRowMax, $iRowOffset, $acceptLanguage, $sFilter): \eZmaxAPI\Model\PaymenttermGetListV1Response
```

Retrieve Paymentterm list

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectPaymenttermApi(
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
    $result = $apiInstance->paymenttermGetListV1($eOrderBy, $iRowMax, $iRowOffset, $acceptLanguage, $sFilter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectPaymenttermApi->paymenttermGetListV1: ', $e->getMessage(), PHP_EOL;
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

[**\eZmaxAPI\Model\PaymenttermGetListV1Response**](../Model/PaymenttermGetListV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/vnd.openxmlformats-officedocument.spreadsheetml.sheet`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `paymenttermGetObjectV2()`

```php
paymenttermGetObjectV2($pkiPaymenttermID): \eZmaxAPI\Model\PaymenttermGetObjectV2Response
```

Retrieve an existing Paymentterm



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectPaymenttermApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiPaymenttermID = 56; // int

try {
    $result = $apiInstance->paymenttermGetObjectV2($pkiPaymenttermID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectPaymenttermApi->paymenttermGetObjectV2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiPaymenttermID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\PaymenttermGetObjectV2Response**](../Model/PaymenttermGetObjectV2Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
