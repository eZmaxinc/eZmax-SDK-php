# eZmaxAPI\ObjectCustomertemplateApi



All URIs are relative to https://prod.api.appcluster01.ca-central-1.ezmax.com/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**customertemplateGetDocumenttypechecklistV1()**](ObjectCustomertemplateApi.md#customertemplateGetDocumenttypechecklistV1) | **GET** /1/object/customertemplate/{pkiCustomertemplateID}/getDocumenttypechecklist | Retrieve Document type checklist |
| [**customertemplateSyncDocumenttypechecklistV1()**](ObjectCustomertemplateApi.md#customertemplateSyncDocumenttypechecklistV1) | **POST** /1/object/customertemplate/{pkiCustomertemplateID}/syncDocumenttypechecklist | Synchronize Document type checklist |


## `customertemplateGetDocumenttypechecklistV1()`

```php
customertemplateGetDocumenttypechecklistV1($pkiCustomertemplateID): \eZmaxAPI\Model\CustomertemplateGetDocumenttypechecklistV1Response
```

Retrieve Document type checklist

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectCustomertemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiCustomertemplateID = 56; // int

try {
    $result = $apiInstance->customertemplateGetDocumenttypechecklistV1($pkiCustomertemplateID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectCustomertemplateApi->customertemplateGetDocumenttypechecklistV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiCustomertemplateID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\CustomertemplateGetDocumenttypechecklistV1Response**](../Model/CustomertemplateGetDocumenttypechecklistV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `customertemplateSyncDocumenttypechecklistV1()`

```php
customertemplateSyncDocumenttypechecklistV1($pkiCustomertemplateID, $body): \eZmaxAPI\Model\CustomertemplateSyncDocumenttypechecklistV1Response
```

Synchronize Document type checklist

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectCustomertemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiCustomertemplateID = 56; // int
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->customertemplateSyncDocumenttypechecklistV1($pkiCustomertemplateID, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectCustomertemplateApi->customertemplateSyncDocumenttypechecklistV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiCustomertemplateID** | **int**|  | |
| **body** | **object**|  | [optional] |

### Return type

[**\eZmaxAPI\Model\CustomertemplateSyncDocumenttypechecklistV1Response**](../Model/CustomertemplateSyncDocumenttypechecklistV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
