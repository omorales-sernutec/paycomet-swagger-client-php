# V1paymentsorderpreauthconfirmPayment

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**terminal** | **int** | Product or terminal Id. | 
**amount** | **string** |  | 
**original_ip** | **string** |  | 
**auth_code** | **string** | Authorization bank code of the transaction (required to execute a return). | 
**deferred** | **int** | Identify the preauthorization as deferred | [optional] [default to 0]
**notify_direct_payment** | **int** | Configurate POST notification of the operation result (possible values: 1 - force notify, 2 - not notify). It will notify if is not informed | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

