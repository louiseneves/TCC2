# OfferReturnFormat

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**external_id** | **string** | Offer external id (field used for the originator to keep track of the offers) | [optional] 
**offer_id** | **string** | Offer identifier | [optional] 
**acquisition_id** | **string** | Acquisition remittance identifier | [optional] 
**acquisition_price** | **float** | The price of acquisition (will return &#x60;null&#x60; if not acquired yet) | [optional] 
**future_amount** | **float** | The price that the asset will reach in the future (will return &#x60;null&#x60; if not acquired yet) | [optional] 
**created_at** | [**\DateTime**](\DateTime.md) | Offer creation date | [optional] 
**updated_at** | [**\DateTime**](\DateTime.md) | Offer latest update date | [optional] 
**offer_status** | **string** | The current status of the offer. You can consider it fully validated and acquired when:   - The offer status (&#x60;offer_status&#x60;) is &#x60;validated&#x60;, and;  - The acquisition status is &#x60;acquired&#x60;. | [optional] 
**acquisition_status** | **string** | The current status of the acquisition. You can consider it fully validated and acquired when:   - The offer status (&#x60;offer_status&#x60;) is &#x60;validated&#x60;, and;  - The acquisition status is &#x60;acquired&#x60;. | [optional] 
**validations_with_error** | **string[]** |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

