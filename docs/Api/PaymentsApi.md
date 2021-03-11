# Swagger\Client\PaymentsApi

All URIs are relative to *https://rest.paycomet.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**executePurchase**](PaymentsApi.md#executepurchase) | **POST** /v1/payments | Executes a payment
[**executePurchaseRtoken**](PaymentsApi.md#executepurchasertoken) | **POST** /v1/payments/rtoken | Executes a payment by refence
[**operationInfo**](PaymentsApi.md#operationinfo) | **POST** /v1/payments/{order}/info | Get info of a order
[**operationSearch**](PaymentsApi.md#operationsearch) | **POST** /v1/payments/search | Search orders

# **executePurchase**
> \Swagger\Client\Model\InlineResponse20012 executePurchase($body, $paycomet_api_token)

Executes a payment

Generate a purchase. It will confirms a charge or send a challenge URL to the commerce.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: paycometApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('PAYCOMET-API-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PAYCOMET-API-TOKEN', 'Bearer');

$apiInstance = new Swagger\Client\Api\PaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\Body13(); // \Swagger\Client\Model\Body13 | 
$paycomet_api_token = "paycomet_api_token_example"; // string | PAYCOMET API key (Authorization privilege required)

try {
    $result = $apiInstance->executePurchase($body, $paycomet_api_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->executePurchase: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body13**](../Model/Body13.md)|  | [optional]
 **paycomet_api_token** | **string**| PAYCOMET API key (Authorization privilege required) | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20012**](../Model/InlineResponse20012.md)

### Authorization

[paycometApiKey](../../README.md#paycometApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **executePurchaseRtoken**
> \Swagger\Client\Model\InlineResponse20018 executePurchaseRtoken($body, $paycomet_api_token)

Executes a payment by refence

Generate a purchase with reference. It will confirms a charge or send a challenge URL to the commerce.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: paycometApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('PAYCOMET-API-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PAYCOMET-API-TOKEN', 'Bearer');

$apiInstance = new Swagger\Client\Api\PaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\Body20(); // \Swagger\Client\Model\Body20 | 
$paycomet_api_token = "paycomet_api_token_example"; // string | PAYCOMET API key (Authorization privilege required)

try {
    $result = $apiInstance->executePurchaseRtoken($body, $paycomet_api_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->executePurchaseRtoken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body20**](../Model/Body20.md)|  | [optional]
 **paycomet_api_token** | **string**| PAYCOMET API key (Authorization privilege required) | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20018**](../Model/InlineResponse20018.md)

### Authorization

[paycometApiKey](../../README.md#paycometApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **operationInfo**
> \Swagger\Client\Model\InlineResponse20014 operationInfo($paycomet_api_token, $order, $body)

Get info of a order

operation_info

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: paycometApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('PAYCOMET-API-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PAYCOMET-API-TOKEN', 'Bearer');

$apiInstance = new Swagger\Client\Api\PaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$paycomet_api_token = "paycomet_api_token_example"; // string | PAYCOMET API key (Query privilege required)
$order = "order_example"; // string | 
$body = new \Swagger\Client\Model\Body15(); // \Swagger\Client\Model\Body15 | 

try {
    $result = $apiInstance->operationInfo($paycomet_api_token, $order, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->operationInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **paycomet_api_token** | **string**| PAYCOMET API key (Query privilege required) |
 **order** | **string**|  |
 **body** | [**\Swagger\Client\Model\Body15**](../Model/Body15.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20014**](../Model/InlineResponse20014.md)

### Authorization

[paycometApiKey](../../README.md#paycometApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **operationSearch**
> \Swagger\Client\Model\InlineResponse20015 operationSearch($paycomet_api_token, $body)

Search orders

operation_search

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: paycometApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('PAYCOMET-API-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PAYCOMET-API-TOKEN', 'Bearer');

$apiInstance = new Swagger\Client\Api\PaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$paycomet_api_token = "paycomet_api_token_example"; // string | PAYCOMET API key (Query privilege required)
$body = new \Swagger\Client\Model\Body16(); // \Swagger\Client\Model\Body16 | 

try {
    $result = $apiInstance->operationSearch($paycomet_api_token, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->operationSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **paycomet_api_token** | **string**| PAYCOMET API key (Query privilege required) |
 **body** | [**\Swagger\Client\Model\Body16**](../Model/Body16.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20015**](../Model/InlineResponse20015.md)

### Authorization

[paycometApiKey](../../README.md#paycometApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

