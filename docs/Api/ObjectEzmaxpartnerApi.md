# eZmaxAPI\ObjectEzmaxpartnerApi



All URIs are relative to https://prod.api.appcluster01.ca-central-1.ezmax.com/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**ezmaxpartnerGetCustomDeveloppersV1()**](ObjectEzmaxpartnerApi.md#ezmaxpartnerGetCustomDeveloppersV1) | **GET** /1/object/ezmaxpartner/getCustomDeveloppers | Retrieve Ezmaxpartner custom developpers list |
| [**ezmaxpartnerGetObjectV2()**](ObjectEzmaxpartnerApi.md#ezmaxpartnerGetObjectV2) | **GET** /2/object/ezmaxpartner/{pkiEzmaxpartnerID} | Retrieve an existing Ezmaxpartner |


## `ezmaxpartnerGetCustomDeveloppersV1()`

```php
ezmaxpartnerGetCustomDeveloppersV1($eOrderBy, $iRowMax, $iRowOffset, $acceptLanguage, $sFilter): \eZmaxAPI\Model\EzmaxpartnerGetCustomDeveloppersV1Response
```

Retrieve Ezmaxpartner custom developpers list

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzmaxpartnerApi(
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
    $result = $apiInstance->ezmaxpartnerGetCustomDeveloppersV1($eOrderBy, $iRowMax, $iRowOffset, $acceptLanguage, $sFilter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzmaxpartnerApi->ezmaxpartnerGetCustomDeveloppersV1: ', $e->getMessage(), PHP_EOL;
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

[**\eZmaxAPI\Model\EzmaxpartnerGetCustomDeveloppersV1Response**](../Model/EzmaxpartnerGetCustomDeveloppersV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/vnd.openxmlformats-officedocument.spreadsheetml.sheet`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezmaxpartnerGetObjectV2()`

```php
ezmaxpartnerGetObjectV2($pkiEzmaxpartnerID): \eZmaxAPI\Model\EzmaxpartnerGetObjectV2Response
```

Retrieve an existing Ezmaxpartner



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzmaxpartnerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzmaxpartnerID = 56; // int | The unique ID of the Ezmaxpartner

try {
    $result = $apiInstance->ezmaxpartnerGetObjectV2($pkiEzmaxpartnerID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzmaxpartnerApi->ezmaxpartnerGetObjectV2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiEzmaxpartnerID** | **int**| The unique ID of the Ezmaxpartner | |

### Return type

[**\eZmaxAPI\Model\EzmaxpartnerGetObjectV2Response**](../Model/EzmaxpartnerGetObjectV2Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
