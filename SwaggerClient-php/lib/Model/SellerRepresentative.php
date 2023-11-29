<?php
/**
 * SellerRepresentative
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
 * SellerRepresentative Class Doc Comment
 *
 * @category Class
 * @description The seller&#x27;s representatives.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SellerRepresentative implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SellerRepresentative';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'government_id' => 'string',
        'name' => 'string',
        'profession' => 'string',
        'email' => 'string',
        'phone' => 'string',
        'civil_state' => 'string',
        'isolated_signature' => 'bool',
        'endorsement_signature' => 'bool',
        'assignment_term_signature' => 'bool',
        'address' => '\Swagger\Client\Model\SellerAddress'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'government_id' => null,
        'name' => null,
        'profession' => null,
        'email' => null,
        'phone' => null,
        'civil_state' => null,
        'isolated_signature' => null,
        'endorsement_signature' => null,
        'assignment_term_signature' => null,
        'address' => null
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
        'government_id' => 'governmentId',
        'name' => 'name',
        'profession' => 'profession',
        'email' => 'email',
        'phone' => 'phone',
        'civil_state' => 'civilState',
        'isolated_signature' => 'isolatedSignature',
        'endorsement_signature' => 'endorsementSignature',
        'assignment_term_signature' => 'assignmentTermSignature',
        'address' => 'address'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'government_id' => 'setGovernmentId',
        'name' => 'setName',
        'profession' => 'setProfession',
        'email' => 'setEmail',
        'phone' => 'setPhone',
        'civil_state' => 'setCivilState',
        'isolated_signature' => 'setIsolatedSignature',
        'endorsement_signature' => 'setEndorsementSignature',
        'assignment_term_signature' => 'setAssignmentTermSignature',
        'address' => 'setAddress'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'government_id' => 'getGovernmentId',
        'name' => 'getName',
        'profession' => 'getProfession',
        'email' => 'getEmail',
        'phone' => 'getPhone',
        'civil_state' => 'getCivilState',
        'isolated_signature' => 'getIsolatedSignature',
        'endorsement_signature' => 'getEndorsementSignature',
        'assignment_term_signature' => 'getAssignmentTermSignature',
        'address' => 'getAddress'
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
        $this->container['government_id'] = isset($data['government_id']) ? $data['government_id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['profession'] = isset($data['profession']) ? $data['profession'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
        $this->container['civil_state'] = isset($data['civil_state']) ? $data['civil_state'] : null;
        $this->container['isolated_signature'] = isset($data['isolated_signature']) ? $data['isolated_signature'] : null;
        $this->container['endorsement_signature'] = isset($data['endorsement_signature']) ? $data['endorsement_signature'] : null;
        $this->container['assignment_term_signature'] = isset($data['assignment_term_signature']) ? $data['assignment_term_signature'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
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
     * Gets government_id
     *
     * @return string
     */
    public function getGovernmentId()
    {
        return $this->container['government_id'];
    }

    /**
     * Sets government_id
     *
     * @param string $government_id CPF/CNPJ of the seller representative
     *
     * @return $this
     */
    public function setGovernmentId($government_id)
    {
        $this->container['government_id'] = $government_id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Name of the representative
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets profession
     *
     * @return string
     */
    public function getProfession()
    {
        return $this->container['profession'];
    }

    /**
     * Sets profession
     *
     * @param string $profession The profession of the representative
     *
     * @return $this
     */
    public function setProfession($profession)
    {
        $this->container['profession'] = $profession;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email Email of the representative
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param string $phone Phone of the representative with DDD
     *
     * @return $this
     */
    public function setPhone($phone)
    {
        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets civil_state
     *
     * @return string
     */
    public function getCivilState()
    {
        return $this->container['civil_state'];
    }

    /**
     * Sets civil_state
     *
     * @param string $civil_state Civil State of the representative
     *
     * @return $this
     */
    public function setCivilState($civil_state)
    {
        $this->container['civil_state'] = $civil_state;

        return $this;
    }

    /**
     * Gets isolated_signature
     *
     * @return bool
     */
    public function getIsolatedSignature()
    {
        return $this->container['isolated_signature'];
    }

    /**
     * Sets isolated_signature
     *
     * @param bool $isolated_signature The representative has the right to approve the document with only their signature, even if there are more representatives
     *
     * @return $this
     */
    public function setIsolatedSignature($isolated_signature)
    {
        $this->container['isolated_signature'] = $isolated_signature;

        return $this;
    }

    /**
     * Gets endorsement_signature
     *
     * @return bool
     */
    public function getEndorsementSignature()
    {
        return $this->container['endorsement_signature'];
    }

    /**
     * Sets endorsement_signature
     *
     * @param bool $endorsement_signature The representative has the right to sign an endorsement
     *
     * @return $this
     */
    public function setEndorsementSignature($endorsement_signature)
    {
        $this->container['endorsement_signature'] = $endorsement_signature;

        return $this;
    }

    /**
     * Gets assignment_term_signature
     *
     * @return bool
     */
    public function getAssignmentTermSignature()
    {
        return $this->container['assignment_term_signature'];
    }

    /**
     * Sets assignment_term_signature
     *
     * @param bool $assignment_term_signature The representative has the right to sign an assignment term
     *
     * @return $this
     */
    public function setAssignmentTermSignature($assignment_term_signature)
    {
        $this->container['assignment_term_signature'] = $assignment_term_signature;

        return $this;
    }

    /**
     * Gets address
     *
     * @return \Swagger\Client\Model\SellerAddress
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param \Swagger\Client\Model\SellerAddress $address address
     *
     * @return $this
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

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
