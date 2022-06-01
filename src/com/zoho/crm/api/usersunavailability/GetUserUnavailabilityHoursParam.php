<?php 
namespace com\zoho\crm\api\usersunavailability;

use com\zoho\crm\api\Param;

class GetUserUnavailabilityHoursParam
{

	public static final function includeInnerDetails()
	{
		return new Param('include_inner_details', 'com.zoho.crm.api.UsersUnavailability.GetUserUnavailabilityHoursParam'); 

	}
	public static final function filters()
	{
		return new Param('filters', 'com.zoho.crm.api.UsersUnavailability.GetUserUnavailabilityHoursParam'); 

	}
} 
