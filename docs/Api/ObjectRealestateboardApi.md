# eZmaxAPI\ObjectRealestateboardApi



All URIs are relative to https://prod.api.appcluster01.ca-central-1.ezmax.com/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**realestateboardGetAutocompleteV2()**](ObjectRealestateboardApi.md#realestateboardGetAutocompleteV2) | **GET** /2/object/realestateboard/getAutocomplete/{sSelector} | Retrieve Realestateboards and IDs |


## `realestateboardGetAutocompleteV2()`

```php
realestateboardGetAutocompleteV2($sSelector, $eFilterActive, $sQuery, $acceptLanguage, $fkiProvinceID): \eZmaxAPI\Model\RealestateboardGetAutocompleteV2Response
```

Retrieve Realestateboards and IDs

Get the list of realestateboard to be used in a dropdown or autocomplete control.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectRealestateboardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sSelector = 'sSelector_example'; // string | The type of Realestateboards to return
$eFilterActive = 'Active'; // string | Specify which results we want to display.
$sQuery = 'sQuery_example'; // string | Allow to filter the returned results
$acceptLanguage = new \eZmaxAPI\Model\\eZmaxAPI\Model\HeaderAcceptLanguage(); // \eZmaxAPI\Model\HeaderAcceptLanguage
$fkiProvinceID = 'fkiProvinceID_example'; // string | The province ID to filter the results expected

try {
    $result = $apiInstance->realestateboardGetAutocompleteV2($sSelector, $eFilterActive, $sQuery, $acceptLanguage, $fkiProvinceID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectRealestateboardApi->realestateboardGetAutocompleteV2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sSelector** | **string**| The type of Realestateboards to return | |
| **eFilterActive** | **string**| Specify which results we want to display. | [optional] [default to &#39;Active&#39;] |
| **sQuery** | **string**| Allow to filter the returned results | [optional] |
| **acceptLanguage** | [**\eZmaxAPI\Model\HeaderAcceptLanguage**](../Model/.md)|  | [optional] |
| **fkiProvinceID** | **string**| The province ID to filter the results expected | [optional] |

### Return type

[**\eZmaxAPI\Model\RealestateboardGetAutocompleteV2Response**](../Model/RealestateboardGetAutocompleteV2Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
