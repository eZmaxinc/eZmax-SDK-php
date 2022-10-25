# eZmaxAPI\ModuleEzsignApi

All URIs are relative to https://prod.api.appcluster01.ca-central-1.ezmax.com/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**ezsignSuggestSignersV1()**](ModuleEzsignApi.md#ezsignSuggestSignersV1) | **GET** /1/module/ezsign/suggestSigners | Suggest signers |
| [**ezsignSuggestTemplatesV1()**](ModuleEzsignApi.md#ezsignSuggestTemplatesV1) | **GET** /1/module/ezsign/suggestTemplates | Suggest templates |


## `ezsignSuggestSignersV1()`

```php
ezsignSuggestSignersV1(): \eZmaxAPI\Model\EzsignSuggestSignersV1Response
```

Suggest signers

Retrieve previously used Ezsignsigners and all users from the system

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ModuleEzsignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->ezsignSuggestSignersV1();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModuleEzsignApi->ezsignSuggestSignersV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\eZmaxAPI\Model\EzsignSuggestSignersV1Response**](../Model/EzsignSuggestSignersV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezsignSuggestTemplatesV1()`

```php
ezsignSuggestTemplatesV1($fkiEzsignfoldertypeID): \eZmaxAPI\Model\EzsignSuggestTemplatesV1Response
```

Suggest templates

Retrieve Ezsigntemplates and Ezsigntemplatepackages that can be imported in a Ezsignfolder

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ModuleEzsignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fkiEzsignfoldertypeID = 56; // int

try {
    $result = $apiInstance->ezsignSuggestTemplatesV1($fkiEzsignfoldertypeID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModuleEzsignApi->ezsignSuggestTemplatesV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fkiEzsignfoldertypeID** | **int**|  | [optional] |

### Return type

[**\eZmaxAPI\Model\EzsignSuggestTemplatesV1Response**](../Model/EzsignSuggestTemplatesV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
