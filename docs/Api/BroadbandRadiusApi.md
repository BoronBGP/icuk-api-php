# OpenAPI\Client\BroadbandRadiusApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**broadbandCarrierRadiusGet()**](BroadbandRadiusApi.md#broadbandCarrierRadiusGet) | **GET** /broadband/carrier_radius | Retrieves the carrier RADIUS logs of a broadband user. [TTB only] |


## `broadbandCarrierRadiusGet()`

```php
broadbandCarrierRadiusGet($api_platform, $username): \OpenAPI\Client\Model\BroadbandCarrierRadiusLogs
```

Retrieves the carrier RADIUS logs of a broadband user. [TTB only]

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BroadbandRadiusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$api_platform = 'api_platform_example'; // string | The API provides access to two separate platforms: test and live. The test platform allows you to experiment with the API without incurring charges or affecting customer orders. The live platform allows you to make real world changes.
$username = 'username_example'; // string | The name of the user

try {
    $result = $apiInstance->broadbandCarrierRadiusGet($api_platform, $username);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BroadbandRadiusApi->broadbandCarrierRadiusGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **api_platform** | **string**| The API provides access to two separate platforms: test and live. The test platform allows you to experiment with the API without incurring charges or affecting customer orders. The live platform allows you to make real world changes. | |
| **username** | **string**| The name of the user | [optional] |

### Return type

[**\OpenAPI\Client\Model\BroadbandCarrierRadiusLogs**](../Model/BroadbandCarrierRadiusLogs.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
