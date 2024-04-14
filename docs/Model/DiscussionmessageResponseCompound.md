# # DiscussionmessageResponseCompound

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**pkiDiscussionmessageID** | **int** | The unique ID of the Discussionmessage |
**fkiDiscussionID** | **int** | The unique ID of the Discussion |
**fkiDiscussionmembershipID** | **int** | The unique ID of the Discussionmembership | [optional]
**fkiDiscussionmembershipIDActionrequired** | **int** | The unique ID of the Discussionmembership | [optional]
**eDiscussionmessageStatus** | [**\eZmaxAPI\Model\FieldEDiscussionmessageStatus**](FieldEDiscussionmessageStatus.md) |  |
**tDiscussionmessageContent** | **string** | The content of the Discussionmessage |
**sDiscussionmessageCreatorname** | **string** | The name the creator of the Discussionmessage. |
**sDiscussionmessageActionrequiredname** | **string** | The name the Actionrequired of the Discussionmessage. | [optional]
**objAudit** | [**\eZmaxAPI\Model\CommonAudit**](CommonAudit.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
