# InlineResponse20014PaymentHistory

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**operation_id** | **int** | PAYCOMET identifier | [optional] 
**method_id** | **int** | PAYCOMET payment method ID. 1 is for card. | [optional] 
**timestamp** | **string** | Timestamp of transaction | [optional] 
**order** | **string** | Unique reference for merchant&#x27;s purchase | [optional] 
**operation_type** | **int** | PAYCOMET operation type ID. | [optional] 
**operation_name** | **string** | PAYCOMET operation type description. | [optional] 
**state** | **int** | Identifier of the state of the operation. 0 means operation failed, 1 operation correct. | [optional] 
**state_name** | **string** | Literal of the state of the operation. | [optional] 
**response** | **string** | Status of transation. OK, KO o SF (pending payment). | [optional] 
**terminal** | **int** | Product or terminal Id. | [optional] 
**terminal_name** | **string** | Customer product name | [optional] 
**user** | **string** | Administrative user of the operation | [optional] 
**amount** | **string** | Amount of the operation in number format. 1.00 EURO &#x3D; 100, 4.50 EUROS &#x3D; 450... | [optional] 
**currency** | **string** | Currency of the transaction. | [optional] 
**amount_display** | **string** | Literal of the operation amount (with currency symbol) | [optional] 
**error_code** | **int** | Error code given by PAYCOMET. | [optional] 
**error_description** | **string** | PAYCOMET operation type description. | [optional] 
**fee_euro** | **float** | PAYCOMET fee for the transaction fixed per operation (in euros) | [optional] 
**fee_percent** | **float** | PAYCOMET fee for the transaction variable per operation (in euros) | [optional] 
**original_ip** | **string** | IP Address of the customer that initiated the payment transaction | [optional] 
**pan** | **string** | Masked credit/debit card | [optional] 
**scoring** | **string** | Risk scoring value from 0 to 100. | [optional] 
**merchant_bank** | **string** | Bank of merchant terminal. | [optional] 
**bic_code** | **string** | Biccode of the entity by which the transaction was processed. | [optional] 
**product_description** | **string** | Description of the product sold. | [optional] 
**card_type** | **string** | Type of card. If it can be identified, information on the type of card will be sent (DEBIT, CREDIT, etc). Otherwise, the field will be returned blank. | [optional] 
**card_category** | **string** | Category of card. If it can be identified, information on the category of card will be sent. Otherwise, the field will be returned blank. | [optional] 
**card_brand** | **string** | Brand of card. If it can be identified, information on the brand of card will be sent. Otherwise, the field will be returned blank. | [optional] 
**card_country** | **string** | Country of the issuer of the card in ISO3 Code (ex.: 724 &#x3D; Spain). May be left empty. | [optional] 
**secure** | **string** | 0 or 1. Indicates if the transaction is secure. | [optional] 
**split_id** | **int** | Split identifier in some operations | [optional] 
**issuer_bank** | **string** | Bank of the card | [optional] 
**auth_code** | **string** | Authorization bank code of the transaction (required to execute a return). | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

