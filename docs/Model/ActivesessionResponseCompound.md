# # ActivesessionResponseCompound

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**eActivesessionUsertype** | [**\eZmaxAPI\Model\FieldEActivesessionUsertype**](FieldEActivesessionUsertype.md) |  |
**eActivesessionWeekdaystart** | [**\eZmaxAPI\Model\FieldEActivesessionWeekdaystart**](FieldEActivesessionWeekdaystart.md) |  |
**fkiLanguageID** | **int** | The unique ID of the Language.  Valid values:  |Value|Description| |-|-| |1|French| |2|English| |
**sCompanyNameX** | **string** | The Name of the Company in the language of the requester |
**sDepartmentNameX** | **string** | The Name of the Department in the language of the requester |
**bActivesessionDebug** | **bool** | Whether the active session is in debug or not |
**bActivesessionIssuperadmin** | **bool** | Whether the active session is superadmin or not |
**pksCustomerCode** | **string** | The customer code assigned to your account |
**fkiSystemconfigurationtypeID** | **int** | The unique ID of the Systemconfigurationtype | [optional]
**aPkiPermissionID** | **int[]** | An array of permissions granted to the user or api key |
**objUserReal** | [**\eZmaxAPI\Model\ActivesessionResponseCompoundUser**](ActivesessionResponseCompoundUser.md) |  |
**objUserCloned** | [**\eZmaxAPI\Model\ActivesessionResponseCompoundUser**](ActivesessionResponseCompoundUser.md) |  | [optional]
**objApikey** | [**\eZmaxAPI\Model\ActivesessionResponseCompoundApikey**](ActivesessionResponseCompoundApikey.md) |  | [optional]
**aEModuleInternalname** | **string[]** | An Array of Registered modules.  These are the modules that are Licensed to be used by the User or the API Key. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
