<?php
/**
 * HubSpotFormDefinitionPatchRequest
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  HubSpot\Client\Marketing\Forms
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Forms
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
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

namespace HubSpot\Client\Marketing\Forms\Model;

use \ArrayAccess;
use \HubSpot\Client\Marketing\Forms\ObjectSerializer;

/**
 * HubSpotFormDefinitionPatchRequest Class Doc Comment
 *
 * @category Class
 * @package  HubSpot\Client\Marketing\Forms
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class HubSpotFormDefinitionPatchRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'HubSpotFormDefinitionPatchRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'field_groups' => '\HubSpot\Client\Marketing\Forms\Model\FieldGroup[]',
        'archived' => 'bool',
        'configuration' => '\HubSpot\Client\Marketing\Forms\Model\HubSpotFormConfiguration',
        'name' => 'string',
        'legal_consent_options' => '\HubSpot\Client\Marketing\Forms\Model\HubSpotFormDefinitionPatchRequestLegalConsentOptions',
        'display_options' => '\HubSpot\Client\Marketing\Forms\Model\FormDisplayOptions'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'field_groups' => null,
        'archived' => null,
        'configuration' => null,
        'name' => null,
        'legal_consent_options' => null,
        'display_options' => null
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
        'field_groups' => 'fieldGroups',
        'archived' => 'archived',
        'configuration' => 'configuration',
        'name' => 'name',
        'legal_consent_options' => 'legalConsentOptions',
        'display_options' => 'displayOptions'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'field_groups' => 'setFieldGroups',
        'archived' => 'setArchived',
        'configuration' => 'setConfiguration',
        'name' => 'setName',
        'legal_consent_options' => 'setLegalConsentOptions',
        'display_options' => 'setDisplayOptions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'field_groups' => 'getFieldGroups',
        'archived' => 'getArchived',
        'configuration' => 'getConfiguration',
        'name' => 'getName',
        'legal_consent_options' => 'getLegalConsentOptions',
        'display_options' => 'getDisplayOptions'
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
        $this->container['field_groups'] = $data['field_groups'] ?? null;
        $this->container['archived'] = $data['archived'] ?? null;
        $this->container['configuration'] = $data['configuration'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['legal_consent_options'] = $data['legal_consent_options'] ?? null;
        $this->container['display_options'] = $data['display_options'] ?? null;
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
     * Gets field_groups
     *
     * @return \HubSpot\Client\Marketing\Forms\Model\FieldGroup[]|null
     */
    public function getFieldGroups()
    {
        return $this->container['field_groups'];
    }

    /**
     * Sets field_groups
     *
     * @param \HubSpot\Client\Marketing\Forms\Model\FieldGroup[]|null $field_groups The fields in the form, grouped in rows.
     *
     * @return self
     */
    public function setFieldGroups($field_groups)
    {
        $this->container['field_groups'] = $field_groups;

        return $this;
    }

    /**
     * Gets archived
     *
     * @return bool|null
     */
    public function getArchived()
    {
        return $this->container['archived'];
    }

    /**
     * Sets archived
     *
     * @param bool|null $archived Whether this form is archived.
     *
     * @return self
     */
    public function setArchived($archived)
    {
        $this->container['archived'] = $archived;

        return $this;
    }

    /**
     * Gets configuration
     *
     * @return \HubSpot\Client\Marketing\Forms\Model\HubSpotFormConfiguration|null
     */
    public function getConfiguration()
    {
        return $this->container['configuration'];
    }

    /**
     * Sets configuration
     *
     * @param \HubSpot\Client\Marketing\Forms\Model\HubSpotFormConfiguration|null $configuration configuration
     *
     * @return self
     */
    public function setConfiguration($configuration)
    {
        $this->container['configuration'] = $configuration;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name The name of the form. Expected to be unique for a hub.
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets legal_consent_options
     *
     * @return \HubSpot\Client\Marketing\Forms\Model\HubSpotFormDefinitionPatchRequestLegalConsentOptions|null
     */
    public function getLegalConsentOptions()
    {
        return $this->container['legal_consent_options'];
    }

    /**
     * Sets legal_consent_options
     *
     * @param \HubSpot\Client\Marketing\Forms\Model\HubSpotFormDefinitionPatchRequestLegalConsentOptions|null $legal_consent_options legal_consent_options
     *
     * @return self
     */
    public function setLegalConsentOptions($legal_consent_options)
    {
        $this->container['legal_consent_options'] = $legal_consent_options;

        return $this;
    }

    /**
     * Gets display_options
     *
     * @return \HubSpot\Client\Marketing\Forms\Model\FormDisplayOptions|null
     */
    public function getDisplayOptions()
    {
        return $this->container['display_options'];
    }

    /**
     * Sets display_options
     *
     * @param \HubSpot\Client\Marketing\Forms\Model\FormDisplayOptions|null $display_options display_options
     *
     * @return self
     */
    public function setDisplayOptions($display_options)
    {
        $this->container['display_options'] = $display_options;

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


