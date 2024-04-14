<?php
/**
 * EzsignbulksendListElement
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
 * EzsignbulksendListElement Class Doc Comment
 *
 * @category Class
 * @description An Ezsignbulksend List Element
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class EzsignbulksendListElement implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ezsignbulksend-ListElement';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'pkiEzsignbulksendID' => 'int',
        'fkiEzsignfoldertypeID' => 'int',
        'sEzsignbulksendDescription' => 'string',
        'sEzsignfoldertypeNameX' => 'string',
        'bEzsignbulksendNeedvalidation' => 'bool',
        'iEzsignbulksendtransmission' => 'int',
        'iEzsignfolder' => 'int',
        'iEzsigndocument' => 'int',
        'iEzsignsignature' => 'int',
        'iEzsignsignatureSigned' => 'int',
        'bEzsignbulksendIsactive' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'pkiEzsignbulksendID' => null,
        'fkiEzsignfoldertypeID' => null,
        'sEzsignbulksendDescription' => null,
        'sEzsignfoldertypeNameX' => null,
        'bEzsignbulksendNeedvalidation' => null,
        'iEzsignbulksendtransmission' => null,
        'iEzsignfolder' => null,
        'iEzsigndocument' => null,
        'iEzsignsignature' => null,
        'iEzsignsignatureSigned' => null,
        'bEzsignbulksendIsactive' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'pkiEzsignbulksendID' => false,
		'fkiEzsignfoldertypeID' => false,
		'sEzsignbulksendDescription' => false,
		'sEzsignfoldertypeNameX' => false,
		'bEzsignbulksendNeedvalidation' => false,
		'iEzsignbulksendtransmission' => false,
		'iEzsignfolder' => false,
		'iEzsigndocument' => false,
		'iEzsignsignature' => false,
		'iEzsignsignatureSigned' => false,
		'bEzsignbulksendIsactive' => false
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
        'pkiEzsignbulksendID' => 'pkiEzsignbulksendID',
        'fkiEzsignfoldertypeID' => 'fkiEzsignfoldertypeID',
        'sEzsignbulksendDescription' => 'sEzsignbulksendDescription',
        'sEzsignfoldertypeNameX' => 'sEzsignfoldertypeNameX',
        'bEzsignbulksendNeedvalidation' => 'bEzsignbulksendNeedvalidation',
        'iEzsignbulksendtransmission' => 'iEzsignbulksendtransmission',
        'iEzsignfolder' => 'iEzsignfolder',
        'iEzsigndocument' => 'iEzsigndocument',
        'iEzsignsignature' => 'iEzsignsignature',
        'iEzsignsignatureSigned' => 'iEzsignsignatureSigned',
        'bEzsignbulksendIsactive' => 'bEzsignbulksendIsactive'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pkiEzsignbulksendID' => 'setPkiEzsignbulksendID',
        'fkiEzsignfoldertypeID' => 'setFkiEzsignfoldertypeID',
        'sEzsignbulksendDescription' => 'setSEzsignbulksendDescription',
        'sEzsignfoldertypeNameX' => 'setSEzsignfoldertypeNameX',
        'bEzsignbulksendNeedvalidation' => 'setBEzsignbulksendNeedvalidation',
        'iEzsignbulksendtransmission' => 'setIEzsignbulksendtransmission',
        'iEzsignfolder' => 'setIEzsignfolder',
        'iEzsigndocument' => 'setIEzsigndocument',
        'iEzsignsignature' => 'setIEzsignsignature',
        'iEzsignsignatureSigned' => 'setIEzsignsignatureSigned',
        'bEzsignbulksendIsactive' => 'setBEzsignbulksendIsactive'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pkiEzsignbulksendID' => 'getPkiEzsignbulksendID',
        'fkiEzsignfoldertypeID' => 'getFkiEzsignfoldertypeID',
        'sEzsignbulksendDescription' => 'getSEzsignbulksendDescription',
        'sEzsignfoldertypeNameX' => 'getSEzsignfoldertypeNameX',
        'bEzsignbulksendNeedvalidation' => 'getBEzsignbulksendNeedvalidation',
        'iEzsignbulksendtransmission' => 'getIEzsignbulksendtransmission',
        'iEzsignfolder' => 'getIEzsignfolder',
        'iEzsigndocument' => 'getIEzsigndocument',
        'iEzsignsignature' => 'getIEzsignsignature',
        'iEzsignsignatureSigned' => 'getIEzsignsignatureSigned',
        'bEzsignbulksendIsactive' => 'getBEzsignbulksendIsactive'
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
        $this->setIfExists('pkiEzsignbulksendID', $data ?? [], null);
        $this->setIfExists('fkiEzsignfoldertypeID', $data ?? [], null);
        $this->setIfExists('sEzsignbulksendDescription', $data ?? [], null);
        $this->setIfExists('sEzsignfoldertypeNameX', $data ?? [], null);
        $this->setIfExists('bEzsignbulksendNeedvalidation', $data ?? [], null);
        $this->setIfExists('iEzsignbulksendtransmission', $data ?? [], null);
        $this->setIfExists('iEzsignfolder', $data ?? [], null);
        $this->setIfExists('iEzsigndocument', $data ?? [], null);
        $this->setIfExists('iEzsignsignature', $data ?? [], null);
        $this->setIfExists('iEzsignsignatureSigned', $data ?? [], null);
        $this->setIfExists('bEzsignbulksendIsactive', $data ?? [], null);
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

        if ($this->container['pkiEzsignbulksendID'] === null) {
            $invalidProperties[] = "'pkiEzsignbulksendID' can't be null";
        }
        if (($this->container['pkiEzsignbulksendID'] < 0)) {
            $invalidProperties[] = "invalid value for 'pkiEzsignbulksendID', must be bigger than or equal to 0.";
        }

        if ($this->container['fkiEzsignfoldertypeID'] === null) {
            $invalidProperties[] = "'fkiEzsignfoldertypeID' can't be null";
        }
        if (($this->container['fkiEzsignfoldertypeID'] > 65535)) {
            $invalidProperties[] = "invalid value for 'fkiEzsignfoldertypeID', must be smaller than or equal to 65535.";
        }

        if (($this->container['fkiEzsignfoldertypeID'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiEzsignfoldertypeID', must be bigger than or equal to 0.";
        }

        if ($this->container['sEzsignbulksendDescription'] === null) {
            $invalidProperties[] = "'sEzsignbulksendDescription' can't be null";
        }
        if ($this->container['sEzsignfoldertypeNameX'] === null) {
            $invalidProperties[] = "'sEzsignfoldertypeNameX' can't be null";
        }
        if ($this->container['bEzsignbulksendNeedvalidation'] === null) {
            $invalidProperties[] = "'bEzsignbulksendNeedvalidation' can't be null";
        }
        if ($this->container['iEzsignbulksendtransmission'] === null) {
            $invalidProperties[] = "'iEzsignbulksendtransmission' can't be null";
        }
        if ($this->container['iEzsignfolder'] === null) {
            $invalidProperties[] = "'iEzsignfolder' can't be null";
        }
        if ($this->container['iEzsigndocument'] === null) {
            $invalidProperties[] = "'iEzsigndocument' can't be null";
        }
        if ($this->container['iEzsignsignature'] === null) {
            $invalidProperties[] = "'iEzsignsignature' can't be null";
        }
        if ($this->container['iEzsignsignatureSigned'] === null) {
            $invalidProperties[] = "'iEzsignsignatureSigned' can't be null";
        }
        if ($this->container['bEzsignbulksendIsactive'] === null) {
            $invalidProperties[] = "'bEzsignbulksendIsactive' can't be null";
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
     * Gets pkiEzsignbulksendID
     *
     * @return int
     */
    public function getPkiEzsignbulksendID()
    {
        return $this->container['pkiEzsignbulksendID'];
    }

    /**
     * Sets pkiEzsignbulksendID
     *
     * @param int $pkiEzsignbulksendID The unique ID of the Ezsignbulksend
     *
     * @return self
     */
    public function setPkiEzsignbulksendID($pkiEzsignbulksendID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($pkiEzsignbulksendID)) {
            //throw new \InvalidArgumentException('non-nullable pkiEzsignbulksendID cannot be null');
        //}

//        if (($pkiEzsignbulksendID < 0)) {
        if (($pkiEzsignbulksendID < 0)) {
            throw new \InvalidArgumentException('invalid value for $pkiEzsignbulksendID when calling EzsignbulksendListElement., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['pkiEzsignbulksendID'] = $pkiEzsignbulksendID;
        $this->container['pkiEzsignbulksendID'] = (is_null($pkiEzsignbulksendID) ? null : (int) $pkiEzsignbulksendID);

        return $this;
    }

    /**
     * Gets fkiEzsignfoldertypeID
     *
     * @return int
     */
    public function getFkiEzsignfoldertypeID()
    {
        return $this->container['fkiEzsignfoldertypeID'];
    }

    /**
     * Sets fkiEzsignfoldertypeID
     *
     * @param int $fkiEzsignfoldertypeID The unique ID of the Ezsignfoldertype.
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
        if (($fkiEzsignfoldertypeID > 65535)) {
            throw new \InvalidArgumentException('invalid value for $fkiEzsignfoldertypeID when calling EzsignbulksendListElement., must be smaller than or equal to 65535.');
        }
//        if (($fkiEzsignfoldertypeID < 0)) {
        if (($fkiEzsignfoldertypeID < 0)) {
            throw new \InvalidArgumentException('invalid value for $fkiEzsignfoldertypeID when calling EzsignbulksendListElement., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['fkiEzsignfoldertypeID'] = $fkiEzsignfoldertypeID;
        $this->container['fkiEzsignfoldertypeID'] = (is_null($fkiEzsignfoldertypeID) ? null : (int) $fkiEzsignfoldertypeID);

        return $this;
    }

    /**
     * Gets sEzsignbulksendDescription
     *
     * @return string
     */
    public function getSEzsignbulksendDescription()
    {
        return is_null($this->container['sEzsignbulksendDescription']) ? null : trim($this->container['sEzsignbulksendDescription']);
    }

    /**
     * Sets sEzsignbulksendDescription
     *
     * @param string $sEzsignbulksendDescription The description of the Ezsignbulksend
     *
     * @return self
     */
    public function setSEzsignbulksendDescription($sEzsignbulksendDescription)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sEzsignbulksendDescription)) {
            //throw new \InvalidArgumentException('non-nullable sEzsignbulksendDescription cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sEzsignbulksendDescription'] = $sEzsignbulksendDescription;
        $this->container['sEzsignbulksendDescription'] = (is_null($sEzsignbulksendDescription) ? null : trim((string) $sEzsignbulksendDescription));

        return $this;
    }

    /**
     * Gets sEzsignfoldertypeNameX
     *
     * @return string
     */
    public function getSEzsignfoldertypeNameX()
    {
        return is_null($this->container['sEzsignfoldertypeNameX']) ? null : trim($this->container['sEzsignfoldertypeNameX']);
    }

    /**
     * Sets sEzsignfoldertypeNameX
     *
     * @param string $sEzsignfoldertypeNameX The name of the Ezsignfoldertype in the language of the requester
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
     * Gets bEzsignbulksendNeedvalidation
     *
     * @return bool
     */
    public function getBEzsignbulksendNeedvalidation()
    {
        return $this->container['bEzsignbulksendNeedvalidation'];
    }

    /**
     * Sets bEzsignbulksendNeedvalidation
     *
     * @param bool $bEzsignbulksendNeedvalidation Whether the Ezsigntemplatepackage was automatically modified and needs a manual validation
     *
     * @return self
     */
    public function setBEzsignbulksendNeedvalidation($bEzsignbulksendNeedvalidation)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($bEzsignbulksendNeedvalidation)) {
            //throw new \InvalidArgumentException('non-nullable bEzsignbulksendNeedvalidation cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['bEzsignbulksendNeedvalidation'] = $bEzsignbulksendNeedvalidation;
        $this->container['bEzsignbulksendNeedvalidation'] = (is_null($bEzsignbulksendNeedvalidation) ? null : (bool) $bEzsignbulksendNeedvalidation);

        return $this;
    }

    /**
     * Gets iEzsignbulksendtransmission
     *
     * @return int
     */
    public function getIEzsignbulksendtransmission()
    {
        return $this->container['iEzsignbulksendtransmission'];
    }

    /**
     * Sets iEzsignbulksendtransmission
     *
     * @param int $iEzsignbulksendtransmission The total number of Ezsignbulksendtransmissions in the Ezsignbulksend
     *
     * @return self
     */
    public function setIEzsignbulksendtransmission($iEzsignbulksendtransmission)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($iEzsignbulksendtransmission)) {
            //throw new \InvalidArgumentException('non-nullable iEzsignbulksendtransmission cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['iEzsignbulksendtransmission'] = $iEzsignbulksendtransmission;
        $this->container['iEzsignbulksendtransmission'] = (is_null($iEzsignbulksendtransmission) ? null : (int) $iEzsignbulksendtransmission);

        return $this;
    }

    /**
     * Gets iEzsignfolder
     *
     * @return int
     */
    public function getIEzsignfolder()
    {
        return $this->container['iEzsignfolder'];
    }

    /**
     * Sets iEzsignfolder
     *
     * @param int $iEzsignfolder The total number of Ezsignfolders in the Ezsignbulksend
     *
     * @return self
     */
    public function setIEzsignfolder($iEzsignfolder)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($iEzsignfolder)) {
            //throw new \InvalidArgumentException('non-nullable iEzsignfolder cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['iEzsignfolder'] = $iEzsignfolder;
        $this->container['iEzsignfolder'] = (is_null($iEzsignfolder) ? null : (int) $iEzsignfolder);

        return $this;
    }

    /**
     * Gets iEzsigndocument
     *
     * @return int
     */
    public function getIEzsigndocument()
    {
        return $this->container['iEzsigndocument'];
    }

    /**
     * Sets iEzsigndocument
     *
     * @param int $iEzsigndocument The total number of Ezsigndocuments in the Ezsignbulksend
     *
     * @return self
     */
    public function setIEzsigndocument($iEzsigndocument)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($iEzsigndocument)) {
            //throw new \InvalidArgumentException('non-nullable iEzsigndocument cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['iEzsigndocument'] = $iEzsigndocument;
        $this->container['iEzsigndocument'] = (is_null($iEzsigndocument) ? null : (int) $iEzsigndocument);

        return $this;
    }

    /**
     * Gets iEzsignsignature
     *
     * @return int
     */
    public function getIEzsignsignature()
    {
        return $this->container['iEzsignsignature'];
    }

    /**
     * Sets iEzsignsignature
     *
     * @param int $iEzsignsignature The total number of Ezsignsignature in the Ezsignbulksend
     *
     * @return self
     */
    public function setIEzsignsignature($iEzsignsignature)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($iEzsignsignature)) {
            //throw new \InvalidArgumentException('non-nullable iEzsignsignature cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['iEzsignsignature'] = $iEzsignsignature;
        $this->container['iEzsignsignature'] = (is_null($iEzsignsignature) ? null : (int) $iEzsignsignature);

        return $this;
    }

    /**
     * Gets iEzsignsignatureSigned
     *
     * @return int
     */
    public function getIEzsignsignatureSigned()
    {
        return $this->container['iEzsignsignatureSigned'];
    }

    /**
     * Sets iEzsignsignatureSigned
     *
     * @param int $iEzsignsignatureSigned The total number of already signed Ezsignsignature blocks in the Ezsignbulksend
     *
     * @return self
     */
    public function setIEzsignsignatureSigned($iEzsignsignatureSigned)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($iEzsignsignatureSigned)) {
            //throw new \InvalidArgumentException('non-nullable iEzsignsignatureSigned cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['iEzsignsignatureSigned'] = $iEzsignsignatureSigned;
        $this->container['iEzsignsignatureSigned'] = (is_null($iEzsignsignatureSigned) ? null : (int) $iEzsignsignatureSigned);

        return $this;
    }

    /**
     * Gets bEzsignbulksendIsactive
     *
     * @return bool
     */
    public function getBEzsignbulksendIsactive()
    {
        return $this->container['bEzsignbulksendIsactive'];
    }

    /**
     * Sets bEzsignbulksendIsactive
     *
     * @param bool $bEzsignbulksendIsactive Whether the Ezsignbulksend is active or not
     *
     * @return self
     */
    public function setBEzsignbulksendIsactive($bEzsignbulksendIsactive)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($bEzsignbulksendIsactive)) {
            //throw new \InvalidArgumentException('non-nullable bEzsignbulksendIsactive cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['bEzsignbulksendIsactive'] = $bEzsignbulksendIsactive;
        $this->container['bEzsignbulksendIsactive'] = (is_null($bEzsignbulksendIsactive) ? null : (bool) $bEzsignbulksendIsactive);

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


