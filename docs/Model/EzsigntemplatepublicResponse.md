# # EzsigntemplatepublicResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**pkiEzsigntemplatepublicID** | **int** | The unique ID of the Ezsigntemplatepublic |
**fkiEzsignfoldertypeID** | **int** | The unique ID of the Ezsignfoldertype. |
**sEzsignfoldertypeNameX** | **string** | The name of the Ezsignfoldertype in the language of the requester |
**fkiUserlogintypeID** | **int** | The unique ID of the Userlogintype  Valid values:  |Value|Description|Detail| |-|-|-| |1|**Email Only**|The Ezsignsigner will receive a secure link by email| |2|**Email and phone or SMS**|The Ezsignsigner will receive a secure link by email and will need to authenticate using SMS or Phone call. **Additional fee applies**| |3|**Email and secret question**|The Ezsignsigner will receive a secure link by email and will need to authenticate using a predefined question and answer| |4|**In person only**|The Ezsignsigner will only be able to sign \&quot;In-Person\&quot; and there won&#39;t be any authentication. No email will be sent for invitation to sign. Make sure you evaluate the risk of signature denial and at minimum, we recommend you use a handwritten signature type| |5|**In person with phone or SMS**|The Ezsignsigner will only be able to sign \&quot;In-Person\&quot; and will need to authenticate using SMS or Phone call. No email will be sent for invitation to sign. **Additional fee applies**| |6|**Embedded**|The Ezsignsigner will only be able to sign in the embedded solution. No email will be sent for invitation to sign. **Additional fee applies**|   |7|**Embedded with phone or SMS**|The Ezsignsigner will only be able to sign in the embedded solution and will need to authenticate using SMS or Phone call. No email will be sent for invitation to sign. **Additional fee applies**|   |8|**No validation**|The Ezsignsigner will not receive an email and won&#39;t have to validate his connection using 2 factor. **Additional fee applies**|      |9|**Sms only**|The Ezsignsigner will not receive an email but will will need to authenticate using SMS. **Additional fee applies**| |
**sUserlogintypeDescriptionX** | **string** | The description of the Userlogintype in the language of the requester |
**fkiEzsigntemplateID** | **int** | The unique ID of the Ezsigntemplate | [optional]
**fkiEzsigntemplatepackageID** | **int** | The unique ID of the Ezsigntemplatepackage | [optional]
**sEzsigntemplatepublicDescription** | **string** | The description of the Ezsigntemplatepublic |
**sEzsigntemplatepublicReferenceid** | **string** | The referenceid of the Ezsigntemplatepublic |
**bEzsigntemplatepublicIsactive** | **bool** | Whether the ezsigntemplatepublic is active or not |
**tEzsigntemplatepublicNote** | **string** | The note of the Ezsigntemplatepublic |
**eEzsigntemplatepublicLimittype** | [**\eZmaxAPI\Model\FieldEEzsigntemplatepublicLimittype**](FieldEEzsigntemplatepublicLimittype.md) |  |
**iEzsigntemplatepublicLimit** | **int** | The limit of the Ezsigntemplatepublic |
**iEzsigntemplatepublicLimitexceeded** | **int** | The limitexceeded of the Ezsigntemplatepublic |
**dtEzsigntemplatepublicLimitexceededsince** | **string** | The limitexceededsince of the Ezsigntemplatepublic |
**sEzsigntemplatepublicUrl** | **string** | The url of the Ezsigntemplatepublic  You can add these value as query parameters to prefill the corresponding role  |Parameter|Description| |-|-| |sEzsigntemplatesignerDescription|The role to fill| |sContactFirstname|The contact firstname| |sContactLastname|The contact lastname| |sEmailAddress|The contact email| |sPhoneE164|The contact phone number| |sPhoneE164Cell|The contact cell phone number| |
**sEzsigntemplatepublicEzsigntemplatedescription** | **string** | The Ezsigntemplate/Ezsigntemplatepackage description |
**objAudit** | [**\eZmaxAPI\Model\CommonAudit**](CommonAudit.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
