# eZmaxAPI\ObjectEzmaxcaseApi

All URIs are relative to https://prod.api.appcluster01.ca-central-1.ezmax.com/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**ezmaxcasePatchObjectV1()**](ObjectEzmaxcaseApi.md#ezmaxcasePatchObjectV1) | **PATCH** /1/object/ezmaxcase/{pkiEzmaxcaseID} | Patch an existing Ezmaxcase |


## `ezmaxcasePatchObjectV1()`

```php
ezmaxcasePatchObjectV1($pkiEzmaxcaseID, $ezmaxcasePatchObjectV1Request): \eZmaxAPI\Model\EzmaxcasePatchObjectV1Response
```

Patch an existing Ezmaxcase



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzmaxcaseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzmaxcaseID = 56; // int | The unique ID of the Ezmaxcase
$ezmaxcasePatchObjectV1Request = new \eZmaxAPI\Model\EzmaxcasePatchObjectV1Request(); // \eZmaxAPI\Model\EzmaxcasePatchObjectV1Request

try {
    $result = $apiInstance->ezmaxcasePatchObjectV1($pkiEzmaxcaseID, $ezmaxcasePatchObjectV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzmaxcaseApi->ezmaxcasePatchObjectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiEzmaxcaseID** | **int**| The unique ID of the Ezmaxcase | |
| **ezmaxcasePatchObjectV1Request** | [**\eZmaxAPI\Model\EzmaxcasePatchObjectV1Request**](../Model/EzmaxcasePatchObjectV1Request.md)|  | |

### Return type

[**\eZmaxAPI\Model\EzmaxcasePatchObjectV1Response**](../Model/EzmaxcasePatchObjectV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
