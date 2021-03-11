# Body16

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**terminal** | **int** | Product or terminal Id. | 
**sort_type** | **int** | Sorting type (0 No sorting, 1 date, 2 order, 3 type, 4 state, 5 terminal, 6 amount, 7 user). | 
**sort_order** | **string** | Sort results ASC &#x3D; Ascending, DESC &#x3D; Descending. | 
**operations** | **int[]** |  | 
**min_amount** | **int** | Minimum amount of the operation in whole format | 
**max_amount** | **int** | Maximum amount of the operation in whole format | 
**state** | **int** | Result of operation. 0 is operation failed, 1 operation correct and 2 operation unfinished (for pending operations from an SCA or 3DS). | 
**from_date** | **string** | Start datetime limit (format: YmdHis) | 
**to_date** | **string** | Finish datetime limit (format: YmdHis) | 
**currency** | **string** | Currency of the transaction. | 
**limit** | **int** | Results limit. | [optional] [default to 10000]
**order** | **string** | Unique reference for merchant&#x27;s purchase | [optional] 
**search_type** | **int** | Comparison type. 0 LIKE comparison (%xxx%) , 1 exact comparison (&#x3D;) | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

