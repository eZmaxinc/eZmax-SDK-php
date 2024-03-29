# eZmaxAPI\ObjectEzsignbulksendtransmissionApi

All URIs are relative to https://prod.api.appcluster01.ca-central-1.ezmax.com/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**ezsignbulksendtransmissionGetCsvErrorsV1()**](ObjectEzsignbulksendtransmissionApi.md#ezsignbulksendtransmissionGetCsvErrorsV1) | **GET** /1/object/ezsignbulksendtransmission/{pkiEzsignbulksendtransmissionID}/getCsvErrors | Retrieve an existing Ezsignbulksendtransmission&#39;s Csv containing errors |
| [**ezsignbulksendtransmissionGetEzsignsignaturesAutomaticV1()**](ObjectEzsignbulksendtransmissionApi.md#ezsignbulksendtransmissionGetEzsignsignaturesAutomaticV1) | **GET** /1/object/ezsignbulksendtransmission/{pkiEzsignbulksendtransmissionID}/getEzsignsignaturesAutomatic | Retrieve an existing Ezsignbulksendtransmission&#39;s automatic Ezsignsignatures |
| [**ezsignbulksendtransmissionGetFormsDataV1()**](ObjectEzsignbulksendtransmissionApi.md#ezsignbulksendtransmissionGetFormsDataV1) | **GET** /1/object/ezsignbulksendtransmission/{pkiEzsignbulksendtransmissionID}/getFormsData | Retrieve an existing Ezsignbulksendtransmission&#39;s forms data |
| [**ezsignbulksendtransmissionGetObjectV2()**](ObjectEzsignbulksendtransmissionApi.md#ezsignbulksendtransmissionGetObjectV2) | **GET** /2/object/ezsignbulksendtransmission/{pkiEzsignbulksendtransmissionID} | Retrieve an existing Ezsignbulksendtransmission |


## `ezsignbulksendtransmissionGetCsvErrorsV1()`

```php
ezsignbulksendtransmissionGetCsvErrorsV1($pkiEzsignbulksendtransmissionID): string
```

Retrieve an existing Ezsignbulksendtransmission's Csv containing errors



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsignbulksendtransmissionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzsignbulksendtransmissionID = 56; // int

try {
    $result = $apiInstance->ezsignbulksendtransmissionGetCsvErrorsV1($pkiEzsignbulksendtransmissionID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsignbulksendtransmissionApi->ezsignbulksendtransmissionGetCsvErrorsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiEzsignbulksendtransmissionID** | **int**|  | |

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

## `ezsignbulksendtransmissionGetEzsignsignaturesAutomaticV1()`

```php
ezsignbulksendtransmissionGetEzsignsignaturesAutomaticV1($pkiEzsignbulksendtransmissionID): \eZmaxAPI\Model\EzsignbulksendtransmissionGetEzsignsignaturesAutomaticV1Response
```

Retrieve an existing Ezsignbulksendtransmission's automatic Ezsignsignatures

Return the Ezsignsignatures that can be signed by the current user at the current step in the process

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsignbulksendtransmissionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzsignbulksendtransmissionID = 56; // int

try {
    $result = $apiInstance->ezsignbulksendtransmissionGetEzsignsignaturesAutomaticV1($pkiEzsignbulksendtransmissionID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsignbulksendtransmissionApi->ezsignbulksendtransmissionGetEzsignsignaturesAutomaticV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiEzsignbulksendtransmissionID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\EzsignbulksendtransmissionGetEzsignsignaturesAutomaticV1Response**](../Model/EzsignbulksendtransmissionGetEzsignsignaturesAutomaticV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezsignbulksendtransmissionGetFormsDataV1()`

```php
ezsignbulksendtransmissionGetFormsDataV1($pkiEzsignbulksendtransmissionID): \eZmaxAPI\Model\EzsignbulksendtransmissionGetFormsDataV1Response
```

Retrieve an existing Ezsignbulksendtransmission's forms data



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsignbulksendtransmissionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzsignbulksendtransmissionID = 56; // int

try {
    $result = $apiInstance->ezsignbulksendtransmissionGetFormsDataV1($pkiEzsignbulksendtransmissionID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsignbulksendtransmissionApi->ezsignbulksendtransmissionGetFormsDataV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiEzsignbulksendtransmissionID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\EzsignbulksendtransmissionGetFormsDataV1Response**](../Model/EzsignbulksendtransmissionGetFormsDataV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/zip`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezsignbulksendtransmissionGetObjectV2()`

```php
ezsignbulksendtransmissionGetObjectV2($pkiEzsignbulksendtransmissionID): \eZmaxAPI\Model\EzsignbulksendtransmissionGetObjectV2Response
```

Retrieve an existing Ezsignbulksendtransmission



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsignbulksendtransmissionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzsignbulksendtransmissionID = 56; // int

try {
    $result = $apiInstance->ezsignbulksendtransmissionGetObjectV2($pkiEzsignbulksendtransmissionID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsignbulksendtransmissionApi->ezsignbulksendtransmissionGetObjectV2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiEzsignbulksendtransmissionID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\EzsignbulksendtransmissionGetObjectV2Response**](../Model/EzsignbulksendtransmissionGetObjectV2Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
