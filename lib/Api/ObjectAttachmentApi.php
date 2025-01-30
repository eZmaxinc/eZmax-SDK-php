<?php
/**
 * ObjectAttachmentApi
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
 * ObjectAttachmentApi Class Doc Comment
 *
 * @category Class
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ObjectAttachmentApi
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
        'attachmentDownloadV1' => [
            'application/json',
        ],
        'attachmentGetAttachmentlogsV1' => [
            'application/json',
        ],
    ];

    /** @var array[] $objEzmaxConfig **/
    public const objEzmaxConfig = [
        'attachmentDownloadV1' => [
            'permissions' => [
                'All',
            ],
            'usertypeextra' => [
                'AgentBroker',
            ],
            'authorizationsources' => [
                'Authorization',
                'Presigned',
            ],
            'deprecated' => false,
        ],
        'attachmentGetAttachmentlogsV1' => [
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
     * Operation attachmentDownloadV1
     *
     * Retrieve the content
     *
     * @param  int $pkiAttachmentID pkiAttachmentID (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['attachmentDownloadV1'] to see the possible values for this operation
     *
     * @throws \eZmaxAPI\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return void
     */
    public function attachmentDownloadV1($pkiAttachmentID, string $contentType = self::contentTypes['attachmentDownloadV1'][0])
    {
        $this->attachmentDownloadV1WithHttpInfo($pkiAttachmentID, $contentType);
    }

    /**
     * Operation attachmentDownloadV1WithHttpInfo
     *
     * Retrieve the content
     *
     * @param  int $pkiAttachmentID (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['attachmentDownloadV1'] to see the possible values for this operation
     *
     * @throws \eZmaxAPI\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function attachmentDownloadV1WithHttpInfo($pkiAttachmentID, string $contentType = self::contentTypes['attachmentDownloadV1'][0])
    {
        $request = $this->attachmentDownloadV1Request($pkiAttachmentID, $contentType);

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


            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
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
     * Operation attachmentDownloadV1Async
     *
     * Retrieve the content
     *
     * @param  int $pkiAttachmentID (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['attachmentDownloadV1'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function attachmentDownloadV1Async($pkiAttachmentID, string $contentType = self::contentTypes['attachmentDownloadV1'][0])
    {
        return $this->attachmentDownloadV1AsyncWithHttpInfo($pkiAttachmentID, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation attachmentDownloadV1AsyncWithHttpInfo
     *
     * Retrieve the content
     *
     * @param  int $pkiAttachmentID (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['attachmentDownloadV1'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function attachmentDownloadV1AsyncWithHttpInfo($pkiAttachmentID, string $contentType = self::contentTypes['attachmentDownloadV1'][0])
    {
        $returnType = '';
        $request = $this->attachmentDownloadV1Request($pkiAttachmentID, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
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
     * Create request for operation 'attachmentDownloadV1'
     *
     * @param  int $pkiAttachmentID (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['attachmentDownloadV1'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function attachmentDownloadV1Request($pkiAttachmentID, string $contentType = self::contentTypes['attachmentDownloadV1'][0])
    {

        // verify the required parameter 'pkiAttachmentID' is set
        if ($pkiAttachmentID === null || (is_array($pkiAttachmentID) && count($pkiAttachmentID) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $pkiAttachmentID when calling attachmentDownloadV1'
            );
        }
        if ($pkiAttachmentID < 0) {
	    //throw new \InvalidArgumentException('invalid value for "$pkiAttachmentID" when calling ObjectAttachmentApi.attachmentDownloadV1, must be bigger than or equal to 0.');
            throw new \InvalidArgumentException('invalid value '.(is_null($pkiAttachmentID)?'null':'"'.$pkiAttachmentID.'"').' for "pkiAttachmentID" when calling ObjectAttachmentApi.attachmentDownloadV1, must be bigger than or equal to 0.');
        }
        

        $resourcePath = '/1/object/attachment/{pkiAttachmentID}/download';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($pkiAttachmentID !== null) {
            $resourcePath = str_replace(
                '{' . 'pkiAttachmentID' . '}',
                ObjectSerializer::toPathValue($pkiAttachmentID),
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
        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('sAuthorization');
        if ($apiKey !== null) {
            $queryParams['sAuthorization'] = $apiKey;
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
     * Operation attachmentGetAttachmentlogsV1
     *
     * Retrieve the Attachmentlogs
     *
     * @param  int $pkiAttachmentID pkiAttachmentID (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['attachmentGetAttachmentlogsV1'] to see the possible values for this operation
     *
     * @throws \eZmaxAPI\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \eZmaxAPI\Model\AttachmentGetAttachmentlogsV1Response|\eZmaxAPI\Model\CommonResponseError
     */
    public function attachmentGetAttachmentlogsV1($pkiAttachmentID, string $contentType = self::contentTypes['attachmentGetAttachmentlogsV1'][0])
    {
        list($response) = $this->attachmentGetAttachmentlogsV1WithHttpInfo($pkiAttachmentID, $contentType);
        return $response;
    }

    /**
     * Operation attachmentGetAttachmentlogsV1WithHttpInfo
     *
     * Retrieve the Attachmentlogs
     *
     * @param  int $pkiAttachmentID (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['attachmentGetAttachmentlogsV1'] to see the possible values for this operation
     *
     * @throws \eZmaxAPI\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \eZmaxAPI\Model\AttachmentGetAttachmentlogsV1Response|\eZmaxAPI\Model\CommonResponseError, HTTP status code, HTTP response headers (array of strings)
     */
    public function attachmentGetAttachmentlogsV1WithHttpInfo($pkiAttachmentID, string $contentType = self::contentTypes['attachmentGetAttachmentlogsV1'][0])
    {
        $request = $this->attachmentGetAttachmentlogsV1Request($pkiAttachmentID, $contentType);

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
                    if ('\eZmaxAPI\Model\AttachmentGetAttachmentlogsV1Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\eZmaxAPI\Model\AttachmentGetAttachmentlogsV1Response' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\eZmaxAPI\Model\AttachmentGetAttachmentlogsV1Response', []),
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

            $returnType = '\eZmaxAPI\Model\AttachmentGetAttachmentlogsV1Response';
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
                        '\eZmaxAPI\Model\AttachmentGetAttachmentlogsV1Response',
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
     * Operation attachmentGetAttachmentlogsV1Async
     *
     * Retrieve the Attachmentlogs
     *
     * @param  int $pkiAttachmentID (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['attachmentGetAttachmentlogsV1'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function attachmentGetAttachmentlogsV1Async($pkiAttachmentID, string $contentType = self::contentTypes['attachmentGetAttachmentlogsV1'][0])
    {
        return $this->attachmentGetAttachmentlogsV1AsyncWithHttpInfo($pkiAttachmentID, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation attachmentGetAttachmentlogsV1AsyncWithHttpInfo
     *
     * Retrieve the Attachmentlogs
     *
     * @param  int $pkiAttachmentID (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['attachmentGetAttachmentlogsV1'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function attachmentGetAttachmentlogsV1AsyncWithHttpInfo($pkiAttachmentID, string $contentType = self::contentTypes['attachmentGetAttachmentlogsV1'][0])
    {
        $returnType = '\eZmaxAPI\Model\AttachmentGetAttachmentlogsV1Response';
        $request = $this->attachmentGetAttachmentlogsV1Request($pkiAttachmentID, $contentType);

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
     * Create request for operation 'attachmentGetAttachmentlogsV1'
     *
     * @param  int $pkiAttachmentID (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['attachmentGetAttachmentlogsV1'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function attachmentGetAttachmentlogsV1Request($pkiAttachmentID, string $contentType = self::contentTypes['attachmentGetAttachmentlogsV1'][0])
    {

        // verify the required parameter 'pkiAttachmentID' is set
        if ($pkiAttachmentID === null || (is_array($pkiAttachmentID) && count($pkiAttachmentID) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $pkiAttachmentID when calling attachmentGetAttachmentlogsV1'
            );
        }
        if ($pkiAttachmentID < 0) {
	    //throw new \InvalidArgumentException('invalid value for "$pkiAttachmentID" when calling ObjectAttachmentApi.attachmentGetAttachmentlogsV1, must be bigger than or equal to 0.');
            throw new \InvalidArgumentException('invalid value '.(is_null($pkiAttachmentID)?'null':'"'.$pkiAttachmentID.'"').' for "pkiAttachmentID" when calling ObjectAttachmentApi.attachmentGetAttachmentlogsV1, must be bigger than or equal to 0.');
        }
        

        $resourcePath = '/1/object/attachment/{pkiAttachmentID}/getAttachmentlogs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($pkiAttachmentID !== null) {
            $resourcePath = str_replace(
                '{' . 'pkiAttachmentID' . '}',
                ObjectSerializer::toPathValue($pkiAttachmentID),
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
