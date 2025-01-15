# eZmaxAPI\ObjectCreditcardclientApi

All URIs are relative to https://prod.api.appcluster01.ca-central-1.ezmax.com/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**creditcardclientCreateObjectV1()**](ObjectCreditcardclientApi.md#creditcardclientCreateObjectV1) | **POST** /1/object/creditcardclient | Create a new Creditcardclient |
| [**creditcardclientDeleteObjectV1()**](ObjectCreditcardclientApi.md#creditcardclientDeleteObjectV1) | **DELETE** /1/object/creditcardclient/{pkiCreditcardclientID} | Delete an existing Creditcardclient |
| [**creditcardclientEditObjectV1()**](ObjectCreditcardclientApi.md#creditcardclientEditObjectV1) | **PUT** /1/object/creditcardclient/{pkiCreditcardclientID} | Edit an existing Creditcardclient |
| [**creditcardclientGetAutocompleteV2()**](ObjectCreditcardclientApi.md#creditcardclientGetAutocompleteV2) | **GET** /2/object/creditcardclient/getAutocomplete/{sSelector} | Retrieve Creditcardclients and IDs |
| [**creditcardclientGetListV1()**](ObjectCreditcardclientApi.md#creditcardclientGetListV1) | **GET** /1/object/creditcardclient/getList | Retrieve Creditcardclient list |
| [**creditcardclientGetObjectV2()**](ObjectCreditcardclientApi.md#creditcardclientGetObjectV2) | **GET** /2/object/creditcardclient/{pkiCreditcardclientID} | Retrieve an existing Creditcardclient |
| [**creditcardclientPatchObjectV1()**](ObjectCreditcardclientApi.md#creditcardclientPatchObjectV1) | **PATCH** /1/object/creditcardclient/{pkiCreditcardclientID} | Patch an existing Creditcardclient |


## `creditcardclientCreateObjectV1()`

```php
creditcardclientCreateObjectV1($creditcardclientCreateObjectV1Request): \eZmaxAPI\Model\CreditcardclientCreateObjectV1Response
```

Create a new Creditcardclient

The endpoint allows to create one or many elements at once.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectCreditcardclientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$creditcardclientCreateObjectV1Request = new \eZmaxAPI\Model\CreditcardclientCreateObjectV1Request(); // \eZmaxAPI\Model\CreditcardclientCreateObjectV1Request

try {
    $result = $apiInstance->creditcardclientCreateObjectV1($creditcardclientCreateObjectV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectCreditcardclientApi->creditcardclientCreateObjectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **creditcardclientCreateObjectV1Request** | [**\eZmaxAPI\Model\CreditcardclientCreateObjectV1Request**](../Model/CreditcardclientCreateObjectV1Request.md)|  | |

### Return type

[**\eZmaxAPI\Model\CreditcardclientCreateObjectV1Response**](../Model/CreditcardclientCreateObjectV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `creditcardclientDeleteObjectV1()`

```php
creditcardclientDeleteObjectV1($pkiCreditcardclientID): \eZmaxAPI\Model\CommonResponse
```

Delete an existing Creditcardclient



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectCreditcardclientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiCreditcardclientID = 56; // int | The unique ID of the Creditcardclient

try {
    $result = $apiInstance->creditcardclientDeleteObjectV1($pkiCreditcardclientID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectCreditcardclientApi->creditcardclientDeleteObjectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiCreditcardclientID** | **int**| The unique ID of the Creditcardclient | |

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

## `creditcardclientEditObjectV1()`

```php
creditcardclientEditObjectV1($pkiCreditcardclientID, $creditcardclientEditObjectV1Request): \eZmaxAPI\Model\CommonResponse
```

Edit an existing Creditcardclient



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectCreditcardclientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiCreditcardclientID = 56; // int | The unique ID of the Creditcardclient
$creditcardclientEditObjectV1Request = new \eZmaxAPI\Model\CreditcardclientEditObjectV1Request(); // \eZmaxAPI\Model\CreditcardclientEditObjectV1Request

try {
    $result = $apiInstance->creditcardclientEditObjectV1($pkiCreditcardclientID, $creditcardclientEditObjectV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectCreditcardclientApi->creditcardclientEditObjectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiCreditcardclientID** | **int**| The unique ID of the Creditcardclient | |
| **creditcardclientEditObjectV1Request** | [**\eZmaxAPI\Model\CreditcardclientEditObjectV1Request**](../Model/CreditcardclientEditObjectV1Request.md)|  | |

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

## `creditcardclientGetAutocompleteV2()`

```php
creditcardclientGetAutocompleteV2($sSelector, $eFilterActive, $sQuery, $acceptLanguage): \eZmaxAPI\Model\CreditcardclientGetAutocompleteV2Response
```

Retrieve Creditcardclients and IDs

Get the list of Creditcardclient to be used in a dropdown or autocomplete control.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectCreditcardclientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sSelector = 'sSelector_example'; // string | The type of Creditcardclients to return
$eFilterActive = 'Active'; // string | Specify which results we want to display.
$sQuery = 'sQuery_example'; // string | Allow to filter the returned results
$acceptLanguage = new \eZmaxAPI\Model\\eZmaxAPI\Model\HeaderAcceptLanguage(); // \eZmaxAPI\Model\HeaderAcceptLanguage

try {
    $result = $apiInstance->creditcardclientGetAutocompleteV2($sSelector, $eFilterActive, $sQuery, $acceptLanguage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectCreditcardclientApi->creditcardclientGetAutocompleteV2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sSelector** | **string**| The type of Creditcardclients to return | |
| **eFilterActive** | **string**| Specify which results we want to display. | [optional] [default to &#39;Active&#39;] |
| **sQuery** | **string**| Allow to filter the returned results | [optional] |
| **acceptLanguage** | [**\eZmaxAPI\Model\HeaderAcceptLanguage**](../Model/.md)|  | [optional] |

### Return type

[**\eZmaxAPI\Model\CreditcardclientGetAutocompleteV2Response**](../Model/CreditcardclientGetAutocompleteV2Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `creditcardclientGetListV1()`

```php
creditcardclientGetListV1($eOrderBy, $iRowMax, $iRowOffset, $acceptLanguage, $sFilter): \eZmaxAPI\Model\CreditcardclientGetListV1Response
```

Retrieve Creditcardclient list



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectCreditcardclientApi(
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
    $result = $apiInstance->creditcardclientGetListV1($eOrderBy, $iRowMax, $iRowOffset, $acceptLanguage, $sFilter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectCreditcardclientApi->creditcardclientGetListV1: ', $e->getMessage(), PHP_EOL;
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

[**\eZmaxAPI\Model\CreditcardclientGetListV1Response**](../Model/CreditcardclientGetListV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/vnd.openxmlformats-officedocument.spreadsheetml.sheet`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `creditcardclientGetObjectV2()`

```php
creditcardclientGetObjectV2($pkiCreditcardclientID): \eZmaxAPI\Model\CreditcardclientGetObjectV2Response
```

Retrieve an existing Creditcardclient



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectCreditcardclientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiCreditcardclientID = 56; // int | The unique ID of the Creditcardclient

try {
    $result = $apiInstance->creditcardclientGetObjectV2($pkiCreditcardclientID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectCreditcardclientApi->creditcardclientGetObjectV2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiCreditcardclientID** | **int**| The unique ID of the Creditcardclient | |

### Return type

[**\eZmaxAPI\Model\CreditcardclientGetObjectV2Response**](../Model/CreditcardclientGetObjectV2Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `creditcardclientPatchObjectV1()`

```php
creditcardclientPatchObjectV1($pkiCreditcardclientID, $creditcardclientPatchObjectV1Request): \eZmaxAPI\Model\CommonResponse
```

Patch an existing Creditcardclient



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectCreditcardclientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiCreditcardclientID = 56; // int | The unique ID of the Creditcardclient
$creditcardclientPatchObjectV1Request = new \eZmaxAPI\Model\CreditcardclientPatchObjectV1Request(); // \eZmaxAPI\Model\CreditcardclientPatchObjectV1Request

try {
    $result = $apiInstance->creditcardclientPatchObjectV1($pkiCreditcardclientID, $creditcardclientPatchObjectV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectCreditcardclientApi->creditcardclientPatchObjectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiCreditcardclientID** | **int**| The unique ID of the Creditcardclient | |
| **creditcardclientPatchObjectV1Request** | [**\eZmaxAPI\Model\CreditcardclientPatchObjectV1Request**](../Model/CreditcardclientPatchObjectV1Request.md)|  | |

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
