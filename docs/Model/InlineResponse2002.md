# InlineResponse2002

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**pan** | **string** | Card number, without any spaces or dashes. Only the last four digits will be returned. The rest will be masked with X | [optional] 
**card_brand** | **string** | Card brand. If it can be identified, information on the card brand will be sent (Visa, MasterCard, American Express, etc). Otherwise, the field will be returned blank. | [optional] 
**card_type** | **string** | Type of card. If it can be identified, information on the type of card will be sent (DEBIT, CREDIT, etc). Otherwise, the field will be returned blank. | [optional] 
**card_i_country_iso3** | **string** | ISO3 Code the country of the issuer of the card. If it can be identified, the ISO3 Code of the country of the issuer of the card will be sent. Otherwise, the field will be returned blank. | [optional] 
**expiry_date** | **string** | Expiry date of the card expressed in the format YYYY/MM | [optional] 
**card_hash** | **string** | Hash unique credit card id. | [optional] 
**card_category** | **string** | Card category. | [optional] 
**sepa_card** | **int** | Card in SEPA country. | [optional] 
**psd2_card** | **string** | Express if card has PSD2 information (Y is a PSD2 Card, N is not and NA is not available). | [optional] 
**token_cof** | **int** | Express if card has COF registered. | [optional] 
**error_code** | **int** |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

