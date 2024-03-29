<?php
/**
 * ContentLanguageVariation
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  HubSpot\Client\Cms\Pages
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Pages
 *
 * Use these endpoints for interacting with Landing Pages and Site Pages
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

namespace HubSpot\Client\Cms\Pages\Model;

use \ArrayAccess;
use \HubSpot\Client\Cms\Pages\ObjectSerializer;

/**
 * ContentLanguageVariation Class Doc Comment
 *
 * @category Class
 * @package  HubSpot\Client\Cms\Pages
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ContentLanguageVariation implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ContentLanguageVariation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'archived_in_dashboard' => 'bool',
        'created' => '\DateTime',
        'tag_ids' => 'int[]',
        'publish_date' => '\DateTime',
        'public_access_rules' => 'object[]',
        'password' => 'string',
        'author_name' => 'string',
        'public_access_rules_enabled' => 'bool',
        'name' => 'string',
        'campaign' => 'string',
        'id' => 'int',
        'state' => 'string',
        'updated' => '\DateTime',
        'slug' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'archived_in_dashboard' => null,
        'created' => 'date-time',
        'tag_ids' => 'int64',
        'publish_date' => 'date-time',
        'public_access_rules' => null,
        'password' => null,
        'author_name' => null,
        'public_access_rules_enabled' => null,
        'name' => null,
        'campaign' => null,
        'id' => 'int64',
        'state' => null,
        'updated' => 'date-time',
        'slug' => null
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
        'archived_in_dashboard' => 'archivedInDashboard',
        'created' => 'created',
        'tag_ids' => 'tagIds',
        'publish_date' => 'publishDate',
        'public_access_rules' => 'publicAccessRules',
        'password' => 'password',
        'author_name' => 'authorName',
        'public_access_rules_enabled' => 'publicAccessRulesEnabled',
        'name' => 'name',
        'campaign' => 'campaign',
        'id' => 'id',
        'state' => 'state',
        'updated' => 'updated',
        'slug' => 'slug'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'archived_in_dashboard' => 'setArchivedInDashboard',
        'created' => 'setCreated',
        'tag_ids' => 'setTagIds',
        'publish_date' => 'setPublishDate',
        'public_access_rules' => 'setPublicAccessRules',
        'password' => 'setPassword',
        'author_name' => 'setAuthorName',
        'public_access_rules_enabled' => 'setPublicAccessRulesEnabled',
        'name' => 'setName',
        'campaign' => 'setCampaign',
        'id' => 'setId',
        'state' => 'setState',
        'updated' => 'setUpdated',
        'slug' => 'setSlug'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'archived_in_dashboard' => 'getArchivedInDashboard',
        'created' => 'getCreated',
        'tag_ids' => 'getTagIds',
        'publish_date' => 'getPublishDate',
        'public_access_rules' => 'getPublicAccessRules',
        'password' => 'getPassword',
        'author_name' => 'getAuthorName',
        'public_access_rules_enabled' => 'getPublicAccessRulesEnabled',
        'name' => 'getName',
        'campaign' => 'getCampaign',
        'id' => 'getId',
        'state' => 'getState',
        'updated' => 'getUpdated',
        'slug' => 'getSlug'
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
        $this->container['archived_in_dashboard'] = $data['archived_in_dashboard'] ?? null;
        $this->container['created'] = $data['created'] ?? null;
        $this->container['tag_ids'] = $data['tag_ids'] ?? null;
        $this->container['publish_date'] = $data['publish_date'] ?? null;
        $this->container['public_access_rules'] = $data['public_access_rules'] ?? null;
        $this->container['password'] = $data['password'] ?? null;
        $this->container['author_name'] = $data['author_name'] ?? null;
        $this->container['public_access_rules_enabled'] = $data['public_access_rules_enabled'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['campaign'] = $data['campaign'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['state'] = $data['state'] ?? null;
        $this->container['updated'] = $data['updated'] ?? null;
        $this->container['slug'] = $data['slug'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['archived_in_dashboard'] === null) {
            $invalidProperties[] = "'archived_in_dashboard' can't be null";
        }
        if ($this->container['created'] === null) {
            $invalidProperties[] = "'created' can't be null";
        }
        if ($this->container['publish_date'] === null) {
            $invalidProperties[] = "'publish_date' can't be null";
        }
        if ($this->container['public_access_rules'] === null) {
            $invalidProperties[] = "'public_access_rules' can't be null";
        }
        if ($this->container['password'] === null) {
            $invalidProperties[] = "'password' can't be null";
        }
        if ($this->container['author_name'] === null) {
            $invalidProperties[] = "'author_name' can't be null";
        }
        if ($this->container['public_access_rules_enabled'] === null) {
            $invalidProperties[] = "'public_access_rules_enabled' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['campaign'] === null) {
            $invalidProperties[] = "'campaign' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['state'] === null) {
            $invalidProperties[] = "'state' can't be null";
        }
        if ($this->container['updated'] === null) {
            $invalidProperties[] = "'updated' can't be null";
        }
        if ($this->container['slug'] === null) {
            $invalidProperties[] = "'slug' can't be null";
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
     * Gets archived_in_dashboard
     *
     * @return bool
     */
    public function getArchivedInDashboard()
    {
        return $this->container['archived_in_dashboard'];
    }

    /**
     * Sets archived_in_dashboard
     *
     * @param bool $archived_in_dashboard archived_in_dashboard
     *
     * @return self
     */
    public function setArchivedInDashboard($archived_in_dashboard)
    {
        $this->container['archived_in_dashboard'] = $archived_in_dashboard;

        return $this;
    }

    /**
     * Gets created
     *
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
     * Sets created
     *
     * @param \DateTime $created created
     *
     * @return self
     */
    public function setCreated($created)
    {
        $this->container['created'] = $created;

        return $this;
    }

    /**
     * Gets tag_ids
     *
     * @return int[]|null
     */
    public function getTagIds()
    {
        return $this->container['tag_ids'];
    }

    /**
     * Sets tag_ids
     *
     * @param int[]|null $tag_ids tag_ids
     *
     * @return self
     */
    public function setTagIds($tag_ids)
    {
        $this->container['tag_ids'] = $tag_ids;

        return $this;
    }

    /**
     * Gets publish_date
     *
     * @return \DateTime
     */
    public function getPublishDate()
    {
        return $this->container['publish_date'];
    }

    /**
     * Sets publish_date
     *
     * @param \DateTime $publish_date publish_date
     *
     * @return self
     */
    public function setPublishDate($publish_date)
    {
        $this->container['publish_date'] = $publish_date;

        return $this;
    }

    /**
     * Gets public_access_rules
     *
     * @return object[]
     */
    public function getPublicAccessRules()
    {
        return $this->container['public_access_rules'];
    }

    /**
     * Sets public_access_rules
     *
     * @param object[] $public_access_rules public_access_rules
     *
     * @return self
     */
    public function setPublicAccessRules($public_access_rules)
    {
        $this->container['public_access_rules'] = $public_access_rules;

        return $this;
    }

    /**
     * Gets password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->container['password'];
    }

    /**
     * Sets password
     *
     * @param string $password password
     *
     * @return self
     */
    public function setPassword($password)
    {
        $this->container['password'] = $password;

        return $this;
    }

    /**
     * Gets author_name
     *
     * @return string
     */
    public function getAuthorName()
    {
        return $this->container['author_name'];
    }

    /**
     * Sets author_name
     *
     * @param string $author_name author_name
     *
     * @return self
     */
    public function setAuthorName($author_name)
    {
        $this->container['author_name'] = $author_name;

        return $this;
    }

    /**
     * Gets public_access_rules_enabled
     *
     * @return bool
     */
    public function getPublicAccessRulesEnabled()
    {
        return $this->container['public_access_rules_enabled'];
    }

    /**
     * Sets public_access_rules_enabled
     *
     * @param bool $public_access_rules_enabled public_access_rules_enabled
     *
     * @return self
     */
    public function setPublicAccessRulesEnabled($public_access_rules_enabled)
    {
        $this->container['public_access_rules_enabled'] = $public_access_rules_enabled;

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
     * Gets campaign
     *
     * @return string
     */
    public function getCampaign()
    {
        return $this->container['campaign'];
    }

    /**
     * Sets campaign
     *
     * @param string $campaign campaign
     *
     * @return self
     */
    public function setCampaign($campaign)
    {
        $this->container['campaign'] = $campaign;

        return $this;
    }

    /**
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string $state state
     *
     * @return self
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets updated
     *
     * @return \DateTime
     */
    public function getUpdated()
    {
        return $this->container['updated'];
    }

    /**
     * Sets updated
     *
     * @param \DateTime $updated updated
     *
     * @return self
     */
    public function setUpdated($updated)
    {
        $this->container['updated'] = $updated;

        return $this;
    }

    /**
     * Gets slug
     *
     * @return string
     */
    public function getSlug()
    {
        return $this->container['slug'];
    }

    /**
     * Sets slug
     *
     * @param string $slug slug
     *
     * @return self
     */
    public function setSlug($slug)
    {
        $this->container['slug'] = $slug;

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


