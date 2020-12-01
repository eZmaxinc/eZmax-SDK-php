# eZmaxAPI\PeriodApi

All URIs are relative to https://prod.api.appcluster01.ca-central-1.ezmax.com/rest.

Method | HTTP request | Description
------------- | ------------- | -------------
[**periodGetAutocompleteV1()**](PeriodApi.md#periodGetAutocompleteV1) | **GET** /1/object/period/getAutocomplete/{sSelector} | Retrieve Periods and IDs


## `periodGetAutocompleteV1()`

```php
periodGetAutocompleteV1($sSelector, $sQuery): \eZmaxAPI\Model\CommonGetAutocompleteV1Response
```

Retrieve Periods and IDs

Get the list of Periods to be used in a dropdown or autocomplete control.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\PeriodApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sSelector = 'sSelector_example'; // string | The types of Periods to return
$sQuery = 'sQuery_example'; // string | Allow to filter on the option value

try {
    $result = $apiInstance->periodGetAutocompleteV1($sSelector, $sQuery);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PeriodApi->periodGetAutocompleteV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sSelector** | **string**| The types of Periods to return |
 **sQuery** | **string**| Allow to filter on the option value | [optional]

### Return type

[**\eZmaxAPI\Model\CommonGetAutocompleteV1Response**](../Model/CommonGetAutocompleteV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
