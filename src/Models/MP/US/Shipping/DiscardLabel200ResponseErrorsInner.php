<?php

/**
 * DiscardLabel200ResponseErrorsInner
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
 * DiscardLabel200ResponseErrorsInner Class Doc Comment
 *
 * @category Class

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class DiscardLabel200ResponseErrorsInner extends BaseModel
{public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'discardLabel_200_response_errors_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'category' => 'string',
        'code' => 'string',
        'description' => 'string',
        'field' => 'string',
        'httpStatus' => 'string',
        'info' => 'string',
        'severity' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'category' => null,
        'code' => null,
        'description' => null,
        'field' => null,
        'httpStatus' => null,
        'info' => null,
        'severity' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'category' => false,
		'code' => false,
		'description' => false,
		'field' => false,
		'httpStatus' => false,
		'info' => false,
		'severity' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'category' => 'category',
        'code' => 'code',
        'description' => 'description',
        'field' => 'field',
        'httpStatus' => 'httpStatus',
        'info' => 'info',
        'severity' => 'severity'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'category' => 'setCategory',
        'code' => 'setCode',
        'description' => 'setDescription',
        'field' => 'setField',
        'httpStatus' => 'setHttpStatus',
        'info' => 'setInfo',
        'severity' => 'setSeverity'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'category' => 'getCategory',
        'code' => 'getCode',
        'description' => 'getDescription',
        'field' => 'getField',
        'httpStatus' => 'getHttpStatus',
        'info' => 'getInfo',
        'severity' => 'getSeverity'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('category', $data ?? [], null);
        $this->setIfExists('code', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('field', $data ?? [], null);
        $this->setIfExists('httpStatus', $data ?? [], null);
        $this->setIfExists('info', $data ?? [], null);
        $this->setIfExists('severity', $data ?? [], null);
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
     * Gets category
     *
     * @return string|null
    
     */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
     * Sets category
     *
     * @param string|null $category category
     *
     * @return self
    
     */
    public function setCategory($category)
    {
        if (is_null($category)) {
            throw new \InvalidArgumentException('non-nullable category cannot be null');
        }
        
        $this->container['category'] = $category;
        return $this;
    }

    /**
     * Gets code
     *
     * @return string|null
    
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param string|null $code code
     *
     * @return self
    
     */
    public function setCode($code)
    {
        if (is_null($code)) {
            throw new \InvalidArgumentException('non-nullable code cannot be null');
        }
        
        $this->container['code'] = $code;
        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
    
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description description
     *
     * @return self
    
     */
    public function setDescription($description)
    {
        if (is_null($description)) {
            throw new \InvalidArgumentException('non-nullable description cannot be null');
        }
        
        $this->container['description'] = $description;
        return $this;
    }

    /**
     * Gets field
     *
     * @return string|null
    
     */
    public function getField()
    {
        return $this->container['field'];
    }

    /**
     * Sets field
     *
     * @param string|null $field field
     *
     * @return self
    
     */
    public function setField($field)
    {
        if (is_null($field)) {
            throw new \InvalidArgumentException('non-nullable field cannot be null');
        }
        
        $this->container['field'] = $field;
        return $this;
    }

    /**
     * Gets httpStatus
     *
     * @return string|null
    
     */
    public function getHttpStatus()
    {
        return $this->container['httpStatus'];
    }

    /**
     * Sets httpStatus
     *
     * @param string|null $httpStatus httpStatus
     *
     * @return self
    
     */
    public function setHttpStatus($httpStatus)
    {
        if (is_null($httpStatus)) {
            throw new \InvalidArgumentException('non-nullable httpStatus cannot be null');
        }
        
        $this->container['httpStatus'] = $httpStatus;
        return $this;
    }

    /**
     * Gets info
     *
     * @return string|null
    
     */
    public function getInfo()
    {
        return $this->container['info'];
    }

    /**
     * Sets info
     *
     * @param string|null $info info
     *
     * @return self
    
     */
    public function setInfo($info)
    {
        if (is_null($info)) {
            throw new \InvalidArgumentException('non-nullable info cannot be null');
        }
        
        $this->container['info'] = $info;
        return $this;
    }

    /**
     * Gets severity
     *
     * @return string|null
    
     */
    public function getSeverity()
    {
        return $this->container['severity'];
    }

    /**
     * Sets severity
     *
     * @param string|null $severity severity
     *
     * @return self
    
     */
    public function setSeverity($severity)
    {
        if (is_null($severity)) {
            throw new \InvalidArgumentException('non-nullable severity cannot be null');
        }
        
        $this->container['severity'] = $severity;
        return $this;
    }
}
