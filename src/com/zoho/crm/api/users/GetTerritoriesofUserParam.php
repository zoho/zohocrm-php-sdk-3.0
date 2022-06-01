<?php 
namespace com\zoho\crm\api\users;

use com\zoho\crm\api\Param;

class GetTerritoriesofUserParam
{

	public static final function page()
	{
		return new Param('page', 'com.zoho.crm.api.Users.GetTerritoriesofUserParam'); 

	}
	public static final function perPage()
	{
		return new Param('per_page', 'com.zoho.crm.api.Users.GetTerritoriesofUserParam'); 

	}
	public static final function count()
	{
		return new Param('count', 'com.zoho.crm.api.Users.GetTerritoriesofUserParam'); 

	}
	public static final function moreRecords()
	{
		return new Param('more_records', 'com.zoho.crm.api.Users.GetTerritoriesofUserParam'); 

	}
} 
