# eZmaxAPI\ObjectDiscussionApi

All URIs are relative to https://prod.api.appcluster01.ca-central-1.ezmax.com/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**discussionCreateObjectV1()**](ObjectDiscussionApi.md#discussionCreateObjectV1) | **POST** /1/object/discussion | Create a new Discussion |
| [**discussionDeleteObjectV1()**](ObjectDiscussionApi.md#discussionDeleteObjectV1) | **DELETE** /1/object/discussion/{pkiDiscussionID} | Delete an existing Discussion |
| [**discussionGetObjectV2()**](ObjectDiscussionApi.md#discussionGetObjectV2) | **GET** /2/object/discussion/{pkiDiscussionID} | Retrieve an existing Discussion |
| [**discussionPatchObjectV1()**](ObjectDiscussionApi.md#discussionPatchObjectV1) | **PATCH** /1/object/discussion/{pkiDiscussionID} | Patch an existing Discussion |
| [**discussionUpdateDiscussionreadstatusV1()**](ObjectDiscussionApi.md#discussionUpdateDiscussionreadstatusV1) | **POST** /1/object/discussion/{pkiDiscussionID}/updateDiscussionreadstatus | Update the read status of the discussion |


## `discussionCreateObjectV1()`

```php
discussionCreateObjectV1($discussionCreateObjectV1Request): \eZmaxAPI\Model\DiscussionCreateObjectV1Response
```

Create a new Discussion

The endpoint allows to create one or many elements at once.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectDiscussionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$discussionCreateObjectV1Request = new \eZmaxAPI\Model\DiscussionCreateObjectV1Request(); // \eZmaxAPI\Model\DiscussionCreateObjectV1Request

try {
    $result = $apiInstance->discussionCreateObjectV1($discussionCreateObjectV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectDiscussionApi->discussionCreateObjectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **discussionCreateObjectV1Request** | [**\eZmaxAPI\Model\DiscussionCreateObjectV1Request**](../Model/DiscussionCreateObjectV1Request.md)|  | |

### Return type

[**\eZmaxAPI\Model\DiscussionCreateObjectV1Response**](../Model/DiscussionCreateObjectV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `discussionDeleteObjectV1()`

```php
discussionDeleteObjectV1($pkiDiscussionID): \eZmaxAPI\Model\CommonResponse
```

Delete an existing Discussion



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectDiscussionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiDiscussionID = 56; // int | The unique ID of the Discussion

try {
    $result = $apiInstance->discussionDeleteObjectV1($pkiDiscussionID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectDiscussionApi->discussionDeleteObjectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiDiscussionID** | **int**| The unique ID of the Discussion | |

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

## `discussionGetObjectV2()`

```php
discussionGetObjectV2($pkiDiscussionID): \eZmaxAPI\Model\DiscussionGetObjectV2Response
```

Retrieve an existing Discussion



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectDiscussionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiDiscussionID = 56; // int | The unique ID of the Discussion

try {
    $result = $apiInstance->discussionGetObjectV2($pkiDiscussionID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectDiscussionApi->discussionGetObjectV2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiDiscussionID** | **int**| The unique ID of the Discussion | |

### Return type

[**\eZmaxAPI\Model\DiscussionGetObjectV2Response**](../Model/DiscussionGetObjectV2Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `discussionPatchObjectV1()`

```php
discussionPatchObjectV1($pkiDiscussionID, $discussionPatchObjectV1Request): \eZmaxAPI\Model\CommonResponse
```

Patch an existing Discussion



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectDiscussionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiDiscussionID = 56; // int | The unique ID of the Discussion
$discussionPatchObjectV1Request = new \eZmaxAPI\Model\DiscussionPatchObjectV1Request(); // \eZmaxAPI\Model\DiscussionPatchObjectV1Request

try {
    $result = $apiInstance->discussionPatchObjectV1($pkiDiscussionID, $discussionPatchObjectV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectDiscussionApi->discussionPatchObjectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiDiscussionID** | **int**| The unique ID of the Discussion | |
| **discussionPatchObjectV1Request** | [**\eZmaxAPI\Model\DiscussionPatchObjectV1Request**](../Model/DiscussionPatchObjectV1Request.md)|  | |

### Return type

[**\eZmaxAPI\Model\CommonResponse**](../Model/CommonResponse.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `discussionUpdateDiscussionreadstatusV1()`

```php
discussionUpdateDiscussionreadstatusV1($pkiDiscussionID, $discussionUpdateDiscussionreadstatusV1Request): \eZmaxAPI\Model\CommonResponse
```

Update the read status of the discussion

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectDiscussionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiDiscussionID = 56; // int
$discussionUpdateDiscussionreadstatusV1Request = new \eZmaxAPI\Model\DiscussionUpdateDiscussionreadstatusV1Request(); // \eZmaxAPI\Model\DiscussionUpdateDiscussionreadstatusV1Request

try {
    $result = $apiInstance->discussionUpdateDiscussionreadstatusV1($pkiDiscussionID, $discussionUpdateDiscussionreadstatusV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectDiscussionApi->discussionUpdateDiscussionreadstatusV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiDiscussionID** | **int**|  | |
| **discussionUpdateDiscussionreadstatusV1Request** | [**\eZmaxAPI\Model\DiscussionUpdateDiscussionreadstatusV1Request**](../Model/DiscussionUpdateDiscussionreadstatusV1Request.md)|  | |

### Return type

[**\eZmaxAPI\Model\CommonResponse**](../Model/CommonResponse.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
