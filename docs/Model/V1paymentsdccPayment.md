# V1paymentsdccPayment

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**terminal** | **int** | Product or terminal Id. | [optional] 
**order** | **string** | Reference of the operation. Must be unique on every valid transaction. | [optional] 
**token_user** | **string** | Token code associated with the IdUser. | [optional] 
**id_user** | **int** | Unique identifier of the user registered in the system. | [optional] 
**original_ip** | **string** | IP Address of the application of the business | [optional] 
**amount** | **string** | Amount of the operation in number format. 1.00 EURO &#x3D; 100, 4.50 EUROS &#x3D; 450... | [optional] 
**scoring** | **string** | Risk scoring value from 0 to 100. | [optional] 
**product_description** | **string** | Description of the product | [optional] 
**merchant_descriptor** | **string** | Allows the business to send a text up to 25 characters that will be printed on the customer invoice. Limited to simple characters, no accents or special characters. | [optional] 
**user_interaction** | **int** | Indicates wether the business can interact with the customer | [optional] 
**escrow_targets** | [**\Swagger\Client\Model\V1formPaymentEscrowTargets[]**](V1formPaymentEscrowTargets.md) |  | [optional] 
**trx_type** | **string** | Obligatory only if an MIT exception has been selected in scaException | [optional] 
**sca_exception** | **string** | TYPE OF EXCEPTION TO THE SECURE PAYMENT. If not specified, PAYCOMET will try to assign it the most appropriate possible | [optional] 
**url_ok** | **string** | Url where the customer will be redirected after finishing a correct transaction. | [optional] 
**url_ko** | **string** | Url where the customer will be redirected after finishing a failed transaction. | [optional] 
**merchant_data** | [**\Swagger\Client\Model\V1formPaymentMerchantData**](V1formPaymentMerchantData.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

