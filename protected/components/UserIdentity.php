<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	private $_id; 
	 
	public function authenticate()
	{
		
		$p = new CHtmlPurifier();
		$p->options = array('URI.AllowedSchemes'=>array(
		'http' => true,
		'https' => true,
		));
		
		$email = $p->purify($this->username);
		$pwd = $p->purify($this->password);
		
				
		$sql="SELECT * FROM site_register WHERE username='".$email."' ";
		$users = SiteRegister::model()->findBySql($sql);
		
		if(!isset($users->email))
		{
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		}
		else if($users->password!==$this->password)
		{
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
		}
		else
		{
			$this->_id = $users->id;
			
			//set user session 

			$this->setState('user_id', $users->id);
			
			$this->setState('sitetype', 5);
			
			$this->setState('userid', $users->site_id);
			
			$this->setState('user_email', $users->email);
			
			$this->errorCode=self::ERROR_NONE;
		}
		
		return !$this->errorCode;
	}
	
	public function getId()
    {
        return $this->_id;
    }
}
