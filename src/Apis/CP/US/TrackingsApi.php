<?php

/**
 * TrackingsApi
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

namespace Walmart\Apis\CP\US;

use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Promise\PromiseInterface;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use Walmart\Apis\BaseApi;
use Walmart\ApiException;
use Walmart\ObjectSerializer;

/**
 * TrackingsApi Class Doc Comment
 *
 * @category Class
 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class TrackingsApi extends BaseApi
{
    /**
     * @var string[] $contentTypes
     */
    public const contentTypes = [
        'discardLabel' => 'application/json',
        'downloadLabel' => 'application/json',
    ];

    /**
     * Operation discardLabel
     *
     * Discard label
     *
     * @param  string $carrierShortName (Required) carrierShortName from getCarriers API (required)
     * @param  string $trackingNo (Required) trackingNo (required)
     * @param  string $wmSecAccessToken (Required) The access token retrieved in the Token API call (optional)
     * @param  string $wmConsumerChannelType A unique ID to track the consumer request by channel. Use the Consumer Channel Type received during onboarding (optional)
     * @param  string $wmQosCorrelationId (Required) A unique ID which identifies each API call and used to track and debug issues; use a random generated GUID for this ID (optional)
     * @param  string $wmSvcName (Required) Walmart Service Name (optional)
     *
     * @throws \Walmart\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Walmart\Models\CP\US\Feeds\DiscardLabel200Response
     */
    public function discardLabel(
        string $carrierShortName,
        
        string $trackingNo,
        
        ?string $wmSecAccessToken = null,
        
        ?string $wmConsumerChannelType = null,
        
        ?string $wmQosCorrelationId = null,
        
        ?string $wmSvcName = null
        ): \Walmart\Models\CP\US\Feeds\DiscardLabel200Response {
        return $this->discardLabelWithHttpInfo($carrierShortName, $trackingNo, $wmSecAccessToken, $wmConsumerChannelType, $wmQosCorrelationId, $wmSvcName);
    }

    /**
     * Operation discardLabelWithHttpInfo
     *
     * Discard label
     *
     * @param  string $carrierShortName (Required) carrierShortName from getCarriers API (required)
     * @param  string $trackingNo (Required) trackingNo (required)
     * @param  string $wmSecAccessToken (Required) The access token retrieved in the Token API call (optional)
     * @param  string $wmConsumerChannelType A unique ID to track the consumer request by channel. Use the Consumer Channel Type received during onboarding (optional)
     * @param  string $wmQosCorrelationId (Required) A unique ID which identifies each API call and used to track and debug issues; use a random generated GUID for this ID (optional)
     * @param  string $wmSvcName (Required) Walmart Service Name (optional)
     *
     * @throws \Walmart\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Walmart\Models\CP\US\Feeds\DiscardLabel200Response
     */
    protected function discardLabelWithHttpInfo(
        string $carrierShortName,
    
        string $trackingNo,
    
        ?string $wmSecAccessToken = null,
    
        ?string $wmConsumerChannelType = null,
    
        ?string $wmQosCorrelationId = null,
    
        ?string $wmSvcName = null,
    ): \Walmart\Models\CP\US\Feeds\DiscardLabel200Response {
        $request = $this->discardLabelRequest($carrierShortName, $trackingNo, $wmSecAccessToken, $wmConsumerChannelType, $wmQosCorrelationId, $wmSvcName);
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
                    if ('\Walmart\Models\CP\US\Feeds\DiscardLabel200Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Walmart\Models\CP\US\Feeds\DiscardLabel200Response' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return ObjectSerializer::deserialize($content, '\Walmart\Models\CP\US\Feeds\DiscardLabel200Response', $response->getHeaders());
            }

            $returnType = '\Walmart\Models\CP\US\Feeds\DiscardLabel200Response';
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
                        '\Walmart\Models\CP\US\Feeds\DiscardLabel200Response',
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
     * Operation discardLabelAsync
     *
     * Discard label
     *
     * @param  string $carrierShortName (Required) carrierShortName from getCarriers API (required)
     * @param  string $trackingNo (Required) trackingNo (required)
     * @param  string $wmSecAccessToken (Required) The access token retrieved in the Token API call (optional)
     * @param  string $wmConsumerChannelType A unique ID to track the consumer request by channel. Use the Consumer Channel Type received during onboarding (optional)
     * @param  string $wmQosCorrelationId (Required) A unique ID which identifies each API call and used to track and debug issues; use a random generated GUID for this ID (optional)
     * @param  string $wmSvcName (Required) Walmart Service Name (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function discardLabelAsync(
        string $carrierShortName,
        
        string $trackingNo,
        
        ?string $wmSecAccessToken = null,
        
        ?string $wmConsumerChannelType = null,
        
        ?string $wmQosCorrelationId = null,
        
        ?string $wmSvcName = null
        
    ): PromiseInterface {
        return $this->discardLabelAsyncWithHttpInfo($carrierShortName, $trackingNo, $wmSecAccessToken, $wmConsumerChannelType, $wmQosCorrelationId, $wmSvcName)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation discardLabelAsyncWithHttpInfo
     *
     * Discard label
     *
     * @param  string $carrierShortName (Required) carrierShortName from getCarriers API (required)
     * @param  string $trackingNo (Required) trackingNo (required)
     * @param  string $wmSecAccessToken (Required) The access token retrieved in the Token API call (optional)
     * @param  string $wmConsumerChannelType A unique ID to track the consumer request by channel. Use the Consumer Channel Type received during onboarding (optional)
     * @param  string $wmQosCorrelationId (Required) A unique ID which identifies each API call and used to track and debug issues; use a random generated GUID for this ID (optional)
     * @param  string $wmSvcName (Required) Walmart Service Name (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    protected function discardLabelAsyncWithHttpInfo(
        string $carrierShortName,
    
        string $trackingNo,
    
        ?string $wmSecAccessToken = null,
    
        ?string $wmConsumerChannelType = null,
    
        ?string $wmQosCorrelationId = null,
    
        ?string $wmSvcName = null,
    ): PromiseInterface {
        $returnType = '\Walmart\Models\CP\US\Feeds\DiscardLabel200Response';
        $request = $this->discardLabelRequest($carrierShortName, $trackingNo, $wmSecAccessToken, $wmConsumerChannelType, $wmQosCorrelationId, $wmSvcName);
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
     * Create request for operation 'discardLabel'
     *
     * @param  string $carrierShortName (Required) carrierShortName from getCarriers API (required)
     * @param  string $trackingNo (Required) trackingNo (required)
     * @param  string $wmSecAccessToken (Required) The access token retrieved in the Token API call (optional)
     * @param  string $wmConsumerChannelType A unique ID to track the consumer request by channel. Use the Consumer Channel Type received during onboarding (optional)
     * @param  string $wmQosCorrelationId (Required) A unique ID which identifies each API call and used to track and debug issues; use a random generated GUID for this ID (optional)
     * @param  string $wmSvcName (Required) Walmart Service Name (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function discardLabelRequest(
        string $carrierShortName,
    
        string $trackingNo,
    
        ?string $wmSecAccessToken = null,
    
        ?string $wmConsumerChannelType = null,
    
        ?string $wmQosCorrelationId = null,
    
        ?string $wmSvcName = null,
    ): Request {
        $contentType = self::contentTypes['discardLabel'];
        
        // verify the required parameter 'carrierShortName' is set
        if ($carrierShortName === null || (is_array($carrierShortName) && count($carrierShortName) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $carrierShortName when calling discardLabel'
            );
        }
        // verify the required parameter 'trackingNo' is set
        if ($trackingNo === null || (is_array($trackingNo) && count($trackingNo) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $trackingNo when calling discardLabel'
            );
        }
        $resourcePath = '/v3/shipping/labels/carriers/{carrierShortName}/trackings/{trackingNo}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;
        $method = 'DELETE';

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
        if ($trackingNo !== null) {
            $resourcePath = str_replace(
                '{' . 'trackingNo' . '}',
                ObjectSerializer::toPathValue($trackingNo),
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
    
    /**
     * Operation downloadLabel
     *
     * Download label
     *
     * @param  string $carrierShortName (Required) carrierShortName from getCarriers API (required)
     * @param  string $trackingNo (Required) trackingNo (required)
     * @param  string $wmSecAccessToken (Required) The access token retrieved in the Token API call (optional)
     * @param  string $wmConsumerChannelType A unique ID to track the consumer request by channel. Use the Consumer Channel Type received during onboarding (optional)
     * @param  string $wmQosCorrelationId (Required) A unique ID which identifies each API call and used to track and debug issues; use a random generated GUID for this ID (optional)
     * @param  string $wmSvcName (Required) Walmart Service Name (optional)
     *
     * @throws \Walmart\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function downloadLabel(
        string $carrierShortName,
        
        string $trackingNo,
        
        ?string $wmSecAccessToken = null,
        
        ?string $wmConsumerChannelType = null,
        
        ?string $wmQosCorrelationId = null,
        
        ?string $wmSvcName = null
        ): void {
        $this->downloadLabelWithHttpInfo($carrierShortName, $trackingNo, $wmSecAccessToken, $wmConsumerChannelType, $wmQosCorrelationId, $wmSvcName);
    }

    /**
     * Operation downloadLabelWithHttpInfo
     *
     * Download label
     *
     * @param  string $carrierShortName (Required) carrierShortName from getCarriers API (required)
     * @param  string $trackingNo (Required) trackingNo (required)
     * @param  string $wmSecAccessToken (Required) The access token retrieved in the Token API call (optional)
     * @param  string $wmConsumerChannelType A unique ID to track the consumer request by channel. Use the Consumer Channel Type received during onboarding (optional)
     * @param  string $wmQosCorrelationId (Required) A unique ID which identifies each API call and used to track and debug issues; use a random generated GUID for this ID (optional)
     * @param  string $wmSvcName (Required) Walmart Service Name (optional)
     *
     * @throws \Walmart\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return null
     */
    protected function downloadLabelWithHttpInfo(
        string $carrierShortName,
    
        string $trackingNo,
    
        ?string $wmSecAccessToken = null,
    
        ?string $wmConsumerChannelType = null,
    
        ?string $wmQosCorrelationId = null,
    
        ?string $wmSvcName = null,
    ): void {
        $request = $this->downloadLabelRequest($carrierShortName, $trackingNo, $wmSecAccessToken, $wmConsumerChannelType, $wmQosCorrelationId, $wmSvcName);
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
            return [null, $statusCode, $response->getHeaders()];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            $this->writeDebug($e);
            throw $e;
        }
    }

    /**
     * Operation downloadLabelAsync
     *
     * Download label
     *
     * @param  string $carrierShortName (Required) carrierShortName from getCarriers API (required)
     * @param  string $trackingNo (Required) trackingNo (required)
     * @param  string $wmSecAccessToken (Required) The access token retrieved in the Token API call (optional)
     * @param  string $wmConsumerChannelType A unique ID to track the consumer request by channel. Use the Consumer Channel Type received during onboarding (optional)
     * @param  string $wmQosCorrelationId (Required) A unique ID which identifies each API call and used to track and debug issues; use a random generated GUID for this ID (optional)
     * @param  string $wmSvcName (Required) Walmart Service Name (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function downloadLabelAsync(
        string $carrierShortName,
        
        string $trackingNo,
        
        ?string $wmSecAccessToken = null,
        
        ?string $wmConsumerChannelType = null,
        
        ?string $wmQosCorrelationId = null,
        
        ?string $wmSvcName = null
        
    ): PromiseInterface {
        return $this->downloadLabelAsyncWithHttpInfo($carrierShortName, $trackingNo, $wmSecAccessToken, $wmConsumerChannelType, $wmQosCorrelationId, $wmSvcName)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation downloadLabelAsyncWithHttpInfo
     *
     * Download label
     *
     * @param  string $carrierShortName (Required) carrierShortName from getCarriers API (required)
     * @param  string $trackingNo (Required) trackingNo (required)
     * @param  string $wmSecAccessToken (Required) The access token retrieved in the Token API call (optional)
     * @param  string $wmConsumerChannelType A unique ID to track the consumer request by channel. Use the Consumer Channel Type received during onboarding (optional)
     * @param  string $wmQosCorrelationId (Required) A unique ID which identifies each API call and used to track and debug issues; use a random generated GUID for this ID (optional)
     * @param  string $wmSvcName (Required) Walmart Service Name (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    protected function downloadLabelAsyncWithHttpInfo(
        string $carrierShortName,
    
        string $trackingNo,
    
        ?string $wmSecAccessToken = null,
    
        ?string $wmConsumerChannelType = null,
    
        ?string $wmQosCorrelationId = null,
    
        ?string $wmSvcName = null,
    ): PromiseInterface {
        $returnType = '';
        $request = $this->downloadLabelRequest($carrierShortName, $trackingNo, $wmSecAccessToken, $wmConsumerChannelType, $wmQosCorrelationId, $wmSvcName);
        $this->writeDebug($request);
        $this->writeDebug((string) $request->getBody());

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $this->writeDebug($response);
                    $this->writeDebug((string) $response->getBody());return [null, $response->getStatusCode(), $response->getHeaders()];},
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
     * Create request for operation 'downloadLabel'
     *
     * @param  string $carrierShortName (Required) carrierShortName from getCarriers API (required)
     * @param  string $trackingNo (Required) trackingNo (required)
     * @param  string $wmSecAccessToken (Required) The access token retrieved in the Token API call (optional)
     * @param  string $wmConsumerChannelType A unique ID to track the consumer request by channel. Use the Consumer Channel Type received during onboarding (optional)
     * @param  string $wmQosCorrelationId (Required) A unique ID which identifies each API call and used to track and debug issues; use a random generated GUID for this ID (optional)
     * @param  string $wmSvcName (Required) Walmart Service Name (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function downloadLabelRequest(
        string $carrierShortName,
    
        string $trackingNo,
    
        ?string $wmSecAccessToken = null,
    
        ?string $wmConsumerChannelType = null,
    
        ?string $wmQosCorrelationId = null,
    
        ?string $wmSvcName = null,
    ): Request {
        $contentType = self::contentTypes['downloadLabel'];
        
        // verify the required parameter 'carrierShortName' is set
        if ($carrierShortName === null || (is_array($carrierShortName) && count($carrierShortName) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $carrierShortName when calling downloadLabel'
            );
        }
        // verify the required parameter 'trackingNo' is set
        if ($trackingNo === null || (is_array($trackingNo) && count($trackingNo) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $trackingNo when calling downloadLabel'
            );
        }
        $resourcePath = '/v3/shipping/labels/carriers/{carrierShortName}/trackings/{trackingNo}';
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
        if ($trackingNo !== null) {
            $resourcePath = str_replace(
                '{' . 'trackingNo' . '}',
                ObjectSerializer::toPathValue($trackingNo),
                $resourcePath
            );
        }

        $headers = $this->headerSelector->selectHeaders(
            ['text/plain'],
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

