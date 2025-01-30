# # CustomerRequestCompound

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**pkiCustomerID** | **int** | The unique ID of the Customer. | [optional]
**fkiCompanyID** | **int** | The unique ID of the Company |
**fkiCustomergroupID** | **int** | The unique ID of the Customergroup |
**sCustomerName** | **string** | The name of the Customer |
**fkiContactinformationsID** | **int** | The unique ID of the Contactinformations |
**fkiContactcontainerID** | **int** | The unique ID of the Contactcontainer |
**fkiImageID** | **int** | The unique ID of the Image |
**fkiGlaccountcontainerID** | **int** | The unique ID of the Glaccountcontainer |
**fkiLanguageID** | **int** | The unique ID of the Language.  Valid values:  |Value|Description| |-|-| |1|French| |2|English| |
**fkiDepartmentID** | **int** | The unique ID of the Department |
**fkiPaymentmethodID** | **int** | The unique ID of the Paymentmethod |
**fkiElectronicfundstransferbankaccountID** | **int** | The unique ID of the Electronicfundstransferbankaccount |
**fkiElectronicfundstransferbankaccountIDDirectdebit** | **int** | The unique ID of the Electronicfundstransferbankaccount |
**fkiSendingmethodID** | **int** | The unique ID of the Sendingmethod |
**fkiTaxassignmentID** | **int** | The unique ID of the Taxassignment.  Valid values:  |Value|Description| |-|-| |1|No tax| |2|GST| |3|HST (ON)| |4|HST (NB)| |5|HST (NS)| |6|HST (NL)| |7|HST (PE)| |8|GST + QST (QC)| |9|GST + QST (QC) Non-Recoverable| |10|GST + PST (BC)| |11|GST + PST (SK)| |12|GST + RST (MB)| |13|GST + PST (BC) Non-Recoverable| |14|GST + PST (SK) Non-Recoverable| |15|GST + RST (MB) Non-Recoverable| |
**fkiAttendancestatusID** | **int** | The unique ID of the Attendancestatus |
**fkiAgentIDVariableexpensechargeto** | **int** | The unique ID of the Agent. |
**fkiBrokerIDVariableexpensechargeto** | **int** | The unique ID of the Broker. |
**fkiCustomerIDVariableexpensechargeto** | **int** | The unique ID of the Customer. |
**fkiGlaccountcontainerIDVariableexpensechargeto** | **int** | The unique ID of the Glaccountcontainer |
**fkiAgentIDSupplychargechargeto** | **int** | The unique ID of the Agent. |
**fkiBrokerIDSupplychargechargeto** | **int** | The unique ID of the Broker. |
**fkiCustomerIDSupplychargechargeto** | **int** | The unique ID of the Customer. |
**fkiGlaccountcontainerIDSupplychargechargeto** | **int** | The unique ID of the Glaccountcontainer |
**fkiInvoicealternatelogoID** | **int** | The unique ID of the Invoicealternatelogo |
**fkiSynchronizationlinkserverID** | **int** | The unique ID of the Synchronizationlinkserver |
**efkiUserID** | **int** | The unique ID of the User | [optional]
**efksCustomerCode** | **string** | The code of the Customer | [optional]
**sCustomerCode** | **string** | The code of the Customer |
**dCustomerFulltimeequivalent** | **string** | The fulltimeequivalent of the Customer |
**iCustomerPhotocopiercode** | **int** | The photocopiercode of the Customer |
**iCustomerLongdistancecode** | **int** | The longdistancecode of the Customer |
**iCustomerTimewindowstart** | **int** | The timewindowstart of the Customer |
**iCustomerTimewindowend** | **int** | The timewindowend of the Customer |
**dCustomerMinimumchargeableinterests** | **string** | The minimumchargeableinterests of the Customer |
**dtCustomerBirthdate** | **string** | The birthdate of the Customer |
**dtCustomerTransfer** | **string** | The transfer of the Customer |
**dtCustomerTransferappointment** | **string** | The transferappointment of the Customer |
**dtCustomerTransfersurvey** | **string** | The transfersurvey of the Customer |
**bCustomerIsactive** | **bool** | Whether the customer is active or not |
**bCustomerVariableexpensefinanced** | **bool** | Whether if it&#39;s an variableexpensefinanced |
**bCustomerVariableexpensefinancedtaxes** | **bool** | Whether if it&#39;s an variableexpensefinancedtaxes |
**bCustomerSupplychargefinanced** | **bool** | Whether if it&#39;s an supplychargefinanced |
**bCustomerSupplychargefinancedtaxes** | **bool** | Whether if it&#39;s an supplychargefinancedtaxes |
**bCustomerAttendance** | **bool** | Whether if it&#39;s an attendance |
**eCustomerType** | [**\eZmaxAPI\Model\FieldECustomerType**](FieldECustomerType.md) |  |
**eCustomerMarketingcorrespondence** | [**\eZmaxAPI\Model\FieldECustomerMarketingcorrespondence**](FieldECustomerMarketingcorrespondence.md) |  |
**bCustomerBlackcopycarbon** | **bool** | Whether if it&#39;s an blackcopycarbon |
**bCustomerUnsubscribeinfo** | **bool** | Whether if it&#39;s an unsubscribeinfo |
**tCustomerComment** | **string** | The comment of the Customer |
**iMPORTID** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
