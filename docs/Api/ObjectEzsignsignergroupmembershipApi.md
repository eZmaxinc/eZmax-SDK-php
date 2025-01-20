# eZmaxAPI\ObjectEzsignsignergroupmembershipApi

All URIs are relative to https://prod.api.appcluster01.ca-central-1.ezmax.com/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**ezsignsignergroupmembershipCreateObjectV1()**](ObjectEzsignsignergroupmembershipApi.md#ezsignsignergroupmembershipCreateObjectV1) | **POST** /1/object/ezsignsignergroupmembership | Create a new Ezsignsignergroupmembership |
| [**ezsignsignergroupmembershipDeleteObjectV1()**](ObjectEzsignsignergroupmembershipApi.md#ezsignsignergroupmembershipDeleteObjectV1) | **DELETE** /1/object/ezsignsignergroupmembership/{pkiEzsignsignergroupmembershipID} | Delete an existing Ezsignsignergroupmembership |
| [**ezsignsignergroupmembershipGetObjectV2()**](ObjectEzsignsignergroupmembershipApi.md#ezsignsignergroupmembershipGetObjectV2) | **GET** /2/object/ezsignsignergroupmembership/{pkiEzsignsignergroupmembershipID} | Retrieve an existing Ezsignsignergroupmembership |


## `ezsignsignergroupmembershipCreateObjectV1()`

```php
ezsignsignergroupmembershipCreateObjectV1($ezsignsignergroupmembershipCreateObjectV1Request): \eZmaxAPI\Model\EzsignsignergroupmembershipCreateObjectV1Response
```

Create a new Ezsignsignergroupmembership

The endpoint allows to create one or many elements at once.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsignsignergroupmembershipApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ezsignsignergroupmembershipCreateObjectV1Request = new \eZmaxAPI\Model\EzsignsignergroupmembershipCreateObjectV1Request(); // \eZmaxAPI\Model\EzsignsignergroupmembershipCreateObjectV1Request

try {
    $result = $apiInstance->ezsignsignergroupmembershipCreateObjectV1($ezsignsignergroupmembershipCreateObjectV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsignsignergroupmembershipApi->ezsignsignergroupmembershipCreateObjectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ezsignsignergroupmembershipCreateObjectV1Request** | [**\eZmaxAPI\Model\EzsignsignergroupmembershipCreateObjectV1Request**](../Model/EzsignsignergroupmembershipCreateObjectV1Request.md)|  | |

### Return type

[**\eZmaxAPI\Model\EzsignsignergroupmembershipCreateObjectV1Response**](../Model/EzsignsignergroupmembershipCreateObjectV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezsignsignergroupmembershipDeleteObjectV1()`

```php
ezsignsignergroupmembershipDeleteObjectV1($pkiEzsignsignergroupmembershipID): \eZmaxAPI\Model\CommonResponse
```

Delete an existing Ezsignsignergroupmembership



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsignsignergroupmembershipApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzsignsignergroupmembershipID = 56; // int | The unique ID of the Ezsignsignergroupmembership

try {
    $result = $apiInstance->ezsignsignergroupmembershipDeleteObjectV1($pkiEzsignsignergroupmembershipID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsignsignergroupmembershipApi->ezsignsignergroupmembershipDeleteObjectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiEzsignsignergroupmembershipID** | **int**| The unique ID of the Ezsignsignergroupmembership | |

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

## `ezsignsignergroupmembershipGetObjectV2()`

```php
ezsignsignergroupmembershipGetObjectV2($pkiEzsignsignergroupmembershipID): \eZmaxAPI\Model\EzsignsignergroupmembershipGetObjectV2Response
```

Retrieve an existing Ezsignsignergroupmembership



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsignsignergroupmembershipApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzsignsignergroupmembershipID = 56; // int | The unique ID of the Ezsignsignergroupmembership

try {
    $result = $apiInstance->ezsignsignergroupmembershipGetObjectV2($pkiEzsignsignergroupmembershipID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsignsignergroupmembershipApi->ezsignsignergroupmembershipGetObjectV2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiEzsignsignergroupmembershipID** | **int**| The unique ID of the Ezsignsignergroupmembership | |

### Return type

[**\eZmaxAPI\Model\EzsignsignergroupmembershipGetObjectV2Response**](../Model/EzsignsignergroupmembershipGetObjectV2Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
