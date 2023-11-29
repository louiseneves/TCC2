<?php
/**
 * LiquidationsApi
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
 * LiquidationsApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LiquidationsApi
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
     * Operation apiCreditOriginatorsCreditOriginatorIdLiquidationsLiquidationIdGet
     *
     * EN: Get a liquidation information | PT: Retorna a informação da liquidaçao
     *
     * @param  string $credit_originator_id The identificator or slug (human-friendly identificator) of the originator  ----  O identificador do originador (required)
     * @param  string $liquidation_id The identificator of the &#x60;liquidation&#x60;.  ----  O identificador do título da liquidação . (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\LiquidationResponse
     */
    public function apiCreditOriginatorsCreditOriginatorIdLiquidationsLiquidationIdGet($credit_originator_id, $liquidation_id)
    {
        list($response) = $this->apiCreditOriginatorsCreditOriginatorIdLiquidationsLiquidationIdGetWithHttpInfo($credit_originator_id, $liquidation_id);
        return $response;
    }

    /**
     * Operation apiCreditOriginatorsCreditOriginatorIdLiquidationsLiquidationIdGetWithHttpInfo
     *
     * EN: Get a liquidation information | PT: Retorna a informação da liquidaçao
     *
     * @param  string $credit_originator_id The identificator or slug (human-friendly identificator) of the originator  ----  O identificador do originador (required)
     * @param  string $liquidation_id The identificator of the &#x60;liquidation&#x60;.  ----  O identificador do título da liquidação . (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\LiquidationResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function apiCreditOriginatorsCreditOriginatorIdLiquidationsLiquidationIdGetWithHttpInfo($credit_originator_id, $liquidation_id)
    {
        $returnType = '\Swagger\Client\Model\LiquidationResponse';
        $request = $this->apiCreditOriginatorsCreditOriginatorIdLiquidationsLiquidationIdGetRequest($credit_originator_id, $liquidation_id);

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
                        '\Swagger\Client\Model\LiquidationResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\ErrorNotFound',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation apiCreditOriginatorsCreditOriginatorIdLiquidationsLiquidationIdGetAsync
     *
     * EN: Get a liquidation information | PT: Retorna a informação da liquidaçao
     *
     * @param  string $credit_originator_id The identificator or slug (human-friendly identificator) of the originator  ----  O identificador do originador (required)
     * @param  string $liquidation_id The identificator of the &#x60;liquidation&#x60;.  ----  O identificador do título da liquidação . (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiCreditOriginatorsCreditOriginatorIdLiquidationsLiquidationIdGetAsync($credit_originator_id, $liquidation_id)
    {
        return $this->apiCreditOriginatorsCreditOriginatorIdLiquidationsLiquidationIdGetAsyncWithHttpInfo($credit_originator_id, $liquidation_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation apiCreditOriginatorsCreditOriginatorIdLiquidationsLiquidationIdGetAsyncWithHttpInfo
     *
     * EN: Get a liquidation information | PT: Retorna a informação da liquidaçao
     *
     * @param  string $credit_originator_id The identificator or slug (human-friendly identificator) of the originator  ----  O identificador do originador (required)
     * @param  string $liquidation_id The identificator of the &#x60;liquidation&#x60;.  ----  O identificador do título da liquidação . (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiCreditOriginatorsCreditOriginatorIdLiquidationsLiquidationIdGetAsyncWithHttpInfo($credit_originator_id, $liquidation_id)
    {
        $returnType = '\Swagger\Client\Model\LiquidationResponse';
        $request = $this->apiCreditOriginatorsCreditOriginatorIdLiquidationsLiquidationIdGetRequest($credit_originator_id, $liquidation_id);

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
     * Create request for operation 'apiCreditOriginatorsCreditOriginatorIdLiquidationsLiquidationIdGet'
     *
     * @param  string $credit_originator_id The identificator or slug (human-friendly identificator) of the originator  ----  O identificador do originador (required)
     * @param  string $liquidation_id The identificator of the &#x60;liquidation&#x60;.  ----  O identificador do título da liquidação . (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function apiCreditOriginatorsCreditOriginatorIdLiquidationsLiquidationIdGetRequest($credit_originator_id, $liquidation_id)
    {
        // verify the required parameter 'credit_originator_id' is set
        if ($credit_originator_id === null || (is_array($credit_originator_id) && count($credit_originator_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $credit_originator_id when calling apiCreditOriginatorsCreditOriginatorIdLiquidationsLiquidationIdGet'
            );
        }
        // verify the required parameter 'liquidation_id' is set
        if ($liquidation_id === null || (is_array($liquidation_id) && count($liquidation_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $liquidation_id when calling apiCreditOriginatorsCreditOriginatorIdLiquidationsLiquidationIdGet'
            );
        }

        $resourcePath = '/api/credit-originators/{creditOriginatorId}/liquidations/{liquidationId}';
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
        // path params
        if ($liquidation_id !== null) {
            $resourcePath = str_replace(
                '{' . 'liquidationId' . '}',
                ObjectSerializer::toPathValue($liquidation_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

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
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation apiCreditOriginatorsCreditOriginatorIdLiquidationsPost
     *
     * [BETA] EN: Creates an individual liquidation of an asset | PT: Cria uma liquidação individual de um título
     *
     * @param  string $credit_originator_id Credit Originator Id or slug  ----  Id ou slug do originador de crédito (required)
     * @param  \Swagger\Client\Model\Liquidation $body body (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\LiquidationResponse
     */
    public function apiCreditOriginatorsCreditOriginatorIdLiquidationsPost($credit_originator_id, $body = null)
    {
        list($response) = $this->apiCreditOriginatorsCreditOriginatorIdLiquidationsPostWithHttpInfo($credit_originator_id, $body);
        return $response;
    }

    /**
     * Operation apiCreditOriginatorsCreditOriginatorIdLiquidationsPostWithHttpInfo
     *
     * [BETA] EN: Creates an individual liquidation of an asset | PT: Cria uma liquidação individual de um título
     *
     * @param  string $credit_originator_id Credit Originator Id or slug  ----  Id ou slug do originador de crédito (required)
     * @param  \Swagger\Client\Model\Liquidation $body (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\LiquidationResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function apiCreditOriginatorsCreditOriginatorIdLiquidationsPostWithHttpInfo($credit_originator_id, $body = null)
    {
        $returnType = '\Swagger\Client\Model\LiquidationResponse';
        $request = $this->apiCreditOriginatorsCreditOriginatorIdLiquidationsPostRequest($credit_originator_id, $body);

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
                        '\Swagger\Client\Model\LiquidationResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\ErrorNotFound',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation apiCreditOriginatorsCreditOriginatorIdLiquidationsPostAsync
     *
     * [BETA] EN: Creates an individual liquidation of an asset | PT: Cria uma liquidação individual de um título
     *
     * @param  string $credit_originator_id Credit Originator Id or slug  ----  Id ou slug do originador de crédito (required)
     * @param  \Swagger\Client\Model\Liquidation $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiCreditOriginatorsCreditOriginatorIdLiquidationsPostAsync($credit_originator_id, $body = null)
    {
        return $this->apiCreditOriginatorsCreditOriginatorIdLiquidationsPostAsyncWithHttpInfo($credit_originator_id, $body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation apiCreditOriginatorsCreditOriginatorIdLiquidationsPostAsyncWithHttpInfo
     *
     * [BETA] EN: Creates an individual liquidation of an asset | PT: Cria uma liquidação individual de um título
     *
     * @param  string $credit_originator_id Credit Originator Id or slug  ----  Id ou slug do originador de crédito (required)
     * @param  \Swagger\Client\Model\Liquidation $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiCreditOriginatorsCreditOriginatorIdLiquidationsPostAsyncWithHttpInfo($credit_originator_id, $body = null)
    {
        $returnType = '\Swagger\Client\Model\LiquidationResponse';
        $request = $this->apiCreditOriginatorsCreditOriginatorIdLiquidationsPostRequest($credit_originator_id, $body);

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
     * Create request for operation 'apiCreditOriginatorsCreditOriginatorIdLiquidationsPost'
     *
     * @param  string $credit_originator_id Credit Originator Id or slug  ----  Id ou slug do originador de crédito (required)
     * @param  \Swagger\Client\Model\Liquidation $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function apiCreditOriginatorsCreditOriginatorIdLiquidationsPostRequest($credit_originator_id, $body = null)
    {
        // verify the required parameter 'credit_originator_id' is set
        if ($credit_originator_id === null || (is_array($credit_originator_id) && count($credit_originator_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $credit_originator_id when calling apiCreditOriginatorsCreditOriginatorIdLiquidationsPost'
            );
        }

        $resourcePath = '/api/credit-originators/{creditOriginatorId}/liquidations';
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
