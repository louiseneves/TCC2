# Swagger\Client\ConciliationsApi

All URIs are relative to *https://virtserver.swaggerhub.com/Kanastra/tech-hub/1.1.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiCreditOriginatorsCreditOriginatorIdCnabPost**](ConciliationsApi.md#apicreditoriginatorscreditoriginatoridcnabpost) | **POST** /api/credit-originators/{creditOriginatorId}/cnab | [BETA] EN: Processes a CNAB file for reconciliation | PT: Processa um arquivo CNAB para reconciliação

# **apiCreditOriginatorsCreditOriginatorIdCnabPost**
> \Swagger\Client\Model\ConciliationResponse apiCreditOriginatorsCreditOriginatorIdCnabPost($credit_originator_id, $document)

[BETA] EN: Processes a CNAB file for reconciliation | PT: Processa um arquivo CNAB para reconciliação

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: BearerAccessToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ConciliationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$credit_originator_id = "credit_originator_id_example"; // string | Credit Originator Id or slug  ----  Id ou slug do originador de crédito
$document = "document_example"; // string | Arquivo CNAB em formato .txt

try {
    $result = $apiInstance->apiCreditOriginatorsCreditOriginatorIdCnabPost($credit_originator_id, $document);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConciliationsApi->apiCreditOriginatorsCreditOriginatorIdCnabPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **credit_originator_id** | **string**| Credit Originator Id or slug  ----  Id ou slug do originador de crédito |
 **document** | **string****string**| Arquivo CNAB em formato .txt |

### Return type

[**\Swagger\Client\Model\ConciliationResponse**](../Model/ConciliationResponse.md)

### Authorization

[BearerAccessToken](../../README.md#BearerAccessToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

