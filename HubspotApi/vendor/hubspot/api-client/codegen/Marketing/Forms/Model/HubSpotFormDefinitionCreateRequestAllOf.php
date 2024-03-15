<?php
/**
 * HubSpotFormDefinitionCreateRequestAllOf
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
 * HubSpotFormDefinitionCreateRequestAllOf Class Doc Comment
 *
 * @category Class
 * @package  HubSpot\Client\Marketing\Forms
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class HubSpotFormDefinitionCreateRequestAllOf implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'HubSpotFormDefinitionCreateRequest_allOf';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'form_type' => 'string',
        'name' => 'string',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime',
        'archived' => 'bool',
        'archived_at' => '\DateTime',
        'field_groups' => '\HubSpot\Client\Marketing\Forms\Model\FieldGroup[]',
        'configuration' => '\HubSpot\Client\Marketing\Forms\Model\HubSpotFormConfiguration',
        'display_options' => '\HubSpot\Client\Marketing\Forms\Model\FormDisplayOptions',
        'legal_consent_options' => 'object'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'form_type' => null,
        'name' => null,
        'created_at' => 'date-time',
        'updated_at' => 'date-time',
        'archived' => null,
        'archived_at' => 'date-time',
        'field_groups' => null,
        'configuration' => null,
        'display_options' => null,
        'legal_consent_options' => null
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
        'form_type' => 'formType',
        'name' => 'name',
        'created_at' => 'createdAt',
        'updated_at' => 'updatedAt',
        'archived' => 'archived',
        'archived_at' => 'archivedAt',
        'field_groups' => 'fieldGroups',
        'configuration' => 'configuration',
        'display_options' => 'displayOptions',
        'legal_consent_options' => 'legalConsentOptions'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'form_type' => 'setFormType',
        'name' => 'setName',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'archived' => 'setArchived',
        'archived_at' => 'setArchivedAt',
        'field_groups' => 'setFieldGroups',
        'configuration' => 'setConfiguration',
        'display_options' => 'setDisplayOptions',
        'legal_consent_options' => 'setLegalConsentOptions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'form_type' => 'getFormType',
        'name' => 'getName',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'archived' => 'getArchived',
        'archived_at' => 'getArchivedAt',
        'field_groups' => 'getFieldGroups',
        'configuration' => 'getConfiguration',
        'display_options' => 'getDisplayOptions',
        'legal_consent_options' => 'getLegalConsentOptions'
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

    public const FORM_TYPE_HUBSPOT = 'hubspot';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFormTypeAllowableValues()
    {
        return [
            self::FORM_TYPE_HUBSPOT,
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
        $this->container['form_type'] = $data['form_type'] ?? 'hubspot';
        $this->container['name'] = $data['name'] ?? null;
        $this->container['created_at'] = $data['created_at'] ?? null;
        $this->container['updated_at'] = $data['updated_at'] ?? null;
        $this->container['archived'] = $data['archived'] ?? null;
        $this->container['archived_at'] = $data['archived_at'] ?? null;
        $this->container['field_groups'] = $data['field_groups'] ?? null;
        $this->container['configuration'] = $data['configuration'] ?? null;
        $this->container['display_options'] = $data['display_options'] ?? null;
        $this->container['legal_consent_options'] = $data['legal_consent_options'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['form_type'] === null) {
            $invalidProperties[] = "'form_type' can't be null";
        }
        $allowedValues = $this->getFormTypeAllowableValues();
        if (!is_null($this->container['form_type']) && !in_array($this->container['form_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'form_type', must be one of '%s'",
                $this->container['form_type'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['created_at'] === null) {
            $invalidProperties[] = "'created_at' can't be null";
        }
        if ($this->container['updated_at'] === null) {
            $invalidProperties[] = "'updated_at' can't be null";
        }
        if ($this->container['archived'] === null) {
            $invalidProperties[] = "'archived' can't be null";
        }
        if ($this->container['field_groups'] === null) {
            $invalidProperties[] = "'field_groups' can't be null";
        }
        if ($this->container['configuration'] === null) {
            $invalidProperties[] = "'configuration' can't be null";
        }
        if ($this->container['display_options'] === null) {
            $invalidProperties[] = "'display_options' can't be null";
        }
        if ($this->container['legal_consent_options'] === null) {
            $invalidProperties[] = "'legal_consent_options' can't be null";
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
     * Gets form_type
     *
     * @return string
     */
    public function getFormType()
    {
        return $this->container['form_type'];
    }

    /**
     * Sets form_type
     *
     * @param string $form_type form_type
     *
     * @return self
     */
    public function setFormType($form_type)
    {
        $allowedValues = $this->getFormTypeAllowableValues();
        if (!in_array($form_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'form_type', must be one of '%s'",
                    $form_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['form_type'] = $form_type;

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
     * @param string $name name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime $created_at created_at
     *
     * @return self
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param \DateTime $updated_at updated_at
     *
     * @return self
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets archived
     *
     * @return bool
     */
    public function getArchived()
    {
        return $this->container['archived'];
    }

    /**
     * Sets archived
     *
     * @param bool $archived archived
     *
     * @return self
     */
    public function setArchived($archived)
    {
        $this->container['archived'] = $archived;

        return $this;
    }

    /**
     * Gets archived_at
     *
     * @return \DateTime|null
     */
    public function getArchivedAt()
    {
        return $this->container['archived_at'];
    }

    /**
     * Sets archived_at
     *
     * @param \DateTime|null $archived_at archived_at
     *
     * @return self
     */
    public function setArchivedAt($archived_at)
    {
        $this->container['archived_at'] = $archived_at;

        return $this;
    }

    /**
     * Gets field_groups
     *
     * @return \HubSpot\Client\Marketing\Forms\Model\FieldGroup[]
     */
    public function getFieldGroups()
    {
        return $this->container['field_groups'];
    }

    /**
     * Sets field_groups
     *
     * @param \HubSpot\Client\Marketing\Forms\Model\FieldGroup[] $field_groups field_groups
     *
     * @return self
     */
    public function setFieldGroups($field_groups)
    {
        $this->container['field_groups'] = $field_groups;

        return $this;
    }

    /**
     * Gets configuration
     *
     * @return \HubSpot\Client\Marketing\Forms\Model\HubSpotFormConfiguration
     */
    public function getConfiguration()
    {
        return $this->container['configuration'];
    }

    /**
     * Sets configuration
     *
     * @param \HubSpot\Client\Marketing\Forms\Model\HubSpotFormConfiguration $configuration configuration
     *
     * @return self
     */
    public function setConfiguration($configuration)
    {
        $this->container['configuration'] = $configuration;

        return $this;
    }

    /**
     * Gets display_options
     *
     * @return \HubSpot\Client\Marketing\Forms\Model\FormDisplayOptions
     */
    public function getDisplayOptions()
    {
        return $this->container['display_options'];
    }

    /**
     * Sets display_options
     *
     * @param \HubSpot\Client\Marketing\Forms\Model\FormDisplayOptions $display_options display_options
     *
     * @return self
     */
    public function setDisplayOptions($display_options)
    {
        $this->container['display_options'] = $display_options;

        return $this;
    }

    /**
     * Gets legal_consent_options
     *
     * @return object
     */
    public function getLegalConsentOptions()
    {
        return $this->container['legal_consent_options'];
    }

    /**
     * Sets legal_consent_options
     *
     * @param object $legal_consent_options legal_consent_options
     *
     * @return self
     */
    public function setLegalConsentOptions($legal_consent_options)
    {
        $this->container['legal_consent_options'] = $legal_consent_options;

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


