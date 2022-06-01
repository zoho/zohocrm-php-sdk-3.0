<?php 
namespace com\zoho\crm\api\record;

use com\zoho\crm\api\util\Model;

class ConversionOptionsResponseWrapper implements Model, ResponseHandler
{

	private  $conversionoptions;
	private  $keyModified=array();

	/**
	 * The method to get the conversionoptions
	 * @return ConversionOption An instance of ConversionOption
	 */
	public  function getConversionoptions()
	{
		return $this->conversionoptions; 

	}

	/**
	 * The method to set the value to conversionoptions
	 * @param ConversionOption $conversionoptions An instance of ConversionOption
	 */
	public  function setConversionoptions(ConversionOption $conversionoptions)
	{
		$this->conversionoptions=$conversionoptions; 
		$this->keyModified['__conversion_options'] = 1; 

	}

	/**
	 * The method to check if the user has modified the given key
	 * @param string $key A string
	 * @return int A int representing the modification
	 */
	public  function isKeyModified(string $key)
	{
		if(((array_key_exists($key, $this->keyModified))))
		{
			return $this->keyModified[$key]; 

		}
		return null; 

	}

	/**
	 * The method to mark the given key as modified
	 * @param string $key A string
	 * @param int $modification A int
	 */
	public  function setKeyModified(string $key, int $modification)
	{
		$this->keyModified[$key] = $modification; 

	}
} 
