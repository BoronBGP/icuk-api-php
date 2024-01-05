# OpenAPI\Client\BroadbandDiagnosticsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**broadbandDiagnosticsResultsUsernameTestIdGet()**](BroadbandDiagnosticsApi.md#broadbandDiagnosticsResultsUsernameTestIdGet) | **GET** /broadband/diagnostics/results/{username}/{test_id} | Gets the results of complete diagnostics test for a certain user and test ID for a TTB line |
| [**broadbandDiagnosticsUsernameGet()**](BroadbandDiagnosticsApi.md#broadbandDiagnosticsUsernameGet) | **GET** /broadband/diagnostics/{username} | Carry out a TalkTalk diagnostics test on the user line |
| [**broadbandKbdPost()**](BroadbandDiagnosticsApi.md#broadbandKbdPost) | **POST** /broadband/kbd | Carry out a Knowledge Based Diagnostics test on a BT Openreach line |
| [**broadbandKbdResultUsernameGet()**](BroadbandDiagnosticsApi.md#broadbandKbdResultUsernameGet) | **GET** /broadband/kbd/result/{username} | Gets the results of complete KBD&#39;s for a certain user |


## `broadbandDiagnosticsResultsUsernameTestIdGet()`

```php
broadbandDiagnosticsResultsUsernameTestIdGet($username, $test_id, $api_platform): \OpenAPI\Client\Model\BroadbandDiagnosticsTamResponse
```

Gets the results of complete diagnostics test for a certain user and test ID for a TTB line

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BroadbandDiagnosticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$username = 'username_example'; // string | The name of the user
$test_id = 'test_id_example'; // string | The test ID
$api_platform = 'api_platform_example'; // string | The API provides access to two separate platforms: test and live. The test platform allows you to experiment with the API without incurring charges or affecting customer orders. The live platform allows you to make real world changes.

try {
    $result = $apiInstance->broadbandDiagnosticsResultsUsernameTestIdGet($username, $test_id, $api_platform);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BroadbandDiagnosticsApi->broadbandDiagnosticsResultsUsernameTestIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **username** | **string**| The name of the user | |
| **test_id** | **string**| The test ID | |
| **api_platform** | **string**| The API provides access to two separate platforms: test and live. The test platform allows you to experiment with the API without incurring charges or affecting customer orders. The live platform allows you to make real world changes. | |

### Return type

[**\OpenAPI\Client\Model\BroadbandDiagnosticsTamResponse**](../Model/BroadbandDiagnosticsTamResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `broadbandDiagnosticsUsernameGet()`

```php
broadbandDiagnosticsUsernameGet($username, $api_platform): \OpenAPI\Client\Model\BroadbandDiagnosticsResponse
```

Carry out a TalkTalk diagnostics test on the user line

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BroadbandDiagnosticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$username = 'username_example'; // string | The name of the user
$api_platform = 'api_platform_example'; // string | The API provides access to two separate platforms: test and live. The test platform allows you to experiment with the API without incurring charges or affecting customer orders. The live platform allows you to make real world changes.

try {
    $result = $apiInstance->broadbandDiagnosticsUsernameGet($username, $api_platform);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BroadbandDiagnosticsApi->broadbandDiagnosticsUsernameGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **username** | **string**| The name of the user | |
| **api_platform** | **string**| The API provides access to two separate platforms: test and live. The test platform allows you to experiment with the API without incurring charges or affecting customer orders. The live platform allows you to make real world changes. | |

### Return type

[**\OpenAPI\Client\Model\BroadbandDiagnosticsResponse**](../Model/BroadbandDiagnosticsResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `broadbandKbdPost()`

```php
broadbandKbdPost($api_platform, $broadband_kbd_request): \OpenAPI\Client\Model\BroadbandKBDResponse
```

Carry out a Knowledge Based Diagnostics test on a BT Openreach line

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BroadbandDiagnosticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$api_platform = 'api_platform_example'; // string | The API provides access to two separate platforms: test and live. The test platform allows you to experiment with the API without incurring charges or affecting customer orders. The live platform allows you to make real world changes.
$broadband_kbd_request = new \OpenAPI\Client\Model\BroadbandKBDRequest(); // \OpenAPI\Client\Model\BroadbandKBDRequest | Represent a KBD request

try {
    $result = $apiInstance->broadbandKbdPost($api_platform, $broadband_kbd_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BroadbandDiagnosticsApi->broadbandKbdPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **api_platform** | **string**| The API provides access to two separate platforms: test and live. The test platform allows you to experiment with the API without incurring charges or affecting customer orders. The live platform allows you to make real world changes. | |
| **broadband_kbd_request** | [**\OpenAPI\Client\Model\BroadbandKBDRequest**](../Model/BroadbandKBDRequest.md)| Represent a KBD request | [optional] |

### Return type

[**\OpenAPI\Client\Model\BroadbandKBDResponse**](../Model/BroadbandKBDResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `broadbandKbdResultUsernameGet()`

```php
broadbandKbdResultUsernameGet($username, $api_platform): \OpenAPI\Client\Model\BroadbandKBDResponse[]
```

Gets the results of complete KBD's for a certain user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BroadbandDiagnosticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$username = 'username_example'; // string | The name of the user
$api_platform = 'api_platform_example'; // string | The API provides access to two separate platforms: test and live. The test platform allows you to experiment with the API without incurring charges or affecting customer orders. The live platform allows you to make real world changes.

try {
    $result = $apiInstance->broadbandKbdResultUsernameGet($username, $api_platform);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BroadbandDiagnosticsApi->broadbandKbdResultUsernameGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **username** | **string**| The name of the user | |
| **api_platform** | **string**| The API provides access to two separate platforms: test and live. The test platform allows you to experiment with the API without incurring charges or affecting customer orders. The live platform allows you to make real world changes. | |

### Return type

[**\OpenAPI\Client\Model\BroadbandKBDResponse[]**](../Model/BroadbandKBDResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
