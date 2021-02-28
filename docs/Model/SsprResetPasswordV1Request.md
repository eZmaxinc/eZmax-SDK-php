# # SsprResetPasswordV1Request

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**pksCustomerCode** | **string** | The customer code assigned to your account |
**fkiLanguageID** | **int** | The unique ID of the Language.  Valid values:  |Value|Description| |-|-| |1|French| |2|English| |
**eUserTypeSSPR** | [**\eZmaxAPI\Model\FieldEUserTypeSSPR**](FieldEUserTypeSSPR.md) |  |
**sEmailAddress** | **string** | The email address. | [optional]
**sUserLoginname** | **string** | The Login name of the User. | [optional]
**binUserSSPRtoken** | **string** | Hex Encoded Secret SSPR token |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
