# InscriptionnotauthenticatedResponseCompound

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**pkiInscriptionnotauthenticatedID** | **int** | The unique ID of the Inscriptionnotauthenticated. |
**fkiInscriptionID** | **int** | The unique ID of the Inscription. |
**fkiDepartmentID** | **int** | The unique ID of the Department | [optional]
**sDepartmentNameX** | **string** | The Name of the Department in the language of the requester | [optional]
**fkiFinancialinstitutionID** | **int** | The unique ID of the Financialinstitution | [optional]
**sFinancialinstitutionNameX** | **string** | The name of the Financialinstitution in the language of the requester | [optional]
**fkiBuyercontractID** | **int** | The unique ID of the Buyercontract | [optional]
**sBuyercontractContract** | **string** | The number of the Buyercontract | [optional]
**fkiMortgagesupplierID** | **int** | The unique ID of the Mortgagesupplier | [optional]
**sMortgagesupplierNameX** | **string** | The name of the Mortagesupplier in the language of the requester | [optional]
**fkiTaxassignmentID** | **int** | The unique ID of the Taxassignment.  Valid values:  |Value|Description| |-|-| |1|No tax| |2|GST| |3|HST (ON)| |4|HST (NB)| |5|HST (NS)| |6|HST (NL)| |7|HST (PE)| |8|GST + QST (QC)| |9|GST + QST (QC) Non-Recoverable| |10|GST + PST (BC)| |11|GST + PST (SK)| |12|GST + RST (MB)| |13|GST + PST (BC) Non-Recoverable| |14|GST + PST (SK) Non-Recoverable| |15|GST + RST (MB) Non-Recoverable| |
**sTaxassignmentDescriptionX** | **string** | The description of the Taxassignment  in the language of the requester | [optional]
**dtInscriptionnotauthenticatedTransactiondate** | **string** | The transaction date of the Inscriptionnotauthenticated | [optional]
**dtInscriptionnotauthenticatedTransactiondateReal** | **string** | The real transactiondate of the Inscriptionnotauthenticated | [optional]
**dtInscriptionnotauthenticatedDepositdate** | **string** | The deposit date of the Inscriptionnotauthenticated | [optional]
**eInscriptionnotauthenticatedType** | [**\eZmaxAPI\Model\FieldEInscriptionnotauthenticatedType**](FieldEInscriptionnotauthenticatedType.md) |  |
**dInscriptionnotauthenticatedMortgageloan** | **string** | The amount of the mortgage loan of the Inscriptionnotauthenticated |
**etInscriptionnotauthenticatedMortgagetype** | [**\eZmaxAPI\Model\FieldEtInscriptionnotauthenticatedMortgagetype**](FieldEtInscriptionnotauthenticatedMortgagetype.md) |  |
**dInscriptionnotauthenticatedTransactionprice** | **string** | The transaction price of the Inscriptionnotauthenticated |
**eInscriptionnotauthenticatedRemunerationtype** | [**\eZmaxAPI\Model\FieldEInscriptionnotauthenticatedRemunerationtype**](FieldEInscriptionnotauthenticatedRemunerationtype.md) |  |
**dInscriptionnotauthenticatedRemuneration** | **string** | The amount for the remuneration of the Inscriptionnotauthenticated |
**dInscriptionnotauthenticatedRemunerationsubtotal** | **string** | The subtotal for the remuneration of the Inscriptionnotauthenticated |
**dInscriptionnotauthenticatedRemunerationtotal** | **string** | The total for the remuneration of the Inscriptionnotauthenticated |
**dtInscriptionnotauthenticatedCancellationdate** | **string** | The cancellation date of the Inscriptionnotauthenticated | [optional]
**dtInscriptionnotauthenticatedPossessiondate** | **string** | The possession date of the Inscriptionnotauthenticated | [optional]
**sInscriptionnotauthenticatedOffertopurchasenumber** | **string** | The offer to purchase number of the Inscriptionnotauthenticated |
**dtInscriptionnotauthenticatedNotaryscheduledate** | **string** | The notary schedule date of the Inscriptionnotauthenticated | [optional]
**dtInscriptionnotauthenticatedFinancingscheduledate** | **string** | The financing schedule date of the Inscriptionnotauthenticated | [optional]
**bInscriptionnotauthenticatedConditional** | **bool** | Whether the inscriptionnotauthenticated is conditional |
**bInscriptionnotauthenticatedMortgageisreferenced** | **bool** | Whether if the mortgage is referenced |
**bInscriptionnotauthenticatedHomeowner** | **bool** | Whether if it&#39;s an home owner |
**tInscriptionnotauthenticatedConditions** | **string** | The conditions of the Inscriptionnotauthenticated |
**dtInscriptionnotauthenticatedConditiondeadlinedate** | **string** | The condition deadline date of the Inscriptionnotauthenticated | [optional]
**iInscriptionnotauthenticatedOrder** | **int** | The order of the Inscriptionnotauthenticated |
**bInscriptionnotauthenticatedIsactive** | **bool** | Whether the inscriptionnotauthenticated is active or not |
**eInscriptionnotauthenticatedResidenceType** | [**\eZmaxAPI\Model\FieldEInscriptionnotauthenticatedResidenceType**](FieldEInscriptionnotauthenticatedResidenceType.md) |  |
**tInscriptionnotauthenticatedChecklistnote** | **string** | The checklist note of the Inscriptionnotauthenticated |
**dInscriptionnotauthenticatedSelleronlyretribution** | **string** | The amount retribution for the seller only of the Inscriptionnotauthenticated |
**bInscriptionnotauthenticatedDraft** | **bool** | Whether the Inscriptionnotauthenticated is a draft or not |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
