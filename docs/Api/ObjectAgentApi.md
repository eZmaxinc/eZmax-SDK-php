# eZmaxAPI\ObjectAgentApi



All URIs are relative to https://prod.api.appcluster01.ca-central-1.ezmax.com/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**agentBatchDownloadV1()**](ObjectAgentApi.md#agentBatchDownloadV1) | **POST** /1/object/agent/{pkiAgentID}/batchDownload | Download multiples attachments from a Agent |
| [**agentGetAttachmentsV1()**](ObjectAgentApi.md#agentGetAttachmentsV1) | **GET** /1/object/agent/{pkiAgentID}/getAttachments | Retrieve Agent&#39;s attachments |
| [**agentGetAutocompleteV2()**](ObjectAgentApi.md#agentGetAutocompleteV2) | **GET** /2/object/agent/getAutocomplete/{sSelector} | Retrieve Agents and IDs |
| [**agentGetListV1()**](ObjectAgentApi.md#agentGetListV1) | **GET** /1/object/agent/getList | Retrieve Agent list |
| [**agentImportIntoEDMV1()**](ObjectAgentApi.md#agentImportIntoEDMV1) | **POST** /1/object/agent/{pkiAgentID}/importIntoEDM | Import attachments into the Agent |


## `agentBatchDownloadV1()`

```php
agentBatchDownloadV1($pkiAgentID, $agentBatchDownloadV1Request): \SplFileObject
```

Download multiples attachments from a Agent

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectAgentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiAgentID = 56; // int
$agentBatchDownloadV1Request = new \eZmaxAPI\Model\AgentBatchDownloadV1Request(); // \eZmaxAPI\Model\AgentBatchDownloadV1Request

try {
    $result = $apiInstance->agentBatchDownloadV1($pkiAgentID, $agentBatchDownloadV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectAgentApi->agentBatchDownloadV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiAgentID** | **int**|  | |
| **agentBatchDownloadV1Request** | [**\eZmaxAPI\Model\AgentBatchDownloadV1Request**](../Model/AgentBatchDownloadV1Request.md)|  | |

### Return type

**\SplFileObject**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/zip`, `text/xml`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `agentGetAttachmentsV1()`

```php
agentGetAttachmentsV1($pkiAgentID): \eZmaxAPI\Model\AgentGetAttachmentsV1Response
```

Retrieve Agent's attachments

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectAgentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiAgentID = 56; // int

try {
    $result = $apiInstance->agentGetAttachmentsV1($pkiAgentID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectAgentApi->agentGetAttachmentsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiAgentID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\AgentGetAttachmentsV1Response**](../Model/AgentGetAttachmentsV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `agentGetAutocompleteV2()`

```php
agentGetAutocompleteV2($sSelector, $eFilterActive, $sQuery, $acceptLanguage): \eZmaxAPI\Model\AgentGetAutocompleteV2Response
```

Retrieve Agents and IDs

Get the list of Agent to be used in a dropdown or autocomplete control.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectAgentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sSelector = 'sSelector_example'; // string | The type of Agents to return
$eFilterActive = 'Active'; // string | Specify which results we want to display.
$sQuery = 'sQuery_example'; // string | Allow to filter the returned results
$acceptLanguage = new \eZmaxAPI\Model\\eZmaxAPI\Model\HeaderAcceptLanguage(); // \eZmaxAPI\Model\HeaderAcceptLanguage

try {
    $result = $apiInstance->agentGetAutocompleteV2($sSelector, $eFilterActive, $sQuery, $acceptLanguage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectAgentApi->agentGetAutocompleteV2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sSelector** | **string**| The type of Agents to return | |
| **eFilterActive** | **string**| Specify which results we want to display. | [optional] [default to &#39;Active&#39;] |
| **sQuery** | **string**| Allow to filter the returned results | [optional] |
| **acceptLanguage** | [**\eZmaxAPI\Model\HeaderAcceptLanguage**](../Model/.md)|  | [optional] |

### Return type

[**\eZmaxAPI\Model\AgentGetAutocompleteV2Response**](../Model/AgentGetAutocompleteV2Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `agentGetListV1()`

```php
agentGetListV1($eOrderBy, $iRowMax, $iRowOffset, $acceptLanguage, $sFilter): \eZmaxAPI\Model\AgentGetListV1Response
```

Retrieve Agent list



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectAgentApi(
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
    $result = $apiInstance->agentGetListV1($eOrderBy, $iRowMax, $iRowOffset, $acceptLanguage, $sFilter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectAgentApi->agentGetListV1: ', $e->getMessage(), PHP_EOL;
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

[**\eZmaxAPI\Model\AgentGetListV1Response**](../Model/AgentGetListV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/vnd.openxmlformats-officedocument.spreadsheetml.sheet`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `agentImportIntoEDMV1()`

```php
agentImportIntoEDMV1($pkiAgentID, $agentImportIntoEDMV1Request): \eZmaxAPI\Model\AgentImportIntoEDMV1Response
```

Import attachments into the Agent



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectAgentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiAgentID = 56; // int
$agentImportIntoEDMV1Request = new \eZmaxAPI\Model\AgentImportIntoEDMV1Request(); // \eZmaxAPI\Model\AgentImportIntoEDMV1Request

try {
    $result = $apiInstance->agentImportIntoEDMV1($pkiAgentID, $agentImportIntoEDMV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectAgentApi->agentImportIntoEDMV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiAgentID** | **int**|  | |
| **agentImportIntoEDMV1Request** | [**\eZmaxAPI\Model\AgentImportIntoEDMV1Request**](../Model/AgentImportIntoEDMV1Request.md)|  | |

### Return type

[**\eZmaxAPI\Model\AgentImportIntoEDMV1Response**](../Model/AgentImportIntoEDMV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
