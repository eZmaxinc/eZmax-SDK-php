<?php
/**
 * EzsignsignerResponse
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
 * OpenAPI Generator version: 5.4.0-SNAPSHOT
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
 * EzsignsignerResponse Class Doc Comment
 *
 * @category Class
 * @description An Ezsignsigner Object
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class EzsignsignerResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ezsignsigner-Response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'fkiTaxassignmentID' => 'int',
        'fkiSecretquestionID' => 'int',
        'eEzsignsignerLogintype' => 'string',
        'sEzsignsignerSecretanswer' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'fkiTaxassignmentID' => null,
        'fkiSecretquestionID' => null,
        'eEzsignsignerLogintype' => null,
        'sEzsignsignerSecretanswer' => null
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
        'fkiTaxassignmentID' => 'fkiTaxassignmentID',
        'fkiSecretquestionID' => 'fkiSecretquestionID',
        'eEzsignsignerLogintype' => 'eEzsignsignerLogintype',
        'sEzsignsignerSecretanswer' => 'sEzsignsignerSecretanswer'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'fkiTaxassignmentID' => 'setFkiTaxassignmentID',
        'fkiSecretquestionID' => 'setFkiSecretquestionID',
        'eEzsignsignerLogintype' => 'setEEzsignsignerLogintype',
        'sEzsignsignerSecretanswer' => 'setSEzsignsignerSecretanswer'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'fkiTaxassignmentID' => 'getFkiTaxassignmentID',
        'fkiSecretquestionID' => 'getFkiSecretquestionID',
        'eEzsignsignerLogintype' => 'getEEzsignsignerLogintype',
        'sEzsignsignerSecretanswer' => 'getSEzsignsignerSecretanswer'
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

    const E_EZSIGNSIGNER_LOGINTYPE_PASSWORD = 'Password';
    const E_EZSIGNSIGNER_LOGINTYPE_PASSWORD_PHONE = 'PasswordPhone';
    const E_EZSIGNSIGNER_LOGINTYPE_PASSWORD_QUESTION = 'PasswordQuestion';
    const E_EZSIGNSIGNER_LOGINTYPE_IN_PERSON_PHONE = 'InPersonPhone';
    const E_EZSIGNSIGNER_LOGINTYPE_IN_PERSON = 'InPerson';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getEEzsignsignerLogintypeAllowableValues()
    {
        return [
            self::E_EZSIGNSIGNER_LOGINTYPE_PASSWORD,
            self::E_EZSIGNSIGNER_LOGINTYPE_PASSWORD_PHONE,
            self::E_EZSIGNSIGNER_LOGINTYPE_PASSWORD_QUESTION,
            self::E_EZSIGNSIGNER_LOGINTYPE_IN_PERSON_PHONE,
            self::E_EZSIGNSIGNER_LOGINTYPE_IN_PERSON,
        ];
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
        $this->container['fkiTaxassignmentID'] = $data['fkiTaxassignmentID'] ?? null;
        $this->container['fkiSecretquestionID'] = $data['fkiSecretquestionID'] ?? null;
        $this->container['eEzsignsignerLogintype'] = $data['eEzsignsignerLogintype'] ?? null;
        $this->container['sEzsignsignerSecretanswer'] = $data['sEzsignsignerSecretanswer'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['fkiTaxassignmentID'] === null) {
            $invalidProperties[] = "'fkiTaxassignmentID' can't be null";
        }
        if (($this->container['fkiTaxassignmentID'] > 15)) {
            $invalidProperties[] = "invalid value for 'fkiTaxassignmentID', must be smaller than or equal to 15.";
        }

        if (($this->container['fkiTaxassignmentID'] < 1)) {
            $invalidProperties[] = "invalid value for 'fkiTaxassignmentID', must be bigger than or equal to 1.";
        }

        if ($this->container['eEzsignsignerLogintype'] === null) {
            $invalidProperties[] = "'eEzsignsignerLogintype' can't be null";
        }
        $allowedValues = $this->getEEzsignsignerLogintypeAllowableValues();
        if (!is_null($this->container['eEzsignsignerLogintype']) && !in_array($this->container['eEzsignsignerLogintype'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'eEzsignsignerLogintype', must be one of '%s'",
                $this->container['eEzsignsignerLogintype'],
                implode("', '", $allowedValues)
            );
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
     * Gets fkiTaxassignmentID
     *
     * @return int
     */
    public function getFkiTaxassignmentID()
    {
        return $this->container['fkiTaxassignmentID'];
    }

    /**
     * Sets fkiTaxassignmentID
     *
     * @param int $fkiTaxassignmentID The unique ID of the Taxassignment.  Valid values:  |Value|Description| |-|-| |1|No tax| |2|GST| |3|HST (ON)| |4|HST (NB)| |5|HST (NS)| |6|HST (NL)| |7|HST (PE)| |8|GST + QST (QC)| |9|GST + QST (QC) Non-Recoverable| |10|GST + PST (BC)| |11|GST + PST (SK)| |12|GST + RST (MB)| |13|GST + PST (BC) Non-Recoverable| |14|GST + PST (SK) Non-Recoverable| |15|GST + RST (MB) Non-Recoverable|
     *
     * @return self
     */
    public function setFkiTaxassignmentID($fkiTaxassignmentID)
    {

        if (($fkiTaxassignmentID > 15)) {
            throw new \InvalidArgumentException('invalid value for $fkiTaxassignmentID when calling EzsignsignerResponse., must be smaller than or equal to 15.');
        }
        if (($fkiTaxassignmentID < 1)) {
            throw new \InvalidArgumentException('invalid value for $fkiTaxassignmentID when calling EzsignsignerResponse., must be bigger than or equal to 1.');
        }

        $this->container['fkiTaxassignmentID'] = $fkiTaxassignmentID;

        return $this;
    }

    /**
     * Gets fkiSecretquestionID
     *
     * @return int|null
     */
    public function getFkiSecretquestionID()
    {
        return $this->container['fkiSecretquestionID'];
    }

    /**
     * Sets fkiSecretquestionID
     *
     * @param int|null $fkiSecretquestionID The unique ID of the Secretquestion.  Valid values:  |Value|Description| |-|-| |1|The name of the hospital in which you were born| |2|The name of your grade school| |3|The last name of your favorite teacher| |4|Your favorite sports team| |5|Your favorite TV show| |6|Your favorite movie| |7|The name of the street on which you grew up| |8|The name of your first employer| |9|Your first car| |10|Your favorite food| |11|The name of your first pet| |12|Favorite musician/band| |13|What instrument you play| |14|Your father's middle name| |15|Your mother's maiden name| |16|Name of your eldest child| |17|Your spouse's middle name| |18|Favorite restaurant| |19|Childhood nickname| |20|Favorite vacation destination| |21|Your boat's name| |22|Date of Birth (YYYY-MM-DD)|
     *
     * @return self
     */
    public function setFkiSecretquestionID($fkiSecretquestionID)
    {
        $this->container['fkiSecretquestionID'] = $fkiSecretquestionID;

        return $this;
    }

    /**
     * Gets eEzsignsignerLogintype
     *
     * @return string
     */
    public function getEEzsignsignerLogintype()
    {
        return $this->container['eEzsignsignerLogintype'];
    }

    /**
     * Sets eEzsignsignerLogintype
     *
     * @param string $eEzsignsignerLogintype The method the Ezsignsigner will authenticate to the signing platform.  1. **Password** means the Ezsignsigner will receive a secure link by email. 2. **PasswordPhone** means the Ezsignsigner will receive a secure link by email and will need to authenticate using SMS or Phone call. **Additional fee applies**. 3. **PasswordQuestion** means the Ezsignsigner will receive a secure link by email and will need to authenticate using a predefined question and answer. 4. **InPersonPhone** means the Ezsignsigner will only be able to sign \"In-Person\" and will need to authenticate using SMS or Phone call. No email will be sent for invitation to sign. **Additional fee applies**. 5. **InPerson** means the Ezsignsigner will only be able to sign \"In-Person\" and there won't be any authentication. No email will be sent for invitation to sign. Make sure you evaluate the risk of signature denial and at minimum, we recommend you use a handwritten signature type.
     *
     * @return self
     */
    public function setEEzsignsignerLogintype($eEzsignsignerLogintype)
    {
        $allowedValues = $this->getEEzsignsignerLogintypeAllowableValues();
        if (!in_array($eEzsignsignerLogintype, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'eEzsignsignerLogintype', must be one of '%s'",
                    $eEzsignsignerLogintype,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['eEzsignsignerLogintype'] = $eEzsignsignerLogintype;

        return $this;
    }

    /**
     * Gets sEzsignsignerSecretanswer
     *
     * @return string|null
     */
    public function getSEzsignsignerSecretanswer()
    {
        return $this->container['sEzsignsignerSecretanswer'];
    }

    /**
     * Sets sEzsignsignerSecretanswer
     *
     * @param string|null $sEzsignsignerSecretanswer The predefined answer to the secret question the Ezsignsigner will need to provide to successfully authenticate.
     *
     * @return self
     */
    public function setSEzsignsignerSecretanswer($sEzsignsignerSecretanswer)
    {
        $this->container['sEzsignsignerSecretanswer'] = $sEzsignsignerSecretanswer;

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

