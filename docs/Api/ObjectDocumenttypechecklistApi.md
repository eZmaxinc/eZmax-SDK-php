# eZmaxAPI\ObjectDocumenttypechecklistApi



All URIs are relative to https://prod.api.appcluster01.ca-central-1.ezmax.com/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**documenttypechecklistCreateObjectV1()**](ObjectDocumenttypechecklistApi.md#documenttypechecklistCreateObjectV1) | **POST** /1/object/documenttypechecklist | Create a new Documenttypechecklist |
| [**documenttypechecklistDeleteObjectV1()**](ObjectDocumenttypechecklistApi.md#documenttypechecklistDeleteObjectV1) | **DELETE** /1/object/documenttypechecklist/{pkiDocumenttypechecklistID} | Delete an existing Documenttypechecklist |
| [**documenttypechecklistEditObjectV1()**](ObjectDocumenttypechecklistApi.md#documenttypechecklistEditObjectV1) | **PUT** /1/object/documenttypechecklist/{pkiDocumenttypechecklistID} | Edit an existing Documenttypechecklist |
| [**documenttypechecklistGetListV1()**](ObjectDocumenttypechecklistApi.md#documenttypechecklistGetListV1) | **GET** /1/object/documenttypechecklist/getList | Retrieve Documenttypechecklist list |
| [**documenttypechecklistGetObjectV2()**](ObjectDocumenttypechecklistApi.md#documenttypechecklistGetObjectV2) | **GET** /2/object/documenttypechecklist/{pkiDocumenttypechecklistID} | Retrieve an existing Documenttypechecklist |


## `documenttypechecklistCreateObjectV1()`

```php
documenttypechecklistCreateObjectV1($documenttypechecklistCreateObjectV1Request): \eZmaxAPI\Model\DocumenttypechecklistCreateObjectV1Response
```

Create a new Documenttypechecklist

The endpoint allows to create one or many elements at once.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectDocumenttypechecklistApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$documenttypechecklistCreateObjectV1Request = new \eZmaxAPI\Model\DocumenttypechecklistCreateObjectV1Request(); // \eZmaxAPI\Model\DocumenttypechecklistCreateObjectV1Request

try {
    $result = $apiInstance->documenttypechecklistCreateObjectV1($documenttypechecklistCreateObjectV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectDocumenttypechecklistApi->documenttypechecklistCreateObjectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **documenttypechecklistCreateObjectV1Request** | [**\eZmaxAPI\Model\DocumenttypechecklistCreateObjectV1Request**](../Model/DocumenttypechecklistCreateObjectV1Request.md)|  | |

### Return type

[**\eZmaxAPI\Model\DocumenttypechecklistCreateObjectV1Response**](../Model/DocumenttypechecklistCreateObjectV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `documenttypechecklistDeleteObjectV1()`

```php
documenttypechecklistDeleteObjectV1($pkiDocumenttypechecklistID): \eZmaxAPI\Model\DocumenttypechecklistDeleteObjectV1Response
```

Delete an existing Documenttypechecklist



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectDocumenttypechecklistApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiDocumenttypechecklistID = 56; // int | The unique ID of the Documenttypechecklist

try {
    $result = $apiInstance->documenttypechecklistDeleteObjectV1($pkiDocumenttypechecklistID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectDocumenttypechecklistApi->documenttypechecklistDeleteObjectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiDocumenttypechecklistID** | **int**| The unique ID of the Documenttypechecklist | |

### Return type

[**\eZmaxAPI\Model\DocumenttypechecklistDeleteObjectV1Response**](../Model/DocumenttypechecklistDeleteObjectV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `documenttypechecklistEditObjectV1()`

```php
documenttypechecklistEditObjectV1($pkiDocumenttypechecklistID, $documenttypechecklistEditObjectV1Request): \eZmaxAPI\Model\DocumenttypechecklistEditObjectV1Response
```

Edit an existing Documenttypechecklist



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectDocumenttypechecklistApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiDocumenttypechecklistID = 56; // int | The unique ID of the Documenttypechecklist
$documenttypechecklistEditObjectV1Request = new \eZmaxAPI\Model\DocumenttypechecklistEditObjectV1Request(); // \eZmaxAPI\Model\DocumenttypechecklistEditObjectV1Request

try {
    $result = $apiInstance->documenttypechecklistEditObjectV1($pkiDocumenttypechecklistID, $documenttypechecklistEditObjectV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectDocumenttypechecklistApi->documenttypechecklistEditObjectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiDocumenttypechecklistID** | **int**| The unique ID of the Documenttypechecklist | |
| **documenttypechecklistEditObjectV1Request** | [**\eZmaxAPI\Model\DocumenttypechecklistEditObjectV1Request**](../Model/DocumenttypechecklistEditObjectV1Request.md)|  | |

### Return type

[**\eZmaxAPI\Model\DocumenttypechecklistEditObjectV1Response**](../Model/DocumenttypechecklistEditObjectV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `documenttypechecklistGetListV1()`

```php
documenttypechecklistGetListV1($eOrderBy, $iRowMax, $iRowOffset, $acceptLanguage, $sFilter): \eZmaxAPI\Model\DocumenttypechecklistGetListV1Response
```

Retrieve Documenttypechecklist list

Enum values that can be filtered in query parameter *sFilter*:  | Variable | Valid values | |---|---| | eDocumenttypechecklistStatus | Not required<br>Required<br>Filed<br>Justified |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectDocumenttypechecklistApi(
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
    $result = $apiInstance->documenttypechecklistGetListV1($eOrderBy, $iRowMax, $iRowOffset, $acceptLanguage, $sFilter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectDocumenttypechecklistApi->documenttypechecklistGetListV1: ', $e->getMessage(), PHP_EOL;
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

[**\eZmaxAPI\Model\DocumenttypechecklistGetListV1Response**](../Model/DocumenttypechecklistGetListV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/vnd.openxmlformats-officedocument.spreadsheetml.sheet`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `documenttypechecklistGetObjectV2()`

```php
documenttypechecklistGetObjectV2($pkiDocumenttypechecklistID): \eZmaxAPI\Model\DocumenttypechecklistGetObjectV2Response
```

Retrieve an existing Documenttypechecklist



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectDocumenttypechecklistApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiDocumenttypechecklistID = 56; // int | The unique ID of the Documenttypechecklist

try {
    $result = $apiInstance->documenttypechecklistGetObjectV2($pkiDocumenttypechecklistID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectDocumenttypechecklistApi->documenttypechecklistGetObjectV2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiDocumenttypechecklistID** | **int**| The unique ID of the Documenttypechecklist | |

### Return type

[**\eZmaxAPI\Model\DocumenttypechecklistGetObjectV2Response**](../Model/DocumenttypechecklistGetObjectV2Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
