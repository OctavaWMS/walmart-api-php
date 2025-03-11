<?php

/**
 * LabelsDetailByPurchaseOrderId200ResponseDataInnerBoxItemsInner
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
 * LabelsDetailByPurchaseOrderId200ResponseDataInnerBoxItemsInner Class Doc Comment
 *
 * @category Class

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class LabelsDetailByPurchaseOrderId200ResponseDataInnerBoxItemsInner extends BaseModel
{public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'labelsDetailByPurchaseOrderId_200_response_data_inner_boxItems_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'countryOfOrigin' => 'string',
        'hsCode' => 'string',
        'lineNumber' => 'string',
        'originCity' => 'string',
        'originState' => 'string',
        'productName' => 'string',
        'productNameInLocale' => 'string',
        'quantity' => 'string',
        'sku' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'countryOfOrigin' => null,
        'hsCode' => null,
        'lineNumber' => null,
        'originCity' => null,
        'originState' => null,
        'productName' => null,
        'productNameInLocale' => null,
        'quantity' => null,
        'sku' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'countryOfOrigin' => false,
		'hsCode' => false,
		'lineNumber' => false,
		'originCity' => false,
		'originState' => false,
		'productName' => false,
		'productNameInLocale' => false,
		'quantity' => false,
		'sku' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'countryOfOrigin' => 'countryOfOrigin',
        'hsCode' => 'hsCode',
        'lineNumber' => 'lineNumber',
        'originCity' => 'originCity',
        'originState' => 'originState',
        'productName' => 'productName',
        'productNameInLocale' => 'productNameInLocale',
        'quantity' => 'quantity',
        'sku' => 'sku'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'countryOfOrigin' => 'setCountryOfOrigin',
        'hsCode' => 'setHsCode',
        'lineNumber' => 'setLineNumber',
        'originCity' => 'setOriginCity',
        'originState' => 'setOriginState',
        'productName' => 'setProductName',
        'productNameInLocale' => 'setProductNameInLocale',
        'quantity' => 'setQuantity',
        'sku' => 'setSku'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'countryOfOrigin' => 'getCountryOfOrigin',
        'hsCode' => 'getHsCode',
        'lineNumber' => 'getLineNumber',
        'originCity' => 'getOriginCity',
        'originState' => 'getOriginState',
        'productName' => 'getProductName',
        'productNameInLocale' => 'getProductNameInLocale',
        'quantity' => 'getQuantity',
        'sku' => 'getSku'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('countryOfOrigin', $data ?? [], null);
        $this->setIfExists('hsCode', $data ?? [], null);
        $this->setIfExists('lineNumber', $data ?? [], null);
        $this->setIfExists('originCity', $data ?? [], null);
        $this->setIfExists('originState', $data ?? [], null);
        $this->setIfExists('productName', $data ?? [], null);
        $this->setIfExists('productNameInLocale', $data ?? [], null);
        $this->setIfExists('quantity', $data ?? [], null);
        $this->setIfExists('sku', $data ?? [], null);
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
     * Gets countryOfOrigin
     *
     * @return string|null
    
     */
    public function getCountryOfOrigin()
    {
        return $this->container['countryOfOrigin'];
    }

    /**
     * Sets countryOfOrigin
     *
     * @param string|null $countryOfOrigin countryOfOrigin
     *
     * @return self
    
     */
    public function setCountryOfOrigin($countryOfOrigin)
    {
        if (is_null($countryOfOrigin)) {
            throw new \InvalidArgumentException('non-nullable countryOfOrigin cannot be null');
        }
        
        $this->container['countryOfOrigin'] = $countryOfOrigin;
        return $this;
    }

    /**
     * Gets hsCode
     *
     * @return string|null
    
     */
    public function getHsCode()
    {
        return $this->container['hsCode'];
    }

    /**
     * Sets hsCode
     *
     * @param string|null $hsCode hsCode
     *
     * @return self
    
     */
    public function setHsCode($hsCode)
    {
        if (is_null($hsCode)) {
            throw new \InvalidArgumentException('non-nullable hsCode cannot be null');
        }
        
        $this->container['hsCode'] = $hsCode;
        return $this;
    }

    /**
     * Gets lineNumber
     *
     * @return string|null
    
     */
    public function getLineNumber()
    {
        return $this->container['lineNumber'];
    }

    /**
     * Sets lineNumber
     *
     * @param string|null $lineNumber lineNumber
     *
     * @return self
    
     */
    public function setLineNumber($lineNumber)
    {
        if (is_null($lineNumber)) {
            throw new \InvalidArgumentException('non-nullable lineNumber cannot be null');
        }
        
        $this->container['lineNumber'] = $lineNumber;
        return $this;
    }

    /**
     * Gets originCity
     *
     * @return string|null
    
     */
    public function getOriginCity()
    {
        return $this->container['originCity'];
    }

    /**
     * Sets originCity
     *
     * @param string|null $originCity originCity
     *
     * @return self
    
     */
    public function setOriginCity($originCity)
    {
        if (is_null($originCity)) {
            throw new \InvalidArgumentException('non-nullable originCity cannot be null');
        }
        
        $this->container['originCity'] = $originCity;
        return $this;
    }

    /**
     * Gets originState
     *
     * @return string|null
    
     */
    public function getOriginState()
    {
        return $this->container['originState'];
    }

    /**
     * Sets originState
     *
     * @param string|null $originState originState
     *
     * @return self
    
     */
    public function setOriginState($originState)
    {
        if (is_null($originState)) {
            throw new \InvalidArgumentException('non-nullable originState cannot be null');
        }
        
        $this->container['originState'] = $originState;
        return $this;
    }

    /**
     * Gets productName
     *
     * @return string|null
    
     */
    public function getProductName()
    {
        return $this->container['productName'];
    }

    /**
     * Sets productName
     *
     * @param string|null $productName productName
     *
     * @return self
    
     */
    public function setProductName($productName)
    {
        if (is_null($productName)) {
            throw new \InvalidArgumentException('non-nullable productName cannot be null');
        }
        
        $this->container['productName'] = $productName;
        return $this;
    }

    /**
     * Gets productNameInLocale
     *
     * @return string|null
    
     */
    public function getProductNameInLocale()
    {
        return $this->container['productNameInLocale'];
    }

    /**
     * Sets productNameInLocale
     *
     * @param string|null $productNameInLocale productNameInLocale
     *
     * @return self
    
     */
    public function setProductNameInLocale($productNameInLocale)
    {
        if (is_null($productNameInLocale)) {
            throw new \InvalidArgumentException('non-nullable productNameInLocale cannot be null');
        }
        
        $this->container['productNameInLocale'] = $productNameInLocale;
        return $this;
    }

    /**
     * Gets quantity
     *
     * @return string|null
    
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param string|null $quantity quantity
     *
     * @return self
    
     */
    public function setQuantity($quantity)
    {
        if (is_null($quantity)) {
            throw new \InvalidArgumentException('non-nullable quantity cannot be null');
        }
        
        $this->container['quantity'] = $quantity;
        return $this;
    }

    /**
     * Gets sku
     *
     * @return string|null
    
     */
    public function getSku()
    {
        return $this->container['sku'];
    }

    /**
     * Sets sku
     *
     * @param string|null $sku sku
     *
     * @return self
    
     */
    public function setSku($sku)
    {
        if (is_null($sku)) {
            throw new \InvalidArgumentException('non-nullable sku cannot be null');
        }
        
        $this->container['sku'] = $sku;
        return $this;
    }
}
