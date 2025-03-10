<?php
/**
 * GlobalCustomerApi
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
 * Generator version: 7.12.0
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
 * GlobalCustomerApi Class Doc Comment
 *
 * @category Class
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class GlobalCustomerApi
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
        'globalCustomerGetEndpointV1' => [
            'application/json',
        ],
    ];

    /** @var array[] $objEzmaxConfig **/
    public const objEzmaxConfig = [
        'globalCustomerGetEndpointV1' => [
            'permissions' => [
            ],
            'usertypeextra' => [
            ],
            'authorizationsources' => [
            ],
            'deprecated' => true,
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
     * Operation globalCustomerGetEndpointV1
     *
     * Get customer endpoint
     *
     * @param  string $pksCustomerCode pksCustomerCode (required)
     * @param  string|null $sInfrastructureproductCode The infrastructure product Code  If undefined, \&quot;appcluster01\&quot; is assumed (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['globalCustomerGetEndpointV1'] to see the possible values for this operation
     *
     * @throws \eZmaxAPI\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \eZmaxAPI\Model\GlobalCustomerGetEndpointV1Response|\eZmaxAPI\Model\CommonResponseError
     * @deprecated
     */
    public function globalCustomerGetEndpointV1($pksCustomerCode, $sInfrastructureproductCode = null, string $contentType = self::contentTypes['globalCustomerGetEndpointV1'][0])
    {
        list($response) = $this->globalCustomerGetEndpointV1WithHttpInfo($pksCustomerCode, $sInfrastructureproductCode, $contentType);
        return $response;
    }

    /**
     * Operation globalCustomerGetEndpointV1WithHttpInfo
     *
     * Get customer endpoint
     *
     * @param  string $pksCustomerCode (required)
     * @param  string|null $sInfrastructureproductCode The infrastructure product Code  If undefined, \&quot;appcluster01\&quot; is assumed (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['globalCustomerGetEndpointV1'] to see the possible values for this operation
     *
     * @throws \eZmaxAPI\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \eZmaxAPI\Model\GlobalCustomerGetEndpointV1Response|\eZmaxAPI\Model\CommonResponseError, HTTP status code, HTTP response headers (array of strings)
     * @deprecated
     */
    public function globalCustomerGetEndpointV1WithHttpInfo($pksCustomerCode, $sInfrastructureproductCode = null, string $contentType = self::contentTypes['globalCustomerGetEndpointV1'][0])
    {
        $request = $this->globalCustomerGetEndpointV1Request($pksCustomerCode, $sInfrastructureproductCode, $contentType);

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
                    if ('\eZmaxAPI\Model\GlobalCustomerGetEndpointV1Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\eZmaxAPI\Model\GlobalCustomerGetEndpointV1Response' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\eZmaxAPI\Model\GlobalCustomerGetEndpointV1Response', []),
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

            $returnType = '\eZmaxAPI\Model\GlobalCustomerGetEndpointV1Response';
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
                        '\eZmaxAPI\Model\GlobalCustomerGetEndpointV1Response',
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
     * Operation globalCustomerGetEndpointV1Async
     *
     * Get customer endpoint
     *
     * @param  string $pksCustomerCode (required)
     * @param  string|null $sInfrastructureproductCode The infrastructure product Code  If undefined, \&quot;appcluster01\&quot; is assumed (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['globalCustomerGetEndpointV1'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @deprecated
     */
    public function globalCustomerGetEndpointV1Async($pksCustomerCode, $sInfrastructureproductCode = null, string $contentType = self::contentTypes['globalCustomerGetEndpointV1'][0])
    {
        return $this->globalCustomerGetEndpointV1AsyncWithHttpInfo($pksCustomerCode, $sInfrastructureproductCode, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation globalCustomerGetEndpointV1AsyncWithHttpInfo
     *
     * Get customer endpoint
     *
     * @param  string $pksCustomerCode (required)
     * @param  string|null $sInfrastructureproductCode The infrastructure product Code  If undefined, \&quot;appcluster01\&quot; is assumed (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['globalCustomerGetEndpointV1'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @deprecated
     */
    public function globalCustomerGetEndpointV1AsyncWithHttpInfo($pksCustomerCode, $sInfrastructureproductCode = null, string $contentType = self::contentTypes['globalCustomerGetEndpointV1'][0])
    {
        $returnType = '\eZmaxAPI\Model\GlobalCustomerGetEndpointV1Response';
        $request = $this->globalCustomerGetEndpointV1Request($pksCustomerCode, $sInfrastructureproductCode, $contentType);

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
     * Create request for operation 'globalCustomerGetEndpointV1'
     *
     * @param  string $pksCustomerCode (required)
     * @param  string|null $sInfrastructureproductCode The infrastructure product Code  If undefined, \&quot;appcluster01\&quot; is assumed (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['globalCustomerGetEndpointV1'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     * @deprecated
     */
    public function globalCustomerGetEndpointV1Request($pksCustomerCode, $sInfrastructureproductCode = null, string $contentType = self::contentTypes['globalCustomerGetEndpointV1'][0])
    {

        // verify the required parameter 'pksCustomerCode' is set
        if ($pksCustomerCode === null || (is_array($pksCustomerCode) && count($pksCustomerCode) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $pksCustomerCode when calling globalCustomerGetEndpointV1'
            );
        }
        if (strlen($pksCustomerCode) > 6) {
	    //throw new \InvalidArgumentException('invalid length for "$pksCustomerCode" when calling GlobalCustomerApi.globalCustomerGetEndpointV1, must be smaller than or equal to 6.');
            throw new \InvalidArgumentException('value '.(is_null($pksCustomerCode)?'null':'"'.$pksCustomerCode.'"').', invalid length for "pksCustomerCode" when calling GlobalCustomerApi.globalCustomerGetEndpointV1, must be smaller than or equal to 6.');
        }
        if (strlen($pksCustomerCode) < 2) {
	    //throw new \InvalidArgumentException('invalid length for "$pksCustomerCode" when calling GlobalCustomerApi.globalCustomerGetEndpointV1, must be bigger than or equal to 2.');
            throw new \InvalidArgumentException('value '.(is_null($pksCustomerCode)?'null':'"'.$pksCustomerCode.'"').', invalid length for "pksCustomerCode" when calling GlobalCustomerApi.globalCustomerGetEndpointV1, must be bigger than or equal to 2.');
        }
        


        $resourcePath = '/1/customer/{pksCustomerCode}/endpoint';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $sInfrastructureproductCode,
            'sInfrastructureproductCode', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);


        // path params
        if ($pksCustomerCode !== null) {
            $resourcePath = str_replace(
                '{' . 'pksCustomerCode' . '}',
                ObjectSerializer::toPathValue($pksCustomerCode),
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
