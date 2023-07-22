# eZmaxAPI\ObjectSignatureApi

All URIs are relative to https://prod.api.appcluster01.ca-central-1.ezmax.com/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**signatureCreateObjectV1()**](ObjectSignatureApi.md#signatureCreateObjectV1) | **POST** /1/object/signature | Create a new Signature |
| [**signatureDeleteObjectV1()**](ObjectSignatureApi.md#signatureDeleteObjectV1) | **DELETE** /1/object/signature/{pkiSignatureID} | Delete an existing Signature |
| [**signatureEditObjectV1()**](ObjectSignatureApi.md#signatureEditObjectV1) | **PUT** /1/object/signature/{pkiSignatureID} | Edit an existing Signature |
| [**signatureGetObjectV2()**](ObjectSignatureApi.md#signatureGetObjectV2) | **GET** /2/object/signature/{pkiSignatureID} | Retrieve an existing Signature |


## `signatureCreateObjectV1()`

```php
signatureCreateObjectV1($signatureCreateObjectV1Request): \eZmaxAPI\Model\SignatureCreateObjectV1Response
```

Create a new Signature

The endpoint allows to create one or many elements at once.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectSignatureApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$signatureCreateObjectV1Request = new \eZmaxAPI\Model\SignatureCreateObjectV1Request(); // \eZmaxAPI\Model\SignatureCreateObjectV1Request

try {
    $result = $apiInstance->signatureCreateObjectV1($signatureCreateObjectV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectSignatureApi->signatureCreateObjectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **signatureCreateObjectV1Request** | [**\eZmaxAPI\Model\SignatureCreateObjectV1Request**](../Model/SignatureCreateObjectV1Request.md)|  | |

### Return type

[**\eZmaxAPI\Model\SignatureCreateObjectV1Response**](../Model/SignatureCreateObjectV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `signatureDeleteObjectV1()`

```php
signatureDeleteObjectV1($pkiSignatureID): \eZmaxAPI\Model\SignatureDeleteObjectV1Response
```

Delete an existing Signature



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectSignatureApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiSignatureID = 56; // int | The unique ID of the Signature

try {
    $result = $apiInstance->signatureDeleteObjectV1($pkiSignatureID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectSignatureApi->signatureDeleteObjectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiSignatureID** | **int**| The unique ID of the Signature | |

### Return type

[**\eZmaxAPI\Model\SignatureDeleteObjectV1Response**](../Model/SignatureDeleteObjectV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `signatureEditObjectV1()`

```php
signatureEditObjectV1($pkiSignatureID, $signatureEditObjectV1Request): \eZmaxAPI\Model\SignatureEditObjectV1Response
```

Edit an existing Signature



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectSignatureApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiSignatureID = 56; // int | The unique ID of the Signature
$signatureEditObjectV1Request = new \eZmaxAPI\Model\SignatureEditObjectV1Request(); // \eZmaxAPI\Model\SignatureEditObjectV1Request

try {
    $result = $apiInstance->signatureEditObjectV1($pkiSignatureID, $signatureEditObjectV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectSignatureApi->signatureEditObjectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiSignatureID** | **int**| The unique ID of the Signature | |
| **signatureEditObjectV1Request** | [**\eZmaxAPI\Model\SignatureEditObjectV1Request**](../Model/SignatureEditObjectV1Request.md)|  | |

### Return type

[**\eZmaxAPI\Model\SignatureEditObjectV1Response**](../Model/SignatureEditObjectV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `signatureGetObjectV2()`

```php
signatureGetObjectV2($pkiSignatureID): \eZmaxAPI\Model\SignatureGetObjectV2Response
```

Retrieve an existing Signature



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectSignatureApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiSignatureID = 56; // int | The unique ID of the Signature

try {
    $result = $apiInstance->signatureGetObjectV2($pkiSignatureID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectSignatureApi->signatureGetObjectV2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiSignatureID** | **int**| The unique ID of the Signature | |

### Return type

[**\eZmaxAPI\Model\SignatureGetObjectV2Response**](../Model/SignatureGetObjectV2Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
