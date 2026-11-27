# AdjustmentreminderListElement

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**pkiAdjustmentreminderID** | **int** | The unique ID of the Adjustmentreminder |
**fkiAdjustmentID** | **int** | The unique ID of the Adjustment |
**fkiPeriodID** | **int** | The unique ID of the Period |
**sPeriodYYYYMM** | **string** | The YYYYMM of the Period | [optional]
**fkiUserIDCreated** | **int** | The unique ID of the User | [optional]
**sUserLoginname** | **string** | The login name of the User. | [optional]
**eAdjustmentreminderType** | [**\eZmaxAPI\Model\FieldEAdjustmentreminderType**](FieldEAdjustmentreminderType.md) |  |
**sAdjustmentNumber** | **string** | The number of the Adjustment | [optional]
**sAdjustmentComment** | **string** | The comment of the Adjustment | [optional]
**dAdjustmentTotaldebit** | **string** | The total debit of Adjustment | [optional]
**dAdjustmentTotalcredit** | **string** | The total credit of Adjustment | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
