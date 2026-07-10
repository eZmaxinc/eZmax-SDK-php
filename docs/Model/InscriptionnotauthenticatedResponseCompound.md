# InscriptionnotauthenticatedResponseCompound

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**pkiInscriptionnotauthenticatedID** | **int** | The unique ID of the Inscriptionnotauthenticated. |
**fkiCompanyID** | **int** | The unique ID of the Company |
**sCompanyNameX** | **string** | The Name of the Company in the language of the requester | [optional]
**fkiInscriptionID** | **int** | The unique ID of the Inscription. |
**fkiDepartmentID** | **int** | The unique ID of the Department |
**sDepartmentNameX** | **string** | The Name of the Department in the language of the requester | [optional]
**fkiFinancialinstitutionID** | **int** | The unique ID of the Financialinstitution |
**sFinancialinstitutionNameX** | **string** | The name of the Financialinstitution in the language of the requester | [optional]
**fkiBuyercontractID** | **int** | The unique ID of the Buyercontract |
**sBuyercontractContract** | **string** | The number of the Buyercontract | [optional]
**fkiMortgagesupplierID** | **int** | The unique ID of the Mortgagesupplier |
**sMortgagesupplierNameX** | **string** | The name of the Mortagesupplier in the language of the requester | [optional]
**fkiTaxassignmentID** | **int** | The unique ID of the Taxassignment.  Valid values:  |Value|Description| |-|-| |1|No tax| |2|GST| |3|HST (ON)| |4|HST (NB)| |5|HST (NS)| |6|HST (NL)| |7|HST (PE)| |8|GST + QST (QC)| |9|GST + QST (QC) Non-Recoverable| |10|GST + PST (BC)| |11|GST + PST (SK)| |12|GST + RST (MB)| |13|GST + PST (BC) Non-Recoverable| |14|GST + PST (SK) Non-Recoverable| |15|GST + RST (MB) Non-Recoverable| |
**sTaxassignmentDescriptionX** | **string** | The description of the Taxassignment  in the language of the requester | [optional]
**dtInscriptionnotauthenticatedTransactiondate** | **string** | The transactiondate of the Inscriptionnotauthenticated |
**dtInscriptionnotauthenticatedTransactiondateReal** | **string** | The transactiondatereal of the Inscriptionnotauthenticated |
**dtInscriptionnotauthenticatedDepositdate** | **string** | The depositdate of the Inscriptionnotauthenticated |
**eInscriptionnotauthenticatedType** | [**\eZmaxAPI\Model\FieldEInscriptionnotauthenticatedType**](FieldEInscriptionnotauthenticatedType.md) |  |
**dInscriptionnotauthenticatedMortgageloan** | **string** | The mortgageloan of the Inscriptionnotauthenticated |
**etInscriptionnotauthenticatedMortgagetype** | [**\eZmaxAPI\Model\FieldEtInscriptionnotauthenticatedMortgagetype**](FieldEtInscriptionnotauthenticatedMortgagetype.md) |  |
**dInscriptionnotauthenticatedTransactionprice** | **string** | The transactionprice of the Inscriptionnotauthenticated |
**eInscriptionnotauthenticatedRemunerationtype** | [**\eZmaxAPI\Model\FieldEInscriptionnotauthenticatedRemunerationtype**](FieldEInscriptionnotauthenticatedRemunerationtype.md) |  |
**dInscriptionnotauthenticatedRemuneration** | **string** | The remuneration of the Inscriptionnotauthenticated |
**dInscriptionnotauthenticatedRemunerationsubtotal** | **string** | The remunerationsubtotal of the Inscriptionnotauthenticated |
**dInscriptionnotauthenticatedRemunerationtotal** | **string** | The remunerationtotal of the Inscriptionnotauthenticated |
**dtInscriptionnotauthenticatedCancellationdate** | **string** | The cancellationdate of the Inscriptionnotauthenticated |
**dtInscriptionnotauthenticatedPossessiondate** | **string** | The possessiondate of the Inscriptionnotauthenticated |
**sInscriptionnotauthenticatedOffertopurchasenumber** | **string** | The Offer to purchase number |
**dtInscriptionnotauthenticatedNotaryscheduledate** | **string** | The notaryscheduledate of the Inscriptionnotauthenticated |
**dtInscriptionnotauthenticatedFinancingscheduledate** | **string** | The financingscheduledate of the Inscriptionnotauthenticated |
**bInscriptionnotauthenticatedConditional** | **bool** | Whether the inscriptionnotauthenticated is conditional |
**bInscriptionnotauthenticatedMortgageisreferenced** | **bool** | Whether if it&#39;s an mortgageisreferenced |
**bInscriptionnotauthenticatedHomeowner** | **bool** | Whether if it&#39;s an homeowner |
**tInscriptionnotauthenticatedConditions** | **string** | The conditions of the Inscriptionnotauthenticated |
**dtInscriptionnotauthenticatedConditiondeadlinedate** | **string** | The conditiondeadlinedate of the Inscriptionnotauthenticated |
**iInscriptionnotauthenticatedOrder** | **int** | The order of the Inscriptionnotauthenticated |
**bInscriptionnotauthenticatedIsactive** | **bool** | Whether the inscriptionnotauthenticated is active or not |
**eInscriptionnotauthenticatedResidenceType** | [**\eZmaxAPI\Model\FieldEInscriptionnotauthenticatedResidenceType**](FieldEInscriptionnotauthenticatedResidenceType.md) |  |
**tInscriptionnotauthenticatedChecklistnote** | **string** | The checklistnote of the Inscriptionnotauthenticated |
**dInscriptionnotauthenticatedSelleronlyretribution** | **string** | The selleronlyretribution of the Inscriptionnotauthenticated |
**bInscriptionnotauthenticatedDraft** | **bool** | Whether the inscriptionnotauthenticated is a draft or not |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
