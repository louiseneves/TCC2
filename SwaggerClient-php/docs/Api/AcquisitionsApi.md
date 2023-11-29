# Swagger\Client\AcquisitionsApi

All URIs are relative to *https://virtserver.swaggerhub.com/Kanastra/tech-hub/1.1.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiAcquisitionsAcquisitionIdSubmitPatch**](AcquisitionsApi.md#apiacquisitionsacquisitionidsubmitpatch) | **PATCH** /api/acquisitions/{acquisitionId}/submit | EN: Submit a remittance of acquisition | PT: Envia uma remessa de aquisição
[**apiCreditOriginatorsCreditOriginatorIdAcquisitionsAcquisitionIdSubmitPatch**](AcquisitionsApi.md#apicreditoriginatorscreditoriginatoridacquisitionsacquisitionidsubmitpatch) | **PATCH** /api/credit-originators/{creditOriginatorId}/acquisitions/{acquisitionId}/submit | EN: Submit a remittance of acquisition | PT: Envia uma remessa de aquisição

# **apiAcquisitionsAcquisitionIdSubmitPatch**
> \Swagger\Client\Model\Acquisition apiAcquisitionsAcquisitionIdSubmitPatch($acquisition_id)

EN: Submit a remittance of acquisition | PT: Envia uma remessa de aquisição

Submit a remittance of acquisition to process  ----  Envia uma remessa de aquisição para processamento

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: BearerAccessToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\AcquisitionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$acquisition_id = "acquisition_id_example"; // string | The acquisition id  ----  O id da aquisição

try {
    $result = $apiInstance->apiAcquisitionsAcquisitionIdSubmitPatch($acquisition_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AcquisitionsApi->apiAcquisitionsAcquisitionIdSubmitPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **acquisition_id** | **string**| The acquisition id  ----  O id da aquisição |

### Return type

[**\Swagger\Client\Model\Acquisition**](../Model/Acquisition.md)

### Authorization

[BearerAccessToken](../../README.md#BearerAccessToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiCreditOriginatorsCreditOriginatorIdAcquisitionsAcquisitionIdSubmitPatch**
> \Swagger\Client\Model\Acquisition apiCreditOriginatorsCreditOriginatorIdAcquisitionsAcquisitionIdSubmitPatch($credit_originator_id, $acquisition_id)

EN: Submit a remittance of acquisition | PT: Envia uma remessa de aquisição

Submit a remittance of acquisition to process  ----  Envia uma remessa de aquisição para processamento

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: BearerAccessToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\AcquisitionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$credit_originator_id = "credit_originator_id_example"; // string | Credit Originator Id or slug  ----  Id ou slug do originador de crédito
$acquisition_id = "acquisition_id_example"; // string | The acquisition id  ----  O id da aquisição

try {
    $result = $apiInstance->apiCreditOriginatorsCreditOriginatorIdAcquisitionsAcquisitionIdSubmitPatch($credit_originator_id, $acquisition_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AcquisitionsApi->apiCreditOriginatorsCreditOriginatorIdAcquisitionsAcquisitionIdSubmitPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **credit_originator_id** | **string**| Credit Originator Id or slug  ----  Id ou slug do originador de crédito |
 **acquisition_id** | **string**| The acquisition id  ----  O id da aquisição |

### Return type

[**\Swagger\Client\Model\Acquisition**](../Model/Acquisition.md)

### Authorization

[BearerAccessToken](../../README.md#BearerAccessToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

