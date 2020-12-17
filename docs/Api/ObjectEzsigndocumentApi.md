# eZmaxAPI\ObjectEzsigndocumentApi

All URIs are relative to https://prod.api.appcluster01.ca-central-1.ezmax.com/rest.

Method | HTTP request | Description
------------- | ------------- | -------------
[**ezsigndocumentApplyEzsigntemplateV1()**](ObjectEzsigndocumentApi.md#ezsigndocumentApplyEzsigntemplateV1) | **POST** /1/object/ezsigndocument/{pkiEzsigndocumentID}/applyezsigntemplate | Apply an Ezsign Template to the Ezsigndocument.
[**ezsigndocumentCreateObjectV1()**](ObjectEzsigndocumentApi.md#ezsigndocumentCreateObjectV1) | **POST** /1/object/ezsigndocument | Create a new Ezsigndocument
[**ezsigndocumentDeleteObjectV1()**](ObjectEzsigndocumentApi.md#ezsigndocumentDeleteObjectV1) | **DELETE** /1/object/ezsigndocument/{pkiEzsigndocumentID} | Delete an existing Ezsigndocument
[**ezsigndocumentEditObjectV1()**](ObjectEzsigndocumentApi.md#ezsigndocumentEditObjectV1) | **PUT** /1/object/ezsigndocument/{pkiEzsigndocumentID} | Modify an existing Ezsigndocument
[**ezsigndocumentGetDownloadUrlV1()**](ObjectEzsigndocumentApi.md#ezsigndocumentGetDownloadUrlV1) | **GET** /1/object/ezsigndocument/{pkiEzsigndocumentID}/getDownloadUrl/{eDocumentType} | Retrieve a URL to download documents.
[**ezsigndocumentGetObjectGetChildrenV1()**](ObjectEzsigndocumentApi.md#ezsigndocumentGetObjectGetChildrenV1) | **GET** /1/object/ezsigndocument/{pkiEzsigndocumentID}/getChildren | Retrieve an existing Ezsigndocument&#39;s children IDs
[**ezsigndocumentGetObjectV1()**](ObjectEzsigndocumentApi.md#ezsigndocumentGetObjectV1) | **GET** /1/object/ezsigndocument/{pkiEzsigndocumentID} | Retrieve an existing Ezsigndocument


## `ezsigndocumentApplyEzsigntemplateV1()`

```php
ezsigndocumentApplyEzsigntemplateV1($pkiEzsigndocumentID, $ezsigndocumentApplyEzsigntemplateV1Request): \eZmaxAPI\Model\EzsigndocumentApplyEzsigntemplateV1Response
```

Apply an Ezsign Template to the Ezsigndocument.

This endpoint applies a predefined template to the ezsign document. This allows to automatically apply all the form and signature fields on a document in a single step.  The document must not already have fields otherwise an error will be returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsigndocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzsigndocumentID = 56; // int | The unique ID of the Ezsigndocument
$ezsigndocumentApplyEzsigntemplateV1Request = new \eZmaxAPI\Model\EzsigndocumentApplyEzsigntemplateV1Request(); // \eZmaxAPI\Model\EzsigndocumentApplyEzsigntemplateV1Request

try {
    $result = $apiInstance->ezsigndocumentApplyEzsigntemplateV1($pkiEzsigndocumentID, $ezsigndocumentApplyEzsigntemplateV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsigndocumentApi->ezsigndocumentApplyEzsigntemplateV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pkiEzsigndocumentID** | **int**| The unique ID of the Ezsigndocument |
 **ezsigndocumentApplyEzsigntemplateV1Request** | [**\eZmaxAPI\Model\EzsigndocumentApplyEzsigntemplateV1Request**](../Model/EzsigndocumentApplyEzsigntemplateV1Request.md)|  |

### Return type

[**\eZmaxAPI\Model\EzsigndocumentApplyEzsigntemplateV1Response**](../Model/EzsigndocumentApplyEzsigntemplateV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezsigndocumentCreateObjectV1()`

```php
ezsigndocumentCreateObjectV1($ezsigndocumentCreateObjectV1Request): \eZmaxAPI\Model\EzsigndocumentCreateObjectV1Response
```

Create a new Ezsigndocument

The endpoint allows to create one or many elements at once.  The array can contain simple (Just the object) or compound (The object and its child) objects.  Creating compound elements allows to reduce the multiple requests to create all child objects.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsigndocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ezsigndocumentCreateObjectV1Request = array(new \eZmaxAPI\Model\EzsigndocumentCreateObjectV1Request()); // \eZmaxAPI\Model\EzsigndocumentCreateObjectV1Request[]

try {
    $result = $apiInstance->ezsigndocumentCreateObjectV1($ezsigndocumentCreateObjectV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsigndocumentApi->ezsigndocumentCreateObjectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ezsigndocumentCreateObjectV1Request** | [**\eZmaxAPI\Model\EzsigndocumentCreateObjectV1Request[]**](../Model/EzsigndocumentCreateObjectV1Request.md)|  |

### Return type

[**\eZmaxAPI\Model\EzsigndocumentCreateObjectV1Response**](../Model/EzsigndocumentCreateObjectV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezsigndocumentDeleteObjectV1()`

```php
ezsigndocumentDeleteObjectV1($pkiEzsigndocumentID): \eZmaxAPI\Model\EzsigndocumentDeleteObjectV1Response
```

Delete an existing Ezsigndocument

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsigndocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzsigndocumentID = 56; // int | The unique ID of the Ezsigndocument

try {
    $result = $apiInstance->ezsigndocumentDeleteObjectV1($pkiEzsigndocumentID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsigndocumentApi->ezsigndocumentDeleteObjectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pkiEzsigndocumentID** | **int**| The unique ID of the Ezsigndocument |

### Return type

[**\eZmaxAPI\Model\EzsigndocumentDeleteObjectV1Response**](../Model/EzsigndocumentDeleteObjectV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezsigndocumentEditObjectV1()`

```php
ezsigndocumentEditObjectV1($pkiEzsigndocumentID, $ezsigndocumentEditObjectV1Request): \eZmaxAPI\Model\EzsigndocumentEditObjectV1Response
```

Modify an existing Ezsigndocument

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsigndocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzsigndocumentID = 56; // int | The unique ID of the Ezsigndocument
$ezsigndocumentEditObjectV1Request = new \eZmaxAPI\Model\EzsigndocumentEditObjectV1Request(); // \eZmaxAPI\Model\EzsigndocumentEditObjectV1Request

try {
    $result = $apiInstance->ezsigndocumentEditObjectV1($pkiEzsigndocumentID, $ezsigndocumentEditObjectV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsigndocumentApi->ezsigndocumentEditObjectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pkiEzsigndocumentID** | **int**| The unique ID of the Ezsigndocument |
 **ezsigndocumentEditObjectV1Request** | [**\eZmaxAPI\Model\EzsigndocumentEditObjectV1Request**](../Model/EzsigndocumentEditObjectV1Request.md)|  |

### Return type

[**\eZmaxAPI\Model\EzsigndocumentEditObjectV1Response**](../Model/EzsigndocumentEditObjectV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezsigndocumentGetDownloadUrlV1()`

```php
ezsigndocumentGetDownloadUrlV1($pkiEzsigndocumentID, $eDocumentType): \eZmaxAPI\Model\EzsigndocumentGetDownloadUrlV1Response
```

Retrieve a URL to download documents.

This endpoint returns URLs to different files that can be downloaded during the signing process.  These links will expire after 5 minutes so the download of the file should be made soon after retrieving the link.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsigndocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzsigndocumentID = 56; // int | The unique ID of the Ezsigndocument
$eDocumentType = 'eDocumentType_example'; // string | The type of document to retrieve.  1. **Initial** Is the initial document before any signature were applied. 2. **Signed** Is the final document once all signatures were applied. 3. **Proofdocument** Is the evidence report. 4. **Proof** Is the complete evidence archive including all of the above and more.

try {
    $result = $apiInstance->ezsigndocumentGetDownloadUrlV1($pkiEzsigndocumentID, $eDocumentType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsigndocumentApi->ezsigndocumentGetDownloadUrlV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pkiEzsigndocumentID** | **int**| The unique ID of the Ezsigndocument |
 **eDocumentType** | **string**| The type of document to retrieve.  1. **Initial** Is the initial document before any signature were applied. 2. **Signed** Is the final document once all signatures were applied. 3. **Proofdocument** Is the evidence report. 4. **Proof** Is the complete evidence archive including all of the above and more. |

### Return type

[**\eZmaxAPI\Model\EzsigndocumentGetDownloadUrlV1Response**](../Model/EzsigndocumentGetDownloadUrlV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezsigndocumentGetObjectGetChildrenV1()`

```php
ezsigndocumentGetObjectGetChildrenV1($pkiEzsigndocumentID)
```

Retrieve an existing Ezsigndocument's children IDs

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsigndocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzsigndocumentID = 56; // int | The unique ID of the Ezsigndocument

try {
    $apiInstance->ezsigndocumentGetObjectGetChildrenV1($pkiEzsigndocumentID);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsigndocumentApi->ezsigndocumentGetObjectGetChildrenV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pkiEzsigndocumentID** | **int**| The unique ID of the Ezsigndocument |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezsigndocumentGetObjectV1()`

```php
ezsigndocumentGetObjectV1($pkiEzsigndocumentID): \eZmaxAPI\Model\EzsigndocumentGetObjectV1Response
```

Retrieve an existing Ezsigndocument

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsigndocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzsigndocumentID = 56; // int | The unique ID of the Ezsigndocument

try {
    $result = $apiInstance->ezsigndocumentGetObjectV1($pkiEzsigndocumentID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsigndocumentApi->ezsigndocumentGetObjectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pkiEzsigndocumentID** | **int**| The unique ID of the Ezsigndocument |

### Return type

[**\eZmaxAPI\Model\EzsigndocumentGetObjectV1Response**](../Model/EzsigndocumentGetObjectV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
