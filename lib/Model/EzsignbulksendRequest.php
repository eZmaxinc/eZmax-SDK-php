<?php
/**
 * EzsignbulksendRequest
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
 * The version of the OpenAPI document: 1.1.10
 * Contact: support-api@ezmax.ca
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.1.0-SNAPSHOT
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
 * EzsignbulksendRequest Class Doc Comment
 *
 * @category Class
 * @description A Ezsignbulksend Object
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class EzsignbulksendRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ezsignbulksend-Request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'pkiEzsignbulksendID' => 'int',
        'fkiEzsignfoldertypeID' => 'int',
        'fkiLanguageID' => 'int',
        'sEzsignbulksendDescription' => 'string',
        'tEzsignbulksendNote' => 'string',
        'bEzsignbulksendNeedvalidation' => 'bool',
        'bEzsignbulksendIsactive' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'pkiEzsignbulksendID' => null,
        'fkiEzsignfoldertypeID' => null,
        'fkiLanguageID' => null,
        'sEzsignbulksendDescription' => null,
        'tEzsignbulksendNote' => null,
        'bEzsignbulksendNeedvalidation' => null,
        'bEzsignbulksendIsactive' => null
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
        'pkiEzsignbulksendID' => 'pkiEzsignbulksendID',
        'fkiEzsignfoldertypeID' => 'fkiEzsignfoldertypeID',
        'fkiLanguageID' => 'fkiLanguageID',
        'sEzsignbulksendDescription' => 'sEzsignbulksendDescription',
        'tEzsignbulksendNote' => 'tEzsignbulksendNote',
        'bEzsignbulksendNeedvalidation' => 'bEzsignbulksendNeedvalidation',
        'bEzsignbulksendIsactive' => 'bEzsignbulksendIsactive'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pkiEzsignbulksendID' => 'setPkiEzsignbulksendID',
        'fkiEzsignfoldertypeID' => 'setFkiEzsignfoldertypeID',
        'fkiLanguageID' => 'setFkiLanguageID',
        'sEzsignbulksendDescription' => 'setSEzsignbulksendDescription',
        'tEzsignbulksendNote' => 'setTEzsignbulksendNote',
        'bEzsignbulksendNeedvalidation' => 'setBEzsignbulksendNeedvalidation',
        'bEzsignbulksendIsactive' => 'setBEzsignbulksendIsactive'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pkiEzsignbulksendID' => 'getPkiEzsignbulksendID',
        'fkiEzsignfoldertypeID' => 'getFkiEzsignfoldertypeID',
        'fkiLanguageID' => 'getFkiLanguageID',
        'sEzsignbulksendDescription' => 'getSEzsignbulksendDescription',
        'tEzsignbulksendNote' => 'getTEzsignbulksendNote',
        'bEzsignbulksendNeedvalidation' => 'getBEzsignbulksendNeedvalidation',
        'bEzsignbulksendIsactive' => 'getBEzsignbulksendIsactive'
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
        $this->container['pkiEzsignbulksendID'] = $data['pkiEzsignbulksendID'] ?? null;
        $this->container['fkiEzsignfoldertypeID'] = $data['fkiEzsignfoldertypeID'] ?? null;
        $this->container['fkiLanguageID'] = $data['fkiLanguageID'] ?? null;
        $this->container['sEzsignbulksendDescription'] = $data['sEzsignbulksendDescription'] ?? null;
        $this->container['tEzsignbulksendNote'] = $data['tEzsignbulksendNote'] ?? null;
        $this->container['bEzsignbulksendNeedvalidation'] = $data['bEzsignbulksendNeedvalidation'] ?? null;
        $this->container['bEzsignbulksendIsactive'] = $data['bEzsignbulksendIsactive'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['pkiEzsignbulksendID']) && ($this->container['pkiEzsignbulksendID'] < 0)) {
            $invalidProperties[] = "invalid value for 'pkiEzsignbulksendID', must be bigger than or equal to 0.";
        }

        if ($this->container['fkiEzsignfoldertypeID'] === null) {
            $invalidProperties[] = "'fkiEzsignfoldertypeID' can't be null";
        }
        if (($this->container['fkiEzsignfoldertypeID'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiEzsignfoldertypeID', must be bigger than or equal to 0.";
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

        if ($this->container['sEzsignbulksendDescription'] === null) {
            $invalidProperties[] = "'sEzsignbulksendDescription' can't be null";
        }
        if ($this->container['tEzsignbulksendNote'] === null) {
            $invalidProperties[] = "'tEzsignbulksendNote' can't be null";
        }
        if ($this->container['bEzsignbulksendNeedvalidation'] === null) {
            $invalidProperties[] = "'bEzsignbulksendNeedvalidation' can't be null";
        }
        if ($this->container['bEzsignbulksendIsactive'] === null) {
            $invalidProperties[] = "'bEzsignbulksendIsactive' can't be null";
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
     * Gets pkiEzsignbulksendID
     *
     * @return int|null
     */
    public function getPkiEzsignbulksendID()
    {
        return $this->container['pkiEzsignbulksendID'];
    }

    /**
     * Sets pkiEzsignbulksendID
     *
     * @param int|null $pkiEzsignbulksendID The unique ID of the Ezsignbulksend
     *
     * @return self
     */
    public function setPkiEzsignbulksendID($pkiEzsignbulksendID)
    {

        if (!is_null($pkiEzsignbulksendID) && ($pkiEzsignbulksendID < 0)) {
            throw new \InvalidArgumentException('invalid value for $pkiEzsignbulksendID when calling EzsignbulksendRequest., must be bigger than or equal to 0.');
        }

        $this->container['pkiEzsignbulksendID'] = $pkiEzsignbulksendID;

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

        if (($fkiEzsignfoldertypeID < 0)) {
            throw new \InvalidArgumentException('invalid value for $fkiEzsignfoldertypeID when calling EzsignbulksendRequest., must be bigger than or equal to 0.');
        }

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
            throw new \InvalidArgumentException('invalid value for $fkiLanguageID when calling EzsignbulksendRequest., must be smaller than or equal to 2.');
        }
        if (($fkiLanguageID < 1)) {
            throw new \InvalidArgumentException('invalid value for $fkiLanguageID when calling EzsignbulksendRequest., must be bigger than or equal to 1.');
        }

        $this->container['fkiLanguageID'] = $fkiLanguageID;

        return $this;
    }

    /**
     * Gets sEzsignbulksendDescription
     *
     * @return string
     */
    public function getSEzsignbulksendDescription()
    {
        return $this->container['sEzsignbulksendDescription'];
    }

    /**
     * Sets sEzsignbulksendDescription
     *
     * @param string $sEzsignbulksendDescription The description of the Ezsignbulksend
     *
     * @return self
     */
    public function setSEzsignbulksendDescription($sEzsignbulksendDescription)
    {
        $this->container['sEzsignbulksendDescription'] = $sEzsignbulksendDescription;

        return $this;
    }

    /**
     * Gets tEzsignbulksendNote
     *
     * @return string
     */
    public function getTEzsignbulksendNote()
    {
        return $this->container['tEzsignbulksendNote'];
    }

    /**
     * Sets tEzsignbulksendNote
     *
     * @param string $tEzsignbulksendNote Note about the Ezsignbulksend
     *
     * @return self
     */
    public function setTEzsignbulksendNote($tEzsignbulksendNote)
    {
        $this->container['tEzsignbulksendNote'] = $tEzsignbulksendNote;

        return $this;
    }

    /**
     * Gets bEzsignbulksendNeedvalidation
     *
     * @return bool
     */
    public function getBEzsignbulksendNeedvalidation()
    {
        return $this->container['bEzsignbulksendNeedvalidation'];
    }

    /**
     * Sets bEzsignbulksendNeedvalidation
     *
     * @param bool $bEzsignbulksendNeedvalidation Whether the Ezsigntemplatepackage was automatically modified and needs a manual validation
     *
     * @return self
     */
    public function setBEzsignbulksendNeedvalidation($bEzsignbulksendNeedvalidation)
    {
        $this->container['bEzsignbulksendNeedvalidation'] = $bEzsignbulksendNeedvalidation;

        return $this;
    }

    /**
     * Gets bEzsignbulksendIsactive
     *
     * @return bool
     */
    public function getBEzsignbulksendIsactive()
    {
        return $this->container['bEzsignbulksendIsactive'];
    }

    /**
     * Sets bEzsignbulksendIsactive
     *
     * @param bool $bEzsignbulksendIsactive Whether the Ezsignbulksend is active or not
     *
     * @return self
     */
    public function setBEzsignbulksendIsactive($bEzsignbulksendIsactive)
    {
        $this->container['bEzsignbulksendIsactive'] = $bEzsignbulksendIsactive;

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


