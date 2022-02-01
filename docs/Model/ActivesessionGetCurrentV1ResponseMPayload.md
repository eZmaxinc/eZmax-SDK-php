# # ActivesessionGetCurrentV1ResponseMPayload

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**sCustomerCode** | **string** | The customer code specific to the client in which the API request is being made |
**eActivesessionSessiontype** | **string** | The type of session used for the API request call |
**eActivesessionWeekdaystart** | [**\eZmaxAPI\Model\FieldEActivesessionWeekdaystart**](FieldEActivesessionWeekdaystart.md) |  |
**fkiLanguageID** | **int** | The unique ID of the Language.  Valid values:  |Value|Description| |-|-| |1|French| |2|English| |
**sCompanyNameX** | **string** | The name of the active Company in the current language |
**sDepartmentNameX** | **string** | The name of the active Department in the current language |
**aRegisteredModules** | **string[]** | An Array of Registered modules.  These are the modules that are Licensed to be used by the User or the API Key. |
**aPermissions** | **int[]** | An array of permissions granted to the user or api key |
**fkiUserID** | **int** | The unique ID of the User |
**fkiApikeyID** | **int** | The unique ID of the Apikey |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
