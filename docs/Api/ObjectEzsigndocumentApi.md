# eZmaxAPI\ObjectEzsigndocumentApi

All URIs are relative to https://prod.api.appcluster01.ca-central-1.ezmax.com/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**ezsigndocumentApplyEzsigntemplateV1()**](ObjectEzsigndocumentApi.md#ezsigndocumentApplyEzsigntemplateV1) | **POST** /1/object/ezsigndocument/{pkiEzsigndocumentID}/applyezsigntemplate | Apply an Ezsigntemplate to the Ezsigndocument. |
| [**ezsigndocumentApplyEzsigntemplateV2()**](ObjectEzsigndocumentApi.md#ezsigndocumentApplyEzsigntemplateV2) | **POST** /2/object/ezsigndocument/{pkiEzsigndocumentID}/applyEzsigntemplate | Apply an Ezsigntemplate to the Ezsigndocument. |
| [**ezsigndocumentCreateObjectV1()**](ObjectEzsigndocumentApi.md#ezsigndocumentCreateObjectV1) | **POST** /1/object/ezsigndocument | Create a new Ezsigndocument |
| [**ezsigndocumentCreateObjectV2()**](ObjectEzsigndocumentApi.md#ezsigndocumentCreateObjectV2) | **POST** /2/object/ezsigndocument | Create a new Ezsigndocument |
| [**ezsigndocumentDeleteObjectV1()**](ObjectEzsigndocumentApi.md#ezsigndocumentDeleteObjectV1) | **DELETE** /1/object/ezsigndocument/{pkiEzsigndocumentID} | Delete an existing Ezsigndocument |
| [**ezsigndocumentEditEzsignformfieldgroupsV1()**](ObjectEzsigndocumentApi.md#ezsigndocumentEditEzsignformfieldgroupsV1) | **PUT** /1/object/ezsigndocument/{pkiEzsigndocumentID}/editEzsignformfieldgroups | Edit multiple Ezsignformfieldgroups |
| [**ezsigndocumentEditEzsignsignaturesV1()**](ObjectEzsigndocumentApi.md#ezsigndocumentEditEzsignsignaturesV1) | **PUT** /1/object/ezsigndocument/{pkiEzsigndocumentID}/editEzsignsignatures | Edit multiple Ezsignsignatures |
| [**ezsigndocumentEndPrematurelyV1()**](ObjectEzsigndocumentApi.md#ezsigndocumentEndPrematurelyV1) | **POST** /1/object/ezsigndocument/{pkiEzsigndocumentID}/endPrematurely | End prematurely |
| [**ezsigndocumentFlattenV1()**](ObjectEzsigndocumentApi.md#ezsigndocumentFlattenV1) | **POST** /1/object/ezsigndocument/{pkiEzsigndocumentID}/flatten | Flatten |
| [**ezsigndocumentGetActionableElementsV1()**](ObjectEzsigndocumentApi.md#ezsigndocumentGetActionableElementsV1) | **GET** /1/object/ezsigndocument/{pkiEzsigndocumentID}/getActionableElements | Retrieve actionable elements for the Ezsigndocument |
| [**ezsigndocumentGetCompletedElementsV1()**](ObjectEzsigndocumentApi.md#ezsigndocumentGetCompletedElementsV1) | **GET** /1/object/ezsigndocument/{pkiEzsigndocumentID}/getCompletedElements | Retrieve completed elements for the Ezsigndocument |
| [**ezsigndocumentGetDownloadUrlV1()**](ObjectEzsigndocumentApi.md#ezsigndocumentGetDownloadUrlV1) | **GET** /1/object/ezsigndocument/{pkiEzsigndocumentID}/getDownloadUrl/{eDocumentType} | Retrieve a URL to download documents. |
| [**ezsigndocumentGetEzsignannotationsV1()**](ObjectEzsigndocumentApi.md#ezsigndocumentGetEzsignannotationsV1) | **GET** /1/object/ezsigndocument/{pkiEzsigndocumentID}/getEzsignannotations | Retrieve an existing Ezsigndocument&#39;s Ezsignannotations |
| [**ezsigndocumentGetEzsignformfieldgroupsV1()**](ObjectEzsigndocumentApi.md#ezsigndocumentGetEzsignformfieldgroupsV1) | **GET** /1/object/ezsigndocument/{pkiEzsigndocumentID}/getEzsignformfieldgroups | Retrieve an existing Ezsigndocument&#39;s Ezsignformfieldgroups |
| [**ezsigndocumentGetEzsignpagesV1()**](ObjectEzsigndocumentApi.md#ezsigndocumentGetEzsignpagesV1) | **GET** /1/object/ezsigndocument/{pkiEzsigndocumentID}/getEzsignpages | Retrieve an existing Ezsigndocument&#39;s Ezsignpages |
| [**ezsigndocumentGetEzsignsignaturesAutomaticV1()**](ObjectEzsigndocumentApi.md#ezsigndocumentGetEzsignsignaturesAutomaticV1) | **GET** /1/object/ezsigndocument/{pkiEzsigndocumentID}/getEzsignsignaturesAutomatic | Retrieve an existing Ezsigndocument&#39;s automatic Ezsignsignatures |
| [**ezsigndocumentGetEzsignsignaturesV1()**](ObjectEzsigndocumentApi.md#ezsigndocumentGetEzsignsignaturesV1) | **GET** /1/object/ezsigndocument/{pkiEzsigndocumentID}/getEzsignsignatures | Retrieve an existing Ezsigndocument&#39;s Ezsignsignatures |
| [**ezsigndocumentGetFormDataV1()**](ObjectEzsigndocumentApi.md#ezsigndocumentGetFormDataV1) | **GET** /1/object/ezsigndocument/{pkiEzsigndocumentID}/getFormData | Retrieve an existing Ezsigndocument&#39;s Form Data |
| [**ezsigndocumentGetObjectV1()**](ObjectEzsigndocumentApi.md#ezsigndocumentGetObjectV1) | **GET** /1/object/ezsigndocument/{pkiEzsigndocumentID} | Retrieve an existing Ezsigndocument |
| [**ezsigndocumentGetObjectV2()**](ObjectEzsigndocumentApi.md#ezsigndocumentGetObjectV2) | **GET** /2/object/ezsigndocument/{pkiEzsigndocumentID} | Retrieve an existing Ezsigndocument |
| [**ezsigndocumentGetTemporaryProofV1()**](ObjectEzsigndocumentApi.md#ezsigndocumentGetTemporaryProofV1) | **GET** /1/object/ezsigndocument/{pkiEzsigndocumentID}/getTemporaryProof | Retrieve the temporary proof |
| [**ezsigndocumentGetWordsPositionsV1()**](ObjectEzsigndocumentApi.md#ezsigndocumentGetWordsPositionsV1) | **POST** /1/object/ezsigndocument/{pkiEzsigndocumentID}/getWordsPositions | Retrieve positions X,Y of given words from a Ezsigndocument |
| [**ezsigndocumentPatchObjectV1()**](ObjectEzsigndocumentApi.md#ezsigndocumentPatchObjectV1) | **PATCH** /1/object/ezsigndocument/{pkiEzsigndocumentID} | Patch an existing Ezsigndocument |
| [**ezsigndocumentUnsendV1()**](ObjectEzsigndocumentApi.md#ezsigndocumentUnsendV1) | **POST** /1/object/ezsigndocument/{pkiEzsigndocumentID}/unsend | Unsend the Ezsigndocument |


## `ezsigndocumentApplyEzsigntemplateV1()`

```php
ezsigndocumentApplyEzsigntemplateV1($pkiEzsigndocumentID, $ezsigndocumentApplyEzsigntemplateV1Request): \eZmaxAPI\Model\EzsigndocumentApplyEzsigntemplateV1Response
```

Apply an Ezsigntemplate to the Ezsigndocument.

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

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiEzsigndocumentID** | **int**|  | |
| **ezsigndocumentApplyEzsigntemplateV1Request** | [**\eZmaxAPI\Model\EzsigndocumentApplyEzsigntemplateV1Request**](../Model/EzsigndocumentApplyEzsigntemplateV1Request.md)|  | |

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

Apply an Ezsigntemplate to the Ezsigndocument.

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

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiEzsigndocumentID** | **int**|  | |
| **ezsigndocumentApplyEzsigntemplateV2Request** | [**\eZmaxAPI\Model\EzsigndocumentApplyEzsigntemplateV2Request**](../Model/EzsigndocumentApplyEzsigntemplateV2Request.md)|  | |

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

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ezsigndocumentCreateObjectV1Request** | [**\eZmaxAPI\Model\EzsigndocumentCreateObjectV1Request[]**](../Model/EzsigndocumentCreateObjectV1Request.md)|  | |

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

## `ezsigndocumentCreateObjectV2()`

```php
ezsigndocumentCreateObjectV2($ezsigndocumentCreateObjectV2Request): \eZmaxAPI\Model\EzsigndocumentCreateObjectV2Response
```

Create a new Ezsigndocument

The endpoint allows to create one or many elements at once.

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
$ezsigndocumentCreateObjectV2Request = new \eZmaxAPI\Model\EzsigndocumentCreateObjectV2Request(); // \eZmaxAPI\Model\EzsigndocumentCreateObjectV2Request

try {
    $result = $apiInstance->ezsigndocumentCreateObjectV2($ezsigndocumentCreateObjectV2Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsigndocumentApi->ezsigndocumentCreateObjectV2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ezsigndocumentCreateObjectV2Request** | [**\eZmaxAPI\Model\EzsigndocumentCreateObjectV2Request**](../Model/EzsigndocumentCreateObjectV2Request.md)|  | |

### Return type

[**\eZmaxAPI\Model\EzsigndocumentCreateObjectV2Response**](../Model/EzsigndocumentCreateObjectV2Response.md)

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

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiEzsigndocumentID** | **int**|  | |

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

## `ezsigndocumentEditEzsignformfieldgroupsV1()`

```php
ezsigndocumentEditEzsignformfieldgroupsV1($pkiEzsigndocumentID, $ezsigndocumentEditEzsignformfieldgroupsV1Request): \eZmaxAPI\Model\EzsigndocumentEditEzsignformfieldgroupsV1Response
```

Edit multiple Ezsignformfieldgroups

Using this endpoint, you can edit multiple Ezsignformfieldgroups at the same time.

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
$ezsigndocumentEditEzsignformfieldgroupsV1Request = new \eZmaxAPI\Model\EzsigndocumentEditEzsignformfieldgroupsV1Request(); // \eZmaxAPI\Model\EzsigndocumentEditEzsignformfieldgroupsV1Request

try {
    $result = $apiInstance->ezsigndocumentEditEzsignformfieldgroupsV1($pkiEzsigndocumentID, $ezsigndocumentEditEzsignformfieldgroupsV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsigndocumentApi->ezsigndocumentEditEzsignformfieldgroupsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiEzsigndocumentID** | **int**|  | |
| **ezsigndocumentEditEzsignformfieldgroupsV1Request** | [**\eZmaxAPI\Model\EzsigndocumentEditEzsignformfieldgroupsV1Request**](../Model/EzsigndocumentEditEzsignformfieldgroupsV1Request.md)|  | |

### Return type

[**\eZmaxAPI\Model\EzsigndocumentEditEzsignformfieldgroupsV1Response**](../Model/EzsigndocumentEditEzsignformfieldgroupsV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezsigndocumentEditEzsignsignaturesV1()`

```php
ezsigndocumentEditEzsignsignaturesV1($pkiEzsigndocumentID, $ezsigndocumentEditEzsignsignaturesV1Request): \eZmaxAPI\Model\EzsigndocumentEditEzsignsignaturesV1Response
```

Edit multiple Ezsignsignatures

Using this endpoint, you can edit multiple Ezsignsignatures at the same time.

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
$ezsigndocumentEditEzsignsignaturesV1Request = new \eZmaxAPI\Model\EzsigndocumentEditEzsignsignaturesV1Request(); // \eZmaxAPI\Model\EzsigndocumentEditEzsignsignaturesV1Request

try {
    $result = $apiInstance->ezsigndocumentEditEzsignsignaturesV1($pkiEzsigndocumentID, $ezsigndocumentEditEzsignsignaturesV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsigndocumentApi->ezsigndocumentEditEzsignsignaturesV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiEzsigndocumentID** | **int**|  | |
| **ezsigndocumentEditEzsignsignaturesV1Request** | [**\eZmaxAPI\Model\EzsigndocumentEditEzsignsignaturesV1Request**](../Model/EzsigndocumentEditEzsignsignaturesV1Request.md)|  | |

### Return type

[**\eZmaxAPI\Model\EzsigndocumentEditEzsignsignaturesV1Response**](../Model/EzsigndocumentEditEzsignsignaturesV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezsigndocumentEndPrematurelyV1()`

```php
ezsigndocumentEndPrematurelyV1($pkiEzsigndocumentID, $body): \eZmaxAPI\Model\EzsigndocumentEndPrematurelyV1Response
```

End prematurely

End prematurely an Ezsigndocument when some signatures are still required

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
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->ezsigndocumentEndPrematurelyV1($pkiEzsigndocumentID, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsigndocumentApi->ezsigndocumentEndPrematurelyV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiEzsigndocumentID** | **int**|  | |
| **body** | **object**|  | |

### Return type

[**\eZmaxAPI\Model\EzsigndocumentEndPrematurelyV1Response**](../Model/EzsigndocumentEndPrematurelyV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezsigndocumentFlattenV1()`

```php
ezsigndocumentFlattenV1($pkiEzsigndocumentID, $body): \eZmaxAPI\Model\EzsigndocumentFlattenV1Response
```

Flatten

Flatten an Ezsigndocument signatures, forms and annotations. This process finalizes the PDF so that the forms and annotations become part of the document content and cannot be edited.

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
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->ezsigndocumentFlattenV1($pkiEzsigndocumentID, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsigndocumentApi->ezsigndocumentFlattenV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiEzsigndocumentID** | **int**|  | |
| **body** | **object**|  | |

### Return type

[**\eZmaxAPI\Model\EzsigndocumentFlattenV1Response**](../Model/EzsigndocumentFlattenV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezsigndocumentGetActionableElementsV1()`

```php
ezsigndocumentGetActionableElementsV1($pkiEzsigndocumentID): \eZmaxAPI\Model\EzsigndocumentGetActionableElementsV1Response
```

Retrieve actionable elements for the Ezsigndocument

Return the Ezsignsignatures that can be signed and Ezsignformfieldgroups that can be filled by the current user at the current step in the process

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
    $result = $apiInstance->ezsigndocumentGetActionableElementsV1($pkiEzsigndocumentID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsigndocumentApi->ezsigndocumentGetActionableElementsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiEzsigndocumentID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\EzsigndocumentGetActionableElementsV1Response**](../Model/EzsigndocumentGetActionableElementsV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezsigndocumentGetCompletedElementsV1()`

```php
ezsigndocumentGetCompletedElementsV1($pkiEzsigndocumentID): \eZmaxAPI\Model\EzsigndocumentGetCompletedElementsV1Response
```

Retrieve completed elements for the Ezsigndocument

Return the completed Ezsignsignatures, Ezsignformfieldgroups and Ezsignannotations at the current step in the process

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
    $result = $apiInstance->ezsigndocumentGetCompletedElementsV1($pkiEzsigndocumentID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsigndocumentApi->ezsigndocumentGetCompletedElementsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiEzsigndocumentID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\EzsigndocumentGetCompletedElementsV1Response**](../Model/EzsigndocumentGetCompletedElementsV1Response.md)

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

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiEzsigndocumentID** | **int**|  | |
| **eDocumentType** | **string**| The type of document to retrieve.  1. **Initial** Is the initial document before any signature were applied. 2. **Signed** Is the final document once all signatures were applied. 3. **Proofdocument** Is the evidence report. 4. **Proof** Is the complete evidence archive including all of the above and more. | |

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

## `ezsigndocumentGetEzsignannotationsV1()`

```php
ezsigndocumentGetEzsignannotationsV1($pkiEzsigndocumentID): \eZmaxAPI\Model\EzsigndocumentGetEzsignannotationsV1Response
```

Retrieve an existing Ezsigndocument's Ezsignannotations



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
    $result = $apiInstance->ezsigndocumentGetEzsignannotationsV1($pkiEzsigndocumentID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsigndocumentApi->ezsigndocumentGetEzsignannotationsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiEzsigndocumentID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\EzsigndocumentGetEzsignannotationsV1Response**](../Model/EzsigndocumentGetEzsignannotationsV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezsigndocumentGetEzsignformfieldgroupsV1()`

```php
ezsigndocumentGetEzsignformfieldgroupsV1($pkiEzsigndocumentID): \eZmaxAPI\Model\EzsigndocumentGetEzsignformfieldgroupsV1Response
```

Retrieve an existing Ezsigndocument's Ezsignformfieldgroups



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
    $result = $apiInstance->ezsigndocumentGetEzsignformfieldgroupsV1($pkiEzsigndocumentID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsigndocumentApi->ezsigndocumentGetEzsignformfieldgroupsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiEzsigndocumentID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\EzsigndocumentGetEzsignformfieldgroupsV1Response**](../Model/EzsigndocumentGetEzsignformfieldgroupsV1Response.md)

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

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiEzsigndocumentID** | **int**|  | |

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

## `ezsigndocumentGetEzsignsignaturesAutomaticV1()`

```php
ezsigndocumentGetEzsignsignaturesAutomaticV1($pkiEzsigndocumentID): \eZmaxAPI\Model\EzsigndocumentGetEzsignsignaturesAutomaticV1Response
```

Retrieve an existing Ezsigndocument's automatic Ezsignsignatures

Return the Ezsignsignatures that can be signed by the current user at the current step in the process

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
    $result = $apiInstance->ezsigndocumentGetEzsignsignaturesAutomaticV1($pkiEzsigndocumentID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsigndocumentApi->ezsigndocumentGetEzsignsignaturesAutomaticV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiEzsigndocumentID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\EzsigndocumentGetEzsignsignaturesAutomaticV1Response**](../Model/EzsigndocumentGetEzsignsignaturesAutomaticV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezsigndocumentGetEzsignsignaturesV1()`

```php
ezsigndocumentGetEzsignsignaturesV1($pkiEzsigndocumentID): \eZmaxAPI\Model\EzsigndocumentGetEzsignsignaturesV1Response
```

Retrieve an existing Ezsigndocument's Ezsignsignatures



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
    $result = $apiInstance->ezsigndocumentGetEzsignsignaturesV1($pkiEzsigndocumentID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsigndocumentApi->ezsigndocumentGetEzsignsignaturesV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiEzsigndocumentID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\EzsigndocumentGetEzsignsignaturesV1Response**](../Model/EzsigndocumentGetEzsignsignaturesV1Response.md)

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

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiEzsigndocumentID** | **int**|  | |

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

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiEzsigndocumentID** | **int**|  | |

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

## `ezsigndocumentGetObjectV2()`

```php
ezsigndocumentGetObjectV2($pkiEzsigndocumentID): \eZmaxAPI\Model\EzsigndocumentGetObjectV2Response
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
$pkiEzsigndocumentID = 56; // int

try {
    $result = $apiInstance->ezsigndocumentGetObjectV2($pkiEzsigndocumentID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsigndocumentApi->ezsigndocumentGetObjectV2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiEzsigndocumentID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\EzsigndocumentGetObjectV2Response**](../Model/EzsigndocumentGetObjectV2Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezsigndocumentGetTemporaryProofV1()`

```php
ezsigndocumentGetTemporaryProofV1($pkiEzsigndocumentID): \eZmaxAPI\Model\EzsigndocumentGetTemporaryProofV1Response
```

Retrieve the temporary proof

Retrieve the temporary proof while the Ezsigndocument is being processed since the proof isn't available until the Ezsigndocument is completed

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
    $result = $apiInstance->ezsigndocumentGetTemporaryProofV1($pkiEzsigndocumentID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsigndocumentApi->ezsigndocumentGetTemporaryProofV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiEzsigndocumentID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\EzsigndocumentGetTemporaryProofV1Response**](../Model/EzsigndocumentGetTemporaryProofV1Response.md)

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

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiEzsigndocumentID** | **int**|  | |
| **ezsigndocumentGetWordsPositionsV1Request** | [**\eZmaxAPI\Model\EzsigndocumentGetWordsPositionsV1Request**](../Model/EzsigndocumentGetWordsPositionsV1Request.md)|  | |

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

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiEzsigndocumentID** | **int**|  | |
| **ezsigndocumentPatchObjectV1Request** | [**\eZmaxAPI\Model\EzsigndocumentPatchObjectV1Request**](../Model/EzsigndocumentPatchObjectV1Request.md)|  | |

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

## `ezsigndocumentUnsendV1()`

```php
ezsigndocumentUnsendV1($pkiEzsigndocumentID, $body): \eZmaxAPI\Model\EzsigndocumentUnsendV1Response
```

Unsend the Ezsigndocument

Once an Ezsigndocument has been sent to signatories, it cannot be modified.  Using this endpoint, you can unsend the Ezsigndocument and make it modifiable again.  Signatories will receive an email informing them the signature process was aborted and they might receive a new invitation to sign.  ⚠️ Warning: Any signature previously made by signatories on this Ezsigndocumentswill be lost.

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
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->ezsigndocumentUnsendV1($pkiEzsigndocumentID, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsigndocumentApi->ezsigndocumentUnsendV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiEzsigndocumentID** | **int**|  | |
| **body** | **object**|  | |

### Return type

[**\eZmaxAPI\Model\EzsigndocumentUnsendV1Response**](../Model/EzsigndocumentUnsendV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
