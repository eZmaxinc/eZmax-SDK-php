# InvoiceListElement

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**pkiInvoiceID** | **int** | The unique ID of the Invoice. |
**fkiAgentID** | **int** | The unique ID of the Agent. | [optional]
**fkiBrokerID** | **int** | The unique ID of the Broker. | [optional]
**fkiCustomerID** | **int** | The unique ID of the Customer. | [optional]
**fkiPeriodID** | **int** | The unique ID of the Period |
**sPeriodYYYYMM** | **string** | The YYYYMM of the Period | [optional]
**bInvoiceIspaid** | **bool** | Whether if it&#39;s an ispaid |
**dInvoiceTotal** | **string** | The total of the Invoice |
**dInvoicePaid** | **string** | The paid of the Invoice |
**dInvoiceBalance** | **string** | The balance of the Invoice | [optional]
**dtInvoiceDate** | **string** | The date of the Invoice |
**eInvoiceType** | [**\eZmaxAPI\Model\FieldEInvoiceType**](FieldEInvoiceType.md) |  |
**sInvoiceNumber** | **string** | The number of Invoice | [optional]
**sInvoiceRecipient** | **string** | The recipient of Invoice | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
