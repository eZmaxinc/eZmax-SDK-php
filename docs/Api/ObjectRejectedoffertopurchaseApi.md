# eZmaxAPI\ObjectRejectedoffertopurchaseApi

All URIs are relative to https://prod.api.appcluster01.ca-central-1.ezmax.com/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**rejectedoffertopurchaseGetCommunicationListV1()**](ObjectRejectedoffertopurchaseApi.md#rejectedoffertopurchaseGetCommunicationListV1) | **GET** /1/object/rejectedoffertopurchase/{pkiRejectedoffertopurchaseID}/getCommunicationList | Retrieve Communication list |


## `rejectedoffertopurchaseGetCommunicationListV1()`

```php
rejectedoffertopurchaseGetCommunicationListV1($pkiRejectedoffertopurchaseID): \eZmaxAPI\Model\RejectedoffertopurchaseGetCommunicationListV1Response
```

Retrieve Communication list



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectRejectedoffertopurchaseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiRejectedoffertopurchaseID = 56; // int

try {
    $result = $apiInstance->rejectedoffertopurchaseGetCommunicationListV1($pkiRejectedoffertopurchaseID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectRejectedoffertopurchaseApi->rejectedoffertopurchaseGetCommunicationListV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiRejectedoffertopurchaseID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\RejectedoffertopurchaseGetCommunicationListV1Response**](../Model/RejectedoffertopurchaseGetCommunicationListV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
