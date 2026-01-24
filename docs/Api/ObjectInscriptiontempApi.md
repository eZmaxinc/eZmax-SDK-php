# eZmaxAPI\ObjectInscriptiontempApi



All URIs are relative to https://prod.api.appcluster01.ca-central-1.ezmax.com/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**inscriptiontempGetCommunicationCountV1()**](ObjectInscriptiontempApi.md#inscriptiontempGetCommunicationCountV1) | **GET** /1/object/inscriptiontemp/{pkiInscriptiontempID}/getCommunicationCount | Retrieve Communication count |
| [**inscriptiontempGetCommunicationListV1()**](ObjectInscriptiontempApi.md#inscriptiontempGetCommunicationListV1) | **GET** /1/object/inscriptiontemp/{pkiInscriptiontempID}/getCommunicationList | Retrieve Communication list |
| [**inscriptiontempGetCommunicationrecipientsV1()**](ObjectInscriptiontempApi.md#inscriptiontempGetCommunicationrecipientsV1) | **GET** /1/object/inscriptiontemp/{pkiInscriptiontempID}/getCommunicationrecipients | Retrieve Inscriptiontemp&#39;s Communicationrecipient |
| [**inscriptiontempGetCommunicationsendersV1()**](ObjectInscriptiontempApi.md#inscriptiontempGetCommunicationsendersV1) | **GET** /1/object/inscriptiontemp/{pkiInscriptiontempID}/getCommunicationsenders | Retrieve Inscriptiontemp&#39;s Communicationsender |
| [**inscriptiontempGetListV1()**](ObjectInscriptiontempApi.md#inscriptiontempGetListV1) | **GET** /1/object/inscriptiontemp/getList | Retrieve Inscriptiontemp list |
| [**inscriptiontempImportIntoEDMV1()**](ObjectInscriptiontempApi.md#inscriptiontempImportIntoEDMV1) | **POST** /1/object/inscriptiontemp/{pkiInscriptiontempID}/importIntoEDM | Import attachments into the Inscriptiontemp |


## `inscriptiontempGetCommunicationCountV1()`

```php
inscriptiontempGetCommunicationCountV1($pkiInscriptiontempID): \eZmaxAPI\Model\InscriptiontempGetCommunicationCountV1Response
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


$apiInstance = new eZmaxAPI\Api\ObjectInscriptiontempApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiInscriptiontempID = 56; // int

try {
    $result = $apiInstance->inscriptiontempGetCommunicationCountV1($pkiInscriptiontempID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectInscriptiontempApi->inscriptiontempGetCommunicationCountV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiInscriptiontempID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\InscriptiontempGetCommunicationCountV1Response**](../Model/InscriptiontempGetCommunicationCountV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `inscriptiontempGetCommunicationListV1()`

```php
inscriptiontempGetCommunicationListV1($pkiInscriptiontempID): \eZmaxAPI\Model\InscriptiontempGetCommunicationListV1Response
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


$apiInstance = new eZmaxAPI\Api\ObjectInscriptiontempApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiInscriptiontempID = 56; // int

try {
    $result = $apiInstance->inscriptiontempGetCommunicationListV1($pkiInscriptiontempID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectInscriptiontempApi->inscriptiontempGetCommunicationListV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiInscriptiontempID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\InscriptiontempGetCommunicationListV1Response**](../Model/InscriptiontempGetCommunicationListV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `inscriptiontempGetCommunicationrecipientsV1()`

```php
inscriptiontempGetCommunicationrecipientsV1($pkiInscriptiontempID): \eZmaxAPI\Model\InscriptiontempGetCommunicationrecipientsV1Response
```

Retrieve Inscriptiontemp's Communicationrecipient



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectInscriptiontempApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiInscriptiontempID = 56; // int

try {
    $result = $apiInstance->inscriptiontempGetCommunicationrecipientsV1($pkiInscriptiontempID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectInscriptiontempApi->inscriptiontempGetCommunicationrecipientsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiInscriptiontempID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\InscriptiontempGetCommunicationrecipientsV1Response**](../Model/InscriptiontempGetCommunicationrecipientsV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `inscriptiontempGetCommunicationsendersV1()`

```php
inscriptiontempGetCommunicationsendersV1($pkiInscriptiontempID): \eZmaxAPI\Model\InscriptiontempGetCommunicationsendersV1Response
```

Retrieve Inscriptiontemp's Communicationsender



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectInscriptiontempApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiInscriptiontempID = 56; // int

try {
    $result = $apiInstance->inscriptiontempGetCommunicationsendersV1($pkiInscriptiontempID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectInscriptiontempApi->inscriptiontempGetCommunicationsendersV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiInscriptiontempID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\InscriptiontempGetCommunicationsendersV1Response**](../Model/InscriptiontempGetCommunicationsendersV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `inscriptiontempGetListV1()`

```php
inscriptiontempGetListV1($eOrderBy, $iRowMax, $iRowOffset, $acceptLanguage, $sFilter): \eZmaxAPI\Model\InscriptiontempGetListV1Response
```

Retrieve Inscriptiontemp list

Enum values that can be filtered in query parameter *sFilter*:  | Variable | Valid values | |---|---| | eInscriptiontempStatus | Imported<br>Processed<br>Modified |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectInscriptiontempApi(
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
    $result = $apiInstance->inscriptiontempGetListV1($eOrderBy, $iRowMax, $iRowOffset, $acceptLanguage, $sFilter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectInscriptiontempApi->inscriptiontempGetListV1: ', $e->getMessage(), PHP_EOL;
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

[**\eZmaxAPI\Model\InscriptiontempGetListV1Response**](../Model/InscriptiontempGetListV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/vnd.openxmlformats-officedocument.spreadsheetml.sheet`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `inscriptiontempImportIntoEDMV1()`

```php
inscriptiontempImportIntoEDMV1($pkiInscriptiontempID, $inscriptiontempImportIntoEDMV1Request): \eZmaxAPI\Model\InscriptiontempImportIntoEDMV1Response
```

Import attachments into the Inscriptiontemp



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectInscriptiontempApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiInscriptiontempID = 56; // int
$inscriptiontempImportIntoEDMV1Request = new \eZmaxAPI\Model\InscriptiontempImportIntoEDMV1Request(); // \eZmaxAPI\Model\InscriptiontempImportIntoEDMV1Request

try {
    $result = $apiInstance->inscriptiontempImportIntoEDMV1($pkiInscriptiontempID, $inscriptiontempImportIntoEDMV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectInscriptiontempApi->inscriptiontempImportIntoEDMV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiInscriptiontempID** | **int**|  | |
| **inscriptiontempImportIntoEDMV1Request** | [**\eZmaxAPI\Model\InscriptiontempImportIntoEDMV1Request**](../Model/InscriptiontempImportIntoEDMV1Request.md)|  | |

### Return type

[**\eZmaxAPI\Model\InscriptiontempImportIntoEDMV1Response**](../Model/InscriptiontempImportIntoEDMV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
