# eZmaxAPI\ModuleUserApi

All URIs are relative to https://prod.api.appcluster01.ca-central-1.ezmax.com/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**userCreateEzsignuserV1()**](ModuleUserApi.md#userCreateEzsignuserV1) | **POST** /1/module/user/createezsignuser | Create a new User of type Ezsignuser |


## `userCreateEzsignuserV1()`

```php
userCreateEzsignuserV1($userCreateEzsignuserV1Request): \eZmaxAPI\Model\UserCreateEzsignuserV1Response
```

Create a new User of type Ezsignuser

The endpoint allows to initiate the creation or a user of type Ezsignuser.  The user will be created only once the email verification process will be completed

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ModuleUserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$userCreateEzsignuserV1Request = array(new \eZmaxAPI\Model\UserCreateEzsignuserV1Request()); // \eZmaxAPI\Model\UserCreateEzsignuserV1Request[]

try {
    $result = $apiInstance->userCreateEzsignuserV1($userCreateEzsignuserV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModuleUserApi->userCreateEzsignuserV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **userCreateEzsignuserV1Request** | [**\eZmaxAPI\Model\UserCreateEzsignuserV1Request[]**](../Model/UserCreateEzsignuserV1Request.md)|  | |

### Return type

[**\eZmaxAPI\Model\UserCreateEzsignuserV1Response**](../Model/UserCreateEzsignuserV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
