# OpenAPI\Client\BroadbandRIPEApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**broadbandRipePersonGet()**](BroadbandRIPEApi.md#broadbandRipePersonGet) | **GET** /broadband/ripe/person | Retrieves the RIPE person contacts that have been created for broadband accounts assigned to the reseller |
| [**broadbandRipePersonPost()**](BroadbandRIPEApi.md#broadbandRipePersonPost) | **POST** /broadband/ripe/person | Creates a RIPE person contact assigned to the reseller |
| [**broadbandRipePersonRipeNicHandleDelete()**](BroadbandRIPEApi.md#broadbandRipePersonRipeNicHandleDelete) | **DELETE** /broadband/ripe/person/{ripe_nic_handle} | Deletes the RIPE person contact details for a nic-handle |
| [**broadbandRipePersonRipeNicHandleGet()**](BroadbandRIPEApi.md#broadbandRipePersonRipeNicHandleGet) | **GET** /broadband/ripe/person/{ripe_nic_handle} | Retrieves a RIPE person contact for a specific nic-handle that has been created for a broadband account assigned to the reseller |
| [**broadbandRipePersonRipeNicHandlePut()**](BroadbandRIPEApi.md#broadbandRipePersonRipeNicHandlePut) | **PUT** /broadband/ripe/person/{ripe_nic_handle} | Changes the RIPE person contact details for a nic-handle |


## `broadbandRipePersonGet()`

```php
broadbandRipePersonGet($api_platform): \OpenAPI\Client\Model\BroadbandRipePersonResults
```

Retrieves the RIPE person contacts that have been created for broadband accounts assigned to the reseller

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BroadbandRIPEApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$api_platform = 'api_platform_example'; // string | The API provides access to two separate platforms: test and live. The test platform allows you to experiment with the API without incurring charges or affecting customer orders. The live platform allows you to make real world changes.

try {
    $result = $apiInstance->broadbandRipePersonGet($api_platform);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BroadbandRIPEApi->broadbandRipePersonGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **api_platform** | **string**| The API provides access to two separate platforms: test and live. The test platform allows you to experiment with the API without incurring charges or affecting customer orders. The live platform allows you to make real world changes. | |

### Return type

[**\OpenAPI\Client\Model\BroadbandRipePersonResults**](../Model/BroadbandRipePersonResults.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `broadbandRipePersonPost()`

```php
broadbandRipePersonPost($api_platform, $broadband_ripe_person): \OpenAPI\Client\Model\BroadbandRipePerson
```

Creates a RIPE person contact assigned to the reseller

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BroadbandRIPEApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$api_platform = 'api_platform_example'; // string | The API provides access to two separate platforms: test and live. The test platform allows you to experiment with the API without incurring charges or affecting customer orders. The live platform allows you to make real world changes.
$broadband_ripe_person = new \OpenAPI\Client\Model\BroadbandRipePerson(); // \OpenAPI\Client\Model\BroadbandRipePerson | 

try {
    $result = $apiInstance->broadbandRipePersonPost($api_platform, $broadband_ripe_person);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BroadbandRIPEApi->broadbandRipePersonPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **api_platform** | **string**| The API provides access to two separate platforms: test and live. The test platform allows you to experiment with the API without incurring charges or affecting customer orders. The live platform allows you to make real world changes. | |
| **broadband_ripe_person** | [**\OpenAPI\Client\Model\BroadbandRipePerson**](../Model/BroadbandRipePerson.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\BroadbandRipePerson**](../Model/BroadbandRipePerson.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `broadbandRipePersonRipeNicHandleDelete()`

```php
broadbandRipePersonRipeNicHandleDelete($ripe_nic_handle, $api_platform)
```

Deletes the RIPE person contact details for a nic-handle

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BroadbandRIPEApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ripe_nic_handle = 'ripe_nic_handle_example'; // string | 
$api_platform = 'api_platform_example'; // string | The API provides access to two separate platforms: test and live. The test platform allows you to experiment with the API without incurring charges or affecting customer orders. The live platform allows you to make real world changes.

try {
    $apiInstance->broadbandRipePersonRipeNicHandleDelete($ripe_nic_handle, $api_platform);
} catch (Exception $e) {
    echo 'Exception when calling BroadbandRIPEApi->broadbandRipePersonRipeNicHandleDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ripe_nic_handle** | **string**|  | |
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

## `broadbandRipePersonRipeNicHandleGet()`

```php
broadbandRipePersonRipeNicHandleGet($ripe_nic_handle, $api_platform): \OpenAPI\Client\Model\BroadbandRipePerson
```

Retrieves a RIPE person contact for a specific nic-handle that has been created for a broadband account assigned to the reseller

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BroadbandRIPEApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ripe_nic_handle = 'ripe_nic_handle_example'; // string | 
$api_platform = 'api_platform_example'; // string | The API provides access to two separate platforms: test and live. The test platform allows you to experiment with the API without incurring charges or affecting customer orders. The live platform allows you to make real world changes.

try {
    $result = $apiInstance->broadbandRipePersonRipeNicHandleGet($ripe_nic_handle, $api_platform);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BroadbandRIPEApi->broadbandRipePersonRipeNicHandleGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ripe_nic_handle** | **string**|  | |
| **api_platform** | **string**| The API provides access to two separate platforms: test and live. The test platform allows you to experiment with the API without incurring charges or affecting customer orders. The live platform allows you to make real world changes. | |

### Return type

[**\OpenAPI\Client\Model\BroadbandRipePerson**](../Model/BroadbandRipePerson.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `broadbandRipePersonRipeNicHandlePut()`

```php
broadbandRipePersonRipeNicHandlePut($ripe_nic_handle, $api_platform, $broadband_ripe_person)
```

Changes the RIPE person contact details for a nic-handle

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BroadbandRIPEApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ripe_nic_handle = 'ripe_nic_handle_example'; // string | 
$api_platform = 'api_platform_example'; // string | The API provides access to two separate platforms: test and live. The test platform allows you to experiment with the API without incurring charges or affecting customer orders. The live platform allows you to make real world changes.
$broadband_ripe_person = new \OpenAPI\Client\Model\BroadbandRipePerson(); // \OpenAPI\Client\Model\BroadbandRipePerson | 

try {
    $apiInstance->broadbandRipePersonRipeNicHandlePut($ripe_nic_handle, $api_platform, $broadband_ripe_person);
} catch (Exception $e) {
    echo 'Exception when calling BroadbandRIPEApi->broadbandRipePersonRipeNicHandlePut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ripe_nic_handle** | **string**|  | |
| **api_platform** | **string**| The API provides access to two separate platforms: test and live. The test platform allows you to experiment with the API without incurring charges or affecting customer orders. The live platform allows you to make real world changes. | |
| **broadband_ripe_person** | [**\OpenAPI\Client\Model\BroadbandRipePerson**](../Model/BroadbandRipePerson.md)|  | [optional] |

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
