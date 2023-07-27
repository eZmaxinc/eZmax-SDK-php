# eZmaxAPI\ObjectApikeyApi

All URIs are relative to https://prod.api.appcluster01.ca-central-1.ezmax.com/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apikeyCreateObjectV2()**](ObjectApikeyApi.md#apikeyCreateObjectV2) | **POST** /2/object/apikey | Create a new Apikey |
| [**apikeyEditObjectV1()**](ObjectApikeyApi.md#apikeyEditObjectV1) | **PUT** /1/object/apikey/{pkiApikeyID} | Edit an existing Apikey |
| [**apikeyEditPermissionsV1()**](ObjectApikeyApi.md#apikeyEditPermissionsV1) | **PUT** /1/object/apikey/{pkiApikeyID}/editPermissions | Edit multiple Permissions |
| [**apikeyGetCorsV1()**](ObjectApikeyApi.md#apikeyGetCorsV1) | **GET** /1/object/apikey/{pkiApikeyID}/getCors | Retrieve an existing Apikey&#39;s cors |
| [**apikeyGetListV1()**](ObjectApikeyApi.md#apikeyGetListV1) | **GET** /1/object/apikey/getList | Retrieve Apikey list |
| [**apikeyGetObjectV2()**](ObjectApikeyApi.md#apikeyGetObjectV2) | **GET** /2/object/apikey/{pkiApikeyID} | Retrieve an existing Apikey |
| [**apikeyGetPermissionsV1()**](ObjectApikeyApi.md#apikeyGetPermissionsV1) | **GET** /1/object/apikey/{pkiApikeyID}/getPermissions | Retrieve an existing Apikey&#39;s Permissions |
| [**apikeyGetSubnetsV1()**](ObjectApikeyApi.md#apikeyGetSubnetsV1) | **GET** /1/object/apikey/{pkiApikeyID}/getSubnets | Retrieve an existing Apikey&#39;s subnets |
| [**apikeyRegenerateV1()**](ObjectApikeyApi.md#apikeyRegenerateV1) | **POST** /1/object/apikey/{pkiApikeyID}/regenerate | Regenerate the Apikey |


## `apikeyCreateObjectV2()`

```php
apikeyCreateObjectV2($apikeyCreateObjectV2Request): \eZmaxAPI\Model\ApikeyCreateObjectV2Response
```

Create a new Apikey

The endpoint allows to create one or many elements at once.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectApikeyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$apikeyCreateObjectV2Request = new \eZmaxAPI\Model\ApikeyCreateObjectV2Request(); // \eZmaxAPI\Model\ApikeyCreateObjectV2Request

try {
    $result = $apiInstance->apikeyCreateObjectV2($apikeyCreateObjectV2Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectApikeyApi->apikeyCreateObjectV2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **apikeyCreateObjectV2Request** | [**\eZmaxAPI\Model\ApikeyCreateObjectV2Request**](../Model/ApikeyCreateObjectV2Request.md)|  | |

### Return type

[**\eZmaxAPI\Model\ApikeyCreateObjectV2Response**](../Model/ApikeyCreateObjectV2Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apikeyEditObjectV1()`

```php
apikeyEditObjectV1($pkiApikeyID, $apikeyEditObjectV1Request): \eZmaxAPI\Model\ApikeyEditObjectV1Response
```

Edit an existing Apikey



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectApikeyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiApikeyID = 56; // int | The unique ID of the Apikey
$apikeyEditObjectV1Request = new \eZmaxAPI\Model\ApikeyEditObjectV1Request(); // \eZmaxAPI\Model\ApikeyEditObjectV1Request

try {
    $result = $apiInstance->apikeyEditObjectV1($pkiApikeyID, $apikeyEditObjectV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectApikeyApi->apikeyEditObjectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiApikeyID** | **int**| The unique ID of the Apikey | |
| **apikeyEditObjectV1Request** | [**\eZmaxAPI\Model\ApikeyEditObjectV1Request**](../Model/ApikeyEditObjectV1Request.md)|  | |

### Return type

[**\eZmaxAPI\Model\ApikeyEditObjectV1Response**](../Model/ApikeyEditObjectV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apikeyEditPermissionsV1()`

```php
apikeyEditPermissionsV1($pkiApikeyID, $apikeyEditPermissionsV1Request): \eZmaxAPI\Model\ApikeyEditPermissionsV1Response
```

Edit multiple Permissions

Using this endpoint, you can edit multiple Permissions at the same time.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectApikeyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiApikeyID = 56; // int
$apikeyEditPermissionsV1Request = new \eZmaxAPI\Model\ApikeyEditPermissionsV1Request(); // \eZmaxAPI\Model\ApikeyEditPermissionsV1Request

try {
    $result = $apiInstance->apikeyEditPermissionsV1($pkiApikeyID, $apikeyEditPermissionsV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectApikeyApi->apikeyEditPermissionsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiApikeyID** | **int**|  | |
| **apikeyEditPermissionsV1Request** | [**\eZmaxAPI\Model\ApikeyEditPermissionsV1Request**](../Model/ApikeyEditPermissionsV1Request.md)|  | |

### Return type

[**\eZmaxAPI\Model\ApikeyEditPermissionsV1Response**](../Model/ApikeyEditPermissionsV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apikeyGetCorsV1()`

```php
apikeyGetCorsV1($pkiApikeyID): \eZmaxAPI\Model\ApikeyGetCorsV1Response
```

Retrieve an existing Apikey's cors

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectApikeyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiApikeyID = 56; // int

try {
    $result = $apiInstance->apikeyGetCorsV1($pkiApikeyID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectApikeyApi->apikeyGetCorsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiApikeyID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\ApikeyGetCorsV1Response**](../Model/ApikeyGetCorsV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apikeyGetListV1()`

```php
apikeyGetListV1($eOrderBy, $iRowMax, $iRowOffset, $acceptLanguage, $sFilter): \eZmaxAPI\Model\ApikeyGetListV1Response
```

Retrieve Apikey list

Enum values that can be filtered in query parameter *sFilter*:  | Variable | Valid values | |---|---|

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectApikeyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$eOrderBy = 'eOrderBy_example'; // string | Specify how you want the results to be sorted
$iRowMax = 10000; // int
$iRowOffset = 0; // int
$acceptLanguage = new \eZmaxAPI\Model\HeaderAcceptLanguage(); // HeaderAcceptLanguage
$sFilter = 'sFilter_example'; // string

try {
    $result = $apiInstance->apikeyGetListV1($eOrderBy, $iRowMax, $iRowOffset, $acceptLanguage, $sFilter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectApikeyApi->apikeyGetListV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **eOrderBy** | **string**| Specify how you want the results to be sorted | [optional] |
| **iRowMax** | **int**|  | [optional] [default to 10000] |
| **iRowOffset** | **int**|  | [optional] [default to 0] |
| **acceptLanguage** | [**HeaderAcceptLanguage**](../Model/.md)|  | [optional] |
| **sFilter** | **string**|  | [optional] |

### Return type

[**\eZmaxAPI\Model\ApikeyGetListV1Response**](../Model/ApikeyGetListV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/vnd.openxmlformats-officedocument.spreadsheetml.sheet`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apikeyGetObjectV2()`

```php
apikeyGetObjectV2($pkiApikeyID): \eZmaxAPI\Model\ApikeyGetObjectV2Response
```

Retrieve an existing Apikey



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectApikeyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiApikeyID = 56; // int | The unique ID of the Apikey

try {
    $result = $apiInstance->apikeyGetObjectV2($pkiApikeyID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectApikeyApi->apikeyGetObjectV2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiApikeyID** | **int**| The unique ID of the Apikey | |

### Return type

[**\eZmaxAPI\Model\ApikeyGetObjectV2Response**](../Model/ApikeyGetObjectV2Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apikeyGetPermissionsV1()`

```php
apikeyGetPermissionsV1($pkiApikeyID): \eZmaxAPI\Model\ApikeyGetPermissionsV1Response
```

Retrieve an existing Apikey's Permissions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectApikeyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiApikeyID = 56; // int

try {
    $result = $apiInstance->apikeyGetPermissionsV1($pkiApikeyID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectApikeyApi->apikeyGetPermissionsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiApikeyID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\ApikeyGetPermissionsV1Response**](../Model/ApikeyGetPermissionsV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apikeyGetSubnetsV1()`

```php
apikeyGetSubnetsV1($pkiApikeyID): \eZmaxAPI\Model\ApikeyGetSubnetsV1Response
```

Retrieve an existing Apikey's subnets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectApikeyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiApikeyID = 56; // int

try {
    $result = $apiInstance->apikeyGetSubnetsV1($pkiApikeyID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectApikeyApi->apikeyGetSubnetsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiApikeyID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\ApikeyGetSubnetsV1Response**](../Model/ApikeyGetSubnetsV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apikeyRegenerateV1()`

```php
apikeyRegenerateV1($pkiApikeyID, $apikeyRegenerateV1Request): \eZmaxAPI\Model\ApikeyRegenerateV1Response
```

Regenerate the Apikey



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectApikeyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiApikeyID = 56; // int
$apikeyRegenerateV1Request = new \eZmaxAPI\Model\ApikeyRegenerateV1Request(); // \eZmaxAPI\Model\ApikeyRegenerateV1Request

try {
    $result = $apiInstance->apikeyRegenerateV1($pkiApikeyID, $apikeyRegenerateV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectApikeyApi->apikeyRegenerateV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiApikeyID** | **int**|  | |
| **apikeyRegenerateV1Request** | [**\eZmaxAPI\Model\ApikeyRegenerateV1Request**](../Model/ApikeyRegenerateV1Request.md)|  | |

### Return type

[**\eZmaxAPI\Model\ApikeyRegenerateV1Response**](../Model/ApikeyRegenerateV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
