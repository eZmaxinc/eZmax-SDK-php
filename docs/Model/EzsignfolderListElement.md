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
**dtEzsignfolderDelayedsenddate** | **string** | The date and time at which the Ezsignfolder will be sent in the future. | [optional]
**dtEzsignfolderSentdate** | **string** | The date and time at which the Ezsignfolder was sent the last time. | [optional]
**dtEzsignfolderDuedate** | **string** | The maximum date and time at which the Ezsignfolder can be signed. | [optional]
**iEzsigndocument** | **int** | The total number of Ezsigndocument in the folder |
**iEzsigndocumentEdm** | **int** | The total number of Ezsigndocument in the folder that were saved in the edm system |
**iEzsignsignature** | **int** | The total number of signature blocks in all Ezsigndocuments in the folder |
**iEzsignsignatureSigned** | **int** | The total number of already signed signature blocks in all Ezsigndocuments in the folder |
**iEzsignformfieldgroup** | **int** | The total number of Ezsignformfieldgroup in all Ezsigndocuments in the folder |
**iEzsignformfieldgroupCompleted** | **int** | The total number of completed Ezsignformfieldgroup in all Ezsigndocuments in the folder |
**bEzsignformHasdependencies** | **bool** | Whether the Ezsignform/Ezsignsignatures has dependencies or not | [optional]
**dEzsignfolderCompletedpercentage** | **string** | Whether the Ezsignform/Ezsignsignatures has dependencies or not |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
