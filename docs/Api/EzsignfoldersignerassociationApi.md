# eZmaxAPI\EzsignfoldersignerassociationApi

All URIs are relative to https://prod.api.appcluster01.ca-central-1.ezmax.com/rest.

Method | HTTP request | Description
------------- | ------------- | -------------
[**ezsignfoldersignerassociationCreateObjectV1()**](EzsignfoldersignerassociationApi.md#ezsignfoldersignerassociationCreateObjectV1) | **POST** /1/object/ezsignfoldersignerassociation | Create a new Ezsignfoldersignerassociation
[**ezsignfoldersignerassociationDeleteObjectV1()**](EzsignfoldersignerassociationApi.md#ezsignfoldersignerassociationDeleteObjectV1) | **DELETE** /1/object/ezsignfoldersignerassociation/{pkiEzsignfoldersignerassociationID} | Delete an existing Ezsignfoldersignerassociation
[**ezsignfoldersignerassociationEditObjectV1()**](EzsignfoldersignerassociationApi.md#ezsignfoldersignerassociationEditObjectV1) | **PUT** /1/object/ezsignfoldersignerassociation/{pkiEzsignfoldersignerassociationID} | Modify an existing Ezsignfoldersignerassociation
[**ezsignfoldersignerassociationGetInPersonLoginUrlV1()**](EzsignfoldersignerassociationApi.md#ezsignfoldersignerassociationGetInPersonLoginUrlV1) | **GET** /1/object/ezsignfoldersignerassociation/{pkiEzsignfoldersignerassociationID}/getInPersonLoginUrl | Retrieve a Login Url to allow In-Person signing
[**ezsignfoldersignerassociationGetObjectGetChildrenV1()**](EzsignfoldersignerassociationApi.md#ezsignfoldersignerassociationGetObjectGetChildrenV1) | **GET** /1/object/ezsignfoldersignerassociation/{pkiEzsignfoldersignerassociationID}/getChildren | Retrieve an existing Ezsignfoldersignerassociation&#39;s children IDs
[**ezsignfoldersignerassociationGetObjectV1()**](EzsignfoldersignerassociationApi.md#ezsignfoldersignerassociationGetObjectV1) | **GET** /1/object/ezsignfoldersignerassociation/{pkiEzsignfoldersignerassociationID} | Retrieve an existing Ezsignfoldersignerassociation


## `ezsignfoldersignerassociationCreateObjectV1()`

```php
ezsignfoldersignerassociationCreateObjectV1($ezsignfoldersignerassociationCreateObjectV1Request): \eZmaxAPI\Model\EzsignfoldersignerassociationCreateObjectV1Response
```

Create a new Ezsignfoldersignerassociation

The endpoint allows to create one or many elements at once.  The array can contain simple (Just the object) or compound (The object and its child) objects.  Creating compound elements allows to reduce the multiple requests to create all child objects.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\EzsignfoldersignerassociationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ezsignfoldersignerassociationCreateObjectV1Request = array(new \eZmaxAPI\Model\EzsignfoldersignerassociationCreateObjectV1Request()); // \eZmaxAPI\Model\EzsignfoldersignerassociationCreateObjectV1Request[]

try {
    $result = $apiInstance->ezsignfoldersignerassociationCreateObjectV1($ezsignfoldersignerassociationCreateObjectV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EzsignfoldersignerassociationApi->ezsignfoldersignerassociationCreateObjectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ezsignfoldersignerassociationCreateObjectV1Request** | [**\eZmaxAPI\Model\EzsignfoldersignerassociationCreateObjectV1Request[]**](../Model/EzsignfoldersignerassociationCreateObjectV1Request.md)|  |

### Return type

[**\eZmaxAPI\Model\EzsignfoldersignerassociationCreateObjectV1Response**](../Model/EzsignfoldersignerassociationCreateObjectV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezsignfoldersignerassociationDeleteObjectV1()`

```php
ezsignfoldersignerassociationDeleteObjectV1($pkiEzsignfoldersignerassociationID): \eZmaxAPI\Model\EzsignfoldersignerassociationDeleteObjectV1Response
```

Delete an existing Ezsignfoldersignerassociation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\EzsignfoldersignerassociationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzsignfoldersignerassociationID = 56; // int | The unique ID of the Ezsignfoldersignerassociation

try {
    $result = $apiInstance->ezsignfoldersignerassociationDeleteObjectV1($pkiEzsignfoldersignerassociationID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EzsignfoldersignerassociationApi->ezsignfoldersignerassociationDeleteObjectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pkiEzsignfoldersignerassociationID** | **int**| The unique ID of the Ezsignfoldersignerassociation |

### Return type

[**\eZmaxAPI\Model\EzsignfoldersignerassociationDeleteObjectV1Response**](../Model/EzsignfoldersignerassociationDeleteObjectV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezsignfoldersignerassociationEditObjectV1()`

```php
ezsignfoldersignerassociationEditObjectV1($pkiEzsignfoldersignerassociationID, $ezsignfoldersignerassociationEditObjectV1Request): \eZmaxAPI\Model\EzsignfoldersignerassociationEditObjectV1Response
```

Modify an existing Ezsignfoldersignerassociation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\EzsignfoldersignerassociationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzsignfoldersignerassociationID = 56; // int | The unique ID of the Ezsignfoldersignerassociation
$ezsignfoldersignerassociationEditObjectV1Request = new \eZmaxAPI\Model\EzsignfoldersignerassociationEditObjectV1Request(); // \eZmaxAPI\Model\EzsignfoldersignerassociationEditObjectV1Request

try {
    $result = $apiInstance->ezsignfoldersignerassociationEditObjectV1($pkiEzsignfoldersignerassociationID, $ezsignfoldersignerassociationEditObjectV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EzsignfoldersignerassociationApi->ezsignfoldersignerassociationEditObjectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pkiEzsignfoldersignerassociationID** | **int**| The unique ID of the Ezsignfoldersignerassociation |
 **ezsignfoldersignerassociationEditObjectV1Request** | [**\eZmaxAPI\Model\EzsignfoldersignerassociationEditObjectV1Request**](../Model/EzsignfoldersignerassociationEditObjectV1Request.md)|  |

### Return type

[**\eZmaxAPI\Model\EzsignfoldersignerassociationEditObjectV1Response**](../Model/EzsignfoldersignerassociationEditObjectV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezsignfoldersignerassociationGetInPersonLoginUrlV1()`

```php
ezsignfoldersignerassociationGetInPersonLoginUrlV1($pkiEzsignfoldersignerassociationID): \eZmaxAPI\Model\EzsignfoldersignerassociationGetInPersonLoginUrlV1Response
```

Retrieve a Login Url to allow In-Person signing

This endpoint returns a Login Url that can be used in a browser or embedded in an I-Frame to allow in person signing.  The signer Login type must be configured as In-Person.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\EzsignfoldersignerassociationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzsignfoldersignerassociationID = 56; // int | The unique ID of the Ezsignfoldersignerassociation

try {
    $result = $apiInstance->ezsignfoldersignerassociationGetInPersonLoginUrlV1($pkiEzsignfoldersignerassociationID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EzsignfoldersignerassociationApi->ezsignfoldersignerassociationGetInPersonLoginUrlV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pkiEzsignfoldersignerassociationID** | **int**| The unique ID of the Ezsignfoldersignerassociation |

### Return type

[**\eZmaxAPI\Model\EzsignfoldersignerassociationGetInPersonLoginUrlV1Response**](../Model/EzsignfoldersignerassociationGetInPersonLoginUrlV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezsignfoldersignerassociationGetObjectGetChildrenV1()`

```php
ezsignfoldersignerassociationGetObjectGetChildrenV1($pkiEzsignfoldersignerassociationID)
```

Retrieve an existing Ezsignfoldersignerassociation's children IDs

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\EzsignfoldersignerassociationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzsignfoldersignerassociationID = 56; // int | The unique ID of the Ezsignfoldersignerassociation

try {
    $apiInstance->ezsignfoldersignerassociationGetObjectGetChildrenV1($pkiEzsignfoldersignerassociationID);
} catch (Exception $e) {
    echo 'Exception when calling EzsignfoldersignerassociationApi->ezsignfoldersignerassociationGetObjectGetChildrenV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pkiEzsignfoldersignerassociationID** | **int**| The unique ID of the Ezsignfoldersignerassociation |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezsignfoldersignerassociationGetObjectV1()`

```php
ezsignfoldersignerassociationGetObjectV1($pkiEzsignfoldersignerassociationID): \eZmaxAPI\Model\EzsignfoldersignerassociationGetObjectV1Response
```

Retrieve an existing Ezsignfoldersignerassociation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\EzsignfoldersignerassociationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzsignfoldersignerassociationID = 56; // int | The unique ID of the Ezsignfoldersignerassociation

try {
    $result = $apiInstance->ezsignfoldersignerassociationGetObjectV1($pkiEzsignfoldersignerassociationID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EzsignfoldersignerassociationApi->ezsignfoldersignerassociationGetObjectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pkiEzsignfoldersignerassociationID** | **int**| The unique ID of the Ezsignfoldersignerassociation |

### Return type

[**\eZmaxAPI\Model\EzsignfoldersignerassociationGetObjectV1Response**](../Model/EzsignfoldersignerassociationGetObjectV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
