# # EzsignformfieldgroupRequestCompound

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**pkiEzsignformfieldgroupID** | **int** | The unique ID of the Ezsignformfieldgroup | [optional]
**fkiEzsigndocumentID** | **int** | The unique ID of the Ezsigndocument |
**eEzsignformfieldgroupType** | [**\eZmaxAPI\Model\FieldEEzsignformfieldgroupType**](FieldEEzsignformfieldgroupType.md) |  |
**eEzsignformfieldgroupSignerrequirement** | [**\eZmaxAPI\Model\FieldEEzsignformfieldgroupSignerrequirement**](FieldEEzsignformfieldgroupSignerrequirement.md) |  |
**sEzsignformfieldgroupLabel** | **string** | The Label for the Ezsignformfieldgroup |
**iEzsignformfieldgroupStep** | **int** | The step when the Ezsignsigner will be invited to fill the form fields |
**sEzsignformfieldgroupDefaultvalue** | **string** | The default value for the Ezsignformfieldgroup | [optional]
**iEzsignformfieldgroupFilledmin** | **int** | The minimum number of Ezsignformfield that must be filled in the Ezsignformfieldgroup |
**iEzsignformfieldgroupFilledmax** | **int** | The maximum number of Ezsignformfield that must be filled in the Ezsignformfieldgroup |
**bEzsignformfieldgroupReadonly** | **bool** | Whether the Ezsignformfieldgroup is read only or not. |
**iEzsignformfieldgroupMaxlength** | **int** | The maximum length for the value in the Ezsignformfieldgroup  This can only be set if eEzsignformfieldgroupType is **Text** or **Textarea** | [optional]
**bEzsignformfieldgroupEncrypted** | **bool** | Whether the Ezsignformfieldgroup is encrypted in the database or not. Encrypted values are not displayed on the Ezsigndocument. This can only be set if eEzsignformfieldgroupType is **Text** or **Textarea** | [optional]
**sEzsignformfieldgroupRegexp** | **string** | A regular expression to indicate what values are acceptable for the Ezsignformfieldgroup.  This can only be set if eEzsignformfieldgroupType is **Text** or **Textarea** | [optional]
**tEzsignformfieldgroupTooltip** | **string** | A tooltip that will be presented to Ezsignsigner about the Ezsignformfieldgroup | [optional]
**eEzsignformfieldgroupTooltipposition** | [**\eZmaxAPI\Model\FieldEEzsignformfieldgroupTooltipposition**](FieldEEzsignformfieldgroupTooltipposition.md) |  | [optional]
**eEzsignformfieldgroupTextvalidation** | [**\eZmaxAPI\Model\EnumTextvalidation**](EnumTextvalidation.md) |  | [optional]
**aObjEzsignformfieldgroupsigner** | [**\eZmaxAPI\Model\EzsignformfieldgroupsignerRequestCompound[]**](EzsignformfieldgroupsignerRequestCompound.md) |  |
**aObjDropdownElement** | [**\eZmaxAPI\Model\CustomDropdownElementRequestCompound[]**](CustomDropdownElementRequestCompound.md) |  | [optional]
**aObjEzsignformfield** | [**\eZmaxAPI\Model\EzsignformfieldRequestCompound[]**](EzsignformfieldRequestCompound.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
