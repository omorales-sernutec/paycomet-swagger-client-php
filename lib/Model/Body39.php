<?php
/**
 * Body39
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
 * Body39 Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Body39 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'body_39';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'terminal' => 'int',
'order' => 'string',
'amount' => 'string',
'currency' => 'string',
'method_id' => 'string',
'original_ip' => 'string',
'secure' => 'int',
'language' => 'string',
'sms_email' => 'string',
'template_id' => 'int',
'email_address' => 'string',
'email_name' => 'string',
'sms_prefix' => 'string',
'sms_number' => 'string',
'scoring' => 'string',
'start_date' => 'string',
'end_date' => 'string',
'periodicity' => 'string',
'merchant_data' => '\Swagger\Client\Model\V1launchpadsubscriptionMerchantData'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'terminal' => null,
'order' => null,
'amount' => null,
'currency' => null,
'method_id' => null,
'original_ip' => null,
'secure' => null,
'language' => null,
'sms_email' => null,
'template_id' => null,
'email_address' => null,
'email_name' => null,
'sms_prefix' => null,
'sms_number' => null,
'scoring' => null,
'start_date' => null,
'end_date' => null,
'periodicity' => null,
'merchant_data' => null    ];

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
'order' => 'order',
'amount' => 'amount',
'currency' => 'currency',
'method_id' => 'methodId',
'original_ip' => 'originalIp',
'secure' => 'secure',
'language' => 'language',
'sms_email' => 'smsEmail',
'template_id' => 'templateId',
'email_address' => 'emailAddress',
'email_name' => 'emailName',
'sms_prefix' => 'smsPrefix',
'sms_number' => 'smsNumber',
'scoring' => 'scoring',
'start_date' => 'startDate',
'end_date' => 'endDate',
'periodicity' => 'periodicity',
'merchant_data' => 'merchantData'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'terminal' => 'setTerminal',
'order' => 'setOrder',
'amount' => 'setAmount',
'currency' => 'setCurrency',
'method_id' => 'setMethodId',
'original_ip' => 'setOriginalIp',
'secure' => 'setSecure',
'language' => 'setLanguage',
'sms_email' => 'setSmsEmail',
'template_id' => 'setTemplateId',
'email_address' => 'setEmailAddress',
'email_name' => 'setEmailName',
'sms_prefix' => 'setSmsPrefix',
'sms_number' => 'setSmsNumber',
'scoring' => 'setScoring',
'start_date' => 'setStartDate',
'end_date' => 'setEndDate',
'periodicity' => 'setPeriodicity',
'merchant_data' => 'setMerchantData'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'terminal' => 'getTerminal',
'order' => 'getOrder',
'amount' => 'getAmount',
'currency' => 'getCurrency',
'method_id' => 'getMethodId',
'original_ip' => 'getOriginalIp',
'secure' => 'getSecure',
'language' => 'getLanguage',
'sms_email' => 'getSmsEmail',
'template_id' => 'getTemplateId',
'email_address' => 'getEmailAddress',
'email_name' => 'getEmailName',
'sms_prefix' => 'getSmsPrefix',
'sms_number' => 'getSmsNumber',
'scoring' => 'getScoring',
'start_date' => 'getStartDate',
'end_date' => 'getEndDate',
'periodicity' => 'getPeriodicity',
'merchant_data' => 'getMerchantData'    ];

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
        $this->container['order'] = isset($data['order']) ? $data['order'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['method_id'] = isset($data['method_id']) ? $data['method_id'] : null;
        $this->container['original_ip'] = isset($data['original_ip']) ? $data['original_ip'] : null;
        $this->container['secure'] = isset($data['secure']) ? $data['secure'] : null;
        $this->container['language'] = isset($data['language']) ? $data['language'] : 'es';
        $this->container['sms_email'] = isset($data['sms_email']) ? $data['sms_email'] : null;
        $this->container['template_id'] = isset($data['template_id']) ? $data['template_id'] : null;
        $this->container['email_address'] = isset($data['email_address']) ? $data['email_address'] : null;
        $this->container['email_name'] = isset($data['email_name']) ? $data['email_name'] : null;
        $this->container['sms_prefix'] = isset($data['sms_prefix']) ? $data['sms_prefix'] : null;
        $this->container['sms_number'] = isset($data['sms_number']) ? $data['sms_number'] : null;
        $this->container['scoring'] = isset($data['scoring']) ? $data['scoring'] : null;
        $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
        $this->container['end_date'] = isset($data['end_date']) ? $data['end_date'] : null;
        $this->container['periodicity'] = isset($data['periodicity']) ? $data['periodicity'] : null;
        $this->container['merchant_data'] = isset($data['merchant_data']) ? $data['merchant_data'] : null;
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
        if ($this->container['order'] === null) {
            $invalidProperties[] = "'order' can't be null";
        }
        if ($this->container['amount'] === null) {
            $invalidProperties[] = "'amount' can't be null";
        }
        if ($this->container['currency'] === null) {
            $invalidProperties[] = "'currency' can't be null";
        }
        if ($this->container['method_id'] === null) {
            $invalidProperties[] = "'method_id' can't be null";
        }
        if ($this->container['original_ip'] === null) {
            $invalidProperties[] = "'original_ip' can't be null";
        }
        if ($this->container['secure'] === null) {
            $invalidProperties[] = "'secure' can't be null";
        }
        if ($this->container['language'] === null) {
            $invalidProperties[] = "'language' can't be null";
        }
        if ($this->container['sms_email'] === null) {
            $invalidProperties[] = "'sms_email' can't be null";
        }
        if ($this->container['template_id'] === null) {
            $invalidProperties[] = "'template_id' can't be null";
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
     * Gets order
     *
     * @return string
     */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
     * Sets order
     *
     * @param string $order Unique reference for merchant's purchase
     *
     * @return $this
     */
    public function setOrder($order)
    {
        $this->container['order'] = $order;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return string
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param string $amount Amount of the operation in number format. 1.00 EURO = 100, 4.50 EUROS = 450...
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string $currency Currency of the transaction.
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets method_id
     *
     * @return string
     */
    public function getMethodId()
    {
        return $this->container['method_id'];
    }

    /**
     * Sets method_id
     *
     * @param string $method_id PAYCOMET payment method ID. 1 is for card.
     *
     * @return $this
     */
    public function setMethodId($method_id)
    {
        $this->container['method_id'] = $method_id;

        return $this;
    }

    /**
     * Gets original_ip
     *
     * @return string
     */
    public function getOriginalIp()
    {
        return $this->container['original_ip'];
    }

    /**
     * Sets original_ip
     *
     * @param string $original_ip IP Address of the customer that initiated the payment transaction
     *
     * @return $this
     */
    public function setOriginalIp($original_ip)
    {
        $this->container['original_ip'] = $original_ip;

        return $this;
    }

    /**
     * Gets secure
     *
     * @return int
     */
    public function getSecure()
    {
        return $this->container['secure'];
    }

    /**
     * Sets secure
     *
     * @param int $secure 0 or 1. Indicates if the transaction is secure.
     *
     * @return $this
     */
    public function setSecure($secure)
    {
        $this->container['secure'] = $secure;

        return $this;
    }

    /**
     * Gets language
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
     * Sets language
     *
     * @param string $language ISO2 code of language.
     *
     * @return $this
     */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;

        return $this;
    }

    /**
     * Gets sms_email
     *
     * @return string
     */
    public function getSmsEmail()
    {
        return $this->container['sms_email'];
    }

    /**
     * Sets sms_email
     *
     * @param string $sms_email Sending channel of the payment url. Should be \"sms\" or \"email\".
     *
     * @return $this
     */
    public function setSmsEmail($sms_email)
    {
        $this->container['sms_email'] = $sms_email;

        return $this;
    }

    /**
     * Gets template_id
     *
     * @return int
     */
    public function getTemplateId()
    {
        return $this->container['template_id'];
    }

    /**
     * Sets template_id
     *
     * @param int $template_id Email or SMS template id to be sent. You can get it in the Control panel.
     *
     * @return $this
     */
    public function setTemplateId($template_id)
    {
        $this->container['template_id'] = $template_id;

        return $this;
    }

    /**
     * Gets email_address
     *
     * @return string
     */
    public function getEmailAddress()
    {
        return $this->container['email_address'];
    }

    /**
     * Sets email_address
     *
     * @param string $email_address Conditional. Mandatory in sending method is EMAIL. Email address where link must be sent
     *
     * @return $this
     */
    public function setEmailAddress($email_address)
    {
        $this->container['email_address'] = $email_address;

        return $this;
    }

    /**
     * Gets email_name
     *
     * @return string
     */
    public function getEmailName()
    {
        return $this->container['email_name'];
    }

    /**
     * Sets email_name
     *
     * @param string $email_name Conditional. Mandatory in sending method is EMAIL. Email recipient of the email address where link must be sent
     *
     * @return $this
     */
    public function setEmailName($email_name)
    {
        $this->container['email_name'] = $email_name;

        return $this;
    }

    /**
     * Gets sms_prefix
     *
     * @return string
     */
    public function getSmsPrefix()
    {
        return $this->container['sms_prefix'];
    }

    /**
     * Sets sms_prefix
     *
     * @param string $sms_prefix Conditional. Mandatory in sending method is SMS. International mobile prefix where link must be sent
     *
     * @return $this
     */
    public function setSmsPrefix($sms_prefix)
    {
        $this->container['sms_prefix'] = $sms_prefix;

        return $this;
    }

    /**
     * Gets sms_number
     *
     * @return string
     */
    public function getSmsNumber()
    {
        return $this->container['sms_number'];
    }

    /**
     * Sets sms_number
     *
     * @param string $sms_number Conditional. Mandatory in sending method is SMS. Mobile number where link must be sent
     *
     * @return $this
     */
    public function setSmsNumber($sms_number)
    {
        $this->container['sms_number'] = $sms_number;

        return $this;
    }

    /**
     * Gets scoring
     *
     * @return string
     */
    public function getScoring()
    {
        return $this->container['scoring'];
    }

    /**
     * Sets scoring
     *
     * @param string $scoring Risk scoring value from 0 to 100.
     *
     * @return $this
     */
    public function setScoring($scoring)
    {
        $this->container['scoring'] = $scoring;

        return $this;
    }

    /**
     * Gets start_date
     *
     * @return string
     */
    public function getStartDate()
    {
        return $this->container['start_date'];
    }

    /**
     * Sets start_date
     *
     * @param string $start_date Subscription start date yyyymmdd. IMPORTANT Subscriptions are charged on the first run if this field has value it will be taken into account for future charges.
     *
     * @return $this
     */
    public function setStartDate($start_date)
    {
        $this->container['start_date'] = $start_date;

        return $this;
    }

    /**
     * Gets end_date
     *
     * @return string
     */
    public function getEndDate()
    {
        return $this->container['end_date'];
    }

    /**
     * Sets end_date
     *
     * @param string $end_date Subscription end date yyyymmdd
     *
     * @return $this
     */
    public function setEndDate($end_date)
    {
        $this->container['end_date'] = $end_date;

        return $this;
    }

    /**
     * Gets periodicity
     *
     * @return string
     */
    public function getPeriodicity()
    {
        return $this->container['periodicity'];
    }

    /**
     * Sets periodicity
     *
     * @param string $periodicity Subscription periodicity in days. Maximum 365.
     *
     * @return $this
     */
    public function setPeriodicity($periodicity)
    {
        $this->container['periodicity'] = $periodicity;

        return $this;
    }

    /**
     * Gets merchant_data
     *
     * @return \Swagger\Client\Model\V1launchpadsubscriptionMerchantData
     */
    public function getMerchantData()
    {
        return $this->container['merchant_data'];
    }

    /**
     * Sets merchant_data
     *
     * @param \Swagger\Client\Model\V1launchpadsubscriptionMerchantData $merchant_data merchant_data
     *
     * @return $this
     */
    public function setMerchantData($merchant_data)
    {
        $this->container['merchant_data'] = $merchant_data;

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
