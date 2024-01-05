# # BroadbandDiagnosticsResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**success** | **bool** | Whether the diagnostics request is successful | [optional]
**tam_test_id** | **string** | The TAM test ID | [optional]
**sync_status** | **string** | Represents sync status. Not available for fibre lines | [optional]
**time_in_sync** | **string** | Represents time in sync. Not available for fibre lines | [optional]
**line_data** | [**\OpenAPI\Client\Model\BroadbandDiagnosticsLineData**](BroadbandDiagnosticsLineData.md) |  | [optional]
**snr_profile** | **int** | Current SNR profile margin set in dB. Not available for fibre lines | [optional]
**interleaving** | **bool** | Whether interleaving is enabled. Not available for fibre lines | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
