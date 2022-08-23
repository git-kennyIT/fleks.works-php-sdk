# OpenAPIClient-php

 

# Introduction

This is the main API of the Fleks - Plan database and can be used by clients and developers to interact with their own applications or integrations like powerBI.

# What is a REST API ?

  The REST API is a way to retrieve data programmatically in a widely established data format called JSON

The 4 important parts of a request are:

  - The endpoint
  - The headers
  - The method
  - The data      

# How to consume this API ?

### To request data
  - click on \"Authentication\" on the sidebar and enter your API key in the input box
  - click \"SET\"
  - click \"TRY\" on any of the endpoints available in the sidebar

  *The key will be saved for each subsequent request when using the web frontend for ease-of-use*

# Data format

The data will be a **JSON object** with 2 keys named **meta** and **results** 
<br/><br/>

```javascript
{ 
  \"meta\": {
    \"rows\": 5,
    \"page\": 1,
    // etc...
  },
  \"results\" : [
    {
      \"id\" : 1,
      \"name\" : \"bob\"
      // etc...
    }
  ]
}
```


## meta
  - contains an object with metadata and pagination info

## results
  - contains the array of objects with the actual query results

---  

### Developers who want to use postman or cURL:

```javascript
  https://api.fleks.works/v1/{endpoint}
  curl -X GET https://api.fleks.works/v1/{endpoint} -H \"X-API-KEY: {your_api_key}\" 
 ```

 ### Make sure to set the headers correctly if you have any issues:
 
 ```javascript
  'Content-Type': 'application/json'
  'X-API-KEY': {your_api_key}
 ```

 ### While it's technically safe over SSL to put a key as a query parameter, the URL is visible and logged on client and server, and as such this method is *not recommended*
  
 ```javascript
  Not Recommended
  https://api.fleks.works/v1/{endpoint}?X-API-KEY={your_api_key}
 ```

# On Rate limiting

### We have rate limiting in place to protect our servers and your data from brute force attacks or developer mistakes that might overload the server.
 



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



// Configure API key authorization: apiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AvailabilitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 10; // float | Amount of the returned results per page (max = 1000)
$page = 1; // float | The returned page (will be based on the limit that is set)

try {
    $apiInstance->v1AvailabilitiesGet($limit, $page);
} catch (Exception $e) {
    echo 'Exception when calling AvailabilitiesApi->v1AvailabilitiesGet: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.fleks.works*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AvailabilitiesApi* | [**v1AvailabilitiesGet**](docs/Api/AvailabilitiesApi.md#v1availabilitiesget) | **GET** /v1/availabilities/ | Get all the availabilities
*ClientsApi* | [**v1ClientsGet**](docs/Api/ClientsApi.md#v1clientsget) | **GET** /v1/clients/ | Get all the clients
*ContractsApi* | [**v1ContractsGet**](docs/Api/ContractsApi.md#v1contractsget) | **GET** /v1/contracts/ | Get all the contracts
*EmployeesApi* | [**v1EmployeesGet**](docs/Api/EmployeesApi.md#v1employeesget) | **GET** /v1/employees/ | Get all the employees
*EmployeesApi* | [**v1EmployeesPost**](docs/Api/EmployeesApi.md#v1employeespost) | **POST** /v1/employees/ | Add employee(s)
*JobCategoriesApi* | [**v1JobCategoriesGet**](docs/Api/JobCategoriesApi.md#v1jobcategoriesget) | **GET** /v1/job-categories/ | Get all the categories
*JobsApi* | [**v1JobsGet**](docs/Api/JobsApi.md#v1jobsget) | **GET** /v1/jobs/ | Get all the jobs
*ProjectsApi* | [**v1ProjectsGet**](docs/Api/ProjectsApi.md#v1projectsget) | **GET** /v1/projects/ | Get all the projects
*ShiftsApi* | [**v1ShiftsGet**](docs/Api/ShiftsApi.md#v1shiftsget) | **GET** /v1/shifts/ | Get all the Shifts
*UsersApi* | [**v1UsersGet**](docs/Api/UsersApi.md#v1usersget) | **GET** /v1/users/ | Get all the users

## Models

- [ClientsGetClientsInner](docs/Model/ClientsGetClientsInner.md)
- [EmployeesAddEmployeesInner](docs/Model/EmployeesAddEmployeesInner.md)
- [UsersAddUsersInner](docs/Model/UsersAddUsersInner.md)

## Authorization

### apiKeyAuth

- **Type**: API key
- **API key parameter name**: X-API-KEY
- **Location**: HTTP header


## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `0.1.2`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
