<?php
/**
 * ObjectBillingentityexternalApi
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
 * ObjectBillingentityexternalApi Class Doc Comment
 *
 * @category Class
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ObjectBillingentityexternalApi
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
        'billingentityexternalGenerateFederationTokenV1' => [
            'application/json',
        ],
        'billingentityexternalGetAutocompleteV2' => [
            'application/json',
        ],
    ];

    /** @var array[] $objEzmaxConfig **/
    public const objEzmaxConfig = [
        'billingentityexternalGenerateFederationTokenV1' => [
            'permissions' => [
                'EzmaxInvoicing_Access',
            ],
            'usertypeextra' => [
            ],
            'authorizationsources' => [
                'Authorization',
            ],
            'deprecated' => false,
        ],
        'billingentityexternalGetAutocompleteV2' => [
            'permissions' => [
                'EzmaxInvoicing_Access',
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
     * Operation billingentityexternalGenerateFederationTokenV1
     *
     * Generate a federation token
     *
     * @param  int $pkiBillingentityexternalID pkiBillingentityexternalID (required)
     * @param  \eZmaxAPI\Model\BillingentityexternalGenerateFederationTokenV1Request $billingentityexternalGenerateFederationTokenV1Request billingentityexternalGenerateFederationTokenV1Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['billingentityexternalGenerateFederationTokenV1'] to see the possible values for this operation
     *
     * @throws \eZmaxAPI\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \eZmaxAPI\Model\BillingentityexternalGenerateFederationTokenV1Response|\eZmaxAPI\Model\CommonResponseError
     */
    public function billingentityexternalGenerateFederationTokenV1($pkiBillingentityexternalID, $billingentityexternalGenerateFederationTokenV1Request, string $contentType = self::contentTypes['billingentityexternalGenerateFederationTokenV1'][0])
    {
        list($response) = $this->billingentityexternalGenerateFederationTokenV1WithHttpInfo($pkiBillingentityexternalID, $billingentityexternalGenerateFederationTokenV1Request, $contentType);
        return $response;
    }

    /**
     * Operation billingentityexternalGenerateFederationTokenV1WithHttpInfo
     *
     * Generate a federation token
     *
     * @param  int $pkiBillingentityexternalID (required)
     * @param  \eZmaxAPI\Model\BillingentityexternalGenerateFederationTokenV1Request $billingentityexternalGenerateFederationTokenV1Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['billingentityexternalGenerateFederationTokenV1'] to see the possible values for this operation
     *
     * @throws \eZmaxAPI\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \eZmaxAPI\Model\BillingentityexternalGenerateFederationTokenV1Response|\eZmaxAPI\Model\CommonResponseError, HTTP status code, HTTP response headers (array of strings)
     */
    public function billingentityexternalGenerateFederationTokenV1WithHttpInfo($pkiBillingentityexternalID, $billingentityexternalGenerateFederationTokenV1Request, string $contentType = self::contentTypes['billingentityexternalGenerateFederationTokenV1'][0])
    {
        $request = $this->billingentityexternalGenerateFederationTokenV1Request($pkiBillingentityexternalID, $billingentityexternalGenerateFederationTokenV1Request, $contentType);

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
                    if ('\eZmaxAPI\Model\BillingentityexternalGenerateFederationTokenV1Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\eZmaxAPI\Model\BillingentityexternalGenerateFederationTokenV1Response' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\eZmaxAPI\Model\BillingentityexternalGenerateFederationTokenV1Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 422:
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

            $returnType = '\eZmaxAPI\Model\BillingentityexternalGenerateFederationTokenV1Response';
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
                        '\eZmaxAPI\Model\BillingentityexternalGenerateFederationTokenV1Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 422:
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
     * Operation billingentityexternalGenerateFederationTokenV1Async
     *
     * Generate a federation token
     *
     * @param  int $pkiBillingentityexternalID (required)
     * @param  \eZmaxAPI\Model\BillingentityexternalGenerateFederationTokenV1Request $billingentityexternalGenerateFederationTokenV1Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['billingentityexternalGenerateFederationTokenV1'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function billingentityexternalGenerateFederationTokenV1Async($pkiBillingentityexternalID, $billingentityexternalGenerateFederationTokenV1Request, string $contentType = self::contentTypes['billingentityexternalGenerateFederationTokenV1'][0])
    {
        return $this->billingentityexternalGenerateFederationTokenV1AsyncWithHttpInfo($pkiBillingentityexternalID, $billingentityexternalGenerateFederationTokenV1Request, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation billingentityexternalGenerateFederationTokenV1AsyncWithHttpInfo
     *
     * Generate a federation token
     *
     * @param  int $pkiBillingentityexternalID (required)
     * @param  \eZmaxAPI\Model\BillingentityexternalGenerateFederationTokenV1Request $billingentityexternalGenerateFederationTokenV1Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['billingentityexternalGenerateFederationTokenV1'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function billingentityexternalGenerateFederationTokenV1AsyncWithHttpInfo($pkiBillingentityexternalID, $billingentityexternalGenerateFederationTokenV1Request, string $contentType = self::contentTypes['billingentityexternalGenerateFederationTokenV1'][0])
    {
        $returnType = '\eZmaxAPI\Model\BillingentityexternalGenerateFederationTokenV1Response';
        $request = $this->billingentityexternalGenerateFederationTokenV1Request($pkiBillingentityexternalID, $billingentityexternalGenerateFederationTokenV1Request, $contentType);

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
     * Create request for operation 'billingentityexternalGenerateFederationTokenV1'
     *
     * @param  int $pkiBillingentityexternalID (required)
     * @param  \eZmaxAPI\Model\BillingentityexternalGenerateFederationTokenV1Request $billingentityexternalGenerateFederationTokenV1Request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['billingentityexternalGenerateFederationTokenV1'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function billingentityexternalGenerateFederationTokenV1Request($pkiBillingentityexternalID, $billingentityexternalGenerateFederationTokenV1Request, string $contentType = self::contentTypes['billingentityexternalGenerateFederationTokenV1'][0])
    {

        // verify the required parameter 'pkiBillingentityexternalID' is set
        if ($pkiBillingentityexternalID === null || (is_array($pkiBillingentityexternalID) && count($pkiBillingentityexternalID) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $pkiBillingentityexternalID when calling billingentityexternalGenerateFederationTokenV1'
            );
        }
        if ($pkiBillingentityexternalID < 1) {
	    //throw new \InvalidArgumentException('invalid value for "$pkiBillingentityexternalID" when calling ObjectBillingentityexternalApi.billingentityexternalGenerateFederationTokenV1, must be bigger than or equal to 1.');
            throw new \InvalidArgumentException('invalid value '.(is_null($pkiBillingentityexternalID)?'null':'"'.$pkiBillingentityexternalID.'"').' for "pkiBillingentityexternalID" when calling ObjectBillingentityexternalApi.billingentityexternalGenerateFederationTokenV1, must be bigger than or equal to 1.');
        }
        
        // verify the required parameter 'billingentityexternalGenerateFederationTokenV1Request' is set
        if ($billingentityexternalGenerateFederationTokenV1Request === null || (is_array($billingentityexternalGenerateFederationTokenV1Request) && count($billingentityexternalGenerateFederationTokenV1Request) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $billingentityexternalGenerateFederationTokenV1Request when calling billingentityexternalGenerateFederationTokenV1'
            );
        }


        $resourcePath = '/1/object/billingentityexternal/{pkiBillingentityexternalID}/generateFederationToken';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($pkiBillingentityexternalID !== null) {
            $resourcePath = str_replace(
                '{' . 'pkiBillingentityexternalID' . '}',
                ObjectSerializer::toPathValue($pkiBillingentityexternalID),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($billingentityexternalGenerateFederationTokenV1Request)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($billingentityexternalGenerateFederationTokenV1Request));
            } else {
                $httpBody = $billingentityexternalGenerateFederationTokenV1Request;
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
                $headers = array_merge($headers, RequestSignature::getHeadersV1($apiKey, $secret, 'POST', $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''), $httpBody));
            }		
        }

        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation billingentityexternalGetAutocompleteV2
     *
     * Retrieve Billingentityexternals and IDs
     *
     * @param  string $sSelector The type of Billingentityexternals to return (required)
     * @param  string $eFilterActive Specify which results we want to display. (optional, default to 'Active')
     * @param  string $sQuery Allow to filter the returned results (optional)
     * @param  \eZmaxAPI\Model\HeaderAcceptLanguage $acceptLanguage acceptLanguage (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['billingentityexternalGetAutocompleteV2'] to see the possible values for this operation
     *
     * @throws \eZmaxAPI\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \eZmaxAPI\Model\BillingentityexternalGetAutocompleteV2Response
     */
    public function billingentityexternalGetAutocompleteV2($sSelector, $eFilterActive = 'Active', $sQuery = null, $acceptLanguage = null, string $contentType = self::contentTypes['billingentityexternalGetAutocompleteV2'][0])
    {
        list($response) = $this->billingentityexternalGetAutocompleteV2WithHttpInfo($sSelector, $eFilterActive, $sQuery, $acceptLanguage, $contentType);
        return $response;
    }

    /**
     * Operation billingentityexternalGetAutocompleteV2WithHttpInfo
     *
     * Retrieve Billingentityexternals and IDs
     *
     * @param  string $sSelector The type of Billingentityexternals to return (required)
     * @param  string $eFilterActive Specify which results we want to display. (optional, default to 'Active')
     * @param  string $sQuery Allow to filter the returned results (optional)
     * @param  \eZmaxAPI\Model\HeaderAcceptLanguage $acceptLanguage (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['billingentityexternalGetAutocompleteV2'] to see the possible values for this operation
     *
     * @throws \eZmaxAPI\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \eZmaxAPI\Model\BillingentityexternalGetAutocompleteV2Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function billingentityexternalGetAutocompleteV2WithHttpInfo($sSelector, $eFilterActive = 'Active', $sQuery = null, $acceptLanguage = null, string $contentType = self::contentTypes['billingentityexternalGetAutocompleteV2'][0])
    {
        $request = $this->billingentityexternalGetAutocompleteV2Request($sSelector, $eFilterActive, $sQuery, $acceptLanguage, $contentType);

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
                    if ('\eZmaxAPI\Model\BillingentityexternalGetAutocompleteV2Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\eZmaxAPI\Model\BillingentityexternalGetAutocompleteV2Response' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\eZmaxAPI\Model\BillingentityexternalGetAutocompleteV2Response', []),
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

            $returnType = '\eZmaxAPI\Model\BillingentityexternalGetAutocompleteV2Response';
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
                        '\eZmaxAPI\Model\BillingentityexternalGetAutocompleteV2Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation billingentityexternalGetAutocompleteV2Async
     *
     * Retrieve Billingentityexternals and IDs
     *
     * @param  string $sSelector The type of Billingentityexternals to return (required)
     * @param  string $eFilterActive Specify which results we want to display. (optional, default to 'Active')
     * @param  string $sQuery Allow to filter the returned results (optional)
     * @param  \eZmaxAPI\Model\HeaderAcceptLanguage $acceptLanguage (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['billingentityexternalGetAutocompleteV2'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function billingentityexternalGetAutocompleteV2Async($sSelector, $eFilterActive = 'Active', $sQuery = null, $acceptLanguage = null, string $contentType = self::contentTypes['billingentityexternalGetAutocompleteV2'][0])
    {
        return $this->billingentityexternalGetAutocompleteV2AsyncWithHttpInfo($sSelector, $eFilterActive, $sQuery, $acceptLanguage, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation billingentityexternalGetAutocompleteV2AsyncWithHttpInfo
     *
     * Retrieve Billingentityexternals and IDs
     *
     * @param  string $sSelector The type of Billingentityexternals to return (required)
     * @param  string $eFilterActive Specify which results we want to display. (optional, default to 'Active')
     * @param  string $sQuery Allow to filter the returned results (optional)
     * @param  \eZmaxAPI\Model\HeaderAcceptLanguage $acceptLanguage (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['billingentityexternalGetAutocompleteV2'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function billingentityexternalGetAutocompleteV2AsyncWithHttpInfo($sSelector, $eFilterActive = 'Active', $sQuery = null, $acceptLanguage = null, string $contentType = self::contentTypes['billingentityexternalGetAutocompleteV2'][0])
    {
        $returnType = '\eZmaxAPI\Model\BillingentityexternalGetAutocompleteV2Response';
        $request = $this->billingentityexternalGetAutocompleteV2Request($sSelector, $eFilterActive, $sQuery, $acceptLanguage, $contentType);

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
     * Create request for operation 'billingentityexternalGetAutocompleteV2'
     *
     * @param  string $sSelector The type of Billingentityexternals to return (required)
     * @param  string $eFilterActive Specify which results we want to display. (optional, default to 'Active')
     * @param  string $sQuery Allow to filter the returned results (optional)
     * @param  \eZmaxAPI\Model\HeaderAcceptLanguage $acceptLanguage (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['billingentityexternalGetAutocompleteV2'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function billingentityexternalGetAutocompleteV2Request($sSelector, $eFilterActive = 'Active', $sQuery = null, $acceptLanguage = null, string $contentType = self::contentTypes['billingentityexternalGetAutocompleteV2'][0])
    {

        // verify the required parameter 'sSelector' is set
        if ($sSelector === null || (is_array($sSelector) && count($sSelector) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $sSelector when calling billingentityexternalGetAutocompleteV2'
            );
        }





        $resourcePath = '/2/object/billingentityexternal/getAutocomplete/{sSelector}';
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
