# eZmaxAPI\ObjectEzsignbulksenddocumentmappingApi

All URIs are relative to https://prod.api.appcluster01.ca-central-1.ezmax.com/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**ezsignbulksenddocumentmappingCreateObjectV1()**](ObjectEzsignbulksenddocumentmappingApi.md#ezsignbulksenddocumentmappingCreateObjectV1) | **POST** /1/object/ezsignbulksenddocumentmapping | Create a new Ezsignbulksenddocumentmapping |
| [**ezsignbulksenddocumentmappingDeleteObjectV1()**](ObjectEzsignbulksenddocumentmappingApi.md#ezsignbulksenddocumentmappingDeleteObjectV1) | **DELETE** /1/object/ezsignbulksenddocumentmapping/{pkiEzsignbulksenddocumentmappingID} | Delete an existing Ezsignbulksenddocumentmapping |
| [**ezsignbulksenddocumentmappingGetObjectV1()**](ObjectEzsignbulksenddocumentmappingApi.md#ezsignbulksenddocumentmappingGetObjectV1) | **GET** /1/object/ezsignbulksenddocumentmapping/{pkiEzsignbulksenddocumentmappingID} | Retrieve an existing Ezsignbulksenddocumentmapping |
| [**ezsignbulksenddocumentmappingGetObjectV2()**](ObjectEzsignbulksenddocumentmappingApi.md#ezsignbulksenddocumentmappingGetObjectV2) | **GET** /2/object/ezsignbulksenddocumentmapping/{pkiEzsignbulksenddocumentmappingID} | Retrieve an existing Ezsignbulksenddocumentmapping |


## `ezsignbulksenddocumentmappingCreateObjectV1()`

```php
ezsignbulksenddocumentmappingCreateObjectV1($ezsignbulksenddocumentmappingCreateObjectV1Request): \eZmaxAPI\Model\EzsignbulksenddocumentmappingCreateObjectV1Response
```

Create a new Ezsignbulksenddocumentmapping

The endpoint allows to create one or many elements at once.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsignbulksenddocumentmappingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ezsignbulksenddocumentmappingCreateObjectV1Request = new \eZmaxAPI\Model\EzsignbulksenddocumentmappingCreateObjectV1Request(); // \eZmaxAPI\Model\EzsignbulksenddocumentmappingCreateObjectV1Request

try {
    $result = $apiInstance->ezsignbulksenddocumentmappingCreateObjectV1($ezsignbulksenddocumentmappingCreateObjectV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsignbulksenddocumentmappingApi->ezsignbulksenddocumentmappingCreateObjectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ezsignbulksenddocumentmappingCreateObjectV1Request** | [**\eZmaxAPI\Model\EzsignbulksenddocumentmappingCreateObjectV1Request**](../Model/EzsignbulksenddocumentmappingCreateObjectV1Request.md)|  | |

### Return type

[**\eZmaxAPI\Model\EzsignbulksenddocumentmappingCreateObjectV1Response**](../Model/EzsignbulksenddocumentmappingCreateObjectV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezsignbulksenddocumentmappingDeleteObjectV1()`

```php
ezsignbulksenddocumentmappingDeleteObjectV1($pkiEzsignbulksenddocumentmappingID): \eZmaxAPI\Model\EzsignbulksenddocumentmappingDeleteObjectV1Response
```

Delete an existing Ezsignbulksenddocumentmapping



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsignbulksenddocumentmappingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzsignbulksenddocumentmappingID = 56; // int

try {
    $result = $apiInstance->ezsignbulksenddocumentmappingDeleteObjectV1($pkiEzsignbulksenddocumentmappingID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsignbulksenddocumentmappingApi->ezsignbulksenddocumentmappingDeleteObjectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiEzsignbulksenddocumentmappingID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\EzsignbulksenddocumentmappingDeleteObjectV1Response**](../Model/EzsignbulksenddocumentmappingDeleteObjectV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezsignbulksenddocumentmappingGetObjectV1()`

```php
ezsignbulksenddocumentmappingGetObjectV1($pkiEzsignbulksenddocumentmappingID): \eZmaxAPI\Model\EzsignbulksenddocumentmappingGetObjectV1Response
```

Retrieve an existing Ezsignbulksenddocumentmapping



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsignbulksenddocumentmappingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzsignbulksenddocumentmappingID = 56; // int

try {
    $result = $apiInstance->ezsignbulksenddocumentmappingGetObjectV1($pkiEzsignbulksenddocumentmappingID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsignbulksenddocumentmappingApi->ezsignbulksenddocumentmappingGetObjectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiEzsignbulksenddocumentmappingID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\EzsignbulksenddocumentmappingGetObjectV1Response**](../Model/EzsignbulksenddocumentmappingGetObjectV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezsignbulksenddocumentmappingGetObjectV2()`

```php
ezsignbulksenddocumentmappingGetObjectV2($pkiEzsignbulksenddocumentmappingID): \eZmaxAPI\Model\EzsignbulksenddocumentmappingGetObjectV2Response
```

Retrieve an existing Ezsignbulksenddocumentmapping



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsignbulksenddocumentmappingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzsignbulksenddocumentmappingID = 56; // int

try {
    $result = $apiInstance->ezsignbulksenddocumentmappingGetObjectV2($pkiEzsignbulksenddocumentmappingID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsignbulksenddocumentmappingApi->ezsignbulksenddocumentmappingGetObjectV2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiEzsignbulksenddocumentmappingID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\EzsignbulksenddocumentmappingGetObjectV2Response**](../Model/EzsignbulksenddocumentmappingGetObjectV2Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
