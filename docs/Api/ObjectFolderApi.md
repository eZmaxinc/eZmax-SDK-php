# eZmaxAPI\ObjectFolderApi



All URIs are relative to https://prod.api.appcluster01.ca-central-1.ezmax.com/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**folderBatchDownloadV1()**](ObjectFolderApi.md#folderBatchDownloadV1) | **POST** /1/object/folder/{pkiFolderID}/batchDownload | Download multiples attachments from an Folder |
| [**folderGetAttachmentsV1()**](ObjectFolderApi.md#folderGetAttachmentsV1) | **GET** /1/object/folder/{pkiFolderID}/getAttachments | Retrieve Folder&#39;s attachments |
| [**folderImportIntoEDMV1()**](ObjectFolderApi.md#folderImportIntoEDMV1) | **POST** /1/object/folder/{pkiFolderID}/importIntoEDM | Import attachments into the Folder |


## `folderBatchDownloadV1()`

```php
folderBatchDownloadV1($pkiFolderID, $folderBatchDownloadV1Request): \SplFileObject
```

Download multiples attachments from an Folder

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectFolderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiFolderID = 56; // int
$folderBatchDownloadV1Request = new \eZmaxAPI\Model\FolderBatchDownloadV1Request(); // \eZmaxAPI\Model\FolderBatchDownloadV1Request

try {
    $result = $apiInstance->folderBatchDownloadV1($pkiFolderID, $folderBatchDownloadV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectFolderApi->folderBatchDownloadV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiFolderID** | **int**|  | |
| **folderBatchDownloadV1Request** | [**\eZmaxAPI\Model\FolderBatchDownloadV1Request**](../Model/FolderBatchDownloadV1Request.md)|  | |

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

## `folderGetAttachmentsV1()`

```php
folderGetAttachmentsV1($pkiFolderID): \eZmaxAPI\Model\FolderGetAttachmentsV1Response
```

Retrieve Folder's attachments

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectFolderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiFolderID = 56; // int

try {
    $result = $apiInstance->folderGetAttachmentsV1($pkiFolderID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectFolderApi->folderGetAttachmentsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiFolderID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\FolderGetAttachmentsV1Response**](../Model/FolderGetAttachmentsV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `folderImportIntoEDMV1()`

```php
folderImportIntoEDMV1($pkiFolderID, $folderImportIntoEDMV1Request): \eZmaxAPI\Model\FolderImportIntoEDMV1Response
```

Import attachments into the Folder

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectFolderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiFolderID = 56; // int
$folderImportIntoEDMV1Request = new \eZmaxAPI\Model\FolderImportIntoEDMV1Request(); // \eZmaxAPI\Model\FolderImportIntoEDMV1Request

try {
    $result = $apiInstance->folderImportIntoEDMV1($pkiFolderID, $folderImportIntoEDMV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectFolderApi->folderImportIntoEDMV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiFolderID** | **int**|  | |
| **folderImportIntoEDMV1Request** | [**\eZmaxAPI\Model\FolderImportIntoEDMV1Request**](../Model/FolderImportIntoEDMV1Request.md)|  | |

### Return type

[**\eZmaxAPI\Model\FolderImportIntoEDMV1Response**](../Model/FolderImportIntoEDMV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
