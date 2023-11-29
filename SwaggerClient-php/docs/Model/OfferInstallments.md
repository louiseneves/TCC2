# OfferInstallments

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**external_id** | **string** | A field is used to keep track of the offer installment.  ----  Campo é usado no controle das parcelas da oferta. | [optional] 
**amount** | **float** | Contains the installment amount (BRL).  ---  Contém o valor da parcela (BRL). | [optional] 
**due_date** | **string** | The due date of the installment. (Format: &#x60;YYYYMMDD&#x60;). It has to be at least today.  ----  Data do vencimento da parcela do título. Formato: YYYYMMDD Tem que ser pelo menos de hoje pra frente. | [optional] 
**custom_fields** | **object** | This field can be an object containing information agreed and required by the regulation of the fund and that&#x27;s also very specific to the fund business model.  ----  Espaço para especificar informações acordadas no regulamento p/ validar condições de cessão e/ou criterio de elegibilidade. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

