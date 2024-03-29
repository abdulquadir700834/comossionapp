<?php
/**
 * PublicIndexedTimePoint
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
 * PublicIndexedTimePoint Class Doc Comment
 *
 * @category Class
 * @package  HubSpot\Client\Crm\Lists
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PublicIndexedTimePoint implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PublicIndexedTimePoint';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'time_type' => 'string',
        'timezone_source' => 'string',
        'zone_id' => 'string',
        'index_reference' => '\HubSpot\Client\Crm\Lists\Model\PublicIndexedTimePointIndexReference',
        'offset' => '\HubSpot\Client\Crm\Lists\Model\PublicIndexOffset'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'time_type' => null,
        'timezone_source' => null,
        'zone_id' => null,
        'index_reference' => null,
        'offset' => null
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
        'time_type' => 'timeType',
        'timezone_source' => 'timezoneSource',
        'zone_id' => 'zoneId',
        'index_reference' => 'indexReference',
        'offset' => 'offset'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'time_type' => 'setTimeType',
        'timezone_source' => 'setTimezoneSource',
        'zone_id' => 'setZoneId',
        'index_reference' => 'setIndexReference',
        'offset' => 'setOffset'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'time_type' => 'getTimeType',
        'timezone_source' => 'getTimezoneSource',
        'zone_id' => 'getZoneId',
        'index_reference' => 'getIndexReference',
        'offset' => 'getOffset'
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

    public const TIME_TYPE_INDEXED = 'INDEXED';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTimeTypeAllowableValues()
    {
        return [
            self::TIME_TYPE_INDEXED,
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
        $this->container['time_type'] = $data['time_type'] ?? 'INDEXED';
        $this->container['timezone_source'] = $data['timezone_source'] ?? null;
        $this->container['zone_id'] = $data['zone_id'] ?? null;
        $this->container['index_reference'] = $data['index_reference'] ?? null;
        $this->container['offset'] = $data['offset'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['time_type'] === null) {
            $invalidProperties[] = "'time_type' can't be null";
        }
        $allowedValues = $this->getTimeTypeAllowableValues();
        if (!is_null($this->container['time_type']) && !in_array($this->container['time_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'time_type', must be one of '%s'",
                $this->container['time_type'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['zone_id'] === null) {
            $invalidProperties[] = "'zone_id' can't be null";
        }
        if ($this->container['index_reference'] === null) {
            $invalidProperties[] = "'index_reference' can't be null";
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
     * Gets time_type
     *
     * @return string
     */
    public function getTimeType()
    {
        return $this->container['time_type'];
    }

    /**
     * Sets time_type
     *
     * @param string $time_type time_type
     *
     * @return self
     */
    public function setTimeType($time_type)
    {
        $allowedValues = $this->getTimeTypeAllowableValues();
        if (!in_array($time_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'time_type', must be one of '%s'",
                    $time_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['time_type'] = $time_type;

        return $this;
    }

    /**
     * Gets timezone_source
     *
     * @return string|null
     */
    public function getTimezoneSource()
    {
        return $this->container['timezone_source'];
    }

    /**
     * Sets timezone_source
     *
     * @param string|null $timezone_source timezone_source
     *
     * @return self
     */
    public function setTimezoneSource($timezone_source)
    {
        $this->container['timezone_source'] = $timezone_source;

        return $this;
    }

    /**
     * Gets zone_id
     *
     * @return string
     */
    public function getZoneId()
    {
        return $this->container['zone_id'];
    }

    /**
     * Sets zone_id
     *
     * @param string $zone_id zone_id
     *
     * @return self
     */
    public function setZoneId($zone_id)
    {
        $this->container['zone_id'] = $zone_id;

        return $this;
    }

    /**
     * Gets index_reference
     *
     * @return \HubSpot\Client\Crm\Lists\Model\PublicIndexedTimePointIndexReference
     */
    public function getIndexReference()
    {
        return $this->container['index_reference'];
    }

    /**
     * Sets index_reference
     *
     * @param \HubSpot\Client\Crm\Lists\Model\PublicIndexedTimePointIndexReference $index_reference index_reference
     *
     * @return self
     */
    public function setIndexReference($index_reference)
    {
        $this->container['index_reference'] = $index_reference;

        return $this;
    }

    /**
     * Gets offset
     *
     * @return \HubSpot\Client\Crm\Lists\Model\PublicIndexOffset|null
     */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
     * Sets offset
     *
     * @param \HubSpot\Client\Crm\Lists\Model\PublicIndexOffset|null $offset offset
     *
     * @return self
     */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;

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


