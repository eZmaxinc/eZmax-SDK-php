# eZmaxAPI\GlobalCustomerApi

All URIs are relative to https://prod.api.appcluster01.ca-central-1.ezmax.com/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**globalCustomerGetEndpointV1()**](GlobalCustomerApi.md#globalCustomerGetEndpointV1) | **GET** /1/customer/{pksCustomerCode}/endpoint | Get customer endpoint |


## `globalCustomerGetEndpointV1()`

```php
globalCustomerGetEndpointV1($pksCustomerCode, $sInfrastructureproductCode): \eZmaxAPI\Model\GlobalCustomerGetEndpointV1Response
```

Get customer endpoint

Retrieve the customer's specific server endpoint where to send requests. This will help locate the proper region (ie: sInfrastructureregionCode) and the proper environment (ie: sInfrastructureenvironmenttypeDescription) where the customer's data is stored.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new eZmaxAPI\Api\GlobalCustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$pksCustomerCode = 'pksCustomerCode_example'; // string
$sInfrastructureproductCode = 'sInfrastructureproductCode_example'; // string | The infrastructure product Code  If undefined, \"appcluster01\" is assumed

try {
    $result = $apiInstance->globalCustomerGetEndpointV1($pksCustomerCode, $sInfrastructureproductCode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobalCustomerApi->globalCustomerGetEndpointV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pksCustomerCode** | **string**|  | |
| **sInfrastructureproductCode** | **string**| The infrastructure product Code  If undefined, \&quot;appcluster01\&quot; is assumed | [optional] |

### Return type

[**\eZmaxAPI\Model\GlobalCustomerGetEndpointV1Response**](../Model/GlobalCustomerGetEndpointV1Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
