# # EzsignsignatureSignV1Request

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**fkiEzsignsigningreasonID** | **int** | The unique ID of the Ezsignsigningreason | [optional]
**fkiFontID** | **int** | The unique ID of the Font | [optional]
**sValue** | **string** | The value required for the Ezsignsignature.  This can only be set if eEzsignsignatureType is **City**, **FieldText** or **FieldTextarea** | [optional]
**eAttachmentsConfirmationDecision** | **string** | Whether the attachment are accepted or refused.  This can only be set if eEzsignsignatureType is **AttachmentsConfirmation** | [optional]
**sAttachmentsRefusalReason** | **string** | The reason of refused.  This can only be set if eEzsignsignatureType is **AttachmentsConfirmation** | [optional]
**sSvg** | **string** | The SVG of the signature.  This can only be set if eEzsignsignatureType is **Signature**_/_**Initials** and **bIsAutomatic** is false | [optional]
**aObjFile** | [**\eZmaxAPI\Model\CommonFile[]**](CommonFile.md) |  | [optional]
**objCreditcard** | [**\eZmaxAPI\Model\CustomCreditcardRequest**](CustomCreditcardRequest.md) |  | [optional]
**bIsAutomatic** | **bool** | Indicates if the Ezsignsignature was part of an automatic process or not.  This can only be true if eEzsignsignatureType is **Acknowledgement**, **City**, **Signature**, **Initials** or **Stamp**. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
