# # EzsigntemplatesignatureResponseCompound

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**pkiEzsigntemplatesignatureID** | **int** | The unique ID of the Ezsigntemplatesignature |
**fkiEzsigntemplatedocumentID** | **int** | The unique ID of the Ezsigntemplatedocument |
**fkiEzsigntemplatesignerID** | **int** | The unique ID of the Ezsigntemplatesigner |
**fkiEzsigntemplatesignerIDValidation** | **int** | The unique ID of the Ezsigntemplatesigner | [optional]
**bEzsigntemplatesignatureHandwritten** | **bool** | Whether the Ezsigntemplatesignature must be handwritten or not when eEzsigntemplatesignatureType &#x3D; Signature. | [optional]
**bEzsigntemplatesignatureReason** | **bool** | Whether the Ezsigntemplatesignature must include a reason or not when eEzsigntemplatesignatureType &#x3D; Signature. | [optional]
**eEzsigntemplatesignaturePositioning** | [**\eZmaxAPI\Model\FieldEEzsigntemplatesignaturePositioning**](FieldEEzsigntemplatesignaturePositioning.md) |  | [optional]
**iEzsigntemplatedocumentpagePagenumber** | **int** | The page number in the Ezsigntemplatedocument |
**iEzsigntemplatesignatureX** | **int** | The X coordinate (Horizontal) where to put the Ezsigntemplatesignature on the page.  Coordinate is calculated at 100dpi (dot per inch). So for example, if you want to put the Ezsigntemplatesignature 2 inches from the left border of the page, you would use \&quot;200\&quot; for the X coordinate. | [optional]
**iEzsigntemplatesignatureY** | **int** | The Y coordinate (Vertical) where to put the Ezsigntemplatesignature on the page.  Coordinate is calculated at 100dpi (dot per inch). So for example, if you want to put the Ezsigntemplatesignature 3 inches from the top border of the page, you would use \&quot;300\&quot; for the Y coordinate. | [optional]
**iEzsigntemplatesignatureWidth** | **int** | The width of the Ezsigntemplatesignature.  Size is calculated at 100dpi (dot per inch). So for example, if you want the Ezsigntemplatesignature to have a width of 2 inches, you would use \&quot;200\&quot; for the iEzsigntemplatesignatureWidth. | [optional]
**iEzsigntemplatesignatureHeight** | **int** | The height of the Ezsigntemplatesignature.  Size is calculated at 100dpi (dot per inch). So for example, if you want the Ezsigntemplatesignature to have an height of 2 inches, you would use \&quot;200\&quot; for the iEzsigntemplatesignatureHeight. | [optional]
**iEzsigntemplatesignatureStep** | **int** | The step when the Ezsigntemplatesigner will be invited to sign |
**eEzsigntemplatesignatureType** | [**\eZmaxAPI\Model\FieldEEzsigntemplatesignatureType**](FieldEEzsigntemplatesignatureType.md) |  |
**eEzsigntemplatesignatureConsultationtrigger** | [**\eZmaxAPI\Model\FieldEEzsigntemplatesignatureConsultationtrigger**](FieldEEzsigntemplatesignatureConsultationtrigger.md) |  | [optional]
**tEzsigntemplatesignatureTooltip** | **string** | A tooltip that will be presented to Ezsigntemplatesigner about the Ezsigntemplatesignature | [optional]
**eEzsigntemplatesignatureTooltipposition** | [**\eZmaxAPI\Model\FieldEEzsigntemplatesignatureTooltipposition**](FieldEEzsigntemplatesignatureTooltipposition.md) |  | [optional]
**eEzsigntemplatesignatureFont** | [**\eZmaxAPI\Model\FieldEEzsigntemplatesignatureFont**](FieldEEzsigntemplatesignatureFont.md) |  | [optional]
**iEzsigntemplatesignatureValidationstep** | **int** | The step when the Ezsigntemplatesigner will be invited to validate the Ezsigntemplatesignature of eEzsigntemplatesignatureType Attachments | [optional]
**sEzsigntemplatesignatureAttachmentdescription** | **string** | The description attached to the attachment name added in Ezsigntemplatesignature of eEzsigntemplatesignatureType Attachments | [optional]
**eEzsigntemplatesignatureAttachmentnamesource** | [**\eZmaxAPI\Model\FieldEEzsigntemplatesignatureAttachmentnamesource**](FieldEEzsigntemplatesignatureAttachmentnamesource.md) |  | [optional]
**bEzsigntemplatesignatureRequired** | **bool** | Whether the Ezsigntemplatesignature is required or not. This field is relevant only with Ezsigntemplatesignature with eEzsigntemplatesignatureType &#x3D; Attachments. | [optional]
**iEzsigntemplatesignatureMaxlength** | **int** | The maximum length for the value in the Ezsigntemplatesignature  This can only be set if eEzsigntemplatesignatureType is **FieldText** or **FieldTextarea** | [optional]
**sEzsigntemplatesignatureDefaultvalue** | **string** | The default value for the Ezsigntemplatesignature  You can use the codes below and they will be replaced at signature time.    | Code | Description | Example | | ------------------------- | ------------ | ------------ | | {sUserFirstname} | The first name of the contact | John | | {sUserLastname} | The last name of the contact | Doe | | {sUserJobtitle} | The job title | Sales Representative | | {sCompany} | Company name | eZmax Solutions Inc. | | {sEmailAddress} | The email address | email@example.com | | {sPhoneE164} | A phone number in E.164 Format | +15149901516 | | {sPhoneE164Cell} | A phone number in E.164 Format | +15149901516 | | [optional]
**sEzsigntemplatesignatureRegexp** | **string** | A regular expression to indicate what values are acceptable for the Ezsigntemplatesignature.  This can only be set if eEzsigntemplatesignatureType is **Text** or **Textarea** | [optional]
**eEzsigntemplatesignatureTextvalidation** | [**\eZmaxAPI\Model\EnumTextvalidation**](EnumTextvalidation.md) |  | [optional]
**sEzsigntemplatesignatureTextvalidationcustommessage** | **string** | Description of validation rule. Show by signatory. | [optional]
**eEzsigntemplatesignatureDependencyrequirement** | [**\eZmaxAPI\Model\FieldEEzsigntemplatesignatureDependencyrequirement**](FieldEEzsigntemplatesignatureDependencyrequirement.md) |  | [optional]
**sEzsigntemplatesignaturePositioningpattern** | **string** | The string pattern to search for the positioning. **This is not a regexp**  This will be required if **eEzsigntemplatesignaturePositioning** is set to **PerCoordinates** | [optional]
**iEzsigntemplatesignaturePositioningoffsetx** | **int** | The offset X  This will be required if **eEzsigntemplatesignaturePositioning** is set to **PerCoordinates** | [optional]
**iEzsigntemplatesignaturePositioningoffsety** | **int** | The offset Y  This will be required if **eEzsigntemplatesignaturePositioning** is set to **PerCoordinates** | [optional]
**eEzsigntemplatesignaturePositioningoccurence** | [**\eZmaxAPI\Model\FieldEEzsigntemplatesignaturePositioningoccurence**](FieldEEzsigntemplatesignaturePositioningoccurence.md) |  | [optional]
**bEzsigntemplatesignatureCustomdate** | **bool** | Whether the Ezsigntemplatesignature has a custom date format or not. (Only possible when eEzsigntemplatesignatureType is **Name** or **Handwritten**) | [optional]
**aObjEzsigntemplatesignaturecustomdate** | [**\eZmaxAPI\Model\EzsigntemplatesignaturecustomdateResponseCompound[]**](EzsigntemplatesignaturecustomdateResponseCompound.md) | An array of custom date blocks that will be filled at the time of signature.  Can only be used if bEzsigntemplatesignatureCustomdate is true.  Use an empty array if you don&#39;t want to have a date at all. | [optional]
**aObjEzsigntemplateelementdependency** | [**\eZmaxAPI\Model\EzsigntemplateelementdependencyResponseCompound[]**](EzsigntemplateelementdependencyResponseCompound.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
