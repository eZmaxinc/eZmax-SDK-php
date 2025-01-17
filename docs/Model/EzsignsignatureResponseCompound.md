# # EzsignsignatureResponseCompound

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**dtEzsignsignatureDateInFolderTimezone** | **string** | The date the Ezsignsignature was signed in folder&#39;s timezone | [optional]
**bEzsignsignatureCustomdate** | **bool** | Whether the Ezsignsignature has a custom date format or not. (Only possible when eEzsignsignatureType is **Name** or **Handwritten**) | [optional]
**aObjEzsignsignaturecustomdate** | [**\eZmaxAPI\Model\EzsignsignaturecustomdateResponseCompound[]**](EzsignsignaturecustomdateResponse.md) | An array of custom date blocks that will be filled at the time of signature.  Can only be used if bEzsignsignatureCustomdate is true.  Use an empty array if you don&#39;t want to have a date at all. | [optional]
**objCreditcardtransaction** | [**\eZmaxAPI\Model\CustomCreditcardtransactionResponse**](CustomCreditcardtransactionResponse.md) |  | [optional]
**aObjEzsignelementdependency** | [**\eZmaxAPI\Model\EzsignelementdependencyResponseCompound[]**](EzsignelementdependencyResponse.md) |  | [optional]
**objTimezone** | [**\eZmaxAPI\Model\CustomTimezoneWithCodeResponse**](CustomTimezoneWithCodeResponse.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
