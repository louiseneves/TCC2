# Swagger\Client\SubstitutionsApi

All URIs are relative to *https://virtserver.swaggerhub.com/Kanastra/tech-hub/1.1.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiCreditOriginatorsCreditOriginatorIdSubstitutionPost**](SubstitutionsApi.md#apicreditoriginatorscreditoriginatoridsubstitutionpost) | **POST** /api/credit-originators/{creditOriginatorId}/substitution | [BETA] EN: Receive an asset for substitution | PT: Recebe um título para substituição

# **apiCreditOriginatorsCreditOriginatorIdSubstitutionPost**
> \Swagger\Client\Model\SubstitutionResponse apiCreditOriginatorsCreditOriginatorIdSubstitutionPost($credit_originator_id, $body)

[BETA] EN: Receive an asset for substitution | PT: Recebe um título para substituição

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: BearerAccessToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SubstitutionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$credit_originator_id = "credit_originator_id_example"; // string | The identifier or slug (human-friendly identifier) of the originator  ----  O identificador do originador
$body = new \Swagger\Client\Model\Substitution(); // \Swagger\Client\Model\Substitution | 

try {
    $result = $apiInstance->apiCreditOriginatorsCreditOriginatorIdSubstitutionPost($credit_originator_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubstitutionsApi->apiCreditOriginatorsCreditOriginatorIdSubstitutionPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **credit_originator_id** | **string**| The identifier or slug (human-friendly identifier) of the originator  ----  O identificador do originador |
 **body** | [**\Swagger\Client\Model\Substitution**](../Model/Substitution.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\SubstitutionResponse**](../Model/SubstitutionResponse.md)

### Authorization

[BearerAccessToken](../../README.md#BearerAccessToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

