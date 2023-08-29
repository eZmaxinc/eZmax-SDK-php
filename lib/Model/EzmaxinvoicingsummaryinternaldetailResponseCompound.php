<?php
/**
 * EzmaxinvoicingsummaryinternaldetailResponseCompound
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
 * The version of the OpenAPI document: 1.1.18
 * Contact: support-api@ezmax.ca
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.0.0
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
 * EzmaxinvoicingsummaryinternaldetailResponseCompound Class Doc Comment
 *
 * @category Class
 * @description A Ezmaxinvoicingsummaryinternaldetail Object
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class EzmaxinvoicingsummaryinternaldetailResponseCompound implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ezmaxinvoicingsummaryinternaldetail-ResponseCompound';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'pkiEzmaxinvoicingsummaryinternaldetailID' => 'int',
        'fkiEzmaxinvoicingsummaryinternalID' => 'int',
        'fkiEzmaxproductID' => 'int',
        'sEzmaxproductDescriptionX' => 'string',
        'fkiBillingentityexternalID' => 'int',
        'sBillingentityexternalDescription' => 'string',
        'dEzmaxinvoicingsummaryinternaldetailCountreal' => 'string',
        'dEzmaxinvoicingsummaryinternaldetailSubtotal' => 'string',
        'dEzmaxinvoicingsummaryinternaldetailRebate' => 'string',
        'dEzmaxinvoicingsummaryinternaldetailTotal' => 'string',
        'bEzmaxinvoicingsummaryinternaldetailAdjustment' => 'bool',
        'tEzmaxproductHelpX' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'pkiEzmaxinvoicingsummaryinternaldetailID' => null,
        'fkiEzmaxinvoicingsummaryinternalID' => null,
        'fkiEzmaxproductID' => null,
        'sEzmaxproductDescriptionX' => null,
        'fkiBillingentityexternalID' => null,
        'sBillingentityexternalDescription' => null,
        'dEzmaxinvoicingsummaryinternaldetailCountreal' => null,
        'dEzmaxinvoicingsummaryinternaldetailSubtotal' => null,
        'dEzmaxinvoicingsummaryinternaldetailRebate' => null,
        'dEzmaxinvoicingsummaryinternaldetailTotal' => null,
        'bEzmaxinvoicingsummaryinternaldetailAdjustment' => null,
        'tEzmaxproductHelpX' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'pkiEzmaxinvoicingsummaryinternaldetailID' => false,
		'fkiEzmaxinvoicingsummaryinternalID' => false,
		'fkiEzmaxproductID' => false,
		'sEzmaxproductDescriptionX' => false,
		'fkiBillingentityexternalID' => false,
		'sBillingentityexternalDescription' => false,
		'dEzmaxinvoicingsummaryinternaldetailCountreal' => false,
		'dEzmaxinvoicingsummaryinternaldetailSubtotal' => false,
		'dEzmaxinvoicingsummaryinternaldetailRebate' => false,
		'dEzmaxinvoicingsummaryinternaldetailTotal' => false,
		'bEzmaxinvoicingsummaryinternaldetailAdjustment' => false,
		'tEzmaxproductHelpX' => false
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
        'pkiEzmaxinvoicingsummaryinternaldetailID' => 'pkiEzmaxinvoicingsummaryinternaldetailID',
        'fkiEzmaxinvoicingsummaryinternalID' => 'fkiEzmaxinvoicingsummaryinternalID',
        'fkiEzmaxproductID' => 'fkiEzmaxproductID',
        'sEzmaxproductDescriptionX' => 'sEzmaxproductDescriptionX',
        'fkiBillingentityexternalID' => 'fkiBillingentityexternalID',
        'sBillingentityexternalDescription' => 'sBillingentityexternalDescription',
        'dEzmaxinvoicingsummaryinternaldetailCountreal' => 'dEzmaxinvoicingsummaryinternaldetailCountreal',
        'dEzmaxinvoicingsummaryinternaldetailSubtotal' => 'dEzmaxinvoicingsummaryinternaldetailSubtotal',
        'dEzmaxinvoicingsummaryinternaldetailRebate' => 'dEzmaxinvoicingsummaryinternaldetailRebate',
        'dEzmaxinvoicingsummaryinternaldetailTotal' => 'dEzmaxinvoicingsummaryinternaldetailTotal',
        'bEzmaxinvoicingsummaryinternaldetailAdjustment' => 'bEzmaxinvoicingsummaryinternaldetailAdjustment',
        'tEzmaxproductHelpX' => 'tEzmaxproductHelpX'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pkiEzmaxinvoicingsummaryinternaldetailID' => 'setPkiEzmaxinvoicingsummaryinternaldetailID',
        'fkiEzmaxinvoicingsummaryinternalID' => 'setFkiEzmaxinvoicingsummaryinternalID',
        'fkiEzmaxproductID' => 'setFkiEzmaxproductID',
        'sEzmaxproductDescriptionX' => 'setSEzmaxproductDescriptionX',
        'fkiBillingentityexternalID' => 'setFkiBillingentityexternalID',
        'sBillingentityexternalDescription' => 'setSBillingentityexternalDescription',
        'dEzmaxinvoicingsummaryinternaldetailCountreal' => 'setDEzmaxinvoicingsummaryinternaldetailCountreal',
        'dEzmaxinvoicingsummaryinternaldetailSubtotal' => 'setDEzmaxinvoicingsummaryinternaldetailSubtotal',
        'dEzmaxinvoicingsummaryinternaldetailRebate' => 'setDEzmaxinvoicingsummaryinternaldetailRebate',
        'dEzmaxinvoicingsummaryinternaldetailTotal' => 'setDEzmaxinvoicingsummaryinternaldetailTotal',
        'bEzmaxinvoicingsummaryinternaldetailAdjustment' => 'setBEzmaxinvoicingsummaryinternaldetailAdjustment',
        'tEzmaxproductHelpX' => 'setTEzmaxproductHelpX'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pkiEzmaxinvoicingsummaryinternaldetailID' => 'getPkiEzmaxinvoicingsummaryinternaldetailID',
        'fkiEzmaxinvoicingsummaryinternalID' => 'getFkiEzmaxinvoicingsummaryinternalID',
        'fkiEzmaxproductID' => 'getFkiEzmaxproductID',
        'sEzmaxproductDescriptionX' => 'getSEzmaxproductDescriptionX',
        'fkiBillingentityexternalID' => 'getFkiBillingentityexternalID',
        'sBillingentityexternalDescription' => 'getSBillingentityexternalDescription',
        'dEzmaxinvoicingsummaryinternaldetailCountreal' => 'getDEzmaxinvoicingsummaryinternaldetailCountreal',
        'dEzmaxinvoicingsummaryinternaldetailSubtotal' => 'getDEzmaxinvoicingsummaryinternaldetailSubtotal',
        'dEzmaxinvoicingsummaryinternaldetailRebate' => 'getDEzmaxinvoicingsummaryinternaldetailRebate',
        'dEzmaxinvoicingsummaryinternaldetailTotal' => 'getDEzmaxinvoicingsummaryinternaldetailTotal',
        'bEzmaxinvoicingsummaryinternaldetailAdjustment' => 'getBEzmaxinvoicingsummaryinternaldetailAdjustment',
        'tEzmaxproductHelpX' => 'getTEzmaxproductHelpX'
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
        $this->setIfExists('pkiEzmaxinvoicingsummaryinternaldetailID', $data ?? [], null);
        $this->setIfExists('fkiEzmaxinvoicingsummaryinternalID', $data ?? [], null);
        $this->setIfExists('fkiEzmaxproductID', $data ?? [], null);
        $this->setIfExists('sEzmaxproductDescriptionX', $data ?? [], null);
        $this->setIfExists('fkiBillingentityexternalID', $data ?? [], null);
        $this->setIfExists('sBillingentityexternalDescription', $data ?? [], null);
        $this->setIfExists('dEzmaxinvoicingsummaryinternaldetailCountreal', $data ?? [], null);
        $this->setIfExists('dEzmaxinvoicingsummaryinternaldetailSubtotal', $data ?? [], null);
        $this->setIfExists('dEzmaxinvoicingsummaryinternaldetailRebate', $data ?? [], null);
        $this->setIfExists('dEzmaxinvoicingsummaryinternaldetailTotal', $data ?? [], null);
        $this->setIfExists('bEzmaxinvoicingsummaryinternaldetailAdjustment', $data ?? [], null);
        $this->setIfExists('tEzmaxproductHelpX', $data ?? [], null);
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

        if (!is_null($this->container['pkiEzmaxinvoicingsummaryinternaldetailID']) && ($this->container['pkiEzmaxinvoicingsummaryinternaldetailID'] < 0)) {
            $invalidProperties[] = "invalid value for 'pkiEzmaxinvoicingsummaryinternaldetailID', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['fkiEzmaxinvoicingsummaryinternalID']) && ($this->container['fkiEzmaxinvoicingsummaryinternalID'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiEzmaxinvoicingsummaryinternalID', must be bigger than or equal to 0.";
        }

        if ($this->container['fkiEzmaxproductID'] === null) {
            $invalidProperties[] = "'fkiEzmaxproductID' can't be null";
        }
        if (($this->container['fkiEzmaxproductID'] < 1)) {
            $invalidProperties[] = "invalid value for 'fkiEzmaxproductID', must be bigger than or equal to 1.";
        }

        if ($this->container['sEzmaxproductDescriptionX'] === null) {
            $invalidProperties[] = "'sEzmaxproductDescriptionX' can't be null";
        }
        if ($this->container['fkiBillingentityexternalID'] === null) {
            $invalidProperties[] = "'fkiBillingentityexternalID' can't be null";
        }
        if (($this->container['fkiBillingentityexternalID'] < 1)) {
            $invalidProperties[] = "invalid value for 'fkiBillingentityexternalID', must be bigger than or equal to 1.";
        }

        if ($this->container['sBillingentityexternalDescription'] === null) {
            $invalidProperties[] = "'sBillingentityexternalDescription' can't be null";
        }
        if ($this->container['dEzmaxinvoicingsummaryinternaldetailCountreal'] === null) {
            $invalidProperties[] = "'dEzmaxinvoicingsummaryinternaldetailCountreal' can't be null";
        }
//        if (!preg_match("/^-{0,1}[\\d]{1,6}?\\.[\\d]{2}$/", $this->container['dEzmaxinvoicingsummaryinternaldetailCountreal'])) {
        if (!is_null($this->container['dEzmaxinvoicingsummaryinternaldetailCountreal']) && !preg_match("/^-{0,1}[\\d]{1,6}?\\.[\\d]{2}$/", $this->container['dEzmaxinvoicingsummaryinternaldetailCountreal'])) {
            $invalidProperties[] = "invalid value for 'dEzmaxinvoicingsummaryinternaldetailCountreal', must be conform to the pattern /^-{0,1}[\\d]{1,6}?\\.[\\d]{2}$/.";
        }

        if ($this->container['dEzmaxinvoicingsummaryinternaldetailSubtotal'] === null) {
            $invalidProperties[] = "'dEzmaxinvoicingsummaryinternaldetailSubtotal' can't be null";
        }
//        if (!preg_match("/^-{0,1}[\\d]{1,9}?\\.[\\d]{2}$/", $this->container['dEzmaxinvoicingsummaryinternaldetailSubtotal'])) {
        if (!is_null($this->container['dEzmaxinvoicingsummaryinternaldetailSubtotal']) && !preg_match("/^-{0,1}[\\d]{1,9}?\\.[\\d]{2}$/", $this->container['dEzmaxinvoicingsummaryinternaldetailSubtotal'])) {
            $invalidProperties[] = "invalid value for 'dEzmaxinvoicingsummaryinternaldetailSubtotal', must be conform to the pattern /^-{0,1}[\\d]{1,9}?\\.[\\d]{2}$/.";
        }

        if ($this->container['dEzmaxinvoicingsummaryinternaldetailRebate'] === null) {
            $invalidProperties[] = "'dEzmaxinvoicingsummaryinternaldetailRebate' can't be null";
        }
//        if (!preg_match("/^-{0,1}[\\d]{1,9}?\\.[\\d]{2}$/", $this->container['dEzmaxinvoicingsummaryinternaldetailRebate'])) {
        if (!is_null($this->container['dEzmaxinvoicingsummaryinternaldetailRebate']) && !preg_match("/^-{0,1}[\\d]{1,9}?\\.[\\d]{2}$/", $this->container['dEzmaxinvoicingsummaryinternaldetailRebate'])) {
            $invalidProperties[] = "invalid value for 'dEzmaxinvoicingsummaryinternaldetailRebate', must be conform to the pattern /^-{0,1}[\\d]{1,9}?\\.[\\d]{2}$/.";
        }

        if ($this->container['dEzmaxinvoicingsummaryinternaldetailTotal'] === null) {
            $invalidProperties[] = "'dEzmaxinvoicingsummaryinternaldetailTotal' can't be null";
        }
//        if (!preg_match("/^-{0,1}[\\d]{1,9}?\\.[\\d]{2}$/", $this->container['dEzmaxinvoicingsummaryinternaldetailTotal'])) {
        if (!is_null($this->container['dEzmaxinvoicingsummaryinternaldetailTotal']) && !preg_match("/^-{0,1}[\\d]{1,9}?\\.[\\d]{2}$/", $this->container['dEzmaxinvoicingsummaryinternaldetailTotal'])) {
            $invalidProperties[] = "invalid value for 'dEzmaxinvoicingsummaryinternaldetailTotal', must be conform to the pattern /^-{0,1}[\\d]{1,9}?\\.[\\d]{2}$/.";
        }

        if ($this->container['bEzmaxinvoicingsummaryinternaldetailAdjustment'] === null) {
            $invalidProperties[] = "'bEzmaxinvoicingsummaryinternaldetailAdjustment' can't be null";
        }
        if ($this->container['tEzmaxproductHelpX'] === null) {
            $invalidProperties[] = "'tEzmaxproductHelpX' can't be null";
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
     * Gets pkiEzmaxinvoicingsummaryinternaldetailID
     *
     * @return int|null
     */
    public function getPkiEzmaxinvoicingsummaryinternaldetailID()
    {
        return $this->container['pkiEzmaxinvoicingsummaryinternaldetailID'];
    }

    /**
     * Sets pkiEzmaxinvoicingsummaryinternaldetailID
     *
     * @param int|null $pkiEzmaxinvoicingsummaryinternaldetailID The unique ID of the Ezmaxinvoicingsummaryinternaldetail
     *
     * @return self
     */
    public function setPkiEzmaxinvoicingsummaryinternaldetailID($pkiEzmaxinvoicingsummaryinternaldetailID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($pkiEzmaxinvoicingsummaryinternaldetailID)) {
            //throw new \InvalidArgumentException('non-nullable pkiEzmaxinvoicingsummaryinternaldetailID cannot be null');
        //}

//        if (($pkiEzmaxinvoicingsummaryinternaldetailID < 0)) {
        if (!is_null($pkiEzmaxinvoicingsummaryinternaldetailID) && ($pkiEzmaxinvoicingsummaryinternaldetailID < 0)) {
            throw new \InvalidArgumentException('invalid value for $pkiEzmaxinvoicingsummaryinternaldetailID when calling EzmaxinvoicingsummaryinternaldetailResponseCompound., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['pkiEzmaxinvoicingsummaryinternaldetailID'] = $pkiEzmaxinvoicingsummaryinternaldetailID;
        $this->container['pkiEzmaxinvoicingsummaryinternaldetailID'] = (is_null($pkiEzmaxinvoicingsummaryinternaldetailID) ? null : (int) $pkiEzmaxinvoicingsummaryinternaldetailID);

        return $this;
    }

    /**
     * Gets fkiEzmaxinvoicingsummaryinternalID
     *
     * @return int|null
     */
    public function getFkiEzmaxinvoicingsummaryinternalID()
    {
        return $this->container['fkiEzmaxinvoicingsummaryinternalID'];
    }

    /**
     * Sets fkiEzmaxinvoicingsummaryinternalID
     *
     * @param int|null $fkiEzmaxinvoicingsummaryinternalID The unique ID of the Ezmaxinvoicingsummaryinternal
     *
     * @return self
     */
    public function setFkiEzmaxinvoicingsummaryinternalID($fkiEzmaxinvoicingsummaryinternalID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($fkiEzmaxinvoicingsummaryinternalID)) {
            //throw new \InvalidArgumentException('non-nullable fkiEzmaxinvoicingsummaryinternalID cannot be null');
        //}

//        if (($fkiEzmaxinvoicingsummaryinternalID < 0)) {
        if (!is_null($fkiEzmaxinvoicingsummaryinternalID) && ($fkiEzmaxinvoicingsummaryinternalID < 0)) {
            throw new \InvalidArgumentException('invalid value for $fkiEzmaxinvoicingsummaryinternalID when calling EzmaxinvoicingsummaryinternaldetailResponseCompound., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['fkiEzmaxinvoicingsummaryinternalID'] = $fkiEzmaxinvoicingsummaryinternalID;
        $this->container['fkiEzmaxinvoicingsummaryinternalID'] = (is_null($fkiEzmaxinvoicingsummaryinternalID) ? null : (int) $fkiEzmaxinvoicingsummaryinternalID);

        return $this;
    }

    /**
     * Gets fkiEzmaxproductID
     *
     * @return int
     */
    public function getFkiEzmaxproductID()
    {
        return $this->container['fkiEzmaxproductID'];
    }

    /**
     * Sets fkiEzmaxproductID
     *
     * @param int $fkiEzmaxproductID The unique ID of the Ezmaxproduct
     *
     * @return self
     */
    public function setFkiEzmaxproductID($fkiEzmaxproductID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($fkiEzmaxproductID)) {
            //throw new \InvalidArgumentException('non-nullable fkiEzmaxproductID cannot be null');
        //}

//        if (($fkiEzmaxproductID < 1)) {
        if (($fkiEzmaxproductID < 1)) {
            throw new \InvalidArgumentException('invalid value for $fkiEzmaxproductID when calling EzmaxinvoicingsummaryinternaldetailResponseCompound., must be bigger than or equal to 1.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['fkiEzmaxproductID'] = $fkiEzmaxproductID;
        $this->container['fkiEzmaxproductID'] = (is_null($fkiEzmaxproductID) ? null : (int) $fkiEzmaxproductID);

        return $this;
    }

    /**
     * Gets sEzmaxproductDescriptionX
     *
     * @return string
     */
    public function getSEzmaxproductDescriptionX()
    {
        return $this->container['sEzmaxproductDescriptionX'];
    }

    /**
     * Sets sEzmaxproductDescriptionX
     *
     * @param string $sEzmaxproductDescriptionX The description of the Ezmaxproduct in the language of the requester
     *
     * @return self
     */
    public function setSEzmaxproductDescriptionX($sEzmaxproductDescriptionX)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sEzmaxproductDescriptionX)) {
            //throw new \InvalidArgumentException('non-nullable sEzmaxproductDescriptionX cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sEzmaxproductDescriptionX'] = $sEzmaxproductDescriptionX;
        $this->container['sEzmaxproductDescriptionX'] = (is_null($sEzmaxproductDescriptionX) ? null : (string) $sEzmaxproductDescriptionX);

        return $this;
    }

    /**
     * Gets fkiBillingentityexternalID
     *
     * @return int
     */
    public function getFkiBillingentityexternalID()
    {
        return $this->container['fkiBillingentityexternalID'];
    }

    /**
     * Sets fkiBillingentityexternalID
     *
     * @param int $fkiBillingentityexternalID The unique ID of the Billingentityexternal
     *
     * @return self
     */
    public function setFkiBillingentityexternalID($fkiBillingentityexternalID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($fkiBillingentityexternalID)) {
            //throw new \InvalidArgumentException('non-nullable fkiBillingentityexternalID cannot be null');
        //}

//        if (($fkiBillingentityexternalID < 1)) {
        if (($fkiBillingentityexternalID < 1)) {
            throw new \InvalidArgumentException('invalid value for $fkiBillingentityexternalID when calling EzmaxinvoicingsummaryinternaldetailResponseCompound., must be bigger than or equal to 1.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['fkiBillingentityexternalID'] = $fkiBillingentityexternalID;
        $this->container['fkiBillingentityexternalID'] = (is_null($fkiBillingentityexternalID) ? null : (int) $fkiBillingentityexternalID);

        return $this;
    }

    /**
     * Gets sBillingentityexternalDescription
     *
     * @return string
     */
    public function getSBillingentityexternalDescription()
    {
        return $this->container['sBillingentityexternalDescription'];
    }

    /**
     * Sets sBillingentityexternalDescription
     *
     * @param string $sBillingentityexternalDescription The description of the Billingentityexternal
     *
     * @return self
     */
    public function setSBillingentityexternalDescription($sBillingentityexternalDescription)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sBillingentityexternalDescription)) {
            //throw new \InvalidArgumentException('non-nullable sBillingentityexternalDescription cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sBillingentityexternalDescription'] = $sBillingentityexternalDescription;
        $this->container['sBillingentityexternalDescription'] = (is_null($sBillingentityexternalDescription) ? null : (string) $sBillingentityexternalDescription);

        return $this;
    }

    /**
     * Gets dEzmaxinvoicingsummaryinternaldetailCountreal
     *
     * @return string
     */
    public function getDEzmaxinvoicingsummaryinternaldetailCountreal()
    {
        return $this->container['dEzmaxinvoicingsummaryinternaldetailCountreal'];
    }

    /**
     * Sets dEzmaxinvoicingsummaryinternaldetailCountreal
     *
     * @param string $dEzmaxinvoicingsummaryinternaldetailCountreal The count item invoiced for the product
     *
     * @return self
     */
    public function setDEzmaxinvoicingsummaryinternaldetailCountreal($dEzmaxinvoicingsummaryinternaldetailCountreal)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($dEzmaxinvoicingsummaryinternaldetailCountreal)) {
            //throw new \InvalidArgumentException('non-nullable dEzmaxinvoicingsummaryinternaldetailCountreal cannot be null');
        //}

//        if ((!preg_match("/^-{0,1}[\\d]{1,6}?\\.[\\d]{2}$/", $dEzmaxinvoicingsummaryinternaldetailCountreal))) {
        if (!is_null($dEzmaxinvoicingsummaryinternaldetailCountreal) && (!preg_match("/^-{0,1}[\\d]{1,6}?\\.[\\d]{2}$/", $dEzmaxinvoicingsummaryinternaldetailCountreal))) {
            throw new \InvalidArgumentException("invalid value for \$dEzmaxinvoicingsummaryinternaldetailCountreal when calling EzmaxinvoicingsummaryinternaldetailResponseCompound., must conform to the pattern /^-{0,1}[\\d]{1,6}?\\.[\\d]{2}$/.");
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['dEzmaxinvoicingsummaryinternaldetailCountreal'] = $dEzmaxinvoicingsummaryinternaldetailCountreal;
        $this->container['dEzmaxinvoicingsummaryinternaldetailCountreal'] = (is_null($dEzmaxinvoicingsummaryinternaldetailCountreal) ? null : (string) $dEzmaxinvoicingsummaryinternaldetailCountreal);

        return $this;
    }

    /**
     * Gets dEzmaxinvoicingsummaryinternaldetailSubtotal
     *
     * @return string
     */
    public function getDEzmaxinvoicingsummaryinternaldetailSubtotal()
    {
        return $this->container['dEzmaxinvoicingsummaryinternaldetailSubtotal'];
    }

    /**
     * Sets dEzmaxinvoicingsummaryinternaldetailSubtotal
     *
     * @param string $dEzmaxinvoicingsummaryinternaldetailSubtotal The subtotal invoiced for the product
     *
     * @return self
     */
    public function setDEzmaxinvoicingsummaryinternaldetailSubtotal($dEzmaxinvoicingsummaryinternaldetailSubtotal)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($dEzmaxinvoicingsummaryinternaldetailSubtotal)) {
            //throw new \InvalidArgumentException('non-nullable dEzmaxinvoicingsummaryinternaldetailSubtotal cannot be null');
        //}

//        if ((!preg_match("/^-{0,1}[\\d]{1,9}?\\.[\\d]{2}$/", $dEzmaxinvoicingsummaryinternaldetailSubtotal))) {
        if (!is_null($dEzmaxinvoicingsummaryinternaldetailSubtotal) && (!preg_match("/^-{0,1}[\\d]{1,9}?\\.[\\d]{2}$/", $dEzmaxinvoicingsummaryinternaldetailSubtotal))) {
            throw new \InvalidArgumentException("invalid value for \$dEzmaxinvoicingsummaryinternaldetailSubtotal when calling EzmaxinvoicingsummaryinternaldetailResponseCompound., must conform to the pattern /^-{0,1}[\\d]{1,9}?\\.[\\d]{2}$/.");
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['dEzmaxinvoicingsummaryinternaldetailSubtotal'] = $dEzmaxinvoicingsummaryinternaldetailSubtotal;
        $this->container['dEzmaxinvoicingsummaryinternaldetailSubtotal'] = (is_null($dEzmaxinvoicingsummaryinternaldetailSubtotal) ? null : (string) $dEzmaxinvoicingsummaryinternaldetailSubtotal);

        return $this;
    }

    /**
     * Gets dEzmaxinvoicingsummaryinternaldetailRebate
     *
     * @return string
     */
    public function getDEzmaxinvoicingsummaryinternaldetailRebate()
    {
        return $this->container['dEzmaxinvoicingsummaryinternaldetailRebate'];
    }

    /**
     * Sets dEzmaxinvoicingsummaryinternaldetailRebate
     *
     * @param string $dEzmaxinvoicingsummaryinternaldetailRebate The rebate for the product
     *
     * @return self
     */
    public function setDEzmaxinvoicingsummaryinternaldetailRebate($dEzmaxinvoicingsummaryinternaldetailRebate)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($dEzmaxinvoicingsummaryinternaldetailRebate)) {
            //throw new \InvalidArgumentException('non-nullable dEzmaxinvoicingsummaryinternaldetailRebate cannot be null');
        //}

//        if ((!preg_match("/^-{0,1}[\\d]{1,9}?\\.[\\d]{2}$/", $dEzmaxinvoicingsummaryinternaldetailRebate))) {
        if (!is_null($dEzmaxinvoicingsummaryinternaldetailRebate) && (!preg_match("/^-{0,1}[\\d]{1,9}?\\.[\\d]{2}$/", $dEzmaxinvoicingsummaryinternaldetailRebate))) {
            throw new \InvalidArgumentException("invalid value for \$dEzmaxinvoicingsummaryinternaldetailRebate when calling EzmaxinvoicingsummaryinternaldetailResponseCompound., must conform to the pattern /^-{0,1}[\\d]{1,9}?\\.[\\d]{2}$/.");
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['dEzmaxinvoicingsummaryinternaldetailRebate'] = $dEzmaxinvoicingsummaryinternaldetailRebate;
        $this->container['dEzmaxinvoicingsummaryinternaldetailRebate'] = (is_null($dEzmaxinvoicingsummaryinternaldetailRebate) ? null : (string) $dEzmaxinvoicingsummaryinternaldetailRebate);

        return $this;
    }

    /**
     * Gets dEzmaxinvoicingsummaryinternaldetailTotal
     *
     * @return string
     */
    public function getDEzmaxinvoicingsummaryinternaldetailTotal()
    {
        return $this->container['dEzmaxinvoicingsummaryinternaldetailTotal'];
    }

    /**
     * Sets dEzmaxinvoicingsummaryinternaldetailTotal
     *
     * @param string $dEzmaxinvoicingsummaryinternaldetailTotal The total invoiced for the product
     *
     * @return self
     */
    public function setDEzmaxinvoicingsummaryinternaldetailTotal($dEzmaxinvoicingsummaryinternaldetailTotal)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($dEzmaxinvoicingsummaryinternaldetailTotal)) {
            //throw new \InvalidArgumentException('non-nullable dEzmaxinvoicingsummaryinternaldetailTotal cannot be null');
        //}

//        if ((!preg_match("/^-{0,1}[\\d]{1,9}?\\.[\\d]{2}$/", $dEzmaxinvoicingsummaryinternaldetailTotal))) {
        if (!is_null($dEzmaxinvoicingsummaryinternaldetailTotal) && (!preg_match("/^-{0,1}[\\d]{1,9}?\\.[\\d]{2}$/", $dEzmaxinvoicingsummaryinternaldetailTotal))) {
            throw new \InvalidArgumentException("invalid value for \$dEzmaxinvoicingsummaryinternaldetailTotal when calling EzmaxinvoicingsummaryinternaldetailResponseCompound., must conform to the pattern /^-{0,1}[\\d]{1,9}?\\.[\\d]{2}$/.");
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['dEzmaxinvoicingsummaryinternaldetailTotal'] = $dEzmaxinvoicingsummaryinternaldetailTotal;
        $this->container['dEzmaxinvoicingsummaryinternaldetailTotal'] = (is_null($dEzmaxinvoicingsummaryinternaldetailTotal) ? null : (string) $dEzmaxinvoicingsummaryinternaldetailTotal);

        return $this;
    }

    /**
     * Gets bEzmaxinvoicingsummaryinternaldetailAdjustment
     *
     * @return bool
     */
    public function getBEzmaxinvoicingsummaryinternaldetailAdjustment()
    {
        return $this->container['bEzmaxinvoicingsummaryinternaldetailAdjustment'];
    }

    /**
     * Sets bEzmaxinvoicingsummaryinternaldetailAdjustment
     *
     * @param bool $bEzmaxinvoicingsummaryinternaldetailAdjustment Whether if it's an adjustment
     *
     * @return self
     */
    public function setBEzmaxinvoicingsummaryinternaldetailAdjustment($bEzmaxinvoicingsummaryinternaldetailAdjustment)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($bEzmaxinvoicingsummaryinternaldetailAdjustment)) {
            //throw new \InvalidArgumentException('non-nullable bEzmaxinvoicingsummaryinternaldetailAdjustment cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['bEzmaxinvoicingsummaryinternaldetailAdjustment'] = $bEzmaxinvoicingsummaryinternaldetailAdjustment;
        $this->container['bEzmaxinvoicingsummaryinternaldetailAdjustment'] = (is_null($bEzmaxinvoicingsummaryinternaldetailAdjustment) ? null : (bool) $bEzmaxinvoicingsummaryinternaldetailAdjustment);

        return $this;
    }

    /**
     * Gets tEzmaxproductHelpX
     *
     * @return string
     */
    public function getTEzmaxproductHelpX()
    {
        return $this->container['tEzmaxproductHelpX'];
    }

    /**
     * Sets tEzmaxproductHelpX
     *
     * @param string $tEzmaxproductHelpX The help message of the Ezmaxproduct in the language of the requester
     *
     * @return self
     */
    public function setTEzmaxproductHelpX($tEzmaxproductHelpX)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($tEzmaxproductHelpX)) {
            //throw new \InvalidArgumentException('non-nullable tEzmaxproductHelpX cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['tEzmaxproductHelpX'] = $tEzmaxproductHelpX;
        $this->container['tEzmaxproductHelpX'] = (is_null($tEzmaxproductHelpX) ? null : (string) $tEzmaxproductHelpX);

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


