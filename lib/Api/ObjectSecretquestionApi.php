<?php
/**
 * ObjectSecretquestionApi
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
 * The version of the OpenAPI document: 1.1.18
 * Contact: support-api@ezmax.ca
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.6.0
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
 * ObjectSecretquestionApi Class Doc Comment
 *
 * @category Class
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ObjectSecretquestionApi
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
        'secretquestionGetAutocompleteV2' => [
            'application/json',
        ],
    ];

    /** @var array[] $objEzmaxConfig **/
    public const objEzmaxConfig = [
        'secretquestionGetAutocompleteV2' => [
            'permissions' => [
                'All',
            ],
            'usertypeextra' => [
            ],
            'apikeyrequire' => true,
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
     * Operation secretquestionGetAutocompleteV2
     *
     * Retrieve Secretquestions and IDs
     *
     * @param  string $sSelector The type of Secretquestions to return (required)
     * @param  string $eFilterActive Specify which results we want to display. (optional, default to 'Active')
     * @param  string $sQuery Allow to filter the returned results (optional)
     * @param  HeaderAcceptLanguage $acceptLanguage acceptLanguage (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['secretquestionGetAutocompleteV2'] to see the possible values for this operation
     *
     * @throws \eZmaxAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \eZmaxAPI\Model\SecretquestionGetAutocompleteV2Response
     */
    public function secretquestionGetAutocompleteV2($sSelector, $eFilterActive = 'Active', $sQuery = null, $acceptLanguage = null, string $contentType = self::contentTypes['secretquestionGetAutocompleteV2'][0])
    {
        list($response) = $this->secretquestionGetAutocompleteV2WithHttpInfo($sSelector, $eFilterActive, $sQuery, $acceptLanguage, $contentType);
        return $response;
    }

    /**
     * Operation secretquestionGetAutocompleteV2WithHttpInfo
     *
     * Retrieve Secretquestions and IDs
     *
     * @param  string $sSelector The type of Secretquestions to return (required)
     * @param  string $eFilterActive Specify which results we want to display. (optional, default to 'Active')
     * @param  string $sQuery Allow to filter the returned results (optional)
     * @param  HeaderAcceptLanguage $acceptLanguage (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['secretquestionGetAutocompleteV2'] to see the possible values for this operation
     *
     * @throws \eZmaxAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \eZmaxAPI\Model\SecretquestionGetAutocompleteV2Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function secretquestionGetAutocompleteV2WithHttpInfo($sSelector, $eFilterActive = 'Active', $sQuery = null, $acceptLanguage = null, string $contentType = self::contentTypes['secretquestionGetAutocompleteV2'][0])
    {
        $request = $this->secretquestionGetAutocompleteV2Request($sSelector, $eFilterActive, $sQuery, $acceptLanguage, $contentType);

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
                    if ('\eZmaxAPI\Model\SecretquestionGetAutocompleteV2Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\eZmaxAPI\Model\SecretquestionGetAutocompleteV2Response' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\eZmaxAPI\Model\SecretquestionGetAutocompleteV2Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\eZmaxAPI\Model\SecretquestionGetAutocompleteV2Response';
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
                        '\eZmaxAPI\Model\SecretquestionGetAutocompleteV2Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation secretquestionGetAutocompleteV2Async
     *
     * Retrieve Secretquestions and IDs
     *
     * @param  string $sSelector The type of Secretquestions to return (required)
     * @param  string $eFilterActive Specify which results we want to display. (optional, default to 'Active')
     * @param  string $sQuery Allow to filter the returned results (optional)
     * @param  HeaderAcceptLanguage $acceptLanguage (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['secretquestionGetAutocompleteV2'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function secretquestionGetAutocompleteV2Async($sSelector, $eFilterActive = 'Active', $sQuery = null, $acceptLanguage = null, string $contentType = self::contentTypes['secretquestionGetAutocompleteV2'][0])
    {
        return $this->secretquestionGetAutocompleteV2AsyncWithHttpInfo($sSelector, $eFilterActive, $sQuery, $acceptLanguage, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation secretquestionGetAutocompleteV2AsyncWithHttpInfo
     *
     * Retrieve Secretquestions and IDs
     *
     * @param  string $sSelector The type of Secretquestions to return (required)
     * @param  string $eFilterActive Specify which results we want to display. (optional, default to 'Active')
     * @param  string $sQuery Allow to filter the returned results (optional)
     * @param  HeaderAcceptLanguage $acceptLanguage (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['secretquestionGetAutocompleteV2'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function secretquestionGetAutocompleteV2AsyncWithHttpInfo($sSelector, $eFilterActive = 'Active', $sQuery = null, $acceptLanguage = null, string $contentType = self::contentTypes['secretquestionGetAutocompleteV2'][0])
    {
        $returnType = '\eZmaxAPI\Model\SecretquestionGetAutocompleteV2Response';
        $request = $this->secretquestionGetAutocompleteV2Request($sSelector, $eFilterActive, $sQuery, $acceptLanguage, $contentType);

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
     * Create request for operation 'secretquestionGetAutocompleteV2'
     *
     * @param  string $sSelector The type of Secretquestions to return (required)
     * @param  string $eFilterActive Specify which results we want to display. (optional, default to 'Active')
     * @param  string $sQuery Allow to filter the returned results (optional)
     * @param  HeaderAcceptLanguage $acceptLanguage (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['secretquestionGetAutocompleteV2'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function secretquestionGetAutocompleteV2Request($sSelector, $eFilterActive = 'Active', $sQuery = null, $acceptLanguage = null, string $contentType = self::contentTypes['secretquestionGetAutocompleteV2'][0])
    {

        // verify the required parameter 'sSelector' is set
        if ($sSelector === null || (is_array($sSelector) && count($sSelector) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $sSelector when calling secretquestionGetAutocompleteV2'
            );
        }





        $resourcePath = '/2/object/secretquestion/getAutocomplete/{sSelector}';
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
