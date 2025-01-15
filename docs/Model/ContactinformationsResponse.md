# # ContactinformationsResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**pkiContactinformationsID** | **int** | The unique ID of the Contactinformations |
**fkiAddressIDDefault** | **int** | The unique ID of the Address | [optional]
**fkiPhoneIDDefault** | **int** | The unique ID of the Phone. | [optional]
**fkiEmailIDDefault** | **int** | The unique ID of the Email | [optional]
**fkiWebsiteIDDefault** | **int** | The unique ID of the Website Default | [optional]
**eContactinformationsType** | [**\eZmaxAPI\Model\FieldEContactinformationsType**](FieldEContactinformationsType.md) |  |
**sContactinformationsUrl** | **string** | The url of the Contactinformations | [optional]
**objAddressDefault** | [**\eZmaxAPI\Model\AddressResponse**](AddressResponse.md) | An Address Object and children to create a complete structure | [optional]
**objPhoneDefault** | [**\eZmaxAPI\Model\PhoneResponseCompound**](PhoneResponseCompound.md) |  | [optional]
**objEmailDefault** | [**\eZmaxAPI\Model\EmailResponse**](EmailResponse.md) | An Email Object and children to create a complete structure | [optional]
**objWebsiteDefault** | [**\eZmaxAPI\Model\WebsiteResponse**](WebsiteResponse.md) | A Website Object and children to create a complete structure | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
