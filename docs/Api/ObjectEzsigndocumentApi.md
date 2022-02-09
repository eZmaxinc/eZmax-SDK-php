# eZmaxAPI\ObjectEzsigndocumentApi

All URIs are relative to https://prod.api.appcluster01.ca-central-1.ezmax.com/rest.

Method | HTTP request | Description
------------- | ------------- | -------------
[**ezsigndocumentApplyEzsigntemplateV1()**](ObjectEzsigndocumentApi.md#ezsigndocumentApplyEzsigntemplateV1) | **POST** /1/object/ezsigndocument/{pkiEzsigndocumentID}/applyezsigntemplate | Apply an Ezsign Template to the Ezsigndocument.
[**ezsigndocumentApplyEzsigntemplateV2()**](ObjectEzsigndocumentApi.md#ezsigndocumentApplyEzsigntemplateV2) | **POST** /2/object/ezsigndocument/{pkiEzsigndocumentID}/applyEzsigntemplate | Apply an Ezsign Template to the Ezsigndocument.
[**ezsigndocumentCreateObjectV1()**](ObjectEzsigndocumentApi.md#ezsigndocumentCreateObjectV1) | **POST** /1/object/ezsigndocument | Create a new Ezsigndocument
[**ezsigndocumentDeleteObjectV1()**](ObjectEzsigndocumentApi.md#ezsigndocumentDeleteObjectV1) | **DELETE** /1/object/ezsigndocument/{pkiEzsigndocumentID} | Delete an existing Ezsigndocument
[**ezsigndocumentGetDownloadUrlV1()**](ObjectEzsigndocumentApi.md#ezsigndocumentGetDownloadUrlV1) | **GET** /1/object/ezsigndocument/{pkiEzsigndocumentID}/getDownloadUrl/{eDocumentType} | Retrieve a URL to download documents.
[**ezsigndocumentGetEzsignpagesV1()**](ObjectEzsigndocumentApi.md#ezsigndocumentGetEzsignpagesV1) | **GET** /1/object/ezsigndocument/{pkiEzsigndocumentID}/getEzsignpages | Retrieve an existing Ezsigndocument&#39;s Ezsignpages
[**ezsigndocumentGetFormDataV1()**](ObjectEzsigndocumentApi.md#ezsigndocumentGetFormDataV1) | **GET** /1/object/ezsigndocument/{pkiEzsigndocumentID}/getFormData | Retrieve an existing Ezsigndocument&#39;s Form Data
[**ezsigndocumentGetObjectV1()**](ObjectEzsigndocumentApi.md#ezsigndocumentGetObjectV1) | **GET** /1/object/ezsigndocument/{pkiEzsigndocumentID} | Retrieve an existing Ezsigndocument
[**ezsigndocumentGetWordsPositionsV1()**](ObjectEzsigndocumentApi.md#ezsigndocumentGetWordsPositionsV1) | **POST** /1/object/ezsigndocument/{pkiEzsigndocumentID}/getWordsPositions | Retrieve positions X,Y of given words from a Ezsigndocument
[**ezsigndocumentPatchObjectV1()**](ObjectEzsigndocumentApi.md#ezsigndocumentPatchObjectV1) | **PATCH** /1/object/ezsigndocument/{pkiEzsigndocumentID} | Patch an existing Ezsigndocument


## `ezsigndocumentApplyEzsigntemplateV1()`

```php
ezsigndocumentApplyEzsigntemplateV1($pkiEzsigndocumentID, $ezsigndocumentApplyEzsigntemplateV1Request): \eZmaxAPI\Model\EzsigndocumentApplyEzsigntemplateV1Response
```

Apply an Ezsign Template to the Ezsigndocument.

This function is deprecated. Please use *applyEzsigntemplate* instead which is doing the same thing but with a capital \"E\" to normalize the nomenclature.  This endpoint applies a predefined template to the ezsign document. This allows to automatically apply all the form and signature fields on a document in a single step.  The document must not already have fields otherwise an error will be returned.

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
$pkiEzsigndocumentID = 56; // int
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
 **pkiEzsigndocumentID** | **int**|  |
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

## `ezsigndocumentApplyEzsigntemplateV2()`

```php
ezsigndocumentApplyEzsigntemplateV2($pkiEzsigndocumentID, $ezsigndocumentApplyEzsigntemplateV2Request): \eZmaxAPI\Model\EzsigndocumentApplyEzsigntemplateV2Response
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
$pkiEzsigndocumentID = 56; // int
$ezsigndocumentApplyEzsigntemplateV2Request = new \eZmaxAPI\Model\EzsigndocumentApplyEzsigntemplateV2Request(); // \eZmaxAPI\Model\EzsigndocumentApplyEzsigntemplateV2Request

try {
    $result = $apiInstance->ezsigndocumentApplyEzsigntemplateV2($pkiEzsigndocumentID, $ezsigndocumentApplyEzsigntemplateV2Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsigndocumentApi->ezsigndocumentApplyEzsigntemplateV2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pkiEzsigndocumentID** | **int**|  |
 **ezsigndocumentApplyEzsigntemplateV2Request** | [**\eZmaxAPI\Model\EzsigndocumentApplyEzsigntemplateV2Request**](../Model/EzsigndocumentApplyEzsigntemplateV2Request.md)|  |

### Return type

[**\eZmaxAPI\Model\EzsigndocumentApplyEzsigntemplateV2Response**](../Model/EzsigndocumentApplyEzsigntemplateV2Response.md)

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
$pkiEzsigndocumentID = 56; // int

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
 **pkiEzsigndocumentID** | **int**|  |

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
$pkiEzsigndocumentID = 56; // int
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
 **pkiEzsigndocumentID** | **int**|  |
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

## `ezsigndocumentGetEzsignpagesV1()`

```php
ezsigndocumentGetEzsignpagesV1($pkiEzsigndocumentID): \eZmaxAPI\Model\EzsigndocumentGetEzsignpagesV1Response
```

Retrieve an existing Ezsigndocument's Ezsignpages

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
$pkiEzsigndocumentID = 56; // int

try {
    $result = $apiInstance->ezsigndocumentGetEzsignpagesV1($pkiEzsigndocumentID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsigndocumentApi->ezsigndocumentGetEzsignpagesV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pkiEzsigndocumentID** | **int**|  |

### Return type

[**\eZmaxAPI\Model\EzsigndocumentGetEzsignpagesV1Response**](../Model/EzsigndocumentGetEzsignpagesV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezsigndocumentGetFormDataV1()`

```php
ezsigndocumentGetFormDataV1($pkiEzsigndocumentID): \eZmaxAPI\Model\EzsigndocumentGetFormDataV1Response
```

Retrieve an existing Ezsigndocument's Form Data

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
$pkiEzsigndocumentID = 56; // int

try {
    $result = $apiInstance->ezsigndocumentGetFormDataV1($pkiEzsigndocumentID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsigndocumentApi->ezsigndocumentGetFormDataV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pkiEzsigndocumentID** | **int**|  |

### Return type

[**\eZmaxAPI\Model\EzsigndocumentGetFormDataV1Response**](../Model/EzsigndocumentGetFormDataV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/zip`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezsigndocumentGetObjectV1()`

```php
ezsigndocumentGetObjectV1($pkiEzsigndocumentID): \eZmaxAPI\Model\EzsigndocumentGetObjectV1Response
```

Retrieve an existing Ezsigndocument

## ⚠️EARLY ADOPTERS WARNING  ### This endpoint is not officially released. Its definition might still change and it might not be available in every environment and region.

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
$pkiEzsigndocumentID = 56; // int

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
 **pkiEzsigndocumentID** | **int**|  |

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

## `ezsigndocumentGetWordsPositionsV1()`

```php
ezsigndocumentGetWordsPositionsV1($pkiEzsigndocumentID, $ezsigndocumentGetWordsPositionsV1Request): \eZmaxAPI\Model\EzsigndocumentGetWordsPositionsV1Response
```

Retrieve positions X,Y of given words from a Ezsigndocument

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
$pkiEzsigndocumentID = 56; // int
$ezsigndocumentGetWordsPositionsV1Request = new \eZmaxAPI\Model\EzsigndocumentGetWordsPositionsV1Request(); // \eZmaxAPI\Model\EzsigndocumentGetWordsPositionsV1Request

try {
    $result = $apiInstance->ezsigndocumentGetWordsPositionsV1($pkiEzsigndocumentID, $ezsigndocumentGetWordsPositionsV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsigndocumentApi->ezsigndocumentGetWordsPositionsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pkiEzsigndocumentID** | **int**|  |
 **ezsigndocumentGetWordsPositionsV1Request** | [**\eZmaxAPI\Model\EzsigndocumentGetWordsPositionsV1Request**](../Model/EzsigndocumentGetWordsPositionsV1Request.md)|  |

### Return type

[**\eZmaxAPI\Model\EzsigndocumentGetWordsPositionsV1Response**](../Model/EzsigndocumentGetWordsPositionsV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezsigndocumentPatchObjectV1()`

```php
ezsigndocumentPatchObjectV1($pkiEzsigndocumentID, $ezsigndocumentPatchObjectV1Request): \eZmaxAPI\Model\EzsigndocumentPatchObjectV1Response
```

Patch an existing Ezsigndocument

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
$pkiEzsigndocumentID = 56; // int
$ezsigndocumentPatchObjectV1Request = new \eZmaxAPI\Model\EzsigndocumentPatchObjectV1Request(); // \eZmaxAPI\Model\EzsigndocumentPatchObjectV1Request

try {
    $result = $apiInstance->ezsigndocumentPatchObjectV1($pkiEzsigndocumentID, $ezsigndocumentPatchObjectV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsigndocumentApi->ezsigndocumentPatchObjectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pkiEzsigndocumentID** | **int**|  |
 **ezsigndocumentPatchObjectV1Request** | [**\eZmaxAPI\Model\EzsigndocumentPatchObjectV1Request**](../Model/EzsigndocumentPatchObjectV1Request.md)|  |

### Return type

[**\eZmaxAPI\Model\EzsigndocumentPatchObjectV1Response**](../Model/EzsigndocumentPatchObjectV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
