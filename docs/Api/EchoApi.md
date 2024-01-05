# OpenAPI\Client\EchoApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**echoGet()**](EchoApi.md#echoGet) | **GET** /echo | Test Echo API request |


## `echoGet()`

```php
echoGet($api_platform): \OpenAPI\Client\Model\ApiResponse
```

Test Echo API request

You can use this API request to test your API client and make sure everything  works fine (i.e. authorization or ApiPlatform headers or check if the API is up).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\EchoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$api_platform = 'api_platform_example'; // string | The API provides access to two separate platforms: test and live. The test platform allows you to experiment with the API without incurring charges or affecting customer orders. The live platform allows you to make real world changes.

try {
    $result = $apiInstance->echoGet($api_platform);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EchoApi->echoGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **api_platform** | **string**| The API provides access to two separate platforms: test and live. The test platform allows you to experiment with the API without incurring charges or affecting customer orders. The live platform allows you to make real world changes. | |

### Return type

[**\OpenAPI\Client\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
