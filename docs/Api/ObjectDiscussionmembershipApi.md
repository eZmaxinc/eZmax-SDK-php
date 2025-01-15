# eZmaxAPI\ObjectDiscussionmembershipApi

All URIs are relative to https://prod.api.appcluster01.ca-central-1.ezmax.com/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**discussionmembershipCreateObjectV1()**](ObjectDiscussionmembershipApi.md#discussionmembershipCreateObjectV1) | **POST** /1/object/discussionmembership | Create a new Discussionmembership |
| [**discussionmembershipDeleteObjectV1()**](ObjectDiscussionmembershipApi.md#discussionmembershipDeleteObjectV1) | **DELETE** /1/object/discussionmembership/{pkiDiscussionmembershipID} | Delete an existing Discussionmembership |


## `discussionmembershipCreateObjectV1()`

```php
discussionmembershipCreateObjectV1($discussionmembershipCreateObjectV1Request): \eZmaxAPI\Model\DiscussionmembershipCreateObjectV1Response
```

Create a new Discussionmembership

The endpoint allows to create one or many elements at once.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectDiscussionmembershipApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$discussionmembershipCreateObjectV1Request = new \eZmaxAPI\Model\DiscussionmembershipCreateObjectV1Request(); // \eZmaxAPI\Model\DiscussionmembershipCreateObjectV1Request

try {
    $result = $apiInstance->discussionmembershipCreateObjectV1($discussionmembershipCreateObjectV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectDiscussionmembershipApi->discussionmembershipCreateObjectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **discussionmembershipCreateObjectV1Request** | [**\eZmaxAPI\Model\DiscussionmembershipCreateObjectV1Request**](../Model/DiscussionmembershipCreateObjectV1Request.md)|  | |

### Return type

[**\eZmaxAPI\Model\DiscussionmembershipCreateObjectV1Response**](../Model/DiscussionmembershipCreateObjectV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `discussionmembershipDeleteObjectV1()`

```php
discussionmembershipDeleteObjectV1($pkiDiscussionmembershipID): \eZmaxAPI\Model\CommonResponse
```

Delete an existing Discussionmembership



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectDiscussionmembershipApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiDiscussionmembershipID = 56; // int | The unique ID of the Discussionmembership

try {
    $result = $apiInstance->discussionmembershipDeleteObjectV1($pkiDiscussionmembershipID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectDiscussionmembershipApi->discussionmembershipDeleteObjectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiDiscussionmembershipID** | **int**| The unique ID of the Discussionmembership | |

### Return type

[**\eZmaxAPI\Model\CommonResponse**](../Model/CommonResponse.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
