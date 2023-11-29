# Swagger\Client\LiquidationsApi

All URIs are relative to *https://virtserver.swaggerhub.com/Kanastra/tech-hub/1.1.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiCreditOriginatorsCreditOriginatorIdLiquidationsLiquidationIdGet**](LiquidationsApi.md#apicreditoriginatorscreditoriginatoridliquidationsliquidationidget) | **GET** /api/credit-originators/{creditOriginatorId}/liquidations/{liquidationId} | EN: Get a liquidation information | PT: Retorna a informação da liquidaçao
[**apiCreditOriginatorsCreditOriginatorIdLiquidationsPost**](LiquidationsApi.md#apicreditoriginatorscreditoriginatoridliquidationspost) | **POST** /api/credit-originators/{creditOriginatorId}/liquidations | [BETA] EN: Creates an individual liquidation of an asset | PT: Cria uma liquidação individual de um título

# **apiCreditOriginatorsCreditOriginatorIdLiquidationsLiquidationIdGet**
> \Swagger\Client\Model\LiquidationResponse apiCreditOriginatorsCreditOriginatorIdLiquidationsLiquidationIdGet($credit_originator_id, $liquidation_id)

EN: Get a liquidation information | PT: Retorna a informação da liquidaçao

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: BearerAccessToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\LiquidationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$credit_originator_id = "credit_originator_id_example"; // string | The identificator or slug (human-friendly identificator) of the originator  ----  O identificador do originador
$liquidation_id = "liquidation_id_example"; // string | The identificator of the `liquidation`.  ----  O identificador do título da liquidação .

try {
    $result = $apiInstance->apiCreditOriginatorsCreditOriginatorIdLiquidationsLiquidationIdGet($credit_originator_id, $liquidation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LiquidationsApi->apiCreditOriginatorsCreditOriginatorIdLiquidationsLiquidationIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **credit_originator_id** | **string**| The identificator or slug (human-friendly identificator) of the originator  ----  O identificador do originador |
 **liquidation_id** | **string**| The identificator of the &#x60;liquidation&#x60;.  ----  O identificador do título da liquidação . |

### Return type

[**\Swagger\Client\Model\LiquidationResponse**](../Model/LiquidationResponse.md)

### Authorization

[BearerAccessToken](../../README.md#BearerAccessToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiCreditOriginatorsCreditOriginatorIdLiquidationsPost**
> \Swagger\Client\Model\LiquidationResponse apiCreditOriginatorsCreditOriginatorIdLiquidationsPost($credit_originator_id, $body)

[BETA] EN: Creates an individual liquidation of an asset | PT: Cria uma liquidação individual de um título

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: BearerAccessToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\LiquidationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$credit_originator_id = "credit_originator_id_example"; // string | Credit Originator Id or slug  ----  Id ou slug do originador de crédito
$body = new \Swagger\Client\Model\Liquidation(); // \Swagger\Client\Model\Liquidation | 

try {
    $result = $apiInstance->apiCreditOriginatorsCreditOriginatorIdLiquidationsPost($credit_originator_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LiquidationsApi->apiCreditOriginatorsCreditOriginatorIdLiquidationsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **credit_originator_id** | **string**| Credit Originator Id or slug  ----  Id ou slug do originador de crédito |
 **body** | [**\Swagger\Client\Model\Liquidation**](../Model/Liquidation.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\LiquidationResponse**](../Model/LiquidationResponse.md)

### Authorization

[BearerAccessToken](../../README.md#BearerAccessToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

