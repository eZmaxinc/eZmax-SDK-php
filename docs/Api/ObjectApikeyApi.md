# eZmaxAPI\ObjectApikeyApi

All URIs are relative to https://prod.api.appcluster01.ca-central-1.ezmax.com/rest.

Method | HTTP request | Description
------------- | ------------- | -------------
[**apikeyCreateObjectV1()**](ObjectApikeyApi.md#apikeyCreateObjectV1) | **POST** /1/object/apikey | Create a new Apikey


## `apikeyCreateObjectV1()`

```php
apikeyCreateObjectV1($apikeyCreateObjectV1Request): \eZmaxAPI\Model\ApikeyCreateObjectV1Response
```

Create a new Apikey

The endpoint allows to create one or many elements at once.  The array can contain simple (Just the object) or compound (The object and its child) objects.  Creating compound elements allows to reduce the multiple requests to create all child objects.

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
$apikeyCreateObjectV1Request = array(new \eZmaxAPI\Model\ApikeyCreateObjectV1Request()); // \eZmaxAPI\Model\ApikeyCreateObjectV1Request[]

try {
    $result = $apiInstance->apikeyCreateObjectV1($apikeyCreateObjectV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectApikeyApi->apikeyCreateObjectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **apikeyCreateObjectV1Request** | [**\eZmaxAPI\Model\ApikeyCreateObjectV1Request[]**](../Model/ApikeyCreateObjectV1Request.md)|  |

### Return type

[**\eZmaxAPI\Model\ApikeyCreateObjectV1Response**](../Model/ApikeyCreateObjectV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
