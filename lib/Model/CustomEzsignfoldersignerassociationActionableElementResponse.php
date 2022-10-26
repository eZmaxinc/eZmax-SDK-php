<?php
/**
 * CustomEzsignfoldersignerassociationActionableElementResponse
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
 * The version of the OpenAPI document: 1.1.12
 * Contact: support-api@ezmax.ca
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.1.0-SNAPSHOT
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
 * CustomEzsignfoldersignerassociationActionableElementResponse Class Doc Comment
 *
 * @category Class
 * @description A Ezsignfoldersignerassociation Object with actionable elements
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CustomEzsignfoldersignerassociationActionableElementResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Custom-EzsignfoldersignerassociationActionableElement-Response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'pkiEzsignfoldersignerassociationID' => 'int',
        'fkiEzsignfolderID' => 'int',
        'bEzsignfoldersignerassociationReceivecopy' => 'bool',
        'tEzsignfoldersignerassociationMessage' => 'string',
        'objUser' => '\eZmaxAPI\Model\EzsignfoldersignerassociationResponseCompoundUser',
        'objEzsignsigner' => '\eZmaxAPI\Model\EzsignsignerResponseCompound',
        'bEzsignfoldersignerassociationHasactionableelementsCurrent' => 'bool',
        'bEzsignfoldersignerassociationHasactionableelementsFuture' => 'bool'
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
        'fkiEzsignfolderID' => null,
        'bEzsignfoldersignerassociationReceivecopy' => null,
        'tEzsignfoldersignerassociationMessage' => null,
        'objUser' => null,
        'objEzsignsigner' => null,
        'bEzsignfoldersignerassociationHasactionableelementsCurrent' => null,
        'bEzsignfoldersignerassociationHasactionableelementsFuture' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'pkiEzsignfoldersignerassociationID' => false,
		'fkiEzsignfolderID' => false,
		'bEzsignfoldersignerassociationReceivecopy' => false,
		'tEzsignfoldersignerassociationMessage' => false,
		'objUser' => false,
		'objEzsignsigner' => false,
		'bEzsignfoldersignerassociationHasactionableelementsCurrent' => false,
		'bEzsignfoldersignerassociationHasactionableelementsFuture' => false
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
        'fkiEzsignfolderID' => 'fkiEzsignfolderID',
        'bEzsignfoldersignerassociationReceivecopy' => 'bEzsignfoldersignerassociationReceivecopy',
        'tEzsignfoldersignerassociationMessage' => 'tEzsignfoldersignerassociationMessage',
        'objUser' => 'objUser',
        'objEzsignsigner' => 'objEzsignsigner',
        'bEzsignfoldersignerassociationHasactionableelementsCurrent' => 'bEzsignfoldersignerassociationHasactionableelementsCurrent',
        'bEzsignfoldersignerassociationHasactionableelementsFuture' => 'bEzsignfoldersignerassociationHasactionableelementsFuture'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pkiEzsignfoldersignerassociationID' => 'setPkiEzsignfoldersignerassociationID',
        'fkiEzsignfolderID' => 'setFkiEzsignfolderID',
        'bEzsignfoldersignerassociationReceivecopy' => 'setBEzsignfoldersignerassociationReceivecopy',
        'tEzsignfoldersignerassociationMessage' => 'setTEzsignfoldersignerassociationMessage',
        'objUser' => 'setObjUser',
        'objEzsignsigner' => 'setObjEzsignsigner',
        'bEzsignfoldersignerassociationHasactionableelementsCurrent' => 'setBEzsignfoldersignerassociationHasactionableelementsCurrent',
        'bEzsignfoldersignerassociationHasactionableelementsFuture' => 'setBEzsignfoldersignerassociationHasactionableelementsFuture'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pkiEzsignfoldersignerassociationID' => 'getPkiEzsignfoldersignerassociationID',
        'fkiEzsignfolderID' => 'getFkiEzsignfolderID',
        'bEzsignfoldersignerassociationReceivecopy' => 'getBEzsignfoldersignerassociationReceivecopy',
        'tEzsignfoldersignerassociationMessage' => 'getTEzsignfoldersignerassociationMessage',
        'objUser' => 'getObjUser',
        'objEzsignsigner' => 'getObjEzsignsigner',
        'bEzsignfoldersignerassociationHasactionableelementsCurrent' => 'getBEzsignfoldersignerassociationHasactionableelementsCurrent',
        'bEzsignfoldersignerassociationHasactionableelementsFuture' => 'getBEzsignfoldersignerassociationHasactionableelementsFuture'
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
        $this->setIfExists('fkiEzsignfolderID', $data ?? [], null);
        $this->setIfExists('bEzsignfoldersignerassociationReceivecopy', $data ?? [], null);
        $this->setIfExists('tEzsignfoldersignerassociationMessage', $data ?? [], null);
        $this->setIfExists('objUser', $data ?? [], null);
        $this->setIfExists('objEzsignsigner', $data ?? [], null);
        $this->setIfExists('bEzsignfoldersignerassociationHasactionableelementsCurrent', $data ?? [], null);
        $this->setIfExists('bEzsignfoldersignerassociationHasactionableelementsFuture', $data ?? [], null);
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

        if ($this->container['pkiEzsignfoldersignerassociationID'] === null) {
            $invalidProperties[] = "'pkiEzsignfoldersignerassociationID' can't be null";
        }
        if (($this->container['pkiEzsignfoldersignerassociationID'] < 0)) {
            $invalidProperties[] = "invalid value for 'pkiEzsignfoldersignerassociationID', must be bigger than or equal to 0.";
        }

        if ($this->container['fkiEzsignfolderID'] === null) {
            $invalidProperties[] = "'fkiEzsignfolderID' can't be null";
        }
        if (($this->container['fkiEzsignfolderID'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiEzsignfolderID', must be bigger than or equal to 0.";
        }

        if ($this->container['bEzsignfoldersignerassociationReceivecopy'] === null) {
            $invalidProperties[] = "'bEzsignfoldersignerassociationReceivecopy' can't be null";
        }
        if ($this->container['tEzsignfoldersignerassociationMessage'] === null) {
            $invalidProperties[] = "'tEzsignfoldersignerassociationMessage' can't be null";
        }
        if ($this->container['bEzsignfoldersignerassociationHasactionableelementsCurrent'] === null) {
            $invalidProperties[] = "'bEzsignfoldersignerassociationHasactionableelementsCurrent' can't be null";
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
     * @return int
     */
    public function getPkiEzsignfoldersignerassociationID()
    {
        return $this->container['pkiEzsignfoldersignerassociationID'];
    }

    /**
     * Sets pkiEzsignfoldersignerassociationID
     *
     * @param int $pkiEzsignfoldersignerassociationID The unique ID of the Ezsignfoldersignerassociation
     *
     * @return self
     */
    public function setPkiEzsignfoldersignerassociationID($pkiEzsignfoldersignerassociationID)
    {

        if (($pkiEzsignfoldersignerassociationID < 0)) {
            throw new \InvalidArgumentException('invalid value for $pkiEzsignfoldersignerassociationID when calling CustomEzsignfoldersignerassociationActionableElementResponse., must be bigger than or equal to 0.');
        }


        //if (is_null($pkiEzsignfoldersignerassociationID)) {
            //throw new \InvalidArgumentException('non-nullable pkiEzsignfoldersignerassociationID cannot be null');
        //}
        $this->container['pkiEzsignfoldersignerassociationID'] = (is_null($pkiEzsignfoldersignerassociationID) ? null : (int) $pkiEzsignfoldersignerassociationID);

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

        if (($fkiEzsignfolderID < 0)) {
            throw new \InvalidArgumentException('invalid value for $fkiEzsignfolderID when calling CustomEzsignfoldersignerassociationActionableElementResponse., must be bigger than or equal to 0.');
        }


        //if (is_null($fkiEzsignfolderID)) {
            //throw new \InvalidArgumentException('non-nullable fkiEzsignfolderID cannot be null');
        //}
        $this->container['fkiEzsignfolderID'] = (is_null($fkiEzsignfolderID) ? null : (int) $fkiEzsignfolderID);

        return $this;
    }

    /**
     * Gets bEzsignfoldersignerassociationReceivecopy
     *
     * @return bool
     */
    public function getBEzsignfoldersignerassociationReceivecopy()
    {
        return $this->container['bEzsignfoldersignerassociationReceivecopy'];
    }

    /**
     * Sets bEzsignfoldersignerassociationReceivecopy
     *
     * @param bool $bEzsignfoldersignerassociationReceivecopy If this flag is true. The signatory will receive a copy of every signed Ezsigndocument even if it ain't required to sign the document.
     *
     * @return self
     */
    public function setBEzsignfoldersignerassociationReceivecopy($bEzsignfoldersignerassociationReceivecopy)
    {

        //if (is_null($bEzsignfoldersignerassociationReceivecopy)) {
            //throw new \InvalidArgumentException('non-nullable bEzsignfoldersignerassociationReceivecopy cannot be null');
        //}
        $this->container['bEzsignfoldersignerassociationReceivecopy'] = (is_null($bEzsignfoldersignerassociationReceivecopy) ? null : (bool) $bEzsignfoldersignerassociationReceivecopy);

        return $this;
    }

    /**
     * Gets tEzsignfoldersignerassociationMessage
     *
     * @return string
     */
    public function getTEzsignfoldersignerassociationMessage()
    {
        return $this->container['tEzsignfoldersignerassociationMessage'];
    }

    /**
     * Sets tEzsignfoldersignerassociationMessage
     *
     * @param string $tEzsignfoldersignerassociationMessage A custom text message that will be added to the email sent.
     *
     * @return self
     */
    public function setTEzsignfoldersignerassociationMessage($tEzsignfoldersignerassociationMessage)
    {

        //if (is_null($tEzsignfoldersignerassociationMessage)) {
            //throw new \InvalidArgumentException('non-nullable tEzsignfoldersignerassociationMessage cannot be null');
        //}
        $this->container['tEzsignfoldersignerassociationMessage'] = (is_null($tEzsignfoldersignerassociationMessage) ? null : (string) $tEzsignfoldersignerassociationMessage);

        return $this;
    }

    /**
     * Gets objUser
     *
     * @return \eZmaxAPI\Model\EzsignfoldersignerassociationResponseCompoundUser|null
     */
    public function getObjUser()
    {
        return $this->container['objUser'];
    }

    /**
     * Sets objUser
     *
     * @param \eZmaxAPI\Model\EzsignfoldersignerassociationResponseCompoundUser|null $objUser objUser
     *
     * @return self
     */
    public function setObjUser($objUser)
    {

        //if (is_null($objUser)) {
            //throw new \InvalidArgumentException('non-nullable objUser cannot be null');
        //}
        $this->container['objUser'] = $objUser;

        return $this;
    }

    /**
     * Gets objEzsignsigner
     *
     * @return \eZmaxAPI\Model\EzsignsignerResponseCompound|null
     */
    public function getObjEzsignsigner()
    {
        return $this->container['objEzsignsigner'];
    }

    /**
     * Sets objEzsignsigner
     *
     * @param \eZmaxAPI\Model\EzsignsignerResponseCompound|null $objEzsignsigner objEzsignsigner
     *
     * @return self
     */
    public function setObjEzsignsigner($objEzsignsigner)
    {

        //if (is_null($objEzsignsigner)) {
            //throw new \InvalidArgumentException('non-nullable objEzsignsigner cannot be null');
        //}
        $this->container['objEzsignsigner'] = $objEzsignsigner;

        return $this;
    }

    /**
     * Gets bEzsignfoldersignerassociationHasactionableelementsCurrent
     *
     * @return bool
     */
    public function getBEzsignfoldersignerassociationHasactionableelementsCurrent()
    {
        return $this->container['bEzsignfoldersignerassociationHasactionableelementsCurrent'];
    }

    /**
     * Sets bEzsignfoldersignerassociationHasactionableelementsCurrent
     *
     * @param bool $bEzsignfoldersignerassociationHasactionableelementsCurrent Indicates if the Ezsignfoldersignerassociation has actionable elements in the current step
     *
     * @return self
     */
    public function setBEzsignfoldersignerassociationHasactionableelementsCurrent($bEzsignfoldersignerassociationHasactionableelementsCurrent)
    {

        //if (is_null($bEzsignfoldersignerassociationHasactionableelementsCurrent)) {
            //throw new \InvalidArgumentException('non-nullable bEzsignfoldersignerassociationHasactionableelementsCurrent cannot be null');
        //}
        $this->container['bEzsignfoldersignerassociationHasactionableelementsCurrent'] = (is_null($bEzsignfoldersignerassociationHasactionableelementsCurrent) ? null : (bool) $bEzsignfoldersignerassociationHasactionableelementsCurrent);

        return $this;
    }

    /**
     * Gets bEzsignfoldersignerassociationHasactionableelementsFuture
     *
     * @return bool|null
     */
    public function getBEzsignfoldersignerassociationHasactionableelementsFuture()
    {
        return $this->container['bEzsignfoldersignerassociationHasactionableelementsFuture'];
    }

    /**
     * Sets bEzsignfoldersignerassociationHasactionableelementsFuture
     *
     * @param bool|null $bEzsignfoldersignerassociationHasactionableelementsFuture Indicates if the Ezsignfoldersignerassociation has actionable elements in a future step
     *
     * @return self
     */
    public function setBEzsignfoldersignerassociationHasactionableelementsFuture($bEzsignfoldersignerassociationHasactionableelementsFuture)
    {

        //if (is_null($bEzsignfoldersignerassociationHasactionableelementsFuture)) {
            //throw new \InvalidArgumentException('non-nullable bEzsignfoldersignerassociationHasactionableelementsFuture cannot be null');
        //}
        $this->container['bEzsignfoldersignerassociationHasactionableelementsFuture'] = (is_null($bEzsignfoldersignerassociationHasactionableelementsFuture) ? null : (bool) $bEzsignfoldersignerassociationHasactionableelementsFuture);

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


