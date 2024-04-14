<?php
/**
 * CommunicationreferenceRequest
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
 * CommunicationreferenceRequest Class Doc Comment
 *
 * @category Class
 * @description A Communicationreference Object
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CommunicationreferenceRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'communicationreference-Request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'pkiCommunicationreferenceID' => 'int',
        'fkiBuyercontractID' => 'int',
        'fkiEzsignfolderID' => 'int',
        'fkiInscriptionID' => 'int',
        'fkiInscriptiontempID' => 'int',
        'fkiInvoiceID' => 'int',
        'fkiOtherincomeID' => 'int',
        'fkiElectronicfundstransferID' => 'int',
        'fkiRejectedoffertopurchaseID' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'pkiCommunicationreferenceID' => null,
        'fkiBuyercontractID' => null,
        'fkiEzsignfolderID' => null,
        'fkiInscriptionID' => null,
        'fkiInscriptiontempID' => null,
        'fkiInvoiceID' => null,
        'fkiOtherincomeID' => null,
        'fkiElectronicfundstransferID' => null,
        'fkiRejectedoffertopurchaseID' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'pkiCommunicationreferenceID' => false,
		'fkiBuyercontractID' => false,
		'fkiEzsignfolderID' => false,
		'fkiInscriptionID' => false,
		'fkiInscriptiontempID' => false,
		'fkiInvoiceID' => false,
		'fkiOtherincomeID' => false,
		'fkiElectronicfundstransferID' => false,
		'fkiRejectedoffertopurchaseID' => false
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
        'pkiCommunicationreferenceID' => 'pkiCommunicationreferenceID',
        'fkiBuyercontractID' => 'fkiBuyercontractID',
        'fkiEzsignfolderID' => 'fkiEzsignfolderID',
        'fkiInscriptionID' => 'fkiInscriptionID',
        'fkiInscriptiontempID' => 'fkiInscriptiontempID',
        'fkiInvoiceID' => 'fkiInvoiceID',
        'fkiOtherincomeID' => 'fkiOtherincomeID',
        'fkiElectronicfundstransferID' => 'fkiElectronicfundstransferID',
        'fkiRejectedoffertopurchaseID' => 'fkiRejectedoffertopurchaseID'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pkiCommunicationreferenceID' => 'setPkiCommunicationreferenceID',
        'fkiBuyercontractID' => 'setFkiBuyercontractID',
        'fkiEzsignfolderID' => 'setFkiEzsignfolderID',
        'fkiInscriptionID' => 'setFkiInscriptionID',
        'fkiInscriptiontempID' => 'setFkiInscriptiontempID',
        'fkiInvoiceID' => 'setFkiInvoiceID',
        'fkiOtherincomeID' => 'setFkiOtherincomeID',
        'fkiElectronicfundstransferID' => 'setFkiElectronicfundstransferID',
        'fkiRejectedoffertopurchaseID' => 'setFkiRejectedoffertopurchaseID'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pkiCommunicationreferenceID' => 'getPkiCommunicationreferenceID',
        'fkiBuyercontractID' => 'getFkiBuyercontractID',
        'fkiEzsignfolderID' => 'getFkiEzsignfolderID',
        'fkiInscriptionID' => 'getFkiInscriptionID',
        'fkiInscriptiontempID' => 'getFkiInscriptiontempID',
        'fkiInvoiceID' => 'getFkiInvoiceID',
        'fkiOtherincomeID' => 'getFkiOtherincomeID',
        'fkiElectronicfundstransferID' => 'getFkiElectronicfundstransferID',
        'fkiRejectedoffertopurchaseID' => 'getFkiRejectedoffertopurchaseID'
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
        $this->setIfExists('pkiCommunicationreferenceID', $data ?? [], null);
        $this->setIfExists('fkiBuyercontractID', $data ?? [], null);
        $this->setIfExists('fkiEzsignfolderID', $data ?? [], null);
        $this->setIfExists('fkiInscriptionID', $data ?? [], null);
        $this->setIfExists('fkiInscriptiontempID', $data ?? [], null);
        $this->setIfExists('fkiInvoiceID', $data ?? [], null);
        $this->setIfExists('fkiOtherincomeID', $data ?? [], null);
        $this->setIfExists('fkiElectronicfundstransferID', $data ?? [], null);
        $this->setIfExists('fkiRejectedoffertopurchaseID', $data ?? [], null);
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

        if (!is_null($this->container['pkiCommunicationreferenceID']) && ($this->container['pkiCommunicationreferenceID'] > 4294967295)) {
            $invalidProperties[] = "invalid value for 'pkiCommunicationreferenceID', must be smaller than or equal to 4294967295.";
        }

        if (!is_null($this->container['pkiCommunicationreferenceID']) && ($this->container['pkiCommunicationreferenceID'] < 0)) {
            $invalidProperties[] = "invalid value for 'pkiCommunicationreferenceID', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['fkiBuyercontractID']) && ($this->container['fkiBuyercontractID'] > 65535)) {
            $invalidProperties[] = "invalid value for 'fkiBuyercontractID', must be smaller than or equal to 65535.";
        }

        if (!is_null($this->container['fkiBuyercontractID']) && ($this->container['fkiBuyercontractID'] < 1)) {
            $invalidProperties[] = "invalid value for 'fkiBuyercontractID', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['fkiEzsignfolderID']) && ($this->container['fkiEzsignfolderID'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiEzsignfolderID', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['fkiInscriptionID']) && ($this->container['fkiInscriptionID'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiInscriptionID', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['fkiInscriptiontempID']) && ($this->container['fkiInscriptiontempID'] > 16777215)) {
            $invalidProperties[] = "invalid value for 'fkiInscriptiontempID', must be smaller than or equal to 16777215.";
        }

        if (!is_null($this->container['fkiInscriptiontempID']) && ($this->container['fkiInscriptiontempID'] < 1)) {
            $invalidProperties[] = "invalid value for 'fkiInscriptiontempID', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['fkiInvoiceID']) && ($this->container['fkiInvoiceID'] < 0)) {
            $invalidProperties[] = "invalid value for 'fkiInvoiceID', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['fkiOtherincomeID']) && ($this->container['fkiOtherincomeID'] > 65535)) {
            $invalidProperties[] = "invalid value for 'fkiOtherincomeID', must be smaller than or equal to 65535.";
        }

        if (!is_null($this->container['fkiOtherincomeID']) && ($this->container['fkiOtherincomeID'] < 1)) {
            $invalidProperties[] = "invalid value for 'fkiOtherincomeID', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['fkiElectronicfundstransferID']) && ($this->container['fkiElectronicfundstransferID'] > 65535)) {
            $invalidProperties[] = "invalid value for 'fkiElectronicfundstransferID', must be smaller than or equal to 65535.";
        }

        if (!is_null($this->container['fkiElectronicfundstransferID']) && ($this->container['fkiElectronicfundstransferID'] < 1)) {
            $invalidProperties[] = "invalid value for 'fkiElectronicfundstransferID', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['fkiRejectedoffertopurchaseID']) && ($this->container['fkiRejectedoffertopurchaseID'] > 65535)) {
            $invalidProperties[] = "invalid value for 'fkiRejectedoffertopurchaseID', must be smaller than or equal to 65535.";
        }

        if (!is_null($this->container['fkiRejectedoffertopurchaseID']) && ($this->container['fkiRejectedoffertopurchaseID'] < 1)) {
            $invalidProperties[] = "invalid value for 'fkiRejectedoffertopurchaseID', must be bigger than or equal to 1.";
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
     * Gets pkiCommunicationreferenceID
     *
     * @return int|null
     */
    public function getPkiCommunicationreferenceID()
    {
        return $this->container['pkiCommunicationreferenceID'];
    }

    /**
     * Sets pkiCommunicationreferenceID
     *
     * @param int|null $pkiCommunicationreferenceID The unique ID of the Communicationreference
     *
     * @return self
     */
    public function setPkiCommunicationreferenceID($pkiCommunicationreferenceID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($pkiCommunicationreferenceID)) {
            //throw new \InvalidArgumentException('non-nullable pkiCommunicationreferenceID cannot be null');
        //}

//        if (($pkiCommunicationreferenceID > 4294967295)) {
        if (!is_null($pkiCommunicationreferenceID) && ($pkiCommunicationreferenceID > 4294967295)) {
            throw new \InvalidArgumentException('invalid value for $pkiCommunicationreferenceID when calling CommunicationreferenceRequest., must be smaller than or equal to 4294967295.');
        }
//        if (($pkiCommunicationreferenceID < 0)) {
        if (!is_null($pkiCommunicationreferenceID) && ($pkiCommunicationreferenceID < 0)) {
            throw new \InvalidArgumentException('invalid value for $pkiCommunicationreferenceID when calling CommunicationreferenceRequest., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['pkiCommunicationreferenceID'] = $pkiCommunicationreferenceID;
        $this->container['pkiCommunicationreferenceID'] = (is_null($pkiCommunicationreferenceID) ? null : (int) $pkiCommunicationreferenceID);

        return $this;
    }

    /**
     * Gets fkiBuyercontractID
     *
     * @return int|null
     */
    public function getFkiBuyercontractID()
    {
        return $this->container['fkiBuyercontractID'];
    }

    /**
     * Sets fkiBuyercontractID
     *
     * @param int|null $fkiBuyercontractID The unique ID of the Buyercontract
     *
     * @return self
     */
    public function setFkiBuyercontractID($fkiBuyercontractID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($fkiBuyercontractID)) {
            //throw new \InvalidArgumentException('non-nullable fkiBuyercontractID cannot be null');
        //}

//        if (($fkiBuyercontractID > 65535)) {
        if (!is_null($fkiBuyercontractID) && ($fkiBuyercontractID > 65535)) {
            throw new \InvalidArgumentException('invalid value for $fkiBuyercontractID when calling CommunicationreferenceRequest., must be smaller than or equal to 65535.');
        }
//        if (($fkiBuyercontractID < 1)) {
        if (!is_null($fkiBuyercontractID) && ($fkiBuyercontractID < 1)) {
            throw new \InvalidArgumentException('invalid value for $fkiBuyercontractID when calling CommunicationreferenceRequest., must be bigger than or equal to 1.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['fkiBuyercontractID'] = $fkiBuyercontractID;
        $this->container['fkiBuyercontractID'] = (is_null($fkiBuyercontractID) ? null : (int) $fkiBuyercontractID);

        return $this;
    }

    /**
     * Gets fkiEzsignfolderID
     *
     * @return int|null
     */
    public function getFkiEzsignfolderID()
    {
        return $this->container['fkiEzsignfolderID'];
    }

    /**
     * Sets fkiEzsignfolderID
     *
     * @param int|null $fkiEzsignfolderID The unique ID of the Ezsignfolder
     *
     * @return self
     */
    public function setFkiEzsignfolderID($fkiEzsignfolderID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($fkiEzsignfolderID)) {
            //throw new \InvalidArgumentException('non-nullable fkiEzsignfolderID cannot be null');
        //}

//        if (($fkiEzsignfolderID < 0)) {
        if (!is_null($fkiEzsignfolderID) && ($fkiEzsignfolderID < 0)) {
            throw new \InvalidArgumentException('invalid value for $fkiEzsignfolderID when calling CommunicationreferenceRequest., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['fkiEzsignfolderID'] = $fkiEzsignfolderID;
        $this->container['fkiEzsignfolderID'] = (is_null($fkiEzsignfolderID) ? null : (int) $fkiEzsignfolderID);

        return $this;
    }

    /**
     * Gets fkiInscriptionID
     *
     * @return int|null
     */
    public function getFkiInscriptionID()
    {
        return $this->container['fkiInscriptionID'];
    }

    /**
     * Sets fkiInscriptionID
     *
     * @param int|null $fkiInscriptionID The unique ID of the Inscription.
     *
     * @return self
     */
    public function setFkiInscriptionID($fkiInscriptionID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($fkiInscriptionID)) {
            //throw new \InvalidArgumentException('non-nullable fkiInscriptionID cannot be null');
        //}

//        if (($fkiInscriptionID < 0)) {
        if (!is_null($fkiInscriptionID) && ($fkiInscriptionID < 0)) {
            throw new \InvalidArgumentException('invalid value for $fkiInscriptionID when calling CommunicationreferenceRequest., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['fkiInscriptionID'] = $fkiInscriptionID;
        $this->container['fkiInscriptionID'] = (is_null($fkiInscriptionID) ? null : (int) $fkiInscriptionID);

        return $this;
    }

    /**
     * Gets fkiInscriptiontempID
     *
     * @return int|null
     */
    public function getFkiInscriptiontempID()
    {
        return $this->container['fkiInscriptiontempID'];
    }

    /**
     * Sets fkiInscriptiontempID
     *
     * @param int|null $fkiInscriptiontempID The unique ID of the Inscriptiontemp
     *
     * @return self
     */
    public function setFkiInscriptiontempID($fkiInscriptiontempID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($fkiInscriptiontempID)) {
            //throw new \InvalidArgumentException('non-nullable fkiInscriptiontempID cannot be null');
        //}

//        if (($fkiInscriptiontempID > 16777215)) {
        if (!is_null($fkiInscriptiontempID) && ($fkiInscriptiontempID > 16777215)) {
            throw new \InvalidArgumentException('invalid value for $fkiInscriptiontempID when calling CommunicationreferenceRequest., must be smaller than or equal to 16777215.');
        }
//        if (($fkiInscriptiontempID < 1)) {
        if (!is_null($fkiInscriptiontempID) && ($fkiInscriptiontempID < 1)) {
            throw new \InvalidArgumentException('invalid value for $fkiInscriptiontempID when calling CommunicationreferenceRequest., must be bigger than or equal to 1.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['fkiInscriptiontempID'] = $fkiInscriptiontempID;
        $this->container['fkiInscriptiontempID'] = (is_null($fkiInscriptiontempID) ? null : (int) $fkiInscriptiontempID);

        return $this;
    }

    /**
     * Gets fkiInvoiceID
     *
     * @return int|null
     */
    public function getFkiInvoiceID()
    {
        return $this->container['fkiInvoiceID'];
    }

    /**
     * Sets fkiInvoiceID
     *
     * @param int|null $fkiInvoiceID The unique ID of the Invoice.
     *
     * @return self
     */
    public function setFkiInvoiceID($fkiInvoiceID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($fkiInvoiceID)) {
            //throw new \InvalidArgumentException('non-nullable fkiInvoiceID cannot be null');
        //}

//        if (($fkiInvoiceID < 0)) {
        if (!is_null($fkiInvoiceID) && ($fkiInvoiceID < 0)) {
            throw new \InvalidArgumentException('invalid value for $fkiInvoiceID when calling CommunicationreferenceRequest., must be bigger than or equal to 0.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['fkiInvoiceID'] = $fkiInvoiceID;
        $this->container['fkiInvoiceID'] = (is_null($fkiInvoiceID) ? null : (int) $fkiInvoiceID);

        return $this;
    }

    /**
     * Gets fkiOtherincomeID
     *
     * @return int|null
     */
    public function getFkiOtherincomeID()
    {
        return $this->container['fkiOtherincomeID'];
    }

    /**
     * Sets fkiOtherincomeID
     *
     * @param int|null $fkiOtherincomeID The unique ID of the Otherincome
     *
     * @return self
     */
    public function setFkiOtherincomeID($fkiOtherincomeID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($fkiOtherincomeID)) {
            //throw new \InvalidArgumentException('non-nullable fkiOtherincomeID cannot be null');
        //}

//        if (($fkiOtherincomeID > 65535)) {
        if (!is_null($fkiOtherincomeID) && ($fkiOtherincomeID > 65535)) {
            throw new \InvalidArgumentException('invalid value for $fkiOtherincomeID when calling CommunicationreferenceRequest., must be smaller than or equal to 65535.');
        }
//        if (($fkiOtherincomeID < 1)) {
        if (!is_null($fkiOtherincomeID) && ($fkiOtherincomeID < 1)) {
            throw new \InvalidArgumentException('invalid value for $fkiOtherincomeID when calling CommunicationreferenceRequest., must be bigger than or equal to 1.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['fkiOtherincomeID'] = $fkiOtherincomeID;
        $this->container['fkiOtherincomeID'] = (is_null($fkiOtherincomeID) ? null : (int) $fkiOtherincomeID);

        return $this;
    }

    /**
     * Gets fkiElectronicfundstransferID
     *
     * @return int|null
     */
    public function getFkiElectronicfundstransferID()
    {
        return $this->container['fkiElectronicfundstransferID'];
    }

    /**
     * Sets fkiElectronicfundstransferID
     *
     * @param int|null $fkiElectronicfundstransferID The unique ID of the Electronicfundstransfer
     *
     * @return self
     */
    public function setFkiElectronicfundstransferID($fkiElectronicfundstransferID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($fkiElectronicfundstransferID)) {
            //throw new \InvalidArgumentException('non-nullable fkiElectronicfundstransferID cannot be null');
        //}

//        if (($fkiElectronicfundstransferID > 65535)) {
        if (!is_null($fkiElectronicfundstransferID) && ($fkiElectronicfundstransferID > 65535)) {
            throw new \InvalidArgumentException('invalid value for $fkiElectronicfundstransferID when calling CommunicationreferenceRequest., must be smaller than or equal to 65535.');
        }
//        if (($fkiElectronicfundstransferID < 1)) {
        if (!is_null($fkiElectronicfundstransferID) && ($fkiElectronicfundstransferID < 1)) {
            throw new \InvalidArgumentException('invalid value for $fkiElectronicfundstransferID when calling CommunicationreferenceRequest., must be bigger than or equal to 1.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['fkiElectronicfundstransferID'] = $fkiElectronicfundstransferID;
        $this->container['fkiElectronicfundstransferID'] = (is_null($fkiElectronicfundstransferID) ? null : (int) $fkiElectronicfundstransferID);

        return $this;
    }

    /**
     * Gets fkiRejectedoffertopurchaseID
     *
     * @return int|null
     */
    public function getFkiRejectedoffertopurchaseID()
    {
        return $this->container['fkiRejectedoffertopurchaseID'];
    }

    /**
     * Sets fkiRejectedoffertopurchaseID
     *
     * @param int|null $fkiRejectedoffertopurchaseID The unique ID of the Rejectedoffertopurchase
     *
     * @return self
     */
    public function setFkiRejectedoffertopurchaseID($fkiRejectedoffertopurchaseID)
    {
	//Openapi doesn't allow to set a variable to null when it's defined as Non-nullable even if it is the normal way of unsetting a variable
        //if (is_null($fkiRejectedoffertopurchaseID)) {
            //throw new \InvalidArgumentException('non-nullable fkiRejectedoffertopurchaseID cannot be null');
        //}

//        if (($fkiRejectedoffertopurchaseID > 65535)) {
        if (!is_null($fkiRejectedoffertopurchaseID) && ($fkiRejectedoffertopurchaseID > 65535)) {
            throw new \InvalidArgumentException('invalid value for $fkiRejectedoffertopurchaseID when calling CommunicationreferenceRequest., must be smaller than or equal to 65535.');
        }
//        if (($fkiRejectedoffertopurchaseID < 1)) {
        if (!is_null($fkiRejectedoffertopurchaseID) && ($fkiRejectedoffertopurchaseID < 1)) {
            throw new \InvalidArgumentException('invalid value for $fkiRejectedoffertopurchaseID when calling CommunicationreferenceRequest., must be bigger than or equal to 1.');
        }

        
	//Openapi doesn't cast variable so if you set a value to "1" instead of 1 in a int, it's not casted automatically
	//$this->container['fkiRejectedoffertopurchaseID'] = $fkiRejectedoffertopurchaseID;
        $this->container['fkiRejectedoffertopurchaseID'] = (is_null($fkiRejectedoffertopurchaseID) ? null : (int) $fkiRejectedoffertopurchaseID);

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


