# # EzsignfolderResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**pkiEzsignfolderID** | **int** | The unique ID of the Ezsignfolder |
**fkiEzsignfoldertypeID** | **int** | The unique ID of the Ezsignfoldertype. | [optional]
**objEzsignfoldertype** | **object** | A Custom Ezsignfoldertype Object | [optional]
**fkiTimezoneID** | **int** | The unique ID of the Timezone | [optional]
**eEzsignfolderCompletion** | [**\eZmaxAPI\Model\FieldEEzsignfolderCompletion**](FieldEEzsignfolderCompletion.md) |  |
**sEzsignfoldertypeNameX** | **string** |  | [optional]
**fkiBillingentityinternalID** | **int** | The unique ID of the Billingentityinternal. | [optional]
**sBillingentityinternalDescriptionX** | **string** | The description of the Billingentityinternal in the language of the requester | [optional]
**fkiEzsigntsarequirementID** | **int** | The unique ID of the Ezsigntsarequirement.  Determine if a Time Stamping Authority should add a timestamp on each of the signature. Valid values:  |Value|Description| |-|-| |1|No. TSA Timestamping will requested. This will make all signatures a lot faster since no round-trip to the TSA server will be required. Timestamping will be made using eZsign server&#39;s time.| |2|Best effort. Timestamping from a Time Stamping Authority will be requested but is not mandatory. In the very improbable case it cannot be completed, the timestamping will be made using eZsign server&#39;s time. **Additional fee applies**| |3|Mandatory. Timestamping from a Time Stamping Authority will be requested and is mandatory. In the very improbable case it cannot be completed, the signature will fail and the user will be asked to retry. **Additional fee applies**| | [optional]
**sEzsigntsarequirementDescriptionX** | **string** | The description of the Ezsigntsarequirement in the language of the requester | [optional]
**sEzsignfolderDescription** | **string** | The description of the Ezsignfolder |
**tEzsignfolderNote** | **string** | Note about the Ezsignfolder | [optional]
**bEzsignfolderIsdisposable** | **bool** | If the Ezsigndocument can be disposed | [optional]
**eEzsignfolderSendreminderfrequency** | [**\eZmaxAPI\Model\FieldEEzsignfolderSendreminderfrequency**](FieldEEzsignfolderSendreminderfrequency.md) |  | [optional]
**iEzsignfolderSendreminderfirstdays** | **int** | The number of days before the the first reminder sending | [optional]
**iEzsignfolderSendreminderotherdays** | **int** | The number of days after the first reminder sending | [optional]
**dtEzsignfolderDelayedsenddate** | **string** | The date and time at which the Ezsignfolder will be sent in the future. | [optional]
**dtEzsignfolderDuedate** | **string** | The maximum date and time at which the Ezsignfolder can be signed. | [optional]
**dtEzsignfolderSentdate** | **string** | The date and time at which the Ezsignfolder was sent the last time. | [optional]
**dtEzsignfolderScheduledarchive** | **string** | The scheduled date and time at which the Ezsignfolder should be archived. | [optional]
**dtEzsignfolderScheduleddispose** | **string** | The scheduled date at which the Ezsignfolder should be Disposed. | [optional]
**eEzsignfolderStep** | [**\eZmaxAPI\Model\FieldEEzsignfolderStep**](FieldEEzsignfolderStep.md) |  | [optional]
**dtEzsignfolderClose** | **string** | The date and time at which the Ezsignfolder was closed. Either by applying the last signature or by completing it prematurely. | [optional]
**tEzsignfolderMessage** | **string** | A custom text message that will be added to the email sent. | [optional]
**objAudit** | [**\eZmaxAPI\Model\CommonAudit**](CommonAudit.md) |  | [optional]
**sEzsignfolderExternalid** | **string** | This field can be used to store an External ID from the client&#39;s system.  Anything can be stored in this field, it will never be evaluated by the eZmax system and will be returned AS-IS.  To store multiple values, consider using a JSON formatted structure, a URL encoded string, a CSV or any other custom format. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
