# eZmaxAPI\ObjectEzdoctemplatedocumentApi

All URIs are relative to https://prod.api.appcluster01.ca-central-1.ezmax.com/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**ezdoctemplatedocumentCreateObjectV1()**](ObjectEzdoctemplatedocumentApi.md#ezdoctemplatedocumentCreateObjectV1) | **POST** /1/object/ezdoctemplatedocument | Create a new Ezdoctemplatedocument |
| [**ezdoctemplatedocumentDownloadV1()**](ObjectEzdoctemplatedocumentApi.md#ezdoctemplatedocumentDownloadV1) | **GET** /1/object/ezdoctemplatedocument/{pkiEzdoctemplatedocumentID}/download | Retrieve the content |
| [**ezdoctemplatedocumentEditObjectV1()**](ObjectEzdoctemplatedocumentApi.md#ezdoctemplatedocumentEditObjectV1) | **PUT** /1/object/ezdoctemplatedocument/{pkiEzdoctemplatedocumentID} | Edit an existing Ezdoctemplatedocument |
| [**ezdoctemplatedocumentGetAutocompleteV2()**](ObjectEzdoctemplatedocumentApi.md#ezdoctemplatedocumentGetAutocompleteV2) | **GET** /2/object/ezdoctemplatedocument/getAutocomplete/{sSelector} | Retrieve Ezdoctemplatedocuments and IDs |
| [**ezdoctemplatedocumentGetListV1()**](ObjectEzdoctemplatedocumentApi.md#ezdoctemplatedocumentGetListV1) | **GET** /1/object/ezdoctemplatedocument/getList | Retrieve Ezdoctemplatedocument list |
| [**ezdoctemplatedocumentGetObjectV2()**](ObjectEzdoctemplatedocumentApi.md#ezdoctemplatedocumentGetObjectV2) | **GET** /2/object/ezdoctemplatedocument/{pkiEzdoctemplatedocumentID} | Retrieve an existing Ezdoctemplatedocument |
| [**ezdoctemplatedocumentPatchObjectV1()**](ObjectEzdoctemplatedocumentApi.md#ezdoctemplatedocumentPatchObjectV1) | **PATCH** /1/object/ezdoctemplatedocument/{pkiEzdoctemplatedocumentID} | Patch an existing Ezdoctemplatedocument |


## `ezdoctemplatedocumentCreateObjectV1()`

```php
ezdoctemplatedocumentCreateObjectV1($ezdoctemplatedocumentCreateObjectV1Request): \eZmaxAPI\Model\EzdoctemplatedocumentCreateObjectV1Response
```

Create a new Ezdoctemplatedocument

The endpoint allows to create one or many elements at once.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzdoctemplatedocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ezdoctemplatedocumentCreateObjectV1Request = new \eZmaxAPI\Model\EzdoctemplatedocumentCreateObjectV1Request(); // \eZmaxAPI\Model\EzdoctemplatedocumentCreateObjectV1Request

try {
    $result = $apiInstance->ezdoctemplatedocumentCreateObjectV1($ezdoctemplatedocumentCreateObjectV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzdoctemplatedocumentApi->ezdoctemplatedocumentCreateObjectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ezdoctemplatedocumentCreateObjectV1Request** | [**\eZmaxAPI\Model\EzdoctemplatedocumentCreateObjectV1Request**](../Model/EzdoctemplatedocumentCreateObjectV1Request.md)|  | |

### Return type

[**\eZmaxAPI\Model\EzdoctemplatedocumentCreateObjectV1Response**](../Model/EzdoctemplatedocumentCreateObjectV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezdoctemplatedocumentDownloadV1()`

```php
ezdoctemplatedocumentDownloadV1($pkiEzdoctemplatedocumentID)
```

Retrieve the content

Using this endpoint, you can retrieve the content of an ezdoctemplatedocument.

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


$apiInstance = new eZmaxAPI\Api\ObjectEzdoctemplatedocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzdoctemplatedocumentID = 56; // int

try {
    $apiInstance->ezdoctemplatedocumentDownloadV1($pkiEzdoctemplatedocumentID);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzdoctemplatedocumentApi->ezdoctemplatedocumentDownloadV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiEzdoctemplatedocumentID** | **int**|  | |

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

## `ezdoctemplatedocumentEditObjectV1()`

```php
ezdoctemplatedocumentEditObjectV1($pkiEzdoctemplatedocumentID, $ezdoctemplatedocumentEditObjectV1Request): \eZmaxAPI\Model\CommonResponse
```

Edit an existing Ezdoctemplatedocument



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzdoctemplatedocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzdoctemplatedocumentID = 56; // int | The unique ID of the Ezdoctemplatedocument
$ezdoctemplatedocumentEditObjectV1Request = new \eZmaxAPI\Model\EzdoctemplatedocumentEditObjectV1Request(); // \eZmaxAPI\Model\EzdoctemplatedocumentEditObjectV1Request

try {
    $result = $apiInstance->ezdoctemplatedocumentEditObjectV1($pkiEzdoctemplatedocumentID, $ezdoctemplatedocumentEditObjectV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzdoctemplatedocumentApi->ezdoctemplatedocumentEditObjectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiEzdoctemplatedocumentID** | **int**| The unique ID of the Ezdoctemplatedocument | |
| **ezdoctemplatedocumentEditObjectV1Request** | [**\eZmaxAPI\Model\EzdoctemplatedocumentEditObjectV1Request**](../Model/EzdoctemplatedocumentEditObjectV1Request.md)|  | |

### Return type

[**\eZmaxAPI\Model\CommonResponse**](../Model/CommonResponse.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezdoctemplatedocumentGetAutocompleteV2()`

```php
ezdoctemplatedocumentGetAutocompleteV2($sSelector, $eType, $fkiEzsignfoldertypeID, $eFilterActive, $sQuery, $acceptLanguage): \eZmaxAPI\Model\EzdoctemplatedocumentGetAutocompleteV2Response
```

Retrieve Ezdoctemplatedocuments and IDs

Get the list of Ezdoctemplatedocument to be used in a dropdown or autocomplete control.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzdoctemplatedocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sSelector = 'sSelector_example'; // string | The type of Ezdoctemplatedocuments to return
$eType = 'CompanyEzsignfoldertype'; // string | The type of Ezdoctemplatedocument
$fkiEzsignfoldertypeID = 'fkiEzsignfoldertypeID_example'; // string | Specify which fkiEzsignfoldertypeID we want to display. only used when eType = Ezsignfoldertype
$eFilterActive = 'Active'; // string | Specify which results we want to display.
$sQuery = 'sQuery_example'; // string | Allow to filter the returned results
$acceptLanguage = new \eZmaxAPI\Model\\eZmaxAPI\Model\HeaderAcceptLanguage(); // \eZmaxAPI\Model\HeaderAcceptLanguage

try {
    $result = $apiInstance->ezdoctemplatedocumentGetAutocompleteV2($sSelector, $eType, $fkiEzsignfoldertypeID, $eFilterActive, $sQuery, $acceptLanguage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzdoctemplatedocumentApi->ezdoctemplatedocumentGetAutocompleteV2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sSelector** | **string**| The type of Ezdoctemplatedocuments to return | |
| **eType** | **string**| The type of Ezdoctemplatedocument | [default to &#39;CompanyEzsignfoldertype&#39;] |
| **fkiEzsignfoldertypeID** | **string**| Specify which fkiEzsignfoldertypeID we want to display. only used when eType &#x3D; Ezsignfoldertype | [optional] |
| **eFilterActive** | **string**| Specify which results we want to display. | [optional] [default to &#39;Active&#39;] |
| **sQuery** | **string**| Allow to filter the returned results | [optional] |
| **acceptLanguage** | [**\eZmaxAPI\Model\HeaderAcceptLanguage**](../Model/.md)|  | [optional] |

### Return type

[**\eZmaxAPI\Model\EzdoctemplatedocumentGetAutocompleteV2Response**](../Model/EzdoctemplatedocumentGetAutocompleteV2Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezdoctemplatedocumentGetListV1()`

```php
ezdoctemplatedocumentGetListV1($eOrderBy, $iRowMax, $iRowOffset, $acceptLanguage, $sFilter): \eZmaxAPI\Model\EzdoctemplatedocumentGetListV1Response
```

Retrieve Ezdoctemplatedocument list



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzdoctemplatedocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$eOrderBy = 'eOrderBy_example'; // string | Specify how you want the results to be sorted
$iRowMax = 56; // int
$iRowOffset = 0; // int
$acceptLanguage = new \eZmaxAPI\Model\\eZmaxAPI\Model\HeaderAcceptLanguage(); // \eZmaxAPI\Model\HeaderAcceptLanguage
$sFilter = 'sFilter_example'; // string

try {
    $result = $apiInstance->ezdoctemplatedocumentGetListV1($eOrderBy, $iRowMax, $iRowOffset, $acceptLanguage, $sFilter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzdoctemplatedocumentApi->ezdoctemplatedocumentGetListV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **eOrderBy** | **string**| Specify how you want the results to be sorted | [optional] |
| **iRowMax** | **int**|  | [optional] |
| **iRowOffset** | **int**|  | [optional] [default to 0] |
| **acceptLanguage** | [**\eZmaxAPI\Model\HeaderAcceptLanguage**](../Model/.md)|  | [optional] |
| **sFilter** | **string**|  | [optional] |

### Return type

[**\eZmaxAPI\Model\EzdoctemplatedocumentGetListV1Response**](../Model/EzdoctemplatedocumentGetListV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/vnd.openxmlformats-officedocument.spreadsheetml.sheet`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezdoctemplatedocumentGetObjectV2()`

```php
ezdoctemplatedocumentGetObjectV2($pkiEzdoctemplatedocumentID): \eZmaxAPI\Model\EzdoctemplatedocumentGetObjectV2Response
```

Retrieve an existing Ezdoctemplatedocument



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzdoctemplatedocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzdoctemplatedocumentID = 56; // int | The unique ID of the Ezdoctemplatedocument

try {
    $result = $apiInstance->ezdoctemplatedocumentGetObjectV2($pkiEzdoctemplatedocumentID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzdoctemplatedocumentApi->ezdoctemplatedocumentGetObjectV2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiEzdoctemplatedocumentID** | **int**| The unique ID of the Ezdoctemplatedocument | |

### Return type

[**\eZmaxAPI\Model\EzdoctemplatedocumentGetObjectV2Response**](../Model/EzdoctemplatedocumentGetObjectV2Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezdoctemplatedocumentPatchObjectV1()`

```php
ezdoctemplatedocumentPatchObjectV1($pkiEzdoctemplatedocumentID, $ezdoctemplatedocumentPatchObjectV1Request): \eZmaxAPI\Model\CommonResponse
```

Patch an existing Ezdoctemplatedocument



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzdoctemplatedocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzdoctemplatedocumentID = 56; // int | The unique ID of the Ezdoctemplatedocument
$ezdoctemplatedocumentPatchObjectV1Request = new \eZmaxAPI\Model\EzdoctemplatedocumentPatchObjectV1Request(); // \eZmaxAPI\Model\EzdoctemplatedocumentPatchObjectV1Request

try {
    $result = $apiInstance->ezdoctemplatedocumentPatchObjectV1($pkiEzdoctemplatedocumentID, $ezdoctemplatedocumentPatchObjectV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzdoctemplatedocumentApi->ezdoctemplatedocumentPatchObjectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiEzdoctemplatedocumentID** | **int**| The unique ID of the Ezdoctemplatedocument | |
| **ezdoctemplatedocumentPatchObjectV1Request** | [**\eZmaxAPI\Model\EzdoctemplatedocumentPatchObjectV1Request**](../Model/EzdoctemplatedocumentPatchObjectV1Request.md)|  | |

### Return type

[**\eZmaxAPI\Model\CommonResponse**](../Model/CommonResponse.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
