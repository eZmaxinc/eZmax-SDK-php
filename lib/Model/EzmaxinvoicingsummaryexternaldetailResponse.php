<?php
/**
 * EzmaxinvoicingsummaryexternaldetailResponse
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
 * The version of the OpenAPI document: 1.1.14
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
 * EzmaxinvoicingsummaryexternaldetailResponse Class Doc Comment
 *
 * @category Class
 * @description A Ezmaxinvoicingsummaryexternaldetail Object
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class EzmaxinvoicingsummaryexternaldetailResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ezmaxinvoicingsummaryexternaldetail-Response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'pkiEzmaxinvoicingsummaryexternaldetailID' => 'int',
        'fkiEzmaxinvoicingsummaryexternalID' => 'int',
        'fkiEzmaxproductID' => 'int',
        'sEzmaxproductDescriptionX' => 'string',
        'dEzmaxinvoicingsummaryexternaldetailCountreal' => 'string',
        'dEzmaxinvoicingsummaryexternaldetailSubtotal' => 'string',
        'dEzmaxinvoicingsummaryexternaldetailRebate' => 'string',
        'dEzmaxinvoicingsummaryexternaldetailTotal' => 'string',
        'bEzmaxinvoicingsummaryexternaldetailAdjustment' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'pkiEzmaxinvoicingsummaryexternaldetailID' => null,
        'fkiEzmaxinvoicingsummaryexternalID' => null,
        'fkiEzmaxproductID' => null,
        'sEzmaxproductDescriptionX' => null,
        'dEzmaxinvoicingsummaryexternaldetailCountreal' => null,
        'dEzmaxinvoicingsummaryexternaldetailSubtotal' => null,
        'dEzmaxinvoicingsummaryexternaldetailRebate' => null,
        'dEzmaxinvoicingsummaryexternaldetailTotal' => null,
        'bEzmaxinvoicingsummaryexternaldetailAdjustment' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'pkiEzmaxinvoicingsummaryexternaldetailID' => false,
		'fkiEzmaxinvoicingsummaryexternalID' => false,
		'fkiEzmaxproductID' => false,
		'sEzmaxproductDescriptionX' => false,
		'dEzmaxinvoicingsummaryexternaldetailCountreal' => false,
		'dEzmaxinvoicingsummaryexternaldetailSubtotal' => false,
		'dEzmaxinvoicingsummaryexternaldetailRebate' => false,
		'dEzmaxinvoicingsummaryexternaldetailTotal' => false,
		'bEzmaxinvoicingsummaryexternaldetailAdjustment' => false
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
        'pkiEzmaxinvoicingsummaryexternaldetailID' => 'pkiEzmaxinvoicingsummaryexternaldetailID',
        'fkiEzmaxinvoicingsummaryexternalID' => 'fkiEzmaxinvoicingsummaryexternalID',
        'fkiEzmaxproductID' => 'fkiEzmaxproductID',
        'sEzmaxproductDescriptionX' => 'sEzmaxproductDescriptionX',
        'dEzmaxinvoicingsummaryexternaldetailCountreal' => 'dEzmaxinvoicingsummaryexternaldetailCountreal',
        'dEzmaxinvoicingsummaryexternaldetailSubtotal' => 'dEzmaxinvoicingsummaryexternaldetailSubtotal',
        'dEzmaxinvoicingsummaryexternaldetailRebate' => 'dEzmaxinvoicingsummaryexternaldetailRebate',
        'dEzmaxinvoicingsummaryexternaldetailTotal' => 'dEzmaxinvoicingsummaryexternaldetailTotal',
        'bEzmaxinvoicingsummaryexternaldetailAdjustment' => 'bEzmaxinvoicingsummaryexternaldetailAdjustment'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pkiEzmaxinvoicingsummaryexternaldetailID' => 'setPkiEzmaxinvoicingsummaryexternaldetailID',
        'fkiEzmaxinvoicingsummaryexternalID' => 'setFkiEzmaxinvoicingsummaryexternalID',
        'fkiEzmaxproductID' => 'setFkiEzmaxproductID',
        'sEzmaxproductDescriptionX' => 'setSEzmaxproductDescriptionX',
        'dEzmaxinvoicingsummaryexternaldetailCountreal' => 'setDEzmaxinvoicingsummaryexternaldetailCountreal',
        'dEzmaxinvoicingsummaryexternaldetailSubtotal' => 'setDEzmaxinvoicingsummaryexternaldetailSubtotal',
        'dEzmaxinvoicingsummaryexternaldetailRebate' => 'setDEzmaxinvoicingsummaryexternaldetailRebate',
        'dEzmaxinvoicingsummaryexternaldetailTotal' => 'setDEzmaxinvoicingsummaryexternaldetailTotal',
        'bEzmaxinvoicingsummaryexternaldetailAdjustment' => 'setBEzmaxinvoicingsummaryexternaldetailAdjustment'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pkiEzmaxinvoicingsummaryexternaldetailID' => 'getPkiEzmaxinvoicingsummaryexternaldetailID',
        'fkiEzmaxinvoicingsummaryexternalID' => 'getFkiEzmaxinvoicingsummaryexternalID',
        'fkiEzmaxproductID' => 'getFkiEzmaxproductID',
        'sEzmaxproductDescriptionX' => 'getSEzmaxproductDescriptionX',
        'dEzmaxinvoicingsummaryexternaldetailCountreal' => 'getDEzmaxinvoicingsummaryexternaldetailCountreal',
        'dEzmaxinvoicingsummaryexternaldetailSubtotal' => 'getDEzmaxinvoicingsummaryexternaldetailSubtotal',
        'dEzmaxinvoicingsummaryexternaldetailRebate' => 'getDEzmaxinvoicingsummaryexternaldetailRebate',
        'dEzmaxinvoicingsummaryexternaldetailTotal' => 'getDEzmaxinvoicingsummaryexternaldetailTotal',
        'bEzmaxinvoicingsummaryexternaldetailAdjustment' => 'getBEzmaxinvoicingsummaryexternaldetailAdjustment'
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
        $this->setIfExists('pkiEzmaxinvoicingsummaryexternaldetailID', $data ?? [], null);
        $this->setIfExists('fkiEzmaxinvoicingsummaryexternalID', $data ?? [], null);
        $this->setIfExists('fkiEzmaxproductID', $data ?? [], null);
        $this->setIfExists('sEzmaxproductDescriptionX', $data ?? [], null);
        $this->setIfExists('dEzmaxinvoicingsummaryexternaldetailCountreal', $data ?? [], null);
        $this->setIfExists('dEzmaxinvoicingsummaryexternaldetailSubtotal', $data ?? [], null);
        $this->setIfExists('dEzmaxinvoicingsummaryexternaldetailRebate', $data ?? [], null);
        $this->setIfExists('dEzmaxinvoicingsummaryexternaldetailTotal', $data ?? [], null);
        $this->setIfExists('bEzmaxinvoicingsummaryexternaldetailAdjustment', $data ?? [], null);
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

        if (!is_null($this->container['pkiEzmaxinvoicingsummaryexternaldetailID']) && ($this->container['pkiEzmaxinvoicingsummaryexternaldetailID'] < 0)) {
            $invalidProperties[] = "invalid value for 'pkiEzmaxinvoicingsummaryexternaldetailID', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['fkiEzmaxinvoicingsummaryexternalID']) && ($this->container['fkiEzmaxinvoicingsummaryexternalID'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiEzmaxinvoicingsummaryexternalID', must be bigger than or equal to 0.";
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
        if ($this->container['dEzmaxinvoicingsummaryexternaldetailCountreal'] === null) {
            $invalidProperties[] = "'dEzmaxinvoicingsummaryexternaldetailCountreal' can't be null";
        }
        if (!preg_match("/^-{0,1}[\\d]{1,6}?\\.[\\d]{2}$/", $this->container['dEzmaxinvoicingsummaryexternaldetailCountreal'])) {
            $invalidProperties[] = "invalid value for 'dEzmaxinvoicingsummaryexternaldetailCountreal', must be conform to the pattern /^-{0,1}[\\d]{1,6}?\\.[\\d]{2}$/.";
        }

        if ($this->container['dEzmaxinvoicingsummaryexternaldetailSubtotal'] === null) {
            $invalidProperties[] = "'dEzmaxinvoicingsummaryexternaldetailSubtotal' can't be null";
        }
        if (!preg_match("/^-{0,1}[\\d]{1,9}?\\.[\\d]{2}$/", $this->container['dEzmaxinvoicingsummaryexternaldetailSubtotal'])) {
            $invalidProperties[] = "invalid value for 'dEzmaxinvoicingsummaryexternaldetailSubtotal', must be conform to the pattern /^-{0,1}[\\d]{1,9}?\\.[\\d]{2}$/.";
        }

        if ($this->container['dEzmaxinvoicingsummaryexternaldetailRebate'] === null) {
            $invalidProperties[] = "'dEzmaxinvoicingsummaryexternaldetailRebate' can't be null";
        }
        if (!preg_match("/^-{0,1}[\\d]{1,9}?\\.[\\d]{2}$/", $this->container['dEzmaxinvoicingsummaryexternaldetailRebate'])) {
            $invalidProperties[] = "invalid value for 'dEzmaxinvoicingsummaryexternaldetailRebate', must be conform to the pattern /^-{0,1}[\\d]{1,9}?\\.[\\d]{2}$/.";
        }

        if ($this->container['dEzmaxinvoicingsummaryexternaldetailTotal'] === null) {
            $invalidProperties[] = "'dEzmaxinvoicingsummaryexternaldetailTotal' can't be null";
        }
        if (!preg_match("/^-{0,1}[\\d]{1,9}?\\.[\\d]{2}$/", $this->container['dEzmaxinvoicingsummaryexternaldetailTotal'])) {
            $invalidProperties[] = "invalid value for 'dEzmaxinvoicingsummaryexternaldetailTotal', must be conform to the pattern /^-{0,1}[\\d]{1,9}?\\.[\\d]{2}$/.";
        }

        if ($this->container['bEzmaxinvoicingsummaryexternaldetailAdjustment'] === null) {
            $invalidProperties[] = "'bEzmaxinvoicingsummaryexternaldetailAdjustment' can't be null";
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
     * Gets pkiEzmaxinvoicingsummaryexternaldetailID
     *
     * @return int|null
     */
    public function getPkiEzmaxinvoicingsummaryexternaldetailID()
    {
        return $this->container['pkiEzmaxinvoicingsummaryexternaldetailID'];
    }

    /**
     * Sets pkiEzmaxinvoicingsummaryexternaldetailID
     *
     * @param int|null $pkiEzmaxinvoicingsummaryexternaldetailID The unique ID of the Ezmaxinvoicingsummaryexternaldetail
     *
     * @return self
     */
    public function setPkiEzmaxinvoicingsummaryexternaldetailID($pkiEzmaxinvoicingsummaryexternaldetailID)
    {

        if (!is_null($pkiEzmaxinvoicingsummaryexternaldetailID) && ($pkiEzmaxinvoicingsummaryexternaldetailID < 0)) {
            throw new \InvalidArgumentException('invalid value for $pkiEzmaxinvoicingsummaryexternaldetailID when calling EzmaxinvoicingsummaryexternaldetailResponse., must be bigger than or equal to 0.');
        }


        //if (is_null($pkiEzmaxinvoicingsummaryexternaldetailID)) {
            //throw new \InvalidArgumentException('non-nullable pkiEzmaxinvoicingsummaryexternaldetailID cannot be null');
        //}
        $this->container['pkiEzmaxinvoicingsummaryexternaldetailID'] = (is_null($pkiEzmaxinvoicingsummaryexternaldetailID) ? null : (int) $pkiEzmaxinvoicingsummaryexternaldetailID);

        return $this;
    }

    /**
     * Gets fkiEzmaxinvoicingsummaryexternalID
     *
     * @return int|null
     */
    public function getFkiEzmaxinvoicingsummaryexternalID()
    {
        return $this->container['fkiEzmaxinvoicingsummaryexternalID'];
    }

    /**
     * Sets fkiEzmaxinvoicingsummaryexternalID
     *
     * @param int|null $fkiEzmaxinvoicingsummaryexternalID The unique ID of the Ezmaxinvoicingsummaryexternal
     *
     * @return self
     */
    public function setFkiEzmaxinvoicingsummaryexternalID($fkiEzmaxinvoicingsummaryexternalID)
    {

        if (!is_null($fkiEzmaxinvoicingsummaryexternalID) && ($fkiEzmaxinvoicingsummaryexternalID < 0)) {
            throw new \InvalidArgumentException('invalid value for $fkiEzmaxinvoicingsummaryexternalID when calling EzmaxinvoicingsummaryexternaldetailResponse., must be bigger than or equal to 0.');
        }


        //if (is_null($fkiEzmaxinvoicingsummaryexternalID)) {
            //throw new \InvalidArgumentException('non-nullable fkiEzmaxinvoicingsummaryexternalID cannot be null');
        //}
        $this->container['fkiEzmaxinvoicingsummaryexternalID'] = (is_null($fkiEzmaxinvoicingsummaryexternalID) ? null : (int) $fkiEzmaxinvoicingsummaryexternalID);

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

        if (($fkiEzmaxproductID < 1)) {
            throw new \InvalidArgumentException('invalid value for $fkiEzmaxproductID when calling EzmaxinvoicingsummaryexternaldetailResponse., must be bigger than or equal to 1.');
        }


        //if (is_null($fkiEzmaxproductID)) {
            //throw new \InvalidArgumentException('non-nullable fkiEzmaxproductID cannot be null');
        //}
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

        //if (is_null($sEzmaxproductDescriptionX)) {
            //throw new \InvalidArgumentException('non-nullable sEzmaxproductDescriptionX cannot be null');
        //}
        $this->container['sEzmaxproductDescriptionX'] = (is_null($sEzmaxproductDescriptionX) ? null : (string) $sEzmaxproductDescriptionX);

        return $this;
    }

    /**
     * Gets dEzmaxinvoicingsummaryexternaldetailCountreal
     *
     * @return string
     */
    public function getDEzmaxinvoicingsummaryexternaldetailCountreal()
    {
        return $this->container['dEzmaxinvoicingsummaryexternaldetailCountreal'];
    }

    /**
     * Sets dEzmaxinvoicingsummaryexternaldetailCountreal
     *
     * @param string $dEzmaxinvoicingsummaryexternaldetailCountreal The count item invoiced for the product
     *
     * @return self
     */
    public function setDEzmaxinvoicingsummaryexternaldetailCountreal($dEzmaxinvoicingsummaryexternaldetailCountreal)
    {

        if ((!preg_match("/^-{0,1}[\\d]{1,6}?\\.[\\d]{2}$/", $dEzmaxinvoicingsummaryexternaldetailCountreal))) {
            throw new \InvalidArgumentException("invalid value for \$dEzmaxinvoicingsummaryexternaldetailCountreal when calling EzmaxinvoicingsummaryexternaldetailResponse., must conform to the pattern /^-{0,1}[\\d]{1,6}?\\.[\\d]{2}$/.");
        }


        //if (is_null($dEzmaxinvoicingsummaryexternaldetailCountreal)) {
            //throw new \InvalidArgumentException('non-nullable dEzmaxinvoicingsummaryexternaldetailCountreal cannot be null');
        //}
        $this->container['dEzmaxinvoicingsummaryexternaldetailCountreal'] = (is_null($dEzmaxinvoicingsummaryexternaldetailCountreal) ? null : (string) $dEzmaxinvoicingsummaryexternaldetailCountreal);

        return $this;
    }

    /**
     * Gets dEzmaxinvoicingsummaryexternaldetailSubtotal
     *
     * @return string
     */
    public function getDEzmaxinvoicingsummaryexternaldetailSubtotal()
    {
        return $this->container['dEzmaxinvoicingsummaryexternaldetailSubtotal'];
    }

    /**
     * Sets dEzmaxinvoicingsummaryexternaldetailSubtotal
     *
     * @param string $dEzmaxinvoicingsummaryexternaldetailSubtotal The subtotal invoiced for the product
     *
     * @return self
     */
    public function setDEzmaxinvoicingsummaryexternaldetailSubtotal($dEzmaxinvoicingsummaryexternaldetailSubtotal)
    {

        if ((!preg_match("/^-{0,1}[\\d]{1,9}?\\.[\\d]{2}$/", $dEzmaxinvoicingsummaryexternaldetailSubtotal))) {
            throw new \InvalidArgumentException("invalid value for \$dEzmaxinvoicingsummaryexternaldetailSubtotal when calling EzmaxinvoicingsummaryexternaldetailResponse., must conform to the pattern /^-{0,1}[\\d]{1,9}?\\.[\\d]{2}$/.");
        }


        //if (is_null($dEzmaxinvoicingsummaryexternaldetailSubtotal)) {
            //throw new \InvalidArgumentException('non-nullable dEzmaxinvoicingsummaryexternaldetailSubtotal cannot be null');
        //}
        $this->container['dEzmaxinvoicingsummaryexternaldetailSubtotal'] = (is_null($dEzmaxinvoicingsummaryexternaldetailSubtotal) ? null : (string) $dEzmaxinvoicingsummaryexternaldetailSubtotal);

        return $this;
    }

    /**
     * Gets dEzmaxinvoicingsummaryexternaldetailRebate
     *
     * @return string
     */
    public function getDEzmaxinvoicingsummaryexternaldetailRebate()
    {
        return $this->container['dEzmaxinvoicingsummaryexternaldetailRebate'];
    }

    /**
     * Sets dEzmaxinvoicingsummaryexternaldetailRebate
     *
     * @param string $dEzmaxinvoicingsummaryexternaldetailRebate The rebate for the product
     *
     * @return self
     */
    public function setDEzmaxinvoicingsummaryexternaldetailRebate($dEzmaxinvoicingsummaryexternaldetailRebate)
    {

        if ((!preg_match("/^-{0,1}[\\d]{1,9}?\\.[\\d]{2}$/", $dEzmaxinvoicingsummaryexternaldetailRebate))) {
            throw new \InvalidArgumentException("invalid value for \$dEzmaxinvoicingsummaryexternaldetailRebate when calling EzmaxinvoicingsummaryexternaldetailResponse., must conform to the pattern /^-{0,1}[\\d]{1,9}?\\.[\\d]{2}$/.");
        }


        //if (is_null($dEzmaxinvoicingsummaryexternaldetailRebate)) {
            //throw new \InvalidArgumentException('non-nullable dEzmaxinvoicingsummaryexternaldetailRebate cannot be null');
        //}
        $this->container['dEzmaxinvoicingsummaryexternaldetailRebate'] = (is_null($dEzmaxinvoicingsummaryexternaldetailRebate) ? null : (string) $dEzmaxinvoicingsummaryexternaldetailRebate);

        return $this;
    }

    /**
     * Gets dEzmaxinvoicingsummaryexternaldetailTotal
     *
     * @return string
     */
    public function getDEzmaxinvoicingsummaryexternaldetailTotal()
    {
        return $this->container['dEzmaxinvoicingsummaryexternaldetailTotal'];
    }

    /**
     * Sets dEzmaxinvoicingsummaryexternaldetailTotal
     *
     * @param string $dEzmaxinvoicingsummaryexternaldetailTotal The total invoiced for the product
     *
     * @return self
     */
    public function setDEzmaxinvoicingsummaryexternaldetailTotal($dEzmaxinvoicingsummaryexternaldetailTotal)
    {

        if ((!preg_match("/^-{0,1}[\\d]{1,9}?\\.[\\d]{2}$/", $dEzmaxinvoicingsummaryexternaldetailTotal))) {
            throw new \InvalidArgumentException("invalid value for \$dEzmaxinvoicingsummaryexternaldetailTotal when calling EzmaxinvoicingsummaryexternaldetailResponse., must conform to the pattern /^-{0,1}[\\d]{1,9}?\\.[\\d]{2}$/.");
        }


        //if (is_null($dEzmaxinvoicingsummaryexternaldetailTotal)) {
            //throw new \InvalidArgumentException('non-nullable dEzmaxinvoicingsummaryexternaldetailTotal cannot be null');
        //}
        $this->container['dEzmaxinvoicingsummaryexternaldetailTotal'] = (is_null($dEzmaxinvoicingsummaryexternaldetailTotal) ? null : (string) $dEzmaxinvoicingsummaryexternaldetailTotal);

        return $this;
    }

    /**
     * Gets bEzmaxinvoicingsummaryexternaldetailAdjustment
     *
     * @return bool
     */
    public function getBEzmaxinvoicingsummaryexternaldetailAdjustment()
    {
        return $this->container['bEzmaxinvoicingsummaryexternaldetailAdjustment'];
    }

    /**
     * Sets bEzmaxinvoicingsummaryexternaldetailAdjustment
     *
     * @param bool $bEzmaxinvoicingsummaryexternaldetailAdjustment Whether it's an adjustment
     *
     * @return self
     */
    public function setBEzmaxinvoicingsummaryexternaldetailAdjustment($bEzmaxinvoicingsummaryexternaldetailAdjustment)
    {

        //if (is_null($bEzmaxinvoicingsummaryexternaldetailAdjustment)) {
            //throw new \InvalidArgumentException('non-nullable bEzmaxinvoicingsummaryexternaldetailAdjustment cannot be null');
        //}
        $this->container['bEzmaxinvoicingsummaryexternaldetailAdjustment'] = (is_null($bEzmaxinvoicingsummaryexternaldetailAdjustment) ? null : (bool) $bEzmaxinvoicingsummaryexternaldetailAdjustment);

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


