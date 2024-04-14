<?php
/**
 * EzsignsignatureSignV1Request
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
 * EzsignsignatureSignV1Request Class Doc Comment
 *
 * @category Class
 * @description Request for POST /1/object/ezsignsignature/{pkiEzsignsignatureID}/sign
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class EzsignsignatureSignV1Request implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ezsignsignature-sign-v1-Request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'fkiEzsignsigningreasonID' => 'int',
        'sValue' => 'string',
        'eAttachmentsConfirmationDecision' => 'string',
        'sAttachmentsRefusalReason' => 'string',
        'sSvg' => 'string',
        'aObjFile' => '\eZmaxAPI\Model\CommonFile[]',
        'bIsAutomatic' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'fkiEzsignsigningreasonID' => null,
        'sValue' => null,
        'eAttachmentsConfirmationDecision' => null,
        'sAttachmentsRefusalReason' => null,
        'sSvg' => null,
        'aObjFile' => null,
        'bIsAutomatic' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'fkiEzsignsigningreasonID' => false,
		'sValue' => false,
		'eAttachmentsConfirmationDecision' => false,
		'sAttachmentsRefusalReason' => false,
		'sSvg' => false,
		'aObjFile' => false,
		'bIsAutomatic' => false
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
        'fkiEzsignsigningreasonID' => 'fkiEzsignsigningreasonID',
        'sValue' => 'sValue',
        'eAttachmentsConfirmationDecision' => 'eAttachmentsConfirmationDecision',
        'sAttachmentsRefusalReason' => 'sAttachmentsRefusalReason',
        'sSvg' => 'sSvg',
        'aObjFile' => 'a_objFile',
        'bIsAutomatic' => 'bIsAutomatic'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'fkiEzsignsigningreasonID' => 'setFkiEzsignsigningreasonID',
        'sValue' => 'setSValue',
        'eAttachmentsConfirmationDecision' => 'setEAttachmentsConfirmationDecision',
        'sAttachmentsRefusalReason' => 'setSAttachmentsRefusalReason',
        'sSvg' => 'setSSvg',
        'aObjFile' => 'setAObjFile',
        'bIsAutomatic' => 'setBIsAutomatic'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'fkiEzsignsigningreasonID' => 'getFkiEzsignsigningreasonID',
        'sValue' => 'getSValue',
        'eAttachmentsConfirmationDecision' => 'getEAttachmentsConfirmationDecision',
        'sAttachmentsRefusalReason' => 'getSAttachmentsRefusalReason',
        'sSvg' => 'getSSvg',
        'aObjFile' => 'getAObjFile',
        'bIsAutomatic' => 'getBIsAutomatic'
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

    public const E_ATTACHMENTS_CONFIRMATION_DECISION_ACCEPTED = 'Accepted';
    public const E_ATTACHMENTS_CONFIRMATION_DECISION_REFUSED = 'Refused';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getEAttachmentsConfirmationDecisionAllowableValues()
    {
        return [
            self::E_ATTACHMENTS_CONFIRMATION_DECISION_ACCEPTED,
            self::E_ATTACHMENTS_CONFIRMATION_DECISION_REFUSED,
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
        $this->setIfExists('fkiEzsignsigningreasonID', $data ?? [], null);
        $this->setIfExists('sValue', $data ?? [], null);
        $this->setIfExists('eAttachmentsConfirmationDecision', $data ?? [], null);
        $this->setIfExists('sAttachmentsRefusalReason', $data ?? [], null);
        $this->setIfExists('sSvg', $data ?? [], null);
        $this->setIfExists('aObjFile', $data ?? [], null);
        $this->setIfExists('bIsAutomatic', $data ?? [], null);
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

        if (!is_null($this->container['fkiEzsignsigningreasonID']) && ($this->container['fkiEzsignsigningreasonID'] > 255)) {
            $invalidProperties[] = "invalid value for 'fkiEzsignsigningreasonID', must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['fkiEzsignsigningreasonID']) && ($this->container['fkiEzsignsigningreasonID'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiEzsignsigningreasonID', must be bigger than or equal to 0.";
        }

        $allowedValues = $this->getEAttachmentsConfirmationDecisionAllowableValues();
        if (!is_null($this->container['eAttachmentsConfirmationDecision']) && !in_array($this->container['eAttachmentsConfirmationDecision'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'eAttachmentsConfirmationDecision', must be one of '%s'",
                $this->container['eAttachmentsConfirmationDecision'],
                implode("', '", $allowedValues)
            );
        }

//        if (!is_null($this->container['sSvg']) && !preg_match("/^.{0,65535}$/", $this->container['sSvg'])) {
        if (!is_null($this->container['sSvg']) && !preg_match("/(*UTF8)^.{0,65535}$/", $this->container['sSvg'])) {
            $invalidProperties[] = "invalid value for 'sSvg', must be conform to the pattern /^.{0,65535}$/.";
        }

        if ($this->container['bIsAutomatic'] === null) {
            $invalidProperties[] = "'bIsAutomatic' can't be null";
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
     * Gets fkiEzsignsigningreasonID
     *
     * @return int|null
     */
    public function getFkiEzsignsigningreasonID()
    {
        return $this->container['fkiEzsignsigningreasonID'];
    }

    /**
     * Sets fkiEzsignsigningreasonID
     *
     * @param int|null $fkiEzsignsigningreasonID The unique ID of the Ezsignsigningreason
     *
     * @return self
     */
    public function setFkiEzsignsigningreasonID($fkiEzsignsigningreasonID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($fkiEzsignsigningreasonID)) {
            //throw new \InvalidArgumentException('non-nullable fkiEzsignsigningreasonID cannot be null');
        //}

//        if (($fkiEzsignsigningreasonID > 255)) {
        if (!is_null($fkiEzsignsigningreasonID) && ($fkiEzsignsigningreasonID > 255)) {
            throw new \InvalidArgumentException('invalid value for $fkiEzsignsigningreasonID when calling EzsignsignatureSignV1Request., must be smaller than or equal to 255.');
        }
//        if (($fkiEzsignsigningreasonID < 0)) {
        if (!is_null($fkiEzsignsigningreasonID) && ($fkiEzsignsigningreasonID < 0)) {
            throw new \InvalidArgumentException('invalid value for $fkiEzsignsigningreasonID when calling EzsignsignatureSignV1Request., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['fkiEzsignsigningreasonID'] = $fkiEzsignsigningreasonID;
        $this->container['fkiEzsignsigningreasonID'] = (is_null($fkiEzsignsigningreasonID) ? null : (int) $fkiEzsignsigningreasonID);

        return $this;
    }

    /**
     * Gets sValue
     *
     * @return string|null
     */
    public function getSValue()
    {
        return is_null($this->container['sValue']) ? null : trim($this->container['sValue']);
    }

    /**
     * Sets sValue
     *
     * @param string|null $sValue The value required for the Ezsignsignature.  This can only be set if eEzsignsignatureType is **City**, **FieldText** or **FieldTextarea**
     *
     * @return self
     */
    public function setSValue($sValue)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sValue)) {
            //throw new \InvalidArgumentException('non-nullable sValue cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sValue'] = $sValue;
        $this->container['sValue'] = (is_null($sValue) ? null : trim((string) $sValue));

        return $this;
    }

    /**
     * Gets eAttachmentsConfirmationDecision
     *
     * @return string|null
     */
    public function getEAttachmentsConfirmationDecision()
    {
        return is_null($this->container['eAttachmentsConfirmationDecision']) ? null : trim($this->container['eAttachmentsConfirmationDecision']);
    }

    /**
     * Sets eAttachmentsConfirmationDecision
     *
     * @param string|null $eAttachmentsConfirmationDecision Whether the attachment are accepted or refused.  This can only be set if eEzsignsignatureType is **AttachmentsConfirmation**
     *
     * @return self
     */
    public function setEAttachmentsConfirmationDecision($eAttachmentsConfirmationDecision)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($eAttachmentsConfirmationDecision)) {
            //throw new \InvalidArgumentException('non-nullable eAttachmentsConfirmationDecision cannot be null');
        //}
        $allowedValues = $this->getEAttachmentsConfirmationDecisionAllowableValues();
        if (!in_array($eAttachmentsConfirmationDecision, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'eAttachmentsConfirmationDecision', must be one of '%s'",
                    $eAttachmentsConfirmationDecision,
                    implode("', '", $allowedValues)
                )
            );
        }
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['eAttachmentsConfirmationDecision'] = $eAttachmentsConfirmationDecision;
        $this->container['eAttachmentsConfirmationDecision'] = (is_null($eAttachmentsConfirmationDecision) ? null : trim((string) $eAttachmentsConfirmationDecision));

        return $this;
    }

    /**
     * Gets sAttachmentsRefusalReason
     *
     * @return string|null
     */
    public function getSAttachmentsRefusalReason()
    {
        return is_null($this->container['sAttachmentsRefusalReason']) ? null : trim($this->container['sAttachmentsRefusalReason']);
    }

    /**
     * Sets sAttachmentsRefusalReason
     *
     * @param string|null $sAttachmentsRefusalReason The reason of refused.  This can only be set if eEzsignsignatureType is **AttachmentsConfirmation**
     *
     * @return self
     */
    public function setSAttachmentsRefusalReason($sAttachmentsRefusalReason)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sAttachmentsRefusalReason)) {
            //throw new \InvalidArgumentException('non-nullable sAttachmentsRefusalReason cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sAttachmentsRefusalReason'] = $sAttachmentsRefusalReason;
        $this->container['sAttachmentsRefusalReason'] = (is_null($sAttachmentsRefusalReason) ? null : trim((string) $sAttachmentsRefusalReason));

        return $this;
    }

    /**
     * Gets sSvg
     *
     * @return string|null
     */
    public function getSSvg()
    {
        return is_null($this->container['sSvg']) ? null : trim($this->container['sSvg']);
    }

    /**
     * Sets sSvg
     *
     * @param string|null $sSvg The SVG of the handwritten signature.  This can only be set if eEzsignsignatureType is **Handwritten** and **bIsAutomatic** is false
     *
     * @return self
     */
    public function setSSvg($sSvg)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sSvg)) {
            //throw new \InvalidArgumentException('non-nullable sSvg cannot be null');
        //}

//        if ((!preg_match("/^.{0,65535}$/", ObjectSerializer::toString($sSvg)))) {
        if (!is_null($sSvg) && (!preg_match("/(*UTF8)^.{0,65535}$/", ObjectSerializer::toString($sSvg)))) {
            throw new \InvalidArgumentException("invalid value for \$sSvg when calling EzsignsignatureSignV1Request., must conform to the pattern /^.{0,65535}$/.");
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sSvg'] = $sSvg;
        $this->container['sSvg'] = (is_null($sSvg) ? null : trim((string) $sSvg));

        return $this;
    }

    /**
     * Gets aObjFile
     *
     * @return \eZmaxAPI\Model\CommonFile[]|null
     */
    public function getAObjFile()
    {
        return $this->container['aObjFile'];
    }

    /**
     * Sets aObjFile
     *
     * @param \eZmaxAPI\Model\CommonFile[]|null $aObjFile aObjFile
     *
     * @return self
     */
    public function setAObjFile($aObjFile)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($aObjFile)) {
            //throw new \InvalidArgumentException('non-nullable aObjFile cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['aObjFile'] = $aObjFile;
        $this->container['aObjFile'] = $aObjFile;

        return $this;
    }

    /**
     * Gets bIsAutomatic
     *
     * @return bool
     */
    public function getBIsAutomatic()
    {
        return $this->container['bIsAutomatic'];
    }

    /**
     * Sets bIsAutomatic
     *
     * @param bool $bIsAutomatic Indicates if the Ezsignsignature was part of an automatic process or not.  This can only be true if eEzsignsignatureType is **Acknowledgement**, **City**, **Handwritten**, **Initials**, **Name** or **Stamp**.
     *
     * @return self
     */
    public function setBIsAutomatic($bIsAutomatic)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($bIsAutomatic)) {
            //throw new \InvalidArgumentException('non-nullable bIsAutomatic cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['bIsAutomatic'] = $bIsAutomatic;
        $this->container['bIsAutomatic'] = (is_null($bIsAutomatic) ? null : (bool) $bIsAutomatic);

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


