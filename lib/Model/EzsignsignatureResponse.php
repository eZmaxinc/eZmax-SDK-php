<?php
/**
 * EzsignsignatureResponse
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * eZmax API Definition (Full)
 *
 * This API expose all the functionnalities for the eZmax and eZsign applications.
 *
 * The version of the OpenAPI document: 1.1.17
 * Contact: support-api@ezmax.ca
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.2.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace eZmaxAPI\Model;

use \ArrayAccess;
use \eZmaxAPI\ObjectSerializer;

/**
 * EzsignsignatureResponse Class Doc Comment
 *
 * @category Class
 * @description An Ezsignsignature Object
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class EzsignsignatureResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ezsignsignature-Response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'pkiEzsignsignatureID' => 'int',
        'fkiEzsigndocumentID' => 'int',
        'fkiEzsignfoldersignerassociationID' => 'int',
        'iEzsignpagePagenumber' => 'int',
        'iEzsignsignatureX' => 'int',
        'iEzsignsignatureY' => 'int',
        'iEzsignsignatureStep' => 'int',
        'eEzsignsignatureType' => '\eZmaxAPI\Model\FieldEEzsignsignatureType',
        'tEzsignsignatureTooltip' => 'string',
        'eEzsignsignatureTooltipposition' => '\eZmaxAPI\Model\FieldEEzsignsignatureTooltipposition',
        'eEzsignsignatureFont' => '\eZmaxAPI\Model\FieldEEzsignsignatureFont',
        'iEzsignsignatureValidationstep' => 'int',
        'sEzsignsignatureAttachmentdescription' => 'string',
        'eEzsignsignatureAttachmentnamesource' => '\eZmaxAPI\Model\FieldEEzsignsignatureAttachmentnamesource',
        'bEzsignsignatureRequired' => 'bool',
        'fkiEzsignfoldersignerassociationIDValidation' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'pkiEzsignsignatureID' => null,
        'fkiEzsigndocumentID' => null,
        'fkiEzsignfoldersignerassociationID' => null,
        'iEzsignpagePagenumber' => null,
        'iEzsignsignatureX' => null,
        'iEzsignsignatureY' => null,
        'iEzsignsignatureStep' => null,
        'eEzsignsignatureType' => null,
        'tEzsignsignatureTooltip' => null,
        'eEzsignsignatureTooltipposition' => null,
        'eEzsignsignatureFont' => null,
        'iEzsignsignatureValidationstep' => null,
        'sEzsignsignatureAttachmentdescription' => null,
        'eEzsignsignatureAttachmentnamesource' => null,
        'bEzsignsignatureRequired' => null,
        'fkiEzsignfoldersignerassociationIDValidation' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'pkiEzsignsignatureID' => false,
		'fkiEzsigndocumentID' => false,
		'fkiEzsignfoldersignerassociationID' => false,
		'iEzsignpagePagenumber' => false,
		'iEzsignsignatureX' => false,
		'iEzsignsignatureY' => false,
		'iEzsignsignatureStep' => false,
		'eEzsignsignatureType' => false,
		'tEzsignsignatureTooltip' => false,
		'eEzsignsignatureTooltipposition' => false,
		'eEzsignsignatureFont' => false,
		'iEzsignsignatureValidationstep' => false,
		'sEzsignsignatureAttachmentdescription' => false,
		'eEzsignsignatureAttachmentnamesource' => false,
		'bEzsignsignatureRequired' => false,
		'fkiEzsignfoldersignerassociationIDValidation' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'pkiEzsignsignatureID' => 'pkiEzsignsignatureID',
        'fkiEzsigndocumentID' => 'fkiEzsigndocumentID',
        'fkiEzsignfoldersignerassociationID' => 'fkiEzsignfoldersignerassociationID',
        'iEzsignpagePagenumber' => 'iEzsignpagePagenumber',
        'iEzsignsignatureX' => 'iEzsignsignatureX',
        'iEzsignsignatureY' => 'iEzsignsignatureY',
        'iEzsignsignatureStep' => 'iEzsignsignatureStep',
        'eEzsignsignatureType' => 'eEzsignsignatureType',
        'tEzsignsignatureTooltip' => 'tEzsignsignatureTooltip',
        'eEzsignsignatureTooltipposition' => 'eEzsignsignatureTooltipposition',
        'eEzsignsignatureFont' => 'eEzsignsignatureFont',
        'iEzsignsignatureValidationstep' => 'iEzsignsignatureValidationstep',
        'sEzsignsignatureAttachmentdescription' => 'sEzsignsignatureAttachmentdescription',
        'eEzsignsignatureAttachmentnamesource' => 'eEzsignsignatureAttachmentnamesource',
        'bEzsignsignatureRequired' => 'bEzsignsignatureRequired',
        'fkiEzsignfoldersignerassociationIDValidation' => 'fkiEzsignfoldersignerassociationIDValidation'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pkiEzsignsignatureID' => 'setPkiEzsignsignatureID',
        'fkiEzsigndocumentID' => 'setFkiEzsigndocumentID',
        'fkiEzsignfoldersignerassociationID' => 'setFkiEzsignfoldersignerassociationID',
        'iEzsignpagePagenumber' => 'setIEzsignpagePagenumber',
        'iEzsignsignatureX' => 'setIEzsignsignatureX',
        'iEzsignsignatureY' => 'setIEzsignsignatureY',
        'iEzsignsignatureStep' => 'setIEzsignsignatureStep',
        'eEzsignsignatureType' => 'setEEzsignsignatureType',
        'tEzsignsignatureTooltip' => 'setTEzsignsignatureTooltip',
        'eEzsignsignatureTooltipposition' => 'setEEzsignsignatureTooltipposition',
        'eEzsignsignatureFont' => 'setEEzsignsignatureFont',
        'iEzsignsignatureValidationstep' => 'setIEzsignsignatureValidationstep',
        'sEzsignsignatureAttachmentdescription' => 'setSEzsignsignatureAttachmentdescription',
        'eEzsignsignatureAttachmentnamesource' => 'setEEzsignsignatureAttachmentnamesource',
        'bEzsignsignatureRequired' => 'setBEzsignsignatureRequired',
        'fkiEzsignfoldersignerassociationIDValidation' => 'setFkiEzsignfoldersignerassociationIDValidation'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pkiEzsignsignatureID' => 'getPkiEzsignsignatureID',
        'fkiEzsigndocumentID' => 'getFkiEzsigndocumentID',
        'fkiEzsignfoldersignerassociationID' => 'getFkiEzsignfoldersignerassociationID',
        'iEzsignpagePagenumber' => 'getIEzsignpagePagenumber',
        'iEzsignsignatureX' => 'getIEzsignsignatureX',
        'iEzsignsignatureY' => 'getIEzsignsignatureY',
        'iEzsignsignatureStep' => 'getIEzsignsignatureStep',
        'eEzsignsignatureType' => 'getEEzsignsignatureType',
        'tEzsignsignatureTooltip' => 'getTEzsignsignatureTooltip',
        'eEzsignsignatureTooltipposition' => 'getEEzsignsignatureTooltipposition',
        'eEzsignsignatureFont' => 'getEEzsignsignatureFont',
        'iEzsignsignatureValidationstep' => 'getIEzsignsignatureValidationstep',
        'sEzsignsignatureAttachmentdescription' => 'getSEzsignsignatureAttachmentdescription',
        'eEzsignsignatureAttachmentnamesource' => 'getEEzsignsignatureAttachmentnamesource',
        'bEzsignsignatureRequired' => 'getBEzsignsignatureRequired',
        'fkiEzsignfoldersignerassociationIDValidation' => 'getFkiEzsignfoldersignerassociationIDValidation'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('pkiEzsignsignatureID', $data ?? [], null);
        $this->setIfExists('fkiEzsigndocumentID', $data ?? [], null);
        $this->setIfExists('fkiEzsignfoldersignerassociationID', $data ?? [], null);
        $this->setIfExists('iEzsignpagePagenumber', $data ?? [], null);
        $this->setIfExists('iEzsignsignatureX', $data ?? [], null);
        $this->setIfExists('iEzsignsignatureY', $data ?? [], null);
        $this->setIfExists('iEzsignsignatureStep', $data ?? [], null);
        $this->setIfExists('eEzsignsignatureType', $data ?? [], null);
        $this->setIfExists('tEzsignsignatureTooltip', $data ?? [], null);
        $this->setIfExists('eEzsignsignatureTooltipposition', $data ?? [], null);
        $this->setIfExists('eEzsignsignatureFont', $data ?? [], null);
        $this->setIfExists('iEzsignsignatureValidationstep', $data ?? [], null);
        $this->setIfExists('sEzsignsignatureAttachmentdescription', $data ?? [], null);
        $this->setIfExists('eEzsignsignatureAttachmentnamesource', $data ?? [], null);
        $this->setIfExists('bEzsignsignatureRequired', $data ?? [], null);
        $this->setIfExists('fkiEzsignfoldersignerassociationIDValidation', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['pkiEzsignsignatureID'] === null) {
            $invalidProperties[] = "'pkiEzsignsignatureID' can't be null";
        }
        if (($this->container['pkiEzsignsignatureID'] < 0)) {
            $invalidProperties[] = "invalid value for 'pkiEzsignsignatureID', must be bigger than or equal to 0.";
        }

        if ($this->container['fkiEzsigndocumentID'] === null) {
            $invalidProperties[] = "'fkiEzsigndocumentID' can't be null";
        }
        if (($this->container['fkiEzsigndocumentID'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiEzsigndocumentID', must be bigger than or equal to 0.";
        }

        if ($this->container['fkiEzsignfoldersignerassociationID'] === null) {
            $invalidProperties[] = "'fkiEzsignfoldersignerassociationID' can't be null";
        }
        if (($this->container['fkiEzsignfoldersignerassociationID'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiEzsignfoldersignerassociationID', must be bigger than or equal to 0.";
        }

        if ($this->container['iEzsignpagePagenumber'] === null) {
            $invalidProperties[] = "'iEzsignpagePagenumber' can't be null";
        }
        if (($this->container['iEzsignpagePagenumber'] < 1)) {
            $invalidProperties[] = "invalid value for 'iEzsignpagePagenumber', must be bigger than or equal to 1.";
        }

        if ($this->container['iEzsignsignatureX'] === null) {
            $invalidProperties[] = "'iEzsignsignatureX' can't be null";
        }
        if (($this->container['iEzsignsignatureX'] < 0)) {
            $invalidProperties[] = "invalid value for 'iEzsignsignatureX', must be bigger than or equal to 0.";
        }

        if ($this->container['iEzsignsignatureY'] === null) {
            $invalidProperties[] = "'iEzsignsignatureY' can't be null";
        }
        if (($this->container['iEzsignsignatureY'] < 0)) {
            $invalidProperties[] = "invalid value for 'iEzsignsignatureY', must be bigger than or equal to 0.";
        }

        if ($this->container['iEzsignsignatureStep'] === null) {
            $invalidProperties[] = "'iEzsignsignatureStep' can't be null";
        }
        if ($this->container['eEzsignsignatureType'] === null) {
            $invalidProperties[] = "'eEzsignsignatureType' can't be null";
        }
        if (!is_null($this->container['fkiEzsignfoldersignerassociationIDValidation']) && ($this->container['fkiEzsignfoldersignerassociationIDValidation'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiEzsignfoldersignerassociationIDValidation', must be bigger than or equal to 0.";
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets pkiEzsignsignatureID
     *
     * @return int
     */
    public function getPkiEzsignsignatureID()
    {
        return $this->container['pkiEzsignsignatureID'];
    }

    /**
     * Sets pkiEzsignsignatureID
     *
     * @param int $pkiEzsignsignatureID The unique ID of the Ezsignsignature
     *
     * @return self
     */
    public function setPkiEzsignsignatureID($pkiEzsignsignatureID)
    {

        if (($pkiEzsignsignatureID < 0)) {
            throw new \InvalidArgumentException('invalid value for $pkiEzsignsignatureID when calling EzsignsignatureResponse., must be bigger than or equal to 0.');
        }


	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($pkiEzsignsignatureID)) {
            //throw new \InvalidArgumentException('non-nullable pkiEzsignsignatureID cannot be null');
        //}
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['pkiEzsignsignatureID'] = $pkiEzsignsignatureID;
        $this->container['pkiEzsignsignatureID'] = (is_null($pkiEzsignsignatureID) ? null : (int) $pkiEzsignsignatureID);

        return $this;
    }

    /**
     * Gets fkiEzsigndocumentID
     *
     * @return int
     */
    public function getFkiEzsigndocumentID()
    {
        return $this->container['fkiEzsigndocumentID'];
    }

    /**
     * Sets fkiEzsigndocumentID
     *
     * @param int $fkiEzsigndocumentID The unique ID of the Ezsigndocument
     *
     * @return self
     */
    public function setFkiEzsigndocumentID($fkiEzsigndocumentID)
    {

        if (($fkiEzsigndocumentID < 0)) {
            throw new \InvalidArgumentException('invalid value for $fkiEzsigndocumentID when calling EzsignsignatureResponse., must be bigger than or equal to 0.');
        }


	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($fkiEzsigndocumentID)) {
            //throw new \InvalidArgumentException('non-nullable fkiEzsigndocumentID cannot be null');
        //}
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['fkiEzsigndocumentID'] = $fkiEzsigndocumentID;
        $this->container['fkiEzsigndocumentID'] = (is_null($fkiEzsigndocumentID) ? null : (int) $fkiEzsigndocumentID);

        return $this;
    }

    /**
     * Gets fkiEzsignfoldersignerassociationID
     *
     * @return int
     */
    public function getFkiEzsignfoldersignerassociationID()
    {
        return $this->container['fkiEzsignfoldersignerassociationID'];
    }

    /**
     * Sets fkiEzsignfoldersignerassociationID
     *
     * @param int $fkiEzsignfoldersignerassociationID The unique ID of the Ezsignfoldersignerassociation
     *
     * @return self
     */
    public function setFkiEzsignfoldersignerassociationID($fkiEzsignfoldersignerassociationID)
    {

        if (($fkiEzsignfoldersignerassociationID < 0)) {
            throw new \InvalidArgumentException('invalid value for $fkiEzsignfoldersignerassociationID when calling EzsignsignatureResponse., must be bigger than or equal to 0.');
        }


	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($fkiEzsignfoldersignerassociationID)) {
            //throw new \InvalidArgumentException('non-nullable fkiEzsignfoldersignerassociationID cannot be null');
        //}
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['fkiEzsignfoldersignerassociationID'] = $fkiEzsignfoldersignerassociationID;
        $this->container['fkiEzsignfoldersignerassociationID'] = (is_null($fkiEzsignfoldersignerassociationID) ? null : (int) $fkiEzsignfoldersignerassociationID);

        return $this;
    }

    /**
     * Gets iEzsignpagePagenumber
     *
     * @return int
     */
    public function getIEzsignpagePagenumber()
    {
        return $this->container['iEzsignpagePagenumber'];
    }

    /**
     * Sets iEzsignpagePagenumber
     *
     * @param int $iEzsignpagePagenumber The page number in the Ezsigndocument
     *
     * @return self
     */
    public function setIEzsignpagePagenumber($iEzsignpagePagenumber)
    {

        if (($iEzsignpagePagenumber < 1)) {
            throw new \InvalidArgumentException('invalid value for $iEzsignpagePagenumber when calling EzsignsignatureResponse., must be bigger than or equal to 1.');
        }


	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($iEzsignpagePagenumber)) {
            //throw new \InvalidArgumentException('non-nullable iEzsignpagePagenumber cannot be null');
        //}
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['iEzsignpagePagenumber'] = $iEzsignpagePagenumber;
        $this->container['iEzsignpagePagenumber'] = (is_null($iEzsignpagePagenumber) ? null : (int) $iEzsignpagePagenumber);

        return $this;
    }

    /**
     * Gets iEzsignsignatureX
     *
     * @return int
     */
    public function getIEzsignsignatureX()
    {
        return $this->container['iEzsignsignatureX'];
    }

    /**
     * Sets iEzsignsignatureX
     *
     * @param int $iEzsignsignatureX The X coordinate (Horizontal) where to put the Ezsignsignature on the page.  Coordinate is calculated at 100dpi (dot per inch). So for example, if you want to put the Ezsignsignature 2 inches from the left border of the page, you would use \"200\" for the X coordinate.
     *
     * @return self
     */
    public function setIEzsignsignatureX($iEzsignsignatureX)
    {

        if (($iEzsignsignatureX < 0)) {
            throw new \InvalidArgumentException('invalid value for $iEzsignsignatureX when calling EzsignsignatureResponse., must be bigger than or equal to 0.');
        }


	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($iEzsignsignatureX)) {
            //throw new \InvalidArgumentException('non-nullable iEzsignsignatureX cannot be null');
        //}
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['iEzsignsignatureX'] = $iEzsignsignatureX;
        $this->container['iEzsignsignatureX'] = (is_null($iEzsignsignatureX) ? null : (int) $iEzsignsignatureX);

        return $this;
    }

    /**
     * Gets iEzsignsignatureY
     *
     * @return int
     */
    public function getIEzsignsignatureY()
    {
        return $this->container['iEzsignsignatureY'];
    }

    /**
     * Sets iEzsignsignatureY
     *
     * @param int $iEzsignsignatureY The Y coordinate (Vertical) where to put the Ezsignsignature on the page.  Coordinate is calculated at 100dpi (dot per inch). So for example, if you want to put the Ezsignsignature 3 inches from the top border of the page, you would use \"300\" for the Y coordinate.
     *
     * @return self
     */
    public function setIEzsignsignatureY($iEzsignsignatureY)
    {

        if (($iEzsignsignatureY < 0)) {
            throw new \InvalidArgumentException('invalid value for $iEzsignsignatureY when calling EzsignsignatureResponse., must be bigger than or equal to 0.');
        }


	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($iEzsignsignatureY)) {
            //throw new \InvalidArgumentException('non-nullable iEzsignsignatureY cannot be null');
        //}
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['iEzsignsignatureY'] = $iEzsignsignatureY;
        $this->container['iEzsignsignatureY'] = (is_null($iEzsignsignatureY) ? null : (int) $iEzsignsignatureY);

        return $this;
    }

    /**
     * Gets iEzsignsignatureStep
     *
     * @return int
     */
    public function getIEzsignsignatureStep()
    {
        return $this->container['iEzsignsignatureStep'];
    }

    /**
     * Sets iEzsignsignatureStep
     *
     * @param int $iEzsignsignatureStep The step when the Ezsignsigner will be invited to sign
     *
     * @return self
     */
    public function setIEzsignsignatureStep($iEzsignsignatureStep)
    {

	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($iEzsignsignatureStep)) {
            //throw new \InvalidArgumentException('non-nullable iEzsignsignatureStep cannot be null');
        //}
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['iEzsignsignatureStep'] = $iEzsignsignatureStep;
        $this->container['iEzsignsignatureStep'] = (is_null($iEzsignsignatureStep) ? null : (int) $iEzsignsignatureStep);

        return $this;
    }

    /**
     * Gets eEzsignsignatureType
     *
     * @return \eZmaxAPI\Model\FieldEEzsignsignatureType
     */
    public function getEEzsignsignatureType()
    {
        return $this->container['eEzsignsignatureType'];
    }

    /**
     * Sets eEzsignsignatureType
     *
     * @param \eZmaxAPI\Model\FieldEEzsignsignatureType $eEzsignsignatureType eEzsignsignatureType
     *
     * @return self
     */
    public function setEEzsignsignatureType($eEzsignsignatureType)
    {

	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($eEzsignsignatureType)) {
            //throw new \InvalidArgumentException('non-nullable eEzsignsignatureType cannot be null');
        //}
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['eEzsignsignatureType'] = $eEzsignsignatureType;
        $this->container['eEzsignsignatureType'] = $eEzsignsignatureType;

        return $this;
    }

    /**
     * Gets tEzsignsignatureTooltip
     *
     * @return string|null
     */
    public function getTEzsignsignatureTooltip()
    {
        return $this->container['tEzsignsignatureTooltip'];
    }

    /**
     * Sets tEzsignsignatureTooltip
     *
     * @param string|null $tEzsignsignatureTooltip A tooltip that will be presented to Ezsignsigner about the Ezsignsignature
     *
     * @return self
     */
    public function setTEzsignsignatureTooltip($tEzsignsignatureTooltip)
    {

	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($tEzsignsignatureTooltip)) {
            //throw new \InvalidArgumentException('non-nullable tEzsignsignatureTooltip cannot be null');
        //}
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['tEzsignsignatureTooltip'] = $tEzsignsignatureTooltip;
        $this->container['tEzsignsignatureTooltip'] = (is_null($tEzsignsignatureTooltip) ? null : (string) $tEzsignsignatureTooltip);

        return $this;
    }

    /**
     * Gets eEzsignsignatureTooltipposition
     *
     * @return \eZmaxAPI\Model\FieldEEzsignsignatureTooltipposition|null
     */
    public function getEEzsignsignatureTooltipposition()
    {
        return $this->container['eEzsignsignatureTooltipposition'];
    }

    /**
     * Sets eEzsignsignatureTooltipposition
     *
     * @param \eZmaxAPI\Model\FieldEEzsignsignatureTooltipposition|null $eEzsignsignatureTooltipposition eEzsignsignatureTooltipposition
     *
     * @return self
     */
    public function setEEzsignsignatureTooltipposition($eEzsignsignatureTooltipposition)
    {

	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($eEzsignsignatureTooltipposition)) {
            //throw new \InvalidArgumentException('non-nullable eEzsignsignatureTooltipposition cannot be null');
        //}
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['eEzsignsignatureTooltipposition'] = $eEzsignsignatureTooltipposition;
        $this->container['eEzsignsignatureTooltipposition'] = $eEzsignsignatureTooltipposition;

        return $this;
    }

    /**
     * Gets eEzsignsignatureFont
     *
     * @return \eZmaxAPI\Model\FieldEEzsignsignatureFont|null
     */
    public function getEEzsignsignatureFont()
    {
        return $this->container['eEzsignsignatureFont'];
    }

    /**
     * Sets eEzsignsignatureFont
     *
     * @param \eZmaxAPI\Model\FieldEEzsignsignatureFont|null $eEzsignsignatureFont eEzsignsignatureFont
     *
     * @return self
     */
    public function setEEzsignsignatureFont($eEzsignsignatureFont)
    {

	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($eEzsignsignatureFont)) {
            //throw new \InvalidArgumentException('non-nullable eEzsignsignatureFont cannot be null');
        //}
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['eEzsignsignatureFont'] = $eEzsignsignatureFont;
        $this->container['eEzsignsignatureFont'] = $eEzsignsignatureFont;

        return $this;
    }

    /**
     * Gets iEzsignsignatureValidationstep
     *
     * @return int|null
     */
    public function getIEzsignsignatureValidationstep()
    {
        return $this->container['iEzsignsignatureValidationstep'];
    }

    /**
     * Sets iEzsignsignatureValidationstep
     *
     * @param int|null $iEzsignsignatureValidationstep The step when the Ezsignsigner will be invited to validate the Ezsignsignature of eEzsignsignatureType Attachments
     *
     * @return self
     */
    public function setIEzsignsignatureValidationstep($iEzsignsignatureValidationstep)
    {

	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($iEzsignsignatureValidationstep)) {
            //throw new \InvalidArgumentException('non-nullable iEzsignsignatureValidationstep cannot be null');
        //}
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['iEzsignsignatureValidationstep'] = $iEzsignsignatureValidationstep;
        $this->container['iEzsignsignatureValidationstep'] = (is_null($iEzsignsignatureValidationstep) ? null : (int) $iEzsignsignatureValidationstep);

        return $this;
    }

    /**
     * Gets sEzsignsignatureAttachmentdescription
     *
     * @return string|null
     */
    public function getSEzsignsignatureAttachmentdescription()
    {
        return $this->container['sEzsignsignatureAttachmentdescription'];
    }

    /**
     * Sets sEzsignsignatureAttachmentdescription
     *
     * @param string|null $sEzsignsignatureAttachmentdescription The description attached to the attachment name added in Ezsignsignature of eEzsignsignatureType Attachments
     *
     * @return self
     */
    public function setSEzsignsignatureAttachmentdescription($sEzsignsignatureAttachmentdescription)
    {

	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sEzsignsignatureAttachmentdescription)) {
            //throw new \InvalidArgumentException('non-nullable sEzsignsignatureAttachmentdescription cannot be null');
        //}
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sEzsignsignatureAttachmentdescription'] = $sEzsignsignatureAttachmentdescription;
        $this->container['sEzsignsignatureAttachmentdescription'] = (is_null($sEzsignsignatureAttachmentdescription) ? null : (string) $sEzsignsignatureAttachmentdescription);

        return $this;
    }

    /**
     * Gets eEzsignsignatureAttachmentnamesource
     *
     * @return \eZmaxAPI\Model\FieldEEzsignsignatureAttachmentnamesource|null
     */
    public function getEEzsignsignatureAttachmentnamesource()
    {
        return $this->container['eEzsignsignatureAttachmentnamesource'];
    }

    /**
     * Sets eEzsignsignatureAttachmentnamesource
     *
     * @param \eZmaxAPI\Model\FieldEEzsignsignatureAttachmentnamesource|null $eEzsignsignatureAttachmentnamesource eEzsignsignatureAttachmentnamesource
     *
     * @return self
     */
    public function setEEzsignsignatureAttachmentnamesource($eEzsignsignatureAttachmentnamesource)
    {

	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($eEzsignsignatureAttachmentnamesource)) {
            //throw new \InvalidArgumentException('non-nullable eEzsignsignatureAttachmentnamesource cannot be null');
        //}
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['eEzsignsignatureAttachmentnamesource'] = $eEzsignsignatureAttachmentnamesource;
        $this->container['eEzsignsignatureAttachmentnamesource'] = $eEzsignsignatureAttachmentnamesource;

        return $this;
    }

    /**
     * Gets bEzsignsignatureRequired
     *
     * @return bool|null
     */
    public function getBEzsignsignatureRequired()
    {
        return $this->container['bEzsignsignatureRequired'];
    }

    /**
     * Sets bEzsignsignatureRequired
     *
     * @param bool|null $bEzsignsignatureRequired Whether the Ezsignsignature is required or not. This field is relevant only with Ezsignsignature with eEzsignsignatureType = Attachments.
     *
     * @return self
     */
    public function setBEzsignsignatureRequired($bEzsignsignatureRequired)
    {

	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($bEzsignsignatureRequired)) {
            //throw new \InvalidArgumentException('non-nullable bEzsignsignatureRequired cannot be null');
        //}
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['bEzsignsignatureRequired'] = $bEzsignsignatureRequired;
        $this->container['bEzsignsignatureRequired'] = (is_null($bEzsignsignatureRequired) ? null : (bool) $bEzsignsignatureRequired);

        return $this;
    }

    /**
     * Gets fkiEzsignfoldersignerassociationIDValidation
     *
     * @return int|null
     */
    public function getFkiEzsignfoldersignerassociationIDValidation()
    {
        return $this->container['fkiEzsignfoldersignerassociationIDValidation'];
    }

    /**
     * Sets fkiEzsignfoldersignerassociationIDValidation
     *
     * @param int|null $fkiEzsignfoldersignerassociationIDValidation The unique ID of the Ezsignfoldersignerassociation
     *
     * @return self
     */
    public function setFkiEzsignfoldersignerassociationIDValidation($fkiEzsignfoldersignerassociationIDValidation)
    {

        if (!is_null($fkiEzsignfoldersignerassociationIDValidation) && ($fkiEzsignfoldersignerassociationIDValidation < 0)) {
            throw new \InvalidArgumentException('invalid value for $fkiEzsignfoldersignerassociationIDValidation when calling EzsignsignatureResponse., must be bigger than or equal to 0.');
        }


	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($fkiEzsignfoldersignerassociationIDValidation)) {
            //throw new \InvalidArgumentException('non-nullable fkiEzsignfoldersignerassociationIDValidation cannot be null');
        //}
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['fkiEzsignfoldersignerassociationIDValidation'] = $fkiEzsignfoldersignerassociationIDValidation;
        $this->container['fkiEzsignfoldersignerassociationIDValidation'] = (is_null($fkiEzsignfoldersignerassociationIDValidation) ? null : (int) $fkiEzsignfoldersignerassociationIDValidation);

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


