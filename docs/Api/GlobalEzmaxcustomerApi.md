# eZmaxAPI\GlobalEzmaxcustomerApi

All URIs are relative to https://prod.api.appcluster01.ca-central-1.ezmax.com/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**globalEzmaxcustomerGetConfigurationV1()**](GlobalEzmaxcustomerApi.md#globalEzmaxcustomerGetConfigurationV1) | **GET** /1/ezmaxcustomer/{pksEzmaxcustomerCode}/getConfiguration | Get ezmaxcustomer configuration |


## `globalEzmaxcustomerGetConfigurationV1()`

```php
globalEzmaxcustomerGetConfigurationV1($pksEzmaxcustomerCode): \eZmaxAPI\Model\GlobalEzmaxcustomerGetConfigurationV1Response
```

Get ezmaxcustomer configuration

Retrieve the ezmaxcustomer's specific configuration. This will help locate the proper region (ie: sInfrastructureregionCode) and the proper environment (ie: sInfrastructureenvironmenttypeDescription) where the customer's data is stored.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\GlobalEzmaxcustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pksEzmaxcustomerCode = 'pksEzmaxcustomerCode_example'; // string

try {
    $result = $apiInstance->globalEzmaxcustomerGetConfigurationV1($pksEzmaxcustomerCode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobalEzmaxcustomerApi->globalEzmaxcustomerGetConfigurationV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pksEzmaxcustomerCode** | **string**|  | |

### Return type

[**\eZmaxAPI\Model\GlobalEzmaxcustomerGetConfigurationV1Response**](../Model/GlobalEzmaxcustomerGetConfigurationV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
