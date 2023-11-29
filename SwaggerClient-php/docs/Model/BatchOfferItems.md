# BatchOfferItems

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**external_id** | **string** | Unique external identifier (for the originator control).  ----  Identificador único externo (para controle do originador). | [optional] 
**sponsor_name** | **string** | Sponsor name or sponsor company name. The person/company that will pay for this offer.  ----  Razão Social ou Nome do sacado. A pessoa/empresa que irá pagar por esta oferta. | [optional] 
**sponsor_person_type** | **string** | Sponsor person type. It can be: &#x60;LEGAL_PERSON&#x60; - Company &#x60;NATURAL_PERSON&#x60; - Individual person ---- Tipo de entidade do sacado. Valores possíveis são: &#x60;LEGAL_PERSON&#x60; - Pessoa jurídica &#x60;NATURAL_PERSON&#x60; - Pessoa física | [optional] 
**sponsor_government_id** | **string** | Sponsor&#x27;s Government tax ID (a.k.a. CNPJ or CPF). Just numbers.  ----  CNPJ ou CPF do sacado. Apenas números. | [optional] 
**sponsor_external_code** | **string** | External code of the sponsor (for the originator control).  ----  Código externo do sacado (para controle do originador). | [optional] 
**sponsor_address** | **string** | Address of the sponsor.  ----  Endereço do sacado. | [optional] 
**sponsor_address_number** | **string** | Address number of sponsor.  ----  Número do endereço do sacado. | [optional] 
**sponsor_address_complement** | **string** | Sponsor address complement.  ----  Complemento do endereço do sacado. | [optional] 
**sponsor_neighborhood** | **string** | Neighborhood of the sponsor.  ----  Bairro do sacado. | [optional] 
**sponsor_city** | **string** | Sponsor&#x27;s city.  ----  Cidade do sacado. | [optional] 
**sponsor_state** | **string** | Sponsor&#x27;s state.  ----  Estado do sacado. | [optional] 
**sponsor_country** | **string** | Sponsor&#x27;s country.  ----  País do sacado. | [optional] 
**sponsor_zip_code** | **string** | Sponsor&#x27;s zip code.  ----  CEP do sacado. | [optional] 
**sponsor_bank** | **string** | Sponsor&#x27;s bank code (brazilian format). For reference: [https://bank.codes/numero-do-banco/bank/page/2/](https://bank.codes/numero-do-banco/bank/page/2/)  ----  Código do banco do sacado. | [optional] 
**sponsor_agency** | **string** | Sponsor&#x27;s bank agency code (without last digit).  ----  Código da agência bancária do sacado (Sem o dígito). | [optional] 
**sponsor_agency_digit** | **string** | Sponsor&#x27;s bank agency last digit.  ----  Dígito da agência bancária do sacado. | [optional] 
**sponsor_account** | **string** | Sponsor&#x27;s bank account code (without last digit).  ----  Conta corrente do sacado (Sem o dígito). | [optional] 
**sponsor_account_digit** | **string** | Sponsor&#x27;s bank account last digit.  ----  Dígito da conta corrente do sacado. | [optional] 
**sponsor_pix_key** | **string** | Sponsor&#x27;s pix key.  ----  Chave pix do sacado. | [optional] 
**asset_type** | **string** | Asset type. It can be:   - &#x60;DUPLICATA_MERCANTIL&#x60; - Mercantile duplicate  - &#x60;CHEQUE&#x60; - Check  - &#x60;CONTRATO_DIGITAL&#x60; - Digital contract  - &#x60;CONTRATO_FISICO&#x60; - Physical contract  - &#x60;MULTIPLOS&#x60; - Multiple  - &#x60;NOTA_SERVICOS&#x60; - Brazilian services invoice  - &#x60;CARTAO_CREDITO&#x60; - Credit card  - &#x60;DIREITOS_CREDITORIOS&#x60; - Debt rights  - &#x60;ARRANJO_PAGAMENTO&#x60; - Payment scheme  - &#x60;NOTA_COMERCIAL&#x60; - Commercial note  - &#x60;ASSISTENCIA_FINANCEIRA&#x60; - Financial Assistance  ---- Tipo do ativo. Valores possíveis são:   - &#x60;DUPLICATA_MERCANTIL&#x60; - Duplicata mercantil  - &#x60;CHEQUE&#x60; - Cheque  - &#x60;CONTRATO_DIGITAL&#x60; - Contrato digital  - &#x60;CONTRATO_FISICO&#x60; - Contrato físico  - &#x60;MULTIPLOS&#x60; - Múltiplos  - &#x60;NOTA_SERVICOS&#x60; - Nota Fiscal de Serviço  - &#x60;CARTAO_CREDITO&#x60; - Cartão de Crédito  - &#x60;DIREITOS_CREDITORIOS&#x60; - Direitos Creditórios  - &#x60;ARRANJO_PAGAMENTO&#x60; - Arranjo de pagamento  - &#x60;NOTA_COMERCIAL&#x60; - Nota comercial  - &#x60;ASSISTENCIA_FINANCEIRA&#x60; - Assistência Financeira | [optional] 
**invoice_number** | **string** | Invoice number  ----  Número do título. | [optional] 
**invoice_date** | **string** | Invoice date (format &#x60;YYYYMMDD&#x60;).  ----  Data do título (Formato &#x60;YYYYMMDD&#x60;). | [optional] 
**invoice_key** | **string** | Electronic key of the invoice (usually for brazilian invoices only, for validation purposes).  ----  Chave eletrônica do título. | [optional] 
**total_installments** | **float** | Total of monthly installments that this invoice will be divided into. Used only when the invoice will be divided into 2 or more monthly payments. When is a one payment only (bullet), the default is 1.  ----  Total de parcelas referente ao título. Utilizado apenas quando o título é pago de forma parcelada. Quando é pago de forma à vista o valor default é 1. | [optional] 
**payment_value** | **float** | Amount of the invoice (in BRL).  ----  Valor do título (em BRL). | [optional] 
**payment_date** | **string** | The due date of the first installment. (Format: &#x60;YYYYMMDD&#x60;). It needs to be at least 2 business days after today.  ----  Data do vencimento da primeira parcela do título. Formato: YYYYMMDD Tem que ser pelo menos 2 dias pra frente. | [optional] 
**custom_fields** | **object** | This field can be an object containing information agreed and required by the regulation of the fund and that&#x27;s also very specific to the fund business model.  ----  Espaço para especificar informações acordadas no regulamento p/ validar condições de cessão e/ou critério de elegibilidade. | [optional] 
**files** | [**\Swagger\Client\Model\OfferFile**](OfferFile.md) |  | [optional] 
**installments** | [**\Swagger\Client\Model\OfferInstallments[]**](OfferInstallments.md) | A list of installments and their attributes.  ---  Uma lista contendo as parcelas e seus atributos. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

