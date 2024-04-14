# # EzsigntemplateRequestV2

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**pkiEzsigntemplateID** | **int** | The unique ID of the Ezsigntemplate | [optional]
**fkiEzsignfoldertypeID** | **int** | The unique ID of the Ezsignfoldertype. | [optional]
**fkiLanguageID** | **int** | The unique ID of the Language.  Valid values:  |Value|Description| |-|-| |1|French| |2|English| |
**sEzsigntemplateDescription** | **string** | The description of the Ezsigntemplate |
**sEzsigntemplateFilenamepattern** | **string** | The filename pattern of the Ezsigntemplate | [optional]
**bEzsigntemplateAdminonly** | **bool** | Whether the Ezsigntemplate can be accessed by admin users only (eUserType&#x3D;Normal) |
**eEzsigntemplateType** | [**\eZmaxAPI\Model\FieldEEzsigntemplateType**](FieldEEzsigntemplateType.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
