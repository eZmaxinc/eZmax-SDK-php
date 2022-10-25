# eZmaxAPI\ObjectNotificationsectionApi

All URIs are relative to https://prod.api.appcluster01.ca-central-1.ezmax.com/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**notificationsectionGetNotificationtestsV1()**](ObjectNotificationsectionApi.md#notificationsectionGetNotificationtestsV1) | **GET** /1/object/notificationsection/{pkiNotificationsectionID}/getNotificationtests | Retrieve an existing Notificationsection&#39;s Notificationtests |


## `notificationsectionGetNotificationtestsV1()`

```php
notificationsectionGetNotificationtestsV1($pkiNotificationsectionID, $bShowHidden): \eZmaxAPI\Model\NotificationsectionGetNotificationtestsV1Response
```

Retrieve an existing Notificationsection's Notificationtests



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectNotificationsectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiNotificationsectionID = 56; // int
$bShowHidden = True; // bool | Whether or not to return the hidden Notificationtests

try {
    $result = $apiInstance->notificationsectionGetNotificationtestsV1($pkiNotificationsectionID, $bShowHidden);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectNotificationsectionApi->notificationsectionGetNotificationtestsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiNotificationsectionID** | **int**|  | |
| **bShowHidden** | **bool**| Whether or not to return the hidden Notificationtests | |

### Return type

[**\eZmaxAPI\Model\NotificationsectionGetNotificationtestsV1Response**](../Model/NotificationsectionGetNotificationtestsV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
