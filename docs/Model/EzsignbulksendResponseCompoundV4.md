# EzsignbulksendResponseCompoundV4

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**pkiEzsignbulksendID** | **int** | The unique ID of the Ezsignbulksend |
**fkiEzsignfoldertypeID** | **int** | The unique ID of the Ezsignfoldertype. |
**fkiLanguageID** | **int** | The unique ID of the Language.  Valid values:  |Value|Description| |-|-| |1|French| |2|English| |
**sLanguageNameX** | **string** | The Name of the Language in the language of the requester |
**eEzsignbulksendEzsignformfieldorder** | [**\eZmaxAPI\Model\FieldEEzsignbulksendEzsignformfieldorder**](FieldEEzsignbulksendEzsignformfieldorder.md) |  |
**eEzsignfoldertypePrivacylevel** | [**\eZmaxAPI\Model\FieldEEzsignfoldertypePrivacylevel**](FieldEEzsignfoldertypePrivacylevel.md) |  |
**sEzsignfoldertypeNameX** | **string** | The name of the Ezsignfoldertype in the language of the requester |
**sEzsignbulksendDescription** | **string** | The description of the Ezsignbulksend |
**tEzsignbulksendNote** | **string** | Note about the Ezsignbulksend |
**bEzsignbulksendNeedvalidation** | **bool** | Whether the Ezsigntemplatepackage was automatically modified and needs a manual validation |
**bEzsignbulksendIsactive** | **bool** | Whether the Ezsignbulksend is active or not |
**objAudit** | [**\eZmaxAPI\Model\CommonAudit**](CommonAudit.md) |  |
**aObjEzsignbulksenddocumentmapping** | [**\eZmaxAPI\Model\EzsignbulksenddocumentmappingResponseCompoundV3[]**](EzsignbulksenddocumentmappingResponseCompoundV3.md) |  |
**aObjEzsignbulksendsignermapping** | [**\eZmaxAPI\Model\EzsignbulksendsignermappingResponseV3[]**](EzsignbulksendsignermappingResponseV3.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
