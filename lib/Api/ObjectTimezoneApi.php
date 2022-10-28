<?php
/**
 * ObjectTimezoneApi
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
 * The version of the OpenAPI document: 1.1.13
 * Contact: support-api@ezmax.ca
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.1.0-SNAPSHOT
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
 * ObjectTimezoneApi Class Doc Comment
 *
 * @category Class
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ObjectTimezoneApi
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
     * Operation timezoneGetAutocompleteV1
     *
     * Retrieve Timezones and IDs
     *
     * @param  string $sSelector The type of Timezones to return (required)
     * @param  string $eFilterActive Specify which results we want to display. (optional, default to 'Active')
     * @param  string $sQuery Allow to filter the returned results (optional)
     * @param  HeaderAcceptLanguage $acceptLanguage acceptLanguage (optional)
     *
     * @throws \eZmaxAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \eZmaxAPI\Model\CommonGetAutocompleteV1Response
     * @deprecated
     */
    public function timezoneGetAutocompleteV1($sSelector, $eFilterActive = 'Active', $sQuery = null, $acceptLanguage = null)
    {
        list($response) = $this->timezoneGetAutocompleteV1WithHttpInfo($sSelector, $eFilterActive, $sQuery, $acceptLanguage);
        return $response;
    }

    /**
     * Operation timezoneGetAutocompleteV1WithHttpInfo
     *
     * Retrieve Timezones and IDs
     *
     * @param  string $sSelector The type of Timezones to return (required)
     * @param  string $eFilterActive Specify which results we want to display. (optional, default to 'Active')
     * @param  string $sQuery Allow to filter the returned results (optional)
     * @param  HeaderAcceptLanguage $acceptLanguage (optional)
     *
     * @throws \eZmaxAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \eZmaxAPI\Model\CommonGetAutocompleteV1Response, HTTP status code, HTTP response headers (array of strings)
     * @deprecated
     */
    public function timezoneGetAutocompleteV1WithHttpInfo($sSelector, $eFilterActive = 'Active', $sQuery = null, $acceptLanguage = null)
    {
        $request = $this->timezoneGetAutocompleteV1Request($sSelector, $eFilterActive, $sQuery, $acceptLanguage);

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
                    if ('\eZmaxAPI\Model\CommonGetAutocompleteV1Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\eZmaxAPI\Model\CommonGetAutocompleteV1Response' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\eZmaxAPI\Model\CommonGetAutocompleteV1Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\eZmaxAPI\Model\CommonGetAutocompleteV1Response';
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
                        '\eZmaxAPI\Model\CommonGetAutocompleteV1Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation timezoneGetAutocompleteV1Async
     *
     * Retrieve Timezones and IDs
     *
     * @param  string $sSelector The type of Timezones to return (required)
     * @param  string $eFilterActive Specify which results we want to display. (optional, default to 'Active')
     * @param  string $sQuery Allow to filter the returned results (optional)
     * @param  HeaderAcceptLanguage $acceptLanguage (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @deprecated
     */
    public function timezoneGetAutocompleteV1Async($sSelector, $eFilterActive = 'Active', $sQuery = null, $acceptLanguage = null)
    {
        return $this->timezoneGetAutocompleteV1AsyncWithHttpInfo($sSelector, $eFilterActive, $sQuery, $acceptLanguage)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation timezoneGetAutocompleteV1AsyncWithHttpInfo
     *
     * Retrieve Timezones and IDs
     *
     * @param  string $sSelector The type of Timezones to return (required)
     * @param  string $eFilterActive Specify which results we want to display. (optional, default to 'Active')
     * @param  string $sQuery Allow to filter the returned results (optional)
     * @param  HeaderAcceptLanguage $acceptLanguage (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @deprecated
     */
    public function timezoneGetAutocompleteV1AsyncWithHttpInfo($sSelector, $eFilterActive = 'Active', $sQuery = null, $acceptLanguage = null)
    {
        $returnType = '\eZmaxAPI\Model\CommonGetAutocompleteV1Response';
        $request = $this->timezoneGetAutocompleteV1Request($sSelector, $eFilterActive, $sQuery, $acceptLanguage);

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
     * Create request for operation 'timezoneGetAutocompleteV1'
     *
     * @param  string $sSelector The type of Timezones to return (required)
     * @param  string $eFilterActive Specify which results we want to display. (optional, default to 'Active')
     * @param  string $sQuery Allow to filter the returned results (optional)
     * @param  HeaderAcceptLanguage $acceptLanguage (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     * @deprecated
     */
    public function timezoneGetAutocompleteV1Request($sSelector, $eFilterActive = 'Active', $sQuery = null, $acceptLanguage = null)
    {

        // verify the required parameter 'sSelector' is set
        if ($sSelector === null || (is_array($sSelector) && count($sSelector) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $sSelector when calling timezoneGetAutocompleteV1'
            );
        }




        $resourcePath = '/1/object/timezone/getAutocomplete/{sSelector}';
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


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

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

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

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
     * Operation timezoneGetAutocompleteV2
     *
     * Retrieve Timezones and IDs
     *
     * @param  string $sSelector The type of Timezones to return (required)
     * @param  string $eFilterActive Specify which results we want to display. (optional, default to 'Active')
     * @param  string $sQuery Allow to filter the returned results (optional)
     * @param  HeaderAcceptLanguage $acceptLanguage acceptLanguage (optional)
     *
     * @throws \eZmaxAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \eZmaxAPI\Model\TimezoneGetAutocompleteV2Response
     */
    public function timezoneGetAutocompleteV2($sSelector, $eFilterActive = 'Active', $sQuery = null, $acceptLanguage = null)
    {
        list($response) = $this->timezoneGetAutocompleteV2WithHttpInfo($sSelector, $eFilterActive, $sQuery, $acceptLanguage);
        return $response;
    }

    /**
     * Operation timezoneGetAutocompleteV2WithHttpInfo
     *
     * Retrieve Timezones and IDs
     *
     * @param  string $sSelector The type of Timezones to return (required)
     * @param  string $eFilterActive Specify which results we want to display. (optional, default to 'Active')
     * @param  string $sQuery Allow to filter the returned results (optional)
     * @param  HeaderAcceptLanguage $acceptLanguage (optional)
     *
     * @throws \eZmaxAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \eZmaxAPI\Model\TimezoneGetAutocompleteV2Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function timezoneGetAutocompleteV2WithHttpInfo($sSelector, $eFilterActive = 'Active', $sQuery = null, $acceptLanguage = null)
    {
        $request = $this->timezoneGetAutocompleteV2Request($sSelector, $eFilterActive, $sQuery, $acceptLanguage);

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
                    if ('\eZmaxAPI\Model\TimezoneGetAutocompleteV2Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\eZmaxAPI\Model\TimezoneGetAutocompleteV2Response' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\eZmaxAPI\Model\TimezoneGetAutocompleteV2Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\eZmaxAPI\Model\TimezoneGetAutocompleteV2Response';
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
                        '\eZmaxAPI\Model\TimezoneGetAutocompleteV2Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation timezoneGetAutocompleteV2Async
     *
     * Retrieve Timezones and IDs
     *
     * @param  string $sSelector The type of Timezones to return (required)
     * @param  string $eFilterActive Specify which results we want to display. (optional, default to 'Active')
     * @param  string $sQuery Allow to filter the returned results (optional)
     * @param  HeaderAcceptLanguage $acceptLanguage (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function timezoneGetAutocompleteV2Async($sSelector, $eFilterActive = 'Active', $sQuery = null, $acceptLanguage = null)
    {
        return $this->timezoneGetAutocompleteV2AsyncWithHttpInfo($sSelector, $eFilterActive, $sQuery, $acceptLanguage)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation timezoneGetAutocompleteV2AsyncWithHttpInfo
     *
     * Retrieve Timezones and IDs
     *
     * @param  string $sSelector The type of Timezones to return (required)
     * @param  string $eFilterActive Specify which results we want to display. (optional, default to 'Active')
     * @param  string $sQuery Allow to filter the returned results (optional)
     * @param  HeaderAcceptLanguage $acceptLanguage (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function timezoneGetAutocompleteV2AsyncWithHttpInfo($sSelector, $eFilterActive = 'Active', $sQuery = null, $acceptLanguage = null)
    {
        $returnType = '\eZmaxAPI\Model\TimezoneGetAutocompleteV2Response';
        $request = $this->timezoneGetAutocompleteV2Request($sSelector, $eFilterActive, $sQuery, $acceptLanguage);

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
     * Create request for operation 'timezoneGetAutocompleteV2'
     *
     * @param  string $sSelector The type of Timezones to return (required)
     * @param  string $eFilterActive Specify which results we want to display. (optional, default to 'Active')
     * @param  string $sQuery Allow to filter the returned results (optional)
     * @param  HeaderAcceptLanguage $acceptLanguage (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function timezoneGetAutocompleteV2Request($sSelector, $eFilterActive = 'Active', $sQuery = null, $acceptLanguage = null)
    {

        // verify the required parameter 'sSelector' is set
        if ($sSelector === null || (is_array($sSelector) && count($sSelector) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $sSelector when calling timezoneGetAutocompleteV2'
            );
        }




        $resourcePath = '/2/object/timezone/getAutocomplete/{sSelector}';
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


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

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

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

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
