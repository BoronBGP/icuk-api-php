# OpenAPI\Client\BroadbandUserApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**broadbandUserGet()**](BroadbandUserApi.md#broadbandUserGet) | **GET** /broadband/user | Retrieves all the broadband users belonging to the API user |
| [**broadbandUserPasswordUsernamePut()**](BroadbandUserApi.md#broadbandUserPasswordUsernamePut) | **PUT** /broadband/user/password/{username} | Updates password of a broadband user |
| [**broadbandUserUsernameDelete()**](BroadbandUserApi.md#broadbandUserUsernameDelete) | **DELETE** /broadband/user/{username} | Deletes a broadband user belonging to the API user |
| [**broadbandUserUsernameGet()**](BroadbandUserApi.md#broadbandUserUsernameGet) | **GET** /broadband/user/{username} | Retrieves a broadband user belonging to the API user |


## `broadbandUserGet()`

```php
broadbandUserGet($api_platform): \OpenAPI\Client\Model\BroadbandUserResults
```

Retrieves all the broadband users belonging to the API user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BroadbandUserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$api_platform = 'api_platform_example'; // string | The API provides access to two separate platforms: test and live. The test platform allows you to experiment with the API without incurring charges or affecting customer orders. The live platform allows you to make real world changes.

try {
    $result = $apiInstance->broadbandUserGet($api_platform);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BroadbandUserApi->broadbandUserGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **api_platform** | **string**| The API provides access to two separate platforms: test and live. The test platform allows you to experiment with the API without incurring charges or affecting customer orders. The live platform allows you to make real world changes. | |

### Return type

[**\OpenAPI\Client\Model\BroadbandUserResults**](../Model/BroadbandUserResults.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `broadbandUserPasswordUsernamePut()`

```php
broadbandUserPasswordUsernamePut($username, $api_platform, $broadband_user_password)
```

Updates password of a broadband user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BroadbandUserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$username = 'username_example'; // string | The name of the user
$api_platform = 'api_platform_example'; // string | The API provides access to two separate platforms: test and live. The test platform allows you to experiment with the API without incurring charges or affecting customer orders. The live platform allows you to make real world changes.
$broadband_user_password = new \OpenAPI\Client\Model\BroadbandUserPassword(); // \OpenAPI\Client\Model\BroadbandUserPassword | A BroadbandUserPassword structure

try {
    $apiInstance->broadbandUserPasswordUsernamePut($username, $api_platform, $broadband_user_password);
} catch (Exception $e) {
    echo 'Exception when calling BroadbandUserApi->broadbandUserPasswordUsernamePut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **username** | **string**| The name of the user | |
| **api_platform** | **string**| The API provides access to two separate platforms: test and live. The test platform allows you to experiment with the API without incurring charges or affecting customer orders. The live platform allows you to make real world changes. | |
| **broadband_user_password** | [**\OpenAPI\Client\Model\BroadbandUserPassword**](../Model/BroadbandUserPassword.md)| A BroadbandUserPassword structure | [optional] |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `broadbandUserUsernameDelete()`

```php
broadbandUserUsernameDelete($username, $api_platform)
```

Deletes a broadband user belonging to the API user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BroadbandUserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$username = 'username_example'; // string | Name of the user
$api_platform = 'api_platform_example'; // string | The API provides access to two separate platforms: test and live. The test platform allows you to experiment with the API without incurring charges or affecting customer orders. The live platform allows you to make real world changes.

try {
    $apiInstance->broadbandUserUsernameDelete($username, $api_platform);
} catch (Exception $e) {
    echo 'Exception when calling BroadbandUserApi->broadbandUserUsernameDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **username** | **string**| Name of the user | |
| **api_platform** | **string**| The API provides access to two separate platforms: test and live. The test platform allows you to experiment with the API without incurring charges or affecting customer orders. The live platform allows you to make real world changes. | |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `broadbandUserUsernameGet()`

```php
broadbandUserUsernameGet($username, $api_platform): \OpenAPI\Client\Model\BroadbandUser
```

Retrieves a broadband user belonging to the API user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BroadbandUserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$username = 'username_example'; // string | Name of the user
$api_platform = 'api_platform_example'; // string | The API provides access to two separate platforms: test and live. The test platform allows you to experiment with the API without incurring charges or affecting customer orders. The live platform allows you to make real world changes.

try {
    $result = $apiInstance->broadbandUserUsernameGet($username, $api_platform);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BroadbandUserApi->broadbandUserUsernameGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **username** | **string**| Name of the user | |
| **api_platform** | **string**| The API provides access to two separate platforms: test and live. The test platform allows you to experiment with the API without incurring charges or affecting customer orders. The live platform allows you to make real world changes. | |

### Return type

[**\OpenAPI\Client\Model\BroadbandUser**](../Model/BroadbandUser.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
