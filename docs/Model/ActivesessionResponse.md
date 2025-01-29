# # ActivesessionResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**eActivesessionUsertype** | [**\eZmaxAPI\Model\FieldEActivesessionUsertype**](FieldEActivesessionUsertype.md) |  |
**eActivesessionOrigin** | [**\eZmaxAPI\Model\FieldEActivesessionOrigin**](FieldEActivesessionOrigin.md) |  |
**eActivesessionWeekdaystart** | [**\eZmaxAPI\Model\FieldEActivesessionWeekdaystart**](FieldEActivesessionWeekdaystart.md) |  |
**fkiLanguageID** | **int** | The unique ID of the Language.  Valid values:  |Value|Description| |-|-| |1|French| |2|English| |
**sCompanyNameX** | **string** | The Name of the Company in the language of the requester |
**sDepartmentNameX** | **string** | The Name of the Department in the language of the requester |
**bActivesessionDebug** | **bool** | Whether the active session is in debug or not |
**bActivesessionIssuperadmin** | **bool** | Whether the active session is superadmin or not |
**bActivesessionAttachment** | **bool** | Can access attachment when we clone a user | [optional]
**bActivesessionCanafe** | **bool** | Can access canafe when we clone a user | [optional]
**bActivesessionFinancial** | **bool** | Can access financial element when we clone a user | [optional]
**bActivesessionRealestatecompleted** | **bool** | Can access closed realestate folders when we clone a user | [optional]
**eActivesessionEzsign** | [**\eZmaxAPI\Model\FieldEActivesessionEzsign**](FieldEActivesessionEzsign.md) |  | [optional]
**eActivesessionEzsignaccess** | [**\eZmaxAPI\Model\FieldEActivesessionEzsignaccess**](FieldEActivesessionEzsignaccess.md) |  |
**eActivesessionEzsignprepaid** | [**\eZmaxAPI\Model\FieldEActivesessionEzsignprepaid**](FieldEActivesessionEzsignprepaid.md) |  | [optional]
**eActivesessionRealestateinprogress** | [**\eZmaxAPI\Model\FieldEActivesessionRealestateinprogress**](FieldEActivesessionRealestateinprogress.md) |  | [optional]
**pksCustomerCode** | **string** | The customer code assigned to your account |
**fkiSystemconfigurationtypeID** | **int** | The unique ID of the Systemconfigurationtype |
**fkiSignatureID** | **int** | The unique ID of the Signature | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
