# eZmaxAPI\ObjectEzsigntemplatepublicApi

All URIs are relative to https://prod.api.appcluster01.ca-central-1.ezmax.com/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**ezsigntemplatepublicCreateEzsignfolderV1()**](ObjectEzsigntemplatepublicApi.md#ezsigntemplatepublicCreateEzsignfolderV1) | **POST** /1/object/ezsigntemplatepublic/createEzsignfolder | Create an Ezsignfolder |
| [**ezsigntemplatepublicCreateObjectV1()**](ObjectEzsigntemplatepublicApi.md#ezsigntemplatepublicCreateObjectV1) | **POST** /1/object/ezsigntemplatepublic | Create a new Ezsigntemplatepublic |
| [**ezsigntemplatepublicEditObjectV1()**](ObjectEzsigntemplatepublicApi.md#ezsigntemplatepublicEditObjectV1) | **PUT** /1/object/ezsigntemplatepublic/{pkiEzsigntemplatepublicID} | Edit an existing Ezsigntemplatepublic |
| [**ezsigntemplatepublicGetEzsigntemplatepublicDetailsV1()**](ObjectEzsigntemplatepublicApi.md#ezsigntemplatepublicGetEzsigntemplatepublicDetailsV1) | **POST** /1/object/ezsigntemplatepublic/getEzsigntemplatepublicDetails | Retrieve the Ezsigntemplatepublic details |
| [**ezsigntemplatepublicGetFormsDataV1()**](ObjectEzsigntemplatepublicApi.md#ezsigntemplatepublicGetFormsDataV1) | **GET** /1/object/ezsigntemplatepublic/{pkiEzsigntemplatepublicID}/getFormsData | Retrieve an existing Ezsigntemplatepublic&#39;s forms data |
| [**ezsigntemplatepublicGetListV1()**](ObjectEzsigntemplatepublicApi.md#ezsigntemplatepublicGetListV1) | **GET** /1/object/ezsigntemplatepublic/getList | Retrieve Ezsigntemplatepublic list |
| [**ezsigntemplatepublicGetObjectV2()**](ObjectEzsigntemplatepublicApi.md#ezsigntemplatepublicGetObjectV2) | **GET** /2/object/ezsigntemplatepublic/{pkiEzsigntemplatepublicID} | Retrieve an existing Ezsigntemplatepublic |
| [**ezsigntemplatepublicResetLimitExceededCounterV1()**](ObjectEzsigntemplatepublicApi.md#ezsigntemplatepublicResetLimitExceededCounterV1) | **POST** /1/object/ezsigntemplatepublic/{pkiEzsigntemplatepublicID}/resetLimitExceededCounter | Reset the limit exceeded counter |
| [**ezsigntemplatepublicResetUrlV1()**](ObjectEzsigntemplatepublicApi.md#ezsigntemplatepublicResetUrlV1) | **POST** /1/object/ezsigntemplatepublic/{pkiEzsigntemplatepublicID}/resetUrl | Reset the Ezsigntemplatepublic url |


## `ezsigntemplatepublicCreateEzsignfolderV1()`

```php
ezsigntemplatepublicCreateEzsignfolderV1($ezsigntemplatepublicCreateEzsignfolderV1Request): \eZmaxAPI\Model\EzsigntemplatepublicCreateEzsignfolderV1Response
```

Create an Ezsignfolder

Create an Ezsignfolder

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsigntemplatepublicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ezsigntemplatepublicCreateEzsignfolderV1Request = new \eZmaxAPI\Model\EzsigntemplatepublicCreateEzsignfolderV1Request(); // \eZmaxAPI\Model\EzsigntemplatepublicCreateEzsignfolderV1Request

try {
    $result = $apiInstance->ezsigntemplatepublicCreateEzsignfolderV1($ezsigntemplatepublicCreateEzsignfolderV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsigntemplatepublicApi->ezsigntemplatepublicCreateEzsignfolderV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ezsigntemplatepublicCreateEzsignfolderV1Request** | [**\eZmaxAPI\Model\EzsigntemplatepublicCreateEzsignfolderV1Request**](../Model/EzsigntemplatepublicCreateEzsignfolderV1Request.md)|  | |

### Return type

[**\eZmaxAPI\Model\EzsigntemplatepublicCreateEzsignfolderV1Response**](../Model/EzsigntemplatepublicCreateEzsignfolderV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezsigntemplatepublicCreateObjectV1()`

```php
ezsigntemplatepublicCreateObjectV1($ezsigntemplatepublicCreateObjectV1Request): \eZmaxAPI\Model\EzsigntemplatepublicCreateObjectV1Response
```

Create a new Ezsigntemplatepublic

The endpoint allows to create one or many elements at once.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsigntemplatepublicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ezsigntemplatepublicCreateObjectV1Request = new \eZmaxAPI\Model\EzsigntemplatepublicCreateObjectV1Request(); // \eZmaxAPI\Model\EzsigntemplatepublicCreateObjectV1Request

try {
    $result = $apiInstance->ezsigntemplatepublicCreateObjectV1($ezsigntemplatepublicCreateObjectV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsigntemplatepublicApi->ezsigntemplatepublicCreateObjectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ezsigntemplatepublicCreateObjectV1Request** | [**\eZmaxAPI\Model\EzsigntemplatepublicCreateObjectV1Request**](../Model/EzsigntemplatepublicCreateObjectV1Request.md)|  | |

### Return type

[**\eZmaxAPI\Model\EzsigntemplatepublicCreateObjectV1Response**](../Model/EzsigntemplatepublicCreateObjectV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezsigntemplatepublicEditObjectV1()`

```php
ezsigntemplatepublicEditObjectV1($pkiEzsigntemplatepublicID, $ezsigntemplatepublicEditObjectV1Request): \eZmaxAPI\Model\CommonResponse
```

Edit an existing Ezsigntemplatepublic



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsigntemplatepublicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzsigntemplatepublicID = 56; // int | The unique ID of the Ezsigntemplatepublic
$ezsigntemplatepublicEditObjectV1Request = new \eZmaxAPI\Model\EzsigntemplatepublicEditObjectV1Request(); // \eZmaxAPI\Model\EzsigntemplatepublicEditObjectV1Request

try {
    $result = $apiInstance->ezsigntemplatepublicEditObjectV1($pkiEzsigntemplatepublicID, $ezsigntemplatepublicEditObjectV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsigntemplatepublicApi->ezsigntemplatepublicEditObjectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiEzsigntemplatepublicID** | **int**| The unique ID of the Ezsigntemplatepublic | |
| **ezsigntemplatepublicEditObjectV1Request** | [**\eZmaxAPI\Model\EzsigntemplatepublicEditObjectV1Request**](../Model/EzsigntemplatepublicEditObjectV1Request.md)|  | |

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

## `ezsigntemplatepublicGetEzsigntemplatepublicDetailsV1()`

```php
ezsigntemplatepublicGetEzsigntemplatepublicDetailsV1($ezsigntemplatepublicGetEzsigntemplatepublicDetailsV1Request): \eZmaxAPI\Model\EzsigntemplatepublicGetEzsigntemplatepublicDetailsV1Response
```

Retrieve the Ezsigntemplatepublic details

Retrieve the Ezsigntemplatepublic details

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsigntemplatepublicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ezsigntemplatepublicGetEzsigntemplatepublicDetailsV1Request = new \eZmaxAPI\Model\EzsigntemplatepublicGetEzsigntemplatepublicDetailsV1Request(); // \eZmaxAPI\Model\EzsigntemplatepublicGetEzsigntemplatepublicDetailsV1Request

try {
    $result = $apiInstance->ezsigntemplatepublicGetEzsigntemplatepublicDetailsV1($ezsigntemplatepublicGetEzsigntemplatepublicDetailsV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsigntemplatepublicApi->ezsigntemplatepublicGetEzsigntemplatepublicDetailsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ezsigntemplatepublicGetEzsigntemplatepublicDetailsV1Request** | [**\eZmaxAPI\Model\EzsigntemplatepublicGetEzsigntemplatepublicDetailsV1Request**](../Model/EzsigntemplatepublicGetEzsigntemplatepublicDetailsV1Request.md)|  | |

### Return type

[**\eZmaxAPI\Model\EzsigntemplatepublicGetEzsigntemplatepublicDetailsV1Response**](../Model/EzsigntemplatepublicGetEzsigntemplatepublicDetailsV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezsigntemplatepublicGetFormsDataV1()`

```php
ezsigntemplatepublicGetFormsDataV1($pkiEzsigntemplatepublicID): \eZmaxAPI\Model\EzsigntemplatepublicGetFormsDataV1Response
```

Retrieve an existing Ezsigntemplatepublic's forms data



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsigntemplatepublicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzsigntemplatepublicID = 56; // int

try {
    $result = $apiInstance->ezsigntemplatepublicGetFormsDataV1($pkiEzsigntemplatepublicID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsigntemplatepublicApi->ezsigntemplatepublicGetFormsDataV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiEzsigntemplatepublicID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\EzsigntemplatepublicGetFormsDataV1Response**](../Model/EzsigntemplatepublicGetFormsDataV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/zip`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezsigntemplatepublicGetListV1()`

```php
ezsigntemplatepublicGetListV1($eOrderBy, $iRowMax, $iRowOffset, $acceptLanguage, $sFilter): \eZmaxAPI\Model\EzsigntemplatepublicGetListV1Response
```

Retrieve Ezsigntemplatepublic list

Enum values that can be filtered in query parameter *sFilter*:  | Variable | Valid values | |---|---| | eEzsigntemplatepublicLimittype | Hour<br>Day<br>Month<br>Total |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsigntemplatepublicApi(
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
    $result = $apiInstance->ezsigntemplatepublicGetListV1($eOrderBy, $iRowMax, $iRowOffset, $acceptLanguage, $sFilter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsigntemplatepublicApi->ezsigntemplatepublicGetListV1: ', $e->getMessage(), PHP_EOL;
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

[**\eZmaxAPI\Model\EzsigntemplatepublicGetListV1Response**](../Model/EzsigntemplatepublicGetListV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/vnd.openxmlformats-officedocument.spreadsheetml.sheet`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezsigntemplatepublicGetObjectV2()`

```php
ezsigntemplatepublicGetObjectV2($pkiEzsigntemplatepublicID): \eZmaxAPI\Model\EzsigntemplatepublicGetObjectV2Response
```

Retrieve an existing Ezsigntemplatepublic



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsigntemplatepublicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzsigntemplatepublicID = 56; // int | The unique ID of the Ezsigntemplatepublic

try {
    $result = $apiInstance->ezsigntemplatepublicGetObjectV2($pkiEzsigntemplatepublicID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsigntemplatepublicApi->ezsigntemplatepublicGetObjectV2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiEzsigntemplatepublicID** | **int**| The unique ID of the Ezsigntemplatepublic | |

### Return type

[**\eZmaxAPI\Model\EzsigntemplatepublicGetObjectV2Response**](../Model/EzsigntemplatepublicGetObjectV2Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezsigntemplatepublicResetLimitExceededCounterV1()`

```php
ezsigntemplatepublicResetLimitExceededCounterV1($pkiEzsigntemplatepublicID, $body): \eZmaxAPI\Model\EzsigntemplatepublicResetLimitExceededCounterV1Response
```

Reset the limit exceeded counter



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsigntemplatepublicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzsigntemplatepublicID = 56; // int
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->ezsigntemplatepublicResetLimitExceededCounterV1($pkiEzsigntemplatepublicID, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsigntemplatepublicApi->ezsigntemplatepublicResetLimitExceededCounterV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiEzsigntemplatepublicID** | **int**|  | |
| **body** | **object**|  | |

### Return type

[**\eZmaxAPI\Model\EzsigntemplatepublicResetLimitExceededCounterV1Response**](../Model/EzsigntemplatepublicResetLimitExceededCounterV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezsigntemplatepublicResetUrlV1()`

```php
ezsigntemplatepublicResetUrlV1($pkiEzsigntemplatepublicID, $body): \eZmaxAPI\Model\EzsigntemplatepublicResetUrlV1Response
```

Reset the Ezsigntemplatepublic url



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsigntemplatepublicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzsigntemplatepublicID = 56; // int
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->ezsigntemplatepublicResetUrlV1($pkiEzsigntemplatepublicID, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsigntemplatepublicApi->ezsigntemplatepublicResetUrlV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiEzsigntemplatepublicID** | **int**|  | |
| **body** | **object**|  | |

### Return type

[**\eZmaxAPI\Model\EzsigntemplatepublicResetUrlV1Response**](../Model/EzsigntemplatepublicResetUrlV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
