# # VersionhistoryResponseCompound

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**pkiVersionhistoryID** | **int** | The unique ID of the Versionhistory |
**fkiModuleID** | **int** | The unique ID of the Module | [optional]
**fkiModulesectionID** | **int** | The unique ID of the Modulesection | [optional]
**sModuleNameX** | **string** | The Name of the Module in the language of the requester | [optional]
**sModulesectionNameX** | **string** | The Name of the Modulesection in the language of the requester | [optional]
**eVersionhistoryUsertype** | [**\eZmaxAPI\Model\FieldEVersionhistoryUsertype**](FieldEVersionhistoryUsertype.md) |  | [optional]
**objVersionhistoryDetail** | [**\eZmaxAPI\Model\MultilingualVersionhistoryDetail**](MultilingualVersionhistoryDetail.md) |  |
**dtVersionhistoryDate** | **string** | The date  at which the Versionhistory was published or should be published |
**dtVersionhistoryDateend** | **string** | The date  at which the Versionhistory will no longer be visible | [optional]
**eVersionhistoryType** | [**\eZmaxAPI\Model\FieldEVersionhistoryType**](FieldEVersionhistoryType.md) |  |
**bVersionhistoryDraft** | **bool** | Whether the Versionhistory is published or still a draft |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
