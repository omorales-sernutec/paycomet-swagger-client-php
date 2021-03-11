# V1launchpadsubscriptionMerchantData

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**customer** | [**\Swagger\Client\Model\V1launchpadauthorizationMerchantDataCustomer**](V1launchpadauthorizationMerchantDataCustomer.md) |  | [optional] 
**shipping** | [**\Swagger\Client\Model\V1launchpadsubscriptionMerchantDataShipping**](V1launchpadsubscriptionMerchantDataShipping.md) |  | [optional] 
**billing** | [**\Swagger\Client\Model\V1formPaymentMerchantDataBilling**](V1formPaymentMerchantDataBilling.md) |  | [optional] 
**acct_id** | **string** | Additional information you want to send to identify the account | [optional] 
**acct_info** | [**\Swagger\Client\Model\V1formPaymentMerchantDataAcctInfo**](V1formPaymentMerchantDataAcctInfo.md) |  | [optional] 
**merchant_risk_indicator** | [**\Swagger\Client\Model\V1formPaymentMerchantDataMerchantRiskIndicator**](V1formPaymentMerchantDataMerchantRiskIndicator.md) |  | [optional] 
**three_ds_requestor_authentication_info** | [**\Swagger\Client\Model\V1formPaymentMerchantDataThreeDSRequestorAuthenticationInfo**](V1formPaymentMerchantDataThreeDSRequestorAuthenticationInfo.md) |  | [optional] 
**shopping_cart** | [**\Swagger\Client\Model\V1formPaymentMerchantDataShoppingCart[]**](V1formPaymentMerchantDataShoppingCart.md) |  | [optional] 
**addr_match** | **string** | Indicates whether the delivery address is the same as the invoice address. Y &#x3D; The delivery address is the same as the invoicing address, N &#x3D; The delivery and invoice addresses are different | [optional] 
**purchase_instal_data** | **int** | Mandatory for Instalment operations (MERCHANT_TRX_TYPE &#x3D; I). Indicates the maximum number of deferred payment authorisations. Accepted values: The value must be greater than 1 | [optional] 
**recurring_expiry** | **string** | Mandatory for Recurring and Instalment operations (MERCHANT_TRX_TYPE &#x3D; I or R). The date from which there will be no more authorisations. Accepted format: YYYYMMDD | [optional] 
**recurring_frequency** | **string** | Mandatory for Recurring and Instalment operations (MERCHANT_TRX_TYPE &#x3D; I or R). Indicates the minimum number of days between authorisations | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

