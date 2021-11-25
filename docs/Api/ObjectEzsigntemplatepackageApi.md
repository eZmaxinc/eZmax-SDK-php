# eZmaxAPI\ObjectEzsigntemplatepackageApi

All URIs are relative to https://prod.api.appcluster01.ca-central-1.ezmax.com/rest.

Method | HTTP request | Description
------------- | ------------- | -------------
[**ezsigntemplatepackageGetListV1()**](ObjectEzsigntemplatepackageApi.md#ezsigntemplatepackageGetListV1) | **GET** /1/object/ezsigntemplatepackage/getList | Retrieve Ezsigntemplatepackage list


## `ezsigntemplatepackageGetListV1()`

```php
ezsigntemplatepackageGetListV1($eOrderBy, $iRowMax, $iRowOffset, $acceptLanguage, $sFilter): \eZmaxAPI\Model\EzsigntemplatepackageGetListV1Response
```

Retrieve Ezsigntemplatepackage list

Enum values that can be filtered in query parameter *sFilter*:  | Variable | Valid values | |---|---| | ezsigntemplatepackage | Company<br>Department<br>Team<br>User<br>Usergroup |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsigntemplatepackageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$eOrderBy = 'eOrderBy_example'; // string | Specify how you want the results to be sorted
$iRowMax = 56; // int
$iRowOffset = 56; // int
$acceptLanguage = new \eZmaxAPI\Model\\eZmaxAPI\Model\HeaderAcceptLanguage(); // \eZmaxAPI\Model\HeaderAcceptLanguage
$sFilter = 'sFilter_example'; // string

try {
    $result = $apiInstance->ezsigntemplatepackageGetListV1($eOrderBy, $iRowMax, $iRowOffset, $acceptLanguage, $sFilter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsigntemplatepackageApi->ezsigntemplatepackageGetListV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **eOrderBy** | **string**| Specify how you want the results to be sorted | [optional]
 **iRowMax** | **int**|  | [optional]
 **iRowOffset** | **int**|  | [optional]
 **acceptLanguage** | [**\eZmaxAPI\Model\HeaderAcceptLanguage**](../Model/.md)|  | [optional]
 **sFilter** | **string**|  | [optional]

### Return type

[**\eZmaxAPI\Model\EzsigntemplatepackageGetListV1Response**](../Model/EzsigntemplatepackageGetListV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/vnd.openxmlformats-officedocument.spreadsheetml.sheet`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
