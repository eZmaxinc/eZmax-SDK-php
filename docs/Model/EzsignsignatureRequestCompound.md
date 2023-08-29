# # EzsignsignatureRequestCompound

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**pkiEzsignsignatureID** | **int** | The unique ID of the Ezsignsignature | [optional]
**fkiEzsignfoldersignerassociationID** | **int** | The unique ID of the Ezsignfoldersignerassociation |
**iEzsignpagePagenumber** | **int** | The page number in the Ezsigndocument |
**iEzsignsignatureX** | **int** | The X coordinate (Horizontal) where to put the Ezsignsignature on the page.  Coordinate is calculated at 100dpi (dot per inch). So for example, if you want to put the Ezsignsignature 2 inches from the left border of the page, you would use \&quot;200\&quot; for the X coordinate. |
**iEzsignsignatureY** | **int** | The Y coordinate (Vertical) where to put the Ezsignsignature on the page.  Coordinate is calculated at 100dpi (dot per inch). So for example, if you want to put the Ezsignsignature 3 inches from the top border of the page, you would use \&quot;300\&quot; for the Y coordinate. |
**iEzsignsignatureWidth** | **int** | The width of the Ezsignsignature.  Size is calculated at 100dpi (dot per inch). So for example, if you want the Ezsignsignature to have a width of 2 inches, you would use \&quot;200\&quot; for the iEzsignsignatureWidth. | [optional]
**iEzsignsignatureHeight** | **int** | The height of the Ezsignsignature.  Size is calculated at 100dpi (dot per inch). So for example, if you want the Ezsignsignature to have an height of 2 inches, you would use \&quot;200\&quot; for the iEzsignsignatureHeight. | [optional]
**iEzsignsignatureStep** | **int** | The step when the Ezsignsigner will be invited to sign |
**eEzsignsignatureType** | [**\eZmaxAPI\Model\FieldEEzsignsignatureType**](FieldEEzsignsignatureType.md) |  |
**fkiEzsigndocumentID** | **int** | The unique ID of the Ezsigndocument |
**tEzsignsignatureTooltip** | **string** | A tooltip that will be presented to Ezsignsigner about the Ezsignsignature | [optional]
**eEzsignsignatureTooltipposition** | [**\eZmaxAPI\Model\FieldEEzsignsignatureTooltipposition**](FieldEEzsignsignatureTooltipposition.md) |  | [optional]
**eEzsignsignatureFont** | [**\eZmaxAPI\Model\FieldEEzsignsignatureFont**](FieldEEzsignsignatureFont.md) |  | [optional]
**fkiEzsignfoldersignerassociationIDValidation** | **int** | The unique ID of the Ezsignfoldersignerassociation | [optional]
**bEzsignsignatureRequired** | **bool** | Whether the Ezsignsignature is required or not. This field is relevant only with Ezsignsignature with eEzsignsignatureType &#x3D; Attachments. | [optional]
**eEzsignsignatureAttachmentnamesource** | [**\eZmaxAPI\Model\FieldEEzsignsignatureAttachmentnamesource**](FieldEEzsignsignatureAttachmentnamesource.md) |  | [optional]
**sEzsignsignatureAttachmentdescription** | **string** | The description attached to the attachment name added in Ezsignsignature of eEzsignsignatureType Attachments | [optional]
**iEzsignsignatureValidationstep** | **int** | The step when the Ezsignsigner will be invited to validate the Ezsignsignature of eEzsignsignatureType Attachments | [optional]
**iEzsignsignatureMaxlength** | **int** | The maximum length for the value in the Ezsignsignature  This can only be set if eEzsignsignatureType is **FieldText** or **FieldTextarea** | [optional]
**eEzsignsignatureTextvalidation** | [**\eZmaxAPI\Model\EnumTextvalidation**](EnumTextvalidation.md) |  | [optional]
**sEzsignsignatureRegexp** | **string** | A regular expression to indicate what values are acceptable for the Ezsignsignature.  This can only be set if eEzsignsignatureType is **FieldText** or **FieldTextarea** and eEzsignsignatureTextvalidation is **Custom** | [optional]
**bEzsignsignatureCustomdate** | **bool** | Whether the Ezsignsignature has a custom date format or not. (Only possible when eEzsignsignatureType is **Name** or **Handwritten**) | [optional]
**aObjEzsignsignaturecustomdate** | [**\eZmaxAPI\Model\EzsignsignaturecustomdateRequestCompound[]**](EzsignsignaturecustomdateRequestCompound.md) | An array of custom date blocks that will be filled at the time of signature.  Can only be used if bEzsignsignatureCustomdate is true.  Use an empty array if you don&#39;t want to have a date at all. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
