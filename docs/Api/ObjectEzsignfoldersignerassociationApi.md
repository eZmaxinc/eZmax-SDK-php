# eZmaxAPI\ObjectEzsignfoldersignerassociationApi

All URIs are relative to https://prod.api.appcluster01.ca-central-1.ezmax.com/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**ezsignfoldersignerassociationCreateEmbeddedUrlV1()**](ObjectEzsignfoldersignerassociationApi.md#ezsignfoldersignerassociationCreateEmbeddedUrlV1) | **POST** /1/object/ezsignfoldersignerassociation/{pkiEzsignfoldersignerassociationID}/createEmbeddedUrl | Creates an Url to allow embedded signing |
| [**ezsignfoldersignerassociationCreateObjectV1()**](ObjectEzsignfoldersignerassociationApi.md#ezsignfoldersignerassociationCreateObjectV1) | **POST** /1/object/ezsignfoldersignerassociation | Create a new Ezsignfoldersignerassociation |
| [**ezsignfoldersignerassociationCreateObjectV2()**](ObjectEzsignfoldersignerassociationApi.md#ezsignfoldersignerassociationCreateObjectV2) | **POST** /2/object/ezsignfoldersignerassociation | Create a new Ezsignfoldersignerassociation |
| [**ezsignfoldersignerassociationDeleteObjectV1()**](ObjectEzsignfoldersignerassociationApi.md#ezsignfoldersignerassociationDeleteObjectV1) | **DELETE** /1/object/ezsignfoldersignerassociation/{pkiEzsignfoldersignerassociationID} | Delete an existing Ezsignfoldersignerassociation |
| [**ezsignfoldersignerassociationEditObjectV1()**](ObjectEzsignfoldersignerassociationApi.md#ezsignfoldersignerassociationEditObjectV1) | **PUT** /1/object/ezsignfoldersignerassociation/{pkiEzsignfoldersignerassociationID} | Edit an existing Ezsignfoldersignerassociation |
| [**ezsignfoldersignerassociationForceDisconnectV1()**](ObjectEzsignfoldersignerassociationApi.md#ezsignfoldersignerassociationForceDisconnectV1) | **POST** /1/object/ezsignfoldersignerassociation/{pkiEzsignfoldersignerassociationID}/forceDisconnect | Disconnects the Ezsignfoldersignerassociation |
| [**ezsignfoldersignerassociationGetInPersonLoginUrlV1()**](ObjectEzsignfoldersignerassociationApi.md#ezsignfoldersignerassociationGetInPersonLoginUrlV1) | **GET** /1/object/ezsignfoldersignerassociation/{pkiEzsignfoldersignerassociationID}/getInPersonLoginUrl | Retrieve a Login Url to allow In-Person signing |
| [**ezsignfoldersignerassociationGetObjectV1()**](ObjectEzsignfoldersignerassociationApi.md#ezsignfoldersignerassociationGetObjectV1) | **GET** /1/object/ezsignfoldersignerassociation/{pkiEzsignfoldersignerassociationID} | Retrieve an existing Ezsignfoldersignerassociation |
| [**ezsignfoldersignerassociationGetObjectV2()**](ObjectEzsignfoldersignerassociationApi.md#ezsignfoldersignerassociationGetObjectV2) | **GET** /2/object/ezsignfoldersignerassociation/{pkiEzsignfoldersignerassociationID} | Retrieve an existing Ezsignfoldersignerassociation |
| [**ezsignfoldersignerassociationPatchObjectV1()**](ObjectEzsignfoldersignerassociationApi.md#ezsignfoldersignerassociationPatchObjectV1) | **PATCH** /1/object/ezsignfoldersignerassociation/{pkiEzsignfoldersignerassociationID} | Patch an existing Ezsignfoldersignerassociation |


## `ezsignfoldersignerassociationCreateEmbeddedUrlV1()`

```php
ezsignfoldersignerassociationCreateEmbeddedUrlV1($pkiEzsignfoldersignerassociationID, $ezsignfoldersignerassociationCreateEmbeddedUrlV1Request): \eZmaxAPI\Model\EzsignfoldersignerassociationCreateEmbeddedUrlV1Response
```

Creates an Url to allow embedded signing

This endpoint creates an Url that can be used in a browser or embedded in an I-Frame to allow signing.  The signer Login type must be configured as Embedded.  There will be a list to retrieve informations after the signing happens in the embedded version. To do so, there is a list of parameter to add to your sReturnUrl.  In example: https://www.example.com/sReturl?sParameter1&sParameter2. The sParameter1 et sParameter2 will be replace when we will redirect on the url.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsignfoldersignerassociationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzsignfoldersignerassociationID = 56; // int
$ezsignfoldersignerassociationCreateEmbeddedUrlV1Request = new \eZmaxAPI\Model\EzsignfoldersignerassociationCreateEmbeddedUrlV1Request(); // \eZmaxAPI\Model\EzsignfoldersignerassociationCreateEmbeddedUrlV1Request

try {
    $result = $apiInstance->ezsignfoldersignerassociationCreateEmbeddedUrlV1($pkiEzsignfoldersignerassociationID, $ezsignfoldersignerassociationCreateEmbeddedUrlV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsignfoldersignerassociationApi->ezsignfoldersignerassociationCreateEmbeddedUrlV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiEzsignfoldersignerassociationID** | **int**|  | |
| **ezsignfoldersignerassociationCreateEmbeddedUrlV1Request** | [**\eZmaxAPI\Model\EzsignfoldersignerassociationCreateEmbeddedUrlV1Request**](../Model/EzsignfoldersignerassociationCreateEmbeddedUrlV1Request.md)|  | |

### Return type

[**\eZmaxAPI\Model\EzsignfoldersignerassociationCreateEmbeddedUrlV1Response**](../Model/EzsignfoldersignerassociationCreateEmbeddedUrlV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

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


$apiInstance = new eZmaxAPI\Api\ObjectEzsignfoldersignerassociationApi(
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
    echo 'Exception when calling ObjectEzsignfoldersignerassociationApi->ezsignfoldersignerassociationCreateObjectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ezsignfoldersignerassociationCreateObjectV1Request** | [**\eZmaxAPI\Model\EzsignfoldersignerassociationCreateObjectV1Request[]**](../Model/EzsignfoldersignerassociationCreateObjectV1Request.md)|  | |

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

## `ezsignfoldersignerassociationCreateObjectV2()`

```php
ezsignfoldersignerassociationCreateObjectV2($ezsignfoldersignerassociationCreateObjectV2Request): \eZmaxAPI\Model\EzsignfoldersignerassociationCreateObjectV2Response
```

Create a new Ezsignfoldersignerassociation

The endpoint allows to create one or many elements at once.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsignfoldersignerassociationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ezsignfoldersignerassociationCreateObjectV2Request = new \eZmaxAPI\Model\EzsignfoldersignerassociationCreateObjectV2Request(); // \eZmaxAPI\Model\EzsignfoldersignerassociationCreateObjectV2Request

try {
    $result = $apiInstance->ezsignfoldersignerassociationCreateObjectV2($ezsignfoldersignerassociationCreateObjectV2Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsignfoldersignerassociationApi->ezsignfoldersignerassociationCreateObjectV2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ezsignfoldersignerassociationCreateObjectV2Request** | [**\eZmaxAPI\Model\EzsignfoldersignerassociationCreateObjectV2Request**](../Model/EzsignfoldersignerassociationCreateObjectV2Request.md)|  | |

### Return type

[**\eZmaxAPI\Model\EzsignfoldersignerassociationCreateObjectV2Response**](../Model/EzsignfoldersignerassociationCreateObjectV2Response.md)

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


$apiInstance = new eZmaxAPI\Api\ObjectEzsignfoldersignerassociationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzsignfoldersignerassociationID = 56; // int

try {
    $result = $apiInstance->ezsignfoldersignerassociationDeleteObjectV1($pkiEzsignfoldersignerassociationID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsignfoldersignerassociationApi->ezsignfoldersignerassociationDeleteObjectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiEzsignfoldersignerassociationID** | **int**|  | |

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

Edit an existing Ezsignfoldersignerassociation



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsignfoldersignerassociationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzsignfoldersignerassociationID = 56; // int
$ezsignfoldersignerassociationEditObjectV1Request = new \eZmaxAPI\Model\EzsignfoldersignerassociationEditObjectV1Request(); // \eZmaxAPI\Model\EzsignfoldersignerassociationEditObjectV1Request

try {
    $result = $apiInstance->ezsignfoldersignerassociationEditObjectV1($pkiEzsignfoldersignerassociationID, $ezsignfoldersignerassociationEditObjectV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsignfoldersignerassociationApi->ezsignfoldersignerassociationEditObjectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiEzsignfoldersignerassociationID** | **int**|  | |
| **ezsignfoldersignerassociationEditObjectV1Request** | [**\eZmaxAPI\Model\EzsignfoldersignerassociationEditObjectV1Request**](../Model/EzsignfoldersignerassociationEditObjectV1Request.md)|  | |

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

## `ezsignfoldersignerassociationForceDisconnectV1()`

```php
ezsignfoldersignerassociationForceDisconnectV1($pkiEzsignfoldersignerassociationID, $body): \eZmaxAPI\Model\EzsignfoldersignerassociationForceDisconnectV1Response
```

Disconnects the Ezsignfoldersignerassociation



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsignfoldersignerassociationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzsignfoldersignerassociationID = 56; // int
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->ezsignfoldersignerassociationForceDisconnectV1($pkiEzsignfoldersignerassociationID, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsignfoldersignerassociationApi->ezsignfoldersignerassociationForceDisconnectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiEzsignfoldersignerassociationID** | **int**|  | |
| **body** | **object**|  | |

### Return type

[**\eZmaxAPI\Model\EzsignfoldersignerassociationForceDisconnectV1Response**](../Model/EzsignfoldersignerassociationForceDisconnectV1Response.md)

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


$apiInstance = new eZmaxAPI\Api\ObjectEzsignfoldersignerassociationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzsignfoldersignerassociationID = 56; // int

try {
    $result = $apiInstance->ezsignfoldersignerassociationGetInPersonLoginUrlV1($pkiEzsignfoldersignerassociationID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsignfoldersignerassociationApi->ezsignfoldersignerassociationGetInPersonLoginUrlV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiEzsignfoldersignerassociationID** | **int**|  | |

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


$apiInstance = new eZmaxAPI\Api\ObjectEzsignfoldersignerassociationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzsignfoldersignerassociationID = 56; // int

try {
    $result = $apiInstance->ezsignfoldersignerassociationGetObjectV1($pkiEzsignfoldersignerassociationID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsignfoldersignerassociationApi->ezsignfoldersignerassociationGetObjectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiEzsignfoldersignerassociationID** | **int**|  | |

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

## `ezsignfoldersignerassociationGetObjectV2()`

```php
ezsignfoldersignerassociationGetObjectV2($pkiEzsignfoldersignerassociationID): \eZmaxAPI\Model\EzsignfoldersignerassociationGetObjectV2Response
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


$apiInstance = new eZmaxAPI\Api\ObjectEzsignfoldersignerassociationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzsignfoldersignerassociationID = 56; // int

try {
    $result = $apiInstance->ezsignfoldersignerassociationGetObjectV2($pkiEzsignfoldersignerassociationID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsignfoldersignerassociationApi->ezsignfoldersignerassociationGetObjectV2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiEzsignfoldersignerassociationID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\EzsignfoldersignerassociationGetObjectV2Response**](../Model/EzsignfoldersignerassociationGetObjectV2Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ezsignfoldersignerassociationPatchObjectV1()`

```php
ezsignfoldersignerassociationPatchObjectV1($pkiEzsignfoldersignerassociationID, $ezsignfoldersignerassociationPatchObjectV1Request): \eZmaxAPI\Model\EzsignfoldersignerassociationPatchObjectV1Response
```

Patch an existing Ezsignfoldersignerassociation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectEzsignfoldersignerassociationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiEzsignfoldersignerassociationID = 56; // int
$ezsignfoldersignerassociationPatchObjectV1Request = new \eZmaxAPI\Model\EzsignfoldersignerassociationPatchObjectV1Request(); // \eZmaxAPI\Model\EzsignfoldersignerassociationPatchObjectV1Request

try {
    $result = $apiInstance->ezsignfoldersignerassociationPatchObjectV1($pkiEzsignfoldersignerassociationID, $ezsignfoldersignerassociationPatchObjectV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectEzsignfoldersignerassociationApi->ezsignfoldersignerassociationPatchObjectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiEzsignfoldersignerassociationID** | **int**|  | |
| **ezsignfoldersignerassociationPatchObjectV1Request** | [**\eZmaxAPI\Model\EzsignfoldersignerassociationPatchObjectV1Request**](../Model/EzsignfoldersignerassociationPatchObjectV1Request.md)|  | |

### Return type

[**\eZmaxAPI\Model\EzsignfoldersignerassociationPatchObjectV1Response**](../Model/EzsignfoldersignerassociationPatchObjectV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
