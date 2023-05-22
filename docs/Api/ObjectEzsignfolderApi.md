# eZmaxAPI\ObjectEzsignfolderApi

All URIs are relative to https://prod.api.appcluster01.ca-central-1.ezmax.com/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**ezsignfolderArchiveV1()**](ObjectEzsignfolderApi.md#ezsignfolderArchiveV1) | **POST** /1/object/ezsignfolder/{pkiEzsignfolderID}/archive | Archive the Ezsignfolder |
| [**ezsignfolderBatchDownloadV1()**](ObjectEzsignfolderApi.md#ezsignfolderBatchDownloadV1) | **POST** /1/object/ezsignfolder/{pkiEzsignfolderID}/batchDownload | Download multiples files from an Ezsignfolder |
| [**ezsignfolderCreateObjectV1()**](ObjectEzsignfolderApi.md#ezsignfolderCreateObjectV1) | **POST** /1/object/ezsignfolder | Create a new Ezsignfolder |
| [**ezsignfolderCreateObjectV2()**](ObjectEzsignfolderApi.md#ezsignfolderCreateObjectV2) | **POST** /2/object/ezsignfolder | Create a new Ezsignfolder |
| [**ezsignfolderDeleteObjectV1()**](ObjectEzsignfolderApi.md#ezsignfolderDeleteObjectV1) | **DELETE** /1/object/ezsignfolder/{pkiEzsignfolderID} | Delete an existing Ezsignfolder |
| [**ezsignfolderDisposeEzsignfoldersV1()**](ObjectEzsignfolderApi.md#ezsignfolderDisposeEzsignfoldersV1) | **POST** /1/object/ezsignfolder/disposeEzsignfolders | Dispose Ezsignfolders |
| [**ezsignfolderDisposeV1()**](ObjectEzsignfolderApi.md#ezsignfolderDisposeV1) | **POST** /1/object/ezsignfolder/{pkiEzsignfolderID}/dispose | Dispose the Ezsignfolder |
| [**ezsignfolderEditObjectV1()**](ObjectEzsignfolderApi.md#ezsignfolderEditObjectV1) | **PUT** /1/object/ezsignfolder/{pkiEzsignfolderID} | Edit an existing Ezsignfolder |
| [**ezsignfolderGetActionableElementsV1()**](ObjectEzsignfolderApi.md#ezsignfolderGetActionableElementsV1) | **GET** /1/object/ezsignfolder/{pkiEzsignfolderID}/getActionableElements | Retrieve actionable elements for the Ezsignfolder |
| [**ezsignfolderGetCommunicationCountV1()**](ObjectEzsignfolderApi.md#ezsignfolderGetCommunicationCountV1) | **GET** /1/object/ezsignfolder/{pkiEzsignfolderID}/getCommunicationCount | Retrieve Communication count |
| [**ezsignfolderGetCommunicationListV1()**](ObjectEzsignfolderApi.md#ezsignfolderGetCommunicationListV1) | **GET** /1/object/ezsignfolder/{pkiEzsignfolderID}/getCommunicationList | Retrieve Communication list |
| [**ezsignfolderGetEzsigndocumentsV1()**](ObjectEzsignfolderApi.md#ezsignfolderGetEzsigndocumentsV1) | **GET** /1/object/ezsignfolder/{pkiEzsignfolderID}/getEzsigndocuments | Retrieve an existing Ezsignfolder&#39;s Ezsigndocuments |
| [**ezsignfolderGetEzsignfoldersignerassociationsV1()**](ObjectEzsignfolderApi.md#ezsignfolderGetEzsignfoldersignerassociationsV1) | **GET** /1/object/ezsignfolder/{pkiEzsignfolderID}/getEzsignfoldersignerassociations | Retrieve an existing Ezsignfolder&#39;s Ezsignfoldersignerassociations |
| [**ezsignfolderGetEzsignsignaturesAutomaticV1()**](ObjectEzsignfolderApi.md#ezsignfolderGetEzsignsignaturesAutomaticV1) | **GET** /1/object/ezsignfolder/{pkiEzsignfolderID}/getEzsignsignaturesAutomatic | Retrieve an existing Ezsignfolder&#39;s automatic Ezsignsignatures |
| [**ezsignfolderGetFormsDataV1()**](ObjectEzsignfolderApi.md#ezsignfolderGetFormsDataV1) | **GET** /1/object/ezsignfolder/{pkiEzsignfolderID}/getFormsData | Retrieve an existing Ezsignfolder&#39;s forms data |
| [**ezsignfolderGetListV1()**](ObjectEzsignfolderApi.md#ezsignfolderGetListV1) | **GET** /1/object/ezsignfolder/getList | Retrieve Ezsignfolder list |
| [**ezsignfolderGetObjectV1()**](ObjectEzsignfolderApi.md#ezsignfolderGetObjectV1) | **GET** /1/object/ezsignfolder/{pkiEzsignfolderID} | Retrieve an existing Ezsignfolder |
| [**ezsignfolderGetObjectV2()**](ObjectEzsignfolderApi.md#ezsignfolderGetObjectV2) | **GET** /2/object/ezsignfolder/{pkiEzsignfolderID} | Retrieve an existing Ezsignfolder |
| [**ezsignfolderImportEzsignfoldersignerassociationsV1()**](ObjectEzsignfolderApi.md#ezsignfolderImportEzsignfoldersignerassociationsV1) | **POST** /1/object/ezsignfolder/{pkiEzsignfolderID}/importEzsignfoldersignerassociations | Import an existing Ezsignfoldersignerassociation into this Ezsignfolder |
| [**ezsignfolderImportEzsigntemplatepackageV1()**](ObjectEzsignfolderApi.md#ezsignfolderImportEzsigntemplatepackageV1) | **POST** /1/object/ezsignfolder/{pkiEzsignfolderID}/importEzsigntemplatepackage | Import an Ezsigntemplatepackage in the Ezsignfolder. |
| [**ezsignfolderReorderV1()**](ObjectEzsignfolderApi.md#ezsignfolderReorderV1) | **POST** /1/object/ezsignfolder/{pkiEzsignfolderID}/reorder | Reorder Ezsigndocuments in the Ezsignfolder |
| [**ezsignfolderSendV1()**](ObjectEzsignfolderApi.md#ezsignfolderSendV1) | **POST** /1/object/ezsignfolder/{pkiEzsignfolderID}/send | Send the Ezsignfolder to the signatories for signature |
| [**ezsignfolderSendV2()**](ObjectEzsignfolderApi.md#ezsignfolderSendV2) | **POST** /2/object/ezsignfolder/{pkiEzsignfolderID}/send | Send the Ezsignfolder to the signatories for signature |
| [**ezsignfolderSendV3()**](ObjectEzsignfolderApi.md#ezsignfolderSendV3) | **POST** /3/object/ezsignfolder/{pkiEzsignfolderID}/send | Send the Ezsignfolder to the signatories for signature |
| [**ezsignfolderUnsendV1()**](ObjectEzsignfolderApi.md#ezsignfolderUnsendV1) | **POST** /1/object/ezsignfolder/{pkiEzsignfolderID}/unsend | Unsend the Ezsignfolder |


## `ezsignfolderArchiveV1()`

```php
ezsignfolderArchiveV1($pkiEzsignfolderID, $body): \eZmaxAPI\Model\EzsignfolderArchiveV1Response
```

Archive the Ezsignfolder



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsignfolderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzsignfolderID = 56; // int
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->ezsignfolderArchiveV1($pkiEzsignfolderID, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsignfolderApi->ezsignfolderArchiveV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiEzsignfolderID** | **int**|  | |
| **body** | **object**|  | |

### Return type

[**\eZmaxAPI\Model\EzsignfolderArchiveV1Response**](../Model/EzsignfolderArchiveV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezsignfolderBatchDownloadV1()`

```php
ezsignfolderBatchDownloadV1($pkiEzsignfolderID, $ezsignfolderBatchDownloadV1Request): \SplFileObject
```

Download multiples files from an Ezsignfolder

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsignfolderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzsignfolderID = 56; // int
$ezsignfolderBatchDownloadV1Request = new \eZmaxAPI\Model\EzsignfolderBatchDownloadV1Request(); // \eZmaxAPI\Model\EzsignfolderBatchDownloadV1Request

try {
    $result = $apiInstance->ezsignfolderBatchDownloadV1($pkiEzsignfolderID, $ezsignfolderBatchDownloadV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsignfolderApi->ezsignfolderBatchDownloadV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiEzsignfolderID** | **int**|  | |
| **ezsignfolderBatchDownloadV1Request** | [**\eZmaxAPI\Model\EzsignfolderBatchDownloadV1Request**](../Model/EzsignfolderBatchDownloadV1Request.md)|  | |

### Return type

**\SplFileObject**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/zip`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezsignfolderCreateObjectV1()`

```php
ezsignfolderCreateObjectV1($ezsignfolderCreateObjectV1Request): \eZmaxAPI\Model\EzsignfolderCreateObjectV1Response
```

Create a new Ezsignfolder

The endpoint allows to create one or many elements at once.  The array can contain simple (Just the object) or compound (The object and its child) objects.  Creating compound elements allows to reduce the multiple requests to create all child objects.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsignfolderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ezsignfolderCreateObjectV1Request = array(new \eZmaxAPI\Model\EzsignfolderCreateObjectV1Request()); // \eZmaxAPI\Model\EzsignfolderCreateObjectV1Request[]

try {
    $result = $apiInstance->ezsignfolderCreateObjectV1($ezsignfolderCreateObjectV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsignfolderApi->ezsignfolderCreateObjectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ezsignfolderCreateObjectV1Request** | [**\eZmaxAPI\Model\EzsignfolderCreateObjectV1Request[]**](../Model/EzsignfolderCreateObjectV1Request.md)|  | |

### Return type

[**\eZmaxAPI\Model\EzsignfolderCreateObjectV1Response**](../Model/EzsignfolderCreateObjectV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezsignfolderCreateObjectV2()`

```php
ezsignfolderCreateObjectV2($ezsignfolderCreateObjectV2Request): \eZmaxAPI\Model\EzsignfolderCreateObjectV2Response
```

Create a new Ezsignfolder

The endpoint allows to create one or many elements at once.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsignfolderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ezsignfolderCreateObjectV2Request = new \eZmaxAPI\Model\EzsignfolderCreateObjectV2Request(); // \eZmaxAPI\Model\EzsignfolderCreateObjectV2Request

try {
    $result = $apiInstance->ezsignfolderCreateObjectV2($ezsignfolderCreateObjectV2Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsignfolderApi->ezsignfolderCreateObjectV2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ezsignfolderCreateObjectV2Request** | [**\eZmaxAPI\Model\EzsignfolderCreateObjectV2Request**](../Model/EzsignfolderCreateObjectV2Request.md)|  | |

### Return type

[**\eZmaxAPI\Model\EzsignfolderCreateObjectV2Response**](../Model/EzsignfolderCreateObjectV2Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezsignfolderDeleteObjectV1()`

```php
ezsignfolderDeleteObjectV1($pkiEzsignfolderID): \eZmaxAPI\Model\EzsignfolderDeleteObjectV1Response
```

Delete an existing Ezsignfolder

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsignfolderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzsignfolderID = 56; // int

try {
    $result = $apiInstance->ezsignfolderDeleteObjectV1($pkiEzsignfolderID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsignfolderApi->ezsignfolderDeleteObjectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiEzsignfolderID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\EzsignfolderDeleteObjectV1Response**](../Model/EzsignfolderDeleteObjectV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezsignfolderDisposeEzsignfoldersV1()`

```php
ezsignfolderDisposeEzsignfoldersV1($ezsignfolderDisposeEzsignfoldersV1Request): \eZmaxAPI\Model\EzsignfolderDisposeEzsignfoldersV1Response
```

Dispose Ezsignfolders



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsignfolderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ezsignfolderDisposeEzsignfoldersV1Request = new \eZmaxAPI\Model\EzsignfolderDisposeEzsignfoldersV1Request(); // \eZmaxAPI\Model\EzsignfolderDisposeEzsignfoldersV1Request

try {
    $result = $apiInstance->ezsignfolderDisposeEzsignfoldersV1($ezsignfolderDisposeEzsignfoldersV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsignfolderApi->ezsignfolderDisposeEzsignfoldersV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ezsignfolderDisposeEzsignfoldersV1Request** | [**\eZmaxAPI\Model\EzsignfolderDisposeEzsignfoldersV1Request**](../Model/EzsignfolderDisposeEzsignfoldersV1Request.md)|  | |

### Return type

[**\eZmaxAPI\Model\EzsignfolderDisposeEzsignfoldersV1Response**](../Model/EzsignfolderDisposeEzsignfoldersV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezsignfolderDisposeV1()`

```php
ezsignfolderDisposeV1($pkiEzsignfolderID, $body): \eZmaxAPI\Model\EzsignfolderDisposeV1Response
```

Dispose the Ezsignfolder



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsignfolderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzsignfolderID = 56; // int
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->ezsignfolderDisposeV1($pkiEzsignfolderID, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsignfolderApi->ezsignfolderDisposeV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiEzsignfolderID** | **int**|  | |
| **body** | **object**|  | |

### Return type

[**\eZmaxAPI\Model\EzsignfolderDisposeV1Response**](../Model/EzsignfolderDisposeV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezsignfolderEditObjectV1()`

```php
ezsignfolderEditObjectV1($pkiEzsignfolderID, $ezsignfolderEditObjectV1Request): \eZmaxAPI\Model\EzsignfolderEditObjectV1Response
```

Edit an existing Ezsignfolder



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsignfolderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzsignfolderID = 56; // int
$ezsignfolderEditObjectV1Request = new \eZmaxAPI\Model\EzsignfolderEditObjectV1Request(); // \eZmaxAPI\Model\EzsignfolderEditObjectV1Request

try {
    $result = $apiInstance->ezsignfolderEditObjectV1($pkiEzsignfolderID, $ezsignfolderEditObjectV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsignfolderApi->ezsignfolderEditObjectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiEzsignfolderID** | **int**|  | |
| **ezsignfolderEditObjectV1Request** | [**\eZmaxAPI\Model\EzsignfolderEditObjectV1Request**](../Model/EzsignfolderEditObjectV1Request.md)|  | |

### Return type

[**\eZmaxAPI\Model\EzsignfolderEditObjectV1Response**](../Model/EzsignfolderEditObjectV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezsignfolderGetActionableElementsV1()`

```php
ezsignfolderGetActionableElementsV1($pkiEzsignfolderID): \eZmaxAPI\Model\EzsignfolderGetActionableElementsV1Response
```

Retrieve actionable elements for the Ezsignfolder

Return the Ezsignsignatures that can be signed and Ezsignformfieldgroups that can be filled by the current user at the current step in the process

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsignfolderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzsignfolderID = 56; // int

try {
    $result = $apiInstance->ezsignfolderGetActionableElementsV1($pkiEzsignfolderID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsignfolderApi->ezsignfolderGetActionableElementsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiEzsignfolderID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\EzsignfolderGetActionableElementsV1Response**](../Model/EzsignfolderGetActionableElementsV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezsignfolderGetCommunicationCountV1()`

```php
ezsignfolderGetCommunicationCountV1($pkiEzsignfolderID): \eZmaxAPI\Model\EzsignfolderGetCommunicationCountV1Response
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


$apiInstance = new eZmaxAPI\Api\ObjectEzsignfolderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzsignfolderID = 56; // int

try {
    $result = $apiInstance->ezsignfolderGetCommunicationCountV1($pkiEzsignfolderID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsignfolderApi->ezsignfolderGetCommunicationCountV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiEzsignfolderID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\EzsignfolderGetCommunicationCountV1Response**](../Model/EzsignfolderGetCommunicationCountV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezsignfolderGetCommunicationListV1()`

```php
ezsignfolderGetCommunicationListV1($pkiEzsignfolderID): \eZmaxAPI\Model\EzsignfolderGetCommunicationListV1Response
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


$apiInstance = new eZmaxAPI\Api\ObjectEzsignfolderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzsignfolderID = 56; // int

try {
    $result = $apiInstance->ezsignfolderGetCommunicationListV1($pkiEzsignfolderID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsignfolderApi->ezsignfolderGetCommunicationListV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiEzsignfolderID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\EzsignfolderGetCommunicationListV1Response**](../Model/EzsignfolderGetCommunicationListV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezsignfolderGetEzsigndocumentsV1()`

```php
ezsignfolderGetEzsigndocumentsV1($pkiEzsignfolderID): \eZmaxAPI\Model\EzsignfolderGetEzsigndocumentsV1Response
```

Retrieve an existing Ezsignfolder's Ezsigndocuments



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsignfolderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzsignfolderID = 56; // int

try {
    $result = $apiInstance->ezsignfolderGetEzsigndocumentsV1($pkiEzsignfolderID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsignfolderApi->ezsignfolderGetEzsigndocumentsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiEzsignfolderID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\EzsignfolderGetEzsigndocumentsV1Response**](../Model/EzsignfolderGetEzsigndocumentsV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezsignfolderGetEzsignfoldersignerassociationsV1()`

```php
ezsignfolderGetEzsignfoldersignerassociationsV1($pkiEzsignfolderID): \eZmaxAPI\Model\EzsignfolderGetEzsignfoldersignerassociationsV1Response
```

Retrieve an existing Ezsignfolder's Ezsignfoldersignerassociations



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsignfolderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzsignfolderID = 56; // int

try {
    $result = $apiInstance->ezsignfolderGetEzsignfoldersignerassociationsV1($pkiEzsignfolderID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsignfolderApi->ezsignfolderGetEzsignfoldersignerassociationsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiEzsignfolderID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\EzsignfolderGetEzsignfoldersignerassociationsV1Response**](../Model/EzsignfolderGetEzsignfoldersignerassociationsV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezsignfolderGetEzsignsignaturesAutomaticV1()`

```php
ezsignfolderGetEzsignsignaturesAutomaticV1($pkiEzsignfolderID): \eZmaxAPI\Model\EzsignfolderGetEzsignsignaturesAutomaticV1Response
```

Retrieve an existing Ezsignfolder's automatic Ezsignsignatures

Return the Ezsignsignatures that can be signed by the current user at the current step in the process

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsignfolderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzsignfolderID = 56; // int

try {
    $result = $apiInstance->ezsignfolderGetEzsignsignaturesAutomaticV1($pkiEzsignfolderID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsignfolderApi->ezsignfolderGetEzsignsignaturesAutomaticV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiEzsignfolderID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\EzsignfolderGetEzsignsignaturesAutomaticV1Response**](../Model/EzsignfolderGetEzsignsignaturesAutomaticV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezsignfolderGetFormsDataV1()`

```php
ezsignfolderGetFormsDataV1($pkiEzsignfolderID): \eZmaxAPI\Model\EzsignfolderGetFormsDataV1Response
```

Retrieve an existing Ezsignfolder's forms data



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsignfolderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzsignfolderID = 56; // int

try {
    $result = $apiInstance->ezsignfolderGetFormsDataV1($pkiEzsignfolderID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsignfolderApi->ezsignfolderGetFormsDataV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiEzsignfolderID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\EzsignfolderGetFormsDataV1Response**](../Model/EzsignfolderGetFormsDataV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/zip`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezsignfolderGetListV1()`

```php
ezsignfolderGetListV1($eOrderBy, $iRowMax, $iRowOffset, $acceptLanguage, $sFilter): \eZmaxAPI\Model\EzsignfolderGetListV1Response
```

Retrieve Ezsignfolder list

Enum values that can be filtered in query parameter *sFilter*:  | Variable | Valid values | |---|---| | eEzsignfolderStep | Unsent<br>Sent<br>PartiallySigned<br>Expired<br>Completed<br>Archived<br>Disposed| | eEzsignfoldertypePrivacylevel | User<br>Usergroup |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsignfolderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$eOrderBy = 'eOrderBy_example'; // string | Specify how you want the results to be sorted
$iRowMax = 10000; // int
$iRowOffset = 0; // int
$acceptLanguage = new \eZmaxAPI\Model\HeaderAcceptLanguage(); // HeaderAcceptLanguage
$sFilter = 'sFilter_example'; // string

try {
    $result = $apiInstance->ezsignfolderGetListV1($eOrderBy, $iRowMax, $iRowOffset, $acceptLanguage, $sFilter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsignfolderApi->ezsignfolderGetListV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **eOrderBy** | **string**| Specify how you want the results to be sorted | [optional] |
| **iRowMax** | **int**|  | [optional] [default to 10000] |
| **iRowOffset** | **int**|  | [optional] [default to 0] |
| **acceptLanguage** | [**HeaderAcceptLanguage**](../Model/.md)|  | [optional] |
| **sFilter** | **string**|  | [optional] |

### Return type

[**\eZmaxAPI\Model\EzsignfolderGetListV1Response**](../Model/EzsignfolderGetListV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/vnd.openxmlformats-officedocument.spreadsheetml.sheet`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezsignfolderGetObjectV1()`

```php
ezsignfolderGetObjectV1($pkiEzsignfolderID): \eZmaxAPI\Model\EzsignfolderGetObjectV1Response
```

Retrieve an existing Ezsignfolder

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsignfolderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzsignfolderID = 56; // int

try {
    $result = $apiInstance->ezsignfolderGetObjectV1($pkiEzsignfolderID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsignfolderApi->ezsignfolderGetObjectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiEzsignfolderID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\EzsignfolderGetObjectV1Response**](../Model/EzsignfolderGetObjectV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezsignfolderGetObjectV2()`

```php
ezsignfolderGetObjectV2($pkiEzsignfolderID): \eZmaxAPI\Model\EzsignfolderGetObjectV2Response
```

Retrieve an existing Ezsignfolder



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsignfolderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzsignfolderID = 56; // int

try {
    $result = $apiInstance->ezsignfolderGetObjectV2($pkiEzsignfolderID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsignfolderApi->ezsignfolderGetObjectV2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiEzsignfolderID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\EzsignfolderGetObjectV2Response**](../Model/EzsignfolderGetObjectV2Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezsignfolderImportEzsignfoldersignerassociationsV1()`

```php
ezsignfolderImportEzsignfoldersignerassociationsV1($pkiEzsignfolderID, $ezsignfolderImportEzsignfoldersignerassociationsV1Request): \eZmaxAPI\Model\EzsignfolderImportEzsignfoldersignerassociationsV1Response
```

Import an existing Ezsignfoldersignerassociation into this Ezsignfolder



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsignfolderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzsignfolderID = 56; // int
$ezsignfolderImportEzsignfoldersignerassociationsV1Request = new \eZmaxAPI\Model\EzsignfolderImportEzsignfoldersignerassociationsV1Request(); // \eZmaxAPI\Model\EzsignfolderImportEzsignfoldersignerassociationsV1Request

try {
    $result = $apiInstance->ezsignfolderImportEzsignfoldersignerassociationsV1($pkiEzsignfolderID, $ezsignfolderImportEzsignfoldersignerassociationsV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsignfolderApi->ezsignfolderImportEzsignfoldersignerassociationsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiEzsignfolderID** | **int**|  | |
| **ezsignfolderImportEzsignfoldersignerassociationsV1Request** | [**\eZmaxAPI\Model\EzsignfolderImportEzsignfoldersignerassociationsV1Request**](../Model/EzsignfolderImportEzsignfoldersignerassociationsV1Request.md)|  | |

### Return type

[**\eZmaxAPI\Model\EzsignfolderImportEzsignfoldersignerassociationsV1Response**](../Model/EzsignfolderImportEzsignfoldersignerassociationsV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezsignfolderImportEzsigntemplatepackageV1()`

```php
ezsignfolderImportEzsigntemplatepackageV1($pkiEzsignfolderID, $ezsignfolderImportEzsigntemplatepackageV1Request): \eZmaxAPI\Model\EzsignfolderImportEzsigntemplatepackageV1Response
```

Import an Ezsigntemplatepackage in the Ezsignfolder.

This endpoint imports all of the Ezsigntemplates from the Ezsigntemplatepackage into the Ezsignfolder as Ezsigndocuments.  This allows to automatically apply all the Ezsigntemplateformfieldgroups and Ezsigntemplatesignatures on the newly created Ezsigndocuments in a single step.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsignfolderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzsignfolderID = 56; // int
$ezsignfolderImportEzsigntemplatepackageV1Request = new \eZmaxAPI\Model\EzsignfolderImportEzsigntemplatepackageV1Request(); // \eZmaxAPI\Model\EzsignfolderImportEzsigntemplatepackageV1Request

try {
    $result = $apiInstance->ezsignfolderImportEzsigntemplatepackageV1($pkiEzsignfolderID, $ezsignfolderImportEzsigntemplatepackageV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsignfolderApi->ezsignfolderImportEzsigntemplatepackageV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiEzsignfolderID** | **int**|  | |
| **ezsignfolderImportEzsigntemplatepackageV1Request** | [**\eZmaxAPI\Model\EzsignfolderImportEzsigntemplatepackageV1Request**](../Model/EzsignfolderImportEzsigntemplatepackageV1Request.md)|  | |

### Return type

[**\eZmaxAPI\Model\EzsignfolderImportEzsigntemplatepackageV1Response**](../Model/EzsignfolderImportEzsigntemplatepackageV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezsignfolderReorderV1()`

```php
ezsignfolderReorderV1($pkiEzsignfolderID, $ezsignfolderReorderV1Request): \eZmaxAPI\Model\EzsignfolderReorderV1Response
```

Reorder Ezsigndocuments in the Ezsignfolder

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsignfolderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzsignfolderID = 56; // int
$ezsignfolderReorderV1Request = new \eZmaxAPI\Model\EzsignfolderReorderV1Request(); // \eZmaxAPI\Model\EzsignfolderReorderV1Request

try {
    $result = $apiInstance->ezsignfolderReorderV1($pkiEzsignfolderID, $ezsignfolderReorderV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsignfolderApi->ezsignfolderReorderV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiEzsignfolderID** | **int**|  | |
| **ezsignfolderReorderV1Request** | [**\eZmaxAPI\Model\EzsignfolderReorderV1Request**](../Model/EzsignfolderReorderV1Request.md)|  | |

### Return type

[**\eZmaxAPI\Model\EzsignfolderReorderV1Response**](../Model/EzsignfolderReorderV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezsignfolderSendV1()`

```php
ezsignfolderSendV1($pkiEzsignfolderID, $ezsignfolderSendV1Request): \eZmaxAPI\Model\EzsignfolderSendV1Response
```

Send the Ezsignfolder to the signatories for signature



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsignfolderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzsignfolderID = 56; // int
$ezsignfolderSendV1Request = new \eZmaxAPI\Model\EzsignfolderSendV1Request(); // \eZmaxAPI\Model\EzsignfolderSendV1Request

try {
    $result = $apiInstance->ezsignfolderSendV1($pkiEzsignfolderID, $ezsignfolderSendV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsignfolderApi->ezsignfolderSendV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiEzsignfolderID** | **int**|  | |
| **ezsignfolderSendV1Request** | [**\eZmaxAPI\Model\EzsignfolderSendV1Request**](../Model/EzsignfolderSendV1Request.md)|  | |

### Return type

[**\eZmaxAPI\Model\EzsignfolderSendV1Response**](../Model/EzsignfolderSendV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezsignfolderSendV2()`

```php
ezsignfolderSendV2($pkiEzsignfolderID, $ezsignfolderSendV2Request): \eZmaxAPI\Model\EzsignfolderSendV2Response
```

Send the Ezsignfolder to the signatories for signature



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsignfolderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzsignfolderID = 56; // int
$ezsignfolderSendV2Request = new \eZmaxAPI\Model\EzsignfolderSendV2Request(); // \eZmaxAPI\Model\EzsignfolderSendV2Request

try {
    $result = $apiInstance->ezsignfolderSendV2($pkiEzsignfolderID, $ezsignfolderSendV2Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsignfolderApi->ezsignfolderSendV2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiEzsignfolderID** | **int**|  | |
| **ezsignfolderSendV2Request** | [**\eZmaxAPI\Model\EzsignfolderSendV2Request**](../Model/EzsignfolderSendV2Request.md)|  | |

### Return type

[**\eZmaxAPI\Model\EzsignfolderSendV2Response**](../Model/EzsignfolderSendV2Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezsignfolderSendV3()`

```php
ezsignfolderSendV3($pkiEzsignfolderID, $ezsignfolderSendV3Request): \eZmaxAPI\Model\EzsignfolderSendV3Response
```

Send the Ezsignfolder to the signatories for signature



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsignfolderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzsignfolderID = 56; // int
$ezsignfolderSendV3Request = new \eZmaxAPI\Model\EzsignfolderSendV3Request(); // \eZmaxAPI\Model\EzsignfolderSendV3Request

try {
    $result = $apiInstance->ezsignfolderSendV3($pkiEzsignfolderID, $ezsignfolderSendV3Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsignfolderApi->ezsignfolderSendV3: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiEzsignfolderID** | **int**|  | |
| **ezsignfolderSendV3Request** | [**\eZmaxAPI\Model\EzsignfolderSendV3Request**](../Model/EzsignfolderSendV3Request.md)|  | |

### Return type

[**\eZmaxAPI\Model\EzsignfolderSendV3Response**](../Model/EzsignfolderSendV3Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezsignfolderUnsendV1()`

```php
ezsignfolderUnsendV1($pkiEzsignfolderID, $body): \eZmaxAPI\Model\EzsignfolderUnsendV1Response
```

Unsend the Ezsignfolder

Once an Ezsignfolder has been sent to signatories, it cannot be modified.  Using this endpoint, you can unsend the Ezsignfolder and make it modifiable again.  Signatories will receive an email informing them the signature process was aborted and they might receive a new invitation to sign.  ⚠️ Warning: Any signature previously made by signatories on \"Non-completed\" Ezsigndocuments will be lost.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsignfolderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzsignfolderID = 56; // int
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->ezsignfolderUnsendV1($pkiEzsignfolderID, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsignfolderApi->ezsignfolderUnsendV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiEzsignfolderID** | **int**|  | |
| **body** | **object**|  | |

### Return type

[**\eZmaxAPI\Model\EzsignfolderUnsendV1Response**](../Model/EzsignfolderUnsendV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
