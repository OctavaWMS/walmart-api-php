<?php

/**
 * CreateLabelRequestReturnAddress
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
 * CreateLabelRequestReturnAddress Class Doc Comment
 *
 * @category Class

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class CreateLabelRequestReturnAddress extends BaseModel
{public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'createLabel_request_returnAddress';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'addressLine1' => 'string',
        'addressLine2' => 'string',
        'city' => 'string',
        'contactName' => 'string',
        'country' => 'string',
        'email' => 'string',
        'phone' => 'string',
        'postalCode' => 'string',
        'shipNode' => 'string',
        'state' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'addressLine1' => null,
        'addressLine2' => null,
        'city' => null,
        'contactName' => null,
        'country' => null,
        'email' => null,
        'phone' => null,
        'postalCode' => null,
        'shipNode' => null,
        'state' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'addressLine1' => false,
		'addressLine2' => false,
		'city' => false,
		'contactName' => false,
		'country' => false,
		'email' => false,
		'phone' => false,
		'postalCode' => false,
		'shipNode' => false,
		'state' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'addressLine1' => 'addressLine1',
        'addressLine2' => 'addressLine2',
        'city' => 'city',
        'contactName' => 'contactName',
        'country' => 'country',
        'email' => 'email',
        'phone' => 'phone',
        'postalCode' => 'postalCode',
        'shipNode' => 'shipNode',
        'state' => 'state'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'addressLine1' => 'setAddressLine1',
        'addressLine2' => 'setAddressLine2',
        'city' => 'setCity',
        'contactName' => 'setContactName',
        'country' => 'setCountry',
        'email' => 'setEmail',
        'phone' => 'setPhone',
        'postalCode' => 'setPostalCode',
        'shipNode' => 'setShipNode',
        'state' => 'setState'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'addressLine1' => 'getAddressLine1',
        'addressLine2' => 'getAddressLine2',
        'city' => 'getCity',
        'contactName' => 'getContactName',
        'country' => 'getCountry',
        'email' => 'getEmail',
        'phone' => 'getPhone',
        'postalCode' => 'getPostalCode',
        'shipNode' => 'getShipNode',
        'state' => 'getState'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('addressLine1', $data ?? [], null);
        $this->setIfExists('addressLine2', $data ?? [], null);
        $this->setIfExists('city', $data ?? [], null);
        $this->setIfExists('contactName', $data ?? [], null);
        $this->setIfExists('country', $data ?? [], null);
        $this->setIfExists('email', $data ?? [], null);
        $this->setIfExists('phone', $data ?? [], null);
        $this->setIfExists('postalCode', $data ?? [], null);
        $this->setIfExists('shipNode', $data ?? [], null);
        $this->setIfExists('state', $data ?? [], null);
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
     * Gets addressLine1
     *
     * @return string|null
    
     */
    public function getAddressLine1()
    {
        return $this->container['addressLine1'];
    }

    /**
     * Sets addressLine1
     *
     * @param string|null $addressLine1 addressLine1
     *
     * @return self
    
     */
    public function setAddressLine1($addressLine1)
    {
        if (is_null($addressLine1)) {
            throw new \InvalidArgumentException('non-nullable addressLine1 cannot be null');
        }
        
        $this->container['addressLine1'] = $addressLine1;
        return $this;
    }

    /**
     * Gets addressLine2
     *
     * @return string|null
    
     */
    public function getAddressLine2()
    {
        return $this->container['addressLine2'];
    }

    /**
     * Sets addressLine2
     *
     * @param string|null $addressLine2 addressLine2
     *
     * @return self
    
     */
    public function setAddressLine2($addressLine2)
    {
        if (is_null($addressLine2)) {
            throw new \InvalidArgumentException('non-nullable addressLine2 cannot be null');
        }
        
        $this->container['addressLine2'] = $addressLine2;
        return $this;
    }

    /**
     * Gets city
     *
     * @return string|null
    
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string|null $city city
     *
     * @return self
    
     */
    public function setCity($city)
    {
        if (is_null($city)) {
            throw new \InvalidArgumentException('non-nullable city cannot be null');
        }
        
        $this->container['city'] = $city;
        return $this;
    }

    /**
     * Gets contactName
     *
     * @return string|null
    
     */
    public function getContactName()
    {
        return $this->container['contactName'];
    }

    /**
     * Sets contactName
     *
     * @param string|null $contactName contactName
     *
     * @return self
    
     */
    public function setContactName($contactName)
    {
        if (is_null($contactName)) {
            throw new \InvalidArgumentException('non-nullable contactName cannot be null');
        }
        
        $this->container['contactName'] = $contactName;
        return $this;
    }

    /**
     * Gets country
     *
     * @return string|null
    
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string|null $country country
     *
     * @return self
    
     */
    public function setCountry($country)
    {
        if (is_null($country)) {
            throw new \InvalidArgumentException('non-nullable country cannot be null');
        }
        
        $this->container['country'] = $country;
        return $this;
    }

    /**
     * Gets email
     *
     * @return string|null
    
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string|null $email email
     *
     * @return self
    
     */
    public function setEmail($email)
    {
        if (is_null($email)) {
            throw new \InvalidArgumentException('non-nullable email cannot be null');
        }
        
        $this->container['email'] = $email;
        return $this;
    }

    /**
     * Gets phone
     *
     * @return string|null
    
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param string|null $phone phone
     *
     * @return self
    
     */
    public function setPhone($phone)
    {
        if (is_null($phone)) {
            throw new \InvalidArgumentException('non-nullable phone cannot be null');
        }
        
        $this->container['phone'] = $phone;
        return $this;
    }

    /**
     * Gets postalCode
     *
     * @return string|null
    
     */
    public function getPostalCode()
    {
        return $this->container['postalCode'];
    }

    /**
     * Sets postalCode
     *
     * @param string|null $postalCode postalCode
     *
     * @return self
    
     */
    public function setPostalCode($postalCode)
    {
        if (is_null($postalCode)) {
            throw new \InvalidArgumentException('non-nullable postalCode cannot be null');
        }
        
        $this->container['postalCode'] = $postalCode;
        return $this;
    }

    /**
     * Gets shipNode
     *
     * @return string|null
    
     */
    public function getShipNode()
    {
        return $this->container['shipNode'];
    }

    /**
     * Sets shipNode
     *
     * @param string|null $shipNode shipNode
     *
     * @return self
    
     */
    public function setShipNode($shipNode)
    {
        if (is_null($shipNode)) {
            throw new \InvalidArgumentException('non-nullable shipNode cannot be null');
        }
        
        $this->container['shipNode'] = $shipNode;
        return $this;
    }

    /**
     * Gets state
     *
     * @return string|null
    
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string|null $state state
     *
     * @return self
    
     */
    public function setState($state)
    {
        if (is_null($state)) {
            throw new \InvalidArgumentException('non-nullable state cannot be null');
        }
        
        $this->container['state'] = $state;
        return $this;
    }
}
