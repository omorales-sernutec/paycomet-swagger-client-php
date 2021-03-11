# V1formPaymentMerchantDataMerchantRiskIndicator

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**delivery_email_address** | **string** | For electronic delivery, the email address to which the goods were delivered | [optional] 
**delivery_timeframe** | **string** | Indicates the delivery period of the goods. Accepted values: 01 &#x3D; Electronic delivery, 02 &#x3D; Delivery on the same day, 03 &#x3D; 24 hour delivery, 04 &#x3D; Delivery in 2 days or more | [optional] 
**gift_card_amount** | **string** | For purchases from prepaid cards or gift cards, the total amount of the purchase in major units (for example, USD 123.45 is 123) | [optional] 
**gift_card_count** | **int** | For purchases from prepaid cards or gift cards, total count of prepaid cards or gift cards/gift codes purchased | [optional] 
**gift_card_curr** | **string** | For the purchase of prepaid/gift cards, code ISO-4217 of currency of the card | [optional] 
**pre_order_date** | **string** | For a pre-ordered purchase, the forecast availability date of the goods. Date format: YYYYMMDD | [optional] 
**pre_order_purchase_ind** | **string** | Indicates whether the customer makes an order with availability or future launch date. Accepted values: 01 &#x3D; Goods available, 02 &#x3D; Future availability | [optional] 
**reorder_items_ind** | **string** | Indicates whether the card is reordering previously purchased goods. Accepted values: 01 &#x3D; First time purchased, 02 &#x3D; Previously purchased | [optional] 
**ship_indicator** | **string** | Indicates the delivery method selected for the transaction. Businesses must select the delivery indicator code which more precisely describes the specific transaction of the payment user, not their general commercial activity. If one or more items are included in the sale, use the delivery Indicator code for physical goods, or if all products are digital, use the delivery Indicator code which describes the most expensive item. Accepted values: 01 &#x3D; Delivery to the invoice address of the customer, 02 &#x3D; Delivery to another verified address of the client, 03 &#x3D; Delivery to an address other than that of the customer’s invoice address, 04 &#x3D; Delivery to the store or collection at premises (the address of the store will be stored in the delivery address fields), 05 &#x3D; Digital goods (includes online services, electronic gift cards and discount coupons), 06 &#x3D; Tickets for events and trips, without delivery, 07 &#x3D; Other (for example, games, digital services without delivery, subscriptions to online services, etc.) | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

