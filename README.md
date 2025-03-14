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
*ModuleReportApi* | [**reportGetReportFromCacheV1**](docs/Api/ModuleReportApi.md#reportgetreportfromcachev1) | **GET** /1/module/report/getReportFromCache/{sReportgroupCacheID} | Retrieve report from cache
*ModuleUserApi* | [**userCreateEzsignuserV1**](docs/Api/ModuleUserApi.md#usercreateezsignuserv1) | **POST** /1/module/user/createezsignuser | Create a new User of type Ezsignuser
*ObjectActivesessionApi* | [**activesessionGenerateFederationTokenV1**](docs/Api/ObjectActivesessionApi.md#activesessiongeneratefederationtokenv1) | **POST** /1/object/activesession/generateFederationToken | Generate a federation token
*ObjectActivesessionApi* | [**activesessionGetCurrentV1**](docs/Api/ObjectActivesessionApi.md#activesessiongetcurrentv1) | **GET** /1/object/activesession/getCurrent | Get Current Activesession
*ObjectActivesessionApi* | [**activesessionGetCurrentV2**](docs/Api/ObjectActivesessionApi.md#activesessiongetcurrentv2) | **GET** /2/object/activesession/getCurrent | Get Current Activesession
*ObjectActivesessionApi* | [**activesessionGetListV1**](docs/Api/ObjectActivesessionApi.md#activesessiongetlistv1) | **GET** /1/object/activesession/getList | Retrieve Activesession list
*ObjectApikeyApi* | [**apikeyCreateObjectV2**](docs/Api/ObjectApikeyApi.md#apikeycreateobjectv2) | **POST** /2/object/apikey | Create a new Apikey
*ObjectApikeyApi* | [**apikeyEditObjectV1**](docs/Api/ObjectApikeyApi.md#apikeyeditobjectv1) | **PUT** /1/object/apikey/{pkiApikeyID} | Edit an existing Apikey
*ObjectApikeyApi* | [**apikeyEditPermissionsV1**](docs/Api/ObjectApikeyApi.md#apikeyeditpermissionsv1) | **PUT** /1/object/apikey/{pkiApikeyID}/editPermissions | Edit multiple Permissions
*ObjectApikeyApi* | [**apikeyGenerateDelegatedCredentialsV1**](docs/Api/ObjectApikeyApi.md#apikeygeneratedelegatedcredentialsv1) | **POST** /1/object/apikey/generateDelegatedCredentials | Generate a delegated credentials
*ObjectApikeyApi* | [**apikeyGetCorsV1**](docs/Api/ObjectApikeyApi.md#apikeygetcorsv1) | **GET** /1/object/apikey/{pkiApikeyID}/getCors | Retrieve an existing Apikey&#39;s cors
*ObjectApikeyApi* | [**apikeyGetListV1**](docs/Api/ObjectApikeyApi.md#apikeygetlistv1) | **GET** /1/object/apikey/getList | Retrieve Apikey list
*ObjectApikeyApi* | [**apikeyGetObjectV2**](docs/Api/ObjectApikeyApi.md#apikeygetobjectv2) | **GET** /2/object/apikey/{pkiApikeyID} | Retrieve an existing Apikey
*ObjectApikeyApi* | [**apikeyGetPermissionsV1**](docs/Api/ObjectApikeyApi.md#apikeygetpermissionsv1) | **GET** /1/object/apikey/{pkiApikeyID}/getPermissions | Retrieve an existing Apikey&#39;s Permissions
*ObjectApikeyApi* | [**apikeyGetSubnetsV1**](docs/Api/ObjectApikeyApi.md#apikeygetsubnetsv1) | **GET** /1/object/apikey/{pkiApikeyID}/getSubnets | Retrieve an existing Apikey&#39;s subnets
*ObjectApikeyApi* | [**apikeyRegenerateV1**](docs/Api/ObjectApikeyApi.md#apikeyregeneratev1) | **POST** /1/object/apikey/{pkiApikeyID}/regenerate | Regenerate the Apikey
*ObjectAttachmentApi* | [**attachmentDownloadV1**](docs/Api/ObjectAttachmentApi.md#attachmentdownloadv1) | **GET** /1/object/attachment/{pkiAttachmentID}/download | Retrieve the content
*ObjectAttachmentApi* | [**attachmentGetAttachmentlogsV1**](docs/Api/ObjectAttachmentApi.md#attachmentgetattachmentlogsv1) | **GET** /1/object/attachment/{pkiAttachmentID}/getAttachmentlogs | Retrieve the Attachmentlogs
*ObjectAuthenticationexternalApi* | [**authenticationexternalCreateObjectV1**](docs/Api/ObjectAuthenticationexternalApi.md#authenticationexternalcreateobjectv1) | **POST** /1/object/authenticationexternal | Create a new Authenticationexternal
*ObjectAuthenticationexternalApi* | [**authenticationexternalDeleteObjectV1**](docs/Api/ObjectAuthenticationexternalApi.md#authenticationexternaldeleteobjectv1) | **DELETE** /1/object/authenticationexternal/{pkiAuthenticationexternalID} | Delete an existing Authenticationexternal
*ObjectAuthenticationexternalApi* | [**authenticationexternalEditObjectV1**](docs/Api/ObjectAuthenticationexternalApi.md#authenticationexternaleditobjectv1) | **PUT** /1/object/authenticationexternal/{pkiAuthenticationexternalID} | Edit an existing Authenticationexternal
*ObjectAuthenticationexternalApi* | [**authenticationexternalGetAutocompleteV2**](docs/Api/ObjectAuthenticationexternalApi.md#authenticationexternalgetautocompletev2) | **GET** /2/object/authenticationexternal/getAutocomplete/{sSelector} | Retrieve Authenticationexternals and IDs
*ObjectAuthenticationexternalApi* | [**authenticationexternalGetListV1**](docs/Api/ObjectAuthenticationexternalApi.md#authenticationexternalgetlistv1) | **GET** /1/object/authenticationexternal/getList | Retrieve Authenticationexternal list
*ObjectAuthenticationexternalApi* | [**authenticationexternalGetObjectV2**](docs/Api/ObjectAuthenticationexternalApi.md#authenticationexternalgetobjectv2) | **GET** /2/object/authenticationexternal/{pkiAuthenticationexternalID} | Retrieve an existing Authenticationexternal
*ObjectAuthenticationexternalApi* | [**authenticationexternalResetAuthorizationV1**](docs/Api/ObjectAuthenticationexternalApi.md#authenticationexternalresetauthorizationv1) | **POST** /1/object/authenticationexternal/{pkiAuthenticationexternalID}/resetAuthorization | Reset the Authenticationexternal authorization
*ObjectBankaccountApi* | [**bankaccountGetAutocompleteV2**](docs/Api/ObjectBankaccountApi.md#bankaccountgetautocompletev2) | **GET** /2/object/bankaccount/getAutocomplete/{sSelector} | Retrieve Bankaccounts and IDs
*ObjectBillingentityexternalApi* | [**billingentityexternalGenerateFederationTokenV1**](docs/Api/ObjectBillingentityexternalApi.md#billingentityexternalgeneratefederationtokenv1) | **POST** /1/object/billingentityexternal/{pkiBillingentityexternalID}/generateFederationToken | Generate a federation token
*ObjectBillingentityexternalApi* | [**billingentityexternalGetAutocompleteV2**](docs/Api/ObjectBillingentityexternalApi.md#billingentityexternalgetautocompletev2) | **GET** /2/object/billingentityexternal/getAutocomplete/{sSelector} | Retrieve Billingentityexternals and IDs
*ObjectBillingentityinternalApi* | [**billingentityinternalCreateObjectV1**](docs/Api/ObjectBillingentityinternalApi.md#billingentityinternalcreateobjectv1) | **POST** /1/object/billingentityinternal | Create a new Billingentityinternal
*ObjectBillingentityinternalApi* | [**billingentityinternalEditObjectV1**](docs/Api/ObjectBillingentityinternalApi.md#billingentityinternaleditobjectv1) | **PUT** /1/object/billingentityinternal/{pkiBillingentityinternalID} | Edit an existing Billingentityinternal
*ObjectBillingentityinternalApi* | [**billingentityinternalGetAutocompleteV2**](docs/Api/ObjectBillingentityinternalApi.md#billingentityinternalgetautocompletev2) | **GET** /2/object/billingentityinternal/getAutocomplete/{sSelector} | Retrieve Billingentityinternals and IDs
*ObjectBillingentityinternalApi* | [**billingentityinternalGetListV1**](docs/Api/ObjectBillingentityinternalApi.md#billingentityinternalgetlistv1) | **GET** /1/object/billingentityinternal/getList | Retrieve Billingentityinternal list
*ObjectBillingentityinternalApi* | [**billingentityinternalGetObjectV2**](docs/Api/ObjectBillingentityinternalApi.md#billingentityinternalgetobjectv2) | **GET** /2/object/billingentityinternal/{pkiBillingentityinternalID} | Retrieve an existing Billingentityinternal
*ObjectBrandingApi* | [**brandingCreateObjectV2**](docs/Api/ObjectBrandingApi.md#brandingcreateobjectv2) | **POST** /2/object/branding | Create a new Branding
*ObjectBrandingApi* | [**brandingEditObjectV2**](docs/Api/ObjectBrandingApi.md#brandingeditobjectv2) | **PUT** /2/object/branding/{pkiBrandingID} | Edit an existing Branding
*ObjectBrandingApi* | [**brandingGetAutocompleteV2**](docs/Api/ObjectBrandingApi.md#brandinggetautocompletev2) | **GET** /2/object/branding/getAutocomplete/{sSelector} | Retrieve Brandings and IDs
*ObjectBrandingApi* | [**brandingGetListV1**](docs/Api/ObjectBrandingApi.md#brandinggetlistv1) | **GET** /1/object/branding/getList | Retrieve Branding list
*ObjectBrandingApi* | [**brandingGetObjectV3**](docs/Api/ObjectBrandingApi.md#brandinggetobjectv3) | **GET** /3/object/branding/{pkiBrandingID} | Retrieve an existing Branding
*ObjectBuyercontractApi* | [**buyercontractGetCommunicationCountV1**](docs/Api/ObjectBuyercontractApi.md#buyercontractgetcommunicationcountv1) | **GET** /1/object/buyercontract/{pkiBuyercontractID}/getCommunicationCount | Retrieve Communication count
*ObjectBuyercontractApi* | [**buyercontractGetCommunicationListV1**](docs/Api/ObjectBuyercontractApi.md#buyercontractgetcommunicationlistv1) | **GET** /1/object/buyercontract/{pkiBuyercontractID}/getCommunicationList | Retrieve Communication list
*ObjectBuyercontractApi* | [**buyercontractGetCommunicationrecipientsV1**](docs/Api/ObjectBuyercontractApi.md#buyercontractgetcommunicationrecipientsv1) | **GET** /1/object/buyercontract/{pkiBuyercontractID}/getCommunicationrecipients | Retrieve Buyercontract&#39;s Communicationrecipient
*ObjectBuyercontractApi* | [**buyercontractGetCommunicationsendersV1**](docs/Api/ObjectBuyercontractApi.md#buyercontractgetcommunicationsendersv1) | **GET** /1/object/buyercontract/{pkiBuyercontractID}/getCommunicationsenders | Retrieve Buyercontract&#39;s Communicationsender
*ObjectClonehistoryApi* | [**clonehistoryGetListV1**](docs/Api/ObjectClonehistoryApi.md#clonehistorygetlistv1) | **GET** /1/object/clonehistory/getList | Retrieve Clonehistory list
*ObjectCommunicationApi* | [**communicationGetCommunicationBodyV1**](docs/Api/ObjectCommunicationApi.md#communicationgetcommunicationbodyv1) | **GET** /1/object/communication/{pkiCommunicationID}/getCommunicationBody | Retrieve the communication body.
*ObjectCommunicationApi* | [**communicationSendV1**](docs/Api/ObjectCommunicationApi.md#communicationsendv1) | **POST** /1/object/communication/send | Send a new Communication
*ObjectCompanyApi* | [**companyGetAutocompleteV2**](docs/Api/ObjectCompanyApi.md#companygetautocompletev2) | **GET** /2/object/company/getAutocomplete/{sSelector} | Retrieve Companys and IDs
*ObjectContacttitleApi* | [**contacttitleGetAutocompleteV2**](docs/Api/ObjectContacttitleApi.md#contacttitlegetautocompletev2) | **GET** /2/object/contacttitle/getAutocomplete/{sSelector} | Retrieve Contacttitles and IDs
*ObjectCorsApi* | [**corsCreateObjectV1**](docs/Api/ObjectCorsApi.md#corscreateobjectv1) | **POST** /1/object/cors | Create a new Cors
*ObjectCorsApi* | [**corsDeleteObjectV1**](docs/Api/ObjectCorsApi.md#corsdeleteobjectv1) | **DELETE** /1/object/cors/{pkiCorsID} | Delete an existing Cors
*ObjectCorsApi* | [**corsEditObjectV1**](docs/Api/ObjectCorsApi.md#corseditobjectv1) | **PUT** /1/object/cors/{pkiCorsID} | Edit an existing Cors
*ObjectCorsApi* | [**corsGetObjectV2**](docs/Api/ObjectCorsApi.md#corsgetobjectv2) | **GET** /2/object/cors/{pkiCorsID} | Retrieve an existing Cors
*ObjectCountryApi* | [**countryGetAutocompleteV2**](docs/Api/ObjectCountryApi.md#countrygetautocompletev2) | **GET** /2/object/country/getAutocomplete/{sSelector} | Retrieve Countries and IDs
*ObjectCreditcardclientApi* | [**creditcardclientCreateObjectV1**](docs/Api/ObjectCreditcardclientApi.md#creditcardclientcreateobjectv1) | **POST** /1/object/creditcardclient | Create a new Creditcardclient
*ObjectCreditcardclientApi* | [**creditcardclientDeleteObjectV1**](docs/Api/ObjectCreditcardclientApi.md#creditcardclientdeleteobjectv1) | **DELETE** /1/object/creditcardclient/{pkiCreditcardclientID} | Delete an existing Creditcardclient
*ObjectCreditcardclientApi* | [**creditcardclientEditObjectV1**](docs/Api/ObjectCreditcardclientApi.md#creditcardclienteditobjectv1) | **PUT** /1/object/creditcardclient/{pkiCreditcardclientID} | Edit an existing Creditcardclient
*ObjectCreditcardclientApi* | [**creditcardclientGetAutocompleteV2**](docs/Api/ObjectCreditcardclientApi.md#creditcardclientgetautocompletev2) | **GET** /2/object/creditcardclient/getAutocomplete/{sSelector} | Retrieve Creditcardclients and IDs
*ObjectCreditcardclientApi* | [**creditcardclientGetListV1**](docs/Api/ObjectCreditcardclientApi.md#creditcardclientgetlistv1) | **GET** /1/object/creditcardclient/getList | Retrieve Creditcardclient list
*ObjectCreditcardclientApi* | [**creditcardclientGetObjectV2**](docs/Api/ObjectCreditcardclientApi.md#creditcardclientgetobjectv2) | **GET** /2/object/creditcardclient/{pkiCreditcardclientID} | Retrieve an existing Creditcardclient
*ObjectCreditcardclientApi* | [**creditcardclientPatchObjectV1**](docs/Api/ObjectCreditcardclientApi.md#creditcardclientpatchobjectv1) | **PATCH** /1/object/creditcardclient/{pkiCreditcardclientID} | Patch an existing Creditcardclient
*ObjectCreditcardmerchantApi* | [**creditcardmerchantGetAutocompleteV2**](docs/Api/ObjectCreditcardmerchantApi.md#creditcardmerchantgetautocompletev2) | **GET** /2/object/creditcardmerchant/getAutocomplete/{sSelector} | Retrieve Creditcardmerchants and IDs
*ObjectCreditcardmerchantApi* | [**creditcardmerchantGetListV1**](docs/Api/ObjectCreditcardmerchantApi.md#creditcardmerchantgetlistv1) | **GET** /1/object/creditcardmerchant/getList | Retrieve Creditcardmerchant list
*ObjectCreditcardmerchantApi* | [**creditcardmerchantGetObjectV2**](docs/Api/ObjectCreditcardmerchantApi.md#creditcardmerchantgetobjectv2) | **GET** /2/object/creditcardmerchant/{pkiCreditcardmerchantID} | Retrieve an existing Creditcardmerchant
*ObjectCreditcardtypeApi* | [**creditcardtypeGetAutocompleteV2**](docs/Api/ObjectCreditcardtypeApi.md#creditcardtypegetautocompletev2) | **GET** /2/object/creditcardtype/getAutocomplete/{sSelector} | Retrieve Creditcardtypes and IDs
*ObjectCurrencyApi* | [**currencyGetAutocompleteV2**](docs/Api/ObjectCurrencyApi.md#currencygetautocompletev2) | **GET** /2/object/currency/getAutocomplete/{sSelector} | Retrieve Currencies and IDs
*ObjectCustomerApi* | [**customerCreateObjectV1**](docs/Api/ObjectCustomerApi.md#customercreateobjectv1) | **POST** /1/object/customer | Create a new Customer
*ObjectCustomerApi* | [**customerGetAutocompleteV2**](docs/Api/ObjectCustomerApi.md#customergetautocompletev2) | **GET** /2/object/customer/getAutocomplete/{sSelector} | Retrieve Customers and IDs
*ObjectCustomerApi* | [**customerGetObjectV2**](docs/Api/ObjectCustomerApi.md#customergetobjectv2) | **GET** /2/object/customer/{pkiCustomerID} | Retrieve an existing Customer
*ObjectDepartmentApi* | [**departmentGetAutocompleteV2**](docs/Api/ObjectDepartmentApi.md#departmentgetautocompletev2) | **GET** /2/object/department/getAutocomplete/{sSelector} | Retrieve Departments and IDs
*ObjectDiscussionApi* | [**discussionCreateObjectV1**](docs/Api/ObjectDiscussionApi.md#discussioncreateobjectv1) | **POST** /1/object/discussion | Create a new Discussion
*ObjectDiscussionApi* | [**discussionDeleteObjectV1**](docs/Api/ObjectDiscussionApi.md#discussiondeleteobjectv1) | **DELETE** /1/object/discussion/{pkiDiscussionID} | Delete an existing Discussion
*ObjectDiscussionApi* | [**discussionGetObjectV2**](docs/Api/ObjectDiscussionApi.md#discussiongetobjectv2) | **GET** /2/object/discussion/{pkiDiscussionID} | Retrieve an existing Discussion
*ObjectDiscussionApi* | [**discussionPatchObjectV1**](docs/Api/ObjectDiscussionApi.md#discussionpatchobjectv1) | **PATCH** /1/object/discussion/{pkiDiscussionID} | Patch an existing Discussion
*ObjectDiscussionApi* | [**discussionUpdateDiscussionreadstatusV1**](docs/Api/ObjectDiscussionApi.md#discussionupdatediscussionreadstatusv1) | **POST** /1/object/discussion/{pkiDiscussionID}/updateDiscussionreadstatus | Update the read status of the discussion
*ObjectDiscussionmembershipApi* | [**discussionmembershipCreateObjectV1**](docs/Api/ObjectDiscussionmembershipApi.md#discussionmembershipcreateobjectv1) | **POST** /1/object/discussionmembership | Create a new Discussionmembership
*ObjectDiscussionmembershipApi* | [**discussionmembershipDeleteObjectV1**](docs/Api/ObjectDiscussionmembershipApi.md#discussionmembershipdeleteobjectv1) | **DELETE** /1/object/discussionmembership/{pkiDiscussionmembershipID} | Delete an existing Discussionmembership
*ObjectDiscussionmessageApi* | [**discussionmessageCreateObjectV1**](docs/Api/ObjectDiscussionmessageApi.md#discussionmessagecreateobjectv1) | **POST** /1/object/discussionmessage | Create a new Discussionmessage
*ObjectDiscussionmessageApi* | [**discussionmessageDeleteObjectV1**](docs/Api/ObjectDiscussionmessageApi.md#discussionmessagedeleteobjectv1) | **DELETE** /1/object/discussionmessage/{pkiDiscussionmessageID} | Delete an existing Discussionmessage
*ObjectDiscussionmessageApi* | [**discussionmessagePatchObjectV1**](docs/Api/ObjectDiscussionmessageApi.md#discussionmessagepatchobjectv1) | **PATCH** /1/object/discussionmessage/{pkiDiscussionmessageID} | Patch an existing Discussionmessage
*ObjectDomainApi* | [**domainCreateObjectV1**](docs/Api/ObjectDomainApi.md#domaincreateobjectv1) | **POST** /1/object/domain | Create a new Domain
*ObjectDomainApi* | [**domainDeleteObjectV1**](docs/Api/ObjectDomainApi.md#domaindeleteobjectv1) | **DELETE** /1/object/domain/{pkiDomainID} | Delete an existing Domain
*ObjectDomainApi* | [**domainGetListV1**](docs/Api/ObjectDomainApi.md#domaingetlistv1) | **GET** /1/object/domain/getList | Retrieve Domain list
*ObjectDomainApi* | [**domainGetObjectV2**](docs/Api/ObjectDomainApi.md#domaingetobjectv2) | **GET** /2/object/domain/{pkiDomainID} | Retrieve an existing Domain
*ObjectElectronicfundstransferApi* | [**electronicfundstransferGetCommunicationCountV1**](docs/Api/ObjectElectronicfundstransferApi.md#electronicfundstransfergetcommunicationcountv1) | **GET** /1/object/electronicfundstransfer/{pkiElectronicfundstransferID}/getCommunicationCount | Retrieve Communication count
*ObjectElectronicfundstransferApi* | [**electronicfundstransferGetCommunicationListV1**](docs/Api/ObjectElectronicfundstransferApi.md#electronicfundstransfergetcommunicationlistv1) | **GET** /1/object/electronicfundstransfer/{pkiElectronicfundstransferID}/getCommunicationList | Retrieve Communication list
*ObjectElectronicfundstransferApi* | [**electronicfundstransferGetCommunicationrecipientsV1**](docs/Api/ObjectElectronicfundstransferApi.md#electronicfundstransfergetcommunicationrecipientsv1) | **GET** /1/object/electronicfundstransfer/{pkiElectronicfundstransferID}/getCommunicationrecipients | Retrieve Electronicfundstransfer&#39;s Communicationrecipient
*ObjectElectronicfundstransferApi* | [**electronicfundstransferGetCommunicationsendersV1**](docs/Api/ObjectElectronicfundstransferApi.md#electronicfundstransfergetcommunicationsendersv1) | **GET** /1/object/electronicfundstransfer/{pkiElectronicfundstransferID}/getCommunicationsenders | Retrieve Electronicfundstransfer&#39;s Communicationsender
*ObjectEmailtypeApi* | [**emailtypeGetAutocompleteV2**](docs/Api/ObjectEmailtypeApi.md#emailtypegetautocompletev2) | **GET** /2/object/emailtype/getAutocomplete/{sSelector} | Retrieve Emailtypes and IDs
*ObjectEzdoctemplatedocumentApi* | [**ezdoctemplatedocumentCreateObjectV1**](docs/Api/ObjectEzdoctemplatedocumentApi.md#ezdoctemplatedocumentcreateobjectv1) | **POST** /1/object/ezdoctemplatedocument | Create a new Ezdoctemplatedocument
*ObjectEzdoctemplatedocumentApi* | [**ezdoctemplatedocumentDownloadV1**](docs/Api/ObjectEzdoctemplatedocumentApi.md#ezdoctemplatedocumentdownloadv1) | **GET** /1/object/ezdoctemplatedocument/{pkiEzdoctemplatedocumentID}/download | Retrieve the content
*ObjectEzdoctemplatedocumentApi* | [**ezdoctemplatedocumentEditObjectV1**](docs/Api/ObjectEzdoctemplatedocumentApi.md#ezdoctemplatedocumenteditobjectv1) | **PUT** /1/object/ezdoctemplatedocument/{pkiEzdoctemplatedocumentID} | Edit an existing Ezdoctemplatedocument
*ObjectEzdoctemplatedocumentApi* | [**ezdoctemplatedocumentGetAutocompleteV2**](docs/Api/ObjectEzdoctemplatedocumentApi.md#ezdoctemplatedocumentgetautocompletev2) | **GET** /2/object/ezdoctemplatedocument/getAutocomplete/{sSelector} | Retrieve Ezdoctemplatedocuments and IDs
*ObjectEzdoctemplatedocumentApi* | [**ezdoctemplatedocumentGetListV1**](docs/Api/ObjectEzdoctemplatedocumentApi.md#ezdoctemplatedocumentgetlistv1) | **GET** /1/object/ezdoctemplatedocument/getList | Retrieve Ezdoctemplatedocument list
*ObjectEzdoctemplatedocumentApi* | [**ezdoctemplatedocumentGetObjectV2**](docs/Api/ObjectEzdoctemplatedocumentApi.md#ezdoctemplatedocumentgetobjectv2) | **GET** /2/object/ezdoctemplatedocument/{pkiEzdoctemplatedocumentID} | Retrieve an existing Ezdoctemplatedocument
*ObjectEzdoctemplatedocumentApi* | [**ezdoctemplatedocumentPatchObjectV1**](docs/Api/ObjectEzdoctemplatedocumentApi.md#ezdoctemplatedocumentpatchobjectv1) | **PATCH** /1/object/ezdoctemplatedocument/{pkiEzdoctemplatedocumentID} | Patch an existing Ezdoctemplatedocument
*ObjectEzdoctemplatefieldtypecategoryApi* | [**ezdoctemplatefieldtypecategoryGetAutocompleteV2**](docs/Api/ObjectEzdoctemplatefieldtypecategoryApi.md#ezdoctemplatefieldtypecategorygetautocompletev2) | **GET** /2/object/ezdoctemplatefieldtypecategory/getAutocomplete/{sSelector} | Retrieve Ezdoctemplatefieldtypecategorys and IDs
*ObjectEzdoctemplatetypeApi* | [**ezdoctemplatetypeGetAutocompleteV2**](docs/Api/ObjectEzdoctemplatetypeApi.md#ezdoctemplatetypegetautocompletev2) | **GET** /2/object/ezdoctemplatetype/getAutocomplete/{sSelector} | Retrieve Ezdoctemplatetypes and IDs
*ObjectEzmaxinvoicingApi* | [**ezmaxinvoicingGetAutocompleteV2**](docs/Api/ObjectEzmaxinvoicingApi.md#ezmaxinvoicinggetautocompletev2) | **GET** /2/object/ezmaxinvoicing/getAutocomplete/{sSelector} | Retrieve Ezmaxinvoicings and IDs
*ObjectEzmaxinvoicingApi* | [**ezmaxinvoicingGetObjectV2**](docs/Api/ObjectEzmaxinvoicingApi.md#ezmaxinvoicinggetobjectv2) | **GET** /2/object/ezmaxinvoicing/{pkiEzmaxinvoicingID} | Retrieve an existing Ezmaxinvoicing
*ObjectEzmaxinvoicingApi* | [**ezmaxinvoicingGetProvisionalV1**](docs/Api/ObjectEzmaxinvoicingApi.md#ezmaxinvoicinggetprovisionalv1) | **GET** /1/object/ezmaxinvoicing/getProvisional | Retrieve provisional Ezmaxinvoicing
*ObjectEzmaxproductApi* | [**ezmaxproductGetAutocompleteV2**](docs/Api/ObjectEzmaxproductApi.md#ezmaxproductgetautocompletev2) | **GET** /2/object/ezmaxproduct/getAutocomplete/{sSelector} | Retrieve Ezmaxproducts and IDs
*ObjectEzsignannotationApi* | [**ezsignannotationCreateObjectV1**](docs/Api/ObjectEzsignannotationApi.md#ezsignannotationcreateobjectv1) | **POST** /1/object/ezsignannotation | Create a new Ezsignannotation
*ObjectEzsignannotationApi* | [**ezsignannotationDeleteObjectV1**](docs/Api/ObjectEzsignannotationApi.md#ezsignannotationdeleteobjectv1) | **DELETE** /1/object/ezsignannotation/{pkiEzsignannotationID} | Delete an existing Ezsignannotation
*ObjectEzsignannotationApi* | [**ezsignannotationEditObjectV1**](docs/Api/ObjectEzsignannotationApi.md#ezsignannotationeditobjectv1) | **PUT** /1/object/ezsignannotation/{pkiEzsignannotationID} | Edit an existing Ezsignannotation
*ObjectEzsignannotationApi* | [**ezsignannotationGetObjectV2**](docs/Api/ObjectEzsignannotationApi.md#ezsignannotationgetobjectv2) | **GET** /2/object/ezsignannotation/{pkiEzsignannotationID} | Retrieve an existing Ezsignannotation
*ObjectEzsignbulksendApi* | [**ezsignbulksendCreateEzsignbulksendtransmissionV2**](docs/Api/ObjectEzsignbulksendApi.md#ezsignbulksendcreateezsignbulksendtransmissionv2) | **POST** /2/object/ezsignbulksend/{pkiEzsignbulksendID}/createEzsignbulksendtransmission | Create a new Ezsignbulksendtransmission in the Ezsignbulksend
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
*ObjectEzsigndiscussionApi* | [**ezsigndiscussionCreateObjectV1**](docs/Api/ObjectEzsigndiscussionApi.md#ezsigndiscussioncreateobjectv1) | **POST** /1/object/ezsigndiscussion | Create a new Ezsigndiscussion
*ObjectEzsigndiscussionApi* | [**ezsigndiscussionDeleteObjectV1**](docs/Api/ObjectEzsigndiscussionApi.md#ezsigndiscussiondeleteobjectv1) | **DELETE** /1/object/ezsigndiscussion/{pkiEzsigndiscussionID} | Delete an existing Ezsigndiscussion
*ObjectEzsigndiscussionApi* | [**ezsigndiscussionGetObjectV2**](docs/Api/ObjectEzsigndiscussionApi.md#ezsigndiscussiongetobjectv2) | **GET** /2/object/ezsigndiscussion/{pkiEzsigndiscussionID} | Retrieve an existing Ezsigndiscussion
*ObjectEzsigndocumentApi* | [**ezsigndocumentApplyEzsigntemplateV1**](docs/Api/ObjectEzsigndocumentApi.md#ezsigndocumentapplyezsigntemplatev1) | **POST** /1/object/ezsigndocument/{pkiEzsigndocumentID}/applyezsigntemplate | Apply an Ezsigntemplate to the Ezsigndocument.
*ObjectEzsigndocumentApi* | [**ezsigndocumentApplyEzsigntemplateV2**](docs/Api/ObjectEzsigndocumentApi.md#ezsigndocumentapplyezsigntemplatev2) | **POST** /2/object/ezsigndocument/{pkiEzsigndocumentID}/applyEzsigntemplate | Apply an Ezsigntemplate to the Ezsigndocument.
*ObjectEzsigndocumentApi* | [**ezsigndocumentApplyEzsigntemplateglobalV1**](docs/Api/ObjectEzsigndocumentApi.md#ezsigndocumentapplyezsigntemplateglobalv1) | **POST** /1/object/ezsigndocument/{pkiEzsigndocumentID}/applyEzsigntemplateglobal | Apply an Ezsigntemplateglobal to the Ezsigndocument.
*ObjectEzsigndocumentApi* | [**ezsigndocumentCreateEzsignelementsPositionedByWordV1**](docs/Api/ObjectEzsigndocumentApi.md#ezsigndocumentcreateezsignelementspositionedbywordv1) | **POST** /1/object/ezsigndocument/{pkiEzsigndocumentID}/createEzsignelementsPositionedByWord | Create multiple Ezsignsignatures/Ezsignformfieldgroups
*ObjectEzsigndocumentApi* | [**ezsigndocumentCreateObjectV1**](docs/Api/ObjectEzsigndocumentApi.md#ezsigndocumentcreateobjectv1) | **POST** /1/object/ezsigndocument | Create a new Ezsigndocument
*ObjectEzsigndocumentApi* | [**ezsigndocumentCreateObjectV2**](docs/Api/ObjectEzsigndocumentApi.md#ezsigndocumentcreateobjectv2) | **POST** /2/object/ezsigndocument | Create a new Ezsigndocument
*ObjectEzsigndocumentApi* | [**ezsigndocumentCreateObjectV3**](docs/Api/ObjectEzsigndocumentApi.md#ezsigndocumentcreateobjectv3) | **POST** /3/object/ezsigndocument | Create a new Ezsigndocument
*ObjectEzsigndocumentApi* | [**ezsigndocumentDeclineToSignV1**](docs/Api/ObjectEzsigndocumentApi.md#ezsigndocumentdeclinetosignv1) | **POST** /1/object/ezsigndocument/{pkiEzsigndocumentID}/declineToSign | Decline to sign
*ObjectEzsigndocumentApi* | [**ezsigndocumentDeleteObjectV1**](docs/Api/ObjectEzsigndocumentApi.md#ezsigndocumentdeleteobjectv1) | **DELETE** /1/object/ezsigndocument/{pkiEzsigndocumentID} | Delete an existing Ezsigndocument
*ObjectEzsigndocumentApi* | [**ezsigndocumentEditEzsignannotationsV1**](docs/Api/ObjectEzsigndocumentApi.md#ezsigndocumenteditezsignannotationsv1) | **PUT** /1/object/ezsigndocument/{pkiEzsigndocumentID}/editEzsignannotations | Edit multiple Ezsignannotations
*ObjectEzsigndocumentApi* | [**ezsigndocumentEditEzsignformfieldgroupsV1**](docs/Api/ObjectEzsigndocumentApi.md#ezsigndocumenteditezsignformfieldgroupsv1) | **PUT** /1/object/ezsigndocument/{pkiEzsigndocumentID}/editEzsignformfieldgroups | Edit multiple Ezsignformfieldgroups
*ObjectEzsigndocumentApi* | [**ezsigndocumentEditEzsignsignaturesV1**](docs/Api/ObjectEzsigndocumentApi.md#ezsigndocumenteditezsignsignaturesv1) | **PUT** /1/object/ezsigndocument/{pkiEzsigndocumentID}/editEzsignsignatures | Edit multiple Ezsignsignatures
*ObjectEzsigndocumentApi* | [**ezsigndocumentEditObjectV1**](docs/Api/ObjectEzsigndocumentApi.md#ezsigndocumenteditobjectv1) | **PUT** /1/object/ezsigndocument/{pkiEzsigndocumentID} | Edit an existing Ezsigndocument
*ObjectEzsigndocumentApi* | [**ezsigndocumentEndPrematurelyV1**](docs/Api/ObjectEzsigndocumentApi.md#ezsigndocumentendprematurelyv1) | **POST** /1/object/ezsigndocument/{pkiEzsigndocumentID}/endPrematurely | End prematurely
*ObjectEzsigndocumentApi* | [**ezsigndocumentExtractTextV1**](docs/Api/ObjectEzsigndocumentApi.md#ezsigndocumentextracttextv1) | **POST** /1/object/ezsigndocument/{pkiEzsigndocumentID}/extractText | Extract text from Ezsigndocument area
*ObjectEzsigndocumentApi* | [**ezsigndocumentFlattenV1**](docs/Api/ObjectEzsigndocumentApi.md#ezsigndocumentflattenv1) | **POST** /1/object/ezsigndocument/{pkiEzsigndocumentID}/flatten | Flatten
*ObjectEzsigndocumentApi* | [**ezsigndocumentGetActionableElementsV1**](docs/Api/ObjectEzsigndocumentApi.md#ezsigndocumentgetactionableelementsv1) | **GET** /1/object/ezsigndocument/{pkiEzsigndocumentID}/getActionableElements | Retrieve actionable elements for the Ezsigndocument
*ObjectEzsigndocumentApi* | [**ezsigndocumentGetAttachmentsV1**](docs/Api/ObjectEzsigndocumentApi.md#ezsigndocumentgetattachmentsv1) | **GET** /1/object/ezsigndocument/{pkiEzsigndocumentID}/getAttachments | Retrieve Ezsigndocument&#39;s Attachments
*ObjectEzsigndocumentApi* | [**ezsigndocumentGetCompletedElementsV1**](docs/Api/ObjectEzsigndocumentApi.md#ezsigndocumentgetcompletedelementsv1) | **GET** /1/object/ezsigndocument/{pkiEzsigndocumentID}/getCompletedElements | Retrieve completed elements for the Ezsigndocument
*ObjectEzsigndocumentApi* | [**ezsigndocumentGetDownloadUrlV1**](docs/Api/ObjectEzsigndocumentApi.md#ezsigndocumentgetdownloadurlv1) | **GET** /1/object/ezsigndocument/{pkiEzsigndocumentID}/getDownloadUrl/{eDocumentType} | Retrieve a URL to download documents.
*ObjectEzsigndocumentApi* | [**ezsigndocumentGetEzsignannotationsV1**](docs/Api/ObjectEzsigndocumentApi.md#ezsigndocumentgetezsignannotationsv1) | **GET** /1/object/ezsigndocument/{pkiEzsigndocumentID}/getEzsignannotations | Retrieve an existing Ezsigndocument&#39;s Ezsignannotations
*ObjectEzsigndocumentApi* | [**ezsigndocumentGetEzsigndiscussionsV1**](docs/Api/ObjectEzsigndocumentApi.md#ezsigndocumentgetezsigndiscussionsv1) | **GET** /1/object/ezsigndocument/{pkiEzsigndocumentID}/getEzsigndiscussions | Retrieve an existing Ezsigndocument&#39;s Ezsigndiscussions
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
*ObjectEzsigndocumentApi* | [**ezsigndocumentPrefillEzsignformV1**](docs/Api/ObjectEzsigndocumentApi.md#ezsigndocumentprefillezsignformv1) | **POST** /1/object/ezsigndocument/{pkiEzsigndocumentID}/prefillEzsignform | Prefill an Ezsignform
*ObjectEzsigndocumentApi* | [**ezsigndocumentSubmitEzsignformV1**](docs/Api/ObjectEzsigndocumentApi.md#ezsigndocumentsubmitezsignformv1) | **POST** /1/object/ezsigndocument/{pkiEzsigndocumentID}/submitEzsignform | Submit the Ezsignform
*ObjectEzsigndocumentApi* | [**ezsigndocumentUnsendV1**](docs/Api/ObjectEzsigndocumentApi.md#ezsigndocumentunsendv1) | **POST** /1/object/ezsigndocument/{pkiEzsigndocumentID}/unsend | Unsend the Ezsigndocument
*ObjectEzsignfolderApi* | [**ezsignfolderArchiveV1**](docs/Api/ObjectEzsignfolderApi.md#ezsignfolderarchivev1) | **POST** /1/object/ezsignfolder/{pkiEzsignfolderID}/archive | Archive the Ezsignfolder
*ObjectEzsignfolderApi* | [**ezsignfolderBatchDownloadV1**](docs/Api/ObjectEzsignfolderApi.md#ezsignfolderbatchdownloadv1) | **POST** /1/object/ezsignfolder/{pkiEzsignfolderID}/batchDownload | Download multiples files from an Ezsignfolder
*ObjectEzsignfolderApi* | [**ezsignfolderCreateObjectV1**](docs/Api/ObjectEzsignfolderApi.md#ezsignfoldercreateobjectv1) | **POST** /1/object/ezsignfolder | Create a new Ezsignfolder
*ObjectEzsignfolderApi* | [**ezsignfolderCreateObjectV2**](docs/Api/ObjectEzsignfolderApi.md#ezsignfoldercreateobjectv2) | **POST** /2/object/ezsignfolder | Create a new Ezsignfolder
*ObjectEzsignfolderApi* | [**ezsignfolderCreateObjectV3**](docs/Api/ObjectEzsignfolderApi.md#ezsignfoldercreateobjectv3) | **POST** /3/object/ezsignfolder | Create a new Ezsignfolder
*ObjectEzsignfolderApi* | [**ezsignfolderDeleteObjectV1**](docs/Api/ObjectEzsignfolderApi.md#ezsignfolderdeleteobjectv1) | **DELETE** /1/object/ezsignfolder/{pkiEzsignfolderID} | Delete an existing Ezsignfolder
*ObjectEzsignfolderApi* | [**ezsignfolderDisposeEzsignfoldersV1**](docs/Api/ObjectEzsignfolderApi.md#ezsignfolderdisposeezsignfoldersv1) | **POST** /1/object/ezsignfolder/disposeEzsignfolders | Dispose Ezsignfolders
*ObjectEzsignfolderApi* | [**ezsignfolderDisposeV1**](docs/Api/ObjectEzsignfolderApi.md#ezsignfolderdisposev1) | **POST** /1/object/ezsignfolder/{pkiEzsignfolderID}/dispose | Dispose the Ezsignfolder
*ObjectEzsignfolderApi* | [**ezsignfolderEditObjectV3**](docs/Api/ObjectEzsignfolderApi.md#ezsignfoldereditobjectv3) | **PUT** /3/object/ezsignfolder/{pkiEzsignfolderID} | Edit an existing Ezsignfolder
*ObjectEzsignfolderApi* | [**ezsignfolderEndPrematurelyV1**](docs/Api/ObjectEzsignfolderApi.md#ezsignfolderendprematurelyv1) | **POST** /1/object/ezsignfolder/{pkiEzsignfolderID}/endPrematurely | End prematurely
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
*ObjectEzsignfolderApi* | [**ezsignfolderGetObjectV3**](docs/Api/ObjectEzsignfolderApi.md#ezsignfoldergetobjectv3) | **GET** /3/object/ezsignfolder/{pkiEzsignfolderID} | Retrieve an existing Ezsignfolder
*ObjectEzsignfolderApi* | [**ezsignfolderImportEzsignfoldersignerassociationsV1**](docs/Api/ObjectEzsignfolderApi.md#ezsignfolderimportezsignfoldersignerassociationsv1) | **POST** /1/object/ezsignfolder/{pkiEzsignfolderID}/importEzsignfoldersignerassociations | Import an existing Ezsignfoldersignerassociation into this Ezsignfolder
*ObjectEzsignfolderApi* | [**ezsignfolderImportEzsigntemplatepackageV1**](docs/Api/ObjectEzsignfolderApi.md#ezsignfolderimportezsigntemplatepackagev1) | **POST** /1/object/ezsignfolder/{pkiEzsignfolderID}/importEzsigntemplatepackage | Import an Ezsigntemplatepackage in the Ezsignfolder.
*ObjectEzsignfolderApi* | [**ezsignfolderReorderV1**](docs/Api/ObjectEzsignfolderApi.md#ezsignfolderreorderv1) | **POST** /1/object/ezsignfolder/{pkiEzsignfolderID}/reorder | Reorder Ezsigndocuments in the Ezsignfolder
*ObjectEzsignfolderApi* | [**ezsignfolderReorderV2**](docs/Api/ObjectEzsignfolderApi.md#ezsignfolderreorderv2) | **POST** /2/object/ezsignfolder/{pkiEzsignfolderID}/reorder | Reorder Ezsigndocuments in the Ezsignfolder
*ObjectEzsignfolderApi* | [**ezsignfolderSendV1**](docs/Api/ObjectEzsignfolderApi.md#ezsignfoldersendv1) | **POST** /1/object/ezsignfolder/{pkiEzsignfolderID}/send | Send the Ezsignfolder to the signatories for signature
*ObjectEzsignfolderApi* | [**ezsignfolderSendV3**](docs/Api/ObjectEzsignfolderApi.md#ezsignfoldersendv3) | **POST** /3/object/ezsignfolder/{pkiEzsignfolderID}/send | Send the Ezsignfolder to the signatories for signature
*ObjectEzsignfolderApi* | [**ezsignfolderUnsendV1**](docs/Api/ObjectEzsignfolderApi.md#ezsignfolderunsendv1) | **POST** /1/object/ezsignfolder/{pkiEzsignfolderID}/unsend | Unsend the Ezsignfolder
*ObjectEzsignfoldersignerassociationApi* | [**ezsignfoldersignerassociationCreateEmbeddedUrlV1**](docs/Api/ObjectEzsignfoldersignerassociationApi.md#ezsignfoldersignerassociationcreateembeddedurlv1) | **POST** /1/object/ezsignfoldersignerassociation/{pkiEzsignfoldersignerassociationID}/createEmbeddedUrl | Creates an Url to allow embedded signing
*ObjectEzsignfoldersignerassociationApi* | [**ezsignfoldersignerassociationCreateObjectV1**](docs/Api/ObjectEzsignfoldersignerassociationApi.md#ezsignfoldersignerassociationcreateobjectv1) | **POST** /1/object/ezsignfoldersignerassociation | Create a new Ezsignfoldersignerassociation
*ObjectEzsignfoldersignerassociationApi* | [**ezsignfoldersignerassociationCreateObjectV2**](docs/Api/ObjectEzsignfoldersignerassociationApi.md#ezsignfoldersignerassociationcreateobjectv2) | **POST** /2/object/ezsignfoldersignerassociation | Create a new Ezsignfoldersignerassociation
*ObjectEzsignfoldersignerassociationApi* | [**ezsignfoldersignerassociationDeleteObjectV1**](docs/Api/ObjectEzsignfoldersignerassociationApi.md#ezsignfoldersignerassociationdeleteobjectv1) | **DELETE** /1/object/ezsignfoldersignerassociation/{pkiEzsignfoldersignerassociationID} | Delete an existing Ezsignfoldersignerassociation
*ObjectEzsignfoldersignerassociationApi* | [**ezsignfoldersignerassociationEditObjectV1**](docs/Api/ObjectEzsignfoldersignerassociationApi.md#ezsignfoldersignerassociationeditobjectv1) | **PUT** /1/object/ezsignfoldersignerassociation/{pkiEzsignfoldersignerassociationID} | Edit an existing Ezsignfoldersignerassociation
*ObjectEzsignfoldersignerassociationApi* | [**ezsignfoldersignerassociationForceDisconnectV1**](docs/Api/ObjectEzsignfoldersignerassociationApi.md#ezsignfoldersignerassociationforcedisconnectv1) | **POST** /1/object/ezsignfoldersignerassociation/{pkiEzsignfoldersignerassociationID}/forceDisconnect | Disconnects the Ezsignfoldersignerassociation
*ObjectEzsignfoldersignerassociationApi* | [**ezsignfoldersignerassociationGetInPersonLoginUrlV1**](docs/Api/ObjectEzsignfoldersignerassociationApi.md#ezsignfoldersignerassociationgetinpersonloginurlv1) | **GET** /1/object/ezsignfoldersignerassociation/{pkiEzsignfoldersignerassociationID}/getInPersonLoginUrl | Retrieve a Login Url to allow In-Person signing
*ObjectEzsignfoldersignerassociationApi* | [**ezsignfoldersignerassociationGetObjectV1**](docs/Api/ObjectEzsignfoldersignerassociationApi.md#ezsignfoldersignerassociationgetobjectv1) | **GET** /1/object/ezsignfoldersignerassociation/{pkiEzsignfoldersignerassociationID} | Retrieve an existing Ezsignfoldersignerassociation
*ObjectEzsignfoldersignerassociationApi* | [**ezsignfoldersignerassociationGetObjectV2**](docs/Api/ObjectEzsignfoldersignerassociationApi.md#ezsignfoldersignerassociationgetobjectv2) | **GET** /2/object/ezsignfoldersignerassociation/{pkiEzsignfoldersignerassociationID} | Retrieve an existing Ezsignfoldersignerassociation
*ObjectEzsignfoldersignerassociationApi* | [**ezsignfoldersignerassociationPatchObjectV1**](docs/Api/ObjectEzsignfoldersignerassociationApi.md#ezsignfoldersignerassociationpatchobjectv1) | **PATCH** /1/object/ezsignfoldersignerassociation/{pkiEzsignfoldersignerassociationID} | Patch an existing Ezsignfoldersignerassociation
*ObjectEzsignfoldersignerassociationApi* | [**ezsignfoldersignerassociationReassignV1**](docs/Api/ObjectEzsignfoldersignerassociationApi.md#ezsignfoldersignerassociationreassignv1) | **POST** /1/object/ezsignfoldersignerassociation/{pkiEzsignfoldersignerassociationID}/reassign | Reassign remaining unsigned signatures and forms
*ObjectEzsignfoldertypeApi* | [**ezsignfoldertypeCreateObjectV3**](docs/Api/ObjectEzsignfoldertypeApi.md#ezsignfoldertypecreateobjectv3) | **POST** /3/object/ezsignfoldertype | Create a new Ezsignfoldertype
*ObjectEzsignfoldertypeApi* | [**ezsignfoldertypeEditObjectV3**](docs/Api/ObjectEzsignfoldertypeApi.md#ezsignfoldertypeeditobjectv3) | **PUT** /3/object/ezsignfoldertype/{pkiEzsignfoldertypeID} | Edit an existing Ezsignfoldertype
*ObjectEzsignfoldertypeApi* | [**ezsignfoldertypeGetAutocompleteV2**](docs/Api/ObjectEzsignfoldertypeApi.md#ezsignfoldertypegetautocompletev2) | **GET** /2/object/ezsignfoldertype/getAutocomplete/{sSelector} | Retrieve Ezsignfoldertypes and IDs
*ObjectEzsignfoldertypeApi* | [**ezsignfoldertypeGetListV1**](docs/Api/ObjectEzsignfoldertypeApi.md#ezsignfoldertypegetlistv1) | **GET** /1/object/ezsignfoldertype/getList | Retrieve Ezsignfoldertype list
*ObjectEzsignfoldertypeApi* | [**ezsignfoldertypeGetObjectV2**](docs/Api/ObjectEzsignfoldertypeApi.md#ezsignfoldertypegetobjectv2) | **GET** /2/object/ezsignfoldertype/{pkiEzsignfoldertypeID} | Retrieve an existing Ezsignfoldertype
*ObjectEzsignfoldertypeApi* | [**ezsignfoldertypeGetObjectV4**](docs/Api/ObjectEzsignfoldertypeApi.md#ezsignfoldertypegetobjectv4) | **GET** /4/object/ezsignfoldertype/{pkiEzsignfoldertypeID} | Retrieve an existing Ezsignfoldertype
*ObjectEzsignformfieldgroupApi* | [**ezsignformfieldgroupCreateObjectV1**](docs/Api/ObjectEzsignformfieldgroupApi.md#ezsignformfieldgroupcreateobjectv1) | **POST** /1/object/ezsignformfieldgroup | Create a new Ezsignformfieldgroup
*ObjectEzsignformfieldgroupApi* | [**ezsignformfieldgroupDeleteObjectV1**](docs/Api/ObjectEzsignformfieldgroupApi.md#ezsignformfieldgroupdeleteobjectv1) | **DELETE** /1/object/ezsignformfieldgroup/{pkiEzsignformfieldgroupID} | Delete an existing Ezsignformfieldgroup
*ObjectEzsignformfieldgroupApi* | [**ezsignformfieldgroupEditObjectV1**](docs/Api/ObjectEzsignformfieldgroupApi.md#ezsignformfieldgroupeditobjectv1) | **PUT** /1/object/ezsignformfieldgroup/{pkiEzsignformfieldgroupID} | Edit an existing Ezsignformfieldgroup
*ObjectEzsignformfieldgroupApi* | [**ezsignformfieldgroupGetObjectV2**](docs/Api/ObjectEzsignformfieldgroupApi.md#ezsignformfieldgroupgetobjectv2) | **GET** /2/object/ezsignformfieldgroup/{pkiEzsignformfieldgroupID} | Retrieve an existing Ezsignformfieldgroup
*ObjectEzsignimportdocumentApi* | [**ezsignimportdocumentDownloadV1**](docs/Api/ObjectEzsignimportdocumentApi.md#ezsignimportdocumentdownloadv1) | **GET** /1/object/ezsignimportdocument/{pkiEzsignimportdocumentID}/download | Retrieve the content
*ObjectEzsignimportfolderApi* | [**ezsignimportfolderDeleteObjectV1**](docs/Api/ObjectEzsignimportfolderApi.md#ezsignimportfolderdeleteobjectv1) | **DELETE** /1/object/ezsignimportfolder/{pkiEzsignimportfolderID} | Delete an existing Ezsignimportfolder
*ObjectEzsignimportfolderApi* | [**ezsignimportfolderGetListV1**](docs/Api/ObjectEzsignimportfolderApi.md#ezsignimportfoldergetlistv1) | **GET** /1/object/ezsignimportfolder/getList | Retrieve Ezsignimportfolder list
*ObjectEzsignimportfolderApi* | [**ezsignimportfolderGetObjectV2**](docs/Api/ObjectEzsignimportfolderApi.md#ezsignimportfoldergetobjectv2) | **GET** /2/object/ezsignimportfolder/{pkiEzsignimportfolderID} | Retrieve an existing Ezsignimportfolder
*ObjectEzsignpageApi* | [**ezsignpageConsultV1**](docs/Api/ObjectEzsignpageApi.md#ezsignpageconsultv1) | **POST** /1/object/ezsignpage/{pkiEzsignpageID}/consult | Consult an Ezsignpage
*ObjectEzsignsignatureApi* | [**ezsignsignatureCreateObjectV1**](docs/Api/ObjectEzsignsignatureApi.md#ezsignsignaturecreateobjectv1) | **POST** /1/object/ezsignsignature | Create a new Ezsignsignature
*ObjectEzsignsignatureApi* | [**ezsignsignatureCreateObjectV2**](docs/Api/ObjectEzsignsignatureApi.md#ezsignsignaturecreateobjectv2) | **POST** /2/object/ezsignsignature | Create a new Ezsignsignature
*ObjectEzsignsignatureApi* | [**ezsignsignatureCreateObjectV3**](docs/Api/ObjectEzsignsignatureApi.md#ezsignsignaturecreateobjectv3) | **POST** /3/object/ezsignsignature | Create a new Ezsignsignature
*ObjectEzsignsignatureApi* | [**ezsignsignatureDeleteObjectV1**](docs/Api/ObjectEzsignsignatureApi.md#ezsignsignaturedeleteobjectv1) | **DELETE** /1/object/ezsignsignature/{pkiEzsignsignatureID} | Delete an existing Ezsignsignature
*ObjectEzsignsignatureApi* | [**ezsignsignatureEditObjectV2**](docs/Api/ObjectEzsignsignatureApi.md#ezsignsignatureeditobjectv2) | **PUT** /2/object/ezsignsignature/{pkiEzsignsignatureID} | Edit an existing Ezsignsignature
*ObjectEzsignsignatureApi* | [**ezsignsignatureGetEzsignsignatureattachmentV1**](docs/Api/ObjectEzsignsignatureApi.md#ezsignsignaturegetezsignsignatureattachmentv1) | **GET** /1/object/ezsignsignature/{pkiEzsignsignatureID}/getEzsignsignatureattachment | Retrieve an existing Ezsignsignature&#39;s Ezsignsignatureattachments
*ObjectEzsignsignatureApi* | [**ezsignsignatureGetEzsignsignaturesAutomaticV1**](docs/Api/ObjectEzsignsignatureApi.md#ezsignsignaturegetezsignsignaturesautomaticv1) | **GET** /1/object/ezsignsignature/getEzsignsignaturesAutomatic | Retrieve all automatic Ezsignsignatures
*ObjectEzsignsignatureApi* | [**ezsignsignatureGetObjectV3**](docs/Api/ObjectEzsignsignatureApi.md#ezsignsignaturegetobjectv3) | **GET** /3/object/ezsignsignature/{pkiEzsignsignatureID} | Retrieve an existing Ezsignsignature
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
*ObjectEzsigntemplateApi* | [**ezsigntemplateCreateObjectV3**](docs/Api/ObjectEzsigntemplateApi.md#ezsigntemplatecreateobjectv3) | **POST** /3/object/ezsigntemplate | Create a new Ezsigntemplate
*ObjectEzsigntemplateApi* | [**ezsigntemplateDeleteObjectV1**](docs/Api/ObjectEzsigntemplateApi.md#ezsigntemplatedeleteobjectv1) | **DELETE** /1/object/ezsigntemplate/{pkiEzsigntemplateID} | Delete an existing Ezsigntemplate
*ObjectEzsigntemplateApi* | [**ezsigntemplateEditObjectV3**](docs/Api/ObjectEzsigntemplateApi.md#ezsigntemplateeditobjectv3) | **PUT** /3/object/ezsigntemplate/{pkiEzsigntemplateID} | Edit an existing Ezsigntemplate
*ObjectEzsigntemplateApi* | [**ezsigntemplateGetAutocompleteV2**](docs/Api/ObjectEzsigntemplateApi.md#ezsigntemplategetautocompletev2) | **GET** /2/object/ezsigntemplate/getAutocomplete/{sSelector} | Retrieve Ezsigntemplates and IDs
*ObjectEzsigntemplateApi* | [**ezsigntemplateGetListV1**](docs/Api/ObjectEzsigntemplateApi.md#ezsigntemplategetlistv1) | **GET** /1/object/ezsigntemplate/getList | Retrieve Ezsigntemplate list
*ObjectEzsigntemplateApi* | [**ezsigntemplateGetObjectV3**](docs/Api/ObjectEzsigntemplateApi.md#ezsigntemplategetobjectv3) | **GET** /3/object/ezsigntemplate/{pkiEzsigntemplateID} | Retrieve an existing Ezsigntemplate
*ObjectEzsigntemplatedocumentApi* | [**ezsigntemplatedocumentCreateObjectV1**](docs/Api/ObjectEzsigntemplatedocumentApi.md#ezsigntemplatedocumentcreateobjectv1) | **POST** /1/object/ezsigntemplatedocument | Create a new Ezsigntemplatedocument
*ObjectEzsigntemplatedocumentApi* | [**ezsigntemplatedocumentEditEzsigntemplatedocumentpagerecognitionsV1**](docs/Api/ObjectEzsigntemplatedocumentApi.md#ezsigntemplatedocumenteditezsigntemplatedocumentpagerecognitionsv1) | **PUT** /1/object/ezsigntemplatedocument/{pkiEzsigntemplatedocumentID}/editEzsigntemplatedocumentpagerecognitions | Edit multiple Ezsigntemplatedocumentpagerecognitions
*ObjectEzsigntemplatedocumentApi* | [**ezsigntemplatedocumentEditEzsigntemplateformfieldgroupsV1**](docs/Api/ObjectEzsigntemplatedocumentApi.md#ezsigntemplatedocumenteditezsigntemplateformfieldgroupsv1) | **PUT** /1/object/ezsigntemplatedocument/{pkiEzsigntemplatedocumentID}/editEzsigntemplateformfieldgroups | Edit multiple Ezsigntemplateformfieldgroups
*ObjectEzsigntemplatedocumentApi* | [**ezsigntemplatedocumentEditEzsigntemplatesignaturesV1**](docs/Api/ObjectEzsigntemplatedocumentApi.md#ezsigntemplatedocumenteditezsigntemplatesignaturesv1) | **PUT** /1/object/ezsigntemplatedocument/{pkiEzsigntemplatedocumentID}/editEzsigntemplatesignatures | Edit multiple Ezsigntemplatesignatures
*ObjectEzsigntemplatedocumentApi* | [**ezsigntemplatedocumentEditObjectV1**](docs/Api/ObjectEzsigntemplatedocumentApi.md#ezsigntemplatedocumenteditobjectv1) | **PUT** /1/object/ezsigntemplatedocument/{pkiEzsigntemplatedocumentID} | Edit an existing Ezsigntemplatedocument
*ObjectEzsigntemplatedocumentApi* | [**ezsigntemplatedocumentExtractTextV1**](docs/Api/ObjectEzsigntemplatedocumentApi.md#ezsigntemplatedocumentextracttextv1) | **POST** /1/object/ezsigntemplatedocument/{pkiEzsigntemplatedocumentID}/extractText | Extract text from Ezsigntemplatedocument area
*ObjectEzsigntemplatedocumentApi* | [**ezsigntemplatedocumentFlattenV1**](docs/Api/ObjectEzsigntemplatedocumentApi.md#ezsigntemplatedocumentflattenv1) | **POST** /1/object/ezsigntemplatedocument/{pkiEzsigntemplatedocumentID}/flatten | Flatten
*ObjectEzsigntemplatedocumentApi* | [**ezsigntemplatedocumentGetEzsigntemplatedocumentpagerecognitionsV1**](docs/Api/ObjectEzsigntemplatedocumentApi.md#ezsigntemplatedocumentgetezsigntemplatedocumentpagerecognitionsv1) | **GET** /1/object/ezsigntemplatedocument/{pkiEzsigntemplatedocumentID}/getEzsigntemplatedocumentpagerecognitions | Retrieve an existing Ezsigntemplatedocument&#39;s Ezsigntemplatedocumentpagerecognitions
*ObjectEzsigntemplatedocumentApi* | [**ezsigntemplatedocumentGetEzsigntemplatedocumentpagesV1**](docs/Api/ObjectEzsigntemplatedocumentApi.md#ezsigntemplatedocumentgetezsigntemplatedocumentpagesv1) | **GET** /1/object/ezsigntemplatedocument/{pkiEzsigntemplatedocumentID}/getEzsigntemplatedocumentpages | Retrieve an existing Ezsigntemplatedocument&#39;s Ezsigntemplatedocumentpages
*ObjectEzsigntemplatedocumentApi* | [**ezsigntemplatedocumentGetEzsigntemplateformfieldgroupsV1**](docs/Api/ObjectEzsigntemplatedocumentApi.md#ezsigntemplatedocumentgetezsigntemplateformfieldgroupsv1) | **GET** /1/object/ezsigntemplatedocument/{pkiEzsigntemplatedocumentID}/getEzsigntemplateformfieldgroups | Retrieve an existing Ezsigntemplatedocument&#39;s Ezsigntemplateformfieldgroups
*ObjectEzsigntemplatedocumentApi* | [**ezsigntemplatedocumentGetEzsigntemplatesignaturesV1**](docs/Api/ObjectEzsigntemplatedocumentApi.md#ezsigntemplatedocumentgetezsigntemplatesignaturesv1) | **GET** /1/object/ezsigntemplatedocument/{pkiEzsigntemplatedocumentID}/getEzsigntemplatesignatures | Retrieve an existing Ezsigntemplatedocument&#39;s Ezsigntemplatesignatures
*ObjectEzsigntemplatedocumentApi* | [**ezsigntemplatedocumentGetObjectV2**](docs/Api/ObjectEzsigntemplatedocumentApi.md#ezsigntemplatedocumentgetobjectv2) | **GET** /2/object/ezsigntemplatedocument/{pkiEzsigntemplatedocumentID} | Retrieve an existing Ezsigntemplatedocument
*ObjectEzsigntemplatedocumentApi* | [**ezsigntemplatedocumentGetWordsPositionsV1**](docs/Api/ObjectEzsigntemplatedocumentApi.md#ezsigntemplatedocumentgetwordspositionsv1) | **POST** /1/object/ezsigntemplatedocument/{pkiEzsigntemplatedocumentID}/getWordsPositions | Retrieve positions X,Y of given words from a Ezsigntemplatedocument
*ObjectEzsigntemplatedocumentApi* | [**ezsigntemplatedocumentPatchObjectV1**](docs/Api/ObjectEzsigntemplatedocumentApi.md#ezsigntemplatedocumentpatchobjectv1) | **PATCH** /1/object/ezsigntemplatedocument/{pkiEzsigntemplatedocumentID} | Patch an existing Ezsigntemplatedocument
*ObjectEzsigntemplatedocumentpagerecognitionApi* | [**ezsigntemplatedocumentpagerecognitionCreateObjectV1**](docs/Api/ObjectEzsigntemplatedocumentpagerecognitionApi.md#ezsigntemplatedocumentpagerecognitioncreateobjectv1) | **POST** /1/object/ezsigntemplatedocumentpagerecognition | Create a new Ezsigntemplatedocumentpagerecognition
*ObjectEzsigntemplatedocumentpagerecognitionApi* | [**ezsigntemplatedocumentpagerecognitionDeleteObjectV1**](docs/Api/ObjectEzsigntemplatedocumentpagerecognitionApi.md#ezsigntemplatedocumentpagerecognitiondeleteobjectv1) | **DELETE** /1/object/ezsigntemplatedocumentpagerecognition/{pkiEzsigntemplatedocumentpagerecognitionID} | Delete an existing Ezsigntemplatedocumentpagerecognition
*ObjectEzsigntemplatedocumentpagerecognitionApi* | [**ezsigntemplatedocumentpagerecognitionEditObjectV1**](docs/Api/ObjectEzsigntemplatedocumentpagerecognitionApi.md#ezsigntemplatedocumentpagerecognitioneditobjectv1) | **PUT** /1/object/ezsigntemplatedocumentpagerecognition/{pkiEzsigntemplatedocumentpagerecognitionID} | Edit an existing Ezsigntemplatedocumentpagerecognition
*ObjectEzsigntemplatedocumentpagerecognitionApi* | [**ezsigntemplatedocumentpagerecognitionGetObjectV2**](docs/Api/ObjectEzsigntemplatedocumentpagerecognitionApi.md#ezsigntemplatedocumentpagerecognitiongetobjectv2) | **GET** /2/object/ezsigntemplatedocumentpagerecognition/{pkiEzsigntemplatedocumentpagerecognitionID} | Retrieve an existing Ezsigntemplatedocumentpagerecognition
*ObjectEzsigntemplateformfieldgroupApi* | [**ezsigntemplateformfieldgroupCreateObjectV1**](docs/Api/ObjectEzsigntemplateformfieldgroupApi.md#ezsigntemplateformfieldgroupcreateobjectv1) | **POST** /1/object/ezsigntemplateformfieldgroup | Create a new Ezsigntemplateformfieldgroup
*ObjectEzsigntemplateformfieldgroupApi* | [**ezsigntemplateformfieldgroupDeleteObjectV1**](docs/Api/ObjectEzsigntemplateformfieldgroupApi.md#ezsigntemplateformfieldgroupdeleteobjectv1) | **DELETE** /1/object/ezsigntemplateformfieldgroup/{pkiEzsigntemplateformfieldgroupID} | Delete an existing Ezsigntemplateformfieldgroup
*ObjectEzsigntemplateformfieldgroupApi* | [**ezsigntemplateformfieldgroupEditObjectV1**](docs/Api/ObjectEzsigntemplateformfieldgroupApi.md#ezsigntemplateformfieldgroupeditobjectv1) | **PUT** /1/object/ezsigntemplateformfieldgroup/{pkiEzsigntemplateformfieldgroupID} | Edit an existing Ezsigntemplateformfieldgroup
*ObjectEzsigntemplateformfieldgroupApi* | [**ezsigntemplateformfieldgroupGetObjectV2**](docs/Api/ObjectEzsigntemplateformfieldgroupApi.md#ezsigntemplateformfieldgroupgetobjectv2) | **GET** /2/object/ezsigntemplateformfieldgroup/{pkiEzsigntemplateformfieldgroupID} | Retrieve an existing Ezsigntemplateformfieldgroup
*ObjectEzsigntemplateglobalApi* | [**ezsigntemplateglobalGetAutocompleteV2**](docs/Api/ObjectEzsigntemplateglobalApi.md#ezsigntemplateglobalgetautocompletev2) | **GET** /2/object/ezsigntemplateglobal/getAutocomplete/{sSelector} | Retrieve Ezsigntemplateglobals and IDs
*ObjectEzsigntemplateglobalApi* | [**ezsigntemplateglobalGetObjectV2**](docs/Api/ObjectEzsigntemplateglobalApi.md#ezsigntemplateglobalgetobjectv2) | **GET** /2/object/ezsigntemplateglobal/{pkiEzsigntemplateglobalID} | Retrieve an existing Ezsigntemplateglobal
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
*ObjectEzsigntemplatepublicApi* | [**ezsigntemplatepublicCreateEzsignfolderV1**](docs/Api/ObjectEzsigntemplatepublicApi.md#ezsigntemplatepubliccreateezsignfolderv1) | **POST** /1/object/ezsigntemplatepublic/createEzsignfolder | Create an Ezsignfolder
*ObjectEzsigntemplatepublicApi* | [**ezsigntemplatepublicCreateObjectV1**](docs/Api/ObjectEzsigntemplatepublicApi.md#ezsigntemplatepubliccreateobjectv1) | **POST** /1/object/ezsigntemplatepublic | Create a new Ezsigntemplatepublic
*ObjectEzsigntemplatepublicApi* | [**ezsigntemplatepublicDeleteObjectV1**](docs/Api/ObjectEzsigntemplatepublicApi.md#ezsigntemplatepublicdeleteobjectv1) | **DELETE** /1/object/ezsigntemplatepublic/{pkiEzsigntemplatepublicID} | Delete an existing Ezsigntemplatepublic
*ObjectEzsigntemplatepublicApi* | [**ezsigntemplatepublicEditObjectV1**](docs/Api/ObjectEzsigntemplatepublicApi.md#ezsigntemplatepubliceditobjectv1) | **PUT** /1/object/ezsigntemplatepublic/{pkiEzsigntemplatepublicID} | Edit an existing Ezsigntemplatepublic
*ObjectEzsigntemplatepublicApi* | [**ezsigntemplatepublicGetEzsigntemplatepublicDetailsV1**](docs/Api/ObjectEzsigntemplatepublicApi.md#ezsigntemplatepublicgetezsigntemplatepublicdetailsv1) | **POST** /1/object/ezsigntemplatepublic/getEzsigntemplatepublicDetails | Retrieve the Ezsigntemplatepublic details
*ObjectEzsigntemplatepublicApi* | [**ezsigntemplatepublicGetFormsDataV1**](docs/Api/ObjectEzsigntemplatepublicApi.md#ezsigntemplatepublicgetformsdatav1) | **GET** /1/object/ezsigntemplatepublic/{pkiEzsigntemplatepublicID}/getFormsData | Retrieve an existing Ezsigntemplatepublic&#39;s forms data
*ObjectEzsigntemplatepublicApi* | [**ezsigntemplatepublicGetListV1**](docs/Api/ObjectEzsigntemplatepublicApi.md#ezsigntemplatepublicgetlistv1) | **GET** /1/object/ezsigntemplatepublic/getList | Retrieve Ezsigntemplatepublic list
*ObjectEzsigntemplatepublicApi* | [**ezsigntemplatepublicGetObjectV2**](docs/Api/ObjectEzsigntemplatepublicApi.md#ezsigntemplatepublicgetobjectv2) | **GET** /2/object/ezsigntemplatepublic/{pkiEzsigntemplatepublicID} | Retrieve an existing Ezsigntemplatepublic
*ObjectEzsigntemplatepublicApi* | [**ezsigntemplatepublicResetLimitExceededCounterV1**](docs/Api/ObjectEzsigntemplatepublicApi.md#ezsigntemplatepublicresetlimitexceededcounterv1) | **POST** /1/object/ezsigntemplatepublic/{pkiEzsigntemplatepublicID}/resetLimitExceededCounter | Reset the limit exceeded counter
*ObjectEzsigntemplatepublicApi* | [**ezsigntemplatepublicResetUrlV1**](docs/Api/ObjectEzsigntemplatepublicApi.md#ezsigntemplatepublicreseturlv1) | **POST** /1/object/ezsigntemplatepublic/{pkiEzsigntemplatepublicID}/resetUrl | Reset the Ezsigntemplatepublic url
*ObjectEzsigntemplatesignatureApi* | [**ezsigntemplatesignatureCreateObjectV2**](docs/Api/ObjectEzsigntemplatesignatureApi.md#ezsigntemplatesignaturecreateobjectv2) | **POST** /2/object/ezsigntemplatesignature | Create a new Ezsigntemplatesignature
*ObjectEzsigntemplatesignatureApi* | [**ezsigntemplatesignatureDeleteObjectV1**](docs/Api/ObjectEzsigntemplatesignatureApi.md#ezsigntemplatesignaturedeleteobjectv1) | **DELETE** /1/object/ezsigntemplatesignature/{pkiEzsigntemplatesignatureID} | Delete an existing Ezsigntemplatesignature
*ObjectEzsigntemplatesignatureApi* | [**ezsigntemplatesignatureEditObjectV2**](docs/Api/ObjectEzsigntemplatesignatureApi.md#ezsigntemplatesignatureeditobjectv2) | **PUT** /2/object/ezsigntemplatesignature/{pkiEzsigntemplatesignatureID} | Edit an existing Ezsigntemplatesignature
*ObjectEzsigntemplatesignatureApi* | [**ezsigntemplatesignatureGetObjectV3**](docs/Api/ObjectEzsigntemplatesignatureApi.md#ezsigntemplatesignaturegetobjectv3) | **GET** /3/object/ezsigntemplatesignature/{pkiEzsigntemplatesignatureID} | Retrieve an existing Ezsigntemplatesignature
*ObjectEzsigntemplatesignerApi* | [**ezsigntemplatesignerCreateObjectV1**](docs/Api/ObjectEzsigntemplatesignerApi.md#ezsigntemplatesignercreateobjectv1) | **POST** /1/object/ezsigntemplatesigner | Create a new Ezsigntemplatesigner
*ObjectEzsigntemplatesignerApi* | [**ezsigntemplatesignerDeleteObjectV1**](docs/Api/ObjectEzsigntemplatesignerApi.md#ezsigntemplatesignerdeleteobjectv1) | **DELETE** /1/object/ezsigntemplatesigner/{pkiEzsigntemplatesignerID} | Delete an existing Ezsigntemplatesigner
*ObjectEzsigntemplatesignerApi* | [**ezsigntemplatesignerEditObjectV1**](docs/Api/ObjectEzsigntemplatesignerApi.md#ezsigntemplatesignereditobjectv1) | **PUT** /1/object/ezsigntemplatesigner/{pkiEzsigntemplatesignerID} | Edit an existing Ezsigntemplatesigner
*ObjectEzsigntemplatesignerApi* | [**ezsigntemplatesignerGetObjectV2**](docs/Api/ObjectEzsigntemplatesignerApi.md#ezsigntemplatesignergetobjectv2) | **GET** /2/object/ezsigntemplatesigner/{pkiEzsigntemplatesignerID} | Retrieve an existing Ezsigntemplatesigner
*ObjectEzsigntsarequirementApi* | [**ezsigntsarequirementGetAutocompleteV2**](docs/Api/ObjectEzsigntsarequirementApi.md#ezsigntsarequirementgetautocompletev2) | **GET** /2/object/ezsigntsarequirement/getAutocomplete/{sSelector} | Retrieve Ezsigntsarequirements and IDs
*ObjectEzsignuserApi* | [**ezsignuserEditObjectV1**](docs/Api/ObjectEzsignuserApi.md#ezsignusereditobjectv1) | **PUT** /1/object/ezsignuser/{pkiEzsignuserID} | Edit an existing Ezsignuser
*ObjectEzsignuserApi* | [**ezsignuserGetObjectV2**](docs/Api/ObjectEzsignuserApi.md#ezsignusergetobjectv2) | **GET** /2/object/ezsignuser/{pkiEzsignuserID} | Retrieve an existing Ezsignuser
*ObjectFontApi* | [**fontGetAutocompleteV2**](docs/Api/ObjectFontApi.md#fontgetautocompletev2) | **GET** /2/object/font/getAutocomplete/{sSelector} | Retrieve Fonts and IDs
*ObjectFranchisebrokerApi* | [**franchisebrokerGetAutocompleteV2**](docs/Api/ObjectFranchisebrokerApi.md#franchisebrokergetautocompletev2) | **GET** /2/object/franchisebroker/getAutocomplete/{sSelector} | Retrieve Franchisebrokers and IDs
*ObjectFranchiseofficeApi* | [**franchiseofficeGetAutocompleteV2**](docs/Api/ObjectFranchiseofficeApi.md#franchiseofficegetautocompletev2) | **GET** /2/object/franchiseoffice/getAutocomplete/{sSelector} | Retrieve Franchiseoffices and IDs
*ObjectFranchisereferalincomeApi* | [**franchisereferalincomeCreateObjectV2**](docs/Api/ObjectFranchisereferalincomeApi.md#franchisereferalincomecreateobjectv2) | **POST** /2/object/franchisereferalincome | Create a new Franchisereferalincome
*ObjectGlaccountApi* | [**glaccountGetAutocompleteV2**](docs/Api/ObjectGlaccountApi.md#glaccountgetautocompletev2) | **GET** /2/object/glaccount/getAutocomplete/{sSelector} | Retrieve Glaccounts and IDs
*ObjectGlaccountcontainerApi* | [**glaccountcontainerGetAutocompleteV2**](docs/Api/ObjectGlaccountcontainerApi.md#glaccountcontainergetautocompletev2) | **GET** /2/object/glaccountcontainer/getAutocomplete/{sSelector} | Retrieve Glaccountcontainers and IDs
*ObjectInscriptionApi* | [**inscriptionGetAttachmentsV1**](docs/Api/ObjectInscriptionApi.md#inscriptiongetattachmentsv1) | **GET** /1/object/inscription/{pkiInscriptionID}/getAttachments | Retrieve Inscription&#39;s Attachments
*ObjectInscriptionApi* | [**inscriptionGetCommunicationCountV1**](docs/Api/ObjectInscriptionApi.md#inscriptiongetcommunicationcountv1) | **GET** /1/object/inscription/{pkiInscriptionID}/getCommunicationCount | Retrieve Communication count
*ObjectInscriptionApi* | [**inscriptionGetCommunicationListV1**](docs/Api/ObjectInscriptionApi.md#inscriptiongetcommunicationlistv1) | **GET** /1/object/inscription/{pkiInscriptionID}/getCommunicationList | Retrieve Communication list
*ObjectInscriptionApi* | [**inscriptionGetCommunicationrecipientsV1**](docs/Api/ObjectInscriptionApi.md#inscriptiongetcommunicationrecipientsv1) | **GET** /1/object/inscription/{pkiInscriptionID}/getCommunicationrecipients | Retrieve Inscription&#39;s Communicationrecipient
*ObjectInscriptionApi* | [**inscriptionGetCommunicationsendersV1**](docs/Api/ObjectInscriptionApi.md#inscriptiongetcommunicationsendersv1) | **GET** /1/object/inscription/{pkiInscriptionID}/getCommunicationsenders | Retrieve Inscription&#39;s Communicationsender
*ObjectInscriptionnotauthenticatedApi* | [**inscriptionnotauthenticatedGetCommunicationCountV1**](docs/Api/ObjectInscriptionnotauthenticatedApi.md#inscriptionnotauthenticatedgetcommunicationcountv1) | **GET** /1/object/inscriptionnotauthenticated/{pkiInscriptionnotauthenticatedID}/getCommunicationCount | Retrieve Communication count
*ObjectInscriptionnotauthenticatedApi* | [**inscriptionnotauthenticatedGetCommunicationListV1**](docs/Api/ObjectInscriptionnotauthenticatedApi.md#inscriptionnotauthenticatedgetcommunicationlistv1) | **GET** /1/object/inscriptionnotauthenticated/{pkiInscriptionnotauthenticatedID}/getCommunicationList | Retrieve Communication list
*ObjectInscriptionnotauthenticatedApi* | [**inscriptionnotauthenticatedGetCommunicationrecipientsV1**](docs/Api/ObjectInscriptionnotauthenticatedApi.md#inscriptionnotauthenticatedgetcommunicationrecipientsv1) | **GET** /1/object/inscriptionnotauthenticated/{pkiInscriptionnotauthenticatedID}/getCommunicationrecipients | Retrieve Inscriptionnotauthenticated&#39;s Communicationrecipient
*ObjectInscriptionnotauthenticatedApi* | [**inscriptionnotauthenticatedGetCommunicationsendersV1**](docs/Api/ObjectInscriptionnotauthenticatedApi.md#inscriptionnotauthenticatedgetcommunicationsendersv1) | **GET** /1/object/inscriptionnotauthenticated/{pkiInscriptionnotauthenticatedID}/getCommunicationsenders | Retrieve Inscriptionnotauthenticated&#39;s Communicationsender
*ObjectInscriptiontempApi* | [**inscriptiontempGetCommunicationCountV1**](docs/Api/ObjectInscriptiontempApi.md#inscriptiontempgetcommunicationcountv1) | **GET** /1/object/inscriptiontemp/{pkiInscriptiontempID}/getCommunicationCount | Retrieve Communication count
*ObjectInscriptiontempApi* | [**inscriptiontempGetCommunicationListV1**](docs/Api/ObjectInscriptiontempApi.md#inscriptiontempgetcommunicationlistv1) | **GET** /1/object/inscriptiontemp/{pkiInscriptiontempID}/getCommunicationList | Retrieve Communication list
*ObjectInscriptiontempApi* | [**inscriptiontempGetCommunicationrecipientsV1**](docs/Api/ObjectInscriptiontempApi.md#inscriptiontempgetcommunicationrecipientsv1) | **GET** /1/object/inscriptiontemp/{pkiInscriptiontempID}/getCommunicationrecipients | Retrieve Inscriptiontemp&#39;s Communicationrecipient
*ObjectInscriptiontempApi* | [**inscriptiontempGetCommunicationsendersV1**](docs/Api/ObjectInscriptiontempApi.md#inscriptiontempgetcommunicationsendersv1) | **GET** /1/object/inscriptiontemp/{pkiInscriptiontempID}/getCommunicationsenders | Retrieve Inscriptiontemp&#39;s Communicationsender
*ObjectInvoiceApi* | [**invoiceGetAttachmentsV1**](docs/Api/ObjectInvoiceApi.md#invoicegetattachmentsv1) | **GET** /1/object/invoice/{pkiInvoiceID}/getAttachments | Retrieve Invoice&#39;s Attachments
*ObjectInvoiceApi* | [**invoiceGetCommunicationCountV1**](docs/Api/ObjectInvoiceApi.md#invoicegetcommunicationcountv1) | **GET** /1/object/invoice/{pkiInvoiceID}/getCommunicationCount | Retrieve Communication count
*ObjectInvoiceApi* | [**invoiceGetCommunicationListV1**](docs/Api/ObjectInvoiceApi.md#invoicegetcommunicationlistv1) | **GET** /1/object/invoice/{pkiInvoiceID}/getCommunicationList | Retrieve Communication list
*ObjectInvoiceApi* | [**invoiceGetCommunicationrecipientsV1**](docs/Api/ObjectInvoiceApi.md#invoicegetcommunicationrecipientsv1) | **GET** /1/object/invoice/{pkiInvoiceID}/getCommunicationrecipients | Retrieve Invoice&#39;s Communicationrecipient
*ObjectInvoiceApi* | [**invoiceGetCommunicationsendersV1**](docs/Api/ObjectInvoiceApi.md#invoicegetcommunicationsendersv1) | **GET** /1/object/invoice/{pkiInvoiceID}/getCommunicationsenders | Retrieve Invoice&#39;s Communicationsender
*ObjectLanguageApi* | [**languageGetAutocompleteV2**](docs/Api/ObjectLanguageApi.md#languagegetautocompletev2) | **GET** /2/object/language/getAutocomplete/{sSelector} | Retrieve Languages and IDs
*ObjectModuleApi* | [**moduleGetAutocompleteV2**](docs/Api/ObjectModuleApi.md#modulegetautocompletev2) | **GET** /2/object/module/getAutocomplete/{sSelector} | Retrieve Modules and IDs
*ObjectModulegroupApi* | [**modulegroupGetAllV1**](docs/Api/ObjectModulegroupApi.md#modulegroupgetallv1) | **GET** /1/object/modulegroup/getAll/{eContext} | Retrieve all Modulegroups
*ObjectNotificationsectionApi* | [**notificationsectionGetNotificationtestsV1**](docs/Api/ObjectNotificationsectionApi.md#notificationsectiongetnotificationtestsv1) | **GET** /1/object/notificationsection/{pkiNotificationsectionID}/getNotificationtests | Retrieve an existing Notificationsection&#39;s Notificationtests
*ObjectNotificationtestApi* | [**notificationtestGetElementsV1**](docs/Api/ObjectNotificationtestApi.md#notificationtestgetelementsv1) | **GET** /1/object/notificationtest/{pkiNotificationtestID}/getElements | Retrieve an existing Notificationtest&#39;s Elements
*ObjectOtherincomeApi* | [**otherincomeGetCommunicationCountV1**](docs/Api/ObjectOtherincomeApi.md#otherincomegetcommunicationcountv1) | **GET** /1/object/otherincome/{pkiOtherincomeID}/getCommunicationCount | Retrieve Communication count
*ObjectOtherincomeApi* | [**otherincomeGetCommunicationListV1**](docs/Api/ObjectOtherincomeApi.md#otherincomegetcommunicationlistv1) | **GET** /1/object/otherincome/{pkiOtherincomeID}/getCommunicationList | Retrieve Communication list
*ObjectOtherincomeApi* | [**otherincomeGetCommunicationrecipientsV1**](docs/Api/ObjectOtherincomeApi.md#otherincomegetcommunicationrecipientsv1) | **GET** /1/object/otherincome/{pkiOtherincomeID}/getCommunicationrecipients | Retrieve Otherincome&#39;s Communicationrecipient
*ObjectOtherincomeApi* | [**otherincomeGetCommunicationsendersV1**](docs/Api/ObjectOtherincomeApi.md#otherincomegetcommunicationsendersv1) | **GET** /1/object/otherincome/{pkiOtherincomeID}/getCommunicationsenders | Retrieve Otherincome&#39;s Communicationsender
*ObjectPaymentgatewayApi* | [**paymentgatewayCreateObjectV1**](docs/Api/ObjectPaymentgatewayApi.md#paymentgatewaycreateobjectv1) | **POST** /1/object/paymentgateway | Create a new Paymentgateway
*ObjectPaymentgatewayApi* | [**paymentgatewayEditObjectV1**](docs/Api/ObjectPaymentgatewayApi.md#paymentgatewayeditobjectv1) | **PUT** /1/object/paymentgateway/{pkiPaymentgatewayID} | Edit an existing Paymentgateway
*ObjectPaymentgatewayApi* | [**paymentgatewayGetAutocompleteV2**](docs/Api/ObjectPaymentgatewayApi.md#paymentgatewaygetautocompletev2) | **GET** /2/object/paymentgateway/getAutocomplete/{sSelector} | Retrieve Paymentgateways and IDs
*ObjectPaymentgatewayApi* | [**paymentgatewayGetListV1**](docs/Api/ObjectPaymentgatewayApi.md#paymentgatewaygetlistv1) | **GET** /1/object/paymentgateway/getList | Retrieve Paymentgateway list
*ObjectPaymentgatewayApi* | [**paymentgatewayGetObjectV2**](docs/Api/ObjectPaymentgatewayApi.md#paymentgatewaygetobjectv2) | **GET** /2/object/paymentgateway/{pkiPaymentgatewayID} | Retrieve an existing Paymentgateway
*ObjectPaymenttermApi* | [**paymenttermCreateObjectV1**](docs/Api/ObjectPaymenttermApi.md#paymenttermcreateobjectv1) | **POST** /1/object/paymentterm | Create a new Paymentterm
*ObjectPaymenttermApi* | [**paymenttermEditObjectV1**](docs/Api/ObjectPaymenttermApi.md#paymenttermeditobjectv1) | **PUT** /1/object/paymentterm/{pkiPaymenttermID} | Edit an existing Paymentterm
*ObjectPaymenttermApi* | [**paymenttermGetAutocompleteV2**](docs/Api/ObjectPaymenttermApi.md#paymenttermgetautocompletev2) | **GET** /2/object/paymentterm/getAutocomplete/{sSelector} | Retrieve Paymentterms and IDs
*ObjectPaymenttermApi* | [**paymenttermGetListV1**](docs/Api/ObjectPaymenttermApi.md#paymenttermgetlistv1) | **GET** /1/object/paymentterm/getList | Retrieve Paymentterm list
*ObjectPaymenttermApi* | [**paymenttermGetObjectV2**](docs/Api/ObjectPaymenttermApi.md#paymenttermgetobjectv2) | **GET** /2/object/paymentterm/{pkiPaymenttermID} | Retrieve an existing Paymentterm
*ObjectPdfalevelApi* | [**pdfalevelGetAutocompleteV2**](docs/Api/ObjectPdfalevelApi.md#pdfalevelgetautocompletev2) | **GET** /2/object/pdfalevel/getAutocomplete/{sSelector} | Retrieve Pdfalevels and IDs
*ObjectPeriodApi* | [**periodGetAutocompleteV2**](docs/Api/ObjectPeriodApi.md#periodgetautocompletev2) | **GET** /2/object/period/getAutocomplete/{sSelector} | Retrieve Periods and IDs
*ObjectPermissionApi* | [**permissionCreateObjectV1**](docs/Api/ObjectPermissionApi.md#permissioncreateobjectv1) | **POST** /1/object/permission | Create a new Permission
*ObjectPermissionApi* | [**permissionDeleteObjectV1**](docs/Api/ObjectPermissionApi.md#permissiondeleteobjectv1) | **DELETE** /1/object/permission/{pkiPermissionID} | Delete an existing Permission
*ObjectPermissionApi* | [**permissionEditObjectV1**](docs/Api/ObjectPermissionApi.md#permissioneditobjectv1) | **PUT** /1/object/permission/{pkiPermissionID} | Edit an existing Permission
*ObjectPermissionApi* | [**permissionGetObjectV2**](docs/Api/ObjectPermissionApi.md#permissiongetobjectv2) | **GET** /2/object/permission/{pkiPermissionID} | Retrieve an existing Permission
*ObjectPhonetypeApi* | [**phonetypeGetAutocompleteV2**](docs/Api/ObjectPhonetypeApi.md#phonetypegetautocompletev2) | **GET** /2/object/phonetype/getAutocomplete/{sSelector} | Retrieve Phonetypes and IDs
*ObjectProvinceApi* | [**provinceGetAutocompleteV2**](docs/Api/ObjectProvinceApi.md#provincegetautocompletev2) | **GET** /2/object/province/getAutocomplete/{sSelector} | Retrieve Provinces and IDs
*ObjectRejectedoffertopurchaseApi* | [**rejectedoffertopurchaseGetCommunicationCountV1**](docs/Api/ObjectRejectedoffertopurchaseApi.md#rejectedoffertopurchasegetcommunicationcountv1) | **GET** /1/object/rejectedoffertopurchase/{pkiRejectedoffertopurchaseID}/getCommunicationCount | Retrieve Communication count
*ObjectRejectedoffertopurchaseApi* | [**rejectedoffertopurchaseGetCommunicationListV1**](docs/Api/ObjectRejectedoffertopurchaseApi.md#rejectedoffertopurchasegetcommunicationlistv1) | **GET** /1/object/rejectedoffertopurchase/{pkiRejectedoffertopurchaseID}/getCommunicationList | Retrieve Communication list
*ObjectRejectedoffertopurchaseApi* | [**rejectedoffertopurchaseGetCommunicationrecipientsV1**](docs/Api/ObjectRejectedoffertopurchaseApi.md#rejectedoffertopurchasegetcommunicationrecipientsv1) | **GET** /1/object/rejectedoffertopurchase/{pkiRejectedoffertopurchaseID}/getCommunicationrecipients | Retrieve Rejectedoffertopurchase&#39;s Communicationrecipient
*ObjectRejectedoffertopurchaseApi* | [**rejectedoffertopurchaseGetCommunicationsendersV1**](docs/Api/ObjectRejectedoffertopurchaseApi.md#rejectedoffertopurchasegetcommunicationsendersv1) | **GET** /1/object/rejectedoffertopurchase/{pkiRejectedoffertopurchaseID}/getCommunicationsenders | Retrieve Rejectedoffertopurchase&#39;s Communicationsender
*ObjectSecretquestionApi* | [**secretquestionGetAutocompleteV2**](docs/Api/ObjectSecretquestionApi.md#secretquestiongetautocompletev2) | **GET** /2/object/secretquestion/getAutocomplete/{sSelector} | Retrieve Secretquestions and IDs
*ObjectSessionhistoryApi* | [**sessionhistoryGetListV1**](docs/Api/ObjectSessionhistoryApi.md#sessionhistorygetlistv1) | **GET** /1/object/sessionhistory/getList | Retrieve Sessionhistory list
*ObjectSignatureApi* | [**signatureCreateObjectV1**](docs/Api/ObjectSignatureApi.md#signaturecreateobjectv1) | **POST** /1/object/signature | Create a new Signature
*ObjectSignatureApi* | [**signatureDeleteObjectV1**](docs/Api/ObjectSignatureApi.md#signaturedeleteobjectv1) | **DELETE** /1/object/signature/{pkiSignatureID} | Delete an existing Signature
*ObjectSignatureApi* | [**signatureEditObjectV1**](docs/Api/ObjectSignatureApi.md#signatureeditobjectv1) | **PUT** /1/object/signature/{pkiSignatureID} | Edit an existing Signature
*ObjectSignatureApi* | [**signatureGetObjectV2**](docs/Api/ObjectSignatureApi.md#signaturegetobjectv2) | **GET** /2/object/signature/{pkiSignatureID} | Retrieve an existing Signature
*ObjectSignatureApi* | [**signatureGetObjectV3**](docs/Api/ObjectSignatureApi.md#signaturegetobjectv3) | **GET** /3/object/signature/{pkiSignatureID} | Retrieve an existing Signature
*ObjectSignatureApi* | [**signatureGetSVGInitialsV1**](docs/Api/ObjectSignatureApi.md#signaturegetsvginitialsv1) | **GET** /1/object/signature/{pkiSignatureID}/getSVGInitials | Retrieve an existing Signature initial SVG
*ObjectSignatureApi* | [**signatureGetSVGSignatureV1**](docs/Api/ObjectSignatureApi.md#signaturegetsvgsignaturev1) | **GET** /1/object/signature/{pkiSignatureID}/getSVGSignature | Retrieve an existing Signature SVG
*ObjectSubnetApi* | [**subnetCreateObjectV1**](docs/Api/ObjectSubnetApi.md#subnetcreateobjectv1) | **POST** /1/object/subnet | Create a new Subnet
*ObjectSubnetApi* | [**subnetDeleteObjectV1**](docs/Api/ObjectSubnetApi.md#subnetdeleteobjectv1) | **DELETE** /1/object/subnet/{pkiSubnetID} | Delete an existing Subnet
*ObjectSubnetApi* | [**subnetEditObjectV1**](docs/Api/ObjectSubnetApi.md#subneteditobjectv1) | **PUT** /1/object/subnet/{pkiSubnetID} | Edit an existing Subnet
*ObjectSubnetApi* | [**subnetGetObjectV2**](docs/Api/ObjectSubnetApi.md#subnetgetobjectv2) | **GET** /2/object/subnet/{pkiSubnetID} | Retrieve an existing Subnet
*ObjectSupplyApi* | [**supplyCreateObjectV1**](docs/Api/ObjectSupplyApi.md#supplycreateobjectv1) | **POST** /1/object/supply | Create a new Supply
*ObjectSupplyApi* | [**supplyDeleteObjectV1**](docs/Api/ObjectSupplyApi.md#supplydeleteobjectv1) | **DELETE** /1/object/supply/{pkiSupplyID} | Delete an existing Supply
*ObjectSupplyApi* | [**supplyEditObjectV1**](docs/Api/ObjectSupplyApi.md#supplyeditobjectv1) | **PUT** /1/object/supply/{pkiSupplyID} | Edit an existing Supply
*ObjectSupplyApi* | [**supplyGetAutocompleteV2**](docs/Api/ObjectSupplyApi.md#supplygetautocompletev2) | **GET** /2/object/supply/getAutocomplete/{sSelector} | Retrieve Supplys and IDs
*ObjectSupplyApi* | [**supplyGetListV1**](docs/Api/ObjectSupplyApi.md#supplygetlistv1) | **GET** /1/object/supply/getList | Retrieve Supply list
*ObjectSupplyApi* | [**supplyGetObjectV2**](docs/Api/ObjectSupplyApi.md#supplygetobjectv2) | **GET** /2/object/supply/{pkiSupplyID} | Retrieve an existing Supply
*ObjectSystemconfigurationApi* | [**systemconfigurationEditObjectV1**](docs/Api/ObjectSystemconfigurationApi.md#systemconfigurationeditobjectv1) | **PUT** /1/object/systemconfiguration/{pkiSystemconfigurationID} | Edit an existing Systemconfiguration
*ObjectSystemconfigurationApi* | [**systemconfigurationGetObjectV2**](docs/Api/ObjectSystemconfigurationApi.md#systemconfigurationgetobjectv2) | **GET** /2/object/systemconfiguration/{pkiSystemconfigurationID} | Retrieve an existing Systemconfiguration
*ObjectTaxassignmentApi* | [**taxassignmentGetAutocompleteV2**](docs/Api/ObjectTaxassignmentApi.md#taxassignmentgetautocompletev2) | **GET** /2/object/taxassignment/getAutocomplete/{sSelector} | Retrieve Taxassignments and IDs
*ObjectTimezoneApi* | [**timezoneGetAutocompleteV2**](docs/Api/ObjectTimezoneApi.md#timezonegetautocompletev2) | **GET** /2/object/timezone/getAutocomplete/{sSelector} | Retrieve Timezones and IDs
*ObjectTranqcontractApi* | [**tranqcontractGetCommunicationCountV1**](docs/Api/ObjectTranqcontractApi.md#tranqcontractgetcommunicationcountv1) | **GET** /1/object/tranqcontract/{pkiTranqcontractID}/getCommunicationCount | Retrieve Communication count
*ObjectTranqcontractApi* | [**tranqcontractGetCommunicationListV1**](docs/Api/ObjectTranqcontractApi.md#tranqcontractgetcommunicationlistv1) | **GET** /1/object/tranqcontract/{pkiTranqcontractID}/getCommunicationList | Retrieve Communication list
*ObjectTranqcontractApi* | [**tranqcontractGetCommunicationrecipientsV1**](docs/Api/ObjectTranqcontractApi.md#tranqcontractgetcommunicationrecipientsv1) | **GET** /1/object/tranqcontract/{pkiTranqcontractID}/getCommunicationrecipients | Retrieve Tranqcontract&#39;s Communicationrecipient
*ObjectTranqcontractApi* | [**tranqcontractGetCommunicationsendersV1**](docs/Api/ObjectTranqcontractApi.md#tranqcontractgetcommunicationsendersv1) | **GET** /1/object/tranqcontract/{pkiTranqcontractID}/getCommunicationsenders | Retrieve Tranqcontract&#39;s Communicationsender
*ObjectUserApi* | [**userCreateObjectV1**](docs/Api/ObjectUserApi.md#usercreateobjectv1) | **POST** /1/object/user | Create a new User
*ObjectUserApi* | [**userCreateObjectV2**](docs/Api/ObjectUserApi.md#usercreateobjectv2) | **POST** /2/object/user | Create a new User
*ObjectUserApi* | [**userEditColleaguesV2**](docs/Api/ObjectUserApi.md#usereditcolleaguesv2) | **PUT** /2/object/user/{pkiUserID}/editColleagues | Edit multiple Colleagues
*ObjectUserApi* | [**userEditObjectV1**](docs/Api/ObjectUserApi.md#usereditobjectv1) | **PUT** /1/object/user/{pkiUserID} | Edit an existing User
*ObjectUserApi* | [**userEditPermissionsV1**](docs/Api/ObjectUserApi.md#usereditpermissionsv1) | **PUT** /1/object/user/{pkiUserID}/editPermissions | Edit multiple Permissions
*ObjectUserApi* | [**userGetApikeysV1**](docs/Api/ObjectUserApi.md#usergetapikeysv1) | **GET** /1/object/user/{pkiUserID}/getApikeys | Retrieve an existing User&#39;s Apikeys
*ObjectUserApi* | [**userGetAutocompleteV2**](docs/Api/ObjectUserApi.md#usergetautocompletev2) | **GET** /2/object/user/getAutocomplete/{sSelector} | Retrieve Users and IDs
*ObjectUserApi* | [**userGetColleaguesV2**](docs/Api/ObjectUserApi.md#usergetcolleaguesv2) | **GET** /2/object/user/{pkiUserID}/getColleagues | Retrieve an existing User&#39;s Colleagues
*ObjectUserApi* | [**userGetEffectivePermissionsV1**](docs/Api/ObjectUserApi.md#usergeteffectivepermissionsv1) | **GET** /1/object/user/{pkiUserID}/getEffectivePermissions | Retrieve an existing User&#39;s Effective Permissions
*ObjectUserApi* | [**userGetListV1**](docs/Api/ObjectUserApi.md#usergetlistv1) | **GET** /1/object/user/getList | Retrieve User list
*ObjectUserApi* | [**userGetObjectV2**](docs/Api/ObjectUserApi.md#usergetobjectv2) | **GET** /2/object/user/{pkiUserID} | Retrieve an existing User
*ObjectUserApi* | [**userGetPermissionsV1**](docs/Api/ObjectUserApi.md#usergetpermissionsv1) | **GET** /1/object/user/{pkiUserID}/getPermissions | Retrieve an existing User&#39;s Permissions
*ObjectUserApi* | [**userGetSubnetsV1**](docs/Api/ObjectUserApi.md#usergetsubnetsv1) | **GET** /1/object/user/{pkiUserID}/getSubnets | Retrieve an existing User&#39;s Subnets
*ObjectUserApi* | [**userGetUsergroupexternalsV1**](docs/Api/ObjectUserApi.md#usergetusergroupexternalsv1) | **GET** /1/object/user/{pkiUserID}/getUsergroupexternals | Get User&#39;s Usergroupexternals
*ObjectUserApi* | [**userGetUsergroupsV1**](docs/Api/ObjectUserApi.md#usergetusergroupsv1) | **GET** /1/object/user/{pkiUserID}/getUsergroups | Get User&#39;s Usergroups
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
*ObjectUsergroupexternalApi* | [**usergroupexternalCreateObjectV1**](docs/Api/ObjectUsergroupexternalApi.md#usergroupexternalcreateobjectv1) | **POST** /1/object/usergroupexternal | Create a new Usergroupexternal
*ObjectUsergroupexternalApi* | [**usergroupexternalDeleteObjectV1**](docs/Api/ObjectUsergroupexternalApi.md#usergroupexternaldeleteobjectv1) | **DELETE** /1/object/usergroupexternal/{pkiUsergroupexternalID} | Delete an existing Usergroupexternal
*ObjectUsergroupexternalApi* | [**usergroupexternalEditObjectV1**](docs/Api/ObjectUsergroupexternalApi.md#usergroupexternaleditobjectv1) | **PUT** /1/object/usergroupexternal/{pkiUsergroupexternalID} | Edit an existing Usergroupexternal
*ObjectUsergroupexternalApi* | [**usergroupexternalGetAutocompleteV2**](docs/Api/ObjectUsergroupexternalApi.md#usergroupexternalgetautocompletev2) | **GET** /2/object/usergroupexternal/getAutocomplete/{sSelector} | Retrieve Usergroupexternals and IDs
*ObjectUsergroupexternalApi* | [**usergroupexternalGetListV1**](docs/Api/ObjectUsergroupexternalApi.md#usergroupexternalgetlistv1) | **GET** /1/object/usergroupexternal/getList | Retrieve Usergroupexternal list
*ObjectUsergroupexternalApi* | [**usergroupexternalGetObjectV2**](docs/Api/ObjectUsergroupexternalApi.md#usergroupexternalgetobjectv2) | **GET** /2/object/usergroupexternal/{pkiUsergroupexternalID} | Retrieve an existing Usergroupexternal
*ObjectUsergroupexternalApi* | [**usergroupexternalGetUsergroupexternalmembershipsV1**](docs/Api/ObjectUsergroupexternalApi.md#usergroupexternalgetusergroupexternalmembershipsv1) | **GET** /1/object/usergroupexternal/{pkiUsergroupexternalID}/getUsergroupexternalmemberships | Retrieve an existing Usergroupexternal&#39;s Usergroupexternalmemberships
*ObjectUsergroupexternalApi* | [**usergroupexternalGetUsergroupsV1**](docs/Api/ObjectUsergroupexternalApi.md#usergroupexternalgetusergroupsv1) | **GET** /1/object/usergroupexternal/{pkiUsergroupexternalID}/getUsergroups | Get Usergroupexternal&#39;s Usergroups
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
*ObjectWebhookApi* | [**webhookCreateObjectV2**](docs/Api/ObjectWebhookApi.md#webhookcreateobjectv2) | **POST** /2/object/webhook | Create a new Webhook
*ObjectWebhookApi* | [**webhookDeleteObjectV1**](docs/Api/ObjectWebhookApi.md#webhookdeleteobjectv1) | **DELETE** /1/object/webhook/{pkiWebhookID} | Delete an existing Webhook
*ObjectWebhookApi* | [**webhookEditObjectV1**](docs/Api/ObjectWebhookApi.md#webhookeditobjectv1) | **PUT** /1/object/webhook/{pkiWebhookID} | Edit an existing Webhook
*ObjectWebhookApi* | [**webhookGetHistoryV1**](docs/Api/ObjectWebhookApi.md#webhookgethistoryv1) | **GET** /1/object/webhook/{pkiWebhookID}/getHistory | Retrieve the logs for recent Webhook calls
*ObjectWebhookApi* | [**webhookGetListV1**](docs/Api/ObjectWebhookApi.md#webhookgetlistv1) | **GET** /1/object/webhook/getList | Retrieve Webhook list
*ObjectWebhookApi* | [**webhookGetObjectV2**](docs/Api/ObjectWebhookApi.md#webhookgetobjectv2) | **GET** /2/object/webhook/{pkiWebhookID} | Retrieve an existing Webhook
*ObjectWebhookApi* | [**webhookRegenerateApikeyV1**](docs/Api/ObjectWebhookApi.md#webhookregenerateapikeyv1) | **POST** /1/object/webhook/{pkiWebhookID}/regenerateApikey | Regenerate the Apikey
*ObjectWebhookApi* | [**webhookSendWebhookV1**](docs/Api/ObjectWebhookApi.md#webhooksendwebhookv1) | **POST** /1/object/webhook/sendWebhook | Emit a Webhook event
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

- [ActivesessionGenerateFederationTokenV1Request](docs/Model/ActivesessionGenerateFederationTokenV1Request.md)
- [ActivesessionGenerateFederationTokenV1Response](docs/Model/ActivesessionGenerateFederationTokenV1Response.md)
- [ActivesessionGenerateFederationTokenV1ResponseMPayload](docs/Model/ActivesessionGenerateFederationTokenV1ResponseMPayload.md)
- [ActivesessionGetCurrentV1Response](docs/Model/ActivesessionGetCurrentV1Response.md)
- [ActivesessionGetCurrentV1ResponseMPayload](docs/Model/ActivesessionGetCurrentV1ResponseMPayload.md)
- [ActivesessionGetCurrentV2Response](docs/Model/ActivesessionGetCurrentV2Response.md)
- [ActivesessionGetCurrentV2ResponseMPayload](docs/Model/ActivesessionGetCurrentV2ResponseMPayload.md)
- [ActivesessionGetListV1Response](docs/Model/ActivesessionGetListV1Response.md)
- [ActivesessionGetListV1ResponseMPayload](docs/Model/ActivesessionGetListV1ResponseMPayload.md)
- [ActivesessionListElement](docs/Model/ActivesessionListElement.md)
- [ActivesessionResponse](docs/Model/ActivesessionResponse.md)
- [ActivesessionResponseCompound](docs/Model/ActivesessionResponseCompound.md)
- [ActivesessionResponseCompoundApikey](docs/Model/ActivesessionResponseCompoundApikey.md)
- [ActivesessionResponseCompoundUser](docs/Model/ActivesessionResponseCompoundUser.md)
- [AddressRequest](docs/Model/AddressRequest.md)
- [AddressRequestCompound](docs/Model/AddressRequestCompound.md)
- [AddressResponse](docs/Model/AddressResponse.md)
- [AddressResponseCompound](docs/Model/AddressResponseCompound.md)
- [ApikeyCreateObjectV2Request](docs/Model/ApikeyCreateObjectV2Request.md)
- [ApikeyCreateObjectV2Response](docs/Model/ApikeyCreateObjectV2Response.md)
- [ApikeyCreateObjectV2ResponseMPayload](docs/Model/ApikeyCreateObjectV2ResponseMPayload.md)
- [ApikeyEditObjectV1Request](docs/Model/ApikeyEditObjectV1Request.md)
- [ApikeyEditObjectV1Response](docs/Model/ApikeyEditObjectV1Response.md)
- [ApikeyEditPermissionsV1Request](docs/Model/ApikeyEditPermissionsV1Request.md)
- [ApikeyEditPermissionsV1Response](docs/Model/ApikeyEditPermissionsV1Response.md)
- [ApikeyEditPermissionsV1ResponseMPayload](docs/Model/ApikeyEditPermissionsV1ResponseMPayload.md)
- [ApikeyGenerateDelegatedCredentialsV1Request](docs/Model/ApikeyGenerateDelegatedCredentialsV1Request.md)
- [ApikeyGenerateDelegatedCredentialsV1Response](docs/Model/ApikeyGenerateDelegatedCredentialsV1Response.md)
- [ApikeyGenerateDelegatedCredentialsV1ResponseMPayload](docs/Model/ApikeyGenerateDelegatedCredentialsV1ResponseMPayload.md)
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
- [AttachmentResponse](docs/Model/AttachmentResponse.md)
- [AttachmentResponseCompound](docs/Model/AttachmentResponseCompound.md)
- [AttachmentlogResponse](docs/Model/AttachmentlogResponse.md)
- [AttachmentlogResponseCompound](docs/Model/AttachmentlogResponseCompound.md)
- [AttemptResponse](docs/Model/AttemptResponse.md)
- [AttemptResponseCompound](docs/Model/AttemptResponseCompound.md)
- [AuthenticationexternalAutocompleteElementResponse](docs/Model/AuthenticationexternalAutocompleteElementResponse.md)
- [AuthenticationexternalCreateObjectV1Request](docs/Model/AuthenticationexternalCreateObjectV1Request.md)
- [AuthenticationexternalCreateObjectV1Response](docs/Model/AuthenticationexternalCreateObjectV1Response.md)
- [AuthenticationexternalCreateObjectV1ResponseMPayload](docs/Model/AuthenticationexternalCreateObjectV1ResponseMPayload.md)
- [AuthenticationexternalDeleteObjectV1Response](docs/Model/AuthenticationexternalDeleteObjectV1Response.md)
- [AuthenticationexternalEditObjectV1Request](docs/Model/AuthenticationexternalEditObjectV1Request.md)
- [AuthenticationexternalEditObjectV1Response](docs/Model/AuthenticationexternalEditObjectV1Response.md)
- [AuthenticationexternalGetAutocompleteV2Response](docs/Model/AuthenticationexternalGetAutocompleteV2Response.md)
- [AuthenticationexternalGetAutocompleteV2ResponseMPayload](docs/Model/AuthenticationexternalGetAutocompleteV2ResponseMPayload.md)
- [AuthenticationexternalGetListV1Response](docs/Model/AuthenticationexternalGetListV1Response.md)
- [AuthenticationexternalGetListV1ResponseMPayload](docs/Model/AuthenticationexternalGetListV1ResponseMPayload.md)
- [AuthenticationexternalGetObjectV2Response](docs/Model/AuthenticationexternalGetObjectV2Response.md)
- [AuthenticationexternalGetObjectV2ResponseMPayload](docs/Model/AuthenticationexternalGetObjectV2ResponseMPayload.md)
- [AuthenticationexternalListElement](docs/Model/AuthenticationexternalListElement.md)
- [AuthenticationexternalRequest](docs/Model/AuthenticationexternalRequest.md)
- [AuthenticationexternalRequestCompound](docs/Model/AuthenticationexternalRequestCompound.md)
- [AuthenticationexternalResetAuthorizationV1Response](docs/Model/AuthenticationexternalResetAuthorizationV1Response.md)
- [AuthenticationexternalResponse](docs/Model/AuthenticationexternalResponse.md)
- [AuthenticationexternalResponseCompound](docs/Model/AuthenticationexternalResponseCompound.md)
- [BankaccountAutocompleteElementResponse](docs/Model/BankaccountAutocompleteElementResponse.md)
- [BankaccountGetAutocompleteV2Response](docs/Model/BankaccountGetAutocompleteV2Response.md)
- [BankaccountGetAutocompleteV2ResponseMPayload](docs/Model/BankaccountGetAutocompleteV2ResponseMPayload.md)
- [BillingentityexternalAutocompleteElementResponse](docs/Model/BillingentityexternalAutocompleteElementResponse.md)
- [BillingentityexternalGenerateFederationTokenV1Request](docs/Model/BillingentityexternalGenerateFederationTokenV1Request.md)
- [BillingentityexternalGenerateFederationTokenV1Response](docs/Model/BillingentityexternalGenerateFederationTokenV1Response.md)
- [BillingentityexternalGenerateFederationTokenV1ResponseMPayload](docs/Model/BillingentityexternalGenerateFederationTokenV1ResponseMPayload.md)
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
- [BrandingCreateObjectV2Request](docs/Model/BrandingCreateObjectV2Request.md)
- [BrandingCreateObjectV2Response](docs/Model/BrandingCreateObjectV2Response.md)
- [BrandingCreateObjectV2ResponseMPayload](docs/Model/BrandingCreateObjectV2ResponseMPayload.md)
- [BrandingEditObjectV2Request](docs/Model/BrandingEditObjectV2Request.md)
- [BrandingEditObjectV2Response](docs/Model/BrandingEditObjectV2Response.md)
- [BrandingGetAutocompleteV2Response](docs/Model/BrandingGetAutocompleteV2Response.md)
- [BrandingGetAutocompleteV2ResponseMPayload](docs/Model/BrandingGetAutocompleteV2ResponseMPayload.md)
- [BrandingGetListV1Response](docs/Model/BrandingGetListV1Response.md)
- [BrandingGetListV1ResponseMPayload](docs/Model/BrandingGetListV1ResponseMPayload.md)
- [BrandingGetObjectV3Response](docs/Model/BrandingGetObjectV3Response.md)
- [BrandingGetObjectV3ResponseMPayload](docs/Model/BrandingGetObjectV3ResponseMPayload.md)
- [BrandingListElement](docs/Model/BrandingListElement.md)
- [BrandingRequestCompoundV2](docs/Model/BrandingRequestCompoundV2.md)
- [BrandingRequestV2](docs/Model/BrandingRequestV2.md)
- [BrandingResponseCompoundV3](docs/Model/BrandingResponseCompoundV3.md)
- [BrandingResponseV3](docs/Model/BrandingResponseV3.md)
- [BuyercontractGetCommunicationCountV1Response](docs/Model/BuyercontractGetCommunicationCountV1Response.md)
- [BuyercontractGetCommunicationCountV1ResponseMPayload](docs/Model/BuyercontractGetCommunicationCountV1ResponseMPayload.md)
- [BuyercontractGetCommunicationListV1Response](docs/Model/BuyercontractGetCommunicationListV1Response.md)
- [BuyercontractGetCommunicationListV1ResponseMPayload](docs/Model/BuyercontractGetCommunicationListV1ResponseMPayload.md)
- [BuyercontractGetCommunicationrecipientsV1Response](docs/Model/BuyercontractGetCommunicationrecipientsV1Response.md)
- [BuyercontractGetCommunicationrecipientsV1ResponseMPayload](docs/Model/BuyercontractGetCommunicationrecipientsV1ResponseMPayload.md)
- [BuyercontractGetCommunicationsendersV1Response](docs/Model/BuyercontractGetCommunicationsendersV1Response.md)
- [BuyercontractGetCommunicationsendersV1ResponseMPayload](docs/Model/BuyercontractGetCommunicationsendersV1ResponseMPayload.md)
- [ClonehistoryGetListV1Response](docs/Model/ClonehistoryGetListV1Response.md)
- [ClonehistoryGetListV1ResponseMPayload](docs/Model/ClonehistoryGetListV1ResponseMPayload.md)
- [ClonehistoryListElement](docs/Model/ClonehistoryListElement.md)
- [ColleagueRequestCompoundV2](docs/Model/ColleagueRequestCompoundV2.md)
- [ColleagueRequestV2](docs/Model/ColleagueRequestV2.md)
- [ColleagueResponseCompoundV2](docs/Model/ColleagueResponseCompoundV2.md)
- [ColleagueResponseV2](docs/Model/ColleagueResponseV2.md)
- [CommonAudit](docs/Model/CommonAudit.md)
- [CommonAuditdetail](docs/Model/CommonAuditdetail.md)
- [CommonFile](docs/Model/CommonFile.md)
- [CommonGetListV1ResponseMPayload](docs/Model/CommonGetListV1ResponseMPayload.md)
- [CommonGetReportV1Response](docs/Model/CommonGetReportV1Response.md)
- [CommonGetReportV1ResponseMPayload](docs/Model/CommonGetReportV1ResponseMPayload.md)
- [CommonReport](docs/Model/CommonReport.md)
- [CommonReportcell](docs/Model/CommonReportcell.md)
- [CommonReportcellstyle](docs/Model/CommonReportcellstyle.md)
- [CommonReportcolumn](docs/Model/CommonReportcolumn.md)
- [CommonReportgroup](docs/Model/CommonReportgroup.md)
- [CommonReportgroupParameter](docs/Model/CommonReportgroupParameter.md)
- [CommonReportrow](docs/Model/CommonReportrow.md)
- [CommonReportsection](docs/Model/CommonReportsection.md)
- [CommonReportsubsection](docs/Model/CommonReportsubsection.md)
- [CommonReportsubsectionpart](docs/Model/CommonReportsubsectionpart.md)
- [CommonResponse](docs/Model/CommonResponse.md)
- [CommonResponseError](docs/Model/CommonResponseError.md)
- [CommonResponseErrorCreditcardValidation](docs/Model/CommonResponseErrorCreditcardValidation.md)
- [CommonResponseErrorEzsignformValidation](docs/Model/CommonResponseErrorEzsignformValidation.md)
- [CommonResponseErrorSTemporaryFileUrl](docs/Model/CommonResponseErrorSTemporaryFileUrl.md)
- [CommonResponseErrorTooManyRequests](docs/Model/CommonResponseErrorTooManyRequests.md)
- [CommonResponseErrorWrongFranchiseoffice](docs/Model/CommonResponseErrorWrongFranchiseoffice.md)
- [CommonResponseFilter](docs/Model/CommonResponseFilter.md)
- [CommonResponseGetList](docs/Model/CommonResponseGetList.md)
- [CommonResponseObjDebug](docs/Model/CommonResponseObjDebug.md)
- [CommonResponseObjDebugPayload](docs/Model/CommonResponseObjDebugPayload.md)
- [CommonResponseObjDebugPayloadGetList](docs/Model/CommonResponseObjDebugPayloadGetList.md)
- [CommonResponseObjSQLQuery](docs/Model/CommonResponseObjSQLQuery.md)
- [CommonResponseRedirectSSecretquestionTextX](docs/Model/CommonResponseRedirectSSecretquestionTextX.md)
- [CommonResponseWarning](docs/Model/CommonResponseWarning.md)
- [CommonWebhook](docs/Model/CommonWebhook.md)
- [CommunicationRequest](docs/Model/CommunicationRequest.md)
- [CommunicationRequestCompound](docs/Model/CommunicationRequestCompound.md)
- [CommunicationSendV1Request](docs/Model/CommunicationSendV1Request.md)
- [CommunicationSendV1Response](docs/Model/CommunicationSendV1Response.md)
- [CommunicationSendV1ResponseMPayload](docs/Model/CommunicationSendV1ResponseMPayload.md)
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
- [ComputedEEzsignfolderAccess](docs/Model/ComputedEEzsignfolderAccess.md)
- [ComputedEEzsignimportfolderStatus](docs/Model/ComputedEEzsignimportfolderStatus.md)
- [ContactRequest](docs/Model/ContactRequest.md)
- [ContactRequestCompound](docs/Model/ContactRequestCompound.md)
- [ContactRequestCompoundV2](docs/Model/ContactRequestCompoundV2.md)
- [ContactRequestV2](docs/Model/ContactRequestV2.md)
- [ContactResponse](docs/Model/ContactResponse.md)
- [ContactResponseCompound](docs/Model/ContactResponseCompound.md)
- [ContactinformationsRequest](docs/Model/ContactinformationsRequest.md)
- [ContactinformationsRequestCompound](docs/Model/ContactinformationsRequestCompound.md)
- [ContactinformationsRequestCompoundV2](docs/Model/ContactinformationsRequestCompoundV2.md)
- [ContactinformationsRequestV2](docs/Model/ContactinformationsRequestV2.md)
- [ContactinformationsResponse](docs/Model/ContactinformationsResponse.md)
- [ContactinformationsResponseCompound](docs/Model/ContactinformationsResponseCompound.md)
- [ContacttitleAutocompleteElementResponse](docs/Model/ContacttitleAutocompleteElementResponse.md)
- [ContacttitleGetAutocompleteV2Response](docs/Model/ContacttitleGetAutocompleteV2Response.md)
- [ContacttitleGetAutocompleteV2ResponseMPayload](docs/Model/ContacttitleGetAutocompleteV2ResponseMPayload.md)
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
- [CountryAutocompleteElementResponse](docs/Model/CountryAutocompleteElementResponse.md)
- [CountryGetAutocompleteV2Response](docs/Model/CountryGetAutocompleteV2Response.md)
- [CountryGetAutocompleteV2ResponseMPayload](docs/Model/CountryGetAutocompleteV2ResponseMPayload.md)
- [CreditcardclientAutocompleteElementResponse](docs/Model/CreditcardclientAutocompleteElementResponse.md)
- [CreditcardclientCreateObjectV1Request](docs/Model/CreditcardclientCreateObjectV1Request.md)
- [CreditcardclientCreateObjectV1Response](docs/Model/CreditcardclientCreateObjectV1Response.md)
- [CreditcardclientCreateObjectV1ResponseMPayload](docs/Model/CreditcardclientCreateObjectV1ResponseMPayload.md)
- [CreditcardclientDeleteObjectV1Response](docs/Model/CreditcardclientDeleteObjectV1Response.md)
- [CreditcardclientEditObjectV1Request](docs/Model/CreditcardclientEditObjectV1Request.md)
- [CreditcardclientEditObjectV1Response](docs/Model/CreditcardclientEditObjectV1Response.md)
- [CreditcardclientGetAutocompleteV2Response](docs/Model/CreditcardclientGetAutocompleteV2Response.md)
- [CreditcardclientGetAutocompleteV2ResponseMPayload](docs/Model/CreditcardclientGetAutocompleteV2ResponseMPayload.md)
- [CreditcardclientGetListV1Response](docs/Model/CreditcardclientGetListV1Response.md)
- [CreditcardclientGetListV1ResponseMPayload](docs/Model/CreditcardclientGetListV1ResponseMPayload.md)
- [CreditcardclientGetObjectV2Response](docs/Model/CreditcardclientGetObjectV2Response.md)
- [CreditcardclientGetObjectV2ResponseMPayload](docs/Model/CreditcardclientGetObjectV2ResponseMPayload.md)
- [CreditcardclientListElement](docs/Model/CreditcardclientListElement.md)
- [CreditcardclientPatchObjectV1Request](docs/Model/CreditcardclientPatchObjectV1Request.md)
- [CreditcardclientPatchObjectV1Response](docs/Model/CreditcardclientPatchObjectV1Response.md)
- [CreditcardclientRequest](docs/Model/CreditcardclientRequest.md)
- [CreditcardclientRequestCompound](docs/Model/CreditcardclientRequestCompound.md)
- [CreditcardclientRequestPatch](docs/Model/CreditcardclientRequestPatch.md)
- [CreditcardclientResponse](docs/Model/CreditcardclientResponse.md)
- [CreditcardclientResponseCompound](docs/Model/CreditcardclientResponseCompound.md)
- [CreditcarddetailRequest](docs/Model/CreditcarddetailRequest.md)
- [CreditcarddetailResponse](docs/Model/CreditcarddetailResponse.md)
- [CreditcarddetailResponseCompound](docs/Model/CreditcarddetailResponseCompound.md)
- [CreditcardmerchantAutocompleteElementResponse](docs/Model/CreditcardmerchantAutocompleteElementResponse.md)
- [CreditcardmerchantGetAutocompleteV2Response](docs/Model/CreditcardmerchantGetAutocompleteV2Response.md)
- [CreditcardmerchantGetAutocompleteV2ResponseMPayload](docs/Model/CreditcardmerchantGetAutocompleteV2ResponseMPayload.md)
- [CreditcardmerchantGetListV1Response](docs/Model/CreditcardmerchantGetListV1Response.md)
- [CreditcardmerchantGetListV1ResponseMPayload](docs/Model/CreditcardmerchantGetListV1ResponseMPayload.md)
- [CreditcardmerchantGetObjectV2Response](docs/Model/CreditcardmerchantGetObjectV2Response.md)
- [CreditcardmerchantGetObjectV2ResponseMPayload](docs/Model/CreditcardmerchantGetObjectV2ResponseMPayload.md)
- [CreditcardmerchantListElement](docs/Model/CreditcardmerchantListElement.md)
- [CreditcardmerchantRequest](docs/Model/CreditcardmerchantRequest.md)
- [CreditcardmerchantRequestCompound](docs/Model/CreditcardmerchantRequestCompound.md)
- [CreditcardmerchantResponse](docs/Model/CreditcardmerchantResponse.md)
- [CreditcardmerchantResponseCompound](docs/Model/CreditcardmerchantResponseCompound.md)
- [CreditcardtypeAutocompleteElementResponse](docs/Model/CreditcardtypeAutocompleteElementResponse.md)
- [CreditcardtypeGetAutocompleteV2Response](docs/Model/CreditcardtypeGetAutocompleteV2Response.md)
- [CreditcardtypeGetAutocompleteV2ResponseMPayload](docs/Model/CreditcardtypeGetAutocompleteV2ResponseMPayload.md)
- [CurrencyAutocompleteElementResponse](docs/Model/CurrencyAutocompleteElementResponse.md)
- [CurrencyGetAutocompleteV2Response](docs/Model/CurrencyGetAutocompleteV2Response.md)
- [CurrencyGetAutocompleteV2ResponseMPayload](docs/Model/CurrencyGetAutocompleteV2ResponseMPayload.md)
- [CustomApikey](docs/Model/CustomApikey.md)
- [CustomApikeyfederation](docs/Model/CustomApikeyfederation.md)
- [CustomAttachmentResponse](docs/Model/CustomAttachmentResponse.md)
- [CustomAttachmentdocumenttypeResponse](docs/Model/CustomAttachmentdocumenttypeResponse.md)
- [CustomBrandingResponse](docs/Model/CustomBrandingResponse.md)
- [CustomCommunicationListElementResponse](docs/Model/CustomCommunicationListElementResponse.md)
- [CustomCommunicationattachmentRequest](docs/Model/CustomCommunicationattachmentRequest.md)
- [CustomCommunicationrecipientsgroupResponse](docs/Model/CustomCommunicationrecipientsgroupResponse.md)
- [CustomCommunicationrecipientsrecipientResponse](docs/Model/CustomCommunicationrecipientsrecipientResponse.md)
- [CustomCommunicationsenderRequest](docs/Model/CustomCommunicationsenderRequest.md)
- [CustomCommunicationsenderResponse](docs/Model/CustomCommunicationsenderResponse.md)
- [CustomContactNameResponse](docs/Model/CustomContactNameResponse.md)
- [CustomCreateEzsignelementsPositionedByWordRequest](docs/Model/CustomCreateEzsignelementsPositionedByWordRequest.md)
- [CustomCreditcardRequest](docs/Model/CustomCreditcardRequest.md)
- [CustomCreditcardtransactionResponse](docs/Model/CustomCreditcardtransactionResponse.md)
- [CustomCreditcardtransactionresponseResponse](docs/Model/CustomCreditcardtransactionresponseResponse.md)
- [CustomDiscussionconfigurationResponse](docs/Model/CustomDiscussionconfigurationResponse.md)
- [CustomDnsrecordResponse](docs/Model/CustomDnsrecordResponse.md)
- [CustomDropdownElementRequest](docs/Model/CustomDropdownElementRequest.md)
- [CustomDropdownElementRequestCompound](docs/Model/CustomDropdownElementRequestCompound.md)
- [CustomDropdownElementResponse](docs/Model/CustomDropdownElementResponse.md)
- [CustomDropdownElementResponseCompound](docs/Model/CustomDropdownElementResponseCompound.md)
- [CustomEWebhookEzsignevent](docs/Model/CustomEWebhookEzsignevent.md)
- [CustomEzmaxinvoicingEzsigndocumentResponse](docs/Model/CustomEzmaxinvoicingEzsigndocumentResponse.md)
- [CustomEzmaxinvoicingEzsignfolderResponse](docs/Model/CustomEzmaxinvoicingEzsignfolderResponse.md)
- [CustomEzmaxpricingResponse](docs/Model/CustomEzmaxpricingResponse.md)
- [CustomEzsigndocumentEzsignsignaturesAutomaticResponse](docs/Model/CustomEzsigndocumentEzsignsignaturesAutomaticResponse.md)
- [CustomEzsigndocumentRequest](docs/Model/CustomEzsigndocumentRequest.md)
- [CustomEzsignfolderEzsignsignaturesAutomaticResponse](docs/Model/CustomEzsignfolderEzsignsignaturesAutomaticResponse.md)
- [CustomEzsignfolderezsigntemplatepublicResponse](docs/Model/CustomEzsignfolderezsigntemplatepublicResponse.md)
- [CustomEzsignfolderezsigntemplatepublicSignerResponse](docs/Model/CustomEzsignfolderezsigntemplatepublicSignerResponse.md)
- [CustomEzsignfoldersignerassociationActionableElementResponse](docs/Model/CustomEzsignfoldersignerassociationActionableElementResponse.md)
- [CustomEzsignfoldersignerassociationstatusResponse](docs/Model/CustomEzsignfoldersignerassociationstatusResponse.md)
- [CustomEzsignfoldertransmissionResponse](docs/Model/CustomEzsignfoldertransmissionResponse.md)
- [CustomEzsignfoldertransmissionSignerResponse](docs/Model/CustomEzsignfoldertransmissionSignerResponse.md)
- [CustomEzsignfoldertypeResponse](docs/Model/CustomEzsignfoldertypeResponse.md)
- [CustomEzsignfoldertypeTemplateResponse](docs/Model/CustomEzsignfoldertypeTemplateResponse.md)
- [CustomEzsignformfieldRequest](docs/Model/CustomEzsignformfieldRequest.md)
- [CustomEzsignformfielderrorResponse](docs/Model/CustomEzsignformfielderrorResponse.md)
- [CustomEzsignformfielderrortestResponse](docs/Model/CustomEzsignformfielderrortestResponse.md)
- [CustomEzsignformfieldgroupCreateEzsignelementsPositionedByWordRequest](docs/Model/CustomEzsignformfieldgroupCreateEzsignelementsPositionedByWordRequest.md)
- [CustomEzsignformfieldgroupRequest](docs/Model/CustomEzsignformfieldgroupRequest.md)
- [CustomEzsignimportdocumentResponse](docs/Model/CustomEzsignimportdocumentResponse.md)
- [CustomEzsignsignatureCreateEzsignelementsPositionedByWordRequest](docs/Model/CustomEzsignsignatureCreateEzsignelementsPositionedByWordRequest.md)
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
- [CustomPrefillEzsignformValueRequest](docs/Model/CustomPrefillEzsignformValueRequest.md)
- [CustomTimezoneWithCodeResponse](docs/Model/CustomTimezoneWithCodeResponse.md)
- [CustomUserNameResponse](docs/Model/CustomUserNameResponse.md)
- [CustomWebhookResponse](docs/Model/CustomWebhookResponse.md)
- [CustomWebhooklogResponse](docs/Model/CustomWebhooklogResponse.md)
- [CustomWordPositionOccurenceResponse](docs/Model/CustomWordPositionOccurenceResponse.md)
- [CustomWordPositionWordResponse](docs/Model/CustomWordPositionWordResponse.md)
- [CustomerAutocompleteElementResponse](docs/Model/CustomerAutocompleteElementResponse.md)
- [CustomerCreateObjectV1Request](docs/Model/CustomerCreateObjectV1Request.md)
- [CustomerCreateObjectV1Response](docs/Model/CustomerCreateObjectV1Response.md)
- [CustomerCreateObjectV1ResponseMPayload](docs/Model/CustomerCreateObjectV1ResponseMPayload.md)
- [CustomerGetAutocompleteV2Response](docs/Model/CustomerGetAutocompleteV2Response.md)
- [CustomerGetAutocompleteV2ResponseMPayload](docs/Model/CustomerGetAutocompleteV2ResponseMPayload.md)
- [CustomerGetObjectV2Response](docs/Model/CustomerGetObjectV2Response.md)
- [CustomerGetObjectV2ResponseMPayload](docs/Model/CustomerGetObjectV2ResponseMPayload.md)
- [CustomerRequest](docs/Model/CustomerRequest.md)
- [CustomerRequestCompound](docs/Model/CustomerRequestCompound.md)
- [CustomerResponse](docs/Model/CustomerResponse.md)
- [CustomerResponseCompound](docs/Model/CustomerResponseCompound.md)
- [DepartmentAutocompleteElementResponse](docs/Model/DepartmentAutocompleteElementResponse.md)
- [DepartmentGetAutocompleteV2Response](docs/Model/DepartmentGetAutocompleteV2Response.md)
- [DepartmentGetAutocompleteV2ResponseMPayload](docs/Model/DepartmentGetAutocompleteV2ResponseMPayload.md)
- [DiscussionCreateObjectV1Request](docs/Model/DiscussionCreateObjectV1Request.md)
- [DiscussionCreateObjectV1Response](docs/Model/DiscussionCreateObjectV1Response.md)
- [DiscussionCreateObjectV1ResponseMPayload](docs/Model/DiscussionCreateObjectV1ResponseMPayload.md)
- [DiscussionDeleteObjectV1Response](docs/Model/DiscussionDeleteObjectV1Response.md)
- [DiscussionGetObjectV2Response](docs/Model/DiscussionGetObjectV2Response.md)
- [DiscussionGetObjectV2ResponseMPayload](docs/Model/DiscussionGetObjectV2ResponseMPayload.md)
- [DiscussionPatchObjectV1Request](docs/Model/DiscussionPatchObjectV1Request.md)
- [DiscussionPatchObjectV1Response](docs/Model/DiscussionPatchObjectV1Response.md)
- [DiscussionRequest](docs/Model/DiscussionRequest.md)
- [DiscussionRequestCompound](docs/Model/DiscussionRequestCompound.md)
- [DiscussionRequestPatch](docs/Model/DiscussionRequestPatch.md)
- [DiscussionResponse](docs/Model/DiscussionResponse.md)
- [DiscussionResponseCompound](docs/Model/DiscussionResponseCompound.md)
- [DiscussionUpdateDiscussionreadstatusV1Request](docs/Model/DiscussionUpdateDiscussionreadstatusV1Request.md)
- [DiscussionUpdateDiscussionreadstatusV1Response](docs/Model/DiscussionUpdateDiscussionreadstatusV1Response.md)
- [DiscussionmembershipCreateObjectV1Request](docs/Model/DiscussionmembershipCreateObjectV1Request.md)
- [DiscussionmembershipCreateObjectV1Response](docs/Model/DiscussionmembershipCreateObjectV1Response.md)
- [DiscussionmembershipCreateObjectV1ResponseMPayload](docs/Model/DiscussionmembershipCreateObjectV1ResponseMPayload.md)
- [DiscussionmembershipDeleteObjectV1Response](docs/Model/DiscussionmembershipDeleteObjectV1Response.md)
- [DiscussionmembershipRequest](docs/Model/DiscussionmembershipRequest.md)
- [DiscussionmembershipRequestCompound](docs/Model/DiscussionmembershipRequestCompound.md)
- [DiscussionmembershipResponse](docs/Model/DiscussionmembershipResponse.md)
- [DiscussionmembershipResponseCompound](docs/Model/DiscussionmembershipResponseCompound.md)
- [DiscussionmessageCreateObjectV1Request](docs/Model/DiscussionmessageCreateObjectV1Request.md)
- [DiscussionmessageCreateObjectV1Response](docs/Model/DiscussionmessageCreateObjectV1Response.md)
- [DiscussionmessageCreateObjectV1ResponseMPayload](docs/Model/DiscussionmessageCreateObjectV1ResponseMPayload.md)
- [DiscussionmessageDeleteObjectV1Response](docs/Model/DiscussionmessageDeleteObjectV1Response.md)
- [DiscussionmessagePatchObjectV1Request](docs/Model/DiscussionmessagePatchObjectV1Request.md)
- [DiscussionmessagePatchObjectV1Response](docs/Model/DiscussionmessagePatchObjectV1Response.md)
- [DiscussionmessageRequest](docs/Model/DiscussionmessageRequest.md)
- [DiscussionmessageRequestCompound](docs/Model/DiscussionmessageRequestCompound.md)
- [DiscussionmessageRequestPatch](docs/Model/DiscussionmessageRequestPatch.md)
- [DiscussionmessageResponse](docs/Model/DiscussionmessageResponse.md)
- [DiscussionmessageResponseCompound](docs/Model/DiscussionmessageResponseCompound.md)
- [DomainCreateObjectV1Request](docs/Model/DomainCreateObjectV1Request.md)
- [DomainCreateObjectV1Response](docs/Model/DomainCreateObjectV1Response.md)
- [DomainCreateObjectV1ResponseMPayload](docs/Model/DomainCreateObjectV1ResponseMPayload.md)
- [DomainDeleteObjectV1Response](docs/Model/DomainDeleteObjectV1Response.md)
- [DomainGetListV1Response](docs/Model/DomainGetListV1Response.md)
- [DomainGetListV1ResponseMPayload](docs/Model/DomainGetListV1ResponseMPayload.md)
- [DomainGetObjectV2Response](docs/Model/DomainGetObjectV2Response.md)
- [DomainGetObjectV2ResponseMPayload](docs/Model/DomainGetObjectV2ResponseMPayload.md)
- [DomainListElement](docs/Model/DomainListElement.md)
- [DomainRequest](docs/Model/DomainRequest.md)
- [DomainRequestCompound](docs/Model/DomainRequestCompound.md)
- [DomainResponse](docs/Model/DomainResponse.md)
- [DomainResponseCompound](docs/Model/DomainResponseCompound.md)
- [ElectronicfundstransferGetCommunicationCountV1Response](docs/Model/ElectronicfundstransferGetCommunicationCountV1Response.md)
- [ElectronicfundstransferGetCommunicationCountV1ResponseMPayload](docs/Model/ElectronicfundstransferGetCommunicationCountV1ResponseMPayload.md)
- [ElectronicfundstransferGetCommunicationListV1Response](docs/Model/ElectronicfundstransferGetCommunicationListV1Response.md)
- [ElectronicfundstransferGetCommunicationListV1ResponseMPayload](docs/Model/ElectronicfundstransferGetCommunicationListV1ResponseMPayload.md)
- [ElectronicfundstransferGetCommunicationrecipientsV1Response](docs/Model/ElectronicfundstransferGetCommunicationrecipientsV1Response.md)
- [ElectronicfundstransferGetCommunicationrecipientsV1ResponseMPayload](docs/Model/ElectronicfundstransferGetCommunicationrecipientsV1ResponseMPayload.md)
- [ElectronicfundstransferGetCommunicationsendersV1Response](docs/Model/ElectronicfundstransferGetCommunicationsendersV1Response.md)
- [ElectronicfundstransferGetCommunicationsendersV1ResponseMPayload](docs/Model/ElectronicfundstransferGetCommunicationsendersV1ResponseMPayload.md)
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
- [EnumReportdataType](docs/Model/EnumReportdataType.md)
- [EnumTextvalidation](docs/Model/EnumTextvalidation.md)
- [EnumVerticalalignment](docs/Model/EnumVerticalalignment.md)
- [EzdoctemplatedocumentAutocompleteElementResponse](docs/Model/EzdoctemplatedocumentAutocompleteElementResponse.md)
- [EzdoctemplatedocumentCreateObjectV1Request](docs/Model/EzdoctemplatedocumentCreateObjectV1Request.md)
- [EzdoctemplatedocumentCreateObjectV1Response](docs/Model/EzdoctemplatedocumentCreateObjectV1Response.md)
- [EzdoctemplatedocumentCreateObjectV1ResponseMPayload](docs/Model/EzdoctemplatedocumentCreateObjectV1ResponseMPayload.md)
- [EzdoctemplatedocumentEditObjectV1Request](docs/Model/EzdoctemplatedocumentEditObjectV1Request.md)
- [EzdoctemplatedocumentEditObjectV1Response](docs/Model/EzdoctemplatedocumentEditObjectV1Response.md)
- [EzdoctemplatedocumentGetAutocompleteV2Response](docs/Model/EzdoctemplatedocumentGetAutocompleteV2Response.md)
- [EzdoctemplatedocumentGetAutocompleteV2ResponseMPayload](docs/Model/EzdoctemplatedocumentGetAutocompleteV2ResponseMPayload.md)
- [EzdoctemplatedocumentGetListV1Response](docs/Model/EzdoctemplatedocumentGetListV1Response.md)
- [EzdoctemplatedocumentGetListV1ResponseMPayload](docs/Model/EzdoctemplatedocumentGetListV1ResponseMPayload.md)
- [EzdoctemplatedocumentGetObjectV2Response](docs/Model/EzdoctemplatedocumentGetObjectV2Response.md)
- [EzdoctemplatedocumentGetObjectV2ResponseMPayload](docs/Model/EzdoctemplatedocumentGetObjectV2ResponseMPayload.md)
- [EzdoctemplatedocumentListElement](docs/Model/EzdoctemplatedocumentListElement.md)
- [EzdoctemplatedocumentPatchObjectV1Request](docs/Model/EzdoctemplatedocumentPatchObjectV1Request.md)
- [EzdoctemplatedocumentPatchObjectV1Response](docs/Model/EzdoctemplatedocumentPatchObjectV1Response.md)
- [EzdoctemplatedocumentRequest](docs/Model/EzdoctemplatedocumentRequest.md)
- [EzdoctemplatedocumentRequestCompound](docs/Model/EzdoctemplatedocumentRequestCompound.md)
- [EzdoctemplatedocumentRequestPatch](docs/Model/EzdoctemplatedocumentRequestPatch.md)
- [EzdoctemplatedocumentResponse](docs/Model/EzdoctemplatedocumentResponse.md)
- [EzdoctemplatedocumentResponseCompound](docs/Model/EzdoctemplatedocumentResponseCompound.md)
- [EzdoctemplatefieldtypecategoryAutocompleteElementResponse](docs/Model/EzdoctemplatefieldtypecategoryAutocompleteElementResponse.md)
- [EzdoctemplatefieldtypecategoryGetAutocompleteV2Response](docs/Model/EzdoctemplatefieldtypecategoryGetAutocompleteV2Response.md)
- [EzdoctemplatefieldtypecategoryGetAutocompleteV2ResponseMPayload](docs/Model/EzdoctemplatefieldtypecategoryGetAutocompleteV2ResponseMPayload.md)
- [EzdoctemplatetypeAutocompleteElementResponse](docs/Model/EzdoctemplatetypeAutocompleteElementResponse.md)
- [EzdoctemplatetypeGetAutocompleteV2Response](docs/Model/EzdoctemplatetypeGetAutocompleteV2Response.md)
- [EzdoctemplatetypeGetAutocompleteV2ResponseMPayload](docs/Model/EzdoctemplatetypeGetAutocompleteV2ResponseMPayload.md)
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
- [EzsignannotationCreateObjectV1Request](docs/Model/EzsignannotationCreateObjectV1Request.md)
- [EzsignannotationCreateObjectV1Response](docs/Model/EzsignannotationCreateObjectV1Response.md)
- [EzsignannotationCreateObjectV1ResponseMPayload](docs/Model/EzsignannotationCreateObjectV1ResponseMPayload.md)
- [EzsignannotationDeleteObjectV1Response](docs/Model/EzsignannotationDeleteObjectV1Response.md)
- [EzsignannotationEditObjectV1Request](docs/Model/EzsignannotationEditObjectV1Request.md)
- [EzsignannotationEditObjectV1Response](docs/Model/EzsignannotationEditObjectV1Response.md)
- [EzsignannotationGetObjectV2Response](docs/Model/EzsignannotationGetObjectV2Response.md)
- [EzsignannotationGetObjectV2ResponseMPayload](docs/Model/EzsignannotationGetObjectV2ResponseMPayload.md)
- [EzsignannotationRequest](docs/Model/EzsignannotationRequest.md)
- [EzsignannotationRequestCompound](docs/Model/EzsignannotationRequestCompound.md)
- [EzsignannotationResponse](docs/Model/EzsignannotationResponse.md)
- [EzsignannotationResponseCompound](docs/Model/EzsignannotationResponseCompound.md)
- [EzsignbulksendCreateEzsignbulksendtransmissionV2Request](docs/Model/EzsignbulksendCreateEzsignbulksendtransmissionV2Request.md)
- [EzsignbulksendCreateEzsignbulksendtransmissionV2Response](docs/Model/EzsignbulksendCreateEzsignbulksendtransmissionV2Response.md)
- [EzsignbulksendCreateEzsignbulksendtransmissionV2ResponseMPayload](docs/Model/EzsignbulksendCreateEzsignbulksendtransmissionV2ResponseMPayload.md)
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
- [EzsigndiscussionCreateObjectV1Request](docs/Model/EzsigndiscussionCreateObjectV1Request.md)
- [EzsigndiscussionCreateObjectV1Response](docs/Model/EzsigndiscussionCreateObjectV1Response.md)
- [EzsigndiscussionCreateObjectV1ResponseMPayload](docs/Model/EzsigndiscussionCreateObjectV1ResponseMPayload.md)
- [EzsigndiscussionDeleteObjectV1Response](docs/Model/EzsigndiscussionDeleteObjectV1Response.md)
- [EzsigndiscussionGetObjectV2Response](docs/Model/EzsigndiscussionGetObjectV2Response.md)
- [EzsigndiscussionGetObjectV2ResponseMPayload](docs/Model/EzsigndiscussionGetObjectV2ResponseMPayload.md)
- [EzsigndiscussionRequest](docs/Model/EzsigndiscussionRequest.md)
- [EzsigndiscussionRequestCompound](docs/Model/EzsigndiscussionRequestCompound.md)
- [EzsigndiscussionResponse](docs/Model/EzsigndiscussionResponse.md)
- [EzsigndiscussionResponseCompound](docs/Model/EzsigndiscussionResponseCompound.md)
- [EzsigndocumentApplyEzsigntemplateV1Request](docs/Model/EzsigndocumentApplyEzsigntemplateV1Request.md)
- [EzsigndocumentApplyEzsigntemplateV1Response](docs/Model/EzsigndocumentApplyEzsigntemplateV1Response.md)
- [EzsigndocumentApplyEzsigntemplateV2Request](docs/Model/EzsigndocumentApplyEzsigntemplateV2Request.md)
- [EzsigndocumentApplyEzsigntemplateV2Response](docs/Model/EzsigndocumentApplyEzsigntemplateV2Response.md)
- [EzsigndocumentApplyEzsigntemplateglobalV1Request](docs/Model/EzsigndocumentApplyEzsigntemplateglobalV1Request.md)
- [EzsigndocumentApplyEzsigntemplateglobalV1Response](docs/Model/EzsigndocumentApplyEzsigntemplateglobalV1Response.md)
- [EzsigndocumentCreateElementV3Response](docs/Model/EzsigndocumentCreateElementV3Response.md)
- [EzsigndocumentCreateEzsignelementsPositionedByWordV1Request](docs/Model/EzsigndocumentCreateEzsignelementsPositionedByWordV1Request.md)
- [EzsigndocumentCreateEzsignelementsPositionedByWordV1Response](docs/Model/EzsigndocumentCreateEzsignelementsPositionedByWordV1Response.md)
- [EzsigndocumentCreateEzsignelementsPositionedByWordV1ResponseMPayload](docs/Model/EzsigndocumentCreateEzsignelementsPositionedByWordV1ResponseMPayload.md)
- [EzsigndocumentCreateObjectV1Request](docs/Model/EzsigndocumentCreateObjectV1Request.md)
- [EzsigndocumentCreateObjectV1Response](docs/Model/EzsigndocumentCreateObjectV1Response.md)
- [EzsigndocumentCreateObjectV1ResponseMPayload](docs/Model/EzsigndocumentCreateObjectV1ResponseMPayload.md)
- [EzsigndocumentCreateObjectV2Request](docs/Model/EzsigndocumentCreateObjectV2Request.md)
- [EzsigndocumentCreateObjectV2Response](docs/Model/EzsigndocumentCreateObjectV2Response.md)
- [EzsigndocumentCreateObjectV2ResponseMPayload](docs/Model/EzsigndocumentCreateObjectV2ResponseMPayload.md)
- [EzsigndocumentCreateObjectV3Request](docs/Model/EzsigndocumentCreateObjectV3Request.md)
- [EzsigndocumentCreateObjectV3Response](docs/Model/EzsigndocumentCreateObjectV3Response.md)
- [EzsigndocumentCreateObjectV3ResponseMPayload](docs/Model/EzsigndocumentCreateObjectV3ResponseMPayload.md)
- [EzsigndocumentDeclineToSignV1Request](docs/Model/EzsigndocumentDeclineToSignV1Request.md)
- [EzsigndocumentDeclineToSignV1Response](docs/Model/EzsigndocumentDeclineToSignV1Response.md)
- [EzsigndocumentDeleteObjectV1Response](docs/Model/EzsigndocumentDeleteObjectV1Response.md)
- [EzsigndocumentEditEzsignannotationsV1Request](docs/Model/EzsigndocumentEditEzsignannotationsV1Request.md)
- [EzsigndocumentEditEzsignannotationsV1Response](docs/Model/EzsigndocumentEditEzsignannotationsV1Response.md)
- [EzsigndocumentEditEzsignannotationsV1ResponseMPayload](docs/Model/EzsigndocumentEditEzsignannotationsV1ResponseMPayload.md)
- [EzsigndocumentEditEzsignformfieldgroupsV1Request](docs/Model/EzsigndocumentEditEzsignformfieldgroupsV1Request.md)
- [EzsigndocumentEditEzsignformfieldgroupsV1Response](docs/Model/EzsigndocumentEditEzsignformfieldgroupsV1Response.md)
- [EzsigndocumentEditEzsignformfieldgroupsV1ResponseMPayload](docs/Model/EzsigndocumentEditEzsignformfieldgroupsV1ResponseMPayload.md)
- [EzsigndocumentEditEzsignsignaturesV1Request](docs/Model/EzsigndocumentEditEzsignsignaturesV1Request.md)
- [EzsigndocumentEditEzsignsignaturesV1Response](docs/Model/EzsigndocumentEditEzsignsignaturesV1Response.md)
- [EzsigndocumentEditEzsignsignaturesV1ResponseMPayload](docs/Model/EzsigndocumentEditEzsignsignaturesV1ResponseMPayload.md)
- [EzsigndocumentEditObjectV1Request](docs/Model/EzsigndocumentEditObjectV1Request.md)
- [EzsigndocumentEditObjectV1Response](docs/Model/EzsigndocumentEditObjectV1Response.md)
- [EzsigndocumentEndPrematurelyV1Response](docs/Model/EzsigndocumentEndPrematurelyV1Response.md)
- [EzsigndocumentExtractTextV1Request](docs/Model/EzsigndocumentExtractTextV1Request.md)
- [EzsigndocumentExtractTextV1Response](docs/Model/EzsigndocumentExtractTextV1Response.md)
- [EzsigndocumentExtractTextV1ResponseMPayload](docs/Model/EzsigndocumentExtractTextV1ResponseMPayload.md)
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
- [EzsigndocumentGetEzsigndiscussionsV1Response](docs/Model/EzsigndocumentGetEzsigndiscussionsV1Response.md)
- [EzsigndocumentGetEzsigndiscussionsV1ResponseMPayload](docs/Model/EzsigndocumentGetEzsigndiscussionsV1ResponseMPayload.md)
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
- [EzsigndocumentMatchingtemplateV3Response](docs/Model/EzsigndocumentMatchingtemplateV3Response.md)
- [EzsigndocumentPatchObjectV1Request](docs/Model/EzsigndocumentPatchObjectV1Request.md)
- [EzsigndocumentPatchObjectV1Response](docs/Model/EzsigndocumentPatchObjectV1Response.md)
- [EzsigndocumentPrefillEzsignformV1Request](docs/Model/EzsigndocumentPrefillEzsignformV1Request.md)
- [EzsigndocumentPrefillEzsignformV1Response](docs/Model/EzsigndocumentPrefillEzsignformV1Response.md)
- [EzsigndocumentRequest](docs/Model/EzsigndocumentRequest.md)
- [EzsigndocumentRequestCompound](docs/Model/EzsigndocumentRequestCompound.md)
- [EzsigndocumentRequestPatch](docs/Model/EzsigndocumentRequestPatch.md)
- [EzsigndocumentResponse](docs/Model/EzsigndocumentResponse.md)
- [EzsigndocumentResponseCompound](docs/Model/EzsigndocumentResponseCompound.md)
- [EzsigndocumentSubmitEzsignformV1Request](docs/Model/EzsigndocumentSubmitEzsignformV1Request.md)
- [EzsigndocumentSubmitEzsignformV1Response](docs/Model/EzsigndocumentSubmitEzsignformV1Response.md)
- [EzsigndocumentUnsendV1Response](docs/Model/EzsigndocumentUnsendV1Response.md)
- [EzsigndocumentdependencyRequest](docs/Model/EzsigndocumentdependencyRequest.md)
- [EzsigndocumentdependencyRequestCompound](docs/Model/EzsigndocumentdependencyRequestCompound.md)
- [EzsigndocumentdependencyResponse](docs/Model/EzsigndocumentdependencyResponse.md)
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
- [EzsignfolderCreateObjectV3Request](docs/Model/EzsignfolderCreateObjectV3Request.md)
- [EzsignfolderCreateObjectV3Response](docs/Model/EzsignfolderCreateObjectV3Response.md)
- [EzsignfolderCreateObjectV3ResponseMPayload](docs/Model/EzsignfolderCreateObjectV3ResponseMPayload.md)
- [EzsignfolderDeleteObjectV1Response](docs/Model/EzsignfolderDeleteObjectV1Response.md)
- [EzsignfolderDisposeEzsignfoldersV1Request](docs/Model/EzsignfolderDisposeEzsignfoldersV1Request.md)
- [EzsignfolderDisposeEzsignfoldersV1Response](docs/Model/EzsignfolderDisposeEzsignfoldersV1Response.md)
- [EzsignfolderDisposeV1Response](docs/Model/EzsignfolderDisposeV1Response.md)
- [EzsignfolderEditObjectV3Request](docs/Model/EzsignfolderEditObjectV3Request.md)
- [EzsignfolderEditObjectV3Response](docs/Model/EzsignfolderEditObjectV3Response.md)
- [EzsignfolderEndPrematurelyV1Response](docs/Model/EzsignfolderEndPrematurelyV1Response.md)
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
- [EzsignfolderGetObjectV3Response](docs/Model/EzsignfolderGetObjectV3Response.md)
- [EzsignfolderGetObjectV3ResponseMPayload](docs/Model/EzsignfolderGetObjectV3ResponseMPayload.md)
- [EzsignfolderImportEzsignfoldersignerassociationsV1Request](docs/Model/EzsignfolderImportEzsignfoldersignerassociationsV1Request.md)
- [EzsignfolderImportEzsignfoldersignerassociationsV1Response](docs/Model/EzsignfolderImportEzsignfoldersignerassociationsV1Response.md)
- [EzsignfolderImportEzsignfoldersignerassociationsV1ResponseMPayload](docs/Model/EzsignfolderImportEzsignfoldersignerassociationsV1ResponseMPayload.md)
- [EzsignfolderImportEzsigntemplatepackageV1Request](docs/Model/EzsignfolderImportEzsigntemplatepackageV1Request.md)
- [EzsignfolderImportEzsigntemplatepackageV1Response](docs/Model/EzsignfolderImportEzsigntemplatepackageV1Response.md)
- [EzsignfolderImportEzsigntemplatepackageV1ResponseMPayload](docs/Model/EzsignfolderImportEzsigntemplatepackageV1ResponseMPayload.md)
- [EzsignfolderListElement](docs/Model/EzsignfolderListElement.md)
- [EzsignfolderReorderV1Request](docs/Model/EzsignfolderReorderV1Request.md)
- [EzsignfolderReorderV1Response](docs/Model/EzsignfolderReorderV1Response.md)
- [EzsignfolderReorderV2Request](docs/Model/EzsignfolderReorderV2Request.md)
- [EzsignfolderReorderV2Response](docs/Model/EzsignfolderReorderV2Response.md)
- [EzsignfolderRequest](docs/Model/EzsignfolderRequest.md)
- [EzsignfolderRequestCompound](docs/Model/EzsignfolderRequestCompound.md)
- [EzsignfolderRequestCompoundV3](docs/Model/EzsignfolderRequestCompoundV3.md)
- [EzsignfolderRequestV3](docs/Model/EzsignfolderRequestV3.md)
- [EzsignfolderResponse](docs/Model/EzsignfolderResponse.md)
- [EzsignfolderResponseCompound](docs/Model/EzsignfolderResponseCompound.md)
- [EzsignfolderResponseCompoundV3](docs/Model/EzsignfolderResponseCompoundV3.md)
- [EzsignfolderResponseV3](docs/Model/EzsignfolderResponseV3.md)
- [EzsignfolderSendV1Request](docs/Model/EzsignfolderSendV1Request.md)
- [EzsignfolderSendV1Response](docs/Model/EzsignfolderSendV1Response.md)
- [EzsignfolderSendV3Request](docs/Model/EzsignfolderSendV3Request.md)
- [EzsignfolderSendV3Response](docs/Model/EzsignfolderSendV3Response.md)
- [EzsignfolderUnsendV1Response](docs/Model/EzsignfolderUnsendV1Response.md)
- [EzsignfoldersignerassociationCreateEmbeddedUrlV1Request](docs/Model/EzsignfoldersignerassociationCreateEmbeddedUrlV1Request.md)
- [EzsignfoldersignerassociationCreateEmbeddedUrlV1Response](docs/Model/EzsignfoldersignerassociationCreateEmbeddedUrlV1Response.md)
- [EzsignfoldersignerassociationCreateEmbeddedUrlV1ResponseMPayload](docs/Model/EzsignfoldersignerassociationCreateEmbeddedUrlV1ResponseMPayload.md)
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
- [EzsignfoldersignerassociationReassignV1Request](docs/Model/EzsignfoldersignerassociationReassignV1Request.md)
- [EzsignfoldersignerassociationReassignV1Response](docs/Model/EzsignfoldersignerassociationReassignV1Response.md)
- [EzsignfoldersignerassociationRequest](docs/Model/EzsignfoldersignerassociationRequest.md)
- [EzsignfoldersignerassociationRequestCompound](docs/Model/EzsignfoldersignerassociationRequestCompound.md)
- [EzsignfoldersignerassociationRequestPatch](docs/Model/EzsignfoldersignerassociationRequestPatch.md)
- [EzsignfoldersignerassociationResponse](docs/Model/EzsignfoldersignerassociationResponse.md)
- [EzsignfoldersignerassociationResponseCompound](docs/Model/EzsignfoldersignerassociationResponseCompound.md)
- [EzsignfoldersignerassociationResponseCompoundUser](docs/Model/EzsignfoldersignerassociationResponseCompoundUser.md)
- [EzsignfoldertypeAutocompleteElementResponse](docs/Model/EzsignfoldertypeAutocompleteElementResponse.md)
- [EzsignfoldertypeCreateObjectV3Request](docs/Model/EzsignfoldertypeCreateObjectV3Request.md)
- [EzsignfoldertypeCreateObjectV3Response](docs/Model/EzsignfoldertypeCreateObjectV3Response.md)
- [EzsignfoldertypeCreateObjectV3ResponseMPayload](docs/Model/EzsignfoldertypeCreateObjectV3ResponseMPayload.md)
- [EzsignfoldertypeEditObjectV3Request](docs/Model/EzsignfoldertypeEditObjectV3Request.md)
- [EzsignfoldertypeEditObjectV3Response](docs/Model/EzsignfoldertypeEditObjectV3Response.md)
- [EzsignfoldertypeGetAutocompleteV2Response](docs/Model/EzsignfoldertypeGetAutocompleteV2Response.md)
- [EzsignfoldertypeGetAutocompleteV2ResponseMPayload](docs/Model/EzsignfoldertypeGetAutocompleteV2ResponseMPayload.md)
- [EzsignfoldertypeGetListV1Response](docs/Model/EzsignfoldertypeGetListV1Response.md)
- [EzsignfoldertypeGetListV1ResponseMPayload](docs/Model/EzsignfoldertypeGetListV1ResponseMPayload.md)
- [EzsignfoldertypeGetObjectV2Response](docs/Model/EzsignfoldertypeGetObjectV2Response.md)
- [EzsignfoldertypeGetObjectV2ResponseMPayload](docs/Model/EzsignfoldertypeGetObjectV2ResponseMPayload.md)
- [EzsignfoldertypeGetObjectV4Response](docs/Model/EzsignfoldertypeGetObjectV4Response.md)
- [EzsignfoldertypeGetObjectV4ResponseMPayload](docs/Model/EzsignfoldertypeGetObjectV4ResponseMPayload.md)
- [EzsignfoldertypeListElement](docs/Model/EzsignfoldertypeListElement.md)
- [EzsignfoldertypeRequestCompoundV3](docs/Model/EzsignfoldertypeRequestCompoundV3.md)
- [EzsignfoldertypeRequestV3](docs/Model/EzsignfoldertypeRequestV3.md)
- [EzsignfoldertypeResponse](docs/Model/EzsignfoldertypeResponse.md)
- [EzsignfoldertypeResponseCompound](docs/Model/EzsignfoldertypeResponseCompound.md)
- [EzsignfoldertypeResponseCompoundV4](docs/Model/EzsignfoldertypeResponseCompoundV4.md)
- [EzsignfoldertypeResponseV4](docs/Model/EzsignfoldertypeResponseV4.md)
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
- [EzsignimportdocumentDownloadV1Response](docs/Model/EzsignimportdocumentDownloadV1Response.md)
- [EzsignimportfolderDeleteObjectV1Response](docs/Model/EzsignimportfolderDeleteObjectV1Response.md)
- [EzsignimportfolderGetListV1Response](docs/Model/EzsignimportfolderGetListV1Response.md)
- [EzsignimportfolderGetListV1ResponseMPayload](docs/Model/EzsignimportfolderGetListV1ResponseMPayload.md)
- [EzsignimportfolderGetObjectV2Response](docs/Model/EzsignimportfolderGetObjectV2Response.md)
- [EzsignimportfolderGetObjectV2ResponseMPayload](docs/Model/EzsignimportfolderGetObjectV2ResponseMPayload.md)
- [EzsignimportfolderListElement](docs/Model/EzsignimportfolderListElement.md)
- [EzsignimportfolderResponse](docs/Model/EzsignimportfolderResponse.md)
- [EzsignimportfolderResponseCompound](docs/Model/EzsignimportfolderResponseCompound.md)
- [EzsignpageConsultV1Response](docs/Model/EzsignpageConsultV1Response.md)
- [EzsignpageResponse](docs/Model/EzsignpageResponse.md)
- [EzsignpageResponseCompound](docs/Model/EzsignpageResponseCompound.md)
- [EzsignsignatureCreateObjectV1Request](docs/Model/EzsignsignatureCreateObjectV1Request.md)
- [EzsignsignatureCreateObjectV1Response](docs/Model/EzsignsignatureCreateObjectV1Response.md)
- [EzsignsignatureCreateObjectV1ResponseMPayload](docs/Model/EzsignsignatureCreateObjectV1ResponseMPayload.md)
- [EzsignsignatureCreateObjectV2Request](docs/Model/EzsignsignatureCreateObjectV2Request.md)
- [EzsignsignatureCreateObjectV2Response](docs/Model/EzsignsignatureCreateObjectV2Response.md)
- [EzsignsignatureCreateObjectV2ResponseMPayload](docs/Model/EzsignsignatureCreateObjectV2ResponseMPayload.md)
- [EzsignsignatureCreateObjectV3Request](docs/Model/EzsignsignatureCreateObjectV3Request.md)
- [EzsignsignatureCreateObjectV3Response](docs/Model/EzsignsignatureCreateObjectV3Response.md)
- [EzsignsignatureCreateObjectV3ResponseMPayload](docs/Model/EzsignsignatureCreateObjectV3ResponseMPayload.md)
- [EzsignsignatureDeleteObjectV1Response](docs/Model/EzsignsignatureDeleteObjectV1Response.md)
- [EzsignsignatureEditObjectV2Request](docs/Model/EzsignsignatureEditObjectV2Request.md)
- [EzsignsignatureEditObjectV2Response](docs/Model/EzsignsignatureEditObjectV2Response.md)
- [EzsignsignatureGetEzsignsignatureattachmentV1Response](docs/Model/EzsignsignatureGetEzsignsignatureattachmentV1Response.md)
- [EzsignsignatureGetEzsignsignatureattachmentV1ResponseMPayload](docs/Model/EzsignsignatureGetEzsignsignatureattachmentV1ResponseMPayload.md)
- [EzsignsignatureGetEzsignsignaturesAutomaticV1Response](docs/Model/EzsignsignatureGetEzsignsignaturesAutomaticV1Response.md)
- [EzsignsignatureGetEzsignsignaturesAutomaticV1ResponseMPayload](docs/Model/EzsignsignatureGetEzsignsignaturesAutomaticV1ResponseMPayload.md)
- [EzsignsignatureGetObjectV3Response](docs/Model/EzsignsignatureGetObjectV3Response.md)
- [EzsignsignatureGetObjectV3ResponseMPayload](docs/Model/EzsignsignatureGetObjectV3ResponseMPayload.md)
- [EzsignsignatureRequest](docs/Model/EzsignsignatureRequest.md)
- [EzsignsignatureRequestCompound](docs/Model/EzsignsignatureRequestCompound.md)
- [EzsignsignatureRequestCompoundV2](docs/Model/EzsignsignatureRequestCompoundV2.md)
- [EzsignsignatureResponse](docs/Model/EzsignsignatureResponse.md)
- [EzsignsignatureResponseCompound](docs/Model/EzsignsignatureResponseCompound.md)
- [EzsignsignatureResponseCompoundV3](docs/Model/EzsignsignatureResponseCompoundV3.md)
- [EzsignsignatureSignV1Request](docs/Model/EzsignsignatureSignV1Request.md)
- [EzsignsignatureSignV1Response](docs/Model/EzsignsignatureSignV1Response.md)
- [EzsignsignatureSignV1ResponseMPayload](docs/Model/EzsignsignatureSignV1ResponseMPayload.md)
- [EzsignsignatureattachmentResponse](docs/Model/EzsignsignatureattachmentResponse.md)
- [EzsignsignaturecustomdateRequest](docs/Model/EzsignsignaturecustomdateRequest.md)
- [EzsignsignaturecustomdateRequestCompound](docs/Model/EzsignsignaturecustomdateRequestCompound.md)
- [EzsignsignaturecustomdateRequestCompoundV2](docs/Model/EzsignsignaturecustomdateRequestCompoundV2.md)
- [EzsignsignaturecustomdateRequestV2](docs/Model/EzsignsignaturecustomdateRequestV2.md)
- [EzsignsignaturecustomdateResponse](docs/Model/EzsignsignaturecustomdateResponse.md)
- [EzsignsignaturecustomdateResponseCompound](docs/Model/EzsignsignaturecustomdateResponseCompound.md)
- [EzsignsignaturecustomdateResponseCompoundV2](docs/Model/EzsignsignaturecustomdateResponseCompoundV2.md)
- [EzsignsignaturecustomdateResponseV2](docs/Model/EzsignsignaturecustomdateResponseV2.md)
- [EzsignsignaturepaymentdetailRequest](docs/Model/EzsignsignaturepaymentdetailRequest.md)
- [EzsignsignaturepaymentdetailRequestCompound](docs/Model/EzsignsignaturepaymentdetailRequestCompound.md)
- [EzsignsignaturepaymentdetailResponse](docs/Model/EzsignsignaturepaymentdetailResponse.md)
- [EzsignsignaturepaymentdetailResponseCompound](docs/Model/EzsignsignaturepaymentdetailResponseCompound.md)
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
- [EzsigntemplateCreateObjectV3Request](docs/Model/EzsigntemplateCreateObjectV3Request.md)
- [EzsigntemplateCreateObjectV3Response](docs/Model/EzsigntemplateCreateObjectV3Response.md)
- [EzsigntemplateCreateObjectV3ResponseMPayload](docs/Model/EzsigntemplateCreateObjectV3ResponseMPayload.md)
- [EzsigntemplateDeleteObjectV1Response](docs/Model/EzsigntemplateDeleteObjectV1Response.md)
- [EzsigntemplateEditObjectV3Request](docs/Model/EzsigntemplateEditObjectV3Request.md)
- [EzsigntemplateEditObjectV3Response](docs/Model/EzsigntemplateEditObjectV3Response.md)
- [EzsigntemplateGetAutocompleteV2Response](docs/Model/EzsigntemplateGetAutocompleteV2Response.md)
- [EzsigntemplateGetAutocompleteV2ResponseMPayload](docs/Model/EzsigntemplateGetAutocompleteV2ResponseMPayload.md)
- [EzsigntemplateGetListV1Response](docs/Model/EzsigntemplateGetListV1Response.md)
- [EzsigntemplateGetListV1ResponseMPayload](docs/Model/EzsigntemplateGetListV1ResponseMPayload.md)
- [EzsigntemplateGetObjectV3Response](docs/Model/EzsigntemplateGetObjectV3Response.md)
- [EzsigntemplateGetObjectV3ResponseMPayload](docs/Model/EzsigntemplateGetObjectV3ResponseMPayload.md)
- [EzsigntemplateListElement](docs/Model/EzsigntemplateListElement.md)
- [EzsigntemplateRequestCompoundV3](docs/Model/EzsigntemplateRequestCompoundV3.md)
- [EzsigntemplateRequestV3](docs/Model/EzsigntemplateRequestV3.md)
- [EzsigntemplateResponse](docs/Model/EzsigntemplateResponse.md)
- [EzsigntemplateResponseCompound](docs/Model/EzsigntemplateResponseCompound.md)
- [EzsigntemplateResponseCompoundV3](docs/Model/EzsigntemplateResponseCompoundV3.md)
- [EzsigntemplateResponseV3](docs/Model/EzsigntemplateResponseV3.md)
- [EzsigntemplatedocumentCreateObjectV1Request](docs/Model/EzsigntemplatedocumentCreateObjectV1Request.md)
- [EzsigntemplatedocumentCreateObjectV1Response](docs/Model/EzsigntemplatedocumentCreateObjectV1Response.md)
- [EzsigntemplatedocumentCreateObjectV1ResponseMPayload](docs/Model/EzsigntemplatedocumentCreateObjectV1ResponseMPayload.md)
- [EzsigntemplatedocumentEditEzsigntemplatedocumentpagerecognitionsV1Request](docs/Model/EzsigntemplatedocumentEditEzsigntemplatedocumentpagerecognitionsV1Request.md)
- [EzsigntemplatedocumentEditEzsigntemplatedocumentpagerecognitionsV1Response](docs/Model/EzsigntemplatedocumentEditEzsigntemplatedocumentpagerecognitionsV1Response.md)
- [EzsigntemplatedocumentEditEzsigntemplatedocumentpagerecognitionsV1ResponseMPayload](docs/Model/EzsigntemplatedocumentEditEzsigntemplatedocumentpagerecognitionsV1ResponseMPayload.md)
- [EzsigntemplatedocumentEditEzsigntemplateformfieldgroupsV1Request](docs/Model/EzsigntemplatedocumentEditEzsigntemplateformfieldgroupsV1Request.md)
- [EzsigntemplatedocumentEditEzsigntemplateformfieldgroupsV1Response](docs/Model/EzsigntemplatedocumentEditEzsigntemplateformfieldgroupsV1Response.md)
- [EzsigntemplatedocumentEditEzsigntemplateformfieldgroupsV1ResponseMPayload](docs/Model/EzsigntemplatedocumentEditEzsigntemplateformfieldgroupsV1ResponseMPayload.md)
- [EzsigntemplatedocumentEditEzsigntemplatesignaturesV1Request](docs/Model/EzsigntemplatedocumentEditEzsigntemplatesignaturesV1Request.md)
- [EzsigntemplatedocumentEditEzsigntemplatesignaturesV1Response](docs/Model/EzsigntemplatedocumentEditEzsigntemplatesignaturesV1Response.md)
- [EzsigntemplatedocumentEditEzsigntemplatesignaturesV1ResponseMPayload](docs/Model/EzsigntemplatedocumentEditEzsigntemplatesignaturesV1ResponseMPayload.md)
- [EzsigntemplatedocumentEditObjectV1Request](docs/Model/EzsigntemplatedocumentEditObjectV1Request.md)
- [EzsigntemplatedocumentEditObjectV1Response](docs/Model/EzsigntemplatedocumentEditObjectV1Response.md)
- [EzsigntemplatedocumentExtractTextV1Request](docs/Model/EzsigntemplatedocumentExtractTextV1Request.md)
- [EzsigntemplatedocumentExtractTextV1Response](docs/Model/EzsigntemplatedocumentExtractTextV1Response.md)
- [EzsigntemplatedocumentExtractTextV1ResponseMPayload](docs/Model/EzsigntemplatedocumentExtractTextV1ResponseMPayload.md)
- [EzsigntemplatedocumentFlattenV1Response](docs/Model/EzsigntemplatedocumentFlattenV1Response.md)
- [EzsigntemplatedocumentGetEzsigntemplatedocumentpagerecognitionsV1Response](docs/Model/EzsigntemplatedocumentGetEzsigntemplatedocumentpagerecognitionsV1Response.md)
- [EzsigntemplatedocumentGetEzsigntemplatedocumentpagerecognitionsV1ResponseMPayload](docs/Model/EzsigntemplatedocumentGetEzsigntemplatedocumentpagerecognitionsV1ResponseMPayload.md)
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
- [EzsigntemplatedocumentpagerecognitionCreateObjectV1Request](docs/Model/EzsigntemplatedocumentpagerecognitionCreateObjectV1Request.md)
- [EzsigntemplatedocumentpagerecognitionCreateObjectV1Response](docs/Model/EzsigntemplatedocumentpagerecognitionCreateObjectV1Response.md)
- [EzsigntemplatedocumentpagerecognitionCreateObjectV1ResponseMPayload](docs/Model/EzsigntemplatedocumentpagerecognitionCreateObjectV1ResponseMPayload.md)
- [EzsigntemplatedocumentpagerecognitionDeleteObjectV1Response](docs/Model/EzsigntemplatedocumentpagerecognitionDeleteObjectV1Response.md)
- [EzsigntemplatedocumentpagerecognitionEditObjectV1Request](docs/Model/EzsigntemplatedocumentpagerecognitionEditObjectV1Request.md)
- [EzsigntemplatedocumentpagerecognitionEditObjectV1Response](docs/Model/EzsigntemplatedocumentpagerecognitionEditObjectV1Response.md)
- [EzsigntemplatedocumentpagerecognitionGetObjectV2Response](docs/Model/EzsigntemplatedocumentpagerecognitionGetObjectV2Response.md)
- [EzsigntemplatedocumentpagerecognitionGetObjectV2ResponseMPayload](docs/Model/EzsigntemplatedocumentpagerecognitionGetObjectV2ResponseMPayload.md)
- [EzsigntemplatedocumentpagerecognitionRequest](docs/Model/EzsigntemplatedocumentpagerecognitionRequest.md)
- [EzsigntemplatedocumentpagerecognitionRequestCompound](docs/Model/EzsigntemplatedocumentpagerecognitionRequestCompound.md)
- [EzsigntemplatedocumentpagerecognitionResponse](docs/Model/EzsigntemplatedocumentpagerecognitionResponse.md)
- [EzsigntemplatedocumentpagerecognitionResponseCompound](docs/Model/EzsigntemplatedocumentpagerecognitionResponseCompound.md)
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
- [EzsigntemplateglobalAutocompleteElementResponse](docs/Model/EzsigntemplateglobalAutocompleteElementResponse.md)
- [EzsigntemplateglobalGetAutocompleteV2Response](docs/Model/EzsigntemplateglobalGetAutocompleteV2Response.md)
- [EzsigntemplateglobalGetAutocompleteV2ResponseMPayload](docs/Model/EzsigntemplateglobalGetAutocompleteV2ResponseMPayload.md)
- [EzsigntemplateglobalGetObjectV2Response](docs/Model/EzsigntemplateglobalGetObjectV2Response.md)
- [EzsigntemplateglobalGetObjectV2ResponseMPayload](docs/Model/EzsigntemplateglobalGetObjectV2ResponseMPayload.md)
- [EzsigntemplateglobalResponse](docs/Model/EzsigntemplateglobalResponse.md)
- [EzsigntemplateglobalResponseCompound](docs/Model/EzsigntemplateglobalResponseCompound.md)
- [EzsigntemplateglobaldocumentResponse](docs/Model/EzsigntemplateglobaldocumentResponse.md)
- [EzsigntemplateglobalsignerResponse](docs/Model/EzsigntemplateglobalsignerResponse.md)
- [EzsigntemplateglobalsignerResponseCompound](docs/Model/EzsigntemplateglobalsignerResponseCompound.md)
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
- [EzsigntemplatepublicCreateEzsignfolderV1Request](docs/Model/EzsigntemplatepublicCreateEzsignfolderV1Request.md)
- [EzsigntemplatepublicCreateEzsignfolderV1Response](docs/Model/EzsigntemplatepublicCreateEzsignfolderV1Response.md)
- [EzsigntemplatepublicCreateEzsignfolderV1ResponseMPayload](docs/Model/EzsigntemplatepublicCreateEzsignfolderV1ResponseMPayload.md)
- [EzsigntemplatepublicCreateObjectV1Request](docs/Model/EzsigntemplatepublicCreateObjectV1Request.md)
- [EzsigntemplatepublicCreateObjectV1Response](docs/Model/EzsigntemplatepublicCreateObjectV1Response.md)
- [EzsigntemplatepublicCreateObjectV1ResponseMPayload](docs/Model/EzsigntemplatepublicCreateObjectV1ResponseMPayload.md)
- [EzsigntemplatepublicDeleteObjectV1Response](docs/Model/EzsigntemplatepublicDeleteObjectV1Response.md)
- [EzsigntemplatepublicEditObjectV1Request](docs/Model/EzsigntemplatepublicEditObjectV1Request.md)
- [EzsigntemplatepublicEditObjectV1Response](docs/Model/EzsigntemplatepublicEditObjectV1Response.md)
- [EzsigntemplatepublicGetEzsigntemplatepublicDetailsV1Request](docs/Model/EzsigntemplatepublicGetEzsigntemplatepublicDetailsV1Request.md)
- [EzsigntemplatepublicGetEzsigntemplatepublicDetailsV1Response](docs/Model/EzsigntemplatepublicGetEzsigntemplatepublicDetailsV1Response.md)
- [EzsigntemplatepublicGetEzsigntemplatepublicDetailsV1ResponseMPayload](docs/Model/EzsigntemplatepublicGetEzsigntemplatepublicDetailsV1ResponseMPayload.md)
- [EzsigntemplatepublicGetFormsDataV1Response](docs/Model/EzsigntemplatepublicGetFormsDataV1Response.md)
- [EzsigntemplatepublicGetFormsDataV1ResponseMPayload](docs/Model/EzsigntemplatepublicGetFormsDataV1ResponseMPayload.md)
- [EzsigntemplatepublicGetListV1Response](docs/Model/EzsigntemplatepublicGetListV1Response.md)
- [EzsigntemplatepublicGetListV1ResponseMPayload](docs/Model/EzsigntemplatepublicGetListV1ResponseMPayload.md)
- [EzsigntemplatepublicGetObjectV2Response](docs/Model/EzsigntemplatepublicGetObjectV2Response.md)
- [EzsigntemplatepublicGetObjectV2ResponseMPayload](docs/Model/EzsigntemplatepublicGetObjectV2ResponseMPayload.md)
- [EzsigntemplatepublicListElement](docs/Model/EzsigntemplatepublicListElement.md)
- [EzsigntemplatepublicRequest](docs/Model/EzsigntemplatepublicRequest.md)
- [EzsigntemplatepublicRequestCompound](docs/Model/EzsigntemplatepublicRequestCompound.md)
- [EzsigntemplatepublicResetLimitExceededCounterV1Response](docs/Model/EzsigntemplatepublicResetLimitExceededCounterV1Response.md)
- [EzsigntemplatepublicResetLimitExceededCounterV1ResponseMPayload](docs/Model/EzsigntemplatepublicResetLimitExceededCounterV1ResponseMPayload.md)
- [EzsigntemplatepublicResetUrlV1Response](docs/Model/EzsigntemplatepublicResetUrlV1Response.md)
- [EzsigntemplatepublicResetUrlV1ResponseMPayload](docs/Model/EzsigntemplatepublicResetUrlV1ResponseMPayload.md)
- [EzsigntemplatepublicResponse](docs/Model/EzsigntemplatepublicResponse.md)
- [EzsigntemplatepublicResponseCompound](docs/Model/EzsigntemplatepublicResponseCompound.md)
- [EzsigntemplatesignatureCreateObjectV2Request](docs/Model/EzsigntemplatesignatureCreateObjectV2Request.md)
- [EzsigntemplatesignatureCreateObjectV2Response](docs/Model/EzsigntemplatesignatureCreateObjectV2Response.md)
- [EzsigntemplatesignatureCreateObjectV2ResponseMPayload](docs/Model/EzsigntemplatesignatureCreateObjectV2ResponseMPayload.md)
- [EzsigntemplatesignatureDeleteObjectV1Response](docs/Model/EzsigntemplatesignatureDeleteObjectV1Response.md)
- [EzsigntemplatesignatureEditObjectV2Request](docs/Model/EzsigntemplatesignatureEditObjectV2Request.md)
- [EzsigntemplatesignatureEditObjectV2Response](docs/Model/EzsigntemplatesignatureEditObjectV2Response.md)
- [EzsigntemplatesignatureGetObjectV3Response](docs/Model/EzsigntemplatesignatureGetObjectV3Response.md)
- [EzsigntemplatesignatureGetObjectV3ResponseMPayload](docs/Model/EzsigntemplatesignatureGetObjectV3ResponseMPayload.md)
- [EzsigntemplatesignatureRequest](docs/Model/EzsigntemplatesignatureRequest.md)
- [EzsigntemplatesignatureRequestCompound](docs/Model/EzsigntemplatesignatureRequestCompound.md)
- [EzsigntemplatesignatureRequestCompoundV2](docs/Model/EzsigntemplatesignatureRequestCompoundV2.md)
- [EzsigntemplatesignatureResponse](docs/Model/EzsigntemplatesignatureResponse.md)
- [EzsigntemplatesignatureResponseCompound](docs/Model/EzsigntemplatesignatureResponseCompound.md)
- [EzsigntemplatesignatureResponseCompoundV3](docs/Model/EzsigntemplatesignatureResponseCompoundV3.md)
- [EzsigntemplatesignaturecustomdateRequest](docs/Model/EzsigntemplatesignaturecustomdateRequest.md)
- [EzsigntemplatesignaturecustomdateRequestCompound](docs/Model/EzsigntemplatesignaturecustomdateRequestCompound.md)
- [EzsigntemplatesignaturecustomdateRequestCompoundV2](docs/Model/EzsigntemplatesignaturecustomdateRequestCompoundV2.md)
- [EzsigntemplatesignaturecustomdateRequestV2](docs/Model/EzsigntemplatesignaturecustomdateRequestV2.md)
- [EzsigntemplatesignaturecustomdateResponse](docs/Model/EzsigntemplatesignaturecustomdateResponse.md)
- [EzsigntemplatesignaturecustomdateResponseCompound](docs/Model/EzsigntemplatesignaturecustomdateResponseCompound.md)
- [EzsigntemplatesignaturecustomdateResponseCompoundV2](docs/Model/EzsigntemplatesignaturecustomdateResponseCompoundV2.md)
- [EzsigntemplatesignaturecustomdateResponseV2](docs/Model/EzsigntemplatesignaturecustomdateResponseV2.md)
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
- [EzsignuserEditObjectV1Request](docs/Model/EzsignuserEditObjectV1Request.md)
- [EzsignuserEditObjectV1Response](docs/Model/EzsignuserEditObjectV1Response.md)
- [EzsignuserGetObjectV2Response](docs/Model/EzsignuserGetObjectV2Response.md)
- [EzsignuserGetObjectV2ResponseMPayload](docs/Model/EzsignuserGetObjectV2ResponseMPayload.md)
- [EzsignuserRequest](docs/Model/EzsignuserRequest.md)
- [EzsignuserRequestCompound](docs/Model/EzsignuserRequestCompound.md)
- [EzsignuserResponse](docs/Model/EzsignuserResponse.md)
- [EzsignuserResponseCompound](docs/Model/EzsignuserResponseCompound.md)
- [FieldEActivesessionEzsign](docs/Model/FieldEActivesessionEzsign.md)
- [FieldEActivesessionEzsignaccess](docs/Model/FieldEActivesessionEzsignaccess.md)
- [FieldEActivesessionEzsignprepaid](docs/Model/FieldEActivesessionEzsignprepaid.md)
- [FieldEActivesessionOrigin](docs/Model/FieldEActivesessionOrigin.md)
- [FieldEActivesessionRealestateinprogress](docs/Model/FieldEActivesessionRealestateinprogress.md)
- [FieldEActivesessionUsertype](docs/Model/FieldEActivesessionUsertype.md)
- [FieldEActivesessionWeekdaystart](docs/Model/FieldEActivesessionWeekdaystart.md)
- [FieldEAttachmentDocumenttype](docs/Model/FieldEAttachmentDocumenttype.md)
- [FieldEAttachmentPrivacy](docs/Model/FieldEAttachmentPrivacy.md)
- [FieldEAttachmentType](docs/Model/FieldEAttachmentType.md)
- [FieldEAttachmentVerified](docs/Model/FieldEAttachmentVerified.md)
- [FieldEAttachmentlogType](docs/Model/FieldEAttachmentlogType.md)
- [FieldEAuthenticationexternalType](docs/Model/FieldEAuthenticationexternalType.md)
- [FieldEBrandingAlignlogo](docs/Model/FieldEBrandingAlignlogo.md)
- [FieldEBrandingLogo](docs/Model/FieldEBrandingLogo.md)
- [FieldEColleagueEzsign](docs/Model/FieldEColleagueEzsign.md)
- [FieldEColleagueRealestateinprogess](docs/Model/FieldEColleagueRealestateinprogess.md)
- [FieldECommunicationImportance](docs/Model/FieldECommunicationImportance.md)
- [FieldECommunicationType](docs/Model/FieldECommunicationType.md)
- [FieldECommunicationexternalrecipientType](docs/Model/FieldECommunicationexternalrecipientType.md)
- [FieldECommunicationrecipientType](docs/Model/FieldECommunicationrecipientType.md)
- [FieldEContactType](docs/Model/FieldEContactType.md)
- [FieldEContactinformationsType](docs/Model/FieldEContactinformationsType.md)
- [FieldECreditcardtransactionAvsresult](docs/Model/FieldECreditcardtransactionAvsresult.md)
- [FieldECreditcardtransactionCvdresult](docs/Model/FieldECreditcardtransactionCvdresult.md)
- [FieldECreditcardtypeCodename](docs/Model/FieldECreditcardtypeCodename.md)
- [FieldECustomerMarketingcorrespondence](docs/Model/FieldECustomerMarketingcorrespondence.md)
- [FieldECustomerType](docs/Model/FieldECustomerType.md)
- [FieldEDiscussionmessageStatus](docs/Model/FieldEDiscussionmessageStatus.md)
- [FieldEErrorCode](docs/Model/FieldEErrorCode.md)
- [FieldEEzdoctemplatedocumentPrivacylevel](docs/Model/FieldEEzdoctemplatedocumentPrivacylevel.md)
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
- [FieldEEzsignfolderCompletion](docs/Model/FieldEEzsignfolderCompletion.md)
- [FieldEEzsignfolderDocumentdependency](docs/Model/FieldEEzsignfolderDocumentdependency.md)
- [FieldEEzsignfolderMessageorder](docs/Model/FieldEEzsignfolderMessageorder.md)
- [FieldEEzsignfolderSendreminderfrequency](docs/Model/FieldEEzsignfolderSendreminderfrequency.md)
- [FieldEEzsignfolderStep](docs/Model/FieldEEzsignfolderStep.md)
- [FieldEEzsignfoldertypeCompletion](docs/Model/FieldEEzsignfoldertypeCompletion.md)
- [FieldEEzsignfoldertypeDisposal](docs/Model/FieldEEzsignfoldertypeDisposal.md)
- [FieldEEzsignfoldertypeDocumentdependency](docs/Model/FieldEEzsignfoldertypeDocumentdependency.md)
- [FieldEEzsignfoldertypePdfanoncompliantaction](docs/Model/FieldEEzsignfoldertypePdfanoncompliantaction.md)
- [FieldEEzsignfoldertypePdfarequirement](docs/Model/FieldEEzsignfoldertypePdfarequirement.md)
- [FieldEEzsignfoldertypePrivacylevel](docs/Model/FieldEEzsignfoldertypePrivacylevel.md)
- [FieldEEzsignfoldertypeSendreminderfrequency](docs/Model/FieldEEzsignfoldertypeSendreminderfrequency.md)
- [FieldEEzsignfoldertypeSigneraccess](docs/Model/FieldEEzsignfoldertypeSigneraccess.md)
- [FieldEEzsignformfieldDependencyrequirement](docs/Model/FieldEEzsignformfieldDependencyrequirement.md)
- [FieldEEzsignformfieldgroupSignerrequirement](docs/Model/FieldEEzsignformfieldgroupSignerrequirement.md)
- [FieldEEzsignformfieldgroupTooltipposition](docs/Model/FieldEEzsignformfieldgroupTooltipposition.md)
- [FieldEEzsignformfieldgroupType](docs/Model/FieldEEzsignformfieldgroupType.md)
- [FieldEEzsignsignatureAttachmentnamesource](docs/Model/FieldEEzsignsignatureAttachmentnamesource.md)
- [FieldEEzsignsignatureConsultationtrigger](docs/Model/FieldEEzsignsignatureConsultationtrigger.md)
- [FieldEEzsignsignatureDependencyrequirement](docs/Model/FieldEEzsignsignatureDependencyrequirement.md)
- [FieldEEzsignsignatureFont](docs/Model/FieldEEzsignsignatureFont.md)
- [FieldEEzsignsignatureTooltipposition](docs/Model/FieldEEzsignsignatureTooltipposition.md)
- [FieldEEzsignsignatureType](docs/Model/FieldEEzsignsignatureType.md)
- [FieldEEzsignsignaturepaymentdetailTaxable](docs/Model/FieldEEzsignsignaturepaymentdetailTaxable.md)
- [FieldEEzsigntemplateRecognition](docs/Model/FieldEEzsigntemplateRecognition.md)
- [FieldEEzsigntemplateType](docs/Model/FieldEEzsigntemplateType.md)
- [FieldEEzsigntemplatedocumentpagerecognitionOperator](docs/Model/FieldEEzsigntemplatedocumentpagerecognitionOperator.md)
- [FieldEEzsigntemplatedocumentpagerecognitionSection](docs/Model/FieldEEzsigntemplatedocumentpagerecognitionSection.md)
- [FieldEEzsigntemplateelementdependencyOperator](docs/Model/FieldEEzsigntemplateelementdependencyOperator.md)
- [FieldEEzsigntemplateelementdependencyValidation](docs/Model/FieldEEzsigntemplateelementdependencyValidation.md)
- [FieldEEzsigntemplateformfieldDependencyrequirement](docs/Model/FieldEEzsigntemplateformfieldDependencyrequirement.md)
- [FieldEEzsigntemplateformfieldPositioning](docs/Model/FieldEEzsigntemplateformfieldPositioning.md)
- [FieldEEzsigntemplateformfieldPositioningoccurence](docs/Model/FieldEEzsigntemplateformfieldPositioningoccurence.md)
- [FieldEEzsigntemplateformfieldgroupSignerrequirement](docs/Model/FieldEEzsigntemplateformfieldgroupSignerrequirement.md)
- [FieldEEzsigntemplateformfieldgroupTooltipposition](docs/Model/FieldEEzsigntemplateformfieldgroupTooltipposition.md)
- [FieldEEzsigntemplateformfieldgroupType](docs/Model/FieldEEzsigntemplateformfieldgroupType.md)
- [FieldEEzsigntemplateglobalModule](docs/Model/FieldEEzsigntemplateglobalModule.md)
- [FieldEEzsigntemplateglobalSupplier](docs/Model/FieldEEzsigntemplateglobalSupplier.md)
- [FieldEEzsigntemplatepackagesignerMapping](docs/Model/FieldEEzsigntemplatepackagesignerMapping.md)
- [FieldEEzsigntemplatepublicLimittype](docs/Model/FieldEEzsigntemplatepublicLimittype.md)
- [FieldEEzsigntemplatesignatureAttachmentnamesource](docs/Model/FieldEEzsigntemplatesignatureAttachmentnamesource.md)
- [FieldEEzsigntemplatesignatureConsultationtrigger](docs/Model/FieldEEzsigntemplatesignatureConsultationtrigger.md)
- [FieldEEzsigntemplatesignatureDependencyrequirement](docs/Model/FieldEEzsigntemplatesignatureDependencyrequirement.md)
- [FieldEEzsigntemplatesignatureFont](docs/Model/FieldEEzsigntemplatesignatureFont.md)
- [FieldEEzsigntemplatesignaturePositioning](docs/Model/FieldEEzsigntemplatesignaturePositioning.md)
- [FieldEEzsigntemplatesignaturePositioningoccurence](docs/Model/FieldEEzsigntemplatesignaturePositioningoccurence.md)
- [FieldEEzsigntemplatesignatureTooltipposition](docs/Model/FieldEEzsigntemplatesignatureTooltipposition.md)
- [FieldEEzsigntemplatesignatureType](docs/Model/FieldEEzsigntemplatesignatureType.md)
- [FieldEEzsigntemplatesignerMapping](docs/Model/FieldEEzsigntemplatesignerMapping.md)
- [FieldENotificationpreferenceStatus](docs/Model/FieldENotificationpreferenceStatus.md)
- [FieldEPaymentgatewayProcessor](docs/Model/FieldEPaymentgatewayProcessor.md)
- [FieldEPaymenttermType](docs/Model/FieldEPaymenttermType.md)
- [FieldEPhoneType](docs/Model/FieldEPhoneType.md)
- [FieldESessionhistoryEndby](docs/Model/FieldESessionhistoryEndby.md)
- [FieldESignaturePreference](docs/Model/FieldESignaturePreference.md)
- [FieldESystemconfigurationEzsign](docs/Model/FieldESystemconfigurationEzsign.md)
- [FieldESystemconfigurationEzsignofficeplan](docs/Model/FieldESystemconfigurationEzsignofficeplan.md)
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
- [FranchisereferalincomeCreateObjectV2Request](docs/Model/FranchisereferalincomeCreateObjectV2Request.md)
- [FranchisereferalincomeCreateObjectV2Response](docs/Model/FranchisereferalincomeCreateObjectV2Response.md)
- [FranchisereferalincomeCreateObjectV2ResponseMPayload](docs/Model/FranchisereferalincomeCreateObjectV2ResponseMPayload.md)
- [FranchisereferalincomeRequest](docs/Model/FranchisereferalincomeRequest.md)
- [FranchisereferalincomeRequestCompound](docs/Model/FranchisereferalincomeRequestCompound.md)
- [GlaccountAutocompleteElementResponse](docs/Model/GlaccountAutocompleteElementResponse.md)
- [GlaccountGetAutocompleteV2Response](docs/Model/GlaccountGetAutocompleteV2Response.md)
- [GlaccountGetAutocompleteV2ResponseMPayload](docs/Model/GlaccountGetAutocompleteV2ResponseMPayload.md)
- [GlaccountcontainerAutocompleteElementResponse](docs/Model/GlaccountcontainerAutocompleteElementResponse.md)
- [GlaccountcontainerGetAutocompleteV2Response](docs/Model/GlaccountcontainerGetAutocompleteV2Response.md)
- [GlaccountcontainerGetAutocompleteV2ResponseMPayload](docs/Model/GlaccountcontainerGetAutocompleteV2ResponseMPayload.md)
- [GlobalCustomerGetEndpointV1Response](docs/Model/GlobalCustomerGetEndpointV1Response.md)
- [GlobalEzmaxclientVersionV1Response](docs/Model/GlobalEzmaxclientVersionV1Response.md)
- [GlobalEzmaxcustomerGetConfigurationV1Response](docs/Model/GlobalEzmaxcustomerGetConfigurationV1Response.md)
- [HeaderAcceptLanguage](docs/Model/HeaderAcceptLanguage.md)
- [InscriptionGetAttachmentsV1Response](docs/Model/InscriptionGetAttachmentsV1Response.md)
- [InscriptionGetAttachmentsV1ResponseMPayload](docs/Model/InscriptionGetAttachmentsV1ResponseMPayload.md)
- [InscriptionGetCommunicationCountV1Response](docs/Model/InscriptionGetCommunicationCountV1Response.md)
- [InscriptionGetCommunicationCountV1ResponseMPayload](docs/Model/InscriptionGetCommunicationCountV1ResponseMPayload.md)
- [InscriptionGetCommunicationListV1Response](docs/Model/InscriptionGetCommunicationListV1Response.md)
- [InscriptionGetCommunicationListV1ResponseMPayload](docs/Model/InscriptionGetCommunicationListV1ResponseMPayload.md)
- [InscriptionGetCommunicationrecipientsV1Response](docs/Model/InscriptionGetCommunicationrecipientsV1Response.md)
- [InscriptionGetCommunicationrecipientsV1ResponseMPayload](docs/Model/InscriptionGetCommunicationrecipientsV1ResponseMPayload.md)
- [InscriptionGetCommunicationsendersV1Response](docs/Model/InscriptionGetCommunicationsendersV1Response.md)
- [InscriptionGetCommunicationsendersV1ResponseMPayload](docs/Model/InscriptionGetCommunicationsendersV1ResponseMPayload.md)
- [InscriptionnotauthenticatedGetCommunicationCountV1Response](docs/Model/InscriptionnotauthenticatedGetCommunicationCountV1Response.md)
- [InscriptionnotauthenticatedGetCommunicationCountV1ResponseMPayload](docs/Model/InscriptionnotauthenticatedGetCommunicationCountV1ResponseMPayload.md)
- [InscriptionnotauthenticatedGetCommunicationListV1Response](docs/Model/InscriptionnotauthenticatedGetCommunicationListV1Response.md)
- [InscriptionnotauthenticatedGetCommunicationListV1ResponseMPayload](docs/Model/InscriptionnotauthenticatedGetCommunicationListV1ResponseMPayload.md)
- [InscriptionnotauthenticatedGetCommunicationrecipientsV1Response](docs/Model/InscriptionnotauthenticatedGetCommunicationrecipientsV1Response.md)
- [InscriptionnotauthenticatedGetCommunicationrecipientsV1ResponseMPayload](docs/Model/InscriptionnotauthenticatedGetCommunicationrecipientsV1ResponseMPayload.md)
- [InscriptionnotauthenticatedGetCommunicationsendersV1Response](docs/Model/InscriptionnotauthenticatedGetCommunicationsendersV1Response.md)
- [InscriptionnotauthenticatedGetCommunicationsendersV1ResponseMPayload](docs/Model/InscriptionnotauthenticatedGetCommunicationsendersV1ResponseMPayload.md)
- [InscriptiontempGetCommunicationCountV1Response](docs/Model/InscriptiontempGetCommunicationCountV1Response.md)
- [InscriptiontempGetCommunicationCountV1ResponseMPayload](docs/Model/InscriptiontempGetCommunicationCountV1ResponseMPayload.md)
- [InscriptiontempGetCommunicationListV1Response](docs/Model/InscriptiontempGetCommunicationListV1Response.md)
- [InscriptiontempGetCommunicationListV1ResponseMPayload](docs/Model/InscriptiontempGetCommunicationListV1ResponseMPayload.md)
- [InscriptiontempGetCommunicationrecipientsV1Response](docs/Model/InscriptiontempGetCommunicationrecipientsV1Response.md)
- [InscriptiontempGetCommunicationrecipientsV1ResponseMPayload](docs/Model/InscriptiontempGetCommunicationrecipientsV1ResponseMPayload.md)
- [InscriptiontempGetCommunicationsendersV1Response](docs/Model/InscriptiontempGetCommunicationsendersV1Response.md)
- [InscriptiontempGetCommunicationsendersV1ResponseMPayload](docs/Model/InscriptiontempGetCommunicationsendersV1ResponseMPayload.md)
- [InvoiceGetAttachmentsV1Response](docs/Model/InvoiceGetAttachmentsV1Response.md)
- [InvoiceGetAttachmentsV1ResponseMPayload](docs/Model/InvoiceGetAttachmentsV1ResponseMPayload.md)
- [InvoiceGetCommunicationCountV1Response](docs/Model/InvoiceGetCommunicationCountV1Response.md)
- [InvoiceGetCommunicationCountV1ResponseMPayload](docs/Model/InvoiceGetCommunicationCountV1ResponseMPayload.md)
- [InvoiceGetCommunicationListV1Response](docs/Model/InvoiceGetCommunicationListV1Response.md)
- [InvoiceGetCommunicationListV1ResponseMPayload](docs/Model/InvoiceGetCommunicationListV1ResponseMPayload.md)
- [InvoiceGetCommunicationrecipientsV1Response](docs/Model/InvoiceGetCommunicationrecipientsV1Response.md)
- [InvoiceGetCommunicationrecipientsV1ResponseMPayload](docs/Model/InvoiceGetCommunicationrecipientsV1ResponseMPayload.md)
- [InvoiceGetCommunicationsendersV1Response](docs/Model/InvoiceGetCommunicationsendersV1Response.md)
- [InvoiceGetCommunicationsendersV1ResponseMPayload](docs/Model/InvoiceGetCommunicationsendersV1ResponseMPayload.md)
- [LanguageAutocompleteElementResponse](docs/Model/LanguageAutocompleteElementResponse.md)
- [LanguageGetAutocompleteV2Response](docs/Model/LanguageGetAutocompleteV2Response.md)
- [LanguageGetAutocompleteV2ResponseMPayload](docs/Model/LanguageGetAutocompleteV2ResponseMPayload.md)
- [ModuleAutocompleteElementResponse](docs/Model/ModuleAutocompleteElementResponse.md)
- [ModuleGetAutocompleteV2Response](docs/Model/ModuleGetAutocompleteV2Response.md)
- [ModuleGetAutocompleteV2ResponseMPayload](docs/Model/ModuleGetAutocompleteV2ResponseMPayload.md)
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
- [MultilingualEzdoctemplatedocumentName](docs/Model/MultilingualEzdoctemplatedocumentName.md)
- [MultilingualEzmaxinvoicingsummaryinternalDescription](docs/Model/MultilingualEzmaxinvoicingsummaryinternalDescription.md)
- [MultilingualEzsignfoldertypeName](docs/Model/MultilingualEzsignfoldertypeName.md)
- [MultilingualEzsignsignergroupDescription](docs/Model/MultilingualEzsignsignergroupDescription.md)
- [MultilingualEzsignsigningreasonDescription](docs/Model/MultilingualEzsignsigningreasonDescription.md)
- [MultilingualNotificationsubsectionName](docs/Model/MultilingualNotificationsubsectionName.md)
- [MultilingualNotificationtestName](docs/Model/MultilingualNotificationtestName.md)
- [MultilingualPaymentgatewayDescription](docs/Model/MultilingualPaymentgatewayDescription.md)
- [MultilingualPaymenttermDescription](docs/Model/MultilingualPaymenttermDescription.md)
- [MultilingualSubnetDescription](docs/Model/MultilingualSubnetDescription.md)
- [MultilingualSupplyDescription](docs/Model/MultilingualSupplyDescription.md)
- [MultilingualUsergroupName](docs/Model/MultilingualUsergroupName.md)
- [MultilingualUserlogintypeDescription](docs/Model/MultilingualUserlogintypeDescription.md)
- [MultilingualVariableexpenseDescription](docs/Model/MultilingualVariableexpenseDescription.md)
- [MultilingualVersionhistoryDetail](docs/Model/MultilingualVersionhistoryDetail.md)
- [NotificationsectionGetNotificationtestsV1Response](docs/Model/NotificationsectionGetNotificationtestsV1Response.md)
- [NotificationsectionGetNotificationtestsV1ResponseMPayload](docs/Model/NotificationsectionGetNotificationtestsV1ResponseMPayload.md)
- [NotificationsubsectionResponse](docs/Model/NotificationsubsectionResponse.md)
- [NotificationtestGetElementsV1Response](docs/Model/NotificationtestGetElementsV1Response.md)
- [NotificationtestGetElementsV1ResponseMPayload](docs/Model/NotificationtestGetElementsV1ResponseMPayload.md)
- [NotificationtestResponse](docs/Model/NotificationtestResponse.md)
- [OtherincomeGetCommunicationCountV1Response](docs/Model/OtherincomeGetCommunicationCountV1Response.md)
- [OtherincomeGetCommunicationCountV1ResponseMPayload](docs/Model/OtherincomeGetCommunicationCountV1ResponseMPayload.md)
- [OtherincomeGetCommunicationListV1Response](docs/Model/OtherincomeGetCommunicationListV1Response.md)
- [OtherincomeGetCommunicationListV1ResponseMPayload](docs/Model/OtherincomeGetCommunicationListV1ResponseMPayload.md)
- [OtherincomeGetCommunicationrecipientsV1Response](docs/Model/OtherincomeGetCommunicationrecipientsV1Response.md)
- [OtherincomeGetCommunicationrecipientsV1ResponseMPayload](docs/Model/OtherincomeGetCommunicationrecipientsV1ResponseMPayload.md)
- [OtherincomeGetCommunicationsendersV1Response](docs/Model/OtherincomeGetCommunicationsendersV1Response.md)
- [OtherincomeGetCommunicationsendersV1ResponseMPayload](docs/Model/OtherincomeGetCommunicationsendersV1ResponseMPayload.md)
- [PaymentgatewayAutocompleteElementResponse](docs/Model/PaymentgatewayAutocompleteElementResponse.md)
- [PaymentgatewayCreateObjectV1Request](docs/Model/PaymentgatewayCreateObjectV1Request.md)
- [PaymentgatewayCreateObjectV1Response](docs/Model/PaymentgatewayCreateObjectV1Response.md)
- [PaymentgatewayCreateObjectV1ResponseMPayload](docs/Model/PaymentgatewayCreateObjectV1ResponseMPayload.md)
- [PaymentgatewayEditObjectV1Request](docs/Model/PaymentgatewayEditObjectV1Request.md)
- [PaymentgatewayEditObjectV1Response](docs/Model/PaymentgatewayEditObjectV1Response.md)
- [PaymentgatewayGetAutocompleteV2Response](docs/Model/PaymentgatewayGetAutocompleteV2Response.md)
- [PaymentgatewayGetAutocompleteV2ResponseMPayload](docs/Model/PaymentgatewayGetAutocompleteV2ResponseMPayload.md)
- [PaymentgatewayGetListV1Response](docs/Model/PaymentgatewayGetListV1Response.md)
- [PaymentgatewayGetListV1ResponseMPayload](docs/Model/PaymentgatewayGetListV1ResponseMPayload.md)
- [PaymentgatewayGetObjectV2Response](docs/Model/PaymentgatewayGetObjectV2Response.md)
- [PaymentgatewayGetObjectV2ResponseMPayload](docs/Model/PaymentgatewayGetObjectV2ResponseMPayload.md)
- [PaymentgatewayListElement](docs/Model/PaymentgatewayListElement.md)
- [PaymentgatewayRequest](docs/Model/PaymentgatewayRequest.md)
- [PaymentgatewayRequestCompound](docs/Model/PaymentgatewayRequestCompound.md)
- [PaymentgatewayResponse](docs/Model/PaymentgatewayResponse.md)
- [PaymentgatewayResponseCompound](docs/Model/PaymentgatewayResponseCompound.md)
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
- [PdfalevelAutocompleteElementResponse](docs/Model/PdfalevelAutocompleteElementResponse.md)
- [PdfalevelGetAutocompleteV2Response](docs/Model/PdfalevelGetAutocompleteV2Response.md)
- [PdfalevelGetAutocompleteV2ResponseMPayload](docs/Model/PdfalevelGetAutocompleteV2ResponseMPayload.md)
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
- [PhoneRequestCompoundV2](docs/Model/PhoneRequestCompoundV2.md)
- [PhoneRequestV2](docs/Model/PhoneRequestV2.md)
- [PhoneResponse](docs/Model/PhoneResponse.md)
- [PhoneResponseCompound](docs/Model/PhoneResponseCompound.md)
- [PhonetypeAutocompleteElementResponse](docs/Model/PhonetypeAutocompleteElementResponse.md)
- [PhonetypeGetAutocompleteV2Response](docs/Model/PhonetypeGetAutocompleteV2Response.md)
- [PhonetypeGetAutocompleteV2ResponseMPayload](docs/Model/PhonetypeGetAutocompleteV2ResponseMPayload.md)
- [ProvinceAutocompleteElementResponse](docs/Model/ProvinceAutocompleteElementResponse.md)
- [ProvinceGetAutocompleteV2Response](docs/Model/ProvinceGetAutocompleteV2Response.md)
- [ProvinceGetAutocompleteV2ResponseMPayload](docs/Model/ProvinceGetAutocompleteV2ResponseMPayload.md)
- [RejectedoffertopurchaseGetCommunicationCountV1Response](docs/Model/RejectedoffertopurchaseGetCommunicationCountV1Response.md)
- [RejectedoffertopurchaseGetCommunicationCountV1ResponseMPayload](docs/Model/RejectedoffertopurchaseGetCommunicationCountV1ResponseMPayload.md)
- [RejectedoffertopurchaseGetCommunicationListV1Response](docs/Model/RejectedoffertopurchaseGetCommunicationListV1Response.md)
- [RejectedoffertopurchaseGetCommunicationListV1ResponseMPayload](docs/Model/RejectedoffertopurchaseGetCommunicationListV1ResponseMPayload.md)
- [RejectedoffertopurchaseGetCommunicationrecipientsV1Response](docs/Model/RejectedoffertopurchaseGetCommunicationrecipientsV1Response.md)
- [RejectedoffertopurchaseGetCommunicationrecipientsV1ResponseMPayload](docs/Model/RejectedoffertopurchaseGetCommunicationrecipientsV1ResponseMPayload.md)
- [RejectedoffertopurchaseGetCommunicationsendersV1Response](docs/Model/RejectedoffertopurchaseGetCommunicationsendersV1Response.md)
- [RejectedoffertopurchaseGetCommunicationsendersV1ResponseMPayload](docs/Model/RejectedoffertopurchaseGetCommunicationsendersV1ResponseMPayload.md)
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
- [SignatureGetObjectV3Response](docs/Model/SignatureGetObjectV3Response.md)
- [SignatureGetObjectV3ResponseMPayload](docs/Model/SignatureGetObjectV3ResponseMPayload.md)
- [SignatureRequest](docs/Model/SignatureRequest.md)
- [SignatureRequestCompound](docs/Model/SignatureRequestCompound.md)
- [SignatureResponse](docs/Model/SignatureResponse.md)
- [SignatureResponseCompound](docs/Model/SignatureResponseCompound.md)
- [SignatureResponseCompoundV3](docs/Model/SignatureResponseCompoundV3.md)
- [SignatureResponseV3](docs/Model/SignatureResponseV3.md)
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
- [SupplyAutocompleteElementResponse](docs/Model/SupplyAutocompleteElementResponse.md)
- [SupplyCreateObjectV1Request](docs/Model/SupplyCreateObjectV1Request.md)
- [SupplyCreateObjectV1Response](docs/Model/SupplyCreateObjectV1Response.md)
- [SupplyCreateObjectV1ResponseMPayload](docs/Model/SupplyCreateObjectV1ResponseMPayload.md)
- [SupplyDeleteObjectV1Response](docs/Model/SupplyDeleteObjectV1Response.md)
- [SupplyEditObjectV1Request](docs/Model/SupplyEditObjectV1Request.md)
- [SupplyEditObjectV1Response](docs/Model/SupplyEditObjectV1Response.md)
- [SupplyGetAutocompleteV2Response](docs/Model/SupplyGetAutocompleteV2Response.md)
- [SupplyGetAutocompleteV2ResponseMPayload](docs/Model/SupplyGetAutocompleteV2ResponseMPayload.md)
- [SupplyGetListV1Response](docs/Model/SupplyGetListV1Response.md)
- [SupplyGetListV1ResponseMPayload](docs/Model/SupplyGetListV1ResponseMPayload.md)
- [SupplyGetObjectV2Response](docs/Model/SupplyGetObjectV2Response.md)
- [SupplyGetObjectV2ResponseMPayload](docs/Model/SupplyGetObjectV2ResponseMPayload.md)
- [SupplyListElement](docs/Model/SupplyListElement.md)
- [SupplyRequest](docs/Model/SupplyRequest.md)
- [SupplyRequestCompound](docs/Model/SupplyRequestCompound.md)
- [SupplyResponse](docs/Model/SupplyResponse.md)
- [SupplyResponseCompound](docs/Model/SupplyResponseCompound.md)
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
- [TextstylestaticRequest](docs/Model/TextstylestaticRequest.md)
- [TextstylestaticRequestCompound](docs/Model/TextstylestaticRequestCompound.md)
- [TextstylestaticResponse](docs/Model/TextstylestaticResponse.md)
- [TextstylestaticResponseCompound](docs/Model/TextstylestaticResponseCompound.md)
- [TimezoneAutocompleteElementResponse](docs/Model/TimezoneAutocompleteElementResponse.md)
- [TimezoneGetAutocompleteV2Response](docs/Model/TimezoneGetAutocompleteV2Response.md)
- [TimezoneGetAutocompleteV2ResponseMPayload](docs/Model/TimezoneGetAutocompleteV2ResponseMPayload.md)
- [TranqcontractGetCommunicationCountV1Response](docs/Model/TranqcontractGetCommunicationCountV1Response.md)
- [TranqcontractGetCommunicationCountV1ResponseMPayload](docs/Model/TranqcontractGetCommunicationCountV1ResponseMPayload.md)
- [TranqcontractGetCommunicationListV1Response](docs/Model/TranqcontractGetCommunicationListV1Response.md)
- [TranqcontractGetCommunicationListV1ResponseMPayload](docs/Model/TranqcontractGetCommunicationListV1ResponseMPayload.md)
- [TranqcontractGetCommunicationrecipientsV1Response](docs/Model/TranqcontractGetCommunicationrecipientsV1Response.md)
- [TranqcontractGetCommunicationrecipientsV1ResponseMPayload](docs/Model/TranqcontractGetCommunicationrecipientsV1ResponseMPayload.md)
- [TranqcontractGetCommunicationsendersV1Response](docs/Model/TranqcontractGetCommunicationsendersV1Response.md)
- [TranqcontractGetCommunicationsendersV1ResponseMPayload](docs/Model/TranqcontractGetCommunicationsendersV1ResponseMPayload.md)
- [UserAutocompleteElementResponse](docs/Model/UserAutocompleteElementResponse.md)
- [UserCreateEzsignuserV1Request](docs/Model/UserCreateEzsignuserV1Request.md)
- [UserCreateEzsignuserV1Response](docs/Model/UserCreateEzsignuserV1Response.md)
- [UserCreateEzsignuserV1ResponseMPayload](docs/Model/UserCreateEzsignuserV1ResponseMPayload.md)
- [UserCreateObjectV1Request](docs/Model/UserCreateObjectV1Request.md)
- [UserCreateObjectV1Response](docs/Model/UserCreateObjectV1Response.md)
- [UserCreateObjectV1ResponseMPayload](docs/Model/UserCreateObjectV1ResponseMPayload.md)
- [UserCreateObjectV2Request](docs/Model/UserCreateObjectV2Request.md)
- [UserCreateObjectV2Response](docs/Model/UserCreateObjectV2Response.md)
- [UserCreateObjectV2ResponseMPayload](docs/Model/UserCreateObjectV2ResponseMPayload.md)
- [UserEditColleaguesV2Request](docs/Model/UserEditColleaguesV2Request.md)
- [UserEditColleaguesV2Response](docs/Model/UserEditColleaguesV2Response.md)
- [UserEditColleaguesV2ResponseMPayload](docs/Model/UserEditColleaguesV2ResponseMPayload.md)
- [UserEditObjectV1Request](docs/Model/UserEditObjectV1Request.md)
- [UserEditObjectV1Response](docs/Model/UserEditObjectV1Response.md)
- [UserEditPermissionsV1Request](docs/Model/UserEditPermissionsV1Request.md)
- [UserEditPermissionsV1Response](docs/Model/UserEditPermissionsV1Response.md)
- [UserEditPermissionsV1ResponseMPayload](docs/Model/UserEditPermissionsV1ResponseMPayload.md)
- [UserGetApikeysV1Response](docs/Model/UserGetApikeysV1Response.md)
- [UserGetApikeysV1ResponseMPayload](docs/Model/UserGetApikeysV1ResponseMPayload.md)
- [UserGetAutocompleteV2Response](docs/Model/UserGetAutocompleteV2Response.md)
- [UserGetAutocompleteV2ResponseMPayload](docs/Model/UserGetAutocompleteV2ResponseMPayload.md)
- [UserGetColleaguesV2Response](docs/Model/UserGetColleaguesV2Response.md)
- [UserGetColleaguesV2ResponseMPayload](docs/Model/UserGetColleaguesV2ResponseMPayload.md)
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
- [UserGetUsergroupexternalsV1Response](docs/Model/UserGetUsergroupexternalsV1Response.md)
- [UserGetUsergroupexternalsV1ResponseMPayload](docs/Model/UserGetUsergroupexternalsV1ResponseMPayload.md)
- [UserGetUsergroupsV1Response](docs/Model/UserGetUsergroupsV1Response.md)
- [UserGetUsergroupsV1ResponseMPayload](docs/Model/UserGetUsergroupsV1ResponseMPayload.md)
- [UserListElement](docs/Model/UserListElement.md)
- [UserRequest](docs/Model/UserRequest.md)
- [UserRequestCompound](docs/Model/UserRequestCompound.md)
- [UserRequestCompoundV2](docs/Model/UserRequestCompoundV2.md)
- [UserRequestV2](docs/Model/UserRequestV2.md)
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
- [UsergroupexternalAutocompleteElementResponse](docs/Model/UsergroupexternalAutocompleteElementResponse.md)
- [UsergroupexternalCreateObjectV1Request](docs/Model/UsergroupexternalCreateObjectV1Request.md)
- [UsergroupexternalCreateObjectV1Response](docs/Model/UsergroupexternalCreateObjectV1Response.md)
- [UsergroupexternalCreateObjectV1ResponseMPayload](docs/Model/UsergroupexternalCreateObjectV1ResponseMPayload.md)
- [UsergroupexternalDeleteObjectV1Response](docs/Model/UsergroupexternalDeleteObjectV1Response.md)
- [UsergroupexternalEditObjectV1Request](docs/Model/UsergroupexternalEditObjectV1Request.md)
- [UsergroupexternalEditObjectV1Response](docs/Model/UsergroupexternalEditObjectV1Response.md)
- [UsergroupexternalGetAutocompleteV2Response](docs/Model/UsergroupexternalGetAutocompleteV2Response.md)
- [UsergroupexternalGetAutocompleteV2ResponseMPayload](docs/Model/UsergroupexternalGetAutocompleteV2ResponseMPayload.md)
- [UsergroupexternalGetListV1Response](docs/Model/UsergroupexternalGetListV1Response.md)
- [UsergroupexternalGetListV1ResponseMPayload](docs/Model/UsergroupexternalGetListV1ResponseMPayload.md)
- [UsergroupexternalGetObjectV2Response](docs/Model/UsergroupexternalGetObjectV2Response.md)
- [UsergroupexternalGetObjectV2ResponseMPayload](docs/Model/UsergroupexternalGetObjectV2ResponseMPayload.md)
- [UsergroupexternalGetUsergroupexternalmembershipsV1Response](docs/Model/UsergroupexternalGetUsergroupexternalmembershipsV1Response.md)
- [UsergroupexternalGetUsergroupexternalmembershipsV1ResponseMPayload](docs/Model/UsergroupexternalGetUsergroupexternalmembershipsV1ResponseMPayload.md)
- [UsergroupexternalGetUsergroupsV1Response](docs/Model/UsergroupexternalGetUsergroupsV1Response.md)
- [UsergroupexternalGetUsergroupsV1ResponseMPayload](docs/Model/UsergroupexternalGetUsergroupsV1ResponseMPayload.md)
- [UsergroupexternalListElement](docs/Model/UsergroupexternalListElement.md)
- [UsergroupexternalRequest](docs/Model/UsergroupexternalRequest.md)
- [UsergroupexternalRequestCompound](docs/Model/UsergroupexternalRequestCompound.md)
- [UsergroupexternalResponse](docs/Model/UsergroupexternalResponse.md)
- [UsergroupexternalResponseCompound](docs/Model/UsergroupexternalResponseCompound.md)
- [UsergroupexternalmembershipResponse](docs/Model/UsergroupexternalmembershipResponse.md)
- [UsergroupexternalmembershipResponseCompound](docs/Model/UsergroupexternalmembershipResponseCompound.md)
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
- [UserlogintypeResponse](docs/Model/UserlogintypeResponse.md)
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
- [WebhookCreateObjectV2Request](docs/Model/WebhookCreateObjectV2Request.md)
- [WebhookCreateObjectV2Response](docs/Model/WebhookCreateObjectV2Response.md)
- [WebhookCreateObjectV2ResponseMPayload](docs/Model/WebhookCreateObjectV2ResponseMPayload.md)
- [WebhookDeleteObjectV1Response](docs/Model/WebhookDeleteObjectV1Response.md)
- [WebhookEditObjectV1Request](docs/Model/WebhookEditObjectV1Request.md)
- [WebhookEditObjectV1Response](docs/Model/WebhookEditObjectV1Response.md)
- [WebhookEzsignDocumentCompleted](docs/Model/WebhookEzsignDocumentCompleted.md)
- [WebhookEzsignDocumentFormCompleted](docs/Model/WebhookEzsignDocumentFormCompleted.md)
- [WebhookEzsignDocumentUnsent](docs/Model/WebhookEzsignDocumentUnsent.md)
- [WebhookEzsignEzsignsignerAcceptclause](docs/Model/WebhookEzsignEzsignsignerAcceptclause.md)
- [WebhookEzsignEzsignsignerConnect](docs/Model/WebhookEzsignEzsignsignerConnect.md)
- [WebhookEzsignFolderCompleted](docs/Model/WebhookEzsignFolderCompleted.md)
- [WebhookEzsignFolderDisposed](docs/Model/WebhookEzsignFolderDisposed.md)
- [WebhookEzsignFolderSent](docs/Model/WebhookEzsignFolderSent.md)
- [WebhookEzsignFolderUnsent](docs/Model/WebhookEzsignFolderUnsent.md)
- [WebhookEzsignSignatureSigned](docs/Model/WebhookEzsignSignatureSigned.md)
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
- [WebhookSendWebhookV1Request](docs/Model/WebhookSendWebhookV1Request.md)
- [WebhookSendWebhookV1Response](docs/Model/WebhookSendWebhookV1Response.md)
- [WebhookTestV1Response](docs/Model/WebhookTestV1Response.md)
- [WebhookUserUserCreated](docs/Model/WebhookUserUserCreated.md)
- [WebhookUserstagedUserstagedCreated](docs/Model/WebhookUserstagedUserstagedCreated.md)
- [WebhookheaderRequest](docs/Model/WebhookheaderRequest.md)
- [WebhookheaderRequestCompound](docs/Model/WebhookheaderRequestCompound.md)
- [WebhookheaderResponse](docs/Model/WebhookheaderResponse.md)
- [WebhookheaderResponseCompound](docs/Model/WebhookheaderResponseCompound.md)
- [WebsiteRequest](docs/Model/WebsiteRequest.md)
- [WebsiteRequestCompound](docs/Model/WebsiteRequestCompound.md)
- [WebsiteResponse](docs/Model/WebsiteResponse.md)
- [WebsiteResponseCompound](docs/Model/WebsiteResponseCompound.md)
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

- API version: `1.2.2`
    - Package version: `1.2.2`
    - Generator version: `7.12.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
