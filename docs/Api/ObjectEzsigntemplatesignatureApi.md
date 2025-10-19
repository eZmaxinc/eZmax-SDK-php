# eZmaxAPI\ObjectEzsigntemplatesignatureApi

All URIs are relative to https://prod.api.appcluster01.ca-central-1.ezmax.com/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**ezsigntemplatesignatureCreateObjectV2()**](ObjectEzsigntemplatesignatureApi.md#ezsigntemplatesignatureCreateObjectV2) | **POST** /2/object/ezsigntemplatesignature | Create a new Ezsigntemplatesignature |
| [**ezsigntemplatesignatureCreateObjectV3()**](ObjectEzsigntemplatesignatureApi.md#ezsigntemplatesignatureCreateObjectV3) | **POST** /3/object/ezsigntemplatesignature | Create a new Ezsigntemplatesignature |
| [**ezsigntemplatesignatureDeleteObjectV1()**](ObjectEzsigntemplatesignatureApi.md#ezsigntemplatesignatureDeleteObjectV1) | **DELETE** /1/object/ezsigntemplatesignature/{pkiEzsigntemplatesignatureID} | Delete an existing Ezsigntemplatesignature |
| [**ezsigntemplatesignatureEditObjectV2()**](ObjectEzsigntemplatesignatureApi.md#ezsigntemplatesignatureEditObjectV2) | **PUT** /2/object/ezsigntemplatesignature/{pkiEzsigntemplatesignatureID} | Edit an existing Ezsigntemplatesignature |
| [**ezsigntemplatesignatureEditObjectV3()**](ObjectEzsigntemplatesignatureApi.md#ezsigntemplatesignatureEditObjectV3) | **PUT** /3/object/ezsigntemplatesignature/{pkiEzsigntemplatesignatureID} | Edit an existing Ezsigntemplatesignature |
| [**ezsigntemplatesignatureGetObjectV3()**](ObjectEzsigntemplatesignatureApi.md#ezsigntemplatesignatureGetObjectV3) | **GET** /3/object/ezsigntemplatesignature/{pkiEzsigntemplatesignatureID} | Retrieve an existing Ezsigntemplatesignature |
| [**ezsigntemplatesignatureGetObjectV4()**](ObjectEzsigntemplatesignatureApi.md#ezsigntemplatesignatureGetObjectV4) | **GET** /4/object/ezsigntemplatesignature/{pkiEzsigntemplatesignatureID} | Retrieve an existing Ezsigntemplatesignature |


## `ezsigntemplatesignatureCreateObjectV2()`

```php
ezsigntemplatesignatureCreateObjectV2($ezsigntemplatesignatureCreateObjectV2Request): \eZmaxAPI\Model\EzsigntemplatesignatureCreateObjectV2Response
```

Create a new Ezsigntemplatesignature

The endpoint allows to create one or many elements at once.  Major step overhaul.  Endpoints that existed before version 1.3 do not allow you to combine forms and signatures in the same step. The step numbers are different from those indicated by endpoints added since version 1.3. This endpoint is compatible with endpoints that existed before 1.3 but are not compatible with those added since 1.3.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsigntemplatesignatureApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ezsigntemplatesignatureCreateObjectV2Request = new \eZmaxAPI\Model\EzsigntemplatesignatureCreateObjectV2Request(); // \eZmaxAPI\Model\EzsigntemplatesignatureCreateObjectV2Request

try {
    $result = $apiInstance->ezsigntemplatesignatureCreateObjectV2($ezsigntemplatesignatureCreateObjectV2Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsigntemplatesignatureApi->ezsigntemplatesignatureCreateObjectV2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ezsigntemplatesignatureCreateObjectV2Request** | [**\eZmaxAPI\Model\EzsigntemplatesignatureCreateObjectV2Request**](../Model/EzsigntemplatesignatureCreateObjectV2Request.md)|  | |

### Return type

[**\eZmaxAPI\Model\EzsigntemplatesignatureCreateObjectV2Response**](../Model/EzsigntemplatesignatureCreateObjectV2Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezsigntemplatesignatureCreateObjectV3()`

```php
ezsigntemplatesignatureCreateObjectV3($ezsigntemplatesignatureCreateObjectV3Request): \eZmaxAPI\Model\EzsigntemplatesignatureCreateObjectV3Response
```

Create a new Ezsigntemplatesignature

The endpoint allows to create one or many elements at once.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsigntemplatesignatureApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ezsigntemplatesignatureCreateObjectV3Request = new \eZmaxAPI\Model\EzsigntemplatesignatureCreateObjectV3Request(); // \eZmaxAPI\Model\EzsigntemplatesignatureCreateObjectV3Request

try {
    $result = $apiInstance->ezsigntemplatesignatureCreateObjectV3($ezsigntemplatesignatureCreateObjectV3Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsigntemplatesignatureApi->ezsigntemplatesignatureCreateObjectV3: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ezsigntemplatesignatureCreateObjectV3Request** | [**\eZmaxAPI\Model\EzsigntemplatesignatureCreateObjectV3Request**](../Model/EzsigntemplatesignatureCreateObjectV3Request.md)|  | |

### Return type

[**\eZmaxAPI\Model\EzsigntemplatesignatureCreateObjectV3Response**](../Model/EzsigntemplatesignatureCreateObjectV3Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezsigntemplatesignatureDeleteObjectV1()`

```php
ezsigntemplatesignatureDeleteObjectV1($pkiEzsigntemplatesignatureID): \eZmaxAPI\Model\EzsigntemplatesignatureDeleteObjectV1Response
```

Delete an existing Ezsigntemplatesignature



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsigntemplatesignatureApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzsigntemplatesignatureID = 56; // int

try {
    $result = $apiInstance->ezsigntemplatesignatureDeleteObjectV1($pkiEzsigntemplatesignatureID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsigntemplatesignatureApi->ezsigntemplatesignatureDeleteObjectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiEzsigntemplatesignatureID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\EzsigntemplatesignatureDeleteObjectV1Response**](../Model/EzsigntemplatesignatureDeleteObjectV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezsigntemplatesignatureEditObjectV2()`

```php
ezsigntemplatesignatureEditObjectV2($pkiEzsigntemplatesignatureID, $ezsigntemplatesignatureEditObjectV2Request): \eZmaxAPI\Model\EzsigntemplatesignatureEditObjectV2Response
```

Edit an existing Ezsigntemplatesignature

Major step overhaul.  Endpoints that existed before version 1.3 do not allow you to combine forms and signatures in the same step. The step numbers are different from those indicated by endpoints added since version 1.3. This endpoint is compatible with endpoints that existed before 1.3 but are not compatible with those added since 1.3.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsigntemplatesignatureApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzsigntemplatesignatureID = 56; // int
$ezsigntemplatesignatureEditObjectV2Request = new \eZmaxAPI\Model\EzsigntemplatesignatureEditObjectV2Request(); // \eZmaxAPI\Model\EzsigntemplatesignatureEditObjectV2Request

try {
    $result = $apiInstance->ezsigntemplatesignatureEditObjectV2($pkiEzsigntemplatesignatureID, $ezsigntemplatesignatureEditObjectV2Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsigntemplatesignatureApi->ezsigntemplatesignatureEditObjectV2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiEzsigntemplatesignatureID** | **int**|  | |
| **ezsigntemplatesignatureEditObjectV2Request** | [**\eZmaxAPI\Model\EzsigntemplatesignatureEditObjectV2Request**](../Model/EzsigntemplatesignatureEditObjectV2Request.md)|  | |

### Return type

[**\eZmaxAPI\Model\EzsigntemplatesignatureEditObjectV2Response**](../Model/EzsigntemplatesignatureEditObjectV2Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezsigntemplatesignatureEditObjectV3()`

```php
ezsigntemplatesignatureEditObjectV3($pkiEzsigntemplatesignatureID, $ezsigntemplatesignatureEditObjectV3Request): \eZmaxAPI\Model\EzsigntemplatesignatureEditObjectV3Response
```

Edit an existing Ezsigntemplatesignature



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsigntemplatesignatureApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzsigntemplatesignatureID = 56; // int
$ezsigntemplatesignatureEditObjectV3Request = new \eZmaxAPI\Model\EzsigntemplatesignatureEditObjectV3Request(); // \eZmaxAPI\Model\EzsigntemplatesignatureEditObjectV3Request

try {
    $result = $apiInstance->ezsigntemplatesignatureEditObjectV3($pkiEzsigntemplatesignatureID, $ezsigntemplatesignatureEditObjectV3Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsigntemplatesignatureApi->ezsigntemplatesignatureEditObjectV3: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiEzsigntemplatesignatureID** | **int**|  | |
| **ezsigntemplatesignatureEditObjectV3Request** | [**\eZmaxAPI\Model\EzsigntemplatesignatureEditObjectV3Request**](../Model/EzsigntemplatesignatureEditObjectV3Request.md)|  | |

### Return type

[**\eZmaxAPI\Model\EzsigntemplatesignatureEditObjectV3Response**](../Model/EzsigntemplatesignatureEditObjectV3Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezsigntemplatesignatureGetObjectV3()`

```php
ezsigntemplatesignatureGetObjectV3($pkiEzsigntemplatesignatureID): \eZmaxAPI\Model\EzsigntemplatesignatureGetObjectV3Response
```

Retrieve an existing Ezsigntemplatesignature

Major step overhaul.  Endpoints that existed before version 1.3 do not allow you to combine forms and signatures in the same step. The step numbers are different from those indicated by endpoints added since version 1.3. This endpoint is compatible with endpoints that existed before 1.3 but are not compatible with those added since 1.3.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsigntemplatesignatureApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzsigntemplatesignatureID = 56; // int

try {
    $result = $apiInstance->ezsigntemplatesignatureGetObjectV3($pkiEzsigntemplatesignatureID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsigntemplatesignatureApi->ezsigntemplatesignatureGetObjectV3: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiEzsigntemplatesignatureID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\EzsigntemplatesignatureGetObjectV3Response**](../Model/EzsigntemplatesignatureGetObjectV3Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezsigntemplatesignatureGetObjectV4()`

```php
ezsigntemplatesignatureGetObjectV4($pkiEzsigntemplatesignatureID): \eZmaxAPI\Model\EzsigntemplatesignatureGetObjectV4Response
```

Retrieve an existing Ezsigntemplatesignature



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsigntemplatesignatureApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzsigntemplatesignatureID = 56; // int

try {
    $result = $apiInstance->ezsigntemplatesignatureGetObjectV4($pkiEzsigntemplatesignatureID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsigntemplatesignatureApi->ezsigntemplatesignatureGetObjectV4: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiEzsigntemplatesignatureID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\EzsigntemplatesignatureGetObjectV4Response**](../Model/EzsigntemplatesignatureGetObjectV4Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
