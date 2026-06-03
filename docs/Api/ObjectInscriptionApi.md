# eZmaxAPI\ObjectInscriptionApi



All URIs are relative to https://prod.api.appcluster01.ca-central-1.ezmax.com/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**inscriptionGetAttachmentsV1()**](ObjectInscriptionApi.md#inscriptionGetAttachmentsV1) | **GET** /1/object/inscription/{pkiInscriptionID}/getAttachments | Retrieve Inscription&#39;s Attachments |
| [**inscriptionGetCommunicationCountV1()**](ObjectInscriptionApi.md#inscriptionGetCommunicationCountV1) | **GET** /1/object/inscription/{pkiInscriptionID}/getCommunicationCount | Retrieve Communication count |
| [**inscriptionGetCommunicationListV1()**](ObjectInscriptionApi.md#inscriptionGetCommunicationListV1) | **GET** /1/object/inscription/{pkiInscriptionID}/getCommunicationList | Retrieve Communication list |
| [**inscriptionGetCommunicationrecipientsV1()**](ObjectInscriptionApi.md#inscriptionGetCommunicationrecipientsV1) | **GET** /1/object/inscription/{pkiInscriptionID}/getCommunicationrecipients | Retrieve Inscription&#39;s Communicationrecipient |
| [**inscriptionGetCommunicationsendersV1()**](ObjectInscriptionApi.md#inscriptionGetCommunicationsendersV1) | **GET** /1/object/inscription/{pkiInscriptionID}/getCommunicationsenders | Retrieve Inscription&#39;s Communicationsender |
| [**inscriptionGetListV1()**](ObjectInscriptionApi.md#inscriptionGetListV1) | **GET** /1/object/inscription/getList | Retrieve Inscription list |
| [**inscriptionImportIntoEDMV1()**](ObjectInscriptionApi.md#inscriptionImportIntoEDMV1) | **POST** /1/object/inscription/{pkiInscriptionID}/importIntoEDM | Import attachments into the Inscription |
| [**inscriptionPrepareFilesTransferV1()**](ObjectInscriptionApi.md#inscriptionPrepareFilesTransferV1) | **POST** /1/object/inscription/{pkiInscriptionID}/prepareFilesTransfer | Prepares file transfer into EDM |


## `inscriptionGetAttachmentsV1()`

```php
inscriptionGetAttachmentsV1($pkiInscriptionID): \eZmaxAPI\Model\InscriptionGetAttachmentsV1Response
```

Retrieve Inscription's Attachments



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectInscriptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiInscriptionID = 56; // int

try {
    $result = $apiInstance->inscriptionGetAttachmentsV1($pkiInscriptionID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectInscriptionApi->inscriptionGetAttachmentsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiInscriptionID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\InscriptionGetAttachmentsV1Response**](../Model/InscriptionGetAttachmentsV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `inscriptionGetCommunicationCountV1()`

```php
inscriptionGetCommunicationCountV1($pkiInscriptionID): \eZmaxAPI\Model\InscriptionGetCommunicationCountV1Response
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


$apiInstance = new eZmaxAPI\Api\ObjectInscriptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiInscriptionID = 56; // int

try {
    $result = $apiInstance->inscriptionGetCommunicationCountV1($pkiInscriptionID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectInscriptionApi->inscriptionGetCommunicationCountV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiInscriptionID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\InscriptionGetCommunicationCountV1Response**](../Model/InscriptionGetCommunicationCountV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `inscriptionGetCommunicationListV1()`

```php
inscriptionGetCommunicationListV1($pkiInscriptionID): \eZmaxAPI\Model\InscriptionGetCommunicationListV1Response
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


$apiInstance = new eZmaxAPI\Api\ObjectInscriptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiInscriptionID = 56; // int

try {
    $result = $apiInstance->inscriptionGetCommunicationListV1($pkiInscriptionID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectInscriptionApi->inscriptionGetCommunicationListV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiInscriptionID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\InscriptionGetCommunicationListV1Response**](../Model/InscriptionGetCommunicationListV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `inscriptionGetCommunicationrecipientsV1()`

```php
inscriptionGetCommunicationrecipientsV1($pkiInscriptionID): \eZmaxAPI\Model\InscriptionGetCommunicationrecipientsV1Response
```

Retrieve Inscription's Communicationrecipient



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectInscriptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiInscriptionID = 56; // int

try {
    $result = $apiInstance->inscriptionGetCommunicationrecipientsV1($pkiInscriptionID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectInscriptionApi->inscriptionGetCommunicationrecipientsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiInscriptionID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\InscriptionGetCommunicationrecipientsV1Response**](../Model/InscriptionGetCommunicationrecipientsV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `inscriptionGetCommunicationsendersV1()`

```php
inscriptionGetCommunicationsendersV1($pkiInscriptionID): \eZmaxAPI\Model\InscriptionGetCommunicationsendersV1Response
```

Retrieve Inscription's Communicationsender



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectInscriptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiInscriptionID = 56; // int

try {
    $result = $apiInstance->inscriptionGetCommunicationsendersV1($pkiInscriptionID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectInscriptionApi->inscriptionGetCommunicationsendersV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiInscriptionID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\InscriptionGetCommunicationsendersV1Response**](../Model/InscriptionGetCommunicationsendersV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `inscriptionGetListV1()`

```php
inscriptionGetListV1($eOrderBy, $iRowMax, $iRowOffset, $acceptLanguage, $sFilter): \eZmaxAPI\Model\InscriptionGetListV1Response
```

Retrieve Inscription list

Enum values that can be filtered in query parameter *sFilter*:  | Variable | Valid values | |---|---| | eInscriptionStep | TemporaryNotAuthenticated<br>ImportedInscription<br>Inscription<br>ModifiedInscription<br>ContractEnded<br>ExpiredInscription<br>Out-market<br>ImportedNotauthenticated<br>NotAuthenticated<br>ModifiedNotauthenticated<br>Authenticated |  Advanced filters that can be used in query parameter *sFilter*:  | Variable | |---| | sBrokerNameInscriptor | | sBrokerNameSeller | | sContactFirstnameAgentInscriptor | | sContactLastnameAgentInscriptor | | sContactFirstnameAgentSeller | | sContactLastnameAgentSeller |         | sContactFirstnameBuyer | | sContactLastnameBuyer | | sContactFirstnameSeller | | sContactLastnameSeller |  | sContactFirstnameNotaryBuyer | | sContactLastnameNotaryBuyer |  | sContactFirstnameNotarySeller | | sContactLastnameNotarySeller |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectInscriptionApi(
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
    $result = $apiInstance->inscriptionGetListV1($eOrderBy, $iRowMax, $iRowOffset, $acceptLanguage, $sFilter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectInscriptionApi->inscriptionGetListV1: ', $e->getMessage(), PHP_EOL;
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

[**\eZmaxAPI\Model\InscriptionGetListV1Response**](../Model/InscriptionGetListV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/vnd.openxmlformats-officedocument.spreadsheetml.sheet`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `inscriptionImportIntoEDMV1()`

```php
inscriptionImportIntoEDMV1($pkiInscriptionID, $inscriptionImportIntoEDMV1Request): \eZmaxAPI\Model\InscriptionImportIntoEDMV1Response
```

Import attachments into the Inscription



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectInscriptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiInscriptionID = 56; // int
$inscriptionImportIntoEDMV1Request = new \eZmaxAPI\Model\InscriptionImportIntoEDMV1Request(); // \eZmaxAPI\Model\InscriptionImportIntoEDMV1Request

try {
    $result = $apiInstance->inscriptionImportIntoEDMV1($pkiInscriptionID, $inscriptionImportIntoEDMV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectInscriptionApi->inscriptionImportIntoEDMV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiInscriptionID** | **int**|  | |
| **inscriptionImportIntoEDMV1Request** | [**\eZmaxAPI\Model\InscriptionImportIntoEDMV1Request**](../Model/InscriptionImportIntoEDMV1Request.md)|  | |

### Return type

[**\eZmaxAPI\Model\InscriptionImportIntoEDMV1Response**](../Model/InscriptionImportIntoEDMV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `inscriptionPrepareFilesTransferV1()`

```php
inscriptionPrepareFilesTransferV1($pkiInscriptionID, $inscriptionPrepareFilesTransferV1Request): \eZmaxAPI\Model\InscriptionPrepareFilesTransferV1Response
```

Prepares file transfer into EDM



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectInscriptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiInscriptionID = 56; // int
$inscriptionPrepareFilesTransferV1Request = new \eZmaxAPI\Model\InscriptionPrepareFilesTransferV1Request(); // \eZmaxAPI\Model\InscriptionPrepareFilesTransferV1Request

try {
    $result = $apiInstance->inscriptionPrepareFilesTransferV1($pkiInscriptionID, $inscriptionPrepareFilesTransferV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectInscriptionApi->inscriptionPrepareFilesTransferV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiInscriptionID** | **int**|  | |
| **inscriptionPrepareFilesTransferV1Request** | [**\eZmaxAPI\Model\InscriptionPrepareFilesTransferV1Request**](../Model/InscriptionPrepareFilesTransferV1Request.md)|  | |

### Return type

[**\eZmaxAPI\Model\InscriptionPrepareFilesTransferV1Response**](../Model/InscriptionPrepareFilesTransferV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
