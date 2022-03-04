# eZmaxAPI\ObjectEzsignbulksendtransmissionApi

All URIs are relative to https://prod.api.appcluster01.ca-central-1.ezmax.com/rest.

Method | HTTP request | Description
------------- | ------------- | -------------
[**ezsignbulksendtransmissionGetObjectV1()**](ObjectEzsignbulksendtransmissionApi.md#ezsignbulksendtransmissionGetObjectV1) | **GET** /1/object/ezsignbulksendtransmission/{pkiEzsignbulksendtransmissionID} | Retrieve an existing Ezsignbulksendtransmission


## `ezsignbulksendtransmissionGetObjectV1()`

```php
ezsignbulksendtransmissionGetObjectV1($pkiEzsignbulksendtransmissionID): \eZmaxAPI\Model\EzsignbulksendtransmissionGetObjectV1Response
```

Retrieve an existing Ezsignbulksendtransmission



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsignbulksendtransmissionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzsignbulksendtransmissionID = 56; // int

try {
    $result = $apiInstance->ezsignbulksendtransmissionGetObjectV1($pkiEzsignbulksendtransmissionID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsignbulksendtransmissionApi->ezsignbulksendtransmissionGetObjectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pkiEzsignbulksendtransmissionID** | **int**|  |

### Return type

[**\eZmaxAPI\Model\EzsignbulksendtransmissionGetObjectV1Response**](../Model/EzsignbulksendtransmissionGetObjectV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
