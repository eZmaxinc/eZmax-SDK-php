# eZmaxAPI\ObjectSystemconfigurationApi

All URIs are relative to https://prod.api.appcluster01.ca-central-1.ezmax.com/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**systemconfigurationEditObjectV1()**](ObjectSystemconfigurationApi.md#systemconfigurationEditObjectV1) | **PUT** /1/object/systemconfiguration/{pkiSystemconfigurationID} | Edit an existing Systemconfiguration |
| [**systemconfigurationGetObjectV2()**](ObjectSystemconfigurationApi.md#systemconfigurationGetObjectV2) | **GET** /2/object/systemconfiguration/{pkiSystemconfigurationID} | Retrieve an existing Systemconfiguration |


## `systemconfigurationEditObjectV1()`

```php
systemconfigurationEditObjectV1($pkiSystemconfigurationID, $systemconfigurationEditObjectV1Request): \eZmaxAPI\Model\SystemconfigurationEditObjectV1Response
```

Edit an existing Systemconfiguration



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectSystemconfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiSystemconfigurationID = 56; // int | The unique ID of the Systemconfiguration
$systemconfigurationEditObjectV1Request = new \eZmaxAPI\Model\SystemconfigurationEditObjectV1Request(); // \eZmaxAPI\Model\SystemconfigurationEditObjectV1Request

try {
    $result = $apiInstance->systemconfigurationEditObjectV1($pkiSystemconfigurationID, $systemconfigurationEditObjectV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectSystemconfigurationApi->systemconfigurationEditObjectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiSystemconfigurationID** | **int**| The unique ID of the Systemconfiguration | |
| **systemconfigurationEditObjectV1Request** | [**\eZmaxAPI\Model\SystemconfigurationEditObjectV1Request**](../Model/SystemconfigurationEditObjectV1Request.md)|  | |

### Return type

[**\eZmaxAPI\Model\SystemconfigurationEditObjectV1Response**](../Model/SystemconfigurationEditObjectV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `systemconfigurationGetObjectV2()`

```php
systemconfigurationGetObjectV2($pkiSystemconfigurationID): \eZmaxAPI\Model\SystemconfigurationGetObjectV2Response
```

Retrieve an existing Systemconfiguration



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectSystemconfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiSystemconfigurationID = 56; // int | The unique ID of the Systemconfiguration

try {
    $result = $apiInstance->systemconfigurationGetObjectV2($pkiSystemconfigurationID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectSystemconfigurationApi->systemconfigurationGetObjectV2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiSystemconfigurationID** | **int**| The unique ID of the Systemconfiguration | |

### Return type

[**\eZmaxAPI\Model\SystemconfigurationGetObjectV2Response**](../Model/SystemconfigurationGetObjectV2Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
