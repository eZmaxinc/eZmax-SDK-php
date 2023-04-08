# eZmaxAPI\ObjectEzsignbulksendApi

All URIs are relative to https://prod.api.appcluster01.ca-central-1.ezmax.com/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**ezsignbulksendCreateEzsignbulksendtransmissionV1()**](ObjectEzsignbulksendApi.md#ezsignbulksendCreateEzsignbulksendtransmissionV1) | **POST** /1/object/ezsignbulksend/{pkiEzsignbulksendID}/createEzsignbulksendtransmission | Create a new Ezsignbulksendtransmission in the Ezsignbulksend |
| [**ezsignbulksendCreateObjectV1()**](ObjectEzsignbulksendApi.md#ezsignbulksendCreateObjectV1) | **POST** /1/object/ezsignbulksend | Create a new Ezsignbulksend |
| [**ezsignbulksendDeleteObjectV1()**](ObjectEzsignbulksendApi.md#ezsignbulksendDeleteObjectV1) | **DELETE** /1/object/ezsignbulksend/{pkiEzsignbulksendID} | Delete an existing Ezsignbulksend |
| [**ezsignbulksendEditObjectV1()**](ObjectEzsignbulksendApi.md#ezsignbulksendEditObjectV1) | **PUT** /1/object/ezsignbulksend/{pkiEzsignbulksendID} | Edit an existing Ezsignbulksend |
| [**ezsignbulksendGetCsvTemplateV1()**](ObjectEzsignbulksendApi.md#ezsignbulksendGetCsvTemplateV1) | **GET** /1/object/ezsignbulksend/{pkiEzsignbulksendID}/getCsvTemplate | Retrieve an existing Ezsignbulksend&#39;s empty Csv template |
| [**ezsignbulksendGetEzsignbulksendtransmissionsV1()**](ObjectEzsignbulksendApi.md#ezsignbulksendGetEzsignbulksendtransmissionsV1) | **GET** /1/object/ezsignbulksend/{pkiEzsignbulksendID}/getEzsignbulksendtransmissions | Retrieve an existing Ezsignbulksend&#39;s Ezsignbulksendtransmissions |
| [**ezsignbulksendGetEzsignsignaturesAutomaticV1()**](ObjectEzsignbulksendApi.md#ezsignbulksendGetEzsignsignaturesAutomaticV1) | **GET** /1/object/ezsignbulksend/{pkiEzsignbulksendID}/getEzsignsignaturesAutomatic | Retrieve an existing Ezsignbulksend&#39;s automatic Ezsignsignatures |
| [**ezsignbulksendGetFormsDataV1()**](ObjectEzsignbulksendApi.md#ezsignbulksendGetFormsDataV1) | **GET** /1/object/ezsignbulksend/{pkiEzsignbulksendID}/getFormsData | Retrieve an existing Ezsignbulksend&#39;s forms data |
| [**ezsignbulksendGetListV1()**](ObjectEzsignbulksendApi.md#ezsignbulksendGetListV1) | **GET** /1/object/ezsignbulksend/getList | Retrieve Ezsignbulksend list |
| [**ezsignbulksendGetObjectV2()**](ObjectEzsignbulksendApi.md#ezsignbulksendGetObjectV2) | **GET** /2/object/ezsignbulksend/{pkiEzsignbulksendID} | Retrieve an existing Ezsignbulksend |
| [**ezsignbulksendReorderV1()**](ObjectEzsignbulksendApi.md#ezsignbulksendReorderV1) | **POST** /1/object/ezsignbulksend/{pkiEzsignbulksendID}/reorder | Reorder Ezsignbulksenddocumentmappings in the Ezsignbulksend |


## `ezsignbulksendCreateEzsignbulksendtransmissionV1()`

```php
ezsignbulksendCreateEzsignbulksendtransmissionV1($pkiEzsignbulksendID, $ezsignbulksendCreateEzsignbulksendtransmissionV1Request): \eZmaxAPI\Model\EzsignbulksendCreateEzsignbulksendtransmissionV1Response
```

Create a new Ezsignbulksendtransmission in the Ezsignbulksend

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsignbulksendApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzsignbulksendID = 56; // int
$ezsignbulksendCreateEzsignbulksendtransmissionV1Request = new \eZmaxAPI\Model\EzsignbulksendCreateEzsignbulksendtransmissionV1Request(); // \eZmaxAPI\Model\EzsignbulksendCreateEzsignbulksendtransmissionV1Request

try {
    $result = $apiInstance->ezsignbulksendCreateEzsignbulksendtransmissionV1($pkiEzsignbulksendID, $ezsignbulksendCreateEzsignbulksendtransmissionV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsignbulksendApi->ezsignbulksendCreateEzsignbulksendtransmissionV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiEzsignbulksendID** | **int**|  | |
| **ezsignbulksendCreateEzsignbulksendtransmissionV1Request** | [**\eZmaxAPI\Model\EzsignbulksendCreateEzsignbulksendtransmissionV1Request**](../Model/EzsignbulksendCreateEzsignbulksendtransmissionV1Request.md)|  | |

### Return type

[**\eZmaxAPI\Model\EzsignbulksendCreateEzsignbulksendtransmissionV1Response**](../Model/EzsignbulksendCreateEzsignbulksendtransmissionV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezsignbulksendCreateObjectV1()`

```php
ezsignbulksendCreateObjectV1($ezsignbulksendCreateObjectV1Request): \eZmaxAPI\Model\EzsignbulksendCreateObjectV1Response
```

Create a new Ezsignbulksend

The endpoint allows to create one or many elements at once.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsignbulksendApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ezsignbulksendCreateObjectV1Request = new \eZmaxAPI\Model\EzsignbulksendCreateObjectV1Request(); // \eZmaxAPI\Model\EzsignbulksendCreateObjectV1Request

try {
    $result = $apiInstance->ezsignbulksendCreateObjectV1($ezsignbulksendCreateObjectV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsignbulksendApi->ezsignbulksendCreateObjectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ezsignbulksendCreateObjectV1Request** | [**\eZmaxAPI\Model\EzsignbulksendCreateObjectV1Request**](../Model/EzsignbulksendCreateObjectV1Request.md)|  | |

### Return type

[**\eZmaxAPI\Model\EzsignbulksendCreateObjectV1Response**](../Model/EzsignbulksendCreateObjectV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezsignbulksendDeleteObjectV1()`

```php
ezsignbulksendDeleteObjectV1($pkiEzsignbulksendID): \eZmaxAPI\Model\EzsignbulksendDeleteObjectV1Response
```

Delete an existing Ezsignbulksend



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsignbulksendApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzsignbulksendID = 56; // int

try {
    $result = $apiInstance->ezsignbulksendDeleteObjectV1($pkiEzsignbulksendID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsignbulksendApi->ezsignbulksendDeleteObjectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiEzsignbulksendID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\EzsignbulksendDeleteObjectV1Response**](../Model/EzsignbulksendDeleteObjectV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezsignbulksendEditObjectV1()`

```php
ezsignbulksendEditObjectV1($pkiEzsignbulksendID, $ezsignbulksendEditObjectV1Request): \eZmaxAPI\Model\EzsignbulksendEditObjectV1Response
```

Edit an existing Ezsignbulksend



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsignbulksendApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzsignbulksendID = 56; // int
$ezsignbulksendEditObjectV1Request = new \eZmaxAPI\Model\EzsignbulksendEditObjectV1Request(); // \eZmaxAPI\Model\EzsignbulksendEditObjectV1Request

try {
    $result = $apiInstance->ezsignbulksendEditObjectV1($pkiEzsignbulksendID, $ezsignbulksendEditObjectV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsignbulksendApi->ezsignbulksendEditObjectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiEzsignbulksendID** | **int**|  | |
| **ezsignbulksendEditObjectV1Request** | [**\eZmaxAPI\Model\EzsignbulksendEditObjectV1Request**](../Model/EzsignbulksendEditObjectV1Request.md)|  | |

### Return type

[**\eZmaxAPI\Model\EzsignbulksendEditObjectV1Response**](../Model/EzsignbulksendEditObjectV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezsignbulksendGetCsvTemplateV1()`

```php
ezsignbulksendGetCsvTemplateV1($pkiEzsignbulksendID, $eCsvSeparator): string
```

Retrieve an existing Ezsignbulksend's empty Csv template



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsignbulksendApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzsignbulksendID = 56; // int
$eCsvSeparator = 'eCsvSeparator_example'; // string | Separator that will be used to separate fields

try {
    $result = $apiInstance->ezsignbulksendGetCsvTemplateV1($pkiEzsignbulksendID, $eCsvSeparator);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsignbulksendApi->ezsignbulksendGetCsvTemplateV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiEzsignbulksendID** | **int**|  | |
| **eCsvSeparator** | **string**| Separator that will be used to separate fields | |

### Return type

**string**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/csv`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezsignbulksendGetEzsignbulksendtransmissionsV1()`

```php
ezsignbulksendGetEzsignbulksendtransmissionsV1($pkiEzsignbulksendID): \eZmaxAPI\Model\EzsignbulksendGetEzsignbulksendtransmissionsV1Response
```

Retrieve an existing Ezsignbulksend's Ezsignbulksendtransmissions



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsignbulksendApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzsignbulksendID = 56; // int

try {
    $result = $apiInstance->ezsignbulksendGetEzsignbulksendtransmissionsV1($pkiEzsignbulksendID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsignbulksendApi->ezsignbulksendGetEzsignbulksendtransmissionsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiEzsignbulksendID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\EzsignbulksendGetEzsignbulksendtransmissionsV1Response**](../Model/EzsignbulksendGetEzsignbulksendtransmissionsV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezsignbulksendGetEzsignsignaturesAutomaticV1()`

```php
ezsignbulksendGetEzsignsignaturesAutomaticV1($pkiEzsignbulksendID): \eZmaxAPI\Model\EzsignbulksendGetEzsignsignaturesAutomaticV1Response
```

Retrieve an existing Ezsignbulksend's automatic Ezsignsignatures

Return the Ezsignsignatures that can be signed by the current user at the current step in the process

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsignbulksendApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzsignbulksendID = 56; // int

try {
    $result = $apiInstance->ezsignbulksendGetEzsignsignaturesAutomaticV1($pkiEzsignbulksendID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsignbulksendApi->ezsignbulksendGetEzsignsignaturesAutomaticV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiEzsignbulksendID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\EzsignbulksendGetEzsignsignaturesAutomaticV1Response**](../Model/EzsignbulksendGetEzsignsignaturesAutomaticV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezsignbulksendGetFormsDataV1()`

```php
ezsignbulksendGetFormsDataV1($pkiEzsignbulksendID): \eZmaxAPI\Model\EzsignbulksendGetFormsDataV1Response
```

Retrieve an existing Ezsignbulksend's forms data



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsignbulksendApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzsignbulksendID = 56; // int

try {
    $result = $apiInstance->ezsignbulksendGetFormsDataV1($pkiEzsignbulksendID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsignbulksendApi->ezsignbulksendGetFormsDataV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiEzsignbulksendID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\EzsignbulksendGetFormsDataV1Response**](../Model/EzsignbulksendGetFormsDataV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/zip`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezsignbulksendGetListV1()`

```php
ezsignbulksendGetListV1($eOrderBy, $iRowMax, $iRowOffset, $acceptLanguage, $sFilter): \eZmaxAPI\Model\EzsignbulksendGetListV1Response
```

Retrieve Ezsignbulksend list

Enum values that can be filtered in query parameter *sFilter*:  | Variable | Valid values | |---|---| | eEzsignfoldertypePrivacylevel | User<br>Usergroup |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsignbulksendApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$eOrderBy = 'eOrderBy_example'; // string | Specify how you want the results to be sorted
$iRowMax = 56; // int
$iRowOffset = 56; // int
$acceptLanguage = new \eZmaxAPI\Model\HeaderAcceptLanguage(); // HeaderAcceptLanguage
$sFilter = 'sFilter_example'; // string

try {
    $result = $apiInstance->ezsignbulksendGetListV1($eOrderBy, $iRowMax, $iRowOffset, $acceptLanguage, $sFilter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsignbulksendApi->ezsignbulksendGetListV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **eOrderBy** | **string**| Specify how you want the results to be sorted | [optional] |
| **iRowMax** | **int**|  | [optional] |
| **iRowOffset** | **int**|  | [optional] |
| **acceptLanguage** | [**HeaderAcceptLanguage**](../Model/.md)|  | [optional] |
| **sFilter** | **string**|  | [optional] |

### Return type

[**\eZmaxAPI\Model\EzsignbulksendGetListV1Response**](../Model/EzsignbulksendGetListV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/vnd.openxmlformats-officedocument.spreadsheetml.sheet`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezsignbulksendGetObjectV2()`

```php
ezsignbulksendGetObjectV2($pkiEzsignbulksendID): \eZmaxAPI\Model\EzsignbulksendGetObjectV2Response
```

Retrieve an existing Ezsignbulksend



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsignbulksendApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzsignbulksendID = 56; // int

try {
    $result = $apiInstance->ezsignbulksendGetObjectV2($pkiEzsignbulksendID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsignbulksendApi->ezsignbulksendGetObjectV2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiEzsignbulksendID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\EzsignbulksendGetObjectV2Response**](../Model/EzsignbulksendGetObjectV2Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezsignbulksendReorderV1()`

```php
ezsignbulksendReorderV1($pkiEzsignbulksendID, $ezsignbulksendReorderV1Request): \eZmaxAPI\Model\EzsignbulksendReorderV1Response
```

Reorder Ezsignbulksenddocumentmappings in the Ezsignbulksend

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsignbulksendApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzsignbulksendID = 56; // int
$ezsignbulksendReorderV1Request = new \eZmaxAPI\Model\EzsignbulksendReorderV1Request(); // \eZmaxAPI\Model\EzsignbulksendReorderV1Request

try {
    $result = $apiInstance->ezsignbulksendReorderV1($pkiEzsignbulksendID, $ezsignbulksendReorderV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsignbulksendApi->ezsignbulksendReorderV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiEzsignbulksendID** | **int**|  | |
| **ezsignbulksendReorderV1Request** | [**\eZmaxAPI\Model\EzsignbulksendReorderV1Request**](../Model/EzsignbulksendReorderV1Request.md)|  | |

### Return type

[**\eZmaxAPI\Model\EzsignbulksendReorderV1Response**](../Model/EzsignbulksendReorderV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
