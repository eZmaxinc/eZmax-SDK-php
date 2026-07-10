# CustomEzsignfoldersignerassociationActionableElementResponseV2

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**pkiEzsignfoldersignerassociationID** | **int** | The unique ID of the Ezsignfoldersignerassociation |
**fkiEzsignfolderID** | **int** | The unique ID of the Ezsignfolder |
**bEzsignfoldersignerassociationDelayedsend** | **bool** | If this flag is true the signatory is part of a delayed send. |
**eEzsignfoldersignerassociationRole** | [**\eZmaxAPI\Model\FieldEEzsignfoldersignerassociationRole**](FieldEEzsignfoldersignerassociationRole.md) |  |
**tEzsignfoldersignerassociationMessage** | **string** | A custom text message that will be added to the email sent. |
**bEzsignfoldersignerassociationAllowsigninginperson** | **bool** | If the Ezsignfoldersignerassociation is allowed to sign in person or not |
**objEzsignsignergroup** | [**\eZmaxAPI\Model\EzsignsignergroupResponseCompound**](EzsignsignergroupResponseCompound.md) |  | [optional]
**objUser** | [**\eZmaxAPI\Model\EzsignfoldersignerassociationResponseCompoundUser**](EzsignfoldersignerassociationResponseCompoundUser.md) |  | [optional]
**objEzsignsigner** | [**\eZmaxAPI\Model\EzsignsignerResponseCompound**](EzsignsignerResponseCompound.md) |  | [optional]
**bEzsignfoldersignerassociationHasactionableelementsCurrent** | **bool** | Indicates if the Ezsignfoldersignerassociation has actionable elements in the current step |
**bEzsignfoldersignerassociationHasactionableelementsFuture** | **bool** | Indicates if the Ezsignfoldersignerassociation has actionable elements in a future step |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
