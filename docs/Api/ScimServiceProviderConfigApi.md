# eZmaxAPI\ScimServiceProviderConfigApi

All URIs are relative to https://prod.api.appcluster01.ca-central-1.ezmax.com/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**serviceProviderConfigGetObjectScimV2()**](ScimServiceProviderConfigApi.md#serviceProviderConfigGetObjectScimV2) | **GET** /2/scim/ServiceProviderConfig | Get Service Provider Configuration |


## `serviceProviderConfigGetObjectScimV2()`

```php
serviceProviderConfigGetObjectScimV2(): \eZmaxAPI\Model\ScimServiceProviderConfig
```

Get Service Provider Configuration

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new eZmaxAPI\Api\ScimServiceProviderConfigApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->serviceProviderConfigGetObjectScimV2();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScimServiceProviderConfigApi->serviceProviderConfigGetObjectScimV2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\eZmaxAPI\Model\ScimServiceProviderConfig**](../Model/ScimServiceProviderConfig.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
