<?php
/**
 * PublicNowReference
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  HubSpot\Client\Crm\Lists
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Lists
 *
 * CRUD operations to manage lists and list memberships
 *
 * The version of the OpenAPI document: v3
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace HubSpot\Client\Crm\Lists\Model;

use \ArrayAccess;
use \HubSpot\Client\Crm\Lists\ObjectSerializer;

/**
 * PublicNowReference Class Doc Comment
 *
 * @category Class
 * @package  HubSpot\Client\Crm\Lists
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PublicNowReference implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PublicNowReference';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'reference_type' => 'string',
        'hour' => 'int',
        'minute' => 'int',
        'second' => 'int',
        'millisecond' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'reference_type' => null,
        'hour' => 'int32',
        'minute' => 'int32',
        'second' => 'int32',
        'millisecond' => 'int32'
    ];

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
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'reference_type' => 'referenceType',
        'hour' => 'hour',
        'minute' => 'minute',
        'second' => 'second',
        'millisecond' => 'millisecond'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'reference_type' => 'setReferenceType',
        'hour' => 'setHour',
        'minute' => 'setMinute',
        'second' => 'setSecond',
        'millisecond' => 'setMillisecond'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'reference_type' => 'getReferenceType',
        'hour' => 'getHour',
        'minute' => 'getMinute',
        'second' => 'getSecond',
        'millisecond' => 'getMillisecond'
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

    public const REFERENCE_TYPE_NOW = 'NOW';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getReferenceTypeAllowableValues()
    {
        return [
            self::REFERENCE_TYPE_NOW,
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
        $this->container['reference_type'] = $data['reference_type'] ?? 'NOW';
        $this->container['hour'] = $data['hour'] ?? null;
        $this->container['minute'] = $data['minute'] ?? null;
        $this->container['second'] = $data['second'] ?? null;
        $this->container['millisecond'] = $data['millisecond'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['reference_type'] === null) {
            $invalidProperties[] = "'reference_type' can't be null";
        }
        $allowedValues = $this->getReferenceTypeAllowableValues();
        if (!is_null($this->container['reference_type']) && !in_array($this->container['reference_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'reference_type', must be one of '%s'",
                $this->container['reference_type'],
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
     * Gets reference_type
     *
     * @return string
     */
    public function getReferenceType()
    {
        return $this->container['reference_type'];
    }

    /**
     * Sets reference_type
     *
     * @param string $reference_type reference_type
     *
     * @return self
     */
    public function setReferenceType($reference_type)
    {
        $allowedValues = $this->getReferenceTypeAllowableValues();
        if (!in_array($reference_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'reference_type', must be one of '%s'",
                    $reference_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['reference_type'] = $reference_type;

        return $this;
    }

    /**
     * Gets hour
     *
     * @return int|null
     */
    public function getHour()
    {
        return $this->container['hour'];
    }

    /**
     * Sets hour
     *
     * @param int|null $hour hour
     *
     * @return self
     */
    public function setHour($hour)
    {
        $this->container['hour'] = $hour;

        return $this;
    }

    /**
     * Gets minute
     *
     * @return int|null
     */
    public function getMinute()
    {
        return $this->container['minute'];
    }

    /**
     * Sets minute
     *
     * @param int|null $minute minute
     *
     * @return self
     */
    public function setMinute($minute)
    {
        $this->container['minute'] = $minute;

        return $this;
    }

    /**
     * Gets second
     *
     * @return int|null
     */
    public function getSecond()
    {
        return $this->container['second'];
    }

    /**
     * Sets second
     *
     * @param int|null $second second
     *
     * @return self
     */
    public function setSecond($second)
    {
        $this->container['second'] = $second;

        return $this;
    }

    /**
     * Gets millisecond
     *
     * @return int|null
     */
    public function getMillisecond()
    {
        return $this->container['millisecond'];
    }

    /**
     * Sets millisecond
     *
     * @param int|null $millisecond millisecond
     *
     * @return self
     */
    public function setMillisecond($millisecond)
    {
        $this->container['millisecond'] = $millisecond;

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


