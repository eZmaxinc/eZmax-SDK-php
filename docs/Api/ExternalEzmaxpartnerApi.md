# eZmaxAPI\ExternalEzmaxpartnerApi



All URIs are relative to https://prod.api.appcluster01.ca-central-1.ezmax.com/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**ezmaxpartnerSubscribeV1()**](ExternalEzmaxpartnerApi.md#ezmaxpartnerSubscribeV1) | **POST** /1/external/ezmaxpartner/subscribe | Subscribe to an Ezmaxparnerproductstage |


## `ezmaxpartnerSubscribeV1()`

```php
ezmaxpartnerSubscribeV1($ezmaxpartnerSubscribeV1Request): \eZmaxAPI\Model\EzmaxpartnerSubscribeV1Response
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


$apiInstance = new eZmaxAPI\Api\ExternalEzmaxpartnerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ezmaxpartnerSubscribeV1Request = new \eZmaxAPI\Model\EzmaxpartnerSubscribeV1Request(); // \eZmaxAPI\Model\EzmaxpartnerSubscribeV1Request | 

try {
    $result = $apiInstance->ezmaxpartnerSubscribeV1($ezmaxpartnerSubscribeV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExternalEzmaxpartnerApi->ezmaxpartnerSubscribeV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ezmaxpartnerSubscribeV1Request** | [**\eZmaxAPI\Model\EzmaxpartnerSubscribeV1Request**](../Model/EzmaxpartnerSubscribeV1Request.md)|  | |

### Return type

[**\eZmaxAPI\Model\EzmaxpartnerSubscribeV1Response**](../Model/EzmaxpartnerSubscribeV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
