# Swagger\Client\SepaApi

All URIs are relative to *https://rest.paycomet.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addDocument**](SepaApi.md#adddocument) | **POST** /v1/sepa/add-document | Adds a SEPA document
[**checkCustomer**](SepaApi.md#checkcustomer) | **POST** /v1/sepa/check-customer | Check a customers SEPA documentation
[**checkDocument**](SepaApi.md#checkdocument) | **POST** /v1/sepa/check-document | Check a SEPA document
[**sepaOperations**](SepaApi.md#sepaoperations) | **POST** /v1/sepa/operations | Send SEPA operations

# **addDocument**
> \Swagger\Client\Model\InlineResponse20026 addDocument($paycomet_api_token, $body)

Adds a SEPA document

add_document

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: paycometApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('PAYCOMET-API-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PAYCOMET-API-TOKEN', 'Bearer');

$apiInstance = new Swagger\Client\Api\SepaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$paycomet_api_token = "paycomet_api_token_example"; // string | PAYCOMET API key (Authorization privilege required)
$body = new \Swagger\Client\Model\Body30(); // \Swagger\Client\Model\Body30 | 

try {
    $result = $apiInstance->addDocument($paycomet_api_token, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SepaApi->addDocument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **paycomet_api_token** | **string**| PAYCOMET API key (Authorization privilege required) |
 **body** | [**\Swagger\Client\Model\Body30**](../Model/Body30.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20026**](../Model/InlineResponse20026.md)

### Authorization

[paycometApiKey](../../README.md#paycometApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **checkCustomer**
> \Swagger\Client\Model\InlineResponse20027 checkCustomer($paycomet_api_token, $body)

Check a customers SEPA documentation

check_customer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: paycometApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('PAYCOMET-API-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PAYCOMET-API-TOKEN', 'Bearer');

$apiInstance = new Swagger\Client\Api\SepaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$paycomet_api_token = "paycomet_api_token_example"; // string | PAYCOMET API key (Authorization privilege required)
$body = new \Swagger\Client\Model\Body32(); // \Swagger\Client\Model\Body32 | 

try {
    $result = $apiInstance->checkCustomer($paycomet_api_token, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SepaApi->checkCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **paycomet_api_token** | **string**| PAYCOMET API key (Authorization privilege required) |
 **body** | [**\Swagger\Client\Model\Body32**](../Model/Body32.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20027**](../Model/InlineResponse20027.md)

### Authorization

[paycometApiKey](../../README.md#paycometApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **checkDocument**
> \Swagger\Client\Model\InlineResponse20026 checkDocument($paycomet_api_token, $body)

Check a SEPA document

check_document

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: paycometApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('PAYCOMET-API-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PAYCOMET-API-TOKEN', 'Bearer');

$apiInstance = new Swagger\Client\Api\SepaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$paycomet_api_token = "paycomet_api_token_example"; // string | PAYCOMET API key (Authorization privilege required)
$body = new \Swagger\Client\Model\Body31(); // \Swagger\Client\Model\Body31 | 

try {
    $result = $apiInstance->checkDocument($paycomet_api_token, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SepaApi->checkDocument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **paycomet_api_token** | **string**| PAYCOMET API key (Authorization privilege required) |
 **body** | [**\Swagger\Client\Model\Body31**](../Model/Body31.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20026**](../Model/InlineResponse20026.md)

### Authorization

[paycometApiKey](../../README.md#paycometApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sepaOperations**
> \Swagger\Client\Model\InlineResponse20028 sepaOperations($paycomet_api_token, $body)

Send SEPA operations

sepa_operations

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: paycometApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('PAYCOMET-API-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PAYCOMET-API-TOKEN', 'Bearer');

$apiInstance = new Swagger\Client\Api\SepaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$paycomet_api_token = "paycomet_api_token_example"; // string | PAYCOMET API key (Authorization privilege required)
$body = new \Swagger\Client\Model\Body33(); // \Swagger\Client\Model\Body33 | 

try {
    $result = $apiInstance->sepaOperations($paycomet_api_token, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SepaApi->sepaOperations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **paycomet_api_token** | **string**| PAYCOMET API key (Authorization privilege required) |
 **body** | [**\Swagger\Client\Model\Body33**](../Model/Body33.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20028**](../Model/InlineResponse20028.md)

### Authorization

[paycometApiKey](../../README.md#paycometApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

