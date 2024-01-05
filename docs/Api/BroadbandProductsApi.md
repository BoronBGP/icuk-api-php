# OpenAPI\Client\BroadbandProductsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**broadbandProductsAdslProductIdGet()**](BroadbandProductsApi.md#broadbandProductsAdslProductIdGet) | **GET** /broadband/products/adsl/{product_id} | Retrieves the reseller&#39;s broadband product details for a specific product ID |
| [**broadbandProductsCareCurrentUsernameGet()**](BroadbandProductsApi.md#broadbandProductsCareCurrentUsernameGet) | **GET** /broadband/products/care/current/{username} | Gets the current care level of the broadband product |
| [**broadbandProductsCarePut()**](BroadbandProductsApi.md#broadbandProductsCarePut) | **PUT** /broadband/products/care | Updates the care level of the broadband product |
| [**broadbandProductsGet()**](BroadbandProductsApi.md#broadbandProductsGet) | **GET** /broadband/products | Retrieves the reseller&#39;s available broadband products that can be ordered and their costs |
| [**broadbandProductsQuotaCurrentUsernameGet()**](BroadbandProductsApi.md#broadbandProductsQuotaCurrentUsernameGet) | **GET** /broadband/products/quota/current/{username} | Gets the default action to be taken in future if the account exceeds its quota |
| [**broadbandProductsQuotaPut()**](BroadbandProductsApi.md#broadbandProductsQuotaPut) | **PUT** /broadband/products/quota | Choose a default action to be taken in future if the account exceeds its quota |
| [**broadbandProductsSpeedCurrentUsernameGet()**](BroadbandProductsApi.md#broadbandProductsSpeedCurrentUsernameGet) | **GET** /broadband/products/speed/current/{username} | Gets the current speed limit of a broadband product |
| [**broadbandProductsSpeedPut()**](BroadbandProductsApi.md#broadbandProductsSpeedPut) | **PUT** /broadband/products/speed | Adjust the speed limit for this connection |


## `broadbandProductsAdslProductIdGet()`

```php
broadbandProductsAdslProductIdGet($product_id, $api_platform): \OpenAPI\Client\Model\BroadbandProduct
```

Retrieves the reseller's broadband product details for a specific product ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BroadbandProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_id = 56; // int | 
$api_platform = 'api_platform_example'; // string | The API provides access to two separate platforms: test and live. The test platform allows you to experiment with the API without incurring charges or affecting customer orders. The live platform allows you to make real world changes.

try {
    $result = $apiInstance->broadbandProductsAdslProductIdGet($product_id, $api_platform);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BroadbandProductsApi->broadbandProductsAdslProductIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product_id** | **int**|  | |
| **api_platform** | **string**| The API provides access to two separate platforms: test and live. The test platform allows you to experiment with the API without incurring charges or affecting customer orders. The live platform allows you to make real world changes. | |

### Return type

[**\OpenAPI\Client\Model\BroadbandProduct**](../Model/BroadbandProduct.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `broadbandProductsCareCurrentUsernameGet()`

```php
broadbandProductsCareCurrentUsernameGet($username, $api_platform): string
```

Gets the current care level of the broadband product

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BroadbandProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$username = 'username_example'; // string | 
$api_platform = 'api_platform_example'; // string | The API provides access to two separate platforms: test and live. The test platform allows you to experiment with the API without incurring charges or affecting customer orders. The live platform allows you to make real world changes.

try {
    $result = $apiInstance->broadbandProductsCareCurrentUsernameGet($username, $api_platform);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BroadbandProductsApi->broadbandProductsCareCurrentUsernameGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **username** | **string**|  | |
| **api_platform** | **string**| The API provides access to two separate platforms: test and live. The test platform allows you to experiment with the API without incurring charges or affecting customer orders. The live platform allows you to make real world changes. | |

### Return type

**string**

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `broadbandProductsCarePut()`

```php
broadbandProductsCarePut($api_platform, $broadband_care)
```

Updates the care level of the broadband product

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BroadbandProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$api_platform = 'api_platform_example'; // string | The API provides access to two separate platforms: test and live. The test platform allows you to experiment with the API without incurring charges or affecting customer orders. The live platform allows you to make real world changes.
$broadband_care = new \OpenAPI\Client\Model\BroadbandCare(); // \OpenAPI\Client\Model\BroadbandCare | 

try {
    $apiInstance->broadbandProductsCarePut($api_platform, $broadband_care);
} catch (Exception $e) {
    echo 'Exception when calling BroadbandProductsApi->broadbandProductsCarePut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **api_platform** | **string**| The API provides access to two separate platforms: test and live. The test platform allows you to experiment with the API without incurring charges or affecting customer orders. The live platform allows you to make real world changes. | |
| **broadband_care** | [**\OpenAPI\Client\Model\BroadbandCare**](../Model/BroadbandCare.md)|  | [optional] |

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

## `broadbandProductsGet()`

```php
broadbandProductsGet($api_platform): \OpenAPI\Client\Model\BroadbandProductResults
```

Retrieves the reseller's available broadband products that can be ordered and their costs

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BroadbandProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$api_platform = 'api_platform_example'; // string | The API provides access to two separate platforms: test and live. The test platform allows you to experiment with the API without incurring charges or affecting customer orders. The live platform allows you to make real world changes.

try {
    $result = $apiInstance->broadbandProductsGet($api_platform);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BroadbandProductsApi->broadbandProductsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **api_platform** | **string**| The API provides access to two separate platforms: test and live. The test platform allows you to experiment with the API without incurring charges or affecting customer orders. The live platform allows you to make real world changes. | |

### Return type

[**\OpenAPI\Client\Model\BroadbandProductResults**](../Model/BroadbandProductResults.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `broadbandProductsQuotaCurrentUsernameGet()`

```php
broadbandProductsQuotaCurrentUsernameGet($username, $api_platform): string
```

Gets the default action to be taken in future if the account exceeds its quota

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BroadbandProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$username = 'username_example'; // string | 
$api_platform = 'api_platform_example'; // string | The API provides access to two separate platforms: test and live. The test platform allows you to experiment with the API without incurring charges or affecting customer orders. The live platform allows you to make real world changes.

try {
    $result = $apiInstance->broadbandProductsQuotaCurrentUsernameGet($username, $api_platform);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BroadbandProductsApi->broadbandProductsQuotaCurrentUsernameGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **username** | **string**|  | |
| **api_platform** | **string**| The API provides access to two separate platforms: test and live. The test platform allows you to experiment with the API without incurring charges or affecting customer orders. The live platform allows you to make real world changes. | |

### Return type

**string**

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `broadbandProductsQuotaPut()`

```php
broadbandProductsQuotaPut($api_platform, $broadband_quota)
```

Choose a default action to be taken in future if the account exceeds its quota

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BroadbandProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$api_platform = 'api_platform_example'; // string | The API provides access to two separate platforms: test and live. The test platform allows you to experiment with the API without incurring charges or affecting customer orders. The live platform allows you to make real world changes.
$broadband_quota = new \OpenAPI\Client\Model\BroadbandQuota(); // \OpenAPI\Client\Model\BroadbandQuota | 

try {
    $apiInstance->broadbandProductsQuotaPut($api_platform, $broadband_quota);
} catch (Exception $e) {
    echo 'Exception when calling BroadbandProductsApi->broadbandProductsQuotaPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **api_platform** | **string**| The API provides access to two separate platforms: test and live. The test platform allows you to experiment with the API without incurring charges or affecting customer orders. The live platform allows you to make real world changes. | |
| **broadband_quota** | [**\OpenAPI\Client\Model\BroadbandQuota**](../Model/BroadbandQuota.md)|  | [optional] |

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

## `broadbandProductsSpeedCurrentUsernameGet()`

```php
broadbandProductsSpeedCurrentUsernameGet($username, $api_platform): \OpenAPI\Client\Model\BroadbandSpeedLimit
```

Gets the current speed limit of a broadband product

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BroadbandProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$username = 'username_example'; // string | 
$api_platform = 'api_platform_example'; // string | The API provides access to two separate platforms: test and live. The test platform allows you to experiment with the API without incurring charges or affecting customer orders. The live platform allows you to make real world changes.

try {
    $result = $apiInstance->broadbandProductsSpeedCurrentUsernameGet($username, $api_platform);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BroadbandProductsApi->broadbandProductsSpeedCurrentUsernameGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **username** | **string**|  | |
| **api_platform** | **string**| The API provides access to two separate platforms: test and live. The test platform allows you to experiment with the API without incurring charges or affecting customer orders. The live platform allows you to make real world changes. | |

### Return type

[**\OpenAPI\Client\Model\BroadbandSpeedLimit**](../Model/BroadbandSpeedLimit.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `broadbandProductsSpeedPut()`

```php
broadbandProductsSpeedPut($api_platform, $broadband_speed_limit)
```

Adjust the speed limit for this connection

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BroadbandProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$api_platform = 'api_platform_example'; // string | The API provides access to two separate platforms: test and live. The test platform allows you to experiment with the API without incurring charges or affecting customer orders. The live platform allows you to make real world changes.
$broadband_speed_limit = new \OpenAPI\Client\Model\BroadbandSpeedLimit(); // \OpenAPI\Client\Model\BroadbandSpeedLimit | 

try {
    $apiInstance->broadbandProductsSpeedPut($api_platform, $broadband_speed_limit);
} catch (Exception $e) {
    echo 'Exception when calling BroadbandProductsApi->broadbandProductsSpeedPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **api_platform** | **string**| The API provides access to two separate platforms: test and live. The test platform allows you to experiment with the API without incurring charges or affecting customer orders. The live platform allows you to make real world changes. | |
| **broadband_speed_limit** | [**\OpenAPI\Client\Model\BroadbandSpeedLimit**](../Model/BroadbandSpeedLimit.md)|  | [optional] |

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
