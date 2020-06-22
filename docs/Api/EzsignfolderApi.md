# eZmaxAPI\EzsignfolderApi

All URIs are relative to *https://prod.api.appcluster01.ca-central-1.ezmax.com/rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**ezsignfolderCreateObjectV1**](EzsignfolderApi.md#ezsignfolderCreateObjectV1) | **POST** /1/object/ezsignfolder | Create a new Ezsignfolder
[**ezsignfolderDeleteObjectV1**](EzsignfolderApi.md#ezsignfolderDeleteObjectV1) | **DELETE** /1/object/ezsignfolder/{pkiEzsignfolderID} | Delete an existing Ezsignfolder
[**ezsignfolderEditObjectV1**](EzsignfolderApi.md#ezsignfolderEditObjectV1) | **PUT** /1/object/ezsignfolder/{pkiEzsignfolderID} | Modify an existing Ezsignfolder
[**ezsignfolderGetObjectGetChildrenV1**](EzsignfolderApi.md#ezsignfolderGetObjectGetChildrenV1) | **GET** /1/object/ezsignfolder/{pkiEzsignfolderID}/getChildren | Retrieve an existing Ezsignfolder&#39;s children IDs
[**ezsignfolderGetObjectV1**](EzsignfolderApi.md#ezsignfolderGetObjectV1) | **GET** /1/object/ezsignfolder/{pkiEzsignfolderID} | Retrieve an existing Ezsignfolder



## ezsignfolderCreateObjectV1

> \eZmaxAPI\Model\EzsignfolderCreateObjectV1Response ezsignfolderCreateObjectV1($ezsignfolderCreateObjectV1Request)

Create a new Ezsignfolder

The endpoint allows to create one or many elements at once.  The array can contain simple (Just the object) or compound (The object and its child) objects.  Creating compound elements allows to reduce the multiple requests to create all child objects.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\EzsignfolderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ezsignfolderCreateObjectV1Request = array(new \eZmaxAPI\Model\EzsignfolderCreateObjectV1Request()); // \eZmaxAPI\Model\EzsignfolderCreateObjectV1Request[] | 

try {
    $result = $apiInstance->ezsignfolderCreateObjectV1($ezsignfolderCreateObjectV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EzsignfolderApi->ezsignfolderCreateObjectV1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ezsignfolderCreateObjectV1Request** | [**\eZmaxAPI\Model\EzsignfolderCreateObjectV1Request[]**](../Model/EzsignfolderCreateObjectV1Request.md)|  |

### Return type

[**\eZmaxAPI\Model\EzsignfolderCreateObjectV1Response**](../Model/EzsignfolderCreateObjectV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## ezsignfolderDeleteObjectV1

> \eZmaxAPI\Model\EzsignfolderDeleteObjectV1Response ezsignfolderDeleteObjectV1($pkiEzsignfolderID)

Delete an existing Ezsignfolder

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\EzsignfolderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzsignfolderID = 56; // int | The unique ID of the Ezsignfolder

try {
    $result = $apiInstance->ezsignfolderDeleteObjectV1($pkiEzsignfolderID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EzsignfolderApi->ezsignfolderDeleteObjectV1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pkiEzsignfolderID** | **int**| The unique ID of the Ezsignfolder |

### Return type

[**\eZmaxAPI\Model\EzsignfolderDeleteObjectV1Response**](../Model/EzsignfolderDeleteObjectV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## ezsignfolderEditObjectV1

> \eZmaxAPI\Model\EzsignfolderEditObjectV1Response ezsignfolderEditObjectV1($pkiEzsignfolderID, $ezsignfolderEditObjectV1Request)

Modify an existing Ezsignfolder

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\EzsignfolderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzsignfolderID = 56; // int | The unique ID of the Ezsignfolder
$ezsignfolderEditObjectV1Request = new \eZmaxAPI\Model\EzsignfolderEditObjectV1Request(); // \eZmaxAPI\Model\EzsignfolderEditObjectV1Request | 

try {
    $result = $apiInstance->ezsignfolderEditObjectV1($pkiEzsignfolderID, $ezsignfolderEditObjectV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EzsignfolderApi->ezsignfolderEditObjectV1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pkiEzsignfolderID** | **int**| The unique ID of the Ezsignfolder |
 **ezsignfolderEditObjectV1Request** | [**\eZmaxAPI\Model\EzsignfolderEditObjectV1Request**](../Model/EzsignfolderEditObjectV1Request.md)|  |

### Return type

[**\eZmaxAPI\Model\EzsignfolderEditObjectV1Response**](../Model/EzsignfolderEditObjectV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## ezsignfolderGetObjectGetChildrenV1

> ezsignfolderGetObjectGetChildrenV1($pkiEzsignfolderID)

Retrieve an existing Ezsignfolder's children IDs

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\EzsignfolderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzsignfolderID = 56; // int | The unique ID of the Ezsignfolder

try {
    $apiInstance->ezsignfolderGetObjectGetChildrenV1($pkiEzsignfolderID);
} catch (Exception $e) {
    echo 'Exception when calling EzsignfolderApi->ezsignfolderGetObjectGetChildrenV1: ', $e->getMessage(), PHP_EOL;
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


## ezsignfolderGetObjectV1

> \eZmaxAPI\Model\EzsignfolderGetObjectV1Response ezsignfolderGetObjectV1($pkiEzsignfolderID)

Retrieve an existing Ezsignfolder

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\EzsignfolderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzsignfolderID = 56; // int | The unique ID of the Ezsignfolder

try {
    $result = $apiInstance->ezsignfolderGetObjectV1($pkiEzsignfolderID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EzsignfolderApi->ezsignfolderGetObjectV1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pkiEzsignfolderID** | **int**| The unique ID of the Ezsignfolder |

### Return type

[**\eZmaxAPI\Model\EzsignfolderGetObjectV1Response**](../Model/EzsignfolderGetObjectV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

