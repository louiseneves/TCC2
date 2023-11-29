# Swagger\Client\OffersApi

All URIs are relative to *https://virtserver.swaggerhub.com/Kanastra/tech-hub/1.1.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiCreditOriginatorsCreditOriginatorIdOffersBatchPost**](OffersApi.md#apicreditoriginatorscreditoriginatoridoffersbatchpost) | **POST** /api/credit-originators/{creditOriginatorId}/offers/batch | EN: Create offers from a batch. | PT: Cria offers a partir de um lote.
[**apiCreditOriginatorsCreditOriginatorIdOffersExternalIdPatch**](OffersApi.md#apicreditoriginatorscreditoriginatoridoffersexternalidpatch) | **PATCH** /api/credit-originators/{creditOriginatorId}/offers/{externalId} | EN: Update sponsor offer | PT: Atualiza o sacado da offer
[**apiCreditOriginatorsCreditOriginatorIdOffersOfferIdInvalidPatch**](OffersApi.md#apicreditoriginatorscreditoriginatoridoffersofferidinvalidpatch) | **PATCH** /api/credit-originators/{creditOriginatorId}/offers/{offerId}/invalid | EN: Returns the status of the invalid offer | PT: Retorna o status da offer inválidada
[**apiCreditOriginatorsCreditOriginatorIdOffersOfferIdOrExternalIdGet**](OffersApi.md#apicreditoriginatorscreditoriginatoridoffersofferidorexternalidget) | **GET** /api/credit-originators/{creditOriginatorId}/offers/{offerIdOrExternalId} | EN: Get the offer information | PT: Retorna as informações da oferta
[**apiCreditOriginatorsCreditOriginatorIdOffersOfferIdPut**](OffersApi.md#apicreditoriginatorscreditoriginatoridoffersofferidput) | **PUT** /api/credit-originators/{creditOriginatorId}/offers/{offerId} | EN: Update an offer. | PT: Atualiza uma offer.
[**apiCreditOriginatorsCreditOriginatorIdOffersPost**](OffersApi.md#apicreditoriginatorscreditoriginatoridofferspost) | **POST** /api/credit-originators/{creditOriginatorId}/offers | EN: Creates a new offer. | PT: Cria uma nova offer.
[**apiFundsFundIdCreditOriginatorsCreditOriginatorIdOffersDailyReportsDateGet**](OffersApi.md#apifundsfundidcreditoriginatorscreditoriginatoridoffersdailyreportsdateget) | **GET** /api/funds/{fundId}/credit-originators/{creditOriginatorId}/offers-daily-reports/{date} | EN: Get a return snapshot of all offers of the specified date | PT: Retorna um snapshot de todas offers recebidas na data especificada

# **apiCreditOriginatorsCreditOriginatorIdOffersBatchPost**
> \Swagger\Client\Model\BatchOfferResponse apiCreditOriginatorsCreditOriginatorIdOffersBatchPost($credit_originator_id, $body)

EN: Create offers from a batch. | PT: Cria offers a partir de um lote.

Creates a new offer from a batch which is the document that starts the process of bonds acquisition. This triggers the offer validations to check offer eligibility.  ----  Cria um novo documento de offer a partir de um lote, que é o documento que inicia o processo de aquisição de títulos. Esse endpoint dá inicio assíncronamente a validação das condições de cessão.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: BearerAccessToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\OffersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$credit_originator_id = "credit_originator_id_example"; // string | The id of the credit originator  ----  O id do originador de crédito.
$body = new \Swagger\Client\Model\BatchOffer(); // \Swagger\Client\Model\BatchOffer | 

try {
    $result = $apiInstance->apiCreditOriginatorsCreditOriginatorIdOffersBatchPost($credit_originator_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OffersApi->apiCreditOriginatorsCreditOriginatorIdOffersBatchPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **credit_originator_id** | **string**| The id of the credit originator  ----  O id do originador de crédito. |
 **body** | [**\Swagger\Client\Model\BatchOffer**](../Model/BatchOffer.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\BatchOfferResponse**](../Model/BatchOfferResponse.md)

### Authorization

[BearerAccessToken](../../README.md#BearerAccessToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiCreditOriginatorsCreditOriginatorIdOffersExternalIdPatch**
> \Swagger\Client\Model\OfferReturnUpdateDocument apiCreditOriginatorsCreditOriginatorIdOffersExternalIdPatch($credit_originator_id, $external_id, $body)

EN: Update sponsor offer | PT: Atualiza o sacado da offer

Endpoint used to update document the offer.  ----  Endpoint usado para atualizar o sacado da offer.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: BearerAccessToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\OffersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$credit_originator_id = "credit_originator_id_example"; // string | The identificator or slug (human-friendly identificator) of the originator  ----  O identificador do originador
$external_id = "external_id_example"; // string | The external Id of the offer.  ----  O external Id da oferta.
$body = new \Swagger\Client\Model\OfferUpdateDocument(); // \Swagger\Client\Model\OfferUpdateDocument | 

try {
    $result = $apiInstance->apiCreditOriginatorsCreditOriginatorIdOffersExternalIdPatch($credit_originator_id, $external_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OffersApi->apiCreditOriginatorsCreditOriginatorIdOffersExternalIdPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **credit_originator_id** | **string**| The identificator or slug (human-friendly identificator) of the originator  ----  O identificador do originador |
 **external_id** | **string**| The external Id of the offer.  ----  O external Id da oferta. |
 **body** | [**\Swagger\Client\Model\OfferUpdateDocument**](../Model/OfferUpdateDocument.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\OfferReturnUpdateDocument**](../Model/OfferReturnUpdateDocument.md)

### Authorization

[BearerAccessToken](../../README.md#BearerAccessToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiCreditOriginatorsCreditOriginatorIdOffersOfferIdInvalidPatch**
> \Swagger\Client\Model\OfferReturnFormatInvalid[] apiCreditOriginatorsCreditOriginatorIdOffersOfferIdInvalidPatch($credit_originator_id, $offer_id)

EN: Returns the status of the invalid offer | PT: Retorna o status da offer inválidada

Endpoint used to invalidate the offer. The payload of it is the same of the outgoing webhook, in case the originator configure a URL to receive real time updates of the offer processing.  ----  Endpoint usado para invalidar a oferta.  O payload desse endpoint é o mesmo que vai chegar via webhook, caso o originador configure uma URL para receber atualizações em tempo real do processamento da offer.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: BearerAccessToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\OffersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$credit_originator_id = "credit_originator_id_example"; // string | The identificator or slug (human-friendly identificator) of the originator  ----  O identificador do originador
$offer_id = "offer_id_example"; // string | The identificator of the offer.  ----  O identificador da oferta.

try {
    $result = $apiInstance->apiCreditOriginatorsCreditOriginatorIdOffersOfferIdInvalidPatch($credit_originator_id, $offer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OffersApi->apiCreditOriginatorsCreditOriginatorIdOffersOfferIdInvalidPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **credit_originator_id** | **string**| The identificator or slug (human-friendly identificator) of the originator  ----  O identificador do originador |
 **offer_id** | **string**| The identificator of the offer.  ----  O identificador da oferta. |

### Return type

[**\Swagger\Client\Model\OfferReturnFormatInvalid[]**](../Model/OfferReturnFormatInvalid.md)

### Authorization

[BearerAccessToken](../../README.md#BearerAccessToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiCreditOriginatorsCreditOriginatorIdOffersOfferIdOrExternalIdGet**
> \Swagger\Client\Model\OfferDetailsResponse apiCreditOriginatorsCreditOriginatorIdOffersOfferIdOrExternalIdGet($credit_originator_id, $offer_id_or_external_id)

EN: Get the offer information | PT: Retorna as informações da oferta

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: BearerAccessToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\OffersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$credit_originator_id = "credit_originator_id_example"; // string | The identifier or slug (human-friendly identifier) of the originator  ----  O identificador do originador
$offer_id_or_external_id = "offer_id_or_external_id_example"; // string | The `offer`identifier.  ----  O identificador da oferta.

try {
    $result = $apiInstance->apiCreditOriginatorsCreditOriginatorIdOffersOfferIdOrExternalIdGet($credit_originator_id, $offer_id_or_external_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OffersApi->apiCreditOriginatorsCreditOriginatorIdOffersOfferIdOrExternalIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **credit_originator_id** | **string**| The identifier or slug (human-friendly identifier) of the originator  ----  O identificador do originador |
 **offer_id_or_external_id** | **string**| The &#x60;offer&#x60;identifier.  ----  O identificador da oferta. |

### Return type

[**\Swagger\Client\Model\OfferDetailsResponse**](../Model/OfferDetailsResponse.md)

### Authorization

[BearerAccessToken](../../README.md#BearerAccessToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiCreditOriginatorsCreditOriginatorIdOffersOfferIdPut**
> apiCreditOriginatorsCreditOriginatorIdOffersOfferIdPut($credit_originator_id, $offer_id, $body)

EN: Update an offer. | PT: Atualiza uma offer.

Updates an offer which is the document that starts the process of bonds acquisition. This triggers the offer validations to check offer eligibility again even if the offer was previously pre-validated.  For fetching/following the status of the offer, you can use this endpoint with the `GET` method.  ----  Atualiza um documento de offer, que é o documento que inicia o processo de aquisição de títulos. Esse endpoint dá inicio assíncronamente a validação das condições de cessão novamente, mesmo que a offer á  tenha sido pré-validada anterioremente.  Para recuperar/acompanhar o status da offer, é necessário utilizar o endpoint com método `GET`.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: BearerAccessToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\OffersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$credit_originator_id = "credit_originator_id_example"; // string | The id of the credit originator  ----  O id do originador de crédito.
$offer_id = "offer_id_example"; // string | The `offer`identifier.  ----  O identificador da oferta.
$body = new \Swagger\Client\Model\Offer(); // \Swagger\Client\Model\Offer | 

try {
    $apiInstance->apiCreditOriginatorsCreditOriginatorIdOffersOfferIdPut($credit_originator_id, $offer_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling OffersApi->apiCreditOriginatorsCreditOriginatorIdOffersOfferIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **credit_originator_id** | **string**| The id of the credit originator  ----  O id do originador de crédito. |
 **offer_id** | **string**| The &#x60;offer&#x60;identifier.  ----  O identificador da oferta. |
 **body** | [**\Swagger\Client\Model\Offer**](../Model/Offer.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[BearerAccessToken](../../README.md#BearerAccessToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiCreditOriginatorsCreditOriginatorIdOffersPost**
> \Swagger\Client\Model\OfferDetailsResponse apiCreditOriginatorsCreditOriginatorIdOffersPost($credit_originator_id, $body)

EN: Creates a new offer. | PT: Cria uma nova offer.

Creates a new offer which is the document that starts the process of bonds acquisition. This triggers the offer validations to check offer eligibility.  For fetching/following the status of the offer, you can use this endpoint with the `GET` method.  ----  Cria um novo documento de offer, que é o documento que inicia o processo de aquisição de títulos. Esse endpoint dá inicio assíncronamente a validação das condições de cessão.  Para recuperar/acompanhar o status da offer, é necessário utilizar o endpoint com método `GET`.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: BearerAccessToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\OffersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$credit_originator_id = "credit_originator_id_example"; // string | The id of the credit originator  ----  O id do originador de crédito.
$body = new \Swagger\Client\Model\Offer(); // \Swagger\Client\Model\Offer | 

try {
    $result = $apiInstance->apiCreditOriginatorsCreditOriginatorIdOffersPost($credit_originator_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OffersApi->apiCreditOriginatorsCreditOriginatorIdOffersPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **credit_originator_id** | **string**| The id of the credit originator  ----  O id do originador de crédito. |
 **body** | [**\Swagger\Client\Model\Offer**](../Model/Offer.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\OfferDetailsResponse**](../Model/OfferDetailsResponse.md)

### Authorization

[BearerAccessToken](../../README.md#BearerAccessToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiFundsFundIdCreditOriginatorsCreditOriginatorIdOffersDailyReportsDateGet**
> \Swagger\Client\Model\OfferReturnFormat[] apiFundsFundIdCreditOriginatorsCreditOriginatorIdOffersDailyReportsDateGet($fund_id, $credit_originator_id, $date)

EN: Get a return snapshot of all offers of the specified date | PT: Retorna um snapshot de todas offers recebidas na data especificada

Endpoint used to return status of offer processing. The payload of it is the same of the outgoing webhook, in case the originator configure a URL to receive real time updates of the offer processing.  ----  Endpoint usado para retornar o status de processamento da offer.  O payload desse endpoint é o mesmo que vai chegar via webhook, caso o originador configure uma URL para receber atualizações em tempo real do processamento da offer.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: BearerAccessToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\OffersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fund_id = "fund_id_example"; // string | The identificator or slug (human-friendly identificator) of the fund  ----  O identificador do fundo
$credit_originator_id = "credit_originator_id_example"; // string | The identificator or slug (human-friendly identificator) of the originator  ----  O identificador do originador
$date = "date_example"; // string | The base date of the report.  ----  A data base do relatório.

try {
    $result = $apiInstance->apiFundsFundIdCreditOriginatorsCreditOriginatorIdOffersDailyReportsDateGet($fund_id, $credit_originator_id, $date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OffersApi->apiFundsFundIdCreditOriginatorsCreditOriginatorIdOffersDailyReportsDateGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fund_id** | **string**| The identificator or slug (human-friendly identificator) of the fund  ----  O identificador do fundo |
 **credit_originator_id** | **string**| The identificator or slug (human-friendly identificator) of the originator  ----  O identificador do originador |
 **date** | **string**| The base date of the report.  ----  A data base do relatório. |

### Return type

[**\Swagger\Client\Model\OfferReturnFormat[]**](../Model/OfferReturnFormat.md)

### Authorization

[BearerAccessToken](../../README.md#BearerAccessToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

