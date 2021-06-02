<?php
/**
 * FranchisereferalincomeRequest
 *
 * PHP version 7.2
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
 * The version of the OpenAPI document: 1.0.45
 * Contact: support-api@ezmax.ca
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.2.0-SNAPSHOT
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
 * FranchisereferalincomeRequest Class Doc Comment
 *
 * @category Class
 * @description An Franchisereferalincome Object
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class FranchisereferalincomeRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'franchisereferalincome-Request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'fkiFranchisebrokerID' => 'int',
        'fkiFranchisereferalincomeprogramID' => 'int',
        'fkiPeriodID' => 'int',
        'dFranchisereferalincomeLoan' => 'string',
        'dFranchisereferalincomeFranchiseamount' => 'string',
        'dFranchisereferalincomeFranchisoramount' => 'string',
        'dFranchisereferalincomeAgentamount' => 'string',
        'dtFranchisereferalincomeDisbursed' => 'string',
        'tFranchisereferalincomeComment' => 'string',
        'fkiFranchiseofficeID' => 'int',
        'sFranchisereferalincomeRemoteid' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'fkiFranchisebrokerID' => null,
        'fkiFranchisereferalincomeprogramID' => null,
        'fkiPeriodID' => null,
        'dFranchisereferalincomeLoan' => null,
        'dFranchisereferalincomeFranchiseamount' => null,
        'dFranchisereferalincomeFranchisoramount' => null,
        'dFranchisereferalincomeAgentamount' => null,
        'dtFranchisereferalincomeDisbursed' => null,
        'tFranchisereferalincomeComment' => null,
        'fkiFranchiseofficeID' => null,
        'sFranchisereferalincomeRemoteid' => null
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
        'fkiFranchisebrokerID' => 'fkiFranchisebrokerID',
        'fkiFranchisereferalincomeprogramID' => 'fkiFranchisereferalincomeprogramID',
        'fkiPeriodID' => 'fkiPeriodID',
        'dFranchisereferalincomeLoan' => 'dFranchisereferalincomeLoan',
        'dFranchisereferalincomeFranchiseamount' => 'dFranchisereferalincomeFranchiseamount',
        'dFranchisereferalincomeFranchisoramount' => 'dFranchisereferalincomeFranchisoramount',
        'dFranchisereferalincomeAgentamount' => 'dFranchisereferalincomeAgentamount',
        'dtFranchisereferalincomeDisbursed' => 'dtFranchisereferalincomeDisbursed',
        'tFranchisereferalincomeComment' => 'tFranchisereferalincomeComment',
        'fkiFranchiseofficeID' => 'fkiFranchiseofficeID',
        'sFranchisereferalincomeRemoteid' => 'sFranchisereferalincomeRemoteid'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'fkiFranchisebrokerID' => 'setFkiFranchisebrokerID',
        'fkiFranchisereferalincomeprogramID' => 'setFkiFranchisereferalincomeprogramID',
        'fkiPeriodID' => 'setFkiPeriodID',
        'dFranchisereferalincomeLoan' => 'setDFranchisereferalincomeLoan',
        'dFranchisereferalincomeFranchiseamount' => 'setDFranchisereferalincomeFranchiseamount',
        'dFranchisereferalincomeFranchisoramount' => 'setDFranchisereferalincomeFranchisoramount',
        'dFranchisereferalincomeAgentamount' => 'setDFranchisereferalincomeAgentamount',
        'dtFranchisereferalincomeDisbursed' => 'setDtFranchisereferalincomeDisbursed',
        'tFranchisereferalincomeComment' => 'setTFranchisereferalincomeComment',
        'fkiFranchiseofficeID' => 'setFkiFranchiseofficeID',
        'sFranchisereferalincomeRemoteid' => 'setSFranchisereferalincomeRemoteid'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'fkiFranchisebrokerID' => 'getFkiFranchisebrokerID',
        'fkiFranchisereferalincomeprogramID' => 'getFkiFranchisereferalincomeprogramID',
        'fkiPeriodID' => 'getFkiPeriodID',
        'dFranchisereferalincomeLoan' => 'getDFranchisereferalincomeLoan',
        'dFranchisereferalincomeFranchiseamount' => 'getDFranchisereferalincomeFranchiseamount',
        'dFranchisereferalincomeFranchisoramount' => 'getDFranchisereferalincomeFranchisoramount',
        'dFranchisereferalincomeAgentamount' => 'getDFranchisereferalincomeAgentamount',
        'dtFranchisereferalincomeDisbursed' => 'getDtFranchisereferalincomeDisbursed',
        'tFranchisereferalincomeComment' => 'getTFranchisereferalincomeComment',
        'fkiFranchiseofficeID' => 'getFkiFranchiseofficeID',
        'sFranchisereferalincomeRemoteid' => 'getSFranchisereferalincomeRemoteid'
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
        $this->container['fkiFranchisebrokerID'] = $data['fkiFranchisebrokerID'] ?? null;
        $this->container['fkiFranchisereferalincomeprogramID'] = $data['fkiFranchisereferalincomeprogramID'] ?? null;
        $this->container['fkiPeriodID'] = $data['fkiPeriodID'] ?? null;
        $this->container['dFranchisereferalincomeLoan'] = $data['dFranchisereferalincomeLoan'] ?? null;
        $this->container['dFranchisereferalincomeFranchiseamount'] = $data['dFranchisereferalincomeFranchiseamount'] ?? null;
        $this->container['dFranchisereferalincomeFranchisoramount'] = $data['dFranchisereferalincomeFranchisoramount'] ?? null;
        $this->container['dFranchisereferalincomeAgentamount'] = $data['dFranchisereferalincomeAgentamount'] ?? null;
        $this->container['dtFranchisereferalincomeDisbursed'] = $data['dtFranchisereferalincomeDisbursed'] ?? null;
        $this->container['tFranchisereferalincomeComment'] = $data['tFranchisereferalincomeComment'] ?? null;
        $this->container['fkiFranchiseofficeID'] = $data['fkiFranchiseofficeID'] ?? null;
        $this->container['sFranchisereferalincomeRemoteid'] = $data['sFranchisereferalincomeRemoteid'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['fkiFranchisebrokerID'] === null) {
            $invalidProperties[] = "'fkiFranchisebrokerID' can't be null";
        }
        if ($this->container['fkiFranchisereferalincomeprogramID'] === null) {
            $invalidProperties[] = "'fkiFranchisereferalincomeprogramID' can't be null";
        }
        if ($this->container['fkiPeriodID'] === null) {
            $invalidProperties[] = "'fkiPeriodID' can't be null";
        }
        if ($this->container['dFranchisereferalincomeLoan'] === null) {
            $invalidProperties[] = "'dFranchisereferalincomeLoan' can't be null";
        }
        if ($this->container['dFranchisereferalincomeFranchiseamount'] === null) {
            $invalidProperties[] = "'dFranchisereferalincomeFranchiseamount' can't be null";
        }
        if ($this->container['dFranchisereferalincomeFranchisoramount'] === null) {
            $invalidProperties[] = "'dFranchisereferalincomeFranchisoramount' can't be null";
        }
        if ($this->container['dFranchisereferalincomeAgentamount'] === null) {
            $invalidProperties[] = "'dFranchisereferalincomeAgentamount' can't be null";
        }
        if ($this->container['dtFranchisereferalincomeDisbursed'] === null) {
            $invalidProperties[] = "'dtFranchisereferalincomeDisbursed' can't be null";
        }
        if ($this->container['tFranchisereferalincomeComment'] === null) {
            $invalidProperties[] = "'tFranchisereferalincomeComment' can't be null";
        }
        if ($this->container['fkiFranchiseofficeID'] === null) {
            $invalidProperties[] = "'fkiFranchiseofficeID' can't be null";
        }
        if ($this->container['sFranchisereferalincomeRemoteid'] === null) {
            $invalidProperties[] = "'sFranchisereferalincomeRemoteid' can't be null";
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
     * Gets fkiFranchisebrokerID
     *
     * @return int
     */
    public function getFkiFranchisebrokerID()
    {
        return $this->container['fkiFranchisebrokerID'];
    }

    /**
     * Sets fkiFranchisebrokerID
     *
     * @param int $fkiFranchisebrokerID The unique ID of the Franchisebroker
     *
     * @return self
     */
    public function setFkiFranchisebrokerID($fkiFranchisebrokerID)
    {
        $this->container['fkiFranchisebrokerID'] = $fkiFranchisebrokerID;

        return $this;
    }

    /**
     * Gets fkiFranchisereferalincomeprogramID
     *
     * @return int
     */
    public function getFkiFranchisereferalincomeprogramID()
    {
        return $this->container['fkiFranchisereferalincomeprogramID'];
    }

    /**
     * Sets fkiFranchisereferalincomeprogramID
     *
     * @param int $fkiFranchisereferalincomeprogramID The unique ID of the Franchisereferalincomeprogram
     *
     * @return self
     */
    public function setFkiFranchisereferalincomeprogramID($fkiFranchisereferalincomeprogramID)
    {
        $this->container['fkiFranchisereferalincomeprogramID'] = $fkiFranchisereferalincomeprogramID;

        return $this;
    }

    /**
     * Gets fkiPeriodID
     *
     * @return int
     */
    public function getFkiPeriodID()
    {
        return $this->container['fkiPeriodID'];
    }

    /**
     * Sets fkiPeriodID
     *
     * @param int $fkiPeriodID The unique ID of the Period
     *
     * @return self
     */
    public function setFkiPeriodID($fkiPeriodID)
    {
        $this->container['fkiPeriodID'] = $fkiPeriodID;

        return $this;
    }

    /**
     * Gets dFranchisereferalincomeLoan
     *
     * @return string
     */
    public function getDFranchisereferalincomeLoan()
    {
        return $this->container['dFranchisereferalincomeLoan'];
    }

    /**
     * Sets dFranchisereferalincomeLoan
     *
     * @param string $dFranchisereferalincomeLoan The loan amount
     *
     * @return self
     */
    public function setDFranchisereferalincomeLoan($dFranchisereferalincomeLoan)
    {
        $this->container['dFranchisereferalincomeLoan'] = $dFranchisereferalincomeLoan;

        return $this;
    }

    /**
     * Gets dFranchisereferalincomeFranchiseamount
     *
     * @return string
     */
    public function getDFranchisereferalincomeFranchiseamount()
    {
        return $this->container['dFranchisereferalincomeFranchiseamount'];
    }

    /**
     * Sets dFranchisereferalincomeFranchiseamount
     *
     * @param string $dFranchisereferalincomeFranchiseamount The amount that will be given to the franchise
     *
     * @return self
     */
    public function setDFranchisereferalincomeFranchiseamount($dFranchisereferalincomeFranchiseamount)
    {
        $this->container['dFranchisereferalincomeFranchiseamount'] = $dFranchisereferalincomeFranchiseamount;

        return $this;
    }

    /**
     * Gets dFranchisereferalincomeFranchisoramount
     *
     * @return string
     */
    public function getDFranchisereferalincomeFranchisoramount()
    {
        return $this->container['dFranchisereferalincomeFranchisoramount'];
    }

    /**
     * Sets dFranchisereferalincomeFranchisoramount
     *
     * @param string $dFranchisereferalincomeFranchisoramount The amount that will be kept by the franchisor
     *
     * @return self
     */
    public function setDFranchisereferalincomeFranchisoramount($dFranchisereferalincomeFranchisoramount)
    {
        $this->container['dFranchisereferalincomeFranchisoramount'] = $dFranchisereferalincomeFranchisoramount;

        return $this;
    }

    /**
     * Gets dFranchisereferalincomeAgentamount
     *
     * @return string
     */
    public function getDFranchisereferalincomeAgentamount()
    {
        return $this->container['dFranchisereferalincomeAgentamount'];
    }

    /**
     * Sets dFranchisereferalincomeAgentamount
     *
     * @param string $dFranchisereferalincomeAgentamount The amount that will be given to the agent
     *
     * @return self
     */
    public function setDFranchisereferalincomeAgentamount($dFranchisereferalincomeAgentamount)
    {
        $this->container['dFranchisereferalincomeAgentamount'] = $dFranchisereferalincomeAgentamount;

        return $this;
    }

    /**
     * Gets dtFranchisereferalincomeDisbursed
     *
     * @return string
     */
    public function getDtFranchisereferalincomeDisbursed()
    {
        return $this->container['dtFranchisereferalincomeDisbursed'];
    }

    /**
     * Sets dtFranchisereferalincomeDisbursed
     *
     * @param string $dtFranchisereferalincomeDisbursed The date the amounts were disbursed
     *
     * @return self
     */
    public function setDtFranchisereferalincomeDisbursed($dtFranchisereferalincomeDisbursed)
    {
        $this->container['dtFranchisereferalincomeDisbursed'] = $dtFranchisereferalincomeDisbursed;

        return $this;
    }

    /**
     * Gets tFranchisereferalincomeComment
     *
     * @return string
     */
    public function getTFranchisereferalincomeComment()
    {
        return $this->container['tFranchisereferalincomeComment'];
    }

    /**
     * Sets tFranchisereferalincomeComment
     *
     * @param string $tFranchisereferalincomeComment A comment about the transaction
     *
     * @return self
     */
    public function setTFranchisereferalincomeComment($tFranchisereferalincomeComment)
    {
        $this->container['tFranchisereferalincomeComment'] = $tFranchisereferalincomeComment;

        return $this;
    }

    /**
     * Gets fkiFranchiseofficeID
     *
     * @return int
     */
    public function getFkiFranchiseofficeID()
    {
        return $this->container['fkiFranchiseofficeID'];
    }

    /**
     * Sets fkiFranchiseofficeID
     *
     * @param int $fkiFranchiseofficeID The unique ID of the Franchisereoffice
     *
     * @return self
     */
    public function setFkiFranchiseofficeID($fkiFranchiseofficeID)
    {
        $this->container['fkiFranchiseofficeID'] = $fkiFranchiseofficeID;

        return $this;
    }

    /**
     * Gets sFranchisereferalincomeRemoteid
     *
     * @return string
     */
    public function getSFranchisereferalincomeRemoteid()
    {
        return $this->container['sFranchisereferalincomeRemoteid'];
    }

    /**
     * Sets sFranchisereferalincomeRemoteid
     *
     * @param string $sFranchisereferalincomeRemoteid sFranchisereferalincomeRemoteid
     *
     * @return self
     */
    public function setSFranchisereferalincomeRemoteid($sFranchisereferalincomeRemoteid)
    {
        $this->container['sFranchisereferalincomeRemoteid'] = $sFranchisereferalincomeRemoteid;

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


?>