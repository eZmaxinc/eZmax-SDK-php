# # ApikeyResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**pkiApikeyID** | **int** | The unique ID of the Apikey |
**fkiUserID** | **int** | The unique ID of the User |
**objApikeyDescription** | [**\eZmaxAPI\Model\MultilingualApikeyDescription**](MultilingualApikeyDescription.md) |  |
**sComputedToken** | **string** | The secret token for the API key.  This will be returned only on creation. | [optional]
**bApikeyIsactive** | **bool** | Whether the apikey is active or not |
**objAudit** | [**\eZmaxAPI\Model\CommonAudit**](CommonAudit.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
