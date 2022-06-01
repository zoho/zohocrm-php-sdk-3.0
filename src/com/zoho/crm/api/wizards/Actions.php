<?php 
namespace com\zoho\crm\api\wizards;

use com\zoho\crm\api\fields\Field;
use com\zoho\crm\api\util\Model;

class Actions implements Model
{

	private  $id;
	private  $type;
	private  $segment;
	private  $fields;
	private  $keyModified=array();

	/**
	 * The method to get the id
	 * @return string A string representing the id
	 */
	public  function getId()
	{
		return $this->id; 

	}

	/**
	 * The method to set the value to id
	 * @param string $id A string
	 */
	public  function setId(string $id)
	{
		$this->id=$id; 
		$this->keyModified['id'] = 1; 

	}

	/**
	 * The method to get the type
	 * @return string A string representing the type
	 */
	public  function getType()
	{
		return $this->type; 

	}

	/**
	 * The method to set the value to type
	 * @param string $type A string
	 */
	public  function setType(string $type)
	{
		$this->type=$type; 
		$this->keyModified['type'] = 1; 

	}

	/**
	 * The method to get the segment
	 * @return Segment An instance of Segment
	 */
	public  function getSegment()
	{
		return $this->segment; 

	}

	/**
	 * The method to set the value to segment
	 * @param Segment $segment An instance of Segment
	 */
	public  function setSegment(Segment $segment)
	{
		$this->segment=$segment; 
		$this->keyModified['segment'] = 1; 

	}

	/**
	 * The method to get the fields
	 * @return Field An instance of Field
	 */
	public  function getFields()
	{
		return $this->fields; 

	}

	/**
	 * The method to set the value to fields
	 * @param Field $fields An instance of Field
	 */
	public  function setFields(Field $fields)
	{
		$this->fields=$fields; 
		$this->keyModified['fields'] = 1; 

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
