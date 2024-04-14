<?php
/**
 * CommunicationattachmentRequest
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
 * The version of the OpenAPI document: 1.2.1
 * Contact: support-api@ezmax.ca
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.4.0
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
 * CommunicationattachmentRequest Class Doc Comment
 *
 * @category Class
 * @description A Communicationattachment Object
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CommunicationattachmentRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'communicationattachment-Request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'pkiCommunicationattachmentID' => 'int',
        'fkiAttachmentID' => 'int',
        'fkiInvoiceID' => 'int',
        'fkiSalarypreparationID' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'pkiCommunicationattachmentID' => null,
        'fkiAttachmentID' => null,
        'fkiInvoiceID' => null,
        'fkiSalarypreparationID' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'pkiCommunicationattachmentID' => false,
		'fkiAttachmentID' => false,
		'fkiInvoiceID' => false,
		'fkiSalarypreparationID' => false
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
        'pkiCommunicationattachmentID' => 'pkiCommunicationattachmentID',
        'fkiAttachmentID' => 'fkiAttachmentID',
        'fkiInvoiceID' => 'fkiInvoiceID',
        'fkiSalarypreparationID' => 'fkiSalarypreparationID'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pkiCommunicationattachmentID' => 'setPkiCommunicationattachmentID',
        'fkiAttachmentID' => 'setFkiAttachmentID',
        'fkiInvoiceID' => 'setFkiInvoiceID',
        'fkiSalarypreparationID' => 'setFkiSalarypreparationID'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pkiCommunicationattachmentID' => 'getPkiCommunicationattachmentID',
        'fkiAttachmentID' => 'getFkiAttachmentID',
        'fkiInvoiceID' => 'getFkiInvoiceID',
        'fkiSalarypreparationID' => 'getFkiSalarypreparationID'
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
        $this->setIfExists('pkiCommunicationattachmentID', $data ?? [], null);
        $this->setIfExists('fkiAttachmentID', $data ?? [], null);
        $this->setIfExists('fkiInvoiceID', $data ?? [], null);
        $this->setIfExists('fkiSalarypreparationID', $data ?? [], null);
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

        if (!is_null($this->container['fkiAttachmentID']) && ($this->container['fkiAttachmentID'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiAttachmentID', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['fkiInvoiceID']) && ($this->container['fkiInvoiceID'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiInvoiceID', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['fkiSalarypreparationID']) && ($this->container['fkiSalarypreparationID'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiSalarypreparationID', must be bigger than or equal to 0.";
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
     * Gets pkiCommunicationattachmentID
     *
     * @return int|null
     */
    public function getPkiCommunicationattachmentID()
    {
        return $this->container['pkiCommunicationattachmentID'];
    }

    /**
     * Sets pkiCommunicationattachmentID
     *
     * @param int|null $pkiCommunicationattachmentID The unique ID of the Communicationattachment
     *
     * @return self
     */
    public function setPkiCommunicationattachmentID($pkiCommunicationattachmentID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($pkiCommunicationattachmentID)) {
            //throw new \InvalidArgumentException('non-nullable pkiCommunicationattachmentID cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['pkiCommunicationattachmentID'] = $pkiCommunicationattachmentID;
        $this->container['pkiCommunicationattachmentID'] = (is_null($pkiCommunicationattachmentID) ? null : (int) $pkiCommunicationattachmentID);

        return $this;
    }

    /**
     * Gets fkiAttachmentID
     *
     * @return int|null
     */
    public function getFkiAttachmentID()
    {
        return $this->container['fkiAttachmentID'];
    }

    /**
     * Sets fkiAttachmentID
     *
     * @param int|null $fkiAttachmentID The unique ID of the Attachment.
     *
     * @return self
     */
    public function setFkiAttachmentID($fkiAttachmentID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($fkiAttachmentID)) {
            //throw new \InvalidArgumentException('non-nullable fkiAttachmentID cannot be null');
        //}

//        if (($fkiAttachmentID < 0)) {
        if (!is_null($fkiAttachmentID) && ($fkiAttachmentID < 0)) {
            throw new \InvalidArgumentException('invalid value for $fkiAttachmentID when calling CommunicationattachmentRequest., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['fkiAttachmentID'] = $fkiAttachmentID;
        $this->container['fkiAttachmentID'] = (is_null($fkiAttachmentID) ? null : (int) $fkiAttachmentID);

        return $this;
    }

    /**
     * Gets fkiInvoiceID
     *
     * @return int|null
     */
    public function getFkiInvoiceID()
    {
        return $this->container['fkiInvoiceID'];
    }

    /**
     * Sets fkiInvoiceID
     *
     * @param int|null $fkiInvoiceID The unique ID of the Invoice.
     *
     * @return self
     */
    public function setFkiInvoiceID($fkiInvoiceID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($fkiInvoiceID)) {
            //throw new \InvalidArgumentException('non-nullable fkiInvoiceID cannot be null');
        //}

//        if (($fkiInvoiceID < 0)) {
        if (!is_null($fkiInvoiceID) && ($fkiInvoiceID < 0)) {
            throw new \InvalidArgumentException('invalid value for $fkiInvoiceID when calling CommunicationattachmentRequest., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['fkiInvoiceID'] = $fkiInvoiceID;
        $this->container['fkiInvoiceID'] = (is_null($fkiInvoiceID) ? null : (int) $fkiInvoiceID);

        return $this;
    }

    /**
     * Gets fkiSalarypreparationID
     *
     * @return int|null
     */
    public function getFkiSalarypreparationID()
    {
        return $this->container['fkiSalarypreparationID'];
    }

    /**
     * Sets fkiSalarypreparationID
     *
     * @param int|null $fkiSalarypreparationID The unique ID of the Salarypreparation.
     *
     * @return self
     */
    public function setFkiSalarypreparationID($fkiSalarypreparationID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($fkiSalarypreparationID)) {
            //throw new \InvalidArgumentException('non-nullable fkiSalarypreparationID cannot be null');
        //}

//        if (($fkiSalarypreparationID < 0)) {
        if (!is_null($fkiSalarypreparationID) && ($fkiSalarypreparationID < 0)) {
            throw new \InvalidArgumentException('invalid value for $fkiSalarypreparationID when calling CommunicationattachmentRequest., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['fkiSalarypreparationID'] = $fkiSalarypreparationID;
        $this->container['fkiSalarypreparationID'] = (is_null($fkiSalarypreparationID) ? null : (int) $fkiSalarypreparationID);

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


