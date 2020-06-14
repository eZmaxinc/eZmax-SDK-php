# OpenAPI\Client\ActivesessionApi

All URIs are relative to *https://prod.api.appcluster01.ca-central-1.ezmax.com/rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**call1ObjectActivesessionGetCurrentGet**](ActivesessionApi.md#call1ObjectActivesessionGetCurrentGet) | **GET** /1/object/activesession/getCurrent | Get Current Activesession



## call1ObjectActivesessionGetCurrentGet

> \OpenAPI\Client\Model\Response1ObjectActivesessionGetCurrent call1ObjectActivesessionGetCurrentGet()

Get Current Activesession

Todo Description

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ActivesessionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->call1ObjectActivesessionGetCurrentGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivesessionApi->call1ObjectActivesessionGetCurrentGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\Response1ObjectActivesessionGetCurrent**](../Model/Response1ObjectActivesessionGetCurrent.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

