<?php
/**
 * ExpenseEntriesApi
 * PHP version 5
 *
 * @category Class
 * @package  Spinen\ConnectWise\Clients\Expense
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Expense API
 *
 * ConnectWise Expense API
 *
 * OpenAPI spec version: 1.0.0
 * Contact: platform@connectwise.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Spinen\ConnectWise\Clients\Expense\Api;

use \Spinen\ConnectWise\Clients\Expense\ApiClient;
use \Spinen\ConnectWise\Clients\Expense\ApiException;
use \Spinen\ConnectWise\Clients\Expense\Configuration;
use \Spinen\ConnectWise\Clients\Expense\ObjectSerializer;

/**
 * ExpenseEntriesApi Class Doc Comment
 *
 * @category Class
 * @package  Spinen\ConnectWise\Clients\Expense
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ExpenseEntriesApi
{
    /**
     * API Client
     *
     * @var \Spinen\ConnectWise\Clients\Expense\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \Spinen\ConnectWise\Clients\Expense\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\Spinen\ConnectWise\Clients\Expense\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \Spinen\ConnectWise\Clients\Expense\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \Spinen\ConnectWise\Clients\Expense\ApiClient $apiClient set the API client
     *
     * @return ExpenseEntriesApi
     */
    public function setApiClient(\Spinen\ConnectWise\Clients\Expense\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation expenseEntriesCountGet
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Expense API generated by Swagger Code Generator.
     *
     * @param string $conditions  (optional)
     * @param string $custom_field_conditions  (optional)
     * @param string $child_conditions  (optional)
     * @throws \Spinen\ConnectWise\Clients\Expense\ApiException on non-2xx response
     * @return \Spinen\ConnectWise\Clients\Expense\Model\Count
     */
    public function expenseEntriesCountGet($conditions = null, $custom_field_conditions = null, $child_conditions = null)
    {
        list($response) = $this->expenseEntriesCountGetWithHttpInfo($conditions, $custom_field_conditions, $child_conditions);
        return $response;
    }

    /**
     * Operation expenseEntriesCountGetWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Expense API generated by Swagger Code Generator.
     *
     * @param string $conditions  (optional)
     * @param string $custom_field_conditions  (optional)
     * @param string $child_conditions  (optional)
     * @throws \Spinen\ConnectWise\Clients\Expense\ApiException on non-2xx response
     * @return array of \Spinen\ConnectWise\Clients\Expense\Model\Count, HTTP status code, HTTP response headers (array of strings)
     */
    public function expenseEntriesCountGetWithHttpInfo($conditions = null, $custom_field_conditions = null, $child_conditions = null)
    {
        // parse inputs
        $resourcePath = "/expense/entries/count";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // query params
        if ($conditions !== null) {
            $queryParams['conditions'] = $this->apiClient->getSerializer()->toQueryValue($conditions);
        }
        // query params
        if ($custom_field_conditions !== null) {
            $queryParams['customFieldConditions'] = $this->apiClient->getSerializer()->toQueryValue($custom_field_conditions);
        }
        // query params
        if ($child_conditions !== null) {
            $queryParams['childConditions'] = $this->apiClient->getSerializer()->toQueryValue($child_conditions);
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires HTTP basic authentication
        if (strlen($this->apiClient->getConfig()->getUsername()) !== 0 or strlen($this->apiClient->getConfig()->getPassword()) !== 0) {
            $headerParams['Authorization'] = 'Basic ' . base64_encode($this->apiClient->getConfig()->getUsername() . ":" . $this->apiClient->getConfig()->getPassword());
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Spinen\ConnectWise\Clients\Expense\Model\Count',
                '/expense/entries/count'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Spinen\ConnectWise\Clients\Expense\Model\Count', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Expense\Model\Count', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Expense\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation expenseEntriesGet
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Expense API generated by Swagger Code Generator.
     *
     * @param string $conditions  (optional)
     * @param string $order_by  (optional)
     * @param string $childconditions  (optional)
     * @param string $customfieldconditions  (optional)
     * @param int $page  (optional)
     * @param int $page_size  (optional)
     * @throws \Spinen\ConnectWise\Clients\Expense\ApiException on non-2xx response
     * @return \Spinen\ConnectWise\Clients\Expense\Model\ExpenseEntry[]
     */
    public function expenseEntriesGet($conditions = null, $order_by = null, $childconditions = null, $customfieldconditions = null, $page = null, $page_size = null)
    {
        list($response) = $this->expenseEntriesGetWithHttpInfo($conditions, $order_by, $childconditions, $customfieldconditions, $page, $page_size);
        return $response;
    }

    /**
     * Operation expenseEntriesGetWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Expense API generated by Swagger Code Generator.
     *
     * @param string $conditions  (optional)
     * @param string $order_by  (optional)
     * @param string $childconditions  (optional)
     * @param string $customfieldconditions  (optional)
     * @param int $page  (optional)
     * @param int $page_size  (optional)
     * @throws \Spinen\ConnectWise\Clients\Expense\ApiException on non-2xx response
     * @return array of \Spinen\ConnectWise\Clients\Expense\Model\ExpenseEntry[], HTTP status code, HTTP response headers (array of strings)
     */
    public function expenseEntriesGetWithHttpInfo($conditions = null, $order_by = null, $childconditions = null, $customfieldconditions = null, $page = null, $page_size = null)
    {
        // parse inputs
        $resourcePath = "/expense/entries";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // query params
        if ($conditions !== null) {
            $queryParams['conditions'] = $this->apiClient->getSerializer()->toQueryValue($conditions);
        }
        // query params
        if ($order_by !== null) {
            $queryParams['orderBy'] = $this->apiClient->getSerializer()->toQueryValue($order_by);
        }
        // query params
        if ($childconditions !== null) {
            $queryParams['childconditions'] = $this->apiClient->getSerializer()->toQueryValue($childconditions);
        }
        // query params
        if ($customfieldconditions !== null) {
            $queryParams['customfieldconditions'] = $this->apiClient->getSerializer()->toQueryValue($customfieldconditions);
        }
        // query params
        if ($page !== null) {
            $queryParams['page'] = $this->apiClient->getSerializer()->toQueryValue($page);
        }
        // query params
        if ($page_size !== null) {
            $queryParams['pageSize'] = $this->apiClient->getSerializer()->toQueryValue($page_size);
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires HTTP basic authentication
        if (strlen($this->apiClient->getConfig()->getUsername()) !== 0 or strlen($this->apiClient->getConfig()->getPassword()) !== 0) {
            $headerParams['Authorization'] = 'Basic ' . base64_encode($this->apiClient->getConfig()->getUsername() . ":" . $this->apiClient->getConfig()->getPassword());
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Spinen\ConnectWise\Clients\Expense\Model\ExpenseEntry[]',
                '/expense/entries'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Spinen\ConnectWise\Clients\Expense\Model\ExpenseEntry[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Expense\Model\ExpenseEntry[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Expense\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation expenseEntriesIdDelete
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Expense API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @throws \Spinen\ConnectWise\Clients\Expense\ApiException on non-2xx response
     * @return void
     */
    public function expenseEntriesIdDelete($id)
    {
        list($response) = $this->expenseEntriesIdDeleteWithHttpInfo($id);
        return $response;
    }

    /**
     * Operation expenseEntriesIdDeleteWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Expense API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @throws \Spinen\ConnectWise\Clients\Expense\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function expenseEntriesIdDeleteWithHttpInfo($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling expenseEntriesIdDelete');
        }
        // parse inputs
        $resourcePath = "/expense/entries/{id}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept([]);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires HTTP basic authentication
        if (strlen($this->apiClient->getConfig()->getUsername()) !== 0 or strlen($this->apiClient->getConfig()->getPassword()) !== 0) {
            $headerParams['Authorization'] = 'Basic ' . base64_encode($this->apiClient->getConfig()->getUsername() . ":" . $this->apiClient->getConfig()->getPassword());
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'DELETE',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/expense/entries/{id}'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Expense\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation expenseEntriesIdGet
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Expense API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @throws \Spinen\ConnectWise\Clients\Expense\ApiException on non-2xx response
     * @return \Spinen\ConnectWise\Clients\Expense\Model\ExpenseEntry
     */
    public function expenseEntriesIdGet($id)
    {
        list($response) = $this->expenseEntriesIdGetWithHttpInfo($id);
        return $response;
    }

    /**
     * Operation expenseEntriesIdGetWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Expense API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @throws \Spinen\ConnectWise\Clients\Expense\ApiException on non-2xx response
     * @return array of \Spinen\ConnectWise\Clients\Expense\Model\ExpenseEntry, HTTP status code, HTTP response headers (array of strings)
     */
    public function expenseEntriesIdGetWithHttpInfo($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling expenseEntriesIdGet');
        }
        // parse inputs
        $resourcePath = "/expense/entries/{id}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires HTTP basic authentication
        if (strlen($this->apiClient->getConfig()->getUsername()) !== 0 or strlen($this->apiClient->getConfig()->getPassword()) !== 0) {
            $headerParams['Authorization'] = 'Basic ' . base64_encode($this->apiClient->getConfig()->getUsername() . ":" . $this->apiClient->getConfig()->getPassword());
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Spinen\ConnectWise\Clients\Expense\Model\ExpenseEntry',
                '/expense/entries/{id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Spinen\ConnectWise\Clients\Expense\Model\ExpenseEntry', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Expense\Model\ExpenseEntry', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Expense\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation expenseEntriesIdPatch
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Expense API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param \Spinen\ConnectWise\Clients\Expense\Model\PatchOperation[] $operations  (required)
     * @throws \Spinen\ConnectWise\Clients\Expense\ApiException on non-2xx response
     * @return \Spinen\ConnectWise\Clients\Expense\Model\ExpenseEntry
     */
    public function expenseEntriesIdPatch($id, $operations)
    {
        list($response) = $this->expenseEntriesIdPatchWithHttpInfo($id, $operations);
        return $response;
    }

    /**
     * Operation expenseEntriesIdPatchWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Expense API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param \Spinen\ConnectWise\Clients\Expense\Model\PatchOperation[] $operations  (required)
     * @throws \Spinen\ConnectWise\Clients\Expense\ApiException on non-2xx response
     * @return array of \Spinen\ConnectWise\Clients\Expense\Model\ExpenseEntry, HTTP status code, HTTP response headers (array of strings)
     */
    public function expenseEntriesIdPatchWithHttpInfo($id, $operations)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling expenseEntriesIdPatch');
        }
        // verify the required parameter 'operations' is set
        if ($operations === null) {
            throw new \InvalidArgumentException('Missing the required parameter $operations when calling expenseEntriesIdPatch');
        }
        // parse inputs
        $resourcePath = "/expense/entries/{id}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($operations)) {
            $_tempBody = $operations;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires HTTP basic authentication
        if (strlen($this->apiClient->getConfig()->getUsername()) !== 0 or strlen($this->apiClient->getConfig()->getPassword()) !== 0) {
            $headerParams['Authorization'] = 'Basic ' . base64_encode($this->apiClient->getConfig()->getUsername() . ":" . $this->apiClient->getConfig()->getPassword());
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'PATCH',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Spinen\ConnectWise\Clients\Expense\Model\ExpenseEntry',
                '/expense/entries/{id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Spinen\ConnectWise\Clients\Expense\Model\ExpenseEntry', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Expense\Model\ExpenseEntry', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Expense\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation expenseEntriesIdPut
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Expense API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param \Spinen\ConnectWise\Clients\Expense\Model\ExpenseEntry $expense_entry  (required)
     * @throws \Spinen\ConnectWise\Clients\Expense\ApiException on non-2xx response
     * @return \Spinen\ConnectWise\Clients\Expense\Model\ExpenseEntry
     */
    public function expenseEntriesIdPut($id, $expense_entry)
    {
        list($response) = $this->expenseEntriesIdPutWithHttpInfo($id, $expense_entry);
        return $response;
    }

    /**
     * Operation expenseEntriesIdPutWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Expense API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param \Spinen\ConnectWise\Clients\Expense\Model\ExpenseEntry $expense_entry  (required)
     * @throws \Spinen\ConnectWise\Clients\Expense\ApiException on non-2xx response
     * @return array of \Spinen\ConnectWise\Clients\Expense\Model\ExpenseEntry, HTTP status code, HTTP response headers (array of strings)
     */
    public function expenseEntriesIdPutWithHttpInfo($id, $expense_entry)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling expenseEntriesIdPut');
        }
        // verify the required parameter 'expense_entry' is set
        if ($expense_entry === null) {
            throw new \InvalidArgumentException('Missing the required parameter $expense_entry when calling expenseEntriesIdPut');
        }
        // parse inputs
        $resourcePath = "/expense/entries/{id}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($expense_entry)) {
            $_tempBody = $expense_entry;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires HTTP basic authentication
        if (strlen($this->apiClient->getConfig()->getUsername()) !== 0 or strlen($this->apiClient->getConfig()->getPassword()) !== 0) {
            $headerParams['Authorization'] = 'Basic ' . base64_encode($this->apiClient->getConfig()->getUsername() . ":" . $this->apiClient->getConfig()->getPassword());
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Spinen\ConnectWise\Clients\Expense\Model\ExpenseEntry',
                '/expense/entries/{id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Spinen\ConnectWise\Clients\Expense\Model\ExpenseEntry', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Expense\Model\ExpenseEntry', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Expense\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation expenseEntriesPost
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Expense API generated by Swagger Code Generator.
     *
     * @param \Spinen\ConnectWise\Clients\Expense\Model\ExpenseEntry $expense_entry  (required)
     * @throws \Spinen\ConnectWise\Clients\Expense\ApiException on non-2xx response
     * @return \Spinen\ConnectWise\Clients\Expense\Model\ExpenseEntry
     */
    public function expenseEntriesPost($expense_entry)
    {
        list($response) = $this->expenseEntriesPostWithHttpInfo($expense_entry);
        return $response;
    }

    /**
     * Operation expenseEntriesPostWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Expense API generated by Swagger Code Generator.
     *
     * @param \Spinen\ConnectWise\Clients\Expense\Model\ExpenseEntry $expense_entry  (required)
     * @throws \Spinen\ConnectWise\Clients\Expense\ApiException on non-2xx response
     * @return array of \Spinen\ConnectWise\Clients\Expense\Model\ExpenseEntry, HTTP status code, HTTP response headers (array of strings)
     */
    public function expenseEntriesPostWithHttpInfo($expense_entry)
    {
        // verify the required parameter 'expense_entry' is set
        if ($expense_entry === null) {
            throw new \InvalidArgumentException('Missing the required parameter $expense_entry when calling expenseEntriesPost');
        }
        // parse inputs
        $resourcePath = "/expense/entries";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($expense_entry)) {
            $_tempBody = $expense_entry;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires HTTP basic authentication
        if (strlen($this->apiClient->getConfig()->getUsername()) !== 0 or strlen($this->apiClient->getConfig()->getPassword()) !== 0) {
            $headerParams['Authorization'] = 'Basic ' . base64_encode($this->apiClient->getConfig()->getUsername() . ":" . $this->apiClient->getConfig()->getPassword());
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Spinen\ConnectWise\Clients\Expense\Model\ExpenseEntry',
                '/expense/entries'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Spinen\ConnectWise\Clients\Expense\Model\ExpenseEntry', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Expense\Model\ExpenseEntry', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Expense\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
