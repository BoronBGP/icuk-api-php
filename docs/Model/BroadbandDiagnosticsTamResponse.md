# # BroadbandDiagnosticsTamResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**success** | **bool** | Whether the diagnostics request is successful | [optional]
**requested_date** | **\DateTime** | Test requested date | [optional]
**completed_date** | **\DateTime** | Test completed date | [optional]
**outcome** | **string** | Test outcome | [optional]
**diagnosis_code** | **string** | Test diagnosis code | [optional]
**fault_location** | **string** | Fault location. Not available for fibre lines | [optional]
**fault_description** | **string** | Fault description. Not available for fibre lines | [optional]
**fibre_info** | [**\OpenAPI\Client\Model\BroadbandDiagnosticsTamFibreResponse**](BroadbandDiagnosticsTamFibreResponse.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
