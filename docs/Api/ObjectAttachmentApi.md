# eZmaxAPI\ObjectAttachmentApi



All URIs are relative to https://prod.api.appcluster01.ca-central-1.ezmax.com/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**attachmentDeleteV1()**](ObjectAttachmentApi.md#attachmentDeleteV1) | **POST** /1/object/attachment/{pkiAttachmentID}/delete | Delete an existing attachment |
| [**attachmentDocumentTypeV1()**](ObjectAttachmentApi.md#attachmentDocumentTypeV1) | **POST** /1/object/attachment/{pkiAttachmentID}/documentType | Change attachment document type |
| [**attachmentDownloadV1()**](ObjectAttachmentApi.md#attachmentDownloadV1) | **GET** /1/object/attachment/{pkiAttachmentID}/download | Retrieve the content |
| [**attachmentGetAttachmentlogsV1()**](ObjectAttachmentApi.md#attachmentGetAttachmentlogsV1) | **GET** /1/object/attachment/{pkiAttachmentID}/getAttachmentlogs | Retrieve the Attachmentlogs |
| [**attachmentPrivacyV1()**](ObjectAttachmentApi.md#attachmentPrivacyV1) | **POST** /1/object/attachment/{pkiAttachmentID}/privacy | Change the attachment privacy |
| [**attachmentRenameV1()**](ObjectAttachmentApi.md#attachmentRenameV1) | **POST** /1/object/attachment/{pkiAttachmentID}/rename | Rename an attachment |
| [**attachmentRestoreV1()**](ObjectAttachmentApi.md#attachmentRestoreV1) | **POST** /1/object/attachment/{pkiAttachmentID}/restore | Restore a deleted attachment |
| [**attachmentValidateV1()**](ObjectAttachmentApi.md#attachmentValidateV1) | **POST** /1/object/attachment/{pkiAttachmentID}/validate | Validate an existing attachment |


## `attachmentDeleteV1()`

```php
attachmentDeleteV1($pkiAttachmentID, $body): \eZmaxAPI\Model\AttachmentDeleteV1Response
```

Delete an existing attachment

Te endpoint allows to delete an attachment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectAttachmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiAttachmentID = 56; // int
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->attachmentDeleteV1($pkiAttachmentID, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectAttachmentApi->attachmentDeleteV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiAttachmentID** | **int**|  | |
| **body** | **object**|  | |

### Return type

[**\eZmaxAPI\Model\AttachmentDeleteV1Response**](../Model/AttachmentDeleteV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `attachmentDocumentTypeV1()`

```php
attachmentDocumentTypeV1($pkiAttachmentID, $attachmentDocumentTypeV1Request): \eZmaxAPI\Model\AttachmentDocumentTypeV1Response
```

Change attachment document type

The endpoint allows to change the checklist document type for an attachment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectAttachmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiAttachmentID = 56; // int
$attachmentDocumentTypeV1Request = new \eZmaxAPI\Model\AttachmentDocumentTypeV1Request(); // \eZmaxAPI\Model\AttachmentDocumentTypeV1Request

try {
    $result = $apiInstance->attachmentDocumentTypeV1($pkiAttachmentID, $attachmentDocumentTypeV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectAttachmentApi->attachmentDocumentTypeV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiAttachmentID** | **int**|  | |
| **attachmentDocumentTypeV1Request** | [**\eZmaxAPI\Model\AttachmentDocumentTypeV1Request**](../Model/AttachmentDocumentTypeV1Request.md)|  | |

### Return type

[**\eZmaxAPI\Model\AttachmentDocumentTypeV1Response**](../Model/AttachmentDocumentTypeV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `attachmentDownloadV1()`

```php
attachmentDownloadV1($pkiAttachmentID)
```

Retrieve the content

Using this endpoint, you can retrieve the content of an attachment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: Presigned
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('sAuthorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sAuthorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectAttachmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiAttachmentID = 56; // int

try {
    $apiInstance->attachmentDownloadV1($pkiAttachmentID);
} catch (Exception $e) {
    echo 'Exception when calling ObjectAttachmentApi->attachmentDownloadV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiAttachmentID** | **int**|  | |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization), [Presigned](../../README.md#Presigned)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `attachmentGetAttachmentlogsV1()`

```php
attachmentGetAttachmentlogsV1($pkiAttachmentID): \eZmaxAPI\Model\AttachmentGetAttachmentlogsV1Response
```

Retrieve the Attachmentlogs

Using this endpoint, you can retrieve the Attachmentlogs of an attachment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectAttachmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiAttachmentID = 56; // int

try {
    $result = $apiInstance->attachmentGetAttachmentlogsV1($pkiAttachmentID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectAttachmentApi->attachmentGetAttachmentlogsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiAttachmentID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\AttachmentGetAttachmentlogsV1Response**](../Model/AttachmentGetAttachmentlogsV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `attachmentPrivacyV1()`

```php
attachmentPrivacyV1($pkiAttachmentID, $attachmentPrivacyV1Request): \eZmaxAPI\Model\AttachmentPrivacyV1Response
```

Change the attachment privacy

The endpoint allows to change an attachment's access privacy.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectAttachmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiAttachmentID = 56; // int
$attachmentPrivacyV1Request = new \eZmaxAPI\Model\AttachmentPrivacyV1Request(); // \eZmaxAPI\Model\AttachmentPrivacyV1Request

try {
    $result = $apiInstance->attachmentPrivacyV1($pkiAttachmentID, $attachmentPrivacyV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectAttachmentApi->attachmentPrivacyV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiAttachmentID** | **int**|  | |
| **attachmentPrivacyV1Request** | [**\eZmaxAPI\Model\AttachmentPrivacyV1Request**](../Model/AttachmentPrivacyV1Request.md)|  | |

### Return type

[**\eZmaxAPI\Model\AttachmentPrivacyV1Response**](../Model/AttachmentPrivacyV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `attachmentRenameV1()`

```php
attachmentRenameV1($pkiAttachmentID, $attachmentRenameV1Request): \eZmaxAPI\Model\AttachmentRenameV1Response
```

Rename an attachment

The endpoint allows to change the attachment's file name and category.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectAttachmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiAttachmentID = 56; // int
$attachmentRenameV1Request = new \eZmaxAPI\Model\AttachmentRenameV1Request(); // \eZmaxAPI\Model\AttachmentRenameV1Request

try {
    $result = $apiInstance->attachmentRenameV1($pkiAttachmentID, $attachmentRenameV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectAttachmentApi->attachmentRenameV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiAttachmentID** | **int**|  | |
| **attachmentRenameV1Request** | [**\eZmaxAPI\Model\AttachmentRenameV1Request**](../Model/AttachmentRenameV1Request.md)|  | |

### Return type

[**\eZmaxAPI\Model\AttachmentRenameV1Response**](../Model/AttachmentRenameV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `attachmentRestoreV1()`

```php
attachmentRestoreV1($pkiAttachmentID, $attachmentRestoreV1Request): \eZmaxAPI\Model\AttachmentRestoreV1Response
```

Restore a deleted attachment

The endpoints allows to restore a previously deleted attachment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectAttachmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiAttachmentID = 56; // int
$attachmentRestoreV1Request = new \eZmaxAPI\Model\AttachmentRestoreV1Request(); // \eZmaxAPI\Model\AttachmentRestoreV1Request

try {
    $result = $apiInstance->attachmentRestoreV1($pkiAttachmentID, $attachmentRestoreV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectAttachmentApi->attachmentRestoreV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiAttachmentID** | **int**|  | |
| **attachmentRestoreV1Request** | [**\eZmaxAPI\Model\AttachmentRestoreV1Request**](../Model/AttachmentRestoreV1Request.md)|  | |

### Return type

[**\eZmaxAPI\Model\AttachmentRestoreV1Response**](../Model/AttachmentRestoreV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `attachmentValidateV1()`

```php
attachmentValidateV1($pkiAttachmentID, $attachmentValidateV1Request): \eZmaxAPI\Model\AttachmentValidateV1Response
```

Validate an existing attachment

This endpoint allows to validate or reject an attachment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectAttachmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiAttachmentID = 56; // int
$attachmentValidateV1Request = new \eZmaxAPI\Model\AttachmentValidateV1Request(); // \eZmaxAPI\Model\AttachmentValidateV1Request

try {
    $result = $apiInstance->attachmentValidateV1($pkiAttachmentID, $attachmentValidateV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectAttachmentApi->attachmentValidateV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiAttachmentID** | **int**|  | |
| **attachmentValidateV1Request** | [**\eZmaxAPI\Model\AttachmentValidateV1Request**](../Model/AttachmentValidateV1Request.md)|  | |

### Return type

[**\eZmaxAPI\Model\AttachmentValidateV1Response**](../Model/AttachmentValidateV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
