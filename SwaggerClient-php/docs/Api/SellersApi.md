# Swagger\Client\SellersApi

All URIs are relative to *https://virtserver.swaggerhub.com/Kanastra/tech-hub/1.1.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiCreditOriginatorsCreditOriginatorIdSellersGovernmentIdDocumentsPost**](SellersApi.md#apicreditoriginatorscreditoriginatoridsellersgovernmentiddocumentspost) | **POST** /api/credit-originators/{creditOriginatorId}/sellers/{governmentId}/documents | EN: Add document to a seller | PT: Adicina documentos ao cedente
[**apiCreditOriginatorsCreditOriginatorIdSellersGovernmentIdGet**](SellersApi.md#apicreditoriginatorscreditoriginatoridsellersgovernmentidget) | **GET** /api/credit-originators/{creditOriginatorId}/sellers/{governmentId} | EN: Get the information of the seller | PT: Retorna as informações do cedente
[**apiCreditOriginatorsCreditOriginatorIdSellersGovernmentIdPatch**](SellersApi.md#apicreditoriginatorscreditoriginatoridsellersgovernmentidpatch) | **PATCH** /api/credit-originators/{creditOriginatorId}/sellers/{governmentId} | EN: Update the information of the seller | PT: Atualiza as informações do cedente
[**apiCreditOriginatorsCreditOriginatorIdSellersPost**](SellersApi.md#apicreditoriginatorscreditoriginatoridsellerspost) | **POST** /api/credit-originators/{creditOriginatorId}/sellers | EN: Create a new seller and activate it for the fund passed as parameter | PT: Cria um novo cedente e ativa-o para o fundo passado como parâmetro

# **apiCreditOriginatorsCreditOriginatorIdSellersGovernmentIdDocumentsPost**
> object apiCreditOriginatorsCreditOriginatorIdSellersGovernmentIdDocumentsPost($credit_originator_id, $government_id)

EN: Add document to a seller | PT: Adicina documentos ao cedente

Upload documents to a seller  If Seller is a Legal Person you should send the files:  - llcAgreement (pdf | doc | docx) (required) - assignmentAgreement (pdf | doc | docx) - powerOfAttorney (pdf | doc | docx)   If Seller is a Natural Person you should send the files:  - identificationDocument (png | jpg | pdf) (required) - proofOfAddress (png | jpg | pdf) (required)  ----  Envia documentos do cedente  Se o cedente é pessoa jurídica devem ser enviados os seguintes arquivos:  - llcAgreement (pdf | doc | docx) (Obrigatório) - assignmentAgreement (pdf | doc | docx) - powerOfAttorney (pdf | doc | docx)  Se o cedente é pessoa física devem ser enviados os seguintes arquivos:  - identificationDocument (png | jpg | pdf) (Obrigatório) - proofOfAddress (png | jpg | pdf) (Obrigatório)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: BearerAccessToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SellersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$credit_originator_id = "credit_originator_id_example"; // string | 
$government_id = "government_id_example"; // string | The seller governmentId  ----  O CPF/CNPJ do cedente

try {
    $result = $apiInstance->apiCreditOriginatorsCreditOriginatorIdSellersGovernmentIdDocumentsPost($credit_originator_id, $government_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SellersApi->apiCreditOriginatorsCreditOriginatorIdSellersGovernmentIdDocumentsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **credit_originator_id** | **string**|  |
 **government_id** | **string**| The seller governmentId  ----  O CPF/CNPJ do cedente |

### Return type

**object**

### Authorization

[BearerAccessToken](../../README.md#BearerAccessToken)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiCreditOriginatorsCreditOriginatorIdSellersGovernmentIdGet**
> object apiCreditOriginatorsCreditOriginatorIdSellersGovernmentIdGet($credit_originator_id, $government_id)

EN: Get the information of the seller | PT: Retorna as informações do cedente

Get the information of the seller with the governmentId passed  ----  Retorna as informações do cedente com o CPF/CNPJ informado

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: BearerAccessToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SellersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$credit_originator_id = "credit_originator_id_example"; // string | 
$government_id = "government_id_example"; // string | The seller governmentId  ----  O CPF/CNPJ do cedente

try {
    $result = $apiInstance->apiCreditOriginatorsCreditOriginatorIdSellersGovernmentIdGet($credit_originator_id, $government_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SellersApi->apiCreditOriginatorsCreditOriginatorIdSellersGovernmentIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **credit_originator_id** | **string**|  |
 **government_id** | **string**| The seller governmentId  ----  O CPF/CNPJ do cedente |

### Return type

**object**

### Authorization

[BearerAccessToken](../../README.md#BearerAccessToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiCreditOriginatorsCreditOriginatorIdSellersGovernmentIdPatch**
> object apiCreditOriginatorsCreditOriginatorIdSellersGovernmentIdPatch($credit_originator_id, $government_id, $body)

EN: Update the information of the seller | PT: Atualiza as informações do cedente

Update the information of the seller with the governmentId passed with the information passed on the request body  ----  Atualiza as informações do cedente com o CPF/CNPJ informado com as informações passadas no corpo da requisição

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: BearerAccessToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SellersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$credit_originator_id = "credit_originator_id_example"; // string | 
$government_id = "government_id_example"; // string | The seller governmentId  ----  O CPF/CNPJ do cedente
$body = new \Swagger\Client\Model\SellerUpdatePerson(); // \Swagger\Client\Model\SellerUpdatePerson | 

try {
    $result = $apiInstance->apiCreditOriginatorsCreditOriginatorIdSellersGovernmentIdPatch($credit_originator_id, $government_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SellersApi->apiCreditOriginatorsCreditOriginatorIdSellersGovernmentIdPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **credit_originator_id** | **string**|  |
 **government_id** | **string**| The seller governmentId  ----  O CPF/CNPJ do cedente |
 **body** | [**\Swagger\Client\Model\SellerUpdatePerson**](../Model/SellerUpdatePerson.md)|  | [optional]

### Return type

**object**

### Authorization

[BearerAccessToken](../../README.md#BearerAccessToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiCreditOriginatorsCreditOriginatorIdSellersPost**
> object apiCreditOriginatorsCreditOriginatorIdSellersPost($credit_originator_id, $body)

EN: Create a new seller and activate it for the fund passed as parameter | PT: Cria um novo cedente e ativa-o para o fundo passado como parâmetro

Register new seller with the information passed in the body of the request  ----  Registra novo cedente com as informações passadas no corpo da requisição

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: BearerAccessToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SellersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$credit_originator_id = "credit_originator_id_example"; // string | 
$body = new \Swagger\Client\Model\CreditOriginatorIdSellersBody(); // \Swagger\Client\Model\CreditOriginatorIdSellersBody | 

try {
    $result = $apiInstance->apiCreditOriginatorsCreditOriginatorIdSellersPost($credit_originator_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SellersApi->apiCreditOriginatorsCreditOriginatorIdSellersPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **credit_originator_id** | **string**|  |
 **body** | [**\Swagger\Client\Model\CreditOriginatorIdSellersBody**](../Model/CreditOriginatorIdSellersBody.md)|  | [optional]

### Return type

**object**

### Authorization

[BearerAccessToken](../../README.md#BearerAccessToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

