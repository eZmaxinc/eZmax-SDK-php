# # BrandingResponseV3

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**pkiBrandingID** | **int** | The unique ID of the Branding |
**fkiEmailID** | **int** | The unique ID of the Email | [optional]
**objBrandingDescription** | [**\eZmaxAPI\Model\MultilingualBrandingDescription**](MultilingualBrandingDescription.md) |  |
**sBrandingDescriptionX** | **string** | The Description of the Branding in the language of the requester |
**sBrandingName** | **string** | The name of the Branding  This value will only be set if you wish to overwrite the default name. If you want to keep the default name, leave this property empty | [optional]
**sEmailAddress** | **string** | The email address. | [optional]
**eBrandingLogo** | [**\eZmaxAPI\Model\FieldEBrandingLogo**](FieldEBrandingLogo.md) |  |
**eBrandingAlignlogo** | [**\eZmaxAPI\Model\FieldEBrandingAlignlogo**](FieldEBrandingAlignlogo.md) |  |
**iBrandingColor** | **int** | The primary color. This is a RGB color converted into integer |
**bBrandingIsactive** | **bool** | Whether the Branding is active or not |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
