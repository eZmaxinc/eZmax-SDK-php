# # EzsignfolderListElement

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**pkiEzsignfolderID** | **int** | The unique ID of the Ezsignfolder |
**fkiEzsignfoldertypeID** | **int** | The unique ID of the Ezsignfoldertype. |
**eEzsignfoldertypePrivacylevel** | [**\eZmaxAPI\Model\FieldEEzsignfoldertypePrivacylevel**](FieldEEzsignfoldertypePrivacylevel.md) |  |
**sEzsignfoldertypeNameX** | **string** | The name of the Ezsignfoldertype in the language of the requester |
**sEzsignfolderDescription** | **string** | The description of the Ezsignfolder |
**eEzsignfolderStep** | [**\eZmaxAPI\Model\FieldEEzsignfolderStep**](FieldEEzsignfolderStep.md) |  |
**dtCreatedDate** | **string** | The date and time at which the object was created |
**dtEzsignfolderSentdate** | [**OneOfStringObject**](OneOfStringObject.md) |  |
**dtDueDate** | [**OneOfStringObject**](OneOfStringObject.md) | The date at which no more signature will be accepted on the folder |
**iEzsigndocument** | **int** | The total number of Ezsigndocument in the folder |
**iEzsigndocumentEdm** | **int** | The total number of Ezsigndocument in the folder that were saved in the edm system |
**iEzsignsignature** | **int** | The total number of signature blocks in all Ezsigndocuments in the folder |
**iEzsignsignatureSigned** | **int** | The total number of already signed signature blocks in all Ezsigndocuments in the folder |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
