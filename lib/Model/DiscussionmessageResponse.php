<?php
/**
 * DiscussionmessageResponse
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
 * DiscussionmessageResponse Class Doc Comment
 *
 * @category Class
 * @description A Discussionmessage Object
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class DiscussionmessageResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'discussionmessage-Response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'pkiDiscussionmessageID' => 'int',
        'fkiDiscussionID' => 'int',
        'fkiDiscussionmembershipID' => 'int',
        'fkiDiscussionmembershipIDActionrequired' => 'int',
        'eDiscussionmessageStatus' => '\eZmaxAPI\Model\FieldEDiscussionmessageStatus',
        'tDiscussionmessageContent' => 'string',
        'sDiscussionmessageCreatorname' => 'string',
        'sDiscussionmessageActionrequiredname' => 'string',
        'objAudit' => '\eZmaxAPI\Model\CommonAudit'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'pkiDiscussionmessageID' => null,
        'fkiDiscussionID' => null,
        'fkiDiscussionmembershipID' => null,
        'fkiDiscussionmembershipIDActionrequired' => null,
        'eDiscussionmessageStatus' => null,
        'tDiscussionmessageContent' => null,
        'sDiscussionmessageCreatorname' => null,
        'sDiscussionmessageActionrequiredname' => null,
        'objAudit' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'pkiDiscussionmessageID' => false,
		'fkiDiscussionID' => false,
		'fkiDiscussionmembershipID' => false,
		'fkiDiscussionmembershipIDActionrequired' => false,
		'eDiscussionmessageStatus' => false,
		'tDiscussionmessageContent' => false,
		'sDiscussionmessageCreatorname' => false,
		'sDiscussionmessageActionrequiredname' => false,
		'objAudit' => false
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
        'pkiDiscussionmessageID' => 'pkiDiscussionmessageID',
        'fkiDiscussionID' => 'fkiDiscussionID',
        'fkiDiscussionmembershipID' => 'fkiDiscussionmembershipID',
        'fkiDiscussionmembershipIDActionrequired' => 'fkiDiscussionmembershipIDActionrequired',
        'eDiscussionmessageStatus' => 'eDiscussionmessageStatus',
        'tDiscussionmessageContent' => 'tDiscussionmessageContent',
        'sDiscussionmessageCreatorname' => 'sDiscussionmessageCreatorname',
        'sDiscussionmessageActionrequiredname' => 'sDiscussionmessageActionrequiredname',
        'objAudit' => 'objAudit'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pkiDiscussionmessageID' => 'setPkiDiscussionmessageID',
        'fkiDiscussionID' => 'setFkiDiscussionID',
        'fkiDiscussionmembershipID' => 'setFkiDiscussionmembershipID',
        'fkiDiscussionmembershipIDActionrequired' => 'setFkiDiscussionmembershipIDActionrequired',
        'eDiscussionmessageStatus' => 'setEDiscussionmessageStatus',
        'tDiscussionmessageContent' => 'setTDiscussionmessageContent',
        'sDiscussionmessageCreatorname' => 'setSDiscussionmessageCreatorname',
        'sDiscussionmessageActionrequiredname' => 'setSDiscussionmessageActionrequiredname',
        'objAudit' => 'setObjAudit'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pkiDiscussionmessageID' => 'getPkiDiscussionmessageID',
        'fkiDiscussionID' => 'getFkiDiscussionID',
        'fkiDiscussionmembershipID' => 'getFkiDiscussionmembershipID',
        'fkiDiscussionmembershipIDActionrequired' => 'getFkiDiscussionmembershipIDActionrequired',
        'eDiscussionmessageStatus' => 'getEDiscussionmessageStatus',
        'tDiscussionmessageContent' => 'getTDiscussionmessageContent',
        'sDiscussionmessageCreatorname' => 'getSDiscussionmessageCreatorname',
        'sDiscussionmessageActionrequiredname' => 'getSDiscussionmessageActionrequiredname',
        'objAudit' => 'getObjAudit'
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
        $this->setIfExists('pkiDiscussionmessageID', $data ?? [], null);
        $this->setIfExists('fkiDiscussionID', $data ?? [], null);
        $this->setIfExists('fkiDiscussionmembershipID', $data ?? [], null);
        $this->setIfExists('fkiDiscussionmembershipIDActionrequired', $data ?? [], null);
        $this->setIfExists('eDiscussionmessageStatus', $data ?? [], null);
        $this->setIfExists('tDiscussionmessageContent', $data ?? [], null);
        $this->setIfExists('sDiscussionmessageCreatorname', $data ?? [], null);
        $this->setIfExists('sDiscussionmessageActionrequiredname', $data ?? [], null);
        $this->setIfExists('objAudit', $data ?? [], null);
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

        if ($this->container['pkiDiscussionmessageID'] === null) {
            $invalidProperties[] = "'pkiDiscussionmessageID' can't be null";
        }
        if (($this->container['pkiDiscussionmessageID'] > 16777215)) {
            $invalidProperties[] = "invalid value for 'pkiDiscussionmessageID', must be smaller than or equal to 16777215.";
        }

        if (($this->container['pkiDiscussionmessageID'] < 0)) {
            $invalidProperties[] = "invalid value for 'pkiDiscussionmessageID', must be bigger than or equal to 0.";
        }

        if ($this->container['fkiDiscussionID'] === null) {
            $invalidProperties[] = "'fkiDiscussionID' can't be null";
        }
        if (($this->container['fkiDiscussionID'] > 16777215)) {
            $invalidProperties[] = "invalid value for 'fkiDiscussionID', must be smaller than or equal to 16777215.";
        }

        if (($this->container['fkiDiscussionID'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiDiscussionID', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['fkiDiscussionmembershipID']) && ($this->container['fkiDiscussionmembershipID'] > 16777215)) {
            $invalidProperties[] = "invalid value for 'fkiDiscussionmembershipID', must be smaller than or equal to 16777215.";
        }

        if (!is_null($this->container['fkiDiscussionmembershipID']) && ($this->container['fkiDiscussionmembershipID'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiDiscussionmembershipID', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['fkiDiscussionmembershipIDActionrequired']) && ($this->container['fkiDiscussionmembershipIDActionrequired'] > 16777215)) {
            $invalidProperties[] = "invalid value for 'fkiDiscussionmembershipIDActionrequired', must be smaller than or equal to 16777215.";
        }

        if (!is_null($this->container['fkiDiscussionmembershipIDActionrequired']) && ($this->container['fkiDiscussionmembershipIDActionrequired'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiDiscussionmembershipIDActionrequired', must be bigger than or equal to 0.";
        }

        if ($this->container['eDiscussionmessageStatus'] === null) {
            $invalidProperties[] = "'eDiscussionmessageStatus' can't be null";
        }
        if ($this->container['tDiscussionmessageContent'] === null) {
            $invalidProperties[] = "'tDiscussionmessageContent' can't be null";
        }
	//if (!preg_match("/^.{0,65535}$/", $this->container['tDiscussionmessageContent'])) {
        if (!is_null($this->container['tDiscussionmessageContent']) && !preg_match("/(*UTF8)^.{0,65535}$/", $this->container['tDiscussionmessageContent'])) {
            $invalidProperties[] = "invalid value for 'tDiscussionmessageContent', must be conform to the pattern /^.{0,65535}$/.";
        }

        if ($this->container['sDiscussionmessageCreatorname'] === null) {
            $invalidProperties[] = "'sDiscussionmessageCreatorname' can't be null";
        }
	//if (!preg_match("/^.{0,75}$/", $this->container['sDiscussionmessageCreatorname'])) {
        if (!is_null($this->container['sDiscussionmessageCreatorname']) && !preg_match("/(*UTF8)^.{0,75}$/", $this->container['sDiscussionmessageCreatorname'])) {
            $invalidProperties[] = "invalid value for 'sDiscussionmessageCreatorname', must be conform to the pattern /^.{0,75}$/.";
        }

	//if (!is_null($this->container['sDiscussionmessageActionrequiredname']) && !preg_match("/^.{0,75}$/", $this->container['sDiscussionmessageActionrequiredname'])) {
        if (!is_null($this->container['sDiscussionmessageActionrequiredname']) && !preg_match("/(*UTF8)^.{0,75}$/", $this->container['sDiscussionmessageActionrequiredname'])) {
            $invalidProperties[] = "invalid value for 'sDiscussionmessageActionrequiredname', must be conform to the pattern /^.{0,75}$/.";
        }

        if ($this->container['objAudit'] === null) {
            $invalidProperties[] = "'objAudit' can't be null";
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
     * Gets pkiDiscussionmessageID
     *
     * @return int
     */
    public function getPkiDiscussionmessageID()
    {
	//return $this->container['pkiDiscussionmessageID'];
        return $this->container['pkiDiscussionmessageID'];
    }

    /**
     * Sets pkiDiscussionmessageID
     *
     * @param int $pkiDiscussionmessageID The unique ID of the Discussionmessage
     *
     * @return self
     */
    public function setPkiDiscussionmessageID($pkiDiscussionmessageID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($pkiDiscussionmessageID)) {
            //throw new \InvalidArgumentException('non-nullable pkiDiscussionmessageID cannot be null');
        //}

	//if (($pkiDiscussionmessageID > 16777215)) {
        if (($pkiDiscussionmessageID > 16777215)) {
	    //throw new \InvalidArgumentException('invalid value for $pkiDiscussionmessageID when calling DiscussionmessageResponse., must be smaller than or equal to 16777215.');
            throw new \InvalidArgumentException('invalid value '.(is_null($pkiDiscussionmessageID)?'null':'"'.$pkiDiscussionmessageID.'"').' for pkiDiscussionmessageID when calling DiscussionmessageResponse., must be smaller than or equal to 16777215.');
        }
	//if (($pkiDiscussionmessageID < 0)) {
        if (($pkiDiscussionmessageID < 0)) {
	    //throw new \InvalidArgumentException('invalid value for $pkiDiscussionmessageID when calling DiscussionmessageResponse., must be bigger than or equal to 0.');
            throw new \InvalidArgumentException('invalid value '.(is_null($pkiDiscussionmessageID)?'null':'"'.$pkiDiscussionmessageID.'"').' for pkiDiscussionmessageID when calling DiscussionmessageResponse., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['pkiDiscussionmessageID'] = $pkiDiscussionmessageID;
        $this->container['pkiDiscussionmessageID'] = (is_null($pkiDiscussionmessageID) ? null : (int) $pkiDiscussionmessageID);

        return $this;
    }

    /**
     * Gets fkiDiscussionID
     *
     * @return int
     */
    public function getFkiDiscussionID()
    {
	//return $this->container['fkiDiscussionID'];
        return $this->container['fkiDiscussionID'];
    }

    /**
     * Sets fkiDiscussionID
     *
     * @param int $fkiDiscussionID The unique ID of the Discussion
     *
     * @return self
     */
    public function setFkiDiscussionID($fkiDiscussionID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($fkiDiscussionID)) {
            //throw new \InvalidArgumentException('non-nullable fkiDiscussionID cannot be null');
        //}

	//if (($fkiDiscussionID > 16777215)) {
        if (($fkiDiscussionID > 16777215)) {
	    //throw new \InvalidArgumentException('invalid value for $fkiDiscussionID when calling DiscussionmessageResponse., must be smaller than or equal to 16777215.');
            throw new \InvalidArgumentException('invalid value '.(is_null($fkiDiscussionID)?'null':'"'.$fkiDiscussionID.'"').' for fkiDiscussionID when calling DiscussionmessageResponse., must be smaller than or equal to 16777215.');
        }
	//if (($fkiDiscussionID < 0)) {
        if (($fkiDiscussionID < 0)) {
	    //throw new \InvalidArgumentException('invalid value for $fkiDiscussionID when calling DiscussionmessageResponse., must be bigger than or equal to 0.');
            throw new \InvalidArgumentException('invalid value '.(is_null($fkiDiscussionID)?'null':'"'.$fkiDiscussionID.'"').' for fkiDiscussionID when calling DiscussionmessageResponse., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['fkiDiscussionID'] = $fkiDiscussionID;
        $this->container['fkiDiscussionID'] = (is_null($fkiDiscussionID) ? null : (int) $fkiDiscussionID);

        return $this;
    }

    /**
     * Gets fkiDiscussionmembershipID
     *
     * @return int|null
     */
    public function getFkiDiscussionmembershipID()
    {
	//return $this->container['fkiDiscussionmembershipID'];
        return $this->container['fkiDiscussionmembershipID'];
    }

    /**
     * Sets fkiDiscussionmembershipID
     *
     * @param int|null $fkiDiscussionmembershipID The unique ID of the Discussionmembership
     *
     * @return self
     */
    public function setFkiDiscussionmembershipID($fkiDiscussionmembershipID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($fkiDiscussionmembershipID)) {
            //throw new \InvalidArgumentException('non-nullable fkiDiscussionmembershipID cannot be null');
        //}

	//if (($fkiDiscussionmembershipID > 16777215)) {
        if (!is_null($fkiDiscussionmembershipID) && ($fkiDiscussionmembershipID > 16777215)) {
	    //throw new \InvalidArgumentException('invalid value for $fkiDiscussionmembershipID when calling DiscussionmessageResponse., must be smaller than or equal to 16777215.');
            throw new \InvalidArgumentException('invalid value '.(is_null($fkiDiscussionmembershipID)?'null':'"'.$fkiDiscussionmembershipID.'"').' for fkiDiscussionmembershipID when calling DiscussionmessageResponse., must be smaller than or equal to 16777215.');
        }
	//if (($fkiDiscussionmembershipID < 0)) {
        if (!is_null($fkiDiscussionmembershipID) && ($fkiDiscussionmembershipID < 0)) {
	    //throw new \InvalidArgumentException('invalid value for $fkiDiscussionmembershipID when calling DiscussionmessageResponse., must be bigger than or equal to 0.');
            throw new \InvalidArgumentException('invalid value '.(is_null($fkiDiscussionmembershipID)?'null':'"'.$fkiDiscussionmembershipID.'"').' for fkiDiscussionmembershipID when calling DiscussionmessageResponse., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['fkiDiscussionmembershipID'] = $fkiDiscussionmembershipID;
        $this->container['fkiDiscussionmembershipID'] = (is_null($fkiDiscussionmembershipID) ? null : (int) $fkiDiscussionmembershipID);

        return $this;
    }

    /**
     * Gets fkiDiscussionmembershipIDActionrequired
     *
     * @return int|null
     */
    public function getFkiDiscussionmembershipIDActionrequired()
    {
	//return $this->container['fkiDiscussionmembershipIDActionrequired'];
        return $this->container['fkiDiscussionmembershipIDActionrequired'];
    }

    /**
     * Sets fkiDiscussionmembershipIDActionrequired
     *
     * @param int|null $fkiDiscussionmembershipIDActionrequired The unique ID of the Discussionmembership
     *
     * @return self
     */
    public function setFkiDiscussionmembershipIDActionrequired($fkiDiscussionmembershipIDActionrequired)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($fkiDiscussionmembershipIDActionrequired)) {
            //throw new \InvalidArgumentException('non-nullable fkiDiscussionmembershipIDActionrequired cannot be null');
        //}

	//if (($fkiDiscussionmembershipIDActionrequired > 16777215)) {
        if (!is_null($fkiDiscussionmembershipIDActionrequired) && ($fkiDiscussionmembershipIDActionrequired > 16777215)) {
	    //throw new \InvalidArgumentException('invalid value for $fkiDiscussionmembershipIDActionrequired when calling DiscussionmessageResponse., must be smaller than or equal to 16777215.');
            throw new \InvalidArgumentException('invalid value '.(is_null($fkiDiscussionmembershipIDActionrequired)?'null':'"'.$fkiDiscussionmembershipIDActionrequired.'"').' for fkiDiscussionmembershipIDActionrequired when calling DiscussionmessageResponse., must be smaller than or equal to 16777215.');
        }
	//if (($fkiDiscussionmembershipIDActionrequired < 0)) {
        if (!is_null($fkiDiscussionmembershipIDActionrequired) && ($fkiDiscussionmembershipIDActionrequired < 0)) {
	    //throw new \InvalidArgumentException('invalid value for $fkiDiscussionmembershipIDActionrequired when calling DiscussionmessageResponse., must be bigger than or equal to 0.');
            throw new \InvalidArgumentException('invalid value '.(is_null($fkiDiscussionmembershipIDActionrequired)?'null':'"'.$fkiDiscussionmembershipIDActionrequired.'"').' for fkiDiscussionmembershipIDActionrequired when calling DiscussionmessageResponse., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['fkiDiscussionmembershipIDActionrequired'] = $fkiDiscussionmembershipIDActionrequired;
        $this->container['fkiDiscussionmembershipIDActionrequired'] = (is_null($fkiDiscussionmembershipIDActionrequired) ? null : (int) $fkiDiscussionmembershipIDActionrequired);

        return $this;
    }

    /**
     * Gets eDiscussionmessageStatus
     *
     * @return \eZmaxAPI\Model\FieldEDiscussionmessageStatus
     */
    public function getEDiscussionmessageStatus()
    {
	//return $this->container['eDiscussionmessageStatus'];
        return $this->container['eDiscussionmessageStatus'];
    }

    /**
     * Sets eDiscussionmessageStatus
     *
     * @param \eZmaxAPI\Model\FieldEDiscussionmessageStatus $eDiscussionmessageStatus eDiscussionmessageStatus
     *
     * @return self
     */
    public function setEDiscussionmessageStatus($eDiscussionmessageStatus)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($eDiscussionmessageStatus)) {
            //throw new \InvalidArgumentException('non-nullable eDiscussionmessageStatus cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['eDiscussionmessageStatus'] = $eDiscussionmessageStatus;
        $this->container['eDiscussionmessageStatus'] = $eDiscussionmessageStatus;

        return $this;
    }

    /**
     * Gets tDiscussionmessageContent
     *
     * @return string
     */
    public function getTDiscussionmessageContent()
    {
	//return $this->container['tDiscussionmessageContent'];
        return is_null($this->container['tDiscussionmessageContent']) ? null : trim($this->container['tDiscussionmessageContent']);
    }

    /**
     * Sets tDiscussionmessageContent
     *
     * @param string $tDiscussionmessageContent The content of the Discussionmessage
     *
     * @return self
     */
    public function setTDiscussionmessageContent($tDiscussionmessageContent)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($tDiscussionmessageContent)) {
            //throw new \InvalidArgumentException('non-nullable tDiscussionmessageContent cannot be null');
        //}

	//if ((!preg_match("/^.{0,65535}$/", ObjectSerializer::toString($tDiscussionmessageContent)))) {
        if (!is_null($tDiscussionmessageContent) && (!preg_match("/(*UTF8)^.{0,65535}$/", ObjectSerializer::toString($tDiscussionmessageContent)))) {
	    //throw new \InvalidArgumentException("invalid value for \$tDiscussionmessageContent when calling DiscussionmessageResponse., must conform to the pattern /^.{0,65535}$/.");
            throw new \InvalidArgumentException("invalid value ".(is_null($tDiscussionmessageContent)?'null':'"'.$tDiscussionmessageContent.'"')." for tDiscussionmessageContent when calling DiscussionmessageResponse., must conform to the pattern /^.{0,65535}$/.");
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['tDiscussionmessageContent'] = $tDiscussionmessageContent;
        $this->container['tDiscussionmessageContent'] = (is_null($tDiscussionmessageContent) ? null : trim((string) $tDiscussionmessageContent));

        return $this;
    }

    /**
     * Gets sDiscussionmessageCreatorname
     *
     * @return string
     */
    public function getSDiscussionmessageCreatorname()
    {
	//return $this->container['sDiscussionmessageCreatorname'];
        return is_null($this->container['sDiscussionmessageCreatorname']) ? null : trim($this->container['sDiscussionmessageCreatorname']);
    }

    /**
     * Sets sDiscussionmessageCreatorname
     *
     * @param string $sDiscussionmessageCreatorname The name the creator of the Discussionmessage.
     *
     * @return self
     */
    public function setSDiscussionmessageCreatorname($sDiscussionmessageCreatorname)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sDiscussionmessageCreatorname)) {
            //throw new \InvalidArgumentException('non-nullable sDiscussionmessageCreatorname cannot be null');
        //}

	//if ((!preg_match("/^.{0,75}$/", ObjectSerializer::toString($sDiscussionmessageCreatorname)))) {
        if (!is_null($sDiscussionmessageCreatorname) && (!preg_match("/(*UTF8)^.{0,75}$/", ObjectSerializer::toString($sDiscussionmessageCreatorname)))) {
	    //throw new \InvalidArgumentException("invalid value for \$sDiscussionmessageCreatorname when calling DiscussionmessageResponse., must conform to the pattern /^.{0,75}$/.");
            throw new \InvalidArgumentException("invalid value ".(is_null($sDiscussionmessageCreatorname)?'null':'"'.$sDiscussionmessageCreatorname.'"')." for sDiscussionmessageCreatorname when calling DiscussionmessageResponse., must conform to the pattern /^.{0,75}$/.");
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sDiscussionmessageCreatorname'] = $sDiscussionmessageCreatorname;
        $this->container['sDiscussionmessageCreatorname'] = (is_null($sDiscussionmessageCreatorname) ? null : trim((string) $sDiscussionmessageCreatorname));

        return $this;
    }

    /**
     * Gets sDiscussionmessageActionrequiredname
     *
     * @return string|null
     */
    public function getSDiscussionmessageActionrequiredname()
    {
	//return $this->container['sDiscussionmessageActionrequiredname'];
        return is_null($this->container['sDiscussionmessageActionrequiredname']) ? null : trim($this->container['sDiscussionmessageActionrequiredname']);
    }

    /**
     * Sets sDiscussionmessageActionrequiredname
     *
     * @param string|null $sDiscussionmessageActionrequiredname The name the Actionrequired of the Discussionmessage.
     *
     * @return self
     */
    public function setSDiscussionmessageActionrequiredname($sDiscussionmessageActionrequiredname)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($sDiscussionmessageActionrequiredname)) {
            //throw new \InvalidArgumentException('non-nullable sDiscussionmessageActionrequiredname cannot be null');
        //}

	//if ((!preg_match("/^.{0,75}$/", ObjectSerializer::toString($sDiscussionmessageActionrequiredname)))) {
        if (!is_null($sDiscussionmessageActionrequiredname) && (!preg_match("/(*UTF8)^.{0,75}$/", ObjectSerializer::toString($sDiscussionmessageActionrequiredname)))) {
	    //throw new \InvalidArgumentException("invalid value for \$sDiscussionmessageActionrequiredname when calling DiscussionmessageResponse., must conform to the pattern /^.{0,75}$/.");
            throw new \InvalidArgumentException("invalid value ".(is_null($sDiscussionmessageActionrequiredname)?'null':'"'.$sDiscussionmessageActionrequiredname.'"')." for sDiscussionmessageActionrequiredname when calling DiscussionmessageResponse., must conform to the pattern /^.{0,75}$/.");
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['sDiscussionmessageActionrequiredname'] = $sDiscussionmessageActionrequiredname;
        $this->container['sDiscussionmessageActionrequiredname'] = (is_null($sDiscussionmessageActionrequiredname) ? null : trim((string) $sDiscussionmessageActionrequiredname));

        return $this;
    }

    /**
     * Gets objAudit
     *
     * @return \eZmaxAPI\Model\CommonAudit
     */
    public function getObjAudit()
    {
	//return $this->container['objAudit'];
        return $this->container['objAudit'];
    }

    /**
     * Sets objAudit
     *
     * @param \eZmaxAPI\Model\CommonAudit $objAudit objAudit
     *
     * @return self
     */
    public function setObjAudit($objAudit)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($objAudit)) {
            //throw new \InvalidArgumentException('non-nullable objAudit cannot be null');
        //}
        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['objAudit'] = $objAudit;
        $this->container['objAudit'] = $objAudit;

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


