# eZmaxAPI\ObjectEzsigntemplatepackagesignermembershipApi

All URIs are relative to https://prod.api.appcluster01.ca-central-1.ezmax.com/rest.

Method | HTTP request | Description
------------- | ------------- | -------------
[**ezsigntemplatepackagesignermembershipCreateObjectV1()**](ObjectEzsigntemplatepackagesignermembershipApi.md#ezsigntemplatepackagesignermembershipCreateObjectV1) | **POST** /1/object/ezsigntemplatepackagesignermembership | Create a new Ezsigntemplatepackagesignermembership
[**ezsigntemplatepackagesignermembershipDeleteObjectV1()**](ObjectEzsigntemplatepackagesignermembershipApi.md#ezsigntemplatepackagesignermembershipDeleteObjectV1) | **DELETE** /1/object/ezsigntemplatepackagesignermembership/{pkiEzsigntemplatepackagesignermembershipID} | Delete an existing Ezsigntemplatepackagesignermembership
[**ezsigntemplatepackagesignermembershipGetObjectV1()**](ObjectEzsigntemplatepackagesignermembershipApi.md#ezsigntemplatepackagesignermembershipGetObjectV1) | **GET** /1/object/ezsigntemplatepackagesignermembership/{pkiEzsigntemplatepackagesignermembershipID} | Retrieve an existing Ezsigntemplatepackagesignermembership


## `ezsigntemplatepackagesignermembershipCreateObjectV1()`

```php
ezsigntemplatepackagesignermembershipCreateObjectV1($ezsigntemplatepackagesignermembershipCreateObjectV1Request): \eZmaxAPI\Model\EzsigntemplatepackagesignermembershipCreateObjectV1Response
```

Create a new Ezsigntemplatepackagesignermembership

The endpoint allows to create one or many elements at once.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsigntemplatepackagesignermembershipApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ezsigntemplatepackagesignermembershipCreateObjectV1Request = new \eZmaxAPI\Model\EzsigntemplatepackagesignermembershipCreateObjectV1Request(); // \eZmaxAPI\Model\EzsigntemplatepackagesignermembershipCreateObjectV1Request

try {
    $result = $apiInstance->ezsigntemplatepackagesignermembershipCreateObjectV1($ezsigntemplatepackagesignermembershipCreateObjectV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsigntemplatepackagesignermembershipApi->ezsigntemplatepackagesignermembershipCreateObjectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ezsigntemplatepackagesignermembershipCreateObjectV1Request** | [**\eZmaxAPI\Model\EzsigntemplatepackagesignermembershipCreateObjectV1Request**](../Model/EzsigntemplatepackagesignermembershipCreateObjectV1Request.md)|  |

### Return type

[**\eZmaxAPI\Model\EzsigntemplatepackagesignermembershipCreateObjectV1Response**](../Model/EzsigntemplatepackagesignermembershipCreateObjectV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezsigntemplatepackagesignermembershipDeleteObjectV1()`

```php
ezsigntemplatepackagesignermembershipDeleteObjectV1($pkiEzsigntemplatepackagesignermembershipID): \eZmaxAPI\Model\EzsigntemplatepackagesignermembershipDeleteObjectV1Response
```

Delete an existing Ezsigntemplatepackagesignermembership



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsigntemplatepackagesignermembershipApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzsigntemplatepackagesignermembershipID = 56; // int

try {
    $result = $apiInstance->ezsigntemplatepackagesignermembershipDeleteObjectV1($pkiEzsigntemplatepackagesignermembershipID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsigntemplatepackagesignermembershipApi->ezsigntemplatepackagesignermembershipDeleteObjectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pkiEzsigntemplatepackagesignermembershipID** | **int**|  |

### Return type

[**\eZmaxAPI\Model\EzsigntemplatepackagesignermembershipDeleteObjectV1Response**](../Model/EzsigntemplatepackagesignermembershipDeleteObjectV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezsigntemplatepackagesignermembershipGetObjectV1()`

```php
ezsigntemplatepackagesignermembershipGetObjectV1($pkiEzsigntemplatepackagesignermembershipID): \eZmaxAPI\Model\EzsigntemplatepackagesignermembershipGetObjectV1Response
```

Retrieve an existing Ezsigntemplatepackagesignermembership



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsigntemplatepackagesignermembershipApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzsigntemplatepackagesignermembershipID = 56; // int

try {
    $result = $apiInstance->ezsigntemplatepackagesignermembershipGetObjectV1($pkiEzsigntemplatepackagesignermembershipID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsigntemplatepackagesignermembershipApi->ezsigntemplatepackagesignermembershipGetObjectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pkiEzsigntemplatepackagesignermembershipID** | **int**|  |

### Return type

[**\eZmaxAPI\Model\EzsigntemplatepackagesignermembershipGetObjectV1Response**](../Model/EzsigntemplatepackagesignermembershipGetObjectV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
