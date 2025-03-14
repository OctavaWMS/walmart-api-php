<?php

/**
 * CreateLabelRequestBoxDimensions
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
 * Ship With Walmart
 *
 * This class is auto-generated by the OpenAPI generator v7.12.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Models\MP\US\Shipping;

use Walmart\Models\BaseModel;

/**
 * CreateLabelRequestBoxDimensions Class Doc Comment
 *
 * @category Class

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class CreateLabelRequestBoxDimensions extends BaseModel
{public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'createLabel_request_boxDimensions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'boxDimensionUnit' => 'string',
        'boxHeight' => 'string',
        'boxLength' => 'string',
        'boxWeight' => 'string',
        'boxWeightUnit' => 'string',
        'boxWidth' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'boxDimensionUnit' => null,
        'boxHeight' => null,
        'boxLength' => null,
        'boxWeight' => null,
        'boxWeightUnit' => null,
        'boxWidth' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'boxDimensionUnit' => false,
		'boxHeight' => false,
		'boxLength' => false,
		'boxWeight' => false,
		'boxWeightUnit' => false,
		'boxWidth' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'boxDimensionUnit' => 'boxDimensionUnit',
        'boxHeight' => 'boxHeight',
        'boxLength' => 'boxLength',
        'boxWeight' => 'boxWeight',
        'boxWeightUnit' => 'boxWeightUnit',
        'boxWidth' => 'boxWidth'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'boxDimensionUnit' => 'setBoxDimensionUnit',
        'boxHeight' => 'setBoxHeight',
        'boxLength' => 'setBoxLength',
        'boxWeight' => 'setBoxWeight',
        'boxWeightUnit' => 'setBoxWeightUnit',
        'boxWidth' => 'setBoxWidth'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'boxDimensionUnit' => 'getBoxDimensionUnit',
        'boxHeight' => 'getBoxHeight',
        'boxLength' => 'getBoxLength',
        'boxWeight' => 'getBoxWeight',
        'boxWeightUnit' => 'getBoxWeightUnit',
        'boxWidth' => 'getBoxWidth'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('boxDimensionUnit', $data ?? [], null);
        $this->setIfExists('boxHeight', $data ?? [], null);
        $this->setIfExists('boxLength', $data ?? [], null);
        $this->setIfExists('boxWeight', $data ?? [], null);
        $this->setIfExists('boxWeightUnit', $data ?? [], null);
        $this->setIfExists('boxWidth', $data ?? [], null);
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
     * Gets boxDimensionUnit
     *
     * @return string|null
    
     */
    public function getBoxDimensionUnit()
    {
        return $this->container['boxDimensionUnit'];
    }

    /**
     * Sets boxDimensionUnit
     *
     * @param string|null $boxDimensionUnit boxDimensionUnit
     *
     * @return self
    
     */
    public function setBoxDimensionUnit($boxDimensionUnit)
    {
        if (is_null($boxDimensionUnit)) {
            throw new \InvalidArgumentException('non-nullable boxDimensionUnit cannot be null');
        }
        
        $this->container['boxDimensionUnit'] = $boxDimensionUnit;
        return $this;
    }

    /**
     * Gets boxHeight
     *
     * @return string|null
    
     */
    public function getBoxHeight()
    {
        return $this->container['boxHeight'];
    }

    /**
     * Sets boxHeight
     *
     * @param string|null $boxHeight boxHeight
     *
     * @return self
    
     */
    public function setBoxHeight($boxHeight)
    {
        if (is_null($boxHeight)) {
            throw new \InvalidArgumentException('non-nullable boxHeight cannot be null');
        }
        
        $this->container['boxHeight'] = $boxHeight;
        return $this;
    }

    /**
     * Gets boxLength
     *
     * @return string|null
    
     */
    public function getBoxLength()
    {
        return $this->container['boxLength'];
    }

    /**
     * Sets boxLength
     *
     * @param string|null $boxLength boxLength
     *
     * @return self
    
     */
    public function setBoxLength($boxLength)
    {
        if (is_null($boxLength)) {
            throw new \InvalidArgumentException('non-nullable boxLength cannot be null');
        }
        
        $this->container['boxLength'] = $boxLength;
        return $this;
    }

    /**
     * Gets boxWeight
     *
     * @return string|null
    
     */
    public function getBoxWeight()
    {
        return $this->container['boxWeight'];
    }

    /**
     * Sets boxWeight
     *
     * @param string|null $boxWeight boxWeight
     *
     * @return self
    
     */
    public function setBoxWeight($boxWeight)
    {
        if (is_null($boxWeight)) {
            throw new \InvalidArgumentException('non-nullable boxWeight cannot be null');
        }
        
        $this->container['boxWeight'] = $boxWeight;
        return $this;
    }

    /**
     * Gets boxWeightUnit
     *
     * @return string|null
    
     */
    public function getBoxWeightUnit()
    {
        return $this->container['boxWeightUnit'];
    }

    /**
     * Sets boxWeightUnit
     *
     * @param string|null $boxWeightUnit boxWeightUnit
     *
     * @return self
    
     */
    public function setBoxWeightUnit($boxWeightUnit)
    {
        if (is_null($boxWeightUnit)) {
            throw new \InvalidArgumentException('non-nullable boxWeightUnit cannot be null');
        }
        
        $this->container['boxWeightUnit'] = $boxWeightUnit;
        return $this;
    }

    /**
     * Gets boxWidth
     *
     * @return string|null
    
     */
    public function getBoxWidth()
    {
        return $this->container['boxWidth'];
    }

    /**
     * Sets boxWidth
     *
     * @param string|null $boxWidth boxWidth
     *
     * @return self
    
     */
    public function setBoxWidth($boxWidth)
    {
        if (is_null($boxWidth)) {
            throw new \InvalidArgumentException('non-nullable boxWidth cannot be null');
        }
        
        $this->container['boxWidth'] = $boxWidth;
        return $this;
    }
}
