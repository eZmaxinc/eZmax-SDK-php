# eZmaxAPI\ObjectEzsigntemplatepackagesignerApi

All URIs are relative to https://prod.api.appcluster01.ca-central-1.ezmax.com/rest.

Method | HTTP request | Description
------------- | ------------- | -------------
[**ezsigntemplatepackagesignerCreateObjectV1()**](ObjectEzsigntemplatepackagesignerApi.md#ezsigntemplatepackagesignerCreateObjectV1) | **POST** /1/object/ezsigntemplatepackagesigner | Create a new Ezsigntemplatepackagesigner
[**ezsigntemplatepackagesignerDeleteObjectV1()**](ObjectEzsigntemplatepackagesignerApi.md#ezsigntemplatepackagesignerDeleteObjectV1) | **DELETE** /1/object/ezsigntemplatepackagesigner/{pkiEzsigntemplatepackagesignerID} | Delete an existing Ezsigntemplatepackagesigner
[**ezsigntemplatepackagesignerEditObjectV1()**](ObjectEzsigntemplatepackagesignerApi.md#ezsigntemplatepackagesignerEditObjectV1) | **PUT** /1/object/ezsigntemplatepackagesigner/{pkiEzsigntemplatepackagesignerID} | Edit an existing Ezsigntemplatepackagesigner
[**ezsigntemplatepackagesignerGetObjectV1()**](ObjectEzsigntemplatepackagesignerApi.md#ezsigntemplatepackagesignerGetObjectV1) | **GET** /1/object/ezsigntemplatepackagesigner/{pkiEzsigntemplatepackagesignerID} | Retrieve an existing Ezsigntemplatepackagesigner


## `ezsigntemplatepackagesignerCreateObjectV1()`

```php
ezsigntemplatepackagesignerCreateObjectV1($ezsigntemplatepackagesignerCreateObjectV1Request): \eZmaxAPI\Model\EzsigntemplatepackagesignerCreateObjectV1Response
```

Create a new Ezsigntemplatepackagesigner

The endpoint allows to create one or many elements at once.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsigntemplatepackagesignerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ezsigntemplatepackagesignerCreateObjectV1Request = new \eZmaxAPI\Model\EzsigntemplatepackagesignerCreateObjectV1Request(); // \eZmaxAPI\Model\EzsigntemplatepackagesignerCreateObjectV1Request

try {
    $result = $apiInstance->ezsigntemplatepackagesignerCreateObjectV1($ezsigntemplatepackagesignerCreateObjectV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsigntemplatepackagesignerApi->ezsigntemplatepackagesignerCreateObjectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ezsigntemplatepackagesignerCreateObjectV1Request** | [**\eZmaxAPI\Model\EzsigntemplatepackagesignerCreateObjectV1Request**](../Model/EzsigntemplatepackagesignerCreateObjectV1Request.md)|  |

### Return type

[**\eZmaxAPI\Model\EzsigntemplatepackagesignerCreateObjectV1Response**](../Model/EzsigntemplatepackagesignerCreateObjectV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezsigntemplatepackagesignerDeleteObjectV1()`

```php
ezsigntemplatepackagesignerDeleteObjectV1($pkiEzsigntemplatepackagesignerID): \eZmaxAPI\Model\EzsigntemplatepackagesignerDeleteObjectV1Response
```

Delete an existing Ezsigntemplatepackagesigner



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsigntemplatepackagesignerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzsigntemplatepackagesignerID = 56; // int

try {
    $result = $apiInstance->ezsigntemplatepackagesignerDeleteObjectV1($pkiEzsigntemplatepackagesignerID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsigntemplatepackagesignerApi->ezsigntemplatepackagesignerDeleteObjectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pkiEzsigntemplatepackagesignerID** | **int**|  |

### Return type

[**\eZmaxAPI\Model\EzsigntemplatepackagesignerDeleteObjectV1Response**](../Model/EzsigntemplatepackagesignerDeleteObjectV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezsigntemplatepackagesignerEditObjectV1()`

```php
ezsigntemplatepackagesignerEditObjectV1($pkiEzsigntemplatepackagesignerID, $ezsigntemplatepackagesignerEditObjectV1Request): \eZmaxAPI\Model\EzsigntemplatepackagesignerEditObjectV1Response
```

Edit an existing Ezsigntemplatepackagesigner



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsigntemplatepackagesignerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzsigntemplatepackagesignerID = 56; // int
$ezsigntemplatepackagesignerEditObjectV1Request = new \eZmaxAPI\Model\EzsigntemplatepackagesignerEditObjectV1Request(); // \eZmaxAPI\Model\EzsigntemplatepackagesignerEditObjectV1Request

try {
    $result = $apiInstance->ezsigntemplatepackagesignerEditObjectV1($pkiEzsigntemplatepackagesignerID, $ezsigntemplatepackagesignerEditObjectV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsigntemplatepackagesignerApi->ezsigntemplatepackagesignerEditObjectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pkiEzsigntemplatepackagesignerID** | **int**|  |
 **ezsigntemplatepackagesignerEditObjectV1Request** | [**\eZmaxAPI\Model\EzsigntemplatepackagesignerEditObjectV1Request**](../Model/EzsigntemplatepackagesignerEditObjectV1Request.md)|  |

### Return type

[**\eZmaxAPI\Model\EzsigntemplatepackagesignerEditObjectV1Response**](../Model/EzsigntemplatepackagesignerEditObjectV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezsigntemplatepackagesignerGetObjectV1()`

```php
ezsigntemplatepackagesignerGetObjectV1($pkiEzsigntemplatepackagesignerID): \eZmaxAPI\Model\EzsigntemplatepackagesignerGetObjectV1Response
```

Retrieve an existing Ezsigntemplatepackagesigner



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsigntemplatepackagesignerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzsigntemplatepackagesignerID = 56; // int

try {
    $result = $apiInstance->ezsigntemplatepackagesignerGetObjectV1($pkiEzsigntemplatepackagesignerID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsigntemplatepackagesignerApi->ezsigntemplatepackagesignerGetObjectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pkiEzsigntemplatepackagesignerID** | **int**|  |

### Return type

[**\eZmaxAPI\Model\EzsigntemplatepackagesignerGetObjectV1Response**](../Model/EzsigntemplatepackagesignerGetObjectV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
