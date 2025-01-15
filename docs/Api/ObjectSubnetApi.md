# eZmaxAPI\ObjectSubnetApi

All URIs are relative to https://prod.api.appcluster01.ca-central-1.ezmax.com/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**subnetCreateObjectV1()**](ObjectSubnetApi.md#subnetCreateObjectV1) | **POST** /1/object/subnet | Create a new Subnet |
| [**subnetDeleteObjectV1()**](ObjectSubnetApi.md#subnetDeleteObjectV1) | **DELETE** /1/object/subnet/{pkiSubnetID} | Delete an existing Subnet |
| [**subnetEditObjectV1()**](ObjectSubnetApi.md#subnetEditObjectV1) | **PUT** /1/object/subnet/{pkiSubnetID} | Edit an existing Subnet |
| [**subnetGetObjectV2()**](ObjectSubnetApi.md#subnetGetObjectV2) | **GET** /2/object/subnet/{pkiSubnetID} | Retrieve an existing Subnet |


## `subnetCreateObjectV1()`

```php
subnetCreateObjectV1($subnetCreateObjectV1Request): \eZmaxAPI\Model\SubnetCreateObjectV1Response
```

Create a new Subnet

The endpoint allows to create one or many elements at once.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectSubnetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subnetCreateObjectV1Request = new \eZmaxAPI\Model\SubnetCreateObjectV1Request(); // \eZmaxAPI\Model\SubnetCreateObjectV1Request

try {
    $result = $apiInstance->subnetCreateObjectV1($subnetCreateObjectV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectSubnetApi->subnetCreateObjectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **subnetCreateObjectV1Request** | [**\eZmaxAPI\Model\SubnetCreateObjectV1Request**](../Model/SubnetCreateObjectV1Request.md)|  | |

### Return type

[**\eZmaxAPI\Model\SubnetCreateObjectV1Response**](../Model/SubnetCreateObjectV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `subnetDeleteObjectV1()`

```php
subnetDeleteObjectV1($pkiSubnetID): \eZmaxAPI\Model\CommonResponse
```

Delete an existing Subnet



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectSubnetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiSubnetID = 56; // int | The unique ID of the Subnet

try {
    $result = $apiInstance->subnetDeleteObjectV1($pkiSubnetID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectSubnetApi->subnetDeleteObjectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiSubnetID** | **int**| The unique ID of the Subnet | |

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

## `subnetEditObjectV1()`

```php
subnetEditObjectV1($pkiSubnetID, $subnetEditObjectV1Request): \eZmaxAPI\Model\CommonResponse
```

Edit an existing Subnet



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectSubnetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiSubnetID = 56; // int | The unique ID of the Subnet
$subnetEditObjectV1Request = new \eZmaxAPI\Model\SubnetEditObjectV1Request(); // \eZmaxAPI\Model\SubnetEditObjectV1Request

try {
    $result = $apiInstance->subnetEditObjectV1($pkiSubnetID, $subnetEditObjectV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectSubnetApi->subnetEditObjectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiSubnetID** | **int**| The unique ID of the Subnet | |
| **subnetEditObjectV1Request** | [**\eZmaxAPI\Model\SubnetEditObjectV1Request**](../Model/SubnetEditObjectV1Request.md)|  | |

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

## `subnetGetObjectV2()`

```php
subnetGetObjectV2($pkiSubnetID): \eZmaxAPI\Model\SubnetGetObjectV2Response
```

Retrieve an existing Subnet



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectSubnetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiSubnetID = 56; // int | The unique ID of the Subnet

try {
    $result = $apiInstance->subnetGetObjectV2($pkiSubnetID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectSubnetApi->subnetGetObjectV2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiSubnetID** | **int**| The unique ID of the Subnet | |

### Return type

[**\eZmaxAPI\Model\SubnetGetObjectV2Response**](../Model/SubnetGetObjectV2Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
