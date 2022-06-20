# eZmaxApi

This API expose all the functionnalities for the eZmax and eZsign applications.

For more information, please visit [https://www.ezmax.ca/en/contact](https://www.ezmax.ca/en/contact).

## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

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
$pksCustomerCode = 'pksCustomerCode_example'; // string
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
*ModuleEzsignApi* | [**ezsignSuggestSignersV1**](docs/Api/ModuleEzsignApi.md#ezsignsuggestsignersv1) | **GET** /1/module/ezsign/suggestSigners | Suggest signers
*ModuleEzsignApi* | [**ezsignSuggestTemplatesV1**](docs/Api/ModuleEzsignApi.md#ezsignsuggesttemplatesv1) | **GET** /1/module/ezsign/suggestTemplates | Suggest templates
*ModuleUserApi* | [**userCreateEzsignuserV1**](docs/Api/ModuleUserApi.md#usercreateezsignuserv1) | **POST** /1/module/user/createezsignuser | Create a new User of type Ezsignuser
*ObjectActivesessionApi* | [**activesessionGetCurrentV1**](docs/Api/ObjectActivesessionApi.md#activesessiongetcurrentv1) | **GET** /1/object/activesession/getCurrent | Get Current Activesession
*ObjectApikeyApi* | [**apikeyCreateObjectV1**](docs/Api/ObjectApikeyApi.md#apikeycreateobjectv1) | **POST** /1/object/apikey | Create a new Apikey
*ObjectApikeyApi* | [**apikeyCreateObjectV2**](docs/Api/ObjectApikeyApi.md#apikeycreateobjectv2) | **POST** /2/object/apikey | Create a new Apikey
*ObjectBillingentityinternalApi* | [**billingentityinternalGetAutocompleteV1**](docs/Api/ObjectBillingentityinternalApi.md#billingentityinternalgetautocompletev1) | **GET** /1/object/billingentityinternal/getAutocomplete/{sSelector} | Retrieve Billingentityinternals and IDs
*ObjectBrandingApi* | [**brandingGetAutocompleteV1**](docs/Api/ObjectBrandingApi.md#brandinggetautocompletev1) | **GET** /1/object/branding/getAutocomplete/{sSelector} | Retrieve Brandings and IDs
*ObjectEzsignbulksendApi* | [**ezsignbulksendCreateEzsignbulksendtransmissionV1**](docs/Api/ObjectEzsignbulksendApi.md#ezsignbulksendcreateezsignbulksendtransmissionv1) | **POST** /1/object/ezsignbulksend/{pkiEzsignbulksendID}/createEzsignbulksendtransmission | Create a new Ezsignbulksendtransmission in the Ezsignbulksend
*ObjectEzsignbulksendApi* | [**ezsignbulksendCreateObjectV1**](docs/Api/ObjectEzsignbulksendApi.md#ezsignbulksendcreateobjectv1) | **POST** /1/object/ezsignbulksend | Create a new Ezsignbulksend
*ObjectEzsignbulksendApi* | [**ezsignbulksendDeleteObjectV1**](docs/Api/ObjectEzsignbulksendApi.md#ezsignbulksenddeleteobjectv1) | **DELETE** /1/object/ezsignbulksend/{pkiEzsignbulksendID} | Delete an existing Ezsignbulksend
*ObjectEzsignbulksendApi* | [**ezsignbulksendEditObjectV1**](docs/Api/ObjectEzsignbulksendApi.md#ezsignbulksendeditobjectv1) | **PUT** /1/object/ezsignbulksend/{pkiEzsignbulksendID} | Edit an existing Ezsignbulksend
*ObjectEzsignbulksendApi* | [**ezsignbulksendGetCsvTemplateV1**](docs/Api/ObjectEzsignbulksendApi.md#ezsignbulksendgetcsvtemplatev1) | **GET** /1/object/ezsignbulksend/{pkiEzsignbulksendID}/getCsvTemplate | Retrieve an existing Ezsignbulksend&#39;s empty Csv template
*ObjectEzsignbulksendApi* | [**ezsignbulksendGetEzsignbulksendtransmissionsV1**](docs/Api/ObjectEzsignbulksendApi.md#ezsignbulksendgetezsignbulksendtransmissionsv1) | **GET** /1/object/ezsignbulksend/{pkiEzsignbulksendID}/getEzsignbulksendtransmissions | Retrieve an existing Ezsignbulksend&#39;s Ezsignbulksendtransmissions
*ObjectEzsignbulksendApi* | [**ezsignbulksendGetFormsDataV1**](docs/Api/ObjectEzsignbulksendApi.md#ezsignbulksendgetformsdatav1) | **GET** /1/object/ezsignbulksend/{pkiEzsignbulksendID}/getFormsData | Retrieve an existing Ezsignbulksend&#39;s forms data
*ObjectEzsignbulksendApi* | [**ezsignbulksendGetListV1**](docs/Api/ObjectEzsignbulksendApi.md#ezsignbulksendgetlistv1) | **GET** /1/object/ezsignbulksend/getList | Retrieve Ezsignbulksend list
*ObjectEzsignbulksendApi* | [**ezsignbulksendGetObjectV1**](docs/Api/ObjectEzsignbulksendApi.md#ezsignbulksendgetobjectv1) | **GET** /1/object/ezsignbulksend/{pkiEzsignbulksendID} | Retrieve an existing Ezsignbulksend
*ObjectEzsignbulksendApi* | [**ezsignbulksendReorderV1**](docs/Api/ObjectEzsignbulksendApi.md#ezsignbulksendreorderv1) | **POST** /1/object/ezsignbulksend/{pkiEzsignbulksendID}/reorder | Reorder Ezsignbulksenddocumentmappings in the Ezsignbulksend
*ObjectEzsignbulksenddocumentmappingApi* | [**ezsignbulksenddocumentmappingCreateObjectV1**](docs/Api/ObjectEzsignbulksenddocumentmappingApi.md#ezsignbulksenddocumentmappingcreateobjectv1) | **POST** /1/object/ezsignbulksenddocumentmapping | Create a new Ezsignbulksenddocumentmapping
*ObjectEzsignbulksenddocumentmappingApi* | [**ezsignbulksenddocumentmappingDeleteObjectV1**](docs/Api/ObjectEzsignbulksenddocumentmappingApi.md#ezsignbulksenddocumentmappingdeleteobjectv1) | **DELETE** /1/object/ezsignbulksenddocumentmapping/{pkiEzsignbulksenddocumentmappingID} | Delete an existing Ezsignbulksenddocumentmapping
*ObjectEzsignbulksenddocumentmappingApi* | [**ezsignbulksenddocumentmappingGetObjectV1**](docs/Api/ObjectEzsignbulksenddocumentmappingApi.md#ezsignbulksenddocumentmappinggetobjectv1) | **GET** /1/object/ezsignbulksenddocumentmapping/{pkiEzsignbulksenddocumentmappingID} | Retrieve an existing Ezsignbulksenddocumentmapping
*ObjectEzsignbulksendsignermappingApi* | [**ezsignbulksendsignermappingCreateObjectV1**](docs/Api/ObjectEzsignbulksendsignermappingApi.md#ezsignbulksendsignermappingcreateobjectv1) | **POST** /1/object/ezsignbulksendsignermapping | Create a new Ezsignbulksendsignermapping
*ObjectEzsignbulksendsignermappingApi* | [**ezsignbulksendsignermappingDeleteObjectV1**](docs/Api/ObjectEzsignbulksendsignermappingApi.md#ezsignbulksendsignermappingdeleteobjectv1) | **DELETE** /1/object/ezsignbulksendsignermapping/{pkiEzsignbulksendsignermappingID} | Delete an existing Ezsignbulksendsignermapping
*ObjectEzsignbulksendsignermappingApi* | [**ezsignbulksendsignermappingGetObjectV1**](docs/Api/ObjectEzsignbulksendsignermappingApi.md#ezsignbulksendsignermappinggetobjectv1) | **GET** /1/object/ezsignbulksendsignermapping/{pkiEzsignbulksendsignermappingID} | Retrieve an existing Ezsignbulksendsignermapping
*ObjectEzsignbulksendtransmissionApi* | [**ezsignbulksendtransmissionGetCsvErrorsV1**](docs/Api/ObjectEzsignbulksendtransmissionApi.md#ezsignbulksendtransmissiongetcsverrorsv1) | **GET** /1/object/ezsignbulksendtransmission/{pkiEzsignbulksendtransmissionID}/getCsvErrors | Retrieve an existing Ezsignbulksendtransmission&#39;s Csv containing errors
*ObjectEzsignbulksendtransmissionApi* | [**ezsignbulksendtransmissionGetFormsDataV1**](docs/Api/ObjectEzsignbulksendtransmissionApi.md#ezsignbulksendtransmissiongetformsdatav1) | **GET** /1/object/ezsignbulksendtransmission/{pkiEzsignbulksendtransmissionID}/getFormsData | Retrieve an existing Ezsignbulksendtransmission&#39;s forms data
*ObjectEzsignbulksendtransmissionApi* | [**ezsignbulksendtransmissionGetObjectV1**](docs/Api/ObjectEzsignbulksendtransmissionApi.md#ezsignbulksendtransmissiongetobjectv1) | **GET** /1/object/ezsignbulksendtransmission/{pkiEzsignbulksendtransmissionID} | Retrieve an existing Ezsignbulksendtransmission
*ObjectEzsigndocumentApi* | [**ezsigndocumentApplyEzsigntemplateV1**](docs/Api/ObjectEzsigndocumentApi.md#ezsigndocumentapplyezsigntemplatev1) | **POST** /1/object/ezsigndocument/{pkiEzsigndocumentID}/applyezsigntemplate | Apply an Ezsigntemplate to the Ezsigndocument.
*ObjectEzsigndocumentApi* | [**ezsigndocumentApplyEzsigntemplateV2**](docs/Api/ObjectEzsigndocumentApi.md#ezsigndocumentapplyezsigntemplatev2) | **POST** /2/object/ezsigndocument/{pkiEzsigndocumentID}/applyEzsigntemplate | Apply an Ezsigntemplate to the Ezsigndocument.
*ObjectEzsigndocumentApi* | [**ezsigndocumentCreateObjectV1**](docs/Api/ObjectEzsigndocumentApi.md#ezsigndocumentcreateobjectv1) | **POST** /1/object/ezsigndocument | Create a new Ezsigndocument
*ObjectEzsigndocumentApi* | [**ezsigndocumentCreateObjectV2**](docs/Api/ObjectEzsigndocumentApi.md#ezsigndocumentcreateobjectv2) | **POST** /2/object/ezsigndocument | Create a new Ezsigndocument
*ObjectEzsigndocumentApi* | [**ezsigndocumentDeleteObjectV1**](docs/Api/ObjectEzsigndocumentApi.md#ezsigndocumentdeleteobjectv1) | **DELETE** /1/object/ezsigndocument/{pkiEzsigndocumentID} | Delete an existing Ezsigndocument
*ObjectEzsigndocumentApi* | [**ezsigndocumentEditEzsignformfieldgroupsV1**](docs/Api/ObjectEzsigndocumentApi.md#ezsigndocumenteditezsignformfieldgroupsv1) | **PUT** /1/object/ezsigndocument/{pkiEzsigndocumentID}/editEzsignformfieldgroups | Edit multiple Ezsignformfieldgroups
*ObjectEzsigndocumentApi* | [**ezsigndocumentEditEzsignsignaturesV1**](docs/Api/ObjectEzsigndocumentApi.md#ezsigndocumenteditezsignsignaturesv1) | **PUT** /1/object/ezsigndocument/{pkiEzsigndocumentID}/editEzsignsignatures | Edit multiple Ezsignsignatures
*ObjectEzsigndocumentApi* | [**ezsigndocumentEndPrematurelyV1**](docs/Api/ObjectEzsigndocumentApi.md#ezsigndocumentendprematurelyv1) | **POST** /1/object/ezsigndocument/{pkiEzsigndocumentID}/endPrematurely | End prematurely
*ObjectEzsigndocumentApi* | [**ezsigndocumentGetActionableElementsV1**](docs/Api/ObjectEzsigndocumentApi.md#ezsigndocumentgetactionableelementsv1) | **GET** /1/object/ezsigndocument/{pkiEzsigndocumentID}/getActionableElements | Retrieve actionable elements for the Ezsigndocument
*ObjectEzsigndocumentApi* | [**ezsigndocumentGetDownloadUrlV1**](docs/Api/ObjectEzsigndocumentApi.md#ezsigndocumentgetdownloadurlv1) | **GET** /1/object/ezsigndocument/{pkiEzsigndocumentID}/getDownloadUrl/{eDocumentType} | Retrieve a URL to download documents.
*ObjectEzsigndocumentApi* | [**ezsigndocumentGetEzsignformfieldgroupsV1**](docs/Api/ObjectEzsigndocumentApi.md#ezsigndocumentgetezsignformfieldgroupsv1) | **GET** /1/object/ezsigndocument/{pkiEzsigndocumentID}/getEzsignformfieldgroups | Retrieve an existing Ezsigndocument&#39;s Ezsignformfieldgroups
*ObjectEzsigndocumentApi* | [**ezsigndocumentGetEzsignpagesV1**](docs/Api/ObjectEzsigndocumentApi.md#ezsigndocumentgetezsignpagesv1) | **GET** /1/object/ezsigndocument/{pkiEzsigndocumentID}/getEzsignpages | Retrieve an existing Ezsigndocument&#39;s Ezsignpages
*ObjectEzsigndocumentApi* | [**ezsigndocumentGetEzsignsignaturesV1**](docs/Api/ObjectEzsigndocumentApi.md#ezsigndocumentgetezsignsignaturesv1) | **GET** /1/object/ezsigndocument/{pkiEzsigndocumentID}/getEzsignsignatures | Retrieve an existing Ezsigndocument&#39;s Ezsignsignatures
*ObjectEzsigndocumentApi* | [**ezsigndocumentGetFormDataV1**](docs/Api/ObjectEzsigndocumentApi.md#ezsigndocumentgetformdatav1) | **GET** /1/object/ezsigndocument/{pkiEzsigndocumentID}/getFormData | Retrieve an existing Ezsigndocument&#39;s Form Data
*ObjectEzsigndocumentApi* | [**ezsigndocumentGetObjectV1**](docs/Api/ObjectEzsigndocumentApi.md#ezsigndocumentgetobjectv1) | **GET** /1/object/ezsigndocument/{pkiEzsigndocumentID} | Retrieve an existing Ezsigndocument
*ObjectEzsigndocumentApi* | [**ezsigndocumentGetTemporaryProofV1**](docs/Api/ObjectEzsigndocumentApi.md#ezsigndocumentgettemporaryproofv1) | **GET** /1/object/ezsigndocument/{pkiEzsigndocumentID}/getTemporaryProof | Retrieve the temporary proof
*ObjectEzsigndocumentApi* | [**ezsigndocumentGetWordsPositionsV1**](docs/Api/ObjectEzsigndocumentApi.md#ezsigndocumentgetwordspositionsv1) | **POST** /1/object/ezsigndocument/{pkiEzsigndocumentID}/getWordsPositions | Retrieve positions X,Y of given words from a Ezsigndocument
*ObjectEzsigndocumentApi* | [**ezsigndocumentPatchObjectV1**](docs/Api/ObjectEzsigndocumentApi.md#ezsigndocumentpatchobjectv1) | **PATCH** /1/object/ezsigndocument/{pkiEzsigndocumentID} | Patch an existing Ezsigndocument
*ObjectEzsigndocumentApi* | [**ezsigndocumentUnsendV1**](docs/Api/ObjectEzsigndocumentApi.md#ezsigndocumentunsendv1) | **POST** /1/object/ezsigndocument/{pkiEzsigndocumentID}/unsend | Unsend the Ezsigndocument
*ObjectEzsignfolderApi* | [**ezsignfolderArchiveV1**](docs/Api/ObjectEzsignfolderApi.md#ezsignfolderarchivev1) | **POST** /1/object/ezsignfolder/{pkiEzsignfolderID}/archive | Archive the Ezsignfolder
*ObjectEzsignfolderApi* | [**ezsignfolderBatchDownloadV1**](docs/Api/ObjectEzsignfolderApi.md#ezsignfolderbatchdownloadv1) | **POST** /1/object/ezsignfolder/{pkiEzsignfolderID}/batchDownload | Download multiples files from an Ezsignfolder
*ObjectEzsignfolderApi* | [**ezsignfolderCreateObjectV1**](docs/Api/ObjectEzsignfolderApi.md#ezsignfoldercreateobjectv1) | **POST** /1/object/ezsignfolder | Create a new Ezsignfolder
*ObjectEzsignfolderApi* | [**ezsignfolderCreateObjectV2**](docs/Api/ObjectEzsignfolderApi.md#ezsignfoldercreateobjectv2) | **POST** /2/object/ezsignfolder | Create a new Ezsignfolder
*ObjectEzsignfolderApi* | [**ezsignfolderDeleteObjectV1**](docs/Api/ObjectEzsignfolderApi.md#ezsignfolderdeleteobjectv1) | **DELETE** /1/object/ezsignfolder/{pkiEzsignfolderID} | Delete an existing Ezsignfolder
*ObjectEzsignfolderApi* | [**ezsignfolderDisposeEzsignfoldersV1**](docs/Api/ObjectEzsignfolderApi.md#ezsignfolderdisposeezsignfoldersv1) | **POST** /1/object/ezsignfolder/disposeEzsignfolders | Dispose Ezsignfolders
*ObjectEzsignfolderApi* | [**ezsignfolderDisposeV1**](docs/Api/ObjectEzsignfolderApi.md#ezsignfolderdisposev1) | **POST** /1/object/ezsignfolder/{pkiEzsignfolderID}/dispose | Dispose the Ezsignfolder
*ObjectEzsignfolderApi* | [**ezsignfolderEditObjectV1**](docs/Api/ObjectEzsignfolderApi.md#ezsignfoldereditobjectv1) | **PUT** /1/object/ezsignfolder/{pkiEzsignfolderID} | Edit an existing Ezsignfolder
*ObjectEzsignfolderApi* | [**ezsignfolderGetActionableElementsV1**](docs/Api/ObjectEzsignfolderApi.md#ezsignfoldergetactionableelementsv1) | **GET** /1/object/ezsignfolder/{pkiEzsignfolderID}/getActionableElements | Retrieve actionable elements for the Ezsignfolder
*ObjectEzsignfolderApi* | [**ezsignfolderGetEzsigndocumentsV1**](docs/Api/ObjectEzsignfolderApi.md#ezsignfoldergetezsigndocumentsv1) | **GET** /1/object/ezsignfolder/{pkiEzsignfolderID}/getEzsigndocuments | Retrieve an existing Ezsignfolder&#39;s Ezsigndocuments
*ObjectEzsignfolderApi* | [**ezsignfolderGetEzsignfoldersignerassociationsV1**](docs/Api/ObjectEzsignfolderApi.md#ezsignfoldergetezsignfoldersignerassociationsv1) | **GET** /1/object/ezsignfolder/{pkiEzsignfolderID}/getEzsignfoldersignerassociations | Retrieve an existing Ezsignfolder&#39;s Ezsignfoldersignerassociations
*ObjectEzsignfolderApi* | [**ezsignfolderGetFormsDataV1**](docs/Api/ObjectEzsignfolderApi.md#ezsignfoldergetformsdatav1) | **GET** /1/object/ezsignfolder/{pkiEzsignfolderID}/getFormsData | Retrieve an existing Ezsignfolder&#39;s forms data
*ObjectEzsignfolderApi* | [**ezsignfolderGetListV1**](docs/Api/ObjectEzsignfolderApi.md#ezsignfoldergetlistv1) | **GET** /1/object/ezsignfolder/getList | Retrieve Ezsignfolder list
*ObjectEzsignfolderApi* | [**ezsignfolderGetObjectV1**](docs/Api/ObjectEzsignfolderApi.md#ezsignfoldergetobjectv1) | **GET** /1/object/ezsignfolder/{pkiEzsignfolderID} | Retrieve an existing Ezsignfolder
*ObjectEzsignfolderApi* | [**ezsignfolderImportEzsigntemplatepackageV1**](docs/Api/ObjectEzsignfolderApi.md#ezsignfolderimportezsigntemplatepackagev1) | **POST** /1/object/ezsignfolder/{pkiEzsignfolderID}/importEzsigntemplatepackage | Import an Ezsigntemplatepackage in the Ezsignfolder.
*ObjectEzsignfolderApi* | [**ezsignfolderReorderV1**](docs/Api/ObjectEzsignfolderApi.md#ezsignfolderreorderv1) | **POST** /1/object/ezsignfolder/{pkiEzsignfolderID}/reorder | Reorder Ezsigndocuments in the Ezsignfolder
*ObjectEzsignfolderApi* | [**ezsignfolderSendV1**](docs/Api/ObjectEzsignfolderApi.md#ezsignfoldersendv1) | **POST** /1/object/ezsignfolder/{pkiEzsignfolderID}/send | Send the Ezsignfolder to the signatories for signature
*ObjectEzsignfolderApi* | [**ezsignfolderUnsendV1**](docs/Api/ObjectEzsignfolderApi.md#ezsignfolderunsendv1) | **POST** /1/object/ezsignfolder/{pkiEzsignfolderID}/unsend | Unsend the Ezsignfolder
*ObjectEzsignfoldersignerassociationApi* | [**ezsignfoldersignerassociationCreateObjectV1**](docs/Api/ObjectEzsignfoldersignerassociationApi.md#ezsignfoldersignerassociationcreateobjectv1) | **POST** /1/object/ezsignfoldersignerassociation | Create a new Ezsignfoldersignerassociation
*ObjectEzsignfoldersignerassociationApi* | [**ezsignfoldersignerassociationCreateObjectV2**](docs/Api/ObjectEzsignfoldersignerassociationApi.md#ezsignfoldersignerassociationcreateobjectv2) | **POST** /2/object/ezsignfoldersignerassociation | Create a new Ezsignfoldersignerassociation
*ObjectEzsignfoldersignerassociationApi* | [**ezsignfoldersignerassociationDeleteObjectV1**](docs/Api/ObjectEzsignfoldersignerassociationApi.md#ezsignfoldersignerassociationdeleteobjectv1) | **DELETE** /1/object/ezsignfoldersignerassociation/{pkiEzsignfoldersignerassociationID} | Delete an existing Ezsignfoldersignerassociation
*ObjectEzsignfoldersignerassociationApi* | [**ezsignfoldersignerassociationEditObjectV1**](docs/Api/ObjectEzsignfoldersignerassociationApi.md#ezsignfoldersignerassociationeditobjectv1) | **PUT** /1/object/ezsignfoldersignerassociation/{pkiEzsignfoldersignerassociationID} | Edit an existing Ezsignfoldersignerassociation
*ObjectEzsignfoldersignerassociationApi* | [**ezsignfoldersignerassociationGetInPersonLoginUrlV1**](docs/Api/ObjectEzsignfoldersignerassociationApi.md#ezsignfoldersignerassociationgetinpersonloginurlv1) | **GET** /1/object/ezsignfoldersignerassociation/{pkiEzsignfoldersignerassociationID}/getInPersonLoginUrl | Retrieve a Login Url to allow In-Person signing
*ObjectEzsignfoldersignerassociationApi* | [**ezsignfoldersignerassociationGetObjectV1**](docs/Api/ObjectEzsignfoldersignerassociationApi.md#ezsignfoldersignerassociationgetobjectv1) | **GET** /1/object/ezsignfoldersignerassociation/{pkiEzsignfoldersignerassociationID} | Retrieve an existing Ezsignfoldersignerassociation
*ObjectEzsignfoldertypeApi* | [**ezsignfoldertypeGetAutocompleteV1**](docs/Api/ObjectEzsignfoldertypeApi.md#ezsignfoldertypegetautocompletev1) | **GET** /1/object/ezsignfoldertype/getAutocomplete/{sSelector} | Retrieve Ezsignfoldertypes and IDs
*ObjectEzsignfoldertypeApi* | [**ezsignfoldertypeGetListV1**](docs/Api/ObjectEzsignfoldertypeApi.md#ezsignfoldertypegetlistv1) | **GET** /1/object/ezsignfoldertype/getList | Retrieve Ezsignfoldertype list
*ObjectEzsignformfieldgroupApi* | [**ezsignformfieldgroupCreateObjectV1**](docs/Api/ObjectEzsignformfieldgroupApi.md#ezsignformfieldgroupcreateobjectv1) | **POST** /1/object/ezsignformfieldgroup | Create a new Ezsignformfieldgroup
*ObjectEzsignformfieldgroupApi* | [**ezsignformfieldgroupDeleteObjectV1**](docs/Api/ObjectEzsignformfieldgroupApi.md#ezsignformfieldgroupdeleteobjectv1) | **DELETE** /1/object/ezsignformfieldgroup/{pkiEzsignformfieldgroupID} | Delete an existing Ezsignformfieldgroup
*ObjectEzsignformfieldgroupApi* | [**ezsignformfieldgroupEditObjectV1**](docs/Api/ObjectEzsignformfieldgroupApi.md#ezsignformfieldgroupeditobjectv1) | **PUT** /1/object/ezsignformfieldgroup/{pkiEzsignformfieldgroupID} | Edit an existing Ezsignformfieldgroup
*ObjectEzsignformfieldgroupApi* | [**ezsignformfieldgroupGetObjectV1**](docs/Api/ObjectEzsignformfieldgroupApi.md#ezsignformfieldgroupgetobjectv1) | **GET** /1/object/ezsignformfieldgroup/{pkiEzsignformfieldgroupID} | Retrieve an existing Ezsignformfieldgroup
*ObjectEzsignsignatureApi* | [**ezsignsignatureCreateObjectV1**](docs/Api/ObjectEzsignsignatureApi.md#ezsignsignaturecreateobjectv1) | **POST** /1/object/ezsignsignature | Create a new Ezsignsignature
*ObjectEzsignsignatureApi* | [**ezsignsignatureCreateObjectV2**](docs/Api/ObjectEzsignsignatureApi.md#ezsignsignaturecreateobjectv2) | **POST** /2/object/ezsignsignature | Create a new Ezsignsignature
*ObjectEzsignsignatureApi* | [**ezsignsignatureDeleteObjectV1**](docs/Api/ObjectEzsignsignatureApi.md#ezsignsignaturedeleteobjectv1) | **DELETE** /1/object/ezsignsignature/{pkiEzsignsignatureID} | Delete an existing Ezsignsignature
*ObjectEzsignsignatureApi* | [**ezsignsignatureEditObjectV1**](docs/Api/ObjectEzsignsignatureApi.md#ezsignsignatureeditobjectv1) | **PUT** /1/object/ezsignsignature/{pkiEzsignsignatureID} | Edit an existing Ezsignsignature
*ObjectEzsignsignatureApi* | [**ezsignsignatureGetObjectV1**](docs/Api/ObjectEzsignsignatureApi.md#ezsignsignaturegetobjectv1) | **GET** /1/object/ezsignsignature/{pkiEzsignsignatureID} | Retrieve an existing Ezsignsignature
*ObjectEzsignsignatureApi* | [**ezsignsignatureSignV1**](docs/Api/ObjectEzsignsignatureApi.md#ezsignsignaturesignv1) | **POST** /1/object/ezsignsignature/{pkiEzsignsignatureID}/sign | Sign the Ezsignsignature
*ObjectEzsigntemplateApi* | [**ezsigntemplateCreateObjectV1**](docs/Api/ObjectEzsigntemplateApi.md#ezsigntemplatecreateobjectv1) | **POST** /1/object/ezsigntemplate | Create a new Ezsigntemplate
*ObjectEzsigntemplateApi* | [**ezsigntemplateDeleteObjectV1**](docs/Api/ObjectEzsigntemplateApi.md#ezsigntemplatedeleteobjectv1) | **DELETE** /1/object/ezsigntemplate/{pkiEzsigntemplateID} | Delete an existing Ezsigntemplate
*ObjectEzsigntemplateApi* | [**ezsigntemplateEditObjectV1**](docs/Api/ObjectEzsigntemplateApi.md#ezsigntemplateeditobjectv1) | **PUT** /1/object/ezsigntemplate/{pkiEzsigntemplateID} | Edit an existing Ezsigntemplate
*ObjectEzsigntemplateApi* | [**ezsigntemplateGetAutocompleteV1**](docs/Api/ObjectEzsigntemplateApi.md#ezsigntemplategetautocompletev1) | **GET** /1/object/ezsigntemplate/getAutocomplete/{sSelector} | Retrieve Ezsigntemplate and IDs
*ObjectEzsigntemplateApi* | [**ezsigntemplateGetListV1**](docs/Api/ObjectEzsigntemplateApi.md#ezsigntemplategetlistv1) | **GET** /1/object/ezsigntemplate/getList | Retrieve Ezsigntemplate list
*ObjectEzsigntemplateApi* | [**ezsigntemplateGetObjectV1**](docs/Api/ObjectEzsigntemplateApi.md#ezsigntemplategetobjectv1) | **GET** /1/object/ezsigntemplate/{pkiEzsigntemplateID} | Retrieve an existing Ezsigntemplate
*ObjectEzsigntemplatedocumentApi* | [**ezsigntemplatedocumentCreateObjectV1**](docs/Api/ObjectEzsigntemplatedocumentApi.md#ezsigntemplatedocumentcreateobjectv1) | **POST** /1/object/ezsigntemplatedocument | Create a new Ezsigntemplatedocument
*ObjectEzsigntemplatedocumentApi* | [**ezsigntemplatedocumentEditEzsigntemplateformfieldgroupsV1**](docs/Api/ObjectEzsigntemplatedocumentApi.md#ezsigntemplatedocumenteditezsigntemplateformfieldgroupsv1) | **PUT** /1/object/ezsigntemplatedocument/{pkiEzsigntemplatedocumentID}/editEzsigntemplateformfieldgroups | Edit multiple Ezsigntemplateformfieldgroups
*ObjectEzsigntemplatedocumentApi* | [**ezsigntemplatedocumentEditEzsigntemplatesignaturesV1**](docs/Api/ObjectEzsigntemplatedocumentApi.md#ezsigntemplatedocumenteditezsigntemplatesignaturesv1) | **PUT** /1/object/ezsigntemplatedocument/{pkiEzsigntemplatedocumentID}/editEzsigntemplatesignatures | Edit multiple Ezsigntemplatesignatures
*ObjectEzsigntemplatedocumentApi* | [**ezsigntemplatedocumentEditObjectV1**](docs/Api/ObjectEzsigntemplatedocumentApi.md#ezsigntemplatedocumenteditobjectv1) | **PUT** /1/object/ezsigntemplatedocument/{pkiEzsigntemplatedocumentID} | Edit an existing Ezsigntemplatedocument
*ObjectEzsigntemplatedocumentApi* | [**ezsigntemplatedocumentGetEzsigntemplatedocumentpagesV1**](docs/Api/ObjectEzsigntemplatedocumentApi.md#ezsigntemplatedocumentgetezsigntemplatedocumentpagesv1) | **GET** /1/object/ezsigntemplatedocument/{pkiEzsigntemplatedocumentID}/getEzsigntemplatedocumentpages | Retrieve an existing Ezsigntemplatedocument&#39;s Ezsigntemplatedocumentpages
*ObjectEzsigntemplatedocumentApi* | [**ezsigntemplatedocumentGetEzsigntemplateformfieldgroupsV1**](docs/Api/ObjectEzsigntemplatedocumentApi.md#ezsigntemplatedocumentgetezsigntemplateformfieldgroupsv1) | **GET** /1/object/ezsigntemplatedocument/{pkiEzsigntemplatedocumentID}/getEzsigntemplateformfieldgroups | Retrieve an existing Ezsigntemplatedocument&#39;s Ezsigntemplateformfieldgroups
*ObjectEzsigntemplatedocumentApi* | [**ezsigntemplatedocumentGetEzsigntemplatesignaturesV1**](docs/Api/ObjectEzsigntemplatedocumentApi.md#ezsigntemplatedocumentgetezsigntemplatesignaturesv1) | **GET** /1/object/ezsigntemplatedocument/{pkiEzsigntemplatedocumentID}/getEzsigntemplatesignatures | Retrieve an existing Ezsigntemplatedocument&#39;s Ezsigntemplatesignatures
*ObjectEzsigntemplatedocumentApi* | [**ezsigntemplatedocumentGetObjectV1**](docs/Api/ObjectEzsigntemplatedocumentApi.md#ezsigntemplatedocumentgetobjectv1) | **GET** /1/object/ezsigntemplatedocument/{pkiEzsigntemplatedocumentID} | Retrieve an existing Ezsigntemplatedocument
*ObjectEzsigntemplatedocumentApi* | [**ezsigntemplatedocumentGetWordsPositionsV1**](docs/Api/ObjectEzsigntemplatedocumentApi.md#ezsigntemplatedocumentgetwordspositionsv1) | **POST** /1/object/ezsigntemplatedocument/{pkiEzsigntemplatedocumentID}/getWordsPositions | Retrieve positions X,Y of given words from a Ezsigntemplatedocument
*ObjectEzsigntemplatedocumentApi* | [**ezsigntemplatedocumentPatchObjectV1**](docs/Api/ObjectEzsigntemplatedocumentApi.md#ezsigntemplatedocumentpatchobjectv1) | **PATCH** /1/object/ezsigntemplatedocument/{pkiEzsigntemplatedocumentID} | Patch an existing Ezsigntemplatedocument
*ObjectEzsigntemplateformfieldgroupApi* | [**ezsigntemplateformfieldgroupCreateObjectV1**](docs/Api/ObjectEzsigntemplateformfieldgroupApi.md#ezsigntemplateformfieldgroupcreateobjectv1) | **POST** /1/object/ezsigntemplateformfieldgroup | Create a new Ezsigntemplateformfieldgroup
*ObjectEzsigntemplateformfieldgroupApi* | [**ezsigntemplateformfieldgroupDeleteObjectV1**](docs/Api/ObjectEzsigntemplateformfieldgroupApi.md#ezsigntemplateformfieldgroupdeleteobjectv1) | **DELETE** /1/object/ezsigntemplateformfieldgroup/{pkiEzsigntemplateformfieldgroupID} | Delete an existing Ezsigntemplateformfieldgroup
*ObjectEzsigntemplateformfieldgroupApi* | [**ezsigntemplateformfieldgroupEditObjectV1**](docs/Api/ObjectEzsigntemplateformfieldgroupApi.md#ezsigntemplateformfieldgroupeditobjectv1) | **PUT** /1/object/ezsigntemplateformfieldgroup/{pkiEzsigntemplateformfieldgroupID} | Edit an existing Ezsigntemplateformfieldgroup
*ObjectEzsigntemplateformfieldgroupApi* | [**ezsigntemplateformfieldgroupGetObjectV1**](docs/Api/ObjectEzsigntemplateformfieldgroupApi.md#ezsigntemplateformfieldgroupgetobjectv1) | **GET** /1/object/ezsigntemplateformfieldgroup/{pkiEzsigntemplateformfieldgroupID} | Retrieve an existing Ezsigntemplateformfieldgroup
*ObjectEzsigntemplatepackageApi* | [**ezsigntemplatepackageCreateObjectV1**](docs/Api/ObjectEzsigntemplatepackageApi.md#ezsigntemplatepackagecreateobjectv1) | **POST** /1/object/ezsigntemplatepackage | Create a new Ezsigntemplatepackage
*ObjectEzsigntemplatepackageApi* | [**ezsigntemplatepackageDeleteObjectV1**](docs/Api/ObjectEzsigntemplatepackageApi.md#ezsigntemplatepackagedeleteobjectv1) | **DELETE** /1/object/ezsigntemplatepackage/{pkiEzsigntemplatepackageID} | Delete an existing Ezsigntemplatepackage
*ObjectEzsigntemplatepackageApi* | [**ezsigntemplatepackageEditEzsigntemplatepackagesignersV1**](docs/Api/ObjectEzsigntemplatepackageApi.md#ezsigntemplatepackageeditezsigntemplatepackagesignersv1) | **PUT** /1/object/ezsigntemplatepackage/{pkiEzsigntemplatepackageID}/editEzsigntemplatepackagesigners | Edit multiple Ezsigntemplatepackagesigners
*ObjectEzsigntemplatepackageApi* | [**ezsigntemplatepackageEditObjectV1**](docs/Api/ObjectEzsigntemplatepackageApi.md#ezsigntemplatepackageeditobjectv1) | **PUT** /1/object/ezsigntemplatepackage/{pkiEzsigntemplatepackageID} | Edit an existing Ezsigntemplatepackage
*ObjectEzsigntemplatepackageApi* | [**ezsigntemplatepackageGetAutocompleteV1**](docs/Api/ObjectEzsigntemplatepackageApi.md#ezsigntemplatepackagegetautocompletev1) | **GET** /1/object/ezsigntemplatepackage/getAutocomplete/{sSelector} | Retrieve Ezsigntemplatepackages and IDs
*ObjectEzsigntemplatepackageApi* | [**ezsigntemplatepackageGetListV1**](docs/Api/ObjectEzsigntemplatepackageApi.md#ezsigntemplatepackagegetlistv1) | **GET** /1/object/ezsigntemplatepackage/getList | Retrieve Ezsigntemplatepackage list
*ObjectEzsigntemplatepackageApi* | [**ezsigntemplatepackageGetObjectV1**](docs/Api/ObjectEzsigntemplatepackageApi.md#ezsigntemplatepackagegetobjectv1) | **GET** /1/object/ezsigntemplatepackage/{pkiEzsigntemplatepackageID} | Retrieve an existing Ezsigntemplatepackage
*ObjectEzsigntemplatepackagemembershipApi* | [**ezsigntemplatepackagemembershipCreateObjectV1**](docs/Api/ObjectEzsigntemplatepackagemembershipApi.md#ezsigntemplatepackagemembershipcreateobjectv1) | **POST** /1/object/ezsigntemplatepackagemembership | Create a new Ezsigntemplatepackagemembership
*ObjectEzsigntemplatepackagemembershipApi* | [**ezsigntemplatepackagemembershipDeleteObjectV1**](docs/Api/ObjectEzsigntemplatepackagemembershipApi.md#ezsigntemplatepackagemembershipdeleteobjectv1) | **DELETE** /1/object/ezsigntemplatepackagemembership/{pkiEzsigntemplatepackagemembershipID} | Delete an existing Ezsigntemplatepackagemembership
*ObjectEzsigntemplatepackagemembershipApi* | [**ezsigntemplatepackagemembershipGetObjectV1**](docs/Api/ObjectEzsigntemplatepackagemembershipApi.md#ezsigntemplatepackagemembershipgetobjectv1) | **GET** /1/object/ezsigntemplatepackagemembership/{pkiEzsigntemplatepackagemembershipID} | Retrieve an existing Ezsigntemplatepackagemembership
*ObjectEzsigntemplatepackagesignerApi* | [**ezsigntemplatepackagesignerCreateObjectV1**](docs/Api/ObjectEzsigntemplatepackagesignerApi.md#ezsigntemplatepackagesignercreateobjectv1) | **POST** /1/object/ezsigntemplatepackagesigner | Create a new Ezsigntemplatepackagesigner
*ObjectEzsigntemplatepackagesignerApi* | [**ezsigntemplatepackagesignerDeleteObjectV1**](docs/Api/ObjectEzsigntemplatepackagesignerApi.md#ezsigntemplatepackagesignerdeleteobjectv1) | **DELETE** /1/object/ezsigntemplatepackagesigner/{pkiEzsigntemplatepackagesignerID} | Delete an existing Ezsigntemplatepackagesigner
*ObjectEzsigntemplatepackagesignerApi* | [**ezsigntemplatepackagesignerEditObjectV1**](docs/Api/ObjectEzsigntemplatepackagesignerApi.md#ezsigntemplatepackagesignereditobjectv1) | **PUT** /1/object/ezsigntemplatepackagesigner/{pkiEzsigntemplatepackagesignerID} | Edit an existing Ezsigntemplatepackagesigner
*ObjectEzsigntemplatepackagesignerApi* | [**ezsigntemplatepackagesignerGetObjectV1**](docs/Api/ObjectEzsigntemplatepackagesignerApi.md#ezsigntemplatepackagesignergetobjectv1) | **GET** /1/object/ezsigntemplatepackagesigner/{pkiEzsigntemplatepackagesignerID} | Retrieve an existing Ezsigntemplatepackagesigner
*ObjectEzsigntemplatepackagesignermembershipApi* | [**ezsigntemplatepackagesignermembershipCreateObjectV1**](docs/Api/ObjectEzsigntemplatepackagesignermembershipApi.md#ezsigntemplatepackagesignermembershipcreateobjectv1) | **POST** /1/object/ezsigntemplatepackagesignermembership | Create a new Ezsigntemplatepackagesignermembership
*ObjectEzsigntemplatepackagesignermembershipApi* | [**ezsigntemplatepackagesignermembershipDeleteObjectV1**](docs/Api/ObjectEzsigntemplatepackagesignermembershipApi.md#ezsigntemplatepackagesignermembershipdeleteobjectv1) | **DELETE** /1/object/ezsigntemplatepackagesignermembership/{pkiEzsigntemplatepackagesignermembershipID} | Delete an existing Ezsigntemplatepackagesignermembership
*ObjectEzsigntemplatepackagesignermembershipApi* | [**ezsigntemplatepackagesignermembershipGetObjectV1**](docs/Api/ObjectEzsigntemplatepackagesignermembershipApi.md#ezsigntemplatepackagesignermembershipgetobjectv1) | **GET** /1/object/ezsigntemplatepackagesignermembership/{pkiEzsigntemplatepackagesignermembershipID} | Retrieve an existing Ezsigntemplatepackagesignermembership
*ObjectEzsigntemplatesignatureApi* | [**ezsigntemplatesignatureCreateObjectV1**](docs/Api/ObjectEzsigntemplatesignatureApi.md#ezsigntemplatesignaturecreateobjectv1) | **POST** /1/object/ezsigntemplatesignature | Create a new Ezsigntemplatesignature
*ObjectEzsigntemplatesignatureApi* | [**ezsigntemplatesignatureDeleteObjectV1**](docs/Api/ObjectEzsigntemplatesignatureApi.md#ezsigntemplatesignaturedeleteobjectv1) | **DELETE** /1/object/ezsigntemplatesignature/{pkiEzsigntemplatesignatureID} | Delete an existing Ezsigntemplatesignature
*ObjectEzsigntemplatesignatureApi* | [**ezsigntemplatesignatureEditObjectV1**](docs/Api/ObjectEzsigntemplatesignatureApi.md#ezsigntemplatesignatureeditobjectv1) | **PUT** /1/object/ezsigntemplatesignature/{pkiEzsigntemplatesignatureID} | Edit an existing Ezsigntemplatesignature
*ObjectEzsigntemplatesignatureApi* | [**ezsigntemplatesignatureGetObjectV1**](docs/Api/ObjectEzsigntemplatesignatureApi.md#ezsigntemplatesignaturegetobjectv1) | **GET** /1/object/ezsigntemplatesignature/{pkiEzsigntemplatesignatureID} | Retrieve an existing Ezsigntemplatesignature
*ObjectEzsigntemplatesignerApi* | [**ezsigntemplatesignerCreateObjectV1**](docs/Api/ObjectEzsigntemplatesignerApi.md#ezsigntemplatesignercreateobjectv1) | **POST** /1/object/ezsigntemplatesigner | Create a new Ezsigntemplatesigner
*ObjectEzsigntemplatesignerApi* | [**ezsigntemplatesignerDeleteObjectV1**](docs/Api/ObjectEzsigntemplatesignerApi.md#ezsigntemplatesignerdeleteobjectv1) | **DELETE** /1/object/ezsigntemplatesigner/{pkiEzsigntemplatesignerID} | Delete an existing Ezsigntemplatesigner
*ObjectEzsigntemplatesignerApi* | [**ezsigntemplatesignerEditObjectV1**](docs/Api/ObjectEzsigntemplatesignerApi.md#ezsigntemplatesignereditobjectv1) | **PUT** /1/object/ezsigntemplatesigner/{pkiEzsigntemplatesignerID} | Edit an existing Ezsigntemplatesigner
*ObjectEzsigntemplatesignerApi* | [**ezsigntemplatesignerGetObjectV1**](docs/Api/ObjectEzsigntemplatesignerApi.md#ezsigntemplatesignergetobjectv1) | **GET** /1/object/ezsigntemplatesigner/{pkiEzsigntemplatesignerID} | Retrieve an existing Ezsigntemplatesigner
*ObjectEzsigntsarequirementApi* | [**ezsigntsarequirementGetAutocompleteV1**](docs/Api/ObjectEzsigntsarequirementApi.md#ezsigntsarequirementgetautocompletev1) | **GET** /1/object/ezsigntsarequirement/getAutocomplete/{sSelector} | Retrieve Ezsigntsarequirements and IDs
*ObjectFranchisebrokerApi* | [**franchisebrokerGetAutocompleteV1**](docs/Api/ObjectFranchisebrokerApi.md#franchisebrokergetautocompletev1) | **GET** /1/object/franchisebroker/getAutocomplete/{sSelector} | Retrieve Franchisebrokers and IDs
*ObjectFranchiseofficeApi* | [**franchiseofficeGetAutocompleteV1**](docs/Api/ObjectFranchiseofficeApi.md#franchiseofficegetautocompletev1) | **GET** /1/object/franchiseoffice/getAutocomplete/{sSelector} | Retrieve Franchiseoffices and IDs
*ObjectFranchisereferalincomeApi* | [**franchisereferalincomeCreateObjectV1**](docs/Api/ObjectFranchisereferalincomeApi.md#franchisereferalincomecreateobjectv1) | **POST** /1/object/franchisereferalincome | Create a new Franchisereferalincome
*ObjectFranchisereferalincomeApi* | [**franchisereferalincomeCreateObjectV2**](docs/Api/ObjectFranchisereferalincomeApi.md#franchisereferalincomecreateobjectv2) | **POST** /2/object/franchisereferalincome | Create a new Franchisereferalincome
*ObjectNotificationsectionApi* | [**notificationsectionGetNotificationtestsV1**](docs/Api/ObjectNotificationsectionApi.md#notificationsectiongetnotificationtestsv1) | **GET** /1/object/notificationsection/{pkiNotificationsectionID}/getNotificationtests | Retrieve an existing Notificationsection&#39;s Notificationtests
*ObjectNotificationtestApi* | [**notificationtestGetElementsV1**](docs/Api/ObjectNotificationtestApi.md#notificationtestgetelementsv1) | **GET** /1/object/notificationtest/{pkiNotificationtestID}/getElements | Retrieve an existing Notificationtest&#39;s Elements
*ObjectPeriodApi* | [**periodGetAutocompleteV1**](docs/Api/ObjectPeriodApi.md#periodgetautocompletev1) | **GET** /1/object/period/getAutocomplete/{sSelector} | Retrieve Periods and IDs
*ObjectSecretquestionApi* | [**secretquestionGetAutocompleteV1**](docs/Api/ObjectSecretquestionApi.md#secretquestiongetautocompletev1) | **GET** /1/object/secretquestion/getAutocomplete/{sSelector} | Retrieve Secretquestions and IDs
*ObjectTaxassignmentApi* | [**taxassignmentGetAutocompleteV1**](docs/Api/ObjectTaxassignmentApi.md#taxassignmentgetautocompletev1) | **GET** /1/object/taxassignment/getAutocomplete/{sSelector} | Retrieve Taxassignments and IDs
*ObjectTimezoneApi* | [**timezoneGetAutocompleteV1**](docs/Api/ObjectTimezoneApi.md#timezonegetautocompletev1) | **GET** /1/object/timezone/getAutocomplete/{sSelector} | Retrieve Timezones and IDs
*ObjectUserApi* | [**userGetAutocompleteV1**](docs/Api/ObjectUserApi.md#usergetautocompletev1) | **GET** /1/object/user/getAutocomplete/{sSelector} | Retrieve Users and IDs
*ObjectUsergroupApi* | [**usergroupGetAutocompleteV1**](docs/Api/ObjectUsergroupApi.md#usergroupgetautocompletev1) | **GET** /1/object/usergroup/getAutocomplete/{sSelector} | Retrieve Usergroups and IDs

## Models

- [ActivesessionGetCurrentV1Response](docs/Model/ActivesessionGetCurrentV1Response.md)
- [ActivesessionGetCurrentV1ResponseAllOf](docs/Model/ActivesessionGetCurrentV1ResponseAllOf.md)
- [ActivesessionGetCurrentV1ResponseMPayload](docs/Model/ActivesessionGetCurrentV1ResponseMPayload.md)
- [ActivesessionResponse](docs/Model/ActivesessionResponse.md)
- [ActivesessionResponseCompound](docs/Model/ActivesessionResponseCompound.md)
- [ActivesessionResponseCompoundAllOf](docs/Model/ActivesessionResponseCompoundAllOf.md)
- [ActivesessionResponseCompoundApikey](docs/Model/ActivesessionResponseCompoundApikey.md)
- [ActivesessionResponseCompoundUser](docs/Model/ActivesessionResponseCompoundUser.md)
- [AddressRequest](docs/Model/AddressRequest.md)
- [AddressRequestCompound](docs/Model/AddressRequestCompound.md)
- [ApikeyCreateObjectV1Request](docs/Model/ApikeyCreateObjectV1Request.md)
- [ApikeyCreateObjectV1Response](docs/Model/ApikeyCreateObjectV1Response.md)
- [ApikeyCreateObjectV1ResponseAllOf](docs/Model/ApikeyCreateObjectV1ResponseAllOf.md)
- [ApikeyCreateObjectV1ResponseMPayload](docs/Model/ApikeyCreateObjectV1ResponseMPayload.md)
- [ApikeyCreateObjectV2Request](docs/Model/ApikeyCreateObjectV2Request.md)
- [ApikeyCreateObjectV2Response](docs/Model/ApikeyCreateObjectV2Response.md)
- [ApikeyCreateObjectV2ResponseAllOf](docs/Model/ApikeyCreateObjectV2ResponseAllOf.md)
- [ApikeyCreateObjectV2ResponseMPayload](docs/Model/ApikeyCreateObjectV2ResponseMPayload.md)
- [ApikeyRequest](docs/Model/ApikeyRequest.md)
- [ApikeyRequestCompound](docs/Model/ApikeyRequestCompound.md)
- [ApikeyResponse](docs/Model/ApikeyResponse.md)
- [ApikeyResponseCompound](docs/Model/ApikeyResponseCompound.md)
- [AttemptResponse](docs/Model/AttemptResponse.md)
- [AttemptResponseCompound](docs/Model/AttemptResponseCompound.md)
- [CommonAudit](docs/Model/CommonAudit.md)
- [CommonAuditdetail](docs/Model/CommonAuditdetail.md)
- [CommonGetAutocompleteDisabledV1Response](docs/Model/CommonGetAutocompleteDisabledV1Response.md)
- [CommonGetAutocompleteDisabledV1ResponseAllOf](docs/Model/CommonGetAutocompleteDisabledV1ResponseAllOf.md)
- [CommonGetAutocompleteV1Response](docs/Model/CommonGetAutocompleteV1Response.md)
- [CommonGetAutocompleteV1ResponseAllOf](docs/Model/CommonGetAutocompleteV1ResponseAllOf.md)
- [CommonGetListV1ResponseMPayload](docs/Model/CommonGetListV1ResponseMPayload.md)
- [CommonResponse](docs/Model/CommonResponse.md)
- [CommonResponseError](docs/Model/CommonResponseError.md)
- [CommonResponseErrorSTemporaryFileUrl](docs/Model/CommonResponseErrorSTemporaryFileUrl.md)
- [CommonResponseErrorSTemporaryFileUrlAllOf](docs/Model/CommonResponseErrorSTemporaryFileUrlAllOf.md)
- [CommonResponseFilter](docs/Model/CommonResponseFilter.md)
- [CommonResponseGetList](docs/Model/CommonResponseGetList.md)
- [CommonResponseObjDebug](docs/Model/CommonResponseObjDebug.md)
- [CommonResponseObjDebugPayload](docs/Model/CommonResponseObjDebugPayload.md)
- [CommonResponseObjDebugPayloadGetList](docs/Model/CommonResponseObjDebugPayloadGetList.md)
- [CommonResponseObjDebugPayloadGetListAllOf](docs/Model/CommonResponseObjDebugPayloadGetListAllOf.md)
- [CommonResponseObjSQLQuery](docs/Model/CommonResponseObjSQLQuery.md)
- [CommonResponseRedirectSSecretquestionTextX](docs/Model/CommonResponseRedirectSSecretquestionTextX.md)
- [CommonResponseWarning](docs/Model/CommonResponseWarning.md)
- [CommonWebhook](docs/Model/CommonWebhook.md)
- [ContactRequest](docs/Model/ContactRequest.md)
- [ContactRequestCompound](docs/Model/ContactRequestCompound.md)
- [ContactRequestCompoundAllOf](docs/Model/ContactRequestCompoundAllOf.md)
- [ContactinformationsRequest](docs/Model/ContactinformationsRequest.md)
- [ContactinformationsRequestCompound](docs/Model/ContactinformationsRequestCompound.md)
- [ContactinformationsRequestCompoundAllOf](docs/Model/ContactinformationsRequestCompoundAllOf.md)
- [CustomAutocompleteElementDisabledResponse](docs/Model/CustomAutocompleteElementDisabledResponse.md)
- [CustomAutocompleteElementDisabledResponseAllOf](docs/Model/CustomAutocompleteElementDisabledResponseAllOf.md)
- [CustomAutocompleteElementResponse](docs/Model/CustomAutocompleteElementResponse.md)
- [CustomDropdownElementRequest](docs/Model/CustomDropdownElementRequest.md)
- [CustomDropdownElementRequestCompound](docs/Model/CustomDropdownElementRequestCompound.md)
- [CustomDropdownElementResponse](docs/Model/CustomDropdownElementResponse.md)
- [CustomDropdownElementResponseCompound](docs/Model/CustomDropdownElementResponseCompound.md)
- [CustomEzsignfoldersignerassociationstatusResponse](docs/Model/CustomEzsignfoldersignerassociationstatusResponse.md)
- [CustomEzsignfoldertransmissionResponse](docs/Model/CustomEzsignfoldertransmissionResponse.md)
- [CustomEzsignfoldertransmissionSignerResponse](docs/Model/CustomEzsignfoldertransmissionSignerResponse.md)
- [CustomEzsignsignaturestatusResponse](docs/Model/CustomEzsignsignaturestatusResponse.md)
- [CustomFormDataDocumentResponse](docs/Model/CustomFormDataDocumentResponse.md)
- [CustomFormDataEzsignformfieldResponse](docs/Model/CustomFormDataEzsignformfieldResponse.md)
- [CustomFormDataEzsignformfieldgroupResponse](docs/Model/CustomFormDataEzsignformfieldgroupResponse.md)
- [CustomFormDataSignerResponse](docs/Model/CustomFormDataSignerResponse.md)
- [CustomFormsDataFolderResponse](docs/Model/CustomFormsDataFolderResponse.md)
- [CustomImportEzsigntemplatepackageRelationRequest](docs/Model/CustomImportEzsigntemplatepackageRelationRequest.md)
- [CustomNotificationsubsectiongetnotificationtestsResponse](docs/Model/CustomNotificationsubsectiongetnotificationtestsResponse.md)
- [CustomNotificationsubsectiongetnotificationtestsResponseAllOf](docs/Model/CustomNotificationsubsectiongetnotificationtestsResponseAllOf.md)
- [CustomNotificationtestgetnotificationtestsResponse](docs/Model/CustomNotificationtestgetnotificationtestsResponse.md)
- [CustomNotificationtestgetnotificationtestsResponseAllOf](docs/Model/CustomNotificationtestgetnotificationtestsResponseAllOf.md)
- [CustomUserResponse](docs/Model/CustomUserResponse.md)
- [CustomWordPositionOccurenceResponse](docs/Model/CustomWordPositionOccurenceResponse.md)
- [CustomWordPositionWordResponse](docs/Model/CustomWordPositionWordResponse.md)
- [EmailRequest](docs/Model/EmailRequest.md)
- [EmailRequestCompound](docs/Model/EmailRequestCompound.md)
- [EzsignSuggestSignersV1Response](docs/Model/EzsignSuggestSignersV1Response.md)
- [EzsignSuggestSignersV1ResponseAllOf](docs/Model/EzsignSuggestSignersV1ResponseAllOf.md)
- [EzsignSuggestSignersV1ResponseMPayload](docs/Model/EzsignSuggestSignersV1ResponseMPayload.md)
- [EzsignSuggestTemplatesV1Response](docs/Model/EzsignSuggestTemplatesV1Response.md)
- [EzsignSuggestTemplatesV1ResponseAllOf](docs/Model/EzsignSuggestTemplatesV1ResponseAllOf.md)
- [EzsignSuggestTemplatesV1ResponseMPayload](docs/Model/EzsignSuggestTemplatesV1ResponseMPayload.md)
- [EzsignbulksendCreateEzsignbulksendtransmissionV1Request](docs/Model/EzsignbulksendCreateEzsignbulksendtransmissionV1Request.md)
- [EzsignbulksendCreateEzsignbulksendtransmissionV1Response](docs/Model/EzsignbulksendCreateEzsignbulksendtransmissionV1Response.md)
- [EzsignbulksendCreateEzsignbulksendtransmissionV1ResponseAllOf](docs/Model/EzsignbulksendCreateEzsignbulksendtransmissionV1ResponseAllOf.md)
- [EzsignbulksendCreateEzsignbulksendtransmissionV1ResponseMPayload](docs/Model/EzsignbulksendCreateEzsignbulksendtransmissionV1ResponseMPayload.md)
- [EzsignbulksendCreateObjectV1Request](docs/Model/EzsignbulksendCreateObjectV1Request.md)
- [EzsignbulksendCreateObjectV1Response](docs/Model/EzsignbulksendCreateObjectV1Response.md)
- [EzsignbulksendCreateObjectV1ResponseAllOf](docs/Model/EzsignbulksendCreateObjectV1ResponseAllOf.md)
- [EzsignbulksendCreateObjectV1ResponseMPayload](docs/Model/EzsignbulksendCreateObjectV1ResponseMPayload.md)
- [EzsignbulksendDeleteObjectV1Response](docs/Model/EzsignbulksendDeleteObjectV1Response.md)
- [EzsignbulksendEditObjectV1Request](docs/Model/EzsignbulksendEditObjectV1Request.md)
- [EzsignbulksendEditObjectV1Response](docs/Model/EzsignbulksendEditObjectV1Response.md)
- [EzsignbulksendGetEzsignbulksendtransmissionsV1Response](docs/Model/EzsignbulksendGetEzsignbulksendtransmissionsV1Response.md)
- [EzsignbulksendGetEzsignbulksendtransmissionsV1ResponseAllOf](docs/Model/EzsignbulksendGetEzsignbulksendtransmissionsV1ResponseAllOf.md)
- [EzsignbulksendGetEzsignbulksendtransmissionsV1ResponseMPayload](docs/Model/EzsignbulksendGetEzsignbulksendtransmissionsV1ResponseMPayload.md)
- [EzsignbulksendGetFormsDataV1Response](docs/Model/EzsignbulksendGetFormsDataV1Response.md)
- [EzsignbulksendGetFormsDataV1ResponseAllOf](docs/Model/EzsignbulksendGetFormsDataV1ResponseAllOf.md)
- [EzsignbulksendGetFormsDataV1ResponseMPayload](docs/Model/EzsignbulksendGetFormsDataV1ResponseMPayload.md)
- [EzsignbulksendGetListV1Response](docs/Model/EzsignbulksendGetListV1Response.md)
- [EzsignbulksendGetListV1ResponseAllOf](docs/Model/EzsignbulksendGetListV1ResponseAllOf.md)
- [EzsignbulksendGetListV1ResponseMPayload](docs/Model/EzsignbulksendGetListV1ResponseMPayload.md)
- [EzsignbulksendGetListV1ResponseMPayloadAllOf](docs/Model/EzsignbulksendGetListV1ResponseMPayloadAllOf.md)
- [EzsignbulksendGetObjectV1Response](docs/Model/EzsignbulksendGetObjectV1Response.md)
- [EzsignbulksendGetObjectV1ResponseAllOf](docs/Model/EzsignbulksendGetObjectV1ResponseAllOf.md)
- [EzsignbulksendGetObjectV1ResponseMPayload](docs/Model/EzsignbulksendGetObjectV1ResponseMPayload.md)
- [EzsignbulksendListElement](docs/Model/EzsignbulksendListElement.md)
- [EzsignbulksendReorderV1Request](docs/Model/EzsignbulksendReorderV1Request.md)
- [EzsignbulksendReorderV1Response](docs/Model/EzsignbulksendReorderV1Response.md)
- [EzsignbulksendRequest](docs/Model/EzsignbulksendRequest.md)
- [EzsignbulksendRequestCompound](docs/Model/EzsignbulksendRequestCompound.md)
- [EzsignbulksendResponse](docs/Model/EzsignbulksendResponse.md)
- [EzsignbulksendResponseCompound](docs/Model/EzsignbulksendResponseCompound.md)
- [EzsignbulksendResponseCompoundAllOf](docs/Model/EzsignbulksendResponseCompoundAllOf.md)
- [EzsignbulksenddocumentmappingCreateObjectV1Request](docs/Model/EzsignbulksenddocumentmappingCreateObjectV1Request.md)
- [EzsignbulksenddocumentmappingCreateObjectV1Response](docs/Model/EzsignbulksenddocumentmappingCreateObjectV1Response.md)
- [EzsignbulksenddocumentmappingCreateObjectV1ResponseAllOf](docs/Model/EzsignbulksenddocumentmappingCreateObjectV1ResponseAllOf.md)
- [EzsignbulksenddocumentmappingCreateObjectV1ResponseMPayload](docs/Model/EzsignbulksenddocumentmappingCreateObjectV1ResponseMPayload.md)
- [EzsignbulksenddocumentmappingDeleteObjectV1Response](docs/Model/EzsignbulksenddocumentmappingDeleteObjectV1Response.md)
- [EzsignbulksenddocumentmappingGetObjectV1Response](docs/Model/EzsignbulksenddocumentmappingGetObjectV1Response.md)
- [EzsignbulksenddocumentmappingGetObjectV1ResponseAllOf](docs/Model/EzsignbulksenddocumentmappingGetObjectV1ResponseAllOf.md)
- [EzsignbulksenddocumentmappingGetObjectV1ResponseMPayload](docs/Model/EzsignbulksenddocumentmappingGetObjectV1ResponseMPayload.md)
- [EzsignbulksenddocumentmappingRequest](docs/Model/EzsignbulksenddocumentmappingRequest.md)
- [EzsignbulksenddocumentmappingRequestCompound](docs/Model/EzsignbulksenddocumentmappingRequestCompound.md)
- [EzsignbulksenddocumentmappingResponse](docs/Model/EzsignbulksenddocumentmappingResponse.md)
- [EzsignbulksenddocumentmappingResponseCompound](docs/Model/EzsignbulksenddocumentmappingResponseCompound.md)
- [EzsignbulksenddocumentmappingResponseCompoundAllOf](docs/Model/EzsignbulksenddocumentmappingResponseCompoundAllOf.md)
- [EzsignbulksendsignermappingCreateObjectV1Request](docs/Model/EzsignbulksendsignermappingCreateObjectV1Request.md)
- [EzsignbulksendsignermappingCreateObjectV1Response](docs/Model/EzsignbulksendsignermappingCreateObjectV1Response.md)
- [EzsignbulksendsignermappingCreateObjectV1ResponseAllOf](docs/Model/EzsignbulksendsignermappingCreateObjectV1ResponseAllOf.md)
- [EzsignbulksendsignermappingCreateObjectV1ResponseMPayload](docs/Model/EzsignbulksendsignermappingCreateObjectV1ResponseMPayload.md)
- [EzsignbulksendsignermappingDeleteObjectV1Response](docs/Model/EzsignbulksendsignermappingDeleteObjectV1Response.md)
- [EzsignbulksendsignermappingGetObjectV1Response](docs/Model/EzsignbulksendsignermappingGetObjectV1Response.md)
- [EzsignbulksendsignermappingGetObjectV1ResponseAllOf](docs/Model/EzsignbulksendsignermappingGetObjectV1ResponseAllOf.md)
- [EzsignbulksendsignermappingGetObjectV1ResponseMPayload](docs/Model/EzsignbulksendsignermappingGetObjectV1ResponseMPayload.md)
- [EzsignbulksendsignermappingRequest](docs/Model/EzsignbulksendsignermappingRequest.md)
- [EzsignbulksendsignermappingRequestCompound](docs/Model/EzsignbulksendsignermappingRequestCompound.md)
- [EzsignbulksendsignermappingResponse](docs/Model/EzsignbulksendsignermappingResponse.md)
- [EzsignbulksendsignermappingResponseCompound](docs/Model/EzsignbulksendsignermappingResponseCompound.md)
- [EzsignbulksendtransmissionGetFormsDataV1Response](docs/Model/EzsignbulksendtransmissionGetFormsDataV1Response.md)
- [EzsignbulksendtransmissionGetFormsDataV1ResponseAllOf](docs/Model/EzsignbulksendtransmissionGetFormsDataV1ResponseAllOf.md)
- [EzsignbulksendtransmissionGetFormsDataV1ResponseMPayload](docs/Model/EzsignbulksendtransmissionGetFormsDataV1ResponseMPayload.md)
- [EzsignbulksendtransmissionGetObjectV1Response](docs/Model/EzsignbulksendtransmissionGetObjectV1Response.md)
- [EzsignbulksendtransmissionGetObjectV1ResponseAllOf](docs/Model/EzsignbulksendtransmissionGetObjectV1ResponseAllOf.md)
- [EzsignbulksendtransmissionGetObjectV1ResponseMPayload](docs/Model/EzsignbulksendtransmissionGetObjectV1ResponseMPayload.md)
- [EzsignbulksendtransmissionResponse](docs/Model/EzsignbulksendtransmissionResponse.md)
- [EzsignbulksendtransmissionResponseCompound](docs/Model/EzsignbulksendtransmissionResponseCompound.md)
- [EzsignbulksendtransmissionResponseCompoundAllOf](docs/Model/EzsignbulksendtransmissionResponseCompoundAllOf.md)
- [EzsigndocumentApplyEzsigntemplateV1Request](docs/Model/EzsigndocumentApplyEzsigntemplateV1Request.md)
- [EzsigndocumentApplyEzsigntemplateV1Response](docs/Model/EzsigndocumentApplyEzsigntemplateV1Response.md)
- [EzsigndocumentApplyEzsigntemplateV2Request](docs/Model/EzsigndocumentApplyEzsigntemplateV2Request.md)
- [EzsigndocumentApplyEzsigntemplateV2Response](docs/Model/EzsigndocumentApplyEzsigntemplateV2Response.md)
- [EzsigndocumentCreateObjectV1Request](docs/Model/EzsigndocumentCreateObjectV1Request.md)
- [EzsigndocumentCreateObjectV1Response](docs/Model/EzsigndocumentCreateObjectV1Response.md)
- [EzsigndocumentCreateObjectV1ResponseAllOf](docs/Model/EzsigndocumentCreateObjectV1ResponseAllOf.md)
- [EzsigndocumentCreateObjectV1ResponseMPayload](docs/Model/EzsigndocumentCreateObjectV1ResponseMPayload.md)
- [EzsigndocumentCreateObjectV2Request](docs/Model/EzsigndocumentCreateObjectV2Request.md)
- [EzsigndocumentCreateObjectV2Response](docs/Model/EzsigndocumentCreateObjectV2Response.md)
- [EzsigndocumentCreateObjectV2ResponseAllOf](docs/Model/EzsigndocumentCreateObjectV2ResponseAllOf.md)
- [EzsigndocumentCreateObjectV2ResponseMPayload](docs/Model/EzsigndocumentCreateObjectV2ResponseMPayload.md)
- [EzsigndocumentDeleteObjectV1Response](docs/Model/EzsigndocumentDeleteObjectV1Response.md)
- [EzsigndocumentEditEzsignformfieldgroupsV1Request](docs/Model/EzsigndocumentEditEzsignformfieldgroupsV1Request.md)
- [EzsigndocumentEditEzsignformfieldgroupsV1Response](docs/Model/EzsigndocumentEditEzsignformfieldgroupsV1Response.md)
- [EzsigndocumentEditEzsignformfieldgroupsV1ResponseAllOf](docs/Model/EzsigndocumentEditEzsignformfieldgroupsV1ResponseAllOf.md)
- [EzsigndocumentEditEzsignformfieldgroupsV1ResponseMPayload](docs/Model/EzsigndocumentEditEzsignformfieldgroupsV1ResponseMPayload.md)
- [EzsigndocumentEditEzsignsignaturesV1Request](docs/Model/EzsigndocumentEditEzsignsignaturesV1Request.md)
- [EzsigndocumentEditEzsignsignaturesV1Response](docs/Model/EzsigndocumentEditEzsignsignaturesV1Response.md)
- [EzsigndocumentEditEzsignsignaturesV1ResponseAllOf](docs/Model/EzsigndocumentEditEzsignsignaturesV1ResponseAllOf.md)
- [EzsigndocumentEditEzsignsignaturesV1ResponseMPayload](docs/Model/EzsigndocumentEditEzsignsignaturesV1ResponseMPayload.md)
- [EzsigndocumentEndPrematurelyV1Response](docs/Model/EzsigndocumentEndPrematurelyV1Response.md)
- [EzsigndocumentGetActionableElementsV1Response](docs/Model/EzsigndocumentGetActionableElementsV1Response.md)
- [EzsigndocumentGetActionableElementsV1ResponseAllOf](docs/Model/EzsigndocumentGetActionableElementsV1ResponseAllOf.md)
- [EzsigndocumentGetActionableElementsV1ResponseMPayload](docs/Model/EzsigndocumentGetActionableElementsV1ResponseMPayload.md)
- [EzsigndocumentGetDownloadUrlV1Response](docs/Model/EzsigndocumentGetDownloadUrlV1Response.md)
- [EzsigndocumentGetDownloadUrlV1ResponseAllOf](docs/Model/EzsigndocumentGetDownloadUrlV1ResponseAllOf.md)
- [EzsigndocumentGetDownloadUrlV1ResponseMPayload](docs/Model/EzsigndocumentGetDownloadUrlV1ResponseMPayload.md)
- [EzsigndocumentGetEzsignformfieldgroupsV1Response](docs/Model/EzsigndocumentGetEzsignformfieldgroupsV1Response.md)
- [EzsigndocumentGetEzsignformfieldgroupsV1ResponseAllOf](docs/Model/EzsigndocumentGetEzsignformfieldgroupsV1ResponseAllOf.md)
- [EzsigndocumentGetEzsignformfieldgroupsV1ResponseMPayload](docs/Model/EzsigndocumentGetEzsignformfieldgroupsV1ResponseMPayload.md)
- [EzsigndocumentGetEzsignpagesV1Response](docs/Model/EzsigndocumentGetEzsignpagesV1Response.md)
- [EzsigndocumentGetEzsignpagesV1ResponseAllOf](docs/Model/EzsigndocumentGetEzsignpagesV1ResponseAllOf.md)
- [EzsigndocumentGetEzsignpagesV1ResponseMPayload](docs/Model/EzsigndocumentGetEzsignpagesV1ResponseMPayload.md)
- [EzsigndocumentGetEzsignsignaturesV1Response](docs/Model/EzsigndocumentGetEzsignsignaturesV1Response.md)
- [EzsigndocumentGetEzsignsignaturesV1ResponseAllOf](docs/Model/EzsigndocumentGetEzsignsignaturesV1ResponseAllOf.md)
- [EzsigndocumentGetEzsignsignaturesV1ResponseMPayload](docs/Model/EzsigndocumentGetEzsignsignaturesV1ResponseMPayload.md)
- [EzsigndocumentGetFormDataV1Response](docs/Model/EzsigndocumentGetFormDataV1Response.md)
- [EzsigndocumentGetFormDataV1ResponseAllOf](docs/Model/EzsigndocumentGetFormDataV1ResponseAllOf.md)
- [EzsigndocumentGetFormDataV1ResponseMPayload](docs/Model/EzsigndocumentGetFormDataV1ResponseMPayload.md)
- [EzsigndocumentGetObjectV1Response](docs/Model/EzsigndocumentGetObjectV1Response.md)
- [EzsigndocumentGetObjectV1ResponseAllOf](docs/Model/EzsigndocumentGetObjectV1ResponseAllOf.md)
- [EzsigndocumentGetObjectV1ResponseMPayload](docs/Model/EzsigndocumentGetObjectV1ResponseMPayload.md)
- [EzsigndocumentGetTemporaryProofV1Response](docs/Model/EzsigndocumentGetTemporaryProofV1Response.md)
- [EzsigndocumentGetTemporaryProofV1ResponseAllOf](docs/Model/EzsigndocumentGetTemporaryProofV1ResponseAllOf.md)
- [EzsigndocumentGetTemporaryProofV1ResponseMPayload](docs/Model/EzsigndocumentGetTemporaryProofV1ResponseMPayload.md)
- [EzsigndocumentGetWordsPositionsV1Request](docs/Model/EzsigndocumentGetWordsPositionsV1Request.md)
- [EzsigndocumentGetWordsPositionsV1Response](docs/Model/EzsigndocumentGetWordsPositionsV1Response.md)
- [EzsigndocumentGetWordsPositionsV1ResponseAllOf](docs/Model/EzsigndocumentGetWordsPositionsV1ResponseAllOf.md)
- [EzsigndocumentPatchObjectV1Request](docs/Model/EzsigndocumentPatchObjectV1Request.md)
- [EzsigndocumentPatchObjectV1Response](docs/Model/EzsigndocumentPatchObjectV1Response.md)
- [EzsigndocumentRequest](docs/Model/EzsigndocumentRequest.md)
- [EzsigndocumentRequestCompound](docs/Model/EzsigndocumentRequestCompound.md)
- [EzsigndocumentRequestPatch](docs/Model/EzsigndocumentRequestPatch.md)
- [EzsigndocumentResponse](docs/Model/EzsigndocumentResponse.md)
- [EzsigndocumentResponseCompound](docs/Model/EzsigndocumentResponseCompound.md)
- [EzsigndocumentResponseCompoundAllOf](docs/Model/EzsigndocumentResponseCompoundAllOf.md)
- [EzsigndocumentUnsendV1Response](docs/Model/EzsigndocumentUnsendV1Response.md)
- [EzsigndocumentlogResponse](docs/Model/EzsigndocumentlogResponse.md)
- [EzsigndocumentlogResponseCompound](docs/Model/EzsigndocumentlogResponseCompound.md)
- [EzsignfolderArchiveV1Response](docs/Model/EzsignfolderArchiveV1Response.md)
- [EzsignfolderBatchDownloadV1Request](docs/Model/EzsignfolderBatchDownloadV1Request.md)
- [EzsignfolderCreateObjectV1Request](docs/Model/EzsignfolderCreateObjectV1Request.md)
- [EzsignfolderCreateObjectV1Response](docs/Model/EzsignfolderCreateObjectV1Response.md)
- [EzsignfolderCreateObjectV1ResponseAllOf](docs/Model/EzsignfolderCreateObjectV1ResponseAllOf.md)
- [EzsignfolderCreateObjectV1ResponseMPayload](docs/Model/EzsignfolderCreateObjectV1ResponseMPayload.md)
- [EzsignfolderCreateObjectV2Request](docs/Model/EzsignfolderCreateObjectV2Request.md)
- [EzsignfolderCreateObjectV2Response](docs/Model/EzsignfolderCreateObjectV2Response.md)
- [EzsignfolderCreateObjectV2ResponseAllOf](docs/Model/EzsignfolderCreateObjectV2ResponseAllOf.md)
- [EzsignfolderCreateObjectV2ResponseMPayload](docs/Model/EzsignfolderCreateObjectV2ResponseMPayload.md)
- [EzsignfolderDeleteObjectV1Response](docs/Model/EzsignfolderDeleteObjectV1Response.md)
- [EzsignfolderDisposeEzsignfoldersV1Request](docs/Model/EzsignfolderDisposeEzsignfoldersV1Request.md)
- [EzsignfolderDisposeEzsignfoldersV1Response](docs/Model/EzsignfolderDisposeEzsignfoldersV1Response.md)
- [EzsignfolderDisposeV1Response](docs/Model/EzsignfolderDisposeV1Response.md)
- [EzsignfolderEditObjectV1Request](docs/Model/EzsignfolderEditObjectV1Request.md)
- [EzsignfolderEditObjectV1Response](docs/Model/EzsignfolderEditObjectV1Response.md)
- [EzsignfolderGetActionableElementsV1Response](docs/Model/EzsignfolderGetActionableElementsV1Response.md)
- [EzsignfolderGetActionableElementsV1ResponseAllOf](docs/Model/EzsignfolderGetActionableElementsV1ResponseAllOf.md)
- [EzsignfolderGetActionableElementsV1ResponseMPayload](docs/Model/EzsignfolderGetActionableElementsV1ResponseMPayload.md)
- [EzsignfolderGetEzsigndocumentsV1Response](docs/Model/EzsignfolderGetEzsigndocumentsV1Response.md)
- [EzsignfolderGetEzsigndocumentsV1ResponseAllOf](docs/Model/EzsignfolderGetEzsigndocumentsV1ResponseAllOf.md)
- [EzsignfolderGetEzsigndocumentsV1ResponseMPayload](docs/Model/EzsignfolderGetEzsigndocumentsV1ResponseMPayload.md)
- [EzsignfolderGetEzsignfoldersignerassociationsV1Response](docs/Model/EzsignfolderGetEzsignfoldersignerassociationsV1Response.md)
- [EzsignfolderGetEzsignfoldersignerassociationsV1ResponseAllOf](docs/Model/EzsignfolderGetEzsignfoldersignerassociationsV1ResponseAllOf.md)
- [EzsignfolderGetEzsignfoldersignerassociationsV1ResponseMPayload](docs/Model/EzsignfolderGetEzsignfoldersignerassociationsV1ResponseMPayload.md)
- [EzsignfolderGetFormsDataV1Response](docs/Model/EzsignfolderGetFormsDataV1Response.md)
- [EzsignfolderGetFormsDataV1ResponseAllOf](docs/Model/EzsignfolderGetFormsDataV1ResponseAllOf.md)
- [EzsignfolderGetFormsDataV1ResponseMPayload](docs/Model/EzsignfolderGetFormsDataV1ResponseMPayload.md)
- [EzsignfolderGetListV1Response](docs/Model/EzsignfolderGetListV1Response.md)
- [EzsignfolderGetListV1ResponseAllOf](docs/Model/EzsignfolderGetListV1ResponseAllOf.md)
- [EzsignfolderGetListV1ResponseMPayload](docs/Model/EzsignfolderGetListV1ResponseMPayload.md)
- [EzsignfolderGetListV1ResponseMPayloadAllOf](docs/Model/EzsignfolderGetListV1ResponseMPayloadAllOf.md)
- [EzsignfolderGetObjectV1Response](docs/Model/EzsignfolderGetObjectV1Response.md)
- [EzsignfolderGetObjectV1ResponseAllOf](docs/Model/EzsignfolderGetObjectV1ResponseAllOf.md)
- [EzsignfolderGetObjectV1ResponseMPayload](docs/Model/EzsignfolderGetObjectV1ResponseMPayload.md)
- [EzsignfolderImportEzsigntemplatepackageV1Request](docs/Model/EzsignfolderImportEzsigntemplatepackageV1Request.md)
- [EzsignfolderImportEzsigntemplatepackageV1Response](docs/Model/EzsignfolderImportEzsigntemplatepackageV1Response.md)
- [EzsignfolderImportEzsigntemplatepackageV1ResponseAllOf](docs/Model/EzsignfolderImportEzsigntemplatepackageV1ResponseAllOf.md)
- [EzsignfolderImportEzsigntemplatepackageV1ResponseMPayload](docs/Model/EzsignfolderImportEzsigntemplatepackageV1ResponseMPayload.md)
- [EzsignfolderListElement](docs/Model/EzsignfolderListElement.md)
- [EzsignfolderReorderV1Request](docs/Model/EzsignfolderReorderV1Request.md)
- [EzsignfolderReorderV1Response](docs/Model/EzsignfolderReorderV1Response.md)
- [EzsignfolderRequest](docs/Model/EzsignfolderRequest.md)
- [EzsignfolderRequestCompound](docs/Model/EzsignfolderRequestCompound.md)
- [EzsignfolderResponse](docs/Model/EzsignfolderResponse.md)
- [EzsignfolderResponseCompound](docs/Model/EzsignfolderResponseCompound.md)
- [EzsignfolderSendV1Request](docs/Model/EzsignfolderSendV1Request.md)
- [EzsignfolderSendV1Response](docs/Model/EzsignfolderSendV1Response.md)
- [EzsignfolderUnsendV1Response](docs/Model/EzsignfolderUnsendV1Response.md)
- [EzsignfoldersignerassociationCreateObjectV1Request](docs/Model/EzsignfoldersignerassociationCreateObjectV1Request.md)
- [EzsignfoldersignerassociationCreateObjectV1Response](docs/Model/EzsignfoldersignerassociationCreateObjectV1Response.md)
- [EzsignfoldersignerassociationCreateObjectV1ResponseAllOf](docs/Model/EzsignfoldersignerassociationCreateObjectV1ResponseAllOf.md)
- [EzsignfoldersignerassociationCreateObjectV1ResponseMPayload](docs/Model/EzsignfoldersignerassociationCreateObjectV1ResponseMPayload.md)
- [EzsignfoldersignerassociationCreateObjectV2Request](docs/Model/EzsignfoldersignerassociationCreateObjectV2Request.md)
- [EzsignfoldersignerassociationCreateObjectV2Response](docs/Model/EzsignfoldersignerassociationCreateObjectV2Response.md)
- [EzsignfoldersignerassociationCreateObjectV2ResponseAllOf](docs/Model/EzsignfoldersignerassociationCreateObjectV2ResponseAllOf.md)
- [EzsignfoldersignerassociationCreateObjectV2ResponseMPayload](docs/Model/EzsignfoldersignerassociationCreateObjectV2ResponseMPayload.md)
- [EzsignfoldersignerassociationDeleteObjectV1Response](docs/Model/EzsignfoldersignerassociationDeleteObjectV1Response.md)
- [EzsignfoldersignerassociationEditObjectV1Request](docs/Model/EzsignfoldersignerassociationEditObjectV1Request.md)
- [EzsignfoldersignerassociationEditObjectV1Response](docs/Model/EzsignfoldersignerassociationEditObjectV1Response.md)
- [EzsignfoldersignerassociationGetInPersonLoginUrlV1Response](docs/Model/EzsignfoldersignerassociationGetInPersonLoginUrlV1Response.md)
- [EzsignfoldersignerassociationGetInPersonLoginUrlV1ResponseAllOf](docs/Model/EzsignfoldersignerassociationGetInPersonLoginUrlV1ResponseAllOf.md)
- [EzsignfoldersignerassociationGetInPersonLoginUrlV1ResponseMPayload](docs/Model/EzsignfoldersignerassociationGetInPersonLoginUrlV1ResponseMPayload.md)
- [EzsignfoldersignerassociationGetObjectV1Response](docs/Model/EzsignfoldersignerassociationGetObjectV1Response.md)
- [EzsignfoldersignerassociationGetObjectV1ResponseAllOf](docs/Model/EzsignfoldersignerassociationGetObjectV1ResponseAllOf.md)
- [EzsignfoldersignerassociationGetObjectV1ResponseMPayload](docs/Model/EzsignfoldersignerassociationGetObjectV1ResponseMPayload.md)
- [EzsignfoldersignerassociationRequest](docs/Model/EzsignfoldersignerassociationRequest.md)
- [EzsignfoldersignerassociationRequestCompound](docs/Model/EzsignfoldersignerassociationRequestCompound.md)
- [EzsignfoldersignerassociationRequestCompoundAllOf](docs/Model/EzsignfoldersignerassociationRequestCompoundAllOf.md)
- [EzsignfoldersignerassociationResponse](docs/Model/EzsignfoldersignerassociationResponse.md)
- [EzsignfoldersignerassociationResponseCompound](docs/Model/EzsignfoldersignerassociationResponseCompound.md)
- [EzsignfoldersignerassociationResponseCompoundAllOf](docs/Model/EzsignfoldersignerassociationResponseCompoundAllOf.md)
- [EzsignfoldersignerassociationResponseCompoundUser](docs/Model/EzsignfoldersignerassociationResponseCompoundUser.md)
- [EzsignfoldertypeGetListV1Response](docs/Model/EzsignfoldertypeGetListV1Response.md)
- [EzsignfoldertypeGetListV1ResponseAllOf](docs/Model/EzsignfoldertypeGetListV1ResponseAllOf.md)
- [EzsignfoldertypeGetListV1ResponseMPayload](docs/Model/EzsignfoldertypeGetListV1ResponseMPayload.md)
- [EzsignfoldertypeGetListV1ResponseMPayloadAllOf](docs/Model/EzsignfoldertypeGetListV1ResponseMPayloadAllOf.md)
- [EzsignfoldertypeListElement](docs/Model/EzsignfoldertypeListElement.md)
- [EzsignformfieldRequest](docs/Model/EzsignformfieldRequest.md)
- [EzsignformfieldRequestCompound](docs/Model/EzsignformfieldRequestCompound.md)
- [EzsignformfieldResponse](docs/Model/EzsignformfieldResponse.md)
- [EzsignformfieldResponseCompound](docs/Model/EzsignformfieldResponseCompound.md)
- [EzsignformfieldgroupCreateObjectV1Request](docs/Model/EzsignformfieldgroupCreateObjectV1Request.md)
- [EzsignformfieldgroupCreateObjectV1Response](docs/Model/EzsignformfieldgroupCreateObjectV1Response.md)
- [EzsignformfieldgroupCreateObjectV1ResponseAllOf](docs/Model/EzsignformfieldgroupCreateObjectV1ResponseAllOf.md)
- [EzsignformfieldgroupCreateObjectV1ResponseMPayload](docs/Model/EzsignformfieldgroupCreateObjectV1ResponseMPayload.md)
- [EzsignformfieldgroupDeleteObjectV1Response](docs/Model/EzsignformfieldgroupDeleteObjectV1Response.md)
- [EzsignformfieldgroupEditObjectV1Request](docs/Model/EzsignformfieldgroupEditObjectV1Request.md)
- [EzsignformfieldgroupEditObjectV1Response](docs/Model/EzsignformfieldgroupEditObjectV1Response.md)
- [EzsignformfieldgroupGetObjectV1Response](docs/Model/EzsignformfieldgroupGetObjectV1Response.md)
- [EzsignformfieldgroupGetObjectV1ResponseAllOf](docs/Model/EzsignformfieldgroupGetObjectV1ResponseAllOf.md)
- [EzsignformfieldgroupGetObjectV1ResponseMPayload](docs/Model/EzsignformfieldgroupGetObjectV1ResponseMPayload.md)
- [EzsignformfieldgroupRequest](docs/Model/EzsignformfieldgroupRequest.md)
- [EzsignformfieldgroupRequestCompound](docs/Model/EzsignformfieldgroupRequestCompound.md)
- [EzsignformfieldgroupRequestCompoundAllOf](docs/Model/EzsignformfieldgroupRequestCompoundAllOf.md)
- [EzsignformfieldgroupResponse](docs/Model/EzsignformfieldgroupResponse.md)
- [EzsignformfieldgroupResponseCompound](docs/Model/EzsignformfieldgroupResponseCompound.md)
- [EzsignformfieldgroupResponseCompoundAllOf](docs/Model/EzsignformfieldgroupResponseCompoundAllOf.md)
- [EzsignformfieldgroupsignerRequest](docs/Model/EzsignformfieldgroupsignerRequest.md)
- [EzsignformfieldgroupsignerRequestCompound](docs/Model/EzsignformfieldgroupsignerRequestCompound.md)
- [EzsignformfieldgroupsignerResponse](docs/Model/EzsignformfieldgroupsignerResponse.md)
- [EzsignformfieldgroupsignerResponseCompound](docs/Model/EzsignformfieldgroupsignerResponseCompound.md)
- [EzsignpageResponse](docs/Model/EzsignpageResponse.md)
- [EzsignpageResponseCompound](docs/Model/EzsignpageResponseCompound.md)
- [EzsignsignatureCreateObjectV1Request](docs/Model/EzsignsignatureCreateObjectV1Request.md)
- [EzsignsignatureCreateObjectV1Response](docs/Model/EzsignsignatureCreateObjectV1Response.md)
- [EzsignsignatureCreateObjectV1ResponseAllOf](docs/Model/EzsignsignatureCreateObjectV1ResponseAllOf.md)
- [EzsignsignatureCreateObjectV1ResponseMPayload](docs/Model/EzsignsignatureCreateObjectV1ResponseMPayload.md)
- [EzsignsignatureCreateObjectV2Request](docs/Model/EzsignsignatureCreateObjectV2Request.md)
- [EzsignsignatureCreateObjectV2Response](docs/Model/EzsignsignatureCreateObjectV2Response.md)
- [EzsignsignatureCreateObjectV2ResponseAllOf](docs/Model/EzsignsignatureCreateObjectV2ResponseAllOf.md)
- [EzsignsignatureCreateObjectV2ResponseMPayload](docs/Model/EzsignsignatureCreateObjectV2ResponseMPayload.md)
- [EzsignsignatureDeleteObjectV1Response](docs/Model/EzsignsignatureDeleteObjectV1Response.md)
- [EzsignsignatureEditObjectV1Request](docs/Model/EzsignsignatureEditObjectV1Request.md)
- [EzsignsignatureEditObjectV1Response](docs/Model/EzsignsignatureEditObjectV1Response.md)
- [EzsignsignatureGetObjectV1Response](docs/Model/EzsignsignatureGetObjectV1Response.md)
- [EzsignsignatureGetObjectV1ResponseAllOf](docs/Model/EzsignsignatureGetObjectV1ResponseAllOf.md)
- [EzsignsignatureGetObjectV1ResponseMPayload](docs/Model/EzsignsignatureGetObjectV1ResponseMPayload.md)
- [EzsignsignatureRequest](docs/Model/EzsignsignatureRequest.md)
- [EzsignsignatureRequestCompound](docs/Model/EzsignsignatureRequestCompound.md)
- [EzsignsignatureRequestCompoundAllOf](docs/Model/EzsignsignatureRequestCompoundAllOf.md)
- [EzsignsignatureResponse](docs/Model/EzsignsignatureResponse.md)
- [EzsignsignatureResponseCompound](docs/Model/EzsignsignatureResponseCompound.md)
- [EzsignsignatureResponseCompoundAllOf](docs/Model/EzsignsignatureResponseCompoundAllOf.md)
- [EzsignsignatureSignV1Request](docs/Model/EzsignsignatureSignV1Request.md)
- [EzsignsignatureSignV1Response](docs/Model/EzsignsignatureSignV1Response.md)
- [EzsignsignatureSignV1ResponseAllOf](docs/Model/EzsignsignatureSignV1ResponseAllOf.md)
- [EzsignsignaturecustomdateRequest](docs/Model/EzsignsignaturecustomdateRequest.md)
- [EzsignsignaturecustomdateRequestCompound](docs/Model/EzsignsignaturecustomdateRequestCompound.md)
- [EzsignsignaturecustomdateResponse](docs/Model/EzsignsignaturecustomdateResponse.md)
- [EzsignsignaturecustomdateResponseCompound](docs/Model/EzsignsignaturecustomdateResponseCompound.md)
- [EzsignsignerRequest](docs/Model/EzsignsignerRequest.md)
- [EzsignsignerRequestCompound](docs/Model/EzsignsignerRequestCompound.md)
- [EzsignsignerRequestCompoundAllOf](docs/Model/EzsignsignerRequestCompoundAllOf.md)
- [EzsignsignerRequestCompoundContact](docs/Model/EzsignsignerRequestCompoundContact.md)
- [EzsignsignerResponse](docs/Model/EzsignsignerResponse.md)
- [EzsignsignerResponseCompound](docs/Model/EzsignsignerResponseCompound.md)
- [EzsignsignerResponseCompoundAllOf](docs/Model/EzsignsignerResponseCompoundAllOf.md)
- [EzsignsignerResponseCompoundContact](docs/Model/EzsignsignerResponseCompoundContact.md)
- [EzsigntemplateCreateObjectV1Request](docs/Model/EzsigntemplateCreateObjectV1Request.md)
- [EzsigntemplateCreateObjectV1Response](docs/Model/EzsigntemplateCreateObjectV1Response.md)
- [EzsigntemplateCreateObjectV1ResponseAllOf](docs/Model/EzsigntemplateCreateObjectV1ResponseAllOf.md)
- [EzsigntemplateCreateObjectV1ResponseMPayload](docs/Model/EzsigntemplateCreateObjectV1ResponseMPayload.md)
- [EzsigntemplateDeleteObjectV1Response](docs/Model/EzsigntemplateDeleteObjectV1Response.md)
- [EzsigntemplateEditObjectV1Request](docs/Model/EzsigntemplateEditObjectV1Request.md)
- [EzsigntemplateEditObjectV1Response](docs/Model/EzsigntemplateEditObjectV1Response.md)
- [EzsigntemplateGetListV1Response](docs/Model/EzsigntemplateGetListV1Response.md)
- [EzsigntemplateGetListV1ResponseAllOf](docs/Model/EzsigntemplateGetListV1ResponseAllOf.md)
- [EzsigntemplateGetListV1ResponseMPayload](docs/Model/EzsigntemplateGetListV1ResponseMPayload.md)
- [EzsigntemplateGetListV1ResponseMPayloadAllOf](docs/Model/EzsigntemplateGetListV1ResponseMPayloadAllOf.md)
- [EzsigntemplateGetObjectV1Response](docs/Model/EzsigntemplateGetObjectV1Response.md)
- [EzsigntemplateGetObjectV1ResponseAllOf](docs/Model/EzsigntemplateGetObjectV1ResponseAllOf.md)
- [EzsigntemplateGetObjectV1ResponseMPayload](docs/Model/EzsigntemplateGetObjectV1ResponseMPayload.md)
- [EzsigntemplateListElement](docs/Model/EzsigntemplateListElement.md)
- [EzsigntemplateRequest](docs/Model/EzsigntemplateRequest.md)
- [EzsigntemplateRequestCompound](docs/Model/EzsigntemplateRequestCompound.md)
- [EzsigntemplateResponse](docs/Model/EzsigntemplateResponse.md)
- [EzsigntemplateResponseCompound](docs/Model/EzsigntemplateResponseCompound.md)
- [EzsigntemplateResponseCompoundAllOf](docs/Model/EzsigntemplateResponseCompoundAllOf.md)
- [EzsigntemplatedocumentCreateObjectV1Request](docs/Model/EzsigntemplatedocumentCreateObjectV1Request.md)
- [EzsigntemplatedocumentCreateObjectV1Response](docs/Model/EzsigntemplatedocumentCreateObjectV1Response.md)
- [EzsigntemplatedocumentCreateObjectV1ResponseAllOf](docs/Model/EzsigntemplatedocumentCreateObjectV1ResponseAllOf.md)
- [EzsigntemplatedocumentCreateObjectV1ResponseMPayload](docs/Model/EzsigntemplatedocumentCreateObjectV1ResponseMPayload.md)
- [EzsigntemplatedocumentEditEzsigntemplateformfieldgroupsV1Request](docs/Model/EzsigntemplatedocumentEditEzsigntemplateformfieldgroupsV1Request.md)
- [EzsigntemplatedocumentEditEzsigntemplateformfieldgroupsV1Response](docs/Model/EzsigntemplatedocumentEditEzsigntemplateformfieldgroupsV1Response.md)
- [EzsigntemplatedocumentEditEzsigntemplateformfieldgroupsV1ResponseAllOf](docs/Model/EzsigntemplatedocumentEditEzsigntemplateformfieldgroupsV1ResponseAllOf.md)
- [EzsigntemplatedocumentEditEzsigntemplateformfieldgroupsV1ResponseMPayload](docs/Model/EzsigntemplatedocumentEditEzsigntemplateformfieldgroupsV1ResponseMPayload.md)
- [EzsigntemplatedocumentEditEzsigntemplatesignaturesV1Request](docs/Model/EzsigntemplatedocumentEditEzsigntemplatesignaturesV1Request.md)
- [EzsigntemplatedocumentEditEzsigntemplatesignaturesV1Response](docs/Model/EzsigntemplatedocumentEditEzsigntemplatesignaturesV1Response.md)
- [EzsigntemplatedocumentEditEzsigntemplatesignaturesV1ResponseAllOf](docs/Model/EzsigntemplatedocumentEditEzsigntemplatesignaturesV1ResponseAllOf.md)
- [EzsigntemplatedocumentEditEzsigntemplatesignaturesV1ResponseMPayload](docs/Model/EzsigntemplatedocumentEditEzsigntemplatesignaturesV1ResponseMPayload.md)
- [EzsigntemplatedocumentEditObjectV1Request](docs/Model/EzsigntemplatedocumentEditObjectV1Request.md)
- [EzsigntemplatedocumentEditObjectV1Response](docs/Model/EzsigntemplatedocumentEditObjectV1Response.md)
- [EzsigntemplatedocumentEditObjectV1ResponseAllOf](docs/Model/EzsigntemplatedocumentEditObjectV1ResponseAllOf.md)
- [EzsigntemplatedocumentGetEzsigntemplatedocumentpagesV1Response](docs/Model/EzsigntemplatedocumentGetEzsigntemplatedocumentpagesV1Response.md)
- [EzsigntemplatedocumentGetEzsigntemplatedocumentpagesV1ResponseAllOf](docs/Model/EzsigntemplatedocumentGetEzsigntemplatedocumentpagesV1ResponseAllOf.md)
- [EzsigntemplatedocumentGetEzsigntemplatedocumentpagesV1ResponseMPayload](docs/Model/EzsigntemplatedocumentGetEzsigntemplatedocumentpagesV1ResponseMPayload.md)
- [EzsigntemplatedocumentGetEzsigntemplateformfieldgroupsV1Response](docs/Model/EzsigntemplatedocumentGetEzsigntemplateformfieldgroupsV1Response.md)
- [EzsigntemplatedocumentGetEzsigntemplateformfieldgroupsV1ResponseAllOf](docs/Model/EzsigntemplatedocumentGetEzsigntemplateformfieldgroupsV1ResponseAllOf.md)
- [EzsigntemplatedocumentGetEzsigntemplateformfieldgroupsV1ResponseMPayload](docs/Model/EzsigntemplatedocumentGetEzsigntemplateformfieldgroupsV1ResponseMPayload.md)
- [EzsigntemplatedocumentGetEzsigntemplatesignaturesV1Response](docs/Model/EzsigntemplatedocumentGetEzsigntemplatesignaturesV1Response.md)
- [EzsigntemplatedocumentGetEzsigntemplatesignaturesV1ResponseAllOf](docs/Model/EzsigntemplatedocumentGetEzsigntemplatesignaturesV1ResponseAllOf.md)
- [EzsigntemplatedocumentGetEzsigntemplatesignaturesV1ResponseMPayload](docs/Model/EzsigntemplatedocumentGetEzsigntemplatesignaturesV1ResponseMPayload.md)
- [EzsigntemplatedocumentGetObjectV1Response](docs/Model/EzsigntemplatedocumentGetObjectV1Response.md)
- [EzsigntemplatedocumentGetObjectV1ResponseAllOf](docs/Model/EzsigntemplatedocumentGetObjectV1ResponseAllOf.md)
- [EzsigntemplatedocumentGetObjectV1ResponseMPayload](docs/Model/EzsigntemplatedocumentGetObjectV1ResponseMPayload.md)
- [EzsigntemplatedocumentGetWordsPositionsV1Request](docs/Model/EzsigntemplatedocumentGetWordsPositionsV1Request.md)
- [EzsigntemplatedocumentGetWordsPositionsV1Response](docs/Model/EzsigntemplatedocumentGetWordsPositionsV1Response.md)
- [EzsigntemplatedocumentGetWordsPositionsV1ResponseAllOf](docs/Model/EzsigntemplatedocumentGetWordsPositionsV1ResponseAllOf.md)
- [EzsigntemplatedocumentPatchObjectV1Request](docs/Model/EzsigntemplatedocumentPatchObjectV1Request.md)
- [EzsigntemplatedocumentPatchObjectV1Response](docs/Model/EzsigntemplatedocumentPatchObjectV1Response.md)
- [EzsigntemplatedocumentRequest](docs/Model/EzsigntemplatedocumentRequest.md)
- [EzsigntemplatedocumentRequestCompound](docs/Model/EzsigntemplatedocumentRequestCompound.md)
- [EzsigntemplatedocumentRequestPatch](docs/Model/EzsigntemplatedocumentRequestPatch.md)
- [EzsigntemplatedocumentResponse](docs/Model/EzsigntemplatedocumentResponse.md)
- [EzsigntemplatedocumentResponseCompound](docs/Model/EzsigntemplatedocumentResponseCompound.md)
- [EzsigntemplatedocumentpageResponse](docs/Model/EzsigntemplatedocumentpageResponse.md)
- [EzsigntemplatedocumentpageResponseCompound](docs/Model/EzsigntemplatedocumentpageResponseCompound.md)
- [EzsigntemplateformfieldRequest](docs/Model/EzsigntemplateformfieldRequest.md)
- [EzsigntemplateformfieldRequestCompound](docs/Model/EzsigntemplateformfieldRequestCompound.md)
- [EzsigntemplateformfieldResponse](docs/Model/EzsigntemplateformfieldResponse.md)
- [EzsigntemplateformfieldResponseCompound](docs/Model/EzsigntemplateformfieldResponseCompound.md)
- [EzsigntemplateformfieldgroupCreateObjectV1Request](docs/Model/EzsigntemplateformfieldgroupCreateObjectV1Request.md)
- [EzsigntemplateformfieldgroupCreateObjectV1Response](docs/Model/EzsigntemplateformfieldgroupCreateObjectV1Response.md)
- [EzsigntemplateformfieldgroupCreateObjectV1ResponseAllOf](docs/Model/EzsigntemplateformfieldgroupCreateObjectV1ResponseAllOf.md)
- [EzsigntemplateformfieldgroupCreateObjectV1ResponseMPayload](docs/Model/EzsigntemplateformfieldgroupCreateObjectV1ResponseMPayload.md)
- [EzsigntemplateformfieldgroupDeleteObjectV1Response](docs/Model/EzsigntemplateformfieldgroupDeleteObjectV1Response.md)
- [EzsigntemplateformfieldgroupEditObjectV1Request](docs/Model/EzsigntemplateformfieldgroupEditObjectV1Request.md)
- [EzsigntemplateformfieldgroupEditObjectV1Response](docs/Model/EzsigntemplateformfieldgroupEditObjectV1Response.md)
- [EzsigntemplateformfieldgroupGetObjectV1Response](docs/Model/EzsigntemplateformfieldgroupGetObjectV1Response.md)
- [EzsigntemplateformfieldgroupGetObjectV1ResponseAllOf](docs/Model/EzsigntemplateformfieldgroupGetObjectV1ResponseAllOf.md)
- [EzsigntemplateformfieldgroupGetObjectV1ResponseMPayload](docs/Model/EzsigntemplateformfieldgroupGetObjectV1ResponseMPayload.md)
- [EzsigntemplateformfieldgroupRequest](docs/Model/EzsigntemplateformfieldgroupRequest.md)
- [EzsigntemplateformfieldgroupRequestCompound](docs/Model/EzsigntemplateformfieldgroupRequestCompound.md)
- [EzsigntemplateformfieldgroupRequestCompoundAllOf](docs/Model/EzsigntemplateformfieldgroupRequestCompoundAllOf.md)
- [EzsigntemplateformfieldgroupResponse](docs/Model/EzsigntemplateformfieldgroupResponse.md)
- [EzsigntemplateformfieldgroupResponseCompound](docs/Model/EzsigntemplateformfieldgroupResponseCompound.md)
- [EzsigntemplateformfieldgroupResponseCompoundAllOf](docs/Model/EzsigntemplateformfieldgroupResponseCompoundAllOf.md)
- [EzsigntemplateformfieldgroupsignerRequest](docs/Model/EzsigntemplateformfieldgroupsignerRequest.md)
- [EzsigntemplateformfieldgroupsignerRequestCompound](docs/Model/EzsigntemplateformfieldgroupsignerRequestCompound.md)
- [EzsigntemplateformfieldgroupsignerResponse](docs/Model/EzsigntemplateformfieldgroupsignerResponse.md)
- [EzsigntemplateformfieldgroupsignerResponseCompound](docs/Model/EzsigntemplateformfieldgroupsignerResponseCompound.md)
- [EzsigntemplatepackageCreateObjectV1Request](docs/Model/EzsigntemplatepackageCreateObjectV1Request.md)
- [EzsigntemplatepackageCreateObjectV1Response](docs/Model/EzsigntemplatepackageCreateObjectV1Response.md)
- [EzsigntemplatepackageCreateObjectV1ResponseAllOf](docs/Model/EzsigntemplatepackageCreateObjectV1ResponseAllOf.md)
- [EzsigntemplatepackageCreateObjectV1ResponseMPayload](docs/Model/EzsigntemplatepackageCreateObjectV1ResponseMPayload.md)
- [EzsigntemplatepackageDeleteObjectV1Response](docs/Model/EzsigntemplatepackageDeleteObjectV1Response.md)
- [EzsigntemplatepackageEditEzsigntemplatepackagesignersV1Request](docs/Model/EzsigntemplatepackageEditEzsigntemplatepackagesignersV1Request.md)
- [EzsigntemplatepackageEditEzsigntemplatepackagesignersV1Response](docs/Model/EzsigntemplatepackageEditEzsigntemplatepackagesignersV1Response.md)
- [EzsigntemplatepackageEditEzsigntemplatepackagesignersV1ResponseAllOf](docs/Model/EzsigntemplatepackageEditEzsigntemplatepackagesignersV1ResponseAllOf.md)
- [EzsigntemplatepackageEditEzsigntemplatepackagesignersV1ResponseMPayload](docs/Model/EzsigntemplatepackageEditEzsigntemplatepackagesignersV1ResponseMPayload.md)
- [EzsigntemplatepackageEditObjectV1Request](docs/Model/EzsigntemplatepackageEditObjectV1Request.md)
- [EzsigntemplatepackageEditObjectV1Response](docs/Model/EzsigntemplatepackageEditObjectV1Response.md)
- [EzsigntemplatepackageGetListV1Response](docs/Model/EzsigntemplatepackageGetListV1Response.md)
- [EzsigntemplatepackageGetListV1ResponseAllOf](docs/Model/EzsigntemplatepackageGetListV1ResponseAllOf.md)
- [EzsigntemplatepackageGetListV1ResponseMPayload](docs/Model/EzsigntemplatepackageGetListV1ResponseMPayload.md)
- [EzsigntemplatepackageGetListV1ResponseMPayloadAllOf](docs/Model/EzsigntemplatepackageGetListV1ResponseMPayloadAllOf.md)
- [EzsigntemplatepackageGetObjectV1Response](docs/Model/EzsigntemplatepackageGetObjectV1Response.md)
- [EzsigntemplatepackageGetObjectV1ResponseAllOf](docs/Model/EzsigntemplatepackageGetObjectV1ResponseAllOf.md)
- [EzsigntemplatepackageGetObjectV1ResponseMPayload](docs/Model/EzsigntemplatepackageGetObjectV1ResponseMPayload.md)
- [EzsigntemplatepackageListElement](docs/Model/EzsigntemplatepackageListElement.md)
- [EzsigntemplatepackageRequest](docs/Model/EzsigntemplatepackageRequest.md)
- [EzsigntemplatepackageRequestCompound](docs/Model/EzsigntemplatepackageRequestCompound.md)
- [EzsigntemplatepackageResponse](docs/Model/EzsigntemplatepackageResponse.md)
- [EzsigntemplatepackageResponseCompound](docs/Model/EzsigntemplatepackageResponseCompound.md)
- [EzsigntemplatepackageResponseCompoundAllOf](docs/Model/EzsigntemplatepackageResponseCompoundAllOf.md)
- [EzsigntemplatepackagemembershipCreateObjectV1Request](docs/Model/EzsigntemplatepackagemembershipCreateObjectV1Request.md)
- [EzsigntemplatepackagemembershipCreateObjectV1Response](docs/Model/EzsigntemplatepackagemembershipCreateObjectV1Response.md)
- [EzsigntemplatepackagemembershipCreateObjectV1ResponseAllOf](docs/Model/EzsigntemplatepackagemembershipCreateObjectV1ResponseAllOf.md)
- [EzsigntemplatepackagemembershipCreateObjectV1ResponseMPayload](docs/Model/EzsigntemplatepackagemembershipCreateObjectV1ResponseMPayload.md)
- [EzsigntemplatepackagemembershipDeleteObjectV1Response](docs/Model/EzsigntemplatepackagemembershipDeleteObjectV1Response.md)
- [EzsigntemplatepackagemembershipGetObjectV1Response](docs/Model/EzsigntemplatepackagemembershipGetObjectV1Response.md)
- [EzsigntemplatepackagemembershipGetObjectV1ResponseAllOf](docs/Model/EzsigntemplatepackagemembershipGetObjectV1ResponseAllOf.md)
- [EzsigntemplatepackagemembershipGetObjectV1ResponseMPayload](docs/Model/EzsigntemplatepackagemembershipGetObjectV1ResponseMPayload.md)
- [EzsigntemplatepackagemembershipRequest](docs/Model/EzsigntemplatepackagemembershipRequest.md)
- [EzsigntemplatepackagemembershipRequestCompound](docs/Model/EzsigntemplatepackagemembershipRequestCompound.md)
- [EzsigntemplatepackagemembershipResponse](docs/Model/EzsigntemplatepackagemembershipResponse.md)
- [EzsigntemplatepackagemembershipResponseCompound](docs/Model/EzsigntemplatepackagemembershipResponseCompound.md)
- [EzsigntemplatepackagemembershipResponseCompoundAllOf](docs/Model/EzsigntemplatepackagemembershipResponseCompoundAllOf.md)
- [EzsigntemplatepackagesignerCreateObjectV1Request](docs/Model/EzsigntemplatepackagesignerCreateObjectV1Request.md)
- [EzsigntemplatepackagesignerCreateObjectV1Response](docs/Model/EzsigntemplatepackagesignerCreateObjectV1Response.md)
- [EzsigntemplatepackagesignerCreateObjectV1ResponseAllOf](docs/Model/EzsigntemplatepackagesignerCreateObjectV1ResponseAllOf.md)
- [EzsigntemplatepackagesignerCreateObjectV1ResponseMPayload](docs/Model/EzsigntemplatepackagesignerCreateObjectV1ResponseMPayload.md)
- [EzsigntemplatepackagesignerDeleteObjectV1Response](docs/Model/EzsigntemplatepackagesignerDeleteObjectV1Response.md)
- [EzsigntemplatepackagesignerDeleteObjectV1ResponseAllOf](docs/Model/EzsigntemplatepackagesignerDeleteObjectV1ResponseAllOf.md)
- [EzsigntemplatepackagesignerDeleteObjectV1ResponseMPayload](docs/Model/EzsigntemplatepackagesignerDeleteObjectV1ResponseMPayload.md)
- [EzsigntemplatepackagesignerEditObjectV1Request](docs/Model/EzsigntemplatepackagesignerEditObjectV1Request.md)
- [EzsigntemplatepackagesignerEditObjectV1Response](docs/Model/EzsigntemplatepackagesignerEditObjectV1Response.md)
- [EzsigntemplatepackagesignerGetObjectV1Response](docs/Model/EzsigntemplatepackagesignerGetObjectV1Response.md)
- [EzsigntemplatepackagesignerGetObjectV1ResponseAllOf](docs/Model/EzsigntemplatepackagesignerGetObjectV1ResponseAllOf.md)
- [EzsigntemplatepackagesignerGetObjectV1ResponseMPayload](docs/Model/EzsigntemplatepackagesignerGetObjectV1ResponseMPayload.md)
- [EzsigntemplatepackagesignerRequest](docs/Model/EzsigntemplatepackagesignerRequest.md)
- [EzsigntemplatepackagesignerRequestCompound](docs/Model/EzsigntemplatepackagesignerRequestCompound.md)
- [EzsigntemplatepackagesignerResponse](docs/Model/EzsigntemplatepackagesignerResponse.md)
- [EzsigntemplatepackagesignerResponseCompound](docs/Model/EzsigntemplatepackagesignerResponseCompound.md)
- [EzsigntemplatepackagesignermembershipCreateObjectV1Request](docs/Model/EzsigntemplatepackagesignermembershipCreateObjectV1Request.md)
- [EzsigntemplatepackagesignermembershipCreateObjectV1Response](docs/Model/EzsigntemplatepackagesignermembershipCreateObjectV1Response.md)
- [EzsigntemplatepackagesignermembershipCreateObjectV1ResponseAllOf](docs/Model/EzsigntemplatepackagesignermembershipCreateObjectV1ResponseAllOf.md)
- [EzsigntemplatepackagesignermembershipCreateObjectV1ResponseMPayload](docs/Model/EzsigntemplatepackagesignermembershipCreateObjectV1ResponseMPayload.md)
- [EzsigntemplatepackagesignermembershipDeleteObjectV1Response](docs/Model/EzsigntemplatepackagesignermembershipDeleteObjectV1Response.md)
- [EzsigntemplatepackagesignermembershipDeleteObjectV1ResponseAllOf](docs/Model/EzsigntemplatepackagesignermembershipDeleteObjectV1ResponseAllOf.md)
- [EzsigntemplatepackagesignermembershipDeleteObjectV1ResponseMPayload](docs/Model/EzsigntemplatepackagesignermembershipDeleteObjectV1ResponseMPayload.md)
- [EzsigntemplatepackagesignermembershipGetObjectV1Response](docs/Model/EzsigntemplatepackagesignermembershipGetObjectV1Response.md)
- [EzsigntemplatepackagesignermembershipGetObjectV1ResponseAllOf](docs/Model/EzsigntemplatepackagesignermembershipGetObjectV1ResponseAllOf.md)
- [EzsigntemplatepackagesignermembershipGetObjectV1ResponseMPayload](docs/Model/EzsigntemplatepackagesignermembershipGetObjectV1ResponseMPayload.md)
- [EzsigntemplatepackagesignermembershipRequest](docs/Model/EzsigntemplatepackagesignermembershipRequest.md)
- [EzsigntemplatepackagesignermembershipRequestCompound](docs/Model/EzsigntemplatepackagesignermembershipRequestCompound.md)
- [EzsigntemplatepackagesignermembershipResponse](docs/Model/EzsigntemplatepackagesignermembershipResponse.md)
- [EzsigntemplatepackagesignermembershipResponseCompound](docs/Model/EzsigntemplatepackagesignermembershipResponseCompound.md)
- [EzsigntemplatesignatureCreateObjectV1Request](docs/Model/EzsigntemplatesignatureCreateObjectV1Request.md)
- [EzsigntemplatesignatureCreateObjectV1Response](docs/Model/EzsigntemplatesignatureCreateObjectV1Response.md)
- [EzsigntemplatesignatureCreateObjectV1ResponseAllOf](docs/Model/EzsigntemplatesignatureCreateObjectV1ResponseAllOf.md)
- [EzsigntemplatesignatureCreateObjectV1ResponseMPayload](docs/Model/EzsigntemplatesignatureCreateObjectV1ResponseMPayload.md)
- [EzsigntemplatesignatureDeleteObjectV1Response](docs/Model/EzsigntemplatesignatureDeleteObjectV1Response.md)
- [EzsigntemplatesignatureEditObjectV1Request](docs/Model/EzsigntemplatesignatureEditObjectV1Request.md)
- [EzsigntemplatesignatureEditObjectV1Response](docs/Model/EzsigntemplatesignatureEditObjectV1Response.md)
- [EzsigntemplatesignatureGetObjectV1Response](docs/Model/EzsigntemplatesignatureGetObjectV1Response.md)
- [EzsigntemplatesignatureGetObjectV1ResponseAllOf](docs/Model/EzsigntemplatesignatureGetObjectV1ResponseAllOf.md)
- [EzsigntemplatesignatureGetObjectV1ResponseMPayload](docs/Model/EzsigntemplatesignatureGetObjectV1ResponseMPayload.md)
- [EzsigntemplatesignatureRequest](docs/Model/EzsigntemplatesignatureRequest.md)
- [EzsigntemplatesignatureRequestCompound](docs/Model/EzsigntemplatesignatureRequestCompound.md)
- [EzsigntemplatesignatureRequestCompoundAllOf](docs/Model/EzsigntemplatesignatureRequestCompoundAllOf.md)
- [EzsigntemplatesignatureResponse](docs/Model/EzsigntemplatesignatureResponse.md)
- [EzsigntemplatesignatureResponseCompound](docs/Model/EzsigntemplatesignatureResponseCompound.md)
- [EzsigntemplatesignatureResponseCompoundAllOf](docs/Model/EzsigntemplatesignatureResponseCompoundAllOf.md)
- [EzsigntemplatesignaturecustomdateRequest](docs/Model/EzsigntemplatesignaturecustomdateRequest.md)
- [EzsigntemplatesignaturecustomdateRequestCompound](docs/Model/EzsigntemplatesignaturecustomdateRequestCompound.md)
- [EzsigntemplatesignaturecustomdateResponse](docs/Model/EzsigntemplatesignaturecustomdateResponse.md)
- [EzsigntemplatesignaturecustomdateResponseCompound](docs/Model/EzsigntemplatesignaturecustomdateResponseCompound.md)
- [EzsigntemplatesignerCreateObjectV1Request](docs/Model/EzsigntemplatesignerCreateObjectV1Request.md)
- [EzsigntemplatesignerCreateObjectV1Response](docs/Model/EzsigntemplatesignerCreateObjectV1Response.md)
- [EzsigntemplatesignerCreateObjectV1ResponseAllOf](docs/Model/EzsigntemplatesignerCreateObjectV1ResponseAllOf.md)
- [EzsigntemplatesignerCreateObjectV1ResponseMPayload](docs/Model/EzsigntemplatesignerCreateObjectV1ResponseMPayload.md)
- [EzsigntemplatesignerDeleteObjectV1Response](docs/Model/EzsigntemplatesignerDeleteObjectV1Response.md)
- [EzsigntemplatesignerEditObjectV1Request](docs/Model/EzsigntemplatesignerEditObjectV1Request.md)
- [EzsigntemplatesignerEditObjectV1Response](docs/Model/EzsigntemplatesignerEditObjectV1Response.md)
- [EzsigntemplatesignerGetObjectV1Response](docs/Model/EzsigntemplatesignerGetObjectV1Response.md)
- [EzsigntemplatesignerGetObjectV1ResponseAllOf](docs/Model/EzsigntemplatesignerGetObjectV1ResponseAllOf.md)
- [EzsigntemplatesignerGetObjectV1ResponseMPayload](docs/Model/EzsigntemplatesignerGetObjectV1ResponseMPayload.md)
- [EzsigntemplatesignerRequest](docs/Model/EzsigntemplatesignerRequest.md)
- [EzsigntemplatesignerRequestCompound](docs/Model/EzsigntemplatesignerRequestCompound.md)
- [EzsigntemplatesignerResponse](docs/Model/EzsigntemplatesignerResponse.md)
- [EzsigntemplatesignerResponseCompound](docs/Model/EzsigntemplatesignerResponseCompound.md)
- [FieldEActivesessionUsertype](docs/Model/FieldEActivesessionUsertype.md)
- [FieldEActivesessionWeekdaystart](docs/Model/FieldEActivesessionWeekdaystart.md)
- [FieldEEzsigndocumentStep](docs/Model/FieldEEzsigndocumentStep.md)
- [FieldEEzsigndocumentlogType](docs/Model/FieldEEzsigndocumentlogType.md)
- [FieldEEzsignfolderSendreminderfrequency](docs/Model/FieldEEzsignfolderSendreminderfrequency.md)
- [FieldEEzsignfolderStep](docs/Model/FieldEEzsignfolderStep.md)
- [FieldEEzsignfoldertypePrivacylevel](docs/Model/FieldEEzsignfoldertypePrivacylevel.md)
- [FieldEEzsignformfieldgroupSignerrequirement](docs/Model/FieldEEzsignformfieldgroupSignerrequirement.md)
- [FieldEEzsignformfieldgroupTooltipposition](docs/Model/FieldEEzsignformfieldgroupTooltipposition.md)
- [FieldEEzsignformfieldgroupType](docs/Model/FieldEEzsignformfieldgroupType.md)
- [FieldEEzsignsignatureFont](docs/Model/FieldEEzsignsignatureFont.md)
- [FieldEEzsignsignatureTooltipposition](docs/Model/FieldEEzsignsignatureTooltipposition.md)
- [FieldEEzsignsignatureType](docs/Model/FieldEEzsignsignatureType.md)
- [FieldEEzsigntemplateformfieldgroupSignerrequirement](docs/Model/FieldEEzsigntemplateformfieldgroupSignerrequirement.md)
- [FieldEEzsigntemplateformfieldgroupTooltipposition](docs/Model/FieldEEzsigntemplateformfieldgroupTooltipposition.md)
- [FieldEEzsigntemplateformfieldgroupType](docs/Model/FieldEEzsigntemplateformfieldgroupType.md)
- [FieldEEzsigntemplatesignatureFont](docs/Model/FieldEEzsigntemplatesignatureFont.md)
- [FieldEEzsigntemplatesignatureTooltipposition](docs/Model/FieldEEzsigntemplatesignatureTooltipposition.md)
- [FieldEEzsigntemplatesignatureType](docs/Model/FieldEEzsigntemplatesignatureType.md)
- [FieldENotificationpreferenceStatus](docs/Model/FieldENotificationpreferenceStatus.md)
- [FieldEPhoneType](docs/Model/FieldEPhoneType.md)
- [FieldEUserEzsignsendreminderfrequency](docs/Model/FieldEUserEzsignsendreminderfrequency.md)
- [FieldEUserType](docs/Model/FieldEUserType.md)
- [FranchisereferalincomeCreateObjectV1Request](docs/Model/FranchisereferalincomeCreateObjectV1Request.md)
- [FranchisereferalincomeCreateObjectV1Response](docs/Model/FranchisereferalincomeCreateObjectV1Response.md)
- [FranchisereferalincomeCreateObjectV1ResponseAllOf](docs/Model/FranchisereferalincomeCreateObjectV1ResponseAllOf.md)
- [FranchisereferalincomeCreateObjectV1ResponseMPayload](docs/Model/FranchisereferalincomeCreateObjectV1ResponseMPayload.md)
- [FranchisereferalincomeCreateObjectV2Request](docs/Model/FranchisereferalincomeCreateObjectV2Request.md)
- [FranchisereferalincomeCreateObjectV2Response](docs/Model/FranchisereferalincomeCreateObjectV2Response.md)
- [FranchisereferalincomeCreateObjectV2ResponseAllOf](docs/Model/FranchisereferalincomeCreateObjectV2ResponseAllOf.md)
- [FranchisereferalincomeCreateObjectV2ResponseMPayload](docs/Model/FranchisereferalincomeCreateObjectV2ResponseMPayload.md)
- [FranchisereferalincomeRequest](docs/Model/FranchisereferalincomeRequest.md)
- [FranchisereferalincomeRequestCompound](docs/Model/FranchisereferalincomeRequestCompound.md)
- [FranchisereferalincomeRequestCompoundAllOf](docs/Model/FranchisereferalincomeRequestCompoundAllOf.md)
- [GlobalCustomerGetEndpointV1Response](docs/Model/GlobalCustomerGetEndpointV1Response.md)
- [HeaderAcceptLanguage](docs/Model/HeaderAcceptLanguage.md)
- [MultilingualApikeyDescription](docs/Model/MultilingualApikeyDescription.md)
- [NotificationsectionGetNotificationtestsV1Response](docs/Model/NotificationsectionGetNotificationtestsV1Response.md)
- [NotificationsectionGetNotificationtestsV1ResponseAllOf](docs/Model/NotificationsectionGetNotificationtestsV1ResponseAllOf.md)
- [NotificationsectionGetNotificationtestsV1ResponseMPayload](docs/Model/NotificationsectionGetNotificationtestsV1ResponseMPayload.md)
- [NotificationsubsectionResponse](docs/Model/NotificationsubsectionResponse.md)
- [NotificationtestGetElementsV1Response](docs/Model/NotificationtestGetElementsV1Response.md)
- [NotificationtestGetElementsV1ResponseAllOf](docs/Model/NotificationtestGetElementsV1ResponseAllOf.md)
- [NotificationtestGetElementsV1ResponseMPayload](docs/Model/NotificationtestGetElementsV1ResponseMPayload.md)
- [NotificationtestResponse](docs/Model/NotificationtestResponse.md)
- [PhoneRequest](docs/Model/PhoneRequest.md)
- [PhoneRequestCompound](docs/Model/PhoneRequestCompound.md)
- [UserCreateEzsignuserV1Request](docs/Model/UserCreateEzsignuserV1Request.md)
- [UserCreateEzsignuserV1Response](docs/Model/UserCreateEzsignuserV1Response.md)
- [UserCreateEzsignuserV1ResponseAllOf](docs/Model/UserCreateEzsignuserV1ResponseAllOf.md)
- [UserCreateEzsignuserV1ResponseMPayload](docs/Model/UserCreateEzsignuserV1ResponseMPayload.md)
- [UserResponse](docs/Model/UserResponse.md)
- [UserResponseCompound](docs/Model/UserResponseCompound.md)
- [WebhookEzsignDocumentCompleted](docs/Model/WebhookEzsignDocumentCompleted.md)
- [WebhookEzsignDocumentCompletedAllOf](docs/Model/WebhookEzsignDocumentCompletedAllOf.md)
- [WebhookEzsignFolderCompleted](docs/Model/WebhookEzsignFolderCompleted.md)
- [WebhookEzsignFolderCompletedAllOf](docs/Model/WebhookEzsignFolderCompletedAllOf.md)
- [WebhookResponse](docs/Model/WebhookResponse.md)
- [WebhookUserUserCreated](docs/Model/WebhookUserUserCreated.md)
- [WebhookUserUserCreatedAllOf](docs/Model/WebhookUserUserCreatedAllOf.md)
- [WebsiteRequest](docs/Model/WebsiteRequest.md)
- [WebsiteRequestCompound](docs/Model/WebsiteRequestCompound.md)

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

- API version: `1.1.9`
    - Package version: `1.1.9`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
