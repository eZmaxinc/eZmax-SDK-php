# # EzsigntemplateGetObjectV1ResponseMPayload

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**pkiEzsigntemplateID** | **int** | The unique ID of the Ezsigntemplate |
**fkiEzsigntemplatedocumentID** | **int** | The unique ID of the Ezsigntemplatedocument | [optional]
**fkiEzsignfoldertypeID** | **int** | The unique ID of the Ezsignfoldertype. |
**fkiLanguageID** | **int** | The unique ID of the Language.  Valid values:  |Value|Description| |-|-| |1|French| |2|English| |
**sLanguageNameX** | **string** | The Name of the Language in the language of the requester |
**sEzsigntemplateDescription** | **string** | The description of the Ezsigntemplate |
**bEzsigntemplateAdminonly** | **bool** | Whether the Ezsigntemplate can be accessed by admin users only (eUserType&#x3D;Normal) |
**sEzsignfoldertypeNameX** | **string** | The name of the Ezsignfoldertype in the language of the requester |
**objAudit** | [**\eZmaxAPI\Model\CommonAudit**](CommonAudit.md) |  |
**objEzsigntemplatedocument** | [**\eZmaxAPI\Model\EzsigntemplatedocumentResponse**](EzsigntemplatedocumentResponse.md) |  | [optional]
**aObjEzsigntemplatesigner** | [**\eZmaxAPI\Model\EzsigntemplatesignerResponseCompound[]**](EzsigntemplatesignerResponseCompound.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
