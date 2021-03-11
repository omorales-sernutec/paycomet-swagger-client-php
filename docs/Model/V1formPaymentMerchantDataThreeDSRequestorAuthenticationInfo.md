# V1formPaymentMerchantDataThreeDSRequestorAuthenticationInfo

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**three_ds_req_auth_data** | **string** | Data which documents and supports a specific authentication process. | [optional] 
**three_ds_req_auth_method** | **string** | Mechanism used by the customer to authenticate themselves in the business. Accepted values: 01 &#x3D; Without 3DS authentication (for example, customer identified as guest), 02 &#x3D; Logged onto the account on the ACS using the credentials of the ACS, 03 &#x3D; Logged onto the account on the ACS using an affiliate identifier, 04 &#x3D; Logged onto the account on the ACS using the credentials of the issuer, 05 &#x3D; Logged onto the account on the ACS using a third party authentication, 06 &#x3D; Logged onto the account on the ACS using a FIDO authenticator | [optional] 
**three_ds_req_auth_timestamp** | **string** | Date and time UTC of the authentication. Date format: YYYYMMDDHHMM | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

