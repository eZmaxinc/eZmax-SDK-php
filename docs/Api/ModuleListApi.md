# eZmaxAPI\ModuleListApi

All URIs are relative to https://prod.api.appcluster01.ca-central-1.ezmax.com/rest.

Method | HTTP request | Description
------------- | ------------- | -------------
[**listListpresentationV1()**](ModuleListApi.md#listListpresentationV1) | **POST** /1/module/list/listpresentation/{sListName} | Save all Listpresentation for a specific list


## `listListpresentationV1()`

```php
listListpresentationV1($sListName, $listSaveListpresentationV1Request): \eZmaxAPI\Model\ListSaveListpresentationV1Response
```

Save all Listpresentation for a specific list

Users can create many Listpresentations for lists in the system. They can customize orber by, filters, numbers of rows, etc.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ModuleListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sListName = 'sListName_example'; // string | The list Name
$listSaveListpresentationV1Request = new \eZmaxAPI\Model\ListSaveListpresentationV1Request(); // \eZmaxAPI\Model\ListSaveListpresentationV1Request

try {
    $result = $apiInstance->listListpresentationV1($sListName, $listSaveListpresentationV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModuleListApi->listListpresentationV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sListName** | **string**| The list Name |
 **listSaveListpresentationV1Request** | [**\eZmaxAPI\Model\ListSaveListpresentationV1Request**](../Model/ListSaveListpresentationV1Request.md)|  |

### Return type

[**\eZmaxAPI\Model\ListSaveListpresentationV1Response**](../Model/ListSaveListpresentationV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
