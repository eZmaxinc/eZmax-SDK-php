# eZmaxAPI\ObjectWebhookApi

All URIs are relative to https://prod.api.appcluster01.ca-central-1.ezmax.com/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**webhookCreateObjectV2()**](ObjectWebhookApi.md#webhookCreateObjectV2) | **POST** /2/object/webhook | Create a new Webhook |
| [**webhookDeleteObjectV1()**](ObjectWebhookApi.md#webhookDeleteObjectV1) | **DELETE** /1/object/webhook/{pkiWebhookID} | Delete an existing Webhook |
| [**webhookEditObjectV1()**](ObjectWebhookApi.md#webhookEditObjectV1) | **PUT** /1/object/webhook/{pkiWebhookID} | Edit an existing Webhook |
| [**webhookGetHistoryV1()**](ObjectWebhookApi.md#webhookGetHistoryV1) | **GET** /1/object/webhook/{pkiWebhookID}/getHistory | Retrieve the logs for recent Webhook calls |
| [**webhookGetListV1()**](ObjectWebhookApi.md#webhookGetListV1) | **GET** /1/object/webhook/getList | Retrieve Webhook list |
| [**webhookGetObjectV2()**](ObjectWebhookApi.md#webhookGetObjectV2) | **GET** /2/object/webhook/{pkiWebhookID} | Retrieve an existing Webhook |
| [**webhookRegenerateApikeyV1()**](ObjectWebhookApi.md#webhookRegenerateApikeyV1) | **POST** /1/object/webhook/{pkiWebhookID}/regenerateApikey | Regenerate the Apikey |
| [**webhookTestV1()**](ObjectWebhookApi.md#webhookTestV1) | **POST** /1/object/webhook/{pkiWebhookID}/test | Test the Webhook by calling the Url |


## `webhookCreateObjectV2()`

```php
webhookCreateObjectV2($webhookCreateObjectV2Request): \eZmaxAPI\Model\WebhookCreateObjectV2Response
```

Create a new Webhook

The endpoint allows to create one or many elements at once.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectWebhookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhookCreateObjectV2Request = new \eZmaxAPI\Model\WebhookCreateObjectV2Request(); // \eZmaxAPI\Model\WebhookCreateObjectV2Request

try {
    $result = $apiInstance->webhookCreateObjectV2($webhookCreateObjectV2Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectWebhookApi->webhookCreateObjectV2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhookCreateObjectV2Request** | [**\eZmaxAPI\Model\WebhookCreateObjectV2Request**](../Model/WebhookCreateObjectV2Request.md)|  | |

### Return type

[**\eZmaxAPI\Model\WebhookCreateObjectV2Response**](../Model/WebhookCreateObjectV2Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `webhookDeleteObjectV1()`

```php
webhookDeleteObjectV1($pkiWebhookID): \eZmaxAPI\Model\WebhookDeleteObjectV1Response
```

Delete an existing Webhook



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectWebhookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiWebhookID = 56; // int

try {
    $result = $apiInstance->webhookDeleteObjectV1($pkiWebhookID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectWebhookApi->webhookDeleteObjectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiWebhookID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\WebhookDeleteObjectV1Response**](../Model/WebhookDeleteObjectV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `webhookEditObjectV1()`

```php
webhookEditObjectV1($pkiWebhookID, $webhookEditObjectV1Request): \eZmaxAPI\Model\WebhookEditObjectV1Response
```

Edit an existing Webhook



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectWebhookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiWebhookID = 56; // int
$webhookEditObjectV1Request = new \eZmaxAPI\Model\WebhookEditObjectV1Request(); // \eZmaxAPI\Model\WebhookEditObjectV1Request

try {
    $result = $apiInstance->webhookEditObjectV1($pkiWebhookID, $webhookEditObjectV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectWebhookApi->webhookEditObjectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiWebhookID** | **int**|  | |
| **webhookEditObjectV1Request** | [**\eZmaxAPI\Model\WebhookEditObjectV1Request**](../Model/WebhookEditObjectV1Request.md)|  | |

### Return type

[**\eZmaxAPI\Model\WebhookEditObjectV1Response**](../Model/WebhookEditObjectV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `webhookGetHistoryV1()`

```php
webhookGetHistoryV1($pkiWebhookID, $eWebhookHistoryinterval): \eZmaxAPI\Model\WebhookGetHistoryV1Response
```

Retrieve the logs for recent Webhook calls



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectWebhookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiWebhookID = 56; // int
$eWebhookHistoryinterval = 'eWebhookHistoryinterval_example'; // string | The number of days to return

try {
    $result = $apiInstance->webhookGetHistoryV1($pkiWebhookID, $eWebhookHistoryinterval);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectWebhookApi->webhookGetHistoryV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiWebhookID** | **int**|  | |
| **eWebhookHistoryinterval** | **string**| The number of days to return | |

### Return type

[**\eZmaxAPI\Model\WebhookGetHistoryV1Response**](../Model/WebhookGetHistoryV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `webhookGetListV1()`

```php
webhookGetListV1($eOrderBy, $iRowMax, $iRowOffset, $acceptLanguage, $sFilter): \eZmaxAPI\Model\WebhookGetListV1Response
```

Retrieve Webhook list

Enum values that can be filtered in query parameter *sFilter*:  | Variable | Valid values | |---|---| | eWebhookModule | Ezsign<br>Management | | eWebhookEzsignevent | DocumentCompleted<br>FolderCompleted | | eWebhookManagementevent | UserCreated |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectWebhookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$eOrderBy = 'eOrderBy_example'; // string | Specify how you want the results to be sorted
$iRowMax = 56; // int
$iRowOffset = 0; // int
$acceptLanguage = new \eZmaxAPI\Model\HeaderAcceptLanguage(); // HeaderAcceptLanguage
$sFilter = 'sFilter_example'; // string

try {
    $result = $apiInstance->webhookGetListV1($eOrderBy, $iRowMax, $iRowOffset, $acceptLanguage, $sFilter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectWebhookApi->webhookGetListV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **eOrderBy** | **string**| Specify how you want the results to be sorted | [optional] |
| **iRowMax** | **int**|  | [optional] |
| **iRowOffset** | **int**|  | [optional] [default to 0] |
| **acceptLanguage** | [**HeaderAcceptLanguage**](../Model/.md)|  | [optional] |
| **sFilter** | **string**|  | [optional] |

### Return type

[**\eZmaxAPI\Model\WebhookGetListV1Response**](../Model/WebhookGetListV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/vnd.openxmlformats-officedocument.spreadsheetml.sheet`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `webhookGetObjectV2()`

```php
webhookGetObjectV2($pkiWebhookID): \eZmaxAPI\Model\WebhookGetObjectV2Response
```

Retrieve an existing Webhook



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectWebhookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiWebhookID = 56; // int

try {
    $result = $apiInstance->webhookGetObjectV2($pkiWebhookID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectWebhookApi->webhookGetObjectV2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiWebhookID** | **int**|  | |

### Return type

[**\eZmaxAPI\Model\WebhookGetObjectV2Response**](../Model/WebhookGetObjectV2Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `webhookRegenerateApikeyV1()`

```php
webhookRegenerateApikeyV1($pkiWebhookID, $webhookRegenerateApikeyV1Request): \eZmaxAPI\Model\WebhookRegenerateApikeyV1Response
```

Regenerate the Apikey



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectWebhookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiWebhookID = 56; // int
$webhookRegenerateApikeyV1Request = new \eZmaxAPI\Model\WebhookRegenerateApikeyV1Request(); // \eZmaxAPI\Model\WebhookRegenerateApikeyV1Request

try {
    $result = $apiInstance->webhookRegenerateApikeyV1($pkiWebhookID, $webhookRegenerateApikeyV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectWebhookApi->webhookRegenerateApikeyV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiWebhookID** | **int**|  | |
| **webhookRegenerateApikeyV1Request** | [**\eZmaxAPI\Model\WebhookRegenerateApikeyV1Request**](../Model/WebhookRegenerateApikeyV1Request.md)|  | |

### Return type

[**\eZmaxAPI\Model\WebhookRegenerateApikeyV1Response**](../Model/WebhookRegenerateApikeyV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `webhookTestV1()`

```php
webhookTestV1($pkiWebhookID, $body): \eZmaxAPI\Model\WebhookTestV1Response
```

Test the Webhook by calling the Url



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectWebhookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pkiWebhookID = 56; // int
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->webhookTestV1($pkiWebhookID, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectWebhookApi->webhookTestV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pkiWebhookID** | **int**|  | |
| **body** | **object**|  | |

### Return type

[**\eZmaxAPI\Model\WebhookTestV1Response**](../Model/WebhookTestV1Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
