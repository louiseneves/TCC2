<?php
/**
 * PresentValueSimulationResponse
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
 * PresentValueSimulationResponse Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PresentValueSimulationResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PresentValueSimulationResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'external_id' => 'string',
        'original_future_amount' => 'float',
        'new_future_amount' => 'float',
        'original_present_amount' => 'float',
        'new_present_amount' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'external_id' => null,
        'original_future_amount' => null,
        'new_future_amount' => null,
        'original_present_amount' => null,
        'new_present_amount' => null
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
        'external_id' => 'external_id',
        'original_future_amount' => 'original_future_amount',
        'new_future_amount' => 'new_future_amount',
        'original_present_amount' => 'original_present_amount',
        'new_present_amount' => 'new_present_amount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'external_id' => 'setExternalId',
        'original_future_amount' => 'setOriginalFutureAmount',
        'new_future_amount' => 'setNewFutureAmount',
        'original_present_amount' => 'setOriginalPresentAmount',
        'new_present_amount' => 'setNewPresentAmount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'external_id' => 'getExternalId',
        'original_future_amount' => 'getOriginalFutureAmount',
        'new_future_amount' => 'getNewFutureAmount',
        'original_present_amount' => 'getOriginalPresentAmount',
        'new_present_amount' => 'getNewPresentAmount'
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
        $this->container['original_future_amount'] = isset($data['original_future_amount']) ? $data['original_future_amount'] : null;
        $this->container['new_future_amount'] = isset($data['new_future_amount']) ? $data['new_future_amount'] : null;
        $this->container['original_present_amount'] = isset($data['original_present_amount']) ? $data['original_present_amount'] : null;
        $this->container['new_present_amount'] = isset($data['new_present_amount']) ? $data['new_present_amount'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * @param string $external_id External ID of the asset to repurchase
     *
     * @return $this
     */
    public function setExternalId($external_id)
    {
        $this->container['external_id'] = $external_id;

        return $this;
    }

    /**
     * Gets original_future_amount
     *
     * @return float
     */
    public function getOriginalFutureAmount()
    {
        return $this->container['original_future_amount'];
    }

    /**
     * Sets original_future_amount
     *
     * @param float $original_future_amount The original future amount  ----  O valor futuro original
     *
     * @return $this
     */
    public function setOriginalFutureAmount($original_future_amount)
    {
        $this->container['original_future_amount'] = $original_future_amount;

        return $this;
    }

    /**
     * Gets new_future_amount
     *
     * @return float
     */
    public function getNewFutureAmount()
    {
        return $this->container['new_future_amount'];
    }

    /**
     * Sets new_future_amount
     *
     * @param float $new_future_amount The new future amount  ----  O novo valor futuro
     *
     * @return $this
     */
    public function setNewFutureAmount($new_future_amount)
    {
        $this->container['new_future_amount'] = $new_future_amount;

        return $this;
    }

    /**
     * Gets original_present_amount
     *
     * @return float
     */
    public function getOriginalPresentAmount()
    {
        return $this->container['original_present_amount'];
    }

    /**
     * Sets original_present_amount
     *
     * @param float $original_present_amount The original present amount  ----  O valor presente original
     *
     * @return $this
     */
    public function setOriginalPresentAmount($original_present_amount)
    {
        $this->container['original_present_amount'] = $original_present_amount;

        return $this;
    }

    /**
     * Gets new_present_amount
     *
     * @return float
     */
    public function getNewPresentAmount()
    {
        return $this->container['new_present_amount'];
    }

    /**
     * Sets new_present_amount
     *
     * @param float $new_present_amount The new present amount  ----  O novo valor presente
     *
     * @return $this
     */
    public function setNewPresentAmount($new_present_amount)
    {
        $this->container['new_present_amount'] = $new_present_amount;

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
