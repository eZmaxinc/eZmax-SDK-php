# eZmaxAPI\ObjectEzsigntemplateglobalannotationApi



All URIs are relative to https://prod.api.appcluster01.ca-central-1.ezmax.com/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**ezsigntemplateglobalannotationGetObjectV2()**](ObjectEzsigntemplateglobalannotationApi.md#ezsigntemplateglobalannotationGetObjectV2) | **GET** /2/object/ezsigntemplateglobalannotation/{pkiEzsigntemplateglobalannotationID} | Retrieve an existing Ezsigntemplateglobalannotation |


## `ezsigntemplateglobalannotationGetObjectV2()`

```php
ezsigntemplateglobalannotationGetObjectV2($pkiEzsigntemplateglobalannotationID): \eZmaxAPI\Model\EzsigntemplateglobalannotationGetObjectV2Response
```

Retrieve an existing Ezsigntemplateglobalannotation



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsigntemplateglobalannotationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzsigntemplateglobalannotationID = 56; // int | The unique ID of the Ezsigntemplateglobalannotation

try {
    $result = $apiInstance->ezsigntemplateglobalannotationGetObjectV2($pkiEzsigntemplateglobalannotationID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsigntemplateglobalannotationApi->ezsigntemplateglobalannotationGetObjectV2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiEzsigntemplateglobalannotationID** | **int**| The unique ID of the Ezsigntemplateglobalannotation | |

### Return type

[**\eZmaxAPI\Model\EzsigntemplateglobalannotationGetObjectV2Response**](../Model/EzsigntemplateglobalannotationGetObjectV2Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
