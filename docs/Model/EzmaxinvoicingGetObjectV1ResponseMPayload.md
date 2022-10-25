# # EzmaxinvoicingGetObjectV1ResponseMPayload

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**pkiEzmaxinvoicingID** | **int** | The unique ID of the Ezmaxinvoicing | [optional]
**fkiEzmaxinvoicingcontractID** | **int** | The unique ID of the Ezmaxinvoicingcontract |
**fkiEzmaxpricingID** | **int** | The unique ID of the Ezmaxpricing |
**fkiSystemconfigurationtypeID** | **int** | The unique ID of the Systemconfigurationtype |
**sSystemconfigurationtypeDescriptionX** | **string** | The description of the Systemconfigurationtype in the language of the requester |
**yyyymmEzmaxinvoicing** | **string** | The YYYYMM period of the Ezmaxinvoicing |
**iEzmaxinvoicingDays** | **int** | The number of days invoiced |
**eEzmaxinvoicingPaymenttype** | [**\eZmaxAPI\Model\FieldEEzmaxinvoicingPaymenttype**](FieldEEzmaxinvoicingPaymenttype.md) |  |
**dEzmaxinvoicingRebatepaymenttype** | **string** | The percentage of rebate depending of the payment type |
**iEzmaxinvoicingContractlength** | **int** | The length of the contract in years |
**dEzmaxinvoicingRebatecontractlength** | **string** | The percentage of rebate depending of the contract length |
**bEzmaxinvoicingRebateEzsignallagents** | **bool** | Whether the rebate for eZsign is for all agents |
**objAudit** | [**\eZmaxAPI\Model\CommonAudit**](CommonAudit.md) |  | [optional]
**objEzmaxinvoicingcontract** | [**\eZmaxAPI\Model\EzmaxinvoicingcontractResponseCompound**](EzmaxinvoicingcontractResponseCompound.md) |  |
**objEzmaxpricing** | [**\eZmaxAPI\Model\CustomEzmaxpricingResponse**](CustomEzmaxpricingResponse.md) |  |
**aObjEzmaxinvoicingsummaryglobal** | [**\eZmaxAPI\Model\EzmaxinvoicingsummaryglobalResponseCompound[]**](EzmaxinvoicingsummaryglobalResponseCompound.md) |  |
**aObjEzmaxinvoicingsummaryexternal** | [**\eZmaxAPI\Model\EzmaxinvoicingsummaryexternalResponseCompound[]**](EzmaxinvoicingsummaryexternalResponseCompound.md) |  |
**aObjEzmaxinvoicingsummaryinternal** | [**\eZmaxAPI\Model\EzmaxinvoicingsummaryinternalResponseCompound[]**](EzmaxinvoicingsummaryinternalResponseCompound.md) |  |
**aObjEzmaxinvoicingagent** | [**\eZmaxAPI\Model\EzmaxinvoicingagentResponseCompound[]**](EzmaxinvoicingagentResponseCompound.md) |  |
**aObjEzmaxinvoicinguser** | [**\eZmaxAPI\Model\EzmaxinvoicinguserResponseCompound[]**](EzmaxinvoicinguserResponseCompound.md) |  |
**aObjEzmaxinvoicingezsignfolder** | [**\eZmaxAPI\Model\CustomEzmaxinvoicingEzsignfolderResponse[]**](CustomEzmaxinvoicingEzsignfolderResponse.md) |  |
**aObjEzmaxinvoicingezsigndocument** | [**\eZmaxAPI\Model\CustomEzmaxinvoicingEzsigndocumentResponse[]**](CustomEzmaxinvoicingEzsigndocumentResponse.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
