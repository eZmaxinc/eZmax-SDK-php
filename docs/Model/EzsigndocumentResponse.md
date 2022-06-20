# # EzsigndocumentResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**fkiEzsignfolderID** | **int** | The unique ID of the Ezsignfolder |
**dtEzsigndocumentDuedate** | **string** | The maximum date and time at which the Ezsigndocument can be signed. |
**fkiLanguageID** | **int** | The unique ID of the Language.  Valid values:  |Value|Description| |-|-| |1|French| |2|English| |
**sEzsigndocumentName** | **string** | The name of the document that will be presented to Ezsignfoldersignerassociations |
**pkiEzsigndocumentID** | **int** | The unique ID of the Ezsigndocument |
**eEzsigndocumentStep** | [**\eZmaxAPI\Model\FieldEEzsigndocumentStep**](FieldEEzsigndocumentStep.md) |  |
**dtEzsigndocumentFirstsend** | **string** | The date and time when the Ezsigndocument was first sent. | [optional]
**dtEzsigndocumentLastsend** | **string** | The date and time when the Ezsigndocument was sent the last time. | [optional]
**iEzsigndocumentOrder** | **int** | The order in which the Ezsigndocument will be presented to the signatory in the Ezsignfolder. |
**iEzsigndocumentPagetotal** | **int** | The number of pages in the Ezsigndocument. |
**iEzsigndocumentSignaturesigned** | **int** | The number of signatures that were signed in the document. |
**iEzsigndocumentSignaturetotal** | **int** | The number of total signatures that were requested in the Ezsigndocument. |
**sEzsigndocumentMD5initial** | **string** | MD5 Hash of the initial PDF Document before signatures were applied to it. |
**sEzsigndocumentMD5signed** | **string** | MD5 Hash of the final PDF Document after all signatures were applied to it. |
**bEzsigndocumentEzsignform** | **bool** | If the Ezsigndocument contains an Ezsignform or not |
**objAudit** | [**\eZmaxAPI\Model\CommonAudit**](CommonAudit.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
