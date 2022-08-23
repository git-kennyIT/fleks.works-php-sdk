<?php
/**
 * ShiftsApiTest
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Fleks-Plan API
 *
 * # Introduction  This is the main API of the Fleks - Plan database and can be used by clients and developers to interact with their own applications or integrations like powerBI.  # What is a REST API ?    The REST API is a way to retrieve data programmatically in a widely established data format called JSON  The 4 important parts of a request are:    - The endpoint   - The headers   - The method   - The data        # How to consume this API ?  ### To request data   - click on \"Authentication\" on the sidebar and enter your API key in the input box   - click \"SET\"   - click \"TRY\" on any of the endpoints available in the sidebar    *The key will be saved for each subsequent request when using the web frontend for ease-of-use*  # Data format  The data will be a **JSON object** with 2 keys named **meta** and **results**  <br/><br/>  ```javascript {    \"meta\": {     \"rows\": 5,     \"page\": 1,     // etc...   },   \"results\" : [     {       \"id\" : 1,       \"name\" : \"bob\"       // etc...     }   ] } ```   ## meta   - contains an object with metadata and pagination info  ## results   - contains the array of objects with the actual query results  ---    ### Developers who want to use postman or cURL:  ```javascript   https://api.fleks.works/v1/{endpoint}   curl -X GET https://api.fleks.works/v1/{endpoint} -H \"X-API-KEY: {your_api_key}\"   ```   ### Make sure to set the headers correctly if you have any issues:    ```javascript   'Content-Type': 'application/json'   'X-API-KEY': {your_api_key}  ```   ### While it's technically safe over SSL to put a key as a query parameter, the URL is visible and logged on client and server, and as such this method is *not recommended*     ```javascript   Not Recommended   https://api.fleks.works/v1/{endpoint}?X-API-KEY={your_api_key}  ```  # On Rate limiting  ### We have rate limiting in place to protect our servers and your data from brute force attacks or developer mistakes that might overload the server.
 *
 * The version of the OpenAPI document: 0.1.2
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.1.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Please update the test case below to test the endpoint.
 */

namespace OpenAPI\Client\Test\Api;

use \OpenAPI\Client\Configuration;
use \OpenAPI\Client\ApiException;
use \OpenAPI\Client\ObjectSerializer;
use PHPUnit\Framework\TestCase;

/**
 * ShiftsApiTest Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ShiftsApiTest extends TestCase
{

    /**
     * Setup before running any test cases
     */
    public static function setUpBeforeClass(): void
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp(): void
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown(): void
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass(): void
    {
    }

    /**
     * Test case for v1ShiftsGet
     *
     * Get all the Shifts.
     *
     */
    public function testV1ShiftsGet()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }
}
