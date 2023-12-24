<?php
/**
 * ObjectActivesessionApi
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
 * OpenAPI Generator version: 7.2.0
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
 * ObjectActivesessionApi Class Doc Comment
 *
 * @category Class
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ObjectActivesessionApi
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
        'activesessionGetCurrentV1' => [
            'application/json',
        ],
        'activesessionGetListV1' => [
            'application/json',
        ],
    ];

    /** @var array[] $objEzmaxConfig **/
    public const objEzmaxConfig = [
        'activesessionGetCurrentV1' => [
            'permissions' => [
                'All',
            ],
            'usertypeextra' => [
                'EzsignSigner',
            ],
            'authorizationsources' => [
                'Authorization',
            ],
            'deprecated' => false,
        ],
        'activesessionGetListV1' => [
            'permissions' => [
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
     * Operation activesessionGetCurrentV1
     *
     * Get Current Activesession
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['activesessionGetCurrentV1'] to see the possible values for this operation
     *
     * @throws \eZmaxAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \eZmaxAPI\Model\ActivesessionGetCurrentV1Response|\eZmaxAPI\Model\CommonResponseRedirectSSecretquestionTextX
     */
    public function activesessionGetCurrentV1(string $contentType = self::contentTypes['activesessionGetCurrentV1'][0])
    {
        list($response) = $this->activesessionGetCurrentV1WithHttpInfo($contentType);
        return $response;
    }

    /**
     * Operation activesessionGetCurrentV1WithHttpInfo
     *
     * Get Current Activesession
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['activesessionGetCurrentV1'] to see the possible values for this operation
     *
     * @throws \eZmaxAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \eZmaxAPI\Model\ActivesessionGetCurrentV1Response|\eZmaxAPI\Model\CommonResponseRedirectSSecretquestionTextX, HTTP status code, HTTP response headers (array of strings)
     */
    public function activesessionGetCurrentV1WithHttpInfo(string $contentType = self::contentTypes['activesessionGetCurrentV1'][0])
    {
        $request = $this->activesessionGetCurrentV1Request($contentType);

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
                    if ('\eZmaxAPI\Model\ActivesessionGetCurrentV1Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\eZmaxAPI\Model\ActivesessionGetCurrentV1Response' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\eZmaxAPI\Model\ActivesessionGetCurrentV1Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 352:
                    if ('\eZmaxAPI\Model\CommonResponseRedirectSSecretquestionTextX' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\eZmaxAPI\Model\CommonResponseRedirectSSecretquestionTextX' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\eZmaxAPI\Model\CommonResponseRedirectSSecretquestionTextX', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\eZmaxAPI\Model\ActivesessionGetCurrentV1Response';
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
                        '\eZmaxAPI\Model\ActivesessionGetCurrentV1Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 352:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\eZmaxAPI\Model\CommonResponseRedirectSSecretquestionTextX',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation activesessionGetCurrentV1Async
     *
     * Get Current Activesession
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['activesessionGetCurrentV1'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function activesessionGetCurrentV1Async(string $contentType = self::contentTypes['activesessionGetCurrentV1'][0])
    {
        return $this->activesessionGetCurrentV1AsyncWithHttpInfo($contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation activesessionGetCurrentV1AsyncWithHttpInfo
     *
     * Get Current Activesession
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['activesessionGetCurrentV1'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function activesessionGetCurrentV1AsyncWithHttpInfo(string $contentType = self::contentTypes['activesessionGetCurrentV1'][0])
    {
        $returnType = '\eZmaxAPI\Model\ActivesessionGetCurrentV1Response';
        $request = $this->activesessionGetCurrentV1Request($contentType);

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
     * Create request for operation 'activesessionGetCurrentV1'
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['activesessionGetCurrentV1'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function activesessionGetCurrentV1Request(string $contentType = self::contentTypes['activesessionGetCurrentV1'][0])
    {


        $resourcePath = '/1/object/activesession/getCurrent';
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
     * Operation activesessionGetListV1
     *
     * Retrieve Activesession list
     *
     * @param  string $eOrderBy Specify how you want the results to be sorted (optional)
     * @param  int $iRowMax iRowMax (optional)
     * @param  int $iRowOffset iRowOffset (optional, default to 0)
     * @param  HeaderAcceptLanguage $acceptLanguage acceptLanguage (optional)
     * @param  string $sFilter sFilter (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['activesessionGetListV1'] to see the possible values for this operation
     *
     * @throws \eZmaxAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \eZmaxAPI\Model\ActivesessionGetListV1Response|\eZmaxAPI\Model\CommonResponseError
     */
    public function activesessionGetListV1($eOrderBy = null, $iRowMax = null, $iRowOffset = 0, $acceptLanguage = null, $sFilter = null, string $contentType = self::contentTypes['activesessionGetListV1'][0])
    {
        list($response) = $this->activesessionGetListV1WithHttpInfo($eOrderBy, $iRowMax, $iRowOffset, $acceptLanguage, $sFilter, $contentType);
        return $response;
    }

    /**
     * Operation activesessionGetListV1WithHttpInfo
     *
     * Retrieve Activesession list
     *
     * @param  string $eOrderBy Specify how you want the results to be sorted (optional)
     * @param  int $iRowMax (optional)
     * @param  int $iRowOffset (optional, default to 0)
     * @param  HeaderAcceptLanguage $acceptLanguage (optional)
     * @param  string $sFilter (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['activesessionGetListV1'] to see the possible values for this operation
     *
     * @throws \eZmaxAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \eZmaxAPI\Model\ActivesessionGetListV1Response|\eZmaxAPI\Model\CommonResponseError, HTTP status code, HTTP response headers (array of strings)
     */
    public function activesessionGetListV1WithHttpInfo($eOrderBy = null, $iRowMax = null, $iRowOffset = 0, $acceptLanguage = null, $sFilter = null, string $contentType = self::contentTypes['activesessionGetListV1'][0])
    {
        $request = $this->activesessionGetListV1Request($eOrderBy, $iRowMax, $iRowOffset, $acceptLanguage, $sFilter, $contentType);

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
                    if ('\eZmaxAPI\Model\ActivesessionGetListV1Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\eZmaxAPI\Model\ActivesessionGetListV1Response' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\eZmaxAPI\Model\ActivesessionGetListV1Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 406:
                    if ('\eZmaxAPI\Model\CommonResponseError' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\eZmaxAPI\Model\CommonResponseError' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\eZmaxAPI\Model\CommonResponseError', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\eZmaxAPI\Model\ActivesessionGetListV1Response';
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
                        '\eZmaxAPI\Model\ActivesessionGetListV1Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 406:
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
     * Operation activesessionGetListV1Async
     *
     * Retrieve Activesession list
     *
     * @param  string $eOrderBy Specify how you want the results to be sorted (optional)
     * @param  int $iRowMax (optional)
     * @param  int $iRowOffset (optional, default to 0)
     * @param  HeaderAcceptLanguage $acceptLanguage (optional)
     * @param  string $sFilter (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['activesessionGetListV1'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function activesessionGetListV1Async($eOrderBy = null, $iRowMax = null, $iRowOffset = 0, $acceptLanguage = null, $sFilter = null, string $contentType = self::contentTypes['activesessionGetListV1'][0])
    {
        return $this->activesessionGetListV1AsyncWithHttpInfo($eOrderBy, $iRowMax, $iRowOffset, $acceptLanguage, $sFilter, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation activesessionGetListV1AsyncWithHttpInfo
     *
     * Retrieve Activesession list
     *
     * @param  string $eOrderBy Specify how you want the results to be sorted (optional)
     * @param  int $iRowMax (optional)
     * @param  int $iRowOffset (optional, default to 0)
     * @param  HeaderAcceptLanguage $acceptLanguage (optional)
     * @param  string $sFilter (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['activesessionGetListV1'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function activesessionGetListV1AsyncWithHttpInfo($eOrderBy = null, $iRowMax = null, $iRowOffset = 0, $acceptLanguage = null, $sFilter = null, string $contentType = self::contentTypes['activesessionGetListV1'][0])
    {
        $returnType = '\eZmaxAPI\Model\ActivesessionGetListV1Response';
        $request = $this->activesessionGetListV1Request($eOrderBy, $iRowMax, $iRowOffset, $acceptLanguage, $sFilter, $contentType);

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
     * Create request for operation 'activesessionGetListV1'
     *
     * @param  string $eOrderBy Specify how you want the results to be sorted (optional)
     * @param  int $iRowMax (optional)
     * @param  int $iRowOffset (optional, default to 0)
     * @param  HeaderAcceptLanguage $acceptLanguage (optional)
     * @param  string $sFilter (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['activesessionGetListV1'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function activesessionGetListV1Request($eOrderBy = null, $iRowMax = null, $iRowOffset = 0, $acceptLanguage = null, $sFilter = null, string $contentType = self::contentTypes['activesessionGetListV1'][0])
    {


        if ($iRowMax !== null && $iRowMax > 10000) {
            throw new \InvalidArgumentException('invalid value for "$iRowMax" when calling ObjectActivesessionApi.activesessionGetListV1, must be smaller than or equal to 10000.');
        }
        if ($iRowMax !== null && $iRowMax < 1) {
            throw new \InvalidArgumentException('invalid value for "$iRowMax" when calling ObjectActivesessionApi.activesessionGetListV1, must be bigger than or equal to 1.');
        }
        
        if ($iRowOffset !== null && $iRowOffset < 0) {
            throw new \InvalidArgumentException('invalid value for "$iRowOffset" when calling ObjectActivesessionApi.activesessionGetListV1, must be bigger than or equal to 0.');
        }
        



        $resourcePath = '/1/object/activesession/getList';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $eOrderBy,
            'eOrderBy', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $iRowMax,
            'iRowMax', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $iRowOffset,
            'iRowOffset', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $sFilter,
            'sFilter', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);

        // header params
        if ($acceptLanguage !== null) {
            $headerParams['Accept-Language'] = ObjectSerializer::toHeaderValue($acceptLanguage);
        }



        $headers = $this->headerSelector->selectHeaders(
            ['application/json', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet', ],
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
