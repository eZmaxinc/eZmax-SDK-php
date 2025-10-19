# eZmaxAPI\ObjectEzmaxcustomeruserApi

All URIs are relative to https://prod.api.appcluster01.ca-central-1.ezmax.com/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**ezmaxcustomeruserPatchObjectV1()**](ObjectEzmaxcustomeruserApi.md#ezmaxcustomeruserPatchObjectV1) | **PATCH** /1/object/ezmaxcustomeruser/{pkiEzmaxcustomeruserID} | Patch an existing Ezmaxcustomeruser |


## `ezmaxcustomeruserPatchObjectV1()`

```php
ezmaxcustomeruserPatchObjectV1($pkiEzmaxcustomeruserID, $ezmaxcustomeruserPatchObjectV1Request): \eZmaxAPI\Model\EzmaxcustomeruserPatchObjectV1Response
```

Patch an existing Ezmaxcustomeruser



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzmaxcustomeruserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzmaxcustomeruserID = 56; // int | The unique ID of the Ezmaxcustomeruser
$ezmaxcustomeruserPatchObjectV1Request = new \eZmaxAPI\Model\EzmaxcustomeruserPatchObjectV1Request(); // \eZmaxAPI\Model\EzmaxcustomeruserPatchObjectV1Request

try {
    $result = $apiInstance->ezmaxcustomeruserPatchObjectV1($pkiEzmaxcustomeruserID, $ezmaxcustomeruserPatchObjectV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzmaxcustomeruserApi->ezmaxcustomeruserPatchObjectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiEzmaxcustomeruserID** | **int**| The unique ID of the Ezmaxcustomeruser | |
| **ezmaxcustomeruserPatchObjectV1Request** | [**\eZmaxAPI\Model\EzmaxcustomeruserPatchObjectV1Request**](../Model/EzmaxcustomeruserPatchObjectV1Request.md)|  | |

### Return type

[**\eZmaxAPI\Model\EzmaxcustomeruserPatchObjectV1Response**](../Model/EzmaxcustomeruserPatchObjectV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
