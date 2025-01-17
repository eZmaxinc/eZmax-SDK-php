# eZmaxAPI\ObjectEzsignsignergroupApi

All URIs are relative to https://prod.api.appcluster01.ca-central-1.ezmax.com/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**ezsignsignergroupCreateObjectV1()**](ObjectEzsignsignergroupApi.md#ezsignsignergroupCreateObjectV1) | **POST** /1/object/ezsignsignergroup | Create a new Ezsignsignergroup |
| [**ezsignsignergroupDeleteObjectV1()**](ObjectEzsignsignergroupApi.md#ezsignsignergroupDeleteObjectV1) | **DELETE** /1/object/ezsignsignergroup/{pkiEzsignsignergroupID} | Delete an existing Ezsignsignergroup |
| [**ezsignsignergroupEditEzsignsignergroupmembershipsV1()**](ObjectEzsignsignergroupApi.md#ezsignsignergroupEditEzsignsignergroupmembershipsV1) | **PUT** /1/object/ezsignsignergroup/{pkiEzsignsignergroupID}/editEzsignsignergroupmemberships | Edit multiple Ezsignsignergroupmemberships |
| [**ezsignsignergroupEditObjectV1()**](ObjectEzsignsignergroupApi.md#ezsignsignergroupEditObjectV1) | **PUT** /1/object/ezsignsignergroup/{pkiEzsignsignergroupID} | Edit an existing Ezsignsignergroup |
| [**ezsignsignergroupGetEzsignsignergroupmembershipsV1()**](ObjectEzsignsignergroupApi.md#ezsignsignergroupGetEzsignsignergroupmembershipsV1) | **GET** /1/object/ezsignsignergroup/{pkiEzsignsignergroupID}/getEzsignsignergroupmemberships | Retrieve an existing Ezsignsignergroup&#39;s Ezsignsignergroupmemberships |
| [**ezsignsignergroupGetObjectV2()**](ObjectEzsignsignergroupApi.md#ezsignsignergroupGetObjectV2) | **GET** /2/object/ezsignsignergroup/{pkiEzsignsignergroupID} | Retrieve an existing Ezsignsignergroup |


## `ezsignsignergroupCreateObjectV1()`

```php
ezsignsignergroupCreateObjectV1($ezsignsignergroupCreateObjectV1Request): \eZmaxAPI\Model\EzsignsignergroupCreateObjectV1Response
```

Create a new Ezsignsignergroup

The endpoint allows to create one or many elements at once.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsignsignergroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ezsignsignergroupCreateObjectV1Request = new \eZmaxAPI\Model\EzsignsignergroupCreateObjectV1Request(); // \eZmaxAPI\Model\EzsignsignergroupCreateObjectV1Request

try {
    $result = $apiInstance->ezsignsignergroupCreateObjectV1($ezsignsignergroupCreateObjectV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsignsignergroupApi->ezsignsignergroupCreateObjectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ezsignsignergroupCreateObjectV1Request** | [**\eZmaxAPI\Model\EzsignsignergroupCreateObjectV1Request**](../Model/EzsignsignergroupCreateObjectV1Request.md)|  | |

### Return type

[**\eZmaxAPI\Model\EzsignsignergroupCreateObjectV1Response**](../Model/EzsignsignergroupCreateObjectV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezsignsignergroupDeleteObjectV1()`

```php
ezsignsignergroupDeleteObjectV1($pkiEzsignsignergroupID): \eZmaxAPI\Model\EzsignsignergroupDeleteObjectV1Response
```

Delete an existing Ezsignsignergroup



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsignsignergroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzsignsignergroupID = 56; // int | The unique ID of the Ezsignsignergroup

try {
    $result = $apiInstance->ezsignsignergroupDeleteObjectV1($pkiEzsignsignergroupID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsignsignergroupApi->ezsignsignergroupDeleteObjectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiEzsignsignergroupID** | **int**| The unique ID of the Ezsignsignergroup | |

### Return type

[**\eZmaxAPI\Model\EzsignsignergroupDeleteObjectV1Response**](../Model/EzsignsignergroupDeleteObjectV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezsignsignergroupEditEzsignsignergroupmembershipsV1()`

```php
ezsignsignergroupEditEzsignsignergroupmembershipsV1($pkiEzsignsignergroupID, $ezsignsignergroupEditEzsignsignergroupmembershipsV1Request): \eZmaxAPI\Model\EzsignsignergroupEditEzsignsignergroupmembershipsV1Response
```

Edit multiple Ezsignsignergroupmemberships

Using this endpoint, you can edit multiple Ezsignsignergroupmemberships at the same time.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsignsignergroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzsignsignergroupID = 56; // int
$ezsignsignergroupEditEzsignsignergroupmembershipsV1Request = new \eZmaxAPI\Model\EzsignsignergroupEditEzsignsignergroupmembershipsV1Request(); // \eZmaxAPI\Model\EzsignsignergroupEditEzsignsignergroupmembershipsV1Request

try {
    $result = $apiInstance->ezsignsignergroupEditEzsignsignergroupmembershipsV1($pkiEzsignsignergroupID, $ezsignsignergroupEditEzsignsignergroupmembershipsV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsignsignergroupApi->ezsignsignergroupEditEzsignsignergroupmembershipsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiEzsignsignergroupID** | **int**|  | |
| **ezsignsignergroupEditEzsignsignergroupmembershipsV1Request** | [**\eZmaxAPI\Model\EzsignsignergroupEditEzsignsignergroupmembershipsV1Request**](../Model/EzsignsignergroupEditEzsignsignergroupmembershipsV1Request.md)|  | |

### Return type

[**\eZmaxAPI\Model\EzsignsignergroupEditEzsignsignergroupmembershipsV1Response**](../Model/EzsignsignergroupEditEzsignsignergroupmembershipsV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezsignsignergroupEditObjectV1()`

```php
ezsignsignergroupEditObjectV1($pkiEzsignsignergroupID, $ezsignsignergroupEditObjectV1Request): \eZmaxAPI\Model\EzsignsignergroupEditObjectV1Response
```

Edit an existing Ezsignsignergroup



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsignsignergroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzsignsignergroupID = 56; // int | The unique ID of the Ezsignsignergroup
$ezsignsignergroupEditObjectV1Request = new \eZmaxAPI\Model\EzsignsignergroupEditObjectV1Request(); // \eZmaxAPI\Model\EzsignsignergroupEditObjectV1Request

try {
    $result = $apiInstance->ezsignsignergroupEditObjectV1($pkiEzsignsignergroupID, $ezsignsignergroupEditObjectV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsignsignergroupApi->ezsignsignergroupEditObjectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiEzsignsignergroupID** | **int**| The unique ID of the Ezsignsignergroup | |
| **ezsignsignergroupEditObjectV1Request** | [**\eZmaxAPI\Model\EzsignsignergroupEditObjectV1Request**](../Model/EzsignsignergroupEditObjectV1Request.md)|  | |

### Return type

[**\eZmaxAPI\Model\EzsignsignergroupEditObjectV1Response**](../Model/EzsignsignergroupEditObjectV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezsignsignergroupGetEzsignsignergroupmembershipsV1()`

```php
ezsignsignergroupGetEzsignsignergroupmembershipsV1($pkiEzsignsignergroupID): \eZmaxAPI\Model\EzsignsignergroupGetEzsignsignergroupmembershipsV1Response
```

Retrieve an existing Ezsignsignergroup's Ezsignsignergroupmemberships

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsignsignergroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzsignsignergroupID = 56; // int

try {
    $result = $apiInstance->ezsignsignergroupGetEzsignsignergroupmembershipsV1($pkiEzsignsignergroupID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsignsignergroupApi->ezsignsignergroupGetEzsignsignergroupmembershipsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiEzsignsignergroupID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\EzsignsignergroupGetEzsignsignergroupmembershipsV1Response**](../Model/EzsignsignergroupGetEzsignsignergroupmembershipsV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezsignsignergroupGetObjectV2()`

```php
ezsignsignergroupGetObjectV2($pkiEzsignsignergroupID): \eZmaxAPI\Model\EzsignsignergroupGetObjectV2Response
```

Retrieve an existing Ezsignsignergroup



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsignsignergroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzsignsignergroupID = 56; // int | The unique ID of the Ezsignsignergroup

try {
    $result = $apiInstance->ezsignsignergroupGetObjectV2($pkiEzsignsignergroupID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsignsignergroupApi->ezsignsignergroupGetObjectV2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiEzsignsignergroupID** | **int**| The unique ID of the Ezsignsignergroup | |

### Return type

[**\eZmaxAPI\Model\EzsignsignergroupGetObjectV2Response**](../Model/EzsignsignergroupGetObjectV2Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
