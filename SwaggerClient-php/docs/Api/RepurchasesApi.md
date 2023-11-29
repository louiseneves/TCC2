# Swagger\Client\RepurchasesApi

All URIs are relative to *https://virtserver.swaggerhub.com/Kanastra/tech-hub/1.1.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiCreditOriginatorsCreditOriginatorIdPartialRepurchaseSimulationPost**](RepurchasesApi.md#apicreditoriginatorscreditoriginatoridpartialrepurchasesimulationpost) | **POST** /api/credit-originators/{creditOriginatorId}/partial-repurchase-simulation | EN: Simulates present value for partial repurchase | PT: Simula valor presente para recompra parcial
[**apiCreditOriginatorsCreditOriginatorIdRepurchaseOfferPost**](RepurchasesApi.md#apicreditoriginatorscreditoriginatoridrepurchaseofferpost) | **POST** /api/credit-originators/{creditOriginatorId}/repurchase-offer | [BETA] EN: Receive an offer for repurchase | PT: Recebe uma oferta para recompra
[**apiCreditOriginatorsCreditOriginatorIdRepurchasesPost**](RepurchasesApi.md#apicreditoriginatorscreditoriginatoridrepurchasespost) | **POST** /api/credit-originators/{creditOriginatorId}/repurchases | [BETA] EN: Receive an asset for repurchase | PT: Recebe um título para recompra

# **apiCreditOriginatorsCreditOriginatorIdPartialRepurchaseSimulationPost**
> \Swagger\Client\Model\PresentValueSimulationResponse apiCreditOriginatorsCreditOriginatorIdPartialRepurchaseSimulationPost($credit_originator_id, $body)

EN: Simulates present value for partial repurchase | PT: Simula valor presente para recompra parcial

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: BearerAccessToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\RepurchasesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$credit_originator_id = "credit_originator_id_example"; // string | The identifier or slug (human-friendly identifier) of the originator  ----  O identificador do originador
$body = new \Swagger\Client\Model\PresentValueSimulation(); // \Swagger\Client\Model\PresentValueSimulation | 

try {
    $result = $apiInstance->apiCreditOriginatorsCreditOriginatorIdPartialRepurchaseSimulationPost($credit_originator_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepurchasesApi->apiCreditOriginatorsCreditOriginatorIdPartialRepurchaseSimulationPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **credit_originator_id** | **string**| The identifier or slug (human-friendly identifier) of the originator  ----  O identificador do originador |
 **body** | [**\Swagger\Client\Model\PresentValueSimulation**](../Model/PresentValueSimulation.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\PresentValueSimulationResponse**](../Model/PresentValueSimulationResponse.md)

### Authorization

[BearerAccessToken](../../README.md#BearerAccessToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiCreditOriginatorsCreditOriginatorIdRepurchaseOfferPost**
> \Swagger\Client\Model\RepurchaseOfferResponse apiCreditOriginatorsCreditOriginatorIdRepurchaseOfferPost($credit_originator_id, $body)

[BETA] EN: Receive an offer for repurchase | PT: Recebe uma oferta para recompra

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: BearerAccessToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\RepurchasesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$credit_originator_id = "credit_originator_id_example"; // string | The identifier or slug (human-friendly identifier) of the originator  ----  O identificador do originador
$body = new \Swagger\Client\Model\RepurchaseOffer(); // \Swagger\Client\Model\RepurchaseOffer | 

try {
    $result = $apiInstance->apiCreditOriginatorsCreditOriginatorIdRepurchaseOfferPost($credit_originator_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepurchasesApi->apiCreditOriginatorsCreditOriginatorIdRepurchaseOfferPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **credit_originator_id** | **string**| The identifier or slug (human-friendly identifier) of the originator  ----  O identificador do originador |
 **body** | [**\Swagger\Client\Model\RepurchaseOffer**](../Model/RepurchaseOffer.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\RepurchaseOfferResponse**](../Model/RepurchaseOfferResponse.md)

### Authorization

[BearerAccessToken](../../README.md#BearerAccessToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiCreditOriginatorsCreditOriginatorIdRepurchasesPost**
> \Swagger\Client\Model\RepurchaseResponse apiCreditOriginatorsCreditOriginatorIdRepurchasesPost($credit_originator_id, $body)

[BETA] EN: Receive an asset for repurchase | PT: Recebe um título para recompra

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: BearerAccessToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\RepurchasesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$credit_originator_id = "credit_originator_id_example"; // string | The identifier or slug (human-friendly identifier) of the originator  ----  O identificador do originador
$body = new \Swagger\Client\Model\Repurchase(); // \Swagger\Client\Model\Repurchase | 

try {
    $result = $apiInstance->apiCreditOriginatorsCreditOriginatorIdRepurchasesPost($credit_originator_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepurchasesApi->apiCreditOriginatorsCreditOriginatorIdRepurchasesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **credit_originator_id** | **string**| The identifier or slug (human-friendly identifier) of the originator  ----  O identificador do originador |
 **body** | [**\Swagger\Client\Model\Repurchase**](../Model/Repurchase.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\RepurchaseResponse**](../Model/RepurchaseResponse.md)

### Authorization

[BearerAccessToken](../../README.md#BearerAccessToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

