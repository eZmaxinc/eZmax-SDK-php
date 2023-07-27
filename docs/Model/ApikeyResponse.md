# # ApikeyResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**pkiApikeyID** | **int** | The unique ID of the Apikey |
**fkiUserID** | **int** | The unique ID of the User |
**objApikeyDescription** | [**\eZmaxAPI\Model\MultilingualApikeyDescription**](MultilingualApikeyDescription.md) |  |
**objContactName** | [**\eZmaxAPI\Model\CustomContactNameResponse**](CustomContactNameResponse.md) |  |
**sApikeyApikey** | **string** | The Apikey for the API key.  This will be hidden if we are not creating or regenerating the Apikey. | [optional]
**sApikeySecret** | **string** | The Secret for the API key.  This will be hidden if we are not creating or regenerating the Apikey. | [optional]
**bApikeyIsactive** | **bool** | Whether the apikey is active or not |
**bApikeyIssigned** | **bool** | Whether the apikey is signed or not | [optional]
**objAudit** | [**\eZmaxAPI\Model\CommonAudit**](CommonAudit.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
