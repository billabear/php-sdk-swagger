<?php
/**
 * Subscription
 *
 * PHP version 5
 *
 * @category Class
 * @package  BillaBear
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * BillaBear
 *
 * The REST API provided by BillaBear
 *
 * OpenAPI spec version: 1.0.0
 * Contact: support@billabear.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.56
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace BillaBear\Model;

use \ArrayAccess;
use \BillaBear\ObjectSerializer;

/**
 * Subscription Class Doc Comment
 *
 * @category Class
 * @package  BillaBear
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Subscription implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Subscription';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'seat_number' => 'int',
        'schedule' => 'string',
        'status' => 'string',
        'created_at' => 'string',
        'updated_at' => 'string',
        'ended_at' => 'string',
        'valid_until' => 'string',
        'main_external_reference' => 'string',
        'child_external_reference' => 'string',
        'metadata' => 'object',
        'price' => '\BillaBear\Model\Price',
        'plan' => '\BillaBear\Model\SubscriptionPlan'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'uuid',
        'seat_number' => null,
        'schedule' => null,
        'status' => null,
        'created_at' => null,
        'updated_at' => null,
        'ended_at' => null,
        'valid_until' => null,
        'main_external_reference' => null,
        'child_external_reference' => null,
        'metadata' => null,
        'price' => null,
        'plan' => null
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
        'id' => 'id',
        'seat_number' => 'seat_number',
        'schedule' => 'schedule',
        'status' => 'status',
        'created_at' => 'created_at',
        'updated_at' => 'updated_at',
        'ended_at' => 'ended_at',
        'valid_until' => 'valid_until',
        'main_external_reference' => 'main_external_reference',
        'child_external_reference' => 'child_external_reference',
        'metadata' => 'metadata',
        'price' => 'price',
        'plan' => 'plan'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'seat_number' => 'setSeatNumber',
        'schedule' => 'setSchedule',
        'status' => 'setStatus',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'ended_at' => 'setEndedAt',
        'valid_until' => 'setValidUntil',
        'main_external_reference' => 'setMainExternalReference',
        'child_external_reference' => 'setChildExternalReference',
        'metadata' => 'setMetadata',
        'price' => 'setPrice',
        'plan' => 'setPlan'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'seat_number' => 'getSeatNumber',
        'schedule' => 'getSchedule',
        'status' => 'getStatus',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'ended_at' => 'getEndedAt',
        'valid_until' => 'getValidUntil',
        'main_external_reference' => 'getMainExternalReference',
        'child_external_reference' => 'getChildExternalReference',
        'metadata' => 'getMetadata',
        'price' => 'getPrice',
        'plan' => 'getPlan'
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
    public function __construct(?array $data = null)
    {
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['seat_number'] = isset($data['seat_number']) ? $data['seat_number'] : null;
        $this->container['schedule'] = isset($data['schedule']) ? $data['schedule'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
        $this->container['ended_at'] = isset($data['ended_at']) ? $data['ended_at'] : null;
        $this->container['valid_until'] = isset($data['valid_until']) ? $data['valid_until'] : null;
        $this->container['main_external_reference'] = isset($data['main_external_reference']) ? $data['main_external_reference'] : null;
        $this->container['child_external_reference'] = isset($data['child_external_reference']) ? $data['child_external_reference'] : null;
        $this->container['metadata'] = isset($data['metadata']) ? $data['metadata'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['plan'] = isset($data['plan']) ? $data['plan'] : null;
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
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets seat_number
     *
     * @return int
     */
    public function getSeatNumber()
    {
        return $this->container['seat_number'];
    }

    /**
     * Sets seat_number
     *
     * @param int $seat_number seat_number
     *
     * @return $this
     */
    public function setSeatNumber($seat_number)
    {
        $this->container['seat_number'] = $seat_number;

        return $this;
    }

    /**
     * Gets schedule
     *
     * @return string
     */
    public function getSchedule()
    {
        return $this->container['schedule'];
    }

    /**
     * Sets schedule
     *
     * @param string $schedule schedule
     *
     * @return $this
     */
    public function setSchedule($schedule)
    {
        $this->container['schedule'] = $schedule;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param string $created_at created_at
     *
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return string
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param string $updated_at updated_at
     *
     * @return $this
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets ended_at
     *
     * @return string
     */
    public function getEndedAt()
    {
        return $this->container['ended_at'];
    }

    /**
     * Sets ended_at
     *
     * @param string $ended_at ended_at
     *
     * @return $this
     */
    public function setEndedAt($ended_at)
    {
        $this->container['ended_at'] = $ended_at;

        return $this;
    }

    /**
     * Gets valid_until
     *
     * @return string
     */
    public function getValidUntil()
    {
        return $this->container['valid_until'];
    }

    /**
     * Sets valid_until
     *
     * @param string $valid_until valid_until
     *
     * @return $this
     */
    public function setValidUntil($valid_until)
    {
        $this->container['valid_until'] = $valid_until;

        return $this;
    }

    /**
     * Gets main_external_reference
     *
     * @return string
     */
    public function getMainExternalReference()
    {
        return $this->container['main_external_reference'];
    }

    /**
     * Sets main_external_reference
     *
     * @param string $main_external_reference main_external_reference
     *
     * @return $this
     */
    public function setMainExternalReference($main_external_reference)
    {
        $this->container['main_external_reference'] = $main_external_reference;

        return $this;
    }

    /**
     * Gets child_external_reference
     *
     * @return string
     */
    public function getChildExternalReference()
    {
        return $this->container['child_external_reference'];
    }

    /**
     * Sets child_external_reference
     *
     * @param string $child_external_reference child_external_reference
     *
     * @return $this
     */
    public function setChildExternalReference($child_external_reference)
    {
        $this->container['child_external_reference'] = $child_external_reference;

        return $this;
    }

    /**
     * Gets metadata
     *
     * @return object
     */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
     * Sets metadata
     *
     * @param object $metadata metadata
     *
     * @return $this
     */
    public function setMetadata($metadata)
    {
        $this->container['metadata'] = $metadata;

        return $this;
    }

    /**
     * Gets price
     *
     * @return \BillaBear\Model\Price
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param \BillaBear\Model\Price $price price
     *
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets plan
     *
     * @return \BillaBear\Model\SubscriptionPlan
     */
    public function getPlan()
    {
        return $this->container['plan'];
    }

    /**
     * Sets plan
     *
     * @param \BillaBear\Model\SubscriptionPlan $plan plan
     *
     * @return $this
     */
    public function setPlan($plan)
    {
        $this->container['plan'] = $plan;

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
