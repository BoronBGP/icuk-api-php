<?php
/**
 * BroadbandStabilityApi
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * API Documentation
 *
 * The ICUK API provides an interface to the reseller control panel which can be used to control the provisioning and configuration of facilities remotely
 *
 * The version of the OpenAPI document: v1
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use OpenAPI\Client\ApiException;
use OpenAPI\Client\Configuration;
use OpenAPI\Client\HeaderSelector;
use OpenAPI\Client\ObjectSerializer;

/**
 * BroadbandStabilityApi Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class BroadbandStabilityApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /** @var string[] $contentTypes **/
    public const contentTypes = [
        'broadbandStabilityCurrentUsernameGet' => [
            'application/json',
        ],
        'broadbandStabilityPut' => [
            'application/json',
            'text/json',
            'application/*+json',
        ],
    ];

/**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation broadbandStabilityCurrentUsernameGet
     *
     * Gets the current stability option of the line. The stability option will change once the order is complete
     *
     * @param  string $username Name of the user (required)
     * @param  string $api_platform The API provides access to two separate platforms: test and live. The test platform allows you to experiment with the API without incurring charges or affecting customer orders. The live platform allows you to make real world changes. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['broadbandStabilityCurrentUsernameGet'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return string|\OpenAPI\Client\Model\ApiExceptionResponse
     */
    public function broadbandStabilityCurrentUsernameGet($username, $api_platform, string $contentType = self::contentTypes['broadbandStabilityCurrentUsernameGet'][0])
    {
        list($response) = $this->broadbandStabilityCurrentUsernameGetWithHttpInfo($username, $api_platform, $contentType);
        return $response;
    }

    /**
     * Operation broadbandStabilityCurrentUsernameGetWithHttpInfo
     *
     * Gets the current stability option of the line. The stability option will change once the order is complete
     *
     * @param  string $username Name of the user (required)
     * @param  string $api_platform The API provides access to two separate platforms: test and live. The test platform allows you to experiment with the API without incurring charges or affecting customer orders. The live platform allows you to make real world changes. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['broadbandStabilityCurrentUsernameGet'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of string|\OpenAPI\Client\Model\ApiExceptionResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function broadbandStabilityCurrentUsernameGetWithHttpInfo($username, $api_platform, string $contentType = self::contentTypes['broadbandStabilityCurrentUsernameGet'][0])
    {
        $request = $this->broadbandStabilityCurrentUsernameGetRequest($username, $api_platform, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
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

            switch($statusCode) {
                case 200:
                    if ('string' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('string' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'string', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('\OpenAPI\Client\Model\ApiExceptionResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\OpenAPI\Client\Model\ApiExceptionResponse' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\ApiExceptionResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = 'string';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'string',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\ApiExceptionResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation broadbandStabilityCurrentUsernameGetAsync
     *
     * Gets the current stability option of the line. The stability option will change once the order is complete
     *
     * @param  string $username Name of the user (required)
     * @param  string $api_platform The API provides access to two separate platforms: test and live. The test platform allows you to experiment with the API without incurring charges or affecting customer orders. The live platform allows you to make real world changes. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['broadbandStabilityCurrentUsernameGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function broadbandStabilityCurrentUsernameGetAsync($username, $api_platform, string $contentType = self::contentTypes['broadbandStabilityCurrentUsernameGet'][0])
    {
        return $this->broadbandStabilityCurrentUsernameGetAsyncWithHttpInfo($username, $api_platform, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation broadbandStabilityCurrentUsernameGetAsyncWithHttpInfo
     *
     * Gets the current stability option of the line. The stability option will change once the order is complete
     *
     * @param  string $username Name of the user (required)
     * @param  string $api_platform The API provides access to two separate platforms: test and live. The test platform allows you to experiment with the API without incurring charges or affecting customer orders. The live platform allows you to make real world changes. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['broadbandStabilityCurrentUsernameGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function broadbandStabilityCurrentUsernameGetAsyncWithHttpInfo($username, $api_platform, string $contentType = self::contentTypes['broadbandStabilityCurrentUsernameGet'][0])
    {
        $returnType = 'string';
        $request = $this->broadbandStabilityCurrentUsernameGetRequest($username, $api_platform, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'broadbandStabilityCurrentUsernameGet'
     *
     * @param  string $username Name of the user (required)
     * @param  string $api_platform The API provides access to two separate platforms: test and live. The test platform allows you to experiment with the API without incurring charges or affecting customer orders. The live platform allows you to make real world changes. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['broadbandStabilityCurrentUsernameGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function broadbandStabilityCurrentUsernameGetRequest($username, $api_platform, string $contentType = self::contentTypes['broadbandStabilityCurrentUsernameGet'][0])
    {

        // verify the required parameter 'username' is set
        if ($username === null || (is_array($username) && count($username) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $username when calling broadbandStabilityCurrentUsernameGet'
            );
        }

        // verify the required parameter 'api_platform' is set
        if ($api_platform === null || (is_array($api_platform) && count($api_platform) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $api_platform when calling broadbandStabilityCurrentUsernameGet'
            );
        }


        $resourcePath = '/broadband/stability/current/{username}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // header params
        if ($api_platform !== null) {
            $headerParams['ApiPlatform'] = ObjectSerializer::toHeaderValue($api_platform);
        }

        // path params
        if ($username !== null) {
            $resourcePath = str_replace(
                '{' . 'username' . '}',
                ObjectSerializer::toPathValue($username),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['text/plain', 'application/json', 'text/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
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

        // this endpoint requires OAuth (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation broadbandStabilityPut
     *
     * Updates the stability of the line
     *
     * @param  string $api_platform The API provides access to two separate platforms: test and live. The test platform allows you to experiment with the API without incurring charges or affecting customer orders. The live platform allows you to make real world changes. (required)
     * @param  \OpenAPI\Client\Model\BroadbandStability $broadband_stability A BroadbandStability structure (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['broadbandStabilityPut'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \OpenAPI\Client\Model\BroadbandStabilityTermination|\OpenAPI\Client\Model\ApiExceptionResponse
     */
    public function broadbandStabilityPut($api_platform, $broadband_stability = null, string $contentType = self::contentTypes['broadbandStabilityPut'][0])
    {
        list($response) = $this->broadbandStabilityPutWithHttpInfo($api_platform, $broadband_stability, $contentType);
        return $response;
    }

    /**
     * Operation broadbandStabilityPutWithHttpInfo
     *
     * Updates the stability of the line
     *
     * @param  string $api_platform The API provides access to two separate platforms: test and live. The test platform allows you to experiment with the API without incurring charges or affecting customer orders. The live platform allows you to make real world changes. (required)
     * @param  \OpenAPI\Client\Model\BroadbandStability $broadband_stability A BroadbandStability structure (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['broadbandStabilityPut'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \OpenAPI\Client\Model\BroadbandStabilityTermination|\OpenAPI\Client\Model\ApiExceptionResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function broadbandStabilityPutWithHttpInfo($api_platform, $broadband_stability = null, string $contentType = self::contentTypes['broadbandStabilityPut'][0])
    {
        $request = $this->broadbandStabilityPutRequest($api_platform, $broadband_stability, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
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

            switch($statusCode) {
                case 200:
                    if ('\OpenAPI\Client\Model\BroadbandStabilityTermination' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\OpenAPI\Client\Model\BroadbandStabilityTermination' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\BroadbandStabilityTermination', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('\OpenAPI\Client\Model\ApiExceptionResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\OpenAPI\Client\Model\ApiExceptionResponse' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\ApiExceptionResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\OpenAPI\Client\Model\BroadbandStabilityTermination';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\BroadbandStabilityTermination',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\ApiExceptionResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation broadbandStabilityPutAsync
     *
     * Updates the stability of the line
     *
     * @param  string $api_platform The API provides access to two separate platforms: test and live. The test platform allows you to experiment with the API without incurring charges or affecting customer orders. The live platform allows you to make real world changes. (required)
     * @param  \OpenAPI\Client\Model\BroadbandStability $broadband_stability A BroadbandStability structure (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['broadbandStabilityPut'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function broadbandStabilityPutAsync($api_platform, $broadband_stability = null, string $contentType = self::contentTypes['broadbandStabilityPut'][0])
    {
        return $this->broadbandStabilityPutAsyncWithHttpInfo($api_platform, $broadband_stability, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation broadbandStabilityPutAsyncWithHttpInfo
     *
     * Updates the stability of the line
     *
     * @param  string $api_platform The API provides access to two separate platforms: test and live. The test platform allows you to experiment with the API without incurring charges or affecting customer orders. The live platform allows you to make real world changes. (required)
     * @param  \OpenAPI\Client\Model\BroadbandStability $broadband_stability A BroadbandStability structure (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['broadbandStabilityPut'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function broadbandStabilityPutAsyncWithHttpInfo($api_platform, $broadband_stability = null, string $contentType = self::contentTypes['broadbandStabilityPut'][0])
    {
        $returnType = '\OpenAPI\Client\Model\BroadbandStabilityTermination';
        $request = $this->broadbandStabilityPutRequest($api_platform, $broadband_stability, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'broadbandStabilityPut'
     *
     * @param  string $api_platform The API provides access to two separate platforms: test and live. The test platform allows you to experiment with the API without incurring charges or affecting customer orders. The live platform allows you to make real world changes. (required)
     * @param  \OpenAPI\Client\Model\BroadbandStability $broadband_stability A BroadbandStability structure (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['broadbandStabilityPut'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function broadbandStabilityPutRequest($api_platform, $broadband_stability = null, string $contentType = self::contentTypes['broadbandStabilityPut'][0])
    {

        // verify the required parameter 'api_platform' is set
        if ($api_platform === null || (is_array($api_platform) && count($api_platform) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $api_platform when calling broadbandStabilityPut'
            );
        }



        $resourcePath = '/broadband/stability';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // header params
        if ($api_platform !== null) {
            $headerParams['ApiPlatform'] = ObjectSerializer::toHeaderValue($api_platform);
        }



        $headers = $this->headerSelector->selectHeaders(
            ['text/plain', 'application/json', 'text/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($broadband_stability)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($broadband_stability));
            } else {
                $httpBody = $broadband_stability;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
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

        // this endpoint requires OAuth (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'PUT',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
