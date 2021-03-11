# InlineResponse20031

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**error_code** | **int** | The error code if something went wrong. 0 means no error. | [optional] 
**ivr_response** | **bool** | Result of the session consultation. 0 -&gt; It will indicate that it was not possible to localise the IVR session. 1 -&gt; The session information have been found and will be returned afterwards. | [optional] 
**ivr_session_state** | **int** | The possible values are the following. 0 Waiting. 1 Processing. 2 Finalised. OK. 3 Finalised. KO. 4 Communication time exceeded. 5 Reference not found. 6 Operation cancelled by the agent. 7 Call ended. Waiting for next call | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

