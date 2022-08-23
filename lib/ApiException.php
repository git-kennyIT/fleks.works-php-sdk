<?php
/**
 * ApiException
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
 * Do not edit the class manually.
 */

namespace OpenAPI\Client;

use \Exception;

/**
 * ApiException Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ApiException extends Exception
{
    /**
     * The HTTP body of the server response either as Json or string.
     *
     * @var \stdClass|string|null
     */
    protected $responseBody;

    /**
     * The HTTP header of the server response.
     *
     * @var string[]|null
     */
    protected $responseHeaders;

    /**
     * The deserialized response object
     *
     * @var \stdClass|string|null
     */
    protected $responseObject;

    /**
     * Constructor
     *
     * @param string                $message         Error message
     * @param int                   $code            HTTP status code
     * @param string[]|null         $responseHeaders HTTP response header
     * @param \stdClass|string|null $responseBody    HTTP decoded body of the server response either as \stdClass or string
     */
    public function __construct($message = "", $code = 0, $responseHeaders = [], $responseBody = null)
    {
        parent::__construct($message, $code);
        $this->responseHeaders = $responseHeaders;
        $this->responseBody = $responseBody;
    }

    /**
     * Gets the HTTP response header
     *
     * @return string[]|null HTTP response header
     */
    public function getResponseHeaders()
    {
        return $this->responseHeaders;
    }

    /**
     * Gets the HTTP body of the server response either as Json or string
     *
     * @return \stdClass|string|null HTTP body of the server response either as \stdClass or string
     */
    public function getResponseBody()
    {
        return $this->responseBody;
    }

    /**
     * Sets the deserialized response object (during deserialization)
     *
     * @param mixed $obj Deserialized response object
     *
     * @return void
     */
    public function setResponseObject($obj)
    {
        $this->responseObject = $obj;
    }

    /**
     * Gets the deserialized response object (during deserialization)
     *
     * @return mixed the deserialized response object
     */
    public function getResponseObject()
    {
        return $this->responseObject;
    }
}