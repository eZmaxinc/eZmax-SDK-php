# eZmaxAPI\ObjectInvoiceApi

All URIs are relative to https://prod.api.appcluster01.ca-central-1.ezmax.com/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**invoiceGetAttachmentsV1()**](ObjectInvoiceApi.md#invoiceGetAttachmentsV1) | **GET** /1/object/invoice/{pkiInvoiceID}/getAttachments | Retrieve Invoice&#39;s Attachments |
| [**invoiceGetCommunicationCountV1()**](ObjectInvoiceApi.md#invoiceGetCommunicationCountV1) | **GET** /1/object/invoice/{pkiInvoiceID}/getCommunicationCount | Retrieve Communication count |
| [**invoiceGetCommunicationListV1()**](ObjectInvoiceApi.md#invoiceGetCommunicationListV1) | **GET** /1/object/invoice/{pkiInvoiceID}/getCommunicationList | Retrieve Communication list |
| [**invoiceGetCommunicationrecipientsV1()**](ObjectInvoiceApi.md#invoiceGetCommunicationrecipientsV1) | **GET** /1/object/invoice/{pkiInvoiceID}/getCommunicationrecipients | Retrieve Invoice&#39;s Communicationrecipient |
| [**invoiceGetCommunicationsendersV1()**](ObjectInvoiceApi.md#invoiceGetCommunicationsendersV1) | **GET** /1/object/invoice/{pkiInvoiceID}/getCommunicationsenders | Retrieve Invoice&#39;s Communicationsender |


## `invoiceGetAttachmentsV1()`

```php
invoiceGetAttachmentsV1($pkiInvoiceID): \eZmaxAPI\Model\InvoiceGetAttachmentsV1Response
```

Retrieve Invoice's Attachments



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
    $result = $apiInstance->invoiceGetAttachmentsV1($pkiInvoiceID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectInvoiceApi->invoiceGetAttachmentsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiInvoiceID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\InvoiceGetAttachmentsV1Response**](../Model/InvoiceGetAttachmentsV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `invoiceGetCommunicationCountV1()`

```php
invoiceGetCommunicationCountV1($pkiInvoiceID): \eZmaxAPI\Model\InvoiceGetCommunicationCountV1Response
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


$apiInstance = new eZmaxAPI\Api\ObjectInvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiInvoiceID = 56; // int

try {
    $result = $apiInstance->invoiceGetCommunicationCountV1($pkiInvoiceID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectInvoiceApi->invoiceGetCommunicationCountV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiInvoiceID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\InvoiceGetCommunicationCountV1Response**](../Model/InvoiceGetCommunicationCountV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

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

## `invoiceGetCommunicationrecipientsV1()`

```php
invoiceGetCommunicationrecipientsV1($pkiInvoiceID): \eZmaxAPI\Model\InvoiceGetCommunicationrecipientsV1Response
```

Retrieve Invoice's Communicationrecipient



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
    $result = $apiInstance->invoiceGetCommunicationrecipientsV1($pkiInvoiceID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectInvoiceApi->invoiceGetCommunicationrecipientsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiInvoiceID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\InvoiceGetCommunicationrecipientsV1Response**](../Model/InvoiceGetCommunicationrecipientsV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `invoiceGetCommunicationsendersV1()`

```php
invoiceGetCommunicationsendersV1($pkiInvoiceID): \eZmaxAPI\Model\InvoiceGetCommunicationsendersV1Response
```

Retrieve Invoice's Communicationsender



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
    $result = $apiInstance->invoiceGetCommunicationsendersV1($pkiInvoiceID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectInvoiceApi->invoiceGetCommunicationsendersV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiInvoiceID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\InvoiceGetCommunicationsendersV1Response**](../Model/InvoiceGetCommunicationsendersV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
