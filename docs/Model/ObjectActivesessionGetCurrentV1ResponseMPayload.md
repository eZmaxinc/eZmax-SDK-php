# # ObjectActivesessionGetCurrentV1ResponseMPayload

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**sCustomerCode** | **string** | The customer code specific to the client in which the API request is being made. | 
**eActivesessionSessiontype** | **string** | The type of session used for the API request call. | 
**fkiLanguageID** | **int** | The ID of the language, Valid values are: 1. French 2. English | 
**sCompanyNameX** | **string** | The name of the active Company in the current language. | [default to 'MSD Informatique']
**sDepartmentNameX** | **string** | The name of the active Department in the current language. | 
**aRegisteredModules** | **string[]** | An Array of Registered modules.  These are the modules that are Licensed to be used by the User or the API Key. | 
**aPermissions** | **int[]** | An array of permissions granted to the user or api key. | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


