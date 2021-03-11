# V1sepaoperationsOperations

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**operation_type** | **int** | Type of operation. Identifies whether the operation is a direct debit or a transfer. 1 – Direct Debit (N19) 2 – Transfer (N34) | 
**merchant_code** | **string** | Unique identifier as PAYCOMET account. Available on the client control panel. | 
**terminal_id_debtor** | **int** | This will be the terminal number assigned to the product. Obtained from the control panel. Identifies the terminal number of the debtor/payer of a SEPA operation. Therefore, it will depend on the type of operation (debit, transfer). | 
**unique_id_creditor** | **string** | This will be the unique identifier of this individual, freelancer, company (recipient) in the client. | 
**company_name_creditor** | **string** | Name of the company, individual or freelancer corresponding to the previous indicator. | 
**iban_number_creditor** | **string** | IBAN code of the account of the recipient. | 
**swift_code_creditor** | **string** | SWIFT code of the bank account of the recipient. Must be provided when the account IBAN is not Spanish. If the ibanNumberCreditor number belongs to a Spanish account, it must be sent as an empty string. | 
**company_type_creditor** | **int** | Identifier of the type of recipient: 1: Individual / 2: Freelancer / 3: Commercial Company. | 
**operation_order** | **string** | Unique reference of the operation. | 
**operation_amount** | **int** | Amount in the transaction currency with 2 decimals in integer format: (€2.25 &#x3D; 225). | 
**operation_currency** | **string** | Currency type of the transaction. The only permitted currency is the euro, whose code is EUR. | 
**operation_datetime** | [**\DateTime**](\DateTime.md) | Date desired for sending the SEPA operation / remittance. Always after the current date. Format: yyyymmdd. | 
**operation_concept** | **string** | Concept assigned to the operation / remittance. This is the descriptor which will appear in banking entries. Maximum length 100. Although error 1273 specified 140 characters, PAYCOMET reserves 40, the maximum permitted in the input therefore being 100. Allowed charactaers: ([A-Za-z0-9]|[+|?|/|-|:|(|)|.|,|&#x27;| ]) | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

