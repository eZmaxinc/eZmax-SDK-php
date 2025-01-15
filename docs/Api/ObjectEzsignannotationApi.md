# eZmaxAPI\ObjectEzsignannotationApi

All URIs are relative to https://prod.api.appcluster01.ca-central-1.ezmax.com/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**ezsignannotationCreateObjectV1()**](ObjectEzsignannotationApi.md#ezsignannotationCreateObjectV1) | **POST** /1/object/ezsignannotation | Create a new Ezsignannotation |
| [**ezsignannotationDeleteObjectV1()**](ObjectEzsignannotationApi.md#ezsignannotationDeleteObjectV1) | **DELETE** /1/object/ezsignannotation/{pkiEzsignannotationID} | Delete an existing Ezsignannotation |
| [**ezsignannotationEditObjectV1()**](ObjectEzsignannotationApi.md#ezsignannotationEditObjectV1) | **PUT** /1/object/ezsignannotation/{pkiEzsignannotationID} | Edit an existing Ezsignannotation |
| [**ezsignannotationGetObjectV2()**](ObjectEzsignannotationApi.md#ezsignannotationGetObjectV2) | **GET** /2/object/ezsignannotation/{pkiEzsignannotationID} | Retrieve an existing Ezsignannotation |


## `ezsignannotationCreateObjectV1()`

```php
ezsignannotationCreateObjectV1($ezsignannotationCreateObjectV1Request): \eZmaxAPI\Model\EzsignannotationCreateObjectV1Response
```

Create a new Ezsignannotation

The endpoint allows to create one or many elements at once.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsignannotationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ezsignannotationCreateObjectV1Request = new \eZmaxAPI\Model\EzsignannotationCreateObjectV1Request(); // \eZmaxAPI\Model\EzsignannotationCreateObjectV1Request

try {
    $result = $apiInstance->ezsignannotationCreateObjectV1($ezsignannotationCreateObjectV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsignannotationApi->ezsignannotationCreateObjectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ezsignannotationCreateObjectV1Request** | [**\eZmaxAPI\Model\EzsignannotationCreateObjectV1Request**](../Model/EzsignannotationCreateObjectV1Request.md)|  | |

### Return type

[**\eZmaxAPI\Model\EzsignannotationCreateObjectV1Response**](../Model/EzsignannotationCreateObjectV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezsignannotationDeleteObjectV1()`

```php
ezsignannotationDeleteObjectV1($pkiEzsignannotationID): \eZmaxAPI\Model\CommonResponse
```

Delete an existing Ezsignannotation



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsignannotationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzsignannotationID = 56; // int

try {
    $result = $apiInstance->ezsignannotationDeleteObjectV1($pkiEzsignannotationID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsignannotationApi->ezsignannotationDeleteObjectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiEzsignannotationID** | **int**|  | |

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

## `ezsignannotationEditObjectV1()`

```php
ezsignannotationEditObjectV1($pkiEzsignannotationID, $ezsignannotationEditObjectV1Request): \eZmaxAPI\Model\CommonResponse
```

Edit an existing Ezsignannotation



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsignannotationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzsignannotationID = 56; // int
$ezsignannotationEditObjectV1Request = new \eZmaxAPI\Model\EzsignannotationEditObjectV1Request(); // \eZmaxAPI\Model\EzsignannotationEditObjectV1Request

try {
    $result = $apiInstance->ezsignannotationEditObjectV1($pkiEzsignannotationID, $ezsignannotationEditObjectV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsignannotationApi->ezsignannotationEditObjectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiEzsignannotationID** | **int**|  | |
| **ezsignannotationEditObjectV1Request** | [**\eZmaxAPI\Model\EzsignannotationEditObjectV1Request**](../Model/EzsignannotationEditObjectV1Request.md)|  | |

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

## `ezsignannotationGetObjectV2()`

```php
ezsignannotationGetObjectV2($pkiEzsignannotationID): \eZmaxAPI\Model\EzsignannotationGetObjectV2Response
```

Retrieve an existing Ezsignannotation



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsignannotationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzsignannotationID = 56; // int

try {
    $result = $apiInstance->ezsignannotationGetObjectV2($pkiEzsignannotationID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsignannotationApi->ezsignannotationGetObjectV2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiEzsignannotationID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\EzsignannotationGetObjectV2Response**](../Model/EzsignannotationGetObjectV2Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
