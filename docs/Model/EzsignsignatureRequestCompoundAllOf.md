# # EzsignsignatureRequestCompoundAllOf

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**bEzsignsignatureCustomdate** | **bool** | Whether the Ezsignsignature has a custom date format or not. (Only possible when eEzsignsignatureType is \&quot;Name\&quot; or \&quot;Handwritten\&quot;) | [optional]
**aObjEzsignsignaturecustomdate** | [**\eZmaxAPI\Model\EzsignsignaturecustomdateRequestCompound[]**](EzsignsignaturecustomdateRequestCompound.md) | An array of custom date blocks that will be filled at the time of signature.  Can only be used if bEzsignsignatureCustomdate is true.  Use an empty array if you don&#39;t want to have a date at all. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
