<?php
/**
 * Body31
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * PAYCOMET REST API
 *
 * PAYCOMET API REST for customers.
 *
 * OpenAPI spec version: 2.21.0
 * Contact: tecnico@paycomet.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.25
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * Body31 Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Body31 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'body_31';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'terminal' => 'int',
'sepa_provider_id' => 'int',
'merchant_code' => 'string',
'merchant_customer_id' => 'string',
'merchant_customer_iban' => 'string',
'document_type' => 'int'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'terminal' => null,
'sepa_provider_id' => null,
'merchant_code' => null,
'merchant_customer_id' => null,
'merchant_customer_iban' => null,
'document_type' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'terminal' => 'terminal',
'sepa_provider_id' => 'sepaProviderId',
'merchant_code' => 'merchantCode',
'merchant_customer_id' => 'merchantCustomerId',
'merchant_customer_iban' => 'merchantCustomerIban',
'document_type' => 'documentType'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'terminal' => 'setTerminal',
'sepa_provider_id' => 'setSepaProviderId',
'merchant_code' => 'setMerchantCode',
'merchant_customer_id' => 'setMerchantCustomerId',
'merchant_customer_iban' => 'setMerchantCustomerIban',
'document_type' => 'setDocumentType'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'terminal' => 'getTerminal',
'sepa_provider_id' => 'getSepaProviderId',
'merchant_code' => 'getMerchantCode',
'merchant_customer_id' => 'getMerchantCustomerId',
'merchant_customer_iban' => 'getMerchantCustomerIban',
'document_type' => 'getDocumentType'    ];

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
        return self::$swaggerModelName;
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
        $this->container['terminal'] = isset($data['terminal']) ? $data['terminal'] : null;
        $this->container['sepa_provider_id'] = isset($data['sepa_provider_id']) ? $data['sepa_provider_id'] : null;
        $this->container['merchant_code'] = isset($data['merchant_code']) ? $data['merchant_code'] : null;
        $this->container['merchant_customer_id'] = isset($data['merchant_customer_id']) ? $data['merchant_customer_id'] : null;
        $this->container['merchant_customer_iban'] = isset($data['merchant_customer_iban']) ? $data['merchant_customer_iban'] : null;
        $this->container['document_type'] = isset($data['document_type']) ? $data['document_type'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['terminal'] === null) {
            $invalidProperties[] = "'terminal' can't be null";
        }
        if ($this->container['sepa_provider_id'] === null) {
            $invalidProperties[] = "'sepa_provider_id' can't be null";
        }
        if ($this->container['merchant_code'] === null) {
            $invalidProperties[] = "'merchant_code' can't be null";
        }
        if ($this->container['merchant_customer_id'] === null) {
            $invalidProperties[] = "'merchant_customer_id' can't be null";
        }
        if ($this->container['merchant_customer_iban'] === null) {
            $invalidProperties[] = "'merchant_customer_iban' can't be null";
        }
        if ($this->container['document_type'] === null) {
            $invalidProperties[] = "'document_type' can't be null";
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
     * Gets terminal
     *
     * @return int
     */
    public function getTerminal()
    {
        return $this->container['terminal'];
    }

    /**
     * Sets terminal
     *
     * @param int $terminal Product or terminal Id.
     *
     * @return $this
     */
    public function setTerminal($terminal)
    {
        $this->container['terminal'] = $terminal;

        return $this;
    }

    /**
     * Gets sepa_provider_id
     *
     * @return int
     */
    public function getSepaProviderId()
    {
        return $this->container['sepa_provider_id'];
    }

    /**
     * Sets sepa_provider_id
     *
     * @param int $sepa_provider_id Unique identifier assigned by PAYCOMET for the supplier sending SEPA operations. Available on the client control panel.
     *
     * @return $this
     */
    public function setSepaProviderId($sepa_provider_id)
    {
        $this->container['sepa_provider_id'] = $sepa_provider_id;

        return $this;
    }

    /**
     * Gets merchant_code
     *
     * @return string
     */
    public function getMerchantCode()
    {
        return $this->container['merchant_code'];
    }

    /**
     * Sets merchant_code
     *
     * @param string $merchant_code Unique identifier as PAYCOMET account. Available on the client control panel.
     *
     * @return $this
     */
    public function setMerchantCode($merchant_code)
    {
        $this->container['merchant_code'] = $merchant_code;

        return $this;
    }

    /**
     * Gets merchant_customer_id
     *
     * @return string
     */
    public function getMerchantCustomerId()
    {
        return $this->container['merchant_customer_id'];
    }

    /**
     * Sets merchant_customer_id
     *
     * @param string $merchant_customer_id Unique identifier of the client of the supplier.
     *
     * @return $this
     */
    public function setMerchantCustomerId($merchant_customer_id)
    {
        $this->container['merchant_customer_id'] = $merchant_customer_id;

        return $this;
    }

    /**
     * Gets merchant_customer_iban
     *
     * @return string
     */
    public function getMerchantCustomerIban()
    {
        return $this->container['merchant_customer_iban'];
    }

    /**
     * Sets merchant_customer_iban
     *
     * @param string $merchant_customer_iban Account number of the client in IBAN format.
     *
     * @return $this
     */
    public function setMerchantCustomerIban($merchant_customer_iban)
    {
        $this->container['merchant_customer_iban'] = $merchant_customer_iban;

        return $this;
    }

    /**
     * Gets document_type
     *
     * @return int
     */
    public function getDocumentType()
    {
        return $this->container['document_type'];
    }

    /**
     * Sets document_type
     *
     * @param int $document_type Identifier of the type of document on PAYCOMET.
     *
     * @return $this
     */
    public function setDocumentType($document_type)
    {
        $this->container['document_type'] = $document_type;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
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
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
