# # CommonResponseObjDebug

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**sMemoryUsage** | **string** | The peak memory allocated during the API request execution. Formatted as a human readable string |
**sRunTime** | **string** | The total server execution time of the API request execution. Formatted as a human readable string |
**iSQLSelects** | **int** | The number of SQL SELECT queries that were sent to the database server during the API request execution |
**iSQLQueries** | **int** | The number of SQL INSERT/UPDATE/DELETE queries that were sent to the database server during the API request execution |
**aObjSQLQuery** | [**\eZmaxAPI\Model\CommonResponseObjSQLQuery[]**](CommonResponseObjSQLQuery.md) | An array of the SQL Queries that were executed during the API request execution |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
