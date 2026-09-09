# eZmaxAPI\ObjectCustomerApi



All URIs are relative to https://prod.api.appcluster01.ca-central-1.ezmax.com/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**customerBatchDownloadV1()**](ObjectCustomerApi.md#customerBatchDownloadV1) | **POST** /1/object/customer/{pkiCustomerID}/batchDownload | Download multiples attachments from a Customer |
| [**customerGetAttachmentsV1()**](ObjectCustomerApi.md#customerGetAttachmentsV1) | **GET** /1/object/customer/{pkiCustomerID}/getAttachments | Retrieve Customer&#39;s attachments |
| [**customerGetAutocompleteV2()**](ObjectCustomerApi.md#customerGetAutocompleteV2) | **GET** /2/object/customer/getAutocomplete/{sSelector} | Retrieve Customers and IDs |
| [**customerGetObjectV2()**](ObjectCustomerApi.md#customerGetObjectV2) | **GET** /2/object/customer/{pkiCustomerID} | Retrieve an existing Customer |
| [**customerImportIntoEDMV1()**](ObjectCustomerApi.md#customerImportIntoEDMV1) | **POST** /1/object/customer/{pkiCustomerID}/importIntoEDM | Import attachments into the Customer |


## `customerBatchDownloadV1()`

```php
customerBatchDownloadV1($pkiCustomerID, $customerBatchDownloadV1Request): \SplFileObject
```

Download multiples attachments from a Customer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectCustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiCustomerID = 56; // int
$customerBatchDownloadV1Request = new \eZmaxAPI\Model\CustomerBatchDownloadV1Request(); // \eZmaxAPI\Model\CustomerBatchDownloadV1Request

try {
    $result = $apiInstance->customerBatchDownloadV1($pkiCustomerID, $customerBatchDownloadV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectCustomerApi->customerBatchDownloadV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiCustomerID** | **int**|  | |
| **customerBatchDownloadV1Request** | [**\eZmaxAPI\Model\CustomerBatchDownloadV1Request**](../Model/CustomerBatchDownloadV1Request.md)|  | |

### Return type

**\SplFileObject**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/zip`, `text/xml`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `customerGetAttachmentsV1()`

```php
customerGetAttachmentsV1($pkiCustomerID): \eZmaxAPI\Model\CustomerGetAttachmentsV1Response
```

Retrieve Customer's attachments

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectCustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiCustomerID = 56; // int

try {
    $result = $apiInstance->customerGetAttachmentsV1($pkiCustomerID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectCustomerApi->customerGetAttachmentsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiCustomerID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\CustomerGetAttachmentsV1Response**](../Model/CustomerGetAttachmentsV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `customerGetAutocompleteV2()`

```php
customerGetAutocompleteV2($sSelector, $eFilterActive, $sQuery, $acceptLanguage): \eZmaxAPI\Model\CustomerGetAutocompleteV2Response
```

Retrieve Customers and IDs

Get the list of Customer to be used in a dropdown or autocomplete control.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectCustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sSelector = 'sSelector_example'; // string | The type of Customers to return
$eFilterActive = 'Active'; // string | Specify which results we want to display.
$sQuery = 'sQuery_example'; // string | Allow to filter the returned results
$acceptLanguage = new \eZmaxAPI\Model\\eZmaxAPI\Model\HeaderAcceptLanguage(); // \eZmaxAPI\Model\HeaderAcceptLanguage

try {
    $result = $apiInstance->customerGetAutocompleteV2($sSelector, $eFilterActive, $sQuery, $acceptLanguage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectCustomerApi->customerGetAutocompleteV2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sSelector** | **string**| The type of Customers to return | |
| **eFilterActive** | **string**| Specify which results we want to display. | [optional] [default to &#39;Active&#39;] |
| **sQuery** | **string**| Allow to filter the returned results | [optional] |
| **acceptLanguage** | [**\eZmaxAPI\Model\HeaderAcceptLanguage**](../Model/.md)|  | [optional] |

### Return type

[**\eZmaxAPI\Model\CustomerGetAutocompleteV2Response**](../Model/CustomerGetAutocompleteV2Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `customerGetObjectV2()`

```php
customerGetObjectV2($pkiCustomerID): \eZmaxAPI\Model\CustomerGetObjectV2Response
```

Retrieve an existing Customer



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectCustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiCustomerID = 56; // int | The unique ID of the Customer

try {
    $result = $apiInstance->customerGetObjectV2($pkiCustomerID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectCustomerApi->customerGetObjectV2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiCustomerID** | **int**| The unique ID of the Customer | |

### Return type

[**\eZmaxAPI\Model\CustomerGetObjectV2Response**](../Model/CustomerGetObjectV2Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `customerImportIntoEDMV1()`

```php
customerImportIntoEDMV1($pkiCustomerID, $customerImportIntoEDMV1Request): \eZmaxAPI\Model\CustomerImportIntoEDMV1Response
```

Import attachments into the Customer



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectCustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiCustomerID = 56; // int
$customerImportIntoEDMV1Request = new \eZmaxAPI\Model\CustomerImportIntoEDMV1Request(); // \eZmaxAPI\Model\CustomerImportIntoEDMV1Request

try {
    $result = $apiInstance->customerImportIntoEDMV1($pkiCustomerID, $customerImportIntoEDMV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectCustomerApi->customerImportIntoEDMV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiCustomerID** | **int**|  | |
| **customerImportIntoEDMV1Request** | [**\eZmaxAPI\Model\CustomerImportIntoEDMV1Request**](../Model/CustomerImportIntoEDMV1Request.md)|  | |

### Return type

[**\eZmaxAPI\Model\CustomerImportIntoEDMV1Response**](../Model/CustomerImportIntoEDMV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
