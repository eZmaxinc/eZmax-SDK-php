<?php
/**
 * ModuleEzsignApi
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
 * The version of the OpenAPI document: 1.2.0
 * Contact: support-api@ezmax.ca
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.4.0
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
 * ModuleEzsignApi Class Doc Comment
 *
 * @category Class
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ModuleEzsignApi
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
        'ezsignSuggestSignersV1' => [
            'application/json',
        ],
        'ezsignSuggestTemplatesV1' => [
            'application/json',
        ],
    ];

    /** @var array[] $objEzmaxConfig **/
    public const objEzmaxConfig = [
        'ezsignSuggestSignersV1' => [
            'permissions' => [
                'All',
            ],
            'usertypeextra' => [
            ],
            'authorizationsources' => [
                'Authorization',
            ],
            'deprecated' => false,
        ],
        'ezsignSuggestTemplatesV1' => [
            'permissions' => [
                'All',
            ],
            'usertypeextra' => [
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
     * Operation ezsignSuggestSignersV1
     *
     * Suggest signers
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['ezsignSuggestSignersV1'] to see the possible values for this operation
     *
     * @throws \eZmaxAPI\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \eZmaxAPI\Model\EzsignSuggestSignersV1Response
     */
    public function ezsignSuggestSignersV1(string $contentType = self::contentTypes['ezsignSuggestSignersV1'][0])
    {
        list($response) = $this->ezsignSuggestSignersV1WithHttpInfo($contentType);
        return $response;
    }

    /**
     * Operation ezsignSuggestSignersV1WithHttpInfo
     *
     * Suggest signers
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['ezsignSuggestSignersV1'] to see the possible values for this operation
     *
     * @throws \eZmaxAPI\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \eZmaxAPI\Model\EzsignSuggestSignersV1Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function ezsignSuggestSignersV1WithHttpInfo(string $contentType = self::contentTypes['ezsignSuggestSignersV1'][0])
    {
        $request = $this->ezsignSuggestSignersV1Request($contentType);

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
                    if ('\eZmaxAPI\Model\EzsignSuggestSignersV1Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\eZmaxAPI\Model\EzsignSuggestSignersV1Response' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\eZmaxAPI\Model\EzsignSuggestSignersV1Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\eZmaxAPI\Model\EzsignSuggestSignersV1Response';
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
                        '\eZmaxAPI\Model\EzsignSuggestSignersV1Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation ezsignSuggestSignersV1Async
     *
     * Suggest signers
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['ezsignSuggestSignersV1'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function ezsignSuggestSignersV1Async(string $contentType = self::contentTypes['ezsignSuggestSignersV1'][0])
    {
        return $this->ezsignSuggestSignersV1AsyncWithHttpInfo($contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation ezsignSuggestSignersV1AsyncWithHttpInfo
     *
     * Suggest signers
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['ezsignSuggestSignersV1'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function ezsignSuggestSignersV1AsyncWithHttpInfo(string $contentType = self::contentTypes['ezsignSuggestSignersV1'][0])
    {
        $returnType = '\eZmaxAPI\Model\EzsignSuggestSignersV1Response';
        $request = $this->ezsignSuggestSignersV1Request($contentType);

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
     * Create request for operation 'ezsignSuggestSignersV1'
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['ezsignSuggestSignersV1'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function ezsignSuggestSignersV1Request(string $contentType = self::contentTypes['ezsignSuggestSignersV1'][0])
    {


        $resourcePath = '/1/module/ezsign/suggestSigners';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





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
     * Operation ezsignSuggestTemplatesV1
     *
     * Suggest templates
     *
     * @param  int $fkiEzsignfoldertypeID fkiEzsignfoldertypeID (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['ezsignSuggestTemplatesV1'] to see the possible values for this operation
     *
     * @throws \eZmaxAPI\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \eZmaxAPI\Model\EzsignSuggestTemplatesV1Response
     */
    public function ezsignSuggestTemplatesV1($fkiEzsignfoldertypeID = null, string $contentType = self::contentTypes['ezsignSuggestTemplatesV1'][0])
    {
        list($response) = $this->ezsignSuggestTemplatesV1WithHttpInfo($fkiEzsignfoldertypeID, $contentType);
        return $response;
    }

    /**
     * Operation ezsignSuggestTemplatesV1WithHttpInfo
     *
     * Suggest templates
     *
     * @param  int $fkiEzsignfoldertypeID (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['ezsignSuggestTemplatesV1'] to see the possible values for this operation
     *
     * @throws \eZmaxAPI\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \eZmaxAPI\Model\EzsignSuggestTemplatesV1Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function ezsignSuggestTemplatesV1WithHttpInfo($fkiEzsignfoldertypeID = null, string $contentType = self::contentTypes['ezsignSuggestTemplatesV1'][0])
    {
        $request = $this->ezsignSuggestTemplatesV1Request($fkiEzsignfoldertypeID, $contentType);

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
                    if ('\eZmaxAPI\Model\EzsignSuggestTemplatesV1Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\eZmaxAPI\Model\EzsignSuggestTemplatesV1Response' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\eZmaxAPI\Model\EzsignSuggestTemplatesV1Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\eZmaxAPI\Model\EzsignSuggestTemplatesV1Response';
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
                        '\eZmaxAPI\Model\EzsignSuggestTemplatesV1Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation ezsignSuggestTemplatesV1Async
     *
     * Suggest templates
     *
     * @param  int $fkiEzsignfoldertypeID (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['ezsignSuggestTemplatesV1'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function ezsignSuggestTemplatesV1Async($fkiEzsignfoldertypeID = null, string $contentType = self::contentTypes['ezsignSuggestTemplatesV1'][0])
    {
        return $this->ezsignSuggestTemplatesV1AsyncWithHttpInfo($fkiEzsignfoldertypeID, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation ezsignSuggestTemplatesV1AsyncWithHttpInfo
     *
     * Suggest templates
     *
     * @param  int $fkiEzsignfoldertypeID (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['ezsignSuggestTemplatesV1'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function ezsignSuggestTemplatesV1AsyncWithHttpInfo($fkiEzsignfoldertypeID = null, string $contentType = self::contentTypes['ezsignSuggestTemplatesV1'][0])
    {
        $returnType = '\eZmaxAPI\Model\EzsignSuggestTemplatesV1Response';
        $request = $this->ezsignSuggestTemplatesV1Request($fkiEzsignfoldertypeID, $contentType);

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
     * Create request for operation 'ezsignSuggestTemplatesV1'
     *
     * @param  int $fkiEzsignfoldertypeID (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['ezsignSuggestTemplatesV1'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function ezsignSuggestTemplatesV1Request($fkiEzsignfoldertypeID = null, string $contentType = self::contentTypes['ezsignSuggestTemplatesV1'][0])
    {

        if ($fkiEzsignfoldertypeID !== null && $fkiEzsignfoldertypeID > 65535) {
            throw new \InvalidArgumentException('invalid value for "$fkiEzsignfoldertypeID" when calling ModuleEzsignApi.ezsignSuggestTemplatesV1, must be smaller than or equal to 65535.');
        }
        if ($fkiEzsignfoldertypeID !== null && $fkiEzsignfoldertypeID < 0) {
            throw new \InvalidArgumentException('invalid value for "$fkiEzsignfoldertypeID" when calling ModuleEzsignApi.ezsignSuggestTemplatesV1, must be bigger than or equal to 0.');
        }
        

        $resourcePath = '/1/module/ezsign/suggestTemplates';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $fkiEzsignfoldertypeID,
            'fkiEzsignfoldertypeID', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);




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
