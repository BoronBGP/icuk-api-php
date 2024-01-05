# OpenAPI\Client\BroadbandNotificationsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**broadbandNotificationsGetGet()**](BroadbandNotificationsApi.md#broadbandNotificationsGetGet) | **GET** /broadband/notifications/get | Returns all broadband notifications for the reseller |
| [**broadbandNotificationsQueryPost()**](BroadbandNotificationsApi.md#broadbandNotificationsQueryPost) | **POST** /broadband/notifications/query | Queries for broadband notifications |
| [**broadbandNotificationsUsernameAllGet()**](BroadbandNotificationsApi.md#broadbandNotificationsUsernameAllGet) | **GET** /broadband/notifications/{username}/{all} | Queries for broadband notifications for user@realm |


## `broadbandNotificationsGetGet()`

```php
broadbandNotificationsGetGet($api_platform): \OpenAPI\Client\Model\BroadbandNotificationResponse
```

Returns all broadband notifications for the reseller

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BroadbandNotificationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$api_platform = 'api_platform_example'; // string | The API provides access to two separate platforms: test and live. The test platform allows you to experiment with the API without incurring charges or affecting customer orders. The live platform allows you to make real world changes.

try {
    $result = $apiInstance->broadbandNotificationsGetGet($api_platform);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BroadbandNotificationsApi->broadbandNotificationsGetGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **api_platform** | **string**| The API provides access to two separate platforms: test and live. The test platform allows you to experiment with the API without incurring charges or affecting customer orders. The live platform allows you to make real world changes. | |

### Return type

[**\OpenAPI\Client\Model\BroadbandNotificationResponse**](../Model/BroadbandNotificationResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `broadbandNotificationsQueryPost()`

```php
broadbandNotificationsQueryPost($api_platform, $broadband_notification_request): \OpenAPI\Client\Model\BroadbandNotificationResponse
```

Queries for broadband notifications

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BroadbandNotificationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$api_platform = 'api_platform_example'; // string | The API provides access to two separate platforms: test and live. The test platform allows you to experiment with the API without incurring charges or affecting customer orders. The live platform allows you to make real world changes.
$broadband_notification_request = new \OpenAPI\Client\Model\BroadbandNotificationRequest(); // \OpenAPI\Client\Model\BroadbandNotificationRequest | A BroadbandNotificationRequest request

try {
    $result = $apiInstance->broadbandNotificationsQueryPost($api_platform, $broadband_notification_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BroadbandNotificationsApi->broadbandNotificationsQueryPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **api_platform** | **string**| The API provides access to two separate platforms: test and live. The test platform allows you to experiment with the API without incurring charges or affecting customer orders. The live platform allows you to make real world changes. | |
| **broadband_notification_request** | [**\OpenAPI\Client\Model\BroadbandNotificationRequest**](../Model/BroadbandNotificationRequest.md)| A BroadbandNotificationRequest request | [optional] |

### Return type

[**\OpenAPI\Client\Model\BroadbandNotificationResponse**](../Model/BroadbandNotificationResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `broadbandNotificationsUsernameAllGet()`

```php
broadbandNotificationsUsernameAllGet($username, $all, $api_platform): \OpenAPI\Client\Model\BroadbandNotificationResponse
```

Queries for broadband notifications for user@realm

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BroadbandNotificationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$username = 'username_example'; // string | The name of the user
$all = True; // bool | 
$api_platform = 'api_platform_example'; // string | The API provides access to two separate platforms: test and live. The test platform allows you to experiment with the API without incurring charges or affecting customer orders. The live platform allows you to make real world changes.

try {
    $result = $apiInstance->broadbandNotificationsUsernameAllGet($username, $all, $api_platform);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BroadbandNotificationsApi->broadbandNotificationsUsernameAllGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **username** | **string**| The name of the user | |
| **all** | **bool**|  | |
| **api_platform** | **string**| The API provides access to two separate platforms: test and live. The test platform allows you to experiment with the API without incurring charges or affecting customer orders. The live platform allows you to make real world changes. | |

### Return type

[**\OpenAPI\Client\Model\BroadbandNotificationResponse**](../Model/BroadbandNotificationResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
