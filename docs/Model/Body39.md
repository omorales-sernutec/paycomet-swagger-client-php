# Body39

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**terminal** | **int** | Product or terminal Id. | 
**order** | **string** | Unique reference for merchant&#x27;s purchase | 
**amount** | **string** | Amount of the operation in number format. 1.00 EURO &#x3D; 100, 4.50 EUROS &#x3D; 450... | 
**currency** | **string** | Currency of the transaction. | 
**method_id** | **string** | PAYCOMET payment method ID. 1 is for card. | 
**original_ip** | **string** | IP Address of the customer that initiated the payment transaction | 
**secure** | **int** | 0 or 1. Indicates if the transaction is secure. | 
**language** | **string** | ISO2 code of language. | [default to 'es']
**sms_email** | **string** | Sending channel of the payment url. Should be \&quot;sms\&quot; or \&quot;email\&quot;. | 
**template_id** | **int** | Email or SMS template id to be sent. You can get it in the Control panel. | 
**email_address** | **string** | Conditional. Mandatory in sending method is EMAIL. Email address where link must be sent | [optional] 
**email_name** | **string** | Conditional. Mandatory in sending method is EMAIL. Email recipient of the email address where link must be sent | [optional] 
**sms_prefix** | **string** | Conditional. Mandatory in sending method is SMS. International mobile prefix where link must be sent | [optional] 
**sms_number** | **string** | Conditional. Mandatory in sending method is SMS. Mobile number where link must be sent | [optional] 
**scoring** | **string** | Risk scoring value from 0 to 100. | [optional] 
**start_date** | **string** | Subscription start date yyyymmdd. IMPORTANT Subscriptions are charged on the first run if this field has value it will be taken into account for future charges. | [optional] 
**end_date** | **string** | Subscription end date yyyymmdd | [optional] 
**periodicity** | **string** | Subscription periodicity in days. Maximum 365. | [optional] 
**merchant_data** | [**\Swagger\Client\Model\V1launchpadsubscriptionMerchantData**](V1launchpadsubscriptionMerchantData.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

