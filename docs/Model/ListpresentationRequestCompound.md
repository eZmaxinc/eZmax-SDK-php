# # ListpresentationRequestCompound

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**sListpresentationDescription** | **string** | A descriptive for the list presentation |
**sListpresentationFilter** | **string** | The filter to apply to the request to limit results. |
**sListpresentationOrderby** | **string** | The order by the user chose |
**aSColumnName** | **string[]** | An array of column names that the user chose to bee visible |
**iListpresentationRowMax** | **int** | The maximum numbers of results to be returned |
**iListpresentationRowOffset** | **int** | The starting element from where to start retrieving the results. For example if you started at iRowOffset&#x3D;0 and asked for iRowMax&#x3D;100, to get the next 100 results, you could specify iRowOffset&#x3D;100&amp;iRowMax&#x3D;100, |
**bListpresentationDefault** | **bool** | Set to true if the user chose this Listpresentation as the default one. A single element should be set to true |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
