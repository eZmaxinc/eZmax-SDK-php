# InscriptionResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**pkiInscriptionID** | **int** | The unique ID of the Inscription. |
**fkiDepartmentID** | **int** | The unique ID of the Department | [optional]
**sDepartmentNameX** | **string** | The Name of the Department in the language of the requester | [optional]
**fkiRealestateboardID** | **int** | The unique ID of the Realestateboard |
**sRealestateboardNameX** | **string** | The name of the Realestateboard | [optional]
**fkiAddressID** | **int** | The unique ID of the Address |
**objAddress** | [**\eZmaxAPI\Model\AddressResponseCompound**](AddressResponseCompound.md) |  | [optional]
**fkiInscriptionbuildingtypeID** | **int** | The unique ID of the Inscriptionbuildingtype |
**sInscriptionbuildingtypeNameX** | **string** | The name of the Inscriptionbuildingtype in the language of the requester | [optional]
**fkiInscriptiontypeID** | **int** | The unique ID of the Inscriptiontype |
**sInscriptiontypeNameX** | **string** | The name of the Inscriptiontype in the language of the requester | [optional]
**fkiInscriptioncategoryID** | **int** | The unique ID of the Inscriptioncategory |
**sInscriptioncategoryNameX** | **string** | The name of the Inscriptioncategory in the language of the requester | [optional]
**eInscriptionStep** | [**\eZmaxAPI\Model\FieldEInscriptionStep**](FieldEInscriptionStep.md) |  |
**eInscriptionResidenceType** | [**\eZmaxAPI\Model\FieldEInscriptionResidenceType**](FieldEInscriptionResidenceType.md) |  |
**sInscriptionCivicend** | **string** | The address civic end of the Inscription |
**sInscriptionMLS** | **string** | The mls of the Inscription | [optional]
**sInscriptionContract** | **string** | The sale contract number |
**iInscriptionSellerdeclaration** | **int** | The seller declaration number of the Inscription |
**eInscriptionType** | [**\eZmaxAPI\Model\FieldEInscriptionType**](FieldEInscriptionType.md) |  |
**dInscriptionInitialsaleprice** | **string** | The initial sale price of the Inscription |
**dInscriptionSaleprice** | **string** | The saleprice of the Inscription |
**dInscriptionRentprice** | **string** | The rent price of the Inscription |
**eInscriptionRemunerationtype** | [**\eZmaxAPI\Model\FieldEInscriptionRemunerationtype**](FieldEInscriptionRemunerationtype.md) |  |
**eInscriptionRemunerationinscriptorsellertype** | [**\eZmaxAPI\Model\FieldEInscriptionRemunerationinscriptorsellertype**](FieldEInscriptionRemunerationinscriptorsellertype.md) |  |
**eInscriptionRemunerationreferencetype** | [**\eZmaxAPI\Model\FieldEInscriptionRemunerationreferencetype**](FieldEInscriptionRemunerationreferencetype.md) |  |
**eInscriptionRemunerationtotaltype** | [**\eZmaxAPI\Model\FieldEInscriptionRemunerationtotaltype**](FieldEInscriptionRemunerationtotaltype.md) |  |
**dInscriptionRemuneration** | **string** | The remuneration amount of the Inscription |
**dInscriptionRemunerationinscriptorseller** | **string** | The remuneration amount for the inscriptor or seller of the Inscription |
**dInscriptionRemunerationreference** | **string** | The remuneration amount for the reference of the Inscription |
**dInscriptionRemunerationtotal** | **string** | The remuneration amount total of the Inscription |
**dInscriptionMortgagesold** | **string** | The balande for the mortgage of the Inscription |
**dtInscriptionDate** | **string** | The date of the Inscription | [optional]
**dtInscriptionCancellationdate** | **string** | The cancellation date of the Inscription | [optional]
**dtInscriptionInitialexpirationdate** | **string** | The initial expiration date of the Inscription | [optional]
**dtInscriptionExpirationdate** | **string** | The expiration date of the Inscription | [optional]
**dtInscriptionNotarydate** | **string** | The notary date of the Inscription | [optional]
**dtInscriptionNotaryentereddate** | **string** | The notary entered date of the Inscription | [optional]
**tInscriptionCadastre** | **string** | The cadastre of the Inscription |
**bInscriptionReference** | **bool** | Whether if it&#39;s an reference |
**bInscriptionInspection** | **bool** | Whether the inscription can be acces by an inspector |
**bInscriptionIsactive** | **bool** | Whether the inscription is active or not |
**tInscriptionChecklistnote** | **string** | The checklist note of the Inscription |
**bInscriptionNew** | **bool** | Whether if it&#39;s an new |
**bInscriptionHomeowner** | **bool** | Whether if it&#39;s an homeowner |
**bInscriptionArchived** | **bool** | Whether the inscription is archived or not |
**bInscriptionLitigation** | **bool** | Whether if it&#39;s an litigation |
**bInscriptionRepossession** | **bool** | Whether if it&#39;s an repossession |
**bInscriptionIssolicitation** | **bool** | Whether if it&#39;s a solicitation |
**bInscriptionSalebyowner** | **bool** | Whether if it&#39;s a sale by the owner |
**bInscriptionSoldwithoutlegalwarranty** | **bool** | Whether if it&#39;s sold without the legal warranty |
**iInscriptionConstructionyear** | **int** | The construction year of the Inscription |
**iInscriptionUnit** | **int** | The number of unit for the Inscription |
**objAudit** | [**\eZmaxAPI\Model\CommonAudit**](CommonAudit.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
