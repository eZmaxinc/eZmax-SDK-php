<?php
/**
 * ObjectEzsigntemplatepackageApi
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
 * OpenAPI Generator version: 6.0.0-SNAPSHOT
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
 * ObjectEzsigntemplatepackageApi Class Doc Comment
 *
 * @category Class
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ObjectEzsigntemplatepackageApi
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
     * Operation ezsigntemplatepackageGetListV1
     *
     * Retrieve Ezsigntemplatepackage list
     *
     * @param  string $eOrderBy Specify how you want the results to be sorted (optional)
     * @param  int $iRowMax iRowMax (optional)
     * @param  int $iRowOffset iRowOffset (optional)
     * @param  \eZmaxAPI\Model\HeaderAcceptLanguage $acceptLanguage acceptLanguage (optional)
     * @param  string $sFilter sFilter (optional)
     *
     * @throws \eZmaxAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \eZmaxAPI\Model\EzsigntemplatepackageGetListV1Response|\eZmaxAPI\Model\CommonResponseError
     */
    public function ezsigntemplatepackageGetListV1($eOrderBy = null, $iRowMax = null, $iRowOffset = null, $acceptLanguage = null, $sFilter = null)
    {
        list($response) = $this->ezsigntemplatepackageGetListV1WithHttpInfo($eOrderBy, $iRowMax, $iRowOffset, $acceptLanguage, $sFilter);
        return $response;
    }

    /**
     * Operation ezsigntemplatepackageGetListV1WithHttpInfo
     *
     * Retrieve Ezsigntemplatepackage list
     *
     * @param  string $eOrderBy Specify how you want the results to be sorted (optional)
     * @param  int $iRowMax (optional)
     * @param  int $iRowOffset (optional)
     * @param  \eZmaxAPI\Model\HeaderAcceptLanguage $acceptLanguage (optional)
     * @param  string $sFilter (optional)
     *
     * @throws \eZmaxAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \eZmaxAPI\Model\EzsigntemplatepackageGetListV1Response|\eZmaxAPI\Model\CommonResponseError, HTTP status code, HTTP response headers (array of strings)
     */
    public function ezsigntemplatepackageGetListV1WithHttpInfo($eOrderBy = null, $iRowMax = null, $iRowOffset = null, $acceptLanguage = null, $sFilter = null)
    {
        $request = $this->ezsigntemplatepackageGetListV1Request($eOrderBy, $iRowMax, $iRowOffset, $acceptLanguage, $sFilter);

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
                    if ('\eZmaxAPI\Model\EzsigntemplatepackageGetListV1Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\eZmaxAPI\Model\EzsigntemplatepackageGetListV1Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 406:
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

            $returnType = '\eZmaxAPI\Model\EzsigntemplatepackageGetListV1Response';
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
                        '\eZmaxAPI\Model\EzsigntemplatepackageGetListV1Response',
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
     * Operation ezsigntemplatepackageGetListV1Async
     *
     * Retrieve Ezsigntemplatepackage list
     *
     * @param  string $eOrderBy Specify how you want the results to be sorted (optional)
     * @param  int $iRowMax (optional)
     * @param  int $iRowOffset (optional)
     * @param  \eZmaxAPI\Model\HeaderAcceptLanguage $acceptLanguage (optional)
     * @param  string $sFilter (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function ezsigntemplatepackageGetListV1Async($eOrderBy = null, $iRowMax = null, $iRowOffset = null, $acceptLanguage = null, $sFilter = null)
    {
        return $this->ezsigntemplatepackageGetListV1AsyncWithHttpInfo($eOrderBy, $iRowMax, $iRowOffset, $acceptLanguage, $sFilter)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation ezsigntemplatepackageGetListV1AsyncWithHttpInfo
     *
     * Retrieve Ezsigntemplatepackage list
     *
     * @param  string $eOrderBy Specify how you want the results to be sorted (optional)
     * @param  int $iRowMax (optional)
     * @param  int $iRowOffset (optional)
     * @param  \eZmaxAPI\Model\HeaderAcceptLanguage $acceptLanguage (optional)
     * @param  string $sFilter (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function ezsigntemplatepackageGetListV1AsyncWithHttpInfo($eOrderBy = null, $iRowMax = null, $iRowOffset = null, $acceptLanguage = null, $sFilter = null)
    {
        $returnType = '\eZmaxAPI\Model\EzsigntemplatepackageGetListV1Response';
        $request = $this->ezsigntemplatepackageGetListV1Request($eOrderBy, $iRowMax, $iRowOffset, $acceptLanguage, $sFilter);

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
     * Create request for operation 'ezsigntemplatepackageGetListV1'
     *
     * @param  string $eOrderBy Specify how you want the results to be sorted (optional)
     * @param  int $iRowMax (optional)
     * @param  int $iRowOffset (optional)
     * @param  \eZmaxAPI\Model\HeaderAcceptLanguage $acceptLanguage (optional)
     * @param  string $sFilter (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function ezsigntemplatepackageGetListV1Request($eOrderBy = null, $iRowMax = null, $iRowOffset = null, $acceptLanguage = null, $sFilter = null)
    {

        $resourcePath = '/1/object/ezsigntemplatepackage/getList';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($eOrderBy !== null) {
            if('form' === 'form' && is_array($eOrderBy)) {
                foreach($eOrderBy as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['eOrderBy'] = $eOrderBy;
            }
        }
        // query params
        if ($iRowMax !== null) {
            if('form' === 'form' && is_array($iRowMax)) {
                foreach($iRowMax as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['iRowMax'] = $iRowMax;
            }
        }
        // query params
        if ($iRowOffset !== null) {
            if('form' === 'form' && is_array($iRowOffset)) {
                foreach($iRowOffset as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['iRowOffset'] = $iRowOffset;
            }
        }
        // query params
        if ($sFilter !== null) {
            if('form' === 'form' && is_array($sFilter)) {
                foreach($sFilter as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['sFilter'] = $sFilter;
            }
        }

        // header params
        if ($acceptLanguage !== null) {
            $headerParams['Accept-Language'] = ObjectSerializer::toHeaderValue($acceptLanguage);
        }



        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'],
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
                $headers = array_merge($headers, RequestSignature::getHeadersV1($apiKey, $secret, 'GET', $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''), $httpBody));
            }		
        }

        return new Request(
            'GET',
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
