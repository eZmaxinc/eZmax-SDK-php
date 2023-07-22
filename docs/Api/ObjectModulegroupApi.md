# eZmaxAPI\ObjectModulegroupApi

All URIs are relative to https://prod.api.appcluster01.ca-central-1.ezmax.com/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**modulegroupGetAllV1()**](ObjectModulegroupApi.md#modulegroupGetAllV1) | **GET** /1/object/modulegroup/getAll/{eContext} | Retrieve all Modulegroups |


## `modulegroupGetAllV1()`

```php
modulegroupGetAllV1($eContext): \eZmaxAPI\Model\ModulegroupGetAllV1Response
```

Retrieve all Modulegroups

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectModulegroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$eContext = 'eContext_example'; // string | The context of the Modulegroup

try {
    $result = $apiInstance->modulegroupGetAllV1($eContext);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectModulegroupApi->modulegroupGetAllV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **eContext** | **string**| The context of the Modulegroup | |

### Return type

[**\eZmaxAPI\Model\ModulegroupGetAllV1Response**](../Model/ModulegroupGetAllV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
