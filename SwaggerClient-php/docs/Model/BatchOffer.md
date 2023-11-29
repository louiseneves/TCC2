# BatchOffer

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**seller_name** | **string** | Seller name or sponsor company name. The person/company that selled and wants to sell the debt right to the fund.  ----  Razão Social ou Nome do cedente. A pessoa/empresa que irá ceder o direito de receber. | [optional] 
**seller_person_type** | **string** | Seller person type. It can be: &#x60;LEGAL_PERSON&#x60; - Company &#x60;NATURAL_PERSON&#x60; - Individual person ---- Tipo de entidade do cedente. Valores possíveis são: &#x60;LEGAL_PERSON&#x60; - Pessoa jurídica &#x60;NATURAL_PERSON&#x60; - Pessoa física | [optional] 
**seller_government_id** | **string** | Seller&#x27;s Government tax ID (a.k.a. CNPJ or CPF). Just numbers.  ----  CNPJ ou CPF do cedente. Apenas números | [optional] 
**seller_external_code** | **string** | External code of the seller (for the originator control).  ----  Código externo do cedente (para controle do originador). | [optional] 
**seller_address** | **string** | Seller&#x27;s address.  ----  Endereço do cedente. | [optional] 
**seller_address_number** | **string** | Seller&#x27;s address number.  ----  Número do endereço do cedente. | [optional] 
**seller_address_complement** | **string** | Seller&#x27;s address complement.  ----  Complemento do endereço do cedente. | [optional] 
**seller_neighborhood** | **string** | Seller&#x27;s neighborhood.  ----  Bairro do cedente. | [optional] 
**seller_city** | **string** | Sellers&#x27;s city.  ----  Cidade do cedente. | [optional] 
**seller_state** | **string** | Seller&#x27;s state.  ----  Estado do cedente. | [optional] 
**seller_country** | **string** | Seller&#x27;s country.  ----  País do cedente. | [optional] 
**seller_zip_code** | **string** | Sponsor&#x27;s zip code.  ----  CEP do sacado. | [optional] 
**seller_bank** | **string** | Seller&#x27;s bank code (brazilian format). For reference: [https://bank.codes/numero-do-banco/bank/page/2/](https://bank.codes/numero-do-banco/bank/page/2/)  ----  Código do banco do cedente. | [optional] 
**seller_agency** | **string** | Seller&#x27;s bank agency code (without last digit).  ----  Código da agência bancária do cedente (Sem o dígito). | [optional] 
**seller_agency_digit** | **string** | Seller&#x27;s bank agency last digit.  ----  Dígito da agência bancária do cedente. | [optional] 
**seller_account** | **string** | Seller&#x27;s bank account code (without last digit).  ----  Conta corrente do cedente (Sem o dígito). | [optional] 
**seller_account_digit** | **string** | Seller&#x27;s bank account last digit.  ----  Dígito da conta corrente do cedente. | [optional] 
**coobrigation** | **bool** | The seller has co obrigation to pay in case of default? (true &#x3D; yes, false &#x3D; no).  ----  Co-obrigação por parte do cedente? (true &#x3D; sim, false &#x3D; não). | [optional] 
**custom_fields** | **object** | This field can be an object containing information agreed and required by the regulation of the fund and that&#x27;s also very specific to the fund business model.  ----  Espaço para especificar informações acordadas no regulamento p/ validar condições de cessão e/ou criterio de elegibilidade. | [optional] 
**items** | [**\Swagger\Client\Model\BatchOfferItems[]**](BatchOfferItems.md) | This array contains a list of objects with information of the invoice/transaction.  ----  Esse array contém uma lista de objetos com informações da nota/duplicata/operação/transação. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

