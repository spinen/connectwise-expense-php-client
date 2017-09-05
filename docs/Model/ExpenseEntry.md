# ExpenseEntry

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional] 
**company** | [**\Spinen\ConnectWise\Clients\Expense\Spinen\ConnectWise\Clients\Expense\Model\CompanyReference**](CompanyReference.md) | Company or chargeToType is required | [optional] 
**charge_to_id** | **int** |  | [optional] 
**charge_to_type** | **string** | Company or chargeToType is required | [optional] 
**type** | [**\Spinen\ConnectWise\Clients\Expense\Spinen\ConnectWise\Clients\Expense\Model\ExpenseTypeReference**](ExpenseTypeReference.md) |  | 
**member** | [**\Spinen\ConnectWise\Clients\Expense\Spinen\ConnectWise\Clients\Expense\Model\MemberReference**](MemberReference.md) |  | [optional] 
**payment_method** | [**\Spinen\ConnectWise\Clients\Expense\Spinen\ConnectWise\Clients\Expense\Model\PaymentMethodReference**](PaymentMethodReference.md) |  | [optional] 
**classification** | [**\Spinen\ConnectWise\Clients\Expense\Spinen\ConnectWise\Clients\Expense\Model\ClassificationReference**](ClassificationReference.md) |  | [optional] 
**amount** | **double** |  | 
**billable_option** | **string** |  | 
**date** | [**\DateTime**](\DateTime.md) |  | 
**location_id** | **int** |  | [optional] 
**business_unit_id** | **int** |  | [optional] 
**notes** | **string** |  | [optional] 
**agreement** | [**\Spinen\ConnectWise\Clients\Expense\Spinen\ConnectWise\Clients\Expense\Model\AgreementReference**](AgreementReference.md) |  | [optional] 
**invoice_amount** | **double** |  | [optional] 
**taxes** | [**\Spinen\ConnectWise\Clients\Expense\Spinen\ConnectWise\Clients\Expense\Model\ExpenseTax[]**](ExpenseTax.md) |  | [optional] 
**invoice** | [**\Spinen\ConnectWise\Clients\Expense\Spinen\ConnectWise\Clients\Expense\Model\InvoiceReference**](InvoiceReference.md) |  | [optional] 
**_info** | [**\Spinen\ConnectWise\Clients\Expense\Spinen\ConnectWise\Clients\Expense\Model\Metadata**](Metadata.md) | Metadata of the entity | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


