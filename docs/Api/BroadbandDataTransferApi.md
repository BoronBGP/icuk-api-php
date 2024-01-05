# OpenAPI\Client\BroadbandDataTransferApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**broadbandDataTransferDailyUsernameGet()**](BroadbandDataTransferApi.md#broadbandDataTransferDailyUsernameGet) | **GET** /broadband/data_transfer/daily/{username} | Retrieves the daily data transfer usage for a broadband user for the current month |
| [**broadbandDataTransferDailyUsernameYearMonthGet()**](BroadbandDataTransferApi.md#broadbandDataTransferDailyUsernameYearMonthGet) | **GET** /broadband/data_transfer/daily/{username}/{year}/{month} | Retrieves the daily data transfer usage for a broadband user for the specified month and year |
| [**broadbandDataTransferHourlyUsernameGet()**](BroadbandDataTransferApi.md#broadbandDataTransferHourlyUsernameGet) | **GET** /broadband/data_transfer/hourly/{username} | Retrieves the hourly data transfer usage for a broadband user for the current day |
| [**broadbandDataTransferHourlyUsernameYearMonthDayGet()**](BroadbandDataTransferApi.md#broadbandDataTransferHourlyUsernameYearMonthDayGet) | **GET** /broadband/data_transfer/hourly/{username}/{year}/{month}/{day} | Retrieves the hourly data transfer usage for a broadband user for the specified day, month and year |
| [**broadbandDataTransferMonthlyGet()**](BroadbandDataTransferApi.md#broadbandDataTransferMonthlyGet) | **GET** /broadband/data_transfer/monthly | Retrieves the monthly data transfer usage for all users for the current month |
| [**broadbandDataTransferMonthlyUsernameGet()**](BroadbandDataTransferApi.md#broadbandDataTransferMonthlyUsernameGet) | **GET** /broadband/data_transfer/monthly/{username} | Retrieves the monthly data transfer usage for a broadband user for the current month |
| [**broadbandDataTransferMonthlyUsernameYearMonthGet()**](BroadbandDataTransferApi.md#broadbandDataTransferMonthlyUsernameYearMonthGet) | **GET** /broadband/data_transfer/monthly/{username}/{year}/{month} | Retrieves the monthly data transfer usage for a broadband user for the specified month and year |
| [**broadbandDataTransferMonthlyYearMonthGet()**](BroadbandDataTransferApi.md#broadbandDataTransferMonthlyYearMonthGet) | **GET** /broadband/data_transfer/monthly/{year}/{month} | Retrieves the monthly data transfer usage for all users for the specified month and year |


## `broadbandDataTransferDailyUsernameGet()`

```php
broadbandDataTransferDailyUsernameGet($username, $api_platform): \OpenAPI\Client\Model\BroadbandDataTransferDailyResult
```

Retrieves the daily data transfer usage for a broadband user for the current month

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BroadbandDataTransferApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$username = 'username_example'; // string | The name of the user
$api_platform = 'api_platform_example'; // string | The API provides access to two separate platforms: test and live. The test platform allows you to experiment with the API without incurring charges or affecting customer orders. The live platform allows you to make real world changes.

try {
    $result = $apiInstance->broadbandDataTransferDailyUsernameGet($username, $api_platform);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BroadbandDataTransferApi->broadbandDataTransferDailyUsernameGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **username** | **string**| The name of the user | |
| **api_platform** | **string**| The API provides access to two separate platforms: test and live. The test platform allows you to experiment with the API without incurring charges or affecting customer orders. The live platform allows you to make real world changes. | |

### Return type

[**\OpenAPI\Client\Model\BroadbandDataTransferDailyResult**](../Model/BroadbandDataTransferDailyResult.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `broadbandDataTransferDailyUsernameYearMonthGet()`

```php
broadbandDataTransferDailyUsernameYearMonthGet($username, $year, $month, $api_platform): \OpenAPI\Client\Model\BroadbandDataTransferDailyResult
```

Retrieves the daily data transfer usage for a broadband user for the specified month and year

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BroadbandDataTransferApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$username = 'username_example'; // string | Name of the user
$year = 56; // int | Year
$month = 56; // int | Month
$api_platform = 'api_platform_example'; // string | The API provides access to two separate platforms: test and live. The test platform allows you to experiment with the API without incurring charges or affecting customer orders. The live platform allows you to make real world changes.

try {
    $result = $apiInstance->broadbandDataTransferDailyUsernameYearMonthGet($username, $year, $month, $api_platform);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BroadbandDataTransferApi->broadbandDataTransferDailyUsernameYearMonthGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **username** | **string**| Name of the user | |
| **year** | **int**| Year | |
| **month** | **int**| Month | |
| **api_platform** | **string**| The API provides access to two separate platforms: test and live. The test platform allows you to experiment with the API without incurring charges or affecting customer orders. The live platform allows you to make real world changes. | |

### Return type

[**\OpenAPI\Client\Model\BroadbandDataTransferDailyResult**](../Model/BroadbandDataTransferDailyResult.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `broadbandDataTransferHourlyUsernameGet()`

```php
broadbandDataTransferHourlyUsernameGet($username, $api_platform): \OpenAPI\Client\Model\BroadbandDataTransferHourlyResult
```

Retrieves the hourly data transfer usage for a broadband user for the current day

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BroadbandDataTransferApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$username = 'username_example'; // string | Name of the user
$api_platform = 'api_platform_example'; // string | The API provides access to two separate platforms: test and live. The test platform allows you to experiment with the API without incurring charges or affecting customer orders. The live platform allows you to make real world changes.

try {
    $result = $apiInstance->broadbandDataTransferHourlyUsernameGet($username, $api_platform);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BroadbandDataTransferApi->broadbandDataTransferHourlyUsernameGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **username** | **string**| Name of the user | |
| **api_platform** | **string**| The API provides access to two separate platforms: test and live. The test platform allows you to experiment with the API without incurring charges or affecting customer orders. The live platform allows you to make real world changes. | |

### Return type

[**\OpenAPI\Client\Model\BroadbandDataTransferHourlyResult**](../Model/BroadbandDataTransferHourlyResult.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `broadbandDataTransferHourlyUsernameYearMonthDayGet()`

```php
broadbandDataTransferHourlyUsernameYearMonthDayGet($username, $year, $month, $day, $api_platform): \OpenAPI\Client\Model\BroadbandDataTransferHourlyResult
```

Retrieves the hourly data transfer usage for a broadband user for the specified day, month and year

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BroadbandDataTransferApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$username = 'username_example'; // string | Name of the user
$year = 56; // int | Year
$month = 56; // int | Month
$day = 56; // int | Day
$api_platform = 'api_platform_example'; // string | The API provides access to two separate platforms: test and live. The test platform allows you to experiment with the API without incurring charges or affecting customer orders. The live platform allows you to make real world changes.

try {
    $result = $apiInstance->broadbandDataTransferHourlyUsernameYearMonthDayGet($username, $year, $month, $day, $api_platform);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BroadbandDataTransferApi->broadbandDataTransferHourlyUsernameYearMonthDayGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **username** | **string**| Name of the user | |
| **year** | **int**| Year | |
| **month** | **int**| Month | |
| **day** | **int**| Day | |
| **api_platform** | **string**| The API provides access to two separate platforms: test and live. The test platform allows you to experiment with the API without incurring charges or affecting customer orders. The live platform allows you to make real world changes. | |

### Return type

[**\OpenAPI\Client\Model\BroadbandDataTransferHourlyResult**](../Model/BroadbandDataTransferHourlyResult.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `broadbandDataTransferMonthlyGet()`

```php
broadbandDataTransferMonthlyGet($api_platform): \OpenAPI\Client\Model\BroadbandDataTransferMonthlyResults
```

Retrieves the monthly data transfer usage for all users for the current month

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BroadbandDataTransferApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$api_platform = 'api_platform_example'; // string | The API provides access to two separate platforms: test and live. The test platform allows you to experiment with the API without incurring charges or affecting customer orders. The live platform allows you to make real world changes.

try {
    $result = $apiInstance->broadbandDataTransferMonthlyGet($api_platform);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BroadbandDataTransferApi->broadbandDataTransferMonthlyGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **api_platform** | **string**| The API provides access to two separate platforms: test and live. The test platform allows you to experiment with the API without incurring charges or affecting customer orders. The live platform allows you to make real world changes. | |

### Return type

[**\OpenAPI\Client\Model\BroadbandDataTransferMonthlyResults**](../Model/BroadbandDataTransferMonthlyResults.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `broadbandDataTransferMonthlyUsernameGet()`

```php
broadbandDataTransferMonthlyUsernameGet($username, $api_platform): \OpenAPI\Client\Model\BroadbandDataTransferMonthlyResults
```

Retrieves the monthly data transfer usage for a broadband user for the current month

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BroadbandDataTransferApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$username = 'username_example'; // string | Name of the user
$api_platform = 'api_platform_example'; // string | The API provides access to two separate platforms: test and live. The test platform allows you to experiment with the API without incurring charges or affecting customer orders. The live platform allows you to make real world changes.

try {
    $result = $apiInstance->broadbandDataTransferMonthlyUsernameGet($username, $api_platform);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BroadbandDataTransferApi->broadbandDataTransferMonthlyUsernameGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **username** | **string**| Name of the user | |
| **api_platform** | **string**| The API provides access to two separate platforms: test and live. The test platform allows you to experiment with the API without incurring charges or affecting customer orders. The live platform allows you to make real world changes. | |

### Return type

[**\OpenAPI\Client\Model\BroadbandDataTransferMonthlyResults**](../Model/BroadbandDataTransferMonthlyResults.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `broadbandDataTransferMonthlyUsernameYearMonthGet()`

```php
broadbandDataTransferMonthlyUsernameYearMonthGet($username, $year, $month, $api_platform): \OpenAPI\Client\Model\BroadbandDataTransferMonthlyResults
```

Retrieves the monthly data transfer usage for a broadband user for the specified month and year

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BroadbandDataTransferApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$username = 'username_example'; // string | Name of the user
$year = 56; // int | Year
$month = 56; // int | Month
$api_platform = 'api_platform_example'; // string | The API provides access to two separate platforms: test and live. The test platform allows you to experiment with the API without incurring charges or affecting customer orders. The live platform allows you to make real world changes.

try {
    $result = $apiInstance->broadbandDataTransferMonthlyUsernameYearMonthGet($username, $year, $month, $api_platform);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BroadbandDataTransferApi->broadbandDataTransferMonthlyUsernameYearMonthGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **username** | **string**| Name of the user | |
| **year** | **int**| Year | |
| **month** | **int**| Month | |
| **api_platform** | **string**| The API provides access to two separate platforms: test and live. The test platform allows you to experiment with the API without incurring charges or affecting customer orders. The live platform allows you to make real world changes. | |

### Return type

[**\OpenAPI\Client\Model\BroadbandDataTransferMonthlyResults**](../Model/BroadbandDataTransferMonthlyResults.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `broadbandDataTransferMonthlyYearMonthGet()`

```php
broadbandDataTransferMonthlyYearMonthGet($year, $month, $api_platform): \OpenAPI\Client\Model\BroadbandDataTransferMonthlyResults
```

Retrieves the monthly data transfer usage for all users for the specified month and year

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BroadbandDataTransferApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$year = 56; // int | Year
$month = 56; // int | Month
$api_platform = 'api_platform_example'; // string | The API provides access to two separate platforms: test and live. The test platform allows you to experiment with the API without incurring charges or affecting customer orders. The live platform allows you to make real world changes.

try {
    $result = $apiInstance->broadbandDataTransferMonthlyYearMonthGet($year, $month, $api_platform);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BroadbandDataTransferApi->broadbandDataTransferMonthlyYearMonthGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **year** | **int**| Year | |
| **month** | **int**| Month | |
| **api_platform** | **string**| The API provides access to two separate platforms: test and live. The test platform allows you to experiment with the API without incurring charges or affecting customer orders. The live platform allows you to make real world changes. | |

### Return type

[**\OpenAPI\Client\Model\BroadbandDataTransferMonthlyResults**](../Model/BroadbandDataTransferMonthlyResults.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
