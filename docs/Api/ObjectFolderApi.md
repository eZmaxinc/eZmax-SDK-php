# eZmaxAPI\ObjectFolderApi



All URIs are relative to https://prod.api.appcluster01.ca-central-1.ezmax.com/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**folderBatchDownloadV1()**](ObjectFolderApi.md#folderBatchDownloadV1) | **POST** /1/object/folder/{pkiFolderID}/batchDownload | Download multiples attachments from an Folder |
| [**folderGetAttachmentsV1()**](ObjectFolderApi.md#folderGetAttachmentsV1) | **GET** /1/object/folder/{pkiFolderID}/getAttachments | Retrieve Folder&#39;s attachments |
| [**folderGetCommunicationCountV1()**](ObjectFolderApi.md#folderGetCommunicationCountV1) | **GET** /1/object/folder/{pkiFolderID}/getCommunicationCount | Retrieve Communication count |
| [**folderGetCommunicationListV1()**](ObjectFolderApi.md#folderGetCommunicationListV1) | **GET** /1/object/folder/{pkiFolderID}/getCommunicationList | Retrieve Communication list |
| [**folderGetCommunicationrecipientsV1()**](ObjectFolderApi.md#folderGetCommunicationrecipientsV1) | **GET** /1/object/folder/{pkiFolderID}/getCommunicationrecipients | Retrieve Communication recipients |
| [**folderGetCommunicationsendersV1()**](ObjectFolderApi.md#folderGetCommunicationsendersV1) | **GET** /1/object/folder/{pkiFolderID}/getCommunicationsenders | Retrieve Communication senders |
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

## `folderGetCommunicationCountV1()`

```php
folderGetCommunicationCountV1($pkiFolderID): \eZmaxAPI\Model\FolderGetCommunicationCountV1Response
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


$apiInstance = new eZmaxAPI\Api\ObjectFolderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiFolderID = 56; // int

try {
    $result = $apiInstance->folderGetCommunicationCountV1($pkiFolderID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectFolderApi->folderGetCommunicationCountV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiFolderID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\FolderGetCommunicationCountV1Response**](../Model/FolderGetCommunicationCountV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `folderGetCommunicationListV1()`

```php
folderGetCommunicationListV1($pkiFolderID): \eZmaxAPI\Model\FolderGetCommunicationListV1Response
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


$apiInstance = new eZmaxAPI\Api\ObjectFolderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiFolderID = 56; // int

try {
    $result = $apiInstance->folderGetCommunicationListV1($pkiFolderID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectFolderApi->folderGetCommunicationListV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiFolderID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\FolderGetCommunicationListV1Response**](../Model/FolderGetCommunicationListV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `folderGetCommunicationrecipientsV1()`

```php
folderGetCommunicationrecipientsV1($pkiFolderID): \eZmaxAPI\Model\FolderGetCommunicationrecipientsV1Response
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


$apiInstance = new eZmaxAPI\Api\ObjectFolderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiFolderID = 56; // int

try {
    $result = $apiInstance->folderGetCommunicationrecipientsV1($pkiFolderID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectFolderApi->folderGetCommunicationrecipientsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiFolderID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\FolderGetCommunicationrecipientsV1Response**](../Model/FolderGetCommunicationrecipientsV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `folderGetCommunicationsendersV1()`

```php
folderGetCommunicationsendersV1($pkiFolderID): \eZmaxAPI\Model\FolderGetCommunicationsendersV1Response
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


$apiInstance = new eZmaxAPI\Api\ObjectFolderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiFolderID = 56; // int

try {
    $result = $apiInstance->folderGetCommunicationsendersV1($pkiFolderID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectFolderApi->folderGetCommunicationsendersV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiFolderID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\FolderGetCommunicationsendersV1Response**](../Model/FolderGetCommunicationsendersV1Response.md)

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
