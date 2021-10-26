# # EzsigndocumentRequestCompound

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**eEzsigndocumentSource** | **string** | Indicates where to look for the document binary content. |
**eEzsigndocumentFormat** | **string** | Indicates the format of the document. |
**sEzsigndocumentBase64** | **string** | The Base64 encoded binary content of the document.  This field is Required when eEzsigndocumentSource &#x3D; Base64. | [optional]
**sEzsigndocumentUrl** | **string** | The url where the document content resides.  This field is Required when eEzsigndocumentSource &#x3D; Url. | [optional]
**bEzsigndocumentForcerepair** | **bool** | Try to repair the document or flatten it if it cannot be used for electronic signature. | [optional] [default to true]
**sEzsigndocumentPassword** | **string** | If the source document is password protected, the password to open/modify it. | [optional] [default to '']
**fkiEzsignfolderID** | **int** | The unique ID of the Ezsignfolder |
**dtEzsigndocumentDuedate** | **string** | The maximum date and time at which the document can be signed. |
**fkiLanguageID** | **int** | The unique ID of the Language.  Valid values:  |Value|Description| |-|-| |1|French| |2|English| |
**sEzsigndocumentName** | **string** | The name of the document that will be presented to Ezsignfoldersignerassociations |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
