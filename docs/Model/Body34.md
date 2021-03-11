# Body34

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**terminal** | **int** | Product or terminal Id. | 
**ivr_provider_id** | **int** | Supplier / IVR integrator code. | 
**ivr_station_id** | **string** | Location identifier. | 
**ivr_merchant_amount** | **int** | Amount of the operation in full format. 1,00 EURO &#x3D; 100, 4,50 EUROS &#x3D; 450... | 
**ivr_merchant_currency** | **string** | Transaction currency. | 
**ivr_merchant_order** | **string** | Operation reference. It must be unique in each valid transaction. IMPORTANT IN CASE OF SUBSCRIPTIONS Do not include the characters “[“ or “]”, they will be used to recognise the business idUser. | 
**ivr_merchant_language** | **string** | Language (iso2) in which the IVR phrases will be sent | 
**ivr_transaction_type** | **string** | Possible types 107 Bankstore user registration 1 Authorisation 3 Pre-authorisation 9 Subscription | 
**ivr_merchant_concept** | **string** | Operation concept. | [optional] 
**ivr_subscription_startdate** | **string** | Mandatory in subscriptions. Subscription start date. | [optional] 
**ivr_subscription_enddate** | **string** | Mandatory in subscriptions. Subscription end date. | [optional] 
**ivr_subscription_periodicity** | **int** | Mandatory in subscriptions. Frequency of the payment from the start date. The number is expressed in Days. It cannot be more than 365 days. | [optional] 
**ivr_max_retries** | **int** | Number of attempts permitted. | [optional] 
**ivr_session_timeout** | **int** | Maximum session time. In seconds. | [optional] 
**ivr_callback_station_timeout** | **string** | Extension of return in case of timeout. | [optional] 
**ivr_callback_station_ok** | **string** | Extension of return in case of operation OK. | [optional] 
**ivr_callback_station_ko** | **string** | Extension of return in case of operation KO. | [optional] 
**ivr_caller_phone_number** | **string** | Number of incoming call. | [optional] 
**ivr_provider_data01** | **string** | Optional field. | [optional] 
**vr_provider_data02** | **string** | Optional field. | [optional] 
**ivr_provider_data03** | **string** | Optional field. | [optional] 
**ivr_provider_data04** | **string** | Optional field. | [optional] 
**ivr_provider_data05** | **string** | Optional field. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

