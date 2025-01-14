<?php
/**
 * ObjectModuleApi
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
 * The version of the OpenAPI document: 1.2.1
 * Contact: support-api@ezmax.ca
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.9.0
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
 * ObjectModuleApi Class Doc Comment
 *
 * @category Class
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ObjectModuleApi
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
        'moduleGetAutocompleteV2' => [
            'application/json',
        ],
    ];

    /** @var array[] $objEzmaxConfig **/
    public const objEzmaxConfig = [
        'moduleGetAutocompleteV2' => [
            'permissions' => [
                'Management_UsersAgentBroker',
                'Management_UsersAssistant',
                'Management_UsersEmployee',
                'Management_UsersEzsignUser',
                'Management_UsersNormal',
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
     * Operation moduleGetAutocompleteV2
     *
     * Retrieve Modules and IDs
     *
     * @param  string $sSelector The type of Modules to return (required)
     * @param  string $eFilterActive Specify which results we want to display. (optional, default to 'Active')
     * @param  string $sQuery Allow to filter the returned results (optional)
     * @param  \eZmaxAPI\Model\HeaderAcceptLanguage $acceptLanguage acceptLanguage (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['moduleGetAutocompleteV2'] to see the possible values for this operation
     *
     * @throws \eZmaxAPI\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \eZmaxAPI\Model\ModuleGetAutocompleteV2Response
     */
    public function moduleGetAutocompleteV2($sSelector, $eFilterActive = 'Active', $sQuery = null, $acceptLanguage = null, string $contentType = self::contentTypes['moduleGetAutocompleteV2'][0])
    {
        list($response) = $this->moduleGetAutocompleteV2WithHttpInfo($sSelector, $eFilterActive, $sQuery, $acceptLanguage, $contentType);
        return $response;
    }

    /**
     * Operation moduleGetAutocompleteV2WithHttpInfo
     *
     * Retrieve Modules and IDs
     *
     * @param  string $sSelector The type of Modules to return (required)
     * @param  string $eFilterActive Specify which results we want to display. (optional, default to 'Active')
     * @param  string $sQuery Allow to filter the returned results (optional)
     * @param  \eZmaxAPI\Model\HeaderAcceptLanguage $acceptLanguage (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['moduleGetAutocompleteV2'] to see the possible values for this operation
     *
     * @throws \eZmaxAPI\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \eZmaxAPI\Model\ModuleGetAutocompleteV2Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function moduleGetAutocompleteV2WithHttpInfo($sSelector, $eFilterActive = 'Active', $sQuery = null, $acceptLanguage = null, string $contentType = self::contentTypes['moduleGetAutocompleteV2'][0])
    {
        $request = $this->moduleGetAutocompleteV2Request($sSelector, $eFilterActive, $sQuery, $acceptLanguage, $contentType);

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
                    if ('\eZmaxAPI\Model\ModuleGetAutocompleteV2Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\eZmaxAPI\Model\ModuleGetAutocompleteV2Response' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\eZmaxAPI\Model\ModuleGetAutocompleteV2Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\eZmaxAPI\Model\ModuleGetAutocompleteV2Response';
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
                        '\eZmaxAPI\Model\ModuleGetAutocompleteV2Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation moduleGetAutocompleteV2Async
     *
     * Retrieve Modules and IDs
     *
     * @param  string $sSelector The type of Modules to return (required)
     * @param  string $eFilterActive Specify which results we want to display. (optional, default to 'Active')
     * @param  string $sQuery Allow to filter the returned results (optional)
     * @param  \eZmaxAPI\Model\HeaderAcceptLanguage $acceptLanguage (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['moduleGetAutocompleteV2'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function moduleGetAutocompleteV2Async($sSelector, $eFilterActive = 'Active', $sQuery = null, $acceptLanguage = null, string $contentType = self::contentTypes['moduleGetAutocompleteV2'][0])
    {
        return $this->moduleGetAutocompleteV2AsyncWithHttpInfo($sSelector, $eFilterActive, $sQuery, $acceptLanguage, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation moduleGetAutocompleteV2AsyncWithHttpInfo
     *
     * Retrieve Modules and IDs
     *
     * @param  string $sSelector The type of Modules to return (required)
     * @param  string $eFilterActive Specify which results we want to display. (optional, default to 'Active')
     * @param  string $sQuery Allow to filter the returned results (optional)
     * @param  \eZmaxAPI\Model\HeaderAcceptLanguage $acceptLanguage (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['moduleGetAutocompleteV2'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function moduleGetAutocompleteV2AsyncWithHttpInfo($sSelector, $eFilterActive = 'Active', $sQuery = null, $acceptLanguage = null, string $contentType = self::contentTypes['moduleGetAutocompleteV2'][0])
    {
        $returnType = '\eZmaxAPI\Model\ModuleGetAutocompleteV2Response';
        $request = $this->moduleGetAutocompleteV2Request($sSelector, $eFilterActive, $sQuery, $acceptLanguage, $contentType);

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
     * Create request for operation 'moduleGetAutocompleteV2'
     *
     * @param  string $sSelector The type of Modules to return (required)
     * @param  string $eFilterActive Specify which results we want to display. (optional, default to 'Active')
     * @param  string $sQuery Allow to filter the returned results (optional)
     * @param  \eZmaxAPI\Model\HeaderAcceptLanguage $acceptLanguage (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['moduleGetAutocompleteV2'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function moduleGetAutocompleteV2Request($sSelector, $eFilterActive = 'Active', $sQuery = null, $acceptLanguage = null, string $contentType = self::contentTypes['moduleGetAutocompleteV2'][0])
    {

        // verify the required parameter 'sSelector' is set
        if ($sSelector === null || (is_array($sSelector) && count($sSelector) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $sSelector when calling moduleGetAutocompleteV2'
            );
        }





        $resourcePath = '/2/object/module/getAutocomplete/{sSelector}';
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
