# # EzsignsignerRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**fkiTaxassignmentID** | **int** | The ID of the tax assignment, Valid values are: 1. No tax 2. GST 3. HST (ON) 4. HST (NB) 5. HST (NS) 6. HST (NL) 7. HST (PE) 8. GST + QST (QC) 9. GST + QST (QC) Non-Recoverable 10. GST + PST (BC) 11. GST + PST (SK) 12. GST + RST (MB) 13. GST + PST (BC) Non-Recoverable 14. GST + PST (SK) Non-Recoverable 15. GST + RST (MB) Non-Recoverable | 
**eEzsignsignerLogintype** | **string** | The method the Ezsignsigner will authenticate to the signing platform.  1. **Password** means the Ezsignsigner will receive a secure link by email. 2. **PasswordPhone** means the Ezsignsigner will receive a secure link by email and will need to authenticate using SMS or Phone call. 3. **PasswordQuestion** means the Ezsignsigner will receive a secure link by email and will need to authenticate using a predefined question and answer. 4. **Phone** means the Ezsignsigner will only be able to sign \&quot;In-Person\&quot; and will need to authenticate using SMS or Phone call. No email will be sent for invitation to sign. | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


