<?php
/**
 * ObjectFranchisereferalincomeApi
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
 * The version of the OpenAPI document: 1.1.10
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
 * ObjectFranchisereferalincomeApi Class Doc Comment
 *
 * @category Class
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ObjectFranchisereferalincomeApi
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
     * Operation franchisereferalincomeCreateObjectV1
     *
     * Create a new Franchisereferalincome
     *
     * @param  \eZmaxAPI\Model\FranchisereferalincomeCreateObjectV1Request[] $franchisereferalincomeCreateObjectV1Request franchisereferalincomeCreateObjectV1Request (required)
     *
     * @throws \eZmaxAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \eZmaxAPI\Model\FranchisereferalincomeCreateObjectV1Response
     * @deprecated
     */
    public function franchisereferalincomeCreateObjectV1($franchisereferalincomeCreateObjectV1Request)
    {
        list($response) = $this->franchisereferalincomeCreateObjectV1WithHttpInfo($franchisereferalincomeCreateObjectV1Request);
        return $response;
    }

    /**
     * Operation franchisereferalincomeCreateObjectV1WithHttpInfo
     *
     * Create a new Franchisereferalincome
     *
     * @param  \eZmaxAPI\Model\FranchisereferalincomeCreateObjectV1Request[] $franchisereferalincomeCreateObjectV1Request (required)
     *
     * @throws \eZmaxAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \eZmaxAPI\Model\FranchisereferalincomeCreateObjectV1Response, HTTP status code, HTTP response headers (array of strings)
     * @deprecated
     */
    public function franchisereferalincomeCreateObjectV1WithHttpInfo($franchisereferalincomeCreateObjectV1Request)
    {
        $request = $this->franchisereferalincomeCreateObjectV1Request($franchisereferalincomeCreateObjectV1Request);

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
                case 201:
                    if ('\eZmaxAPI\Model\FranchisereferalincomeCreateObjectV1Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\eZmaxAPI\Model\FranchisereferalincomeCreateObjectV1Response' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\eZmaxAPI\Model\FranchisereferalincomeCreateObjectV1Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\eZmaxAPI\Model\FranchisereferalincomeCreateObjectV1Response';
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
                case 201:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\eZmaxAPI\Model\FranchisereferalincomeCreateObjectV1Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation franchisereferalincomeCreateObjectV1Async
     *
     * Create a new Franchisereferalincome
     *
     * @param  \eZmaxAPI\Model\FranchisereferalincomeCreateObjectV1Request[] $franchisereferalincomeCreateObjectV1Request (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @deprecated
     */
    public function franchisereferalincomeCreateObjectV1Async($franchisereferalincomeCreateObjectV1Request)
    {
        return $this->franchisereferalincomeCreateObjectV1AsyncWithHttpInfo($franchisereferalincomeCreateObjectV1Request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation franchisereferalincomeCreateObjectV1AsyncWithHttpInfo
     *
     * Create a new Franchisereferalincome
     *
     * @param  \eZmaxAPI\Model\FranchisereferalincomeCreateObjectV1Request[] $franchisereferalincomeCreateObjectV1Request (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @deprecated
     */
    public function franchisereferalincomeCreateObjectV1AsyncWithHttpInfo($franchisereferalincomeCreateObjectV1Request)
    {
        $returnType = '\eZmaxAPI\Model\FranchisereferalincomeCreateObjectV1Response';
        $request = $this->franchisereferalincomeCreateObjectV1Request($franchisereferalincomeCreateObjectV1Request);

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
     * Create request for operation 'franchisereferalincomeCreateObjectV1'
     *
     * @param  \eZmaxAPI\Model\FranchisereferalincomeCreateObjectV1Request[] $franchisereferalincomeCreateObjectV1Request (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     * @deprecated
     */
    public function franchisereferalincomeCreateObjectV1Request($franchisereferalincomeCreateObjectV1Request)
    {
        // verify the required parameter 'franchisereferalincomeCreateObjectV1Request' is set
        if ($franchisereferalincomeCreateObjectV1Request === null || (is_array($franchisereferalincomeCreateObjectV1Request) && count($franchisereferalincomeCreateObjectV1Request) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $franchisereferalincomeCreateObjectV1Request when calling franchisereferalincomeCreateObjectV1'
            );
        }

        $resourcePath = '/1/object/franchisereferalincome';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($franchisereferalincomeCreateObjectV1Request)) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($franchisereferalincomeCreateObjectV1Request));
            } else {
                $httpBody = $franchisereferalincomeCreateObjectV1Request;
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
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation franchisereferalincomeCreateObjectV2
     *
     * Create a new Franchisereferalincome
     *
     * @param  \eZmaxAPI\Model\FranchisereferalincomeCreateObjectV2Request $franchisereferalincomeCreateObjectV2Request franchisereferalincomeCreateObjectV2Request (required)
     *
     * @throws \eZmaxAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \eZmaxAPI\Model\FranchisereferalincomeCreateObjectV2Response
     */
    public function franchisereferalincomeCreateObjectV2($franchisereferalincomeCreateObjectV2Request)
    {
        list($response) = $this->franchisereferalincomeCreateObjectV2WithHttpInfo($franchisereferalincomeCreateObjectV2Request);
        return $response;
    }

    /**
     * Operation franchisereferalincomeCreateObjectV2WithHttpInfo
     *
     * Create a new Franchisereferalincome
     *
     * @param  \eZmaxAPI\Model\FranchisereferalincomeCreateObjectV2Request $franchisereferalincomeCreateObjectV2Request (required)
     *
     * @throws \eZmaxAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \eZmaxAPI\Model\FranchisereferalincomeCreateObjectV2Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function franchisereferalincomeCreateObjectV2WithHttpInfo($franchisereferalincomeCreateObjectV2Request)
    {
        $request = $this->franchisereferalincomeCreateObjectV2Request($franchisereferalincomeCreateObjectV2Request);

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
                case 201:
                    if ('\eZmaxAPI\Model\FranchisereferalincomeCreateObjectV2Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\eZmaxAPI\Model\FranchisereferalincomeCreateObjectV2Response' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\eZmaxAPI\Model\FranchisereferalincomeCreateObjectV2Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\eZmaxAPI\Model\FranchisereferalincomeCreateObjectV2Response';
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
                case 201:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\eZmaxAPI\Model\FranchisereferalincomeCreateObjectV2Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation franchisereferalincomeCreateObjectV2Async
     *
     * Create a new Franchisereferalincome
     *
     * @param  \eZmaxAPI\Model\FranchisereferalincomeCreateObjectV2Request $franchisereferalincomeCreateObjectV2Request (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function franchisereferalincomeCreateObjectV2Async($franchisereferalincomeCreateObjectV2Request)
    {
        return $this->franchisereferalincomeCreateObjectV2AsyncWithHttpInfo($franchisereferalincomeCreateObjectV2Request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation franchisereferalincomeCreateObjectV2AsyncWithHttpInfo
     *
     * Create a new Franchisereferalincome
     *
     * @param  \eZmaxAPI\Model\FranchisereferalincomeCreateObjectV2Request $franchisereferalincomeCreateObjectV2Request (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function franchisereferalincomeCreateObjectV2AsyncWithHttpInfo($franchisereferalincomeCreateObjectV2Request)
    {
        $returnType = '\eZmaxAPI\Model\FranchisereferalincomeCreateObjectV2Response';
        $request = $this->franchisereferalincomeCreateObjectV2Request($franchisereferalincomeCreateObjectV2Request);

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
     * Create request for operation 'franchisereferalincomeCreateObjectV2'
     *
     * @param  \eZmaxAPI\Model\FranchisereferalincomeCreateObjectV2Request $franchisereferalincomeCreateObjectV2Request (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function franchisereferalincomeCreateObjectV2Request($franchisereferalincomeCreateObjectV2Request)
    {
        // verify the required parameter 'franchisereferalincomeCreateObjectV2Request' is set
        if ($franchisereferalincomeCreateObjectV2Request === null || (is_array($franchisereferalincomeCreateObjectV2Request) && count($franchisereferalincomeCreateObjectV2Request) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $franchisereferalincomeCreateObjectV2Request when calling franchisereferalincomeCreateObjectV2'
            );
        }

        $resourcePath = '/2/object/franchisereferalincome';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($franchisereferalincomeCreateObjectV2Request)) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($franchisereferalincomeCreateObjectV2Request));
            } else {
                $httpBody = $franchisereferalincomeCreateObjectV2Request;
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
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
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
