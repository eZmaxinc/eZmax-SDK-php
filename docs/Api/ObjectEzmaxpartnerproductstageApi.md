# eZmaxAPI\ObjectEzmaxpartnerproductstageApi



All URIs are relative to https://prod.api.appcluster01.ca-central-1.ezmax.com/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**ezmaxpartnerproductstageGetEzmaxpartnerproductstagepermissionsV1()**](ObjectEzmaxpartnerproductstageApi.md#ezmaxpartnerproductstageGetEzmaxpartnerproductstagepermissionsV1) | **GET** /1/object/ezmaxpartnerproductstage/{pkiEzmaxpartnerproductstageID}/getEzmaxpartnerproductstagepermissions | Retrieve an existing Ezmaxpartnerproductstage&#39;s Ezmaxpartnerproductstagepermissions |
| [**ezmaxpartnerproductstageGetEzmaxpartnerproductstagewebhooksV1()**](ObjectEzmaxpartnerproductstageApi.md#ezmaxpartnerproductstageGetEzmaxpartnerproductstagewebhooksV1) | **GET** /1/object/ezmaxpartnerproductstage/{pkiEzmaxpartnerproductstageID}/getEzmaxpartnerproductstagewebhooks | Retrieve an existing Ezmaxpartnerproductstage&#39;s Ezmaxpartnerproductstagewebhooks |
| [**ezmaxpartnerproductstageGetListV1()**](ObjectEzmaxpartnerproductstageApi.md#ezmaxpartnerproductstageGetListV1) | **GET** /1/object/ezmaxpartnerproductstage/getList | Retrieve Ezmaxpartnerproductstage list |
| [**ezmaxpartnerproductstageGetObjectV2()**](ObjectEzmaxpartnerproductstageApi.md#ezmaxpartnerproductstageGetObjectV2) | **GET** /2/object/ezmaxpartnerproductstage/{pkiEzmaxpartnerproductstageID} | Retrieve an existing Ezmaxpartnerproductstage |
| [**ezmaxpartnerproductstageSubscribeV1()**](ObjectEzmaxpartnerproductstageApi.md#ezmaxpartnerproductstageSubscribeV1) | **POST** /1/object/ezmaxpartnerproductstage/{pkiEzmaxpartnerproductstageID}/subscribe | Subscribe to the Ezmaxpartnerproductstage |
| [**ezmaxpartnerproductstageUnsubscribeV1()**](ObjectEzmaxpartnerproductstageApi.md#ezmaxpartnerproductstageUnsubscribeV1) | **POST** /1/object/ezmaxpartnerproductstage/{pkiEzmaxpartnerproductstageID}/unsubscribe | Unsubscribe to the Ezmaxpartnerproductstage |


## `ezmaxpartnerproductstageGetEzmaxpartnerproductstagepermissionsV1()`

```php
ezmaxpartnerproductstageGetEzmaxpartnerproductstagepermissionsV1($pkiEzmaxpartnerproductstageID): \eZmaxAPI\Model\EzmaxpartnerproductstageGetEzmaxpartnerproductstagepermissionsV1Response
```

Retrieve an existing Ezmaxpartnerproductstage's Ezmaxpartnerproductstagepermissions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzmaxpartnerproductstageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzmaxpartnerproductstageID = 56; // int

try {
    $result = $apiInstance->ezmaxpartnerproductstageGetEzmaxpartnerproductstagepermissionsV1($pkiEzmaxpartnerproductstageID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzmaxpartnerproductstageApi->ezmaxpartnerproductstageGetEzmaxpartnerproductstagepermissionsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiEzmaxpartnerproductstageID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\EzmaxpartnerproductstageGetEzmaxpartnerproductstagepermissionsV1Response**](../Model/EzmaxpartnerproductstageGetEzmaxpartnerproductstagepermissionsV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezmaxpartnerproductstageGetEzmaxpartnerproductstagewebhooksV1()`

```php
ezmaxpartnerproductstageGetEzmaxpartnerproductstagewebhooksV1($pkiEzmaxpartnerproductstageID): \eZmaxAPI\Model\EzmaxpartnerproductstageGetEzmaxpartnerproductstagewebhooksV1Response
```

Retrieve an existing Ezmaxpartnerproductstage's Ezmaxpartnerproductstagewebhooks

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzmaxpartnerproductstageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzmaxpartnerproductstageID = 56; // int

try {
    $result = $apiInstance->ezmaxpartnerproductstageGetEzmaxpartnerproductstagewebhooksV1($pkiEzmaxpartnerproductstageID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzmaxpartnerproductstageApi->ezmaxpartnerproductstageGetEzmaxpartnerproductstagewebhooksV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiEzmaxpartnerproductstageID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\EzmaxpartnerproductstageGetEzmaxpartnerproductstagewebhooksV1Response**](../Model/EzmaxpartnerproductstageGetEzmaxpartnerproductstagewebhooksV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezmaxpartnerproductstageGetListV1()`

```php
ezmaxpartnerproductstageGetListV1($eOrderBy, $iRowMax, $iRowOffset, $acceptLanguage, $sFilter): \eZmaxAPI\Model\EzmaxpartnerproductstageGetListV1Response
```

Retrieve Ezmaxpartnerproductstage list



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzmaxpartnerproductstageApi(
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
    $result = $apiInstance->ezmaxpartnerproductstageGetListV1($eOrderBy, $iRowMax, $iRowOffset, $acceptLanguage, $sFilter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzmaxpartnerproductstageApi->ezmaxpartnerproductstageGetListV1: ', $e->getMessage(), PHP_EOL;
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

[**\eZmaxAPI\Model\EzmaxpartnerproductstageGetListV1Response**](../Model/EzmaxpartnerproductstageGetListV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/vnd.openxmlformats-officedocument.spreadsheetml.sheet`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezmaxpartnerproductstageGetObjectV2()`

```php
ezmaxpartnerproductstageGetObjectV2($pkiEzmaxpartnerproductstageID): \eZmaxAPI\Model\EzmaxpartnerproductstageGetObjectV2Response
```

Retrieve an existing Ezmaxpartnerproductstage



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzmaxpartnerproductstageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzmaxpartnerproductstageID = 56; // int | The unique ID of the Ezmaxpartnerproductstage

try {
    $result = $apiInstance->ezmaxpartnerproductstageGetObjectV2($pkiEzmaxpartnerproductstageID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzmaxpartnerproductstageApi->ezmaxpartnerproductstageGetObjectV2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiEzmaxpartnerproductstageID** | **int**| The unique ID of the Ezmaxpartnerproductstage | |

### Return type

[**\eZmaxAPI\Model\EzmaxpartnerproductstageGetObjectV2Response**](../Model/EzmaxpartnerproductstageGetObjectV2Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezmaxpartnerproductstageSubscribeV1()`

```php
ezmaxpartnerproductstageSubscribeV1($pkiEzmaxpartnerproductstageID, $body): \eZmaxAPI\Model\EzmaxpartnerproductstageSubscribeV1Response
```

Subscribe to the Ezmaxpartnerproductstage

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzmaxpartnerproductstageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzmaxpartnerproductstageID = 56; // int
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->ezmaxpartnerproductstageSubscribeV1($pkiEzmaxpartnerproductstageID, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzmaxpartnerproductstageApi->ezmaxpartnerproductstageSubscribeV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiEzmaxpartnerproductstageID** | **int**|  | |
| **body** | **object**|  | |

### Return type

[**\eZmaxAPI\Model\EzmaxpartnerproductstageSubscribeV1Response**](../Model/EzmaxpartnerproductstageSubscribeV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezmaxpartnerproductstageUnsubscribeV1()`

```php
ezmaxpartnerproductstageUnsubscribeV1($pkiEzmaxpartnerproductstageID, $body): \eZmaxAPI\Model\EzmaxpartnerproductstageUnsubscribeV1Response
```

Unsubscribe to the Ezmaxpartnerproductstage

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzmaxpartnerproductstageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzmaxpartnerproductstageID = 56; // int
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->ezmaxpartnerproductstageUnsubscribeV1($pkiEzmaxpartnerproductstageID, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzmaxpartnerproductstageApi->ezmaxpartnerproductstageUnsubscribeV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiEzmaxpartnerproductstageID** | **int**|  | |
| **body** | **object**|  | |

### Return type

[**\eZmaxAPI\Model\EzmaxpartnerproductstageUnsubscribeV1Response**](../Model/EzmaxpartnerproductstageUnsubscribeV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
