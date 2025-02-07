# BillaBear\InvoicesApi

All URIs are relative to *https://{customerId}.billabear.cloud/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**chargeInvoice**](InvoicesApi.md#chargeinvoice) | **POST** /invoice/{invoiceId}/charge | Charge Invoice
[**downloadInvoice**](InvoicesApi.md#downloadinvoice) | **GET** /invoice/{invoiceId}/download | Download Invoice
[**getInvoicesForCustomer**](InvoicesApi.md#getinvoicesforcustomer) | **GET** /customer/{customerId}/invoices | List Customer Invoices

# **chargeInvoice**
> \BillaBear\Model\InlineResponse20014 chargeInvoice($invoice_id)

Charge Invoice

Attempts to charge a card that is on file for the invoice amount

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = BillaBear\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BillaBear\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new BillaBear\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invoice_id = "invoice_id_example"; // string | The id of the invoice

try {
    $result = $apiInstance->chargeInvoice($invoice_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->chargeInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoice_id** | **string**| The id of the invoice |

### Return type

[**\BillaBear\Model\InlineResponse20014**](../Model/InlineResponse20014.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **downloadInvoice**
> string downloadInvoice($invoice_id)

Download Invoice

Returns the pdf blob for the invoice

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = BillaBear\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BillaBear\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new BillaBear\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invoice_id = "invoice_id_example"; // string | The id of the invoice

try {
    $result = $apiInstance->downloadInvoice($invoice_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->downloadInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoice_id** | **string**| The id of the invoice |

### Return type

**string**

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/pdf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getInvoicesForCustomer**
> \BillaBear\Model\InlineResponse2006 getInvoicesForCustomer($customer_id)

List Customer Invoices

List Customer Invoices

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = BillaBear\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BillaBear\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new BillaBear\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = "customer_id_example"; // string | The id of the customer to retrieve

try {
    $result = $apiInstance->getInvoicesForCustomer($customer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->getInvoicesForCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**| The id of the customer to retrieve |

### Return type

[**\BillaBear\Model\InlineResponse2006**](../Model/InlineResponse2006.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

