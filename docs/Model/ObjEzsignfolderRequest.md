# # ObjEzsignfolderRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**fkiEzsignfoldertypeID** | **int** | A Foreign Key to the Ezsign Folder Type | 
**fkiLanguageID** | **int** | The ID of the language, Valid values are: 1. French 2. English | 
**sEzsignfolderDescription** | **string** | The description of the Ezsign Folder | 
**tEzsignfolderNote** | **string** | Somes extra notes about the eZsign Folder | 
**fkiEzsigntsarequirementID** | **int** | The ID of the Time Stamping Authority requirement, Valid values are: 1. No. No TSA Timestamping will requested. This will make all signatures a lot faster since no round-trip to the TSA server will be required. Timestamping will be made using eZsign server&#39;s time. 2. Best effort. Timestamping from a Time Stamping Authority will be requested but is not mandatory. In the very improbable case it cannot be completed, the timestamping will be made using eZsign server&#39;s time. **Additional fee applies** 3. Mandatory. Timestamping from a Time Stamping Authority will be requested and is mandatory. In the very improbable case it cannot be completed, the signature will fail and the user will be asked to retry. **Additional fee applies** | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


