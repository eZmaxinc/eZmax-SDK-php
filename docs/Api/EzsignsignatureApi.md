# eZmaxAPI\EzsignsignatureApi

All URIs are relative to https://prod.api.appcluster01.ca-central-1.ezmax.com/rest.

Method | HTTP request | Description
------------- | ------------- | -------------
[**ezsignsignatureCreateObjectV1()**](EzsignsignatureApi.md#ezsignsignatureCreateObjectV1) | **POST** /1/object/ezsignsignature | Create a new Ezsignsignature
[**ezsignsignatureDeleteObjectV1()**](EzsignsignatureApi.md#ezsignsignatureDeleteObjectV1) | **DELETE** /1/object/ezsignsignature/{pkiEzsignsignatureID} | Delete an existing Ezsignsignature
[**ezsignsignatureEditObjectV1()**](EzsignsignatureApi.md#ezsignsignatureEditObjectV1) | **PUT** /1/object/ezsignsignature/{pkiEzsignsignatureID} | Modify an existing Ezsignsignature
[**ezsignsignatureGetObjectGetChildrenV1()**](EzsignsignatureApi.md#ezsignsignatureGetObjectGetChildrenV1) | **GET** /1/object/ezsignsignature/{pkiEzsignsignatureID}/getChildren | Retrieve an existing Ezsignsignature&#39;s children IDs
[**ezsignsignatureGetObjectV1()**](EzsignsignatureApi.md#ezsignsignatureGetObjectV1) | **GET** /1/object/ezsignsignature/{pkiEzsignsignatureID} | Retrieve an existing Ezsignsignature


## `ezsignsignatureCreateObjectV1()`

```php
ezsignsignatureCreateObjectV1($ezsignsignatureCreateObjectV1Request): \eZmaxAPI\Model\EzsignsignatureCreateObjectV1Response
```

Create a new Ezsignsignature

The endpoint allows to create one or many elements at once.  The array can contain simple (Just the object) or compound (The object and its child) objects.  Creating compound elements allows to reduce the multiple requests to create all child objects.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\EzsignsignatureApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ezsignsignatureCreateObjectV1Request = array(new \eZmaxAPI\Model\EzsignsignatureCreateObjectV1Request()); // \eZmaxAPI\Model\EzsignsignatureCreateObjectV1Request[]

try {
    $result = $apiInstance->ezsignsignatureCreateObjectV1($ezsignsignatureCreateObjectV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EzsignsignatureApi->ezsignsignatureCreateObjectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ezsignsignatureCreateObjectV1Request** | [**\eZmaxAPI\Model\EzsignsignatureCreateObjectV1Request[]**](../Model/EzsignsignatureCreateObjectV1Request.md)|  |

### Return type

[**\eZmaxAPI\Model\EzsignsignatureCreateObjectV1Response**](../Model/EzsignsignatureCreateObjectV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezsignsignatureDeleteObjectV1()`

```php
ezsignsignatureDeleteObjectV1($pkiEzsignsignatureID): \eZmaxAPI\Model\EzsignsignatureDeleteObjectV1Response
```

Delete an existing Ezsignsignature

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\EzsignsignatureApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzsignsignatureID = 56; // int | The unique ID of the Ezsignsignature

try {
    $result = $apiInstance->ezsignsignatureDeleteObjectV1($pkiEzsignsignatureID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EzsignsignatureApi->ezsignsignatureDeleteObjectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pkiEzsignsignatureID** | **int**| The unique ID of the Ezsignsignature |

### Return type

[**\eZmaxAPI\Model\EzsignsignatureDeleteObjectV1Response**](../Model/EzsignsignatureDeleteObjectV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezsignsignatureEditObjectV1()`

```php
ezsignsignatureEditObjectV1($pkiEzsignsignatureID, $ezsignsignatureEditObjectV1Request): \eZmaxAPI\Model\EzsignsignatureEditObjectV1Response
```

Modify an existing Ezsignsignature

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\EzsignsignatureApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzsignsignatureID = 56; // int | The unique ID of the Ezsignsignature
$ezsignsignatureEditObjectV1Request = new \eZmaxAPI\Model\EzsignsignatureEditObjectV1Request(); // \eZmaxAPI\Model\EzsignsignatureEditObjectV1Request

try {
    $result = $apiInstance->ezsignsignatureEditObjectV1($pkiEzsignsignatureID, $ezsignsignatureEditObjectV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EzsignsignatureApi->ezsignsignatureEditObjectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pkiEzsignsignatureID** | **int**| The unique ID of the Ezsignsignature |
 **ezsignsignatureEditObjectV1Request** | [**\eZmaxAPI\Model\EzsignsignatureEditObjectV1Request**](../Model/EzsignsignatureEditObjectV1Request.md)|  |

### Return type

[**\eZmaxAPI\Model\EzsignsignatureEditObjectV1Response**](../Model/EzsignsignatureEditObjectV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezsignsignatureGetObjectGetChildrenV1()`

```php
ezsignsignatureGetObjectGetChildrenV1($pkiEzsignsignatureID)
```

Retrieve an existing Ezsignsignature's children IDs

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\EzsignsignatureApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzsignsignatureID = 56; // int | The unique ID of the Ezsignsignature

try {
    $apiInstance->ezsignsignatureGetObjectGetChildrenV1($pkiEzsignsignatureID);
} catch (Exception $e) {
    echo 'Exception when calling EzsignsignatureApi->ezsignsignatureGetObjectGetChildrenV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pkiEzsignsignatureID** | **int**| The unique ID of the Ezsignsignature |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezsignsignatureGetObjectV1()`

```php
ezsignsignatureGetObjectV1($pkiEzsignsignatureID): \eZmaxAPI\Model\EzsignsignatureGetObjectV1Response
```

Retrieve an existing Ezsignsignature

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\EzsignsignatureApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzsignsignatureID = 56; // int | The unique ID of the Ezsignsignature

try {
    $result = $apiInstance->ezsignsignatureGetObjectV1($pkiEzsignsignatureID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EzsignsignatureApi->ezsignsignatureGetObjectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pkiEzsignsignatureID** | **int**| The unique ID of the Ezsignsignature |

### Return type

[**\eZmaxAPI\Model\EzsignsignatureGetObjectV1Response**](../Model/EzsignsignatureGetObjectV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
