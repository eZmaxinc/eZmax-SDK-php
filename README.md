# eZmaxinc/eZmax-SDK-php

This API expose all the functionnalities for the eZmax and eZsign application.

We provide SDKs for customers. They are generated using OpenAPI codegen, we encourage customers to use them as we also provide samples for them.

You can choose to build your own implementation manually or can use any compatible OpenAPI 3.0 generator like Swagger Codegen, OpenAPI codegen or any commercial generators.

If you need helping understanding how to use this API, don't waste too much time looking for it. Contact support-api@ezmax.ca, we're here to help. We are developpers so we know programmers don't like bad documentation. If you don't find what you need in the documentation, let us know, we'll improve it and put you rapidly up on track.

For more information, please visit [https://www.ezmax.ca/en/contact](https://www.ezmax.ca/en/contact).

## Installation & Usage

### Requirements

PHP 7.2 and later.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/ezmaxinc/ezmax-sdk-php.git"
    }
  ],
  "require": {
    "ezmaxinc/ezmax-sdk-php": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/eZmaxinc/eZmax-SDK-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure API key authorization: Authorization
$config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Api\ActivesessionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->activesessionGetCurrentV1();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivesessionApi->activesessionGetCurrentV1: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://prod.api.appcluster01.ca-central-1.ezmax.com/rest*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*ActivesessionApi* | [**activesessionGetCurrentV1**](docs/Api/ActivesessionApi.md#activesessiongetcurrentv1) | **GET** /1/object/activesession/getCurrent | Get Current Activesession
*EzsigndocumentApi* | [**ezsigndocumentCreateObjectV1**](docs/Api/EzsigndocumentApi.md#ezsigndocumentcreateobjectv1) | **POST** /1/object/ezsigndocument | Create a new Ezsigndocument
*EzsigndocumentApi* | [**ezsigndocumentDeleteObjectV1**](docs/Api/EzsigndocumentApi.md#ezsigndocumentdeleteobjectv1) | **DELETE** /1/object/ezsigndocument/{pkiEzsigndocumentID} | Delete an existing Ezsigndocument
*EzsigndocumentApi* | [**ezsigndocumentEditObjectV1**](docs/Api/EzsigndocumentApi.md#ezsigndocumenteditobjectv1) | **PUT** /1/object/ezsigndocument/{pkiEzsigndocumentID} | Modify an existing Ezsigndocument
*EzsigndocumentApi* | [**ezsigndocumentGetDownloadUrlV1**](docs/Api/EzsigndocumentApi.md#ezsigndocumentgetdownloadurlv1) | **GET** /1/object/ezsigndocument/{pkiEzsigndocumentID}/getDownloadUrl/{eDocumentType} | Retrieve a URL to download documents.
*EzsigndocumentApi* | [**ezsigndocumentGetObjectGetChildrenV1**](docs/Api/EzsigndocumentApi.md#ezsigndocumentgetobjectgetchildrenv1) | **GET** /1/object/ezsigndocument/{pkiEzsigndocumentID}/getChildren | Retrieve an existing Ezsigndocument&#39;s children IDs
*EzsigndocumentApi* | [**ezsigndocumentGetObjectV1**](docs/Api/EzsigndocumentApi.md#ezsigndocumentgetobjectv1) | **GET** /1/object/ezsigndocument/{pkiEzsigndocumentID} | Retrieve an existing Ezsigndocument
*EzsignfolderApi* | [**ezsignfolderCreateObjectV1**](docs/Api/EzsignfolderApi.md#ezsignfoldercreateobjectv1) | **POST** /1/object/ezsignfolder | Create a new Ezsignfolder
*EzsignfolderApi* | [**ezsignfolderDeleteObjectV1**](docs/Api/EzsignfolderApi.md#ezsignfolderdeleteobjectv1) | **DELETE** /1/object/ezsignfolder/{pkiEzsignfolderID} | Delete an existing Ezsignfolder
*EzsignfolderApi* | [**ezsignfolderEditObjectV1**](docs/Api/EzsignfolderApi.md#ezsignfoldereditobjectv1) | **PUT** /1/object/ezsignfolder/{pkiEzsignfolderID} | Modify an existing Ezsignfolder
*EzsignfolderApi* | [**ezsignfolderGetObjectGetChildrenV1**](docs/Api/EzsignfolderApi.md#ezsignfoldergetobjectgetchildrenv1) | **GET** /1/object/ezsignfolder/{pkiEzsignfolderID}/getChildren | Retrieve an existing Ezsignfolder&#39;s children IDs
*EzsignfolderApi* | [**ezsignfolderGetObjectV1**](docs/Api/EzsignfolderApi.md#ezsignfoldergetobjectv1) | **GET** /1/object/ezsignfolder/{pkiEzsignfolderID} | Retrieve an existing Ezsignfolder
*EzsignfolderApi* | [**ezsignfolderSendV1**](docs/Api/EzsignfolderApi.md#ezsignfoldersendv1) | **POST** /1/object/ezsignfolder/{pkiEzsignfolderID}/send | Send the Ezsignfolder to the signatories for signature
*EzsignfoldersignerassociationApi* | [**ezsignfoldersignerassociationCreateObjectV1**](docs/Api/EzsignfoldersignerassociationApi.md#ezsignfoldersignerassociationcreateobjectv1) | **POST** /1/object/ezsignfoldersignerassociation | Create a new Ezsignfoldersignerassociation
*EzsignfoldersignerassociationApi* | [**ezsignfoldersignerassociationDeleteObjectV1**](docs/Api/EzsignfoldersignerassociationApi.md#ezsignfoldersignerassociationdeleteobjectv1) | **DELETE** /1/object/ezsignfoldersignerassociation/{pkiEzsignfoldersignerassociationID} | Delete an existing Ezsignfoldersignerassociation
*EzsignfoldersignerassociationApi* | [**ezsignfoldersignerassociationEditObjectV1**](docs/Api/EzsignfoldersignerassociationApi.md#ezsignfoldersignerassociationeditobjectv1) | **PUT** /1/object/ezsignfoldersignerassociation/{pkiEzsignfoldersignerassociationID} | Modify an existing Ezsignfoldersignerassociation
*EzsignfoldersignerassociationApi* | [**ezsignfoldersignerassociationGetInPersonLoginUrlV1**](docs/Api/EzsignfoldersignerassociationApi.md#ezsignfoldersignerassociationgetinpersonloginurlv1) | **GET** /1/object/ezsignfoldersignerassociation/{pkiEzsignfoldersignerassociationID}/getInPersonLoginUrl | Retrieve a Login Url to allow In-Person signing
*EzsignfoldersignerassociationApi* | [**ezsignfoldersignerassociationGetObjectGetChildrenV1**](docs/Api/EzsignfoldersignerassociationApi.md#ezsignfoldersignerassociationgetobjectgetchildrenv1) | **GET** /1/object/ezsignfoldersignerassociation/{pkiEzsignfoldersignerassociationID}/getChildren | Retrieve an existing Ezsignfoldersignerassociation&#39;s children IDs
*EzsignfoldersignerassociationApi* | [**ezsignfoldersignerassociationGetObjectV1**](docs/Api/EzsignfoldersignerassociationApi.md#ezsignfoldersignerassociationgetobjectv1) | **GET** /1/object/ezsignfoldersignerassociation/{pkiEzsignfoldersignerassociationID} | Retrieve an existing Ezsignfoldersignerassociation
*EzsignsignatureApi* | [**ezsignsignatureCreateObjectV1**](docs/Api/EzsignsignatureApi.md#ezsignsignaturecreateobjectv1) | **POST** /1/object/ezsignsignature | Create a new Ezsignsignature
*EzsignsignatureApi* | [**ezsignsignatureDeleteObjectV1**](docs/Api/EzsignsignatureApi.md#ezsignsignaturedeleteobjectv1) | **DELETE** /1/object/ezsignsignature/{pkiEzsignsignatureID} | Delete an existing Ezsignsignature
*EzsignsignatureApi* | [**ezsignsignatureEditObjectV1**](docs/Api/EzsignsignatureApi.md#ezsignsignatureeditobjectv1) | **PUT** /1/object/ezsignsignature/{pkiEzsignsignatureID} | Modify an existing Ezsignsignature
*EzsignsignatureApi* | [**ezsignsignatureGetObjectGetChildrenV1**](docs/Api/EzsignsignatureApi.md#ezsignsignaturegetobjectgetchildrenv1) | **GET** /1/object/ezsignsignature/{pkiEzsignsignatureID}/getChildren | Retrieve an existing Ezsignsignature&#39;s children IDs
*EzsignsignatureApi* | [**ezsignsignatureGetObjectV1**](docs/Api/EzsignsignatureApi.md#ezsignsignaturegetobjectv1) | **GET** /1/object/ezsignsignature/{pkiEzsignsignatureID} | Retrieve an existing Ezsignsignature
*FranchisebrokerApi* | [**franchisebrokerGetAutocompleteV1**](docs/Api/FranchisebrokerApi.md#franchisebrokergetautocompletev1) | **GET** /1/object/franchisebroker/getAutocomplete/{sSelector} | Retrieve Franchisebrokers and IDs
*FranchiseofficeApi* | [**franchiseofficeGetAutocompleteV1**](docs/Api/FranchiseofficeApi.md#franchiseofficegetautocompletev1) | **GET** /1/object/franchiseoffice/getAutocomplete/{sSelector} | Retrieve Franchiseoffices and IDs
*FranchisereferalincomeApi* | [**franchisereferalincomeCreateObjectV1**](docs/Api/FranchisereferalincomeApi.md#franchisereferalincomecreateobjectv1) | **POST** /1/object/franchisereferalincome | Create a new Franchisereferalincome
*PeriodApi* | [**periodGetAutocompleteV1**](docs/Api/PeriodApi.md#periodgetautocompletev1) | **GET** /1/object/period/getAutocomplete/{sSelector} | Retrieve Periods and IDs

## Models

- [ActivesessionGetCurrentV1Response](docs/Model/ActivesessionGetCurrentV1Response.md)
- [ActivesessionGetCurrentV1ResponseMPayload](docs/Model/ActivesessionGetCurrentV1ResponseMPayload.md)
- [AddressRequest](docs/Model/AddressRequest.md)
- [AttemptResponse](docs/Model/AttemptResponse.md)
- [CommonAudit](docs/Model/CommonAudit.md)
- [CommonGetAutocompleteV1Response](docs/Model/CommonGetAutocompleteV1Response.md)
- [CommonGetAutocompleteV1ResponseMPayload](docs/Model/CommonGetAutocompleteV1ResponseMPayload.md)
- [CommonResponse](docs/Model/CommonResponse.md)
- [CommonResponseError](docs/Model/CommonResponseError.md)
- [CommonResponseObjDebug](docs/Model/CommonResponseObjDebug.md)
- [CommonResponseObjDebugPayload](docs/Model/CommonResponseObjDebugPayload.md)
- [CommonResponseObjSQLQuery](docs/Model/CommonResponseObjSQLQuery.md)
- [CommonWebhook](docs/Model/CommonWebhook.md)
- [ContactRequest](docs/Model/ContactRequest.md)
- [ContactRequestCompound](docs/Model/ContactRequestCompound.md)
- [ContactRequestCompoundAllOf](docs/Model/ContactRequestCompoundAllOf.md)
- [ContactinformationsRequest](docs/Model/ContactinformationsRequest.md)
- [ContactinformationsRequestCompound](docs/Model/ContactinformationsRequestCompound.md)
- [EmailRequest](docs/Model/EmailRequest.md)
- [EzsigndocumentCreateObjectV1Request](docs/Model/EzsigndocumentCreateObjectV1Request.md)
- [EzsigndocumentCreateObjectV1Response](docs/Model/EzsigndocumentCreateObjectV1Response.md)
- [EzsigndocumentCreateObjectV1ResponseMPayload](docs/Model/EzsigndocumentCreateObjectV1ResponseMPayload.md)
- [EzsigndocumentDeleteObjectV1Response](docs/Model/EzsigndocumentDeleteObjectV1Response.md)
- [EzsigndocumentEditObjectV1Request](docs/Model/EzsigndocumentEditObjectV1Request.md)
- [EzsigndocumentEditObjectV1Response](docs/Model/EzsigndocumentEditObjectV1Response.md)
- [EzsigndocumentGetDownloadUrlV1Response](docs/Model/EzsigndocumentGetDownloadUrlV1Response.md)
- [EzsigndocumentGetDownloadUrlV1ResponseMPayload](docs/Model/EzsigndocumentGetDownloadUrlV1ResponseMPayload.md)
- [EzsigndocumentGetObjectV1Response](docs/Model/EzsigndocumentGetObjectV1Response.md)
- [EzsigndocumentGetObjectV1ResponseMPayload](docs/Model/EzsigndocumentGetObjectV1ResponseMPayload.md)
- [EzsigndocumentRequest](docs/Model/EzsigndocumentRequest.md)
- [EzsigndocumentRequestCompound](docs/Model/EzsigndocumentRequestCompound.md)
- [EzsigndocumentResponse](docs/Model/EzsigndocumentResponse.md)
- [EzsigndocumentResponseAllOf](docs/Model/EzsigndocumentResponseAllOf.md)
- [EzsigndocumentResponseCompound](docs/Model/EzsigndocumentResponseCompound.md)
- [EzsignfolderCreateObjectV1Request](docs/Model/EzsignfolderCreateObjectV1Request.md)
- [EzsignfolderCreateObjectV1Response](docs/Model/EzsignfolderCreateObjectV1Response.md)
- [EzsignfolderCreateObjectV1ResponseMPayload](docs/Model/EzsignfolderCreateObjectV1ResponseMPayload.md)
- [EzsignfolderDeleteObjectV1Response](docs/Model/EzsignfolderDeleteObjectV1Response.md)
- [EzsignfolderEditObjectV1Request](docs/Model/EzsignfolderEditObjectV1Request.md)
- [EzsignfolderEditObjectV1Response](docs/Model/EzsignfolderEditObjectV1Response.md)
- [EzsignfolderGetObjectV1Response](docs/Model/EzsignfolderGetObjectV1Response.md)
- [EzsignfolderGetObjectV1ResponseMPayload](docs/Model/EzsignfolderGetObjectV1ResponseMPayload.md)
- [EzsignfolderRequest](docs/Model/EzsignfolderRequest.md)
- [EzsignfolderRequestCompound](docs/Model/EzsignfolderRequestCompound.md)
- [EzsignfolderResponse](docs/Model/EzsignfolderResponse.md)
- [EzsignfolderResponseAllOf](docs/Model/EzsignfolderResponseAllOf.md)
- [EzsignfolderResponseCompound](docs/Model/EzsignfolderResponseCompound.md)
- [EzsignfolderSendV1Request](docs/Model/EzsignfolderSendV1Request.md)
- [EzsignfolderSendV1Response](docs/Model/EzsignfolderSendV1Response.md)
- [EzsignfoldersignerassociationCreateObjectV1Request](docs/Model/EzsignfoldersignerassociationCreateObjectV1Request.md)
- [EzsignfoldersignerassociationCreateObjectV1Response](docs/Model/EzsignfoldersignerassociationCreateObjectV1Response.md)
- [EzsignfoldersignerassociationCreateObjectV1ResponseMPayload](docs/Model/EzsignfoldersignerassociationCreateObjectV1ResponseMPayload.md)
- [EzsignfoldersignerassociationDeleteObjectV1Response](docs/Model/EzsignfoldersignerassociationDeleteObjectV1Response.md)
- [EzsignfoldersignerassociationEditObjectV1Request](docs/Model/EzsignfoldersignerassociationEditObjectV1Request.md)
- [EzsignfoldersignerassociationEditObjectV1Response](docs/Model/EzsignfoldersignerassociationEditObjectV1Response.md)
- [EzsignfoldersignerassociationGetInPersonLoginUrlV1Response](docs/Model/EzsignfoldersignerassociationGetInPersonLoginUrlV1Response.md)
- [EzsignfoldersignerassociationGetInPersonLoginUrlV1ResponseMPayload](docs/Model/EzsignfoldersignerassociationGetInPersonLoginUrlV1ResponseMPayload.md)
- [EzsignfoldersignerassociationGetObjectV1Response](docs/Model/EzsignfoldersignerassociationGetObjectV1Response.md)
- [EzsignfoldersignerassociationRequest](docs/Model/EzsignfoldersignerassociationRequest.md)
- [EzsignfoldersignerassociationRequestCompound](docs/Model/EzsignfoldersignerassociationRequestCompound.md)
- [EzsignsignatureCreateObjectV1Request](docs/Model/EzsignsignatureCreateObjectV1Request.md)
- [EzsignsignatureCreateObjectV1Response](docs/Model/EzsignsignatureCreateObjectV1Response.md)
- [EzsignsignatureCreateObjectV1ResponseMPayload](docs/Model/EzsignsignatureCreateObjectV1ResponseMPayload.md)
- [EzsignsignatureDeleteObjectV1Response](docs/Model/EzsignsignatureDeleteObjectV1Response.md)
- [EzsignsignatureEditObjectV1Request](docs/Model/EzsignsignatureEditObjectV1Request.md)
- [EzsignsignatureEditObjectV1Response](docs/Model/EzsignsignatureEditObjectV1Response.md)
- [EzsignsignatureGetObjectV1Response](docs/Model/EzsignsignatureGetObjectV1Response.md)
- [EzsignsignatureRequest](docs/Model/EzsignsignatureRequest.md)
- [EzsignsignatureRequestCompound](docs/Model/EzsignsignatureRequestCompound.md)
- [EzsignsignerRequest](docs/Model/EzsignsignerRequest.md)
- [EzsignsignerRequestCompound](docs/Model/EzsignsignerRequestCompound.md)
- [EzsignsignerRequestCompoundContact](docs/Model/EzsignsignerRequestCompoundContact.md)
- [FieldEEzsigndocumentStep](docs/Model/FieldEEzsigndocumentStep.md)
- [FieldEEzsignfolderSendreminderfrequency](docs/Model/FieldEEzsignfolderSendreminderfrequency.md)
- [FieldEEzsignfolderStep](docs/Model/FieldEEzsignfolderStep.md)
- [FieldEPhoneType](docs/Model/FieldEPhoneType.md)
- [FranchisereferalincomeCreateObjectV1Request](docs/Model/FranchisereferalincomeCreateObjectV1Request.md)
- [FranchisereferalincomeCreateObjectV1Response](docs/Model/FranchisereferalincomeCreateObjectV1Response.md)
- [FranchisereferalincomeCreateObjectV1ResponseMPayload](docs/Model/FranchisereferalincomeCreateObjectV1ResponseMPayload.md)
- [FranchisereferalincomeRequest](docs/Model/FranchisereferalincomeRequest.md)
- [FranchisereferalincomeRequestCompound](docs/Model/FranchisereferalincomeRequestCompound.md)
- [PhoneRequest](docs/Model/PhoneRequest.md)
- [WebhookEzsignDocumentCompleted](docs/Model/WebhookEzsignDocumentCompleted.md)
- [WebhookEzsignDocumentCompletedAllOf](docs/Model/WebhookEzsignDocumentCompletedAllOf.md)
- [WebhookEzsignFolderCompleted](docs/Model/WebhookEzsignFolderCompleted.md)
- [WebhookEzsignFolderCompletedAllOf](docs/Model/WebhookEzsignFolderCompletedAllOf.md)
- [WebhookResponse](docs/Model/WebhookResponse.md)
- [WebsiteRequest](docs/Model/WebsiteRequest.md)

## Authorization

### Authorization

- **Type**: API key
- **API key parameter name**: Authorization
- **Location**: HTTP header


## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

support-api@ezmax.ca

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.0.19`
    - Package version: `1.0.19`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
