# eZmaxAPI\ObjectVersionhistoryApi

All URIs are relative to https://prod.api.appcluster01.ca-central-1.ezmax.com/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**versionhistoryGetObjectV2()**](ObjectVersionhistoryApi.md#versionhistoryGetObjectV2) | **GET** /2/object/versionhistory/{pkiVersionhistoryID} | Retrieve an existing Versionhistory |


## `versionhistoryGetObjectV2()`

```php
versionhistoryGetObjectV2($pkiVersionhistoryID): \eZmaxAPI\Model\VersionhistoryGetObjectV2Response
```

Retrieve an existing Versionhistory



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectVersionhistoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiVersionhistoryID = 56; // int

try {
    $result = $apiInstance->versionhistoryGetObjectV2($pkiVersionhistoryID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectVersionhistoryApi->versionhistoryGetObjectV2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiVersionhistoryID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\VersionhistoryGetObjectV2Response**](../Model/VersionhistoryGetObjectV2Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
