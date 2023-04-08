# # EzsigndocumentRequestCompound

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**pkiEzsigndocumentID** | **int** | The unique ID of the Ezsigndocument | [optional]
**fkiEzsignfolderID** | **int** | The unique ID of the Ezsignfolder |
**fkiEzsigntemplateID** | **int** | The unique ID of the Ezsigntemplate | [optional]
**fkiEzsignfoldersignerassociationID** | **int** | The unique ID of the Ezsignfoldersignerassociation | [optional]
**fkiLanguageID** | **int** | The unique ID of the Language.  Valid values:  |Value|Description| |-|-| |1|French| |2|English| |
**eEzsigndocumentSource** | **string** | Indicates where to look for the document binary content. |
**eEzsigndocumentFormat** | **string** | Indicates the format of the document. | [optional]
**sEzsigndocumentBase64** | **string** | The Base64 encoded binary content of the document.  This field is Required when eEzsigndocumentSource &#x3D; Base64. | [optional]
**sEzsigndocumentUrl** | **string** | The url where the document content resides.  This field is Required when eEzsigndocumentSource &#x3D; Url. | [optional]
**bEzsigndocumentForcerepair** | **bool** | Try to repair the document or flatten it if it cannot be used for electronic signature. | [optional] [default to true]
**sEzsigndocumentPassword** | **string** | If the source document is password protected, the password to open/modify it. | [optional]
**eEzsigndocumentForm** | **string** | If the document contains an existing PDF form this property must be set.  **Keep** leaves the form as-is in the document.  **Convert** removes the form and convert all the existing fields to Ezsignformfieldgroups and assign them to the specified **fkiEzsignfoldersignerassociationID** | [optional]
**dtEzsigndocumentDuedate** | **string** | The maximum date and time at which the Ezsigndocument can be signed. |
**sEzsigndocumentName** | **string** | The name of the document that will be presented to Ezsignfoldersignerassociations |
**sEzsigndocumentExternalid** | **string** | This field can be used to store an External ID from the client&#39;s system.  Anything can be stored in this field, it will never be evaluated by the eZmax system and will be returned AS-IS.  To store multiple values, consider using a JSON formatted structure, a URL encoded string, a CSV or any other custom format. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
