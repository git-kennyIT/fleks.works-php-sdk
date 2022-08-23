# OpenAPI\Client\JobCategoriesApi

All URIs are relative to https://api.fleks.works, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**v1JobCategoriesGet()**](JobCategoriesApi.md#v1JobCategoriesGet) | **GET** /v1/job-categories/ | Get all the categories |


## `v1JobCategoriesGet()`

```php
v1JobCategoriesGet($limit, $page)
```

Get all the categories



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\JobCategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 10; // float | Amount of the returned results per page (max = 1000)
$page = 1; // float | The returned page (will be based on the limit that is set)

try {
    $apiInstance->v1JobCategoriesGet($limit, $page);
} catch (Exception $e) {
    echo 'Exception when calling JobCategoriesApi->v1JobCategoriesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **float**| Amount of the returned results per page (max &#x3D; 1000) | |
| **page** | **float**| The returned page (will be based on the limit that is set) | |

### Return type

void (empty response body)

### Authorization

[apiKeyAuth](../../README.md#apiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)