# V1formPaymentMerchantDataAcctInfo

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ch_acc_age_ind** | **string** | Period of time that the customer has had the account at the business. Possible values: 01 &#x3D; No account (checkout as guest), 02 &#x3D; Created in this transaction, 03 &#x3D; Under 30 days, 04 &#x3D; Between 30 and 60 days, 05 &#x3D; Over 60 days | [optional] 
**ch_acc_change** | **string** | Date on which the user account with the business was last modified, including the invoice or delivery address, the new payment account or new added users. Date format: YYYYMMDD | [optional] 
**ch_acc_change_ind** | **string** | Period of time passed since the payment user’s account with the business was last modified, including the invoice or delivery address, the new payment account or new added users. Accepted values: 01 &#x3D; Modified in this transaction, 02 &#x3D; Under 30 days, 03 &#x3D; 30-60 days, 04 &#x3D; Over 60 days | [optional] 
**ch_acc_date** | **string** | Date on which the payment user opened the account with the business. Date format: YYYYMMDD | [optional] 
**ch_acc_pw_change** | **string** | Date on which the payment user changed the password of their account with the business, or reset their account. Date format: YYYYMMDD | [optional] 
**ch_acc_pw_change_ind** | **string** | Indicates the period of time since the payment user’s account with the business changed its password or was reset. Accepted values: 01 &#x3D; No changes, 02 &#x3D; Changed during this transaction, 03 &#x3D; Under 30 days, 04 &#x3D; Between 30 and 60 days, 05 &#x3D; Over 60 days | [optional] 
**nb_purchase_account** | **int** | Number of purchases with this account during the last six months | [optional] 
**provision_attempts_day** | **int** | Number of attempts to add a card in the last 24 hours | [optional] 
**txn_activity_day** | **string** | Number of transactions (successful and abandoned) for this account with the business in all payment accounts in the last 24 hours | [optional] 
**txn_activity_year** | **string** | Number of transactions (successful and abandoned) for this account of the payment user with the business in all payment accounts of the last year | [optional] 
**payment_acc_age** | **string** | Date on which the payment account was registered on the payment user’s account with the business. | [optional] 
**payment_acc_ind** | **string** | Indicates the period of time which the payment account was registered on the payment user’s account with the business. Accepted values: 01 &#x3D; No account (checkout as guest), 02 &#x3D; During this transaction, 03 &#x3D; Under 30 days, 04 &#x3D; Between 30 and 60 days, 05 &#x3D; Over 60 days | [optional] 
**ship_address_usage** | **string** | Date on which the delivery address used for this transaction was used for the first time with the business. Date format: YYYYMMDD | [optional] 
**ship_address_usage_ind** | **string** | Indicates when the delivery address used for this transaction was used for the first time with the business. Accepted values: 01 &#x3D; This transaction, 02 &#x3D; Under 30 days, 03 &#x3D; Between 30 and 60 days, 04 &#x3D; Over 60 days | [optional] 
**ship_name_indicator** | **string** | Indicates whether the name of the payment user on the account is identical to the delivery name used for this transaction. Accepted values: 01 &#x3D; Name on the account identical to the delivery name, 02 &#x3D; Name on the account different from the delivery name | [optional] 
**suspicious_acc_activity** | **string** | Indicates whether the business has experienced suspicious activity (including previous fraud) on the payment user’s account. Accepted values: 01 &#x3D; No record of suspicious activity, 02 &#x3D; Record of suspicious activity | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

