<?php 
namespace com\zoho\crm\api\changeowner;

use com\zoho\crm\api\exception\SDKException;
use com\zoho\crm\api\util\CommonAPIHandler;
use com\zoho\crm\api\util\Constants;
use com\zoho\crm\api\util\APIResponse;

class ChangeOwnerOperations
{

	private  $moduleAPIName;

	/**
	 * Creates an instance of ChangeOwnerOperations with the given parameters
	 * @param string $moduleAPIName A string
	 */
	public function __Construct(string $moduleAPIName)
	{
		$this->moduleAPIName=$moduleAPIName; 

	}

	/**
	 * The method to update record owner
	 * @param string $recordId A string
	 * @param BodyWrapper $request An instance of BodyWrapper
	 * @return APIResponse An instance of APIResponse
	 */
	public  function updateRecordOwner(string $recordId, BodyWrapper $request)
	{
		$handlerInstance=new CommonAPIHandler(); 
		$apiPath=""; 
		$apiPath=$apiPath.('/crm/v3/'); 
		$apiPath=$apiPath.(strval($this->moduleAPIName)); 
		$apiPath=$apiPath.('/'); 
		$apiPath=$apiPath.(strval($recordId)); 
		$apiPath=$apiPath.('/actions/change_owner'); 
		$handlerInstance->setAPIPath($apiPath); 
		$handlerInstance->setHttpMethod(Constants::REQUEST_METHOD_POST); 
		$handlerInstance->setCategoryMethod(Constants::REQUEST_CATEGORY_CREATE); 
		$handlerInstance->setContentType('application/json'); 
		$handlerInstance->setRequest($request); 
		$handlerInstance->setMandatoryChecker(true); 
		return $handlerInstance->apiCall(RecordActionHandler::class, 'application/json'); 

	}

	/**
	 * The method to update records owner
	 * @param BodyWrapper $request An instance of BodyWrapper
	 * @return APIResponse An instance of APIResponse
	 */
	public  function updateRecordsOwner(BodyWrapper $request)
	{
		$handlerInstance=new CommonAPIHandler(); 
		$apiPath=""; 
		$apiPath=$apiPath.('/crm/v3/'); 
		$apiPath=$apiPath.(strval($this->moduleAPIName)); 
		$apiPath=$apiPath.('/actions/change_owner'); 
		$handlerInstance->setAPIPath($apiPath); 
		$handlerInstance->setHttpMethod(Constants::REQUEST_METHOD_POST); 
		$handlerInstance->setCategoryMethod(Constants::REQUEST_CATEGORY_CREATE); 
		$handlerInstance->setContentType('application/json'); 
		$handlerInstance->setRequest($request); 
		$handlerInstance->setMandatoryChecker(true); 
		return $handlerInstance->apiCall(RecordActionHandler::class, 'application/json'); 

	}
} 
