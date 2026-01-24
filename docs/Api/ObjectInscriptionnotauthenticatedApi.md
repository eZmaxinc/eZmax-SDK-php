# eZmaxAPI\ObjectInscriptionnotauthenticatedApi



All URIs are relative to https://prod.api.appcluster01.ca-central-1.ezmax.com/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**inscriptionnotauthenticatedGetCommunicationCountV1()**](ObjectInscriptionnotauthenticatedApi.md#inscriptionnotauthenticatedGetCommunicationCountV1) | **GET** /1/object/inscriptionnotauthenticated/{pkiInscriptionnotauthenticatedID}/getCommunicationCount | Retrieve Communication count |
| [**inscriptionnotauthenticatedGetCommunicationListV1()**](ObjectInscriptionnotauthenticatedApi.md#inscriptionnotauthenticatedGetCommunicationListV1) | **GET** /1/object/inscriptionnotauthenticated/{pkiInscriptionnotauthenticatedID}/getCommunicationList | Retrieve Communication list |
| [**inscriptionnotauthenticatedGetCommunicationrecipientsV1()**](ObjectInscriptionnotauthenticatedApi.md#inscriptionnotauthenticatedGetCommunicationrecipientsV1) | **GET** /1/object/inscriptionnotauthenticated/{pkiInscriptionnotauthenticatedID}/getCommunicationrecipients | Retrieve Inscriptionnotauthenticated&#39;s Communicationrecipient |
| [**inscriptionnotauthenticatedGetCommunicationsendersV1()**](ObjectInscriptionnotauthenticatedApi.md#inscriptionnotauthenticatedGetCommunicationsendersV1) | **GET** /1/object/inscriptionnotauthenticated/{pkiInscriptionnotauthenticatedID}/getCommunicationsenders | Retrieve Inscriptionnotauthenticated&#39;s Communicationsender |
| [**inscriptionnotauthenticatedGetListV1()**](ObjectInscriptionnotauthenticatedApi.md#inscriptionnotauthenticatedGetListV1) | **GET** /1/object/inscriptionnotauthenticated/getList | Retrieve Inscriptionnotauthenticated list |
| [**inscriptionnotauthenticatedImportIntoEDMV1()**](ObjectInscriptionnotauthenticatedApi.md#inscriptionnotauthenticatedImportIntoEDMV1) | **POST** /1/object/inscriptionnotauthenticated/{pkiInscriptionnotauthenticatedID}/importIntoEDM | Import attachments into the Inscriptionnotauthenticated |


## `inscriptionnotauthenticatedGetCommunicationCountV1()`

```php
inscriptionnotauthenticatedGetCommunicationCountV1($pkiInscriptionnotauthenticatedID): \eZmaxAPI\Model\InscriptionnotauthenticatedGetCommunicationCountV1Response
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


$apiInstance = new eZmaxAPI\Api\ObjectInscriptionnotauthenticatedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiInscriptionnotauthenticatedID = 56; // int

try {
    $result = $apiInstance->inscriptionnotauthenticatedGetCommunicationCountV1($pkiInscriptionnotauthenticatedID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectInscriptionnotauthenticatedApi->inscriptionnotauthenticatedGetCommunicationCountV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiInscriptionnotauthenticatedID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\InscriptionnotauthenticatedGetCommunicationCountV1Response**](../Model/InscriptionnotauthenticatedGetCommunicationCountV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `inscriptionnotauthenticatedGetCommunicationListV1()`

```php
inscriptionnotauthenticatedGetCommunicationListV1($pkiInscriptionnotauthenticatedID): \eZmaxAPI\Model\InscriptionnotauthenticatedGetCommunicationListV1Response
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


$apiInstance = new eZmaxAPI\Api\ObjectInscriptionnotauthenticatedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiInscriptionnotauthenticatedID = 56; // int

try {
    $result = $apiInstance->inscriptionnotauthenticatedGetCommunicationListV1($pkiInscriptionnotauthenticatedID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectInscriptionnotauthenticatedApi->inscriptionnotauthenticatedGetCommunicationListV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiInscriptionnotauthenticatedID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\InscriptionnotauthenticatedGetCommunicationListV1Response**](../Model/InscriptionnotauthenticatedGetCommunicationListV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `inscriptionnotauthenticatedGetCommunicationrecipientsV1()`

```php
inscriptionnotauthenticatedGetCommunicationrecipientsV1($pkiInscriptionnotauthenticatedID): \eZmaxAPI\Model\InscriptionnotauthenticatedGetCommunicationrecipientsV1Response
```

Retrieve Inscriptionnotauthenticated's Communicationrecipient



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectInscriptionnotauthenticatedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiInscriptionnotauthenticatedID = 56; // int

try {
    $result = $apiInstance->inscriptionnotauthenticatedGetCommunicationrecipientsV1($pkiInscriptionnotauthenticatedID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectInscriptionnotauthenticatedApi->inscriptionnotauthenticatedGetCommunicationrecipientsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiInscriptionnotauthenticatedID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\InscriptionnotauthenticatedGetCommunicationrecipientsV1Response**](../Model/InscriptionnotauthenticatedGetCommunicationrecipientsV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `inscriptionnotauthenticatedGetCommunicationsendersV1()`

```php
inscriptionnotauthenticatedGetCommunicationsendersV1($pkiInscriptionnotauthenticatedID): \eZmaxAPI\Model\InscriptionnotauthenticatedGetCommunicationsendersV1Response
```

Retrieve Inscriptionnotauthenticated's Communicationsender



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectInscriptionnotauthenticatedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiInscriptionnotauthenticatedID = 56; // int

try {
    $result = $apiInstance->inscriptionnotauthenticatedGetCommunicationsendersV1($pkiInscriptionnotauthenticatedID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectInscriptionnotauthenticatedApi->inscriptionnotauthenticatedGetCommunicationsendersV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiInscriptionnotauthenticatedID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\InscriptionnotauthenticatedGetCommunicationsendersV1Response**](../Model/InscriptionnotauthenticatedGetCommunicationsendersV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `inscriptionnotauthenticatedGetListV1()`

```php
inscriptionnotauthenticatedGetListV1($eOrderBy, $iRowMax, $iRowOffset, $acceptLanguage, $sFilter): \eZmaxAPI\Model\InscriptionnotauthenticatedGetListV1Response
```

Retrieve Inscriptionnotauthenticated list

Enum values that can be filtered in query parameter *sFilter*:  | Variable | Valid values | |---|---| | eInscriptionStep | TemporaryNotAuthenticated<br>ImportedInscription<br>Inscription<br>ModifiedInscription<br>ContractEnded<br>ExpiredInscription<br>Out-market<br>ImportedNotauthenticated<br>NotAuthenticated<br>ModifiedNotauthenticated<br>Authenticated |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectInscriptionnotauthenticatedApi(
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
    $result = $apiInstance->inscriptionnotauthenticatedGetListV1($eOrderBy, $iRowMax, $iRowOffset, $acceptLanguage, $sFilter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectInscriptionnotauthenticatedApi->inscriptionnotauthenticatedGetListV1: ', $e->getMessage(), PHP_EOL;
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

[**\eZmaxAPI\Model\InscriptionnotauthenticatedGetListV1Response**](../Model/InscriptionnotauthenticatedGetListV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/vnd.openxmlformats-officedocument.spreadsheetml.sheet`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `inscriptionnotauthenticatedImportIntoEDMV1()`

```php
inscriptionnotauthenticatedImportIntoEDMV1($pkiInscriptionnotauthenticatedID, $inscriptionnotauthenticatedImportIntoEDMV1Request): \eZmaxAPI\Model\InscriptionnotauthenticatedImportIntoEDMV1Response
```

Import attachments into the Inscriptionnotauthenticated



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectInscriptionnotauthenticatedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiInscriptionnotauthenticatedID = 56; // int
$inscriptionnotauthenticatedImportIntoEDMV1Request = new \eZmaxAPI\Model\InscriptionnotauthenticatedImportIntoEDMV1Request(); // \eZmaxAPI\Model\InscriptionnotauthenticatedImportIntoEDMV1Request

try {
    $result = $apiInstance->inscriptionnotauthenticatedImportIntoEDMV1($pkiInscriptionnotauthenticatedID, $inscriptionnotauthenticatedImportIntoEDMV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectInscriptionnotauthenticatedApi->inscriptionnotauthenticatedImportIntoEDMV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiInscriptionnotauthenticatedID** | **int**|  | |
| **inscriptionnotauthenticatedImportIntoEDMV1Request** | [**\eZmaxAPI\Model\InscriptionnotauthenticatedImportIntoEDMV1Request**](../Model/InscriptionnotauthenticatedImportIntoEDMV1Request.md)|  | |

### Return type

[**\eZmaxAPI\Model\InscriptionnotauthenticatedImportIntoEDMV1Response**](../Model/InscriptionnotauthenticatedImportIntoEDMV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
