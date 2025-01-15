<?php
/**
 * CustomEzsignfolderezsigntemplatepublicResponse
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
 * Generator version: 7.10.0
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
 * CustomEzsignfolderezsigntemplatepublicResponse Class Doc Comment
 *
 * @category Class
 * @description An Ezsignfolder Object in the context of an Ezsigntemplatepublic
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CustomEzsignfolderezsigntemplatepublicResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Custom-Ezsignfolderezsigntemplatepublic-Response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'pkiEzsignfolderID' => 'int',
        'sEzsignfolderDescription' => 'string',
        'eEzsignfolderStep' => '\eZmaxAPI\Model\FieldEEzsignfolderStep',
        'iEzsignfolderSignaturetotal' => 'int',
        'iEzsignfolderFormfieldtotal' => 'int',
        'iEzsignfolderSignaturesigned' => 'int',
        'aObjEzsignfolderezsigntemplatepublicSigner' => '\eZmaxAPI\Model\CustomEzsignfolderezsigntemplatepublicSignerResponse[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'pkiEzsignfolderID' => null,
        'sEzsignfolderDescription' => null,
        'eEzsignfolderStep' => null,
        'iEzsignfolderSignaturetotal' => null,
        'iEzsignfolderFormfieldtotal' => null,
        'iEzsignfolderSignaturesigned' => null,
        'aObjEzsignfolderezsigntemplatepublicSigner' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'pkiEzsignfolderID' => false,
		'sEzsignfolderDescription' => false,
		'eEzsignfolderStep' => false,
		'iEzsignfolderSignaturetotal' => false,
		'iEzsignfolderFormfieldtotal' => false,
		'iEzsignfolderSignaturesigned' => false,
		'aObjEzsignfolderezsigntemplatepublicSigner' => false
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
        'pkiEzsignfolderID' => 'pkiEzsignfolderID',
        'sEzsignfolderDescription' => 'sEzsignfolderDescription',
        'eEzsignfolderStep' => 'eEzsignfolderStep',
        'iEzsignfolderSignaturetotal' => 'iEzsignfolderSignaturetotal',
        'iEzsignfolderFormfieldtotal' => 'iEzsignfolderFormfieldtotal',
        'iEzsignfolderSignaturesigned' => 'iEzsignfolderSignaturesigned',
        'aObjEzsignfolderezsigntemplatepublicSigner' => 'a_objEzsignfolderezsigntemplatepublicSigner'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pkiEzsignfolderID' => 'setPkiEzsignfolderID',
        'sEzsignfolderDescription' => 'setSEzsignfolderDescription',
        'eEzsignfolderStep' => 'setEEzsignfolderStep',
        'iEzsignfolderSignaturetotal' => 'setIEzsignfolderSignaturetotal',
        'iEzsignfolderFormfieldtotal' => 'setIEzsignfolderFormfieldtotal',
        'iEzsignfolderSignaturesigned' => 'setIEzsignfolderSignaturesigned',
        'aObjEzsignfolderezsigntemplatepublicSigner' => 'setAObjEzsignfolderezsigntemplatepublicSigner'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pkiEzsignfolderID' => 'getPkiEzsignfolderID',
        'sEzsignfolderDescription' => 'getSEzsignfolderDescription',
        'eEzsignfolderStep' => 'getEEzsignfolderStep',
        'iEzsignfolderSignaturetotal' => 'getIEzsignfolderSignaturetotal',
        'iEzsignfolderFormfieldtotal' => 'getIEzsignfolderFormfieldtotal',
        'iEzsignfolderSignaturesigned' => 'getIEzsignfolderSignaturesigned',
        'aObjEzsignfolderezsigntemplatepublicSigner' => 'getAObjEzsignfolderezsigntemplatepublicSigner'
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
        $this->setIfExists('pkiEzsignfolderID', $data ?? [], null);
        $this->setIfExists('sEzsignfolderDescription', $data ?? [], null);
        $this->setIfExists('eEzsignfolderStep', $data ?? [], null);
        $this->setIfExists('iEzsignfolderSignaturetotal', $data ?? [], null);
        $this->setIfExists('iEzsignfolderFormfieldtotal', $data ?? [], null);
        $this->setIfExists('iEzsignfolderSignaturesigned', $data ?? [], null);
        $this->setIfExists('aObjEzsignfolderezsigntemplatepublicSigner', $data ?? [], null);
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

        if ($this->container['pkiEzsignfolderID'] === null) {
            $invalidProperties[] = "'pkiEzsignfolderID' can't be null";
        }
        if (($this->container['pkiEzsignfolderID'] < 0)) {
            $invalidProperties[] = "invalid value for 'pkiEzsignfolderID', must be bigger than or equal to 0.";
        }

        if ($this->container['sEzsignfolderDescription'] === null) {
            $invalidProperties[] = "'sEzsignfolderDescription' can't be null";
        }
	//if (!preg_match("/^.{0,75}$/", $this->container['sEzsignfolderDescription'])) {
        if (!is_null($this->container['sEzsignfolderDescription']) && !preg_match("/(*UTF8)^.{0,75}$/", $this->container['sEzsignfolderDescription'])) {
            $invalidProperties[] = "invalid value for 'sEzsignfolderDescription', must be conform to the pattern /^.{0,75}$/.";
        }

        if ($this->container['eEzsignfolderStep'] === null) {
            $invalidProperties[] = "'eEzsignfolderStep' can't be null";
        }
        if ($this->container['iEzsignfolderSignaturetotal'] === null) {
            $invalidProperties[] = "'iEzsignfolderSignaturetotal' can't be null";
        }
        if ($this->container['iEzsignfolderFormfieldtotal'] === null) {
            $invalidProperties[] = "'iEzsignfolderFormfieldtotal' can't be null";
        }
        if ($this->container['iEzsignfolderSignaturesigned'] === null) {
            $invalidProperties[] = "'iEzsignfolderSignaturesigned' can't be null";
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
     * Gets pkiEzsignfolderID
     *
     * @return int
     */
    public function getPkiEzsignfolderID()
    {
	//return $this->container['pkiEzsignfolderID'];
        return $this->container['pkiEzsignfolderID'];
    }

    /**
     * Sets pkiEzsignfolderID
     *
     * @param int $pkiEzsignfolderID The unique ID of the Ezsignfolder
     *
     * @return self
     */
    public function setPkiEzsignfolderID($pkiEzsignfolderID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($pkiEzsignfolderID)) {
            //throw new \InvalidArgumentException('non-nullable pkiEzsignfolderID cannot be null');
        //}

	//if (($pkiEzsignfolderID < 0)) {
        if (($pkiEzsignfolderID < 0)) {
	    //throw new \InvalidArgumentException('invalid value for $pkiEzsignfolderID when calling CustomEzsignfolderezsigntemplatepublicResponse., must be bigger than or equal to 0.');
            throw new \InvalidArgumentException('invalid value '.(is_null($pkiEzsignfolderID)?'null':'"'.$pkiEzsignfolderID.'"').' for pkiEzsignfolderID when calling CustomEzsignfolderezsigntemplatepublicResponse., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['pkiEzsignfolderID'] = $pkiEzsignfolderID;
        $this->container['pkiEzsignfolderID'] = (is_null($pkiEzsignfolderID) ? null : (int) $pkiEzsignfolderID);

        return $this;
    }

    /**
     * Gets sEzsignfolderDescription
     *
     * @return string
     */
    public function getSEzsignfolderDescription()
    {
	//return $this->container['sEzsignfolderDescription'];
        return is_null($this->container['sEzsignfolderDescription']) ? null : trim($this->container['sEzsignfolderDescription']);
    }

    /**
     * Sets sEzsignfolderDescription
     *
     * @param string $sEzsignfolderDescription The description of the Ezsignfolder
     *
     * @return self
     */
    public function setSEzsignfolderDescription($sEzsignfolderDescription)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sEzsignfolderDescription)) {
            //throw new \InvalidArgumentException('non-nullable sEzsignfolderDescription cannot be null');
        //}

	//if ((!preg_match("/^.{0,75}$/", ObjectSerializer::toString($sEzsignfolderDescription)))) {
        if (!is_null($sEzsignfolderDescription) && (!preg_match("/(*UTF8)^.{0,75}$/", ObjectSerializer::toString($sEzsignfolderDescription)))) {
	    //throw new \InvalidArgumentException("invalid value for \$sEzsignfolderDescription when calling CustomEzsignfolderezsigntemplatepublicResponse., must conform to the pattern /^.{0,75}$/.");
            throw new \InvalidArgumentException("invalid value ".(is_null($sEzsignfolderDescription)?'null':'"'.$sEzsignfolderDescription.'"')." for sEzsignfolderDescription when calling CustomEzsignfolderezsigntemplatepublicResponse., must conform to the pattern /^.{0,75}$/.");
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sEzsignfolderDescription'] = $sEzsignfolderDescription;
        $this->container['sEzsignfolderDescription'] = (is_null($sEzsignfolderDescription) ? null : trim((string) $sEzsignfolderDescription));

        return $this;
    }

    /**
     * Gets eEzsignfolderStep
     *
     * @return \eZmaxAPI\Model\FieldEEzsignfolderStep
     */
    public function getEEzsignfolderStep()
    {
	//return $this->container['eEzsignfolderStep'];
        return $this->container['eEzsignfolderStep'];
    }

    /**
     * Sets eEzsignfolderStep
     *
     * @param \eZmaxAPI\Model\FieldEEzsignfolderStep $eEzsignfolderStep eEzsignfolderStep
     *
     * @return self
     */
    public function setEEzsignfolderStep($eEzsignfolderStep)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($eEzsignfolderStep)) {
            //throw new \InvalidArgumentException('non-nullable eEzsignfolderStep cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['eEzsignfolderStep'] = $eEzsignfolderStep;
        $this->container['eEzsignfolderStep'] = $eEzsignfolderStep;

        return $this;
    }

    /**
     * Gets iEzsignfolderSignaturetotal
     *
     * @return int
     */
    public function getIEzsignfolderSignaturetotal()
    {
	//return $this->container['iEzsignfolderSignaturetotal'];
        return $this->container['iEzsignfolderSignaturetotal'];
    }

    /**
     * Sets iEzsignfolderSignaturetotal
     *
     * @param int $iEzsignfolderSignaturetotal The number of total signatures that were requested in the Ezsignfolder
     *
     * @return self
     */
    public function setIEzsignfolderSignaturetotal($iEzsignfolderSignaturetotal)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($iEzsignfolderSignaturetotal)) {
            //throw new \InvalidArgumentException('non-nullable iEzsignfolderSignaturetotal cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['iEzsignfolderSignaturetotal'] = $iEzsignfolderSignaturetotal;
        $this->container['iEzsignfolderSignaturetotal'] = (is_null($iEzsignfolderSignaturetotal) ? null : (int) $iEzsignfolderSignaturetotal);

        return $this;
    }

    /**
     * Gets iEzsignfolderFormfieldtotal
     *
     * @return int
     */
    public function getIEzsignfolderFormfieldtotal()
    {
	//return $this->container['iEzsignfolderFormfieldtotal'];
        return $this->container['iEzsignfolderFormfieldtotal'];
    }

    /**
     * Sets iEzsignfolderFormfieldtotal
     *
     * @param int $iEzsignfolderFormfieldtotal The number of total form fields that were requested in the Ezsignfolder
     *
     * @return self
     */
    public function setIEzsignfolderFormfieldtotal($iEzsignfolderFormfieldtotal)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($iEzsignfolderFormfieldtotal)) {
            //throw new \InvalidArgumentException('non-nullable iEzsignfolderFormfieldtotal cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['iEzsignfolderFormfieldtotal'] = $iEzsignfolderFormfieldtotal;
        $this->container['iEzsignfolderFormfieldtotal'] = (is_null($iEzsignfolderFormfieldtotal) ? null : (int) $iEzsignfolderFormfieldtotal);

        return $this;
    }

    /**
     * Gets iEzsignfolderSignaturesigned
     *
     * @return int
     */
    public function getIEzsignfolderSignaturesigned()
    {
	//return $this->container['iEzsignfolderSignaturesigned'];
        return $this->container['iEzsignfolderSignaturesigned'];
    }

    /**
     * Sets iEzsignfolderSignaturesigned
     *
     * @param int $iEzsignfolderSignaturesigned The number of signatures that were signed in the Ezsignfolder.
     *
     * @return self
     */
    public function setIEzsignfolderSignaturesigned($iEzsignfolderSignaturesigned)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($iEzsignfolderSignaturesigned)) {
            //throw new \InvalidArgumentException('non-nullable iEzsignfolderSignaturesigned cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['iEzsignfolderSignaturesigned'] = $iEzsignfolderSignaturesigned;
        $this->container['iEzsignfolderSignaturesigned'] = (is_null($iEzsignfolderSignaturesigned) ? null : (int) $iEzsignfolderSignaturesigned);

        return $this;
    }

    /**
     * Gets aObjEzsignfolderezsigntemplatepublicSigner
     *
     * @return \eZmaxAPI\Model\CustomEzsignfolderezsigntemplatepublicSignerResponse[]|null
     */
    public function getAObjEzsignfolderezsigntemplatepublicSigner()
    {
	//return $this->container['aObjEzsignfolderezsigntemplatepublicSigner'];
        return $this->container['aObjEzsignfolderezsigntemplatepublicSigner'];
    }

    /**
     * Sets aObjEzsignfolderezsigntemplatepublicSigner
     *
     * @param \eZmaxAPI\Model\CustomEzsignfolderezsigntemplatepublicSignerResponse[]|null $aObjEzsignfolderezsigntemplatepublicSigner aObjEzsignfolderezsigntemplatepublicSigner
     *
     * @return self
     */
    public function setAObjEzsignfolderezsigntemplatepublicSigner($aObjEzsignfolderezsigntemplatepublicSigner)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($aObjEzsignfolderezsigntemplatepublicSigner)) {
            //throw new \InvalidArgumentException('non-nullable aObjEzsignfolderezsigntemplatepublicSigner cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['aObjEzsignfolderezsigntemplatepublicSigner'] = $aObjEzsignfolderezsigntemplatepublicSigner;
        $this->container['aObjEzsignfolderezsigntemplatepublicSigner'] = $aObjEzsignfolderezsigntemplatepublicSigner;

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


