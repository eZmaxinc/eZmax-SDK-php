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


$apiInstance = new eZmaxAPI\Api\ModuleUserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$userCreateEzsignuserV1Request = array(new \eZmaxAPI\Model\UserCreateEzsignuserV1Request()); // \eZmaxAPI\Model\UserCreateEzsignuserV1Request[]

try {
    $result = $apiInstance->userCreateEzsignuserV1($userCreateEzsignuserV1Request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModuleUserApi->userCreateEzsignuserV1: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://prod.api.appcluster01.ca-central-1.ezmax.com/rest*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*ModuleUserApi* | [**userCreateEzsignuserV1**](docs/Api/ModuleUserApi.md#usercreateezsignuserv1) | **POST** /1/module/user/createezsignuser | Create a new User of type Ezsignuser
*ObjectActivesessionApi* | [**activesessionGetCurrentV1**](docs/Api/ObjectActivesessionApi.md#activesessiongetcurrentv1) | **GET** /1/object/activesession/getCurrent | Get Current Activesession
*ObjectApikeyApi* | [**apikeyCreateObjectV1**](docs/Api/ObjectApikeyApi.md#apikeycreateobjectv1) | **POST** /1/object/apikey | Create a new Apikey
*ObjectEzsigndocumentApi* | [**ezsigndocumentApplyEzsigntemplateV1**](docs/Api/ObjectEzsigndocumentApi.md#ezsigndocumentapplyezsigntemplatev1) | **POST** /1/object/ezsigndocument/{pkiEzsigndocumentID}/applyezsigntemplate | Apply an Ezsign Template to the Ezsigndocument.
*ObjectEzsigndocumentApi* | [**ezsigndocumentCreateObjectV1**](docs/Api/ObjectEzsigndocumentApi.md#ezsigndocumentcreateobjectv1) | **POST** /1/object/ezsigndocument | Create a new Ezsigndocument
*ObjectEzsigndocumentApi* | [**ezsigndocumentDeleteObjectV1**](docs/Api/ObjectEzsigndocumentApi.md#ezsigndocumentdeleteobjectv1) | **DELETE** /1/object/ezsigndocument/{pkiEzsigndocumentID} | Delete an existing Ezsigndocument
*ObjectEzsigndocumentApi* | [**ezsigndocumentEditObjectV1**](docs/Api/ObjectEzsigndocumentApi.md#ezsigndocumenteditobjectv1) | **PUT** /1/object/ezsigndocument/{pkiEzsigndocumentID} | Modify an existing Ezsigndocument
*ObjectEzsigndocumentApi* | [**ezsigndocumentGetDownloadUrlV1**](docs/Api/ObjectEzsigndocumentApi.md#ezsigndocumentgetdownloadurlv1) | **GET** /1/object/ezsigndocument/{pkiEzsigndocumentID}/getDownloadUrl/{eDocumentType} | Retrieve a URL to download documents.
*ObjectEzsigndocumentApi* | [**ezsigndocumentGetObjectGetChildrenV1**](docs/Api/ObjectEzsigndocumentApi.md#ezsigndocumentgetobjectgetchildrenv1) | **GET** /1/object/ezsigndocument/{pkiEzsigndocumentID}/getChildren | Retrieve an existing Ezsigndocument&#39;s children IDs
*ObjectEzsigndocumentApi* | [**ezsigndocumentGetObjectV1**](docs/Api/ObjectEzsigndocumentApi.md#ezsigndocumentgetobjectv1) | **GET** /1/object/ezsigndocument/{pkiEzsigndocumentID} | Retrieve an existing Ezsigndocument
*ObjectEzsignfolderApi* | [**ezsignfolderCreateObjectV1**](docs/Api/ObjectEzsignfolderApi.md#ezsignfoldercreateobjectv1) | **POST** /1/object/ezsignfolder | Create a new Ezsignfolder
*ObjectEzsignfolderApi* | [**ezsignfolderDeleteObjectV1**](docs/Api/ObjectEzsignfolderApi.md#ezsignfolderdeleteobjectv1) | **DELETE** /1/object/ezsignfolder/{pkiEzsignfolderID} | Delete an existing Ezsignfolder
*ObjectEzsignfolderApi* | [**ezsignfolderEditObjectV1**](docs/Api/ObjectEzsignfolderApi.md#ezsignfoldereditobjectv1) | **PUT** /1/object/ezsignfolder/{pkiEzsignfolderID} | Modify an existing Ezsignfolder
*ObjectEzsignfolderApi* | [**ezsignfolderGetObjectGetChildrenV1**](docs/Api/ObjectEzsignfolderApi.md#ezsignfoldergetobjectgetchildrenv1) | **GET** /1/object/ezsignfolder/{pkiEzsignfolderID}/getChildren | Retrieve an existing Ezsignfolder&#39;s children IDs
*ObjectEzsignfolderApi* | [**ezsignfolderGetObjectV1**](docs/Api/ObjectEzsignfolderApi.md#ezsignfoldergetobjectv1) | **GET** /1/object/ezsignfolder/{pkiEzsignfolderID} | Retrieve an existing Ezsignfolder
*ObjectEzsignfolderApi* | [**ezsignfolderSendV1**](docs/Api/ObjectEzsignfolderApi.md#ezsignfoldersendv1) | **POST** /1/object/ezsignfolder/{pkiEzsignfolderID}/send | Send the Ezsignfolder to the signatories for signature
*ObjectEzsignfoldersignerassociationApi* | [**ezsignfoldersignerassociationCreateObjectV1**](docs/Api/ObjectEzsignfoldersignerassociationApi.md#ezsignfoldersignerassociationcreateobjectv1) | **POST** /1/object/ezsignfoldersignerassociation | Create a new Ezsignfoldersignerassociation
*ObjectEzsignfoldersignerassociationApi* | [**ezsignfoldersignerassociationDeleteObjectV1**](docs/Api/ObjectEzsignfoldersignerassociationApi.md#ezsignfoldersignerassociationdeleteobjectv1) | **DELETE** /1/object/ezsignfoldersignerassociation/{pkiEzsignfoldersignerassociationID} | Delete an existing Ezsignfoldersignerassociation
*ObjectEzsignfoldersignerassociationApi* | [**ezsignfoldersignerassociationEditObjectV1**](docs/Api/ObjectEzsignfoldersignerassociationApi.md#ezsignfoldersignerassociationeditobjectv1) | **PUT** /1/object/ezsignfoldersignerassociation/{pkiEzsignfoldersignerassociationID} | Modify an existing Ezsignfoldersignerassociation
*ObjectEzsignfoldersignerassociationApi* | [**ezsignfoldersignerassociationGetInPersonLoginUrlV1**](docs/Api/ObjectEzsignfoldersignerassociationApi.md#ezsignfoldersignerassociationgetinpersonloginurlv1) | **GET** /1/object/ezsignfoldersignerassociation/{pkiEzsignfoldersignerassociationID}/getInPersonLoginUrl | Retrieve a Login Url to allow In-Person signing
*ObjectEzsignfoldersignerassociationApi* | [**ezsignfoldersignerassociationGetObjectGetChildrenV1**](docs/Api/ObjectEzsignfoldersignerassociationApi.md#ezsignfoldersignerassociationgetobjectgetchildrenv1) | **GET** /1/object/ezsignfoldersignerassociation/{pkiEzsignfoldersignerassociationID}/getChildren | Retrieve an existing Ezsignfoldersignerassociation&#39;s children IDs
*ObjectEzsignfoldersignerassociationApi* | [**ezsignfoldersignerassociationGetObjectV1**](docs/Api/ObjectEzsignfoldersignerassociationApi.md#ezsignfoldersignerassociationgetobjectv1) | **GET** /1/object/ezsignfoldersignerassociation/{pkiEzsignfoldersignerassociationID} | Retrieve an existing Ezsignfoldersignerassociation
*ObjectEzsignsignatureApi* | [**ezsignsignatureCreateObjectV1**](docs/Api/ObjectEzsignsignatureApi.md#ezsignsignaturecreateobjectv1) | **POST** /1/object/ezsignsignature | Create a new Ezsignsignature
*ObjectEzsignsignatureApi* | [**ezsignsignatureDeleteObjectV1**](docs/Api/ObjectEzsignsignatureApi.md#ezsignsignaturedeleteobjectv1) | **DELETE** /1/object/ezsignsignature/{pkiEzsignsignatureID} | Delete an existing Ezsignsignature
*ObjectEzsignsignatureApi* | [**ezsignsignatureEditObjectV1**](docs/Api/ObjectEzsignsignatureApi.md#ezsignsignatureeditobjectv1) | **PUT** /1/object/ezsignsignature/{pkiEzsignsignatureID} | Modify an existing Ezsignsignature
*ObjectEzsignsignatureApi* | [**ezsignsignatureGetObjectGetChildrenV1**](docs/Api/ObjectEzsignsignatureApi.md#ezsignsignaturegetobjectgetchildrenv1) | **GET** /1/object/ezsignsignature/{pkiEzsignsignatureID}/getChildren | Retrieve an existing Ezsignsignature&#39;s children IDs
*ObjectEzsignsignatureApi* | [**ezsignsignatureGetObjectV1**](docs/Api/ObjectEzsignsignatureApi.md#ezsignsignaturegetobjectv1) | **GET** /1/object/ezsignsignature/{pkiEzsignsignatureID} | Retrieve an existing Ezsignsignature
*ObjectFranchisebrokerApi* | [**franchisebrokerGetAutocompleteV1**](docs/Api/ObjectFranchisebrokerApi.md#franchisebrokergetautocompletev1) | **GET** /1/object/franchisebroker/getAutocomplete/{sSelector} | Retrieve Franchisebrokers and IDs
*ObjectFranchiseofficeApi* | [**franchiseofficeGetAutocompleteV1**](docs/Api/ObjectFranchiseofficeApi.md#franchiseofficegetautocompletev1) | **GET** /1/object/franchiseoffice/getAutocomplete/{sSelector} | Retrieve Franchiseoffices and IDs
*ObjectFranchisereferalincomeApi* | [**franchisereferalincomeCreateObjectV1**](docs/Api/ObjectFranchisereferalincomeApi.md#franchisereferalincomecreateobjectv1) | **POST** /1/object/franchisereferalincome | Create a new Franchisereferalincome
*ObjectPeriodApi* | [**periodGetAutocompleteV1**](docs/Api/ObjectPeriodApi.md#periodgetautocompletev1) | **GET** /1/object/period/getAutocomplete/{sSelector} | Retrieve Periods and IDs

## Models

- [ActivesessionGetCurrentV1Response](docs/Model/ActivesessionGetCurrentV1Response.md)
- [ActivesessionGetCurrentV1ResponseMPayload](docs/Model/ActivesessionGetCurrentV1ResponseMPayload.md)
- [AddressRequest](docs/Model/AddressRequest.md)
- [ApikeyCreateObjectV1Request](docs/Model/ApikeyCreateObjectV1Request.md)
- [ApikeyCreateObjectV1Response](docs/Model/ApikeyCreateObjectV1Response.md)
- [ApikeyCreateObjectV1ResponseMPayload](docs/Model/ApikeyCreateObjectV1ResponseMPayload.md)
- [ApikeyRequest](docs/Model/ApikeyRequest.md)
- [ApikeyRequestCompound](docs/Model/ApikeyRequestCompound.md)
- [ApikeyResponse](docs/Model/ApikeyResponse.md)
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
- [EzsigndocumentApplyEzsigntemplateV1Request](docs/Model/EzsigndocumentApplyEzsigntemplateV1Request.md)
- [EzsigndocumentApplyEzsigntemplateV1Response](docs/Model/EzsigndocumentApplyEzsigntemplateV1Response.md)
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
- [FieldEUserType](docs/Model/FieldEUserType.md)
- [FranchisereferalincomeCreateObjectV1Request](docs/Model/FranchisereferalincomeCreateObjectV1Request.md)
- [FranchisereferalincomeCreateObjectV1Response](docs/Model/FranchisereferalincomeCreateObjectV1Response.md)
- [FranchisereferalincomeCreateObjectV1ResponseMPayload](docs/Model/FranchisereferalincomeCreateObjectV1ResponseMPayload.md)
- [FranchisereferalincomeRequest](docs/Model/FranchisereferalincomeRequest.md)
- [FranchisereferalincomeRequestCompound](docs/Model/FranchisereferalincomeRequestCompound.md)
- [MultilingualApikeyDescription](docs/Model/MultilingualApikeyDescription.md)
- [PhoneRequest](docs/Model/PhoneRequest.md)
- [UserCreateEzsignuserV1Request](docs/Model/UserCreateEzsignuserV1Request.md)
- [UserCreateEzsignuserV1Response](docs/Model/UserCreateEzsignuserV1Response.md)
- [UserCreateEzsignuserV1ResponseMPayload](docs/Model/UserCreateEzsignuserV1ResponseMPayload.md)
- [UserResponse](docs/Model/UserResponse.md)
- [UserResponseAllOf](docs/Model/UserResponseAllOf.md)
- [WebhookEzsignDocumentCompleted](docs/Model/WebhookEzsignDocumentCompleted.md)
- [WebhookEzsignDocumentCompletedAllOf](docs/Model/WebhookEzsignDocumentCompletedAllOf.md)
- [WebhookEzsignFolderCompleted](docs/Model/WebhookEzsignFolderCompleted.md)
- [WebhookEzsignFolderCompletedAllOf](docs/Model/WebhookEzsignFolderCompletedAllOf.md)
- [WebhookResponse](docs/Model/WebhookResponse.md)
- [WebhookUserUserCreated](docs/Model/WebhookUserUserCreated.md)
- [WebhookUserUserCreatedAllOf](docs/Model/WebhookUserUserCreatedAllOf.md)
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

- API version: `1.0.28`
    - Package version: `1.0.28`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
