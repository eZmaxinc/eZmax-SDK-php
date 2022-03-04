# # EzsignsignatureGetObjectV1ResponseMPayload

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**pkiEzsignsignatureID** | **int** | The unique ID of the Ezsignsignature |
**fkiEzsignfoldersignerassociationID** | **int** | The unique ID of the Ezsignfoldersignerassociation |
**iEzsignpagePagenumber** | **int** | The page number in the Ezsigndocument |
**iEzsignsignatureX** | **int** | The X coordinate (Horizontal) where to put the Ezsignsignature on the page.  Coordinate is calculated at 100dpi (dot per inch). So for example, if you want to put the Ezsignsignature 2 inches from the left border of the page, you would use \&quot;200\&quot; for the X coordinate. |
**iEzsignsignatureY** | **int** | The Y coordinate (Vertical) where to put the signature block on the page.  Coordinate is calculated at 100dpi (dot per inch). So for example, if you want to put the signature block 3 inches from the top border of the page, you would use \&quot;300\&quot; for the Y coordinate. |
**iEzsignsignatureStep** | **int** | The step when the Ezsignsigner will be invited to sign |
**eEzsignsignatureType** | [**\eZmaxAPI\Model\FieldEEzsignsignatureType**](FieldEEzsignsignatureType.md) |  |
**fkiEzsigndocumentID** | **int** | The unique ID of the Ezsigndocument |
**bEzsignsignatureCustomdate** | **bool** | Whether the Ezsignsignature has a custom date format or not. (Only possible when eEzsignsignatureType is \&quot;Name\&quot; or \&quot;Handwritten\&quot;) | [optional]
**aObjEzsignsignaturecustomdate** | [**\eZmaxAPI\Model\EzsignsignaturecustomdateResponseCompound[]**](EzsignsignaturecustomdateResponseCompound.md) | An array of custom date blocks that will be filled at the time of signature.  Can only be used if bEzsignsignatureCustomdate is true.  Use an empty array if you don&#39;t want to have a date at all. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
