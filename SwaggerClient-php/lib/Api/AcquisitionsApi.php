<?php
/**
 * AcquisitionsApi
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
 * AcquisitionsApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AcquisitionsApi
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
     * Operation apiAcquisitionsAcquisitionIdSubmitPatch
     *
     * EN: Submit a remittance of acquisition | PT: Envia uma remessa de aquisição
     *
     * @param  string $acquisition_id The acquisition id  ----  O id da aquisição (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\Acquisition
     */
    public function apiAcquisitionsAcquisitionIdSubmitPatch($acquisition_id)
    {
        list($response) = $this->apiAcquisitionsAcquisitionIdSubmitPatchWithHttpInfo($acquisition_id);
        return $response;
    }

    /**
     * Operation apiAcquisitionsAcquisitionIdSubmitPatchWithHttpInfo
     *
     * EN: Submit a remittance of acquisition | PT: Envia uma remessa de aquisição
     *
     * @param  string $acquisition_id The acquisition id  ----  O id da aquisição (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\Acquisition, HTTP status code, HTTP response headers (array of strings)
     */
    public function apiAcquisitionsAcquisitionIdSubmitPatchWithHttpInfo($acquisition_id)
    {
        $returnType = '\Swagger\Client\Model\Acquisition';
        $request = $this->apiAcquisitionsAcquisitionIdSubmitPatchRequest($acquisition_id);

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
                        '\Swagger\Client\Model\Acquisition',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 406:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\AcquisitionStatusError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation apiAcquisitionsAcquisitionIdSubmitPatchAsync
     *
     * EN: Submit a remittance of acquisition | PT: Envia uma remessa de aquisição
     *
     * @param  string $acquisition_id The acquisition id  ----  O id da aquisição (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiAcquisitionsAcquisitionIdSubmitPatchAsync($acquisition_id)
    {
        return $this->apiAcquisitionsAcquisitionIdSubmitPatchAsyncWithHttpInfo($acquisition_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation apiAcquisitionsAcquisitionIdSubmitPatchAsyncWithHttpInfo
     *
     * EN: Submit a remittance of acquisition | PT: Envia uma remessa de aquisição
     *
     * @param  string $acquisition_id The acquisition id  ----  O id da aquisição (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiAcquisitionsAcquisitionIdSubmitPatchAsyncWithHttpInfo($acquisition_id)
    {
        $returnType = '\Swagger\Client\Model\Acquisition';
        $request = $this->apiAcquisitionsAcquisitionIdSubmitPatchRequest($acquisition_id);

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
     * Create request for operation 'apiAcquisitionsAcquisitionIdSubmitPatch'
     *
     * @param  string $acquisition_id The acquisition id  ----  O id da aquisição (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function apiAcquisitionsAcquisitionIdSubmitPatchRequest($acquisition_id)
    {
        // verify the required parameter 'acquisition_id' is set
        if ($acquisition_id === null || (is_array($acquisition_id) && count($acquisition_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $acquisition_id when calling apiAcquisitionsAcquisitionIdSubmitPatch'
            );
        }

        $resourcePath = '/api/acquisitions/{acquisitionId}/submit';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($acquisition_id !== null) {
            $resourcePath = str_replace(
                '{' . 'acquisitionId' . '}',
                ObjectSerializer::toPathValue($acquisition_id),
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
            'PATCH',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation apiCreditOriginatorsCreditOriginatorIdAcquisitionsAcquisitionIdSubmitPatch
     *
     * EN: Submit a remittance of acquisition | PT: Envia uma remessa de aquisição
     *
     * @param  string $credit_originator_id Credit Originator Id or slug  ----  Id ou slug do originador de crédito (required)
     * @param  string $acquisition_id The acquisition id  ----  O id da aquisição (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\Acquisition
     */
    public function apiCreditOriginatorsCreditOriginatorIdAcquisitionsAcquisitionIdSubmitPatch($credit_originator_id, $acquisition_id)
    {
        list($response) = $this->apiCreditOriginatorsCreditOriginatorIdAcquisitionsAcquisitionIdSubmitPatchWithHttpInfo($credit_originator_id, $acquisition_id);
        return $response;
    }

    /**
     * Operation apiCreditOriginatorsCreditOriginatorIdAcquisitionsAcquisitionIdSubmitPatchWithHttpInfo
     *
     * EN: Submit a remittance of acquisition | PT: Envia uma remessa de aquisição
     *
     * @param  string $credit_originator_id Credit Originator Id or slug  ----  Id ou slug do originador de crédito (required)
     * @param  string $acquisition_id The acquisition id  ----  O id da aquisição (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\Acquisition, HTTP status code, HTTP response headers (array of strings)
     */
    public function apiCreditOriginatorsCreditOriginatorIdAcquisitionsAcquisitionIdSubmitPatchWithHttpInfo($credit_originator_id, $acquisition_id)
    {
        $returnType = '\Swagger\Client\Model\Acquisition';
        $request = $this->apiCreditOriginatorsCreditOriginatorIdAcquisitionsAcquisitionIdSubmitPatchRequest($credit_originator_id, $acquisition_id);

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
                        '\Swagger\Client\Model\Acquisition',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\AcquisitionSubmitCreditOriginatorError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 406:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\AcquisitionStatusError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation apiCreditOriginatorsCreditOriginatorIdAcquisitionsAcquisitionIdSubmitPatchAsync
     *
     * EN: Submit a remittance of acquisition | PT: Envia uma remessa de aquisição
     *
     * @param  string $credit_originator_id Credit Originator Id or slug  ----  Id ou slug do originador de crédito (required)
     * @param  string $acquisition_id The acquisition id  ----  O id da aquisição (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiCreditOriginatorsCreditOriginatorIdAcquisitionsAcquisitionIdSubmitPatchAsync($credit_originator_id, $acquisition_id)
    {
        return $this->apiCreditOriginatorsCreditOriginatorIdAcquisitionsAcquisitionIdSubmitPatchAsyncWithHttpInfo($credit_originator_id, $acquisition_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation apiCreditOriginatorsCreditOriginatorIdAcquisitionsAcquisitionIdSubmitPatchAsyncWithHttpInfo
     *
     * EN: Submit a remittance of acquisition | PT: Envia uma remessa de aquisição
     *
     * @param  string $credit_originator_id Credit Originator Id or slug  ----  Id ou slug do originador de crédito (required)
     * @param  string $acquisition_id The acquisition id  ----  O id da aquisição (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiCreditOriginatorsCreditOriginatorIdAcquisitionsAcquisitionIdSubmitPatchAsyncWithHttpInfo($credit_originator_id, $acquisition_id)
    {
        $returnType = '\Swagger\Client\Model\Acquisition';
        $request = $this->apiCreditOriginatorsCreditOriginatorIdAcquisitionsAcquisitionIdSubmitPatchRequest($credit_originator_id, $acquisition_id);

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
     * Create request for operation 'apiCreditOriginatorsCreditOriginatorIdAcquisitionsAcquisitionIdSubmitPatch'
     *
     * @param  string $credit_originator_id Credit Originator Id or slug  ----  Id ou slug do originador de crédito (required)
     * @param  string $acquisition_id The acquisition id  ----  O id da aquisição (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function apiCreditOriginatorsCreditOriginatorIdAcquisitionsAcquisitionIdSubmitPatchRequest($credit_originator_id, $acquisition_id)
    {
        // verify the required parameter 'credit_originator_id' is set
        if ($credit_originator_id === null || (is_array($credit_originator_id) && count($credit_originator_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $credit_originator_id when calling apiCreditOriginatorsCreditOriginatorIdAcquisitionsAcquisitionIdSubmitPatch'
            );
        }
        // verify the required parameter 'acquisition_id' is set
        if ($acquisition_id === null || (is_array($acquisition_id) && count($acquisition_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $acquisition_id when calling apiCreditOriginatorsCreditOriginatorIdAcquisitionsAcquisitionIdSubmitPatch'
            );
        }

        $resourcePath = '/api/credit-originators/{creditOriginatorId}/acquisitions/{acquisitionId}/submit';
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
        if ($acquisition_id !== null) {
            $resourcePath = str_replace(
                '{' . 'acquisitionId' . '}',
                ObjectSerializer::toPathValue($acquisition_id),
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
            'PATCH',
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
