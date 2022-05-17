# eZmaxAPI\ObjectEzsignbulksendsignermappingApi

All URIs are relative to https://prod.api.appcluster01.ca-central-1.ezmax.com/rest.

Method | HTTP request | Description
------------- | ------------- | -------------
[**ezsignbulksendsignermappingCreateObjectV1()**](ObjectEzsignbulksendsignermappingApi.md#ezsignbulksendsignermappingCreateObjectV1) | **POST** /1/object/ezsignbulksendsignermapping | Create a new Ezsignbulksendsignermapping
[**ezsignbulksendsignermappingDeleteObjectV1()**](ObjectEzsignbulksendsignermappingApi.md#ezsignbulksendsignermappingDeleteObjectV1) | **DELETE** /1/object/ezsignbulksendsignermapping/{pkiEzsignbulksendsignermappingID} | Delete an existing Ezsignbulksendsignermapping
[**ezsignbulksendsignermappingGetObjectV1()**](ObjectEzsignbulksendsignermappingApi.md#ezsignbulksendsignermappingGetObjectV1) | **GET** /1/object/ezsignbulksendsignermapping/{pkiEzsignbulksendsignermappingID} | Retrieve an existing Ezsignbulksendsignermapping


## `ezsignbulksendsignermappingCreateObjectV1()`

```php
ezsignbulksendsignermappingCreateObjectV1($ezsignbulksendsignermappingCreateObjectV1Request): \eZmaxAPI\Model\EzsignbulksendsignermappingCreateObjectV1Response
```

Create a new Ezsignbulksendsignermapping

The endpoint allows to create one or many elements at once.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsignbulksendsignermappingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ezsignbulksendsignermappingCreateObjectV1Request = new \eZmaxAPI\Model\EzsignbulksendsignermappingCreateObjectV1Request(); // \eZmaxAPI\Model\EzsignbulksendsignermappingCreateObjectV1Request

try {
    $result = $apiInstance->ezsignbulksendsignermappingCreateObjectV1($ezsignbulksendsignermappingCreateObjectV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsignbulksendsignermappingApi->ezsignbulksendsignermappingCreateObjectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ezsignbulksendsignermappingCreateObjectV1Request** | [**\eZmaxAPI\Model\EzsignbulksendsignermappingCreateObjectV1Request**](../Model/EzsignbulksendsignermappingCreateObjectV1Request.md)|  |

### Return type

[**\eZmaxAPI\Model\EzsignbulksendsignermappingCreateObjectV1Response**](../Model/EzsignbulksendsignermappingCreateObjectV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezsignbulksendsignermappingDeleteObjectV1()`

```php
ezsignbulksendsignermappingDeleteObjectV1($pkiEzsignbulksendsignermappingID): \eZmaxAPI\Model\EzsignbulksendsignermappingDeleteObjectV1Response
```

Delete an existing Ezsignbulksendsignermapping



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsignbulksendsignermappingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzsignbulksendsignermappingID = 56; // int

try {
    $result = $apiInstance->ezsignbulksendsignermappingDeleteObjectV1($pkiEzsignbulksendsignermappingID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsignbulksendsignermappingApi->ezsignbulksendsignermappingDeleteObjectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pkiEzsignbulksendsignermappingID** | **int**|  |

### Return type

[**\eZmaxAPI\Model\EzsignbulksendsignermappingDeleteObjectV1Response**](../Model/EzsignbulksendsignermappingDeleteObjectV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezsignbulksendsignermappingGetObjectV1()`

```php
ezsignbulksendsignermappingGetObjectV1($pkiEzsignbulksendsignermappingID): \eZmaxAPI\Model\EzsignbulksendsignermappingGetObjectV1Response
```

Retrieve an existing Ezsignbulksendsignermapping



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsignbulksendsignermappingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzsignbulksendsignermappingID = 56; // int

try {
    $result = $apiInstance->ezsignbulksendsignermappingGetObjectV1($pkiEzsignbulksendsignermappingID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsignbulksendsignermappingApi->ezsignbulksendsignermappingGetObjectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pkiEzsignbulksendsignermappingID** | **int**|  |

### Return type

[**\eZmaxAPI\Model\EzsignbulksendsignermappingGetObjectV1Response**](../Model/EzsignbulksendsignermappingGetObjectV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
