<?php 
namespace com\zoho\crm\api\scoringrules;

use com\zoho\crm\api\util\Model;

class EntityScore implements Model
{

	private  $entity;
	private  $id;
	private  $scoringRule;
	private  $score;
	private  $positiveScore;
	private  $touchPointScore;
	private  $negativeScore;
	private  $positiveTouchPointScore;
	private  $negativeTouchPointScore;
	private  $keyModified=array();

	/**
	 * The method to get the entity
	 * @return Entity An instance of Entity
	 */
	public  function getEntity()
	{
		return $this->entity; 

	}

	/**
	 * The method to set the value to entity
	 * @param Entity $entity An instance of Entity
	 */
	public  function setEntity(Entity $entity)
	{
		$this->entity=$entity; 
		$this->keyModified['Entity'] = 1; 

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
	 * The method to get the scoringRule
	 * @return ScoringRule An instance of ScoringRule
	 */
	public  function getScoringRule()
	{
		return $this->scoringRule; 

	}

	/**
	 * The method to set the value to scoringRule
	 * @param ScoringRule $scoringRule An instance of ScoringRule
	 */
	public  function setScoringRule(ScoringRule $scoringRule)
	{
		$this->scoringRule=$scoringRule; 
		$this->keyModified['Scoring_Rule'] = 1; 

	}

	/**
	 * The method to get the score
	 * @return int A int representing the score
	 */
	public  function getScore()
	{
		return $this->score; 

	}

	/**
	 * The method to set the value to score
	 * @param int $score A int
	 */
	public  function setScore(int $score)
	{
		$this->score=$score; 
		$this->keyModified['Score'] = 1; 

	}

	/**
	 * The method to get the positiveScore
	 * @return int A int representing the positiveScore
	 */
	public  function getPositiveScore()
	{
		return $this->positiveScore; 

	}

	/**
	 * The method to set the value to positiveScore
	 * @param int $positiveScore A int
	 */
	public  function setPositiveScore(int $positiveScore)
	{
		$this->positiveScore=$positiveScore; 
		$this->keyModified['Positive_Score'] = 1; 

	}

	/**
	 * The method to get the touchPointScore
	 * @return int A int representing the touchPointScore
	 */
	public  function getTouchPointScore()
	{
		return $this->touchPointScore; 

	}

	/**
	 * The method to set the value to touchPointScore
	 * @param int $touchPointScore A int
	 */
	public  function setTouchPointScore(int $touchPointScore)
	{
		$this->touchPointScore=$touchPointScore; 
		$this->keyModified['Touch_Point_Score'] = 1; 

	}

	/**
	 * The method to get the negativeScore
	 * @return int A int representing the negativeScore
	 */
	public  function getNegativeScore()
	{
		return $this->negativeScore; 

	}

	/**
	 * The method to set the value to negativeScore
	 * @param int $negativeScore A int
	 */
	public  function setNegativeScore(int $negativeScore)
	{
		$this->negativeScore=$negativeScore; 
		$this->keyModified['Negative_Score'] = 1; 

	}

	/**
	 * The method to get the positiveTouchPointScore
	 * @return int A int representing the positiveTouchPointScore
	 */
	public  function getPositiveTouchPointScore()
	{
		return $this->positiveTouchPointScore; 

	}

	/**
	 * The method to set the value to positiveTouchPointScore
	 * @param int $positiveTouchPointScore A int
	 */
	public  function setPositiveTouchPointScore(int $positiveTouchPointScore)
	{
		$this->positiveTouchPointScore=$positiveTouchPointScore; 
		$this->keyModified['Positive_Touch_Point_Score'] = 1; 

	}

	/**
	 * The method to get the negativeTouchPointScore
	 * @return int A int representing the negativeTouchPointScore
	 */
	public  function getNegativeTouchPointScore()
	{
		return $this->negativeTouchPointScore; 

	}

	/**
	 * The method to set the value to negativeTouchPointScore
	 * @param int $negativeTouchPointScore A int
	 */
	public  function setNegativeTouchPointScore(int $negativeTouchPointScore)
	{
		$this->negativeTouchPointScore=$negativeTouchPointScore; 
		$this->keyModified['Negative_Touch_Point_Score'] = 1; 

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
