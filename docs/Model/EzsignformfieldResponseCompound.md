# # EzsignformfieldResponseCompound

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**pkiEzsignformfieldID** | **int** | The unique ID of the Ezsignformfield |
**iEzsignpagePagenumber** | **int** | The page number in the Ezsigndocument |
**sEzsignformfieldLabel** | **string** | The Label for the Ezsignformfield |
**sEzsignformfieldValue** | **string** | The value for the Ezsignformfield  This can only be set if eEzsignformfieldgroupType is Checkbox or Radio | [optional]
**iEzsignformfieldX** | **int** | The X coordinate (Horizontal) where to put the Ezsignformfield on the Ezsignpage.  Coordinate is calculated at 100dpi (dot per inch). So for example, if you want to put the Ezsignformfield 2 inches from the left border of the page, you would use \&quot;200\&quot; for the X coordinate. |
**iEzsignformfieldY** | **int** | The Y coordinate (Vertical) where to put the Ezsignformfield on the Ezsignpage.  Coordinate is calculated at 100dpi (dot per inch). So for example, if you want to put the Ezsignformfield 3 inches from the top border of the page, you would use \&quot;300\&quot; for the Y coordinate. |
**iEzsignformfieldWidth** | **int** | The Width of the Ezsignformfield in pixels calculated at 100 DPI |
**iEzsignformfieldHeight** | **int** | The Height of the Ezsignformfield in pixels calculated at 100 DPI |
**bEzsignformfieldAutocomplete** | **bool** | Whether the Ezsignformfield allows the use of the autocomplete of the browser.  This can only be set if eEzsignformfieldgroupType is **Text** | [optional]
**bEzsignformfieldSelected** | **bool** | Whether the Ezsignformfield is selected or not by default.  This can only be set if eEzsignformfieldgroupType is **Checkbox** or **Radio** | [optional]
**sEzsignformfieldEnteredvalue** | **string** | This is the value enterred for the Ezsignformfield  This can only be set if eEzsignformfieldgroupType is **Dropdown**, **Text** or **Textarea** | [optional]
**eEzsignformfieldDependencyrequirement** | [**\eZmaxAPI\Model\FieldEEzsignformfieldDependencyrequirement**](FieldEEzsignformfieldDependencyrequirement.md) |  | [optional]
**eEzsignformfieldHorizontalalignment** | [**\eZmaxAPI\Model\EnumHorizontalalignment**](EnumHorizontalalignment.md) |  | [optional]
**objTextstylestatic** | [**\eZmaxAPI\Model\TextstylestaticResponseCompound**](TextstylestaticResponseCompound.md) |  | [optional]
**aObjEzsignelementdependency** | [**\eZmaxAPI\Model\EzsignelementdependencyResponseCompound[]**](EzsignelementdependencyResponseCompound.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
