# OpenAPI\Client\BroadbandOrderApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**broadbandOrderCeaseUsernamePost()**](BroadbandOrderApi.md#broadbandOrderCeaseUsernamePost) | **POST** /broadband/order/cease/{username} | Places a cease order for an existing broadband connection for a specific date |
| [**broadbandOrderGet()**](BroadbandOrderApi.md#broadbandOrderGet) | **GET** /broadband/order | Retrieves the broadband order summary for all users |
| [**broadbandOrderMigratePost()**](BroadbandOrderApi.md#broadbandOrderMigratePost) | **POST** /broadband/order/migrate | Orders a migration of an existing broadband connection for a telephone line or address |
| [**broadbandOrderOrderIdGet()**](BroadbandOrderApi.md#broadbandOrderOrderIdGet) | **GET** /broadband/order/{order_id} | Retrieves the broadband order details for a broadband order ID |
| [**broadbandOrderOrderTypeOrderStatusGet()**](BroadbandOrderApi.md#broadbandOrderOrderTypeOrderStatusGet) | **GET** /broadband/order/{order_type}/{order_status} | Retrieves the broadband order summary for all users for the specified order type and status |
| [**broadbandOrderProvidePost()**](BroadbandOrderApi.md#broadbandOrderProvidePost) | **POST** /broadband/order/provide | Orders a new broadband product for a telephone line or address |
| [**broadbandOrderUpdatesOrderIdStartDateEndDateGet()**](BroadbandOrderApi.md#broadbandOrderUpdatesOrderIdStartDateEndDateGet) | **GET** /broadband/order/updates/{order_id}/{start_date}/{end_date} | Retrieves a specific broadband order which has been updated within a datetime range |
| [**broadbandOrderUpdatesStartDateEndDateGet()**](BroadbandOrderApi.md#broadbandOrderUpdatesStartDateEndDateGet) | **GET** /broadband/order/updates/{start_date}/{end_date} | Retrieves the broadband orders which have been updated within a datetime range |


## `broadbandOrderCeaseUsernamePost()`

```php
broadbandOrderCeaseUsernamePost($username, $api_platform, $broadband_order_cease)
```

Places a cease order for an existing broadband connection for a specific date

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BroadbandOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$username = 'username_example'; // string | The name of the user
$api_platform = 'api_platform_example'; // string | The API provides access to two separate platforms: test and live. The test platform allows you to experiment with the API without incurring charges or affecting customer orders. The live platform allows you to make real world changes.
$broadband_order_cease = new \OpenAPI\Client\Model\BroadbandOrderCease(); // \OpenAPI\Client\Model\BroadbandOrderCease | A BroadbandOrderCease request

try {
    $apiInstance->broadbandOrderCeaseUsernamePost($username, $api_platform, $broadband_order_cease);
} catch (Exception $e) {
    echo 'Exception when calling BroadbandOrderApi->broadbandOrderCeaseUsernamePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **username** | **string**| The name of the user | |
| **api_platform** | **string**| The API provides access to two separate platforms: test and live. The test platform allows you to experiment with the API without incurring charges or affecting customer orders. The live platform allows you to make real world changes. | |
| **broadband_order_cease** | [**\OpenAPI\Client\Model\BroadbandOrderCease**](../Model/BroadbandOrderCease.md)| A BroadbandOrderCease request | [optional] |

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

## `broadbandOrderGet()`

```php
broadbandOrderGet($api_platform): \OpenAPI\Client\Model\BroadbandOrderSummaryResults
```

Retrieves the broadband order summary for all users

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BroadbandOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$api_platform = 'api_platform_example'; // string | The API provides access to two separate platforms: test and live. The test platform allows you to experiment with the API without incurring charges or affecting customer orders. The live platform allows you to make real world changes.

try {
    $result = $apiInstance->broadbandOrderGet($api_platform);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BroadbandOrderApi->broadbandOrderGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **api_platform** | **string**| The API provides access to two separate platforms: test and live. The test platform allows you to experiment with the API without incurring charges or affecting customer orders. The live platform allows you to make real world changes. | |

### Return type

[**\OpenAPI\Client\Model\BroadbandOrderSummaryResults**](../Model/BroadbandOrderSummaryResults.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `broadbandOrderMigratePost()`

```php
broadbandOrderMigratePost($api_platform, $broadband_order): \OpenAPI\Client\Model\BroadbandOrderSummary
```

Orders a migration of an existing broadband connection for a telephone line or address

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BroadbandOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$api_platform = 'api_platform_example'; // string | The API provides access to two separate platforms: test and live. The test platform allows you to experiment with the API without incurring charges or affecting customer orders. The live platform allows you to make real world changes.
$broadband_order = new \OpenAPI\Client\Model\BroadbandOrder(); // \OpenAPI\Client\Model\BroadbandOrder | A BroadbandOrder request

try {
    $result = $apiInstance->broadbandOrderMigratePost($api_platform, $broadband_order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BroadbandOrderApi->broadbandOrderMigratePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **api_platform** | **string**| The API provides access to two separate platforms: test and live. The test platform allows you to experiment with the API without incurring charges or affecting customer orders. The live platform allows you to make real world changes. | |
| **broadband_order** | [**\OpenAPI\Client\Model\BroadbandOrder**](../Model/BroadbandOrder.md)| A BroadbandOrder request | [optional] |

### Return type

[**\OpenAPI\Client\Model\BroadbandOrderSummary**](../Model/BroadbandOrderSummary.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `broadbandOrderOrderIdGet()`

```php
broadbandOrderOrderIdGet($order_id, $api_platform): \OpenAPI\Client\Model\BroadbandOrderInformation
```

Retrieves the broadband order details for a broadband order ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BroadbandOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | Order ID
$api_platform = 'api_platform_example'; // string | The API provides access to two separate platforms: test and live. The test platform allows you to experiment with the API without incurring charges or affecting customer orders. The live platform allows you to make real world changes.

try {
    $result = $apiInstance->broadbandOrderOrderIdGet($order_id, $api_platform);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BroadbandOrderApi->broadbandOrderOrderIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**| Order ID | |
| **api_platform** | **string**| The API provides access to two separate platforms: test and live. The test platform allows you to experiment with the API without incurring charges or affecting customer orders. The live platform allows you to make real world changes. | |

### Return type

[**\OpenAPI\Client\Model\BroadbandOrderInformation**](../Model/BroadbandOrderInformation.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `broadbandOrderOrderTypeOrderStatusGet()`

```php
broadbandOrderOrderTypeOrderStatusGet($order_type, $order_status, $api_platform): \OpenAPI\Client\Model\BroadbandOrderSummaryResults
```

Retrieves the broadband order summary for all users for the specified order type and status

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BroadbandOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_type = 'order_type_example'; // string | Order type
$order_status = 'order_status_example'; // string | Order status
$api_platform = 'api_platform_example'; // string | The API provides access to two separate platforms: test and live. The test platform allows you to experiment with the API without incurring charges or affecting customer orders. The live platform allows you to make real world changes.

try {
    $result = $apiInstance->broadbandOrderOrderTypeOrderStatusGet($order_type, $order_status, $api_platform);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BroadbandOrderApi->broadbandOrderOrderTypeOrderStatusGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_type** | **string**| Order type | |
| **order_status** | **string**| Order status | |
| **api_platform** | **string**| The API provides access to two separate platforms: test and live. The test platform allows you to experiment with the API without incurring charges or affecting customer orders. The live platform allows you to make real world changes. | |

### Return type

[**\OpenAPI\Client\Model\BroadbandOrderSummaryResults**](../Model/BroadbandOrderSummaryResults.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `broadbandOrderProvidePost()`

```php
broadbandOrderProvidePost($api_platform, $broadband_order): \OpenAPI\Client\Model\BroadbandOrderSummary
```

Orders a new broadband product for a telephone line or address

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BroadbandOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$api_platform = 'api_platform_example'; // string | The API provides access to two separate platforms: test and live. The test platform allows you to experiment with the API without incurring charges or affecting customer orders. The live platform allows you to make real world changes.
$broadband_order = new \OpenAPI\Client\Model\BroadbandOrder(); // \OpenAPI\Client\Model\BroadbandOrder | A BroadbandOrder request

try {
    $result = $apiInstance->broadbandOrderProvidePost($api_platform, $broadband_order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BroadbandOrderApi->broadbandOrderProvidePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **api_platform** | **string**| The API provides access to two separate platforms: test and live. The test platform allows you to experiment with the API without incurring charges or affecting customer orders. The live platform allows you to make real world changes. | |
| **broadband_order** | [**\OpenAPI\Client\Model\BroadbandOrder**](../Model/BroadbandOrder.md)| A BroadbandOrder request | [optional] |

### Return type

[**\OpenAPI\Client\Model\BroadbandOrderSummary**](../Model/BroadbandOrderSummary.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `broadbandOrderUpdatesOrderIdStartDateEndDateGet()`

```php
broadbandOrderUpdatesOrderIdStartDateEndDateGet($order_id, $start_date, $end_date, $api_platform): \OpenAPI\Client\Model\BroadbandOrderInformation
```

Retrieves a specific broadband order which has been updated within a datetime range

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BroadbandOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | Order ID
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Start date of updates
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | End date of updates
$api_platform = 'api_platform_example'; // string | The API provides access to two separate platforms: test and live. The test platform allows you to experiment with the API without incurring charges or affecting customer orders. The live platform allows you to make real world changes.

try {
    $result = $apiInstance->broadbandOrderUpdatesOrderIdStartDateEndDateGet($order_id, $start_date, $end_date, $api_platform);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BroadbandOrderApi->broadbandOrderUpdatesOrderIdStartDateEndDateGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**| Order ID | |
| **start_date** | **\DateTime**| Start date of updates | |
| **end_date** | **\DateTime**| End date of updates | |
| **api_platform** | **string**| The API provides access to two separate platforms: test and live. The test platform allows you to experiment with the API without incurring charges or affecting customer orders. The live platform allows you to make real world changes. | |

### Return type

[**\OpenAPI\Client\Model\BroadbandOrderInformation**](../Model/BroadbandOrderInformation.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `broadbandOrderUpdatesStartDateEndDateGet()`

```php
broadbandOrderUpdatesStartDateEndDateGet($start_date, $end_date, $api_platform): \OpenAPI\Client\Model\BroadbandOrderSummaryResults
```

Retrieves the broadband orders which have been updated within a datetime range

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BroadbandOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Start date
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | End date
$api_platform = 'api_platform_example'; // string | The API provides access to two separate platforms: test and live. The test platform allows you to experiment with the API without incurring charges or affecting customer orders. The live platform allows you to make real world changes.

try {
    $result = $apiInstance->broadbandOrderUpdatesStartDateEndDateGet($start_date, $end_date, $api_platform);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BroadbandOrderApi->broadbandOrderUpdatesStartDateEndDateGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **start_date** | **\DateTime**| Start date | |
| **end_date** | **\DateTime**| End date | |
| **api_platform** | **string**| The API provides access to two separate platforms: test and live. The test platform allows you to experiment with the API without incurring charges or affecting customer orders. The live platform allows you to make real world changes. | |

### Return type

[**\OpenAPI\Client\Model\BroadbandOrderSummaryResults**](../Model/BroadbandOrderSummaryResults.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
