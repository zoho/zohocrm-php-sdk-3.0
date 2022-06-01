<?php 
namespace com\zoho\crm\api\contactroles;

use com\zoho\crm\api\Param;

class GetAllContactRolesOfDealParam
{

	public static final function ids()
	{
		return new Param('ids', 'com.zoho.crm.api.ContactRoles.GetAllContactRolesOfDealParam'); 

	}
	public static final function fields()
	{
		return new Param('fields', 'com.zoho.crm.api.ContactRoles.GetAllContactRolesOfDealParam'); 

	}
} 
