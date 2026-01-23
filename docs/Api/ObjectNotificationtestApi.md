# eZmaxAPI\ObjectNotificationtestApi



All URIs are relative to https://prod.api.appcluster01.ca-central-1.ezmax.com/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**notificationtestGetElementsV2()**](ObjectNotificationtestApi.md#notificationtestGetElementsV2) | **GET** /2/object/notificationtest/{pkiNotificationtestID}/getElements | Retrieve an existing Notificationtest&#39;s Elements |


## `notificationtestGetElementsV2()`

```php
notificationtestGetElementsV2($pkiNotificationtestID): \eZmaxAPI\Model\NotificationtestGetElementsV2Response
```

Retrieve an existing Notificationtest's Elements



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectNotificationtestApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiNotificationtestID = 56; // int

try {
    $result = $apiInstance->notificationtestGetElementsV2($pkiNotificationtestID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectNotificationtestApi->notificationtestGetElementsV2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiNotificationtestID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\NotificationtestGetElementsV2Response**](../Model/NotificationtestGetElementsV2Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
