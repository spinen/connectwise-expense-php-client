# Spinen\ConnectWise\Clients\Expense\ExpenseTypesApi
Spinen&#39;s PHP ConnectWise Client for Expense API generated by Swagger Code Generator.

All URIs are relative to *https://api-na.myconnectwise.net/v4_6_release/apis/3.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**expenseTypesCountGet**](ExpenseTypesApi.md#expenseTypesCountGet) | **GET** /expense/types/count | 
[**expenseTypesGet**](ExpenseTypesApi.md#expenseTypesGet) | **GET** /expense/types | 
[**expenseTypesIdDelete**](ExpenseTypesApi.md#expenseTypesIdDelete) | **DELETE** /expense/types/{id} | 
[**expenseTypesIdGet**](ExpenseTypesApi.md#expenseTypesIdGet) | **GET** /expense/types/{id} | 
[**expenseTypesIdPatch**](ExpenseTypesApi.md#expenseTypesIdPatch) | **PATCH** /expense/types/{id} | 
[**expenseTypesIdPut**](ExpenseTypesApi.md#expenseTypesIdPut) | **PUT** /expense/types/{id} | 
[**expenseTypesPost**](ExpenseTypesApi.md#expenseTypesPost) | **POST** /expense/types | 


# **expenseTypesCountGet**
> \Spinen\ConnectWise\Clients\Expense\Model\Count expenseTypesCountGet($conditions)



Get Expense Types Count

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Expense\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Expense\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Expense\Api\ExpenseTypesApi();
$conditions = "conditions_example"; // string | 

try {
    $result = $api_instance->expenseTypesCountGet($conditions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpenseTypesApi->expenseTypesCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conditions** | **string**|  | [optional]

### Return type

[**\Spinen\ConnectWise\Clients\Expense\Model\Count**](../Model/Count.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **expenseTypesGet**
> \Spinen\ConnectWise\Clients\Expense\Model\ExpenseType[] expenseTypesGet($conditions, $order_by, $childconditions, $customfieldconditions, $page, $page_size)



Get Expense Types

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Expense\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Expense\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Expense\Api\ExpenseTypesApi();
$conditions = "conditions_example"; // string | 
$order_by = "order_by_example"; // string | 
$childconditions = "childconditions_example"; // string | 
$customfieldconditions = "customfieldconditions_example"; // string | 
$page = 56; // int | 
$page_size = 56; // int | 

try {
    $result = $api_instance->expenseTypesGet($conditions, $order_by, $childconditions, $customfieldconditions, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpenseTypesApi->expenseTypesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conditions** | **string**|  | [optional]
 **order_by** | **string**|  | [optional]
 **childconditions** | **string**|  | [optional]
 **customfieldconditions** | **string**|  | [optional]
 **page** | **int**|  | [optional]
 **page_size** | **int**|  | [optional]

### Return type

[**\Spinen\ConnectWise\Clients\Expense\Model\ExpenseType[]**](../Model/ExpenseType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **expenseTypesIdDelete**
> expenseTypesIdDelete($id)



Delete Expense Type By Id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Expense\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Expense\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Expense\Api\ExpenseTypesApi();
$id = 56; // int | 

try {
    $api_instance->expenseTypesIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling ExpenseTypesApi->expenseTypesIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **expenseTypesIdGet**
> \Spinen\ConnectWise\Clients\Expense\Model\ExpenseType expenseTypesIdGet($id)



Get Expense Type By Id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Expense\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Expense\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Expense\Api\ExpenseTypesApi();
$id = 56; // int | 

try {
    $result = $api_instance->expenseTypesIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpenseTypesApi->expenseTypesIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\Spinen\ConnectWise\Clients\Expense\Model\ExpenseType**](../Model/ExpenseType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **expenseTypesIdPatch**
> \Spinen\ConnectWise\Clients\Expense\Model\ExpenseType expenseTypesIdPatch($id, $operations)



Update Expense Type

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Expense\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Expense\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Expense\Api\ExpenseTypesApi();
$id = 56; // int | 
$operations = array(new PatchOperation()); // \Spinen\ConnectWise\Clients\Expense\Model\PatchOperation[] | 

try {
    $result = $api_instance->expenseTypesIdPatch($id, $operations);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpenseTypesApi->expenseTypesIdPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **operations** | [**\Spinen\ConnectWise\Clients\Expense\Model\PatchOperation[]**](../Model/PatchOperation.md)|  |

### Return type

[**\Spinen\ConnectWise\Clients\Expense\Model\ExpenseType**](../Model/ExpenseType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **expenseTypesIdPut**
> \Spinen\ConnectWise\Clients\Expense\Model\ExpenseType expenseTypesIdPut($id, $expense_type)



Replace Expense Type

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Expense\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Expense\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Expense\Api\ExpenseTypesApi();
$id = 56; // int | 
$expense_type = new \Spinen\ConnectWise\Clients\Expense\Model\ExpenseType(); // \Spinen\ConnectWise\Clients\Expense\Model\ExpenseType | 

try {
    $result = $api_instance->expenseTypesIdPut($id, $expense_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpenseTypesApi->expenseTypesIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **expense_type** | [**\Spinen\ConnectWise\Clients\Expense\Model\ExpenseType**](../Model/\Spinen\ConnectWise\Clients\Expense\Model\ExpenseType.md)|  |

### Return type

[**\Spinen\ConnectWise\Clients\Expense\Model\ExpenseType**](../Model/ExpenseType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **expenseTypesPost**
> \Spinen\ConnectWise\Clients\Expense\Model\ExpenseType expenseTypesPost($expense_type)



Create Expense Type

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Expense\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Expense\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Expense\Api\ExpenseTypesApi();
$expense_type = new \Spinen\ConnectWise\Clients\Expense\Model\ExpenseType(); // \Spinen\ConnectWise\Clients\Expense\Model\ExpenseType | 

try {
    $result = $api_instance->expenseTypesPost($expense_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpenseTypesApi->expenseTypesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **expense_type** | [**\Spinen\ConnectWise\Clients\Expense\Model\ExpenseType**](../Model/\Spinen\ConnectWise\Clients\Expense\Model\ExpenseType.md)|  |

### Return type

[**\Spinen\ConnectWise\Clients\Expense\Model\ExpenseType**](../Model/ExpenseType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

