# eZmaxAPI\ObjectEzsigntemplatepackagemembershipApi

All URIs are relative to https://prod.api.appcluster01.ca-central-1.ezmax.com/rest.

Method | HTTP request | Description
------------- | ------------- | -------------
[**ezsigntemplatepackagemembershipCreateObjectV1()**](ObjectEzsigntemplatepackagemembershipApi.md#ezsigntemplatepackagemembershipCreateObjectV1) | **POST** /1/object/ezsigntemplatepackagemembership | Create a new Ezsigntemplatepackagemembership
[**ezsigntemplatepackagemembershipDeleteObjectV1()**](ObjectEzsigntemplatepackagemembershipApi.md#ezsigntemplatepackagemembershipDeleteObjectV1) | **DELETE** /1/object/ezsigntemplatepackagemembership/{pkiEzsigntemplatepackagemembershipID} | Delete an existing Ezsigntemplatepackagemembership
[**ezsigntemplatepackagemembershipGetObjectV1()**](ObjectEzsigntemplatepackagemembershipApi.md#ezsigntemplatepackagemembershipGetObjectV1) | **GET** /1/object/ezsigntemplatepackagemembership/{pkiEzsigntemplatepackagemembershipID} | Retrieve an existing Ezsigntemplatepackagemembership


## `ezsigntemplatepackagemembershipCreateObjectV1()`

```php
ezsigntemplatepackagemembershipCreateObjectV1($ezsigntemplatepackagemembershipCreateObjectV1Request): \eZmaxAPI\Model\EzsigntemplatepackagemembershipCreateObjectV1Response
```

Create a new Ezsigntemplatepackagemembership

The endpoint allows to create one or many elements at once.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsigntemplatepackagemembershipApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ezsigntemplatepackagemembershipCreateObjectV1Request = new \eZmaxAPI\Model\EzsigntemplatepackagemembershipCreateObjectV1Request(); // \eZmaxAPI\Model\EzsigntemplatepackagemembershipCreateObjectV1Request

try {
    $result = $apiInstance->ezsigntemplatepackagemembershipCreateObjectV1($ezsigntemplatepackagemembershipCreateObjectV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsigntemplatepackagemembershipApi->ezsigntemplatepackagemembershipCreateObjectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ezsigntemplatepackagemembershipCreateObjectV1Request** | [**\eZmaxAPI\Model\EzsigntemplatepackagemembershipCreateObjectV1Request**](../Model/EzsigntemplatepackagemembershipCreateObjectV1Request.md)|  |

### Return type

[**\eZmaxAPI\Model\EzsigntemplatepackagemembershipCreateObjectV1Response**](../Model/EzsigntemplatepackagemembershipCreateObjectV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezsigntemplatepackagemembershipDeleteObjectV1()`

```php
ezsigntemplatepackagemembershipDeleteObjectV1($pkiEzsigntemplatepackagemembershipID): \eZmaxAPI\Model\EzsigntemplatepackagemembershipDeleteObjectV1Response
```

Delete an existing Ezsigntemplatepackagemembership



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsigntemplatepackagemembershipApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzsigntemplatepackagemembershipID = 56; // int

try {
    $result = $apiInstance->ezsigntemplatepackagemembershipDeleteObjectV1($pkiEzsigntemplatepackagemembershipID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsigntemplatepackagemembershipApi->ezsigntemplatepackagemembershipDeleteObjectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pkiEzsigntemplatepackagemembershipID** | **int**|  |

### Return type

[**\eZmaxAPI\Model\EzsigntemplatepackagemembershipDeleteObjectV1Response**](../Model/EzsigntemplatepackagemembershipDeleteObjectV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezsigntemplatepackagemembershipGetObjectV1()`

```php
ezsigntemplatepackagemembershipGetObjectV1($pkiEzsigntemplatepackagemembershipID): \eZmaxAPI\Model\EzsigntemplatepackagemembershipGetObjectV1Response
```

Retrieve an existing Ezsigntemplatepackagemembership



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsigntemplatepackagemembershipApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzsigntemplatepackagemembershipID = 56; // int

try {
    $result = $apiInstance->ezsigntemplatepackagemembershipGetObjectV1($pkiEzsigntemplatepackagemembershipID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsigntemplatepackagemembershipApi->ezsigntemplatepackagemembershipGetObjectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pkiEzsigntemplatepackagemembershipID** | **int**|  |

### Return type

[**\eZmaxAPI\Model\EzsigntemplatepackagemembershipGetObjectV1Response**](../Model/EzsigntemplatepackagemembershipGetObjectV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
