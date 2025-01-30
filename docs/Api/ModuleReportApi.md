# eZmaxAPI\ModuleReportApi

All URIs are relative to https://prod.api.appcluster01.ca-central-1.ezmax.com/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**reportGetReportFromCacheV1()**](ModuleReportApi.md#reportGetReportFromCacheV1) | **GET** /1/module/report/getReportFromCache/{sReportgroupCacheID} | Retrieve report from cache |


## `reportGetReportFromCacheV1()`

```php
reportGetReportFromCacheV1($sReportgroupCacheID): \eZmaxAPI\Model\CommonGetReportV1Response
```

Retrieve report from cache

Retrieve a report that was previously generated and cached

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: Presigned
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('sAuthorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sAuthorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ModuleReportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sReportgroupCacheID = 'sReportgroupCacheID_example'; // string

try {
    $result = $apiInstance->reportGetReportFromCacheV1($sReportgroupCacheID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModuleReportApi->reportGetReportFromCacheV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sReportgroupCacheID** | **string**|  | |

### Return type

[**\eZmaxAPI\Model\CommonGetReportV1Response**](../Model/CommonGetReportV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization), [Presigned](../../README.md#Presigned)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/pdf`, `application/vnd.openxmlformats-officedocument.spreadsheetml.sheet`, `application/zip`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
