<?php
/**
 * ExpenseTypesApi
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

namespace Spinen\ConnectWise\Clients\Expense\Spinen\ConnectWise\Clients\Expense\Api;

use \Spinen\ConnectWise\Clients\Expense\ApiClient;
use \Spinen\ConnectWise\Clients\Expense\ApiException;
use \Spinen\ConnectWise\Clients\Expense\Configuration;
use \Spinen\ConnectWise\Clients\Expense\ObjectSerializer;

/**
 * ExpenseTypesApi Class Doc Comment
 *
 * @category Class
 * @package  Spinen\ConnectWise\Clients\Expense
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ExpenseTypesApi
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
     * @return ExpenseTypesApi
     */
    public function setApiClient(\Spinen\ConnectWise\Clients\Expense\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation expenseTypesCountGet
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Expense API generated by Swagger Code Generator.
     *
     * @param string $conditions  (optional)
     * @throws \Spinen\ConnectWise\Clients\Expense\ApiException on non-2xx response
     * @return \Spinen\ConnectWise\Clients\Expense\Spinen\ConnectWise\Clients\Expense\Model\Count
     */
    public function expenseTypesCountGet($conditions = null)
    {
        list($response) = $this->expenseTypesCountGetWithHttpInfo($conditions);
        return $response;
    }

    /**
     * Operation expenseTypesCountGetWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Expense API generated by Swagger Code Generator.
     *
     * @param string $conditions  (optional)
     * @throws \Spinen\ConnectWise\Clients\Expense\ApiException on non-2xx response
     * @return array of \Spinen\ConnectWise\Clients\Expense\Spinen\ConnectWise\Clients\Expense\Model\Count, HTTP status code, HTTP response headers (array of strings)
     */
    public function expenseTypesCountGetWithHttpInfo($conditions = null)
    {
        // parse inputs
        $resourcePath = "/expense/types/count";
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
                '\Spinen\ConnectWise\Clients\Expense\Spinen\ConnectWise\Clients\Expense\Model\Count',
                '/expense/types/count'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Spinen\ConnectWise\Clients\Expense\Spinen\ConnectWise\Clients\Expense\Model\Count', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Expense\Spinen\ConnectWise\Clients\Expense\Model\Count', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Expense\Spinen\ConnectWise\Clients\Expense\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation expenseTypesGet
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
     * @return \Spinen\ConnectWise\Clients\Expense\Spinen\ConnectWise\Clients\Expense\Model\ExpenseType[]
     */
    public function expenseTypesGet($conditions = null, $order_by = null, $childconditions = null, $customfieldconditions = null, $page = null, $page_size = null)
    {
        list($response) = $this->expenseTypesGetWithHttpInfo($conditions, $order_by, $childconditions, $customfieldconditions, $page, $page_size);
        return $response;
    }

    /**
     * Operation expenseTypesGetWithHttpInfo
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
     * @return array of \Spinen\ConnectWise\Clients\Expense\Spinen\ConnectWise\Clients\Expense\Model\ExpenseType[], HTTP status code, HTTP response headers (array of strings)
     */
    public function expenseTypesGetWithHttpInfo($conditions = null, $order_by = null, $childconditions = null, $customfieldconditions = null, $page = null, $page_size = null)
    {
        // parse inputs
        $resourcePath = "/expense/types";
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
                '\Spinen\ConnectWise\Clients\Expense\Spinen\ConnectWise\Clients\Expense\Model\ExpenseType[]',
                '/expense/types'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Spinen\ConnectWise\Clients\Expense\Spinen\ConnectWise\Clients\Expense\Model\ExpenseType[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Expense\Spinen\ConnectWise\Clients\Expense\Model\ExpenseType[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Expense\Spinen\ConnectWise\Clients\Expense\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation expenseTypesIdDelete
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Expense API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @throws \Spinen\ConnectWise\Clients\Expense\ApiException on non-2xx response
     * @return void
     */
    public function expenseTypesIdDelete($id)
    {
        list($response) = $this->expenseTypesIdDeleteWithHttpInfo($id);
        return $response;
    }

    /**
     * Operation expenseTypesIdDeleteWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Expense API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @throws \Spinen\ConnectWise\Clients\Expense\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function expenseTypesIdDeleteWithHttpInfo($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling expenseTypesIdDelete');
        }
        // parse inputs
        $resourcePath = "/expense/types/{id}";
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
                '/expense/types/{id}'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Expense\Spinen\ConnectWise\Clients\Expense\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation expenseTypesIdGet
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Expense API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @throws \Spinen\ConnectWise\Clients\Expense\ApiException on non-2xx response
     * @return \Spinen\ConnectWise\Clients\Expense\Spinen\ConnectWise\Clients\Expense\Model\ExpenseType
     */
    public function expenseTypesIdGet($id)
    {
        list($response) = $this->expenseTypesIdGetWithHttpInfo($id);
        return $response;
    }

    /**
     * Operation expenseTypesIdGetWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Expense API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @throws \Spinen\ConnectWise\Clients\Expense\ApiException on non-2xx response
     * @return array of \Spinen\ConnectWise\Clients\Expense\Spinen\ConnectWise\Clients\Expense\Model\ExpenseType, HTTP status code, HTTP response headers (array of strings)
     */
    public function expenseTypesIdGetWithHttpInfo($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling expenseTypesIdGet');
        }
        // parse inputs
        $resourcePath = "/expense/types/{id}";
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
                '\Spinen\ConnectWise\Clients\Expense\Spinen\ConnectWise\Clients\Expense\Model\ExpenseType',
                '/expense/types/{id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Spinen\ConnectWise\Clients\Expense\Spinen\ConnectWise\Clients\Expense\Model\ExpenseType', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Expense\Spinen\ConnectWise\Clients\Expense\Model\ExpenseType', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Expense\Spinen\ConnectWise\Clients\Expense\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation expenseTypesIdPatch
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Expense API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param \Spinen\ConnectWise\Clients\Expense\Spinen\ConnectWise\Clients\Expense\Model\PatchOperation[] $operations  (required)
     * @throws \Spinen\ConnectWise\Clients\Expense\ApiException on non-2xx response
     * @return \Spinen\ConnectWise\Clients\Expense\Spinen\ConnectWise\Clients\Expense\Model\ExpenseType
     */
    public function expenseTypesIdPatch($id, $operations)
    {
        list($response) = $this->expenseTypesIdPatchWithHttpInfo($id, $operations);
        return $response;
    }

    /**
     * Operation expenseTypesIdPatchWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Expense API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param \Spinen\ConnectWise\Clients\Expense\Spinen\ConnectWise\Clients\Expense\Model\PatchOperation[] $operations  (required)
     * @throws \Spinen\ConnectWise\Clients\Expense\ApiException on non-2xx response
     * @return array of \Spinen\ConnectWise\Clients\Expense\Spinen\ConnectWise\Clients\Expense\Model\ExpenseType, HTTP status code, HTTP response headers (array of strings)
     */
    public function expenseTypesIdPatchWithHttpInfo($id, $operations)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling expenseTypesIdPatch');
        }
        // verify the required parameter 'operations' is set
        if ($operations === null) {
            throw new \InvalidArgumentException('Missing the required parameter $operations when calling expenseTypesIdPatch');
        }
        // parse inputs
        $resourcePath = "/expense/types/{id}";
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
                '\Spinen\ConnectWise\Clients\Expense\Spinen\ConnectWise\Clients\Expense\Model\ExpenseType',
                '/expense/types/{id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Spinen\ConnectWise\Clients\Expense\Spinen\ConnectWise\Clients\Expense\Model\ExpenseType', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Expense\Spinen\ConnectWise\Clients\Expense\Model\ExpenseType', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Expense\Spinen\ConnectWise\Clients\Expense\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation expenseTypesIdPut
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Expense API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param \Spinen\ConnectWise\Clients\Expense\Spinen\ConnectWise\Clients\Expense\Model\ExpenseType $expense_type  (required)
     * @throws \Spinen\ConnectWise\Clients\Expense\ApiException on non-2xx response
     * @return \Spinen\ConnectWise\Clients\Expense\Spinen\ConnectWise\Clients\Expense\Model\ExpenseType
     */
    public function expenseTypesIdPut($id, $expense_type)
    {
        list($response) = $this->expenseTypesIdPutWithHttpInfo($id, $expense_type);
        return $response;
    }

    /**
     * Operation expenseTypesIdPutWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Expense API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param \Spinen\ConnectWise\Clients\Expense\Spinen\ConnectWise\Clients\Expense\Model\ExpenseType $expense_type  (required)
     * @throws \Spinen\ConnectWise\Clients\Expense\ApiException on non-2xx response
     * @return array of \Spinen\ConnectWise\Clients\Expense\Spinen\ConnectWise\Clients\Expense\Model\ExpenseType, HTTP status code, HTTP response headers (array of strings)
     */
    public function expenseTypesIdPutWithHttpInfo($id, $expense_type)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling expenseTypesIdPut');
        }
        // verify the required parameter 'expense_type' is set
        if ($expense_type === null) {
            throw new \InvalidArgumentException('Missing the required parameter $expense_type when calling expenseTypesIdPut');
        }
        // parse inputs
        $resourcePath = "/expense/types/{id}";
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
        if (isset($expense_type)) {
            $_tempBody = $expense_type;
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
                '\Spinen\ConnectWise\Clients\Expense\Spinen\ConnectWise\Clients\Expense\Model\ExpenseType',
                '/expense/types/{id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Spinen\ConnectWise\Clients\Expense\Spinen\ConnectWise\Clients\Expense\Model\ExpenseType', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Expense\Spinen\ConnectWise\Clients\Expense\Model\ExpenseType', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Expense\Spinen\ConnectWise\Clients\Expense\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation expenseTypesPost
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Expense API generated by Swagger Code Generator.
     *
     * @param \Spinen\ConnectWise\Clients\Expense\Spinen\ConnectWise\Clients\Expense\Model\ExpenseType $expense_type  (required)
     * @throws \Spinen\ConnectWise\Clients\Expense\ApiException on non-2xx response
     * @return \Spinen\ConnectWise\Clients\Expense\Spinen\ConnectWise\Clients\Expense\Model\ExpenseType
     */
    public function expenseTypesPost($expense_type)
    {
        list($response) = $this->expenseTypesPostWithHttpInfo($expense_type);
        return $response;
    }

    /**
     * Operation expenseTypesPostWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Expense API generated by Swagger Code Generator.
     *
     * @param \Spinen\ConnectWise\Clients\Expense\Spinen\ConnectWise\Clients\Expense\Model\ExpenseType $expense_type  (required)
     * @throws \Spinen\ConnectWise\Clients\Expense\ApiException on non-2xx response
     * @return array of \Spinen\ConnectWise\Clients\Expense\Spinen\ConnectWise\Clients\Expense\Model\ExpenseType, HTTP status code, HTTP response headers (array of strings)
     */
    public function expenseTypesPostWithHttpInfo($expense_type)
    {
        // verify the required parameter 'expense_type' is set
        if ($expense_type === null) {
            throw new \InvalidArgumentException('Missing the required parameter $expense_type when calling expenseTypesPost');
        }
        // parse inputs
        $resourcePath = "/expense/types";
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
        if (isset($expense_type)) {
            $_tempBody = $expense_type;
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
                '\Spinen\ConnectWise\Clients\Expense\Spinen\ConnectWise\Clients\Expense\Model\ExpenseType',
                '/expense/types'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Spinen\ConnectWise\Clients\Expense\Spinen\ConnectWise\Clients\Expense\Model\ExpenseType', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Expense\Spinen\ConnectWise\Clients\Expense\Model\ExpenseType', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Expense\Spinen\ConnectWise\Clients\Expense\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
