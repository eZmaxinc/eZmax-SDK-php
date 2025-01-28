# eZmaxAPI\ObjectEzsignuserApi

All URIs are relative to https://prod.api.appcluster01.ca-central-1.ezmax.com/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**ezsignuserEditObjectV1()**](ObjectEzsignuserApi.md#ezsignuserEditObjectV1) | **PUT** /1/object/ezsignuser/{pkiEzsignuserID} | Edit an existing Ezsignuser |
| [**ezsignuserGetObjectV2()**](ObjectEzsignuserApi.md#ezsignuserGetObjectV2) | **GET** /2/object/ezsignuser/{pkiEzsignuserID} | Retrieve an existing Ezsignuser |


## `ezsignuserEditObjectV1()`

```php
ezsignuserEditObjectV1($pkiEzsignuserID, $ezsignuserEditObjectV1Request): \eZmaxAPI\Model\EzsignuserEditObjectV1Response
```

Edit an existing Ezsignuser



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsignuserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzsignuserID = 56; // int | The unique ID of the Ezsignuser
$ezsignuserEditObjectV1Request = new \eZmaxAPI\Model\EzsignuserEditObjectV1Request(); // \eZmaxAPI\Model\EzsignuserEditObjectV1Request

try {
    $result = $apiInstance->ezsignuserEditObjectV1($pkiEzsignuserID, $ezsignuserEditObjectV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsignuserApi->ezsignuserEditObjectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiEzsignuserID** | **int**| The unique ID of the Ezsignuser | |
| **ezsignuserEditObjectV1Request** | [**\eZmaxAPI\Model\EzsignuserEditObjectV1Request**](../Model/EzsignuserEditObjectV1Request.md)|  | |

### Return type

[**\eZmaxAPI\Model\EzsignuserEditObjectV1Response**](../Model/EzsignuserEditObjectV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezsignuserGetObjectV2()`

```php
ezsignuserGetObjectV2($pkiEzsignuserID): \eZmaxAPI\Model\EzsignuserGetObjectV2Response
```

Retrieve an existing Ezsignuser



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsignuserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzsignuserID = 56; // int | The unique ID of the Ezsignuser

try {
    $result = $apiInstance->ezsignuserGetObjectV2($pkiEzsignuserID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsignuserApi->ezsignuserGetObjectV2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiEzsignuserID** | **int**| The unique ID of the Ezsignuser | |

### Return type

[**\eZmaxAPI\Model\EzsignuserGetObjectV2Response**](../Model/EzsignuserGetObjectV2Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
