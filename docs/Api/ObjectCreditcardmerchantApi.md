# eZmaxAPI\ObjectCreditcardmerchantApi

All URIs are relative to https://prod.api.appcluster01.ca-central-1.ezmax.com/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**creditcardmerchantCreateObjectV1()**](ObjectCreditcardmerchantApi.md#creditcardmerchantCreateObjectV1) | **POST** /1/object/creditcardmerchant | Create a new Creditcardmerchant |
| [**creditcardmerchantDeleteObjectV1()**](ObjectCreditcardmerchantApi.md#creditcardmerchantDeleteObjectV1) | **DELETE** /1/object/creditcardmerchant/{pkiCreditcardmerchantID} | Delete an existing Creditcardmerchant |
| [**creditcardmerchantEditObjectV1()**](ObjectCreditcardmerchantApi.md#creditcardmerchantEditObjectV1) | **PUT** /1/object/creditcardmerchant/{pkiCreditcardmerchantID} | Edit an existing Creditcardmerchant |
| [**creditcardmerchantGetAutocompleteV2()**](ObjectCreditcardmerchantApi.md#creditcardmerchantGetAutocompleteV2) | **GET** /2/object/creditcardmerchant/getAutocomplete/{sSelector} | Retrieve Creditcardmerchants and IDs |
| [**creditcardmerchantGetListV1()**](ObjectCreditcardmerchantApi.md#creditcardmerchantGetListV1) | **GET** /1/object/creditcardmerchant/getList | Retrieve Creditcardmerchant list |
| [**creditcardmerchantGetObjectV2()**](ObjectCreditcardmerchantApi.md#creditcardmerchantGetObjectV2) | **GET** /2/object/creditcardmerchant/{pkiCreditcardmerchantID} | Retrieve an existing Creditcardmerchant |


## `creditcardmerchantCreateObjectV1()`

```php
creditcardmerchantCreateObjectV1($creditcardmerchantCreateObjectV1Request): \eZmaxAPI\Model\CreditcardmerchantCreateObjectV1Response
```

Create a new Creditcardmerchant

The endpoint allows to create one or many elements at once.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectCreditcardmerchantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$creditcardmerchantCreateObjectV1Request = new \eZmaxAPI\Model\CreditcardmerchantCreateObjectV1Request(); // \eZmaxAPI\Model\CreditcardmerchantCreateObjectV1Request

try {
    $result = $apiInstance->creditcardmerchantCreateObjectV1($creditcardmerchantCreateObjectV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectCreditcardmerchantApi->creditcardmerchantCreateObjectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **creditcardmerchantCreateObjectV1Request** | [**\eZmaxAPI\Model\CreditcardmerchantCreateObjectV1Request**](../Model/CreditcardmerchantCreateObjectV1Request.md)|  | |

### Return type

[**\eZmaxAPI\Model\CreditcardmerchantCreateObjectV1Response**](../Model/CreditcardmerchantCreateObjectV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `creditcardmerchantDeleteObjectV1()`

```php
creditcardmerchantDeleteObjectV1($pkiCreditcardmerchantID): \eZmaxAPI\Model\CreditcardmerchantDeleteObjectV1Response
```

Delete an existing Creditcardmerchant



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectCreditcardmerchantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiCreditcardmerchantID = 56; // int | The unique ID of the Creditcardmerchant

try {
    $result = $apiInstance->creditcardmerchantDeleteObjectV1($pkiCreditcardmerchantID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectCreditcardmerchantApi->creditcardmerchantDeleteObjectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiCreditcardmerchantID** | **int**| The unique ID of the Creditcardmerchant | |

### Return type

[**\eZmaxAPI\Model\CreditcardmerchantDeleteObjectV1Response**](../Model/CreditcardmerchantDeleteObjectV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `creditcardmerchantEditObjectV1()`

```php
creditcardmerchantEditObjectV1($pkiCreditcardmerchantID, $creditcardmerchantEditObjectV1Request): \eZmaxAPI\Model\CreditcardmerchantEditObjectV1Response
```

Edit an existing Creditcardmerchant



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectCreditcardmerchantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiCreditcardmerchantID = 56; // int | The unique ID of the Creditcardmerchant
$creditcardmerchantEditObjectV1Request = new \eZmaxAPI\Model\CreditcardmerchantEditObjectV1Request(); // \eZmaxAPI\Model\CreditcardmerchantEditObjectV1Request

try {
    $result = $apiInstance->creditcardmerchantEditObjectV1($pkiCreditcardmerchantID, $creditcardmerchantEditObjectV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectCreditcardmerchantApi->creditcardmerchantEditObjectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiCreditcardmerchantID** | **int**| The unique ID of the Creditcardmerchant | |
| **creditcardmerchantEditObjectV1Request** | [**\eZmaxAPI\Model\CreditcardmerchantEditObjectV1Request**](../Model/CreditcardmerchantEditObjectV1Request.md)|  | |

### Return type

[**\eZmaxAPI\Model\CreditcardmerchantEditObjectV1Response**](../Model/CreditcardmerchantEditObjectV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `creditcardmerchantGetAutocompleteV2()`

```php
creditcardmerchantGetAutocompleteV2($sSelector, $eFilterActive, $sQuery, $acceptLanguage): \eZmaxAPI\Model\CreditcardmerchantGetAutocompleteV2Response
```

Retrieve Creditcardmerchants and IDs

Get the list of Creditcardmerchant to be used in a dropdown or autocomplete control.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectCreditcardmerchantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sSelector = 'sSelector_example'; // string | The type of Creditcardmerchants to return
$eFilterActive = 'Active'; // string | Specify which results we want to display.
$sQuery = 'sQuery_example'; // string | Allow to filter the returned results
$acceptLanguage = new \eZmaxAPI\Model\\eZmaxAPI\Model\HeaderAcceptLanguage(); // \eZmaxAPI\Model\HeaderAcceptLanguage

try {
    $result = $apiInstance->creditcardmerchantGetAutocompleteV2($sSelector, $eFilterActive, $sQuery, $acceptLanguage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectCreditcardmerchantApi->creditcardmerchantGetAutocompleteV2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sSelector** | **string**| The type of Creditcardmerchants to return | |
| **eFilterActive** | **string**| Specify which results we want to display. | [optional] [default to &#39;Active&#39;] |
| **sQuery** | **string**| Allow to filter the returned results | [optional] |
| **acceptLanguage** | [**\eZmaxAPI\Model\HeaderAcceptLanguage**](../Model/.md)|  | [optional] |

### Return type

[**\eZmaxAPI\Model\CreditcardmerchantGetAutocompleteV2Response**](../Model/CreditcardmerchantGetAutocompleteV2Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `creditcardmerchantGetListV1()`

```php
creditcardmerchantGetListV1($eOrderBy, $iRowMax, $iRowOffset, $acceptLanguage, $sFilter): \eZmaxAPI\Model\CreditcardmerchantGetListV1Response
```

Retrieve Creditcardmerchant list



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectCreditcardmerchantApi(
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
    $result = $apiInstance->creditcardmerchantGetListV1($eOrderBy, $iRowMax, $iRowOffset, $acceptLanguage, $sFilter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectCreditcardmerchantApi->creditcardmerchantGetListV1: ', $e->getMessage(), PHP_EOL;
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

[**\eZmaxAPI\Model\CreditcardmerchantGetListV1Response**](../Model/CreditcardmerchantGetListV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/vnd.openxmlformats-officedocument.spreadsheetml.sheet`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `creditcardmerchantGetObjectV2()`

```php
creditcardmerchantGetObjectV2($pkiCreditcardmerchantID): \eZmaxAPI\Model\CreditcardmerchantGetObjectV2Response
```

Retrieve an existing Creditcardmerchant



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectCreditcardmerchantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiCreditcardmerchantID = 56; // int | The unique ID of the Creditcardmerchant

try {
    $result = $apiInstance->creditcardmerchantGetObjectV2($pkiCreditcardmerchantID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectCreditcardmerchantApi->creditcardmerchantGetObjectV2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiCreditcardmerchantID** | **int**| The unique ID of the Creditcardmerchant | |

### Return type

[**\eZmaxAPI\Model\CreditcardmerchantGetObjectV2Response**](../Model/CreditcardmerchantGetObjectV2Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
