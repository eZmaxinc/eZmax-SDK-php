# eZmaxAPI\ObjectNotificationtestApi

All URIs are relative to https://prod.api.appcluster01.ca-central-1.ezmax.com/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**notificationtestGetElementsV1()**](ObjectNotificationtestApi.md#notificationtestGetElementsV1) | **GET** /1/object/notificationtest/{pkiNotificationtestID}/getElements | Retrieve an existing Notificationtest&#39;s Elements |


## `notificationtestGetElementsV1()`

```php
notificationtestGetElementsV1($pkiNotificationtestID): \eZmaxAPI\Model\NotificationtestGetElementsV1Response
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
    $result = $apiInstance->notificationtestGetElementsV1($pkiNotificationtestID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectNotificationtestApi->notificationtestGetElementsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiNotificationtestID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\NotificationtestGetElementsV1Response**](../Model/NotificationtestGetElementsV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
