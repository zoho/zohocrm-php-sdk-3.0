<?php 
namespace com\zoho\crm\api\users;

use com\zoho\crm\api\Header;
use com\zoho\crm\api\HeaderMap;
use com\zoho\crm\api\Param;
use com\zoho\crm\api\ParameterMap;
use com\zoho\crm\api\exception\SDKException;
use com\zoho\crm\api\util\CommonAPIHandler;
use com\zoho\crm\api\util\Constants;
use com\zoho\crm\api\util\APIResponse;

class UsersOperations
{

	/**
	 * The method to get users
	 * @param ParameterMap $paramInstance An instance of ParameterMap
	 * @param HeaderMap $headerInstance An instance of HeaderMap
	 * @return APIResponse An instance of APIResponse
	 */
	public  function getUsers(ParameterMap $paramInstance=null, HeaderMap $headerInstance=null)
	{
		$handlerInstance=new CommonAPIHandler(); 
		$apiPath=""; 
		$apiPath=$apiPath.('/crm/v3/users'); 
		$handlerInstance->setAPIPath($apiPath); 
		$handlerInstance->setHttpMethod(Constants::REQUEST_METHOD_GET); 
		$handlerInstance->setCategoryMethod(Constants::REQUEST_CATEGORY_READ); 
		$handlerInstance->setParam($paramInstance); 
		$handlerInstance->setHeader($headerInstance); 
		return $handlerInstance->apiCall(ResponseHandler::class, 'application/json'); 

	}

	/**
	 * The method to create user
	 * @param RequestWrapper $request An instance of RequestWrapper
	 * @return APIResponse An instance of APIResponse
	 */
	public  function createUser(RequestWrapper $request)
	{
		$handlerInstance=new CommonAPIHandler(); 
		$apiPath=""; 
		$apiPath=$apiPath.('/crm/v3/users'); 
		$handlerInstance->setAPIPath($apiPath); 
		$handlerInstance->setHttpMethod(Constants::REQUEST_METHOD_POST); 
		$handlerInstance->setCategoryMethod(Constants::REQUEST_CATEGORY_CREATE); 
		$handlerInstance->setContentType('application/json'); 
		$handlerInstance->setRequest($request); 
		$handlerInstance->setMandatoryChecker(true); 
		return $handlerInstance->apiCall(ActionHandler::class, 'application/json'); 

	}

	/**
	 * The method to update users
	 * @param BodyWrapper $request An instance of BodyWrapper
	 * @return APIResponse An instance of APIResponse
	 */
	public  function updateUsers(BodyWrapper $request)
	{
		$handlerInstance=new CommonAPIHandler(); 
		$apiPath=""; 
		$apiPath=$apiPath.('/crm/v3/users'); 
		$handlerInstance->setAPIPath($apiPath); 
		$handlerInstance->setHttpMethod(Constants::REQUEST_METHOD_PUT); 
		$handlerInstance->setCategoryMethod(Constants::REQUEST_CATEGORY_UPDATE); 
		$handlerInstance->setContentType('application/json'); 
		$handlerInstance->setRequest($request); 
		$handlerInstance->setMandatoryChecker(true); 
		return $handlerInstance->apiCall(ActionHandler::class, 'application/json'); 

	}

	/**
	 * The method to get user
	 * @param string $id A string
	 * @param HeaderMap $headerInstance An instance of HeaderMap
	 * @return APIResponse An instance of APIResponse
	 */
	public  function getUser(string $id, HeaderMap $headerInstance=null)
	{
		$handlerInstance=new CommonAPIHandler(); 
		$apiPath=""; 
		$apiPath=$apiPath.('/crm/v3/users/'); 
		$apiPath=$apiPath.(strval($id)); 
		$handlerInstance->setAPIPath($apiPath); 
		$handlerInstance->setHttpMethod(Constants::REQUEST_METHOD_GET); 
		$handlerInstance->setCategoryMethod(Constants::REQUEST_CATEGORY_READ); 
		$handlerInstance->setHeader($headerInstance); 
		return $handlerInstance->apiCall(ResponseHandler::class, 'application/json'); 

	}

	/**
	 * The method to update user
	 * @param string $id A string
	 * @param BodyWrapper $request An instance of BodyWrapper
	 * @return APIResponse An instance of APIResponse
	 */
	public  function updateUser(string $id, BodyWrapper $request)
	{
		$handlerInstance=new CommonAPIHandler(); 
		$apiPath=""; 
		$apiPath=$apiPath.('/crm/v3/users/'); 
		$apiPath=$apiPath.(strval($id)); 
		$handlerInstance->setAPIPath($apiPath); 
		$handlerInstance->setHttpMethod(Constants::REQUEST_METHOD_PUT); 
		$handlerInstance->setCategoryMethod(Constants::REQUEST_CATEGORY_UPDATE); 
		$handlerInstance->setContentType('application/json'); 
		$handlerInstance->setRequest($request); 
		return $handlerInstance->apiCall(ActionHandler::class, 'application/json'); 

	}

	/**
	 * The method to delete user
	 * @param string $id A string
	 * @return APIResponse An instance of APIResponse
	 */
	public  function deleteUser(string $id)
	{
		$handlerInstance=new CommonAPIHandler(); 
		$apiPath=""; 
		$apiPath=$apiPath.('/crm/v3/users/'); 
		$apiPath=$apiPath.(strval($id)); 
		$handlerInstance->setAPIPath($apiPath); 
		$handlerInstance->setHttpMethod(Constants::REQUEST_METHOD_DELETE); 
		$handlerInstance->setCategoryMethod(Constants::REQUEST_METHOD_DELETE); 
		return $handlerInstance->apiCall(ActionHandler::class, 'application/json'); 

	}

	/**
	 * The method to get territories of user
	 * @param string $id A string
	 * @param ParameterMap $paramInstance An instance of ParameterMap
	 * @return APIResponse An instance of APIResponse
	 */
	public  function getTerritoriesOfUser(string $id, ParameterMap $paramInstance=null)
	{
		$handlerInstance=new CommonAPIHandler(); 
		$apiPath=""; 
		$apiPath=$apiPath.('/crm/v3/users/'); 
		$apiPath=$apiPath.(strval($id)); 
		$apiPath=$apiPath.('/territories'); 
		$handlerInstance->setAPIPath($apiPath); 
		$handlerInstance->setHttpMethod(Constants::REQUEST_METHOD_GET); 
		$handlerInstance->setCategoryMethod(Constants::REQUEST_CATEGORY_READ); 
		$handlerInstance->setParam($paramInstance); 
		return $handlerInstance->apiCall(ResponseHandler::class, 'application/json'); 

	}

	/**
	 * The method to update territories of user
	 * @param string $id A string
	 * @param TerritoryBodyWrapper $request An instance of TerritoryBodyWrapper
	 * @return APIResponse An instance of APIResponse
	 */
	public  function updateTerritoriesOfUser(string $id, TerritoryBodyWrapper $request)
	{
		$handlerInstance=new CommonAPIHandler(); 
		$apiPath=""; 
		$apiPath=$apiPath.('/crm/v3/users/'); 
		$apiPath=$apiPath.(strval($id)); 
		$apiPath=$apiPath.('/territories'); 
		$handlerInstance->setAPIPath($apiPath); 
		$handlerInstance->setHttpMethod(Constants::REQUEST_METHOD_PUT); 
		$handlerInstance->setCategoryMethod(Constants::REQUEST_CATEGORY_UPDATE); 
		$handlerInstance->setContentType('application/json'); 
		$handlerInstance->setRequest($request); 
		return $handlerInstance->apiCall(ActionHandler::class, 'application/json'); 

	}

	/**
	 * The method to get specific territory of user
	 * @param string $territoryId A string
	 * @param string $id A string
	 * @return APIResponse An instance of APIResponse
	 */
	public  function getSpecificTerritoryOfUser(string $territoryId, string $id)
	{
		$handlerInstance=new CommonAPIHandler(); 
		$apiPath=""; 
		$apiPath=$apiPath.('/crm/v3/users/'); 
		$apiPath=$apiPath.(strval($id)); 
		$apiPath=$apiPath.('/territories/'); 
		$apiPath=$apiPath.(strval($territoryId)); 
		$handlerInstance->setAPIPath($apiPath); 
		$handlerInstance->setHttpMethod(Constants::REQUEST_METHOD_GET); 
		$handlerInstance->setCategoryMethod(Constants::REQUEST_CATEGORY_READ); 
		return $handlerInstance->apiCall(ResponseHandler::class, 'application/json'); 

	}

	/**
	 * The method to get validate territories before transferring
	 * @param string $id A string
	 * @return APIResponse An instance of APIResponse
	 */
	public  function getValidateTerritoriesBeforeTransferring(string $id)
	{
		$handlerInstance=new CommonAPIHandler(); 
		$apiPath=""; 
		$apiPath=$apiPath.('/crm/v3/users/'); 
		$apiPath=$apiPath.(strval($id)); 
		$apiPath=$apiPath.('/territories/actions/validate_before_transfer'); 
		$handlerInstance->setAPIPath($apiPath); 
		$handlerInstance->setHttpMethod(Constants::REQUEST_METHOD_GET); 
		$handlerInstance->setCategoryMethod(Constants::REQUEST_CATEGORY_READ); 
		return $handlerInstance->apiCall(ResponseHandler::class, 'application/json'); 

	}

	/**
	 * The method to get validate specific territory before transferring
	 * @param string $territoryId A string
	 * @param string $id A string
	 * @return APIResponse An instance of APIResponse
	 */
	public  function getValidateSpecificTerritoryBeforeTransferring(string $territoryId, string $id)
	{
		$handlerInstance=new CommonAPIHandler(); 
		$apiPath=""; 
		$apiPath=$apiPath.('/crm/v3/users/'); 
		$apiPath=$apiPath.(strval($id)); 
		$apiPath=$apiPath.('/territories/'); 
		$apiPath=$apiPath.(strval($territoryId)); 
		$apiPath=$apiPath.('/actions/validate_before_transfer'); 
		$handlerInstance->setAPIPath($apiPath); 
		$handlerInstance->setHttpMethod(Constants::REQUEST_METHOD_GET); 
		$handlerInstance->setCategoryMethod(Constants::REQUEST_CATEGORY_READ); 
		return $handlerInstance->apiCall(ResponseHandler::class, 'application/json'); 

	}

	/**
	 * The method to delink and transfer territories of user
	 * @param string $id A string
	 * @param TransferBodyWrapper $request An instance of TransferBodyWrapper
	 * @return APIResponse An instance of APIResponse
	 */
	public  function delinkAndTransferTerritoriesOfUser(string $id, TransferBodyWrapper $request)
	{
		$handlerInstance=new CommonAPIHandler(); 
		$apiPath=""; 
		$apiPath=$apiPath.('/crm/v3/users/'); 
		$apiPath=$apiPath.(strval($id)); 
		$apiPath=$apiPath.('/territories/actions/transfer_and_delink'); 
		$handlerInstance->setAPIPath($apiPath); 
		$handlerInstance->setHttpMethod(Constants::REQUEST_METHOD_PUT); 
		$handlerInstance->setCategoryMethod(Constants::REQUEST_CATEGORY_UPDATE); 
		$handlerInstance->setContentType('application/json'); 
		$handlerInstance->setRequest($request); 
		return $handlerInstance->apiCall(ActionHandler::class, 'application/json'); 

	}

	/**
	 * The method to delink and transfer specific territory of user
	 * @param string $territoryId A string
	 * @param string $id A string
	 * @param TransferBodyWrapper $request An instance of TransferBodyWrapper
	 * @return APIResponse An instance of APIResponse
	 */
	public  function delinkAndTransferSpecificTerritoryOfUser(string $territoryId, string $id, TransferBodyWrapper $request)
	{
		$handlerInstance=new CommonAPIHandler(); 
		$apiPath=""; 
		$apiPath=$apiPath.('/crm/v3/users/'); 
		$apiPath=$apiPath.(strval($id)); 
		$apiPath=$apiPath.('/territories/'); 
		$apiPath=$apiPath.(strval($territoryId)); 
		$apiPath=$apiPath.('/actions/transfer_and_delink'); 
		$handlerInstance->setAPIPath($apiPath); 
		$handlerInstance->setHttpMethod(Constants::REQUEST_METHOD_PUT); 
		$handlerInstance->setCategoryMethod(Constants::REQUEST_CATEGORY_UPDATE); 
		$handlerInstance->setContentType('application/json'); 
		$handlerInstance->setRequest($request); 
		return $handlerInstance->apiCall(ActionHandler::class, 'application/json'); 

	}
} 
