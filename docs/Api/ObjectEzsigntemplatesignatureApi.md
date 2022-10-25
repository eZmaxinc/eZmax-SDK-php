# eZmaxAPI\ObjectEzsigntemplatesignatureApi

All URIs are relative to https://prod.api.appcluster01.ca-central-1.ezmax.com/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**ezsigntemplatesignatureCreateObjectV1()**](ObjectEzsigntemplatesignatureApi.md#ezsigntemplatesignatureCreateObjectV1) | **POST** /1/object/ezsigntemplatesignature | Create a new Ezsigntemplatesignature |
| [**ezsigntemplatesignatureDeleteObjectV1()**](ObjectEzsigntemplatesignatureApi.md#ezsigntemplatesignatureDeleteObjectV1) | **DELETE** /1/object/ezsigntemplatesignature/{pkiEzsigntemplatesignatureID} | Delete an existing Ezsigntemplatesignature |
| [**ezsigntemplatesignatureEditObjectV1()**](ObjectEzsigntemplatesignatureApi.md#ezsigntemplatesignatureEditObjectV1) | **PUT** /1/object/ezsigntemplatesignature/{pkiEzsigntemplatesignatureID} | Edit an existing Ezsigntemplatesignature |
| [**ezsigntemplatesignatureGetObjectV1()**](ObjectEzsigntemplatesignatureApi.md#ezsigntemplatesignatureGetObjectV1) | **GET** /1/object/ezsigntemplatesignature/{pkiEzsigntemplatesignatureID} | Retrieve an existing Ezsigntemplatesignature |


## `ezsigntemplatesignatureCreateObjectV1()`

```php
ezsigntemplatesignatureCreateObjectV1($ezsigntemplatesignatureCreateObjectV1Request): \eZmaxAPI\Model\EzsigntemplatesignatureCreateObjectV1Response
```

Create a new Ezsigntemplatesignature

The endpoint allows to create one or many elements at once.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsigntemplatesignatureApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ezsigntemplatesignatureCreateObjectV1Request = new \eZmaxAPI\Model\EzsigntemplatesignatureCreateObjectV1Request(); // \eZmaxAPI\Model\EzsigntemplatesignatureCreateObjectV1Request

try {
    $result = $apiInstance->ezsigntemplatesignatureCreateObjectV1($ezsigntemplatesignatureCreateObjectV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsigntemplatesignatureApi->ezsigntemplatesignatureCreateObjectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ezsigntemplatesignatureCreateObjectV1Request** | [**\eZmaxAPI\Model\EzsigntemplatesignatureCreateObjectV1Request**](../Model/EzsigntemplatesignatureCreateObjectV1Request.md)|  | |

### Return type

[**\eZmaxAPI\Model\EzsigntemplatesignatureCreateObjectV1Response**](../Model/EzsigntemplatesignatureCreateObjectV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezsigntemplatesignatureDeleteObjectV1()`

```php
ezsigntemplatesignatureDeleteObjectV1($pkiEzsigntemplatesignatureID): \eZmaxAPI\Model\EzsigntemplatesignatureDeleteObjectV1Response
```

Delete an existing Ezsigntemplatesignature



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsigntemplatesignatureApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzsigntemplatesignatureID = 56; // int

try {
    $result = $apiInstance->ezsigntemplatesignatureDeleteObjectV1($pkiEzsigntemplatesignatureID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsigntemplatesignatureApi->ezsigntemplatesignatureDeleteObjectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiEzsigntemplatesignatureID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\EzsigntemplatesignatureDeleteObjectV1Response**](../Model/EzsigntemplatesignatureDeleteObjectV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezsigntemplatesignatureEditObjectV1()`

```php
ezsigntemplatesignatureEditObjectV1($pkiEzsigntemplatesignatureID, $ezsigntemplatesignatureEditObjectV1Request): \eZmaxAPI\Model\EzsigntemplatesignatureEditObjectV1Response
```

Edit an existing Ezsigntemplatesignature



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsigntemplatesignatureApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzsigntemplatesignatureID = 56; // int
$ezsigntemplatesignatureEditObjectV1Request = new \eZmaxAPI\Model\EzsigntemplatesignatureEditObjectV1Request(); // \eZmaxAPI\Model\EzsigntemplatesignatureEditObjectV1Request

try {
    $result = $apiInstance->ezsigntemplatesignatureEditObjectV1($pkiEzsigntemplatesignatureID, $ezsigntemplatesignatureEditObjectV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsigntemplatesignatureApi->ezsigntemplatesignatureEditObjectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiEzsigntemplatesignatureID** | **int**|  | |
| **ezsigntemplatesignatureEditObjectV1Request** | [**\eZmaxAPI\Model\EzsigntemplatesignatureEditObjectV1Request**](../Model/EzsigntemplatesignatureEditObjectV1Request.md)|  | |

### Return type

[**\eZmaxAPI\Model\EzsigntemplatesignatureEditObjectV1Response**](../Model/EzsigntemplatesignatureEditObjectV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezsigntemplatesignatureGetObjectV1()`

```php
ezsigntemplatesignatureGetObjectV1($pkiEzsigntemplatesignatureID): \eZmaxAPI\Model\EzsigntemplatesignatureGetObjectV1Response
```

Retrieve an existing Ezsigntemplatesignature



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsigntemplatesignatureApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzsigntemplatesignatureID = 56; // int

try {
    $result = $apiInstance->ezsigntemplatesignatureGetObjectV1($pkiEzsigntemplatesignatureID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsigntemplatesignatureApi->ezsigntemplatesignatureGetObjectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiEzsigntemplatesignatureID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\EzsigntemplatesignatureGetObjectV1Response**](../Model/EzsigntemplatesignatureGetObjectV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
