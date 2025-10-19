# # InscriptionListElement

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**pkiInscriptionID** | **int** | The unique ID of the Inscription. |
**pkiInscriptionnotauthenticatedID** | **int** | The unique ID of the Inscriptionnotauthenticated. | [optional]
**fkiInscriptiontypeID** | **int** | The unique ID of the Inscriptiontype |
**sInscriptiontypeNameX** | **string** | The name of the Inscriptiontype in the language of the requester |
**eInscriptionStep** | [**\eZmaxAPI\Model\FieldEInscriptionStep**](FieldEInscriptionStep.md) |  |
**sInscriptionCivicend** | **string** | The civicend of the Inscription |
**sInscriptionMLS** | **string** | The mls of the Inscription | [optional]
**dInscriptionSaleprice** | **string** | The saleprice of the Inscription |
**dInscriptionRentprice** | **string** | The rentprice of the Inscription |
**dtInscriptionDate** | **string** | The date of the Inscription | [optional]
**dtInscriptionExpirationdate** | **string** | The expirationdate of the Inscription | [optional]
**dtInscriptionNotarydate** | **string** | The notarydate of the Inscription | [optional]
**bInscriptionIsactive** | **bool** | Whether the inscription is active or not |
**bInscriptionArchived** | **bool** | Whether the inscription is archived or not |
**bInscriptionInspection** | **bool** | Whether the inscription can be acces by an inspector | [optional]
**dtInscriptionnotauthenticatedNotaryscheduledate** | **string** | The notaryscheduledate of the Inscriptionnotauthenticated | [optional]
**dtInscriptionnotauthenticatedTransactiondate** | **string** | The transactiondate of the Inscriptionnotauthenticated | [optional]
**dtInscriptionnotauthenticatedTransactiondateReal** | **string** | The transactiondatereal of the Inscriptionnotauthenticated | [optional]
**bInscriptionnotauthenticatedConditional** | **bool** | Whether the inscriptionnotauthenticated is conditional | [optional]
**bInscriptionnotauthenticatedIsactive** | **bool** | Whether the inscriptionnotauthenticated is active or not | [optional]
**sAddressCivic** | **string** | The Civic number. | [optional]
**sAddressStreet** | **string** | The Street Name | [optional]
**sAddressSuite** | **string** | The Suite or appartment number | [optional]
**sAddressCity** | **string** | The City name | [optional]
**sAddressZip** | **string** | The Postal/Zip Code  The value must be entered without spaces | [optional]
**sProvinceNameX** | **string** | The name of the Province in the language of the requester | [optional]
**sCountryNameX** | **string** | The name of the Country in the language of the requester | [optional]
**iInscriptionnotauthenticatedCanceled** | **int** | The numbre of inscriptionnotauthenticated was canceled in this Inscription |
**bAllowedCopyintoinscriptionedm** | **bool** | Whether we are allowed to copy into the Inscription EDM |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
