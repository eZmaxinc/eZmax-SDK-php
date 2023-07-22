# # BrandingRequestCompound

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**pkiBrandingID** | **int** | The unique ID of the Branding | [optional]
**objBrandingDescription** | [**\eZmaxAPI\Model\MultilingualBrandingDescription**](MultilingualBrandingDescription.md) |  |
**eBrandingLogo** | [**\eZmaxAPI\Model\FieldEBrandingLogo**](FieldEBrandingLogo.md) |  |
**sBrandingBase64** | **string** | The Base64 encoded binary content of the branding logo. This need to match image type selected in eBrandingLogo if you supply an image. If you select &#39;Default&#39;, the logo will be deleted and the default one will be used. | [optional]
**iBrandingColortext** | **int** | The color of the text. This is a RGB color converted into integer |
**iBrandingColortextlinkbox** | **int** | The color of the text in the link box. This is a RGB color converted into integer |
**iBrandingColortextbutton** | **int** | The color of the text in the button. This is a RGB color converted into integer |
**iBrandingColorbackground** | **int** | The color of the background. This is a RGB color converted into integer |
**iBrandingColorbackgroundbutton** | **int** | The color of the background of the button. This is a RGB color converted into integer |
**iBrandingColorbackgroundsmallbox** | **int** | The color of the background of the small box. This is a RGB color converted into integer |
**sBrandingName** | **string** | The name of the Branding  This value will only be set if you wish to overwrite the default name. If you want to keep the default name, leave this property empty | [optional]
**sEmailAddress** | **string** | The email address. | [optional]
**bBrandingIsactive** | **bool** | Whether the Branding is active or not |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
