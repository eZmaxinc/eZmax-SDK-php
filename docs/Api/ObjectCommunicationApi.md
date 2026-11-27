# eZmaxAPI\ObjectCommunicationApi



All URIs are relative to https://prod.api.appcluster01.ca-central-1.ezmax.com/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**communicationGetCommunicationBodyV1()**](ObjectCommunicationApi.md#communicationGetCommunicationBodyV1) | **GET** /1/object/communication/{pkiCommunicationID}/getCommunicationBody | Retrieve the communication body |
| [**communicationGetDocumenttypechecklistV1()**](ObjectCommunicationApi.md#communicationGetDocumenttypechecklistV1) | **GET** /1/object/communication/{pkiCommunicationID}/getDocumenttypechecklist | Retrieve Document type checklist |
| [**communicationSendV1()**](ObjectCommunicationApi.md#communicationSendV1) | **POST** /1/object/communication/send | Send a new Communication |
| [**communicationSyncDocumenttypechecklistV1()**](ObjectCommunicationApi.md#communicationSyncDocumenttypechecklistV1) | **POST** /1/object/communication/{pkiCommunicationID}/syncDocumenttypechecklist | Synchronize Document type checklist |


## `communicationGetCommunicationBodyV1()`

```php
communicationGetCommunicationBodyV1($pkiCommunicationID)
```

Retrieve the communication body

This endpoint returns the communication body.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectCommunicationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiCommunicationID = 56; // int

try {
    $apiInstance->communicationGetCommunicationBodyV1($pkiCommunicationID);
} catch (Exception $e) {
    echo 'Exception when calling ObjectCommunicationApi->communicationGetCommunicationBodyV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiCommunicationID** | **int**|  | |

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

## `communicationGetDocumenttypechecklistV1()`

```php
communicationGetDocumenttypechecklistV1($pkiCommunicationID): \eZmaxAPI\Model\CommunicationGetDocumenttypechecklistV1Response
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


$apiInstance = new eZmaxAPI\Api\ObjectCommunicationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiCommunicationID = 56; // int

try {
    $result = $apiInstance->communicationGetDocumenttypechecklistV1($pkiCommunicationID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectCommunicationApi->communicationGetDocumenttypechecklistV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiCommunicationID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\CommunicationGetDocumenttypechecklistV1Response**](../Model/CommunicationGetDocumenttypechecklistV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `communicationSendV1()`

```php
communicationSendV1($communicationSendV1Request): \eZmaxAPI\Model\CommunicationSendV1Response
```

Send a new Communication

The endpoint allows to send one or many elements at once.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectCommunicationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$communicationSendV1Request = new \eZmaxAPI\Model\CommunicationSendV1Request(); // \eZmaxAPI\Model\CommunicationSendV1Request

try {
    $result = $apiInstance->communicationSendV1($communicationSendV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectCommunicationApi->communicationSendV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **communicationSendV1Request** | [**\eZmaxAPI\Model\CommunicationSendV1Request**](../Model/CommunicationSendV1Request.md)|  | |

### Return type

[**\eZmaxAPI\Model\CommunicationSendV1Response**](../Model/CommunicationSendV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `communicationSyncDocumenttypechecklistV1()`

```php
communicationSyncDocumenttypechecklistV1($pkiCommunicationID, $body): \eZmaxAPI\Model\CommunicationSyncDocumenttypechecklistV1Response
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


$apiInstance = new eZmaxAPI\Api\ObjectCommunicationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiCommunicationID = 56; // int
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->communicationSyncDocumenttypechecklistV1($pkiCommunicationID, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectCommunicationApi->communicationSyncDocumenttypechecklistV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiCommunicationID** | **int**|  | |
| **body** | **object**|  | [optional] |

### Return type

[**\eZmaxAPI\Model\CommunicationSyncDocumenttypechecklistV1Response**](../Model/CommunicationSyncDocumenttypechecklistV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
