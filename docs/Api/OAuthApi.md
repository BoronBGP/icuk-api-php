# OpenAPI\Client\OAuthApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**oauthTokenPost()**](OAuthApi.md#oauthTokenPost) | **POST** /oauth/token | Retrieve OAuth 2.0 Authorization token. |


## `oauthTokenPost()`

```php
oauthTokenPost($api_platform, $grant_type): \OpenAPI\Client\Model\OAuthResponse
```

Retrieve OAuth 2.0 Authorization token.

To Authorise API requests, you can use the hash authentication (for backwards compatibility with the previous API) or  <a href=\"https://www.rfc-editor.org/rfc/rfc6749\" target=\"_blank\">OAuth 2.0 Authorization</a>.    To retrieve the OAuth token you need to add your credentials in the <b>Authorization</b> Header request as  <a href=\"https://www.rfc-editor.org/rfc/rfc7617\" target=\"_blank\">basic authentication</a> (Your API account's username,  ':' and password are concatenated and base64-encoded. This string is prefixed with 'Basic ').    Your authorisation token is only valid for a limited period, specified in the API response.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\OAuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$api_platform = 'api_platform_example'; // string | The API provides access to two separate platforms: test and live. The test platform allows you to experiment with the API without incurring charges or affecting customer orders. The live platform allows you to make real world changes.
$grant_type = 'client_credentials'; // string | Only 'client_credentials' is supported.

try {
    $result = $apiInstance->oauthTokenPost($api_platform, $grant_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OAuthApi->oauthTokenPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **api_platform** | **string**| The API provides access to two separate platforms: test and live. The test platform allows you to experiment with the API without incurring charges or affecting customer orders. The live platform allows you to make real world changes. | |
| **grant_type** | **string**| Only &#39;client_credentials&#39; is supported. | [optional] [default to &#39;client_credentials&#39;] |

### Return type

[**\OpenAPI\Client\Model\OAuthResponse**](../Model/OAuthResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
