# LiquidationFileInner

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**url** | **string** | The URL of the document to be sent as a proof of the liquidation. This field is only required if &#x60;content&#x60; is not filled.  ----  URL do documento a ser enviado como comprovante da liquidação.  Este campo é obrigatório somente se &#x60;content&#x60; não estiver preenchido. | [optional] 
**content** | **string** | Content of the document to be sent as a proof of the liquidation. Encoded in &#x60;base64&#x60;. (This field is only required if &#x60;url&#x60; is not filled).  ----  Conteúdo do documento a ser enviado como comprovante da liquidação. Codificado em &#x60;base64&#x60;. (Não é necessário informar o campo url caso esse esteja preenchido). | [optional] 
**category** | **string** | Type of the document   - &#x60;proof_of_payment&#x60; - Document proving the liquidation   ----  Tipo do documento   - &#x60;comprovante_de_pagamento&#x60; - documento comprobatório da liquidação | [optional] 
**name** | **string** | File name, with extension. Example - &#x60;file.pdf&#x60;  ----  Nome do arquivo, com extensão. Exemplo - &#x60;arquivo.pdf&#x60; | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

