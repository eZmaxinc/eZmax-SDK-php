# eZmaxAPI\ModuleAuthenticateApi

All URIs are relative to https://prod.api.appcluster01.ca-central-1.ezmax.com/rest.

Method | HTTP request | Description
------------- | ------------- | -------------
[**authenticateAuthenticateV2()**](ModuleAuthenticateApi.md#authenticateAuthenticateV2) | **POST** /2/module/authenticate/authenticate/ezsignuser/{eSessionType} | Authenticate a user


## `authenticateAuthenticateV2()`

```php
authenticateAuthenticateV2($eSessionType, $authenticateAuthenticateV2Request): \eZmaxAPI\Model\AuthenticateAuthenticateV2Response
```

Authenticate a user

This endpoint authenticates a user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ModuleAuthenticateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$eSessionType = 'eSessionType_example'; // string
$authenticateAuthenticateV2Request = new \eZmaxAPI\Model\AuthenticateAuthenticateV2Request(); // \eZmaxAPI\Model\AuthenticateAuthenticateV2Request

try {
    $result = $apiInstance->authenticateAuthenticateV2($eSessionType, $authenticateAuthenticateV2Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModuleAuthenticateApi->authenticateAuthenticateV2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **eSessionType** | **string**|  |
 **authenticateAuthenticateV2Request** | [**\eZmaxAPI\Model\AuthenticateAuthenticateV2Request**](../Model/AuthenticateAuthenticateV2Request.md)|  |

### Return type

[**\eZmaxAPI\Model\AuthenticateAuthenticateV2Response**](../Model/AuthenticateAuthenticateV2Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
