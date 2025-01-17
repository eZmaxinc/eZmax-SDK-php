# # ActivesessionResponseCompound

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**fkiEzsignuserID** | **int** | The unique ID of the Ezsignuser | [optional]
**bSystemconfigurationEzsignpaidbyoffice** | **bool** | Whether if Ezsign is paid by the company or not | [optional]
**eSystemconfigurationEzsignofficeplan** | [**\eZmaxAPI\Model\FieldESystemconfigurationEzsignofficeplan**](FieldESystemconfigurationEzsignofficeplan.md) |  | [optional]
**eUserEzsignaccess** | [**\eZmaxAPI\Model\FieldEUserEzsignaccess**](FieldEUserEzsignaccess.md) |  |
**eUserEzsignprepaid** | [**\eZmaxAPI\Model\FieldEUserEzsignprepaid**](FieldEUserEzsignprepaid.md) |  | [optional]
**bUserEzsigntrial** | **bool** | Whether the User&#39;s eZsign subscription is a trial | [optional]
**dtUserEzsignprepaidexpiration** | **string** | The eZsign prepaid expiration date | [optional]
**aPkiPermissionID** | **int[]** | An array of permissions granted to the user or api key |
**objUserReal** | [**\eZmaxAPI\Model\ActivesessionResponseCompoundUser**](ActivesessionResponseCompoundUser.md) |  |
**objUserCloned** | [**\eZmaxAPI\Model\ActivesessionResponseCompoundUser**](ActivesessionResponseCompoundUser.md) |  | [optional]
**objApikey** | [**\eZmaxAPI\Model\ActivesessionResponseCompoundApikey**](ActivesessionResponseCompoundApikey.md) |  | [optional]
**aEModuleInternalname** | **string[]** | An Array of Registered modules.  These are the modules that are Licensed to be used by the User or the API Key. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
