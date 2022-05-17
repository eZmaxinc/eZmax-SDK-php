# # EzsigntemplatepackageResponseCompound

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**pkiEzsigntemplatepackageID** | **int** | The unique ID of the Ezsigntemplatepackage |
**fkiEzsignfoldertypeID** | **int** | The unique ID of the Ezsignfoldertype. |
**fkiLanguageID** | **int** | The unique ID of the Language.  Valid values:  |Value|Description| |-|-| |1|French| |2|English| |
**sLanguageNameX** | **string** | The Name of the Language in the language of the requester |
**sEzsigntemplatepackageDescription** | **string** | The description of the Ezsigntemplatepackage |
**bEzsigntemplatepackageAdminonly** | **bool** | Whether the Ezsigntemplatepackage can be accessed by admin users only (eUserType&#x3D;Normal) |
**bEzsigntemplatepackageNeedvalidation** | **bool** | Whether the Ezsignbulksend was automatically modified and needs a manual validation |
**bEzsigntemplatepackageIsactive** | **bool** | Whether the Ezsigntemplatepackage is active or not |
**sEzsignfoldertypeNameX** | **string** | The name of the Ezsignfoldertype in the language of the requester |
**aObjEzsigntemplatepackagesigner** | [**\eZmaxAPI\Model\EzsigntemplatepackagesignerResponseCompound[]**](EzsigntemplatepackagesignerResponseCompound.md) |  |
**aObjEzsigntemplatepackagemembership** | [**\eZmaxAPI\Model\EzsigntemplatepackagemembershipResponseCompound[]**](EzsigntemplatepackagemembershipResponseCompound.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
