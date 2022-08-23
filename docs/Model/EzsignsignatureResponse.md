# # EzsignsignatureResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**pkiEzsignsignatureID** | **int** | The unique ID of the Ezsignsignature |
**fkiEzsigndocumentID** | **int** | The unique ID of the Ezsigndocument |
**fkiEzsignfoldersignerassociationID** | **int** | The unique ID of the Ezsignfoldersignerassociation |
**iEzsignpagePagenumber** | **int** | The page number in the Ezsigndocument |
**iEzsignsignatureX** | **int** | The X coordinate (Horizontal) where to put the Ezsignsignature on the page.  Coordinate is calculated at 100dpi (dot per inch). So for example, if you want to put the Ezsignsignature 2 inches from the left border of the page, you would use \&quot;200\&quot; for the X coordinate. |
**iEzsignsignatureY** | **int** | The Y coordinate (Vertical) where to put the Ezsignsignature on the page.  Coordinate is calculated at 100dpi (dot per inch). So for example, if you want to put the Ezsignsignature 3 inches from the top border of the page, you would use \&quot;300\&quot; for the Y coordinate. |
**iEzsignsignatureStep** | **int** | The step when the Ezsignsigner will be invited to sign |
**eEzsignsignatureType** | [**\eZmaxAPI\Model\FieldEEzsignsignatureType**](FieldEEzsignsignatureType.md) |  |
**tEzsignsignatureTooltip** | **string** | A tooltip that will be presented to Ezsignsigner about the Ezsignsignature | [optional]
**eEzsignsignatureTooltipposition** | [**\eZmaxAPI\Model\FieldEEzsignsignatureTooltipposition**](FieldEEzsignsignatureTooltipposition.md) |  | [optional]
**eEzsignsignatureFont** | [**\eZmaxAPI\Model\FieldEEzsignsignatureFont**](FieldEEzsignsignatureFont.md) |  | [optional]
**iEzsignsignatureValidationstep** | **int** | The step when the Ezsignsigner will be invited to validate the Ezsignsignature of eEzsignsignatureType Attachments | [optional]
**sEzsignsignatureAttachmentdescription** | **string** | The description attached to the attachment name added in Ezsignsignature of eEzsignsignatureType Attachments | [optional]
**eEzsignsignatureAttachmentnamesource** | [**\eZmaxAPI\Model\FieldEEzsignsignatureAttachmentnamesource**](FieldEEzsignsignatureAttachmentnamesource.md) |  | [optional]
**bEzsignsignatureRequired** | **bool** | Whether the Ezsignsignature is required or not. This field is relevant only with Ezsignsignature with eEzsignsignatureType &#x3D; Attachments. | [optional]
**fkiUserID** | **int** | The unique ID of the User | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
