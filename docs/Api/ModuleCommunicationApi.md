# eZmaxAPI\ModuleCommunicationApi

All URIs are relative to https://prod.api.appcluster01.ca-central-1.ezmax.com/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**communicationGetCommunicationCountV1()**](ModuleCommunicationApi.md#communicationGetCommunicationCountV1) | **GET** /1/module/communication/getCount | Retrieve Communication count |


## `communicationGetCommunicationCountV1()`

```php
communicationGetCommunicationCountV1($eCommunicationObjecttype, $pkiEzsignfolderID): \eZmaxAPI\Model\CommunicationGetCountV1Response
```

Retrieve Communication count



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ModuleCommunicationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$eCommunicationObjecttype = 'eCommunicationObjecttype_example'; // string | The object type for the Communication
$pkiEzsignfolderID = 56; // int | The unique ID of the Ezsignfolder

try {
    $result = $apiInstance->communicationGetCommunicationCountV1($eCommunicationObjecttype, $pkiEzsignfolderID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModuleCommunicationApi->communicationGetCommunicationCountV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **eCommunicationObjecttype** | **string**| The object type for the Communication | |
| **pkiEzsignfolderID** | **int**| The unique ID of the Ezsignfolder | [optional] |

### Return type

[**\eZmaxAPI\Model\CommunicationGetCountV1Response**](../Model/CommunicationGetCountV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
