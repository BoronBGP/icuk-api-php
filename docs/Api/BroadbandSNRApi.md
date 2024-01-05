# OpenAPI\Client\BroadbandSNRApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**broadbandInterleavingCurrentUsernameGet()**](BroadbandSNRApi.md#broadbandInterleavingCurrentUsernameGet) | **GET** /broadband/interleaving/current/{username} | Retrieves the current interleaving option. Only available for users with BT Wholesale products |
| [**broadbandInterleavingPut()**](BroadbandSNRApi.md#broadbandInterleavingPut) | **PUT** /broadband/interleaving | Updates the interleaving profile. Only available for users with BT Wholesale broadband products |
| [**broadbandProfileCurrentUsernameGet()**](BroadbandSNRApi.md#broadbandProfileCurrentUsernameGet) | **GET** /broadband/profile/current/{username} | Gets the current SNR and interleaving profile. Only available for users with TalkTalk products |
| [**broadbandProfilePut()**](BroadbandSNRApi.md#broadbandProfilePut) | **PUT** /broadband/profile | Updates SNR and interleaving profile. Only available for users with TalkTalk products |
| [**broadbandSnrLogsUsernameGet()**](BroadbandSNRApi.md#broadbandSnrLogsUsernameGet) | **GET** /broadband/snr/logs/{username} | Gets SNR logs for a user. Only available for users with BT Wholesale products |
| [**broadbandSnrUsernameGet()**](BroadbandSNRApi.md#broadbandSnrUsernameGet) | **GET** /broadband/snr/{username} | Reset the SNR of the user line. Only available for users with BT Wholesale products |


## `broadbandInterleavingCurrentUsernameGet()`

```php
broadbandInterleavingCurrentUsernameGet($username, $api_platform): \OpenAPI\Client\Model\BroadbandInterleaving
```

Retrieves the current interleaving option. Only available for users with BT Wholesale products

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BroadbandSNRApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$username = 'username_example'; // string | The user name
$api_platform = 'api_platform_example'; // string | The API provides access to two separate platforms: test and live. The test platform allows you to experiment with the API without incurring charges or affecting customer orders. The live platform allows you to make real world changes.

try {
    $result = $apiInstance->broadbandInterleavingCurrentUsernameGet($username, $api_platform);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BroadbandSNRApi->broadbandInterleavingCurrentUsernameGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **username** | **string**| The user name | |
| **api_platform** | **string**| The API provides access to two separate platforms: test and live. The test platform allows you to experiment with the API without incurring charges or affecting customer orders. The live platform allows you to make real world changes. | |

### Return type

[**\OpenAPI\Client\Model\BroadbandInterleaving**](../Model/BroadbandInterleaving.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `broadbandInterleavingPut()`

```php
broadbandInterleavingPut($api_platform, $broadband_interleaving)
```

Updates the interleaving profile. Only available for users with BT Wholesale broadband products

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BroadbandSNRApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$api_platform = 'api_platform_example'; // string | The API provides access to two separate platforms: test and live. The test platform allows you to experiment with the API without incurring charges or affecting customer orders. The live platform allows you to make real world changes.
$broadband_interleaving = new \OpenAPI\Client\Model\BroadbandInterleaving(); // \OpenAPI\Client\Model\BroadbandInterleaving | A BroadbandInterleaving structure

try {
    $apiInstance->broadbandInterleavingPut($api_platform, $broadband_interleaving);
} catch (Exception $e) {
    echo 'Exception when calling BroadbandSNRApi->broadbandInterleavingPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **api_platform** | **string**| The API provides access to two separate platforms: test and live. The test platform allows you to experiment with the API without incurring charges or affecting customer orders. The live platform allows you to make real world changes. | |
| **broadband_interleaving** | [**\OpenAPI\Client\Model\BroadbandInterleaving**](../Model/BroadbandInterleaving.md)| A BroadbandInterleaving structure | [optional] |

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

## `broadbandProfileCurrentUsernameGet()`

```php
broadbandProfileCurrentUsernameGet($username, $api_platform): \OpenAPI\Client\Model\BroadbandSnrProfile
```

Gets the current SNR and interleaving profile. Only available for users with TalkTalk products

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BroadbandSNRApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$username = 'username_example'; // string | The user name
$api_platform = 'api_platform_example'; // string | The API provides access to two separate platforms: test and live. The test platform allows you to experiment with the API without incurring charges or affecting customer orders. The live platform allows you to make real world changes.

try {
    $result = $apiInstance->broadbandProfileCurrentUsernameGet($username, $api_platform);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BroadbandSNRApi->broadbandProfileCurrentUsernameGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **username** | **string**| The user name | |
| **api_platform** | **string**| The API provides access to two separate platforms: test and live. The test platform allows you to experiment with the API without incurring charges or affecting customer orders. The live platform allows you to make real world changes. | |

### Return type

[**\OpenAPI\Client\Model\BroadbandSnrProfile**](../Model/BroadbandSnrProfile.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `broadbandProfilePut()`

```php
broadbandProfilePut($api_platform, $broadband_snr_profile): \OpenAPI\Client\Model\BroadbandSnrProfile
```

Updates SNR and interleaving profile. Only available for users with TalkTalk products

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BroadbandSNRApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$api_platform = 'api_platform_example'; // string | The API provides access to two separate platforms: test and live. The test platform allows you to experiment with the API without incurring charges or affecting customer orders. The live platform allows you to make real world changes.
$broadband_snr_profile = new \OpenAPI\Client\Model\BroadbandSnrProfile(); // \OpenAPI\Client\Model\BroadbandSnrProfile | A BroadbandSnrProfile structure

try {
    $result = $apiInstance->broadbandProfilePut($api_platform, $broadband_snr_profile);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BroadbandSNRApi->broadbandProfilePut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **api_platform** | **string**| The API provides access to two separate platforms: test and live. The test platform allows you to experiment with the API without incurring charges or affecting customer orders. The live platform allows you to make real world changes. | |
| **broadband_snr_profile** | [**\OpenAPI\Client\Model\BroadbandSnrProfile**](../Model/BroadbandSnrProfile.md)| A BroadbandSnrProfile structure | [optional] |

### Return type

[**\OpenAPI\Client\Model\BroadbandSnrProfile**](../Model/BroadbandSnrProfile.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `broadbandSnrLogsUsernameGet()`

```php
broadbandSnrLogsUsernameGet($username, $api_platform): \OpenAPI\Client\Model\BroadbandSnr[]
```

Gets SNR logs for a user. Only available for users with BT Wholesale products

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BroadbandSNRApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$username = 'username_example'; // string | The user name
$api_platform = 'api_platform_example'; // string | The API provides access to two separate platforms: test and live. The test platform allows you to experiment with the API without incurring charges or affecting customer orders. The live platform allows you to make real world changes.

try {
    $result = $apiInstance->broadbandSnrLogsUsernameGet($username, $api_platform);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BroadbandSNRApi->broadbandSnrLogsUsernameGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **username** | **string**| The user name | |
| **api_platform** | **string**| The API provides access to two separate platforms: test and live. The test platform allows you to experiment with the API without incurring charges or affecting customer orders. The live platform allows you to make real world changes. | |

### Return type

[**\OpenAPI\Client\Model\BroadbandSnr[]**](../Model/BroadbandSnr.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `broadbandSnrUsernameGet()`

```php
broadbandSnrUsernameGet($username, $api_platform): \OpenAPI\Client\Model\BroadbandSnr
```

Reset the SNR of the user line. Only available for users with BT Wholesale products

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BroadbandSNRApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$username = 'username_example'; // string | The user name
$api_platform = 'api_platform_example'; // string | The API provides access to two separate platforms: test and live. The test platform allows you to experiment with the API without incurring charges or affecting customer orders. The live platform allows you to make real world changes.

try {
    $result = $apiInstance->broadbandSnrUsernameGet($username, $api_platform);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BroadbandSNRApi->broadbandSnrUsernameGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **username** | **string**| The user name | |
| **api_platform** | **string**| The API provides access to two separate platforms: test and live. The test platform allows you to experiment with the API without incurring charges or affecting customer orders. The live platform allows you to make real world changes. | |

### Return type

[**\OpenAPI\Client\Model\BroadbandSnr**](../Model/BroadbandSnr.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
