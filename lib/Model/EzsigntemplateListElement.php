<?php
/**
 * EzsigntemplateListElement
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
 * EzsigntemplateListElement Class Doc Comment
 *
 * @category Class
 * @description A Ezsigntemplate List Element
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class EzsigntemplateListElement implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ezsigntemplate-ListElement';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'pkiEzsigntemplateID' => 'int',
        'fkiEzsignfoldertypeID' => 'int',
        'fkiLanguageID' => 'int',
        'sEzsigntemplateDescription' => 'string',
        'iEzsigntemplatedocumentPagetotal' => 'int',
        'iEzsigntemplateSignaturetotal' => 'int',
        'iEzsigntemplateFormfieldtotal' => 'int',
        'bEzsigntemplateIncomplete' => 'bool',
        'sEzsignfoldertypeNameX' => 'string',
        'eEzsigntemplateType' => '\eZmaxAPI\Model\FieldEEzsigntemplateType'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'pkiEzsigntemplateID' => null,
        'fkiEzsignfoldertypeID' => null,
        'fkiLanguageID' => null,
        'sEzsigntemplateDescription' => null,
        'iEzsigntemplatedocumentPagetotal' => null,
        'iEzsigntemplateSignaturetotal' => null,
        'iEzsigntemplateFormfieldtotal' => null,
        'bEzsigntemplateIncomplete' => null,
        'sEzsignfoldertypeNameX' => null,
        'eEzsigntemplateType' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'pkiEzsigntemplateID' => false,
		'fkiEzsignfoldertypeID' => false,
		'fkiLanguageID' => false,
		'sEzsigntemplateDescription' => false,
		'iEzsigntemplatedocumentPagetotal' => false,
		'iEzsigntemplateSignaturetotal' => false,
		'iEzsigntemplateFormfieldtotal' => false,
		'bEzsigntemplateIncomplete' => false,
		'sEzsignfoldertypeNameX' => false,
		'eEzsigntemplateType' => false
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
        'pkiEzsigntemplateID' => 'pkiEzsigntemplateID',
        'fkiEzsignfoldertypeID' => 'fkiEzsignfoldertypeID',
        'fkiLanguageID' => 'fkiLanguageID',
        'sEzsigntemplateDescription' => 'sEzsigntemplateDescription',
        'iEzsigntemplatedocumentPagetotal' => 'iEzsigntemplatedocumentPagetotal',
        'iEzsigntemplateSignaturetotal' => 'iEzsigntemplateSignaturetotal',
        'iEzsigntemplateFormfieldtotal' => 'iEzsigntemplateFormfieldtotal',
        'bEzsigntemplateIncomplete' => 'bEzsigntemplateIncomplete',
        'sEzsignfoldertypeNameX' => 'sEzsignfoldertypeNameX',
        'eEzsigntemplateType' => 'eEzsigntemplateType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pkiEzsigntemplateID' => 'setPkiEzsigntemplateID',
        'fkiEzsignfoldertypeID' => 'setFkiEzsignfoldertypeID',
        'fkiLanguageID' => 'setFkiLanguageID',
        'sEzsigntemplateDescription' => 'setSEzsigntemplateDescription',
        'iEzsigntemplatedocumentPagetotal' => 'setIEzsigntemplatedocumentPagetotal',
        'iEzsigntemplateSignaturetotal' => 'setIEzsigntemplateSignaturetotal',
        'iEzsigntemplateFormfieldtotal' => 'setIEzsigntemplateFormfieldtotal',
        'bEzsigntemplateIncomplete' => 'setBEzsigntemplateIncomplete',
        'sEzsignfoldertypeNameX' => 'setSEzsignfoldertypeNameX',
        'eEzsigntemplateType' => 'setEEzsigntemplateType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pkiEzsigntemplateID' => 'getPkiEzsigntemplateID',
        'fkiEzsignfoldertypeID' => 'getFkiEzsignfoldertypeID',
        'fkiLanguageID' => 'getFkiLanguageID',
        'sEzsigntemplateDescription' => 'getSEzsigntemplateDescription',
        'iEzsigntemplatedocumentPagetotal' => 'getIEzsigntemplatedocumentPagetotal',
        'iEzsigntemplateSignaturetotal' => 'getIEzsigntemplateSignaturetotal',
        'iEzsigntemplateFormfieldtotal' => 'getIEzsigntemplateFormfieldtotal',
        'bEzsigntemplateIncomplete' => 'getBEzsigntemplateIncomplete',
        'sEzsignfoldertypeNameX' => 'getSEzsignfoldertypeNameX',
        'eEzsigntemplateType' => 'getEEzsigntemplateType'
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
        $this->setIfExists('pkiEzsigntemplateID', $data ?? [], null);
        $this->setIfExists('fkiEzsignfoldertypeID', $data ?? [], null);
        $this->setIfExists('fkiLanguageID', $data ?? [], null);
        $this->setIfExists('sEzsigntemplateDescription', $data ?? [], null);
        $this->setIfExists('iEzsigntemplatedocumentPagetotal', $data ?? [], null);
        $this->setIfExists('iEzsigntemplateSignaturetotal', $data ?? [], null);
        $this->setIfExists('iEzsigntemplateFormfieldtotal', $data ?? [], null);
        $this->setIfExists('bEzsigntemplateIncomplete', $data ?? [], null);
        $this->setIfExists('sEzsignfoldertypeNameX', $data ?? [], null);
        $this->setIfExists('eEzsigntemplateType', $data ?? [], null);
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

        if ($this->container['pkiEzsigntemplateID'] === null) {
            $invalidProperties[] = "'pkiEzsigntemplateID' can't be null";
        }
        if (($this->container['pkiEzsigntemplateID'] < 0)) {
            $invalidProperties[] = "invalid value for 'pkiEzsigntemplateID', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['fkiEzsignfoldertypeID']) && ($this->container['fkiEzsignfoldertypeID'] > 65535)) {
            $invalidProperties[] = "invalid value for 'fkiEzsignfoldertypeID', must be smaller than or equal to 65535.";
        }

        if (!is_null($this->container['fkiEzsignfoldertypeID']) && ($this->container['fkiEzsignfoldertypeID'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiEzsignfoldertypeID', must be bigger than or equal to 0.";
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

        if ($this->container['sEzsigntemplateDescription'] === null) {
            $invalidProperties[] = "'sEzsigntemplateDescription' can't be null";
        }
        if (!is_null($this->container['iEzsigntemplatedocumentPagetotal']) && ($this->container['iEzsigntemplatedocumentPagetotal'] < 1)) {
            $invalidProperties[] = "invalid value for 'iEzsigntemplatedocumentPagetotal', must be bigger than or equal to 1.";
        }

        if ($this->container['bEzsigntemplateIncomplete'] === null) {
            $invalidProperties[] = "'bEzsigntemplateIncomplete' can't be null";
        }
        if ($this->container['eEzsigntemplateType'] === null) {
            $invalidProperties[] = "'eEzsigntemplateType' can't be null";
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
     * Gets pkiEzsigntemplateID
     *
     * @return int
     */
    public function getPkiEzsigntemplateID()
    {
        return $this->container['pkiEzsigntemplateID'];
    }

    /**
     * Sets pkiEzsigntemplateID
     *
     * @param int $pkiEzsigntemplateID The unique ID of the Ezsigntemplate
     *
     * @return self
     */
    public function setPkiEzsigntemplateID($pkiEzsigntemplateID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($pkiEzsigntemplateID)) {
            //throw new \InvalidArgumentException('non-nullable pkiEzsigntemplateID cannot be null');
        //}

//        if (($pkiEzsigntemplateID < 0)) {
        if (($pkiEzsigntemplateID < 0)) {
            throw new \InvalidArgumentException('invalid value for $pkiEzsigntemplateID when calling EzsigntemplateListElement., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['pkiEzsigntemplateID'] = $pkiEzsigntemplateID;
        $this->container['pkiEzsigntemplateID'] = (is_null($pkiEzsigntemplateID) ? null : (int) $pkiEzsigntemplateID);

        return $this;
    }

    /**
     * Gets fkiEzsignfoldertypeID
     *
     * @return int|null
     */
    public function getFkiEzsignfoldertypeID()
    {
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

//        if (($fkiEzsignfoldertypeID > 65535)) {
        if (!is_null($fkiEzsignfoldertypeID) && ($fkiEzsignfoldertypeID > 65535)) {
            throw new \InvalidArgumentException('invalid value for $fkiEzsignfoldertypeID when calling EzsigntemplateListElement., must be smaller than or equal to 65535.');
        }
//        if (($fkiEzsignfoldertypeID < 0)) {
        if (!is_null($fkiEzsignfoldertypeID) && ($fkiEzsignfoldertypeID < 0)) {
            throw new \InvalidArgumentException('invalid value for $fkiEzsignfoldertypeID when calling EzsigntemplateListElement., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['fkiEzsignfoldertypeID'] = $fkiEzsignfoldertypeID;
        $this->container['fkiEzsignfoldertypeID'] = (is_null($fkiEzsignfoldertypeID) ? null : (int) $fkiEzsignfoldertypeID);

        return $this;
    }

    /**
     * Gets fkiLanguageID
     *
     * @return int
     */
    public function getFkiLanguageID()
    {
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

//        if (($fkiLanguageID > 2)) {
        if (($fkiLanguageID > 2)) {
            throw new \InvalidArgumentException('invalid value for $fkiLanguageID when calling EzsigntemplateListElement., must be smaller than or equal to 2.');
        }
//        if (($fkiLanguageID < 1)) {
        if (($fkiLanguageID < 1)) {
            throw new \InvalidArgumentException('invalid value for $fkiLanguageID when calling EzsigntemplateListElement., must be bigger than or equal to 1.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['fkiLanguageID'] = $fkiLanguageID;
        $this->container['fkiLanguageID'] = (is_null($fkiLanguageID) ? null : (int) $fkiLanguageID);

        return $this;
    }

    /**
     * Gets sEzsigntemplateDescription
     *
     * @return string
     */
    public function getSEzsigntemplateDescription()
    {
        return is_null($this->container['sEzsigntemplateDescription']) ? null : trim($this->container['sEzsigntemplateDescription']);
    }

    /**
     * Sets sEzsigntemplateDescription
     *
     * @param string $sEzsigntemplateDescription The description of the Ezsigntemplate
     *
     * @return self
     */
    public function setSEzsigntemplateDescription($sEzsigntemplateDescription)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sEzsigntemplateDescription)) {
            //throw new \InvalidArgumentException('non-nullable sEzsigntemplateDescription cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sEzsigntemplateDescription'] = $sEzsigntemplateDescription;
        $this->container['sEzsigntemplateDescription'] = (is_null($sEzsigntemplateDescription) ? null : trim((string) $sEzsigntemplateDescription));

        return $this;
    }

    /**
     * Gets iEzsigntemplatedocumentPagetotal
     *
     * @return int|null
     */
    public function getIEzsigntemplatedocumentPagetotal()
    {
        return $this->container['iEzsigntemplatedocumentPagetotal'];
    }

    /**
     * Sets iEzsigntemplatedocumentPagetotal
     *
     * @param int|null $iEzsigntemplatedocumentPagetotal The number of pages in the Ezsigntemplatedocument.
     *
     * @return self
     */
    public function setIEzsigntemplatedocumentPagetotal($iEzsigntemplatedocumentPagetotal)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($iEzsigntemplatedocumentPagetotal)) {
            //throw new \InvalidArgumentException('non-nullable iEzsigntemplatedocumentPagetotal cannot be null');
        //}

//        if (($iEzsigntemplatedocumentPagetotal < 1)) {
        if (!is_null($iEzsigntemplatedocumentPagetotal) && ($iEzsigntemplatedocumentPagetotal < 1)) {
            throw new \InvalidArgumentException('invalid value for $iEzsigntemplatedocumentPagetotal when calling EzsigntemplateListElement., must be bigger than or equal to 1.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['iEzsigntemplatedocumentPagetotal'] = $iEzsigntemplatedocumentPagetotal;
        $this->container['iEzsigntemplatedocumentPagetotal'] = (is_null($iEzsigntemplatedocumentPagetotal) ? null : (int) $iEzsigntemplatedocumentPagetotal);

        return $this;
    }

    /**
     * Gets iEzsigntemplateSignaturetotal
     *
     * @return int|null
     */
    public function getIEzsigntemplateSignaturetotal()
    {
        return $this->container['iEzsigntemplateSignaturetotal'];
    }

    /**
     * Sets iEzsigntemplateSignaturetotal
     *
     * @param int|null $iEzsigntemplateSignaturetotal The number of total signatures in the Ezsigntemplate.
     *
     * @return self
     */
    public function setIEzsigntemplateSignaturetotal($iEzsigntemplateSignaturetotal)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($iEzsigntemplateSignaturetotal)) {
            //throw new \InvalidArgumentException('non-nullable iEzsigntemplateSignaturetotal cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['iEzsigntemplateSignaturetotal'] = $iEzsigntemplateSignaturetotal;
        $this->container['iEzsigntemplateSignaturetotal'] = (is_null($iEzsigntemplateSignaturetotal) ? null : (int) $iEzsigntemplateSignaturetotal);

        return $this;
    }

    /**
     * Gets iEzsigntemplateFormfieldtotal
     *
     * @return int|null
     */
    public function getIEzsigntemplateFormfieldtotal()
    {
        return $this->container['iEzsigntemplateFormfieldtotal'];
    }

    /**
     * Sets iEzsigntemplateFormfieldtotal
     *
     * @param int|null $iEzsigntemplateFormfieldtotal The number of total form fields in the Ezsigntemplate.
     *
     * @return self
     */
    public function setIEzsigntemplateFormfieldtotal($iEzsigntemplateFormfieldtotal)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($iEzsigntemplateFormfieldtotal)) {
            //throw new \InvalidArgumentException('non-nullable iEzsigntemplateFormfieldtotal cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['iEzsigntemplateFormfieldtotal'] = $iEzsigntemplateFormfieldtotal;
        $this->container['iEzsigntemplateFormfieldtotal'] = (is_null($iEzsigntemplateFormfieldtotal) ? null : (int) $iEzsigntemplateFormfieldtotal);

        return $this;
    }

    /**
     * Gets bEzsigntemplateIncomplete
     *
     * @return bool
     */
    public function getBEzsigntemplateIncomplete()
    {
        return $this->container['bEzsigntemplateIncomplete'];
    }

    /**
     * Sets bEzsigntemplateIncomplete
     *
     * @param bool $bEzsigntemplateIncomplete Indicate the Ezsigntemplate is incomplete and cannot be used
     *
     * @return self
     */
    public function setBEzsigntemplateIncomplete($bEzsigntemplateIncomplete)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($bEzsigntemplateIncomplete)) {
            //throw new \InvalidArgumentException('non-nullable bEzsigntemplateIncomplete cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['bEzsigntemplateIncomplete'] = $bEzsigntemplateIncomplete;
        $this->container['bEzsigntemplateIncomplete'] = (is_null($bEzsigntemplateIncomplete) ? null : (bool) $bEzsigntemplateIncomplete);

        return $this;
    }

    /**
     * Gets sEzsignfoldertypeNameX
     *
     * @return string|null
     */
    public function getSEzsignfoldertypeNameX()
    {
        return is_null($this->container['sEzsignfoldertypeNameX']) ? null : trim($this->container['sEzsignfoldertypeNameX']);
    }

    /**
     * Sets sEzsignfoldertypeNameX
     *
     * @param string|null $sEzsignfoldertypeNameX The name of the Ezsignfoldertype in the language of the requester
     *
     * @return self
     */
    public function setSEzsignfoldertypeNameX($sEzsignfoldertypeNameX)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sEzsignfoldertypeNameX)) {
            //throw new \InvalidArgumentException('non-nullable sEzsignfoldertypeNameX cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sEzsignfoldertypeNameX'] = $sEzsignfoldertypeNameX;
        $this->container['sEzsignfoldertypeNameX'] = (is_null($sEzsignfoldertypeNameX) ? null : trim((string) $sEzsignfoldertypeNameX));

        return $this;
    }

    /**
     * Gets eEzsigntemplateType
     *
     * @return \eZmaxAPI\Model\FieldEEzsigntemplateType
     */
    public function getEEzsigntemplateType()
    {
        return $this->container['eEzsigntemplateType'];
    }

    /**
     * Sets eEzsigntemplateType
     *
     * @param \eZmaxAPI\Model\FieldEEzsigntemplateType $eEzsigntemplateType eEzsigntemplateType
     *
     * @return self
     */
    public function setEEzsigntemplateType($eEzsigntemplateType)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($eEzsigntemplateType)) {
            //throw new \InvalidArgumentException('non-nullable eEzsigntemplateType cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['eEzsigntemplateType'] = $eEzsigntemplateType;
        $this->container['eEzsigntemplateType'] = $eEzsigntemplateType;

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


