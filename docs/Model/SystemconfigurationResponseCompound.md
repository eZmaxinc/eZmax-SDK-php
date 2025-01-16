# # SystemconfigurationResponseCompound

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**pkiSystemconfigurationID** | **int** | The unique ID of the Systemconfiguration |
**fkiSystemconfigurationtypeID** | **int** | The unique ID of the Systemconfigurationtype |
**fkiBrandingID** | **int** | The unique ID of the Branding | [optional]
**sSystemconfigurationtypeDescriptionX** | **string** | The description of the Systemconfigurationtype in the language of the requester |
**eSystemconfigurationNewexternaluseraction** | [**\eZmaxAPI\Model\FieldESystemconfigurationNewexternaluseraction**](FieldESystemconfigurationNewexternaluseraction.md) |  |
**eSystemconfigurationLanguage1** | [**\eZmaxAPI\Model\FieldESystemconfigurationLanguage1**](FieldESystemconfigurationLanguage1.md) |  |
**eSystemconfigurationLanguage2** | [**\eZmaxAPI\Model\FieldESystemconfigurationLanguage2**](FieldESystemconfigurationLanguage2.md) |  |
**eSystemconfigurationEzsign** | [**\eZmaxAPI\Model\FieldESystemconfigurationEzsign**](FieldESystemconfigurationEzsign.md) |  | [optional]
**eSystemconfigurationEzsignofficeplan** | [**\eZmaxAPI\Model\FieldESystemconfigurationEzsignofficeplan**](FieldESystemconfigurationEzsignofficeplan.md) |  | [optional]
**bSystemconfigurationEzsignpaidbyoffice** | **bool** | Whether if Ezsign is paid by the company or not | [optional]
**bSystemconfigurationEzsignpersonnal** | **bool** | Whether if we allow the creation of personal files in eZsign |
**bSystemconfigurationHascreditcardmerchant** | **bool** | Whether there is a creditcard merchant configured or not | [optional]
**bSystemconfigurationIsdisposalactive** | **bool** | Whether is Disposal processus is active or not | [optional]
**bSystemconfigurationSspr** | **bool** | Whether if we allow SSPR |
**dtSystemconfigurationReadonlyexpirationstart** | **string** | The start date where the system will be in read only | [optional]
**dtSystemconfigurationReadonlyexpirationend** | **string** | The end date where the system will be in read only | [optional]
**objBranding** | [**\eZmaxAPI\Model\CustomBrandingResponse**](CustomBrandingResponse.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
