<?php

/**
 * PackageTypesApi
 * PHP version 7.4
 *
 * @category Class
 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 */

/**
 * Ship With Walmart
 *
 * This class is auto-generated by the OpenAPI generator v7.12.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Apis\MP\US;

use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Promise\PromiseInterface;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use Walmart\Apis\BaseApi;
use Walmart\ApiException;
use Walmart\ObjectSerializer;

/**
 * PackageTypesApi Class Doc Comment
 *
 * @category Class
 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class PackageTypesApi extends BaseApi
{
    /**
     * @var string[] $contentTypes
     */
    public const contentTypes = [
        'supportedCarrierPackageTypes' => 'application/json',
    ];

    /**
     * Operation supportedCarrierPackageTypes
     *
     * Supported carrier package types
     *
     * @param  string $carrierShortName (Required) carrierShortName fetched from carrier API response or pass 'ALL' to fetch all package types of supported carriers (required)
     * @param  string $wmSecAccessToken (Required) The access token retrieved in the Token API call (optional)
     * @param  string $wmConsumerChannelType A unique ID to track the consumer request by channel. Use the Consumer Channel Type received during onboarding (optional)
     * @param  string $wmQosCorrelationId (Required) A unique ID which identifies each API call and used to track and debug issues; use a random generated GUID for this ID (optional)
     * @param  string $wmSvcName (Required) Walmart Service Name (optional)
     *
     * @throws \Walmart\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Walmart\Models\MP\US\Shipping\SupportedCarrierPackageTypes200Response
     */
    public function supportedCarrierPackageTypes(
        string $carrierShortName,
        
        ?string $wmSecAccessToken = null,
        
        ?string $wmConsumerChannelType = null,
        
        ?string $wmQosCorrelationId = null,
        
        ?string $wmSvcName = null
        ): \Walmart\Models\MP\US\Shipping\SupportedCarrierPackageTypes200Response {
        return $this->supportedCarrierPackageTypesWithHttpInfo($carrierShortName, $wmSecAccessToken, $wmConsumerChannelType, $wmQosCorrelationId, $wmSvcName);
    }

    /**
     * Operation supportedCarrierPackageTypesWithHttpInfo
     *
     * Supported carrier package types
     *
     * @param  string $carrierShortName (Required) carrierShortName fetched from carrier API response or pass 'ALL' to fetch all package types of supported carriers (required)
     * @param  string $wmSecAccessToken (Required) The access token retrieved in the Token API call (optional)
     * @param  string $wmConsumerChannelType A unique ID to track the consumer request by channel. Use the Consumer Channel Type received during onboarding (optional)
     * @param  string $wmQosCorrelationId (Required) A unique ID which identifies each API call and used to track and debug issues; use a random generated GUID for this ID (optional)
     * @param  string $wmSvcName (Required) Walmart Service Name (optional)
     *
     * @throws \Walmart\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Walmart\Models\MP\US\Shipping\SupportedCarrierPackageTypes200Response
     */
    protected function supportedCarrierPackageTypesWithHttpInfo(
        string $carrierShortName,
    
        ?string $wmSecAccessToken = null,
    
        ?string $wmConsumerChannelType = null,
    
        ?string $wmQosCorrelationId = null,
    
        ?string $wmSvcName = null,
    ): \Walmart\Models\MP\US\Shipping\SupportedCarrierPackageTypes200Response {
        $request = $this->supportedCarrierPackageTypesRequest($carrierShortName, $wmSecAccessToken, $wmConsumerChannelType, $wmQosCorrelationId, $wmSvcName);
        $this->writeDebug($request);
        $this->writeDebug((string) $request->getBody());

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
                $this->writeDebug($response);
                $this->writeDebug((string) $response->getBody());
            } catch (RequestException $e) {
                $hasResponse = !empty($e->hasResponse());
                $body = (string) ($hasResponse ? $e->getResponse()->getBody() : '[NULL response]');
                $this->writeDebug($e->getResponse());
                $this->writeDebug($body);

                throw new ApiException(
                    "[{$e->getCode()}] {$body}",
                    (int) $e->getCode(),
                    $hasResponse ? $e->getResponse()->getHeaders() : null,
                    $body
                );
            } catch (ConnectException $e) {
                $this->writeDebug($e->getMessage());

                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }
            switch ($statusCode) {
                case 200:
                    if ('\Walmart\Models\MP\US\Shipping\SupportedCarrierPackageTypes200Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Walmart\Models\MP\US\Shipping\SupportedCarrierPackageTypes200Response' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return ObjectSerializer::deserialize($content, '\Walmart\Models\MP\US\Shipping\SupportedCarrierPackageTypes200Response', $response->getHeaders());
            }

            $returnType = '\Walmart\Models\MP\US\Shipping\SupportedCarrierPackageTypes200Response';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return ObjectSerializer::deserialize($content, $returnType, $response->getHeaders());
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Walmart\Models\MP\US\Shipping\SupportedCarrierPackageTypes200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }

            $this->writeDebug($e);
            throw $e;
        }
    }

    /**
     * Operation supportedCarrierPackageTypesAsync
     *
     * Supported carrier package types
     *
     * @param  string $carrierShortName (Required) carrierShortName fetched from carrier API response or pass 'ALL' to fetch all package types of supported carriers (required)
     * @param  string $wmSecAccessToken (Required) The access token retrieved in the Token API call (optional)
     * @param  string $wmConsumerChannelType A unique ID to track the consumer request by channel. Use the Consumer Channel Type received during onboarding (optional)
     * @param  string $wmQosCorrelationId (Required) A unique ID which identifies each API call and used to track and debug issues; use a random generated GUID for this ID (optional)
     * @param  string $wmSvcName (Required) Walmart Service Name (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function supportedCarrierPackageTypesAsync(
        string $carrierShortName,
        
        ?string $wmSecAccessToken = null,
        
        ?string $wmConsumerChannelType = null,
        
        ?string $wmQosCorrelationId = null,
        
        ?string $wmSvcName = null
        
    ): PromiseInterface {
        return $this->supportedCarrierPackageTypesAsyncWithHttpInfo($carrierShortName, $wmSecAccessToken, $wmConsumerChannelType, $wmQosCorrelationId, $wmSvcName)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation supportedCarrierPackageTypesAsyncWithHttpInfo
     *
     * Supported carrier package types
     *
     * @param  string $carrierShortName (Required) carrierShortName fetched from carrier API response or pass 'ALL' to fetch all package types of supported carriers (required)
     * @param  string $wmSecAccessToken (Required) The access token retrieved in the Token API call (optional)
     * @param  string $wmConsumerChannelType A unique ID to track the consumer request by channel. Use the Consumer Channel Type received during onboarding (optional)
     * @param  string $wmQosCorrelationId (Required) A unique ID which identifies each API call and used to track and debug issues; use a random generated GUID for this ID (optional)
     * @param  string $wmSvcName (Required) Walmart Service Name (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    protected function supportedCarrierPackageTypesAsyncWithHttpInfo(
        string $carrierShortName,
    
        ?string $wmSecAccessToken = null,
    
        ?string $wmConsumerChannelType = null,
    
        ?string $wmQosCorrelationId = null,
    
        ?string $wmSvcName = null,
    ): PromiseInterface {
        $returnType = '\Walmart\Models\MP\US\Shipping\SupportedCarrierPackageTypes200Response';
        $request = $this->supportedCarrierPackageTypesRequest($carrierShortName, $wmSecAccessToken, $wmConsumerChannelType, $wmQosCorrelationId, $wmSvcName);
        $this->writeDebug($request);
        $this->writeDebug((string) $request->getBody());

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $this->writeDebug($response);
                    $this->writeDebug((string) $response->getBody());if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return ObjectSerializer::deserialize($content, $returnType, $response->getHeaders());},
                function ($exception) {
                    $response = $exception->getResponse();
                    $hasResponse = !empty($response);
                    $body = (string) ($hasResponse ? $response->getBody() : '[NULL response]');
                    $this->writeDebug($response);
                    $statusCode = $hasResponse ? $response->getStatusCode() : $exception->getCode();

                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $body,
                    );
                }
            );
    }

    /**
     * Create request for operation 'supportedCarrierPackageTypes'
     *
     * @param  string $carrierShortName (Required) carrierShortName fetched from carrier API response or pass 'ALL' to fetch all package types of supported carriers (required)
     * @param  string $wmSecAccessToken (Required) The access token retrieved in the Token API call (optional)
     * @param  string $wmConsumerChannelType A unique ID to track the consumer request by channel. Use the Consumer Channel Type received during onboarding (optional)
     * @param  string $wmQosCorrelationId (Required) A unique ID which identifies each API call and used to track and debug issues; use a random generated GUID for this ID (optional)
     * @param  string $wmSvcName (Required) Walmart Service Name (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function supportedCarrierPackageTypesRequest(
        string $carrierShortName,
    
        ?string $wmSecAccessToken = null,
    
        ?string $wmConsumerChannelType = null,
    
        ?string $wmQosCorrelationId = null,
    
        ?string $wmSvcName = null,
    ): Request {
        $contentType = self::contentTypes['supportedCarrierPackageTypes'];
        
        // verify the required parameter 'carrierShortName' is set
        if ($carrierShortName === null || (is_array($carrierShortName) && count($carrierShortName) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $carrierShortName when calling supportedCarrierPackageTypes'
            );
        }
        $resourcePath = '/v3/shipping/labels/carriers/{carrierShortName}/package-types';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;
        $method = 'GET';

        // header params
        if ($wmSecAccessToken !== null) {
            $headerParams['wm_sec.access_token'] = ObjectSerializer::toHeaderValue($wmSecAccessToken);
        }
        if ($wmConsumerChannelType !== null) {
            $headerParams['wm_consumer.channel.type'] = ObjectSerializer::toHeaderValue($wmConsumerChannelType);
        }
        if ($wmQosCorrelationId !== null) {
            $headerParams['wm_qos.correlation_id'] = ObjectSerializer::toHeaderValue($wmQosCorrelationId);
        }
        if ($wmSvcName !== null) {
            $headerParams['wm_svc.name'] = ObjectSerializer::toHeaderValue($wmSvcName);
        }

        // path params
        if ($carrierShortName !== null) {
            $resourcePath = str_replace(
                '{' . 'carrierShortName' . '}',
                ObjectSerializer::toPathValue($carrierShortName),
                $resourcePath
            );
        }

        $headers = $this->headerSelector->selectHeaders(
            ['application/json'],
            $contentType,
            $multipart
        );

        $defaultHeaders = parent::getDefaultHeaders();
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }
        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        // for model (json/xml)
        if (count($formParams) > 0) {if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);
            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        $query = ObjectSerializer::buildQuery($queryParams);
        $requestInfo = [
            'path' => $resourcePath,
            'method' => $method,
            'timestamp' => $defaultHeaders['WM_SEC.TIMESTAMP'],
            'query' => $query,
        ];
        
        $operationHost = $this->config->getHost();
        return new Request(
            $method,
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }
    }

