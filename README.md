# OpenAPIClient-php

The ICUK API provides an interface to the reseller control panel which can be used to control the provisioning and configuration of facilities remotely

For more information, please visit [https://control.icuk.net](https://control.icuk.net).

## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## API Endpoints

All URIs are relative to *http://localhost*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*BroadbandAddressApi* | [**broadbandAddressPostcodeGet**](docs/Api/BroadbandAddressApi.md#broadbandaddresspostcodeget) | **GET** /broadband/address/{postcode} | Search for your postcode and it will return a list of BT address search results
*BroadbandAddressApi* | [**broadbandAddressSearchPostcodeGet**](docs/Api/BroadbandAddressApi.md#broadbandaddresssearchpostcodeget) | **GET** /broadband/address_search/{postcode} | Search for your postcode and it will return a list of BT address search results
*BroadbandAuthenticationLogsApi* | [**broadbandAuthenticationLogsUsernameGet**](docs/Api/BroadbandAuthenticationLogsApi.md#broadbandauthenticationlogsusernameget) | **GET** /broadband/authentication_logs/{username} | Retrieves the past 50 authentication attempts for a broadband user
*BroadbandAvailabilityApi* | [**broadbandAvailabilityCliOrPostcodeGet**](docs/Api/BroadbandAvailabilityApi.md#broadbandavailabilitycliorpostcodeget) | **GET** /broadband/availability/{cli_or_postcode} | Search for your phone number or postcode and return a list of available broadband products with the speeds available
*BroadbandAvailabilityApi* | [**broadbandAvailabilityPost**](docs/Api/BroadbandAvailabilityApi.md#broadbandavailabilitypost) | **POST** /broadband/availability | Search with your exact BT address match and return a list of available broadband products with the speeds available
*BroadbandBanApi* | [**broadbandBanPut**](docs/Api/BroadbandBanApi.md#broadbandbanput) | **PUT** /broadband/ban | Updates the ban status for a broadband user
*BroadbandBanApi* | [**broadbandBanStatusUsernameGet**](docs/Api/BroadbandBanApi.md#broadbandbanstatususernameget) | **GET** /broadband/ban/status/{username} | Retrieves the ban status for a broadband user
*BroadbandContactDetailsApi* | [**broadbandUserContactUsernameGet**](docs/Api/BroadbandContactDetailsApi.md#broadbandusercontactusernameget) | **GET** /broadband/user/contact/{username} | Retrieves the contact details for a broadband user
*BroadbandContactDetailsApi* | [**broadbandUserContactUsernamePut**](docs/Api/BroadbandContactDetailsApi.md#broadbandusercontactusernameput) | **PUT** /broadband/user/contact/username | Changes a broadband users contact
*BroadbandDataTransferApi* | [**broadbandDataTransferDailyUsernameGet**](docs/Api/BroadbandDataTransferApi.md#broadbanddatatransferdailyusernameget) | **GET** /broadband/data_transfer/daily/{username} | Retrieves the daily data transfer usage for a broadband user for the current month
*BroadbandDataTransferApi* | [**broadbandDataTransferDailyUsernameYearMonthGet**](docs/Api/BroadbandDataTransferApi.md#broadbanddatatransferdailyusernameyearmonthget) | **GET** /broadband/data_transfer/daily/{username}/{year}/{month} | Retrieves the daily data transfer usage for a broadband user for the specified month and year
*BroadbandDataTransferApi* | [**broadbandDataTransferHourlyUsernameGet**](docs/Api/BroadbandDataTransferApi.md#broadbanddatatransferhourlyusernameget) | **GET** /broadband/data_transfer/hourly/{username} | Retrieves the hourly data transfer usage for a broadband user for the current day
*BroadbandDataTransferApi* | [**broadbandDataTransferHourlyUsernameYearMonthDayGet**](docs/Api/BroadbandDataTransferApi.md#broadbanddatatransferhourlyusernameyearmonthdayget) | **GET** /broadband/data_transfer/hourly/{username}/{year}/{month}/{day} | Retrieves the hourly data transfer usage for a broadband user for the specified day, month and year
*BroadbandDataTransferApi* | [**broadbandDataTransferMonthlyGet**](docs/Api/BroadbandDataTransferApi.md#broadbanddatatransfermonthlyget) | **GET** /broadband/data_transfer/monthly | Retrieves the monthly data transfer usage for all users for the current month
*BroadbandDataTransferApi* | [**broadbandDataTransferMonthlyUsernameGet**](docs/Api/BroadbandDataTransferApi.md#broadbanddatatransfermonthlyusernameget) | **GET** /broadband/data_transfer/monthly/{username} | Retrieves the monthly data transfer usage for a broadband user for the current month
*BroadbandDataTransferApi* | [**broadbandDataTransferMonthlyUsernameYearMonthGet**](docs/Api/BroadbandDataTransferApi.md#broadbanddatatransfermonthlyusernameyearmonthget) | **GET** /broadband/data_transfer/monthly/{username}/{year}/{month} | Retrieves the monthly data transfer usage for a broadband user for the specified month and year
*BroadbandDataTransferApi* | [**broadbandDataTransferMonthlyYearMonthGet**](docs/Api/BroadbandDataTransferApi.md#broadbanddatatransfermonthlyyearmonthget) | **GET** /broadband/data_transfer/monthly/{year}/{month} | Retrieves the monthly data transfer usage for all users for the specified month and year
*BroadbandDiagnosticsApi* | [**broadbandDiagnosticsResultsUsernameTestIdGet**](docs/Api/BroadbandDiagnosticsApi.md#broadbanddiagnosticsresultsusernametestidget) | **GET** /broadband/diagnostics/results/{username}/{test_id} | Gets the results of complete diagnostics test for a certain user and test ID for a TTB line
*BroadbandDiagnosticsApi* | [**broadbandDiagnosticsUsernameGet**](docs/Api/BroadbandDiagnosticsApi.md#broadbanddiagnosticsusernameget) | **GET** /broadband/diagnostics/{username} | Carry out a TalkTalk diagnostics test on the user line
*BroadbandDiagnosticsApi* | [**broadbandKbdPost**](docs/Api/BroadbandDiagnosticsApi.md#broadbandkbdpost) | **POST** /broadband/kbd | Carry out a Knowledge Based Diagnostics test on a BT Openreach line
*BroadbandDiagnosticsApi* | [**broadbandKbdResultUsernameGet**](docs/Api/BroadbandDiagnosticsApi.md#broadbandkbdresultusernameget) | **GET** /broadband/kbd/result/{username} | Gets the results of complete KBD&#39;s for a certain user
*BroadbandIPApi* | [**broadbandIpRdnsUsernameGet**](docs/Api/BroadbandIPApi.md#broadbandiprdnsusernameget) | **GET** /broadband/ip/rdns/{username} | Retrieves the broadband Reverse DNS information of a static, routed and Ipv6 addresses of a broadband user
*BroadbandIPApi* | [**broadbandIpRdnsUsernamePost**](docs/Api/BroadbandIPApi.md#broadbandiprdnsusernamepost) | **POST** /broadband/ip/rdns/{username} | Assigns a Reverse DNS records to a static or routed IP address
*BroadbandIPApi* | [**broadbandIpRoutedUsernameDelete**](docs/Api/BroadbandIPApi.md#broadbandiproutedusernamedelete) | **DELETE** /broadband/ip/routed/{username} | Removes a routed subnet from a broadband user
*BroadbandIPApi* | [**broadbandIpRoutedUsernamePost**](docs/Api/BroadbandIPApi.md#broadbandiproutedusernamepost) | **POST** /broadband/ip/routed/{username} | Assigns a routed IPv4 address of the supplied size to a broadband user and updates the RIPE database with the  supplied RIPE NIC handle. If the current allocation is dynamic a static IP will also be created
*BroadbandIPApi* | [**broadbandIpStaticUsernameDelete**](docs/Api/BroadbandIPApi.md#broadbandipstaticusernamedelete) | **DELETE** /broadband/ip/static/{username} | Removes a static IP address and all routed subnets from a broadband user
*BroadbandIPApi* | [**broadbandIpStaticUsernamePost**](docs/Api/BroadbandIPApi.md#broadbandipstaticusernamepost) | **POST** /broadband/ip/static/{username} | Assigns a static IPv4 address to a broadband user
*BroadbandIPApi* | [**broadbandIpUsernameGet**](docs/Api/BroadbandIPApi.md#broadbandipusernameget) | **GET** /broadband/ip/{username} | Retrieves the static, routed and Ipv6 information of a broadband user
*BroadbandIPApi* | [**broadbandIpv6UsernameDelete**](docs/Api/BroadbandIPApi.md#broadbandipv6usernamedelete) | **DELETE** /broadband/ipv6/{username} | Removes a IPv6 address from a broadband user
*BroadbandIPApi* | [**broadbandIpv6UsernamePost**](docs/Api/BroadbandIPApi.md#broadbandipv6usernamepost) | **POST** /broadband/ipv6/{username} | Assigns a IPv6 address to a broadband user
*BroadbandNotificationsApi* | [**broadbandNotificationsGetGet**](docs/Api/BroadbandNotificationsApi.md#broadbandnotificationsgetget) | **GET** /broadband/notifications/get | Returns all broadband notifications for the reseller
*BroadbandNotificationsApi* | [**broadbandNotificationsQueryPost**](docs/Api/BroadbandNotificationsApi.md#broadbandnotificationsquerypost) | **POST** /broadband/notifications/query | Queries for broadband notifications
*BroadbandNotificationsApi* | [**broadbandNotificationsUsernameAllGet**](docs/Api/BroadbandNotificationsApi.md#broadbandnotificationsusernameallget) | **GET** /broadband/notifications/{username}/{all} | Queries for broadband notifications for user@realm
*BroadbandOnlineStatusApi* | [**broadbandOnlineStatusGet**](docs/Api/BroadbandOnlineStatusApi.md#broadbandonlinestatusget) | **GET** /broadband/online_status | Retrieves the online statuses for all broadband users
*BroadbandOnlineStatusApi* | [**broadbandOnlineStatusUsernameDelete**](docs/Api/BroadbandOnlineStatusApi.md#broadbandonlinestatususernamedelete) | **DELETE** /broadband/online_status/{username} | Terminates a user&#39;s session if they are online
*BroadbandOnlineStatusApi* | [**broadbandOnlineStatusUsernameGet**](docs/Api/BroadbandOnlineStatusApi.md#broadbandonlinestatususernameget) | **GET** /broadband/online_status/{username} | Retrieves the online status of a broadband user
*BroadbandOrderApi* | [**broadbandOrderCeaseUsernamePost**](docs/Api/BroadbandOrderApi.md#broadbandorderceaseusernamepost) | **POST** /broadband/order/cease/{username} | Places a cease order for an existing broadband connection for a specific date
*BroadbandOrderApi* | [**broadbandOrderGet**](docs/Api/BroadbandOrderApi.md#broadbandorderget) | **GET** /broadband/order | Retrieves the broadband order summary for all users
*BroadbandOrderApi* | [**broadbandOrderMigratePost**](docs/Api/BroadbandOrderApi.md#broadbandordermigratepost) | **POST** /broadband/order/migrate | Orders a migration of an existing broadband connection for a telephone line or address
*BroadbandOrderApi* | [**broadbandOrderOrderIdGet**](docs/Api/BroadbandOrderApi.md#broadbandorderorderidget) | **GET** /broadband/order/{order_id} | Retrieves the broadband order details for a broadband order ID
*BroadbandOrderApi* | [**broadbandOrderOrderTypeOrderStatusGet**](docs/Api/BroadbandOrderApi.md#broadbandorderordertypeorderstatusget) | **GET** /broadband/order/{order_type}/{order_status} | Retrieves the broadband order summary for all users for the specified order type and status
*BroadbandOrderApi* | [**broadbandOrderProvidePost**](docs/Api/BroadbandOrderApi.md#broadbandorderprovidepost) | **POST** /broadband/order/provide | Orders a new broadband product for a telephone line or address
*BroadbandOrderApi* | [**broadbandOrderUpdatesOrderIdStartDateEndDateGet**](docs/Api/BroadbandOrderApi.md#broadbandorderupdatesorderidstartdateenddateget) | **GET** /broadband/order/updates/{order_id}/{start_date}/{end_date} | Retrieves a specific broadband order which has been updated within a datetime range
*BroadbandOrderApi* | [**broadbandOrderUpdatesStartDateEndDateGet**](docs/Api/BroadbandOrderApi.md#broadbandorderupdatesstartdateenddateget) | **GET** /broadband/order/updates/{start_date}/{end_date} | Retrieves the broadband orders which have been updated within a datetime range
*BroadbandProductsApi* | [**broadbandProductsAdslProductIdGet**](docs/Api/BroadbandProductsApi.md#broadbandproductsadslproductidget) | **GET** /broadband/products/adsl/{product_id} | Retrieves the reseller&#39;s broadband product details for a specific product ID
*BroadbandProductsApi* | [**broadbandProductsCareCurrentUsernameGet**](docs/Api/BroadbandProductsApi.md#broadbandproductscarecurrentusernameget) | **GET** /broadband/products/care/current/{username} | Gets the current care level of the broadband product
*BroadbandProductsApi* | [**broadbandProductsCarePut**](docs/Api/BroadbandProductsApi.md#broadbandproductscareput) | **PUT** /broadband/products/care | Updates the care level of the broadband product
*BroadbandProductsApi* | [**broadbandProductsGet**](docs/Api/BroadbandProductsApi.md#broadbandproductsget) | **GET** /broadband/products | Retrieves the reseller&#39;s available broadband products that can be ordered and their costs
*BroadbandProductsApi* | [**broadbandProductsQuotaCurrentUsernameGet**](docs/Api/BroadbandProductsApi.md#broadbandproductsquotacurrentusernameget) | **GET** /broadband/products/quota/current/{username} | Gets the default action to be taken in future if the account exceeds its quota
*BroadbandProductsApi* | [**broadbandProductsQuotaPut**](docs/Api/BroadbandProductsApi.md#broadbandproductsquotaput) | **PUT** /broadband/products/quota | Choose a default action to be taken in future if the account exceeds its quota
*BroadbandProductsApi* | [**broadbandProductsSpeedCurrentUsernameGet**](docs/Api/BroadbandProductsApi.md#broadbandproductsspeedcurrentusernameget) | **GET** /broadband/products/speed/current/{username} | Gets the current speed limit of a broadband product
*BroadbandProductsApi* | [**broadbandProductsSpeedPut**](docs/Api/BroadbandProductsApi.md#broadbandproductsspeedput) | **PUT** /broadband/products/speed | Adjust the speed limit for this connection
*BroadbandRIPEApi* | [**broadbandRipePersonGet**](docs/Api/BroadbandRIPEApi.md#broadbandripepersonget) | **GET** /broadband/ripe/person | Retrieves the RIPE person contacts that have been created for broadband accounts assigned to the reseller
*BroadbandRIPEApi* | [**broadbandRipePersonPost**](docs/Api/BroadbandRIPEApi.md#broadbandripepersonpost) | **POST** /broadband/ripe/person | Creates a RIPE person contact assigned to the reseller
*BroadbandRIPEApi* | [**broadbandRipePersonRipeNicHandleDelete**](docs/Api/BroadbandRIPEApi.md#broadbandripepersonripenichandledelete) | **DELETE** /broadband/ripe/person/{ripe_nic_handle} | Deletes the RIPE person contact details for a nic-handle
*BroadbandRIPEApi* | [**broadbandRipePersonRipeNicHandleGet**](docs/Api/BroadbandRIPEApi.md#broadbandripepersonripenichandleget) | **GET** /broadband/ripe/person/{ripe_nic_handle} | Retrieves a RIPE person contact for a specific nic-handle that has been created for a broadband account assigned to the reseller
*BroadbandRIPEApi* | [**broadbandRipePersonRipeNicHandlePut**](docs/Api/BroadbandRIPEApi.md#broadbandripepersonripenichandleput) | **PUT** /broadband/ripe/person/{ripe_nic_handle} | Changes the RIPE person contact details for a nic-handle
*BroadbandRadiusApi* | [**broadbandCarrierRadiusGet**](docs/Api/BroadbandRadiusApi.md#broadbandcarrierradiusget) | **GET** /broadband/carrier_radius | Retrieves the carrier RADIUS logs of a broadband user. [TTB only]
*BroadbandSNRApi* | [**broadbandInterleavingCurrentUsernameGet**](docs/Api/BroadbandSNRApi.md#broadbandinterleavingcurrentusernameget) | **GET** /broadband/interleaving/current/{username} | Retrieves the current interleaving option. Only available for users with BT Wholesale products
*BroadbandSNRApi* | [**broadbandInterleavingPut**](docs/Api/BroadbandSNRApi.md#broadbandinterleavingput) | **PUT** /broadband/interleaving | Updates the interleaving profile. Only available for users with BT Wholesale broadband products
*BroadbandSNRApi* | [**broadbandProfileCurrentUsernameGet**](docs/Api/BroadbandSNRApi.md#broadbandprofilecurrentusernameget) | **GET** /broadband/profile/current/{username} | Gets the current SNR and interleaving profile. Only available for users with TalkTalk products
*BroadbandSNRApi* | [**broadbandProfilePut**](docs/Api/BroadbandSNRApi.md#broadbandprofileput) | **PUT** /broadband/profile | Updates SNR and interleaving profile. Only available for users with TalkTalk products
*BroadbandSNRApi* | [**broadbandSnrLogsUsernameGet**](docs/Api/BroadbandSNRApi.md#broadbandsnrlogsusernameget) | **GET** /broadband/snr/logs/{username} | Gets SNR logs for a user. Only available for users with BT Wholesale products
*BroadbandSNRApi* | [**broadbandSnrUsernameGet**](docs/Api/BroadbandSNRApi.md#broadbandsnrusernameget) | **GET** /broadband/snr/{username} | Reset the SNR of the user line. Only available for users with BT Wholesale products
*BroadbandSessionHistoryApi* | [**broadbandSessionHistoryUsernameGet**](docs/Api/BroadbandSessionHistoryApi.md#broadbandsessionhistoryusernameget) | **GET** /broadband/session_history/{username} | Retrieves the past 50 session history of a broadband user
*BroadbandStabilityApi* | [**broadbandStabilityCurrentUsernameGet**](docs/Api/BroadbandStabilityApi.md#broadbandstabilitycurrentusernameget) | **GET** /broadband/stability/current/{username} | Gets the current stability option of the line. The stability option will change once the order is complete
*BroadbandStabilityApi* | [**broadbandStabilityPut**](docs/Api/BroadbandStabilityApi.md#broadbandstabilityput) | **PUT** /broadband/stability | Updates the stability of the line
*BroadbandSyncProfileApi* | [**broadbandSyncProfileUsernameGet**](docs/Api/BroadbandSyncProfileApi.md#broadbandsyncprofileusernameget) | **GET** /broadband/sync_profile/{username} | View the current and past sync profile for this connection
*BroadbandTariffApi* | [**broadbandTariffDeleteTariffIdDelete**](docs/Api/BroadbandTariffApi.md#broadbandtariffdeletetariffiddelete) | **DELETE** /broadband/tariff/delete/{tariff_id} | Deletes a broadband tariff
*BroadbandTariffApi* | [**broadbandTariffGet**](docs/Api/BroadbandTariffApi.md#broadbandtariffget) | **GET** /broadband/tariff | Retrieves the broadband tariffs
*BroadbandTariffApi* | [**broadbandTariffNewPost**](docs/Api/BroadbandTariffApi.md#broadbandtariffnewpost) | **POST** /broadband/tariff/new | Creates a new broadband tariff
*BroadbandUserApi* | [**broadbandUserGet**](docs/Api/BroadbandUserApi.md#broadbanduserget) | **GET** /broadband/user | Retrieves all the broadband users belonging to the API user
*BroadbandUserApi* | [**broadbandUserPasswordUsernamePut**](docs/Api/BroadbandUserApi.md#broadbanduserpasswordusernameput) | **PUT** /broadband/user/password/{username} | Updates password of a broadband user
*BroadbandUserApi* | [**broadbandUserUsernameDelete**](docs/Api/BroadbandUserApi.md#broadbanduserusernamedelete) | **DELETE** /broadband/user/{username} | Deletes a broadband user belonging to the API user
*BroadbandUserApi* | [**broadbandUserUsernameGet**](docs/Api/BroadbandUserApi.md#broadbanduserusernameget) | **GET** /broadband/user/{username} | Retrieves a broadband user belonging to the API user
*EchoApi* | [**echoGet**](docs/Api/EchoApi.md#echoget) | **GET** /echo | Test Echo API request
*OAuthApi* | [**oauthTokenPost**](docs/Api/OAuthApi.md#oauthtokenpost) | **POST** /oauth/token | Retrieve OAuth 2.0 Authorization token.

## Models

- [ApiExceptionResponse](docs/Model/ApiExceptionResponse.md)
- [ApiResponse](docs/Model/ApiResponse.md)
- [BigInteger](docs/Model/BigInteger.md)
- [BroadbandAddress](docs/Model/BroadbandAddress.md)
- [BroadbandAddressResults](docs/Model/BroadbandAddressResults.md)
- [BroadbandAuthenticationLog](docs/Model/BroadbandAuthenticationLog.md)
- [BroadbandAuthenticationLogResults](docs/Model/BroadbandAuthenticationLogResults.md)
- [BroadbandAvailability](docs/Model/BroadbandAvailability.md)
- [BroadbandAvailabilityLineDetails](docs/Model/BroadbandAvailabilityLineDetails.md)
- [BroadbandAvailabilityResults](docs/Model/BroadbandAvailabilityResults.md)
- [BroadbandBan](docs/Model/BroadbandBan.md)
- [BroadbandCare](docs/Model/BroadbandCare.md)
- [BroadbandCarrierRadiusLog](docs/Model/BroadbandCarrierRadiusLog.md)
- [BroadbandCarrierRadiusLogs](docs/Model/BroadbandCarrierRadiusLogs.md)
- [BroadbandDataTransferDaily](docs/Model/BroadbandDataTransferDaily.md)
- [BroadbandDataTransferDailyDetails](docs/Model/BroadbandDataTransferDailyDetails.md)
- [BroadbandDataTransferDailyResult](docs/Model/BroadbandDataTransferDailyResult.md)
- [BroadbandDataTransferHourly](docs/Model/BroadbandDataTransferHourly.md)
- [BroadbandDataTransferHourlyResult](docs/Model/BroadbandDataTransferHourlyResult.md)
- [BroadbandDataTransferMonthlyDetails](docs/Model/BroadbandDataTransferMonthlyDetails.md)
- [BroadbandDataTransferMonthlyDownload](docs/Model/BroadbandDataTransferMonthlyDownload.md)
- [BroadbandDataTransferMonthlyResult](docs/Model/BroadbandDataTransferMonthlyResult.md)
- [BroadbandDataTransferMonthlyResults](docs/Model/BroadbandDataTransferMonthlyResults.md)
- [BroadbandDataTransferMonthlyUpload](docs/Model/BroadbandDataTransferMonthlyUpload.md)
- [BroadbandDataTransferPeakHours](docs/Model/BroadbandDataTransferPeakHours.md)
- [BroadbandDiagnosticsLineData](docs/Model/BroadbandDiagnosticsLineData.md)
- [BroadbandDiagnosticsResponse](docs/Model/BroadbandDiagnosticsResponse.md)
- [BroadbandDiagnosticsTamFibreResponse](docs/Model/BroadbandDiagnosticsTamFibreResponse.md)
- [BroadbandDiagnosticsTamResponse](docs/Model/BroadbandDiagnosticsTamResponse.md)
- [BroadbandExchangeInfo](docs/Model/BroadbandExchangeInfo.md)
- [BroadbandIPAllocation](docs/Model/BroadbandIPAllocation.md)
- [BroadbandIPDeallocation](docs/Model/BroadbandIPDeallocation.md)
- [BroadbandIPRDNS](docs/Model/BroadbandIPRDNS.md)
- [BroadbandIPResults](docs/Model/BroadbandIPResults.md)
- [BroadbandIPv4](docs/Model/BroadbandIPv4.md)
- [BroadbandIPv6](docs/Model/BroadbandIPv6.md)
- [BroadbandInterleaving](docs/Model/BroadbandInterleaving.md)
- [BroadbandKBD](docs/Model/BroadbandKBD.md)
- [BroadbandKBDAccessDetails](docs/Model/BroadbandKBDAccessDetails.md)
- [BroadbandKBDAccessDetailsTrend](docs/Model/BroadbandKBDAccessDetailsTrend.md)
- [BroadbandKBDAccessProfile](docs/Model/BroadbandKBDAccessProfile.md)
- [BroadbandKBDConsistencyCheck](docs/Model/BroadbandKBDConsistencyCheck.md)
- [BroadbandKBDCuline](docs/Model/BroadbandKBDCuline.md)
- [BroadbandKBDDecision](docs/Model/BroadbandKBDDecision.md)
- [BroadbandKBDDecisionAdditionalInventory](docs/Model/BroadbandKBDDecisionAdditionalInventory.md)
- [BroadbandKBDDecisionDlm](docs/Model/BroadbandKBDDecisionDlm.md)
- [BroadbandKBDFaultLocalization](docs/Model/BroadbandKBDFaultLocalization.md)
- [BroadbandKBDGea](docs/Model/BroadbandKBDGea.md)
- [BroadbandKBDGeaParameters](docs/Model/BroadbandKBDGeaParameters.md)
- [BroadbandKBDGeaVdsl](docs/Model/BroadbandKBDGeaVdsl.md)
- [BroadbandKBDIpTest](docs/Model/BroadbandKBDIpTest.md)
- [BroadbandKBDIpTestPacket](docs/Model/BroadbandKBDIpTestPacket.md)
- [BroadbandKBDIpTestQos](docs/Model/BroadbandKBDIpTestQos.md)
- [BroadbandKBDIpTestTraffic](docs/Model/BroadbandKBDIpTestTraffic.md)
- [BroadbandKBDManageAssociate](docs/Model/BroadbandKBDManageAssociate.md)
- [BroadbandKBDNeighbour](docs/Model/BroadbandKBDNeighbour.md)
- [BroadbandKBDRadius](docs/Model/BroadbandKBDRadius.md)
- [BroadbandKBDRadiusLog](docs/Model/BroadbandKBDRadiusLog.md)
- [BroadbandKBDRadiusMessage](docs/Model/BroadbandKBDRadiusMessage.md)
- [BroadbandKBDRequest](docs/Model/BroadbandKBDRequest.md)
- [BroadbandKBDResponse](docs/Model/BroadbandKBDResponse.md)
- [BroadbandKBDStatusCheck](docs/Model/BroadbandKBDStatusCheck.md)
- [BroadbandKBDStatusCheckLinkInfo](docs/Model/BroadbandKBDStatusCheckLinkInfo.md)
- [BroadbandKBDTam](docs/Model/BroadbandKBDTam.md)
- [BroadbandKBDTamAtm](docs/Model/BroadbandKBDTamAtm.md)
- [BroadbandKBDTamDsl](docs/Model/BroadbandKBDTamDsl.md)
- [BroadbandKBDTamIP](docs/Model/BroadbandKBDTamIP.md)
- [BroadbandKBDTamInp](docs/Model/BroadbandKBDTamInp.md)
- [BroadbandKBDTamPPP](docs/Model/BroadbandKBDTamPPP.md)
- [BroadbandNotificationItemHistory](docs/Model/BroadbandNotificationItemHistory.md)
- [BroadbandNotificationRequest](docs/Model/BroadbandNotificationRequest.md)
- [BroadbandNotificationResponse](docs/Model/BroadbandNotificationResponse.md)
- [BroadbandOnlineStatus](docs/Model/BroadbandOnlineStatus.md)
- [BroadbandOnlineStatusResults](docs/Model/BroadbandOnlineStatusResults.md)
- [BroadbandOnlineStatusTermination](docs/Model/BroadbandOnlineStatusTermination.md)
- [BroadbandOrder](docs/Model/BroadbandOrder.md)
- [BroadbandOrderAddress](docs/Model/BroadbandOrderAddress.md)
- [BroadbandOrderCease](docs/Model/BroadbandOrderCease.md)
- [BroadbandOrderContact](docs/Model/BroadbandOrderContact.md)
- [BroadbandOrderCustomer](docs/Model/BroadbandOrderCustomer.md)
- [BroadbandOrderDetails](docs/Model/BroadbandOrderDetails.md)
- [BroadbandOrderEvent](docs/Model/BroadbandOrderEvent.md)
- [BroadbandOrderHistory](docs/Model/BroadbandOrderHistory.md)
- [BroadbandOrderInformation](docs/Model/BroadbandOrderInformation.md)
- [BroadbandOrderInstallationOptions](docs/Model/BroadbandOrderInstallationOptions.md)
- [BroadbandOrderIp](docs/Model/BroadbandOrderIp.md)
- [BroadbandOrderRIPE](docs/Model/BroadbandOrderRIPE.md)
- [BroadbandOrderSummary](docs/Model/BroadbandOrderSummary.md)
- [BroadbandOrderSummaryResults](docs/Model/BroadbandOrderSummaryResults.md)
- [BroadbandProduct](docs/Model/BroadbandProduct.md)
- [BroadbandProductAssuredRate](docs/Model/BroadbandProductAssuredRate.md)
- [BroadbandProductCare](docs/Model/BroadbandProductCare.md)
- [BroadbandProductElevatedBestEffort](docs/Model/BroadbandProductElevatedBestEffort.md)
- [BroadbandProductIp](docs/Model/BroadbandProductIp.md)
- [BroadbandProductOther](docs/Model/BroadbandProductOther.md)
- [BroadbandProductResults](docs/Model/BroadbandProductResults.md)
- [BroadbandProductRouted](docs/Model/BroadbandProductRouted.md)
- [BroadbandQuota](docs/Model/BroadbandQuota.md)
- [BroadbandRipePerson](docs/Model/BroadbandRipePerson.md)
- [BroadbandRipePersonResults](docs/Model/BroadbandRipePersonResults.md)
- [BroadbandSessionHistory](docs/Model/BroadbandSessionHistory.md)
- [BroadbandSessionHistoryResults](docs/Model/BroadbandSessionHistoryResults.md)
- [BroadbandSnr](docs/Model/BroadbandSnr.md)
- [BroadbandSnrProfile](docs/Model/BroadbandSnrProfile.md)
- [BroadbandSpeedLimit](docs/Model/BroadbandSpeedLimit.md)
- [BroadbandStability](docs/Model/BroadbandStability.md)
- [BroadbandStabilityTermination](docs/Model/BroadbandStabilityTermination.md)
- [BroadbandSyncProfile](docs/Model/BroadbandSyncProfile.md)
- [BroadbandTariffDetails](docs/Model/BroadbandTariffDetails.md)
- [BroadbandTariffNew](docs/Model/BroadbandTariffNew.md)
- [BroadbandUser](docs/Model/BroadbandUser.md)
- [BroadbandUserContact](docs/Model/BroadbandUserContact.md)
- [BroadbandUserPassword](docs/Model/BroadbandUserPassword.md)
- [BroadbandUserResults](docs/Model/BroadbandUserResults.md)
- [OAuthResponse](docs/Model/OAuthResponse.md)
- [ProblemDetails](docs/Model/ProblemDetails.md)

## Authorization

### oauth2

- **Type**: `OAuth`
- **Flow**: `application`
- **Authorization URL**: ``
- **Scopes**: N/A

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `v1`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
