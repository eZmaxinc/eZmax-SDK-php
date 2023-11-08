# eZmaxAPI\ObjectInvoiceApi

All URIs are relative to https://prod.api.appcluster01.ca-central-1.ezmax.com/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**invoiceGetCommunicationListV1()**](ObjectInvoiceApi.md#invoiceGetCommunicationListV1) | **GET** /1/object/invoice/{pkiInvoiceID}/getCommunicationList | Retrieve Communication list |


## `invoiceGetCommunicationListV1()`

```php
invoiceGetCommunicationListV1($pkiInvoiceID): \eZmaxAPI\Model\InvoiceGetCommunicationListV1Response
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


$apiInstance = new eZmaxAPI\Api\ObjectInvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiInvoiceID = 56; // int

try {
    $result = $apiInstance->invoiceGetCommunicationListV1($pkiInvoiceID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectInvoiceApi->invoiceGetCommunicationListV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiInvoiceID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\InvoiceGetCommunicationListV1Response**](../Model/InvoiceGetCommunicationListV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
