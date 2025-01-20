# # EzsignformfieldgroupRequestCompound

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**pkiEzsignformfieldgroupID** | **int** | The unique ID of the Ezsignformfieldgroup | [optional]
**fkiEzsigndocumentID** | **int** | The unique ID of the Ezsigndocument |
**eEzsignformfieldgroupType** | [**\eZmaxAPI\Model\FieldEEzsignformfieldgroupType**](FieldEEzsignformfieldgroupType.md) |  |
**eEzsignformfieldgroupSignerrequirement** | [**\eZmaxAPI\Model\FieldEEzsignformfieldgroupSignerrequirement**](FieldEEzsignformfieldgroupSignerrequirement.md) |  | [optional]
**sEzsignformfieldgroupLabel** | **string** | The Label for the Ezsignformfieldgroup |
**iEzsignformfieldgroupStep** | **int** | The step when the Ezsignsigner will be invited to fill the form fields |
**sEzsignformfieldgroupDefaultvalue** | **string** | The default value for the Ezsignformfieldgroup  You can use the codes below and they will be replaced at signature time.    | Code | Description | Example | | ------------------------- | ------------ | ------------ | | {sUserFirstname} | The first name of the contact | John | | {sUserLastname} | The last name of the contact | Doe | | {sUserJobtitle} | The job title | Sales Representative | | {sCompany} | Company name | eZmax Solutions Inc. | | {sEmailAddress} | The email address | email@example.com | | {sPhoneE164} | A phone number in E.164 Format | +15149901516 | | {sPhoneE164Cell} | A phone number in E.164 Format | +15149901516 | | [optional]
**iEzsignformfieldgroupFilledmin** | **int** | The minimum number of Ezsignformfield that must be filled in the Ezsignformfieldgroup |
**iEzsignformfieldgroupFilledmax** | **int** | The maximum number of Ezsignformfield that must be filled in the Ezsignformfieldgroup |
**bEzsignformfieldgroupReadonly** | **bool** | Whether the Ezsignformfieldgroup is read only or not. |
**iEzsignformfieldgroupMaxlength** | **int** | The maximum length for the value in the Ezsignformfieldgroup  This can only be set if eEzsignformfieldgroupType is **Text** or **Textarea** | [optional]
**bEzsignformfieldgroupEncrypted** | **bool** | Whether the Ezsignformfieldgroup is encrypted in the database or not. Encrypted values are not displayed on the Ezsigndocument. This can only be set if eEzsignformfieldgroupType is **Text** or **Textarea** | [optional]
**sEzsignformfieldgroupRegexp** | **string** | A regular expression to indicate what values are acceptable for the Ezsignformfieldgroup.  This can only be set if eEzsignformfieldgroupType is **Text** or **Textarea** | [optional]
**sEzsignformfieldgroupTextvalidationcustommessage** | **string** | Description of validation rule. Show by signatory. | [optional]
**tEzsignformfieldgroupTooltip** | **string** | A tooltip that will be presented to Ezsignsigner about the Ezsignformfieldgroup | [optional]
**eEzsignformfieldgroupTooltipposition** | [**\eZmaxAPI\Model\FieldEEzsignformfieldgroupTooltipposition**](FieldEEzsignformfieldgroupTooltipposition.md) |  | [optional]
**eEzsignformfieldgroupTextvalidation** | [**\eZmaxAPI\Model\EnumTextvalidation**](EnumTextvalidation.md) |  | [optional]
**aObjEzsignformfieldgroupsigner** | [**\eZmaxAPI\Model\EzsignformfieldgroupsignerRequestCompound[]**](EzsignformfieldgroupsignerRequest.md) |  |
**aObjDropdownElement** | [**\eZmaxAPI\Model\CustomDropdownElementRequestCompound[]**](CustomDropdownElementRequest.md) |  | [optional]
**aObjEzsignformfield** | [**\eZmaxAPI\Model\EzsignformfieldRequestCompound[]**](EzsignformfieldRequestCompound.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
