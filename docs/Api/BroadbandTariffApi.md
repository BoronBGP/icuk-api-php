# OpenAPI\Client\BroadbandTariffApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**broadbandTariffDeleteTariffIdDelete()**](BroadbandTariffApi.md#broadbandTariffDeleteTariffIdDelete) | **DELETE** /broadband/tariff/delete/{tariff_id} | Deletes a broadband tariff |
| [**broadbandTariffGet()**](BroadbandTariffApi.md#broadbandTariffGet) | **GET** /broadband/tariff | Retrieves the broadband tariffs |
| [**broadbandTariffNewPost()**](BroadbandTariffApi.md#broadbandTariffNewPost) | **POST** /broadband/tariff/new | Creates a new broadband tariff |


## `broadbandTariffDeleteTariffIdDelete()`

```php
broadbandTariffDeleteTariffIdDelete($tariff_id, $api_platform)
```

Deletes a broadband tariff

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BroadbandTariffApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tariff_id = 56; // int | The unique ID of the tariff
$api_platform = 'api_platform_example'; // string | The API provides access to two separate platforms: test and live. The test platform allows you to experiment with the API without incurring charges or affecting customer orders. The live platform allows you to make real world changes.

try {
    $apiInstance->broadbandTariffDeleteTariffIdDelete($tariff_id, $api_platform);
} catch (Exception $e) {
    echo 'Exception when calling BroadbandTariffApi->broadbandTariffDeleteTariffIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tariff_id** | **int**| The unique ID of the tariff | |
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

## `broadbandTariffGet()`

```php
broadbandTariffGet($api_platform): \OpenAPI\Client\Model\BroadbandTariffDetails[]
```

Retrieves the broadband tariffs

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BroadbandTariffApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$api_platform = 'api_platform_example'; // string | The API provides access to two separate platforms: test and live. The test platform allows you to experiment with the API without incurring charges or affecting customer orders. The live platform allows you to make real world changes.

try {
    $result = $apiInstance->broadbandTariffGet($api_platform);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BroadbandTariffApi->broadbandTariffGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **api_platform** | **string**| The API provides access to two separate platforms: test and live. The test platform allows you to experiment with the API without incurring charges or affecting customer orders. The live platform allows you to make real world changes. | |

### Return type

[**\OpenAPI\Client\Model\BroadbandTariffDetails[]**](../Model/BroadbandTariffDetails.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `broadbandTariffNewPost()`

```php
broadbandTariffNewPost($api_platform, $broadband_tariff_new): \OpenAPI\Client\Model\BroadbandTariffDetails
```

Creates a new broadband tariff

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BroadbandTariffApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$api_platform = 'api_platform_example'; // string | The API provides access to two separate platforms: test and live. The test platform allows you to experiment with the API without incurring charges or affecting customer orders. The live platform allows you to make real world changes.
$broadband_tariff_new = new \OpenAPI\Client\Model\BroadbandTariffNew(); // \OpenAPI\Client\Model\BroadbandTariffNew | A BroadbandTariffNew structure

try {
    $result = $apiInstance->broadbandTariffNewPost($api_platform, $broadband_tariff_new);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BroadbandTariffApi->broadbandTariffNewPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **api_platform** | **string**| The API provides access to two separate platforms: test and live. The test platform allows you to experiment with the API without incurring charges or affecting customer orders. The live platform allows you to make real world changes. | |
| **broadband_tariff_new** | [**\OpenAPI\Client\Model\BroadbandTariffNew**](../Model/BroadbandTariffNew.md)| A BroadbandTariffNew structure | [optional] |

### Return type

[**\OpenAPI\Client\Model\BroadbandTariffDetails**](../Model/BroadbandTariffDetails.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
