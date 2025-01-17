# # ContactRequestCompoundV2

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**fkiContacttitleID** | **int** | The unique ID of the Contacttitle.  Valid values:  |Value|Description| |-|-| |1|Ms.| |2|Mr.| |4|(Blank)| |5|Me (For Notaries)| |
**fkiLanguageID** | **int** | The unique ID of the Language.  Valid values:  |Value|Description| |-|-| |1|French| |2|English| |
**eContactType** | [**\eZmaxAPI\Model\FieldEContactType**](FieldEContactType.md) |  |
**sContactFirstname** | **string** | The First name of the contact |
**sContactLastname** | **string** | The Last name of the contact |
**sContactCompany** | **string** | The Company name of the contact | [optional]
**dtContactBirthdate** | **string** | The Birth Date of the contact | [optional]
**sContactOccupation** | **string** | The occupation of the Contact | [optional]
**tContactNote** | **string** | The note of the Contact | [optional]
**bContactIsactive** | **bool** | Whether the contact is active or not | [optional]
**objContactinformations** | [**\eZmaxAPI\Model\ContactinformationsRequestCompoundV2**](ContactinformationsRequestCompoundV2.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
