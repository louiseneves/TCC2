# OfferDetailsResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Offer identifier | [optional] 
**status** | **string** | The current status of the offer. You can consider it fully validated and acquired when:   - The offer status (&#x60;offer_status&#x60;) is &#x60;batched&#x60;, and;  - The acquisition status is &#x60;success&#x60; or &#x60;settled&#x60;. | [optional] 
**buyer_id** | **string** | Buyer identifier | [optional] 
**sponsor_id** | **string** | Sponsor identifier | [optional] 
**seller_id** | **string** | Sponsor identifier | [optional] 
**created_at** | [**\DateTime**](\DateTime.md) | Offer creation date | [optional] 
**updated_at** | [**\DateTime**](\DateTime.md) | Offer latest update date | [optional] 
**credit_originator_id** | **float** | credit originator id identifier | [optional] 
**external_id** | **string** | Offer external id (field used for the originator to keep track of the offers) | [optional] 
**daily_discount_rate** | **float** | Daily discount rate | [optional] 
**daily_discount_rate_observations** | **string** | Daily discount rate observations | [optional] 
**daily_discount_rate_calculator** | **string** | Validator used to calculate the discount rate | [optional] 
**daily_discount_rate_calculated_at** | [**\DateTime**](\DateTime.md) | Discount rate calculation date | [optional] 
**daily_discount_rate_apply_on** | **string** | Basis for calculating the discount rate | [optional] 
**payment_value** | **float** | Amount of the invoice (in BRL). | [optional] 
**installments** | **object[]** |  | [optional] 
**validations** | **object[]** |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

