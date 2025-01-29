# # EzdoctemplatedocumentResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**pkiEzdoctemplatedocumentID** | **int** | The unique ID of the Ezdoctemplatedocument |
**fkiLanguageID** | **int** | The unique ID of the Language.  Valid values:  |Value|Description| |-|-| |1|French| |2|English| |
**fkiEzsignfoldertypeID** | **int** | The unique ID of the Ezsignfoldertype. | [optional]
**fkiEzdoctemplatetypeID** | **int** | The unique ID of the Ezdoctemplatetype |
**fkiEzdoctemplatefieldtypecategoryID** | **int** | The unique ID of the Ezdoctemplatefieldtypecategory |
**eEzdoctemplatedocumentPrivacylevel** | [**\eZmaxAPI\Model\FieldEEzdoctemplatedocumentPrivacylevel**](FieldEEzdoctemplatedocumentPrivacylevel.md) |  | [optional]
**bEzdoctemplatedocumentIsactive** | **bool** | Whether the ezdoctemplatedocument is active or not |
**objEzdoctemplatedocumentName** | [**\eZmaxAPI\Model\MultilingualEzdoctemplatedocumentName**](MultilingualEzdoctemplatedocumentName.md) |  |
**sEzdoctemplatedocumentNameX** | **string** | The name of the Ezdoctemplatedocument in the language of the requester | [optional]
**sEzsignfoldertypeNameX** | **string** | The name of the Ezsignfoldertype in the language of the requester | [optional]
**sEzdoctemplatefieldtypecategoryDescriptionX** | **string** | The description of the Ezdoctemplatefieldtypecategory in the language of the requester |
**sEzdoctemplatetypeDescriptionX** | **string** | The description of the Ezdoctemplatetype in the language of the requester |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
