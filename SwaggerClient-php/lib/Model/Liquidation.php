<?php
/**
 * Liquidation
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Kanastra Tech Hub
 *
 * The Kanastra Tech Hub solution is an API/application that ease the integration between parties of credit operations in general. From the credit originator, to the investor, until the debt collector and auditing processes.
 *
 * OpenAPI spec version: 1.1.0
 * Contact: tech@kanastra.com.br
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.50
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
 * Liquidation Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Liquidation implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Liquidation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'external_id' => 'string',
        'payment' => '\Swagger\Client\Model\PaymentData',
        'payer' => '\Swagger\Client\Model\PayerData',
        'custom_fields' => 'object',
        'files' => '\Swagger\Client\Model\LiquidationFile',
        'settlement_type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'external_id' => null,
        'payment' => null,
        'payer' => null,
        'custom_fields' => null,
        'files' => null,
        'settlement_type' => null
    ];

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
        'external_id' => 'externalId',
        'payment' => 'payment',
        'payer' => 'payer',
        'custom_fields' => 'customFields',
        'files' => 'files',
        'settlement_type' => 'settlementType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'external_id' => 'setExternalId',
        'payment' => 'setPayment',
        'payer' => 'setPayer',
        'custom_fields' => 'setCustomFields',
        'files' => 'setFiles',
        'settlement_type' => 'setSettlementType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'external_id' => 'getExternalId',
        'payment' => 'getPayment',
        'payer' => 'getPayer',
        'custom_fields' => 'getCustomFields',
        'files' => 'getFiles',
        'settlement_type' => 'getSettlementType'
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
        return self::$swaggerModelName;
    }

    const SETTLEMENT_TYPE_TOTAL = 'TOTAL';
    const SETTLEMENT_TYPE_PARTIAL = 'PARTIAL';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSettlementTypeAllowableValues()
    {
        return [
            self::SETTLEMENT_TYPE_TOTAL
            self::SETTLEMENT_TYPE_PARTIAL
        ];
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
        $this->container['external_id'] = isset($data['external_id']) ? $data['external_id'] : null;
        $this->container['payment'] = isset($data['payment']) ? $data['payment'] : null;
        $this->container['payer'] = isset($data['payer']) ? $data['payer'] : null;
        $this->container['custom_fields'] = isset($data['custom_fields']) ? $data['custom_fields'] : null;
        $this->container['files'] = isset($data['files']) ? $data['files'] : null;
        $this->container['settlement_type'] = isset($data['settlement_type']) ? $data['settlement_type'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getSettlementTypeAllowableValues();
        if (!is_null($this->container['settlement_type']) && !in_array($this->container['settlement_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'settlement_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
     * Gets external_id
     *
     * @return string
     */
    public function getExternalId()
    {
        return $this->container['external_id'];
    }

    /**
     * Sets external_id
     *
     * @param string $external_id Unique external identifier (for the originator control).  ----  Identificador único externo (para controle do originador).
     *
     * @return $this
     */
    public function setExternalId($external_id)
    {
        $this->container['external_id'] = $external_id;

        return $this;
    }

    /**
     * Gets payment
     *
     * @return \Swagger\Client\Model\PaymentData
     */
    public function getPayment()
    {
        return $this->container['payment'];
    }

    /**
     * Sets payment
     *
     * @param \Swagger\Client\Model\PaymentData $payment payment
     *
     * @return $this
     */
    public function setPayment($payment)
    {
        $this->container['payment'] = $payment;

        return $this;
    }

    /**
     * Gets payer
     *
     * @return \Swagger\Client\Model\PayerData
     */
    public function getPayer()
    {
        return $this->container['payer'];
    }

    /**
     * Sets payer
     *
     * @param \Swagger\Client\Model\PayerData $payer payer
     *
     * @return $this
     */
    public function setPayer($payer)
    {
        $this->container['payer'] = $payer;

        return $this;
    }

    /**
     * Gets custom_fields
     *
     * @return object
     */
    public function getCustomFields()
    {
        return $this->container['custom_fields'];
    }

    /**
     * Sets custom_fields
     *
     * @param object $custom_fields custom_fields
     *
     * @return $this
     */
    public function setCustomFields($custom_fields)
    {
        $this->container['custom_fields'] = $custom_fields;

        return $this;
    }

    /**
     * Gets files
     *
     * @return \Swagger\Client\Model\LiquidationFile
     */
    public function getFiles()
    {
        return $this->container['files'];
    }

    /**
     * Sets files
     *
     * @param \Swagger\Client\Model\LiquidationFile $files files
     *
     * @return $this
     */
    public function setFiles($files)
    {
        $this->container['files'] = $files;

        return $this;
    }

    /**
     * Gets settlement_type
     *
     * @return string
     */
    public function getSettlementType()
    {
        return $this->container['settlement_type'];
    }

    /**
     * Sets settlement_type
     *
     * @param string $settlement_type settlement_type
     *
     * @return $this
     */
    public function setSettlementType($settlement_type)
    {
        $allowedValues = $this->getSettlementTypeAllowableValues();
        if (!is_null($settlement_type) && !in_array($settlement_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'settlement_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['settlement_type'] = $settlement_type;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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