# SellerLegalPerson

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**person_type** | **string** | The type of the seller. | [default to 'LEGAL_PERSON']
**asset_types** | **string[]** | Asset type. It can be:   - &#x60;DUPLICATA_MERCANTIL&#x60; - Mercantile duplicate  - &#x60;CHEQUE&#x60; - Check  - &#x60;CONTRATO_DIGITAL&#x60; - Digital contract  - &#x60;CONTRATO_FISICO&#x60; - Physical contract  - &#x60;MULTIPLOS&#x60; - Multiple  - &#x60;NOTA_SERVICOS&#x60; - Brazilian services invoice  - &#x60;CARTAO_CREDITO&#x60; - Credit card  - &#x60;DIREITOS_CREDITORIOS&#x60; - Debt rights  - &#x60;ARRANJO_PAGAMENTO&#x60; - Payment scheme  - &#x60;CEDULA_CREDITO_BANCARIO&#x60; - Bank credit note  - &#x60;CEDULA_PRODUTOR_RURAL_FINANCEIRA&#x60; - Financial Rural Producer Certificate  - &#x60;NOTA_COMERCIAL&#x60; - Commercial note  - &#x60;ASSISTENCIA_FINANCEIRA&#x60; - Financial Assistance  ---- Tipo do ativo. Valores possíveis são:   - &#x60;DUPLICATA_MERCANTIL&#x60; - Duplicata mercantil  - &#x60;CHEQUE&#x60; - Cheque  - &#x60;CONTRATO_DIGITAL&#x60; - Contrato digital  - &#x60;CONTRATO_FISICO&#x60; - Contrato físico  - &#x60;MULTIPLOS&#x60; - Múltiplos  - &#x60;NOTA_SERVICOS&#x60; - Nota Fiscal de Serviço  - &#x60;CARTAO_CREDITO&#x60; - Cartão de Crédito  - &#x60;DIREITOS_CREDITORIOS&#x60; - Direitos Creditórios  - &#x60;ARRANJO_PAGAMENTO&#x60; - Arranjo de pagamento  - &#x60;CEDULA_CREDITO_BANCARIO&#x60; - Cédula de Crédito Bancário  - &#x60;CEDULA_PRODUTOR_RURAL_FINANCEIRA&#x60; - Cédula de Produtor Rural Financeira  - &#x60;NOTA_COMERCIAL&#x60; - Nota comercial  - &#x60;ASSISTENCIA_FINANCEIRA&#x60; - Assistência Financeira | 
**government_id** | **string** | The CNPJ of the seller. | [default to '44870662000198']
**name** | **string** | The seller&#x27;s name. | [default to 'Kanastra Company']
**address** | [**\Swagger\Client\Model\SellerAddress**](SellerAddress.md) |  | 
**phone** | **string** | The seller&#x27; phone. | [default to '3432124453']
**email** | **string** | The seller&#x27;s email. | [default to 'contato@kanastra.com.br']
**bank_accounts** | [**\Swagger\Client\Model\OneOfSellerLegalPersonBankAccountsItems[]**](.md) |  | 
**representatives** | [**\Swagger\Client\Model\SellerRepresentativeLegalPerson[]**](SellerRepresentativeLegalPerson.md) |  | 
**guarantors** | [**\Swagger\Client\Model\SellerGuarantor[]**](SellerGuarantor.md) |  | [optional] 
**custom_fields** | [**\Swagger\Client\Model\SellerCustomField**](SellerCustomField.md) |  | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

