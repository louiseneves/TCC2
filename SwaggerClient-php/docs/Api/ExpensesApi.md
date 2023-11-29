# Swagger\Client\ExpensesApi

All URIs are relative to *https://virtserver.swaggerhub.com/Kanastra/tech-hub/1.1.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiCreditOriginatorsCreditOriginatorIdFundExpensesPost**](ExpensesApi.md#apicreditoriginatorscreditoriginatoridfundexpensespost) | **POST** /api/credit-originators/{creditOriginatorId}/fund-expenses | EN: Create an expense related to the fund | PT: Cria uma despesa refente ao fundo

# **apiCreditOriginatorsCreditOriginatorIdFundExpensesPost**
> \Swagger\Client\Model\ExpenseAndReserveResponse apiCreditOriginatorsCreditOriginatorIdFundExpensesPost($credit_originator_id, $body)

EN: Create an expense related to the fund | PT: Cria uma despesa refente ao fundo

Endpoint used to create an expense fund.  ----  Endpoint usado para criar uma despesa do fundo.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: BearerAccessToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ExpensesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$credit_originator_id = "credit_originator_id_example"; // string | The identificator or slug (human-friendly identificator) of the originator  ----  O identificador do originador
$body = new \Swagger\Client\Model\ExpenseAndReserve(); // \Swagger\Client\Model\ExpenseAndReserve | 

try {
    $result = $apiInstance->apiCreditOriginatorsCreditOriginatorIdFundExpensesPost($credit_originator_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpensesApi->apiCreditOriginatorsCreditOriginatorIdFundExpensesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **credit_originator_id** | **string**| The identificator or slug (human-friendly identificator) of the originator  ----  O identificador do originador |
 **body** | [**\Swagger\Client\Model\ExpenseAndReserve**](../Model/ExpenseAndReserve.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\ExpenseAndReserveResponse**](../Model/ExpenseAndReserveResponse.md)

### Authorization

[BearerAccessToken](../../README.md#BearerAccessToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

