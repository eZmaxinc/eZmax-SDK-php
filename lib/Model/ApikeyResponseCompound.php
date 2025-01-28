<?php
/**
 * ApikeyResponseCompound
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
 * Generator version: 7.11.0
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
 * ApikeyResponseCompound Class Doc Comment
 *
 * @category Class
 * @description An Apikey Object and children to create a complete structure
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ApikeyResponseCompound implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'apikey-ResponseCompound';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'pkiApikeyID' => 'int',
        'fkiUserID' => 'int',
        'objApikeyDescription' => '\eZmaxAPI\Model\MultilingualApikeyDescription',
        'objContactName' => '\eZmaxAPI\Model\CustomContactNameResponse',
        'sApikeyApikey' => 'string',
        'sApikeySecret' => 'string',
        'bApikeyIsactive' => 'bool',
        'bApikeyIssigned' => 'bool',
        'objAudit' => '\eZmaxAPI\Model\CommonAudit'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'pkiApikeyID' => null,
        'fkiUserID' => null,
        'objApikeyDescription' => null,
        'objContactName' => null,
        'sApikeyApikey' => null,
        'sApikeySecret' => null,
        'bApikeyIsactive' => null,
        'bApikeyIssigned' => null,
        'objAudit' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'pkiApikeyID' => false,
		'fkiUserID' => false,
		'objApikeyDescription' => false,
		'objContactName' => false,
		'sApikeyApikey' => false,
		'sApikeySecret' => false,
		'bApikeyIsactive' => false,
		'bApikeyIssigned' => false,
		'objAudit' => false
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
        'pkiApikeyID' => 'pkiApikeyID',
        'fkiUserID' => 'fkiUserID',
        'objApikeyDescription' => 'objApikeyDescription',
        'objContactName' => 'objContactName',
        'sApikeyApikey' => 'sApikeyApikey',
        'sApikeySecret' => 'sApikeySecret',
        'bApikeyIsactive' => 'bApikeyIsactive',
        'bApikeyIssigned' => 'bApikeyIssigned',
        'objAudit' => 'objAudit'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pkiApikeyID' => 'setPkiApikeyID',
        'fkiUserID' => 'setFkiUserID',
        'objApikeyDescription' => 'setObjApikeyDescription',
        'objContactName' => 'setObjContactName',
        'sApikeyApikey' => 'setSApikeyApikey',
        'sApikeySecret' => 'setSApikeySecret',
        'bApikeyIsactive' => 'setBApikeyIsactive',
        'bApikeyIssigned' => 'setBApikeyIssigned',
        'objAudit' => 'setObjAudit'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pkiApikeyID' => 'getPkiApikeyID',
        'fkiUserID' => 'getFkiUserID',
        'objApikeyDescription' => 'getObjApikeyDescription',
        'objContactName' => 'getObjContactName',
        'sApikeyApikey' => 'getSApikeyApikey',
        'sApikeySecret' => 'getSApikeySecret',
        'bApikeyIsactive' => 'getBApikeyIsactive',
        'bApikeyIssigned' => 'getBApikeyIssigned',
        'objAudit' => 'getObjAudit'
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
     * @param mixed[]|null $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(?array $data = null)
    {
        $this->setIfExists('pkiApikeyID', $data ?? [], null);
        $this->setIfExists('fkiUserID', $data ?? [], null);
        $this->setIfExists('objApikeyDescription', $data ?? [], null);
        $this->setIfExists('objContactName', $data ?? [], null);
        $this->setIfExists('sApikeyApikey', $data ?? [], null);
        $this->setIfExists('sApikeySecret', $data ?? [], null);
        $this->setIfExists('bApikeyIsactive', $data ?? [], null);
        $this->setIfExists('bApikeyIssigned', $data ?? [], null);
        $this->setIfExists('objAudit', $data ?? [], null);
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

        if ($this->container['pkiApikeyID'] === null) {
            $invalidProperties[] = "'pkiApikeyID' can't be null";
        }
        if (($this->container['pkiApikeyID'] < 0)) {
            $invalidProperties[] = "invalid value for 'pkiApikeyID', must be bigger than or equal to 0.";
        }

        if ($this->container['fkiUserID'] === null) {
            $invalidProperties[] = "'fkiUserID' can't be null";
        }
        if (($this->container['fkiUserID'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiUserID', must be bigger than or equal to 0.";
        }

        if ($this->container['objApikeyDescription'] === null) {
            $invalidProperties[] = "'objApikeyDescription' can't be null";
        }
        if ($this->container['objContactName'] === null) {
            $invalidProperties[] = "'objContactName' can't be null";
        }
        if ($this->container['bApikeyIsactive'] === null) {
            $invalidProperties[] = "'bApikeyIsactive' can't be null";
        }
        if ($this->container['objAudit'] === null) {
            $invalidProperties[] = "'objAudit' can't be null";
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
     * Gets pkiApikeyID
     *
     * @return int
     */
    public function getPkiApikeyID()
    {
	//return $this->container['pkiApikeyID'];
        return $this->container['pkiApikeyID'];
    }

    /**
     * Sets pkiApikeyID
     *
     * @param int $pkiApikeyID The unique ID of the Apikey
     *
     * @return self
     */
    public function setPkiApikeyID($pkiApikeyID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($pkiApikeyID)) {
            //throw new \InvalidArgumentException('non-nullable pkiApikeyID cannot be null');
        //}

	//if (($pkiApikeyID < 0)) {
        if (($pkiApikeyID < 0)) {
	    //throw new \InvalidArgumentException('invalid value for $pkiApikeyID when calling ApikeyResponseCompound., must be bigger than or equal to 0.');
            throw new \InvalidArgumentException('invalid value '.(is_null($pkiApikeyID)?'null':'"'.$pkiApikeyID.'"').' for pkiApikeyID when calling ApikeyResponseCompound., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['pkiApikeyID'] = $pkiApikeyID;
        $this->container['pkiApikeyID'] = (is_null($pkiApikeyID) ? null : (int) $pkiApikeyID);

        return $this;
    }

    /**
     * Gets fkiUserID
     *
     * @return int
     */
    public function getFkiUserID()
    {
	//return $this->container['fkiUserID'];
        return $this->container['fkiUserID'];
    }

    /**
     * Sets fkiUserID
     *
     * @param int $fkiUserID The unique ID of the User
     *
     * @return self
     */
    public function setFkiUserID($fkiUserID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($fkiUserID)) {
            //throw new \InvalidArgumentException('non-nullable fkiUserID cannot be null');
        //}

	//if (($fkiUserID < 0)) {
        if (($fkiUserID < 0)) {
	    //throw new \InvalidArgumentException('invalid value for $fkiUserID when calling ApikeyResponseCompound., must be bigger than or equal to 0.');
            throw new \InvalidArgumentException('invalid value '.(is_null($fkiUserID)?'null':'"'.$fkiUserID.'"').' for fkiUserID when calling ApikeyResponseCompound., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['fkiUserID'] = $fkiUserID;
        $this->container['fkiUserID'] = (is_null($fkiUserID) ? null : (int) $fkiUserID);

        return $this;
    }

    /**
     * Gets objApikeyDescription
     *
     * @return \eZmaxAPI\Model\MultilingualApikeyDescription
     */
    public function getObjApikeyDescription()
    {
	//return $this->container['objApikeyDescription'];
        return $this->container['objApikeyDescription'];
    }

    /**
     * Sets objApikeyDescription
     *
     * @param \eZmaxAPI\Model\MultilingualApikeyDescription $objApikeyDescription objApikeyDescription
     *
     * @return self
     */
    public function setObjApikeyDescription($objApikeyDescription)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($objApikeyDescription)) {
            //throw new \InvalidArgumentException('non-nullable objApikeyDescription cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['objApikeyDescription'] = $objApikeyDescription;
        $this->container['objApikeyDescription'] = $objApikeyDescription;

        return $this;
    }

    /**
     * Gets objContactName
     *
     * @return \eZmaxAPI\Model\CustomContactNameResponse
     */
    public function getObjContactName()
    {
	//return $this->container['objContactName'];
        return $this->container['objContactName'];
    }

    /**
     * Sets objContactName
     *
     * @param \eZmaxAPI\Model\CustomContactNameResponse $objContactName objContactName
     *
     * @return self
     */
    public function setObjContactName($objContactName)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($objContactName)) {
            //throw new \InvalidArgumentException('non-nullable objContactName cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['objContactName'] = $objContactName;
        $this->container['objContactName'] = $objContactName;

        return $this;
    }

    /**
     * Gets sApikeyApikey
     *
     * @return string|null
     */
    public function getSApikeyApikey()
    {
	//return $this->container['sApikeyApikey'];
        return is_null($this->container['sApikeyApikey']) ? null : trim($this->container['sApikeyApikey']);
    }

    /**
     * Sets sApikeyApikey
     *
     * @param string|null $sApikeyApikey The Apikey for the API key.  This will be hidden if we are not creating or regenerating the Apikey.
     *
     * @return self
     */
    public function setSApikeyApikey($sApikeyApikey)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sApikeyApikey)) {
            //throw new \InvalidArgumentException('non-nullable sApikeyApikey cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sApikeyApikey'] = $sApikeyApikey;
        $this->container['sApikeyApikey'] = (is_null($sApikeyApikey) ? null : trim((string) $sApikeyApikey));

        return $this;
    }

    /**
     * Gets sApikeySecret
     *
     * @return string|null
     */
    public function getSApikeySecret()
    {
	//return $this->container['sApikeySecret'];
        return is_null($this->container['sApikeySecret']) ? null : trim($this->container['sApikeySecret']);
    }

    /**
     * Sets sApikeySecret
     *
     * @param string|null $sApikeySecret The Secret for the API key.  This will be hidden if we are not creating or regenerating the Apikey.
     *
     * @return self
     */
    public function setSApikeySecret($sApikeySecret)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sApikeySecret)) {
            //throw new \InvalidArgumentException('non-nullable sApikeySecret cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sApikeySecret'] = $sApikeySecret;
        $this->container['sApikeySecret'] = (is_null($sApikeySecret) ? null : trim((string) $sApikeySecret));

        return $this;
    }

    /**
     * Gets bApikeyIsactive
     *
     * @return bool
     */
    public function getBApikeyIsactive()
    {
	//return $this->container['bApikeyIsactive'];
        return $this->container['bApikeyIsactive'];
    }

    /**
     * Sets bApikeyIsactive
     *
     * @param bool $bApikeyIsactive Whether the apikey is active or not
     *
     * @return self
     */
    public function setBApikeyIsactive($bApikeyIsactive)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($bApikeyIsactive)) {
            //throw new \InvalidArgumentException('non-nullable bApikeyIsactive cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['bApikeyIsactive'] = $bApikeyIsactive;
        $this->container['bApikeyIsactive'] = (is_null($bApikeyIsactive) ? null : (bool) $bApikeyIsactive);

        return $this;
    }

    /**
     * Gets bApikeyIssigned
     *
     * @return bool|null
     */
    public function getBApikeyIssigned()
    {
	//return $this->container['bApikeyIssigned'];
        return $this->container['bApikeyIssigned'];
    }

    /**
     * Sets bApikeyIssigned
     *
     * @param bool|null $bApikeyIssigned Whether the apikey is signed or not
     *
     * @return self
     */
    public function setBApikeyIssigned($bApikeyIssigned)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($bApikeyIssigned)) {
            //throw new \InvalidArgumentException('non-nullable bApikeyIssigned cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['bApikeyIssigned'] = $bApikeyIssigned;
        $this->container['bApikeyIssigned'] = (is_null($bApikeyIssigned) ? null : (bool) $bApikeyIssigned);

        return $this;
    }

    /**
     * Gets objAudit
     *
     * @return \eZmaxAPI\Model\CommonAudit
     */
    public function getObjAudit()
    {
	//return $this->container['objAudit'];
        return $this->container['objAudit'];
    }

    /**
     * Sets objAudit
     *
     * @param \eZmaxAPI\Model\CommonAudit $objAudit objAudit
     *
     * @return self
     */
    public function setObjAudit($objAudit)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($objAudit)) {
            //throw new \InvalidArgumentException('non-nullable objAudit cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['objAudit'] = $objAudit;
        $this->container['objAudit'] = $objAudit;

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


