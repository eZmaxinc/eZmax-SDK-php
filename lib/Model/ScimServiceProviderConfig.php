<?php
/**
 * ScimServiceProviderConfig
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
 * ScimServiceProviderConfig Class Doc Comment
 *
 * @category Class
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ScimServiceProviderConfig implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Scim-ServiceProviderConfig';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'authenticationSchemes' => '\eZmaxAPI\Model\ScimAuthenticationScheme[]',
        'bulk' => '\eZmaxAPI\Model\ScimServiceProviderConfigBulk',
        'changePassword' => '\eZmaxAPI\Model\ScimServiceProviderConfigChangePassword',
        'documentationUri' => 'string',
        'etag' => '\eZmaxAPI\Model\ScimServiceProviderConfigEtag',
        'filter' => '\eZmaxAPI\Model\ScimServiceProviderConfigFilter',
        'patch' => '\eZmaxAPI\Model\ScimServiceProviderConfigPatch',
        'sort' => '\eZmaxAPI\Model\ScimServiceProviderConfigSort'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'authenticationSchemes' => null,
        'bulk' => null,
        'changePassword' => null,
        'documentationUri' => null,
        'etag' => null,
        'filter' => null,
        'patch' => null,
        'sort' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'authenticationSchemes' => false,
		'bulk' => false,
		'changePassword' => false,
		'documentationUri' => false,
		'etag' => false,
		'filter' => false,
		'patch' => false,
		'sort' => false
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
        'authenticationSchemes' => 'authenticationSchemes',
        'bulk' => 'bulk',
        'changePassword' => 'changePassword',
        'documentationUri' => 'documentationUri',
        'etag' => 'etag',
        'filter' => 'filter',
        'patch' => 'patch',
        'sort' => 'sort'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'authenticationSchemes' => 'setAuthenticationSchemes',
        'bulk' => 'setBulk',
        'changePassword' => 'setChangePassword',
        'documentationUri' => 'setDocumentationUri',
        'etag' => 'setEtag',
        'filter' => 'setFilter',
        'patch' => 'setPatch',
        'sort' => 'setSort'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'authenticationSchemes' => 'getAuthenticationSchemes',
        'bulk' => 'getBulk',
        'changePassword' => 'getChangePassword',
        'documentationUri' => 'getDocumentationUri',
        'etag' => 'getEtag',
        'filter' => 'getFilter',
        'patch' => 'getPatch',
        'sort' => 'getSort'
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
        $this->setIfExists('authenticationSchemes', $data ?? [], null);
        $this->setIfExists('bulk', $data ?? [], null);
        $this->setIfExists('changePassword', $data ?? [], null);
        $this->setIfExists('documentationUri', $data ?? [], null);
        $this->setIfExists('etag', $data ?? [], null);
        $this->setIfExists('filter', $data ?? [], null);
        $this->setIfExists('patch', $data ?? [], null);
        $this->setIfExists('sort', $data ?? [], null);
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

        if ($this->container['authenticationSchemes'] === null) {
            $invalidProperties[] = "'authenticationSchemes' can't be null";
        }
        if ($this->container['bulk'] === null) {
            $invalidProperties[] = "'bulk' can't be null";
        }
        if ($this->container['changePassword'] === null) {
            $invalidProperties[] = "'changePassword' can't be null";
        }
        if ($this->container['documentationUri'] === null) {
            $invalidProperties[] = "'documentationUri' can't be null";
        }
        if ($this->container['etag'] === null) {
            $invalidProperties[] = "'etag' can't be null";
        }
        if ($this->container['filter'] === null) {
            $invalidProperties[] = "'filter' can't be null";
        }
        if ($this->container['patch'] === null) {
            $invalidProperties[] = "'patch' can't be null";
        }
        if ($this->container['sort'] === null) {
            $invalidProperties[] = "'sort' can't be null";
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
     * Gets authenticationSchemes
     *
     * @return \eZmaxAPI\Model\ScimAuthenticationScheme[]
     */
    public function getAuthenticationSchemes()
    {
	//return $this->container['authenticationSchemes'];
        return $this->container['authenticationSchemes'];
    }

    /**
     * Sets authenticationSchemes
     *
     * @param \eZmaxAPI\Model\ScimAuthenticationScheme[] $authenticationSchemes A multi-valued complex type that specifies supported authentication scheme properties.
     *
     * @return self
     */
    public function setAuthenticationSchemes($authenticationSchemes)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($authenticationSchemes)) {
            //throw new \InvalidArgumentException('non-nullable authenticationSchemes cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['authenticationSchemes'] = $authenticationSchemes;
        $this->container['authenticationSchemes'] = $authenticationSchemes;

        return $this;
    }

    /**
     * Gets bulk
     *
     * @return \eZmaxAPI\Model\ScimServiceProviderConfigBulk
     */
    public function getBulk()
    {
	//return $this->container['bulk'];
        return $this->container['bulk'];
    }

    /**
     * Sets bulk
     *
     * @param \eZmaxAPI\Model\ScimServiceProviderConfigBulk $bulk bulk
     *
     * @return self
     */
    public function setBulk($bulk)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($bulk)) {
            //throw new \InvalidArgumentException('non-nullable bulk cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['bulk'] = $bulk;
        $this->container['bulk'] = $bulk;

        return $this;
    }

    /**
     * Gets changePassword
     *
     * @return \eZmaxAPI\Model\ScimServiceProviderConfigChangePassword
     */
    public function getChangePassword()
    {
	//return $this->container['changePassword'];
        return $this->container['changePassword'];
    }

    /**
     * Sets changePassword
     *
     * @param \eZmaxAPI\Model\ScimServiceProviderConfigChangePassword $changePassword changePassword
     *
     * @return self
     */
    public function setChangePassword($changePassword)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($changePassword)) {
            //throw new \InvalidArgumentException('non-nullable changePassword cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['changePassword'] = $changePassword;
        $this->container['changePassword'] = $changePassword;

        return $this;
    }

    /**
     * Gets documentationUri
     *
     * @return string
     */
    public function getDocumentationUri()
    {
	//return $this->container['documentationUri'];
        return is_null($this->container['documentationUri']) ? null : trim($this->container['documentationUri']);
    }

    /**
     * Sets documentationUri
     *
     * @param string $documentationUri An HTTP-addressable URL pointing to the service provider's human-consumable help documentation
     *
     * @return self
     */
    public function setDocumentationUri($documentationUri)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($documentationUri)) {
            //throw new \InvalidArgumentException('non-nullable documentationUri cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['documentationUri'] = $documentationUri;
        $this->container['documentationUri'] = (is_null($documentationUri) ? null : trim((string) $documentationUri));

        return $this;
    }

    /**
     * Gets etag
     *
     * @return \eZmaxAPI\Model\ScimServiceProviderConfigEtag
     */
    public function getEtag()
    {
	//return $this->container['etag'];
        return $this->container['etag'];
    }

    /**
     * Sets etag
     *
     * @param \eZmaxAPI\Model\ScimServiceProviderConfigEtag $etag etag
     *
     * @return self
     */
    public function setEtag($etag)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($etag)) {
            //throw new \InvalidArgumentException('non-nullable etag cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['etag'] = $etag;
        $this->container['etag'] = $etag;

        return $this;
    }

    /**
     * Gets filter
     *
     * @return \eZmaxAPI\Model\ScimServiceProviderConfigFilter
     */
    public function getFilter()
    {
	//return $this->container['filter'];
        return $this->container['filter'];
    }

    /**
     * Sets filter
     *
     * @param \eZmaxAPI\Model\ScimServiceProviderConfigFilter $filter filter
     *
     * @return self
     */
    public function setFilter($filter)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($filter)) {
            //throw new \InvalidArgumentException('non-nullable filter cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['filter'] = $filter;
        $this->container['filter'] = $filter;

        return $this;
    }

    /**
     * Gets patch
     *
     * @return \eZmaxAPI\Model\ScimServiceProviderConfigPatch
     */
    public function getPatch()
    {
	//return $this->container['patch'];
        return $this->container['patch'];
    }

    /**
     * Sets patch
     *
     * @param \eZmaxAPI\Model\ScimServiceProviderConfigPatch $patch patch
     *
     * @return self
     */
    public function setPatch($patch)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($patch)) {
            //throw new \InvalidArgumentException('non-nullable patch cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['patch'] = $patch;
        $this->container['patch'] = $patch;

        return $this;
    }

    /**
     * Gets sort
     *
     * @return \eZmaxAPI\Model\ScimServiceProviderConfigSort
     */
    public function getSort()
    {
	//return $this->container['sort'];
        return $this->container['sort'];
    }

    /**
     * Sets sort
     *
     * @param \eZmaxAPI\Model\ScimServiceProviderConfigSort $sort sort
     *
     * @return self
     */
    public function setSort($sort)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sort)) {
            //throw new \InvalidArgumentException('non-nullable sort cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sort'] = $sort;
        $this->container['sort'] = $sort;

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


