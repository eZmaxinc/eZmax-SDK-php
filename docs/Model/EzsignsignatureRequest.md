# # EzsignsignatureRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**fkiEzsignfoldersignerassociationID** | **int** | The unique ID of the Ezsignfoldersignerassociation |
**iEzsignpagePagenumber** | **int** | The page number in the document where to apply the signature |
**iEzsignsignatureX** | **int** | The X coordinate (Horizontal) where to put the signature block on the page.  Coordinate is calculated at 100dpi (dot per inch). So for example, if you want to put the signature block 2 inches from the left border of the page, you would use \&quot;200\&quot; for the X coordinate. |
**iEzsignsignatureY** | **int** | The Y coordinate (Vertical) where to put the signature block on the page.  Coordinate is calculated at 100dpi (dot per inch). So for example, if you want to put the signature block 3 inches from the top border of the page, you would use \&quot;300\&quot; for the Y coordinate. |
**iEzsignsignatureStep** | **int** | The step when the Ezsignsigner will be invited to sign. |
**eEzsignsignatureType** | [**\eZmaxAPI\Model\FieldEEzsignsignatureType**](FieldEEzsignsignatureType.md) |  |
**fkiEzsigndocumentID** | **int** | The unique ID of the Ezsigntemplate |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
