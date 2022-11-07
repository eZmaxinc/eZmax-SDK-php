# # EzsignfolderGetObjectV1ResponseMPayload

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**pkiEzsignfolderID** | **int** | The unique ID of the Ezsignfolder |
**fkiEzsignfoldertypeID** | **int** | The unique ID of the Ezsignfoldertype. |
**sEzsignfoldertypeNameX** | **string** | The name of the Ezsignfoldertype in the language of the requester |
**fkiBillingentityinternalID** | **int** | The unique ID of the Billingentityinternal. |
**sBillingentityinternalDescriptionX** | **string** | The description of the Billingentityinternal in the language of the requester |
**fkiEzsigntsarequirementID** | **int** | The unique ID of the Ezsigntsarequirement.  Determine if a Time Stamping Authority should add a timestamp on each of the signature. Valid values:  |Value|Description| |-|-| |1|No. TSA Timestamping will requested. This will make all signatures a lot faster since no round-trip to the TSA server will be required. Timestamping will be made using eZsign server&#39;s time.| |2|Best effort. Timestamping from a Time Stamping Authority will be requested but is not mandatory. In the very improbable case it cannot be completed, the timestamping will be made using eZsign server&#39;s time. **Additional fee applies**| |3|Mandatory. Timestamping from a Time Stamping Authority will be requested and is mandatory. In the very improbable case it cannot be completed, the signature will fail and the user will be asked to retry. **Additional fee applies**| |
**sEzsigntsarequirementDescriptionX** | **string** | The description of the Ezsigntsarequirement in the language of the requester |
**sEzsignfolderDescription** | **string** | The description of the Ezsignfolder |
**tEzsignfolderNote** | **string** | Note about the Ezsignfolder |
**bEzsignfolderIsdisposable** | **bool** | If the Ezsigndocument can be disposed |
**eEzsignfolderSendreminderfrequency** | [**\eZmaxAPI\Model\FieldEEzsignfolderSendreminderfrequency**](FieldEEzsignfolderSendreminderfrequency.md) |  |
**dtEzsignfolderDelayedsenddate** | **string** | The date and time at which the Ezsignfolder will be sent in the future. | [optional]
**dtEzsignfolderDuedate** | **string** | The maximum date and time at which the Ezsignfolder can be signed. | [optional]
**dtEzsignfolderSentdate** | **string** | The date and time at which the Ezsignfolder was sent the last time. | [optional]
**dtEzsignfolderScheduledarchive** | **string** | The scheduled date and time at which the Ezsignfolder should be archived. | [optional]
**dtEzsignfolderScheduleddispose** | **string** | The scheduled date at which the Ezsignfolder should be Disposed. | [optional]
**eEzsignfolderStep** | [**\eZmaxAPI\Model\FieldEEzsignfolderStep**](FieldEEzsignfolderStep.md) |  |
**dtEzsignfolderClose** | **string** | The date and time at which the Ezsignfolder was closed. Either by applying the last signature or by completing it prematurely. | [optional]
**tEzsignfolderMessage** | **string** | A custom text message that will be added to the email sent. |
**objAudit** | [**\eZmaxAPI\Model\CommonAudit**](CommonAudit.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
