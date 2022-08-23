# # EzsignfoldertypeRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**pkiEzsignfoldertypeID** | **int** | The unique ID of the Ezsignfoldertype. | [optional]
**objEzsignfoldertypeName** | [**\eZmaxAPI\Model\MultilingualEzsignfoldertypeName**](MultilingualEzsignfoldertypeName.md) |  |
**fkiBrandingID** | **int** | The unique ID of the Branding |
**fkiBillingentityinternalID** | **int** | The unique ID of the Billingentityinternal. | [optional]
**fkiUsergroupID** | **int** | The unique ID of the Usergroup | [optional]
**fkiUsergroupIDRestricted** | **int** | The unique ID of the Usergroup | [optional]
**fkiEzsigntsarequirementID** | **int** | The unique ID of the Ezsigntsarequirement.  Determine if a Time Stamping Authority should add a timestamp on each of the signature. Valid values:  |Value|Description| |-|-| |1|No. TSA Timestamping will requested. This will make all signatures a lot faster since no round-trip to the TSA server will be required. Timestamping will be made using eZsign server&#39;s time.| |2|Best effort. Timestamping from a Time Stamping Authority will be requested but is not mandatory. In the very improbable case it cannot be completed, the timestamping will be made using eZsign server&#39;s time. **Additional fee applies**| |3|Mandatory. Timestamping from a Time Stamping Authority will be requested and is mandatory. In the very improbable case it cannot be completed, the signature will fail and the user will be asked to retry. **Additional fee applies**| | [optional]
**sEmailAddressSigned** | **string** | The email address. | [optional]
**sEmailAddressSummary** | **string** | The email address. | [optional]
**eEzsignfoldertypePrivacylevel** | [**\eZmaxAPI\Model\FieldEEzsignfoldertypePrivacylevel**](FieldEEzsignfoldertypePrivacylevel.md) |  |
**eEzsignfoldertypeSendreminderfrequency** | [**\eZmaxAPI\Model\FieldEEzsignfoldertypeSendreminderfrequency**](FieldEEzsignfoldertypeSendreminderfrequency.md) |  | [optional]
**iEzsignfoldertypeArchivaldays** | **int** | The number of days before the archival of Ezsignfolders created using this Ezsignfoldertype |
**eEzsignfoldertypeDisposal** | [**\eZmaxAPI\Model\FieldEEzsignfoldertypeDisposal**](FieldEEzsignfoldertypeDisposal.md) |  |
**iEzsignfoldertypeDisposaldays** | **int** | The number of days after the archival before the disposal of the Ezsignfolder | [optional]
**iEzsignfoldertypeDeadlinedays** | **int** | The number of days to get all Ezsignsignatures |
**bEzsignfoldertypeSendattatchmentsigner** | **bool** | Whether we send the Ezsigndocument and the proof as attachment in the email |
**bEzsignfoldertypeSendsignedtodocumentowner** | **bool** | Whether we send the signed Ezsigndocument to the Ezsigndocument&#39;s owner |
**bEzsignfoldertypeSendsignedtofolderowner** | **bool** | Whether we send the signed Ezsigndocument to the Ezsignfolder&#39;s owner |
**bEzsignfoldertypeSendsignedtofullgroup** | **bool** | Whether we send the signed Ezsigndocument to the Usergroup that has acces to all Ezsignfolders | [optional]
**bEzsignfoldertypeSendsignedtolimitedgroup** | **bool** | Whether we send the signed Ezsigndocument to the Usergroup that has acces to only their own Ezsignfolders | [optional]
**bEzsignfoldertypeSendsignedtocolleague** | **bool** | Whether we send the signed Ezsigndocument to the colleagues |
**bEzsignfoldertypeSendsummarytodocumentowner** | **bool** | Whether we send the summary to the Ezsigndocument&#39;s owner |
**bEzsignfoldertypeSendsummarytofolderowner** | **bool** | Whether we send the summary to the Ezsignfolder&#39;s owner |
**bEzsignfoldertypeSendsummarytofullgroup** | **bool** | Whether we send the summary to the Usergroup that has acces to all Ezsignfolders | [optional]
**bEzsignfoldertypeSendsummarytolimitedgroup** | **bool** | Whether we send the summary to the Usergroup that has acces to only their own Ezsignfolders | [optional]
**bEzsignfoldertypeSendsummarytocolleague** | **bool** | Whether we send the summary to the colleagues |
**bEzsignfoldertypeIsactive** | **bool** | Whether the Ezsignfoldertype is active or not |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
