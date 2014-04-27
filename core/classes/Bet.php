<?php
require_once (dirname(__FILE__) . '/../database.php');

/**
@brief Class containing a bet

The class contains the following information:
	-id 
 	-matchId
 	-teamId
 	-time
 	-userId
*/

class Bet {
	private $db;
	private $id;

	/**
	Constructor

	@param id The ID of the bet
	*/
	public function __construct($id, &$db) {
		$this->db = &$db;
		$this->id = $id;

	}

	/**
	Returns the id

	@return id
	*/
	public function getId() {
		return $this->id;
	}

	/**
	 Returns the Match ID
	 @return Match ID
	 */
	 public function getMatchId() {
	 	return $this->db->getMatchFromBet($this->id);
	 }
	 
	 /**
	  Returns the User ID
	  
	  @return User ID
	  */
	  public function getUserId() {
	  	return $this->db->getUserFromBet($this->id);
	  }
	  
	  /**
	   Returns the score put on the first team
	    
	   @return score team A
	   */
	   public function getScoreA() {
	   	return $this->db->getScoreAFromBet($this->id);
	   }
	   
	   /**
	   Returns the score put on the second team
	    
	   @return score team B
	   */
	   public function getScoreB() {
	   	return $this->db->getScoreBFromBet($this->id);
	   }
	   
	   
	   /**
	    Returns the amount of money the bet contains
	     
	    @return amount of money
	    */
	    public function getMoney() {
	    	return $this->db->getMoneyFromBet($this->id);
	    }
		
		/**
		 Returns the amount of items the user has bet on
		 @return an int telling on how many options the user has bet
		 */
		 public function howManyItemsBet(){
		 	$retVal=0;
			if($this->getScoreA()>=0){
				$retVal = $retVal +1;
			}
			if($this->getScoreB()>=0){
				$retVal = $retVal +1;
			}
			return $retVal;
		 }

    /**
    String function

    @return string
    */
    public function __toString() {
        $output = "ID: $this->id";
        /*$output = $output . "$this->teamA";
        $output = $output . " - ";
        $output = $output . "$this->teamB";*/
        return $output;
    }
}

?>