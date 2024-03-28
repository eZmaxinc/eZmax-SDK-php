# # EzsigndocumentResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**pkiEzsigndocumentID** | **int** | The unique ID of the Ezsigndocument |
**fkiEzsignfolderID** | **int** | The unique ID of the Ezsignfolder |
**fkiEzsignfoldersignerassociationIDDeclinedtosign** | **int** | The unique ID of the Ezsignfoldersignerassociation | [optional]
**dtEzsigndocumentDuedate** | **string** | The maximum date and time at which the Ezsigndocument can be signed. |
**dtEzsignformCompleted** | **string** | The date and time at which the Ezsignform has been completed. | [optional]
**fkiLanguageID** | **int** | The unique ID of the Language.  Valid values:  |Value|Description| |-|-| |1|French| |2|English| | [optional]
**sEzsigndocumentName** | **string** | The name of the document that will be presented to Ezsignfoldersignerassociations |
**eEzsigndocumentStep** | [**\eZmaxAPI\Model\FieldEEzsigndocumentStep**](FieldEEzsigndocumentStep.md) |  |
**dtEzsigndocumentFirstsend** | **string** | The date and time when the Ezsigndocument was first sent. | [optional]
**dtEzsigndocumentLastsend** | **string** | The date and time when the Ezsigndocument was sent the last time. | [optional]
**iEzsigndocumentOrder** | **int** | The order in which the Ezsigndocument will be presented to the signatory in the Ezsignfolder. |
**iEzsigndocumentPagetotal** | **int** | The number of pages in the Ezsigndocument. |
**iEzsigndocumentSignaturesigned** | **int** | The number of signatures that were signed in the document. |
**iEzsigndocumentSignaturetotal** | **int** | The number of total signatures that were requested in the Ezsigndocument. |
**sEzsigndocumentMD5initial** | **string** | MD5 Hash of the initial PDF Document before signatures were applied to it. | [optional]
**tEzsigndocumentDeclinedtosignreason** | **string** | A custom text message that will contain the refusal message if the Ezsigndocument is declined to sign | [optional]
**sEzsigndocumentMD5signed** | **string** | MD5 Hash of the final PDF Document after all signatures were applied to it. | [optional]
**bEzsigndocumentEzsignform** | **bool** | If the Ezsigndocument contains an Ezsignform or not | [optional]
**bEzsigndocumentHassignedsignatures** | **bool** | If the Ezsigndocument contains signed signatures (From internal or external sources) | [optional]
**objAudit** | [**\eZmaxAPI\Model\CommonAudit**](CommonAudit.md) |  | [optional]
**sEzsigndocumentExternalid** | **string** | This field can be used to store an External ID from the client&#39;s system.  Anything can be stored in this field, it will never be evaluated by the eZmax system and will be returned AS-IS.  To store multiple values, consider using a JSON formatted structure, a URL encoded string, a CSV or any other custom format. | [optional]
**iEzsigndocumentEzsignsignatureattachmenttotal** | **int** | The number of Ezsigndocumentattachment total |
**iEzsigndocumentEzsigndiscussiontotal** | **int** | The total number of Ezsigndiscussions |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
