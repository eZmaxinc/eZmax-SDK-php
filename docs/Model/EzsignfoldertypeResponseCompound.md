# # EzsignfoldertypeResponseCompound

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**pkiEzsignfoldertypeID** | **int** | The unique ID of the Ezsignfoldertype. |
**objEzsignfoldertypeName** | [**\eZmaxAPI\Model\MultilingualEzsignfoldertypeName**](MultilingualEzsignfoldertypeName.md) |  |
**fkiBrandingID** | **int** | The unique ID of the Branding |
**fkiBillingentityinternalID** | **int** | The unique ID of the Billingentityinternal. | [optional]
**fkiUsergroupID** | **int** | The unique ID of the Usergroup | [optional]
**fkiUsergroupIDRestricted** | **int** | The unique ID of the Usergroup | [optional]
**fkiEzsigntsarequirementID** | **int** | The unique ID of the Ezsigntsarequirement.  Determine if a Time Stamping Authority should add a timestamp on each of the signature. Valid values:  |Value|Description| |-|-| |1|No. TSA Timestamping will requested. This will make all signatures a lot faster since no round-trip to the TSA server will be required. Timestamping will be made using eZsign server&#39;s time.| |2|Best effort. Timestamping from a Time Stamping Authority will be requested but is not mandatory. In the very improbable case it cannot be completed, the timestamping will be made using eZsign server&#39;s time. **Additional fee applies**| |3|Mandatory. Timestamping from a Time Stamping Authority will be requested and is mandatory. In the very improbable case it cannot be completed, the signature will fail and the user will be asked to retry. **Additional fee applies**| | [optional]
**sBrandingDescriptionX** | **string** | The Description of the Branding in the language of the requester |
**sBillingentityinternalDescriptionX** | **string** | The description of the Billingentityinternal in the language of the requester | [optional]
**sEzsigntsarequirementDescriptionX** | **string** | The description of the Ezsigntsarequirement in the language of the requester | [optional]
**sEmailAddressSigned** | **string** | The email address. | [optional]
**sEmailAddressSummary** | **string** | The email address. | [optional]
**sUsergroupNameX** | **string** | The Name of the Usergroup in the language of the requester | [optional]
**sUsergroupNameXRestricted** | **string** | The Name of the Usergroup in the language of the requester | [optional]
**eEzsignfoldertypePrivacylevel** | [**\eZmaxAPI\Model\FieldEEzsignfoldertypePrivacylevel**](FieldEEzsignfoldertypePrivacylevel.md) |  |
**eEzsignfoldertypeSendreminderfrequency** | [**\eZmaxAPI\Model\FieldEEzsignfoldertypeSendreminderfrequency**](FieldEEzsignfoldertypeSendreminderfrequency.md) |  | [optional]
**iEzsignfoldertypeArchivaldays** | **int** | The number of days before the archival of Ezsignfolders created using this Ezsignfoldertype |
**eEzsignfoldertypeDisposal** | [**\eZmaxAPI\Model\FieldEEzsignfoldertypeDisposal**](FieldEEzsignfoldertypeDisposal.md) |  |
**eEzsignfoldertypeCompletion** | [**\eZmaxAPI\Model\FieldEEzsignfoldertypeCompletion**](FieldEEzsignfoldertypeCompletion.md) |  | [optional]
**iEzsignfoldertypeDisposaldays** | **int** | The number of days after the archival before the disposal of the Ezsignfolder | [optional]
**iEzsignfoldertypeDeadlinedays** | **int** | The number of days to get all Ezsignsignatures |
**bEzsignfoldertypeDelegate** | **bool** | Wheter if delegation of signature is allowed to another user or not | [optional]
**bEzsignfoldertypeReassign** | **bool** | Wheter if Reassignment of signature is allowed to another signatory or not | [optional]
**bEzsignfoldertypeReassignezsignsigner** | **bool** | Wheter if Reassignment of signature is allowed by a signatory to another signatory or not | [optional]
**bEzsignfoldertypeReassignuser** | **bool** | Wheter if Reassignment of signature is allowed by a user to a signatory or another user or not | [optional]
**bEzsignfoldertypeSendattatchmentsigner** | **bool** | THIS FIELD WILL BE DELETED. Whether we send the Ezsigndocument and the proof as attachment in the email | [optional]
**bEzsignfoldertypeSendsignedtoezsignsigner** | **bool** | Whether we send an email to Ezsignsigner  when document is completed | [optional]
**bEzsignfoldertypeSendsignedtouser** | **bool** | Whether we send an email to User who signed when document is completed | [optional]
**bEzsignfoldertypeSendattachmentezsignsigner** | **bool** | Whether we send the Ezsigndocument in the email to Ezsignsigner | [optional]
**bEzsignfoldertypeSendproofezsignsigner** | **bool** | Whether we send the proof in the email to Ezsignsigner | [optional]
**bEzsignfoldertypeSendattachmentuser** | **bool** | Whether we send the Ezsigndocument in the email to User | [optional]
**bEzsignfoldertypeSendproofuser** | **bool** | Whether we send the proof in the email to User | [optional]
**bEzsignfoldertypeSendproofemail** | **bool** | Whether we send the proof in the email to external recipient | [optional]
**bEzsignfoldertypeAllowdownloadattachmentezsignsigner** | **bool** | Whether we allow the Ezsigndocument to be downloaded by an Ezsignsigner | [optional]
**bEzsignfoldertypeAllowdownloadproofezsignsigner** | **bool** | Whether we allow the proof to be downloaded by an Ezsignsigner | [optional]
**bEzsignfoldertypeSendproofreceivealldocument** | **bool** | Whether we send the proof to user and Ezsignsigner who receive all documents. | [optional]
**bEzsignfoldertypeSendsignedtodocumentowner** | **bool** | Whether we send the signed Ezsigndocument to the Ezsigndocument&#39;s owner |
**bEzsignfoldertypeSendsignedtofolderowner** | **bool** | Whether we send the signed Ezsigndocument to the Ezsignfolder&#39;s owner |
**bEzsignfoldertypeSendsignedtofullgroup** | **bool** | Whether we send the signed Ezsigndocument to the Usergroup that has acces to all Ezsignfolders | [optional]
**bEzsignfoldertypeSendsignedtolimitedgroup** | **bool** | THIS FIELD WILL BE DELETED. Whether we send the signed Ezsigndocument to the Usergroup that has acces to only their own Ezsignfolders | [optional]
**bEzsignfoldertypeSendsignedtocolleague** | **bool** | Whether we send the signed Ezsigndocument to the colleagues |
**bEzsignfoldertypeSendsummarytodocumentowner** | **bool** | Whether we send the summary to the Ezsigndocument&#39;s owner |
**bEzsignfoldertypeSendsummarytofolderowner** | **bool** | Whether we send the summary to the Ezsignfolder&#39;s owner |
**bEzsignfoldertypeSendsummarytofullgroup** | **bool** | Whether we send the summary to the Usergroup that has acces to all Ezsignfolders | [optional]
**bEzsignfoldertypeSendsummarytolimitedgroup** | **bool** | Whether we send the summary to the Usergroup that has acces to only their own Ezsignfolders | [optional]
**bEzsignfoldertypeSendsummarytocolleague** | **bool** | Whether we send the summary to the colleagues |
**bEzsignfoldertypeIncludeproofsigner** | **bool** | THIS FIELD WILL BE DELETED. Whether we include the proof with the signed Ezsigndocument for Ezsignsigners | [optional]
**bEzsignfoldertypeIncludeproofuser** | **bool** | Whether we include the proof with the signed Ezsigndocument for users |
**bEzsignfoldertypeIsactive** | **bool** | Whether the Ezsignfoldertype is active or not |
**aFkiUserIDSigned** | **int[]** |  | [optional]
**aFkiUserIDSummary** | **int[]** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
