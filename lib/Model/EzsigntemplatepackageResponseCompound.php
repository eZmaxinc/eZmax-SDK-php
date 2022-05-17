<?php
/**
 * EzsigntemplatepackageResponseCompound
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
 * The version of the OpenAPI document: 1.1.7
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
 * EzsigntemplatepackageResponseCompound Class Doc Comment
 *
 * @category Class
 * @description A Ezsigntemplatepackage Object
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class EzsigntemplatepackageResponseCompound implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ezsigntemplatepackage-ResponseCompound';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'pkiEzsigntemplatepackageID' => 'int',
        'fkiEzsignfoldertypeID' => 'int',
        'fkiLanguageID' => 'int',
        'sLanguageNameX' => 'string',
        'sEzsigntemplatepackageDescription' => 'string',
        'bEzsigntemplatepackageAdminonly' => 'bool',
        'bEzsigntemplatepackageNeedvalidation' => 'bool',
        'bEzsigntemplatepackageIsactive' => 'bool',
        'sEzsignfoldertypeNameX' => 'string',
        'aObjEzsigntemplatepackagesigner' => '\eZmaxAPI\Model\EzsigntemplatepackagesignerResponseCompound[]',
        'aObjEzsigntemplatepackagemembership' => '\eZmaxAPI\Model\EzsigntemplatepackagemembershipResponseCompound[]'
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
        'fkiEzsignfoldertypeID' => null,
        'fkiLanguageID' => null,
        'sLanguageNameX' => null,
        'sEzsigntemplatepackageDescription' => null,
        'bEzsigntemplatepackageAdminonly' => null,
        'bEzsigntemplatepackageNeedvalidation' => null,
        'bEzsigntemplatepackageIsactive' => null,
        'sEzsignfoldertypeNameX' => null,
        'aObjEzsigntemplatepackagesigner' => null,
        'aObjEzsigntemplatepackagemembership' => null
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
        'fkiEzsignfoldertypeID' => 'fkiEzsignfoldertypeID',
        'fkiLanguageID' => 'fkiLanguageID',
        'sLanguageNameX' => 'sLanguageNameX',
        'sEzsigntemplatepackageDescription' => 'sEzsigntemplatepackageDescription',
        'bEzsigntemplatepackageAdminonly' => 'bEzsigntemplatepackageAdminonly',
        'bEzsigntemplatepackageNeedvalidation' => 'bEzsigntemplatepackageNeedvalidation',
        'bEzsigntemplatepackageIsactive' => 'bEzsigntemplatepackageIsactive',
        'sEzsignfoldertypeNameX' => 'sEzsignfoldertypeNameX',
        'aObjEzsigntemplatepackagesigner' => 'a_objEzsigntemplatepackagesigner',
        'aObjEzsigntemplatepackagemembership' => 'a_objEzsigntemplatepackagemembership'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pkiEzsigntemplatepackageID' => 'setPkiEzsigntemplatepackageID',
        'fkiEzsignfoldertypeID' => 'setFkiEzsignfoldertypeID',
        'fkiLanguageID' => 'setFkiLanguageID',
        'sLanguageNameX' => 'setSLanguageNameX',
        'sEzsigntemplatepackageDescription' => 'setSEzsigntemplatepackageDescription',
        'bEzsigntemplatepackageAdminonly' => 'setBEzsigntemplatepackageAdminonly',
        'bEzsigntemplatepackageNeedvalidation' => 'setBEzsigntemplatepackageNeedvalidation',
        'bEzsigntemplatepackageIsactive' => 'setBEzsigntemplatepackageIsactive',
        'sEzsignfoldertypeNameX' => 'setSEzsignfoldertypeNameX',
        'aObjEzsigntemplatepackagesigner' => 'setAObjEzsigntemplatepackagesigner',
        'aObjEzsigntemplatepackagemembership' => 'setAObjEzsigntemplatepackagemembership'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pkiEzsigntemplatepackageID' => 'getPkiEzsigntemplatepackageID',
        'fkiEzsignfoldertypeID' => 'getFkiEzsignfoldertypeID',
        'fkiLanguageID' => 'getFkiLanguageID',
        'sLanguageNameX' => 'getSLanguageNameX',
        'sEzsigntemplatepackageDescription' => 'getSEzsigntemplatepackageDescription',
        'bEzsigntemplatepackageAdminonly' => 'getBEzsigntemplatepackageAdminonly',
        'bEzsigntemplatepackageNeedvalidation' => 'getBEzsigntemplatepackageNeedvalidation',
        'bEzsigntemplatepackageIsactive' => 'getBEzsigntemplatepackageIsactive',
        'sEzsignfoldertypeNameX' => 'getSEzsignfoldertypeNameX',
        'aObjEzsigntemplatepackagesigner' => 'getAObjEzsigntemplatepackagesigner',
        'aObjEzsigntemplatepackagemembership' => 'getAObjEzsigntemplatepackagemembership'
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
        $this->container['fkiEzsignfoldertypeID'] = $data['fkiEzsignfoldertypeID'] ?? null;
        $this->container['fkiLanguageID'] = $data['fkiLanguageID'] ?? null;
        $this->container['sLanguageNameX'] = $data['sLanguageNameX'] ?? null;
        $this->container['sEzsigntemplatepackageDescription'] = $data['sEzsigntemplatepackageDescription'] ?? null;
        $this->container['bEzsigntemplatepackageAdminonly'] = $data['bEzsigntemplatepackageAdminonly'] ?? null;
        $this->container['bEzsigntemplatepackageNeedvalidation'] = $data['bEzsigntemplatepackageNeedvalidation'] ?? null;
        $this->container['bEzsigntemplatepackageIsactive'] = $data['bEzsigntemplatepackageIsactive'] ?? null;
        $this->container['sEzsignfoldertypeNameX'] = $data['sEzsignfoldertypeNameX'] ?? null;
        $this->container['aObjEzsigntemplatepackagesigner'] = $data['aObjEzsigntemplatepackagesigner'] ?? null;
        $this->container['aObjEzsigntemplatepackagemembership'] = $data['aObjEzsigntemplatepackagemembership'] ?? null;
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

        if ($this->container['sLanguageNameX'] === null) {
            $invalidProperties[] = "'sLanguageNameX' can't be null";
        }
        if ($this->container['sEzsigntemplatepackageDescription'] === null) {
            $invalidProperties[] = "'sEzsigntemplatepackageDescription' can't be null";
        }
        if ($this->container['bEzsigntemplatepackageAdminonly'] === null) {
            $invalidProperties[] = "'bEzsigntemplatepackageAdminonly' can't be null";
        }
        if ($this->container['bEzsigntemplatepackageNeedvalidation'] === null) {
            $invalidProperties[] = "'bEzsigntemplatepackageNeedvalidation' can't be null";
        }
        if ($this->container['bEzsigntemplatepackageIsactive'] === null) {
            $invalidProperties[] = "'bEzsigntemplatepackageIsactive' can't be null";
        }
        if ($this->container['sEzsignfoldertypeNameX'] === null) {
            $invalidProperties[] = "'sEzsignfoldertypeNameX' can't be null";
        }
        if ($this->container['aObjEzsigntemplatepackagesigner'] === null) {
            $invalidProperties[] = "'aObjEzsigntemplatepackagesigner' can't be null";
        }
        if ($this->container['aObjEzsigntemplatepackagemembership'] === null) {
            $invalidProperties[] = "'aObjEzsigntemplatepackagemembership' can't be null";
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
            throw new \InvalidArgumentException('invalid value for $fkiLanguageID when calling EzsigntemplatepackageResponseCompound., must be smaller than or equal to 2.');
        }
        if (($fkiLanguageID < 1)) {
            throw new \InvalidArgumentException('invalid value for $fkiLanguageID when calling EzsigntemplatepackageResponseCompound., must be bigger than or equal to 1.');
        }

        $this->container['fkiLanguageID'] = $fkiLanguageID;

        return $this;
    }

    /**
     * Gets sLanguageNameX
     *
     * @return string
     */
    public function getSLanguageNameX()
    {
        return $this->container['sLanguageNameX'];
    }

    /**
     * Sets sLanguageNameX
     *
     * @param string $sLanguageNameX The Name of the Language in the language of the requester
     *
     * @return self
     */
    public function setSLanguageNameX($sLanguageNameX)
    {
        $this->container['sLanguageNameX'] = $sLanguageNameX;

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
     * Gets bEzsigntemplatepackageAdminonly
     *
     * @return bool
     */
    public function getBEzsigntemplatepackageAdminonly()
    {
        return $this->container['bEzsigntemplatepackageAdminonly'];
    }

    /**
     * Sets bEzsigntemplatepackageAdminonly
     *
     * @param bool $bEzsigntemplatepackageAdminonly Whether the Ezsigntemplatepackage can be accessed by admin users only (eUserType=Normal)
     *
     * @return self
     */
    public function setBEzsigntemplatepackageAdminonly($bEzsigntemplatepackageAdminonly)
    {
        $this->container['bEzsigntemplatepackageAdminonly'] = $bEzsigntemplatepackageAdminonly;

        return $this;
    }

    /**
     * Gets bEzsigntemplatepackageNeedvalidation
     *
     * @return bool
     */
    public function getBEzsigntemplatepackageNeedvalidation()
    {
        return $this->container['bEzsigntemplatepackageNeedvalidation'];
    }

    /**
     * Sets bEzsigntemplatepackageNeedvalidation
     *
     * @param bool $bEzsigntemplatepackageNeedvalidation Whether the Ezsignbulksend was automatically modified and needs a manual validation
     *
     * @return self
     */
    public function setBEzsigntemplatepackageNeedvalidation($bEzsigntemplatepackageNeedvalidation)
    {
        $this->container['bEzsigntemplatepackageNeedvalidation'] = $bEzsigntemplatepackageNeedvalidation;

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
     * Gets sEzsignfoldertypeNameX
     *
     * @return string
     */
    public function getSEzsignfoldertypeNameX()
    {
        return $this->container['sEzsignfoldertypeNameX'];
    }

    /**
     * Sets sEzsignfoldertypeNameX
     *
     * @param string $sEzsignfoldertypeNameX The name of the Ezsignfoldertype in the language of the requester
     *
     * @return self
     */
    public function setSEzsignfoldertypeNameX($sEzsignfoldertypeNameX)
    {
        $this->container['sEzsignfoldertypeNameX'] = $sEzsignfoldertypeNameX;

        return $this;
    }

    /**
     * Gets aObjEzsigntemplatepackagesigner
     *
     * @return \eZmaxAPI\Model\EzsigntemplatepackagesignerResponseCompound[]
     */
    public function getAObjEzsigntemplatepackagesigner()
    {
        return $this->container['aObjEzsigntemplatepackagesigner'];
    }

    /**
     * Sets aObjEzsigntemplatepackagesigner
     *
     * @param \eZmaxAPI\Model\EzsigntemplatepackagesignerResponseCompound[] $aObjEzsigntemplatepackagesigner aObjEzsigntemplatepackagesigner
     *
     * @return self
     */
    public function setAObjEzsigntemplatepackagesigner($aObjEzsigntemplatepackagesigner)
    {
        $this->container['aObjEzsigntemplatepackagesigner'] = $aObjEzsigntemplatepackagesigner;

        return $this;
    }

    /**
     * Gets aObjEzsigntemplatepackagemembership
     *
     * @return \eZmaxAPI\Model\EzsigntemplatepackagemembershipResponseCompound[]
     */
    public function getAObjEzsigntemplatepackagemembership()
    {
        return $this->container['aObjEzsigntemplatepackagemembership'];
    }

    /**
     * Sets aObjEzsigntemplatepackagemembership
     *
     * @param \eZmaxAPI\Model\EzsigntemplatepackagemembershipResponseCompound[] $aObjEzsigntemplatepackagemembership aObjEzsigntemplatepackagemembership
     *
     * @return self
     */
    public function setAObjEzsigntemplatepackagemembership($aObjEzsigntemplatepackagemembership)
    {
        $this->container['aObjEzsigntemplatepackagemembership'] = $aObjEzsigntemplatepackagemembership;

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


