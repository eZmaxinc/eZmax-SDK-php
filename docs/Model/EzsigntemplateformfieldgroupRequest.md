# # EzsigntemplateformfieldgroupRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**pkiEzsigntemplateformfieldgroupID** | **int** | The unique ID of the Ezsigntemplateformfieldgroup | [optional]
**fkiEzsigntemplatedocumentID** | **int** | The unique ID of the Ezsigntemplatedocument |
**eEzsigntemplateformfieldgroupType** | [**\eZmaxAPI\Model\FieldEEzsigntemplateformfieldgroupType**](FieldEEzsigntemplateformfieldgroupType.md) |  |
**eEzsigntemplateformfieldgroupSignerrequirement** | [**\eZmaxAPI\Model\FieldEEzsigntemplateformfieldgroupSignerrequirement**](FieldEEzsigntemplateformfieldgroupSignerrequirement.md) |  | [optional]
**sEzsigntemplateformfieldgroupLabel** | **string** | The Label for the Ezsigntemplateformfieldgroup |
**iEzsigntemplateformfieldgroupStep** | **int** | The step when the Ezsigntemplatesigner will be invited to fill the form fields |
**sEzsigntemplateformfieldgroupDefaultvalue** | **string** | The default value for the Ezsigntemplateformfieldgroup  You can use the codes below and they will be replaced at signature time.    | Code | Description | Example | | ------------------------- | ------------ | ------------ | | {sUserFirstname} | The first name of the contact | John | | {sUserLastname} | The last name of the contact | Doe | | {sUserJobtitle} | The job title | Sales Representative | | {sEmailAddress} | The email address | email@example.com | | {sPhoneE164} | A phone number in E.164 Format | +15149901516 | | {sPhoneE164Cell} | A phone number in E.164 Format | +15149901516 | |
**iEzsigntemplateformfieldgroupFilledmin** | **int** | The minimum number of Ezsigntemplateformfield that must be filled in the Ezsigntemplateformfieldgroup |
**iEzsigntemplateformfieldgroupFilledmax** | **int** | The maximum number of Ezsigntemplateformfield that must be filled in the Ezsigntemplateformfieldgroup |
**bEzsigntemplateformfieldgroupReadonly** | **bool** | Whether the Ezsigntemplateformfieldgroup is read only or not. |
**iEzsigntemplateformfieldgroupMaxlength** | **int** | The maximum length for the value in the Ezsigntemplateformfieldgroup  This can only be set if eEzsigntemplateformfieldgroupType is **Text** or **Textarea** | [optional]
**bEzsigntemplateformfieldgroupEncrypted** | **bool** | Whether the Ezsigntemplateformfieldgroup is encrypted in the database or not. Encrypted values are not displayed on the Ezsigndocument. This can only be set if eEzsigntemplateformfieldgroupType is **Text** or **Textarea** | [optional]
**sEzsigntemplateformfieldgroupRegexp** | **string** | A regular expression to indicate what values are acceptable for the Ezsigntemplateformfieldgroup.  This can only be set if eEzsigntemplateformfieldgroupType is **Text** or **Textarea** | [optional]
**eEzsigntemplateformfieldgroupTextvalidation** | [**\eZmaxAPI\Model\EnumTextvalidation**](EnumTextvalidation.md) |  | [optional]
**tEzsigntemplateformfieldgroupTooltip** | **string** | A tooltip that will be presented to Ezsigntemplatesigner about the Ezsigntemplateformfieldgroup | [optional]
**eEzsigntemplateformfieldgroupTooltipposition** | [**\eZmaxAPI\Model\FieldEEzsigntemplateformfieldgroupTooltipposition**](FieldEEzsigntemplateformfieldgroupTooltipposition.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
