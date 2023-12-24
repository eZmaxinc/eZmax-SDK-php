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

## API Endpoints

All URIs are relative to *https://prod.api.appcluster01.ca-central-1.ezmax.com/rest*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*GlobalCustomerApi* | [**globalCustomerGetEndpointV1**](docs/Api/GlobalCustomerApi.md#globalcustomergetendpointv1) | **GET** /1/customer/{pksCustomerCode}/endpoint | Get customer endpoint
*GlobalEzmaxclientApi* | [**globalEzmaxclientVersionV1**](docs/Api/GlobalEzmaxclientApi.md#globalezmaxclientversionv1) | **GET** /1/ezmaxclient/{pksEzmaxclientOs}/version | Retrieve the latest version of the Ezmaxclient
*GlobalEzmaxcustomerApi* | [**globalEzmaxcustomerGetConfigurationV1**](docs/Api/GlobalEzmaxcustomerApi.md#globalezmaxcustomergetconfigurationv1) | **GET** /1/ezmaxcustomer/{pksEzmaxcustomerCode}/getConfiguration | Get ezmaxcustomer configuration
*ModuleEzsignApi* | [**ezsignSuggestSignersV1**](docs/Api/ModuleEzsignApi.md#ezsignsuggestsignersv1) | **GET** /1/module/ezsign/suggestSigners | Suggest signers
*ModuleEzsignApi* | [**ezsignSuggestTemplatesV1**](docs/Api/ModuleEzsignApi.md#ezsignsuggesttemplatesv1) | **GET** /1/module/ezsign/suggestTemplates | Suggest templates
*ModuleReportApi* | [**reportGetReportFromCacheV1**](docs/Api/ModuleReportApi.md#reportgetreportfromcachev1) | **GET** /1/module/report/getReportFromCache/{sReportgroupCacheID} | Retrieve report from cache
*ModuleUserApi* | [**userCreateEzsignuserV1**](docs/Api/ModuleUserApi.md#usercreateezsignuserv1) | **POST** /1/module/user/createezsignuser | Create a new User of type Ezsignuser
*ObjectActivesessionApi* | [**activesessionGetCurrentV1**](docs/Api/ObjectActivesessionApi.md#activesessiongetcurrentv1) | **GET** /1/object/activesession/getCurrent | Get Current Activesession
*ObjectActivesessionApi* | [**activesessionGetListV1**](docs/Api/ObjectActivesessionApi.md#activesessiongetlistv1) | **GET** /1/object/activesession/getList | Retrieve Activesession list
*ObjectApikeyApi* | [**apikeyCreateObjectV2**](docs/Api/ObjectApikeyApi.md#apikeycreateobjectv2) | **POST** /2/object/apikey | Create a new Apikey
*ObjectApikeyApi* | [**apikeyEditObjectV1**](docs/Api/ObjectApikeyApi.md#apikeyeditobjectv1) | **PUT** /1/object/apikey/{pkiApikeyID} | Edit an existing Apikey
*ObjectApikeyApi* | [**apikeyEditPermissionsV1**](docs/Api/ObjectApikeyApi.md#apikeyeditpermissionsv1) | **PUT** /1/object/apikey/{pkiApikeyID}/editPermissions | Edit multiple Permissions
*ObjectApikeyApi* | [**apikeyGetCorsV1**](docs/Api/ObjectApikeyApi.md#apikeygetcorsv1) | **GET** /1/object/apikey/{pkiApikeyID}/getCors | Retrieve an existing Apikey&#39;s cors
*ObjectApikeyApi* | [**apikeyGetListV1**](docs/Api/ObjectApikeyApi.md#apikeygetlistv1) | **GET** /1/object/apikey/getList | Retrieve Apikey list
*ObjectApikeyApi* | [**apikeyGetObjectV2**](docs/Api/ObjectApikeyApi.md#apikeygetobjectv2) | **GET** /2/object/apikey/{pkiApikeyID} | Retrieve an existing Apikey
*ObjectApikeyApi* | [**apikeyGetPermissionsV1**](docs/Api/ObjectApikeyApi.md#apikeygetpermissionsv1) | **GET** /1/object/apikey/{pkiApikeyID}/getPermissions | Retrieve an existing Apikey&#39;s Permissions
*ObjectApikeyApi* | [**apikeyGetSubnetsV1**](docs/Api/ObjectApikeyApi.md#apikeygetsubnetsv1) | **GET** /1/object/apikey/{pkiApikeyID}/getSubnets | Retrieve an existing Apikey&#39;s subnets
*ObjectApikeyApi* | [**apikeyRegenerateV1**](docs/Api/ObjectApikeyApi.md#apikeyregeneratev1) | **POST** /1/object/apikey/{pkiApikeyID}/regenerate | Regenerate the Apikey
*ObjectAttachmentApi* | [**attachmentDownloadV1**](docs/Api/ObjectAttachmentApi.md#attachmentdownloadv1) | **GET** /1/object/attachment/{pkiAttachmentID}/download | Retrieve the content
*ObjectAttachmentApi* | [**attachmentGetAttachmentlogsV1**](docs/Api/ObjectAttachmentApi.md#attachmentgetattachmentlogsv1) | **GET** /1/object/attachment/{pkiAttachmentID}/getAttachmentlogs | Retrieve the Attachmentlogs
*ObjectAttachmentApi* | [**attachmentGetDownloadUrlV1**](docs/Api/ObjectAttachmentApi.md#attachmentgetdownloadurlv1) | **GET** /1/object/attachment/{pkiAttachmentID}/getDownloadUrl | Retrieve a URL to download attachments.
*ObjectBillingentityexternalApi* | [**billingentityexternalGetAutocompleteV2**](docs/Api/ObjectBillingentityexternalApi.md#billingentityexternalgetautocompletev2) | **GET** /2/object/billingentityexternal/getAutocomplete/{sSelector} | Retrieve Billingentityexternals and IDs
*ObjectBillingentityinternalApi* | [**billingentityinternalCreateObjectV1**](docs/Api/ObjectBillingentityinternalApi.md#billingentityinternalcreateobjectv1) | **POST** /1/object/billingentityinternal | Create a new Billingentityinternal
*ObjectBillingentityinternalApi* | [**billingentityinternalEditObjectV1**](docs/Api/ObjectBillingentityinternalApi.md#billingentityinternaleditobjectv1) | **PUT** /1/object/billingentityinternal/{pkiBillingentityinternalID} | Edit an existing Billingentityinternal
*ObjectBillingentityinternalApi* | [**billingentityinternalGetAutocompleteV2**](docs/Api/ObjectBillingentityinternalApi.md#billingentityinternalgetautocompletev2) | **GET** /2/object/billingentityinternal/getAutocomplete/{sSelector} | Retrieve Billingentityinternals and IDs
*ObjectBillingentityinternalApi* | [**billingentityinternalGetListV1**](docs/Api/ObjectBillingentityinternalApi.md#billingentityinternalgetlistv1) | **GET** /1/object/billingentityinternal/getList | Retrieve Billingentityinternal list
*ObjectBillingentityinternalApi* | [**billingentityinternalGetObjectV2**](docs/Api/ObjectBillingentityinternalApi.md#billingentityinternalgetobjectv2) | **GET** /2/object/billingentityinternal/{pkiBillingentityinternalID} | Retrieve an existing Billingentityinternal
*ObjectBrandingApi* | [**brandingCreateObjectV1**](docs/Api/ObjectBrandingApi.md#brandingcreateobjectv1) | **POST** /1/object/branding | Create a new Branding
*ObjectBrandingApi* | [**brandingEditObjectV1**](docs/Api/ObjectBrandingApi.md#brandingeditobjectv1) | **PUT** /1/object/branding/{pkiBrandingID} | Edit an existing Branding
*ObjectBrandingApi* | [**brandingGetAutocompleteV2**](docs/Api/ObjectBrandingApi.md#brandinggetautocompletev2) | **GET** /2/object/branding/getAutocomplete/{sSelector} | Retrieve Brandings and IDs
*ObjectBrandingApi* | [**brandingGetListV1**](docs/Api/ObjectBrandingApi.md#brandinggetlistv1) | **GET** /1/object/branding/getList | Retrieve Branding list
*ObjectBrandingApi* | [**brandingGetObjectV2**](docs/Api/ObjectBrandingApi.md#brandinggetobjectv2) | **GET** /2/object/branding/{pkiBrandingID} | Retrieve an existing Branding
*ObjectBuyercontractApi* | [**buyercontractGetCommunicationListV1**](docs/Api/ObjectBuyercontractApi.md#buyercontractgetcommunicationlistv1) | **GET** /1/object/buyercontract/{pkiBuyercontractID}/getCommunicationList | Retrieve Communication list
*ObjectClonehistoryApi* | [**clonehistoryGetListV1**](docs/Api/ObjectClonehistoryApi.md#clonehistorygetlistv1) | **GET** /1/object/clonehistory/getList | Retrieve Clonehistory list
*ObjectCommunicationApi* | [**communicationSendV1**](docs/Api/ObjectCommunicationApi.md#communicationsendv1) | **POST** /1/object/communication/send | Send a new Communication
*ObjectCompanyApi* | [**companyGetAutocompleteV2**](docs/Api/ObjectCompanyApi.md#companygetautocompletev2) | **GET** /2/object/company/getAutocomplete/{sSelector} | Retrieve Companys and IDs
*ObjectCorsApi* | [**corsCreateObjectV1**](docs/Api/ObjectCorsApi.md#corscreateobjectv1) | **POST** /1/object/cors | Create a new Cors
*ObjectCorsApi* | [**corsDeleteObjectV1**](docs/Api/ObjectCorsApi.md#corsdeleteobjectv1) | **DELETE** /1/object/cors/{pkiCorsID} | Delete an existing Cors
*ObjectCorsApi* | [**corsEditObjectV1**](docs/Api/ObjectCorsApi.md#corseditobjectv1) | **PUT** /1/object/cors/{pkiCorsID} | Edit an existing Cors
*ObjectCorsApi* | [**corsGetObjectV2**](docs/Api/ObjectCorsApi.md#corsgetobjectv2) | **GET** /2/object/cors/{pkiCorsID} | Retrieve an existing Cors
*ObjectDepartmentApi* | [**departmentGetAutocompleteV2**](docs/Api/ObjectDepartmentApi.md#departmentgetautocompletev2) | **GET** /2/object/department/getAutocomplete/{sSelector} | Retrieve Departments and IDs
*ObjectElectronicfundstransferApi* | [**electronicfundstransferGetCommunicationListV1**](docs/Api/ObjectElectronicfundstransferApi.md#electronicfundstransfergetcommunicationlistv1) | **GET** /1/object/electronicfundstransfer/{pkiElectronicfundstransferID}/getCommunicationList | Retrieve Communication list
*ObjectEmailtypeApi* | [**emailtypeGetAutocompleteV2**](docs/Api/ObjectEmailtypeApi.md#emailtypegetautocompletev2) | **GET** /2/object/emailtype/getAutocomplete/{sSelector} | Retrieve Emailtypes and IDs
*ObjectEzmaxinvoicingApi* | [**ezmaxinvoicingGetAutocompleteV1**](docs/Api/ObjectEzmaxinvoicingApi.md#ezmaxinvoicinggetautocompletev1) | **GET** /1/object/ezmaxinvoicing/getAutocomplete/{sSelector} | Retrieve Ezmaxinvoicings and IDs
*ObjectEzmaxinvoicingApi* | [**ezmaxinvoicingGetAutocompleteV2**](docs/Api/ObjectEzmaxinvoicingApi.md#ezmaxinvoicinggetautocompletev2) | **GET** /2/object/ezmaxinvoicing/getAutocomplete/{sSelector} | Retrieve Ezmaxinvoicings and IDs
*ObjectEzmaxinvoicingApi* | [**ezmaxinvoicingGetObjectV2**](docs/Api/ObjectEzmaxinvoicingApi.md#ezmaxinvoicinggetobjectv2) | **GET** /2/object/ezmaxinvoicing/{pkiEzmaxinvoicingID} | Retrieve an existing Ezmaxinvoicing
*ObjectEzmaxinvoicingApi* | [**ezmaxinvoicingGetProvisionalV1**](docs/Api/ObjectEzmaxinvoicingApi.md#ezmaxinvoicinggetprovisionalv1) | **GET** /1/object/ezmaxinvoicing/getProvisional | Retrieve provisional Ezmaxinvoicing
*ObjectEzmaxproductApi* | [**ezmaxproductGetAutocompleteV2**](docs/Api/ObjectEzmaxproductApi.md#ezmaxproductgetautocompletev2) | **GET** /2/object/ezmaxproduct/getAutocomplete/{sSelector} | Retrieve Ezmaxproducts and IDs
*ObjectEzsignbulksendApi* | [**ezsignbulksendCreateEzsignbulksendtransmissionV1**](docs/Api/ObjectEzsignbulksendApi.md#ezsignbulksendcreateezsignbulksendtransmissionv1) | **POST** /1/object/ezsignbulksend/{pkiEzsignbulksendID}/createEzsignbulksendtransmission | Create a new Ezsignbulksendtransmission in the Ezsignbulksend
*ObjectEzsignbulksendApi* | [**ezsignbulksendCreateObjectV1**](docs/Api/ObjectEzsignbulksendApi.md#ezsignbulksendcreateobjectv1) | **POST** /1/object/ezsignbulksend | Create a new Ezsignbulksend
*ObjectEzsignbulksendApi* | [**ezsignbulksendDeleteObjectV1**](docs/Api/ObjectEzsignbulksendApi.md#ezsignbulksenddeleteobjectv1) | **DELETE** /1/object/ezsignbulksend/{pkiEzsignbulksendID} | Delete an existing Ezsignbulksend
*ObjectEzsignbulksendApi* | [**ezsignbulksendEditObjectV1**](docs/Api/ObjectEzsignbulksendApi.md#ezsignbulksendeditobjectv1) | **PUT** /1/object/ezsignbulksend/{pkiEzsignbulksendID} | Edit an existing Ezsignbulksend
*ObjectEzsignbulksendApi* | [**ezsignbulksendGetCsvTemplateV1**](docs/Api/ObjectEzsignbulksendApi.md#ezsignbulksendgetcsvtemplatev1) | **GET** /1/object/ezsignbulksend/{pkiEzsignbulksendID}/getCsvTemplate | Retrieve an existing Ezsignbulksend&#39;s empty Csv template
*ObjectEzsignbulksendApi* | [**ezsignbulksendGetEzsignbulksendtransmissionsV1**](docs/Api/ObjectEzsignbulksendApi.md#ezsignbulksendgetezsignbulksendtransmissionsv1) | **GET** /1/object/ezsignbulksend/{pkiEzsignbulksendID}/getEzsignbulksendtransmissions | Retrieve an existing Ezsignbulksend&#39;s Ezsignbulksendtransmissions
*ObjectEzsignbulksendApi* | [**ezsignbulksendGetEzsignsignaturesAutomaticV1**](docs/Api/ObjectEzsignbulksendApi.md#ezsignbulksendgetezsignsignaturesautomaticv1) | **GET** /1/object/ezsignbulksend/{pkiEzsignbulksendID}/getEzsignsignaturesAutomatic | Retrieve an existing Ezsignbulksend&#39;s automatic Ezsignsignatures
*ObjectEzsignbulksendApi* | [**ezsignbulksendGetFormsDataV1**](docs/Api/ObjectEzsignbulksendApi.md#ezsignbulksendgetformsdatav1) | **GET** /1/object/ezsignbulksend/{pkiEzsignbulksendID}/getFormsData | Retrieve an existing Ezsignbulksend&#39;s forms data
*ObjectEzsignbulksendApi* | [**ezsignbulksendGetListV1**](docs/Api/ObjectEzsignbulksendApi.md#ezsignbulksendgetlistv1) | **GET** /1/object/ezsignbulksend/getList | Retrieve Ezsignbulksend list
*ObjectEzsignbulksendApi* | [**ezsignbulksendGetObjectV2**](docs/Api/ObjectEzsignbulksendApi.md#ezsignbulksendgetobjectv2) | **GET** /2/object/ezsignbulksend/{pkiEzsignbulksendID} | Retrieve an existing Ezsignbulksend
*ObjectEzsignbulksendApi* | [**ezsignbulksendReorderV1**](docs/Api/ObjectEzsignbulksendApi.md#ezsignbulksendreorderv1) | **POST** /1/object/ezsignbulksend/{pkiEzsignbulksendID}/reorder | Reorder Ezsignbulksenddocumentmappings in the Ezsignbulksend
*ObjectEzsignbulksenddocumentmappingApi* | [**ezsignbulksenddocumentmappingCreateObjectV1**](docs/Api/ObjectEzsignbulksenddocumentmappingApi.md#ezsignbulksenddocumentmappingcreateobjectv1) | **POST** /1/object/ezsignbulksenddocumentmapping | Create a new Ezsignbulksenddocumentmapping
*ObjectEzsignbulksenddocumentmappingApi* | [**ezsignbulksenddocumentmappingDeleteObjectV1**](docs/Api/ObjectEzsignbulksenddocumentmappingApi.md#ezsignbulksenddocumentmappingdeleteobjectv1) | **DELETE** /1/object/ezsignbulksenddocumentmapping/{pkiEzsignbulksenddocumentmappingID} | Delete an existing Ezsignbulksenddocumentmapping
*ObjectEzsignbulksenddocumentmappingApi* | [**ezsignbulksenddocumentmappingGetObjectV2**](docs/Api/ObjectEzsignbulksenddocumentmappingApi.md#ezsignbulksenddocumentmappinggetobjectv2) | **GET** /2/object/ezsignbulksenddocumentmapping/{pkiEzsignbulksenddocumentmappingID} | Retrieve an existing Ezsignbulksenddocumentmapping
*ObjectEzsignbulksendsignermappingApi* | [**ezsignbulksendsignermappingCreateObjectV1**](docs/Api/ObjectEzsignbulksendsignermappingApi.md#ezsignbulksendsignermappingcreateobjectv1) | **POST** /1/object/ezsignbulksendsignermapping | Create a new Ezsignbulksendsignermapping
*ObjectEzsignbulksendsignermappingApi* | [**ezsignbulksendsignermappingDeleteObjectV1**](docs/Api/ObjectEzsignbulksendsignermappingApi.md#ezsignbulksendsignermappingdeleteobjectv1) | **DELETE** /1/object/ezsignbulksendsignermapping/{pkiEzsignbulksendsignermappingID} | Delete an existing Ezsignbulksendsignermapping
*ObjectEzsignbulksendsignermappingApi* | [**ezsignbulksendsignermappingGetObjectV2**](docs/Api/ObjectEzsignbulksendsignermappingApi.md#ezsignbulksendsignermappinggetobjectv2) | **GET** /2/object/ezsignbulksendsignermapping/{pkiEzsignbulksendsignermappingID} | Retrieve an existing Ezsignbulksendsignermapping
*ObjectEzsignbulksendtransmissionApi* | [**ezsignbulksendtransmissionGetCsvErrorsV1**](docs/Api/ObjectEzsignbulksendtransmissionApi.md#ezsignbulksendtransmissiongetcsverrorsv1) | **GET** /1/object/ezsignbulksendtransmission/{pkiEzsignbulksendtransmissionID}/getCsvErrors | Retrieve an existing Ezsignbulksendtransmission&#39;s Csv containing errors
*ObjectEzsignbulksendtransmissionApi* | [**ezsignbulksendtransmissionGetEzsignsignaturesAutomaticV1**](docs/Api/ObjectEzsignbulksendtransmissionApi.md#ezsignbulksendtransmissiongetezsignsignaturesautomaticv1) | **GET** /1/object/ezsignbulksendtransmission/{pkiEzsignbulksendtransmissionID}/getEzsignsignaturesAutomatic | Retrieve an existing Ezsignbulksendtransmission&#39;s automatic Ezsignsignatures
*ObjectEzsignbulksendtransmissionApi* | [**ezsignbulksendtransmissionGetFormsDataV1**](docs/Api/ObjectEzsignbulksendtransmissionApi.md#ezsignbulksendtransmissiongetformsdatav1) | **GET** /1/object/ezsignbulksendtransmission/{pkiEzsignbulksendtransmissionID}/getFormsData | Retrieve an existing Ezsignbulksendtransmission&#39;s forms data
*ObjectEzsignbulksendtransmissionApi* | [**ezsignbulksendtransmissionGetObjectV2**](docs/Api/ObjectEzsignbulksendtransmissionApi.md#ezsignbulksendtransmissiongetobjectv2) | **GET** /2/object/ezsignbulksendtransmission/{pkiEzsignbulksendtransmissionID} | Retrieve an existing Ezsignbulksendtransmission
*ObjectEzsigndocumentApi* | [**ezsigndocumentApplyEzsigntemplateV1**](docs/Api/ObjectEzsigndocumentApi.md#ezsigndocumentapplyezsigntemplatev1) | **POST** /1/object/ezsigndocument/{pkiEzsigndocumentID}/applyezsigntemplate | Apply an Ezsigntemplate to the Ezsigndocument.
*ObjectEzsigndocumentApi* | [**ezsigndocumentApplyEzsigntemplateV2**](docs/Api/ObjectEzsigndocumentApi.md#ezsigndocumentapplyezsigntemplatev2) | **POST** /2/object/ezsigndocument/{pkiEzsigndocumentID}/applyEzsigntemplate | Apply an Ezsigntemplate to the Ezsigndocument.
*ObjectEzsigndocumentApi* | [**ezsigndocumentCreateObjectV1**](docs/Api/ObjectEzsigndocumentApi.md#ezsigndocumentcreateobjectv1) | **POST** /1/object/ezsigndocument | Create a new Ezsigndocument
*ObjectEzsigndocumentApi* | [**ezsigndocumentCreateObjectV2**](docs/Api/ObjectEzsigndocumentApi.md#ezsigndocumentcreateobjectv2) | **POST** /2/object/ezsigndocument | Create a new Ezsigndocument
*ObjectEzsigndocumentApi* | [**ezsigndocumentDeclineToSignV1**](docs/Api/ObjectEzsigndocumentApi.md#ezsigndocumentdeclinetosignv1) | **POST** /1/object/ezsigndocument/{pkiEzsigndocumentID}/declineToSign | Decline to sign
*ObjectEzsigndocumentApi* | [**ezsigndocumentDeleteObjectV1**](docs/Api/ObjectEzsigndocumentApi.md#ezsigndocumentdeleteobjectv1) | **DELETE** /1/object/ezsigndocument/{pkiEzsigndocumentID} | Delete an existing Ezsigndocument
*ObjectEzsigndocumentApi* | [**ezsigndocumentEditEzsignformfieldgroupsV1**](docs/Api/ObjectEzsigndocumentApi.md#ezsigndocumenteditezsignformfieldgroupsv1) | **PUT** /1/object/ezsigndocument/{pkiEzsigndocumentID}/editEzsignformfieldgroups | Edit multiple Ezsignformfieldgroups
*ObjectEzsigndocumentApi* | [**ezsigndocumentEditEzsignsignaturesV1**](docs/Api/ObjectEzsigndocumentApi.md#ezsigndocumenteditezsignsignaturesv1) | **PUT** /1/object/ezsigndocument/{pkiEzsigndocumentID}/editEzsignsignatures | Edit multiple Ezsignsignatures
*ObjectEzsigndocumentApi* | [**ezsigndocumentEndPrematurelyV1**](docs/Api/ObjectEzsigndocumentApi.md#ezsigndocumentendprematurelyv1) | **POST** /1/object/ezsigndocument/{pkiEzsigndocumentID}/endPrematurely | End prematurely
*ObjectEzsigndocumentApi* | [**ezsigndocumentFlattenV1**](docs/Api/ObjectEzsigndocumentApi.md#ezsigndocumentflattenv1) | **POST** /1/object/ezsigndocument/{pkiEzsigndocumentID}/flatten | Flatten
*ObjectEzsigndocumentApi* | [**ezsigndocumentGetActionableElementsV1**](docs/Api/ObjectEzsigndocumentApi.md#ezsigndocumentgetactionableelementsv1) | **GET** /1/object/ezsigndocument/{pkiEzsigndocumentID}/getActionableElements | Retrieve actionable elements for the Ezsigndocument
*ObjectEzsigndocumentApi* | [**ezsigndocumentGetAttachmentsV1**](docs/Api/ObjectEzsigndocumentApi.md#ezsigndocumentgetattachmentsv1) | **GET** /1/object/ezsigndocument/{pkiEzsigndocumentID}/getAttachments | Retrieve Ezsigndocument&#39;s Attachments
*ObjectEzsigndocumentApi* | [**ezsigndocumentGetCompletedElementsV1**](docs/Api/ObjectEzsigndocumentApi.md#ezsigndocumentgetcompletedelementsv1) | **GET** /1/object/ezsigndocument/{pkiEzsigndocumentID}/getCompletedElements | Retrieve completed elements for the Ezsigndocument
*ObjectEzsigndocumentApi* | [**ezsigndocumentGetDownloadUrlV1**](docs/Api/ObjectEzsigndocumentApi.md#ezsigndocumentgetdownloadurlv1) | **GET** /1/object/ezsigndocument/{pkiEzsigndocumentID}/getDownloadUrl/{eDocumentType} | Retrieve a URL to download documents.
*ObjectEzsigndocumentApi* | [**ezsigndocumentGetEzsignannotationsV1**](docs/Api/ObjectEzsigndocumentApi.md#ezsigndocumentgetezsignannotationsv1) | **GET** /1/object/ezsigndocument/{pkiEzsigndocumentID}/getEzsignannotations | Retrieve an existing Ezsigndocument&#39;s Ezsignannotations
*ObjectEzsigndocumentApi* | [**ezsigndocumentGetEzsignformfieldgroupsV1**](docs/Api/ObjectEzsigndocumentApi.md#ezsigndocumentgetezsignformfieldgroupsv1) | **GET** /1/object/ezsigndocument/{pkiEzsigndocumentID}/getEzsignformfieldgroups | Retrieve an existing Ezsigndocument&#39;s Ezsignformfieldgroups
*ObjectEzsigndocumentApi* | [**ezsigndocumentGetEzsignpagesV1**](docs/Api/ObjectEzsigndocumentApi.md#ezsigndocumentgetezsignpagesv1) | **GET** /1/object/ezsigndocument/{pkiEzsigndocumentID}/getEzsignpages | Retrieve an existing Ezsigndocument&#39;s Ezsignpages
*ObjectEzsigndocumentApi* | [**ezsigndocumentGetEzsignsignaturesAutomaticV1**](docs/Api/ObjectEzsigndocumentApi.md#ezsigndocumentgetezsignsignaturesautomaticv1) | **GET** /1/object/ezsigndocument/{pkiEzsigndocumentID}/getEzsignsignaturesAutomatic | Retrieve an existing Ezsigndocument&#39;s automatic Ezsignsignatures
*ObjectEzsigndocumentApi* | [**ezsigndocumentGetEzsignsignaturesV1**](docs/Api/ObjectEzsigndocumentApi.md#ezsigndocumentgetezsignsignaturesv1) | **GET** /1/object/ezsigndocument/{pkiEzsigndocumentID}/getEzsignsignatures | Retrieve an existing Ezsigndocument&#39;s Ezsignsignatures
*ObjectEzsigndocumentApi* | [**ezsigndocumentGetFormDataV1**](docs/Api/ObjectEzsigndocumentApi.md#ezsigndocumentgetformdatav1) | **GET** /1/object/ezsigndocument/{pkiEzsigndocumentID}/getFormData | Retrieve an existing Ezsigndocument&#39;s Form Data
*ObjectEzsigndocumentApi* | [**ezsigndocumentGetObjectV1**](docs/Api/ObjectEzsigndocumentApi.md#ezsigndocumentgetobjectv1) | **GET** /1/object/ezsigndocument/{pkiEzsigndocumentID} | Retrieve an existing Ezsigndocument
*ObjectEzsigndocumentApi* | [**ezsigndocumentGetObjectV2**](docs/Api/ObjectEzsigndocumentApi.md#ezsigndocumentgetobjectv2) | **GET** /2/object/ezsigndocument/{pkiEzsigndocumentID} | Retrieve an existing Ezsigndocument
*ObjectEzsigndocumentApi* | [**ezsigndocumentGetTemporaryProofV1**](docs/Api/ObjectEzsigndocumentApi.md#ezsigndocumentgettemporaryproofv1) | **GET** /1/object/ezsigndocument/{pkiEzsigndocumentID}/getTemporaryProof | Retrieve the temporary proof
*ObjectEzsigndocumentApi* | [**ezsigndocumentGetWordsPositionsV1**](docs/Api/ObjectEzsigndocumentApi.md#ezsigndocumentgetwordspositionsv1) | **POST** /1/object/ezsigndocument/{pkiEzsigndocumentID}/getWordsPositions | Retrieve positions X,Y of given words from a Ezsigndocument
*ObjectEzsigndocumentApi* | [**ezsigndocumentPatchObjectV1**](docs/Api/ObjectEzsigndocumentApi.md#ezsigndocumentpatchobjectv1) | **PATCH** /1/object/ezsigndocument/{pkiEzsigndocumentID} | Patch an existing Ezsigndocument
*ObjectEzsigndocumentApi* | [**ezsigndocumentSubmitEzsignformV1**](docs/Api/ObjectEzsigndocumentApi.md#ezsigndocumentsubmitezsignformv1) | **POST** /1/object/ezsigndocument/{pkiEzsigndocumentID}/submitEzsignform | Submit the Ezsignform
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
*ObjectEzsignfolderApi* | [**ezsignfolderGetAttachmentCountV1**](docs/Api/ObjectEzsignfolderApi.md#ezsignfoldergetattachmentcountv1) | **GET** /1/object/ezsignfolder/{pkiEzsignfolderID}/getAttachmentCount | Retrieve Attachment count
*ObjectEzsignfolderApi* | [**ezsignfolderGetAttachmentsV1**](docs/Api/ObjectEzsignfolderApi.md#ezsignfoldergetattachmentsv1) | **GET** /1/object/ezsignfolder/{pkiEzsignfolderID}/getAttachments | Retrieve Ezsignfolder&#39;s Attachments
*ObjectEzsignfolderApi* | [**ezsignfolderGetCommunicationCountV1**](docs/Api/ObjectEzsignfolderApi.md#ezsignfoldergetcommunicationcountv1) | **GET** /1/object/ezsignfolder/{pkiEzsignfolderID}/getCommunicationCount | Retrieve Communication count
*ObjectEzsignfolderApi* | [**ezsignfolderGetCommunicationListV1**](docs/Api/ObjectEzsignfolderApi.md#ezsignfoldergetcommunicationlistv1) | **GET** /1/object/ezsignfolder/{pkiEzsignfolderID}/getCommunicationList | Retrieve Communication list
*ObjectEzsignfolderApi* | [**ezsignfolderGetCommunicationrecipientsV1**](docs/Api/ObjectEzsignfolderApi.md#ezsignfoldergetcommunicationrecipientsv1) | **GET** /1/object/ezsignfolder/{pkiEzsignfolderID}/getCommunicationrecipients | Retrieve Ezsignfolder&#39;s Communicationrecipient
*ObjectEzsignfolderApi* | [**ezsignfolderGetCommunicationsendersV1**](docs/Api/ObjectEzsignfolderApi.md#ezsignfoldergetcommunicationsendersv1) | **GET** /1/object/ezsignfolder/{pkiEzsignfolderID}/getCommunicationsenders | Retrieve Ezsignfolder&#39;s Communicationsender
*ObjectEzsignfolderApi* | [**ezsignfolderGetEzsigndocumentsV1**](docs/Api/ObjectEzsignfolderApi.md#ezsignfoldergetezsigndocumentsv1) | **GET** /1/object/ezsignfolder/{pkiEzsignfolderID}/getEzsigndocuments | Retrieve an existing Ezsignfolder&#39;s Ezsigndocuments
*ObjectEzsignfolderApi* | [**ezsignfolderGetEzsignfoldersignerassociationsV1**](docs/Api/ObjectEzsignfolderApi.md#ezsignfoldergetezsignfoldersignerassociationsv1) | **GET** /1/object/ezsignfolder/{pkiEzsignfolderID}/getEzsignfoldersignerassociations | Retrieve an existing Ezsignfolder&#39;s Ezsignfoldersignerassociations
*ObjectEzsignfolderApi* | [**ezsignfolderGetEzsignsignaturesAutomaticV1**](docs/Api/ObjectEzsignfolderApi.md#ezsignfoldergetezsignsignaturesautomaticv1) | **GET** /1/object/ezsignfolder/{pkiEzsignfolderID}/getEzsignsignaturesAutomatic | Retrieve an existing Ezsignfolder&#39;s automatic Ezsignsignatures
*ObjectEzsignfolderApi* | [**ezsignfolderGetFormsDataV1**](docs/Api/ObjectEzsignfolderApi.md#ezsignfoldergetformsdatav1) | **GET** /1/object/ezsignfolder/{pkiEzsignfolderID}/getFormsData | Retrieve an existing Ezsignfolder&#39;s forms data
*ObjectEzsignfolderApi* | [**ezsignfolderGetListV1**](docs/Api/ObjectEzsignfolderApi.md#ezsignfoldergetlistv1) | **GET** /1/object/ezsignfolder/getList | Retrieve Ezsignfolder list
*ObjectEzsignfolderApi* | [**ezsignfolderGetObjectV1**](docs/Api/ObjectEzsignfolderApi.md#ezsignfoldergetobjectv1) | **GET** /1/object/ezsignfolder/{pkiEzsignfolderID} | Retrieve an existing Ezsignfolder
*ObjectEzsignfolderApi* | [**ezsignfolderGetObjectV2**](docs/Api/ObjectEzsignfolderApi.md#ezsignfoldergetobjectv2) | **GET** /2/object/ezsignfolder/{pkiEzsignfolderID} | Retrieve an existing Ezsignfolder
*ObjectEzsignfolderApi* | [**ezsignfolderImportEzsignfoldersignerassociationsV1**](docs/Api/ObjectEzsignfolderApi.md#ezsignfolderimportezsignfoldersignerassociationsv1) | **POST** /1/object/ezsignfolder/{pkiEzsignfolderID}/importEzsignfoldersignerassociations | Import an existing Ezsignfoldersignerassociation into this Ezsignfolder
*ObjectEzsignfolderApi* | [**ezsignfolderImportEzsigntemplatepackageV1**](docs/Api/ObjectEzsignfolderApi.md#ezsignfolderimportezsigntemplatepackagev1) | **POST** /1/object/ezsignfolder/{pkiEzsignfolderID}/importEzsigntemplatepackage | Import an Ezsigntemplatepackage in the Ezsignfolder.
*ObjectEzsignfolderApi* | [**ezsignfolderReorderV1**](docs/Api/ObjectEzsignfolderApi.md#ezsignfolderreorderv1) | **POST** /1/object/ezsignfolder/{pkiEzsignfolderID}/reorder | Reorder Ezsigndocuments in the Ezsignfolder
*ObjectEzsignfolderApi* | [**ezsignfolderSendV1**](docs/Api/ObjectEzsignfolderApi.md#ezsignfoldersendv1) | **POST** /1/object/ezsignfolder/{pkiEzsignfolderID}/send | Send the Ezsignfolder to the signatories for signature
*ObjectEzsignfolderApi* | [**ezsignfolderSendV2**](docs/Api/ObjectEzsignfolderApi.md#ezsignfoldersendv2) | **POST** /2/object/ezsignfolder/{pkiEzsignfolderID}/send | Send the Ezsignfolder to the signatories for signature
*ObjectEzsignfolderApi* | [**ezsignfolderSendV3**](docs/Api/ObjectEzsignfolderApi.md#ezsignfoldersendv3) | **POST** /3/object/ezsignfolder/{pkiEzsignfolderID}/send | Send the Ezsignfolder to the signatories for signature
*ObjectEzsignfolderApi* | [**ezsignfolderUnsendV1**](docs/Api/ObjectEzsignfolderApi.md#ezsignfolderunsendv1) | **POST** /1/object/ezsignfolder/{pkiEzsignfolderID}/unsend | Unsend the Ezsignfolder
*ObjectEzsignfoldersignerassociationApi* | [**ezsignfoldersignerassociationCreateObjectV1**](docs/Api/ObjectEzsignfoldersignerassociationApi.md#ezsignfoldersignerassociationcreateobjectv1) | **POST** /1/object/ezsignfoldersignerassociation | Create a new Ezsignfoldersignerassociation
*ObjectEzsignfoldersignerassociationApi* | [**ezsignfoldersignerassociationCreateObjectV2**](docs/Api/ObjectEzsignfoldersignerassociationApi.md#ezsignfoldersignerassociationcreateobjectv2) | **POST** /2/object/ezsignfoldersignerassociation | Create a new Ezsignfoldersignerassociation
*ObjectEzsignfoldersignerassociationApi* | [**ezsignfoldersignerassociationDeleteObjectV1**](docs/Api/ObjectEzsignfoldersignerassociationApi.md#ezsignfoldersignerassociationdeleteobjectv1) | **DELETE** /1/object/ezsignfoldersignerassociation/{pkiEzsignfoldersignerassociationID} | Delete an existing Ezsignfoldersignerassociation
*ObjectEzsignfoldersignerassociationApi* | [**ezsignfoldersignerassociationEditObjectV1**](docs/Api/ObjectEzsignfoldersignerassociationApi.md#ezsignfoldersignerassociationeditobjectv1) | **PUT** /1/object/ezsignfoldersignerassociation/{pkiEzsignfoldersignerassociationID} | Edit an existing Ezsignfoldersignerassociation
*ObjectEzsignfoldersignerassociationApi* | [**ezsignfoldersignerassociationForceDisconnectV1**](docs/Api/ObjectEzsignfoldersignerassociationApi.md#ezsignfoldersignerassociationforcedisconnectv1) | **POST** /1/object/ezsignfoldersignerassociation/{pkiEzsignfoldersignerassociationID}/forceDisconnect | Disconnects the Ezsignfoldersignerassociation
*ObjectEzsignfoldersignerassociationApi* | [**ezsignfoldersignerassociationGetInPersonLoginUrlV1**](docs/Api/ObjectEzsignfoldersignerassociationApi.md#ezsignfoldersignerassociationgetinpersonloginurlv1) | **GET** /1/object/ezsignfoldersignerassociation/{pkiEzsignfoldersignerassociationID}/getInPersonLoginUrl | Retrieve a Login Url to allow In-Person signing
*ObjectEzsignfoldersignerassociationApi* | [**ezsignfoldersignerassociationGetObjectV1**](docs/Api/ObjectEzsignfoldersignerassociationApi.md#ezsignfoldersignerassociationgetobjectv1) | **GET** /1/object/ezsignfoldersignerassociation/{pkiEzsignfoldersignerassociationID} | Retrieve an existing Ezsignfoldersignerassociation
*ObjectEzsignfoldersignerassociationApi* | [**ezsignfoldersignerassociationGetObjectV2**](docs/Api/ObjectEzsignfoldersignerassociationApi.md#ezsignfoldersignerassociationgetobjectv2) | **GET** /2/object/ezsignfoldersignerassociation/{pkiEzsignfoldersignerassociationID} | Retrieve an existing Ezsignfoldersignerassociation
*ObjectEzsignfoldersignerassociationApi* | [**ezsignfoldersignerassociationPatchObjectV1**](docs/Api/ObjectEzsignfoldersignerassociationApi.md#ezsignfoldersignerassociationpatchobjectv1) | **PATCH** /1/object/ezsignfoldersignerassociation/{pkiEzsignfoldersignerassociationID} | Patch an existing Ezsignfoldersignerassociation
*ObjectEzsignfoldertypeApi* | [**ezsignfoldertypeCreateObjectV1**](docs/Api/ObjectEzsignfoldertypeApi.md#ezsignfoldertypecreateobjectv1) | **POST** /1/object/ezsignfoldertype | Create a new Ezsignfoldertype
*ObjectEzsignfoldertypeApi* | [**ezsignfoldertypeEditObjectV1**](docs/Api/ObjectEzsignfoldertypeApi.md#ezsignfoldertypeeditobjectv1) | **PUT** /1/object/ezsignfoldertype/{pkiEzsignfoldertypeID} | Edit an existing Ezsignfoldertype
*ObjectEzsignfoldertypeApi* | [**ezsignfoldertypeGetAutocompleteV1**](docs/Api/ObjectEzsignfoldertypeApi.md#ezsignfoldertypegetautocompletev1) | **GET** /1/object/ezsignfoldertype/getAutocomplete/{sSelector} | Retrieve Ezsignfoldertypes and IDs
*ObjectEzsignfoldertypeApi* | [**ezsignfoldertypeGetAutocompleteV2**](docs/Api/ObjectEzsignfoldertypeApi.md#ezsignfoldertypegetautocompletev2) | **GET** /2/object/ezsignfoldertype/getAutocomplete/{sSelector} | Retrieve Ezsignfoldertypes and IDs
*ObjectEzsignfoldertypeApi* | [**ezsignfoldertypeGetListV1**](docs/Api/ObjectEzsignfoldertypeApi.md#ezsignfoldertypegetlistv1) | **GET** /1/object/ezsignfoldertype/getList | Retrieve Ezsignfoldertype list
*ObjectEzsignfoldertypeApi* | [**ezsignfoldertypeGetObjectV2**](docs/Api/ObjectEzsignfoldertypeApi.md#ezsignfoldertypegetobjectv2) | **GET** /2/object/ezsignfoldertype/{pkiEzsignfoldertypeID} | Retrieve an existing Ezsignfoldertype
*ObjectEzsignformfieldgroupApi* | [**ezsignformfieldgroupCreateObjectV1**](docs/Api/ObjectEzsignformfieldgroupApi.md#ezsignformfieldgroupcreateobjectv1) | **POST** /1/object/ezsignformfieldgroup | Create a new Ezsignformfieldgroup
*ObjectEzsignformfieldgroupApi* | [**ezsignformfieldgroupDeleteObjectV1**](docs/Api/ObjectEzsignformfieldgroupApi.md#ezsignformfieldgroupdeleteobjectv1) | **DELETE** /1/object/ezsignformfieldgroup/{pkiEzsignformfieldgroupID} | Delete an existing Ezsignformfieldgroup
*ObjectEzsignformfieldgroupApi* | [**ezsignformfieldgroupEditObjectV1**](docs/Api/ObjectEzsignformfieldgroupApi.md#ezsignformfieldgroupeditobjectv1) | **PUT** /1/object/ezsignformfieldgroup/{pkiEzsignformfieldgroupID} | Edit an existing Ezsignformfieldgroup
*ObjectEzsignformfieldgroupApi* | [**ezsignformfieldgroupGetObjectV2**](docs/Api/ObjectEzsignformfieldgroupApi.md#ezsignformfieldgroupgetobjectv2) | **GET** /2/object/ezsignformfieldgroup/{pkiEzsignformfieldgroupID} | Retrieve an existing Ezsignformfieldgroup
*ObjectEzsignpageApi* | [**ezsignpageConsultV1**](docs/Api/ObjectEzsignpageApi.md#ezsignpageconsultv1) | **POST** /1/object/ezsignpage/{pkiEzsignpageID}/consult | Consult an Ezsignpage
*ObjectEzsignsignatureApi* | [**ezsignsignatureCreateObjectV1**](docs/Api/ObjectEzsignsignatureApi.md#ezsignsignaturecreateobjectv1) | **POST** /1/object/ezsignsignature | Create a new Ezsignsignature
*ObjectEzsignsignatureApi* | [**ezsignsignatureCreateObjectV2**](docs/Api/ObjectEzsignsignatureApi.md#ezsignsignaturecreateobjectv2) | **POST** /2/object/ezsignsignature | Create a new Ezsignsignature
*ObjectEzsignsignatureApi* | [**ezsignsignatureDeleteObjectV1**](docs/Api/ObjectEzsignsignatureApi.md#ezsignsignaturedeleteobjectv1) | **DELETE** /1/object/ezsignsignature/{pkiEzsignsignatureID} | Delete an existing Ezsignsignature
*ObjectEzsignsignatureApi* | [**ezsignsignatureEditObjectV1**](docs/Api/ObjectEzsignsignatureApi.md#ezsignsignatureeditobjectv1) | **PUT** /1/object/ezsignsignature/{pkiEzsignsignatureID} | Edit an existing Ezsignsignature
*ObjectEzsignsignatureApi* | [**ezsignsignatureGetEzsignsignatureattachmentV1**](docs/Api/ObjectEzsignsignatureApi.md#ezsignsignaturegetezsignsignatureattachmentv1) | **GET** /1/object/ezsignsignature/{pkiEzsignsignatureID}/getEzsignsignatureattachment | Retrieve an existing Ezsignsignature&#39;s Ezsignsignatureattachments
*ObjectEzsignsignatureApi* | [**ezsignsignatureGetEzsignsignaturesAutomaticV1**](docs/Api/ObjectEzsignsignatureApi.md#ezsignsignaturegetezsignsignaturesautomaticv1) | **GET** /1/object/ezsignsignature/getEzsignsignaturesAutomatic | Retrieve all automatic Ezsignsignatures
*ObjectEzsignsignatureApi* | [**ezsignsignatureGetObjectV2**](docs/Api/ObjectEzsignsignatureApi.md#ezsignsignaturegetobjectv2) | **GET** /2/object/ezsignsignature/{pkiEzsignsignatureID} | Retrieve an existing Ezsignsignature
*ObjectEzsignsignatureApi* | [**ezsignsignatureSignV1**](docs/Api/ObjectEzsignsignatureApi.md#ezsignsignaturesignv1) | **POST** /1/object/ezsignsignature/{pkiEzsignsignatureID}/sign | Sign the Ezsignsignature
*ObjectEzsignsignergroupApi* | [**ezsignsignergroupCreateObjectV1**](docs/Api/ObjectEzsignsignergroupApi.md#ezsignsignergroupcreateobjectv1) | **POST** /1/object/ezsignsignergroup | Create a new Ezsignsignergroup
*ObjectEzsignsignergroupApi* | [**ezsignsignergroupDeleteObjectV1**](docs/Api/ObjectEzsignsignergroupApi.md#ezsignsignergroupdeleteobjectv1) | **DELETE** /1/object/ezsignsignergroup/{pkiEzsignsignergroupID} | Delete an existing Ezsignsignergroup
*ObjectEzsignsignergroupApi* | [**ezsignsignergroupEditEzsignsignergroupmembershipsV1**](docs/Api/ObjectEzsignsignergroupApi.md#ezsignsignergroupeditezsignsignergroupmembershipsv1) | **PUT** /1/object/ezsignsignergroup/{pkiEzsignsignergroupID}/editEzsignsignergroupmemberships | Edit multiple Ezsignsignergroupmemberships
*ObjectEzsignsignergroupApi* | [**ezsignsignergroupEditObjectV1**](docs/Api/ObjectEzsignsignergroupApi.md#ezsignsignergroupeditobjectv1) | **PUT** /1/object/ezsignsignergroup/{pkiEzsignsignergroupID} | Edit an existing Ezsignsignergroup
*ObjectEzsignsignergroupApi* | [**ezsignsignergroupGetEzsignsignergroupmembershipsV1**](docs/Api/ObjectEzsignsignergroupApi.md#ezsignsignergroupgetezsignsignergroupmembershipsv1) | **GET** /1/object/ezsignsignergroup/{pkiEzsignsignergroupID}/getEzsignsignergroupmemberships | Retrieve an existing Ezsignsignergroup&#39;s Ezsignsignergroupmemberships
*ObjectEzsignsignergroupApi* | [**ezsignsignergroupGetObjectV2**](docs/Api/ObjectEzsignsignergroupApi.md#ezsignsignergroupgetobjectv2) | **GET** /2/object/ezsignsignergroup/{pkiEzsignsignergroupID} | Retrieve an existing Ezsignsignergroup
*ObjectEzsignsignergroupmembershipApi* | [**ezsignsignergroupmembershipCreateObjectV1**](docs/Api/ObjectEzsignsignergroupmembershipApi.md#ezsignsignergroupmembershipcreateobjectv1) | **POST** /1/object/ezsignsignergroupmembership | Create a new Ezsignsignergroupmembership
*ObjectEzsignsignergroupmembershipApi* | [**ezsignsignergroupmembershipDeleteObjectV1**](docs/Api/ObjectEzsignsignergroupmembershipApi.md#ezsignsignergroupmembershipdeleteobjectv1) | **DELETE** /1/object/ezsignsignergroupmembership/{pkiEzsignsignergroupmembershipID} | Delete an existing Ezsignsignergroupmembership
*ObjectEzsignsignergroupmembershipApi* | [**ezsignsignergroupmembershipGetObjectV2**](docs/Api/ObjectEzsignsignergroupmembershipApi.md#ezsignsignergroupmembershipgetobjectv2) | **GET** /2/object/ezsignsignergroupmembership/{pkiEzsignsignergroupmembershipID} | Retrieve an existing Ezsignsignergroupmembership
*ObjectEzsignsigningreasonApi* | [**ezsignsigningreasonCreateObjectV1**](docs/Api/ObjectEzsignsigningreasonApi.md#ezsignsigningreasoncreateobjectv1) | **POST** /1/object/ezsignsigningreason | Create a new Ezsignsigningreason
*ObjectEzsignsigningreasonApi* | [**ezsignsigningreasonEditObjectV1**](docs/Api/ObjectEzsignsigningreasonApi.md#ezsignsigningreasoneditobjectv1) | **PUT** /1/object/ezsignsigningreason/{pkiEzsignsigningreasonID} | Edit an existing Ezsignsigningreason
*ObjectEzsignsigningreasonApi* | [**ezsignsigningreasonGetAutocompleteV2**](docs/Api/ObjectEzsignsigningreasonApi.md#ezsignsigningreasongetautocompletev2) | **GET** /2/object/ezsignsigningreason/getAutocomplete/{sSelector} | Retrieve Ezsignsigningreasons and IDs
*ObjectEzsignsigningreasonApi* | [**ezsignsigningreasonGetListV1**](docs/Api/ObjectEzsignsigningreasonApi.md#ezsignsigningreasongetlistv1) | **GET** /1/object/ezsignsigningreason/getList | Retrieve Ezsignsigningreason list
*ObjectEzsignsigningreasonApi* | [**ezsignsigningreasonGetObjectV2**](docs/Api/ObjectEzsignsigningreasonApi.md#ezsignsigningreasongetobjectv2) | **GET** /2/object/ezsignsigningreason/{pkiEzsignsigningreasonID} | Retrieve an existing Ezsignsigningreason
*ObjectEzsigntemplateApi* | [**ezsigntemplateCopyV1**](docs/Api/ObjectEzsigntemplateApi.md#ezsigntemplatecopyv1) | **POST** /1/object/ezsigntemplate/{pkiEzsigntemplateID}/copy | Copy the Ezsigntemplate
*ObjectEzsigntemplateApi* | [**ezsigntemplateCreateObjectV1**](docs/Api/ObjectEzsigntemplateApi.md#ezsigntemplatecreateobjectv1) | **POST** /1/object/ezsigntemplate | Create a new Ezsigntemplate
*ObjectEzsigntemplateApi* | [**ezsigntemplateDeleteObjectV1**](docs/Api/ObjectEzsigntemplateApi.md#ezsigntemplatedeleteobjectv1) | **DELETE** /1/object/ezsigntemplate/{pkiEzsigntemplateID} | Delete an existing Ezsigntemplate
*ObjectEzsigntemplateApi* | [**ezsigntemplateEditObjectV1**](docs/Api/ObjectEzsigntemplateApi.md#ezsigntemplateeditobjectv1) | **PUT** /1/object/ezsigntemplate/{pkiEzsigntemplateID} | Edit an existing Ezsigntemplate
*ObjectEzsigntemplateApi* | [**ezsigntemplateGetAutocompleteV2**](docs/Api/ObjectEzsigntemplateApi.md#ezsigntemplategetautocompletev2) | **GET** /2/object/ezsigntemplate/getAutocomplete/{sSelector} | Retrieve Ezsigntemplates and IDs
*ObjectEzsigntemplateApi* | [**ezsigntemplateGetListV1**](docs/Api/ObjectEzsigntemplateApi.md#ezsigntemplategetlistv1) | **GET** /1/object/ezsigntemplate/getList | Retrieve Ezsigntemplate list
*ObjectEzsigntemplateApi* | [**ezsigntemplateGetObjectV1**](docs/Api/ObjectEzsigntemplateApi.md#ezsigntemplategetobjectv1) | **GET** /1/object/ezsigntemplate/{pkiEzsigntemplateID} | Retrieve an existing Ezsigntemplate
*ObjectEzsigntemplateApi* | [**ezsigntemplateGetObjectV2**](docs/Api/ObjectEzsigntemplateApi.md#ezsigntemplategetobjectv2) | **GET** /2/object/ezsigntemplate/{pkiEzsigntemplateID} | Retrieve an existing Ezsigntemplate
*ObjectEzsigntemplatedocumentApi* | [**ezsigntemplatedocumentCreateObjectV1**](docs/Api/ObjectEzsigntemplatedocumentApi.md#ezsigntemplatedocumentcreateobjectv1) | **POST** /1/object/ezsigntemplatedocument | Create a new Ezsigntemplatedocument
*ObjectEzsigntemplatedocumentApi* | [**ezsigntemplatedocumentEditEzsigntemplateformfieldgroupsV1**](docs/Api/ObjectEzsigntemplatedocumentApi.md#ezsigntemplatedocumenteditezsigntemplateformfieldgroupsv1) | **PUT** /1/object/ezsigntemplatedocument/{pkiEzsigntemplatedocumentID}/editEzsigntemplateformfieldgroups | Edit multiple Ezsigntemplateformfieldgroups
*ObjectEzsigntemplatedocumentApi* | [**ezsigntemplatedocumentEditEzsigntemplatesignaturesV1**](docs/Api/ObjectEzsigntemplatedocumentApi.md#ezsigntemplatedocumenteditezsigntemplatesignaturesv1) | **PUT** /1/object/ezsigntemplatedocument/{pkiEzsigntemplatedocumentID}/editEzsigntemplatesignatures | Edit multiple Ezsigntemplatesignatures
*ObjectEzsigntemplatedocumentApi* | [**ezsigntemplatedocumentEditObjectV1**](docs/Api/ObjectEzsigntemplatedocumentApi.md#ezsigntemplatedocumenteditobjectv1) | **PUT** /1/object/ezsigntemplatedocument/{pkiEzsigntemplatedocumentID} | Edit an existing Ezsigntemplatedocument
*ObjectEzsigntemplatedocumentApi* | [**ezsigntemplatedocumentFlattenV1**](docs/Api/ObjectEzsigntemplatedocumentApi.md#ezsigntemplatedocumentflattenv1) | **POST** /1/object/ezsigntemplatedocument/{pkiEzsigntemplatedocumentID}/flatten | Flatten
*ObjectEzsigntemplatedocumentApi* | [**ezsigntemplatedocumentGetEzsigntemplatedocumentpagesV1**](docs/Api/ObjectEzsigntemplatedocumentApi.md#ezsigntemplatedocumentgetezsigntemplatedocumentpagesv1) | **GET** /1/object/ezsigntemplatedocument/{pkiEzsigntemplatedocumentID}/getEzsigntemplatedocumentpages | Retrieve an existing Ezsigntemplatedocument&#39;s Ezsigntemplatedocumentpages
*ObjectEzsigntemplatedocumentApi* | [**ezsigntemplatedocumentGetEzsigntemplateformfieldgroupsV1**](docs/Api/ObjectEzsigntemplatedocumentApi.md#ezsigntemplatedocumentgetezsigntemplateformfieldgroupsv1) | **GET** /1/object/ezsigntemplatedocument/{pkiEzsigntemplatedocumentID}/getEzsigntemplateformfieldgroups | Retrieve an existing Ezsigntemplatedocument&#39;s Ezsigntemplateformfieldgroups
*ObjectEzsigntemplatedocumentApi* | [**ezsigntemplatedocumentGetEzsigntemplatesignaturesV1**](docs/Api/ObjectEzsigntemplatedocumentApi.md#ezsigntemplatedocumentgetezsigntemplatesignaturesv1) | **GET** /1/object/ezsigntemplatedocument/{pkiEzsigntemplatedocumentID}/getEzsigntemplatesignatures | Retrieve an existing Ezsigntemplatedocument&#39;s Ezsigntemplatesignatures
*ObjectEzsigntemplatedocumentApi* | [**ezsigntemplatedocumentGetObjectV2**](docs/Api/ObjectEzsigntemplatedocumentApi.md#ezsigntemplatedocumentgetobjectv2) | **GET** /2/object/ezsigntemplatedocument/{pkiEzsigntemplatedocumentID} | Retrieve an existing Ezsigntemplatedocument
*ObjectEzsigntemplatedocumentApi* | [**ezsigntemplatedocumentGetWordsPositionsV1**](docs/Api/ObjectEzsigntemplatedocumentApi.md#ezsigntemplatedocumentgetwordspositionsv1) | **POST** /1/object/ezsigntemplatedocument/{pkiEzsigntemplatedocumentID}/getWordsPositions | Retrieve positions X,Y of given words from a Ezsigntemplatedocument
*ObjectEzsigntemplatedocumentApi* | [**ezsigntemplatedocumentPatchObjectV1**](docs/Api/ObjectEzsigntemplatedocumentApi.md#ezsigntemplatedocumentpatchobjectv1) | **PATCH** /1/object/ezsigntemplatedocument/{pkiEzsigntemplatedocumentID} | Patch an existing Ezsigntemplatedocument
*ObjectEzsigntemplateformfieldgroupApi* | [**ezsigntemplateformfieldgroupCreateObjectV1**](docs/Api/ObjectEzsigntemplateformfieldgroupApi.md#ezsigntemplateformfieldgroupcreateobjectv1) | **POST** /1/object/ezsigntemplateformfieldgroup | Create a new Ezsigntemplateformfieldgroup
*ObjectEzsigntemplateformfieldgroupApi* | [**ezsigntemplateformfieldgroupDeleteObjectV1**](docs/Api/ObjectEzsigntemplateformfieldgroupApi.md#ezsigntemplateformfieldgroupdeleteobjectv1) | **DELETE** /1/object/ezsigntemplateformfieldgroup/{pkiEzsigntemplateformfieldgroupID} | Delete an existing Ezsigntemplateformfieldgroup
*ObjectEzsigntemplateformfieldgroupApi* | [**ezsigntemplateformfieldgroupEditObjectV1**](docs/Api/ObjectEzsigntemplateformfieldgroupApi.md#ezsigntemplateformfieldgroupeditobjectv1) | **PUT** /1/object/ezsigntemplateformfieldgroup/{pkiEzsigntemplateformfieldgroupID} | Edit an existing Ezsigntemplateformfieldgroup
*ObjectEzsigntemplateformfieldgroupApi* | [**ezsigntemplateformfieldgroupGetObjectV2**](docs/Api/ObjectEzsigntemplateformfieldgroupApi.md#ezsigntemplateformfieldgroupgetobjectv2) | **GET** /2/object/ezsigntemplateformfieldgroup/{pkiEzsigntemplateformfieldgroupID} | Retrieve an existing Ezsigntemplateformfieldgroup
*ObjectEzsigntemplatepackageApi* | [**ezsigntemplatepackageCreateObjectV1**](docs/Api/ObjectEzsigntemplatepackageApi.md#ezsigntemplatepackagecreateobjectv1) | **POST** /1/object/ezsigntemplatepackage | Create a new Ezsigntemplatepackage
*ObjectEzsigntemplatepackageApi* | [**ezsigntemplatepackageDeleteObjectV1**](docs/Api/ObjectEzsigntemplatepackageApi.md#ezsigntemplatepackagedeleteobjectv1) | **DELETE** /1/object/ezsigntemplatepackage/{pkiEzsigntemplatepackageID} | Delete an existing Ezsigntemplatepackage
*ObjectEzsigntemplatepackageApi* | [**ezsigntemplatepackageEditEzsigntemplatepackagesignersV1**](docs/Api/ObjectEzsigntemplatepackageApi.md#ezsigntemplatepackageeditezsigntemplatepackagesignersv1) | **PUT** /1/object/ezsigntemplatepackage/{pkiEzsigntemplatepackageID}/editEzsigntemplatepackagesigners | Edit multiple Ezsigntemplatepackagesigners
*ObjectEzsigntemplatepackageApi* | [**ezsigntemplatepackageEditObjectV1**](docs/Api/ObjectEzsigntemplatepackageApi.md#ezsigntemplatepackageeditobjectv1) | **PUT** /1/object/ezsigntemplatepackage/{pkiEzsigntemplatepackageID} | Edit an existing Ezsigntemplatepackage
*ObjectEzsigntemplatepackageApi* | [**ezsigntemplatepackageGetAutocompleteV2**](docs/Api/ObjectEzsigntemplatepackageApi.md#ezsigntemplatepackagegetautocompletev2) | **GET** /2/object/ezsigntemplatepackage/getAutocomplete/{sSelector} | Retrieve Ezsigntemplatepackages and IDs
*ObjectEzsigntemplatepackageApi* | [**ezsigntemplatepackageGetListV1**](docs/Api/ObjectEzsigntemplatepackageApi.md#ezsigntemplatepackagegetlistv1) | **GET** /1/object/ezsigntemplatepackage/getList | Retrieve Ezsigntemplatepackage list
*ObjectEzsigntemplatepackageApi* | [**ezsigntemplatepackageGetObjectV2**](docs/Api/ObjectEzsigntemplatepackageApi.md#ezsigntemplatepackagegetobjectv2) | **GET** /2/object/ezsigntemplatepackage/{pkiEzsigntemplatepackageID} | Retrieve an existing Ezsigntemplatepackage
*ObjectEzsigntemplatepackagemembershipApi* | [**ezsigntemplatepackagemembershipCreateObjectV1**](docs/Api/ObjectEzsigntemplatepackagemembershipApi.md#ezsigntemplatepackagemembershipcreateobjectv1) | **POST** /1/object/ezsigntemplatepackagemembership | Create a new Ezsigntemplatepackagemembership
*ObjectEzsigntemplatepackagemembershipApi* | [**ezsigntemplatepackagemembershipDeleteObjectV1**](docs/Api/ObjectEzsigntemplatepackagemembershipApi.md#ezsigntemplatepackagemembershipdeleteobjectv1) | **DELETE** /1/object/ezsigntemplatepackagemembership/{pkiEzsigntemplatepackagemembershipID} | Delete an existing Ezsigntemplatepackagemembership
*ObjectEzsigntemplatepackagemembershipApi* | [**ezsigntemplatepackagemembershipGetObjectV2**](docs/Api/ObjectEzsigntemplatepackagemembershipApi.md#ezsigntemplatepackagemembershipgetobjectv2) | **GET** /2/object/ezsigntemplatepackagemembership/{pkiEzsigntemplatepackagemembershipID} | Retrieve an existing Ezsigntemplatepackagemembership
*ObjectEzsigntemplatepackagesignerApi* | [**ezsigntemplatepackagesignerCreateObjectV1**](docs/Api/ObjectEzsigntemplatepackagesignerApi.md#ezsigntemplatepackagesignercreateobjectv1) | **POST** /1/object/ezsigntemplatepackagesigner | Create a new Ezsigntemplatepackagesigner
*ObjectEzsigntemplatepackagesignerApi* | [**ezsigntemplatepackagesignerDeleteObjectV1**](docs/Api/ObjectEzsigntemplatepackagesignerApi.md#ezsigntemplatepackagesignerdeleteobjectv1) | **DELETE** /1/object/ezsigntemplatepackagesigner/{pkiEzsigntemplatepackagesignerID} | Delete an existing Ezsigntemplatepackagesigner
*ObjectEzsigntemplatepackagesignerApi* | [**ezsigntemplatepackagesignerEditObjectV1**](docs/Api/ObjectEzsigntemplatepackagesignerApi.md#ezsigntemplatepackagesignereditobjectv1) | **PUT** /1/object/ezsigntemplatepackagesigner/{pkiEzsigntemplatepackagesignerID} | Edit an existing Ezsigntemplatepackagesigner
*ObjectEzsigntemplatepackagesignerApi* | [**ezsigntemplatepackagesignerGetObjectV2**](docs/Api/ObjectEzsigntemplatepackagesignerApi.md#ezsigntemplatepackagesignergetobjectv2) | **GET** /2/object/ezsigntemplatepackagesigner/{pkiEzsigntemplatepackagesignerID} | Retrieve an existing Ezsigntemplatepackagesigner
*ObjectEzsigntemplatepackagesignermembershipApi* | [**ezsigntemplatepackagesignermembershipCreateObjectV1**](docs/Api/ObjectEzsigntemplatepackagesignermembershipApi.md#ezsigntemplatepackagesignermembershipcreateobjectv1) | **POST** /1/object/ezsigntemplatepackagesignermembership | Create a new Ezsigntemplatepackagesignermembership
*ObjectEzsigntemplatepackagesignermembershipApi* | [**ezsigntemplatepackagesignermembershipDeleteObjectV1**](docs/Api/ObjectEzsigntemplatepackagesignermembershipApi.md#ezsigntemplatepackagesignermembershipdeleteobjectv1) | **DELETE** /1/object/ezsigntemplatepackagesignermembership/{pkiEzsigntemplatepackagesignermembershipID} | Delete an existing Ezsigntemplatepackagesignermembership
*ObjectEzsigntemplatepackagesignermembershipApi* | [**ezsigntemplatepackagesignermembershipGetObjectV2**](docs/Api/ObjectEzsigntemplatepackagesignermembershipApi.md#ezsigntemplatepackagesignermembershipgetobjectv2) | **GET** /2/object/ezsigntemplatepackagesignermembership/{pkiEzsigntemplatepackagesignermembershipID} | Retrieve an existing Ezsigntemplatepackagesignermembership
*ObjectEzsigntemplatesignatureApi* | [**ezsigntemplatesignatureCreateObjectV1**](docs/Api/ObjectEzsigntemplatesignatureApi.md#ezsigntemplatesignaturecreateobjectv1) | **POST** /1/object/ezsigntemplatesignature | Create a new Ezsigntemplatesignature
*ObjectEzsigntemplatesignatureApi* | [**ezsigntemplatesignatureDeleteObjectV1**](docs/Api/ObjectEzsigntemplatesignatureApi.md#ezsigntemplatesignaturedeleteobjectv1) | **DELETE** /1/object/ezsigntemplatesignature/{pkiEzsigntemplatesignatureID} | Delete an existing Ezsigntemplatesignature
*ObjectEzsigntemplatesignatureApi* | [**ezsigntemplatesignatureEditObjectV1**](docs/Api/ObjectEzsigntemplatesignatureApi.md#ezsigntemplatesignatureeditobjectv1) | **PUT** /1/object/ezsigntemplatesignature/{pkiEzsigntemplatesignatureID} | Edit an existing Ezsigntemplatesignature
*ObjectEzsigntemplatesignatureApi* | [**ezsigntemplatesignatureGetObjectV2**](docs/Api/ObjectEzsigntemplatesignatureApi.md#ezsigntemplatesignaturegetobjectv2) | **GET** /2/object/ezsigntemplatesignature/{pkiEzsigntemplatesignatureID} | Retrieve an existing Ezsigntemplatesignature
*ObjectEzsigntemplatesignerApi* | [**ezsigntemplatesignerCreateObjectV1**](docs/Api/ObjectEzsigntemplatesignerApi.md#ezsigntemplatesignercreateobjectv1) | **POST** /1/object/ezsigntemplatesigner | Create a new Ezsigntemplatesigner
*ObjectEzsigntemplatesignerApi* | [**ezsigntemplatesignerDeleteObjectV1**](docs/Api/ObjectEzsigntemplatesignerApi.md#ezsigntemplatesignerdeleteobjectv1) | **DELETE** /1/object/ezsigntemplatesigner/{pkiEzsigntemplatesignerID} | Delete an existing Ezsigntemplatesigner
*ObjectEzsigntemplatesignerApi* | [**ezsigntemplatesignerEditObjectV1**](docs/Api/ObjectEzsigntemplatesignerApi.md#ezsigntemplatesignereditobjectv1) | **PUT** /1/object/ezsigntemplatesigner/{pkiEzsigntemplatesignerID} | Edit an existing Ezsigntemplatesigner
*ObjectEzsigntemplatesignerApi* | [**ezsigntemplatesignerGetObjectV2**](docs/Api/ObjectEzsigntemplatesignerApi.md#ezsigntemplatesignergetobjectv2) | **GET** /2/object/ezsigntemplatesigner/{pkiEzsigntemplatesignerID} | Retrieve an existing Ezsigntemplatesigner
*ObjectEzsigntsarequirementApi* | [**ezsigntsarequirementGetAutocompleteV2**](docs/Api/ObjectEzsigntsarequirementApi.md#ezsigntsarequirementgetautocompletev2) | **GET** /2/object/ezsigntsarequirement/getAutocomplete/{sSelector} | Retrieve Ezsigntsarequirements and IDs
*ObjectFontApi* | [**fontGetAutocompleteV2**](docs/Api/ObjectFontApi.md#fontgetautocompletev2) | **GET** /2/object/font/getAutocomplete/{sSelector} | Retrieve Fonts and IDs
*ObjectFranchisebrokerApi* | [**franchisebrokerGetAutocompleteV1**](docs/Api/ObjectFranchisebrokerApi.md#franchisebrokergetautocompletev1) | **GET** /1/object/franchisebroker/getAutocomplete/{sSelector} | Retrieve Franchisebrokers and IDs
*ObjectFranchisebrokerApi* | [**franchisebrokerGetAutocompleteV2**](docs/Api/ObjectFranchisebrokerApi.md#franchisebrokergetautocompletev2) | **GET** /2/object/franchisebroker/getAutocomplete/{sSelector} | Retrieve Franchisebrokers and IDs
*ObjectFranchiseofficeApi* | [**franchiseofficeGetAutocompleteV2**](docs/Api/ObjectFranchiseofficeApi.md#franchiseofficegetautocompletev2) | **GET** /2/object/franchiseoffice/getAutocomplete/{sSelector} | Retrieve Franchiseoffices and IDs
*ObjectFranchisereferalincomeApi* | [**franchisereferalincomeCreateObjectV1**](docs/Api/ObjectFranchisereferalincomeApi.md#franchisereferalincomecreateobjectv1) | **POST** /1/object/franchisereferalincome | Create a new Franchisereferalincome
*ObjectFranchisereferalincomeApi* | [**franchisereferalincomeCreateObjectV2**](docs/Api/ObjectFranchisereferalincomeApi.md#franchisereferalincomecreateobjectv2) | **POST** /2/object/franchisereferalincome | Create a new Franchisereferalincome
*ObjectInscriptionApi* | [**inscriptionGetAttachmentsV1**](docs/Api/ObjectInscriptionApi.md#inscriptiongetattachmentsv1) | **GET** /1/object/inscription/{pkiInscriptionID}/getAttachments | Retrieve Inscription&#39;s Attachments
*ObjectInscriptionApi* | [**inscriptionGetCommunicationListV1**](docs/Api/ObjectInscriptionApi.md#inscriptiongetcommunicationlistv1) | **GET** /1/object/inscription/{pkiInscriptionID}/getCommunicationList | Retrieve Communication list
*ObjectInscriptionApi* | [**inscriptionGetCommunicationsendersV1**](docs/Api/ObjectInscriptionApi.md#inscriptiongetcommunicationsendersv1) | **GET** /1/object/inscription/{pkiInscriptionID}/getCommunicationsenders | Retrieve Inscription&#39;s Communicationsender
*ObjectInscriptionnotauthenticatedApi* | [**inscriptionnotauthenticatedGetCommunicationListV1**](docs/Api/ObjectInscriptionnotauthenticatedApi.md#inscriptionnotauthenticatedgetcommunicationlistv1) | **GET** /1/object/inscriptionnotauthenticated/{pkiInscriptionnotauthenticatedID}/getCommunicationList | Retrieve Communication list
*ObjectInscriptiontempApi* | [**inscriptiontempGetCommunicationListV1**](docs/Api/ObjectInscriptiontempApi.md#inscriptiontempgetcommunicationlistv1) | **GET** /1/object/inscriptiontemp/{pkiInscriptiontempID}/getCommunicationList | Retrieve Communication list
*ObjectInvoiceApi* | [**invoiceGetAttachmentsV1**](docs/Api/ObjectInvoiceApi.md#invoicegetattachmentsv1) | **GET** /1/object/invoice/{pkiInvoiceID}/getAttachments | Retrieve Invoice&#39;s Attachments
*ObjectInvoiceApi* | [**invoiceGetCommunicationListV1**](docs/Api/ObjectInvoiceApi.md#invoicegetcommunicationlistv1) | **GET** /1/object/invoice/{pkiInvoiceID}/getCommunicationList | Retrieve Communication list
*ObjectLanguageApi* | [**languageGetAutocompleteV2**](docs/Api/ObjectLanguageApi.md#languagegetautocompletev2) | **GET** /2/object/language/getAutocomplete/{sSelector} | Retrieve Languages and IDs
*ObjectModulegroupApi* | [**modulegroupGetAllV1**](docs/Api/ObjectModulegroupApi.md#modulegroupgetallv1) | **GET** /1/object/modulegroup/getAll/{eContext} | Retrieve all Modulegroups
*ObjectNotificationsectionApi* | [**notificationsectionGetNotificationtestsV1**](docs/Api/ObjectNotificationsectionApi.md#notificationsectiongetnotificationtestsv1) | **GET** /1/object/notificationsection/{pkiNotificationsectionID}/getNotificationtests | Retrieve an existing Notificationsection&#39;s Notificationtests
*ObjectNotificationtestApi* | [**notificationtestGetElementsV1**](docs/Api/ObjectNotificationtestApi.md#notificationtestgetelementsv1) | **GET** /1/object/notificationtest/{pkiNotificationtestID}/getElements | Retrieve an existing Notificationtest&#39;s Elements
*ObjectOtherincomeApi* | [**otherincomeGetCommunicationListV1**](docs/Api/ObjectOtherincomeApi.md#otherincomegetcommunicationlistv1) | **GET** /1/object/otherincome/{pkiOtherincomeID}/getCommunicationList | Retrieve Communication list
*ObjectPaymenttermApi* | [**paymenttermCreateObjectV1**](docs/Api/ObjectPaymenttermApi.md#paymenttermcreateobjectv1) | **POST** /1/object/paymentterm | Create a new Paymentterm
*ObjectPaymenttermApi* | [**paymenttermEditObjectV1**](docs/Api/ObjectPaymenttermApi.md#paymenttermeditobjectv1) | **PUT** /1/object/paymentterm/{pkiPaymenttermID} | Edit an existing Paymentterm
*ObjectPaymenttermApi* | [**paymenttermGetAutocompleteV2**](docs/Api/ObjectPaymenttermApi.md#paymenttermgetautocompletev2) | **GET** /2/object/paymentterm/getAutocomplete/{sSelector} | Retrieve Paymentterms and IDs
*ObjectPaymenttermApi* | [**paymenttermGetListV1**](docs/Api/ObjectPaymenttermApi.md#paymenttermgetlistv1) | **GET** /1/object/paymentterm/getList | Retrieve Paymentterm list
*ObjectPaymenttermApi* | [**paymenttermGetObjectV2**](docs/Api/ObjectPaymenttermApi.md#paymenttermgetobjectv2) | **GET** /2/object/paymentterm/{pkiPaymenttermID} | Retrieve an existing Paymentterm
*ObjectPeriodApi* | [**periodGetAutocompleteV1**](docs/Api/ObjectPeriodApi.md#periodgetautocompletev1) | **GET** /1/object/period/getAutocomplete/{sSelector} | Retrieve Periods and IDs
*ObjectPeriodApi* | [**periodGetAutocompleteV2**](docs/Api/ObjectPeriodApi.md#periodgetautocompletev2) | **GET** /2/object/period/getAutocomplete/{sSelector} | Retrieve Periods and IDs
*ObjectPermissionApi* | [**permissionCreateObjectV1**](docs/Api/ObjectPermissionApi.md#permissioncreateobjectv1) | **POST** /1/object/permission | Create a new Permission
*ObjectPermissionApi* | [**permissionDeleteObjectV1**](docs/Api/ObjectPermissionApi.md#permissiondeleteobjectv1) | **DELETE** /1/object/permission/{pkiPermissionID} | Delete an existing Permission
*ObjectPermissionApi* | [**permissionEditObjectV1**](docs/Api/ObjectPermissionApi.md#permissioneditobjectv1) | **PUT** /1/object/permission/{pkiPermissionID} | Edit an existing Permission
*ObjectPermissionApi* | [**permissionGetObjectV2**](docs/Api/ObjectPermissionApi.md#permissiongetobjectv2) | **GET** /2/object/permission/{pkiPermissionID} | Retrieve an existing Permission
*ObjectPhonetypeApi* | [**phonetypeGetAutocompleteV2**](docs/Api/ObjectPhonetypeApi.md#phonetypegetautocompletev2) | **GET** /2/object/phonetype/getAutocomplete/{sSelector} | Retrieve Phonetypes and IDs
*ObjectRejectedoffertopurchaseApi* | [**rejectedoffertopurchaseGetCommunicationListV1**](docs/Api/ObjectRejectedoffertopurchaseApi.md#rejectedoffertopurchasegetcommunicationlistv1) | **GET** /1/object/rejectedoffertopurchase/{pkiRejectedoffertopurchaseID}/getCommunicationList | Retrieve Communication list
*ObjectSecretquestionApi* | [**secretquestionGetAutocompleteV2**](docs/Api/ObjectSecretquestionApi.md#secretquestiongetautocompletev2) | **GET** /2/object/secretquestion/getAutocomplete/{sSelector} | Retrieve Secretquestions and IDs
*ObjectSessionhistoryApi* | [**sessionhistoryGetListV1**](docs/Api/ObjectSessionhistoryApi.md#sessionhistorygetlistv1) | **GET** /1/object/sessionhistory/getList | Retrieve Sessionhistory list
*ObjectSignatureApi* | [**signatureCreateObjectV1**](docs/Api/ObjectSignatureApi.md#signaturecreateobjectv1) | **POST** /1/object/signature | Create a new Signature
*ObjectSignatureApi* | [**signatureDeleteObjectV1**](docs/Api/ObjectSignatureApi.md#signaturedeleteobjectv1) | **DELETE** /1/object/signature/{pkiSignatureID} | Delete an existing Signature
*ObjectSignatureApi* | [**signatureEditObjectV1**](docs/Api/ObjectSignatureApi.md#signatureeditobjectv1) | **PUT** /1/object/signature/{pkiSignatureID} | Edit an existing Signature
*ObjectSignatureApi* | [**signatureGetObjectV2**](docs/Api/ObjectSignatureApi.md#signaturegetobjectv2) | **GET** /2/object/signature/{pkiSignatureID} | Retrieve an existing Signature
*ObjectSubnetApi* | [**subnetCreateObjectV1**](docs/Api/ObjectSubnetApi.md#subnetcreateobjectv1) | **POST** /1/object/subnet | Create a new Subnet
*ObjectSubnetApi* | [**subnetDeleteObjectV1**](docs/Api/ObjectSubnetApi.md#subnetdeleteobjectv1) | **DELETE** /1/object/subnet/{pkiSubnetID} | Delete an existing Subnet
*ObjectSubnetApi* | [**subnetEditObjectV1**](docs/Api/ObjectSubnetApi.md#subneteditobjectv1) | **PUT** /1/object/subnet/{pkiSubnetID} | Edit an existing Subnet
*ObjectSubnetApi* | [**subnetGetObjectV2**](docs/Api/ObjectSubnetApi.md#subnetgetobjectv2) | **GET** /2/object/subnet/{pkiSubnetID} | Retrieve an existing Subnet
*ObjectSystemconfigurationApi* | [**systemconfigurationEditObjectV1**](docs/Api/ObjectSystemconfigurationApi.md#systemconfigurationeditobjectv1) | **PUT** /1/object/systemconfiguration/{pkiSystemconfigurationID} | Edit an existing Systemconfiguration
*ObjectSystemconfigurationApi* | [**systemconfigurationGetObjectV2**](docs/Api/ObjectSystemconfigurationApi.md#systemconfigurationgetobjectv2) | **GET** /2/object/systemconfiguration/{pkiSystemconfigurationID} | Retrieve an existing Systemconfiguration
*ObjectTaxassignmentApi* | [**taxassignmentGetAutocompleteV2**](docs/Api/ObjectTaxassignmentApi.md#taxassignmentgetautocompletev2) | **GET** /2/object/taxassignment/getAutocomplete/{sSelector} | Retrieve Taxassignments and IDs
*ObjectTimezoneApi* | [**timezoneGetAutocompleteV2**](docs/Api/ObjectTimezoneApi.md#timezonegetautocompletev2) | **GET** /2/object/timezone/getAutocomplete/{sSelector} | Retrieve Timezones and IDs
*ObjectUserApi* | [**userCreateObjectV1**](docs/Api/ObjectUserApi.md#usercreateobjectv1) | **POST** /1/object/user | Create a new User
*ObjectUserApi* | [**userEditObjectV1**](docs/Api/ObjectUserApi.md#usereditobjectv1) | **PUT** /1/object/user/{pkiUserID} | Edit an existing User
*ObjectUserApi* | [**userEditPermissionsV1**](docs/Api/ObjectUserApi.md#usereditpermissionsv1) | **PUT** /1/object/user/{pkiUserID}/editPermissions | Edit multiple Permissions
*ObjectUserApi* | [**userGetApikeysV1**](docs/Api/ObjectUserApi.md#usergetapikeysv1) | **GET** /1/object/user/{pkiUserID}/getApikeys | Retrieve an existing User&#39;s Apikeys
*ObjectUserApi* | [**userGetAutocompleteV2**](docs/Api/ObjectUserApi.md#usergetautocompletev2) | **GET** /2/object/user/getAutocomplete/{sSelector} | Retrieve Users and IDs
*ObjectUserApi* | [**userGetEffectivePermissionsV1**](docs/Api/ObjectUserApi.md#usergeteffectivepermissionsv1) | **GET** /1/object/user/{pkiUserID}/getEffectivePermissions | Retrieve an existing User&#39;s Effective Permissions
*ObjectUserApi* | [**userGetListV1**](docs/Api/ObjectUserApi.md#usergetlistv1) | **GET** /1/object/user/getList | Retrieve User list
*ObjectUserApi* | [**userGetObjectV2**](docs/Api/ObjectUserApi.md#usergetobjectv2) | **GET** /2/object/user/{pkiUserID} | Retrieve an existing User
*ObjectUserApi* | [**userGetPermissionsV1**](docs/Api/ObjectUserApi.md#usergetpermissionsv1) | **GET** /1/object/user/{pkiUserID}/getPermissions | Retrieve an existing User&#39;s Permissions
*ObjectUserApi* | [**userGetSubnetsV1**](docs/Api/ObjectUserApi.md#usergetsubnetsv1) | **GET** /1/object/user/{pkiUserID}/getSubnets | Retrieve an existing User&#39;s Subnets
*ObjectUserApi* | [**userSendPasswordResetV1**](docs/Api/ObjectUserApi.md#usersendpasswordresetv1) | **POST** /1/object/user/{pkiUserID}/sendPasswordReset | Send password reset
*ObjectUsergroupApi* | [**usergroupCreateObjectV1**](docs/Api/ObjectUsergroupApi.md#usergroupcreateobjectv1) | **POST** /1/object/usergroup | Create a new Usergroup
*ObjectUsergroupApi* | [**usergroupEditObjectV1**](docs/Api/ObjectUsergroupApi.md#usergroupeditobjectv1) | **PUT** /1/object/usergroup/{pkiUsergroupID} | Edit an existing Usergroup
*ObjectUsergroupApi* | [**usergroupEditPermissionsV1**](docs/Api/ObjectUsergroupApi.md#usergroupeditpermissionsv1) | **PUT** /1/object/usergroup/{pkiUsergroupID}/editPermissions | Edit multiple Permissions
*ObjectUsergroupApi* | [**usergroupEditUsergroupdelegationsV1**](docs/Api/ObjectUsergroupApi.md#usergroupeditusergroupdelegationsv1) | **PUT** /1/object/usergroup/{pkiUsergroupID}/editUsergroupdelegations | Edit multiple Usergroupdelegations
*ObjectUsergroupApi* | [**usergroupEditUsergroupmembershipsV1**](docs/Api/ObjectUsergroupApi.md#usergroupeditusergroupmembershipsv1) | **PUT** /1/object/usergroup/{pkiUsergroupID}/editUsergroupmemberships | Edit multiple Usergroupmemberships
*ObjectUsergroupApi* | [**usergroupGetAutocompleteV2**](docs/Api/ObjectUsergroupApi.md#usergroupgetautocompletev2) | **GET** /2/object/usergroup/getAutocomplete/{sSelector} | Retrieve Usergroups and IDs
*ObjectUsergroupApi* | [**usergroupGetListV1**](docs/Api/ObjectUsergroupApi.md#usergroupgetlistv1) | **GET** /1/object/usergroup/getList | Retrieve Usergroup list
*ObjectUsergroupApi* | [**usergroupGetObjectV2**](docs/Api/ObjectUsergroupApi.md#usergroupgetobjectv2) | **GET** /2/object/usergroup/{pkiUsergroupID} | Retrieve an existing Usergroup
*ObjectUsergroupApi* | [**usergroupGetPermissionsV1**](docs/Api/ObjectUsergroupApi.md#usergroupgetpermissionsv1) | **GET** /1/object/usergroup/{pkiUsergroupID}/getPermissions | Retrieve an existing Usergroup&#39;s Permissions
*ObjectUsergroupApi* | [**usergroupGetUsergroupdelegationsV1**](docs/Api/ObjectUsergroupApi.md#usergroupgetusergroupdelegationsv1) | **GET** /1/object/usergroup/{pkiUsergroupID}/getUsergroupdelegations | Retrieve an existing Usergroup&#39;s Usergroupdelegations
*ObjectUsergroupApi* | [**usergroupGetUsergroupmembershipsV1**](docs/Api/ObjectUsergroupApi.md#usergroupgetusergroupmembershipsv1) | **GET** /1/object/usergroup/{pkiUsergroupID}/getUsergroupmemberships | Retrieve an existing Usergroup&#39;s Usergroupmemberships
*ObjectUsergroupdelegationApi* | [**usergroupdelegationCreateObjectV1**](docs/Api/ObjectUsergroupdelegationApi.md#usergroupdelegationcreateobjectv1) | **POST** /1/object/usergroupdelegation | Create a new Usergroupdelegation
*ObjectUsergroupdelegationApi* | [**usergroupdelegationDeleteObjectV1**](docs/Api/ObjectUsergroupdelegationApi.md#usergroupdelegationdeleteobjectv1) | **DELETE** /1/object/usergroupdelegation/{pkiUsergroupdelegationID} | Delete an existing Usergroupdelegation
*ObjectUsergroupdelegationApi* | [**usergroupdelegationEditObjectV1**](docs/Api/ObjectUsergroupdelegationApi.md#usergroupdelegationeditobjectv1) | **PUT** /1/object/usergroupdelegation/{pkiUsergroupdelegationID} | Edit an existing Usergroupdelegation
*ObjectUsergroupdelegationApi* | [**usergroupdelegationGetObjectV2**](docs/Api/ObjectUsergroupdelegationApi.md#usergroupdelegationgetobjectv2) | **GET** /2/object/usergroupdelegation/{pkiUsergroupdelegationID} | Retrieve an existing Usergroupdelegation
*ObjectUsergroupmembershipApi* | [**usergroupmembershipCreateObjectV1**](docs/Api/ObjectUsergroupmembershipApi.md#usergroupmembershipcreateobjectv1) | **POST** /1/object/usergroupmembership | Create a new Usergroupmembership
*ObjectUsergroupmembershipApi* | [**usergroupmembershipDeleteObjectV1**](docs/Api/ObjectUsergroupmembershipApi.md#usergroupmembershipdeleteobjectv1) | **DELETE** /1/object/usergroupmembership/{pkiUsergroupmembershipID} | Delete an existing Usergroupmembership
*ObjectUsergroupmembershipApi* | [**usergroupmembershipEditObjectV1**](docs/Api/ObjectUsergroupmembershipApi.md#usergroupmembershipeditobjectv1) | **PUT** /1/object/usergroupmembership/{pkiUsergroupmembershipID} | Edit an existing Usergroupmembership
*ObjectUsergroupmembershipApi* | [**usergroupmembershipGetObjectV2**](docs/Api/ObjectUsergroupmembershipApi.md#usergroupmembershipgetobjectv2) | **GET** /2/object/usergroupmembership/{pkiUsergroupmembershipID} | Retrieve an existing Usergroupmembership
*ObjectUserlogintypeApi* | [**userlogintypeGetAutocompleteV2**](docs/Api/ObjectUserlogintypeApi.md#userlogintypegetautocompletev2) | **GET** /2/object/userlogintype/getAutocomplete/{sSelector} | Retrieve Userlogintypes and IDs
*ObjectUserstagedApi* | [**userstagedCreateUserV1**](docs/Api/ObjectUserstagedApi.md#userstagedcreateuserv1) | **POST** /1/object/userstaged/{pkiUserstagedID}/createUser | Create a User from a Userstaged and then map it
*ObjectUserstagedApi* | [**userstagedDeleteObjectV1**](docs/Api/ObjectUserstagedApi.md#userstageddeleteobjectv1) | **DELETE** /1/object/userstaged/{pkiUserstagedID} | Delete an existing Userstaged
*ObjectUserstagedApi* | [**userstagedGetListV1**](docs/Api/ObjectUserstagedApi.md#userstagedgetlistv1) | **GET** /1/object/userstaged/getList | Retrieve Userstaged list
*ObjectUserstagedApi* | [**userstagedGetObjectV2**](docs/Api/ObjectUserstagedApi.md#userstagedgetobjectv2) | **GET** /2/object/userstaged/{pkiUserstagedID} | Retrieve an existing Userstaged
*ObjectUserstagedApi* | [**userstagedMapV1**](docs/Api/ObjectUserstagedApi.md#userstagedmapv1) | **POST** /1/object/userstaged/{pkiUserstagedID}/map | Map the Userstaged to an existing user
*ObjectVariableexpenseApi* | [**variableexpenseCreateObjectV1**](docs/Api/ObjectVariableexpenseApi.md#variableexpensecreateobjectv1) | **POST** /1/object/variableexpense | Create a new Variableexpense
*ObjectVariableexpenseApi* | [**variableexpenseEditObjectV1**](docs/Api/ObjectVariableexpenseApi.md#variableexpenseeditobjectv1) | **PUT** /1/object/variableexpense/{pkiVariableexpenseID} | Edit an existing Variableexpense
*ObjectVariableexpenseApi* | [**variableexpenseGetAutocompleteV2**](docs/Api/ObjectVariableexpenseApi.md#variableexpensegetautocompletev2) | **GET** /2/object/variableexpense/getAutocomplete/{sSelector} | Retrieve Variableexpenses and IDs
*ObjectVariableexpenseApi* | [**variableexpenseGetListV1**](docs/Api/ObjectVariableexpenseApi.md#variableexpensegetlistv1) | **GET** /1/object/variableexpense/getList | Retrieve Variableexpense list
*ObjectVariableexpenseApi* | [**variableexpenseGetObjectV2**](docs/Api/ObjectVariableexpenseApi.md#variableexpensegetobjectv2) | **GET** /2/object/variableexpense/{pkiVariableexpenseID} | Retrieve an existing Variableexpense
*ObjectVersionhistoryApi* | [**versionhistoryGetObjectV2**](docs/Api/ObjectVersionhistoryApi.md#versionhistorygetobjectv2) | **GET** /2/object/versionhistory/{pkiVersionhistoryID} | Retrieve an existing Versionhistory
*ObjectWebhookApi* | [**webhookCreateObjectV1**](docs/Api/ObjectWebhookApi.md#webhookcreateobjectv1) | **POST** /1/object/webhook | Create a new Webhook
*ObjectWebhookApi* | [**webhookCreateObjectV2**](docs/Api/ObjectWebhookApi.md#webhookcreateobjectv2) | **POST** /2/object/webhook | Create a new Webhook
*ObjectWebhookApi* | [**webhookDeleteObjectV1**](docs/Api/ObjectWebhookApi.md#webhookdeleteobjectv1) | **DELETE** /1/object/webhook/{pkiWebhookID} | Delete an existing Webhook
*ObjectWebhookApi* | [**webhookEditObjectV1**](docs/Api/ObjectWebhookApi.md#webhookeditobjectv1) | **PUT** /1/object/webhook/{pkiWebhookID} | Edit an existing Webhook
*ObjectWebhookApi* | [**webhookGetHistoryV1**](docs/Api/ObjectWebhookApi.md#webhookgethistoryv1) | **GET** /1/object/webhook/{pkiWebhookID}/getHistory | Retrieve the logs for recent Webhook calls
*ObjectWebhookApi* | [**webhookGetListV1**](docs/Api/ObjectWebhookApi.md#webhookgetlistv1) | **GET** /1/object/webhook/getList | Retrieve Webhook list
*ObjectWebhookApi* | [**webhookGetObjectV2**](docs/Api/ObjectWebhookApi.md#webhookgetobjectv2) | **GET** /2/object/webhook/{pkiWebhookID} | Retrieve an existing Webhook
*ObjectWebhookApi* | [**webhookRegenerateApikeyV1**](docs/Api/ObjectWebhookApi.md#webhookregenerateapikeyv1) | **POST** /1/object/webhook/{pkiWebhookID}/regenerateApikey | Regenerate the Apikey
*ObjectWebhookApi* | [**webhookTestV1**](docs/Api/ObjectWebhookApi.md#webhooktestv1) | **POST** /1/object/webhook/{pkiWebhookID}/test | Test the Webhook by calling the Url
*ScimGroupsApi* | [**groupsCreateObjectScimV2**](docs/Api/ScimGroupsApi.md#groupscreateobjectscimv2) | **POST** /2/scim/Groups | Create a new Usergroup
*ScimGroupsApi* | [**groupsDeleteObjectScimV2**](docs/Api/ScimGroupsApi.md#groupsdeleteobjectscimv2) | **DELETE** /2/scim/Groups/{groupId} | Delete an existing Usergroup
*ScimGroupsApi* | [**groupsEditObjectScimV2**](docs/Api/ScimGroupsApi.md#groupseditobjectscimv2) | **PUT** /2/scim/Groups/{groupId} | Edit an existing Usergroup
*ScimGroupsApi* | [**groupsGetListScimV2**](docs/Api/ScimGroupsApi.md#groupsgetlistscimv2) | **GET** /2/scim/Groups | Retrieve Usergroup list
*ScimGroupsApi* | [**groupsGetObjectScimV2**](docs/Api/ScimGroupsApi.md#groupsgetobjectscimv2) | **GET** /2/scim/Groups/{groupId} | Retrieve an existing Usergroup
*ScimServiceProviderConfigApi* | [**serviceProviderConfigGetObjectScimV2**](docs/Api/ScimServiceProviderConfigApi.md#serviceproviderconfiggetobjectscimv2) | **GET** /2/scim/ServiceProviderConfig | Get Service Provider Configuration
*ScimUsersApi* | [**usersCreateObjectScimV2**](docs/Api/ScimUsersApi.md#userscreateobjectscimv2) | **POST** /2/scim/Users | Create a new User
*ScimUsersApi* | [**usersDeleteObjectScimV2**](docs/Api/ScimUsersApi.md#usersdeleteobjectscimv2) | **DELETE** /2/scim/Users/{userId} | Delete an existing User
*ScimUsersApi* | [**usersEditObjectScimV2**](docs/Api/ScimUsersApi.md#userseditobjectscimv2) | **PUT** /2/scim/Users/{userId} | Edit an existing User
*ScimUsersApi* | [**usersGetListScimV2**](docs/Api/ScimUsersApi.md#usersgetlistscimv2) | **GET** /2/scim/Users | Retrieve User list
*ScimUsersApi* | [**usersGetObjectScimV2**](docs/Api/ScimUsersApi.md#usersgetobjectscimv2) | **GET** /2/scim/Users/{userId} | Retrieve an existing User

## Models

- [ActivesessionGetCurrentV1Response](docs/Model/ActivesessionGetCurrentV1Response.md)
- [ActivesessionGetCurrentV1ResponseMPayload](docs/Model/ActivesessionGetCurrentV1ResponseMPayload.md)
- [ActivesessionGetListV1Response](docs/Model/ActivesessionGetListV1Response.md)
- [ActivesessionGetListV1ResponseMPayload](docs/Model/ActivesessionGetListV1ResponseMPayload.md)
- [ActivesessionListElement](docs/Model/ActivesessionListElement.md)
- [ActivesessionResponse](docs/Model/ActivesessionResponse.md)
- [ActivesessionResponseCompound](docs/Model/ActivesessionResponseCompound.md)
- [ActivesessionResponseCompoundApikey](docs/Model/ActivesessionResponseCompoundApikey.md)
- [ActivesessionResponseCompoundUser](docs/Model/ActivesessionResponseCompoundUser.md)
- [AddressRequest](docs/Model/AddressRequest.md)
- [AddressRequestCompound](docs/Model/AddressRequestCompound.md)
- [ApikeyCreateObjectV2Request](docs/Model/ApikeyCreateObjectV2Request.md)
- [ApikeyCreateObjectV2Response](docs/Model/ApikeyCreateObjectV2Response.md)
- [ApikeyCreateObjectV2ResponseMPayload](docs/Model/ApikeyCreateObjectV2ResponseMPayload.md)
- [ApikeyEditObjectV1Request](docs/Model/ApikeyEditObjectV1Request.md)
- [ApikeyEditObjectV1Response](docs/Model/ApikeyEditObjectV1Response.md)
- [ApikeyEditPermissionsV1Request](docs/Model/ApikeyEditPermissionsV1Request.md)
- [ApikeyEditPermissionsV1Response](docs/Model/ApikeyEditPermissionsV1Response.md)
- [ApikeyEditPermissionsV1ResponseMPayload](docs/Model/ApikeyEditPermissionsV1ResponseMPayload.md)
- [ApikeyGetCorsV1Response](docs/Model/ApikeyGetCorsV1Response.md)
- [ApikeyGetCorsV1ResponseMPayload](docs/Model/ApikeyGetCorsV1ResponseMPayload.md)
- [ApikeyGetListV1Response](docs/Model/ApikeyGetListV1Response.md)
- [ApikeyGetListV1ResponseMPayload](docs/Model/ApikeyGetListV1ResponseMPayload.md)
- [ApikeyGetObjectV2Response](docs/Model/ApikeyGetObjectV2Response.md)
- [ApikeyGetObjectV2ResponseMPayload](docs/Model/ApikeyGetObjectV2ResponseMPayload.md)
- [ApikeyGetPermissionsV1Response](docs/Model/ApikeyGetPermissionsV1Response.md)
- [ApikeyGetPermissionsV1ResponseMPayload](docs/Model/ApikeyGetPermissionsV1ResponseMPayload.md)
- [ApikeyGetSubnetsV1Response](docs/Model/ApikeyGetSubnetsV1Response.md)
- [ApikeyGetSubnetsV1ResponseMPayload](docs/Model/ApikeyGetSubnetsV1ResponseMPayload.md)
- [ApikeyListElement](docs/Model/ApikeyListElement.md)
- [ApikeyRegenerateV1Request](docs/Model/ApikeyRegenerateV1Request.md)
- [ApikeyRegenerateV1Response](docs/Model/ApikeyRegenerateV1Response.md)
- [ApikeyRegenerateV1ResponseMPayload](docs/Model/ApikeyRegenerateV1ResponseMPayload.md)
- [ApikeyRequest](docs/Model/ApikeyRequest.md)
- [ApikeyRequestCompound](docs/Model/ApikeyRequestCompound.md)
- [ApikeyResponse](docs/Model/ApikeyResponse.md)
- [ApikeyResponseCompound](docs/Model/ApikeyResponseCompound.md)
- [AttachmentGetAttachmentlogsV1Response](docs/Model/AttachmentGetAttachmentlogsV1Response.md)
- [AttachmentGetAttachmentlogsV1ResponseMPayload](docs/Model/AttachmentGetAttachmentlogsV1ResponseMPayload.md)
- [AttachmentGetDownloadUrlV1Response](docs/Model/AttachmentGetDownloadUrlV1Response.md)
- [AttachmentGetDownloadUrlV1ResponseMPayload](docs/Model/AttachmentGetDownloadUrlV1ResponseMPayload.md)
- [AttachmentResponse](docs/Model/AttachmentResponse.md)
- [AttachmentResponseCompound](docs/Model/AttachmentResponseCompound.md)
- [AttachmentlogResponse](docs/Model/AttachmentlogResponse.md)
- [AttachmentlogResponseCompound](docs/Model/AttachmentlogResponseCompound.md)
- [AttemptResponse](docs/Model/AttemptResponse.md)
- [AttemptResponseCompound](docs/Model/AttemptResponseCompound.md)
- [BillingentityexternalAutocompleteElementResponse](docs/Model/BillingentityexternalAutocompleteElementResponse.md)
- [BillingentityexternalGetAutocompleteV2Response](docs/Model/BillingentityexternalGetAutocompleteV2Response.md)
- [BillingentityexternalGetAutocompleteV2ResponseMPayload](docs/Model/BillingentityexternalGetAutocompleteV2ResponseMPayload.md)
- [BillingentityinternalAutocompleteElementResponse](docs/Model/BillingentityinternalAutocompleteElementResponse.md)
- [BillingentityinternalCreateObjectV1Request](docs/Model/BillingentityinternalCreateObjectV1Request.md)
- [BillingentityinternalCreateObjectV1Response](docs/Model/BillingentityinternalCreateObjectV1Response.md)
- [BillingentityinternalCreateObjectV1ResponseMPayload](docs/Model/BillingentityinternalCreateObjectV1ResponseMPayload.md)
- [BillingentityinternalEditObjectV1Request](docs/Model/BillingentityinternalEditObjectV1Request.md)
- [BillingentityinternalEditObjectV1Response](docs/Model/BillingentityinternalEditObjectV1Response.md)
- [BillingentityinternalGetAutocompleteV2Response](docs/Model/BillingentityinternalGetAutocompleteV2Response.md)
- [BillingentityinternalGetAutocompleteV2ResponseMPayload](docs/Model/BillingentityinternalGetAutocompleteV2ResponseMPayload.md)
- [BillingentityinternalGetListV1Response](docs/Model/BillingentityinternalGetListV1Response.md)
- [BillingentityinternalGetListV1ResponseMPayload](docs/Model/BillingentityinternalGetListV1ResponseMPayload.md)
- [BillingentityinternalGetObjectV2Response](docs/Model/BillingentityinternalGetObjectV2Response.md)
- [BillingentityinternalGetObjectV2ResponseMPayload](docs/Model/BillingentityinternalGetObjectV2ResponseMPayload.md)
- [BillingentityinternalListElement](docs/Model/BillingentityinternalListElement.md)
- [BillingentityinternalRequest](docs/Model/BillingentityinternalRequest.md)
- [BillingentityinternalRequestCompound](docs/Model/BillingentityinternalRequestCompound.md)
- [BillingentityinternalResponse](docs/Model/BillingentityinternalResponse.md)
- [BillingentityinternalResponseCompound](docs/Model/BillingentityinternalResponseCompound.md)
- [BillingentityinternalproductRequest](docs/Model/BillingentityinternalproductRequest.md)
- [BillingentityinternalproductRequestCompound](docs/Model/BillingentityinternalproductRequestCompound.md)
- [BillingentityinternalproductResponse](docs/Model/BillingentityinternalproductResponse.md)
- [BillingentityinternalproductResponseCompound](docs/Model/BillingentityinternalproductResponseCompound.md)
- [BrandingAutocompleteElementResponse](docs/Model/BrandingAutocompleteElementResponse.md)
- [BrandingCreateObjectV1Request](docs/Model/BrandingCreateObjectV1Request.md)
- [BrandingCreateObjectV1Response](docs/Model/BrandingCreateObjectV1Response.md)
- [BrandingCreateObjectV1ResponseMPayload](docs/Model/BrandingCreateObjectV1ResponseMPayload.md)
- [BrandingEditObjectV1Request](docs/Model/BrandingEditObjectV1Request.md)
- [BrandingEditObjectV1Response](docs/Model/BrandingEditObjectV1Response.md)
- [BrandingGetAutocompleteV2Response](docs/Model/BrandingGetAutocompleteV2Response.md)
- [BrandingGetAutocompleteV2ResponseMPayload](docs/Model/BrandingGetAutocompleteV2ResponseMPayload.md)
- [BrandingGetListV1Response](docs/Model/BrandingGetListV1Response.md)
- [BrandingGetListV1ResponseMPayload](docs/Model/BrandingGetListV1ResponseMPayload.md)
- [BrandingGetObjectV2Response](docs/Model/BrandingGetObjectV2Response.md)
- [BrandingGetObjectV2ResponseMPayload](docs/Model/BrandingGetObjectV2ResponseMPayload.md)
- [BrandingListElement](docs/Model/BrandingListElement.md)
- [BrandingRequest](docs/Model/BrandingRequest.md)
- [BrandingRequestCompound](docs/Model/BrandingRequestCompound.md)
- [BrandingResponse](docs/Model/BrandingResponse.md)
- [BrandingResponseCompound](docs/Model/BrandingResponseCompound.md)
- [BuyercontractGetCommunicationListV1Response](docs/Model/BuyercontractGetCommunicationListV1Response.md)
- [BuyercontractGetCommunicationListV1ResponseMPayload](docs/Model/BuyercontractGetCommunicationListV1ResponseMPayload.md)
- [ClonehistoryGetListV1Response](docs/Model/ClonehistoryGetListV1Response.md)
- [ClonehistoryGetListV1ResponseMPayload](docs/Model/ClonehistoryGetListV1ResponseMPayload.md)
- [ClonehistoryListElement](docs/Model/ClonehistoryListElement.md)
- [CommonAudit](docs/Model/CommonAudit.md)
- [CommonAuditdetail](docs/Model/CommonAuditdetail.md)
- [CommonFile](docs/Model/CommonFile.md)
- [CommonGetAutocompleteV1Response](docs/Model/CommonGetAutocompleteV1Response.md)
- [CommonGetListV1ResponseMPayload](docs/Model/CommonGetListV1ResponseMPayload.md)
- [CommonGetReportV1Response](docs/Model/CommonGetReportV1Response.md)
- [CommonGetReportV1ResponseMPayload](docs/Model/CommonGetReportV1ResponseMPayload.md)
- [CommonReport](docs/Model/CommonReport.md)
- [CommonReportcell](docs/Model/CommonReportcell.md)
- [CommonReportcellstyle](docs/Model/CommonReportcellstyle.md)
- [CommonReportcolumn](docs/Model/CommonReportcolumn.md)
- [CommonReportgroup](docs/Model/CommonReportgroup.md)
- [CommonReportrow](docs/Model/CommonReportrow.md)
- [CommonReportsection](docs/Model/CommonReportsection.md)
- [CommonReportsubsection](docs/Model/CommonReportsubsection.md)
- [CommonReportsubsectionpart](docs/Model/CommonReportsubsectionpart.md)
- [CommonResponse](docs/Model/CommonResponse.md)
- [CommonResponseError](docs/Model/CommonResponseError.md)
- [CommonResponseErrorEzsignformValidation](docs/Model/CommonResponseErrorEzsignformValidation.md)
- [CommonResponseErrorSTemporaryFileUrl](docs/Model/CommonResponseErrorSTemporaryFileUrl.md)
- [CommonResponseErrorTooManyRequests](docs/Model/CommonResponseErrorTooManyRequests.md)
- [CommonResponseFilter](docs/Model/CommonResponseFilter.md)
- [CommonResponseGetList](docs/Model/CommonResponseGetList.md)
- [CommonResponseObjDebug](docs/Model/CommonResponseObjDebug.md)
- [CommonResponseObjDebugPayload](docs/Model/CommonResponseObjDebugPayload.md)
- [CommonResponseObjDebugPayloadGetList](docs/Model/CommonResponseObjDebugPayloadGetList.md)
- [CommonResponseObjSQLQuery](docs/Model/CommonResponseObjSQLQuery.md)
- [CommonResponseRedirectSSecretquestionTextX](docs/Model/CommonResponseRedirectSSecretquestionTextX.md)
- [CommonResponseWarning](docs/Model/CommonResponseWarning.md)
- [CommonWebhook](docs/Model/CommonWebhook.md)
- [CommunicationCreateObjectV1ResponseMPayload](docs/Model/CommunicationCreateObjectV1ResponseMPayload.md)
- [CommunicationRequest](docs/Model/CommunicationRequest.md)
- [CommunicationRequestCompound](docs/Model/CommunicationRequestCompound.md)
- [CommunicationSendV1Request](docs/Model/CommunicationSendV1Request.md)
- [CommunicationSendV1Response](docs/Model/CommunicationSendV1Response.md)
- [CommunicationattachmentRequest](docs/Model/CommunicationattachmentRequest.md)
- [CommunicationattachmentRequestCompound](docs/Model/CommunicationattachmentRequestCompound.md)
- [CommunicationexternalrecipientRequest](docs/Model/CommunicationexternalrecipientRequest.md)
- [CommunicationexternalrecipientRequestCompound](docs/Model/CommunicationexternalrecipientRequestCompound.md)
- [CommunicationrecipientRequest](docs/Model/CommunicationrecipientRequest.md)
- [CommunicationrecipientRequestCompound](docs/Model/CommunicationrecipientRequestCompound.md)
- [CommunicationreferenceRequest](docs/Model/CommunicationreferenceRequest.md)
- [CommunicationreferenceRequestCompound](docs/Model/CommunicationreferenceRequestCompound.md)
- [CompanyAutocompleteElementResponse](docs/Model/CompanyAutocompleteElementResponse.md)
- [CompanyGetAutocompleteV2Response](docs/Model/CompanyGetAutocompleteV2Response.md)
- [CompanyGetAutocompleteV2ResponseMPayload](docs/Model/CompanyGetAutocompleteV2ResponseMPayload.md)
- [ComputedECommunicationDirection](docs/Model/ComputedECommunicationDirection.md)
- [ComputedEEzsigndocumentSteptype](docs/Model/ComputedEEzsigndocumentSteptype.md)
- [ContactRequest](docs/Model/ContactRequest.md)
- [ContactRequestCompound](docs/Model/ContactRequestCompound.md)
- [ContactinformationsRequest](docs/Model/ContactinformationsRequest.md)
- [ContactinformationsRequestCompound](docs/Model/ContactinformationsRequestCompound.md)
- [CorsCreateObjectV1Request](docs/Model/CorsCreateObjectV1Request.md)
- [CorsCreateObjectV1Response](docs/Model/CorsCreateObjectV1Response.md)
- [CorsCreateObjectV1ResponseMPayload](docs/Model/CorsCreateObjectV1ResponseMPayload.md)
- [CorsDeleteObjectV1Response](docs/Model/CorsDeleteObjectV1Response.md)
- [CorsEditObjectV1Request](docs/Model/CorsEditObjectV1Request.md)
- [CorsEditObjectV1Response](docs/Model/CorsEditObjectV1Response.md)
- [CorsGetObjectV2Response](docs/Model/CorsGetObjectV2Response.md)
- [CorsGetObjectV2ResponseMPayload](docs/Model/CorsGetObjectV2ResponseMPayload.md)
- [CorsRequest](docs/Model/CorsRequest.md)
- [CorsRequestCompound](docs/Model/CorsRequestCompound.md)
- [CorsResponse](docs/Model/CorsResponse.md)
- [CorsResponseCompound](docs/Model/CorsResponseCompound.md)
- [CustomAttachmentResponse](docs/Model/CustomAttachmentResponse.md)
- [CustomAttachmentdocumenttypeResponse](docs/Model/CustomAttachmentdocumenttypeResponse.md)
- [CustomAutocompleteElementResponse](docs/Model/CustomAutocompleteElementResponse.md)
- [CustomCommunicationListElementResponse](docs/Model/CustomCommunicationListElementResponse.md)
- [CustomCommunicationattachmentRequest](docs/Model/CustomCommunicationattachmentRequest.md)
- [CustomCommunicationrecipientsgroupResponse](docs/Model/CustomCommunicationrecipientsgroupResponse.md)
- [CustomCommunicationrecipientsrecipientResponse](docs/Model/CustomCommunicationrecipientsrecipientResponse.md)
- [CustomCommunicationsenderRequest](docs/Model/CustomCommunicationsenderRequest.md)
- [CustomCommunicationsenderResponse](docs/Model/CustomCommunicationsenderResponse.md)
- [CustomContactNameResponse](docs/Model/CustomContactNameResponse.md)
- [CustomCreditcardtransactionResponse](docs/Model/CustomCreditcardtransactionResponse.md)
- [CustomDropdownElementRequest](docs/Model/CustomDropdownElementRequest.md)
- [CustomDropdownElementRequestCompound](docs/Model/CustomDropdownElementRequestCompound.md)
- [CustomDropdownElementResponse](docs/Model/CustomDropdownElementResponse.md)
- [CustomDropdownElementResponseCompound](docs/Model/CustomDropdownElementResponseCompound.md)
- [CustomEzmaxinvoicingEzsigndocumentResponse](docs/Model/CustomEzmaxinvoicingEzsigndocumentResponse.md)
- [CustomEzmaxinvoicingEzsignfolderResponse](docs/Model/CustomEzmaxinvoicingEzsignfolderResponse.md)
- [CustomEzmaxpricingResponse](docs/Model/CustomEzmaxpricingResponse.md)
- [CustomEzsigndocumentEzsignsignaturesAutomaticResponse](docs/Model/CustomEzsigndocumentEzsignsignaturesAutomaticResponse.md)
- [CustomEzsignfolderEzsignsignaturesAutomaticResponse](docs/Model/CustomEzsignfolderEzsignsignaturesAutomaticResponse.md)
- [CustomEzsignfoldersignerassociationActionableElementResponse](docs/Model/CustomEzsignfoldersignerassociationActionableElementResponse.md)
- [CustomEzsignfoldersignerassociationmessageRequest](docs/Model/CustomEzsignfoldersignerassociationmessageRequest.md)
- [CustomEzsignfoldersignerassociationstatusResponse](docs/Model/CustomEzsignfoldersignerassociationstatusResponse.md)
- [CustomEzsignfoldertransmissionResponse](docs/Model/CustomEzsignfoldertransmissionResponse.md)
- [CustomEzsignfoldertransmissionSignerResponse](docs/Model/CustomEzsignfoldertransmissionSignerResponse.md)
- [CustomEzsignfoldertypeResponse](docs/Model/CustomEzsignfoldertypeResponse.md)
- [CustomEzsignformfieldRequest](docs/Model/CustomEzsignformfieldRequest.md)
- [CustomEzsignformfielderrorResponse](docs/Model/CustomEzsignformfielderrorResponse.md)
- [CustomEzsignformfielderrortestResponse](docs/Model/CustomEzsignformfielderrortestResponse.md)
- [CustomEzsignformfieldgroupRequest](docs/Model/CustomEzsignformfieldgroupRequest.md)
- [CustomEzsignsignatureEzsignsignaturesAutomaticResponse](docs/Model/CustomEzsignsignatureEzsignsignaturesAutomaticResponse.md)
- [CustomEzsignsignaturestatusResponse](docs/Model/CustomEzsignsignaturestatusResponse.md)
- [CustomFormDataDocumentResponse](docs/Model/CustomFormDataDocumentResponse.md)
- [CustomFormDataEzsignformfieldResponse](docs/Model/CustomFormDataEzsignformfieldResponse.md)
- [CustomFormDataEzsignformfieldgroupResponse](docs/Model/CustomFormDataEzsignformfieldgroupResponse.md)
- [CustomFormDataSignerResponse](docs/Model/CustomFormDataSignerResponse.md)
- [CustomFormsDataFolderResponse](docs/Model/CustomFormsDataFolderResponse.md)
- [CustomImportEzsigntemplatepackageRelationRequest](docs/Model/CustomImportEzsigntemplatepackageRelationRequest.md)
- [CustomNotificationsubsectiongetnotificationtestsResponse](docs/Model/CustomNotificationsubsectiongetnotificationtestsResponse.md)
- [CustomNotificationtestgetnotificationtestsResponse](docs/Model/CustomNotificationtestgetnotificationtestsResponse.md)
- [CustomUserResponse](docs/Model/CustomUserResponse.md)
- [CustomWebhookResponse](docs/Model/CustomWebhookResponse.md)
- [CustomWebhooklogResponse](docs/Model/CustomWebhooklogResponse.md)
- [CustomWordPositionOccurenceResponse](docs/Model/CustomWordPositionOccurenceResponse.md)
- [CustomWordPositionWordResponse](docs/Model/CustomWordPositionWordResponse.md)
- [DepartmentAutocompleteElementResponse](docs/Model/DepartmentAutocompleteElementResponse.md)
- [DepartmentGetAutocompleteV2Response](docs/Model/DepartmentGetAutocompleteV2Response.md)
- [DepartmentGetAutocompleteV2ResponseMPayload](docs/Model/DepartmentGetAutocompleteV2ResponseMPayload.md)
- [ElectronicfundstransferGetCommunicationListV1Response](docs/Model/ElectronicfundstransferGetCommunicationListV1Response.md)
- [ElectronicfundstransferGetCommunicationListV1ResponseMPayload](docs/Model/ElectronicfundstransferGetCommunicationListV1ResponseMPayload.md)
- [EmailRequest](docs/Model/EmailRequest.md)
- [EmailRequestCompound](docs/Model/EmailRequestCompound.md)
- [EmailResponse](docs/Model/EmailResponse.md)
- [EmailResponseCompound](docs/Model/EmailResponseCompound.md)
- [EmailtypeAutocompleteElementResponse](docs/Model/EmailtypeAutocompleteElementResponse.md)
- [EmailtypeGetAutocompleteV2Response](docs/Model/EmailtypeGetAutocompleteV2Response.md)
- [EmailtypeGetAutocompleteV2ResponseMPayload](docs/Model/EmailtypeGetAutocompleteV2ResponseMPayload.md)
- [EnumFontunderline](docs/Model/EnumFontunderline.md)
- [EnumFontweight](docs/Model/EnumFontweight.md)
- [EnumHorizontalalignment](docs/Model/EnumHorizontalalignment.md)
- [EnumTextvalidation](docs/Model/EnumTextvalidation.md)
- [EnumVerticalalignment](docs/Model/EnumVerticalalignment.md)
- [EzmaxinvoicingAutocompleteElementResponse](docs/Model/EzmaxinvoicingAutocompleteElementResponse.md)
- [EzmaxinvoicingGetAutocompleteV2Response](docs/Model/EzmaxinvoicingGetAutocompleteV2Response.md)
- [EzmaxinvoicingGetAutocompleteV2ResponseMPayload](docs/Model/EzmaxinvoicingGetAutocompleteV2ResponseMPayload.md)
- [EzmaxinvoicingGetObjectV2Response](docs/Model/EzmaxinvoicingGetObjectV2Response.md)
- [EzmaxinvoicingGetObjectV2ResponseMPayload](docs/Model/EzmaxinvoicingGetObjectV2ResponseMPayload.md)
- [EzmaxinvoicingGetProvisionalV1Response](docs/Model/EzmaxinvoicingGetProvisionalV1Response.md)
- [EzmaxinvoicingGetProvisionalV1ResponseMPayload](docs/Model/EzmaxinvoicingGetProvisionalV1ResponseMPayload.md)
- [EzmaxinvoicingResponse](docs/Model/EzmaxinvoicingResponse.md)
- [EzmaxinvoicingResponseCompound](docs/Model/EzmaxinvoicingResponseCompound.md)
- [EzmaxinvoicingagentResponse](docs/Model/EzmaxinvoicingagentResponse.md)
- [EzmaxinvoicingagentResponseCompound](docs/Model/EzmaxinvoicingagentResponseCompound.md)
- [EzmaxinvoicingcommissionResponse](docs/Model/EzmaxinvoicingcommissionResponse.md)
- [EzmaxinvoicingcommissionResponseCompound](docs/Model/EzmaxinvoicingcommissionResponseCompound.md)
- [EzmaxinvoicingcontractResponse](docs/Model/EzmaxinvoicingcontractResponse.md)
- [EzmaxinvoicingcontractResponseCompound](docs/Model/EzmaxinvoicingcontractResponseCompound.md)
- [EzmaxinvoicingsummaryexternalResponse](docs/Model/EzmaxinvoicingsummaryexternalResponse.md)
- [EzmaxinvoicingsummaryexternalResponseCompound](docs/Model/EzmaxinvoicingsummaryexternalResponseCompound.md)
- [EzmaxinvoicingsummaryexternaldetailResponse](docs/Model/EzmaxinvoicingsummaryexternaldetailResponse.md)
- [EzmaxinvoicingsummaryexternaldetailResponseCompound](docs/Model/EzmaxinvoicingsummaryexternaldetailResponseCompound.md)
- [EzmaxinvoicingsummaryglobalResponse](docs/Model/EzmaxinvoicingsummaryglobalResponse.md)
- [EzmaxinvoicingsummaryglobalResponseCompound](docs/Model/EzmaxinvoicingsummaryglobalResponseCompound.md)
- [EzmaxinvoicingsummaryinternalResponse](docs/Model/EzmaxinvoicingsummaryinternalResponse.md)
- [EzmaxinvoicingsummaryinternalResponseCompound](docs/Model/EzmaxinvoicingsummaryinternalResponseCompound.md)
- [EzmaxinvoicingsummaryinternaldetailResponse](docs/Model/EzmaxinvoicingsummaryinternaldetailResponse.md)
- [EzmaxinvoicingsummaryinternaldetailResponseCompound](docs/Model/EzmaxinvoicingsummaryinternaldetailResponseCompound.md)
- [EzmaxinvoicinguserResponse](docs/Model/EzmaxinvoicinguserResponse.md)
- [EzmaxinvoicinguserResponseCompound](docs/Model/EzmaxinvoicinguserResponseCompound.md)
- [EzmaxproductAutocompleteElementResponse](docs/Model/EzmaxproductAutocompleteElementResponse.md)
- [EzmaxproductGetAutocompleteV2Response](docs/Model/EzmaxproductGetAutocompleteV2Response.md)
- [EzmaxproductGetAutocompleteV2ResponseMPayload](docs/Model/EzmaxproductGetAutocompleteV2ResponseMPayload.md)
- [EzsignSuggestSignersV1Response](docs/Model/EzsignSuggestSignersV1Response.md)
- [EzsignSuggestSignersV1ResponseMPayload](docs/Model/EzsignSuggestSignersV1ResponseMPayload.md)
- [EzsignSuggestTemplatesV1Response](docs/Model/EzsignSuggestTemplatesV1Response.md)
- [EzsignSuggestTemplatesV1ResponseMPayload](docs/Model/EzsignSuggestTemplatesV1ResponseMPayload.md)
- [EzsignannotationResponse](docs/Model/EzsignannotationResponse.md)
- [EzsignannotationResponseCompound](docs/Model/EzsignannotationResponseCompound.md)
- [EzsignbulksendCreateEzsignbulksendtransmissionV1Request](docs/Model/EzsignbulksendCreateEzsignbulksendtransmissionV1Request.md)
- [EzsignbulksendCreateEzsignbulksendtransmissionV1Response](docs/Model/EzsignbulksendCreateEzsignbulksendtransmissionV1Response.md)
- [EzsignbulksendCreateEzsignbulksendtransmissionV1ResponseMPayload](docs/Model/EzsignbulksendCreateEzsignbulksendtransmissionV1ResponseMPayload.md)
- [EzsignbulksendCreateObjectV1Request](docs/Model/EzsignbulksendCreateObjectV1Request.md)
- [EzsignbulksendCreateObjectV1Response](docs/Model/EzsignbulksendCreateObjectV1Response.md)
- [EzsignbulksendCreateObjectV1ResponseMPayload](docs/Model/EzsignbulksendCreateObjectV1ResponseMPayload.md)
- [EzsignbulksendDeleteObjectV1Response](docs/Model/EzsignbulksendDeleteObjectV1Response.md)
- [EzsignbulksendEditObjectV1Request](docs/Model/EzsignbulksendEditObjectV1Request.md)
- [EzsignbulksendEditObjectV1Response](docs/Model/EzsignbulksendEditObjectV1Response.md)
- [EzsignbulksendGetEzsignbulksendtransmissionsV1Response](docs/Model/EzsignbulksendGetEzsignbulksendtransmissionsV1Response.md)
- [EzsignbulksendGetEzsignbulksendtransmissionsV1ResponseMPayload](docs/Model/EzsignbulksendGetEzsignbulksendtransmissionsV1ResponseMPayload.md)
- [EzsignbulksendGetEzsignsignaturesAutomaticV1Response](docs/Model/EzsignbulksendGetEzsignsignaturesAutomaticV1Response.md)
- [EzsignbulksendGetEzsignsignaturesAutomaticV1ResponseMPayload](docs/Model/EzsignbulksendGetEzsignsignaturesAutomaticV1ResponseMPayload.md)
- [EzsignbulksendGetFormsDataV1Response](docs/Model/EzsignbulksendGetFormsDataV1Response.md)
- [EzsignbulksendGetFormsDataV1ResponseMPayload](docs/Model/EzsignbulksendGetFormsDataV1ResponseMPayload.md)
- [EzsignbulksendGetListV1Response](docs/Model/EzsignbulksendGetListV1Response.md)
- [EzsignbulksendGetListV1ResponseMPayload](docs/Model/EzsignbulksendGetListV1ResponseMPayload.md)
- [EzsignbulksendGetObjectV2Response](docs/Model/EzsignbulksendGetObjectV2Response.md)
- [EzsignbulksendGetObjectV2ResponseMPayload](docs/Model/EzsignbulksendGetObjectV2ResponseMPayload.md)
- [EzsignbulksendListElement](docs/Model/EzsignbulksendListElement.md)
- [EzsignbulksendReorderV1Request](docs/Model/EzsignbulksendReorderV1Request.md)
- [EzsignbulksendReorderV1Response](docs/Model/EzsignbulksendReorderV1Response.md)
- [EzsignbulksendRequest](docs/Model/EzsignbulksendRequest.md)
- [EzsignbulksendRequestCompound](docs/Model/EzsignbulksendRequestCompound.md)
- [EzsignbulksendResponse](docs/Model/EzsignbulksendResponse.md)
- [EzsignbulksendResponseCompound](docs/Model/EzsignbulksendResponseCompound.md)
- [EzsignbulksenddocumentmappingCreateObjectV1Request](docs/Model/EzsignbulksenddocumentmappingCreateObjectV1Request.md)
- [EzsignbulksenddocumentmappingCreateObjectV1Response](docs/Model/EzsignbulksenddocumentmappingCreateObjectV1Response.md)
- [EzsignbulksenddocumentmappingCreateObjectV1ResponseMPayload](docs/Model/EzsignbulksenddocumentmappingCreateObjectV1ResponseMPayload.md)
- [EzsignbulksenddocumentmappingDeleteObjectV1Response](docs/Model/EzsignbulksenddocumentmappingDeleteObjectV1Response.md)
- [EzsignbulksenddocumentmappingGetObjectV2Response](docs/Model/EzsignbulksenddocumentmappingGetObjectV2Response.md)
- [EzsignbulksenddocumentmappingGetObjectV2ResponseMPayload](docs/Model/EzsignbulksenddocumentmappingGetObjectV2ResponseMPayload.md)
- [EzsignbulksenddocumentmappingRequest](docs/Model/EzsignbulksenddocumentmappingRequest.md)
- [EzsignbulksenddocumentmappingRequestCompound](docs/Model/EzsignbulksenddocumentmappingRequestCompound.md)
- [EzsignbulksenddocumentmappingResponse](docs/Model/EzsignbulksenddocumentmappingResponse.md)
- [EzsignbulksenddocumentmappingResponseCompound](docs/Model/EzsignbulksenddocumentmappingResponseCompound.md)
- [EzsignbulksendsignermappingCreateObjectV1Request](docs/Model/EzsignbulksendsignermappingCreateObjectV1Request.md)
- [EzsignbulksendsignermappingCreateObjectV1Response](docs/Model/EzsignbulksendsignermappingCreateObjectV1Response.md)
- [EzsignbulksendsignermappingCreateObjectV1ResponseMPayload](docs/Model/EzsignbulksendsignermappingCreateObjectV1ResponseMPayload.md)
- [EzsignbulksendsignermappingDeleteObjectV1Response](docs/Model/EzsignbulksendsignermappingDeleteObjectV1Response.md)
- [EzsignbulksendsignermappingGetObjectV2Response](docs/Model/EzsignbulksendsignermappingGetObjectV2Response.md)
- [EzsignbulksendsignermappingGetObjectV2ResponseMPayload](docs/Model/EzsignbulksendsignermappingGetObjectV2ResponseMPayload.md)
- [EzsignbulksendsignermappingRequest](docs/Model/EzsignbulksendsignermappingRequest.md)
- [EzsignbulksendsignermappingRequestCompound](docs/Model/EzsignbulksendsignermappingRequestCompound.md)
- [EzsignbulksendsignermappingResponse](docs/Model/EzsignbulksendsignermappingResponse.md)
- [EzsignbulksendsignermappingResponseCompound](docs/Model/EzsignbulksendsignermappingResponseCompound.md)
- [EzsignbulksendtransmissionGetEzsignsignaturesAutomaticV1Response](docs/Model/EzsignbulksendtransmissionGetEzsignsignaturesAutomaticV1Response.md)
- [EzsignbulksendtransmissionGetEzsignsignaturesAutomaticV1ResponseMPayload](docs/Model/EzsignbulksendtransmissionGetEzsignsignaturesAutomaticV1ResponseMPayload.md)
- [EzsignbulksendtransmissionGetFormsDataV1Response](docs/Model/EzsignbulksendtransmissionGetFormsDataV1Response.md)
- [EzsignbulksendtransmissionGetFormsDataV1ResponseMPayload](docs/Model/EzsignbulksendtransmissionGetFormsDataV1ResponseMPayload.md)
- [EzsignbulksendtransmissionGetObjectV2Response](docs/Model/EzsignbulksendtransmissionGetObjectV2Response.md)
- [EzsignbulksendtransmissionGetObjectV2ResponseMPayload](docs/Model/EzsignbulksendtransmissionGetObjectV2ResponseMPayload.md)
- [EzsignbulksendtransmissionResponse](docs/Model/EzsignbulksendtransmissionResponse.md)
- [EzsignbulksendtransmissionResponseCompound](docs/Model/EzsignbulksendtransmissionResponseCompound.md)
- [EzsigndocumentApplyEzsigntemplateV1Request](docs/Model/EzsigndocumentApplyEzsigntemplateV1Request.md)
- [EzsigndocumentApplyEzsigntemplateV1Response](docs/Model/EzsigndocumentApplyEzsigntemplateV1Response.md)
- [EzsigndocumentApplyEzsigntemplateV2Request](docs/Model/EzsigndocumentApplyEzsigntemplateV2Request.md)
- [EzsigndocumentApplyEzsigntemplateV2Response](docs/Model/EzsigndocumentApplyEzsigntemplateV2Response.md)
- [EzsigndocumentCreateObjectV1Request](docs/Model/EzsigndocumentCreateObjectV1Request.md)
- [EzsigndocumentCreateObjectV1Response](docs/Model/EzsigndocumentCreateObjectV1Response.md)
- [EzsigndocumentCreateObjectV1ResponseMPayload](docs/Model/EzsigndocumentCreateObjectV1ResponseMPayload.md)
- [EzsigndocumentCreateObjectV2Request](docs/Model/EzsigndocumentCreateObjectV2Request.md)
- [EzsigndocumentCreateObjectV2Response](docs/Model/EzsigndocumentCreateObjectV2Response.md)
- [EzsigndocumentCreateObjectV2ResponseMPayload](docs/Model/EzsigndocumentCreateObjectV2ResponseMPayload.md)
- [EzsigndocumentDeclineToSignV1Request](docs/Model/EzsigndocumentDeclineToSignV1Request.md)
- [EzsigndocumentDeclineToSignV1Response](docs/Model/EzsigndocumentDeclineToSignV1Response.md)
- [EzsigndocumentDeleteObjectV1Response](docs/Model/EzsigndocumentDeleteObjectV1Response.md)
- [EzsigndocumentEditEzsignformfieldgroupsV1Request](docs/Model/EzsigndocumentEditEzsignformfieldgroupsV1Request.md)
- [EzsigndocumentEditEzsignformfieldgroupsV1Response](docs/Model/EzsigndocumentEditEzsignformfieldgroupsV1Response.md)
- [EzsigndocumentEditEzsignformfieldgroupsV1ResponseMPayload](docs/Model/EzsigndocumentEditEzsignformfieldgroupsV1ResponseMPayload.md)
- [EzsigndocumentEditEzsignsignaturesV1Request](docs/Model/EzsigndocumentEditEzsignsignaturesV1Request.md)
- [EzsigndocumentEditEzsignsignaturesV1Response](docs/Model/EzsigndocumentEditEzsignsignaturesV1Response.md)
- [EzsigndocumentEditEzsignsignaturesV1ResponseMPayload](docs/Model/EzsigndocumentEditEzsignsignaturesV1ResponseMPayload.md)
- [EzsigndocumentEndPrematurelyV1Response](docs/Model/EzsigndocumentEndPrematurelyV1Response.md)
- [EzsigndocumentFlattenV1Response](docs/Model/EzsigndocumentFlattenV1Response.md)
- [EzsigndocumentGetActionableElementsV1Response](docs/Model/EzsigndocumentGetActionableElementsV1Response.md)
- [EzsigndocumentGetActionableElementsV1ResponseMPayload](docs/Model/EzsigndocumentGetActionableElementsV1ResponseMPayload.md)
- [EzsigndocumentGetAttachmentsV1Response](docs/Model/EzsigndocumentGetAttachmentsV1Response.md)
- [EzsigndocumentGetAttachmentsV1ResponseMPayload](docs/Model/EzsigndocumentGetAttachmentsV1ResponseMPayload.md)
- [EzsigndocumentGetCompletedElementsV1Response](docs/Model/EzsigndocumentGetCompletedElementsV1Response.md)
- [EzsigndocumentGetCompletedElementsV1ResponseMPayload](docs/Model/EzsigndocumentGetCompletedElementsV1ResponseMPayload.md)
- [EzsigndocumentGetDownloadUrlV1Response](docs/Model/EzsigndocumentGetDownloadUrlV1Response.md)
- [EzsigndocumentGetDownloadUrlV1ResponseMPayload](docs/Model/EzsigndocumentGetDownloadUrlV1ResponseMPayload.md)
- [EzsigndocumentGetEzsignannotationsV1Response](docs/Model/EzsigndocumentGetEzsignannotationsV1Response.md)
- [EzsigndocumentGetEzsignannotationsV1ResponseMPayload](docs/Model/EzsigndocumentGetEzsignannotationsV1ResponseMPayload.md)
- [EzsigndocumentGetEzsignformfieldgroupsV1Response](docs/Model/EzsigndocumentGetEzsignformfieldgroupsV1Response.md)
- [EzsigndocumentGetEzsignformfieldgroupsV1ResponseMPayload](docs/Model/EzsigndocumentGetEzsignformfieldgroupsV1ResponseMPayload.md)
- [EzsigndocumentGetEzsignpagesV1Response](docs/Model/EzsigndocumentGetEzsignpagesV1Response.md)
- [EzsigndocumentGetEzsignpagesV1ResponseMPayload](docs/Model/EzsigndocumentGetEzsignpagesV1ResponseMPayload.md)
- [EzsigndocumentGetEzsignsignaturesAutomaticV1Response](docs/Model/EzsigndocumentGetEzsignsignaturesAutomaticV1Response.md)
- [EzsigndocumentGetEzsignsignaturesAutomaticV1ResponseMPayload](docs/Model/EzsigndocumentGetEzsignsignaturesAutomaticV1ResponseMPayload.md)
- [EzsigndocumentGetEzsignsignaturesV1Response](docs/Model/EzsigndocumentGetEzsignsignaturesV1Response.md)
- [EzsigndocumentGetEzsignsignaturesV1ResponseMPayload](docs/Model/EzsigndocumentGetEzsignsignaturesV1ResponseMPayload.md)
- [EzsigndocumentGetFormDataV1Response](docs/Model/EzsigndocumentGetFormDataV1Response.md)
- [EzsigndocumentGetFormDataV1ResponseMPayload](docs/Model/EzsigndocumentGetFormDataV1ResponseMPayload.md)
- [EzsigndocumentGetObjectV1Response](docs/Model/EzsigndocumentGetObjectV1Response.md)
- [EzsigndocumentGetObjectV1ResponseMPayload](docs/Model/EzsigndocumentGetObjectV1ResponseMPayload.md)
- [EzsigndocumentGetObjectV2Response](docs/Model/EzsigndocumentGetObjectV2Response.md)
- [EzsigndocumentGetObjectV2ResponseMPayload](docs/Model/EzsigndocumentGetObjectV2ResponseMPayload.md)
- [EzsigndocumentGetTemporaryProofV1Response](docs/Model/EzsigndocumentGetTemporaryProofV1Response.md)
- [EzsigndocumentGetTemporaryProofV1ResponseMPayload](docs/Model/EzsigndocumentGetTemporaryProofV1ResponseMPayload.md)
- [EzsigndocumentGetWordsPositionsV1Request](docs/Model/EzsigndocumentGetWordsPositionsV1Request.md)
- [EzsigndocumentGetWordsPositionsV1Response](docs/Model/EzsigndocumentGetWordsPositionsV1Response.md)
- [EzsigndocumentPatchObjectV1Request](docs/Model/EzsigndocumentPatchObjectV1Request.md)
- [EzsigndocumentPatchObjectV1Response](docs/Model/EzsigndocumentPatchObjectV1Response.md)
- [EzsigndocumentRequest](docs/Model/EzsigndocumentRequest.md)
- [EzsigndocumentRequestCompound](docs/Model/EzsigndocumentRequestCompound.md)
- [EzsigndocumentRequestPatch](docs/Model/EzsigndocumentRequestPatch.md)
- [EzsigndocumentResponse](docs/Model/EzsigndocumentResponse.md)
- [EzsigndocumentResponseCompound](docs/Model/EzsigndocumentResponseCompound.md)
- [EzsigndocumentSubmitEzsignformV1Request](docs/Model/EzsigndocumentSubmitEzsignformV1Request.md)
- [EzsigndocumentSubmitEzsignformV1Response](docs/Model/EzsigndocumentSubmitEzsignformV1Response.md)
- [EzsigndocumentUnsendV1Response](docs/Model/EzsigndocumentUnsendV1Response.md)
- [EzsigndocumentlogResponse](docs/Model/EzsigndocumentlogResponse.md)
- [EzsigndocumentlogResponseCompound](docs/Model/EzsigndocumentlogResponseCompound.md)
- [EzsignelementdependencyRequest](docs/Model/EzsignelementdependencyRequest.md)
- [EzsignelementdependencyRequestCompound](docs/Model/EzsignelementdependencyRequestCompound.md)
- [EzsignelementdependencyResponse](docs/Model/EzsignelementdependencyResponse.md)
- [EzsignelementdependencyResponseCompound](docs/Model/EzsignelementdependencyResponseCompound.md)
- [EzsignfolderArchiveV1Response](docs/Model/EzsignfolderArchiveV1Response.md)
- [EzsignfolderBatchDownloadV1Request](docs/Model/EzsignfolderBatchDownloadV1Request.md)
- [EzsignfolderCreateObjectV1Request](docs/Model/EzsignfolderCreateObjectV1Request.md)
- [EzsignfolderCreateObjectV1Response](docs/Model/EzsignfolderCreateObjectV1Response.md)
- [EzsignfolderCreateObjectV1ResponseMPayload](docs/Model/EzsignfolderCreateObjectV1ResponseMPayload.md)
- [EzsignfolderCreateObjectV2Request](docs/Model/EzsignfolderCreateObjectV2Request.md)
- [EzsignfolderCreateObjectV2Response](docs/Model/EzsignfolderCreateObjectV2Response.md)
- [EzsignfolderCreateObjectV2ResponseMPayload](docs/Model/EzsignfolderCreateObjectV2ResponseMPayload.md)
- [EzsignfolderDeleteObjectV1Response](docs/Model/EzsignfolderDeleteObjectV1Response.md)
- [EzsignfolderDisposeEzsignfoldersV1Request](docs/Model/EzsignfolderDisposeEzsignfoldersV1Request.md)
- [EzsignfolderDisposeEzsignfoldersV1Response](docs/Model/EzsignfolderDisposeEzsignfoldersV1Response.md)
- [EzsignfolderDisposeV1Response](docs/Model/EzsignfolderDisposeV1Response.md)
- [EzsignfolderEditObjectV1Request](docs/Model/EzsignfolderEditObjectV1Request.md)
- [EzsignfolderEditObjectV1Response](docs/Model/EzsignfolderEditObjectV1Response.md)
- [EzsignfolderGetActionableElementsV1Response](docs/Model/EzsignfolderGetActionableElementsV1Response.md)
- [EzsignfolderGetActionableElementsV1ResponseMPayload](docs/Model/EzsignfolderGetActionableElementsV1ResponseMPayload.md)
- [EzsignfolderGetAttachmentCountV1Response](docs/Model/EzsignfolderGetAttachmentCountV1Response.md)
- [EzsignfolderGetAttachmentCountV1ResponseMPayload](docs/Model/EzsignfolderGetAttachmentCountV1ResponseMPayload.md)
- [EzsignfolderGetAttachmentsV1Response](docs/Model/EzsignfolderGetAttachmentsV1Response.md)
- [EzsignfolderGetAttachmentsV1ResponseMPayload](docs/Model/EzsignfolderGetAttachmentsV1ResponseMPayload.md)
- [EzsignfolderGetCommunicationCountV1Response](docs/Model/EzsignfolderGetCommunicationCountV1Response.md)
- [EzsignfolderGetCommunicationCountV1ResponseMPayload](docs/Model/EzsignfolderGetCommunicationCountV1ResponseMPayload.md)
- [EzsignfolderGetCommunicationListV1Response](docs/Model/EzsignfolderGetCommunicationListV1Response.md)
- [EzsignfolderGetCommunicationListV1ResponseMPayload](docs/Model/EzsignfolderGetCommunicationListV1ResponseMPayload.md)
- [EzsignfolderGetCommunicationrecipientsV1Response](docs/Model/EzsignfolderGetCommunicationrecipientsV1Response.md)
- [EzsignfolderGetCommunicationrecipientsV1ResponseMPayload](docs/Model/EzsignfolderGetCommunicationrecipientsV1ResponseMPayload.md)
- [EzsignfolderGetCommunicationsendersV1Response](docs/Model/EzsignfolderGetCommunicationsendersV1Response.md)
- [EzsignfolderGetCommunicationsendersV1ResponseMPayload](docs/Model/EzsignfolderGetCommunicationsendersV1ResponseMPayload.md)
- [EzsignfolderGetEzsigndocumentsV1Response](docs/Model/EzsignfolderGetEzsigndocumentsV1Response.md)
- [EzsignfolderGetEzsigndocumentsV1ResponseMPayload](docs/Model/EzsignfolderGetEzsigndocumentsV1ResponseMPayload.md)
- [EzsignfolderGetEzsignfoldersignerassociationsV1Response](docs/Model/EzsignfolderGetEzsignfoldersignerassociationsV1Response.md)
- [EzsignfolderGetEzsignfoldersignerassociationsV1ResponseMPayload](docs/Model/EzsignfolderGetEzsignfoldersignerassociationsV1ResponseMPayload.md)
- [EzsignfolderGetEzsignsignaturesAutomaticV1Response](docs/Model/EzsignfolderGetEzsignsignaturesAutomaticV1Response.md)
- [EzsignfolderGetEzsignsignaturesAutomaticV1ResponseMPayload](docs/Model/EzsignfolderGetEzsignsignaturesAutomaticV1ResponseMPayload.md)
- [EzsignfolderGetFormsDataV1Response](docs/Model/EzsignfolderGetFormsDataV1Response.md)
- [EzsignfolderGetFormsDataV1ResponseMPayload](docs/Model/EzsignfolderGetFormsDataV1ResponseMPayload.md)
- [EzsignfolderGetListV1Response](docs/Model/EzsignfolderGetListV1Response.md)
- [EzsignfolderGetListV1ResponseMPayload](docs/Model/EzsignfolderGetListV1ResponseMPayload.md)
- [EzsignfolderGetObjectV1Response](docs/Model/EzsignfolderGetObjectV1Response.md)
- [EzsignfolderGetObjectV1ResponseMPayload](docs/Model/EzsignfolderGetObjectV1ResponseMPayload.md)
- [EzsignfolderGetObjectV2Response](docs/Model/EzsignfolderGetObjectV2Response.md)
- [EzsignfolderGetObjectV2ResponseMPayload](docs/Model/EzsignfolderGetObjectV2ResponseMPayload.md)
- [EzsignfolderImportEzsignfoldersignerassociationsV1Request](docs/Model/EzsignfolderImportEzsignfoldersignerassociationsV1Request.md)
- [EzsignfolderImportEzsignfoldersignerassociationsV1Response](docs/Model/EzsignfolderImportEzsignfoldersignerassociationsV1Response.md)
- [EzsignfolderImportEzsignfoldersignerassociationsV1ResponseMPayload](docs/Model/EzsignfolderImportEzsignfoldersignerassociationsV1ResponseMPayload.md)
- [EzsignfolderImportEzsigntemplatepackageV1Request](docs/Model/EzsignfolderImportEzsigntemplatepackageV1Request.md)
- [EzsignfolderImportEzsigntemplatepackageV1Response](docs/Model/EzsignfolderImportEzsigntemplatepackageV1Response.md)
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
- [EzsignfolderSendV2Request](docs/Model/EzsignfolderSendV2Request.md)
- [EzsignfolderSendV2Response](docs/Model/EzsignfolderSendV2Response.md)
- [EzsignfolderSendV3Request](docs/Model/EzsignfolderSendV3Request.md)
- [EzsignfolderSendV3Response](docs/Model/EzsignfolderSendV3Response.md)
- [EzsignfolderUnsendV1Response](docs/Model/EzsignfolderUnsendV1Response.md)
- [EzsignfoldersignerassociationCreateObjectV1Request](docs/Model/EzsignfoldersignerassociationCreateObjectV1Request.md)
- [EzsignfoldersignerassociationCreateObjectV1Response](docs/Model/EzsignfoldersignerassociationCreateObjectV1Response.md)
- [EzsignfoldersignerassociationCreateObjectV1ResponseMPayload](docs/Model/EzsignfoldersignerassociationCreateObjectV1ResponseMPayload.md)
- [EzsignfoldersignerassociationCreateObjectV2Request](docs/Model/EzsignfoldersignerassociationCreateObjectV2Request.md)
- [EzsignfoldersignerassociationCreateObjectV2Response](docs/Model/EzsignfoldersignerassociationCreateObjectV2Response.md)
- [EzsignfoldersignerassociationCreateObjectV2ResponseMPayload](docs/Model/EzsignfoldersignerassociationCreateObjectV2ResponseMPayload.md)
- [EzsignfoldersignerassociationDeleteObjectV1Response](docs/Model/EzsignfoldersignerassociationDeleteObjectV1Response.md)
- [EzsignfoldersignerassociationEditObjectV1Request](docs/Model/EzsignfoldersignerassociationEditObjectV1Request.md)
- [EzsignfoldersignerassociationEditObjectV1Response](docs/Model/EzsignfoldersignerassociationEditObjectV1Response.md)
- [EzsignfoldersignerassociationForceDisconnectV1Response](docs/Model/EzsignfoldersignerassociationForceDisconnectV1Response.md)
- [EzsignfoldersignerassociationGetInPersonLoginUrlV1Response](docs/Model/EzsignfoldersignerassociationGetInPersonLoginUrlV1Response.md)
- [EzsignfoldersignerassociationGetInPersonLoginUrlV1ResponseMPayload](docs/Model/EzsignfoldersignerassociationGetInPersonLoginUrlV1ResponseMPayload.md)
- [EzsignfoldersignerassociationGetObjectV1Response](docs/Model/EzsignfoldersignerassociationGetObjectV1Response.md)
- [EzsignfoldersignerassociationGetObjectV1ResponseMPayload](docs/Model/EzsignfoldersignerassociationGetObjectV1ResponseMPayload.md)
- [EzsignfoldersignerassociationGetObjectV2Response](docs/Model/EzsignfoldersignerassociationGetObjectV2Response.md)
- [EzsignfoldersignerassociationGetObjectV2ResponseMPayload](docs/Model/EzsignfoldersignerassociationGetObjectV2ResponseMPayload.md)
- [EzsignfoldersignerassociationPatchObjectV1Request](docs/Model/EzsignfoldersignerassociationPatchObjectV1Request.md)
- [EzsignfoldersignerassociationPatchObjectV1Response](docs/Model/EzsignfoldersignerassociationPatchObjectV1Response.md)
- [EzsignfoldersignerassociationRequest](docs/Model/EzsignfoldersignerassociationRequest.md)
- [EzsignfoldersignerassociationRequestCompound](docs/Model/EzsignfoldersignerassociationRequestCompound.md)
- [EzsignfoldersignerassociationRequestPatch](docs/Model/EzsignfoldersignerassociationRequestPatch.md)
- [EzsignfoldersignerassociationResponse](docs/Model/EzsignfoldersignerassociationResponse.md)
- [EzsignfoldersignerassociationResponseCompound](docs/Model/EzsignfoldersignerassociationResponseCompound.md)
- [EzsignfoldersignerassociationResponseCompoundUser](docs/Model/EzsignfoldersignerassociationResponseCompoundUser.md)
- [EzsignfoldertypeAutocompleteElementResponse](docs/Model/EzsignfoldertypeAutocompleteElementResponse.md)
- [EzsignfoldertypeCreateObjectV1Request](docs/Model/EzsignfoldertypeCreateObjectV1Request.md)
- [EzsignfoldertypeCreateObjectV1Response](docs/Model/EzsignfoldertypeCreateObjectV1Response.md)
- [EzsignfoldertypeCreateObjectV1ResponseMPayload](docs/Model/EzsignfoldertypeCreateObjectV1ResponseMPayload.md)
- [EzsignfoldertypeEditObjectV1Request](docs/Model/EzsignfoldertypeEditObjectV1Request.md)
- [EzsignfoldertypeEditObjectV1Response](docs/Model/EzsignfoldertypeEditObjectV1Response.md)
- [EzsignfoldertypeGetAutocompleteV2Response](docs/Model/EzsignfoldertypeGetAutocompleteV2Response.md)
- [EzsignfoldertypeGetAutocompleteV2ResponseMPayload](docs/Model/EzsignfoldertypeGetAutocompleteV2ResponseMPayload.md)
- [EzsignfoldertypeGetListV1Response](docs/Model/EzsignfoldertypeGetListV1Response.md)
- [EzsignfoldertypeGetListV1ResponseMPayload](docs/Model/EzsignfoldertypeGetListV1ResponseMPayload.md)
- [EzsignfoldertypeGetObjectV2Response](docs/Model/EzsignfoldertypeGetObjectV2Response.md)
- [EzsignfoldertypeGetObjectV2ResponseMPayload](docs/Model/EzsignfoldertypeGetObjectV2ResponseMPayload.md)
- [EzsignfoldertypeListElement](docs/Model/EzsignfoldertypeListElement.md)
- [EzsignfoldertypeRequest](docs/Model/EzsignfoldertypeRequest.md)
- [EzsignfoldertypeRequestCompound](docs/Model/EzsignfoldertypeRequestCompound.md)
- [EzsignfoldertypeResponse](docs/Model/EzsignfoldertypeResponse.md)
- [EzsignfoldertypeResponseCompound](docs/Model/EzsignfoldertypeResponseCompound.md)
- [EzsignformfieldRequest](docs/Model/EzsignformfieldRequest.md)
- [EzsignformfieldRequestCompound](docs/Model/EzsignformfieldRequestCompound.md)
- [EzsignformfieldResponse](docs/Model/EzsignformfieldResponse.md)
- [EzsignformfieldResponseCompound](docs/Model/EzsignformfieldResponseCompound.md)
- [EzsignformfieldgroupCreateObjectV1Request](docs/Model/EzsignformfieldgroupCreateObjectV1Request.md)
- [EzsignformfieldgroupCreateObjectV1Response](docs/Model/EzsignformfieldgroupCreateObjectV1Response.md)
- [EzsignformfieldgroupCreateObjectV1ResponseMPayload](docs/Model/EzsignformfieldgroupCreateObjectV1ResponseMPayload.md)
- [EzsignformfieldgroupDeleteObjectV1Response](docs/Model/EzsignformfieldgroupDeleteObjectV1Response.md)
- [EzsignformfieldgroupEditObjectV1Request](docs/Model/EzsignformfieldgroupEditObjectV1Request.md)
- [EzsignformfieldgroupEditObjectV1Response](docs/Model/EzsignformfieldgroupEditObjectV1Response.md)
- [EzsignformfieldgroupGetObjectV2Response](docs/Model/EzsignformfieldgroupGetObjectV2Response.md)
- [EzsignformfieldgroupGetObjectV2ResponseMPayload](docs/Model/EzsignformfieldgroupGetObjectV2ResponseMPayload.md)
- [EzsignformfieldgroupRequest](docs/Model/EzsignformfieldgroupRequest.md)
- [EzsignformfieldgroupRequestCompound](docs/Model/EzsignformfieldgroupRequestCompound.md)
- [EzsignformfieldgroupResponse](docs/Model/EzsignformfieldgroupResponse.md)
- [EzsignformfieldgroupResponseCompound](docs/Model/EzsignformfieldgroupResponseCompound.md)
- [EzsignformfieldgroupsignerRequest](docs/Model/EzsignformfieldgroupsignerRequest.md)
- [EzsignformfieldgroupsignerRequestCompound](docs/Model/EzsignformfieldgroupsignerRequestCompound.md)
- [EzsignformfieldgroupsignerResponse](docs/Model/EzsignformfieldgroupsignerResponse.md)
- [EzsignformfieldgroupsignerResponseCompound](docs/Model/EzsignformfieldgroupsignerResponseCompound.md)
- [EzsignpageConsultV1Response](docs/Model/EzsignpageConsultV1Response.md)
- [EzsignpageResponse](docs/Model/EzsignpageResponse.md)
- [EzsignpageResponseCompound](docs/Model/EzsignpageResponseCompound.md)
- [EzsignsignatureCreateObjectV1Request](docs/Model/EzsignsignatureCreateObjectV1Request.md)
- [EzsignsignatureCreateObjectV1Response](docs/Model/EzsignsignatureCreateObjectV1Response.md)
- [EzsignsignatureCreateObjectV1ResponseMPayload](docs/Model/EzsignsignatureCreateObjectV1ResponseMPayload.md)
- [EzsignsignatureCreateObjectV2Request](docs/Model/EzsignsignatureCreateObjectV2Request.md)
- [EzsignsignatureCreateObjectV2Response](docs/Model/EzsignsignatureCreateObjectV2Response.md)
- [EzsignsignatureCreateObjectV2ResponseMPayload](docs/Model/EzsignsignatureCreateObjectV2ResponseMPayload.md)
- [EzsignsignatureDeleteObjectV1Response](docs/Model/EzsignsignatureDeleteObjectV1Response.md)
- [EzsignsignatureEditObjectV1Request](docs/Model/EzsignsignatureEditObjectV1Request.md)
- [EzsignsignatureEditObjectV1Response](docs/Model/EzsignsignatureEditObjectV1Response.md)
- [EzsignsignatureGetEzsignsignatureattachmentV1Response](docs/Model/EzsignsignatureGetEzsignsignatureattachmentV1Response.md)
- [EzsignsignatureGetEzsignsignatureattachmentV1ResponseMPayload](docs/Model/EzsignsignatureGetEzsignsignatureattachmentV1ResponseMPayload.md)
- [EzsignsignatureGetEzsignsignaturesAutomaticV1Response](docs/Model/EzsignsignatureGetEzsignsignaturesAutomaticV1Response.md)
- [EzsignsignatureGetEzsignsignaturesAutomaticV1ResponseMPayload](docs/Model/EzsignsignatureGetEzsignsignaturesAutomaticV1ResponseMPayload.md)
- [EzsignsignatureGetObjectV2Response](docs/Model/EzsignsignatureGetObjectV2Response.md)
- [EzsignsignatureGetObjectV2ResponseMPayload](docs/Model/EzsignsignatureGetObjectV2ResponseMPayload.md)
- [EzsignsignatureRequest](docs/Model/EzsignsignatureRequest.md)
- [EzsignsignatureRequestCompound](docs/Model/EzsignsignatureRequestCompound.md)
- [EzsignsignatureResponse](docs/Model/EzsignsignatureResponse.md)
- [EzsignsignatureResponseCompound](docs/Model/EzsignsignatureResponseCompound.md)
- [EzsignsignatureSignV1Request](docs/Model/EzsignsignatureSignV1Request.md)
- [EzsignsignatureSignV1Response](docs/Model/EzsignsignatureSignV1Response.md)
- [EzsignsignatureattachmentResponse](docs/Model/EzsignsignatureattachmentResponse.md)
- [EzsignsignaturecustomdateRequest](docs/Model/EzsignsignaturecustomdateRequest.md)
- [EzsignsignaturecustomdateRequestCompound](docs/Model/EzsignsignaturecustomdateRequestCompound.md)
- [EzsignsignaturecustomdateResponse](docs/Model/EzsignsignaturecustomdateResponse.md)
- [EzsignsignaturecustomdateResponseCompound](docs/Model/EzsignsignaturecustomdateResponseCompound.md)
- [EzsignsignerRequest](docs/Model/EzsignsignerRequest.md)
- [EzsignsignerRequestCompound](docs/Model/EzsignsignerRequestCompound.md)
- [EzsignsignerRequestCompoundContact](docs/Model/EzsignsignerRequestCompoundContact.md)
- [EzsignsignerResponse](docs/Model/EzsignsignerResponse.md)
- [EzsignsignerResponseCompound](docs/Model/EzsignsignerResponseCompound.md)
- [EzsignsignerResponseCompoundContact](docs/Model/EzsignsignerResponseCompoundContact.md)
- [EzsignsignergroupCreateObjectV1Request](docs/Model/EzsignsignergroupCreateObjectV1Request.md)
- [EzsignsignergroupCreateObjectV1Response](docs/Model/EzsignsignergroupCreateObjectV1Response.md)
- [EzsignsignergroupCreateObjectV1ResponseMPayload](docs/Model/EzsignsignergroupCreateObjectV1ResponseMPayload.md)
- [EzsignsignergroupDeleteObjectV1Response](docs/Model/EzsignsignergroupDeleteObjectV1Response.md)
- [EzsignsignergroupEditEzsignsignergroupmembershipsV1Request](docs/Model/EzsignsignergroupEditEzsignsignergroupmembershipsV1Request.md)
- [EzsignsignergroupEditEzsignsignergroupmembershipsV1Response](docs/Model/EzsignsignergroupEditEzsignsignergroupmembershipsV1Response.md)
- [EzsignsignergroupEditEzsignsignergroupmembershipsV1ResponseMPayload](docs/Model/EzsignsignergroupEditEzsignsignergroupmembershipsV1ResponseMPayload.md)
- [EzsignsignergroupEditObjectV1Request](docs/Model/EzsignsignergroupEditObjectV1Request.md)
- [EzsignsignergroupEditObjectV1Response](docs/Model/EzsignsignergroupEditObjectV1Response.md)
- [EzsignsignergroupGetEzsignsignergroupmembershipsV1Response](docs/Model/EzsignsignergroupGetEzsignsignergroupmembershipsV1Response.md)
- [EzsignsignergroupGetEzsignsignergroupmembershipsV1ResponseMPayload](docs/Model/EzsignsignergroupGetEzsignsignergroupmembershipsV1ResponseMPayload.md)
- [EzsignsignergroupGetObjectV2Response](docs/Model/EzsignsignergroupGetObjectV2Response.md)
- [EzsignsignergroupGetObjectV2ResponseMPayload](docs/Model/EzsignsignergroupGetObjectV2ResponseMPayload.md)
- [EzsignsignergroupRequest](docs/Model/EzsignsignergroupRequest.md)
- [EzsignsignergroupRequestCompound](docs/Model/EzsignsignergroupRequestCompound.md)
- [EzsignsignergroupResponse](docs/Model/EzsignsignergroupResponse.md)
- [EzsignsignergroupResponseCompound](docs/Model/EzsignsignergroupResponseCompound.md)
- [EzsignsignergroupmembershipCreateObjectV1Request](docs/Model/EzsignsignergroupmembershipCreateObjectV1Request.md)
- [EzsignsignergroupmembershipCreateObjectV1Response](docs/Model/EzsignsignergroupmembershipCreateObjectV1Response.md)
- [EzsignsignergroupmembershipCreateObjectV1ResponseMPayload](docs/Model/EzsignsignergroupmembershipCreateObjectV1ResponseMPayload.md)
- [EzsignsignergroupmembershipDeleteObjectV1Response](docs/Model/EzsignsignergroupmembershipDeleteObjectV1Response.md)
- [EzsignsignergroupmembershipGetObjectV2Response](docs/Model/EzsignsignergroupmembershipGetObjectV2Response.md)
- [EzsignsignergroupmembershipGetObjectV2ResponseMPayload](docs/Model/EzsignsignergroupmembershipGetObjectV2ResponseMPayload.md)
- [EzsignsignergroupmembershipRequest](docs/Model/EzsignsignergroupmembershipRequest.md)
- [EzsignsignergroupmembershipRequestCompound](docs/Model/EzsignsignergroupmembershipRequestCompound.md)
- [EzsignsignergroupmembershipResponse](docs/Model/EzsignsignergroupmembershipResponse.md)
- [EzsignsignergroupmembershipResponseCompound](docs/Model/EzsignsignergroupmembershipResponseCompound.md)
- [EzsignsigningreasonAutocompleteElementResponse](docs/Model/EzsignsigningreasonAutocompleteElementResponse.md)
- [EzsignsigningreasonCreateObjectV1Request](docs/Model/EzsignsigningreasonCreateObjectV1Request.md)
- [EzsignsigningreasonCreateObjectV1Response](docs/Model/EzsignsigningreasonCreateObjectV1Response.md)
- [EzsignsigningreasonCreateObjectV1ResponseMPayload](docs/Model/EzsignsigningreasonCreateObjectV1ResponseMPayload.md)
- [EzsignsigningreasonEditObjectV1Request](docs/Model/EzsignsigningreasonEditObjectV1Request.md)
- [EzsignsigningreasonEditObjectV1Response](docs/Model/EzsignsigningreasonEditObjectV1Response.md)
- [EzsignsigningreasonGetAutocompleteV2Response](docs/Model/EzsignsigningreasonGetAutocompleteV2Response.md)
- [EzsignsigningreasonGetAutocompleteV2ResponseMPayload](docs/Model/EzsignsigningreasonGetAutocompleteV2ResponseMPayload.md)
- [EzsignsigningreasonGetListV1Response](docs/Model/EzsignsigningreasonGetListV1Response.md)
- [EzsignsigningreasonGetListV1ResponseMPayload](docs/Model/EzsignsigningreasonGetListV1ResponseMPayload.md)
- [EzsignsigningreasonGetObjectV2Response](docs/Model/EzsignsigningreasonGetObjectV2Response.md)
- [EzsignsigningreasonGetObjectV2ResponseMPayload](docs/Model/EzsignsigningreasonGetObjectV2ResponseMPayload.md)
- [EzsignsigningreasonListElement](docs/Model/EzsignsigningreasonListElement.md)
- [EzsignsigningreasonRequest](docs/Model/EzsignsigningreasonRequest.md)
- [EzsignsigningreasonRequestCompound](docs/Model/EzsignsigningreasonRequestCompound.md)
- [EzsignsigningreasonResponse](docs/Model/EzsignsigningreasonResponse.md)
- [EzsignsigningreasonResponseCompound](docs/Model/EzsignsigningreasonResponseCompound.md)
- [EzsigntemplateAutocompleteElementResponse](docs/Model/EzsigntemplateAutocompleteElementResponse.md)
- [EzsigntemplateCopyV1Request](docs/Model/EzsigntemplateCopyV1Request.md)
- [EzsigntemplateCopyV1Response](docs/Model/EzsigntemplateCopyV1Response.md)
- [EzsigntemplateCopyV1ResponseMPayload](docs/Model/EzsigntemplateCopyV1ResponseMPayload.md)
- [EzsigntemplateCreateObjectV1Request](docs/Model/EzsigntemplateCreateObjectV1Request.md)
- [EzsigntemplateCreateObjectV1Response](docs/Model/EzsigntemplateCreateObjectV1Response.md)
- [EzsigntemplateCreateObjectV1ResponseMPayload](docs/Model/EzsigntemplateCreateObjectV1ResponseMPayload.md)
- [EzsigntemplateDeleteObjectV1Response](docs/Model/EzsigntemplateDeleteObjectV1Response.md)
- [EzsigntemplateEditObjectV1Request](docs/Model/EzsigntemplateEditObjectV1Request.md)
- [EzsigntemplateEditObjectV1Response](docs/Model/EzsigntemplateEditObjectV1Response.md)
- [EzsigntemplateGetAutocompleteV2Response](docs/Model/EzsigntemplateGetAutocompleteV2Response.md)
- [EzsigntemplateGetAutocompleteV2ResponseMPayload](docs/Model/EzsigntemplateGetAutocompleteV2ResponseMPayload.md)
- [EzsigntemplateGetListV1Response](docs/Model/EzsigntemplateGetListV1Response.md)
- [EzsigntemplateGetListV1ResponseMPayload](docs/Model/EzsigntemplateGetListV1ResponseMPayload.md)
- [EzsigntemplateGetObjectV1Response](docs/Model/EzsigntemplateGetObjectV1Response.md)
- [EzsigntemplateGetObjectV1ResponseMPayload](docs/Model/EzsigntemplateGetObjectV1ResponseMPayload.md)
- [EzsigntemplateGetObjectV2Response](docs/Model/EzsigntemplateGetObjectV2Response.md)
- [EzsigntemplateGetObjectV2ResponseMPayload](docs/Model/EzsigntemplateGetObjectV2ResponseMPayload.md)
- [EzsigntemplateListElement](docs/Model/EzsigntemplateListElement.md)
- [EzsigntemplateRequest](docs/Model/EzsigntemplateRequest.md)
- [EzsigntemplateRequestCompound](docs/Model/EzsigntemplateRequestCompound.md)
- [EzsigntemplateResponse](docs/Model/EzsigntemplateResponse.md)
- [EzsigntemplateResponseCompound](docs/Model/EzsigntemplateResponseCompound.md)
- [EzsigntemplatedocumentCreateObjectV1Request](docs/Model/EzsigntemplatedocumentCreateObjectV1Request.md)
- [EzsigntemplatedocumentCreateObjectV1Response](docs/Model/EzsigntemplatedocumentCreateObjectV1Response.md)
- [EzsigntemplatedocumentCreateObjectV1ResponseMPayload](docs/Model/EzsigntemplatedocumentCreateObjectV1ResponseMPayload.md)
- [EzsigntemplatedocumentEditEzsigntemplateformfieldgroupsV1Request](docs/Model/EzsigntemplatedocumentEditEzsigntemplateformfieldgroupsV1Request.md)
- [EzsigntemplatedocumentEditEzsigntemplateformfieldgroupsV1Response](docs/Model/EzsigntemplatedocumentEditEzsigntemplateformfieldgroupsV1Response.md)
- [EzsigntemplatedocumentEditEzsigntemplateformfieldgroupsV1ResponseMPayload](docs/Model/EzsigntemplatedocumentEditEzsigntemplateformfieldgroupsV1ResponseMPayload.md)
- [EzsigntemplatedocumentEditEzsigntemplatesignaturesV1Request](docs/Model/EzsigntemplatedocumentEditEzsigntemplatesignaturesV1Request.md)
- [EzsigntemplatedocumentEditEzsigntemplatesignaturesV1Response](docs/Model/EzsigntemplatedocumentEditEzsigntemplatesignaturesV1Response.md)
- [EzsigntemplatedocumentEditEzsigntemplatesignaturesV1ResponseMPayload](docs/Model/EzsigntemplatedocumentEditEzsigntemplatesignaturesV1ResponseMPayload.md)
- [EzsigntemplatedocumentEditObjectV1Request](docs/Model/EzsigntemplatedocumentEditObjectV1Request.md)
- [EzsigntemplatedocumentEditObjectV1Response](docs/Model/EzsigntemplatedocumentEditObjectV1Response.md)
- [EzsigntemplatedocumentFlattenV1Response](docs/Model/EzsigntemplatedocumentFlattenV1Response.md)
- [EzsigntemplatedocumentGetEzsigntemplatedocumentpagesV1Response](docs/Model/EzsigntemplatedocumentGetEzsigntemplatedocumentpagesV1Response.md)
- [EzsigntemplatedocumentGetEzsigntemplatedocumentpagesV1ResponseMPayload](docs/Model/EzsigntemplatedocumentGetEzsigntemplatedocumentpagesV1ResponseMPayload.md)
- [EzsigntemplatedocumentGetEzsigntemplateformfieldgroupsV1Response](docs/Model/EzsigntemplatedocumentGetEzsigntemplateformfieldgroupsV1Response.md)
- [EzsigntemplatedocumentGetEzsigntemplateformfieldgroupsV1ResponseMPayload](docs/Model/EzsigntemplatedocumentGetEzsigntemplateformfieldgroupsV1ResponseMPayload.md)
- [EzsigntemplatedocumentGetEzsigntemplatesignaturesV1Response](docs/Model/EzsigntemplatedocumentGetEzsigntemplatesignaturesV1Response.md)
- [EzsigntemplatedocumentGetEzsigntemplatesignaturesV1ResponseMPayload](docs/Model/EzsigntemplatedocumentGetEzsigntemplatesignaturesV1ResponseMPayload.md)
- [EzsigntemplatedocumentGetObjectV2Response](docs/Model/EzsigntemplatedocumentGetObjectV2Response.md)
- [EzsigntemplatedocumentGetObjectV2ResponseMPayload](docs/Model/EzsigntemplatedocumentGetObjectV2ResponseMPayload.md)
- [EzsigntemplatedocumentGetWordsPositionsV1Request](docs/Model/EzsigntemplatedocumentGetWordsPositionsV1Request.md)
- [EzsigntemplatedocumentGetWordsPositionsV1Response](docs/Model/EzsigntemplatedocumentGetWordsPositionsV1Response.md)
- [EzsigntemplatedocumentPatchObjectV1Request](docs/Model/EzsigntemplatedocumentPatchObjectV1Request.md)
- [EzsigntemplatedocumentPatchObjectV1Response](docs/Model/EzsigntemplatedocumentPatchObjectV1Response.md)
- [EzsigntemplatedocumentRequest](docs/Model/EzsigntemplatedocumentRequest.md)
- [EzsigntemplatedocumentRequestCompound](docs/Model/EzsigntemplatedocumentRequestCompound.md)
- [EzsigntemplatedocumentRequestPatch](docs/Model/EzsigntemplatedocumentRequestPatch.md)
- [EzsigntemplatedocumentResponse](docs/Model/EzsigntemplatedocumentResponse.md)
- [EzsigntemplatedocumentResponseCompound](docs/Model/EzsigntemplatedocumentResponseCompound.md)
- [EzsigntemplatedocumentpageResponse](docs/Model/EzsigntemplatedocumentpageResponse.md)
- [EzsigntemplatedocumentpageResponseCompound](docs/Model/EzsigntemplatedocumentpageResponseCompound.md)
- [EzsigntemplateelementdependencyRequest](docs/Model/EzsigntemplateelementdependencyRequest.md)
- [EzsigntemplateelementdependencyRequestCompound](docs/Model/EzsigntemplateelementdependencyRequestCompound.md)
- [EzsigntemplateelementdependencyResponse](docs/Model/EzsigntemplateelementdependencyResponse.md)
- [EzsigntemplateelementdependencyResponseCompound](docs/Model/EzsigntemplateelementdependencyResponseCompound.md)
- [EzsigntemplateformfieldRequest](docs/Model/EzsigntemplateformfieldRequest.md)
- [EzsigntemplateformfieldRequestCompound](docs/Model/EzsigntemplateformfieldRequestCompound.md)
- [EzsigntemplateformfieldResponse](docs/Model/EzsigntemplateformfieldResponse.md)
- [EzsigntemplateformfieldResponseCompound](docs/Model/EzsigntemplateformfieldResponseCompound.md)
- [EzsigntemplateformfieldgroupCreateObjectV1Request](docs/Model/EzsigntemplateformfieldgroupCreateObjectV1Request.md)
- [EzsigntemplateformfieldgroupCreateObjectV1Response](docs/Model/EzsigntemplateformfieldgroupCreateObjectV1Response.md)
- [EzsigntemplateformfieldgroupCreateObjectV1ResponseMPayload](docs/Model/EzsigntemplateformfieldgroupCreateObjectV1ResponseMPayload.md)
- [EzsigntemplateformfieldgroupDeleteObjectV1Response](docs/Model/EzsigntemplateformfieldgroupDeleteObjectV1Response.md)
- [EzsigntemplateformfieldgroupEditObjectV1Request](docs/Model/EzsigntemplateformfieldgroupEditObjectV1Request.md)
- [EzsigntemplateformfieldgroupEditObjectV1Response](docs/Model/EzsigntemplateformfieldgroupEditObjectV1Response.md)
- [EzsigntemplateformfieldgroupGetObjectV2Response](docs/Model/EzsigntemplateformfieldgroupGetObjectV2Response.md)
- [EzsigntemplateformfieldgroupGetObjectV2ResponseMPayload](docs/Model/EzsigntemplateformfieldgroupGetObjectV2ResponseMPayload.md)
- [EzsigntemplateformfieldgroupRequest](docs/Model/EzsigntemplateformfieldgroupRequest.md)
- [EzsigntemplateformfieldgroupRequestCompound](docs/Model/EzsigntemplateformfieldgroupRequestCompound.md)
- [EzsigntemplateformfieldgroupResponse](docs/Model/EzsigntemplateformfieldgroupResponse.md)
- [EzsigntemplateformfieldgroupResponseCompound](docs/Model/EzsigntemplateformfieldgroupResponseCompound.md)
- [EzsigntemplateformfieldgroupsignerRequest](docs/Model/EzsigntemplateformfieldgroupsignerRequest.md)
- [EzsigntemplateformfieldgroupsignerRequestCompound](docs/Model/EzsigntemplateformfieldgroupsignerRequestCompound.md)
- [EzsigntemplateformfieldgroupsignerResponse](docs/Model/EzsigntemplateformfieldgroupsignerResponse.md)
- [EzsigntemplateformfieldgroupsignerResponseCompound](docs/Model/EzsigntemplateformfieldgroupsignerResponseCompound.md)
- [EzsigntemplatepackageAutocompleteElementResponse](docs/Model/EzsigntemplatepackageAutocompleteElementResponse.md)
- [EzsigntemplatepackageCreateObjectV1Request](docs/Model/EzsigntemplatepackageCreateObjectV1Request.md)
- [EzsigntemplatepackageCreateObjectV1Response](docs/Model/EzsigntemplatepackageCreateObjectV1Response.md)
- [EzsigntemplatepackageCreateObjectV1ResponseMPayload](docs/Model/EzsigntemplatepackageCreateObjectV1ResponseMPayload.md)
- [EzsigntemplatepackageDeleteObjectV1Response](docs/Model/EzsigntemplatepackageDeleteObjectV1Response.md)
- [EzsigntemplatepackageEditEzsigntemplatepackagesignersV1Request](docs/Model/EzsigntemplatepackageEditEzsigntemplatepackagesignersV1Request.md)
- [EzsigntemplatepackageEditEzsigntemplatepackagesignersV1Response](docs/Model/EzsigntemplatepackageEditEzsigntemplatepackagesignersV1Response.md)
- [EzsigntemplatepackageEditEzsigntemplatepackagesignersV1ResponseMPayload](docs/Model/EzsigntemplatepackageEditEzsigntemplatepackagesignersV1ResponseMPayload.md)
- [EzsigntemplatepackageEditObjectV1Request](docs/Model/EzsigntemplatepackageEditObjectV1Request.md)
- [EzsigntemplatepackageEditObjectV1Response](docs/Model/EzsigntemplatepackageEditObjectV1Response.md)
- [EzsigntemplatepackageGetAutocompleteV2Response](docs/Model/EzsigntemplatepackageGetAutocompleteV2Response.md)
- [EzsigntemplatepackageGetAutocompleteV2ResponseMPayload](docs/Model/EzsigntemplatepackageGetAutocompleteV2ResponseMPayload.md)
- [EzsigntemplatepackageGetListV1Response](docs/Model/EzsigntemplatepackageGetListV1Response.md)
- [EzsigntemplatepackageGetListV1ResponseMPayload](docs/Model/EzsigntemplatepackageGetListV1ResponseMPayload.md)
- [EzsigntemplatepackageGetObjectV2Response](docs/Model/EzsigntemplatepackageGetObjectV2Response.md)
- [EzsigntemplatepackageGetObjectV2ResponseMPayload](docs/Model/EzsigntemplatepackageGetObjectV2ResponseMPayload.md)
- [EzsigntemplatepackageListElement](docs/Model/EzsigntemplatepackageListElement.md)
- [EzsigntemplatepackageRequest](docs/Model/EzsigntemplatepackageRequest.md)
- [EzsigntemplatepackageRequestCompound](docs/Model/EzsigntemplatepackageRequestCompound.md)
- [EzsigntemplatepackageResponse](docs/Model/EzsigntemplatepackageResponse.md)
- [EzsigntemplatepackageResponseCompound](docs/Model/EzsigntemplatepackageResponseCompound.md)
- [EzsigntemplatepackagemembershipCreateObjectV1Request](docs/Model/EzsigntemplatepackagemembershipCreateObjectV1Request.md)
- [EzsigntemplatepackagemembershipCreateObjectV1Response](docs/Model/EzsigntemplatepackagemembershipCreateObjectV1Response.md)
- [EzsigntemplatepackagemembershipCreateObjectV1ResponseMPayload](docs/Model/EzsigntemplatepackagemembershipCreateObjectV1ResponseMPayload.md)
- [EzsigntemplatepackagemembershipDeleteObjectV1Response](docs/Model/EzsigntemplatepackagemembershipDeleteObjectV1Response.md)
- [EzsigntemplatepackagemembershipGetObjectV2Response](docs/Model/EzsigntemplatepackagemembershipGetObjectV2Response.md)
- [EzsigntemplatepackagemembershipGetObjectV2ResponseMPayload](docs/Model/EzsigntemplatepackagemembershipGetObjectV2ResponseMPayload.md)
- [EzsigntemplatepackagemembershipRequest](docs/Model/EzsigntemplatepackagemembershipRequest.md)
- [EzsigntemplatepackagemembershipRequestCompound](docs/Model/EzsigntemplatepackagemembershipRequestCompound.md)
- [EzsigntemplatepackagemembershipResponse](docs/Model/EzsigntemplatepackagemembershipResponse.md)
- [EzsigntemplatepackagemembershipResponseCompound](docs/Model/EzsigntemplatepackagemembershipResponseCompound.md)
- [EzsigntemplatepackagesignerCreateObjectV1Request](docs/Model/EzsigntemplatepackagesignerCreateObjectV1Request.md)
- [EzsigntemplatepackagesignerCreateObjectV1Response](docs/Model/EzsigntemplatepackagesignerCreateObjectV1Response.md)
- [EzsigntemplatepackagesignerCreateObjectV1ResponseMPayload](docs/Model/EzsigntemplatepackagesignerCreateObjectV1ResponseMPayload.md)
- [EzsigntemplatepackagesignerDeleteObjectV1Response](docs/Model/EzsigntemplatepackagesignerDeleteObjectV1Response.md)
- [EzsigntemplatepackagesignerDeleteObjectV1ResponseMPayload](docs/Model/EzsigntemplatepackagesignerDeleteObjectV1ResponseMPayload.md)
- [EzsigntemplatepackagesignerEditObjectV1Request](docs/Model/EzsigntemplatepackagesignerEditObjectV1Request.md)
- [EzsigntemplatepackagesignerEditObjectV1Response](docs/Model/EzsigntemplatepackagesignerEditObjectV1Response.md)
- [EzsigntemplatepackagesignerGetObjectV2Response](docs/Model/EzsigntemplatepackagesignerGetObjectV2Response.md)
- [EzsigntemplatepackagesignerGetObjectV2ResponseMPayload](docs/Model/EzsigntemplatepackagesignerGetObjectV2ResponseMPayload.md)
- [EzsigntemplatepackagesignerRequest](docs/Model/EzsigntemplatepackagesignerRequest.md)
- [EzsigntemplatepackagesignerRequestCompound](docs/Model/EzsigntemplatepackagesignerRequestCompound.md)
- [EzsigntemplatepackagesignerResponse](docs/Model/EzsigntemplatepackagesignerResponse.md)
- [EzsigntemplatepackagesignerResponseCompound](docs/Model/EzsigntemplatepackagesignerResponseCompound.md)
- [EzsigntemplatepackagesignermembershipCreateObjectV1Request](docs/Model/EzsigntemplatepackagesignermembershipCreateObjectV1Request.md)
- [EzsigntemplatepackagesignermembershipCreateObjectV1Response](docs/Model/EzsigntemplatepackagesignermembershipCreateObjectV1Response.md)
- [EzsigntemplatepackagesignermembershipCreateObjectV1ResponseMPayload](docs/Model/EzsigntemplatepackagesignermembershipCreateObjectV1ResponseMPayload.md)
- [EzsigntemplatepackagesignermembershipDeleteObjectV1Response](docs/Model/EzsigntemplatepackagesignermembershipDeleteObjectV1Response.md)
- [EzsigntemplatepackagesignermembershipDeleteObjectV1ResponseMPayload](docs/Model/EzsigntemplatepackagesignermembershipDeleteObjectV1ResponseMPayload.md)
- [EzsigntemplatepackagesignermembershipGetObjectV2Response](docs/Model/EzsigntemplatepackagesignermembershipGetObjectV2Response.md)
- [EzsigntemplatepackagesignermembershipGetObjectV2ResponseMPayload](docs/Model/EzsigntemplatepackagesignermembershipGetObjectV2ResponseMPayload.md)
- [EzsigntemplatepackagesignermembershipRequest](docs/Model/EzsigntemplatepackagesignermembershipRequest.md)
- [EzsigntemplatepackagesignermembershipRequestCompound](docs/Model/EzsigntemplatepackagesignermembershipRequestCompound.md)
- [EzsigntemplatepackagesignermembershipResponse](docs/Model/EzsigntemplatepackagesignermembershipResponse.md)
- [EzsigntemplatepackagesignermembershipResponseCompound](docs/Model/EzsigntemplatepackagesignermembershipResponseCompound.md)
- [EzsigntemplatesignatureCreateObjectV1Request](docs/Model/EzsigntemplatesignatureCreateObjectV1Request.md)
- [EzsigntemplatesignatureCreateObjectV1Response](docs/Model/EzsigntemplatesignatureCreateObjectV1Response.md)
- [EzsigntemplatesignatureCreateObjectV1ResponseMPayload](docs/Model/EzsigntemplatesignatureCreateObjectV1ResponseMPayload.md)
- [EzsigntemplatesignatureDeleteObjectV1Response](docs/Model/EzsigntemplatesignatureDeleteObjectV1Response.md)
- [EzsigntemplatesignatureEditObjectV1Request](docs/Model/EzsigntemplatesignatureEditObjectV1Request.md)
- [EzsigntemplatesignatureEditObjectV1Response](docs/Model/EzsigntemplatesignatureEditObjectV1Response.md)
- [EzsigntemplatesignatureGetObjectV2Response](docs/Model/EzsigntemplatesignatureGetObjectV2Response.md)
- [EzsigntemplatesignatureGetObjectV2ResponseMPayload](docs/Model/EzsigntemplatesignatureGetObjectV2ResponseMPayload.md)
- [EzsigntemplatesignatureRequest](docs/Model/EzsigntemplatesignatureRequest.md)
- [EzsigntemplatesignatureRequestCompound](docs/Model/EzsigntemplatesignatureRequestCompound.md)
- [EzsigntemplatesignatureResponse](docs/Model/EzsigntemplatesignatureResponse.md)
- [EzsigntemplatesignatureResponseCompound](docs/Model/EzsigntemplatesignatureResponseCompound.md)
- [EzsigntemplatesignaturecustomdateRequest](docs/Model/EzsigntemplatesignaturecustomdateRequest.md)
- [EzsigntemplatesignaturecustomdateRequestCompound](docs/Model/EzsigntemplatesignaturecustomdateRequestCompound.md)
- [EzsigntemplatesignaturecustomdateResponse](docs/Model/EzsigntemplatesignaturecustomdateResponse.md)
- [EzsigntemplatesignaturecustomdateResponseCompound](docs/Model/EzsigntemplatesignaturecustomdateResponseCompound.md)
- [EzsigntemplatesignerCreateObjectV1Request](docs/Model/EzsigntemplatesignerCreateObjectV1Request.md)
- [EzsigntemplatesignerCreateObjectV1Response](docs/Model/EzsigntemplatesignerCreateObjectV1Response.md)
- [EzsigntemplatesignerCreateObjectV1ResponseMPayload](docs/Model/EzsigntemplatesignerCreateObjectV1ResponseMPayload.md)
- [EzsigntemplatesignerDeleteObjectV1Response](docs/Model/EzsigntemplatesignerDeleteObjectV1Response.md)
- [EzsigntemplatesignerEditObjectV1Request](docs/Model/EzsigntemplatesignerEditObjectV1Request.md)
- [EzsigntemplatesignerEditObjectV1Response](docs/Model/EzsigntemplatesignerEditObjectV1Response.md)
- [EzsigntemplatesignerGetObjectV2Response](docs/Model/EzsigntemplatesignerGetObjectV2Response.md)
- [EzsigntemplatesignerGetObjectV2ResponseMPayload](docs/Model/EzsigntemplatesignerGetObjectV2ResponseMPayload.md)
- [EzsigntemplatesignerRequest](docs/Model/EzsigntemplatesignerRequest.md)
- [EzsigntemplatesignerRequestCompound](docs/Model/EzsigntemplatesignerRequestCompound.md)
- [EzsigntemplatesignerResponse](docs/Model/EzsigntemplatesignerResponse.md)
- [EzsigntemplatesignerResponseCompound](docs/Model/EzsigntemplatesignerResponseCompound.md)
- [EzsigntsarequirementAutocompleteElementResponse](docs/Model/EzsigntsarequirementAutocompleteElementResponse.md)
- [EzsigntsarequirementGetAutocompleteV2Response](docs/Model/EzsigntsarequirementGetAutocompleteV2Response.md)
- [EzsigntsarequirementGetAutocompleteV2ResponseMPayload](docs/Model/EzsigntsarequirementGetAutocompleteV2ResponseMPayload.md)
- [FieldEActivesessionOrigin](docs/Model/FieldEActivesessionOrigin.md)
- [FieldEActivesessionUsertype](docs/Model/FieldEActivesessionUsertype.md)
- [FieldEActivesessionWeekdaystart](docs/Model/FieldEActivesessionWeekdaystart.md)
- [FieldEAttachmentDocumenttype](docs/Model/FieldEAttachmentDocumenttype.md)
- [FieldEAttachmentPrivacy](docs/Model/FieldEAttachmentPrivacy.md)
- [FieldEAttachmentType](docs/Model/FieldEAttachmentType.md)
- [FieldEAttachmentVerified](docs/Model/FieldEAttachmentVerified.md)
- [FieldEAttachmentlogType](docs/Model/FieldEAttachmentlogType.md)
- [FieldEBrandingLogo](docs/Model/FieldEBrandingLogo.md)
- [FieldECommunicationImportance](docs/Model/FieldECommunicationImportance.md)
- [FieldECommunicationType](docs/Model/FieldECommunicationType.md)
- [FieldECommunicationexternalrecipientType](docs/Model/FieldECommunicationexternalrecipientType.md)
- [FieldECommunicationrecipientType](docs/Model/FieldECommunicationrecipientType.md)
- [FieldECreditcardtypeCodename](docs/Model/FieldECreditcardtypeCodename.md)
- [FieldEErrorCode](docs/Model/FieldEErrorCode.md)
- [FieldEEzmaxinvoicingPaymenttype](docs/Model/FieldEEzmaxinvoicingPaymenttype.md)
- [FieldEEzmaxinvoicingagentVariationezmax](docs/Model/FieldEEzmaxinvoicingagentVariationezmax.md)
- [FieldEEzmaxinvoicingagentVariationezsign](docs/Model/FieldEEzmaxinvoicingagentVariationezsign.md)
- [FieldEEzmaxinvoicingcontractPaymenttype](docs/Model/FieldEEzmaxinvoicingcontractPaymenttype.md)
- [FieldEEzmaxinvoicinguserVariationezsign](docs/Model/FieldEEzmaxinvoicinguserVariationezsign.md)
- [FieldEEzsignannotationType](docs/Model/FieldEEzsignannotationType.md)
- [FieldEEzsigndocumentStep](docs/Model/FieldEEzsigndocumentStep.md)
- [FieldEEzsigndocumentlogType](docs/Model/FieldEEzsigndocumentlogType.md)
- [FieldEEzsignelementdependencyOperator](docs/Model/FieldEEzsignelementdependencyOperator.md)
- [FieldEEzsignelementdependencyValidation](docs/Model/FieldEEzsignelementdependencyValidation.md)
- [FieldEEzsignfolderSendreminderfrequency](docs/Model/FieldEEzsignfolderSendreminderfrequency.md)
- [FieldEEzsignfolderStep](docs/Model/FieldEEzsignfolderStep.md)
- [FieldEEzsignfoldertypeDisposal](docs/Model/FieldEEzsignfoldertypeDisposal.md)
- [FieldEEzsignfoldertypePrivacylevel](docs/Model/FieldEEzsignfoldertypePrivacylevel.md)
- [FieldEEzsignfoldertypeSendreminderfrequency](docs/Model/FieldEEzsignfoldertypeSendreminderfrequency.md)
- [FieldEEzsignformfieldDependencyrequirement](docs/Model/FieldEEzsignformfieldDependencyrequirement.md)
- [FieldEEzsignformfieldgroupSignerrequirement](docs/Model/FieldEEzsignformfieldgroupSignerrequirement.md)
- [FieldEEzsignformfieldgroupTooltipposition](docs/Model/FieldEEzsignformfieldgroupTooltipposition.md)
- [FieldEEzsignformfieldgroupType](docs/Model/FieldEEzsignformfieldgroupType.md)
- [FieldEEzsignsignatureAttachmentnamesource](docs/Model/FieldEEzsignsignatureAttachmentnamesource.md)
- [FieldEEzsignsignatureDependencyrequirement](docs/Model/FieldEEzsignsignatureDependencyrequirement.md)
- [FieldEEzsignsignatureFont](docs/Model/FieldEEzsignsignatureFont.md)
- [FieldEEzsignsignatureTooltipposition](docs/Model/FieldEEzsignsignatureTooltipposition.md)
- [FieldEEzsignsignatureType](docs/Model/FieldEEzsignsignatureType.md)
- [FieldEEzsigntemplateelementdependencyOperator](docs/Model/FieldEEzsigntemplateelementdependencyOperator.md)
- [FieldEEzsigntemplateelementdependencyValidation](docs/Model/FieldEEzsigntemplateelementdependencyValidation.md)
- [FieldEEzsigntemplateformfieldDependencyrequirement](docs/Model/FieldEEzsigntemplateformfieldDependencyrequirement.md)
- [FieldEEzsigntemplateformfieldgroupSignerrequirement](docs/Model/FieldEEzsigntemplateformfieldgroupSignerrequirement.md)
- [FieldEEzsigntemplateformfieldgroupTooltipposition](docs/Model/FieldEEzsigntemplateformfieldgroupTooltipposition.md)
- [FieldEEzsigntemplateformfieldgroupType](docs/Model/FieldEEzsigntemplateformfieldgroupType.md)
- [FieldEEzsigntemplatesignatureAttachmentnamesource](docs/Model/FieldEEzsigntemplatesignatureAttachmentnamesource.md)
- [FieldEEzsigntemplatesignatureDependencyrequirement](docs/Model/FieldEEzsigntemplatesignatureDependencyrequirement.md)
- [FieldEEzsigntemplatesignatureFont](docs/Model/FieldEEzsigntemplatesignatureFont.md)
- [FieldEEzsigntemplatesignatureTooltipposition](docs/Model/FieldEEzsigntemplatesignatureTooltipposition.md)
- [FieldEEzsigntemplatesignatureType](docs/Model/FieldEEzsigntemplatesignatureType.md)
- [FieldENotificationpreferenceStatus](docs/Model/FieldENotificationpreferenceStatus.md)
- [FieldEPaymenttermType](docs/Model/FieldEPaymenttermType.md)
- [FieldEPhoneType](docs/Model/FieldEPhoneType.md)
- [FieldESessionhistoryEndby](docs/Model/FieldESessionhistoryEndby.md)
- [FieldESystemconfigurationEzsign](docs/Model/FieldESystemconfigurationEzsign.md)
- [FieldESystemconfigurationLanguage1](docs/Model/FieldESystemconfigurationLanguage1.md)
- [FieldESystemconfigurationLanguage2](docs/Model/FieldESystemconfigurationLanguage2.md)
- [FieldESystemconfigurationNewexternaluseraction](docs/Model/FieldESystemconfigurationNewexternaluseraction.md)
- [FieldEUserEzsignaccess](docs/Model/FieldEUserEzsignaccess.md)
- [FieldEUserEzsignprepaid](docs/Model/FieldEUserEzsignprepaid.md)
- [FieldEUserEzsignsendreminderfrequency](docs/Model/FieldEUserEzsignsendreminderfrequency.md)
- [FieldEUserLogintype](docs/Model/FieldEUserLogintype.md)
- [FieldEUserOrigin](docs/Model/FieldEUserOrigin.md)
- [FieldEUserType](docs/Model/FieldEUserType.md)
- [FieldEVariableexpenseTaxable](docs/Model/FieldEVariableexpenseTaxable.md)
- [FieldEVersionhistoryType](docs/Model/FieldEVersionhistoryType.md)
- [FieldEVersionhistoryUsertype](docs/Model/FieldEVersionhistoryUsertype.md)
- [FieldEWebhookEzsignevent](docs/Model/FieldEWebhookEzsignevent.md)
- [FieldEWebhookManagementevent](docs/Model/FieldEWebhookManagementevent.md)
- [FieldEWebhookModule](docs/Model/FieldEWebhookModule.md)
- [FieldPksEzmaxclientOs](docs/Model/FieldPksEzmaxclientOs.md)
- [FontAutocompleteElementResponse](docs/Model/FontAutocompleteElementResponse.md)
- [FontGetAutocompleteV2Response](docs/Model/FontGetAutocompleteV2Response.md)
- [FontGetAutocompleteV2ResponseMPayload](docs/Model/FontGetAutocompleteV2ResponseMPayload.md)
- [FranchisebrokerAutocompleteElementResponse](docs/Model/FranchisebrokerAutocompleteElementResponse.md)
- [FranchisebrokerGetAutocompleteV2Response](docs/Model/FranchisebrokerGetAutocompleteV2Response.md)
- [FranchisebrokerGetAutocompleteV2ResponseMPayload](docs/Model/FranchisebrokerGetAutocompleteV2ResponseMPayload.md)
- [FranchiseofficeAutocompleteElementResponse](docs/Model/FranchiseofficeAutocompleteElementResponse.md)
- [FranchiseofficeGetAutocompleteV2Response](docs/Model/FranchiseofficeGetAutocompleteV2Response.md)
- [FranchiseofficeGetAutocompleteV2ResponseMPayload](docs/Model/FranchiseofficeGetAutocompleteV2ResponseMPayload.md)
- [FranchisereferalincomeCreateObjectV1Request](docs/Model/FranchisereferalincomeCreateObjectV1Request.md)
- [FranchisereferalincomeCreateObjectV1Response](docs/Model/FranchisereferalincomeCreateObjectV1Response.md)
- [FranchisereferalincomeCreateObjectV1ResponseMPayload](docs/Model/FranchisereferalincomeCreateObjectV1ResponseMPayload.md)
- [FranchisereferalincomeCreateObjectV2Request](docs/Model/FranchisereferalincomeCreateObjectV2Request.md)
- [FranchisereferalincomeCreateObjectV2Response](docs/Model/FranchisereferalincomeCreateObjectV2Response.md)
- [FranchisereferalincomeCreateObjectV2ResponseMPayload](docs/Model/FranchisereferalincomeCreateObjectV2ResponseMPayload.md)
- [FranchisereferalincomeRequest](docs/Model/FranchisereferalincomeRequest.md)
- [FranchisereferalincomeRequestCompound](docs/Model/FranchisereferalincomeRequestCompound.md)
- [GlobalCustomerGetEndpointV1Response](docs/Model/GlobalCustomerGetEndpointV1Response.md)
- [GlobalEzmaxclientVersionV1Response](docs/Model/GlobalEzmaxclientVersionV1Response.md)
- [GlobalEzmaxcustomerGetConfigurationV1Response](docs/Model/GlobalEzmaxcustomerGetConfigurationV1Response.md)
- [HeaderAcceptLanguage](docs/Model/HeaderAcceptLanguage.md)
- [InscriptionGetAttachmentsV1Response](docs/Model/InscriptionGetAttachmentsV1Response.md)
- [InscriptionGetAttachmentsV1ResponseMPayload](docs/Model/InscriptionGetAttachmentsV1ResponseMPayload.md)
- [InscriptionGetCommunicationListV1Response](docs/Model/InscriptionGetCommunicationListV1Response.md)
- [InscriptionGetCommunicationListV1ResponseMPayload](docs/Model/InscriptionGetCommunicationListV1ResponseMPayload.md)
- [InscriptionGetCommunicationsendersV1Response](docs/Model/InscriptionGetCommunicationsendersV1Response.md)
- [InscriptionGetCommunicationsendersV1ResponseMPayload](docs/Model/InscriptionGetCommunicationsendersV1ResponseMPayload.md)
- [InscriptionnotauthenticatedGetCommunicationListV1Response](docs/Model/InscriptionnotauthenticatedGetCommunicationListV1Response.md)
- [InscriptionnotauthenticatedGetCommunicationListV1ResponseMPayload](docs/Model/InscriptionnotauthenticatedGetCommunicationListV1ResponseMPayload.md)
- [InscriptiontempGetCommunicationListV1Response](docs/Model/InscriptiontempGetCommunicationListV1Response.md)
- [InscriptiontempGetCommunicationListV1ResponseMPayload](docs/Model/InscriptiontempGetCommunicationListV1ResponseMPayload.md)
- [InvoiceGetAttachmentsV1Response](docs/Model/InvoiceGetAttachmentsV1Response.md)
- [InvoiceGetAttachmentsV1ResponseMPayload](docs/Model/InvoiceGetAttachmentsV1ResponseMPayload.md)
- [InvoiceGetCommunicationListV1Response](docs/Model/InvoiceGetCommunicationListV1Response.md)
- [InvoiceGetCommunicationListV1ResponseMPayload](docs/Model/InvoiceGetCommunicationListV1ResponseMPayload.md)
- [LanguageAutocompleteElementResponse](docs/Model/LanguageAutocompleteElementResponse.md)
- [LanguageGetAutocompleteV2Response](docs/Model/LanguageGetAutocompleteV2Response.md)
- [LanguageGetAutocompleteV2ResponseMPayload](docs/Model/LanguageGetAutocompleteV2ResponseMPayload.md)
- [ModuleResponse](docs/Model/ModuleResponse.md)
- [ModuleResponseCompound](docs/Model/ModuleResponseCompound.md)
- [ModulegroupGetAllV1Response](docs/Model/ModulegroupGetAllV1Response.md)
- [ModulegroupGetAllV1ResponseMPayload](docs/Model/ModulegroupGetAllV1ResponseMPayload.md)
- [ModulegroupResponse](docs/Model/ModulegroupResponse.md)
- [ModulegroupResponseCompound](docs/Model/ModulegroupResponseCompound.md)
- [ModulesectionResponse](docs/Model/ModulesectionResponse.md)
- [ModulesectionResponseCompound](docs/Model/ModulesectionResponseCompound.md)
- [MultilingualApikeyDescription](docs/Model/MultilingualApikeyDescription.md)
- [MultilingualBillingentityinternalDescription](docs/Model/MultilingualBillingentityinternalDescription.md)
- [MultilingualBrandingDescription](docs/Model/MultilingualBrandingDescription.md)
- [MultilingualEzmaxinvoicingsummaryinternalDescription](docs/Model/MultilingualEzmaxinvoicingsummaryinternalDescription.md)
- [MultilingualEzsignfoldertypeName](docs/Model/MultilingualEzsignfoldertypeName.md)
- [MultilingualEzsignsignergroupDescription](docs/Model/MultilingualEzsignsignergroupDescription.md)
- [MultilingualEzsignsigningreasonDescription](docs/Model/MultilingualEzsignsigningreasonDescription.md)
- [MultilingualNotificationsubsectionName](docs/Model/MultilingualNotificationsubsectionName.md)
- [MultilingualNotificationtestName](docs/Model/MultilingualNotificationtestName.md)
- [MultilingualPaymenttermDescription](docs/Model/MultilingualPaymenttermDescription.md)
- [MultilingualSubnetDescription](docs/Model/MultilingualSubnetDescription.md)
- [MultilingualUsergroupName](docs/Model/MultilingualUsergroupName.md)
- [MultilingualVariableexpenseDescription](docs/Model/MultilingualVariableexpenseDescription.md)
- [MultilingualVersionhistoryDetail](docs/Model/MultilingualVersionhistoryDetail.md)
- [NotificationsectionGetNotificationtestsV1Response](docs/Model/NotificationsectionGetNotificationtestsV1Response.md)
- [NotificationsectionGetNotificationtestsV1ResponseMPayload](docs/Model/NotificationsectionGetNotificationtestsV1ResponseMPayload.md)
- [NotificationsubsectionResponse](docs/Model/NotificationsubsectionResponse.md)
- [NotificationtestGetElementsV1Response](docs/Model/NotificationtestGetElementsV1Response.md)
- [NotificationtestGetElementsV1ResponseMPayload](docs/Model/NotificationtestGetElementsV1ResponseMPayload.md)
- [NotificationtestResponse](docs/Model/NotificationtestResponse.md)
- [OtherincomeGetCommunicationListV1Response](docs/Model/OtherincomeGetCommunicationListV1Response.md)
- [OtherincomeGetCommunicationListV1ResponseMPayload](docs/Model/OtherincomeGetCommunicationListV1ResponseMPayload.md)
- [PaymenttermAutocompleteElementResponse](docs/Model/PaymenttermAutocompleteElementResponse.md)
- [PaymenttermCreateObjectV1Request](docs/Model/PaymenttermCreateObjectV1Request.md)
- [PaymenttermCreateObjectV1Response](docs/Model/PaymenttermCreateObjectV1Response.md)
- [PaymenttermCreateObjectV1ResponseMPayload](docs/Model/PaymenttermCreateObjectV1ResponseMPayload.md)
- [PaymenttermEditObjectV1Request](docs/Model/PaymenttermEditObjectV1Request.md)
- [PaymenttermEditObjectV1Response](docs/Model/PaymenttermEditObjectV1Response.md)
- [PaymenttermGetAutocompleteV2Response](docs/Model/PaymenttermGetAutocompleteV2Response.md)
- [PaymenttermGetAutocompleteV2ResponseMPayload](docs/Model/PaymenttermGetAutocompleteV2ResponseMPayload.md)
- [PaymenttermGetListV1Response](docs/Model/PaymenttermGetListV1Response.md)
- [PaymenttermGetListV1ResponseMPayload](docs/Model/PaymenttermGetListV1ResponseMPayload.md)
- [PaymenttermGetObjectV2Response](docs/Model/PaymenttermGetObjectV2Response.md)
- [PaymenttermGetObjectV2ResponseMPayload](docs/Model/PaymenttermGetObjectV2ResponseMPayload.md)
- [PaymenttermListElement](docs/Model/PaymenttermListElement.md)
- [PaymenttermRequest](docs/Model/PaymenttermRequest.md)
- [PaymenttermRequestCompound](docs/Model/PaymenttermRequestCompound.md)
- [PaymenttermResponse](docs/Model/PaymenttermResponse.md)
- [PaymenttermResponseCompound](docs/Model/PaymenttermResponseCompound.md)
- [PeriodAutocompleteElementResponse](docs/Model/PeriodAutocompleteElementResponse.md)
- [PeriodGetAutocompleteV2Response](docs/Model/PeriodGetAutocompleteV2Response.md)
- [PeriodGetAutocompleteV2ResponseMPayload](docs/Model/PeriodGetAutocompleteV2ResponseMPayload.md)
- [PermissionCreateObjectV1Request](docs/Model/PermissionCreateObjectV1Request.md)
- [PermissionCreateObjectV1Response](docs/Model/PermissionCreateObjectV1Response.md)
- [PermissionCreateObjectV1ResponseMPayload](docs/Model/PermissionCreateObjectV1ResponseMPayload.md)
- [PermissionDeleteObjectV1Response](docs/Model/PermissionDeleteObjectV1Response.md)
- [PermissionEditObjectV1Request](docs/Model/PermissionEditObjectV1Request.md)
- [PermissionEditObjectV1Response](docs/Model/PermissionEditObjectV1Response.md)
- [PermissionGetObjectV2Response](docs/Model/PermissionGetObjectV2Response.md)
- [PermissionGetObjectV2ResponseMPayload](docs/Model/PermissionGetObjectV2ResponseMPayload.md)
- [PermissionRequest](docs/Model/PermissionRequest.md)
- [PermissionRequestCompound](docs/Model/PermissionRequestCompound.md)
- [PermissionResponse](docs/Model/PermissionResponse.md)
- [PermissionResponseCompound](docs/Model/PermissionResponseCompound.md)
- [PhoneRequest](docs/Model/PhoneRequest.md)
- [PhoneRequestCompound](docs/Model/PhoneRequestCompound.md)
- [PhoneResponse](docs/Model/PhoneResponse.md)
- [PhoneResponseCompound](docs/Model/PhoneResponseCompound.md)
- [PhonetypeAutocompleteElementResponse](docs/Model/PhonetypeAutocompleteElementResponse.md)
- [PhonetypeGetAutocompleteV2Response](docs/Model/PhonetypeGetAutocompleteV2Response.md)
- [PhonetypeGetAutocompleteV2ResponseMPayload](docs/Model/PhonetypeGetAutocompleteV2ResponseMPayload.md)
- [RejectedoffertopurchaseGetCommunicationListV1Response](docs/Model/RejectedoffertopurchaseGetCommunicationListV1Response.md)
- [RejectedoffertopurchaseGetCommunicationListV1ResponseMPayload](docs/Model/RejectedoffertopurchaseGetCommunicationListV1ResponseMPayload.md)
- [ScimAuthenticationScheme](docs/Model/ScimAuthenticationScheme.md)
- [ScimEmail](docs/Model/ScimEmail.md)
- [ScimGroup](docs/Model/ScimGroup.md)
- [ScimGroupMember](docs/Model/ScimGroupMember.md)
- [ScimServiceProviderConfig](docs/Model/ScimServiceProviderConfig.md)
- [ScimServiceProviderConfigBulk](docs/Model/ScimServiceProviderConfigBulk.md)
- [ScimServiceProviderConfigChangePassword](docs/Model/ScimServiceProviderConfigChangePassword.md)
- [ScimServiceProviderConfigEtag](docs/Model/ScimServiceProviderConfigEtag.md)
- [ScimServiceProviderConfigFilter](docs/Model/ScimServiceProviderConfigFilter.md)
- [ScimServiceProviderConfigPatch](docs/Model/ScimServiceProviderConfigPatch.md)
- [ScimServiceProviderConfigSort](docs/Model/ScimServiceProviderConfigSort.md)
- [ScimUser](docs/Model/ScimUser.md)
- [ScimUserList](docs/Model/ScimUserList.md)
- [SecretquestionAutocompleteElementResponse](docs/Model/SecretquestionAutocompleteElementResponse.md)
- [SecretquestionGetAutocompleteV2Response](docs/Model/SecretquestionGetAutocompleteV2Response.md)
- [SecretquestionGetAutocompleteV2ResponseMPayload](docs/Model/SecretquestionGetAutocompleteV2ResponseMPayload.md)
- [SessionhistoryGetListV1Response](docs/Model/SessionhistoryGetListV1Response.md)
- [SessionhistoryGetListV1ResponseMPayload](docs/Model/SessionhistoryGetListV1ResponseMPayload.md)
- [SessionhistoryListElement](docs/Model/SessionhistoryListElement.md)
- [SignatureCreateObjectV1Request](docs/Model/SignatureCreateObjectV1Request.md)
- [SignatureCreateObjectV1Response](docs/Model/SignatureCreateObjectV1Response.md)
- [SignatureCreateObjectV1ResponseMPayload](docs/Model/SignatureCreateObjectV1ResponseMPayload.md)
- [SignatureDeleteObjectV1Response](docs/Model/SignatureDeleteObjectV1Response.md)
- [SignatureEditObjectV1Request](docs/Model/SignatureEditObjectV1Request.md)
- [SignatureEditObjectV1Response](docs/Model/SignatureEditObjectV1Response.md)
- [SignatureGetObjectV2Response](docs/Model/SignatureGetObjectV2Response.md)
- [SignatureGetObjectV2ResponseMPayload](docs/Model/SignatureGetObjectV2ResponseMPayload.md)
- [SignatureRequest](docs/Model/SignatureRequest.md)
- [SignatureRequestCompound](docs/Model/SignatureRequestCompound.md)
- [SignatureResponse](docs/Model/SignatureResponse.md)
- [SignatureResponseCompound](docs/Model/SignatureResponseCompound.md)
- [SubnetCreateObjectV1Request](docs/Model/SubnetCreateObjectV1Request.md)
- [SubnetCreateObjectV1Response](docs/Model/SubnetCreateObjectV1Response.md)
- [SubnetCreateObjectV1ResponseMPayload](docs/Model/SubnetCreateObjectV1ResponseMPayload.md)
- [SubnetDeleteObjectV1Response](docs/Model/SubnetDeleteObjectV1Response.md)
- [SubnetEditObjectV1Request](docs/Model/SubnetEditObjectV1Request.md)
- [SubnetEditObjectV1Response](docs/Model/SubnetEditObjectV1Response.md)
- [SubnetGetObjectV2Response](docs/Model/SubnetGetObjectV2Response.md)
- [SubnetGetObjectV2ResponseMPayload](docs/Model/SubnetGetObjectV2ResponseMPayload.md)
- [SubnetRequest](docs/Model/SubnetRequest.md)
- [SubnetRequestCompound](docs/Model/SubnetRequestCompound.md)
- [SubnetResponse](docs/Model/SubnetResponse.md)
- [SubnetResponseCompound](docs/Model/SubnetResponseCompound.md)
- [SystemconfigurationEditObjectV1Request](docs/Model/SystemconfigurationEditObjectV1Request.md)
- [SystemconfigurationEditObjectV1Response](docs/Model/SystemconfigurationEditObjectV1Response.md)
- [SystemconfigurationGetObjectV2Response](docs/Model/SystemconfigurationGetObjectV2Response.md)
- [SystemconfigurationGetObjectV2ResponseMPayload](docs/Model/SystemconfigurationGetObjectV2ResponseMPayload.md)
- [SystemconfigurationRequest](docs/Model/SystemconfigurationRequest.md)
- [SystemconfigurationRequestCompound](docs/Model/SystemconfigurationRequestCompound.md)
- [SystemconfigurationResponse](docs/Model/SystemconfigurationResponse.md)
- [SystemconfigurationResponseCompound](docs/Model/SystemconfigurationResponseCompound.md)
- [TaxassignmentAutocompleteElementResponse](docs/Model/TaxassignmentAutocompleteElementResponse.md)
- [TaxassignmentGetAutocompleteV2Response](docs/Model/TaxassignmentGetAutocompleteV2Response.md)
- [TaxassignmentGetAutocompleteV2ResponseMPayload](docs/Model/TaxassignmentGetAutocompleteV2ResponseMPayload.md)
- [TextstylestaticResponse](docs/Model/TextstylestaticResponse.md)
- [TextstylestaticResponseCompound](docs/Model/TextstylestaticResponseCompound.md)
- [TimezoneAutocompleteElementResponse](docs/Model/TimezoneAutocompleteElementResponse.md)
- [TimezoneGetAutocompleteV2Response](docs/Model/TimezoneGetAutocompleteV2Response.md)
- [TimezoneGetAutocompleteV2ResponseMPayload](docs/Model/TimezoneGetAutocompleteV2ResponseMPayload.md)
- [UserAutocompleteElementResponse](docs/Model/UserAutocompleteElementResponse.md)
- [UserCreateEzsignuserV1Request](docs/Model/UserCreateEzsignuserV1Request.md)
- [UserCreateEzsignuserV1Response](docs/Model/UserCreateEzsignuserV1Response.md)
- [UserCreateEzsignuserV1ResponseMPayload](docs/Model/UserCreateEzsignuserV1ResponseMPayload.md)
- [UserCreateObjectV1Request](docs/Model/UserCreateObjectV1Request.md)
- [UserCreateObjectV1Response](docs/Model/UserCreateObjectV1Response.md)
- [UserCreateObjectV1ResponseMPayload](docs/Model/UserCreateObjectV1ResponseMPayload.md)
- [UserEditObjectV1Request](docs/Model/UserEditObjectV1Request.md)
- [UserEditObjectV1Response](docs/Model/UserEditObjectV1Response.md)
- [UserEditPermissionsV1Request](docs/Model/UserEditPermissionsV1Request.md)
- [UserEditPermissionsV1Response](docs/Model/UserEditPermissionsV1Response.md)
- [UserEditPermissionsV1ResponseMPayload](docs/Model/UserEditPermissionsV1ResponseMPayload.md)
- [UserGetApikeysV1Response](docs/Model/UserGetApikeysV1Response.md)
- [UserGetApikeysV1ResponseMPayload](docs/Model/UserGetApikeysV1ResponseMPayload.md)
- [UserGetAutocompleteV2Response](docs/Model/UserGetAutocompleteV2Response.md)
- [UserGetAutocompleteV2ResponseMPayload](docs/Model/UserGetAutocompleteV2ResponseMPayload.md)
- [UserGetEffectivePermissionsV1Response](docs/Model/UserGetEffectivePermissionsV1Response.md)
- [UserGetEffectivePermissionsV1ResponseMPayload](docs/Model/UserGetEffectivePermissionsV1ResponseMPayload.md)
- [UserGetListV1Response](docs/Model/UserGetListV1Response.md)
- [UserGetListV1ResponseMPayload](docs/Model/UserGetListV1ResponseMPayload.md)
- [UserGetObjectV2Response](docs/Model/UserGetObjectV2Response.md)
- [UserGetObjectV2ResponseMPayload](docs/Model/UserGetObjectV2ResponseMPayload.md)
- [UserGetPermissionsV1Response](docs/Model/UserGetPermissionsV1Response.md)
- [UserGetPermissionsV1ResponseMPayload](docs/Model/UserGetPermissionsV1ResponseMPayload.md)
- [UserGetSubnetsV1Response](docs/Model/UserGetSubnetsV1Response.md)
- [UserGetSubnetsV1ResponseMPayload](docs/Model/UserGetSubnetsV1ResponseMPayload.md)
- [UserListElement](docs/Model/UserListElement.md)
- [UserRequest](docs/Model/UserRequest.md)
- [UserRequestCompound](docs/Model/UserRequestCompound.md)
- [UserResponse](docs/Model/UserResponse.md)
- [UserResponseCompound](docs/Model/UserResponseCompound.md)
- [UserSendPasswordResetV1Response](docs/Model/UserSendPasswordResetV1Response.md)
- [UsergroupAutocompleteElementResponse](docs/Model/UsergroupAutocompleteElementResponse.md)
- [UsergroupCreateObjectV1Request](docs/Model/UsergroupCreateObjectV1Request.md)
- [UsergroupCreateObjectV1Response](docs/Model/UsergroupCreateObjectV1Response.md)
- [UsergroupCreateObjectV1ResponseMPayload](docs/Model/UsergroupCreateObjectV1ResponseMPayload.md)
- [UsergroupEditObjectV1Request](docs/Model/UsergroupEditObjectV1Request.md)
- [UsergroupEditObjectV1Response](docs/Model/UsergroupEditObjectV1Response.md)
- [UsergroupEditPermissionsV1Request](docs/Model/UsergroupEditPermissionsV1Request.md)
- [UsergroupEditPermissionsV1Response](docs/Model/UsergroupEditPermissionsV1Response.md)
- [UsergroupEditPermissionsV1ResponseMPayload](docs/Model/UsergroupEditPermissionsV1ResponseMPayload.md)
- [UsergroupEditUsergroupdelegationsV1Request](docs/Model/UsergroupEditUsergroupdelegationsV1Request.md)
- [UsergroupEditUsergroupdelegationsV1Response](docs/Model/UsergroupEditUsergroupdelegationsV1Response.md)
- [UsergroupEditUsergroupdelegationsV1ResponseMPayload](docs/Model/UsergroupEditUsergroupdelegationsV1ResponseMPayload.md)
- [UsergroupEditUsergroupmembershipsV1Request](docs/Model/UsergroupEditUsergroupmembershipsV1Request.md)
- [UsergroupEditUsergroupmembershipsV1Response](docs/Model/UsergroupEditUsergroupmembershipsV1Response.md)
- [UsergroupEditUsergroupmembershipsV1ResponseMPayload](docs/Model/UsergroupEditUsergroupmembershipsV1ResponseMPayload.md)
- [UsergroupGetAutocompleteV2Response](docs/Model/UsergroupGetAutocompleteV2Response.md)
- [UsergroupGetAutocompleteV2ResponseMPayload](docs/Model/UsergroupGetAutocompleteV2ResponseMPayload.md)
- [UsergroupGetListV1Response](docs/Model/UsergroupGetListV1Response.md)
- [UsergroupGetListV1ResponseMPayload](docs/Model/UsergroupGetListV1ResponseMPayload.md)
- [UsergroupGetObjectV2Response](docs/Model/UsergroupGetObjectV2Response.md)
- [UsergroupGetObjectV2ResponseMPayload](docs/Model/UsergroupGetObjectV2ResponseMPayload.md)
- [UsergroupGetPermissionsV1Response](docs/Model/UsergroupGetPermissionsV1Response.md)
- [UsergroupGetPermissionsV1ResponseMPayload](docs/Model/UsergroupGetPermissionsV1ResponseMPayload.md)
- [UsergroupGetUsergroupdelegationsV1Response](docs/Model/UsergroupGetUsergroupdelegationsV1Response.md)
- [UsergroupGetUsergroupdelegationsV1ResponseMPayload](docs/Model/UsergroupGetUsergroupdelegationsV1ResponseMPayload.md)
- [UsergroupGetUsergroupmembershipsV1Response](docs/Model/UsergroupGetUsergroupmembershipsV1Response.md)
- [UsergroupGetUsergroupmembershipsV1ResponseMPayload](docs/Model/UsergroupGetUsergroupmembershipsV1ResponseMPayload.md)
- [UsergroupListElement](docs/Model/UsergroupListElement.md)
- [UsergroupRequest](docs/Model/UsergroupRequest.md)
- [UsergroupRequestCompound](docs/Model/UsergroupRequestCompound.md)
- [UsergroupResponse](docs/Model/UsergroupResponse.md)
- [UsergroupResponseCompound](docs/Model/UsergroupResponseCompound.md)
- [UsergroupdelegationCreateObjectV1Request](docs/Model/UsergroupdelegationCreateObjectV1Request.md)
- [UsergroupdelegationCreateObjectV1Response](docs/Model/UsergroupdelegationCreateObjectV1Response.md)
- [UsergroupdelegationCreateObjectV1ResponseMPayload](docs/Model/UsergroupdelegationCreateObjectV1ResponseMPayload.md)
- [UsergroupdelegationDeleteObjectV1Response](docs/Model/UsergroupdelegationDeleteObjectV1Response.md)
- [UsergroupdelegationEditObjectV1Request](docs/Model/UsergroupdelegationEditObjectV1Request.md)
- [UsergroupdelegationEditObjectV1Response](docs/Model/UsergroupdelegationEditObjectV1Response.md)
- [UsergroupdelegationGetObjectV2Response](docs/Model/UsergroupdelegationGetObjectV2Response.md)
- [UsergroupdelegationGetObjectV2ResponseMPayload](docs/Model/UsergroupdelegationGetObjectV2ResponseMPayload.md)
- [UsergroupdelegationRequest](docs/Model/UsergroupdelegationRequest.md)
- [UsergroupdelegationRequestCompound](docs/Model/UsergroupdelegationRequestCompound.md)
- [UsergroupdelegationResponse](docs/Model/UsergroupdelegationResponse.md)
- [UsergroupdelegationResponseCompound](docs/Model/UsergroupdelegationResponseCompound.md)
- [UsergroupmembershipCreateObjectV1Request](docs/Model/UsergroupmembershipCreateObjectV1Request.md)
- [UsergroupmembershipCreateObjectV1Response](docs/Model/UsergroupmembershipCreateObjectV1Response.md)
- [UsergroupmembershipCreateObjectV1ResponseMPayload](docs/Model/UsergroupmembershipCreateObjectV1ResponseMPayload.md)
- [UsergroupmembershipDeleteObjectV1Response](docs/Model/UsergroupmembershipDeleteObjectV1Response.md)
- [UsergroupmembershipEditObjectV1Request](docs/Model/UsergroupmembershipEditObjectV1Request.md)
- [UsergroupmembershipEditObjectV1Response](docs/Model/UsergroupmembershipEditObjectV1Response.md)
- [UsergroupmembershipGetObjectV2Response](docs/Model/UsergroupmembershipGetObjectV2Response.md)
- [UsergroupmembershipGetObjectV2ResponseMPayload](docs/Model/UsergroupmembershipGetObjectV2ResponseMPayload.md)
- [UsergroupmembershipRequest](docs/Model/UsergroupmembershipRequest.md)
- [UsergroupmembershipRequestCompound](docs/Model/UsergroupmembershipRequestCompound.md)
- [UsergroupmembershipResponse](docs/Model/UsergroupmembershipResponse.md)
- [UsergroupmembershipResponseCompound](docs/Model/UsergroupmembershipResponseCompound.md)
- [UserlogintypeAutocompleteElementResponse](docs/Model/UserlogintypeAutocompleteElementResponse.md)
- [UserlogintypeGetAutocompleteV2Response](docs/Model/UserlogintypeGetAutocompleteV2Response.md)
- [UserlogintypeGetAutocompleteV2ResponseMPayload](docs/Model/UserlogintypeGetAutocompleteV2ResponseMPayload.md)
- [UserstagedCreateUserV1Response](docs/Model/UserstagedCreateUserV1Response.md)
- [UserstagedCreateUserV1ResponseMPayload](docs/Model/UserstagedCreateUserV1ResponseMPayload.md)
- [UserstagedDeleteObjectV1Response](docs/Model/UserstagedDeleteObjectV1Response.md)
- [UserstagedGetListV1Response](docs/Model/UserstagedGetListV1Response.md)
- [UserstagedGetListV1ResponseMPayload](docs/Model/UserstagedGetListV1ResponseMPayload.md)
- [UserstagedGetObjectV2Response](docs/Model/UserstagedGetObjectV2Response.md)
- [UserstagedGetObjectV2ResponseMPayload](docs/Model/UserstagedGetObjectV2ResponseMPayload.md)
- [UserstagedListElement](docs/Model/UserstagedListElement.md)
- [UserstagedMapV1Request](docs/Model/UserstagedMapV1Request.md)
- [UserstagedMapV1Response](docs/Model/UserstagedMapV1Response.md)
- [UserstagedResponse](docs/Model/UserstagedResponse.md)
- [UserstagedResponseCompound](docs/Model/UserstagedResponseCompound.md)
- [VariableexpenseAutocompleteElementResponse](docs/Model/VariableexpenseAutocompleteElementResponse.md)
- [VariableexpenseCreateObjectV1Request](docs/Model/VariableexpenseCreateObjectV1Request.md)
- [VariableexpenseCreateObjectV1Response](docs/Model/VariableexpenseCreateObjectV1Response.md)
- [VariableexpenseCreateObjectV1ResponseMPayload](docs/Model/VariableexpenseCreateObjectV1ResponseMPayload.md)
- [VariableexpenseEditObjectV1Request](docs/Model/VariableexpenseEditObjectV1Request.md)
- [VariableexpenseEditObjectV1Response](docs/Model/VariableexpenseEditObjectV1Response.md)
- [VariableexpenseGetAutocompleteV2Response](docs/Model/VariableexpenseGetAutocompleteV2Response.md)
- [VariableexpenseGetAutocompleteV2ResponseMPayload](docs/Model/VariableexpenseGetAutocompleteV2ResponseMPayload.md)
- [VariableexpenseGetListV1Response](docs/Model/VariableexpenseGetListV1Response.md)
- [VariableexpenseGetListV1ResponseMPayload](docs/Model/VariableexpenseGetListV1ResponseMPayload.md)
- [VariableexpenseGetObjectV2Response](docs/Model/VariableexpenseGetObjectV2Response.md)
- [VariableexpenseGetObjectV2ResponseMPayload](docs/Model/VariableexpenseGetObjectV2ResponseMPayload.md)
- [VariableexpenseListElement](docs/Model/VariableexpenseListElement.md)
- [VariableexpenseRequest](docs/Model/VariableexpenseRequest.md)
- [VariableexpenseRequestCompound](docs/Model/VariableexpenseRequestCompound.md)
- [VariableexpenseResponse](docs/Model/VariableexpenseResponse.md)
- [VariableexpenseResponseCompound](docs/Model/VariableexpenseResponseCompound.md)
- [VersionhistoryGetObjectV2Response](docs/Model/VersionhistoryGetObjectV2Response.md)
- [VersionhistoryGetObjectV2ResponseMPayload](docs/Model/VersionhistoryGetObjectV2ResponseMPayload.md)
- [VersionhistoryResponse](docs/Model/VersionhistoryResponse.md)
- [VersionhistoryResponseCompound](docs/Model/VersionhistoryResponseCompound.md)
- [WebhookCreateObjectV1Request](docs/Model/WebhookCreateObjectV1Request.md)
- [WebhookCreateObjectV1Response](docs/Model/WebhookCreateObjectV1Response.md)
- [WebhookCreateObjectV1ResponseMPayload](docs/Model/WebhookCreateObjectV1ResponseMPayload.md)
- [WebhookCreateObjectV2Request](docs/Model/WebhookCreateObjectV2Request.md)
- [WebhookCreateObjectV2Response](docs/Model/WebhookCreateObjectV2Response.md)
- [WebhookCreateObjectV2ResponseMPayload](docs/Model/WebhookCreateObjectV2ResponseMPayload.md)
- [WebhookDeleteObjectV1Response](docs/Model/WebhookDeleteObjectV1Response.md)
- [WebhookEditObjectV1Request](docs/Model/WebhookEditObjectV1Request.md)
- [WebhookEditObjectV1Response](docs/Model/WebhookEditObjectV1Response.md)
- [WebhookEzsignDocumentCompleted](docs/Model/WebhookEzsignDocumentCompleted.md)
- [WebhookEzsignEzsignsignerAcceptclause](docs/Model/WebhookEzsignEzsignsignerAcceptclause.md)
- [WebhookEzsignEzsignsignerConnect](docs/Model/WebhookEzsignEzsignsignerConnect.md)
- [WebhookEzsignFolderCompleted](docs/Model/WebhookEzsignFolderCompleted.md)
- [WebhookGetHistoryV1Response](docs/Model/WebhookGetHistoryV1Response.md)
- [WebhookGetHistoryV1ResponseMPayload](docs/Model/WebhookGetHistoryV1ResponseMPayload.md)
- [WebhookGetListV1Response](docs/Model/WebhookGetListV1Response.md)
- [WebhookGetListV1ResponseMPayload](docs/Model/WebhookGetListV1ResponseMPayload.md)
- [WebhookGetObjectV2Response](docs/Model/WebhookGetObjectV2Response.md)
- [WebhookGetObjectV2ResponseMPayload](docs/Model/WebhookGetObjectV2ResponseMPayload.md)
- [WebhookListElement](docs/Model/WebhookListElement.md)
- [WebhookRegenerateApikeyV1Request](docs/Model/WebhookRegenerateApikeyV1Request.md)
- [WebhookRegenerateApikeyV1Response](docs/Model/WebhookRegenerateApikeyV1Response.md)
- [WebhookRegenerateApikeyV1ResponseMPayload](docs/Model/WebhookRegenerateApikeyV1ResponseMPayload.md)
- [WebhookRequest](docs/Model/WebhookRequest.md)
- [WebhookRequestCompound](docs/Model/WebhookRequestCompound.md)
- [WebhookResponse](docs/Model/WebhookResponse.md)
- [WebhookResponseCompound](docs/Model/WebhookResponseCompound.md)
- [WebhookTestV1Response](docs/Model/WebhookTestV1Response.md)
- [WebhookUserUserCreated](docs/Model/WebhookUserUserCreated.md)
- [WebhookUserstagedUserstagedCreated](docs/Model/WebhookUserstagedUserstagedCreated.md)
- [WebsiteRequest](docs/Model/WebsiteRequest.md)
- [WebsiteRequestCompound](docs/Model/WebsiteRequestCompound.md)
- [WebsocketRequestServerGetWebsocketIDV1](docs/Model/WebsocketRequestServerGetWebsocketIDV1.md)
- [WebsocketResponseErrorV1](docs/Model/WebsocketResponseErrorV1.md)
- [WebsocketResponseErrorV1MPayload](docs/Model/WebsocketResponseErrorV1MPayload.md)
- [WebsocketResponseGetWebsocketIDV1](docs/Model/WebsocketResponseGetWebsocketIDV1.md)
- [WebsocketResponseGetWebsocketIDV1MPayload](docs/Model/WebsocketResponseGetWebsocketIDV1MPayload.md)
- [WebsocketResponseInformationV1](docs/Model/WebsocketResponseInformationV1.md)
- [WebsocketResponseInformationV1MPayload](docs/Model/WebsocketResponseInformationV1MPayload.md)

## Authorization

Authentication schemes defined for the API:
### Authorization

- **Type**: API key
- **API key parameter name**: Authorization
- **Location**: HTTP header


### Bearer

- **Type**: Bearer authentication

### Presigned

- **Type**: API key
- **API key parameter name**: sAuthorization
- **Location**: URL query string


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

- API version: `1.2.0`
    - Package version: `1.2.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
