# eZmaxApi

This API expose all the functionnalities for the eZmax and eZsign applications.

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
require_once('/path/to/eZmaxApi/vendor/autoload.php');
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


$apiInstance = new eZmaxAPI\Api\GlobalCustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pksCustomerCode = 'pksCustomerCode_example'; // string | The customer code assigned to your account
$sInfrastructureproductCode = 'sInfrastructureproductCode_example'; // string | The infrastructure product Code  If undefined, \"appcluster01\" is assumed

try {
    $result = $apiInstance->globalCustomerGetEndpointV1($pksCustomerCode, $sInfrastructureproductCode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobalCustomerApi->globalCustomerGetEndpointV1: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://prod.api.appcluster01.ca-central-1.ezmax.com/rest*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*GlobalCustomerApi* | [**globalCustomerGetEndpointV1**](docs/Api/GlobalCustomerApi.md#globalcustomergetendpointv1) | **GET** /1/customer/{pksCustomerCode}/endpoint | Get customer endpoint
*ModuleAuthenticateApi* | [**authenticateAuthenticateV2**](docs/Api/ModuleAuthenticateApi.md#authenticateauthenticatev2) | **POST** /2/module/authenticate/authenticate/{eSessionType} | Authenticate a user
*ModuleSsprApi* | [**ssprResetPasswordRequestV1**](docs/Api/ModuleSsprApi.md#ssprresetpasswordrequestv1) | **POST** /1/module/sspr/resetPasswordRequest | Reset Password Request
*ModuleSsprApi* | [**ssprResetPasswordV1**](docs/Api/ModuleSsprApi.md#ssprresetpasswordv1) | **POST** /1/module/sspr/resetPassword | Reset Password
*ModuleSsprApi* | [**ssprSendUsernamesV1**](docs/Api/ModuleSsprApi.md#ssprsendusernamesv1) | **POST** /1/module/sspr/sendUsernames | Send username(s)
*ModuleSsprApi* | [**ssprUnlockAccountRequestV1**](docs/Api/ModuleSsprApi.md#ssprunlockaccountrequestv1) | **POST** /1/module/sspr/unlockAccountRequest | Unlock Account Request
*ModuleSsprApi* | [**ssprUnlockAccountV1**](docs/Api/ModuleSsprApi.md#ssprunlockaccountv1) | **POST** /1/module/sspr/unlockAccount | Unlock Account
*ModuleSsprApi* | [**ssprValidateTokenV1**](docs/Api/ModuleSsprApi.md#ssprvalidatetokenv1) | **POST** /1/module/sspr/validateToken | Validate Token
*ModuleUserApi* | [**userCreateEzsignuserV1**](docs/Api/ModuleUserApi.md#usercreateezsignuserv1) | **POST** /1/module/user/createezsignuser | Create a new User of type Ezsignuser
*ObjectActivesessionApi* | [**activesessionGetCurrentV1**](docs/Api/ObjectActivesessionApi.md#activesessiongetcurrentv1) | **GET** /1/object/activesession/getCurrent | Get Current Activesession
*ObjectApikeyApi* | [**apikeyCreateObjectV1**](docs/Api/ObjectApikeyApi.md#apikeycreateobjectv1) | **POST** /1/object/apikey | Create a new Apikey
*ObjectEzsigndocumentApi* | [**ezsigndocumentApplyEzsigntemplateV1**](docs/Api/ObjectEzsigndocumentApi.md#ezsigndocumentapplyezsigntemplatev1) | **POST** /1/object/ezsigndocument/{pkiEzsigndocumentID}/applyezsigntemplate | Apply an Ezsign Template to the Ezsigndocument.
*ObjectEzsigndocumentApi* | [**ezsigndocumentCreateObjectV1**](docs/Api/ObjectEzsigndocumentApi.md#ezsigndocumentcreateobjectv1) | **POST** /1/object/ezsigndocument | Create a new Ezsigndocument
*ObjectEzsigndocumentApi* | [**ezsigndocumentDeleteObjectV1**](docs/Api/ObjectEzsigndocumentApi.md#ezsigndocumentdeleteobjectv1) | **DELETE** /1/object/ezsigndocument/{pkiEzsigndocumentID} | Delete an existing Ezsigndocument
*ObjectEzsigndocumentApi* | [**ezsigndocumentGetChildrenV1**](docs/Api/ObjectEzsigndocumentApi.md#ezsigndocumentgetchildrenv1) | **GET** /1/object/ezsigndocument/{pkiEzsigndocumentID}/getChildren | Retrieve an existing Ezsigndocument&#39;s children IDs
*ObjectEzsigndocumentApi* | [**ezsigndocumentGetDownloadUrlV1**](docs/Api/ObjectEzsigndocumentApi.md#ezsigndocumentgetdownloadurlv1) | **GET** /1/object/ezsigndocument/{pkiEzsigndocumentID}/getDownloadUrl/{eDocumentType} | Retrieve a URL to download documents.
*ObjectEzsigndocumentApi* | [**ezsigndocumentGetObjectV1**](docs/Api/ObjectEzsigndocumentApi.md#ezsigndocumentgetobjectv1) | **GET** /1/object/ezsigndocument/{pkiEzsigndocumentID} | Retrieve an existing Ezsigndocument
*ObjectEzsignfolderApi* | [**ezsignfolderCreateObjectV1**](docs/Api/ObjectEzsignfolderApi.md#ezsignfoldercreateobjectv1) | **POST** /1/object/ezsignfolder | Create a new Ezsignfolder
*ObjectEzsignfolderApi* | [**ezsignfolderDeleteObjectV1**](docs/Api/ObjectEzsignfolderApi.md#ezsignfolderdeleteobjectv1) | **DELETE** /1/object/ezsignfolder/{pkiEzsignfolderID} | Delete an existing Ezsignfolder
*ObjectEzsignfolderApi* | [**ezsignfolderGetChildrenV1**](docs/Api/ObjectEzsignfolderApi.md#ezsignfoldergetchildrenv1) | **GET** /1/object/ezsignfolder/{pkiEzsignfolderID}/getChildren | Retrieve an existing Ezsignfolder&#39;s children IDs
*ObjectEzsignfolderApi* | [**ezsignfolderGetObjectV1**](docs/Api/ObjectEzsignfolderApi.md#ezsignfoldergetobjectv1) | **GET** /1/object/ezsignfolder/{pkiEzsignfolderID} | Retrieve an existing Ezsignfolder
*ObjectEzsignfolderApi* | [**ezsignfolderSendV1**](docs/Api/ObjectEzsignfolderApi.md#ezsignfoldersendv1) | **POST** /1/object/ezsignfolder/{pkiEzsignfolderID}/send | Send the Ezsignfolder to the signatories for signature
*ObjectEzsignfoldersignerassociationApi* | [**ezsignfoldersignerassociationCreateObjectV1**](docs/Api/ObjectEzsignfoldersignerassociationApi.md#ezsignfoldersignerassociationcreateobjectv1) | **POST** /1/object/ezsignfoldersignerassociation | Create a new Ezsignfoldersignerassociation
*ObjectEzsignfoldersignerassociationApi* | [**ezsignfoldersignerassociationDeleteObjectV1**](docs/Api/ObjectEzsignfoldersignerassociationApi.md#ezsignfoldersignerassociationdeleteobjectv1) | **DELETE** /1/object/ezsignfoldersignerassociation/{pkiEzsignfoldersignerassociationID} | Delete an existing Ezsignfoldersignerassociation
*ObjectEzsignfoldersignerassociationApi* | [**ezsignfoldersignerassociationGetChildrenV1**](docs/Api/ObjectEzsignfoldersignerassociationApi.md#ezsignfoldersignerassociationgetchildrenv1) | **GET** /1/object/ezsignfoldersignerassociation/{pkiEzsignfoldersignerassociationID}/getChildren | Retrieve an existing Ezsignfoldersignerassociation&#39;s children IDs
*ObjectEzsignfoldersignerassociationApi* | [**ezsignfoldersignerassociationGetInPersonLoginUrlV1**](docs/Api/ObjectEzsignfoldersignerassociationApi.md#ezsignfoldersignerassociationgetinpersonloginurlv1) | **GET** /1/object/ezsignfoldersignerassociation/{pkiEzsignfoldersignerassociationID}/getInPersonLoginUrl | Retrieve a Login Url to allow In-Person signing
*ObjectEzsignfoldersignerassociationApi* | [**ezsignfoldersignerassociationGetObjectV1**](docs/Api/ObjectEzsignfoldersignerassociationApi.md#ezsignfoldersignerassociationgetobjectv1) | **GET** /1/object/ezsignfoldersignerassociation/{pkiEzsignfoldersignerassociationID} | Retrieve an existing Ezsignfoldersignerassociation
*ObjectEzsignsignatureApi* | [**ezsignsignatureCreateObjectV1**](docs/Api/ObjectEzsignsignatureApi.md#ezsignsignaturecreateobjectv1) | **POST** /1/object/ezsignsignature | Create a new Ezsignsignature
*ObjectEzsignsignatureApi* | [**ezsignsignatureDeleteObjectV1**](docs/Api/ObjectEzsignsignatureApi.md#ezsignsignaturedeleteobjectv1) | **DELETE** /1/object/ezsignsignature/{pkiEzsignsignatureID} | Delete an existing Ezsignsignature
*ObjectEzsignsignatureApi* | [**ezsignsignatureGetChildrenV1**](docs/Api/ObjectEzsignsignatureApi.md#ezsignsignaturegetchildrenv1) | **GET** /1/object/ezsignsignature/{pkiEzsignsignatureID}/getChildren | Retrieve an existing Ezsignsignature&#39;s children IDs
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
- [AuthenticateAuthenticateV2Request](docs/Model/AuthenticateAuthenticateV2Request.md)
- [AuthenticateAuthenticateV2Response](docs/Model/AuthenticateAuthenticateV2Response.md)
- [AuthenticateAuthenticateV2ResponseMPayload](docs/Model/AuthenticateAuthenticateV2ResponseMPayload.md)
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
- [EzsignfoldersignerassociationGetInPersonLoginUrlV1Response](docs/Model/EzsignfoldersignerassociationGetInPersonLoginUrlV1Response.md)
- [EzsignfoldersignerassociationGetInPersonLoginUrlV1ResponseMPayload](docs/Model/EzsignfoldersignerassociationGetInPersonLoginUrlV1ResponseMPayload.md)
- [EzsignfoldersignerassociationGetObjectV1Response](docs/Model/EzsignfoldersignerassociationGetObjectV1Response.md)
- [EzsignfoldersignerassociationRequest](docs/Model/EzsignfoldersignerassociationRequest.md)
- [EzsignfoldersignerassociationRequestCompound](docs/Model/EzsignfoldersignerassociationRequestCompound.md)
- [EzsignsignatureCreateObjectV1Request](docs/Model/EzsignsignatureCreateObjectV1Request.md)
- [EzsignsignatureCreateObjectV1Response](docs/Model/EzsignsignatureCreateObjectV1Response.md)
- [EzsignsignatureCreateObjectV1ResponseMPayload](docs/Model/EzsignsignatureCreateObjectV1ResponseMPayload.md)
- [EzsignsignatureDeleteObjectV1Response](docs/Model/EzsignsignatureDeleteObjectV1Response.md)
- [EzsignsignatureGetObjectV1Response](docs/Model/EzsignsignatureGetObjectV1Response.md)
- [EzsignsignatureRequest](docs/Model/EzsignsignatureRequest.md)
- [EzsignsignatureRequestCompound](docs/Model/EzsignsignatureRequestCompound.md)
- [EzsignsignerRequest](docs/Model/EzsignsignerRequest.md)
- [EzsignsignerRequestCompound](docs/Model/EzsignsignerRequestCompound.md)
- [EzsignsignerRequestCompoundContact](docs/Model/EzsignsignerRequestCompoundContact.md)
- [FieldEEzsigndocumentStep](docs/Model/FieldEEzsigndocumentStep.md)
- [FieldEEzsignfolderSendreminderfrequency](docs/Model/FieldEEzsignfolderSendreminderfrequency.md)
- [FieldEEzsignfolderStep](docs/Model/FieldEEzsignfolderStep.md)
- [FieldEEzsignsignatureType](docs/Model/FieldEEzsignsignatureType.md)
- [FieldEPhoneType](docs/Model/FieldEPhoneType.md)
- [FieldEUserType](docs/Model/FieldEUserType.md)
- [FieldEUserTypeSSPR](docs/Model/FieldEUserTypeSSPR.md)
- [FranchisereferalincomeCreateObjectV1Request](docs/Model/FranchisereferalincomeCreateObjectV1Request.md)
- [FranchisereferalincomeCreateObjectV1Response](docs/Model/FranchisereferalincomeCreateObjectV1Response.md)
- [FranchisereferalincomeCreateObjectV1ResponseMPayload](docs/Model/FranchisereferalincomeCreateObjectV1ResponseMPayload.md)
- [FranchisereferalincomeRequest](docs/Model/FranchisereferalincomeRequest.md)
- [FranchisereferalincomeRequestCompound](docs/Model/FranchisereferalincomeRequestCompound.md)
- [GlobalCustomerGetEndpointV1Response](docs/Model/GlobalCustomerGetEndpointV1Response.md)
- [MultilingualApikeyDescription](docs/Model/MultilingualApikeyDescription.md)
- [PhoneRequest](docs/Model/PhoneRequest.md)
- [SsprResetPasswordRequestV1Request](docs/Model/SsprResetPasswordRequestV1Request.md)
- [SsprResetPasswordV1Request](docs/Model/SsprResetPasswordV1Request.md)
- [SsprSendUsernamesV1Request](docs/Model/SsprSendUsernamesV1Request.md)
- [SsprUnlockAccountRequestV1Request](docs/Model/SsprUnlockAccountRequestV1Request.md)
- [SsprUnlockAccountV1Request](docs/Model/SsprUnlockAccountV1Request.md)
- [SsprValidateTokenV1Request](docs/Model/SsprValidateTokenV1Request.md)
- [UNUSEDEzsigndocumentEditObjectV1Request](docs/Model/UNUSEDEzsigndocumentEditObjectV1Request.md)
- [UNUSEDEzsigndocumentEditObjectV1Response](docs/Model/UNUSEDEzsigndocumentEditObjectV1Response.md)
- [UNUSEDEzsignfolderEditObjectV1Request](docs/Model/UNUSEDEzsignfolderEditObjectV1Request.md)
- [UNUSEDEzsignfolderEditObjectV1Response](docs/Model/UNUSEDEzsignfolderEditObjectV1Response.md)
- [UNUSEDEzsignfoldersignerassociationEditObjectV1Request](docs/Model/UNUSEDEzsignfoldersignerassociationEditObjectV1Request.md)
- [UNUSEDEzsignfoldersignerassociationEditObjectV1Response](docs/Model/UNUSEDEzsignfoldersignerassociationEditObjectV1Response.md)
- [UNUSEDEzsignsignatureEditObjectV1Request](docs/Model/UNUSEDEzsignsignatureEditObjectV1Request.md)
- [UNUSEDEzsignsignatureEditObjectV1Response](docs/Model/UNUSEDEzsignsignatureEditObjectV1Response.md)
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

- API version: `1.0.46`
    - Package version: `1.0.46`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
