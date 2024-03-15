<?php
/**
 * PublicBusinessUnitLogoMetadata
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  HubSpot\Client\Settings\BusinessUnits
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Business Units Business Units
 *
 * Retrieve Business Unit information.
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

namespace HubSpot\Client\Settings\BusinessUnits\Model;

use \ArrayAccess;
use \HubSpot\Client\Settings\BusinessUnits\ObjectSerializer;

/**
 * PublicBusinessUnitLogoMetadata Class Doc Comment
 *
 * @category Class
 * @description A Business Unit&#39;s logo metadata
 * @package  HubSpot\Client\Settings\BusinessUnits
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PublicBusinessUnitLogoMetadata implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PublicBusinessUnitLogoMetadata';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'logo_alt_text' => 'string',
        'resized_url' => 'string',
        'logo_url' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'logo_alt_text' => null,
        'resized_url' => null,
        'logo_url' => null
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
        'logo_alt_text' => 'logoAltText',
        'resized_url' => 'resizedUrl',
        'logo_url' => 'logoUrl'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'logo_alt_text' => 'setLogoAltText',
        'resized_url' => 'setResizedUrl',
        'logo_url' => 'setLogoUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'logo_alt_text' => 'getLogoAltText',
        'resized_url' => 'getResizedUrl',
        'logo_url' => 'getLogoUrl'
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
        $this->container['logo_alt_text'] = $data['logo_alt_text'] ?? null;
        $this->container['resized_url'] = $data['resized_url'] ?? null;
        $this->container['logo_url'] = $data['logo_url'] ?? null;
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
     * Gets logo_alt_text
     *
     * @return string|null
     */
    public function getLogoAltText()
    {
        return $this->container['logo_alt_text'];
    }

    /**
     * Sets logo_alt_text
     *
     * @param string|null $logo_alt_text The logo's alt text
     *
     * @return self
     */
    public function setLogoAltText($logo_alt_text)
    {
        $this->container['logo_alt_text'] = $logo_alt_text;

        return $this;
    }

    /**
     * Gets resized_url
     *
     * @return string|null
     */
    public function getResizedUrl()
    {
        return $this->container['resized_url'];
    }

    /**
     * Sets resized_url
     *
     * @param string|null $resized_url The logo's resized url
     *
     * @return self
     */
    public function setResizedUrl($resized_url)
    {
        $this->container['resized_url'] = $resized_url;

        return $this;
    }

    /**
     * Gets logo_url
     *
     * @return string|null
     */
    public function getLogoUrl()
    {
        return $this->container['logo_url'];
    }

    /**
     * Sets logo_url
     *
     * @param string|null $logo_url The logo's url
     *
     * @return self
     */
    public function setLogoUrl($logo_url)
    {
        $this->container['logo_url'] = $logo_url;

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


