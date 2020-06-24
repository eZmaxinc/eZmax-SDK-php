# # EzsignfolderRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**fkiEzsignfoldertypeID** | **int** | The Ezsign Folder Type ID. This value can be queried by the API and is also visible in the admin interface.  There are two types of Ezsignfoldertype. **User** and **Shared**. **User** can only be seen by the user who created the folder or its assistants. Access to **Shared** folders are configurable for access and email delivery. You should typically choose a **Shared** type here. | 
**fkiLanguageID** | **int** | The ID of the language, Valid values are: 1. French 2. English | 
**sEzsignfolderDescription** | **string** | The description of the Ezsign Folder | 
**tEzsignfolderNote** | **string** | Somes extra notes about the eZsign Folder | 
**fkiEzsigntsarequirementID** | **int** | Determine if a Time Stamping Authority should add a timestamp on each of the signature. Valid values are: 1. No. No TSA Timestamping will requested. This will make all signatures a lot faster since no round-trip to the TSA server will be required. Timestamping will be made using eZsign server&#39;s time. 2. Best effort. Timestamping from a Time Stamping Authority will be requested but is not mandatory. In the very improbable case it cannot be completed, the timestamping will be made using eZsign server&#39;s time. **Additional fee applies** 3. Mandatory. Timestamping from a Time Stamping Authority will be requested and is mandatory. In the very improbable case it cannot be completed, the signature will fail and the user will be asked to retry. **Additional fee applies** | 
**testEnum** | **string** |  | [optional] 
**testString** | **string** |  | [optional] 
**testInteger** | **int** |  | [optional] 
**testBoolean** | **bool** |  | [optional] 
**testBase64** | **string** |  | [optional] 
**testEmail** | **string** |  | [optional] 
**testIPV4** | **string** |  | [optional] 
**testDate** | [**\DateTime**](\DateTime.md) |  | [optional] 
**patternSSN** | **string** |  | [optional] 
**testNullableTrue** | **string** |  | [optional] 
**testEzmaxCustom** | **string** |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

