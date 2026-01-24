# eZmaxAPI\ObjectSystemconfigurationApi



All URIs are relative to https://prod.api.appcluster01.ca-central-1.ezmax.com/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**systemconfigurationEditObjectV2()**](ObjectSystemconfigurationApi.md#systemconfigurationEditObjectV2) | **PUT** /2/object/systemconfiguration/{pkiSystemconfigurationID} | Edit an existing Systemconfiguration |
| [**systemconfigurationGetObjectV2()**](ObjectSystemconfigurationApi.md#systemconfigurationGetObjectV2) | **GET** /2/object/systemconfiguration/{pkiSystemconfigurationID} | Retrieve an existing Systemconfiguration |


## `systemconfigurationEditObjectV2()`

```php
systemconfigurationEditObjectV2($pkiSystemconfigurationID, $systemconfigurationEditObjectV2Request): \eZmaxAPI\Model\SystemconfigurationEditObjectV2Response
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
$systemconfigurationEditObjectV2Request = new \eZmaxAPI\Model\SystemconfigurationEditObjectV2Request(); // \eZmaxAPI\Model\SystemconfigurationEditObjectV2Request

try {
    $result = $apiInstance->systemconfigurationEditObjectV2($pkiSystemconfigurationID, $systemconfigurationEditObjectV2Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectSystemconfigurationApi->systemconfigurationEditObjectV2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiSystemconfigurationID** | **int**| The unique ID of the Systemconfiguration | |
| **systemconfigurationEditObjectV2Request** | [**\eZmaxAPI\Model\SystemconfigurationEditObjectV2Request**](../Model/SystemconfigurationEditObjectV2Request.md)|  | |

### Return type

[**\eZmaxAPI\Model\SystemconfigurationEditObjectV2Response**](../Model/SystemconfigurationEditObjectV2Response.md)

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
