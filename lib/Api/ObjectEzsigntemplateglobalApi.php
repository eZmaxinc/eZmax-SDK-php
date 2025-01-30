<?php
/**
 * ObjectEzsigntemplateglobalApi
 * PHP version 7.4
 *
 * @category Class
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * eZmax API Definition (Full)
 *
 * This API expose all the functionnalities for the eZmax and eZsign applications.
 *
 * The version of the OpenAPI document: 1.2.2
 * Contact: support-api@ezmax.ca
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.11.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace eZmaxAPI\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use eZmaxAPI\ApiException;
use eZmaxAPI\Configuration;
use eZmaxAPI\HeaderSelector;
use eZmaxAPI\ObjectSerializer;
use eZmaxAPI\RequestSignature;

/**
 * ObjectEzsigntemplateglobalApi Class Doc Comment
 *
 * @category Class
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ObjectEzsigntemplateglobalApi
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
        'ezsigntemplateglobalGetAutocompleteV2' => [
            'application/json',
        ],
        'ezsigntemplateglobalGetObjectV2' => [
            'application/json',
        ],
    ];

    /** @var array[] $objEzmaxConfig **/
    public const objEzmaxConfig = [
        'ezsigntemplateglobalGetAutocompleteV2' => [
            'permissions' => [
                'All',
            ],
            'usertypeextra' => [
                'AgentBroker',
            ],
            'authorizationsources' => [
                'Authorization',
            ],
            'deprecated' => false,
        ],
        'ezsigntemplateglobalGetObjectV2' => [
            'permissions' => [
                'All',
            ],
            'usertypeextra' => [
                'AgentBroker',
            ],
            'authorizationsources' => [
                'Authorization',
            ],
            'deprecated' => false,
        ],
    ];
/**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ?ClientInterface $client = null,
        ?Configuration $config = null,
        ?HeaderSelector $selector = null,
        int $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: Configuration::getDefaultConfiguration();
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
     * Operation ezsigntemplateglobalGetAutocompleteV2
     *
     * Retrieve Ezsigntemplateglobals and IDs
     *
     * @param  string $sSelector The type of Ezsigntemplateglobals to return (required)
     * @param  string|null $eFilterActive Specify which results we want to display. (optional, default to 'Active')
     * @param  string|null $sQuery Allow to filter the returned results (optional)
     * @param  \eZmaxAPI\Model\HeaderAcceptLanguage|null $acceptLanguage acceptLanguage (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['ezsigntemplateglobalGetAutocompleteV2'] to see the possible values for this operation
     *
     * @throws \eZmaxAPI\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \eZmaxAPI\Model\EzsigntemplateglobalGetAutocompleteV2Response
     */
    public function ezsigntemplateglobalGetAutocompleteV2($sSelector, $eFilterActive = 'Active', $sQuery = null, $acceptLanguage = null, string $contentType = self::contentTypes['ezsigntemplateglobalGetAutocompleteV2'][0])
    {
        list($response) = $this->ezsigntemplateglobalGetAutocompleteV2WithHttpInfo($sSelector, $eFilterActive, $sQuery, $acceptLanguage, $contentType);
        return $response;
    }

    /**
     * Operation ezsigntemplateglobalGetAutocompleteV2WithHttpInfo
     *
     * Retrieve Ezsigntemplateglobals and IDs
     *
     * @param  string $sSelector The type of Ezsigntemplateglobals to return (required)
     * @param  string|null $eFilterActive Specify which results we want to display. (optional, default to 'Active')
     * @param  string|null $sQuery Allow to filter the returned results (optional)
     * @param  \eZmaxAPI\Model\HeaderAcceptLanguage|null $acceptLanguage (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['ezsigntemplateglobalGetAutocompleteV2'] to see the possible values for this operation
     *
     * @throws \eZmaxAPI\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \eZmaxAPI\Model\EzsigntemplateglobalGetAutocompleteV2Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function ezsigntemplateglobalGetAutocompleteV2WithHttpInfo($sSelector, $eFilterActive = 'Active', $sQuery = null, $acceptLanguage = null, string $contentType = self::contentTypes['ezsigntemplateglobalGetAutocompleteV2'][0])
    {
        $request = $this->ezsigntemplateglobalGetAutocompleteV2Request($sSelector, $eFilterActive, $sQuery, $acceptLanguage, $contentType);

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


            switch($statusCode) {
                case 200:
                    if ('\eZmaxAPI\Model\EzsigntemplateglobalGetAutocompleteV2Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\eZmaxAPI\Model\EzsigntemplateglobalGetAutocompleteV2Response' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\eZmaxAPI\Model\EzsigntemplateglobalGetAutocompleteV2Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }
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

            $returnType = '\eZmaxAPI\Model\EzsigntemplateglobalGetAutocompleteV2Response';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    try {
                        $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                    } catch (\JsonException $exception) {
                        throw new ApiException(
                            sprintf(
                                'Error JSON decoding server response (%s)',
                                $request->getUri()
                            ),
                            $statusCode,
                            $response->getHeaders(),
                            $content
                        );
                    }
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
                        '\eZmaxAPI\Model\EzsigntemplateglobalGetAutocompleteV2Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation ezsigntemplateglobalGetAutocompleteV2Async
     *
     * Retrieve Ezsigntemplateglobals and IDs
     *
     * @param  string $sSelector The type of Ezsigntemplateglobals to return (required)
     * @param  string|null $eFilterActive Specify which results we want to display. (optional, default to 'Active')
     * @param  string|null $sQuery Allow to filter the returned results (optional)
     * @param  \eZmaxAPI\Model\HeaderAcceptLanguage|null $acceptLanguage (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['ezsigntemplateglobalGetAutocompleteV2'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function ezsigntemplateglobalGetAutocompleteV2Async($sSelector, $eFilterActive = 'Active', $sQuery = null, $acceptLanguage = null, string $contentType = self::contentTypes['ezsigntemplateglobalGetAutocompleteV2'][0])
    {
        return $this->ezsigntemplateglobalGetAutocompleteV2AsyncWithHttpInfo($sSelector, $eFilterActive, $sQuery, $acceptLanguage, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation ezsigntemplateglobalGetAutocompleteV2AsyncWithHttpInfo
     *
     * Retrieve Ezsigntemplateglobals and IDs
     *
     * @param  string $sSelector The type of Ezsigntemplateglobals to return (required)
     * @param  string|null $eFilterActive Specify which results we want to display. (optional, default to 'Active')
     * @param  string|null $sQuery Allow to filter the returned results (optional)
     * @param  \eZmaxAPI\Model\HeaderAcceptLanguage|null $acceptLanguage (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['ezsigntemplateglobalGetAutocompleteV2'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function ezsigntemplateglobalGetAutocompleteV2AsyncWithHttpInfo($sSelector, $eFilterActive = 'Active', $sQuery = null, $acceptLanguage = null, string $contentType = self::contentTypes['ezsigntemplateglobalGetAutocompleteV2'][0])
    {
        $returnType = '\eZmaxAPI\Model\EzsigntemplateglobalGetAutocompleteV2Response';
        $request = $this->ezsigntemplateglobalGetAutocompleteV2Request($sSelector, $eFilterActive, $sQuery, $acceptLanguage, $contentType);

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
     * Create request for operation 'ezsigntemplateglobalGetAutocompleteV2'
     *
     * @param  string $sSelector The type of Ezsigntemplateglobals to return (required)
     * @param  string|null $eFilterActive Specify which results we want to display. (optional, default to 'Active')
     * @param  string|null $sQuery Allow to filter the returned results (optional)
     * @param  \eZmaxAPI\Model\HeaderAcceptLanguage|null $acceptLanguage (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['ezsigntemplateglobalGetAutocompleteV2'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function ezsigntemplateglobalGetAutocompleteV2Request($sSelector, $eFilterActive = 'Active', $sQuery = null, $acceptLanguage = null, string $contentType = self::contentTypes['ezsigntemplateglobalGetAutocompleteV2'][0])
    {

        // verify the required parameter 'sSelector' is set
        if ($sSelector === null || (is_array($sSelector) && count($sSelector) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $sSelector when calling ezsigntemplateglobalGetAutocompleteV2'
            );
        }





        $resourcePath = '/2/object/ezsigntemplateglobal/getAutocomplete/{sSelector}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $eFilterActive,
            'eFilterActive', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $sQuery,
            'sQuery', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);

        // header params
        if ($acceptLanguage !== null) {
            $headerParams['Accept-Language'] = ObjectSerializer::toHeaderValue($acceptLanguage);
        }

        // path params
        if ($sSelector !== null) {
            $resourcePath = str_replace(
                '{' . 'sSelector' . '}',
                ObjectSerializer::toPathValue($sSelector),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
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

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
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

        if ($apiKey !== null) {
            $secret = $this->config->getSecret();
            if ($secret !== '') {
                //Let's sign the request
                $headers = array_merge($headers, RequestSignature::getHeadersV1($apiKey, $secret, 'GET', $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''), $httpBody));
            }		
        }

        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation ezsigntemplateglobalGetObjectV2
     *
     * Retrieve an existing Ezsigntemplateglobal
     *
     * @param  int $pkiEzsigntemplateglobalID pkiEzsigntemplateglobalID (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['ezsigntemplateglobalGetObjectV2'] to see the possible values for this operation
     *
     * @throws \eZmaxAPI\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \eZmaxAPI\Model\EzsigntemplateglobalGetObjectV2Response|\eZmaxAPI\Model\CommonResponseError
     */
    public function ezsigntemplateglobalGetObjectV2($pkiEzsigntemplateglobalID, string $contentType = self::contentTypes['ezsigntemplateglobalGetObjectV2'][0])
    {
        list($response) = $this->ezsigntemplateglobalGetObjectV2WithHttpInfo($pkiEzsigntemplateglobalID, $contentType);
        return $response;
    }

    /**
     * Operation ezsigntemplateglobalGetObjectV2WithHttpInfo
     *
     * Retrieve an existing Ezsigntemplateglobal
     *
     * @param  int $pkiEzsigntemplateglobalID (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['ezsigntemplateglobalGetObjectV2'] to see the possible values for this operation
     *
     * @throws \eZmaxAPI\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \eZmaxAPI\Model\EzsigntemplateglobalGetObjectV2Response|\eZmaxAPI\Model\CommonResponseError, HTTP status code, HTTP response headers (array of strings)
     */
    public function ezsigntemplateglobalGetObjectV2WithHttpInfo($pkiEzsigntemplateglobalID, string $contentType = self::contentTypes['ezsigntemplateglobalGetObjectV2'][0])
    {
        $request = $this->ezsigntemplateglobalGetObjectV2Request($pkiEzsigntemplateglobalID, $contentType);

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


            switch($statusCode) {
                case 200:
                    if ('\eZmaxAPI\Model\EzsigntemplateglobalGetObjectV2Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\eZmaxAPI\Model\EzsigntemplateglobalGetObjectV2Response' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\eZmaxAPI\Model\EzsigntemplateglobalGetObjectV2Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 404:
                    if ('\eZmaxAPI\Model\CommonResponseError' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\eZmaxAPI\Model\CommonResponseError' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\eZmaxAPI\Model\CommonResponseError', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }
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

            $returnType = '\eZmaxAPI\Model\EzsigntemplateglobalGetObjectV2Response';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    try {
                        $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                    } catch (\JsonException $exception) {
                        throw new ApiException(
                            sprintf(
                                'Error JSON decoding server response (%s)',
                                $request->getUri()
                            ),
                            $statusCode,
                            $response->getHeaders(),
                            $content
                        );
                    }
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
                        '\eZmaxAPI\Model\EzsigntemplateglobalGetObjectV2Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\eZmaxAPI\Model\CommonResponseError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation ezsigntemplateglobalGetObjectV2Async
     *
     * Retrieve an existing Ezsigntemplateglobal
     *
     * @param  int $pkiEzsigntemplateglobalID (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['ezsigntemplateglobalGetObjectV2'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function ezsigntemplateglobalGetObjectV2Async($pkiEzsigntemplateglobalID, string $contentType = self::contentTypes['ezsigntemplateglobalGetObjectV2'][0])
    {
        return $this->ezsigntemplateglobalGetObjectV2AsyncWithHttpInfo($pkiEzsigntemplateglobalID, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation ezsigntemplateglobalGetObjectV2AsyncWithHttpInfo
     *
     * Retrieve an existing Ezsigntemplateglobal
     *
     * @param  int $pkiEzsigntemplateglobalID (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['ezsigntemplateglobalGetObjectV2'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function ezsigntemplateglobalGetObjectV2AsyncWithHttpInfo($pkiEzsigntemplateglobalID, string $contentType = self::contentTypes['ezsigntemplateglobalGetObjectV2'][0])
    {
        $returnType = '\eZmaxAPI\Model\EzsigntemplateglobalGetObjectV2Response';
        $request = $this->ezsigntemplateglobalGetObjectV2Request($pkiEzsigntemplateglobalID, $contentType);

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
     * Create request for operation 'ezsigntemplateglobalGetObjectV2'
     *
     * @param  int $pkiEzsigntemplateglobalID (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['ezsigntemplateglobalGetObjectV2'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function ezsigntemplateglobalGetObjectV2Request($pkiEzsigntemplateglobalID, string $contentType = self::contentTypes['ezsigntemplateglobalGetObjectV2'][0])
    {

        // verify the required parameter 'pkiEzsigntemplateglobalID' is set
        if ($pkiEzsigntemplateglobalID === null || (is_array($pkiEzsigntemplateglobalID) && count($pkiEzsigntemplateglobalID) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $pkiEzsigntemplateglobalID when calling ezsigntemplateglobalGetObjectV2'
            );
        }
        if ($pkiEzsigntemplateglobalID < 0) {
	    //throw new \InvalidArgumentException('invalid value for "$pkiEzsigntemplateglobalID" when calling ObjectEzsigntemplateglobalApi.ezsigntemplateglobalGetObjectV2, must be bigger than or equal to 0.');
            throw new \InvalidArgumentException('invalid value '.(is_null($pkiEzsigntemplateglobalID)?'null':'"'.$pkiEzsigntemplateglobalID.'"').' for "pkiEzsigntemplateglobalID" when calling ObjectEzsigntemplateglobalApi.ezsigntemplateglobalGetObjectV2, must be bigger than or equal to 0.');
        }
        

        $resourcePath = '/2/object/ezsigntemplateglobal/{pkiEzsigntemplateglobalID}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($pkiEzsigntemplateglobalID !== null) {
            $resourcePath = str_replace(
                '{' . 'pkiEzsigntemplateglobalID' . '}',
                ObjectSerializer::toPathValue($pkiEzsigntemplateglobalID),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
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

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
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

        if ($apiKey !== null) {
            $secret = $this->config->getSecret();
            if ($secret !== '') {
                //Let's sign the request
                $headers = array_merge($headers, RequestSignature::getHeadersV1($apiKey, $secret, 'GET', $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''), $httpBody));
            }		
        }

        return new Request(
            'GET',
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
