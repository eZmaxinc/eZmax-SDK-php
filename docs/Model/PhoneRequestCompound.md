# # PhoneRequestCompound

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**pkiPhoneID** | **int** | The unique ID of the Phone. | [optional]
**fkiPhonetypeID** | **int** | The unique ID of the Phonetype.  Valid values:  |Value|Description| |-|-| |1|Office| |2|Home| |3|Mobile| |4|Fax| |5|Pager| |6|Toll Free| |
**ePhoneType** | [**\eZmaxAPI\Model\FieldEPhoneType**](FieldEPhoneType.md) |  | [optional]
**sPhoneRegion** | **string** | The region of the phone number. (For a North America Number only)  The region is the \&quot;514\&quot; section in this sample phone number: (514) 990-1516 x123 | [optional]
**sPhoneExchange** | **string** | The exchange of the phone number. (For a North America Number only)  The exchange is the \&quot;990\&quot; section in this sample phone number: (514) 990-1516 x123 | [optional]
**sPhoneNumber** | **string** | The number of the phone number. (For a North America Number only)  The number is the \&quot;1516\&quot; section in this sample phone number: (514) 990-1516 x123 | [optional]
**sPhoneInternational** | **string** | The international phone number. | [optional]
**sPhoneExtension** | **string** | The extension of the phone number.  The extension is the \&quot;123\&quot; section in this sample phone number: (514) 990-1516 x123.  It can also be used with international phone numbers | [optional]
**sPhoneE164** | **string** | A phone number in E.164 Format | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
