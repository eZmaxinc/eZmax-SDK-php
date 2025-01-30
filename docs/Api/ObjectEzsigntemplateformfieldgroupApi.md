# eZmaxAPI\ObjectEzsigntemplateformfieldgroupApi

All URIs are relative to https://prod.api.appcluster01.ca-central-1.ezmax.com/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**ezsigntemplateformfieldgroupCreateObjectV1()**](ObjectEzsigntemplateformfieldgroupApi.md#ezsigntemplateformfieldgroupCreateObjectV1) | **POST** /1/object/ezsigntemplateformfieldgroup | Create a new Ezsigntemplateformfieldgroup |
| [**ezsigntemplateformfieldgroupDeleteObjectV1()**](ObjectEzsigntemplateformfieldgroupApi.md#ezsigntemplateformfieldgroupDeleteObjectV1) | **DELETE** /1/object/ezsigntemplateformfieldgroup/{pkiEzsigntemplateformfieldgroupID} | Delete an existing Ezsigntemplateformfieldgroup |
| [**ezsigntemplateformfieldgroupEditObjectV1()**](ObjectEzsigntemplateformfieldgroupApi.md#ezsigntemplateformfieldgroupEditObjectV1) | **PUT** /1/object/ezsigntemplateformfieldgroup/{pkiEzsigntemplateformfieldgroupID} | Edit an existing Ezsigntemplateformfieldgroup |
| [**ezsigntemplateformfieldgroupGetObjectV2()**](ObjectEzsigntemplateformfieldgroupApi.md#ezsigntemplateformfieldgroupGetObjectV2) | **GET** /2/object/ezsigntemplateformfieldgroup/{pkiEzsigntemplateformfieldgroupID} | Retrieve an existing Ezsigntemplateformfieldgroup |


## `ezsigntemplateformfieldgroupCreateObjectV1()`

```php
ezsigntemplateformfieldgroupCreateObjectV1($ezsigntemplateformfieldgroupCreateObjectV1Request): \eZmaxAPI\Model\EzsigntemplateformfieldgroupCreateObjectV1Response
```

Create a new Ezsigntemplateformfieldgroup

The endpoint allows to create one or many elements at once.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsigntemplateformfieldgroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ezsigntemplateformfieldgroupCreateObjectV1Request = new \eZmaxAPI\Model\EzsigntemplateformfieldgroupCreateObjectV1Request(); // \eZmaxAPI\Model\EzsigntemplateformfieldgroupCreateObjectV1Request

try {
    $result = $apiInstance->ezsigntemplateformfieldgroupCreateObjectV1($ezsigntemplateformfieldgroupCreateObjectV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsigntemplateformfieldgroupApi->ezsigntemplateformfieldgroupCreateObjectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ezsigntemplateformfieldgroupCreateObjectV1Request** | [**\eZmaxAPI\Model\EzsigntemplateformfieldgroupCreateObjectV1Request**](../Model/EzsigntemplateformfieldgroupCreateObjectV1Request.md)|  | |

### Return type

[**\eZmaxAPI\Model\EzsigntemplateformfieldgroupCreateObjectV1Response**](../Model/EzsigntemplateformfieldgroupCreateObjectV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezsigntemplateformfieldgroupDeleteObjectV1()`

```php
ezsigntemplateformfieldgroupDeleteObjectV1($pkiEzsigntemplateformfieldgroupID): \eZmaxAPI\Model\EzsigntemplateformfieldgroupDeleteObjectV1Response
```

Delete an existing Ezsigntemplateformfieldgroup



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsigntemplateformfieldgroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzsigntemplateformfieldgroupID = 56; // int

try {
    $result = $apiInstance->ezsigntemplateformfieldgroupDeleteObjectV1($pkiEzsigntemplateformfieldgroupID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsigntemplateformfieldgroupApi->ezsigntemplateformfieldgroupDeleteObjectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiEzsigntemplateformfieldgroupID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\EzsigntemplateformfieldgroupDeleteObjectV1Response**](../Model/EzsigntemplateformfieldgroupDeleteObjectV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezsigntemplateformfieldgroupEditObjectV1()`

```php
ezsigntemplateformfieldgroupEditObjectV1($pkiEzsigntemplateformfieldgroupID, $ezsigntemplateformfieldgroupEditObjectV1Request): \eZmaxAPI\Model\EzsigntemplateformfieldgroupEditObjectV1Response
```

Edit an existing Ezsigntemplateformfieldgroup



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsigntemplateformfieldgroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzsigntemplateformfieldgroupID = 56; // int
$ezsigntemplateformfieldgroupEditObjectV1Request = new \eZmaxAPI\Model\EzsigntemplateformfieldgroupEditObjectV1Request(); // \eZmaxAPI\Model\EzsigntemplateformfieldgroupEditObjectV1Request

try {
    $result = $apiInstance->ezsigntemplateformfieldgroupEditObjectV1($pkiEzsigntemplateformfieldgroupID, $ezsigntemplateformfieldgroupEditObjectV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsigntemplateformfieldgroupApi->ezsigntemplateformfieldgroupEditObjectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiEzsigntemplateformfieldgroupID** | **int**|  | |
| **ezsigntemplateformfieldgroupEditObjectV1Request** | [**\eZmaxAPI\Model\EzsigntemplateformfieldgroupEditObjectV1Request**](../Model/EzsigntemplateformfieldgroupEditObjectV1Request.md)|  | |

### Return type

[**\eZmaxAPI\Model\EzsigntemplateformfieldgroupEditObjectV1Response**](../Model/EzsigntemplateformfieldgroupEditObjectV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezsigntemplateformfieldgroupGetObjectV2()`

```php
ezsigntemplateformfieldgroupGetObjectV2($pkiEzsigntemplateformfieldgroupID): \eZmaxAPI\Model\EzsigntemplateformfieldgroupGetObjectV2Response
```

Retrieve an existing Ezsigntemplateformfieldgroup



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsigntemplateformfieldgroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzsigntemplateformfieldgroupID = 56; // int

try {
    $result = $apiInstance->ezsigntemplateformfieldgroupGetObjectV2($pkiEzsigntemplateformfieldgroupID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsigntemplateformfieldgroupApi->ezsigntemplateformfieldgroupGetObjectV2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiEzsigntemplateformfieldgroupID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\EzsigntemplateformfieldgroupGetObjectV2Response**](../Model/EzsigntemplateformfieldgroupGetObjectV2Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
