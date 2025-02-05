# eZmaxAPI\GlobalEzmaxclientApi

All URIs are relative to https://prod.api.appcluster01.ca-central-1.ezmax.com/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**globalEzmaxclientVersionV1()**](GlobalEzmaxclientApi.md#globalEzmaxclientVersionV1) | **GET** /1/ezmaxclient/{pksEzmaxclientOs}/version | Retrieve the latest version of the Ezmaxclient |


## `globalEzmaxclientVersionV1()`

```php
globalEzmaxclientVersionV1($pksEzmaxclientOs): \eZmaxAPI\Model\GlobalEzmaxclientVersionV1Response
```

Retrieve the latest version of the Ezmaxclient

Retrieve the latest version of the Ezmaxclient that is available on the store.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new eZmaxAPI\Api\GlobalEzmaxclientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$pksEzmaxclientOs = new \eZmaxAPI\Model\\eZmaxAPI\Model\FieldPksEzmaxclientOs(); // \eZmaxAPI\Model\FieldPksEzmaxclientOs

try {
    $result = $apiInstance->globalEzmaxclientVersionV1($pksEzmaxclientOs);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobalEzmaxclientApi->globalEzmaxclientVersionV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pksEzmaxclientOs** | [**\eZmaxAPI\Model\FieldPksEzmaxclientOs**](../Model/.md)|  | |

### Return type

[**\eZmaxAPI\Model\GlobalEzmaxclientVersionV1Response**](../Model/GlobalEzmaxclientVersionV1Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
