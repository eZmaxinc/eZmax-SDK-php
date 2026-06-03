# eZmaxAPI\ModuleEzmaxmaillinglistApi



All URIs are relative to https://prod.api.appcluster01.ca-central-1.ezmax.com/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**ezmaxmaillinglistSubscribeV1()**](ModuleEzmaxmaillinglistApi.md#ezmaxmaillinglistSubscribeV1) | **POST** /1/module/ezmaxmaillinglist/subscribe | Subscribe to specific Ezmaxmaillinglist |


## `ezmaxmaillinglistSubscribeV1()`

```php
ezmaxmaillinglistSubscribeV1($ezmaxmaillinglistSubscribeV1Request): \eZmaxAPI\Model\EzmaxmaillinglistSubscribeV1Response
```

Subscribe to specific Ezmaxmaillinglist

Users can subscribe to specific Ezmaxmaillinglist

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ModuleEzmaxmaillinglistApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ezmaxmaillinglistSubscribeV1Request = new \eZmaxAPI\Model\EzmaxmaillinglistSubscribeV1Request(); // \eZmaxAPI\Model\EzmaxmaillinglistSubscribeV1Request | 

try {
    $result = $apiInstance->ezmaxmaillinglistSubscribeV1($ezmaxmaillinglistSubscribeV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModuleEzmaxmaillinglistApi->ezmaxmaillinglistSubscribeV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ezmaxmaillinglistSubscribeV1Request** | [**\eZmaxAPI\Model\EzmaxmaillinglistSubscribeV1Request**](../Model/EzmaxmaillinglistSubscribeV1Request.md)|  | |

### Return type

[**\eZmaxAPI\Model\EzmaxmaillinglistSubscribeV1Response**](../Model/EzmaxmaillinglistSubscribeV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
