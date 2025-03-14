<?php
/**
 * EzmaxinvoicinguserResponseCompound
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
 * Generator version: 7.12.0
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
 * EzmaxinvoicinguserResponseCompound Class Doc Comment
 *
 * @category Class
 * @description A Ezmaxinvoicinguser Object
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class EzmaxinvoicinguserResponseCompound implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ezmaxinvoicinguser-ResponseCompound';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'pkiEzmaxinvoicinguserID' => 'int',
        'fkiEzmaxinvoicingID' => 'int',
        'fkiBillingentityinternalID' => 'int',
        'sBillingentityinternalDescriptionX' => 'string',
        'fkiUserID' => 'int',
        'iEzmaxinvoicinguserEzsigndocument' => 'int',
        'bEzmaxinvoicinguserEzsignaccount' => 'bool',
        'bEzmaxinvoicinguserBillableezsign' => 'bool',
        'eEzmaxinvoicinguserVariationezsign' => '\eZmaxAPI\Model\FieldEEzmaxinvoicinguserVariationezsign',
        'objContactName' => '\eZmaxAPI\Model\CustomContactNameResponse'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'pkiEzmaxinvoicinguserID' => null,
        'fkiEzmaxinvoicingID' => null,
        'fkiBillingentityinternalID' => null,
        'sBillingentityinternalDescriptionX' => null,
        'fkiUserID' => null,
        'iEzmaxinvoicinguserEzsigndocument' => null,
        'bEzmaxinvoicinguserEzsignaccount' => null,
        'bEzmaxinvoicinguserBillableezsign' => null,
        'eEzmaxinvoicinguserVariationezsign' => null,
        'objContactName' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'pkiEzmaxinvoicinguserID' => false,
		'fkiEzmaxinvoicingID' => false,
		'fkiBillingentityinternalID' => false,
		'sBillingentityinternalDescriptionX' => false,
		'fkiUserID' => false,
		'iEzmaxinvoicinguserEzsigndocument' => false,
		'bEzmaxinvoicinguserEzsignaccount' => false,
		'bEzmaxinvoicinguserBillableezsign' => false,
		'eEzmaxinvoicinguserVariationezsign' => false,
		'objContactName' => false
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
        'pkiEzmaxinvoicinguserID' => 'pkiEzmaxinvoicinguserID',
        'fkiEzmaxinvoicingID' => 'fkiEzmaxinvoicingID',
        'fkiBillingentityinternalID' => 'fkiBillingentityinternalID',
        'sBillingentityinternalDescriptionX' => 'sBillingentityinternalDescriptionX',
        'fkiUserID' => 'fkiUserID',
        'iEzmaxinvoicinguserEzsigndocument' => 'iEzmaxinvoicinguserEzsigndocument',
        'bEzmaxinvoicinguserEzsignaccount' => 'bEzmaxinvoicinguserEzsignaccount',
        'bEzmaxinvoicinguserBillableezsign' => 'bEzmaxinvoicinguserBillableezsign',
        'eEzmaxinvoicinguserVariationezsign' => 'eEzmaxinvoicinguserVariationezsign',
        'objContactName' => 'objContactName'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pkiEzmaxinvoicinguserID' => 'setPkiEzmaxinvoicinguserID',
        'fkiEzmaxinvoicingID' => 'setFkiEzmaxinvoicingID',
        'fkiBillingentityinternalID' => 'setFkiBillingentityinternalID',
        'sBillingentityinternalDescriptionX' => 'setSBillingentityinternalDescriptionX',
        'fkiUserID' => 'setFkiUserID',
        'iEzmaxinvoicinguserEzsigndocument' => 'setIEzmaxinvoicinguserEzsigndocument',
        'bEzmaxinvoicinguserEzsignaccount' => 'setBEzmaxinvoicinguserEzsignaccount',
        'bEzmaxinvoicinguserBillableezsign' => 'setBEzmaxinvoicinguserBillableezsign',
        'eEzmaxinvoicinguserVariationezsign' => 'setEEzmaxinvoicinguserVariationezsign',
        'objContactName' => 'setObjContactName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pkiEzmaxinvoicinguserID' => 'getPkiEzmaxinvoicinguserID',
        'fkiEzmaxinvoicingID' => 'getFkiEzmaxinvoicingID',
        'fkiBillingentityinternalID' => 'getFkiBillingentityinternalID',
        'sBillingentityinternalDescriptionX' => 'getSBillingentityinternalDescriptionX',
        'fkiUserID' => 'getFkiUserID',
        'iEzmaxinvoicinguserEzsigndocument' => 'getIEzmaxinvoicinguserEzsigndocument',
        'bEzmaxinvoicinguserEzsignaccount' => 'getBEzmaxinvoicinguserEzsignaccount',
        'bEzmaxinvoicinguserBillableezsign' => 'getBEzmaxinvoicinguserBillableezsign',
        'eEzmaxinvoicinguserVariationezsign' => 'getEEzmaxinvoicinguserVariationezsign',
        'objContactName' => 'getObjContactName'
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
        $this->setIfExists('pkiEzmaxinvoicinguserID', $data ?? [], null);
        $this->setIfExists('fkiEzmaxinvoicingID', $data ?? [], null);
        $this->setIfExists('fkiBillingentityinternalID', $data ?? [], null);
        $this->setIfExists('sBillingentityinternalDescriptionX', $data ?? [], null);
        $this->setIfExists('fkiUserID', $data ?? [], null);
        $this->setIfExists('iEzmaxinvoicinguserEzsigndocument', $data ?? [], null);
        $this->setIfExists('bEzmaxinvoicinguserEzsignaccount', $data ?? [], null);
        $this->setIfExists('bEzmaxinvoicinguserBillableezsign', $data ?? [], null);
        $this->setIfExists('eEzmaxinvoicinguserVariationezsign', $data ?? [], null);
        $this->setIfExists('objContactName', $data ?? [], null);
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

        if (!is_null($this->container['pkiEzmaxinvoicinguserID']) && ($this->container['pkiEzmaxinvoicinguserID'] < 0)) {
            $invalidProperties[] = "invalid value for 'pkiEzmaxinvoicinguserID', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['fkiEzmaxinvoicingID']) && ($this->container['fkiEzmaxinvoicingID'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiEzmaxinvoicingID', must be bigger than or equal to 0.";
        }

        if ($this->container['fkiBillingentityinternalID'] === null) {
            $invalidProperties[] = "'fkiBillingentityinternalID' can't be null";
        }
        if (($this->container['fkiBillingentityinternalID'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiBillingentityinternalID', must be bigger than or equal to 0.";
        }

        if ($this->container['sBillingentityinternalDescriptionX'] === null) {
            $invalidProperties[] = "'sBillingentityinternalDescriptionX' can't be null";
        }
        if ($this->container['fkiUserID'] === null) {
            $invalidProperties[] = "'fkiUserID' can't be null";
        }
        if (($this->container['fkiUserID'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiUserID', must be bigger than or equal to 0.";
        }

        if ($this->container['iEzmaxinvoicinguserEzsigndocument'] === null) {
            $invalidProperties[] = "'iEzmaxinvoicinguserEzsigndocument' can't be null";
        }
        if (($this->container['iEzmaxinvoicinguserEzsigndocument'] < 0)) {
            $invalidProperties[] = "invalid value for 'iEzmaxinvoicinguserEzsigndocument', must be bigger than or equal to 0.";
        }

        if ($this->container['bEzmaxinvoicinguserEzsignaccount'] === null) {
            $invalidProperties[] = "'bEzmaxinvoicinguserEzsignaccount' can't be null";
        }
        if ($this->container['bEzmaxinvoicinguserBillableezsign'] === null) {
            $invalidProperties[] = "'bEzmaxinvoicinguserBillableezsign' can't be null";
        }
        if ($this->container['eEzmaxinvoicinguserVariationezsign'] === null) {
            $invalidProperties[] = "'eEzmaxinvoicinguserVariationezsign' can't be null";
        }
        if ($this->container['objContactName'] === null) {
            $invalidProperties[] = "'objContactName' can't be null";
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
     * Gets pkiEzmaxinvoicinguserID
     *
     * @return int|null
     */
    public function getPkiEzmaxinvoicinguserID()
    {
	//return $this->container['pkiEzmaxinvoicinguserID'];
        return $this->container['pkiEzmaxinvoicinguserID'];
    }

    /**
     * Sets pkiEzmaxinvoicinguserID
     *
     * @param int|null $pkiEzmaxinvoicinguserID The unique ID of the Ezmaxinvoicinguser
     *
     * @return self
     */
    public function setPkiEzmaxinvoicinguserID($pkiEzmaxinvoicinguserID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($pkiEzmaxinvoicinguserID)) {
            //throw new \InvalidArgumentException('non-nullable pkiEzmaxinvoicinguserID cannot be null');
        //}

	//if (($pkiEzmaxinvoicinguserID < 0)) {
        if (!is_null($pkiEzmaxinvoicinguserID) && ($pkiEzmaxinvoicinguserID < 0)) {
	    //throw new \InvalidArgumentException('invalid value for $pkiEzmaxinvoicinguserID when calling EzmaxinvoicinguserResponseCompound., must be bigger than or equal to 0.');
            throw new \InvalidArgumentException('invalid value '.(is_null($pkiEzmaxinvoicinguserID)?'null':'"'.$pkiEzmaxinvoicinguserID.'"').' for pkiEzmaxinvoicinguserID when calling EzmaxinvoicinguserResponseCompound., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['pkiEzmaxinvoicinguserID'] = $pkiEzmaxinvoicinguserID;
        $this->container['pkiEzmaxinvoicinguserID'] = (is_null($pkiEzmaxinvoicinguserID) ? null : (int) $pkiEzmaxinvoicinguserID);

        return $this;
    }

    /**
     * Gets fkiEzmaxinvoicingID
     *
     * @return int|null
     */
    public function getFkiEzmaxinvoicingID()
    {
	//return $this->container['fkiEzmaxinvoicingID'];
        return $this->container['fkiEzmaxinvoicingID'];
    }

    /**
     * Sets fkiEzmaxinvoicingID
     *
     * @param int|null $fkiEzmaxinvoicingID The unique ID of the Ezmaxinvoicing
     *
     * @return self
     */
    public function setFkiEzmaxinvoicingID($fkiEzmaxinvoicingID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($fkiEzmaxinvoicingID)) {
            //throw new \InvalidArgumentException('non-nullable fkiEzmaxinvoicingID cannot be null');
        //}

	//if (($fkiEzmaxinvoicingID < 0)) {
        if (!is_null($fkiEzmaxinvoicingID) && ($fkiEzmaxinvoicingID < 0)) {
	    //throw new \InvalidArgumentException('invalid value for $fkiEzmaxinvoicingID when calling EzmaxinvoicinguserResponseCompound., must be bigger than or equal to 0.');
            throw new \InvalidArgumentException('invalid value '.(is_null($fkiEzmaxinvoicingID)?'null':'"'.$fkiEzmaxinvoicingID.'"').' for fkiEzmaxinvoicingID when calling EzmaxinvoicinguserResponseCompound., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['fkiEzmaxinvoicingID'] = $fkiEzmaxinvoicingID;
        $this->container['fkiEzmaxinvoicingID'] = (is_null($fkiEzmaxinvoicingID) ? null : (int) $fkiEzmaxinvoicingID);

        return $this;
    }

    /**
     * Gets fkiBillingentityinternalID
     *
     * @return int
     */
    public function getFkiBillingentityinternalID()
    {
	//return $this->container['fkiBillingentityinternalID'];
        return $this->container['fkiBillingentityinternalID'];
    }

    /**
     * Sets fkiBillingentityinternalID
     *
     * @param int $fkiBillingentityinternalID The unique ID of the Billingentityinternal.
     *
     * @return self
     */
    public function setFkiBillingentityinternalID($fkiBillingentityinternalID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($fkiBillingentityinternalID)) {
            //throw new \InvalidArgumentException('non-nullable fkiBillingentityinternalID cannot be null');
        //}

	//if (($fkiBillingentityinternalID < 0)) {
        if (($fkiBillingentityinternalID < 0)) {
	    //throw new \InvalidArgumentException('invalid value for $fkiBillingentityinternalID when calling EzmaxinvoicinguserResponseCompound., must be bigger than or equal to 0.');
            throw new \InvalidArgumentException('invalid value '.(is_null($fkiBillingentityinternalID)?'null':'"'.$fkiBillingentityinternalID.'"').' for fkiBillingentityinternalID when calling EzmaxinvoicinguserResponseCompound., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['fkiBillingentityinternalID'] = $fkiBillingentityinternalID;
        $this->container['fkiBillingentityinternalID'] = (is_null($fkiBillingentityinternalID) ? null : (int) $fkiBillingentityinternalID);

        return $this;
    }

    /**
     * Gets sBillingentityinternalDescriptionX
     *
     * @return string
     */
    public function getSBillingentityinternalDescriptionX()
    {
	//return $this->container['sBillingentityinternalDescriptionX'];
        return is_null($this->container['sBillingentityinternalDescriptionX']) ? null : trim($this->container['sBillingentityinternalDescriptionX']);
    }

    /**
     * Sets sBillingentityinternalDescriptionX
     *
     * @param string $sBillingentityinternalDescriptionX The description of the Billingentityinternal in the language of the requester
     *
     * @return self
     */
    public function setSBillingentityinternalDescriptionX($sBillingentityinternalDescriptionX)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sBillingentityinternalDescriptionX)) {
            //throw new \InvalidArgumentException('non-nullable sBillingentityinternalDescriptionX cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sBillingentityinternalDescriptionX'] = $sBillingentityinternalDescriptionX;
        $this->container['sBillingentityinternalDescriptionX'] = (is_null($sBillingentityinternalDescriptionX) ? null : trim((string) $sBillingentityinternalDescriptionX));

        return $this;
    }

    /**
     * Gets fkiUserID
     *
     * @return int
     */
    public function getFkiUserID()
    {
	//return $this->container['fkiUserID'];
        return $this->container['fkiUserID'];
    }

    /**
     * Sets fkiUserID
     *
     * @param int $fkiUserID The unique ID of the User
     *
     * @return self
     */
    public function setFkiUserID($fkiUserID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($fkiUserID)) {
            //throw new \InvalidArgumentException('non-nullable fkiUserID cannot be null');
        //}

	//if (($fkiUserID < 0)) {
        if (($fkiUserID < 0)) {
	    //throw new \InvalidArgumentException('invalid value for $fkiUserID when calling EzmaxinvoicinguserResponseCompound., must be bigger than or equal to 0.');
            throw new \InvalidArgumentException('invalid value '.(is_null($fkiUserID)?'null':'"'.$fkiUserID.'"').' for fkiUserID when calling EzmaxinvoicinguserResponseCompound., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['fkiUserID'] = $fkiUserID;
        $this->container['fkiUserID'] = (is_null($fkiUserID) ? null : (int) $fkiUserID);

        return $this;
    }

    /**
     * Gets iEzmaxinvoicinguserEzsigndocument
     *
     * @return int
     */
    public function getIEzmaxinvoicinguserEzsigndocument()
    {
	//return $this->container['iEzmaxinvoicinguserEzsigndocument'];
        return $this->container['iEzmaxinvoicinguserEzsigndocument'];
    }

    /**
     * Sets iEzmaxinvoicinguserEzsigndocument
     *
     * @param int $iEzmaxinvoicinguserEzsigndocument The number of ezsign documents
     *
     * @return self
     */
    public function setIEzmaxinvoicinguserEzsigndocument($iEzmaxinvoicinguserEzsigndocument)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($iEzmaxinvoicinguserEzsigndocument)) {
            //throw new \InvalidArgumentException('non-nullable iEzmaxinvoicinguserEzsigndocument cannot be null');
        //}

	//if (($iEzmaxinvoicinguserEzsigndocument < 0)) {
        if (($iEzmaxinvoicinguserEzsigndocument < 0)) {
	    //throw new \InvalidArgumentException('invalid value for $iEzmaxinvoicinguserEzsigndocument when calling EzmaxinvoicinguserResponseCompound., must be bigger than or equal to 0.');
            throw new \InvalidArgumentException('invalid value '.(is_null($iEzmaxinvoicinguserEzsigndocument)?'null':'"'.$iEzmaxinvoicinguserEzsigndocument.'"').' for iEzmaxinvoicinguserEzsigndocument when calling EzmaxinvoicinguserResponseCompound., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['iEzmaxinvoicinguserEzsigndocument'] = $iEzmaxinvoicinguserEzsigndocument;
        $this->container['iEzmaxinvoicinguserEzsigndocument'] = (is_null($iEzmaxinvoicinguserEzsigndocument) ? null : (int) $iEzmaxinvoicinguserEzsigndocument);

        return $this;
    }

    /**
     * Gets bEzmaxinvoicinguserEzsignaccount
     *
     * @return bool
     */
    public function getBEzmaxinvoicinguserEzsignaccount()
    {
	//return $this->container['bEzmaxinvoicinguserEzsignaccount'];
        return $this->container['bEzmaxinvoicinguserEzsignaccount'];
    }

    /**
     * Sets bEzmaxinvoicinguserEzsignaccount
     *
     * @param bool $bEzmaxinvoicinguserEzsignaccount Whether there is an eZsign account
     *
     * @return self
     */
    public function setBEzmaxinvoicinguserEzsignaccount($bEzmaxinvoicinguserEzsignaccount)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($bEzmaxinvoicinguserEzsignaccount)) {
            //throw new \InvalidArgumentException('non-nullable bEzmaxinvoicinguserEzsignaccount cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['bEzmaxinvoicinguserEzsignaccount'] = $bEzmaxinvoicinguserEzsignaccount;
        $this->container['bEzmaxinvoicinguserEzsignaccount'] = (is_null($bEzmaxinvoicinguserEzsignaccount) ? null : (bool) $bEzmaxinvoicinguserEzsignaccount);

        return $this;
    }

    /**
     * Gets bEzmaxinvoicinguserBillableezsign
     *
     * @return bool
     */
    public function getBEzmaxinvoicinguserBillableezsign()
    {
	//return $this->container['bEzmaxinvoicinguserBillableezsign'];
        return $this->container['bEzmaxinvoicinguserBillableezsign'];
    }

    /**
     * Sets bEzmaxinvoicinguserBillableezsign
     *
     * @param bool $bEzmaxinvoicinguserBillableezsign Whether it is billable for eZsign
     *
     * @return self
     */
    public function setBEzmaxinvoicinguserBillableezsign($bEzmaxinvoicinguserBillableezsign)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($bEzmaxinvoicinguserBillableezsign)) {
            //throw new \InvalidArgumentException('non-nullable bEzmaxinvoicinguserBillableezsign cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['bEzmaxinvoicinguserBillableezsign'] = $bEzmaxinvoicinguserBillableezsign;
        $this->container['bEzmaxinvoicinguserBillableezsign'] = (is_null($bEzmaxinvoicinguserBillableezsign) ? null : (bool) $bEzmaxinvoicinguserBillableezsign);

        return $this;
    }

    /**
     * Gets eEzmaxinvoicinguserVariationezsign
     *
     * @return \eZmaxAPI\Model\FieldEEzmaxinvoicinguserVariationezsign
     */
    public function getEEzmaxinvoicinguserVariationezsign()
    {
	//return $this->container['eEzmaxinvoicinguserVariationezsign'];
        return $this->container['eEzmaxinvoicinguserVariationezsign'];
    }

    /**
     * Sets eEzmaxinvoicinguserVariationezsign
     *
     * @param \eZmaxAPI\Model\FieldEEzmaxinvoicinguserVariationezsign $eEzmaxinvoicinguserVariationezsign eEzmaxinvoicinguserVariationezsign
     *
     * @return self
     */
    public function setEEzmaxinvoicinguserVariationezsign($eEzmaxinvoicinguserVariationezsign)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($eEzmaxinvoicinguserVariationezsign)) {
            //throw new \InvalidArgumentException('non-nullable eEzmaxinvoicinguserVariationezsign cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['eEzmaxinvoicinguserVariationezsign'] = $eEzmaxinvoicinguserVariationezsign;
        $this->container['eEzmaxinvoicinguserVariationezsign'] = $eEzmaxinvoicinguserVariationezsign;

        return $this;
    }

    /**
     * Gets objContactName
     *
     * @return \eZmaxAPI\Model\CustomContactNameResponse
     */
    public function getObjContactName()
    {
	//return $this->container['objContactName'];
        return $this->container['objContactName'];
    }

    /**
     * Sets objContactName
     *
     * @param \eZmaxAPI\Model\CustomContactNameResponse $objContactName objContactName
     *
     * @return self
     */
    public function setObjContactName($objContactName)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($objContactName)) {
            //throw new \InvalidArgumentException('non-nullable objContactName cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['objContactName'] = $objContactName;
        $this->container['objContactName'] = $objContactName;

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


