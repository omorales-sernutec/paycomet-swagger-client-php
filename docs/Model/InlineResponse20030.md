# InlineResponse20030

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**error_code** | **int** | The error code if something went wrong. 0 means no error. | [optional] 
**ivr_response** | **bool** | Result of the session consultation. 0 -&gt; It will indicate that it was not possible to localise the IVR session. 1 -&gt; The session information have been found and will be returned afterwards. | [optional] 
**ivr_session_state** | **int** | The possible values are the following. 0 Waiting. 1 Processing. 2 Finalised. OK. 3 Finalised. KO. 4 Communication time exceeded. 5 Reference not found. 6 Operation cancelled by the agent. 7 Call ended. Waiting for next call | [optional] 
**ivr_session_result** | **int** | The possible values are the following. 0 No error. 1 Payment operation error. 2 Error entering card data. 3 Error entering expiration month. 4 Error entering expiration year. 5 Error entering CVV | [optional] 
**ivr_time_left** | **int** | Time remaining expressed in seconds for finishing the IVR session. In state 0, the established maximum time will be returned. In state 1 the remaining time will be returned. In states 2, 3, 4 and 5 0 will be returned. | [optional] 
**ivr_digit_pan** | **int** | When the IVR session is underway, the number of digits of the credit card that the client has entered will be returned. 0 will be returned if this information is not available. | [optional] 
**ivr_digit_exp** | **int** | When the IVR session is underway, the number of digits of the expiry date that the client has entered will be returned. 0 will be returned if this information is not available. | [optional] 
**ivr_digit_cvc** | **int** | When the IVR session is underway, the number of digits of the CVC2 that the client has entered will be returned. 0 will be shown if this information is not available. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

