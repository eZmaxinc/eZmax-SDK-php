<?php
/**
 * ModuleAuthenticateApi
 * PHP version 7.3
 *
 * @category Class
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * eZmax API Definition
 *
 * This API expose all the functionnalities for the eZmax and eZsign applications.
 *
 * The version of the OpenAPI document: 1.1.4
 * Contact: support-api@ezmax.ca
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.3.1-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace eZmaxAPI\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use eZmaxAPI\ApiException;
use eZmaxAPI\Configuration;
use eZmaxAPI\HeaderSelector;
use eZmaxAPI\ObjectSerializer;
use eZmaxAPI\RequestSignature;

/**
 * ModuleAuthenticateApi Class Doc Comment
 *
 * @category Class
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ModuleAuthenticateApi
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
     * Operation authenticateAuthenticateV2
     *
     * Authenticate a user
     *
     * @param  string $eSessionType eSessionType (required)
     * @param  \eZmaxAPI\Model\AuthenticateAuthenticateV2Request $authenticateAuthenticateV2Request authenticateAuthenticateV2Request (required)
     *
     * @throws \eZmaxAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \eZmaxAPI\Model\AuthenticateAuthenticateV2Response|\eZmaxAPI\Model\CommonResponseError
     */
    public function authenticateAuthenticateV2($eSessionType, $authenticateAuthenticateV2Request)
    {
        list($response) = $this->authenticateAuthenticateV2WithHttpInfo($eSessionType, $authenticateAuthenticateV2Request);
        return $response;
    }

    /**
     * Operation authenticateAuthenticateV2WithHttpInfo
     *
     * Authenticate a user
     *
     * @param  string $eSessionType (required)
     * @param  \eZmaxAPI\Model\AuthenticateAuthenticateV2Request $authenticateAuthenticateV2Request (required)
     *
     * @throws \eZmaxAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \eZmaxAPI\Model\AuthenticateAuthenticateV2Response|\eZmaxAPI\Model\CommonResponseError, HTTP status code, HTTP response headers (array of strings)
     */
    public function authenticateAuthenticateV2WithHttpInfo($eSessionType, $authenticateAuthenticateV2Request)
    {
        $request = $this->authenticateAuthenticateV2Request($eSessionType, $authenticateAuthenticateV2Request);

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
                    if ('\eZmaxAPI\Model\AuthenticateAuthenticateV2Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\eZmaxAPI\Model\AuthenticateAuthenticateV2Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 401:
                    if ('\eZmaxAPI\Model\CommonResponseError' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\eZmaxAPI\Model\CommonResponseError', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\eZmaxAPI\Model\AuthenticateAuthenticateV2Response';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
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
                        '\eZmaxAPI\Model\AuthenticateAuthenticateV2Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
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
     * Operation authenticateAuthenticateV2Async
     *
     * Authenticate a user
     *
     * @param  string $eSessionType (required)
     * @param  \eZmaxAPI\Model\AuthenticateAuthenticateV2Request $authenticateAuthenticateV2Request (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function authenticateAuthenticateV2Async($eSessionType, $authenticateAuthenticateV2Request)
    {
        return $this->authenticateAuthenticateV2AsyncWithHttpInfo($eSessionType, $authenticateAuthenticateV2Request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation authenticateAuthenticateV2AsyncWithHttpInfo
     *
     * Authenticate a user
     *
     * @param  string $eSessionType (required)
     * @param  \eZmaxAPI\Model\AuthenticateAuthenticateV2Request $authenticateAuthenticateV2Request (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function authenticateAuthenticateV2AsyncWithHttpInfo($eSessionType, $authenticateAuthenticateV2Request)
    {
        $returnType = '\eZmaxAPI\Model\AuthenticateAuthenticateV2Response';
        $request = $this->authenticateAuthenticateV2Request($eSessionType, $authenticateAuthenticateV2Request);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
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
     * Create request for operation 'authenticateAuthenticateV2'
     *
     * @param  string $eSessionType (required)
     * @param  \eZmaxAPI\Model\AuthenticateAuthenticateV2Request $authenticateAuthenticateV2Request (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function authenticateAuthenticateV2Request($eSessionType, $authenticateAuthenticateV2Request)
    {
        // verify the required parameter 'eSessionType' is set
        if ($eSessionType === null || (is_array($eSessionType) && count($eSessionType) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $eSessionType when calling authenticateAuthenticateV2'
            );
        }
        // verify the required parameter 'authenticateAuthenticateV2Request' is set
        if ($authenticateAuthenticateV2Request === null || (is_array($authenticateAuthenticateV2Request) && count($authenticateAuthenticateV2Request) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $authenticateAuthenticateV2Request when calling authenticateAuthenticateV2'
            );
        }

        $resourcePath = '/2/module/authenticate/authenticate/{eSessionType}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($eSessionType !== null) {
            $resourcePath = str_replace(
                '{' . 'eSessionType' . '}',
                ObjectSerializer::toPathValue($eSessionType),
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
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($authenticateAuthenticateV2Request)) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($authenticateAuthenticateV2Request));
            } else {
                $httpBody = $authenticateAuthenticateV2Request;
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
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
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

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);

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
