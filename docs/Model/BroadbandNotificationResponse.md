# # BroadbandNotificationResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | ID of the notification | [optional]
**current_state** | **string** | State of the notification&lt;p&gt;Possible values:&lt;/p&gt;  &lt;ul&gt;  &lt;li&gt;&lt;b&gt;0&lt;/b&gt; - Unknown.&lt;/li&gt;  &lt;li&gt;&lt;b&gt;1&lt;/b&gt; - Initial.&lt;/li&gt;  &lt;li&gt;&lt;b&gt;2&lt;/b&gt; - Update.&lt;/li&gt;  &lt;li&gt;&lt;b&gt;3&lt;/b&gt; - Closure.&lt;/li&gt;  &lt;li&gt;&lt;b&gt;4&lt;/b&gt; - Restoration.&lt;/li&gt;  &lt;li&gt;&lt;b&gt;5&lt;/b&gt; - Cancelled.&lt;/li&gt;  &lt;/ul&gt; | [optional]
**updated_date** | **\DateTime** | Date when notification was updated | [optional]
**start_date** | **\DateTime** | Start date of planned downtime | [optional]
**end_date** | **\DateTime** | End date of planned downtime | [optional]
**source** | **string** | Source of the notification&lt;p&gt;Possible values:&lt;/p&gt;  &lt;ul&gt;  &lt;li&gt;&lt;b&gt;0&lt;/b&gt; - Unknown.&lt;/li&gt;  &lt;li&gt;&lt;b&gt;1&lt;/b&gt; - Initial.&lt;/li&gt;  &lt;li&gt;&lt;b&gt;2&lt;/b&gt; - Update.&lt;/li&gt;  &lt;li&gt;&lt;b&gt;3&lt;/b&gt; - Update.&lt;/li&gt;  &lt;li&gt;&lt;b&gt;4&lt;/b&gt; - Update.&lt;/li&gt;  &lt;/ul&gt; | [optional]
**geo_location** | **string** | Geographical location of notification | [optional]
**description** | **string** | Description of the notification | [optional]
**exchanges** | **string[]** | Exchanges affected | [optional]
**area_code** | **string** | Area codes affected | [optional]
**history** | [**\OpenAPI\Client\Model\BroadbandNotificationItemHistory[]**](BroadbandNotificationItemHistory.md) | Update history | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
