# eZmaxAPI\Client\ObjectActivesessionApi

All URIs are relative to *https://prod.api.appcluster01.ca-central-1.ezmax.com/rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**objectActivesessionGetCurrentV1**](ObjectActivesessionApi.md#objectActivesessionGetCurrentV1) | **GET** /1/object/activesession/getCurrent | Get Current Activesession



## objectActivesessionGetCurrentV1

> \eZmaxAPI\Client\Model\ObjectActivesessionGetCurrentV1Response objectActivesessionGetCurrentV1()

Get Current Activesession

Retrieve the details about the current activesession

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Client\Api\ObjectActivesessionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->objectActivesessionGetCurrentV1();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectActivesessionApi->objectActivesessionGetCurrentV1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\eZmaxAPI\Client\Model\ObjectActivesessionGetCurrentV1Response**](../Model/ObjectActivesessionGetCurrentV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

