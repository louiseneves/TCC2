# Repurchase

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**external_id** | **string** | Asset External Id of the asset to repurchase  ----  O External Id do título a ser recomprado | 
**expected_amount** | **float** | The repurchased amount  ----  O valor recomprado | 
**reason** | **string** | The reason of the repurchase    - &#x60;COMMERCIAL_CHANGES&#x60;   - &#x60;DISQUALIFICATION&#x60;  ----  O motivo da recompra    - &#x60;COMMERCIAL_CHANGES&#x60;   - &#x60;DISQUALIFICATION&#x60; | 
**description** | **string** | The reason of the repurchase  ----  O motivo da recompra | [optional] 
**type** | **string** | The type of the repurchase    - &#x60;CASH&#x60;   - &#x60;ACQUISITION&#x60;  ----    - &#x60;CASH&#x60;   - &#x60;ACQUISITION&#x60;  O tipo da recompra | [optional] 
**with_reactivation** | **bool** | Optional field. It must be sent when repurchasing assets that are paid and need to be reactivated.  ----  Campo opcional. Deve ser enviado quando a recompra for de títulos que estão pagos e precisam ser reativados. | [optional] 
**new_external_id** | [**array[]**](array.md) | Optional field. New External Id of the asset to repurchase  ----  Campo opcional. O Novo External Id do título a ser recomprado | [optional] 
**files** | [**\Swagger\Client\Model\IncomingFile**](IncomingFile.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

