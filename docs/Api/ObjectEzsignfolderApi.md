# eZmaxAPI\Client\ObjectEzsignfolderApi

All URIs are relative to *https://prod.api.appcluster01.ca-central-1.ezmax.com/rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**objectEzsignfolderCreateObjectV1**](ObjectEzsignfolderApi.md#objectEzsignfolderCreateObjectV1) | **POST** /1/object/ezsignfolder | Create a new Ezsignfolder
[**objectEzsignfolderDeleteObjectV1**](ObjectEzsignfolderApi.md#objectEzsignfolderDeleteObjectV1) | **DELETE** /1/object/ezsignfolder/{pkiEzsignfolderID} | Delete an existing Ezsignfolder
[**objectEzsignfolderEditObjectV1**](ObjectEzsignfolderApi.md#objectEzsignfolderEditObjectV1) | **PUT** /1/object/ezsignfolder/{pkiEzsignfolderID} | Modify an existing Ezsignfolder
[**objectEzsignfolderGetObjectGetChildrenV1**](ObjectEzsignfolderApi.md#objectEzsignfolderGetObjectGetChildrenV1) | **GET** /1/object/ezsignfolder/{pkiEzsignfolderID}/getChildren | Retrieve an existing Ezsignfolder&#39;s children IDs
[**objectEzsignfolderGetObjectV1**](ObjectEzsignfolderApi.md#objectEzsignfolderGetObjectV1) | **GET** /1/object/ezsignfolder/{pkiEzsignfolderID} | Retrieve an existing Ezsignfolder



## objectEzsignfolderCreateObjectV1

> \eZmaxAPI\Client\Model\ObjectEzsignfolderCreateObjectV1Response objectEzsignfolderCreateObjectV1($objectEzsignfolderCreateObjectV1Request)

Create a new Ezsignfolder

The endpoint allows to create one or many elements at once.  The array can contain simple (Just the object) or compound (The object and its child) objects.  Creating compound elements allows to reduce the multiple requests to create all child objects.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Client\Api\ObjectEzsignfolderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$objectEzsignfolderCreateObjectV1Request = array(new \eZmaxAPI\Client\Model\ObjectEzsignfolderCreateObjectV1Request()); // \eZmaxAPI\Client\Model\ObjectEzsignfolderCreateObjectV1Request[] | 

try {
    $result = $apiInstance->objectEzsignfolderCreateObjectV1($objectEzsignfolderCreateObjectV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsignfolderApi->objectEzsignfolderCreateObjectV1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **objectEzsignfolderCreateObjectV1Request** | [**\eZmaxAPI\Client\Model\ObjectEzsignfolderCreateObjectV1Request[]**](../Model/ObjectEzsignfolderCreateObjectV1Request.md)|  |

### Return type

[**\eZmaxAPI\Client\Model\ObjectEzsignfolderCreateObjectV1Response**](../Model/ObjectEzsignfolderCreateObjectV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## objectEzsignfolderDeleteObjectV1

> \eZmaxAPI\Client\Model\ObjectEzsignfolderDeleteObjectV1Response objectEzsignfolderDeleteObjectV1($pkiEzsignfolderID)

Delete an existing Ezsignfolder

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Client\Api\ObjectEzsignfolderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzsignfolderID = 56; // int | The unique ID of the Ezsignfolder

try {
    $result = $apiInstance->objectEzsignfolderDeleteObjectV1($pkiEzsignfolderID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsignfolderApi->objectEzsignfolderDeleteObjectV1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pkiEzsignfolderID** | **int**| The unique ID of the Ezsignfolder |

### Return type

[**\eZmaxAPI\Client\Model\ObjectEzsignfolderDeleteObjectV1Response**](../Model/ObjectEzsignfolderDeleteObjectV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## objectEzsignfolderEditObjectV1

> \eZmaxAPI\Client\Model\ObjectEzsignfolderEditObjectV1Response objectEzsignfolderEditObjectV1($pkiEzsignfolderID, $objectEzsignfolderEditObjectV1Request)

Modify an existing Ezsignfolder

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Client\Api\ObjectEzsignfolderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzsignfolderID = 56; // int | The unique ID of the Ezsignfolder
$objectEzsignfolderEditObjectV1Request = new \eZmaxAPI\Client\Model\ObjectEzsignfolderEditObjectV1Request(); // \eZmaxAPI\Client\Model\ObjectEzsignfolderEditObjectV1Request | 

try {
    $result = $apiInstance->objectEzsignfolderEditObjectV1($pkiEzsignfolderID, $objectEzsignfolderEditObjectV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsignfolderApi->objectEzsignfolderEditObjectV1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pkiEzsignfolderID** | **int**| The unique ID of the Ezsignfolder |
 **objectEzsignfolderEditObjectV1Request** | [**\eZmaxAPI\Client\Model\ObjectEzsignfolderEditObjectV1Request**](../Model/ObjectEzsignfolderEditObjectV1Request.md)|  |

### Return type

[**\eZmaxAPI\Client\Model\ObjectEzsignfolderEditObjectV1Response**](../Model/ObjectEzsignfolderEditObjectV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## objectEzsignfolderGetObjectGetChildrenV1

> objectEzsignfolderGetObjectGetChildrenV1($pkiEzsignfolderID)

Retrieve an existing Ezsignfolder's children IDs

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Client\Api\ObjectEzsignfolderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzsignfolderID = 56; // int | The unique ID of the Ezsignfolder

try {
    $apiInstance->objectEzsignfolderGetObjectGetChildrenV1($pkiEzsignfolderID);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsignfolderApi->objectEzsignfolderGetObjectGetChildrenV1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pkiEzsignfolderID** | **int**| The unique ID of the Ezsignfolder |

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


## objectEzsignfolderGetObjectV1

> \eZmaxAPI\Client\Model\ObjectEzsignfolderGetObjectV1Response objectEzsignfolderGetObjectV1($pkiEzsignfolderID)

Retrieve an existing Ezsignfolder

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Client\Api\ObjectEzsignfolderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzsignfolderID = 56; // int | The unique ID of the Ezsignfolder

try {
    $result = $apiInstance->objectEzsignfolderGetObjectV1($pkiEzsignfolderID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsignfolderApi->objectEzsignfolderGetObjectV1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pkiEzsignfolderID** | **int**| The unique ID of the Ezsignfolder |

### Return type

[**\eZmaxAPI\Client\Model\ObjectEzsignfolderGetObjectV1Response**](../Model/ObjectEzsignfolderGetObjectV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

