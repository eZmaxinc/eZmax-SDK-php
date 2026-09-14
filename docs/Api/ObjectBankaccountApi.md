# eZmaxAPI\ObjectBankaccountApi



All URIs are relative to https://prod.api.appcluster01.ca-central-1.ezmax.com/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**bankaccountBatchDownloadV1()**](ObjectBankaccountApi.md#bankaccountBatchDownloadV1) | **POST** /1/object/bankaccount/{pkiBankaccountID}/batchDownload | Download multiples attachments from a Bankaccount |
| [**bankaccountGetAttachmentsV1()**](ObjectBankaccountApi.md#bankaccountGetAttachmentsV1) | **GET** /1/object/bankaccount/{pkiBankaccountID}/getAttachments | Retrieve Bankaccount&#39;s attachments |
| [**bankaccountGetAutocompleteV2()**](ObjectBankaccountApi.md#bankaccountGetAutocompleteV2) | **GET** /2/object/bankaccount/getAutocomplete/{sSelector} | Retrieve Bankaccounts and IDs |
| [**bankaccountGetCommunicationCountV1()**](ObjectBankaccountApi.md#bankaccountGetCommunicationCountV1) | **GET** /1/object/bankaccount/{pkiBankaccountID}/getCommunicationCount | Retrieve Communication count |
| [**bankaccountGetCommunicationListV1()**](ObjectBankaccountApi.md#bankaccountGetCommunicationListV1) | **GET** /1/object/bankaccount/{pkiBankaccountID}/getCommunicationList | Retrieve Communication list |
| [**bankaccountGetCommunicationrecipientsV1()**](ObjectBankaccountApi.md#bankaccountGetCommunicationrecipientsV1) | **GET** /1/object/bankaccount/{pkiBankaccountID}/getCommunicationrecipients | Retrieve Communication recipients |
| [**bankaccountGetCommunicationsendersV1()**](ObjectBankaccountApi.md#bankaccountGetCommunicationsendersV1) | **GET** /1/object/bankaccount/{pkiBankaccountID}/getCommunicationsenders | Retrieve Communication senders |
| [**bankaccountImportIntoEDMV1()**](ObjectBankaccountApi.md#bankaccountImportIntoEDMV1) | **POST** /1/object/bankaccount/{pkiBankaccountID}/importIntoEDM | Import attachments into the Bankaccount |


## `bankaccountBatchDownloadV1()`

```php
bankaccountBatchDownloadV1($pkiBankaccountID, $bankaccountBatchDownloadV1Request): \SplFileObject
```

Download multiples attachments from a Bankaccount

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectBankaccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiBankaccountID = 56; // int
$bankaccountBatchDownloadV1Request = new \eZmaxAPI\Model\BankaccountBatchDownloadV1Request(); // \eZmaxAPI\Model\BankaccountBatchDownloadV1Request

try {
    $result = $apiInstance->bankaccountBatchDownloadV1($pkiBankaccountID, $bankaccountBatchDownloadV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectBankaccountApi->bankaccountBatchDownloadV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiBankaccountID** | **int**|  | |
| **bankaccountBatchDownloadV1Request** | [**\eZmaxAPI\Model\BankaccountBatchDownloadV1Request**](../Model/BankaccountBatchDownloadV1Request.md)|  | |

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

## `bankaccountGetAttachmentsV1()`

```php
bankaccountGetAttachmentsV1($pkiBankaccountID): \eZmaxAPI\Model\BankaccountGetAttachmentsV1Response
```

Retrieve Bankaccount's attachments

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectBankaccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiBankaccountID = 56; // int

try {
    $result = $apiInstance->bankaccountGetAttachmentsV1($pkiBankaccountID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectBankaccountApi->bankaccountGetAttachmentsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiBankaccountID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\BankaccountGetAttachmentsV1Response**](../Model/BankaccountGetAttachmentsV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bankaccountGetAutocompleteV2()`

```php
bankaccountGetAutocompleteV2($sSelector, $eFilterActive, $sQuery, $acceptLanguage): \eZmaxAPI\Model\BankaccountGetAutocompleteV2Response
```

Retrieve Bankaccounts and IDs

Get the list of Bankaccount to be used in a dropdown or autocomplete control.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectBankaccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sSelector = 'sSelector_example'; // string | The type of Bankaccounts to return
$eFilterActive = 'Active'; // string | Specify which results we want to display.
$sQuery = 'sQuery_example'; // string | Allow to filter the returned results
$acceptLanguage = new \eZmaxAPI\Model\\eZmaxAPI\Model\HeaderAcceptLanguage(); // \eZmaxAPI\Model\HeaderAcceptLanguage

try {
    $result = $apiInstance->bankaccountGetAutocompleteV2($sSelector, $eFilterActive, $sQuery, $acceptLanguage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectBankaccountApi->bankaccountGetAutocompleteV2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sSelector** | **string**| The type of Bankaccounts to return | |
| **eFilterActive** | **string**| Specify which results we want to display. | [optional] [default to &#39;Active&#39;] |
| **sQuery** | **string**| Allow to filter the returned results | [optional] |
| **acceptLanguage** | [**\eZmaxAPI\Model\HeaderAcceptLanguage**](../Model/.md)|  | [optional] |

### Return type

[**\eZmaxAPI\Model\BankaccountGetAutocompleteV2Response**](../Model/BankaccountGetAutocompleteV2Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bankaccountGetCommunicationCountV1()`

```php
bankaccountGetCommunicationCountV1($pkiBankaccountID): \eZmaxAPI\Model\BankaccountGetCommunicationCountV1Response
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


$apiInstance = new eZmaxAPI\Api\ObjectBankaccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiBankaccountID = 56; // int

try {
    $result = $apiInstance->bankaccountGetCommunicationCountV1($pkiBankaccountID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectBankaccountApi->bankaccountGetCommunicationCountV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiBankaccountID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\BankaccountGetCommunicationCountV1Response**](../Model/BankaccountGetCommunicationCountV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bankaccountGetCommunicationListV1()`

```php
bankaccountGetCommunicationListV1($pkiBankaccountID): \eZmaxAPI\Model\BankaccountGetCommunicationListV1Response
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


$apiInstance = new eZmaxAPI\Api\ObjectBankaccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiBankaccountID = 56; // int

try {
    $result = $apiInstance->bankaccountGetCommunicationListV1($pkiBankaccountID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectBankaccountApi->bankaccountGetCommunicationListV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiBankaccountID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\BankaccountGetCommunicationListV1Response**](../Model/BankaccountGetCommunicationListV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bankaccountGetCommunicationrecipientsV1()`

```php
bankaccountGetCommunicationrecipientsV1($pkiBankaccountID): \eZmaxAPI\Model\BankaccountGetCommunicationrecipientsV1Response
```

Retrieve Communication recipients

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectBankaccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiBankaccountID = 56; // int

try {
    $result = $apiInstance->bankaccountGetCommunicationrecipientsV1($pkiBankaccountID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectBankaccountApi->bankaccountGetCommunicationrecipientsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiBankaccountID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\BankaccountGetCommunicationrecipientsV1Response**](../Model/BankaccountGetCommunicationrecipientsV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bankaccountGetCommunicationsendersV1()`

```php
bankaccountGetCommunicationsendersV1($pkiBankaccountID): \eZmaxAPI\Model\BankaccountGetCommunicationsendersV1Response
```

Retrieve Communication senders

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectBankaccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiBankaccountID = 56; // int

try {
    $result = $apiInstance->bankaccountGetCommunicationsendersV1($pkiBankaccountID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectBankaccountApi->bankaccountGetCommunicationsendersV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiBankaccountID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\BankaccountGetCommunicationsendersV1Response**](../Model/BankaccountGetCommunicationsendersV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bankaccountImportIntoEDMV1()`

```php
bankaccountImportIntoEDMV1($pkiBankaccountID, $bankaccountImportIntoEDMV1Request): \eZmaxAPI\Model\BankaccountImportIntoEDMV1Response
```

Import attachments into the Bankaccount

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectBankaccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiBankaccountID = 56; // int
$bankaccountImportIntoEDMV1Request = new \eZmaxAPI\Model\BankaccountImportIntoEDMV1Request(); // \eZmaxAPI\Model\BankaccountImportIntoEDMV1Request

try {
    $result = $apiInstance->bankaccountImportIntoEDMV1($pkiBankaccountID, $bankaccountImportIntoEDMV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectBankaccountApi->bankaccountImportIntoEDMV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiBankaccountID** | **int**|  | |
| **bankaccountImportIntoEDMV1Request** | [**\eZmaxAPI\Model\BankaccountImportIntoEDMV1Request**](../Model/BankaccountImportIntoEDMV1Request.md)|  | |

### Return type

[**\eZmaxAPI\Model\BankaccountImportIntoEDMV1Response**](../Model/BankaccountImportIntoEDMV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
