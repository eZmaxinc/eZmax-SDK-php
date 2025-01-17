# # EzsigntemplatesignatureRequestCompoundV2

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**bEzsigntemplatesignatureCustomdate** | **bool** | Whether the Ezsigntemplatesignature has a custom date format or not. (Only possible when eEzsigntemplatesignatureType is **Name** or **Handwritten**) | [optional]
**aObjEzsigntemplatesignaturecustomdate** | [**\eZmaxAPI\Model\EzsigntemplatesignaturecustomdateRequestCompoundV2[]**](EzsigntemplatesignaturecustomdateRequestV2.md) | An array of custom date blocks that will be filled at the time of signature.  Can only be used if bEzsigntemplatesignatureCustomdate is true.  Use an empty array if you don&#39;t want to have a date at all. | [optional]
**aObjEzsigntemplateelementdependency** | [**\eZmaxAPI\Model\EzsigntemplateelementdependencyRequestCompound[]**](EzsigntemplateelementdependencyRequest.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
