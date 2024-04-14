<?php
/**
 * DiscussionmessageRequestPatch
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
 * The version of the OpenAPI document: 1.2.0
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
 * DiscussionmessageRequestPatch Class Doc Comment
 *
 * @category Class
 * @description A Discussionmessage Object
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class DiscussionmessageRequestPatch implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'discussionmessage-RequestPatch';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'fkiDiscussionmembershipIDActionrequired' => 'int',
        'tDiscussionmessageContent' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'fkiDiscussionmembershipIDActionrequired' => null,
        'tDiscussionmessageContent' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'fkiDiscussionmembershipIDActionrequired' => false,
		'tDiscussionmessageContent' => false
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
        'fkiDiscussionmembershipIDActionrequired' => 'fkiDiscussionmembershipIDActionrequired',
        'tDiscussionmessageContent' => 'tDiscussionmessageContent'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'fkiDiscussionmembershipIDActionrequired' => 'setFkiDiscussionmembershipIDActionrequired',
        'tDiscussionmessageContent' => 'setTDiscussionmessageContent'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'fkiDiscussionmembershipIDActionrequired' => 'getFkiDiscussionmembershipIDActionrequired',
        'tDiscussionmessageContent' => 'getTDiscussionmessageContent'
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
        $this->setIfExists('fkiDiscussionmembershipIDActionrequired', $data ?? [], null);
        $this->setIfExists('tDiscussionmessageContent', $data ?? [], null);
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

        if (!is_null($this->container['fkiDiscussionmembershipIDActionrequired']) && ($this->container['fkiDiscussionmembershipIDActionrequired'] > 16777215)) {
            $invalidProperties[] = "invalid value for 'fkiDiscussionmembershipIDActionrequired', must be smaller than or equal to 16777215.";
        }

        if (!is_null($this->container['fkiDiscussionmembershipIDActionrequired']) && ($this->container['fkiDiscussionmembershipIDActionrequired'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiDiscussionmembershipIDActionrequired', must be bigger than or equal to 0.";
        }

//        if (!is_null($this->container['tDiscussionmessageContent']) && !preg_match("/^.{0,65535}$/", $this->container['tDiscussionmessageContent'])) {
        if (!is_null($this->container['tDiscussionmessageContent']) && !preg_match("/(*UTF8)^.{0,65535}$/", $this->container['tDiscussionmessageContent'])) {
            $invalidProperties[] = "invalid value for 'tDiscussionmessageContent', must be conform to the pattern /^.{0,65535}$/.";
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
     * Gets fkiDiscussionmembershipIDActionrequired
     *
     * @return int|null
     */
    public function getFkiDiscussionmembershipIDActionrequired()
    {
        return $this->container['fkiDiscussionmembershipIDActionrequired'];
    }

    /**
     * Sets fkiDiscussionmembershipIDActionrequired
     *
     * @param int|null $fkiDiscussionmembershipIDActionrequired The unique ID of the Discussionmembership
     *
     * @return self
     */
    public function setFkiDiscussionmembershipIDActionrequired($fkiDiscussionmembershipIDActionrequired)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($fkiDiscussionmembershipIDActionrequired)) {
            //throw new \InvalidArgumentException('non-nullable fkiDiscussionmembershipIDActionrequired cannot be null');
        //}

//        if (($fkiDiscussionmembershipIDActionrequired > 16777215)) {
        if (!is_null($fkiDiscussionmembershipIDActionrequired) && ($fkiDiscussionmembershipIDActionrequired > 16777215)) {
            throw new \InvalidArgumentException('invalid value for $fkiDiscussionmembershipIDActionrequired when calling DiscussionmessageRequestPatch., must be smaller than or equal to 16777215.');
        }
//        if (($fkiDiscussionmembershipIDActionrequired < 0)) {
        if (!is_null($fkiDiscussionmembershipIDActionrequired) && ($fkiDiscussionmembershipIDActionrequired < 0)) {
            throw new \InvalidArgumentException('invalid value for $fkiDiscussionmembershipIDActionrequired when calling DiscussionmessageRequestPatch., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['fkiDiscussionmembershipIDActionrequired'] = $fkiDiscussionmembershipIDActionrequired;
        $this->container['fkiDiscussionmembershipIDActionrequired'] = (is_null($fkiDiscussionmembershipIDActionrequired) ? null : (int) $fkiDiscussionmembershipIDActionrequired);

        return $this;
    }

    /**
     * Gets tDiscussionmessageContent
     *
     * @return string|null
     */
    public function getTDiscussionmessageContent()
    {
        return is_null($this->container['tDiscussionmessageContent']) ? null : trim($this->container['tDiscussionmessageContent']);
    }

    /**
     * Sets tDiscussionmessageContent
     *
     * @param string|null $tDiscussionmessageContent The content of the Discussionmessage
     *
     * @return self
     */
    public function setTDiscussionmessageContent($tDiscussionmessageContent)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($tDiscussionmessageContent)) {
            //throw new \InvalidArgumentException('non-nullable tDiscussionmessageContent cannot be null');
        //}

//        if ((!preg_match("/^.{0,65535}$/", ObjectSerializer::toString($tDiscussionmessageContent)))) {
        if (!is_null($tDiscussionmessageContent) && (!preg_match("/(*UTF8)^.{0,65535}$/", ObjectSerializer::toString($tDiscussionmessageContent)))) {
            throw new \InvalidArgumentException("invalid value for \$tDiscussionmessageContent when calling DiscussionmessageRequestPatch., must conform to the pattern /^.{0,65535}$/.");
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['tDiscussionmessageContent'] = $tDiscussionmessageContent;
        $this->container['tDiscussionmessageContent'] = (is_null($tDiscussionmessageContent) ? null : trim((string) $tDiscussionmessageContent));

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


