# # EzsigntemplateResponseCompoundV3

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**pkiEzsigntemplateID** | **int** | The unique ID of the Ezsigntemplate |
**fkiEzsigntemplatedocumentID** | **int** | The unique ID of the Ezsigntemplatedocument | [optional]
**fkiEzsignfoldertypeID** | **int** | The unique ID of the Ezsignfoldertype. | [optional]
**objEzsignfoldertype** | [**\eZmaxAPI\Model\CustomEzsignfoldertypeTemplateResponse**](CustomEzsignfoldertypeTemplateResponse.md) |  | [optional]
**fkiLanguageID** | **int** | The unique ID of the Language.  Valid values:  |Value|Description| |-|-| |1|French| |2|English| |
**fkiEzdoctemplatedocumentID** | **int** | The unique ID of the Ezdoctemplatedocument | [optional]
**sEzdoctemplatedocumentNameX** | **string** | The name of the Ezdoctemplatedocument in the language of the requester | [optional]
**sLanguageNameX** | **string** | The Name of the Language in the language of the requester |
**sEzsigntemplateDescription** | **string** | The description of the Ezsigntemplate |
**sEzsigntemplateExternaldescription** | **string** | The external description of the Ezsigntemplate | [optional]
**tEzsigntemplateComment** | **string** | The comment of the Ezsigntemplate | [optional]
**eEzsigntemplateRecognition** | [**\eZmaxAPI\Model\FieldEEzsigntemplateRecognition**](FieldEEzsigntemplateRecognition.md) |  | [optional]
**sEzsigntemplateFilenameregexp** | **string** | The filename regexp of the Ezsigntemplate. | [optional]
**bEzsigntemplateAdminonly** | **bool** | Whether the Ezsigntemplate can be accessed by admin users only (eUserType&#x3D;Normal) |
**sEzsignfoldertypeNameX** | **string** | The name of the Ezsignfoldertype in the language of the requester | [optional]
**objAudit** | [**\eZmaxAPI\Model\CommonAudit**](CommonAudit.md) |  |
**bEzsigntemplateEditallowed** | **bool** | Whether the Ezsigntemplate if allowed to edit or not |
**eEzsigntemplateType** | [**\eZmaxAPI\Model\FieldEEzsigntemplateType**](FieldEEzsigntemplateType.md) |  | [optional]
**objEzsigntemplatedocument** | [**\eZmaxAPI\Model\EzsigntemplatedocumentResponse**](EzsigntemplatedocumentResponse.md) |  | [optional]
**aObjEzsigntemplatesigner** | [**\eZmaxAPI\Model\EzsigntemplatesignerResponseCompound[]**](EzsigntemplatesignerResponseCompound.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
