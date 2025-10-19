# eZmaxAPI\ObjectBuyercontractApi

All URIs are relative to https://prod.api.appcluster01.ca-central-1.ezmax.com/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**buyercontractGetCommunicationCountV1()**](ObjectBuyercontractApi.md#buyercontractGetCommunicationCountV1) | **GET** /1/object/buyercontract/{pkiBuyercontractID}/getCommunicationCount | Retrieve Communication count |
| [**buyercontractGetCommunicationListV1()**](ObjectBuyercontractApi.md#buyercontractGetCommunicationListV1) | **GET** /1/object/buyercontract/{pkiBuyercontractID}/getCommunicationList | Retrieve Communication list |
| [**buyercontractGetCommunicationrecipientsV1()**](ObjectBuyercontractApi.md#buyercontractGetCommunicationrecipientsV1) | **GET** /1/object/buyercontract/{pkiBuyercontractID}/getCommunicationrecipients | Retrieve Buyercontract&#39;s Communicationrecipient |
| [**buyercontractGetCommunicationsendersV1()**](ObjectBuyercontractApi.md#buyercontractGetCommunicationsendersV1) | **GET** /1/object/buyercontract/{pkiBuyercontractID}/getCommunicationsenders | Retrieve Buyercontract&#39;s Communicationsender |
| [**buyercontractGetListV1()**](ObjectBuyercontractApi.md#buyercontractGetListV1) | **GET** /1/object/buyercontract/getList | Retrieve Buyercontract list |
| [**buyercontractImportIntoEDMV1()**](ObjectBuyercontractApi.md#buyercontractImportIntoEDMV1) | **POST** /1/object/buyercontract/{pkiBuyercontractID}/importIntoEDM | Import attachments into the Buyercontract |


## `buyercontractGetCommunicationCountV1()`

```php
buyercontractGetCommunicationCountV1($pkiBuyercontractID): \eZmaxAPI\Model\BuyercontractGetCommunicationCountV1Response
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


$apiInstance = new eZmaxAPI\Api\ObjectBuyercontractApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiBuyercontractID = 56; // int

try {
    $result = $apiInstance->buyercontractGetCommunicationCountV1($pkiBuyercontractID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectBuyercontractApi->buyercontractGetCommunicationCountV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiBuyercontractID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\BuyercontractGetCommunicationCountV1Response**](../Model/BuyercontractGetCommunicationCountV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `buyercontractGetCommunicationListV1()`

```php
buyercontractGetCommunicationListV1($pkiBuyercontractID): \eZmaxAPI\Model\BuyercontractGetCommunicationListV1Response
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


$apiInstance = new eZmaxAPI\Api\ObjectBuyercontractApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiBuyercontractID = 56; // int

try {
    $result = $apiInstance->buyercontractGetCommunicationListV1($pkiBuyercontractID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectBuyercontractApi->buyercontractGetCommunicationListV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiBuyercontractID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\BuyercontractGetCommunicationListV1Response**](../Model/BuyercontractGetCommunicationListV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `buyercontractGetCommunicationrecipientsV1()`

```php
buyercontractGetCommunicationrecipientsV1($pkiBuyercontractID): \eZmaxAPI\Model\BuyercontractGetCommunicationrecipientsV1Response
```

Retrieve Buyercontract's Communicationrecipient



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectBuyercontractApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiBuyercontractID = 56; // int

try {
    $result = $apiInstance->buyercontractGetCommunicationrecipientsV1($pkiBuyercontractID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectBuyercontractApi->buyercontractGetCommunicationrecipientsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiBuyercontractID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\BuyercontractGetCommunicationrecipientsV1Response**](../Model/BuyercontractGetCommunicationrecipientsV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `buyercontractGetCommunicationsendersV1()`

```php
buyercontractGetCommunicationsendersV1($pkiBuyercontractID): \eZmaxAPI\Model\BuyercontractGetCommunicationsendersV1Response
```

Retrieve Buyercontract's Communicationsender



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectBuyercontractApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiBuyercontractID = 56; // int

try {
    $result = $apiInstance->buyercontractGetCommunicationsendersV1($pkiBuyercontractID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectBuyercontractApi->buyercontractGetCommunicationsendersV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiBuyercontractID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\BuyercontractGetCommunicationsendersV1Response**](../Model/BuyercontractGetCommunicationsendersV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `buyercontractGetListV1()`

```php
buyercontractGetListV1($eOrderBy, $iRowMax, $iRowOffset, $acceptLanguage, $sFilter): \eZmaxAPI\Model\BuyercontractGetListV1Response
```

Retrieve Buyercontract list

Enum values that can be filtered in query parameter *sFilter*:  | Variable | Valid values | |---|---| | eBuyercontractStep | Imported<br>Active<br>Modified<br>ContractEnded<br>ExpiredContract<br>Bought | | eBuyercontractType | Rent<br>Sale<br>RentOrSale |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectBuyercontractApi(
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
    $result = $apiInstance->buyercontractGetListV1($eOrderBy, $iRowMax, $iRowOffset, $acceptLanguage, $sFilter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectBuyercontractApi->buyercontractGetListV1: ', $e->getMessage(), PHP_EOL;
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

[**\eZmaxAPI\Model\BuyercontractGetListV1Response**](../Model/BuyercontractGetListV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/vnd.openxmlformats-officedocument.spreadsheetml.sheet`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `buyercontractImportIntoEDMV1()`

```php
buyercontractImportIntoEDMV1($pkiBuyercontractID, $buyercontractImportIntoEDMV1Request): \eZmaxAPI\Model\BuyercontractImportIntoEDMV1Response
```

Import attachments into the Buyercontract



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectBuyercontractApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiBuyercontractID = 56; // int
$buyercontractImportIntoEDMV1Request = new \eZmaxAPI\Model\BuyercontractImportIntoEDMV1Request(); // \eZmaxAPI\Model\BuyercontractImportIntoEDMV1Request

try {
    $result = $apiInstance->buyercontractImportIntoEDMV1($pkiBuyercontractID, $buyercontractImportIntoEDMV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectBuyercontractApi->buyercontractImportIntoEDMV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiBuyercontractID** | **int**|  | |
| **buyercontractImportIntoEDMV1Request** | [**\eZmaxAPI\Model\BuyercontractImportIntoEDMV1Request**](../Model/BuyercontractImportIntoEDMV1Request.md)|  | |

### Return type

[**\eZmaxAPI\Model\BuyercontractImportIntoEDMV1Response**](../Model/BuyercontractImportIntoEDMV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
