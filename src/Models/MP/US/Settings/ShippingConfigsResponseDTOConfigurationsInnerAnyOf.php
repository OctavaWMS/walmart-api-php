<?php

/**
 * ShippingConfigsResponseDTOConfigurationsInnerAnyOf
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */

/**
 * Settings Management
 *
 * This class is auto-generated by the OpenAPI generator v7.12.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Models\MP\US\Settings;

use Walmart\Models\BaseModel;

/**
 * ShippingConfigsResponseDTOConfigurationsInnerAnyOf Class Doc Comment
 *
 * @category Class

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class ShippingConfigsResponseDTOConfigurationsInnerAnyOf extends BaseModel
{public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'ShippingConfigsResponseDTO_configurations_inner_anyOf';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'configurationName' => 'string',
        'configuration' => '\Walmart\Models\MP\US\Settings\ShippingConfigConfiguration'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'configurationName' => null,
        'configuration' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'configurationName' => false,
		'configuration' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'configurationName' => 'configurationName',
        'configuration' => 'configuration'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'configurationName' => 'setConfigurationName',
        'configuration' => 'setConfiguration'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'configurationName' => 'getConfigurationName',
        'configuration' => 'getConfiguration'
    ];

    
    public const CONFIGURATION_NAME_LAG_TIME = 'LAG_TIME';
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getConfigurationNameAllowableValues()
    {
        return [
            self::CONFIGURATION_NAME_LAG_TIME,
        ];
    }

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('configurationName', $data ?? [], null);
        $this->setIfExists('configuration', $data ?? [], null);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getConfigurationNameAllowableValues();
        if (!is_null($this->container['configurationName']) && !in_array($this->container['configurationName'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'configurationName', must be one of '%s'",
                $this->container['configurationName'],
                implode("', '", $allowedValues)
            );
        }

        
        return $invalidProperties;
    }

    /**
     * Gets configurationName
     *
     * @return string|null
    
     */
    public function getConfigurationName()
    {
        return $this->container['configurationName'];
    }

    /**
     * Sets configurationName
     *
     * @param string|null $configurationName Name of the configuration
     *
     * @return self
    
     */
    public function setConfigurationName($configurationName)
    {
        if (is_null($configurationName)) {
            throw new \InvalidArgumentException('non-nullable configurationName cannot be null');
        }
        $allowedValues = $this->getConfigurationNameAllowableValues();
        if (!in_array($configurationName, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'configurationName', must be one of '%s'",
                    $configurationName,
                    implode("', '", $allowedValues)
                )
            );
        }
        
        $this->container['configurationName'] = $configurationName;
        return $this;
    }

    /**
     * Gets configuration
     *
     * @return \Walmart\Models\MP\US\Settings\ShippingConfigConfiguration|null
    
     */
    public function getConfiguration()
    {
        return $this->container['configuration'];
    }

    /**
     * Sets configuration
     *
     * @param \Walmart\Models\MP\US\Settings\ShippingConfigConfiguration|null $configuration configuration
     *
     * @return self
    
     */
    public function setConfiguration($configuration)
    {
        if (is_null($configuration)) {
            throw new \InvalidArgumentException('non-nullable configuration cannot be null');
        }
        
        $this->container['configuration'] = $configuration;
        return $this;
    }
}
