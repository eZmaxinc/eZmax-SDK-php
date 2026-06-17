# eZmaxAPI\DocumentationEzmaxpartnerApi



All URIs are relative to https://prod.api.appcluster01.ca-central-1.ezmax.com/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**documentationSubscribeV1()**](DocumentationEzmaxpartnerApi.md#documentationSubscribeV1) | **POST** /1/documentation/subscribe | Subscribe to an Ezmaxparnerproductstage |


## `documentationSubscribeV1()`

```php
documentationSubscribeV1($documentationSubscribeV1Request): \eZmaxAPI\Model\DocumentationSubscribeV1Response
```

Subscribe to an Ezmaxparnerproductstage

Subscribe to an Ezmaxparnerproductstage

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\DocumentationEzmaxpartnerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$documentationSubscribeV1Request = new \eZmaxAPI\Model\DocumentationSubscribeV1Request(); // \eZmaxAPI\Model\DocumentationSubscribeV1Request | 

try {
    $result = $apiInstance->documentationSubscribeV1($documentationSubscribeV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentationEzmaxpartnerApi->documentationSubscribeV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **documentationSubscribeV1Request** | [**\eZmaxAPI\Model\DocumentationSubscribeV1Request**](../Model/DocumentationSubscribeV1Request.md)|  | |

### Return type

[**\eZmaxAPI\Model\DocumentationSubscribeV1Response**](../Model/DocumentationSubscribeV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
