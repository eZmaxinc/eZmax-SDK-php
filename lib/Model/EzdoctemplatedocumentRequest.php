<?php
/**
 * EzdoctemplatedocumentRequest
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
 * EzdoctemplatedocumentRequest Class Doc Comment
 *
 * @category Class
 * @description A Ezdoctemplatedocument Object
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class EzdoctemplatedocumentRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ezdoctemplatedocument-Request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'pkiEzdoctemplatedocumentID' => 'int',
        'fkiLanguageID' => 'int',
        'fkiEzsignfoldertypeID' => 'int',
        'fkiEzdoctemplatetypeID' => 'int',
        'fkiEzdoctemplatefieldtypecategoryID' => 'int',
        'eEzdoctemplatedocumentPrivacylevel' => '\eZmaxAPI\Model\FieldEEzdoctemplatedocumentPrivacylevel',
        'bEzdoctemplatedocumentIsactive' => 'bool',
        'objEzdoctemplatedocumentName' => '\eZmaxAPI\Model\MultilingualEzdoctemplatedocumentName'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'pkiEzdoctemplatedocumentID' => null,
        'fkiLanguageID' => null,
        'fkiEzsignfoldertypeID' => null,
        'fkiEzdoctemplatetypeID' => null,
        'fkiEzdoctemplatefieldtypecategoryID' => null,
        'eEzdoctemplatedocumentPrivacylevel' => null,
        'bEzdoctemplatedocumentIsactive' => null,
        'objEzdoctemplatedocumentName' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'pkiEzdoctemplatedocumentID' => false,
		'fkiLanguageID' => false,
		'fkiEzsignfoldertypeID' => false,
		'fkiEzdoctemplatetypeID' => false,
		'fkiEzdoctemplatefieldtypecategoryID' => false,
		'eEzdoctemplatedocumentPrivacylevel' => false,
		'bEzdoctemplatedocumentIsactive' => false,
		'objEzdoctemplatedocumentName' => false
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
        'pkiEzdoctemplatedocumentID' => 'pkiEzdoctemplatedocumentID',
        'fkiLanguageID' => 'fkiLanguageID',
        'fkiEzsignfoldertypeID' => 'fkiEzsignfoldertypeID',
        'fkiEzdoctemplatetypeID' => 'fkiEzdoctemplatetypeID',
        'fkiEzdoctemplatefieldtypecategoryID' => 'fkiEzdoctemplatefieldtypecategoryID',
        'eEzdoctemplatedocumentPrivacylevel' => 'eEzdoctemplatedocumentPrivacylevel',
        'bEzdoctemplatedocumentIsactive' => 'bEzdoctemplatedocumentIsactive',
        'objEzdoctemplatedocumentName' => 'objEzdoctemplatedocumentName'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pkiEzdoctemplatedocumentID' => 'setPkiEzdoctemplatedocumentID',
        'fkiLanguageID' => 'setFkiLanguageID',
        'fkiEzsignfoldertypeID' => 'setFkiEzsignfoldertypeID',
        'fkiEzdoctemplatetypeID' => 'setFkiEzdoctemplatetypeID',
        'fkiEzdoctemplatefieldtypecategoryID' => 'setFkiEzdoctemplatefieldtypecategoryID',
        'eEzdoctemplatedocumentPrivacylevel' => 'setEEzdoctemplatedocumentPrivacylevel',
        'bEzdoctemplatedocumentIsactive' => 'setBEzdoctemplatedocumentIsactive',
        'objEzdoctemplatedocumentName' => 'setObjEzdoctemplatedocumentName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pkiEzdoctemplatedocumentID' => 'getPkiEzdoctemplatedocumentID',
        'fkiLanguageID' => 'getFkiLanguageID',
        'fkiEzsignfoldertypeID' => 'getFkiEzsignfoldertypeID',
        'fkiEzdoctemplatetypeID' => 'getFkiEzdoctemplatetypeID',
        'fkiEzdoctemplatefieldtypecategoryID' => 'getFkiEzdoctemplatefieldtypecategoryID',
        'eEzdoctemplatedocumentPrivacylevel' => 'getEEzdoctemplatedocumentPrivacylevel',
        'bEzdoctemplatedocumentIsactive' => 'getBEzdoctemplatedocumentIsactive',
        'objEzdoctemplatedocumentName' => 'getObjEzdoctemplatedocumentName'
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
        $this->setIfExists('pkiEzdoctemplatedocumentID', $data ?? [], null);
        $this->setIfExists('fkiLanguageID', $data ?? [], null);
        $this->setIfExists('fkiEzsignfoldertypeID', $data ?? [], null);
        $this->setIfExists('fkiEzdoctemplatetypeID', $data ?? [], null);
        $this->setIfExists('fkiEzdoctemplatefieldtypecategoryID', $data ?? [], null);
        $this->setIfExists('eEzdoctemplatedocumentPrivacylevel', $data ?? [], null);
        $this->setIfExists('bEzdoctemplatedocumentIsactive', $data ?? [], null);
        $this->setIfExists('objEzdoctemplatedocumentName', $data ?? [], null);
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

        if (!is_null($this->container['pkiEzdoctemplatedocumentID']) && ($this->container['pkiEzdoctemplatedocumentID'] > 65535)) {
            $invalidProperties[] = "invalid value for 'pkiEzdoctemplatedocumentID', must be smaller than or equal to 65535.";
        }

        if (!is_null($this->container['pkiEzdoctemplatedocumentID']) && ($this->container['pkiEzdoctemplatedocumentID'] < 0)) {
            $invalidProperties[] = "invalid value for 'pkiEzdoctemplatedocumentID', must be bigger than or equal to 0.";
        }

        if ($this->container['fkiLanguageID'] === null) {
            $invalidProperties[] = "'fkiLanguageID' can't be null";
        }
        if (($this->container['fkiLanguageID'] > 2)) {
            $invalidProperties[] = "invalid value for 'fkiLanguageID', must be smaller than or equal to 2.";
        }

        if (($this->container['fkiLanguageID'] < 1)) {
            $invalidProperties[] = "invalid value for 'fkiLanguageID', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['fkiEzsignfoldertypeID']) && ($this->container['fkiEzsignfoldertypeID'] > 65535)) {
            $invalidProperties[] = "invalid value for 'fkiEzsignfoldertypeID', must be smaller than or equal to 65535.";
        }

        if (!is_null($this->container['fkiEzsignfoldertypeID']) && ($this->container['fkiEzsignfoldertypeID'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiEzsignfoldertypeID', must be bigger than or equal to 0.";
        }

        if ($this->container['fkiEzdoctemplatetypeID'] === null) {
            $invalidProperties[] = "'fkiEzdoctemplatetypeID' can't be null";
        }
        if (($this->container['fkiEzdoctemplatetypeID'] > 255)) {
            $invalidProperties[] = "invalid value for 'fkiEzdoctemplatetypeID', must be smaller than or equal to 255.";
        }

        if (($this->container['fkiEzdoctemplatetypeID'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiEzdoctemplatetypeID', must be bigger than or equal to 0.";
        }

        if ($this->container['fkiEzdoctemplatefieldtypecategoryID'] === null) {
            $invalidProperties[] = "'fkiEzdoctemplatefieldtypecategoryID' can't be null";
        }
        if (($this->container['fkiEzdoctemplatefieldtypecategoryID'] > 255)) {
            $invalidProperties[] = "invalid value for 'fkiEzdoctemplatefieldtypecategoryID', must be smaller than or equal to 255.";
        }

        if (($this->container['fkiEzdoctemplatefieldtypecategoryID'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiEzdoctemplatefieldtypecategoryID', must be bigger than or equal to 0.";
        }

        if ($this->container['bEzdoctemplatedocumentIsactive'] === null) {
            $invalidProperties[] = "'bEzdoctemplatedocumentIsactive' can't be null";
        }
        if ($this->container['objEzdoctemplatedocumentName'] === null) {
            $invalidProperties[] = "'objEzdoctemplatedocumentName' can't be null";
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
     * Gets pkiEzdoctemplatedocumentID
     *
     * @return int|null
     */
    public function getPkiEzdoctemplatedocumentID()
    {
	//return $this->container['pkiEzdoctemplatedocumentID'];
        return $this->container['pkiEzdoctemplatedocumentID'];
    }

    /**
     * Sets pkiEzdoctemplatedocumentID
     *
     * @param int|null $pkiEzdoctemplatedocumentID The unique ID of the Ezdoctemplatedocument
     *
     * @return self
     */
    public function setPkiEzdoctemplatedocumentID($pkiEzdoctemplatedocumentID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($pkiEzdoctemplatedocumentID)) {
            //throw new \InvalidArgumentException('non-nullable pkiEzdoctemplatedocumentID cannot be null');
        //}

	//if (($pkiEzdoctemplatedocumentID > 65535)) {
        if (!is_null($pkiEzdoctemplatedocumentID) && ($pkiEzdoctemplatedocumentID > 65535)) {
	    //throw new \InvalidArgumentException('invalid value for $pkiEzdoctemplatedocumentID when calling EzdoctemplatedocumentRequest., must be smaller than or equal to 65535.');
            throw new \InvalidArgumentException('invalid value '.(is_null($pkiEzdoctemplatedocumentID)?'null':'"'.$pkiEzdoctemplatedocumentID.'"').' for pkiEzdoctemplatedocumentID when calling EzdoctemplatedocumentRequest., must be smaller than or equal to 65535.');
        }
	//if (($pkiEzdoctemplatedocumentID < 0)) {
        if (!is_null($pkiEzdoctemplatedocumentID) && ($pkiEzdoctemplatedocumentID < 0)) {
	    //throw new \InvalidArgumentException('invalid value for $pkiEzdoctemplatedocumentID when calling EzdoctemplatedocumentRequest., must be bigger than or equal to 0.');
            throw new \InvalidArgumentException('invalid value '.(is_null($pkiEzdoctemplatedocumentID)?'null':'"'.$pkiEzdoctemplatedocumentID.'"').' for pkiEzdoctemplatedocumentID when calling EzdoctemplatedocumentRequest., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['pkiEzdoctemplatedocumentID'] = $pkiEzdoctemplatedocumentID;
        $this->container['pkiEzdoctemplatedocumentID'] = (is_null($pkiEzdoctemplatedocumentID) ? null : (int) $pkiEzdoctemplatedocumentID);

        return $this;
    }

    /**
     * Gets fkiLanguageID
     *
     * @return int
     */
    public function getFkiLanguageID()
    {
	//return $this->container['fkiLanguageID'];
        return $this->container['fkiLanguageID'];
    }

    /**
     * Sets fkiLanguageID
     *
     * @param int $fkiLanguageID The unique ID of the Language.  Valid values:  |Value|Description| |-|-| |1|French| |2|English|
     *
     * @return self
     */
    public function setFkiLanguageID($fkiLanguageID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($fkiLanguageID)) {
            //throw new \InvalidArgumentException('non-nullable fkiLanguageID cannot be null');
        //}

	//if (($fkiLanguageID > 2)) {
        if (($fkiLanguageID > 2)) {
	    //throw new \InvalidArgumentException('invalid value for $fkiLanguageID when calling EzdoctemplatedocumentRequest., must be smaller than or equal to 2.');
            throw new \InvalidArgumentException('invalid value '.(is_null($fkiLanguageID)?'null':'"'.$fkiLanguageID.'"').' for fkiLanguageID when calling EzdoctemplatedocumentRequest., must be smaller than or equal to 2.');
        }
	//if (($fkiLanguageID < 1)) {
        if (($fkiLanguageID < 1)) {
	    //throw new \InvalidArgumentException('invalid value for $fkiLanguageID when calling EzdoctemplatedocumentRequest., must be bigger than or equal to 1.');
            throw new \InvalidArgumentException('invalid value '.(is_null($fkiLanguageID)?'null':'"'.$fkiLanguageID.'"').' for fkiLanguageID when calling EzdoctemplatedocumentRequest., must be bigger than or equal to 1.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['fkiLanguageID'] = $fkiLanguageID;
        $this->container['fkiLanguageID'] = (is_null($fkiLanguageID) ? null : (int) $fkiLanguageID);

        return $this;
    }

    /**
     * Gets fkiEzsignfoldertypeID
     *
     * @return int|null
     */
    public function getFkiEzsignfoldertypeID()
    {
	//return $this->container['fkiEzsignfoldertypeID'];
        return $this->container['fkiEzsignfoldertypeID'];
    }

    /**
     * Sets fkiEzsignfoldertypeID
     *
     * @param int|null $fkiEzsignfoldertypeID The unique ID of the Ezsignfoldertype.
     *
     * @return self
     */
    public function setFkiEzsignfoldertypeID($fkiEzsignfoldertypeID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($fkiEzsignfoldertypeID)) {
            //throw new \InvalidArgumentException('non-nullable fkiEzsignfoldertypeID cannot be null');
        //}

	//if (($fkiEzsignfoldertypeID > 65535)) {
        if (!is_null($fkiEzsignfoldertypeID) && ($fkiEzsignfoldertypeID > 65535)) {
	    //throw new \InvalidArgumentException('invalid value for $fkiEzsignfoldertypeID when calling EzdoctemplatedocumentRequest., must be smaller than or equal to 65535.');
            throw new \InvalidArgumentException('invalid value '.(is_null($fkiEzsignfoldertypeID)?'null':'"'.$fkiEzsignfoldertypeID.'"').' for fkiEzsignfoldertypeID when calling EzdoctemplatedocumentRequest., must be smaller than or equal to 65535.');
        }
	//if (($fkiEzsignfoldertypeID < 0)) {
        if (!is_null($fkiEzsignfoldertypeID) && ($fkiEzsignfoldertypeID < 0)) {
	    //throw new \InvalidArgumentException('invalid value for $fkiEzsignfoldertypeID when calling EzdoctemplatedocumentRequest., must be bigger than or equal to 0.');
            throw new \InvalidArgumentException('invalid value '.(is_null($fkiEzsignfoldertypeID)?'null':'"'.$fkiEzsignfoldertypeID.'"').' for fkiEzsignfoldertypeID when calling EzdoctemplatedocumentRequest., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['fkiEzsignfoldertypeID'] = $fkiEzsignfoldertypeID;
        $this->container['fkiEzsignfoldertypeID'] = (is_null($fkiEzsignfoldertypeID) ? null : (int) $fkiEzsignfoldertypeID);

        return $this;
    }

    /**
     * Gets fkiEzdoctemplatetypeID
     *
     * @return int
     */
    public function getFkiEzdoctemplatetypeID()
    {
	//return $this->container['fkiEzdoctemplatetypeID'];
        return $this->container['fkiEzdoctemplatetypeID'];
    }

    /**
     * Sets fkiEzdoctemplatetypeID
     *
     * @param int $fkiEzdoctemplatetypeID The unique ID of the Ezdoctemplatetype
     *
     * @return self
     */
    public function setFkiEzdoctemplatetypeID($fkiEzdoctemplatetypeID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($fkiEzdoctemplatetypeID)) {
            //throw new \InvalidArgumentException('non-nullable fkiEzdoctemplatetypeID cannot be null');
        //}

	//if (($fkiEzdoctemplatetypeID > 255)) {
        if (($fkiEzdoctemplatetypeID > 255)) {
	    //throw new \InvalidArgumentException('invalid value for $fkiEzdoctemplatetypeID when calling EzdoctemplatedocumentRequest., must be smaller than or equal to 255.');
            throw new \InvalidArgumentException('invalid value '.(is_null($fkiEzdoctemplatetypeID)?'null':'"'.$fkiEzdoctemplatetypeID.'"').' for fkiEzdoctemplatetypeID when calling EzdoctemplatedocumentRequest., must be smaller than or equal to 255.');
        }
	//if (($fkiEzdoctemplatetypeID < 0)) {
        if (($fkiEzdoctemplatetypeID < 0)) {
	    //throw new \InvalidArgumentException('invalid value for $fkiEzdoctemplatetypeID when calling EzdoctemplatedocumentRequest., must be bigger than or equal to 0.');
            throw new \InvalidArgumentException('invalid value '.(is_null($fkiEzdoctemplatetypeID)?'null':'"'.$fkiEzdoctemplatetypeID.'"').' for fkiEzdoctemplatetypeID when calling EzdoctemplatedocumentRequest., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['fkiEzdoctemplatetypeID'] = $fkiEzdoctemplatetypeID;
        $this->container['fkiEzdoctemplatetypeID'] = (is_null($fkiEzdoctemplatetypeID) ? null : (int) $fkiEzdoctemplatetypeID);

        return $this;
    }

    /**
     * Gets fkiEzdoctemplatefieldtypecategoryID
     *
     * @return int
     */
    public function getFkiEzdoctemplatefieldtypecategoryID()
    {
	//return $this->container['fkiEzdoctemplatefieldtypecategoryID'];
        return $this->container['fkiEzdoctemplatefieldtypecategoryID'];
    }

    /**
     * Sets fkiEzdoctemplatefieldtypecategoryID
     *
     * @param int $fkiEzdoctemplatefieldtypecategoryID The unique ID of the Ezdoctemplatefieldtypecategory
     *
     * @return self
     */
    public function setFkiEzdoctemplatefieldtypecategoryID($fkiEzdoctemplatefieldtypecategoryID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($fkiEzdoctemplatefieldtypecategoryID)) {
            //throw new \InvalidArgumentException('non-nullable fkiEzdoctemplatefieldtypecategoryID cannot be null');
        //}

	//if (($fkiEzdoctemplatefieldtypecategoryID > 255)) {
        if (($fkiEzdoctemplatefieldtypecategoryID > 255)) {
	    //throw new \InvalidArgumentException('invalid value for $fkiEzdoctemplatefieldtypecategoryID when calling EzdoctemplatedocumentRequest., must be smaller than or equal to 255.');
            throw new \InvalidArgumentException('invalid value '.(is_null($fkiEzdoctemplatefieldtypecategoryID)?'null':'"'.$fkiEzdoctemplatefieldtypecategoryID.'"').' for fkiEzdoctemplatefieldtypecategoryID when calling EzdoctemplatedocumentRequest., must be smaller than or equal to 255.');
        }
	//if (($fkiEzdoctemplatefieldtypecategoryID < 0)) {
        if (($fkiEzdoctemplatefieldtypecategoryID < 0)) {
	    //throw new \InvalidArgumentException('invalid value for $fkiEzdoctemplatefieldtypecategoryID when calling EzdoctemplatedocumentRequest., must be bigger than or equal to 0.');
            throw new \InvalidArgumentException('invalid value '.(is_null($fkiEzdoctemplatefieldtypecategoryID)?'null':'"'.$fkiEzdoctemplatefieldtypecategoryID.'"').' for fkiEzdoctemplatefieldtypecategoryID when calling EzdoctemplatedocumentRequest., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['fkiEzdoctemplatefieldtypecategoryID'] = $fkiEzdoctemplatefieldtypecategoryID;
        $this->container['fkiEzdoctemplatefieldtypecategoryID'] = (is_null($fkiEzdoctemplatefieldtypecategoryID) ? null : (int) $fkiEzdoctemplatefieldtypecategoryID);

        return $this;
    }

    /**
     * Gets eEzdoctemplatedocumentPrivacylevel
     *
     * @return \eZmaxAPI\Model\FieldEEzdoctemplatedocumentPrivacylevel|null
     */
    public function getEEzdoctemplatedocumentPrivacylevel()
    {
	//return $this->container['eEzdoctemplatedocumentPrivacylevel'];
        return $this->container['eEzdoctemplatedocumentPrivacylevel'];
    }

    /**
     * Sets eEzdoctemplatedocumentPrivacylevel
     *
     * @param \eZmaxAPI\Model\FieldEEzdoctemplatedocumentPrivacylevel|null $eEzdoctemplatedocumentPrivacylevel eEzdoctemplatedocumentPrivacylevel
     *
     * @return self
     */
    public function setEEzdoctemplatedocumentPrivacylevel($eEzdoctemplatedocumentPrivacylevel)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($eEzdoctemplatedocumentPrivacylevel)) {
            //throw new \InvalidArgumentException('non-nullable eEzdoctemplatedocumentPrivacylevel cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['eEzdoctemplatedocumentPrivacylevel'] = $eEzdoctemplatedocumentPrivacylevel;
        $this->container['eEzdoctemplatedocumentPrivacylevel'] = $eEzdoctemplatedocumentPrivacylevel;

        return $this;
    }

    /**
     * Gets bEzdoctemplatedocumentIsactive
     *
     * @return bool
     */
    public function getBEzdoctemplatedocumentIsactive()
    {
	//return $this->container['bEzdoctemplatedocumentIsactive'];
        return $this->container['bEzdoctemplatedocumentIsactive'];
    }

    /**
     * Sets bEzdoctemplatedocumentIsactive
     *
     * @param bool $bEzdoctemplatedocumentIsactive Whether the ezdoctemplatedocument is active or not
     *
     * @return self
     */
    public function setBEzdoctemplatedocumentIsactive($bEzdoctemplatedocumentIsactive)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($bEzdoctemplatedocumentIsactive)) {
            //throw new \InvalidArgumentException('non-nullable bEzdoctemplatedocumentIsactive cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['bEzdoctemplatedocumentIsactive'] = $bEzdoctemplatedocumentIsactive;
        $this->container['bEzdoctemplatedocumentIsactive'] = (is_null($bEzdoctemplatedocumentIsactive) ? null : (bool) $bEzdoctemplatedocumentIsactive);

        return $this;
    }

    /**
     * Gets objEzdoctemplatedocumentName
     *
     * @return \eZmaxAPI\Model\MultilingualEzdoctemplatedocumentName
     */
    public function getObjEzdoctemplatedocumentName()
    {
	//return $this->container['objEzdoctemplatedocumentName'];
        return $this->container['objEzdoctemplatedocumentName'];
    }

    /**
     * Sets objEzdoctemplatedocumentName
     *
     * @param \eZmaxAPI\Model\MultilingualEzdoctemplatedocumentName $objEzdoctemplatedocumentName objEzdoctemplatedocumentName
     *
     * @return self
     */
    public function setObjEzdoctemplatedocumentName($objEzdoctemplatedocumentName)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($objEzdoctemplatedocumentName)) {
            //throw new \InvalidArgumentException('non-nullable objEzdoctemplatedocumentName cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['objEzdoctemplatedocumentName'] = $objEzdoctemplatedocumentName;
        $this->container['objEzdoctemplatedocumentName'] = $objEzdoctemplatedocumentName;

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


