# eZmaxAPI\ObjectEzsignsignatureApi

All URIs are relative to https://prod.api.appcluster01.ca-central-1.ezmax.com/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**ezsignsignatureCreateObjectV1()**](ObjectEzsignsignatureApi.md#ezsignsignatureCreateObjectV1) | **POST** /1/object/ezsignsignature | Create a new Ezsignsignature |
| [**ezsignsignatureCreateObjectV2()**](ObjectEzsignsignatureApi.md#ezsignsignatureCreateObjectV2) | **POST** /2/object/ezsignsignature | Create a new Ezsignsignature |
| [**ezsignsignatureCreateObjectV3()**](ObjectEzsignsignatureApi.md#ezsignsignatureCreateObjectV3) | **POST** /3/object/ezsignsignature | Create a new Ezsignsignature |
| [**ezsignsignatureDeleteObjectV1()**](ObjectEzsignsignatureApi.md#ezsignsignatureDeleteObjectV1) | **DELETE** /1/object/ezsignsignature/{pkiEzsignsignatureID} | Delete an existing Ezsignsignature |
| [**ezsignsignatureEditObjectV2()**](ObjectEzsignsignatureApi.md#ezsignsignatureEditObjectV2) | **PUT** /2/object/ezsignsignature/{pkiEzsignsignatureID} | Edit an existing Ezsignsignature |
| [**ezsignsignatureGetEzsignsignatureattachmentV1()**](ObjectEzsignsignatureApi.md#ezsignsignatureGetEzsignsignatureattachmentV1) | **GET** /1/object/ezsignsignature/{pkiEzsignsignatureID}/getEzsignsignatureattachment | Retrieve an existing Ezsignsignature&#39;s Ezsignsignatureattachments |
| [**ezsignsignatureGetEzsignsignaturesAutomaticV1()**](ObjectEzsignsignatureApi.md#ezsignsignatureGetEzsignsignaturesAutomaticV1) | **GET** /1/object/ezsignsignature/getEzsignsignaturesAutomatic | Retrieve all automatic Ezsignsignatures |
| [**ezsignsignatureGetObjectV3()**](ObjectEzsignsignatureApi.md#ezsignsignatureGetObjectV3) | **GET** /3/object/ezsignsignature/{pkiEzsignsignatureID} | Retrieve an existing Ezsignsignature |
| [**ezsignsignatureSignV1()**](ObjectEzsignsignatureApi.md#ezsignsignatureSignV1) | **POST** /1/object/ezsignsignature/{pkiEzsignsignatureID}/sign | Sign the Ezsignsignature |


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


$apiInstance = new eZmaxAPI\Api\ObjectEzsignsignatureApi(
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
    echo 'Exception when calling ObjectEzsignsignatureApi->ezsignsignatureCreateObjectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ezsignsignatureCreateObjectV1Request** | [**\eZmaxAPI\Model\EzsignsignatureCreateObjectV1Request[]**](../Model/EzsignsignatureCreateObjectV1Request.md)|  | |

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

## `ezsignsignatureCreateObjectV2()`

```php
ezsignsignatureCreateObjectV2($ezsignsignatureCreateObjectV2Request): \eZmaxAPI\Model\EzsignsignatureCreateObjectV2Response
```

Create a new Ezsignsignature

The endpoint allows to create one or many elements at once.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsignsignatureApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ezsignsignatureCreateObjectV2Request = new \eZmaxAPI\Model\EzsignsignatureCreateObjectV2Request(); // \eZmaxAPI\Model\EzsignsignatureCreateObjectV2Request

try {
    $result = $apiInstance->ezsignsignatureCreateObjectV2($ezsignsignatureCreateObjectV2Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsignsignatureApi->ezsignsignatureCreateObjectV2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ezsignsignatureCreateObjectV2Request** | [**\eZmaxAPI\Model\EzsignsignatureCreateObjectV2Request**](../Model/EzsignsignatureCreateObjectV2Request.md)|  | |

### Return type

[**\eZmaxAPI\Model\EzsignsignatureCreateObjectV2Response**](../Model/EzsignsignatureCreateObjectV2Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezsignsignatureCreateObjectV3()`

```php
ezsignsignatureCreateObjectV3($ezsignsignatureCreateObjectV3Request): \eZmaxAPI\Model\EzsignsignatureCreateObjectV3Response
```

Create a new Ezsignsignature

The endpoint allows to create one or many elements at once.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsignsignatureApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ezsignsignatureCreateObjectV3Request = new \eZmaxAPI\Model\EzsignsignatureCreateObjectV3Request(); // \eZmaxAPI\Model\EzsignsignatureCreateObjectV3Request

try {
    $result = $apiInstance->ezsignsignatureCreateObjectV3($ezsignsignatureCreateObjectV3Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsignsignatureApi->ezsignsignatureCreateObjectV3: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ezsignsignatureCreateObjectV3Request** | [**\eZmaxAPI\Model\EzsignsignatureCreateObjectV3Request**](../Model/EzsignsignatureCreateObjectV3Request.md)|  | |

### Return type

[**\eZmaxAPI\Model\EzsignsignatureCreateObjectV3Response**](../Model/EzsignsignatureCreateObjectV3Response.md)

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


$apiInstance = new eZmaxAPI\Api\ObjectEzsignsignatureApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzsignsignatureID = 56; // int

try {
    $result = $apiInstance->ezsignsignatureDeleteObjectV1($pkiEzsignsignatureID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsignsignatureApi->ezsignsignatureDeleteObjectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiEzsignsignatureID** | **int**|  | |

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

## `ezsignsignatureEditObjectV2()`

```php
ezsignsignatureEditObjectV2($pkiEzsignsignatureID, $ezsignsignatureEditObjectV2Request): \eZmaxAPI\Model\EzsignsignatureEditObjectV2Response
```

Edit an existing Ezsignsignature



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsignsignatureApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzsignsignatureID = 56; // int
$ezsignsignatureEditObjectV2Request = new \eZmaxAPI\Model\EzsignsignatureEditObjectV2Request(); // \eZmaxAPI\Model\EzsignsignatureEditObjectV2Request

try {
    $result = $apiInstance->ezsignsignatureEditObjectV2($pkiEzsignsignatureID, $ezsignsignatureEditObjectV2Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsignsignatureApi->ezsignsignatureEditObjectV2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiEzsignsignatureID** | **int**|  | |
| **ezsignsignatureEditObjectV2Request** | [**\eZmaxAPI\Model\EzsignsignatureEditObjectV2Request**](../Model/EzsignsignatureEditObjectV2Request.md)|  | |

### Return type

[**\eZmaxAPI\Model\EzsignsignatureEditObjectV2Response**](../Model/EzsignsignatureEditObjectV2Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezsignsignatureGetEzsignsignatureattachmentV1()`

```php
ezsignsignatureGetEzsignsignatureattachmentV1($pkiEzsignsignatureID): \eZmaxAPI\Model\EzsignsignatureGetEzsignsignatureattachmentV1Response
```

Retrieve an existing Ezsignsignature's Ezsignsignatureattachments

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsignsignatureApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzsignsignatureID = 56; // int

try {
    $result = $apiInstance->ezsignsignatureGetEzsignsignatureattachmentV1($pkiEzsignsignatureID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsignsignatureApi->ezsignsignatureGetEzsignsignatureattachmentV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiEzsignsignatureID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\EzsignsignatureGetEzsignsignatureattachmentV1Response**](../Model/EzsignsignatureGetEzsignsignatureattachmentV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezsignsignatureGetEzsignsignaturesAutomaticV1()`

```php
ezsignsignatureGetEzsignsignaturesAutomaticV1(): \eZmaxAPI\Model\EzsignsignatureGetEzsignsignaturesAutomaticV1Response
```

Retrieve all automatic Ezsignsignatures

Return all the Ezsignsignatures that can be signed by the current user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsignsignatureApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->ezsignsignatureGetEzsignsignaturesAutomaticV1();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsignsignatureApi->ezsignsignatureGetEzsignsignaturesAutomaticV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\eZmaxAPI\Model\EzsignsignatureGetEzsignsignaturesAutomaticV1Response**](../Model/EzsignsignatureGetEzsignsignaturesAutomaticV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezsignsignatureGetObjectV3()`

```php
ezsignsignatureGetObjectV3($pkiEzsignsignatureID): \eZmaxAPI\Model\EzsignsignatureGetObjectV3Response
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


$apiInstance = new eZmaxAPI\Api\ObjectEzsignsignatureApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzsignsignatureID = 56; // int

try {
    $result = $apiInstance->ezsignsignatureGetObjectV3($pkiEzsignsignatureID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsignsignatureApi->ezsignsignatureGetObjectV3: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiEzsignsignatureID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\EzsignsignatureGetObjectV3Response**](../Model/EzsignsignatureGetObjectV3Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezsignsignatureSignV1()`

```php
ezsignsignatureSignV1($pkiEzsignsignatureID, $ezsignsignatureSignV1Request): \eZmaxAPI\Model\EzsignsignatureSignV1Response
```

Sign the Ezsignsignature



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsignsignatureApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzsignsignatureID = 56; // int
$ezsignsignatureSignV1Request = new \eZmaxAPI\Model\EzsignsignatureSignV1Request(); // \eZmaxAPI\Model\EzsignsignatureSignV1Request

try {
    $result = $apiInstance->ezsignsignatureSignV1($pkiEzsignsignatureID, $ezsignsignatureSignV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsignsignatureApi->ezsignsignatureSignV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiEzsignsignatureID** | **int**|  | |
| **ezsignsignatureSignV1Request** | [**\eZmaxAPI\Model\EzsignsignatureSignV1Request**](../Model/EzsignsignatureSignV1Request.md)|  | |

### Return type

[**\eZmaxAPI\Model\EzsignsignatureSignV1Response**](../Model/EzsignsignatureSignV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
