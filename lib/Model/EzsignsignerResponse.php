<?php
/**
 * EzsignsignerResponse
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
 * The version of the OpenAPI document: 1.2.2
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
 * EzsignsignerResponse Class Doc Comment
 *
 * @category Class
 * @description An Ezsignsigner Object
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
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
        'pkiEzsignsignerID' => 'int',
        'fkiTaxassignmentID' => 'int',
        'fkiSecretquestionID' => 'int',
        'fkiUserlogintypeID' => 'int',
        'sUserlogintypeDescriptionX' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'pkiEzsignsignerID' => null,
        'fkiTaxassignmentID' => null,
        'fkiSecretquestionID' => null,
        'fkiUserlogintypeID' => null,
        'sUserlogintypeDescriptionX' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'pkiEzsignsignerID' => false,
		'fkiTaxassignmentID' => false,
		'fkiSecretquestionID' => false,
		'fkiUserlogintypeID' => false,
		'sUserlogintypeDescriptionX' => false
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
        'pkiEzsignsignerID' => 'pkiEzsignsignerID',
        'fkiTaxassignmentID' => 'fkiTaxassignmentID',
        'fkiSecretquestionID' => 'fkiSecretquestionID',
        'fkiUserlogintypeID' => 'fkiUserlogintypeID',
        'sUserlogintypeDescriptionX' => 'sUserlogintypeDescriptionX'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pkiEzsignsignerID' => 'setPkiEzsignsignerID',
        'fkiTaxassignmentID' => 'setFkiTaxassignmentID',
        'fkiSecretquestionID' => 'setFkiSecretquestionID',
        'fkiUserlogintypeID' => 'setFkiUserlogintypeID',
        'sUserlogintypeDescriptionX' => 'setSUserlogintypeDescriptionX'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pkiEzsignsignerID' => 'getPkiEzsignsignerID',
        'fkiTaxassignmentID' => 'getFkiTaxassignmentID',
        'fkiSecretquestionID' => 'getFkiSecretquestionID',
        'fkiUserlogintypeID' => 'getFkiUserlogintypeID',
        'sUserlogintypeDescriptionX' => 'getSUserlogintypeDescriptionX'
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
        $this->setIfExists('pkiEzsignsignerID', $data ?? [], null);
        $this->setIfExists('fkiTaxassignmentID', $data ?? [], null);
        $this->setIfExists('fkiSecretquestionID', $data ?? [], null);
        $this->setIfExists('fkiUserlogintypeID', $data ?? [], null);
        $this->setIfExists('sUserlogintypeDescriptionX', $data ?? [], null);
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

        if ($this->container['pkiEzsignsignerID'] === null) {
            $invalidProperties[] = "'pkiEzsignsignerID' can't be null";
        }
        if (($this->container['pkiEzsignsignerID'] < 0)) {
            $invalidProperties[] = "invalid value for 'pkiEzsignsignerID', must be bigger than or equal to 0.";
        }

        if ($this->container['fkiTaxassignmentID'] === null) {
            $invalidProperties[] = "'fkiTaxassignmentID' can't be null";
        }
        if (($this->container['fkiTaxassignmentID'] > 15)) {
            $invalidProperties[] = "invalid value for 'fkiTaxassignmentID', must be smaller than or equal to 15.";
        }

        if (($this->container['fkiTaxassignmentID'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiTaxassignmentID', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['fkiSecretquestionID']) && ($this->container['fkiSecretquestionID'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiSecretquestionID', must be bigger than or equal to 0.";
        }

        if ($this->container['fkiUserlogintypeID'] === null) {
            $invalidProperties[] = "'fkiUserlogintypeID' can't be null";
        }
        if (($this->container['fkiUserlogintypeID'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiUserlogintypeID', must be bigger than or equal to 0.";
        }

        if ($this->container['sUserlogintypeDescriptionX'] === null) {
            $invalidProperties[] = "'sUserlogintypeDescriptionX' can't be null";
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
     * Gets pkiEzsignsignerID
     *
     * @return int
     */
    public function getPkiEzsignsignerID()
    {
	//return $this->container['pkiEzsignsignerID'];
        return $this->container['pkiEzsignsignerID'];
    }

    /**
     * Sets pkiEzsignsignerID
     *
     * @param int $pkiEzsignsignerID The unique ID of the Ezsignsigner
     *
     * @return self
     */
    public function setPkiEzsignsignerID($pkiEzsignsignerID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($pkiEzsignsignerID)) {
            //throw new \InvalidArgumentException('non-nullable pkiEzsignsignerID cannot be null');
        //}

	//if (($pkiEzsignsignerID < 0)) {
        if (($pkiEzsignsignerID < 0)) {
	    //throw new \InvalidArgumentException('invalid value for $pkiEzsignsignerID when calling EzsignsignerResponse., must be bigger than or equal to 0.');
            throw new \InvalidArgumentException('invalid value '.(is_null($pkiEzsignsignerID)?'null':'"'.$pkiEzsignsignerID.'"').' for pkiEzsignsignerID when calling EzsignsignerResponse., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['pkiEzsignsignerID'] = $pkiEzsignsignerID;
        $this->container['pkiEzsignsignerID'] = (is_null($pkiEzsignsignerID) ? null : (int) $pkiEzsignsignerID);

        return $this;
    }

    /**
     * Gets fkiTaxassignmentID
     *
     * @return int
     */
    public function getFkiTaxassignmentID()
    {
	//return $this->container['fkiTaxassignmentID'];
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
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($fkiTaxassignmentID)) {
            //throw new \InvalidArgumentException('non-nullable fkiTaxassignmentID cannot be null');
        //}

	//if (($fkiTaxassignmentID > 15)) {
        if (($fkiTaxassignmentID > 15)) {
	    //throw new \InvalidArgumentException('invalid value for $fkiTaxassignmentID when calling EzsignsignerResponse., must be smaller than or equal to 15.');
            throw new \InvalidArgumentException('invalid value '.(is_null($fkiTaxassignmentID)?'null':'"'.$fkiTaxassignmentID.'"').' for fkiTaxassignmentID when calling EzsignsignerResponse., must be smaller than or equal to 15.');
        }
	//if (($fkiTaxassignmentID < 0)) {
        if (($fkiTaxassignmentID < 0)) {
	    //throw new \InvalidArgumentException('invalid value for $fkiTaxassignmentID when calling EzsignsignerResponse., must be bigger than or equal to 0.');
            throw new \InvalidArgumentException('invalid value '.(is_null($fkiTaxassignmentID)?'null':'"'.$fkiTaxassignmentID.'"').' for fkiTaxassignmentID when calling EzsignsignerResponse., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['fkiTaxassignmentID'] = $fkiTaxassignmentID;
        $this->container['fkiTaxassignmentID'] = (is_null($fkiTaxassignmentID) ? null : (int) $fkiTaxassignmentID);

        return $this;
    }

    /**
     * Gets fkiSecretquestionID
     *
     * @return int|null
     */
    public function getFkiSecretquestionID()
    {
	//return $this->container['fkiSecretquestionID'];
        return $this->container['fkiSecretquestionID'];
    }

    /**
     * Sets fkiSecretquestionID
     *
     * @param int|null $fkiSecretquestionID The unique ID of the Secretquestion.  Valid values:  |Value|Description| |-|-| |1|The name of the hospital in which you were born| |2|The name of your grade school| |3|The last name of your favorite teacher| |4|Your favorite sports team| |5|Your favorite TV show| |6|Your favorite movie| |7|The name of the street on which you grew up| |8|The name of your first employer| |9|Your first car| |10|Your favorite food| |11|The name of your first pet| |12|Favorite musician/band| |13|What instrument you play| |14|Your father's middle name| |15|Your mother's maiden name| |16|Name of your eldest child| |17|Your spouse's middle name| |18|Favorite restaurant| |19|Childhood nickname| |20|Favorite vacation destination| |21|Your boat's name| |22|Date of Birth (YYYY-MM-DD)| |22|Secret Code| |22|Your reference code|
     *
     * @return self
     */
    public function setFkiSecretquestionID($fkiSecretquestionID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($fkiSecretquestionID)) {
            //throw new \InvalidArgumentException('non-nullable fkiSecretquestionID cannot be null');
        //}

	//if (($fkiSecretquestionID < 0)) {
        if (!is_null($fkiSecretquestionID) && ($fkiSecretquestionID < 0)) {
	    //throw new \InvalidArgumentException('invalid value for $fkiSecretquestionID when calling EzsignsignerResponse., must be bigger than or equal to 0.');
            throw new \InvalidArgumentException('invalid value '.(is_null($fkiSecretquestionID)?'null':'"'.$fkiSecretquestionID.'"').' for fkiSecretquestionID when calling EzsignsignerResponse., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['fkiSecretquestionID'] = $fkiSecretquestionID;
        $this->container['fkiSecretquestionID'] = (is_null($fkiSecretquestionID) ? null : (int) $fkiSecretquestionID);

        return $this;
    }

    /**
     * Gets fkiUserlogintypeID
     *
     * @return int
     */
    public function getFkiUserlogintypeID()
    {
	//return $this->container['fkiUserlogintypeID'];
        return $this->container['fkiUserlogintypeID'];
    }

    /**
     * Sets fkiUserlogintypeID
     *
     * @param int $fkiUserlogintypeID The unique ID of the Userlogintype  Valid values:  |Value|Description|Detail| |-|-|-| |1|**Email Only**|The Ezsignsigner will receive a secure link by email| |2|**Email and phone or SMS**|The Ezsignsigner will receive a secure link by email and will need to authenticate using SMS or Phone call. **Additional fee applies**| |3|**Email and secret question**|The Ezsignsigner will receive a secure link by email and will need to authenticate using a predefined question and answer| |4|**In person only**|The Ezsignsigner will only be able to sign \"In-Person\" and there won't be any authentication. No email will be sent for invitation to sign. Make sure you evaluate the risk of signature denial and at minimum, we recommend you use a handwritten signature type| |5|**In person with phone or SMS**|The Ezsignsigner will only be able to sign \"In-Person\" and will need to authenticate using SMS or Phone call. No email will be sent for invitation to sign. **Additional fee applies**| |6|**Embedded**|The Ezsignsigner will only be able to sign in the embedded solution. No email will be sent for invitation to sign. **Additional fee applies**|   |7|**Embedded with phone or SMS**|The Ezsignsigner will only be able to sign in the embedded solution and will need to authenticate using SMS or Phone call. No email will be sent for invitation to sign. **Additional fee applies**|   |8|**No validation**|The Ezsignsigner will not receive an email and won't have to validate his connection using 2 factor. **Additional fee applies**|      |9|**Sms only**|The Ezsignsigner will not receive an email but will will need to authenticate using SMS. **Additional fee applies**|
     *
     * @return self
     */
    public function setFkiUserlogintypeID($fkiUserlogintypeID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($fkiUserlogintypeID)) {
            //throw new \InvalidArgumentException('non-nullable fkiUserlogintypeID cannot be null');
        //}

	//if (($fkiUserlogintypeID < 0)) {
        if (($fkiUserlogintypeID < 0)) {
	    //throw new \InvalidArgumentException('invalid value for $fkiUserlogintypeID when calling EzsignsignerResponse., must be bigger than or equal to 0.');
            throw new \InvalidArgumentException('invalid value '.(is_null($fkiUserlogintypeID)?'null':'"'.$fkiUserlogintypeID.'"').' for fkiUserlogintypeID when calling EzsignsignerResponse., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['fkiUserlogintypeID'] = $fkiUserlogintypeID;
        $this->container['fkiUserlogintypeID'] = (is_null($fkiUserlogintypeID) ? null : (int) $fkiUserlogintypeID);

        return $this;
    }

    /**
     * Gets sUserlogintypeDescriptionX
     *
     * @return string
     */
    public function getSUserlogintypeDescriptionX()
    {
	//return $this->container['sUserlogintypeDescriptionX'];
        return is_null($this->container['sUserlogintypeDescriptionX']) ? null : trim($this->container['sUserlogintypeDescriptionX']);
    }

    /**
     * Sets sUserlogintypeDescriptionX
     *
     * @param string $sUserlogintypeDescriptionX The description of the Userlogintype in the language of the requester
     *
     * @return self
     */
    public function setSUserlogintypeDescriptionX($sUserlogintypeDescriptionX)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sUserlogintypeDescriptionX)) {
            //throw new \InvalidArgumentException('non-nullable sUserlogintypeDescriptionX cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sUserlogintypeDescriptionX'] = $sUserlogintypeDescriptionX;
        $this->container['sUserlogintypeDescriptionX'] = (is_null($sUserlogintypeDescriptionX) ? null : trim((string) $sUserlogintypeDescriptionX));

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


