<?php
/**
 * PublicNotAllFilterBranch
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
 * PublicNotAllFilterBranch Class Doc Comment
 *
 * @category Class
 * @package  HubSpot\Client\Crm\Lists
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PublicNotAllFilterBranch implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PublicNotAllFilterBranch';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'filter_branch_type' => 'string',
        'filter_branch_operator' => 'string',
        'filter_branches' => '\HubSpot\Client\Crm\Lists\Model\PublicPropertyAssociationFilterBranchFilterBranchesInner[]',
        'filters' => '\HubSpot\Client\Crm\Lists\Model\PublicPropertyAssociationFilterBranchFiltersInner[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'filter_branch_type' => null,
        'filter_branch_operator' => null,
        'filter_branches' => null,
        'filters' => null
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
        'filter_branch_type' => 'filterBranchType',
        'filter_branch_operator' => 'filterBranchOperator',
        'filter_branches' => 'filterBranches',
        'filters' => 'filters'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'filter_branch_type' => 'setFilterBranchType',
        'filter_branch_operator' => 'setFilterBranchOperator',
        'filter_branches' => 'setFilterBranches',
        'filters' => 'setFilters'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'filter_branch_type' => 'getFilterBranchType',
        'filter_branch_operator' => 'getFilterBranchOperator',
        'filter_branches' => 'getFilterBranches',
        'filters' => 'getFilters'
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

    public const FILTER_BRANCH_TYPE_NOT_ALL = 'NOT_ALL';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFilterBranchTypeAllowableValues()
    {
        return [
            self::FILTER_BRANCH_TYPE_NOT_ALL,
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
        $this->container['filter_branch_type'] = $data['filter_branch_type'] ?? 'NOT_ALL';
        $this->container['filter_branch_operator'] = $data['filter_branch_operator'] ?? null;
        $this->container['filter_branches'] = $data['filter_branches'] ?? null;
        $this->container['filters'] = $data['filters'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['filter_branch_type'] === null) {
            $invalidProperties[] = "'filter_branch_type' can't be null";
        }
        $allowedValues = $this->getFilterBranchTypeAllowableValues();
        if (!is_null($this->container['filter_branch_type']) && !in_array($this->container['filter_branch_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'filter_branch_type', must be one of '%s'",
                $this->container['filter_branch_type'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['filter_branch_operator'] === null) {
            $invalidProperties[] = "'filter_branch_operator' can't be null";
        }
        if ($this->container['filter_branches'] === null) {
            $invalidProperties[] = "'filter_branches' can't be null";
        }
        if ($this->container['filters'] === null) {
            $invalidProperties[] = "'filters' can't be null";
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
     * Gets filter_branch_type
     *
     * @return string
     */
    public function getFilterBranchType()
    {
        return $this->container['filter_branch_type'];
    }

    /**
     * Sets filter_branch_type
     *
     * @param string $filter_branch_type filter_branch_type
     *
     * @return self
     */
    public function setFilterBranchType($filter_branch_type)
    {
        $allowedValues = $this->getFilterBranchTypeAllowableValues();
        if (!in_array($filter_branch_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'filter_branch_type', must be one of '%s'",
                    $filter_branch_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['filter_branch_type'] = $filter_branch_type;

        return $this;
    }

    /**
     * Gets filter_branch_operator
     *
     * @return string
     */
    public function getFilterBranchOperator()
    {
        return $this->container['filter_branch_operator'];
    }

    /**
     * Sets filter_branch_operator
     *
     * @param string $filter_branch_operator filter_branch_operator
     *
     * @return self
     */
    public function setFilterBranchOperator($filter_branch_operator)
    {
        $this->container['filter_branch_operator'] = $filter_branch_operator;

        return $this;
    }

    /**
     * Gets filter_branches
     *
     * @return \HubSpot\Client\Crm\Lists\Model\PublicPropertyAssociationFilterBranchFilterBranchesInner[]
     */
    public function getFilterBranches()
    {
        return $this->container['filter_branches'];
    }

    /**
     * Sets filter_branches
     *
     * @param \HubSpot\Client\Crm\Lists\Model\PublicPropertyAssociationFilterBranchFilterBranchesInner[] $filter_branches filter_branches
     *
     * @return self
     */
    public function setFilterBranches($filter_branches)
    {
        $this->container['filter_branches'] = $filter_branches;

        return $this;
    }

    /**
     * Gets filters
     *
     * @return \HubSpot\Client\Crm\Lists\Model\PublicPropertyAssociationFilterBranchFiltersInner[]
     */
    public function getFilters()
    {
        return $this->container['filters'];
    }

    /**
     * Sets filters
     *
     * @param \HubSpot\Client\Crm\Lists\Model\PublicPropertyAssociationFilterBranchFiltersInner[] $filters filters
     *
     * @return self
     */
    public function setFilters($filters)
    {
        $this->container['filters'] = $filters;

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


