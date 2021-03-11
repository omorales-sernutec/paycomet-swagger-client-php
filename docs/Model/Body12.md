# Body12

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**operation_type** | **int** | PAYCOMET operation type (ID 1 - authorization, 3 - preauthorization, 9 - subscription, 107 - tokenization, 114 - authorization by reference, 116 - dcc authorization). | 
**language** | **string** | Language for user interface. | [optional] 
**terminal** | **int** | Product or terminal Id | [optional] 
**product_description** | **string** | Product description (only in 107 - tokenization). | [optional] 
**payment** | [**\Swagger\Client\Model\V1formPayment**](V1formPayment.md) |  | [optional] 
**subscription** | [**\Swagger\Client\Model\V1formSubscription**](V1formSubscription.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

