<?php
/**
 * APIV1Wallet
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  Rootsoft\Algorand\KMD
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * for KMD HTTP API
 *
 * API for KMD (Key Management Daemon)
 *
 * The version of the OpenAPI document: 0.0.1
 * Contact: contact@algorand.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.2.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Rootsoft\Algorand\KMD\Model;

use \ArrayAccess;
use \Rootsoft\Algorand\KMD\ObjectSerializer;

/**
 * APIV1Wallet Class Doc Comment
 *
 * @category Class
 * @description APIV1Wallet is the API&#39;s representation of a wallet
 * @package  Rootsoft\Algorand\KMD
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class APIV1Wallet implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'APIV1Wallet';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'driver_name' => 'string',
        'driver_version' => 'int',
        'id' => 'string',
        'mnemonic_ux' => 'bool',
        'name' => 'string',
        'supported_txs' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'driver_name' => null,
        'driver_version' => 'uint32',
        'id' => null,
        'mnemonic_ux' => null,
        'name' => null,
        'supported_txs' => null
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
        'driver_name' => 'driver_name',
        'driver_version' => 'driver_version',
        'id' => 'id',
        'mnemonic_ux' => 'mnemonic_ux',
        'name' => 'name',
        'supported_txs' => 'supported_txs'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'driver_name' => 'setDriverName',
        'driver_version' => 'setDriverVersion',
        'id' => 'setId',
        'mnemonic_ux' => 'setMnemonicUx',
        'name' => 'setName',
        'supported_txs' => 'setSupportedTxs'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'driver_name' => 'getDriverName',
        'driver_version' => 'getDriverVersion',
        'id' => 'getId',
        'mnemonic_ux' => 'getMnemonicUx',
        'name' => 'getName',
        'supported_txs' => 'getSupportedTxs'
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
        $this->container['driver_name'] = $data['driver_name'] ?? null;
        $this->container['driver_version'] = $data['driver_version'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['mnemonic_ux'] = $data['mnemonic_ux'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['supported_txs'] = $data['supported_txs'] ?? null;
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
     * Gets driver_name
     *
     * @return string|null
     */
    public function getDriverName()
    {
        return $this->container['driver_name'];
    }

    /**
     * Sets driver_name
     *
     * @param string|null $driver_name driver_name
     *
     * @return self
     */
    public function setDriverName($driver_name)
    {
        $this->container['driver_name'] = $driver_name;

        return $this;
    }

    /**
     * Gets driver_version
     *
     * @return int|null
     */
    public function getDriverVersion()
    {
        return $this->container['driver_version'];
    }

    /**
     * Sets driver_version
     *
     * @param int|null $driver_version driver_version
     *
     * @return self
     */
    public function setDriverVersion($driver_version)
    {
        $this->container['driver_version'] = $driver_version;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets mnemonic_ux
     *
     * @return bool|null
     */
    public function getMnemonicUx()
    {
        return $this->container['mnemonic_ux'];
    }

    /**
     * Sets mnemonic_ux
     *
     * @param bool|null $mnemonic_ux mnemonic_ux
     *
     * @return self
     */
    public function setMnemonicUx($mnemonic_ux)
    {
        $this->container['mnemonic_ux'] = $mnemonic_ux;

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
     * @param string|null $name name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets supported_txs
     *
     * @return string[]|null
     */
    public function getSupportedTxs()
    {
        return $this->container['supported_txs'];
    }

    /**
     * Sets supported_txs
     *
     * @param string[]|null $supported_txs supported_txs
     *
     * @return self
     */
    public function setSupportedTxs($supported_txs)
    {
        $this->container['supported_txs'] = $supported_txs;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
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
    public function offsetUnset($offset)
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


