# eZmaxAPI\EzsigndocumentApi

All URIs are relative to *https://prod.api.appcluster01.ca-central-1.ezmax.com/rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**ezsigndocumentCreateObjectV1**](EzsigndocumentApi.md#ezsigndocumentCreateObjectV1) | **POST** /1/object/ezsigndocument | Create a new Ezsigndocument
[**ezsigndocumentDeleteObjectV1**](EzsigndocumentApi.md#ezsigndocumentDeleteObjectV1) | **DELETE** /1/object/ezsigndocument/{pkiEzsigndocumentID} | Delete an existing Ezsigndocument
[**ezsigndocumentEditObjectV1**](EzsigndocumentApi.md#ezsigndocumentEditObjectV1) | **PUT** /1/object/ezsigndocument/{pkiEzsigndocumentID} | Modify an existing Ezsigndocument
[**ezsigndocumentGetObjectGetChildrenV1**](EzsigndocumentApi.md#ezsigndocumentGetObjectGetChildrenV1) | **GET** /1/object/ezsigndocument/{pkiEzsigndocumentID}/getChildren | Retrieve an existing Ezsigndocument&#39;s children IDs
[**ezsigndocumentGetObjectV1**](EzsigndocumentApi.md#ezsigndocumentGetObjectV1) | **GET** /1/object/ezsigndocument/{pkiEzsigndocumentID} | Retrieve an existing Ezsigndocument



## ezsigndocumentCreateObjectV1

> \eZmaxAPI\Model\EzsigndocumentCreateObjectV1Response ezsigndocumentCreateObjectV1($ezsigndocumentCreateObjectV1Request)

Create a new Ezsigndocument

The endpoint allows to create one or many elements at once.  The array can contain simple (Just the object) or compound (The object and its child) objects.  Creating compound elements allows to reduce the multiple requests to create all child objects.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\EzsigndocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ezsigndocumentCreateObjectV1Request = array(new \eZmaxAPI\Model\EzsigndocumentCreateObjectV1Request()); // \eZmaxAPI\Model\EzsigndocumentCreateObjectV1Request[] | 

try {
    $result = $apiInstance->ezsigndocumentCreateObjectV1($ezsigndocumentCreateObjectV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EzsigndocumentApi->ezsigndocumentCreateObjectV1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ezsigndocumentCreateObjectV1Request** | [**\eZmaxAPI\Model\EzsigndocumentCreateObjectV1Request[]**](../Model/EzsigndocumentCreateObjectV1Request.md)|  |

### Return type

[**\eZmaxAPI\Model\EzsigndocumentCreateObjectV1Response**](../Model/EzsigndocumentCreateObjectV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## ezsigndocumentDeleteObjectV1

> \eZmaxAPI\Model\EzsigndocumentDeleteObjectV1Response ezsigndocumentDeleteObjectV1($pkiEzsigndocumentID)

Delete an existing Ezsigndocument

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\EzsigndocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzsigndocumentID = 56; // int | The unique ID of the Ezsigndocument

try {
    $result = $apiInstance->ezsigndocumentDeleteObjectV1($pkiEzsigndocumentID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EzsigndocumentApi->ezsigndocumentDeleteObjectV1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pkiEzsigndocumentID** | **int**| The unique ID of the Ezsigndocument |

### Return type

[**\eZmaxAPI\Model\EzsigndocumentDeleteObjectV1Response**](../Model/EzsigndocumentDeleteObjectV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## ezsigndocumentEditObjectV1

> \eZmaxAPI\Model\EzsigndocumentEditObjectV1Response ezsigndocumentEditObjectV1($pkiEzsigndocumentID, $ezsigndocumentEditObjectV1Request)

Modify an existing Ezsigndocument

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\EzsigndocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzsigndocumentID = 56; // int | The unique ID of the Ezsigndocument
$ezsigndocumentEditObjectV1Request = new \eZmaxAPI\Model\EzsigndocumentEditObjectV1Request(); // \eZmaxAPI\Model\EzsigndocumentEditObjectV1Request | 

try {
    $result = $apiInstance->ezsigndocumentEditObjectV1($pkiEzsigndocumentID, $ezsigndocumentEditObjectV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EzsigndocumentApi->ezsigndocumentEditObjectV1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pkiEzsigndocumentID** | **int**| The unique ID of the Ezsigndocument |
 **ezsigndocumentEditObjectV1Request** | [**\eZmaxAPI\Model\EzsigndocumentEditObjectV1Request**](../Model/EzsigndocumentEditObjectV1Request.md)|  |

### Return type

[**\eZmaxAPI\Model\EzsigndocumentEditObjectV1Response**](../Model/EzsigndocumentEditObjectV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## ezsigndocumentGetObjectGetChildrenV1

> ezsigndocumentGetObjectGetChildrenV1($pkiEzsigndocumentID)

Retrieve an existing Ezsigndocument's children IDs

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\EzsigndocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzsigndocumentID = 56; // int | The unique ID of the Ezsigndocument

try {
    $apiInstance->ezsigndocumentGetObjectGetChildrenV1($pkiEzsigndocumentID);
} catch (Exception $e) {
    echo 'Exception when calling EzsigndocumentApi->ezsigndocumentGetObjectGetChildrenV1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pkiEzsigndocumentID** | **int**| The unique ID of the Ezsigndocument |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## ezsigndocumentGetObjectV1

> \eZmaxAPI\Model\EzsigndocumentGetObjectV1Response ezsigndocumentGetObjectV1($pkiEzsigndocumentID)

Retrieve an existing Ezsigndocument

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\EzsigndocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzsigndocumentID = 56; // int | The unique ID of the Ezsigndocument

try {
    $result = $apiInstance->ezsigndocumentGetObjectV1($pkiEzsigndocumentID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EzsigndocumentApi->ezsigndocumentGetObjectV1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pkiEzsigndocumentID** | **int**| The unique ID of the Ezsigndocument |

### Return type

[**\eZmaxAPI\Model\EzsigndocumentGetObjectV1Response**](../Model/EzsigndocumentGetObjectV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

