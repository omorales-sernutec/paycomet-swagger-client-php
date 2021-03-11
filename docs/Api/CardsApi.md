# Swagger\Client\CardsApi

All URIs are relative to *https://rest.paycomet.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addUser**](CardsApi.md#adduser) | **POST** /v1/cards | Tokenizes a card. Either card number and CVC2 or jetToken are required. For you to send directly the card data you should be PCI certified or the accepting the requirement to submit quarterly SAQ-AEP and get ASV scans. For most users is strongly recommended getting the jetToken with JETIFRAME or using GET integration to register the cards instead of REST.
[**editUser**](CardsApi.md#edituser) | **POST** /v1/cards/edit | Changes the expiry date, cvc2 or both
[**infoUser**](CardsApi.md#infouser) | **POST** /v1/cards/info | Get card info
[**physicalAddCard**](CardsApi.md#physicaladdcard) | **POST** /v1/cards/physical | Tokenize a card by physical encrypted data
[**removeUser**](CardsApi.md#removeuser) | **POST** /v1/cards/delete | Removes a card

# **addUser**
> \Swagger\Client\Model\InlineResponse2001 addUser($body, $paycomet_api_token)

Tokenizes a card. Either card number and CVC2 or jetToken are required. For you to send directly the card data you should be PCI certified or the accepting the requirement to submit quarterly SAQ-AEP and get ASV scans. For most users is strongly recommended getting the jetToken with JETIFRAME or using GET integration to register the cards instead of REST.

add_user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: paycometApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('PAYCOMET-API-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PAYCOMET-API-TOKEN', 'Bearer');

$apiInstance = new Swagger\Client\Api\CardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\Body1(); // \Swagger\Client\Model\Body1 | 
$paycomet_api_token = "paycomet_api_token_example"; // string | PAYCOMET API key (Token actions privilege required)

try {
    $result = $apiInstance->addUser($body, $paycomet_api_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardsApi->addUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body1**](../Model/Body1.md)|  | [optional]
 **paycomet_api_token** | **string**| PAYCOMET API key (Token actions privilege required) | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[paycometApiKey](../../README.md#paycometApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **editUser**
> \Swagger\Client\Model\InlineResponse2001 editUser($body, $paycomet_api_token)

Changes the expiry date, cvc2 or both

edit_user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: paycometApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('PAYCOMET-API-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PAYCOMET-API-TOKEN', 'Bearer');

$apiInstance = new Swagger\Client\Api\CardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\Body4(); // \Swagger\Client\Model\Body4 | 
$paycomet_api_token = "paycomet_api_token_example"; // string | PAYCOMET API key (Token actions privilege required)

try {
    $result = $apiInstance->editUser($body, $paycomet_api_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardsApi->editUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body4**](../Model/Body4.md)|  | [optional]
 **paycomet_api_token** | **string**| PAYCOMET API key (Token actions privilege required) | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[paycometApiKey](../../README.md#paycometApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **infoUser**
> \Swagger\Client\Model\InlineResponse2002 infoUser($body, $paycomet_api_token)

Get card info

Info about an user card.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: paycometApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('PAYCOMET-API-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PAYCOMET-API-TOKEN', 'Bearer');

$apiInstance = new Swagger\Client\Api\CardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\Body2(); // \Swagger\Client\Model\Body2 | 
$paycomet_api_token = "paycomet_api_token_example"; // string | PAYCOMET API key (Query privilege required)

try {
    $result = $apiInstance->infoUser($body, $paycomet_api_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardsApi->infoUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body2**](../Model/Body2.md)|  | [optional]
 **paycomet_api_token** | **string**| PAYCOMET API key (Query privilege required) | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

[paycometApiKey](../../README.md#paycometApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **physicalAddCard**
> \Swagger\Client\Model\InlineResponse2004 physicalAddCard($body, $paycomet_api_token)

Tokenize a card by physical encrypted data

cards_physical

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: paycometApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('PAYCOMET-API-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PAYCOMET-API-TOKEN', 'Bearer');

$apiInstance = new Swagger\Client\Api\CardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\Body5(); // \Swagger\Client\Model\Body5 | 
$paycomet_api_token = "paycomet_api_token_example"; // string | PAYCOMET API key (Token actions privilege required)

try {
    $result = $apiInstance->physicalAddCard($body, $paycomet_api_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardsApi->physicalAddCard: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body5**](../Model/Body5.md)|  | [optional]
 **paycomet_api_token** | **string**| PAYCOMET API key (Token actions privilege required) | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2004**](../Model/InlineResponse2004.md)

### Authorization

[paycometApiKey](../../README.md#paycometApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removeUser**
> \Swagger\Client\Model\InlineResponse2003 removeUser($body, $paycomet_api_token)

Removes a card

Deletes the user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: paycometApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('PAYCOMET-API-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PAYCOMET-API-TOKEN', 'Bearer');

$apiInstance = new Swagger\Client\Api\CardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\Body3(); // \Swagger\Client\Model\Body3 | 
$paycomet_api_token = "paycomet_api_token_example"; // string | PAYCOMET API key (Token actions privilege required)

try {
    $result = $apiInstance->removeUser($body, $paycomet_api_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardsApi->removeUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body3**](../Model/Body3.md)|  | [optional]
 **paycomet_api_token** | **string**| PAYCOMET API key (Token actions privilege required) | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

[paycometApiKey](../../README.md#paycometApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

