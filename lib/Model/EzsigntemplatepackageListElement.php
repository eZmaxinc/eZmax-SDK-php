<?php
/**
 * EzsigntemplatepackageListElement
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * eZmax API Definition
 *
 * This API expose all the functionnalities for the eZmax and eZsign applications.
 *
 * The version of the OpenAPI document: 1.1.4
 * Contact: support-api@ezmax.ca
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.0.0-SNAPSHOT
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
 * EzsigntemplatepackageListElement Class Doc Comment
 *
 * @category Class
 * @description An Ezsigntemplatepackage List Element
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class EzsigntemplatepackageListElement implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ezsigntemplatepackage-ListElement';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'pkiEzsigntemplatepackageID' => 'int',
        'fkiDepartmentID' => 'int',
        'fkiTeamID' => 'int',
        'fkiEzsignfoldertypeID' => 'int',
        'fkiLanguageID' => 'int',
        'eEzsigntemplatepackageType' => '\eZmaxAPI\Model\FieldEEzsigntemplatepackageType',
        'sEzsigntemplatepackageDescription' => 'string',
        'bEzsigntemplatepackageIsactive' => 'bool',
        'iEzsigntemplatepackagemembership' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'pkiEzsigntemplatepackageID' => null,
        'fkiDepartmentID' => null,
        'fkiTeamID' => null,
        'fkiEzsignfoldertypeID' => null,
        'fkiLanguageID' => null,
        'eEzsigntemplatepackageType' => null,
        'sEzsigntemplatepackageDescription' => null,
        'bEzsigntemplatepackageIsactive' => null,
        'iEzsigntemplatepackagemembership' => null
    ];

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
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'pkiEzsigntemplatepackageID' => 'pkiEzsigntemplatepackageID',
        'fkiDepartmentID' => 'fkiDepartmentID',
        'fkiTeamID' => 'fkiTeamID',
        'fkiEzsignfoldertypeID' => 'fkiEzsignfoldertypeID',
        'fkiLanguageID' => 'fkiLanguageID',
        'eEzsigntemplatepackageType' => 'eEzsigntemplatepackageType',
        'sEzsigntemplatepackageDescription' => 'sEzsigntemplatepackageDescription',
        'bEzsigntemplatepackageIsactive' => 'bEzsigntemplatepackageIsactive',
        'iEzsigntemplatepackagemembership' => 'iEzsigntemplatepackagemembership'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pkiEzsigntemplatepackageID' => 'setPkiEzsigntemplatepackageID',
        'fkiDepartmentID' => 'setFkiDepartmentID',
        'fkiTeamID' => 'setFkiTeamID',
        'fkiEzsignfoldertypeID' => 'setFkiEzsignfoldertypeID',
        'fkiLanguageID' => 'setFkiLanguageID',
        'eEzsigntemplatepackageType' => 'setEEzsigntemplatepackageType',
        'sEzsigntemplatepackageDescription' => 'setSEzsigntemplatepackageDescription',
        'bEzsigntemplatepackageIsactive' => 'setBEzsigntemplatepackageIsactive',
        'iEzsigntemplatepackagemembership' => 'setIEzsigntemplatepackagemembership'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pkiEzsigntemplatepackageID' => 'getPkiEzsigntemplatepackageID',
        'fkiDepartmentID' => 'getFkiDepartmentID',
        'fkiTeamID' => 'getFkiTeamID',
        'fkiEzsignfoldertypeID' => 'getFkiEzsignfoldertypeID',
        'fkiLanguageID' => 'getFkiLanguageID',
        'eEzsigntemplatepackageType' => 'getEEzsigntemplatepackageType',
        'sEzsigntemplatepackageDescription' => 'getSEzsigntemplatepackageDescription',
        'bEzsigntemplatepackageIsactive' => 'getBEzsigntemplatepackageIsactive',
        'iEzsigntemplatepackagemembership' => 'getIEzsigntemplatepackagemembership'
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
        $this->container['pkiEzsigntemplatepackageID'] = $data['pkiEzsigntemplatepackageID'] ?? null;
        $this->container['fkiDepartmentID'] = $data['fkiDepartmentID'] ?? null;
        $this->container['fkiTeamID'] = $data['fkiTeamID'] ?? null;
        $this->container['fkiEzsignfoldertypeID'] = $data['fkiEzsignfoldertypeID'] ?? null;
        $this->container['fkiLanguageID'] = $data['fkiLanguageID'] ?? null;
        $this->container['eEzsigntemplatepackageType'] = $data['eEzsigntemplatepackageType'] ?? null;
        $this->container['sEzsigntemplatepackageDescription'] = $data['sEzsigntemplatepackageDescription'] ?? null;
        $this->container['bEzsigntemplatepackageIsactive'] = $data['bEzsigntemplatepackageIsactive'] ?? null;
        $this->container['iEzsigntemplatepackagemembership'] = $data['iEzsigntemplatepackagemembership'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['pkiEzsigntemplatepackageID'] === null) {
            $invalidProperties[] = "'pkiEzsigntemplatepackageID' can't be null";
        }
        if ($this->container['fkiDepartmentID'] === null) {
            $invalidProperties[] = "'fkiDepartmentID' can't be null";
        }
        if ($this->container['fkiTeamID'] === null) {
            $invalidProperties[] = "'fkiTeamID' can't be null";
        }
        if ($this->container['fkiEzsignfoldertypeID'] === null) {
            $invalidProperties[] = "'fkiEzsignfoldertypeID' can't be null";
        }
        if ($this->container['fkiLanguageID'] === null) {
            $invalidProperties[] = "'fkiLanguageID' can't be null";
        }
        if (($this->container['fkiLanguageID'] > 2)) {
            $invalidProperties[] = "invalid value for 'fkiLanguageID', must be smaller than or equal to 2.";
        }

        if (($this->container['fkiLanguageID'] < 1)) {
            $invalidProperties[] = "invalid value for 'fkiLanguageID', must be bigger than or equal to 1.";
        }

        if ($this->container['eEzsigntemplatepackageType'] === null) {
            $invalidProperties[] = "'eEzsigntemplatepackageType' can't be null";
        }
        if ($this->container['sEzsigntemplatepackageDescription'] === null) {
            $invalidProperties[] = "'sEzsigntemplatepackageDescription' can't be null";
        }
        if ($this->container['bEzsigntemplatepackageIsactive'] === null) {
            $invalidProperties[] = "'bEzsigntemplatepackageIsactive' can't be null";
        }
        if ($this->container['iEzsigntemplatepackagemembership'] === null) {
            $invalidProperties[] = "'iEzsigntemplatepackagemembership' can't be null";
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
     * Gets pkiEzsigntemplatepackageID
     *
     * @return int
     */
    public function getPkiEzsigntemplatepackageID()
    {
        return $this->container['pkiEzsigntemplatepackageID'];
    }

    /**
     * Sets pkiEzsigntemplatepackageID
     *
     * @param int $pkiEzsigntemplatepackageID The unique ID of the Ezsigntemplatepackage
     *
     * @return self
     */
    public function setPkiEzsigntemplatepackageID($pkiEzsigntemplatepackageID)
    {
        $this->container['pkiEzsigntemplatepackageID'] = $pkiEzsigntemplatepackageID;

        return $this;
    }

    /**
     * Gets fkiDepartmentID
     *
     * @return int
     */
    public function getFkiDepartmentID()
    {
        return $this->container['fkiDepartmentID'];
    }

    /**
     * Sets fkiDepartmentID
     *
     * @param int $fkiDepartmentID The unique ID of the Department.
     *
     * @return self
     */
    public function setFkiDepartmentID($fkiDepartmentID)
    {
        $this->container['fkiDepartmentID'] = $fkiDepartmentID;

        return $this;
    }

    /**
     * Gets fkiTeamID
     *
     * @return int
     */
    public function getFkiTeamID()
    {
        return $this->container['fkiTeamID'];
    }

    /**
     * Sets fkiTeamID
     *
     * @param int $fkiTeamID The unique ID of the Team
     *
     * @return self
     */
    public function setFkiTeamID($fkiTeamID)
    {
        $this->container['fkiTeamID'] = $fkiTeamID;

        return $this;
    }

    /**
     * Gets fkiEzsignfoldertypeID
     *
     * @return int
     */
    public function getFkiEzsignfoldertypeID()
    {
        return $this->container['fkiEzsignfoldertypeID'];
    }

    /**
     * Sets fkiEzsignfoldertypeID
     *
     * @param int $fkiEzsignfoldertypeID The unique ID of the Ezsignfoldertype.
     *
     * @return self
     */
    public function setFkiEzsignfoldertypeID($fkiEzsignfoldertypeID)
    {
        $this->container['fkiEzsignfoldertypeID'] = $fkiEzsignfoldertypeID;

        return $this;
    }

    /**
     * Gets fkiLanguageID
     *
     * @return int
     */
    public function getFkiLanguageID()
    {
        return $this->container['fkiLanguageID'];
    }

    /**
     * Sets fkiLanguageID
     *
     * @param int $fkiLanguageID The unique ID of the Language.  Valid values:  |Value|Description| |-|-| |1|French| |2|English|
     *
     * @return self
     */
    public function setFkiLanguageID($fkiLanguageID)
    {

        if (($fkiLanguageID > 2)) {
            throw new \InvalidArgumentException('invalid value for $fkiLanguageID when calling EzsigntemplatepackageListElement., must be smaller than or equal to 2.');
        }
        if (($fkiLanguageID < 1)) {
            throw new \InvalidArgumentException('invalid value for $fkiLanguageID when calling EzsigntemplatepackageListElement., must be bigger than or equal to 1.');
        }

        $this->container['fkiLanguageID'] = $fkiLanguageID;

        return $this;
    }

    /**
     * Gets eEzsigntemplatepackageType
     *
     * @return \eZmaxAPI\Model\FieldEEzsigntemplatepackageType
     */
    public function getEEzsigntemplatepackageType()
    {
        return $this->container['eEzsigntemplatepackageType'];
    }

    /**
     * Sets eEzsigntemplatepackageType
     *
     * @param \eZmaxAPI\Model\FieldEEzsigntemplatepackageType $eEzsigntemplatepackageType eEzsigntemplatepackageType
     *
     * @return self
     */
    public function setEEzsigntemplatepackageType($eEzsigntemplatepackageType)
    {
        $this->container['eEzsigntemplatepackageType'] = $eEzsigntemplatepackageType;

        return $this;
    }

    /**
     * Gets sEzsigntemplatepackageDescription
     *
     * @return string
     */
    public function getSEzsigntemplatepackageDescription()
    {
        return $this->container['sEzsigntemplatepackageDescription'];
    }

    /**
     * Sets sEzsigntemplatepackageDescription
     *
     * @param string $sEzsigntemplatepackageDescription The description of the Ezsigntemplatepackage
     *
     * @return self
     */
    public function setSEzsigntemplatepackageDescription($sEzsigntemplatepackageDescription)
    {
        $this->container['sEzsigntemplatepackageDescription'] = $sEzsigntemplatepackageDescription;

        return $this;
    }

    /**
     * Gets bEzsigntemplatepackageIsactive
     *
     * @return bool
     */
    public function getBEzsigntemplatepackageIsactive()
    {
        return $this->container['bEzsigntemplatepackageIsactive'];
    }

    /**
     * Sets bEzsigntemplatepackageIsactive
     *
     * @param bool $bEzsigntemplatepackageIsactive Whether the Ezsigntemplatepackage is active or not
     *
     * @return self
     */
    public function setBEzsigntemplatepackageIsactive($bEzsigntemplatepackageIsactive)
    {
        $this->container['bEzsigntemplatepackageIsactive'] = $bEzsigntemplatepackageIsactive;

        return $this;
    }

    /**
     * Gets iEzsigntemplatepackagemembership
     *
     * @return int
     */
    public function getIEzsigntemplatepackagemembership()
    {
        return $this->container['iEzsigntemplatepackagemembership'];
    }

    /**
     * Sets iEzsigntemplatepackagemembership
     *
     * @param int $iEzsigntemplatepackagemembership The total number of Ezsigntemplatepackagemembership in the Ezsigntemplatepackage
     *
     * @return self
     */
    public function setIEzsigntemplatepackagemembership($iEzsigntemplatepackagemembership)
    {
        $this->container['iEzsigntemplatepackagemembership'] = $iEzsigntemplatepackagemembership;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
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
    public function offsetSet($offset, $value)
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
    public function offsetUnset($offset)
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


