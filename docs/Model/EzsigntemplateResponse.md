# # EzsigntemplateResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**pkiEzsigntemplateID** | **int** | The unique ID of the Ezsigntemplate |
**fkiEzsigntemplatedocumentID** | **int** | The unique ID of the Ezsigntemplatedocument | [optional]
**fkiEzsignfoldertypeID** | **int** | The unique ID of the Ezsignfoldertype. | [optional]
**fkiLanguageID** | **int** | The unique ID of the Language.  Valid values:  |Value|Description| |-|-| |1|French| |2|English| |
**sLanguageNameX** | **string** | The Name of the Language in the language of the requester |
**sEzsigntemplateDescription** | **string** | The description of the Ezsigntemplate |
**sEzsigntemplateFilenamepattern** | **string** | The filename pattern of the Ezsigntemplate | [optional]
**bEzsigntemplateAdminonly** | **bool** | Whether the Ezsigntemplate can be accessed by admin users only (eUserType&#x3D;Normal) |
**sEzsignfoldertypeNameX** | **string** | The name of the Ezsignfoldertype in the language of the requester | [optional]
**objAudit** | [**\eZmaxAPI\Model\CommonAudit**](CommonAudit.md) |  |
**bEzsigntemplateEditallowed** | **bool** | Whether the Ezsigntemplate if allowed to edit or not |
**eEzsigntemplateType** | [**\eZmaxAPI\Model\FieldEEzsigntemplateType**](FieldEEzsigntemplateType.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
