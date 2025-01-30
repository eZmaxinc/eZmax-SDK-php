# eZmaxAPI\ObjectBillingentityexternalApi

All URIs are relative to https://prod.api.appcluster01.ca-central-1.ezmax.com/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**billingentityexternalGenerateFederationTokenV1()**](ObjectBillingentityexternalApi.md#billingentityexternalGenerateFederationTokenV1) | **POST** /1/object/billingentityexternal/{pkiBillingentityexternalID}/generateFederationToken | Generate a federation token |
| [**billingentityexternalGetAutocompleteV2()**](ObjectBillingentityexternalApi.md#billingentityexternalGetAutocompleteV2) | **GET** /2/object/billingentityexternal/getAutocomplete/{sSelector} | Retrieve Billingentityexternals and IDs |


## `billingentityexternalGenerateFederationTokenV1()`

```php
billingentityexternalGenerateFederationTokenV1($pkiBillingentityexternalID, $billingentityexternalGenerateFederationTokenV1Request): \eZmaxAPI\Model\BillingentityexternalGenerateFederationTokenV1Response
```

Generate a federation token



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectBillingentityexternalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiBillingentityexternalID = 56; // int
$billingentityexternalGenerateFederationTokenV1Request = new \eZmaxAPI\Model\BillingentityexternalGenerateFederationTokenV1Request(); // \eZmaxAPI\Model\BillingentityexternalGenerateFederationTokenV1Request

try {
    $result = $apiInstance->billingentityexternalGenerateFederationTokenV1($pkiBillingentityexternalID, $billingentityexternalGenerateFederationTokenV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectBillingentityexternalApi->billingentityexternalGenerateFederationTokenV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiBillingentityexternalID** | **int**|  | |
| **billingentityexternalGenerateFederationTokenV1Request** | [**\eZmaxAPI\Model\BillingentityexternalGenerateFederationTokenV1Request**](../Model/BillingentityexternalGenerateFederationTokenV1Request.md)|  | |

### Return type

[**\eZmaxAPI\Model\BillingentityexternalGenerateFederationTokenV1Response**](../Model/BillingentityexternalGenerateFederationTokenV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `billingentityexternalGetAutocompleteV2()`

```php
billingentityexternalGetAutocompleteV2($sSelector, $eFilterActive, $sQuery, $acceptLanguage): \eZmaxAPI\Model\BillingentityexternalGetAutocompleteV2Response
```

Retrieve Billingentityexternals and IDs

Get the list of Billingentityexternal to be used in a dropdown or autocomplete control.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectBillingentityexternalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sSelector = 'sSelector_example'; // string | The type of Billingentityexternals to return
$eFilterActive = 'Active'; // string | Specify which results we want to display.
$sQuery = 'sQuery_example'; // string | Allow to filter the returned results
$acceptLanguage = new \eZmaxAPI\Model\\eZmaxAPI\Model\HeaderAcceptLanguage(); // \eZmaxAPI\Model\HeaderAcceptLanguage

try {
    $result = $apiInstance->billingentityexternalGetAutocompleteV2($sSelector, $eFilterActive, $sQuery, $acceptLanguage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectBillingentityexternalApi->billingentityexternalGetAutocompleteV2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sSelector** | **string**| The type of Billingentityexternals to return | |
| **eFilterActive** | **string**| Specify which results we want to display. | [optional] [default to &#39;Active&#39;] |
| **sQuery** | **string**| Allow to filter the returned results | [optional] |
| **acceptLanguage** | [**\eZmaxAPI\Model\HeaderAcceptLanguage**](../Model/.md)|  | [optional] |

### Return type

[**\eZmaxAPI\Model\BillingentityexternalGetAutocompleteV2Response**](../Model/BillingentityexternalGetAutocompleteV2Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
