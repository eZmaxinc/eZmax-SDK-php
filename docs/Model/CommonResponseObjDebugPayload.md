# # CommonResponseObjDebugPayload

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**iVersionMin** | **int** | The minimum version of the function that can be called |
**iVersionMax** | **int** | The maximum version of the function that can be called |
**aRequiredPermission** | **int[]** | An array of permissions required to access this function.  If the value \&quot;0\&quot; is present in the array, anyone can call this function.  You must have one of the permission to access the function. You don&#39;t need to have all of them. |
**bVersionDeprecated** | **bool** | Wheter the current route is deprecated or not |
**dtResponseDate** | **string** | Represent a Date Time. The timezone is the one configured in the User&#39;s profile. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
