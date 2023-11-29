<?php
/**
 * RepurchasesApi
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Kanastra Tech Hub
 *
 * The Kanastra Tech Hub solution is an API/application that ease the integration between parties of credit operations in general. From the credit originator, to the investor, until the debt collector and auditing processes.
 *
 * OpenAPI spec version: 1.1.0
 * Contact: tech@kanastra.com.br
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.50
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Swagger\Client\ApiException;
use Swagger\Client\Configuration;
use Swagger\Client\HeaderSelector;
use Swagger\Client\ObjectSerializer;

/**
 * RepurchasesApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RepurchasesApi
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
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation apiCreditOriginatorsCreditOriginatorIdPartialRepurchaseSimulationPost
     *
     * EN: Simulates present value for partial repurchase | PT: Simula valor presente para recompra parcial
     *
     * @param  string $credit_originator_id The identifier or slug (human-friendly identifier) of the originator  ----  O identificador do originador (required)
     * @param  \Swagger\Client\Model\PresentValueSimulation $body body (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\PresentValueSimulationResponse
     */
    public function apiCreditOriginatorsCreditOriginatorIdPartialRepurchaseSimulationPost($credit_originator_id, $body = null)
    {
        list($response) = $this->apiCreditOriginatorsCreditOriginatorIdPartialRepurchaseSimulationPostWithHttpInfo($credit_originator_id, $body);
        return $response;
    }

    /**
     * Operation apiCreditOriginatorsCreditOriginatorIdPartialRepurchaseSimulationPostWithHttpInfo
     *
     * EN: Simulates present value for partial repurchase | PT: Simula valor presente para recompra parcial
     *
     * @param  string $credit_originator_id The identifier or slug (human-friendly identifier) of the originator  ----  O identificador do originador (required)
     * @param  \Swagger\Client\Model\PresentValueSimulation $body (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\PresentValueSimulationResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function apiCreditOriginatorsCreditOriginatorIdPartialRepurchaseSimulationPostWithHttpInfo($credit_originator_id, $body = null)
    {
        $returnType = '\Swagger\Client\Model\PresentValueSimulationResponse';
        $request = $this->apiCreditOriginatorsCreditOriginatorIdPartialRepurchaseSimulationPostRequest($credit_originator_id, $body);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
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
                case 202:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\PresentValueSimulationResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation apiCreditOriginatorsCreditOriginatorIdPartialRepurchaseSimulationPostAsync
     *
     * EN: Simulates present value for partial repurchase | PT: Simula valor presente para recompra parcial
     *
     * @param  string $credit_originator_id The identifier or slug (human-friendly identifier) of the originator  ----  O identificador do originador (required)
     * @param  \Swagger\Client\Model\PresentValueSimulation $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiCreditOriginatorsCreditOriginatorIdPartialRepurchaseSimulationPostAsync($credit_originator_id, $body = null)
    {
        return $this->apiCreditOriginatorsCreditOriginatorIdPartialRepurchaseSimulationPostAsyncWithHttpInfo($credit_originator_id, $body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation apiCreditOriginatorsCreditOriginatorIdPartialRepurchaseSimulationPostAsyncWithHttpInfo
     *
     * EN: Simulates present value for partial repurchase | PT: Simula valor presente para recompra parcial
     *
     * @param  string $credit_originator_id The identifier or slug (human-friendly identifier) of the originator  ----  O identificador do originador (required)
     * @param  \Swagger\Client\Model\PresentValueSimulation $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiCreditOriginatorsCreditOriginatorIdPartialRepurchaseSimulationPostAsyncWithHttpInfo($credit_originator_id, $body = null)
    {
        $returnType = '\Swagger\Client\Model\PresentValueSimulationResponse';
        $request = $this->apiCreditOriginatorsCreditOriginatorIdPartialRepurchaseSimulationPostRequest($credit_originator_id, $body);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
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
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'apiCreditOriginatorsCreditOriginatorIdPartialRepurchaseSimulationPost'
     *
     * @param  string $credit_originator_id The identifier or slug (human-friendly identifier) of the originator  ----  O identificador do originador (required)
     * @param  \Swagger\Client\Model\PresentValueSimulation $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function apiCreditOriginatorsCreditOriginatorIdPartialRepurchaseSimulationPostRequest($credit_originator_id, $body = null)
    {
        // verify the required parameter 'credit_originator_id' is set
        if ($credit_originator_id === null || (is_array($credit_originator_id) && count($credit_originator_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $credit_originator_id when calling apiCreditOriginatorsCreditOriginatorIdPartialRepurchaseSimulationPost'
            );
        }

        $resourcePath = '/api/credit-originators/{creditOriginatorId}/partial-repurchase-simulation';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($credit_originator_id !== null) {
            $resourcePath = str_replace(
                '{' . 'creditOriginatorId' . '}',
                ObjectSerializer::toPathValue($credit_originator_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
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
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
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
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation apiCreditOriginatorsCreditOriginatorIdRepurchaseOfferPost
     *
     * [BETA] EN: Receive an offer for repurchase | PT: Recebe uma oferta para recompra
     *
     * @param  string $credit_originator_id The identifier or slug (human-friendly identifier) of the originator  ----  O identificador do originador (required)
     * @param  \Swagger\Client\Model\RepurchaseOffer $body body (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\RepurchaseOfferResponse
     */
    public function apiCreditOriginatorsCreditOriginatorIdRepurchaseOfferPost($credit_originator_id, $body = null)
    {
        list($response) = $this->apiCreditOriginatorsCreditOriginatorIdRepurchaseOfferPostWithHttpInfo($credit_originator_id, $body);
        return $response;
    }

    /**
     * Operation apiCreditOriginatorsCreditOriginatorIdRepurchaseOfferPostWithHttpInfo
     *
     * [BETA] EN: Receive an offer for repurchase | PT: Recebe uma oferta para recompra
     *
     * @param  string $credit_originator_id The identifier or slug (human-friendly identifier) of the originator  ----  O identificador do originador (required)
     * @param  \Swagger\Client\Model\RepurchaseOffer $body (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\RepurchaseOfferResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function apiCreditOriginatorsCreditOriginatorIdRepurchaseOfferPostWithHttpInfo($credit_originator_id, $body = null)
    {
        $returnType = '\Swagger\Client\Model\RepurchaseOfferResponse';
        $request = $this->apiCreditOriginatorsCreditOriginatorIdRepurchaseOfferPostRequest($credit_originator_id, $body);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
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
                case 202:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\RepurchaseOfferResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation apiCreditOriginatorsCreditOriginatorIdRepurchaseOfferPostAsync
     *
     * [BETA] EN: Receive an offer for repurchase | PT: Recebe uma oferta para recompra
     *
     * @param  string $credit_originator_id The identifier or slug (human-friendly identifier) of the originator  ----  O identificador do originador (required)
     * @param  \Swagger\Client\Model\RepurchaseOffer $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiCreditOriginatorsCreditOriginatorIdRepurchaseOfferPostAsync($credit_originator_id, $body = null)
    {
        return $this->apiCreditOriginatorsCreditOriginatorIdRepurchaseOfferPostAsyncWithHttpInfo($credit_originator_id, $body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation apiCreditOriginatorsCreditOriginatorIdRepurchaseOfferPostAsyncWithHttpInfo
     *
     * [BETA] EN: Receive an offer for repurchase | PT: Recebe uma oferta para recompra
     *
     * @param  string $credit_originator_id The identifier or slug (human-friendly identifier) of the originator  ----  O identificador do originador (required)
     * @param  \Swagger\Client\Model\RepurchaseOffer $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiCreditOriginatorsCreditOriginatorIdRepurchaseOfferPostAsyncWithHttpInfo($credit_originator_id, $body = null)
    {
        $returnType = '\Swagger\Client\Model\RepurchaseOfferResponse';
        $request = $this->apiCreditOriginatorsCreditOriginatorIdRepurchaseOfferPostRequest($credit_originator_id, $body);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
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
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'apiCreditOriginatorsCreditOriginatorIdRepurchaseOfferPost'
     *
     * @param  string $credit_originator_id The identifier or slug (human-friendly identifier) of the originator  ----  O identificador do originador (required)
     * @param  \Swagger\Client\Model\RepurchaseOffer $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function apiCreditOriginatorsCreditOriginatorIdRepurchaseOfferPostRequest($credit_originator_id, $body = null)
    {
        // verify the required parameter 'credit_originator_id' is set
        if ($credit_originator_id === null || (is_array($credit_originator_id) && count($credit_originator_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $credit_originator_id when calling apiCreditOriginatorsCreditOriginatorIdRepurchaseOfferPost'
            );
        }

        $resourcePath = '/api/credit-originators/{creditOriginatorId}/repurchase-offer';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($credit_originator_id !== null) {
            $resourcePath = str_replace(
                '{' . 'creditOriginatorId' . '}',
                ObjectSerializer::toPathValue($credit_originator_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
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
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
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
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation apiCreditOriginatorsCreditOriginatorIdRepurchasesPost
     *
     * [BETA] EN: Receive an asset for repurchase | PT: Recebe um título para recompra
     *
     * @param  string $credit_originator_id The identifier or slug (human-friendly identifier) of the originator  ----  O identificador do originador (required)
     * @param  \Swagger\Client\Model\Repurchase $body body (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\RepurchaseResponse
     */
    public function apiCreditOriginatorsCreditOriginatorIdRepurchasesPost($credit_originator_id, $body = null)
    {
        list($response) = $this->apiCreditOriginatorsCreditOriginatorIdRepurchasesPostWithHttpInfo($credit_originator_id, $body);
        return $response;
    }

    /**
     * Operation apiCreditOriginatorsCreditOriginatorIdRepurchasesPostWithHttpInfo
     *
     * [BETA] EN: Receive an asset for repurchase | PT: Recebe um título para recompra
     *
     * @param  string $credit_originator_id The identifier or slug (human-friendly identifier) of the originator  ----  O identificador do originador (required)
     * @param  \Swagger\Client\Model\Repurchase $body (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\RepurchaseResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function apiCreditOriginatorsCreditOriginatorIdRepurchasesPostWithHttpInfo($credit_originator_id, $body = null)
    {
        $returnType = '\Swagger\Client\Model\RepurchaseResponse';
        $request = $this->apiCreditOriginatorsCreditOriginatorIdRepurchasesPostRequest($credit_originator_id, $body);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
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
                case 202:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\RepurchaseResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation apiCreditOriginatorsCreditOriginatorIdRepurchasesPostAsync
     *
     * [BETA] EN: Receive an asset for repurchase | PT: Recebe um título para recompra
     *
     * @param  string $credit_originator_id The identifier or slug (human-friendly identifier) of the originator  ----  O identificador do originador (required)
     * @param  \Swagger\Client\Model\Repurchase $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiCreditOriginatorsCreditOriginatorIdRepurchasesPostAsync($credit_originator_id, $body = null)
    {
        return $this->apiCreditOriginatorsCreditOriginatorIdRepurchasesPostAsyncWithHttpInfo($credit_originator_id, $body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation apiCreditOriginatorsCreditOriginatorIdRepurchasesPostAsyncWithHttpInfo
     *
     * [BETA] EN: Receive an asset for repurchase | PT: Recebe um título para recompra
     *
     * @param  string $credit_originator_id The identifier or slug (human-friendly identifier) of the originator  ----  O identificador do originador (required)
     * @param  \Swagger\Client\Model\Repurchase $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiCreditOriginatorsCreditOriginatorIdRepurchasesPostAsyncWithHttpInfo($credit_originator_id, $body = null)
    {
        $returnType = '\Swagger\Client\Model\RepurchaseResponse';
        $request = $this->apiCreditOriginatorsCreditOriginatorIdRepurchasesPostRequest($credit_originator_id, $body);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
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
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'apiCreditOriginatorsCreditOriginatorIdRepurchasesPost'
     *
     * @param  string $credit_originator_id The identifier or slug (human-friendly identifier) of the originator  ----  O identificador do originador (required)
     * @param  \Swagger\Client\Model\Repurchase $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function apiCreditOriginatorsCreditOriginatorIdRepurchasesPostRequest($credit_originator_id, $body = null)
    {
        // verify the required parameter 'credit_originator_id' is set
        if ($credit_originator_id === null || (is_array($credit_originator_id) && count($credit_originator_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $credit_originator_id when calling apiCreditOriginatorsCreditOriginatorIdRepurchasesPost'
            );
        }

        $resourcePath = '/api/credit-originators/{creditOriginatorId}/repurchases';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($credit_originator_id !== null) {
            $resourcePath = str_replace(
                '{' . 'creditOriginatorId' . '}',
                ObjectSerializer::toPathValue($credit_originator_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
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
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
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
