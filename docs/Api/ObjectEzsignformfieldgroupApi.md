# eZmaxAPI\ObjectEzsignformfieldgroupApi

All URIs are relative to https://prod.api.appcluster01.ca-central-1.ezmax.com/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**ezsignformfieldgroupCreateObjectV1()**](ObjectEzsignformfieldgroupApi.md#ezsignformfieldgroupCreateObjectV1) | **POST** /1/object/ezsignformfieldgroup | Create a new Ezsignformfieldgroup |
| [**ezsignformfieldgroupDeleteObjectV1()**](ObjectEzsignformfieldgroupApi.md#ezsignformfieldgroupDeleteObjectV1) | **DELETE** /1/object/ezsignformfieldgroup/{pkiEzsignformfieldgroupID} | Delete an existing Ezsignformfieldgroup |
| [**ezsignformfieldgroupEditObjectV1()**](ObjectEzsignformfieldgroupApi.md#ezsignformfieldgroupEditObjectV1) | **PUT** /1/object/ezsignformfieldgroup/{pkiEzsignformfieldgroupID} | Edit an existing Ezsignformfieldgroup |
| [**ezsignformfieldgroupGetObjectV1()**](ObjectEzsignformfieldgroupApi.md#ezsignformfieldgroupGetObjectV1) | **GET** /1/object/ezsignformfieldgroup/{pkiEzsignformfieldgroupID} | Retrieve an existing Ezsignformfieldgroup |
| [**ezsignformfieldgroupGetObjectV2()**](ObjectEzsignformfieldgroupApi.md#ezsignformfieldgroupGetObjectV2) | **GET** /2/object/ezsignformfieldgroup/{pkiEzsignformfieldgroupID} | Retrieve an existing Ezsignformfieldgroup |


## `ezsignformfieldgroupCreateObjectV1()`

```php
ezsignformfieldgroupCreateObjectV1($ezsignformfieldgroupCreateObjectV1Request): \eZmaxAPI\Model\EzsignformfieldgroupCreateObjectV1Response
```

Create a new Ezsignformfieldgroup

The endpoint allows to create one or many elements at once.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsignformfieldgroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ezsignformfieldgroupCreateObjectV1Request = new \eZmaxAPI\Model\EzsignformfieldgroupCreateObjectV1Request(); // \eZmaxAPI\Model\EzsignformfieldgroupCreateObjectV1Request

try {
    $result = $apiInstance->ezsignformfieldgroupCreateObjectV1($ezsignformfieldgroupCreateObjectV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsignformfieldgroupApi->ezsignformfieldgroupCreateObjectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ezsignformfieldgroupCreateObjectV1Request** | [**\eZmaxAPI\Model\EzsignformfieldgroupCreateObjectV1Request**](../Model/EzsignformfieldgroupCreateObjectV1Request.md)|  | |

### Return type

[**\eZmaxAPI\Model\EzsignformfieldgroupCreateObjectV1Response**](../Model/EzsignformfieldgroupCreateObjectV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezsignformfieldgroupDeleteObjectV1()`

```php
ezsignformfieldgroupDeleteObjectV1($pkiEzsignformfieldgroupID): \eZmaxAPI\Model\EzsignformfieldgroupDeleteObjectV1Response
```

Delete an existing Ezsignformfieldgroup



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsignformfieldgroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzsignformfieldgroupID = 56; // int

try {
    $result = $apiInstance->ezsignformfieldgroupDeleteObjectV1($pkiEzsignformfieldgroupID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsignformfieldgroupApi->ezsignformfieldgroupDeleteObjectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiEzsignformfieldgroupID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\EzsignformfieldgroupDeleteObjectV1Response**](../Model/EzsignformfieldgroupDeleteObjectV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezsignformfieldgroupEditObjectV1()`

```php
ezsignformfieldgroupEditObjectV1($pkiEzsignformfieldgroupID, $ezsignformfieldgroupEditObjectV1Request): \eZmaxAPI\Model\EzsignformfieldgroupEditObjectV1Response
```

Edit an existing Ezsignformfieldgroup



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsignformfieldgroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzsignformfieldgroupID = 56; // int
$ezsignformfieldgroupEditObjectV1Request = new \eZmaxAPI\Model\EzsignformfieldgroupEditObjectV1Request(); // \eZmaxAPI\Model\EzsignformfieldgroupEditObjectV1Request

try {
    $result = $apiInstance->ezsignformfieldgroupEditObjectV1($pkiEzsignformfieldgroupID, $ezsignformfieldgroupEditObjectV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsignformfieldgroupApi->ezsignformfieldgroupEditObjectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiEzsignformfieldgroupID** | **int**|  | |
| **ezsignformfieldgroupEditObjectV1Request** | [**\eZmaxAPI\Model\EzsignformfieldgroupEditObjectV1Request**](../Model/EzsignformfieldgroupEditObjectV1Request.md)|  | |

### Return type

[**\eZmaxAPI\Model\EzsignformfieldgroupEditObjectV1Response**](../Model/EzsignformfieldgroupEditObjectV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezsignformfieldgroupGetObjectV1()`

```php
ezsignformfieldgroupGetObjectV1($pkiEzsignformfieldgroupID): \eZmaxAPI\Model\EzsignformfieldgroupGetObjectV1Response
```

Retrieve an existing Ezsignformfieldgroup

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsignformfieldgroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzsignformfieldgroupID = 56; // int

try {
    $result = $apiInstance->ezsignformfieldgroupGetObjectV1($pkiEzsignformfieldgroupID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsignformfieldgroupApi->ezsignformfieldgroupGetObjectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiEzsignformfieldgroupID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\EzsignformfieldgroupGetObjectV1Response**](../Model/EzsignformfieldgroupGetObjectV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezsignformfieldgroupGetObjectV2()`

```php
ezsignformfieldgroupGetObjectV2($pkiEzsignformfieldgroupID): \eZmaxAPI\Model\EzsignformfieldgroupGetObjectV2Response
```

Retrieve an existing Ezsignformfieldgroup



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsignformfieldgroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzsignformfieldgroupID = 56; // int

try {
    $result = $apiInstance->ezsignformfieldgroupGetObjectV2($pkiEzsignformfieldgroupID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsignformfieldgroupApi->ezsignformfieldgroupGetObjectV2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiEzsignformfieldgroupID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\EzsignformfieldgroupGetObjectV2Response**](../Model/EzsignformfieldgroupGetObjectV2Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
