# V1paymentsorderrefundPayment

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**terminal** | **int** | Product or terminal Id. | 
**amount** | **string** | Amount to refund in number format. If empty, total refund asumed. | 
**currency** | **string** | Currency of the transaction | 
**auth_code** | **string** | Original bank code of the authorization of the transaction. | 
**original_ip** | **string** | IP Address of the application of the business. | 
**token_user** | **string** | Token code associated with the IdUser. | [optional] 
**id_user** | **int** | Unique identifier of the user registered in the system. | [optional] 
**notify_direct_payment** | **int** | Configurate POST notification of the operation result (possible values: 1 - force notify, 2 - not notify). It will notify if is not informed | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

