# # EzsigntemplateformfieldRequestCompound

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**pkiEzsigntemplateformfieldID** | **int** | The unique ID of the Ezsigntemplateformfield | [optional]
**eEzsigntemplateformfieldPositioning** | [**\eZmaxAPI\Model\FieldEEzsigntemplateformfieldPositioning**](FieldEEzsigntemplateformfieldPositioning.md) |  | [optional]
**iEzsigntemplatedocumentpagePagenumber** | **int** | The page number in the Ezsigntemplatedocument |
**sEzsigntemplateformfieldLabel** | **string** | The Label for the Ezsigntemplateformfield |
**sEzsigntemplateformfieldValue** | **string** | The value for the Ezsigntemplateformfield | [optional]
**iEzsigntemplateformfieldX** | **int** | The X coordinate (Horizontal) where to put the Ezsigntemplateformfield on the Ezsigntemplatepage.  Coordinate is calculated at 100dpi (dot per inch). So for example, if you want to put the Ezsigntemplateformfield 2 inches from the left border of the page, you would use \&quot;200\&quot; for the X coordinate. | [optional]
**iEzsigntemplateformfieldY** | **int** | The Y coordinate (Vertical) where to put the Ezsigntemplateformfield on the Ezsigntemplatepage.  Coordinate is calculated at 100dpi (dot per inch). So for example, if you want to put the Ezsigntemplateformfield 3 inches from the top border of the page, you would use \&quot;300\&quot; for the Y coordinate. | [optional]
**iEzsigntemplateformfieldWidth** | **int** | The Width of the Ezsigntemplateformfield in pixels calculated at 100 DPI  The allowed values are varying based on the eEzsigntemplateformfieldgroupType.  | eEzsigntemplateformfieldgroupType | Valid values | | ------------------------- | ------------ | | Checkbox                  | 22           | | Dropdown                  | 22-65535     | | Radio                     | 22           | | Text                      | 22-65535     | | Textarea                  | 22-65535     | |
**iEzsigntemplateformfieldHeight** | **int** | The Height of the Ezsigntemplateformfield in pixels calculated at 100 DPI  The allowed values are varying based on the eEzsigntemplateformfieldgroupType.  | eEzsigntemplateformfieldgroupType | Valid values | | ------------------------- | ------------ | | Checkbox                  | 22           | | Dropdown                  | 22           | | Radio                     | 22           | | Text                      | 22           | | Textarea                  | 22-65535     | |
**bEzsigntemplateformfieldAutocomplete** | **bool** | Whether the Ezsigntemplateformfield allows the use of the autocomplete of the browser.  This can only be set if eEzsigntemplateformfieldgroupType is **Text** | [optional]
**bEzsigntemplateformfieldSelected** | **bool** | Whether the Ezsigntemplateformfield is selected or not by default.  This can only be set if eEzsigntemplateformfieldgroupType is **Checkbox** or **Radio** | [optional]
**eEzsigntemplateformfieldDependencyrequirement** | [**\eZmaxAPI\Model\FieldEEzsigntemplateformfieldDependencyrequirement**](FieldEEzsigntemplateformfieldDependencyrequirement.md) |  | [optional]
**sEzsigntemplateformfieldPositioningpattern** | **string** | The string pattern to search for the positioning. **This is not a regexp**  This will be required if **eEzsigntemplateformfieldPositioning** is set to **PerCoordinates** | [optional]
**iEzsigntemplateformfieldPositioningoffsetx** | **int** | The offset X  This will be required if **eEzsigntemplateformfieldPositioning** is set to **PerCoordinates** | [optional]
**iEzsigntemplateformfieldPositioningoffsety** | **int** | The offset Y  This will be required if **eEzsigntemplateformfieldPositioning** is set to **PerCoordinates** | [optional]
**eEzsigntemplateformfieldPositioningoccurence** | [**\eZmaxAPI\Model\FieldEEzsigntemplateformfieldPositioningoccurence**](FieldEEzsigntemplateformfieldPositioningoccurence.md) |  | [optional]
**aObjEzsigntemplateelementdependency** | [**\eZmaxAPI\Model\EzsigntemplateelementdependencyRequestCompound[]**](EzsigntemplateelementdependencyRequestCompound.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
