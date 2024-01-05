# OpenAPI\Client\BroadbandContactDetailsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**broadbandUserContactUsernameGet()**](BroadbandContactDetailsApi.md#broadbandUserContactUsernameGet) | **GET** /broadband/user/contact/{username} | Retrieves the contact details for a broadband user |
| [**broadbandUserContactUsernamePut()**](BroadbandContactDetailsApi.md#broadbandUserContactUsernamePut) | **PUT** /broadband/user/contact/username | Changes a broadband users contact |


## `broadbandUserContactUsernameGet()`

```php
broadbandUserContactUsernameGet($username, $api_platform): \OpenAPI\Client\Model\BroadbandUserContact
```

Retrieves the contact details for a broadband user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BroadbandContactDetailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$username = 'username_example'; // string | Name of the user
$api_platform = 'api_platform_example'; // string | The API provides access to two separate platforms: test and live. The test platform allows you to experiment with the API without incurring charges or affecting customer orders. The live platform allows you to make real world changes.

try {
    $result = $apiInstance->broadbandUserContactUsernameGet($username, $api_platform);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BroadbandContactDetailsApi->broadbandUserContactUsernameGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **username** | **string**| Name of the user | |
| **api_platform** | **string**| The API provides access to two separate platforms: test and live. The test platform allows you to experiment with the API without incurring charges or affecting customer orders. The live platform allows you to make real world changes. | |

### Return type

[**\OpenAPI\Client\Model\BroadbandUserContact**](../Model/BroadbandUserContact.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `broadbandUserContactUsernamePut()`

```php
broadbandUserContactUsernamePut($api_platform, $username, $broadband_user_contact)
```

Changes a broadband users contact

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BroadbandContactDetailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$api_platform = 'api_platform_example'; // string | The API provides access to two separate platforms: test and live. The test platform allows you to experiment with the API without incurring charges or affecting customer orders. The live platform allows you to make real world changes.
$username = 'username_example'; // string | Name of the user
$broadband_user_contact = new \OpenAPI\Client\Model\BroadbandUserContact(); // \OpenAPI\Client\Model\BroadbandUserContact | BroadbandUserContact struct

try {
    $apiInstance->broadbandUserContactUsernamePut($api_platform, $username, $broadband_user_contact);
} catch (Exception $e) {
    echo 'Exception when calling BroadbandContactDetailsApi->broadbandUserContactUsernamePut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **api_platform** | **string**| The API provides access to two separate platforms: test and live. The test platform allows you to experiment with the API without incurring charges or affecting customer orders. The live platform allows you to make real world changes. | |
| **username** | **string**| Name of the user | [optional] |
| **broadband_user_contact** | [**\OpenAPI\Client\Model\BroadbandUserContact**](../Model/BroadbandUserContact.md)| BroadbandUserContact struct | [optional] |

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
