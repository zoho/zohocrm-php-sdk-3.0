<?php 
namespace com\zoho\crm\api\users;

use com\zoho\crm\api\util\Model;

class Territory implements Model
{

	private  $id;
	private  $manager;
	private  $name;
	private  $reportingTo;
	private  $records;
	private  $transferToUser;
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
	 * The method to get the manager
	 * @return User An instance of User
	 */
	public  function getManager()
	{
		return $this->manager; 

	}

	/**
	 * The method to set the value to manager
	 * @param User $manager An instance of User
	 */
	public  function setManager(User $manager)
	{
		$this->manager=$manager; 
		$this->keyModified['Manager'] = 1; 

	}

	/**
	 * The method to get the name
	 * @return string A string representing the name
	 */
	public  function getName()
	{
		return $this->name; 

	}

	/**
	 * The method to set the value to name
	 * @param string $name A string
	 */
	public  function setName(string $name)
	{
		$this->name=$name; 
		$this->keyModified['Name'] = 1; 

	}

	/**
	 * The method to get the reportingTo
	 * @return Territory An instance of Territory
	 */
	public  function getReportingTo()
	{
		return $this->reportingTo; 

	}

	/**
	 * The method to set the value to reportingTo
	 * @param Territory $reportingTo An instance of Territory
	 */
	public  function setReportingTo(Territory $reportingTo)
	{
		$this->reportingTo=$reportingTo; 
		$this->keyModified['Reporting_To'] = 1; 

	}

	/**
	 * The method to get the records
	 * @return bool A bool representing the records
	 */
	public  function getRecords()
	{
		return $this->records; 

	}

	/**
	 * The method to set the value to records
	 * @param bool $records A bool
	 */
	public  function setRecords(bool $records)
	{
		$this->records=$records; 
		$this->keyModified['records'] = 1; 

	}

	/**
	 * The method to get the transferToUser
	 * @return User An instance of User
	 */
	public  function getTransferToUser()
	{
		return $this->transferToUser; 

	}

	/**
	 * The method to set the value to transferToUser
	 * @param User $transferToUser An instance of User
	 */
	public  function setTransferToUser(User $transferToUser)
	{
		$this->transferToUser=$transferToUser; 
		$this->keyModified['transfer_to_user'] = 1; 

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
