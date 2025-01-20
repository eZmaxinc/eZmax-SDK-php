# eZmaxAPI\ObjectEzsigntemplatedocumentpagerecognitionApi

All URIs are relative to https://prod.api.appcluster01.ca-central-1.ezmax.com/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**ezsigntemplatedocumentpagerecognitionCreateObjectV1()**](ObjectEzsigntemplatedocumentpagerecognitionApi.md#ezsigntemplatedocumentpagerecognitionCreateObjectV1) | **POST** /1/object/ezsigntemplatedocumentpagerecognition | Create a new Ezsigntemplatedocumentpagerecognition |
| [**ezsigntemplatedocumentpagerecognitionDeleteObjectV1()**](ObjectEzsigntemplatedocumentpagerecognitionApi.md#ezsigntemplatedocumentpagerecognitionDeleteObjectV1) | **DELETE** /1/object/ezsigntemplatedocumentpagerecognition/{pkiEzsigntemplatedocumentpagerecognitionID} | Delete an existing Ezsigntemplatedocumentpagerecognition |
| [**ezsigntemplatedocumentpagerecognitionEditObjectV1()**](ObjectEzsigntemplatedocumentpagerecognitionApi.md#ezsigntemplatedocumentpagerecognitionEditObjectV1) | **PUT** /1/object/ezsigntemplatedocumentpagerecognition/{pkiEzsigntemplatedocumentpagerecognitionID} | Edit an existing Ezsigntemplatedocumentpagerecognition |
| [**ezsigntemplatedocumentpagerecognitionGetObjectV2()**](ObjectEzsigntemplatedocumentpagerecognitionApi.md#ezsigntemplatedocumentpagerecognitionGetObjectV2) | **GET** /2/object/ezsigntemplatedocumentpagerecognition/{pkiEzsigntemplatedocumentpagerecognitionID} | Retrieve an existing Ezsigntemplatedocumentpagerecognition |


## `ezsigntemplatedocumentpagerecognitionCreateObjectV1()`

```php
ezsigntemplatedocumentpagerecognitionCreateObjectV1($ezsigntemplatedocumentpagerecognitionCreateObjectV1Request): \eZmaxAPI\Model\EzsigntemplatedocumentpagerecognitionCreateObjectV1Response
```

Create a new Ezsigntemplatedocumentpagerecognition

The endpoint allows to create one or many elements at once.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsigntemplatedocumentpagerecognitionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ezsigntemplatedocumentpagerecognitionCreateObjectV1Request = new \eZmaxAPI\Model\EzsigntemplatedocumentpagerecognitionCreateObjectV1Request(); // \eZmaxAPI\Model\EzsigntemplatedocumentpagerecognitionCreateObjectV1Request

try {
    $result = $apiInstance->ezsigntemplatedocumentpagerecognitionCreateObjectV1($ezsigntemplatedocumentpagerecognitionCreateObjectV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsigntemplatedocumentpagerecognitionApi->ezsigntemplatedocumentpagerecognitionCreateObjectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ezsigntemplatedocumentpagerecognitionCreateObjectV1Request** | [**\eZmaxAPI\Model\EzsigntemplatedocumentpagerecognitionCreateObjectV1Request**](../Model/EzsigntemplatedocumentpagerecognitionCreateObjectV1Request.md)|  | |

### Return type

[**\eZmaxAPI\Model\EzsigntemplatedocumentpagerecognitionCreateObjectV1Response**](../Model/EzsigntemplatedocumentpagerecognitionCreateObjectV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezsigntemplatedocumentpagerecognitionDeleteObjectV1()`

```php
ezsigntemplatedocumentpagerecognitionDeleteObjectV1($pkiEzsigntemplatedocumentpagerecognitionID): \eZmaxAPI\Model\CommonResponse
```

Delete an existing Ezsigntemplatedocumentpagerecognition



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsigntemplatedocumentpagerecognitionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzsigntemplatedocumentpagerecognitionID = 56; // int | The unique ID of the Ezsigntemplatedocumentpagerecognition

try {
    $result = $apiInstance->ezsigntemplatedocumentpagerecognitionDeleteObjectV1($pkiEzsigntemplatedocumentpagerecognitionID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsigntemplatedocumentpagerecognitionApi->ezsigntemplatedocumentpagerecognitionDeleteObjectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiEzsigntemplatedocumentpagerecognitionID** | **int**| The unique ID of the Ezsigntemplatedocumentpagerecognition | |

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

## `ezsigntemplatedocumentpagerecognitionEditObjectV1()`

```php
ezsigntemplatedocumentpagerecognitionEditObjectV1($pkiEzsigntemplatedocumentpagerecognitionID, $ezsigntemplatedocumentpagerecognitionEditObjectV1Request): \eZmaxAPI\Model\CommonResponse
```

Edit an existing Ezsigntemplatedocumentpagerecognition



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsigntemplatedocumentpagerecognitionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzsigntemplatedocumentpagerecognitionID = 56; // int | The unique ID of the Ezsigntemplatedocumentpagerecognition
$ezsigntemplatedocumentpagerecognitionEditObjectV1Request = new \eZmaxAPI\Model\EzsigntemplatedocumentpagerecognitionEditObjectV1Request(); // \eZmaxAPI\Model\EzsigntemplatedocumentpagerecognitionEditObjectV1Request

try {
    $result = $apiInstance->ezsigntemplatedocumentpagerecognitionEditObjectV1($pkiEzsigntemplatedocumentpagerecognitionID, $ezsigntemplatedocumentpagerecognitionEditObjectV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsigntemplatedocumentpagerecognitionApi->ezsigntemplatedocumentpagerecognitionEditObjectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiEzsigntemplatedocumentpagerecognitionID** | **int**| The unique ID of the Ezsigntemplatedocumentpagerecognition | |
| **ezsigntemplatedocumentpagerecognitionEditObjectV1Request** | [**\eZmaxAPI\Model\EzsigntemplatedocumentpagerecognitionEditObjectV1Request**](../Model/EzsigntemplatedocumentpagerecognitionEditObjectV1Request.md)|  | |

### Return type

[**\eZmaxAPI\Model\CommonResponse**](../Model/CommonResponse.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezsigntemplatedocumentpagerecognitionGetObjectV2()`

```php
ezsigntemplatedocumentpagerecognitionGetObjectV2($pkiEzsigntemplatedocumentpagerecognitionID): \eZmaxAPI\Model\EzsigntemplatedocumentpagerecognitionGetObjectV2Response
```

Retrieve an existing Ezsigntemplatedocumentpagerecognition



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsigntemplatedocumentpagerecognitionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzsigntemplatedocumentpagerecognitionID = 56; // int | The unique ID of the Ezsigntemplatedocumentpagerecognition

try {
    $result = $apiInstance->ezsigntemplatedocumentpagerecognitionGetObjectV2($pkiEzsigntemplatedocumentpagerecognitionID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsigntemplatedocumentpagerecognitionApi->ezsigntemplatedocumentpagerecognitionGetObjectV2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiEzsigntemplatedocumentpagerecognitionID** | **int**| The unique ID of the Ezsigntemplatedocumentpagerecognition | |

### Return type

[**\eZmaxAPI\Model\EzsigntemplatedocumentpagerecognitionGetObjectV2Response**](../Model/EzsigntemplatedocumentpagerecognitionGetObjectV2Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
