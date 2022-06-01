<?php 
namespace com\zoho\crm\api\layouts;

use com\zoho\crm\api\profiles\Profile;
use com\zoho\crm\api\users\User;
use com\zoho\crm\api\util\Model;

class Layout implements Model
{

	private  $hasMoreProfiles;
	private  $createdTime;
	private  $convertMapping;
	private  $modifiedTime;
	private  $visible;
	private  $createdFor;
	private  $name;
	private  $modifiedBy;
	private  $profiles;
	private  $source;
	private  $id;
	private  $createdBy;
	private  $sections;
	private  $displayLabel;
	private  $status;
	private  $displayType;
	private  $showBusinessCard;
	private  $actionsAllowed;
	private  $generatedType;
	private  $apiName;
	private  $keyModified=array();

	/**
	 * The method to get the hasMoreProfiles
	 * @return bool A bool representing the hasMoreProfiles
	 */
	public  function getHasMoreProfiles()
	{
		return $this->hasMoreProfiles; 

	}

	/**
	 * The method to set the value to hasMoreProfiles
	 * @param bool $hasMoreProfiles A bool
	 */
	public  function setHasMoreProfiles(bool $hasMoreProfiles)
	{
		$this->hasMoreProfiles=$hasMoreProfiles; 
		$this->keyModified['has_more_profiles'] = 1; 

	}

	/**
	 * The method to get the createdTime
	 * @return \DateTime An instance of \DateTime
	 */
	public  function getCreatedTime()
	{
		return $this->createdTime; 

	}

	/**
	 * The method to set the value to createdTime
	 * @param \DateTime $createdTime An instance of \DateTime
	 */
	public  function setCreatedTime(\DateTime $createdTime)
	{
		$this->createdTime=$createdTime; 
		$this->keyModified['created_time'] = 1; 

	}

	/**
	 * The method to get the convertMapping
	 * @return array A array representing the convertMapping
	 */
	public  function getConvertMapping()
	{
		return $this->convertMapping; 

	}

	/**
	 * The method to set the value to convertMapping
	 * @param array $convertMapping A array
	 */
	public  function setConvertMapping(array $convertMapping)
	{
		$this->convertMapping=$convertMapping; 
		$this->keyModified['convert_mapping'] = 1; 

	}

	/**
	 * The method to get the modifiedTime
	 * @return \DateTime An instance of \DateTime
	 */
	public  function getModifiedTime()
	{
		return $this->modifiedTime; 

	}

	/**
	 * The method to set the value to modifiedTime
	 * @param \DateTime $modifiedTime An instance of \DateTime
	 */
	public  function setModifiedTime(\DateTime $modifiedTime)
	{
		$this->modifiedTime=$modifiedTime; 
		$this->keyModified['modified_time'] = 1; 

	}

	/**
	 * The method to get the visible
	 * @return bool A bool representing the visible
	 */
	public  function getVisible()
	{
		return $this->visible; 

	}

	/**
	 * The method to set the value to visible
	 * @param bool $visible A bool
	 */
	public  function setVisible(bool $visible)
	{
		$this->visible=$visible; 
		$this->keyModified['visible'] = 1; 

	}

	/**
	 * The method to get the createdFor
	 * @return User An instance of User
	 */
	public  function getCreatedFor()
	{
		return $this->createdFor; 

	}

	/**
	 * The method to set the value to createdFor
	 * @param User $createdFor An instance of User
	 */
	public  function setCreatedFor(User $createdFor)
	{
		$this->createdFor=$createdFor; 
		$this->keyModified['created_for'] = 1; 

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
		$this->keyModified['name'] = 1; 

	}

	/**
	 * The method to get the modifiedBy
	 * @return User An instance of User
	 */
	public  function getModifiedBy()
	{
		return $this->modifiedBy; 

	}

	/**
	 * The method to set the value to modifiedBy
	 * @param User $modifiedBy An instance of User
	 */
	public  function setModifiedBy(User $modifiedBy)
	{
		$this->modifiedBy=$modifiedBy; 
		$this->keyModified['modified_by'] = 1; 

	}

	/**
	 * The method to get the profiles
	 * @return array A array representing the profiles
	 */
	public  function getProfiles()
	{
		return $this->profiles; 

	}

	/**
	 * The method to set the value to profiles
	 * @param array $profiles A array
	 */
	public  function setProfiles(array $profiles)
	{
		$this->profiles=$profiles; 
		$this->keyModified['profiles'] = 1; 

	}

	/**
	 * The method to get the source
	 * @return string A string representing the source
	 */
	public  function getSource()
	{
		return $this->source; 

	}

	/**
	 * The method to set the value to source
	 * @param string $source A string
	 */
	public  function setSource(string $source)
	{
		$this->source=$source; 
		$this->keyModified['source'] = 1; 

	}

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
	 * The method to get the createdBy
	 * @return User An instance of User
	 */
	public  function getCreatedBy()
	{
		return $this->createdBy; 

	}

	/**
	 * The method to set the value to createdBy
	 * @param User $createdBy An instance of User
	 */
	public  function setCreatedBy(User $createdBy)
	{
		$this->createdBy=$createdBy; 
		$this->keyModified['created_by'] = 1; 

	}

	/**
	 * The method to get the sections
	 * @return array A array representing the sections
	 */
	public  function getSections()
	{
		return $this->sections; 

	}

	/**
	 * The method to set the value to sections
	 * @param array $sections A array
	 */
	public  function setSections(array $sections)
	{
		$this->sections=$sections; 
		$this->keyModified['sections'] = 1; 

	}

	/**
	 * The method to get the displayLabel
	 * @return string A string representing the displayLabel
	 */
	public  function getDisplayLabel()
	{
		return $this->displayLabel; 

	}

	/**
	 * The method to set the value to displayLabel
	 * @param string $displayLabel A string
	 */
	public  function setDisplayLabel(string $displayLabel)
	{
		$this->displayLabel=$displayLabel; 
		$this->keyModified['display_label'] = 1; 

	}

	/**
	 * The method to get the status
	 * @return string A string representing the status
	 */
	public  function getStatus()
	{
		return $this->status; 

	}

	/**
	 * The method to set the value to status
	 * @param string $status A string
	 */
	public  function setStatus(string $status)
	{
		$this->status=$status; 
		$this->keyModified['status'] = 1; 

	}

	/**
	 * The method to get the displayType
	 * @return int A int representing the displayType
	 */
	public  function getDisplayType()
	{
		return $this->displayType; 

	}

	/**
	 * The method to set the value to displayType
	 * @param int $displayType A int
	 */
	public  function setDisplayType(int $displayType)
	{
		$this->displayType=$displayType; 
		$this->keyModified['display_type'] = 1; 

	}

	/**
	 * The method to get the showBusinessCard
	 * @return bool A bool representing the showBusinessCard
	 */
	public  function getShowBusinessCard()
	{
		return $this->showBusinessCard; 

	}

	/**
	 * The method to set the value to showBusinessCard
	 * @param bool $showBusinessCard A bool
	 */
	public  function setShowBusinessCard(bool $showBusinessCard)
	{
		$this->showBusinessCard=$showBusinessCard; 
		$this->keyModified['show_business_card'] = 1; 

	}

	/**
	 * The method to get the actionsAllowed
	 * @return ActionsAllowed An instance of ActionsAllowed
	 */
	public  function getActionsAllowed()
	{
		return $this->actionsAllowed; 

	}

	/**
	 * The method to set the value to actionsAllowed
	 * @param ActionsAllowed $actionsAllowed An instance of ActionsAllowed
	 */
	public  function setActionsAllowed(ActionsAllowed $actionsAllowed)
	{
		$this->actionsAllowed=$actionsAllowed; 
		$this->keyModified['actions_allowed'] = 1; 

	}

	/**
	 * The method to get the generatedType
	 * @return string A string representing the generatedType
	 */
	public  function getGeneratedType()
	{
		return $this->generatedType; 

	}

	/**
	 * The method to set the value to generatedType
	 * @param string $generatedType A string
	 */
	public  function setGeneratedType(string $generatedType)
	{
		$this->generatedType=$generatedType; 
		$this->keyModified['generated_type'] = 1; 

	}

	/**
	 * The method to get the aPIName
	 * @return string A string representing the apiName
	 */
	public  function getAPIName()
	{
		return $this->apiName; 

	}

	/**
	 * The method to set the value to aPIName
	 * @param string $apiName A string
	 */
	public  function setAPIName(string $apiName)
	{
		$this->apiName=$apiName; 
		$this->keyModified['api_name'] = 1; 

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
