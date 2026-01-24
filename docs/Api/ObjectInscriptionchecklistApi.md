# eZmaxAPI\ObjectInscriptionchecklistApi



All URIs are relative to https://prod.api.appcluster01.ca-central-1.ezmax.com/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**inscriptionchecklistGetAutocompleteV3()**](ObjectInscriptionchecklistApi.md#inscriptionchecklistGetAutocompleteV3) | **GET** /3/object/inscriptionchecklist/getAutocomplete/{sSelector} | Retrieve Inscriptionchecklists and IDs |


## `inscriptionchecklistGetAutocompleteV3()`

```php
inscriptionchecklistGetAutocompleteV3($sSelector, $fkiBuyercontractID, $fkiInscriptionID, $fkiInscriptionnotauthenticatedID, $fkiInscriptiontempID, $fkiAgentID, $fkiBrokerID, $fkiOtherincomeID, $fkiRejectedoffertopurchaseID, $eFilterActive, $sQuery, $acceptLanguage): \eZmaxAPI\Model\InscriptionchecklistGetAutocompleteV3Response
```

Retrieve Inscriptionchecklists and IDs

Get the list of Inscriptionchecklist to be used in a dropdown or autocomplete control.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ObjectInscriptionchecklistApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sSelector = 'sSelector_example'; // string | The type of Inscriptionchecklist to return
$fkiBuyercontractID = 'fkiBuyercontractID_example'; // string | Specify which Buyercontract we want to display.
$fkiInscriptionID = 'fkiInscriptionID_example'; // string | Specify which Inscription we want to display.
$fkiInscriptionnotauthenticatedID = 'fkiInscriptionnotauthenticatedID_example'; // string | Specify which Inscriptionnotauthenticated we want to display.
$fkiInscriptiontempID = 'fkiInscriptiontempID_example'; // string | Specify which Inscriptiontemp we want to display.
$fkiAgentID = 'fkiAgentID_example'; // string | Specify which Agent we want to display.
$fkiBrokerID = 'fkiBrokerID_example'; // string | Specify which Broker we want to display.
$fkiOtherincomeID = 'fkiOtherincomeID_example'; // string | Specify which Otherincome we want to display.
$fkiRejectedoffertopurchaseID = 'fkiRejectedoffertopurchaseID_example'; // string | Specify which Rejectedoffertopurchase we want to display.
$eFilterActive = 'Active'; // string | Specify which results we want to display.
$sQuery = 'sQuery_example'; // string | Allow to filter the returned results
$acceptLanguage = new \eZmaxAPI\Model\\eZmaxAPI\Model\HeaderAcceptLanguage(); // \eZmaxAPI\Model\HeaderAcceptLanguage

try {
    $result = $apiInstance->inscriptionchecklistGetAutocompleteV3($sSelector, $fkiBuyercontractID, $fkiInscriptionID, $fkiInscriptionnotauthenticatedID, $fkiInscriptiontempID, $fkiAgentID, $fkiBrokerID, $fkiOtherincomeID, $fkiRejectedoffertopurchaseID, $eFilterActive, $sQuery, $acceptLanguage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectInscriptionchecklistApi->inscriptionchecklistGetAutocompleteV3: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sSelector** | **string**| The type of Inscriptionchecklist to return | |
| **fkiBuyercontractID** | **string**| Specify which Buyercontract we want to display. | [optional] |
| **fkiInscriptionID** | **string**| Specify which Inscription we want to display. | [optional] |
| **fkiInscriptionnotauthenticatedID** | **string**| Specify which Inscriptionnotauthenticated we want to display. | [optional] |
| **fkiInscriptiontempID** | **string**| Specify which Inscriptiontemp we want to display. | [optional] |
| **fkiAgentID** | **string**| Specify which Agent we want to display. | [optional] |
| **fkiBrokerID** | **string**| Specify which Broker we want to display. | [optional] |
| **fkiOtherincomeID** | **string**| Specify which Otherincome we want to display. | [optional] |
| **fkiRejectedoffertopurchaseID** | **string**| Specify which Rejectedoffertopurchase we want to display. | [optional] |
| **eFilterActive** | **string**| Specify which results we want to display. | [optional] [default to &#39;Active&#39;] |
| **sQuery** | **string**| Allow to filter the returned results | [optional] |
| **acceptLanguage** | [**\eZmaxAPI\Model\HeaderAcceptLanguage**](../Model/.md)|  | [optional] |

### Return type

[**\eZmaxAPI\Model\InscriptionchecklistGetAutocompleteV3Response**](../Model/InscriptionchecklistGetAutocompleteV3Response.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
