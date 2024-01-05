# OpenAPI\Client\BroadbandAddressApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**broadbandAddressPostcodeGet()**](BroadbandAddressApi.md#broadbandAddressPostcodeGet) | **GET** /broadband/address/{postcode} | Search for your postcode and it will return a list of BT address search results |
| [**broadbandAddressSearchPostcodeGet()**](BroadbandAddressApi.md#broadbandAddressSearchPostcodeGet) | **GET** /broadband/address_search/{postcode} | Search for your postcode and it will return a list of BT address search results |


## `broadbandAddressPostcodeGet()`

```php
broadbandAddressPostcodeGet($postcode, $api_platform): \OpenAPI\Client\Model\BroadbandAddressResults
```

Search for your postcode and it will return a list of BT address search results

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BroadbandAddressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$postcode = 'postcode_example'; // string | Postcode of address
$api_platform = 'api_platform_example'; // string | The API provides access to two separate platforms: test and live. The test platform allows you to experiment with the API without incurring charges or affecting customer orders. The live platform allows you to make real world changes.

try {
    $result = $apiInstance->broadbandAddressPostcodeGet($postcode, $api_platform);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BroadbandAddressApi->broadbandAddressPostcodeGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **postcode** | **string**| Postcode of address | |
| **api_platform** | **string**| The API provides access to two separate platforms: test and live. The test platform allows you to experiment with the API without incurring charges or affecting customer orders. The live platform allows you to make real world changes. | |

### Return type

[**\OpenAPI\Client\Model\BroadbandAddressResults**](../Model/BroadbandAddressResults.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `broadbandAddressSearchPostcodeGet()`

```php
broadbandAddressSearchPostcodeGet($postcode, $api_platform): \OpenAPI\Client\Model\BroadbandAddressResults
```

Search for your postcode and it will return a list of BT address search results

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BroadbandAddressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$postcode = 'postcode_example'; // string | Postcode of address
$api_platform = 'api_platform_example'; // string | The API provides access to two separate platforms: test and live. The test platform allows you to experiment with the API without incurring charges or affecting customer orders. The live platform allows you to make real world changes.

try {
    $result = $apiInstance->broadbandAddressSearchPostcodeGet($postcode, $api_platform);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BroadbandAddressApi->broadbandAddressSearchPostcodeGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **postcode** | **string**| Postcode of address | |
| **api_platform** | **string**| The API provides access to two separate platforms: test and live. The test platform allows you to experiment with the API without incurring charges or affecting customer orders. The live platform allows you to make real world changes. | |

### Return type

[**\OpenAPI\Client\Model\BroadbandAddressResults**](../Model/BroadbandAddressResults.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
