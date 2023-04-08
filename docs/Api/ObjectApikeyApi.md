# eZmaxAPI\ObjectApikeyApi

All URIs are relative to https://prod.api.appcluster01.ca-central-1.ezmax.com/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apikeyCreateObjectV2()**](ObjectApikeyApi.md#apikeyCreateObjectV2) | **POST** /2/object/apikey | Create a new Apikey |


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
