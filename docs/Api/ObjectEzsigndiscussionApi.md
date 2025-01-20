# eZmaxAPI\ObjectEzsigndiscussionApi

All URIs are relative to https://prod.api.appcluster01.ca-central-1.ezmax.com/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**ezsigndiscussionCreateObjectV1()**](ObjectEzsigndiscussionApi.md#ezsigndiscussionCreateObjectV1) | **POST** /1/object/ezsigndiscussion | Create a new Ezsigndiscussion |
| [**ezsigndiscussionDeleteObjectV1()**](ObjectEzsigndiscussionApi.md#ezsigndiscussionDeleteObjectV1) | **DELETE** /1/object/ezsigndiscussion/{pkiEzsigndiscussionID} | Delete an existing Ezsigndiscussion |
| [**ezsigndiscussionGetObjectV2()**](ObjectEzsigndiscussionApi.md#ezsigndiscussionGetObjectV2) | **GET** /2/object/ezsigndiscussion/{pkiEzsigndiscussionID} | Retrieve an existing Ezsigndiscussion |


## `ezsigndiscussionCreateObjectV1()`

```php
ezsigndiscussionCreateObjectV1($ezsigndiscussionCreateObjectV1Request): \eZmaxAPI\Model\EzsigndiscussionCreateObjectV1Response
```

Create a new Ezsigndiscussion

The endpoint allows to create one or many elements at once.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsigndiscussionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ezsigndiscussionCreateObjectV1Request = new \eZmaxAPI\Model\EzsigndiscussionCreateObjectV1Request(); // \eZmaxAPI\Model\EzsigndiscussionCreateObjectV1Request

try {
    $result = $apiInstance->ezsigndiscussionCreateObjectV1($ezsigndiscussionCreateObjectV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsigndiscussionApi->ezsigndiscussionCreateObjectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ezsigndiscussionCreateObjectV1Request** | [**\eZmaxAPI\Model\EzsigndiscussionCreateObjectV1Request**](../Model/EzsigndiscussionCreateObjectV1Request.md)|  | |

### Return type

[**\eZmaxAPI\Model\EzsigndiscussionCreateObjectV1Response**](../Model/EzsigndiscussionCreateObjectV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezsigndiscussionDeleteObjectV1()`

```php
ezsigndiscussionDeleteObjectV1($pkiEzsigndiscussionID): \eZmaxAPI\Model\CommonResponse
```

Delete an existing Ezsigndiscussion



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsigndiscussionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzsigndiscussionID = 56; // int | The unique ID of the Ezsigndiscussion

try {
    $result = $apiInstance->ezsigndiscussionDeleteObjectV1($pkiEzsigndiscussionID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsigndiscussionApi->ezsigndiscussionDeleteObjectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiEzsigndiscussionID** | **int**| The unique ID of the Ezsigndiscussion | |

### Return type

[**\eZmaxAPI\Model\CommonResponse**](../Model/CommonResponse.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezsigndiscussionGetObjectV2()`

```php
ezsigndiscussionGetObjectV2($pkiEzsigndiscussionID): \eZmaxAPI\Model\EzsigndiscussionGetObjectV2Response
```

Retrieve an existing Ezsigndiscussion



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsigndiscussionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzsigndiscussionID = 56; // int | The unique ID of the Ezsigndiscussion

try {
    $result = $apiInstance->ezsigndiscussionGetObjectV2($pkiEzsigndiscussionID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsigndiscussionApi->ezsigndiscussionGetObjectV2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiEzsigndiscussionID** | **int**| The unique ID of the Ezsigndiscussion | |

### Return type

[**\eZmaxAPI\Model\EzsigndiscussionGetObjectV2Response**](../Model/EzsigndiscussionGetObjectV2Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
