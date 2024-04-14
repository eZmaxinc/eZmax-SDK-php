# eZmaxAPI\ObjectElectronicfundstransferApi

All URIs are relative to https://prod.api.appcluster01.ca-central-1.ezmax.com/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**electronicfundstransferGetCommunicationListV1()**](ObjectElectronicfundstransferApi.md#electronicfundstransferGetCommunicationListV1) | **GET** /1/object/electronicfundstransfer/{pkiElectronicfundstransferID}/getCommunicationList | Retrieve Communication list |


## `electronicfundstransferGetCommunicationListV1()`

```php
electronicfundstransferGetCommunicationListV1($pkiElectronicfundstransferID): \eZmaxAPI\Model\ElectronicfundstransferGetCommunicationListV1Response
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


$apiInstance = new eZmaxAPI\Api\ObjectElectronicfundstransferApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiElectronicfundstransferID = 56; // int

try {
    $result = $apiInstance->electronicfundstransferGetCommunicationListV1($pkiElectronicfundstransferID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectElectronicfundstransferApi->electronicfundstransferGetCommunicationListV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiElectronicfundstransferID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\ElectronicfundstransferGetCommunicationListV1Response**](../Model/ElectronicfundstransferGetCommunicationListV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
