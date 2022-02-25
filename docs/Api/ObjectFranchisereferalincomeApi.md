# eZmaxAPI\ObjectFranchisereferalincomeApi

All URIs are relative to https://prod.api.appcluster01.ca-central-1.ezmax.com/rest.

Method | HTTP request | Description
------------- | ------------- | -------------
[**franchisereferalincomeCreateObjectV1()**](ObjectFranchisereferalincomeApi.md#franchisereferalincomeCreateObjectV1) | **POST** /1/object/franchisereferalincome | Create a new Franchisereferalincome
[**franchisereferalincomeCreateObjectV2()**](ObjectFranchisereferalincomeApi.md#franchisereferalincomeCreateObjectV2) | **POST** /2/object/franchisereferalincome | Create a new Franchisereferalincome


## `franchisereferalincomeCreateObjectV1()`

```php
franchisereferalincomeCreateObjectV1($franchisereferalincomeCreateObjectV1Request): \eZmaxAPI\Model\FranchisereferalincomeCreateObjectV1Response
```

Create a new Franchisereferalincome

The endpoint allows to create one or many elements at once.  The array can contain simple (Just the object) or compound (The object and its child) objects.  Creating compound elements allows to reduce the multiple requests to create all child objects.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectFranchisereferalincomeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$franchisereferalincomeCreateObjectV1Request = array(new \eZmaxAPI\Model\FranchisereferalincomeCreateObjectV1Request()); // \eZmaxAPI\Model\FranchisereferalincomeCreateObjectV1Request[]

try {
    $result = $apiInstance->franchisereferalincomeCreateObjectV1($franchisereferalincomeCreateObjectV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectFranchisereferalincomeApi->franchisereferalincomeCreateObjectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **franchisereferalincomeCreateObjectV1Request** | [**\eZmaxAPI\Model\FranchisereferalincomeCreateObjectV1Request[]**](../Model/FranchisereferalincomeCreateObjectV1Request.md)|  |

### Return type

[**\eZmaxAPI\Model\FranchisereferalincomeCreateObjectV1Response**](../Model/FranchisereferalincomeCreateObjectV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `franchisereferalincomeCreateObjectV2()`

```php
franchisereferalincomeCreateObjectV2($franchisereferalincomeCreateObjectV2Request): \eZmaxAPI\Model\FranchisereferalincomeCreateObjectV2Response
```

Create a new Franchisereferalincome

The endpoint allows to create one or many elements at once.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectFranchisereferalincomeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$franchisereferalincomeCreateObjectV2Request = new \eZmaxAPI\Model\FranchisereferalincomeCreateObjectV2Request(); // \eZmaxAPI\Model\FranchisereferalincomeCreateObjectV2Request

try {
    $result = $apiInstance->franchisereferalincomeCreateObjectV2($franchisereferalincomeCreateObjectV2Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectFranchisereferalincomeApi->franchisereferalincomeCreateObjectV2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **franchisereferalincomeCreateObjectV2Request** | [**\eZmaxAPI\Model\FranchisereferalincomeCreateObjectV2Request**](../Model/FranchisereferalincomeCreateObjectV2Request.md)|  |

### Return type

[**\eZmaxAPI\Model\FranchisereferalincomeCreateObjectV2Response**](../Model/FranchisereferalincomeCreateObjectV2Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
