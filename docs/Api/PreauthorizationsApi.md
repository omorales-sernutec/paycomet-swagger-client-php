# Swagger\Client\PreauthorizationsApi

All URIs are relative to *https://rest.paycomet.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancelPreauthorization**](PreauthorizationsApi.md#cancelpreauthorization) | **POST** /v1/payments/{order}/preauth/cancel | Cancel previous preauthorization
[**confirmPreauthorization**](PreauthorizationsApi.md#confirmpreauthorization) | **POST** /v1/payments/{order}/preauth/confirm | Confirm previous preauthorization
[**createPreauthoritation**](PreauthorizationsApi.md#createpreauthoritation) | **POST** /v1/payments/preauth | Create preauthorization

# **cancelPreauthorization**
> \Swagger\Client\Model\InlineResponse20016 cancelPreauthorization($paycomet_api_token, $order, $body)

Cancel previous preauthorization

cancel_preauthorization

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: paycometApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('PAYCOMET-API-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PAYCOMET-API-TOKEN', 'Bearer');

$apiInstance = new Swagger\Client\Api\PreauthorizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$paycomet_api_token = "paycomet_api_token_example"; // string | PAYCOMET API key (Preauthorization privilege required)
$order = "order_example"; // string | 
$body = new \Swagger\Client\Model\Body18(); // \Swagger\Client\Model\Body18 | 

try {
    $result = $apiInstance->cancelPreauthorization($paycomet_api_token, $order, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PreauthorizationsApi->cancelPreauthorization: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **paycomet_api_token** | **string**| PAYCOMET API key (Preauthorization privilege required) |
 **order** | **string**|  |
 **body** | [**\Swagger\Client\Model\Body18**](../Model/Body18.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20016**](../Model/InlineResponse20016.md)

### Authorization

[paycometApiKey](../../README.md#paycometApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **confirmPreauthorization**
> \Swagger\Client\Model\InlineResponse20017 confirmPreauthorization($paycomet_api_token, $order, $body)

Confirm previous preauthorization

confirm_preauthorization

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: paycometApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('PAYCOMET-API-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PAYCOMET-API-TOKEN', 'Bearer');

$apiInstance = new Swagger\Client\Api\PreauthorizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$paycomet_api_token = "paycomet_api_token_example"; // string | PAYCOMET API key (Preauthorization privilege required)
$order = "order_example"; // string | 
$body = new \Swagger\Client\Model\Body19(); // \Swagger\Client\Model\Body19 | 

try {
    $result = $apiInstance->confirmPreauthorization($paycomet_api_token, $order, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PreauthorizationsApi->confirmPreauthorization: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **paycomet_api_token** | **string**| PAYCOMET API key (Preauthorization privilege required) |
 **order** | **string**|  |
 **body** | [**\Swagger\Client\Model\Body19**](../Model/Body19.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20017**](../Model/InlineResponse20017.md)

### Authorization

[paycometApiKey](../../README.md#paycometApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createPreauthoritation**
> \Swagger\Client\Model\InlineResponse20012 createPreauthoritation($paycomet_api_token, $body)

Create preauthorization

create_preauthorization

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: paycometApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('PAYCOMET-API-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PAYCOMET-API-TOKEN', 'Bearer');

$apiInstance = new Swagger\Client\Api\PreauthorizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$paycomet_api_token = "paycomet_api_token_example"; // string | PAYCOMET API key (Preauthorization privilege required)
$body = new \Swagger\Client\Model\Body17(); // \Swagger\Client\Model\Body17 | 

try {
    $result = $apiInstance->createPreauthoritation($paycomet_api_token, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PreauthorizationsApi->createPreauthoritation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **paycomet_api_token** | **string**| PAYCOMET API key (Preauthorization privilege required) |
 **body** | [**\Swagger\Client\Model\Body17**](../Model/Body17.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20012**](../Model/InlineResponse20012.md)

### Authorization

[paycometApiKey](../../README.md#paycometApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

