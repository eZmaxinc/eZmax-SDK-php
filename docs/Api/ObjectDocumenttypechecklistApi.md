# eZmaxAPI\ObjectDocumenttypechecklistApi



All URIs are relative to https://prod.api.appcluster01.ca-central-1.ezmax.com/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**documenttypechecklistPatchObjectV1()**](ObjectDocumenttypechecklistApi.md#documenttypechecklistPatchObjectV1) | **PATCH** /1/object/documenttypechecklist/{pkiDocumenttypechecklistID} | Patch an existing Documenttypechecklist |


## `documenttypechecklistPatchObjectV1()`

```php
documenttypechecklistPatchObjectV1($pkiDocumenttypechecklistID, $documenttypechecklistPatchObjectV1Request): \eZmaxAPI\Model\DocumenttypechecklistPatchObjectV1Response
```

Patch an existing Documenttypechecklist



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectDocumenttypechecklistApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiDocumenttypechecklistID = 56; // int | The unique ID of the Documenttypechecklist
$documenttypechecklistPatchObjectV1Request = new \eZmaxAPI\Model\DocumenttypechecklistPatchObjectV1Request(); // \eZmaxAPI\Model\DocumenttypechecklistPatchObjectV1Request

try {
    $result = $apiInstance->documenttypechecklistPatchObjectV1($pkiDocumenttypechecklistID, $documenttypechecklistPatchObjectV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectDocumenttypechecklistApi->documenttypechecklistPatchObjectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiDocumenttypechecklistID** | **int**| The unique ID of the Documenttypechecklist | |
| **documenttypechecklistPatchObjectV1Request** | [**\eZmaxAPI\Model\DocumenttypechecklistPatchObjectV1Request**](../Model/DocumenttypechecklistPatchObjectV1Request.md)|  | |

### Return type

[**\eZmaxAPI\Model\DocumenttypechecklistPatchObjectV1Response**](../Model/DocumenttypechecklistPatchObjectV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
