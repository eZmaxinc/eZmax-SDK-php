# eZmaxAPI\ObjectEzsigntemplateannotationApi



All URIs are relative to https://prod.api.appcluster01.ca-central-1.ezmax.com/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**ezsigntemplateannotationCreateObjectV1()**](ObjectEzsigntemplateannotationApi.md#ezsigntemplateannotationCreateObjectV1) | **POST** /1/object/ezsigntemplateannotation | Create a new Ezsigntemplateannotation |
| [**ezsigntemplateannotationDeleteObjectV1()**](ObjectEzsigntemplateannotationApi.md#ezsigntemplateannotationDeleteObjectV1) | **DELETE** /1/object/ezsigntemplateannotation/{pkiEzsigntemplateannotationID} | Delete an existing Ezsigntemplateannotation |
| [**ezsigntemplateannotationEditObjectV1()**](ObjectEzsigntemplateannotationApi.md#ezsigntemplateannotationEditObjectV1) | **PUT** /1/object/ezsigntemplateannotation/{pkiEzsigntemplateannotationID} | Edit an existing Ezsigntemplateannotation |
| [**ezsigntemplateannotationGetObjectV2()**](ObjectEzsigntemplateannotationApi.md#ezsigntemplateannotationGetObjectV2) | **GET** /2/object/ezsigntemplateannotation/{pkiEzsigntemplateannotationID} | Retrieve an existing Ezsigntemplateannotation |


## `ezsigntemplateannotationCreateObjectV1()`

```php
ezsigntemplateannotationCreateObjectV1($ezsigntemplateannotationCreateObjectV1Request): \eZmaxAPI\Model\EzsigntemplateannotationCreateObjectV1Response
```

Create a new Ezsigntemplateannotation

The endpoint allows to create one or many elements at once.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsigntemplateannotationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ezsigntemplateannotationCreateObjectV1Request = new \eZmaxAPI\Model\EzsigntemplateannotationCreateObjectV1Request(); // \eZmaxAPI\Model\EzsigntemplateannotationCreateObjectV1Request

try {
    $result = $apiInstance->ezsigntemplateannotationCreateObjectV1($ezsigntemplateannotationCreateObjectV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsigntemplateannotationApi->ezsigntemplateannotationCreateObjectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ezsigntemplateannotationCreateObjectV1Request** | [**\eZmaxAPI\Model\EzsigntemplateannotationCreateObjectV1Request**](../Model/EzsigntemplateannotationCreateObjectV1Request.md)|  | |

### Return type

[**\eZmaxAPI\Model\EzsigntemplateannotationCreateObjectV1Response**](../Model/EzsigntemplateannotationCreateObjectV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezsigntemplateannotationDeleteObjectV1()`

```php
ezsigntemplateannotationDeleteObjectV1($pkiEzsigntemplateannotationID): \eZmaxAPI\Model\EzsigntemplateannotationDeleteObjectV1Response
```

Delete an existing Ezsigntemplateannotation



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsigntemplateannotationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzsigntemplateannotationID = 56; // int | The unique ID of the Ezsigntemplateannotation

try {
    $result = $apiInstance->ezsigntemplateannotationDeleteObjectV1($pkiEzsigntemplateannotationID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsigntemplateannotationApi->ezsigntemplateannotationDeleteObjectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiEzsigntemplateannotationID** | **int**| The unique ID of the Ezsigntemplateannotation | |

### Return type

[**\eZmaxAPI\Model\EzsigntemplateannotationDeleteObjectV1Response**](../Model/EzsigntemplateannotationDeleteObjectV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezsigntemplateannotationEditObjectV1()`

```php
ezsigntemplateannotationEditObjectV1($pkiEzsigntemplateannotationID, $ezsigntemplateannotationEditObjectV1Request): \eZmaxAPI\Model\EzsigntemplateannotationEditObjectV1Response
```

Edit an existing Ezsigntemplateannotation



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsigntemplateannotationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzsigntemplateannotationID = 56; // int | The unique ID of the Ezsigntemplateannotation
$ezsigntemplateannotationEditObjectV1Request = new \eZmaxAPI\Model\EzsigntemplateannotationEditObjectV1Request(); // \eZmaxAPI\Model\EzsigntemplateannotationEditObjectV1Request

try {
    $result = $apiInstance->ezsigntemplateannotationEditObjectV1($pkiEzsigntemplateannotationID, $ezsigntemplateannotationEditObjectV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsigntemplateannotationApi->ezsigntemplateannotationEditObjectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiEzsigntemplateannotationID** | **int**| The unique ID of the Ezsigntemplateannotation | |
| **ezsigntemplateannotationEditObjectV1Request** | [**\eZmaxAPI\Model\EzsigntemplateannotationEditObjectV1Request**](../Model/EzsigntemplateannotationEditObjectV1Request.md)|  | |

### Return type

[**\eZmaxAPI\Model\EzsigntemplateannotationEditObjectV1Response**](../Model/EzsigntemplateannotationEditObjectV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezsigntemplateannotationGetObjectV2()`

```php
ezsigntemplateannotationGetObjectV2($pkiEzsigntemplateannotationID): \eZmaxAPI\Model\EzsigntemplateannotationGetObjectV2Response
```

Retrieve an existing Ezsigntemplateannotation



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsigntemplateannotationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzsigntemplateannotationID = 56; // int | The unique ID of the Ezsigntemplateannotation

try {
    $result = $apiInstance->ezsigntemplateannotationGetObjectV2($pkiEzsigntemplateannotationID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsigntemplateannotationApi->ezsigntemplateannotationGetObjectV2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiEzsigntemplateannotationID** | **int**| The unique ID of the Ezsigntemplateannotation | |

### Return type

[**\eZmaxAPI\Model\EzsigntemplateannotationGetObjectV2Response**](../Model/EzsigntemplateannotationGetObjectV2Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
