<?php
/**
 * EzsignfoldersignerassociationRequest
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
 * OpenAPI Generator version: 7.2.0
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
 * EzsignfoldersignerassociationRequest Class Doc Comment
 *
 * @category Class
 * @description An Ezsignfoldersignerassociation Object
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class EzsignfoldersignerassociationRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ezsignfoldersignerassociation-Request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'pkiEzsignfoldersignerassociationID' => 'int',
        'fkiUserID' => 'int',
        'fkiEzsignsignergroupID' => 'int',
        'fkiEzsignfolderID' => 'int',
        'bEzsignfoldersignerassociationReceivecopy' => 'bool',
        'tEzsignfoldersignerassociationMessage' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'pkiEzsignfoldersignerassociationID' => null,
        'fkiUserID' => null,
        'fkiEzsignsignergroupID' => null,
        'fkiEzsignfolderID' => null,
        'bEzsignfoldersignerassociationReceivecopy' => null,
        'tEzsignfoldersignerassociationMessage' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'pkiEzsignfoldersignerassociationID' => false,
		'fkiUserID' => false,
		'fkiEzsignsignergroupID' => false,
		'fkiEzsignfolderID' => false,
		'bEzsignfoldersignerassociationReceivecopy' => false,
		'tEzsignfoldersignerassociationMessage' => false
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
        'pkiEzsignfoldersignerassociationID' => 'pkiEzsignfoldersignerassociationID',
        'fkiUserID' => 'fkiUserID',
        'fkiEzsignsignergroupID' => 'fkiEzsignsignergroupID',
        'fkiEzsignfolderID' => 'fkiEzsignfolderID',
        'bEzsignfoldersignerassociationReceivecopy' => 'bEzsignfoldersignerassociationReceivecopy',
        'tEzsignfoldersignerassociationMessage' => 'tEzsignfoldersignerassociationMessage'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pkiEzsignfoldersignerassociationID' => 'setPkiEzsignfoldersignerassociationID',
        'fkiUserID' => 'setFkiUserID',
        'fkiEzsignsignergroupID' => 'setFkiEzsignsignergroupID',
        'fkiEzsignfolderID' => 'setFkiEzsignfolderID',
        'bEzsignfoldersignerassociationReceivecopy' => 'setBEzsignfoldersignerassociationReceivecopy',
        'tEzsignfoldersignerassociationMessage' => 'setTEzsignfoldersignerassociationMessage'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pkiEzsignfoldersignerassociationID' => 'getPkiEzsignfoldersignerassociationID',
        'fkiUserID' => 'getFkiUserID',
        'fkiEzsignsignergroupID' => 'getFkiEzsignsignergroupID',
        'fkiEzsignfolderID' => 'getFkiEzsignfolderID',
        'bEzsignfoldersignerassociationReceivecopy' => 'getBEzsignfoldersignerassociationReceivecopy',
        'tEzsignfoldersignerassociationMessage' => 'getTEzsignfoldersignerassociationMessage'
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
        $this->setIfExists('pkiEzsignfoldersignerassociationID', $data ?? [], null);
        $this->setIfExists('fkiUserID', $data ?? [], null);
        $this->setIfExists('fkiEzsignsignergroupID', $data ?? [], null);
        $this->setIfExists('fkiEzsignfolderID', $data ?? [], null);
        $this->setIfExists('bEzsignfoldersignerassociationReceivecopy', $data ?? [], null);
        $this->setIfExists('tEzsignfoldersignerassociationMessage', $data ?? [], null);
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

        if (!is_null($this->container['pkiEzsignfoldersignerassociationID']) && ($this->container['pkiEzsignfoldersignerassociationID'] < 0)) {
            $invalidProperties[] = "invalid value for 'pkiEzsignfoldersignerassociationID', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['fkiUserID']) && ($this->container['fkiUserID'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiUserID', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['fkiEzsignsignergroupID']) && ($this->container['fkiEzsignsignergroupID'] > 65535)) {
            $invalidProperties[] = "invalid value for 'fkiEzsignsignergroupID', must be smaller than or equal to 65535.";
        }

        if (!is_null($this->container['fkiEzsignsignergroupID']) && ($this->container['fkiEzsignsignergroupID'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiEzsignsignergroupID', must be bigger than or equal to 0.";
        }

        if ($this->container['fkiEzsignfolderID'] === null) {
            $invalidProperties[] = "'fkiEzsignfolderID' can't be null";
        }
        if (($this->container['fkiEzsignfolderID'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiEzsignfolderID', must be bigger than or equal to 0.";
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
     * Gets pkiEzsignfoldersignerassociationID
     *
     * @return int|null
     */
    public function getPkiEzsignfoldersignerassociationID()
    {
        return $this->container['pkiEzsignfoldersignerassociationID'];
    }

    /**
     * Sets pkiEzsignfoldersignerassociationID
     *
     * @param int|null $pkiEzsignfoldersignerassociationID The unique ID of the Ezsignfoldersignerassociation
     *
     * @return self
     */
    public function setPkiEzsignfoldersignerassociationID($pkiEzsignfoldersignerassociationID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($pkiEzsignfoldersignerassociationID)) {
            //throw new \InvalidArgumentException('non-nullable pkiEzsignfoldersignerassociationID cannot be null');
        //}

//        if (($pkiEzsignfoldersignerassociationID < 0)) {
        if (!is_null($pkiEzsignfoldersignerassociationID) && ($pkiEzsignfoldersignerassociationID < 0)) {
            throw new \InvalidArgumentException('invalid value for $pkiEzsignfoldersignerassociationID when calling EzsignfoldersignerassociationRequest., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['pkiEzsignfoldersignerassociationID'] = $pkiEzsignfoldersignerassociationID;
        $this->container['pkiEzsignfoldersignerassociationID'] = (is_null($pkiEzsignfoldersignerassociationID) ? null : (int) $pkiEzsignfoldersignerassociationID);

        return $this;
    }

    /**
     * Gets fkiUserID
     *
     * @return int|null
     */
    public function getFkiUserID()
    {
        return $this->container['fkiUserID'];
    }

    /**
     * Sets fkiUserID
     *
     * @param int|null $fkiUserID The unique ID of the User
     *
     * @return self
     */
    public function setFkiUserID($fkiUserID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($fkiUserID)) {
            //throw new \InvalidArgumentException('non-nullable fkiUserID cannot be null');
        //}

//        if (($fkiUserID < 0)) {
        if (!is_null($fkiUserID) && ($fkiUserID < 0)) {
            throw new \InvalidArgumentException('invalid value for $fkiUserID when calling EzsignfoldersignerassociationRequest., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['fkiUserID'] = $fkiUserID;
        $this->container['fkiUserID'] = (is_null($fkiUserID) ? null : (int) $fkiUserID);

        return $this;
    }

    /**
     * Gets fkiEzsignsignergroupID
     *
     * @return int|null
     */
    public function getFkiEzsignsignergroupID()
    {
        return $this->container['fkiEzsignsignergroupID'];
    }

    /**
     * Sets fkiEzsignsignergroupID
     *
     * @param int|null $fkiEzsignsignergroupID The unique ID of the Ezsignsignergroup
     *
     * @return self
     */
    public function setFkiEzsignsignergroupID($fkiEzsignsignergroupID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($fkiEzsignsignergroupID)) {
            //throw new \InvalidArgumentException('non-nullable fkiEzsignsignergroupID cannot be null');
        //}

//        if (($fkiEzsignsignergroupID > 65535)) {
        if (!is_null($fkiEzsignsignergroupID) && ($fkiEzsignsignergroupID > 65535)) {
            throw new \InvalidArgumentException('invalid value for $fkiEzsignsignergroupID when calling EzsignfoldersignerassociationRequest., must be smaller than or equal to 65535.');
        }
//        if (($fkiEzsignsignergroupID < 0)) {
        if (!is_null($fkiEzsignsignergroupID) && ($fkiEzsignsignergroupID < 0)) {
            throw new \InvalidArgumentException('invalid value for $fkiEzsignsignergroupID when calling EzsignfoldersignerassociationRequest., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['fkiEzsignsignergroupID'] = $fkiEzsignsignergroupID;
        $this->container['fkiEzsignsignergroupID'] = (is_null($fkiEzsignsignergroupID) ? null : (int) $fkiEzsignsignergroupID);

        return $this;
    }

    /**
     * Gets fkiEzsignfolderID
     *
     * @return int
     */
    public function getFkiEzsignfolderID()
    {
        return $this->container['fkiEzsignfolderID'];
    }

    /**
     * Sets fkiEzsignfolderID
     *
     * @param int $fkiEzsignfolderID The unique ID of the Ezsignfolder
     *
     * @return self
     */
    public function setFkiEzsignfolderID($fkiEzsignfolderID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($fkiEzsignfolderID)) {
            //throw new \InvalidArgumentException('non-nullable fkiEzsignfolderID cannot be null');
        //}

//        if (($fkiEzsignfolderID < 0)) {
        if (($fkiEzsignfolderID < 0)) {
            throw new \InvalidArgumentException('invalid value for $fkiEzsignfolderID when calling EzsignfoldersignerassociationRequest., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['fkiEzsignfolderID'] = $fkiEzsignfolderID;
        $this->container['fkiEzsignfolderID'] = (is_null($fkiEzsignfolderID) ? null : (int) $fkiEzsignfolderID);

        return $this;
    }

    /**
     * Gets bEzsignfoldersignerassociationReceivecopy
     *
     * @return bool|null
     */
    public function getBEzsignfoldersignerassociationReceivecopy()
    {
        return $this->container['bEzsignfoldersignerassociationReceivecopy'];
    }

    /**
     * Sets bEzsignfoldersignerassociationReceivecopy
     *
     * @param bool|null $bEzsignfoldersignerassociationReceivecopy If this flag is true. The signatory will receive a copy of every signed Ezsigndocument even if it ain't required to sign the document.
     *
     * @return self
     */
    public function setBEzsignfoldersignerassociationReceivecopy($bEzsignfoldersignerassociationReceivecopy)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($bEzsignfoldersignerassociationReceivecopy)) {
            //throw new \InvalidArgumentException('non-nullable bEzsignfoldersignerassociationReceivecopy cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['bEzsignfoldersignerassociationReceivecopy'] = $bEzsignfoldersignerassociationReceivecopy;
        $this->container['bEzsignfoldersignerassociationReceivecopy'] = (is_null($bEzsignfoldersignerassociationReceivecopy) ? null : (bool) $bEzsignfoldersignerassociationReceivecopy);

        return $this;
    }

    /**
     * Gets tEzsignfoldersignerassociationMessage
     *
     * @return string|null
     */
    public function getTEzsignfoldersignerassociationMessage()
    {
        return is_null($this->container['tEzsignfoldersignerassociationMessage']) ? null : trim($this->container['tEzsignfoldersignerassociationMessage']);
    }

    /**
     * Sets tEzsignfoldersignerassociationMessage
     *
     * @param string|null $tEzsignfoldersignerassociationMessage A custom text message that will be added to the email sent.
     *
     * @return self
     */
    public function setTEzsignfoldersignerassociationMessage($tEzsignfoldersignerassociationMessage)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($tEzsignfoldersignerassociationMessage)) {
            //throw new \InvalidArgumentException('non-nullable tEzsignfoldersignerassociationMessage cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['tEzsignfoldersignerassociationMessage'] = $tEzsignfoldersignerassociationMessage;
        $this->container['tEzsignfoldersignerassociationMessage'] = (is_null($tEzsignfoldersignerassociationMessage) ? null : trim((string) $tEzsignfoldersignerassociationMessage));

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


