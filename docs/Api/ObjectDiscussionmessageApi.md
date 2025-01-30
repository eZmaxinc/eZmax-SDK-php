# eZmaxAPI\ObjectDiscussionmessageApi

All URIs are relative to https://prod.api.appcluster01.ca-central-1.ezmax.com/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**discussionmessageCreateObjectV1()**](ObjectDiscussionmessageApi.md#discussionmessageCreateObjectV1) | **POST** /1/object/discussionmessage | Create a new Discussionmessage |
| [**discussionmessageDeleteObjectV1()**](ObjectDiscussionmessageApi.md#discussionmessageDeleteObjectV1) | **DELETE** /1/object/discussionmessage/{pkiDiscussionmessageID} | Delete an existing Discussionmessage |
| [**discussionmessagePatchObjectV1()**](ObjectDiscussionmessageApi.md#discussionmessagePatchObjectV1) | **PATCH** /1/object/discussionmessage/{pkiDiscussionmessageID} | Patch an existing Discussionmessage |


## `discussionmessageCreateObjectV1()`

```php
discussionmessageCreateObjectV1($discussionmessageCreateObjectV1Request): \eZmaxAPI\Model\DiscussionmessageCreateObjectV1Response
```

Create a new Discussionmessage

The endpoint allows to create one or many elements at once.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectDiscussionmessageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$discussionmessageCreateObjectV1Request = new \eZmaxAPI\Model\DiscussionmessageCreateObjectV1Request(); // \eZmaxAPI\Model\DiscussionmessageCreateObjectV1Request

try {
    $result = $apiInstance->discussionmessageCreateObjectV1($discussionmessageCreateObjectV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectDiscussionmessageApi->discussionmessageCreateObjectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **discussionmessageCreateObjectV1Request** | [**\eZmaxAPI\Model\DiscussionmessageCreateObjectV1Request**](../Model/DiscussionmessageCreateObjectV1Request.md)|  | |

### Return type

[**\eZmaxAPI\Model\DiscussionmessageCreateObjectV1Response**](../Model/DiscussionmessageCreateObjectV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `discussionmessageDeleteObjectV1()`

```php
discussionmessageDeleteObjectV1($pkiDiscussionmessageID): \eZmaxAPI\Model\DiscussionmessageDeleteObjectV1Response
```

Delete an existing Discussionmessage



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectDiscussionmessageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiDiscussionmessageID = 56; // int | The unique ID of the Discussionmessage

try {
    $result = $apiInstance->discussionmessageDeleteObjectV1($pkiDiscussionmessageID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectDiscussionmessageApi->discussionmessageDeleteObjectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiDiscussionmessageID** | **int**| The unique ID of the Discussionmessage | |

### Return type

[**\eZmaxAPI\Model\DiscussionmessageDeleteObjectV1Response**](../Model/DiscussionmessageDeleteObjectV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `discussionmessagePatchObjectV1()`

```php
discussionmessagePatchObjectV1($pkiDiscussionmessageID, $discussionmessagePatchObjectV1Request): \eZmaxAPI\Model\DiscussionmessagePatchObjectV1Response
```

Patch an existing Discussionmessage



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectDiscussionmessageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiDiscussionmessageID = 56; // int | The unique ID of the Discussionmessage
$discussionmessagePatchObjectV1Request = new \eZmaxAPI\Model\DiscussionmessagePatchObjectV1Request(); // \eZmaxAPI\Model\DiscussionmessagePatchObjectV1Request

try {
    $result = $apiInstance->discussionmessagePatchObjectV1($pkiDiscussionmessageID, $discussionmessagePatchObjectV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectDiscussionmessageApi->discussionmessagePatchObjectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiDiscussionmessageID** | **int**| The unique ID of the Discussionmessage | |
| **discussionmessagePatchObjectV1Request** | [**\eZmaxAPI\Model\DiscussionmessagePatchObjectV1Request**](../Model/DiscussionmessagePatchObjectV1Request.md)|  | |

### Return type

[**\eZmaxAPI\Model\DiscussionmessagePatchObjectV1Response**](../Model/DiscussionmessagePatchObjectV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
