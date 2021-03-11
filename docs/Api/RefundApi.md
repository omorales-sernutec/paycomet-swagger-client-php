# Swagger\Client\RefundApi

All URIs are relative to *https://rest.paycomet.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**executeRefund**](RefundApi.md#executerefund) | **POST** /v1/payments/{order}/refund | Perform a refund

# **executeRefund**
> \Swagger\Client\Model\InlineResponse20013 executeRefund($paycomet_api_token, $order, $body)

Perform a refund

execute_refund

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: paycometApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('PAYCOMET-API-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PAYCOMET-API-TOKEN', 'Bearer');

$apiInstance = new Swagger\Client\Api\RefundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$paycomet_api_token = "paycomet_api_token_example"; // string | PAYCOMET API key (Refund privilege required)
$order = "order_example"; // string | 
$body = new \Swagger\Client\Model\Body14(); // \Swagger\Client\Model\Body14 | 

try {
    $result = $apiInstance->executeRefund($paycomet_api_token, $order, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RefundApi->executeRefund: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **paycomet_api_token** | **string**| PAYCOMET API key (Refund privilege required) |
 **order** | **string**|  |
 **body** | [**\Swagger\Client\Model\Body14**](../Model/Body14.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20013**](../Model/InlineResponse20013.md)

### Authorization

[paycometApiKey](../../README.md#paycometApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

