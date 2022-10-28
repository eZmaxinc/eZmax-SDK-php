# eZmaxAPI\ObjectEzsigntemplatesignerApi

All URIs are relative to https://prod.api.appcluster01.ca-central-1.ezmax.com/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**ezsigntemplatesignerCreateObjectV1()**](ObjectEzsigntemplatesignerApi.md#ezsigntemplatesignerCreateObjectV1) | **POST** /1/object/ezsigntemplatesigner | Create a new Ezsigntemplatesigner |
| [**ezsigntemplatesignerDeleteObjectV1()**](ObjectEzsigntemplatesignerApi.md#ezsigntemplatesignerDeleteObjectV1) | **DELETE** /1/object/ezsigntemplatesigner/{pkiEzsigntemplatesignerID} | Delete an existing Ezsigntemplatesigner |
| [**ezsigntemplatesignerEditObjectV1()**](ObjectEzsigntemplatesignerApi.md#ezsigntemplatesignerEditObjectV1) | **PUT** /1/object/ezsigntemplatesigner/{pkiEzsigntemplatesignerID} | Edit an existing Ezsigntemplatesigner |
| [**ezsigntemplatesignerGetObjectV1()**](ObjectEzsigntemplatesignerApi.md#ezsigntemplatesignerGetObjectV1) | **GET** /1/object/ezsigntemplatesigner/{pkiEzsigntemplatesignerID} | Retrieve an existing Ezsigntemplatesigner |
| [**ezsigntemplatesignerGetObjectV2()**](ObjectEzsigntemplatesignerApi.md#ezsigntemplatesignerGetObjectV2) | **GET** /2/object/ezsigntemplatesigner/{pkiEzsigntemplatesignerID} | Retrieve an existing Ezsigntemplatesigner |


## `ezsigntemplatesignerCreateObjectV1()`

```php
ezsigntemplatesignerCreateObjectV1($ezsigntemplatesignerCreateObjectV1Request): \eZmaxAPI\Model\EzsigntemplatesignerCreateObjectV1Response
```

Create a new Ezsigntemplatesigner

The endpoint allows to create one or many elements at once.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsigntemplatesignerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ezsigntemplatesignerCreateObjectV1Request = new \eZmaxAPI\Model\EzsigntemplatesignerCreateObjectV1Request(); // \eZmaxAPI\Model\EzsigntemplatesignerCreateObjectV1Request

try {
    $result = $apiInstance->ezsigntemplatesignerCreateObjectV1($ezsigntemplatesignerCreateObjectV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsigntemplatesignerApi->ezsigntemplatesignerCreateObjectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ezsigntemplatesignerCreateObjectV1Request** | [**\eZmaxAPI\Model\EzsigntemplatesignerCreateObjectV1Request**](../Model/EzsigntemplatesignerCreateObjectV1Request.md)|  | |

### Return type

[**\eZmaxAPI\Model\EzsigntemplatesignerCreateObjectV1Response**](../Model/EzsigntemplatesignerCreateObjectV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezsigntemplatesignerDeleteObjectV1()`

```php
ezsigntemplatesignerDeleteObjectV1($pkiEzsigntemplatesignerID): \eZmaxAPI\Model\EzsigntemplatesignerDeleteObjectV1Response
```

Delete an existing Ezsigntemplatesigner



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsigntemplatesignerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzsigntemplatesignerID = 56; // int

try {
    $result = $apiInstance->ezsigntemplatesignerDeleteObjectV1($pkiEzsigntemplatesignerID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsigntemplatesignerApi->ezsigntemplatesignerDeleteObjectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiEzsigntemplatesignerID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\EzsigntemplatesignerDeleteObjectV1Response**](../Model/EzsigntemplatesignerDeleteObjectV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezsigntemplatesignerEditObjectV1()`

```php
ezsigntemplatesignerEditObjectV1($pkiEzsigntemplatesignerID, $ezsigntemplatesignerEditObjectV1Request): \eZmaxAPI\Model\EzsigntemplatesignerEditObjectV1Response
```

Edit an existing Ezsigntemplatesigner



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsigntemplatesignerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzsigntemplatesignerID = 56; // int
$ezsigntemplatesignerEditObjectV1Request = new \eZmaxAPI\Model\EzsigntemplatesignerEditObjectV1Request(); // \eZmaxAPI\Model\EzsigntemplatesignerEditObjectV1Request

try {
    $result = $apiInstance->ezsigntemplatesignerEditObjectV1($pkiEzsigntemplatesignerID, $ezsigntemplatesignerEditObjectV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsigntemplatesignerApi->ezsigntemplatesignerEditObjectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiEzsigntemplatesignerID** | **int**|  | |
| **ezsigntemplatesignerEditObjectV1Request** | [**\eZmaxAPI\Model\EzsigntemplatesignerEditObjectV1Request**](../Model/EzsigntemplatesignerEditObjectV1Request.md)|  | |

### Return type

[**\eZmaxAPI\Model\EzsigntemplatesignerEditObjectV1Response**](../Model/EzsigntemplatesignerEditObjectV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezsigntemplatesignerGetObjectV1()`

```php
ezsigntemplatesignerGetObjectV1($pkiEzsigntemplatesignerID): \eZmaxAPI\Model\EzsigntemplatesignerGetObjectV1Response
```

Retrieve an existing Ezsigntemplatesigner



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsigntemplatesignerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzsigntemplatesignerID = 56; // int

try {
    $result = $apiInstance->ezsigntemplatesignerGetObjectV1($pkiEzsigntemplatesignerID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsigntemplatesignerApi->ezsigntemplatesignerGetObjectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiEzsigntemplatesignerID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\EzsigntemplatesignerGetObjectV1Response**](../Model/EzsigntemplatesignerGetObjectV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezsigntemplatesignerGetObjectV2()`

```php
ezsigntemplatesignerGetObjectV2($pkiEzsigntemplatesignerID): \eZmaxAPI\Model\EzsigntemplatesignerGetObjectV2Response
```

Retrieve an existing Ezsigntemplatesigner



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsigntemplatesignerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzsigntemplatesignerID = 56; // int

try {
    $result = $apiInstance->ezsigntemplatesignerGetObjectV2($pkiEzsigntemplatesignerID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsigntemplatesignerApi->ezsigntemplatesignerGetObjectV2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiEzsigntemplatesignerID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\EzsigntemplatesignerGetObjectV2Response**](../Model/EzsigntemplatesignerGetObjectV2Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
