# eZmaxAPI\ObjectEzsigntemplatedocumentApi

All URIs are relative to https://prod.api.appcluster01.ca-central-1.ezmax.com/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**ezsigntemplatedocumentCreateObjectV1()**](ObjectEzsigntemplatedocumentApi.md#ezsigntemplatedocumentCreateObjectV1) | **POST** /1/object/ezsigntemplatedocument | Create a new Ezsigntemplatedocument |
| [**ezsigntemplatedocumentEditEzsigntemplatedocumentpagerecognitionsV1()**](ObjectEzsigntemplatedocumentApi.md#ezsigntemplatedocumentEditEzsigntemplatedocumentpagerecognitionsV1) | **PUT** /1/object/ezsigntemplatedocument/{pkiEzsigntemplatedocumentID}/editEzsigntemplatedocumentpagerecognitions | Edit multiple Ezsigntemplatedocumentpagerecognitions |
| [**ezsigntemplatedocumentEditEzsigntemplateformfieldgroupsV1()**](ObjectEzsigntemplatedocumentApi.md#ezsigntemplatedocumentEditEzsigntemplateformfieldgroupsV1) | **PUT** /1/object/ezsigntemplatedocument/{pkiEzsigntemplatedocumentID}/editEzsigntemplateformfieldgroups | Edit multiple Ezsigntemplateformfieldgroups |
| [**ezsigntemplatedocumentEditEzsigntemplatesignaturesV1()**](ObjectEzsigntemplatedocumentApi.md#ezsigntemplatedocumentEditEzsigntemplatesignaturesV1) | **PUT** /1/object/ezsigntemplatedocument/{pkiEzsigntemplatedocumentID}/editEzsigntemplatesignatures | Edit multiple Ezsigntemplatesignatures |
| [**ezsigntemplatedocumentEditObjectV1()**](ObjectEzsigntemplatedocumentApi.md#ezsigntemplatedocumentEditObjectV1) | **PUT** /1/object/ezsigntemplatedocument/{pkiEzsigntemplatedocumentID} | Edit an existing Ezsigntemplatedocument |
| [**ezsigntemplatedocumentExtractTextV1()**](ObjectEzsigntemplatedocumentApi.md#ezsigntemplatedocumentExtractTextV1) | **POST** /1/object/ezsigntemplatedocument/{pkiEzsigntemplatedocumentID}/extractText | Extract text from Ezsigntemplatedocument area |
| [**ezsigntemplatedocumentFlattenV1()**](ObjectEzsigntemplatedocumentApi.md#ezsigntemplatedocumentFlattenV1) | **POST** /1/object/ezsigntemplatedocument/{pkiEzsigntemplatedocumentID}/flatten | Flatten |
| [**ezsigntemplatedocumentGetEzsigntemplatedocumentpagerecognitionsV1()**](ObjectEzsigntemplatedocumentApi.md#ezsigntemplatedocumentGetEzsigntemplatedocumentpagerecognitionsV1) | **GET** /1/object/ezsigntemplatedocument/{pkiEzsigntemplatedocumentID}/getEzsigntemplatedocumentpagerecognitions | Retrieve an existing Ezsigntemplatedocument&#39;s Ezsigntemplatedocumentpagerecognitions |
| [**ezsigntemplatedocumentGetEzsigntemplatedocumentpagesV1()**](ObjectEzsigntemplatedocumentApi.md#ezsigntemplatedocumentGetEzsigntemplatedocumentpagesV1) | **GET** /1/object/ezsigntemplatedocument/{pkiEzsigntemplatedocumentID}/getEzsigntemplatedocumentpages | Retrieve an existing Ezsigntemplatedocument&#39;s Ezsigntemplatedocumentpages |
| [**ezsigntemplatedocumentGetEzsigntemplateformfieldgroupsV1()**](ObjectEzsigntemplatedocumentApi.md#ezsigntemplatedocumentGetEzsigntemplateformfieldgroupsV1) | **GET** /1/object/ezsigntemplatedocument/{pkiEzsigntemplatedocumentID}/getEzsigntemplateformfieldgroups | Retrieve an existing Ezsigntemplatedocument&#39;s Ezsigntemplateformfieldgroups |
| [**ezsigntemplatedocumentGetEzsigntemplatesignaturesV1()**](ObjectEzsigntemplatedocumentApi.md#ezsigntemplatedocumentGetEzsigntemplatesignaturesV1) | **GET** /1/object/ezsigntemplatedocument/{pkiEzsigntemplatedocumentID}/getEzsigntemplatesignatures | Retrieve an existing Ezsigntemplatedocument&#39;s Ezsigntemplatesignatures |
| [**ezsigntemplatedocumentGetObjectV2()**](ObjectEzsigntemplatedocumentApi.md#ezsigntemplatedocumentGetObjectV2) | **GET** /2/object/ezsigntemplatedocument/{pkiEzsigntemplatedocumentID} | Retrieve an existing Ezsigntemplatedocument |
| [**ezsigntemplatedocumentGetWordsPositionsV1()**](ObjectEzsigntemplatedocumentApi.md#ezsigntemplatedocumentGetWordsPositionsV1) | **POST** /1/object/ezsigntemplatedocument/{pkiEzsigntemplatedocumentID}/getWordsPositions | Retrieve positions X,Y of given words from a Ezsigntemplatedocument |
| [**ezsigntemplatedocumentPatchObjectV1()**](ObjectEzsigntemplatedocumentApi.md#ezsigntemplatedocumentPatchObjectV1) | **PATCH** /1/object/ezsigntemplatedocument/{pkiEzsigntemplatedocumentID} | Patch an existing Ezsigntemplatedocument |


## `ezsigntemplatedocumentCreateObjectV1()`

```php
ezsigntemplatedocumentCreateObjectV1($ezsigntemplatedocumentCreateObjectV1Request): \eZmaxAPI\Model\EzsigntemplatedocumentCreateObjectV1Response
```

Create a new Ezsigntemplatedocument

The endpoint allows to create one or many elements at once.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsigntemplatedocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ezsigntemplatedocumentCreateObjectV1Request = new \eZmaxAPI\Model\EzsigntemplatedocumentCreateObjectV1Request(); // \eZmaxAPI\Model\EzsigntemplatedocumentCreateObjectV1Request

try {
    $result = $apiInstance->ezsigntemplatedocumentCreateObjectV1($ezsigntemplatedocumentCreateObjectV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsigntemplatedocumentApi->ezsigntemplatedocumentCreateObjectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ezsigntemplatedocumentCreateObjectV1Request** | [**\eZmaxAPI\Model\EzsigntemplatedocumentCreateObjectV1Request**](../Model/EzsigntemplatedocumentCreateObjectV1Request.md)|  | |

### Return type

[**\eZmaxAPI\Model\EzsigntemplatedocumentCreateObjectV1Response**](../Model/EzsigntemplatedocumentCreateObjectV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezsigntemplatedocumentEditEzsigntemplatedocumentpagerecognitionsV1()`

```php
ezsigntemplatedocumentEditEzsigntemplatedocumentpagerecognitionsV1($pkiEzsigntemplatedocumentID, $ezsigntemplatedocumentEditEzsigntemplatedocumentpagerecognitionsV1Request): \eZmaxAPI\Model\EzsigntemplatedocumentEditEzsigntemplatedocumentpagerecognitionsV1Response
```

Edit multiple Ezsigntemplatedocumentpagerecognitions

Edit multiple Ezsigntemplatedocumentpagerecognitions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsigntemplatedocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzsigntemplatedocumentID = 56; // int
$ezsigntemplatedocumentEditEzsigntemplatedocumentpagerecognitionsV1Request = new \eZmaxAPI\Model\EzsigntemplatedocumentEditEzsigntemplatedocumentpagerecognitionsV1Request(); // \eZmaxAPI\Model\EzsigntemplatedocumentEditEzsigntemplatedocumentpagerecognitionsV1Request

try {
    $result = $apiInstance->ezsigntemplatedocumentEditEzsigntemplatedocumentpagerecognitionsV1($pkiEzsigntemplatedocumentID, $ezsigntemplatedocumentEditEzsigntemplatedocumentpagerecognitionsV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsigntemplatedocumentApi->ezsigntemplatedocumentEditEzsigntemplatedocumentpagerecognitionsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiEzsigntemplatedocumentID** | **int**|  | |
| **ezsigntemplatedocumentEditEzsigntemplatedocumentpagerecognitionsV1Request** | [**\eZmaxAPI\Model\EzsigntemplatedocumentEditEzsigntemplatedocumentpagerecognitionsV1Request**](../Model/EzsigntemplatedocumentEditEzsigntemplatedocumentpagerecognitionsV1Request.md)|  | |

### Return type

[**\eZmaxAPI\Model\EzsigntemplatedocumentEditEzsigntemplatedocumentpagerecognitionsV1Response**](../Model/EzsigntemplatedocumentEditEzsigntemplatedocumentpagerecognitionsV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezsigntemplatedocumentEditEzsigntemplateformfieldgroupsV1()`

```php
ezsigntemplatedocumentEditEzsigntemplateformfieldgroupsV1($pkiEzsigntemplatedocumentID, $ezsigntemplatedocumentEditEzsigntemplateformfieldgroupsV1Request): \eZmaxAPI\Model\EzsigntemplatedocumentEditEzsigntemplateformfieldgroupsV1Response
```

Edit multiple Ezsigntemplateformfieldgroups

Using this endpoint, you can edit multiple Ezsigntemplateformfieldgroups at the same time.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsigntemplatedocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzsigntemplatedocumentID = 56; // int
$ezsigntemplatedocumentEditEzsigntemplateformfieldgroupsV1Request = new \eZmaxAPI\Model\EzsigntemplatedocumentEditEzsigntemplateformfieldgroupsV1Request(); // \eZmaxAPI\Model\EzsigntemplatedocumentEditEzsigntemplateformfieldgroupsV1Request

try {
    $result = $apiInstance->ezsigntemplatedocumentEditEzsigntemplateformfieldgroupsV1($pkiEzsigntemplatedocumentID, $ezsigntemplatedocumentEditEzsigntemplateformfieldgroupsV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsigntemplatedocumentApi->ezsigntemplatedocumentEditEzsigntemplateformfieldgroupsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiEzsigntemplatedocumentID** | **int**|  | |
| **ezsigntemplatedocumentEditEzsigntemplateformfieldgroupsV1Request** | [**\eZmaxAPI\Model\EzsigntemplatedocumentEditEzsigntemplateformfieldgroupsV1Request**](../Model/EzsigntemplatedocumentEditEzsigntemplateformfieldgroupsV1Request.md)|  | |

### Return type

[**\eZmaxAPI\Model\EzsigntemplatedocumentEditEzsigntemplateformfieldgroupsV1Response**](../Model/EzsigntemplatedocumentEditEzsigntemplateformfieldgroupsV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezsigntemplatedocumentEditEzsigntemplatesignaturesV1()`

```php
ezsigntemplatedocumentEditEzsigntemplatesignaturesV1($pkiEzsigntemplatedocumentID, $ezsigntemplatedocumentEditEzsigntemplatesignaturesV1Request): \eZmaxAPI\Model\EzsigntemplatedocumentEditEzsigntemplatesignaturesV1Response
```

Edit multiple Ezsigntemplatesignatures

Using this endpoint, you can edit multiple Ezsigntemplatesignatures at the same time.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsigntemplatedocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzsigntemplatedocumentID = 56; // int
$ezsigntemplatedocumentEditEzsigntemplatesignaturesV1Request = new \eZmaxAPI\Model\EzsigntemplatedocumentEditEzsigntemplatesignaturesV1Request(); // \eZmaxAPI\Model\EzsigntemplatedocumentEditEzsigntemplatesignaturesV1Request

try {
    $result = $apiInstance->ezsigntemplatedocumentEditEzsigntemplatesignaturesV1($pkiEzsigntemplatedocumentID, $ezsigntemplatedocumentEditEzsigntemplatesignaturesV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsigntemplatedocumentApi->ezsigntemplatedocumentEditEzsigntemplatesignaturesV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiEzsigntemplatedocumentID** | **int**|  | |
| **ezsigntemplatedocumentEditEzsigntemplatesignaturesV1Request** | [**\eZmaxAPI\Model\EzsigntemplatedocumentEditEzsigntemplatesignaturesV1Request**](../Model/EzsigntemplatedocumentEditEzsigntemplatesignaturesV1Request.md)|  | |

### Return type

[**\eZmaxAPI\Model\EzsigntemplatedocumentEditEzsigntemplatesignaturesV1Response**](../Model/EzsigntemplatedocumentEditEzsigntemplatesignaturesV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezsigntemplatedocumentEditObjectV1()`

```php
ezsigntemplatedocumentEditObjectV1($pkiEzsigntemplatedocumentID, $ezsigntemplatedocumentEditObjectV1Request): \eZmaxAPI\Model\EzsigntemplatedocumentEditObjectV1Response
```

Edit an existing Ezsigntemplatedocument



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsigntemplatedocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzsigntemplatedocumentID = 56; // int
$ezsigntemplatedocumentEditObjectV1Request = new \eZmaxAPI\Model\EzsigntemplatedocumentEditObjectV1Request(); // \eZmaxAPI\Model\EzsigntemplatedocumentEditObjectV1Request

try {
    $result = $apiInstance->ezsigntemplatedocumentEditObjectV1($pkiEzsigntemplatedocumentID, $ezsigntemplatedocumentEditObjectV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsigntemplatedocumentApi->ezsigntemplatedocumentEditObjectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiEzsigntemplatedocumentID** | **int**|  | |
| **ezsigntemplatedocumentEditObjectV1Request** | [**\eZmaxAPI\Model\EzsigntemplatedocumentEditObjectV1Request**](../Model/EzsigntemplatedocumentEditObjectV1Request.md)|  | |

### Return type

[**\eZmaxAPI\Model\EzsigntemplatedocumentEditObjectV1Response**](../Model/EzsigntemplatedocumentEditObjectV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezsigntemplatedocumentExtractTextV1()`

```php
ezsigntemplatedocumentExtractTextV1($pkiEzsigntemplatedocumentID, $ezsigntemplatedocumentExtractTextV1Request): \eZmaxAPI\Model\EzsigntemplatedocumentExtractTextV1Response
```

Extract text from Ezsigntemplatedocument area

Extract text from Ezsigntemplatedocument area

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsigntemplatedocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzsigntemplatedocumentID = 56; // int
$ezsigntemplatedocumentExtractTextV1Request = new \eZmaxAPI\Model\EzsigntemplatedocumentExtractTextV1Request(); // \eZmaxAPI\Model\EzsigntemplatedocumentExtractTextV1Request

try {
    $result = $apiInstance->ezsigntemplatedocumentExtractTextV1($pkiEzsigntemplatedocumentID, $ezsigntemplatedocumentExtractTextV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsigntemplatedocumentApi->ezsigntemplatedocumentExtractTextV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiEzsigntemplatedocumentID** | **int**|  | |
| **ezsigntemplatedocumentExtractTextV1Request** | [**\eZmaxAPI\Model\EzsigntemplatedocumentExtractTextV1Request**](../Model/EzsigntemplatedocumentExtractTextV1Request.md)|  | |

### Return type

[**\eZmaxAPI\Model\EzsigntemplatedocumentExtractTextV1Response**](../Model/EzsigntemplatedocumentExtractTextV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezsigntemplatedocumentFlattenV1()`

```php
ezsigntemplatedocumentFlattenV1($pkiEzsigntemplatedocumentID, $body): \eZmaxAPI\Model\EzsigntemplatedocumentFlattenV1Response
```

Flatten

Flatten an Ezsigntemplatedocument signatures, forms and annotations. This process finalizes the PDF so that the forms and annotations become part of the document content and cannot be edited.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsigntemplatedocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzsigntemplatedocumentID = 56; // int
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->ezsigntemplatedocumentFlattenV1($pkiEzsigntemplatedocumentID, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsigntemplatedocumentApi->ezsigntemplatedocumentFlattenV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiEzsigntemplatedocumentID** | **int**|  | |
| **body** | **object**|  | |

### Return type

[**\eZmaxAPI\Model\EzsigntemplatedocumentFlattenV1Response**](../Model/EzsigntemplatedocumentFlattenV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezsigntemplatedocumentGetEzsigntemplatedocumentpagerecognitionsV1()`

```php
ezsigntemplatedocumentGetEzsigntemplatedocumentpagerecognitionsV1($pkiEzsigntemplatedocumentID): \eZmaxAPI\Model\EzsigntemplatedocumentGetEzsigntemplatedocumentpagerecognitionsV1Response
```

Retrieve an existing Ezsigntemplatedocument's Ezsigntemplatedocumentpagerecognitions



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsigntemplatedocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzsigntemplatedocumentID = 56; // int

try {
    $result = $apiInstance->ezsigntemplatedocumentGetEzsigntemplatedocumentpagerecognitionsV1($pkiEzsigntemplatedocumentID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsigntemplatedocumentApi->ezsigntemplatedocumentGetEzsigntemplatedocumentpagerecognitionsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiEzsigntemplatedocumentID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\EzsigntemplatedocumentGetEzsigntemplatedocumentpagerecognitionsV1Response**](../Model/EzsigntemplatedocumentGetEzsigntemplatedocumentpagerecognitionsV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezsigntemplatedocumentGetEzsigntemplatedocumentpagesV1()`

```php
ezsigntemplatedocumentGetEzsigntemplatedocumentpagesV1($pkiEzsigntemplatedocumentID): \eZmaxAPI\Model\EzsigntemplatedocumentGetEzsigntemplatedocumentpagesV1Response
```

Retrieve an existing Ezsigntemplatedocument's Ezsigntemplatedocumentpages



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsigntemplatedocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzsigntemplatedocumentID = 56; // int

try {
    $result = $apiInstance->ezsigntemplatedocumentGetEzsigntemplatedocumentpagesV1($pkiEzsigntemplatedocumentID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsigntemplatedocumentApi->ezsigntemplatedocumentGetEzsigntemplatedocumentpagesV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiEzsigntemplatedocumentID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\EzsigntemplatedocumentGetEzsigntemplatedocumentpagesV1Response**](../Model/EzsigntemplatedocumentGetEzsigntemplatedocumentpagesV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezsigntemplatedocumentGetEzsigntemplateformfieldgroupsV1()`

```php
ezsigntemplatedocumentGetEzsigntemplateformfieldgroupsV1($pkiEzsigntemplatedocumentID): \eZmaxAPI\Model\EzsigntemplatedocumentGetEzsigntemplateformfieldgroupsV1Response
```

Retrieve an existing Ezsigntemplatedocument's Ezsigntemplateformfieldgroups



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsigntemplatedocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzsigntemplatedocumentID = 56; // int

try {
    $result = $apiInstance->ezsigntemplatedocumentGetEzsigntemplateformfieldgroupsV1($pkiEzsigntemplatedocumentID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsigntemplatedocumentApi->ezsigntemplatedocumentGetEzsigntemplateformfieldgroupsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiEzsigntemplatedocumentID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\EzsigntemplatedocumentGetEzsigntemplateformfieldgroupsV1Response**](../Model/EzsigntemplatedocumentGetEzsigntemplateformfieldgroupsV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezsigntemplatedocumentGetEzsigntemplatesignaturesV1()`

```php
ezsigntemplatedocumentGetEzsigntemplatesignaturesV1($pkiEzsigntemplatedocumentID): \eZmaxAPI\Model\EzsigntemplatedocumentGetEzsigntemplatesignaturesV1Response
```

Retrieve an existing Ezsigntemplatedocument's Ezsigntemplatesignatures



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsigntemplatedocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzsigntemplatedocumentID = 56; // int

try {
    $result = $apiInstance->ezsigntemplatedocumentGetEzsigntemplatesignaturesV1($pkiEzsigntemplatedocumentID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsigntemplatedocumentApi->ezsigntemplatedocumentGetEzsigntemplatesignaturesV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiEzsigntemplatedocumentID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\EzsigntemplatedocumentGetEzsigntemplatesignaturesV1Response**](../Model/EzsigntemplatedocumentGetEzsigntemplatesignaturesV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezsigntemplatedocumentGetObjectV2()`

```php
ezsigntemplatedocumentGetObjectV2($pkiEzsigntemplatedocumentID): \eZmaxAPI\Model\EzsigntemplatedocumentGetObjectV2Response
```

Retrieve an existing Ezsigntemplatedocument



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsigntemplatedocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzsigntemplatedocumentID = 56; // int

try {
    $result = $apiInstance->ezsigntemplatedocumentGetObjectV2($pkiEzsigntemplatedocumentID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsigntemplatedocumentApi->ezsigntemplatedocumentGetObjectV2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiEzsigntemplatedocumentID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\EzsigntemplatedocumentGetObjectV2Response**](../Model/EzsigntemplatedocumentGetObjectV2Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezsigntemplatedocumentGetWordsPositionsV1()`

```php
ezsigntemplatedocumentGetWordsPositionsV1($pkiEzsigntemplatedocumentID, $ezsigntemplatedocumentGetWordsPositionsV1Request): \eZmaxAPI\Model\EzsigntemplatedocumentGetWordsPositionsV1Response
```

Retrieve positions X,Y of given words from a Ezsigntemplatedocument



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsigntemplatedocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzsigntemplatedocumentID = 56; // int
$ezsigntemplatedocumentGetWordsPositionsV1Request = new \eZmaxAPI\Model\EzsigntemplatedocumentGetWordsPositionsV1Request(); // \eZmaxAPI\Model\EzsigntemplatedocumentGetWordsPositionsV1Request

try {
    $result = $apiInstance->ezsigntemplatedocumentGetWordsPositionsV1($pkiEzsigntemplatedocumentID, $ezsigntemplatedocumentGetWordsPositionsV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsigntemplatedocumentApi->ezsigntemplatedocumentGetWordsPositionsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiEzsigntemplatedocumentID** | **int**|  | |
| **ezsigntemplatedocumentGetWordsPositionsV1Request** | [**\eZmaxAPI\Model\EzsigntemplatedocumentGetWordsPositionsV1Request**](../Model/EzsigntemplatedocumentGetWordsPositionsV1Request.md)|  | |

### Return type

[**\eZmaxAPI\Model\EzsigntemplatedocumentGetWordsPositionsV1Response**](../Model/EzsigntemplatedocumentGetWordsPositionsV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezsigntemplatedocumentPatchObjectV1()`

```php
ezsigntemplatedocumentPatchObjectV1($pkiEzsigntemplatedocumentID, $ezsigntemplatedocumentPatchObjectV1Request): \eZmaxAPI\Model\EzsigntemplatedocumentPatchObjectV1Response
```

Patch an existing Ezsigntemplatedocument



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsigntemplatedocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzsigntemplatedocumentID = 56; // int
$ezsigntemplatedocumentPatchObjectV1Request = new \eZmaxAPI\Model\EzsigntemplatedocumentPatchObjectV1Request(); // \eZmaxAPI\Model\EzsigntemplatedocumentPatchObjectV1Request

try {
    $result = $apiInstance->ezsigntemplatedocumentPatchObjectV1($pkiEzsigntemplatedocumentID, $ezsigntemplatedocumentPatchObjectV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsigntemplatedocumentApi->ezsigntemplatedocumentPatchObjectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiEzsigntemplatedocumentID** | **int**|  | |
| **ezsigntemplatedocumentPatchObjectV1Request** | [**\eZmaxAPI\Model\EzsigntemplatedocumentPatchObjectV1Request**](../Model/EzsigntemplatedocumentPatchObjectV1Request.md)|  | |

### Return type

[**\eZmaxAPI\Model\EzsigntemplatedocumentPatchObjectV1Response**](../Model/EzsigntemplatedocumentPatchObjectV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
