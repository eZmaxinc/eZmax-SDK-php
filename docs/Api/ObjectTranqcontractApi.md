# eZmaxAPI\ObjectTranqcontractApi



All URIs are relative to https://prod.api.appcluster01.ca-central-1.ezmax.com/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**tranqcontractGetCommunicationCountV1()**](ObjectTranqcontractApi.md#tranqcontractGetCommunicationCountV1) | **GET** /1/object/tranqcontract/{pkiTranqcontractID}/getCommunicationCount | Retrieve Communication count |
| [**tranqcontractGetCommunicationListV1()**](ObjectTranqcontractApi.md#tranqcontractGetCommunicationListV1) | **GET** /1/object/tranqcontract/{pkiTranqcontractID}/getCommunicationList | Retrieve Communication list |
| [**tranqcontractGetCommunicationrecipientsV1()**](ObjectTranqcontractApi.md#tranqcontractGetCommunicationrecipientsV1) | **GET** /1/object/tranqcontract/{pkiTranqcontractID}/getCommunicationrecipients | Retrieve Tranqcontract&#39;s Communicationrecipient |
| [**tranqcontractGetCommunicationsendersV1()**](ObjectTranqcontractApi.md#tranqcontractGetCommunicationsendersV1) | **GET** /1/object/tranqcontract/{pkiTranqcontractID}/getCommunicationsenders | Retrieve Tranqcontract&#39;s Communicationsender |
| [**tranqcontractGetDocumenttypechecklistV1()**](ObjectTranqcontractApi.md#tranqcontractGetDocumenttypechecklistV1) | **GET** /1/object/tranqcontract/{pkiTranqcontractID}/getDocumenttypechecklist | Retrieve Document type checklist |
| [**tranqcontractImportIntoEDMV1()**](ObjectTranqcontractApi.md#tranqcontractImportIntoEDMV1) | **POST** /1/object/tranqcontract/{pkiTranqcontractID}/importIntoEDM | Import attachments into the Tranqcontract |
| [**tranqcontractSyncDocumenttypechecklistV1()**](ObjectTranqcontractApi.md#tranqcontractSyncDocumenttypechecklistV1) | **POST** /1/object/tranqcontract/{pkiTranqcontractID}/syncDocumenttypechecklist | Synchronize Document type checklist |


## `tranqcontractGetCommunicationCountV1()`

```php
tranqcontractGetCommunicationCountV1($pkiTranqcontractID): \eZmaxAPI\Model\TranqcontractGetCommunicationCountV1Response
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


$apiInstance = new eZmaxAPI\Api\ObjectTranqcontractApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiTranqcontractID = 56; // int

try {
    $result = $apiInstance->tranqcontractGetCommunicationCountV1($pkiTranqcontractID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectTranqcontractApi->tranqcontractGetCommunicationCountV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiTranqcontractID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\TranqcontractGetCommunicationCountV1Response**](../Model/TranqcontractGetCommunicationCountV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tranqcontractGetCommunicationListV1()`

```php
tranqcontractGetCommunicationListV1($pkiTranqcontractID): \eZmaxAPI\Model\TranqcontractGetCommunicationListV1Response
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


$apiInstance = new eZmaxAPI\Api\ObjectTranqcontractApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiTranqcontractID = 56; // int

try {
    $result = $apiInstance->tranqcontractGetCommunicationListV1($pkiTranqcontractID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectTranqcontractApi->tranqcontractGetCommunicationListV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiTranqcontractID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\TranqcontractGetCommunicationListV1Response**](../Model/TranqcontractGetCommunicationListV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tranqcontractGetCommunicationrecipientsV1()`

```php
tranqcontractGetCommunicationrecipientsV1($pkiTranqcontractID): \eZmaxAPI\Model\TranqcontractGetCommunicationrecipientsV1Response
```

Retrieve Tranqcontract's Communicationrecipient



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectTranqcontractApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiTranqcontractID = 56; // int

try {
    $result = $apiInstance->tranqcontractGetCommunicationrecipientsV1($pkiTranqcontractID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectTranqcontractApi->tranqcontractGetCommunicationrecipientsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiTranqcontractID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\TranqcontractGetCommunicationrecipientsV1Response**](../Model/TranqcontractGetCommunicationrecipientsV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tranqcontractGetCommunicationsendersV1()`

```php
tranqcontractGetCommunicationsendersV1($pkiTranqcontractID): \eZmaxAPI\Model\TranqcontractGetCommunicationsendersV1Response
```

Retrieve Tranqcontract's Communicationsender



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectTranqcontractApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiTranqcontractID = 56; // int

try {
    $result = $apiInstance->tranqcontractGetCommunicationsendersV1($pkiTranqcontractID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectTranqcontractApi->tranqcontractGetCommunicationsendersV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiTranqcontractID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\TranqcontractGetCommunicationsendersV1Response**](../Model/TranqcontractGetCommunicationsendersV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tranqcontractGetDocumenttypechecklistV1()`

```php
tranqcontractGetDocumenttypechecklistV1($pkiTranqcontractID): \eZmaxAPI\Model\TranqcontractGetDocumenttypechecklistV1Response
```

Retrieve Document type checklist

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectTranqcontractApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiTranqcontractID = 56; // int

try {
    $result = $apiInstance->tranqcontractGetDocumenttypechecklistV1($pkiTranqcontractID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectTranqcontractApi->tranqcontractGetDocumenttypechecklistV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiTranqcontractID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\TranqcontractGetDocumenttypechecklistV1Response**](../Model/TranqcontractGetDocumenttypechecklistV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tranqcontractImportIntoEDMV1()`

```php
tranqcontractImportIntoEDMV1($pkiTranqcontractID, $tranqcontractImportIntoEDMV1Request): \eZmaxAPI\Model\TranqcontractImportIntoEDMV1Response
```

Import attachments into the Tranqcontract



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectTranqcontractApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiTranqcontractID = 56; // int
$tranqcontractImportIntoEDMV1Request = new \eZmaxAPI\Model\TranqcontractImportIntoEDMV1Request(); // \eZmaxAPI\Model\TranqcontractImportIntoEDMV1Request

try {
    $result = $apiInstance->tranqcontractImportIntoEDMV1($pkiTranqcontractID, $tranqcontractImportIntoEDMV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectTranqcontractApi->tranqcontractImportIntoEDMV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiTranqcontractID** | **int**|  | |
| **tranqcontractImportIntoEDMV1Request** | [**\eZmaxAPI\Model\TranqcontractImportIntoEDMV1Request**](../Model/TranqcontractImportIntoEDMV1Request.md)|  | |

### Return type

[**\eZmaxAPI\Model\TranqcontractImportIntoEDMV1Response**](../Model/TranqcontractImportIntoEDMV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tranqcontractSyncDocumenttypechecklistV1()`

```php
tranqcontractSyncDocumenttypechecklistV1($pkiTranqcontractID, $body): \eZmaxAPI\Model\TranqcontractSyncDocumenttypechecklistV1Response
```

Synchronize Document type checklist

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectTranqcontractApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiTranqcontractID = 56; // int
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->tranqcontractSyncDocumenttypechecklistV1($pkiTranqcontractID, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectTranqcontractApi->tranqcontractSyncDocumenttypechecklistV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiTranqcontractID** | **int**|  | |
| **body** | **object**|  | [optional] |

### Return type

[**\eZmaxAPI\Model\TranqcontractSyncDocumenttypechecklistV1Response**](../Model/TranqcontractSyncDocumenttypechecklistV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
