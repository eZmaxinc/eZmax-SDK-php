# eZmaxAPI\ObjectEzmaxcustomerApi

All URIs are relative to https://prod.api.appcluster01.ca-central-1.ezmax.com/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**ezmaxcustomerPatchObjectV1()**](ObjectEzmaxcustomerApi.md#ezmaxcustomerPatchObjectV1) | **PATCH** /1/object/ezmaxcustomer/{pkiEzmaxcustomerID} | Patch an existing Ezmaxcustomer |


## `ezmaxcustomerPatchObjectV1()`

```php
ezmaxcustomerPatchObjectV1($pkiEzmaxcustomerID, $ezmaxcustomerPatchObjectV1Request): \eZmaxAPI\Model\EzmaxcustomerPatchObjectV1Response
```

Patch an existing Ezmaxcustomer



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzmaxcustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzmaxcustomerID = 56; // int | The unique ID of the Ezmaxcustomer
$ezmaxcustomerPatchObjectV1Request = new \eZmaxAPI\Model\EzmaxcustomerPatchObjectV1Request(); // \eZmaxAPI\Model\EzmaxcustomerPatchObjectV1Request

try {
    $result = $apiInstance->ezmaxcustomerPatchObjectV1($pkiEzmaxcustomerID, $ezmaxcustomerPatchObjectV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzmaxcustomerApi->ezmaxcustomerPatchObjectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiEzmaxcustomerID** | **int**| The unique ID of the Ezmaxcustomer | |
| **ezmaxcustomerPatchObjectV1Request** | [**\eZmaxAPI\Model\EzmaxcustomerPatchObjectV1Request**](../Model/EzmaxcustomerPatchObjectV1Request.md)|  | |

### Return type

[**\eZmaxAPI\Model\EzmaxcustomerPatchObjectV1Response**](../Model/EzmaxcustomerPatchObjectV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
