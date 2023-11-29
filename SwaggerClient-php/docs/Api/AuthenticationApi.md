# Swagger\Client\AuthenticationApi

All URIs are relative to *https://virtserver.swaggerhub.com/Kanastra/tech-hub/1.1.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**oauthTokenPost**](AuthenticationApi.md#oauthtokenpost) | **POST** /oauth/token | EN: Creates a new access token. | PT: Cria um novo token de acesso.

# **oauthTokenPost**
> \Swagger\Client\Model\InlineResponse200 oauthTokenPost($body)

EN: Creates a new access token. | PT: Cria um novo token de acesso.

Create a new `Bearer` access token in JWT format.  ----  Cria um novo access token `Bearer` no formato JWT.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\OauthTokenBody(); // \Swagger\Client\Model\OauthTokenBody | 

try {
    $result = $apiInstance->oauthTokenPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->oauthTokenPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\OauthTokenBody**](../Model/OauthTokenBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

