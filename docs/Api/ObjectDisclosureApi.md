# eZmaxAPI\ObjectDisclosureApi



All URIs are relative to https://prod.api.appcluster01.ca-central-1.ezmax.com/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**disclosureBatchDownloadV1()**](ObjectDisclosureApi.md#disclosureBatchDownloadV1) | **POST** /1/object/disclosure/{pkiDisclosureID}/batchDownload | Download multiples attachments from a Disclosure |
| [**disclosureGetAttachmentsV1()**](ObjectDisclosureApi.md#disclosureGetAttachmentsV1) | **GET** /1/object/disclosure/{pkiDisclosureID}/getAttachments | Retrieve Disclosure&#39;s attachments |
| [**disclosureImportIntoEDMV1()**](ObjectDisclosureApi.md#disclosureImportIntoEDMV1) | **POST** /1/object/disclosure/{pkiDisclosureID}/importIntoEDM | Import attachments into the Disclosure |


## `disclosureBatchDownloadV1()`

```php
disclosureBatchDownloadV1($pkiDisclosureID, $disclosureBatchDownloadV1Request): \SplFileObject
```

Download multiples attachments from a Disclosure

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectDisclosureApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiDisclosureID = 56; // int
$disclosureBatchDownloadV1Request = new \eZmaxAPI\Model\DisclosureBatchDownloadV1Request(); // \eZmaxAPI\Model\DisclosureBatchDownloadV1Request

try {
    $result = $apiInstance->disclosureBatchDownloadV1($pkiDisclosureID, $disclosureBatchDownloadV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectDisclosureApi->disclosureBatchDownloadV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiDisclosureID** | **int**|  | |
| **disclosureBatchDownloadV1Request** | [**\eZmaxAPI\Model\DisclosureBatchDownloadV1Request**](../Model/DisclosureBatchDownloadV1Request.md)|  | |

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

## `disclosureGetAttachmentsV1()`

```php
disclosureGetAttachmentsV1($pkiDisclosureID): \eZmaxAPI\Model\DisclosureGetAttachmentsV1Response
```

Retrieve Disclosure's attachments

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectDisclosureApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiDisclosureID = 56; // int

try {
    $result = $apiInstance->disclosureGetAttachmentsV1($pkiDisclosureID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectDisclosureApi->disclosureGetAttachmentsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiDisclosureID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\DisclosureGetAttachmentsV1Response**](../Model/DisclosureGetAttachmentsV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `disclosureImportIntoEDMV1()`

```php
disclosureImportIntoEDMV1($pkiDisclosureID, $disclosureImportIntoEDMV1Request): \eZmaxAPI\Model\DisclosureImportIntoEDMV1Response
```

Import attachments into the Disclosure

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectDisclosureApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiDisclosureID = 56; // int
$disclosureImportIntoEDMV1Request = new \eZmaxAPI\Model\DisclosureImportIntoEDMV1Request(); // \eZmaxAPI\Model\DisclosureImportIntoEDMV1Request

try {
    $result = $apiInstance->disclosureImportIntoEDMV1($pkiDisclosureID, $disclosureImportIntoEDMV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectDisclosureApi->disclosureImportIntoEDMV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiDisclosureID** | **int**|  | |
| **disclosureImportIntoEDMV1Request** | [**\eZmaxAPI\Model\DisclosureImportIntoEDMV1Request**](../Model/DisclosureImportIntoEDMV1Request.md)|  | |

### Return type

[**\eZmaxAPI\Model\DisclosureImportIntoEDMV1Response**](../Model/DisclosureImportIntoEDMV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
