# OpenAPI\Client\BroadbandOnlineStatusApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**broadbandOnlineStatusGet()**](BroadbandOnlineStatusApi.md#broadbandOnlineStatusGet) | **GET** /broadband/online_status | Retrieves the online statuses for all broadband users |
| [**broadbandOnlineStatusUsernameDelete()**](BroadbandOnlineStatusApi.md#broadbandOnlineStatusUsernameDelete) | **DELETE** /broadband/online_status/{username} | Terminates a user&#39;s session if they are online |
| [**broadbandOnlineStatusUsernameGet()**](BroadbandOnlineStatusApi.md#broadbandOnlineStatusUsernameGet) | **GET** /broadband/online_status/{username} | Retrieves the online status of a broadband user |


## `broadbandOnlineStatusGet()`

```php
broadbandOnlineStatusGet($api_platform): \OpenAPI\Client\Model\BroadbandOnlineStatusResults
```

Retrieves the online statuses for all broadband users

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BroadbandOnlineStatusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$api_platform = 'api_platform_example'; // string | The API provides access to two separate platforms: test and live. The test platform allows you to experiment with the API without incurring charges or affecting customer orders. The live platform allows you to make real world changes.

try {
    $result = $apiInstance->broadbandOnlineStatusGet($api_platform);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BroadbandOnlineStatusApi->broadbandOnlineStatusGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **api_platform** | **string**| The API provides access to two separate platforms: test and live. The test platform allows you to experiment with the API without incurring charges or affecting customer orders. The live platform allows you to make real world changes. | |

### Return type

[**\OpenAPI\Client\Model\BroadbandOnlineStatusResults**](../Model/BroadbandOnlineStatusResults.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `broadbandOnlineStatusUsernameDelete()`

```php
broadbandOnlineStatusUsernameDelete($username, $api_platform): \OpenAPI\Client\Model\BroadbandOnlineStatusTermination
```

Terminates a user's session if they are online

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BroadbandOnlineStatusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$username = 'username_example'; // string | The name of the user
$api_platform = 'api_platform_example'; // string | The API provides access to two separate platforms: test and live. The test platform allows you to experiment with the API without incurring charges or affecting customer orders. The live platform allows you to make real world changes.

try {
    $result = $apiInstance->broadbandOnlineStatusUsernameDelete($username, $api_platform);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BroadbandOnlineStatusApi->broadbandOnlineStatusUsernameDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **username** | **string**| The name of the user | |
| **api_platform** | **string**| The API provides access to two separate platforms: test and live. The test platform allows you to experiment with the API without incurring charges or affecting customer orders. The live platform allows you to make real world changes. | |

### Return type

[**\OpenAPI\Client\Model\BroadbandOnlineStatusTermination**](../Model/BroadbandOnlineStatusTermination.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `broadbandOnlineStatusUsernameGet()`

```php
broadbandOnlineStatusUsernameGet($username, $api_platform): \OpenAPI\Client\Model\BroadbandOnlineStatus
```

Retrieves the online status of a broadband user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BroadbandOnlineStatusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$username = 'username_example'; // string | Name of the user
$api_platform = 'api_platform_example'; // string | The API provides access to two separate platforms: test and live. The test platform allows you to experiment with the API without incurring charges or affecting customer orders. The live platform allows you to make real world changes.

try {
    $result = $apiInstance->broadbandOnlineStatusUsernameGet($username, $api_platform);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BroadbandOnlineStatusApi->broadbandOnlineStatusUsernameGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **username** | **string**| Name of the user | |
| **api_platform** | **string**| The API provides access to two separate platforms: test and live. The test platform allows you to experiment with the API without incurring charges or affecting customer orders. The live platform allows you to make real world changes. | |

### Return type

[**\OpenAPI\Client\Model\BroadbandOnlineStatus**](../Model/BroadbandOnlineStatus.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
