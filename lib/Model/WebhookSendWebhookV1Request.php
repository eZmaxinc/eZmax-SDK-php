<?php
/**
 * WebhookSendWebhookV1Request
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
 * Generator version: 7.9.0
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
 * WebhookSendWebhookV1Request Class Doc Comment
 *
 * @category Class
 * @description Request for POST /1/object/webhook/sendWebhook
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class WebhookSendWebhookV1Request implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'webhook-sendWebhook-v1-Request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'eWebhookModule' => '\eZmaxAPI\Model\FieldEWebhookModule',
        'eWebhookEzsignevent' => '\eZmaxAPI\Model\CustomEWebhookEzsignevent',
        'eWebhookManagementevent' => '\eZmaxAPI\Model\FieldEWebhookManagementevent',
        'fkiEzsignfolderID' => 'int',
        'fkiEzsigndocumentID' => 'int',
        'fkiEzsignsignerID' => 'int',
        'fkiUserID' => 'int',
        'fkiUserstagedID' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'eWebhookModule' => null,
        'eWebhookEzsignevent' => null,
        'eWebhookManagementevent' => null,
        'fkiEzsignfolderID' => null,
        'fkiEzsigndocumentID' => null,
        'fkiEzsignsignerID' => null,
        'fkiUserID' => null,
        'fkiUserstagedID' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'eWebhookModule' => false,
		'eWebhookEzsignevent' => false,
		'eWebhookManagementevent' => false,
		'fkiEzsignfolderID' => false,
		'fkiEzsigndocumentID' => false,
		'fkiEzsignsignerID' => false,
		'fkiUserID' => false,
		'fkiUserstagedID' => false
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
        'eWebhookModule' => 'eWebhookModule',
        'eWebhookEzsignevent' => 'eWebhookEzsignevent',
        'eWebhookManagementevent' => 'eWebhookManagementevent',
        'fkiEzsignfolderID' => 'fkiEzsignfolderID',
        'fkiEzsigndocumentID' => 'fkiEzsigndocumentID',
        'fkiEzsignsignerID' => 'fkiEzsignsignerID',
        'fkiUserID' => 'fkiUserID',
        'fkiUserstagedID' => 'fkiUserstagedID'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'eWebhookModule' => 'setEWebhookModule',
        'eWebhookEzsignevent' => 'setEWebhookEzsignevent',
        'eWebhookManagementevent' => 'setEWebhookManagementevent',
        'fkiEzsignfolderID' => 'setFkiEzsignfolderID',
        'fkiEzsigndocumentID' => 'setFkiEzsigndocumentID',
        'fkiEzsignsignerID' => 'setFkiEzsignsignerID',
        'fkiUserID' => 'setFkiUserID',
        'fkiUserstagedID' => 'setFkiUserstagedID'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'eWebhookModule' => 'getEWebhookModule',
        'eWebhookEzsignevent' => 'getEWebhookEzsignevent',
        'eWebhookManagementevent' => 'getEWebhookManagementevent',
        'fkiEzsignfolderID' => 'getFkiEzsignfolderID',
        'fkiEzsigndocumentID' => 'getFkiEzsigndocumentID',
        'fkiEzsignsignerID' => 'getFkiEzsignsignerID',
        'fkiUserID' => 'getFkiUserID',
        'fkiUserstagedID' => 'getFkiUserstagedID'
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
        $this->setIfExists('eWebhookModule', $data ?? [], null);
        $this->setIfExists('eWebhookEzsignevent', $data ?? [], null);
        $this->setIfExists('eWebhookManagementevent', $data ?? [], null);
        $this->setIfExists('fkiEzsignfolderID', $data ?? [], null);
        $this->setIfExists('fkiEzsigndocumentID', $data ?? [], null);
        $this->setIfExists('fkiEzsignsignerID', $data ?? [], null);
        $this->setIfExists('fkiUserID', $data ?? [], null);
        $this->setIfExists('fkiUserstagedID', $data ?? [], null);
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

        if ($this->container['eWebhookModule'] === null) {
            $invalidProperties[] = "'eWebhookModule' can't be null";
        }
        if (!is_null($this->container['fkiEzsignfolderID']) && ($this->container['fkiEzsignfolderID'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiEzsignfolderID', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['fkiEzsigndocumentID']) && ($this->container['fkiEzsigndocumentID'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiEzsigndocumentID', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['fkiEzsignsignerID']) && ($this->container['fkiEzsignsignerID'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiEzsignsignerID', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['fkiUserID']) && ($this->container['fkiUserID'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiUserID', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['fkiUserstagedID']) && ($this->container['fkiUserstagedID'] > 65535)) {
            $invalidProperties[] = "invalid value for 'fkiUserstagedID', must be smaller than or equal to 65535.";
        }

        if (!is_null($this->container['fkiUserstagedID']) && ($this->container['fkiUserstagedID'] < 1)) {
            $invalidProperties[] = "invalid value for 'fkiUserstagedID', must be bigger than or equal to 1.";
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
     * Gets eWebhookModule
     *
     * @return \eZmaxAPI\Model\FieldEWebhookModule
     */
    public function getEWebhookModule()
    {
        return $this->container['eWebhookModule'];
    }

    /**
     * Sets eWebhookModule
     *
     * @param \eZmaxAPI\Model\FieldEWebhookModule $eWebhookModule eWebhookModule
     *
     * @return self
     */
    public function setEWebhookModule($eWebhookModule)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($eWebhookModule)) {
            //throw new \InvalidArgumentException('non-nullable eWebhookModule cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['eWebhookModule'] = $eWebhookModule;
        $this->container['eWebhookModule'] = $eWebhookModule;

        return $this;
    }

    /**
     * Gets eWebhookEzsignevent
     *
     * @return \eZmaxAPI\Model\CustomEWebhookEzsignevent|null
     */
    public function getEWebhookEzsignevent()
    {
        return $this->container['eWebhookEzsignevent'];
    }

    /**
     * Sets eWebhookEzsignevent
     *
     * @param \eZmaxAPI\Model\CustomEWebhookEzsignevent|null $eWebhookEzsignevent eWebhookEzsignevent
     *
     * @return self
     */
    public function setEWebhookEzsignevent($eWebhookEzsignevent)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($eWebhookEzsignevent)) {
            //throw new \InvalidArgumentException('non-nullable eWebhookEzsignevent cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['eWebhookEzsignevent'] = $eWebhookEzsignevent;
        $this->container['eWebhookEzsignevent'] = $eWebhookEzsignevent;

        return $this;
    }

    /**
     * Gets eWebhookManagementevent
     *
     * @return \eZmaxAPI\Model\FieldEWebhookManagementevent|null
     */
    public function getEWebhookManagementevent()
    {
        return $this->container['eWebhookManagementevent'];
    }

    /**
     * Sets eWebhookManagementevent
     *
     * @param \eZmaxAPI\Model\FieldEWebhookManagementevent|null $eWebhookManagementevent eWebhookManagementevent
     *
     * @return self
     */
    public function setEWebhookManagementevent($eWebhookManagementevent)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($eWebhookManagementevent)) {
            //throw new \InvalidArgumentException('non-nullable eWebhookManagementevent cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['eWebhookManagementevent'] = $eWebhookManagementevent;
        $this->container['eWebhookManagementevent'] = $eWebhookManagementevent;

        return $this;
    }

    /**
     * Gets fkiEzsignfolderID
     *
     * @return int|null
     */
    public function getFkiEzsignfolderID()
    {
        return $this->container['fkiEzsignfolderID'];
    }

    /**
     * Sets fkiEzsignfolderID
     *
     * @param int|null $fkiEzsignfolderID The unique ID of the Ezsignfolder
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
        if (!is_null($fkiEzsignfolderID) && ($fkiEzsignfolderID < 0)) {
            throw new \InvalidArgumentException('invalid value '.(is_null($fkiEzsignfolderID)?'null':'"'.$fkiEzsignfolderID.'"').' for fkiEzsignfolderID when calling WebhookSendWebhookV1Request., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['fkiEzsignfolderID'] = $fkiEzsignfolderID;
        $this->container['fkiEzsignfolderID'] = (is_null($fkiEzsignfolderID) ? null : (int) $fkiEzsignfolderID);

        return $this;
    }

    /**
     * Gets fkiEzsigndocumentID
     *
     * @return int|null
     */
    public function getFkiEzsigndocumentID()
    {
        return $this->container['fkiEzsigndocumentID'];
    }

    /**
     * Sets fkiEzsigndocumentID
     *
     * @param int|null $fkiEzsigndocumentID The unique ID of the Ezsigndocument
     *
     * @return self
     */
    public function setFkiEzsigndocumentID($fkiEzsigndocumentID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($fkiEzsigndocumentID)) {
            //throw new \InvalidArgumentException('non-nullable fkiEzsigndocumentID cannot be null');
        //}

//        if (($fkiEzsigndocumentID < 0)) {
        if (!is_null($fkiEzsigndocumentID) && ($fkiEzsigndocumentID < 0)) {
            throw new \InvalidArgumentException('invalid value '.(is_null($fkiEzsigndocumentID)?'null':'"'.$fkiEzsigndocumentID.'"').' for fkiEzsigndocumentID when calling WebhookSendWebhookV1Request., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['fkiEzsigndocumentID'] = $fkiEzsigndocumentID;
        $this->container['fkiEzsigndocumentID'] = (is_null($fkiEzsigndocumentID) ? null : (int) $fkiEzsigndocumentID);

        return $this;
    }

    /**
     * Gets fkiEzsignsignerID
     *
     * @return int|null
     */
    public function getFkiEzsignsignerID()
    {
        return $this->container['fkiEzsignsignerID'];
    }

    /**
     * Sets fkiEzsignsignerID
     *
     * @param int|null $fkiEzsignsignerID The unique ID of the Ezsignsigner
     *
     * @return self
     */
    public function setFkiEzsignsignerID($fkiEzsignsignerID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($fkiEzsignsignerID)) {
            //throw new \InvalidArgumentException('non-nullable fkiEzsignsignerID cannot be null');
        //}

//        if (($fkiEzsignsignerID < 0)) {
        if (!is_null($fkiEzsignsignerID) && ($fkiEzsignsignerID < 0)) {
            throw new \InvalidArgumentException('invalid value '.(is_null($fkiEzsignsignerID)?'null':'"'.$fkiEzsignsignerID.'"').' for fkiEzsignsignerID when calling WebhookSendWebhookV1Request., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['fkiEzsignsignerID'] = $fkiEzsignsignerID;
        $this->container['fkiEzsignsignerID'] = (is_null($fkiEzsignsignerID) ? null : (int) $fkiEzsignsignerID);

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
            throw new \InvalidArgumentException('invalid value '.(is_null($fkiUserID)?'null':'"'.$fkiUserID.'"').' for fkiUserID when calling WebhookSendWebhookV1Request., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['fkiUserID'] = $fkiUserID;
        $this->container['fkiUserID'] = (is_null($fkiUserID) ? null : (int) $fkiUserID);

        return $this;
    }

    /**
     * Gets fkiUserstagedID
     *
     * @return int|null
     */
    public function getFkiUserstagedID()
    {
        return $this->container['fkiUserstagedID'];
    }

    /**
     * Sets fkiUserstagedID
     *
     * @param int|null $fkiUserstagedID The unique ID of the Userstaged
     *
     * @return self
     */
    public function setFkiUserstagedID($fkiUserstagedID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($fkiUserstagedID)) {
            //throw new \InvalidArgumentException('non-nullable fkiUserstagedID cannot be null');
        //}

//        if (($fkiUserstagedID > 65535)) {
        if (!is_null($fkiUserstagedID) && ($fkiUserstagedID > 65535)) {
            throw new \InvalidArgumentException('invalid value '.(is_null($fkiUserstagedID)?'null':'"'.$fkiUserstagedID.'"').' for fkiUserstagedID when calling WebhookSendWebhookV1Request., must be smaller than or equal to 65535.');
        }
//        if (($fkiUserstagedID < 1)) {
        if (!is_null($fkiUserstagedID) && ($fkiUserstagedID < 1)) {
            throw new \InvalidArgumentException('invalid value '.(is_null($fkiUserstagedID)?'null':'"'.$fkiUserstagedID.'"').' for fkiUserstagedID when calling WebhookSendWebhookV1Request., must be bigger than or equal to 1.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['fkiUserstagedID'] = $fkiUserstagedID;
        $this->container['fkiUserstagedID'] = (is_null($fkiUserstagedID) ? null : (int) $fkiUserstagedID);

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


