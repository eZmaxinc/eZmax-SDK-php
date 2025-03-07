# # EzsignsignatureResponseCompoundV3

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**pkiEzsignsignatureID** | **int** | The unique ID of the Ezsignsignature |
**fkiEzsigndocumentID** | **int** | The unique ID of the Ezsigndocument |
**fkiEzsignfoldersignerassociationID** | **int** | The unique ID of the Ezsignfoldersignerassociation |
**fkiEzsignsigningreasonID** | **int** | The unique ID of the Ezsignsigningreason | [optional]
**fkiFontID** | **int** | The unique ID of the Font | [optional]
**sCurrencyDescriptionX** | **string** | The description of the Currency in the language of the requester | [optional]
**sEzsignsigningreasonDescriptionX** | **string** | The description of the Ezsignsigningreason in the language of the requester | [optional]
**iEzsignpagePagenumber** | **int** | The page number in the Ezsigndocument |
**iEzsignsignatureX** | **int** | The X coordinate (Horizontal) where to put the Ezsignsignature on the page.  Coordinate is calculated at 100dpi (dot per inch). So for example, if you want to put the Ezsignsignature 2 inches from the left border of the page, you would use \&quot;200\&quot; for the X coordinate. |
**iEzsignsignatureY** | **int** | The Y coordinate (Vertical) where to put the Ezsignsignature on the page.  Coordinate is calculated at 100dpi (dot per inch). So for example, if you want to put the Ezsignsignature 3 inches from the top border of the page, you would use \&quot;300\&quot; for the Y coordinate. |
**iEzsignsignatureHeight** | **int** | The height of the Ezsignsignature.  Size is calculated at 100dpi (dot per inch). So for example, if you want the Ezsignsignature to have an height of 2 inches, you would use \&quot;200\&quot; for the iEzsignsignatureHeight. | [optional]
**iEzsignsignatureWidth** | **int** | The width of the Ezsignsignature.  Size is calculated at 100dpi (dot per inch). So for example, if you want the Ezsignsignature to have a width of 2 inches, you would use \&quot;200\&quot; for the iEzsignsignatureWidth. | [optional]
**iEzsignsignatureStep** | **int** | The step when the Ezsignsigner will be invited to sign |
**iEzsignsignatureStepadjusted** | **int** | The step when the Ezsignsigner will be invited to sign | [optional]
**eEzsignsignatureType** | [**\eZmaxAPI\Model\FieldEEzsignsignatureType**](FieldEEzsignsignatureType.md) |  |
**tEzsignsignatureTooltip** | **string** | A tooltip that will be presented to Ezsignsigner about the Ezsignsignature | [optional]
**eEzsignsignatureTooltipposition** | [**\eZmaxAPI\Model\FieldEEzsignsignatureTooltipposition**](FieldEEzsignsignatureTooltipposition.md) |  | [optional]
**eEzsignsignatureFont** | [**\eZmaxAPI\Model\FieldEEzsignsignatureFont**](FieldEEzsignsignatureFont.md) |  | [optional]
**iEzsignsignatureValidationstep** | **int** | The step when the Ezsignsigner will be invited to validate the Ezsignsignature of eEzsignsignatureType Attachments | [optional]
**sEzsignsignatureAttachmentdescription** | **string** | The description attached to the attachment name added in Ezsignsignature of eEzsignsignatureType Attachments | [optional]
**eEzsignsignatureAttachmentnamesource** | [**\eZmaxAPI\Model\FieldEEzsignsignatureAttachmentnamesource**](FieldEEzsignsignatureAttachmentnamesource.md) |  | [optional]
**eEzsignsignatureConsultationtrigger** | [**\eZmaxAPI\Model\FieldEEzsignsignatureConsultationtrigger**](FieldEEzsignsignatureConsultationtrigger.md) |  | [optional]
**bEzsignsignatureHandwritten** | **bool** | Whether the Ezsignsignature must be handwritten or not when eEzsignsignatureType &#x3D; Signature. | [optional]
**bEzsignsignatureReason** | **bool** | Whether the Ezsignsignature must include a reason or not when eEzsignsignatureType &#x3D; Signature. | [optional]
**bEzsignsignatureRequired** | **bool** | Whether the Ezsignsignature is required or not. This field is relevant only with Ezsignsignature with eEzsignsignatureType &#x3D; Attachments, Text or Textarea. | [optional]
**fkiEzsignfoldersignerassociationIDValidation** | **int** | The unique ID of the Ezsignfoldersignerassociation | [optional]
**dtEzsignsignatureDate** | **string** | The date the Ezsignsignature was signed | [optional]
**iEzsignsignatureattachmentCount** | **int** | The count of Ezsignsignatureattachment | [optional]
**sEzsignsignatureDescription** | **string** | The value entered while signing Ezsignsignature of eEzsignsignatureType **City**, **FieldText** and **FieldTextarea** | [optional]
**iEzsignsignatureMaxlength** | **int** | The maximum length for the value in the Ezsignsignature  This can only be set if eEzsignsignatureType is **FieldText** or **FieldTextarea** | [optional]
**eEzsignsignatureTextvalidation** | [**\eZmaxAPI\Model\EnumTextvalidation**](EnumTextvalidation.md) |  | [optional]
**sEzsignsignatureTextvalidationcustommessage** | **string** | Description of validation rule. Show by signatory. | [optional]
**eEzsignsignatureDependencyrequirement** | [**\eZmaxAPI\Model\FieldEEzsignsignatureDependencyrequirement**](FieldEEzsignsignatureDependencyrequirement.md) |  | [optional]
**sEzsignsignatureDefaultvalue** | **string** | The default value for the Ezsignsignature  You can use the codes below and they will be replaced at signature time.    | Code | Description | Example | | ------------------------- | ------------ | ------------ | | {sUserFirstname} | The first name of the contact | John | | {sUserLastname} | The last name of the contact | Doe | | {sUserJobtitle} | The job title | Sales Representative | | {sCompany} | Company name | eZmax Solutions Inc. | | {sEmailAddress} | The email address | email@example.com | | {sPhoneE164} | A phone number in E.164 Format | +15149901516 | | {sPhoneE164Cell} | A phone number in E.164 Format | +15149901516 | | [optional]
**sEzsignsignatureRegexp** | **string** | A regular expression to indicate what values are acceptable for the Ezsignsignature.  This can only be set if eEzsignsignatureType is **FieldText** or **FieldTextarea** and eEzsignsignatureTextvalidation is **Custom** | [optional]
**objContactName** | [**\eZmaxAPI\Model\CustomContactNameResponse**](CustomContactNameResponse.md) |  |
**objContactNameDelegation** | [**\eZmaxAPI\Model\CustomContactNameResponse**](CustomContactNameResponse.md) |  | [optional]
**objSignature** | [**\eZmaxAPI\Model\SignatureResponseCompound**](SignatureResponseCompound.md) |  | [optional]
**sEzsignsignergroupDescriptionX** | **string** | The Description of the Ezsignsignergroup in the language of the requester | [optional]
**bEzsignsignatureCustomdate** | **bool** | Whether the Ezsignsignature has a custom date format or not. (Only possible when eEzsignsignatureType is **Name** or **Handwritten**) | [optional]
**aObjEzsignsignaturecustomdate** | [**\eZmaxAPI\Model\EzsignsignaturecustomdateResponseCompoundV2[]**](EzsignsignaturecustomdateResponseCompoundV2.md) | An array of custom date blocks that will be filled at the time of signature.  Can only be used if bEzsignsignatureCustomdate is true.  Use an empty array if you don&#39;t want to have a date at all. | [optional]
**objCreditcardtransaction** | [**\eZmaxAPI\Model\CustomCreditcardtransactionResponse**](CustomCreditcardtransactionResponse.md) |  | [optional]
**aObjEzsignelementdependency** | [**\eZmaxAPI\Model\EzsignelementdependencyResponseCompound[]**](EzsignelementdependencyResponseCompound.md) |  | [optional]
**aObjEzsignsignaturepaymentdetail** | [**\eZmaxAPI\Model\EzsignsignaturepaymentdetailResponseCompound[]**](EzsignsignaturepaymentdetailResponseCompound.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
